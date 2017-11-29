local utils = require "motan.utils"
local singletons = require "motan.singletons"
local client_map = singletons.client_map

local http_method = ngx.req.get_method()
local params = {}
params = ngx.req.get_uri_args()
ngx.req.read_body()
local body = ngx.req.get_body_data()
if body ~= nil then
    if type(body) == "table" then
        for k,v in pairs(body) do
            params[k] = v
        end
    else
        -- single param get from request body for testing
        params = body
    end
end

local service_name = params["sn"] or "helloworld_service"
local service_call_method_name = params["scmn"] or "Hello"
local service = client_map[service_name]
local service_method = service[service_call_method_name]
local res = service_method(service, params)
ngx.header["X-IDEVZ"] = 'idevz-k-49';
print_r("<pre/>")
print_r(ngx.req.get_headers())
if type(res) == "table" then
    res = sprint_r(res)
end
ngx.say(">>> Motan-Mesh-HTTP: \n" .. res)
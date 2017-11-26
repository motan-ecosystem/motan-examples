local utils = require "motan.utils"
local singletons = require "motan.singletons"
local serialize = require "motan.serialize.simple"
local client_map = singletons.client_map
local client = client_map["rpc_test"]
local http_method = ngx.req.get_method()
local params = {}
params = ngx.req.get_uri_args()
if http_method == "POST" then
    ngx.req.read_body()
    local post_args = ngx.req.get_post_args()
    for k,v in pairs(post_args) do
        params[k] = v
    end
end
params["http_method"] = http_method
local res = client:show_batch(params)
ngx.header["X-IDEVZ"] = 'idevz-k-49';
print_r("<pre/>")
print_r(res)
print_r(ngx.req.get_headers())
print_r(client.response)
-- print_r(serialize.deserialize(res.body))
-- local client2 = client_map["rpc_test_java"]
-- local res2 = client2:hello("<-----Motan")
-- print_r(serialize.deserialize(res2.body))
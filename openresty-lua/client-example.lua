local utils = require "motan.utils"
local singletons = require "motan.singletons"
local client_map = singletons.client_map


local ffi = require 'ffi'
local C = ffi.C

ffi.cdef[[
    int ngx_http_lua_ffi_worker_pid(void);
]]

function get_worker_pid()
    return C.ngx_http_lua_ffi_worker_pid()
end

-- @TODO JAVA Consul PUT
-- curl -X PUT -i 'http://10.211.55.3:8500/v1/agent/check/pass/service:192.168.199.199:8002-com.weibo.motan.HelloWorldService'
-- local client = client_map["java_helloworld_service"]
local client = client_map["helloworld_service"]
local bytes = table.concat( {string.byte( utils.pack_request_id("111111"), 1, -1 )}, ", " )
local res = client:Hello({name="idevz\n" .. get_worker_pid() .. "\n" .. bytes})
ngx.say(res)
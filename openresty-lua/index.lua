local utils = require "motan.utils"
local singletons = require "motan.singletons"
local client_map = singletons.client_map
-- @TODO JAVA Consul PUT
-- curl -X PUT -i 'http://10.211.55.3:8500/v1/agent/check/pass/service:192.168.199.199:8002-com.weibo.motan.HelloWorldService'
-- local client = client_map["java_helloworld_service"]
local client = client_map["helloworld_service"]
local res = client:Hello({name="idevz"})
ngx.say(res)
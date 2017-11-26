local utils = require "motan.utils"
local singletons = require "motan.singletons"
local client_map = singletons.client_map
local client = client_map["helloworld_service"]
local res = client2:Hello("<-----Motan")
print_r(serialize.deserialize(res.body))
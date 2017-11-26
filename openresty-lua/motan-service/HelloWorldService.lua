-- Copyright (C) idevz (idevz.org)


local consts = require "motan.consts"
local utils = require "motan.utils"
local null = ngx.null
local setmetatable = setmetatable
local tab_concat = table.concat
local tab_insert = table.insert

local _M = {
    _VERSION = '0.0.1'
}

local mt = {__index = _M}

-- @TODO add metadata to service_instance when new
function _M.new(self, opts)
    local helloworld = {}
    return setmetatable(helloworld, mt)
end

function _M.Hello(self, params)
    local res
    for k,v in pairs(params) do
        res = "Motan OpenResty Lua: " .. k .. " ---> " .. v .. "\n"
    end
    return res
end

function _M.BigInt(self, big_int_byte)
    return utils.unpack_request_id(big_int_byte) .. "\n" .. table.concat( {string.byte( big_int_byte, 1, -1 )}, ", " )
end

return _M

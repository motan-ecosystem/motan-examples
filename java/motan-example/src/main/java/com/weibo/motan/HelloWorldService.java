package com.weibo.motan;

import com.weibo.api.motan.protocol.yar.annotation.YarConfig;

import java.util.Map;

@YarConfig(path = "/motan_yar/helloworld")
public interface HelloWorldService {
    public String Hello(Map<String, String> params);
    public String Hellox(String name);
}

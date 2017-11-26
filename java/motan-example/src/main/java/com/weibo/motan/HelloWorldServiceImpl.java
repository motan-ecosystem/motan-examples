package com.weibo.motan;

import java.util.Map;

public class HelloWorldServiceImpl implements HelloWorldService {
    public String Hello(Map<String, String> params)
    {
        String res = "";
        StringBuilder sb = new StringBuilder();
        for (Map.Entry entry:params.entrySet()) {
            res += "Motan Java: " + entry.getKey() + "--->" + entry.getValue() + "\n";
        }
        return  res;
    }
}

package com.weibo.motan.benchmark;

import java.util.List;
import java.util.Map;

public class BenchmarkServiceImpl implements BenchmarkService {
    @Override
    public String echoService(String request) {
        return request;
    }

    @Override
    public void emptyService() {

    }

    @Override
    public Map<Long, Integer> getUserTypes(List<Long> uids) {
        return null;
    }

    @Override
    public long[] getLastStausIds(long[] uids) {
        return new long[0];
    }
}

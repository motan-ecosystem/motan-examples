# motan-examples

Motan using examples about the crossing language calling.


# service define for each language(JAVA, Golang, OpenResty-Lua, PHP)

- HelloWorldService // for simple test demo
- BenchmarkService  // for bencmark testing


# service identify

In each language use the same Motan Service Path, 
just like 'com.weibo.motan.HelloWorldService' for HelloWorldService,
'com.weibo.motan.benchmark.BenchmarkService' for BenchmarkService,
but each service have different group name, like `motan-go-example` for Golang,
`motan-java-example` for Java, `motan-openresty-example` for OpenResty-Lua,
`motan-server-mesh-example` for weibo-mesh and so on.
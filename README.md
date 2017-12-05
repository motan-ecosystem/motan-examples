# Motan-Examples

Motan using examples about the crossing language calling.


# Service define for each language

* (JAVA, Golang, OpenResty-Lua, PHP)*

- HelloWorldService // for simple test demo
- BenchmarkService  // for bencmark testing


# Service Identify

In each language use the same Motan Service Path, 
just like 'com.weibo.motan.HelloWorldService' for HelloWorldService,
'com.weibo.motan.benchmark.BenchmarkService' for BenchmarkService,
but each service have different group name, like `motan-go-example` for Golang,
`motan-java-example` for Java, `motan-openresty-example` for OpenResty-Lua,
`motan-server-mesh-example` for weibo-mesh and so on.

# Installation


## For Java

**Just** follow the java/motan-exapmle/pom.xml, to get start

## For PHP

_Using composer:_

**Just** clone this porject and `cd` to the php root path, run `composer update`

_WithOut Composer:_

**If** you didn't use composer for php libraries management, please check the demo file `motan.php`, we need an defined constant `MOTAN_PHP_ROOT` for load the motan php libs. Just like the demo does.

```php
define('MOTAN_PHP_ROOT', '/media/psf/g/idevz/code/z/git/motan-examples/php/vendor/motan/motan-php/src/Motan/');
require MOTAN_PHP_ROOT . 'init.php';
```

## For OpenResty

*For* using Motan-OpenResty you should be sure that an newest OpenResty(at lest openresty-1.13.6.1 was required) was installed in your platform.

[OpenResty Installation](http://openresty.org/en/installation.html)

**Then** you need config your OpenResty. Below is simple exapmle:

```bash
user root root;
worker_processes  4;

events {
    worker_connections  1024;
}

http {
    lua_package_path "/?.lua;/?/init.lua;/motan_root/?.lua;/motan_root/?/init.lua;;";
    lua_package_cpath "/?.so;/motan_root/?.so;;";
    include /git/motan-examples/openresty-lua/ngx_conf/orcon.conf;
}

stream {
    lua_package_path "/?.lua;/?/init.lua;/motan_root/?.lua;/motan_root/?/init.lua;;";
    lua_package_cpath "/?.so;/motan_root/?.so;;";
    include /git/motan-examples/openresty-lua/ngx_stream_conf/orcon_stream.conf;
}
```

**Config Tips:**

1. First you should clone the motan-openresty project to your platform, this place we suppose that your motan-openresty is under your `/motan_root` path.
```bash
cd /motan_root
git clone https://github.com/weibocom/motan-openresty.git motan
```
2. Second add motan-openresty to your `lua_package_path` and `lua_package_cpath` like upper example, don't forgot the `/motan_root/?/init.lua` part.
3. Be sure that both `http` and `stram` subsystem should can found the example config file(like `/git/motan-examples/openresty-lua/ngx_conf/orcon.conf`).
4. stream support an motan-openresty server and http give an motan-openresty client demo.

_**FFI Libs / motan_tools**_

We implement some utils function in Motan-OpenResty through LuaJIT FFI library, now then are mostly under the `motan/libs` in the [Motan-OpenResty](https://github.com/weibocom/motan-openresty/tree/master/libs) project, and you should build this depends your platform such as Linux or MacOSX.

**For Linux:**

```bash
gcc -g -o libmotan_tools.so -fpic -shared motan_tools.c
```
And then put libmotan_tools.so under your dynamic libraries path. such as add the path to your `/etc/ld.so.conf`

**For MaxOSX**

```bash
gcc -c -g  motan_tools.c -o motan_tools.o
gcc motan_tools.o -dynamiclib -o libmotan_tools.dylib
sudo cp libmotan_tools.dylib /usr/local/lib/
```

## For Golang

1. First you should install motan-go to your platform like `go get github.com/weibocom/motan-go`.
2. We use `glide` manage libraries dependences, so you can use `glide` to init your motan-go.
3. Then you can run the demos under `./go/` path, such as `go run server.go`.

## Use Consul as a registry

**These examples** use consul as the default registry, so you shoud install consul. and just run a single agent for testing.

`consul agent -dev -client=10.211.55.3`
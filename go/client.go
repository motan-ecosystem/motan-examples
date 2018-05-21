package main

import (
	"encoding/binary"
	"fmt"
	"bytes"
	motan "github.com/weibocom/motan-go"
	motancore "github.com/weibocom/motan-go/core"
)

func main() {
	runClientDemo()
}

func runClientDemo() {
	mccontext := motan.GetClientContext("./client.yaml")
	mccontext.Start(nil)
	mclient := mccontext.GetClient("golang-example-helloworld-call-motan-openresty")

	args := make(map[string]string, 16)
	args["crop"] = "weibo"
	args["site"] = "idevz.org"
	var reply string
	err := mclient.Call("Hello", []interface{}{args}, &reply)
	if err != nil {
		fmt.Printf("motan call fail! err:%v\n", err)
	} else {
		fmt.Printf("motan call success! reply:%s\n", reply)
	}

	bigIntBytes:=new(bytes.Buffer)
	bigInt:=uint64(0xffffffffffffffff)
	binary.Write(bigIntBytes, binary.BigEndian, bigInt)
	if err := mclient.Call("BigInt", []interface{}{bigIntBytes.String()}, &reply); err == nil {
		fmt.Printf("motan call success! reply:%s\n", reply)
	} else {
		fmt.Printf("motan call fail! err:%v\n", err)
	}

	// async call
	args["is-async"] = "yes --->>>"
	result := mclient.Go("Hello", []interface{}{args}, &reply, make(chan *motancore.AsyncResult, 1))
	res := <-result.Done
	if res.Error != nil {
		fmt.Printf("motan async call fail! err:%v\n", res.Error)
	} else {
		fmt.Printf("motan async call success! reply:%+v\n", reply)
	}
}

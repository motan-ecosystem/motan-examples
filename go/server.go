package main

import (
	"time"

	motan "github.com/weibocom/motan-go"
	services "github.com/motan-ecosystem/motan-examples/go/motan-services"
)

func main() {
	mscontext := motan.GetMotanServerContext("./server.yaml")
	mscontext.RegisterService(&services.HelloWorldService{}, "")
	mscontext.RegisterService(&services.BenchmarkService{}, "")
	mscontext.Start(nil)
	time.Sleep(time.Second * 50000000)
}
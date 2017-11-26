package main

import (
	motan "github.com/weibocom/motan-go"
)

func main() {
	runAgentDemo()
}

func runAgentDemo() {
	agent := motan.NewAgent(nil)
	agent.ConfigFile = "./services.yaml"
	agent.StartMotanAgent()
}

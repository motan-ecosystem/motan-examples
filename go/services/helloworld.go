package services

type HelloWorldService struct{}

func (m *HelloWorldService) Hello(params map[string]string) string {
	if params == nil {
		return "params is nil!"
	}
	res:="\n"
	for k, v := range params {
		res = "Motan Golang: " + k + "---" + v + "\n"
	}
	return res
}

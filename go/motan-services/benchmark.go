package services

type BenchmarkService struct{}

func (b *BenchmarkService) echoService(object interface{}) interface{} {
	return object
}

func (b *BenchmarkService) emptyService(){
}

func (b *BenchmarkService) getUserTypes(uids []uint64)  map[uint64]int{
	res:=make(map[uint64]int, 10)
	for i, uid:= range uids {
		res[uid] = i
	}
	return res
}

func (b *BenchmarkService) getLastStausIds(uids []uint64)  []uint64{
	return uids
}

BEGIN{
	sum = 0
}
{

	sum = sum + $9
}

END{
	printf("httpコードの合計:%d",sum)
}
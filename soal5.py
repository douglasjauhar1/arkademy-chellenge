def findHighestProfit(lst):
	max_profit = 0
	for i in range(len(lst)):
		for j in range(i+1, len(lst)):
			temp_profit = lst[j] - lst[i]
			if temp_profit > max_profit :
				max_profit = temp_profit
    
	if max_profit > 0 :
		print(max_profit)
	else :
		print("Tidak bisa mendapatkan profit pada hari-hari ini")
	
findHighestProfit([10, 2, 11, 20, 3, 5])
findHighestProfit([33, 29, 11, 3])
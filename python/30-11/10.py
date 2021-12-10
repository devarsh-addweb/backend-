list1 = ["Hello ", "dear "]
list2 = ["Dear", "Sir"]

res = [x + y for x in list1 for y in list2]
print(res)
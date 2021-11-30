#16. Convert two lists into a dictionaryBelow are the two lists. Write a Python program to convert them into a dictionary in a way that item fromlist1 is the key and item from list2 is the value

test_keys = ["devarsh", "d", "chauhan"]
test_values = [1, 4, 5]

print ("Original key list is : " + str(test_keys))
print ("Original value list is : " + str(test_values))

res = {}
for key in test_keys:
	for value in test_values:
		res[key] = value
		test_values.remove(value)
		break


print ("Resultant dictionary is : " + str(res))

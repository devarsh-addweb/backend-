#Write a program to count occurrences of all characters within a string

from collections import Counter
test_str = "Apple"
res = Counter(test_str)
print ("Count of all characters in Apple is :\n "+ str(res))

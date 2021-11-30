# 18.Rename key of a dictionary

# Python code to demonstrate
# changing keys of dictionary
# using naive method


ini_dict = {'anil': 1, 'vishva' : 5,'manoj' : 10, 'surya' : 15}

print ("initial 1st dictionary", ini_dict)

ini_dict['akash'] = ini_dict['surya']
del ini_dict['surya']

print ("final dictionary", str(ini_dict))

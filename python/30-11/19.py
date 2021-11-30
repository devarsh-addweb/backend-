# Change value of a key in a nested dictionary

# an employee record
Employee = {
	'emp1': {
		'name': 'Lisa',
		'age': '29',
		'Designation':'Programmer'
			},
	'emp2': {
			'name': 'Steve',
			'age': '45',
			'Designation':'HR'
			}
}

# updating in the way similar to
# simple dictionary
Employee['name']='Kate'

print(Employee)

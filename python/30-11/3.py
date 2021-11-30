def first_last_same(numberList):
    print("Given list:", numberList)
    
    fnum = numberList[0]
    lnum = numberList[-1]
    
    if fnum == lnum:
        return True
    else:
        return False

numbers_x = [10, 20, 30, 40, 10]
print("result is", first_last_same(numbers_x))

numbers_y = [75, 65, 35, 75, 30]
print("result is", first_last_same(numbers_y))

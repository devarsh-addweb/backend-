a=input("Enter First Number ")
b=input("Enter Second Number ")
c=input("Enter Third Number ")
if(a==b and a==c):
    print ("All are equal")
elif (a>b and a>c):
    print ("A is Greater")
elif(b==c):
    print ("B and C are equal")
elif (b>c):
    print ("B is greater")
else:
    print ("C is greater")
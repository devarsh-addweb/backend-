#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable()
db = pymysql.connect(host="localhost",user="root",password="",database="addweb")
print ("Content-type:text/html\r\n\r\n")
cursor = db.cursor()
form = cgi.FieldStorage()

fullname = form.getvalue('fullname')
password = form.getvalue('password')
email = form.getvalue('email')
mobile = form.getvalue('mobile')

# prepare a cursor object using cursor() method

try:
    # execute SQL query using execute() method.
    cursor.execute("insert into student(fullname,password,email,mobile) values('%s','%s','%s','%s')" %(fullname,password,email,mobile))
    db.commit()        # Commit your changes in the database
    print("Data Inserted")
except:
    # Rollback in case there is any error
    db.rollback()
    print("Not insert")
# disconnect from server
db.close()
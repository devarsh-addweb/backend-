#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable()
form = cgi.FieldStorage()
db = pymysql.connect(host="localhost",user="root",password="",database="addweb")

cursor = db.cursor()
print("Content-type:text/html\r\n\r\n")

id=form.getvalue('sid')
fullname= form.getvalue('fullname')
password = form.getvalue('password')
email = form.getvalue('email')
mobile = form.getvalue('mobile')

try:
	cursor.execute("update student set fullname='%s',password='%s',email='%s',mobile='%s' where id=%s" %(fullname,password,email,mobile,id))
	db.commit()	   
	print("Data Updated")
except:
    db.rollback()
    print("error in Updating")
db.close()
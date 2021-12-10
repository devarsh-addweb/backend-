#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable()

db = pymysql.connect(host="localhost",user="root",password="",database="addweb" )

cursor = db.cursor()
form = cgi.FieldStorage()
cursor.execute("SELECT VERSION()")

data = cursor.fetchone()
print ("Content-type:text/html\r\n\r\n")

#print database version only temp close this line 
# print ("Database version : %s " % data)


email = form.getvalue('email')
password = form.getvalue('password')

q="SELECT email,password from student WHERE email='"+email+"' AND password='"+password+"'"
check=(cursor.execute(q))
if(check > 0):
        print("<center><b>Show Data<hr><br/></b></center>")

        # Fetch a single row using fetchone() method.
        cursor.execute("SELECT * from student")
        data = cursor.fetchall()
        print("id,fullname,address,mobile,mobile")
        for row in data :
            id = row[0]
            fullname = row[1]
            address = row[2]
            email = row[3]
            mobile = row[4]
            # Now print fetched result
            print ("<br>%s,%s,%s,%s ,%s,%s" %(id, fullname,address,password,email,mobile))
            print("<a href='updateform.py?sid=%d'>Edit | </a><a href='delete.py?sid=%d'>Delete</a><br>" %(id,id))
            print("<br/><br/>")
        # disconnect from server
else:
        #db.commit()
        print("<center><b>Login fail</b></center>")



db.close()


# print"contact-type: text/html\n\n';

# import cgi

# form = cgi.FieldStorage()

# username=form.getvalue("name")
# print username

#  ================
# #!/usr/bin/python3
# import pymysql
# import cgi,cgitb
# cgitb.enable()

# db = pymysql.connect(host="localhost",user="root",password="",database="addweb")


# cursor = db.cursor()
# form = cgi.FieldStorage()

# email = form.getvalue('email')
# password = form.getvalue('password')

# q="SELECT email,password from student WHERE email='"+email+"' AND password='"+password+"'"
# check=(cursor.execute(q))
# if(check):
# #db.commit()
# print ("Content-type:text/html\r\n")
# print('''<html>
# <head>
# <title>Hello Word - First CGI Program</title>
# </head>
# <body>
# <h2>successfully login</h2>
# </body>
# </html>''')
# else:
# db.commit()
# print("Content-type: text/html")
# print("<html>")
# print("<body>")
# print("<h2>Login fail</h2>")
# print("</body>")
# print("</html>")


# # disconnect from server
# db.close()



 
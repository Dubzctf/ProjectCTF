#generate key
import hashlib,random
#import for database
import MySQLdb


listofcomputer=["ITPC3111","ITPC3112","ITPC3113"]
listofFlag=["flag1","flag2","flag3","flag4","flag5"]
lenlistofFlag=len(listofFlag)
lenlistofcomputer = len(listofcomputer)


#make a connection with the database to update with the new flag
db = MySQLdb.connect(host="localhost",    # host, usually localhost
                     user="root",         # username
                     passwd="",  # password
                     db="ctf2018")        # name of the data base

cur = db.cursor()


for n in range(0,lenlistofcomputer):
	for j in range(0,lenlistofFlag):
		#we generate a salt with a random number of 6 digits
		salt=str(random.randint(100000, 999999))
		#we create a flag with the name of the computer, the  saltand the number of the flag
		flag= listofcomputer[n]+salt+listofFlag[j]
		#after this we encrypt the flag with a sha256 function
		flagEncrypt=hashlib.sha224(flag).hexdigest()
		print(listofFlag[j]+": "+listofcomputer[n]+" = "+listofFlag[j]+"{"+flagEncrypt+"}")
		# Use all the SQL you like
		if listofFlag=="flag1":
						pointFlag=10
		if listofFlag=="flag2":
						pointFlag=20
		if listofFlag=="flag3":
						pointFlag=30
		if listofFlag=="flag4":
						pointFlag=40
		if listofFlag=="flag5":
						pointFlag=50

		cur.execute("INSERT INTO flag(idFlag,computer,numberFlag,stringFlag,pointFlag) values ('"+listcomputer[n]+"',"+listofFlag[j]+",'"+flagEncrypt+"','"+pointFlag+"')")

cur.execute("SELECT * FROM flag")
# print all the first cell of all the rows
for row in cur.fetchall():
    print(row[0])

db.close()

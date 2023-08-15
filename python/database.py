import sqlite3

#connect to a (new) database
conn = sqlite3.connect("namesample.db")

#create a cursor
cur = conn.cursor()

#create a "people" table
cur.execute('''CREATE TABLE IF NOT EXISTS people
               (firstname TEXT, lastname TEXT)''')
conn.commit()

#close connection
cur.close()
conn.close()

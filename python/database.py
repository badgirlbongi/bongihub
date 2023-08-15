import sqlite3

#connect to a (new) database
conn = sqlite3.connect("namesample.db")

#create a cursor
cur = conn.cursor()

#create a "people" table
conn.execute('''CREATE TABLE IF NOT EXISTS people
               (firstname TEXT, lastname TEXT)''')

#close db objects
cur.close()
conn.close()

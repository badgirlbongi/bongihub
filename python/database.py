import sqlite3

#connect to a (new) database
conn = sqlite3.connect("namesample.db")

#close connection
conn.close()
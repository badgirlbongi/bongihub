import sqlite3

#connect to a (new) database
conn = sqlite3.connect("C:\\demo\\alpha.db")

#close connection
conn.close()
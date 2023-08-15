import sqlite3

#connect to or create SQLite database
conn = sqlite3.connect('members.db')
cur = conn.cursor()

#load SQL script from file
with open ("testing.sql") as file:
    sql_script = file.read()

#execute script
cur.executescript(sql_script)

#close db objects
cur.close()
conn.close()
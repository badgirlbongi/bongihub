import sqlite3

#connect to or create SQLite database
conn = sqlite3.connect('members.db')
cur = conn.cursor()

#display data
member_data = cur.execute("SELECT * FROM members ORDER BY ln")
for row in member_data:
    print(row)

#close db objects
cur.close()
conn.close()
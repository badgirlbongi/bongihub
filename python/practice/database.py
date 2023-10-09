import sqlite3

#connect to a (new) database
conn = sqlite3.connect("namesample.db")

#create a cursor
cur = conn.cursor()

#Test Data
names_list = [
    ("Naume", "Malinga"),
    ("Nokuthula", "Sosibo"),
    ("Bongisiwe", "Shabalala"),
    ("Kgotsofalo", "Malinga"),
    ("Ayanda", "More")
]

#create a "people" table
cur.execute('''CREATE TABLE IF NOT EXISTS people
               (firstname TEXT, lastname TEXT)''')
conn.commit()

#insert data into database
cur.executemany('''
                INSERT INTO people (firstname, lastname) VALUES (?, ?)
            ''',names_list)
conn.commit()

#display data
people_data = cur.execute("SELECT * FROM people ORDER BY lastname")
for row in people_data:
    print(row)


#close db objects
cur.close()
conn.close()

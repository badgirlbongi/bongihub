import sqlite3

#connect to a (new) database
conn = sqlite3.connect("namesample.db")

#create a cursor
cur = conn.cursor()

#Test Data
names_list = [
    ("Naume", "Malinga")
    ("Nokuthula", "Sosibo")
    ("Bongisiwe", "Shabalala")
    ("Kgotsofalo", "Malinga")
    ("Ayanda", "More")
]

#insert data into database
cur.executemany('''
                INSERT INTO people (firstname, lastname) VALUES (?, ?)
            ''',names_list)
conn.commit()

#close db objects
cur.close()
conn.close()

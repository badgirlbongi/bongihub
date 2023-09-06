import tkinter 
from tkinter import ttk

window = tkinter.Tk()
window.title("Data Entry Form")

frame = tkinter.Frame(window)
frame.pack()

#saving user info
user_info_frame = tkinter.LabelFrame(frame, text = "User Information")
user_info_frame.grid(row = 0, column = 0, padx = 20, pady = 20)

first_name_label = tkinter.Label(user_info_frame, text = "First Name")
first_name_label.grid(row = 0, column = 0)
last_name_label = tkinter.Label(user_info_frame, text = "Last Name")
last_name_label.grid(row = 0, column = 1)

first_name_entry = tkinter.Entry(user_info_frame)
last_name_entry = tkinter.Entry(user_info_frame)
first_name_entry.grid(row = 1, column = 0)
last_name_entry.grid(row = 1, column = 1)

title_label = tkinter.Label(user_info_frame, text = "Title")
title_combobox = ttk.Combobox(user_info_frame, values = ["", "Mr.", "Ms.", "Dr."])
title_label.grid(row = 0, column = 2)
title_combobox.grid(row = 1, column = 2)

age_label = tkinter.Label(user_info_frame, text = "Age")
age_spinbox = tkinter.Spinbox(user_info_frame, from_= 18, to = 110)
age_label.grid(row = 2, column = 0)
age_spinbox.grid(row = 3, column = 0)

nationality_label = tkinter.Label(user_info_frame, text = "Nationality")
nationality_combobox = ttk.Combobox(user_info_frame, values = ["Africa", "Antarctica", "Asia","Europe", "North America", "Oceania", "South America"])
nationality_label.grid(row = 2, column = 1)
nationality_combobox.grid(row = 3, column = 1)

for widget in user_info_frame.winfo_children():
    widget.grid_configure(padx = 10, pady = 5)

#saving course info 
courses_frame = tkinter.Label(frame)
courses_frame.grid(row = 1, column = 8, sticky = "news", padx = 20, pady = 20)

registered_label = tkinter.Label(courses_frame, text = "Registration Status")
registered_check = tkinter.Checkbutton(courses_frame, text ="Currently Registered")
registered_label.grid(row = 0, column = 0)
registered_check.grid(row = 1, column = 0)

numcourses_label = tkinter.Label(courses_frame, text = "# Completed Courses")
numcourses_spinbox = tkinter.Spinbox(courses_frame, from_ = 0, to = "infinity")
numcourses_label.grid(row = 0, column = 1)
numcourses_spinbox.grid(row = 1, column = 1)

numsemesters_label = tkinter.Label(courses_frame, text = "# Semesters")
numsemesters_spinbox = tkinter.Spinbox(courses_frame, from_ = 0, to = "infinity")
numsemesters_label.grid(row = 0, column = 2)
numsemesters_spinbox.grid(row = 1, column = 2)

window.mainloop()

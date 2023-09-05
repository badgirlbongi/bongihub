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
last_name_entry.grid(row = 1, column = 0)

title = tkinter.Label(user_info_frame, text = "Title")
title_combobox = ttk.Combobox(user_info_frame, values = ["", "Mr.", "Ms.", "Dr."])
title_label.grid(row = 0, column = 2)
title_combobox.grid(row = 1, column = 2)

age_label = tkinter.Label(user_info_frame, text = "Age")
age_spinbox = tkinter.SSpinbox(user_info_frame)
age_label.grid(row = 2, column = 0)
age_spinbox.grid(row = 3, column = 0)


window.mainloop()

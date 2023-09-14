from tkinter import*
from PIL import ImageTk

signup_window =Tk()

background = ImageTk.PhotoImage(file='bg.jpg')

bgLabel=Label(signup_window,image=background)
bgLabel.grid()

signup_window.mainloop()


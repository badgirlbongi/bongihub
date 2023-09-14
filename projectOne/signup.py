from tkinter import*
from PIL import ImageTk

signup_window =Tk()
signup_window.title('Signup page')
signup_window.resizable(False,False)

background = ImageTk.PhotoImage(file='bg.jpg')
bgLabel=Label(signup_window,image=background)
bgLabel.grid()

frame = Frame(signup_window)
frame.place(x=554,y=100)

heading=Label(frame,text ='CREATE AN ACCOUNT',font =('Microsoft Yahei UI Light',23,'bold'),
              bg='white',fg='firebrick1')
heading.grid(row=0,column=0)




signup_window.mainloop()


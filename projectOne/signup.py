from tkinter import *
from PIL import ImageTk

#functionality Part
def username_enter(event):
    if usernameEntry.get()=='Username':
        usernameEntry.delete(0,END)

def password_enter(event):
    if passwordEntry.get()=='Password':
        passwordEntry.delete(0,END)

#GUI Part
login_window = Tk()
login_window.geometry('990x660+50+50')
login_window.resizable(0,0)
login_window.title('Login Page')
bgImage = ImageTk.PhotoImage(file='bg.jpg')

bgLabel = Label(login_window, image = bgImage)
bgLabel.place(x = 0, y = 0)

heading = Label(login_window, text = 'USER LOGIN', font = ('Microsoft Yahei UI Light',23,'bold')
                ,bg = 'white', fg = 'firebrick1')
heading.place(x = 605,y = 120)

usernameEntry = Entry(login_window,width=25,font=('Microsoft Yahei UI Light',11,'bold')
                      ,bd=0,fg='firebrick1')
usernameEntry.place(x=580,y=200)
usernameEntry.insert(0,'Username')
usernameEntry.bind('<FocusIn>',username_enter)

frame1 = Frame(login_window,width=250,height=2,bg='firebrick1')
frame1.place(x=580,y=222)

passwordEntry = Entry(login_window,width=25,font=('Microsoft Yahei UI Light',11,'bold')
                      ,bd=0,fg='firebrick1')
passwordEntry.place(x=580,y=260)
passwordEntry.insert(0,'Password')
passwordEntry.bind('<FocusIn>',password_enter)

frame2 = Frame(login_window,width=250,height=2,bg='firebrick1')
frame2.place(x=580,y=282)

closeeye = PhotoImage(file = 'closeye.png')
eyeButton = Button(login_window,image = closeeye,bd=0,bg='white')
eyeButton.place(x=800,y=255)



login_window.mainloop()





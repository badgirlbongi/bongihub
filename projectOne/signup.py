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

heading=Label(frame,text ='CREATE AN ACCOUNT',font =('Microsoft Yahei UI Light',18,'bold'),
              bg='white',fg='firebrick1')
heading.grid(row=0,column=0,padx=0,pady=10)

emailLabel=Label(frame,text='Email',font=('Microsoft Yahei UI Light',10,'bold'),
                 bg='white',fg='firebrick1')
emailLabel.grid(row=1,column=0,sticky='w',padx=25,pady=(10,0))
emailEntry=Entry(frame,width=25,font=('Microsoft Yahei UI Light',10,'bold'),
                 fg='white',bg='firebrick1')
emailEntry.grid(row=2,column=0,sticky='w',padx=25)

usernameLabel=Label(frame,text='Username',font=('Microsoft Yahei UI Light',10,'bold'),
                 bg='white',fg='firebrick1')
usernameLabel.grid(row=3,column=0,sticky='w',padx=25,pady=(10,0))
usernameEntry=Entry(frame,width=25,font=('Microsoft Yahei UI Light',10,'bold'),
                 fg='white',bg='firebrick1')
usernameEntry.grid(row=4,column=0,sticky='w',padx=25)

passwordLabel=Label(frame,text='Password',font=('Microsoft Yahei UI Light',10,'bold'),
                 bg='white',fg='firebrick1')
passwordLabel.grid(row=5,column=0,sticky='w',padx=25,pady=(10,0))
passwordEntry=Entry(frame,width=25,font=('Microsoft Yahei UI Light',10,'bold'),
                 fg='white',bg='firebrick1')
passwordEntry.grid(row=6,column=0,sticky='w',padx=25)

confirmPassLabel=Label(frame,text='Confirm Password',font=('Microsoft Yahei UI Light',10,'bold'),
                 bg='white',fg='firebrick1')
confirmPassLabel.grid(row=7,column=0,sticky='w',padx=25,pady=(10,0))
confirmPassEntry=Entry(frame,width=25,font=('Microsoft Yahei UI Light',10,'bold'),
                 fg='white',bg='firebrick1')
confirmPassEntry.grid(row=8,column=0,sticky='w',padx=25)

termsandconditions = Checkbutton(frame, text ='I agree to the Terms & Conditions', 
                                 font = ('Microsoft Yahei UI Light',10,'bold'),fg='firebrick1',
                                 bg='white',activebackground='white',activeforeground='firebrick1')
termsandconditions.grid(row=9,column=0,pady=10,padx=15)

signupButton = Button(frame,text='Signup',font=('Open Sans',16,'bold'),bd=0
                      ,activebackground='firebrick1',activeforeground='white',width=17)
signupButton.grid(row=10,column=0,pady=10)

alreadyaccount= Label(frame,text='Create New Account?',font=('Open Sans',9,'bold underline'),
                          fg='blue',bg='white',activeforeground='blue',
                          activebackground='white',cursor='hand2',bd=0)
alreadyaccount.place(row = 11,column=0,sticky='w',padx=25)


signup_window.mainloop()


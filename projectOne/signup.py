from tkinter import *
from PIL import ImageTk

root = Tk()
root.geometry('990x660+50+50')
bgImage = ImageTk.PhotoImage(file='bg.jpg')

bgLabel = Label(root, image = bgImage)
bgLabel.place(x = 0, y = 0)

heading = Label(root, text = 'USER LOGIN', font = ('Microsoft Yahei UI Light',23,'bold')
                ,bg = 'white', fg = 'firebrick1')
heading.place(x = 605,y = 120)



root.mainloop()





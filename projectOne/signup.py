from tkinter import *
from PIL import ImageTk

root = Tk()

bgImage = ImageTk.PhotoImage(file = 'bg.png')

bgLabel = Label(root, image = bgImage)
bgLabel.grid(row = 0, column = 0)


root.mainloop()





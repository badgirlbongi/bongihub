#from tkinter import *
#from PIL import ImageTk,Image

#root = Tk()
#canvas = Canvas(root, width = 300, height = 300)
#canvas.pack()
#img = ImageTk.PhotoImage(Image.open("C:\\xampp\\htdocs\\bongihub\\python\\bg.jpg"))
#canvas.create_image(20, 20, anchor=NW, image=img)
#root.mainloop

#img = Image.open("C:\\xampp\\htdocs\\bongihub\\python\\bg.jpg")
#img.thumbnail((300, 300))
#img = ImageTk.PhotoImage(img)


#img = ImageTk.PhotoImage(Image.open("C:\\xampp\\htdocs\\bongihub\\python\\bg.jpg"))
#canvas.img = img  # Keep a reference
#canvas.create_image(20, 20, anchor=NW, image=img)

#root.mainloop

from tkinter import *
from PIL import Image

im = Image.open("C:\\xampp\\htdocs\\bongihub\\python\\projectTwo\\login.png")
im.show()

input("Press ENTER to exit") # pause
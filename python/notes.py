#installed python on my pc
#also installed python extentions on my vscode
#my first project(how to comment)
#no command for declaring variables
a = "Hello,python!"
print(a)
print("I am Bongi, and this is my first python project")
#indentation is important in python especially for arguments
#for example the if statement
#no semicolons needed just colons
if 5>2:
   print("Five is greater than two") 
#If you want to specify the data type of a variable use casting.
b = str(3)   
c = int(3)    
d = float(3)

e, f, g = "Orange", "Banana", "Cherry"
print(e)
print(f)
print(g)

fruits = ["apple", "banana", "cherry"]
h, i, j = fruits
print(h)
print(i)
print(j)

k = 5
l = 10
print(k + l)

m = "awesome"

def myfunc():
  m = "fantastic"
  print("Python is " + m)

myfunc()

print("Python is " + m)

n = "awesome"

def myfunc():
  global n
  n = "fantastic"

myfunc()

print("Women is " + n)
"""
#installed python on my pc
#also installed python extentions on my vscode
#my first project(how to comment)
#no command for declaring variables
#a = "Hello,python!"
#print(a)
#print("I am Bongi, and this is my first python project")
#indentation is important in python especially for arguments
#for example the if statement
#no semicolons needed just colons
#if 5>2:
#   print("Five is greater than two") 
#If you want to specify the data type of a variable use casting.
#b = str(3)   
#c = int(3)    
#d = float(3)

#e, f, g = "Orange", "Banana", "Cherry"
#print(e)
#print(f)
#print(g)

#fruits = ["apple", "banana", "cherry"]
#h, i, j = fruits
#print(h)
#print(i)
#print(j)

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

import random

print(random.randrange(1, 10))

o = "Hello, World!"
print(o[1])

for p in "bongisiwe":
  print(p)

txt = "The best things in life are free!"
print("free" in txt)

txt = "The best things in life are free!"
if "free" in txt:
  print("Yes, 'free' is present.")

txt = "The best things in life are free!"
if "expensive" not in txt:
  print("No, 'expensive' is NOT present.")

q = "Hello, World!"
print(q[2:5])

r = "Hello, World!"
print(r[:5])

s = "Hello, World!"
print(s[2:])

t = "Hello, World!"
print(t[-5:-2])
"""
age = 22
txt = "My name is Bongi, and I am {}"
print(txt.format(age))

quantity = 3
itemno = 567
price = 49.95
myorder = "I want {} pieces of item {} for R{}."
print(myorder.format(quantity, itemno, price))

myordertwo = "I want to pay R{2} for {0} pieces of item {1}."
print(myordertwo.format(quantity, itemno, price))

f = open("C:\xampp\htdocs\bongihub\project_six\js_and_python.txt", "r")
print(f.read())
f.close()

x = 467
y = 85
if y > x:
  print("y is greater than x")
elif x == y:
  print("x and y are equal")
else:
  print("x is greater than y")

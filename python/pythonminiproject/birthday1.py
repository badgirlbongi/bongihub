import time
from random import randint
from turtle import *

bgcolor("pink")
t = Turtle()
t.hideturtle()

for i in range(1, 85):
    t.write('\n')

space = ''
for i in range(1, 1000):
    count = randint(1, 100)
    while count > 0:
        space += ' '
        count -= 1
    if i % 10 == 0:
        t.write(space + '🎂Happy Birthday!')
    elif i % 9 == 0:
        t.write(space + "🎂")
    elif i % 5 == 0:
        t.write(space + "💛")
    elif i % 8 == 0:
        t.write(space + "🎉")
    elif i % 7 == 0:
        t.write(space + "🍫")
    elif i % 6 == 0:
        t.write(space + "Happy Birthday!💖")
    else:
        t.write(space + "🔸")
    space = ''
    time.sleep(0.2)

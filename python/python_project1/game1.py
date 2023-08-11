print("----Generation Test----")
print()
print("Choose the correct answer by picking the correct letter")
a = print("A.Lost Generation")
b = print("B.Greatest Generation")
c = print("C.Silent Generation")
d = print("D.Baby Boomers")
e = print("E.Generation X")
f = print("F.Millennials")
g = print("G.Generation Z")
h = print("H.Generation Alpha")
print()
points = 0

q1 = input("Question 1 Which generation is 1883-1900? : ")
if q1 == "A":
    points = points + 1000
else :
    points = points

q2 = input("Question 2 Which generation is 1928-1945? : ")
if q2 == "C":
    points = points + 1000
else :
    points = points

q3 = input("Question 3 Which generation is 1965-1980? : ")
if q3 == "E":
    points = points + 1000
else :
    points = points

q4 = input("Question 4 Which generation is 1997-2012? : ")
if q4 == "G":
    points = points + 1000
else :
    points = points

q5 = input("Question 5 Which generation is 2012-present? : ")
if q5 == "H":
    points = points + 1000
else :
    points = points

q6 = input("Question 6 Which generation is 1981-1996? : ")
if q6 == "F":
    points = points + 1000
else :
    points = points

q7 = input("Question 7 Which generation is 1946-1964? : ")
if q7 == "D":
    points = points + 1000
else :
    points = points

q8 = input("Question 8 Which generation is 1901-1927? : ")
if q8 == "B":
    points = points + 1000
else :
    points = points

if points >= 5000:
    message = print("---You Have Won!!!---")
else:
    message = print("---You Have Lost!!!---")

print()
print("---End of the game---")
print(message)
print("Thank you for playing your score is : ",points)

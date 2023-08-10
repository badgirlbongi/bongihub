myName = input("What is your name?: ")
mySurname = input("What is your surname?: ")
myAge = input("How old are you?: ")
print("\033[31m","No offense but that's really OLD!")
print()
print("\033[0m","So you are ",myName," ",mySurname," and you are ",myAge,"years old")
print("nice to meet you ",myName)
print()
choice = input("Do you have a pet? ")
babysit =input("would you like as to babysit your pet?")

if choice =="yes"or choice == "Yes" and babysit == "yes" or babysit == "Yes":
    myPet = input("Is your pet a dog or a cat? ")
    if myPet == "dog":
        print("\033[34m","welcome to the woof! gang ",myName," together with your pet","\033[0m",)
    elif myPet =="cat":
        print("\033[34m","welcome to the meow! gang ",myName," together with your pet","\033[0m",)
    else : 
        print("\033[31m","Oops!,looks like your pet isn't in our list","\033[0m")
elif choice == "yes" or choice == "Yes" and babysit == "no" or babysit == "No":
    print("\033[33m","It was going to be an honor to babysit your pet","\033[0m",)
else:
    print("\033[35m","You should really get a pet ",myName,"\033[0m")
print()
playgame = input("Would you like to play a game? ")
if playgame == "yes" or playgame == "Yes":
    myScore = int(input("Enter your score: "))
    if myScore > 10000:
        print("\033[32m","A winner you are!","\033[0m")
    else:
        print("\033[31m","OOPS!, You lost","\033[0m")
else:
    print("\033[35m","Don't be such a bore!","\033[0m",)
print()
print("A bit of math")
adding = 5 + 7
print("5 + 7 = ",adding)
subtracting = 9 - 3
print("9 - 3 = ",subtracting)
multiplication = 5 * 7
print("5 * 7 = ",multiplication)
division = 9 / 3
print("9 / 3 = ",division)
squared = 5**3
print(squared)
modulo = 15 % 4
print("15 % 4 = ",modulo)
divisor = 15 // 4
print("15 // 4 = ",divisor)
print()
print("sample of a bill")
myBill = float (input("What was the bill?: R"))
numOfPeople = int (input("How many people?: "))
answer = myBill / numOfPeople
answer = round (answer,2)
print("You all owe R",answer," each!")
print()
print("Exam grade calculator")
examName = input("Name of Exam: ")
maxScore = int (input("Maximum score: "))
score = int (input("Your Score: "))
percent = float((score / maxScore) * 100)
if percent <= 40:
    print("You got ",percent," percent and your grade is C")
elif percent > 40 and percent <= 60:
    print("You got ",percent," percent and your grade is B")
else:
    print("You got ",percent," percent and your grade is A")




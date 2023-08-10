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

if choice =="yes" and babysit == "yes":
    myPet = input("Is your pet a dog or a cat? ")
    if myPet == "dog":
        print("welcome to the woof! gang ",myName," together with your pet")
    elif myPet =="cat":
        print("welcome to the meow! gang ",myName," together with your pet")
    else : 
        print("\033[31m","Oops!,looks like your pet isn't in our list","\033[0m")
elif choice == "yes" and babysit == "no":
    print("It was going to be an honor to babysit your pet")
else:
    print("\033[35m","You should really get a pet ",myName,"\033[0m")


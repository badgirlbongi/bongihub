myName = input("What is your name?: ")
mySurname = input("What is your surname?: ")
myAge = input("How old are you?: ")
print("\033[31m","No offense but that's really OLD!")
print()
print("\033[0m","So you are ","\033[35m",myName," ",mySurname,"\033[0m"," and you are ","\033[32m",myAge,"\033[0m","years old")
print("\033[33m","nice to meet you ","\033[35m",myName,"\033[0m")
print()
choice = input("Do you have a pet? ")
if choice =="yes":
    myPet = input("Is your pet a dog or a cat? ")
    if myPet == "dog":
        print("welcome to the woof! gang ",myName," together with your pet")
    if myPet =="cat":
        print("welcome to the meow! gang ",myName," together with your pet")
    else : 
        print("Oops!,looks like your pet isn't in our list")
else:
    print("You should really get a pet ",myName)


  

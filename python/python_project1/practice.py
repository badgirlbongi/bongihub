myName = input("What is your name?: ")
mySurname = input("What is your surname?: ","\033[35m")
myAge = input("How old are you?: ","\033[35m")
old = print("\033[31m","No offense but that's really OLD!")
oops = print("\033[31m","Oops!,looks like your pet isn't in our list")
statement = print("\033[35m","You should really get a pet ",myName)

print(old)
print()
print("So you are ",myName," ",mySurname," and you are ",myAge,"years old")
print("nice to meet you ",myName)
print()
choice = input("Do you have a pet? ")
if choice =="yes":
    myPet = input("Is your pet a dog or a cat? ")
    if myPet == "dog":
        print("welcome to the woof! gang ",myName," together with your pet")
    elif myPet =="cat":
        print("welcome to the meow! gang ",myName," together with your pet")
    else : 
        print(oops)
else:
    print(statement)


  

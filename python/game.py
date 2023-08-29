import random, os, time

def rollDice(side):
    result = random.randint(1,side)
    return result

def health():
    healthStat = ((rollDice(6)*rollDice(12))/2)+10
    return healthStat

def strength():
    strengthStat = ((rollDice(6)*rollDice(8))/2)+12
    return strengthStat

while True:
    print("---CHARACTER BUILDER---")
    print()
    name = input("Name your legend: \n")
    type = input("Character Type (Human, Elf, Wizard, Orc): \n")
    print()
    print(name)
    print("HEALTH: ", health())
    print("STRENGTH: ", strength())
    print()
    print("May your name go down in legend__")
    print()
    again = input("Again?: \n")
    if again == "Yes" or again == "yes":
        break
    time.sleep(1)
    os.system("clear")



    
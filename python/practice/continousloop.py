while True:
    print("You are in a coridoor, do you go left or right? ")
    direction = input("> ")
    if direction == "left":
        print("You have fallen to your death")
        break
    elif direction == "right":
        continue
    else:
        print("You're agenius, you've won!")
        exit()
print("The game is over, you've failed!")
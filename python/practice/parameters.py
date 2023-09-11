def whichCake(ingredient, base, coating):
    if ingredient == 'chocolate':
        print("Mmm, chocolate cake is amazing ")
    elif ingredient == 'brocolli':
        print("You what mate?!")
    else:
        print("Yeah, that's great I suppose__")
        print("So you want a ",ingredient, " cake on a ",base, " base with ", coating, " on top")

userIngredient = input("Name an ingredient: ")
userBase = input("Name a type of base: ")
userCoating = input("Favourite cake topping: ")
whichCake(userIngredient, userBase, userCoating)

import math

def perform_operation(choice, num1, num2):
    if choice == 1:
        return num1 + num2
    elif choice == 2:
        return num1 - num2
    elif choice == 3:
        return num1 * num2
    elif choice == 4:
        if num2 != 0:
            return num1 / num2
        else:
            print("Error: Division by zero")
            return None
    elif choice == 6:
        return num1 ** num2
    elif choice == 7:
        if num1 >= 0:
            return math.sqrt(num1)
        else:
            print("Error: Cannot calculate square root of a negative number")
            return None
    elif choice == 8:
        return num1 % num2
    elif choice == 9:
        return math.sin(math.radians(num1))
    elif choice == 10:
        return math.cos(math.radians(num1))
    elif choice == 11:
        return math.tan(math.radians(num1))
    else:
        print("Invalid choice")
        return None

def main():
    while True:
        print("1. Addition")
        print("2. Subtraction")
        print("3. Multiplication")
        print("4. Division")
        print("5. Quit")
        print("6. Exponentiation")
        print("7. Square Root")
        print("8. Modulus")
        print("9. Sine")
        print("10. Cosine")
        print("11. Tangent")

        choice = int(input("Enter your choice (1/2/3/4/5/6/7/8/9/10/11): "))

        if choice == 5:
            print("Exiting the calculator.")
            break

        num1 = float(input("Enter number: "))

        if choice not in [7, 9, 10, 11]:
            num2 = float(input("Enter number: "))
        else:
            num2 = 0

        result = perform_operation(choice, num1, num2)

        if result is not None:
            print("Result:", result)

        print()

if __name__ == "_main_":
    main()
from oanda_api import OandaAPI

api = OandaAPI()

while True:
    command = input("Enter command:")
    if command == "T":
        print("Make a trade")
        api.place_trade("EUR_USD", 1000)
    if command == "Q":
        break
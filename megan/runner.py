from oanda_api import OandaAPI

api = OandaAPI()

while True:
    command = input("Enter command:")
    if command == "T":
        print("Make a trade")
        trade_id, ok = api.place_trade("EUR_USD", 1000, stop_loss = 1.174, take_profit = 1.94)
        #trade_id = api.place_trade("EUR_USD", 1000, stop_loss = 1.94)
        print('trade_id', trade_id)

    if command == "c":
        print('Closing', trade_id)
        print(api.close_trade(trade_id))

    if command == "Q":
        break
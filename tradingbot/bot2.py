from apscheduler.schedulers.blocking import BlockingScheduler
from oandapyV20 import API
import oandapyV20.endpoints.orders as orders
from oandapyV20.contrib.requests import MarketOrderRequest
from oanda_candles import Pair, Gran, CandleCollector, CandleClient
from oandapyV20.contrib.requests import TakeProfitDetails, StopLossDetails

from config import access_token, accountID
def get_candle(n):
    #access_token = 'XXXXXXX' #You need token here generated from OANDA account
    client = CandleClient(access_token, real = False)
    collector = client.get_collector(Pair.EUR_USD, Gran.M15)
    candles = collector.grab(n)
    return candles 

candles = get_candles(3)
#for candle in candles:
#   print(float(str(candle.bid.o)) > 1)

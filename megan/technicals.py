import pandas as pd

from defs import BUY, SELL, NONE

class Technicals():

    def __init__(self, settings, api, pair, granularity, log = None):
        self.settings = settings
        self.log = log
        self.api = api
        self.pair = pair 
        self.granularity = granularity

    def log_message(self, msg):
        if self.log is not None:
            self.log.logger.debug(msg)

    def fetch_candles(self, row_count, candle_time):
        pass

    def process_candles(self, df):
        pass

    def get_trade_decision(self, candle_time):
        max_rows = self.settings.long_ma + 2
        self.log_message("")
        self.log_message(f"get_trade_decision() pair:{self.pair} max_rows:{max_rows}")

        df = self.fetch_candles(max_rows, candle_time)
        
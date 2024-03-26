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
        pass
import pprint

from settings import Settings
from log_wrapper import LogWrapper

class TradingBot():

    def __init__(self):
        self.log = LogWrapper("TradingBot")
        self.trade_pairs = Settings.get_pairs()
        self.settings = Settings.load_settings()
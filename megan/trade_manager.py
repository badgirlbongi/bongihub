class TradeManager():

    def __init__(self, api, settings, log=None):
        self.api = api
        self.log = log
        self.settings = settings

    def log_message(self, msg):
        if self.log is not None:
            self.log.logger.debug(msg)

    def close_trades(self, pairs_to_close):
        open_trades, ok = self.api.open_trades()
            
    def place_trades(self, trades_to_make):
        self.log_message(f"TradeManager:place_trades() {trades_to_make}")
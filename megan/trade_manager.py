class TradeManager():

    def __init__(self, api, settings, log=None):
        self.api = api
        self.log = log
        self.settings = settings

    def log_message(self, msg):
        if self.log is not None:
            self.log.logger.debug(msg)
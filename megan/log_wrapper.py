import logging
import os

LOG_FORMAT = '%(asctime)s %(message)s'
DEFAULT_LEVEL = logging.DEBUG

class LogWrapper():
    def __init__(self, name, mode="w"):
        self.create_directory()
        self.filename = './logs/' + name + '.log'
        self.logger = logging.getLogger(name)
        self.logger.setLevel(DEFAULT_LEVEL)

        file_handler = logging.FileHandler(self.filename, mode = mode)
        formatter = logging.Formatter(LOG_FORMAT, datefmt = '%Y-%m-%d %H:%M:%S')

    def create_directory(self):
        path = './logs'
        if not os.path.exists(path):
            os.makedirs(path)
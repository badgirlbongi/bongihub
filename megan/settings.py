import json

class Settings():
    def __init__(self, pair, units, short_ma, long_ma):
        self.pair = pair
        self.units = units
        self.short_ma = short_ma
        self.long_ma = long_ma

    def __repr__(self):
        return str(vars(self)) 

    @classmethod
    def from_file_ob(cls, ob):
        return Settings(ob['pair'],ob['units'],ob['short_ma'],ob['long_ma'],)

    @classmethod
    def load_settings(cls):
        data = json.loads(open('settings.json', 'r').read())
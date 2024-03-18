import requests
import pandas as pd
from dateutil.parser import *
import defs
import utils
import sys
import json

class OandaAPI():

    def __init__(self):
        self.session = requests.Session()

    def make_requests(self, url, params = {}, added_headers = None, verb = 'get', data = None, code_ok = 200):

        headers = defs.SECURE_HEADER 

        if added_headers is not None:
            for k in added_headers.keys():
                headers[k] = added_headers[k]

        

        
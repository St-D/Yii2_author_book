#  -*- coding: cp1251 -*-  #
# Python 3.x.x

import requests
import json

api_url = 'http://localhost:8080/api/v1/books/list'

param_dict = {
    "id": 2,
            }

res = requests.get(api_url, params=param_dict)

print(res.status_code)
print(res.headers['Content-Type'])
print(res.url)

# print(res.json())

try:
    for k, v in res.json().items():
        print(k, " : ",  v)

    print(res.json())
except json.decoder.JSONDecodeError:
    print('Nothin to show :(')
except AttributeError:
    for k in res.json():
        print(k)



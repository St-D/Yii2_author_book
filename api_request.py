<<<<<<< HEAD
#  -*- coding: cp1251 -*-  #
# Python 3.x.x

import requests
import json
import time

SERVER_NAME = r'http://localhost:8080'


# ~~~~~~~ for case 4c ~~~~~~~~


def time_now():
    """Creates the current date"""
    t2 = time.time()
    time_tup = time.localtime(t2)

    return time.strftime("%Y-%m-%d", time_tup)
# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~

# --------------------------------------------------------\n')
print('-----------к заданию 4a----------------------------\n')

api_url = SERVER_NAME + '/api/v1/books/list'
res = requests.get(api_url)

print('Status code: ', res.status_code)
print('Headers: ', res.headers['Content-Type'])
print('Request URL: ', res.url, '\n')

try:
    for k, v in res.json().items():
        print(k, " : ",  v)
except json.decoder.JSONDecodeError:
    print(' Nothing to show :(( ')
except AttributeError:
    for k in res.json():
        print(k)

# --------------------------------------------------------\n')
print('---------------------------------------------------\n')


# --------------------------------------------------------\n')
print('-----------к заданию 4b----------------------------\n')
id = 2

api_url = SERVER_NAME + '/api/v1/books/2' + str(id)
res = requests.get(api_url)

print('Status code: ', res.status_code)
print('Headers: ', res.headers['Content-Type'])
print('Request URL: ', res.url, '\n')

try:
    for k, v in res.json().items():
        print(k, " : ",  v)
    print(json.dumps(res.json(), sort_keys=True, indent=4))
except json.decoder.JSONDecodeError:
    print(' Nothing to show :(( ')
except AttributeError:
    for k in res.json():
        print(k)
# --------------------------------------------------------\n')
print('---------------------------------------------------\n')


# --------------------------------------------------------\n')
print('-----------к заданию 4c----------------------------\n')
id = 30

api_url = SERVER_NAME + '/api/v1/books/update/' + str(id)
param_dict = {
    "author_id": 2,
    "title": "change_title_using_POST_requests",
    "year_of_writing": time_now(),
    }
res = requests.post(api_url, data=param_dict)

print('Status code: ', str(res.status_code) + '*')

if res.status_code == 200:
    print('\t*Update successfully')
elif res.status_code == 404:
    print('\t*Entry not found')
else:
    print('\t*Failed to delete the object for unknown reason')

print('Headers: ', res.headers['Content-Type'])
print('Request URL: ', res.url, '\n')
# --------------------------------------------------------\n')
print('---------------------------------------------------\n')


# --------------------------------------------------------\n')
print('-----------к заданию 4d----------------------------\n')
id = 31

api_url = SERVER_NAME + '/api/v1/books/' + str(31)
res = requests.delete(api_url)

print('Status code: ', str(res.status_code) + '*')

if res.status_code == 204:
    print('\t*Delete successfully')
elif res.status_code == 404:
    print('\t*Entry not found')
else:
    print('\t*Failed to delete the object for unknown reason')

print('Headers: ', res.headers['Content-Type'])
print('Request URL: ', res.url, '\n')
# --------------------------------------------------------\n')
print('---------------------------------------------------\n')

input('press <Enter>')
exit()
=======
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


>>>>>>> f2d04ba924ae04c6d2d1ce7565dfc84823e67533

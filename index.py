import json

# phone = input("wat is uw telefoon nummer?")
import requests as requests

file = open('responses.json')
data = json.load(file)

bericht = input("")

while bericht != "":
    bericht2 = input("")
    txt = bericht2.split()
    for woord in txt:
        for key in data:
            if woord == data:
                print(data[key])
                exit()
            elif requests.get(woord):
                print("dit is een link")
                exit()
            else:
                print("ik begrijp je niet")
    exit()
import re
text="my phone number is 809-939-3919"
phnumber = re compile ("\d{3}-\d{3}-\d{4})
matchingobj=phnumber.search(text)
matchingobj.group()

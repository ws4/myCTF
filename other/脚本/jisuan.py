#coding=utf-8
import requests,re
s = requests.Session()

url = 'http://192.168.199.118/myCTF/08/index.php'
html = s.get(url).content

reg = r'([0-9].+)<'
pattern = re.compile(reg)
match = re.findall(pattern,html)

payload = {'result': eval(match[0])}
print s.post(url, data=payload).content

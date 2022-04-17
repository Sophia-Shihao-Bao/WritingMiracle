# encoding:utf-8
import time
import requests
import json

API_KEY = "/gJbgjNUDOkKKlNYBJdevEE5ahDbbRofla4eWUeHtahpkbRfrwXVOg=="  # 从悟道开发平台获取
API_SECRET = "TWzwtwf9Sn2rszdE/QYad2IgSCjqU8vJEqg/8vuvnRwadLuEF66bew=="  # 从悟道开发平台获取
KEY = ""  # 队列名称，默认queue1
CONTENT = '门的恐怖小说'  # 新闻内容描述
MAX_LENGTH = 500  # 最大字数
request_url = "	https://pretrain.aminer.cn/api/v1/generate"
api = 'news'

# 指定请求参数格式为json
headers = {'Content-Type': 'application/json'}
request_url = request_url
data =   {
    "key":"queue1",
    "content": CONTENT,
    "concurrency": 3,
    "type":"para",
    "apikey": API_KEY,
    "apisecret": API_SECRET
  }
response = requests.post(request_url, json = data)
print (json.loads(response.content))

'''

#请求status接口返回api调用结果

task_id = json.loads(response.content)["result"]["task_id"]  # 从之前请求api的结果中获取
print(task_id)
# 改为轮训请求，每隔10秒请求一次

request_url = 'https://pretrain.aminer.cn/api/v1/status'
response = requests.get(request_url, params={'task_id':task_id})
while True:
    time.sleep(3)
    response = requests.get(request_url, params={'task_id':task_id})
    print(json.loads(response.content))'''
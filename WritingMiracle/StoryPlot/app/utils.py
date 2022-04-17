import time
import requests
import json

url = "	https://pretrain.aminer.cn/api/v1/generate"
testurl = "https://pretrain.aminer.cn/api/v1/status"


def submit_task(keyword):
    content = {
        "key": "dhm",  # 队列名
        "content":keyword,
        "max_length":400,
        "concurrency":1,
        "type":'para',
        "apikey": "/gJbgjNUDOkKKlNYBJdevEE5ahDbbRofla4eWUeHtahpkbRfrwXVOg==",
        "apisecret": "TWzwtwf9Sn2rszdE/QYad2IgSCjqU8vJEqg/8vuvnRwadLuEF66bew=="
    }
    response = requests.post(url, json=content)
    data = response.json()
    print(data)
    task_id = {"task_id": data["result"]["task_id"]}
    return task_id


def get_task_result(task_id):
    response = requests.get(testurl, params={'task_id': task_id})
    data = response.json()
    print(data)
    if data["result"]["process_time"] != 0:
        try:
            output= data["result"]["output"].split("片名")
            return output[0]
        except:
            return data["result"]["output"]


if __name__ == '__main__':

    task_id = submit_task('长毛的猫')
    time.sleep(3)
    result = get_task_result(task_id['task_id'])
    print(result)

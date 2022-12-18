import requests
import random
from bs4 import BeautifulSoup
for i in range(1, 0, -1):
    url = "https://www.real.discount/filter/?category=All&subcategory=All&store=All&duration=All&price=0&rating=All&language=All&search=&submit=Filter&page=" + \
        str(i)
    r = requests.get(url)
    # htmlContent = r.content
    soup = BeautifulSoup(r.content, 'html.parser')
    elem = soup.select('.card-title')
    for i in range(len(elem)-1, -1, -1):
        title = soup.select('.card-title')[i].string
        cat = soup.select('.card-cat')[i].string
        sortDesc = soup.select('.card-text')[i].string
        rating = soup.select('.card-duration')[i]
        urlx = soup.select('.col-xl-4')[i].find('a').get('href')
        pramaLink = urlx.split('/')[2]
        img = soup.select('.card')[i].find('img').get('src')
        urlx = "https://www.real.discount/"+urlx
        print(title, end=" >- ")
        try:
            print("Loding start", end=" >- ")
            r = requests.get(urlx)
            soupx = BeautifulSoup(r.content, 'html.parser')
            courseLink = soupx.select('.text-center')[0].find('a').get('href')
            descx = soupx.select('.col-md-7')[0].find_all('p')
            desc = ""
            for i in descx:
                desc = desc+str(i)
            url = "https://learnejo.com/Post-Coursesx"
            rmm = view = random.randrange(10, 50)
            enroll = random.randrange(10, rmm)
            payload = {"title": title,
                       "pramaLink": pramaLink,
                       "desc": desc,
                       "img": img,
                       "link": courseLink,
                       "cat": cat,
                       "sortDesc": sortDesc,
                       "enroll": enroll,
                       "view": view
                       }
            response = requests.request("POST", url, data=payload)
            print(response.status_code)
            if(response.text == '1'):
                print("Loaded!", end=" >- ")
                massage = title + ":\n https://learnejo.com/Courses/Card/"+pramaLink + \
                    "\n\nHow to Enroll Courses:\nhttps://youtu.be/Q_q8hcTcSLU"
                try:
                    pass
                    # for i in ['-1001624994728', '-1001198759775']:
                    #     url = "https://api.telegram.org/bot5256121624:AAHjNKwypRSdp6NPxrXC0okO_TZvBHG8uTE/sendMessage"
                    #     querystring = {"chat_id": i, "text": massage}
                    #     response = requests.request(
                    #         "GET", url, params=querystring)
                    #     print("Share On Telegram!", i, end=" > ")
                    # print()
                except:
                    print("Falied on Sharing.")
            else:
                print("Error Or Alredy Exist!")
        except:
            print('Error On Loadin..')

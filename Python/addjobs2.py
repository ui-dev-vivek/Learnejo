import requests
from bs4 import BeautifulSoup


def getinfo(text):
    a = s.find(text=text+":")
    if a != None:
        z = a.parent.parent
        z.strong.decompose()
        return z.string
    elif s.find(text=text+" : "):
        z = s.find(text=text+" : ").parent.parent
        z.strong.decompose()
        return z.string
    elif s.find(text=text+": "):
        z = s.find(text=text+": ").parent.parent
        z.strong.decompose()
        return z.string
    elif s.find(text=text+" :"):
        z = s.find(text=text+" :").parent.parent
        z.strong.decompose()
        return z.string
    else:
        return 'N/A'


for i in range(1, 2):
    try:
        mainUrl = "https://fresherjobinfo.in/"

        mainReq = requests.get(mainUrl)
        mainSoup = BeautifulSoup(mainReq.content, 'html.parser')
        mainList = mainSoup.select('.inside-article')
        for item in mainList:
            try:
                url = item.find('a').get('href')
                image = item.find('img').get('data-lazy-src')
                image = str(image).split('?')[0]
                pramaLink = url.split('/')[3]
                try:
                    content = ""
                    subUrl = url
                    subReq = requests.get(subUrl)
                    subSoup = BeautifulSoup(subReq.content, 'html.parser')
                    a = subSoup.title.string.split("|")
                    title = a[0]
                    x = str(subSoup).split("</ul></nav></div>")
                    xx = x[len(x)-3].split("Click here")
                    s = BeautifulSoup(xx[0], 'html.parser')
                    company = getinfo('Company Website')
                    experience = getinfo('Experience')
                    salary = getinfo('Salary')
                    role = getinfo('Job Role')
                    a = subSoup.find(text="Click here")
                    if a != None:
                        z = a.parent
                        link = z.get('href').replace(
                            'freshershunt.in', 'learnejo.com')
                    else:
                        link = "#"
                    c = s.find_all(['p', 'h2', 'h3', 'h4', 'ul'])
                    for i in c:
                        if(i.find('a') == None):
                            content = content+str(i)
                    try:
                        url = "https://learnejo.com/Post-Jobs"
                        payload = {
                            "title": title,
                            "pramaLink": pramaLink,
                            "type": "Corp",
                            "content": content,
                            "sub_type": company,
                            "image": image,
                            "link": link,
                            "role": role,
                            "experience": experience,
                            "salary": salary,
                            "company": company,
                            "website": company,
                            "status": 1
                        }
                        response = requests.request("POST", url, json=payload)
                        if(response.text == '1'):
                            massage = subSoup.title.string + "\n Apply link: https://learnejo.com/Job-Internships/Card/" + \
                                pramaLink+"\n"
                            try:
                                for i in ['-1001874716358']:
                                    url = "https://api.telegram.org/bot5256121624:AAHjNKwypRSdp6NPxrXC0okO_TZvBHG8uTE/sendMessage"
                                    querystring = {
                                        "chat_id": i, "text": massage}
                                    response = requests.request(
                                        "GET", url, params=querystring)
                            except:
                                pass
                    except:
                        pass
                except:
                    pass
            except:
                pass
    except:
        pass

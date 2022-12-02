from xml.parsers import expat
import requests
from bs4 import BeautifulSoup

ads = '''
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-7119514135532896"
     data-ad-slot="6002027607"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
'''
for i in range(1, 2):
    try:
        mainUrl = "https://www.fresheroffcampus.com/"
        mainReq = requests.get(mainUrl)
        mainSoup = BeautifulSoup(mainReq.content, 'html.parser')
        mainList = mainSoup.select('.ct-image-container')
        for item in mainList:
            try:
                url = item.get('href')
                image = item.find('img').get('src')
                image = str(image).split('?')[0]
                pramaLink = url.split('/')[3]
                print("Start", end=" > ")
                try:
                    content = ""
                    subUrl = url
                    subReq = requests.get(subUrl)
                    subSoup = BeautifulSoup(subReq.content, 'html.parser')
                    a = subSoup.title.string.split("|")
                    title = a[0]
                    print(title, end=" > ")
                    x = str(subSoup).split(
                        "Join Our Offical Fresheroffcampus Telegram Group")
                    xx = x[len(x)-3].split("Apply Link")
                    s = BeautifulSoup(xx[0], 'html.parser')

                    company = "-"
                    experience = "-"

                    salary = "-"
                    role = "-"
                    a = subSoup.find(text="Click Here")
                    if a != None:
                        z = a.parent
                        link = z.get('href')
                    else:
                        link = "#"
                    c = s.find_all(['p', 'h2', 'h3', 'h4', 'h6', 'ul'])
                    a = 0
                    for i in c:
                        if(i.find('strong') != None):
                            a += 1
                            if (a > 1 and a < 4) or (a > 6 and a < 9):
                                content += ads+str(i)
                            else:
                                content += str(i)
                        else:
                            content += str(i)

                    print("Scraped! > Uploading.", end=" > ")
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
                        print(response.text)
                        if(response.text == '1'):
                            print("Uploaded!")
                            massage = "Job Update.\n"+subSoup.title.string + " \n \n Apply here: https://learnejo.com/Job-Internships/Card/"+pramaLink + \
                                "\n"
                            try:
                                for i in ['-1001874716358']:
                                    url = "https://api.telegram.org/bot5256121624:AAHjNKwypRSdp6NPxrXC0okO_TZvBHG8uTE/sendMessage"
                                    querystring = {
                                        "chat_id": i, "text": massage}
                                response = requests.request(
                                    "GET", url, params=querystring)
                                print("Share On Telegram!", i, end=" > ")
                                print()
                            except:
                                print("Falied on Sharing.")
                        else:
                            print("Already Exist.")
                    except:
                        print("Error On Uploading")
                except:
                    print("Falied! To get Job data.")
            except:
                print("Falied! To get Job Url")
    except:
        print("Error! On Requesting Web Pages.")

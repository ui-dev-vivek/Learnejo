import requests
jobs_massage = "Welcome To Learnejo Jobs-Internships Group.\n\nWe reach out to the most and more Jobs and Internships. \nLearnejo's only wish is to give you the best opportunities.\n\nWe need your support.\n\nPlease forward this group to your friends and share it as much as possible.\n \nJobs: https://telegram.me/job_learnejo \nCourses: https://telegram.me/Free_courses2_learnejo \nThanks #support_us #share_please  \nTeam Learnejo "
# jobs_massage = "Welcome To Learnejo Jobs-Internships Group. \n\nOur Telegram auto sharing has crashed.\nPlease join our whatsapp groups.\n\nJobs Update: https://chat.whatsapp.com/Fv28Dn1OqnH2fycpdlWRk3 \n\nCourses: https://chat.whatsapp.com/FJSkKIlDOJmCWEfUNaA3wg  \n\nThanks #support_us #share_please  \nTeam Learnejo"
try:
    for i in ['-1001874716358']:
        url = "https://api.telegram.org/bot5256121624:AAHjNKwypRSdp6NPxrXC0okO_TZvBHG8uTE/sendMessage"
        querystring = {
            "chat_id": i, "text": jobs_massage}
        response = requests.request(
            "GET", url, params=querystring)
except:
    print("Error on massage sending")

course_massage = "Welcome To Learnejo Free Courses Group. \n\nWe provide free certified Udemy courses in English and Hindi, it enhances your learning, skills.\n\nPlease Share our whatsapp groups.\n\nCourses: https://chat.whatsapp.com/FJSkKIlDOJmCWEfUNaA3wg \n\nJobs Update: https://chat.whatsapp.com/Fv28Dn1OqnH2fycpdlWRk3 \n\nThanks #support_us #share_please  \nTeam Learnejo"
try:
    for i in ['-1001624994728', '-1001198759775']:
        url = "https://api.telegram.org/bot5256121624:AAHjNKwypRSdp6NPxrXC0okO_TZvBHG8uTE/sendMessage"
        querystring = {"chat_id": i, "text": course_massage}
        response = requests.request(
            "GET", url, params=querystring)
except:
    print("Falied on Sharing.")

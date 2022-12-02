import requests
jobs_massage = "Welcome To Learnejo Jobs-Internships Group.\n\nWe reach out to the most and more Jobs and Internships. \nLearnejo's only wish is to give you the best opportunities.\n\nWe need your support.\n\nPlease forward this group to your friends and share it as much as possible.\n \nJobs: https://telegram.me/job_learnejo \nCourses: https://telegram.me/Free_courses2_learnejo \nThanks #support_us #share_please  \nTeam Learnejo "
try:
    for i in ['-1001874716358']:
        url = "https://api.telegram.org/bot5256121624:AAHjNKwypRSdp6NPxrXC0okO_TZvBHG8uTE/sendMessage"
        querystring = {
            "chat_id": i, "text": jobs_massage}
        response = requests.request(
            "GET", url, params=querystring)
except:
    print("Error on massage sending")

course_massage = "Welcome To Learnejo Free Courses Group. \n\nWe provide free certified Udemy courses in English and Hindi, it enhances your learning, skills.\n\nKeep in mind that courses are free from work to work and their enrollment is limited. So enroll the courses as soon as possible.\n\nDon't worry if the courses are expired, you will get it again, just stay in the group.\n\nWe need your support.\nPlease forward this group to your friends and share it as much as possible.\n \nCourses: https://telegram.me/Free_courses2_learnejo \nJobs: https://telegram.me/job_learnejo  \nThanks #support_us #share_please  \nTeam Learnejo "
try:
    for i in ['-1001624994728', '-1001198759775']:
        url = "https://api.telegram.org/bot5256121624:AAHjNKwypRSdp6NPxrXC0okO_TZvBHG8uTE/sendMessage"
        querystring = {"chat_id": i, "text": course_massage}
        response = requests.request(
            "GET", url, params=querystring)
except:
    print("Falied on Sharing.")

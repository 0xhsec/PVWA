import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
import sys

sender_address = 'pvwa.space@gmail.com'
sender_pass = 'NKumar@08!'
receiver_address = sys.argv[1]
subject = sys.argv[2]
subject=subject.replace("_", " ")
mail_content = sys.argv[3]
mail_content=mail_content.replace("_", " ")
#The mail addresses and password
#Setup the MIME
message = MIMEMultipart()
message['From'] = sender_address
message['To'] = receiver_address
message['Subject'] = subject  #The subject line
#The body and the attachments for the mail
mail=MIMEText(mail_content, "html")
message.attach(mail)
#Create SMTP session for sending the mail
session = smtplib.SMTP('smtp.gmail.com', 587) #use gmail with port
session.starttls() #enable security
session.login(sender_address, sender_pass) #login with mail_id and password
session.sendmail(sender_address, receiver_address, message.as_string())
session.quit()
print('Mail Sent')

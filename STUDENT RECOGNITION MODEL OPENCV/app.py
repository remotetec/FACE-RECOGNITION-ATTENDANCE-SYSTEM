import cv2
import os
from face_recognition.api import face_encodings 
import numpy as np
import face_recognition
from datetime import datetime

path='images'
images=[]
classnames=[]
mylist=os.listdir(path)
for cl in mylist:
    curimg=cv2.imread(f'{path}/{cl}')
    images.append(curimg)
    classnames.append(os.path.splitext(cl)[0])

def findencoding(images):
    encodelist=[]
    for img in images:
        img=cv2.cvtColor(img,cv2.COLOR_BGR2RGB)
        encode=face_recognition.face_encodings(img)[0]
        encodelist.append(encode)
    return encodelist
def mark(name):
        
        with open('Attendance.csv','r+') as f:
            mydatalist=f.readlines()
            namelist=[]
            for line in mydatalist:
                entry=line.split(',')
                namelist.append(entry[0])
            if name not in namelist:
                now=datetime.now()
                entrytime=datetime.now().time()
                entrydate=datetime.now().date()
                f.writelines(f'\n{name},{entrytime},{entrydate}')
encodelistKnown=findencoding(images)
cap=cv2.VideoCapture(0)

while True:
    success,img=cap.read()
    imgs=cv2.resize(img,(0,0),None,0.25,0.25)
    imgs=cv2.cvtColor(imgs,cv2.COLOR_BGR2RGB)

    facecurframe=face_recognition.face_locations(imgs)
    encodecurframe=face_recognition.face_encodings(imgs,facecurframe)

    for encodeface,faceloc in zip(encodecurframe,facecurframe):
        matches=face_recognition.compare_faces(encodelistKnown,encodeface)
        facedis=face_recognition.face_distance(encodelistKnown,encodeface)
        matchindex=np.argmin(facedis)
        if matches[matchindex]:
            name=classnames[matchindex].upper()
            y1,x2,y2,x1=faceloc
            y1,x2,y2,x1=y1*4,x2*4,y2*4,x1*4
            cv2.rectangle(img,(x1,y1),(x2,y2),(0,255,0),2)
            cv2.rectangle(img,(x1,y2-35),(x2,y2),(0,255,0),cv2.FILLED)
            cv2.putText(img,name,(x1+6,y2-6),cv2.FONT_HERSHEY_COMPLEX,1,(255,255,255),2)
            mark(name)
    
    cv2.imshow('webcam',img)
    cv2.waitKey(1)
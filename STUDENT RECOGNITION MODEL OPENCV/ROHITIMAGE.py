import pandas as pd
import numpy as np
import seaborn as sns
import matplotlib.pyplot as plt
from datetime import datetime, date
import warnings
warnings.filterwarnings('ignore')
df = pd.read_csv('D:\PROGRAMING\PROJECT\PYTHON PROJECT\OPEN CV\FACE RECOGNIZATION ATTENDANCE/Attendance.csv')
ROHIT=df[df['NAME']=='ROHIT']
KEERTI=df[df['NAME']=='KEERTI']
MOHIT=df[df['NAME']=='MOHIT']
def Rohitlineplot():
    plt.figure(figsize=(10,10))
    plt.plot_date(ROHIT['DATE'],ROHIT['DURATION'], linestyle='solid')
    plt.gcf().autofmt_xdate()
    plt.title("ROHIT CLASS DURATION BEHAVIOUR")
    plt.xlabel('DATE')
    plt.ylabel('DURATION')
    plt.savefig('D:\PROGRAMING\PROJECT\PYTHON PROJECT\OPEN CV\Rohitline.png', dpi=300, bbox_inches='tight')
    print("Succesfull")
Rohitlineplot()
def RohitPie():
    plt.figure(figsize=(10,10))
    list1=[]
    for i in df.DATE:
        if i not in list1:
            list1.append(i)
    absent =0
    present=0
    for i in ROHIT.DATE:
        if i in list1:
            present+=1
    absent=len(list1)-present
    data = [present,absent]
    label = ['Present', 'absent'] 
    plt.pie(data, labels=label, autopct='%1.1f%%', explode=[0,0], shadow=True, startangle=90)
    plt.title('ROHIT ATTENDANCE DISTRIBUTION')
    plt.savefig('D:\PROGRAMING\PROJECT\PYTHON PROJECT\OPEN CV\RohitPie.png', dpi=300, bbox_inches='tight')
    print("Succesfull")
RohitPie()
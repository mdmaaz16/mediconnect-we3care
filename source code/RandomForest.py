from sklearn.model_selection import train_test_split
import numpy as np
import pandas as pd
import os

l1=['itching', 'skin_rash', 'continuous_sneezing', 'shivering', 'chills',
       'joint_pain', 'stomach_pain', 'acidity', 'vomiting',
       'burning_micturition', 'fatigue', 'mood_swings', 'weight_loss',
       'restlessness', 'lethargy', 'cough', 'high_fever', 'breathlessness',
       'sweating', 'indigestion', 'headache', 'yellowish_skin', 'dark_urine',
       'nausea', 'loss_of_appetite', 'pain_behind_the_eyes', 'back_pain',
       'constipation', 'abdominal_pain', 'diarrhoea', 'mild_fever',
       'yellow_urine', 'yellowing_of_eyes', 'acute_liver_failure',
       'swelled_lymph_nodes', 'malaise', 'blurred_and_distorted_vision',
       'phlegm', 'throat_irritation', 'redness_of_eyes', 'sinus_pressure',
       'congestion', 'chest_pain', 'fast_heart_rate', 'bloody_stool',
       'neck_pain', 'dizziness', 'bruising', 'obesity',
       'swollen_blood_vessels', 'puffy_face_and_eyes', 'enlarged_thyroid',
       'brittle_nails', 'swollen_extremeties', 'excessive_hunger',
       'slurred_speech', 'knee_pain', 'muscle_weakness', 'stiff_neck',
       'swelling_joints', 'loss_of_balance', 'loss_of_smell',
       'bladder_discomfort', 'continuous_feel_of_urine', 'depression',
       'irritability', 'muscle_pain', 'red_spots_over_body', 'belly_pain',
       'abnormal_menstruation', 'polyuria', 'family_history', 'mucoid_sputum',
       'lack_of_concentration']

disease=['Fungal infection','Allergy','GERD','Chronic cholestasis','Drug Reaction',
'Peptic ulcer diseae','AIDS','Diabetes','Gastroenteritis','Bronchial Asthma','Hypertension',
' Migraine','Cervical spondylosis',
'Paralysis (brain hemorrhage)','Jaundice','Malaria','Chicken pox','Dengue','Typhoid','hepatitis A',
'Hepatitis B','Hepatitis C','Hepatitis D','Hepatitis E','Alcoholic hepatitis','Tuberculosis',
'Common Cold','Pneumonia','Dimorphic hemmorhoids(piles)',
'Heartattack','Varicoseveins','Hypothyroidism','Hyperthyroidism','Hypoglycemia','Osteoarthristis',
'Arthritis','(vertigo) Paroymsal  Positional Vertigo','Acne','Urinary tract infection','Psoriasis',
'Impetigo']

df=pd.read_csv("training.csv")   


l2=[]
for i in range(0,len(l1)):
    l2.append(0) 

df.replace({'prognosis':{'Fungal infection':0,'Allergy':1,'GERD':2,'Chronic cholestasis':3,'Drug Reaction':4,
    'Peptic ulcer diseae':5,'AIDS':6,'Diabetes ':7,'Gastroenteritis':8,'Bronchial Asthma':9,'Hypertension ':10,
    'Migraine':11,'Cervical spondylosis':12,
    'Paralysis (brain hemorrhage)':13,'Jaundice':14,'Malaria':15,'Chicken pox':16,'Dengue':17,'Typhoid':18,'hepatitis A':19,
    'Hepatitis B':20,'Hepatitis C':21,'Hepatitis D':22,'Hepatitis E':23,'Alcoholic hepatitis':24,'Tuberculosis':25,
    'Common Cold':26,'Pneumonia':27,'Dimorphic hemmorhoids(piles)':28,'Heart attack':29,'Varicose veins':30,'Hypothyroidism':31,
    'Hyperthyroidism':32,'Hypoglycemia':33,'Osteoarthristis':34,'Arthritis':35,
    '(vertigo) Paroymsal  Positional Vertigo':36,'Acne':37,'Urinary tract infection':38,'Psoriasis':39,
    'Impetigo':40}},inplace=True)

X= df[l1]
y = df[["prognosis"]]
x_train,x_test,y_train,y_test=train_test_split(X,y,test_size=0.05,random_state=0)


f=open('dis.txt','r')
line=f.read()
arr=line.split(',')


def randomForest():
    from sklearn.ensemble import RandomForestClassifier
    from sklearn.metrics import classification_report,confusion_matrix,accuracy_score
    clf4 = RandomForestClassifier(n_estimators=100)
    clf4 = clf4.fit(x_test,np.ravel(y_test))
    y_pred=clf4.predict(x_train)
    # print("Random Forest")
    # print("Accuracy")
    # print(accuracy_score(y_train, y_pred))
    # print(accuracy_score(y_train, y_pred,normalize=False))

    psymptoms=['swollen_extremeties','depression','fast_heart_rate']

    for k in range(0,len(l1)):
        for z in arr:
            if(z==l1[k]):
                l2[k]=1

    inputtest = [l2]
    predict = clf4.predict(inputtest)
    predicted=predict[0]

    # print(predicted)

    h='no'
    for a in range(0,len(disease)):
        if(predicted == a):
            h='yes'
            break
    predrandom=""        
    if (h=='yes'):
        predrandom=disease[a]

    print(predrandom)

randomForest()
#!/usr/bin/env python
import pandas as pd
import numpy as np
from sklearn import datasets
from sklearn.tree import DecisionTreeClassifier
from sklearn.neighbors import KNeighborsClassifier
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression
import sklearn
import math
from sklearn.ensemble import RandomForestClassifier, GradientBoostingClassifier
from sklearn.metrics import accuracy_score
#pandas.DataFrame.dropna
from pandas import DataFrame,Index

#print(disease.info())
#print(disease.isnull.sum())
#print(disease.describe())
#print(disease['prognosis'].value_counts())


#seprating
def script():
    x=2
    y=9
    z=x+y
    print(z)
    # disease=pd.read_csv('training_data.csv')

#     x=disease.drop(['prognosis'],axis=1)
#     y=disease['prognosis']
#     x=x.loc[:,~x.columns.str.contains('^Unnamed')]
# #x_e=x.iloc[-3:,-3:]
# #print(x_e)
# #x.dropna()
# #x=x.dropna(subset=None,inplace=True)
# #print(x)
# #print(y)

# #SLIPPING THE DATA INTO TRAINING AND TESTING
#     x_train,x_test,y_train,y_test=train_test_split(x,y,test_size=0.2,stratify=y,random_state=2)
# #print(x.shape,x_train.shape,x_test.shape)

# #MODEL TRAINING
#     model = DecisionTreeClassifier()


# #training the decsiontreeclassifier
#     model=model.fit(x_train,y_train)
# #print(model)


# #accuracy on training data
#     x_train_prediction = model.predict(x_train)
#     training_data_acc=accuracy_score(x_train_prediction,y_train)
#     #print('accuracy_score:',training_data_acc)
# #accuracy on test data
#     x_test_prediction = model.predict(x_test)
#     test_data_acc=accuracy_score(x_test_prediction,y_test)
#     #print('accuracy_score on test:',test_data_acc)


# #building a predictive system

#     input_data=(0,0,0,0,0,0,0,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,1,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,1,1,1,1,0,0,0,0,0,0,0,0,0,0,0)

# #change into numpy array
#     input_data_as_numpy=np.asarray(input_data)

# #reshape to numpy array for only one instance
#     input_data_reshape=input_data_as_numpy.reshape(1,-1)

#     prediction =model.predict(input_data_reshape)
#     output=np.array_str(prediction)
#     print(output)
#     #print(output)
#     #h="hi"
#     #return h
script()    
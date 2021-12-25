import streamlit as st
import cv2
from PIL import Image
import numpy as np
import os
try:
    face_cascade = cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_frontalface_default.xml')
    eye_cascade = cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_eye.xml')
    smile_cascade = cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_smile.xml')
except Exception:
    st.write("Error loading cascade classifiers")
def detect(image):
    image = np.array(image.convert('RGB'))
    faces = face_cascade.detectMultiScale(image=image, scaleFactor=1.3, minNeighbors=5)
    for (x, y, w, h) in faces:
        cv2.rectangle(img=image, pt1=(x, y), pt2=(x + w, y + h), color=(255, 0, 0), thickness=2)
    return image, faces
def about():
	st.write(
		'''It is just an demo page for showing the face Detection using Haar cascade Classifiers
        and for making this webpage we are taking help from bootstrap and streamlit  and 
        it is uploaded on heroku. our real project is Face-Recognition-Attendance-System in that project
        we are marking the attendance by recognizing the face and save it to excel sheet and also providing
        the dashboad at that we can see the attendance of user and also see the graph and some plot according to
        thier data ''')

def Project():
	st.write(
		'''Please Click on the Below link for reaching out the project �🏻
		Read More :point_right: https://face-recognition-attendance-system.epizy.com/.
		''')

def main():
    st.title("Demo Face Detection : ")
    st.write("Made With ❤️ by Rohit Sahu")
    activities = ["Home", "About","Project"]
    choice = st.sidebar.selectbox("Select the Option", activities)
    if choice == "Home":
    	st.write("Go to the About section from the sidebar to Know more about our project.")
    	image_file = st.file_uploader("Upload image", type=['jpeg', 'png', 'jpg', 'webp'])
    	if image_file is not None:
    		image = Image.open(image_file)
    		if st.button("Continue"):
    			result_img, result_faces = detect(image=image)
    			st.image(result_img, use_column_width = True)
    			st.success("Found {} faces\n".format(len(result_faces)))
    elif choice == "About":
    	about()
    elif choice == "Project":
    	Project()
if __name__ == "__main__":
    main()

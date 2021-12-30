# Face Recognition Attendance System

## About
In this Attendance System the attendance for students is marked using Face verification. The Faculty has also provding a dashboardwhere they can check Student behaviour , add a student, modify student details.<br>
The Faculty Can upload the Attendance Sheet .and dowload from the student details<br>
**PHP**  was used for the development of the whole web app. **OpenCv and face_recognition API's** were used for the development of Face Recognizer. The Face Recognizer can detect faces  and mark their attendance into Database.<br>

## NOTE

==> You can access the website live at: https://healthway-daignosis-application.netlify.app/ <br>
==> Python version 3.6.8 was used for the whole project.<br>
==> You can find all the models in [models](https://github.com/rohitsahu70/HEALTHWAY-WEBSITE-NETLIFY-) folder.

## Live Video of Attendance System



## WORK FLOW 

 
                                                                  Face detected by camera
                                                                            ||
                                                                            ||
                                                                  Store the name,date and 
                                                                        entry_time
                                                                            ||
                                                                            ||
                                                                  another Camera store the 
                                                                        exit_time 
                                                                            ||
                                                                            ||
                                                                  All data store in .csv format
                                                                            ||
                                                                            ||          
                                                                  generating new columns "Duration" 
                                                                            ||
                                                                            ||
                                                                  Python Script run and return image
                                                                      of retention metrics
                                                                            ||
                                                                            ||
                                                                  Faculty can upload the attendance 
                                                                      file on dashboard 
                                                                            ||
                                                                            ||
                                                                  Faculty can check the Student Attendance 
                                                                  and behaviour during the week.


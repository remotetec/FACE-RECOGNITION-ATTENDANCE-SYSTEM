# Face Recognition Attendance System

## About
It is an Automatic Attendance Marking Application and in this Application we are also providing a dashboard for admin and admin can check the attendace of student and also check the retention metrics and for marking the attendance we are using face recognition library and storing our data in excel sheet after collecting data of 7 days we are performing data analytics operation we are adding a new column that is duration and it is the diffrence between Entry time and Exit time after that we are ploting line plot and pie chart . and uploading on dashboard and also providing Id and Password of admin and admin can add the student and delete the student from table and also dowload attendance sheet from dashboard.

## NOTE

==> You can access the website live at: http://face-recognition-attendance-system.epizy.com/ <br>
==> Python version 3.6.8 was used for the whole project.<br>
==> You can find all the models in [models](https://github.com/rohitsahu70/Face-Recognition-Attendance-System/tree/main/dashboard) folder.

## Live Video of Attendance System



https://user-images.githubusercontent.com/89459208/147766310-4ee2da20-188a-4d3f-807b-c341d6e991da.mp4



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


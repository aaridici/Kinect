Kinect
======

Microsoft Robotics SDK with Kinect SDK Web Controller

This is the code I used in sync with the Android App I made to control a virtual robot created in Microsoft Robotics SDK Simulation Environment. This Robot uses a Kinect attached to it to see its environment. 

Kinect captures consequtive images to create the sensetion of seeing a video. These images are uploaded to this site with the image upload code.

An Android app used to control the Kinect also interacts with this site via asyncronous http calls. The images are downloaded by the app as often as possible to give the sensetation of seeing through the Kinect attached to the Robot. The commands issued by the Android app are then read by the robot from the server and the robot behaves accordingly.

This was for a project done for my embedded systems class.

# Project Capture The Flag
## Description :
As part of the application project module, we decided to create a virtual machine, type capture the flag, which will aim to be integrated into the laboratories of the topic IT security in the University of Esslingen.  Capture the flag aims to test his skills, in this case in computer security where the person will have to use security holes or his imagination to find flags to validate his laboratory once found.
	In this project, we have developed a virtual machine containing several flags, under several different aspects and different techniques possible in computer science. With this machine, we test the overall abilities of the one who will try to penetrate inside the information system.
	We have also developed a website, where the teams will register and will be able to place their different flags, with in the end a table that will rank the teams according to their number of flags found.

For the Distributed System course project, we decided to implement our docker web site as a LAMP.

To run this project, you need Docker and Docker-compose.

Clone this project and launch with this command :
```sh
docker-compose up
```
During installation, press Y when the question is called.

After installation, we have to fill the database. Connect in phpmyadmin at 172.55.0.9:8080 and connect with root and your password in docker-compose.yml . With the file ctf2018.sql, copy the code and execute it in.

After you can go in home page with this address :  172.55.0.2/home_out.php

Now, you can see report board of each time with ranking. 

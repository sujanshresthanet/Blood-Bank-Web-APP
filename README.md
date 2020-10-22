# Blood-Bank-Web-APP Internshala
Direcly view the working model here : www.chinmayvlogs.com

Query : Design a simple 'Blood bank' web application. Assume you are designing a real-life system, that will be used by real users.
The application should contain 2 types of users: Hospitals and Receivers Pages to be developed- ‘Registration’ pages - Different registration pages for hospitals & receivers. Capture receiver’s blood group during registration. ‘Login’ pages - Single/different login pages for hospitals & receivers. Hospital ‘Add blood info’ page - A hospital, once logged in, should be able to add details of available blood samples (along with type) to their bank. Access to this page should be restricted only to hospitals. ‘Available blood samples’ page - There should be a page that displays all the available blood samples along with which hospital has them and a ‘Request Sample’ button. This page should be accessible to everyone, irrespective of whether the user is logged in or not. Expected functionality on click of the 'Request Sample' button- Only receivers should be able to request for blood samples by clicking the ‘Request Sample’ button. Make sure that only those receivers who are eligible for the blood sample are allowed to click the button. If the user is not logged in, then he/she should be redirected to the login page. If a user is logged in as a hospital, then the user should not be allowed to request for a blood sample. Hospital ‘View requests’ page - Hospitals should be able to see the list of all the receivers who have requested a particular blood group from its blood bank.

Technologies: HTML/CSS/JS/Bootstrap/PHP/PHP Codeigniter framework/MySQL as the database.

# FAQ :
1. How to Deploy CodeIgniter4 Project on a web sever?
  Deploy on shared hosting server or sub-domain of a web server? I have deplyoed the same on Chinmayvlogs.com
For security reason codeigniter4 folder is made suchg a way that all the libraried and code folder is outside the public folder. By url only public folder is accesible. To host it on share hosting your directory structure should look like this.

--home/root (sharehosting root directory)

===|__ public_html (or your domain root folder)

===|====|__assets

===|====|__ index.php

===|====|__ .htaccess

===|

===|__ codeigniter (create a folder with any name you like)

========|__ app(all the files and folder in app folder)

========|__ system

========|__ writable

========|__ .env (dot env file here)

Now you need to change some values to up and running your codeigniter4 project

In public_html folder index.php file chnage the $pathsPath = FCPATH . '../app/Config/Paths.php'; to $pathsPath = FCPATH . '../codeigniter/app/Config/Paths.php';

In app/Config folder App.php file change $baseURL = 'http://192.168.0.111/'; to $baseURL = 'http://studboo.com/';. (your base url)

After this chnage your site will be up and running. To deploy in subdomain and if your subdomain root folder lies in public_html then you should change $pathsPath = FCPATH . '../app/Config/Paths.php'; to $pathsPath = FCPATH . '../../codeigniter/app/Config/Paths.php'; in public_html/yourdomain folder index.php file, followed that directory structure remains same. Important: public folder content should be placed in your subdomain folder.

# How to use this code?
1. Change .env file (environment file) to your database name and password, defaults are host is localhost, database is root, username is NULL and passowrd is NULL.
2. There are php files a. .\app\Views\templates\bloodunits.php b. .\app\Views\templates\HospitalList.php c. .\app\Views\templates\makereq.php c. .\app\Views\templates\viewreq.php Please change deatails of $servername , $username , $password , $dbname to your Database values. (these files contaion direct connection to mysql server)
3. If you have any problems feel free to report here.
4. For XAMPP use DocumentRoot as "C:/xampp/htdocs/public" and Directory as "C:/xampp/htdocs/public".

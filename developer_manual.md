
The first step to consider to work on this application is to brainstorm what technology the team should use in order to 
complete the website. We focused to use the text editor called Atom in order to write our application because it is the most 
familiar with from previous assignments and projects from the past.

For this project, we used the w3.css framework

There are some changes that were made based on the libraries and file structures. In the proposal, the team said that we 
are going to have seperate files for each language and libraries such as HTML, PHP, MySQL, Javascript and CSS. 
Unfortunately we did not commit to this plan but instead decided to have embed everything into one file to avoid confusion 
and avoid losing files. Additionally, we decided to include mysql/MyPhpAdmin into our project because we are dealing with 
individuals who are going to need sign in with their account information.

To have all scripts, libraries, etc working, the developer would need to use either Apache or ampps in order to have the 
php, and mysql working. If these are not downloaded by the developer, he or she would not be able to control the servers 
for php, mysql, and would not be able to edit configurations files depending on the servers that are being used.

The files of code for the application was copied from the local host to the remote server, which in this instance was 
Amazon Web Services (AWS). There are a number of reasons why the use of AWS was implemented, including increased 
elasticity, massive scalability, storage, and enhanced security through the implementation of various security protocols 
such as data encryption and firewalls. An account was created in order to create an instance within a security group, which 
provided the IP address along with the URL of the server.

With the use of Terminal, the Secure Shell Protocol (SSH) was used to establish the connection with Ubuntu by 
referencing the key pair that was downloaded from the used instance. A LAMP web server was then established 
(L = Linux as the operating system platform, A = Apache as the Web Server, M = MySQL as the database server, 
P = PHP as the supportive language). This required the installation and configuration of Apache web server, 
MySQL database server, and PHP components. Several packages had to be installed in order to accomplish this, 
such as Mysql-server, Mysql-client, Phpmyadmin, and php-mbstring. After this was done, the Apache web server 
was then connected to MySQL server. This required a list of configurations within MySQL in the 
directory /var/www/html. Ultimately, the file of code of the running application was copied into this server 
by using the SCP secure copy protocol from the terminal. This allows the application to be running on the URL 
of the AWS server.

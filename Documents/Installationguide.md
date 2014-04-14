#Installation Guide: server
The software was tested on a system running the following software:
* Ubuntu 13.10 Server
* Apache 2.4.6
* Php 5.5.3
* MySQL 5.5.35
* PhpMyAdmin 4.4.6deb1

Starting with a fresh Ubuntu server installation, type in the following commands:  
If you are prompted for the root password at any time, provide the password you entered during server installation.

* **sudo apt-get update && sudo apt-get upgrade**  
* **sudo reboot**  
* **sudo apt-get install apache2 php5 php5-mysql libapache2-mod-php5 mysql-server php5-mcrypt**  
This will install the LAMP stack with the needed mods.
Confirm with Y
When prompted, enter a password for the MySQL "root" user. (remember this password!)  
* **sudo mysql_install_db**  
* **sudo update-rc.d mysql defaults**  
This will make MySQL start when the system boots.
* **sudo /usr/bin/mysql_secure_installation**  
Enter the mysql root password as you set it above
hit n to not change the password
enter Y to accept all other options
* **sudo nano /etc/apache2/mods-enabled/dir.conf**  
Add index.php before index.html
ctrl-x to exit
Y to save
enter to confirm location (don’t change it)
* **sudo apt-get install phpmyadmin**  
when prompted, select apache2
when prompted, select Yes to configure phpmyadmin with dbconfig-common
when prompted, enter the MySQL root password
when prompted, choose a password for phpmyadmin and confirm it
* **sudo nano /etc/apache2/apache2.conf**  
add this to the end of the file: Include /etc/phpmyadmin/apache.conf
Save and exit in the same way as above (ctrl-x, Y, enter)
* **sudo ln -s /usr/share/phpmyadmin /var/www/phpmyadmin**  
* **sudo nano /etc/php5/mods-available/json.ini**  
uncomment the priority=20 line (remove ; at the beginning of the line)
save and exit (ctrl-x, Y, enter)
* **sudo cp /etc/php5/conf.d/mcrypt.ini /etc/php5/mods-available/**
* **sudo php5enmod mcrypt**
* **mkdir ~/WorldMap**
* **sudo ln -s ~/WorldMap /var/www**
* Now, copy all files in the website.zip to the ~/WorldMap folder
* **sudo nano /etc/apache2/apache2.conf**  
find *Directory /var/www* and change it to *Directory /var/www/WorldMap/public*  
Below it, change *AllowOverride None* to *AllowOverride All*
Save and exit.
* **sudo nano /etc/apache2/sites-available/000-default.conf**  
Change the DocumentRoot to /var/www/WorldMap/public
* **sudo chmod -R guo+w ~/WorldMap/app/storage**
* **sudo chmod -R guo+r ~/WorldMap**
* **sudo chmod -R o+x ~/WorldMap**
* **sudo service apache2 restart**

All required software should be installed and running.
Confirm that it works by navigating to the server IP (this can be found with **ifconfig eth0 | grep inet | awk ‘{ print $2 }’**)
Add /phpmyadmin to the end of the URL to confirm that phpmyadmin works.
You should be able to login to phpmyadmin with username ‘**root**’ and the root password you entered earlier.

##In Phpmyadmin 
1. Go to Users  
![1.1](Images/1.1.png)  
2. Click “add user”  
![1.2](Images/1.2.png)  
3. Fill in a username, password and set the host to “Any host”. Note: Use a different password than your root password for safety.  
![1.3](Images/1.3.png)  
4. Make sure all data privileges except for FILE are selected (**SELECT, INSERT, UPDATE, DELETE**), and all other privileges are unselected.  
![1.4](Images/1.4.png)  
5. Enter the login info for the new MySQL account into db/connection.php  

#Installation Guide: database

File needed:
* db_create.sql

1. Make sure the software on the server is up to date and running  
2. Login on phpMyAdmin with your MySQL root account  
![2.1](Images/2.1.png)  
3. Click on “Import"  
![2.2](Images/2.2.png)  
4. Select the “db_create.sql”  
![2.3](Images/2.3.png)  
5. Keep the other settings on default  
6. Click on “Go”  
![2.4](Images/2.4.png)  
7. Now you have successfully installed your database  
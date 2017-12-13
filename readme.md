
## About TinyUrl

Basic functionality for implementing a "URL Shortener".

- A user should be able to place in a long URL and submit.
- It should store the long version of the URL, and generate a short URL for the user.
- All subsequent requests to the short URL should send the user to the long URL by some manner of redirect.
- Using Laravel Framework.
- Using MySQL DB


Live Demo: http://drupey.com/

### 1. Environment Setup

Create User

`$ adduser tinyurl`

Switch users

`$ su tinyurl`

Create Project Folder

`$ mkdir /webrootpath/tinyurl`

Set Ownership

`$ chown -R tinyurl:www-data /webrootpath/tinyurl`

`$ chmod 2750 /webrootpath/tinyurl`

Go to directory

`$ cd /webrootpath/tinyurl`

Clone your repo

`$ git clone https://github.com/ohdavey/tinyurl.git .`

### 2. Create Database

Open mysql connection

`$ mysql -u root -p`

Copy and Paste MySQL Statement below*

```
CREATE DATABASE `your_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
GRANT ALL PRIVILEGES ON `your_db`.* TO `your_user`@localhost IDENTIFIED BY 'PASSWORD';
GRANT SELECT,LOCK TABLES on `your_db`.* TO `your_db`backup@localhost IDENTIFIED BY 'PASSWORD';
FLUSH PRIVILEGES;
```

### 3. DEPLOY

Copy Virtual Host

`$ cp /path/to/your/tinyurl.conf /etc/apache2/sites-available/tinyurl.conf`


Enable Site

`$ a2ensite tinyurl`

Restart Server

`$ service apache2 restart`


### 4. Configure Project Setting Files

Go to Project root

`$ cd /webrootpath/tinyurl`

Configure your .env file

`$ cp .env.example`

Edit and apply your configurations.

`$ vi .env`


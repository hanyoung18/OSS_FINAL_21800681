# 2022-1 Open-source Software Laboratories Final project  Handong Global University 21800681 Hanyoug Jeong (정한영)

## What does this project do?
I made web diary with functions called CRUD.
For the Diary, I used Mysql database, php, and apache2 open source software.

## Why is this project useful?
1.Using a web server, user can easily create a diary anytime, anywhere rather than a paper diary.
2.UI is intuitive. I made this easy to use.
3.It is free. It made using only opensource software, so it doesn't cost any money.
        
## How do I get started?
1. Install libraries.
   ```
   sudo apt-get update
   sudo apt-get upgrade
   sudo apt-get install apache2 -y
   sudo apt-get install mariadb-sever php-mysql -y
   sudo apt-get install php -y
   sudo service apahce2 restart
   ```
2. Clone this repository to your RaspBerrypi
    ```
    git clone https://github.com/hanyoung18/OSS_FINAL_21800681
    ```
3. Move the cloned directory to /var/www/html
4. Make your mysql Account
5. Make new database structure name 'diary'and make table
```
CREATE TABLE member_table (
 seq        INT NOT NULL AUTO_INCREMENT,
 name     VARCHAR(255),
 date    VARCHAR(255),
 condition   VARCHAR(255),
 diary    VARCHAR(1000),  
  PRIMARY KEY(seq)
) ENGINE=MYISAM CHARSET=utf8;

```
6. Go to http://raspberrypi.local/OSS_FINAL_21800681/ and use it!


## References
CSS FROM: https://startbootstrap.com/template/shop-item

## My contribution
Modified UI to use easier.
Designed Database Structure and connect to website.
Implemented CRUD(Crete,Read,Update,Delete) functions using Mysql database.

## Where can I get more help, if I need it?
If you need more help, please send email to `chochegksdud@handong.ac.kr`

## Youtube link
https://www.youtube.com/watch?v=WditqFvU43k

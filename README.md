# CRUD System 

This is a CRUD system of general products, which uses a registration and a password as login requirements.
You can only enter numbers in the registration, which prevents **SQL Injection**. The password uses the **MD5 algorithm**, which creates a one-way 128-bit hash.

<img src="img/login_page.PNG" width="500">

*Observation:* all comments are written in Brazilian Portuguese.

## Getting started

- Download [PostgreSQL](https://www.postgresql.org/)
- Download [XAMPP](https://www.apachefriends.org/)
- To enable PostgreSQL in XAMPP you must open the file ```C:/xampp/php/php.ini``` and uncomment the lines below:
    - ```extension=pdo_pgsql```
    - ```extension=pgsql```
- In order to test, you must create a postgres database called ```usuario``` and insert the file script [usuario.sql](usuario.sql).

## Running

- After enabling postgreSQL in XAMPP, open XAMPP and start Apache.
- Place your PHP files in the "HTDocs" folder located in ```C:\xampp\htdocs```.
- Open in browser http://localhost/.


#### This was an assignment for Systems Security class by MSc Carlos Schaeffer from University of Passo Fundo (2018/1).

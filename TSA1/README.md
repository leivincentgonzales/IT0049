# TSA1 — Tasks for Today Management System

A simple task management system developed using CodeIgniter 4 for IT0049.

## Developer

- Name: Lei Vincent B. Gonzales
- Program: Bachelor of Science in Information Technology
- Year and Section: Third Year – TB32
- Student Number: 202411698
- Email: lbgonzales@fit.edu.ph

## Features

- Displays tasks scheduled for today
- Displays all tasks ordered by date
- Displays one demo user profile
- Includes a static About page
- Uses CodeIgniter models to retrieve database records

## Routes

| Page | Route |
|---|---|
| Today's Tasks | `/` |
| All Tasks | `/tasks` |
| Profile | `/profile` |
| About | `/about` |

## Local Setup

### 1. Install dependencies

Open a terminal inside the TSA1 folder and run:

```bash
composer install
```

### 2. Create the environment file

Copy the provided `env` file and rename the copy to `.env`.

For XAMPP, configure the following values:

```ini
CI_ENVIRONMENT = development

app.baseURL = 'http://localhost/IT0049/TSA1/'
app.appTimezone = 'Asia/Manila'

database.default.hostname = localhost
database.default.database = tsa1_db
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```

### 3. Import the database

1. Start Apache and MySQL in XAMPP.
2. Open phpMyAdmin.
3. Create a database named `tsa1_db`.
4. Import `database/tsa1_db.sql`.

### 4. Open the project

Visit:

```text
http://localhost/IT0049/TSA1/
```

## Hosted Website

[Open the hosted TSA1 website](http://tsa1gonzalesleivincent.kesug.com/)

## Technologies Used

- PHP
- CodeIgniter 4
- Composer
- MySQL/MariaDB
- Bootstrap
- XAMPP
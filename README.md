
<p align="center">
  <b>Modern Camping Gear  with User Authentication & Messaging 📦</b><br>
  <i>Sign up, login, explore gear, and message us — built with HTML, CSS, JS, PHP, and MySQL</i>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/HTML-5-orange">
  <img src="https://img.shields.io/badge/CSS-3-blue">
  <img src="https://img.shields.io/badge/JavaScript-ES6-yellow">
  <img src="https://img.shields.io/badge/PHP-8.0-lightgrey">
  <img src="https://img.shields.io/badge/MySQL-Database-blue">
  <img src="https://img.shields.io/badge/XAMPP-Localhost-critical">
</p>

---

## ✨ Features

✅ Full **user authentication** (signup, login, logout)  
✅ **Contact form** with login protection  
✅ **PHP backend** with MySQL database  
✅ **Clean & modern UI** using HTML, CSS, JavaScript  
✅ Fully working on **localhost via XAMPP**  
✅ **Sessions**, validations, and secure routing  
✅ Responsive design across devices

---

## 📸 Screenshots
<img width="1852" height="883" alt="Screenshot (26)" src="https://github.com/user-attachments/assets/53542b11-cad4-4b2c-8c36-075071c81045" />

<img width="1861" height="910" alt="Screenshot (27)" src="https://github.com/user-attachments/assets/41786ab3-1df5-4fb1-b0ba-0fbdb6a56a12" />

<img width="1873" height="919" alt="Screenshot (28)" src="https://github.com/user-attachments/assets/29787f9a-005b-4537-a707-f6fe38375ca7" />

---

## 🛠️ Tech Stack

| Frontend | Backend | Database | Server  |
|----------|---------|----------|---------|
| HTML5    | PHP     | MySQL    | Apache (XAMPP) |
| CSS3     |         |          |         |
| JavaScript |       |          |         |

---

---

## 📦 Installation & Setup (XAMPP)

### 🔧 Requirements

- XAMPP installed (PHP & MySQL)
- Web browser

### 🧩 Steps

1. Clone or download this project.
2. Move the folder to `C:/xampp/htdocs/`
3. Start **Apache** and **MySQL** from XAMPP.
4. Create MySQL database `camping_gear` using phpMyAdmin.
5. Import the following tables:

```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100),
  email VARCHAR(100),
  password VARCHAR(255)
);

CREATE TABLE messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  message TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

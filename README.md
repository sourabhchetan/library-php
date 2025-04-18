# 📚 Library Management System

A simple and functional **Library Management System** built using **PHP, MySQL**, and **CSS**. This system allows administrators to manage books, track borrow and return records, and handle users efficiently.

---

## 🚀 Features

- 📘 Add, update, delete, and search books  
- 🙋‍♂️ Manage borrowers and students  
- 📥 Record book borrow and return details  
- 🧾 View and delete transaction records  
- 🔐 Admin login functionality  
- 📊 Database integration via `connect.php`  

---

## 🛠️ Technologies Used

- **Frontend**: HTML, CSS  
- **Backend**: PHP  
- **Database**: MySQL  

---

## 📁 Project Structure

library/ │ ├── book.php # Add/search books
├── book_particular_search.php # Search specific books
├── book_return_records.php # Track returned books
├── borrowers_records.php # Manage borrowers
├── connect.php # Database connection
├── login.css # Login page styling
├── delete*.php # Scripts for deleting records
├── drop*.php # Drop tables if needed
├── *.css # Stylesheets for various modules
└── *.php # Core functionalities

---

## 🧰 Setup Instructions

1. **Clone or extract** the project folder to your local server directory (`htdocs` for XAMPP, `www` for WAMP).
2. Import the database:
   - Open **phpMyAdmin**
   - Create a new database (e.g., `library_db`)
   - Import the SQL file (ensure it's provided in the project folder)
3. Update `connect.php` with your database credentials.
4. Start your local server (Apache + MySQL).
5. Open your browser and navigate to:  
   `http://localhost/library`

---

## 👨‍💻 Author

**Sourabh Chetan**  
MCA Student | Developer | Content Creator

---

## 📌 Notes

- Make sure PHP and MySQL are properly configured on your system.
- Ensure `connect.php` is secure in production environments.
- Always backup the database before making structural changes.

---

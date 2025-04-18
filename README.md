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
library/ │ ├── book.php # Main book management interface ├── book.css # Styling for book management ├── book_particular_search.php # Search for a specific book by criteria │ ├── book_return_records.php # List of returned books ├── book_return_records.css # Styling for return records │ ├── borrowers_records.php # Manage borrowers (students) ├── borrowers_records.css # Styling for borrowers section │ ├── connect.php # Database connection script │ ├── deletebook.php # Delete a book record ├── deletebook_return_record.php # Delete a single return record ├── deletebook_return_records.php # Delete all return records ├── deleteborrowers_records.php # Delete borrower records ├── deletestudent.php # Delete a student ├── deleteusers.php # Delete a user │ ├── dropbook.php # Drop books table ├── dropbook_return_records.php # Drop book return table ├── dropborrowers_records.php # Drop borrowers table ├── dropstudent.php # Drop student table ├── dropusers.php # Drop users table │ ├── login.css # Styling for login page │ └── (optional) database.sql # SQL file to create and populate the DB (not included)

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

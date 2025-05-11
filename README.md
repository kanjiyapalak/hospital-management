# 🏥 Hospital Management System (PHP & MySQL)

A web-based Hospital Management System built using **PHP** and **MySQL** designed to manage hospital operations including patient records, appointments, doctors, and administrative tasks.

---

## 📌 Features

### 👤 Admin
- Login/logout functionality
- Manage doctors (add/update/delete)
- Manage patients
- Manage appointments
- View reports and system overview

### 🧑‍⚕️ Doctor
- Login/logout
- View appointments assigned
- Update appointment status
- View and manage patient prescriptions

### 🧑 Patient
- Signup/login
- Book appointments with doctors
- View appointment status
- View and manage profile
- View prescriptions provided by doctors

---

## 🛠 Tech Stack

- **Frontend**: HTML, CSS, Bootstrap
- **Backend**: PHP (Core PHP, no frameworks)
- **Database**: MySQL
- **Web Server**: Apache (via XAMPP or similar)
- **Auth**: Session-based authentication

---

## 🗂 Folder Structure (Overview)

```
hospital-management-system/
├── admin/                 # Admin panel pages
├── doctor/                # Doctor dashboard and actions
├── patient/               # Patient portal and actions
├── includes/              # Common files (config, database connection)
├── assets/                # CSS, JS, images
├── index.php              # Landing page / login portal
├── config.php             # Database configuration
└── README.md              # Project documentation
```

---

## ⚙️ Installation & Setup

### 📦 Prerequisites

- PHP 7.x or later
- MySQL 5.7 or later
- Apache Web Server (via XAMPP/WAMP/LAMP)

### 🧰 Setup Instructions

1. **Download & Extract the Project**

   ```bash
   unzip hospital-management-system.zip
   move the folder to your xampp/htdocs directory
   ```

2. **Start Apache & MySQL**

   Open XAMPP control panel and start both services.

3. **Import the Database**

   - Open phpMyAdmin: http://localhost/phpmyadmin
   - Create a new database: `hospital_db`
   - Import the provided SQL file (if included):  
     Go to `Import` → Choose `hospital_db.sql` → Click `Go`

4. **Update Database Credentials**

   If needed, modify `config.php` file to match your MySQL settings:
   ```php
   $conn = mysqli_connect("localhost", "root", "", "hospital_db");
   ```

5. **Access the Application**

   Open your browser and visit:  
   [http://localhost/hospital-management-system](http://localhost/hospital-management-system)

---

## 🔑 Default Login Credentials

> You can update these in the database or through admin panel.

| Role       | Username        | Password    |
|------------|------------------|-------------|
| Admin      | `admin`          | `admin123`  |
| Doctor     | `doctor1`        | `pass123`   |
| Patient    | `patient1`       | `pass123`   |

---

## 📈 Future Enhancements

- Email notifications for appointments
- Role-based dashboards with analytics
- Export patient reports to PDF
- REST API for external integration

---

## 🙏 Thank You

Thank you for checking out the **Hospital Management System** built in PHP!  
Feel free to fork this repository, raise issues, and contribute improvements!


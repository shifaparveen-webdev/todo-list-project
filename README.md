# 📝 To-Do List Web Application

A simple **Task Management Web Application** built using **PHP and MySQL**.
This project allows users to manage daily tasks by adding, editing, viewing, and deleting tasks.

---

## 📌 Features

* ➕ Add new tasks
* 📋 View all tasks
* ✏️ Edit existing tasks
* 🗑️ Delete tasks
* 🎨 Simple and clean user interface

---

## 🛠️ Technologies Used

* **HTML**
* **CSS**
* **PHP**
* **MySQL**
* **WAMP Server**
* **Git & GitHub**

---

## 📂 Project Structure

```
todo-list-project
│
├── index.php
├── add.php
├── edit.php
├── delete.php
├── list.php
├── style.css
├── README.md
└── images
    ├── home.png
    ├── task-list.png
    └── edit-task.png
```

---

## ⚙️ How to Run the Project

### 1. Install WAMP Server

Download and install **WAMP Server**.

### 2. Start WAMP

Start WAMP and make sure the icon turns **green**.

### 3. Move Project Folder

Place the project inside:

```
C:\wamp64\www\
```

Example:

```
C:\wamp64\www\online\todo-list-project
```

### 4. Create Database

Open **phpMyAdmin** and create a database:

```
todo_app
```

### 5. Create Table

Create a table named **tasks** with this structure:

| Column      | Type         | Extra          |
| ----------- | ------------ | -------------- |
| id          | INT          | AUTO_INCREMENT |
| task        | VARCHAR(255) |                |
| PRIMARY KEY | id           |                |

### 6. Run the Project

Open your browser and go to:

```
http://localhost/online/todo-list-project/
```

---

## 📸 Project Screenshots

### Home Page

![Home](images/home.png)

### Task List

![Task List](images/task-list.png)

### Edit Task

![Edit Task](images/edit-task.png)

---

## 🎯 Learning Outcomes

Through this project I learned:

* CRUD operations using **PHP and MySQL**
* Connecting **PHP with MySQL database**
* Handling **GET and POST requests**
* Basic **Git and GitHub workflow**
* Running PHP applications using **WAMP server**

---

## 🚀 Future Improvements

Possible improvements for this project:

* ✔ Task completion checkbox
* ✔ User authentication (login system)
* ✔ Responsive UI using Bootstrap

---

## 👩‍💻 Author

**Shifa Parveen**

GitHub:
[https://github.com/shifaparveen-webdev](https://github.com/shifaparveen-webdev)

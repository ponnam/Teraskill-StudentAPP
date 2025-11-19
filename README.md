# 📚 Student Management App using Docker Compose  
A simple beginner-friendly project demonstrating how to run a **PHP + MySQL** application using **Docker Compose** with persistent storage and automatic database initialization.

This project is perfect for teaching:
- Docker Compose basics  
- Multi-container applications  
- Volumes and data persistence  
- Connecting PHP to MySQL  
- Auto DB initialization using `/docker-entrypoint-initdb.d`

---

## 🚀 Features
- PHP front-end with:
  - Add Student form
  - View Students list
- MySQL backend with automatic table creation
- Data persists even after container deletion
- Fully runnable using official Docker images only
- No Dockerfile required

---

## 🏗 Project Structure

- Teraskill-StudentAPP/
  - docker-compose.yml
  - mysql/
    - init.sql
  - php/
    - db.php
    - index.php
    - add.php
    - view.php


---

## 🐳 Docker Compose Setup

### Start the application

docker compose up -d

### 🌐 Access the Web App

http://IPAddress:8080


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

<img width="289" height="268" alt="image" src="https://github.com/user-attachments/assets/b9e33358-60d0-48ef-9a5e-d226b9967933" />


---

## 🐳 Docker Compose Setup

### Start the application

docker compose up -d

### 🌐 Access the Web App

http://IPAddress:8080


# 🧩 Dashboard Builder

## 📌 Overview

This project is a dynamic dashboard builder similar to Canva/Figma, where users can create custom layouts by adding, editing, and arranging UI components.
It allows users to visually design dashboards using drag-and-drop functionality.

---

## 🚀 Features

* ➕ Add Text, Image, and Chart components
* 🖱️ Drag and resize elements freely
* ✏️ Editable text (basic formatting supported)
* 📊 Dynamic chart generation using dummy data
* 💾 Save layout to MySQL database
* 🔄 Reload and render saved layout

---

## 🛠️ Tech Stack

* **Frontend:** HTML, CSS, JavaScript, Fabric.js, Chart.js
* **Backend:** PHP
* **Database:** MySQL

---

## 📂 Project Structure

```
dashboard-builder/
├── frontend/        # UI and client-side logic
├── backend/         # PHP APIs and database connection
├── database/        # SQL schema and sample data
├── README.md
```

---

## ⚙️ Setup Instructions

### 1. Install Required Tools

* XAMPP / Laragon (for Apache & MySQL)

### 2. Start Services

* Start Apache
* Start MySQL

### 3. Setup Database

* Open phpMyAdmin
* Create database: `dashboard`
* Import:

  * `database/schema.sql`
  * `database/sample_data.sql` (optional)

### 4. Run Project

* Place project folder inside `htdocs` (XAMPP) or `www` (Laragon)
* Open browser and run:

```
http://localhost/dashboard-builder/frontend/index.html
```

---

## 🧪 Usage

1. Click **Add Text / Image / Chart**
2. Drag and resize elements on canvas
3. Click **Save** to store layout
4. Refresh page
5. Click **Load** to restore layout

---

## 📌 API Endpoints

* `POST /backend/save.php` → Save layout
* `GET /backend/get.php` → Fetch latest layout

---



## ⚠️ Notes

* Charts use dummy data for demonstration
* Desktop-first responsive design
* Data stored as JSON in MySQL

---

## 👩‍💻 Author

Your Name
Sri pravallika Malla

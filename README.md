# Kan Bağışçısı Yönetim Sistemi (Blood Donation Management System)

![Project screenshot](/img/homepage.png)

## Overview

## نظرة عامة

هذا المشروع هو نظام إدارة تبرع بالدم مبني على PHP، يتيح للكوادر الطبية تسجيل المتبرعين، تتبع عمليات التبرع، وإصدار تقارير شاملة. الواجهة تدعم التصميم المتجاوب وتستخدم Bootstrap لتوفير تجربة مستخدم سلسة.

This is a PHP‑based web application for managing blood donations. It provides an administrator panel where staff can log in, view donations, manage donors, and generate reports. The UI uses Bootstrap and custom styling for a clean, responsive experience.
This is a PHP‑based web application for managing blood donations. It provides an administrator panel where staff can log in, view donations, manage donors, and generate reports. The UI uses Bootstrap and custom styling for a clean, responsive experience.

## Features
- Secure admin login
- Dashboard displaying donation statistics
- CRUD operations for donors and donations
- Responsive layout with modern UI components
- Easy to deploy with PHP’s built‑in server

## Installation
1. Ensure you have **PHP 7.4+** and **MySQL** installed.
2. Clone the repository (or download the source).
3. Create a MySQL database named `secyear` (or adjust `dbcon.php`).
4. Update `dbcon.php` with your database credentials if needed.
5. Run the development server:
   ```bash
   php -S localhost:8000 -t .
   ```
6. Open `http://localhost:8000/` in your browser.

## Usage
- Navigate to the login page and use the admin credentials you have set up in the `admin` table.
- After logging in, you can manage donors, view donation records, and generate reports from the dashboard.

## Screenshots
| Page | Screenshot |
|------|------------|
| Home / Login | ![Home page](/img/homepage.png) |

## Contributing
Feel free to fork the repository, create a feature branch, and submit a pull request.

## License
This project is released under the MIT License.

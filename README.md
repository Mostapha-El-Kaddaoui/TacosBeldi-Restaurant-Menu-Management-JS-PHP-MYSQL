# Tacos Beldi Restaurant Website

This is a PHP-based website for Tacos Beldi, a restaurant located in Taourirt. The site was created in 2022 and allows users to view the menu, learn about the restaurant, reserve tables, and contact for delivery or special orders. An admin dashboard is included for managing menu items.

## Features

- **Home Page:** Restaurant introduction, menu shortcuts, reservation, delivery info, and embedded map.
- **Menu Page:** Dynamic menu loaded from a MySQL database, with images, prices, and details for each meal.
- **Meal Details:** Individual meal pages with ingredients, sauces, price, and WhatsApp ordering link.
- **Admin Dashboard:** Secure login for admins to add or delete meals from the menu.
- **Responsive Design:** Optimized for desktop and mobile devices.
- **Footer & Navbar:** Social media links and navigation for easy access.

## Project Structure

########
- `index.php` – Home page
- `menu.php` – Menu listing page
- `chek.php` – Individual meal details
- `login.php` – Admin login
- `dashboard.php` – Admin dashboard for menu management
- `connect.php` – Database connection
- `navbar.php` – Navigation bar
- `footer.php` – Footer section
- `style.css`, `responsive.css`, `menustylek.css`, `dashboard.css` – Stylesheets
- Image files for branding and menu items
########

## Setup Instructions

1. **Requirements:**
   - PHP 7+
   - MySQL database
   - Web server (Apache recommended)

2. **Database:**
   ########
   Database: `snackdata`
   Table: `meals` → `id`, `name`, `image`, `sauces`, `price`, `ingredients`, `description`
   Table: `admin` → `admin-name`, `admin-password`
   ########

3. **Configuration:**
   - Update database credentials in `connect.php`, `login.php`, and `dashboard.php` as needed.

4. **Usage:**
   - Place all files in your web server's root directory.
   - Access `index.php` for the main site.
   - Admins can log in via `login.php` to manage menu items.

## Illustrations

- **Home Page**  
  ![Home](https://github.com/Mostapha-El-Kaddaoui/TacosBeldi-Restaurant-Menu-Management-JS-PHP-MYSQL/blob/main/home.png?raw=true)

- **Menu Page**  
  ![Menu](https://github.com/Mostapha-El-Kaddaoui/TacosBeldi-Restaurant-Menu-Management-JS-PHP-MYSQL/blob/main/menu.png?raw=true)

- **Dashboard**  
  ![Dashboard](https://github.com/Mostapha-El-Kaddaoui/TacosBeldi-Restaurant-Menu-Management-JS-PHP-MYSQL/blob/main/dashboard.png?raw=true)

- **Meal Details (Check)**  
  ![Check](https://github.com/Mostapha-El-Kaddaoui/TacosBeldi-Restaurant-Menu-Management-JS-PHP-MYSQL/blob/main/check.png?raw=true)

- **WhatsApp API (Order Example)**  
  ![WhatsApp](https://github.com/Mostapha-El-Kaddaoui/TacosBeldi-Restaurant-Menu-Management-JS-PHP-MYSQL/blob/main/whatsapp.png?raw=true)

## Contact

For special orders or reservations, use the WhatsApp links provided on the site.

---

**Copyright © 2022, All Rights Reserved For ELKADDI-Solutions**

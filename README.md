# 🛒 E-commerce Website

This is a full-featured e-commerce platform built with PHP and a MySQL database. It includes a user-friendly frontend for Browse and purchasing products, as well as a robust admin panel for managing the store. The website is designed to be responsive and easy to navigate for both customers and administrators.

\<br\>

## 🚀 Features

### **👤 User Features**

  * **User Authentication**: Secure user registration and login system.
  * **Product Browse**: Users can view a variety of products on the home and shop pages.
  * **Shopping Cart**: Add products to a dynamic shopping cart and update quantities.
  * **Checkout Process**: A streamlined checkout process for placing orders.
  * **Order History**: View a list of all previously placed orders and their payment status.
  * **Search Functionality**: Easily search for specific products by name.
  * **Contact Form**: Send messages to the administrator for inquiries or support.

### **👑 Admin Features**

  * **Admin Dashboard**: An overview of key store metrics, including pending orders, completed payments, and product counts.
  * **Product Management**: Add, update, and delete products from the store.
  * **Order Management**: View all customer orders and update their payment status (e.g., pending or completed).
  * **User Management**: View and delete user accounts, with a distinction between 'user' and 'admin' types.
  * **Message Management**: Review and delete messages submitted through the contact form.

\<br\>

-----

## 🛠️ Technologies Used

  * **Backend**: PHP
  * **Database**: MySQL
  * **Frontend**: HTML, CSS, JavaScript
  * **Styling**: Custom CSS with Font Awesome for icons.
  * **Database Schema**: The database structure is defined in `shop_db.sql`.

\<br\>

-----

## ⚙️ Installation

1.  **Clone the repository**:
    `git clone [repository-url]`

2.  **Database Setup**:

      * Import the `shop_db.sql` file into your MySQL database. This will create the necessary tables for `cart`, `message`, `orders`, `products`, and `users`.
      * Update the database connection details in `config.php` to match your local setup:
        ```php
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'shop_db') or die('connection failed');
        ?>
        ```

3.  **Web Server**:

      * Place all files in your web server's root directory (e.g., `htdocs` for XAMPP).

4.  **Access the Application**:

      * Open your browser and navigate to `http://localhost/[folder-name]`.
      * Register a new user to start, or create an admin account by manually changing `user_type` in the database.

\<br\>

-----

## 📂 File Structure

The project has a clear and logical file structure:

  * `admin_header.php`: Reusable header for all admin pages.
  * `admin_page.php`: The main dashboard for administrators.
  * `admin_products.php`: Interface for managing products.
  * `admin_orders.php`: Interface for managing customer orders.
  * `admin_users.php`: Interface for managing user accounts.
  * `admin_contacts.php`: Interface for viewing and deleting user messages.
  * `about.php`: The "About Us" page for customers.
  * `cart.php`: Displays the user's shopping cart.
  * `checkout.php`: The final step of the purchasing process.
  * `config.php`: Database connection configuration.
  * `contact.php`: User contact form.
  * `footer.php`: Reusable footer for user pages.
  * `header.php`: Reusable header for user pages, including cart status.
  * `home.php`: The main landing page for logged-in users.
  * `login.php`: User and admin login page.
  * `logout.php`: Session termination script.
  * `orders.php`: User's order history page.
  * `register.php`: New user registration page.
  * `search_page.php`: Page for searching products.
  * `shop.php`: Page displaying all available products.
  * `css/`: Directory for all CSS files (`style.css`, `admin_style.css`, etc.).
  * `uploaded_img/`: Directory to store product images.
  * `shop_db.sql`: Database schema.

\<br\>

-----

## 🤝 Contribution

Feel free to fork the repository and contribute by submitting pull requests.

## 📄 License

This project is open-source.

-----

© 2025 Md Didarul Alam Alif. All rights reserved.

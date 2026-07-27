# 🥟 Dimsum Shop — WordPress + WooCommerce

A WordPress e-commerce site for a dimsum shop, built with the **Seafood Shop** theme and **WooCommerce**.

---

## Prerequisites

Before anything, make sure you have these installed:

| Software | Download Link | Why |
|---|---|---|
| **XAMPP** (v8.x+) | https://www.apachefriends.org/download.html | Runs Apache (web server) + MySQL (database) locally |
| **Git** | https://git-scm.com/downloads | To clone this repo |

> **Note:** XAMPP includes PHP — no separate PHP install needed.

---

## Setup Steps

### 1. Clone the repo into XAMPP's web folder

Open a terminal and run:

```bash
cd C:\xampp\htdocs
git clone <your-repo-url> dimsum-shop
```

> Replace `<your-repo-url>` with the actual GitHub URL.

---

### 2. Start Apache and MySQL

Open **XAMPP Control Panel**:

```
C:\xampp\xampp-control.exe
```

Click **Start** next to both:
- ✅ **Apache**
- ✅ **MySQL**

Both status indicators should turn green before continuing.

---

### 3. Create the database

1. Open your browser and go to: `http://localhost/phpmyadmin`
2. Click **New** in the left sidebar
3. Name the database: `dimsum_shop`
4. Set collation to: `utf8mb4_unicode_ci`
5. Click **Create**

---

### 4. Import the database

Still in phpMyAdmin:

1. Click on the `dimsum_shop` database in the left sidebar
2. Click the **Import** tab at the top
3. Click **Choose File** and select `dimsum_shop.sql` from the project root folder
4. Scroll down and click **Import**

Wait for the success message. All tables and data will be imported.

---

### 5. Configure WordPress

Copy the sample config and fill in your details:

```bash
cd C:\xampp\htdocs\dimsum-shop
copy wp-config-sample.php wp-config.php
```

Open `wp-config.php` in any text editor and update these lines:

```php
define( 'DB_NAME',     'dimsum_shop' );  // keep as-is
define( 'DB_USER',     'root' );         // XAMPP default, keep as-is
define( 'DB_PASSWORD', '' );             // XAMPP default is empty, keep as-is
define( 'DB_HOST',     'localhost' );    // keep as-is
```

> If your XAMPP MySQL uses a custom password, update `DB_PASSWORD` accordingly.

---

### 6. Open the site

Go to: **http://localhost/dimsum-shop**

You should see the Dimsum Shop homepage.

To access the admin dashboard:
- URL: `http://localhost/dimsum-shop/wp-admin`
- Ask the project owner for the admin username and password.

---

## Project Structure

```
dimsum-shop/
├── wp-content/
│   ├── themes/
│   │   └── seafood-shop/      <- Active theme (do your styling edits here)
│   └── plugins/
│       ├── woocommerce/       <- E-commerce functionality
│       └── classic-blog-grid/ <- Blog layout plugin
├── dimsum_shop.sql            <- Database dump (import this on first setup)
├── wp-config-sample.php       <- Copy this to wp-config.php and configure
└── README.md                  <- You are here
```

---

## Common Issues

**Apache won't start (port 80 conflict)**
> Another app (like Skype or IIS) may be using port 80.
> In XAMPP Control Panel -> Apache -> Config -> set `Listen 8080`, then access the site at `http://localhost:8080/dimsum-shop`.

**MySQL won't start (port 3306 conflict)**
> Open Task Manager, find any existing `mysqld.exe` process and end it, then restart MySQL in XAMPP.

**Site shows "Error establishing a database connection"**
> Double-check that MySQL is running in XAMPP, and that `wp-config.php` has the correct DB credentials.

**wp-config.php not found**
> You forgot Step 5 — copy `wp-config-sample.php` to `wp-config.php`.

---

---

## Theme Customization & Content

The active theme is **Seafood Shop**, located at:
```
wp-content/themes/seafood-shop/
```

We have rebranded the original theme to a Dimsum Shop:
- **Global Colors** changed to Warm Red and Gold in `theme.json`.
- **Checkout Fields** simplified in `functions.php`.
- **WhatsApp Button** added to `patterns/footer.php`.
- **Pages added:** *Tentang Kami*, *Kontak*, and *Blog Dimsum*.

---

## Post-Installation Tasks (For Collaborators)

### 1. Upload WooCommerce Products
The "Produk Terlaris Kami" section on the homepage is dynamically driven by WooCommerce, which is currently **empty**.
1. Go to `wp-admin -> Products -> Add New`
2. Create your products (Siu Mai, Char Siu Bao, Har Gow, Wonton Soup).
3. We have AI-enhanced, perfectly transparent product images ready for you in your local folder: `digidaw/img/enhanced/`. Upload these as the Product Images!

### 2. 404 Errors on Navigation Links?
If clicking links like `/tentang-kami/` results in an Apache 404 error, you need to enable Pretty Permalinks and flush rewrite rules:
1. Go to `wp-admin -> Settings -> Permalinks`.
2. Select **Post name** (`/%postname%/`).
3. Click **Save Changes**. This forces WordPress to regenerate the `.htaccess` file.

---

## Tech Stack

- **WordPress** 6.x
- **WooCommerce** — product listings, cart, checkout
- **Seafood Shop** theme — block-based FSE theme
- **PHP** 8.x (via XAMPP)
- **MariaDB** 10.4 (via XAMPP MySQL)

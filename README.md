# AutoLink PHP Project

AutoLink is a full-stack PHP car rental application with a simplified structure (non-MVC pattern).

## Project Structure

```
AutoLink-PHP_Project/
├── index.php                        # Homepage
├── about.php                        # About page
├── cars.php                         # Car listings
├── car-details.php                  # Single car view
├── services.php                     # Services page
├── pricing.php                      # Pricing page
├── contact.php                      # Contact page
├── blog.php                         # Blog page
├── blog-single.php                  # Blog post details
│
├── auth/                            # Authentication pages
│   ├── login.php                    # Login page
│   ├── register.php                 # Registration page
│   ├── logout.php                   # Logout handler
│   └── forgot-password.php          # Password recovery
│
├── user/                            # User area pages
│   ├── dashboard.php                # User dashboard
│   ├── profile.php                  # Edit profile
│   ├── wishlist.php                 # User wishlist
│   ├── rental-history.php           # Rental history
│   ├── purchase-history.php         # Purchase history
│   ├── rent-car.php                 # Car rental form
│   └── buy-car.php                  # Car purchase form
│
├── driver/                          # Driver pages
│   ├── register.php                 # Driver registration
│   ├── dashboard.php                # Driver dashboard
│   ├── earnings.php                 # Driver earnings
│   └── trips.php                    # Driver trip history
│
├── admin/                           # Admin pages
│   ├── index.php                    # Admin dashboard
│   ├── cars.php                     # Manage cars
│   ├── users.php                    # Manage users
│   └── rentals.php                  # Manage rentals
│
├── includes/                        # Common PHP includes
│   ├── config.php                   # Database connection & settings
│   ├── functions.php                # Common functions
│   ├── header.php                   # Common header
│   ├── footer.php                   # Common footer
│   ├── navbar.php                   # Navigation bar
│   └── session.php                  # Session management
│
├── database/                        # Database files
│   ├── autolink_db.sql              # Database schema
│   └── sample_data.sql              # Sample data
│
├── uploads/                         # File uploads
│   ├── cars/                        # Car images
│   ├── users/                       # User profile images
│   └── documents/                   # Driver documents
│
├── assets/                          # Frontend assets
│   ├── css/                         # Stylesheets
│   ├── scss/                        # SCSS files
│   ├── js/                          # JavaScript files
│   ├── images/                      # Images
│   └── fonts/                       # Font files
│
└── ajax/                            # AJAX handlers
    ├── add-to-wishlist.php
    ├── search-cars.php
    ├── check-availability.php
    └── update-profile.php
```

## Features

- **Car Rental System**: Browse and rent cars
- **User Management**: Registration, login, profile management
- **Driver Panel**: Driver registration and management
- **Admin Panel**: Administrative functions
- **Responsive Design**: Mobile-friendly interface
- **AJAX Support**: Dynamic interactions

## Installation

1. Clone the repository
2. Set up a web server (Apache/Nginx) with PHP support
3. Create a MySQL database using `database/autolink_db.sql`
4. Update database credentials in `includes/config.php`
5. Optional: Import sample data from `database/sample_data.sql`

## Configuration

Update the following settings in `includes/config.php`:
- Database host, name, username, and password
- Site URL and name
- Upload paths

## Technologies Used

- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Libraries**: jQuery, AOS, Owl Carousel

## Default Admin Credentials

- **Email**: admin@autolink.com
- **Password**: password

## License

This template is based on Colorlib's Carbook template. Please check the license requirements for commercial use.

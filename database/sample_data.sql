-- Sample data for AutoLink Database
USE autolink_db;

-- Sample cars
INSERT INTO cars (make, model, year, price_per_day, description) VALUES
('Toyota', 'Camry', 2022, 45.00, 'Reliable and comfortable sedan perfect for business trips.'),
('Honda', 'Civic', 2021, 40.00, 'Fuel-efficient compact car ideal for city driving.'),
('BMW', 'X5', 2023, 85.00, 'Luxury SUV with premium features and spacious interior.'),
('Mercedes-Benz', 'C-Class', 2022, 75.00, 'Elegant luxury sedan with advanced technology.'),
('Ford', 'Mustang', 2023, 95.00, 'Powerful sports car for an exciting driving experience.'),
('Volkswagen', 'Jetta', 2021, 42.00, 'Comfortable compact car with German engineering.'),
('Audi', 'A4', 2022, 70.00, 'Premium sedan with sophisticated design.'),
('Nissan', 'Altima', 2021, 38.00, 'Spacious and reliable family sedan.'),
('Hyundai', 'Elantra', 2022, 35.00, 'Affordable and efficient compact car.'),
('Chevrolet', 'Malibu', 2021, 43.00, 'Stylish midsize sedan with modern features.');

-- Sample users
INSERT INTO users (name, email, phone, password, address) VALUES
('John Doe', 'john.doe@example.com', '555-0123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '123 Main St, New York, NY 10001'),
('Jane Smith', 'jane.smith@example.com', '555-0124', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '456 Oak Ave, Los Angeles, CA 90210'),
('Mike Johnson', 'mike.johnson@example.com', '555-0125', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '789 Pine St, Chicago, IL 60601'),
('Sarah Wilson', 'sarah.wilson@example.com', '555-0126', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '321 Elm St, Miami, FL 33101'),
('David Brown', 'david.brown@example.com', '555-0127', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '654 Maple Dr, Seattle, WA 98101');

-- Sample drivers
INSERT INTO drivers (name, email, phone, password, license_number, experience_years, status) VALUES
('Robert Driver', 'robert.driver@example.com', '555-0201', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DL123456789', 5, 'approved'),
('Lisa Transport', 'lisa.transport@example.com', '555-0202', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DL987654321', 8, 'approved'),
('James Wheels', 'james.wheels@example.com', '555-0203', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DL456789123', 3, 'pending');

-- Sample bookings
INSERT INTO bookings (user_id, car_id, pickup_date, return_date, pickup_location, return_location, total_amount, status) VALUES
(1, 1, '2024-02-15', '2024-02-18', 'Airport Terminal 1', 'Downtown Hotel', 135.00, 'completed'),
(2, 3, '2024-02-20', '2024-02-25', 'City Center', 'Shopping Mall', 425.00, 'active'),
(3, 2, '2024-02-22', '2024-02-24', 'Train Station', 'Business District', 80.00, 'confirmed');

-- Sample wishlist items
INSERT INTO wishlist (user_id, car_id) VALUES
(1, 3),
(1, 5),
(2, 1),
(2, 4),
(3, 2);
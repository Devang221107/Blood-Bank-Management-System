-- Create Database
CREATE DATABASE IF NOT EXISTS blood_bank_management_system;
USE blood_bank_management_system;

-- Users Table (for donors, admins, and recipients)
CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(100),
    contact_number VARCHAR(15),
    user_role ENUM('admin', 'donor', 'recipient') DEFAULT 'donor',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Blood Donations Table
CREATE TABLE blood_donations (
    donation_id INT AUTO_INCREMENT PRIMARY KEY,
    donor_name VARCHAR(100),
    age INT,
    blood_group VARCHAR(10),
    contact_number VARCHAR(15),
    donation_date DATE
);



-- Blood Requests Table (for recipients)
CREATE TABLE IF NOT EXISTS blood_requests (
    request_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    blood_type ENUM('A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-') NOT NULL,
    quantity DECIMAL(5, 2) NOT NULL, -- in liters
    request_date DATE NOT NULL,
    status ENUM('pending', 'fulfilled', 'cancelled') DEFAULT 'pending',
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

-- Contact Messages Table (for contact form submissions)
CREATE TABLE IF NOT EXISTS contact_messages (
    message_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT, 
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

-- Services Table (for different services offered by the blood bank)
CREATE TABLE IF NOT EXISTS services (
    service_id INT AUTO_INCREMENT PRIMARY KEY,
    service_name VARCHAR(255) NOT NULL,
    service_description TEXT,
    service_status ENUM('active', 'inactive') DEFAULT 'active'
);

-- Donation History Table (to track user's donation history)
CREATE TABLE IF NOT EXISTS donation_history (
    history_id INT AUTO_INCREMENT PRIMARY KEY,
    donor_user_id INT,
    donation_id INT,
    donation_date DATE,
    FOREIGN KEY (donor_user_id) REFERENCES users(user_id),
    FOREIGN KEY (donation_id) REFERENCES blood_donations(donation_id)
);

-- Example Insert Data
-- Inserting a user (donor)
INSERT INTO users (username, email, password, full_name, contact_number, user_role)
VALUES ('Devang', 'chavdadevang07@gmail.com', 'Devang@2012', 'Devang', '+917069207607', 'donor');

-- Inserting a blood donation
INSERT INTO blood_donations (donor_id, blood_type, donation_date, quantity)
VALUES (1, 'O+', '2025-04-29', 0.5);

-- Inserting a blood request
INSERT INTO blood_requests (user_id, blood_type, quantity, request_date)
VALUES (2, 'A+', 1.0, '2025-04-29');

-- Inserting a service
INSERT INTO services (service_name, service_description, service_status)
VALUES ('Blood Donation', 'Donate blood and save lives', 'active');

-- Inserting a contact message
INSERT INTO contact_messages (user_id, message)
VALUES (1, 'I would like to inquire about blood donation programs.');

-- Example Query to Fulfill a Blood Request
UPDATE blood_requests 
SET status = 'fulfilled' 
WHERE request_id = 1;

-- Optional: Insert donation fulfillment data into donation history
INSERT INTO donation_history (donor_user_id, donation_id, donation_date)
VALUES (1, 1, '2025-04-29');

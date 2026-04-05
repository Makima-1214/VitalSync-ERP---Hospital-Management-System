-- Roles & Users (Requirement E: RBAC)
CREATE TABLE roles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) UNIQUE NOT NULL -- 'Admin', 'Dokter', 'Perawat', 'Apoteker', 'Kasir'
);

CREATE TABLE users (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role_id INT,
    full_name VARCHAR(255),
    FOREIGN KEY (role_id) REFERENCES roles(id)
);

-- Core Patients Table
CREATE TABLE patients (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    nik VARCHAR(16) UNIQUE NOT NULL,
    medical_record_number VARCHAR(20) UNIQUE NOT NULL,
    name VARCHAR(255) NOT NULL,
    date_of_birth DATE NOT NULL,
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Queue System (Requirement A)
CREATE TABLE queues (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    patient_id BIGINT NOT NULL,
    doctor_id BIGINT NOT NULL,
    queue_number INT NOT NULL,
    status ENUM('waiting', 'calling', 'finished', 'cancelled') DEFAULT 'waiting',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (patient_id) REFERENCES patients(id),
    FOREIGN KEY (doctor_id) REFERENCES users(id)
);

-- EMR / Clinical Records (CPPT)
CREATE TABLE medical_records (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    patient_id BIGINT NOT NULL,
    doctor_id BIGINT NOT NULL,
    subjective TEXT, -- Symptoms
    objective TEXT, -- Physical Exam
    assessment TEXT, -- Diagnosis
    plan TEXT, -- Treatment Plan
    icd10_code VARCHAR(10),
    vitals_json JSON, -- {temp: 36.5, blood_pressure: "120/80"}
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (patient_id) REFERENCES patients(id)
    FOREIGN KEY (doctor_id) REFERENCES users(id)
);

-- Inventory (Requirement D)
CREATE TABLE medicines (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    stock INT NOT NULL DEFAULT 0,
    price DECIMAL(15, 2) NOT NULL,
    critical_limit INT DEFAULT 10
);

-- Pharmacy / E-Prescribing
CREATE TABLE prescriptions (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    medical_record_id BIGINT NOT NULL,
    medicine_details JSON, -- [{item_id: 1, qty: 10, dose: "3x1"}]
    status ENUM('pending', 'prepared', 'dispensed') DEFAULT 'pending',
    FOREIGN KEY (medical_record_id) REFERENCES medical_records(id)
);

-- Bed Management (Requirement C)
CREATE TABLE rooms (
    id INT PRIMARY KEY AUTO_INCREMENT,
    room_name VARCHAR(50) NOT NULL,
    class ENUM('VIP', '1', '2', '3') NOT NULL
);

CREATE TABLE beds (
    id INT PRIMARY KEY AUTO_INCREMENT,
    room_id INT,
    bed_number VARCHAR(10),
    status ENUM('available', 'occupied', 'cleaning') DEFAULT 'available',
    daily_rate DECIMAL(15, 2),
    FOREIGN KEY (room_id) REFERENCES rooms(id)
);

-- Lab System (Requirement C)
CREATE TABLE lab_orders (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    medical_record_id BIGINT,
    test_name VARCHAR(255),
    result_file_path VARCHAR(255),
    status ENUM('pending', 'completed') DEFAULT 'pending',
    cost DECIMAL(15, 2),
    FOREIGN KEY (medical_record_id) REFERENCES medical_records(id)
);

-- Billing System
CREATE TABLE invoices (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    patient_id BIGINT NOT NULL,
    medical_record_id BIGINT,
    total_amount DECIMAL(15, 2) DEFAULT 0.00,
    status ENUM('unpaid', 'paid', 'cancelled') DEFAULT 'unpaid',
    FOREIGN KEY (patient_id) REFERENCES patients(id),
    FOREIGN KEY (medical_record_id) REFERENCES medical_records(id)
);

-- Audit Logs (Requirement E)
CREATE TABLE audit_logs (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    user_id BIGINT NOT NULL,
    action VARCHAR(255),
    table_name VARCHAR(50),
    old_values JSON,
    new_values JSON,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
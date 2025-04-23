CREATE TABLE `tbl_laboratory_results` (
    `lab_id` VARCHAR(255) NOT NULL PRIMARY KEY,
    `patient_id` VARCHAR(255) NOT NULL,
    `test_date` DATE NOT NULL,
    `test_name` VARCHAR(255) NOT NULL,
    `result` VARCHAR(255) NOT NULL,
    `unit` VARCHAR(50) NOT NULL,
    `normal_value` VARCHAR(255) NOT NULL,
    `doctor` VARCHAR(255) NOT NULL,
    `hospital` VARCHAR(255) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `date_time_entry` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

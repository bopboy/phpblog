<?php

namespace App;

/* CREATE TABLE users (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `email` VARCHAR(255) UNIQUE NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
); */

class User {
    public function get($name) {
        if ( property_exists($this, $name) ) {
            return $this->{$name};
        }
    }

    public function getUsername() {
        return current(explode('@', $this->get('email')));
    }
}


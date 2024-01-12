<?php

namespace App;

use Onedb\Database\Adaptor;

/* CREATE TABLE posts (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT DEFAULT NULL,
    `title` VARCHAR(255),
    `content` TEXT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    FOREIGN KEY(`user_id`) REFERENCES users(`id`)
); */


class Post {
    public function get($name) {
        if ( property_exists($this, $name) ) {
            return $this->{$name};
        }
    }

    public function user() {
        return current(Adaptor::getAll('SELECT * FROM users WHERE id = ?', [$this->get('user_id')], \App\User::class));
    }
    public function getCreatedAt() {
        return date('h:i A, M j', strtotime($this->get('created_at')));
    }
    public function getUsername() {
        return $this->user()->getUsername();
    }
    public function getSummary() {
        return filter_var(mb_substr(strip_tags($this->get('content')),0, 200), FILTER_SANITIZE_SPECIAL_CHARS);
    }
}
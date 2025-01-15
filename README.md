XIRACOM LIMITED WEB PORTFOLIO

This repository contains a Laravel-based e-commerce application.
Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.
Prerequisites

Make sure you have the following installed:

    PHP
    Composer
    Node.js and npm

Installation
Clone the repository:

git clone https://github.com/Bennavi-Softsolution/Xiracom-web.git
cd e-comm

Install Laravel dependencies:

composer install

Copy .env.example to .env and generate the application key:

cp .env.example .env
php artisan key:generate

Install JavaScript dependencies:

npm install

Development

To start the development server:

    Compile assets and start Laravel:

    php artisan serve

Compile assets with Vite:

npm run dev
# User Profile Project

A user profile management system built with Laravel 11, Inertia.js, Vue.js, and Tailwind CSS. This application allows users to create, update, and manage their profiles with a modern, responsive interface.

## Table of Contents

-   [Features](#features)
-   [Requirements](#requirements)
-   [Installation](#installation)
-   [Running the Project](#running-the-project)
-   [Project Structure](#project-structure)
-   [Contributing](#contributing)
-   [License](#license)

## Features

-   User Registration and Login
-   Verify E-Mail After Register
-   Responsive design with Tailwind CSS
-   Seamless server-side rendering with Inertia.js
-   Dynamic front-end components built with Vue.js

## Requirements

Before you begin, ensure you have met the following requirements:

-   **PHP**: >= 8.0
-   **Composer**: >= 2.0
-   **Node.js**: >= 14.0
-   **NPM**: >= 6.0
-   **Database**: MySQL or SQLite

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/andripurnama/user-profile.git
    cd user-profile
    ```

2. **Install PHP dependencies:**

    ```bash
    composer install
    ```

3. **Install Node.js dependencies:**

    ```bash
    npm install
    ```

4. **Copy the example environment file and configure the environment variables:**

    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database credentials and other configurations.

5. **Generate an application key:**

    ```bash
    php artisan key:generate
    ```

6. **Run database migrations:**
    ```bash
    php artisan migrate
    ```

## Running the Project

1. **Compile the front-end assets:**

    ```bash
    npm run dev
    ```

2. **Start the Laravel development server:**

    ```bash
    php artisan serve
    ```

3. **Access the application:**
   Open your browser and navigate to `http://localhost:8000`.

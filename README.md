# Project Setup Guide

This guide provides instructions on how to set up the project environment and run it locally.

## Requirements

Ensure you have the following software installed:

- PHP version ^8.1
- Composer
- Git
- Node.js

## Setup Instructions

Follow these steps to set up the project in your local environment:

1. Clone the repository:

   ```bash
   git clone https://github.com/SaiZack/HotelBookingSystem.git
   ```

2. Navigate to the project folder:

   ```bash
   cd HotelBookingSystem
   ```

3. Copy the `.env.example` file and rename it to `.env`:

   ```bash
   cp .env.example .env
   ```

4. Open the `.env` file and update the following variables to connect to your local database:

   ```dotenv
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```

5. Install PHP dependencies using Composer:

   ```bash
   composer install
   ```

6. Generate an application key:

   ```bash
   php artisan key:generate
   ```

7. Create a symbolic link from the `public/storage` directory to the `storage/app/public` directory:

   ```bash
   php artisan storage:link
   ```

8. Run database migrations and seed the database:

   ```bash
   php artisan migrate:fresh --seed
   ```

9. Install Node.js dependencies:

   ```bash
   npm install
   ```

10. Compile assets:

    ```bash
    npm run dev
    ```

## Running the Application

Once the setup is complete, open a web browser and navigate to either of the following URLs:

- [http://localhost:8000](http://localhost:8000)
- [http://127.0.0.1:8000](http://127.0.0.1:8000)

Make sure to replace placeholders like `yourusername`, `yourproject`, `your_database_name`, `your_database_username`, and `your_database_password` with your actual project details.

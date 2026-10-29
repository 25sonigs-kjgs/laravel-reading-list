# Reading List App

A simple Laravel application to manage my reading list.

## Features
- View all books
- Add new books
- Edit book details
- Delete books with confirmation
- Filter books by reading status
- Validate book details

## Technologies Used
- PHP
- Laravel
- SQLite
- Blade

## Setup Instructions

1. Install PHP, Composer, and Laravel.
2. Clone the repository.
3. Install dependencies:

   ```bash
   composer install
   ```

4. Create the `.env` file from `.env.example`.
5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Configure SQLite in `.env` and create `database/database.sqlite`.
7. Run migrations:

   ```bash
   php artisan migrate
   ```

8. Start the server:

   ```bash
   php artisan serve
   ```

9. Open http://127.0.0.1:8000/books in your browser.

## AI Usage

ChatGPT was used to understand Laravel commands, CRUD operations, routing, database migrations, validation, and README documentation.
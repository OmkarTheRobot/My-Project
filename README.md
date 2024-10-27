# Blog Management System

## Setup Instructions
1. Clone the repository.
2. Run `composer install` to install dependencies.
3. Set up the `.env` file with database credentials.
4. Run `php artisan migrate --seed` to set up the database.
5. Start the development server using `php artisan serve`.

## Features
- Public blog with post listings, pagination, and search.
- Admin panel for creating, editing, deleting posts, categories, and tags.
- User authentication for accessing admin features.
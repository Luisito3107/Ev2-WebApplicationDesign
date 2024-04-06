# Library Management System

A basic library management system developed using Laravel, as Evidence #2 for the Web Application Design course at Tecmilenio. This project focuses on CRUD operations for managing books, utilizing Laravel's Eloquent ORM for database interactions.

## Features
- List all books
- Add new books
- Update existing book details
- Delete books

## Setup Instructions

### Prerequisites

- PHP >= 8.1
- Composer
- MySQL database system

### Installation

1. Clone the repository:\
    `git clone https://yourrepositoryurl.git`

2. Navigate to the project directory:\
    `cd library-management-system`

3. Install dependencies using Composer:\
	`composer install`

4. Create a copy of `.env.example` and rename it to `.env`. Adjust database settings within the `.env` file according to your local environment.

5. Generate an application key:\
	`php artisan key:generate`

6. Run migrations to create the database schema:\
	`php artisan migrate`

7. Start the local development server:\
	`php artisan serve`

8. The application will be available at `http://localhost:80`.

## Usage

- **View Books**: Navigate to `http://localhost:00` to see a list of all books.
- **Add a Book**: Click on the "Create new book" button and fill in the book details in the form.
- **Edit a Book**: From the list of books, click on the "Edit" button next to the book you wish to update.
- **Delete a Book**: Click on the "Delete" button next to the book you wish to remove.

## Testing

Manual testing can be conducted by navigating through the application's routes and performing CRUD operations. Ensure all form inputs and route actions function as expected.

## Contributing

Contributions are welcome. Please open an issue first to discuss what you would like to change or improve.

## Acknowledgments

- Laravel Documentation
- Composer
- The Laravel and PHP community
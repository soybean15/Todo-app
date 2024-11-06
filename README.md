# Simple Todo App

A Simple todo list application

## Installation

Follow these steps to set up the project locally:

1. **Clone the repository**

   ```bash
   git clone https://github.com/soybean15/Todo-app.git
   ```

2. **Create the `.env` file**

   - Copy the `.env.example` file and rename it to `.env`.
   - Update the environment variables in `.env` as needed.

   ```bash
   cp .env.example .env
   ```

3. **Install PHP dependencies**

   Run the following command to install PHP dependencies:

   ```bash
   composer install
   ```

4. **Install JavaScript dependencies**

   Run the following command to install JavaScript dependencies:

   ```bash
   npm install
   ```

5. **Generate an application key**

   Generate the application key for Laravel:

   ```bash
   php artisan key:generate
   ```

6. **Run Migrations**

   Run database migrations to set up your database tables:

   ```bash
   php artisan migrate
   ```

7. **Start the development server**

   To run the application locally, use:

   ```bash
   php artisan serve
   npm run dev
   ```

Visit the app at [http://localhost:8000](http://localhost:8000) after starting the server.

## Additional Notes

- **Vue + Inertia**: This project uses Vue.js with Inertia.js for rendering front-end components.


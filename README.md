# Social Username Generator Backend

This is the backend of the Social Username Generator project. It consists of a web panel and an API for a Flutter app that generates social usernames.

## Features

- Admin login/logout functionality.
- CRUD operations for custom HTML ads.
- Settings management for API secrets and third-party social API authentication information.
- Admin password change functionality.

## Built With

- PHP
- [Composer](https://getcomposer.org/) - Dependency management
- [Bootstrap](https://getbootstrap.com/) - Frontend framework

## Folder Structure

- `/admin`: Contains the admin panel files and assets.
  - `assets`: Contains static files like CSS, JavaScript, and images.
  - `pages`: Contains individual pages of the admin panel.
  - `includes`: Contains reusable PHP code or templates.
  - `views`: Contains view templates for the admin panel.
  - `index.php`: Main entry point for the admin panel.
- `/core`: Contains core files for connecting to the database and performing migrations.
- `/api`: Contains files related to the API for the Flutter app.
- `/errors`: Contains custom error pages.
- `/vendor`: Contains Composer dependencies.
- `.env`: Environment configuration file.
- `composer.json`: Composer dependency definitions.
- `bootstrap.php`: Bootstrap file for setting up the project.

## Getting Started

1. Clone the repository to your local machine.
2. Set up your environment configuration in the `.env` file.
3. Install dependencies using Composer.
4. Set up your database and run migrations.

## Installation

1. Clone the repository:

``bash
git clone https://github.com/username/social_username_generator_backend.git
``

2. Set up the environment configuration:

   Create a `.env` file based on the provided `.env.example` file and fill in your environment-specific information.

3. Install dependencies:

``bash
composer install
``

4. Set up the database:

   Create a database and configure the database connection in the `.env` file.

   Run migrations to set up the database schema:

```bash
php core/migrate.php
```

5. Seed the database with initial data:

``bash
php core/seed.php
``

6. Start the server:

   Use your preferred local server to run the application.

## Usage

- Access the admin panel by navigating to the `/admin` directory.
- Log in with your admin credentials.
- Manage ads, settings, and change your password as needed.

## Contributing

Feel free to open issues or pull requests for any improvements or bug fixes.

## License

This project is licensed under the [MIT License](LICENSE).

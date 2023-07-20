# Laravel BoolPress

Laravel BoolPress is a simple blogging platform built with Laravel. It allows users to create, update, and delete blog posts, as well as manage categories and tags associated with each post.

## Installation

1. Clone the repository:

```bash
git clone https://github.com/tahakyo/laravel-boolpress.git
```

2. Install the dependencies:

```bash
composer install
```

3. Create a copy of the `.env.example` file and rename it as `.env`. Update the necessary configuration values such as database credentials.

4. Generate an application key:

```bash
php artisan key:generate
```

5. Run the migrations and seed the database:

```bash
php artisan migrate --seed
```

6. Start the development server:

```bash
php artisan serve
```

## Features

- User authentication: Register, login, and logout functionality.
- Blog posts: Create, update, and delete blog posts with rich text editor support.
- Categories: Manage categories associated with each blog post.
- Tags: Add tags to categorize blog posts.
- Search functionality: Search for blog posts based on keywords.
- Commenting: Users can leave comments on blog posts.
- Pagination: Display blog posts in paginated views.

## Contributing

Contributions are welcome! If you find any issues or have suggestions, please feel free to open an issue or create a pull request.

## License

This project is open-source and available under the [MIT License](LICENSE).

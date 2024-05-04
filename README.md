# Laravel Broadcasting Sample

This project is a sample implementation of Laravel events and notification broadcasting using Laravel WebSockets.

## Technologies

- [Livewire](https://livewire.laravel.com/)
- [Laravel WebSockets](https://beyondco.de/docs/laravel-websockets/getting-started/introduction)
- [DaisyUI](https://daisyui.com/)

## Installation

To install and set up the project, follow these steps:

1. Clone the repository.
2. Run `composer install && bun install` to install dependencies.
3. Setup the `.env` file and database configurations.
4. Run database migrations `php artisan migrate`
5. Run `bun run buid` to build assets.
6. Start laravel server `php artisan serve`
7. Start websocket server `php artisan websocket:serve`

## Usage

To use the project,

1. Create new user from `Users (/users)` page.
2. Check notifications and real-time updates in `root (/)` page.
3. The notification count and notification list updates when new user created.
   
## License

This project is licensed under the [MIT License](LICENSE). Feel free to use, modify, and distribute this project as needed.


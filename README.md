[![Laravel Forge Site Deployment Status](https://img.shields.io/endpoint?url=https%3A%2F%2Fforge.laravel.com%2Fsite-badges%2F853f706f-237e-49ce-9812-7d452d57c0bb%3Fdate%3D1%26commit%3D1&style=for-the-badge)](https://forge.laravel.com/servers/651685/sites/1880632)

# Nicesweeps Arcade

NiceSweeps Arcade is a Bitcoin-powered online arcade interface.

## Installation

Clone the repository:

```bash
git clone git@github.com:benjamincrozat/nicesweeps-arcade.git
```

Go into the newly created folder:

```bash
cd nicesweep-arcade
```

Create a `.env` file from the example:

```bash
cp .env.example .env
```

Install the backend dependencies:

```bash
composer install
```

Create the database:

```bash
mysql -u root -e "CREATE DATABASE nicesweeps_arcade"
```

Run the migrations and seed the fake data:

```bash
php artisan migrate --seed
```

Install the frontend dependencies:

```bash
npm install
```

Build the frontend assets:

```bash
npm run dev
```

## Testing

Run the tests:

```bash
php artisan test
```

Run the tests in parallel:

```bash
php artisan test --parallel
```

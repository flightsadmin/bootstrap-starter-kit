<p align="center"><a href="https://github.com/flightsadmin/bootstrap-starter-kit" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/flightsadmin/bootstrap-starter-kit/actions"><img src="https://img.shields.io/github/actions/workflow/status/flightsadmin/bootstrap-starter-kit/release.yml?branch=main" alt="Build Status"></a>
<a href="https://github.com/flightsadmin/bootstrap-starter-kit/releases"><img src="https://img.shields.io/github/v/release/flightsadmin/bootstrap-starter-kit" alt="Latest Release"></a>
<a href="https://github.com/flightsadmin/bootstrap-starter-kit/stargazers"><img src="https://img.shields.io/github/stars/flightsadmin/bootstrap-starter-kit" alt="Stars"></a>
<a href="https://github.com/flightsadmin/bootstrap-starter-kit/blob/main/LICENSE"><img src="https://img.shields.io/github/license/flightsadmin/bootstrap-starter-kit" alt="License"></a>
</p>

# Bootstrap Starter Kit for Laravel

A modern Laravel starter kit featuring a clean Bootstrap 5 design, Livewire, and essential authentication workflows.

## Features

- 🎨 Modern Bootstrap 5 Design
- ⚡ Powered by Laravel Livewire
- 🔒 Complete Authentication System
  - Login & Registration
  - Password Reset
  - Email Verification
  - Profile Management
- 🎯 User Settings
  - Profile Information
  - Password Management
  - Appearance Settings
- 📱 Responsive Layout
- 🔍 Clean & Maintainable Code

## Prerequisites

- PHP >= 8.3
- Composer
- Node.js & NPM

## Installation

1. Using Laravel Installer:
    ```bash
    laravel new bootstrap-starter-kit --using=flightsadmin/bootstrap-starter-kit
    cd bootstrap-starter-kit
    ```

2. Using Composer:
    ```bash
    composer create-project flightsadmin/bootstrap-starter-kit
    cd bootstrap-starter-kit
    ```

3. Using Git

    - Clone the repository:
        ```bash
        git clone https://github.com/flighsadmin/bootstrap-starter-kit.git
        cd bootstrap-starter-kit
        ```

    - Run the automated setup script to install dependencies, set up your .env, run migrations/seeders, and build frontend assets:
        ```bash
        composer run setup
        ```

    - Start the development server:
        ```bash
        php artisan serve
        ```

## Usage

### Authentication

- `/register` - Create a new account
- `/login` - Sign in to existing account
- `/forgot-password` - Reset forgotten password
- `/email/verify` - Verify email address

### Dashboard

- `/dashboard` - Main dashboard with statistics
- `/settings/profile` - Update profile information
- `/settings/password` - Change password
- `/settings/appearance` - Customize appearance

## Contributing

1. Fork the repository
2. Create a new branch
3. Make your changes
4. Submit a pull request

## License

This starter kit is open-sourced software licensed under the MIT license.

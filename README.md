<p align="center"><a href="https://livewire.laravel.com" target="_blank"><img src="https://livewire.laravel.com/img/logo.svg" width="400" alt="Livewire Logo"></a></p>

# Digital Agency Website

## Project Overview
The **Digital Agency Website** is a web application built using **Laravel** and **Livewire**. It provides an interactive and dynamic platform to showcase agency services, projects, testimonials, and more. The admin dashboard is also powered by **Livewire**, enabling CRUD operations.

## Features
- **Introductory Section**: Displays information about the agency.
- **Services**: List of services provided by the agency.
- **Projects**: Showcase portfolio projects with image uploads.
- **Contact Us**: Allows users to send messages to the agency.
- **Testimonials**: Displays client feedback.
- **Subscribers**: Users can subscribe to newsletters.
- **Dashboard Modules (Admin Panel using Livewire)**:
  - Authentication (Login Dahboard using Livewire)
  - Settings Management
  - Skills Management
  - Subscribers Management
  - Counters Management
  - Services Management
  - Messages Management
  - Categories Management
  - Projects (with Image Uploads)
  - Newsletters Management

## Installation

### Prerequisites
Ensure you have the following installed on your machine:
- PHP (>= 8.2)
- Composer
- MySQL
- Laravel (latest version)
- Node.js & NPM

### Setup Instructions
1. **Clone the repository:**
   ```sh
   git clone https://github.com/youssefreda4/digital-agency.git
   cd digital-agency
   ```

2. **Install dependencies:**
   ```sh
   composer install
   npm install && npm run dev
   ```

3. **Setup environment file:**
   ```sh
   cp .env.example .env
   ```
   Update database configurations in the `.env` file.

4. **Generate application key:**
   ```sh
   php artisan key:generate
   ```

5. **Run migrations and seed the database:**
   ```sh
   php artisan migrate --seed
   ```

6. **Install Livewire:**
   ```sh
   composer require livewire/livewire
   ```

7. **Start the development server:**
   ```sh
   php artisan serve
   ```

## Usage
- Visit `http://127.0.0.1:8000` to access the website.
- Login as an admin to manage settings, services, projects, and more.
- Subscribers can sign up to receive newsletters.

## Livewire Components
The following modules use **Livewire** for real-time interactivity and CRUD operations:
- **Authentication**: Login & Register using Livewire.
- **Settings Module**: Manage website settings.
- **Skills Module**: Add, update, and delete skills.
- **Subscribers Module**: Manage subscribers.
- **Counters Module**: Manage statistical counters.
- **Services Module**: CRUD operations for services.
- **Messages Module**: View and manage contact messages.
- **Categories Module**: Manage categories for projects.
- **Projects Module**: Upload and manage projects with images.
- **Newsletters Module**: Send newsletters to subscribers.

## Contact
- **GitHub**: [youssefreda4](https://github.com/youssefreda4/digital-agency.git)
- **Email**: youssefreda2003@gmail.com
- **LinkedIn**: [Youssef Reda](https://www.linkedin.com/in/youssef-reda-5696b8300)



## CRM System

This CRM (Customer Relationship Management) system, built with Laravel, empowers businesses of all sizes to manage and streamline their customer interactions. It offers a user-friendly interface and leverages the following technologies:
<br>
[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/)
[![Livewire](https://img.shields.io/badge/Livewire-3FB27F?style=for-the-badge&logo=livewire&logoColor=white)](https://laravel-livewire.com/)
[![Alpine.js](https://img.shields.io/badge/Alpine.js-8BC0D0?style=for-the-badge&logo=alpine.js&logoColor=white)](https://alpinejs.dev/)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com/)
[![Chart.js](https://img.shields.io/badge/Chart.js-FF6384?style=for-the-badge&logo=chart-dot-js&logoColor=white)](https://www.chartjs.org/)


* **Laravel:** A robust PHP framework providing a solid foundation for building web applications.
* **Livewire:** A Laravel framework component facilitating interactive UIs without full page reloads.
* **Chart.js:** A popular JavaScript library for creating various types of visual charts and graphs to present data effectively.
* **Alpine.js:** A lightweight JavaScript framework enabling reactive and interactive UI elements without complex frameworks.
* **Tailwind CSS:** A utility-first CSS framework providing a comprehensive set of pre-built classes for rapid UI development.

**Table of Contents**

* Introduction: #introduction
* Features: #features
* Installation: #installation
* Usage: #usage
* Contributing: #contributing
* License: #license

## Introduction

The CRM System helps you:

* Manage customer information, including adding, editing, and deleting customer records.
* Track sales activities from leads and opportunities to closed deals.
* Generate reports for comprehensive performance analysis based on sales metrics and customer interactions.
* Securely control access and permissions through a user authentication system.

## Features

* **Comprehensive Customer Management:**
    * Create, edit, and delete detailed customer records.
    * Track interaction history for better understanding of customer behavior.

* **Secure User Authentication:**
    * Manage user accounts with different roles and permissions.
    * Maintain user credentials securely using Laravel's authentication features.
    * Control access to specific functionalities based on user roles.

## Desktop View
<div style="display:flex; justify-content: space-around;">
    <img src="https://github.com/kashif0313/crm/assets/65242138/cd147756-545a-419c-80eb-7c081df3a5ae" alt="First Image" width="500"/>
    <img src="https://github.com/kashif0313/crm/assets/65242138/0fd55e0a-55d6-49d4-8cc7-621b81642248" alt="Second Image" width="500"/>
     <img src="https://github.com/kashif0313/crm/assets/65242138/48754137-ca85-4640-ad68-ede875e3be11" alt="First Image" width="500"/>
    <img src="https://github.com/kashif0313/crm/assets/65242138/5755830f-9cfd-42ed-893b-f90a45c12c55" alt="Second Image" width="500"/>
     <img src="https://github.com/kashif0313/crm/assets/65242138/3935051a-e10f-4247-935c-546f0d2f7209" alt="Second Image" width="500"/>
    <img src="https://github.com/kashif0313/crm/assets/65242138/a4583a6d-d8af-4755-afeb-e7747c958a55" alt="Second Image" width="500"/>
    <img src="https://github.com/kashif0313/crm/assets/65242138/ce17d2be-de66-4f4d-8afa-ca996a446004" alt="Second Image" width="500"/>
    <img src="https://github.com/kashif0313/crm/assets/65242138/1af9149a-aa46-421e-bbdf-d8c418f046ad" alt="Second Image" width="500"/>
</div>

## Mobile View
<div style="display:flex; justify-content: space-around;">
    <img src="https://github.com/kashif0313/crm/assets/65242138/c9b55abe-4d5e-469a-b998-310aa404ea20" alt="First Image" height="400"/>
    <img src="https://github.com/kashif0313/crm/assets/65242138/5e647a99-f6b6-49d6-82f8-0eac02b8e33f" alt="First Image" height="400"/>
    <img src="https://github.com/kashif0313/crm/assets/65242138/e2add873-9634-480b-9155-84bb07053682" alt="First Image" height="400"/>
    <img src="https://github.com/kashif0313/crm/assets/65242138/30082cef-e462-448d-98d4-19fd4c2e7563" alt="First Image" height="400"/>
    <img src="https://github.com/kashif0313/crm/assets/65242138/9dd03117-b182-4599-9db1-0287f0b97bdc" alt="First Image" height="400"/>
    <img src="https://github.com/kashif0313/crm/assets/65242138/f2c6209b-a1b7-406f-b7f1-0e45f47da842" alt="First Image" height="400"/>
    <img src="https://github.com/kashif0313/crm/assets/65242138/a5d24a20-b719-4420-9d8c-450b1e054afe" alt="First Image" height="400"/>
    <img src="https://github.com/kashif0313/crm/assets/65242138/9dbb1d2e-9f3f-4ac7-8af4-b1bca8c0809b" alt="First Image" height="400"/>
</div>

## Installation

**Prerequisites:**

* PHP 8.0+
* Composer

**Steps:**

1. **Clone the repository:**

   ```bash
   git clone https://github.com/kashif0313/crm.git
   ```

2. **Navigate to the project directory:**

   ```bash
   cd crm
   ```

3. **Install dependencies:**

   ```bash
   composer install
   ```

4. **Configure environment:**

   * Copy `.env.example` to `.env` and update your database and other application settings.
   * Generate an application key:

     ```bash
     php artisan key:generate
     ```

5. **Run database migrations:**

   ```bash
   php artisan migrate
   ```

6. **Start the development server:**

   ```bash
   php artisan serve
   ```

7. **Access the application:**

   Open http://localhost:8000 in your web browser.

## Usage

Once installed, log in using the default credentials (modify these for production):

* Email: admin@example.com
* Password: asdasd

Explore the system and its features to manage your customer relationships effectively.

## Contributing

We welcome contributions! Please follow these steps:

1. Fork the repository.
2. Create a new branch for your changes.
3. Make your changes and commit them with clear, descriptive messages.
4. Push your changes to your branch.
5. Create a pull request.

Please refer to the contribution guidelines ([https://docs.github.com/articles/setting-guidelines-for-repository-contributors](https://docs.github.com/articles/setting-guidelines-for-repository-contributors)) for more details.

## License

This project is open-source and licensed under the MIT License ([https://opensource.org/license/mit](https://opensource.org/license/mit)).

**Additional Notes:**

* Feel free to modify or extend this README file as needed.
* Provide clear explanations and examples for each technology used.
* Consider including screenshots or a short demo video to showcase the system's functionality.
* Address potential issues raised in the ratings and provide clear explanations for any choices made.
* Maintain a friendly and welcoming tone for the contributing guidelines.

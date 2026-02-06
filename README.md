# Monash Health Radiology – Student Case Study Platform

This project is a full-stack web application built in collaboration with Monash Health Radiology to support the creation, management, and study of radiology case material for radiology students.

This project was requested by Dr Beng Tan, who wished for an overhaul of an existing but poorly designed system. This project was awarded the Student Choice Award for Best Website and Most Visited Project at Monash University.

## Overview

The application allows users to browse, search, and save radiology cases, while contributors and administrators can manage content through a structured case lifecycle. A strong emphasis was placed on user experience, performance, and safety.

Key system requirements included significantly reducing the time required to create new cases and improving how quickly users could locate relevant cases from the home page.

## Impact and Outcomes

- Reduced case creation time by approximately 70% through improved UI and validation
- Reduced case discovery time by approximately 85% via optimized search and filtering
- Awarded Student Choice Award – Best Website and Most Visited Project\*\*

## Technical Stack

- **Backend:** CakePHP
- **Database:** MySQL
- **Frontend:** HTML, CSS, Bootstrap
- **Authentication:** CakePHP Authentication Plugin

The system follows a traditional MVC architecture with server-rendered views and controller-level authorization.

## Prerequisites

To run this project locally, ensure the following are installed on your system:

- **PHP 8.1**
- **Composer**
- **Apache / Nginx** or a local stack such as XAMPP

## Installation

1. Clone the repo

   ```sh
   git clone https://github.com/nohh-a/MonashHealth-Radiology-Student-Study-Site.git
   ```

2. Navigate into the project directory

   ```sh
   cd MonashHealth-Radiology-Student-Study-Site
   ```

3. Install PHP dependencies

   ```sh
   composer install
   ```

4. Set up the database
   - Create a MySQL database
   - Import the provided SQL schema or run migrations if available

5. Configure environment variables
   - Change app_local.php to connect to database
   - Change default datasource username, password and database to new database
   - (Optional) Enable Demo Mode

   ```php
   Configure::write('DemoMode', true);
   ```

6. Start the local development server

   ```sh
   bin/cake server
   ```

7. Open the application in your browser
   ```
   http://localhost:8765
   ```

## Demo Mode

The project includes a Demo Mode intended for public demonstration and portfolio use.

When enabled:

- The application automatically logs in as a predefined admin user
- User creation, editing, deletion, and password changes are disabled
- Case deletion and bulk delete actions are blocked
- All restrictions are enforced server-side to prevent bypassing via direct URLs

## Author

Noah Rodriguez

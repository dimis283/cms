# Dopefolio Dynamic Website

A dynamic chess club website built with Laravel, based on the Dopefolio template. This application displays  content managed through a separate CMS backend system.

## Overview

This frontend application provides:
- Dynamic content for a chess club
- Responsive design based on Dopefolio template
- Content fetched from CMS backend


## Features

- **Dynamic Content**: content loaded from CMS backend
- **Responsive Design**: Mobile-friendly Dopefolio template
- **Laravel Framework**: Built with Laravel for robust performance


## Backend Integration

This website gets its content from a separate CMS backend:
- **Backend Repository**: [CMS Backend](https://github.com/dimis283/demo) - The admin panel  that manages  content

## Architecture

- **Frontend**: This repository (Laravel + Dopefolio template)
- **Backend**: [CMS Repository](https://github.com/dimis283/demo) - Content management 
- **Database**: SQLite database managed by the CMS backend,the file is at [CMS Repository](https://github.com/dimis283/demo) 

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/dimis283/cms.git
   cd cms
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install
   ```

3. Copy environment file:
   ```bash
   cp .env.example .env
   ```

4. Configure environment (.env):
   ```
   APP_NAME="Demo site"
   APP_URL=http://localhost:8000
   
  

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Compile assets:
   ```bash
   npm run dev
   ```

7. Start the development server:
   ```bash
   php artisan serve
   ```

## Setup with CMS Backend

1. **First, set up the CMS backend**:
   - Clone and setup the [CMS repository](https://github.com/dimis283/demo)
   - Run the CMS on port 8001: `php artisan serve --port=8001`

2. **Then start this frontend**:
   - Run this application on port 8000: `php artisan serve`

3. **Access the applications**:
   - Chess club Website: `http://localhost:8000`
   - CMS Admin Panel: `http://localhost:8001`


## Technologies Used

- **Laravel** - PHP framework
- **PHP** - Backend language
- **Dopefolio Template** - Portfolio design template
- **HTML/CSS/JavaScript** - Frontend technologies
- **Composer** - PHP dependency management
- **npm** - Node.js package management


### Dynamic Content
- All chess club content is managed through the CMS
- Easy content management without code changes

## Usage

1. **Content Management**: Use the CMS backend (demo repository) to add/edit  content
2. **View Chess club site**: Access the main website to see the content
3. **Responsive Design**: The portfolio adapts to different screen sizes



## License

This project is open-sourced software licensed under the [MIT license](LICENSE).

## Credits

- Based on the [Dopefolio](https://github.com/rammcodes/Dopefolio) template
- Built with Laravel framework

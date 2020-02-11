# Share Posts - (Dependent on MVC Framework repo)

Simple post sharing website made with PHP OOP using MVC Framework structure.

It consists of:

- Full User Authentication
- Access Control for Posts
- Server Side Form Validation
- Bootstrap 4 UI
- Posts Publication (CRUD)
- Helper Functions (Flash Messaging & Redirects)

## Installation

Installation is very simple and requires to change information in 2 files:  `public/.htaccess` and  `app/config/config.php`

#### .htaccess

  ``` php
  <IfModule mod_rewrite.c>
    Options -Multiviews
    RewriteEngine On
    RewriteBase /
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule  ^(.+)$ index.php?url=$1 [QSA,L]
  </IfModule>
  ```
Rewrite the row: `RewriteBase /` with the root folder of your website (i.e. in most cases it is sufficient to remain it `/`

#### config.php

  ``` php
<?php

  // DB Params
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'shareposts');

  // App Root
  define('APP_ROOT', dirname(dirname(__FILE__)));

  // URL Root
  define('URL_ROOT', 'http://shareapp.com');

  // Site Name
  define('SITE_NAME', 'Jerico\'s MVC');

  // App Version
  define('APP_VERSION', '1.0.0');
  ```

- Change the DB Params to your database credentials
- Change the URL Root to your website server
- Change the Sitename as your domain
- Change the AppVersion as necessary (Optional)


## Ask a question?
    
If you have any query please contact at jericotilacas@gmail.com
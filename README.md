# Edwin's Blog - Blog Project | Laravel 9  <img height="25" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" />

>This project was made with a deadline of two days. I used the already provided frontend template, where I added everything necessary to the database, created relations between the tables, and did the backend in Laravel 9. 
This project also available a management system (CMS) for blog posts. More information is below...

![schooldash-dahboard-page](https://i.postimg.cc/02qSGXJp/homepage.pnghttps://i.postimg.cc/02qSGXJp/homepage.png)
![schooldash-dahboard-page](https://i.postimg.cc/PJcwR1cf/screencapture-127-0-0-1-8000-register-2022-12-24-11-50-41.png)
![schooldash-dahboard-page](https://i.postimg.cc/ZYLbgwMP/login.png)

## Requirements 
* PHP 8.0 and above
* Composer 
* Since this project is running Laravel 9, I suggest checking out the official requirements

## Installation
* Clone the repository by running the following command in your command line below (Or you can download the zip file from GitHub)
```shell
git clone https://github.com/perisicnikola37/blog-management-laravel.git
 ```
* Head to the projects directory
```shell
cd blog-management-laravel
 ```
* Install/Update Composer dependencies
```shell
composer install | composer update
```

* Copy .env.example file into .env file and configure based on your environment
```shell
cp .env.example .env
```
* Generate an encryption key
```shell
php artisan key:generate
```
* Migrate the database
```shell
php artisan migrate 
```
* Seed database 

    - Use the following command
    
        ```shell
        php artisan db:seed
        ```
        
* For development or testing purposes, you can use the Laravel built-in server by running 
```shell
php artisan serve
```

After running the above commands, you should be able to access the application at http::/localhost or your designated domain name depending on the configuration.

## Setup
* Log in to the application with the following credentials
    * Email: admin@gmail.com
    * Password: password
    
* Project Workflow
    - When you log in, you would be redirected to a Homepage
    - On this page, you can create a blog post, enter your profile settings, logout and many more
    - Click on Profile to enter your Profile settings
    - In the CMS you can manage all of your blog posts, or if you are an administrator, you can manage all blog posts on the platform and users also
    - As an administrator, you are able to view platform analytics
    - As an administrator, you can also delete a certain user or all users by selecting
    - Inside your profile settings you can edit your name, email address, picture, password, and many more
    - As an administrator, you have a special field called `about` where you can write something about yourself which will be displayed on the About Page within the platform
* There are two roles: 
- `administrator` and `subscriber`

#### Possible errors: 
-> "cURL error 60: SSL certificate problem: unable to get local issuer certificate"
<br>
[Watch video](https://www.youtube.com/watch?v=f5jQqWvw44U&ab_channel=Errors%26Solution)

## Roles

### Administrator
* Ability to create, edit, view, and delete all blog posts on the platform
* Ability to create, edit, view, and delete all users on the platform
* Can view analytics page
* Can manage the information which will be displayed within about page

### Subscriber
* Ability view all blog posts on the platform
* Ability to create, edit, view, and delete their blog posts
* Can view all users on the platform but can't delete them
## Features
* When an administrator deletes someone's post, that post automatically relates to that administrator
* Used Laravel Sluggable for SEO
* Added reCAPTCHA on registration
* Added e-mail contact with Mailgun
* Added CSRF protection
* Added Middleware protection for unregistered users 
* Added session messages
* Added Factories for users and blog posts using <i>faker</i>
* Every user has a default picture
* Used Chart.js
* Added pagination on homepae
* Added TinyMCE as HTML editor
* Users have CMS ( Management System )
* Forms Validation

## 🚀 Tech used
* PHP v.8
* Laravel v.9
* MySQL
* HTML v.5 / CSS v.3 / Bootstrap v.5
* JavaScript 







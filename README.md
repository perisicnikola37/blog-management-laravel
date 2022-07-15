# Edwin's Blog - Blog Project | Laravel 9  <img height="25" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" />

>This project was made with a deadline of two days. I used the already provided frontend template, where I added everything necessary to the database, created relations between the tables, and did the backend in Laravel 9. 
This project also available a management system (CMS) for blog posts. More information is below...

![schooldash-dahboard-page](https://i.postimg.cc/02qSGXJp/homepage.pnghttps://i.postimg.cc/02qSGXJp/homepage.png)
![schooldash-dahboard-page](https://i.postimg.cc/CxTcq4wt/screencapture-edwins-blog-herokuapp-register-2022-07-15-21-54-13.png)
![schooldash-dahboard-page](https://i.postimg.cc/ZYLbgwMP/login.png)

## Requirements 
* PHP 8.0 and above
* Composer 
* Since this project is running Laravel 9, I suggest checking out the official requirements

## Installation
* Clone the repository by running the following command in your command line below (Or you can download the zip file from GitHub)
```shell
git clone https://github.com/dzonidevv/cortex.git
 ```
* Head to the projects directory
```shell
cd cortex-master
 ```
* Install/Update Composer dependencies
```shell
composer install 
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
    * Email: test@gmail.com
    * Password: 12345678
    
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

## Roles

### Administrator
* Ability to create, edit, view, and delete all blog posts on the platform
* Ability to create, edit, view, and delete all users on the platform
* Can view analytics page
* Can manage the information which will be displayed within about page

### Subscriber
* Ability to create, edit, view, and delete their blog posts
* Can view all users on the platform but can't delete them

## Features
* When an administrator deletes someone's post, that post automatically relates to that administrator
* Used Laravel Sluggable for SEO
* Used reCAPTCHA while logging 
* Added e-mail contact with Mailgun
* Added CSRF protection
* Added Middleware protection for unregistered users 
* Added session messages
* Added Factories for users and blog posts









# Edwin's Blog - Blog Project | Laravel 9  <img height="25" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" />

>This project was made with a deadline of two days. I used the already provided frontend template, where I added everything necessary to the database, created relations between the tables, and did the backend in Laravel 9. 
In this project is also available a management system (CMS) for blog posts. More information is below..

![schooldash-dahboard-page](https://i.postimg.cc/02qSGXJp/homepage.pnghttps://i.postimg.cc/02qSGXJp/homepage.png)
![schooldash-dahboard-page](https://i.postimg.cc/CxTcq4wt/screencapture-edwins-blog-herokuapp-register-2022-07-15-21-54-13.png)
![schooldash-dahboard-page](https://i.postimg.cc/ZYLbgwMP/login.png)

## Requirements 
* Php 8.0 and above
* Composer 
* Since this project is running Laravel 9, I suggest checking out the official requirements

## Installation
* Clone the repository by running the following command in your comamand line below (Or you can dowload zip file from GitHub)
```shell
git clone https://github.com/dzonidevv/cortex.git
 ```
* Head to the projects directory
```shell
cd cortex-master
 ```
* Install/Update Composer dependancies
```shell
composer install 
```

* Copy .env.example file into .env file and configure based on your environment
```shell
cp .env.example .env
```
* Generate encryption key
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
        
* For development or testing purposes, you can use the Laravel built in server by running 
```shell
php artisan serve
```

After running the above commands, you should be able to access the application at http::/localhost or your designated domain name depending on configuration.

## Setup
* Log in to the application with the following credentials
    * Email: test@gmail.com
    * Password: 12345678
    
* if you are on production 
    - When you log in, you would be redirected to a page with error message at the top right corner that says "Please set your school of operation first". At the menu, click on create schools
    - On the page to create schools, provide a name, address and initial for your school and click on create school
    - Click on view schools, select the current school and click on the button set scvhool
    - You can now head over to the dashboard
    - You can begin to add classes, students, teachers etc. Some operations would not work specifically all links under the academics section
    - Head over to academic years, create a new academic year and a new semester then set the academic year and semester 
* if you are on dev or testing, data is preset to test and use the application.

## Usage
* Add class groups to the school
* Add classes to class groups
* Add sections to classes
* Add students to sections (You must have created a class and a section before you can add students)
* Add teachers to school
* Add subjects to school

## Features
### Super Admin
By default super admin can manage all activities in each school, some super admin exclusive features are
* Ability to create, edit and delete schools
" Ability to set school of operation

### Admin
* Ability to manage own school settings
* Ability to create, edit, view and delete class groups in assigned school
* Ability to create, edit, view and delete classes 
* Ability to create, edit, view and delete sections
* Ability to create, edit, view and delete classes
* Ability to create, edit, view and delete subjects
* Ability to create, edit, view and delete academic years
* Ability to set Academic years
* Ability to admit students, view student profiles, edit student profile, print student profile and delete student
* Ability to create teachers, edit teacher profile and delete teacher
* Ability to create, edit, manage, view and delete timetables
* Ability to create, edit, view and delete sylabii
* Ability to create, edit, view and delete semester
* Ability to set own school academic year and semester

### Teachers
* Ability to create, edit, view and delete sylabii
* Ability to create, edit, manage, view and delete timetables




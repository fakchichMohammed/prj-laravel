
Setting up your development environment on your local machine :
```bash
$ git clone https://github.com/fakchichMohammed/prj-laravel.git
$ cd projectname
$ cp .env.example .env
$ composer install
```

All following commands must be run inside the VM:


Now you can access the application via [http://localhost:8000](http://localhost:8000).

## Before starting
You need to run the migrations with the seeds :
```bash
$ artisan migrate:fresh
```

This will create a new user that you can use to sign in :
```yml
email: admin@admin.com  
password: admin
```

## Useful commands
Seeding the database :
```bash
$ artisan db:seed
```

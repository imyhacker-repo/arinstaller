# Boilerplate Dashboard Admin With Argon Dashboard Template 

### Description
ArInstaller is a Package Admin Dashboard From Argon From Creative Tim, Only For Make Your Admin Dashboard Only (Default Argon), Make It Simply and Fast !

### Requirement

Before Install This Packages, You must have a fresh laravel install.

- I'm here assuming you already understand how to install Laravel!
- Laravel UI
- Auth UI Bootstrap (For Auth Pages).


### How To Install ?

To install this package there are 3 important steps.

### === REMOVE ===

First, delete some files and folders

- Home Controller
```
app/Http/Controllers/HomeController.php
```
- Layouts Folder
```
resources/views/layouts
```

### === INSTALL ===

Second, After delete a HomeController and Layouts folder, next install this Packages.

Open Your Terminal And Paste This.
```
composer require arikun/arinstaller
```

### === SETUP ===

Third, After finish install this packages, you must setup a package.

- Open app.php

Open app.php in folder 
```
config/app.php
```

- Paste Packages Service Provider 

Paste this syntax 
```
Arikun\Arinstaller\ArinstallerServiceProvider::class,
```
to
```
/*
 * Package Service Providers...
 */
  
 { PASTE HERE }
         
/*
 * Application Service Providers...
 */
```

- Open Terminal

Open Terminal again and type this command 

```
php artisan vendor:publis
```
and select 

```
Provider: Arikun\Arinstaller\ArinstallerServiceProvider
```

- Setup style 

Don't close the Terminal, next install this Asset Style
go to public folder 

```
cd public
```

clone from github

```
git clone https://github.com/imyhacker-repo/assets
```

- Last 

Last setup your database (For Login To Dashboard), and boom.


### Disclaimer

```
All Copyright Argon Template From Creative Tim
All Copyright This Packages From Me.

I'm only make this package.
```

### Videos How To Install 

I have also made a video on how to install it.

Link : https://www.youtube.com/watch?v=nWk6B14l4_Q

[![IMAGE ALT TEXT HERE](https://img.youtube.com/vi/nWk6B14l4_Q/0.jpg)](https://www.youtube.com/watch?v=nWk6B14l4_Q)


### Information Update 

- This package will continue to be updated

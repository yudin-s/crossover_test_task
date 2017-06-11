# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

[Notes]

We didn't get a guideline with examples of final documents with diagrams and readme file. 
If you have a question or problem, please write to enfros2000[at]gmail.com.

[Requrements]

For correct work laravel framework need 

* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension

[Quick start]

Laravel framework use console commands for initialize database and start application. 

- Zero step: put source files to domain document root. 

- First step: Configure .env file

	* Change value of APP_URL: crossover.loc to usable domain. 
		Ex. APP_URL = localhost.localdomain. 
	
	* Database settings. Set your host, user, password and database name. 

		DB_HOST=[HOST]
		DB_DATABASE=[DATABASE NAME]
		DB_USERNAME=[DATABASE USER]
		DB_PASSWORD=[DATABASE USER PASSWORD]
		
		Important! For start next step database user need special grants: CREATE TABLE


	* Mail settings 
		
		If you need own SMTP server or other mail transport protocol change following strings.
		
		MAIL_DRIVER=smtp
		MAIL_HOST=smtp.yandex.ru
		MAIL_PORT=465
		MAIL_USERNAME=webmaster@blackbox-studio.ru
		MAIL_PASSWORD=atom2002
		MAIL_ENCRYPTION=ssl
 

- Second step: Installation tables and seeds. 

	For deploy server need open root of source directory in terminal and put command:
	
	php artisan migrate --seed

	Correct output:
		Migration table created successfully.
		Migrated: 2014_10_12_000000_create_users_table
		Migrated: 2014_10_12_100000_create_password_resets_table
		Migrated: 2016_09_05_093821_create_atricle_table
		Migrated: 2016_09_05_094439_create_comments_tale
		Migrated: 2016_09_05_100442_add_email_confirmation
		Migrated: 2016_09_05_134535_add_avatar_to_user
		Migrated: 2016_09_05_155559_add_title_to_article
		Migrated: 2016_09_05_184900_add_aid_to_comments	
		Migrated: 2016_09_06_145448_create_codes_tables
		Migrated: 2016_09_07_150703_DropUsersCodesUnique
		Seeded: ArticleTableSeeder
		Seeded: UsersTableSeeder
		Seeded: UsersCodesTableSeeder
		
		If have a problem, see:
			https://laravel.com/docs/5.3/seeding#running-seeders
			https://laravel.com/docs/5.3/migrations#running-migrations
		
		Important! We don't recomend this variant of deploy, but you also can install database from  included SQL file. 
		
		
After second step, open browser and type link. All done. 

[Additional assumptions]

- Git

For get a version controll and backups in development process we use git and bitbucket SaaS. 

- PHP Mailer

We don't use PHP Mail as mail library because laravel contains core mail library SwiftMailer with support blade-template engine and full integration with others components of CMF. It's better than PHPMailer. 

Now, mail library set to our SMTP accout, but if you want use senmail or mail function change MAIL_DRIVER=smtp to MAIL_DRIVER=mail


- PDF Exporter 

For PDF Export we use DOMPDF library, integrated with Laravel core. 

	DOMPDF requrements:

		* DOM extension
		* GD extension
		* MBString extension
		* php-font-lib
		* php-svg-lib


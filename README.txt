Instruction to configure and run the application, notes and feedback

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
		
After second step, open browser and type link. All done. 

[Additional assumptions]

- PHP Mailer

We don't use PHP Mail as mail library because laravel contains core mail library SwiftMailer with support blade-template engine and full integration with others components of CMF. It's better than PHPMailer. 

- PDF Exporter 

For PDF Export we use DOMPDF library, integrated with Laravel core. 

	DOMPDF requrements:

		* DOM extension
		* GD extension
		* MBString extension
		* php-font-lib
		* php-svg-lib


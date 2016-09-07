Instruction to configure and run the application, notes and feedback

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
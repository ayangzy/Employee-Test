To set the project for local developement follow the instructions below

1.Glone the github repo for this project locally 

2.Install Composer Dependencies (composer install)

3.Install NPM Dependencies (you can use either npm install or yarn install depending on your choice)

4.Create a copy of your .env file by running cp .env.example .env, This will create a copy of the .env.example file in your project and name the copy simply .env.

5.Generate an app encryption key by running this command php artisan key:generate

6.Create an empty database for the application in my case the database name is employee

7.In the .env file, add database information to allow Laravel to connect to the database

8.Migrate the database. Once your credentials are in the .env file, now you can migrate your database. you can run this command to achieve that, php artisan migrate

9.I have created some dummy data so you can run php artisan db:seed, to Seed the database if you wish. 

Getting Started with App42PaaS-PHP-Redis-Sample Application:
----------------------------------------------------

This application is basically a simple form that takes input from user and saves it in database.

<b>[Download the source code from git.](https://github.com/shephertz/App42PaaS-Php-Redis-Sample/archive/master.zip)</b>

Project Configuration:
----------------------

1. Open Config.properties.

2. Update the details of your Redis service in it.

         app42.paas.db.port = <your_service_port>
         app42.paas.db.password = <your_database_password>
         app42.paas.db.ip = <your_service_ip>
         

Deploying Application on App42 PaaS using Binary:
---------------------------------------------------
         
		1. Create the binary(zip, tar.gz) file.
		
		2. Run the app42 deploy command.
		
				  $ app42 deploy
                  $ Enter App Name: <your_app_name>
                  $ Would you like to deploy from the current directory? [Yn]: n
                  $ Binary Deployment Path: <your_binary_path>
                  $ This process may take a while, be patient with it.
                  $ Deploying Application... OK
                  $ Please wait it may take few minutes.
                  $ Latest Status....|
                  $ App deployed successfully.
				  

Deploying Application on App42 PaaS using Source (Git):
--------------------------------------------------------

	1. Run the app42 deploy command.
	
				  $ app42 deploy
                  $ Enter App Name: <your_app_name>
				  $ 1: Binary
				  $	2: Source
				  $ Choose Upload Type [Binary]: 2
				  $ Enter Git URL?: <your_public_git_url>
				  $ Deploying Application... OK
                  $ Please wait it may take few minutes.
                  $ Latest Status....|
                  $ App deployed successfully.

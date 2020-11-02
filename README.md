# SymfonyCrudProject

setup project
==============
    git clone https://github.com/vichetmoeng/SymfonyCrudProject.git
    cd SymfonyCrudProject
    composer install
    cp .env .evn.local
edit .env.local file 

    DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7

and run
    
    php bin/console doctrine:database:create
    php bin/console make:migration
    php bin/console doctrine:migrations:migrate

after that run:

    symfony serve -d
    
    Web server listening                                                      
      The Web server is using PHP CLI x.x.x                                    
      https://xxx.x.x.x:xxxx
    

<img src="ScreenShotSymCrud.png" width="100%">

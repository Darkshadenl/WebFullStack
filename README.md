# WebFullStack
Project for the development of a new website for 'De Gouden Draak'.

There are multiple enviroments for this project.
They will adhere to the OTAP strategy.

Every environment will have a different database.
Rules and guidelines will be noted in the devdoc.


HOW TO START:

- AFTER DOCKER COMPOSE UP>>> 
    - go to local 'website' folder and run  'composer install'
    - go to website. Follow instructions to generate key in docker through cli.

After building the docker-compose, open cli of every laravel docker.
Run "chmod -R 777 ./larvel/storage".
# Kanamo-backend
Laravel backend for the Kanamo android app. stubs project

## Getting started
1. Add an entry to your `/etc/hosts` file and point mobis4.dev to your vm:
    1. `192.168.10.10 kanamo.app`
2. If using a homestead VM:
    1. Duplicate a sites section in your `~/.homestead/Homestead.yaml` and enter: 
    1. `- map: kanamo.app`
    1. `  to: /home/vagrant/Code/Kanamo-backend/public`
    1. Provision the vm
    1. `local$ vagrant up --provision`
    1. `local$ vagrant ssh`
1. Clone [this repo](https://github.com/mwakaambrose/Kanamo-backend) to your machine
    1. `vm$ cd Kanamo-backend` to enter the directory
1. Run `vm$ composer update && composer install` to install php dependencies.
1. Produce a `.env` file:
    1. `cp .env.example .env`
    1. Open the `.env` and change values as required (may not need any changes).
1. Create the database and users as described in the `.env` file:
    1. `vm$ mysql -u homestead --password=secret`
    1. `mysql> CREATE DATABASE kanamo;`
    1. `mysql> CREATE USER kanamo@localhost IDENTIFIED BY 'password';`
    1. `mysql> GRANT ALL ON mobis4.* TO kanamo@localhost;`
1. Visit `http://mobis4.dev` in your browser
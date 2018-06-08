## **How to install D8 project on windows with docker toolbox.**
1. Install [docker toolbox](https://docs.docker.com/toolbox/overview/).

2. *Install drupal 8 project via composer [(install d8 with composer)](https://www.drupal.org/docs/develop/using-composer/using-composer-with-drupal) into C:\Users\<user_name>\<project_name> folder (VM share user's folder by default, example - C:\Users\<user_name>\projects\<project_name> ).

3. Create folder for backups (ex C:\Users\<user_name>\backups) and put here (recreate.sh)[https://github.com/Yan-Matskevich/docker4drupal/blob/d8_windows/recreate.sh].

4. Start you docker VM:
* Run 'Docker Quickstart Terminal' (path/to/install/start.sh) as Administrator to start oracle virtualbox with default boot2docker image.
* In Opened terminal window run following commands after starting :
    * **docker-machine rm default** - kill default VM.
    * **docker-machine create -d virtualbox --virtualbox-cpu-count=2 --virtualbox-memory=4096 default** - create more powerful new one.
    * **docker-machine stop** , **exit** -  stop docker machine docker.
* Re-run 'Docker Quickstart Terminal'. It should started recently created default docker machine with IP 192.168.99.100 by default.

5. Check list available machines with **docker-machine ls** comand and pay attantion on **URL** column, there is docker VM IP. We will need it later.

6. Put [docker-compose.yml](https://github.com/Yan-Matskevich/docker4drupal/blob/d8_windows/docker-compose.yml) file to the project root directory.

7. Reroute http request to Docker VM:
- Add following records to  C:\Windows\System32\Drivers\etc\hosts with yours **docker VM IP** from step 5. (by default IP is 192.168.99.100):

|docker VM IP   | host                              |
|---------------|-----------------------------------|
|192.168.99.100 | drupal.docker.localhost                       |

8. In opened **Docker Quickstart Terminal**, go to the project root folder (C:\Users\<user_name>\projects\<project_name>) and run following command to download images (for the first run) and run containers **$ docker-compose up -d**.

9. In opened **Docker Quickstart Terminal**, check running container with **$ docker ps** command.

10. Try to open http://drupal.docker.localhost in your browser.

11. Install Drupal 8 site. During installation please use following Database settings: DB_HOST=mariadb, DB_USER=root, DB_PASSWORD=password.

###P.S.
* Steps not required for now.
* Additional steps and guides will appear later. 
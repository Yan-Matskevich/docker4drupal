## **How to install CMS project on windows.**
1. Install [official docker](https://docs.docker.com/docker-for-windows/install/#download-docker-for-windows) client for windows or [docker toolbox](https://docs.docker.com/toolbox/overview/) if your system is old or doesn't support Hyper-V VMs.

2. Put CMS project into C:\Users\<user_name>\ folder (VM share user's folder by default, example - C:\Users\<user_name>\projects\cmsd7 ).

3. Create folder for backups (ex C:\Users\<user_name>\backups) and put here (recreate.sh)[https://github.com/Yan-Matskevich/docker4drupal/blob/cms/recreate.sh]. If you changed backups folder name you would have to change mapping for backups in docker-compose.yml too.

4. Start you docker VM:
- Run 'Docker Quickstart Terminal' to start oracle virtualbox with default boot2docker image.
- Run **$ docker-machine create --driver hyperv cms**/**$ docker-machine start cms** to **create new/start existing** local machines with virtualbox driver.

5. Check list available machines with **docker-machine ls** comand and pay attantion on **URL** column, there is docker VM IP. We will need it later.

6. Put [docker-compose.yml](https://github.com/Yan-Matskevich/docker4drupal/blob/cms/docker-compose.yml) file in the cms project root.

7. **(only for docker for windows client)** Run following comands to connect your shell to the docker VM machine:
- **$ docker-machine env cms**
- **$ eval "$(docker-machine env cms)"**

8. Reroute cms queries to Docker VM:
- Add following records to  C:\Windows\System32\Drivers\etc\hosts with yours **docker VM IP** from step 5.:

|docker VM IP   | host                              |
|---------------|-----------------------------------|
|192.168.99.100 | local.tvecms.usanetwork.nbcuni.com|
|192.168.99.100 | local.tvecms.usa.nbcuni.com|
|192.168.99.100 | local.tvecms.bravo.nbcuni.com|
|192.168.99.100 | local.tvecms.chiller.nbcuni.com|
|192.168.99.100 | local.tvecms.cxbrand.nbcuni.com|
|192.168.99.100 | local.tvecms.eonline.nbcuni.com|
|192.168.99.100 | local.tvecms.seeso.nbcuni.com|
|192.168.99.100 | local.tvecms.sprout.nbcuni.com|
|192.168.99.100 | local.tvecms.syfy.nbcuni.com|
|192.168.99.100 | local.tvecms.telemundo.nbcuni.com|
|192.168.99.100 | local.tvecms.oxygen.nbcuni.com|
|192.168.99.100 | local.tvecms.nbcuniverso.nbcuni.com|
|192.168.99.100 | local.tvecms.cnbc.nbcuni.com|
|192.168.99.100 | local.tvecms.msnbc.nbcuni.com|
|192.168.99.100 | local.tvecms.esquire.nbcuni.com|
|192.168.99.100 | local.tvecms.universalkids.nbcuni.com|
|192.168.99.100 | pma.cms.docker.localhost|
|192.168.99.100 | portainer.cms.docker.localhost|

9. Go to cms root folder and run following command to download images (for the first run) and run containers **$ docker-compose up -d**.

10. Check running container with **$ docker ps** command or go to [portainer dashbord](http://portainer.cms.docker.localhost).

11. The last step is to install database from backup:
- Execute ** $ docker exec -ti cms_db sh** command to enter the running container.
- Go to /var/www/backups folder - **$ cd /var/www/backups**. If everything is OK, here you should find db backups and recreate.sh scrypt.
- Run this command to install database **$ sh recreate.sh <brand_name> <backupd_name>**. Example command is **$ sh recreate.sh eonline  eonline_dump.mysql**.
- Exit from container with **$ exit** command.

12. That's all. You have installed CMS invironment. Enjoy!!!
**How to install CMS project on windows.**
1. [Install](https://docs.docker.com/docker-for-windows/install/#download-docker-for-windows) official docker for windows client.
2. Put CMS project into C:\Users\<user_name>\ folder (VM share user's folder by default, example - C:\Users\<user_name>\projects\cmsd7 ).
3. Create folder for backups (ex C:\Users\<user_name>\backups) and put here (recreate.sh)[https://github.com/Yan-Matskevich/docker4drupal/blob/cms/recreate.sh]. If you changed backups folder name you would have to change mapping for backups in docker-compose.yml too.
4. Reroute cms queries to Docker VM:
- Run 'Docker Quickstart Terminal' and type "docker-machine.exe ls" command to get docker VM IP (default docker_ip 192.168.99.100).
- Add following records to  C:\Windows\System32\Drivers\etc\hosts with yours docker VM ip:

|docker VM ip   | host                              |
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
5. Add docker-compose.yml to git ignore.
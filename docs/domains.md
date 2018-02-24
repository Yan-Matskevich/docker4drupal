# Domains Configuration

Docker4Drupal uses [traefik](https://hub.docker.com/_/traefik/) container for routing. By default, we use port `8000` to avoid potential conflicts but if port `80` is free on your host machine just replace traefik's ports definition in the compose file.

Add `127.0.0.1 drupal.docker.localhost` to your `/etc/hosts` file (some browsers like Chrome may work without it). Do the same for other default domains you might need from listed below:  

| Service      | Domain                                                                                                |
| ------------ | ------------------------------------------------------------------------------------------------------|
| telemundo    | [http://local.tve.telemundo.nbcuni.com:8000](http://local.tve.telemundo.nbcuni.com:8000)              |
| bravo        | [http://local.tve.bravo.nbcuni.com:8000](http://local.tve.bravo.nbcuni.com:8000)                      |
| syfy         | [http://local.tve.syfy.nbcuni.com:8000](http://local.tve.syfy.nbcuni.com:8000)                        |
| eonline      | [http://local.tve.eonline.nbcuni.com:8000](http://local.tve.eonline.nbcuni.com:8000)                  |
| sprout       | [http://local.tve.sprout.nbcuni.com:8000](http://local.tve.sprout.nbcuni.com:8000)                    |
| cnbc         | [http://local.tve.cnbc.nbcuni.com:8000](http://local.tve.cnbc.nbcuni.com:8000)                        |
| mun2         | [http://local.tve.mun2.nbcuni.com:8000](http://local.tve.mun2.nbcuni.com:8000)                        |
| esquire      | [http://local.tve.esquire.nbcuni.com:8000](http://local.tve.esquire.nbcuni.com:8000)                  |
| oxygen       | [http://local.tve.oxygen.nbcuni.com:8000](http://local.tve.oxygen.nbcuni.com:8000)                    |
| usa          | [http://local.tve.usa.nbcuni.com:8000](http://local.tve.usa.nbcuni.com:8000)                          |
| oxygen       | [http://local.tvecms.oxygen.nbcuni.com:8000](http://local.tvecms.oxygen.nbcuni.com:8000)              |
| nbcsports    | [http://local.tve.nbcsports.nbcuni.com:8000](http://local.tve.nbcsports.nbcuni.com:8000)              |
| nbcuni       | [http://local.tve.nbcnews.nbcuni.com:8000](http://local.tve.nbcnews.nbcuni.com:8000)                  |
| nbcuniverso  | [http://local.tve.nbcuniverso.nbcuni.com:8000](http://local.tve.nbcuniverso.nbcuni.com:8000)          |
| msnbc        | [http://local.tve.msnbc.nbcuni.com:8000](http://local.tve.msnbc.nbcuni.com:8000)                      |
| nbcd         | [http://local.tve.nbcd.nbcuni.com:8000](http://local.tve.nbcd.nbcuni.com:8000)                        |
| pma          | [http://pma.tve.docker.localhost:8000](http://pma.tve.docker.localhost:8000)                          |
| portainer    | [http://portainer.tve.docker.localhost:8000](http://portainer.tve.docker.localhost:8000)              |
|--------------|-------------------------------------------------------------------------------------------------------|
| mailhog      | [http://mailhog.drupal.docker.localhost:8000](http://mailhog.drupal.docker.localhost:8000)            |
| solr         | [http://solr.drupal.docker.localhost:8000](http://solr.drupal.docker.localhost:8000)                  |
| nodejs       | [http://nodejs.drupal.docker.localhost:8000](http://nodejs.drupal.docker.localhost:8000)              |
| node         | [http://front.drupal.docker.localhost:8000](http://front.drupal.docker.localhost:8000)                |
| varnish      | [http://varnish.drupal.docker.localhost:8000](http://varnish.drupal.docker.localhost:8000)            |
| adminer      | [http://adminer.drupal.docker.localhost:8000](http://adminer.drupal.docker.localhost:8000)            |
| webgrind     | [http://webgrind.drupal.docker.localhost:8000](http://webgrind.drupal.docker.localhost:8000)          |

You can modify domains under labels definition, e.g. `traefik.frontend.rule=Host:mailhog.drupal.docker.localhost`.

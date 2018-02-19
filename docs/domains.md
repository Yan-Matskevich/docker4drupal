# Domains Configuration

Docker4Drupal uses [traefik](https://hub.docker.com/_/traefik/) container for routing. By default, we use port `8000` to avoid potential conflicts but if port `80` is free on your host machine just replace traefik's ports definition in the compose file.

Add `127.0.0.1 drupal.docker.localhost` to your `/etc/hosts` file (some browsers like Chrome may work without it). Do the same for other default domains you might need from listed below:  

| Service      | Domain                                                                                                |
| ------------ | ------------------------------------------------------------------------------------------------------|
| usanetwork   | [http://local.tvecms.usanetwork.nbcuni.com:8000](http://local.tvecms.usanetwork.nbcuni.com:8000)      |
| nbcuni       | [http://local.tvecms.usa.nbcuni.com:8000](http://local.tvecms.usa.nbcuni.com:8000)                    |
| bravo        | [http://local.tvecms.bravo.nbcuni.com:8000](http://local.tvecms.bravo.nbcuni.com:8000)                |
| chiller      | [http://local.tvecms.chiller.nbcuni.com:8000](http://local.tvecms.chiller.nbcuni.com:8000)            |
| cxbrand      | [http://local.tvecms.cxbrand.nbcuni.com:8000](http://local.tvecms.cxbrand.nbcuni.com:8000)            |
| eonline      | [http://local.tvecms.eonline.nbcuni.com:8000](http://local.tvecms.eonline.nbcuni.com:8000)            |
| seeso        | [http://local.tvecms.seeso.nbcuni.com:8000](http://local.tvecms.seeso.nbcuni.com:8000)                |
| sprout       | [http://local.tvecms.sprout.nbcuni.com:8000](http://local.tvecms.sprout.nbcuni.com:8000)              |
| syfy         | [http://local.tvecms.syfy.nbcuni.com:8000](http://local.tvecms.syfy.nbcuni.com:8000)                  |
| telemundo    | [http://local.tvecms.telemundo.nbcuni.com:8000](http://local.tvecms.telemundo.nbcuni.com:8000)        |
| oxygen       | [http://local.tvecms.oxygen.nbcuni.com:8000](http://local.tvecms.oxygen.nbcuni.com:8000)              |
| nbcuniverso  | [http://local.tvecms.nbcuniverso.nbcuni.com:8000](http://local.tvecms.nbcuniverso.nbcuni.com:8000)    |
| cnbc         | [http://local.tvecms.cnbc.nbcuni.com:8000](http://local.tvecms.cnbc.nbcuni.com:8000)                  |
| msnbc        | [http://local.tvecms.msnbc.nbcuni.com:8000](http://local.tvecms.msnbc.nbcuni.com:8000)                |
| esquire      | [http://local.tvecms.esquire.nbcuni.com:8000](http://local.tvecms.esquire.nbcuni.com:8000)            |
| universalkids| [http://local.tvecms.universalkids.nbcuni.com:8000](http://local.tvecms.universalkids.nbcuni.com:8000)|
| pma          | [http://pma.cms.docker.localhost:8000](http://pma.cms.docker.localhost:8000)                          |
| portainer    | [http://portainer.cms.docker.localhost:8000](http://portainer.cms.docker.localhost:8000)              |
|--------------|-------------------------------------------------------------------------------------------------------|
| mailhog      | [http://mailhog.drupal.docker.localhost:8000](http://mailhog.drupal.docker.localhost:8000)            |
| solr         | [http://solr.drupal.docker.localhost:8000](http://solr.drupal.docker.localhost:8000)                  |
| nodejs       | [http://nodejs.drupal.docker.localhost:8000](http://nodejs.drupal.docker.localhost:8000)              |
| node         | [http://front.drupal.docker.localhost:8000](http://front.drupal.docker.localhost:8000)                |
| varnish      | [http://varnish.drupal.docker.localhost:8000](http://varnish.drupal.docker.localhost:8000)            |
| adminer      | [http://adminer.drupal.docker.localhost:8000](http://adminer.drupal.docker.localhost:8000)            |
| webgrind     | [http://webgrind.drupal.docker.localhost:8000](http://webgrind.drupal.docker.localhost:8000)          |

You can modify domains under labels definition, e.g. `traefik.frontend.rule=Host:mailhog.drupal.docker.localhost`.

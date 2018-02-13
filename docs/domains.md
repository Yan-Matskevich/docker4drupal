# Domains Configuration

Docker4Drupal uses [traefik](https://hub.docker.com/_/traefik/) container for routing. By default, we use port `8000` to avoid potential conflicts but if port `80` is free on your host machine just replace traefik's ports definition in the compose file.

Add `127.0.0.1 drupal.docker.localhost` to your `/etc/hosts` file (some browsers like Chrome may work without it). Do the same for other default domains you might need from listed below:  

| Service      | Domain                                                                                         |
| ------------ | ---------------------------------------------------------------------------------------------- |
| usanetwork   | [http://local.tvecms.usanetwork.nbcuni.com](http://local.tvecms.usanetwork.nbcuni.com)         |
| nbcuni       | [http://local.tvecms.usa.nbcuni.com](http://local.tvecms.usa.nbcuni.com)                       |
| bravo        | [http://local.tvecms.bravo.nbcuni.com](http://local.tvecms.bravo.nbcuni.com)                   |
| chiller      | [http://local.tvecms.chiller.nbcuni.com](http://local.tvecms.chiller.nbcuni.com)               |
| cxbrand      | [http://local.tvecms.cxbrand.nbcuni.com](http://local.tvecms.cxbrand.nbcuni.com)               |
| eonline      | [http://local.tvecms.eonline.nbcuni.com](http://local.tvecms.eonline.nbcuni.com)               |
| seeso        | [http://local.tvecms.seeso.nbcuni.com](http://local.tvecms.seeso.nbcuni.com)                   |
| sprout       | [http://local.tvecms.sprout.nbcuni.com](http://local.tvecms.sprout.nbcuni.com)                 |
| syfy         | [http://local.tvecms.syfy.nbcuni.com](http://local.tvecms.syfy.nbcuni.com)                     |
| telemundo    | [http://local.tvecms.telemundo.nbcuni.com](http://local.tvecms.telemundo.nbcuni.com)           |
| oxygen       | [http://local.tvecms.oxygen.nbcuni.com](http://local.tvecms.oxygen.nbcuni.com)                 |
| nbcuniverso  | [http://local.tvecms.nbcuniverso.nbcuni.com](http://local.tvecms.nbcuniverso.nbcuni.com)       |
| cnbc         | [http://local.tvecms.cnbc.nbcuni.com](http://local.tvecms.cnbc.nbcuni.com)                     |
| msnbc        | [http://local.tvecms.msnbc.nbcuni.com](http://local.tvecms.msnbc.nbcuni.com)                   |
| esquire      | [http://local.tvecms.esquire.nbcuni.com](http://local.tvecms.esquire.nbcuni.com)               |
| universalkids| [http://local.tvecms.universalkids.nbcuni.com](http://local.tvecms.universalkids.nbcuni.com)   |
| pma          | [http://pma.cms.docker.localhost](http://pma.cms.docker.localhost)                             |
| portainer    | [http://portainer.cms.docker.localhost](http://portainer.cms.docker.localhost)                 |
|--------------|------------------------------------------------------------------------------------------------|
| mailhog      | [http://mailhog.drupal.docker.localhost:8000](http://mailhog.drupal.docker.localhost:8000)     |
| solr         | [http://solr.drupal.docker.localhost:8000](http://solr.drupal.docker.localhost:8000)           |
| nodejs       | [http://nodejs.drupal.docker.localhost:8000](http://nodejs.drupal.docker.localhost:8000)       |
| node         | [http://front.drupal.docker.localhost:8000](http://front.drupal.docker.localhost:8000)         |
| varnish      | [http://varnish.drupal.docker.localhost:8000](http://varnish.drupal.docker.localhost:8000)     |
| adminer      | [http://adminer.drupal.docker.localhost:8000](http://adminer.drupal.docker.localhost:8000)     |
| webgrind     | [http://webgrind.drupal.docker.localhost:8000](http://webgrind.drupal.docker.localhost:8000)   |

You can modify domains under labels definition, e.g. `traefik.frontend.rule=Host:mailhog.drupal.docker.localhost`.

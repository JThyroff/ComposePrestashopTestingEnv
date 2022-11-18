# Compose Prestashop Testing Environment

This repository provides instructions and sample compose files how to build a local docker testing environment with a preconfigured prestashop. *This setup is only suitable for a local testing environment. Don't use it for anything else.*

## Setup

1. Install [docker](https://www.docker.com/) and [portainer-ce](https://hub.docker.com/r/portainer/portainer-ce).

2. Create a stack template in portainer with the contents of [prestashop_stack_template.yml](/compose/prestashop_stack_template.yml).

3. Deploy the stack. Setup and configure prestashop as you wish. You can accesss prestashop by the link showed in portainer and access the command line of the container by clicking the *>_console* button in the container interface. Here you have to delete the install folder with ```rm -rf install``` and rename the admin folder with ```mv admin admin123```.

4. Stop the docker containers and create new images of them:
    - use ```docker container list -a``` to list all docker containers.
    - use ```docker commit <containername>``` to commit a container to an image.
    - use ```docker images``` to list all images. The previously commited container should show up as *\<none>*.
    - use ```docker tag <imageid> <tagname>``` to tag you own prestashop image.

5. Backup the contents and volume of the already configured container. 
    - Go to ```/data/compose/``` in your file system and copy the configured container.
    - Go to ```/var/lib/docker/volumes/``` in your file system and copy the configured volume.

6. Create a new stack template in portainer with the contents of [my_prestashop_stack_template.yml](/compose/my_prestashop_stack_template.yml). This template assigns static ip-addresses to the containers. By that they stay the same and the containers start up in the same network configuration every time. The connection between the database and prestashop remains the same.

## How to use

Now in order to deploy the preconfigured prestashop you can deploy a stack from the freshly created stack template. Then you stop the containers and overwrite the contents and volume of the prestashop container with the backup. Restart the containers. 

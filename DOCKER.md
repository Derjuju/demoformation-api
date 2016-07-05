# docker-machine

## creating the machine

```bash
docker-machine create -d virtualbox --virtualbox-memory 4096 --virtualbox-disk-size 30000 default
```

# docker-compose

## Run docker-build

```bash
docker-compose build
```

## Run docker-compose 

```bash
docker-compose up
```

## Getting environment

```bash
docker-compose run <service-name> env
```

# Docker

# Docker volumes clean up

```bash
docker volume ls -qf dangling=true
```

```bash
docker volume rm $(docker volume ls -qf dangling=true)
```

# Docker cleanup containers

```bash
docker rm $(docker ps -a -q)
```

# Docker removing dangling images

```bash
docker rmi -f `docker images -f 'dangling=true' -q`
```

## Connecting in a running container with bash

```bash
docker exec -it <container name/id> bash
```


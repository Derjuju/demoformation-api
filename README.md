# demoformation-api

## Configure for local development:

create a build.local.properties file with:

```
dir.vendor=./vendor
phinx.bin=${dir.vendor}/bin/phinx

db.host=127.0.0.1
db.port=3306
db.dbname=skeleton
db.username=root
db.password=
```

## Build your php container

```bash
docker-compose build
````

## Start and Reset your database

```bash
RESET_DB=true docker-compose up
```

## Stopping your containers

```bash 
docker-compose stop
```

## Starting your containers

```bash 
docker-compose start
```

## Stop and remove containers

```bash 
docker-compose down
```



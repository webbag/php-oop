## My own example / exercises PHP Object Oriented Programming


### Install 

Check version your docker
```
docker -v
 17.05.0-ce, build 89658be
docker-compose -v
 version  1.17.1 or higher
```

### Getting started
```
cd _develop/ 
```

```
* Up
```
cd _develop/ 
docker-compose up -d
```
Open url 
http://php-oop.lh/ 

* Down
```
docker-compose down
```

#### Entrance to the container
*  ```docker exec -it php bash ```
*  ```docker exec -it web bash ```
*  ```docker exec -it mysql bash ```
 
#### Diagnosing containers

* Main 
``` 
docker ps
``` 

* Other
``` 
docker ps -a -f status=dead
docker ps -a -f status=exited
docker rm -f $(docker ps -aqf status=dead)
docker rm -f $(docker ps -aqf status=exited)

docker images -f dangling=true
docker rmi $(docker images -q -f dangling=true)
``` 


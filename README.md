<p align="center">
  <img alt="wordpress" src="https://upload.wikimedia.org/wikipedia/commons/2/20/WordPress_logo.svg" height="50" />
</p>
<h1 align="center">
  Wordpress Local Dev Template
</h1>

## Make local development environment with docker

- **launch app & db server with phpmyadmin**
  ```zsh
  docker-compose up
  ```
  - wordpress front page: http://localhost:8080
  - wordpress admin page : http://localhost:8080/wp-admin
  - phpmyadmin: http://localhost:8888


- **stop containers**
  ```zsh
  docker-compose stop
  ```
- **remove all dependent images and volumes**
  ```zsh
  docker-compose down --rmi all --volumes --remove-orphans
  ```



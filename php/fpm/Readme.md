# Docker Configuration PHP-FPM

This repository contains Docker configurations to set up and manage an PHP-FPM service with an example PHP application using Docker and Docker Compose. It provides a basic template to orchestrate services and applications in a containerized environment.

Note: Docker image doesn't contain a webserver, just the PHP-FPM service. The docker-compose includes Nginx for testing but ff you want to serve an application using a web server look at the other examples.

## Docker image (Production)

Follow the instructions below to get a production environment up and running with Docker.

### Usage
1. **Build Image**:

   - To build Docker image, run:

     ```bash
     docker build --tag rayblair/docker-configs-php-fpm .
     ```

2. **Run Image**:

   - To build Docker image, run:

     ```bash
     docker run rayblair/docker-configs-php-fpm
     ```

## Docker-compose (Development)

Follow the instructions below to get a development environment up and running with Docker.

### Usage
1. **Build and Start Containers**:

   - To build and start the containers, run:

     ```bash
     docker-compose up --build
     ```

    - Go to http://localhost

2. **Stop Containers**:

- To stop the containers, use:

    ```bash
    docker-compose down
    ```

# Docker Configuration FrankenPHP

This repository contains Docker configurations to set up and manage an FrankenPHP server serving a PHP application using Docker and Docker Compose. It provides a basic template to orchestrate services and applications in a containerized environment.

## Docker image (Production)

Follow the instructions below to get a production environment up and running with Docker.

### Usage
1. **Build Image**:

   - To build Docker image, run:

     ```bash
     docker build --tag rayblair/docker-configs-frankenphp .
     ```

2. **Run Image**:

   - To build Docker image, run:

     ```bash
    docker run -p 80:8080 rayblair/docker-configs-frankenphp
     ```

## Docker-compose (Development)

Follow the instructions below to get a development environment up and running with Docker.

### Usage
1. **Build and Start Containers**:

   - To build and start the containers, run:

     ```bash
     docker-compose up --build
     ```

    - Go to https://localhost

2. **Stop Containers**:

- To stop the containers, use:

    ```bash
    docker-compose down
    ```

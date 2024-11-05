# FrankenPHP Docker Configuration

This repository provides Docker configurations for setting up and managing a FrankenPHP server to serve a PHP application using Docker and Docker Compose. It offers a basic template for orchestrating services in a containerized environment.

## Production Docker Image

Follow these instructions to set up a production environment with Docker.

### Usage

1. **Build the Image**:

   To build the Docker image, run:

   ```bash
   docker build --tag rayblair/docker-configs-frankenphp .
   ```

2. **Run the Image**:

   To start the Docker container, use:

   ```bash
   docker run -p 80:8080 rayblair/docker-configs-frankenphp
   ```

   This will bind port 80 on your host to port 8080 on the container.

## Development Environment with Docker Compose

Follow these instructions to set up a development environment with Docker Compose.

### Usage

1. **Build and Start Containers**:

   To build and start the containers, run:

   ```bash
   docker-compose up --build
   ```

   After starting, access the application at [https://localhost](https://localhost).

2. **Stop Containers**:

   To stop the containers, use:

   ```bash
   docker-compose down
   ```

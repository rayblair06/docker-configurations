# PHP-FPM Docker Configuration

This repository contains Docker configurations for setting up and managing a PHP-FPM service with an example PHP application using Docker and Docker Compose. It serves as a basic template to orchestrate PHP applications in a containerized environment.

**Note:** The Docker image includes only the PHP-FPM service without a web server. The `docker-compose` configuration includes Nginx for testing purposes. If you need a web server setup, please refer to other examples in this repository.

## Production Docker Image

Follow these instructions to set up a production environment with Docker.

### Usage

1. **Build the Image**:

   To build the Docker image, run:

   ```bash
   docker build --tag rayblair/docker-configs-php-fpm .
   ```

2. **Run the Image**:

   To run the Docker image, use:

   ```bash
   docker run rayblair/docker-configs-php-fpm
   ```

## Development Environment with Docker Compose

Follow these instructions to set up a development environment with Docker Compose.

### Usage

1. **Build and Start Containers**:

   To build and start the containers, run:

   ```bash
   docker-compose up --build
   ```

   After starting, access the application at [http://localhost](http://localhost).

2. **Stop Containers**:

   To stop the containers, use:

   ```bash
   docker-compose down
   ```

# Docker Configuration Examples

Welcome! This repository showcases a variety of Docker configurations using Docker and Docker Compose. These templates are intended as starting points for orchestrating services and applications in a containerized environment. Feel free to build upon and customize them to suit your needs!

## Table of Contents

- [Getting Started](#getting-started)
- [Prerequisites](#prerequisites)
- [Project Structure](#project-structure)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Getting Started

To get started, clone this repository, navigate to the example you want to use, and follow the instructions in that example’s `README.md` file to set up your Docker environment.

### Prerequisites

- **Docker**: [Install Docker](https://docs.docker.com/get-docker/) (version >= 20.x)
- **Docker Compose**: [Install Docker Compose](https://docs.docker.com/compose/install/) (version >= 1.27)

Ensure that Docker is running on your machine and that Docker Compose is available in your command line.

## Project Structure

This repository is organized by service type, with Docker configuration examples in each folder:

- **[PHP](php)**
   - Basic
      - [FPM](php/basic/fpm)
      - [FrankenPHP](php/basic/frankenphp)
      - [Nginx](php/basic/nginx)

## Usage

1. **Clone the Repository**:

   ```bash
   git clone https://github.com/rayblair06/docker-configurations.git
   cd docker-configurations
   ```

2. **Navigate to an Example**:

   ```bash
   cd php/frankenphp
   nano README.md
   ```

## Contributing

We welcome contributions! If you’d like to contribute, please open an issue or submit a pull request.

### Contribution Guidelines

1. Fork this repository.
2. Create a new branch for your feature or bug fix.
3. Make changes and test thoroughly.
4. Submit a pull request for review.

## License

This repository is licensed under the MIT License. See the `LICENSE` file for more information.

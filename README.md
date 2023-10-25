# TEST TextMagic (Docker + PHP + PostgeSQL + Nginx + Symfony)


## Installation

1. Clone this repo.

2. Edit the file `./.docker/.env.nginx` to provide your server name. The value of the variable `NGINX_BACKEND_DOMAIN` is the `server_name` used in NGINX.

3. Go inside folder `./docker` and run `docker-compose up --build` to start containers.

4. Open browser and navigate to your server name. For local development `127.0.0.1`.

5. 😀  Have fun!! 
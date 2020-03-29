#!/bin/bash
docker run -d -p 93:80 -v "$PWD"/../:/var/www/html --name amul-web-architecture-container amul-web-architecture  
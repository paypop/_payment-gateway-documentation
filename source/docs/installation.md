---
title: Installation
description: Getting started with Jigsaw's docs starter template is as easy as 1, 2, 3.
extends: _layouts.documentation
section: content
---

# Installation

ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia uptatem se

## Nodejs 

* Download and install [Nodejs](https://nodejs.org/en/) on your system
* Download and install [PM2](https://pm2.keymetrics.io/) on your system

Then download the project:
    
    git clone https://github.com/Monero-Paris/FollowTX-Monero.git
    cd FollowTX-Monero
    cp .env.example .env
    npm run check
    npm run keys

## Redis

[Redis](https://redis.io/) is a database...
It is easy to install on Mac and Linux.  
If you use Windows, download an old release from [Github](https://github.com/microsoftarchive/redis/releases)

## Mongodb



## Nginx
    
    sudo apt install nginx

## Monero

    wget https://downloads.getmonero.org/cli/linux64
    tar monero.zip

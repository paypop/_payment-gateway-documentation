---
title: Release notes
description: Release notes description
extends: _layouts.documentation
section: content
---

# Setup

- [Introduction](#introduction)
- [Software and tools](#software-and-tools)


<a name="introduction"></a>
## Introduction

Artisan is the command line interface included with Laravel. Artisan exists at the root of your application as the `artisan` script and provides a number of helpful commands that can assist you while you build your application. To view a list of all available Artisan commands, you may use the `list` command:

        php artisan list

Every command also includes a "help" screen which displays and describes the command's available arguments and options. To view a help screen, precede the name of the command with `help`:

    php artisan help migrate

<a name="software-and-tools"></a>
## Software and tools

### Monero cli

<a href="https://www.getmonero.org/downloads/#cli" target="_blank">Download the cli</a>
<pre>
monero-blockchain-ancestry
monero-blockchain-depth
monero-blockchain-export
monero-blockchain-import
monero-blockchain-mark-spent-outputs
monero-blockchain-prune
monero-blockchain-prune-known-spent-data
monero-blockchain-usage
<b>monerod</b>
monero-gen-ssl-cert
monero-gen-trusted-multisig
<b>monero-wallet-cli</b>
<b>monero-wallet-rpc</b>
</pre>

Setup the daemon 

#### Environnement

###### Stagenet 

    monerod --stagenet

###### Production

    monerod --mainnet # or monerod


## Nodejs

<ul>
    <li>
        <a href="https://nodejs.org/en/" target="_blank">Nodejs and npm</a>
    </li>
    <li>
        <a href="https://pm2.keymetrics.io" target="_blank">PM2</a>
    </li>
</ul>

## Mongodb

## Nginx

    server {
  
    }



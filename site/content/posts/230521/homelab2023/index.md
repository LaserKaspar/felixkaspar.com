---
title: "homelab - my personal tinker space"
shortTitle: "homelab"
date: 2023-05-21T23:11:13Z
draft: false
hero: "images/rock64.jpg"
---

This is a summary of my hobby homelab. I like to tinker with new software a lot and I try to find the best fits possible while keeping control of my data and experience. But I mostly do it because I think it's fun. <!--more-->

# Hardware

## 💻 Old Laptop - Acer Aspire VX5

This is the main server. It runs most of the software I use, which I am going to talk about later. Inside is a Intel i5-7300HQ and 16GB of DDR4 RAM and it runs Ubuntu Server. Most of the software it runs is containerized inside docker.

[![Acer](images/acer.jpg)](images/acer.jpg)

## 🍓 Rasperry PI 2

This is the backup server, which I already talked about in [my post about backups.](../backupsolutions) It still runs [urbackup](https://www.urbackup.org/) without any issues. It also keeps some backups of docker-volumes from the main server.

[![Rasperry PI 2](images/rpi2.jpg)](images/rpi2.jpg)

## 🌲 Pine64 Rock64

This sbc is only used when I need something portable or want to try something that might break. It currently runs a [lancache,](https://lancache.net/) because I wanted to do a small lanparty with my friends.

[![Pine64 Rock64](images/rock64.jpg)](images/rock64.jpg)

# Software

## [Outline](https://www.getoutline.com/) {#outline}

This is the newest piece of software that I found. It is a self-hosted alternative to stuff like Obsidian and Notion. I really like I so far but it was pretty hard to set up. It took me almost three days, as I also needed to setup a OIDC server and S3 storage backend. I am now using [Authentik](https://goauthentik.io/) as my Authentication provider and a [minio](https://min.io/) instance for storage.  

[![Outline](images/outline.png)](images/outline.png)

## [Photoprism](https://www.photoprism.app/) {#photoprism}

I use Photoprism to keep my photo-library organized and also to quickly backup new photos of my phone using PhotoSync. I am thinking about replacing it with Immich, which has made great progress over the last view months, but I still haven't made the switch. But it might happen pretty soon especially because the mobile experience is much better!

## [Planka](https://planka.app/) {#planka}

We used Trello for project management in my school, but in the future, I will not have access to my projects there anymore, so I exported them into my planka instance. It is not quite as fully featured as Trello, but it is enough for my small side-projects and as an archive for my old trello projects. 

[![Outline](images/planka.png)](images/planka.png)

## File Browser

File Browser is a simple webapp for accessing files on the server. I'm using it for quickly looking up some files or uploading small amounts of data from other devices which are not connected to the samba share.

[![File Browser](images/filebrowser.png)](images/filebrowser.png)

## Samba

I setup two samba shares for transferring files from and to the server and between devices on my network.

## Tandoor

I started putting some recipes I tried and liked in tandoor but I never really used it to its full potential. It is probably going to be replaced with Outline just because I don't need most of the features Tandoor provides.

## PaperlessNGX

This one is really nice for managing all of my physical paperwork. Especially paired with Paperless Mobile which provides an easy way to scan documents using your phone. It is also used by outline to keep references to the original documents. 

[![PaperlessNGX](images/paperlessngx.png)](images/paperlessngx.png)

## [Homarr](https://homarr.dev/) {#homarr}

Homarr is my landing page. From there I can go to any of my services quickly. Especially for new or experimental services where I can't yet remember their names of the subdomain. It automatically queries nice icons, is easy to set up and looks nice.

[![Homarr](images/homarr.png)](images/homarr.png)

## UptimeKuma

I use UptimeKuma to monitor my services. If one services has an issue, I get notified on discord via a webhook. This is especially useful for my backup server, so it does not fail silently.

[![UptimeKuma](images/uptimekuma.png)](images/uptimekuma.png)

## [AdGuard Home](https://adguard.com/de/adguard-home/overview.html) {#adguard-home}

I primarily use it as a local DNS server to forward my domain to all the services which are in active use.

<hr/>

That's it for now. But I am always on the look for new exciting tech I might try in the future! I am currently looking into an automatic pdf generator solution but have not found something that meets my needs yet.
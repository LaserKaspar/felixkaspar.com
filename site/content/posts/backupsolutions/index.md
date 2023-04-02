---
title: "backup solutions - a story about every backup software I ever used"
shortTitle: "backup solutions"
date: 2022-12-07T23:11:13Z
draft: true
hero: "hero.jpg"
---

Backups are important, and there is no excuse for not making backups. I learned this lesson pretty early and tried many different backup solutions, which saved me a lot of headaches, since. Most of them didn't do exactly what I wanted, so I made a list of pros and cons for each backup software I have used or considered using over the past few years.

<!--more-->

## 📙 Quick overview

| Software                                   | Server          | Incremental | Quick Notes ()   |
|--------------------------------------------|-----------------|-------------|----------------|
| [Windows Backup](#-windows-backup)         | no              | yes         | Don't touch                                            |
| [WD Backup](#-wd-backup)                   | no              | yes         | Unusable if drive gets to small                        |
| [Duplicati](#-duplicati)                   | no              | yes         | Database breaks regularily                             |
| [EaseUS Todo Backup](#-easeus-todo-backup) | no              | yes         |                                                        |
| [rsync](#-rsync)                           | yes             | yes         |                                                        |
| [Borg](#-borg)                             | yes             | yes         | Hard to setup & kind of slow                           |
| [UrBackup](#-urbackup)                     | yes             | yes         | Fast & Reliable, restore speed limited by server speed |
| [kopia](#-kopia)                           | no              | yes         |                                                        |
| [AOMEI Backupper](#-aomei-backupper)       | no              | yes         |                                                        |


## 👿 Windows Backup

Do yourself & your data a favour and don't use this. I tried using it on multiple of my devices over the last few years and something always breaks.

## 👍 WD Backup

This was my main backup software for a long time. It came with my Western Digital drives. It should be noted that it only works with WD drives. I never had problems restoring data, altho it fails silently once the drive is full and there is no easy way to delete an old backup, so I needed to switch between two drives. Once one of the drives got filled up, I deleted the old one and redid a full backup before continuing my normal operation of incremental backups.

## 😠 Duplicati

## ❓ EaseUS Todo Backup

## 😠 rsync

This tool isnt really designed for use as an incremental backup tool, so it is really lacking some of the core features of a good backup programm. If you want to completely copy a system to another one the fastes way possible, this tool is great. But for backups it isn't that great.

## ❓ Borg

## 👍 UrBackup

This is the software I am currently using. It runs on a Rasperry-PI 1 and therefore it isn't the fastest thing ever in restores, but the backups speeds are just insane. It only sends the files that changed to the server and therfore most of the time is spent locally figuring out what files have change since last time. It also supports multiple clients, so if you are looking to backup multiple pc in your home or at work, this tool is perfect! For some people it might be a bit much, as it requires a server, but it is really easy to set up using a spare Raspberry-PI and docker.

Configuring is done mostely over the web-gui. Backups are configurable globally or on a per user basis. It is able to ignore files (e.g. Windows Installation or other stuff you don't want to backup) and you con configure how many of your full/incremental backups you want to keep. Backups can be scheduled atomatically or triggered by the client/server manually. One of the best features in my opinion is the option to run a custom script when a backup completes, I use this to notify my Uptime-Kuma instance that the backup was sucessful, so I can be notified when something breaks, or the server goes offline.

[![UrBackup](https://opengraph.githubassets.com/%3Chash%3E/uroni/urbackup_backend)](https://github.com/uroni/urbackup_backend)

## ❓ kopia

## ❓ AOMEI Backupper
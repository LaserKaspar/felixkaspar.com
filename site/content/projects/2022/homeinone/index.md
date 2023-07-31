---
title: "Home In One - a cross-platform homework-manager"
shortTitle: "Home In One"
date: 2022-09-17T23:11:13Z
draft: false
tags: ["Project", "WebDev"]
ondisplay: true
hero: "hero.png"
summary: "A webapp that aggregates homework from different platforms like ms-teams, moodle and webuntis."
---

## 💪 Motivation

Homework of a typical student in my school is spread across a veriety of different assignment services. In order to check your current assignments, you need to open every app / website, log on and check for new stuff. This project aims to resolve this, by providing a platform which aggregates assignments form every platform in use by our teachers.

{{< file "README.md" >}}

### 📝 All your homework in ONE place!

A web-app to aggregate and display the homework of a student from multiples sites. 
We use many different platforms (e.g. MS Teams, Moodle, Untis) for assignment / homework management at school. This is yet another platform for your homework, but this time it focuses on the student, it will aggregate all homework from all platforms and summarize it in one place.

This tool was developed for use in HTLBLuVA Spengergasse, but I will try to improve it in order to make it school independent in the future.

### 🌐 Selfhostable. For you or even your school.

I tried to make the deployment process as painless as possible. For students at home, if the school does not provide this service, or for the school wanting to give their students a better overview of what they have to do.

Clearly it would be optimal if all teachers in a school agree to only use one platform, but untill then this will improve the life and organisation of many students.

{{< /file >}}

## 🦶 Walkthrough

Once a user opens the website they are asked to login using their account provided by our school. After the initial login they are able to add the services they want to see (choosing between MS-Teams, Moodle, Game and Untis) to their page and once this is set up, every time they go on the website (and are still logged in), they are welcomed with an up to date version of their assignments.

{{< carousel >}}
[![Login flickety](images/login.png)](images/login.png)
[![Layout flickety](images/layout.png)](images/layout.png)
[![Setup flickety](images/setup.png)](images/setup.png)
{{< /carousel >}}

## ⛔ Background

I had the idea to develop the app in 2020, when our school started using MS-Teams and Untis in addition to Moodle and Game (a slightly modified version of Moodle for my department). At that time I quickly put together a prototype and tried to get my current assignments from MS-Teams, but at that time I didn't have the skills to do it. Two years later, since my school still hadn't gotten the problem under control, I tried again. I started once again with MS-Teams, thinking that it would be the program that would cause the most problems (I was right about that). Recently I had worked a lot with NodeJS, so I used it to build this app as well.

For a prototype of the app, I was able to get homework from MS-Ieams using [puppeteer](https://pptr.dev/) (a NodeJS library to drive a Chromium instance). Moodle was much friendlier in that regard: a well-documented REST API made it relatively easy to connect to. I showed the program to a teacher and he told me to ask ZID (our IT department) if they wanted me to develop the software for the whole school. I contacted the student council and the ZID and requested the necessary "rights" to be able to communicate with MS-Teams via its REST-API. Over the summer vacations, as an intern at ZID, I developed HomeInOne to the point where it could be used school-wide.

During that time I learned a lot. I learned more about O-Auth, databases, encryption, docker and web-developement in general. 

## ⚙️ Inner Workings

The Software runs on two different services: HIO-Auth and HIO-Web.

HIO-Web is responsible for presenting data to the user and fetching new data from the different assignment-services via their respective REST-APIs. In order to authenticate these requests, it communicates with HIO-Auth. Once a request is done, the response is rewritten in a universal format the frontend can understand, and gets sent back to the user using socket.io (to avoid a request-timeout).

HIO-Auth is responsible for handeling authentication and storing it in a safe manner. It uses AES-256 to encrypt each users services individually and pbkdf2 to store their passwords in a SQL-Database. To authenticate the users of my school it also talks to the active-directory server of my school on the initial login request.
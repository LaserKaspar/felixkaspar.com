---
title: "Things I found annoying, so I fixed them"
shortTitle: "Things I found annoying"
date: 2025-07-24T13:37:34Z
draft: true
hero: "hero.png"
---

This post is about many things. Mostly things I percieved as small inconviniences - and then spent hours on fixing them.

<!--more--> 

## I listen to a lot of podcasts

I like listening to podcasts and I have some audiobooks on my audiobookshelf instance. Combining them is a bit messy because ABS does not support streaming from rss-feeds. And I don't want to download 1000s of episodes of a podcasts.

To address this issue I built a small FUSE library in go that mounts the files in a virtual filesystem and a custom metadataprovider for ABS wich then supplies ABS with the missing info on the episodes.

## My phone is old

Sonos speakers. God these things are something. I really really like them and I really really hate them. Not only did they break the app. They bricked the app for older Android versions. This and some other minor inconviniences drove me into the whole new rabbithole of rooting my phone. I am currently running EvolutionX Andorid 16 on my 7 year old phone and it runs great.

While I had the opportunity I also replace the battery for €20. Phone is like new, except - you guessed it - some minor inconviniences.

## My clock/alarm app does not support the feature I want

My phone supports booting shortly before an alarm rings. This is really useful as I can now power off my phone when I sleep so am not woken by notifications and more importantly am not enticed to use it in the middle of the night. 

The original app is closed source and for some reason I couldn't find a single (foss) clock app in existance that supports this feature fully. So I made a pr [@BlackyHawky/Clock#293](https://github.com/BlackyHawky/Clock/pull/293) and added the feature I wanted. Really nice it works again now.

## Ikea - The have _almost_ everything

Ikea chairs are great. If they didn't completely destroy my floor because the feet are at such a steep angle that their felt is not touching the floor but instead the hard plastic. Drilled new holes into the chair so the feet can be put in straight. The pins that go into the holes broke. Bought some new ones, the pins broke again. 3D-printed a sleeve that goes onto the edges of the feet and has a straight bottom where I can put some felt. Works great. Hope you don't have the same chairs or if you do, at least hate your floor and if you don't: own a 3D-printer.

Oh and I also bought some insets for my cupboard. Wanted a drawer but Ikea doesn't produce them. I tried to make some out of cardboard, didn't really work. I ordered some custom paper cut ones. Oh boy do they suck, the ones I made were not that much worse but were about 5% of the cost of the custom ones. It's literally a piece of cardboard. I took some more exact meassurements. How hard can it be to manufacture my own. I have a good friend with access to a lasercutter. Asked him, bought some wood and customized a really [nice script I found for lasercut boxes.](https://github.com/larsch/lasercut-box-openscad) Cut the first one. Total disaster. Didn't cut through the wood. Seems like I bought the wrong wood. The burnt edges were really ugly and the fit was terrible and extremely inconsistent. Switched to a CNC machine. Ruined the drill, bought a new one. Ruined again, bought a new one. Ruined it again. I'm definitely doing something wrong. Bought some cheap ones because the expensive ones were, well, expensive. Cut through almost 4 boxes worth of material before we got our first Box. But they turned out really nice. Don't look at price/performace...

## Mice - Not the living ones

My mouse is loud, like really loud. Also it started double clicking... You can decide on wich of these is the real issue. I found this [one guy on reddit that repaced their switches of my mouse](https://www.reddit.com/r/MouseReview/comments/q2l9ko/modding_hotswap_and_silent_g603/). Thought I could do that too. Always wanted to find a reason to soulder something. Researched some switches and ordered them on aliexpress. Should arrive in about a month. Too bad they were delayed by almost another month. Had to use this old really shitty mouse I had lying around, should have just bought a new one but this one guy from wich I wanted to buy a used mouse never answered me. And I didn't want to buy a new one because it's only gonny be a week until the switches arrive. Right? Right?! Switches were stuck at the local airport for three weeks so it was delayed again. Still wairing for them... Hope they fit. I really need a new mouse my hand hurts from the other one.

## Proxmox

Just works. Just kidding, there is absolutely nothing that just works. Wait it actually works if it's configured correctly? Great, planning on moving my homelab services in there. But the main reason I did what I did is because I needed compute accessible from the internet and didn't want to pay for a bigger server. I already rent a kind of good node on contabo. Just need a way to connect it to a node at my home. But I don't really want it in my network, I don't want my network to go down because I gave a friend access to this compute instance. 

Let's just isolate it. That should be easy right? My router can't do subnetworks (next step: new router), I mean it can but only on wifi, I want ethernet. But I am fully virtualized inside proxmox. I can do anything. Setup a vpn host on my contabo server. Connected a container on proxmox to it. Setup a VM that uses said container as gateway for all traffic. For some reason it didn't want to do ssl handshakes. Turns out you need to configure wireguard/iptables to not break them. Learned a lot about networking, really interesting stuff.
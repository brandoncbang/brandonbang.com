---
title: My Note-taking Setup
excerpt: I've settled on a pretty simple but robust note-taking setup, which lets me record my thoughts anywhere with minimal fuss.
date: 2024-01-17
---

After years of using dedicated note apps that either weren't compatible with all the devices I used, or wouldn't support
my file syncing software of choice, I've finally realized that I really didn't need most of the features that those apps
had. As it turns out, a simple folder containing my notes in Markdown format is more than enough to allow me to record
my thoughts from any of my devices without too much fuss.

I use a folder named "Notes" in my home directory that just contains markdown files and subfolders to organize them. I
don't need a WYSIWYG interface, since Markdown is already pretty readable on its own. This means that I can just use any
code editor to manage my notes, rather than a dedicated note-taking app. On my phone, I use
[Markor](https://github.com/gsantner/markor), and on my desktop, I use KDE's built-in
[Kate editor](https://kate-editor.org/), or [PHPStorm](https://www.jetbrains.com/phpstorm/) if I need more powerful
editing features (VS Code also works well). I can add internal links between notes, and globally search through all of
their contents. These editors can also provide a nicely rendered file preview if I'm just reading my existing notes.

Finally, I'm able to access my notes across all my devices using [Syncthing](https://syncthing.net/). Since my notes are
so low-tech, I could use just about any file syncing technology, but for now, I like the decentralization and privacy
Syncthing provides, which encrypts all data before transporting it. This way, I don't have to worry about third parties
who might want to peek at my valuable ideas 😉.

I really like this setup so far. It means that I'm never locked into any one app to manage or sync my notes. It also
means that my notes can be as structured or as freeform as I need. Sometimes I just need to jot something down without
worrying about committing to some complicated note-taking system, and sometimes I need to keep a big chunk of writing
well-organized. I can accomplish both goals with this workflow.

As a bonus, I also use
[Caleb Porzio's `scratch.md` technique](https://calebporzio.com/keep-notes-about-your-laravel-projects-scratch-md),
which lets me keep an untracked scratch file for temporary notes on any Git project I'm working on. Anything more
complicated goes in `~/Notes`.

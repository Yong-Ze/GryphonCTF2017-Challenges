# CAFE BABE IS BABE

## Question Text

HELP!!I NEED THIS FILE FOR MY ASSIGNMENT BUT I CANT OPEN IT ;\_; <br>

Created by paux

## Setup Guide
1. upload files

## Distribution
image for "decrypt"
- IMPORTANTPIECHART.jpg 

## Solution
1.	The first 7 bytes of a jpg header file are changed, disabling it from being opened. 
2.	Using "hexeditor" on linux, edit the front 7 bytes from `ca fe ba be 15 ba be` to `ff d8 ff e0 00 10 4a`
3.	enabling you to be able open the jpg file successfully
4.	The next step is to use photoshop/online tools to retrieve the watermark with the flag on it.

### Flag
`GCTF{f0r3n51c5_15_e45y}`

## Recommended Reads
- personally recommend this for quick checking of images
<br>https://29a.ch/photo-forensics/

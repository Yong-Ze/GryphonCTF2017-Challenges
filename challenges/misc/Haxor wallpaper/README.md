# Haxor wallpaper
Understanding of html and css

<i>Creator - @Platy</i>

## Question
>This cringey script kiddie from YouTube constantly claims that he's an elite hacker. He sent me this file claiming that it's the source code for a wallpaper virus that he had written. I'm really scared to run it. Help me figure out what he sent!
>
>Creator's note: This isn't a virus...

### Hint
Roses are red, violets are blue,

HTML is not a programming language, I'm terrible at rhymes sorry.

## Setup Guide
Toss generate.jpg into this website [picascii](http://picascii.com/) and generate the required html code.

Remove the inline-styling in the `pre` tag.

## Distribution
ASCII text
- hacker.txt `MD5: 21d994494f213d7d8222615009b65abd`

## Solution
It's a html file.

Convert the filetype to `.html` and run.

You can see some text but it's barely readable

<b>Eagle vision method</b>

Stare at the image until you can see the flag. (It's really hard. My eyes aren't powerful enough)

<b>CSS method</b>

Edit the line spacing and character spacing using CSS.
```css
/* solution.css */
pre {
	font: 10px/5px monospace;
}
```
Link the file in html.

`<link rel = "stylesheet" type = "text/css" href = "solution.css">`

![solution](solution/solution.jpg)

### Flag
`GCTF{y0u_41n7_h4x0rm4nz}`

## Credits
http://picascii.com/


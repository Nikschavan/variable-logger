# Variable Logger #

Replacement for `print_r()` and `var_dump()`.

## Description ##

Variable Logger provides a replacement function `vl()` for `print_r()` and `var_dump()` with some default styling for your variable ourputs.

Usage - 

`vl( $foo )` to use `print_r()` funcion, and `vl( $foo, true )` to use `var_dump()`

## Installation ##

A. Simple.

Install as a WordPress plugin.

1. Download the latest [ZIP](https://github.com/Nikschavan/variable-logger/archive/master.zip) file of this repo.
2. Install and activate as a simple plugin in your WordPress site.

B. Pro.

Install as a WordPress mu-plugin.

1. Make a folder `/wp-content/mu-plugins` if it does not exist in your WordPress devlopment enviornment.
2. Open up git inside `mu-plugins`, and add a remote - `git add remote origin git@github.com:Nikschavan/variable-logger.git`
3. Pull the latest plugin files - `git pull origin master`

## Contribute ##

Wan't to improve these functions? 

1. Create an [issue](https://github.com/Nikschavan/variable-logger/issues)
2. Fork this repo.
3. Submit a pull request!
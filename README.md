# how-to-php-cli
A guide on how to write a PHP script that will be run as a cli utility or tool.

something like:
```bash
utility -x -a -vvv --input=some/file --output=another/file
```
Although I use the object oriented approach to PHP on a daily basis, I will not use objects or classes
in this repo.
Mainly because I want to keep the code and the amount of files as small as possible. I also want to explore
the more functional side of coding in general and PHP espcially.
Another reason to stick to the functional approach is portability. There are still servers out there
runnig PHP 5.x. I might restrict the script to run only on PHP >= 7 simply because I like to leverage
PHP's type declarations.

## Who is it for?
The main audience is myself. I am using PHP in my daily job and I want to become more proficient
in its use. I also want to transfer the knowledge gained by writing and coding this guide to other
languages that I either already know or will learn down my career path.

If it reaches a point that I deem presentable to the world, I will also share it with trainees
and colleagues who also might be interested in the topic.

## Structure
I will put the topics I want to cover into groups and create a branch for each topic group.
While I will merge all the branches into the main branch, I will still keep the other branches
so whoever wants to follow along can check out the branches one by one.

I will also add some form of explanations for each branch in the form of a markdown file and link to sources
I found during the process.

## Things I want to cover:
1. make script runable without prefixing php
2. check env before actual script => ensure dependencies and env are set up correctly
3. interactive input
4. parse args from stdin
5. handle key press events(ctrl+c, y-n-options)
6. set process name && style output
7. add script to bin

## Topic groups:
- 1 & 2
- 4
- 3 & 5
- 6 & 7

## Prerequisits:
1. basic knowledge of PHP
1. basic knowledge of interacting with a terminal
1. running linux when following the guide
1. PHP > 7.4 is installed

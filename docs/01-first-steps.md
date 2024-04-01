# 01-first-steps

The first steps are:
1. make script runable without prefixing php
1. check env before actual script

The most common way to run a PHP script on the cli is with the `php` command  like so:
```bash
php /path/to/utility.php
```

This is inconvenient. To make it executable without the explicit use of the `php` command two
conditions need to be fullfilled(assuming that PHP is already installed):
1. use the shebang `#!/usr/bin/env php` or `#!/usr/bin php` in the very first line of the script
1. make the script executable using `chmod +x /path/to/utility.php`

`#!/usr/bin/env` lets the operating system find the PHP interpreter in the user's $PATH, while `#!/usr/bin` just looks in the 
`/bin` directory.
There is no guarantee that PHP is installed in `/bin` which is mitigated by using `env`.

After running the chmod command on `utility.php`, it can be executed without the `php` command.
```bash
./path/to/utility.php
```


Portability is very important for a cli tool or utility. Portability requires the script to run properly on any
arbitrary machine it runs on or to at least fail with an appropriate error message.

To achieve that, the script has to check the environment it runs in, before actually executing any code.
The script can check if:
- needed extensions are installed (e.g. bcmath)
- the minimum requirements for the PHP version are met
- any (required or optional) arguments are provided to the script (more on this later)


PHP comes with built in methods to check any loaded extension and the current version it is running:
- [current version](https://www.php.net/manual/en/function.phpversion.php)
- [loaded extension](https://www.php.net/manual/en/function.extension-loaded.php) 


Although it technically is not necessary, I already wrapped the checks into a function and called it at the end of the script.
This will be necessary as more functionality is added.


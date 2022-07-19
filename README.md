# ![Logo](assets/pc-logo-16x16.png) Phantom Cookies
Daily new cookies with Phantom Cookies.
## Requirements
### PhantomJS
```
wget -O /tmp/phantomjs.tar.bz2 https://bitbucket.org/ariya/phantomjs/downloads/phantomjs-2.1.1-linux-x86_64.tar.bz2 # 64-bit
# wget -O /tmp/phantomjs.tar.bz2 https://bitbucket.org/ariya/phantomjs/downloads/phantomjs-2.1.1-linux-i686.tar.bz2 # 32-bit
tar -xf /tmp/phantomjs.tar.bz2 -C /tmp
rm -rf /tmp/phantomjs.tar.bz2
mv /tmp/phantomjs-2.1.1-linux-x86_64/bin/phantomjs /usr/local/bin/phantomjs # 64-bit
# mv /tmp/phantomjs-2.1.1-linux-i686/bin/phantomjs /usr/local/bin/phantomjs # 32-bit
rm -rf /tmp/phantomjs-2.1.1-linux-x86_64 # 64-bit
# rm -rf /tmp/phantomjs-2.1.1-linux-i686 # 32-bit
chmod?
```
## Install
```
wget -O /tmp/phantomcookies.tar.gz https://github.com/soosdaniel120/phantomcookies/archive/refs/tags/v0.1.tar.gz
tar -xf /tmp/phantomcookies.tar.gz -C /tmp
rm -rf /tmp/phantomcookies.tar.gz
mv /tmp/phantomcookies-0.1 /var/www/phantomcookies
```
## Usage
First example:
```
http://localhost/phantomcookies/?url=https://example.com
```
Second example:
```
http://localhost/phantomcookies/?host=example.com
```
## Logo
[chipplays](https://www.fiverr.com/chipplays)

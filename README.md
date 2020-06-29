# Before install.
Build a PHP Environment. If you use CentOS 7,
```
# yum -y install httpd php
```

# Installation.
```
# cd /var/www/html
# mkdir json_outputter
# cd json_outputter
# git clone https://github.com/KunioHayakawa/json_outputter.git
```

# Access http://localhost/json_putter/json_putter.php
```
# curl -X GET http://localhost/json_outputter/json_outputter.php
(You'll see a message below.)
{"name":"kunipon","age":"20"}
```

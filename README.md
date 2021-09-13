# calculator
non precedence calculator
![Screenshot](https://github.com/sinakhoshdel/calculator/blob/main/assets/Screenshot.png "non precedence calculator")
<br>
<h3>Installation steps:</h3>
you can clone this to your xammp or any other local server you have and the only change you need is this:
open assets/js/app.js line 20 change the ajax URL to your localhost host
for example:
<pre>http://localhost:8080/ampion</pre>

but If you want to have it on your own follow these steps:

1- add this to your host file
<pre>
127.0.0.1 dev.calculator.com
</pre>
2-add this to httpd.conf
<pre>
<Directory "C:/Users/{your username}/workspace">
     AllowOverride      All
     Order              Deny,Allow
     Allow              from all
Require all granted
</Directory>
<VirtualHost *:80>
    ServerAdmin webmaster@dummy-host.example.com
    DocumentRoot "C:/Users/sinak/workspace/calculator"
    ServerName  dev.calculator.com
    ErrorLog logs/calculator-error_log
</VirtualHost>
</pre>

3-Restart your appache and reach dev.calculator.com


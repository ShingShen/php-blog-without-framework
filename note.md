If you want to enbedd facebook pages, the page visibility must be published.<br>
The facebook plugin would not show in html file,<br>
You need to start in localhost to show this.<br>

# live-server:
only be used to run html file


# CKEditor 5:
copy and paste the CDN<br>
copy and paste the configuration into the js file<br>
connect the id<br>


# Emmet Command:
Alt+D - select multiple positions to edit at the same time<br>

In md file, Ctrl+Shift+V can browse the md file<br>


# phpMyAdmin:
create the database called blog in phpmyadmin,<br>
and table called users in the database.<br>

The table has to contain following contents:<br>
```
Name       Type        Length/Valuses   Default             Index
id         INT         11               None                PRIMARY A_I YES
admin      TINYINT                      None                ---
username   VARCHAR     255              None                ---
email      VARCHAR     255              None                UNIQUE
password   VARCHAR     255              None                ---
create_at  TIMESTAMP                    CURRENT_TIMESTAMP   ---
```

# PHP:
define():Defines a named constant<br>

var_dump(): dumps information about a variable<br>

include: The include expression includes and evaluates the specified file.<br>

require: require is identical to include except upon failure it will also produce a fatal E_COMPILE_ERROR level error. In other words, it will halt the script whereas include only emits a warning (E_WARNING) which allows the script to continue.
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
create the database called **blog** in phpmyadmin,<br>
and create tables called **users**, **posts** and **topics** in the database.<br>

The tables have to contain following contents<br>
**users:**<br>
```
Name         Type        Length/Valuses   Default            Null    Index
id           INT         11               None                       PRIMARY A_I YES
admin        TINYINT                      None                       ---
username     VARCHAR     255              None                       ---
email        VARCHAR     255              None                       UNIQUE
password     VARCHAR     255              None                       ---
create_at    TIMESTAMP                    CURRENT_TIMESTAMP          ---
```
**topics:**<br>
```
Name         Type        Length/Valuses   Default            Null    Index
id           INT         11               None                       PRIMARY A_I YES
name         VARCHAR     100              None                       UNIQUE
description  TEXT                         None                       ---
```
**posts:**<br>

```
Name         Type        Length/Valuses   Default             Null   Index
id           INT         11               None                       PRIMARY A_I YES
user_id      INT         11               None                       ---
topic_id     INT         11               None                Yes    ---
title        VARCHAR     255              None                       ---
image        VARCHAR     255              None                       UNIQUE
body         TEXT                         None                       ---
published    TINYINT                      None                       ---
create_at    DATETIME                     CURRENT_TIMESTAMP          ---
```
**topic_id** need to coonet to the **id** in **topics**<br>
The setting is as following:<br>
blog -> posts -> Structure -> Relation view<br>
```
Foreign key constraints
---------------------------------------------------------------------------------------------
|Action  | Constraint properties                 |Column   |Foreign key constraint(INNODB)  |
---------------------------------------------------------------------------------------------
|        |                                       |         |Database   |Table   |Column     |
---------------------------------------------------------------------------------------------
|        |ON DELETE(SET NULL) ON UPDATE(CASCADE) |topic_id |blog       |topic   |id         |
---------------------------------------------------------------------------------------------
```

# PHP NOTE:
**define():** Defines a named constant<br>

**var_dump():** dumps information about a variable<br>

**include:** The include expression includes and evaluates the specified file.<br>

**require:** require is identical to include except upon failure it will also produce a fatal E_COMPILE_ERROR level error. In other words, it will halt the script whereas include only emits a warning (E_WARNING) which allows the script to continue.<br>

**double arrow operator =>:** is used in associative array key value assignment<br>

**object operator ->:** is used to access an object method or property<br>

**$stmt:** Represents a prepared statement.<br>

**affect_rows:** Returns the total number of rows changed, deleted, inserted, or matched by the last statement executed<br>

**execute():** Executes a prepared statement<br>

**get_result():** Gets a result set from a prepared statement<br>

**fetch_all():** Fetch all result rows as an associative array, a numeric array, or both<br>

**MYSQLI_ASSOC:** makes the function behave like **mysqli_fetch_assoc()** function, fetching an associative array<br>
**MYSQLI_NUM:** makes the function behave like **mysqli_fetch_row()** function, fetching a numeric array<br>
**MYSQLI_BOTH:** stores the data fetched in an array that can be accessed using both column indexes as well as column names<br>

**die():** Equivalent to exit<br>

**exit():** Output a message and terminate the current script<br>

**prepare():** Prepares an SQL statement for execution<br>

**print_r(mixed, bool):** Prints human-readable information about a variable<br>

**session_start():** Start new or resume existing session<br>

**array_values():** Return all the values of an array<br>

**str_repeat(string, int):** Repeat a string<br>

**bind_param(string, mixed, ...mixed):** Binds variables to a prepared statement as parameters<br>

**isset():** Determine if a variable is declared and is different than null<br>

**unset():** Unset a given variable<br>

**array_push():** Push one or more elements onto the end of array<br>

**password_hash():** Creates a password hash<br>

**password_verify(string, string):** Verifies that a password matches a hash<br>

**htmlentities():** Convert all applicable characters to HTML entities<br>

**html_entity_decode():** Convert HTML entities to their corresponding characters<br>

**move_uploaded_file():** Moves an uploaded file to a new location<br>

**Equal == :** **TRUE** if $a is equal to $b after type juggling.<br>
**Identical === :** **TRUE** if $a is equal to $b, and they are of the **same type**.<br>

**date():** Format a local time/date<br>

**strtotime():** Parse about any English textual datetime description into a Unix timestamp<br>

**substr():** Return part of a string<br>

# Others
If you want to enbedd facebook pages, the **page visibility** must be published.<br>
The **facebook plugin** would not show in html file,<br>
You need to start in localhost to show this.<br>

**register-btn check**
```
<?php
if (isset($_POST['register-btn'])) {
    var_dump($_POST);
    die();
}
?>
```

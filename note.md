If you want to enbedd facebook pages, the **page visibility** must be published.<br>
The **facebook plugin** would not show in html file,<br>
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

# PHP NOTE:
**define():** Defines a named constant<br>

**var_dump():** dumps information about a variable<br>

**include:** The include expression includes and evaluates the specified file.<br>

**require:** require is identical to include except upon failure it will also produce a fatal E_COMPILE_ERROR level error. In other words, it will halt the script whereas include only emits a warning (E_WARNING) which allows the script to continue.<br>

**double arrow operator =>:** is used in associative array key value assignment<br>

**object operator ->:** is used to access an object method or property<br>

**$stmt:** Represents a prepared statement.<br>

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

**bind_param():** Binds variables to a prepared statement as parameters<br>

**isset():** Determine if a variable is declared and is different than null<br>

**unset():** Unset a given variable<br>

**array_push():** Push one or more elements onto the end of array
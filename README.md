# PHP_Proficiency_Assessment
I built a CRUD system and a CSV Generator with HTML, BOOTSTRAP, mySQL and PHP.

## General Instruction:
 1.)Place the downloaded folder in you 'htdocs' folder located in the xampp installation folder usualy found in this directory 'C:\xampp'.
 
## Database Instructions:
 1.)Start the 'xampp'program  on your computer and make sure that the Apache Server and MySQL modules are started and running.
 2.)Enter 'localhost' in your browser's URL bar.
 3.)In localhost Select 'PhpMyAdmin' and log into your account if it's a new non-customized installation username should be 'root' and password would likely      be empty.
 4.)In PhpMyAdmin create a new database called 'users_db'.
 5.)Select the 'users_db' in the pane on the left and then click on the import tab on the top.
 6.)Click on choose file and navigate to the 'database' folder in the downloaded project folder.
 7.)Select 'users_db.sql' and import the sql file to PhpMyAdmin and click on go.

## Test 1 Instructions:

### Side Note

Due to the clarity of the requirements I was unable to establish 
the exact enquiry specs whether the input type for DoB should be a date or a text input, but for relative purposes I picked the input type 
as date seeing as mySQL will not recognise the date format dd/mm/yyyy, only when the input type 
is a text/string input which in my personal opinion defeats the objective.

 1.)Open the 'save.php' file found in the 'Test 1' folder.
 2.)Change the '$username' variable value to match the username of your PhpMyAdmin username.
 3.)Change the '$password' variable value to match the password of your PhpMyAdmin password.
 4.)Save the changes.
 5.)In your browser search localhost followed by the path to the 'Test 1' folder and open the 'index.html' file, 'localhost/php-assessment/Test1/index.html'.
 6.)Enter your data according to the form input lables into the fields and click on post to save the data to the database.

## Test 2 Instructions:

### Side Note: 

Please go to the following directory path 'C:\xampp\php' on your local machine and open your 'php.ini' file with your text or code editor and then press 'ctrl + F' to open your document find/search box, enter 'max_execution_time' into the search box and click on 'Find Next' the default value is set to 120 secs please change this to 20000 secs in order to upload the output.csv file when testing as it takes a rather long time to insert 1,000,000 entries into the database.

Also change the following in the php.ini file by searching for 'memory_limit' and change it to 2048M for a faster import experience

(I have added 100,000 entries for testing purposes but it is possible to upload millions of entries.

 1.)Open the 'saveToDB.php' file found in the 'Test 2' folder.
 2.)Change the '$username' variable value to match the username of your PhpMyAdmin username.
 3.)Change the '$password' variable value to match the password of your PhpMyAdmin password.
 4.)Save the changes.
 5.)In your browser search localhost followed by the path to the 'Test 2' folder and open the 'index.html' file, 'localhost/php-assessment/Test2/index.html'.
 6.)Enter your data according to the form input lables into the fields and click on 'Generate' button to generate a CSV file which will be saved in the         output folder.
 7.)To import a csv file return to the index.html page and select the 'Choose file' option and upload the csv file found in the 'output' folder then select     import.

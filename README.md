# robot-controls-ui
*simple 5 buttons interface that uses MySQL to record inputted data*

This UI uses PHP to forward the input to a MySQL database
in these files I uploaded the Database is ***directions*** and
the table is ***input***.
You can modify the files to whatever database name(and/or login credentials) you want,
simply modify the html file to target your php file and in the php
file just point at whatever name, password, user, your database has.
![image](https://github.com/ik4ito/robot-controls-ui/assets/20155686/b2c98c60-9175-43fc-b20b-dc9404903bf7)

Update 1:
I made an additional file that is named "fetch.php". This file shows the ID of the last input
and the input direction. ~~The addition of this file needed a change to the UI page, I converted it to
php so that I can include the fetch page inside it. I did this so that I try as much as possible
to make the requirements without any additional dependencies, so it is a much easier UI to run
in any device without worrying about installing dependencies and third-party apps.~~ __READ UPDATE 2__


![image](https://github.com/ik4ito/robot-controls-ui/assets/20155686/2db09131-5bae-4297-994c-1fc682dbf40d)

21 is the database entry id.


![image](https://github.com/ik4ito/robot-controls-ui/assets/20155686/574f68d9-4fd9-46d6-9ac0-b7b19488d542)


I also added the column (ID) to the database (autoincrement); so that I can use the function (max_id) to get the last entry.


Update 2:
I optimized the code, making the "fetch.php" file update instantly with every click,
and I managed to change the way the SQL request were made using javascript, previously it was
a page opening another page which caused the HTML page to be redricted with every click.
This implementation does not work if I want to add a canvas, as it would be not practical 
for the user to bo back to the page everytime when he is drawing the flow of motion.
I changed it to make it an HTML request to the PHP file location.
I do not need to <include> the php file anymore this way and I can provide the drawing canvas
in an implementation that works flawlessly and updates instantenly. I also added a reset 
button to the canvas.


![image](https://github.com/ik4ito/robot-controls-ui/assets/20155686/da6682f3-cc52-49ff-82d2-1f0643c30d87)

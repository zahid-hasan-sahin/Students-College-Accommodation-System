# **-Project Overview**
Students’ College Accommodation System provides facility of manage admission
system of a college. Student can apply a for a college and Accommodation manager can
manage her/his request application based on availability of the requested college.there
are three modules of the system: 
- 			admin
- 			student 
- 			Accommodation manager
#**-Tools & technology usage**
Html , Css, Javascript, Php , Mysql
#### -System Module
Admin:
admin cam manages the website and the database of the system.
Admin can set up the database with the information on all users
involved, including their username, password and user level. ⦁
Admin can add new user, and edit and delete any information on
current users.

Student:
A student can login to website by taking login info from admin.
a student can apply for a college accommodation by filling up a
form in the system.

Manager:
A Accommodation Manager can login to website by taking login
info from admin .Accommodation Manager can approve/reject the
application based on availability of the requested college.
-Module Functionality
##### Admin:
● Create new user
● Edit existed user
● Delete user
##### Student:
● Edit own info
● Apply for a college
● View request status
##### Manager:
● Edit own info
● manage request application based on availability
● View all request based on availability

# -User Manual
First of all we have to download xampp. We can download it from from
Google and install it.
Now we have to open xampp control panel and start apache server and mysql database.
![](https://ibb.co/pLyn6nq)
After that we have to set up our database .for that open a browser and go to
http://localhost/phpmyadmin/ and create a new database named managementsystem.
Now we have to import our .sql file for that select out database managementsystem
and go to import and upload our managementsystem.sql file that is given with our
project and click go. After that all tables that neeed for our project will be inserted.
So out database configration is done.
now we have to go http://localhost/project/ for access out website.
Now we can login with username:admin , password:1234(default) for access as admin.
So we can add new user,edit user , delete a user if we had login as a admin.
For add a student we have to select student and input data and click add. Then data will
be autometically inserted into student table.for insert a database manager we have to
select manager.
We can edit data of a student/manager.
For that we have to go edit tab and insert the username of student/manager and click
search after that we can refill our page and click update for update user data.
Admin can also delete user for that go to delete tab and choose a username for deletion.
We can click logout for logout from admin.
Now we can again login as a student/manager(created by admin)
This is the view when a user login as a student.
he/she can edit his/her data from edit tab.
He can apply for a existed college from apply tab.
Student can select college for application. And the application will be send to the
respective college manager.
Also student can application status.
We can click logout .
Now we can login as a manager by given correct username and password(given by
admin)
Manager can edit own data(profile).
And manage studen application request based on availability of the requested college.

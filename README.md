<h1>Project Overview</h1>

Students’ College Accommodation System  provides facility of manage admission system of a college. Student can apply a for a college and Accommodation manager can manage her/his request application based on availability of the requested college.there are three modules of the system: (1)admin (2)student (3)Accommodation  manager

<h1>Tools & technology usage</h1>

Html , Css, Javascript, Php , Mysql

**-System Module**

**Admin:**

admin cam manages the website and the database of the system. Admin can set up the database with the information on all users involved, including their username, password and user level. ⦁ Admin can add new user, and edit and delete any information on current users.

**Student:**

A student can login to website by taking login info from admin. a student can  apply for a college accommodation by  lling up a form in the system.

**Manager:**

A Accommodation Manager can login to website by taking login info from admin .Accommodation Manager can  approve/reject the application based on availability of the requested college.

<h1>Module Functionality</h1>

**Admin:**

- Create new user
- Edit existed user
- Delete user

**Student:**

- Edit own info
- Apply for a college
- View request status

**Manager:**

- Edit own info
- manage request application based on availability
- View all request based on availability

<h1>Database design</h1>

![database](https://i.ibb.co/Kzg26mY/Aspose-Words-b9253608-d095-406d-859e-18df2f7bd153-001.jpg")

<h1>User Manual</h1>

First of all we have to download xampp. We can download it from from Google and install it.

![alt text](https://i.ibb.co/HFfCJgx/Aspose-Words-b9253608-d095-406d-859e-18df2f7bd153-002.png)

Now we have to open xampp control panel and start apache server and mysql database.

![alt text](https://i.ibb.co/6XcSY0M/Aspose-Words-b9253608-d095-406d-859e-18df2f7bd153-003.png)

After that we have to set up our database .for that open a browser and go to <http://localhost/phpmyadmin/>and create a new databasenamed **managementsystem.**

![alt text](https://i.ibb.co/3y4CHch/Aspose-Words-b9253608-d095-406d-859e-18df2f7bd153-004.jpg)

Now we have to import our .sql  le for that select out database **managementsystem** and go to import and upload our **managementsystem.sql**  le that is given with our project and click go. After that all tables that neeed for our project will be inserted.

![alt text](https://i.ibb.co/W3ctv9h/Aspose-Words-b9253608-d095-406d-859e-18df2f7bd153-005.jpg)

So out database con gration is done.

now  we have to go<http://localhost/project/>for accessout website.

Now we can login with username:admin , password:1234(default) for access as admin.

![alt text](https://i.ibb.co/Dpn95Dm/Aspose-Words-b9253608-d095-406d-859e-18df2f7bd153-006.jpg)

So we can add new user,edit user , delete a user if we had login as a admin.

![alt text](https://i.ibb.co/1bkzKQf/Aspose-Words-b9253608-d095-406d-859e-18df2f7bd153-007.jpg)

For add a student we have to select student and input data and click add. Then data will be autometically inserted into student table.for insert a database manager we have to select manager.

We can edit data of a student/manager.

For that we have to go edit tab and insert the username of student/manager and click search after that we can re ll our page and click update for update user data.

![alt text](https://i.ibb.co/9qQzRQd/Aspose-Words-b9253608-d095-406d-859e-18df2f7bd153-008.jpg)

![alt text](https://i.ibb.co/xftdLXz/Aspose-Words-b9253608-d095-406d-859e-18df2f7bd153-009.jpg)

Admin can also delete user for that go to delete tab and choose a username for deletion.

![alt text](https://i.ibb.co/n7p1012/Aspose-Words-b9253608-d095-406d-859e-18df2f7bd153-010.jpg)

We can click logout for logout from admin.

Now we can again login as a student/manager(created by admin)

![alt text](https://i.ibb.co/ScKDCQK/Aspose-Words-b9253608-d095-406d-859e-18df2f7bd153-011.jpg)

This is the view when a user login as a student.

he/she can edit his/her data from edit tab.

He can apply for a existed college from apply tab.

Student can select college for application. And the application will be send to the respective college manager.

![alt text](https://i.ibb.co/kXCxn9Q/Aspose-Words-b9253608-d095-406d-859e-18df2f7bd153-012.jpg)

Also student can application status.

![alt text](https://i.ibb.co/pKfv1g5/Aspose-Words-b9253608-d095-406d-859e-18df2f7bd153-013.jpg)

We can click logout .

Now we can login as a manager by given correct username and password(given by admin)

![alt text](https://i.ibb.co/D1YSH3Y/Aspose-Words-b9253608-d095-406d-859e-18df2f7bd153-014.jpg)

Manager can edit own data(pro le).

And manage studen application request based on availability of the requested college.

![alt text](https://i.ibb.co/pb6STRY/Aspose-Words-b9253608-d095-406d-859e-18df2f7bd153-015.jpg)

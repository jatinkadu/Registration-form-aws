1.Download Xampp and MySQL server.
2.Login in aws console
3.Go to security group,create a security group with name 'rds security' with inbound rules:
  a. Custom TCP AnywhwereIPV4  0.0.0.0/0
  b.HTTP AnywhwereIPV4  0.0.0.0/0.
  c. HTTPS  AnywhwereIPV4  0.0.0.0/0.
  d. MySQL/AUORA  AnywhwereIPV4  0.0.0.0/0

4.Create a database in aws rds:
   a. Select standard create.
   b. Give a name to database.
   c. Select MySQL.
   d. Select Free tier.
   e. Select default vpc and in security remove default add 'rds security'.
   e. Keep everything default and click create.
5.In your PC go to MySQL Workbench.
6.Add new connection, give any connection name.
  a. Keep connection method deafult(TCP).
  b.Username is the admin.
  c.Password : Click 'store in vault' enter password.
  d.Click test connection.

7. When editor open then run this query:
        create database college_registration;
        use college_registration;
        
        create table student_details 
        (`sid` int(9) not null auto_increment,
         `roll_number` int(19),
         `full_name` varchar(200),
         `email` varchar(20), 
         `mobileno` int(10),
         `major` varchar(300),
         primary key(sid)
        );
        
        select *from student_details;

8.Open xampp server click on start for both apache and mysql.
9.Clone this repo and copy the index.html and registration.php file in C:/xampp/htdocs/

10. Go to browser and search localhost click enter and form will open .
11. Enter data click on submit.
12. Run the select * query open in mysql workbench.
13. Thank you!


CREATE DATABASE FORM_MANAGEMENT;

USE FORM_MANAGEMENT;

CREATE TABLE USERS(id int(10) NOT NULL AUTO_INCREMENT,
					name VARCHAR(20) NOT NULL,
					password VARCHAR(20) NOT NULL,
					usertype ENUM('A', 'E', 'R') NOT NULL,
					phone VARCHAR(12) NOT NULL,
					email varchar(25) NOT NULL,
					PRIMARY KEY (id));

 
/*INSERT INTO USERS VALUES('1','admin','admin','A','9999999999','admin@admin.COM');

/* Here form_title should be same as the table name of the corresponding form*/
create table form_list(form_title varchar(20),
						form_desc varchar(100),
						form_img_path varchar(255),
						primary key(form_title));
						
						
Create table signatures(userid int(20) not null,
			signaturepath varchar(40) not null,
			primary key(userid),
			foreign key(userid) references users(id));

insert into form_list values("attendance_report","Form keeps track of All students attendance","B:\Phani_M_Tech_Files\M_Tech_2nd_Sem\Web Security\assignment\form_management_mini_project_REPOSITORY\OnlineFormManagementSystem\trunk\CODEBASE1\WEB\images\attendance_report.jpg");

create table attendance_report(
			form_name varchar(20),
			signed_by int(20),
			degree varchar(20) not null,
			semester varchar(2) not null,
			exam_MMYYY varchar(20) not null,
			branch varchar(20),
			subject varchar(20),
			subcode varchar(20),
			centre varchar(20),
			usn_frm varchar(20),
			usn_to varchar(20),
			date varchar(20),
			time_frm varchar(20),
			time_to varchar(20),
			usn1 varchar(20) not null,bookletno1 varchar(20) not null,stu_sign1 varchar(20) not null,add_booklet1 varchar(20) not null,total_booklet1 varchar(20) not null,
			usn2 varchar(20) not null,bookletno2 varchar(20) not null,stu_sign2 varchar(20) not null,add_booklet2 varchar(20) not null,total_booklet2 varchar(20) not null,			
			usn3 varchar(20) not null,bookletno3 varchar(20) not null,stu_sign3 varchar(20) not null,add_booklet3 varchar(20) not null,total_booklet3 varchar(20) not null,
			usn4 varchar(20) not null,bookletno4 varchar(20) not null,stu_sign4 varchar(20) not null,add_booklet4 varchar(20) not null,total_booklet4 varchar(20) not null,			
			usn5 varchar(20) not null,bookletno5 varchar(20) not null,stu_sign5 varchar(20) not null,add_booklet5 varchar(20) not null,total_booklet5 varchar(20) not null,
			usn6 varchar(20) not null,bookletno6 varchar(20) not null,stu_sign6 varchar(20) not null,add_booklet6 varchar(20) not null,total_booklet6 varchar(20) not null,			
			usn7 varchar(20) not null,bookletno7 varchar(20) not null,stu_sign7 varchar(20) not null,add_booklet7 varchar(20) not null,total_booklet7 varchar(20) not null,
			usn8 varchar(20) not null,bookletno8 varchar(20) not null,stu_sign8 varchar(20) not null,add_booklet8 varchar(20) not null,total_booklet8 varchar(20) not null,			
			usn9 varchar(20) not null,bookletno9 varchar(20) not null,stu_sign9 varchar(20) not null,add_booklet9 varchar(20) not null,total_booklet9 varchar(20) not null,primary key(form_name),
			foreign key(signed_by) references signatures(userid));
/*			usn10 varchar(20) not null,bookletno10 varchar(10) not null,stu_sign10 varchar(20) not null,add_booklet10 varchar(10) not null,total_booklet10 int(2) not null,			
			usn11 varchar(20) not null,bookletno11 varchar(10) not null,stu_sign11 varchar(20) not null,add_booklet11 varchar(10) not null,total_booklet11 int(2) not null,
			usn12 varchar(20) not null,bookletno12 varchar(10) not null,stu_sign12 varchar(20) not null,add_booklet12 varchar(10) not null,total_booklet12 int(2) not null,			
			usn13 varchar(20) not null,bookletno13 varchar(10) not null,stu_sign13 varchar(20) not null,add_booklet13 varchar(10) not null,total_booklet13 int(2) not null,
			usn14 varchar(20) not null,bookletno14 varchar(10) not null,stu_sign14 varchar(20) not null,add_booklet14 varchar(10) not null,total_booklet14 int(2) not null,			
			usn15 varchar(20) not null,bookletno15 varchar(10) not null,stu_sign15 varchar(20) not null,add_booklet15 varchar(10) not null,total_booklet15 int(2) not null,
			usn16 varchar(20) not null,bookletno16 varchar(10) not null,stu_sign16 varchar(20) not null,add_booklet16 varchar(10) not null,total_booklet16 int(2) not null,			
			usn17 varchar(20) not null,bookletno17 varchar(10) not null,stu_sign17 varchar(20) not null,add_booklet17 varchar(10) not null,total_booklet17 int(2) not null,			
			usn18 varchar(20) not null,bookletno18 varchar(10) not null,stu_sign18 varchar(20) not null,add_booklet18 varchar(10) not null,total_booklet18 int(2) not null,
			usn19 varchar(20) not null,bookletno19 varchar(10) not null,stu_sign19 varchar(20) not null,add_booklet19 varchar(10) not null,total_booklet19 int(2) not null,			
			usn20 varchar(20) not null,bookletno20 varchar(10) not null,stu_sign20 varchar(20) not null,add_booklet20 varchar(10) not null,total_booklet20 int(2) not null,
			usn21 varchar(20) not null,bookletno21 varchar(10) not null,stu_sign21 varchar(20) not null,add_booklet21 varchar(10) not null,total_booklet21 int(2) not null,			
			usn22 varchar(20) not null,bookletno22 varchar(10) not null,stu_sign22 varchar(20) not null,add_booklet22 varchar(10) not null,total_booklet22 int(2) not null,
			usn23 varchar(20) not null,bookletno23 varchar(10) not null,stu_sign23 varchar(20) not null,add_booklet23 varchar(10) not null,total_booklet23 int(2) not null,			
			usn24 varchar(20) not null,bookletno24 varchar(10) not null,stu_sign24 varchar(20) not null,add_booklet24 varchar(10) not null,total_booklet24 int(2) not null,
			usn25 varchar(20) not null,bookletno25 varchar(10) not null,stu_sign25 varchar(20) not null,add_booklet25 varchar(10) not null,total_booklet25 int(2) not null,			
			usn26 varchar(20) not null,bookletno26 varchar(10) not null,stu_sign26 varchar(20) not null,add_booklet26 varchar(10) not null,total_booklet26 int(2) not null,
			usn27 varchar(20) not null,bookletno27 varchar(10) not null,stu_sign27 varchar(20) not null,add_booklet27 varchar(10) not null,total_booklet27 int(2) not null,			
			usn28 varchar(20) not null,bookletno28 varchar(10) not null,stu_sign28 varchar(20) not null,add_booklet28 varchar(10) not null,total_booklet28 int(2) not null,
			usn29 varchar(20) not null,bookletno29 varchar(10) not null,stu_sign29 varchar(20) not null,add_booklet29 varchar(10) not null,total_booklet29 int(2) not null,			
			usn30 varchar(20) not null,bookletno30 varchar(10) not null,stu_sign30 varchar(20) not null,add_booklet30 varchar(10) not null,total_booklet30 int(2) not null,
*/			
			/*SET FOREIGN_KEY_CHECKS=0;
CREATE DATABASE FORM_MANAGEMENT;

USE FORM_MANAGEMENT;

CREATE TABLE USERS(id int(10) NOT NULL AUTO_INCREMENT,
					name VARCHAR(20)  UNIQUE NOT NULL,
					password VARCHAR(20) NOT NULL,
					usertype ENUM('A', 'E', 'R') NOT NULL,
					phone VARCHAR(12) NOT NULL,
					email varchar(25) NOT NULL,
					PRIMARY KEY (id));

/*<Ph>Do not remove or modify the below query..*/ 
INSERT INTO USERS VALUES('1','admin','admin','A','9999999999','admin@admin.COM');

/* Here form_title should be same as the table name of the corresponding form*/
create table form_list(form_title varchar(20),
						form_desc varchar(100),
						form_img_path varchar(255),
						primary key(form_title));
						
						
Create table signatures(userid int(20) not null,
			signaturepath varchar(40) not null,
			primary key(userid),
			foreign key(userid) references users(id) on delete cascade);

/*<Ph>This below insertion into signatures is required. Don't delete this..*/
insert into signatures values(1,"temp_path");
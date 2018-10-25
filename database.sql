create table user(
	u_id INT PRIMARY KEY auto_increment,
    u_user varchar(250) unique not null,
    U_pass varchar(250) not null
);

commit;
create table users(
    id int not null auto_increment primary key,
    first_name varchar(50) not null,
    last_name varchar(50) not null,
    email_address varchar(128) not null,
    phone_number varchar(13) not null,
    address varchar(128) not null,
    postcode varchar(10) not null
);
    
create table booking(
    id int not null auto_increment primary key,
    user_id int,
    foreign key (user_id) REFERENCES users(id),
    date_booked date,
    serial_number varchar(128) not null,
    passwords varchar(128),
    priority varchar(20),
    problem_description varchar(2000)
);
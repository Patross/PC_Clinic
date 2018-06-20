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


create table job_status(
    id int not null auto_increment primary key,
    worked_on_by varchar(128) not null,
    booking_id int,
    foreign key (booking_id) references booking(id),
    date_worked date,

    motherboard varchar(3),
    processor varchar(3),
    ram varchar(3),
    gpu varchar(3),
    network_card varchar (3),
    sound_card varchar (3),
    optical_drive varchar (3),
    power_supply varchar (3),
    hdd varchar (3),
    ssd varchar (3),
    monitor varchar (3),
    keyboard varchar (3),
    mouse varchar (3),
    up_to_date varchar (3),
    virus_scanner varchar (3),
    email varchar (3),
    wired_connection varchar (3),
    wired_internet varchar (3),
    wired_email_configuration varchar (3),
    wireless_connection varchar (3),
    wireless_internet varchar (3),
    wireless_email_configuration varchar (3),
    additional_information varchar (1000),
    status varchar (20)
);
CREATE DATABASE if not exists shop
 DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;
 
 use shop;
  
  create table if not exists account(
  username varchar(100) not null,
  password varchar(100) not null,
  position varchar(100) not null,
  status varchar(100) not null,
  primary key (username),  
  constraint check_pos check (position in ('manager','employee','customer')), /*quan ly, nhanvien, khachhang*/
  constraint check_stt check (status in ('active','waiting','locked','deny'))	  /*dang hoat dong, dang cho phe duyet, dung hoat dong, bi tu choi*/
  );
  
  create table if not exists employee(
	id int not null auto_increment ,
	name varchar(100) not null,
    birthday date not null,
    address varchar(100) not null,
    phone varchar(100) not null,
    salary double precision not null,
    username varchar(100)  ,
    primary key (id),
    foreign key (username) REFERENCES  account(username)
   
  );
  
  create table if not exists customer(
	id int not null auto_increment,
    name varchar(100) not null,
    birthday date not null,
    address varchar(100) not null,
    phone varchar(100) not null,
    username varchar(100) not null,
    primary key (id),
     foreign key (username) REFERENCES  account(username)
  );
  
  
  create table if not exists product(
	id int not null auto_increment,
    name varchar(100) not null,
    type_id varchar(100) not null ,
    inventory int not null,						/*so luong ton kho*/
    buy_price double precision not null,
    sell_price double precision not null,
    entry_date datetime, 						/*ngay nhap kho*/
    primary key (id)
    
  );
  
  create table if not exists product_type(
	id varchar(100) not null ,
    type_name varchar(100) not null,
    primary key (id)
  );
  
  alter table product add foreign key (type_id) references product_type(id);
  
  create table if not exists bill(
	id int not null auto_increment ,
    emp_id int not null ,
    cus_id int not null,
    sell_date datetime not null,				/*ngay dat mua*/
    process_date datetime, 						/*ngay xu ly don hang*/
    status varchar(100) not null,
    primary key (id),
    foreign key (emp_id) references employee(id),
    foreign key (cus_id) references customer(id),
    constraint check_stt2 check (status in('processing','done')) /*trang thai don hang co the la dang xu ly hoac da xu ly*/
    
  );
  
  create table if not exists bill_detail(
	bill_id int not null,
    product_id int not null,
    amount int not null,						/*so luong dat mua san pham product_id*/
    foreign key (bill_id) references bill(id),
    foreign key (product_id) references product(id)
  );
  
  
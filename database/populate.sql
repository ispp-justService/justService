DELETE FROM TAG_ENTRY;
DELETE FROM SERVICE;
DELETE FROM ADMINISTRATOR;
DELETE FROM CUSTOMER;
DELETE FROM TAG;
DELETE FROM APP_USER;

/*
Customer's Populate
*/
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Freelance','Antonio','954420000',37.3505152,-5.9874927,41001,'customer0@gmail.com','$2y$10$JOl0EAv1UPGZP3UNzDf1tO1ZzJMjwbx7Xy/zQnZBby3lflS6hl5RW','././assets/uploads/cliente1.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Freelance','Ándres','954420001',37.3663322,-6.0075867,41020,'customer1@gmail.com','$2y$10$J7ozpfhjyQZ.GKoRWiVi9.pXhXK1c6ZwIgt37/zKHrh8ssQlou.8K','././assets/uploads/cliente2.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Freelance','Javier','954420002',37.3886782,-6.0139807,41092,'customer2@gmail.com','$2y$10$adrU02vwKu/y42hoN2F.R.NfdOr13f//0TnNoEft37Jzqn/jDdDpG','././assets/uploads/cliente3.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Freelance','Álvaro','954420003',37.3737002,-6.0018037,41017,'customer3@gmail.com','$2y$10$Fp67KXNHNa0t5YzNx1nxPuhK72.GYIt7FEf8kdebtR0yevyS54qme','././assets/uploads/cliente4.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Freelance','Alberto','954420004',37.3706882,-5.9597447,41009,'customer4@gmail.com','$2y$10$1CGrK.6es4zdidrdKuuEZumq15MTVOiofpiUxc/47KssIC8C5yA/S','././assets/uploads/cliente5.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Freelance','Julio','954420005',37.4088182,-6.0067457,41011,'customer5@gmail.com','$2y$10$L8Gun75NR4Rh05AiL/ZVRuq3NrryAdQA03ZleCU38jhNaa5MjXh4a','././assets/uploads/cliente6.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password) 
			VALUES('Freelance','Domingo','954420006',37.3804632,-6.0137997,41011,'customer6@gmail.com','$2y$10$XK0KYmSzHF8R1uFVlLADFeQLyRWZvt86EdId9ucDkV5Q.gDYgcuFu');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password) 
			VALUES('Freelance','Roberto','954420007',37.3602271,-5.9740528,41011,'customer7@gmail.com','$2y$10$eRNXHc5XU7BoepaxMQghre96SyfQDrN0BPMEYF0xuFT8NTo.KQWnS');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password) 
			VALUES('Freelance','Juán Carlos','954420009',37.4095252,-6.0070087,41011,'customer8@gmail.com','$2y$10$RlfKdXQR3b/HGM9t9ot1.eDByvZG1n5jrVhJHxgiq15PDjiAnOFhW');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password) 
			VALUES('Freelance','Francisco','954420010',37.4100102,-5.9885387,41011,'customer9@gmail.com','$2y$10$1sK3H3UvcPuXjnOhXMbCF.cwJJ8TzNHtXmxD.qbNklWvnkvJL0siy');

INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Fontanería Sevillana S.L.','954770000',37.3793032,-5.9207757,41008,'customer10@gmail.com','$2y$10$8wb1MxBwm2zlXasquG4IquqpZu6QR/t1GZebnoYLFKrs5qA7Cbuzi','././assets/uploads/logo1.jpg');

INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Fontanería Hermanos S.L.','954770001',37.3885282,-6.0123347,41012,'customer11@gmail.com','$2y$10$/RUb/b59EzqCQCniZGh7tOK9NxTqkl.DjgrGx86bChfLZX9PiJozu','././assets/uploads/logo2.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Electricistas Sevillanos S.L.','954770002',37.4058602,-5.9933967,41012,'customer12@gmail.com','$2y$10$fQfavOusLGJZsSjCYMAqDevYMGNEY7MAgCab/M76v08iCfkEeQwby','././assets/uploads/logo3.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Instalaciones Eléctricas Pérez S.L.','954770003',37.4305372,-5.9835607,41012,'customer13@gmail.com','$2y$10$kIf6Fl7gxOINA9yLilM2PeNWetF44kF7j98CrkN2R9Tu9R172q2jK','././assets/uploads/logo4.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Borchas Del Sur S.L.','954770004',37.3914972,-5.9685837,41012,'customer14@gmail.com','$2y$10$3hc4aiEZmPv7BD1hNguPq.Diy/PKbF8/hB1ql15Q1564azflZ1HuG','././assets/uploads/logo5.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Pintores Sevillanos S.L.','954770005',37.4299492,-5.9767047,41013,'customer15@gmail.com','$2y$10$13UtALaNXQzO7GJ1SQgcAe78frIfAK/lm6oMDDodXihodriAQtGjm','././assets/uploads/logo6.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Reparaciones Gómez S.L.','954770006',37.4264412,-5.9694017,41013,'customer16@gmail.com','$2y$10$tyD2GxbRSiyjy11lwCGqyeNs81uFpj0qQ/5MwGfvljIA602Cl3/CO','././assets/uploads/logo7.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Albañilería Sevillana S.L.','954770007',37.4135352,-5.9722037,41013,'customer17@gmail.com','$2y$10$IAzvnTwoxyVCk2COvqhe0eJy4gvvlRCBQkn7VCdiQLIKm6TM0N2Nu','././assets/uploads/logo8.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Cerrajería Hermanos López S.L.','954770008',37.3927942,-5.9617027,41013,'customer18@gmail.com','$2y$10$udqYDwxA7xHKx2cZDhIpUOOQS6R2pYwjsKenxtck61GwZ5/XXh42K','././assets/uploads/logo9.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Cerrajeros De Sevilla S.L.','954770009',37.4138622,-5.9788187,41011,'customer19@gmail.com','$2y$10$7/znywKoZ2fUADfL8ih0TOOemJN7XsoNqt3l5foFGkkoNcPegCxP2','././assets/uploads/logo10.jpg');



/*
Administrator's Populate
*/
INSERT INTO ADMINISTRATOR VALUES('admin@admin.com','$2y$10$Peb3/ZA1pRgV3kx6NQcxAuQIDXWPKg2Vagog1uAcmQMqc71wm8tUm');

/*
App_user's Populate
*/
INSERT INTO APP_USER(name,surname,email,password,photo) VALUES('Domingo','García Romero','user1@gmail.com','$2y$10$DQ5pGV4l7CSv/tVaaLC56uevW74234Rp2nUO1ag.XpOMX8N1r7spi','././assets/uploads/user1.jpg');
INSERT INTO APP_USER(name,surname,email,password,photo) VALUES('Antonio','Gallego Rodriguez','user2@gmail.com','$2y$10$I9tfamTVXpkFAnRz33LxPeOpih9.FjkQtSoNDSVrQqs40V0xQ2UAa','././assets/uploads/user2.jpg');
INSERT INTO APP_USER(name,surname,email,password,photo) VALUES('José David','Martín Fernandez','user3@gmail.com','$2y$10$Zzr1m.NyUqPIKsh74hsF9.lIGv1Zj76cAazA4wcgcPj9dcTNEnl32','././assets/uploads/user3.jpg');
INSERT INTO APP_USER(name,surname,email,password,photo) VALUES('Guillermo','De la cruz Dorado','user4@gmail.com','$2y$10$1H14jjw9hfmZTo/bVL2yduS9vshvIHUPvkj8od.Z0mV5BR5aFY9Je','././assets/uploads/user4.jpg');
INSERT INTO APP_USER(name,surname,email,password) VALUES('Luis','Garrido Rodríguez','user5@gmail.com','$2y$10$RLSbrrsjBpIefHblCXJLyudOAJe.mwBQK7HX8FTS4YKeHCokjrcfW');

/*
Tag's Populate
*/
INSERT INTO TAG (name) VALUES('fontanero');
INSERT INTO TAG (name) VALUES('baño');
INSERT INTO TAG (name) VALUES('bano');
INSERT INTO TAG (name) VALUES('plumber');
INSERT INTO TAG (name) VALUES('cañerias');
INSERT INTO TAG (name) VALUES('canerias');
INSERT INTO TAG (name) VALUES('pipes');
INSERT INTO TAG (name) VALUES('termo');
INSERT INTO TAG (name) VALUES('agua');
INSERT INTO TAG (name) VALUES('water');

INSERT INTO TAG (name) VALUES('electricista');
INSERT INTO TAG (name) VALUES('electrician');
INSERT INTO TAG (name) VALUES('luces');
INSERT INTO TAG (name) VALUES('luce');
INSERT INTO TAG (name) VALUES('luz');

INSERT INTO TAG (name) VALUES('pintor');
INSERT INTO TAG (name) VALUES('printer');
INSERT INTO TAG (name) VALUES('pintura');
INSERT INTO TAG (name) VALUES('paint');

INSERT INTO TAG (name) VALUES('albañil');
INSERT INTO TAG (name) VALUES('albanil');
INSERT INTO TAG (name) VALUES('builder');
INSERT INTO TAG (name) VALUES('reparación');
INSERT INTO TAG (name) VALUES('reparacion');

INSERT INTO TAG (name) VALUES('cerrajero');
INSERT INTO TAG (name) VALUES('cerragero');
INSERT INTO TAG (name) VALUES('locksmith');
INSERT INTO TAG (name) VALUES('llaves');
INSERT INTO TAG (name) VALUES('yaves');
INSERT INTO TAG (name) VALUES('keys');
INSERT INTO TAG (name) VALUES('puertas');
INSERT INTO TAG (name) VALUES('doors');

INSERT INTO TAG (name) VALUES('pared');
INSERT INTO TAG (name) VALUES('wall');

INSERT INTO TAG (name) VALUES('cocina');
INSERT INTO TAG (name) VALUES('kocina');
INSERT INTO TAG (name) VALUES('kitchen');
INSERT INTO TAG (name) VALUES('reforma');

INSERT INTO TAG (name) VALUES('duplex');
INSERT INTO TAG (name) VALUES('casa');
INSERT INTO TAG (name) VALUES('piso');
INSERT INTO TAG (name) VALUES('apartamento');

INSERT INTO TAG (name) VALUES('baño');
INSERT INTO TAG (name) VALUES('bano');
INSERT INTO TAG (name) VALUES('bathroom');


/*
 Tag_entry's populate
*/
/* PLUMBER TAGS */
INSERT INTO TAG_ENTRY VALUES('1','1');
INSERT INTO TAG_ENTRY VALUES('1','2');
INSERT INTO TAG_ENTRY VALUES('1','3');
INSERT INTO TAG_ENTRY VALUES('1','4');
INSERT INTO TAG_ENTRY VALUES('1','5');
INSERT INTO TAG_ENTRY VALUES('1','6');
INSERT INTO TAG_ENTRY VALUES('1','7');
INSERT INTO TAG_ENTRY VALUES('1','8');
INSERT INTO TAG_ENTRY VALUES('1','9');
INSERT INTO TAG_ENTRY VALUES('1','10');
INSERT INTO TAG_ENTRY VALUES('1','35');
INSERT INTO TAG_ENTRY VALUES('1','36');
INSERT INTO TAG_ENTRY VALUES('1','37');
INSERT INTO TAG_ENTRY VALUES('1','38');
INSERT INTO TAG_ENTRY VALUES('1','43');
INSERT INTO TAG_ENTRY VALUES('1','44');
INSERT INTO TAG_ENTRY VALUES('1','45');

INSERT INTO TAG_ENTRY VALUES('2','1');
INSERT INTO TAG_ENTRY VALUES('2','2');
INSERT INTO TAG_ENTRY VALUES('2','3');
INSERT INTO TAG_ENTRY VALUES('2','4');
INSERT INTO TAG_ENTRY VALUES('2','5');
INSERT INTO TAG_ENTRY VALUES('2','6');
INSERT INTO TAG_ENTRY VALUES('2','7');
INSERT INTO TAG_ENTRY VALUES('2','8');
INSERT INTO TAG_ENTRY VALUES('2','9');
INSERT INTO TAG_ENTRY VALUES('2','10');
INSERT INTO TAG_ENTRY VALUES('2','35');
INSERT INTO TAG_ENTRY VALUES('2','36');
INSERT INTO TAG_ENTRY VALUES('2','37');
INSERT INTO TAG_ENTRY VALUES('2','38');
INSERT INTO TAG_ENTRY VALUES('2','43');
INSERT INTO TAG_ENTRY VALUES('3','44');
INSERT INTO TAG_ENTRY VALUES('3','45');

INSERT INTO TAG_ENTRY VALUES('11','1');
INSERT INTO TAG_ENTRY VALUES('11','2');
INSERT INTO TAG_ENTRY VALUES('11','3');
INSERT INTO TAG_ENTRY VALUES('11','4');
INSERT INTO TAG_ENTRY VALUES('11','5');
INSERT INTO TAG_ENTRY VALUES('11','6');
INSERT INTO TAG_ENTRY VALUES('11','7');
INSERT INTO TAG_ENTRY VALUES('11','8');
INSERT INTO TAG_ENTRY VALUES('11','9');
INSERT INTO TAG_ENTRY VALUES('11','10');
INSERT INTO TAG_ENTRY VALUES('11','35');
INSERT INTO TAG_ENTRY VALUES('11','36');
INSERT INTO TAG_ENTRY VALUES('11','37');
INSERT INTO TAG_ENTRY VALUES('11','38');
INSERT INTO TAG_ENTRY VALUES('11','43');
INSERT INTO TAG_ENTRY VALUES('11','44');
INSERT INTO TAG_ENTRY VALUES('11','45');

INSERT INTO TAG_ENTRY VALUES('12','1');
INSERT INTO TAG_ENTRY VALUES('12','2');
INSERT INTO TAG_ENTRY VALUES('12','3');
INSERT INTO TAG_ENTRY VALUES('12','4');
INSERT INTO TAG_ENTRY VALUES('12','5');
INSERT INTO TAG_ENTRY VALUES('12','6');
INSERT INTO TAG_ENTRY VALUES('12','7');
INSERT INTO TAG_ENTRY VALUES('12','8');
INSERT INTO TAG_ENTRY VALUES('12','9');
INSERT INTO TAG_ENTRY VALUES('12','10');
INSERT INTO TAG_ENTRY VALUES('12','35');
INSERT INTO TAG_ENTRY VALUES('12','36');
INSERT INTO TAG_ENTRY VALUES('12','37');
INSERT INTO TAG_ENTRY VALUES('12','38');
INSERT INTO TAG_ENTRY VALUES('12','43');
INSERT INTO TAG_ENTRY VALUES('12','44');
INSERT INTO TAG_ENTRY VALUES('12','45');

/* ELECTRICIAN TAGS */
INSERT INTO TAG_ENTRY VALUES('3','11');
INSERT INTO TAG_ENTRY VALUES('3','12');
INSERT INTO TAG_ENTRY VALUES('3','13');
INSERT INTO TAG_ENTRY VALUES('3','14');
INSERT INTO TAG_ENTRY VALUES('3','15');

INSERT INTO TAG_ENTRY VALUES('4','11');
INSERT INTO TAG_ENTRY VALUES('4','12');
INSERT INTO TAG_ENTRY VALUES('4','13');
INSERT INTO TAG_ENTRY VALUES('4','14');
INSERT INTO TAG_ENTRY VALUES('4','15');

INSERT INTO TAG_ENTRY VALUES('13','11');
INSERT INTO TAG_ENTRY VALUES('13','12');
INSERT INTO TAG_ENTRY VALUES('13','13');
INSERT INTO TAG_ENTRY VALUES('13','14');
INSERT INTO TAG_ENTRY VALUES('13','15');

INSERT INTO TAG_ENTRY VALUES('14','11');
INSERT INTO TAG_ENTRY VALUES('14','12');
INSERT INTO TAG_ENTRY VALUES('14','13');
INSERT INTO TAG_ENTRY VALUES('14','14');
INSERT INTO TAG_ENTRY VALUES('14','15');

/* PRINTER TAGS */
INSERT INTO TAG_ENTRY VALUES('5','16');
INSERT INTO TAG_ENTRY VALUES('5','17');
INSERT INTO TAG_ENTRY VALUES('5','18');
INSERT INTO TAG_ENTRY VALUES('5','19');
INSERT INTO TAG_ENTRY VALUES('5','39');
INSERT INTO TAG_ENTRY VALUES('5','40');
INSERT INTO TAG_ENTRY VALUES('5','41');
INSERT INTO TAG_ENTRY VALUES('5','42');

INSERT INTO TAG_ENTRY VALUES('6','16');
INSERT INTO TAG_ENTRY VALUES('6','17');
INSERT INTO TAG_ENTRY VALUES('6','18');
INSERT INTO TAG_ENTRY VALUES('6','19');
INSERT INTO TAG_ENTRY VALUES('6','39');
INSERT INTO TAG_ENTRY VALUES('6','40');
INSERT INTO TAG_ENTRY VALUES('6','41');
INSERT INTO TAG_ENTRY VALUES('6','42');

INSERT INTO TAG_ENTRY VALUES('15','16');
INSERT INTO TAG_ENTRY VALUES('15','17');
INSERT INTO TAG_ENTRY VALUES('15','18');
INSERT INTO TAG_ENTRY VALUES('15','19');
INSERT INTO TAG_ENTRY VALUES('15','39');
INSERT INTO TAG_ENTRY VALUES('15','40');
INSERT INTO TAG_ENTRY VALUES('15','41');
INSERT INTO TAG_ENTRY VALUES('15','42');

INSERT INTO TAG_ENTRY VALUES('16','16');
INSERT INTO TAG_ENTRY VALUES('16','17');
INSERT INTO TAG_ENTRY VALUES('16','18');
INSERT INTO TAG_ENTRY VALUES('16','19');
INSERT INTO TAG_ENTRY VALUES('16','39');
INSERT INTO TAG_ENTRY VALUES('16','40');
INSERT INTO TAG_ENTRY VALUES('16','41');
INSERT INTO TAG_ENTRY VALUES('16','42');

/* BUILDER TAGS */
INSERT INTO TAG_ENTRY VALUES('7','20');
INSERT INTO TAG_ENTRY VALUES('7','21');
INSERT INTO TAG_ENTRY VALUES('7','22');
INSERT INTO TAG_ENTRY VALUES('7','23');
INSERT INTO TAG_ENTRY VALUES('7','33');
INSERT INTO TAG_ENTRY VALUES('7','34');
INSERT INTO TAG_ENTRY VALUES('7','35');
INSERT INTO TAG_ENTRY VALUES('7','36');
INSERT INTO TAG_ENTRY VALUES('7','37');
INSERT INTO TAG_ENTRY VALUES('7','38');
INSERT INTO TAG_ENTRY VALUES('7','39');
INSERT INTO TAG_ENTRY VALUES('7','40');
INSERT INTO TAG_ENTRY VALUES('7','41');
INSERT INTO TAG_ENTRY VALUES('7','42');
INSERT INTO TAG_ENTRY VALUES('7','43');
INSERT INTO TAG_ENTRY VALUES('7','44');
INSERT INTO TAG_ENTRY VALUES('7','45');

INSERT INTO TAG_ENTRY VALUES('8','20');
INSERT INTO TAG_ENTRY VALUES('8','21');
INSERT INTO TAG_ENTRY VALUES('8','22');
INSERT INTO TAG_ENTRY VALUES('8','23');
INSERT INTO TAG_ENTRY VALUES('8','33');
INSERT INTO TAG_ENTRY VALUES('8','34');
INSERT INTO TAG_ENTRY VALUES('8','35');
INSERT INTO TAG_ENTRY VALUES('8','36');
INSERT INTO TAG_ENTRY VALUES('8','37');
INSERT INTO TAG_ENTRY VALUES('8','38');
INSERT INTO TAG_ENTRY VALUES('8','39');
INSERT INTO TAG_ENTRY VALUES('8','40');
INSERT INTO TAG_ENTRY VALUES('8','41');
INSERT INTO TAG_ENTRY VALUES('8','42');
INSERT INTO TAG_ENTRY VALUES('8','43');
INSERT INTO TAG_ENTRY VALUES('8','44');
INSERT INTO TAG_ENTRY VALUES('8','45');

INSERT INTO TAG_ENTRY VALUES('17','20');
INSERT INTO TAG_ENTRY VALUES('17','21');
INSERT INTO TAG_ENTRY VALUES('17','22');
INSERT INTO TAG_ENTRY VALUES('17','23');
INSERT INTO TAG_ENTRY VALUES('17','33');
INSERT INTO TAG_ENTRY VALUES('17','34');
INSERT INTO TAG_ENTRY VALUES('17','35');
INSERT INTO TAG_ENTRY VALUES('17','36');
INSERT INTO TAG_ENTRY VALUES('17','37');
INSERT INTO TAG_ENTRY VALUES('17','38');
INSERT INTO TAG_ENTRY VALUES('17','39');
INSERT INTO TAG_ENTRY VALUES('17','40');
INSERT INTO TAG_ENTRY VALUES('17','41');
INSERT INTO TAG_ENTRY VALUES('17','42');
INSERT INTO TAG_ENTRY VALUES('17','43');
INSERT INTO TAG_ENTRY VALUES('17','44');
INSERT INTO TAG_ENTRY VALUES('17','45');

INSERT INTO TAG_ENTRY VALUES('18','20');
INSERT INTO TAG_ENTRY VALUES('18','21');
INSERT INTO TAG_ENTRY VALUES('18','22');
INSERT INTO TAG_ENTRY VALUES('18','23');
INSERT INTO TAG_ENTRY VALUES('18','33');
INSERT INTO TAG_ENTRY VALUES('18','34');
INSERT INTO TAG_ENTRY VALUES('18','35');
INSERT INTO TAG_ENTRY VALUES('18','36');
INSERT INTO TAG_ENTRY VALUES('18','37');
INSERT INTO TAG_ENTRY VALUES('18','38');
INSERT INTO TAG_ENTRY VALUES('18','39');
INSERT INTO TAG_ENTRY VALUES('18','40');
INSERT INTO TAG_ENTRY VALUES('18','41');
INSERT INTO TAG_ENTRY VALUES('18','42');
INSERT INTO TAG_ENTRY VALUES('18','43');
INSERT INTO TAG_ENTRY VALUES('18','44');
INSERT INTO TAG_ENTRY VALUES('18','45');

/* LOCKSMITH TAGS */
INSERT INTO TAG_ENTRY VALUES('9','25');
INSERT INTO TAG_ENTRY VALUES('9','26');
INSERT INTO TAG_ENTRY VALUES('9','27');
INSERT INTO TAG_ENTRY VALUES('9','28');
INSERT INTO TAG_ENTRY VALUES('9','29');
INSERT INTO TAG_ENTRY VALUES('9','30');
INSERT INTO TAG_ENTRY VALUES('9','31');
INSERT INTO TAG_ENTRY VALUES('9','32');
INSERT INTO TAG_ENTRY VALUES('9','33');
INSERT INTO TAG_ENTRY VALUES('9','34');

INSERT INTO TAG_ENTRY VALUES('10','25');
INSERT INTO TAG_ENTRY VALUES('10','26');
INSERT INTO TAG_ENTRY VALUES('10','27');
INSERT INTO TAG_ENTRY VALUES('10','28');
INSERT INTO TAG_ENTRY VALUES('10','29');
INSERT INTO TAG_ENTRY VALUES('10','30');
INSERT INTO TAG_ENTRY VALUES('10','31');
INSERT INTO TAG_ENTRY VALUES('10','32');
INSERT INTO TAG_ENTRY VALUES('10','33');
INSERT INTO TAG_ENTRY VALUES('10','34');

INSERT INTO TAG_ENTRY VALUES('19','25');
INSERT INTO TAG_ENTRY VALUES('19','26');
INSERT INTO TAG_ENTRY VALUES('19','27');
INSERT INTO TAG_ENTRY VALUES('19','28');
INSERT INTO TAG_ENTRY VALUES('19','29');
INSERT INTO TAG_ENTRY VALUES('19','30');
INSERT INTO TAG_ENTRY VALUES('19','31');
INSERT INTO TAG_ENTRY VALUES('19','32');
INSERT INTO TAG_ENTRY VALUES('19','33');
INSERT INTO TAG_ENTRY VALUES('19','34');

INSERT INTO TAG_ENTRY VALUES('20','25');
INSERT INTO TAG_ENTRY VALUES('20','26');
INSERT INTO TAG_ENTRY VALUES('20','27');
INSERT INTO TAG_ENTRY VALUES('20','28');
INSERT INTO TAG_ENTRY VALUES('20','29');
INSERT INTO TAG_ENTRY VALUES('20','30');
INSERT INTO TAG_ENTRY VALUES('20','31');
INSERT INTO TAG_ENTRY VALUES('20','32');
INSERT INTO TAG_ENTRY VALUES('20','33');
INSERT INTO TAG_ENTRY VALUES('20','34');


/*
  Service's populate
*/
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('Hey there is no light at my home. I need an electrician.','PENDING','1','3');
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('I cannot enter in my home. Can you help me?','PENDING','9','2');
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('This is a mistake, but i cannot delete this for now','PENDING','3','4');
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('I want to build a house. A BIG house','PENDING','17','4');
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('My bathroom is crazy!!! I had to built a boat like Noah.','ACTIVE','5','1');

INSERT INTO SERVICE (description, status, customer_id, app_user_id, rating_user, comment_user, rating_customer, comment_customer) 
			VALUES('I forgot my keys inside my house :( help!','FINALIZED','10','1','5','It saved my life','5','Thanks for calling me');
INSERT INTO SERVICE (description, status, customer_id, app_user_id, rating_user, comment_user, rating_customer, comment_customer)  
			VALUES('Hey I need to do some changes in my house. Can you do it?', 'FINALIZED','13','2','4','It´s a good business','5','Thanks for calling me');
INSERT INTO SERVICE (description, status, customer_id, app_user_id, rating_user, comment_user, rating_customer, comment_customer)  
			VALUES('Need a hand with a thing, please call me.', 'FINALIZED','14','3','3','Not bad','5','Thanks for calling me');
INSERT INTO SERVICE (description, status, customer_id, app_user_id, rating_user, comment_user, rating_customer, comment_customer)  
			VALUES('I need you to do an empire state in my garden for 5 dollars.','FINALIZED','13','4','2','Bad service','5','Thanks for calling me');
INSERT INTO SERVICE (description, status, customer_id, app_user_id, rating_user, comment_user, rating_customer, comment_customer)  
			VALUES('I need you to do an empire state in my garden for 5 dollars.','FINALIZED','14','5','1','Horrible service','5','Thanks for calling me');


/*
 Banner's populate
*/

INSERT INTO BANNER (name, image, customer_id, active) VALUES ('banner1','././assets/uploads/logo1.jpg',11, 't');
INSERT INTO BANNER (name, image, customer_id, active) VALUES ('banner2','././assets/uploads/logo2.jpg',12, 't'); 
INSERT INTO BANNER (name, image, customer_id, active) VALUES ('banner3','././assets/uploads/logo3.jpg',13, 't');
INSERT INTO BANNER (name, image, customer_id, active) VALUES ('banner4','././assets/uploads/logo4.jpg',14, 't');
INSERT INTO BANNER (name, image, customer_id, active) VALUES ('banner5','././assets/uploads/logo5.jpg',15, 't');
INSERT INTO BANNER (name, image, customer_id, active) VALUES ('banner6','././assets/uploads/logo6.jpg',16, 't');
			
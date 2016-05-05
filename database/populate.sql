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
			VALUES('Freelance','Antonio','954420000',37.3505152,-5.9874927,41001,'antoniofontsevilla@gmail.com','$2y$10$ZZHjnYSB2ykc5L.6OUnhieG4.RJCFhjqwfIH1fI75kppYJpA/KWdS','././assets/uploads/cliente1.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Freelance','Ándres','954420001',37.3663322,-6.0075867,41020,'sevfontaneriandres@gmail.com','$2y$10$mFsc/KK5OTbMzWCn/BDZgO/.Nv/GYuCgzTVrtlJhNGWyBvFOMI5Ai','././assets/uploads/cliente2.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Freelance','Javier','954420002',37.3886782,-6.0139807,41092,'elecsevjavier@gmail.com','$2y$10$TbRRZTSPS7D//qMjd6X2dORcg9jzuVmsv03g6nJs8JlFQ29opsynW','././assets/uploads/cliente3.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Freelance','Álvaro','954420003',37.3737002,-6.0018037,41017,'alvaroelectricistasev@gmail.com','$2y$10$oUi4awuM2BJAZNYrcFuyuOMd7Z5SfXHL/9h.eoZa6/2kNfKD1xi5u','././assets/uploads/cliente4.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Freelance','Alberto','954420004',37.3706882,-5.9597447,41009,'pinturasalbertosev@gmail.com','$2y$10$J8KBlzrOkq1.NkPOUZ0Em.54kwqBlpdbR8WplG6HaGtpYk9NwV70.','././assets/uploads/cliente5.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Freelance','Julio','954420005',37.4088182,-6.0067457,41011,'juliopintorsev@gmail.com','$2y$10$nz5lNPzIgSTH6pOKaw2wW.zkIFadC9kUgAxE7NzsVv92rPg1iLIJ6','././assets/uploads/cliente6.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password) 
			VALUES('Freelance','Domingo','954420006',37.3804632,-6.0137997,41011,'reformasdomingosev@gmail.com','$2y$10$er.6anKEEj8.tBjnkb.13uEL4x0TPJUYTJZPE1dL.k0oED3LdUhIS');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password) 
			VALUES('Freelance','Roberto','954420007',37.3602271,-5.9740528,41011,'robertoalbanilsev@gmail.com','$2y$10$lDpxFzOKHR/E9/oLmdDGPesmUDb6jrPk8gaLweDA3RmfkdD.bvRTG');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password) 
			VALUES('Freelance','Juán Carlos','954420009',37.4095252,-6.0070087,41011,'carloscerrajerosev@gmail.com','$2y$10$TI6TS6yanG84u409mIf2YOBv7E8nxHGy6SCXeMvdDTOpqmQkXDBxG');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password) 
			VALUES('Freelance','Francisco','954420010',37.4100102,-5.9885387,41011,'cerrajeriafranciscosev@gmail.com','$2y$10$1ag0oe2yV8KCVGGOo.ogau.A9k8VamDuMXGf.ZLpguQ.Z8DBjvft6');

INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Fontanería Sevillana S.L.','954770000',37.3793032,-5.9207757,41008,'fontaneriasevillana@fontsev.com','$2y$10$XZvkODSu5TZa85oob1MUt.xan/m4nuZGU9YX57L0uhHO4s6sbqOrK','././assets/uploads/logo1.jpg');

INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Fontanería Hermanos S.L.','954770001',37.3885282,-6.0123347,41012,'fontaneriahermanos@fontbro.com','$2y$10$HzK/qLtlYdOdFQrzKVmktO/uze5bCsupr7UG2cXj6TshZRAGVklYi','././assets/uploads/logo2.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Electricistas Sevillanos S.L.','954770002',37.4058602,-5.9933967,41012,'electricistassev@elecsev.com','$2y$10$GWYhqZ1re36HgO3TRZZ49uNWhZM.BQDFHzhtPcG/RmCyHp.ljh9Gq','././assets/uploads/logo3.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Instalaciones Eléctricas Pérez S.L.','954770003',37.4305372,-5.9835607,41012,'instelecperez@instperez.com','$2y$10$Xa0csaJrKEISuIJwV2fvX.C2ur.ALj.KxDvLP7XNEeit3VruP.f1q','././assets/uploads/logo4.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Borchas Del Sur S.L.','954770004',37.3914972,-5.9685837,41012,'brochasur@brochasur.com','$2y$10$57UMD/I41huaOhxRcaBUpuSCIHv9XlqWuLBinSiLy8Sgj2Zi2Wh16','././assets/uploads/logo5.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Pintores Sevillanos S.L.','954770005',37.4299492,-5.9767047,41013,'pintoressev@pintorsev.com','$2y$10$1rZ7Uq1tngKnvPbv27tZKuU2LOxVqAQh/5/5fhw6SXrjtUJ9HHMMS','././assets/uploads/logo6.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Reparaciones Gómez S.L.','954770006',37.4264412,-5.9694017,41013,'gomezreparaciones@repgomez.com','$2y$10$EtucLbTwsIINeaO/F5PbouJ4rDkunOE..KS.dcqtRRBNdDS7QdNB.','././assets/uploads/logo7.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Albañilería Sevillana S.L.','954770007',37.4135352,-5.9722037,41013,'albanileriasev@albasev.com','$2y$10$XR6n1M8kxjhuCsJoFl4kleEkLee/8H7.qfFK91c/3GAI5kDnoWCd.','././assets/uploads/logo8.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Cerrajería Hermanos López S.L.','954770008',37.3927942,-5.9617027,41013,'cerrajerialopez@cerrlopezl.com','$2y$10$SnTJYiKb0HwCOrMOZZxaWuADoarB6RH91iqxirAT9J1OVOocke14i','././assets/uploads/logo9.jpg');
			
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password,photo) 
			VALUES('Business','Cerrajeros De Sevilla S.L.','954770009',37.4138622,-5.9788187,41011,'cerrajerossev@cerrsev.com','$2y$10$u/NTKnXgsoGiCkmG9UlNiOMHOtZBblUtJM02iZiDe7XdpYhaS/mPi','././assets/uploads/logo10.jpg');



/*
Administrator's Populate
*/
INSERT INTO ADMINISTRATOR VALUES('admin@admin.com','$2y$10$Peb3/ZA1pRgV3kx6NQcxAuQIDXWPKg2Vagog1uAcmQMqc71wm8tUm');

/*
App_user's Populate
*/
INSERT INTO APP_USER(name,surname,email,password,photo) VALUES('Domingo','García Romero','domgarrom@gmail.com','$2y$10$WDX.39gPfkLySFPVwMgDWey1PTslMXzRfeiWPevSa2Ed7AMRqizvK','././assets/uploads/user1.jpg');
INSERT INTO APP_USER(name,surname,email,password,photo) VALUES('Antonio','Gallego Rodriguez','antgarod@gmail.com','$2y$10$R8N7o4BjbH7q8oI1WdcQGO1hwgOGTG3XmvS1iEkN0ut53IyE8h6ky','././assets/uploads/user2.jpg');
INSERT INTO APP_USER(name,surname,email,password,photo) VALUES('José David','Martín Fernandez','josmarfer@gmail.com','$2y$10$5OoEQGEcwQnjbYW70kLsOe3tGQDGAYl/AviUZZQ5c6FSkQxepySHm','././assets/uploads/user3.jpg');
INSERT INTO APP_USER(name,surname,email,password,photo) VALUES('Guillermo','De la cruz Dorado','guicrudor@gmail.com','$2y$10$IZw8kMnsxOX5dTM8MLvws.dg.GcT1UBDNSbeqVkKWAoql4/bZl2h6','././assets/uploads/user4.jpg');
INSERT INTO APP_USER(name,surname,email,password) VALUES('Luis','Garrido Rodríguez','lugarrod@gmail.com','$2y$10$tfhevzvr9o2mnqSqHqb0lezXyzNAFUBB1Q//QmBxj5PzYLc0uCGCO');

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
INSERT INTO TAG_ENTRY VALUES('2','44');
INSERT INTO TAG_ENTRY VALUES('2','45');

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

-- App_User 1
-- 	Activos
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('My bathroom is crazy!!! I had to built a boat like Noah.','ACTIVE','5','1');
--	Finalizados
INSERT INTO SERVICE (description, status, customer_id, app_user_id, rating_user, comment_user, rating_customer, comment_customer) 
			VALUES('I forgot my keys inside my house :( help!','FINALIZED','10','1','5','It saved my life','5','Thanks for calling me');
--	Pendientes
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('I need a plumber please. Pipes of my kitchen are broken','PENDING','11','1');

-- App_User 2
--	Activos
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('Need to do a reform in my house, call me for more information','ACTIVE','8','2');
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('Need to change the floor of my house, I need a builder please','ACTIVE','10','2');
-- 	Finalizados
INSERT INTO SERVICE (description, status, customer_id, app_user_id, rating_user, comment_user, rating_customer, comment_customer)  
			VALUES('Hey I need to do some changes in my house. Can you do it?', 'FINALIZED','13','2','4','It´s a good business','5','Very nice person');
--	Pendientes
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('I cannot enter in my home. Can you help me?','PENDING','9','2');

-- App_User 3
--	Activos
-- 	Finalizados
INSERT INTO SERVICE (description, status, customer_id, app_user_id, rating_user, comment_user, rating_customer, comment_customer)  
			VALUES('Need a hand with a thing, please call me.', 'FINALIZED','14','3','3','Not bad','5','Great person');
--	Pendientes
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('Hey there is no light at my home. I need an electrician.','PENDING','1','3');

-- App_User 4
--	Activos
--	Finalizados
INSERT INTO SERVICE (description, status, customer_id, app_user_id, rating_user, comment_user, rating_customer, comment_customer)  
			VALUES('I need you to do an empire state in my garden for 5 dollars.','FINALIZED','13','4','2','Bad service','5','Thanks you are awesome');
--	Pendientes
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('This is a mistake, but i cannot delete this for now','PENDING','3','4');
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('I want to build a house. A BIG house','PENDING','17','4');

-- App_User 5
--	Activos
--	Finalizados
--	Pendientes
INSERT INTO SERVICE (description, status, customer_id, app_user_id, rating_user, comment_user, rating_customer, comment_customer)  
			VALUES('I need you to do a copy of the Eiffel Tower in my garden for 50 dollars.','FINALIZED','14','5','1','Horrible service','5','Has a very good dog!');


/*
 Banner's populate
*/

INSERT INTO BANNER (name, image, customer_id, active) VALUES ('banner1','././assets/uploads/logo1.jpg',11, 't');
INSERT INTO BANNER (name, image, customer_id, active) VALUES ('banner2','././assets/uploads/logo2.jpg',12, 't'); 
INSERT INTO BANNER (name, image, customer_id, active) VALUES ('banner3','././assets/uploads/logo3.jpg',13, 't');
INSERT INTO BANNER (name, image, customer_id, active) VALUES ('banner4','././assets/uploads/logo4.jpg',14, 't');
INSERT INTO BANNER (name, image, customer_id, active) VALUES ('banner5','././assets/uploads/logo5.jpg',15, 't');
INSERT INTO BANNER (name, image, customer_id, active) VALUES ('banner6','././assets/uploads/logo6.jpg',16, 't');
			
DELETE FROM TAG_ENTRY;
DELETE FROM SERVICE;
DELETE FROM ADMINISTRATOR;
DELETE FROM CUSTOMER;
DELETE FROM TAG;
DELETE FROM APP_USER;

/*
Customer's Populate
*/
INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password) VALUES('Freelance','Antonio','954422657',37.36130,-5.97753,41013,'customer1@gmail.com','$2y$10$6M6TP7.W3dXTJHeWWackJeUonSkX5qbTq8LnSnUGEA9TNZqDmkq6O');

INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password) VALUES('Business','Ricardo','954776140',37.37685,-6.00414,41011,'customer2@gmail.com','$2y$10$C1rUb2FwNSgd7dxoHKBrTuO3bj5565b1EhJTg3FtCNZuUHbAH.5/S');

INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password) VALUES('Business','Leopoldo','954368910',37.38837,-5.99777,41002,'customer3@gmail.com','$2y$10$4cMbqFrRwgLsEVyft2Jhl.a7hxwMwzJ6zWjr0tHxouzjkFS5GR.iu');

INSERT INTO CUSTOMER (type,name,phone_number,latitude,longitude,zip_code,email,password) VALUES('Freelance','Ándres','954123478',37.39194,-6.00054,41001,'customer4@gmail.com','$2y$10$b4IE8dUPWo.t/uqBxnhjHOSMN6DL6L0AhCWxunpQlqC7UWg4mCrA2');

/*
Administrator's Populate
*/
INSERT INTO ADMINISTRATOR VALUES('admin@admin.com','$2y$10$Peb3/ZA1pRgV3kx6NQcxAuQIDXWPKg2Vagog1uAcmQMqc71wm8tUm');

/*
App_user's Populate
*/
INSERT INTO APP_USER(name,surname,email,password) VALUES('Domingo','García Romero','user1@gmail.com','$2y$10$DQ5pGV4l7CSv/tVaaLC56uevW74234Rp2nUO1ag.XpOMX8N1r7spi');
INSERT INTO APP_USER(name,surname,email,password) VALUES('Antonio','Gallego Rodriguez','user2@gmail.com','$2y$10$I9tfamTVXpkFAnRz33LxPeOpih9.FjkQtSoNDSVrQqs40V0xQ2UAa');
INSERT INTO APP_USER(name,surname,email,password) VALUES('José David','Martín Fernandez','user3@gmail.com','$2y$10$Zzr1m.NyUqPIKsh74hsF9.lIGv1Zj76cAazA4wcgcPj9dcTNEnl32');
INSERT INTO APP_USER(name,surname,email,password) VALUES('Guillermo','De la cruz Dorado','user4@gmail.com','$2y$10$1H14jjw9hfmZTo/bVL2yduS9vshvIHUPvkj8od.Z0mV5BR5aFY9Je');

/*
Tag's Populate
*/
INSERT INTO TAG (name) VALUES('electricista');
INSERT INTO TAG (name) VALUES('fontanero');
INSERT INTO TAG (name) VALUES('cerrajero');
INSERT INTO TAG (name) VALUES('albañil');
INSERT INTO TAG (name) VALUES('reparación');
INSERT INTO TAG (name) VALUES('baño');
INSERT INTO TAG (name) VALUES('cocina');
INSERT INTO TAG (name) VALUES('pintor');
INSERT INTO TAG (name) VALUES('reforma');
INSERT INTO TAG (name) VALUES('duplex');
INSERT INTO TAG (name) VALUES('luces');
INSERT INTO TAG (name) VALUES('termo');
INSERT INTO TAG (name) VALUES('puerta');
INSERT INTO TAG (name) VALUES('cañerias');
INSERT INTO TAG (name) VALUES('llaves');
INSERT INTO TAG (name) VALUES('keys');
INSERT INTO TAG (name) VALUES('pipes');
INSERT INTO TAG (name) VALUES('doors');
INSERT INTO TAG (name) VALUES('printer');
INSERT INTO TAG (name) VALUES('kitchen');
INSERT INTO TAG (name) VALUES('bathroom');
INSERT INTO TAG (name) VALUES('electrician');
INSERT INTO TAG (name) VALUES('builder');
INSERT INTO TAG (name) VALUES('locksmith');
INSERT INTO TAG (name) VALUES('plumber');

/*
 Tag_entry's populate
*/
/* CUSTOMER 1 WITH HIS ASSOCIATED TAGS */
INSERT INTO TAG_ENTRY VALUES('1','1');
INSERT INTO TAG_ENTRY VALUES('1','11');
INSERT INTO TAG_ENTRY VALUES('1','12');
/* CUSTOMER 2 WITH HIS ASSOCIATED TAGS */
INSERT INTO TAG_ENTRY VALUES('2','2');
INSERT INTO TAG_ENTRY VALUES('2','6');
INSERT INTO TAG_ENTRY VALUES('2','7');
INSERT INTO TAG_ENTRY VALUES('2','12');
INSERT INTO TAG_ENTRY VALUES('2','14');
INSERT INTO TAG_ENTRY VALUES('2','17');
INSERT INTO TAG_ENTRY VALUES('2','20');
INSERT INTO TAG_ENTRY VALUES('2','21');
INSERT INTO TAG_ENTRY VALUES('2','25');
/* CUSTOMER 3 WITH HIS ASSOCIATED TAGS */
INSERT INTO TAG_ENTRY VALUES('3','3');
INSERT INTO TAG_ENTRY VALUES('3','4');
INSERT INTO TAG_ENTRY VALUES('3','13');
INSERT INTO TAG_ENTRY VALUES('3','15');
INSERT INTO TAG_ENTRY VALUES('3','6');
INSERT INTO TAG_ENTRY VALUES('3','24');
/* CUSTOMER 4 WITH HIS ASSOCIATED TAGS */
INSERT INTO TAG_ENTRY VALUES('4','4');
INSERT INTO TAG_ENTRY VALUES('4','5');
INSERT INTO TAG_ENTRY VALUES('4','6');
INSERT INTO TAG_ENTRY VALUES('4','7');
INSERT INTO TAG_ENTRY VALUES('4','9');
INSERT INTO TAG_ENTRY VALUES('4','10');
INSERT INTO TAG_ENTRY VALUES('4','20');
INSERT INTO TAG_ENTRY VALUES('4','21');
INSERT INTO TAG_ENTRY VALUES('4','23');


/*
  Service's populate
*/
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('Hey there is no light at my home. I need an electrician.','PENDING','1','1');
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('I cannot enter in my home. Can you help me?','PENDING','3','1');
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('This is a mistake, but i cannot delete this for now','PENDING','2','2');
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('I want to build a house. A BIG house','PENDING','4','3');
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('My bathroom is crazy!!! I had to built a boat like Noah.','ACTIVE','2','2');
INSERT INTO SERVICE (description, status, customer_id, app_user_id, rating_user, comment_user, rating_customer, comment_customer) VALUES('I forgot my keys inside my house :( help!','FINALIZED','3','3','4','It saved my life','5','Thanks for calling me');
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('Hey I need to do some changes in my house. Can you do it?', 'FINALIZED','4','1');
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('Need a hand with a thing, please call me.', 'FINALIZED','1','1');
INSERT INTO SERVICE (description, status, customer_id, app_user_id) VALUES('I need you to do an empire state in my garden for 5 dollars.','ACTIVE','3','3');

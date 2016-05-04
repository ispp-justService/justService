DROP TABLE IF EXISTS bookmark;
DROP TABLE IF EXISTS tag_entry;
DROP TABLE IF EXISTS tag;
DROP TABLE IF EXISTS banner;
DROP TABLE IF EXISTS service;
DROP TABLE IF EXISTS app_user;
DROP TABLE IF EXISTS customer;
DROP TABLE IF EXISTS administrator;

-- Creación de la tabla de los usuarios
CREATE TABLE app_user (
	app_user_id 	serial	 	PRIMARY KEY,
	name 		varchar		NOT NULL,
	surname 	varchar		NOT NULL,
	email 		varchar		NOT NULL UNIQUE,
	password 	varchar		NOT NULL,
	moment 		timestamp	NOT NULL DEFAULT current_timestamp,
	deleted 	bool		NOT NULL DEFAULT false,
	discount 	decimal		NOT NULL CHECK(discount >= 0.00) DEFAULT 0.00,
	photo 		varchar,
	zip_code 	int,
	phone_number 	integer
);

-- Creación de la tabla de los clientes
CREATE TABLE customer(
	customer_id	serial		PRIMARY KEY,
	type		varchar		NOT NULL,
	name		varchar		NOT NULL,
	phone_number	integer		NOT NULL,
	latitude	decimal		NOT NULL,
	longitude	decimal		NOT NULL,
	zip_code	int		NOT NULL,
	deleted		bool		NOT NULL DEFAULT false,
	email		varchar		NOT NULL UNIQUE,
	password	varchar		NOT NULL,
	moment		timestamp	NOT NULL DEFAULT current_timestamp,
	photo		varchar
);

-- Creación de la tabla de servicios
CREATE TABLE service(
	service_id		serial		PRIMARY KEY,
	description		varchar		NOT NULL,
	moment			timestamp	NOT NULL DEFAULT current_timestamp,
	status			varchar		NOT NULL CHECK(status = 'PENDING' OR status = 'FINALIZED' OR status = 'ACTIVE' OR status = 'CANCELLED'),
	rating_user		smallint	CHECK(rating_user >= 0 AND rating_user <= 5),
	comment_user		varchar,
	rating_customer		smallint	CHECK(rating_customer >= 0 AND rating_customer <= 5),
	comment_customer	varchar,
	discount_to_apply	decimal		CHECK(discount_to_apply < 50.0),

	customer_id		serial		REFERENCES customer(customer_id),
	app_user_id		serial		REFERENCES app_user(app_user_id)
);

-- Creación de la tabla de los banners
CREATE TABLE banner(
	banner_id	serial		PRIMARY KEY,
	name		varchar		NOT NULL,
	image		varchar		NOT NULL,
	delete		bool		NOT NULL DEFAULT false,
	active		bool		NOT NULL DEFAULT false,
	moment		timestamp	NOT NULL DEFAULT current_timestamp,

	customer_id	serial		REFERENCES customer(customer_id)
);

-- Creación de la tabla de Tags
CREATE TABLE tag(
	tag_id	serial PRIMARY KEY,
	name	varchar	NOT NULL
);

-- Creación de la tabla intermedia entre Tag y Customer
CREATE TABLE tag_entry(
	customer_id	serial		REFERENCES customer(customer_id),
	tag_id		serial		REFERENCES tag(tag_id),
	UNIQUE(customer_id,tag_id),
	PRIMARY KEY(customer_id,tag_id)
);

-- Creación de la tabla intermedia entre App_User y Customer
CREATE TABLE bookmark(
	app_user_id	serial		REFERENCES app_user(app_user_id),
	customer_id	serial		REFERENCES customer(customer_id),
	UNIQUE(app_user_id,customer_id),
	PRIMARY KEY(app_user_id,customer_id)
);

CREATE TABLE administrator(
	email		varchar,
	password	varchar,
	PRIMARY KEY(email,password)
);

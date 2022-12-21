#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: newsletters
#------------------------------------------------------------

CREATE TABLE newsletters(
        id    Int  Auto_increment  NOT NULL ,
        offer Bool ,
        news  Bool
	,CONSTRAINT newsletters_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        id              Int  Auto_increment  NOT NULL ,
        genrer          Varchar (50) NOT NULL ,
        firstname       Varchar (50) NOT NULL ,
        lastname        Varchar (50) NOT NULL ,
        email           Varchar (250) NOT NULL ,
        password        Varchar (250) NOT NULL ,
        birthdate       Date NOT NULL ,
        inscriptiondate Date NOT NULL ,
        id_newsletters  Int
	,CONSTRAINT users_PK PRIMARY KEY (id)

	,CONSTRAINT users_newsletters_FK FOREIGN KEY (id_newsletters) REFERENCES newsletters(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categories
#------------------------------------------------------------

CREATE TABLE categories(
        id          Int  Auto_increment  NOT NULL ,
        name        Varchar (250) NOT NULL ,
        picture     Varchar (250) NOT NULL ,
        description Text
	,CONSTRAINT categories_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: subcat
#------------------------------------------------------------

CREATE TABLE subcat(
        id            Int  Auto_increment  NOT NULL ,
        name          Varchar (250) NOT NULL ,
        id_categories Int NOT NULL
	,CONSTRAINT subcat_PK PRIMARY KEY (id)

	,CONSTRAINT subcat_categories_FK FOREIGN KEY (id_categories) REFERENCES categories(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TVA
#------------------------------------------------------------

CREATE TABLE TVA(
        id     Int  Auto_increment  NOT NULL ,
        rating Float NOT NULL
	,CONSTRAINT TVA_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: products
#------------------------------------------------------------

CREATE TABLE products(
        id            Int  Auto_increment  NOT NULL ,
        name          Varchar (250) NOT NULL ,
        description   Text NOT NULL ,
        brand         Varchar (250) NOT NULL ,
        picture1      Varchar (250) NOT NULL ,
        quantity      Int ,
        id_categories Int ,
        id_TVA        Int NOT NULL ,
        id_subcat     Int
	,CONSTRAINT products_PK PRIMARY KEY (id)

	,CONSTRAINT products_categories_FK FOREIGN KEY (id_categories) REFERENCES categories(id)
	,CONSTRAINT products_TVA0_FK FOREIGN KEY (id_TVA) REFERENCES TVA(id)
	,CONSTRAINT products_subcat1_FK FOREIGN KEY (id_subcat) REFERENCES subcat(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: prices
#------------------------------------------------------------

CREATE TABLE prices(
        id          Int  Auto_increment  NOT NULL ,
        unit        Float NOT NULL ,
        price       Float NOT NULL ,
        id_products Int NOT NULL
	,CONSTRAINT prices_PK PRIMARY KEY (id)

	,CONSTRAINT prices_products_FK FOREIGN KEY (id_products) REFERENCES products(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: comments
#------------------------------------------------------------

CREATE TABLE comments(
        id       Int NOT NULL ,
        id_users Int NOT NULL ,
        note     Int NOT NULL ,
        title    Varchar (250) NOT NULL ,
        comment  Varchar (250) NOT NULL
	,CONSTRAINT comments_PK PRIMARY KEY (id,id_users)

	,CONSTRAINT comments_products_FK FOREIGN KEY (id) REFERENCES products(id)
	,CONSTRAINT comments_users0_FK FOREIGN KEY (id_users) REFERENCES users(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: wishlist
#------------------------------------------------------------

CREATE TABLE wishlist(
        id          Int NOT NULL ,
        id_products Int NOT NULL
	,CONSTRAINT wishlist_PK PRIMARY KEY (id,id_products)

	,CONSTRAINT wishlist_users_FK FOREIGN KEY (id) REFERENCES users(id)
	,CONSTRAINT wishlist_products0_FK FOREIGN KEY (id_products) REFERENCES products(id)
)ENGINE=InnoDB;


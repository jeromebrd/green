#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: adress
#------------------------------------------------------------

CREATE TABLE adress(
        id        Int  Auto_increment  NOT NULL ,
        alias     Varchar (250) NOT NULL ,
        firstname Varchar (250) NOT NULL ,
        lastname  Varchar (250) NOT NULL ,
        society   Varchar (250) NOT NULL ,
        numtva    Int NOT NULL ,
        adress    Varchar (250) NOT NULL ,
        address2  Varchar (250) NOT NULL ,
        zip       Int NOT NULL ,
        city      Varchar (250) NOT NULL ,
        country   Varchar (250) NOT NULL ,
        numtel    Int NOT NULL ,
        id_users  Int
	,CONSTRAINT adress_PK PRIMARY KEY (id)

	,CONSTRAINT adress_users_FK FOREIGN KEY (id_users) REFERENCES users(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: promo
#------------------------------------------------------------

CREATE TABLE promo(
        id        Int  Auto_increment  NOT NULL ,
        code      Varchar (20) NOT NULL ,
        type      Int NOT NULL ,
        amount    Float NOT NULL ,
        datestart Date NOT NULL ,
        dateend   Date NOT NULL ,
        text      Text NOT NULL ,
        picture   Varchar (250)
	,CONSTRAINT promo_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: order
#------------------------------------------------------------

CREATE TABLE ordertab(
        id             Int  Auto_increment  NOT NULL ,
        date           Date NOT NULL ,
        adressdelivery Varchar (250) NOT NULL ,
        method         Varchar (250) NOT NULL ,
        note           Varchar (250) NOT NULL ,
        payementstatus Varchar (250) NOT NULL ,
        orderstatus    Varchar (250) NOT NULL ,
        id_promo       Int ,
        id_users       Int NOT NULL
	,CONSTRAINT ordertab_PK PRIMARY KEY (id)

	,CONSTRAINT ordertab_promo_FK FOREIGN KEY (id_promo) REFERENCES promo(id)
	,CONSTRAINT ordertab_users0_FK FOREIGN KEY (id_users) REFERENCES users(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: cart
#------------------------------------------------------------

CREATE TABLE cart(
        id          Int  Auto_increment  NOT NULL ,
        name        Varchar (250) NOT NULL ,
        price       Float NOT NULL ,
        variant     Varchar (250) NOT NULL ,
        quantity    Int NOT NULL ,
        id_ordertab    Int NOT NULL ,
        id_products Int NOT NULL
	,CONSTRAINT cart_PK PRIMARY KEY (id)

	,CONSTRAINT cart_ordertab_FK FOREIGN KEY (id_ordertab) REFERENCES ordertab(id)
	,CONSTRAINT cart_products0_FK FOREIGN KEY (id_products) REFERENCES products(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: post
#------------------------------------------------------------

CREATE TABLE post(
        id       Int  Auto_increment  NOT NULL ,
        title    Varchar (250) NOT NULL ,
        date     Date NOT NULL ,
        picture1 Varchar (250) NOT NULL ,
        content  Text NOT NULL
	,CONSTRAINT post_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: setting
#------------------------------------------------------------

CREATE TABLE setting(
        clef  Varchar (250) NOT NULL ,
        value Varchar (250) NOT NULL
)ENGINE=InnoDB;


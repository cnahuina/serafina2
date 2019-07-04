

CREATE TABLE CLIENTE(
    id_cliente          INT             NOT NULL,
    nombre_cliente      VARCHAR(250),
    apellido_cliente    VARCHAR(150),
    direccion           VARCHAR(150),
    estado              INT             NOT NULL,
    PRIMARY KEY (id_cliente)
)ENGINE=MYISAM
;



CREATE TABLE COMPRAS(
    id_compras            INT               NOT NULL,
    fecha_compra          DATETIME,
    total                 DECIMAL(10, 0),
    id_detalle_compras    INT               NOT NULL,
    idProveedor           INT               NOT NULL,
    PRIMARY KEY (id_compras)
)ENGINE=MYISAM
;



CREATE TABLE COMPROBANTE_DE_PAGO(
    id_comprobante         INT    NOT NULL,
    correlativo            INT,
    serie                  INT,
    id_tipo_comprobante    INT    NOT NULL,
    PRIMARY KEY (id_comprobante)
)ENGINE=MYISAM
;


CREATE TABLE DETALLE_COMPRAS(
    id_detalle_compras    INT               NOT NULL,
    cantidad              INT,
    subtotal              DECIMAL(10, 0),
    id_insumo             INT               NOT NULL,
    PRIMARY KEY (id_detalle_compras)
)ENGINE=MYISAM
;


CREATE TABLE DETALLE_VENTAS(
    id_detalle_venta    INT               NOT NULL,
    cantidad            INT,
    subtotal            DECIMAL(10, 0),
    id_producto         INT               NOT NULL,
    PRIMARY KEY (id_detalle_venta)
)ENGINE=MYISAM
;


CREATE TABLE EMPLEADOS(
    id_empleado          INT             NOT NULL,
    nombre_empleado      VARCHAR(150),
    apellido_empleado    VARCHAR(150),
    estado               INT,
    id_usuario           INT             NOT NULL,
    PRIMARY KEY (id_empleado)
)ENGINE=MYISAM
;


CREATE TABLE INSUMOS(
    id_insumo       INT             NOT NULL,
    descripcion     VARCHAR(150),
    cantidad        INT,
    presentacion    VARCHAR(150),
    estado          INT,
    PRIMARY KEY (id_insumo)
)ENGINE=MYISAM
;


CREATE TABLE PRODUCTOS(
    id_producto     INT             NOT NULL,
    descripcion     VARCHAR(250)    NOT NULL,
    presentacion    VARCHAR(10),
    foto            TEXT,
    estado          INT,
    id_receta       INT,
    PRIMARY KEY (id_producto)
)ENGINE=MYISAM
;



CREATE TABLE PROVEEDORES(
    idProveedor    INT             NOT NULL,
    razonSocial    VARCHAR(50)     NOT NULL,
    ruc            CHAR(12),
    direccion      VARCHAR(100),
    PRIMARY KEY (idProveedor)
)ENGINE=MYISAM
;



CREATE TABLE RECETA(
    id_receta      INT             NOT NULL,
    descripcion    VARCHAR(150)    NOT NULL,
    estado         INT             NOT NULL,
    id_insumo      INT             NOT NULL,
    PRIMARY KEY (id_receta)
)ENGINE=MYISAM
;



CREATE TABLE TIPO_COMPROBANTE(
    id_tipo_comprobante    INT             NOT NULL,
    descripcion            VARCHAR(150),
    PRIMARY KEY (id_tipo_comprobante)
)ENGINE=MYISAM
;


CREATE TABLE USUARIO(
    id_usuario    INT             NOT NULL,
    usuario       VARCHAR(100),
    clave         VARCHAR(20),
    estado        INT,
    PRIMARY KEY (id_usuario)
)ENGINE=MYISAM
;

CREATE TABLE VENTAS(
    id_venta            INT                AUTO_INCREMENT,
    fecha_venta         DATETIME,
    total               DECIMAL(10, 0),
    id_detalle_venta    INT                NOT NULL,
    id_cliente          INT                NOT NULL,
    id_empleado         INT                NOT NULL,
    id_comprobante      INT                NOT NULL,
    PRIMARY KEY (id_venta)
)ENGINE=MYISAM
;


ALTER TABLE COMPRAS ADD CONSTRAINT RefDETALLE_COMPRAS131 
    FOREIGN KEY (id_detalle_compras)
    REFERENCES DETALLE_COMPRAS(id_detalle_compras)
;

ALTER TABLE COMPRAS ADD CONSTRAINT RefPROVEEDORES151 
    FOREIGN KEY (idProveedor)
    REFERENCES PROVEEDORES(idProveedor)
;


ALTER TABLE COMPROBANTE_DE_PAGO ADD CONSTRAINT RefTIPO_COMPROBANTE161 
    FOREIGN KEY (id_tipo_comprobante)
    REFERENCES TIPO_COMPROBANTE(id_tipo_comprobante)
;



ALTER TABLE DETALLE_COMPRAS ADD CONSTRAINT RefINSUMOS141 
    FOREIGN KEY (id_insumo)
    REFERENCES INSUMOS(id_insumo)
;


ALTER TABLE DETALLE_VENTAS ADD CONSTRAINT RefPRODUCTOS71 
    FOREIGN KEY (id_producto)
    REFERENCES PRODUCTOS(id_producto)
;


ALTER TABLE EMPLEADOS ADD CONSTRAINT RefUSUARIO101 
    FOREIGN KEY (id_usuario)
    REFERENCES USUARIO(id_usuario)
;

ALTER TABLE PRODUCTOS ADD CONSTRAINT RefRECETA51 
    FOREIGN KEY (id_receta)
    REFERENCES RECETA(id_receta)
;



ALTER TABLE RECETA ADD CONSTRAINT RefINSUMOS11 
    FOREIGN KEY (id_insumo)
    REFERENCES INSUMOS(id_insumo)
;



ALTER TABLE VENTAS ADD CONSTRAINT RefDETALLE_VENTAS81 
    FOREIGN KEY (id_detalle_venta)
    REFERENCES DETALLE_VENTAS(id_detalle_venta)
;

ALTER TABLE VENTAS ADD CONSTRAINT RefCLIENTE91 
    FOREIGN KEY (id_cliente)
    REFERENCES CLIENTE(id_cliente)
;

ALTER TABLE VENTAS ADD CONSTRAINT RefEMPLEADOS111 
    FOREIGN KEY (id_empleado)
    REFERENCES EMPLEADOS(id_empleado)
;

ALTER TABLE VENTAS ADD CONSTRAINT RefCOMPROBANTE_DE_PAGO171 
    FOREIGN KEY (id_comprobante)
    REFERENCES COMPROBANTE_DE_PAGO(id_comprobante)
;



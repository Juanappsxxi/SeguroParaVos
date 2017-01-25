delimiter //
BEGIN
    @lcs = LCASE(NEW.nombre);
    @srp = REPLACE(@lcs, ' ', '');
    @arp = REPLACE(@srp, 'á', 'a');
    @erp = REPLACE(@arp, 'é', 'e');
    @irp = REPLACE(@erp, 'í', 'i');
    @orp = REPLACE(@irp, 'ó', 'o');
    @urp = REPLACE(@orp, 'ú', 'u');
    @nrp = REPLACE(@urp, 'ñ', 'n');

    SET NEW.nombre_sano = @nrp;
END;//
delimiter ;

delimiter //
BEGIN
    DECLARE lcs CHAR(255) DEFAULT '';
    DECLARE srp CHAR(255) DEFAULT '';
    DECLARE arp CHAR(255) DEFAULT '';
    DECLARE erp CHAR(255) DEFAULT '';
    DECLARE irp CHAR(255) DEFAULT '';
    DECLARE orp CHAR(255) DEFAULT '';
    DECLARE urp CHAR(255) DEFAULT '';
    DECLARE nrp CHAR(255) DEFAULT '';

    SET @lcs = LCASE(NEW.nombre);
    SET @srp = REPLACE(lcs, ' ', '');
    SET @arp = REPLACE(srp, 'á', 'a');
    SET @erp = REPLACE(arp, 'é', 'e');
    SET @irp = REPLACE(erp, 'í', 'i');
    SET @orp = REPLACE(irp, 'ó', 'o');
    SET @urp = REPLACE(orp, 'ú', 'u');
    SET @nrp = REPLACE(urp, 'ñ', 'n');

    SET NEW.nombre_sano = nrp;
END;//
delimiter ;

-- WORKS
BEGIN
    DECLARE lcs, srp, arp, erp, irp, orp, urp, nrp CHAR(255) DEFAULT '';
    SET @lcs = LCASE(NEW.nombre);
    SET @srp = REPLACE(@lcs, ' ', '');
    SET @arp = REPLACE(@srp, 'á', 'a');
    SET @erp = REPLACE(@arp, 'é', 'e');
    SET @irp = REPLACE(@erp, 'í', 'i');
    SET @orp = REPLACE(@irp, 'ó', 'o');
    SET @urp = REPLACE(@orp, 'ú', 'u');
    SET @nrp = REPLACE(@urp, 'ñ', 'n');

    SET NEW.nombre_sano = @nrp;
END

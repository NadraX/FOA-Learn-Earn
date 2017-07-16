alter table date_preg_anterioara_master
modify denumire_institutie_fac varchar2(100 byte);

alter table date_preg_anterioara_master
modify denumire_facultate varchar2(100 byte);

alter table date_preg_anterioara_master
modify in_curs_denum_instit_master varchar2(100 byte);

alter table date_preg_anterioara_master
modify in_curs_denum_facultate_master varchar2(100 byte);

alter table date_preg_anterioara_master
modify absolvent_denumire_facult varchar2(100 byte);

alter table date_preg_anterioara_master
modify absolvent_denumire_instit varchar2(100 byte);

alter table informatii_documente_master
modify universitate1 varchar2(100 byte);

alter table informatii_documente_master
modify universitate2 varchar2(100 byte);

alter table informatii_documente_master
modify universitate3 varchar2(100 byte);

alter table informatii_documente_master
modify facultate1 varchar2(100 byte);

alter table informatii_documente_master
modify facultate2 varchar2(100 byte);

alter table informatii_documente_master
modify facultate3 varchar2(100 byte);

alter table date_preg_anterioara_licenta
modify denumire_institutie_fac varchar2(100 byte);

alter table date_preg_anterioara_licenta
modify denumire_alta_facultate varchar2(100 byte);

alter table date_preg_anterioara_licenta
modify denumire_institutie_abs varchar2(100 byte);

alter table date_preg_anterioara_licenta
modify denumire_facultate_abs varchar2(100 byte);

<?php

/*error_reporting(0);
ini_set('display_errors', 0);*/

function nrFormularePreadmitere()
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select count(f.id) into :bv from formular_master f ;
                               end;");
    @oci_bind_by_name($s, ":bv", $v, 10);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function nrFormulareLicenta()
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select count(f.id) into :bv from formular_master f ;
                                       end;");
    @oci_bind_by_name($s, ":bv", $v, 10);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function nrFormulareMaster()
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select count(f.id) into :bv from formular_master f ;
                                       end;");
    @oci_bind_by_name($s, ":bv", $v, 10);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

// TAXA DE INSCRIERE

function getNumarulChitantei($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select nr_chitanta into :bv from Formular_master
                                where id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getSuma($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select suma into :bv from Formular_master
                                where id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getScutit($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select REPLACE(REPLACE(scutit, '1', 'DA'), '2', 'NU') into :bv from Formular_master
                                where id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getMotivScutire($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select motiv_scutire into :bv from Formular_master
                                where id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

// Date personale ale candidatului cu cetăţenie română/ UE/ SEE 

function getNumeNastere($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.nume_familie_nastere into :bv from date_personale_master dp
                                         join formular_master f on f.id=dp.formular_id
                                         where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getNumeActual($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.nume_familie_actual into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getPrenume($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.prenume_candidat into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getInitialaTata($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.initialele_tatalui_mamei into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getPrenumeTata($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.prenume_tata into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getPrenumeMama($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.prenume_mama into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getCetatenie($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.cetatenia into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getStareCivila($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.stare_civila into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getSex($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.sex into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getTaraNastere($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.tara_nasterii into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getJudetNastere($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.judetul_nasterii into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getLocalitateNastere($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.localitatea_nasterii into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}
    
function getNationalitate($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.nationalitate into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getEtnie($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.etnie into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getLimbaMaterna($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.limba_materna into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getDataDay($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dp.data_nasterii,'DD') into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getDataMonth($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dp.data_nasterii,'MM') into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getDataYear($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dp.data_nasterii,'YYYY') into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

// DATE ACT DE IDENTITATE

function getTipAct($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.tip_act_ident into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getCNP($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.cnp into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getSerieBuletin($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.serie_act into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getNumarBuletin($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.numar_act into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getBuletinEliberatDe($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.eliberat_de into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}


function getBuletinEliberareDay($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dp.data_eliberarii,'DD') into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getBuletinEliberareMonth($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dp.data_eliberarii,'MM') into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getBuletinEliberareYear($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dp.data_eliberarii,'YYYY') into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getBuletinExpirareDay($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dp.data_expirarii,'DD') into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getBuletinExpirareMonth($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dp.data_expirarii,'MM') into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getBuletinExpirareYear($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dp.data_expirarii,'YYYY') into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

// DOMICILIUL CANDIDATULUI

function getDomiciliulCandidatului($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.mediu_domiciliu into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getStrada($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.strada into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getNrStrada($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.numar into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getNrBloc($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.bloc into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getEtaj($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.etaj into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}
    
function getApartament($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.apartament into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getScara($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.scara into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getCodPostal($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.cod_postal into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getLocalitateDomiciliu($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.localitate_domiciliu into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getJudetDomiciliu($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.judet_domiciliu into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getTaraDomiciliu($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.tara_domiciliu into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}


// DATE DE CONTACT

function getTelefon($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.telefon into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getEmail($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.email into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

/*function getMaterieTest($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select f.optiune_test_scris into :bv from formular_master f 
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}*/

// SOLICITA CAZARE

function getCazareStudii($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(REPLACE(dp.solicita_cazare_studii, '1', 'DA'), '2', 'NU') into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

// ALTE DATE PERSONALE ALE CANDIDATULUI

function getPersoanaCuDizabilitati($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(REPLACE(dp.persoana_cu_dizabilitati , '1', 'DA'), '2', 'NU') into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getPersoanaCuStareSpeciala($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dp.stare_sociala_speciala into :bv from date_personale_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

//------------------------------------------------------------------------------------------------------------
// PANA AICI E OK


// Studiile preuniversitare absolvite, nivel liceu

function getLocalitateLiceu($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.localitate_liceu into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getJudetLiceu($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.judet_liceu into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getTaraLiceu($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.tara_liceu into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getProfilLiceu($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.profil_liceu into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getLiceulAbsolvit($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(dpa.liceul_absolvit, '\"', '&quot;') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getDurataStudiilorLiceu($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.durata_studiilor_liceu into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getAnulAbsolviriiLiceu($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.anul_absolvirii_liceu into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getFormaInvatamantLiceu($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.forma_invatamant_liceu into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getSerieDiplomaBac($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.serie_diploma_bac into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getNrDiplomaBac($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.nr_diploma_bac into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getEmisaDeLiceu($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(dpa.liceul_absolvit, '\"', '&quot;') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getEliberareBacDay($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dp.data_emiterii_diploma,'DD') into :bv from date_preg_anterioara_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getEliberareBacMonth($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dp.data_emiterii_diploma,'MM') into :bv from date_preg_anterioara_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getEliberareBacYear($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dp.data_emiterii_diploma,'YYYY') into :bv from date_preg_anterioara_master dp
                                                 join formular_master f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getNrFoiiMatricole($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.NR_FOII_MATRICOLE into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getNrActRecEchiv($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.nr_act_rec_echiv into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getSerieActRecEchiv($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.serie_act_rec_echiv into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getDataRecEchivDay($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dpa.data_rec_echiv,'DD') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getDataRecEchivMonth($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dpa.data_rec_echiv,'MM') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getDataRecEchivYear($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dpa.data_rec_echiv,'YYYY') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

//-----------------------------------------------------------------------------------------------------------

// PANA AICI E OK

// CERINTE SPECIFICE FACULTATII

function getMedieExamenLicenta($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select c.medie_examen_licenta into :bv from cerinte_master c
                                                 join formular_master f on f.id=c.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getMedieAdmitere($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select c.medie_admitere into :bv from cerinte_master c
                                                 join formular_master f on f.id=c.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getPreferinta1($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select op.preferinta_1 into :bv from ordine_preferinte_master op
                                                 join formular_master f on f.id=op.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getPreferinta2($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select op.preferinta_2 into :bv from ordine_preferinte_master op
                                                 join formular_master f on f.id=op.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getPreferinta3($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select op.preferinta_3 into :bv from ordine_preferinte_master op
                                                 join formular_master f on f.id=op.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getPreferinta4($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select op.preferinta_4 into :bv from ordine_preferinte_master op
                                                 join formular_master f on f.id=op.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getPreferinta5($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select op.preferinta_5 into :bv from ordine_preferinte_master op
                                                 join formular_master f on f.id=op.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getPreferinta6($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select op.preferinta_6 into :bv from ordine_preferinte_master op
                                                 join formular_master f on f.id=op.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getPreferinta7($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select op.preferinta_7 into :bv from ordine_preferinte_master op
                                                 join formular_master f on f.id=op.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getPreferinta8($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select op.preferinta_8 into :bv from ordine_preferinte_master op
                                                 join formular_master f on f.id=op.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getPreferinta9($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select op.preferinta_9 into :bv from ordine_preferinte_master op
                                                 join formular_master f on f.id=op.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getPreferinta10($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select op.preferinta_10 into :bv from ordine_preferinte_master op
                                                 join formular_master f on f.id=op.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getPreferinta11($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select op.preferinta_11 into :bv from ordine_preferinte_master op
                                                 join formular_master f on f.id=op.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getOptiuneAdmitereTaxa($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(REPLACE(op.optiune_admitere_taxa, '1', 'DA'), '2', 'NU') into :bv from ordine_preferinte_master op
                                                 join formular_master f on f.id=op.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

//-----------------------------------------------------------------------------------------------------
// PANA AICI E OK

// Studiile universitare de licenta absolvite

function getTaraFac($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.tara_fac into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getJudetFac($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.judet_fac into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getLocalitateFac($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.localitate_fac into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getDenumireInstitutieFac($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(dpa.denumire_institutie_fac, '\"', '&quot;') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getDurataStudii($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.durata_studii into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getDenumireFacultate($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(dpa.denumire_facultate, '\"', '&quot;') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getDenumireDomeniuLicenta($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.denumire_domeniu_licenta into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getSpecializare($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.specializare into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getFormaInvatamantFac($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.forma_invatamant_fac into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}


function getNrSemBuget($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.nr_sem_buget into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getNrSemBursa($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.nr_sem_bursa into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getTitluObtinut($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.titlu_obtinut into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getDiploLicentaSerie($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.diplo_licenta_serie into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getDiploLicentaNr($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.diplo_licenta_nr into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getDiplEmisaDe($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(dpa.denumire_facultate, '\"', '&quot;') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getEliberareLicentaDay($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dpa.dipl_data_emitere, 'DD') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getEliberareLicentaMonth($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dpa.dipl_data_emitere, 'MM') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getEliberareLicentaYear($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dpa.dipl_data_emitere, 'YYYY') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getNrFoaieMatricola($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.nr_foaie_matricola into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getNrActRecLicenta($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.nr_act_rec_licenta into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getSerieActRecLicenta($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.serie_act_rec_licenta into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getEchivLicentaDay($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dpa.data_act_rec_licenta, 'DD') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getEchivLicentaMonth($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dpa.data_act_rec_licenta, 'MM') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getEchivLicentaYear($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dpa.data_act_rec_licenta, 'YYYY') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

//-------------------------------------------------------------------------------------------------------
// PANA AICI E OK

// Studiile universitare de master in curs

function getInCursStudentAltaFac($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(REPLACE(dpa.in_curs_student_alta_fac, '1', 'DA'), '2', 'NU') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getInCursTaraMaster($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.in_curs_tara_master into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getInCursJudetMaster($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.in_curs_judet_master into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getInCursLocalitateMaster($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.in_curs_localitate_master into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getInCursDenumInstitutieMaster($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(dpa.in_curs_denum_instit_master, '\"', '&quot;') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}


function getInCursDenumFacultateMaster($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(dpa.in_curs_denum_facultate_master, '\"', '&quot;') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getInCursDenumDomeniuMaster($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.in_curs_denum_domeniu_master into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getInCursSpecializareMaster($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.in_curs_specializare_master into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getInCursFormaInvatMaster($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.in_curs_forma_invat_master into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getInCursAnMaster($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.in_curs_an_master into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}


function getInCursNrSemBugetMaster($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.in_curs_nr_sem_buget_master into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getInCursNrSemBursaMaster($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.in_curs_nr_sem_bursa_master into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

//-------------------------------------------------------------------------------------------------------------

//Absolvent al studiilor de master

function getAbsolventAn($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.absolvent_an into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getAbsolventTara($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.absolvent_tara into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getAbsolventJudet($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.absolvent_judet into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getAbsolventLocalitate($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.absolvent_localitate into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getAbsolventDenimireInstit($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(dpa.absolvent_denumire_instit, '\"', '&quot;') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}



function getAbsolventDenumireFacult($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(dpa.absolvent_denumire_facult, '\"', '&quot;') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getAbsolventDomeniu($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.absolvent_domeniu into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getAbsolventSpecializare($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.absolvent_specializare into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getAbsolventTitluObtinut($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.absolvent_titlu_obtinut into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getAbsolventFormaInvat($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.absolvent_forma_invat into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getAbsolventNrSemBuget($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.absolvent_nr_sem_buget into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}


function getAbsolventNrSemBursa($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.absolvent_nr_sem_bursa into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getAreDiplomaMaster($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(REPLACE(dpa.absolvent_cu_diploma, '1', 'DA'), '2', 'NU') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getAbsolventDiploSerie($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.absolvent_diplo_serie into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getAbsolventDiploNr($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.absolvent_diplo_nr into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getAbsolventDiploEmisaDe($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(dpa.absolvent_denumire_facult, '\"', '&quot;') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function dataMasterEmitereDay($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dpa.absolvent_dipl_data_emitere, 'DD') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function dataMasterEmitereMonth($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dpa.absolvent_dipl_data_emitere, 'MM') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function dataMasterEmitereYear($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dpa.absolvent_dipl_data_emitere, 'YYYY') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}
    
function getAbsolventNrFoaieMatricola($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.absolvent_nr_foaie_matricola into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getNrActEchivMaster($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.absolvent_act_rec_nr into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getSerieActEchivMaster($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select dpa.absolvent_act_rec_serie into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getEchivMasterDay($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dpa.absolvent_act_rec_data_echiv, 'DD') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getEchivMasterMonth($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dpa.absolvent_act_rec_data_echiv, 'MM') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getEchivMasterYear($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select to_char(dpa.absolvent_act_rec_data_echiv, 'YYYY') into :bv from date_preg_anterioara_master dpa
                                                 join formular_master f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

//------------------------------------------------------------------------------------------------------------
// PANA AICI E OK

// Informatii privind documentele de studii depuse la dosar

function getDiplomaBacOriginal($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(REPLACE(idm.diploma_bac_original, '1', 'DA'), '2', 'NU') into :bv from informatii_documente_master idm
                                                 join formular_master f on f.id=idm.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getDocEchivPreunivOriginal($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(REPLACE(idm.document_echiv_studii_original, '1', 'DA'), '2', 'NU') into :bv from informatii_documente_master idm
                                                 join formular_master f on f.id=idm.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getDiplomaLicentaOriginal($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(REPLACE(idm.diploma_licenta_original, '1', 'DA'), '2', 'NU') into :bv from informatii_documente_master idm
                                                 join formular_master f on f.id=idm.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getEchivalareDiplomaLicenta($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(REPLACE(idm.dipl_echiv_licenta_original, '1', 'DA'), '2', 'NU') into :bv from informatii_documente_master idm
                                                 join formular_master f on f.id=idm.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getParticipAltundeva($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select REPLACE(REPLACE(idm.particip_altundeva, '1', 'DA'), '2', 'NU') into :bv from informatii_documente_master idm
                                                 join formular_master f on f.id=idm.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getUniversitate1($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select idm.universitate1 into :bv from informatii_documente_master idm
                                                 join formular_master f on f.id=idm.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getFacultate1($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select idm.facultate1 into :bv from informatii_documente_master idm
                                                 join formular_master f on f.id=idm.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getUniversitate2($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select idm.universitate2 into :bv from informatii_documente_master idm
                                                 join formular_master f on f.id=idm.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getFacultate2($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select idm.facultate2 into :bv from informatii_documente_master idm
                                                 join formular_master f on f.id=idm.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getUniversitate3($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select idm.universitate3 into :bv from informatii_documente_master idm
                                                 join formular_master f on f.id=idm.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getFacultate3($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select idm.facultate3 into :bv from informatii_documente_master idm
                                                 join formular_master f on f.id=idm.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

function getAlteSurse($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " begin  select cm.alte_surse into :bv from Chestionar_master cm
                                                 join formular_master f on f.id=cm.formular_id
                                                 where f.id='$id_formular'; end; ");
    @oci_bind_by_name($s, ":bv", $v, 100);
    @oci_execute($s);
    @oci_close($c);
    return $v;
}

?>

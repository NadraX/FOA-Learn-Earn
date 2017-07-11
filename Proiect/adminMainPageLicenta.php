<?php

error_reporting(0);
ini_set('display_errors', 0);

// INFORMATII GENERALE + ID CARD + ADRESA STUDENTULUI + ALTE DATE PERSONALE

function nrFormularePreadmitere()
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select count(f.id) into :bv from formular_licenta f ;
                               end;");
    oci_bind_by_name($s, ":bv", $v, 10);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function nrFormulareLicenta()
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select count(f.id) into :bv from formular_licenta f ;
                                       end;");
    oci_bind_by_name($s, ":bv", $v, 10);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function nrFormulareMaster()
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select count(f.id) into :bv from formular_master f ;
                                       end;");
    oci_bind_by_name($s, ":bv", $v, 10);
    oci_execute($s);
    oci_close($c);
    return $v;
}

/*function nrIntrebari()
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select count(id) into :bv from intrebare; end; ");
    oci_bind_by_name($s, ":bv", $v, 10);
    oci_execute($s);
    oci_close($c);
    return $v;
}*/

function getNumarulChitantei($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select nr_chitanta into :bv from Formular_licenta
                                where id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getSuma($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, "begin  
                            select suma into :bv from Formular_licenta
                            where id='$id_formular';
                            
                            if (:bv = 1) then
                                :bv := 'DA';
                            end if;
                        end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getEsteScutit($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select REPLACE(REPLACE(scutit, '1', 'DA'), '0', 'NU') into :bv from Formular_licenta
                                where id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getMotivScutire($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select motiv_scutire into :bv from Formular_licenta
                                where id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}
    
function getNumeNastere($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.nume_familie_nastere into :bv from date_personale_licenta dp
                                         join formular_licenta f on f.id=dp.formular_id
                                         where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNumeActual($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.nume_familie_actual into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}
function getPrenume($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.prenume_candidat into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getInitialaTata($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.initialele_tatalui_mamei into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}



function getPrenumeTata($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.prenume_tata into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getPrenumeMama($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.prenume_mama into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getCetatenie($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.cetatenia into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getStareCivila($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.stare_civila into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getSex($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.sex into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getTaraNastere($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.tara_nasterii into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getJudetNastere($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.judetul_nasterii into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getLocalitateNastere($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.localitatea_nasterii into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNationalitate($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.nationalitate into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getEtnie($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.etnie into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getLimbaMaterna($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.limba_materna into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getTelefon($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.telefon into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getEmail($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.email into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getCazareStudii($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select REPLACE(REPLACE(dp.solicita_cazare_studii, '1', 'DA'), '0', 'NU') into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getCazareExamen($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select REPLACE(REPLACE(dp.solicita_cazare_admitere, '1', 'DA'), '0', 'NU') into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDataDay($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select to_char(dp.data_nasterii,'DD') into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDataMonth($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select to_char(dp.data_nasterii,'MM') into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDataYear($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select to_char(dp.data_nasterii,'YYYY') into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getCNP($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.cnp into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}


function getTipAct($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.tip_act_ident into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getSerieBuletin($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.serie_act into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNumarBuletin($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.numar_act into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getBuletinEliberatDe($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.eliberat_de into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}


function getBuletinEliberareDay($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select to_char(dp.data_eliberarii,'DD') into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getBuletinEliberareMonth($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select to_char(dp.data_eliberarii,'MM') into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getBuletinEliberareYear($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select to_char(dp.data_eliberarii,'YYYY') into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getBuletinExpirareDay($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select to_char(dp.data_expirarii,'DD') into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getBuletinExpirareMonth($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select to_char(dp.data_expirarii,'MM') into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getBuletinExpirareYear($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select to_char(dp.data_expirarii,'YYYY') into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDomiciliuStabil($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.mediu_domiciliu into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getStrada($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.strada into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNrStrada($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.numar into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNrBloc($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.bloc into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getApartament($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.apartament into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getScara($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.scara into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getEtaj($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.etaj into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getMaterieTest($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select f.optiune_test_scris into :bv from formular_licenta f 
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}



function getCodPostal($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.cod_postal into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getLocalitateDomiciliu($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.localitate_domiciliu into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getJudetDomiciliu($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.judet_domiciliu into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getTaraDomiciliu($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.tara_domiciliu into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getPersoanaCuDizabilitati($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select REPLACE(REPLACE(dp.persoana_cu_dizabilitati, '1', 'DA'), '0', 'NU') into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getStareSocialaSpeciala($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dp.stare_sociala_speciala into :bv from date_personale_licenta dp
                                                 join formular_licenta f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}
    
//-----------------------------------------------------------------------------------------------------------

// CERINTE SPECIFICE FACULTATII

function getMedieGeneralaBac($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select c.medie_generala_bac into :bv from cerinte_licenta c
                                                 join formular_licenta f on f.id=c.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getMedieDisciplinaMax($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select c.medie_disciplina_max into :bv from cerinte_licenta c
                                                 join formular_licenta f on f.id=c.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getOptiuneTestScris($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select c.optiune_test_scris into :bv from cerinte_licenta c
                                                 join formular_licenta f on f.id=c.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getSolicitaEchivalare($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select REPLACE(REPLACE(c.solicita_echivalare, '1', 'DA'), '0', 'NU') into :bv from cerinte_licenta c
                                                 join formular_licenta f on f.id=c.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getAnParticiparePreadmitere($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select c.an_participare_preadmitere into :bv from cerinte_licenta c
                                                 join formular_licenta f on f.id=c.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getVreaNotaPreadmitere($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select REPLACE(REPLACE(c.vrea_nota_preadmitere, '1', 'DA'), '0', 'NU') into :bv from cerinte_licenta c
                                                 join formular_licenta f on f.id=c.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getVreaSaSustinaExamen($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select REPLACE(REPLACE(c.vrea_sa_sustina_examen, '1', 'DA'), '0', 'NU') into :bv from cerinte_licenta c
                                                 join formular_licenta f on f.id=c.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

//------------------------------------------------------------------------------------------------------------

// Studiile preuniversitare absolvite, nivel liceu

function getLocalitateLiceu($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.localitate_liceu into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getJudetLiceu($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.judet_liceu into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getTaraLiceu($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.tara_liceu into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getProfilLiceu($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.profil_liceu into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getLiceulAbsolvit($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select REPLACE(dpa.liceul_absolvit, '\"', '&quot;') into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDurataStudiilorLiceu($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.durata_studiilor_liceu into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getAnulAbsolviriiLiceu($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.anul_absolvirii_liceu into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getFormaInvatamantLiceu($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.forma_invatamant_liceu into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getSerieDiplomaBac($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.serie_diploma_bac into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNrDiplomaBac($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.nr_diploma_bac into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getEmisaDeLiceu($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select REPLACE(dpa.liceul_absolvit, '\"', '&quot;') into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDataEmiteriiDiploma($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.data_emiterii_diploma into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNrFoiiMatricole($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.nr_foii_matricole into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNrActRecEchiv($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.nr_act_rec_echiv into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getSerieActRecEchiv($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.serie_act_rec_echiv into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDataRecEchiv($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.data_rec_echiv into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

//-----------------------------------------------------------------------------------------------------

// Studiile universitare de licenta in curs

function getStudentAltaFac($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select REPLACE(REPLACE(dpa.student_alta_fac, '1', 'DA'), '0', 'NU') into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getTaraFac($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.tara_fac into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getJudetFac($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.judet_fac into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getLocalitateFac($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.localitate_fac into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDenumireInstitutieFac($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.denumire_institutie_fac into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDurataStudiiFac($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.durata_studii_fac into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDenumireAltaFacultate($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.denumire_alta_facultate into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDomeniuLicentaFac($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.domeniu_licenta_fac into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getSpecializareFac($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.specializare_fac into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getFormaInvatamantFac($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.forma_invatamant_fac into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getAnulFac($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.anul_fac into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNrSemestreBugetFac($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.nr_semestre_buget_fac into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNrSemestreBursaFac($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.nr_semestre_bursa_fac into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}
//-------------------------------------------------------------------------------------------------------

// Studiile universitare de licenta absolvite

function getAnulAbsolvirii($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.anul_absolvirii into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getTaraFacAbs($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.tara_fac_abs into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getJudetFacAbs($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.judet_fac_abs into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getLocalitateFacAbs($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.localitate_fac_abs into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDenumireInstitutieAbs($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.denumire_institutie_abs into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDenumireFacultateAbs($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select REPLACE(dpa.denumire_facultate_abs, '\"', '&quot;') into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDomeniuLicentaAbs($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.domeniu_licenta_abs into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getSpecializareAbs($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.specializare_abs into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getTitluObtinut($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.titlut_obtinut into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getFormaInvatamantAbs($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.forma_invatamant_abs into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNrSemestreBugetAbs($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.nr_semestre_buget_abs into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNrSemestreBursaAbs($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.nr_semestre_bursa_abs into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDurataStudiilorAbs($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.durata_studiilor_abs into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getSerieDiplomaLicenta($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.serie_diploma_licenta into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNrDiplomaLicenta($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.nr_diploma_licenta into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getLicentaEmisaDe($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select REPLACE(dpa.denumire_facultate_abs, '\"', '&quot;') into :bv from date_preg_anterioara_licenta dpa
                                 join formular_licenta f on f.id=dpa.formular_id
                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDataEmiteriiLicenta($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.data_emiterii_licenta into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNrSupliment($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.nr_supliment into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNrActRecEchivAbs($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.nr_act_rec_echiv_abs into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getSerieActRecEchivAbs($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.serie_acr_rec_echiv_abs into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDataEchivAbs($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select dpa.data_echiv_abs into :bv from date_preg_anterioara_licenta dpa
                                                 join formular_licenta f on f.id=dpa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

//-------------------------------------------------------------------------------------------------------

// Optiuni de admitere in ordinea preferintelor

function getPreferinta1($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select op.preferinta_1 into :bv from optiuni_licenta op
                                                 join formular_licenta f on f.id=op.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getPreferinta2($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select op.preferinta_2 into :bv from optiuni_licenta op
                                                 join formular_licenta f on f.id=op.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getPreferinta3($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select op.preferinta_3 into :bv from optiuni_licenta op
                                                 join formular_licenta f on f.id=op.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getPreferinta4($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select op.preferinta_4 into :bv from optiuni_licenta op
                                                 join formular_licenta f on f.id=op.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getLocTaxa($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select op.stare_taxa into :bv from optiuni_licenta op
                                                 join formular_licenta f on f.id=op.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

//-------------------------------------------------------------------------------------------------------

// Informatii privind actele depuse la dosar

function getDiplomaBacOriginal($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select REPLACE(REPLACE(idl.diploma_bac_original, '1', 'DA'), '0', 'NU') into :bv from informatii_documente_licenta idl
                                 join formular_licenta f on f.id=idl.formular_id
                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getAdeverintaOriginal($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select REPLACE(REPLACE(idl.adeverinta_original, '1', 'DA'), '0', 'NU') into :bv from informatii_documente_licenta idl
                                 join formular_licenta f on f.id=idl.formular_id
                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getEchivalareStudii($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select REPLACE(REPLACE(idl.document_echiv_studii_original, '1', 'DA'), '0', 'NU') into :bv from informatii_documente_licenta idl
                                 join formular_licenta f on f.id=idl.formular_id
                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDiplomaOlimpiada($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " begin  select REPLACE(REPLACE(idl.diploma_olimpiada, '1', 'DA'), '0', 'NU') into :bv from informatii_documente_licenta idl
                                 join formular_licenta f on f.id=idl.formular_id
                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

?>



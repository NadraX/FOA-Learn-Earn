-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2017-06-12 19:45:46.284

DROP TABLE Cerinte_licenta;
DROP TABLE Cerinte_master;
DROP TABLE Chestionar_licenta;
DROP TABLE Chestionar_master;
DROP TABLE Date_personale_licenta;
DROP TABLE Date_personale_master;
DROP TABLE Date_personale_preadmitere;
DROP TABLE Date_preg_anterioara_licenta;
DROP TABLE Date_preg_anterioara_master;
DROP TABLE Informatii_documente_licenta;
DROP TABLE Informatii_documente_master;
DROP TABLE Optiuni_licenta;
DROP TABLE Ordine_preferinte_master;
DROP TABLE Formular_licenta;
DROP TABLE Formular_master;
DROP TABLE Formular_preadmitere;

-- tables
-- Table: Cerinte_licenta
CREATE TABLE Cerinte_licenta (
    formular_id integer  NOT NULL,
    medie_generala_bac number(4,2)  NOT NULL,
    medie_disciplina_max number(4,2)  NOT NULL,
    optiune_test_scris varchar2(20)  NOT NULL,
    solicita_echivalare number(1,0)  NOT NULL,
    an_participare_preadmitere number(4,0)  NULL,
    vrea_nota_preadmitere number(1,0)  NULL,
    vrea_sa_sustina_examen number(1,0)  NULL
) ;

-- Table: Cerinte_master
CREATE TABLE Cerinte_master (
    formular_id integer  NOT NULL,
    medie_examen_licenta number(4,2)  NOT NULL,
    medie_admitere number(4,2)  NOT NULL
) ;

-- Table: Chestionar_licenta
CREATE TABLE Chestionar_licenta (
    Formular_id integer  NOT NULL,
    site_admitere number(1,0)  NOT NULL,
    site_facultate number(1,0)  NOT NULL,
    brosura_pliant number(1,0)  NOT NULL,
    pagina_facebook number(1,0)  NOT NULL,
    prieteni number(1,0)  NOT NULL,
    sapatamana_portilor number(1,0)  NOT NULL,
    prezentare_in_liceu number(1,0)  NOT NULL,
	profesori number(1,0) NOT NULL,
    presa number(1,0)  NOT NULL,
    alte_surse varchar2(35)  NULL,
    prestigiu number(1,0)  NOT NULL,
    calitate number(1,0)  NOT NULL,
    sfat_persoane number(1,0)  NOT NULL,
    statut_profesie number(1,0)  NOT NULL,
    colegii number(1,0)  NOT NULL,
    materiile number(1,0)  NOT NULL,
    informatiile_universitatii number(1,0)  NOT NULL,
    apropierea number(1,0)  NOT NULL
) ;

-- Table: Chestionar_master
CREATE TABLE Chestionar_master (
    formular_id integer  NOT NULL,
    site_admitere number(1,0)  NOT NULL,
    site_facultate number(1,0)  NOT NULL,
    pagina_facebook number(1,0)  NOT NULL,
    prieteni number(1,0)  NOT NULL,
    prof_facultate number(1,0)  NOT NULL,
    presa number(1,0)  NOT NULL,
    alte_surse varchar2(35)  NULL,
    prestigiu number(1,0)  NOT NULL,
    calitate number(1,0)  NOT NULL,
    sfat_persoane number(1,0)  NOT NULL,
    statut_profesie number(1,0)  NOT NULL,
    colegii number(1,0)  NOT NULL,
    materiile number(1,0)  NOT NULL,
    informatiile_universitatii number(1,0)  NOT NULL,
    apropierea number(1,0)  NOT NULL
) ;

-- Table: Date_personale_licenta
CREATE TABLE Date_personale_licenta (
    formular_id integer  NOT NULL,
    nume_familie_nastere varchar2(35)  NOT NULL,
    initialele_tatalui_mamei varchar2(15)  NOT NULL,
    nume_familie_actual varchar2(35)  NOT NULL,
    prenume_candidat varchar2(35)  NOT NULL,
    prenume_tata varchar2(35)  NULL,
    prenume_mama varchar2(35)  NULL,
    cnp number(13,0)  NOT NULL,
    sex char(1)  NOT NULL,
    data_nasterii date  NOT NULL,
    tara_nasterii varchar2(35)  NOT NULL,
    judetul_nasterii varchar2(35)  NOT NULL,
    localitatea_nasterii varchar2(35)  NOT NULL,
    cetatenia varchar2(35)  NOT NULL,
    nationalitate varchar2(35)  NOT NULL,
    etnie varchar2(35)  NOT NULL,
    limba_materna varchar2(35)  NOT NULL,
    stare_civila varchar2(25)  NULL,
	tip_act_ident varchar2(11)  NOT NULL,
    serie_act varchar2(10)  NOT NULL,
    numar_act varchar2(10)  NOT NULL,
    eliberat_de varchar2(35)  NOT NULL,
    data_eliberarii date  NOT NULL,
    data_expirarii date  NOT NULL,
    mediu_domiciliu char(5)  NOT NULL,
    tara_domiciliu varchar2(35)  NOT NULL,
    judet_domiciliu varchar2(35)  NOT NULL,
    localitate_domiciliu varchar2(35)  NOT NULL,
    strada varchar2(70)  NOT NULL,
    numar varchar2(10)  NOT NULL,
    bloc varchar2(10)  NOT NULL,
    scara varchar2(10)  NOT NULL,
    etaj varchar2(10)  NOT NULL,
    apartament varchar2(5)  NOT NULL,
	cod_postal number(6,0) NOT NULL,
    telefon varchar2(15)  NOT NULL,
    email varchar2(70)  NOT NULL,
    solicita_cazare_studii number(1,0)  NOT NULL,
    solicita_cazare_admitere number(1,0)  NOT NULL,
	stare_sociala_speciala  varchar2(50)  NOT NULL,
    --orfan_de_ambii_parinti number(1,0)  NOT NULL,
    --orfan_de_un_parinte number(1,0)  NOT NULL,
    --provenit_case_de_copii number(1,0)  NOT NULL,
    --provenit_plasament_familial number(1,0)  NOT NULL,
    --provenit_familie_monoparentala number(1,0)  NOT NULL,
    persoana_cu_dizabilitati number(1,0)  NOT NULL
) ;

-- Table: Date_personale_master
CREATE TABLE Date_personale_master (
    formular_id integer  NOT NULL,
    nume_familie_nastere varchar2(35)  NOT NULL,
    initialele_tatalui_mamei varchar2(15)  NOT NULL,
    nume_familie_actual varchar2(35)  NOT NULL,
    prenume_candidat varchar2(35)  NOT NULL,
    prenume_tata varchar2(35)  NULL,
    prenume_mama varchar2(35)  NULL,
    cnp number(13,0)  NOT NULL,
    sex char(1)  NOT NULL,
    data_nasterii date  NOT NULL,
    tara_nasterii varchar2(35)  NOT NULL,
    judetul_nasterii varchar2(35)  NOT NULL,
    localitatea_nasterii varchar2(35)  NOT NULL,
    cetatenia varchar2(35)  NOT NULL,
    nationalitate varchar2(35)  NOT NULL,
    etnie varchar2(35)  NOT NULL,
    limba_materna varchar2(35)  NOT NULL,
    stare_civila varchar2(25)  NULL,
	tip_act_ident varchar2(11)  NOT NULL,
    serie_act varchar2(10) NOT NULL,
    numar_act varchar2(10)  NOT NULL,
    eliberat_de varchar2(35)  NOT NULL,
    data_eliberarii date  NOT NULL,
    data_expirarii date  NOT NULL,
    mediu_domiciliu char(5)  NOT NULL,
    tara_domiciliu varchar2(35)  NOT NULL,
    judet_domiciliu varchar2(35)  NOT NULL,
    localitate_domiciliu varchar2(35)  NOT NULL,
    strada varchar2(70)  NOT NULL,
    numar varchar2(10)  NOT NULL,
    bloc varchar2(10)  NOT NULL,
    scara varchar2(10)  NOT NULL,
    etaj varchar2(10)  NOT NULL,
    apartament varchar2(5)  NOT NULL,
	cod_postal number(6,0) NOT NULL,
    telefon varchar2(15)  NOT NULL,
    email varchar2(70)  NOT NULL,
    solicita_cazare_studii number(1,0)  NOT NULL,
	stare_sociala_speciala  varchar2(50)  NOT NULL,
    --orfan_de_ambii_parinti number(1,0)  NOT NULL,
    --orfan_de_un_parinte number(1,0)  NOT NULL,
    --provenit_case_de_copii number(1,0)  NOT NULL,
    --provenit_plasament_familial number(1,0)  NOT NULL,
    --provenit_familie_monoparentala number(1,0)  NOT NULL,
    persoana_cu_dizabilitati number(1,0)  NOT NULL
) ;

-- Table: Date_personale_preadmitere
CREATE TABLE Date_personale_preadmitere (
    Formular_id integer  NOT NULL,
    nume_familie_nastere varchar2(35)  NOT NULL,
    initialele_tatalui_mamei varchar2(15)  NOT NULL,
    nume_familie_actual varchar2(35)  NOT NULL,
    prenume_candidat varchar2(35)  NOT NULL,
    prenume_tata varchar2(35)  NULL,
    prenume_mama varchar2(35)  NULL,
    cnp number(13,0)  NOT NULL,
    sex char(1)  NOT NULL,
    data_nasterii date  NOT NULL,
    tara_nasterii varchar2(35)  NOT NULL,
    judetul_nasterii varchar2(35)  NOT NULL,
    localitatea_nasterii varchar2(35)  NOT NULL,
    cetatenia varchar2(35)  NOT NULL,
    nationalitate varchar2(35)  NOT NULL,
    etnie varchar2(35)  NOT NULL,
    limba_materna varchar2(35)  NOT NULL,
	tip_act_ident varchar2(11)  NOT NULL,
    serie_act varchar2(10) NOT NULL,
    numar_act varchar2(10)  NOT NULL,
    eliberat_de varchar2(35)  NOT NULL,
    data_eliberarii date  NOT NULL,
    data_expirarii date  NOT NULL,
    institutie_liceu varchar2(140)  NOT NULL,
    tara_liceu varchar2(35)  NOT NULL,
    localitate_liceu varchar2(35)  NOT NULL,
    judet_liceu varchar2(35)  NOT NULL
) ;

-- Table: Date_preg_anterioara_licenta
CREATE TABLE Date_preg_anterioara_licenta (
    formular_id integer  NOT NULL,
    liceul_absolvit varchar2(100)  NOT NULL,
    tara_liceu varchar2(35)  NOT NULL,
    localitate_liceu varchar2(35)  NOT NULL,
    judet_liceu varchar2(35)  NOT NULL,
    profil_liceu varchar2(35)  NOT NULL,
    durata_studiilor_liceu number(1,0)  NOT NULL,
    anul_absolvirii_liceu number(4,0)  NOT NULL,
    forma_invatamant_liceu varchar2(5)  NOT NULL,
    serie_diploma_bac varchar2(9)  NOT NULL,
    nr_diploma_bac varchar2(10)  NOT NULL,
    data_emiterii_diploma date  NOT NULL,
    nr_foii_matricole varchar2(10)  NULL,
    nr_act_rec_echiv varchar2(10)  NULL,
    serie_act_rec_echiv varchar2(10)  NULL,
    data_rec_echiv date  NULL,
    student_alta_fac number(1,0)  NULL,
    tara_fac varchar2(35)  NULL,
    localitate_fac varchar2(35)  NULL,
    judet_fac varchar2(35)  NULL,
    denumire_institutie_fac varchar2(35)  NULL,
    denumire_alta_facultate varchar2(50)  NULL,
    domeniu_licenta_fac varchar2(35)  NULL,
    specializare_fac varchar2(35)  NULL,
    forma_invatamant_fac varchar2(5)  NULL,
    anul_fac number(1,0)  NULL,
    nr_semestre_buget_fac number(2,0)  NULL,
    nr_semestre_bursa_fac number(2,0)  NULL,
    anul_absolvirii number(4,0)  NULL,
    cu_licenta number(1,0)  NULL,
    tara_fac_abs varchar2(35)  NULL,
    localitate_fac_abs varchar2(35)  NULL,
    judet_fac_abs varchar2(35)  NULL,
    denumire_institutie_abs varchar2(50)  NULL,
    denumire_facultate_abs varchar2(50)  NULL,
    domeniu_licenta_abs varchar2(35)  NULL,
    specializare_abs varchar2(35)  NULL,
    titlut_obtinut varchar2(35)  NULL,
    forma_invatamant_abs varchar2(5)  NULL,
    nr_semestre_buget_abs number(2,0)  NULL,
    nr_semestre_bursa_abs number(2,0)  NULL,
    durata_studiilor_abs number(2,0)  NULL,
    serie_diploma_licenta varchar2(9)  NULL,
    nr_diploma_licenta varchar2(10)  NULL,
    data_emiterii_licenta date  NULL,
    nr_supliment varchar2(10)  NULL,
    nr_act_rec_echiv_abs varchar2(10)  NULL,
    serie_acr_rec_echiv_abs varchar2(10)  NULL,
    data_echiv_abs date  NULL
) ;

-- Table: Date_preg_anterioara_master
CREATE TABLE Date_preg_anterioara_master (
    formular_id integer  NOT NULL,
    liceul_absolvit varchar2(100)  NOT NULL,
    tara_liceu varchar2(35)  NOT NULL,
    localitate_liceu varchar2(35)  NOT NULL,
    judet_liceu varchar2(35)  NOT NULL,
    profil_liceu varchar2(35)  NOT NULL,
    durata_studiilor_liceu number(1,0)  NOT NULL,
    anul_absolvirii_liceu number(4,0)  NOT NULL,
    forma_invatamant_liceu varchar2(5)  NOT NULL,
    serie_diploma_bac varchar2(9)  NOT NULL,
    nr_diploma_bac varchar2(10)  NOT NULL,
    data_emiterii_diploma date  NOT NULL,
    nr_foii_matricole varchar2(10)	NULL,
    nr_act_rec_echiv varchar2(10)  NULL,
    serie_act_rec_echiv varchar2(10)  NULL,
    data_rec_echiv date  NULL,
    tara_fac varchar2(35)  NOT NULL,
    localitate_fac varchar2(35)  NOT NULL,
    judet_fac varchar2(35)  NOT NULL,
    denumire_institutie_fac varchar2(35)  NOT NULL,
    denumire_facultate varchar2(35)  NOT NULL,
    denumire_domeniu_licenta varchar2(35)  NOT NULL,
    specializare varchar2(35)  NOT NULL,
    titlu_obtinut varchar2(35)  NOT NULL,
    forma_invatamant_fac varchar2(5)  NOT NULL,
    nr_sem_buget number(2,0)  NOT NULL,
    nr_sem_bursa number(2,0)  NOT NULL,
    durata_studii number(1,0)  NOT NULL,
    diplo_licenta_serie varchar2(10)  NOT NULL,
    diplo_licenta_nr varchar2(10)  NOT NULL,
    dipl_data_emitere date  NOT NULL,
    nr_foaie_matricola varchar2(10)  NULL,
    act_rec_licenta varchar2(10)  NULL,
    nr_act_rec_licenta varchar2(10)  NULL,
    serie_act_rec_licenta varchar2(10)  NULL,
    data_act_rec_licenta date  NULL,
    in_curs_student_alta_fac number(1,0)  NULL,
    in_curs_tara_master varchar2(35)  NULL,
    in_curs_localitate_master varchar2(35)  NULL,
    in_curs_judet_master varchar2(35)  NULL,
    in_curs_denum_instit_master varchar2(35)  NULL,
    in_curs_denum_facultate_master varchar2(35)  NULL,
    in_curs_denum_domeniu_master varchar2(35)  NULL,
    in_curs_specializare_master varchar2(35)  NULL,
    in_curs_forma_invat_master varchar2(5)  NULL,
    in_curs_an_master number(1,0)  NULL,
    in_curs_nr_sem_buget_master number(2,0)  NULL,
    in_curs_nr_sem_bursa_master number(2,0)  NULL,
    absolvent_an number(4,0)  NULL,
    absolvent_tara varchar2(35)  NULL,
    absolvent_localitate varchar2(35)  NULL,
    absolvent_judet varchar2(35)  NULL,
    absolvent_denumire_instit varchar2(35)  NULL,
    absolvent_denumire_facult varchar2(35)  NULL,
    absolvent_domeniu varchar2(35)  NULL,
    absolvent_specializare varchar2(35)  NULL,
	absolvent_titlu_obtinut varchar2(35)  NULL,
    absolvent_forma_invat varchar2(5)  NULL,
    absolvent_nr_sem_buget number(2,0)  NULL,
    absolvent_nr_sem_bursa number(2,0)  NULL,
	absolvent_durata_studiilor number(1,0) NULL,
	absolvent_cu_diploma number(1,0) NULL,
    absolvent_diplo_serie varchar2(10)  NULL,
    absolvent_diplo_nr varchar2(10)  NULL,
    absolvent_dipl_data_emitere date  NULL,
    absolvent_nr_foaie_matricola varchar2(10)  NULL,
    absolvent_act_rec_nr varchar2(10)  NULL,
    absolvent_act_rec_serie varchar2(10)  NULL,
    absolvent_act_rec_data_echiv date  NULL
) ;

-- Table: Formular_licenta
CREATE TABLE Formular_licenta (
    id integer  NOT NULL,
    nr_chitanta varchar2(70)  NOT NULL,
    suma integer  NOT NULL,
    scutit number(1,0)  NOT NULL,
    motiv_scutire varchar2(250)  NULL,
	data_crearii TIMESTAMP	NOT NULL,
	data_ultimei_modificari TIMESTAMP NULL,
	stare number(1,0) NOT NULL,
    CONSTRAINT Formular_licenta_pk PRIMARY KEY (id)
) ;

-- Table: Formular_master
CREATE TABLE Formular_master (
    id integer  NOT NULL,
    nr_chitanta varchar2(70)  NOT NULL,
    suma integer  NOT NULL,
    scutit number(1,0)  NOT NULL,
    motiv_scutire varchar2(250)  NULL,
	data_crearii TIMESTAMP	NOT NULL,
	data_ultimei_modificari TIMESTAMP NULL,
	stare number(1,0) NOT NULL,
    CONSTRAINT Formular_master_pk PRIMARY KEY (id)
) ;

-- Table: Formular_preadmitere
CREATE TABLE Formular_preadmitere (
    id integer  NOT NULL,
    nr_chitanta varchar2(70)  NOT NULL,
    suma integer  NOT NULL,
    optiune_test_scris varchar2(25)  NOT NULL,
	data_crearii TIMESTAMP	NOT NULL,
	data_ultimei_modificari TIMESTAMP NULL,
	stare number(1,0) NOT NULL,
    CONSTRAINT Formular_preadmitere_pk PRIMARY KEY (id)
) ;

-- Table: Informatii_documente_licenta
CREATE TABLE Informatii_documente_licenta (
    formular_id integer  NOT NULL,
    diploma_bac_original number(1,0)  NULL,
    adeverinta_original number(1,0)  NULL,
    document_echiv_studii_original number(1,0)	NULL,
    diploma_olimpiada number(1,0)  NULL,
    participa_altundeva number(1,0)  NOT NULL,
	universitate1 varchar2(70)  NULL,
    facultate1 varchar2(70)  NULL,
    universitate2 varchar2(70)  NULL,
    facultate2 varchar2(70)  NULL,
    universitate3 varchar2(70)  NULL,
    facultate3 varchar2(70)  NULL
) ;

-- Table: Informatii_documente_master
CREATE TABLE Informatii_documente_master (
    formular_id integer  NOT NULL,
    diploma_bac_original number(1,0)  NOT NULL,
    doc_echiv_preuniv_original number(1,0)  NOT NULL,
    diploma_licenta_original number(1,0)  NOT NULL,
    dipl_echiv_licenta_original number(1,0)  NOT NULL,
    particip_altundeva number(1,0)  NOT NULL,
	universitate1 varchar2(70)  NULL,
    facultate1 varchar2(70)  NULL,
    universitate2 varchar2(70)  NULL,
    facultate2 varchar2(70)  NULL,
    universitate3 varchar2(70)  NULL,
    facultate3 varchar2(70)  NULL
) ;

-- Table: Optiuni_licenta
CREATE TABLE Optiuni_licenta (
    formular_id integer  NOT NULL,
    preferinta_1 varchar2(60)  NOT NULL,
    preferinta_2 varchar2(60)  NULL,
    preferinta_3 varchar2(60)  NULL,
    preferinta_4 varchar2(60)  NULL,
    stare_taxa varchar2(20)  NOT NULL
) ;

-- Table: Ordine_preferinte_master
CREATE TABLE Ordine_preferinte_master (
    formular_id integer  NOT NULL,
    preferinta_1 varchar2(60)  NOT NULL,
    preferinta_2 varchar2(60)  NOT NULL,
    preferinta_3 varchar2(60)  NOT NULL,
    preferinta_4 varchar2(60)  NOT NULL,
    preferinta_5 varchar2(60)  NOT NULL,
    preferinta_6 varchar2(60)  NOT NULL,
    preferinta_7 varchar2(60)  NOT NULL,
    preferinta_8 varchar2(60)  NOT NULL,
    preferinta_9 varchar2(60)  NOT NULL,
    preferinta_10 varchar2(60)  NOT NULL,
    preferinta_11 varchar2(60)  NOT NULL,
    optiune_admitere_taxa varchar2(20)  NOT NULL
) ;

-- foreign keys
-- Reference: Cerinte_Formular (table: Cerinte_licenta)
ALTER TABLE Cerinte_licenta ADD CONSTRAINT Cerinte_Formular
    FOREIGN KEY (formular_id)
    REFERENCES Formular_licenta (id);

-- Reference: Cerinte_facultate_master_Formular_master (table: Cerinte_master)
ALTER TABLE Cerinte_master ADD CONSTRAINT Ceri_faaster_Formular
    FOREIGN KEY (formular_id)
    REFERENCES Formular_master (id);

-- Reference: Chestionar_Formular (table: Chestionar_licenta)
ALTER TABLE Chestionar_licenta ADD CONSTRAINT Chestionar_Formular
    FOREIGN KEY (Formular_id)
    REFERENCES Formular_licenta (id);

-- Reference: Chestionar_Formular_master (table: Chestionar_master)
ALTER TABLE Chestionar_master ADD CONSTRAINT Chestionar_Formular_master
    FOREIGN KEY (formular_id)
    REFERENCES Formular_master (id);

-- Reference: Copy_of_Date_personale_Formular (table: Date_personale_master)
ALTER TABLE Date_personale_master ADD CONSTRAINT Cof_Dapers_Formular
    FOREIGN KEY (formular_id)
    REFERENCES Formular_master (id);

-- Reference: Copy_of_Date_preg_anterioara_Formular (table: Date_preg_anterioara_master)
ALTER TABLE Date_preg_anterioara_master ADD CONSTRAINT Copy_ateeg_anrmular
    FOREIGN KEY (formular_id)
    REFERENCES Formular_master (id);

-- Reference: Date_personale_Formular (table: Date_personale_licenta)
ALTER TABLE Date_personale_licenta ADD CONSTRAINT Date_personale_Formular
    FOREIGN KEY (formular_id)
    REFERENCES Formular_licenta (id);

-- Reference: Date_personale_preadmitere_Formular_preadmitere (table: Date_personale_preadmitere)
ALTER TABLE Date_personale_preadmitere ADD CONSTRAINT Date_pers_pdmit_Fular
    FOREIGN KEY (Formular_id)
    REFERENCES Formular_preadmitere (id);

-- Reference: Date_preg_anterioara_Formular (table: Date_preg_anterioara_licenta)
ALTER TABLE Date_preg_anterioara_licenta ADD CONSTRAINT Date_prg_ana_Formular
    FOREIGN KEY (formular_id)
    REFERENCES Formular_licenta (id);

-- Reference: Informatii_documente_Formular (table: Informatii_documente_licenta)
ALTER TABLE Informatii_documente_licenta ADD CONSTRAINT Infotdumente_Fomular
    FOREIGN KEY (formular_id)
    REFERENCES Formular_licenta (id);

-- Reference: Informatii_documente_Formular_master (table: Informatii_documente_master)
ALTER TABLE Informatii_documente_master ADD CONSTRAINT Info_doc_Fular_master
    FOREIGN KEY (formular_id)
    REFERENCES Formular_master (id);

-- Reference: Optiuni_Formular (table: Optiuni_licenta)
ALTER TABLE Optiuni_licenta ADD CONSTRAINT Optiuni_Formular
    FOREIGN KEY (formular_id)
    REFERENCES Formular_licenta (id);

-- Reference: Ordine_preferinte_Formular_master (table: Ordine_preferinte_master)
ALTER TABLE Ordine_preferinte_master ADD CONSTRAINT Ordinpref_Formu_master
    FOREIGN KEY (formular_id)
    REFERENCES Formular_master (id);

-- End of file.


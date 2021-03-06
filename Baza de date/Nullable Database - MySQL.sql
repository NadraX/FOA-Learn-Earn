-- Table: Cerinte_licenta
CREATE TABLE Cerinte_licenta(
    formular_id INTEGER NOT NULL,
    medie_generala_bac DECIMAL(4, 2) NULL,
    medie_disciplina_max DECIMAL(4, 2) NULL,
    optiune_test_scris VARCHAR(20) NULL,
    solicita_echivalare SMALLINT NULL,
    an_participare_preadmitere SMALLINT NULL,
    vrea_nota_preadmitere SMALLINT NULL,
    vrea_sa_sustina_examen SMALLINT NULL
);

-- Table: Cerinte_master
CREATE TABLE Cerinte_master(
    formular_id INTEGER NOT NULL,
    medie_examen_licenta DECIMAL(4, 2) NULL,
    medie_admitere DECIMAL(4, 2) NULL
); 

-- Table: Chestionar_licenta
CREATE TABLE Chestionar_licenta(
    Formular_id INTEGER NOT NULL,
    site_admitere SMALLINT NULL,
    site_facultate SMALLINT NULL,
    brosura_pliant SMALLINT NULL,
    pagina_facebook SMALLINT NULL,
    prieteni SMALLINT NULL,
    sapatamana_portilor SMALLINT NULL,
    prezentare_in_liceu SMALLINT NULL,
    profesori SMALLINT NULL,
    presa SMALLINT NULL,
    alte_surse VARCHAR(35) NULL,
    prestigiu SMALLINT NULL,
    calitate SMALLINT NULL,
    sfat_persoane SMALLINT NULL,
    statut_profesie SMALLINT NULL,
    colegii SMALLINT NULL,
    materiile SMALLINT NULL,
    informatiile_universitatii SMALLINT NULL,
    apropierea SMALLINT NULL
); 

-- Table: Chestionar_master
CREATE TABLE Chestionar_master(
    formular_id INTEGER NOT NULL,
    site_admitere SMALLINT NULL,
    site_facultate SMALLINT NULL,
    pagina_facebook SMALLINT NULL,
    prieteni SMALLINT NULL,
    prof_facultate SMALLINT NULL,
    presa SMALLINT NULL,
    alte_surse VARCHAR(35) NULL,
    prestigiu SMALLINT NULL,
    calitate SMALLINT NULL,
    sfat_persoane SMALLINT NULL,
    statut_profesie SMALLINT NULL,
    colegii SMALLINT NULL,
    materiile SMALLINT NULL,
    informatiile_universitatii SMALLINT NULL,
    apropierea SMALLINT NULL
); 

-- Table: Date_personale_licenta
CREATE TABLE Date_personale_licenta(
    formular_id INTEGER NOT NULL,
    nume_familie_nastere VARCHAR(35) NULL,
    initialele_tatalui_mamei VARCHAR(15) NULL,
    nume_familie_actual VARCHAR(35) NULL,
    prenume_candidat VARCHAR(35) NULL,
    prenume_tata VARCHAR(35) NULL,
    prenume_mama VARCHAR(35) NULL,
    cnp BIGINT NULL,
    sex CHAR(1) NULL,
    data_nasterii DATE NULL,
    tara_nasterii VARCHAR(35) NULL,
    judetul_nasterii VARCHAR(35) NULL,
    localitatea_nasterii VARCHAR(35) NULL,
    cetatenia VARCHAR(35) NULL,
    nationalitate VARCHAR(35) NULL,
    etnie VARCHAR(35) NULL,
    limba_materna VARCHAR(35) NULL,
    stare_civila VARCHAR(25) NULL,
    tip_act_ident VARCHAR(10) NULL,
    serie_act VARCHAR(10) NULL,
    numar_act VARCHAR(10) NULL,
    eliberat_de VARCHAR(35) NULL,
    data_eliberarii DATE NULL,
    data_expirarii DATE NULL,
    mediu_domiciliu CHAR(5) NULL,
    tara_domiciliu VARCHAR(35) NULL,
    judet_domiciliu VARCHAR(35) NULL,
    localitate_domiciliu VARCHAR(35) NULL,
    strada VARCHAR(70) NULL,
    numar VARCHAR(10) NULL,
    bloc VARCHAR(10) NULL,
    scara VARCHAR(10) NULL,
    etaj VARCHAR(10) NULL,
    apartament VARCHAR(5) NULL,
    cod_postal INT NULL,
    telefon VARCHAR(15) NULL,
    email VARCHAR(70) NULL,
    solicita_cazare_studii SMALLINT NULL,
    solicita_cazare_admitere SMALLINT NULL,
    stare_sociala_speciala VARCHAR(50) NULL,
    persoana_cu_dizabilitati SMALLINT NULL
); 

-- Table: Date_personale_master
CREATE TABLE Date_personale_master(
    formular_id INTEGER NOT NULL,
    nume_familie_nastere VARCHAR(35) NULL,
    initialele_tatalui_mamei VARCHAR(15) NULL,
    nume_familie_actual VARCHAR(35) NULL,
    prenume_candidat VARCHAR(35) NULL,
    prenume_tata VARCHAR(35) NULL,
    prenume_mama VARCHAR(35) NULL,
    cnp BIGINT NULL,
    sex CHAR(1) NULL,
    data_nasterii DATE NULL,
    tara_nasterii VARCHAR(35) NULL,
    judetul_nasterii VARCHAR(35) NULL,
    localitatea_nasterii VARCHAR(35) NULL,
    cetatenia VARCHAR(35) NULL,
    nationalitate VARCHAR(35) NULL,
    etnie VARCHAR(35) NULL,
    limba_materna VARCHAR(35) NULL,
    stare_civila VARCHAR(25) NULL,
    tip_act_ident VARCHAR(10) NULL,
    serie_act VARCHAR(10) NULL,
    numar_act VARCHAR(10) NULL,
    eliberat_de VARCHAR(35) NULL,
    data_eliberarii DATE NULL,
    data_expirarii DATE NULL,
    mediu_domiciliu CHAR(5) NULL,
    tara_domiciliu VARCHAR(35) NULL,
    judet_domiciliu VARCHAR(35) NULL,
    localitate_domiciliu VARCHAR(35) NULL,
    strada VARCHAR(70) NULL,
    numar VARCHAR(10) NULL,
    bloc VARCHAR(10) NULL,
    scara VARCHAR(10) NULL,
    etaj VARCHAR(10) NULL,
    apartament VARCHAR(5) NULL,
    cod_postal INT NULL,
    telefon VARCHAR(15) NULL,
    email VARCHAR(70) NULL,
    solicita_cazare_studii SMALLINT NULL,
    stare_sociala_speciala VARCHAR(50) NULL,
    persoana_cu_dizabilitati SMALLINT NULL
); 

-- Table: Date_personale_preadmitere
CREATE TABLE Date_personale_preadmitere(
    formular_id INTEGER NOT NULL,
    nume_familie_nastere VARCHAR(35) NULL,
    initialele_tatalui_mamei VARCHAR(15) NULL,
    nume_familie_actual VARCHAR(35) NULL,
    prenume_candidat VARCHAR(35) NULL,
    prenume_tata VARCHAR(35) NULL,
    prenume_mama VARCHAR(35) NULL,
    cnp BIGINT NULL,
    sex CHAR(1) NULL,
    data_nasterii DATE NULL,
    tara_nasterii VARCHAR(35) NULL,
    judetul_nasterii VARCHAR(35) NULL,
    localitatea_nasterii VARCHAR(35) NULL,
    cetatenia VARCHAR(35) NULL,
    nationalitate VARCHAR(35) NULL,
    etnie VARCHAR(35) NULL,
    limba_materna VARCHAR(35) NULL,
    tip_act_ident VARCHAR(10) NULL,
    serie_act VARCHAR(10) NULL,
    numar_act VARCHAR(10) NULL,
    eliberat_de VARCHAR(35) NULL,
    data_eliberarii DATE NULL,
    data_expirarii DATE NULL,
    institutie_liceu VARCHAR(140) NULL,
    tara_liceu VARCHAR(35) NULL,
    localitate_liceu VARCHAR(35) NULL,
    judet_liceu VARCHAR(35) NULL
); 

-- Table: Date_preg_anterioara_licenta
CREATE TABLE Date_preg_anterioara_licenta(
    formular_id INTEGER NOT NULL,
    liceul_absolvit VARCHAR(100) NULL,
    tara_liceu VARCHAR(35) NULL,
    localitate_liceu VARCHAR(35) NULL,
    judet_liceu VARCHAR(35) NULL,
    profil_liceu VARCHAR(35) NULL,
    durata_studiilor_liceu SMALLINT NULL,
    anul_absolvirii_liceu SMALLINT NULL,
    forma_invatamant_liceu VARCHAR(5) NULL,
    serie_diploma_bac VARCHAR(9) NULL,
    nr_diploma_bac VARCHAR(10) NULL,
    data_emiterii_diploma DATE NULL,
    nr_foii_matricole VARCHAR(10) NULL,
    nr_act_rec_echiv VARCHAR(10) NULL,
    serie_act_rec_echiv VARCHAR(10) NULL,
    data_rec_echiv DATE NULL,
    student_alta_fac SMALLINT NULL,
    tara_fac VARCHAR(35) NULL,
    localitate_fac VARCHAR(35) NULL,
    judet_fac VARCHAR(35) NULL,
    denumire_institutie_fac VARCHAR(35) NULL,
    denumire_alta_facultate VARCHAR(50) NULL,
    domeniu_licenta_fac VARCHAR(35) NULL,
    specializare_fac VARCHAR(35) NULL,
    forma_invatamant_fac VARCHAR(5) NULL,
    anul_fac SMALLINT NULL,
    nr_semestre_buget_fac SMALLINT NULL,
    nr_semestre_bursa_fac SMALLINT NULL,
    anul_absolvirii SMALLINT NULL,
    cu_licenta SMALLINT NULL,
    tara_fac_abs VARCHAR(35) NULL,
    localitate_fac_abs VARCHAR(35) NULL,
    judet_fac_abs VARCHAR(35) NULL,
    denumire_institutie_abs VARCHAR(50) NULL,
    denumire_facultate_abs VARCHAR(50) NULL,
    domeniu_licenta_abs VARCHAR(35) NULL,
    specializare_abs VARCHAR(35) NULL,
    titlut_obtinut VARCHAR(35) NULL,
    forma_invatamant_abs VARCHAR(5) NULL,
    nr_semestre_buget_abs SMALLINT NULL,
    nr_semestre_bursa_abs SMALLINT NULL,
    durata_studiilor_abs SMALLINT NULL,
    serie_diploma_licenta VARCHAR(9) NULL,
    nr_diploma_licenta VARCHAR(10) NULL,
    data_emiterii_licenta DATE NULL,
    nr_supliment VARCHAR(10) NULL,
    nr_act_rec_echiv_abs VARCHAR(10) NULL,
    serie_acr_rec_echiv_abs VARCHAR(10) NULL,
    data_echiv_abs DATE NULL
); 

-- Table: Date_preg_anterioara_master
CREATE TABLE Date_preg_anterioara_master(
    formular_id INTEGER NOT NULL,
    liceul_absolvit VARCHAR(100) NULL,
    tara_liceu VARCHAR(35) NULL,
    localitate_liceu VARCHAR(35) NULL,
    judet_liceu VARCHAR(35) NULL,
    profil_liceu VARCHAR(35) NULL,
    durata_studiilor_liceu SMALLINT NULL,
    anul_absolvirii_liceu SMALLINT NULL,
    forma_invatamant_liceu VARCHAR(5) NULL,
    serie_diploma_bac VARCHAR(9) NULL,
    nr_diploma_bac VARCHAR(10) NULL,
    data_emiterii_diploma DATE NULL,
    nr_foii_matricole VARCHAR(10) NULL,
    nr_act_rec_echiv VARCHAR(10) NULL,
    serie_act_rec_echiv VARCHAR(10) NULL,
    data_rec_echiv DATE NULL,
    tara_fac VARCHAR(35) NULL,
    localitate_fac VARCHAR(35) NULL,
    judet_fac VARCHAR(35) NULL,
    denumire_institutie_fac VARCHAR(35) NULL,
    denumire_facultate VARCHAR(35) NULL,
    denumire_domeniu_licenta VARCHAR(35) NULL,
    specializare VARCHAR(35) NULL,
    titlu_obtinut VARCHAR(35) NULL,
    forma_invatamant_fac VARCHAR(5) NULL,
    nr_sem_buget SMALLINT NULL,
    nr_sem_bursa SMALLINT NULL,
    durata_studii SMALLINT NULL,
    diplo_licenta_serie VARCHAR(10) NULL,
    diplo_licenta_nr VARCHAR(10) NULL,
    dipl_data_emitere DATE NULL,
    nr_foaie_matricola VARCHAR(10) NULL,
    act_rec_licenta VARCHAR(10) NULL,
    nr_act_rec_licenta VARCHAR(10) NULL,
    serie_act_rec_licenta VARCHAR(10) NULL,
    data_act_rec_licenta DATE NULL,
    in_curs_student_alta_fac SMALLINT NULL,
    in_curs_tara_master VARCHAR(35) NULL,
    in_curs_localitate_master VARCHAR(35) NULL,
    in_curs_judet_master VARCHAR(35) NULL,
    in_curs_denum_instit_master VARCHAR(35) NULL,
    in_curs_denum_facultate_master VARCHAR(35) NULL,
    in_curs_denum_domeniu_master VARCHAR(35) NULL,
    in_curs_specializare_master VARCHAR(35) NULL,
    in_curs_forma_invat_master VARCHAR(5) NULL,
    in_curs_an_master SMALLINT NULL,
    in_curs_nr_sem_buget_master SMALLINT NULL,
    in_curs_nr_sem_bursa_master SMALLINT NULL,
    absolvent_an SMALLINT NULL,
    absolvent_tara VARCHAR(35) NULL,
    absolvent_localitate VARCHAR(35) NULL,
    absolvent_judet VARCHAR(35) NULL,
    absolvent_denumire_instit VARCHAR(35) NULL,
    absolvent_denumire_facult VARCHAR(35) NULL,
    absolvent_domeniu VARCHAR(35) NULL,
    absolvent_specializare VARCHAR(35) NULL,
    absolvent_titlu_obtinut VARCHAR(35) NULL,
    absolvent_forma_invat VARCHAR(5) NULL,
    absolvent_nr_sem_buget SMALLINT NULL,
    absolvent_nr_sem_bursa SMALLINT NULL,
    absolvent_durata_studiilor SMALLINT NULL,
    absolvent_cu_diploma SMALLINT NULL,
    absolvent_diplo_serie VARCHAR(10) NULL,
    absolvent_diplo_nr VARCHAR(10) NULL,
    absolvent_dipl_data_emitere DATE NULL,
    absolvent_nr_foaie_matricola VARCHAR(10) NULL,
    absolvent_act_rec_nr VARCHAR(10) NULL,
    absolvent_act_rec_serie VARCHAR(10) NULL,
    absolvent_act_rec_data_echiv DATE NULL
); 

-- Table: Formular_licenta
CREATE TABLE Formular_licenta(
    id INTEGER NOT NULL,
    nr_chitanta VARCHAR(70) NULL,
    suma INTEGER NULL,
    scutit SMALLINT NULL,
    motiv_scutire VARCHAR(250) NULL,
    data_crearii DATETIME NULL,
    data_ultimei_modificari DATETIME NULL,
    stare SMALLINT NULL,
    CONSTRAINT Formular_licenta_pk PRIMARY KEY(id)
); 

-- Table: Formular_master
CREATE TABLE Formular_master(
    id INTEGER NOT NULL,
    nr_chitanta VARCHAR(70) NULL,
    suma INTEGER NULL,
    scutit SMALLINT NULL,
    motiv_scutire VARCHAR(250) NULL,
    data_crearii DATETIME NULL,
    data_ultimei_modificari DATETIME NULL,
    stare SMALLINT NULL,
    CONSTRAINT Formular_master_pk PRIMARY KEY(id)
); 

-- Table: Formular_preadmitere
CREATE TABLE Formular_preadmitere(
    id INTEGER NOT NULL,
    nr_chitanta VARCHAR(70) NULL,
    suma INTEGER NULL,
    optiune_test_scris VARCHAR(25) NOT NULL,
    data_crearii DATETIME NULL,
    data_ultimei_modificari DATETIME NULL,
    stare SMALLINT NULL,
    CONSTRAINT Formular_preadmitere_pk PRIMARY KEY(id)
); 

-- Table: Informatii_documente_licenta
CREATE TABLE Informatii_documente_licenta(
    formular_id INTEGER NOT NULL,
    diploma_bac_original SMALLINT NULL,
    adeverinta_original SMALLINT NULL,
    document_echiv_studii_original SMALLINT NULL,
    diploma_olimpiada SMALLINT NULL,
    diploma_echiv_studii_copie SMALLINT NULL,
    participa_altundeva SMALLINT NULL,
    universitate1 VARCHAR(70) NULL,
    facultate1 VARCHAR(70) NULL,
    universitate2 VARCHAR(70) NULL,
    facultate2 VARCHAR(70) NULL,
    universitate3 VARCHAR(70) NULL,
    facultate3 VARCHAR(70) NULL
); 

-- Table: Informatii_documente_master
CREATE TABLE Informatii_documente_master(
    formular_id INTEGER NOT NULL,
    diploma_bac_original SMALLINT NULL,
    diploma_bac_copie SMALLINT NULL,
    doc_echiv_preuniv_original SMALLINT NULL,
    doc_echiv_preuniv_copie SMALLINT NULL,
    diploma_licenta_original SMALLINT NULL,
    diploma_licenta_copie SMALLINT NULL,
    dipl_echiv_licenta_original SMALLINT NULL,
    dipl_echiv_licenta_copie SMALLINT NULL,
    particip_altundeva SMALLINT NULL,
    universitate1 VARCHAR(70) NULL,
    facultate1 VARCHAR(70) NULL,
    universitate2 VARCHAR(70) NULL,
    facultate2 VARCHAR(70) NULL,
    universitate3 VARCHAR(70) NULL,
    facultate3 VARCHAR(70) NULL
); 

-- Table: Optiuni_licenta
CREATE TABLE Optiuni_licenta(
    formular_id INTEGER NOT NULL,
    preferinta_1 VARCHAR(60) NULL,
    preferinta_2 VARCHAR(60) NULL,
    preferinta_3 VARCHAR(60) NULL,
    preferinta_4 VARCHAR(60) NULL,
    stare_taxa VARCHAR(20) NULL
); 

-- Table: Ordine_preferinte_master
CREATE TABLE Ordine_preferinte_master(
    formular_id INTEGER NOT NULL,
    preferinta_1 VARCHAR(60) NULL,
    preferinta_2 VARCHAR(60) NULL,
    preferinta_3 VARCHAR(60) NULL,
    preferinta_4 VARCHAR(60) NULL,
    preferinta_5 VARCHAR(60) NULL,
    preferinta_6 VARCHAR(60) NULL,
    preferinta_7 VARCHAR(60) NULL,
    preferinta_8 VARCHAR(60) NULL,
    preferinta_9 VARCHAR(60) NULL,
    preferinta_10 VARCHAR(60) NULL,
    preferinta_11 VARCHAR(60) NULL,
    optiune_admitere_taxa VARCHAR(20) NULL
); 

-- foreign keys
-- Reference: Cerinte_Formular (table: Cerinte_licenta)
ALTER TABLE
    Cerinte_licenta ADD CONSTRAINT Cerinte_Formular FOREIGN KEY(formular_id) REFERENCES Formular_licenta(id); -- Reference: Cerinte_facultate_master_Formular_master (table: Cerinte_master)
ALTER TABLE
    Cerinte_master ADD CONSTRAINT Cerinte_fac_master_Formular FOREIGN KEY(formular_id) REFERENCES Formular_master(id); -- Reference: Chestionar_Formular (table: Chestionar_licenta)
ALTER TABLE
    Chestionar_licenta ADD CONSTRAINT Chestionar_Formular FOREIGN KEY(Formular_id) REFERENCES Formular_licenta(id); -- Reference: Chestionar_Formular_master (table: Chestionar_master)
ALTER TABLE
    Chestionar_master ADD CONSTRAINT Chestionar_Formular_master FOREIGN KEY(formular_id) REFERENCES Formular_master(id); -- Reference: Copy_of_Date_personale_Formular (table: Date_personale_master)
ALTER TABLE
    Date_personale_master ADD CONSTRAINT Copy_of_Date_pers_Formular FOREIGN KEY(formular_id) REFERENCES Formular_master(id); -- Reference: Copy_of_Date_preg_anterioara_Formular (table: Date_preg_anterioara_master)
ALTER TABLE
    Date_preg_anterioara_master ADD CONSTRAINT Copy_of_Date_preg_ant_Formular FOREIGN KEY(formular_id) REFERENCES Formular_master(id); -- Reference: Date_personale_Formular (table: Date_personale_licenta)
ALTER TABLE
    Date_personale_licenta ADD CONSTRAINT Date_personale_Formular FOREIGN KEY(formular_id) REFERENCES Formular_licenta(id); -- Reference: Date_personale_preadmitere_Formular_preadmitere (table: Date_personale_preadmitere)
ALTER TABLE
    Date_personale_preadmitere ADD CONSTRAINT Date_pers_preadmit_Formular FOREIGN KEY(Formular_id) REFERENCES Formular_preadmitere(id); -- Reference: Date_preg_anterioara_Formular (table: Date_preg_anterioara_licenta)
ALTER TABLE
    Date_preg_anterioara_licenta ADD CONSTRAINT Date_preg_anterioara_Formular FOREIGN KEY(formular_id) REFERENCES Formular_licenta(id); -- Reference: Informatii_documente_Formular (table: Informatii_documente_licenta)
ALTER TABLE
    Informatii_documente_licenta ADD CONSTRAINT Informatii_documente_Formular FOREIGN KEY(formular_id) REFERENCES Formular_licenta(id); -- Reference: Informatii_documente_Formular_master (table: Informatii_documente_master)
ALTER TABLE
    Informatii_documente_master ADD CONSTRAINT Info_doc_Formular_master FOREIGN KEY(formular_id) REFERENCES Formular_master(id); -- Reference: Optiuni_Formular (table: Optiuni_licenta)
ALTER TABLE
    Optiuni_licenta ADD CONSTRAINT Optiuni_Formular FOREIGN KEY(formular_id) REFERENCES Formular_licenta(id); -- Reference: Ordine_preferinte_Formular_master (table: Ordine_preferinte_master)
ALTER TABLE
    Ordine_preferinte_master ADD CONSTRAINT Ordine_pref_Formular_master FOREIGN KEY(formular_id) REFERENCES Formular_master(id); -- End of file.
    
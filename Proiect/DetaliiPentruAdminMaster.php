<!DOCTYPE html>



<html>

<head>



    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style2.css" />

    <link rel="stylesheet" type="text/css" href="css/admin-style.css" />

    <link rel="stylesheet" type="text/css" href="css/footer.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script type="text/javascript">



    $(document).ready(function () {

      $("#testimonial-slider").owlCarousel({

        items: 2,

        itemsDesktop: [1000, 1],

        itemsDesktopSmall: [979, 1],

        itemsTablet: [768, 1],

        pagination: true,

        navigation: false,

        navigationText: ["", ""],

        slideSpeed: 9000,

        singleItem: false,

        autoPlay: false

      });

      var $logo = $('#scroll');

      var $logo2 = $('#no-scroll');

      var $head2 = $('#header');

      $(document).scroll(function () {

        $head2.css({ display: $(this).scrollTop() < 50 ? "block" : "none" });

        $logo2.css({ display: $(this).scrollTop() < 50 ? "block" : "none" });

        $logo.css({ display: $(this).scrollTop() > 100 ? "block" : "none" });

      });

    });



    </script>

    <meta charset="UTF-8">

    <link href="css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="widt=device-width, initial-scale=1">

    <title>Administrator</title>



</head>

<body>

    <div class="mare collapse navbar-collapse navbar nav-group nav-group--consistent">

      <div class="nav navbar-nav bar2">

        <ul style="width:100%; height:40px; background-color:#3488CB;"></ul>

        <ul class="left-menu">

            <li class="lung"><a href="DespreFII.html">Despre FII</a></li>

            <li class="scurt"><a href="DespreFII.html">FII</a></li>

            <li><a href="paginaAdmitere.html">Admitere</a></li>

            </ul>

        <ul class="right-menu">

              <li><a href="IntrebariFrecvente.html">&#206;ntreb&#259;ri</a></li>

              <li><a href="contact.html" >Contact</a></li>

        </ul>

      </div>      

      <a href="https://www.info.uaic.ro/bin/Main/" >

        <img id="no-scroll" class="sigla" src="imagini/sigla2.png" alt="sigla" />

        <img id="scroll" class="sigla" src="imagini/sigla2-Copy.png" alt="sigla" />

      </a>

  </div >

  

  <div class="mic" style="background-color:white; height:80px; width:100%;; z-index:90;">

    <a href="#menu" id="toggle"><span></span></a>

   <div id="menu">

      <ul class="tog1">

        <li class="tog2"><a href="DespreFII.html">Despre FII</a></li>  

        <li class="tog2"><a href="paginaAdmitere.html">Admitere</a></li>

        <li class="tog2"><a href="IntrebariFrecvente.html">&#206;ntreb&#259;ri</a></li>

        <li class="tog2"><a href="contact.html">Contact</a></li>

      </ul>

    </div> 

  </div>

  </br></br>

  

    <div id="top">

        <div class="container">

            <div style="display: inline-flex;" class="col-md-10">

                <img class="icon-admin" src="imagini/admin-logo.png">

                <h1><span aria-hidden=true> Administra&#355;ie</span></h1>

            </div>

        </div>

    </div>

    <div class="container">

        <hr>

    </div>



    <div class="container">

        <div class="col-md-3">

            <a class="back-button" href="administrator.php">

                <i class="glyphicon glyphicon-arrow-left blue" style="font-size:15px;"></i>

                <span class="blue">&#206;napoi</span>

            </a>

            <div class="col-md-12">


                <button class="btn btn-danger buton wid100 marg-t30" style="height:40px;" onclick="showModal()">

                    <span>Retrimitere</span>

                </button>

                <form  method="post" action="validareFormularPreAdmitere.php">
                    <button id="Submit" name="Submit" Value="Register" class="btn buton validare-btn wid100" type="submit">

                        <span  style="color:white;">Validare</span>

                    </button>
                </form>
                
                <form  method="post" action="respingereFormularPreAdmitere.php">
                    
                    <button id="Submit" name="Submit" Value="Register" class="btn buton validare-btn wid100" type="submit">

                        <span  style="color:white;">Respingere</span>

                    </button>
                    
                    
                </form>
                
                <form  method="post" action="pdf_master.php">
                    
                    <?php
                    include 'adminMainPageMaster.php';
                    $id_formular=$_POST['id_formular'];
                    echo '<input type="hidden" name="id_formular" value="'.$id_formular.'">';
                    
                    ?>
                    
                    <button id="Submit" name="Submit" Value="Register" class="btn buton validare-btn wid100" type="submit">

                        <span  style="color:white;">Generare pdf</span>

                    </button>
                    
                    
                </form>
                

            </div>

        </div>

        <div class="col-md-9" style="border-left:1px solid #eee;">

            <form id="DetaliiStudPreadmitere">





                <div class="col-md-12" style="margin-top:20px; ">

                    <div class="col-md-6 ">

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                Informa&#355;ii Generale

                            </span>

                        </div>


                        <div class="col-md-12" style="font-size:17px;">

                        <!--modificari 10.062017-->
                        <?php
                        error_reporting(E_ERROR);
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
                        
                          echo '<label>Numele de familie (din certificatul de naștere)</label><input name="numeDeFamilie" class="form-control" value="'.getNume($id_formular).'"/>
                        
                           <label class="marg-t10">Numele de familie actual (după căsătorie, înfiere, modificare la cerere conform actului doveditor, dacă este cazul)</label><input name="numeDeFamilieActual" class="form-control" value=""/>

                            <label class="marg-t10">Prenume:</label><input name="prenume" class="form-control" value="'.getPrenume($id_formular).'" />

                            <label class="marg-t10">Ini&#355;iala tat&#259;lui:</label><input name="initialaTata" class="form-control" value="'.getInitialaTata($id_formular).'"/>

                            <label class="marg-t10">Prenume tată:</label><input name="prenumeTata" class="form-control" value="'.getPrenumeTata($id_formular).'"/>

                            <label class="marg-t10">Prenume mamă:</label><input name="prenumeMama" class="form-control" value="'.getPrenumeMama($id_formular).'"/>

                            <label class="marg-t10">Sex: </label><input name="sex" class="form-control" value="'.getSex($id_formular).'" />

                            <label class="marg-t10">Data nașterii:</label>

                             <div class="col-md-12" style="padding-left:0; padding-right:0;">

                                <input name="dataNasteriiDay" class="form-control col-md-4 wid33 marg-r1" value="'.getDataDay($id_formular).'"/>

                                <input name="dataNasteriiMonth"  class="form-control col-md-4 wid33 marg-r1" value="'.getDataMonth($id_formular).'"/>

                                <input name="dataNasteriiYear" class="form-control col-md-4 wid33" value="'.getDataYear($id_formular).'"/>

                            <input type="hidden" name="idFormular" value="'.$id_formular.'"/>
                            </div>
                            <br>
                            <label class="marg-t10">Cetățenie: </label><input name="cetatenie" class="form-control" value="" />

                            <label class="marg-t10">Naționalitate: </label><input name="nationalitate" class="form-control" value="'.getNationalitate($id_formular).'" />

                            <label class="marg-t10">Etnie: </label><input name="etnie" class="form-control" value="'.getEtnie($id_formular).'" />

                            <label class="marg-t10">Limba matern&#259;: </label><input name="limbaMaterna" class="form-control" value="'.getLimbaMaterna($id_formular).'" />

                          
                            <label class="marg-t10">Num&#259;r de telefon:</label><input name="nrDeTelefon" class="form-control" value="'.getTelefon($id_formular).'"/>

                            <label class="marg-t10">E-mail:</label><input name="email" class="form-control" value="'.getEmail($id_formular).'"/>

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                Date Card de Identitate

                            </span>

                        </div>

                            <label>CNP:</label><input name="cnp" class="form-control" value="'.getCNP($id_formular).'" />

                            <label class="marg-t10">Tip Buletin: </label><input name="tipBuletin" class="form-control" value="'.getTipBuletin($id_formular).'" />

                            <label class="marg-t10">Serie Buletin: </label><input name="serieBuletin" class="form-control" value="'.getSerieBuletin($id_formular).'" />

                            <label class="marg-t10">Num&#259;r Buletin: </label><input name="nrBuletin" class="form-control" value="'.getNumarBuletin($id_formular).'" />

                            <label class="marg-t10">Eliberat de: </label><input name="eliberatDe" class="form-control" value="'.getBuletinEliberatDe($id_formular).'" />

                            <label class="marg-t10">Data Eliber&#259;rii:</label>

                            <div class="col-md-12" style="padding-left:0; padding-right:0;">

                                <input name="dataEliberariiDay" class="col-md-4 form-control marg-r1 wid33"  value="'.getBuletinDay($id_formular).'"/>

                                <input name="dataEliberariiMonth" class="col-md-4 form-control marg-r1 wid33"  value="'.getBuletinMonth($id_formular).'"/>

                                <input name="dataEliberariiYear" class="col-md-4 form-control wid33" value="'.getBuletinYear($id_formular).'"/>

                            </div><br>

                            <label class="marg-t10">Data Expir&#259;rii:</label>

                            <div class="col-md-12" style="padding-left:0; padding-right:0;">

                                <input name="dataEliberariiDay" class="col-md-4 form-control marg-r1 wid33"  value=""/>

                                <input name="dataEliberariiMonth" class="col-md-4 form-control marg-r1 wid33"  value=""/>

                                <input name="dataEliberariiYear" class="col-md-4 form-control wid33" value=""/>

                            </div>
                             

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                Adresa studentului

                            </span>

                         </div>

                                <label class="marg-t10">Țară: </label><input name="tara" class="form-control" value=""/>

                                <label class="marg-t10">Jude&#355;:</label><input name="judet" class="form-control" value="'.getJudet($id_formular).'"/>

                                <label class="marg-t10">Localitate: </label><input name="localitate" class="form-control" value="'.getLocalitate($id_formular).'"/>

                                <label>Strada:</label><input class="form-control" value="'.getStrada($id_formular).'"/>

                                <label>Numarul:</label><input class="form-control" value="'.getNrStrada($id_formular).'"/>

                                <label>Bloc:</label><input class="form-control" value="'.getNrBloc($id_formular).'"/>

                                <label>Scara:</label><input class="form-control" value=""/>
                                
                                <label>Apartament:</label><input class="form-control" value="'.getApartament($id_formular).'"/>

                                <label class="marg-t10">Cod Po&#351;tal:</label><input name="codPostal" class="form-control" value="'.getCodPostal($id_formular).'"/>

                                <label class="marg-t10">&#354;ara:</label><input name="tara" class="form-control" value="'.getTara($id_formular).'"/>

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Alte date personale ale candidatului

                            </span>

                        </div>

                                <label class="marg-t10">Stare socială specială: </label><input name="stare-speciala" class="form-control" value=""/>

                                <label class="marg-t10">Candidat care se incadreaza in categoria persoanelor cu dizabilitati </label><input name="dizabilitati" class="form-control" value=""/>

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Cerinte specifice facultatii

                            </span>

                        </div>
                            <label class="marg-t10">Media generala la examenul de licenta </label><input name="medie-bac" class="form-control" value=""/>

                            <label class="marg-t10">Media la admitere </label><input name="nota-max" class="form-control" value=""/>

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Optiuni la admitere, in ordinea preferintelor

                            </span>

                        </div>

                            <label class="marg-t10">Optiunea 1:</label><input name="optiunea1" class="form-control" value=""/>

                            <label class="marg-t10">Optiunea 2:</label><input name="optiunea2" class="form-control" value=""/>

                            <label class="marg-t10">Optiunea 3:</label><input name="optiunea3" class="form-control" value=""/>

                            <label class="marg-t10">Optiunea 4:</label><input name="optiunea4" class="form-control" value=""/>

                            <label class="marg-t10">Optiunea 5:</label><input name="optiunea5" class="form-control" value=""/>

                            <label class="marg-t10">Optiunea 6:</label><input name="optiunea6" class="form-control" value=""/>

                            <label class="marg-t10">Optiunea 7:</label><input name="optiunea7" class="form-control" value=""/>

                            <label class="marg-t10">Optiunea 8:</label><input name="optiunea8" class="form-control" value=""/>

                            <label class="marg-t10">Optiunea 9:</label><input name="optiunea9" class="form-control" value=""/>

                            <label class="marg-t10">Optiunea 10:</label><input name="optiunea10" class="form-control" value=""/>

                            <label class="marg-t10">Optiunea 11:</label><input name="optiunea11" class="form-control" value=""/>

                            <label class="marg-t10">Acceptati sa fiti inmatriculat pe locurile cu taxa disponibile in cazul in care nu ati fost admis pe locurile finantate de la buget?</label><input name="accept-taxa" class="form-control" value=""/>

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Informatii privind documentele de studii depuse la dosar

                            </span>

                        </div>

                            <label class="marg-t10">Diploma de bacalaureat (original)</label><input name="diploma-bac-original" class="form-control" value=""/>

                            <label class="marg-t10">Diploma de bacalaureat (copie legalizata):</label><input name="diploma-bac-copie" class="form-control" value=""/>

                            <label class="marg-t10">Document echivalare studii preuniversitare (original)</label><input name="document-echivalare-original" class="form-control" value=""/>

                            <label class="marg-t10">Document echivalare studii preuniversitare (copie)</label><input name="document-echivalare-copie" class="form-control" value=""/>

                            <label class="marg-t10">Diploma licenta (original)</label><input name="diploma-licenta-original" class="form-control" value=""/>

                            <label class="marg-t10">Diploma licenta (copie legalizata):</label><input name="diploma-licenta-copie" class="form-control" value=""/>

                            <label class="marg-t10">Participati la alt/e concurs/uri de admitere la studii universitare de master?</label><input name="diploma-bac-copie" class="form-control" value=""/>

                            <label class="marg-t10">La ce alte concursuri de admitere participati? (Universitate - Domeniul/Specializarea</label><input name="diploma-bac-copie" class="form-control" value=""/>';
                           ?>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Studiile preuniversitare absolvite, nivel liceu

                            </span>

                            </div>
                        <?php
                        $id_formular=$_POST['id_formular'];
                        echo ' <div class="col-md-12" style="font-size:17px; margin-bottom:45px;">
                        
                                <label class="marg-t10">Institutia unde a absolvit</label><input name="liceuNume" class="form-control" value="'.getNumeLiceu($id_formular).'" />

                                <label class="marg-t10">Tara:</label><input name="tara-liceu" class="form-control" value="" />

                                <label class="marg-t10">Localitate</label><input name="localitate-liceu" class="form-control" value="" />

                                <label class="marg-t10">Judet:</label><input name="judet-liceu" class="form-control" value="" />

                                <label class="marg-t10">Profil/Domeniul:</label><input name="domeniu-liceu" class="form-control" value="" />

                                <label class="marg-t10">Durata studiilor:</label><input name="durata-studii" class="form-control" value="" />

                                <label class="marg-t10">Anul absolvirii:</label><input name="an-absolvire" class="form-control" value="" />

                                <label class="marg-t10">Forma de invatamant (Zi/Seral/FR/ID):</label><input name="forma-invatamant" class="form-control" value="" />

                                <label class="marg-t10"> Diploma de bacalaureat</label><br>

                                <label class="marg-t10">Seria:</label><input name="serie-diploma" class="form-control" value="" />

                                <label class="marg-t10">Numarul:</label><input name="numar-diploma" class="form-control" value="" />

                                <label class="marg-t10">Emisa de:</label><input name="emisa-diploma" class="form-control" value="" />

                                <label class="marg-t10">Data emitere:</label><input name="data-emitere" class="form-control" value="" />

                                <label class="marg-t10">Numarul foii matricole care insoteste actul de studii:</label><input name="foie-matricola-liceu" class="form-control" value="" />

                                <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Alte observatii (pentru caurile in care candidatul a absolvit studii anterioare in strainatate)

                            </span>

                            </div>

                                <label class="marg-t10"> Act de recunoastere/ echivalare (eliberat de DPIRP/CNRED):</label>

                                <label class="marg-t10">Nr:</label><input name="nr-act-echivalare" class="form-control" value="" />

                                <label class="marg-t10">Serie:</label><input name="serie-act-echivalare" class="form-control" value="" />

                                <label class="marg-t10">Data echivalarii:</label><input name="nr-act-echivalare" class="form-control" value="" />

                             </div>

                             <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Studiile universitare de licenta absolvite

                            </span>

                            </div>

                                <label class="marg-t10">Institutia unde a absolvit</label><input name="liceuNume" class="form-control" value="'.getNumeLiceu($id_formular).'" />

                                <label class="marg-t10">Tara:</label><input name="tara-facultate" class="form-control" value="" />

                                <label class="marg-t10">Localitate</label><input name="localitate-liceu" class="form-control" value="" />

                                <label class="marg-t10">Judet:</label><input name="judet-facultate" class="form-control" value="" />

                                <label class="marg-t10">Facultatea:</label><input name="facultate" class="form-control" value="" />

                                <label class="marg-t10">Domeniul de licenta:</label><input name="domeniu-licenta" class="form-control" value="" />

                                <label class="marg-t10">Programul de studii/Specializarea:</label><input name="specializare-fac" class="form-control" value="" />

                                <label class="marg-t10">Titlu obtinut:</label><input name="titlu-facultate" class="form-control" value="" />

                                <label class="marg-t10">Forma de invatamant (Zi/Seral/FR/ID):</label><input name="forma-invatamant" class="form-control" value="" />

                                <label class="marg-t10">Numarul semestrelor finantate de la bugetul de stat</label><input name="numar-sem-buget" class="form-control" value="" />

                                <label class="marg-t10">Numarul semestrelor in care ati beneficiat de bursa:</label><input name="numar-sem-bursa" class="form-control" value="" />

                                <label class="marg-t10">Durata studiilor:</label><input name="durata-studii-facultate" class="form-control" value="" />

                                <label class="marg-t10"> Diploma de licenta</label><br>

                                <label class="marg-t10">Seria:</label><input name="serie-diploma-licenta" class="form-control" value="" />

                                <label class="marg-t10">Numarul:</label><input name="numar-diploma-licenta" class="form-control" value="" />

                                <label class="marg-t10">Emisa de:</label><input name="emisa-diploma-licenta" class="form-control" value="" />

                                <label class="marg-t10">Data emitere:</label><input name="data-emitere-licenta" class="form-control" value="" />

                                <label class="marg-t10">Numarul foii matricole care insoteste actul de studii:</label><input name="foie-matricola-facultate" class="form-control" value="" />

                            <div class="align-center">

                                <span class="col-md-12 sub-title">

                                <br>Alte observatii (pentru caurile in care candidatul a absolvit studii anterioare in strainatate)

                            </span>
                            </div>

                                <label class="marg-t10"> Act de recunoastere/ echivalare (eliberat de DPIRP/CNRED):</label>

                                <label class="marg-t10">Nr:</label><input name="nr-act-echivalare" class="form-control" value="" />

                                <label class="marg-t10">Serie:</label><input name="serie-act-echivalare" class="form-control" value="" />

                                <label class="marg-t10">Data echivalarii:</label><input name="nr-act-echivalare" class="form-control" value="" />

                          
                             <div class="align-center">

                                <span class="col-md-12 sub-title">

                                    <br>Studiile universitare de master in curs/ absolvite

                                </span>

                            </div>

                                <label class="marg-t10">Student la master alta facultate/ universitate:</label><input name="student-master" class="form-control" value="" />

                                <label class="marg-t10">Tara:</label><input name="tara-master" class="form-control" value="" />

                                <label class="marg-t10">Localitate:</label><input name="localitate-master" class="form-control" value="" />

                                <label class="marg-t10">Judetul:</label><input name="judetu-master" class="form-control" value="" />

                                <label class="marg-t10">Denumirea institutiei de invatamant superior:</label><input name="nume-univ" class="form-control" value="" />

                                <label class="marg-t10">Facultatea:</label><input name="nume-fac-master" class="form-control" value="" />

                                <label class="marg-t10">Domeniul de studii:</label><input name="domeniu-master" class="form-control" value="" />

                                <label class="marg-t10">Programul de studii/ Specializarea:</label><input name="program-studii-master" class="form-control" value="" />

                                <label class="marg-t10">Forma de invatamant:</label><input name="forma-inv-master" class="form-control" value="" />

                                <label class="marg-t10">Anul:</label><input name="an-master-incurs" class="form-control" value="" />

                                <label class="marg-t10">Numarul semestrelor finantate de la buget de stat:</label><input name="semestre-finantate-master" class="form-control" value="" />

                                <label class="marg-t10">Numarul semestrelor in care ati beneficiat de bursa:</label><input name="semestre-bursa-master" class="form-control" value="" />

                                <label class="marg-t10">Absolvent al studiilor de master</label>
                                <label class="marg-t10">Anul absolvirii:</label>
                                <input name="an-absolvire-master" class="form-control" value="" />

                                <label class="marg-t10">Cu diploma:</label>
                                <input name="cu-diploma" class="form-control" value="" />

                                <label class="marg-t10">Fara diploma:</label>
                                <input name="fara-diploma" class="form-control" value="" />

                                 <label class="marg-t10">Tara:</label><input name="tara-facultate" class="form-control" value="" />

                                <label class="marg-t10">Localitate:</label><input name="localitate-facultate" class="form-control" value="" />

                                <label class="marg-t10">Judetul:</label><input name="judetu-facultate" class="form-control" value="" />

                                <label class="marg-t10">Denumirea institutiei de invatamant superior:</label><input name="nume-universitate" class="form-control" value="" />

                                <label class="marg-t10">Facultatea:</label><input name="nume-facultate" class="form-control" value="" />

                                <label class="marg-t10">Domeniul de licenta:</label><input name="domeniu-licenta-absolvit" class="form-control" value="" />

                                <label class="marg-t10">Programul de studii/Specializarea</label><input name="specializarea-absolvita" class="form-control" value="" />

                                <label class="marg-t10">Titlu obtinut</label><input name="specializarea-absolvita" class="form-control" value="" />                               

                                <label class="marg-t10">Forma de invatamant:</label><input name="forma-invatamant-absolvit" class="form-control" value="" />

                                <label class="marg-t10">Numarul semestrelor finantate de la buget de stat:</label><input name="semestre-finantate-absolvit" class="form-control" value="" />

                                <label class="marg-t10">Numarul semestrelor in care ati beneficiat de bursa:</label><input name="semestre-bursa-absolvit" class="form-control" value="" />

                                <label class="marg-t10">Durata studiilor (numar de ani)</label><input name="nr-ani" class="form-control" value="" />

                                <label class="marg-t10">Diploma de licenta</label><br>

                                <label class="marg-t10">Seria</label><input name="serie-diploma-absolvent" class="form-control" value="" />

                                <label class="marg-t10">Numar</label><input name="numar-diploma-absolvent" class="form-control" value="" />

                                <label class="marg-t10">Emisa de</label><input name="emisa-diploma-absolvent" class="form-control" value="" />

                                <label class="marg-t10">Data emiterii</label><input name="data-diploma-absolvent" class="form-control" value="" />

                                <label class="marg-t10">Numarul suplimentului/ foii matricole care insoteste actul de studii</label><input name="numar-supliment-absolvent" class="form-control" value="" />';
                            ?>

                    </div>

                </div>


                <div class="col-md-12" style="margin-bottom:40px;">

                    <h3 style="font-weight:bold;">Diplome, certificate</h3>

                    <div class="col-md-6">

                    <img class="wid100" src="imagini/exemplu-diploma.jpg" />

                        </div>

                    <div class="col-md-6">

                        <img class="wid100" src="imagini/exemplu-diploma.jpg" />



                    </div>

                </div>

            </div>

        </div>

    </div>

    </form>

    <footer class="footer-distributed">



            <div class="footer-left">

                <h3 class="headernou2">Admitere <span> FII</span></h3>

                <p class="footer-links">

                    <a href="DespreFII.html">Despre Fii</a>

                    ·

                    <a href="paginaAdmitere.html">Admitere</a>

                    ·

                    <a href="IntrebariFrecvente.html">&#206;ntrebari frecvente</a>

                    ·

                    <a href="contact.html">Contact</a>  

                </p>

            </div>



            <div class="footer-center">

                    <h3 class="headernou2">Contact</h3>

                <div>

                    <i class="fa fa-map-marker" id="bloc1"></i>

                    <div id="bloc2"><p>&nbsp&nbspStrada General Henri Mathias Barthelot 16</p>

                    <p>Iasi, Rom&#226;nia</p></div>

                </div>



                <div>

                    <i class="fa fa-phone"></i>

                    <p>&nbsp&nbsp0232 201 102</p>

                </div>



                <div>

                    <i class="fa fa-envelope"></i>

                    <p class="footer-links"><a href="secretariat AT info.uaic.ro">&nbsp&nbspsecretariat AT info.uaic.ro</a></p>

                </div>



            </div>



            <div class="footer-right">

                <h3 class="headernou">Linkuri</h3>

                <div class="footer-links">

                     <img class="footer_img grayscale" src="imagini/fii.png" alt="fII"  id="bloc1"/>

                     <a href="https://www.info.uaic.ro/bin/Main/"><p id="bloc2" class="footer-links"> &nbsp&nbspFacultatea de informatic&#259; Iasi<p></a>

                </div>

                <div class="footer-links">

                     <img class="footer_img grayscale" src="imagini/logo.png" alt="uaic" id="bloc1" />

                     <a href="http://www.uaic.ro/"><p id="bloc2" > &nbsp&nbspUAIC<p></a>

                </div>

                

                <div class="footer-links">

                <img class="footer_img grayscale" src="imagini/facebook-icon.png" alt="fb" id="bloc1" >

                <a href="https://www.facebook.com/FacultateaDeInformaticaUAICIasi/?fref=ts"><p id="bloc2"> &nbsp&nbspFacebook-ul faculta&#355;ii de informatic&#259;<p></a>

                </div>

                

    

                

            </div>

            

            <div class="footer-4"> <img class="footer_img2 grayscale" src="imagini/fii.png" alt="fii "  id="bloc1"/>

            </div>



            

            <hr class="hr_footer">

                <p class="hr_text">&copy; 2017 Grupa B3 Facultatea de Informatic&#259; Iasi</p>

            </hr>

        </footer>

        



    <!--Modal Pentru Respingerea unui formular, de trimis e-mail-->

    <div class="modal fade" id="TrimiteMail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <form action="mail_administrativ.php" method="post">

                        <div class="form-group">

                            <label for="recipient-name" class="form-control-label">E-mail:</label>

                            <input type="text" name="recipient-name" class="form-control" id="recipient-name">

                        </div>

                        <div class="form-group">

                            <label for="message-text" class="form-control-label">Mesaj:</label>

                            <textarea class="form-control" id="message-text" name="message-text"></textarea>

                        </div>
                        
                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            <input type="submit" name="submit" value="Submit" class="btn btn-primary">

                    </div>

                    </form> 
                    
                </div> 

            </div>

        </div>

    </div>

</body>

</html>



<script src="js/page-admin.js"></script>


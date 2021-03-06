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

    <title>Administrare</title>



</head>

<body>

    <div class="mare collapse navbar-collapse navbar nav-group nav-group--consistent">

      <div class="nav navbar-nav bar2">

        <ul style="width:100%; height:40px; background-color:#3488CB;"></ul>

        <ul class="left-menu">

            <li class="lung"><a href="index.html">Despre FII</a></li>

            <li class="scurt"><a href="index.html">FII</a></li>

            <li><a href="paginaAdmitere.php">Admitere</a></li>

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

        <li class="tog2"><a href="index.html">Despre FII</a></li>  

        <li class="tog2"><a href="paginaAdmitere.php">Admitere</a></li>

        <li class="tog2"><a href="IntrebariFrecvente.html">&#206;ntreb&#259;ri</a></li>

        <li class="tog2"><a href="contact.html">Contact</a></li>

      </ul>

    </div> 

  </div>

  <br/><br/>

  

    <div id="top">

        <div class="container">

            <div style="display: inline-flex;" class="col-md-10">

                <img class="icon-admin" src="imagini/admin-logo.png">

                <h1><span aria-hidden=true> Administrare</span></h1>

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


                    <button id="Submit" name="Submit" Value="Register" class="btn buton validare-btn wid100" type="submit" form="DetaliiStudLicenta">

                        <span  style="color:white;">Validare</span>

                    </button>

                

                    
                    <button id="Submit" name="Submit" Value="Register" class="btn buton validare-btn wid100" type="submit" form="RespingereStudLicenta">

                        <span  style="color:white;">Respingere</span>

                    </button>
                    
                    

                
                <form  method="post" action="pdf_licenta.php">
                    
                    <input type="hidden" name="id_formular" value="<?php
                    $id_formular_pdf = $_POST['id_formular'];
                    echo ''.$id_formular_pdf;
                    ?> "/>
                    
                    <button id="Submit" name="Submit" Value="Register" class="btn buton validare-btn wid100" type="submit">

                        <span  style="color:white;">Generare pdf</span>

                    </button>
                    
                    
                </form>
                
                <form  method="post" action="excel_licenta.php">
                    
                    <input type="hidden" name="id_formular" value="<?php
                    $id_formular_pdf = $_POST['id_formular'];
                    echo ''.$id_formular_pdf;
                    ?> "/>
                    
                    <button id="Submit" name="Submit" Value="Register" class="btn buton validare-btn wid100" type="submit">

                        <span  style="color:white;">Generare excel</span>

                    </button>
                    
                    
                </form>

            </div>

        </div>

        <div class="col-md-9" style="border-left:1px solid #eee;">

            <form id="DetaliiStudLicenta" method="post" action="validareFormularLicenta.php">

                <div class="col-md-12" style="text-align:center;">
                    <?php
                    include 'adminMainPageLicenta.php';
                    $id_formular=$_POST['id_formular'];
                    $nume=getNumeActual($id_formular);
                    $prenume=getPrenume($id_formular);
                    echo '<span name="NumeCompletStudent" class="entire-name">'.$nume.' '.$prenume.'</span>';
                    ?>

                </div>



                <div class="col-md-12" style="margin-top:20px; ">

                    <div class="col-md-6 ">
                        <?php
                        /*error_reporting(E_ERROR);
                        error_reporting(0);
                        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);*/
                        $id_formular=$_POST['id_formular'];

                        echo '
                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Taxa de înscriere

                            </span>

                        </div>
                        
                        <label>Chitanța nr.</label><input name="chitantaNr" class="form-control" value="'.getNumarulChitantei($id_formular).'"/>
                        
                        <label>Suma</label><input name="suma" class="form-control" value="'.getSuma($id_formular).'"/>
                        
                        <label>Este scutit (se completeaza doar cu da/nu)</label><input name="esteScutit" class="form-control" value="'.getEsteScutit($id_formular).'"/>
                        
                        <label>Motiv scutire</label><input name="motivScutire" class="form-control" value="'.getMotivScutire($id_formular).'"/>
                        
                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Date personale ale candidatului cu cetăţenie română/ UE/ SEE

                            </span>

                        </div>

                        <div class="col-md-12" style="font-size:17px;">


                       <br>

                            <label>Numele de familie (din certificatul de naștere)</label><input name="numeDeFamilie" class="form-control" value="'.getNumeNastere($id_formular).'"/>
                        
                            <label class="marg-t10">Numele de familie actual (după căsătorie, înfiere, modificare la cerere conform actului doveditor, dacă este cazul)</label><input name="numeDeFamilieActual" class="form-control" value="'.getNumeActual($id_formular).'"/>

                            <label class="marg-t10">Prenume:</label><input name="prenume" class="form-control" value="'.getPrenume($id_formular).'" />

                            <label class="marg-t10">Ini&#355;iala tat&#259;lui:</label><input name="initialaTata" class="form-control" value="'.getInitialaTata($id_formular).'"/>

                            <label class="marg-t10">Prenume tată:</label><input name="prenumeTata" class="form-control" value="'.getPrenumeTata($id_formular).'"/>

                            <label class="marg-t10">Prenume mamă:</label><input name="prenumeMama" class="form-control" value="'.getPrenumeMama($id_formular).'"/>

                            <label class="marg-t10">Stare civilă: </label><input name="stareCivila" class="form-control" value="'.getStareCivila($id_formular).'" />

                            <label class="marg-t10">Sex (doar M sau F) </label><input name="sex" class="form-control" value="'.getSex($id_formular).'" />
                            
                            <label class="marg-t10">Țară naștere: </label><input name="taraNastere" class="form-control" value="'.getTaraNastere($id_formular).'"/>
                            
                            <label class="marg-t10">Județ naștere: </label><input name="judetNastere" class="form-control" value="'.getJudetNastere($id_formular).'"/>
                            
                            <label class="marg-t10">Localitate naștere: </label><input name="localitateNastere" class="form-control" value="'.getLocalitateNastere($id_formular).'"/>
                            
                            <label class="marg-t10">Data nașterii:</label>
                            
                            <div class="col-md-12" style="padding-left:0; padding-right:0;">

                                <input name="dataNasteriiDay" class="form-control col-md-4 wid33 marg-r1" value="'.getDataDay($id_formular).'"/>

                                <input name="dataNasteriiMonth"  class="form-control col-md-4 wid33 marg-r1" value="'.getDataMonth($id_formular).'"/>

                                <input name="dataNasteriiYear" class="form-control col-md-4 wid33" value="'.getDataYear($id_formular).'"/>

                                <input type="hidden" name="idFormular" value="'.$id_formular.'"/>
                            </div>
                            
                            <br>
                            
                            <label class="marg-t10">Cetățenie: </label><input name="cetatenie" class="form-control" value="'.getCetatenie($id_formular).'" />

                            <label class="marg-t10">Naționalitate: </label><input name="nationalitate" class="form-control" value="'.getNationalitate($id_formular).'" />

                            <label class="marg-t10">Etnie: </label><input name="etnie" class="form-control" value="'.getEtnie($id_formular).'" />

                            <label class="marg-t10">Limba matern&#259;: </label><input name="limbaMaterna" class="form-control" value="'.getLimbaMaterna($id_formular).'" />

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Date act de identitate

                            </span>

                        </div>

                            <label>CNP:</label><input name="cnp" class="form-control" value="'.getCNP($id_formular).'" />
                            
                            <label>Tip act:</label><input name="tipAct" class="form-control" value="'.getTipAct($id_formular).'" />

                            <label class="marg-t10">Serie act: </label><input name="serieBuletin" class="form-control" value="'.getSerieBuletin($id_formular).'" />

                            <label class="marg-t10">Num&#259;r act: </label><input name="nrBuletin" class="form-control" value="'.getNumarBuletin($id_formular).'" />

                            <label class="marg-t10">Eliberat de: </label><input name="eliberatDe" class="form-control" value="'.getBuletinEliberatDe($id_formular).'" />

                            <label class="marg-t10">Data Eliber&#259;rii:</label>

                            <div class="col-md-12" style="padding-left:0; padding-right:0;">

                                <input name="dataEliberariiDay" class="col-md-4 form-control marg-r1 wid33"  value="'.getBuletinEliberareDay($id_formular).'"/>

                                <input name="dataEliberariiMonth" class="col-md-4 form-control marg-r1 wid33"  value="'.getBuletinEliberareMonth($id_formular).'"/>

                                <input name="dataEliberariiYear" class="col-md-4 form-control wid33" value="'.getBuletinEliberareYear($id_formular).'"/>

                            </div><br>

                            <label class="marg-t10">Data Expir&#259;rii:</label>

                            <div class="col-md-12" style="padding-left:0; padding-right:0;">

                                <input name="dataExpirariiDay" class="col-md-4 form-control marg-r1 wid33"  value="'.getBuletinExpirareDay($id_formular).'"/>

                                <input name="dataExpirariiMonth" class="col-md-4 form-control marg-r1 wid33"  value="'.getBuletinExpirareMonth($id_formular).'"/>

                                <input name="dataExpirariiYear" class="col-md-4 form-control wid33" value="'.getBuletinExpirareYear($id_formular).'"/>

                            </div>
                             

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Domiciliul candidatului

                            </span>

                         </div>
                         
                                <label class="marg-t10">Domiciliu stabil: </label><input name="domiciliuStabil" class="form-control" value="'.getDomiciliuStabil($id_formular).'"/>

                                <label>Strada:</label><input name="strada" class="form-control" value="'.getStrada($id_formular).'"/>

                                <label>Numărul:</label><input name="numar" class="form-control" value="'.getNrStrada($id_formular).'"/>

                                <label>Bloc:</label><input name="bloc" class="form-control" value="'.getNrBloc($id_formular).'"/>

                                <label>Scara:</label><input name="scara" class="form-control" value="'.getScara($id_formular).'"/>
                                
                                <label>Etaj:</label><input name="etaj" class="form-control" value="'.getEtaj($id_formular).'"/>
                                
                                <label>Apartament:</label><input name="apartament" class="form-control" value="'.getApartament($id_formular).'"/>
                                
                                <label class="marg-t10">Localitate: </label><input name="localitate" class="form-control" value="'.getLocalitateDomiciliu($id_formular).'"/>
                                
                                <label class="marg-t10">Jude&#355;:</label><input name="judet" class="form-control" value="'.getJudetDomiciliu($id_formular).'"/>

                                <label class="marg-t10">Cod Po&#351;tal:</label><input name="codPostal" class="form-control" value="'.getCodPostal($id_formular).'"/>
                                
                                <label class="marg-t10">Țară: </label><input name="tara" class="form-control" value="'.getTaraDomiciliu($id_formular).'"/>

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Date de contact

                            </span>

                         </div>

                                <label class="marg-t10">Num&#259;r de telefon:</label><input name="nrDeTelefon" class="form-control" value="'.getTelefon($id_formular).'"/>

                                <label class="marg-t10">E-mail:</label><input name="email" class="form-control" value="'.getEmail($id_formular).'"/>
                                
                                
                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Solicitări cazare

                            </span>

                        </div>
                                
                                <label class="marg-t10">Solicită cazare pe timpul studiilor?</label><input name="solicitaCazareStudii" class="form-control" value="'.getCazareStudii($id_formular).'"/>
                                
                                <label class="marg-t10">Solicită cazare pe timpul examenului?</label><input name="solicitaCazareExamen" class="form-control" value="'.getCazareExamen($id_formular).'"/>
                                

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Alte date personale ale candidatului

                            </span>

                        </div>

                                <label class="marg-t10">Candidatul se încadrează în categoria persoanelor cu dizabilități </label><input name="persoanaCuDizabilitati" class="form-control" value="'.getPersoanaCuDizabilitati($id_formular).'"/>

                                <label class="marg-t10">Stare socială specială: </label><input name="stareSpeciala" class="form-control" value="'.getStareSocialaSpeciala($id_formular).'"/>
                                
                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                Studiile preuniversitare absolvite, nivel liceu

                            </span>

                        </div>
                            
                            <label class="marg-t10">Instituția unde a absolvit</label><input name="liceulAbsolvit" class="form-control" value="'.getLiceulAbsolvit($id_formular).'" />

                            <label class="marg-t10">Localitate</label><input name="localitateLiceu" class="form-control" value="'.getLocalitateLiceu($id_formular).'" />

                            <label class="marg-t10">Județ:</label><input name="judetLiceu" class="form-control" value="'.getJudetLiceu($id_formular).'" />

                            <label class="marg-t10">Țară:</label><input name="taraLiceu" class="form-control" value="'.getTaraLiceu($id_formular).'" />

                            <label class="marg-t10">Profil/Domeniul:</label><input name="profilLiceu" class="form-control" value="'.getProfilLiceu($id_formular).'" />

                            <label class="marg-t10">Durata studiilor:</label><input name="durataStudiilorLiceu" class="form-control" value="'.getDurataStudiilorLiceu($id_formular).'" />

                            <label class="marg-t10">Anul absolvirii:</label><input name="anulAbsolviriiLiceu" class="form-control" value="'.getAnulAbsolviriiLiceu($id_formular).'" />

                            <label class="marg-t10">Forma de învățământ (Zi/Seral/FR/ID):</label><input name="formaInvatamantLiceu" class="form-control" value="'.getFormaInvatamantLiceu($id_formular).'" />
                            
                        <div class="align-center">

                            <label class="marg-t10"> Diploma de bacalaureat</label>

                        </div>

                            <label class="marg-t10">Seria:</label><input name="serieDiplomaBac" class="form-control" value="'.getSerieDiplomaBac($id_formular).'" />

                            <label class="marg-t10">Numărul:</label><input name="nrDiplomaBac" class="form-control" value="'.getNrDiplomaBac($id_formular).'" />

                            <label class="marg-t10">Emisă de:</label><input name="emisaDeLiceu" class="form-control" value="'.getEmisaDeLiceu($id_formular).'" />
                            
                            <label class="marg-t10">Data emitere:</label>
                            
                            <div class="col-md-12" style="padding-left:0; padding-right:0;">

                                <input name="dataEliberariiBacDay" class="col-md-4 form-control marg-r1 wid33"  value="'.getBacEliberareDay($id_formular).'"/>

                                <input name="dataEliberariiBacMonth" class="col-md-4 form-control marg-r1 wid33"  value="'.getBacEliberareMonth($id_formular).'"/>

                                <input name="dataEliberariiBacYear" class="col-md-4 form-control wid33" value="'.getBacEliberareYear($id_formular).'"/>

                            </div><br>

                            <label class="marg-t10">Numarul foii matricole care insoteste actul de studii:</label><input name="nrFoiiMatricole" class="form-control" value="'.getNrFoiiMatricole($id_formular).'" />
                            
                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Alte observatii (pentru caurile in care candidatul a absolvit studii anterioare in strainatate)

                            </span>

                        </div>

                                <label class="marg-t10"> Act de recunoastere/ echivalare (eliberat de DPIRP/CNRED):</label>

                                <label class="marg-t10">Nr:</label><input name="nrActRecEchiv" class="form-control" value="'.getNrActRecEchiv($id_formular).'" />

                                <label class="marg-t10">Serie:</label><input name="serieActRecEchiv" class="form-control" value="'.getSerieActRecEchiv($id_formular).'" />

                                <label class="marg-t10">Data echivalării:</label>
                                    
                                <div class="col-md-12" style="padding-left:0; padding-right:0;">

                                    <input name="dataEchivLiceuDay" class="col-md-4 form-control marg-r1 wid33"  value="'.getEchivLiceuDay($id_formular).'"/>

                                    <input name="dataEchivLiceuMonth" class="col-md-4 form-control marg-r1 wid33"  value="'.getEchivLiceuMonth($id_formular).'"/>

                                    <input name="dataEchivLiceuYear" class="col-md-4 form-control wid33" value="'.getEchivLiceuYear($id_formular).'"/>

                                </div><br>

                        </div>

                    </div>

                    <div class="col-md-6">
                    
                        <div class="col-md-12" style="font-size:17px; margin-bottom:45px;">

                        </div>

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                Studiile universitare de licenta in curs

                            </span>

                        </div>

                                <label class="marg-t10">Student la altă facultate/universitate?</label><input name="studentAltaFac" class="form-control" value="'.getStudentAltaFac($id_formular).'" />

                                <label class="marg-t10">Denumirea institutiei de invatamant superior:</label><input name="denumireInstitutieFac" class="form-control" value="'.getDenumireInstitutieFac($id_formular).'" />

                                <label class="marg-t10">Facultatea:</label><input name="denumireAltaFac" class="form-control" value="'.getDenumireAltaFacultate($id_formular).'" />

                                <label class="marg-t10">Domeniul de licenta:</label><input name="domeniuLicentaFac" class="form-control" value="'.getDomeniuLicentaFac($id_formular).'" />

                                <label class="marg-t10">Programul de studii/ Specializarea:</label><input name="specializareFac" class="form-control" value="'.getSpecializareFac($id_formular).'" />

                                <label class="marg-t10">Anul:</label><input name="anulFac" class="form-control" value="'.getAnulFac($id_formular).'" />
            
                                <label class="marg-t10">Forma de invatamant:</label><input name="formaInvatamantFac" class="form-control" value="'.getFormaInvatamantFac($id_formular).'" />

                                <label class="marg-t10">Numarul semestrelor finantate de la buget de stat:</label><input name="nrSemestreBugetFac" class="form-control" value="'.getNrSemestreBugetFac($id_formular).'" />

                                <label class="marg-t10">Numarul semestrelor in care ati beneficiat de bursa:</label><input name="nrSemestreBursaFac" class="form-control" value="'.getNrSemestreBursaFac($id_formular).'" />
                            
                                <label class="marg-t10">Localitate:</label><input name="localitateFac" class="form-control" value="'.getLocalitateFac($id_formular).'" />

                                <label class="marg-t10">Judetul:</label><input name="judetFac" class="form-control" value="'.getJudetFac($id_formular).'" />
                                
                                <label class="marg-t10">Tara:</label><input name="taraFac" class="form-control" value="'.getTaraFac($id_formular).'" />

                            <div class="align-center">

                                <span class="col-md-12 sub-title">

                                    <br>Studiile universitare de licență absolvite

                                </span>

                            </div>


                                <label class="marg-t10">Absolvent al studiilor de licență în anul:</label><input name="anulAbsolvirii" class="form-control" value="'.getAnulAbsolvirii($id_formular).'" />

                                <label class="marg-t10">Denumirea institutiei de invatamant superior:</label><input name="denumireInstitutieAbs" class="form-control" value="'.getDenumireInstitutieAbs($id_formular).'" />

                                <label class="marg-t10">Facultatea:</label><input name="denumireFacultateAbs" class="form-control" value="'.getDenumireFacultateAbs($id_formular).'" />

                                <label class="marg-t10">Domeniul de licenta:</label><input name="domeniuLicentaAbs" class="form-control" value="'.getDomeniuLicentaAbs($id_formular).'" />

                                <label class="marg-t10">Programul de studii/Specializarea</label><input name="specializareAbs" class="form-control" value="'.getSpecializareAbs($id_formular).'" />

                                <label class="marg-t10">Titlu obtinut</label><input name="titluObtinut" class="form-control" value="'.getTitluObtinut($id_formular).'" />                               

                                <label class="marg-t10">Forma de invatamant:</label><input name="formaInvatamantAbs" class="form-control" value="'.getFormaInvatamantAbs($id_formular).'" />
                                
                                <label class="marg-t10">Durata studiilor (numar de ani)</label><input name="durataStudiilorAbs" class="form-control" value="'.getDurataStudiilorAbs($id_formular).'" />

                                <label class="marg-t10">Numarul semestrelor finantate de la buget de stat:</label><input name="nrSemestreBugetAbs" class="form-control" value="'.getNrSemestreBugetAbs($id_formular).'" />

                                <label class="marg-t10">Numarul semestrelor in care ati beneficiat de bursa:</label><input name="nrSemestreBursaAbs" class="form-control" value="'.getNrSemestreBursaAbs($id_formular).'" />
                                
                                <label class="marg-t10">Localitate:</label><input name="localitateFacAbs" class="form-control" value="'.getLocalitateFacAbs($id_formular).'" />

                                <label class="marg-t10">Judetul:</label><input name="judetFacAbs" class="form-control" value="'.getJudetFacAbs($id_formular).'" />
                                
                                <label class="marg-t10">Tara:</label><input name="taraFacAbs" class="form-control" value="'.getTaraFacAbs($id_formular).'" />

                                <label class="marg-t10">Diploma de licență</label><br>

                                <label class="marg-t10">Seria</label><input name="serieDiplomaLicenta" class="form-control" value="'.getSerieDiplomaLicenta($id_formular).'" />

                                <label class="marg-t10">Numar</label><input name="nrDiplomaLicenta" class="form-control" value="'.getNrDiplomaLicenta($id_formular).'" />

                                <label class="marg-t10">Emisa de</label><input name="licentaEmisaDe" class="form-control" value="'.getLicentaEmisaDe($id_formular).'" />

                                <label class="marg-t10">Data emiterii:</label>
                                    
                                <div class="col-md-12" style="padding-left:0; padding-right:0;">

                                    <input name="dataEmitereLicentaDay" class="col-md-4 form-control marg-r1 wid33"  value="'.getEmitereLicentaDay($id_formular).'"/>

                                    <input name="dataEmitereLicentaMonth" class="col-md-4 form-control marg-r1 wid33"  value="'.getEmitereLicentaMonth($id_formular).'"/>

                                    <input name="dataEmitereLicentaYear" class="col-md-4 form-control wid33" value="'.getEmitereLicentaYear($id_formular).'"/>

                                </div><br>

                                <label class="marg-t10">Numarul suplimentului/ foii matricole care insoteste actul de studii</label><input name="nrSupliment" class="form-control" value="'.getNrSupliment($id_formular).'" />

                            <div class="align-center">

                                <span class="col-md-12 sub-title">

                                    <br>Alte observatii (pentru caurile in care candidatul a absolvit studii anterioare in strainatate)

                                </span>
                                
                            </div>

                                <label class="marg-t10"> Act de recunoastere/ echivalare (eliberat de DPIRP/CNRED):</label>

                                <label class="marg-t10">Nr:</label><input name="nrActRecEchivAbs" class="form-control" value="'.getNrActRecEchivAbs($id_formular).'" />

                                <label class="marg-t10">Serie:</label><input name="serieActRecEchivAbs" class="form-control" value="'.getSerieActRecEchivAbs($id_formular).'" />

                                <label class="marg-t10">Data echivalării:</label>
                                    
                                <div class="col-md-12" style="padding-left:0; padding-right:0;">

                                    <input name="dataEchivAbsDay" class="col-md-4 form-control marg-r1 wid33"  value="'.getEchivAbsDay($id_formular).'"/>

                                    <input name="dataEchivAbsMonth" class="col-md-4 form-control marg-r1 wid33"  value="'.getEchivAbsMonth($id_formular).'"/>

                                    <input name="dataEchivAbsYear" class="col-md-4 form-control wid33" value="'.getEchivAbsYear($id_formular).'"/>

                                </div><br>
                                
                            <div class="align-center">

                                <span class="col-md-12 sub-title">

                                    <br>Cerințe specifice facultății

                                </span>

                            </div>
                            
                                <label class="marg-t10">Solicită echivalare cu diploma de la olimpiadă organizată de MEN? </label><input name="solicitaEchivalare" class="form-control" value="'.getSolicitaEchivalare($id_formular).'"/>

                                <label class="marg-t10">Media generala la examenul de bacalaureat </label><input name="medieGeneralaBac" class="form-control" value="'.getMedieGeneralaBac($id_formular).'"/>

                                <label class="marg-t10">Media la disciplina matematică/informatică (maximă) </label><input name="medieDisciplinaMax" class="form-control" value="'.getMedieDisciplinaMax($id_formular).'"/>

                                <label class="marg-t10">Opțiunea pentru testul scris: </label><input name="optiuneTestScris" class="form-control" value="'.getOptiuneTestScris($id_formular).'"/>

                                <label class="marg-t10">A participat la preadmitere la Facultatea de Informatică din Iași în anul <input name="anParticiparePreadmitere" class="form-control" value="'.getAnParticiparePreadmitere($id_formular).'"/> Dorește luarea în considerare a notei la examenul din sesiunea curentă? <input name="vreaNotaPreadmitere" class="form-control" value="'.getVreaNotaPreadmitere($id_formular).'"/> 

                                <label class="marg-t10">Daca a raspuns DA la întrebarea anterioara, dorește să susțină din nou testul scris în această sesiune de admitere?</label><input name="vreaSaSustinaExamen" class="form-control" value="'.getVreaSaSustinaExamen($id_formular).'"/>
                            
                            <div class="align-center">

                                <span class="col-md-12 sub-title">

                                    <br>Opțiuni de admitere în ordinea preferințelor

                                </span>

                            </div>
                            
                                <label class="marg-t10">Preferința 1 (obligatoriu):</label><input name="preferinta1" class="form-control" value="'.getPreferinta1($id_formular).'"/>
                                
                                <label class="marg-t10">Preferința 2 (opțional):</label><input name="preferinta2" class="form-control" value="'.getPreferinta2($id_formular).'"/>
                                
                                <label class="marg-t10">Preferința 3 (opțional):</label><input name="preferinta3" class="form-control" value="'.getPreferinta3($id_formular).'"/>
                                
                                <label class="marg-t10">Preferința 4 (opțional):</label><input name="preferinta4" class="form-control" value="'.getPreferinta4($id_formular).'"/>
                                
                                <label class="marg-t10">Acceptă să fie înmatriculat pe locurile cu taxă?</label><input name="acceptaTaxa" class="form-control" value="'.getLocTaxa($id_formular).'"/>
                                
                            <div class="align-center">

                                <span class="col-md-12 sub-title">

                                    <br>Infomaţii privind documentele de studii depuse la dosar

                                </span>

                            </div>
                            
                                <label class="marg-t10">Diploma de Bacalaureat</label><input name="diplomaBacDoc" class="form-control" value="'.getDiplomaBacOriginal($id_formular).'"/>
                                
                                <label class="marg-t10">Adeverință</label><input name="adeverintaDoc" class="form-control" value="'.getAdeverintaOriginal($id_formular).'"/>
                                
                                <label class="marg-t10">Document echivalare studii</label><input name="echivStudiiDoc" class="form-control" value="'.getEchivalareStudii($id_formular).'"/>
                                
                                <label class="marg-t10">Diploma de Olimpiadă</label><input name="diplomaOlimpiadaDoc" class="form-control" value="'.getDiplomaOlimpiada($id_formular).'"/>
                            
                            <div class="align-center">

                                <span class="col-md-12 sub-title">

                                    <br>Alte concursuri de admitere

                                </span>

                            </div>
                            
                                <label class="marg-t10">Participă la alte concursuri de admitere?</label><input name="alteConcursuri" class="form-control" value="'.getAlteConcursuri($id_formular).'"/>
                            
                                <label class="marg-t10">Denumirea instituţiei de învăţământ superior</label><input name="altaUniv1" class="form-control" value="'.getAltaUniv1($id_formular).'"/>
                                
                                <label class="marg-t10">Facultatea</label><input name="altaFac1" class="form-control" value="'.getAltaFac1($id_formular).'"/>
                                
                                <label class="marg-t10">Denumirea instituţiei de învăţământ superior</label><input name="altaUniv2" class="form-control" value="'.getAltaUniv2($id_formular).'"/>
                                
                                <label class="marg-t10">Facultatea</label><input name="altaFac2" class="form-control" value="'.getAltaFac2($id_formular).'"/>
                                
                                <label class="marg-t10">Denumirea instituţiei de învăţământ superior</label><input name="altaUniv3" class="form-control" value="'.getAltaUniv3($id_formular).'"/>
                                
                                <label class="marg-t10">Facultatea</label><input name="altaFac3" class="form-control" value="'.getAltaFac3($id_formular).'"/>
                        
                            </div>

                        </div>
                    
            </div>';
            ?>

        </div>

    </div>

    </form>

            <form id="RespingereStudLicenta" method="post" action="respingereFormularLicenta.php" >
                <?php

                $id_formular=$_POST['id_formular'];
                echo ' <input type="hidden" name="idFormular" value="'.$id_formular.'"/> ';
                ?>

            </form>

    <footer class="footer-distributed">



            <div class="footer-left">

                <h3 class="headernou2">Admitere <span> FII</span></h3>

                <p class="footer-links">

                    <a href="index.html">Despre Fii</a>

                    ·

                    <a href="paginaAdmitere.php">Admitere</a>

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

                    <p>&nbsp;&nbsp;0232 201 102</p>

                </div>



                <div>

                    <i class="fa fa-envelope"></i>

                    <p class="footer-links"><a href="secretariat AT info.uaic.ro">&nbsp;&nbsp;secretariat AT info.uaic.ro</a></p>

                </div>



            </div>



            <div class="footer-right">

                <h3 class="headernou">Linkuri</h3>

                <div class="footer-links">

                     <img class="footer_img grayscale" src="imagini/fii.png" alt="fII"  id="bloc1"/>

                     <a href="https://www.info.uaic.ro/bin/Main/"><p id="bloc2" class="footer-links"> &nbsp;&nbsp;Facultatea de informatic&#259; Iasi<p></a>

                </div>

                <div class="footer-links">

                     <img class="footer_img grayscale" src="imagini/logo.png" alt="uaic" id="bloc1" />

                     <a href="http://www.uaic.ro/"><p id="bloc2" > &nbsp;&nbsp;UAIC<p></a>

                </div>

                

                <div class="footer-links">

                <img class="footer_img grayscale" src="imagini/facebook-icon.png" alt="fb" id="bloc1" >

                <a href="https://www.facebook.com/FacultateaDeInformaticaUAICIasi/?fref=ts"><p id="bloc2"> &nbsp;&nbsp;Facebook-ul faculta&#355;ii de informatic&#259;<p></a>

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


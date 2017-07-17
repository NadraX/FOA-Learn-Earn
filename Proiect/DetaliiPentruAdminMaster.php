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
                    <button id="Submit" name="Submit" Value="Register" class="btn buton validare-btn wid100" type="submit" form="DetaliiStudMaster">

                        <span  style="color:white;">Validare</span>

                    </button>
                </form>
                
                <form  method="post" action="respingereFormularPreAdmitere.php">
                    
                    <button id="Submit" name="Submit" Value="Register" class="btn buton validare-btn wid100" type="submit" form="RespingereStudMaster">

                        <span  style="color:white;">Respingere</span>

                    </button>
                    
                    
                </form>
                
                <form  method="post" action="pdf_master.php">
                    
                    <input type="hidden" name="id_formular" value="<?php
                    $id_formular_pdf = $_POST['id_formular'];
                    echo ''.$id_formular_pdf;
                    ?> "/>
    
                    <button id="Submit" name="Submit" Value="Register" class="btn buton validare-btn wid100" type="submit">

                        <span  style="color:white;">Generare pdf</span>

                    </button>
                    
                    
                </form>
                
                <form  method="post" action="excel_master.php">
                    
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

            <form id="DetaliiStudMaster" method="post" action="validareFormularMaster.php">

                <div class="col-md-12" style="text-align:center;">
                    <?php
                    include 'adminMainPageMaster.php';
                    $id_formular=$_POST['id_formular'];
                    $nume=getNumeActual($id_formular);
                    $prenume=getPrenume($id_formular);
                    echo '<span name="NumeCompletStudent" class="entire-name">'.$nume.' '.$prenume.'</span>';
                    ?>

                </div>



                <div class="col-md-12" style="margin-top:20px; ">

                    <div class="col-md-6 ">

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                Taxa de înscriere

                            </span>

                        </div>


                        <div class="col-md-12" style="font-size:17px;">
                        <?php
                        error_reporting(E_ERROR);
                        error_reporting(0);
                        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
                        $id_formular=$_POST['id_formular'];

                       echo ' <label>Chitanța nr.</label><input name="chitantaNr" class="form-control" value=""/>
                        
                            <label class="marg-t10">Suma</label><input name="suma" class="form-control" value=""/>

                            <label class="marg-t10">Scutit</label><input name="scutit" class="form-control" value="" />
                            
                            <label class="marg-t10">Motiv scutire</label><input name="motivScutire" class="form-control" value="" />

                            <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Date personale ale candidatului cu cetăţenie română/ UE/ SEE

                            </span>

                        </div>

                            <label class="marg-t10">Numele de familie din certificatul de naștere</label><input name="numeDeFamilie" class="form-control" value="'.getNumeNastere($id_formular).'"/>
                        
                            <label class="marg-t10">Numele de familie actual (după căsătorie, înfiere, etc.)</label><input name="numeDeFamilieActual" class="form-control" value="'.getNumeActual($id_formular).'"/>

                            <label class="marg-t10">Prenume:</label><input name="prenume" class="form-control" value="'.getPrenume($id_formular).'" />

                            <label class="marg-t10">Ini&#355;iala tat&#259;lui:</label><input name="initialaTata" class="form-control" value="'.getInitialaTata($id_formular).'"/>

                            <label class="marg-t10">Prenume tată:</label><input name="prenumeTata" class="form-control" value="'.getPrenumeTata($id_formular).'"/>

                            <label class="marg-t10">Prenume mamă:</label><input name="prenumeMama" class="form-control" value="'.getPrenumeMama($id_formular).'"/>
                            
                            <label class="marg-t10">Stare civilă:</label><input name="stareCivila" class="form-control" value="" />
                            
                            <label class="marg-t10">Sex: </label><input name="sex" class="form-control" value="'.getSex($id_formular).'" />
                            
                            <label class="marg-t10">Țara nașterii:</label><input name="taraNastere" class="form-control" value="" />
                            
                            <label class="marg-t10">Județul nașterii:</label><input name="judetNastere" class="form-control" value="" />
                            
                            <label class="marg-t10">Localitatea nașterii:</label><input name="localitateNastere" class="form-control" value="" />

                            <label class="marg-t10">Data nașterii:</label>
                            
                            <div class="col-md-12" style="padding-left:0; padding-right:0;">

                                <input name="dataNasteriiDay" class="form-control col-md-4 wid33 marg-r1" value="'.getDataDay($id_formular).'"/>

                                <input name="dataNasteriiMonth"  class="form-control col-md-4 wid33 marg-r1" value="'.getDataMonth($id_formular).'"/>

                                <input name="dataNasteriiYear" class="form-control col-md-4 wid33" value="'.getDataYear($id_formular).'"/>

                                <input type="hidden" name="idFormular" value="'.$id_formular.'"/>
                            
                            </div>
                            
                            <br>
                            
                            <label class="marg-t10">Naționalitate: </label><input name="nationalitate" class="form-control" value="'.getNationalitate($id_formular).'" />
                            
                            <label class="marg-t10">Cetățenie: </label><input name="cetatenie" class="form-control" value="'.getCetatenie($id_formular).'" />

                            <label class="marg-t10">Etnie: </label><input name="etnie" class="form-control" value="'.getEtnie($id_formular).'" />

                            <label class="marg-t10">Limba matern&#259;: </label><input name="limbaMaterna" class="form-control" value="'.getLimbaMaterna($id_formular).'" />
                            
                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Date carte de identitate

                            </span>

                        </div>

                            <label>CNP:</label><input name="cnp" class="form-control" value="'.getCNP($id_formular).'" />
                            
                            <label class="marg-t10">Tipul actului de identitate: </label><input name="tipAct" class="form-control" value="'.getSerieBuletin($id_formular).'" />

                            <label class="marg-t10">Seria actului: </label><input name="serieBuletin" class="form-control" value="'.getSerieBuletin($id_formular).'" />

                            <label class="marg-t10">Num&#259;rul actului: </label><input name="nrBuletin" class="form-control" value="'.getNumarBuletin($id_formular).'" />

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
                         
                                <label class="marg-t10">Domiciliu stabil:</label><input name="domiciliuStabil" class="form-control" value=""/>
                                
                                <label>Strada:</label><input name="strada" class="form-control" value="'.getStrada($id_formular).'"/>

                                <label>Numarul:</label><input name="numar" class="form-control" value="'.getNrStrada($id_formular).'"/>

                                <label>Bloc:</label><input name="bloc" class="form-control" value="'.getNrBloc($id_formular).'"/>

                                <label>Scara:</label><input name="scara" class="form-control" value="'.getScara($id_formular).'"/>
                                
                                <label>Etaj:</label><input name="etaj" class="form-control" value=""/>
                                
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

                                <br>Solicită cazare?

                            </span>

                        </div>
                        
                            <label class="marg-t10">Solicită cazare pe timpul studiilor?</label><input name="cazareStudii" class="form-control" value=""/>
                            
                            <label class="marg-t10">Solicită cazare pe timpul admiterii?</label><input name="cazareAdmitere" class="form-control" value=""/>
                        
                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Alte date personale ale candidatului

                            </span>

                        </div>
                        
                            <label class="marg-t10">Candidat care se incadreaza in categoria persoanelor cu dizabilitati </label><input name="persoanaCuDizabilitati" class="form-control" value="'.getPersoanaCuDizabilitati($id_formular).'"/>

                            <label class="marg-t10">Stare socială specială: </label><input name="stare-speciala" class="form-control" value=""/>
                            
                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Studiile preuniversitare absolvite, nivel liceu

                            </span>

                        </div>
                        
                        <label class="marg-t10">Institutia unde a absolvit</label><input name="liceulAbsolvit" class="form-control" value="'.getliceulAbsolvit($id_formular).'" />

                            <label class="marg-t10">Localitate:</label><input name="localitateLiceu" class="form-control" value="'.getlocalitateLiceu($id_formular).'" />

                            <label class="marg-t10">Judet:</label><input name="judetLiceu" class="form-control" value="'.getjudetLiceu($id_formular).'" />

                            <label class="marg-t10">Tara:</label><input name="taraLiceu" class="form-control" value="'.gettaraLiceu($id_formular).'" />

                            <label class="marg-t10">Profil/Domeniul:</label><input name="profilLiceu" class="form-control" value="'.getprofilLiceu($id_formular).'" />

                            <label class="marg-t10">Durata studiilor:</label><input name="durataStudiilorLiceu" class="form-control" value="'.getdurataStudiilorLiceu($id_formular).'" />

                            <label class="marg-t10">Anul absolvirii:</label><input name="anulAbsolviriiLiceu" class="form-control" value="'.getanulAbsolviriiLiceu($id_formular).'" />

                            <label class="marg-t10">Forma de invatamant (Zi/Seral/FR/ID):</label><input name="formaInvatamantLiceu" class="form-control" value="'.getformaInvatamantLiceu($id_formular).'" />

                            <div class="align-center">

                                <label class="marg-t10"> Diploma de bacalaureat</label><br>

                            </div>

                            <label class="marg-t10">Seria:</label><input name="serieDiplomaBac" class="form-control" value="'.getserieDiplomaBac($id_formular).'" />

                            <label class="marg-t10">Numarul:</label><input name="nrDiplomaBac" class="form-control" value="'.getnrDiplomaBac($id_formular).'" />

                            <label class="marg-t10">Emisa de:</label><input name="emisaDeLiceu" class="form-control" value="'.getemisaDeLiceu($id_formular).'" />

                            <label class="marg-t10">Data emitere:</label><input name="dataEmiteriiDiploma" class="form-control" value="'.getdataEmiteriiDiploma($id_formular).'" />

                            <label class="marg-t10">Numarul foii matricole care insoteste actul de studii:</label><input name="nrFoiiMatricole" class="form-control" value="'.getnrFoiiMatricole($id_formular).'" />
                                
                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Alte observații (pentru cazurile în care candidatul a absolvit studii anterioare în străinătate)

                            </span>

                        </div>

                            <label class="marg-t10"> Act de recunoastere/ echivalare (eliberat de DPIRP/CNRED):</label>

                            <label class="marg-t10">Nr:</label><input name="nrActRecEchiv" class="form-control" value="'.getnrActRecEchiv($id_formular).'" />

                            <label class="marg-t10">Serie:</label><input name="serieActRecEchiv" class="form-control" value="'.getserieActRecEchiv($id_formular).'" />
                            
                            <label class="marg-t10">Data echivalării:</label>

                            <div class="col-md-12" style="padding-left:0; padding-right:0;">

                                <input name="dataEchivDay" class="col-md-4 form-control marg-r1 wid33"  value=""/>

                                <input name="dataEchivMonth" class="col-md-4 form-control marg-r1 wid33"  value=""/>

                                <input name="dataEchivYear" class="col-md-4 form-control wid33" value=""/>

                            </div>
                            
                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Studiile universitare de licență absolvite

                            </span>

                        </div>
                            
                            <label class="marg-t10">Institutia unde a absolvit</label><input name="denumireInstitutieFac" class="form-control" value="'.getdenumireInstitutieFac($id_formular).'" />

                            <label class="marg-t10">Facultatea:</label><input name="denumireFac" class="form-control" value="'.getDenumireFacultate($id_formular).'" />

                            <label class="marg-t10">Domeniul de licenta:</label><input name="denumireDomeniuLicenta" class="form-control" value="'.getdenumireDomeniuLicenta($id_formular).'" />

                            <label class="marg-t10">Programul de studii/Specializarea:</label><input name="specializare" class="form-control" value="'.getspecializare($id_formular).'" />

                            <label class="marg-t10">Titlu obtinut:</label><input name="titluObtinut" class="form-control" value="'.gettitluObtinut($id_formular).'" />

                            <label class="marg-t10">Forma de invatamant (Zi/Seral/FR/ID):</label><input name="formaInvatamantFac" class="form-control" value="'.getformaInvatamantFac($id_formular).'" />
                            
                            <label class="marg-t10">Durata studiilor:</label><input name="durataStudii" class="form-control" value="'.getdurataStudii($id_formular).'" />

                            <label class="marg-t10">Numarul semestrelor finantate de la bugetul de stat</label><input name="nrSemBuget" class="form-control" value="'.getnrSemBuget($id_formular).'" />

                            <label class="marg-t10">Numarul semestrelor in care ati beneficiat de bursa:</label><input name="nrSemBursa" class="form-control" value="'.getnrSemBursa($id_formular).'" />

                            <label class="marg-t10">Localitate</label><input name="localitateFac" class="form-control" value="'.getlocalitateFac($id_formular).'" />

                            <label class="marg-t10">Judet:</label><input name="judetFac" class="form-control" value="'.getjudetFac($id_formular).'" />
                            
                            <label class="marg-t10">Tara:</label><input name="taraFac" class="form-control" value="'.gettaraFac($id_formular).'" />
                            
                            <div class="align-center">
                            
                                <label class="marg-t10"> Diploma de licenta</label><br>
                                
                            </div>

                            <label class="marg-t10">Seria:</label><input name="diploLicentaSerie" class="form-control" value="'.getdiploLicentaSerie($id_formular).'" />

                            <label class="marg-t10">Numarul:</label><input name="diploLicentaNr" class="form-control" value="'.getdiploLicentaNr($id_formular).'" />

                            <label class="marg-t10">Emisa de:</label><input name="diplEmisaDe" class="form-control" value="'.getdiplEmisaDe($id_formular).'" />

                            <label class="marg-t10">Data emitere:</label><input name="diplDataEmitere" class="form-control" value="'.getdiplDataEmitere($id_formular).'" />

                            <label class="marg-t10">Numarul foii matricole care insoteste actul de studii:</label><input name="nrFoaieMatricola" class="form-control" value="'.getnrFoaieMatricola($id_formular).'" />

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Alte observații (pentru caurile in care candidatul a absolvit studii anterioare in strainatate)

                            </span>
                        
                        </div>

                            <label class="marg-t10">Act de recunoaștere/ echivalare (eliberat de DPIRP/CNRED):</label>

                            <label class="marg-t10">Nr:</label><input name="nrActRecLicenta" class="form-control" value="'.getnrActRecLicenta($id_formular).'" />

                            <label class="marg-t10">Serie:</label><input name="serieActRecLicenta" class="form-control" value="'.getserieActRecLicenta($id_formular).'" />

                            <label class="marg-t10">Data echivalării:</label>

                            <div class="col-md-12" style="padding-left:0; padding-right:0;">

                                <input name="dataLicentaEchivDay" class="col-md-4 form-control marg-r1 wid33"  value=""/>

                                <input name="dataLicentaEchivMonth" class="col-md-4 form-control marg-r1 wid33"  value=""/>

                                <input name="dataLicentaEchivYear" class="col-md-4 form-control wid33" value=""/>

                            </div>

                    </div>

                </div>

                    <div class="col-md-6">
                     
                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                Studiile universitare de master in curs

                            </span>

                        </div>
                        
                        <div class="col-md-12" style="font-size:17px; margin-bottom:45px;">                    
                        
                            <label class="marg-t10">Student la master alta facultate/ universitate:</label><input name="inCursStudentAltaFac" class="form-control" value="'.getinCursStudentAltaFac($id_formular).'" />

                            <label class="marg-t10">Denumirea institutiei de invatamant superior:</label><input name="inCursDenumInstitutieMaster" class="form-control" value="'.getinCursDenumInstitutieMaster($id_formular).'" />

                            <label class="marg-t10">Facultatea:</label><input name="inCursDenumFacultateMaster" class="form-control" value="'.getinCursDenumFacultateMaster($id_formular).'" />

                            <label class="marg-t10">Domeniul de studii:</label><input name="inCursDenumDomeniuMaster" class="form-control" value="'.getinCursDenumDomeniuMaster($id_formular).'" />

                            <label class="marg-t10">Programul de studii/ Specializarea:</label><input name="inCursSpecializareMasterr" class="form-control" value="'.getinCursSpecializareMaster($id_formular).'" />
                            
                            <label class="marg-t10">Anul:</label><input name="inCursAnMaster" class="form-control" value="'.getinCursAnMaster($id_formular).'" />

                            <label class="marg-t10">Forma de invatamant:</label><input name="inCursFormaInvatMaster" class="form-control" value="'.getinCursFormaInvatMaster($id_formular).'" />

                            <label class="marg-t10">Numarul semestrelor finantate de la buget de stat:</label><input name="inCursNrSemBugetMaster" class="form-control" value="'.getinCursNrSemBugetMaster($id_formular).'" />

                            <label class="marg-t10">Numarul semestrelor in care ati beneficiat de bursa:</label><input name="inCursNrSemBursaMaster" class="form-control" value="'.getinCursNrSemBursaMaster($id_formular).'" />
                            
                            <label class="marg-t10">Localitate:</label><input name="inCursLocalitateMaster" class="form-control" value="'.getinCursLocalitateMaster($id_formular).'" />

                            <label class="marg-t10">Judetul:</label><input name="inCursJudetMaster" class="form-control" value="'.getinCursJudetMaster($id_formular).'" />
                            
                            <label class="marg-t10">Tara:</label><input name="inCursTaraMasterr" class="form-control" value="'.getinCursTaraMaster($id_formular).'" />
                            
                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Absolvent al studiilor de master

                            </span>

                        </div>

                            <label class="marg-t10">Anul absolvirii:</label><input name="absolventAn" class="form-control" value="'.getabsolventAn($id_formular).'" />

                            <label class="marg-t10">Denumirea institutiei de invatamant superior:</label><input name="absolventDenimireInstit" class="form-control" value="'.getabsolventDenimireInstit($id_formular).'" />

                            <label class="marg-t10">Facultatea:</label><input name="absolventDenumireFacult" class="form-control" value="'.getAbsolventDenumireFacult($id_formular).'" />

                            <label class="marg-t10">Domeniul de licenta:</label><input name="absolventDomeniu" class="form-control" value="'.getabsolventDomeniu($id_formular).'" />

                            <label class="marg-t10">Programul de studii/Specializarea</label><input name="absolventSpecializare" class="form-control" value="'.getabsolventSpecializare($id_formular).'" />
                            
                            <label class="marg-t10">Titlul obținut:</label><input name="titlulObtinut" class="form-control" value="" />

                            <label class="marg-t10">Forma de invatamant:</label><input name="absolventFormaInvat" class="form-control" value="'.getabsolventFormaInvat($id_formular).'" />

                            <label class="marg-t10">Numarul semestrelor finantate de la buget de stat:</label><input name="absolventNrSemBuget" class="form-control" value="'.getabsolventNrSemBuget($id_formular).'" />

                            <label class="marg-t10">Numarul semestrelor in care ati beneficiat de bursa:</label><input name="absolventNrSemBursa" class="form-control" value="'.getabsolventNrSemBursa($id_formular).'" />

                            <label class="marg-t10">Localitate:</label><input name="absolventLocalitate" class="form-control" value="'.getabsolventLocalitate($id_formular).'" />

                            <label class="marg-t10">Judetul:</label><input name="absolventJudet" class="form-control" value="'.getabsolventJudet($id_formular).'" />
                            
                            <label class="marg-t10">Tara:</label><input name="absolventTara" class="form-control" value="'.getabsolventTara($id_formular).'" />

                        <div class="align-center">
                            
                                <label class="marg-t10"> Diploma de master</label><br>
                                
                        </div>
                        
                            <label class="marg-t10">Are diplomă?</label><input name="areDiplomaMaster" class="form-control" value="" />

                            <label class="marg-t10">Seria</label><input name="absolventDiploSerie" class="form-control" value="'.getabsolventDiploSerie($id_formular).'" />

                            <label class="marg-t10">Numar</label><input name="absolventDiploNr" class="form-control" value="'.getabsolventDiploNr($id_formular).'" />

                            <label class="marg-t10">Emisa de</label><input name="absolventDiploEmisaDe" class="form-control" value="'.getabsolventDiploEmisaDe($id_formular).'" />

                            <label class="marg-t10">Data echivalării:</label>

                            <div class="col-md-12" style="padding-left:0; padding-right:0;">

                                <input name="dataMasterEchivDay" class="col-md-4 form-control marg-r1 wid33"  value=""/>

                                <input name="dataMasterEchivMonth" class="col-md-4 form-control marg-r1 wid33"  value=""/>

                                <input name="dataMasterEchivYear" class="col-md-4 form-control wid33" value=""/>

                            </div>

                            <label class="marg-t10">Numarul suplimentului/ foii matricole care insoteste actul de studii</label><input name="absolventNrFoaieMatricola" class="form-control" value="'.getabsolventNrFoaieMatricola($id_formular).'" />


                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Cerințe specifice facultății

                            </span>

                        </div>
                        
                            <label class="marg-t10">Media generala la examenul de licență</label><input name="medieExamenLicenta" class="form-control" value="'.getMedieExamenLicenta($id_formular).'"/>

                            <label class="marg-t10">Media E.C.T.S</label><input name="medieAdmitere" class="form-control" value="'.getMedieAdmitere($id_formular).'"/>

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Optiuni la admitere, in ordinea preferintelor

                            </span>

                        </div>

                            <label class="marg-t10">Optiunea 1:</label><input name="preferinta1" class="form-control" value="'.getPreferinta1($id_formular).'"/>

                            <label class="marg-t10">Optiunea 2:</label><input name="preferinta2" class="form-control" value="'.getPreferinta2($id_formular).'"/>

                            <label class="marg-t10">Optiunea 3:</label><input name="preferinta3" class="form-control" value="'.getPreferinta3($id_formular).'"/>

                            <label class="marg-t10">Optiunea 4:</label><input name="preferinta4" class="form-control" value="'.getPreferinta4($id_formular).'"/>

                            <label class="marg-t10">Optiunea 5:</label><input name="preferinta5" class="form-control" value="'.getPreferinta5($id_formular).'"/>

                            <label class="marg-t10">Optiunea 6:</label><input name="preferinta6" class="form-control" value="'.getPreferinta6($id_formular).'"/>

                            <label class="marg-t10">Optiunea 7:</label><input name="preferinta7" class="form-control" value="'.getPreferinta7($id_formular).'"/>

                            <label class="marg-t10">Optiunea 8:</label><input name="preferinta8" class="form-control" value="'.getPreferinta8($id_formular).'"/>

                            <label class="marg-t10">Optiunea 9:</label><input name="preferinta9" class="form-control" value="'.getPreferinta9($id_formular).'"/>

                            <label class="marg-t10">Optiunea 10:</label><input name="preferinta10" class="form-control" value="'.getPreferinta10($id_formular).'"/>

                            <label class="marg-t10">Optiunea 11:</label><input name="preferinta11" class="form-control" value="'.getPreferinta11($id_formular).'"/>

                            <label class="marg-t10">Acceptati sa fiti inmatriculat pe locurile cu taxa disponibile in cazul in care nu ati fost admis pe locurile finantate de la buget?</label><input name="optiuneAdmitereTaxa" class="form-control" value="'.getOptiuneAdmitereTaxa($id_formular).'"/>

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Informatii privind documentele de studii depuse la dosar

                            </span>

                        </div>

                            <label class="marg-t10">Diploma de bacalaureat</label><input name="diplomaBacOriginal" class="form-control" value="'.getDiplomaBacOriginal($id_formular).'"/>

                            <label class="marg-t10">Document echivalare studii preuniversitare</label><input name="docEchivPreunivOriginal" class="form-control" value="'.getdocEchivPreunivOriginal($id_formular).'"/>

                            <label class="marg-t10">Diploma licenta</label><input name="diplomaLicentaOriginal" class="form-control" value="'.getdiplomaLicentaOriginal($id_formular).'"/>

                            <label class="marg-t10">Participă la alte concursuri de admitere la studii universitare de master?</label><input name="participAltundeva" class="form-control" value="'.getparticipAltundeva($id_formular).'"/>

                            <label class="marg-t10">Universitate 1</label><input name="universitate1" class="form-control" value=""/>
                            
                            <label class="marg-t10">Facultate 1</label><input name="facultate1" class="form-control" value=""/>
                            
                            <label class="marg-t10">Universitate 2</label><input name="universitate2" class="form-control" value=""/>
                            
                            <label class="marg-t10">Facultate 2</label><input name="facultate2" class="form-control" value=""/>
                            
                            <label class="marg-t10">Universitate 3</label><input name="universitate3" class="form-control" value=""/>
                            
                            <label class="marg-t10">Facultate 3</label><input name="facultate3" class="form-control" value=""/>
                            
                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Chestionar privind alegerea dumneavoastră

                            </span>

                        </div>
                        
                            <label class="marg-t10">Alte surse:</label><input name="alteSurse" class="form-control" value=""/>
                    </div>

                </div>';
                       ?>
                            
            </div>

        </div>

    </div>

    </form>

            <form id="RespingereStudMaster" method="post" action="respingereFormularMaster.php" >
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


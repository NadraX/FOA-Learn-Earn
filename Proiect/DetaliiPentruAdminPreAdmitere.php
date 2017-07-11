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

        <li class="tog2"><a href="DespreFII.html">Despre FII</a></li>  

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

              
                    <button id="Validare" name="Submit" Value="Register" class="btn buton validare-btn wid100" type="submit" form="DetaliiStudPreadmitere">

                        <span  style="color:white;">Validare</span>

                    </button>
           
                
                
                    
                    <button id="Submit" name="Submit" Value="Register" class="btn buton validare-btn wid100" type="submit" form="RespingereStudPreadmitere">

                        <span  style="color:white;">Respingere</span>

                    </button>
                    
                    
             
                
                <form  method="post" action="pdf_preadmitere.php">
                    
                    <input type="hidden" name="id_formular" value="1">
                    
                    <button id="Submit" name="Submit" Value="Register" class="btn buton validare-btn wid100" type="submit">

                        <span  style="color:white;">Generare pdf</span>

                    </button>
                    
                    
                </form>
                

            </div>

        </div>





        <div class="col-md-9" style="border-left:1px solid #eee;">


            <form id="DetaliiStudPreadmitere" method="post" action="validareFormularPreAdmitere.php">


                <div class="col-md-12" style="text-align:center;">
                    <?php
                    include 'adminMainPagePreAdmitere.php';
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

                                <br>Taxa de &#238;nscriere

                            </span>

                        </div>
                        
                        <label class="marg-t10">Chitața nr.</label><input name="chitantaNr" class="form-control" value=""/>
                        
                        <label class="marg-t10">Suma</label><input name="suma" class="form-control" value=""/>
                        
                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Date personale ale candidatului cu cetăţenie română/ UE/ SEE

                            </span>

                        </div>

                        <div class="col-md-12" style="font-size:17px;">

                        <?php
                        error_reporting(E_ERROR);
                        error_reporting(0);
                        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
                        $id_formular=$_POST['id_formular'];



                        echo '<label>Numele de familie (din certificatul de naștere)</label><input name="numeDeFamilie" class="form-control" value="'.getNumeNastere($id_formular).'"/>
                        
                           <label class="marg-t10">Numele de familie actual (după căsătorie, înfiere, modificare la cerere conform actului doveditor, dacă este cazul)</label><input name="numeDeFamilieActual" class="form-control" value="'.getNumeActual($id_formular).'"/>

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
                            <label class="marg-t10">Cetățenie: </label><input name="cetatenie" class="form-control" value="'.getCetatenie($id_formular).'" />

                            <label class="marg-t10">Naționalitate: </label><input name="nationalitate" class="form-control" value="'.getNationalitate($id_formular).'" />

                            <label class="marg-t10">Etnie: </label><input name="etnie" class="form-control" value="'.getEtnie($id_formular).'" />

                            <label class="marg-t10">Limba matern&#259;: </label><input name="limbaMaterna" class="form-control" value="'.getLimbaMaterna($id_formular).'" />

                                             

                            
                             

                        


                        </div>

                    </div>

                    <div class="col-md-6">
                    
                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Adresa candidatului

                            </span>

                         </div>

                                <label class="marg-t10">Țară: </label><input name="tara" class="form-control" value="'.getTaraNastere($id_formular).'"/>

                                <label class="marg-t10">Jude&#355;:</label><input name="judet" class="form-control" value="'.getJudetNastere($id_formular).'"/>

                                <label class="marg-t10">Localitate: </label><input name="localitate" class="form-control" value="'.getLocalitateNastere($id_formular).'"/>

                        <div class="align-center">

                            <span class="col-md-12 sub-title">

                                <br>Date act de identitate

                            </span>

                        </div>
                            <div class="col-md-12" style="font-size:17px; margin-bottom:45px;">
                            
                            <label>Tip act:</label><input name="tipAct" class="form-control" value="" />
                        
                            <label>CNP:</label><input name="cnp" class="form-control" value="'.getCNP($id_formular).'" />


                            <label class="marg-t10">Serie Buletin: </label><input name="serieBuletin" class="form-control" value="'.getSerieBuletin($id_formular).'" />

                            <label class="marg-t10">Num&#259;r Buletin: </label><input name="nrBuletin" class="form-control" value="'.getNumarBuletin($id_formular).'" />

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

                                <br>Studiile pre-universitare unde sunteti inmatriculat

                            </span>

                            </div>

                                <label class="marg-t10">Liceul de provenien&#355;&#259;</label><input name="liceuNume" class="form-control" value="'.getNumeLiceu($id_formular).'" />

                                <label class="marg-t10">Țară: </label><input name="taraLiceu" class="form-control" value="'.getTaraLiceu($id_formular).'"/>

                                <label class="marg-t10">Jude&#355;:</label><input name="judetLiceu" class="form-control" value="'.getJudetLiceu($id_formular).'"/>

                                <label class="marg-t10">Localitate: </label><input name="localitateLiceu" class="form-control" value="'.getLocalitateLiceu($id_formular).'"/>

                                <label class="marg-t10">Vrea s&#259; sus&#355;in&#259; testul la: </label><input name="proba" class="form-control" value="'.getMaterieTest($id_formular).'"/>


                                
                            </div>

                        </div> '
                        ?>


                
            </div>

        </div>


    </div>
            </form>

            <form id="RespingereStudPreadmitere" method="post" action="respingereFormularPreAdmitere.php" >
                <?php

                $id_formular=$_POST['id_formular'];
                echo ' <input type="hidden" name="idFormular" value="'.$id_formular.'"/> ';
                ?>

            </form>

    <footer class="footer-distributed">



            <div class="footer-left">

                <h3 class="headernou2">Admitere <span> FII</span></h3>

                <p class="footer-links">

                    <a href="DespreFII.html">Despre Fii</a>

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

                    <div id="bloc2"><p>&nbsp;&nbsp;Strada General Henri Mathias Barthelot 16</p>

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

            <!--</hr>-->

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
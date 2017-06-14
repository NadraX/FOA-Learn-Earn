<?php

    include 'updateBDMaster.php';

    $v_idFormular=$_POST["idFormular"];

    respingere($v_idFormular);

    header('Location: administrator.php?deleted=1');




?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <form method="POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        1. Mdie Bac (6 - 10): <input type="text" name="medie_bac" value = '<?php echo htmlspecialchars($medie_bac) ?>'> <br>
        <span class = 'error_bac' value = '<?php echo $medie_bac_err ?>'></span>
        2. Nota Matematica (1 - 10): <input type="text" name="nota_mate"> <br>
        3. Nota proba alegere (1 - 10): <input type="text" name="proba_alegere"> <br>
        4. Nota concurs (1 - 10): <input type="text" name="concurs"> <br>
        <input type="submit" name="Submit" value="Validare">
    </form>
</body>
</html>
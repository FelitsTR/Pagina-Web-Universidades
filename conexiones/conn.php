<?php
$con=mysql_connect("35.184.11.1","ErickUpqroo","Upqroo2020_E1", "feria_universitaria");
    if(!$con)
    {
        die("Nu se poate face conexiunea la baza de date" . mysql_error());
    }
    ?>
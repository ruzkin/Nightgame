<?php
$Error_cislo_lampy = " ";
?>
<!DOCTYPE html>
<html lang="cs">
<style>

    h1
    {
        font-size: 30px;
    }

    .grid-container {
        display: grid;
            grid-template-columns: 120px auto auto ;
            gap: 0px;

    }

    .grid-container > div {

    }

    .item2 {
        grid-column: 2/ 4;
    }

    .item4
    {
        grid-column: 2 / 4;

    }

#formular
{
 margin-top: 20px;
    margin-left: 30%;
}

    /* Popup container */
    .popup {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }

    /* The actual popup (appears on top) */
    .popup .popuptext {
        visibility: hidden;
        width: 160px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 8px 0;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -80px;
    }

footer
{
    margin-left: 60%;
}

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author = "Stepan Ruzek">
    <meta version = 1.2.>
</head>
<body>
<header>

    <div class="grid-container">
        <div class="item1">
            <img src="logo_Stary_Vestec.jpg" alt ="logo_Stary_Vestec" width="100" height="100">
        </div>
        <div class="item2">
            <h1>SDH Starý Vestec</h1>
        </div>

        <div class="item4">
            <h2>Noční bojovka</h2>
        </div>




</header>

<nav>
</nav>
 <section>
     <form method="post" id="formular">
         <label for="fname" ><?php echo  $Error_cislo_lampy?> Číslo nápovědy:</label><br>
         <input type="text" name="cislo_lampy" value="" required ><br>
         <input type="submit" value="Zadat">
     </form>


     <?php

                 /*PHP database part*/

     include_once "connection.php"; /*Connection database*/

     if ($_SERVER["REQUEST_METHOD"] == "POST")
     {

         if (empty($_POST["cislo_lampy"]))
         {
             $Error_cislo_lampy = "Povinný údaj";
         }

         else
         {
             $cislo_lampy = $_POST["cislo_lampy"];

            /* SQL request*/
             $sql = "SELECT Popis FROM Lampa WHERE Cislo_Lampy = $cislo_lampy";
             $result =  mysqli_query($conn,"$sql");

             /*SQL results to html*/
             foreach ($result as $u)
             {
                 echo  '<tr>';
                 echo '<td>' . htmlspecialchars($u['Popis']) . '</td>';
             }
             '</tr>';
         }
     }

     ?>
 </section>

<footer>
</footer>
</body>
<script>
</script>
</html>

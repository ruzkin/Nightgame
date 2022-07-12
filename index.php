<?php
$Error_cislo_lampy = " ";
?>
<!DOCTYPE html>
<html lang="cs">
<style>
h1, h2
{
    border: black solid 1px;
    text-align: center;
}

#formular
{
 margin-left: 30%;
}

td
{
    margin-left: 30%;
}

footer
{
    margin-left: 60%;
}

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
    <h1>Noční bojovka</h1>
    <h2>SDH Starý Vestec
        <img src="logo_Stary_Vestec.jpg" alt ="logo_Stary_Vestec" width="50" height="50">
    </h2>


</header>

<nav>
</nav>
 <section>
     <form method="post" id="formular">
         <label for="fname" ><?php echo  $Error_cislo_lampy?> Číslo nápovědy:</label><br>
         <input type="text" name="cislo_lampy" value="" ><br>
         <input type="submit" value="Zadat">
     </form>
<br>
     <br>
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

             /*SQL request*/
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
<br>
    <br>
    <br>

</footer>
</body>
<script>
</script>
</html>

<!--HTML OSA ALKAA-->

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Anna Palautetta</title>
    <link rel="stylesheet" href="style.css" rel="stylesheet"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!--HTML OSA LOPPUU-->
<body>

<!--Valikon teko alkaa-->
<nav class="norminav" id="munpudotus">
    <ul>
        <li><a href="./index.html">Koti</a></li>
        <li><a href="./yhteystiedot.html">Yhteystiedot</a></li>
        <li><a href="./palaute_lomake.php"class="active">Anna palautetta sivustosta</a></li>
    </ul> 
    <div class="menu">
      <button onclick="showMenu()" class="menuBtn">Aseet</button>
      <div id="menuId" class="menuContent">
        <a href="./ct_aseet.html">CT-Aseet</a>
        <a href="./t_aseet.html">T-Aseet</a>
        <a href="./yhteiset_aseet.html">Yhteiset Aseet</a>
      </div>
    </div><br><br><br>
    <div class="menu2">
      <button onclick="showMenu2()" class="menuBtn2">Kartat</button>
      <div id="menuId2" class="menuContent2">
        <a href="mapitNET.html">Competitive</a>
        <a href="HosMapit.html">Hostage</a>
        <a href="ResMapit.html">Erikoiset</a>
      </div>
  </div><br><br><br>
  <div class="menu3">
  <button onclick="showMenu3()" class="menuBtn3">Muut ostettavat</button>
  <div id="menuId3" class="menuContent3">
    <a href="./kranaatit.html">Kranaatit</a>
    <a href="./varusteet.html">Varusteet</a>
    <a href="./puukot.html">Puukot</a>
  </div>
</div>
</nav>

<!--VALIKON TEKO LOPPUU-->

<!--DROPDOWN SCRIPTI-->

<script>
  function showMenu() {
    document.getElementById("menuId").classList.toggle("show");
  }
</script>

<!--SCRIPTIN LOPPU-->
<!--DROPDOWN SCRIPTI-->

<script>
  function showMenu2() {
    document.getElementById("menuId2").classList.toggle("show2");
  }
</script>

<!--SCRIPTIN LOPPU-->
<!--DROPDOWN SCRIPTI-->

<script>
  function showMenu3() {
    document.getElementById("menuId3").classList.toggle("show3");
  }
</script>

<!--SCRIPTIN LOPPU-->


<!--LOMAKE-->
<section class="pöytä">
<h1>Palaute osio</h1>
  <h2 class="lomaketyyli">
  <form class="lomake" action="connection.php" method="post">
      <table cellpadding="8" cellspacing="8">           
        
        <input type ="text" name ="aihe" placeholder="Aihe" required><br><br>

  
        <input type="text" name="palaute"placeholder="Palaute tähän"required><br><br>

       
        <input type="text" name="nimi"placeholder="Nimesi" required><br><br>

    
        <input type="email" name="sähköposti"placeholder="Sähköpostiosoitteesi" required><br><br>

        <input type="submit" value="Lähetä palaute">
  </form>
<section>
<?php
require "connection.php";

if(isset($_POST["aihe"],$_POST["palaute"],$_POST["nimi"],$_POST["sähköposti"]))  {

  $aihe = $_POST["aihe"];
  $palaute = $_POST["palaute"];
  $nimi = $_POST["nimi"];
  $sähköposti = $_POST["sähköposti"];

  $sql = "INSERT INTO palautesql(aihe, palaute, nimi, sähköposti) VALUES (?,?,?,?)";
          
  $stm = $pdo->prepare($sql);
          
  if($stm->execute(array($aihe,$palaute,$nimi,$sähköposti))) 
    echo "Palaute on lähetetty, id on ". $pdo->lastInsertId();
 
  
  
} else {
  echo "oot noob";
}

?>
</body>
</html>

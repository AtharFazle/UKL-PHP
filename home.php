<?php 
    include "header.php";
?>

<h2 style="padding-top: 2rem; padding-left: 65%; font-size: 40px;">WELCOME :)</h2>
<h3 style="padding-top: 2rem; padding-left: 70%;"> <?=$_SESSION['nama']?></h3>

<h3 style="padding-left: 70%;">id: <?=$_SESSION['id'] ?></h3>
<h3 style="padding-left: 70%;">role: <?=$_SESSION['role'] ?></h3>


<?php
    include "footer.php";
?>
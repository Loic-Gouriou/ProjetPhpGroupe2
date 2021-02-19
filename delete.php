<?php

session_start();


require_once('php/config.php');

if(!empty($_GET["id"])) {
    $id = $_GET['id'];
    $userId = $_SESSION["users_id"];
    
    $queryD = $db->prepare("DELETE FROM `Commande` WHERE users_id = $userId AND commande_id = $id");
    $queryD->execute();
    echo'
    <script>
        document.location.href = "cart.php";
    </script>'
    ?>

    

    <?php

} else {

    ?>

    <script>
        document.location.href = "index.php";
    </script>

    <?php

}
?>
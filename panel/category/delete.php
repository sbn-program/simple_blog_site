<?php
    require_once '../../functions/helper.php';
    require_once '../../functions/pdo_connection.php';

    if (isset($_GET['cat_id']) && $_GET['cat_id'] !== "") {
        $query = "DELETE FROM `categories` WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$_GET['cat_id']]);
        redirect('panel/category');
    }

?>

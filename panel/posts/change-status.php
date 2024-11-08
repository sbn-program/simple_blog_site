<?php
    require_once '../../functions/helper.php';
    require_once '../../functions/pdo_connection.php';

    if (isset($_GET['post_id'])) {

        $query = "SELECT * FROM `posts` WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$_GET['post_id']]);
        $post = $statement->fetch();

        if ($post !== false) {
            $status = ($post->post_status == 10) ? 0 : 10;
            $query = "UPDATE `posts` SET post_status = ? WHERE id = ?";
            $statement = $pdo->prepare($query);
            $statement->execute([$status, $_GET['post_id']]);
        }

        redirect('panel/posts');
    }
    redirect('panel/posts');

?>
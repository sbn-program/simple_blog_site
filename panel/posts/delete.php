<?php
    require_once '../../functions/helper.php';
    require_once '../../functions/pdo_connection.php';


    if (isset($_GET['post_id']) && $_GET['post_id'] !== "") {
        $query = "SELECT * FROM `posts` WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$_GET['post_id']]);
        $post = $statement->fetch();

        $base_path = dirname(dirname(__DIR__));

        if(file_exists($base_path . $post->image_src)){
            unlink($base_path . $post->image_src);
        }

        $query = "DELETE FROM `posts` WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$_GET['post_id']]);
        redirect('panel/posts');
    }
    redirect('panel/posts');

?>
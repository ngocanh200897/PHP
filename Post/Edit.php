<?php
include 'post.php';
$post = new post();
 $i = $_POST['id'];
     $tt = $_POST['tt'];
     $nd = $_POST['nd'];
    if ($post->edit($i, $tt, $nd) === TRUE) {
        echo "Sửa liệu thành công";
        header('Location: index.php');
    } else {
        echo "Lỗi";
        header('Location: update.php?error=1');
    }


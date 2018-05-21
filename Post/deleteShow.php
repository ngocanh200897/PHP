<?php
include 'post.php';
$post = new post();
 $i = $_POST['id'];
    if ($post->delete($i) === TRUE) {
        echo "Xóa thành công";
        header('Location: index.php');
    } else {
        echo "Lỗi";
    }


<?php
include 'post.php';
$id = "";
$tieude = "";
$noidung = "";
$td = "";
$nameErr = "";
$post = new post();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST["tt"])) { 
	$tt = $_POST['tt']; 
    }
    if(!empty($_POST["nd"])) 
    {
        $nd = $_POST['nd'];
    }

    if ($post->add($tt, $nd) === TRUE) {
        echo "Thêm dữ liệu thành công";
         header('Location: index.php');
    } else {
        echo "Lỗi";
    }
}
?>

<form action="" method="post">
    <table>
        <tr>
            <th>Tiêu Đề</th>
            <td><input type="text" name="tt" value=""></td>
        </tr>

        <tr>
            <th>Nội Dung</th>
            <td><input type="text" name="nd" value=""></td>
        </tr>

    </table>
    <button type="submit">Thêm</button>
</form>
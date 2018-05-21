<?php
include 'post.php';
$id = "";
$tieude = "";
$noidung = "";
$post = new post();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["id"])) { $id = $_POST['id']; }
    if(isset($_POST["tt"])) { $tt = $_POST['tt']; }
    if(isset($_POST["nd"])) { $nd = $_POST['nd']; }

    if ($post->add($id, $tt, $nd) === TRUE) {
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
            <th>ID</th>
            <td><input type="text" name="id" value=""></td>
        </tr>

        <tr>
            <th>Tiêu Đề</th>
            <td><input type="text" name="tt" value=""></td>
        </tr>

        <tr>
            <th>Nội Dung</th>
            <td><input type="text" name="nd" value=""></td>
        </tr>

    </table>
    <button type="submit">Gửi</button>
</form>
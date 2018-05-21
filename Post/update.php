<?php
include 'post.php';
$id = "";
$tieude = "";
$noidung = "";
$post = new post();
//sua
     
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $ket_qua = $post->editID($id);
     while ($row = $ket_qua->fetch_array(MYSQLI_NUM))
    {
        $tieude = $row[1];
        $noidung = $row[2];
?>
<form action="Edit.php" method="post">
    <table>
        <tr>
            <th>ID</th>
            <td><input type="text" name="id" value="<?php echo $id; ?>"></td>
        </tr>

        <tr>
            <th>Tiêu Đề</th>
            <td><input type="text" name="tt" value="<?php echo  $tieude; ?>"></td>
        </tr>

        <tr>
            <th>Nội Dung</th>
            <td><input type="text" name="nd" value="<?php echo  $noidung; ?>"></td>
        </tr>

    </table>
    <button type="submit">Gửi</button>
</form>
<?php
}
}
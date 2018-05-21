<?php 
include ('post.php');
$post = new post();
$rows = $post->select();

echo'<html>
    <head>
    <style type="text/css">
        table{
            border-collapse: collapse;
        }
        table, th, td{
            border:1px solid black;
        }
    </style>
</head>
        <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu Đề</th>
                <th>Nội Dung</th>
                <th>Thêm</th>
                <th>Cập Nhật</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>';
    foreach($rows as $row)
    {
            echo '<tr>
                <td>'. $row['id'] .'</td>;
                <td>'. $row['tieude'] .'</td>;
                <td>'. $row['noidung'] .'</td>;
                <td><a href="insert.php">Thêm</a></td>;
                <td><a href="update.php?id='.$row['id'].'">Sửa</a></td>;
                <td><a href="delete.php?id='.$row['id'].'">Xóa</a></td>;
            </tr>';
    }
      echo'</tbody>
    </table>
    </html>';
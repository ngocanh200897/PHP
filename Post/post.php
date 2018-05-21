<?php
include ('db.php');
class post extends db {
    //truy van du lieu
    public function select()
    {
        $sql = 'select * from post';
        $items = array();
        $posts = $this->query($sql);
        while($row = mysqli_fetch_assoc($posts))
        {
            $items[] = $row;
        }
        return $items;
    }
    //thêm
    public function  add($tt,$nd)
    {
        $sql = "INSERT INTO
			post(tieude, noidung)
			VALUES ('$tt', '$nd')";
        $result = $this->query($sql);

	return $result;
    }
     public function  edit($id,$tt,$nd)
    {
       $sql = "UPDATE post SET
			tieude = '$tt',
			noidung = '$nd'
			WHERE id=$id";
        $result = $this->query($sql);

	return $result;
    }
    public function  editID($id)
    {
       $sql = "SELECT * FROM post WHERE id=$id";
        $result = $this->query($sql);

	return $result;
    }
    public function delete($id)
    {
       $sql = "delete from post where id=$id";
        $result = $this->query($sql);

	return $result;
    }
    
}

<?php
include_once 'Dao.php';

class CrudController
{

    /* Fetch All */
    public function readData()
    {
        try {
            
            $dao = new Dao();
            
            $conn = $dao->openConnection();
            
            $sql = "SELECT id,title,description, url, category FROM `tb_links` ORDER BY id DESC";
            
            $resource = $conn->query($sql);
            
            $result = $resource->fetchAll(PDO::FETCH_ASSOC);
            
            $dao->closeConnection();
        } catch (PDOException $e) {
            
            echo "There is some problem in connection: " . $e->getMessage();
        }
        if (! empty($result)) {
            return $result;
        }
    }

    /* Fetch Single Record by Id */
    public function readSingle($id)
    {
        try {
            
            $dao = new Dao();
            
            $conn = $dao->openConnection();
            
            $sql = "SELECT id,title,description, url, category FROM `tb_links` WHERE id=" . $id . " ORDER BY id DESC";
            
            $resource = $conn->query($sql);
            
            $result = $resource->fetchAll(PDO::FETCH_ASSOC);
            
            $dao->closeConnection();
        } catch (PDOException $e) {
            
            echo "There is some problem in connection: " . $e->getMessage();
        }
        if (! empty($result)) {
            return $result;
        }
    }

    /* Add New Record */
    public function add($formArray)
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $category = $_POST['category'];
        
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "INSERT INTO `tb_links`(`title`, `description`, `url`, `category`) VALUES ('" . $title . "','" . $description . "','" . $url . "','" . $category . "')";
        $conn->query($sql);
        $dao->closeConnection();
    }

    /* Edit a Record */
    public function edit($formArray)
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $category = $_POST['category'];
        
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "UPDATE tb_links SET title = '" . $title . "' , description='" . $description . "', url='" . $url . "', category='" . $category . "' WHERE id=" . $id;
        
        $conn->query($sql);
        $dao->closeConnection();
    }

    /* Delete a Record */
    public function delete($id)
    {
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "DELETE FROM `tb_links` where id='$id'";
        
        $conn->query($sql);
        $dao->closeConnection();
    }
}

?>
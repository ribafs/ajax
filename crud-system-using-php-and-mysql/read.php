<?php
    include_once 'CrudController.php';
    $crudcontroller = new CrudController();
    switch($_POST["type"]) {
    
        case "single":
            
            if(isset($_POST["id"])) {
                $result = $crudcontroller->readSingle($_POST["id"]);
                if(!empty($result)) {
                    $responseArray["title"] = $result[0]["title"];
                    $responseArray["description"] = $result[0]["description"];
                    $responseArray["url"] = $result[0]["url"];
                    $responseArray["category"] = $result[0]["category"];
                    echo json_encode($responseArray);
                }
            }
            break;
        case "all":
            $result = $crudcontroller->readData();
            require_once "list.php";
            break;
            
        default:
            break;
    }

?>
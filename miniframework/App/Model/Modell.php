<?php

namespace miniframework\App\Model;
use miniframework\App\Config\Database;
class Modell extends Database
{
    public function all()
    {
        $statement = self::$conn->prepare("select * from tb_profile");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
}


try{
    $db = new Modell();
    $db->all();


}catch(\Throwable $th){
    echo $th;
}
?>
<?php
require './connect.php';
class TodoModel extends Connect{
 
    protected function add($todo)
    {
            $date = date('y-m-d H-m-sa');
            $sql = 'insert into todo(id,name,creatDate) values(?,?,?)';
            $statement = $this->print()->prepare($sql);
            $statement->bindParam(':todo', $name);
            $statement->bindParam(':date', $date);
            
            // insert a row
            $name = "John";
            return $statement->execute(['name'=>$name,'date: ' => $date]);
            

    }
}
?>
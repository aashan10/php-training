
<?php
require './todoModel.php';
class todoControl extends TodoModel
{
    public function addI($todo)
    {
        return $this->add($todo);
    }

}

  
?>
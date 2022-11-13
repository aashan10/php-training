<?php
class One
{
    public $user;
    public $id;
}  
$one = new One();
$one->user = 'ABC';
$one->id = 12;


class Two{
    public $arr =[];
    public function add($x)
    {
       return $this->arr[]=$x;
    }
}
$two =new Two();
print_r($two->add($one));

  ?>
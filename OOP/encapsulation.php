<?php

class Bid 
{
    private $minimum = 5;
    private $bidAmount;

    public function set($x)
    {
        if($x < $this->minimum)
        {
            $this->bidAmount = $this->minimum;
            return;
        }
             $this->bidAmount = $x;
    }
    public function get()
    {
        return $this->bidAmount;
    }
}
$bid = new Bid();
echo $bid->set(6);
echo $bid->get();

?>
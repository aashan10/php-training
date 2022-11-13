<?php
 class Reserve{
    private $host='Host class';
    private $guest='Guest class';

    public function cancel()
    {
        $this->sendCancel();
        $this->refund();

    }
    private function sendCancel()
    {
        echo "Sending Notification to " . $this->host . "<br>";
    }
    private function refund()
    {
        echo "Refunding " . $this->guest ."<br>";
    }
 }
 $reserve = new Reserve();
 $reserve->cancel();
?>
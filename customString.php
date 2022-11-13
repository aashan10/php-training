<?php
declare(strict_types=1);

// string reverse
// upper
class customString
{
    protected string $str1;
    public function __construct(string $x)
    {
        $this->str1 = $x;
    }
    public function rev()
    {
        echo "Reversed = " .strrev( $this->str1);
    }
    public function toUp()
    {
        echo "To Upper = " .strtoupper( $this->str1);
    }
    public function toLow()
    {
        echo "To lower = " .strtolower( $this->str1);
    }
    // public function toCat()
    // {
    //     echo "Concatation = " . ;
    // }
    public function toTrim()
    {
        echo "Trimmed = " . trim($this->str1);
    }
}
$example = new customString(" hello world ");
$example->rev();
$example->toUp();
$example->toLow();
$example->toTrim();


?>
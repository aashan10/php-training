<?php
class User{
    private $name, $followers;
    public function setName($x)
    {
        $this->name = $x;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setFollow($x)
    {
        $this->followers = $x;
    }
    public function getFollow()
    {
        return $this->followers;
    }
}
$user = new User();
$user->setName('Leah');
$user->setFollow('30.5k');
echo $user->getName();
echo $user->getFollow();

?>
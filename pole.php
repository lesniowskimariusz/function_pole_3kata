<?php
  class Trojkat
  {
    public $podstawa;
    public $wysokosc;
    
    public function __construct()
    {
      if ($podstawa = rind(1, 10))
      {
        $this->podstawa = $podstawa;
      }
      if ($wysokosc = rind(1, 10))
      {
        $this->wysokosc = $wysokosc;
      }
    }
    public function Pole_3kata($figura)
    {
      $this->pole = 0.5 * $figura->podstawa * $figura->wysokosc;
    }
  }
$trojkat_1 = new Trojkat;
$trojkat_2 = new Trojkat;

echo "1) Trojkat 1: podstawa = ".$trojkat_1->podstawa.", wysokosc = ".$trojkat_1->wysokosc;
echo "<br>";
echo "2) Trojkat 2: podstawa = ".$trojkat_2->podstawa.", wysokosc = ".$trojkat_2->wysokosc;
echo "<br>";
$pole_1 = Pole($trojkat_1);
$pole_2 = Pole($trojkat_2);
?>

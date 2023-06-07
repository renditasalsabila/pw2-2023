<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
class Calculator {

  private $x, $y;

  public function __construct($x, $y) {
      $this->x = $x;
      $this->y = $y;
  }

  public function pertambahan() {
      return $this->x + $this->y;
  }

  public function pengurangan() {
      return $this->x - $this->y;
  }

  public function pembagian() {
      return $this->x / $this->y;
  }

  public function perkalian() {
      return $this->x * $this->y;
  }
}

// membuat objek dan memanggil method
$calculator = new Calculator(10, 5);

echo "Hasil Pertambahan: ".$calculator->pertambahan()."<br>";
echo "Hasil Pengurangan: ".$calculator->pengurangan()."<br>";
echo "Hasil Pembagian: ".$calculator->pembagian()."<br>";
echo "Hasil Perkalian: ".$calculator->perkalian()."<br>";

?>
<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		// Memanggil file class_balok.php
		require_once 'simple_class_balok.php';

		// Membuat objek pertama dengan nilai default
		$balok1 = new Balok();
		echo "Objek pertama: <br>";
		echo "Luas: " . $balok1->getLuas() . "<br>";
		echo "Keliling: " . $balok1->getKeliling() . "<br>";
		echo "Volume: " . $balok1->getVolume() . "<br><br>";

		// Membuat objek kedua dengan nilai yang diberikan
		$balok2 = new Balok(29, 16, 7);
		echo "Objek kedua: <br>";
		echo "Luas: " . $balok2->getLuas() . "<br>";
		echo "Keliling: " . $balok2->getKeliling() . "<br>";
		echo "Volume: " . $balok2->getVolume() . "<br><br>";

		// Membuat objek kedua dengan nilai yang diberikan
		$balok3 = new Balok(7, 16, 29);
		echo "Objek ketiga: <br>";
		echo "Luas: " . $balok3->getLuas() . "<br>";
		echo "Keliling: " . $balok3->getKeliling() . "<br>";
		echo "Volume: " . $balok3->getVolume() . "<br><br>";

		// Membuat objek kedua dengan nilai yang diberikan
		$balok4 = new Balok(16, 7, 16);
		echo "Objek keempat: <br>";
		echo "Luas: " . $balok4->getLuas() . "<br>";
		echo "Keliling: " . $balok4->getKeliling() . "<br>";
		echo "Volume: " . $balok4->getVolume() . "<br><br>";

?>
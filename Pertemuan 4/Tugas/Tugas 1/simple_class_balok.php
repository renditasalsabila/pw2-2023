<?php
		/**
		 * Task 1
		 * Buatlah class balok yang memiliki:
		 * 1. Private property panjang, lebar dan tinggi
		 * 2. Method __construct, getLuas, getKeliling dan getVolume
		 */ 

    class Balok {
        private $panjang;
        private $lebar;
        private $tinggi;
    
        // Method __construct untuk menginisialisasi properti dengan nilai yang diberikan
        public function __construct($p = 1, $l = 1, $t = 1) {
		        $this->panjang = $p;
            $this->lebar = $l;
            $this->tinggi = $t;
        }
    
        // Method getLuas untuk menghitung luas permukaan balok dengan rumus: 2 (pl + pt + lt)
        public function getLuas() {
					  return 2 * ($this->panjang * $this->lebar + $this->panjang * $this->tinggi + $this->lebar * $this->tinggi);
				}
    
        // Method getKeliling untuk menghitung keliling balok dengan rumus: 4 (p + l + t)
        public function getKeliling() {
            return 4 * ($this->panjang + $this->lebar + $this->tinggi);
        }
    
        // Method getVolume untuk menghitung volume balok dengan rumus: p x l x t
        public function getVolume() {
            return $this->panjang * $this->lebar * $this->tinggi;
        }
    }
?>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About

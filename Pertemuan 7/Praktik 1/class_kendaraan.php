<?php

    class Kendaraan {
        protected $tipe;
        protected $fuel;

        protected function __construct($type, $fuel)
        {
            $this->tipe = $type;
            $this->fuel = $fuel;
        }
    }
     
    protected function getInfo()
    {
        echo "Jenis Kendaraan: " . $this->tipe . "<br>";
        echo "Bahan Bakar: " . $this->fuel . "<br>";
    }
    class Motor extends Kendaraan {
        public $roda;

        public function __construct($type,$fuel,$roda)
        {
            parent::__construct($type, $fuel);
            $this->roda = $roda;
        }
    }

    class Submarine extends Kendaraan {
        protected $max_depth;
    }

?>
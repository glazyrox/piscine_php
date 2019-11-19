<?
    class NightsWatch {
        public $timadaunov = array();
        public function recruit ($name)
        {
            if (in_array("IFighter", class_implements($name)))
                $this->timadaunov[] = $name;
        }
        public function fight() {
            foreach($this->timadaunov as $dota)
                $dota->fight();
        }
    }
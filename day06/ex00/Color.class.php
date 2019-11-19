<?
    class Color
    {
        public $red;
        public $green;
        public $blue;
        static $verbose = false;

        function __construct (array $massiv) {
            if (isset($massiv["rgb"]))
            {
                $color = intval($massiv["rgb"], 10);
                $this->red =  $color / 65281 % 256;
                $this->green = $color / 256 % 256;;
                $this->blue = $color % 256;
            }
            else if (isset($massiv["red"]) && isset($massiv["green"]) && isset($massiv["blue"]))
            {
                $this->red = intval($massiv["red"], 10);
                $this->green = intval($massiv["green"], 10);
                $this->blue = intval($massiv["blue"], 10);
            }
            if (Self::$verbose)
                printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
        }

        function __destruct () {
            if (Self:: $verbose == true)
            {
                printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
            }
        }

        function __toString () {
            return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )", array($this->red, $this->green, $this->blue)));
        }

        public static function doc()
        {
            $read = fopen("Color.doc.txt", 'r');
            echo "\n";
            while ($read && !feof($read))
                echo fgets($read);
            echo "\n";
        }

        function add ($Color) {
            return (new Color(array('red' => $this->red + $Color->red, 'green' => $this->green + $Color->green, 'blue' => $this->blue + $Color->blue)));
        }

        function sub ($Color) {
            return (new Color(array('red' => $this->red - $Color->red, 'green' => $this->green - $Color->green, 'blue' => $this->blue - $Color->blue)));
        }
        function mult ($mult) {
            return (new Color(array('red' => $this->red * $mult, 'green' => $this->green * $mult, 'blue' => $this->blue * $mult)));

        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Naturreservatet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src=""></script>
</head>
<body>
    <!-- <div id="main">
        <img src="/images/tiger.jpg" onclick='alert("grrr!")';>
        <img src="/images/apa.jpg" onclick='alert("apa!")';>
        <img src="/images/giraff.jpg" onclick='alert("giraff!")';>
        <img src="/images/kokos.jpg" onclick='alert("nöt!")';>
    </div> -->

<?php
    class Inhabitant {

        public $image = "tiger.jpg";

    }
    class Animal extends inhabitant {
        
        public $name;
        public function draw() {
            echo "<img src=\"/images/".$this -> image."\" onclick='alert(\"grrr!\")';>";
        }
    }

    class Plant extends inhabitant {
        
        public $name;
        public function draw() {
            echo "<img src=\"/images/".$this -> image."\" onclick='alert(\"grrr!\")';>";
        }
    }

    class Giraff extends Animal {
        public $image = "giraff.jpg";

    }

    class Apa extends Animal {
        public $image = "apa.jpg";

    }

    class Tiger extends Animal {
        public $image = "tiger.jpg";

    }

    class Kokos extends Plant {
        public $image = "kokos.jpg";

    }


    $giraffen = new Giraff();
    $giraffen -> draw();


?>

</body>
</html>

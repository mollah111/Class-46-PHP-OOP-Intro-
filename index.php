
<?php

    Class Car{
        
        public function color (){
            echo 'red';
        }

        public function engine (){
            echo '4000cc';
        }

        public function model (){
            echo 'B152024';
        }
    }

    $objectCar = new Car ();

    $objectCar->color ();
    echo '<br>';
    $objectCar->engine ();
    echo '<br>';
    $objectCar->model ();
    echo '<br>';


    echo "Calculator Class <br>";

    Class Calculator{

        public function sum ($num1, $num2){
            $x = $num1;
            $y = $num2;

            $result = $x+$y;

            return $result;
        }

        public function sub ($num1, $num2){
            $x = $num1;
            $y = $num2;

            $result = $x-$y;

            return $result;
        }

        public function multi ($num1, $num2){
            $x = $num1;
            $y = $num2;

            $result = $x*$y;

            return $result;
        }

        public function div ($num1, $num2){
            $x = $num1;
            $y = $num2;

            $result = $x/$y;

            return $result;
        }
    }

    $objectCalculator = new Calculator ();

    echo $objectCalculator->sum(110, 90);
    echo '<br>';
    echo $objectCalculator->sub(200, 120);
    echo '<br>';
    echo $objectCalculator->multi(35, 20);
    echo '<br>';
    echo $objectCalculator->div(180, 20);

?>
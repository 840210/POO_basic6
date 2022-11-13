<?php 
require_once 'Bicycle.php';
require_once  'Skate.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Speedometer.php';

$nissan350Z = new Car('green', 4, 'essence');

try {
    echo $nissan350Z->start();
} catch (Exception $e) {
    echo  $nissan350Z->getMessage() . "<br>";
    $nissan350Z->setParkBrake(false);
    echo "changement d'état du frein à main, redémarrage : " . $nissan350Z->start() . "<br>";
} finally {
    echo "Ma voiture roule comme un donut.";
}
echo '<br>';
echo $nissan350Z->start();

echo Speedometer::convertKmToMiles(25);
echo PHP_EOL;
echo Speedometer::convertMilesToKm(25);
?>
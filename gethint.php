<?php

$a[] = "Abarth";
$a[] = "Alfa Romeo";
$a[] = "Aston Martin";
$a[] = "Audi";
$a[] = "Alpine";
$a[] = "Bentley";
$a[] = "BMW";
$a[] = "Bugatti";
$a[] = "Cadillac";
$a[] = "Chevrolet";
$a[] = "Chrysler";
$a[] = "Citroën";
$a[] = "Dacia";
$a[] = "Daewoo";
$a[] = "Daihatsu";
$a[] = "Dodge";
$a[] = "Donkervoort";
$a[] = "Datsun";
$a[] = "Ferrari";
$a[] = "Fiat";
$a[] = "Ford";
$a[] = "Fisker";
$a[] = "Honda";
$a[] = "Hummer";
$a[] = "Hyundai";
$a[] = "Infiniti";
$a[] = "Jaguar";
$a[] = "Jeep";
$a[] = "Kia";
$a[] = "KTM";
$a[] = "Lada";
$a[] = "Lamborghini";
$a[] = "Lancia";
$a[] = "Land Rover";
$a[] = "Landwind";
$a[] = "Lexus";
$a[] = "Lotus";
$a[] = "Maserati";
$a[] = "Mazda";
$a[] = "Mercedes-Benz";
$a[] = "Mini";
$a[] = "Mitsubishi";
$a[] = "McLaren";
$a[] = "Nissan";
$a[] = "Opel";
$a[] = "Peugeot";
$a[] = "Porsche";
$a[] = "Qoros";
$a[] = "Renault";
$a[] = "Rolls-Royce";
$a[] = "Rover";
$a[] = "Saab";
$a[] = "Seat";
$a[] = "Skoda";
$a[] = "Smart";
$a[] = "SsangYong";
$a[] = "Subaru";
$a[] = "Suzuki";
$a[] = "Spyker";
$a[] = "Toyota";
$a[] = "Tesla";
$a[] = "Think";
$a[] = "Volkswagen";
$a[] = "Volvo";
$a[] = "Wiesmann";



$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

echo $hint === "" ? "sorry ik kan niks vinden" : $hint;
?>

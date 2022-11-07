<?php
include "./Coin.php";
include "./Phone.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<?php
    $coin = new Coin(); 
    $coin->setCountry("Lithuania");
    $coin->setValue(1);
    $coin->setYearOfManufacture(2016);
    $coin->setMaterial("steal");

    $coin1 = new Coin(); 
    $coin1->setCountry("Belgium");
    $coin1->setValue(0.01);
    $coin1->setYearOfManufacture(1998);
    $coin1->setMaterial("steal/copper");

    $coin2 = new Coin(); 
    $coin2->setCountry("Lithuania");
    $coin2->setValue(1);
    $coin2->setYearOfManufacture(1994);
    $coin2->setMaterial("paper");

    $coins = [$coin, $coin1, $coin2];
?>

<table class="table">
    <thead>
        <tr>
            <th>Country</th>
            <th>Value</th>
            <th>Year Of manufacture</th>
            <th>Material</th>         
        </tr>
    </thead>
    <tbody>
       <?php
            foreach($coins as $moneta){
            echo "<tr>";
                echo "<td>".$moneta->getCountry()."</td>";
                echo "<td>".$moneta->getValue()."</td>";
                echo "<td>".$moneta->getYearOfManufacture()."</td>";
                echo "<td>".$moneta->getMaterial()."</td>";                
            echo "</tr>";          
            }
       ?>

    </tbody>
</table>
<?php
$phone1 = new Phone("Samsung", 2020, "no");
$phone2 = new Phone("Huawei", 2021, "yes");
$phone3 = new Phone("Apple", 2022, "yes");
$phones = [$phone1, $phone2, $phone3];
?>
<table class="table">
    <thead>
        <tr>
            <?php
                foreach ($phones[0] as $key => $value) {
                    echo "<th>".$key."</th>";
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($phones as $phone1) {
                echo "<tr>";
                    echo "<td>".$phone1->producer."</td>";
                    echo "<td>".$phone1->year."</td>";
                    echo "<td>".$phone1->newModel."</td>";
                    echo "</tr>";
            }
        ?>
        
    </tbody>
</table>

</body>
</html>
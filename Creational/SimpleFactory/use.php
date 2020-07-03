 <?php
    $factory = new SimpleFactory();
    $bicycle = $factory->createBicycle();
    $bicycle->driveTo('Paris');
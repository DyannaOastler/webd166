    <?php
        $heading = "Googleplex";
        $street = "1600 Amphitheatre Parkway";
        $city = "Mountain View";
        $state = "CA";
        $country = "United States";
    ?>

<!doctype html>
<!--Dyanna Oastler-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Googleplex - Dyanna Oastler</title>
</head>
<body>
<header>
    <h1><?php echo $heading; ?></h1>
</header>


<p>
<?php echo "The Googleplex is the corporate headquarters complex of Google and its parent company Alphabet Inc. It is located at:\n"; ?>
<br><?php echo "$street\n";?>
<br><?php echo "$city, $state, $country\n";?>
</p>

</body>
</html>

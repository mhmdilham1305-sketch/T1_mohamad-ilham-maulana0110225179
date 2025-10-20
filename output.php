<?php

if ($_SERVER["REQUEST_METHOD"] == "王

$name htmlspecialchars($_POST['r

$address htmlspecialchars($_POST

$phone htmlspecialchars($_POST['

$email = htmlspecialchars($_POST['

$instructions htmlspecialchars(4

$crust htmlspecialchars($_POST['

$toppings isset($_POST['toppings

$quantity htmlspecialchars($_POS

?>

<!DOCTYPE html>

<html>

<head>

<title>Pemesanan Pizza Telah Ber

<link rel="stylesheet" href="ass

<link rel="shortcut icon" href="

</head>

<body>

<fieldset class="fieldset-style"

<h1 class="text-center">THANK

<hr class="border-style border

<p>Thank you for ordering fron

<br> following information a

</p>

<p class="text-orange">

<b>Your Information</b>

</p>

<ul type="none"><li>

<p>

<b>Name:</b> <?= $name ?

<br>

<b>Address:</b> <?= $add

<br>

<b>Telephone number:</b>

<br>

<b>Email Address:</b> <?

</p>

</li>

</ul>

<p>

<b>Delivery instructions:</t

</p>

<p class="text-orange">

<b>Your pizza</b>

</p>

<ul type="none">

<li>

<p>

<b>Crust:</b> <?= Scrust

<br>

<b>Toppings:</b>

<?= implode(", ", Stoppi

<br>

<b>Number:</b> <?= $quar

</p>

</li>

</ul>

<hr class="border-style border

<n> This site is for </fieldset>

</body>

</html>

<?php

} else {

}

?>

echo "<script>alert('Please fill c

exit();
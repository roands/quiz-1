<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = htmlspecialchars($_POST['amount']);
    $payment_type = htmlspecialchars($_POST['payment_type']);
    $account_number = htmlspecialchars($_POST['account_number']);

    echo "<h2>Your Input:</h2>";
    echo "amount: " . $amount . "<br>";
    echo "payment type: " . $payment_type . "<br>";
    echo "account number: " . $account_number . "<br>";
}
?>


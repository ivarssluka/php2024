<?php

/* Switch statement */

$paymentStatus = "paid";

switch ($paymentStatus) {
    case "paid":
        echo "Payment is successful <br>";
        break;
    case "pending": // this will not be executed as paid is matched at this point
        echo "Payment is pending <br>";
        break;
    default:
        echo "Payment is failed <br>";
}

switch ($paymentStatus) {
    case "paid":
        echo "Payment is successful <br>";
//        break; // if you remove this line, it will execute the next cases as well
    case "pending":
        echo "Payment is pending <br>";
        break;
    default:
        echo "Payment is failed <br>";
}

$paymentStatus = '1';

switch ($paymentStatus) {
    case 1:
        echo "Payment is successful <br>"; // this will be executed because switch uses loose comparison
        break;
    case 2:
        echo "Payment is pending <br>";
        break;
    default:
        echo "Payment is failed <br>";
}

$paymentStatuses = [1, 2, 3];
foreach ($paymentStatuses as $paymentStatus) {
    switch ($paymentStatus) {
        case 1:
            echo "Payment is successful <br>";
            break;
        case 2:
            echo "Payment is pending <br>";
            break;
        case 3:
            echo "Payment has failed <br>";
            break;
        default:
            echo "Payment status - unknown <br>"; // in this case all cases will be executed except default
    }
}


$paymentStatuses = [1, 2, 3];
foreach ($paymentStatuses as $paymentStatus) {
    switch ($paymentStatus) {
        case 1:
            echo "Payment is successful <br>";
            break 2; // if you want to break out of the loop you need to specify the break levels here
        case 2:
            echo "Payment is pending <br>";
            break;
        case 3:
            echo "Payment has failed <br>";
            break;
        default:
            echo "Payment status - unknown <br>"; // in this case all cases will be executed except default
    }
}

function x() {
    sleep(3);
    echo "Done <br>";
    return 3;
}

//if (x() === 1) {
//    echo 1;
//} elseif (x() === 2) {
//    echo 2;
//} elseif (x() === 3) {
//    echo 3;
//} else {
//    echo 4;
//}

// this will take you 9 seconds to execute the function

$x = x(); // however this will only run once and take only 3 seconds to execute
if ($x === 1) {
    echo 1;
} elseif ($x === 2) {
    echo 2;
} elseif ($x === 3) {
    echo 3;
} else {
    echo 4;
}

// We can achieve similar results using switch case

switch (x()) {
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;
        break;
    case 3:
        echo 3;
        break;
    default:
        echo 4;
}
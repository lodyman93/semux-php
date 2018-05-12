<?php
/**
 * This example generates a new Semux address.
 */

include(__DIR__ . "/common.php");

try {
    $createAccountResponse = $semuxApi->createAccount();
    $address = $createAccountResponse->getResult();
    printf("Created address: %s\n", $address);
} catch (Exception $e) {
    printf("Exception: %s\n%s\n", $e->getMessage(), $e->getTraceAsString());
}
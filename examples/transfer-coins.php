<?php
/**
 * This example transfers 1 SEM from 0x23a6049381fd2cfb0661d9de206613b83d53d7df
 * to 0x426ae10caffcc5cbe623866cff1ec00c9501654c with a minimum fee of 0.005 SEM.
 *
 * The sender is the default validator of Devnet with the private key:
 * 302e020100300506032b657004220420acbd5f2cb2b6053f704376d12df99f2aa163d267a755c7f1d9fe55d2a2dc5405
 */

include(__DIR__ . "/common.php");

use Semux\Client\ApiException;

try {
    // [0] prepare query parameters
    $from = "0x23a6049381fd2cfb0661d9de206613b83d53d7df"; // this address must exist in the wallet of target API server
    $to = "0x426ae10caffcc5cbe623866cff1ec00c9501654c";
    $value = 1 * pow(10, 9); // 1 SEM
    $fee = 0.005 * pow(10, 9); // 0.005 SEM
    $data = null;

    // [1] call the API
    $transferResponse = $semuxApi->transfer($from, $to, $value, $fee, $data);
    $txId = $transferResponse->getResult();
    printf("Transfer Transaction ID: %s\n", $txId);

    // [2] check pending transactions
    $getPendingTransactionsResponse = $semuxApi->getPendingTransactions();
    $pendingTransactions = $getPendingTransactionsResponse->getResult();
    foreach ($pendingTransactions as $pendingTransaction) {
        if ($pendingTransaction->getHash() == $txId) {
            printf("Pending Transaction: %s\n", $pendingTransaction);
            break;
        }
    }

    // [3] wait the transaction to be confirmed
    while (true) {
        try {
            printf("Checking transaction status...");
            $getTransactionResponse = $semuxApi->getTransaction($txId);
            if ($getTransactionResponse->getResult() != null) {
                printf(" Transaction confirmed: %s\n", $getTransactionResponse->getResult());
                break;
            }
        } catch (ApiException $e) {
            printf(" Error: %s\n", $e->getResponseBody());
        }
        sleep(10);
    }

    // [4] check account balance
    $getAccountResponse = $semuxApi->getAccount($to);
    printf("Recipient Account: %s\n", $getAccountResponse->getResult());

    // [5] check the latest transaction of the recipient's account
    $getAccountTransactionsResponse = $semuxApi->getAccountTransactions($to, $getAccountResponse->getResult()->getTransactionCount() - 1, $getAccountResponse->getResult()->getTransactionCount());
    $transaction = $getAccountTransactionsResponse->getResult()[0];
    printf("The latest transaction of recipient: %s\n", $transaction);
} catch (Exception $e) {
    printf("Exception: %s\n%s\n", $e->getMessage(), $e->getTraceAsString());
}
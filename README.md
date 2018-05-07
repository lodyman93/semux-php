# Semux PHP SDK

[![Build Status](https://travis-ci.org/semuxproject/semux-php-sdk.svg?branch=master)](https://travis-ci.org/semuxproject/semux-php-sdk)

Semux is an experimental high-performance blockchain platform that powers decentralized application.

For more information, please visit [https://www.semux.org](https://www.semux.org)

## Requirements

PHP 5.6 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "require": {
    "semuxproject/semux-php-sdk": "^1.1.1"
  }
}
```

Then run `composer install`

## Tests

To run the unit tests:

```
composer install
cp phpunit.xml.dist phpunit.xml
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure base URL and HTTP basic authorization of Semux API Server
$config = new Semux\Client\Configuration();
$config->setHost("http://localhost:5171/v2.0.0")
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_PASSWORD');

$apiInstance = new Semux\Client\Api\SemuxApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getInfo(): ', $e->getMessage(), PHP_EOL;
}
```

## Documentation for API Endpoints

All URIs are relative to *http://localhost/v2.0.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*SemuxApi* | [**addNode**](docs/Api/SemuxApi.md#addnode) | **POST** /node | Add node
*SemuxApi* | [**addToBlacklist**](docs/Api/SemuxApi.md#addtoblacklist) | **PUT** /blacklist | Add to blacklist
*SemuxApi* | [**addToWhitelist**](docs/Api/SemuxApi.md#addtowhitelist) | **PUT** /whitelist | Add to whitelist
*SemuxApi* | [**broadcastRawTransaction**](docs/Api/SemuxApi.md#broadcastrawtransaction) | **POST** /transaction/raw | Broadcast a raw transaction
*SemuxApi* | [**composeRawTransaction**](docs/Api/SemuxApi.md#composerawtransaction) | **GET** /compose-raw-transaction | Compose an unsigned raw transaction
*SemuxApi* | [**createAccount**](docs/Api/SemuxApi.md#createaccount) | **POST** /account | Create account
*SemuxApi* | [**getAccount**](docs/Api/SemuxApi.md#getaccount) | **GET** /account | Get account
*SemuxApi* | [**getAccountTransactions**](docs/Api/SemuxApi.md#getaccounttransactions) | **GET** /account/transactions | Get account transactions
*SemuxApi* | [**getBlockByHash**](docs/Api/SemuxApi.md#getblockbyhash) | **GET** /block-by-hash | Get block by hash
*SemuxApi* | [**getBlockByNumber**](docs/Api/SemuxApi.md#getblockbynumber) | **GET** /block-by-number | Get block by number
*SemuxApi* | [**getDelegate**](docs/Api/SemuxApi.md#getdelegate) | **GET** /delegate | Get a delegate
*SemuxApi* | [**getDelegates**](docs/Api/SemuxApi.md#getdelegates) | **GET** /delegates | Get all delegates
*SemuxApi* | [**getInfo**](docs/Api/SemuxApi.md#getinfo) | **GET** /info | Get info
*SemuxApi* | [**getLatestBlock**](docs/Api/SemuxApi.md#getlatestblock) | **GET** /latest-block | Get latest block
*SemuxApi* | [**getLatestBlockNumber**](docs/Api/SemuxApi.md#getlatestblocknumber) | **GET** /latest-block-number | Get latest block number
*SemuxApi* | [**getPeers**](docs/Api/SemuxApi.md#getpeers) | **GET** /peers | Get peers
*SemuxApi* | [**getPendingTransactions**](docs/Api/SemuxApi.md#getpendingtransactions) | **GET** /pending-transactions | Get pending transactions
*SemuxApi* | [**getRoot**](docs/Api/SemuxApi.md#getroot) | **GET** / | Get root
*SemuxApi* | [**getTransaction**](docs/Api/SemuxApi.md#gettransaction) | **GET** /transaction | Get transaction
*SemuxApi* | [**getTransactionLimits**](docs/Api/SemuxApi.md#gettransactionlimits) | **GET** /transaction-limits | Get transaction limits
*SemuxApi* | [**getValidators**](docs/Api/SemuxApi.md#getvalidators) | **GET** /validators | Get validators
*SemuxApi* | [**getVote**](docs/Api/SemuxApi.md#getvote) | **GET** /vote | Get vote
*SemuxApi* | [**getVotes**](docs/Api/SemuxApi.md#getvotes) | **GET** /votes | Get votes
*SemuxApi* | [**listAccounts**](docs/Api/SemuxApi.md#listaccounts) | **GET** /accounts | List accounts
*SemuxApi* | [**registerDelegate**](docs/Api/SemuxApi.md#registerdelegate) | **POST** /transaction/delegate | Register delegate
*SemuxApi* | [**signMessage**](docs/Api/SemuxApi.md#signmessage) | **GET** /sign-message | Sign a message
*SemuxApi* | [**signRawTransaction**](docs/Api/SemuxApi.md#signrawtransaction) | **GET** /sign-raw-transaction | Sign an unsigned raw transaction
*SemuxApi* | [**transfer**](docs/Api/SemuxApi.md#transfer) | **POST** /transaction/transfer | Transfer coins
*SemuxApi* | [**unvote**](docs/Api/SemuxApi.md#unvote) | **POST** /transaction/unvote | Unvote
*SemuxApi* | [**verifyMessage**](docs/Api/SemuxApi.md#verifymessage) | **GET** /verify-message | Verify a message
*SemuxApi* | [**vote**](docs/Api/SemuxApi.md#vote) | **POST** /transaction/vote | Vote


## Documentation For Models

 - [AccountType](docs/Model/AccountType.md)
 - [ApiHandlerResponse](docs/Model/ApiHandlerResponse.md)
 - [BlockType](docs/Model/BlockType.md)
 - [DelegateType](docs/Model/DelegateType.md)
 - [InfoType](docs/Model/InfoType.md)
 - [PeerType](docs/Model/PeerType.md)
 - [TransactionLimitsType](docs/Model/TransactionLimitsType.md)
 - [TransactionType](docs/Model/TransactionType.md)
 - [AddNodeResponse](docs/Model/AddNodeResponse.md)
 - [ComposeRawTransactionResponse](docs/Model/ComposeRawTransactionResponse.md)
 - [CreateAccountResponse](docs/Model/CreateAccountResponse.md)
 - [DoTransactionResponse](docs/Model/DoTransactionResponse.md)
 - [GetAccountResponse](docs/Model/GetAccountResponse.md)
 - [GetAccountTransactionsResponse](docs/Model/GetAccountTransactionsResponse.md)
 - [GetBlockResponse](docs/Model/GetBlockResponse.md)
 - [GetDelegateResponse](docs/Model/GetDelegateResponse.md)
 - [GetDelegatesResponse](docs/Model/GetDelegatesResponse.md)
 - [GetInfoResponse](docs/Model/GetInfoResponse.md)
 - [GetLatestBlockNumberResponse](docs/Model/GetLatestBlockNumberResponse.md)
 - [GetLatestBlockResponse](docs/Model/GetLatestBlockResponse.md)
 - [GetPeersResponse](docs/Model/GetPeersResponse.md)
 - [GetPendingTransactionsResponse](docs/Model/GetPendingTransactionsResponse.md)
 - [GetRootResponse](docs/Model/GetRootResponse.md)
 - [GetTransactionLimitsResponse](docs/Model/GetTransactionLimitsResponse.md)
 - [GetTransactionResponse](docs/Model/GetTransactionResponse.md)
 - [GetValidatorsResponse](docs/Model/GetValidatorsResponse.md)
 - [GetVoteResponse](docs/Model/GetVoteResponse.md)
 - [GetVotesResponse](docs/Model/GetVotesResponse.md)
 - [ListAccountsResponse](docs/Model/ListAccountsResponse.md)
 - [SendTransactionResponse](docs/Model/SendTransactionResponse.md)
 - [SignMessageResponse](docs/Model/SignMessageResponse.md)
 - [SignRawTransactionResponse](docs/Model/SignRawTransactionResponse.md)
 - [VerifyMessageResponse](docs/Model/VerifyMessageResponse.md)






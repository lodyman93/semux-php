# Semux\Client\SemuxApi

All URIs are relative to *http://localhost/v2.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addNode**](SemuxApi.md#addNode) | **POST** /node | Add node
[**addToBlacklist**](SemuxApi.md#addToBlacklist) | **PUT** /blacklist | Add to blacklist
[**addToWhitelist**](SemuxApi.md#addToWhitelist) | **PUT** /whitelist | Add to whitelist
[**broadcastRawTransaction**](SemuxApi.md#broadcastRawTransaction) | **POST** /transaction/raw | Broadcast a raw transaction
[**composeRawTransaction**](SemuxApi.md#composeRawTransaction) | **GET** /compose-raw-transaction | Compose an unsigned raw transaction
[**createAccount**](SemuxApi.md#createAccount) | **POST** /account | Create account
[**getAccount**](SemuxApi.md#getAccount) | **GET** /account | Get account
[**getAccountTransactions**](SemuxApi.md#getAccountTransactions) | **GET** /account/transactions | Get account transactions
[**getBlockByHash**](SemuxApi.md#getBlockByHash) | **GET** /block-by-hash | Get block by hash
[**getBlockByNumber**](SemuxApi.md#getBlockByNumber) | **GET** /block-by-number | Get block by number
[**getDelegate**](SemuxApi.md#getDelegate) | **GET** /delegate | Get a delegate
[**getDelegates**](SemuxApi.md#getDelegates) | **GET** /delegates | Get all delegates
[**getInfo**](SemuxApi.md#getInfo) | **GET** /info | Get info
[**getLatestBlock**](SemuxApi.md#getLatestBlock) | **GET** /latest-block | Get latest block
[**getLatestBlockNumber**](SemuxApi.md#getLatestBlockNumber) | **GET** /latest-block-number | Get latest block number
[**getPeers**](SemuxApi.md#getPeers) | **GET** /peers | Get peers
[**getPendingTransactions**](SemuxApi.md#getPendingTransactions) | **GET** /pending-transactions | Get pending transactions
[**getRoot**](SemuxApi.md#getRoot) | **GET** / | Get root
[**getTransaction**](SemuxApi.md#getTransaction) | **GET** /transaction | Get transaction
[**getTransactionLimits**](SemuxApi.md#getTransactionLimits) | **GET** /transaction-limits | Get transaction limits
[**getValidators**](SemuxApi.md#getValidators) | **GET** /validators | Get validators
[**getVote**](SemuxApi.md#getVote) | **GET** /vote | Get vote
[**getVotes**](SemuxApi.md#getVotes) | **GET** /votes | Get votes
[**listAccounts**](SemuxApi.md#listAccounts) | **GET** /accounts | List accounts
[**registerDelegate**](SemuxApi.md#registerDelegate) | **POST** /transaction/delegate | Register delegate
[**signMessage**](SemuxApi.md#signMessage) | **GET** /sign-message | Sign a message
[**signRawTransaction**](SemuxApi.md#signRawTransaction) | **GET** /sign-raw-transaction | Sign an unsigned raw transaction
[**transfer**](SemuxApi.md#transfer) | **POST** /transaction/transfer | Transfer coins
[**unvote**](SemuxApi.md#unvote) | **POST** /transaction/unvote | Unvote
[**verifyMessage**](SemuxApi.md#verifyMessage) | **GET** /verify-message | Verify a message
[**vote**](SemuxApi.md#vote) | **POST** /transaction/vote | Vote


# **addNode**
> \Semux\Client\Model\AddNodeResponse addNode($node)

Add node

Adds a node to node manager.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = "node_example"; // string | Name of the node in host:port format

try {
    $result = $apiInstance->addNode($node);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->addNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node** | **string**| Name of the node in host:port format |

### Return type

[**\Semux\Client\Model\AddNodeResponse**](../Model/AddNodeResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addToBlacklist**
> \Semux\Client\Model\ApiHandlerResponse addToBlacklist($ip)

Add to blacklist

Adds an IP address to blacklist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip = "ip_example"; // string | IP address

try {
    $result = $apiInstance->addToBlacklist($ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->addToBlacklist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip** | **string**| IP address |

### Return type

[**\Semux\Client\Model\ApiHandlerResponse**](../Model/ApiHandlerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addToWhitelist**
> \Semux\Client\Model\ApiHandlerResponse addToWhitelist($ip)

Add to whitelist

Adds an IP address to whitelist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip = "ip_example"; // string | IP address

try {
    $result = $apiInstance->addToWhitelist($ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->addToWhitelist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip** | **string**| IP address |

### Return type

[**\Semux\Client\Model\ApiHandlerResponse**](../Model/ApiHandlerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **broadcastRawTransaction**
> \Semux\Client\Model\SendTransactionResponse broadcastRawTransaction($raw)

Broadcast a raw transaction

Broadcasts a raw transaction to the network.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$raw = "raw_example"; // string | Raw transaction

try {
    $result = $apiInstance->broadcastRawTransaction($raw);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->broadcastRawTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **raw** | **string**| Raw transaction |

### Return type

[**\Semux\Client\Model\SendTransactionResponse**](../Model/SendTransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **composeRawTransaction**
> \Semux\Client\Model\ComposeRawTransactionResponse composeRawTransaction($network, $type, $fee, $nonce, $to, $value, $timestamp, $data)

Compose an unsigned raw transaction

Compose an unsigned raw transaction then return its hexadecimal encoded string. An unsigned raw transaction can be signed using /sign-raw-transaction API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = "network_example"; // string | Network name
$type = "type_example"; // string | Transaction type
$fee = "fee_example"; // string | Transaction fee in nano
$nonce = "nonce_example"; // string | Transaction nonce
$to = "to_example"; // string | Recipient's address
$value = "value_example"; // string | Transaction value in nano
$timestamp = "timestamp_example"; // string | Transaction timestamp in milliseconds. Default to current time.
$data = "data_example"; // string | Hexadecimal encoded transaction data.

try {
    $result = $apiInstance->composeRawTransaction($network, $type, $fee, $nonce, $to, $value, $timestamp, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->composeRawTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| Network name |
 **type** | **string**| Transaction type |
 **fee** | **string**| Transaction fee in nano |
 **nonce** | **string**| Transaction nonce |
 **to** | **string**| Recipient&#39;s address | [optional]
 **value** | **string**| Transaction value in nano | [optional]
 **timestamp** | **string**| Transaction timestamp in milliseconds. Default to current time. | [optional]
 **data** | **string**| Hexadecimal encoded transaction data. | [optional]

### Return type

[**\Semux\Client\Model\ComposeRawTransactionResponse**](../Model/ComposeRawTransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAccount**
> \Semux\Client\Model\CreateAccountResponse createAccount($name)

Create account

Creates a new account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Assigned alias to the created account.

try {
    $result = $apiInstance->createAccount($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Assigned alias to the created account. | [optional]

### Return type

[**\Semux\Client\Model\CreateAccountResponse**](../Model/CreateAccountResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccount**
> \Semux\Client\Model\GetAccountResponse getAccount($address)

Get account

Returns an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = "address_example"; // string | Address of account

try {
    $result = $apiInstance->getAccount($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address of account |

### Return type

[**\Semux\Client\Model\GetAccountResponse**](../Model/GetAccountResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountTransactions**
> \Semux\Client\Model\GetAccountTransactionsResponse getAccountTransactions($address, $from, $to)

Get account transactions

Returns transactions from/to an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = "address_example"; // string | Address of account
$from = "from_example"; // string | Starting range of transactions
$to = "to_example"; // string | Ending range of transactions

try {
    $result = $apiInstance->getAccountTransactions($address, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getAccountTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address of account |
 **from** | **string**| Starting range of transactions |
 **to** | **string**| Ending range of transactions |

### Return type

[**\Semux\Client\Model\GetAccountTransactionsResponse**](../Model/GetAccountTransactionsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBlockByHash**
> \Semux\Client\Model\GetBlockResponse getBlockByHash($hash)

Get block by hash

Returns a block by block hash.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hash = "hash_example"; // string | Hash of block

try {
    $result = $apiInstance->getBlockByHash($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getBlockByHash: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Hash of block |

### Return type

[**\Semux\Client\Model\GetBlockResponse**](../Model/GetBlockResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBlockByNumber**
> \Semux\Client\Model\GetBlockResponse getBlockByNumber($number)

Get block by number

Returns a block by block number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = "number_example"; // string | Number of block

try {
    $result = $apiInstance->getBlockByNumber($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getBlockByNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Number of block |

### Return type

[**\Semux\Client\Model\GetBlockResponse**](../Model/GetBlockResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDelegate**
> \Semux\Client\Model\GetDelegateResponse getDelegate($address)

Get a delegate

Returns a delegate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = "address_example"; // string | Delegate address

try {
    $result = $apiInstance->getDelegate($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getDelegate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Delegate address |

### Return type

[**\Semux\Client\Model\GetDelegateResponse**](../Model/GetDelegateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDelegates**
> \Semux\Client\Model\GetDelegatesResponse getDelegates()

Get all delegates

Returns a list of delegates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDelegates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getDelegates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Semux\Client\Model\GetDelegatesResponse**](../Model/GetDelegatesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInfo**
> \Semux\Client\Model\GetInfoResponse getInfo()

Get info

Returns kernel info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Semux\Client\Model\GetInfoResponse**](../Model/GetInfoResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLatestBlock**
> \Semux\Client\Model\GetLatestBlockResponse getLatestBlock()

Get latest block

Returns the latest block.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLatestBlock();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getLatestBlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Semux\Client\Model\GetLatestBlockResponse**](../Model/GetLatestBlockResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLatestBlockNumber**
> \Semux\Client\Model\GetLatestBlockNumberResponse getLatestBlockNumber()

Get latest block number

Returns the number of the latest block.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLatestBlockNumber();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getLatestBlockNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Semux\Client\Model\GetLatestBlockNumberResponse**](../Model/GetLatestBlockNumberResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPeers**
> \Semux\Client\Model\GetPeersResponse getPeers()

Get peers

Returns connected peers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPeers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getPeers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Semux\Client\Model\GetPeersResponse**](../Model/GetPeersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPendingTransactions**
> \Semux\Client\Model\GetPendingTransactionsResponse getPendingTransactions()

Get pending transactions

Returns all the pending transactions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPendingTransactions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getPendingTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Semux\Client\Model\GetPendingTransactionsResponse**](../Model/GetPendingTransactionsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoot**
> \Semux\Client\Model\GetRootResponse getRoot()

Get root

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRoot();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getRoot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Semux\Client\Model\GetRootResponse**](../Model/GetRootResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransaction**
> \Semux\Client\Model\GetTransactionResponse getTransaction($hash)

Get transaction

Returns a transactions if exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hash = "hash_example"; // string | Transaction hash

try {
    $result = $apiInstance->getTransaction($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Transaction hash |

### Return type

[**\Semux\Client\Model\GetTransactionResponse**](../Model/GetTransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionLimits**
> \Semux\Client\Model\GetTransactionLimitsResponse getTransactionLimits($type)

Get transaction limits

Get minimum fee and maximum size.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Type of transaction

try {
    $result = $apiInstance->getTransactionLimits($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getTransactionLimits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Type of transaction |

### Return type

[**\Semux\Client\Model\GetTransactionLimitsResponse**](../Model/GetTransactionLimitsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getValidators**
> \Semux\Client\Model\GetValidatorsResponse getValidators()

Get validators

Returns a list of validators.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getValidators();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getValidators: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Semux\Client\Model\GetValidatorsResponse**](../Model/GetValidatorsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVote**
> \Semux\Client\Model\GetVoteResponse getVote($delegate, $voter)

Get vote

Returns the vote from a voter to a delegate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delegate = "delegate_example"; // string | Delegate address
$voter = "voter_example"; // string | Voter address

try {
    $result = $apiInstance->getVote($delegate, $voter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getVote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delegate** | **string**| Delegate address |
 **voter** | **string**| Voter address |

### Return type

[**\Semux\Client\Model\GetVoteResponse**](../Model/GetVoteResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVotes**
> \Semux\Client\Model\GetVotesResponse getVotes($delegate)

Get votes

Returns all the votes to a delegate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delegate = "delegate_example"; // string | Delegate address

try {
    $result = $apiInstance->getVotes($delegate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getVotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delegate** | **string**| Delegate address |

### Return type

[**\Semux\Client\Model\GetVotesResponse**](../Model/GetVotesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAccounts**
> \Semux\Client\Model\ListAccountsResponse listAccounts()

List accounts

Returns accounts in the wallet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listAccounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->listAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Semux\Client\Model\ListAccountsResponse**](../Model/ListAccountsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerDelegate**
> \Semux\Client\Model\DoTransactionResponse registerDelegate($from, $fee, $data)

Register delegate

Registers as a delegate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Registering address
$fee = "fee_example"; // string | Transaction fee
$data = "data_example"; // string | Delegate name

try {
    $result = $apiInstance->registerDelegate($from, $fee, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->registerDelegate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Registering address |
 **fee** | **string**| Transaction fee |
 **data** | **string**| Delegate name |

### Return type

[**\Semux\Client\Model\DoTransactionResponse**](../Model/DoTransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signMessage**
> \Semux\Client\Model\SignMessageResponse signMessage($address, $message)

Sign a message

Sign a message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = "address_example"; // string | Signing address
$message = "message_example"; // string | Message to sign

try {
    $result = $apiInstance->signMessage($address, $message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->signMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Signing address |
 **message** | **string**| Message to sign |

### Return type

[**\Semux\Client\Model\SignMessageResponse**](../Model/SignMessageResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signRawTransaction**
> \Semux\Client\Model\SignRawTransactionResponse signRawTransaction($raw, $address)

Sign an unsigned raw transaction

Sign an unsigned raw transaction then return its hexadecimal encoded string. An unsigned raw transaction can be created using /compose-raw-transaction API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$raw = "raw_example"; // string | Unsigned raw transaction encoded in hexadecimal string.
$address = "address_example"; // string | Signer's address. This address must exist in the wallet.

try {
    $result = $apiInstance->signRawTransaction($raw, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->signRawTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **raw** | **string**| Unsigned raw transaction encoded in hexadecimal string. |
 **address** | **string**| Signer&#39;s address. This address must exist in the wallet. |

### Return type

[**\Semux\Client\Model\SignRawTransactionResponse**](../Model/SignRawTransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transfer**
> \Semux\Client\Model\DoTransactionResponse transfer($from, $to, $value, $fee, $data)

Transfer coins

Transfers coins to another address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Sending address
$to = "to_example"; // string | Receiving address
$value = "value_example"; // string | Amount of SEM to transfer
$fee = "fee_example"; // string | Transaction fee
$data = "data_example"; // string | Transaction data

try {
    $result = $apiInstance->transfer($from, $to, $value, $fee, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->transfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Sending address |
 **to** | **string**| Receiving address |
 **value** | **string**| Amount of SEM to transfer |
 **fee** | **string**| Transaction fee |
 **data** | **string**| Transaction data |

### Return type

[**\Semux\Client\Model\DoTransactionResponse**](../Model/DoTransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unvote**
> \Semux\Client\Model\DoTransactionResponse unvote($from, $to, $value, $fee)

Unvote

Unvotes for a delegate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Voting address
$to = "to_example"; // string | Delegate address
$value = "value_example"; // string | Vote amount
$fee = "fee_example"; // string | Transaction fee

try {
    $result = $apiInstance->unvote($from, $to, $value, $fee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->unvote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Voting address |
 **to** | **string**| Delegate address |
 **value** | **string**| Vote amount |
 **fee** | **string**| Transaction fee |

### Return type

[**\Semux\Client\Model\DoTransactionResponse**](../Model/DoTransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyMessage**
> \Semux\Client\Model\VerifyMessageResponse verifyMessage($address, $message, $signature)

Verify a message

Verify a signed message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = "address_example"; // string | Address
$message = "message_example"; // string | Message
$signature = "signature_example"; // string | Signature to verify

try {
    $result = $apiInstance->verifyMessage($address, $message, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->verifyMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address |
 **message** | **string**| Message |
 **signature** | **string**| Signature to verify |

### Return type

[**\Semux\Client\Model\VerifyMessageResponse**](../Model/VerifyMessageResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vote**
> \Semux\Client\Model\DoTransactionResponse vote($from, $to, $value, $fee)

Vote

Votes for a delegate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Semux\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Semux\Client\Api\SemuxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Voting address
$to = "to_example"; // string | Delegate address
$value = "value_example"; // string | Vote amount
$fee = "fee_example"; // string | Transaction fee

try {
    $result = $apiInstance->vote($from, $to, $value, $fee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->vote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Voting address |
 **to** | **string**| Delegate address |
 **value** | **string**| Vote amount |
 **fee** | **string**| Transaction fee |

### Return type

[**\Semux\Client\Model\DoTransactionResponse**](../Model/DoTransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


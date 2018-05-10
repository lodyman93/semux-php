<?php
/**
 * InfoType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Semux\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Semux API
 *
 * Semux is an experimental high-performance blockchain platform that powers decentralized application.
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Semux\Client\Model;

use \ArrayAccess;
use \Semux\Client\ObjectSerializer;

/**
 * InfoType Class Doc Comment
 *
 * @category Class
 * @package  Semux\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InfoType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'network' => 'string',
        'capabilities' => 'string[]',
        'clientId' => 'string',
        'coinbase' => 'string',
        'latestBlockNumber' => 'string',
        'latestBlockHash' => 'string',
        'activePeers' => 'int',
        'pendingTransactions' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'network' => null,
        'capabilities' => null,
        'clientId' => null,
        'coinbase' => null,
        'latestBlockNumber' => 'int64',
        'latestBlockHash' => null,
        'activePeers' => 'int32',
        'pendingTransactions' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'network' => 'network',
        'capabilities' => 'capabilities',
        'clientId' => 'clientId',
        'coinbase' => 'coinbase',
        'latestBlockNumber' => 'latestBlockNumber',
        'latestBlockHash' => 'latestBlockHash',
        'activePeers' => 'activePeers',
        'pendingTransactions' => 'pendingTransactions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'network' => 'setNetwork',
        'capabilities' => 'setCapabilities',
        'clientId' => 'setClientId',
        'coinbase' => 'setCoinbase',
        'latestBlockNumber' => 'setLatestBlockNumber',
        'latestBlockHash' => 'setLatestBlockHash',
        'activePeers' => 'setActivePeers',
        'pendingTransactions' => 'setPendingTransactions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'network' => 'getNetwork',
        'capabilities' => 'getCapabilities',
        'clientId' => 'getClientId',
        'coinbase' => 'getCoinbase',
        'latestBlockNumber' => 'getLatestBlockNumber',
        'latestBlockHash' => 'getLatestBlockHash',
        'activePeers' => 'getActivePeers',
        'pendingTransactions' => 'getPendingTransactions'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const NETWORK_MAINNET = 'MAINNET';
    const NETWORK_TESTNET = 'TESTNET';
    const NETWORK_DEVNET = 'DEVNET';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNetworkAllowableValues()
    {
        return [
            self::NETWORK_MAINNET,
            self::NETWORK_TESTNET,
            self::NETWORK_DEVNET,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['capabilities'] = isset($data['capabilities']) ? $data['capabilities'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['coinbase'] = isset($data['coinbase']) ? $data['coinbase'] : null;
        $this->container['latestBlockNumber'] = isset($data['latestBlockNumber']) ? $data['latestBlockNumber'] : null;
        $this->container['latestBlockHash'] = isset($data['latestBlockHash']) ? $data['latestBlockHash'] : null;
        $this->container['activePeers'] = isset($data['activePeers']) ? $data['activePeers'] : null;
        $this->container['pendingTransactions'] = isset($data['pendingTransactions']) ? $data['pendingTransactions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getNetworkAllowableValues();
        if (!in_array($this->container['network'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'network', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['coinbase']) && !preg_match("/^(0x)?[0-9a-fA-F]{40}$/", $this->container['coinbase'])) {
            $invalidProperties[] = "invalid value for 'coinbase', must be conform to the pattern /^(0x)?[0-9a-fA-F]{40}$/.";
        }

        if (!is_null($this->container['latestBlockNumber']) && !preg_match("/^\\d+$/", $this->container['latestBlockNumber'])) {
            $invalidProperties[] = "invalid value for 'latestBlockNumber', must be conform to the pattern /^\\d+$/.";
        }

        if (!is_null($this->container['latestBlockHash']) && !preg_match("/^(0x)?[0-9a-fA-F]{64}$/", $this->container['latestBlockHash'])) {
            $invalidProperties[] = "invalid value for 'latestBlockHash', must be conform to the pattern /^(0x)?[0-9a-fA-F]{64}$/.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowedValues = $this->getNetworkAllowableValues();
        if (!in_array($this->container['network'], $allowedValues)) {
            return false;
        }
        if (!preg_match("/^(0x)?[0-9a-fA-F]{40}$/", $this->container['coinbase'])) {
            return false;
        }
        if (!preg_match("/^\\d+$/", $this->container['latestBlockNumber'])) {
            return false;
        }
        if (!preg_match("/^(0x)?[0-9a-fA-F]{64}$/", $this->container['latestBlockHash'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets network
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param string $network network
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $allowedValues = $this->getNetworkAllowableValues();
        if (!is_null($network) && !in_array($network, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'network', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets capabilities
     *
     * @return string[]
     */
    public function getCapabilities()
    {
        return $this->container['capabilities'];
    }

    /**
     * Sets capabilities
     *
     * @param string[] $capabilities capabilities
     *
     * @return $this
     */
    public function setCapabilities($capabilities)
    {
        $this->container['capabilities'] = $capabilities;

        return $this;
    }

    /**
     * Gets clientId
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     *
     * @param string $clientId clientId
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }

    /**
     * Gets coinbase
     *
     * @return string
     */
    public function getCoinbase()
    {
        return $this->container['coinbase'];
    }

    /**
     * Sets coinbase
     *
     * @param string $coinbase coinbase
     *
     * @return $this
     */
    public function setCoinbase($coinbase)
    {

        if (!is_null($coinbase) && (!preg_match("/^(0x)?[0-9a-fA-F]{40}$/", $coinbase))) {
            throw new \InvalidArgumentException("invalid value for $coinbase when calling InfoType., must conform to the pattern /^(0x)?[0-9a-fA-F]{40}$/.");
        }

        $this->container['coinbase'] = $coinbase;

        return $this;
    }

    /**
     * Gets latestBlockNumber
     *
     * @return string
     */
    public function getLatestBlockNumber()
    {
        return $this->container['latestBlockNumber'];
    }

    /**
     * Sets latestBlockNumber
     *
     * @param string $latestBlockNumber latestBlockNumber
     *
     * @return $this
     */
    public function setLatestBlockNumber($latestBlockNumber)
    {

        if (!is_null($latestBlockNumber) && (!preg_match("/^\\d+$/", $latestBlockNumber))) {
            throw new \InvalidArgumentException("invalid value for $latestBlockNumber when calling InfoType., must conform to the pattern /^\\d+$/.");
        }

        $this->container['latestBlockNumber'] = $latestBlockNumber;

        return $this;
    }

    /**
     * Gets latestBlockHash
     *
     * @return string
     */
    public function getLatestBlockHash()
    {
        return $this->container['latestBlockHash'];
    }

    /**
     * Sets latestBlockHash
     *
     * @param string $latestBlockHash latestBlockHash
     *
     * @return $this
     */
    public function setLatestBlockHash($latestBlockHash)
    {

        if (!is_null($latestBlockHash) && (!preg_match("/^(0x)?[0-9a-fA-F]{64}$/", $latestBlockHash))) {
            throw new \InvalidArgumentException("invalid value for $latestBlockHash when calling InfoType., must conform to the pattern /^(0x)?[0-9a-fA-F]{64}$/.");
        }

        $this->container['latestBlockHash'] = $latestBlockHash;

        return $this;
    }

    /**
     * Gets activePeers
     *
     * @return int
     */
    public function getActivePeers()
    {
        return $this->container['activePeers'];
    }

    /**
     * Sets activePeers
     *
     * @param int $activePeers activePeers
     *
     * @return $this
     */
    public function setActivePeers($activePeers)
    {
        $this->container['activePeers'] = $activePeers;

        return $this;
    }

    /**
     * Gets pendingTransactions
     *
     * @return int
     */
    public function getPendingTransactions()
    {
        return $this->container['pendingTransactions'];
    }

    /**
     * Sets pendingTransactions
     *
     * @param int $pendingTransactions pendingTransactions
     *
     * @return $this
     */
    public function setPendingTransactions($pendingTransactions)
    {
        $this->container['pendingTransactions'] = $pendingTransactions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



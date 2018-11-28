<?php
/**
 * Shipment
 *
 * PHP version 5
 *
 * @category Class
 * @package  Nopolabs\EBay\Sell\Logistics
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Logistics API
 *
 * The Logistics API resources offer the following capabilities: shipping_quote &ndash; Consolidates into a list a set of live shipping rates, or quotes, from which you can select a rate to ship a package. shipment &ndash; Creates a &quot;shipment&quot; for the selected shipping rate. Call createShippingQuote to get a list of live shipping rates. The rates returned are all valid for a specific time window and all quoted prices are at eBay-negotiated rates. Select one of the live rates and using its associated rateId, create a &quot;shipment&quot; for the package by calling createFromShippingQuote. Creating a shipment completes an agreement, and the base service and addition shipping options are totaled into the totalShippingCost. This action also generates a shipping label that you can use to ship the package. Important! Sellers must set up a payment method via their eBay account before they can use the methods in this API to create a shipment and the associated shipping label.
 *
 * OpenAPI spec version: v1_beta.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Nopolabs\EBay\Sell\Logistics\Model;

use \ArrayAccess;
use \Nopolabs\EBay\Sell\Logistics\ObjectSerializer;

/**
 * Shipment Class Doc Comment
 *
 * @category Class
 * @description This complex type defines a shipment for a specific package (for example, a box or letter). Shipments are always linked to a purchased shipping label.
 * @package  Nopolabs\EBay\Sell\Logistics
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Shipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cancellation' => '\Nopolabs\EBay\Sell\Logistics\Model\ShipmentCancellation',
        'creation_date' => 'string',
        'label_custom_message' => 'string',
        'label_download_url' => 'string',
        'label_size' => 'string',
        'orders' => '\Nopolabs\EBay\Sell\Logistics\Model\Order[]',
        'package_specification' => '\Nopolabs\EBay\Sell\Logistics\Model\PackageSpecification',
        'rate' => '\Nopolabs\EBay\Sell\Logistics\Model\PurchasedRate',
        'return_to' => '\Nopolabs\EBay\Sell\Logistics\Model\Contact',
        'ship_from' => '\Nopolabs\EBay\Sell\Logistics\Model\Contact',
        'shipment_id' => 'string',
        'shipment_tracking_number' => 'string',
        'ship_to' => '\Nopolabs\EBay\Sell\Logistics\Model\Contact'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cancellation' => null,
        'creation_date' => null,
        'label_custom_message' => null,
        'label_download_url' => null,
        'label_size' => null,
        'orders' => null,
        'package_specification' => null,
        'rate' => null,
        'return_to' => null,
        'ship_from' => null,
        'shipment_id' => null,
        'shipment_tracking_number' => null,
        'ship_to' => null
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
        'cancellation' => 'cancellation',
        'creation_date' => 'creationDate',
        'label_custom_message' => 'labelCustomMessage',
        'label_download_url' => 'labelDownloadUrl',
        'label_size' => 'labelSize',
        'orders' => 'orders',
        'package_specification' => 'packageSpecification',
        'rate' => 'rate',
        'return_to' => 'returnTo',
        'ship_from' => 'shipFrom',
        'shipment_id' => 'shipmentId',
        'shipment_tracking_number' => 'shipmentTrackingNumber',
        'ship_to' => 'shipTo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cancellation' => 'setCancellation',
        'creation_date' => 'setCreationDate',
        'label_custom_message' => 'setLabelCustomMessage',
        'label_download_url' => 'setLabelDownloadUrl',
        'label_size' => 'setLabelSize',
        'orders' => 'setOrders',
        'package_specification' => 'setPackageSpecification',
        'rate' => 'setRate',
        'return_to' => 'setReturnTo',
        'ship_from' => 'setShipFrom',
        'shipment_id' => 'setShipmentId',
        'shipment_tracking_number' => 'setShipmentTrackingNumber',
        'ship_to' => 'setShipTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cancellation' => 'getCancellation',
        'creation_date' => 'getCreationDate',
        'label_custom_message' => 'getLabelCustomMessage',
        'label_download_url' => 'getLabelDownloadUrl',
        'label_size' => 'getLabelSize',
        'orders' => 'getOrders',
        'package_specification' => 'getPackageSpecification',
        'rate' => 'getRate',
        'return_to' => 'getReturnTo',
        'ship_from' => 'getShipFrom',
        'shipment_id' => 'getShipmentId',
        'shipment_tracking_number' => 'getShipmentTrackingNumber',
        'ship_to' => 'getShipTo'
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
        $this->container['cancellation'] = isset($data['cancellation']) ? $data['cancellation'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['label_custom_message'] = isset($data['label_custom_message']) ? $data['label_custom_message'] : null;
        $this->container['label_download_url'] = isset($data['label_download_url']) ? $data['label_download_url'] : null;
        $this->container['label_size'] = isset($data['label_size']) ? $data['label_size'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['package_specification'] = isset($data['package_specification']) ? $data['package_specification'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['return_to'] = isset($data['return_to']) ? $data['return_to'] : null;
        $this->container['ship_from'] = isset($data['ship_from']) ? $data['ship_from'] : null;
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['shipment_tracking_number'] = isset($data['shipment_tracking_number']) ? $data['shipment_tracking_number'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets cancellation
     *
     * @return \Nopolabs\EBay\Sell\Logistics\Model\ShipmentCancellation
     */
    public function getCancellation()
    {
        return $this->container['cancellation'];
    }

    /**
     * Sets cancellation
     *
     * @param \Nopolabs\EBay\Sell\Logistics\Model\ShipmentCancellation $cancellation cancellation
     *
     * @return $this
     */
    public function setCancellation($cancellation)
    {
        $this->container['cancellation'] = $cancellation;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return string
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string $creation_date The date and time the shipment was created, formatted as an ISO 8601 UTC string. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2018-08-06T01:00:00.000Z
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets label_custom_message
     *
     * @return string
     */
    public function getLabelCustomMessage()
    {
        return $this->container['label_custom_message'];
    }

    /**
     * Sets label_custom_message
     *
     * @param string $label_custom_message If supported by the selected shipping carrier, this field can contain optional seller text to be printed on the shipping label.
     *
     * @return $this
     */
    public function setLabelCustomMessage($label_custom_message)
    {
        $this->container['label_custom_message'] = $label_custom_message;

        return $this;
    }

    /**
     * Gets label_download_url
     *
     * @return string
     */
    public function getLabelDownloadUrl()
    {
        return $this->container['label_download_url'];
    }

    /**
     * Sets label_download_url
     *
     * @param string $label_download_url The direct URL the seller can use to download an image of the shipping label. By default, the file format is PDF. See downloadLabelFile for requesting different response file formats.
     *
     * @return $this
     */
    public function setLabelDownloadUrl($label_download_url)
    {
        $this->container['label_download_url'] = $label_download_url;

        return $this;
    }

    /**
     * Gets label_size
     *
     * @return string
     */
    public function getLabelSize()
    {
        return $this->container['label_size'];
    }

    /**
     * Sets label_size
     *
     * @param string $label_size The seller's desired label size. The support for multi-sized labels is shipping-carrier specific and if the size requested in the creaateFromShippingQuote call matches a size the carrier supports, the value will be represented here in the shipment. Currently, the only valid value is: 4&quot;x6&quot;
     *
     * @return $this
     */
    public function setLabelSize($label_size)
    {
        $this->container['label_size'] = $label_size;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return \Nopolabs\EBay\Sell\Logistics\Model\Order[]
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \Nopolabs\EBay\Sell\Logistics\Model\Order[] $orders This list value is optionally assigned by the seller. When present, each element in the returned list contains seller-assigned information about an order (such as an order number). Because a package can contain all or part of one or more orders, this field provides a way for sellers to identify the packages that contain specific orders.
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets package_specification
     *
     * @return \Nopolabs\EBay\Sell\Logistics\Model\PackageSpecification
     */
    public function getPackageSpecification()
    {
        return $this->container['package_specification'];
    }

    /**
     * Sets package_specification
     *
     * @param \Nopolabs\EBay\Sell\Logistics\Model\PackageSpecification $package_specification package_specification
     *
     * @return $this
     */
    public function setPackageSpecification($package_specification)
    {
        $this->container['package_specification'] = $package_specification;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return \Nopolabs\EBay\Sell\Logistics\Model\PurchasedRate
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param \Nopolabs\EBay\Sell\Logistics\Model\PurchasedRate $rate rate
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets return_to
     *
     * @return \Nopolabs\EBay\Sell\Logistics\Model\Contact
     */
    public function getReturnTo()
    {
        return $this->container['return_to'];
    }

    /**
     * Sets return_to
     *
     * @param \Nopolabs\EBay\Sell\Logistics\Model\Contact $return_to return_to
     *
     * @return $this
     */
    public function setReturnTo($return_to)
    {
        $this->container['return_to'] = $return_to;

        return $this;
    }

    /**
     * Gets ship_from
     *
     * @return \Nopolabs\EBay\Sell\Logistics\Model\Contact
     */
    public function getShipFrom()
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from
     *
     * @param \Nopolabs\EBay\Sell\Logistics\Model\Contact $ship_from ship_from
     *
     * @return $this
     */
    public function setShipFrom($ship_from)
    {
        $this->container['ship_from'] = $ship_from;

        return $this;
    }

    /**
     * Gets shipment_id
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string $shipment_id The unique eBay-assigned ID for the shipment. The ID is generated when the shipment is created by a call to createFromShippingQuote.
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets shipment_tracking_number
     *
     * @return string
     */
    public function getShipmentTrackingNumber()
    {
        return $this->container['shipment_tracking_number'];
    }

    /**
     * Sets shipment_tracking_number
     *
     * @param string $shipment_tracking_number A unique carrier-assigned ID string that can be used to track the shipment.
     *
     * @return $this
     */
    public function setShipmentTrackingNumber($shipment_tracking_number)
    {
        $this->container['shipment_tracking_number'] = $shipment_tracking_number;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return \Nopolabs\EBay\Sell\Logistics\Model\Contact
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \Nopolabs\EBay\Sell\Logistics\Model\Contact $ship_to ship_to
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

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



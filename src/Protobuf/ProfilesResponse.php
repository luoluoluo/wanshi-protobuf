<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resume.proto

namespace Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protobuf.ProfilesResponse</code>
 */
class ProfilesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .protobuf.Profile items = 1;</code>
     */
    private $items;
    /**
     * Generated from protobuf field <code>int32 total_items = 3;</code>
     */
    private $total_items = 0;

    public function __construct() {
        \GPBMetadata\Resume::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .protobuf.Profile items = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .protobuf.Profile items = 1;</code>
     * @param \Protobuf\Profile[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protobuf\Profile::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 total_items = 3;</code>
     * @return int
     */
    public function getTotalItems()
    {
        return $this->total_items;
    }

    /**
     * Generated from protobuf field <code>int32 total_items = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalItems($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_items = $var;

        return $this;
    }

}


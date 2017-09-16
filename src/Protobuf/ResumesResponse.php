<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resume.proto

namespace Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protobuf.ResumesResponse</code>
 */
class ResumesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .protobuf.ResumesResponse.Resume items = 1;</code>
     */
    private $items;
    /**
     * Generated from protobuf field <code>int32 total_pages = 2;</code>
     */
    private $total_pages = 0;
    /**
     * Generated from protobuf field <code>int32 total_items = 3;</code>
     */
    private $total_items = 0;
    /**
     * Generated from protobuf field <code>int32 next = 4;</code>
     */
    private $next = 0;
    /**
     * Generated from protobuf field <code>int32 before = 5;</code>
     */
    private $before = 0;
    /**
     * Generated from protobuf field <code>int32 current = 6;</code>
     */
    private $current = 0;

    public function __construct() {
        \GPBMetadata\Resume::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .protobuf.ResumesResponse.Resume items = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .protobuf.ResumesResponse.Resume items = 1;</code>
     * @param \Protobuf\ResumesResponse_Resume[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protobuf\ResumesResponse_Resume::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 total_pages = 2;</code>
     * @return int
     */
    public function getTotalPages()
    {
        return $this->total_pages;
    }

    /**
     * Generated from protobuf field <code>int32 total_pages = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalPages($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_pages = $var;

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

    /**
     * Generated from protobuf field <code>int32 next = 4;</code>
     * @return int
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * Generated from protobuf field <code>int32 next = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNext($var)
    {
        GPBUtil::checkInt32($var);
        $this->next = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 before = 5;</code>
     * @return int
     */
    public function getBefore()
    {
        return $this->before;
    }

    /**
     * Generated from protobuf field <code>int32 before = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setBefore($var)
    {
        GPBUtil::checkInt32($var);
        $this->before = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 current = 6;</code>
     * @return int
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * Generated from protobuf field <code>int32 current = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCurrent($var)
    {
        GPBUtil::checkInt32($var);
        $this->current = $var;

        return $this;
    }

}


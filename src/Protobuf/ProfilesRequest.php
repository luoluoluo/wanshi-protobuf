<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resume.proto

namespace Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protobuf.ProfilesRequest</code>
 */
class ProfilesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 page = 1;</code>
     */
    private $page = 0;
    /**
     * Generated from protobuf field <code>int32 size = 2;</code>
     */
    private $size = 0;

    public function __construct() {
        \GPBMetadata\Resume::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int32 page = 1;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Generated from protobuf field <code>int32 page = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkInt32($var);
        $this->page = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 size = 2;</code>
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Generated from protobuf field <code>int32 size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->size = $var;

        return $this;
    }

}


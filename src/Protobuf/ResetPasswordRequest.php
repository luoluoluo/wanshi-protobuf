<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account.proto

namespace Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protobuf.ResetPasswordRequest</code>
 */
class ResetPasswordRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 uid = 1;</code>
     */
    private $uid = 0;

    public function __construct() {
        \GPBMetadata\Account::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int32 uid = 1;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>int32 uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkInt32($var);
        $this->uid = $var;

        return $this;
    }

}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/admin/search/v1/search.proto

namespace Couchbase\Protostellar\Generated\Admin\Search\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.admin.search.v1.AllowIndexQueryingRequest</code>
 */
class AllowIndexQueryingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>optional string bucket_name = 2;</code>
     */
    protected $bucket_name = null;
    /**
     * Generated from protobuf field <code>optional string scope_name = 3;</code>
     */
    protected $scope_name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type string $bucket_name
     *     @type string $scope_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Couchbase\Admin\Search\V1\Search::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string bucket_name = 2;</code>
     * @return string
     */
    public function getBucketName()
    {
        return isset($this->bucket_name) ? $this->bucket_name : '';
    }

    public function hasBucketName()
    {
        return isset($this->bucket_name);
    }

    public function clearBucketName()
    {
        unset($this->bucket_name);
    }

    /**
     * Generated from protobuf field <code>optional string bucket_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBucketName($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string scope_name = 3;</code>
     * @return string
     */
    public function getScopeName()
    {
        return isset($this->scope_name) ? $this->scope_name : '';
    }

    public function hasScopeName()
    {
        return isset($this->scope_name);
    }

    public function clearScopeName()
    {
        unset($this->scope_name);
    }

    /**
     * Generated from protobuf field <code>optional string scope_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setScopeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope_name = $var;

        return $this;
    }

}


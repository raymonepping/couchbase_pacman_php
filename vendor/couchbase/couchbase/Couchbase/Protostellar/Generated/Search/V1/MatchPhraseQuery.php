<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/search/v1/search.proto

namespace Couchbase\Protostellar\Generated\Search\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.search.v1.MatchPhraseQuery</code>
 */
class MatchPhraseQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional float boost = 1;</code>
     */
    protected $boost = null;
    /**
     * Generated from protobuf field <code>optional string field = 2;</code>
     */
    protected $field = null;
    /**
     * Generated from protobuf field <code>string phrase = 3;</code>
     */
    protected $phrase = '';
    /**
     * Generated from protobuf field <code>optional string analyzer = 4;</code>
     */
    protected $analyzer = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $boost
     *     @type string $field
     *     @type string $phrase
     *     @type string $analyzer
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Couchbase\Search\V1\Search::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional float boost = 1;</code>
     * @return float
     */
    public function getBoost()
    {
        return isset($this->boost) ? $this->boost : 0.0;
    }

    public function hasBoost()
    {
        return isset($this->boost);
    }

    public function clearBoost()
    {
        unset($this->boost);
    }

    /**
     * Generated from protobuf field <code>optional float boost = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setBoost($var)
    {
        GPBUtil::checkFloat($var);
        $this->boost = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string field = 2;</code>
     * @return string
     */
    public function getField()
    {
        return isset($this->field) ? $this->field : '';
    }

    public function hasField()
    {
        return isset($this->field);
    }

    public function clearField()
    {
        unset($this->field);
    }

    /**
     * Generated from protobuf field <code>optional string field = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phrase = 3;</code>
     * @return string
     */
    public function getPhrase()
    {
        return $this->phrase;
    }

    /**
     * Generated from protobuf field <code>string phrase = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPhrase($var)
    {
        GPBUtil::checkString($var, True);
        $this->phrase = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string analyzer = 4;</code>
     * @return string
     */
    public function getAnalyzer()
    {
        return isset($this->analyzer) ? $this->analyzer : '';
    }

    public function hasAnalyzer()
    {
        return isset($this->analyzer);
    }

    public function clearAnalyzer()
    {
        unset($this->analyzer);
    }

    /**
     * Generated from protobuf field <code>optional string analyzer = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAnalyzer($var)
    {
        GPBUtil::checkString($var, True);
        $this->analyzer = $var;

        return $this;
    }

}


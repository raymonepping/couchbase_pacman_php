<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/admin/bucket/v1/bucket.proto

namespace Couchbase\Protostellar\Generated\Admin\Bucket\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>couchbase.admin.bucket.v1.BucketType</code>
 */
class BucketType
{
    /**
     * Generated from protobuf enum <code>BUCKET_TYPE_COUCHBASE = 0;</code>
     */
    const BUCKET_TYPE_COUCHBASE = 0;
    /**
     * Generated from protobuf enum <code>BUCKET_TYPE_EPHEMERAL = 1;</code>
     */
    const BUCKET_TYPE_EPHEMERAL = 1;

    private static $valueToName = [
        self::BUCKET_TYPE_COUCHBASE => 'BUCKET_TYPE_COUCHBASE',
        self::BUCKET_TYPE_EPHEMERAL => 'BUCKET_TYPE_EPHEMERAL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


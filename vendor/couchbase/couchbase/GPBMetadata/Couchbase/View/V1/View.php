<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/view/v1/view.proto

namespace GPBMetadata\Couchbase\View\V1;

class View
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
±
couchbase/view/v1/view.protocouchbase.view.v1" 	
ViewQueryRequest
bucket_name (	
design_document_name (	
	view_name (	
skip (H 
limit (HR
scan_consistency (23.couchbase.view.v1.ViewQueryRequest.ScanConsistencyH
reduce (H
group (H
group_level	 (H
key
 (H
keys (
	start_key (H
end_key (H
inclusive_end (H	
start_key_doc_id (	H

end_key_doc_id (	HD
on_error (2-.couchbase.view.v1.ViewQueryRequest.ErrorModeH
debug (HE
	namespace (2-.couchbase.view.v1.ViewQueryRequest.NamespaceH=
order (2).couchbase.view.v1.ViewQueryRequest.OrderH"y
ScanConsistency 
SCAN_CONSISTENCY_NOT_BOUNDED !
SCAN_CONSISTENCY_REQUEST_PLUS!
SCAN_CONSISTENCY_UPDATE_AFTER"9
	ErrorMode
ERROR_MODE_CONTINUE 
ERROR_MODE_STOP"@
	Namespace
NAMESPACE_PRODUCTION 
NAMESPACE_DEVELOPMENT"2
Order
ORDER_ASCENDING 
ORDER_DESCENDINGB
_skipB
_limitB
_scan_consistencyB	
_reduceB
_groupB
_group_levelB
_keyB

_start_keyB

_end_keyB
_inclusive_endB
_start_key_doc_idB
_end_key_doc_idB
	_on_errorB
_debugB

_namespaceB
_order"þ
ViewQueryResponse6
rows (2(.couchbase.view.v1.ViewQueryResponse.RowE
	meta_data (2-.couchbase.view.v1.ViewQueryResponse.MetaDataH -
Row

id (	
key (
value (-
MetaData

total_rows (
debug (B

_meta_data2i
ViewServiceZ
	ViewQuery#.couchbase.view.v1.ViewQueryRequest$.couchbase.view.v1.ViewQueryResponse" 0Bæ
)com.couchbase.client.protostellar.view.v1PZ<github.com/couchbase/goprotostellar/genproto/view_v1;view_v1ªCouchbase.Protostellar.View.V1Ê(Couchbase\\Protostellar\\Generated\\View\\V1ê,Couchbase::Protostellar::Generated::View::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}


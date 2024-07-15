<?php

use Couchbase\Cluster;
use Couchbase\ClusterOptions;
use Couchbase\Exception\DocumentNotFoundException;
use Couchbase\Exception\CouchbaseException;

class CouchbaseSessionHandler implements SessionHandlerInterface {
    private $cluster;
    private $bucket;
    private $collection;

    public function __construct($connectionString, $username, $password, $bucketName, $scopeName, $collectionName) {
        $options = new ClusterOptions();
        $options->credentials($username, $password);
        $options->applyProfile("wan_development");

        $this->cluster = new Cluster($connectionString, $options);
        $this->bucket = $this->cluster->bucket($bucketName);
        $this->collection = $this->bucket->scope($scopeName)->collection($collectionName);
    }

    public function open($savePath, $sessionName): bool {
        return true;
    }

    public function close(): bool {
        return true;
    }

    public function read($id): string {
        try {
            $result = $this->collection->get($id);
            return $result->content()['data'] ?? '';
        } catch (DocumentNotFoundException $e) {
            return '';
        } catch (CouchbaseException $e) {
            error_log("Couchbase read error: " . $e->getMessage());
            return '';
        }
    }

    public function write($id, $data): bool {
        try {
            $this->collection->upsert($id, ['data' => $data, 'timestamp' => time()]);
            return true;
        } catch (CouchbaseException $e) {
            error_log("Couchbase write error: " . $e->getMessage());
            return false;
        }
    }

    public function destroy($id): bool {
        try {
            $this->collection->remove($id);
            return true;
        } catch (DocumentNotFoundException $e) {
            return true;
        } catch (CouchbaseException $e) {
            error_log("Couchbase destroy error: " . $e->getMessage());
            return false;
        }
    }

    public function gc($maxlifetime): bool {
        // No action required for Couchbase
        return true;
    }
}
?>

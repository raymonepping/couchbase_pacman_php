<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Couchbase\Cluster;
use Couchbase\ClusterOptions;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$endpoint = $_ENV['COUCHBASE_ENDPOINT'] ?? null;
$username = $_ENV['COUCHBASE_USERNAME'] ?? null;
$password = $_ENV['COUCHBASE_PASSWORD'] ?? null;
$bucketName = $_ENV['COUCHBASE_BUCKET'] ?? 'demo';
$scopeName = $_ENV['COUCHBASE_SCOPE'] ?? 'games';
$collectionName = $_ENV['COUCHBASE_COLLECTION'] ?? 'pacman';

$options = new ClusterOptions();
$options->credentials($username, $password);
$options->applyProfile("wan_development");

try {
    $cluster = new Cluster($endpoint, $options);
    $bucket = $cluster->bucket($bucketName);
    $scope = $bucket->scope($scopeName);
    $collection = $scope->collection($collectionName);

    // Connection established, $collection can now be used
} catch (Exception $e) {
    error_log("Couchbase connection error: " . $e->getMessage());
    throw $e; // Rethrow exception after logging
}
?>

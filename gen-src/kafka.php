<?hh // strict
namespace slack\aws\kafka;

interface Kafka {
  public function CreateCluster(CreateClusterRequest $in): Awaitable<\Errors\Result<CreateClusterResponse>>;
  public function CreateConfiguration(CreateConfigurationRequest $in): Awaitable<\Errors\Result<CreateConfigurationResponse>>;
  public function DeleteCluster(DeleteClusterRequest $in): Awaitable<\Errors\Result<DeleteClusterResponse>>;
  public function DescribeCluster(DescribeClusterRequest $in): Awaitable<\Errors\Result<DescribeClusterResponse>>;
  public function DescribeClusterOperation(DescribeClusterOperationRequest $in): Awaitable<\Errors\Result<DescribeClusterOperationResponse>>;
  public function DescribeConfiguration(DescribeConfigurationRequest $in): Awaitable<\Errors\Result<DescribeConfigurationResponse>>;
  public function DescribeConfigurationRevision(DescribeConfigurationRevisionRequest $in): Awaitable<\Errors\Result<DescribeConfigurationRevisionResponse>>;
  public function GetBootstrapBrokers(GetBootstrapBrokersRequest $in): Awaitable<\Errors\Result<GetBootstrapBrokersResponse>>;
  public function ListClusterOperations(ListClusterOperationsRequest $in): Awaitable<\Errors\Result<ListClusterOperationsResponse>>;
  public function ListClusters(ListClustersRequest $in): Awaitable<\Errors\Result<ListClustersResponse>>;
  public function ListConfigurationRevisions(ListConfigurationRevisionsRequest $in): Awaitable<\Errors\Result<ListConfigurationRevisionsResponse>>;
  public function ListConfigurations(ListConfigurationsRequest $in): Awaitable<\Errors\Result<ListConfigurationsResponse>>;
  public function ListKafkaVersions(ListKafkaVersionsRequest $in): Awaitable<\Errors\Result<ListKafkaVersionsResponse>>;
  public function ListNodes(ListNodesRequest $in): Awaitable<\Errors\Result<ListNodesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UpdateBrokerCount(UpdateBrokerCountRequest $in): Awaitable<\Errors\Result<UpdateBrokerCountResponse>>;
  public function UpdateBrokerStorage(UpdateBrokerStorageRequest $in): Awaitable<\Errors\Result<UpdateBrokerStorageResponse>>;
  public function UpdateClusterConfiguration(UpdateClusterConfigurationRequest $in): Awaitable<\Errors\Result<UpdateClusterConfigurationResponse>>;
  public function UpdateMonitoring(UpdateMonitoringRequest $in): Awaitable<\Errors\Result<UpdateMonitoringResponse>>;
}

class BadRequestException {
  public ?__string $invalid_parameter;
  public ?__string $message;

  public function __construct(shape(
    ?'invalid_parameter' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->invalid_parameter = $s['invalid_parameter'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type BrokerAZDistribution = string;

class BrokerEBSVolumeInfo {
  public ?__string $kafka_broker_node_id;
  public ?__integer $volume_size_gb;

  public function __construct(shape(
    ?'kafka_broker_node_id' => ?__string,
    ?'volume_size_gb' => ?__integer,
  ) $s = shape()) {
    $this->kafka_broker_node_id = $s['kafka_broker_node_id'] ?? '';
    $this->volume_size_gb = $s['volume_size_gb'] ?? 0;
  }
}

class BrokerLogs {
  public ?CloudWatchLogs $cloud_watch_logs;
  public ?Firehose $firehose;
  public ?S3 $s_3;

  public function __construct(shape(
    ?'cloud_watch_logs' => ?CloudWatchLogs,
    ?'firehose' => ?Firehose,
    ?'s_3' => ?S3,
  ) $s = shape()) {
    $this->cloud_watch_logs = $s['cloud_watch_logs'] ?? null;
    $this->firehose = $s['firehose'] ?? null;
    $this->s_3 = $s['s_3'] ?? null;
  }
}

class BrokerNodeGroupInfo {
  public ?BrokerAZDistribution $broker_az_distribution;
  public ?__listOf__string $client_subnets;
  public ?__stringMin5Max32 $instance_type;
  public ?__listOf__string $security_groups;
  public ?StorageInfo $storage_info;

  public function __construct(shape(
    ?'broker_az_distribution' => ?BrokerAZDistribution,
    ?'client_subnets' => ?__listOf__string,
    ?'instance_type' => ?__stringMin5Max32,
    ?'security_groups' => ?__listOf__string,
    ?'storage_info' => ?StorageInfo,
  ) $s = shape()) {
    $this->broker_az_distribution = $s['broker_az_distribution'] ?? '';
    $this->client_subnets = $s['client_subnets'] ?? vec[];
    $this->instance_type = $s['instance_type'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->storage_info = $s['storage_info'] ?? null;
  }
}

class BrokerNodeInfo {
  public ?__string $attached_eni_id;
  public ?__double $broker_id;
  public ?__string $client_subnet;
  public ?__string $client_vpc_ip_address;
  public ?BrokerSoftwareInfo $current_broker_software_info;
  public ?__listOf__string $endpoints;

  public function __construct(shape(
    ?'attached_eni_id' => ?__string,
    ?'broker_id' => ?__double,
    ?'client_subnet' => ?__string,
    ?'client_vpc_ip_address' => ?__string,
    ?'current_broker_software_info' => ?BrokerSoftwareInfo,
    ?'endpoints' => ?__listOf__string,
  ) $s = shape()) {
    $this->attached_eni_id = $s['attached_eni_id'] ?? '';
    $this->broker_id = $s['broker_id'] ?? 0.0;
    $this->client_subnet = $s['client_subnet'] ?? '';
    $this->client_vpc_ip_address = $s['client_vpc_ip_address'] ?? '';
    $this->current_broker_software_info = $s['current_broker_software_info'] ?? null;
    $this->endpoints = $s['endpoints'] ?? vec[];
  }
}

class BrokerSoftwareInfo {
  public ?__string $configuration_arn;
  public ?__long $configuration_revision;
  public ?__string $kafka_version;

  public function __construct(shape(
    ?'configuration_arn' => ?__string,
    ?'configuration_revision' => ?__long,
    ?'kafka_version' => ?__string,
  ) $s = shape()) {
    $this->configuration_arn = $s['configuration_arn'] ?? '';
    $this->configuration_revision = $s['configuration_revision'] ?? 0;
    $this->kafka_version = $s['kafka_version'] ?? '';
  }
}

class ClientAuthentication {
  public ?Tls $tls;

  public function __construct(shape(
    ?'tls' => ?Tls,
  ) $s = shape()) {
    $this->tls = $s['tls'] ?? null;
  }
}

type ClientBroker = string;

class CloudWatchLogs {
  public ?__boolean $enabled;
  public ?__string $log_group;

  public function __construct(shape(
    ?'enabled' => ?__boolean,
    ?'log_group' => ?__string,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->log_group = $s['log_group'] ?? '';
  }
}

class ClusterInfo {
  public ?__string $active_operation_arn;
  public ?BrokerNodeGroupInfo $broker_node_group_info;
  public ?ClientAuthentication $client_authentication;
  public ?__string $cluster_arn;
  public ?__string $cluster_name;
  public ?__timestampIso8601 $creation_time;
  public ?BrokerSoftwareInfo $current_broker_software_info;
  public ?__string $current_version;
  public ?EncryptionInfo $encryption_info;
  public ?EnhancedMonitoring $enhanced_monitoring;
  public ?LoggingInfo $logging_info;
  public ?__integer $number_of_broker_nodes;
  public ?OpenMonitoring $open_monitoring;
  public ?ClusterState $state;
  public ?__mapOf__string $tags;
  public ?__string $zookeeper_connect_string;

  public function __construct(shape(
    ?'active_operation_arn' => ?__string,
    ?'broker_node_group_info' => ?BrokerNodeGroupInfo,
    ?'client_authentication' => ?ClientAuthentication,
    ?'cluster_arn' => ?__string,
    ?'cluster_name' => ?__string,
    ?'creation_time' => ?__timestampIso8601,
    ?'current_broker_software_info' => ?BrokerSoftwareInfo,
    ?'current_version' => ?__string,
    ?'encryption_info' => ?EncryptionInfo,
    ?'enhanced_monitoring' => ?EnhancedMonitoring,
    ?'logging_info' => ?LoggingInfo,
    ?'number_of_broker_nodes' => ?__integer,
    ?'open_monitoring' => ?OpenMonitoring,
    ?'state' => ?ClusterState,
    ?'tags' => ?__mapOf__string,
    ?'zookeeper_connect_string' => ?__string,
  ) $s = shape()) {
    $this->active_operation_arn = $s['active_operation_arn'] ?? '';
    $this->broker_node_group_info = $s['broker_node_group_info'] ?? null;
    $this->client_authentication = $s['client_authentication'] ?? null;
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->current_broker_software_info = $s['current_broker_software_info'] ?? null;
    $this->current_version = $s['current_version'] ?? '';
    $this->encryption_info = $s['encryption_info'] ?? null;
    $this->enhanced_monitoring = $s['enhanced_monitoring'] ?? '';
    $this->logging_info = $s['logging_info'] ?? null;
    $this->number_of_broker_nodes = $s['number_of_broker_nodes'] ?? 0;
    $this->open_monitoring = $s['open_monitoring'] ?? null;
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->zookeeper_connect_string = $s['zookeeper_connect_string'] ?? '';
  }
}

class ClusterOperationInfo {
  public ?__string $client_request_id;
  public ?__string $cluster_arn;
  public ?__timestampIso8601 $creation_time;
  public ?__timestampIso8601 $end_time;
  public ?ErrorInfo $error_info;
  public ?__string $operation_arn;
  public ?__string $operation_state;
  public ?__string $operation_type;
  public ?MutableClusterInfo $source_cluster_info;
  public ?MutableClusterInfo $target_cluster_info;

  public function __construct(shape(
    ?'client_request_id' => ?__string,
    ?'cluster_arn' => ?__string,
    ?'creation_time' => ?__timestampIso8601,
    ?'end_time' => ?__timestampIso8601,
    ?'error_info' => ?ErrorInfo,
    ?'operation_arn' => ?__string,
    ?'operation_state' => ?__string,
    ?'operation_type' => ?__string,
    ?'source_cluster_info' => ?MutableClusterInfo,
    ?'target_cluster_info' => ?MutableClusterInfo,
  ) $s = shape()) {
    $this->client_request_id = $s['client_request_id'] ?? '';
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->end_time = $s['end_time'] ?? 0;
    $this->error_info = $s['error_info'] ?? null;
    $this->operation_arn = $s['operation_arn'] ?? '';
    $this->operation_state = $s['operation_state'] ?? '';
    $this->operation_type = $s['operation_type'] ?? '';
    $this->source_cluster_info = $s['source_cluster_info'] ?? null;
    $this->target_cluster_info = $s['target_cluster_info'] ?? null;
  }
}

type ClusterState = string;

class Configuration {
  public ?__string $arn;
  public ?__timestampIso8601 $creation_time;
  public ?__string $description;
  public ?__listOf__string $kafka_versions;
  public ?ConfigurationRevision $latest_revision;
  public ?__string $name;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_time' => ?__timestampIso8601,
    ?'description' => ?__string,
    ?'kafka_versions' => ?__listOf__string,
    ?'latest_revision' => ?ConfigurationRevision,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->kafka_versions = $s['kafka_versions'] ?? vec[];
    $this->latest_revision = $s['latest_revision'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

class ConfigurationInfo {
  public ?__string $arn;
  public ?__long $revision;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'revision' => ?__long,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->revision = $s['revision'] ?? 0;
  }
}

class ConfigurationRevision {
  public ?__timestampIso8601 $creation_time;
  public ?__string $description;
  public ?__long $revision;

  public function __construct(shape(
    ?'creation_time' => ?__timestampIso8601,
    ?'description' => ?__string,
    ?'revision' => ?__long,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->revision = $s['revision'] ?? 0;
  }
}

class ConflictException {
  public ?__string $invalid_parameter;
  public ?__string $message;

  public function __construct(shape(
    ?'invalid_parameter' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->invalid_parameter = $s['invalid_parameter'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class CreateClusterRequest {
  public ?BrokerNodeGroupInfo $broker_node_group_info;
  public ?ClientAuthentication $client_authentication;
  public ?__stringMin1Max64 $cluster_name;
  public ?ConfigurationInfo $configuration_info;
  public ?EncryptionInfo $encryption_info;
  public ?EnhancedMonitoring $enhanced_monitoring;
  public ?__stringMin1Max128 $kafka_version;
  public ?LoggingInfo $logging_info;
  public ?__integerMin1Max15 $number_of_broker_nodes;
  public ?OpenMonitoringInfo $open_monitoring;
  public ?__mapOf__string $tags;

  public function __construct(shape(
    ?'broker_node_group_info' => ?BrokerNodeGroupInfo,
    ?'client_authentication' => ?ClientAuthentication,
    ?'cluster_name' => ?__stringMin1Max64,
    ?'configuration_info' => ?ConfigurationInfo,
    ?'encryption_info' => ?EncryptionInfo,
    ?'enhanced_monitoring' => ?EnhancedMonitoring,
    ?'kafka_version' => ?__stringMin1Max128,
    ?'logging_info' => ?LoggingInfo,
    ?'number_of_broker_nodes' => ?__integerMin1Max15,
    ?'open_monitoring' => ?OpenMonitoringInfo,
    ?'tags' => ?__mapOf__string,
  ) $s = shape()) {
    $this->broker_node_group_info = $s['broker_node_group_info'] ?? null;
    $this->client_authentication = $s['client_authentication'] ?? null;
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->configuration_info = $s['configuration_info'] ?? null;
    $this->encryption_info = $s['encryption_info'] ?? null;
    $this->enhanced_monitoring = $s['enhanced_monitoring'] ?? '';
    $this->kafka_version = $s['kafka_version'] ?? '';
    $this->logging_info = $s['logging_info'] ?? null;
    $this->number_of_broker_nodes = $s['number_of_broker_nodes'] ?? 0;
    $this->open_monitoring = $s['open_monitoring'] ?? null;
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateClusterResponse {
  public ?__string $cluster_arn;
  public ?__string $cluster_name;
  public ?ClusterState $state;

  public function __construct(shape(
    ?'cluster_arn' => ?__string,
    ?'cluster_name' => ?__string,
    ?'state' => ?ClusterState,
  ) $s = shape()) {
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

class CreateConfigurationRequest {
  public ?__string $description;
  public ?__listOf__string $kafka_versions;
  public ?__string $name;
  public ?__blob $server_properties;

  public function __construct(shape(
    ?'description' => ?__string,
    ?'kafka_versions' => ?__listOf__string,
    ?'name' => ?__string,
    ?'server_properties' => ?__blob,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->kafka_versions = $s['kafka_versions'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->server_properties = $s['server_properties'] ?? '';
  }
}

class CreateConfigurationResponse {
  public ?__string $arn;
  public ?__timestampIso8601 $creation_time;
  public ?ConfigurationRevision $latest_revision;
  public ?__string $name;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_time' => ?__timestampIso8601,
    ?'latest_revision' => ?ConfigurationRevision,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->latest_revision = $s['latest_revision'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

class DeleteClusterRequest {
  public ?__string $cluster_arn;
  public ?__string $current_version;

  public function __construct(shape(
    ?'cluster_arn' => ?__string,
    ?'current_version' => ?__string,
  ) $s = shape()) {
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->current_version = $s['current_version'] ?? '';
  }
}

class DeleteClusterResponse {
  public ?__string $cluster_arn;
  public ?ClusterState $state;

  public function __construct(shape(
    ?'cluster_arn' => ?__string,
    ?'state' => ?ClusterState,
  ) $s = shape()) {
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

class DescribeClusterOperationRequest {
  public ?__string $cluster_operation_arn;

  public function __construct(shape(
    ?'cluster_operation_arn' => ?__string,
  ) $s = shape()) {
    $this->cluster_operation_arn = $s['cluster_operation_arn'] ?? '';
  }
}

class DescribeClusterOperationResponse {
  public ?ClusterOperationInfo $cluster_operation_info;

  public function __construct(shape(
    ?'cluster_operation_info' => ?ClusterOperationInfo,
  ) $s = shape()) {
    $this->cluster_operation_info = $s['cluster_operation_info'] ?? null;
  }
}

class DescribeClusterRequest {
  public ?__string $cluster_arn;

  public function __construct(shape(
    ?'cluster_arn' => ?__string,
  ) $s = shape()) {
    $this->cluster_arn = $s['cluster_arn'] ?? '';
  }
}

class DescribeClusterResponse {
  public ?ClusterInfo $cluster_info;

  public function __construct(shape(
    ?'cluster_info' => ?ClusterInfo,
  ) $s = shape()) {
    $this->cluster_info = $s['cluster_info'] ?? null;
  }
}

class DescribeConfigurationRequest {
  public ?__string $arn;

  public function __construct(shape(
    ?'arn' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class DescribeConfigurationResponse {
  public ?__string $arn;
  public ?__timestampIso8601 $creation_time;
  public ?__string $description;
  public ?__listOf__string $kafka_versions;
  public ?ConfigurationRevision $latest_revision;
  public ?__string $name;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_time' => ?__timestampIso8601,
    ?'description' => ?__string,
    ?'kafka_versions' => ?__listOf__string,
    ?'latest_revision' => ?ConfigurationRevision,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->kafka_versions = $s['kafka_versions'] ?? vec[];
    $this->latest_revision = $s['latest_revision'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

class DescribeConfigurationRevisionRequest {
  public ?__string $arn;
  public ?__long $revision;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'revision' => ?__long,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->revision = $s['revision'] ?? 0;
  }
}

class DescribeConfigurationRevisionResponse {
  public ?__string $arn;
  public ?__timestampIso8601 $creation_time;
  public ?__string $description;
  public ?__long $revision;
  public ?__blob $server_properties;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_time' => ?__timestampIso8601,
    ?'description' => ?__string,
    ?'revision' => ?__long,
    ?'server_properties' => ?__blob,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->revision = $s['revision'] ?? 0;
    $this->server_properties = $s['server_properties'] ?? '';
  }
}

class EBSStorageInfo {
  public ?__integerMin1Max16384 $volume_size;

  public function __construct(shape(
    ?'volume_size' => ?__integerMin1Max16384,
  ) $s = shape()) {
    $this->volume_size = $s['volume_size'] ?? 0;
  }
}

class EncryptionAtRest {
  public ?__string $data_volume_kms_key_id;

  public function __construct(shape(
    ?'data_volume_kms_key_id' => ?__string,
  ) $s = shape()) {
    $this->data_volume_kms_key_id = $s['data_volume_kms_key_id'] ?? '';
  }
}

class EncryptionInTransit {
  public ?ClientBroker $client_broker;
  public ?__boolean $in_cluster;

  public function __construct(shape(
    ?'client_broker' => ?ClientBroker,
    ?'in_cluster' => ?__boolean,
  ) $s = shape()) {
    $this->client_broker = $s['client_broker'] ?? '';
    $this->in_cluster = $s['in_cluster'] ?? false;
  }
}

class EncryptionInfo {
  public ?EncryptionAtRest $encryption_at_rest;
  public ?EncryptionInTransit $encryption_in_transit;

  public function __construct(shape(
    ?'encryption_at_rest' => ?EncryptionAtRest,
    ?'encryption_in_transit' => ?EncryptionInTransit,
  ) $s = shape()) {
    $this->encryption_at_rest = $s['encryption_at_rest'] ?? null;
    $this->encryption_in_transit = $s['encryption_in_transit'] ?? null;
  }
}

type EnhancedMonitoring = string;

class Error {
  public ?__string $invalid_parameter;
  public ?__string $message;

  public function __construct(shape(
    ?'invalid_parameter' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->invalid_parameter = $s['invalid_parameter'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class ErrorInfo {
  public ?__string $error_code;
  public ?__string $error_string;

  public function __construct(shape(
    ?'error_code' => ?__string,
    ?'error_string' => ?__string,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_string = $s['error_string'] ?? '';
  }
}

class Firehose {
  public ?__string $delivery_stream;
  public ?__boolean $enabled;

  public function __construct(shape(
    ?'delivery_stream' => ?__string,
    ?'enabled' => ?__boolean,
  ) $s = shape()) {
    $this->delivery_stream = $s['delivery_stream'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
  }
}

class ForbiddenException {
  public ?__string $invalid_parameter;
  public ?__string $message;

  public function __construct(shape(
    ?'invalid_parameter' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->invalid_parameter = $s['invalid_parameter'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class GetBootstrapBrokersRequest {
  public ?__string $cluster_arn;

  public function __construct(shape(
    ?'cluster_arn' => ?__string,
  ) $s = shape()) {
    $this->cluster_arn = $s['cluster_arn'] ?? '';
  }
}

class GetBootstrapBrokersResponse {
  public ?__string $bootstrap_broker_string;
  public ?__string $bootstrap_broker_string_tls;

  public function __construct(shape(
    ?'bootstrap_broker_string' => ?__string,
    ?'bootstrap_broker_string_tls' => ?__string,
  ) $s = shape()) {
    $this->bootstrap_broker_string = $s['bootstrap_broker_string'] ?? '';
    $this->bootstrap_broker_string_tls = $s['bootstrap_broker_string_tls'] ?? '';
  }
}

class InternalServerErrorException {
  public ?__string $invalid_parameter;
  public ?__string $message;

  public function __construct(shape(
    ?'invalid_parameter' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->invalid_parameter = $s['invalid_parameter'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class JmxExporter {
  public ?__boolean $enabled_in_broker;

  public function __construct(shape(
    ?'enabled_in_broker' => ?__boolean,
  ) $s = shape()) {
    $this->enabled_in_broker = $s['enabled_in_broker'] ?? false;
  }
}

class JmxExporterInfo {
  public ?__boolean $enabled_in_broker;

  public function __construct(shape(
    ?'enabled_in_broker' => ?__boolean,
  ) $s = shape()) {
    $this->enabled_in_broker = $s['enabled_in_broker'] ?? false;
  }
}

class KafkaVersion {
  public ?KafkaVersionStatus $status;
  public ?__string $version;

  public function __construct(shape(
    ?'status' => ?KafkaVersionStatus,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type KafkaVersionStatus = string;

class ListClusterOperationsRequest {
  public ?__string $cluster_arn;
  public ?MaxResults $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'cluster_arn' => ?__string,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListClusterOperationsResponse {
  public ?__listOfClusterOperationInfo $cluster_operation_info_list;
  public ?__string $next_token;

  public function __construct(shape(
    ?'cluster_operation_info_list' => ?__listOfClusterOperationInfo,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->cluster_operation_info_list = $s['cluster_operation_info_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListClustersRequest {
  public ?__string $cluster_name_filter;
  public ?MaxResults $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'cluster_name_filter' => ?__string,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->cluster_name_filter = $s['cluster_name_filter'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListClustersResponse {
  public ?__listOfClusterInfo $cluster_info_list;
  public ?__string $next_token;

  public function __construct(shape(
    ?'cluster_info_list' => ?__listOfClusterInfo,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->cluster_info_list = $s['cluster_info_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListConfigurationRevisionsRequest {
  public ?__string $arn;
  public ?MaxResults $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListConfigurationRevisionsResponse {
  public ?__string $next_token;
  public ?__listOfConfigurationRevision $revisions;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'revisions' => ?__listOfConfigurationRevision,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->revisions = $s['revisions'] ?? vec[];
  }
}

class ListConfigurationsRequest {
  public ?MaxResults $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListConfigurationsResponse {
  public ?__listOfConfiguration $configurations;
  public ?__string $next_token;

  public function __construct(shape(
    ?'configurations' => ?__listOfConfiguration,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->configurations = $s['configurations'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListKafkaVersionsRequest {
  public ?MaxResults $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListKafkaVersionsResponse {
  public ?__listOfKafkaVersion $kafka_versions;
  public ?__string $next_token;

  public function __construct(shape(
    ?'kafka_versions' => ?__listOfKafkaVersion,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->kafka_versions = $s['kafka_versions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListNodesRequest {
  public ?__string $cluster_arn;
  public ?MaxResults $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'cluster_arn' => ?__string,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListNodesResponse {
  public ?__string $next_token;
  public ?__listOfNodeInfo $node_info_list;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'node_info_list' => ?__listOfNodeInfo,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->node_info_list = $s['node_info_list'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public ?__string $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?__mapOf__string $tags;

  public function __construct(shape(
    ?'tags' => ?__mapOf__string,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class LoggingInfo {
  public ?BrokerLogs $broker_logs;

  public function __construct(shape(
    ?'broker_logs' => ?BrokerLogs,
  ) $s = shape()) {
    $this->broker_logs = $s['broker_logs'] ?? null;
  }
}

type MaxResults = int;

class MutableClusterInfo {
  public ?__listOfBrokerEBSVolumeInfo $broker_ebs_volume_info;
  public ?ConfigurationInfo $configuration_info;
  public ?EnhancedMonitoring $enhanced_monitoring;
  public ?LoggingInfo $logging_info;
  public ?__integer $number_of_broker_nodes;
  public ?OpenMonitoring $open_monitoring;

  public function __construct(shape(
    ?'broker_ebs_volume_info' => ?__listOfBrokerEBSVolumeInfo,
    ?'configuration_info' => ?ConfigurationInfo,
    ?'enhanced_monitoring' => ?EnhancedMonitoring,
    ?'logging_info' => ?LoggingInfo,
    ?'number_of_broker_nodes' => ?__integer,
    ?'open_monitoring' => ?OpenMonitoring,
  ) $s = shape()) {
    $this->broker_ebs_volume_info = $s['broker_ebs_volume_info'] ?? vec[];
    $this->configuration_info = $s['configuration_info'] ?? null;
    $this->enhanced_monitoring = $s['enhanced_monitoring'] ?? '';
    $this->logging_info = $s['logging_info'] ?? null;
    $this->number_of_broker_nodes = $s['number_of_broker_nodes'] ?? 0;
    $this->open_monitoring = $s['open_monitoring'] ?? null;
  }
}

class NodeExporter {
  public ?__boolean $enabled_in_broker;

  public function __construct(shape(
    ?'enabled_in_broker' => ?__boolean,
  ) $s = shape()) {
    $this->enabled_in_broker = $s['enabled_in_broker'] ?? false;
  }
}

class NodeExporterInfo {
  public ?__boolean $enabled_in_broker;

  public function __construct(shape(
    ?'enabled_in_broker' => ?__boolean,
  ) $s = shape()) {
    $this->enabled_in_broker = $s['enabled_in_broker'] ?? false;
  }
}

class NodeInfo {
  public ?__string $added_to_cluster_time;
  public ?BrokerNodeInfo $broker_node_info;
  public ?__string $instance_type;
  public ?__string $node_arn;
  public ?NodeType $node_type;
  public ?ZookeeperNodeInfo $zookeeper_node_info;

  public function __construct(shape(
    ?'added_to_cluster_time' => ?__string,
    ?'broker_node_info' => ?BrokerNodeInfo,
    ?'instance_type' => ?__string,
    ?'node_arn' => ?__string,
    ?'node_type' => ?NodeType,
    ?'zookeeper_node_info' => ?ZookeeperNodeInfo,
  ) $s = shape()) {
    $this->added_to_cluster_time = $s['added_to_cluster_time'] ?? '';
    $this->broker_node_info = $s['broker_node_info'] ?? null;
    $this->instance_type = $s['instance_type'] ?? '';
    $this->node_arn = $s['node_arn'] ?? '';
    $this->node_type = $s['node_type'] ?? '';
    $this->zookeeper_node_info = $s['zookeeper_node_info'] ?? null;
  }
}

type NodeType = string;

class NotFoundException {
  public ?__string $invalid_parameter;
  public ?__string $message;

  public function __construct(shape(
    ?'invalid_parameter' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->invalid_parameter = $s['invalid_parameter'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class OpenMonitoring {
  public ?Prometheus $prometheus;

  public function __construct(shape(
    ?'prometheus' => ?Prometheus,
  ) $s = shape()) {
    $this->prometheus = $s['prometheus'] ?? null;
  }
}

class OpenMonitoringInfo {
  public ?PrometheusInfo $prometheus;

  public function __construct(shape(
    ?'prometheus' => ?PrometheusInfo,
  ) $s = shape()) {
    $this->prometheus = $s['prometheus'] ?? null;
  }
}

class Prometheus {
  public ?JmxExporter $jmx_exporter;
  public ?NodeExporter $node_exporter;

  public function __construct(shape(
    ?'jmx_exporter' => ?JmxExporter,
    ?'node_exporter' => ?NodeExporter,
  ) $s = shape()) {
    $this->jmx_exporter = $s['jmx_exporter'] ?? null;
    $this->node_exporter = $s['node_exporter'] ?? null;
  }
}

class PrometheusInfo {
  public ?JmxExporterInfo $jmx_exporter;
  public ?NodeExporterInfo $node_exporter;

  public function __construct(shape(
    ?'jmx_exporter' => ?JmxExporterInfo,
    ?'node_exporter' => ?NodeExporterInfo,
  ) $s = shape()) {
    $this->jmx_exporter = $s['jmx_exporter'] ?? null;
    $this->node_exporter = $s['node_exporter'] ?? null;
  }
}

class S3 {
  public ?__string $bucket;
  public ?__boolean $enabled;
  public ?__string $prefix;

  public function __construct(shape(
    ?'bucket' => ?__string,
    ?'enabled' => ?__boolean,
    ?'prefix' => ?__string,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->prefix = $s['prefix'] ?? '';
  }
}

class ServiceUnavailableException {
  public ?__string $invalid_parameter;
  public ?__string $message;

  public function __construct(shape(
    ?'invalid_parameter' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->invalid_parameter = $s['invalid_parameter'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class StateInfo {
  public ?__string $code;
  public ?__string $message;

  public function __construct(shape(
    ?'code' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class StorageInfo {
  public ?EBSStorageInfo $ebs_storage_info;

  public function __construct(shape(
    ?'ebs_storage_info' => ?EBSStorageInfo,
  ) $s = shape()) {
    $this->ebs_storage_info = $s['ebs_storage_info'] ?? null;
  }
}

class TagResourceRequest {
  public ?__string $resource_arn;
  public ?__mapOf__string $tags;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
    ?'tags' => ?__mapOf__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class Tls {
  public ?__listOf__string $certificate_authority_arn_list;

  public function __construct(shape(
    ?'certificate_authority_arn_list' => ?__listOf__string,
  ) $s = shape()) {
    $this->certificate_authority_arn_list = $s['certificate_authority_arn_list'] ?? vec[];
  }
}

class TooManyRequestsException {
  public ?__string $invalid_parameter;
  public ?__string $message;

  public function __construct(shape(
    ?'invalid_parameter' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->invalid_parameter = $s['invalid_parameter'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class UnauthorizedException {
  public ?__string $invalid_parameter;
  public ?__string $message;

  public function __construct(shape(
    ?'invalid_parameter' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->invalid_parameter = $s['invalid_parameter'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceRequest {
  public ?__string $resource_arn;
  public ?__listOf__string $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
    ?'tag_keys' => ?__listOf__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UpdateBrokerCountRequest {
  public ?__string $cluster_arn;
  public ?__string $current_version;
  public ?__integerMin1Max15 $target_number_of_broker_nodes;

  public function __construct(shape(
    ?'cluster_arn' => ?__string,
    ?'current_version' => ?__string,
    ?'target_number_of_broker_nodes' => ?__integerMin1Max15,
  ) $s = shape()) {
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->current_version = $s['current_version'] ?? '';
    $this->target_number_of_broker_nodes = $s['target_number_of_broker_nodes'] ?? 0;
  }
}

class UpdateBrokerCountResponse {
  public ?__string $cluster_arn;
  public ?__string $cluster_operation_arn;

  public function __construct(shape(
    ?'cluster_arn' => ?__string,
    ?'cluster_operation_arn' => ?__string,
  ) $s = shape()) {
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->cluster_operation_arn = $s['cluster_operation_arn'] ?? '';
  }
}

class UpdateBrokerStorageRequest {
  public ?__string $cluster_arn;
  public ?__string $current_version;
  public ?__listOfBrokerEBSVolumeInfo $target_broker_ebs_volume_info;

  public function __construct(shape(
    ?'cluster_arn' => ?__string,
    ?'current_version' => ?__string,
    ?'target_broker_ebs_volume_info' => ?__listOfBrokerEBSVolumeInfo,
  ) $s = shape()) {
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->current_version = $s['current_version'] ?? '';
    $this->target_broker_ebs_volume_info = $s['target_broker_ebs_volume_info'] ?? vec[];
  }
}

class UpdateBrokerStorageResponse {
  public ?__string $cluster_arn;
  public ?__string $cluster_operation_arn;

  public function __construct(shape(
    ?'cluster_arn' => ?__string,
    ?'cluster_operation_arn' => ?__string,
  ) $s = shape()) {
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->cluster_operation_arn = $s['cluster_operation_arn'] ?? '';
  }
}

class UpdateClusterConfigurationRequest {
  public ?__string $cluster_arn;
  public ?ConfigurationInfo $configuration_info;
  public ?__string $current_version;

  public function __construct(shape(
    ?'cluster_arn' => ?__string,
    ?'configuration_info' => ?ConfigurationInfo,
    ?'current_version' => ?__string,
  ) $s = shape()) {
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->configuration_info = $s['configuration_info'] ?? null;
    $this->current_version = $s['current_version'] ?? '';
  }
}

class UpdateClusterConfigurationResponse {
  public ?__string $cluster_arn;
  public ?__string $cluster_operation_arn;

  public function __construct(shape(
    ?'cluster_arn' => ?__string,
    ?'cluster_operation_arn' => ?__string,
  ) $s = shape()) {
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->cluster_operation_arn = $s['cluster_operation_arn'] ?? '';
  }
}

class UpdateMonitoringRequest {
  public ?__string $cluster_arn;
  public ?__string $current_version;
  public ?EnhancedMonitoring $enhanced_monitoring;
  public ?LoggingInfo $logging_info;
  public ?OpenMonitoringInfo $open_monitoring;

  public function __construct(shape(
    ?'cluster_arn' => ?__string,
    ?'current_version' => ?__string,
    ?'enhanced_monitoring' => ?EnhancedMonitoring,
    ?'logging_info' => ?LoggingInfo,
    ?'open_monitoring' => ?OpenMonitoringInfo,
  ) $s = shape()) {
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->current_version = $s['current_version'] ?? '';
    $this->enhanced_monitoring = $s['enhanced_monitoring'] ?? '';
    $this->logging_info = $s['logging_info'] ?? null;
    $this->open_monitoring = $s['open_monitoring'] ?? null;
  }
}

class UpdateMonitoringResponse {
  public ?__string $cluster_arn;
  public ?__string $cluster_operation_arn;

  public function __construct(shape(
    ?'cluster_arn' => ?__string,
    ?'cluster_operation_arn' => ?__string,
  ) $s = shape()) {
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->cluster_operation_arn = $s['cluster_operation_arn'] ?? '';
  }
}

class ZookeeperNodeInfo {
  public ?__string $attached_eni_id;
  public ?__string $client_vpc_ip_address;
  public ?__listOf__string $endpoints;
  public ?__double $zookeeper_id;
  public ?__string $zookeeper_version;

  public function __construct(shape(
    ?'attached_eni_id' => ?__string,
    ?'client_vpc_ip_address' => ?__string,
    ?'endpoints' => ?__listOf__string,
    ?'zookeeper_id' => ?__double,
    ?'zookeeper_version' => ?__string,
  ) $s = shape()) {
    $this->attached_eni_id = $s['attached_eni_id'] ?? '';
    $this->client_vpc_ip_address = $s['client_vpc_ip_address'] ?? '';
    $this->endpoints = $s['endpoints'] ?? vec[];
    $this->zookeeper_id = $s['zookeeper_id'] ?? 0.0;
    $this->zookeeper_version = $s['zookeeper_version'] ?? '';
  }
}

type __blob = string;

type __boolean = bool;

type __double = float;

type __integer = int;

type __integerMin1Max15 = int;

type __integerMin1Max16384 = int;

type __listOfBrokerEBSVolumeInfo = vec<BrokerEBSVolumeInfo>;

type __listOfClusterInfo = vec<ClusterInfo>;

type __listOfClusterOperationInfo = vec<ClusterOperationInfo>;

type __listOfConfiguration = vec<Configuration>;

type __listOfConfigurationRevision = vec<ConfigurationRevision>;

type __listOfKafkaVersion = vec<KafkaVersion>;

type __listOfNodeInfo = vec<NodeInfo>;

type __listOf__string = vec<__string>;

type __long = int;

type __mapOf__string = dict<__string, __string>;

type __string = string;

type __stringMin1Max128 = string;

type __stringMin1Max64 = string;

type __stringMin5Max32 = string;

type __timestampIso8601 = int;


<?hh // strict
namespace slack\aws\kafka;

interface Kafka {
  public function CreateCluster(CreateClusterRequest): Awaitable<Errors\Result<CreateClusterResponse>>;
  public function CreateConfiguration(CreateConfigurationRequest): Awaitable<Errors\Result<CreateConfigurationResponse>>;
  public function DeleteCluster(DeleteClusterRequest): Awaitable<Errors\Result<DeleteClusterResponse>>;
  public function DescribeCluster(DescribeClusterRequest): Awaitable<Errors\Result<DescribeClusterResponse>>;
  public function DescribeClusterOperation(DescribeClusterOperationRequest): Awaitable<Errors\Result<DescribeClusterOperationResponse>>;
  public function DescribeConfiguration(DescribeConfigurationRequest): Awaitable<Errors\Result<DescribeConfigurationResponse>>;
  public function DescribeConfigurationRevision(DescribeConfigurationRevisionRequest): Awaitable<Errors\Result<DescribeConfigurationRevisionResponse>>;
  public function GetBootstrapBrokers(GetBootstrapBrokersRequest): Awaitable<Errors\Result<GetBootstrapBrokersResponse>>;
  public function ListClusterOperations(ListClusterOperationsRequest): Awaitable<Errors\Result<ListClusterOperationsResponse>>;
  public function ListClusters(ListClustersRequest): Awaitable<Errors\Result<ListClustersResponse>>;
  public function ListConfigurationRevisions(ListConfigurationRevisionsRequest): Awaitable<Errors\Result<ListConfigurationRevisionsResponse>>;
  public function ListConfigurations(ListConfigurationsRequest): Awaitable<Errors\Result<ListConfigurationsResponse>>;
  public function ListKafkaVersions(ListKafkaVersionsRequest): Awaitable<Errors\Result<ListKafkaVersionsResponse>>;
  public function ListNodes(ListNodesRequest): Awaitable<Errors\Result<ListNodesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateBrokerCount(UpdateBrokerCountRequest): Awaitable<Errors\Result<UpdateBrokerCountResponse>>;
  public function UpdateBrokerStorage(UpdateBrokerStorageRequest): Awaitable<Errors\Result<UpdateBrokerStorageResponse>>;
  public function UpdateClusterConfiguration(UpdateClusterConfigurationRequest): Awaitable<Errors\Result<UpdateClusterConfigurationResponse>>;
  public function UpdateMonitoring(UpdateMonitoringRequest): Awaitable<Errors\Result<UpdateMonitoringResponse>>;
}

class BadRequestException {
  public __string $invalid_parameter;
  public __string $message;
}

class BrokerAZDistribution {
}

class BrokerEBSVolumeInfo {
  public __string $kafka_broker_node_id;
  public __integer $volume_size_gb;
}

class BrokerLogs {
  public CloudWatchLogs $cloud_watch_logs;
  public Firehose $firehose;
  public S3 $s_3;
}

class BrokerNodeGroupInfo {
  public BrokerAZDistribution $broker_az_distribution;
  public __listOf__string $client_subnets;
  public __stringMin5Max32 $instance_type;
  public __listOf__string $security_groups;
  public StorageInfo $storage_info;
}

class BrokerNodeInfo {
  public __string $attached_eni_id;
  public __double $broker_id;
  public __string $client_subnet;
  public __string $client_vpc_ip_address;
  public BrokerSoftwareInfo $current_broker_software_info;
  public __listOf__string $endpoints;
}

class BrokerSoftwareInfo {
  public __string $configuration_arn;
  public __long $configuration_revision;
  public __string $kafka_version;
}

class ClientAuthentication {
  public Tls $tls;
}

class ClientBroker {
}

class CloudWatchLogs {
  public __boolean $enabled;
  public __string $log_group;
}

class ClusterInfo {
  public __string $active_operation_arn;
  public BrokerNodeGroupInfo $broker_node_group_info;
  public ClientAuthentication $client_authentication;
  public __string $cluster_arn;
  public __string $cluster_name;
  public __timestampIso8601 $creation_time;
  public BrokerSoftwareInfo $current_broker_software_info;
  public __string $current_version;
  public EncryptionInfo $encryption_info;
  public EnhancedMonitoring $enhanced_monitoring;
  public LoggingInfo $logging_info;
  public __integer $number_of_broker_nodes;
  public OpenMonitoring $open_monitoring;
  public ClusterState $state;
  public __mapOf__string $tags;
  public __string $zookeeper_connect_string;
}

class ClusterOperationInfo {
  public __string $client_request_id;
  public __string $cluster_arn;
  public __timestampIso8601 $creation_time;
  public __timestampIso8601 $end_time;
  public ErrorInfo $error_info;
  public __string $operation_arn;
  public __string $operation_state;
  public __string $operation_type;
  public MutableClusterInfo $source_cluster_info;
  public MutableClusterInfo $target_cluster_info;
}

class ClusterState {
}

class Configuration {
  public __string $arn;
  public __timestampIso8601 $creation_time;
  public __string $description;
  public __listOf__string $kafka_versions;
  public ConfigurationRevision $latest_revision;
  public __string $name;
}

class ConfigurationInfo {
  public __string $arn;
  public __long $revision;
}

class ConfigurationRevision {
  public __timestampIso8601 $creation_time;
  public __string $description;
  public __long $revision;
}

class ConflictException {
  public __string $invalid_parameter;
  public __string $message;
}

class CreateClusterRequest {
  public BrokerNodeGroupInfo $broker_node_group_info;
  public ClientAuthentication $client_authentication;
  public __stringMin1Max64 $cluster_name;
  public ConfigurationInfo $configuration_info;
  public EncryptionInfo $encryption_info;
  public EnhancedMonitoring $enhanced_monitoring;
  public __stringMin1Max128 $kafka_version;
  public LoggingInfo $logging_info;
  public __integerMin1Max15 $number_of_broker_nodes;
  public OpenMonitoringInfo $open_monitoring;
  public __mapOf__string $tags;
}

class CreateClusterResponse {
  public __string $cluster_arn;
  public __string $cluster_name;
  public ClusterState $state;
}

class CreateConfigurationRequest {
  public __string $description;
  public __listOf__string $kafka_versions;
  public __string $name;
  public __blob $server_properties;
}

class CreateConfigurationResponse {
  public __string $arn;
  public __timestampIso8601 $creation_time;
  public ConfigurationRevision $latest_revision;
  public __string $name;
}

class DeleteClusterRequest {
  public __string $cluster_arn;
  public __string $current_version;
}

class DeleteClusterResponse {
  public __string $cluster_arn;
  public ClusterState $state;
}

class DescribeClusterOperationRequest {
  public __string $cluster_operation_arn;
}

class DescribeClusterOperationResponse {
  public ClusterOperationInfo $cluster_operation_info;
}

class DescribeClusterRequest {
  public __string $cluster_arn;
}

class DescribeClusterResponse {
  public ClusterInfo $cluster_info;
}

class DescribeConfigurationRequest {
  public __string $arn;
}

class DescribeConfigurationResponse {
  public __string $arn;
  public __timestampIso8601 $creation_time;
  public __string $description;
  public __listOf__string $kafka_versions;
  public ConfigurationRevision $latest_revision;
  public __string $name;
}

class DescribeConfigurationRevisionRequest {
  public __string $arn;
  public __long $revision;
}

class DescribeConfigurationRevisionResponse {
  public __string $arn;
  public __timestampIso8601 $creation_time;
  public __string $description;
  public __long $revision;
  public __blob $server_properties;
}

class EBSStorageInfo {
  public __integerMin1Max16384 $volume_size;
}

class EncryptionAtRest {
  public __string $data_volume_kms_key_id;
}

class EncryptionInTransit {
  public ClientBroker $client_broker;
  public __boolean $in_cluster;
}

class EncryptionInfo {
  public EncryptionAtRest $encryption_at_rest;
  public EncryptionInTransit $encryption_in_transit;
}

class EnhancedMonitoring {
}

class Error {
  public __string $invalid_parameter;
  public __string $message;
}

class ErrorInfo {
  public __string $error_code;
  public __string $error_string;
}

class Firehose {
  public __string $delivery_stream;
  public __boolean $enabled;
}

class ForbiddenException {
  public __string $invalid_parameter;
  public __string $message;
}

class GetBootstrapBrokersRequest {
  public __string $cluster_arn;
}

class GetBootstrapBrokersResponse {
  public __string $bootstrap_broker_string;
  public __string $bootstrap_broker_string_tls;
}

class InternalServerErrorException {
  public __string $invalid_parameter;
  public __string $message;
}

class JmxExporter {
  public __boolean $enabled_in_broker;
}

class JmxExporterInfo {
  public __boolean $enabled_in_broker;
}

class KafkaVersion {
  public KafkaVersionStatus $status;
  public __string $version;
}

class KafkaVersionStatus {
}

class ListClusterOperationsRequest {
  public __string $cluster_arn;
  public MaxResults $max_results;
  public __string $next_token;
}

class ListClusterOperationsResponse {
  public __listOfClusterOperationInfo $cluster_operation_info_list;
  public __string $next_token;
}

class ListClustersRequest {
  public __string $cluster_name_filter;
  public MaxResults $max_results;
  public __string $next_token;
}

class ListClustersResponse {
  public __listOfClusterInfo $cluster_info_list;
  public __string $next_token;
}

class ListConfigurationRevisionsRequest {
  public __string $arn;
  public MaxResults $max_results;
  public __string $next_token;
}

class ListConfigurationRevisionsResponse {
  public __string $next_token;
  public __listOfConfigurationRevision $revisions;
}

class ListConfigurationsRequest {
  public MaxResults $max_results;
  public __string $next_token;
}

class ListConfigurationsResponse {
  public __listOfConfiguration $configurations;
  public __string $next_token;
}

class ListKafkaVersionsRequest {
  public MaxResults $max_results;
  public __string $next_token;
}

class ListKafkaVersionsResponse {
  public __listOfKafkaVersion $kafka_versions;
  public __string $next_token;
}

class ListNodesRequest {
  public __string $cluster_arn;
  public MaxResults $max_results;
  public __string $next_token;
}

class ListNodesResponse {
  public __string $next_token;
  public __listOfNodeInfo $node_info_list;
}

class ListTagsForResourceRequest {
  public __string $resource_arn;
}

class ListTagsForResourceResponse {
  public __mapOf__string $tags;
}

class LoggingInfo {
  public BrokerLogs $broker_logs;
}

class MaxResults {
}

class MutableClusterInfo {
  public __listOfBrokerEBSVolumeInfo $broker_ebs_volume_info;
  public ConfigurationInfo $configuration_info;
  public EnhancedMonitoring $enhanced_monitoring;
  public LoggingInfo $logging_info;
  public __integer $number_of_broker_nodes;
  public OpenMonitoring $open_monitoring;
}

class NodeExporter {
  public __boolean $enabled_in_broker;
}

class NodeExporterInfo {
  public __boolean $enabled_in_broker;
}

class NodeInfo {
  public __string $added_to_cluster_time;
  public BrokerNodeInfo $broker_node_info;
  public __string $instance_type;
  public __string $node_arn;
  public NodeType $node_type;
  public ZookeeperNodeInfo $zookeeper_node_info;
}

class NodeType {
}

class NotFoundException {
  public __string $invalid_parameter;
  public __string $message;
}

class OpenMonitoring {
  public Prometheus $prometheus;
}

class OpenMonitoringInfo {
  public PrometheusInfo $prometheus;
}

class Prometheus {
  public JmxExporter $jmx_exporter;
  public NodeExporter $node_exporter;
}

class PrometheusInfo {
  public JmxExporterInfo $jmx_exporter;
  public NodeExporterInfo $node_exporter;
}

class S3 {
  public __string $bucket;
  public __boolean $enabled;
  public __string $prefix;
}

class ServiceUnavailableException {
  public __string $invalid_parameter;
  public __string $message;
}

class StateInfo {
  public __string $code;
  public __string $message;
}

class StorageInfo {
  public EBSStorageInfo $ebs_storage_info;
}

class TagResourceRequest {
  public __string $resource_arn;
  public __mapOf__string $tags;
}

class Tls {
  public __listOf__string $certificate_authority_arn_list;
}

class TooManyRequestsException {
  public __string $invalid_parameter;
  public __string $message;
}

class UnauthorizedException {
  public __string $invalid_parameter;
  public __string $message;
}

class UntagResourceRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;
}

class UpdateBrokerCountRequest {
  public __string $cluster_arn;
  public __string $current_version;
  public __integerMin1Max15 $target_number_of_broker_nodes;
}

class UpdateBrokerCountResponse {
  public __string $cluster_arn;
  public __string $cluster_operation_arn;
}

class UpdateBrokerStorageRequest {
  public __string $cluster_arn;
  public __string $current_version;
  public __listOfBrokerEBSVolumeInfo $target_broker_ebs_volume_info;
}

class UpdateBrokerStorageResponse {
  public __string $cluster_arn;
  public __string $cluster_operation_arn;
}

class UpdateClusterConfigurationRequest {
  public __string $cluster_arn;
  public ConfigurationInfo $configuration_info;
  public __string $current_version;
}

class UpdateClusterConfigurationResponse {
  public __string $cluster_arn;
  public __string $cluster_operation_arn;
}

class UpdateMonitoringRequest {
  public __string $cluster_arn;
  public __string $current_version;
  public EnhancedMonitoring $enhanced_monitoring;
  public LoggingInfo $logging_info;
  public OpenMonitoringInfo $open_monitoring;
}

class UpdateMonitoringResponse {
  public __string $cluster_arn;
  public __string $cluster_operation_arn;
}

class ZookeeperNodeInfo {
  public __string $attached_eni_id;
  public __string $client_vpc_ip_address;
  public __listOf__string $endpoints;
  public __double $zookeeper_id;
  public __string $zookeeper_version;
}

class __blob {
}

class __boolean {
}

class __double {
}

class __integer {
}

class __integerMin1Max15 {
}

class __integerMin1Max16384 {
}

class __listOfBrokerEBSVolumeInfo {
}

class __listOfClusterInfo {
}

class __listOfClusterOperationInfo {
}

class __listOfConfiguration {
}

class __listOfConfigurationRevision {
}

class __listOfKafkaVersion {
}

class __listOfNodeInfo {
}

class __listOf__string {
}

class __long {
}

class __mapOf__string {
}

class __string {
}

class __stringMin1Max128 {
}

class __stringMin1Max64 {
}

class __stringMin5Max32 {
}

class __timestampIso8601 {
}


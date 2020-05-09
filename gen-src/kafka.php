<?hh // strict
namespace slack\aws\kafka;

interface Kafka {
  public function CreateCluster(CreateClusterRequest) Awaitable<Errors\Result<CreateClusterResponse>>;
  public function DescribeCluster(DescribeClusterRequest) Awaitable<Errors\Result<DescribeClusterResponse>>;
  public function DescribeClusterOperation(DescribeClusterOperationRequest) Awaitable<Errors\Result<DescribeClusterOperationResponse>>;
  public function ListConfigurations(ListConfigurationsRequest) Awaitable<Errors\Result<ListConfigurationsResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function DeleteCluster(DeleteClusterRequest) Awaitable<Errors\Result<DeleteClusterResponse>>;
  public function UpdateBrokerStorage(UpdateBrokerStorageRequest) Awaitable<Errors\Result<UpdateBrokerStorageResponse>>;
  public function UpdateClusterConfiguration(UpdateClusterConfigurationRequest) Awaitable<Errors\Result<UpdateClusterConfigurationResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateBrokerCount(UpdateBrokerCountRequest) Awaitable<Errors\Result<UpdateBrokerCountResponse>>;
  public function CreateConfiguration(CreateConfigurationRequest) Awaitable<Errors\Result<CreateConfigurationResponse>>;
  public function DescribeConfiguration(DescribeConfigurationRequest) Awaitable<Errors\Result<DescribeConfigurationResponse>>;
  public function DescribeConfigurationRevision(DescribeConfigurationRevisionRequest) Awaitable<Errors\Result<DescribeConfigurationRevisionResponse>>;
  public function ListClusterOperations(ListClusterOperationsRequest) Awaitable<Errors\Result<ListClusterOperationsResponse>>;
  public function ListKafkaVersions(ListKafkaVersionsRequest) Awaitable<Errors\Result<ListKafkaVersionsResponse>>;
  public function UpdateMonitoring(UpdateMonitoringRequest) Awaitable<Errors\Result<UpdateMonitoringResponse>>;
  public function GetBootstrapBrokers(GetBootstrapBrokersRequest) Awaitable<Errors\Result<GetBootstrapBrokersResponse>>;
  public function ListClusters(ListClustersRequest) Awaitable<Errors\Result<ListClustersResponse>>;
  public function ListConfigurationRevisions(ListConfigurationRevisionsRequest) Awaitable<Errors\Result<ListConfigurationRevisionsResponse>>;
  public function ListNodes(ListNodesRequest) Awaitable<Errors\Result<ListNodesResponse>>;
}

class StateInfo {
  public __string $code;
  public __string $message;
}

class __stringMin1Max128 {
}

class BrokerLogs {
  public CloudWatchLogs $cloud_watch_logs;
  public Firehose $firehose;
  public S3 $s_3;
}

class BrokerNodeInfo {
  public __double $broker_id;
  public __string $client_subnet;
  public __string $client_vpc_ip_address;
  public BrokerSoftwareInfo $current_broker_software_info;
  public __listOf__string $endpoints;
  public __string $attached_eni_id;
}

class CreateConfigurationRequest {
  public __string $description;
  public __listOf__string $kafka_versions;
  public __string $name;
  public __blob $server_properties;
}

class EncryptionInfo {
  public EncryptionInTransit $encryption_in_transit;
  public EncryptionAtRest $encryption_at_rest;
}

class NodeInfo {
  public __string $instance_type;
  public __string $node_arn;
  public NodeType $node_type;
  public ZookeeperNodeInfo $zookeeper_node_info;
  public __string $added_to_cluster_time;
  public BrokerNodeInfo $broker_node_info;
}

class CreateClusterRequest {
  public ClientAuthentication $client_authentication;
  public __stringMin1Max64 $cluster_name;
  public ConfigurationInfo $configuration_info;
  public EncryptionInfo $encryption_info;
  public EnhancedMonitoring $enhanced_monitoring;
  public __stringMin1Max128 $kafka_version;
  public __mapOf__string $tags;
  public BrokerNodeGroupInfo $broker_node_group_info;
  public LoggingInfo $logging_info;
  public __integerMin1Max15 $number_of_broker_nodes;
  public OpenMonitoringInfo $open_monitoring;
}

class ListClusterOperationsRequest {
  public __string $cluster_arn;
  public MaxResults $max_results;
  public __string $next_token;
}

class __string {
}

class JmxExporterInfo {
  public __boolean $enabled_in_broker;
}

class __listOfConfigurationRevision {
}

class __listOfNodeInfo {
}

class __mapOf__string {
}

class DescribeClusterResponse {
  public ClusterInfo $cluster_info;
}

class UpdateBrokerStorageRequest {
  public __string $cluster_arn;
  public __string $current_version;
  public __listOfBrokerEBSVolumeInfo $target_broker_ebs_volume_info;
}

class UpdateMonitoringResponse {
  public __string $cluster_arn;
  public __string $cluster_operation_arn;
}

class __listOfConfiguration {
}

class Configuration {
  public __listOf__string $kafka_versions;
  public ConfigurationRevision $latest_revision;
  public __string $name;
  public __string $arn;
  public __timestampIso8601 $creation_time;
  public __string $description;
}

class ConfigurationInfo {
  public __long $revision;
  public __string $arn;
}

class ListConfigurationsRequest {
  public MaxResults $max_results;
  public __string $next_token;
}

class ListTagsForResourceRequest {
  public __string $resource_arn;
}

class UntagResourceRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;
}

class __blob {
}

class ConflictException {
  public __string $invalid_parameter;
  public __string $message;
}

class __listOfClusterOperationInfo {
}

class BrokerNodeGroupInfo {
  public __listOf__string $security_groups;
  public StorageInfo $storage_info;
  public BrokerAZDistribution $broker_az_distribution;
  public __listOf__string $client_subnets;
  public __stringMin5Max32 $instance_type;
}

class EBSStorageInfo {
  public __integerMin1Max16384 $volume_size;
}

class ListConfigurationRevisionsRequest {
  public __string $arn;
  public MaxResults $max_results;
  public __string $next_token;
}

class __boolean {
}

class ClusterInfo {
  public __string $active_operation_arn;
  public __string $cluster_name;
  public ClusterState $state;
  public __mapOf__string $tags;
  public __string $zookeeper_connect_string;
  public BrokerNodeGroupInfo $broker_node_group_info;
  public __string $current_version;
  public EncryptionInfo $encryption_info;
  public EnhancedMonitoring $enhanced_monitoring;
  public __integer $number_of_broker_nodes;
  public LoggingInfo $logging_info;
  public OpenMonitoring $open_monitoring;
  public ClientAuthentication $client_authentication;
  public __string $cluster_arn;
  public __timestampIso8601 $creation_time;
  public BrokerSoftwareInfo $current_broker_software_info;
}

class NodeType {
}

class NotFoundException {
  public __string $invalid_parameter;
  public __string $message;
}

class __listOfBrokerEBSVolumeInfo {
}

class __listOfClusterInfo {
}

class __stringMin1Max64 {
}

class DescribeClusterRequest {
  public __string $cluster_arn;
}

class ListTagsForResourceResponse {
  public __mapOf__string $tags;
}

class OpenMonitoringInfo {
  public PrometheusInfo $prometheus;
}

class __timestampIso8601 {
}

class BrokerEBSVolumeInfo {
  public __string $kafka_broker_node_id;
  public __integer $volume_size_gb;
}

class ListNodesRequest {
  public __string $next_token;
  public __string $cluster_arn;
  public MaxResults $max_results;
}

class BrokerAZDistribution {
}

class DeleteClusterResponse {
  public ClusterState $state;
  public __string $cluster_arn;
}

class GetBootstrapBrokersRequest {
  public __string $cluster_arn;
}

class UpdateClusterConfigurationResponse {
  public __string $cluster_arn;
  public __string $cluster_operation_arn;
}

class ZookeeperNodeInfo {
  public __listOf__string $endpoints;
  public __double $zookeeper_id;
  public __string $zookeeper_version;
  public __string $attached_eni_id;
  public __string $client_vpc_ip_address;
}

class KafkaVersionStatus {
}

class __stringMin5Max32 {
}

class ClusterState {
}

class EnhancedMonitoring {
}

class ListConfigurationsResponse {
  public __string $next_token;
  public __listOfConfiguration $configurations;
}

class UnauthorizedException {
  public __string $invalid_parameter;
  public __string $message;
}

class __listOf__string {
}

class CloudWatchLogs {
  public __boolean $enabled;
  public __string $log_group;
}

class CreateConfigurationResponse {
  public __string $name;
  public __string $arn;
  public __timestampIso8601 $creation_time;
  public ConfigurationRevision $latest_revision;
}

class Firehose {
  public __string $delivery_stream;
  public __boolean $enabled;
}

class PrometheusInfo {
  public JmxExporterInfo $jmx_exporter;
  public NodeExporterInfo $node_exporter;
}

class ClientBroker {
}

class ListNodesResponse {
  public __string $next_token;
  public __listOfNodeInfo $node_info_list;
}

class __integerMin1Max15 {
}

class UpdateClusterConfigurationRequest {
  public __string $cluster_arn;
  public ConfigurationInfo $configuration_info;
  public __string $current_version;
}

class ListClustersRequest {
  public __string $next_token;
  public __string $cluster_name_filter;
  public MaxResults $max_results;
}

class S3 {
  public __string $bucket;
  public __boolean $enabled;
  public __string $prefix;
}

class ListKafkaVersionsResponse {
  public __listOfKafkaVersion $kafka_versions;
  public __string $next_token;
}

class NodeExporterInfo {
  public __boolean $enabled_in_broker;
}

class ClientAuthentication {
  public Tls $tls;
}

class ClusterOperationInfo {
  public __timestampIso8601 $creation_time;
  public ErrorInfo $error_info;
  public __string $operation_arn;
  public __string $operation_state;
  public MutableClusterInfo $target_cluster_info;
  public __string $client_request_id;
  public __string $cluster_arn;
  public __timestampIso8601 $end_time;
  public __string $operation_type;
  public MutableClusterInfo $source_cluster_info;
}

class MutableClusterInfo {
  public LoggingInfo $logging_info;
  public __listOfBrokerEBSVolumeInfo $broker_ebs_volume_info;
  public ConfigurationInfo $configuration_info;
  public __integer $number_of_broker_nodes;
  public OpenMonitoring $open_monitoring;
  public EnhancedMonitoring $enhanced_monitoring;
}

class DescribeClusterOperationResponse {
  public ClusterOperationInfo $cluster_operation_info;
}

class __integerMin1Max16384 {
}

class __listOfKafkaVersion {
}

class DeleteClusterRequest {
  public __string $cluster_arn;
  public __string $current_version;
}

class DescribeConfigurationRevisionRequest {
  public __string $arn;
  public __long $revision;
}

class StorageInfo {
  public EBSStorageInfo $ebs_storage_info;
}

class __double {
}

class DescribeConfigurationRequest {
  public __string $arn;
}

class LoggingInfo {
  public BrokerLogs $broker_logs;
}

class OpenMonitoring {
  public Prometheus $prometheus;
}

class UpdateBrokerCountRequest {
  public __string $cluster_arn;
  public __string $current_version;
  public __integerMin1Max15 $target_number_of_broker_nodes;
}

class DescribeConfigurationResponse {
  public __string $arn;
  public __timestampIso8601 $creation_time;
  public __string $description;
  public __listOf__string $kafka_versions;
  public ConfigurationRevision $latest_revision;
  public __string $name;
}

class ErrorInfo {
  public __string $error_code;
  public __string $error_string;
}

class ForbiddenException {
  public __string $invalid_parameter;
  public __string $message;
}

class GetBootstrapBrokersResponse {
  public __string $bootstrap_broker_string;
  public __string $bootstrap_broker_string_tls;
}

class ServiceUnavailableException {
  public __string $invalid_parameter;
  public __string $message;
}

class TagResourceRequest {
  public __string $resource_arn;
  public __mapOf__string $tags;
}

class ListClusterOperationsResponse {
  public __string $next_token;
  public __listOfClusterOperationInfo $cluster_operation_info_list;
}

class EncryptionAtRest {
  public __string $data_volume_kms_key_id;
}

class InternalServerErrorException {
  public __string $invalid_parameter;
  public __string $message;
}

class ListClustersResponse {
  public __listOfClusterInfo $cluster_info_list;
  public __string $next_token;
}

class UpdateBrokerStorageResponse {
  public __string $cluster_operation_arn;
  public __string $cluster_arn;
}

class ConfigurationRevision {
  public __timestampIso8601 $creation_time;
  public __string $description;
  public __long $revision;
}

class DescribeClusterOperationRequest {
  public __string $cluster_operation_arn;
}

class UpdateMonitoringRequest {
  public __string $cluster_arn;
  public __string $current_version;
  public EnhancedMonitoring $enhanced_monitoring;
  public OpenMonitoringInfo $open_monitoring;
  public LoggingInfo $logging_info;
}

class UpdateBrokerCountResponse {
  public __string $cluster_arn;
  public __string $cluster_operation_arn;
}

class __integer {
}

class BadRequestException {
  public __string $invalid_parameter;
  public __string $message;
}

class CreateClusterResponse {
  public __string $cluster_arn;
  public __string $cluster_name;
  public ClusterState $state;
}

class DescribeConfigurationRevisionResponse {
  public __string $arn;
  public __timestampIso8601 $creation_time;
  public __string $description;
  public __long $revision;
  public __blob $server_properties;
}

class ListConfigurationRevisionsResponse {
  public __string $next_token;
  public __listOfConfigurationRevision $revisions;
}

class ListKafkaVersionsRequest {
  public MaxResults $max_results;
  public __string $next_token;
}

class TooManyRequestsException {
  public __string $invalid_parameter;
  public __string $message;
}

class __long {
}

class Error {
  public __string $invalid_parameter;
  public __string $message;
}

class Prometheus {
  public JmxExporter $jmx_exporter;
  public NodeExporter $node_exporter;
}

class JmxExporter {
  public __boolean $enabled_in_broker;
}

class MaxResults {
}

class NodeExporter {
  public __boolean $enabled_in_broker;
}

class BrokerSoftwareInfo {
  public __string $configuration_arn;
  public __long $configuration_revision;
  public __string $kafka_version;
}

class EncryptionInTransit {
  public ClientBroker $client_broker;
  public __boolean $in_cluster;
}

class KafkaVersion {
  public __string $version;
  public KafkaVersionStatus $status;
}

class Tls {
  public __listOf__string $certificate_authority_arn_list;
}


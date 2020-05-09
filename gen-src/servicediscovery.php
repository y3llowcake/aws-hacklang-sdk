<?hh // strict
namespace slack\aws\servicediscovery;

interface ServiceDiscovery {
  public function CreateHttpNamespace(CreateHttpNamespaceRequest): Awaitable<Errors\Result<CreateHttpNamespaceResponse>>;
  public function CreatePrivateDnsNamespace(CreatePrivateDnsNamespaceRequest): Awaitable<Errors\Result<CreatePrivateDnsNamespaceResponse>>;
  public function CreatePublicDnsNamespace(CreatePublicDnsNamespaceRequest): Awaitable<Errors\Result<CreatePublicDnsNamespaceResponse>>;
  public function CreateService(CreateServiceRequest): Awaitable<Errors\Result<CreateServiceResponse>>;
  public function DeleteNamespace(DeleteNamespaceRequest): Awaitable<Errors\Result<DeleteNamespaceResponse>>;
  public function DeleteService(DeleteServiceRequest): Awaitable<Errors\Result<DeleteServiceResponse>>;
  public function DeregisterInstance(DeregisterInstanceRequest): Awaitable<Errors\Result<DeregisterInstanceResponse>>;
  public function DiscoverInstances(DiscoverInstancesRequest): Awaitable<Errors\Result<DiscoverInstancesResponse>>;
  public function GetInstance(GetInstanceRequest): Awaitable<Errors\Result<GetInstanceResponse>>;
  public function GetInstancesHealthStatus(GetInstancesHealthStatusRequest): Awaitable<Errors\Result<GetInstancesHealthStatusResponse>>;
  public function GetNamespace(GetNamespaceRequest): Awaitable<Errors\Result<GetNamespaceResponse>>;
  public function GetOperation(GetOperationRequest): Awaitable<Errors\Result<GetOperationResponse>>;
  public function GetService(GetServiceRequest): Awaitable<Errors\Result<GetServiceResponse>>;
  public function ListInstances(ListInstancesRequest): Awaitable<Errors\Result<ListInstancesResponse>>;
  public function ListNamespaces(ListNamespacesRequest): Awaitable<Errors\Result<ListNamespacesResponse>>;
  public function ListOperations(ListOperationsRequest): Awaitable<Errors\Result<ListOperationsResponse>>;
  public function ListServices(ListServicesRequest): Awaitable<Errors\Result<ListServicesResponse>>;
  public function RegisterInstance(RegisterInstanceRequest): Awaitable<Errors\Result<RegisterInstanceResponse>>;
  public function UpdateInstanceCustomHealthStatus(UpdateInstanceCustomHealthStatusRequest): Awaitable<Errors\Error>;
  public function UpdateService(UpdateServiceRequest): Awaitable<Errors\Result<UpdateServiceResponse>>;
}

class Arn {
}

class AttrKey {
}

class AttrValue {
}

class Attributes {
}

class Code {
}

class CreateHttpNamespaceRequest {
  public ResourceId $creator_request_id;
  public ResourceDescription $description;
  public NamespaceName $name;
}

class CreateHttpNamespaceResponse {
  public OperationId $operation_id;
}

class CreatePrivateDnsNamespaceRequest {
  public ResourceId $creator_request_id;
  public ResourceDescription $description;
  public NamespaceName $name;
  public ResourceId $vpc;
}

class CreatePrivateDnsNamespaceResponse {
  public OperationId $operation_id;
}

class CreatePublicDnsNamespaceRequest {
  public ResourceId $creator_request_id;
  public ResourceDescription $description;
  public NamespaceName $name;
}

class CreatePublicDnsNamespaceResponse {
  public OperationId $operation_id;
}

class CreateServiceRequest {
  public ResourceId $creator_request_id;
  public ResourceDescription $description;
  public DnsConfig $dns_config;
  public HealthCheckConfig $health_check_config;
  public HealthCheckCustomConfig $health_check_custom_config;
  public ServiceName $name;
  public ResourceId $namespace_id;
}

class CreateServiceResponse {
  public Service $service;
}

class CustomHealthNotFound {
  public ErrorMessage $message;
}

class CustomHealthStatus {
}

class DeleteNamespaceRequest {
  public ResourceId $id;
}

class DeleteNamespaceResponse {
  public OperationId $operation_id;
}

class DeleteServiceRequest {
  public ResourceId $id;
}

class DeleteServiceResponse {
}

class DeregisterInstanceRequest {
  public ResourceId $instance_id;
  public ResourceId $service_id;
}

class DeregisterInstanceResponse {
  public OperationId $operation_id;
}

class DiscoverInstancesRequest {
  public HealthStatusFilter $health_status;
  public MaxResults $max_results;
  public NamespaceName $namespace_name;
  public Attributes $query_parameters;
  public ServiceName $service_name;
}

class DiscoverInstancesResponse {
  public HttpInstanceSummaryList $instances;
}

class DnsConfig {
  public DnsRecordList $dns_records;
  public ResourceId $namespace_id;
  public RoutingPolicy $routing_policy;
}

class DnsConfigChange {
  public DnsRecordList $dns_records;
}

class DnsProperties {
  public ResourceId $hosted_zone_id;
}

class DnsRecord {
  public RecordTTL $ttl;
  public RecordType $type;
}

class DnsRecordList {
}

class DuplicateRequest {
  public ResourceId $duplicate_operation_id;
  public ErrorMessage $message;
}

class ErrorMessage {
}

class FailureThreshold {
}

class FilterCondition {
}

class FilterValue {
}

class FilterValues {
}

class GetInstanceRequest {
  public ResourceId $instance_id;
  public ResourceId $service_id;
}

class GetInstanceResponse {
  public Instance $instance;
}

class GetInstancesHealthStatusRequest {
  public InstanceIdList $instances;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceId $service_id;
}

class GetInstancesHealthStatusResponse {
  public NextToken $next_token;
  public InstanceHealthStatusMap $status;
}

class GetNamespaceRequest {
  public ResourceId $id;
}

class GetNamespaceResponse {
  public Namespace $namespace;
}

class GetOperationRequest {
  public ResourceId $operation_id;
}

class GetOperationResponse {
  public Operation $operation;
}

class GetServiceRequest {
  public ResourceId $id;
}

class GetServiceResponse {
  public Service $service;
}

class HealthCheckConfig {
  public FailureThreshold $failure_threshold;
  public ResourcePath $resource_path;
  public HealthCheckType $type;
}

class HealthCheckCustomConfig {
  public FailureThreshold $failure_threshold;
}

class HealthCheckType {
}

class HealthStatus {
}

class HealthStatusFilter {
}

class HttpInstanceSummary {
  public Attributes $attributes;
  public HealthStatus $health_status;
  public ResourceId $instance_id;
  public NamespaceName $namespace_name;
  public ServiceName $service_name;
}

class HttpInstanceSummaryList {
}

class HttpProperties {
  public NamespaceName $http_name;
}

class Instance {
  public Attributes $attributes;
  public ResourceId $creator_request_id;
  public ResourceId $id;
}

class InstanceHealthStatusMap {
}

class InstanceIdList {
}

class InstanceNotFound {
  public ErrorMessage $message;
}

class InstanceSummary {
  public Attributes $attributes;
  public ResourceId $id;
}

class InstanceSummaryList {
}

class InvalidInput {
  public ErrorMessage $message;
}

class ListInstancesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceId $service_id;
}

class ListInstancesResponse {
  public InstanceSummaryList $instances;
  public NextToken $next_token;
}

class ListNamespacesRequest {
  public NamespaceFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListNamespacesResponse {
  public NamespaceSummariesList $namespaces;
  public NextToken $next_token;
}

class ListOperationsRequest {
  public OperationFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListOperationsResponse {
  public NextToken $next_token;
  public OperationSummaryList $operations;
}

class ListServicesRequest {
  public ServiceFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListServicesResponse {
  public NextToken $next_token;
  public ServiceSummariesList $services;
}

class MaxResults {
}

class Message {
}

class Namespace {
  public Arn $arn;
  public Timestamp $create_date;
  public ResourceId $creator_request_id;
  public ResourceDescription $description;
  public ResourceId $id;
  public NamespaceName $name;
  public NamespaceProperties $properties;
  public ResourceCount $service_count;
  public NamespaceType $type;
}

class NamespaceAlreadyExists {
  public ResourceId $creator_request_id;
  public ErrorMessage $message;
  public ResourceId $namespace_id;
}

class NamespaceFilter {
  public FilterCondition $condition;
  public NamespaceFilterName $name;
  public FilterValues $values;
}

class NamespaceFilterName {
}

class NamespaceFilters {
}

class NamespaceName {
}

class NamespaceNotFound {
  public ErrorMessage $message;
}

class NamespaceProperties {
  public DnsProperties $dns_properties;
  public HttpProperties $http_properties;
}

class NamespaceSummariesList {
}

class NamespaceSummary {
  public Arn $arn;
  public Timestamp $create_date;
  public ResourceDescription $description;
  public ResourceId $id;
  public NamespaceName $name;
  public NamespaceProperties $properties;
  public ResourceCount $service_count;
  public NamespaceType $type;
}

class NamespaceType {
}

class NextToken {
}

class Operation {
  public Timestamp $create_date;
  public Code $error_code;
  public Message $error_message;
  public OperationId $id;
  public OperationStatus $status;
  public OperationTargetsMap $targets;
  public OperationType $type;
  public Timestamp $update_date;
}

class OperationFilter {
  public FilterCondition $condition;
  public OperationFilterName $name;
  public FilterValues $values;
}

class OperationFilterName {
}

class OperationFilters {
}

class OperationId {
}

class OperationNotFound {
  public ErrorMessage $message;
}

class OperationStatus {
}

class OperationSummary {
  public OperationId $id;
  public OperationStatus $status;
}

class OperationSummaryList {
}

class OperationTargetType {
}

class OperationTargetsMap {
}

class OperationType {
}

class RecordTTL {
}

class RecordType {
}

class RegisterInstanceRequest {
  public Attributes $attributes;
  public ResourceId $creator_request_id;
  public ResourceId $instance_id;
  public ResourceId $service_id;
}

class RegisterInstanceResponse {
  public OperationId $operation_id;
}

class ResourceCount {
}

class ResourceDescription {
}

class ResourceId {
}

class ResourceInUse {
  public ErrorMessage $message;
}

class ResourceLimitExceeded {
  public ErrorMessage $message;
}

class ResourcePath {
}

class RoutingPolicy {
}

class Service {
  public Arn $arn;
  public Timestamp $create_date;
  public ResourceId $creator_request_id;
  public ResourceDescription $description;
  public DnsConfig $dns_config;
  public HealthCheckConfig $health_check_config;
  public HealthCheckCustomConfig $health_check_custom_config;
  public ResourceId $id;
  public ResourceCount $instance_count;
  public ServiceName $name;
  public ResourceId $namespace_id;
}

class ServiceAlreadyExists {
  public ResourceId $creator_request_id;
  public ErrorMessage $message;
  public ResourceId $service_id;
}

class ServiceChange {
  public ResourceDescription $description;
  public DnsConfigChange $dns_config;
  public HealthCheckConfig $health_check_config;
}

class ServiceFilter {
  public FilterCondition $condition;
  public ServiceFilterName $name;
  public FilterValues $values;
}

class ServiceFilterName {
}

class ServiceFilters {
}

class ServiceName {
}

class ServiceNotFound {
  public ErrorMessage $message;
}

class ServiceSummariesList {
}

class ServiceSummary {
  public Arn $arn;
  public Timestamp $create_date;
  public ResourceDescription $description;
  public DnsConfig $dns_config;
  public HealthCheckConfig $health_check_config;
  public HealthCheckCustomConfig $health_check_custom_config;
  public ResourceId $id;
  public ResourceCount $instance_count;
  public ServiceName $name;
}

class Timestamp {
}

class UpdateInstanceCustomHealthStatusRequest {
  public ResourceId $instance_id;
  public ResourceId $service_id;
  public CustomHealthStatus $status;
}

class UpdateServiceRequest {
  public ResourceId $id;
  public ServiceChange $service;
}

class UpdateServiceResponse {
  public OperationId $operation_id;
}


<?hh // strict
namespace slack\aws\servicediscovery;

interface ServiceDiscovery {
  public function CreateHttpNamespace(CreateHttpNamespaceRequest $in): Awaitable<\Errors\Result<CreateHttpNamespaceResponse>>;
  public function CreatePrivateDnsNamespace(CreatePrivateDnsNamespaceRequest $in): Awaitable<\Errors\Result<CreatePrivateDnsNamespaceResponse>>;
  public function CreatePublicDnsNamespace(CreatePublicDnsNamespaceRequest $in): Awaitable<\Errors\Result<CreatePublicDnsNamespaceResponse>>;
  public function CreateService(CreateServiceRequest $in): Awaitable<\Errors\Result<CreateServiceResponse>>;
  public function DeleteNamespace(DeleteNamespaceRequest $in): Awaitable<\Errors\Result<DeleteNamespaceResponse>>;
  public function DeleteService(DeleteServiceRequest $in): Awaitable<\Errors\Result<DeleteServiceResponse>>;
  public function DeregisterInstance(DeregisterInstanceRequest $in): Awaitable<\Errors\Result<DeregisterInstanceResponse>>;
  public function DiscoverInstances(DiscoverInstancesRequest $in): Awaitable<\Errors\Result<DiscoverInstancesResponse>>;
  public function GetInstance(GetInstanceRequest $in): Awaitable<\Errors\Result<GetInstanceResponse>>;
  public function GetInstancesHealthStatus(GetInstancesHealthStatusRequest $in): Awaitable<\Errors\Result<GetInstancesHealthStatusResponse>>;
  public function GetNamespace(GetNamespaceRequest $in): Awaitable<\Errors\Result<GetNamespaceResponse>>;
  public function GetOperation(GetOperationRequest $in): Awaitable<\Errors\Result<GetOperationResponse>>;
  public function GetService(GetServiceRequest $in): Awaitable<\Errors\Result<GetServiceResponse>>;
  public function ListInstances(ListInstancesRequest $in): Awaitable<\Errors\Result<ListInstancesResponse>>;
  public function ListNamespaces(ListNamespacesRequest $in): Awaitable<\Errors\Result<ListNamespacesResponse>>;
  public function ListOperations(ListOperationsRequest $in): Awaitable<\Errors\Result<ListOperationsResponse>>;
  public function ListServices(ListServicesRequest $in): Awaitable<\Errors\Result<ListServicesResponse>>;
  public function RegisterInstance(RegisterInstanceRequest $in): Awaitable<\Errors\Result<RegisterInstanceResponse>>;
  public function UpdateInstanceCustomHealthStatus(UpdateInstanceCustomHealthStatusRequest $in): Awaitable<\Errors\Error>;
  public function UpdateService(UpdateServiceRequest $in): Awaitable<\Errors\Result<UpdateServiceResponse>>;
}

type Arn = string;

type AttrKey = string;

type AttrValue = string;

type Attributes = dict<AttrKey, AttrValue>;

type Code = string;

class CreateHttpNamespaceRequest {
  public ?ResourceId $creator_request_id;
  public ?ResourceDescription $description;
  public ?NamespaceName $name;

  public function __construct(shape(
    ?'creator_request_id' => ?ResourceId,
    ?'description' => ?ResourceDescription,
    ?'name' => ?NamespaceName,
  ) $s = shape()) {
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateHttpNamespaceResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

class CreatePrivateDnsNamespaceRequest {
  public ?ResourceId $creator_request_id;
  public ?ResourceDescription $description;
  public ?NamespaceName $name;
  public ?ResourceId $vpc;

  public function __construct(shape(
    ?'creator_request_id' => ?ResourceId,
    ?'description' => ?ResourceDescription,
    ?'name' => ?NamespaceName,
    ?'vpc' => ?ResourceId,
  ) $s = shape()) {
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->vpc = $s['vpc'] ?? '';
  }
}

class CreatePrivateDnsNamespaceResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

class CreatePublicDnsNamespaceRequest {
  public ?ResourceId $creator_request_id;
  public ?ResourceDescription $description;
  public ?NamespaceName $name;

  public function __construct(shape(
    ?'creator_request_id' => ?ResourceId,
    ?'description' => ?ResourceDescription,
    ?'name' => ?NamespaceName,
  ) $s = shape()) {
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreatePublicDnsNamespaceResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

class CreateServiceRequest {
  public ?ResourceId $creator_request_id;
  public ?ResourceDescription $description;
  public ?DnsConfig $dns_config;
  public ?HealthCheckConfig $health_check_config;
  public ?HealthCheckCustomConfig $health_check_custom_config;
  public ?ServiceName $name;
  public ?ResourceId $namespace_id;

  public function __construct(shape(
    ?'creator_request_id' => ?ResourceId,
    ?'description' => ?ResourceDescription,
    ?'dns_config' => ?DnsConfig,
    ?'health_check_config' => ?HealthCheckConfig,
    ?'health_check_custom_config' => ?HealthCheckCustomConfig,
    ?'name' => ?ServiceName,
    ?'namespace_id' => ?ResourceId,
  ) $s = shape()) {
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->dns_config = $s['dns_config'] ?? null;
    $this->health_check_config = $s['health_check_config'] ?? null;
    $this->health_check_custom_config = $s['health_check_custom_config'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->namespace_id = $s['namespace_id'] ?? '';
  }
}

class CreateServiceResponse {
  public ?Service $service;

  public function __construct(shape(
    ?'service' => ?Service,
  ) $s = shape()) {
    $this->service = $s['service'] ?? null;
  }
}

class CustomHealthNotFound {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type CustomHealthStatus = string;

class DeleteNamespaceRequest {
  public ?ResourceId $id;

  public function __construct(shape(
    ?'id' => ?ResourceId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeleteNamespaceResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

class DeleteServiceRequest {
  public ?ResourceId $id;

  public function __construct(shape(
    ?'id' => ?ResourceId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeleteServiceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeregisterInstanceRequest {
  public ?ResourceId $instance_id;
  public ?ResourceId $service_id;

  public function __construct(shape(
    ?'instance_id' => ?ResourceId,
    ?'service_id' => ?ResourceId,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->service_id = $s['service_id'] ?? '';
  }
}

class DeregisterInstanceResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

class DiscoverInstancesRequest {
  public ?HealthStatusFilter $health_status;
  public ?MaxResults $max_results;
  public ?NamespaceName $namespace_name;
  public ?Attributes $query_parameters;
  public ?ServiceName $service_name;

  public function __construct(shape(
    ?'health_status' => ?HealthStatusFilter,
    ?'max_results' => ?MaxResults,
    ?'namespace_name' => ?NamespaceName,
    ?'query_parameters' => ?Attributes,
    ?'service_name' => ?ServiceName,
  ) $s = shape()) {
    $this->health_status = $s['health_status'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->namespace_name = $s['namespace_name'] ?? '';
    $this->query_parameters = $s['query_parameters'] ?? dict[];
    $this->service_name = $s['service_name'] ?? '';
  }
}

class DiscoverInstancesResponse {
  public ?HttpInstanceSummaryList $instances;

  public function __construct(shape(
    ?'instances' => ?HttpInstanceSummaryList,
  ) $s = shape()) {
    $this->instances = $s['instances'] ?? vec[];
  }
}

class DnsConfig {
  public ?DnsRecordList $dns_records;
  public ?ResourceId $namespace_id;
  public ?RoutingPolicy $routing_policy;

  public function __construct(shape(
    ?'dns_records' => ?DnsRecordList,
    ?'namespace_id' => ?ResourceId,
    ?'routing_policy' => ?RoutingPolicy,
  ) $s = shape()) {
    $this->dns_records = $s['dns_records'] ?? vec[];
    $this->namespace_id = $s['namespace_id'] ?? '';
    $this->routing_policy = $s['routing_policy'] ?? '';
  }
}

class DnsConfigChange {
  public ?DnsRecordList $dns_records;

  public function __construct(shape(
    ?'dns_records' => ?DnsRecordList,
  ) $s = shape()) {
    $this->dns_records = $s['dns_records'] ?? vec[];
  }
}

class DnsProperties {
  public ?ResourceId $hosted_zone_id;

  public function __construct(shape(
    ?'hosted_zone_id' => ?ResourceId,
  ) $s = shape()) {
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
  }
}

class DnsRecord {
  public ?RecordTTL $ttl;
  public ?RecordType $type;

  public function __construct(shape(
    ?'ttl' => ?RecordTTL,
    ?'type' => ?RecordType,
  ) $s = shape()) {
    $this->ttl = $s['ttl'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

type DnsRecordList = vec<DnsRecord>;

class DuplicateRequest {
  public ?ResourceId $duplicate_operation_id;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'duplicate_operation_id' => ?ResourceId,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->duplicate_operation_id = $s['duplicate_operation_id'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type ErrorMessage = string;

type FailureThreshold = int;

type FilterCondition = string;

type FilterValue = string;

type FilterValues = vec<FilterValue>;

class GetInstanceRequest {
  public ?ResourceId $instance_id;
  public ?ResourceId $service_id;

  public function __construct(shape(
    ?'instance_id' => ?ResourceId,
    ?'service_id' => ?ResourceId,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->service_id = $s['service_id'] ?? '';
  }
}

class GetInstanceResponse {
  public ?Instance $instance;

  public function __construct(shape(
    ?'instance' => ?Instance,
  ) $s = shape()) {
    $this->instance = $s['instance'] ?? null;
  }
}

class GetInstancesHealthStatusRequest {
  public ?InstanceIdList $instances;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ResourceId $service_id;

  public function __construct(shape(
    ?'instances' => ?InstanceIdList,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'service_id' => ?ResourceId,
  ) $s = shape()) {
    $this->instances = $s['instances'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->service_id = $s['service_id'] ?? '';
  }
}

class GetInstancesHealthStatusResponse {
  public ?NextToken $next_token;
  public ?InstanceHealthStatusMap $status;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'status' => ?InstanceHealthStatusMap,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->status = $s['status'] ?? dict[];
  }
}

class GetNamespaceRequest {
  public ?ResourceId $id;

  public function __construct(shape(
    ?'id' => ?ResourceId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class GetNamespaceResponse {
  public ?Namespace $namespace;

  public function __construct(shape(
    ?'namespace' => ?Namespace,
  ) $s = shape()) {
    $this->namespace = $s['namespace'] ?? null;
  }
}

class GetOperationRequest {
  public ?ResourceId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?ResourceId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

class GetOperationResponse {
  public ?Operation $operation;

  public function __construct(shape(
    ?'operation' => ?Operation,
  ) $s = shape()) {
    $this->operation = $s['operation'] ?? null;
  }
}

class GetServiceRequest {
  public ?ResourceId $id;

  public function __construct(shape(
    ?'id' => ?ResourceId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class GetServiceResponse {
  public ?Service $service;

  public function __construct(shape(
    ?'service' => ?Service,
  ) $s = shape()) {
    $this->service = $s['service'] ?? null;
  }
}

class HealthCheckConfig {
  public ?FailureThreshold $failure_threshold;
  public ?ResourcePath $resource_path;
  public ?HealthCheckType $type;

  public function __construct(shape(
    ?'failure_threshold' => ?FailureThreshold,
    ?'resource_path' => ?ResourcePath,
    ?'type' => ?HealthCheckType,
  ) $s = shape()) {
    $this->failure_threshold = $s['failure_threshold'] ?? 0;
    $this->resource_path = $s['resource_path'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class HealthCheckCustomConfig {
  public ?FailureThreshold $failure_threshold;

  public function __construct(shape(
    ?'failure_threshold' => ?FailureThreshold,
  ) $s = shape()) {
    $this->failure_threshold = $s['failure_threshold'] ?? 0;
  }
}

type HealthCheckType = string;

type HealthStatus = string;

type HealthStatusFilter = string;

class HttpInstanceSummary {
  public ?Attributes $attributes;
  public ?HealthStatus $health_status;
  public ?ResourceId $instance_id;
  public ?NamespaceName $namespace_name;
  public ?ServiceName $service_name;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
    ?'health_status' => ?HealthStatus,
    ?'instance_id' => ?ResourceId,
    ?'namespace_name' => ?NamespaceName,
    ?'service_name' => ?ServiceName,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->health_status = $s['health_status'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->namespace_name = $s['namespace_name'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
  }
}

type HttpInstanceSummaryList = vec<HttpInstanceSummary>;

class HttpProperties {
  public ?NamespaceName $http_name;

  public function __construct(shape(
    ?'http_name' => ?NamespaceName,
  ) $s = shape()) {
    $this->http_name = $s['http_name'] ?? '';
  }
}

class Instance {
  public ?Attributes $attributes;
  public ?ResourceId $creator_request_id;
  public ?ResourceId $id;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
    ?'creator_request_id' => ?ResourceId,
    ?'id' => ?ResourceId,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

type InstanceHealthStatusMap = dict<ResourceId, HealthStatus>;

type InstanceIdList = vec<ResourceId>;

class InstanceNotFound {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InstanceSummary {
  public ?Attributes $attributes;
  public ?ResourceId $id;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
    ?'id' => ?ResourceId,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->id = $s['id'] ?? '';
  }
}

type InstanceSummaryList = vec<InstanceSummary>;

class InvalidInput {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListInstancesRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ResourceId $service_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'service_id' => ?ResourceId,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->service_id = $s['service_id'] ?? '';
  }
}

class ListInstancesResponse {
  public ?InstanceSummaryList $instances;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'instances' => ?InstanceSummaryList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->instances = $s['instances'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListNamespacesRequest {
  public ?NamespaceFilters $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filters' => ?NamespaceFilters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListNamespacesResponse {
  public ?NamespaceSummariesList $namespaces;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'namespaces' => ?NamespaceSummariesList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->namespaces = $s['namespaces'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListOperationsRequest {
  public ?OperationFilters $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filters' => ?OperationFilters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListOperationsResponse {
  public ?NextToken $next_token;
  public ?OperationSummaryList $operations;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'operations' => ?OperationSummaryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->operations = $s['operations'] ?? vec[];
  }
}

class ListServicesRequest {
  public ?ServiceFilters $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filters' => ?ServiceFilters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListServicesResponse {
  public ?NextToken $next_token;
  public ?ServiceSummariesList $services;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'services' => ?ServiceSummariesList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->services = $s['services'] ?? vec[];
  }
}

type MaxResults = int;

type Message = string;

class Namespace {
  public ?Arn $arn;
  public ?Timestamp $create_date;
  public ?ResourceId $creator_request_id;
  public ?ResourceDescription $description;
  public ?ResourceId $id;
  public ?NamespaceName $name;
  public ?NamespaceProperties $properties;
  public ?ResourceCount $service_count;
  public ?NamespaceType $type;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'create_date' => ?Timestamp,
    ?'creator_request_id' => ?ResourceId,
    ?'description' => ?ResourceDescription,
    ?'id' => ?ResourceId,
    ?'name' => ?NamespaceName,
    ?'properties' => ?NamespaceProperties,
    ?'service_count' => ?ResourceCount,
    ?'type' => ?NamespaceType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->create_date = $s['create_date'] ?? 0;
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->properties = $s['properties'] ?? null;
    $this->service_count = $s['service_count'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

class NamespaceAlreadyExists {
  public ?ResourceId $creator_request_id;
  public ?ErrorMessage $message;
  public ?ResourceId $namespace_id;

  public function __construct(shape(
    ?'creator_request_id' => ?ResourceId,
    ?'message' => ?ErrorMessage,
    ?'namespace_id' => ?ResourceId,
  ) $s = shape()) {
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->namespace_id = $s['namespace_id'] ?? '';
  }
}

class NamespaceFilter {
  public ?FilterCondition $condition;
  public ?NamespaceFilterName $name;
  public ?FilterValues $values;

  public function __construct(shape(
    ?'condition' => ?FilterCondition,
    ?'name' => ?NamespaceFilterName,
    ?'values' => ?FilterValues,
  ) $s = shape()) {
    $this->condition = $s['condition'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type NamespaceFilterName = string;

type NamespaceFilters = vec<NamespaceFilter>;

type NamespaceName = string;

class NamespaceNotFound {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class NamespaceProperties {
  public ?DnsProperties $dns_properties;
  public ?HttpProperties $http_properties;

  public function __construct(shape(
    ?'dns_properties' => ?DnsProperties,
    ?'http_properties' => ?HttpProperties,
  ) $s = shape()) {
    $this->dns_properties = $s['dns_properties'] ?? null;
    $this->http_properties = $s['http_properties'] ?? null;
  }
}

type NamespaceSummariesList = vec<NamespaceSummary>;

class NamespaceSummary {
  public ?Arn $arn;
  public ?Timestamp $create_date;
  public ?ResourceDescription $description;
  public ?ResourceId $id;
  public ?NamespaceName $name;
  public ?NamespaceProperties $properties;
  public ?ResourceCount $service_count;
  public ?NamespaceType $type;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'create_date' => ?Timestamp,
    ?'description' => ?ResourceDescription,
    ?'id' => ?ResourceId,
    ?'name' => ?NamespaceName,
    ?'properties' => ?NamespaceProperties,
    ?'service_count' => ?ResourceCount,
    ?'type' => ?NamespaceType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->create_date = $s['create_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->properties = $s['properties'] ?? null;
    $this->service_count = $s['service_count'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

type NamespaceType = string;

type NextToken = string;

class Operation {
  public ?Timestamp $create_date;
  public ?Code $error_code;
  public ?Message $error_message;
  public ?OperationId $id;
  public ?OperationStatus $status;
  public ?OperationTargetsMap $targets;
  public ?OperationType $type;
  public ?Timestamp $update_date;

  public function __construct(shape(
    ?'create_date' => ?Timestamp,
    ?'error_code' => ?Code,
    ?'error_message' => ?Message,
    ?'id' => ?OperationId,
    ?'status' => ?OperationStatus,
    ?'targets' => ?OperationTargetsMap,
    ?'type' => ?OperationType,
    ?'update_date' => ?Timestamp,
  ) $s = shape()) {
    $this->create_date = $s['create_date'] ?? 0;
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->targets = $s['targets'] ?? dict[];
    $this->type = $s['type'] ?? '';
    $this->update_date = $s['update_date'] ?? 0;
  }
}

class OperationFilter {
  public ?FilterCondition $condition;
  public ?OperationFilterName $name;
  public ?FilterValues $values;

  public function __construct(shape(
    ?'condition' => ?FilterCondition,
    ?'name' => ?OperationFilterName,
    ?'values' => ?FilterValues,
  ) $s = shape()) {
    $this->condition = $s['condition'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type OperationFilterName = string;

type OperationFilters = vec<OperationFilter>;

type OperationId = string;

class OperationNotFound {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type OperationStatus = string;

class OperationSummary {
  public ?OperationId $id;
  public ?OperationStatus $status;

  public function __construct(shape(
    ?'id' => ?OperationId,
    ?'status' => ?OperationStatus,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type OperationSummaryList = vec<OperationSummary>;

type OperationTargetType = string;

type OperationTargetsMap = dict<OperationTargetType, ResourceId>;

type OperationType = string;

type RecordTTL = int;

type RecordType = string;

class RegisterInstanceRequest {
  public ?Attributes $attributes;
  public ?ResourceId $creator_request_id;
  public ?ResourceId $instance_id;
  public ?ResourceId $service_id;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
    ?'creator_request_id' => ?ResourceId,
    ?'instance_id' => ?ResourceId,
    ?'service_id' => ?ResourceId,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->service_id = $s['service_id'] ?? '';
  }
}

class RegisterInstanceResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

type ResourceCount = int;

type ResourceDescription = string;

type ResourceId = string;

class ResourceInUse {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceLimitExceeded {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ResourcePath = string;

type RoutingPolicy = string;

class Service {
  public ?Arn $arn;
  public ?Timestamp $create_date;
  public ?ResourceId $creator_request_id;
  public ?ResourceDescription $description;
  public ?DnsConfig $dns_config;
  public ?HealthCheckConfig $health_check_config;
  public ?HealthCheckCustomConfig $health_check_custom_config;
  public ?ResourceId $id;
  public ?ResourceCount $instance_count;
  public ?ServiceName $name;
  public ?ResourceId $namespace_id;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'create_date' => ?Timestamp,
    ?'creator_request_id' => ?ResourceId,
    ?'description' => ?ResourceDescription,
    ?'dns_config' => ?DnsConfig,
    ?'health_check_config' => ?HealthCheckConfig,
    ?'health_check_custom_config' => ?HealthCheckCustomConfig,
    ?'id' => ?ResourceId,
    ?'instance_count' => ?ResourceCount,
    ?'name' => ?ServiceName,
    ?'namespace_id' => ?ResourceId,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->create_date = $s['create_date'] ?? 0;
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->dns_config = $s['dns_config'] ?? null;
    $this->health_check_config = $s['health_check_config'] ?? null;
    $this->health_check_custom_config = $s['health_check_custom_config'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->instance_count = $s['instance_count'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->namespace_id = $s['namespace_id'] ?? '';
  }
}

class ServiceAlreadyExists {
  public ?ResourceId $creator_request_id;
  public ?ErrorMessage $message;
  public ?ResourceId $service_id;

  public function __construct(shape(
    ?'creator_request_id' => ?ResourceId,
    ?'message' => ?ErrorMessage,
    ?'service_id' => ?ResourceId,
  ) $s = shape()) {
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->service_id = $s['service_id'] ?? '';
  }
}

class ServiceChange {
  public ?ResourceDescription $description;
  public ?DnsConfigChange $dns_config;
  public ?HealthCheckConfig $health_check_config;

  public function __construct(shape(
    ?'description' => ?ResourceDescription,
    ?'dns_config' => ?DnsConfigChange,
    ?'health_check_config' => ?HealthCheckConfig,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->dns_config = $s['dns_config'] ?? null;
    $this->health_check_config = $s['health_check_config'] ?? null;
  }
}

class ServiceFilter {
  public ?FilterCondition $condition;
  public ?ServiceFilterName $name;
  public ?FilterValues $values;

  public function __construct(shape(
    ?'condition' => ?FilterCondition,
    ?'name' => ?ServiceFilterName,
    ?'values' => ?FilterValues,
  ) $s = shape()) {
    $this->condition = $s['condition'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type ServiceFilterName = string;

type ServiceFilters = vec<ServiceFilter>;

type ServiceName = string;

class ServiceNotFound {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ServiceSummariesList = vec<ServiceSummary>;

class ServiceSummary {
  public ?Arn $arn;
  public ?Timestamp $create_date;
  public ?ResourceDescription $description;
  public ?DnsConfig $dns_config;
  public ?HealthCheckConfig $health_check_config;
  public ?HealthCheckCustomConfig $health_check_custom_config;
  public ?ResourceId $id;
  public ?ResourceCount $instance_count;
  public ?ServiceName $name;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'create_date' => ?Timestamp,
    ?'description' => ?ResourceDescription,
    ?'dns_config' => ?DnsConfig,
    ?'health_check_config' => ?HealthCheckConfig,
    ?'health_check_custom_config' => ?HealthCheckCustomConfig,
    ?'id' => ?ResourceId,
    ?'instance_count' => ?ResourceCount,
    ?'name' => ?ServiceName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->create_date = $s['create_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->dns_config = $s['dns_config'] ?? null;
    $this->health_check_config = $s['health_check_config'] ?? null;
    $this->health_check_custom_config = $s['health_check_custom_config'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->instance_count = $s['instance_count'] ?? 0;
    $this->name = $s['name'] ?? '';
  }
}

type Timestamp = int;

class UpdateInstanceCustomHealthStatusRequest {
  public ?ResourceId $instance_id;
  public ?ResourceId $service_id;
  public ?CustomHealthStatus $status;

  public function __construct(shape(
    ?'instance_id' => ?ResourceId,
    ?'service_id' => ?ResourceId,
    ?'status' => ?CustomHealthStatus,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->service_id = $s['service_id'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class UpdateServiceRequest {
  public ?ResourceId $id;
  public ?ServiceChange $service;

  public function __construct(shape(
    ?'id' => ?ResourceId,
    ?'service' => ?ServiceChange,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->service = $s['service'] ?? null;
  }
}

class UpdateServiceResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}


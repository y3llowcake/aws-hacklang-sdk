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

type Arn = string;

type AttrKey = string;

type AttrValue = string;

type Attributes = dict<AttrKey, AttrValue>;

type Code = string;

class CreateHttpNamespaceRequest {
  public ResourceId $creator_request_id;
  public ResourceDescription $description;
  public NamespaceName $name;

  public function __construct(shape(
  ?'creator_request_id' => ResourceId,
  ?'description' => ResourceDescription,
  ?'name' => NamespaceName,
  ) $s = shape()) {
    $this->creator_request_id = $creator_request_id ?? "";
    $this->description = $description ?? "";
    $this->name = $name ?? "";
  }
}

class CreateHttpNamespaceResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

class CreatePrivateDnsNamespaceRequest {
  public ResourceId $creator_request_id;
  public ResourceDescription $description;
  public NamespaceName $name;
  public ResourceId $vpc;

  public function __construct(shape(
  ?'creator_request_id' => ResourceId,
  ?'description' => ResourceDescription,
  ?'name' => NamespaceName,
  ?'vpc' => ResourceId,
  ) $s = shape()) {
    $this->creator_request_id = $creator_request_id ?? "";
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->vpc = $vpc ?? "";
  }
}

class CreatePrivateDnsNamespaceResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

class CreatePublicDnsNamespaceRequest {
  public ResourceId $creator_request_id;
  public ResourceDescription $description;
  public NamespaceName $name;

  public function __construct(shape(
  ?'creator_request_id' => ResourceId,
  ?'description' => ResourceDescription,
  ?'name' => NamespaceName,
  ) $s = shape()) {
    $this->creator_request_id = $creator_request_id ?? "";
    $this->description = $description ?? "";
    $this->name = $name ?? "";
  }
}

class CreatePublicDnsNamespaceResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

class CreateServiceRequest {
  public ResourceId $creator_request_id;
  public ResourceDescription $description;
  public DnsConfig $dns_config;
  public HealthCheckConfig $health_check_config;
  public HealthCheckCustomConfig $health_check_custom_config;
  public ServiceName $name;
  public ResourceId $namespace_id;

  public function __construct(shape(
  ?'creator_request_id' => ResourceId,
  ?'description' => ResourceDescription,
  ?'dns_config' => DnsConfig,
  ?'health_check_config' => HealthCheckConfig,
  ?'health_check_custom_config' => HealthCheckCustomConfig,
  ?'name' => ServiceName,
  ?'namespace_id' => ResourceId,
  ) $s = shape()) {
    $this->creator_request_id = $creator_request_id ?? "";
    $this->description = $description ?? "";
    $this->dns_config = $dns_config ?? null;
    $this->health_check_config = $health_check_config ?? null;
    $this->health_check_custom_config = $health_check_custom_config ?? null;
    $this->name = $name ?? "";
    $this->namespace_id = $namespace_id ?? "";
  }
}

class CreateServiceResponse {
  public Service $service;

  public function __construct(shape(
  ?'service' => Service,
  ) $s = shape()) {
    $this->service = $service ?? null;
  }
}

class CustomHealthNotFound {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type CustomHealthStatus = string;

class DeleteNamespaceRequest {
  public ResourceId $id;

  public function __construct(shape(
  ?'id' => ResourceId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class DeleteNamespaceResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

class DeleteServiceRequest {
  public ResourceId $id;

  public function __construct(shape(
  ?'id' => ResourceId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class DeleteServiceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeregisterInstanceRequest {
  public ResourceId $instance_id;
  public ResourceId $service_id;

  public function __construct(shape(
  ?'instance_id' => ResourceId,
  ?'service_id' => ResourceId,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? "";
    $this->service_id = $service_id ?? "";
  }
}

class DeregisterInstanceResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

class DiscoverInstancesRequest {
  public HealthStatusFilter $health_status;
  public MaxResults $max_results;
  public NamespaceName $namespace_name;
  public Attributes $query_parameters;
  public ServiceName $service_name;

  public function __construct(shape(
  ?'health_status' => HealthStatusFilter,
  ?'max_results' => MaxResults,
  ?'namespace_name' => NamespaceName,
  ?'query_parameters' => Attributes,
  ?'service_name' => ServiceName,
  ) $s = shape()) {
    $this->health_status = $health_status ?? "";
    $this->max_results = $max_results ?? 0;
    $this->namespace_name = $namespace_name ?? "";
    $this->query_parameters = $query_parameters ?? [];
    $this->service_name = $service_name ?? "";
  }
}

class DiscoverInstancesResponse {
  public HttpInstanceSummaryList $instances;

  public function __construct(shape(
  ?'instances' => HttpInstanceSummaryList,
  ) $s = shape()) {
    $this->instances = $instances ?? [];
  }
}

class DnsConfig {
  public DnsRecordList $dns_records;
  public ResourceId $namespace_id;
  public RoutingPolicy $routing_policy;

  public function __construct(shape(
  ?'dns_records' => DnsRecordList,
  ?'namespace_id' => ResourceId,
  ?'routing_policy' => RoutingPolicy,
  ) $s = shape()) {
    $this->dns_records = $dns_records ?? [];
    $this->namespace_id = $namespace_id ?? "";
    $this->routing_policy = $routing_policy ?? "";
  }
}

class DnsConfigChange {
  public DnsRecordList $dns_records;

  public function __construct(shape(
  ?'dns_records' => DnsRecordList,
  ) $s = shape()) {
    $this->dns_records = $dns_records ?? [];
  }
}

class DnsProperties {
  public ResourceId $hosted_zone_id;

  public function __construct(shape(
  ?'hosted_zone_id' => ResourceId,
  ) $s = shape()) {
    $this->hosted_zone_id = $hosted_zone_id ?? "";
  }
}

class DnsRecord {
  public RecordTTL $ttl;
  public RecordType $type;

  public function __construct(shape(
  ?'ttl' => RecordTTL,
  ?'type' => RecordType,
  ) $s = shape()) {
    $this->ttl = $ttl ?? 0;
    $this->type = $type ?? "";
  }
}

type DnsRecordList = vec<DnsRecord>;

class DuplicateRequest {
  public ResourceId $duplicate_operation_id;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'duplicate_operation_id' => ResourceId,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->duplicate_operation_id = $duplicate_operation_id ?? "";
    $this->message = $message ?? "";
  }
}

type ErrorMessage = string;

type FailureThreshold = int;

type FilterCondition = string;

type FilterValue = string;

type FilterValues = vec<FilterValue>;

class GetInstanceRequest {
  public ResourceId $instance_id;
  public ResourceId $service_id;

  public function __construct(shape(
  ?'instance_id' => ResourceId,
  ?'service_id' => ResourceId,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? "";
    $this->service_id = $service_id ?? "";
  }
}

class GetInstanceResponse {
  public Instance $instance;

  public function __construct(shape(
  ?'instance' => Instance,
  ) $s = shape()) {
    $this->instance = $instance ?? null;
  }
}

class GetInstancesHealthStatusRequest {
  public InstanceIdList $instances;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceId $service_id;

  public function __construct(shape(
  ?'instances' => InstanceIdList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'service_id' => ResourceId,
  ) $s = shape()) {
    $this->instances = $instances ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->service_id = $service_id ?? "";
  }
}

class GetInstancesHealthStatusResponse {
  public NextToken $next_token;
  public InstanceHealthStatusMap $status;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'status' => InstanceHealthStatusMap,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->status = $status ?? [];
  }
}

class GetNamespaceRequest {
  public ResourceId $id;

  public function __construct(shape(
  ?'id' => ResourceId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class GetNamespaceResponse {
  public Namespace $namespace;

  public function __construct(shape(
  ?'namespace' => Namespace,
  ) $s = shape()) {
    $this->namespace = $namespace ?? null;
  }
}

class GetOperationRequest {
  public ResourceId $operation_id;

  public function __construct(shape(
  ?'operation_id' => ResourceId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

class GetOperationResponse {
  public Operation $operation;

  public function __construct(shape(
  ?'operation' => Operation,
  ) $s = shape()) {
    $this->operation = $operation ?? null;
  }
}

class GetServiceRequest {
  public ResourceId $id;

  public function __construct(shape(
  ?'id' => ResourceId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class GetServiceResponse {
  public Service $service;

  public function __construct(shape(
  ?'service' => Service,
  ) $s = shape()) {
    $this->service = $service ?? null;
  }
}

class HealthCheckConfig {
  public FailureThreshold $failure_threshold;
  public ResourcePath $resource_path;
  public HealthCheckType $type;

  public function __construct(shape(
  ?'failure_threshold' => FailureThreshold,
  ?'resource_path' => ResourcePath,
  ?'type' => HealthCheckType,
  ) $s = shape()) {
    $this->failure_threshold = $failure_threshold ?? 0;
    $this->resource_path = $resource_path ?? "";
    $this->type = $type ?? "";
  }
}

class HealthCheckCustomConfig {
  public FailureThreshold $failure_threshold;

  public function __construct(shape(
  ?'failure_threshold' => FailureThreshold,
  ) $s = shape()) {
    $this->failure_threshold = $failure_threshold ?? 0;
  }
}

type HealthCheckType = string;

type HealthStatus = string;

type HealthStatusFilter = string;

class HttpInstanceSummary {
  public Attributes $attributes;
  public HealthStatus $health_status;
  public ResourceId $instance_id;
  public NamespaceName $namespace_name;
  public ServiceName $service_name;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'health_status' => HealthStatus,
  ?'instance_id' => ResourceId,
  ?'namespace_name' => NamespaceName,
  ?'service_name' => ServiceName,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->health_status = $health_status ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->namespace_name = $namespace_name ?? "";
    $this->service_name = $service_name ?? "";
  }
}

type HttpInstanceSummaryList = vec<HttpInstanceSummary>;

class HttpProperties {
  public NamespaceName $http_name;

  public function __construct(shape(
  ?'http_name' => NamespaceName,
  ) $s = shape()) {
    $this->http_name = $http_name ?? "";
  }
}

class Instance {
  public Attributes $attributes;
  public ResourceId $creator_request_id;
  public ResourceId $id;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'creator_request_id' => ResourceId,
  ?'id' => ResourceId,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->creator_request_id = $creator_request_id ?? "";
    $this->id = $id ?? "";
  }
}

type InstanceHealthStatusMap = dict<ResourceId, HealthStatus>;

type InstanceIdList = vec<ResourceId>;

class InstanceNotFound {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InstanceSummary {
  public Attributes $attributes;
  public ResourceId $id;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'id' => ResourceId,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->id = $id ?? "";
  }
}

type InstanceSummaryList = vec<InstanceSummary>;

class InvalidInput {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListInstancesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceId $service_id;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'service_id' => ResourceId,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->service_id = $service_id ?? "";
  }
}

class ListInstancesResponse {
  public InstanceSummaryList $instances;
  public NextToken $next_token;

  public function __construct(shape(
  ?'instances' => InstanceSummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->instances = $instances ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListNamespacesRequest {
  public NamespaceFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => NamespaceFilters,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListNamespacesResponse {
  public NamespaceSummariesList $namespaces;
  public NextToken $next_token;

  public function __construct(shape(
  ?'namespaces' => NamespaceSummariesList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->namespaces = $namespaces ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListOperationsRequest {
  public OperationFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => OperationFilters,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListOperationsResponse {
  public NextToken $next_token;
  public OperationSummaryList $operations;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'operations' => OperationSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->operations = $operations ?? [];
  }
}

class ListServicesRequest {
  public ServiceFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => ServiceFilters,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListServicesResponse {
  public NextToken $next_token;
  public ServiceSummariesList $services;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'services' => ServiceSummariesList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->services = $services ?? [];
  }
}

type MaxResults = int;

type Message = string;

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

  public function __construct(shape(
  ?'arn' => Arn,
  ?'create_date' => Timestamp,
  ?'creator_request_id' => ResourceId,
  ?'description' => ResourceDescription,
  ?'id' => ResourceId,
  ?'name' => NamespaceName,
  ?'properties' => NamespaceProperties,
  ?'service_count' => ResourceCount,
  ?'type' => NamespaceType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->create_date = $create_date ?? 0;
    $this->creator_request_id = $creator_request_id ?? "";
    $this->description = $description ?? "";
    $this->id = $id ?? "";
    $this->name = $name ?? "";
    $this->properties = $properties ?? null;
    $this->service_count = $service_count ?? 0;
    $this->type = $type ?? "";
  }
}

class NamespaceAlreadyExists {
  public ResourceId $creator_request_id;
  public ErrorMessage $message;
  public ResourceId $namespace_id;

  public function __construct(shape(
  ?'creator_request_id' => ResourceId,
  ?'message' => ErrorMessage,
  ?'namespace_id' => ResourceId,
  ) $s = shape()) {
    $this->creator_request_id = $creator_request_id ?? "";
    $this->message = $message ?? "";
    $this->namespace_id = $namespace_id ?? "";
  }
}

class NamespaceFilter {
  public FilterCondition $condition;
  public NamespaceFilterName $name;
  public FilterValues $values;

  public function __construct(shape(
  ?'condition' => FilterCondition,
  ?'name' => NamespaceFilterName,
  ?'values' => FilterValues,
  ) $s = shape()) {
    $this->condition = $condition ?? "";
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type NamespaceFilterName = string;

type NamespaceFilters = vec<NamespaceFilter>;

type NamespaceName = string;

class NamespaceNotFound {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class NamespaceProperties {
  public DnsProperties $dns_properties;
  public HttpProperties $http_properties;

  public function __construct(shape(
  ?'dns_properties' => DnsProperties,
  ?'http_properties' => HttpProperties,
  ) $s = shape()) {
    $this->dns_properties = $dns_properties ?? null;
    $this->http_properties = $http_properties ?? null;
  }
}

type NamespaceSummariesList = vec<NamespaceSummary>;

class NamespaceSummary {
  public Arn $arn;
  public Timestamp $create_date;
  public ResourceDescription $description;
  public ResourceId $id;
  public NamespaceName $name;
  public NamespaceProperties $properties;
  public ResourceCount $service_count;
  public NamespaceType $type;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'create_date' => Timestamp,
  ?'description' => ResourceDescription,
  ?'id' => ResourceId,
  ?'name' => NamespaceName,
  ?'properties' => NamespaceProperties,
  ?'service_count' => ResourceCount,
  ?'type' => NamespaceType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->create_date = $create_date ?? 0;
    $this->description = $description ?? "";
    $this->id = $id ?? "";
    $this->name = $name ?? "";
    $this->properties = $properties ?? null;
    $this->service_count = $service_count ?? 0;
    $this->type = $type ?? "";
  }
}

type NamespaceType = string;

type NextToken = string;

class Operation {
  public Timestamp $create_date;
  public Code $error_code;
  public Message $error_message;
  public OperationId $id;
  public OperationStatus $status;
  public OperationTargetsMap $targets;
  public OperationType $type;
  public Timestamp $update_date;

  public function __construct(shape(
  ?'create_date' => Timestamp,
  ?'error_code' => Code,
  ?'error_message' => Message,
  ?'id' => OperationId,
  ?'status' => OperationStatus,
  ?'targets' => OperationTargetsMap,
  ?'type' => OperationType,
  ?'update_date' => Timestamp,
  ) $s = shape()) {
    $this->create_date = $create_date ?? 0;
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->id = $id ?? "";
    $this->status = $status ?? "";
    $this->targets = $targets ?? [];
    $this->type = $type ?? "";
    $this->update_date = $update_date ?? 0;
  }
}

class OperationFilter {
  public FilterCondition $condition;
  public OperationFilterName $name;
  public FilterValues $values;

  public function __construct(shape(
  ?'condition' => FilterCondition,
  ?'name' => OperationFilterName,
  ?'values' => FilterValues,
  ) $s = shape()) {
    $this->condition = $condition ?? "";
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type OperationFilterName = string;

type OperationFilters = vec<OperationFilter>;

type OperationId = string;

class OperationNotFound {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type OperationStatus = string;

class OperationSummary {
  public OperationId $id;
  public OperationStatus $status;

  public function __construct(shape(
  ?'id' => OperationId,
  ?'status' => OperationStatus,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->status = $status ?? "";
  }
}

type OperationSummaryList = vec<OperationSummary>;

type OperationTargetType = string;

type OperationTargetsMap = dict<OperationTargetType, ResourceId>;

type OperationType = string;

type RecordTTL = int;

type RecordType = string;

class RegisterInstanceRequest {
  public Attributes $attributes;
  public ResourceId $creator_request_id;
  public ResourceId $instance_id;
  public ResourceId $service_id;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'creator_request_id' => ResourceId,
  ?'instance_id' => ResourceId,
  ?'service_id' => ResourceId,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->creator_request_id = $creator_request_id ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->service_id = $service_id ?? "";
  }
}

class RegisterInstanceResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

type ResourceCount = int;

type ResourceDescription = string;

type ResourceId = string;

class ResourceInUse {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceLimitExceeded {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ResourcePath = string;

type RoutingPolicy = string;

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

  public function __construct(shape(
  ?'arn' => Arn,
  ?'create_date' => Timestamp,
  ?'creator_request_id' => ResourceId,
  ?'description' => ResourceDescription,
  ?'dns_config' => DnsConfig,
  ?'health_check_config' => HealthCheckConfig,
  ?'health_check_custom_config' => HealthCheckCustomConfig,
  ?'id' => ResourceId,
  ?'instance_count' => ResourceCount,
  ?'name' => ServiceName,
  ?'namespace_id' => ResourceId,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->create_date = $create_date ?? 0;
    $this->creator_request_id = $creator_request_id ?? "";
    $this->description = $description ?? "";
    $this->dns_config = $dns_config ?? null;
    $this->health_check_config = $health_check_config ?? null;
    $this->health_check_custom_config = $health_check_custom_config ?? null;
    $this->id = $id ?? "";
    $this->instance_count = $instance_count ?? 0;
    $this->name = $name ?? "";
    $this->namespace_id = $namespace_id ?? "";
  }
}

class ServiceAlreadyExists {
  public ResourceId $creator_request_id;
  public ErrorMessage $message;
  public ResourceId $service_id;

  public function __construct(shape(
  ?'creator_request_id' => ResourceId,
  ?'message' => ErrorMessage,
  ?'service_id' => ResourceId,
  ) $s = shape()) {
    $this->creator_request_id = $creator_request_id ?? "";
    $this->message = $message ?? "";
    $this->service_id = $service_id ?? "";
  }
}

class ServiceChange {
  public ResourceDescription $description;
  public DnsConfigChange $dns_config;
  public HealthCheckConfig $health_check_config;

  public function __construct(shape(
  ?'description' => ResourceDescription,
  ?'dns_config' => DnsConfigChange,
  ?'health_check_config' => HealthCheckConfig,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->dns_config = $dns_config ?? null;
    $this->health_check_config = $health_check_config ?? null;
  }
}

class ServiceFilter {
  public FilterCondition $condition;
  public ServiceFilterName $name;
  public FilterValues $values;

  public function __construct(shape(
  ?'condition' => FilterCondition,
  ?'name' => ServiceFilterName,
  ?'values' => FilterValues,
  ) $s = shape()) {
    $this->condition = $condition ?? "";
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type ServiceFilterName = string;

type ServiceFilters = vec<ServiceFilter>;

type ServiceName = string;

class ServiceNotFound {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ServiceSummariesList = vec<ServiceSummary>;

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

  public function __construct(shape(
  ?'arn' => Arn,
  ?'create_date' => Timestamp,
  ?'description' => ResourceDescription,
  ?'dns_config' => DnsConfig,
  ?'health_check_config' => HealthCheckConfig,
  ?'health_check_custom_config' => HealthCheckCustomConfig,
  ?'id' => ResourceId,
  ?'instance_count' => ResourceCount,
  ?'name' => ServiceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->create_date = $create_date ?? 0;
    $this->description = $description ?? "";
    $this->dns_config = $dns_config ?? null;
    $this->health_check_config = $health_check_config ?? null;
    $this->health_check_custom_config = $health_check_custom_config ?? null;
    $this->id = $id ?? "";
    $this->instance_count = $instance_count ?? 0;
    $this->name = $name ?? "";
  }
}

type Timestamp = int;

class UpdateInstanceCustomHealthStatusRequest {
  public ResourceId $instance_id;
  public ResourceId $service_id;
  public CustomHealthStatus $status;

  public function __construct(shape(
  ?'instance_id' => ResourceId,
  ?'service_id' => ResourceId,
  ?'status' => CustomHealthStatus,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? "";
    $this->service_id = $service_id ?? "";
    $this->status = $status ?? "";
  }
}

class UpdateServiceRequest {
  public ResourceId $id;
  public ServiceChange $service;

  public function __construct(shape(
  ?'id' => ResourceId,
  ?'service' => ServiceChange,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->service = $service ?? null;
  }
}

class UpdateServiceResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}


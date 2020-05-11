<?hh // strict
namespace slack\aws\appmesh;

interface App Mesh {
  public function CreateMesh(CreateMeshInput): Awaitable<Errors\Result<CreateMeshOutput>>;
  public function CreateRoute(CreateRouteInput): Awaitable<Errors\Result<CreateRouteOutput>>;
  public function CreateVirtualNode(CreateVirtualNodeInput): Awaitable<Errors\Result<CreateVirtualNodeOutput>>;
  public function CreateVirtualRouter(CreateVirtualRouterInput): Awaitable<Errors\Result<CreateVirtualRouterOutput>>;
  public function CreateVirtualService(CreateVirtualServiceInput): Awaitable<Errors\Result<CreateVirtualServiceOutput>>;
  public function DeleteMesh(DeleteMeshInput): Awaitable<Errors\Result<DeleteMeshOutput>>;
  public function DeleteRoute(DeleteRouteInput): Awaitable<Errors\Result<DeleteRouteOutput>>;
  public function DeleteVirtualNode(DeleteVirtualNodeInput): Awaitable<Errors\Result<DeleteVirtualNodeOutput>>;
  public function DeleteVirtualRouter(DeleteVirtualRouterInput): Awaitable<Errors\Result<DeleteVirtualRouterOutput>>;
  public function DeleteVirtualService(DeleteVirtualServiceInput): Awaitable<Errors\Result<DeleteVirtualServiceOutput>>;
  public function DescribeMesh(DescribeMeshInput): Awaitable<Errors\Result<DescribeMeshOutput>>;
  public function DescribeRoute(DescribeRouteInput): Awaitable<Errors\Result<DescribeRouteOutput>>;
  public function DescribeVirtualNode(DescribeVirtualNodeInput): Awaitable<Errors\Result<DescribeVirtualNodeOutput>>;
  public function DescribeVirtualRouter(DescribeVirtualRouterInput): Awaitable<Errors\Result<DescribeVirtualRouterOutput>>;
  public function DescribeVirtualService(DescribeVirtualServiceInput): Awaitable<Errors\Result<DescribeVirtualServiceOutput>>;
  public function ListMeshes(ListMeshesInput): Awaitable<Errors\Result<ListMeshesOutput>>;
  public function ListRoutes(ListRoutesInput): Awaitable<Errors\Result<ListRoutesOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput): Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function ListVirtualNodes(ListVirtualNodesInput): Awaitable<Errors\Result<ListVirtualNodesOutput>>;
  public function ListVirtualRouters(ListVirtualRoutersInput): Awaitable<Errors\Result<ListVirtualRoutersOutput>>;
  public function ListVirtualServices(ListVirtualServicesInput): Awaitable<Errors\Result<ListVirtualServicesOutput>>;
  public function TagResource(TagResourceInput): Awaitable<Errors\Result<TagResourceOutput>>;
  public function UntagResource(UntagResourceInput): Awaitable<Errors\Result<UntagResourceOutput>>;
  public function UpdateMesh(UpdateMeshInput): Awaitable<Errors\Result<UpdateMeshOutput>>;
  public function UpdateRoute(UpdateRouteInput): Awaitable<Errors\Result<UpdateRouteOutput>>;
  public function UpdateVirtualNode(UpdateVirtualNodeInput): Awaitable<Errors\Result<UpdateVirtualNodeOutput>>;
  public function UpdateVirtualRouter(UpdateVirtualRouterInput): Awaitable<Errors\Result<UpdateVirtualRouterOutput>>;
  public function UpdateVirtualService(UpdateVirtualServiceInput): Awaitable<Errors\Result<UpdateVirtualServiceOutput>>;
}

class AccessLog {
  public FileAccessLog $file;

  public function __construct(shape(
  ?'file' => FileAccessLog,
  ) $s = shape()) {
    $this->file = $file ?? null;
  }
}

type AccountId = string;

type Arn = string;

class AwsCloudMapInstanceAttribute {
  public AwsCloudMapInstanceAttributeKey $key;
  public AwsCloudMapInstanceAttributeValue $value;

  public function __construct(shape(
  ?'key' => AwsCloudMapInstanceAttributeKey,
  ?'value' => AwsCloudMapInstanceAttributeValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type AwsCloudMapInstanceAttributeKey = string;

type AwsCloudMapInstanceAttributeValue = string;

type AwsCloudMapInstanceAttributes = vec<AwsCloudMapInstanceAttribute>;

type AwsCloudMapName = string;

class AwsCloudMapServiceDiscovery {
  public AwsCloudMapInstanceAttributes $attributes;
  public AwsCloudMapName $namespace_name;
  public AwsCloudMapName $service_name;

  public function __construct(shape(
  ?'attributes' => AwsCloudMapInstanceAttributes,
  ?'namespace_name' => AwsCloudMapName,
  ?'service_name' => AwsCloudMapName,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->namespace_name = $namespace_name ?? "";
    $this->service_name = $service_name ?? "";
  }
}

class Backend {
  public VirtualServiceBackend $virtual_service;

  public function __construct(shape(
  ?'virtual_service' => VirtualServiceBackend,
  ) $s = shape()) {
    $this->virtual_service = $virtual_service ?? null;
  }
}

class BackendDefaults {
  public ClientPolicy $client_policy;

  public function __construct(shape(
  ?'client_policy' => ClientPolicy,
  ) $s = shape()) {
    $this->client_policy = $client_policy ?? null;
  }
}

type Backends = vec<Backend>;

class BadRequestException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Boolean = bool;

type CertificateAuthorityArns = vec<Arn>;

class ClientPolicy {
  public ClientPolicyTls $tls;

  public function __construct(shape(
  ?'tls' => ClientPolicyTls,
  ) $s = shape()) {
    $this->tls = $tls ?? null;
  }
}

class ClientPolicyTls {
  public boolean $enforce;
  public PortSet $ports;
  public TlsValidationContext $validation;

  public function __construct(shape(
  ?'enforce' => boolean,
  ?'ports' => PortSet,
  ?'validation' => TlsValidationContext,
  ) $s = shape()) {
    $this->enforce = $enforce ?? false;
    $this->ports = $ports ?? [];
    $this->validation = $validation ?? null;
  }
}

class ConflictException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CreateMeshInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public MeshSpec $spec;
  public TagList $tags;

  public function __construct(shape(
  ?'client_token' => string,
  ?'mesh_name' => ResourceName,
  ?'spec' => MeshSpec,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->mesh_name = $mesh_name ?? "";
    $this->spec = $spec ?? null;
    $this->tags = $tags ?? [];
  }
}

class CreateMeshOutput {
  public MeshData $mesh;

  public function __construct(shape(
  ?'mesh' => MeshData,
  ) $s = shape()) {
    $this->mesh = $mesh ?? null;
  }
}

class CreateRouteInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $route_name;
  public RouteSpec $spec;
  public TagList $tags;
  public ResourceName $virtual_router_name;

  public function __construct(shape(
  ?'client_token' => string,
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'route_name' => ResourceName,
  ?'spec' => RouteSpec,
  ?'tags' => TagList,
  ?'virtual_router_name' => ResourceName,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->route_name = $route_name ?? "";
    $this->spec = $spec ?? null;
    $this->tags = $tags ?? [];
    $this->virtual_router_name = $virtual_router_name ?? "";
  }
}

class CreateRouteOutput {
  public RouteData $route;

  public function __construct(shape(
  ?'route' => RouteData,
  ) $s = shape()) {
    $this->route = $route ?? null;
  }
}

class CreateVirtualNodeInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public VirtualNodeSpec $spec;
  public TagList $tags;
  public ResourceName $virtual_node_name;

  public function __construct(shape(
  ?'client_token' => string,
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'spec' => VirtualNodeSpec,
  ?'tags' => TagList,
  ?'virtual_node_name' => ResourceName,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->spec = $spec ?? null;
    $this->tags = $tags ?? [];
    $this->virtual_node_name = $virtual_node_name ?? "";
  }
}

class CreateVirtualNodeOutput {
  public VirtualNodeData $virtual_node;

  public function __construct(shape(
  ?'virtual_node' => VirtualNodeData,
  ) $s = shape()) {
    $this->virtual_node = $virtual_node ?? null;
  }
}

class CreateVirtualRouterInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public VirtualRouterSpec $spec;
  public TagList $tags;
  public ResourceName $virtual_router_name;

  public function __construct(shape(
  ?'client_token' => string,
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'spec' => VirtualRouterSpec,
  ?'tags' => TagList,
  ?'virtual_router_name' => ResourceName,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->spec = $spec ?? null;
    $this->tags = $tags ?? [];
    $this->virtual_router_name = $virtual_router_name ?? "";
  }
}

class CreateVirtualRouterOutput {
  public VirtualRouterData $virtual_router;

  public function __construct(shape(
  ?'virtual_router' => VirtualRouterData,
  ) $s = shape()) {
    $this->virtual_router = $virtual_router ?? null;
  }
}

class CreateVirtualServiceInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public VirtualServiceSpec $spec;
  public TagList $tags;
  public ServiceName $virtual_service_name;

  public function __construct(shape(
  ?'client_token' => string,
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'spec' => VirtualServiceSpec,
  ?'tags' => TagList,
  ?'virtual_service_name' => ServiceName,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->spec = $spec ?? null;
    $this->tags = $tags ?? [];
    $this->virtual_service_name = $virtual_service_name ?? "";
  }
}

class CreateVirtualServiceOutput {
  public VirtualServiceData $virtual_service;

  public function __construct(shape(
  ?'virtual_service' => VirtualServiceData,
  ) $s = shape()) {
    $this->virtual_service = $virtual_service ?? null;
  }
}

class DeleteMeshInput {
  public ResourceName $mesh_name;

  public function __construct(shape(
  ?'mesh_name' => ResourceName,
  ) $s = shape()) {
    $this->mesh_name = $mesh_name ?? "";
  }
}

class DeleteMeshOutput {
  public MeshData $mesh;

  public function __construct(shape(
  ?'mesh' => MeshData,
  ) $s = shape()) {
    $this->mesh = $mesh ?? null;
  }
}

class DeleteRouteInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $route_name;
  public ResourceName $virtual_router_name;

  public function __construct(shape(
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'route_name' => ResourceName,
  ?'virtual_router_name' => ResourceName,
  ) $s = shape()) {
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->route_name = $route_name ?? "";
    $this->virtual_router_name = $virtual_router_name ?? "";
  }
}

class DeleteRouteOutput {
  public RouteData $route;

  public function __construct(shape(
  ?'route' => RouteData,
  ) $s = shape()) {
    $this->route = $route ?? null;
  }
}

class DeleteVirtualNodeInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $virtual_node_name;

  public function __construct(shape(
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'virtual_node_name' => ResourceName,
  ) $s = shape()) {
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->virtual_node_name = $virtual_node_name ?? "";
  }
}

class DeleteVirtualNodeOutput {
  public VirtualNodeData $virtual_node;

  public function __construct(shape(
  ?'virtual_node' => VirtualNodeData,
  ) $s = shape()) {
    $this->virtual_node = $virtual_node ?? null;
  }
}

class DeleteVirtualRouterInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $virtual_router_name;

  public function __construct(shape(
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'virtual_router_name' => ResourceName,
  ) $s = shape()) {
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->virtual_router_name = $virtual_router_name ?? "";
  }
}

class DeleteVirtualRouterOutput {
  public VirtualRouterData $virtual_router;

  public function __construct(shape(
  ?'virtual_router' => VirtualRouterData,
  ) $s = shape()) {
    $this->virtual_router = $virtual_router ?? null;
  }
}

class DeleteVirtualServiceInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ServiceName $virtual_service_name;

  public function __construct(shape(
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'virtual_service_name' => ServiceName,
  ) $s = shape()) {
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->virtual_service_name = $virtual_service_name ?? "";
  }
}

class DeleteVirtualServiceOutput {
  public VirtualServiceData $virtual_service;

  public function __construct(shape(
  ?'virtual_service' => VirtualServiceData,
  ) $s = shape()) {
    $this->virtual_service = $virtual_service ?? null;
  }
}

class DescribeMeshInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;

  public function __construct(shape(
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ) $s = shape()) {
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
  }
}

class DescribeMeshOutput {
  public MeshData $mesh;

  public function __construct(shape(
  ?'mesh' => MeshData,
  ) $s = shape()) {
    $this->mesh = $mesh ?? null;
  }
}

class DescribeRouteInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $route_name;
  public ResourceName $virtual_router_name;

  public function __construct(shape(
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'route_name' => ResourceName,
  ?'virtual_router_name' => ResourceName,
  ) $s = shape()) {
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->route_name = $route_name ?? "";
    $this->virtual_router_name = $virtual_router_name ?? "";
  }
}

class DescribeRouteOutput {
  public RouteData $route;

  public function __construct(shape(
  ?'route' => RouteData,
  ) $s = shape()) {
    $this->route = $route ?? null;
  }
}

class DescribeVirtualNodeInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $virtual_node_name;

  public function __construct(shape(
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'virtual_node_name' => ResourceName,
  ) $s = shape()) {
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->virtual_node_name = $virtual_node_name ?? "";
  }
}

class DescribeVirtualNodeOutput {
  public VirtualNodeData $virtual_node;

  public function __construct(shape(
  ?'virtual_node' => VirtualNodeData,
  ) $s = shape()) {
    $this->virtual_node = $virtual_node ?? null;
  }
}

class DescribeVirtualRouterInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $virtual_router_name;

  public function __construct(shape(
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'virtual_router_name' => ResourceName,
  ) $s = shape()) {
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->virtual_router_name = $virtual_router_name ?? "";
  }
}

class DescribeVirtualRouterOutput {
  public VirtualRouterData $virtual_router;

  public function __construct(shape(
  ?'virtual_router' => VirtualRouterData,
  ) $s = shape()) {
    $this->virtual_router = $virtual_router ?? null;
  }
}

class DescribeVirtualServiceInput {
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ServiceName $virtual_service_name;

  public function __construct(shape(
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'virtual_service_name' => ServiceName,
  ) $s = shape()) {
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->virtual_service_name = $virtual_service_name ?? "";
  }
}

class DescribeVirtualServiceOutput {
  public VirtualServiceData $virtual_service;

  public function __construct(shape(
  ?'virtual_service' => VirtualServiceData,
  ) $s = shape()) {
    $this->virtual_service = $virtual_service ?? null;
  }
}

class DnsServiceDiscovery {
  public Hostname $hostname;

  public function __construct(shape(
  ?'hostname' => Hostname,
  ) $s = shape()) {
    $this->hostname = $hostname ?? "";
  }
}

class Duration {
  public DurationUnit $unit;
  public DurationValue $value;

  public function __construct(shape(
  ?'unit' => DurationUnit,
  ?'value' => DurationValue,
  ) $s = shape()) {
    $this->unit = $unit ?? "";
    $this->value = $value ?? 0;
  }
}

type DurationUnit = string;

type DurationValue = int;

class EgressFilter {
  public EgressFilterType $type;

  public function __construct(shape(
  ?'type' => EgressFilterType,
  ) $s = shape()) {
    $this->type = $type ?? "";
  }
}

type EgressFilterType = string;

class FileAccessLog {
  public FilePath $path;

  public function __construct(shape(
  ?'path' => FilePath,
  ) $s = shape()) {
    $this->path = $path ?? "";
  }
}

type FilePath = string;

class ForbiddenException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class GrpcRetryPolicy {
  public GrpcRetryPolicyEvents $grpc_retry_events;
  public HttpRetryPolicyEvents $http_retry_events;
  public MaxRetries $max_retries;
  public Duration $per_retry_timeout;
  public TcpRetryPolicyEvents $tcp_retry_events;

  public function __construct(shape(
  ?'grpc_retry_events' => GrpcRetryPolicyEvents,
  ?'http_retry_events' => HttpRetryPolicyEvents,
  ?'max_retries' => MaxRetries,
  ?'per_retry_timeout' => Duration,
  ?'tcp_retry_events' => TcpRetryPolicyEvents,
  ) $s = shape()) {
    $this->grpc_retry_events = $grpc_retry_events ?? [];
    $this->http_retry_events = $http_retry_events ?? [];
    $this->max_retries = $max_retries ?? 0;
    $this->per_retry_timeout = $per_retry_timeout ?? null;
    $this->tcp_retry_events = $tcp_retry_events ?? [];
  }
}

type GrpcRetryPolicyEvent = string;

type GrpcRetryPolicyEvents = vec<GrpcRetryPolicyEvent>;

class GrpcRoute {
  public GrpcRouteAction $action;
  public GrpcRouteMatch $match;
  public GrpcRetryPolicy $retry_policy;

  public function __construct(shape(
  ?'action' => GrpcRouteAction,
  ?'match' => GrpcRouteMatch,
  ?'retry_policy' => GrpcRetryPolicy,
  ) $s = shape()) {
    $this->action = $action ?? null;
    $this->match = $match ?? null;
    $this->retry_policy = $retry_policy ?? null;
  }
}

class GrpcRouteAction {
  public WeightedTargets $weighted_targets;

  public function __construct(shape(
  ?'weighted_targets' => WeightedTargets,
  ) $s = shape()) {
    $this->weighted_targets = $weighted_targets ?? [];
  }
}

class GrpcRouteMatch {
  public GrpcRouteMetadataList $metadata;
  public MethodName $method_name;
  public ServiceName $service_name;

  public function __construct(shape(
  ?'metadata' => GrpcRouteMetadataList,
  ?'method_name' => MethodName,
  ?'service_name' => ServiceName,
  ) $s = shape()) {
    $this->metadata = $metadata ?? [];
    $this->method_name = $method_name ?? "";
    $this->service_name = $service_name ?? "";
  }
}

class GrpcRouteMetadata {
  public boolean $invert;
  public GrpcRouteMetadataMatchMethod $match;
  public HeaderName $name;

  public function __construct(shape(
  ?'invert' => boolean,
  ?'match' => GrpcRouteMetadataMatchMethod,
  ?'name' => HeaderName,
  ) $s = shape()) {
    $this->invert = $invert ?? false;
    $this->match = $match ?? null;
    $this->name = $name ?? "";
  }
}

type GrpcRouteMetadataList = vec<GrpcRouteMetadata>;

class GrpcRouteMetadataMatchMethod {
  public HeaderMatch $exact;
  public HeaderMatch $prefix;
  public MatchRange $range;
  public HeaderMatch $regex;
  public HeaderMatch $suffix;

  public function __construct(shape(
  ?'exact' => HeaderMatch,
  ?'prefix' => HeaderMatch,
  ?'range' => MatchRange,
  ?'regex' => HeaderMatch,
  ?'suffix' => HeaderMatch,
  ) $s = shape()) {
    $this->exact = $exact ?? "";
    $this->prefix = $prefix ?? "";
    $this->range = $range ?? null;
    $this->regex = $regex ?? "";
    $this->suffix = $suffix ?? "";
  }
}

type HeaderMatch = string;

class HeaderMatchMethod {
  public HeaderMatch $exact;
  public HeaderMatch $prefix;
  public MatchRange $range;
  public HeaderMatch $regex;
  public HeaderMatch $suffix;

  public function __construct(shape(
  ?'exact' => HeaderMatch,
  ?'prefix' => HeaderMatch,
  ?'range' => MatchRange,
  ?'regex' => HeaderMatch,
  ?'suffix' => HeaderMatch,
  ) $s = shape()) {
    $this->exact = $exact ?? "";
    $this->prefix = $prefix ?? "";
    $this->range = $range ?? null;
    $this->regex = $regex ?? "";
    $this->suffix = $suffix ?? "";
  }
}

type HeaderName = string;

type HealthCheckIntervalMillis = int;

class HealthCheckPolicy {
  public HealthCheckThreshold $healthy_threshold;
  public HealthCheckIntervalMillis $interval_millis;
  public string $path;
  public PortNumber $port;
  public PortProtocol $protocol;
  public HealthCheckTimeoutMillis $timeout_millis;
  public HealthCheckThreshold $unhealthy_threshold;

  public function __construct(shape(
  ?'healthy_threshold' => HealthCheckThreshold,
  ?'interval_millis' => HealthCheckIntervalMillis,
  ?'path' => string,
  ?'port' => PortNumber,
  ?'protocol' => PortProtocol,
  ?'timeout_millis' => HealthCheckTimeoutMillis,
  ?'unhealthy_threshold' => HealthCheckThreshold,
  ) $s = shape()) {
    $this->healthy_threshold = $healthy_threshold ?? 0;
    $this->interval_millis = $interval_millis ?? 0;
    $this->path = $path ?? "";
    $this->port = $port ?? 0;
    $this->protocol = $protocol ?? "";
    $this->timeout_millis = $timeout_millis ?? 0;
    $this->unhealthy_threshold = $unhealthy_threshold ?? 0;
  }
}

type HealthCheckThreshold = int;

type HealthCheckTimeoutMillis = int;

type Hostname = string;

type HttpMethod = string;

class HttpRetryPolicy {
  public HttpRetryPolicyEvents $http_retry_events;
  public MaxRetries $max_retries;
  public Duration $per_retry_timeout;
  public TcpRetryPolicyEvents $tcp_retry_events;

  public function __construct(shape(
  ?'http_retry_events' => HttpRetryPolicyEvents,
  ?'max_retries' => MaxRetries,
  ?'per_retry_timeout' => Duration,
  ?'tcp_retry_events' => TcpRetryPolicyEvents,
  ) $s = shape()) {
    $this->http_retry_events = $http_retry_events ?? [];
    $this->max_retries = $max_retries ?? 0;
    $this->per_retry_timeout = $per_retry_timeout ?? null;
    $this->tcp_retry_events = $tcp_retry_events ?? [];
  }
}

type HttpRetryPolicyEvent = string;

type HttpRetryPolicyEvents = vec<HttpRetryPolicyEvent>;

class HttpRoute {
  public HttpRouteAction $action;
  public HttpRouteMatch $match;
  public HttpRetryPolicy $retry_policy;

  public function __construct(shape(
  ?'action' => HttpRouteAction,
  ?'match' => HttpRouteMatch,
  ?'retry_policy' => HttpRetryPolicy,
  ) $s = shape()) {
    $this->action = $action ?? null;
    $this->match = $match ?? null;
    $this->retry_policy = $retry_policy ?? null;
  }
}

class HttpRouteAction {
  public WeightedTargets $weighted_targets;

  public function __construct(shape(
  ?'weighted_targets' => WeightedTargets,
  ) $s = shape()) {
    $this->weighted_targets = $weighted_targets ?? [];
  }
}

class HttpRouteHeader {
  public boolean $invert;
  public HeaderMatchMethod $match;
  public HeaderName $name;

  public function __construct(shape(
  ?'invert' => boolean,
  ?'match' => HeaderMatchMethod,
  ?'name' => HeaderName,
  ) $s = shape()) {
    $this->invert = $invert ?? false;
    $this->match = $match ?? null;
    $this->name = $name ?? "";
  }
}

type HttpRouteHeaders = vec<HttpRouteHeader>;

class HttpRouteMatch {
  public HttpRouteHeaders $headers;
  public HttpMethod $method;
  public string $prefix;
  public HttpScheme $scheme;

  public function __construct(shape(
  ?'headers' => HttpRouteHeaders,
  ?'method' => HttpMethod,
  ?'prefix' => string,
  ?'scheme' => HttpScheme,
  ) $s = shape()) {
    $this->headers = $headers ?? [];
    $this->method = $method ?? "";
    $this->prefix = $prefix ?? "";
    $this->scheme = $scheme ?? "";
  }
}

type HttpScheme = string;

class InternalServerErrorException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class LimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListMeshesInput {
  public ListMeshesLimit $limit;
  public string $next_token;

  public function __construct(shape(
  ?'limit' => ListMeshesLimit,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

type ListMeshesLimit = int;

class ListMeshesOutput {
  public MeshList $meshes;
  public string $next_token;

  public function __construct(shape(
  ?'meshes' => MeshList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->meshes = $meshes ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListRoutesInput {
  public ListRoutesLimit $limit;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public string $next_token;
  public ResourceName $virtual_router_name;

  public function __construct(shape(
  ?'limit' => ListRoutesLimit,
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'next_token' => string,
  ?'virtual_router_name' => ResourceName,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->next_token = $next_token ?? "";
    $this->virtual_router_name = $virtual_router_name ?? "";
  }
}

type ListRoutesLimit = int;

class ListRoutesOutput {
  public string $next_token;
  public RouteList $routes;

  public function __construct(shape(
  ?'next_token' => string,
  ?'routes' => RouteList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->routes = $routes ?? [];
  }
}

class ListTagsForResourceInput {
  public TagsLimit $limit;
  public string $next_token;
  public Arn $resource_arn;

  public function __construct(shape(
  ?'limit' => TagsLimit,
  ?'next_token' => string,
  ?'resource_arn' => Arn,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceOutput {
  public string $next_token;
  public TagList $tags;

  public function __construct(shape(
  ?'next_token' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? [];
  }
}

class ListVirtualNodesInput {
  public ListVirtualNodesLimit $limit;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public string $next_token;

  public function __construct(shape(
  ?'limit' => ListVirtualNodesLimit,
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->next_token = $next_token ?? "";
  }
}

type ListVirtualNodesLimit = int;

class ListVirtualNodesOutput {
  public string $next_token;
  public VirtualNodeList $virtual_nodes;

  public function __construct(shape(
  ?'next_token' => string,
  ?'virtual_nodes' => VirtualNodeList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->virtual_nodes = $virtual_nodes ?? [];
  }
}

class ListVirtualRoutersInput {
  public ListVirtualRoutersLimit $limit;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public string $next_token;

  public function __construct(shape(
  ?'limit' => ListVirtualRoutersLimit,
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->next_token = $next_token ?? "";
  }
}

type ListVirtualRoutersLimit = int;

class ListVirtualRoutersOutput {
  public string $next_token;
  public VirtualRouterList $virtual_routers;

  public function __construct(shape(
  ?'next_token' => string,
  ?'virtual_routers' => VirtualRouterList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->virtual_routers = $virtual_routers ?? [];
  }
}

class ListVirtualServicesInput {
  public ListVirtualServicesLimit $limit;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public string $next_token;

  public function __construct(shape(
  ?'limit' => ListVirtualServicesLimit,
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->next_token = $next_token ?? "";
  }
}

type ListVirtualServicesLimit = int;

class ListVirtualServicesOutput {
  public string $next_token;
  public VirtualServiceList $virtual_services;

  public function __construct(shape(
  ?'next_token' => string,
  ?'virtual_services' => VirtualServiceList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->virtual_services = $virtual_services ?? [];
  }
}

class Listener {
  public HealthCheckPolicy $health_check;
  public PortMapping $port_mapping;
  public ListenerTls $tls;

  public function __construct(shape(
  ?'health_check' => HealthCheckPolicy,
  ?'port_mapping' => PortMapping,
  ?'tls' => ListenerTls,
  ) $s = shape()) {
    $this->health_check = $health_check ?? null;
    $this->port_mapping = $port_mapping ?? null;
    $this->tls = $tls ?? null;
  }
}

class ListenerTls {
  public ListenerTlsCertificate $certificate;
  public ListenerTlsMode $mode;

  public function __construct(shape(
  ?'certificate' => ListenerTlsCertificate,
  ?'mode' => ListenerTlsMode,
  ) $s = shape()) {
    $this->certificate = $certificate ?? null;
    $this->mode = $mode ?? "";
  }
}

class ListenerTlsAcmCertificate {
  public Arn $certificate_arn;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
  }
}

class ListenerTlsCertificate {
  public ListenerTlsAcmCertificate $acm;
  public ListenerTlsFileCertificate $file;

  public function __construct(shape(
  ?'acm' => ListenerTlsAcmCertificate,
  ?'file' => ListenerTlsFileCertificate,
  ) $s = shape()) {
    $this->acm = $acm ?? null;
    $this->file = $file ?? null;
  }
}

class ListenerTlsFileCertificate {
  public FilePath $certificate_chain;
  public FilePath $private_key;

  public function __construct(shape(
  ?'certificate_chain' => FilePath,
  ?'private_key' => FilePath,
  ) $s = shape()) {
    $this->certificate_chain = $certificate_chain ?? "";
    $this->private_key = $private_key ?? "";
  }
}

type ListenerTlsMode = string;

type Listeners = vec<Listener>;

class Logging {
  public AccessLog $access_log;

  public function __construct(shape(
  ?'access_log' => AccessLog,
  ) $s = shape()) {
    $this->access_log = $access_log ?? null;
  }
}

type Long = int;

class MatchRange {
  public Long $end;
  public Long $start;

  public function __construct(shape(
  ?'end' => Long,
  ?'start' => Long,
  ) $s = shape()) {
    $this->end = $end ?? 0;
    $this->start = $start ?? 0;
  }
}

type MaxRetries = int;

class MeshData {
  public ResourceName $mesh_name;
  public ResourceMetadata $metadata;
  public MeshSpec $spec;
  public MeshStatus $status;

  public function __construct(shape(
  ?'mesh_name' => ResourceName,
  ?'metadata' => ResourceMetadata,
  ?'spec' => MeshSpec,
  ?'status' => MeshStatus,
  ) $s = shape()) {
    $this->mesh_name = $mesh_name ?? "";
    $this->metadata = $metadata ?? null;
    $this->spec = $spec ?? null;
    $this->status = $status ?? null;
  }
}

type MeshList = vec<MeshRef>;

class MeshRef {
  public Arn $arn;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'resource_owner' => AccountId,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->resource_owner = $resource_owner ?? "";
  }
}

class MeshSpec {
  public EgressFilter $egress_filter;

  public function __construct(shape(
  ?'egress_filter' => EgressFilter,
  ) $s = shape()) {
    $this->egress_filter = $egress_filter ?? null;
  }
}

class MeshStatus {
  public MeshStatusCode $status;

  public function __construct(shape(
  ?'status' => MeshStatusCode,
  ) $s = shape()) {
    $this->status = $status ?? "";
  }
}

type MeshStatusCode = string;

type MethodName = string;

class NotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type PercentInt = int;

class PortMapping {
  public PortNumber $port;
  public PortProtocol $protocol;

  public function __construct(shape(
  ?'port' => PortNumber,
  ?'protocol' => PortProtocol,
  ) $s = shape()) {
    $this->port = $port ?? 0;
    $this->protocol = $protocol ?? "";
  }
}

type PortNumber = int;

type PortProtocol = string;

type PortSet = vec<PortNumber>;

class ResourceInUseException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceMetadata {
  public Arn $arn;
  public Timestamp $created_at;
  public Timestamp $last_updated_at;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;
  public string $uid;
  public Long $version;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'created_at' => Timestamp,
  ?'last_updated_at' => Timestamp,
  ?'mesh_owner' => AccountId,
  ?'resource_owner' => AccountId,
  ?'uid' => string,
  ?'version' => Long,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created_at = $created_at ?? 0;
    $this->last_updated_at = $last_updated_at ?? 0;
    $this->mesh_owner = $mesh_owner ?? "";
    $this->resource_owner = $resource_owner ?? "";
    $this->uid = $uid ?? "";
    $this->version = $version ?? 0;
  }
}

type ResourceName = string;

class RouteData {
  public ResourceName $mesh_name;
  public ResourceMetadata $metadata;
  public ResourceName $route_name;
  public RouteSpec $spec;
  public RouteStatus $status;
  public ResourceName $virtual_router_name;

  public function __construct(shape(
  ?'mesh_name' => ResourceName,
  ?'metadata' => ResourceMetadata,
  ?'route_name' => ResourceName,
  ?'spec' => RouteSpec,
  ?'status' => RouteStatus,
  ?'virtual_router_name' => ResourceName,
  ) $s = shape()) {
    $this->mesh_name = $mesh_name ?? "";
    $this->metadata = $metadata ?? null;
    $this->route_name = $route_name ?? "";
    $this->spec = $spec ?? null;
    $this->status = $status ?? null;
    $this->virtual_router_name = $virtual_router_name ?? "";
  }
}

type RouteList = vec<RouteRef>;

type RoutePriority = int;

class RouteRef {
  public Arn $arn;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;
  public ResourceName $route_name;
  public ResourceName $virtual_router_name;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'resource_owner' => AccountId,
  ?'route_name' => ResourceName,
  ?'virtual_router_name' => ResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->resource_owner = $resource_owner ?? "";
    $this->route_name = $route_name ?? "";
    $this->virtual_router_name = $virtual_router_name ?? "";
  }
}

class RouteSpec {
  public GrpcRoute $grpc_route;
  public HttpRoute $http_2_route;
  public HttpRoute $http_route;
  public RoutePriority $priority;
  public TcpRoute $tcp_route;

  public function __construct(shape(
  ?'grpc_route' => GrpcRoute,
  ?'http_2_route' => HttpRoute,
  ?'http_route' => HttpRoute,
  ?'priority' => RoutePriority,
  ?'tcp_route' => TcpRoute,
  ) $s = shape()) {
    $this->grpc_route = $grpc_route ?? null;
    $this->http_2_route = $http_2_route ?? null;
    $this->http_route = $http_route ?? null;
    $this->priority = $priority ?? 0;
    $this->tcp_route = $tcp_route ?? null;
  }
}

class RouteStatus {
  public RouteStatusCode $status;

  public function __construct(shape(
  ?'status' => RouteStatusCode,
  ) $s = shape()) {
    $this->status = $status ?? "";
  }
}

type RouteStatusCode = string;

class ServiceDiscovery {
  public AwsCloudMapServiceDiscovery $aws_cloud_map;
  public DnsServiceDiscovery $dns;

  public function __construct(shape(
  ?'aws_cloud_map' => AwsCloudMapServiceDiscovery,
  ?'dns' => DnsServiceDiscovery,
  ) $s = shape()) {
    $this->aws_cloud_map = $aws_cloud_map ?? null;
    $this->dns = $dns ?? null;
  }
}

type ServiceName = string;

class ServiceUnavailableException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type String = string;

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<TagRef>;

class TagRef {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

class TagResourceInput {
  public Arn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type TagsLimit = int;

type TcpRetryPolicyEvent = string;

type TcpRetryPolicyEvents = vec<TcpRetryPolicyEvent>;

class TcpRoute {
  public TcpRouteAction $action;

  public function __construct(shape(
  ?'action' => TcpRouteAction,
  ) $s = shape()) {
    $this->action = $action ?? null;
  }
}

class TcpRouteAction {
  public WeightedTargets $weighted_targets;

  public function __construct(shape(
  ?'weighted_targets' => WeightedTargets,
  ) $s = shape()) {
    $this->weighted_targets = $weighted_targets ?? [];
  }
}

type Timestamp = int;

class TlsValidationContext {
  public TlsValidationContextTrust $trust;

  public function __construct(shape(
  ?'trust' => TlsValidationContextTrust,
  ) $s = shape()) {
    $this->trust = $trust ?? null;
  }
}

class TlsValidationContextAcmTrust {
  public CertificateAuthorityArns $certificate_authority_arns;

  public function __construct(shape(
  ?'certificate_authority_arns' => CertificateAuthorityArns,
  ) $s = shape()) {
    $this->certificate_authority_arns = $certificate_authority_arns ?? [];
  }
}

class TlsValidationContextFileTrust {
  public FilePath $certificate_chain;

  public function __construct(shape(
  ?'certificate_chain' => FilePath,
  ) $s = shape()) {
    $this->certificate_chain = $certificate_chain ?? "";
  }
}

class TlsValidationContextTrust {
  public TlsValidationContextAcmTrust $acm;
  public TlsValidationContextFileTrust $file;

  public function __construct(shape(
  ?'acm' => TlsValidationContextAcmTrust,
  ?'file' => TlsValidationContextFileTrust,
  ) $s = shape()) {
    $this->acm = $acm ?? null;
    $this->file = $file ?? null;
  }
}

class TooManyRequestsException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class TooManyTagsException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UntagResourceInput {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateMeshInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public MeshSpec $spec;

  public function __construct(shape(
  ?'client_token' => string,
  ?'mesh_name' => ResourceName,
  ?'spec' => MeshSpec,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->mesh_name = $mesh_name ?? "";
    $this->spec = $spec ?? null;
  }
}

class UpdateMeshOutput {
  public MeshData $mesh;

  public function __construct(shape(
  ?'mesh' => MeshData,
  ) $s = shape()) {
    $this->mesh = $mesh ?? null;
  }
}

class UpdateRouteInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public ResourceName $route_name;
  public RouteSpec $spec;
  public ResourceName $virtual_router_name;

  public function __construct(shape(
  ?'client_token' => string,
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'route_name' => ResourceName,
  ?'spec' => RouteSpec,
  ?'virtual_router_name' => ResourceName,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->route_name = $route_name ?? "";
    $this->spec = $spec ?? null;
    $this->virtual_router_name = $virtual_router_name ?? "";
  }
}

class UpdateRouteOutput {
  public RouteData $route;

  public function __construct(shape(
  ?'route' => RouteData,
  ) $s = shape()) {
    $this->route = $route ?? null;
  }
}

class UpdateVirtualNodeInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public VirtualNodeSpec $spec;
  public ResourceName $virtual_node_name;

  public function __construct(shape(
  ?'client_token' => string,
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'spec' => VirtualNodeSpec,
  ?'virtual_node_name' => ResourceName,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->spec = $spec ?? null;
    $this->virtual_node_name = $virtual_node_name ?? "";
  }
}

class UpdateVirtualNodeOutput {
  public VirtualNodeData $virtual_node;

  public function __construct(shape(
  ?'virtual_node' => VirtualNodeData,
  ) $s = shape()) {
    $this->virtual_node = $virtual_node ?? null;
  }
}

class UpdateVirtualRouterInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public VirtualRouterSpec $spec;
  public ResourceName $virtual_router_name;

  public function __construct(shape(
  ?'client_token' => string,
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'spec' => VirtualRouterSpec,
  ?'virtual_router_name' => ResourceName,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->spec = $spec ?? null;
    $this->virtual_router_name = $virtual_router_name ?? "";
  }
}

class UpdateVirtualRouterOutput {
  public VirtualRouterData $virtual_router;

  public function __construct(shape(
  ?'virtual_router' => VirtualRouterData,
  ) $s = shape()) {
    $this->virtual_router = $virtual_router ?? null;
  }
}

class UpdateVirtualServiceInput {
  public string $client_token;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public VirtualServiceSpec $spec;
  public ServiceName $virtual_service_name;

  public function __construct(shape(
  ?'client_token' => string,
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'spec' => VirtualServiceSpec,
  ?'virtual_service_name' => ServiceName,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->spec = $spec ?? null;
    $this->virtual_service_name = $virtual_service_name ?? "";
  }
}

class UpdateVirtualServiceOutput {
  public VirtualServiceData $virtual_service;

  public function __construct(shape(
  ?'virtual_service' => VirtualServiceData,
  ) $s = shape()) {
    $this->virtual_service = $virtual_service ?? null;
  }
}

class VirtualNodeData {
  public ResourceName $mesh_name;
  public ResourceMetadata $metadata;
  public VirtualNodeSpec $spec;
  public VirtualNodeStatus $status;
  public ResourceName $virtual_node_name;

  public function __construct(shape(
  ?'mesh_name' => ResourceName,
  ?'metadata' => ResourceMetadata,
  ?'spec' => VirtualNodeSpec,
  ?'status' => VirtualNodeStatus,
  ?'virtual_node_name' => ResourceName,
  ) $s = shape()) {
    $this->mesh_name = $mesh_name ?? "";
    $this->metadata = $metadata ?? null;
    $this->spec = $spec ?? null;
    $this->status = $status ?? null;
    $this->virtual_node_name = $virtual_node_name ?? "";
  }
}

type VirtualNodeList = vec<VirtualNodeRef>;

class VirtualNodeRef {
  public Arn $arn;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;
  public ResourceName $virtual_node_name;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'resource_owner' => AccountId,
  ?'virtual_node_name' => ResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->resource_owner = $resource_owner ?? "";
    $this->virtual_node_name = $virtual_node_name ?? "";
  }
}

class VirtualNodeServiceProvider {
  public ResourceName $virtual_node_name;

  public function __construct(shape(
  ?'virtual_node_name' => ResourceName,
  ) $s = shape()) {
    $this->virtual_node_name = $virtual_node_name ?? "";
  }
}

class VirtualNodeSpec {
  public BackendDefaults $backend_defaults;
  public Backends $backends;
  public Listeners $listeners;
  public Logging $logging;
  public ServiceDiscovery $service_discovery;

  public function __construct(shape(
  ?'backend_defaults' => BackendDefaults,
  ?'backends' => Backends,
  ?'listeners' => Listeners,
  ?'logging' => Logging,
  ?'service_discovery' => ServiceDiscovery,
  ) $s = shape()) {
    $this->backend_defaults = $backend_defaults ?? null;
    $this->backends = $backends ?? [];
    $this->listeners = $listeners ?? [];
    $this->logging = $logging ?? null;
    $this->service_discovery = $service_discovery ?? null;
  }
}

class VirtualNodeStatus {
  public VirtualNodeStatusCode $status;

  public function __construct(shape(
  ?'status' => VirtualNodeStatusCode,
  ) $s = shape()) {
    $this->status = $status ?? "";
  }
}

type VirtualNodeStatusCode = string;

class VirtualRouterData {
  public ResourceName $mesh_name;
  public ResourceMetadata $metadata;
  public VirtualRouterSpec $spec;
  public VirtualRouterStatus $status;
  public ResourceName $virtual_router_name;

  public function __construct(shape(
  ?'mesh_name' => ResourceName,
  ?'metadata' => ResourceMetadata,
  ?'spec' => VirtualRouterSpec,
  ?'status' => VirtualRouterStatus,
  ?'virtual_router_name' => ResourceName,
  ) $s = shape()) {
    $this->mesh_name = $mesh_name ?? "";
    $this->metadata = $metadata ?? null;
    $this->spec = $spec ?? null;
    $this->status = $status ?? null;
    $this->virtual_router_name = $virtual_router_name ?? "";
  }
}

type VirtualRouterList = vec<VirtualRouterRef>;

class VirtualRouterListener {
  public PortMapping $port_mapping;

  public function __construct(shape(
  ?'port_mapping' => PortMapping,
  ) $s = shape()) {
    $this->port_mapping = $port_mapping ?? null;
  }
}

type VirtualRouterListeners = vec<VirtualRouterListener>;

class VirtualRouterRef {
  public Arn $arn;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;
  public ResourceName $virtual_router_name;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'resource_owner' => AccountId,
  ?'virtual_router_name' => ResourceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->resource_owner = $resource_owner ?? "";
    $this->virtual_router_name = $virtual_router_name ?? "";
  }
}

class VirtualRouterServiceProvider {
  public ResourceName $virtual_router_name;

  public function __construct(shape(
  ?'virtual_router_name' => ResourceName,
  ) $s = shape()) {
    $this->virtual_router_name = $virtual_router_name ?? "";
  }
}

class VirtualRouterSpec {
  public VirtualRouterListeners $listeners;

  public function __construct(shape(
  ?'listeners' => VirtualRouterListeners,
  ) $s = shape()) {
    $this->listeners = $listeners ?? [];
  }
}

class VirtualRouterStatus {
  public VirtualRouterStatusCode $status;

  public function __construct(shape(
  ?'status' => VirtualRouterStatusCode,
  ) $s = shape()) {
    $this->status = $status ?? "";
  }
}

type VirtualRouterStatusCode = string;

class VirtualServiceBackend {
  public ClientPolicy $client_policy;
  public ServiceName $virtual_service_name;

  public function __construct(shape(
  ?'client_policy' => ClientPolicy,
  ?'virtual_service_name' => ServiceName,
  ) $s = shape()) {
    $this->client_policy = $client_policy ?? null;
    $this->virtual_service_name = $virtual_service_name ?? "";
  }
}

class VirtualServiceData {
  public ResourceName $mesh_name;
  public ResourceMetadata $metadata;
  public VirtualServiceSpec $spec;
  public VirtualServiceStatus $status;
  public ServiceName $virtual_service_name;

  public function __construct(shape(
  ?'mesh_name' => ResourceName,
  ?'metadata' => ResourceMetadata,
  ?'spec' => VirtualServiceSpec,
  ?'status' => VirtualServiceStatus,
  ?'virtual_service_name' => ServiceName,
  ) $s = shape()) {
    $this->mesh_name = $mesh_name ?? "";
    $this->metadata = $metadata ?? null;
    $this->spec = $spec ?? null;
    $this->status = $status ?? null;
    $this->virtual_service_name = $virtual_service_name ?? "";
  }
}

type VirtualServiceList = vec<VirtualServiceRef>;

class VirtualServiceProvider {
  public VirtualNodeServiceProvider $virtual_node;
  public VirtualRouterServiceProvider $virtual_router;

  public function __construct(shape(
  ?'virtual_node' => VirtualNodeServiceProvider,
  ?'virtual_router' => VirtualRouterServiceProvider,
  ) $s = shape()) {
    $this->virtual_node = $virtual_node ?? null;
    $this->virtual_router = $virtual_router ?? null;
  }
}

class VirtualServiceRef {
  public Arn $arn;
  public ResourceName $mesh_name;
  public AccountId $mesh_owner;
  public AccountId $resource_owner;
  public ServiceName $virtual_service_name;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'mesh_name' => ResourceName,
  ?'mesh_owner' => AccountId,
  ?'resource_owner' => AccountId,
  ?'virtual_service_name' => ServiceName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->mesh_name = $mesh_name ?? "";
    $this->mesh_owner = $mesh_owner ?? "";
    $this->resource_owner = $resource_owner ?? "";
    $this->virtual_service_name = $virtual_service_name ?? "";
  }
}

class VirtualServiceSpec {
  public VirtualServiceProvider $provider;

  public function __construct(shape(
  ?'provider' => VirtualServiceProvider,
  ) $s = shape()) {
    $this->provider = $provider ?? null;
  }
}

class VirtualServiceStatus {
  public VirtualServiceStatusCode $status;

  public function __construct(shape(
  ?'status' => VirtualServiceStatusCode,
  ) $s = shape()) {
    $this->status = $status ?? "";
  }
}

type VirtualServiceStatusCode = string;

class WeightedTarget {
  public ResourceName $virtual_node;
  public PercentInt $weight;

  public function __construct(shape(
  ?'virtual_node' => ResourceName,
  ?'weight' => PercentInt,
  ) $s = shape()) {
    $this->virtual_node = $virtual_node ?? "";
    $this->weight = $weight ?? 0;
  }
}

type WeightedTargets = vec<WeightedTarget>;


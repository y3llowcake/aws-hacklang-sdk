<?hh // strict
namespace slack\aws\globalaccelerator;

interface Global Accelerator {
  public function AdvertiseByoipCidr(AdvertiseByoipCidrRequest): Awaitable<Errors\Result<AdvertiseByoipCidrResponse>>;
  public function CreateAccelerator(CreateAcceleratorRequest): Awaitable<Errors\Result<CreateAcceleratorResponse>>;
  public function CreateEndpointGroup(CreateEndpointGroupRequest): Awaitable<Errors\Result<CreateEndpointGroupResponse>>;
  public function CreateListener(CreateListenerRequest): Awaitable<Errors\Result<CreateListenerResponse>>;
  public function DeleteAccelerator(DeleteAcceleratorRequest): Awaitable<Errors\Error>;
  public function DeleteEndpointGroup(DeleteEndpointGroupRequest): Awaitable<Errors\Error>;
  public function DeleteListener(DeleteListenerRequest): Awaitable<Errors\Error>;
  public function DeprovisionByoipCidr(DeprovisionByoipCidrRequest): Awaitable<Errors\Result<DeprovisionByoipCidrResponse>>;
  public function DescribeAccelerator(DescribeAcceleratorRequest): Awaitable<Errors\Result<DescribeAcceleratorResponse>>;
  public function DescribeAcceleratorAttributes(DescribeAcceleratorAttributesRequest): Awaitable<Errors\Result<DescribeAcceleratorAttributesResponse>>;
  public function DescribeEndpointGroup(DescribeEndpointGroupRequest): Awaitable<Errors\Result<DescribeEndpointGroupResponse>>;
  public function DescribeListener(DescribeListenerRequest): Awaitable<Errors\Result<DescribeListenerResponse>>;
  public function ListAccelerators(ListAcceleratorsRequest): Awaitable<Errors\Result<ListAcceleratorsResponse>>;
  public function ListByoipCidrs(ListByoipCidrsRequest): Awaitable<Errors\Result<ListByoipCidrsResponse>>;
  public function ListEndpointGroups(ListEndpointGroupsRequest): Awaitable<Errors\Result<ListEndpointGroupsResponse>>;
  public function ListListeners(ListListenersRequest): Awaitable<Errors\Result<ListListenersResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ProvisionByoipCidr(ProvisionByoipCidrRequest): Awaitable<Errors\Result<ProvisionByoipCidrResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateAccelerator(UpdateAcceleratorRequest): Awaitable<Errors\Result<UpdateAcceleratorResponse>>;
  public function UpdateAcceleratorAttributes(UpdateAcceleratorAttributesRequest): Awaitable<Errors\Result<UpdateAcceleratorAttributesResponse>>;
  public function UpdateEndpointGroup(UpdateEndpointGroupRequest): Awaitable<Errors\Result<UpdateEndpointGroupResponse>>;
  public function UpdateListener(UpdateListenerRequest): Awaitable<Errors\Result<UpdateListenerResponse>>;
  public function WithdrawByoipCidr(WithdrawByoipCidrRequest): Awaitable<Errors\Result<WithdrawByoipCidrResponse>>;
}

class Accelerator {
  public GenericString $accelerator_arn;
  public Timestamp $created_time;
  public GenericString $dns_name;
  public GenericBoolean $enabled;
  public IpAddressType $ip_address_type;
  public IpSets $ip_sets;
  public Timestamp $last_modified_time;
  public GenericString $name;
  public AcceleratorStatus $status;

  public function __construct(shape(
  ?'accelerator_arn' => GenericString,
  ?'created_time' => Timestamp,
  ?'dns_name' => GenericString,
  ?'enabled' => GenericBoolean,
  ?'ip_address_type' => IpAddressType,
  ?'ip_sets' => IpSets,
  ?'last_modified_time' => Timestamp,
  ?'name' => GenericString,
  ?'status' => AcceleratorStatus,
  ) $s = shape()) {
    $this->accelerator_arn = $accelerator_arn ?? "";
    $this->created_time = $created_time ?? 0;
    $this->dns_name = $dns_name ?? "";
    $this->enabled = $enabled ?? false;
    $this->ip_address_type = $ip_address_type ?? "";
    $this->ip_sets = $ip_sets ?? [];
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->name = $name ?? "";
    $this->status = $status ?? "";
  }
}

class AcceleratorAttributes {
  public GenericBoolean $flow_logs_enabled;
  public GenericString $flow_logs_s_3_bucket;
  public GenericString $flow_logs_s_3_prefix;

  public function __construct(shape(
  ?'flow_logs_enabled' => GenericBoolean,
  ?'flow_logs_s_3_bucket' => GenericString,
  ?'flow_logs_s_3_prefix' => GenericString,
  ) $s = shape()) {
    $this->flow_logs_enabled = $flow_logs_enabled ?? false;
    $this->flow_logs_s_3_bucket = $flow_logs_s_3_bucket ?? "";
    $this->flow_logs_s_3_prefix = $flow_logs_s_3_prefix ?? "";
  }
}

class AcceleratorNotDisabledException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class AcceleratorNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type AcceleratorStatus = string;

type Accelerators = vec<Accelerator>;

class AccessDeniedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class AdvertiseByoipCidrRequest {
  public GenericString $cidr;

  public function __construct(shape(
  ?'cidr' => GenericString,
  ) $s = shape()) {
    $this->cidr = $cidr ?? "";
  }
}

class AdvertiseByoipCidrResponse {
  public ByoipCidr $byoip_cidr;

  public function __construct(shape(
  ?'byoip_cidr' => ByoipCidr,
  ) $s = shape()) {
    $this->byoip_cidr = $byoip_cidr ?? null;
  }
}

class AssociatedEndpointGroupFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class AssociatedListenerFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ByoipCidr {
  public GenericString $cidr;
  public ByoipCidrEvents $events;
  public ByoipCidrState $state;

  public function __construct(shape(
  ?'cidr' => GenericString,
  ?'events' => ByoipCidrEvents,
  ?'state' => ByoipCidrState,
  ) $s = shape()) {
    $this->cidr = $cidr ?? "";
    $this->events = $events ?? [];
    $this->state = $state ?? "";
  }
}

class ByoipCidrEvent {
  public GenericString $message;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'message' => GenericString,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->timestamp = $timestamp ?? 0;
  }
}

type ByoipCidrEvents = vec<ByoipCidrEvent>;

class ByoipCidrNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ByoipCidrState = string;

type ByoipCidrs = vec<ByoipCidr>;

class CidrAuthorizationContext {
  public GenericString $message;
  public GenericString $signature;

  public function __construct(shape(
  ?'message' => GenericString,
  ?'signature' => GenericString,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->signature = $signature ?? "";
  }
}

type ClientAffinity = string;

class CreateAcceleratorRequest {
  public GenericBoolean $enabled;
  public IdempotencyToken $idempotency_token;
  public IpAddressType $ip_address_type;
  public IpAddresses $ip_addresses;
  public GenericString $name;
  public Tags $tags;

  public function __construct(shape(
  ?'enabled' => GenericBoolean,
  ?'idempotency_token' => IdempotencyToken,
  ?'ip_address_type' => IpAddressType,
  ?'ip_addresses' => IpAddresses,
  ?'name' => GenericString,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->enabled = $enabled ?? false;
    $this->idempotency_token = $idempotency_token ?? "";
    $this->ip_address_type = $ip_address_type ?? "";
    $this->ip_addresses = $ip_addresses ?? [];
    $this->name = $name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateAcceleratorResponse {
  public Accelerator $accelerator;

  public function __construct(shape(
  ?'accelerator' => Accelerator,
  ) $s = shape()) {
    $this->accelerator = $accelerator ?? null;
  }
}

class CreateEndpointGroupRequest {
  public EndpointConfigurations $endpoint_configurations;
  public GenericString $endpoint_group_region;
  public HealthCheckIntervalSeconds $health_check_interval_seconds;
  public GenericString $health_check_path;
  public HealthCheckPort $health_check_port;
  public HealthCheckProtocol $health_check_protocol;
  public IdempotencyToken $idempotency_token;
  public GenericString $listener_arn;
  public ThresholdCount $threshold_count;
  public TrafficDialPercentage $traffic_dial_percentage;

  public function __construct(shape(
  ?'endpoint_configurations' => EndpointConfigurations,
  ?'endpoint_group_region' => GenericString,
  ?'health_check_interval_seconds' => HealthCheckIntervalSeconds,
  ?'health_check_path' => GenericString,
  ?'health_check_port' => HealthCheckPort,
  ?'health_check_protocol' => HealthCheckProtocol,
  ?'idempotency_token' => IdempotencyToken,
  ?'listener_arn' => GenericString,
  ?'threshold_count' => ThresholdCount,
  ?'traffic_dial_percentage' => TrafficDialPercentage,
  ) $s = shape()) {
    $this->endpoint_configurations = $endpoint_configurations ?? [];
    $this->endpoint_group_region = $endpoint_group_region ?? "";
    $this->health_check_interval_seconds = $health_check_interval_seconds ?? 0;
    $this->health_check_path = $health_check_path ?? "";
    $this->health_check_port = $health_check_port ?? 0;
    $this->health_check_protocol = $health_check_protocol ?? "";
    $this->idempotency_token = $idempotency_token ?? "";
    $this->listener_arn = $listener_arn ?? "";
    $this->threshold_count = $threshold_count ?? 0;
    $this->traffic_dial_percentage = $traffic_dial_percentage ?? 0.0;
  }
}

class CreateEndpointGroupResponse {
  public EndpointGroup $endpoint_group;

  public function __construct(shape(
  ?'endpoint_group' => EndpointGroup,
  ) $s = shape()) {
    $this->endpoint_group = $endpoint_group ?? null;
  }
}

class CreateListenerRequest {
  public GenericString $accelerator_arn;
  public ClientAffinity $client_affinity;
  public IdempotencyToken $idempotency_token;
  public PortRanges $port_ranges;
  public Protocol $protocol;

  public function __construct(shape(
  ?'accelerator_arn' => GenericString,
  ?'client_affinity' => ClientAffinity,
  ?'idempotency_token' => IdempotencyToken,
  ?'port_ranges' => PortRanges,
  ?'protocol' => Protocol,
  ) $s = shape()) {
    $this->accelerator_arn = $accelerator_arn ?? "";
    $this->client_affinity = $client_affinity ?? "";
    $this->idempotency_token = $idempotency_token ?? "";
    $this->port_ranges = $port_ranges ?? [];
    $this->protocol = $protocol ?? "";
  }
}

class CreateListenerResponse {
  public Listener $listener;

  public function __construct(shape(
  ?'listener' => Listener,
  ) $s = shape()) {
    $this->listener = $listener ?? null;
  }
}

class DeleteAcceleratorRequest {
  public GenericString $accelerator_arn;

  public function __construct(shape(
  ?'accelerator_arn' => GenericString,
  ) $s = shape()) {
    $this->accelerator_arn = $accelerator_arn ?? "";
  }
}

class DeleteEndpointGroupRequest {
  public GenericString $endpoint_group_arn;

  public function __construct(shape(
  ?'endpoint_group_arn' => GenericString,
  ) $s = shape()) {
    $this->endpoint_group_arn = $endpoint_group_arn ?? "";
  }
}

class DeleteListenerRequest {
  public GenericString $listener_arn;

  public function __construct(shape(
  ?'listener_arn' => GenericString,
  ) $s = shape()) {
    $this->listener_arn = $listener_arn ?? "";
  }
}

class DeprovisionByoipCidrRequest {
  public GenericString $cidr;

  public function __construct(shape(
  ?'cidr' => GenericString,
  ) $s = shape()) {
    $this->cidr = $cidr ?? "";
  }
}

class DeprovisionByoipCidrResponse {
  public ByoipCidr $byoip_cidr;

  public function __construct(shape(
  ?'byoip_cidr' => ByoipCidr,
  ) $s = shape()) {
    $this->byoip_cidr = $byoip_cidr ?? null;
  }
}

class DescribeAcceleratorAttributesRequest {
  public GenericString $accelerator_arn;

  public function __construct(shape(
  ?'accelerator_arn' => GenericString,
  ) $s = shape()) {
    $this->accelerator_arn = $accelerator_arn ?? "";
  }
}

class DescribeAcceleratorAttributesResponse {
  public AcceleratorAttributes $accelerator_attributes;

  public function __construct(shape(
  ?'accelerator_attributes' => AcceleratorAttributes,
  ) $s = shape()) {
    $this->accelerator_attributes = $accelerator_attributes ?? null;
  }
}

class DescribeAcceleratorRequest {
  public GenericString $accelerator_arn;

  public function __construct(shape(
  ?'accelerator_arn' => GenericString,
  ) $s = shape()) {
    $this->accelerator_arn = $accelerator_arn ?? "";
  }
}

class DescribeAcceleratorResponse {
  public Accelerator $accelerator;

  public function __construct(shape(
  ?'accelerator' => Accelerator,
  ) $s = shape()) {
    $this->accelerator = $accelerator ?? null;
  }
}

class DescribeEndpointGroupRequest {
  public GenericString $endpoint_group_arn;

  public function __construct(shape(
  ?'endpoint_group_arn' => GenericString,
  ) $s = shape()) {
    $this->endpoint_group_arn = $endpoint_group_arn ?? "";
  }
}

class DescribeEndpointGroupResponse {
  public EndpointGroup $endpoint_group;

  public function __construct(shape(
  ?'endpoint_group' => EndpointGroup,
  ) $s = shape()) {
    $this->endpoint_group = $endpoint_group ?? null;
  }
}

class DescribeListenerRequest {
  public GenericString $listener_arn;

  public function __construct(shape(
  ?'listener_arn' => GenericString,
  ) $s = shape()) {
    $this->listener_arn = $listener_arn ?? "";
  }
}

class DescribeListenerResponse {
  public Listener $listener;

  public function __construct(shape(
  ?'listener' => Listener,
  ) $s = shape()) {
    $this->listener = $listener ?? null;
  }
}

class EndpointConfiguration {
  public GenericBoolean $client_ip_preservation_enabled;
  public GenericString $endpoint_id;
  public EndpointWeight $weight;

  public function __construct(shape(
  ?'client_ip_preservation_enabled' => GenericBoolean,
  ?'endpoint_id' => GenericString,
  ?'weight' => EndpointWeight,
  ) $s = shape()) {
    $this->client_ip_preservation_enabled = $client_ip_preservation_enabled ?? false;
    $this->endpoint_id = $endpoint_id ?? "";
    $this->weight = $weight ?? 0;
  }
}

type EndpointConfigurations = vec<EndpointConfiguration>;

class EndpointDescription {
  public GenericBoolean $client_ip_preservation_enabled;
  public GenericString $endpoint_id;
  public GenericString $health_reason;
  public HealthState $health_state;
  public EndpointWeight $weight;

  public function __construct(shape(
  ?'client_ip_preservation_enabled' => GenericBoolean,
  ?'endpoint_id' => GenericString,
  ?'health_reason' => GenericString,
  ?'health_state' => HealthState,
  ?'weight' => EndpointWeight,
  ) $s = shape()) {
    $this->client_ip_preservation_enabled = $client_ip_preservation_enabled ?? false;
    $this->endpoint_id = $endpoint_id ?? "";
    $this->health_reason = $health_reason ?? "";
    $this->health_state = $health_state ?? "";
    $this->weight = $weight ?? 0;
  }
}

type EndpointDescriptions = vec<EndpointDescription>;

class EndpointGroup {
  public EndpointDescriptions $endpoint_descriptions;
  public GenericString $endpoint_group_arn;
  public GenericString $endpoint_group_region;
  public HealthCheckIntervalSeconds $health_check_interval_seconds;
  public GenericString $health_check_path;
  public HealthCheckPort $health_check_port;
  public HealthCheckProtocol $health_check_protocol;
  public ThresholdCount $threshold_count;
  public TrafficDialPercentage $traffic_dial_percentage;

  public function __construct(shape(
  ?'endpoint_descriptions' => EndpointDescriptions,
  ?'endpoint_group_arn' => GenericString,
  ?'endpoint_group_region' => GenericString,
  ?'health_check_interval_seconds' => HealthCheckIntervalSeconds,
  ?'health_check_path' => GenericString,
  ?'health_check_port' => HealthCheckPort,
  ?'health_check_protocol' => HealthCheckProtocol,
  ?'threshold_count' => ThresholdCount,
  ?'traffic_dial_percentage' => TrafficDialPercentage,
  ) $s = shape()) {
    $this->endpoint_descriptions = $endpoint_descriptions ?? [];
    $this->endpoint_group_arn = $endpoint_group_arn ?? "";
    $this->endpoint_group_region = $endpoint_group_region ?? "";
    $this->health_check_interval_seconds = $health_check_interval_seconds ?? 0;
    $this->health_check_path = $health_check_path ?? "";
    $this->health_check_port = $health_check_port ?? 0;
    $this->health_check_protocol = $health_check_protocol ?? "";
    $this->threshold_count = $threshold_count ?? 0;
    $this->traffic_dial_percentage = $traffic_dial_percentage ?? 0.0;
  }
}

class EndpointGroupAlreadyExistsException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class EndpointGroupNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type EndpointGroups = vec<EndpointGroup>;

type EndpointWeight = int;

type ErrorMessage = string;

type GenericBoolean = bool;

type GenericString = string;

type HealthCheckIntervalSeconds = int;

type HealthCheckPort = int;

type HealthCheckProtocol = string;

type HealthState = string;

type IdempotencyToken = string;

class IncorrectCidrStateException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InternalServiceErrorException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidArgumentException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidNextTokenException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidPortRangeException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type IpAddress = string;

type IpAddressType = string;

type IpAddresses = vec<IpAddress>;

class IpSet {
  public IpAddresses $ip_addresses;
  public GenericString $ip_family;

  public function __construct(shape(
  ?'ip_addresses' => IpAddresses,
  ?'ip_family' => GenericString,
  ) $s = shape()) {
    $this->ip_addresses = $ip_addresses ?? [];
    $this->ip_family = $ip_family ?? "";
  }
}

type IpSets = vec<IpSet>;

class LimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListAcceleratorsRequest {
  public MaxResults $max_results;
  public GenericString $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListAcceleratorsResponse {
  public Accelerators $accelerators;
  public GenericString $next_token;

  public function __construct(shape(
  ?'accelerators' => Accelerators,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->accelerators = $accelerators ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListByoipCidrsRequest {
  public MaxResults $max_results;
  public GenericString $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListByoipCidrsResponse {
  public ByoipCidrs $byoip_cidrs;
  public GenericString $next_token;

  public function __construct(shape(
  ?'byoip_cidrs' => ByoipCidrs,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->byoip_cidrs = $byoip_cidrs ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListEndpointGroupsRequest {
  public GenericString $listener_arn;
  public MaxResults $max_results;
  public GenericString $next_token;

  public function __construct(shape(
  ?'listener_arn' => GenericString,
  ?'max_results' => MaxResults,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->listener_arn = $listener_arn ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListEndpointGroupsResponse {
  public EndpointGroups $endpoint_groups;
  public GenericString $next_token;

  public function __construct(shape(
  ?'endpoint_groups' => EndpointGroups,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->endpoint_groups = $endpoint_groups ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListListenersRequest {
  public GenericString $accelerator_arn;
  public MaxResults $max_results;
  public GenericString $next_token;

  public function __construct(shape(
  ?'accelerator_arn' => GenericString,
  ?'max_results' => MaxResults,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->accelerator_arn = $accelerator_arn ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListListenersResponse {
  public Listeners $listeners;
  public GenericString $next_token;

  public function __construct(shape(
  ?'listeners' => Listeners,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->listeners = $listeners ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListTagsForResourceRequest {
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class Listener {
  public ClientAffinity $client_affinity;
  public GenericString $listener_arn;
  public PortRanges $port_ranges;
  public Protocol $protocol;

  public function __construct(shape(
  ?'client_affinity' => ClientAffinity,
  ?'listener_arn' => GenericString,
  ?'port_ranges' => PortRanges,
  ?'protocol' => Protocol,
  ) $s = shape()) {
    $this->client_affinity = $client_affinity ?? "";
    $this->listener_arn = $listener_arn ?? "";
    $this->port_ranges = $port_ranges ?? [];
    $this->protocol = $protocol ?? "";
  }
}

class ListenerNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Listeners = vec<Listener>;

type MaxResults = int;

type PortNumber = int;

class PortRange {
  public PortNumber $from_port;
  public PortNumber $to_port;

  public function __construct(shape(
  ?'from_port' => PortNumber,
  ?'to_port' => PortNumber,
  ) $s = shape()) {
    $this->from_port = $from_port ?? 0;
    $this->to_port = $to_port ?? 0;
  }
}

type PortRanges = vec<PortRange>;

type Protocol = string;

class ProvisionByoipCidrRequest {
  public GenericString $cidr;
  public CidrAuthorizationContext $cidr_authorization_context;

  public function __construct(shape(
  ?'cidr' => GenericString,
  ?'cidr_authorization_context' => CidrAuthorizationContext,
  ) $s = shape()) {
    $this->cidr = $cidr ?? "";
    $this->cidr_authorization_context = $cidr_authorization_context ?? null;
  }
}

class ProvisionByoipCidrResponse {
  public ByoipCidr $byoip_cidr;

  public function __construct(shape(
  ?'byoip_cidr' => ByoipCidr,
  ) $s = shape()) {
    $this->byoip_cidr = $byoip_cidr ?? null;
  }
}

type ResourceArn = string;

class Tag {
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

type TagKey = string;

type TagKeys = vec<TagKey>;

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public Tags $tags;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type Tags = vec<Tag>;

type ThresholdCount = int;

type Timestamp = int;

type TrafficDialPercentage = float;

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeys $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tag_keys' => TagKeys,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateAcceleratorAttributesRequest {
  public GenericString $accelerator_arn;
  public GenericBoolean $flow_logs_enabled;
  public GenericString $flow_logs_s_3_bucket;
  public GenericString $flow_logs_s_3_prefix;

  public function __construct(shape(
  ?'accelerator_arn' => GenericString,
  ?'flow_logs_enabled' => GenericBoolean,
  ?'flow_logs_s_3_bucket' => GenericString,
  ?'flow_logs_s_3_prefix' => GenericString,
  ) $s = shape()) {
    $this->accelerator_arn = $accelerator_arn ?? "";
    $this->flow_logs_enabled = $flow_logs_enabled ?? false;
    $this->flow_logs_s_3_bucket = $flow_logs_s_3_bucket ?? "";
    $this->flow_logs_s_3_prefix = $flow_logs_s_3_prefix ?? "";
  }
}

class UpdateAcceleratorAttributesResponse {
  public AcceleratorAttributes $accelerator_attributes;

  public function __construct(shape(
  ?'accelerator_attributes' => AcceleratorAttributes,
  ) $s = shape()) {
    $this->accelerator_attributes = $accelerator_attributes ?? null;
  }
}

class UpdateAcceleratorRequest {
  public GenericString $accelerator_arn;
  public GenericBoolean $enabled;
  public IpAddressType $ip_address_type;
  public GenericString $name;

  public function __construct(shape(
  ?'accelerator_arn' => GenericString,
  ?'enabled' => GenericBoolean,
  ?'ip_address_type' => IpAddressType,
  ?'name' => GenericString,
  ) $s = shape()) {
    $this->accelerator_arn = $accelerator_arn ?? "";
    $this->enabled = $enabled ?? false;
    $this->ip_address_type = $ip_address_type ?? "";
    $this->name = $name ?? "";
  }
}

class UpdateAcceleratorResponse {
  public Accelerator $accelerator;

  public function __construct(shape(
  ?'accelerator' => Accelerator,
  ) $s = shape()) {
    $this->accelerator = $accelerator ?? null;
  }
}

class UpdateEndpointGroupRequest {
  public EndpointConfigurations $endpoint_configurations;
  public GenericString $endpoint_group_arn;
  public HealthCheckIntervalSeconds $health_check_interval_seconds;
  public GenericString $health_check_path;
  public HealthCheckPort $health_check_port;
  public HealthCheckProtocol $health_check_protocol;
  public ThresholdCount $threshold_count;
  public TrafficDialPercentage $traffic_dial_percentage;

  public function __construct(shape(
  ?'endpoint_configurations' => EndpointConfigurations,
  ?'endpoint_group_arn' => GenericString,
  ?'health_check_interval_seconds' => HealthCheckIntervalSeconds,
  ?'health_check_path' => GenericString,
  ?'health_check_port' => HealthCheckPort,
  ?'health_check_protocol' => HealthCheckProtocol,
  ?'threshold_count' => ThresholdCount,
  ?'traffic_dial_percentage' => TrafficDialPercentage,
  ) $s = shape()) {
    $this->endpoint_configurations = $endpoint_configurations ?? [];
    $this->endpoint_group_arn = $endpoint_group_arn ?? "";
    $this->health_check_interval_seconds = $health_check_interval_seconds ?? 0;
    $this->health_check_path = $health_check_path ?? "";
    $this->health_check_port = $health_check_port ?? 0;
    $this->health_check_protocol = $health_check_protocol ?? "";
    $this->threshold_count = $threshold_count ?? 0;
    $this->traffic_dial_percentage = $traffic_dial_percentage ?? 0.0;
  }
}

class UpdateEndpointGroupResponse {
  public EndpointGroup $endpoint_group;

  public function __construct(shape(
  ?'endpoint_group' => EndpointGroup,
  ) $s = shape()) {
    $this->endpoint_group = $endpoint_group ?? null;
  }
}

class UpdateListenerRequest {
  public ClientAffinity $client_affinity;
  public GenericString $listener_arn;
  public PortRanges $port_ranges;
  public Protocol $protocol;

  public function __construct(shape(
  ?'client_affinity' => ClientAffinity,
  ?'listener_arn' => GenericString,
  ?'port_ranges' => PortRanges,
  ?'protocol' => Protocol,
  ) $s = shape()) {
    $this->client_affinity = $client_affinity ?? "";
    $this->listener_arn = $listener_arn ?? "";
    $this->port_ranges = $port_ranges ?? [];
    $this->protocol = $protocol ?? "";
  }
}

class UpdateListenerResponse {
  public Listener $listener;

  public function __construct(shape(
  ?'listener' => Listener,
  ) $s = shape()) {
    $this->listener = $listener ?? null;
  }
}

class WithdrawByoipCidrRequest {
  public GenericString $cidr;

  public function __construct(shape(
  ?'cidr' => GenericString,
  ) $s = shape()) {
    $this->cidr = $cidr ?? "";
  }
}

class WithdrawByoipCidrResponse {
  public ByoipCidr $byoip_cidr;

  public function __construct(shape(
  ?'byoip_cidr' => ByoipCidr,
  ) $s = shape()) {
    $this->byoip_cidr = $byoip_cidr ?? null;
  }
}


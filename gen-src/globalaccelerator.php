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
}

class AcceleratorAttributes {
  public GenericBoolean $flow_logs_enabled;
  public GenericString $flow_logs_s_3_bucket;
  public GenericString $flow_logs_s_3_prefix;
}

class AcceleratorNotDisabledException {
  public ErrorMessage $message;
}

class AcceleratorNotFoundException {
  public ErrorMessage $message;
}

class AcceleratorStatus {
}

class Accelerators {
}

class AccessDeniedException {
  public ErrorMessage $message;
}

class AdvertiseByoipCidrRequest {
  public GenericString $cidr;
}

class AdvertiseByoipCidrResponse {
  public ByoipCidr $byoip_cidr;
}

class AssociatedEndpointGroupFoundException {
  public ErrorMessage $message;
}

class AssociatedListenerFoundException {
  public ErrorMessage $message;
}

class ByoipCidr {
  public GenericString $cidr;
  public ByoipCidrEvents $events;
  public ByoipCidrState $state;
}

class ByoipCidrEvent {
  public GenericString $message;
  public Timestamp $timestamp;
}

class ByoipCidrEvents {
}

class ByoipCidrNotFoundException {
  public ErrorMessage $message;
}

class ByoipCidrState {
}

class ByoipCidrs {
}

class CidrAuthorizationContext {
  public GenericString $message;
  public GenericString $signature;
}

class ClientAffinity {
}

class CreateAcceleratorRequest {
  public GenericBoolean $enabled;
  public IdempotencyToken $idempotency_token;
  public IpAddressType $ip_address_type;
  public IpAddresses $ip_addresses;
  public GenericString $name;
  public Tags $tags;
}

class CreateAcceleratorResponse {
  public Accelerator $accelerator;
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
}

class CreateEndpointGroupResponse {
  public EndpointGroup $endpoint_group;
}

class CreateListenerRequest {
  public GenericString $accelerator_arn;
  public ClientAffinity $client_affinity;
  public IdempotencyToken $idempotency_token;
  public PortRanges $port_ranges;
  public Protocol $protocol;
}

class CreateListenerResponse {
  public Listener $listener;
}

class DeleteAcceleratorRequest {
  public GenericString $accelerator_arn;
}

class DeleteEndpointGroupRequest {
  public GenericString $endpoint_group_arn;
}

class DeleteListenerRequest {
  public GenericString $listener_arn;
}

class DeprovisionByoipCidrRequest {
  public GenericString $cidr;
}

class DeprovisionByoipCidrResponse {
  public ByoipCidr $byoip_cidr;
}

class DescribeAcceleratorAttributesRequest {
  public GenericString $accelerator_arn;
}

class DescribeAcceleratorAttributesResponse {
  public AcceleratorAttributes $accelerator_attributes;
}

class DescribeAcceleratorRequest {
  public GenericString $accelerator_arn;
}

class DescribeAcceleratorResponse {
  public Accelerator $accelerator;
}

class DescribeEndpointGroupRequest {
  public GenericString $endpoint_group_arn;
}

class DescribeEndpointGroupResponse {
  public EndpointGroup $endpoint_group;
}

class DescribeListenerRequest {
  public GenericString $listener_arn;
}

class DescribeListenerResponse {
  public Listener $listener;
}

class EndpointConfiguration {
  public GenericBoolean $client_ip_preservation_enabled;
  public GenericString $endpoint_id;
  public EndpointWeight $weight;
}

class EndpointConfigurations {
}

class EndpointDescription {
  public GenericBoolean $client_ip_preservation_enabled;
  public GenericString $endpoint_id;
  public GenericString $health_reason;
  public HealthState $health_state;
  public EndpointWeight $weight;
}

class EndpointDescriptions {
}

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
}

class EndpointGroupAlreadyExistsException {
  public ErrorMessage $message;
}

class EndpointGroupNotFoundException {
  public ErrorMessage $message;
}

class EndpointGroups {
}

class EndpointWeight {
}

class ErrorMessage {
}

class GenericBoolean {
}

class GenericString {
}

class HealthCheckIntervalSeconds {
}

class HealthCheckPort {
}

class HealthCheckProtocol {
}

class HealthState {
}

class IdempotencyToken {
}

class IncorrectCidrStateException {
  public ErrorMessage $message;
}

class InternalServiceErrorException {
  public ErrorMessage $message;
}

class InvalidArgumentException {
  public ErrorMessage $message;
}

class InvalidNextTokenException {
  public ErrorMessage $message;
}

class InvalidPortRangeException {
  public ErrorMessage $message;
}

class IpAddress {
}

class IpAddressType {
}

class IpAddresses {
}

class IpSet {
  public IpAddresses $ip_addresses;
  public GenericString $ip_family;
}

class IpSets {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListAcceleratorsRequest {
  public MaxResults $max_results;
  public GenericString $next_token;
}

class ListAcceleratorsResponse {
  public Accelerators $accelerators;
  public GenericString $next_token;
}

class ListByoipCidrsRequest {
  public MaxResults $max_results;
  public GenericString $next_token;
}

class ListByoipCidrsResponse {
  public ByoipCidrs $byoip_cidrs;
  public GenericString $next_token;
}

class ListEndpointGroupsRequest {
  public GenericString $listener_arn;
  public MaxResults $max_results;
  public GenericString $next_token;
}

class ListEndpointGroupsResponse {
  public EndpointGroups $endpoint_groups;
  public GenericString $next_token;
}

class ListListenersRequest {
  public GenericString $accelerator_arn;
  public MaxResults $max_results;
  public GenericString $next_token;
}

class ListListenersResponse {
  public Listeners $listeners;
  public GenericString $next_token;
}

class ListTagsForResourceRequest {
  public ResourceArn $resource_arn;
}

class ListTagsForResourceResponse {
  public Tags $tags;
}

class Listener {
  public ClientAffinity $client_affinity;
  public GenericString $listener_arn;
  public PortRanges $port_ranges;
  public Protocol $protocol;
}

class ListenerNotFoundException {
  public ErrorMessage $message;
}

class Listeners {
}

class MaxResults {
}

class PortNumber {
}

class PortRange {
  public PortNumber $from_port;
  public PortNumber $to_port;
}

class PortRanges {
}

class Protocol {
}

class ProvisionByoipCidrRequest {
  public GenericString $cidr;
  public CidrAuthorizationContext $cidr_authorization_context;
}

class ProvisionByoipCidrResponse {
  public ByoipCidr $byoip_cidr;
}

class ResourceArn {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeys {
}

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public Tags $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Tags {
}

class ThresholdCount {
}

class Timestamp {
}

class TrafficDialPercentage {
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeys $tag_keys;
}

class UntagResourceResponse {
}

class UpdateAcceleratorAttributesRequest {
  public GenericString $accelerator_arn;
  public GenericBoolean $flow_logs_enabled;
  public GenericString $flow_logs_s_3_bucket;
  public GenericString $flow_logs_s_3_prefix;
}

class UpdateAcceleratorAttributesResponse {
  public AcceleratorAttributes $accelerator_attributes;
}

class UpdateAcceleratorRequest {
  public GenericString $accelerator_arn;
  public GenericBoolean $enabled;
  public IpAddressType $ip_address_type;
  public GenericString $name;
}

class UpdateAcceleratorResponse {
  public Accelerator $accelerator;
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
}

class UpdateEndpointGroupResponse {
  public EndpointGroup $endpoint_group;
}

class UpdateListenerRequest {
  public ClientAffinity $client_affinity;
  public GenericString $listener_arn;
  public PortRanges $port_ranges;
  public Protocol $protocol;
}

class UpdateListenerResponse {
  public Listener $listener;
}

class WithdrawByoipCidrRequest {
  public GenericString $cidr;
}

class WithdrawByoipCidrResponse {
  public ByoipCidr $byoip_cidr;
}


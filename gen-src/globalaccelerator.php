<?hh // strict
namespace slack\aws\globalaccelerator;

interface Global Accelerator {
  public function ListEndpointGroups(ListEndpointGroupsRequest) Awaitable<Errors\Result<ListEndpointGroupsResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function WithdrawByoipCidr(WithdrawByoipCidrRequest) Awaitable<Errors\Result<WithdrawByoipCidrResponse>>;
  public function AdvertiseByoipCidr(AdvertiseByoipCidrRequest) Awaitable<Errors\Result<AdvertiseByoipCidrResponse>>;
  public function CreateAccelerator(CreateAcceleratorRequest) Awaitable<Errors\Result<CreateAcceleratorResponse>>;
  public function CreateEndpointGroup(CreateEndpointGroupRequest) Awaitable<Errors\Result<CreateEndpointGroupResponse>>;
  public function DescribeListener(DescribeListenerRequest) Awaitable<Errors\Result<DescribeListenerResponse>>;
  public function DescribeAcceleratorAttributes(DescribeAcceleratorAttributesRequest) Awaitable<Errors\Result<DescribeAcceleratorAttributesResponse>>;
  public function DescribeEndpointGroup(DescribeEndpointGroupRequest) Awaitable<Errors\Result<DescribeEndpointGroupResponse>>;
  public function ListAccelerators(ListAcceleratorsRequest) Awaitable<Errors\Result<ListAcceleratorsResponse>>;
  public function ListByoipCidrs(ListByoipCidrsRequest) Awaitable<Errors\Result<ListByoipCidrsResponse>>;
  public function CreateListener(CreateListenerRequest) Awaitable<Errors\Result<CreateListenerResponse>>;
  public function DeleteAccelerator(DeleteAcceleratorRequest) Awaitable<Errors\Error>;
  public function DeleteEndpointGroup(DeleteEndpointGroupRequest) Awaitable<Errors\Error>;
  public function DeprovisionByoipCidr(DeprovisionByoipCidrRequest) Awaitable<Errors\Result<DeprovisionByoipCidrResponse>>;
  public function ListListeners(ListListenersRequest) Awaitable<Errors\Result<ListListenersResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function UpdateListener(UpdateListenerRequest) Awaitable<Errors\Result<UpdateListenerResponse>>;
  public function UpdateEndpointGroup(UpdateEndpointGroupRequest) Awaitable<Errors\Result<UpdateEndpointGroupResponse>>;
  public function UpdateAccelerator(UpdateAcceleratorRequest) Awaitable<Errors\Result<UpdateAcceleratorResponse>>;
  public function UpdateAcceleratorAttributes(UpdateAcceleratorAttributesRequest) Awaitable<Errors\Result<UpdateAcceleratorAttributesResponse>>;
  public function DeleteListener(DeleteListenerRequest) Awaitable<Errors\Error>;
  public function DescribeAccelerator(DescribeAcceleratorRequest) Awaitable<Errors\Result<DescribeAcceleratorResponse>>;
  public function ProvisionByoipCidr(ProvisionByoipCidrRequest) Awaitable<Errors\Result<ProvisionByoipCidrResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
}

class DescribeEndpointGroupResponse {
  public EndpointGroup $endpoint_group;
}

class EndpointGroupNotFoundException {
  public ErrorMessage $message;
}

class ListAcceleratorsResponse {
  public Accelerators $accelerators;
  public GenericString $next_token;
}

class TrafficDialPercentage {
}

class UpdateAcceleratorAttributesResponse {
  public AcceleratorAttributes $accelerator_attributes;
}

class WithdrawByoipCidrResponse {
  public ByoipCidr $byoip_cidr;
}

class CreateListenerRequest {
  public GenericString $accelerator_arn;
  public PortRanges $port_ranges;
  public Protocol $protocol;
  public ClientAffinity $client_affinity;
  public IdempotencyToken $idempotency_token;
}

class IncorrectCidrStateException {
  public ErrorMessage $message;
}

class TagKeys {
}

class UpdateAcceleratorRequest {
  public GenericString $name;
  public IpAddressType $ip_address_type;
  public GenericBoolean $enabled;
  public GenericString $accelerator_arn;
}

class AssociatedListenerFoundException {
  public ErrorMessage $message;
}

class CreateAcceleratorRequest {
  public GenericBoolean $enabled;
  public IdempotencyToken $idempotency_token;
  public Tags $tags;
  public GenericString $name;
  public IpAddressType $ip_address_type;
  public IpAddresses $ip_addresses;
}

class DeleteListenerRequest {
  public GenericString $listener_arn;
}

class ListByoipCidrsRequest {
  public MaxResults $max_results;
  public GenericString $next_token;
}

class UpdateAcceleratorAttributesRequest {
  public GenericBoolean $flow_logs_enabled;
  public GenericString $flow_logs_s_3_bucket;
  public GenericString $flow_logs_s_3_prefix;
  public GenericString $accelerator_arn;
}

class DescribeAcceleratorRequest {
  public GenericString $accelerator_arn;
}

class IpAddress {
}

class PortRange {
  public PortNumber $from_port;
  public PortNumber $to_port;
}

class ByoipCidrState {
}

class ClientAffinity {
}

class EndpointGroup {
  public TrafficDialPercentage $traffic_dial_percentage;
  public HealthCheckPort $health_check_port;
  public HealthCheckProtocol $health_check_protocol;
  public GenericString $health_check_path;
  public ThresholdCount $threshold_count;
  public GenericString $endpoint_group_arn;
  public EndpointDescriptions $endpoint_descriptions;
  public HealthCheckIntervalSeconds $health_check_interval_seconds;
  public GenericString $endpoint_group_region;
}

class InvalidNextTokenException {
  public ErrorMessage $message;
}

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public Tags $tags;
}

class TagValue {
}

class AdvertiseByoipCidrResponse {
  public ByoipCidr $byoip_cidr;
}

class ListEndpointGroupsRequest {
  public GenericString $listener_arn;
  public MaxResults $max_results;
  public GenericString $next_token;
}

class ResourceArn {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class ThresholdCount {
}

class CreateListenerResponse {
  public Listener $listener;
}

class DescribeAcceleratorAttributesRequest {
  public GenericString $accelerator_arn;
}

class ListListenersResponse {
  public Listeners $listeners;
  public GenericString $next_token;
}

class PortNumber {
}

class ProvisionByoipCidrRequest {
  public GenericString $cidr;
  public CidrAuthorizationContext $cidr_authorization_context;
}

class ProvisionByoipCidrResponse {
  public ByoipCidr $byoip_cidr;
}

class AcceleratorAttributes {
  public GenericBoolean $flow_logs_enabled;
  public GenericString $flow_logs_s_3_bucket;
  public GenericString $flow_logs_s_3_prefix;
}

class HealthCheckProtocol {
}

class Protocol {
}

class ByoipCidrNotFoundException {
  public ErrorMessage $message;
}

class ListListenersRequest {
  public GenericString $accelerator_arn;
  public MaxResults $max_results;
  public GenericString $next_token;
}

class UpdateListenerResponse {
  public Listener $listener;
}

class InternalServiceErrorException {
  public ErrorMessage $message;
}

class UpdateEndpointGroupRequest {
  public GenericString $health_check_path;
  public HealthCheckIntervalSeconds $health_check_interval_seconds;
  public ThresholdCount $threshold_count;
  public GenericString $endpoint_group_arn;
  public EndpointConfigurations $endpoint_configurations;
  public TrafficDialPercentage $traffic_dial_percentage;
  public HealthCheckPort $health_check_port;
  public HealthCheckProtocol $health_check_protocol;
}

class DescribeEndpointGroupRequest {
  public GenericString $endpoint_group_arn;
}

class Listeners {
}

class AcceleratorNotFoundException {
  public ErrorMessage $message;
}

class CreateEndpointGroupRequest {
  public GenericString $listener_arn;
  public EndpointConfigurations $endpoint_configurations;
  public TrafficDialPercentage $traffic_dial_percentage;
  public HealthCheckPort $health_check_port;
  public HealthCheckProtocol $health_check_protocol;
  public HealthCheckIntervalSeconds $health_check_interval_seconds;
  public IdempotencyToken $idempotency_token;
  public GenericString $endpoint_group_region;
  public GenericString $health_check_path;
  public ThresholdCount $threshold_count;
}

class Accelerator {
  public GenericString $accelerator_arn;
  public IpAddressType $ip_address_type;
  public GenericString $dns_name;
  public Timestamp $created_time;
  public GenericString $name;
  public GenericBoolean $enabled;
  public IpSets $ip_sets;
  public AcceleratorStatus $status;
  public Timestamp $last_modified_time;
}

class EndpointGroups {
}

class ListByoipCidrsResponse {
  public ByoipCidrs $byoip_cidrs;
  public GenericString $next_token;
}

class UpdateAcceleratorResponse {
  public Accelerator $accelerator;
}

class ListAcceleratorsRequest {
  public MaxResults $max_results;
  public GenericString $next_token;
}

class ListTagsForResourceResponse {
  public Tags $tags;
}

class PortRanges {
}

class UpdateListenerRequest {
  public GenericString $listener_arn;
  public PortRanges $port_ranges;
  public Protocol $protocol;
  public ClientAffinity $client_affinity;
}

class AcceleratorNotDisabledException {
  public ErrorMessage $message;
}

class DescribeListenerRequest {
  public GenericString $listener_arn;
}

class HealthCheckIntervalSeconds {
}

class Timestamp {
}

class ByoipCidrEvents {
}

class GenericBoolean {
}

class GenericString {
}

class IpAddressType {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class EndpointDescriptions {
}

class CidrAuthorizationContext {
  public GenericString $message;
  public GenericString $signature;
}

class HealthState {
}

class Accelerators {
}

class IdempotencyToken {
}

class IpAddresses {
}

class Tags {
}

class UntagResourceResponse {
}

class AccessDeniedException {
  public ErrorMessage $message;
}

class ByoipCidrEvent {
  public GenericString $message;
  public Timestamp $timestamp;
}

class ListenerNotFoundException {
  public ErrorMessage $message;
}

class WithdrawByoipCidrRequest {
  public GenericString $cidr;
}

class ListEndpointGroupsResponse {
  public EndpointGroups $endpoint_groups;
  public GenericString $next_token;
}

class TagResourceResponse {
}

class ByoipCidr {
  public GenericString $cidr;
  public ByoipCidrState $state;
  public ByoipCidrEvents $events;
}

class IpSets {
}

class UpdateEndpointGroupResponse {
  public EndpointGroup $endpoint_group;
}

class DescribeAcceleratorResponse {
  public Accelerator $accelerator;
}

class EndpointWeight {
}

class EndpointConfigurations {
}

class DeleteEndpointGroupRequest {
  public GenericString $endpoint_group_arn;
}

class DeprovisionByoipCidrResponse {
  public ByoipCidr $byoip_cidr;
}

class IpSet {
  public GenericString $ip_family;
  public IpAddresses $ip_addresses;
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeys $tag_keys;
}

class CreateEndpointGroupResponse {
  public EndpointGroup $endpoint_group;
}

class DeleteAcceleratorRequest {
  public GenericString $accelerator_arn;
}

class InvalidPortRangeException {
  public ErrorMessage $message;
}

class CreateAcceleratorResponse {
  public Accelerator $accelerator;
}

class DeprovisionByoipCidrRequest {
  public GenericString $cidr;
}

class EndpointConfiguration {
  public GenericString $endpoint_id;
  public EndpointWeight $weight;
  public GenericBoolean $client_ip_preservation_enabled;
}

class InvalidArgumentException {
  public ErrorMessage $message;
}

class AcceleratorStatus {
}

class DescribeAcceleratorAttributesResponse {
  public AcceleratorAttributes $accelerator_attributes;
}

class Listener {
  public Protocol $protocol;
  public ClientAffinity $client_affinity;
  public GenericString $listener_arn;
  public PortRanges $port_ranges;
}

class DescribeListenerResponse {
  public Listener $listener;
}

class EndpointDescription {
  public GenericString $endpoint_id;
  public EndpointWeight $weight;
  public HealthState $health_state;
  public GenericString $health_reason;
  public GenericBoolean $client_ip_preservation_enabled;
}

class ErrorMessage {
}

class ListTagsForResourceRequest {
  public ResourceArn $resource_arn;
}

class AdvertiseByoipCidrRequest {
  public GenericString $cidr;
}

class ByoipCidrs {
}

class EndpointGroupAlreadyExistsException {
  public ErrorMessage $message;
}

class HealthCheckPort {
}

class MaxResults {
}

class AssociatedEndpointGroupFoundException {
  public ErrorMessage $message;
}


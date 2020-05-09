<?hh // strict
namespace slack\aws\mediaconnect;

interface MediaConnect {
  public function AddFlowOutputs(AddFlowOutputsRequest) Awaitable<Errors\Result<AddFlowOutputsResponse>>;
  public function AddFlowSources(AddFlowSourcesRequest) Awaitable<Errors\Result<AddFlowSourcesResponse>>;
  public function AddFlowVpcInterfaces(AddFlowVpcInterfacesRequest) Awaitable<Errors\Result<AddFlowVpcInterfacesResponse>>;
  public function CreateFlow(CreateFlowRequest) Awaitable<Errors\Result<CreateFlowResponse>>;
  public function DeleteFlow(DeleteFlowRequest) Awaitable<Errors\Result<DeleteFlowResponse>>;
  public function DescribeFlow(DescribeFlowRequest) Awaitable<Errors\Result<DescribeFlowResponse>>;
  public function GrantFlowEntitlements(GrantFlowEntitlementsRequest) Awaitable<Errors\Result<GrantFlowEntitlementsResponse>>;
  public function ListEntitlements(ListEntitlementsRequest) Awaitable<Errors\Result<ListEntitlementsResponse>>;
  public function ListFlows(ListFlowsRequest) Awaitable<Errors\Result<ListFlowsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function RemoveFlowOutput(RemoveFlowOutputRequest) Awaitable<Errors\Result<RemoveFlowOutputResponse>>;
  public function RemoveFlowSource(RemoveFlowSourceRequest) Awaitable<Errors\Result<RemoveFlowSourceResponse>>;
  public function RemoveFlowVpcInterface(RemoveFlowVpcInterfaceRequest) Awaitable<Errors\Result<RemoveFlowVpcInterfaceResponse>>;
  public function RevokeFlowEntitlement(RevokeFlowEntitlementRequest) Awaitable<Errors\Result<RevokeFlowEntitlementResponse>>;
  public function StartFlow(StartFlowRequest) Awaitable<Errors\Result<StartFlowResponse>>;
  public function StopFlow(StopFlowRequest) Awaitable<Errors\Result<StopFlowResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateFlow(UpdateFlowRequest) Awaitable<Errors\Result<UpdateFlowResponse>>;
  public function UpdateFlowEntitlement(UpdateFlowEntitlementRequest) Awaitable<Errors\Result<UpdateFlowEntitlementResponse>>;
  public function UpdateFlowOutput(UpdateFlowOutputRequest) Awaitable<Errors\Result<UpdateFlowOutputResponse>>;
  public function UpdateFlowSource(UpdateFlowSourceRequest) Awaitable<Errors\Result<UpdateFlowSourceResponse>>;
}

class AddFlowOutputs420Exception {
  public __string $message;
}

class AddFlowOutputsRequest {
  public __string $flow_arn;
  public __listOfAddOutputRequest $outputs;
}

class AddFlowOutputsResponse {
  public __string $flow_arn;
  public __listOfOutput $outputs;
}

class AddFlowSourcesRequest {
  public __string $flow_arn;
  public __listOfSetSourceRequest $sources;
}

class AddFlowSourcesResponse {
  public __string $flow_arn;
  public __listOfSource $sources;
}

class AddFlowVpcInterfacesRequest {
  public __string $flow_arn;
  public __listOfVpcInterfaceRequest $vpc_interfaces;
}

class AddFlowVpcInterfacesResponse {
  public __string $flow_arn;
  public __listOfVpcInterface $vpc_interfaces;
}

class AddOutputRequest {
  public __listOf__string $cidr_allow_list;
  public __string $description;
  public __string $destination;
  public Encryption $encryption;
  public __integer $max_latency;
  public __string $name;
  public __integer $port;
  public Protocol $protocol;
  public __string $remote_id;
  public __integer $smoothing_latency;
  public __string $stream_id;
  public VpcInterfaceAttachment $vpc_interface_attachment;
}

class Algorithm {
}

class BadRequestException {
  public __string $message;
}

class CreateFlow420Exception {
  public __string $message;
}

class CreateFlowRequest {
  public __string $availability_zone;
  public __listOfGrantEntitlementRequest $entitlements;
  public __string $name;
  public __listOfAddOutputRequest $outputs;
  public SetSourceRequest $source;
  public FailoverConfig $source_failover_config;
  public __listOfSetSourceRequest $sources;
  public __listOfVpcInterfaceRequest $vpc_interfaces;
}

class CreateFlowResponse {
  public Flow $flow;
}

class DeleteFlowRequest {
  public __string $flow_arn;
}

class DeleteFlowResponse {
  public __string $flow_arn;
  public Status $status;
}

class DescribeFlowRequest {
  public __string $flow_arn;
}

class DescribeFlowResponse {
  public Flow $flow;
  public Messages $messages;
}

class Encryption {
  public Algorithm $algorithm;
  public __string $constant_initialization_vector;
  public __string $device_id;
  public KeyType $key_type;
  public __string $region;
  public __string $resource_id;
  public __string $role_arn;
  public __string $secret_arn;
  public __string $url;
}

class Entitlement {
  public __integer $data_transfer_subscriber_fee_percent;
  public __string $description;
  public Encryption $encryption;
  public __string $entitlement_arn;
  public __string $name;
  public __listOf__string $subscribers;
}

class FailoverConfig {
  public __integer $recovery_window;
  public State $state;
}

class Flow {
  public __string $availability_zone;
  public __string $description;
  public __string $egress_ip;
  public __listOfEntitlement $entitlements;
  public __string $flow_arn;
  public __string $name;
  public __listOfOutput $outputs;
  public Source $source;
  public FailoverConfig $source_failover_config;
  public __listOfSource $sources;
  public Status $status;
  public __listOfVpcInterface $vpc_interfaces;
}

class ForbiddenException {
  public __string $message;
}

class GrantEntitlementRequest {
  public __integer $data_transfer_subscriber_fee_percent;
  public __string $description;
  public Encryption $encryption;
  public __string $name;
  public __listOf__string $subscribers;
}

class GrantFlowEntitlements420Exception {
  public __string $message;
}

class GrantFlowEntitlementsRequest {
  public __listOfGrantEntitlementRequest $entitlements;
  public __string $flow_arn;
}

class GrantFlowEntitlementsResponse {
  public __listOfEntitlement $entitlements;
  public __string $flow_arn;
}

class InternalServerErrorException {
  public __string $message;
}

class KeyType {
}

class ListEntitlementsRequest {
  public MaxResults $max_results;
  public __string $next_token;
}

class ListEntitlementsResponse {
  public __listOfListedEntitlement $entitlements;
  public __string $next_token;
}

class ListFlowsRequest {
  public MaxResults $max_results;
  public __string $next_token;
}

class ListFlowsResponse {
  public __listOfListedFlow $flows;
  public __string $next_token;
}

class ListTagsForResourceRequest {
  public __string $resource_arn;
}

class ListTagsForResourceResponse {
  public __mapOf__string $tags;
}

class ListedEntitlement {
  public __integer $data_transfer_subscriber_fee_percent;
  public __string $entitlement_arn;
  public __string $entitlement_name;
}

class ListedFlow {
  public __string $availability_zone;
  public __string $description;
  public __string $flow_arn;
  public __string $name;
  public SourceType $source_type;
  public Status $status;
}

class MaxResults {
}

class Messages {
  public __listOf__string $errors;
}

class NotFoundException {
  public __string $message;
}

class Output {
  public __integer $data_transfer_subscriber_fee_percent;
  public __string $description;
  public __string $destination;
  public Encryption $encryption;
  public __string $entitlement_arn;
  public __string $media_live_input_arn;
  public __string $name;
  public __string $output_arn;
  public __integer $port;
  public Transport $transport;
  public VpcInterfaceAttachment $vpc_interface_attachment;
}

class Protocol {
}

class RemoveFlowOutputRequest {
  public __string $flow_arn;
  public __string $output_arn;
}

class RemoveFlowOutputResponse {
  public __string $flow_arn;
  public __string $output_arn;
}

class RemoveFlowSourceRequest {
  public __string $flow_arn;
  public __string $source_arn;
}

class RemoveFlowSourceResponse {
  public __string $flow_arn;
  public __string $source_arn;
}

class RemoveFlowVpcInterfaceRequest {
  public __string $flow_arn;
  public __string $vpc_interface_name;
}

class RemoveFlowVpcInterfaceResponse {
  public __string $flow_arn;
  public __listOf__string $non_deleted_network_interface_ids;
  public __string $vpc_interface_name;
}

class ResponseError {
  public __string $message;
}

class RevokeFlowEntitlementRequest {
  public __string $entitlement_arn;
  public __string $flow_arn;
}

class RevokeFlowEntitlementResponse {
  public __string $entitlement_arn;
  public __string $flow_arn;
}

class ServiceUnavailableException {
  public __string $message;
}

class SetSourceRequest {
  public Encryption $decryption;
  public __string $description;
  public __string $entitlement_arn;
  public __integer $ingest_port;
  public __integer $max_bitrate;
  public __integer $max_latency;
  public __string $name;
  public Protocol $protocol;
  public __string $stream_id;
  public __string $vpc_interface_name;
  public __string $whitelist_cidr;
}

class Source {
  public __integer $data_transfer_subscriber_fee_percent;
  public Encryption $decryption;
  public __string $description;
  public __string $entitlement_arn;
  public __string $ingest_ip;
  public __integer $ingest_port;
  public __string $name;
  public __string $source_arn;
  public Transport $transport;
  public __string $vpc_interface_name;
  public __string $whitelist_cidr;
}

class SourceType {
}

class StartFlowRequest {
  public __string $flow_arn;
}

class StartFlowResponse {
  public __string $flow_arn;
  public Status $status;
}

class State {
}

class Status {
}

class StopFlowRequest {
  public __string $flow_arn;
}

class StopFlowResponse {
  public __string $flow_arn;
  public Status $status;
}

class TagResourceRequest {
  public __string $resource_arn;
  public __mapOf__string $tags;
}

class TooManyRequestsException {
  public __string $message;
}

class Transport {
  public __listOf__string $cidr_allow_list;
  public __integer $max_bitrate;
  public __integer $max_latency;
  public Protocol $protocol;
  public __string $remote_id;
  public __integer $smoothing_latency;
  public __string $stream_id;
}

class UntagResourceRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;
}

class UpdateEncryption {
  public Algorithm $algorithm;
  public __string $constant_initialization_vector;
  public __string $device_id;
  public KeyType $key_type;
  public __string $region;
  public __string $resource_id;
  public __string $role_arn;
  public __string $secret_arn;
  public __string $url;
}

class UpdateFailoverConfig {
  public __integer $recovery_window;
  public State $state;
}

class UpdateFlowEntitlementRequest {
  public __string $description;
  public UpdateEncryption $encryption;
  public __string $entitlement_arn;
  public __string $flow_arn;
  public __listOf__string $subscribers;
}

class UpdateFlowEntitlementResponse {
  public Entitlement $entitlement;
  public __string $flow_arn;
}

class UpdateFlowOutputRequest {
  public __listOf__string $cidr_allow_list;
  public __string $description;
  public __string $destination;
  public UpdateEncryption $encryption;
  public __string $flow_arn;
  public __integer $max_latency;
  public __string $output_arn;
  public __integer $port;
  public Protocol $protocol;
  public __string $remote_id;
  public __integer $smoothing_latency;
  public __string $stream_id;
  public VpcInterfaceAttachment $vpc_interface_attachment;
}

class UpdateFlowOutputResponse {
  public __string $flow_arn;
  public Output $output;
}

class UpdateFlowRequest {
  public __string $flow_arn;
  public UpdateFailoverConfig $source_failover_config;
}

class UpdateFlowResponse {
  public Flow $flow;
}

class UpdateFlowSourceRequest {
  public UpdateEncryption $decryption;
  public __string $description;
  public __string $entitlement_arn;
  public __string $flow_arn;
  public __integer $ingest_port;
  public __integer $max_bitrate;
  public __integer $max_latency;
  public Protocol $protocol;
  public __string $source_arn;
  public __string $stream_id;
  public __string $vpc_interface_name;
  public __string $whitelist_cidr;
}

class UpdateFlowSourceResponse {
  public __string $flow_arn;
  public Source $source;
}

class VpcInterface {
  public __string $name;
  public __listOf__string $network_interface_ids;
  public __string $role_arn;
  public __listOf__string $security_group_ids;
  public __string $subnet_id;
}

class VpcInterfaceAttachment {
  public __string $vpc_interface_name;
}

class VpcInterfaceRequest {
  public __string $name;
  public __string $role_arn;
  public __listOf__string $security_group_ids;
  public __string $subnet_id;
}

class __boolean {
}

class __double {
}

class __integer {
}

class __listOfAddOutputRequest {
}

class __listOfEntitlement {
}

class __listOfGrantEntitlementRequest {
}

class __listOfListedEntitlement {
}

class __listOfListedFlow {
}

class __listOfOutput {
}

class __listOfSetSourceRequest {
}

class __listOfSource {
}

class __listOfVpcInterface {
}

class __listOfVpcInterfaceRequest {
}

class __listOf__integer {
}

class __listOf__string {
}

class __long {
}

class __mapOf__string {
}

class __string {
}

class __timestampIso8601 {
}

class __timestampUnix {
}


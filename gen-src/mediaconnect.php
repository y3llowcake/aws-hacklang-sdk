<?hh // strict
namespace slack\aws\mediaconnect;

interface MediaConnect {
  public function AddFlowOutputs(AddFlowOutputsRequest): Awaitable<Errors\Result<AddFlowOutputsResponse>>;
  public function AddFlowSources(AddFlowSourcesRequest): Awaitable<Errors\Result<AddFlowSourcesResponse>>;
  public function AddFlowVpcInterfaces(AddFlowVpcInterfacesRequest): Awaitable<Errors\Result<AddFlowVpcInterfacesResponse>>;
  public function CreateFlow(CreateFlowRequest): Awaitable<Errors\Result<CreateFlowResponse>>;
  public function DeleteFlow(DeleteFlowRequest): Awaitable<Errors\Result<DeleteFlowResponse>>;
  public function DescribeFlow(DescribeFlowRequest): Awaitable<Errors\Result<DescribeFlowResponse>>;
  public function GrantFlowEntitlements(GrantFlowEntitlementsRequest): Awaitable<Errors\Result<GrantFlowEntitlementsResponse>>;
  public function ListEntitlements(ListEntitlementsRequest): Awaitable<Errors\Result<ListEntitlementsResponse>>;
  public function ListFlows(ListFlowsRequest): Awaitable<Errors\Result<ListFlowsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function RemoveFlowOutput(RemoveFlowOutputRequest): Awaitable<Errors\Result<RemoveFlowOutputResponse>>;
  public function RemoveFlowSource(RemoveFlowSourceRequest): Awaitable<Errors\Result<RemoveFlowSourceResponse>>;
  public function RemoveFlowVpcInterface(RemoveFlowVpcInterfaceRequest): Awaitable<Errors\Result<RemoveFlowVpcInterfaceResponse>>;
  public function RevokeFlowEntitlement(RevokeFlowEntitlementRequest): Awaitable<Errors\Result<RevokeFlowEntitlementResponse>>;
  public function StartFlow(StartFlowRequest): Awaitable<Errors\Result<StartFlowResponse>>;
  public function StopFlow(StopFlowRequest): Awaitable<Errors\Result<StopFlowResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateFlow(UpdateFlowRequest): Awaitable<Errors\Result<UpdateFlowResponse>>;
  public function UpdateFlowEntitlement(UpdateFlowEntitlementRequest): Awaitable<Errors\Result<UpdateFlowEntitlementResponse>>;
  public function UpdateFlowOutput(UpdateFlowOutputRequest): Awaitable<Errors\Result<UpdateFlowOutputResponse>>;
  public function UpdateFlowSource(UpdateFlowSourceRequest): Awaitable<Errors\Result<UpdateFlowSourceResponse>>;
}

class AddFlowOutputs420Exception {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class AddFlowOutputsRequest {
  public __string $flow_arn;
  public __listOfAddOutputRequest $outputs;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'outputs' => __listOfAddOutputRequest,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->outputs = $outputs ?? [];
  }
}

class AddFlowOutputsResponse {
  public __string $flow_arn;
  public __listOfOutput $outputs;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'outputs' => __listOfOutput,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->outputs = $outputs ?? [];
  }
}

class AddFlowSourcesRequest {
  public __string $flow_arn;
  public __listOfSetSourceRequest $sources;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'sources' => __listOfSetSourceRequest,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->sources = $sources ?? [];
  }
}

class AddFlowSourcesResponse {
  public __string $flow_arn;
  public __listOfSource $sources;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'sources' => __listOfSource,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->sources = $sources ?? [];
  }
}

class AddFlowVpcInterfacesRequest {
  public __string $flow_arn;
  public __listOfVpcInterfaceRequest $vpc_interfaces;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'vpc_interfaces' => __listOfVpcInterfaceRequest,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->vpc_interfaces = $vpc_interfaces ?? [];
  }
}

class AddFlowVpcInterfacesResponse {
  public __string $flow_arn;
  public __listOfVpcInterface $vpc_interfaces;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'vpc_interfaces' => __listOfVpcInterface,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->vpc_interfaces = $vpc_interfaces ?? [];
  }
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

  public function __construct(shape(
  ?'cidr_allow_list' => __listOf__string,
  ?'description' => __string,
  ?'destination' => __string,
  ?'encryption' => Encryption,
  ?'max_latency' => __integer,
  ?'name' => __string,
  ?'port' => __integer,
  ?'protocol' => Protocol,
  ?'remote_id' => __string,
  ?'smoothing_latency' => __integer,
  ?'stream_id' => __string,
  ?'vpc_interface_attachment' => VpcInterfaceAttachment,
  ) $s = shape()) {
    $this->cidr_allow_list = $cidr_allow_list ?? [];
    $this->description = $description ?? "";
    $this->destination = $destination ?? "";
    $this->encryption = $encryption ?? null;
    $this->max_latency = $max_latency ?? 0;
    $this->name = $name ?? "";
    $this->port = $port ?? 0;
    $this->protocol = $protocol ?? "";
    $this->remote_id = $remote_id ?? "";
    $this->smoothing_latency = $smoothing_latency ?? 0;
    $this->stream_id = $stream_id ?? "";
    $this->vpc_interface_attachment = $vpc_interface_attachment ?? null;
  }
}

type Algorithm = string;

class BadRequestException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CreateFlow420Exception {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'availability_zone' => __string,
  ?'entitlements' => __listOfGrantEntitlementRequest,
  ?'name' => __string,
  ?'outputs' => __listOfAddOutputRequest,
  ?'source' => SetSourceRequest,
  ?'source_failover_config' => FailoverConfig,
  ?'sources' => __listOfSetSourceRequest,
  ?'vpc_interfaces' => __listOfVpcInterfaceRequest,
  ) $s = shape()) {
    $this->availability_zone = $availability_zone ?? "";
    $this->entitlements = $entitlements ?? [];
    $this->name = $name ?? "";
    $this->outputs = $outputs ?? [];
    $this->source = $source ?? null;
    $this->source_failover_config = $source_failover_config ?? null;
    $this->sources = $sources ?? [];
    $this->vpc_interfaces = $vpc_interfaces ?? [];
  }
}

class CreateFlowResponse {
  public Flow $flow;

  public function __construct(shape(
  ?'flow' => Flow,
  ) $s = shape()) {
    $this->flow = $flow ?? null;
  }
}

class DeleteFlowRequest {
  public __string $flow_arn;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
  }
}

class DeleteFlowResponse {
  public __string $flow_arn;
  public Status $status;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'status' => Status,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->status = $status ?? "";
  }
}

class DescribeFlowRequest {
  public __string $flow_arn;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
  }
}

class DescribeFlowResponse {
  public Flow $flow;
  public Messages $messages;

  public function __construct(shape(
  ?'flow' => Flow,
  ?'messages' => Messages,
  ) $s = shape()) {
    $this->flow = $flow ?? null;
    $this->messages = $messages ?? null;
  }
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

  public function __construct(shape(
  ?'algorithm' => Algorithm,
  ?'constant_initialization_vector' => __string,
  ?'device_id' => __string,
  ?'key_type' => KeyType,
  ?'region' => __string,
  ?'resource_id' => __string,
  ?'role_arn' => __string,
  ?'secret_arn' => __string,
  ?'url' => __string,
  ) $s = shape()) {
    $this->algorithm = $algorithm ?? "";
    $this->constant_initialization_vector = $constant_initialization_vector ?? "";
    $this->device_id = $device_id ?? "";
    $this->key_type = $key_type ?? "";
    $this->region = $region ?? "";
    $this->resource_id = $resource_id ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->secret_arn = $secret_arn ?? "";
    $this->url = $url ?? "";
  }
}

class Entitlement {
  public __integer $data_transfer_subscriber_fee_percent;
  public __string $description;
  public Encryption $encryption;
  public __string $entitlement_arn;
  public __string $name;
  public __listOf__string $subscribers;

  public function __construct(shape(
  ?'data_transfer_subscriber_fee_percent' => __integer,
  ?'description' => __string,
  ?'encryption' => Encryption,
  ?'entitlement_arn' => __string,
  ?'name' => __string,
  ?'subscribers' => __listOf__string,
  ) $s = shape()) {
    $this->data_transfer_subscriber_fee_percent = $data_transfer_subscriber_fee_percent ?? 0;
    $this->description = $description ?? "";
    $this->encryption = $encryption ?? null;
    $this->entitlement_arn = $entitlement_arn ?? "";
    $this->name = $name ?? "";
    $this->subscribers = $subscribers ?? [];
  }
}

class FailoverConfig {
  public __integer $recovery_window;
  public State $state;

  public function __construct(shape(
  ?'recovery_window' => __integer,
  ?'state' => State,
  ) $s = shape()) {
    $this->recovery_window = $recovery_window ?? 0;
    $this->state = $state ?? "";
  }
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

  public function __construct(shape(
  ?'availability_zone' => __string,
  ?'description' => __string,
  ?'egress_ip' => __string,
  ?'entitlements' => __listOfEntitlement,
  ?'flow_arn' => __string,
  ?'name' => __string,
  ?'outputs' => __listOfOutput,
  ?'source' => Source,
  ?'source_failover_config' => FailoverConfig,
  ?'sources' => __listOfSource,
  ?'status' => Status,
  ?'vpc_interfaces' => __listOfVpcInterface,
  ) $s = shape()) {
    $this->availability_zone = $availability_zone ?? "";
    $this->description = $description ?? "";
    $this->egress_ip = $egress_ip ?? "";
    $this->entitlements = $entitlements ?? [];
    $this->flow_arn = $flow_arn ?? "";
    $this->name = $name ?? "";
    $this->outputs = $outputs ?? [];
    $this->source = $source ?? null;
    $this->source_failover_config = $source_failover_config ?? null;
    $this->sources = $sources ?? [];
    $this->status = $status ?? "";
    $this->vpc_interfaces = $vpc_interfaces ?? [];
  }
}

class ForbiddenException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class GrantEntitlementRequest {
  public __integer $data_transfer_subscriber_fee_percent;
  public __string $description;
  public Encryption $encryption;
  public __string $name;
  public __listOf__string $subscribers;

  public function __construct(shape(
  ?'data_transfer_subscriber_fee_percent' => __integer,
  ?'description' => __string,
  ?'encryption' => Encryption,
  ?'name' => __string,
  ?'subscribers' => __listOf__string,
  ) $s = shape()) {
    $this->data_transfer_subscriber_fee_percent = $data_transfer_subscriber_fee_percent ?? 0;
    $this->description = $description ?? "";
    $this->encryption = $encryption ?? null;
    $this->name = $name ?? "";
    $this->subscribers = $subscribers ?? [];
  }
}

class GrantFlowEntitlements420Exception {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class GrantFlowEntitlementsRequest {
  public __listOfGrantEntitlementRequest $entitlements;
  public __string $flow_arn;

  public function __construct(shape(
  ?'entitlements' => __listOfGrantEntitlementRequest,
  ?'flow_arn' => __string,
  ) $s = shape()) {
    $this->entitlements = $entitlements ?? [];
    $this->flow_arn = $flow_arn ?? "";
  }
}

class GrantFlowEntitlementsResponse {
  public __listOfEntitlement $entitlements;
  public __string $flow_arn;

  public function __construct(shape(
  ?'entitlements' => __listOfEntitlement,
  ?'flow_arn' => __string,
  ) $s = shape()) {
    $this->entitlements = $entitlements ?? [];
    $this->flow_arn = $flow_arn ?? "";
  }
}

class InternalServerErrorException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type KeyType = string;

class ListEntitlementsRequest {
  public MaxResults $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListEntitlementsResponse {
  public __listOfListedEntitlement $entitlements;
  public __string $next_token;

  public function __construct(shape(
  ?'entitlements' => __listOfListedEntitlement,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->entitlements = $entitlements ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListFlowsRequest {
  public MaxResults $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListFlowsResponse {
  public __listOfListedFlow $flows;
  public __string $next_token;

  public function __construct(shape(
  ?'flows' => __listOfListedFlow,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->flows = $flows ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListTagsForResourceRequest {
  public __string $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public __mapOf__string $tags;

  public function __construct(shape(
  ?'tags' => __mapOf__string,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class ListedEntitlement {
  public __integer $data_transfer_subscriber_fee_percent;
  public __string $entitlement_arn;
  public __string $entitlement_name;

  public function __construct(shape(
  ?'data_transfer_subscriber_fee_percent' => __integer,
  ?'entitlement_arn' => __string,
  ?'entitlement_name' => __string,
  ) $s = shape()) {
    $this->data_transfer_subscriber_fee_percent = $data_transfer_subscriber_fee_percent ?? 0;
    $this->entitlement_arn = $entitlement_arn ?? "";
    $this->entitlement_name = $entitlement_name ?? "";
  }
}

class ListedFlow {
  public __string $availability_zone;
  public __string $description;
  public __string $flow_arn;
  public __string $name;
  public SourceType $source_type;
  public Status $status;

  public function __construct(shape(
  ?'availability_zone' => __string,
  ?'description' => __string,
  ?'flow_arn' => __string,
  ?'name' => __string,
  ?'source_type' => SourceType,
  ?'status' => Status,
  ) $s = shape()) {
    $this->availability_zone = $availability_zone ?? "";
    $this->description = $description ?? "";
    $this->flow_arn = $flow_arn ?? "";
    $this->name = $name ?? "";
    $this->source_type = $source_type ?? "";
    $this->status = $status ?? "";
  }
}

type MaxResults = int;

class Messages {
  public __listOf__string $errors;

  public function __construct(shape(
  ?'errors' => __listOf__string,
  ) $s = shape()) {
    $this->errors = $errors ?? [];
  }
}

class NotFoundException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'data_transfer_subscriber_fee_percent' => __integer,
  ?'description' => __string,
  ?'destination' => __string,
  ?'encryption' => Encryption,
  ?'entitlement_arn' => __string,
  ?'media_live_input_arn' => __string,
  ?'name' => __string,
  ?'output_arn' => __string,
  ?'port' => __integer,
  ?'transport' => Transport,
  ?'vpc_interface_attachment' => VpcInterfaceAttachment,
  ) $s = shape()) {
    $this->data_transfer_subscriber_fee_percent = $data_transfer_subscriber_fee_percent ?? 0;
    $this->description = $description ?? "";
    $this->destination = $destination ?? "";
    $this->encryption = $encryption ?? null;
    $this->entitlement_arn = $entitlement_arn ?? "";
    $this->media_live_input_arn = $media_live_input_arn ?? "";
    $this->name = $name ?? "";
    $this->output_arn = $output_arn ?? "";
    $this->port = $port ?? 0;
    $this->transport = $transport ?? null;
    $this->vpc_interface_attachment = $vpc_interface_attachment ?? null;
  }
}

type Protocol = string;

class RemoveFlowOutputRequest {
  public __string $flow_arn;
  public __string $output_arn;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'output_arn' => __string,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->output_arn = $output_arn ?? "";
  }
}

class RemoveFlowOutputResponse {
  public __string $flow_arn;
  public __string $output_arn;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'output_arn' => __string,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->output_arn = $output_arn ?? "";
  }
}

class RemoveFlowSourceRequest {
  public __string $flow_arn;
  public __string $source_arn;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'source_arn' => __string,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->source_arn = $source_arn ?? "";
  }
}

class RemoveFlowSourceResponse {
  public __string $flow_arn;
  public __string $source_arn;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'source_arn' => __string,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->source_arn = $source_arn ?? "";
  }
}

class RemoveFlowVpcInterfaceRequest {
  public __string $flow_arn;
  public __string $vpc_interface_name;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'vpc_interface_name' => __string,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->vpc_interface_name = $vpc_interface_name ?? "";
  }
}

class RemoveFlowVpcInterfaceResponse {
  public __string $flow_arn;
  public __listOf__string $non_deleted_network_interface_ids;
  public __string $vpc_interface_name;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'non_deleted_network_interface_ids' => __listOf__string,
  ?'vpc_interface_name' => __string,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->non_deleted_network_interface_ids = $non_deleted_network_interface_ids ?? [];
    $this->vpc_interface_name = $vpc_interface_name ?? "";
  }
}

class ResponseError {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class RevokeFlowEntitlementRequest {
  public __string $entitlement_arn;
  public __string $flow_arn;

  public function __construct(shape(
  ?'entitlement_arn' => __string,
  ?'flow_arn' => __string,
  ) $s = shape()) {
    $this->entitlement_arn = $entitlement_arn ?? "";
    $this->flow_arn = $flow_arn ?? "";
  }
}

class RevokeFlowEntitlementResponse {
  public __string $entitlement_arn;
  public __string $flow_arn;

  public function __construct(shape(
  ?'entitlement_arn' => __string,
  ?'flow_arn' => __string,
  ) $s = shape()) {
    $this->entitlement_arn = $entitlement_arn ?? "";
    $this->flow_arn = $flow_arn ?? "";
  }
}

class ServiceUnavailableException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'decryption' => Encryption,
  ?'description' => __string,
  ?'entitlement_arn' => __string,
  ?'ingest_port' => __integer,
  ?'max_bitrate' => __integer,
  ?'max_latency' => __integer,
  ?'name' => __string,
  ?'protocol' => Protocol,
  ?'stream_id' => __string,
  ?'vpc_interface_name' => __string,
  ?'whitelist_cidr' => __string,
  ) $s = shape()) {
    $this->decryption = $decryption ?? null;
    $this->description = $description ?? "";
    $this->entitlement_arn = $entitlement_arn ?? "";
    $this->ingest_port = $ingest_port ?? 0;
    $this->max_bitrate = $max_bitrate ?? 0;
    $this->max_latency = $max_latency ?? 0;
    $this->name = $name ?? "";
    $this->protocol = $protocol ?? "";
    $this->stream_id = $stream_id ?? "";
    $this->vpc_interface_name = $vpc_interface_name ?? "";
    $this->whitelist_cidr = $whitelist_cidr ?? "";
  }
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

  public function __construct(shape(
  ?'data_transfer_subscriber_fee_percent' => __integer,
  ?'decryption' => Encryption,
  ?'description' => __string,
  ?'entitlement_arn' => __string,
  ?'ingest_ip' => __string,
  ?'ingest_port' => __integer,
  ?'name' => __string,
  ?'source_arn' => __string,
  ?'transport' => Transport,
  ?'vpc_interface_name' => __string,
  ?'whitelist_cidr' => __string,
  ) $s = shape()) {
    $this->data_transfer_subscriber_fee_percent = $data_transfer_subscriber_fee_percent ?? 0;
    $this->decryption = $decryption ?? null;
    $this->description = $description ?? "";
    $this->entitlement_arn = $entitlement_arn ?? "";
    $this->ingest_ip = $ingest_ip ?? "";
    $this->ingest_port = $ingest_port ?? 0;
    $this->name = $name ?? "";
    $this->source_arn = $source_arn ?? "";
    $this->transport = $transport ?? null;
    $this->vpc_interface_name = $vpc_interface_name ?? "";
    $this->whitelist_cidr = $whitelist_cidr ?? "";
  }
}

type SourceType = string;

class StartFlowRequest {
  public __string $flow_arn;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
  }
}

class StartFlowResponse {
  public __string $flow_arn;
  public Status $status;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'status' => Status,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->status = $status ?? "";
  }
}

type State = string;

type Status = string;

class StopFlowRequest {
  public __string $flow_arn;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
  }
}

class StopFlowResponse {
  public __string $flow_arn;
  public Status $status;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'status' => Status,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->status = $status ?? "";
  }
}

class TagResourceRequest {
  public __string $resource_arn;
  public __mapOf__string $tags;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ?'tags' => __mapOf__string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TooManyRequestsException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class Transport {
  public __listOf__string $cidr_allow_list;
  public __integer $max_bitrate;
  public __integer $max_latency;
  public Protocol $protocol;
  public __string $remote_id;
  public __integer $smoothing_latency;
  public __string $stream_id;

  public function __construct(shape(
  ?'cidr_allow_list' => __listOf__string,
  ?'max_bitrate' => __integer,
  ?'max_latency' => __integer,
  ?'protocol' => Protocol,
  ?'remote_id' => __string,
  ?'smoothing_latency' => __integer,
  ?'stream_id' => __string,
  ) $s = shape()) {
    $this->cidr_allow_list = $cidr_allow_list ?? [];
    $this->max_bitrate = $max_bitrate ?? 0;
    $this->max_latency = $max_latency ?? 0;
    $this->protocol = $protocol ?? "";
    $this->remote_id = $remote_id ?? "";
    $this->smoothing_latency = $smoothing_latency ?? 0;
    $this->stream_id = $stream_id ?? "";
  }
}

class UntagResourceRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ?'tag_keys' => __listOf__string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
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

  public function __construct(shape(
  ?'algorithm' => Algorithm,
  ?'constant_initialization_vector' => __string,
  ?'device_id' => __string,
  ?'key_type' => KeyType,
  ?'region' => __string,
  ?'resource_id' => __string,
  ?'role_arn' => __string,
  ?'secret_arn' => __string,
  ?'url' => __string,
  ) $s = shape()) {
    $this->algorithm = $algorithm ?? "";
    $this->constant_initialization_vector = $constant_initialization_vector ?? "";
    $this->device_id = $device_id ?? "";
    $this->key_type = $key_type ?? "";
    $this->region = $region ?? "";
    $this->resource_id = $resource_id ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->secret_arn = $secret_arn ?? "";
    $this->url = $url ?? "";
  }
}

class UpdateFailoverConfig {
  public __integer $recovery_window;
  public State $state;

  public function __construct(shape(
  ?'recovery_window' => __integer,
  ?'state' => State,
  ) $s = shape()) {
    $this->recovery_window = $recovery_window ?? 0;
    $this->state = $state ?? "";
  }
}

class UpdateFlowEntitlementRequest {
  public __string $description;
  public UpdateEncryption $encryption;
  public __string $entitlement_arn;
  public __string $flow_arn;
  public __listOf__string $subscribers;

  public function __construct(shape(
  ?'description' => __string,
  ?'encryption' => UpdateEncryption,
  ?'entitlement_arn' => __string,
  ?'flow_arn' => __string,
  ?'subscribers' => __listOf__string,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->encryption = $encryption ?? null;
    $this->entitlement_arn = $entitlement_arn ?? "";
    $this->flow_arn = $flow_arn ?? "";
    $this->subscribers = $subscribers ?? [];
  }
}

class UpdateFlowEntitlementResponse {
  public Entitlement $entitlement;
  public __string $flow_arn;

  public function __construct(shape(
  ?'entitlement' => Entitlement,
  ?'flow_arn' => __string,
  ) $s = shape()) {
    $this->entitlement = $entitlement ?? null;
    $this->flow_arn = $flow_arn ?? "";
  }
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

  public function __construct(shape(
  ?'cidr_allow_list' => __listOf__string,
  ?'description' => __string,
  ?'destination' => __string,
  ?'encryption' => UpdateEncryption,
  ?'flow_arn' => __string,
  ?'max_latency' => __integer,
  ?'output_arn' => __string,
  ?'port' => __integer,
  ?'protocol' => Protocol,
  ?'remote_id' => __string,
  ?'smoothing_latency' => __integer,
  ?'stream_id' => __string,
  ?'vpc_interface_attachment' => VpcInterfaceAttachment,
  ) $s = shape()) {
    $this->cidr_allow_list = $cidr_allow_list ?? [];
    $this->description = $description ?? "";
    $this->destination = $destination ?? "";
    $this->encryption = $encryption ?? null;
    $this->flow_arn = $flow_arn ?? "";
    $this->max_latency = $max_latency ?? 0;
    $this->output_arn = $output_arn ?? "";
    $this->port = $port ?? 0;
    $this->protocol = $protocol ?? "";
    $this->remote_id = $remote_id ?? "";
    $this->smoothing_latency = $smoothing_latency ?? 0;
    $this->stream_id = $stream_id ?? "";
    $this->vpc_interface_attachment = $vpc_interface_attachment ?? null;
  }
}

class UpdateFlowOutputResponse {
  public __string $flow_arn;
  public Output $output;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'output' => Output,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->output = $output ?? null;
  }
}

class UpdateFlowRequest {
  public __string $flow_arn;
  public UpdateFailoverConfig $source_failover_config;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'source_failover_config' => UpdateFailoverConfig,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->source_failover_config = $source_failover_config ?? null;
  }
}

class UpdateFlowResponse {
  public Flow $flow;

  public function __construct(shape(
  ?'flow' => Flow,
  ) $s = shape()) {
    $this->flow = $flow ?? null;
  }
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

  public function __construct(shape(
  ?'decryption' => UpdateEncryption,
  ?'description' => __string,
  ?'entitlement_arn' => __string,
  ?'flow_arn' => __string,
  ?'ingest_port' => __integer,
  ?'max_bitrate' => __integer,
  ?'max_latency' => __integer,
  ?'protocol' => Protocol,
  ?'source_arn' => __string,
  ?'stream_id' => __string,
  ?'vpc_interface_name' => __string,
  ?'whitelist_cidr' => __string,
  ) $s = shape()) {
    $this->decryption = $decryption ?? null;
    $this->description = $description ?? "";
    $this->entitlement_arn = $entitlement_arn ?? "";
    $this->flow_arn = $flow_arn ?? "";
    $this->ingest_port = $ingest_port ?? 0;
    $this->max_bitrate = $max_bitrate ?? 0;
    $this->max_latency = $max_latency ?? 0;
    $this->protocol = $protocol ?? "";
    $this->source_arn = $source_arn ?? "";
    $this->stream_id = $stream_id ?? "";
    $this->vpc_interface_name = $vpc_interface_name ?? "";
    $this->whitelist_cidr = $whitelist_cidr ?? "";
  }
}

class UpdateFlowSourceResponse {
  public __string $flow_arn;
  public Source $source;

  public function __construct(shape(
  ?'flow_arn' => __string,
  ?'source' => Source,
  ) $s = shape()) {
    $this->flow_arn = $flow_arn ?? "";
    $this->source = $source ?? null;
  }
}

class VpcInterface {
  public __string $name;
  public __listOf__string $network_interface_ids;
  public __string $role_arn;
  public __listOf__string $security_group_ids;
  public __string $subnet_id;

  public function __construct(shape(
  ?'name' => __string,
  ?'network_interface_ids' => __listOf__string,
  ?'role_arn' => __string,
  ?'security_group_ids' => __listOf__string,
  ?'subnet_id' => __string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->network_interface_ids = $network_interface_ids ?? [];
    $this->role_arn = $role_arn ?? "";
    $this->security_group_ids = $security_group_ids ?? [];
    $this->subnet_id = $subnet_id ?? "";
  }
}

class VpcInterfaceAttachment {
  public __string $vpc_interface_name;

  public function __construct(shape(
  ?'vpc_interface_name' => __string,
  ) $s = shape()) {
    $this->vpc_interface_name = $vpc_interface_name ?? "";
  }
}

class VpcInterfaceRequest {
  public __string $name;
  public __string $role_arn;
  public __listOf__string $security_group_ids;
  public __string $subnet_id;

  public function __construct(shape(
  ?'name' => __string,
  ?'role_arn' => __string,
  ?'security_group_ids' => __listOf__string,
  ?'subnet_id' => __string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->security_group_ids = $security_group_ids ?? [];
    $this->subnet_id = $subnet_id ?? "";
  }
}

type __boolean = bool;

type __double = float;

type __integer = int;

type __listOfAddOutputRequest = vec<AddOutputRequest>;

type __listOfEntitlement = vec<Entitlement>;

type __listOfGrantEntitlementRequest = vec<GrantEntitlementRequest>;

type __listOfListedEntitlement = vec<ListedEntitlement>;

type __listOfListedFlow = vec<ListedFlow>;

type __listOfOutput = vec<Output>;

type __listOfSetSourceRequest = vec<SetSourceRequest>;

type __listOfSource = vec<Source>;

type __listOfVpcInterface = vec<VpcInterface>;

type __listOfVpcInterfaceRequest = vec<VpcInterfaceRequest>;

type __listOf__integer = vec<__integer>;

type __listOf__string = vec<__string>;

type __long = int;

type __mapOf__string = dict<__string, __string>;

type __string = string;

type __timestampIso8601 = int;

type __timestampUnix = int;


<?hh // strict
namespace slack\aws\kinesisvideo;

interface Kinesis Video {
  public function CreateSignalingChannel(CreateSignalingChannelInput): Awaitable<Errors\Result<CreateSignalingChannelOutput>>;
  public function CreateStream(CreateStreamInput): Awaitable<Errors\Result<CreateStreamOutput>>;
  public function DeleteSignalingChannel(DeleteSignalingChannelInput): Awaitable<Errors\Result<DeleteSignalingChannelOutput>>;
  public function DeleteStream(DeleteStreamInput): Awaitable<Errors\Result<DeleteStreamOutput>>;
  public function DescribeSignalingChannel(DescribeSignalingChannelInput): Awaitable<Errors\Result<DescribeSignalingChannelOutput>>;
  public function DescribeStream(DescribeStreamInput): Awaitable<Errors\Result<DescribeStreamOutput>>;
  public function GetDataEndpoint(GetDataEndpointInput): Awaitable<Errors\Result<GetDataEndpointOutput>>;
  public function GetSignalingChannelEndpoint(GetSignalingChannelEndpointInput): Awaitable<Errors\Result<GetSignalingChannelEndpointOutput>>;
  public function ListSignalingChannels(ListSignalingChannelsInput): Awaitable<Errors\Result<ListSignalingChannelsOutput>>;
  public function ListStreams(ListStreamsInput): Awaitable<Errors\Result<ListStreamsOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput): Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function ListTagsForStream(ListTagsForStreamInput): Awaitable<Errors\Result<ListTagsForStreamOutput>>;
  public function TagResource(TagResourceInput): Awaitable<Errors\Result<TagResourceOutput>>;
  public function TagStream(TagStreamInput): Awaitable<Errors\Result<TagStreamOutput>>;
  public function UntagResource(UntagResourceInput): Awaitable<Errors\Result<UntagResourceOutput>>;
  public function UntagStream(UntagStreamInput): Awaitable<Errors\Result<UntagStreamOutput>>;
  public function UpdateDataRetention(UpdateDataRetentionInput): Awaitable<Errors\Result<UpdateDataRetentionOutput>>;
  public function UpdateSignalingChannel(UpdateSignalingChannelInput): Awaitable<Errors\Result<UpdateSignalingChannelOutput>>;
  public function UpdateStream(UpdateStreamInput): Awaitable<Errors\Result<UpdateStreamOutput>>;
}

type APIName = string;

class AccessDeniedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class AccountChannelLimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class AccountStreamLimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ChannelInfo {
  public ResourceARN $channel_arn;
  public ChannelName $channel_name;
  public Status $channel_status;
  public ChannelType $channel_type;
  public Timestamp $creation_time;
  public SingleMasterConfiguration $single_master_configuration;
  public Version $version;

  public function __construct(shape(
  ?'channel_arn' => ResourceARN,
  ?'channel_name' => ChannelName,
  ?'channel_status' => Status,
  ?'channel_type' => ChannelType,
  ?'creation_time' => Timestamp,
  ?'single_master_configuration' => SingleMasterConfiguration,
  ?'version' => Version,
  ) $s = shape()) {
    $this->channel_arn = $channel_arn ?? "";
    $this->channel_name = $channel_name ?? "";
    $this->channel_status = $channel_status ?? "";
    $this->channel_type = $channel_type ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->single_master_configuration = $single_master_configuration ?? null;
    $this->version = $version ?? "";
  }
}

type ChannelInfoList = vec<ChannelInfo>;

type ChannelName = string;

class ChannelNameCondition {
  public ComparisonOperator $comparison_operator;
  public ChannelName $comparison_value;

  public function __construct(shape(
  ?'comparison_operator' => ComparisonOperator,
  ?'comparison_value' => ChannelName,
  ) $s = shape()) {
    $this->comparison_operator = $comparison_operator ?? "";
    $this->comparison_value = $comparison_value ?? "";
  }
}

type ChannelProtocol = string;

type ChannelRole = string;

type ChannelType = string;

class ClientLimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ComparisonOperator = string;

class CreateSignalingChannelInput {
  public ChannelName $channel_name;
  public ChannelType $channel_type;
  public SingleMasterConfiguration $single_master_configuration;
  public TagOnCreateList $tags;

  public function __construct(shape(
  ?'channel_name' => ChannelName,
  ?'channel_type' => ChannelType,
  ?'single_master_configuration' => SingleMasterConfiguration,
  ?'tags' => TagOnCreateList,
  ) $s = shape()) {
    $this->channel_name = $channel_name ?? "";
    $this->channel_type = $channel_type ?? "";
    $this->single_master_configuration = $single_master_configuration ?? null;
    $this->tags = $tags ?? [];
  }
}

class CreateSignalingChannelOutput {
  public ResourceARN $channel_arn;

  public function __construct(shape(
  ?'channel_arn' => ResourceARN,
  ) $s = shape()) {
    $this->channel_arn = $channel_arn ?? "";
  }
}

class CreateStreamInput {
  public DataRetentionInHours $data_retention_in_hours;
  public DeviceName $device_name;
  public KmsKeyId $kms_key_id;
  public MediaType $media_type;
  public StreamName $stream_name;
  public ResourceTags $tags;

  public function __construct(shape(
  ?'data_retention_in_hours' => DataRetentionInHours,
  ?'device_name' => DeviceName,
  ?'kms_key_id' => KmsKeyId,
  ?'media_type' => MediaType,
  ?'stream_name' => StreamName,
  ?'tags' => ResourceTags,
  ) $s = shape()) {
    $this->data_retention_in_hours = $data_retention_in_hours ?? 0;
    $this->device_name = $device_name ?? "";
    $this->kms_key_id = $kms_key_id ?? "";
    $this->media_type = $media_type ?? "";
    $this->stream_name = $stream_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateStreamOutput {
  public ResourceARN $stream_arn;

  public function __construct(shape(
  ?'stream_arn' => ResourceARN,
  ) $s = shape()) {
    $this->stream_arn = $stream_arn ?? "";
  }
}

type DataEndpoint = string;

type DataRetentionChangeInHours = int;

type DataRetentionInHours = int;

class DeleteSignalingChannelInput {
  public ResourceARN $channel_arn;
  public Version $current_version;

  public function __construct(shape(
  ?'channel_arn' => ResourceARN,
  ?'current_version' => Version,
  ) $s = shape()) {
    $this->channel_arn = $channel_arn ?? "";
    $this->current_version = $current_version ?? "";
  }
}

class DeleteSignalingChannelOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteStreamInput {
  public Version $current_version;
  public ResourceARN $stream_arn;

  public function __construct(shape(
  ?'current_version' => Version,
  ?'stream_arn' => ResourceARN,
  ) $s = shape()) {
    $this->current_version = $current_version ?? "";
    $this->stream_arn = $stream_arn ?? "";
  }
}

class DeleteStreamOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeSignalingChannelInput {
  public ResourceARN $channel_arn;
  public ChannelName $channel_name;

  public function __construct(shape(
  ?'channel_arn' => ResourceARN,
  ?'channel_name' => ChannelName,
  ) $s = shape()) {
    $this->channel_arn = $channel_arn ?? "";
    $this->channel_name = $channel_name ?? "";
  }
}

class DescribeSignalingChannelOutput {
  public ChannelInfo $channel_info;

  public function __construct(shape(
  ?'channel_info' => ChannelInfo,
  ) $s = shape()) {
    $this->channel_info = $channel_info ?? null;
  }
}

class DescribeStreamInput {
  public ResourceARN $stream_arn;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'stream_arn' => ResourceARN,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->stream_arn = $stream_arn ?? "";
    $this->stream_name = $stream_name ?? "";
  }
}

class DescribeStreamOutput {
  public StreamInfo $stream_info;

  public function __construct(shape(
  ?'stream_info' => StreamInfo,
  ) $s = shape()) {
    $this->stream_info = $stream_info ?? null;
  }
}

type DeviceName = string;

class DeviceStreamLimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ErrorMessage = string;

class GetDataEndpointInput {
  public APIName $api_name;
  public ResourceARN $stream_arn;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'api_name' => APIName,
  ?'stream_arn' => ResourceARN,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->api_name = $api_name ?? "";
    $this->stream_arn = $stream_arn ?? "";
    $this->stream_name = $stream_name ?? "";
  }
}

class GetDataEndpointOutput {
  public DataEndpoint $data_endpoint;

  public function __construct(shape(
  ?'data_endpoint' => DataEndpoint,
  ) $s = shape()) {
    $this->data_endpoint = $data_endpoint ?? "";
  }
}

class GetSignalingChannelEndpointInput {
  public ResourceARN $channel_arn;
  public SingleMasterChannelEndpointConfiguration $single_master_channel_endpoint_configuration;

  public function __construct(shape(
  ?'channel_arn' => ResourceARN,
  ?'single_master_channel_endpoint_configuration' => SingleMasterChannelEndpointConfiguration,
  ) $s = shape()) {
    $this->channel_arn = $channel_arn ?? "";
    $this->single_master_channel_endpoint_configuration = $single_master_channel_endpoint_configuration ?? null;
  }
}

class GetSignalingChannelEndpointOutput {
  public ResourceEndpointList $resource_endpoint_list;

  public function __construct(shape(
  ?'resource_endpoint_list' => ResourceEndpointList,
  ) $s = shape()) {
    $this->resource_endpoint_list = $resource_endpoint_list ?? [];
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

class InvalidDeviceException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidResourceFormatException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type KmsKeyId = string;

type ListOfProtocols = vec<ChannelProtocol>;

class ListSignalingChannelsInput {
  public ChannelNameCondition $channel_name_condition;
  public ListStreamsInputLimit $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'channel_name_condition' => ChannelNameCondition,
  ?'max_results' => ListStreamsInputLimit,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->channel_name_condition = $channel_name_condition ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListSignalingChannelsOutput {
  public ChannelInfoList $channel_info_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'channel_info_list' => ChannelInfoList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->channel_info_list = $channel_info_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListStreamsInput {
  public ListStreamsInputLimit $max_results;
  public NextToken $next_token;
  public StreamNameCondition $stream_name_condition;

  public function __construct(shape(
  ?'max_results' => ListStreamsInputLimit,
  ?'next_token' => NextToken,
  ?'stream_name_condition' => StreamNameCondition,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->stream_name_condition = $stream_name_condition ?? null;
  }
}

type ListStreamsInputLimit = int;

class ListStreamsOutput {
  public NextToken $next_token;
  public StreamInfoList $stream_info_list;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'stream_info_list' => StreamInfoList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->stream_info_list = $stream_info_list ?? [];
  }
}

class ListTagsForResourceInput {
  public NextToken $next_token;
  public ResourceARN $resource_arn;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'resource_arn' => ResourceARN,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceOutput {
  public NextToken $next_token;
  public ResourceTags $tags;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tags' => ResourceTags,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? [];
  }
}

class ListTagsForStreamInput {
  public NextToken $next_token;
  public ResourceARN $stream_arn;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'stream_arn' => ResourceARN,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->stream_arn = $stream_arn ?? "";
    $this->stream_name = $stream_name ?? "";
  }
}

class ListTagsForStreamOutput {
  public NextToken $next_token;
  public ResourceTags $tags;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tags' => ResourceTags,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? [];
  }
}

type MediaType = string;

type MessageTtlSeconds = int;

type NextToken = string;

class NotAuthorizedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ResourceARN = string;

type ResourceEndpoint = string;

type ResourceEndpointList = vec<ResourceEndpointListItem>;

class ResourceEndpointListItem {
  public ChannelProtocol $protocol;
  public ResourceEndpoint $resource_endpoint;

  public function __construct(shape(
  ?'protocol' => ChannelProtocol,
  ?'resource_endpoint' => ResourceEndpoint,
  ) $s = shape()) {
    $this->protocol = $protocol ?? "";
    $this->resource_endpoint = $resource_endpoint ?? "";
  }
}

class ResourceInUseException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ResourceTags = dict<TagKey, TagValue>;

class SingleMasterChannelEndpointConfiguration {
  public ListOfProtocols $protocols;
  public ChannelRole $role;

  public function __construct(shape(
  ?'protocols' => ListOfProtocols,
  ?'role' => ChannelRole,
  ) $s = shape()) {
    $this->protocols = $protocols ?? [];
    $this->role = $role ?? "";
  }
}

class SingleMasterConfiguration {
  public MessageTtlSeconds $message_ttl_seconds;

  public function __construct(shape(
  ?'message_ttl_seconds' => MessageTtlSeconds,
  ) $s = shape()) {
    $this->message_ttl_seconds = $message_ttl_seconds ?? 0;
  }
}

type Status = string;

class StreamInfo {
  public Timestamp $creation_time;
  public DataRetentionInHours $data_retention_in_hours;
  public DeviceName $device_name;
  public KmsKeyId $kms_key_id;
  public MediaType $media_type;
  public Status $status;
  public ResourceARN $stream_arn;
  public StreamName $stream_name;
  public Version $version;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'data_retention_in_hours' => DataRetentionInHours,
  ?'device_name' => DeviceName,
  ?'kms_key_id' => KmsKeyId,
  ?'media_type' => MediaType,
  ?'status' => Status,
  ?'stream_arn' => ResourceARN,
  ?'stream_name' => StreamName,
  ?'version' => Version,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->data_retention_in_hours = $data_retention_in_hours ?? 0;
    $this->device_name = $device_name ?? "";
    $this->kms_key_id = $kms_key_id ?? "";
    $this->media_type = $media_type ?? "";
    $this->status = $status ?? "";
    $this->stream_arn = $stream_arn ?? "";
    $this->stream_name = $stream_name ?? "";
    $this->version = $version ?? "";
  }
}

type StreamInfoList = vec<StreamInfo>;

type StreamName = string;

class StreamNameCondition {
  public ComparisonOperator $comparison_operator;
  public StreamName $comparison_value;

  public function __construct(shape(
  ?'comparison_operator' => ComparisonOperator,
  ?'comparison_value' => StreamName,
  ) $s = shape()) {
    $this->comparison_operator = $comparison_operator ?? "";
    $this->comparison_value = $comparison_value ?? "";
  }
}

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

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

type TagOnCreateList = vec<Tag>;

class TagResourceInput {
  public ResourceARN $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => ResourceARN,
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

class TagStreamInput {
  public ResourceARN $stream_arn;
  public StreamName $stream_name;
  public ResourceTags $tags;

  public function __construct(shape(
  ?'stream_arn' => ResourceARN,
  ?'stream_name' => StreamName,
  ?'tags' => ResourceTags,
  ) $s = shape()) {
    $this->stream_arn = $stream_arn ?? "";
    $this->stream_name = $stream_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagStreamOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class TagsPerResourceExceededLimitException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Timestamp = int;

class UntagResourceInput {
  public ResourceARN $resource_arn;
  public TagKeyList $tag_key_list;

  public function __construct(shape(
  ?'resource_arn' => ResourceARN,
  ?'tag_key_list' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_key_list = $tag_key_list ?? [];
  }
}

class UntagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UntagStreamInput {
  public ResourceARN $stream_arn;
  public StreamName $stream_name;
  public TagKeyList $tag_key_list;

  public function __construct(shape(
  ?'stream_arn' => ResourceARN,
  ?'stream_name' => StreamName,
  ?'tag_key_list' => TagKeyList,
  ) $s = shape()) {
    $this->stream_arn = $stream_arn ?? "";
    $this->stream_name = $stream_name ?? "";
    $this->tag_key_list = $tag_key_list ?? [];
  }
}

class UntagStreamOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDataRetentionInput {
  public Version $current_version;
  public DataRetentionChangeInHours $data_retention_change_in_hours;
  public UpdateDataRetentionOperation $operation;
  public ResourceARN $stream_arn;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'current_version' => Version,
  ?'data_retention_change_in_hours' => DataRetentionChangeInHours,
  ?'operation' => UpdateDataRetentionOperation,
  ?'stream_arn' => ResourceARN,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->current_version = $current_version ?? "";
    $this->data_retention_change_in_hours = $data_retention_change_in_hours ?? 0;
    $this->operation = $operation ?? "";
    $this->stream_arn = $stream_arn ?? "";
    $this->stream_name = $stream_name ?? "";
  }
}

type UpdateDataRetentionOperation = string;

class UpdateDataRetentionOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateSignalingChannelInput {
  public ResourceARN $channel_arn;
  public Version $current_version;
  public SingleMasterConfiguration $single_master_configuration;

  public function __construct(shape(
  ?'channel_arn' => ResourceARN,
  ?'current_version' => Version,
  ?'single_master_configuration' => SingleMasterConfiguration,
  ) $s = shape()) {
    $this->channel_arn = $channel_arn ?? "";
    $this->current_version = $current_version ?? "";
    $this->single_master_configuration = $single_master_configuration ?? null;
  }
}

class UpdateSignalingChannelOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateStreamInput {
  public Version $current_version;
  public DeviceName $device_name;
  public MediaType $media_type;
  public ResourceARN $stream_arn;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'current_version' => Version,
  ?'device_name' => DeviceName,
  ?'media_type' => MediaType,
  ?'stream_arn' => ResourceARN,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->current_version = $current_version ?? "";
    $this->device_name = $device_name ?? "";
    $this->media_type = $media_type ?? "";
    $this->stream_arn = $stream_arn ?? "";
    $this->stream_name = $stream_name ?? "";
  }
}

class UpdateStreamOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Version = string;

class VersionMismatchException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}


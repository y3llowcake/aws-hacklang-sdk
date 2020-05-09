<?hh // strict
namespace slack\aws\kinesisvideo;

interface Kinesis Video {
  public function CreateSignalingChannel(CreateSignalingChannelInput) Awaitable<Errors\Result<CreateSignalingChannelOutput>>;
  public function CreateStream(CreateStreamInput) Awaitable<Errors\Result<CreateStreamOutput>>;
  public function DeleteSignalingChannel(DeleteSignalingChannelInput) Awaitable<Errors\Result<DeleteSignalingChannelOutput>>;
  public function DeleteStream(DeleteStreamInput) Awaitable<Errors\Result<DeleteStreamOutput>>;
  public function DescribeSignalingChannel(DescribeSignalingChannelInput) Awaitable<Errors\Result<DescribeSignalingChannelOutput>>;
  public function DescribeStream(DescribeStreamInput) Awaitable<Errors\Result<DescribeStreamOutput>>;
  public function GetDataEndpoint(GetDataEndpointInput) Awaitable<Errors\Result<GetDataEndpointOutput>>;
  public function GetSignalingChannelEndpoint(GetSignalingChannelEndpointInput) Awaitable<Errors\Result<GetSignalingChannelEndpointOutput>>;
  public function ListSignalingChannels(ListSignalingChannelsInput) Awaitable<Errors\Result<ListSignalingChannelsOutput>>;
  public function ListStreams(ListStreamsInput) Awaitable<Errors\Result<ListStreamsOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput) Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function ListTagsForStream(ListTagsForStreamInput) Awaitable<Errors\Result<ListTagsForStreamOutput>>;
  public function TagResource(TagResourceInput) Awaitable<Errors\Result<TagResourceOutput>>;
  public function TagStream(TagStreamInput) Awaitable<Errors\Result<TagStreamOutput>>;
  public function UntagResource(UntagResourceInput) Awaitable<Errors\Result<UntagResourceOutput>>;
  public function UntagStream(UntagStreamInput) Awaitable<Errors\Result<UntagStreamOutput>>;
  public function UpdateDataRetention(UpdateDataRetentionInput) Awaitable<Errors\Result<UpdateDataRetentionOutput>>;
  public function UpdateSignalingChannel(UpdateSignalingChannelInput) Awaitable<Errors\Result<UpdateSignalingChannelOutput>>;
  public function UpdateStream(UpdateStreamInput) Awaitable<Errors\Result<UpdateStreamOutput>>;
}

class APIName {
}

class AccessDeniedException {
  public ErrorMessage $message;
}

class AccountChannelLimitExceededException {
  public ErrorMessage $message;
}

class AccountStreamLimitExceededException {
  public ErrorMessage $message;
}

class ChannelInfo {
  public ResourceARN $channel_arn;
  public ChannelName $channel_name;
  public Status $channel_status;
  public ChannelType $channel_type;
  public Timestamp $creation_time;
  public SingleMasterConfiguration $single_master_configuration;
  public Version $version;
}

class ChannelInfoList {
}

class ChannelName {
}

class ChannelNameCondition {
  public ComparisonOperator $comparison_operator;
  public ChannelName $comparison_value;
}

class ChannelProtocol {
}

class ChannelRole {
}

class ChannelType {
}

class ClientLimitExceededException {
  public ErrorMessage $message;
}

class ComparisonOperator {
}

class CreateSignalingChannelInput {
  public ChannelName $channel_name;
  public ChannelType $channel_type;
  public SingleMasterConfiguration $single_master_configuration;
  public TagOnCreateList $tags;
}

class CreateSignalingChannelOutput {
  public ResourceARN $channel_arn;
}

class CreateStreamInput {
  public DataRetentionInHours $data_retention_in_hours;
  public DeviceName $device_name;
  public KmsKeyId $kms_key_id;
  public MediaType $media_type;
  public StreamName $stream_name;
  public ResourceTags $tags;
}

class CreateStreamOutput {
  public ResourceARN $stream_arn;
}

class DataEndpoint {
}

class DataRetentionChangeInHours {
}

class DataRetentionInHours {
}

class DeleteSignalingChannelInput {
  public ResourceARN $channel_arn;
  public Version $current_version;
}

class DeleteSignalingChannelOutput {
}

class DeleteStreamInput {
  public Version $current_version;
  public ResourceARN $stream_arn;
}

class DeleteStreamOutput {
}

class DescribeSignalingChannelInput {
  public ResourceARN $channel_arn;
  public ChannelName $channel_name;
}

class DescribeSignalingChannelOutput {
  public ChannelInfo $channel_info;
}

class DescribeStreamInput {
  public ResourceARN $stream_arn;
  public StreamName $stream_name;
}

class DescribeStreamOutput {
  public StreamInfo $stream_info;
}

class DeviceName {
}

class DeviceStreamLimitExceededException {
  public ErrorMessage $message;
}

class ErrorMessage {
}

class GetDataEndpointInput {
  public APIName $api_name;
  public ResourceARN $stream_arn;
  public StreamName $stream_name;
}

class GetDataEndpointOutput {
  public DataEndpoint $data_endpoint;
}

class GetSignalingChannelEndpointInput {
  public ResourceARN $channel_arn;
  public SingleMasterChannelEndpointConfiguration $single_master_channel_endpoint_configuration;
}

class GetSignalingChannelEndpointOutput {
  public ResourceEndpointList $resource_endpoint_list;
}

class InvalidArgumentException {
  public ErrorMessage $message;
}

class InvalidDeviceException {
  public ErrorMessage $message;
}

class InvalidResourceFormatException {
  public ErrorMessage $message;
}

class KmsKeyId {
}

class ListOfProtocols {
}

class ListSignalingChannelsInput {
  public ChannelNameCondition $channel_name_condition;
  public ListStreamsInputLimit $max_results;
  public NextToken $next_token;
}

class ListSignalingChannelsOutput {
  public ChannelInfoList $channel_info_list;
  public NextToken $next_token;
}

class ListStreamsInput {
  public ListStreamsInputLimit $max_results;
  public NextToken $next_token;
  public StreamNameCondition $stream_name_condition;
}

class ListStreamsInputLimit {
}

class ListStreamsOutput {
  public NextToken $next_token;
  public StreamInfoList $stream_info_list;
}

class ListTagsForResourceInput {
  public NextToken $next_token;
  public ResourceARN $resource_arn;
}

class ListTagsForResourceOutput {
  public NextToken $next_token;
  public ResourceTags $tags;
}

class ListTagsForStreamInput {
  public NextToken $next_token;
  public ResourceARN $stream_arn;
  public StreamName $stream_name;
}

class ListTagsForStreamOutput {
  public NextToken $next_token;
  public ResourceTags $tags;
}

class MediaType {
}

class MessageTtlSeconds {
}

class NextToken {
}

class NotAuthorizedException {
  public ErrorMessage $message;
}

class ResourceARN {
}

class ResourceEndpoint {
}

class ResourceEndpointList {
}

class ResourceEndpointListItem {
  public ChannelProtocol $protocol;
  public ResourceEndpoint $resource_endpoint;
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class ResourceTags {
}

class SingleMasterChannelEndpointConfiguration {
  public ListOfProtocols $protocols;
  public ChannelRole $role;
}

class SingleMasterConfiguration {
  public MessageTtlSeconds $message_ttl_seconds;
}

class Status {
}

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
}

class StreamInfoList {
}

class StreamName {
}

class StreamNameCondition {
  public ComparisonOperator $comparison_operator;
  public StreamName $comparison_value;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagOnCreateList {
}

class TagResourceInput {
  public ResourceARN $resource_arn;
  public TagList $tags;
}

class TagResourceOutput {
}

class TagStreamInput {
  public ResourceARN $stream_arn;
  public StreamName $stream_name;
  public ResourceTags $tags;
}

class TagStreamOutput {
}

class TagValue {
}

class TagsPerResourceExceededLimitException {
  public ErrorMessage $message;
}

class Timestamp {
}

class UntagResourceInput {
  public ResourceARN $resource_arn;
  public TagKeyList $tag_key_list;
}

class UntagResourceOutput {
}

class UntagStreamInput {
  public ResourceARN $stream_arn;
  public StreamName $stream_name;
  public TagKeyList $tag_key_list;
}

class UntagStreamOutput {
}

class UpdateDataRetentionInput {
  public Version $current_version;
  public DataRetentionChangeInHours $data_retention_change_in_hours;
  public UpdateDataRetentionOperation $operation;
  public ResourceARN $stream_arn;
  public StreamName $stream_name;
}

class UpdateDataRetentionOperation {
}

class UpdateDataRetentionOutput {
}

class UpdateSignalingChannelInput {
  public ResourceARN $channel_arn;
  public Version $current_version;
  public SingleMasterConfiguration $single_master_configuration;
}

class UpdateSignalingChannelOutput {
}

class UpdateStreamInput {
  public Version $current_version;
  public DeviceName $device_name;
  public MediaType $media_type;
  public ResourceARN $stream_arn;
  public StreamName $stream_name;
}

class UpdateStreamOutput {
}

class Version {
}

class VersionMismatchException {
  public ErrorMessage $message;
}


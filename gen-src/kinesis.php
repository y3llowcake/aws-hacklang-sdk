<?hh // strict
namespace slack\aws\kinesis;

interface Kinesis {
  public function AddTagsToStream(AddTagsToStreamInput): Awaitable<Errors\Error>;
  public function CreateStream(CreateStreamInput): Awaitable<Errors\Error>;
  public function DecreaseStreamRetentionPeriod(DecreaseStreamRetentionPeriodInput): Awaitable<Errors\Error>;
  public function DeleteStream(DeleteStreamInput): Awaitable<Errors\Error>;
  public function DeregisterStreamConsumer(DeregisterStreamConsumerInput): Awaitable<Errors\Error>;
  public function DescribeLimits(DescribeLimitsInput): Awaitable<Errors\Result<DescribeLimitsOutput>>;
  public function DescribeStream(DescribeStreamInput): Awaitable<Errors\Result<DescribeStreamOutput>>;
  public function DescribeStreamConsumer(DescribeStreamConsumerInput): Awaitable<Errors\Result<DescribeStreamConsumerOutput>>;
  public function DescribeStreamSummary(DescribeStreamSummaryInput): Awaitable<Errors\Result<DescribeStreamSummaryOutput>>;
  public function DisableEnhancedMonitoring(DisableEnhancedMonitoringInput): Awaitable<Errors\Result<EnhancedMonitoringOutput>>;
  public function EnableEnhancedMonitoring(EnableEnhancedMonitoringInput): Awaitable<Errors\Result<EnhancedMonitoringOutput>>;
  public function GetRecords(GetRecordsInput): Awaitable<Errors\Result<GetRecordsOutput>>;
  public function GetShardIterator(GetShardIteratorInput): Awaitable<Errors\Result<GetShardIteratorOutput>>;
  public function IncreaseStreamRetentionPeriod(IncreaseStreamRetentionPeriodInput): Awaitable<Errors\Error>;
  public function ListShards(ListShardsInput): Awaitable<Errors\Result<ListShardsOutput>>;
  public function ListStreamConsumers(ListStreamConsumersInput): Awaitable<Errors\Result<ListStreamConsumersOutput>>;
  public function ListStreams(ListStreamsInput): Awaitable<Errors\Result<ListStreamsOutput>>;
  public function ListTagsForStream(ListTagsForStreamInput): Awaitable<Errors\Result<ListTagsForStreamOutput>>;
  public function MergeShards(MergeShardsInput): Awaitable<Errors\Error>;
  public function PutRecord(PutRecordInput): Awaitable<Errors\Result<PutRecordOutput>>;
  public function PutRecords(PutRecordsInput): Awaitable<Errors\Result<PutRecordsOutput>>;
  public function RegisterStreamConsumer(RegisterStreamConsumerInput): Awaitable<Errors\Result<RegisterStreamConsumerOutput>>;
  public function RemoveTagsFromStream(RemoveTagsFromStreamInput): Awaitable<Errors\Error>;
  public function SplitShard(SplitShardInput): Awaitable<Errors\Error>;
  public function StartStreamEncryption(StartStreamEncryptionInput): Awaitable<Errors\Error>;
  public function StopStreamEncryption(StopStreamEncryptionInput): Awaitable<Errors\Error>;
  public function SubscribeToShard(SubscribeToShardInput): Awaitable<Errors\Result<SubscribeToShardOutput>>;
  public function UpdateShardCount(UpdateShardCountInput): Awaitable<Errors\Result<UpdateShardCountOutput>>;
}

class AddTagsToStreamInput {
  public StreamName $stream_name;
  public TagMap $tags;
}

class BooleanObject {
}

class Consumer {
  public ConsumerARN $consumer_arn;
  public Timestamp $consumer_creation_timestamp;
  public ConsumerName $consumer_name;
  public ConsumerStatus $consumer_status;
}

class ConsumerARN {
}

class ConsumerCountObject {
}

class ConsumerDescription {
  public ConsumerARN $consumer_arn;
  public Timestamp $consumer_creation_timestamp;
  public ConsumerName $consumer_name;
  public ConsumerStatus $consumer_status;
  public StreamARN $stream_arn;
}

class ConsumerList {
}

class ConsumerName {
}

class ConsumerStatus {
}

class CreateStreamInput {
  public PositiveIntegerObject $shard_count;
  public StreamName $stream_name;
}

class Data {
}

class DecreaseStreamRetentionPeriodInput {
  public RetentionPeriodHours $retention_period_hours;
  public StreamName $stream_name;
}

class DeleteStreamInput {
  public BooleanObject $enforce_consumer_deletion;
  public StreamName $stream_name;
}

class DeregisterStreamConsumerInput {
  public ConsumerARN $consumer_arn;
  public ConsumerName $consumer_name;
  public StreamARN $stream_arn;
}

class DescribeLimitsInput {
}

class DescribeLimitsOutput {
  public ShardCountObject $open_shard_count;
  public ShardCountObject $shard_limit;
}

class DescribeStreamConsumerInput {
  public ConsumerARN $consumer_arn;
  public ConsumerName $consumer_name;
  public StreamARN $stream_arn;
}

class DescribeStreamConsumerOutput {
  public ConsumerDescription $consumer_description;
}

class DescribeStreamInput {
  public ShardId $exclusive_start_shard_id;
  public DescribeStreamInputLimit $limit;
  public StreamName $stream_name;
}

class DescribeStreamInputLimit {
}

class DescribeStreamOutput {
  public StreamDescription $stream_description;
}

class DescribeStreamSummaryInput {
  public StreamName $stream_name;
}

class DescribeStreamSummaryOutput {
  public StreamDescriptionSummary $stream_description_summary;
}

class DisableEnhancedMonitoringInput {
  public MetricsNameList $shard_level_metrics;
  public StreamName $stream_name;
}

class EnableEnhancedMonitoringInput {
  public MetricsNameList $shard_level_metrics;
  public StreamName $stream_name;
}

class EncryptionType {
}

class EnhancedMetrics {
  public MetricsNameList $shard_level_metrics;
}

class EnhancedMonitoringList {
}

class EnhancedMonitoringOutput {
  public MetricsNameList $current_shard_level_metrics;
  public MetricsNameList $desired_shard_level_metrics;
  public StreamName $stream_name;
}

class ErrorCode {
}

class ErrorMessage {
}

class ExpiredIteratorException {
  public ErrorMessage $message;
}

class ExpiredNextTokenException {
  public ErrorMessage $message;
}

class GetRecordsInput {
  public GetRecordsInputLimit $limit;
  public ShardIterator $shard_iterator;
}

class GetRecordsInputLimit {
}

class GetRecordsOutput {
  public MillisBehindLatest $millis_behind_latest;
  public ShardIterator $next_shard_iterator;
  public RecordList $records;
}

class GetShardIteratorInput {
  public ShardId $shard_id;
  public ShardIteratorType $shard_iterator_type;
  public SequenceNumber $starting_sequence_number;
  public StreamName $stream_name;
  public Timestamp $timestamp;
}

class GetShardIteratorOutput {
  public ShardIterator $shard_iterator;
}

class HashKey {
}

class HashKeyRange {
  public HashKey $ending_hash_key;
  public HashKey $starting_hash_key;
}

class IncreaseStreamRetentionPeriodInput {
  public RetentionPeriodHours $retention_period_hours;
  public StreamName $stream_name;
}

class InternalFailureException {
  public ErrorMessage $message;
}

class InvalidArgumentException {
  public ErrorMessage $message;
}

class KMSAccessDeniedException {
  public ErrorMessage $message;
}

class KMSDisabledException {
  public ErrorMessage $message;
}

class KMSInvalidStateException {
  public ErrorMessage $message;
}

class KMSNotFoundException {
  public ErrorMessage $message;
}

class KMSOptInRequired {
  public ErrorMessage $message;
}

class KMSThrottlingException {
  public ErrorMessage $message;
}

class KeyId {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListShardsInput {
  public ShardId $exclusive_start_shard_id;
  public ListShardsInputLimit $max_results;
  public NextToken $next_token;
  public Timestamp $stream_creation_timestamp;
  public StreamName $stream_name;
}

class ListShardsInputLimit {
}

class ListShardsOutput {
  public NextToken $next_token;
  public ShardList $shards;
}

class ListStreamConsumersInput {
  public ListStreamConsumersInputLimit $max_results;
  public NextToken $next_token;
  public StreamARN $stream_arn;
  public Timestamp $stream_creation_timestamp;
}

class ListStreamConsumersInputLimit {
}

class ListStreamConsumersOutput {
  public ConsumerList $consumers;
  public NextToken $next_token;
}

class ListStreamsInput {
  public StreamName $exclusive_start_stream_name;
  public ListStreamsInputLimit $limit;
}

class ListStreamsInputLimit {
}

class ListStreamsOutput {
  public BooleanObject $has_more_streams;
  public StreamNameList $stream_names;
}

class ListTagsForStreamInput {
  public TagKey $exclusive_start_tag_key;
  public ListTagsForStreamInputLimit $limit;
  public StreamName $stream_name;
}

class ListTagsForStreamInputLimit {
}

class ListTagsForStreamOutput {
  public BooleanObject $has_more_tags;
  public TagList $tags;
}

class MergeShardsInput {
  public ShardId $adjacent_shard_to_merge;
  public ShardId $shard_to_merge;
  public StreamName $stream_name;
}

class MetricsName {
}

class MetricsNameList {
}

class MillisBehindLatest {
}

class NextToken {
}

class PartitionKey {
}

class PositiveIntegerObject {
}

class ProvisionedThroughputExceededException {
  public ErrorMessage $message;
}

class PutRecordInput {
  public Data $data;
  public HashKey $explicit_hash_key;
  public PartitionKey $partition_key;
  public SequenceNumber $sequence_number_for_ordering;
  public StreamName $stream_name;
}

class PutRecordOutput {
  public EncryptionType $encryption_type;
  public SequenceNumber $sequence_number;
  public ShardId $shard_id;
}

class PutRecordsInput {
  public PutRecordsRequestEntryList $records;
  public StreamName $stream_name;
}

class PutRecordsOutput {
  public EncryptionType $encryption_type;
  public PositiveIntegerObject $failed_record_count;
  public PutRecordsResultEntryList $records;
}

class PutRecordsRequestEntry {
  public Data $data;
  public HashKey $explicit_hash_key;
  public PartitionKey $partition_key;
}

class PutRecordsRequestEntryList {
}

class PutRecordsResultEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public SequenceNumber $sequence_number;
  public ShardId $shard_id;
}

class PutRecordsResultEntryList {
}

class Record {
  public Timestamp $approximate_arrival_timestamp;
  public Data $data;
  public EncryptionType $encryption_type;
  public PartitionKey $partition_key;
  public SequenceNumber $sequence_number;
}

class RecordList {
}

class RegisterStreamConsumerInput {
  public ConsumerName $consumer_name;
  public StreamARN $stream_arn;
}

class RegisterStreamConsumerOutput {
  public Consumer $consumer;
}

class RemoveTagsFromStreamInput {
  public StreamName $stream_name;
  public TagKeyList $tag_keys;
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class RetentionPeriodHours {
}

class ScalingType {
}

class SequenceNumber {
}

class SequenceNumberRange {
  public SequenceNumber $ending_sequence_number;
  public SequenceNumber $starting_sequence_number;
}

class Shard {
  public ShardId $adjacent_parent_shard_id;
  public HashKeyRange $hash_key_range;
  public ShardId $parent_shard_id;
  public SequenceNumberRange $sequence_number_range;
  public ShardId $shard_id;
}

class ShardCountObject {
}

class ShardId {
}

class ShardIterator {
}

class ShardIteratorType {
}

class ShardList {
}

class SplitShardInput {
  public HashKey $new_starting_hash_key;
  public ShardId $shard_to_split;
  public StreamName $stream_name;
}

class StartStreamEncryptionInput {
  public EncryptionType $encryption_type;
  public KeyId $key_id;
  public StreamName $stream_name;
}

class StartingPosition {
  public SequenceNumber $sequence_number;
  public Timestamp $timestamp;
  public ShardIteratorType $type;
}

class StopStreamEncryptionInput {
  public EncryptionType $encryption_type;
  public KeyId $key_id;
  public StreamName $stream_name;
}

class StreamARN {
}

class StreamDescription {
  public EncryptionType $encryption_type;
  public EnhancedMonitoringList $enhanced_monitoring;
  public BooleanObject $has_more_shards;
  public KeyId $key_id;
  public RetentionPeriodHours $retention_period_hours;
  public ShardList $shards;
  public StreamARN $stream_arn;
  public Timestamp $stream_creation_timestamp;
  public StreamName $stream_name;
  public StreamStatus $stream_status;
}

class StreamDescriptionSummary {
  public ConsumerCountObject $consumer_count;
  public EncryptionType $encryption_type;
  public EnhancedMonitoringList $enhanced_monitoring;
  public KeyId $key_id;
  public ShardCountObject $open_shard_count;
  public PositiveIntegerObject $retention_period_hours;
  public StreamARN $stream_arn;
  public Timestamp $stream_creation_timestamp;
  public StreamName $stream_name;
  public StreamStatus $stream_status;
}

class StreamName {
}

class StreamNameList {
}

class StreamStatus {
}

class SubscribeToShardEvent {
  public SequenceNumber $continuation_sequence_number;
  public MillisBehindLatest $millis_behind_latest;
  public RecordList $records;
}

class SubscribeToShardEventStream {
  public InternalFailureException $internal_failure_exception;
  public KMSAccessDeniedException $kms_access_denied_exception;
  public KMSDisabledException $kms_disabled_exception;
  public KMSInvalidStateException $kms_invalid_state_exception;
  public KMSNotFoundException $kms_not_found_exception;
  public KMSOptInRequired $kms_opt_in_required;
  public KMSThrottlingException $kms_throttling_exception;
  public ResourceInUseException $resource_in_use_exception;
  public ResourceNotFoundException $resource_not_found_exception;
  public SubscribeToShardEvent $subscribe_to_shard_event;
}

class SubscribeToShardInput {
  public ConsumerARN $consumer_arn;
  public ShardId $shard_id;
  public StartingPosition $starting_position;
}

class SubscribeToShardOutput {
  public SubscribeToShardEventStream $event_stream;
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

class TagMap {
}

class TagValue {
}

class Timestamp {
}

class UpdateShardCountInput {
  public ScalingType $scaling_type;
  public StreamName $stream_name;
  public PositiveIntegerObject $target_shard_count;
}

class UpdateShardCountOutput {
  public PositiveIntegerObject $current_shard_count;
  public StreamName $stream_name;
  public PositiveIntegerObject $target_shard_count;
}


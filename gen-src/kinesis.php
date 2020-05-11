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

  public function __construct(shape(
  ?'stream_name' => StreamName,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->stream_name = $stream_name ?? "";
    $this->tags = $tags ?? ;
  }
}

type BooleanObject = bool;

class Consumer {
  public ConsumerARN $consumer_arn;
  public Timestamp $consumer_creation_timestamp;
  public ConsumerName $consumer_name;
  public ConsumerStatus $consumer_status;

  public function __construct(shape(
  ?'consumer_arn' => ConsumerARN,
  ?'consumer_creation_timestamp' => Timestamp,
  ?'consumer_name' => ConsumerName,
  ?'consumer_status' => ConsumerStatus,
  ) $s = shape()) {
    $this->consumer_arn = $consumer_arn ?? "";
    $this->consumer_creation_timestamp = $consumer_creation_timestamp ?? ;
    $this->consumer_name = $consumer_name ?? "";
    $this->consumer_status = $consumer_status ?? "";
  }
}

type ConsumerARN = string;

type ConsumerCountObject = int;

class ConsumerDescription {
  public ConsumerARN $consumer_arn;
  public Timestamp $consumer_creation_timestamp;
  public ConsumerName $consumer_name;
  public ConsumerStatus $consumer_status;
  public StreamARN $stream_arn;

  public function __construct(shape(
  ?'consumer_arn' => ConsumerARN,
  ?'consumer_creation_timestamp' => Timestamp,
  ?'consumer_name' => ConsumerName,
  ?'consumer_status' => ConsumerStatus,
  ?'stream_arn' => StreamARN,
  ) $s = shape()) {
    $this->consumer_arn = $consumer_arn ?? "";
    $this->consumer_creation_timestamp = $consumer_creation_timestamp ?? ;
    $this->consumer_name = $consumer_name ?? "";
    $this->consumer_status = $consumer_status ?? "";
    $this->stream_arn = $stream_arn ?? "";
  }
}

type ConsumerList = vec<Consumer>;

type ConsumerName = string;

type ConsumerStatus = string;

class CreateStreamInput {
  public PositiveIntegerObject $shard_count;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'shard_count' => PositiveIntegerObject,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->shard_count = $shard_count ?? ;
    $this->stream_name = $stream_name ?? "";
  }
}

type Data = string;

class DecreaseStreamRetentionPeriodInput {
  public RetentionPeriodHours $retention_period_hours;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'retention_period_hours' => RetentionPeriodHours,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->retention_period_hours = $retention_period_hours ?? 0;
    $this->stream_name = $stream_name ?? "";
  }
}

class DeleteStreamInput {
  public BooleanObject $enforce_consumer_deletion;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'enforce_consumer_deletion' => BooleanObject,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->enforce_consumer_deletion = $enforce_consumer_deletion ?? ;
    $this->stream_name = $stream_name ?? "";
  }
}

class DeregisterStreamConsumerInput {
  public ConsumerARN $consumer_arn;
  public ConsumerName $consumer_name;
  public StreamARN $stream_arn;

  public function __construct(shape(
  ?'consumer_arn' => ConsumerARN,
  ?'consumer_name' => ConsumerName,
  ?'stream_arn' => StreamARN,
  ) $s = shape()) {
    $this->consumer_arn = $consumer_arn ?? "";
    $this->consumer_name = $consumer_name ?? "";
    $this->stream_arn = $stream_arn ?? "";
  }
}

class DescribeLimitsInput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeLimitsOutput {
  public ShardCountObject $open_shard_count;
  public ShardCountObject $shard_limit;

  public function __construct(shape(
  ?'open_shard_count' => ShardCountObject,
  ?'shard_limit' => ShardCountObject,
  ) $s = shape()) {
    $this->open_shard_count = $open_shard_count ?? ;
    $this->shard_limit = $shard_limit ?? ;
  }
}

class DescribeStreamConsumerInput {
  public ConsumerARN $consumer_arn;
  public ConsumerName $consumer_name;
  public StreamARN $stream_arn;

  public function __construct(shape(
  ?'consumer_arn' => ConsumerARN,
  ?'consumer_name' => ConsumerName,
  ?'stream_arn' => StreamARN,
  ) $s = shape()) {
    $this->consumer_arn = $consumer_arn ?? "";
    $this->consumer_name = $consumer_name ?? "";
    $this->stream_arn = $stream_arn ?? "";
  }
}

class DescribeStreamConsumerOutput {
  public ConsumerDescription $consumer_description;

  public function __construct(shape(
  ?'consumer_description' => ConsumerDescription,
  ) $s = shape()) {
    $this->consumer_description = $consumer_description ?? null;
  }
}

class DescribeStreamInput {
  public ShardId $exclusive_start_shard_id;
  public DescribeStreamInputLimit $limit;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'exclusive_start_shard_id' => ShardId,
  ?'limit' => DescribeStreamInputLimit,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->exclusive_start_shard_id = $exclusive_start_shard_id ?? ;
    $this->limit = $limit ?? ;
    $this->stream_name = $stream_name ?? "";
  }
}

type DescribeStreamInputLimit = int;

class DescribeStreamOutput {
  public StreamDescription $stream_description;

  public function __construct(shape(
  ?'stream_description' => StreamDescription,
  ) $s = shape()) {
    $this->stream_description = $stream_description ?? null;
  }
}

class DescribeStreamSummaryInput {
  public StreamName $stream_name;

  public function __construct(shape(
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->stream_name = $stream_name ?? "";
  }
}

class DescribeStreamSummaryOutput {
  public StreamDescriptionSummary $stream_description_summary;

  public function __construct(shape(
  ?'stream_description_summary' => StreamDescriptionSummary,
  ) $s = shape()) {
    $this->stream_description_summary = $stream_description_summary ?? null;
  }
}

class DisableEnhancedMonitoringInput {
  public MetricsNameList $shard_level_metrics;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'shard_level_metrics' => MetricsNameList,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->shard_level_metrics = $shard_level_metrics ?? ;
    $this->stream_name = $stream_name ?? "";
  }
}

class EnableEnhancedMonitoringInput {
  public MetricsNameList $shard_level_metrics;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'shard_level_metrics' => MetricsNameList,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->shard_level_metrics = $shard_level_metrics ?? ;
    $this->stream_name = $stream_name ?? "";
  }
}

type EncryptionType = string;

class EnhancedMetrics {
  public MetricsNameList $shard_level_metrics;

  public function __construct(shape(
  ?'shard_level_metrics' => MetricsNameList,
  ) $s = shape()) {
    $this->shard_level_metrics = $shard_level_metrics ?? ;
  }
}

type EnhancedMonitoringList = vec<EnhancedMetrics>;

class EnhancedMonitoringOutput {
  public MetricsNameList $current_shard_level_metrics;
  public MetricsNameList $desired_shard_level_metrics;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'current_shard_level_metrics' => MetricsNameList,
  ?'desired_shard_level_metrics' => MetricsNameList,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->current_shard_level_metrics = $current_shard_level_metrics ?? ;
    $this->desired_shard_level_metrics = $desired_shard_level_metrics ?? ;
    $this->stream_name = $stream_name ?? "";
  }
}

type ErrorCode = string;

type ErrorMessage = string;

class ExpiredIteratorException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ExpiredNextTokenException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class GetRecordsInput {
  public GetRecordsInputLimit $limit;
  public ShardIterator $shard_iterator;

  public function __construct(shape(
  ?'limit' => GetRecordsInputLimit,
  ?'shard_iterator' => ShardIterator,
  ) $s = shape()) {
    $this->limit = $limit ?? ;
    $this->shard_iterator = $shard_iterator ?? "";
  }
}

type GetRecordsInputLimit = int;

class GetRecordsOutput {
  public MillisBehindLatest $millis_behind_latest;
  public ShardIterator $next_shard_iterator;
  public RecordList $records;

  public function __construct(shape(
  ?'millis_behind_latest' => MillisBehindLatest,
  ?'next_shard_iterator' => ShardIterator,
  ?'records' => RecordList,
  ) $s = shape()) {
    $this->millis_behind_latest = $millis_behind_latest ?? 0;
    $this->next_shard_iterator = $next_shard_iterator ?? ;
    $this->records = $records ?? ;
  }
}

class GetShardIteratorInput {
  public ShardId $shard_id;
  public ShardIteratorType $shard_iterator_type;
  public SequenceNumber $starting_sequence_number;
  public StreamName $stream_name;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'shard_id' => ShardId,
  ?'shard_iterator_type' => ShardIteratorType,
  ?'starting_sequence_number' => SequenceNumber,
  ?'stream_name' => StreamName,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->shard_id = $shard_id ?? "";
    $this->shard_iterator_type = $shard_iterator_type ?? "";
    $this->starting_sequence_number = $starting_sequence_number ?? ;
    $this->stream_name = $stream_name ?? "";
    $this->timestamp = $timestamp ?? 0;
  }
}

class GetShardIteratorOutput {
  public ShardIterator $shard_iterator;

  public function __construct(shape(
  ?'shard_iterator' => ShardIterator,
  ) $s = shape()) {
    $this->shard_iterator = $shard_iterator ?? "";
  }
}

type HashKey = string;

class HashKeyRange {
  public HashKey $ending_hash_key;
  public HashKey $starting_hash_key;

  public function __construct(shape(
  ?'ending_hash_key' => HashKey,
  ?'starting_hash_key' => HashKey,
  ) $s = shape()) {
    $this->ending_hash_key = $ending_hash_key ?? ;
    $this->starting_hash_key = $starting_hash_key ?? ;
  }
}

class IncreaseStreamRetentionPeriodInput {
  public RetentionPeriodHours $retention_period_hours;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'retention_period_hours' => RetentionPeriodHours,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->retention_period_hours = $retention_period_hours ?? 0;
    $this->stream_name = $stream_name ?? "";
  }
}

class InternalFailureException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidArgumentException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class KMSAccessDeniedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class KMSDisabledException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class KMSInvalidStateException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class KMSNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class KMSOptInRequired {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class KMSThrottlingException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type KeyId = string;

class LimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ListShardsInput {
  public ShardId $exclusive_start_shard_id;
  public ListShardsInputLimit $max_results;
  public NextToken $next_token;
  public Timestamp $stream_creation_timestamp;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'exclusive_start_shard_id' => ShardId,
  ?'max_results' => ListShardsInputLimit,
  ?'next_token' => NextToken,
  ?'stream_creation_timestamp' => Timestamp,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->exclusive_start_shard_id = $exclusive_start_shard_id ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? "";
    $this->stream_creation_timestamp = $stream_creation_timestamp ?? ;
    $this->stream_name = $stream_name ?? "";
  }
}

type ListShardsInputLimit = int;

class ListShardsOutput {
  public NextToken $next_token;
  public ShardList $shards;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'shards' => ShardList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->shards = $shards ?? ;
  }
}

class ListStreamConsumersInput {
  public ListStreamConsumersInputLimit $max_results;
  public NextToken $next_token;
  public StreamARN $stream_arn;
  public Timestamp $stream_creation_timestamp;

  public function __construct(shape(
  ?'max_results' => ListStreamConsumersInputLimit,
  ?'next_token' => NextToken,
  ?'stream_arn' => StreamARN,
  ?'stream_creation_timestamp' => Timestamp,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? "";
    $this->stream_arn = $stream_arn ?? "";
    $this->stream_creation_timestamp = $stream_creation_timestamp ?? ;
  }
}

type ListStreamConsumersInputLimit = int;

class ListStreamConsumersOutput {
  public ConsumerList $consumers;
  public NextToken $next_token;

  public function __construct(shape(
  ?'consumers' => ConsumerList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->consumers = $consumers ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListStreamsInput {
  public StreamName $exclusive_start_stream_name;
  public ListStreamsInputLimit $limit;

  public function __construct(shape(
  ?'exclusive_start_stream_name' => StreamName,
  ?'limit' => ListStreamsInputLimit,
  ) $s = shape()) {
    $this->exclusive_start_stream_name = $exclusive_start_stream_name ?? ;
    $this->limit = $limit ?? ;
  }
}

type ListStreamsInputLimit = int;

class ListStreamsOutput {
  public BooleanObject $has_more_streams;
  public StreamNameList $stream_names;

  public function __construct(shape(
  ?'has_more_streams' => BooleanObject,
  ?'stream_names' => StreamNameList,
  ) $s = shape()) {
    $this->has_more_streams = $has_more_streams ?? ;
    $this->stream_names = $stream_names ?? ;
  }
}

class ListTagsForStreamInput {
  public TagKey $exclusive_start_tag_key;
  public ListTagsForStreamInputLimit $limit;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'exclusive_start_tag_key' => TagKey,
  ?'limit' => ListTagsForStreamInputLimit,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->exclusive_start_tag_key = $exclusive_start_tag_key ?? ;
    $this->limit = $limit ?? ;
    $this->stream_name = $stream_name ?? "";
  }
}

type ListTagsForStreamInputLimit = int;

class ListTagsForStreamOutput {
  public BooleanObject $has_more_tags;
  public TagList $tags;

  public function __construct(shape(
  ?'has_more_tags' => BooleanObject,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->has_more_tags = $has_more_tags ?? ;
    $this->tags = $tags ?? ;
  }
}

class MergeShardsInput {
  public ShardId $adjacent_shard_to_merge;
  public ShardId $shard_to_merge;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'adjacent_shard_to_merge' => ShardId,
  ?'shard_to_merge' => ShardId,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->adjacent_shard_to_merge = $adjacent_shard_to_merge ?? ;
    $this->shard_to_merge = $shard_to_merge ?? ;
    $this->stream_name = $stream_name ?? "";
  }
}

type MetricsName = string;

type MetricsNameList = vec<MetricsName>;

type MillisBehindLatest = int;

type NextToken = string;

type PartitionKey = string;

type PositiveIntegerObject = int;

class ProvisionedThroughputExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class PutRecordInput {
  public Data $data;
  public HashKey $explicit_hash_key;
  public PartitionKey $partition_key;
  public SequenceNumber $sequence_number_for_ordering;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'data' => Data,
  ?'explicit_hash_key' => HashKey,
  ?'partition_key' => PartitionKey,
  ?'sequence_number_for_ordering' => SequenceNumber,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->data = $data ?? "";
    $this->explicit_hash_key = $explicit_hash_key ?? ;
    $this->partition_key = $partition_key ?? "";
    $this->sequence_number_for_ordering = $sequence_number_for_ordering ?? ;
    $this->stream_name = $stream_name ?? "";
  }
}

class PutRecordOutput {
  public EncryptionType $encryption_type;
  public SequenceNumber $sequence_number;
  public ShardId $shard_id;

  public function __construct(shape(
  ?'encryption_type' => EncryptionType,
  ?'sequence_number' => SequenceNumber,
  ?'shard_id' => ShardId,
  ) $s = shape()) {
    $this->encryption_type = $encryption_type ?? "";
    $this->sequence_number = $sequence_number ?? "";
    $this->shard_id = $shard_id ?? "";
  }
}

class PutRecordsInput {
  public PutRecordsRequestEntryList $records;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'records' => PutRecordsRequestEntryList,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->records = $records ?? ;
    $this->stream_name = $stream_name ?? "";
  }
}

class PutRecordsOutput {
  public EncryptionType $encryption_type;
  public PositiveIntegerObject $failed_record_count;
  public PutRecordsResultEntryList $records;

  public function __construct(shape(
  ?'encryption_type' => EncryptionType,
  ?'failed_record_count' => PositiveIntegerObject,
  ?'records' => PutRecordsResultEntryList,
  ) $s = shape()) {
    $this->encryption_type = $encryption_type ?? "";
    $this->failed_record_count = $failed_record_count ?? ;
    $this->records = $records ?? ;
  }
}

class PutRecordsRequestEntry {
  public Data $data;
  public HashKey $explicit_hash_key;
  public PartitionKey $partition_key;

  public function __construct(shape(
  ?'data' => Data,
  ?'explicit_hash_key' => HashKey,
  ?'partition_key' => PartitionKey,
  ) $s = shape()) {
    $this->data = $data ?? "";
    $this->explicit_hash_key = $explicit_hash_key ?? ;
    $this->partition_key = $partition_key ?? "";
  }
}

type PutRecordsRequestEntryList = vec<PutRecordsRequestEntry>;

class PutRecordsResultEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public SequenceNumber $sequence_number;
  public ShardId $shard_id;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => ErrorMessage,
  ?'sequence_number' => SequenceNumber,
  ?'shard_id' => ShardId,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->sequence_number = $sequence_number ?? "";
    $this->shard_id = $shard_id ?? "";
  }
}

type PutRecordsResultEntryList = vec<PutRecordsResultEntry>;

class Record {
  public Timestamp $approximate_arrival_timestamp;
  public Data $data;
  public EncryptionType $encryption_type;
  public PartitionKey $partition_key;
  public SequenceNumber $sequence_number;

  public function __construct(shape(
  ?'approximate_arrival_timestamp' => Timestamp,
  ?'data' => Data,
  ?'encryption_type' => EncryptionType,
  ?'partition_key' => PartitionKey,
  ?'sequence_number' => SequenceNumber,
  ) $s = shape()) {
    $this->approximate_arrival_timestamp = $approximate_arrival_timestamp ?? ;
    $this->data = $data ?? "";
    $this->encryption_type = $encryption_type ?? "";
    $this->partition_key = $partition_key ?? "";
    $this->sequence_number = $sequence_number ?? "";
  }
}

type RecordList = vec<Record>;

class RegisterStreamConsumerInput {
  public ConsumerName $consumer_name;
  public StreamARN $stream_arn;

  public function __construct(shape(
  ?'consumer_name' => ConsumerName,
  ?'stream_arn' => StreamARN,
  ) $s = shape()) {
    $this->consumer_name = $consumer_name ?? "";
    $this->stream_arn = $stream_arn ?? "";
  }
}

class RegisterStreamConsumerOutput {
  public Consumer $consumer;

  public function __construct(shape(
  ?'consumer' => Consumer,
  ) $s = shape()) {
    $this->consumer = $consumer ?? null;
  }
}

class RemoveTagsFromStreamInput {
  public StreamName $stream_name;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'stream_name' => StreamName,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->stream_name = $stream_name ?? "";
    $this->tag_keys = $tag_keys ?? ;
  }
}

class ResourceInUseException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type RetentionPeriodHours = int;

type ScalingType = string;

type SequenceNumber = string;

class SequenceNumberRange {
  public SequenceNumber $ending_sequence_number;
  public SequenceNumber $starting_sequence_number;

  public function __construct(shape(
  ?'ending_sequence_number' => SequenceNumber,
  ?'starting_sequence_number' => SequenceNumber,
  ) $s = shape()) {
    $this->ending_sequence_number = $ending_sequence_number ?? ;
    $this->starting_sequence_number = $starting_sequence_number ?? ;
  }
}

class Shard {
  public ShardId $adjacent_parent_shard_id;
  public HashKeyRange $hash_key_range;
  public ShardId $parent_shard_id;
  public SequenceNumberRange $sequence_number_range;
  public ShardId $shard_id;

  public function __construct(shape(
  ?'adjacent_parent_shard_id' => ShardId,
  ?'hash_key_range' => HashKeyRange,
  ?'parent_shard_id' => ShardId,
  ?'sequence_number_range' => SequenceNumberRange,
  ?'shard_id' => ShardId,
  ) $s = shape()) {
    $this->adjacent_parent_shard_id = $adjacent_parent_shard_id ?? ;
    $this->hash_key_range = $hash_key_range ?? null;
    $this->parent_shard_id = $parent_shard_id ?? ;
    $this->sequence_number_range = $sequence_number_range ?? null;
    $this->shard_id = $shard_id ?? "";
  }
}

type ShardCountObject = int;

type ShardId = string;

type ShardIterator = string;

type ShardIteratorType = string;

type ShardList = vec<Shard>;

class SplitShardInput {
  public HashKey $new_starting_hash_key;
  public ShardId $shard_to_split;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'new_starting_hash_key' => HashKey,
  ?'shard_to_split' => ShardId,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->new_starting_hash_key = $new_starting_hash_key ?? ;
    $this->shard_to_split = $shard_to_split ?? ;
    $this->stream_name = $stream_name ?? "";
  }
}

class StartStreamEncryptionInput {
  public EncryptionType $encryption_type;
  public KeyId $key_id;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'encryption_type' => EncryptionType,
  ?'key_id' => KeyId,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->encryption_type = $encryption_type ?? "";
    $this->key_id = $key_id ?? "";
    $this->stream_name = $stream_name ?? "";
  }
}

class StartingPosition {
  public SequenceNumber $sequence_number;
  public Timestamp $timestamp;
  public ShardIteratorType $type;

  public function __construct(shape(
  ?'sequence_number' => SequenceNumber,
  ?'timestamp' => Timestamp,
  ?'type' => ShardIteratorType,
  ) $s = shape()) {
    $this->sequence_number = $sequence_number ?? "";
    $this->timestamp = $timestamp ?? 0;
    $this->type = $type ?? ;
  }
}

class StopStreamEncryptionInput {
  public EncryptionType $encryption_type;
  public KeyId $key_id;
  public StreamName $stream_name;

  public function __construct(shape(
  ?'encryption_type' => EncryptionType,
  ?'key_id' => KeyId,
  ?'stream_name' => StreamName,
  ) $s = shape()) {
    $this->encryption_type = $encryption_type ?? "";
    $this->key_id = $key_id ?? "";
    $this->stream_name = $stream_name ?? "";
  }
}

type StreamARN = string;

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

  public function __construct(shape(
  ?'encryption_type' => EncryptionType,
  ?'enhanced_monitoring' => EnhancedMonitoringList,
  ?'has_more_shards' => BooleanObject,
  ?'key_id' => KeyId,
  ?'retention_period_hours' => RetentionPeriodHours,
  ?'shards' => ShardList,
  ?'stream_arn' => StreamARN,
  ?'stream_creation_timestamp' => Timestamp,
  ?'stream_name' => StreamName,
  ?'stream_status' => StreamStatus,
  ) $s = shape()) {
    $this->encryption_type = $encryption_type ?? "";
    $this->enhanced_monitoring = $enhanced_monitoring ?? ;
    $this->has_more_shards = $has_more_shards ?? ;
    $this->key_id = $key_id ?? "";
    $this->retention_period_hours = $retention_period_hours ?? 0;
    $this->shards = $shards ?? ;
    $this->stream_arn = $stream_arn ?? "";
    $this->stream_creation_timestamp = $stream_creation_timestamp ?? ;
    $this->stream_name = $stream_name ?? "";
    $this->stream_status = $stream_status ?? "";
  }
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

  public function __construct(shape(
  ?'consumer_count' => ConsumerCountObject,
  ?'encryption_type' => EncryptionType,
  ?'enhanced_monitoring' => EnhancedMonitoringList,
  ?'key_id' => KeyId,
  ?'open_shard_count' => ShardCountObject,
  ?'retention_period_hours' => PositiveIntegerObject,
  ?'stream_arn' => StreamARN,
  ?'stream_creation_timestamp' => Timestamp,
  ?'stream_name' => StreamName,
  ?'stream_status' => StreamStatus,
  ) $s = shape()) {
    $this->consumer_count = $consumer_count ?? ;
    $this->encryption_type = $encryption_type ?? "";
    $this->enhanced_monitoring = $enhanced_monitoring ?? ;
    $this->key_id = $key_id ?? "";
    $this->open_shard_count = $open_shard_count ?? ;
    $this->retention_period_hours = $retention_period_hours ?? 0;
    $this->stream_arn = $stream_arn ?? "";
    $this->stream_creation_timestamp = $stream_creation_timestamp ?? ;
    $this->stream_name = $stream_name ?? "";
    $this->stream_status = $stream_status ?? "";
  }
}

type StreamName = string;

type StreamNameList = vec<StreamName>;

type StreamStatus = string;

class SubscribeToShardEvent {
  public SequenceNumber $continuation_sequence_number;
  public MillisBehindLatest $millis_behind_latest;
  public RecordList $records;

  public function __construct(shape(
  ?'continuation_sequence_number' => SequenceNumber,
  ?'millis_behind_latest' => MillisBehindLatest,
  ?'records' => RecordList,
  ) $s = shape()) {
    $this->continuation_sequence_number = $continuation_sequence_number ?? ;
    $this->millis_behind_latest = $millis_behind_latest ?? 0;
    $this->records = $records ?? ;
  }
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

  public function __construct(shape(
  ?'internal_failure_exception' => InternalFailureException,
  ?'kms_access_denied_exception' => KMSAccessDeniedException,
  ?'kms_disabled_exception' => KMSDisabledException,
  ?'kms_invalid_state_exception' => KMSInvalidStateException,
  ?'kms_not_found_exception' => KMSNotFoundException,
  ?'kms_opt_in_required' => KMSOptInRequired,
  ?'kms_throttling_exception' => KMSThrottlingException,
  ?'resource_in_use_exception' => ResourceInUseException,
  ?'resource_not_found_exception' => ResourceNotFoundException,
  ?'subscribe_to_shard_event' => SubscribeToShardEvent,
  ) $s = shape()) {
    $this->internal_failure_exception = $internal_failure_exception ?? null;
    $this->kms_access_denied_exception = $kms_access_denied_exception ?? null;
    $this->kms_disabled_exception = $kms_disabled_exception ?? null;
    $this->kms_invalid_state_exception = $kms_invalid_state_exception ?? null;
    $this->kms_not_found_exception = $kms_not_found_exception ?? null;
    $this->kms_opt_in_required = $kms_opt_in_required ?? null;
    $this->kms_throttling_exception = $kms_throttling_exception ?? null;
    $this->resource_in_use_exception = $resource_in_use_exception ?? null;
    $this->resource_not_found_exception = $resource_not_found_exception ?? null;
    $this->subscribe_to_shard_event = $subscribe_to_shard_event ?? null;
  }
}

class SubscribeToShardInput {
  public ConsumerARN $consumer_arn;
  public ShardId $shard_id;
  public StartingPosition $starting_position;

  public function __construct(shape(
  ?'consumer_arn' => ConsumerARN,
  ?'shard_id' => ShardId,
  ?'starting_position' => StartingPosition,
  ) $s = shape()) {
    $this->consumer_arn = $consumer_arn ?? "";
    $this->shard_id = $shard_id ?? "";
    $this->starting_position = $starting_position ?? null;
  }
}

class SubscribeToShardOutput {
  public SubscribeToShardEventStream $event_stream;

  public function __construct(shape(
  ?'event_stream' => SubscribeToShardEventStream,
  ) $s = shape()) {
    $this->event_stream = $event_stream ?? ;
  }
}

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

type TagMap = dict<TagKey, TagValue>;

type TagValue = string;

type Timestamp = int;

class UpdateShardCountInput {
  public ScalingType $scaling_type;
  public StreamName $stream_name;
  public PositiveIntegerObject $target_shard_count;

  public function __construct(shape(
  ?'scaling_type' => ScalingType,
  ?'stream_name' => StreamName,
  ?'target_shard_count' => PositiveIntegerObject,
  ) $s = shape()) {
    $this->scaling_type = $scaling_type ?? "";
    $this->stream_name = $stream_name ?? "";
    $this->target_shard_count = $target_shard_count ?? ;
  }
}

class UpdateShardCountOutput {
  public PositiveIntegerObject $current_shard_count;
  public StreamName $stream_name;
  public PositiveIntegerObject $target_shard_count;

  public function __construct(shape(
  ?'current_shard_count' => PositiveIntegerObject,
  ?'stream_name' => StreamName,
  ?'target_shard_count' => PositiveIntegerObject,
  ) $s = shape()) {
    $this->current_shard_count = $current_shard_count ?? ;
    $this->stream_name = $stream_name ?? "";
    $this->target_shard_count = $target_shard_count ?? ;
  }
}


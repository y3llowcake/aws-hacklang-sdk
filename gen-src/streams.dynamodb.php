<?hh // strict
namespace slack\aws\streams.dynamodb;

interface  {
  public function DescribeStream(DescribeStreamInput): Awaitable<Errors\Result<DescribeStreamOutput>>;
  public function GetRecords(GetRecordsInput): Awaitable<Errors\Result<GetRecordsOutput>>;
  public function GetShardIterator(GetShardIteratorInput): Awaitable<Errors\Result<GetShardIteratorOutput>>;
  public function ListStreams(ListStreamsInput): Awaitable<Errors\Result<ListStreamsOutput>>;
}

class AttributeMap {
}

class AttributeName {
}

class AttributeValue {
  public BinaryAttributeValue $b;
  public BooleanAttributeValue $bool;
  public BinarySetAttributeValue $bs;
  public ListAttributeValue $l;
  public MapAttributeValue $m;
  public NumberAttributeValue $n;
  public NumberSetAttributeValue $ns;
  public NullAttributeValue $null;
  public StringAttributeValue $s;
  public StringSetAttributeValue $ss;
}

class BinaryAttributeValue {
}

class BinarySetAttributeValue {
}

class BooleanAttributeValue {
}

class Date {
}

class DescribeStreamInput {
  public ShardId $exclusive_start_shard_id;
  public PositiveIntegerObject $limit;
  public StreamArn $stream_arn;
}

class DescribeStreamOutput {
  public StreamDescription $stream_description;
}

class ErrorMessage {
}

class ExpiredIteratorException {
  public ErrorMessage $message;
}

class GetRecordsInput {
  public PositiveIntegerObject $limit;
  public ShardIterator $shard_iterator;
}

class GetRecordsOutput {
  public ShardIterator $next_shard_iterator;
  public RecordList $records;
}

class GetShardIteratorInput {
  public SequenceNumber $sequence_number;
  public ShardId $shard_id;
  public ShardIteratorType $shard_iterator_type;
  public StreamArn $stream_arn;
}

class GetShardIteratorOutput {
  public ShardIterator $shard_iterator;
}

class Identity {
  public string $principal_id;
  public string $type;
}

class InternalServerError {
  public ErrorMessage $message;
}

class KeySchema {
}

class KeySchemaAttributeName {
}

class KeySchemaElement {
  public KeySchemaAttributeName $attribute_name;
  public KeyType $key_type;
}

class KeyType {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListAttributeValue {
}

class ListStreamsInput {
  public StreamArn $exclusive_start_stream_arn;
  public PositiveIntegerObject $limit;
  public TableName $table_name;
}

class ListStreamsOutput {
  public StreamArn $last_evaluated_stream_arn;
  public StreamList $streams;
}

class MapAttributeValue {
}

class NullAttributeValue {
}

class NumberAttributeValue {
}

class NumberSetAttributeValue {
}

class OperationType {
}

class PositiveIntegerObject {
}

class PositiveLongObject {
}

class Record {
  public string $aws_region;
  public StreamRecord $dynamodb;
  public string $event_id;
  public OperationType $event_name;
  public string $event_source;
  public string $event_version;
  public Identity $user_identity;
}

class RecordList {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class SequenceNumber {
}

class SequenceNumberRange {
  public SequenceNumber $ending_sequence_number;
  public SequenceNumber $starting_sequence_number;
}

class Shard {
  public ShardId $parent_shard_id;
  public SequenceNumberRange $sequence_number_range;
  public ShardId $shard_id;
}

class ShardDescriptionList {
}

class ShardId {
}

class ShardIterator {
}

class ShardIteratorType {
}

class Stream {
  public StreamArn $stream_arn;
  public string $stream_label;
  public TableName $table_name;
}

class StreamArn {
}

class StreamDescription {
  public Date $creation_request_date_time;
  public KeySchema $key_schema;
  public ShardId $last_evaluated_shard_id;
  public ShardDescriptionList $shards;
  public StreamArn $stream_arn;
  public string $stream_label;
  public StreamStatus $stream_status;
  public StreamViewType $stream_view_type;
  public TableName $table_name;
}

class StreamList {
}

class StreamRecord {
  public Date $approximate_creation_date_time;
  public AttributeMap $keys;
  public AttributeMap $new_image;
  public AttributeMap $old_image;
  public SequenceNumber $sequence_number;
  public PositiveLongObject $size_bytes;
  public StreamViewType $stream_view_type;
}

class StreamStatus {
}

class StreamViewType {
}

class String {
}

class StringAttributeValue {
}

class StringSetAttributeValue {
}

class TableName {
}

class TrimmedDataAccessException {
  public ErrorMessage $message;
}


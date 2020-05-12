<?hh // strict
namespace slack\aws\streams.dynamodb;

interface  {
  public function DescribeStream(DescribeStreamInput $in): Awaitable<\Errors\Result<DescribeStreamOutput>>;
  public function GetRecords(GetRecordsInput $in): Awaitable<\Errors\Result<GetRecordsOutput>>;
  public function GetShardIterator(GetShardIteratorInput $in): Awaitable<\Errors\Result<GetShardIteratorOutput>>;
  public function ListStreams(ListStreamsInput $in): Awaitable<\Errors\Result<ListStreamsOutput>>;
}

type AttributeMap = dict<AttributeName, AttributeValue>;

type AttributeName = string;

class AttributeValue {
  public ?BinaryAttributeValue $b;
  public ?BooleanAttributeValue $bool;
  public ?BinarySetAttributeValue $bs;
  public ?ListAttributeValue $l;
  public ?MapAttributeValue $m;
  public ?NumberAttributeValue $n;
  public ?NumberSetAttributeValue $ns;
  public ?NullAttributeValue $null;
  public ?StringAttributeValue $s;
  public ?StringSetAttributeValue $ss;

  public function __construct(shape(
    ?'b' => ?BinaryAttributeValue,
    ?'bool' => ?BooleanAttributeValue,
    ?'bs' => ?BinarySetAttributeValue,
    ?'l' => ?ListAttributeValue,
    ?'m' => ?MapAttributeValue,
    ?'n' => ?NumberAttributeValue,
    ?'ns' => ?NumberSetAttributeValue,
    ?'null' => ?NullAttributeValue,
    ?'s' => ?StringAttributeValue,
    ?'ss' => ?StringSetAttributeValue,
  ) $s = shape()) {
    $this->b = $s['b'] ?? '';
    $this->bool = $s['bool'] ?? false;
    $this->bs = $s['bs'] ?? vec[];
    $this->l = $s['l'] ?? vec[];
    $this->m = $s['m'] ?? dict[];
    $this->n = $s['n'] ?? '';
    $this->ns = $s['ns'] ?? vec[];
    $this->null = $s['null'] ?? false;
    $this->s = $s['s'] ?? '';
    $this->ss = $s['ss'] ?? vec[];
  }
}

type BinaryAttributeValue = string;

type BinarySetAttributeValue = vec<BinaryAttributeValue>;

type BooleanAttributeValue = bool;

type Date = int;

class DescribeStreamInput {
  public ?ShardId $exclusive_start_shard_id;
  public ?PositiveIntegerObject $limit;
  public ?StreamArn $stream_arn;

  public function __construct(shape(
    ?'exclusive_start_shard_id' => ?ShardId,
    ?'limit' => ?PositiveIntegerObject,
    ?'stream_arn' => ?StreamArn,
  ) $s = shape()) {
    $this->exclusive_start_shard_id = $s['exclusive_start_shard_id'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->stream_arn = $s['stream_arn'] ?? '';
  }
}

class DescribeStreamOutput {
  public ?StreamDescription $stream_description;

  public function __construct(shape(
    ?'stream_description' => ?StreamDescription,
  ) $s = shape()) {
    $this->stream_description = $s['stream_description'] ?? null;
  }
}

type ErrorMessage = string;

class ExpiredIteratorException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class GetRecordsInput {
  public ?PositiveIntegerObject $limit;
  public ?ShardIterator $shard_iterator;

  public function __construct(shape(
    ?'limit' => ?PositiveIntegerObject,
    ?'shard_iterator' => ?ShardIterator,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->shard_iterator = $s['shard_iterator'] ?? '';
  }
}

class GetRecordsOutput {
  public ?ShardIterator $next_shard_iterator;
  public ?RecordList $records;

  public function __construct(shape(
    ?'next_shard_iterator' => ?ShardIterator,
    ?'records' => ?RecordList,
  ) $s = shape()) {
    $this->next_shard_iterator = $s['next_shard_iterator'] ?? '';
    $this->records = $s['records'] ?? vec[];
  }
}

class GetShardIteratorInput {
  public ?SequenceNumber $sequence_number;
  public ?ShardId $shard_id;
  public ?ShardIteratorType $shard_iterator_type;
  public ?StreamArn $stream_arn;

  public function __construct(shape(
    ?'sequence_number' => ?SequenceNumber,
    ?'shard_id' => ?ShardId,
    ?'shard_iterator_type' => ?ShardIteratorType,
    ?'stream_arn' => ?StreamArn,
  ) $s = shape()) {
    $this->sequence_number = $s['sequence_number'] ?? '';
    $this->shard_id = $s['shard_id'] ?? '';
    $this->shard_iterator_type = $s['shard_iterator_type'] ?? '';
    $this->stream_arn = $s['stream_arn'] ?? '';
  }
}

class GetShardIteratorOutput {
  public ?ShardIterator $shard_iterator;

  public function __construct(shape(
    ?'shard_iterator' => ?ShardIterator,
  ) $s = shape()) {
    $this->shard_iterator = $s['shard_iterator'] ?? '';
  }
}

class Identity {
  public string $principal_id;
  public string $type;

  public function __construct(shape(
    ?'principal_id' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->principal_id = $s['principal_id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class InternalServerError {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type KeySchema = vec<KeySchemaElement>;

type KeySchemaAttributeName = string;

class KeySchemaElement {
  public ?KeySchemaAttributeName $attribute_name;
  public ?KeyType $key_type;

  public function __construct(shape(
    ?'attribute_name' => ?KeySchemaAttributeName,
    ?'key_type' => ?KeyType,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->key_type = $s['key_type'] ?? '';
  }
}

type KeyType = string;

class LimitExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ListAttributeValue = vec<AttributeValue>;

class ListStreamsInput {
  public ?StreamArn $exclusive_start_stream_arn;
  public ?PositiveIntegerObject $limit;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'exclusive_start_stream_arn' => ?StreamArn,
    ?'limit' => ?PositiveIntegerObject,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->exclusive_start_stream_arn = $s['exclusive_start_stream_arn'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->table_name = $s['table_name'] ?? '';
  }
}

class ListStreamsOutput {
  public ?StreamArn $last_evaluated_stream_arn;
  public ?StreamList $streams;

  public function __construct(shape(
    ?'last_evaluated_stream_arn' => ?StreamArn,
    ?'streams' => ?StreamList,
  ) $s = shape()) {
    $this->last_evaluated_stream_arn = $s['last_evaluated_stream_arn'] ?? '';
    $this->streams = $s['streams'] ?? vec[];
  }
}

type MapAttributeValue = dict<AttributeName, AttributeValue>;

type NullAttributeValue = bool;

type NumberAttributeValue = string;

type NumberSetAttributeValue = vec<NumberAttributeValue>;

type OperationType = string;

type PositiveIntegerObject = int;

type PositiveLongObject = int;

class Record {
  public string $aws_region;
  public ?StreamRecord $dynamodb;
  public string $event_id;
  public ?OperationType $event_name;
  public string $event_source;
  public string $event_version;
  public ?Identity $user_identity;

  public function __construct(shape(
    ?'aws_region' => string,
    ?'dynamodb' => ?StreamRecord,
    ?'event_id' => string,
    ?'event_name' => ?OperationType,
    ?'event_source' => string,
    ?'event_version' => string,
    ?'user_identity' => ?Identity,
  ) $s = shape()) {
    $this->aws_region = $s['aws_region'] ?? '';
    $this->dynamodb = $s['dynamodb'] ?? null;
    $this->event_id = $s['event_id'] ?? '';
    $this->event_name = $s['event_name'] ?? '';
    $this->event_source = $s['event_source'] ?? '';
    $this->event_version = $s['event_version'] ?? '';
    $this->user_identity = $s['user_identity'] ?? null;
  }
}

type RecordList = vec<Record>;

class ResourceNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type SequenceNumber = string;

class SequenceNumberRange {
  public ?SequenceNumber $ending_sequence_number;
  public ?SequenceNumber $starting_sequence_number;

  public function __construct(shape(
    ?'ending_sequence_number' => ?SequenceNumber,
    ?'starting_sequence_number' => ?SequenceNumber,
  ) $s = shape()) {
    $this->ending_sequence_number = $s['ending_sequence_number'] ?? '';
    $this->starting_sequence_number = $s['starting_sequence_number'] ?? '';
  }
}

class Shard {
  public ?ShardId $parent_shard_id;
  public ?SequenceNumberRange $sequence_number_range;
  public ?ShardId $shard_id;

  public function __construct(shape(
    ?'parent_shard_id' => ?ShardId,
    ?'sequence_number_range' => ?SequenceNumberRange,
    ?'shard_id' => ?ShardId,
  ) $s = shape()) {
    $this->parent_shard_id = $s['parent_shard_id'] ?? '';
    $this->sequence_number_range = $s['sequence_number_range'] ?? null;
    $this->shard_id = $s['shard_id'] ?? '';
  }
}

type ShardDescriptionList = vec<Shard>;

type ShardId = string;

type ShardIterator = string;

type ShardIteratorType = string;

class Stream {
  public ?StreamArn $stream_arn;
  public string $stream_label;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'stream_arn' => ?StreamArn,
    ?'stream_label' => string,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->stream_arn = $s['stream_arn'] ?? '';
    $this->stream_label = $s['stream_label'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

type StreamArn = string;

class StreamDescription {
  public ?Date $creation_request_date_time;
  public ?KeySchema $key_schema;
  public ?ShardId $last_evaluated_shard_id;
  public ?ShardDescriptionList $shards;
  public ?StreamArn $stream_arn;
  public string $stream_label;
  public ?StreamStatus $stream_status;
  public ?StreamViewType $stream_view_type;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'creation_request_date_time' => ?Date,
    ?'key_schema' => ?KeySchema,
    ?'last_evaluated_shard_id' => ?ShardId,
    ?'shards' => ?ShardDescriptionList,
    ?'stream_arn' => ?StreamArn,
    ?'stream_label' => string,
    ?'stream_status' => ?StreamStatus,
    ?'stream_view_type' => ?StreamViewType,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->creation_request_date_time = $s['creation_request_date_time'] ?? 0;
    $this->key_schema = $s['key_schema'] ?? vec[];
    $this->last_evaluated_shard_id = $s['last_evaluated_shard_id'] ?? '';
    $this->shards = $s['shards'] ?? vec[];
    $this->stream_arn = $s['stream_arn'] ?? '';
    $this->stream_label = $s['stream_label'] ?? '';
    $this->stream_status = $s['stream_status'] ?? '';
    $this->stream_view_type = $s['stream_view_type'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

type StreamList = vec<Stream>;

class StreamRecord {
  public ?Date $approximate_creation_date_time;
  public ?AttributeMap $keys;
  public ?AttributeMap $new_image;
  public ?AttributeMap $old_image;
  public ?SequenceNumber $sequence_number;
  public ?PositiveLongObject $size_bytes;
  public ?StreamViewType $stream_view_type;

  public function __construct(shape(
    ?'approximate_creation_date_time' => ?Date,
    ?'keys' => ?AttributeMap,
    ?'new_image' => ?AttributeMap,
    ?'old_image' => ?AttributeMap,
    ?'sequence_number' => ?SequenceNumber,
    ?'size_bytes' => ?PositiveLongObject,
    ?'stream_view_type' => ?StreamViewType,
  ) $s = shape()) {
    $this->approximate_creation_date_time = $s['approximate_creation_date_time'] ?? 0;
    $this->keys = $s['keys'] ?? dict[];
    $this->new_image = $s['new_image'] ?? dict[];
    $this->old_image = $s['old_image'] ?? dict[];
    $this->sequence_number = $s['sequence_number'] ?? '';
    $this->size_bytes = $s['size_bytes'] ?? 0;
    $this->stream_view_type = $s['stream_view_type'] ?? '';
  }
}

type StreamStatus = string;

type StreamViewType = string;

type String = string;

type StringAttributeValue = string;

type StringSetAttributeValue = vec<StringAttributeValue>;

type TableName = string;

class TrimmedDataAccessException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}


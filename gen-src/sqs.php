<?hh // strict
namespace slack\aws\sqs;

interface SQS {
  public function AddPermission(AddPermissionRequest): Awaitable<Errors\Error>;
  public function ChangeMessageVisibility(ChangeMessageVisibilityRequest): Awaitable<Errors\Error>;
  public function ChangeMessageVisibilityBatch(ChangeMessageVisibilityBatchRequest): Awaitable<Errors\Result<ChangeMessageVisibilityBatchResult>>;
  public function CreateQueue(CreateQueueRequest): Awaitable<Errors\Result<CreateQueueResult>>;
  public function DeleteMessage(DeleteMessageRequest): Awaitable<Errors\Error>;
  public function DeleteMessageBatch(DeleteMessageBatchRequest): Awaitable<Errors\Result<DeleteMessageBatchResult>>;
  public function DeleteQueue(DeleteQueueRequest): Awaitable<Errors\Error>;
  public function GetQueueAttributes(GetQueueAttributesRequest): Awaitable<Errors\Result<GetQueueAttributesResult>>;
  public function GetQueueUrl(GetQueueUrlRequest): Awaitable<Errors\Result<GetQueueUrlResult>>;
  public function ListDeadLetterSourceQueues(ListDeadLetterSourceQueuesRequest): Awaitable<Errors\Result<ListDeadLetterSourceQueuesResult>>;
  public function ListQueueTags(ListQueueTagsRequest): Awaitable<Errors\Result<ListQueueTagsResult>>;
  public function ListQueues(ListQueuesRequest): Awaitable<Errors\Result<ListQueuesResult>>;
  public function PurgeQueue(PurgeQueueRequest): Awaitable<Errors\Error>;
  public function ReceiveMessage(ReceiveMessageRequest): Awaitable<Errors\Result<ReceiveMessageResult>>;
  public function RemovePermission(RemovePermissionRequest): Awaitable<Errors\Error>;
  public function SendMessage(SendMessageRequest): Awaitable<Errors\Result<SendMessageResult>>;
  public function SendMessageBatch(SendMessageBatchRequest): Awaitable<Errors\Result<SendMessageBatchResult>>;
  public function SetQueueAttributes(SetQueueAttributesRequest): Awaitable<Errors\Error>;
  public function TagQueue(TagQueueRequest): Awaitable<Errors\Error>;
  public function UntagQueue(UntagQueueRequest): Awaitable<Errors\Error>;
}

type AWSAccountIdList = vec<String>;

type ActionNameList = vec<String>;

class AddPermissionRequest {
  public AWSAccountIdList $aws_account_ids;
  public ActionNameList $actions;
  public string $label;
  public string $queue_url;

  public function __construct(shape(
  ?'aws_account_ids' => AWSAccountIdList,
  ?'actions' => ActionNameList,
  ?'label' => string,
  ?'queue_url' => string,
  ) $s = shape()) {
    $this->aws_account_ids = $aws_account_ids ?? ;
    $this->actions = $actions ?? ;
    $this->label = $label ?? ;
    $this->queue_url = $queue_url ?? ;
  }
}

type AttributeNameList = vec<QueueAttributeName>;

class BatchEntryIdsNotDistinct {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BatchRequestTooLong {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BatchResultErrorEntry {
  public string $code;
  public string $id;
  public string $message;
  public boolean $sender_fault;

  public function __construct(shape(
  ?'code' => string,
  ?'id' => string,
  ?'message' => string,
  ?'sender_fault' => boolean,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->id = $id ?? ;
    $this->message = $message ?? null;
    $this->sender_fault = $sender_fault ?? ;
  }
}

type BatchResultErrorEntryList = vec<BatchResultErrorEntry>;

type Binary = string;

type BinaryList = vec<Binary>;

type Boolean = bool;

class ChangeMessageVisibilityBatchRequest {
  public ChangeMessageVisibilityBatchRequestEntryList $entries;
  public string $queue_url;

  public function __construct(shape(
  ?'entries' => ChangeMessageVisibilityBatchRequestEntryList,
  ?'queue_url' => string,
  ) $s = shape()) {
    $this->entries = $entries ?? ;
    $this->queue_url = $queue_url ?? ;
  }
}

class ChangeMessageVisibilityBatchRequestEntry {
  public string $id;
  public string $receipt_handle;
  public int $visibility_timeout;

  public function __construct(shape(
  ?'id' => string,
  ?'receipt_handle' => string,
  ?'visibility_timeout' => int,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->receipt_handle = $receipt_handle ?? ;
    $this->visibility_timeout = $visibility_timeout ?? ;
  }
}

type ChangeMessageVisibilityBatchRequestEntryList = vec<ChangeMessageVisibilityBatchRequestEntry>;

class ChangeMessageVisibilityBatchResult {
  public BatchResultErrorEntryList $failed;
  public ChangeMessageVisibilityBatchResultEntryList $successful;

  public function __construct(shape(
  ?'failed' => BatchResultErrorEntryList,
  ?'successful' => ChangeMessageVisibilityBatchResultEntryList,
  ) $s = shape()) {
    $this->failed = $failed ?? ;
    $this->successful = $successful ?? ;
  }
}

class ChangeMessageVisibilityBatchResultEntry {
  public string $id;

  public function __construct(shape(
  ?'id' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

type ChangeMessageVisibilityBatchResultEntryList = vec<ChangeMessageVisibilityBatchResultEntry>;

class ChangeMessageVisibilityRequest {
  public string $queue_url;
  public string $receipt_handle;
  public int $visibility_timeout;

  public function __construct(shape(
  ?'queue_url' => string,
  ?'receipt_handle' => string,
  ?'visibility_timeout' => int,
  ) $s = shape()) {
    $this->queue_url = $queue_url ?? ;
    $this->receipt_handle = $receipt_handle ?? ;
    $this->visibility_timeout = $visibility_timeout ?? ;
  }
}

class CreateQueueRequest {
  public QueueAttributeMap $attributes;
  public string $queue_name;
  public TagMap $tags;

  public function __construct(shape(
  ?'attributes' => QueueAttributeMap,
  ?'queue_name' => string,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->queue_name = $queue_name ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateQueueResult {
  public string $queue_url;

  public function __construct(shape(
  ?'queue_url' => string,
  ) $s = shape()) {
    $this->queue_url = $queue_url ?? ;
  }
}

class DeleteMessageBatchRequest {
  public DeleteMessageBatchRequestEntryList $entries;
  public string $queue_url;

  public function __construct(shape(
  ?'entries' => DeleteMessageBatchRequestEntryList,
  ?'queue_url' => string,
  ) $s = shape()) {
    $this->entries = $entries ?? ;
    $this->queue_url = $queue_url ?? ;
  }
}

class DeleteMessageBatchRequestEntry {
  public string $id;
  public string $receipt_handle;

  public function __construct(shape(
  ?'id' => string,
  ?'receipt_handle' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->receipt_handle = $receipt_handle ?? ;
  }
}

type DeleteMessageBatchRequestEntryList = vec<DeleteMessageBatchRequestEntry>;

class DeleteMessageBatchResult {
  public BatchResultErrorEntryList $failed;
  public DeleteMessageBatchResultEntryList $successful;

  public function __construct(shape(
  ?'failed' => BatchResultErrorEntryList,
  ?'successful' => DeleteMessageBatchResultEntryList,
  ) $s = shape()) {
    $this->failed = $failed ?? ;
    $this->successful = $successful ?? ;
  }
}

class DeleteMessageBatchResultEntry {
  public string $id;

  public function __construct(shape(
  ?'id' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

type DeleteMessageBatchResultEntryList = vec<DeleteMessageBatchResultEntry>;

class DeleteMessageRequest {
  public string $queue_url;
  public string $receipt_handle;

  public function __construct(shape(
  ?'queue_url' => string,
  ?'receipt_handle' => string,
  ) $s = shape()) {
    $this->queue_url = $queue_url ?? ;
    $this->receipt_handle = $receipt_handle ?? ;
  }
}

class DeleteQueueRequest {
  public string $queue_url;

  public function __construct(shape(
  ?'queue_url' => string,
  ) $s = shape()) {
    $this->queue_url = $queue_url ?? ;
  }
}

class EmptyBatchRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetQueueAttributesRequest {
  public AttributeNameList $attribute_names;
  public string $queue_url;

  public function __construct(shape(
  ?'attribute_names' => AttributeNameList,
  ?'queue_url' => string,
  ) $s = shape()) {
    $this->attribute_names = $attribute_names ?? ;
    $this->queue_url = $queue_url ?? ;
  }
}

class GetQueueAttributesResult {
  public QueueAttributeMap $attributes;

  public function __construct(shape(
  ?'attributes' => QueueAttributeMap,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
  }
}

class GetQueueUrlRequest {
  public string $queue_name;
  public string $queue_owner_aws_account_id;

  public function __construct(shape(
  ?'queue_name' => string,
  ?'queue_owner_aws_account_id' => string,
  ) $s = shape()) {
    $this->queue_name = $queue_name ?? ;
    $this->queue_owner_aws_account_id = $queue_owner_aws_account_id ?? ;
  }
}

class GetQueueUrlResult {
  public string $queue_url;

  public function __construct(shape(
  ?'queue_url' => string,
  ) $s = shape()) {
    $this->queue_url = $queue_url ?? ;
  }
}

type Integer = int;

class InvalidAttributeName {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidBatchEntryId {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidIdFormat {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidMessageContents {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListDeadLetterSourceQueuesRequest {
  public string $queue_url;

  public function __construct(shape(
  ?'queue_url' => string,
  ) $s = shape()) {
    $this->queue_url = $queue_url ?? ;
  }
}

class ListDeadLetterSourceQueuesResult {
  public QueueUrlList $queue_urls;

  public function __construct(shape(
  ?'queue_urls' => QueueUrlList,
  ) $s = shape()) {
    $this->queue_urls = $queue_urls ?? ;
  }
}

class ListQueueTagsRequest {
  public string $queue_url;

  public function __construct(shape(
  ?'queue_url' => string,
  ) $s = shape()) {
    $this->queue_url = $queue_url ?? ;
  }
}

class ListQueueTagsResult {
  public TagMap $tags;

  public function __construct(shape(
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
  }
}

class ListQueuesRequest {
  public string $queue_name_prefix;

  public function __construct(shape(
  ?'queue_name_prefix' => string,
  ) $s = shape()) {
    $this->queue_name_prefix = $queue_name_prefix ?? ;
  }
}

class ListQueuesResult {
  public QueueUrlList $queue_urls;

  public function __construct(shape(
  ?'queue_urls' => QueueUrlList,
  ) $s = shape()) {
    $this->queue_urls = $queue_urls ?? ;
  }
}

class Message {
  public MessageSystemAttributeMap $attributes;
  public string $body;
  public string $md_5_of_body;
  public string $md_5_of_message_attributes;
  public MessageBodyAttributeMap $message_attributes;
  public string $message_id;
  public string $receipt_handle;

  public function __construct(shape(
  ?'attributes' => MessageSystemAttributeMap,
  ?'body' => string,
  ?'md_5_of_body' => string,
  ?'md_5_of_message_attributes' => string,
  ?'message_attributes' => MessageBodyAttributeMap,
  ?'message_id' => string,
  ?'receipt_handle' => string,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->body = $body ?? ;
    $this->md_5_of_body = $md_5_of_body ?? ;
    $this->md_5_of_message_attributes = $md_5_of_message_attributes ?? ;
    $this->message_attributes = $message_attributes ?? ;
    $this->message_id = $message_id ?? ;
    $this->receipt_handle = $receipt_handle ?? ;
  }
}

type MessageAttributeName = string;

type MessageAttributeNameList = vec<MessageAttributeName>;

class MessageAttributeValue {
  public BinaryList $binary_list_values;
  public Binary $binary_value;
  public string $data_type;
  public StringList $string_list_values;
  public string $string_value;

  public function __construct(shape(
  ?'binary_list_values' => BinaryList,
  ?'binary_value' => Binary,
  ?'data_type' => string,
  ?'string_list_values' => StringList,
  ?'string_value' => string,
  ) $s = shape()) {
    $this->binary_list_values = $binary_list_values ?? ;
    $this->binary_value = $binary_value ?? ;
    $this->data_type = $data_type ?? ;
    $this->string_list_values = $string_list_values ?? ;
    $this->string_value = $string_value ?? ;
  }
}

type MessageBodyAttributeMap = dict<String, MessageAttributeValue>;

type MessageBodySystemAttributeMap = dict<MessageSystemAttributeNameForSends, MessageSystemAttributeValue>;

type MessageList = vec<Message>;

class MessageNotInflight {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type MessageSystemAttributeMap = dict<MessageSystemAttributeName, String>;

type MessageSystemAttributeName = string;

type MessageSystemAttributeNameForSends = string;

class MessageSystemAttributeValue {
  public BinaryList $binary_list_values;
  public Binary $binary_value;
  public string $data_type;
  public StringList $string_list_values;
  public string $string_value;

  public function __construct(shape(
  ?'binary_list_values' => BinaryList,
  ?'binary_value' => Binary,
  ?'data_type' => string,
  ?'string_list_values' => StringList,
  ?'string_value' => string,
  ) $s = shape()) {
    $this->binary_list_values = $binary_list_values ?? ;
    $this->binary_value = $binary_value ?? ;
    $this->data_type = $data_type ?? ;
    $this->string_list_values = $string_list_values ?? ;
    $this->string_value = $string_value ?? ;
  }
}

class OverLimit {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PurgeQueueInProgress {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PurgeQueueRequest {
  public string $queue_url;

  public function __construct(shape(
  ?'queue_url' => string,
  ) $s = shape()) {
    $this->queue_url = $queue_url ?? ;
  }
}

type QueueAttributeMap = dict<QueueAttributeName, String>;

type QueueAttributeName = string;

class QueueDeletedRecently {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class QueueDoesNotExist {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class QueueNameExists {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type QueueUrlList = vec<String>;

class ReceiptHandleIsInvalid {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ReceiveMessageRequest {
  public AttributeNameList $attribute_names;
  public int $max_number_of_messages;
  public MessageAttributeNameList $message_attribute_names;
  public string $queue_url;
  public string $receive_request_attempt_id;
  public int $visibility_timeout;
  public int $wait_time_seconds;

  public function __construct(shape(
  ?'attribute_names' => AttributeNameList,
  ?'max_number_of_messages' => int,
  ?'message_attribute_names' => MessageAttributeNameList,
  ?'queue_url' => string,
  ?'receive_request_attempt_id' => string,
  ?'visibility_timeout' => int,
  ?'wait_time_seconds' => int,
  ) $s = shape()) {
    $this->attribute_names = $attribute_names ?? ;
    $this->max_number_of_messages = $max_number_of_messages ?? ;
    $this->message_attribute_names = $message_attribute_names ?? ;
    $this->queue_url = $queue_url ?? ;
    $this->receive_request_attempt_id = $receive_request_attempt_id ?? ;
    $this->visibility_timeout = $visibility_timeout ?? ;
    $this->wait_time_seconds = $wait_time_seconds ?? ;
  }
}

class ReceiveMessageResult {
  public MessageList $messages;

  public function __construct(shape(
  ?'messages' => MessageList,
  ) $s = shape()) {
    $this->messages = $messages ?? ;
  }
}

class RemovePermissionRequest {
  public string $label;
  public string $queue_url;

  public function __construct(shape(
  ?'label' => string,
  ?'queue_url' => string,
  ) $s = shape()) {
    $this->label = $label ?? ;
    $this->queue_url = $queue_url ?? ;
  }
}

class SendMessageBatchRequest {
  public SendMessageBatchRequestEntryList $entries;
  public string $queue_url;

  public function __construct(shape(
  ?'entries' => SendMessageBatchRequestEntryList,
  ?'queue_url' => string,
  ) $s = shape()) {
    $this->entries = $entries ?? ;
    $this->queue_url = $queue_url ?? ;
  }
}

class SendMessageBatchRequestEntry {
  public int $delay_seconds;
  public string $id;
  public MessageBodyAttributeMap $message_attributes;
  public string $message_body;
  public string $message_deduplication_id;
  public string $message_group_id;
  public MessageBodySystemAttributeMap $message_system_attributes;

  public function __construct(shape(
  ?'delay_seconds' => int,
  ?'id' => string,
  ?'message_attributes' => MessageBodyAttributeMap,
  ?'message_body' => string,
  ?'message_deduplication_id' => string,
  ?'message_group_id' => string,
  ?'message_system_attributes' => MessageBodySystemAttributeMap,
  ) $s = shape()) {
    $this->delay_seconds = $delay_seconds ?? ;
    $this->id = $id ?? ;
    $this->message_attributes = $message_attributes ?? ;
    $this->message_body = $message_body ?? ;
    $this->message_deduplication_id = $message_deduplication_id ?? ;
    $this->message_group_id = $message_group_id ?? ;
    $this->message_system_attributes = $message_system_attributes ?? ;
  }
}

type SendMessageBatchRequestEntryList = vec<SendMessageBatchRequestEntry>;

class SendMessageBatchResult {
  public BatchResultErrorEntryList $failed;
  public SendMessageBatchResultEntryList $successful;

  public function __construct(shape(
  ?'failed' => BatchResultErrorEntryList,
  ?'successful' => SendMessageBatchResultEntryList,
  ) $s = shape()) {
    $this->failed = $failed ?? ;
    $this->successful = $successful ?? ;
  }
}

class SendMessageBatchResultEntry {
  public string $id;
  public string $md_5_of_message_attributes;
  public string $md_5_of_message_body;
  public string $md_5_of_message_system_attributes;
  public string $message_id;
  public string $sequence_number;

  public function __construct(shape(
  ?'id' => string,
  ?'md_5_of_message_attributes' => string,
  ?'md_5_of_message_body' => string,
  ?'md_5_of_message_system_attributes' => string,
  ?'message_id' => string,
  ?'sequence_number' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->md_5_of_message_attributes = $md_5_of_message_attributes ?? ;
    $this->md_5_of_message_body = $md_5_of_message_body ?? ;
    $this->md_5_of_message_system_attributes = $md_5_of_message_system_attributes ?? ;
    $this->message_id = $message_id ?? ;
    $this->sequence_number = $sequence_number ?? ;
  }
}

type SendMessageBatchResultEntryList = vec<SendMessageBatchResultEntry>;

class SendMessageRequest {
  public int $delay_seconds;
  public MessageBodyAttributeMap $message_attributes;
  public string $message_body;
  public string $message_deduplication_id;
  public string $message_group_id;
  public MessageBodySystemAttributeMap $message_system_attributes;
  public string $queue_url;

  public function __construct(shape(
  ?'delay_seconds' => int,
  ?'message_attributes' => MessageBodyAttributeMap,
  ?'message_body' => string,
  ?'message_deduplication_id' => string,
  ?'message_group_id' => string,
  ?'message_system_attributes' => MessageBodySystemAttributeMap,
  ?'queue_url' => string,
  ) $s = shape()) {
    $this->delay_seconds = $delay_seconds ?? ;
    $this->message_attributes = $message_attributes ?? ;
    $this->message_body = $message_body ?? ;
    $this->message_deduplication_id = $message_deduplication_id ?? ;
    $this->message_group_id = $message_group_id ?? ;
    $this->message_system_attributes = $message_system_attributes ?? ;
    $this->queue_url = $queue_url ?? ;
  }
}

class SendMessageResult {
  public string $md_5_of_message_attributes;
  public string $md_5_of_message_body;
  public string $md_5_of_message_system_attributes;
  public string $message_id;
  public string $sequence_number;

  public function __construct(shape(
  ?'md_5_of_message_attributes' => string,
  ?'md_5_of_message_body' => string,
  ?'md_5_of_message_system_attributes' => string,
  ?'message_id' => string,
  ?'sequence_number' => string,
  ) $s = shape()) {
    $this->md_5_of_message_attributes = $md_5_of_message_attributes ?? ;
    $this->md_5_of_message_body = $md_5_of_message_body ?? ;
    $this->md_5_of_message_system_attributes = $md_5_of_message_system_attributes ?? ;
    $this->message_id = $message_id ?? ;
    $this->sequence_number = $sequence_number ?? ;
  }
}

class SetQueueAttributesRequest {
  public QueueAttributeMap $attributes;
  public string $queue_url;

  public function __construct(shape(
  ?'attributes' => QueueAttributeMap,
  ?'queue_url' => string,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->queue_url = $queue_url ?? ;
  }
}

type String = string;

type StringList = vec<String>;

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagQueueRequest {
  public string $queue_url;
  public TagMap $tags;

  public function __construct(shape(
  ?'queue_url' => string,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->queue_url = $queue_url ?? ;
    $this->tags = $tags ?? ;
  }
}

type TagValue = string;

class TooManyEntriesInBatchRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UnsupportedOperation {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UntagQueueRequest {
  public string $queue_url;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'queue_url' => string,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->queue_url = $queue_url ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}


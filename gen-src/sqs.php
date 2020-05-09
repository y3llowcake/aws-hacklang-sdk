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



class AddPermissionRequest {
  public AWSAccountIdList $aws_account_ids;
  public ActionNameList $actions;
  public string $label;
  public string $queue_url;
}


class BatchEntryIdsNotDistinct {
}

class BatchRequestTooLong {
}

class BatchResultErrorEntry {
  public string $code;
  public string $id;
  public string $message;
  public boolean $sender_fault;
}


class Binary {
}

class BinaryList {
}

class Boolean {
}

class ChangeMessageVisibilityBatchRequest {
  public ChangeMessageVisibilityBatchRequestEntryList $entries;
  public string $queue_url;
}

class ChangeMessageVisibilityBatchRequestEntry {
  public string $id;
  public string $receipt_handle;
  public int $visibility_timeout;
}


class ChangeMessageVisibilityBatchResult {
  public BatchResultErrorEntryList $failed;
  public ChangeMessageVisibilityBatchResultEntryList $successful;
}

class ChangeMessageVisibilityBatchResultEntry {
  public string $id;
}


class ChangeMessageVisibilityRequest {
  public string $queue_url;
  public string $receipt_handle;
  public int $visibility_timeout;
}

class CreateQueueRequest {
  public QueueAttributeMap $attributes;
  public string $queue_name;
  public TagMap $tags;
}

class CreateQueueResult {
  public string $queue_url;
}

class DeleteMessageBatchRequest {
  public DeleteMessageBatchRequestEntryList $entries;
  public string $queue_url;
}

class DeleteMessageBatchRequestEntry {
  public string $id;
  public string $receipt_handle;
}


class DeleteMessageBatchResult {
  public BatchResultErrorEntryList $failed;
  public DeleteMessageBatchResultEntryList $successful;
}

class DeleteMessageBatchResultEntry {
  public string $id;
}


class DeleteMessageRequest {
  public string $queue_url;
  public string $receipt_handle;
}

class DeleteQueueRequest {
  public string $queue_url;
}

class EmptyBatchRequest {
}

class GetQueueAttributesRequest {
  public AttributeNameList $attribute_names;
  public string $queue_url;
}

class GetQueueAttributesResult {
  public QueueAttributeMap $attributes;
}

class GetQueueUrlRequest {
  public string $queue_name;
  public string $queue_owner_aws_account_id;
}

class GetQueueUrlResult {
  public string $queue_url;
}

class Integer {
}

class InvalidAttributeName {
}

class InvalidBatchEntryId {
}

class InvalidIdFormat {
}

class InvalidMessageContents {
}

class ListDeadLetterSourceQueuesRequest {
  public string $queue_url;
}

class ListDeadLetterSourceQueuesResult {
  public QueueUrlList $queue_urls;
}

class ListQueueTagsRequest {
  public string $queue_url;
}

class ListQueueTagsResult {
  public TagMap $tags;
}

class ListQueuesRequest {
  public string $queue_name_prefix;
}

class ListQueuesResult {
  public QueueUrlList $queue_urls;
}

class Message {
  public MessageSystemAttributeMap $attributes;
  public string $body;
  public string $md_5_of_body;
  public string $md_5_of_message_attributes;
  public MessageBodyAttributeMap $message_attributes;
  public string $message_id;
  public string $receipt_handle;
}

class MessageAttributeName {
}


class MessageAttributeValue {
  public BinaryList $binary_list_values;
  public Binary $binary_value;
  public string $data_type;
  public StringList $string_list_values;
  public string $string_value;
}




class MessageNotInflight {
}


class MessageSystemAttributeName {
}

class MessageSystemAttributeNameForSends {
}

class MessageSystemAttributeValue {
  public BinaryList $binary_list_values;
  public Binary $binary_value;
  public string $data_type;
  public StringList $string_list_values;
  public string $string_value;
}

class OverLimit {
}

class PurgeQueueInProgress {
}

class PurgeQueueRequest {
  public string $queue_url;
}


class QueueAttributeName {
}

class QueueDeletedRecently {
}

class QueueDoesNotExist {
}

class QueueNameExists {
}


class ReceiptHandleIsInvalid {
}

class ReceiveMessageRequest {
  public AttributeNameList $attribute_names;
  public int $max_number_of_messages;
  public MessageAttributeNameList $message_attribute_names;
  public string $queue_url;
  public string $receive_request_attempt_id;
  public int $visibility_timeout;
  public int $wait_time_seconds;
}

class ReceiveMessageResult {
  public MessageList $messages;
}

class RemovePermissionRequest {
  public string $label;
  public string $queue_url;
}

class SendMessageBatchRequest {
  public SendMessageBatchRequestEntryList $entries;
  public string $queue_url;
}

class SendMessageBatchRequestEntry {
  public int $delay_seconds;
  public string $id;
  public MessageBodyAttributeMap $message_attributes;
  public string $message_body;
  public string $message_deduplication_id;
  public string $message_group_id;
  public MessageBodySystemAttributeMap $message_system_attributes;
}


class SendMessageBatchResult {
  public BatchResultErrorEntryList $failed;
  public SendMessageBatchResultEntryList $successful;
}

class SendMessageBatchResultEntry {
  public string $id;
  public string $md_5_of_message_attributes;
  public string $md_5_of_message_body;
  public string $md_5_of_message_system_attributes;
  public string $message_id;
  public string $sequence_number;
}


class SendMessageRequest {
  public int $delay_seconds;
  public MessageBodyAttributeMap $message_attributes;
  public string $message_body;
  public string $message_deduplication_id;
  public string $message_group_id;
  public MessageBodySystemAttributeMap $message_system_attributes;
  public string $queue_url;
}

class SendMessageResult {
  public string $md_5_of_message_attributes;
  public string $md_5_of_message_body;
  public string $md_5_of_message_system_attributes;
  public string $message_id;
  public string $sequence_number;
}

class SetQueueAttributesRequest {
  public QueueAttributeMap $attributes;
  public string $queue_url;
}

class String {
}

class StringList {
}

class TagKey {
}



class TagQueueRequest {
  public string $queue_url;
  public TagMap $tags;
}

class TagValue {
}

class TooManyEntriesInBatchRequest {
}

class UnsupportedOperation {
}

class UntagQueueRequest {
  public string $queue_url;
  public TagKeyList $tag_keys;
}


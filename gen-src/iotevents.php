<?hh // strict
namespace slack\aws\iotevents;

interface IoTEvents {
  public function CreateDetectorModel(CreateDetectorModelRequest $in): Awaitable<\Errors\Result<CreateDetectorModelResponse>>;
  public function CreateInput(CreateInputRequest $in): Awaitable<\Errors\Result<CreateInputResponse>>;
  public function DeleteDetectorModel(DeleteDetectorModelRequest $in): Awaitable<\Errors\Result<DeleteDetectorModelResponse>>;
  public function DeleteInput(DeleteInputRequest $in): Awaitable<\Errors\Result<DeleteInputResponse>>;
  public function DescribeDetectorModel(DescribeDetectorModelRequest $in): Awaitable<\Errors\Result<DescribeDetectorModelResponse>>;
  public function DescribeInput(DescribeInputRequest $in): Awaitable<\Errors\Result<DescribeInputResponse>>;
  public function DescribeLoggingOptions(DescribeLoggingOptionsRequest $in): Awaitable<\Errors\Result<DescribeLoggingOptionsResponse>>;
  public function ListDetectorModelVersions(ListDetectorModelVersionsRequest $in): Awaitable<\Errors\Result<ListDetectorModelVersionsResponse>>;
  public function ListDetectorModels(ListDetectorModelsRequest $in): Awaitable<\Errors\Result<ListDetectorModelsResponse>>;
  public function ListInputs(ListInputsRequest $in): Awaitable<\Errors\Result<ListInputsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function PutLoggingOptions(PutLoggingOptionsRequest $in): Awaitable<\Errors\Error>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateDetectorModel(UpdateDetectorModelRequest $in): Awaitable<\Errors\Result<UpdateDetectorModelResponse>>;
  public function UpdateInput(UpdateInputRequest $in): Awaitable<\Errors\Result<UpdateInputResponse>>;
  public function VerifyResourcesExistForTagris(TagrisVerifyResourcesExistInput $in): Awaitable<\Errors\Result<TagrisVerifyResourcesExistOutput>>;
}

class Action {
  public ?ClearTimerAction $clear_timer;
  public ?DynamoDBAction $dynamo_db;
  public ?DynamoDBv2Action $dynamo_d_bv_2;
  public ?FirehoseAction $firehose;
  public ?IotEventsAction $iot_events;
  public ?IotSiteWiseAction $iot_site_wise;
  public ?IotTopicPublishAction $iot_topic_publish;
  public ?LambdaAction $lambda;
  public ?ResetTimerAction $reset_timer;
  public ?SetTimerAction $set_timer;
  public ?SetVariableAction $set_variable;
  public ?SNSTopicPublishAction $sns;
  public ?SqsAction $sqs;

  public function __construct(shape(
    ?'clear_timer' => ?ClearTimerAction,
    ?'dynamo_db' => ?DynamoDBAction,
    ?'dynamo_d_bv_2' => ?DynamoDBv2Action,
    ?'firehose' => ?FirehoseAction,
    ?'iot_events' => ?IotEventsAction,
    ?'iot_site_wise' => ?IotSiteWiseAction,
    ?'iot_topic_publish' => ?IotTopicPublishAction,
    ?'lambda' => ?LambdaAction,
    ?'reset_timer' => ?ResetTimerAction,
    ?'set_timer' => ?SetTimerAction,
    ?'set_variable' => ?SetVariableAction,
    ?'sns' => ?SNSTopicPublishAction,
    ?'sqs' => ?SqsAction,
  ) $s = shape()) {
    $this->clear_timer = $s['clear_timer'] ?? null;
    $this->dynamo_db = $s['dynamo_db'] ?? null;
    $this->dynamo_d_bv_2 = $s['dynamo_d_bv_2'] ?? null;
    $this->firehose = $s['firehose'] ?? null;
    $this->iot_events = $s['iot_events'] ?? null;
    $this->iot_site_wise = $s['iot_site_wise'] ?? null;
    $this->iot_topic_publish = $s['iot_topic_publish'] ?? null;
    $this->lambda = $s['lambda'] ?? null;
    $this->reset_timer = $s['reset_timer'] ?? null;
    $this->set_timer = $s['set_timer'] ?? null;
    $this->set_variable = $s['set_variable'] ?? null;
    $this->sns = $s['sns'] ?? null;
    $this->sqs = $s['sqs'] ?? null;
  }
}

type Actions = vec<Action>;

type AmazonResourceName = string;

type AssetId = string;

type AssetPropertyAlias = string;

type AssetPropertyBooleanValue = string;

type AssetPropertyDoubleValue = string;

type AssetPropertyEntryId = string;

type AssetPropertyId = string;

type AssetPropertyIntegerValue = string;

type AssetPropertyOffsetInNanos = string;

type AssetPropertyQuality = string;

type AssetPropertyStringValue = string;

type AssetPropertyTimeInSeconds = string;

class AssetPropertyTimestamp {
  public ?AssetPropertyOffsetInNanos $offset_in_nanos;
  public ?AssetPropertyTimeInSeconds $time_in_seconds;

  public function __construct(shape(
    ?'offset_in_nanos' => ?AssetPropertyOffsetInNanos,
    ?'time_in_seconds' => ?AssetPropertyTimeInSeconds,
  ) $s = shape()) {
    $this->offset_in_nanos = $s['offset_in_nanos'] ?? '';
    $this->time_in_seconds = $s['time_in_seconds'] ?? '';
  }
}

class AssetPropertyValue {
  public ?AssetPropertyQuality $quality;
  public ?AssetPropertyTimestamp $timestamp;
  public ?AssetPropertyVariant $value;

  public function __construct(shape(
    ?'quality' => ?AssetPropertyQuality,
    ?'timestamp' => ?AssetPropertyTimestamp,
    ?'value' => ?AssetPropertyVariant,
  ) $s = shape()) {
    $this->quality = $s['quality'] ?? '';
    $this->timestamp = $s['timestamp'] ?? null;
    $this->value = $s['value'] ?? null;
  }
}

class AssetPropertyVariant {
  public ?AssetPropertyBooleanValue $boolean_value;
  public ?AssetPropertyDoubleValue $double_value;
  public ?AssetPropertyIntegerValue $integer_value;
  public ?AssetPropertyStringValue $string_value;

  public function __construct(shape(
    ?'boolean_value' => ?AssetPropertyBooleanValue,
    ?'double_value' => ?AssetPropertyDoubleValue,
    ?'integer_value' => ?AssetPropertyIntegerValue,
    ?'string_value' => ?AssetPropertyStringValue,
  ) $s = shape()) {
    $this->boolean_value = $s['boolean_value'] ?? '';
    $this->double_value = $s['double_value'] ?? '';
    $this->integer_value = $s['integer_value'] ?? '';
    $this->string_value = $s['string_value'] ?? '';
  }
}

class Attribute {
  public ?AttributeJsonPath $json_path;

  public function __construct(shape(
    ?'json_path' => ?AttributeJsonPath,
  ) $s = shape()) {
    $this->json_path = $s['json_path'] ?? '';
  }
}

type AttributeJsonPath = string;

type Attributes = vec<Attribute>;

class ClearTimerAction {
  public ?TimerName $timer_name;

  public function __construct(shape(
    ?'timer_name' => ?TimerName,
  ) $s = shape()) {
    $this->timer_name = $s['timer_name'] ?? '';
  }
}

type Condition = string;

type ContentExpression = string;

class CreateDetectorModelRequest {
  public ?DetectorModelDefinition $detector_model_definition;
  public ?DetectorModelDescription $detector_model_description;
  public ?DetectorModelName $detector_model_name;
  public ?EvaluationMethod $evaluation_method;
  public ?AttributeJsonPath $key;
  public ?AmazonResourceName $role_arn;
  public ?Tags $tags;

  public function __construct(shape(
    ?'detector_model_definition' => ?DetectorModelDefinition,
    ?'detector_model_description' => ?DetectorModelDescription,
    ?'detector_model_name' => ?DetectorModelName,
    ?'evaluation_method' => ?EvaluationMethod,
    ?'key' => ?AttributeJsonPath,
    ?'role_arn' => ?AmazonResourceName,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->detector_model_definition = $s['detector_model_definition'] ?? null;
    $this->detector_model_description = $s['detector_model_description'] ?? '';
    $this->detector_model_name = $s['detector_model_name'] ?? '';
    $this->evaluation_method = $s['evaluation_method'] ?? '';
    $this->key = $s['key'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateDetectorModelResponse {
  public ?DetectorModelConfiguration $detector_model_configuration;

  public function __construct(shape(
    ?'detector_model_configuration' => ?DetectorModelConfiguration,
  ) $s = shape()) {
    $this->detector_model_configuration = $s['detector_model_configuration'] ?? null;
  }
}

class CreateInputRequest {
  public ?InputDefinition $input_definition;
  public ?InputDescription $input_description;
  public ?InputName $input_name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'input_definition' => ?InputDefinition,
    ?'input_description' => ?InputDescription,
    ?'input_name' => ?InputName,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->input_definition = $s['input_definition'] ?? null;
    $this->input_description = $s['input_description'] ?? '';
    $this->input_name = $s['input_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateInputResponse {
  public ?InputConfiguration $input_configuration;

  public function __construct(shape(
    ?'input_configuration' => ?InputConfiguration,
  ) $s = shape()) {
    $this->input_configuration = $s['input_configuration'] ?? null;
  }
}

class DeleteDetectorModelRequest {
  public ?DetectorModelName $detector_model_name;

  public function __construct(shape(
    ?'detector_model_name' => ?DetectorModelName,
  ) $s = shape()) {
    $this->detector_model_name = $s['detector_model_name'] ?? '';
  }
}

class DeleteDetectorModelResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteInputRequest {
  public ?InputName $input_name;

  public function __construct(shape(
    ?'input_name' => ?InputName,
  ) $s = shape()) {
    $this->input_name = $s['input_name'] ?? '';
  }
}

class DeleteInputResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeliveryStreamName = string;

class DescribeDetectorModelRequest {
  public ?DetectorModelName $detector_model_name;
  public ?DetectorModelVersion $detector_model_version;

  public function __construct(shape(
    ?'detector_model_name' => ?DetectorModelName,
    ?'detector_model_version' => ?DetectorModelVersion,
  ) $s = shape()) {
    $this->detector_model_name = $s['detector_model_name'] ?? '';
    $this->detector_model_version = $s['detector_model_version'] ?? '';
  }
}

class DescribeDetectorModelResponse {
  public ?DetectorModel $detector_model;

  public function __construct(shape(
    ?'detector_model' => ?DetectorModel,
  ) $s = shape()) {
    $this->detector_model = $s['detector_model'] ?? null;
  }
}

class DescribeInputRequest {
  public ?InputName $input_name;

  public function __construct(shape(
    ?'input_name' => ?InputName,
  ) $s = shape()) {
    $this->input_name = $s['input_name'] ?? '';
  }
}

class DescribeInputResponse {
  public ?Input $input;

  public function __construct(shape(
    ?'input' => ?Input,
  ) $s = shape()) {
    $this->input = $s['input'] ?? null;
  }
}

class DescribeLoggingOptionsRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeLoggingOptionsResponse {
  public ?LoggingOptions $logging_options;

  public function __construct(shape(
    ?'logging_options' => ?LoggingOptions,
  ) $s = shape()) {
    $this->logging_options = $s['logging_options'] ?? null;
  }
}

class DetectorDebugOption {
  public ?DetectorModelName $detector_model_name;
  public ?KeyValue $key_value;

  public function __construct(shape(
    ?'detector_model_name' => ?DetectorModelName,
    ?'key_value' => ?KeyValue,
  ) $s = shape()) {
    $this->detector_model_name = $s['detector_model_name'] ?? '';
    $this->key_value = $s['key_value'] ?? '';
  }
}

type DetectorDebugOptions = vec<DetectorDebugOption>;

class DetectorModel {
  public ?DetectorModelConfiguration $detector_model_configuration;
  public ?DetectorModelDefinition $detector_model_definition;

  public function __construct(shape(
    ?'detector_model_configuration' => ?DetectorModelConfiguration,
    ?'detector_model_definition' => ?DetectorModelDefinition,
  ) $s = shape()) {
    $this->detector_model_configuration = $s['detector_model_configuration'] ?? null;
    $this->detector_model_definition = $s['detector_model_definition'] ?? null;
  }
}

type DetectorModelArn = string;

class DetectorModelConfiguration {
  public ?Timestamp $creation_time;
  public ?DetectorModelArn $detector_model_arn;
  public ?DetectorModelDescription $detector_model_description;
  public ?DetectorModelName $detector_model_name;
  public ?DetectorModelVersion $detector_model_version;
  public ?EvaluationMethod $evaluation_method;
  public ?AttributeJsonPath $key;
  public ?Timestamp $last_update_time;
  public ?AmazonResourceName $role_arn;
  public ?DetectorModelVersionStatus $status;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'detector_model_arn' => ?DetectorModelArn,
    ?'detector_model_description' => ?DetectorModelDescription,
    ?'detector_model_name' => ?DetectorModelName,
    ?'detector_model_version' => ?DetectorModelVersion,
    ?'evaluation_method' => ?EvaluationMethod,
    ?'key' => ?AttributeJsonPath,
    ?'last_update_time' => ?Timestamp,
    ?'role_arn' => ?AmazonResourceName,
    ?'status' => ?DetectorModelVersionStatus,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->detector_model_arn = $s['detector_model_arn'] ?? '';
    $this->detector_model_description = $s['detector_model_description'] ?? '';
    $this->detector_model_name = $s['detector_model_name'] ?? '';
    $this->detector_model_version = $s['detector_model_version'] ?? '';
    $this->evaluation_method = $s['evaluation_method'] ?? '';
    $this->key = $s['key'] ?? '';
    $this->last_update_time = $s['last_update_time'] ?? 0;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DetectorModelDefinition {
  public ?StateName $initial_state_name;
  public ?States $states;

  public function __construct(shape(
    ?'initial_state_name' => ?StateName,
    ?'states' => ?States,
  ) $s = shape()) {
    $this->initial_state_name = $s['initial_state_name'] ?? '';
    $this->states = $s['states'] ?? vec[];
  }
}

type DetectorModelDescription = string;

type DetectorModelName = string;

type DetectorModelSummaries = vec<DetectorModelSummary>;

class DetectorModelSummary {
  public ?Timestamp $creation_time;
  public ?DetectorModelDescription $detector_model_description;
  public ?DetectorModelName $detector_model_name;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'detector_model_description' => ?DetectorModelDescription,
    ?'detector_model_name' => ?DetectorModelName,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->detector_model_description = $s['detector_model_description'] ?? '';
    $this->detector_model_name = $s['detector_model_name'] ?? '';
  }
}

type DetectorModelVersion = string;

type DetectorModelVersionStatus = string;

type DetectorModelVersionSummaries = vec<DetectorModelVersionSummary>;

class DetectorModelVersionSummary {
  public ?Timestamp $creation_time;
  public ?DetectorModelArn $detector_model_arn;
  public ?DetectorModelName $detector_model_name;
  public ?DetectorModelVersion $detector_model_version;
  public ?EvaluationMethod $evaluation_method;
  public ?Timestamp $last_update_time;
  public ?AmazonResourceName $role_arn;
  public ?DetectorModelVersionStatus $status;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'detector_model_arn' => ?DetectorModelArn,
    ?'detector_model_name' => ?DetectorModelName,
    ?'detector_model_version' => ?DetectorModelVersion,
    ?'evaluation_method' => ?EvaluationMethod,
    ?'last_update_time' => ?Timestamp,
    ?'role_arn' => ?AmazonResourceName,
    ?'status' => ?DetectorModelVersionStatus,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->detector_model_arn = $s['detector_model_arn'] ?? '';
    $this->detector_model_name = $s['detector_model_name'] ?? '';
    $this->detector_model_version = $s['detector_model_version'] ?? '';
    $this->evaluation_method = $s['evaluation_method'] ?? '';
    $this->last_update_time = $s['last_update_time'] ?? 0;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DynamoDBAction {
  public ?DynamoKeyField $hash_key_field;
  public ?DynamoKeyType $hash_key_type;
  public ?DynamoKeyValue $hash_key_value;
  public ?DynamoOperation $operation;
  public ?Payload $payload;
  public ?DynamoKeyField $payload_field;
  public ?DynamoKeyField $range_key_field;
  public ?DynamoKeyType $range_key_type;
  public ?DynamoKeyValue $range_key_value;
  public ?DynamoTableName $table_name;

  public function __construct(shape(
    ?'hash_key_field' => ?DynamoKeyField,
    ?'hash_key_type' => ?DynamoKeyType,
    ?'hash_key_value' => ?DynamoKeyValue,
    ?'operation' => ?DynamoOperation,
    ?'payload' => ?Payload,
    ?'payload_field' => ?DynamoKeyField,
    ?'range_key_field' => ?DynamoKeyField,
    ?'range_key_type' => ?DynamoKeyType,
    ?'range_key_value' => ?DynamoKeyValue,
    ?'table_name' => ?DynamoTableName,
  ) $s = shape()) {
    $this->hash_key_field = $s['hash_key_field'] ?? '';
    $this->hash_key_type = $s['hash_key_type'] ?? '';
    $this->hash_key_value = $s['hash_key_value'] ?? '';
    $this->operation = $s['operation'] ?? '';
    $this->payload = $s['payload'] ?? null;
    $this->payload_field = $s['payload_field'] ?? '';
    $this->range_key_field = $s['range_key_field'] ?? '';
    $this->range_key_type = $s['range_key_type'] ?? '';
    $this->range_key_value = $s['range_key_value'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

class DynamoDBv2Action {
  public ?Payload $payload;
  public ?DynamoTableName $table_name;

  public function __construct(shape(
    ?'payload' => ?Payload,
    ?'table_name' => ?DynamoTableName,
  ) $s = shape()) {
    $this->payload = $s['payload'] ?? null;
    $this->table_name = $s['table_name'] ?? '';
  }
}

type DynamoKeyField = string;

type DynamoKeyType = string;

type DynamoKeyValue = string;

type DynamoOperation = string;

type DynamoTableName = string;

type EvaluationMethod = string;

class Event {
  public ?Actions $actions;
  public ?Condition $condition;
  public ?EventName $event_name;

  public function __construct(shape(
    ?'actions' => ?Actions,
    ?'condition' => ?Condition,
    ?'event_name' => ?EventName,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? vec[];
    $this->condition = $s['condition'] ?? '';
    $this->event_name = $s['event_name'] ?? '';
  }
}

type EventName = string;

type Events = vec<Event>;

class FirehoseAction {
  public ?DeliveryStreamName $delivery_stream_name;
  public ?Payload $payload;
  public ?FirehoseSeparator $separator;

  public function __construct(shape(
    ?'delivery_stream_name' => ?DeliveryStreamName,
    ?'payload' => ?Payload,
    ?'separator' => ?FirehoseSeparator,
  ) $s = shape()) {
    $this->delivery_stream_name = $s['delivery_stream_name'] ?? '';
    $this->payload = $s['payload'] ?? null;
    $this->separator = $s['separator'] ?? '';
  }
}

type FirehoseSeparator = string;

class Input {
  public ?InputConfiguration $input_configuration;
  public ?InputDefinition $input_definition;

  public function __construct(shape(
    ?'input_configuration' => ?InputConfiguration,
    ?'input_definition' => ?InputDefinition,
  ) $s = shape()) {
    $this->input_configuration = $s['input_configuration'] ?? null;
    $this->input_definition = $s['input_definition'] ?? null;
  }
}

type InputArn = string;

class InputConfiguration {
  public ?Timestamp $creation_time;
  public ?InputArn $input_arn;
  public ?InputDescription $input_description;
  public ?InputName $input_name;
  public ?Timestamp $last_update_time;
  public ?InputStatus $status;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'input_arn' => ?InputArn,
    ?'input_description' => ?InputDescription,
    ?'input_name' => ?InputName,
    ?'last_update_time' => ?Timestamp,
    ?'status' => ?InputStatus,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->input_arn = $s['input_arn'] ?? '';
    $this->input_description = $s['input_description'] ?? '';
    $this->input_name = $s['input_name'] ?? '';
    $this->last_update_time = $s['last_update_time'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

class InputDefinition {
  public ?Attributes $attributes;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
  }
}

type InputDescription = string;

type InputName = string;

type InputStatus = string;

type InputSummaries = vec<InputSummary>;

class InputSummary {
  public ?Timestamp $creation_time;
  public ?InputArn $input_arn;
  public ?InputDescription $input_description;
  public ?InputName $input_name;
  public ?Timestamp $last_update_time;
  public ?InputStatus $status;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'input_arn' => ?InputArn,
    ?'input_description' => ?InputDescription,
    ?'input_name' => ?InputName,
    ?'last_update_time' => ?Timestamp,
    ?'status' => ?InputStatus,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->input_arn = $s['input_arn'] ?? '';
    $this->input_description = $s['input_description'] ?? '';
    $this->input_name = $s['input_name'] ?? '';
    $this->last_update_time = $s['last_update_time'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

class InternalFailureException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidRequestException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class IotEventsAction {
  public ?InputName $input_name;
  public ?Payload $payload;

  public function __construct(shape(
    ?'input_name' => ?InputName,
    ?'payload' => ?Payload,
  ) $s = shape()) {
    $this->input_name = $s['input_name'] ?? '';
    $this->payload = $s['payload'] ?? null;
  }
}

class IotSiteWiseAction {
  public ?AssetId $asset_id;
  public ?AssetPropertyEntryId $entry_id;
  public ?AssetPropertyAlias $property_alias;
  public ?AssetPropertyId $property_id;
  public ?AssetPropertyValue $property_value;

  public function __construct(shape(
    ?'asset_id' => ?AssetId,
    ?'entry_id' => ?AssetPropertyEntryId,
    ?'property_alias' => ?AssetPropertyAlias,
    ?'property_id' => ?AssetPropertyId,
    ?'property_value' => ?AssetPropertyValue,
  ) $s = shape()) {
    $this->asset_id = $s['asset_id'] ?? '';
    $this->entry_id = $s['entry_id'] ?? '';
    $this->property_alias = $s['property_alias'] ?? '';
    $this->property_id = $s['property_id'] ?? '';
    $this->property_value = $s['property_value'] ?? null;
  }
}

class IotTopicPublishAction {
  public ?MQTTTopic $mqtt_topic;
  public ?Payload $payload;

  public function __construct(shape(
    ?'mqtt_topic' => ?MQTTTopic,
    ?'payload' => ?Payload,
  ) $s = shape()) {
    $this->mqtt_topic = $s['mqtt_topic'] ?? '';
    $this->payload = $s['payload'] ?? null;
  }
}

type KeyValue = string;

class LambdaAction {
  public ?AmazonResourceName $function_arn;
  public ?Payload $payload;

  public function __construct(shape(
    ?'function_arn' => ?AmazonResourceName,
    ?'payload' => ?Payload,
  ) $s = shape()) {
    $this->function_arn = $s['function_arn'] ?? '';
    $this->payload = $s['payload'] ?? null;
  }
}

class LimitExceededException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListDetectorModelVersionsRequest {
  public ?DetectorModelName $detector_model_name;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'detector_model_name' => ?DetectorModelName,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->detector_model_name = $s['detector_model_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDetectorModelVersionsResponse {
  public ?DetectorModelVersionSummaries $detector_model_version_summaries;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'detector_model_version_summaries' => ?DetectorModelVersionSummaries,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->detector_model_version_summaries = $s['detector_model_version_summaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDetectorModelsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDetectorModelsResponse {
  public ?DetectorModelSummaries $detector_model_summaries;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'detector_model_summaries' => ?DetectorModelSummaries,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->detector_model_summaries = $s['detector_model_summaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListInputsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListInputsResponse {
  public ?InputSummaries $input_summaries;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'input_summaries' => ?InputSummaries,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->input_summaries = $s['input_summaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public ?AmazonResourceName $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?Tags $tags;

  public function __construct(shape(
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
  }
}

type LoggingEnabled = bool;

type LoggingLevel = string;

class LoggingOptions {
  public ?DetectorDebugOptions $detector_debug_options;
  public ?LoggingEnabled $enabled;
  public ?LoggingLevel $level;
  public ?AmazonResourceName $role_arn;

  public function __construct(shape(
    ?'detector_debug_options' => ?DetectorDebugOptions,
    ?'enabled' => ?LoggingEnabled,
    ?'level' => ?LoggingLevel,
    ?'role_arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->detector_debug_options = $s['detector_debug_options'] ?? vec[];
    $this->enabled = $s['enabled'] ?? false;
    $this->level = $s['level'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

type MQTTTopic = string;

type MaxResults = int;

type NextToken = string;

class OnEnterLifecycle {
  public ?Events $events;

  public function __construct(shape(
    ?'events' => ?Events,
  ) $s = shape()) {
    $this->events = $s['events'] ?? vec[];
  }
}

class OnExitLifecycle {
  public ?Events $events;

  public function __construct(shape(
    ?'events' => ?Events,
  ) $s = shape()) {
    $this->events = $s['events'] ?? vec[];
  }
}

class OnInputLifecycle {
  public ?Events $events;
  public ?TransitionEvents $transition_events;

  public function __construct(shape(
    ?'events' => ?Events,
    ?'transition_events' => ?TransitionEvents,
  ) $s = shape()) {
    $this->events = $s['events'] ?? vec[];
    $this->transition_events = $s['transition_events'] ?? vec[];
  }
}

class Payload {
  public ?ContentExpression $content_expression;
  public ?PayloadType $type;

  public function __construct(shape(
    ?'content_expression' => ?ContentExpression,
    ?'type' => ?PayloadType,
  ) $s = shape()) {
    $this->content_expression = $s['content_expression'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type PayloadType = string;

class PutLoggingOptionsRequest {
  public ?LoggingOptions $logging_options;

  public function __construct(shape(
    ?'logging_options' => ?LoggingOptions,
  ) $s = shape()) {
    $this->logging_options = $s['logging_options'] ?? null;
  }
}

type QueueUrl = string;

class ResetTimerAction {
  public ?TimerName $timer_name;

  public function __construct(shape(
    ?'timer_name' => ?TimerName,
  ) $s = shape()) {
    $this->timer_name = $s['timer_name'] ?? '';
  }
}

class ResourceAlreadyExistsException {
  public ?errorMessage $message;
  public ?resourceArn $resource_arn;
  public ?resourceId $resource_id;

  public function __construct(shape(
    ?'message' => ?errorMessage,
    ?'resource_arn' => ?resourceArn,
    ?'resource_id' => ?resourceId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

class ResourceInUseException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceNotFoundException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class SNSTopicPublishAction {
  public ?Payload $payload;
  public ?AmazonResourceName $target_arn;

  public function __construct(shape(
    ?'payload' => ?Payload,
    ?'target_arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->payload = $s['payload'] ?? null;
    $this->target_arn = $s['target_arn'] ?? '';
  }
}

type Seconds = int;

class ServiceUnavailableException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class SetTimerAction {
  public ?VariableValue $duration_expression;
  public ?Seconds $seconds;
  public ?TimerName $timer_name;

  public function __construct(shape(
    ?'duration_expression' => ?VariableValue,
    ?'seconds' => ?Seconds,
    ?'timer_name' => ?TimerName,
  ) $s = shape()) {
    $this->duration_expression = $s['duration_expression'] ?? '';
    $this->seconds = $s['seconds'] ?? 0;
    $this->timer_name = $s['timer_name'] ?? '';
  }
}

class SetVariableAction {
  public ?VariableValue $value;
  public ?VariableName $variable_name;

  public function __construct(shape(
    ?'value' => ?VariableValue,
    ?'variable_name' => ?VariableName,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
    $this->variable_name = $s['variable_name'] ?? '';
  }
}

class SqsAction {
  public ?Payload $payload;
  public ?QueueUrl $queue_url;
  public ?UseBase64 $use_base_64;

  public function __construct(shape(
    ?'payload' => ?Payload,
    ?'queue_url' => ?QueueUrl,
    ?'use_base_64' => ?UseBase64,
  ) $s = shape()) {
    $this->payload = $s['payload'] ?? null;
    $this->queue_url = $s['queue_url'] ?? '';
    $this->use_base_64 = $s['use_base_64'] ?? false;
  }
}

class State {
  public ?OnEnterLifecycle $on_enter;
  public ?OnExitLifecycle $on_exit;
  public ?OnInputLifecycle $on_input;
  public ?StateName $state_name;

  public function __construct(shape(
    ?'on_enter' => ?OnEnterLifecycle,
    ?'on_exit' => ?OnExitLifecycle,
    ?'on_input' => ?OnInputLifecycle,
    ?'state_name' => ?StateName,
  ) $s = shape()) {
    $this->on_enter = $s['on_enter'] ?? null;
    $this->on_exit = $s['on_exit'] ?? null;
    $this->on_input = $s['on_input'] ?? null;
    $this->state_name = $s['state_name'] ?? '';
  }
}

type StateName = string;

type States = vec<State>;

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagKeys = vec<TagKey>;

class TagResourceRequest {
  public ?AmazonResourceName $resource_arn;
  public ?Tags $tags;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class TagrisAccessDeniedException {
  public ?TagrisExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?TagrisExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type TagrisAccountId = string;

type TagrisAmazonResourceName = string;

type TagrisExceptionMessage = string;

type TagrisInternalId = string;

class TagrisInternalServiceException {
  public ?TagrisExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?TagrisExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TagrisInvalidArnException {
  public ?TagrisExceptionMessage $message;
  public ?TagrisSweepListItem $sweep_list_item;

  public function __construct(shape(
    ?'message' => ?TagrisExceptionMessage,
    ?'sweep_list_item' => ?TagrisSweepListItem,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->sweep_list_item = $s['sweep_list_item'] ?? null;
  }
}

class TagrisInvalidParameterException {
  public ?TagrisExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?TagrisExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TagrisPartialResourcesExistResultsException {
  public ?TagrisExceptionMessage $message;
  public ?TagrisSweepListResult $resource_existence_information;

  public function __construct(shape(
    ?'message' => ?TagrisExceptionMessage,
    ?'resource_existence_information' => ?TagrisSweepListResult,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_existence_information = $s['resource_existence_information'] ?? dict[];
  }
}

type TagrisStatus = string;

type TagrisSweepList = vec<TagrisSweepListItem>;

class TagrisSweepListItem {
  public ?TagrisAccountId $tagris_account_id;
  public ?TagrisAmazonResourceName $tagris_amazon_resource_name;
  public ?TagrisInternalId $tagris_internal_id;
  public ?TagrisVersion $tagris_version;

  public function __construct(shape(
    ?'tagris_account_id' => ?TagrisAccountId,
    ?'tagris_amazon_resource_name' => ?TagrisAmazonResourceName,
    ?'tagris_internal_id' => ?TagrisInternalId,
    ?'tagris_version' => ?TagrisVersion,
  ) $s = shape()) {
    $this->tagris_account_id = $s['tagris_account_id'] ?? '';
    $this->tagris_amazon_resource_name = $s['tagris_amazon_resource_name'] ?? '';
    $this->tagris_internal_id = $s['tagris_internal_id'] ?? '';
    $this->tagris_version = $s['tagris_version'] ?? 0;
  }
}

type TagrisSweepListResult = dict<TagrisAmazonResourceName, TagrisStatus>;

class TagrisThrottledException {
  public ?TagrisExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?TagrisExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TagrisVerifyResourcesExistInput {
  public ?TagrisSweepList $tagris_sweep_list;

  public function __construct(shape(
    ?'tagris_sweep_list' => ?TagrisSweepList,
  ) $s = shape()) {
    $this->tagris_sweep_list = $s['tagris_sweep_list'] ?? vec[];
  }
}

class TagrisVerifyResourcesExistOutput {
  public ?TagrisSweepListResult $tagris_sweep_list_result;

  public function __construct(shape(
    ?'tagris_sweep_list_result' => ?TagrisSweepListResult,
  ) $s = shape()) {
    $this->tagris_sweep_list_result = $s['tagris_sweep_list_result'] ?? dict[];
  }
}

type TagrisVersion = int;

type Tags = vec<Tag>;

class ThrottlingException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type TimerName = string;

type Timestamp = int;

class TransitionEvent {
  public ?Actions $actions;
  public ?Condition $condition;
  public ?EventName $event_name;
  public ?StateName $next_state;

  public function __construct(shape(
    ?'actions' => ?Actions,
    ?'condition' => ?Condition,
    ?'event_name' => ?EventName,
    ?'next_state' => ?StateName,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? vec[];
    $this->condition = $s['condition'] ?? '';
    $this->event_name = $s['event_name'] ?? '';
    $this->next_state = $s['next_state'] ?? '';
  }
}

type TransitionEvents = vec<TransitionEvent>;

class UnsupportedOperationException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceRequest {
  public ?AmazonResourceName $resource_arn;
  public ?TagKeys $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
    ?'tag_keys' => ?TagKeys,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDetectorModelRequest {
  public ?DetectorModelDefinition $detector_model_definition;
  public ?DetectorModelDescription $detector_model_description;
  public ?DetectorModelName $detector_model_name;
  public ?EvaluationMethod $evaluation_method;
  public ?AmazonResourceName $role_arn;

  public function __construct(shape(
    ?'detector_model_definition' => ?DetectorModelDefinition,
    ?'detector_model_description' => ?DetectorModelDescription,
    ?'detector_model_name' => ?DetectorModelName,
    ?'evaluation_method' => ?EvaluationMethod,
    ?'role_arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->detector_model_definition = $s['detector_model_definition'] ?? null;
    $this->detector_model_description = $s['detector_model_description'] ?? '';
    $this->detector_model_name = $s['detector_model_name'] ?? '';
    $this->evaluation_method = $s['evaluation_method'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class UpdateDetectorModelResponse {
  public ?DetectorModelConfiguration $detector_model_configuration;

  public function __construct(shape(
    ?'detector_model_configuration' => ?DetectorModelConfiguration,
  ) $s = shape()) {
    $this->detector_model_configuration = $s['detector_model_configuration'] ?? null;
  }
}

class UpdateInputRequest {
  public ?InputDefinition $input_definition;
  public ?InputDescription $input_description;
  public ?InputName $input_name;

  public function __construct(shape(
    ?'input_definition' => ?InputDefinition,
    ?'input_description' => ?InputDescription,
    ?'input_name' => ?InputName,
  ) $s = shape()) {
    $this->input_definition = $s['input_definition'] ?? null;
    $this->input_description = $s['input_description'] ?? '';
    $this->input_name = $s['input_name'] ?? '';
  }
}

class UpdateInputResponse {
  public ?InputConfiguration $input_configuration;

  public function __construct(shape(
    ?'input_configuration' => ?InputConfiguration,
  ) $s = shape()) {
    $this->input_configuration = $s['input_configuration'] ?? null;
  }
}

type UseBase64 = bool;

type VariableName = string;

type VariableValue = string;

type errorMessage = string;

type resourceArn = string;

type resourceId = string;


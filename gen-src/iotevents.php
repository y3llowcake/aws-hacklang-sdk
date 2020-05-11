<?hh // strict
namespace slack\aws\iotevents;

interface IoT Events {
  public function CreateDetectorModel(CreateDetectorModelRequest): Awaitable<Errors\Result<CreateDetectorModelResponse>>;
  public function CreateInput(CreateInputRequest): Awaitable<Errors\Result<CreateInputResponse>>;
  public function DeleteDetectorModel(DeleteDetectorModelRequest): Awaitable<Errors\Result<DeleteDetectorModelResponse>>;
  public function DeleteInput(DeleteInputRequest): Awaitable<Errors\Result<DeleteInputResponse>>;
  public function DescribeDetectorModel(DescribeDetectorModelRequest): Awaitable<Errors\Result<DescribeDetectorModelResponse>>;
  public function DescribeInput(DescribeInputRequest): Awaitable<Errors\Result<DescribeInputResponse>>;
  public function DescribeLoggingOptions(DescribeLoggingOptionsRequest): Awaitable<Errors\Result<DescribeLoggingOptionsResponse>>;
  public function ListDetectorModelVersions(ListDetectorModelVersionsRequest): Awaitable<Errors\Result<ListDetectorModelVersionsResponse>>;
  public function ListDetectorModels(ListDetectorModelsRequest): Awaitable<Errors\Result<ListDetectorModelsResponse>>;
  public function ListInputs(ListInputsRequest): Awaitable<Errors\Result<ListInputsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutLoggingOptions(PutLoggingOptionsRequest): Awaitable<Errors\Error>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateDetectorModel(UpdateDetectorModelRequest): Awaitable<Errors\Result<UpdateDetectorModelResponse>>;
  public function UpdateInput(UpdateInputRequest): Awaitable<Errors\Result<UpdateInputResponse>>;
  public function VerifyResourcesExistForTagris(TagrisVerifyResourcesExistInput): Awaitable<Errors\Result<TagrisVerifyResourcesExistOutput>>;
}

class Action {
  public ClearTimerAction $clear_timer;
  public DynamoDBAction $dynamo_db;
  public DynamoDBv2Action $dynamo_d_bv_2;
  public FirehoseAction $firehose;
  public IotEventsAction $iot_events;
  public IotSiteWiseAction $iot_site_wise;
  public IotTopicPublishAction $iot_topic_publish;
  public LambdaAction $lambda;
  public ResetTimerAction $reset_timer;
  public SetTimerAction $set_timer;
  public SetVariableAction $set_variable;
  public SNSTopicPublishAction $sns;
  public SqsAction $sqs;

  public function __construct(shape(
  ?'clear_timer' => ClearTimerAction,
  ?'dynamo_db' => DynamoDBAction,
  ?'dynamo_d_bv_2' => DynamoDBv2Action,
  ?'firehose' => FirehoseAction,
  ?'iot_events' => IotEventsAction,
  ?'iot_site_wise' => IotSiteWiseAction,
  ?'iot_topic_publish' => IotTopicPublishAction,
  ?'lambda' => LambdaAction,
  ?'reset_timer' => ResetTimerAction,
  ?'set_timer' => SetTimerAction,
  ?'set_variable' => SetVariableAction,
  ?'sns' => SNSTopicPublishAction,
  ?'sqs' => SqsAction,
  ) $s = shape()) {
    $this->clear_timer = $clear_timer ?? ;
    $this->dynamo_db = $dynamo_db ?? ;
    $this->dynamo_d_bv_2 = $dynamo_d_bv_2 ?? ;
    $this->firehose = $firehose ?? ;
    $this->iot_events = $iot_events ?? ;
    $this->iot_site_wise = $iot_site_wise ?? ;
    $this->iot_topic_publish = $iot_topic_publish ?? ;
    $this->lambda = $lambda ?? ;
    $this->reset_timer = $reset_timer ?? ;
    $this->set_timer = $set_timer ?? ;
    $this->set_variable = $set_variable ?? ;
    $this->sns = $sns ?? ;
    $this->sqs = $sqs ?? ;
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
  public AssetPropertyOffsetInNanos $offset_in_nanos;
  public AssetPropertyTimeInSeconds $time_in_seconds;

  public function __construct(shape(
  ?'offset_in_nanos' => AssetPropertyOffsetInNanos,
  ?'time_in_seconds' => AssetPropertyTimeInSeconds,
  ) $s = shape()) {
    $this->offset_in_nanos = $offset_in_nanos ?? ;
    $this->time_in_seconds = $time_in_seconds ?? ;
  }
}

class AssetPropertyValue {
  public AssetPropertyQuality $quality;
  public AssetPropertyTimestamp $timestamp;
  public AssetPropertyVariant $value;

  public function __construct(shape(
  ?'quality' => AssetPropertyQuality,
  ?'timestamp' => AssetPropertyTimestamp,
  ?'value' => AssetPropertyVariant,
  ) $s = shape()) {
    $this->quality = $quality ?? ;
    $this->timestamp = $timestamp ?? ;
    $this->value = $value ?? ;
  }
}

class AssetPropertyVariant {
  public AssetPropertyBooleanValue $boolean_value;
  public AssetPropertyDoubleValue $double_value;
  public AssetPropertyIntegerValue $integer_value;
  public AssetPropertyStringValue $string_value;

  public function __construct(shape(
  ?'boolean_value' => AssetPropertyBooleanValue,
  ?'double_value' => AssetPropertyDoubleValue,
  ?'integer_value' => AssetPropertyIntegerValue,
  ?'string_value' => AssetPropertyStringValue,
  ) $s = shape()) {
    $this->boolean_value = $boolean_value ?? ;
    $this->double_value = $double_value ?? ;
    $this->integer_value = $integer_value ?? ;
    $this->string_value = $string_value ?? ;
  }
}

class Attribute {
  public AttributeJsonPath $json_path;

  public function __construct(shape(
  ?'json_path' => AttributeJsonPath,
  ) $s = shape()) {
    $this->json_path = $json_path ?? ;
  }
}

type AttributeJsonPath = string;

type Attributes = vec<Attribute>;

class ClearTimerAction {
  public TimerName $timer_name;

  public function __construct(shape(
  ?'timer_name' => TimerName,
  ) $s = shape()) {
    $this->timer_name = $timer_name ?? ;
  }
}

type Condition = string;

type ContentExpression = string;

class CreateDetectorModelRequest {
  public DetectorModelDefinition $detector_model_definition;
  public DetectorModelDescription $detector_model_description;
  public DetectorModelName $detector_model_name;
  public EvaluationMethod $evaluation_method;
  public AttributeJsonPath $key;
  public AmazonResourceName $role_arn;
  public Tags $tags;

  public function __construct(shape(
  ?'detector_model_definition' => DetectorModelDefinition,
  ?'detector_model_description' => DetectorModelDescription,
  ?'detector_model_name' => DetectorModelName,
  ?'evaluation_method' => EvaluationMethod,
  ?'key' => AttributeJsonPath,
  ?'role_arn' => AmazonResourceName,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->detector_model_definition = $detector_model_definition ?? ;
    $this->detector_model_description = $detector_model_description ?? ;
    $this->detector_model_name = $detector_model_name ?? ;
    $this->evaluation_method = $evaluation_method ?? ;
    $this->key = $key ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateDetectorModelResponse {
  public DetectorModelConfiguration $detector_model_configuration;

  public function __construct(shape(
  ?'detector_model_configuration' => DetectorModelConfiguration,
  ) $s = shape()) {
    $this->detector_model_configuration = $detector_model_configuration ?? ;
  }
}

class CreateInputRequest {
  public InputDefinition $input_definition;
  public InputDescription $input_description;
  public InputName $input_name;
  public Tags $tags;

  public function __construct(shape(
  ?'input_definition' => InputDefinition,
  ?'input_description' => InputDescription,
  ?'input_name' => InputName,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->input_definition = $input_definition ?? ;
    $this->input_description = $input_description ?? ;
    $this->input_name = $input_name ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateInputResponse {
  public InputConfiguration $input_configuration;

  public function __construct(shape(
  ?'input_configuration' => InputConfiguration,
  ) $s = shape()) {
    $this->input_configuration = $input_configuration ?? ;
  }
}

class DeleteDetectorModelRequest {
  public DetectorModelName $detector_model_name;

  public function __construct(shape(
  ?'detector_model_name' => DetectorModelName,
  ) $s = shape()) {
    $this->detector_model_name = $detector_model_name ?? ;
  }
}

class DeleteDetectorModelResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteInputRequest {
  public InputName $input_name;

  public function __construct(shape(
  ?'input_name' => InputName,
  ) $s = shape()) {
    $this->input_name = $input_name ?? ;
  }
}

class DeleteInputResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeliveryStreamName = string;

class DescribeDetectorModelRequest {
  public DetectorModelName $detector_model_name;
  public DetectorModelVersion $detector_model_version;

  public function __construct(shape(
  ?'detector_model_name' => DetectorModelName,
  ?'detector_model_version' => DetectorModelVersion,
  ) $s = shape()) {
    $this->detector_model_name = $detector_model_name ?? ;
    $this->detector_model_version = $detector_model_version ?? ;
  }
}

class DescribeDetectorModelResponse {
  public DetectorModel $detector_model;

  public function __construct(shape(
  ?'detector_model' => DetectorModel,
  ) $s = shape()) {
    $this->detector_model = $detector_model ?? ;
  }
}

class DescribeInputRequest {
  public InputName $input_name;

  public function __construct(shape(
  ?'input_name' => InputName,
  ) $s = shape()) {
    $this->input_name = $input_name ?? ;
  }
}

class DescribeInputResponse {
  public Input $input;

  public function __construct(shape(
  ?'input' => Input,
  ) $s = shape()) {
    $this->input = $input ?? ;
  }
}

class DescribeLoggingOptionsRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeLoggingOptionsResponse {
  public LoggingOptions $logging_options;

  public function __construct(shape(
  ?'logging_options' => LoggingOptions,
  ) $s = shape()) {
    $this->logging_options = $logging_options ?? ;
  }
}

class DetectorDebugOption {
  public DetectorModelName $detector_model_name;
  public KeyValue $key_value;

  public function __construct(shape(
  ?'detector_model_name' => DetectorModelName,
  ?'key_value' => KeyValue,
  ) $s = shape()) {
    $this->detector_model_name = $detector_model_name ?? ;
    $this->key_value = $key_value ?? ;
  }
}

type DetectorDebugOptions = vec<DetectorDebugOption>;

class DetectorModel {
  public DetectorModelConfiguration $detector_model_configuration;
  public DetectorModelDefinition $detector_model_definition;

  public function __construct(shape(
  ?'detector_model_configuration' => DetectorModelConfiguration,
  ?'detector_model_definition' => DetectorModelDefinition,
  ) $s = shape()) {
    $this->detector_model_configuration = $detector_model_configuration ?? ;
    $this->detector_model_definition = $detector_model_definition ?? ;
  }
}

type DetectorModelArn = string;

class DetectorModelConfiguration {
  public Timestamp $creation_time;
  public DetectorModelArn $detector_model_arn;
  public DetectorModelDescription $detector_model_description;
  public DetectorModelName $detector_model_name;
  public DetectorModelVersion $detector_model_version;
  public EvaluationMethod $evaluation_method;
  public AttributeJsonPath $key;
  public Timestamp $last_update_time;
  public AmazonResourceName $role_arn;
  public DetectorModelVersionStatus $status;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'detector_model_arn' => DetectorModelArn,
  ?'detector_model_description' => DetectorModelDescription,
  ?'detector_model_name' => DetectorModelName,
  ?'detector_model_version' => DetectorModelVersion,
  ?'evaluation_method' => EvaluationMethod,
  ?'key' => AttributeJsonPath,
  ?'last_update_time' => Timestamp,
  ?'role_arn' => AmazonResourceName,
  ?'status' => DetectorModelVersionStatus,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? ;
    $this->detector_model_arn = $detector_model_arn ?? ;
    $this->detector_model_description = $detector_model_description ?? ;
    $this->detector_model_name = $detector_model_name ?? ;
    $this->detector_model_version = $detector_model_version ?? ;
    $this->evaluation_method = $evaluation_method ?? ;
    $this->key = $key ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->status = $status ?? ;
  }
}

class DetectorModelDefinition {
  public StateName $initial_state_name;
  public States $states;

  public function __construct(shape(
  ?'initial_state_name' => StateName,
  ?'states' => States,
  ) $s = shape()) {
    $this->initial_state_name = $initial_state_name ?? ;
    $this->states = $states ?? ;
  }
}

type DetectorModelDescription = string;

type DetectorModelName = string;

type DetectorModelSummaries = vec<DetectorModelSummary>;

class DetectorModelSummary {
  public Timestamp $creation_time;
  public DetectorModelDescription $detector_model_description;
  public DetectorModelName $detector_model_name;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'detector_model_description' => DetectorModelDescription,
  ?'detector_model_name' => DetectorModelName,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? ;
    $this->detector_model_description = $detector_model_description ?? ;
    $this->detector_model_name = $detector_model_name ?? ;
  }
}

type DetectorModelVersion = string;

type DetectorModelVersionStatus = string;

type DetectorModelVersionSummaries = vec<DetectorModelVersionSummary>;

class DetectorModelVersionSummary {
  public Timestamp $creation_time;
  public DetectorModelArn $detector_model_arn;
  public DetectorModelName $detector_model_name;
  public DetectorModelVersion $detector_model_version;
  public EvaluationMethod $evaluation_method;
  public Timestamp $last_update_time;
  public AmazonResourceName $role_arn;
  public DetectorModelVersionStatus $status;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'detector_model_arn' => DetectorModelArn,
  ?'detector_model_name' => DetectorModelName,
  ?'detector_model_version' => DetectorModelVersion,
  ?'evaluation_method' => EvaluationMethod,
  ?'last_update_time' => Timestamp,
  ?'role_arn' => AmazonResourceName,
  ?'status' => DetectorModelVersionStatus,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? ;
    $this->detector_model_arn = $detector_model_arn ?? ;
    $this->detector_model_name = $detector_model_name ?? ;
    $this->detector_model_version = $detector_model_version ?? ;
    $this->evaluation_method = $evaluation_method ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->status = $status ?? ;
  }
}

class DynamoDBAction {
  public DynamoKeyField $hash_key_field;
  public DynamoKeyType $hash_key_type;
  public DynamoKeyValue $hash_key_value;
  public DynamoOperation $operation;
  public Payload $payload;
  public DynamoKeyField $payload_field;
  public DynamoKeyField $range_key_field;
  public DynamoKeyType $range_key_type;
  public DynamoKeyValue $range_key_value;
  public DynamoTableName $table_name;

  public function __construct(shape(
  ?'hash_key_field' => DynamoKeyField,
  ?'hash_key_type' => DynamoKeyType,
  ?'hash_key_value' => DynamoKeyValue,
  ?'operation' => DynamoOperation,
  ?'payload' => Payload,
  ?'payload_field' => DynamoKeyField,
  ?'range_key_field' => DynamoKeyField,
  ?'range_key_type' => DynamoKeyType,
  ?'range_key_value' => DynamoKeyValue,
  ?'table_name' => DynamoTableName,
  ) $s = shape()) {
    $this->hash_key_field = $hash_key_field ?? ;
    $this->hash_key_type = $hash_key_type ?? ;
    $this->hash_key_value = $hash_key_value ?? ;
    $this->operation = $operation ?? ;
    $this->payload = $payload ?? ;
    $this->payload_field = $payload_field ?? ;
    $this->range_key_field = $range_key_field ?? ;
    $this->range_key_type = $range_key_type ?? ;
    $this->range_key_value = $range_key_value ?? ;
    $this->table_name = $table_name ?? ;
  }
}

class DynamoDBv2Action {
  public Payload $payload;
  public DynamoTableName $table_name;

  public function __construct(shape(
  ?'payload' => Payload,
  ?'table_name' => DynamoTableName,
  ) $s = shape()) {
    $this->payload = $payload ?? ;
    $this->table_name = $table_name ?? ;
  }
}

type DynamoKeyField = string;

type DynamoKeyType = string;

type DynamoKeyValue = string;

type DynamoOperation = string;

type DynamoTableName = string;

type EvaluationMethod = string;

class Event {
  public Actions $actions;
  public Condition $condition;
  public EventName $event_name;

  public function __construct(shape(
  ?'actions' => Actions,
  ?'condition' => Condition,
  ?'event_name' => EventName,
  ) $s = shape()) {
    $this->actions = $actions ?? ;
    $this->condition = $condition ?? ;
    $this->event_name = $event_name ?? ;
  }
}

type EventName = string;

type Events = vec<Event>;

class FirehoseAction {
  public DeliveryStreamName $delivery_stream_name;
  public Payload $payload;
  public FirehoseSeparator $separator;

  public function __construct(shape(
  ?'delivery_stream_name' => DeliveryStreamName,
  ?'payload' => Payload,
  ?'separator' => FirehoseSeparator,
  ) $s = shape()) {
    $this->delivery_stream_name = $delivery_stream_name ?? ;
    $this->payload = $payload ?? ;
    $this->separator = $separator ?? ;
  }
}

type FirehoseSeparator = string;

class Input {
  public InputConfiguration $input_configuration;
  public InputDefinition $input_definition;

  public function __construct(shape(
  ?'input_configuration' => InputConfiguration,
  ?'input_definition' => InputDefinition,
  ) $s = shape()) {
    $this->input_configuration = $input_configuration ?? ;
    $this->input_definition = $input_definition ?? ;
  }
}

type InputArn = string;

class InputConfiguration {
  public Timestamp $creation_time;
  public InputArn $input_arn;
  public InputDescription $input_description;
  public InputName $input_name;
  public Timestamp $last_update_time;
  public InputStatus $status;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'input_arn' => InputArn,
  ?'input_description' => InputDescription,
  ?'input_name' => InputName,
  ?'last_update_time' => Timestamp,
  ?'status' => InputStatus,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? ;
    $this->input_arn = $input_arn ?? ;
    $this->input_description = $input_description ?? ;
    $this->input_name = $input_name ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->status = $status ?? ;
  }
}

class InputDefinition {
  public Attributes $attributes;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
  }
}

type InputDescription = string;

type InputName = string;

type InputStatus = string;

type InputSummaries = vec<InputSummary>;

class InputSummary {
  public Timestamp $creation_time;
  public InputArn $input_arn;
  public InputDescription $input_description;
  public InputName $input_name;
  public Timestamp $last_update_time;
  public InputStatus $status;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'input_arn' => InputArn,
  ?'input_description' => InputDescription,
  ?'input_name' => InputName,
  ?'last_update_time' => Timestamp,
  ?'status' => InputStatus,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? ;
    $this->input_arn = $input_arn ?? ;
    $this->input_description = $input_description ?? ;
    $this->input_name = $input_name ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->status = $status ?? ;
  }
}

class InternalFailureException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidRequestException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class IotEventsAction {
  public InputName $input_name;
  public Payload $payload;

  public function __construct(shape(
  ?'input_name' => InputName,
  ?'payload' => Payload,
  ) $s = shape()) {
    $this->input_name = $input_name ?? ;
    $this->payload = $payload ?? ;
  }
}

class IotSiteWiseAction {
  public AssetId $asset_id;
  public AssetPropertyEntryId $entry_id;
  public AssetPropertyAlias $property_alias;
  public AssetPropertyId $property_id;
  public AssetPropertyValue $property_value;

  public function __construct(shape(
  ?'asset_id' => AssetId,
  ?'entry_id' => AssetPropertyEntryId,
  ?'property_alias' => AssetPropertyAlias,
  ?'property_id' => AssetPropertyId,
  ?'property_value' => AssetPropertyValue,
  ) $s = shape()) {
    $this->asset_id = $asset_id ?? ;
    $this->entry_id = $entry_id ?? ;
    $this->property_alias = $property_alias ?? ;
    $this->property_id = $property_id ?? ;
    $this->property_value = $property_value ?? ;
  }
}

class IotTopicPublishAction {
  public MQTTTopic $mqtt_topic;
  public Payload $payload;

  public function __construct(shape(
  ?'mqtt_topic' => MQTTTopic,
  ?'payload' => Payload,
  ) $s = shape()) {
    $this->mqtt_topic = $mqtt_topic ?? ;
    $this->payload = $payload ?? ;
  }
}

type KeyValue = string;

class LambdaAction {
  public AmazonResourceName $function_arn;
  public Payload $payload;

  public function __construct(shape(
  ?'function_arn' => AmazonResourceName,
  ?'payload' => Payload,
  ) $s = shape()) {
    $this->function_arn = $function_arn ?? ;
    $this->payload = $payload ?? ;
  }
}

class LimitExceededException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ListDetectorModelVersionsRequest {
  public DetectorModelName $detector_model_name;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'detector_model_name' => DetectorModelName,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->detector_model_name = $detector_model_name ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDetectorModelVersionsResponse {
  public DetectorModelVersionSummaries $detector_model_version_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'detector_model_version_summaries' => DetectorModelVersionSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->detector_model_version_summaries = $detector_model_version_summaries ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDetectorModelsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDetectorModelsResponse {
  public DetectorModelSummaries $detector_model_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'detector_model_summaries' => DetectorModelSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->detector_model_summaries = $detector_model_summaries ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListInputsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListInputsResponse {
  public InputSummaries $input_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'input_summaries' => InputSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->input_summaries = $input_summaries ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
  }
}

type LoggingEnabled = bool;

type LoggingLevel = string;

class LoggingOptions {
  public DetectorDebugOptions $detector_debug_options;
  public LoggingEnabled $enabled;
  public LoggingLevel $level;
  public AmazonResourceName $role_arn;

  public function __construct(shape(
  ?'detector_debug_options' => DetectorDebugOptions,
  ?'enabled' => LoggingEnabled,
  ?'level' => LoggingLevel,
  ?'role_arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->detector_debug_options = $detector_debug_options ?? ;
    $this->enabled = $enabled ?? ;
    $this->level = $level ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

type MQTTTopic = string;

type MaxResults = int;

type NextToken = string;

class OnEnterLifecycle {
  public Events $events;

  public function __construct(shape(
  ?'events' => Events,
  ) $s = shape()) {
    $this->events = $events ?? ;
  }
}

class OnExitLifecycle {
  public Events $events;

  public function __construct(shape(
  ?'events' => Events,
  ) $s = shape()) {
    $this->events = $events ?? ;
  }
}

class OnInputLifecycle {
  public Events $events;
  public TransitionEvents $transition_events;

  public function __construct(shape(
  ?'events' => Events,
  ?'transition_events' => TransitionEvents,
  ) $s = shape()) {
    $this->events = $events ?? ;
    $this->transition_events = $transition_events ?? ;
  }
}

class Payload {
  public ContentExpression $content_expression;
  public PayloadType $type;

  public function __construct(shape(
  ?'content_expression' => ContentExpression,
  ?'type' => PayloadType,
  ) $s = shape()) {
    $this->content_expression = $content_expression ?? ;
    $this->type = $type ?? ;
  }
}

type PayloadType = string;

class PutLoggingOptionsRequest {
  public LoggingOptions $logging_options;

  public function __construct(shape(
  ?'logging_options' => LoggingOptions,
  ) $s = shape()) {
    $this->logging_options = $logging_options ?? ;
  }
}

type QueueUrl = string;

class ResetTimerAction {
  public TimerName $timer_name;

  public function __construct(shape(
  ?'timer_name' => TimerName,
  ) $s = shape()) {
    $this->timer_name = $timer_name ?? ;
  }
}

class ResourceAlreadyExistsException {
  public errorMessage $message;
  public resourceArn $resource_arn;
  public resourceId $resource_id;

  public function __construct(shape(
  ?'message' => errorMessage,
  ?'resource_arn' => resourceArn,
  ?'resource_id' => resourceId,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->resource_arn = $resource_arn ?? "";
    $this->resource_id = $resource_id ?? "";
  }
}

class ResourceInUseException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceNotFoundException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class SNSTopicPublishAction {
  public Payload $payload;
  public AmazonResourceName $target_arn;

  public function __construct(shape(
  ?'payload' => Payload,
  ?'target_arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->payload = $payload ?? ;
    $this->target_arn = $target_arn ?? ;
  }
}

type Seconds = int;

class ServiceUnavailableException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class SetTimerAction {
  public VariableValue $duration_expression;
  public Seconds $seconds;
  public TimerName $timer_name;

  public function __construct(shape(
  ?'duration_expression' => VariableValue,
  ?'seconds' => Seconds,
  ?'timer_name' => TimerName,
  ) $s = shape()) {
    $this->duration_expression = $duration_expression ?? ;
    $this->seconds = $seconds ?? ;
    $this->timer_name = $timer_name ?? ;
  }
}

class SetVariableAction {
  public VariableValue $value;
  public VariableName $variable_name;

  public function __construct(shape(
  ?'value' => VariableValue,
  ?'variable_name' => VariableName,
  ) $s = shape()) {
    $this->value = $value ?? ;
    $this->variable_name = $variable_name ?? ;
  }
}

class SqsAction {
  public Payload $payload;
  public QueueUrl $queue_url;
  public UseBase64 $use_base_64;

  public function __construct(shape(
  ?'payload' => Payload,
  ?'queue_url' => QueueUrl,
  ?'use_base_64' => UseBase64,
  ) $s = shape()) {
    $this->payload = $payload ?? ;
    $this->queue_url = $queue_url ?? ;
    $this->use_base_64 = $use_base_64 ?? ;
  }
}

class State {
  public OnEnterLifecycle $on_enter;
  public OnExitLifecycle $on_exit;
  public OnInputLifecycle $on_input;
  public StateName $state_name;

  public function __construct(shape(
  ?'on_enter' => OnEnterLifecycle,
  ?'on_exit' => OnExitLifecycle,
  ?'on_input' => OnInputLifecycle,
  ?'state_name' => StateName,
  ) $s = shape()) {
    $this->on_enter = $on_enter ?? ;
    $this->on_exit = $on_exit ?? ;
    $this->on_input = $on_input ?? ;
    $this->state_name = $state_name ?? ;
  }
}

type StateName = string;

type States = vec<State>;

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

type TagKeys = vec<TagKey>;

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public Tags $tags;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? ;
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class TagrisAccessDeniedException {
  public TagrisExceptionMessage $message;

  public function __construct(shape(
  ?'message' => TagrisExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type TagrisAccountId = string;

type TagrisAmazonResourceName = string;

type TagrisExceptionMessage = string;

type TagrisInternalId = string;

class TagrisInternalServiceException {
  public TagrisExceptionMessage $message;

  public function __construct(shape(
  ?'message' => TagrisExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TagrisInvalidArnException {
  public TagrisExceptionMessage $message;
  public TagrisSweepListItem $sweep_list_item;

  public function __construct(shape(
  ?'message' => TagrisExceptionMessage,
  ?'sweep_list_item' => TagrisSweepListItem,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->sweep_list_item = $sweep_list_item ?? ;
  }
}

class TagrisInvalidParameterException {
  public TagrisExceptionMessage $message;

  public function __construct(shape(
  ?'message' => TagrisExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TagrisPartialResourcesExistResultsException {
  public TagrisExceptionMessage $message;
  public TagrisSweepListResult $resource_existence_information;

  public function __construct(shape(
  ?'message' => TagrisExceptionMessage,
  ?'resource_existence_information' => TagrisSweepListResult,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->resource_existence_information = $resource_existence_information ?? ;
  }
}

type TagrisStatus = string;

type TagrisSweepList = vec<TagrisSweepListItem>;

class TagrisSweepListItem {
  public TagrisAccountId $tagris_account_id;
  public TagrisAmazonResourceName $tagris_amazon_resource_name;
  public TagrisInternalId $tagris_internal_id;
  public TagrisVersion $tagris_version;

  public function __construct(shape(
  ?'tagris_account_id' => TagrisAccountId,
  ?'tagris_amazon_resource_name' => TagrisAmazonResourceName,
  ?'tagris_internal_id' => TagrisInternalId,
  ?'tagris_version' => TagrisVersion,
  ) $s = shape()) {
    $this->tagris_account_id = $tagris_account_id ?? "";
    $this->tagris_amazon_resource_name = $tagris_amazon_resource_name ?? "";
    $this->tagris_internal_id = $tagris_internal_id ?? "";
    $this->tagris_version = $tagris_version ?? 0;
  }
}

type TagrisSweepListResult = dict<TagrisAmazonResourceName, TagrisStatus>;

class TagrisThrottledException {
  public TagrisExceptionMessage $message;

  public function __construct(shape(
  ?'message' => TagrisExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TagrisVerifyResourcesExistInput {
  public TagrisSweepList $tagris_sweep_list;

  public function __construct(shape(
  ?'tagris_sweep_list' => TagrisSweepList,
  ) $s = shape()) {
    $this->tagris_sweep_list = $tagris_sweep_list ?? [];
  }
}

class TagrisVerifyResourcesExistOutput {
  public TagrisSweepListResult $tagris_sweep_list_result;

  public function __construct(shape(
  ?'tagris_sweep_list_result' => TagrisSweepListResult,
  ) $s = shape()) {
    $this->tagris_sweep_list_result = $tagris_sweep_list_result ?? [];
  }
}

type TagrisVersion = int;

type Tags = vec<Tag>;

class ThrottlingException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type TimerName = string;

type Timestamp = int;

class TransitionEvent {
  public Actions $actions;
  public Condition $condition;
  public EventName $event_name;
  public StateName $next_state;

  public function __construct(shape(
  ?'actions' => Actions,
  ?'condition' => Condition,
  ?'event_name' => EventName,
  ?'next_state' => StateName,
  ) $s = shape()) {
    $this->actions = $actions ?? ;
    $this->condition = $condition ?? ;
    $this->event_name = $event_name ?? ;
    $this->next_state = $next_state ?? ;
  }
}

type TransitionEvents = vec<TransitionEvent>;

class UnsupportedOperationException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeys $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tag_keys' => TagKeys,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDetectorModelRequest {
  public DetectorModelDefinition $detector_model_definition;
  public DetectorModelDescription $detector_model_description;
  public DetectorModelName $detector_model_name;
  public EvaluationMethod $evaluation_method;
  public AmazonResourceName $role_arn;

  public function __construct(shape(
  ?'detector_model_definition' => DetectorModelDefinition,
  ?'detector_model_description' => DetectorModelDescription,
  ?'detector_model_name' => DetectorModelName,
  ?'evaluation_method' => EvaluationMethod,
  ?'role_arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->detector_model_definition = $detector_model_definition ?? ;
    $this->detector_model_description = $detector_model_description ?? ;
    $this->detector_model_name = $detector_model_name ?? ;
    $this->evaluation_method = $evaluation_method ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class UpdateDetectorModelResponse {
  public DetectorModelConfiguration $detector_model_configuration;

  public function __construct(shape(
  ?'detector_model_configuration' => DetectorModelConfiguration,
  ) $s = shape()) {
    $this->detector_model_configuration = $detector_model_configuration ?? ;
  }
}

class UpdateInputRequest {
  public InputDefinition $input_definition;
  public InputDescription $input_description;
  public InputName $input_name;

  public function __construct(shape(
  ?'input_definition' => InputDefinition,
  ?'input_description' => InputDescription,
  ?'input_name' => InputName,
  ) $s = shape()) {
    $this->input_definition = $input_definition ?? ;
    $this->input_description = $input_description ?? ;
    $this->input_name = $input_name ?? ;
  }
}

class UpdateInputResponse {
  public InputConfiguration $input_configuration;

  public function __construct(shape(
  ?'input_configuration' => InputConfiguration,
  ) $s = shape()) {
    $this->input_configuration = $input_configuration ?? ;
  }
}

type UseBase64 = bool;

type VariableName = string;

type VariableValue = string;

type errorMessage = string;

type resourceArn = string;

type resourceId = string;


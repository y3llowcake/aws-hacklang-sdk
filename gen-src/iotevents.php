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
}

class Actions {
}

class AmazonResourceName {
}

class AssetId {
}

class AssetPropertyAlias {
}

class AssetPropertyBooleanValue {
}

class AssetPropertyDoubleValue {
}

class AssetPropertyEntryId {
}

class AssetPropertyId {
}

class AssetPropertyIntegerValue {
}

class AssetPropertyOffsetInNanos {
}

class AssetPropertyQuality {
}

class AssetPropertyStringValue {
}

class AssetPropertyTimeInSeconds {
}

class AssetPropertyTimestamp {
  public AssetPropertyOffsetInNanos $offset_in_nanos;
  public AssetPropertyTimeInSeconds $time_in_seconds;
}

class AssetPropertyValue {
  public AssetPropertyQuality $quality;
  public AssetPropertyTimestamp $timestamp;
  public AssetPropertyVariant $value;
}

class AssetPropertyVariant {
  public AssetPropertyBooleanValue $boolean_value;
  public AssetPropertyDoubleValue $double_value;
  public AssetPropertyIntegerValue $integer_value;
  public AssetPropertyStringValue $string_value;
}

class Attribute {
  public AttributeJsonPath $json_path;
}

class AttributeJsonPath {
}

class Attributes {
}

class ClearTimerAction {
  public TimerName $timer_name;
}

class Condition {
}

class ContentExpression {
}

class CreateDetectorModelRequest {
  public DetectorModelDefinition $detector_model_definition;
  public DetectorModelDescription $detector_model_description;
  public DetectorModelName $detector_model_name;
  public EvaluationMethod $evaluation_method;
  public AttributeJsonPath $key;
  public AmazonResourceName $role_arn;
  public Tags $tags;
}

class CreateDetectorModelResponse {
  public DetectorModelConfiguration $detector_model_configuration;
}

class CreateInputRequest {
  public InputDefinition $input_definition;
  public InputDescription $input_description;
  public InputName $input_name;
  public Tags $tags;
}

class CreateInputResponse {
  public InputConfiguration $input_configuration;
}

class DeleteDetectorModelRequest {
  public DetectorModelName $detector_model_name;
}

class DeleteDetectorModelResponse {
}

class DeleteInputRequest {
  public InputName $input_name;
}

class DeleteInputResponse {
}

class DeliveryStreamName {
}

class DescribeDetectorModelRequest {
  public DetectorModelName $detector_model_name;
  public DetectorModelVersion $detector_model_version;
}

class DescribeDetectorModelResponse {
  public DetectorModel $detector_model;
}

class DescribeInputRequest {
  public InputName $input_name;
}

class DescribeInputResponse {
  public Input $input;
}

class DescribeLoggingOptionsRequest {
}

class DescribeLoggingOptionsResponse {
  public LoggingOptions $logging_options;
}

class DetectorDebugOption {
  public DetectorModelName $detector_model_name;
  public KeyValue $key_value;
}

class DetectorDebugOptions {
}

class DetectorModel {
  public DetectorModelConfiguration $detector_model_configuration;
  public DetectorModelDefinition $detector_model_definition;
}

class DetectorModelArn {
}

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
}

class DetectorModelDefinition {
  public StateName $initial_state_name;
  public States $states;
}

class DetectorModelDescription {
}

class DetectorModelName {
}

class DetectorModelSummaries {
}

class DetectorModelSummary {
  public Timestamp $creation_time;
  public DetectorModelDescription $detector_model_description;
  public DetectorModelName $detector_model_name;
}

class DetectorModelVersion {
}

class DetectorModelVersionStatus {
}

class DetectorModelVersionSummaries {
}

class DetectorModelVersionSummary {
  public Timestamp $creation_time;
  public DetectorModelArn $detector_model_arn;
  public DetectorModelName $detector_model_name;
  public DetectorModelVersion $detector_model_version;
  public EvaluationMethod $evaluation_method;
  public Timestamp $last_update_time;
  public AmazonResourceName $role_arn;
  public DetectorModelVersionStatus $status;
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
}

class DynamoDBv2Action {
  public Payload $payload;
  public DynamoTableName $table_name;
}

class DynamoKeyField {
}

class DynamoKeyType {
}

class DynamoKeyValue {
}

class DynamoOperation {
}

class DynamoTableName {
}

class EvaluationMethod {
}

class Event {
  public Actions $actions;
  public Condition $condition;
  public EventName $event_name;
}

class EventName {
}

class Events {
}

class FirehoseAction {
  public DeliveryStreamName $delivery_stream_name;
  public Payload $payload;
  public FirehoseSeparator $separator;
}

class FirehoseSeparator {
}

class Input {
  public InputConfiguration $input_configuration;
  public InputDefinition $input_definition;
}

class InputArn {
}

class InputConfiguration {
  public Timestamp $creation_time;
  public InputArn $input_arn;
  public InputDescription $input_description;
  public InputName $input_name;
  public Timestamp $last_update_time;
  public InputStatus $status;
}

class InputDefinition {
  public Attributes $attributes;
}

class InputDescription {
}

class InputName {
}

class InputStatus {
}

class InputSummaries {
}

class InputSummary {
  public Timestamp $creation_time;
  public InputArn $input_arn;
  public InputDescription $input_description;
  public InputName $input_name;
  public Timestamp $last_update_time;
  public InputStatus $status;
}

class InternalFailureException {
  public errorMessage $message;
}

class InvalidRequestException {
  public errorMessage $message;
}

class IotEventsAction {
  public InputName $input_name;
  public Payload $payload;
}

class IotSiteWiseAction {
  public AssetId $asset_id;
  public AssetPropertyEntryId $entry_id;
  public AssetPropertyAlias $property_alias;
  public AssetPropertyId $property_id;
  public AssetPropertyValue $property_value;
}

class IotTopicPublishAction {
  public MQTTTopic $mqtt_topic;
  public Payload $payload;
}

class KeyValue {
}

class LambdaAction {
  public AmazonResourceName $function_arn;
  public Payload $payload;
}

class LimitExceededException {
  public errorMessage $message;
}

class ListDetectorModelVersionsRequest {
  public DetectorModelName $detector_model_name;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDetectorModelVersionsResponse {
  public DetectorModelVersionSummaries $detector_model_version_summaries;
  public NextToken $next_token;
}

class ListDetectorModelsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDetectorModelsResponse {
  public DetectorModelSummaries $detector_model_summaries;
  public NextToken $next_token;
}

class ListInputsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListInputsResponse {
  public InputSummaries $input_summaries;
  public NextToken $next_token;
}

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;
}

class ListTagsForResourceResponse {
  public Tags $tags;
}

class LoggingEnabled {
}

class LoggingLevel {
}

class LoggingOptions {
  public DetectorDebugOptions $detector_debug_options;
  public LoggingEnabled $enabled;
  public LoggingLevel $level;
  public AmazonResourceName $role_arn;
}

class MQTTTopic {
}

class MaxResults {
}

class NextToken {
}

class OnEnterLifecycle {
  public Events $events;
}

class OnExitLifecycle {
  public Events $events;
}

class OnInputLifecycle {
  public Events $events;
  public TransitionEvents $transition_events;
}

class Payload {
  public ContentExpression $content_expression;
  public PayloadType $type;
}

class PayloadType {
}

class PutLoggingOptionsRequest {
  public LoggingOptions $logging_options;
}

class QueueUrl {
}

class ResetTimerAction {
  public TimerName $timer_name;
}

class ResourceAlreadyExistsException {
  public errorMessage $message;
  public resourceArn $resource_arn;
  public resourceId $resource_id;
}

class ResourceInUseException {
  public errorMessage $message;
}

class ResourceNotFoundException {
  public errorMessage $message;
}

class SNSTopicPublishAction {
  public Payload $payload;
  public AmazonResourceName $target_arn;
}

class Seconds {
}

class ServiceUnavailableException {
  public errorMessage $message;
}

class SetTimerAction {
  public VariableValue $duration_expression;
  public Seconds $seconds;
  public TimerName $timer_name;
}

class SetVariableAction {
  public VariableValue $value;
  public VariableName $variable_name;
}

class SqsAction {
  public Payload $payload;
  public QueueUrl $queue_url;
  public UseBase64 $use_base_64;
}

class State {
  public OnEnterLifecycle $on_enter;
  public OnExitLifecycle $on_exit;
  public OnInputLifecycle $on_input;
  public StateName $state_name;
}

class StateName {
}

class States {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeys {
}

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public Tags $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class TagrisAccessDeniedException {
  public TagrisExceptionMessage $message;
}

class TagrisAccountId {
}

class TagrisAmazonResourceName {
}

class TagrisExceptionMessage {
}

class TagrisInternalId {
}

class TagrisInternalServiceException {
  public TagrisExceptionMessage $message;
}

class TagrisInvalidArnException {
  public TagrisExceptionMessage $message;
  public TagrisSweepListItem $sweep_list_item;
}

class TagrisInvalidParameterException {
  public TagrisExceptionMessage $message;
}

class TagrisPartialResourcesExistResultsException {
  public TagrisExceptionMessage $message;
  public TagrisSweepListResult $resource_existence_information;
}

class TagrisStatus {
}

class TagrisSweepList {
}

class TagrisSweepListItem {
  public TagrisAccountId $tagris_account_id;
  public TagrisAmazonResourceName $tagris_amazon_resource_name;
  public TagrisInternalId $tagris_internal_id;
  public TagrisVersion $tagris_version;
}

class TagrisSweepListResult {
}

class TagrisThrottledException {
  public TagrisExceptionMessage $message;
}

class TagrisVerifyResourcesExistInput {
  public TagrisSweepList $tagris_sweep_list;
}

class TagrisVerifyResourcesExistOutput {
  public TagrisSweepListResult $tagris_sweep_list_result;
}

class TagrisVersion {
}

class Tags {
}

class ThrottlingException {
  public errorMessage $message;
}

class TimerName {
}

class Timestamp {
}

class TransitionEvent {
  public Actions $actions;
  public Condition $condition;
  public EventName $event_name;
  public StateName $next_state;
}

class TransitionEvents {
}

class UnsupportedOperationException {
  public errorMessage $message;
}

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeys $tag_keys;
}

class UntagResourceResponse {
}

class UpdateDetectorModelRequest {
  public DetectorModelDefinition $detector_model_definition;
  public DetectorModelDescription $detector_model_description;
  public DetectorModelName $detector_model_name;
  public EvaluationMethod $evaluation_method;
  public AmazonResourceName $role_arn;
}

class UpdateDetectorModelResponse {
  public DetectorModelConfiguration $detector_model_configuration;
}

class UpdateInputRequest {
  public InputDefinition $input_definition;
  public InputDescription $input_description;
  public InputName $input_name;
}

class UpdateInputResponse {
  public InputConfiguration $input_configuration;
}

class UseBase64 {
}

class VariableName {
}

class VariableValue {
}

class errorMessage {
}

class resourceArn {
}

class resourceId {
}


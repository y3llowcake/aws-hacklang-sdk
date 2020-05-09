<?hh // strict
namespace slack\aws\iotevents;

interface IoT Events {
  public function DescribeDetectorModel(DescribeDetectorModelRequest) Awaitable<Errors\Result<DescribeDetectorModelResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function UpdateInput(UpdateInputRequest) Awaitable<Errors\Result<UpdateInputResponse>>;
  public function CreateDetectorModel(CreateDetectorModelRequest) Awaitable<Errors\Result<CreateDetectorModelResponse>>;
  public function DeleteDetectorModel(DeleteDetectorModelRequest) Awaitable<Errors\Result<DeleteDetectorModelResponse>>;
  public function DeleteInput(DeleteInputRequest) Awaitable<Errors\Result<DeleteInputResponse>>;
  public function ListDetectorModelVersions(ListDetectorModelVersionsRequest) Awaitable<Errors\Result<ListDetectorModelVersionsResponse>>;
  public function PutLoggingOptions(PutLoggingOptionsRequest) Awaitable<Errors\Error>;
  public function VerifyResourcesExistForTagris(TagrisVerifyResourcesExistInput) Awaitable<Errors\Result<TagrisVerifyResourcesExistOutput>>;
  public function DescribeInput(DescribeInputRequest) Awaitable<Errors\Result<DescribeInputResponse>>;
  public function ListInputs(ListInputsRequest) Awaitable<Errors\Result<ListInputsResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function CreateInput(CreateInputRequest) Awaitable<Errors\Result<CreateInputResponse>>;
  public function DescribeLoggingOptions(DescribeLoggingOptionsRequest) Awaitable<Errors\Result<DescribeLoggingOptionsResponse>>;
  public function ListDetectorModels(ListDetectorModelsRequest) Awaitable<Errors\Result<ListDetectorModelsResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UpdateDetectorModel(UpdateDetectorModelRequest) Awaitable<Errors\Result<UpdateDetectorModelResponse>>;
}

class AssetPropertyDoubleValue {
}

class Event {
  public EventName $event_name;
  public Condition $condition;
  public Actions $actions;
}

class TagrisInvalidArnException {
  public TagrisExceptionMessage $message;
  public TagrisSweepListItem $sweep_list_item;
}

class TagrisStatus {
}

class TagrisSweepListItem {
  public TagrisAmazonResourceName $tagris_amazon_resource_name;
  public TagrisInternalId $tagris_internal_id;
  public TagrisVersion $tagris_version;
  public TagrisAccountId $tagris_account_id;
}

class ListTagsForResourceResponse {
  public Tags $tags;
}

class Payload {
  public PayloadType $type;
  public ContentExpression $content_expression;
}

class ResourceAlreadyExistsException {
  public errorMessage $message;
  public resourceId $resource_id;
  public resourceArn $resource_arn;
}

class TagrisAccessDeniedException {
  public TagrisExceptionMessage $message;
}

class AssetPropertyEntryId {
}

class FirehoseSeparator {
}

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;
}

class UseBase64 {
}

class DetectorModelName {
}

class Events {
}

class ListDetectorModelsResponse {
  public DetectorModelSummaries $detector_model_summaries;
  public NextToken $next_token;
}

class DescribeDetectorModelRequest {
  public DetectorModelName $detector_model_name;
  public DetectorModelVersion $detector_model_version;
}

class LimitExceededException {
  public errorMessage $message;
}

class MaxResults {
}

class UpdateInputResponse {
  public InputConfiguration $input_configuration;
}

class OnEnterLifecycle {
  public Events $events;
}

class TagrisInternalServiceException {
  public TagrisExceptionMessage $message;
}

class Attributes {
}

class CreateDetectorModelRequest {
  public EvaluationMethod $evaluation_method;
  public DetectorModelName $detector_model_name;
  public DetectorModelDefinition $detector_model_definition;
  public DetectorModelDescription $detector_model_description;
  public AttributeJsonPath $key;
  public AmazonResourceName $role_arn;
  public Tags $tags;
}

class DescribeInputResponse {
  public Input $input;
}

class LoggingOptions {
  public AmazonResourceName $role_arn;
  public LoggingLevel $level;
  public LoggingEnabled $enabled;
  public DetectorDebugOptions $detector_debug_options;
}

class AmazonResourceName {
}

class AssetPropertyOffsetInNanos {
}

class SqsAction {
  public QueueUrl $queue_url;
  public UseBase64 $use_base_64;
  public Payload $payload;
}

class TransitionEvent {
  public Condition $condition;
  public Actions $actions;
  public StateName $next_state;
  public EventName $event_name;
}

class ServiceUnavailableException {
  public errorMessage $message;
}

class SetTimerAction {
  public TimerName $timer_name;
  public Seconds $seconds;
  public VariableValue $duration_expression;
}

class SetVariableAction {
  public VariableName $variable_name;
  public VariableValue $value;
}

class Tags {
}

class ContentExpression {
}

class CreateInputRequest {
  public InputDefinition $input_definition;
  public Tags $tags;
  public InputName $input_name;
  public InputDescription $input_description;
}

class DeleteDetectorModelResponse {
}

class DetectorDebugOption {
  public KeyValue $key_value;
  public DetectorModelName $detector_model_name;
}

class Attribute {
  public AttributeJsonPath $json_path;
}

class DescribeInputRequest {
  public InputName $input_name;
}

class EvaluationMethod {
}

class TagrisExceptionMessage {
}

class AssetPropertyTimestamp {
  public AssetPropertyTimeInSeconds $time_in_seconds;
  public AssetPropertyOffsetInNanos $offset_in_nanos;
}

class DynamoTableName {
}

class IotSiteWiseAction {
  public AssetPropertyEntryId $entry_id;
  public AssetId $asset_id;
  public AssetPropertyId $property_id;
  public AssetPropertyAlias $property_alias;
  public AssetPropertyValue $property_value;
}

class PutLoggingOptionsRequest {
  public LoggingOptions $logging_options;
}

class VariableName {
}

class DetectorModelSummaries {
}

class IotTopicPublishAction {
  public Payload $payload;
  public MQTTTopic $mqtt_topic;
}

class UnsupportedOperationException {
  public errorMessage $message;
}

class UpdateInputRequest {
  public InputName $input_name;
  public InputDescription $input_description;
  public InputDefinition $input_definition;
}

class AssetPropertyAlias {
}

class DeleteInputResponse {
}

class UpdateDetectorModelResponse {
  public DetectorModelConfiguration $detector_model_configuration;
}

class TagrisPartialResourcesExistResultsException {
  public TagrisExceptionMessage $message;
  public TagrisSweepListResult $resource_existence_information;
}

class TagKey {
}

class resourceArn {
}

class Actions {
}

class AttributeJsonPath {
}

class InputName {
}

class IotEventsAction {
  public InputName $input_name;
  public Payload $payload;
}

class TagrisAmazonResourceName {
}

class TagrisVerifyResourcesExistInput {
  public TagrisSweepList $tagris_sweep_list;
}

class UpdateDetectorModelRequest {
  public AmazonResourceName $role_arn;
  public EvaluationMethod $evaluation_method;
  public DetectorModelName $detector_model_name;
  public DetectorModelDefinition $detector_model_definition;
  public DetectorModelDescription $detector_model_description;
}

class InputDescription {
}

class LambdaAction {
  public AmazonResourceName $function_arn;
  public Payload $payload;
}

class OnInputLifecycle {
  public TransitionEvents $transition_events;
  public Events $events;
}

class ResetTimerAction {
  public TimerName $timer_name;
}

class Action {
  public ResetTimerAction $reset_timer;
  public IotEventsAction $iot_events;
  public SqsAction $sqs;
  public FirehoseAction $firehose;
  public DynamoDBAction $dynamo_db;
  public DynamoDBv2Action $dynamo_d_bv_2;
  public IotTopicPublishAction $iot_topic_publish;
  public SNSTopicPublishAction $sns;
  public SetTimerAction $set_timer;
  public ClearTimerAction $clear_timer;
  public LambdaAction $lambda;
  public IotSiteWiseAction $iot_site_wise;
  public SetVariableAction $set_variable;
}

class CreateDetectorModelResponse {
  public DetectorModelConfiguration $detector_model_configuration;
}

class DynamoKeyType {
}

class DynamoOperation {
}

class Seconds {
}

class State {
  public StateName $state_name;
  public OnInputLifecycle $on_input;
  public OnEnterLifecycle $on_enter;
  public OnExitLifecycle $on_exit;
}

class TagrisAccountId {
}

class DescribeLoggingOptionsResponse {
  public LoggingOptions $logging_options;
}

class DynamoKeyValue {
}

class KeyValue {
}

class ListDetectorModelVersionsResponse {
  public DetectorModelVersionSummaries $detector_model_version_summaries;
  public NextToken $next_token;
}

class DynamoDBAction {
  public DynamoKeyField $hash_key_field;
  public DynamoKeyValue $hash_key_value;
  public DynamoKeyField $payload_field;
  public DynamoTableName $table_name;
  public DynamoKeyType $hash_key_type;
  public DynamoKeyType $range_key_type;
  public DynamoKeyField $range_key_field;
  public DynamoKeyValue $range_key_value;
  public DynamoOperation $operation;
  public Payload $payload;
}

class EventName {
}

class PayloadType {
}

class TagrisSweepListResult {
}

class AssetPropertyValue {
  public AssetPropertyVariant $value;
  public AssetPropertyTimestamp $timestamp;
  public AssetPropertyQuality $quality;
}

class DeleteInputRequest {
  public InputName $input_name;
}

class DetectorModelArn {
}

class DetectorModelVersion {
}

class AssetPropertyStringValue {
}

class TagrisInternalId {
}

class StateName {
}

class ThrottlingException {
  public errorMessage $message;
}

class errorMessage {
}

class TagrisSweepList {
}

class Timestamp {
}

class DetectorModelDefinition {
  public StateName $initial_state_name;
  public States $states;
}

class InputConfiguration {
  public InputName $input_name;
  public InputDescription $input_description;
  public InputArn $input_arn;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
  public InputStatus $status;
}

class InputStatus {
}

class TagKeys {
}

class TagrisInvalidParameterException {
  public TagrisExceptionMessage $message;
}

class TagrisThrottledException {
  public TagrisExceptionMessage $message;
}

class resourceId {
}

class AssetPropertyId {
}

class AssetPropertyIntegerValue {
}

class LoggingEnabled {
}

class ResourceNotFoundException {
  public errorMessage $message;
}

class ResourceInUseException {
  public errorMessage $message;
}

class DeleteDetectorModelRequest {
  public DetectorModelName $detector_model_name;
}

class DetectorModelVersionSummary {
  public DetectorModelArn $detector_model_arn;
  public AmazonResourceName $role_arn;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
  public DetectorModelVersionStatus $status;
  public EvaluationMethod $evaluation_method;
  public DetectorModelName $detector_model_name;
  public DetectorModelVersion $detector_model_version;
}

class InputSummaries {
}

class InvalidRequestException {
  public errorMessage $message;
}

class LoggingLevel {
}

class MQTTTopic {
}

class ListInputsResponse {
  public InputSummaries $input_summaries;
  public NextToken $next_token;
}

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public Tags $tags;
}

class AssetPropertyBooleanValue {
}

class DetectorModelSummary {
  public DetectorModelName $detector_model_name;
  public DetectorModelDescription $detector_model_description;
  public Timestamp $creation_time;
}

class DynamoDBv2Action {
  public Payload $payload;
  public DynamoTableName $table_name;
}

class InternalFailureException {
  public errorMessage $message;
}

class TagrisVersion {
}

class VariableValue {
}

class DetectorDebugOptions {
}

class Input {
  public InputConfiguration $input_configuration;
  public InputDefinition $input_definition;
}

class ListDetectorModelsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TimerName {
}

class AssetPropertyVariant {
  public AssetPropertyStringValue $string_value;
  public AssetPropertyIntegerValue $integer_value;
  public AssetPropertyDoubleValue $double_value;
  public AssetPropertyBooleanValue $boolean_value;
}

class ClearTimerAction {
  public TimerName $timer_name;
}

class InputSummary {
  public InputArn $input_arn;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
  public InputStatus $status;
  public InputName $input_name;
  public InputDescription $input_description;
}

class States {
}

class DescribeLoggingOptionsRequest {
}

class DetectorModelVersionSummaries {
}

class TagResourceResponse {
}

class DynamoKeyField {
}

class InputArn {
}

class InputDefinition {
  public Attributes $attributes;
}

class TagValue {
}

class AssetPropertyQuality {
}

class AssetPropertyTimeInSeconds {
}

class CreateInputResponse {
  public InputConfiguration $input_configuration;
}

class DetectorModelConfiguration {
  public Timestamp $creation_time;
  public DetectorModelVersionStatus $status;
  public DetectorModelName $detector_model_name;
  public DetectorModelDescription $detector_model_description;
  public AmazonResourceName $role_arn;
  public AttributeJsonPath $key;
  public EvaluationMethod $evaluation_method;
  public DetectorModelVersion $detector_model_version;
  public DetectorModelArn $detector_model_arn;
  public Timestamp $last_update_time;
}

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeys $tag_keys;
}

class UntagResourceResponse {
}

class DescribeDetectorModelResponse {
  public DetectorModel $detector_model;
}

class ListInputsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class OnExitLifecycle {
  public Events $events;
}

class SNSTopicPublishAction {
  public AmazonResourceName $target_arn;
  public Payload $payload;
}

class QueueUrl {
}

class AssetId {
}

class Condition {
}

class DetectorModel {
  public DetectorModelDefinition $detector_model_definition;
  public DetectorModelConfiguration $detector_model_configuration;
}

class FirehoseAction {
  public FirehoseSeparator $separator;
  public Payload $payload;
  public DeliveryStreamName $delivery_stream_name;
}

class NextToken {
}

class TagrisVerifyResourcesExistOutput {
  public TagrisSweepListResult $tagris_sweep_list_result;
}

class TransitionEvents {
}

class DeliveryStreamName {
}

class DetectorModelDescription {
}

class DetectorModelVersionStatus {
}

class ListDetectorModelVersionsRequest {
  public MaxResults $max_results;
  public DetectorModelName $detector_model_name;
  public NextToken $next_token;
}


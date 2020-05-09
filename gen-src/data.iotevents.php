<?hh // strict
namespace slack\aws\data.iotevents;

interface IoT Events Data {
  public function BatchPutMessage(BatchPutMessageRequest): Awaitable<Errors\Result<BatchPutMessageResponse>>;
  public function BatchUpdateDetector(BatchUpdateDetectorRequest): Awaitable<Errors\Result<BatchUpdateDetectorResponse>>;
  public function DescribeDetector(DescribeDetectorRequest): Awaitable<Errors\Result<DescribeDetectorResponse>>;
  public function ListDetectors(ListDetectorsRequest): Awaitable<Errors\Result<ListDetectorsResponse>>;
}

class BatchPutMessageErrorEntries {
}

class BatchPutMessageErrorEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public MessageId $message_id;
}

class BatchPutMessageRequest {
  public Messages $messages;
}

class BatchPutMessageResponse {
  public BatchPutMessageErrorEntries $batch_put_message_error_entries;
}

class BatchUpdateDetectorErrorEntries {
}

class BatchUpdateDetectorErrorEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public MessageId $message_id;
}

class BatchUpdateDetectorRequest {
  public UpdateDetectorRequests $detectors;
}

class BatchUpdateDetectorResponse {
  public BatchUpdateDetectorErrorEntries $batch_update_detector_error_entries;
}

class DescribeDetectorRequest {
  public DetectorModelName $detector_model_name;
  public KeyValue $key_value;
}

class DescribeDetectorResponse {
  public Detector $detector;
}

class Detector {
  public Timestamp $creation_time;
  public DetectorModelName $detector_model_name;
  public DetectorModelVersion $detector_model_version;
  public KeyValue $key_value;
  public Timestamp $last_update_time;
  public DetectorState $state;
}

class DetectorModelName {
}

class DetectorModelVersion {
}

class DetectorState {
  public StateName $state_name;
  public Timers $timers;
  public Variables $variables;
}

class DetectorStateDefinition {
  public StateName $state_name;
  public TimerDefinitions $timers;
  public VariableDefinitions $variables;
}

class DetectorStateSummary {
  public StateName $state_name;
}

class DetectorSummaries {
}

class DetectorSummary {
  public Timestamp $creation_time;
  public DetectorModelName $detector_model_name;
  public DetectorModelVersion $detector_model_version;
  public KeyValue $key_value;
  public Timestamp $last_update_time;
  public DetectorStateSummary $state;
}

class ErrorCode {
}

class ErrorMessage {
}

class InputName {
}

class InternalFailureException {
  public errorMessage $message;
}

class InvalidRequestException {
  public errorMessage $message;
}

class KeyValue {
}

class ListDetectorsRequest {
  public DetectorModelName $detector_model_name;
  public MaxResults $max_results;
  public NextToken $next_token;
  public StateName $state_name;
}

class ListDetectorsResponse {
  public DetectorSummaries $detector_summaries;
  public NextToken $next_token;
}

class MaxResults {
}

class Message {
  public InputName $input_name;
  public MessageId $message_id;
  public Payload $payload;
}

class MessageId {
}

class Messages {
}

class NextToken {
}

class Payload {
}

class ResourceNotFoundException {
  public errorMessage $message;
}

class Seconds {
}

class ServiceUnavailableException {
  public errorMessage $message;
}

class StateName {
}

class ThrottlingException {
  public errorMessage $message;
}

class Timer {
  public TimerName $name;
  public Timestamp $timestamp;
}

class TimerDefinition {
  public TimerName $name;
  public Seconds $seconds;
}

class TimerDefinitions {
}

class TimerName {
}

class Timers {
}

class Timestamp {
}

class UpdateDetectorRequest {
  public DetectorModelName $detector_model_name;
  public KeyValue $key_value;
  public MessageId $message_id;
  public DetectorStateDefinition $state;
}

class UpdateDetectorRequests {
}

class Variable {
  public VariableName $name;
  public VariableValue $value;
}

class VariableDefinition {
  public VariableName $name;
  public VariableValue $value;
}

class VariableDefinitions {
}

class VariableName {
}

class VariableValue {
}

class Variables {
}

class errorMessage {
}


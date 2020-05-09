<?hh // strict
namespace slack\aws\data.iotevents;

interface IoT Events Data {
  public function BatchUpdateDetector(BatchUpdateDetectorRequest) Awaitable<Errors\Result<BatchUpdateDetectorResponse>>;
  public function DescribeDetector(DescribeDetectorRequest) Awaitable<Errors\Result<DescribeDetectorResponse>>;
  public function ListDetectors(ListDetectorsRequest) Awaitable<Errors\Result<ListDetectorsResponse>>;
  public function BatchPutMessage(BatchPutMessageRequest) Awaitable<Errors\Result<BatchPutMessageResponse>>;
}

class Timestamp {
}

class UpdateDetectorRequests {
}

class VariableValue {
}

class DescribeDetectorResponse {
  public Detector $detector;
}

class DetectorState {
  public StateName $state_name;
  public Variables $variables;
  public Timers $timers;
}

class InputName {
}

class ThrottlingException {
  public errorMessage $message;
}

class Timer {
  public TimerName $name;
  public Timestamp $timestamp;
}

class VariableDefinition {
  public VariableName $name;
  public VariableValue $value;
}

class InvalidRequestException {
  public errorMessage $message;
}

class ListDetectorsRequest {
  public MaxResults $max_results;
  public DetectorModelName $detector_model_name;
  public StateName $state_name;
  public NextToken $next_token;
}

class Message {
  public InputName $input_name;
  public Payload $payload;
  public MessageId $message_id;
}

class NextToken {
}

class ResourceNotFoundException {
  public errorMessage $message;
}

class BatchPutMessageErrorEntry {
  public MessageId $message_id;
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
}

class BatchUpdateDetectorErrorEntries {
}

class Payload {
}

class TimerDefinitions {
}

class ServiceUnavailableException {
  public errorMessage $message;
}

class StateName {
}

class Variables {
}

class BatchPutMessageErrorEntries {
}

class BatchPutMessageRequest {
  public Messages $messages;
}

class DescribeDetectorRequest {
  public DetectorModelName $detector_model_name;
  public KeyValue $key_value;
}

class ErrorMessage {
}

class MaxResults {
}

class errorMessage {
}

class BatchUpdateDetectorErrorEntry {
  public MessageId $message_id;
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
}

class DetectorModelName {
}

class DetectorStateDefinition {
  public StateName $state_name;
  public VariableDefinitions $variables;
  public TimerDefinitions $timers;
}

class ListDetectorsResponse {
  public DetectorSummaries $detector_summaries;
  public NextToken $next_token;
}

class UpdateDetectorRequest {
  public MessageId $message_id;
  public DetectorModelName $detector_model_name;
  public KeyValue $key_value;
  public DetectorStateDefinition $state;
}

class KeyValue {
}

class Messages {
}

class Timers {
}

class BatchUpdateDetectorRequest {
  public UpdateDetectorRequests $detectors;
}

class Detector {
  public Timestamp $last_update_time;
  public DetectorModelName $detector_model_name;
  public KeyValue $key_value;
  public DetectorModelVersion $detector_model_version;
  public DetectorState $state;
  public Timestamp $creation_time;
}

class DetectorModelVersion {
}

class DetectorStateSummary {
  public StateName $state_name;
}

class InternalFailureException {
  public errorMessage $message;
}

class VariableDefinitions {
}

class VariableName {
}

class MessageId {
}

class Seconds {
}

class TimerDefinition {
  public TimerName $name;
  public Seconds $seconds;
}

class TimerName {
}

class Variable {
  public VariableName $name;
  public VariableValue $value;
}

class BatchPutMessageResponse {
  public BatchPutMessageErrorEntries $batch_put_message_error_entries;
}

class BatchUpdateDetectorResponse {
  public BatchUpdateDetectorErrorEntries $batch_update_detector_error_entries;
}

class DetectorSummaries {
}

class DetectorSummary {
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
  public DetectorModelName $detector_model_name;
  public KeyValue $key_value;
  public DetectorModelVersion $detector_model_version;
  public DetectorStateSummary $state;
}

class ErrorCode {
}


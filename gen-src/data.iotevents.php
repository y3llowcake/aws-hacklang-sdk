<?hh // strict
namespace slack\aws\data.iotevents;

interface IoTEventsData {
  public function BatchPutMessage(BatchPutMessageRequest $in): Awaitable<\Errors\Result<BatchPutMessageResponse>>;
  public function BatchUpdateDetector(BatchUpdateDetectorRequest $in): Awaitable<\Errors\Result<BatchUpdateDetectorResponse>>;
  public function DescribeDetector(DescribeDetectorRequest $in): Awaitable<\Errors\Result<DescribeDetectorResponse>>;
  public function ListDetectors(ListDetectorsRequest $in): Awaitable<\Errors\Result<ListDetectorsResponse>>;
}

type BatchPutMessageErrorEntries = vec<BatchPutMessageErrorEntry>;

class BatchPutMessageErrorEntry {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $error_message;
  public ?MessageId $message_id;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ErrorMessage,
    ?'message_id' => ?MessageId,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->message_id = $s['message_id'] ?? '';
  }
}

class BatchPutMessageRequest {
  public ?Messages $messages;

  public function __construct(shape(
    ?'messages' => ?Messages,
  ) $s = shape()) {
    $this->messages = $s['messages'] ?? vec[];
  }
}

class BatchPutMessageResponse {
  public ?BatchPutMessageErrorEntries $batch_put_message_error_entries;

  public function __construct(shape(
    ?'batch_put_message_error_entries' => ?BatchPutMessageErrorEntries,
  ) $s = shape()) {
    $this->batch_put_message_error_entries = $s['batch_put_message_error_entries'] ?? vec[];
  }
}

type BatchUpdateDetectorErrorEntries = vec<BatchUpdateDetectorErrorEntry>;

class BatchUpdateDetectorErrorEntry {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $error_message;
  public ?MessageId $message_id;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ErrorMessage,
    ?'message_id' => ?MessageId,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->message_id = $s['message_id'] ?? '';
  }
}

class BatchUpdateDetectorRequest {
  public ?UpdateDetectorRequests $detectors;

  public function __construct(shape(
    ?'detectors' => ?UpdateDetectorRequests,
  ) $s = shape()) {
    $this->detectors = $s['detectors'] ?? vec[];
  }
}

class BatchUpdateDetectorResponse {
  public ?BatchUpdateDetectorErrorEntries $batch_update_detector_error_entries;

  public function __construct(shape(
    ?'batch_update_detector_error_entries' => ?BatchUpdateDetectorErrorEntries,
  ) $s = shape()) {
    $this->batch_update_detector_error_entries = $s['batch_update_detector_error_entries'] ?? vec[];
  }
}

class DescribeDetectorRequest {
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

class DescribeDetectorResponse {
  public ?Detector $detector;

  public function __construct(shape(
    ?'detector' => ?Detector,
  ) $s = shape()) {
    $this->detector = $s['detector'] ?? null;
  }
}

class Detector {
  public ?Timestamp $creation_time;
  public ?DetectorModelName $detector_model_name;
  public ?DetectorModelVersion $detector_model_version;
  public ?KeyValue $key_value;
  public ?Timestamp $last_update_time;
  public ?DetectorState $state;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'detector_model_name' => ?DetectorModelName,
    ?'detector_model_version' => ?DetectorModelVersion,
    ?'key_value' => ?KeyValue,
    ?'last_update_time' => ?Timestamp,
    ?'state' => ?DetectorState,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->detector_model_name = $s['detector_model_name'] ?? '';
    $this->detector_model_version = $s['detector_model_version'] ?? '';
    $this->key_value = $s['key_value'] ?? '';
    $this->last_update_time = $s['last_update_time'] ?? 0;
    $this->state = $s['state'] ?? null;
  }
}

type DetectorModelName = string;

type DetectorModelVersion = string;

class DetectorState {
  public ?StateName $state_name;
  public ?Timers $timers;
  public ?Variables $variables;

  public function __construct(shape(
    ?'state_name' => ?StateName,
    ?'timers' => ?Timers,
    ?'variables' => ?Variables,
  ) $s = shape()) {
    $this->state_name = $s['state_name'] ?? '';
    $this->timers = $s['timers'] ?? vec[];
    $this->variables = $s['variables'] ?? vec[];
  }
}

class DetectorStateDefinition {
  public ?StateName $state_name;
  public ?TimerDefinitions $timers;
  public ?VariableDefinitions $variables;

  public function __construct(shape(
    ?'state_name' => ?StateName,
    ?'timers' => ?TimerDefinitions,
    ?'variables' => ?VariableDefinitions,
  ) $s = shape()) {
    $this->state_name = $s['state_name'] ?? '';
    $this->timers = $s['timers'] ?? vec[];
    $this->variables = $s['variables'] ?? vec[];
  }
}

class DetectorStateSummary {
  public ?StateName $state_name;

  public function __construct(shape(
    ?'state_name' => ?StateName,
  ) $s = shape()) {
    $this->state_name = $s['state_name'] ?? '';
  }
}

type DetectorSummaries = vec<DetectorSummary>;

class DetectorSummary {
  public ?Timestamp $creation_time;
  public ?DetectorModelName $detector_model_name;
  public ?DetectorModelVersion $detector_model_version;
  public ?KeyValue $key_value;
  public ?Timestamp $last_update_time;
  public ?DetectorStateSummary $state;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'detector_model_name' => ?DetectorModelName,
    ?'detector_model_version' => ?DetectorModelVersion,
    ?'key_value' => ?KeyValue,
    ?'last_update_time' => ?Timestamp,
    ?'state' => ?DetectorStateSummary,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->detector_model_name = $s['detector_model_name'] ?? '';
    $this->detector_model_version = $s['detector_model_version'] ?? '';
    $this->key_value = $s['key_value'] ?? '';
    $this->last_update_time = $s['last_update_time'] ?? 0;
    $this->state = $s['state'] ?? null;
  }
}

type ErrorCode = string;

type ErrorMessage = string;

type InputName = string;

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

type KeyValue = string;

class ListDetectorsRequest {
  public ?DetectorModelName $detector_model_name;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?StateName $state_name;

  public function __construct(shape(
    ?'detector_model_name' => ?DetectorModelName,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'state_name' => ?StateName,
  ) $s = shape()) {
    $this->detector_model_name = $s['detector_model_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->state_name = $s['state_name'] ?? '';
  }
}

class ListDetectorsResponse {
  public ?DetectorSummaries $detector_summaries;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'detector_summaries' => ?DetectorSummaries,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->detector_summaries = $s['detector_summaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type MaxResults = int;

class Message {
  public ?InputName $input_name;
  public ?MessageId $message_id;
  public ?Payload $payload;

  public function __construct(shape(
    ?'input_name' => ?InputName,
    ?'message_id' => ?MessageId,
    ?'payload' => ?Payload,
  ) $s = shape()) {
    $this->input_name = $s['input_name'] ?? '';
    $this->message_id = $s['message_id'] ?? '';
    $this->payload = $s['payload'] ?? '';
  }
}

type MessageId = string;

type Messages = vec<Message>;

type NextToken = string;

type Payload = string;

class ResourceNotFoundException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
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

type StateName = string;

class ThrottlingException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Timer {
  public ?TimerName $name;
  public ?Timestamp $timestamp;

  public function __construct(shape(
    ?'name' => ?TimerName,
    ?'timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

class TimerDefinition {
  public ?TimerName $name;
  public ?Seconds $seconds;

  public function __construct(shape(
    ?'name' => ?TimerName,
    ?'seconds' => ?Seconds,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->seconds = $s['seconds'] ?? 0;
  }
}

type TimerDefinitions = vec<TimerDefinition>;

type TimerName = string;

type Timers = vec<Timer>;

type Timestamp = int;

class UpdateDetectorRequest {
  public ?DetectorModelName $detector_model_name;
  public ?KeyValue $key_value;
  public ?MessageId $message_id;
  public ?DetectorStateDefinition $state;

  public function __construct(shape(
    ?'detector_model_name' => ?DetectorModelName,
    ?'key_value' => ?KeyValue,
    ?'message_id' => ?MessageId,
    ?'state' => ?DetectorStateDefinition,
  ) $s = shape()) {
    $this->detector_model_name = $s['detector_model_name'] ?? '';
    $this->key_value = $s['key_value'] ?? '';
    $this->message_id = $s['message_id'] ?? '';
    $this->state = $s['state'] ?? null;
  }
}

type UpdateDetectorRequests = vec<UpdateDetectorRequest>;

class Variable {
  public ?VariableName $name;
  public ?VariableValue $value;

  public function __construct(shape(
    ?'name' => ?VariableName,
    ?'value' => ?VariableValue,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class VariableDefinition {
  public ?VariableName $name;
  public ?VariableValue $value;

  public function __construct(shape(
    ?'name' => ?VariableName,
    ?'value' => ?VariableValue,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type VariableDefinitions = vec<VariableDefinition>;

type VariableName = string;

type VariableValue = string;

type Variables = vec<Variable>;

type errorMessage = string;


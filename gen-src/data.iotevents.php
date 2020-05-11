<?hh // strict
namespace slack\aws\data.iotevents;

interface IoT Events Data {
  public function BatchPutMessage(BatchPutMessageRequest): Awaitable<Errors\Result<BatchPutMessageResponse>>;
  public function BatchUpdateDetector(BatchUpdateDetectorRequest): Awaitable<Errors\Result<BatchUpdateDetectorResponse>>;
  public function DescribeDetector(DescribeDetectorRequest): Awaitable<Errors\Result<DescribeDetectorResponse>>;
  public function ListDetectors(ListDetectorsRequest): Awaitable<Errors\Result<ListDetectorsResponse>>;
}

type BatchPutMessageErrorEntries = vec<BatchPutMessageErrorEntry>;

class BatchPutMessageErrorEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public MessageId $message_id;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => ErrorMessage,
  ?'message_id' => MessageId,
  ) $s = shape()) {
    $this->error_code = $error_code ?? ;
    $this->error_message = $error_message ?? "";
    $this->message_id = $message_id ?? ;
  }
}

class BatchPutMessageRequest {
  public Messages $messages;

  public function __construct(shape(
  ?'messages' => Messages,
  ) $s = shape()) {
    $this->messages = $messages ?? ;
  }
}

class BatchPutMessageResponse {
  public BatchPutMessageErrorEntries $batch_put_message_error_entries;

  public function __construct(shape(
  ?'batch_put_message_error_entries' => BatchPutMessageErrorEntries,
  ) $s = shape()) {
    $this->batch_put_message_error_entries = $batch_put_message_error_entries ?? [];
  }
}

type BatchUpdateDetectorErrorEntries = vec<BatchUpdateDetectorErrorEntry>;

class BatchUpdateDetectorErrorEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public MessageId $message_id;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => ErrorMessage,
  ?'message_id' => MessageId,
  ) $s = shape()) {
    $this->error_code = $error_code ?? ;
    $this->error_message = $error_message ?? "";
    $this->message_id = $message_id ?? ;
  }
}

class BatchUpdateDetectorRequest {
  public UpdateDetectorRequests $detectors;

  public function __construct(shape(
  ?'detectors' => UpdateDetectorRequests,
  ) $s = shape()) {
    $this->detectors = $detectors ?? ;
  }
}

class BatchUpdateDetectorResponse {
  public BatchUpdateDetectorErrorEntries $batch_update_detector_error_entries;

  public function __construct(shape(
  ?'batch_update_detector_error_entries' => BatchUpdateDetectorErrorEntries,
  ) $s = shape()) {
    $this->batch_update_detector_error_entries = $batch_update_detector_error_entries ?? ;
  }
}

class DescribeDetectorRequest {
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

class DescribeDetectorResponse {
  public Detector $detector;

  public function __construct(shape(
  ?'detector' => Detector,
  ) $s = shape()) {
    $this->detector = $detector ?? ;
  }
}

class Detector {
  public Timestamp $creation_time;
  public DetectorModelName $detector_model_name;
  public DetectorModelVersion $detector_model_version;
  public KeyValue $key_value;
  public Timestamp $last_update_time;
  public DetectorState $state;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'detector_model_name' => DetectorModelName,
  ?'detector_model_version' => DetectorModelVersion,
  ?'key_value' => KeyValue,
  ?'last_update_time' => Timestamp,
  ?'state' => DetectorState,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? ;
    $this->detector_model_name = $detector_model_name ?? ;
    $this->detector_model_version = $detector_model_version ?? ;
    $this->key_value = $key_value ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->state = $state ?? ;
  }
}

type DetectorModelName = string;

type DetectorModelVersion = string;

class DetectorState {
  public StateName $state_name;
  public Timers $timers;
  public Variables $variables;

  public function __construct(shape(
  ?'state_name' => StateName,
  ?'timers' => Timers,
  ?'variables' => Variables,
  ) $s = shape()) {
    $this->state_name = $state_name ?? ;
    $this->timers = $timers ?? ;
    $this->variables = $variables ?? ;
  }
}

class DetectorStateDefinition {
  public StateName $state_name;
  public TimerDefinitions $timers;
  public VariableDefinitions $variables;

  public function __construct(shape(
  ?'state_name' => StateName,
  ?'timers' => TimerDefinitions,
  ?'variables' => VariableDefinitions,
  ) $s = shape()) {
    $this->state_name = $state_name ?? ;
    $this->timers = $timers ?? ;
    $this->variables = $variables ?? ;
  }
}

class DetectorStateSummary {
  public StateName $state_name;

  public function __construct(shape(
  ?'state_name' => StateName,
  ) $s = shape()) {
    $this->state_name = $state_name ?? ;
  }
}

type DetectorSummaries = vec<DetectorSummary>;

class DetectorSummary {
  public Timestamp $creation_time;
  public DetectorModelName $detector_model_name;
  public DetectorModelVersion $detector_model_version;
  public KeyValue $key_value;
  public Timestamp $last_update_time;
  public DetectorStateSummary $state;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'detector_model_name' => DetectorModelName,
  ?'detector_model_version' => DetectorModelVersion,
  ?'key_value' => KeyValue,
  ?'last_update_time' => Timestamp,
  ?'state' => DetectorStateSummary,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? ;
    $this->detector_model_name = $detector_model_name ?? ;
    $this->detector_model_version = $detector_model_version ?? ;
    $this->key_value = $key_value ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->state = $state ?? ;
  }
}

type ErrorCode = string;

type ErrorMessage = string;

type InputName = string;

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

type KeyValue = string;

class ListDetectorsRequest {
  public DetectorModelName $detector_model_name;
  public MaxResults $max_results;
  public NextToken $next_token;
  public StateName $state_name;

  public function __construct(shape(
  ?'detector_model_name' => DetectorModelName,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'state_name' => StateName,
  ) $s = shape()) {
    $this->detector_model_name = $detector_model_name ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->state_name = $state_name ?? ;
  }
}

class ListDetectorsResponse {
  public DetectorSummaries $detector_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'detector_summaries' => DetectorSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->detector_summaries = $detector_summaries ?? ;
    $this->next_token = $next_token ?? ;
  }
}

type MaxResults = int;

class Message {
  public InputName $input_name;
  public MessageId $message_id;
  public Payload $payload;

  public function __construct(shape(
  ?'input_name' => InputName,
  ?'message_id' => MessageId,
  ?'payload' => Payload,
  ) $s = shape()) {
    $this->input_name = $input_name ?? ;
    $this->message_id = $message_id ?? ;
    $this->payload = $payload ?? ;
  }
}

type MessageId = string;

type Messages = vec<Message>;

type NextToken = string;

type Payload = string;

class ResourceNotFoundException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
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

type StateName = string;

class ThrottlingException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class Timer {
  public TimerName $name;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'name' => TimerName,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->timestamp = $timestamp ?? ;
  }
}

class TimerDefinition {
  public TimerName $name;
  public Seconds $seconds;

  public function __construct(shape(
  ?'name' => TimerName,
  ?'seconds' => Seconds,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->seconds = $seconds ?? ;
  }
}

type TimerDefinitions = vec<TimerDefinition>;

type TimerName = string;

type Timers = vec<Timer>;

type Timestamp = int;

class UpdateDetectorRequest {
  public DetectorModelName $detector_model_name;
  public KeyValue $key_value;
  public MessageId $message_id;
  public DetectorStateDefinition $state;

  public function __construct(shape(
  ?'detector_model_name' => DetectorModelName,
  ?'key_value' => KeyValue,
  ?'message_id' => MessageId,
  ?'state' => DetectorStateDefinition,
  ) $s = shape()) {
    $this->detector_model_name = $detector_model_name ?? ;
    $this->key_value = $key_value ?? ;
    $this->message_id = $message_id ?? ;
    $this->state = $state ?? ;
  }
}

type UpdateDetectorRequests = vec<UpdateDetectorRequest>;

class Variable {
  public VariableName $name;
  public VariableValue $value;

  public function __construct(shape(
  ?'name' => VariableName,
  ?'value' => VariableValue,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->value = $value ?? ;
  }
}

class VariableDefinition {
  public VariableName $name;
  public VariableValue $value;

  public function __construct(shape(
  ?'name' => VariableName,
  ?'value' => VariableValue,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->value = $value ?? ;
  }
}

type VariableDefinitions = vec<VariableDefinition>;

type VariableName = string;

type VariableValue = string;

type Variables = vec<Variable>;

type errorMessage = string;


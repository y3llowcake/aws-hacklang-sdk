<?hh // strict
namespace slack\aws\runtime.sagemaker;

interface SageMakerRuntime {
  public function InvokeEndpoint(InvokeEndpointInput $in): Awaitable<\Errors\Result<InvokeEndpointOutput>>;
}

type BodyBlob = string;

type CustomAttributesHeader = string;

type EndpointName = string;

type Header = string;

class InternalFailure {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvokeEndpointInput {
  public ?Header $accept;
  public ?BodyBlob $body;
  public ?Header $content_type;
  public ?CustomAttributesHeader $custom_attributes;
  public ?EndpointName $endpoint_name;
  public ?TargetModelHeader $target_model;

  public function __construct(shape(
    ?'accept' => ?Header,
    ?'body' => ?BodyBlob,
    ?'content_type' => ?Header,
    ?'custom_attributes' => ?CustomAttributesHeader,
    ?'endpoint_name' => ?EndpointName,
    ?'target_model' => ?TargetModelHeader,
  ) $s = shape()) {
    $this->accept = $s['accept'] ?? '';
    $this->body = $s['body'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
    $this->custom_attributes = $s['custom_attributes'] ?? '';
    $this->endpoint_name = $s['endpoint_name'] ?? '';
    $this->target_model = $s['target_model'] ?? '';
  }
}

class InvokeEndpointOutput {
  public ?BodyBlob $body;
  public ?Header $content_type;
  public ?CustomAttributesHeader $custom_attributes;
  public ?Header $invoked_production_variant;

  public function __construct(shape(
    ?'body' => ?BodyBlob,
    ?'content_type' => ?Header,
    ?'custom_attributes' => ?CustomAttributesHeader,
    ?'invoked_production_variant' => ?Header,
  ) $s = shape()) {
    $this->body = $s['body'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
    $this->custom_attributes = $s['custom_attributes'] ?? '';
    $this->invoked_production_variant = $s['invoked_production_variant'] ?? '';
  }
}

type LogStreamArn = string;

type Message = string;

class ModelError {
  public ?LogStreamArn $log_stream_arn;
  public ?Message $message;
  public ?Message $original_message;
  public ?StatusCode $original_status_code;

  public function __construct(shape(
    ?'log_stream_arn' => ?LogStreamArn,
    ?'message' => ?Message,
    ?'original_message' => ?Message,
    ?'original_status_code' => ?StatusCode,
  ) $s = shape()) {
    $this->log_stream_arn = $s['log_stream_arn'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->original_message = $s['original_message'] ?? '';
    $this->original_status_code = $s['original_status_code'] ?? 0;
  }
}

class ServiceUnavailable {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type StatusCode = int;

type TargetModelHeader = string;

class ValidationError {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}


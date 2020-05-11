<?hh // strict
namespace slack\aws\runtime.sagemaker;

interface SageMaker Runtime {
  public function InvokeEndpoint(InvokeEndpointInput): Awaitable<Errors\Result<InvokeEndpointOutput>>;
}

type BodyBlob = string;

type CustomAttributesHeader = string;

type EndpointName = string;

type Header = string;

class InternalFailure {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvokeEndpointInput {
  public Header $accept;
  public BodyBlob $body;
  public Header $content_type;
  public CustomAttributesHeader $custom_attributes;
  public EndpointName $endpoint_name;
  public TargetModelHeader $target_model;

  public function __construct(shape(
  ?'accept' => Header,
  ?'body' => BodyBlob,
  ?'content_type' => Header,
  ?'custom_attributes' => CustomAttributesHeader,
  ?'endpoint_name' => EndpointName,
  ?'target_model' => TargetModelHeader,
  ) $s = shape()) {
    $this->accept = $accept ?? ;
    $this->body = $body ?? ;
    $this->content_type = $content_type ?? ;
    $this->custom_attributes = $custom_attributes ?? ;
    $this->endpoint_name = $endpoint_name ?? "";
    $this->target_model = $target_model ?? ;
  }
}

class InvokeEndpointOutput {
  public BodyBlob $body;
  public Header $content_type;
  public CustomAttributesHeader $custom_attributes;
  public Header $invoked_production_variant;

  public function __construct(shape(
  ?'body' => BodyBlob,
  ?'content_type' => Header,
  ?'custom_attributes' => CustomAttributesHeader,
  ?'invoked_production_variant' => Header,
  ) $s = shape()) {
    $this->body = $body ?? ;
    $this->content_type = $content_type ?? ;
    $this->custom_attributes = $custom_attributes ?? ;
    $this->invoked_production_variant = $invoked_production_variant ?? ;
  }
}

type LogStreamArn = string;

type Message = string;

class ModelError {
  public LogStreamArn $log_stream_arn;
  public Message $message;
  public Message $original_message;
  public StatusCode $original_status_code;

  public function __construct(shape(
  ?'log_stream_arn' => LogStreamArn,
  ?'message' => Message,
  ?'original_message' => Message,
  ?'original_status_code' => StatusCode,
  ) $s = shape()) {
    $this->log_stream_arn = $log_stream_arn ?? "";
    $this->message = $message ?? "";
    $this->original_message = $original_message ?? ;
    $this->original_status_code = $original_status_code ?? ;
  }
}

class ServiceUnavailable {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type StatusCode = int;

type TargetModelHeader = string;

class ValidationError {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}


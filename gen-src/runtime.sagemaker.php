<?hh // strict
namespace slack\aws\runtime.sagemaker;

interface SageMaker Runtime {
  public function InvokeEndpoint(InvokeEndpointInput) Awaitable<Errors\Result<InvokeEndpointOutput>>;
}

class BodyBlob {
}

class CustomAttributesHeader {
}

class EndpointName {
}

class Header {
}

class InternalFailure {
  public Message $message;
}

class InvokeEndpointInput {
  public Header $accept;
  public BodyBlob $body;
  public Header $content_type;
  public CustomAttributesHeader $custom_attributes;
  public EndpointName $endpoint_name;
  public TargetModelHeader $target_model;
}

class InvokeEndpointOutput {
  public BodyBlob $body;
  public Header $content_type;
  public CustomAttributesHeader $custom_attributes;
  public Header $invoked_production_variant;
}

class LogStreamArn {
}

class Message {
}

class ModelError {
  public LogStreamArn $log_stream_arn;
  public Message $message;
  public Message $original_message;
  public StatusCode $original_status_code;
}

class ServiceUnavailable {
  public Message $message;
}

class StatusCode {
}

class TargetModelHeader {
}

class ValidationError {
  public Message $message;
}


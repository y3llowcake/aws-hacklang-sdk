<?hh // strict
namespace slack\aws\data.iot;

interface  {
  public function DeleteThingShadow(DeleteThingShadowRequest $in): Awaitable<\Errors\Result<DeleteThingShadowResponse>>;
  public function GetThingShadow(GetThingShadowRequest $in): Awaitable<\Errors\Result<GetThingShadowResponse>>;
  public function Publish(PublishRequest $in): Awaitable<\Errors\Error>;
  public function UpdateThingShadow(UpdateThingShadowRequest $in): Awaitable<\Errors\Result<UpdateThingShadowResponse>>;
}

class ConflictException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DeleteThingShadowRequest {
  public ?ThingName $thing_name;

  public function __construct(shape(
    ?'thing_name' => ?ThingName,
  ) $s = shape()) {
    $this->thing_name = $s['thing_name'] ?? '';
  }
}

class DeleteThingShadowResponse {
  public ?JsonDocument $payload;

  public function __construct(shape(
    ?'payload' => ?JsonDocument,
  ) $s = shape()) {
    $this->payload = $s['payload'] ?? '';
  }
}

type ErrorMessage = string;

class GetThingShadowRequest {
  public ?ThingName $thing_name;

  public function __construct(shape(
    ?'thing_name' => ?ThingName,
  ) $s = shape()) {
    $this->thing_name = $s['thing_name'] ?? '';
  }
}

class GetThingShadowResponse {
  public ?JsonDocument $payload;

  public function __construct(shape(
    ?'payload' => ?JsonDocument,
  ) $s = shape()) {
    $this->payload = $s['payload'] ?? '';
  }
}

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

type JsonDocument = string;

class MethodNotAllowedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Payload = string;

class PublishRequest {
  public ?Payload $payload;
  public ?Qos $qos;
  public ?Topic $topic;

  public function __construct(shape(
    ?'payload' => ?Payload,
    ?'qos' => ?Qos,
    ?'topic' => ?Topic,
  ) $s = shape()) {
    $this->payload = $s['payload'] ?? '';
    $this->qos = $s['qos'] ?? 0;
    $this->topic = $s['topic'] ?? '';
  }
}

type Qos = int;

class RequestEntityTooLargeException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceNotFoundException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ServiceUnavailableException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ThingName = string;

class ThrottlingException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Topic = string;

class UnauthorizedException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UnsupportedDocumentEncodingException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UpdateThingShadowRequest {
  public ?JsonDocument $payload;
  public ?ThingName $thing_name;

  public function __construct(shape(
    ?'payload' => ?JsonDocument,
    ?'thing_name' => ?ThingName,
  ) $s = shape()) {
    $this->payload = $s['payload'] ?? '';
    $this->thing_name = $s['thing_name'] ?? '';
  }
}

class UpdateThingShadowResponse {
  public ?JsonDocument $payload;

  public function __construct(shape(
    ?'payload' => ?JsonDocument,
  ) $s = shape()) {
    $this->payload = $s['payload'] ?? '';
  }
}

type errorMessage = string;


<?hh // strict
namespace slack\aws\data.iot;

interface  {
  public function DeleteThingShadow(DeleteThingShadowRequest) Awaitable<Errors\Result<DeleteThingShadowResponse>>;
  public function GetThingShadow(GetThingShadowRequest) Awaitable<Errors\Result<GetThingShadowResponse>>;
  public function Publish(PublishRequest) Awaitable<Errors\Error>;
  public function UpdateThingShadow(UpdateThingShadowRequest) Awaitable<Errors\Result<UpdateThingShadowResponse>>;
}

class ConflictException {
  public ErrorMessage $message;
}

class GetThingShadowRequest {
  public ThingName $thing_name;
}

class GetThingShadowResponse {
  public JsonDocument $payload;
}

class Payload {
}

class UpdateThingShadowRequest {
  public ThingName $thing_name;
  public JsonDocument $payload;
}

class UpdateThingShadowResponse {
  public JsonDocument $payload;
}

class errorMessage {
}

class ErrorMessage {
}

class InvalidRequestException {
  public errorMessage $message;
}

class JsonDocument {
}

class ServiceUnavailableException {
  public errorMessage $message;
}

class UnsupportedDocumentEncodingException {
  public errorMessage $message;
}

class DeleteThingShadowResponse {
  public JsonDocument $payload;
}

class InternalFailureException {
  public errorMessage $message;
}

class MethodNotAllowedException {
  public ErrorMessage $message;
}

class PublishRequest {
  public Topic $topic;
  public Qos $qos;
  public Payload $payload;
}

class RequestEntityTooLargeException {
  public ErrorMessage $message;
}

class ThingName {
}

class DeleteThingShadowRequest {
  public ThingName $thing_name;
}

class Qos {
}

class ResourceNotFoundException {
  public errorMessage $message;
}

class ThrottlingException {
  public errorMessage $message;
}

class Topic {
}

class UnauthorizedException {
  public errorMessage $message;
}


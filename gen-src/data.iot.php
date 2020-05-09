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

class DeleteThingShadowRequest {
  public ThingName $thing_name;
}

class DeleteThingShadowResponse {
  public JsonDocument $payload;
}

class ErrorMessage {
}

class GetThingShadowRequest {
  public ThingName $thing_name;
}

class GetThingShadowResponse {
  public JsonDocument $payload;
}

class InternalFailureException {
  public errorMessage $message;
}

class InvalidRequestException {
  public errorMessage $message;
}

class JsonDocument {
}

class MethodNotAllowedException {
  public ErrorMessage $message;
}

class Payload {
}

class PublishRequest {
  public Payload $payload;
  public Qos $qos;
  public Topic $topic;
}

class Qos {
}

class RequestEntityTooLargeException {
  public ErrorMessage $message;
}

class ResourceNotFoundException {
  public errorMessage $message;
}

class ServiceUnavailableException {
  public errorMessage $message;
}

class ThingName {
}

class ThrottlingException {
  public errorMessage $message;
}

class Topic {
}

class UnauthorizedException {
  public errorMessage $message;
}

class UnsupportedDocumentEncodingException {
  public errorMessage $message;
}

class UpdateThingShadowRequest {
  public JsonDocument $payload;
  public ThingName $thing_name;
}

class UpdateThingShadowResponse {
  public JsonDocument $payload;
}

class errorMessage {
}


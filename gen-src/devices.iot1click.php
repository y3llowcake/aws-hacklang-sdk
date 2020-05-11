<?hh // strict
namespace slack\aws\devices.iot1click;

interface IoT 1Click Devices Service {
  public function ClaimDevicesByClaimCode(ClaimDevicesByClaimCodeRequest): Awaitable<Errors\Result<ClaimDevicesByClaimCodeResponse>>;
  public function DescribeDevice(DescribeDeviceRequest): Awaitable<Errors\Result<DescribeDeviceResponse>>;
  public function FinalizeDeviceClaim(FinalizeDeviceClaimRequest): Awaitable<Errors\Result<FinalizeDeviceClaimResponse>>;
  public function GetDeviceMethods(GetDeviceMethodsRequest): Awaitable<Errors\Result<GetDeviceMethodsResponse>>;
  public function InitiateDeviceClaim(InitiateDeviceClaimRequest): Awaitable<Errors\Result<InitiateDeviceClaimResponse>>;
  public function InvokeDeviceMethod(InvokeDeviceMethodRequest): Awaitable<Errors\Result<InvokeDeviceMethodResponse>>;
  public function ListDeviceEvents(ListDeviceEventsRequest): Awaitable<Errors\Result<ListDeviceEventsResponse>>;
  public function ListDevices(ListDevicesRequest): Awaitable<Errors\Result<ListDevicesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Error>;
  public function UnclaimDevice(UnclaimDeviceRequest): Awaitable<Errors\Result<UnclaimDeviceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateDeviceState(UpdateDeviceStateRequest): Awaitable<Errors\Result<UpdateDeviceStateResponse>>;
}

class Attributes {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClaimDevicesByClaimCodeRequest {
  public __string $claim_code;

  public function __construct(shape(
  ?'claim_code' => __string,
  ) $s = shape()) {
    $this->claim_code = $claim_code ?? "";
  }
}

class ClaimDevicesByClaimCodeResponse {
  public __stringMin12Max40 $claim_code;
  public __integer $total;

  public function __construct(shape(
  ?'claim_code' => __stringMin12Max40,
  ?'total' => __integer,
  ) $s = shape()) {
    $this->claim_code = $claim_code ?? "";
    $this->total = $total ?? 0;
  }
}

class DescribeDeviceRequest {
  public __string $device_id;

  public function __construct(shape(
  ?'device_id' => __string,
  ) $s = shape()) {
    $this->device_id = $device_id ?? "";
  }
}

class DescribeDeviceResponse {
  public DeviceDescription $device_description;

  public function __construct(shape(
  ?'device_description' => DeviceDescription,
  ) $s = shape()) {
    $this->device_description = $device_description ?? null;
  }
}

class Device {
  public Attributes $attributes;
  public __string $device_id;
  public __string $type;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'device_id' => __string,
  ?'type' => __string,
  ) $s = shape()) {
    $this->attributes = $attributes ?? null;
    $this->device_id = $device_id ?? "";
    $this->type = $type ?? "";
  }
}

type DeviceAttributes = dict<__string, __string>;

class DeviceClaimResponse {
  public __string $state;

  public function __construct(shape(
  ?'state' => __string,
  ) $s = shape()) {
    $this->state = $state ?? "";
  }
}

class DeviceDescription {
  public __string $arn;
  public DeviceAttributes $attributes;
  public __string $device_id;
  public __boolean $enabled;
  public __doubleMin0Max100 $remaining_life;
  public __mapOf__string $tags;
  public __string $type;

  public function __construct(shape(
  ?'arn' => __string,
  ?'attributes' => DeviceAttributes,
  ?'device_id' => __string,
  ?'enabled' => __boolean,
  ?'remaining_life' => __doubleMin0Max100,
  ?'tags' => __mapOf__string,
  ?'type' => __string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->attributes = $attributes ?? [];
    $this->device_id = $device_id ?? "";
    $this->enabled = $enabled ?? false;
    $this->remaining_life = $remaining_life ?? 0.0;
    $this->tags = $tags ?? [];
    $this->type = $type ?? "";
  }
}

class DeviceEvent {
  public Device $device;
  public __string $std_event;

  public function __construct(shape(
  ?'device' => Device,
  ?'std_event' => __string,
  ) $s = shape()) {
    $this->device = $device ?? null;
    $this->std_event = $std_event ?? "";
  }
}

class DeviceEventsResponse {
  public __listOfDeviceEvent $events;
  public __string $next_token;

  public function __construct(shape(
  ?'events' => __listOfDeviceEvent,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->events = $events ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DeviceMethod {
  public __string $device_type;
  public __string $method_name;

  public function __construct(shape(
  ?'device_type' => __string,
  ?'method_name' => __string,
  ) $s = shape()) {
    $this->device_type = $device_type ?? "";
    $this->method_name = $method_name ?? "";
  }
}

class Empty {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class FinalizeDeviceClaimRequest {
  public __string $device_id;
  public __mapOf__string $tags;

  public function __construct(shape(
  ?'device_id' => __string,
  ?'tags' => __mapOf__string,
  ) $s = shape()) {
    $this->device_id = $device_id ?? "";
    $this->tags = $tags ?? [];
  }
}

class FinalizeDeviceClaimResponse {
  public __string $state;

  public function __construct(shape(
  ?'state' => __string,
  ) $s = shape()) {
    $this->state = $state ?? "";
  }
}

class ForbiddenException {
  public __string $code;
  public __string $message;

  public function __construct(shape(
  ?'code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

class GetDeviceMethodsRequest {
  public __string $device_id;

  public function __construct(shape(
  ?'device_id' => __string,
  ) $s = shape()) {
    $this->device_id = $device_id ?? "";
  }
}

class GetDeviceMethodsResponse {
  public __listOfDeviceMethod $device_methods;

  public function __construct(shape(
  ?'device_methods' => __listOfDeviceMethod,
  ) $s = shape()) {
    $this->device_methods = $device_methods ?? [];
  }
}

class InitiateDeviceClaimRequest {
  public __string $device_id;

  public function __construct(shape(
  ?'device_id' => __string,
  ) $s = shape()) {
    $this->device_id = $device_id ?? "";
  }
}

class InitiateDeviceClaimResponse {
  public __string $state;

  public function __construct(shape(
  ?'state' => __string,
  ) $s = shape()) {
    $this->state = $state ?? "";
  }
}

class InternalFailureException {
  public __string $code;
  public __string $message;

  public function __construct(shape(
  ?'code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

class InvalidRequestException {
  public __string $code;
  public __string $message;

  public function __construct(shape(
  ?'code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

class InvokeDeviceMethodRequest {
  public __string $device_id;
  public DeviceMethod $device_method;
  public __string $device_method_parameters;

  public function __construct(shape(
  ?'device_id' => __string,
  ?'device_method' => DeviceMethod,
  ?'device_method_parameters' => __string,
  ) $s = shape()) {
    $this->device_id = $device_id ?? "";
    $this->device_method = $device_method ?? null;
    $this->device_method_parameters = $device_method_parameters ?? "";
  }
}

class InvokeDeviceMethodResponse {
  public __string $device_method_response;

  public function __construct(shape(
  ?'device_method_response' => __string,
  ) $s = shape()) {
    $this->device_method_response = $device_method_response ?? "";
  }
}

class ListDeviceEventsRequest {
  public __string $device_id;
  public __timestampIso8601 $from_time_stamp;
  public MaxResults $max_results;
  public __string $next_token;
  public __timestampIso8601 $to_time_stamp;

  public function __construct(shape(
  ?'device_id' => __string,
  ?'from_time_stamp' => __timestampIso8601,
  ?'max_results' => MaxResults,
  ?'next_token' => __string,
  ?'to_time_stamp' => __timestampIso8601,
  ) $s = shape()) {
    $this->device_id = $device_id ?? "";
    $this->from_time_stamp = $from_time_stamp ?? 0;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->to_time_stamp = $to_time_stamp ?? 0;
  }
}

class ListDeviceEventsResponse {
  public __listOfDeviceEvent $events;
  public __string $next_token;

  public function __construct(shape(
  ?'events' => __listOfDeviceEvent,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->events = $events ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListDevicesRequest {
  public __string $device_type;
  public MaxResults $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'device_type' => __string,
  ?'max_results' => MaxResults,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->device_type = $device_type ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListDevicesResponse {
  public __listOfDeviceDescription $devices;
  public __string $next_token;

  public function __construct(shape(
  ?'devices' => __listOfDeviceDescription,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->devices = $devices ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListTagsForResourceRequest {
  public __string $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public __mapOf__string $tags;

  public function __construct(shape(
  ?'tags' => __mapOf__string,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

type MaxResults = int;

class PreconditionFailedException {
  public __string $code;
  public __string $message;

  public function __construct(shape(
  ?'code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

class RangeNotSatisfiableException {
  public __string $code;
  public __string $message;

  public function __construct(shape(
  ?'code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

class ResourceConflictException {
  public __string $code;
  public __string $message;

  public function __construct(shape(
  ?'code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

class ResourceNotFoundException {
  public __string $code;
  public __string $message;

  public function __construct(shape(
  ?'code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

class TagResourceRequest {
  public __string $resource_arn;
  public __mapOf__string $tags;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ?'tags' => __mapOf__string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class UnclaimDeviceRequest {
  public __string $device_id;

  public function __construct(shape(
  ?'device_id' => __string,
  ) $s = shape()) {
    $this->device_id = $device_id ?? "";
  }
}

class UnclaimDeviceResponse {
  public __string $state;

  public function __construct(shape(
  ?'state' => __string,
  ) $s = shape()) {
    $this->state = $state ?? "";
  }
}

class UntagResourceRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ?'tag_keys' => __listOf__string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UpdateDeviceStateRequest {
  public __string $device_id;
  public __boolean $enabled;

  public function __construct(shape(
  ?'device_id' => __string,
  ?'enabled' => __boolean,
  ) $s = shape()) {
    $this->device_id = $device_id ?? "";
    $this->enabled = $enabled ?? false;
  }
}

class UpdateDeviceStateResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type __boolean = bool;

type __double = float;

type __doubleMin0Max100 = float;

type __integer = int;

type __listOfDeviceDescription = vec<DeviceDescription>;

type __listOfDeviceEvent = vec<DeviceEvent>;

type __listOfDeviceMethod = vec<DeviceMethod>;

type __listOf__string = vec<__string>;

type __long = int;

type __mapOf__string = dict<__string, __string>;

type __string = string;

type __stringMin12Max40 = string;

type __timestampIso8601 = int;

type __timestampUnix = int;


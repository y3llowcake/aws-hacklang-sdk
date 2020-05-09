<?hh // strict
namespace slack\aws\devices.iot1click;

interface IoT 1Click Devices Service {
  public function ClaimDevicesByClaimCode(ClaimDevicesByClaimCodeRequest) Awaitable<Errors\Result<ClaimDevicesByClaimCodeResponse>>;
  public function DescribeDevice(DescribeDeviceRequest) Awaitable<Errors\Result<DescribeDeviceResponse>>;
  public function FinalizeDeviceClaim(FinalizeDeviceClaimRequest) Awaitable<Errors\Result<FinalizeDeviceClaimResponse>>;
  public function GetDeviceMethods(GetDeviceMethodsRequest) Awaitable<Errors\Result<GetDeviceMethodsResponse>>;
  public function InitiateDeviceClaim(InitiateDeviceClaimRequest) Awaitable<Errors\Result<InitiateDeviceClaimResponse>>;
  public function InvokeDeviceMethod(InvokeDeviceMethodRequest) Awaitable<Errors\Result<InvokeDeviceMethodResponse>>;
  public function ListDeviceEvents(ListDeviceEventsRequest) Awaitable<Errors\Result<ListDeviceEventsResponse>>;
  public function ListDevices(ListDevicesRequest) Awaitable<Errors\Result<ListDevicesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function UnclaimDevice(UnclaimDeviceRequest) Awaitable<Errors\Result<UnclaimDeviceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateDeviceState(UpdateDeviceStateRequest) Awaitable<Errors\Result<UpdateDeviceStateResponse>>;
}

class Attributes {
}

class ClaimDevicesByClaimCodeRequest {
  public __string $claim_code;
}

class ClaimDevicesByClaimCodeResponse {
  public __stringMin12Max40 $claim_code;
  public __integer $total;
}

class DescribeDeviceRequest {
  public __string $device_id;
}

class DescribeDeviceResponse {
  public DeviceDescription $device_description;
}

class Device {
  public Attributes $attributes;
  public __string $device_id;
  public __string $type;
}

class DeviceAttributes {
}

class DeviceClaimResponse {
  public __string $state;
}

class DeviceDescription {
  public __string $arn;
  public DeviceAttributes $attributes;
  public __string $device_id;
  public __boolean $enabled;
  public __doubleMin0Max100 $remaining_life;
  public __mapOf__string $tags;
  public __string $type;
}

class DeviceEvent {
  public Device $device;
  public __string $std_event;
}

class DeviceEventsResponse {
  public __listOfDeviceEvent $events;
  public __string $next_token;
}

class DeviceMethod {
  public __string $device_type;
  public __string $method_name;
}

class Empty {
}

class FinalizeDeviceClaimRequest {
  public __string $device_id;
  public __mapOf__string $tags;
}

class FinalizeDeviceClaimResponse {
  public __string $state;
}

class ForbiddenException {
  public __string $code;
  public __string $message;
}

class GetDeviceMethodsRequest {
  public __string $device_id;
}

class GetDeviceMethodsResponse {
  public __listOfDeviceMethod $device_methods;
}

class InitiateDeviceClaimRequest {
  public __string $device_id;
}

class InitiateDeviceClaimResponse {
  public __string $state;
}

class InternalFailureException {
  public __string $code;
  public __string $message;
}

class InvalidRequestException {
  public __string $code;
  public __string $message;
}

class InvokeDeviceMethodRequest {
  public __string $device_id;
  public DeviceMethod $device_method;
  public __string $device_method_parameters;
}

class InvokeDeviceMethodResponse {
  public __string $device_method_response;
}

class ListDeviceEventsRequest {
  public __string $device_id;
  public __timestampIso8601 $from_time_stamp;
  public MaxResults $max_results;
  public __string $next_token;
  public __timestampIso8601 $to_time_stamp;
}

class ListDeviceEventsResponse {
  public __listOfDeviceEvent $events;
  public __string $next_token;
}

class ListDevicesRequest {
  public __string $device_type;
  public MaxResults $max_results;
  public __string $next_token;
}

class ListDevicesResponse {
  public __listOfDeviceDescription $devices;
  public __string $next_token;
}

class ListTagsForResourceRequest {
  public __string $resource_arn;
}

class ListTagsForResourceResponse {
  public __mapOf__string $tags;
}

class MaxResults {
}

class PreconditionFailedException {
  public __string $code;
  public __string $message;
}

class RangeNotSatisfiableException {
  public __string $code;
  public __string $message;
}

class ResourceConflictException {
  public __string $code;
  public __string $message;
}

class ResourceNotFoundException {
  public __string $code;
  public __string $message;
}

class TagResourceRequest {
  public __string $resource_arn;
  public __mapOf__string $tags;
}

class UnclaimDeviceRequest {
  public __string $device_id;
}

class UnclaimDeviceResponse {
  public __string $state;
}

class UntagResourceRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;
}

class UpdateDeviceStateRequest {
  public __string $device_id;
  public __boolean $enabled;
}

class UpdateDeviceStateResponse {
}

class __boolean {
}

class __double {
}

class __doubleMin0Max100 {
}

class __integer {
}

class __listOfDeviceDescription {
}

class __listOfDeviceEvent {
}

class __listOfDeviceMethod {
}

class __listOf__string {
}

class __long {
}

class __mapOf__string {
}

class __string {
}

class __stringMin12Max40 {
}

class __timestampIso8601 {
}

class __timestampUnix {
}


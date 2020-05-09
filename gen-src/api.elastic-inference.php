<?hh // strict
namespace slack\aws\api.elastic-inference;

interface Elastic Inference {
  public function DescribeAcceleratorOfferings(DescribeAcceleratorOfferingsRequest) Awaitable<Errors\Result<DescribeAcceleratorOfferingsResponse>>;
  public function DescribeAcceleratorTypes(DescribeAcceleratorTypesRequest) Awaitable<Errors\Result<DescribeAcceleratorTypesResponse>>;
  public function DescribeAccelerators(DescribeAcceleratorsRequest) Awaitable<Errors\Result<DescribeAcceleratorsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResult>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResult>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResult>>;
}

class AcceleratorHealthStatus {
}

class AcceleratorId {
}

class AcceleratorIdList {
}

class AcceleratorType {
  public AcceleratorTypeName $accelerator_type_name;
  public MemoryInfo $memory_info;
  public ThroughputInfoList $throughput_info;
}

class AcceleratorTypeList {
}

class AcceleratorTypeName {
}

class AcceleratorTypeNameList {
}

class AcceleratorTypeOffering {
  public AcceleratorTypeName $accelerator_type;
  public Location $location;
  public LocationType $location_type;
}

class AcceleratorTypeOfferingList {
}

class AvailabilityZone {
}

class BadRequestException {
  public string $message;
}

class DescribeAcceleratorOfferingsRequest {
  public AcceleratorTypeNameList $accelerator_types;
  public LocationType $location_type;
}

class DescribeAcceleratorOfferingsResponse {
  public AcceleratorTypeOfferingList $accelerator_type_offerings;
}

class DescribeAcceleratorTypesRequest {
}

class DescribeAcceleratorTypesResponse {
  public AcceleratorTypeList $accelerator_types;
}

class DescribeAcceleratorsRequest {
  public AcceleratorIdList $accelerator_ids;
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class DescribeAcceleratorsResponse {
  public ElasticInferenceAcceleratorSet $accelerator_set;
  public NextToken $next_token;
}

class ElasticInferenceAccelerator {
  public ElasticInferenceAcceleratorHealth $accelerator_health;
  public AcceleratorId $accelerator_id;
  public AcceleratorTypeName $accelerator_type;
  public ResourceArn $attached_resource;
  public AvailabilityZone $availability_zone;
}

class ElasticInferenceAcceleratorHealth {
  public AcceleratorHealthStatus $status;
}

class ElasticInferenceAcceleratorSet {
}

class Filter {
  public FilterName $name;
  public ValueStringList $values;
}

class FilterList {
}

class FilterName {
}

class Integer {
}

class InternalServerException {
  public string $message;
}

class Key {
}

class KeyValuePair {
  public Key $key;
  public Value $value;
}

class ListTagsForResourceRequest {
  public ResourceARN $resource_arn;
}

class ListTagsForResourceResult {
  public TagMap $tags;
}

class Location {
}

class LocationType {
}

class MaxResults {
}

class MemoryInfo {
  public int $size_in_mi_b;
}

class NextToken {
}

class ResourceARN {
}

class ResourceArn {
}

class ResourceNotFoundException {
  public string $message;
}

class String {
}

class TagKey {
}

class TagKeyList {
}

class TagMap {
}

class TagResourceRequest {
  public ResourceARN $resource_arn;
  public TagMap $tags;
}

class TagResourceResult {
}

class TagValue {
}

class ThroughputInfoList {
}

class UntagResourceRequest {
  public ResourceARN $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResult {
}

class Value {
}

class ValueStringList {
}


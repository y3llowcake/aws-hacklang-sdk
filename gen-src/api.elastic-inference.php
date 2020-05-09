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

class Value {
}

class FilterName {
}

class Key {
}

class ListTagsForResourceRequest {
  public ResourceARN $resource_arn;
}

class ListTagsForResourceResult {
  public TagMap $tags;
}

class UntagResourceResult {
}

class AcceleratorTypeName {
}

class TagValue {
}

class ElasticInferenceAcceleratorSet {
}

class Location {
}

class TagMap {
}

class AcceleratorHealthStatus {
}

class AcceleratorTypeOffering {
  public AcceleratorTypeName $accelerator_type;
  public LocationType $location_type;
  public Location $location;
}

class AcceleratorTypeOfferingList {
}

class DescribeAcceleratorOfferingsResponse {
  public AcceleratorTypeOfferingList $accelerator_type_offerings;
}

class DescribeAcceleratorTypesRequest {
}

class TagResourceRequest {
  public TagMap $tags;
  public ResourceARN $resource_arn;
}

class LocationType {
}

class ResourceArn {
}

class TagKey {
}

class AcceleratorId {
}

class AcceleratorIdList {
}

class AcceleratorTypeList {
}

class ElasticInferenceAccelerator {
  public AcceleratorId $accelerator_id;
  public AvailabilityZone $availability_zone;
  public ResourceArn $attached_resource;
  public ElasticInferenceAcceleratorHealth $accelerator_health;
  public AcceleratorTypeName $accelerator_type;
}

class Integer {
}

class NextToken {
}

class String {
}

class UntagResourceRequest {
  public ResourceARN $resource_arn;
  public TagKeyList $tag_keys;
}

class AcceleratorType {
  public MemoryInfo $memory_info;
  public ThroughputInfoList $throughput_info;
  public AcceleratorTypeName $accelerator_type_name;
}

class DescribeAcceleratorsResponse {
  public ElasticInferenceAcceleratorSet $accelerator_set;
  public NextToken $next_token;
}

class Filter {
  public FilterName $name;
  public ValueStringList $values;
}

class MaxResults {
}

class MemoryInfo {
  public int $size_in_mi_b;
}

class KeyValuePair {
  public Key $key;
  public Value $value;
}

class ResourceARN {
}

class TagResourceResult {
}

class AcceleratorTypeNameList {
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

class ElasticInferenceAcceleratorHealth {
  public AcceleratorHealthStatus $status;
}

class FilterList {
}

class ThroughputInfoList {
}

class TagKeyList {
}

class ValueStringList {
}

class AvailabilityZone {
}

class BadRequestException {
  public string $message;
}

class DescribeAcceleratorOfferingsRequest {
  public LocationType $location_type;
  public AcceleratorTypeNameList $accelerator_types;
}

class InternalServerException {
  public string $message;
}

class ResourceNotFoundException {
  public string $message;
}


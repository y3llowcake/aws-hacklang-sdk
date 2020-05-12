<?hh // strict
namespace slack\aws\api.elastic-inference;

interface ElasticInference {
  public function DescribeAcceleratorOfferings(DescribeAcceleratorOfferingsRequest $in): Awaitable<\Errors\Result<DescribeAcceleratorOfferingsResponse>>;
  public function DescribeAcceleratorTypes(DescribeAcceleratorTypesRequest $in): Awaitable<\Errors\Result<DescribeAcceleratorTypesResponse>>;
  public function DescribeAccelerators(DescribeAcceleratorsRequest $in): Awaitable<\Errors\Result<DescribeAcceleratorsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResult>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResult>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResult>>;
}

type AcceleratorHealthStatus = string;

type AcceleratorId = string;

type AcceleratorIdList = vec<AcceleratorId>;

class AcceleratorType {
  public ?AcceleratorTypeName $accelerator_type_name;
  public ?MemoryInfo $memory_info;
  public ?ThroughputInfoList $throughput_info;

  public function __construct(shape(
    ?'accelerator_type_name' => ?AcceleratorTypeName,
    ?'memory_info' => ?MemoryInfo,
    ?'throughput_info' => ?ThroughputInfoList,
  ) $s = shape()) {
    $this->accelerator_type_name = $s['accelerator_type_name'] ?? '';
    $this->memory_info = $s['memory_info'] ?? null;
    $this->throughput_info = $s['throughput_info'] ?? vec[];
  }
}

type AcceleratorTypeList = vec<AcceleratorType>;

type AcceleratorTypeName = string;

type AcceleratorTypeNameList = vec<AcceleratorTypeName>;

class AcceleratorTypeOffering {
  public ?AcceleratorTypeName $accelerator_type;
  public ?Location $location;
  public ?LocationType $location_type;

  public function __construct(shape(
    ?'accelerator_type' => ?AcceleratorTypeName,
    ?'location' => ?Location,
    ?'location_type' => ?LocationType,
  ) $s = shape()) {
    $this->accelerator_type = $s['accelerator_type'] ?? '';
    $this->location = $s['location'] ?? '';
    $this->location_type = $s['location_type'] ?? '';
  }
}

type AcceleratorTypeOfferingList = vec<AcceleratorTypeOffering>;

type AvailabilityZone = string;

class BadRequestException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DescribeAcceleratorOfferingsRequest {
  public ?AcceleratorTypeNameList $accelerator_types;
  public ?LocationType $location_type;

  public function __construct(shape(
    ?'accelerator_types' => ?AcceleratorTypeNameList,
    ?'location_type' => ?LocationType,
  ) $s = shape()) {
    $this->accelerator_types = $s['accelerator_types'] ?? vec[];
    $this->location_type = $s['location_type'] ?? '';
  }
}

class DescribeAcceleratorOfferingsResponse {
  public ?AcceleratorTypeOfferingList $accelerator_type_offerings;

  public function __construct(shape(
    ?'accelerator_type_offerings' => ?AcceleratorTypeOfferingList,
  ) $s = shape()) {
    $this->accelerator_type_offerings = $s['accelerator_type_offerings'] ?? vec[];
  }
}

class DescribeAcceleratorTypesRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAcceleratorTypesResponse {
  public ?AcceleratorTypeList $accelerator_types;

  public function __construct(shape(
    ?'accelerator_types' => ?AcceleratorTypeList,
  ) $s = shape()) {
    $this->accelerator_types = $s['accelerator_types'] ?? vec[];
  }
}

class DescribeAcceleratorsRequest {
  public ?AcceleratorIdList $accelerator_ids;
  public ?FilterList $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'accelerator_ids' => ?AcceleratorIdList,
    ?'filters' => ?FilterList,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->accelerator_ids = $s['accelerator_ids'] ?? vec[];
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeAcceleratorsResponse {
  public ?ElasticInferenceAcceleratorSet $accelerator_set;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'accelerator_set' => ?ElasticInferenceAcceleratorSet,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->accelerator_set = $s['accelerator_set'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ElasticInferenceAccelerator {
  public ?ElasticInferenceAcceleratorHealth $accelerator_health;
  public ?AcceleratorId $accelerator_id;
  public ?AcceleratorTypeName $accelerator_type;
  public ?ResourceArn $attached_resource;
  public ?AvailabilityZone $availability_zone;

  public function __construct(shape(
    ?'accelerator_health' => ?ElasticInferenceAcceleratorHealth,
    ?'accelerator_id' => ?AcceleratorId,
    ?'accelerator_type' => ?AcceleratorTypeName,
    ?'attached_resource' => ?ResourceArn,
    ?'availability_zone' => ?AvailabilityZone,
  ) $s = shape()) {
    $this->accelerator_health = $s['accelerator_health'] ?? null;
    $this->accelerator_id = $s['accelerator_id'] ?? '';
    $this->accelerator_type = $s['accelerator_type'] ?? '';
    $this->attached_resource = $s['attached_resource'] ?? '';
    $this->availability_zone = $s['availability_zone'] ?? '';
  }
}

class ElasticInferenceAcceleratorHealth {
  public ?AcceleratorHealthStatus $status;

  public function __construct(shape(
    ?'status' => ?AcceleratorHealthStatus,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
  }
}

type ElasticInferenceAcceleratorSet = vec<ElasticInferenceAccelerator>;

class Filter {
  public ?FilterName $name;
  public ?ValueStringList $values;

  public function __construct(shape(
    ?'name' => ?FilterName,
    ?'values' => ?ValueStringList,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type FilterList = vec<Filter>;

type FilterName = string;

type Integer = int;

class InternalServerException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Key = string;

class KeyValuePair {
  public ?Key $key;
  public ?Value $value;

  public function __construct(shape(
    ?'key' => ?Key,
    ?'value' => ?Value,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? 0;
  }
}

class ListTagsForResourceRequest {
  public ?ResourceARN $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResult {
  public ?TagMap $tags;

  public function __construct(shape(
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

type Location = string;

type LocationType = string;

type MaxResults = int;

class MemoryInfo {
  public int $size_in_mi_b;

  public function __construct(shape(
    ?'size_in_mi_b' => int,
  ) $s = shape()) {
    $this->size_in_mi_b = $s['size_in_mi_b'] ?? 0;
  }
}

type NextToken = string;

type ResourceARN = string;

type ResourceArn = string;

class ResourceNotFoundException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type String = string;

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public ?ResourceARN $resource_arn;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class TagResourceResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type ThroughputInfoList = vec<KeyValuePair>;

class UntagResourceRequest {
  public ?ResourceARN $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Value = int;

type ValueStringList = vec<String>;


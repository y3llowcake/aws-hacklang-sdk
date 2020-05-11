<?hh // strict
namespace slack\aws\api.elastic-inference;

interface Elastic Inference {
  public function DescribeAcceleratorOfferings(DescribeAcceleratorOfferingsRequest): Awaitable<Errors\Result<DescribeAcceleratorOfferingsResponse>>;
  public function DescribeAcceleratorTypes(DescribeAcceleratorTypesRequest): Awaitable<Errors\Result<DescribeAcceleratorTypesResponse>>;
  public function DescribeAccelerators(DescribeAcceleratorsRequest): Awaitable<Errors\Result<DescribeAcceleratorsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResult>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResult>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResult>>;
}

type AcceleratorHealthStatus = string;

type AcceleratorId = string;

type AcceleratorIdList = vec<AcceleratorId>;

class AcceleratorType {
  public AcceleratorTypeName $accelerator_type_name;
  public MemoryInfo $memory_info;
  public ThroughputInfoList $throughput_info;

  public function __construct(shape(
  ?'accelerator_type_name' => AcceleratorTypeName,
  ?'memory_info' => MemoryInfo,
  ?'throughput_info' => ThroughputInfoList,
  ) $s = shape()) {
    $this->accelerator_type_name = $accelerator_type_name ?? "";
    $this->memory_info = $memory_info ?? null;
    $this->throughput_info = $throughput_info ?? [];
  }
}

type AcceleratorTypeList = vec<AcceleratorType>;

type AcceleratorTypeName = string;

type AcceleratorTypeNameList = vec<AcceleratorTypeName>;

class AcceleratorTypeOffering {
  public AcceleratorTypeName $accelerator_type;
  public Location $location;
  public LocationType $location_type;

  public function __construct(shape(
  ?'accelerator_type' => AcceleratorTypeName,
  ?'location' => Location,
  ?'location_type' => LocationType,
  ) $s = shape()) {
    $this->accelerator_type = $accelerator_type ?? "";
    $this->location = $location ?? "";
    $this->location_type = $location_type ?? "";
  }
}

type AcceleratorTypeOfferingList = vec<AcceleratorTypeOffering>;

type AvailabilityZone = string;

class BadRequestException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DescribeAcceleratorOfferingsRequest {
  public AcceleratorTypeNameList $accelerator_types;
  public LocationType $location_type;

  public function __construct(shape(
  ?'accelerator_types' => AcceleratorTypeNameList,
  ?'location_type' => LocationType,
  ) $s = shape()) {
    $this->accelerator_types = $accelerator_types ?? [];
    $this->location_type = $location_type ?? "";
  }
}

class DescribeAcceleratorOfferingsResponse {
  public AcceleratorTypeOfferingList $accelerator_type_offerings;

  public function __construct(shape(
  ?'accelerator_type_offerings' => AcceleratorTypeOfferingList,
  ) $s = shape()) {
    $this->accelerator_type_offerings = $accelerator_type_offerings ?? [];
  }
}

class DescribeAcceleratorTypesRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAcceleratorTypesResponse {
  public AcceleratorTypeList $accelerator_types;

  public function __construct(shape(
  ?'accelerator_types' => AcceleratorTypeList,
  ) $s = shape()) {
    $this->accelerator_types = $accelerator_types ?? [];
  }
}

class DescribeAcceleratorsRequest {
  public AcceleratorIdList $accelerator_ids;
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'accelerator_ids' => AcceleratorIdList,
  ?'filters' => FilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->accelerator_ids = $accelerator_ids ?? [];
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAcceleratorsResponse {
  public ElasticInferenceAcceleratorSet $accelerator_set;
  public NextToken $next_token;

  public function __construct(shape(
  ?'accelerator_set' => ElasticInferenceAcceleratorSet,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->accelerator_set = $accelerator_set ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ElasticInferenceAccelerator {
  public ElasticInferenceAcceleratorHealth $accelerator_health;
  public AcceleratorId $accelerator_id;
  public AcceleratorTypeName $accelerator_type;
  public ResourceArn $attached_resource;
  public AvailabilityZone $availability_zone;

  public function __construct(shape(
  ?'accelerator_health' => ElasticInferenceAcceleratorHealth,
  ?'accelerator_id' => AcceleratorId,
  ?'accelerator_type' => AcceleratorTypeName,
  ?'attached_resource' => ResourceArn,
  ?'availability_zone' => AvailabilityZone,
  ) $s = shape()) {
    $this->accelerator_health = $accelerator_health ?? null;
    $this->accelerator_id = $accelerator_id ?? "";
    $this->accelerator_type = $accelerator_type ?? "";
    $this->attached_resource = $attached_resource ?? "";
    $this->availability_zone = $availability_zone ?? "";
  }
}

class ElasticInferenceAcceleratorHealth {
  public AcceleratorHealthStatus $status;

  public function __construct(shape(
  ?'status' => AcceleratorHealthStatus,
  ) $s = shape()) {
    $this->status = $status ?? "";
  }
}

type ElasticInferenceAcceleratorSet = vec<ElasticInferenceAccelerator>;

class Filter {
  public FilterName $name;
  public ValueStringList $values;

  public function __construct(shape(
  ?'name' => FilterName,
  ?'values' => ValueStringList,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->values = $values ?? [];
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
    $this->message = $message ?? "";
  }
}

type Key = string;

class KeyValuePair {
  public Key $key;
  public Value $value;

  public function __construct(shape(
  ?'key' => Key,
  ?'value' => Value,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? 0;
  }
}

class ListTagsForResourceRequest {
  public ResourceARN $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceARN,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResult {
  public TagMap $tags;

  public function __construct(shape(
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
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
    $this->size_in_mi_b = $size_in_mi_b ?? 0;
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
    $this->message = $message ?? "";
  }
}

type String = string;

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public ResourceARN $resource_arn;
  public TagMap $tags;

  public function __construct(shape(
  ?'resource_arn' => ResourceARN,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
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
  public ResourceARN $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ResourceARN,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Value = int;

type ValueStringList = vec<String>;


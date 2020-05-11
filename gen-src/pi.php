<?hh // strict
namespace slack\aws\pi;

interface PI {
  public function DescribeDimensionKeys(DescribeDimensionKeysRequest): Awaitable<Errors\Result<DescribeDimensionKeysResponse>>;
  public function GetResourceMetrics(GetResourceMetricsRequest): Awaitable<Errors\Result<GetResourceMetricsResponse>>;
}

class DataPoint {
  public ISOTimestamp $timestamp;
  public Double $value;

  public function __construct(shape(
  ?'timestamp' => ISOTimestamp,
  ?'value' => Double,
  ) $s = shape()) {
    $this->timestamp = $timestamp ?? 0;
    $this->value = $value ?? 0.0;
  }
}

type DataPointsList = vec<DataPoint>;

class DescribeDimensionKeysRequest {
  public ISOTimestamp $end_time;
  public MetricQueryFilterMap $filter;
  public DimensionGroup $group_by;
  public string $identifier;
  public MaxResults $max_results;
  public string $metric;
  public string $next_token;
  public DimensionGroup $partition_by;
  public int $period_in_seconds;
  public ServiceType $service_type;
  public ISOTimestamp $start_time;

  public function __construct(shape(
  ?'end_time' => ISOTimestamp,
  ?'filter' => MetricQueryFilterMap,
  ?'group_by' => DimensionGroup,
  ?'identifier' => string,
  ?'max_results' => MaxResults,
  ?'metric' => string,
  ?'next_token' => string,
  ?'partition_by' => DimensionGroup,
  ?'period_in_seconds' => int,
  ?'service_type' => ServiceType,
  ?'start_time' => ISOTimestamp,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->filter = $filter ?? [];
    $this->group_by = $group_by ?? null;
    $this->identifier = $identifier ?? "";
    $this->max_results = $max_results ?? 0;
    $this->metric = $metric ?? "";
    $this->next_token = $next_token ?? "";
    $this->partition_by = $partition_by ?? null;
    $this->period_in_seconds = $period_in_seconds ?? 0;
    $this->service_type = $service_type ?? "";
    $this->start_time = $start_time ?? 0;
  }
}

class DescribeDimensionKeysResponse {
  public ISOTimestamp $aligned_end_time;
  public ISOTimestamp $aligned_start_time;
  public DimensionKeyDescriptionList $keys;
  public string $next_token;
  public ResponsePartitionKeyList $partition_keys;

  public function __construct(shape(
  ?'aligned_end_time' => ISOTimestamp,
  ?'aligned_start_time' => ISOTimestamp,
  ?'keys' => DimensionKeyDescriptionList,
  ?'next_token' => string,
  ?'partition_keys' => ResponsePartitionKeyList,
  ) $s = shape()) {
    $this->aligned_end_time = $aligned_end_time ?? 0;
    $this->aligned_start_time = $aligned_start_time ?? 0;
    $this->keys = $keys ?? [];
    $this->next_token = $next_token ?? "";
    $this->partition_keys = $partition_keys ?? [];
  }
}

class DimensionGroup {
  public StringList $dimensions;
  public string $group;
  public Limit $limit;

  public function __construct(shape(
  ?'dimensions' => StringList,
  ?'group' => string,
  ?'limit' => Limit,
  ) $s = shape()) {
    $this->dimensions = $dimensions ?? [];
    $this->group = $group ?? "";
    $this->limit = $limit ?? 0;
  }
}

class DimensionKeyDescription {
  public DimensionMap $dimensions;
  public MetricValuesList $partitions;
  public Double $total;

  public function __construct(shape(
  ?'dimensions' => DimensionMap,
  ?'partitions' => MetricValuesList,
  ?'total' => Double,
  ) $s = shape()) {
    $this->dimensions = $dimensions ?? [];
    $this->partitions = $partitions ?? [];
    $this->total = $total ?? 0.0;
  }
}

type DimensionKeyDescriptionList = vec<DimensionKeyDescription>;

type DimensionMap = dict<String, String>;

type Double = float;

class GetResourceMetricsRequest {
  public ISOTimestamp $end_time;
  public string $identifier;
  public MaxResults $max_results;
  public MetricQueryList $metric_queries;
  public string $next_token;
  public int $period_in_seconds;
  public ServiceType $service_type;
  public ISOTimestamp $start_time;

  public function __construct(shape(
  ?'end_time' => ISOTimestamp,
  ?'identifier' => string,
  ?'max_results' => MaxResults,
  ?'metric_queries' => MetricQueryList,
  ?'next_token' => string,
  ?'period_in_seconds' => int,
  ?'service_type' => ServiceType,
  ?'start_time' => ISOTimestamp,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->identifier = $identifier ?? "";
    $this->max_results = $max_results ?? 0;
    $this->metric_queries = $metric_queries ?? [];
    $this->next_token = $next_token ?? "";
    $this->period_in_seconds = $period_in_seconds ?? 0;
    $this->service_type = $service_type ?? "";
    $this->start_time = $start_time ?? 0;
  }
}

class GetResourceMetricsResponse {
  public ISOTimestamp $aligned_end_time;
  public ISOTimestamp $aligned_start_time;
  public string $identifier;
  public MetricKeyDataPointsList $metric_list;
  public string $next_token;

  public function __construct(shape(
  ?'aligned_end_time' => ISOTimestamp,
  ?'aligned_start_time' => ISOTimestamp,
  ?'identifier' => string,
  ?'metric_list' => MetricKeyDataPointsList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->aligned_end_time = $aligned_end_time ?? 0;
    $this->aligned_start_time = $aligned_start_time ?? 0;
    $this->identifier = $identifier ?? "";
    $this->metric_list = $metric_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type ISOTimestamp = int;

type Integer = int;

class InternalServiceError {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidArgumentException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Limit = int;

type MaxResults = int;

class MetricKeyDataPoints {
  public DataPointsList $data_points;
  public ResponseResourceMetricKey $key;

  public function __construct(shape(
  ?'data_points' => DataPointsList,
  ?'key' => ResponseResourceMetricKey,
  ) $s = shape()) {
    $this->data_points = $data_points ?? [];
    $this->key = $key ?? null;
  }
}

type MetricKeyDataPointsList = vec<MetricKeyDataPoints>;

class MetricQuery {
  public MetricQueryFilterMap $filter;
  public DimensionGroup $group_by;
  public string $metric;

  public function __construct(shape(
  ?'filter' => MetricQueryFilterMap,
  ?'group_by' => DimensionGroup,
  ?'metric' => string,
  ) $s = shape()) {
    $this->filter = $filter ?? [];
    $this->group_by = $group_by ?? null;
    $this->metric = $metric ?? "";
  }
}

type MetricQueryFilterMap = dict<String, String>;

type MetricQueryList = vec<MetricQuery>;

type MetricValuesList = vec<Double>;

class NotAuthorizedException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResponsePartitionKey {
  public DimensionMap $dimensions;

  public function __construct(shape(
  ?'dimensions' => DimensionMap,
  ) $s = shape()) {
    $this->dimensions = $dimensions ?? [];
  }
}

type ResponsePartitionKeyList = vec<ResponsePartitionKey>;

class ResponseResourceMetricKey {
  public DimensionMap $dimensions;
  public string $metric;

  public function __construct(shape(
  ?'dimensions' => DimensionMap,
  ?'metric' => string,
  ) $s = shape()) {
    $this->dimensions = $dimensions ?? [];
    $this->metric = $metric ?? "";
  }
}

type ServiceType = string;

type String = string;

type StringList = vec<String>;


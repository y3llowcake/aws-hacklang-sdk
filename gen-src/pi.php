<?hh // strict
namespace slack\aws\pi;

interface PI {
  public function DescribeDimensionKeys(DescribeDimensionKeysRequest $in): Awaitable<\Errors\Result<DescribeDimensionKeysResponse>>;
  public function GetResourceMetrics(GetResourceMetricsRequest $in): Awaitable<\Errors\Result<GetResourceMetricsResponse>>;
}

class DataPoint {
  public ?ISOTimestamp $timestamp;
  public ?Double $value;

  public function __construct(shape(
    ?'timestamp' => ?ISOTimestamp,
    ?'value' => ?Double,
  ) $s = shape()) {
    $this->timestamp = $s['timestamp'] ?? 0;
    $this->value = $s['value'] ?? 0.0;
  }
}

type DataPointsList = vec<DataPoint>;

class DescribeDimensionKeysRequest {
  public ?ISOTimestamp $end_time;
  public ?MetricQueryFilterMap $filter;
  public ?DimensionGroup $group_by;
  public string $identifier;
  public ?MaxResults $max_results;
  public string $metric;
  public string $next_token;
  public ?DimensionGroup $partition_by;
  public int $period_in_seconds;
  public ?ServiceType $service_type;
  public ?ISOTimestamp $start_time;

  public function __construct(shape(
    ?'end_time' => ?ISOTimestamp,
    ?'filter' => ?MetricQueryFilterMap,
    ?'group_by' => ?DimensionGroup,
    ?'identifier' => string,
    ?'max_results' => ?MaxResults,
    ?'metric' => string,
    ?'next_token' => string,
    ?'partition_by' => ?DimensionGroup,
    ?'period_in_seconds' => int,
    ?'service_type' => ?ServiceType,
    ?'start_time' => ?ISOTimestamp,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->filter = $s['filter'] ?? dict[];
    $this->group_by = $s['group_by'] ?? null;
    $this->identifier = $s['identifier'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->metric = $s['metric'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->partition_by = $s['partition_by'] ?? null;
    $this->period_in_seconds = $s['period_in_seconds'] ?? 0;
    $this->service_type = $s['service_type'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class DescribeDimensionKeysResponse {
  public ?ISOTimestamp $aligned_end_time;
  public ?ISOTimestamp $aligned_start_time;
  public ?DimensionKeyDescriptionList $keys;
  public string $next_token;
  public ?ResponsePartitionKeyList $partition_keys;

  public function __construct(shape(
    ?'aligned_end_time' => ?ISOTimestamp,
    ?'aligned_start_time' => ?ISOTimestamp,
    ?'keys' => ?DimensionKeyDescriptionList,
    ?'next_token' => string,
    ?'partition_keys' => ?ResponsePartitionKeyList,
  ) $s = shape()) {
    $this->aligned_end_time = $s['aligned_end_time'] ?? 0;
    $this->aligned_start_time = $s['aligned_start_time'] ?? 0;
    $this->keys = $s['keys'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->partition_keys = $s['partition_keys'] ?? vec[];
  }
}

class DimensionGroup {
  public ?StringList $dimensions;
  public string $group;
  public ?Limit $limit;

  public function __construct(shape(
    ?'dimensions' => ?StringList,
    ?'group' => string,
    ?'limit' => ?Limit,
  ) $s = shape()) {
    $this->dimensions = $s['dimensions'] ?? vec[];
    $this->group = $s['group'] ?? '';
    $this->limit = $s['limit'] ?? 0;
  }
}

class DimensionKeyDescription {
  public ?DimensionMap $dimensions;
  public ?MetricValuesList $partitions;
  public ?Double $total;

  public function __construct(shape(
    ?'dimensions' => ?DimensionMap,
    ?'partitions' => ?MetricValuesList,
    ?'total' => ?Double,
  ) $s = shape()) {
    $this->dimensions = $s['dimensions'] ?? dict[];
    $this->partitions = $s['partitions'] ?? vec[];
    $this->total = $s['total'] ?? 0.0;
  }
}

type DimensionKeyDescriptionList = vec<DimensionKeyDescription>;

type DimensionMap = dict<String, String>;

type Double = float;

class GetResourceMetricsRequest {
  public ?ISOTimestamp $end_time;
  public string $identifier;
  public ?MaxResults $max_results;
  public ?MetricQueryList $metric_queries;
  public string $next_token;
  public int $period_in_seconds;
  public ?ServiceType $service_type;
  public ?ISOTimestamp $start_time;

  public function __construct(shape(
    ?'end_time' => ?ISOTimestamp,
    ?'identifier' => string,
    ?'max_results' => ?MaxResults,
    ?'metric_queries' => ?MetricQueryList,
    ?'next_token' => string,
    ?'period_in_seconds' => int,
    ?'service_type' => ?ServiceType,
    ?'start_time' => ?ISOTimestamp,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->identifier = $s['identifier'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->metric_queries = $s['metric_queries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->period_in_seconds = $s['period_in_seconds'] ?? 0;
    $this->service_type = $s['service_type'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class GetResourceMetricsResponse {
  public ?ISOTimestamp $aligned_end_time;
  public ?ISOTimestamp $aligned_start_time;
  public string $identifier;
  public ?MetricKeyDataPointsList $metric_list;
  public string $next_token;

  public function __construct(shape(
    ?'aligned_end_time' => ?ISOTimestamp,
    ?'aligned_start_time' => ?ISOTimestamp,
    ?'identifier' => string,
    ?'metric_list' => ?MetricKeyDataPointsList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->aligned_end_time = $s['aligned_end_time'] ?? 0;
    $this->aligned_start_time = $s['aligned_start_time'] ?? 0;
    $this->identifier = $s['identifier'] ?? '';
    $this->metric_list = $s['metric_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type ISOTimestamp = int;

type Integer = int;

class InternalServiceError {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidArgumentException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Limit = int;

type MaxResults = int;

class MetricKeyDataPoints {
  public ?DataPointsList $data_points;
  public ?ResponseResourceMetricKey $key;

  public function __construct(shape(
    ?'data_points' => ?DataPointsList,
    ?'key' => ?ResponseResourceMetricKey,
  ) $s = shape()) {
    $this->data_points = $s['data_points'] ?? vec[];
    $this->key = $s['key'] ?? null;
  }
}

type MetricKeyDataPointsList = vec<MetricKeyDataPoints>;

class MetricQuery {
  public ?MetricQueryFilterMap $filter;
  public ?DimensionGroup $group_by;
  public string $metric;

  public function __construct(shape(
    ?'filter' => ?MetricQueryFilterMap,
    ?'group_by' => ?DimensionGroup,
    ?'metric' => string,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? dict[];
    $this->group_by = $s['group_by'] ?? null;
    $this->metric = $s['metric'] ?? '';
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
    $this->message = $s['message'] ?? '';
  }
}

class ResponsePartitionKey {
  public ?DimensionMap $dimensions;

  public function __construct(shape(
    ?'dimensions' => ?DimensionMap,
  ) $s = shape()) {
    $this->dimensions = $s['dimensions'] ?? dict[];
  }
}

type ResponsePartitionKeyList = vec<ResponsePartitionKey>;

class ResponseResourceMetricKey {
  public ?DimensionMap $dimensions;
  public string $metric;

  public function __construct(shape(
    ?'dimensions' => ?DimensionMap,
    ?'metric' => string,
  ) $s = shape()) {
    $this->dimensions = $s['dimensions'] ?? dict[];
    $this->metric = $s['metric'] ?? '';
  }
}

type ServiceType = string;

type String = string;

type StringList = vec<String>;


<?hh // strict
namespace slack\aws\pi;

interface PI {
  public function DescribeDimensionKeys(DescribeDimensionKeysRequest): Awaitable<Errors\Result<DescribeDimensionKeysResponse>>;
  public function GetResourceMetrics(GetResourceMetricsRequest): Awaitable<Errors\Result<GetResourceMetricsResponse>>;
}

class DataPoint {
  public ISOTimestamp $timestamp;
  public Double $value;
}

class DataPointsList {
}

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
}

class DescribeDimensionKeysResponse {
  public ISOTimestamp $aligned_end_time;
  public ISOTimestamp $aligned_start_time;
  public DimensionKeyDescriptionList $keys;
  public string $next_token;
  public ResponsePartitionKeyList $partition_keys;
}

class DimensionGroup {
  public StringList $dimensions;
  public string $group;
  public Limit $limit;
}

class DimensionKeyDescription {
  public DimensionMap $dimensions;
  public MetricValuesList $partitions;
  public Double $total;
}

class DimensionKeyDescriptionList {
}

class DimensionMap {
}

class Double {
}

class GetResourceMetricsRequest {
  public ISOTimestamp $end_time;
  public string $identifier;
  public MaxResults $max_results;
  public MetricQueryList $metric_queries;
  public string $next_token;
  public int $period_in_seconds;
  public ServiceType $service_type;
  public ISOTimestamp $start_time;
}

class GetResourceMetricsResponse {
  public ISOTimestamp $aligned_end_time;
  public ISOTimestamp $aligned_start_time;
  public string $identifier;
  public MetricKeyDataPointsList $metric_list;
  public string $next_token;
}

class ISOTimestamp {
}

class Integer {
}

class InternalServiceError {
  public string $message;
}

class InvalidArgumentException {
  public string $message;
}

class Limit {
}

class MaxResults {
}

class MetricKeyDataPoints {
  public DataPointsList $data_points;
  public ResponseResourceMetricKey $key;
}

class MetricKeyDataPointsList {
}

class MetricQuery {
  public MetricQueryFilterMap $filter;
  public DimensionGroup $group_by;
  public string $metric;
}

class MetricQueryFilterMap {
}

class MetricQueryList {
}

class MetricValuesList {
}

class NotAuthorizedException {
  public string $message;
}

class ResponsePartitionKey {
  public DimensionMap $dimensions;
}

class ResponsePartitionKeyList {
}

class ResponseResourceMetricKey {
  public DimensionMap $dimensions;
  public string $metric;
}

class ServiceType {
}

class String {
}

class StringList {
}


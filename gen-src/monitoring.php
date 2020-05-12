<?hh // strict
namespace slack\aws\monitoring;

interface CloudWatch {
  public function DeleteAlarms(DeleteAlarmsInput $in): Awaitable<\Errors\Error>;
  public function DeleteAnomalyDetector(DeleteAnomalyDetectorInput $in): Awaitable<\Errors\Result<DeleteAnomalyDetectorOutput>>;
  public function DeleteDashboards(DeleteDashboardsInput $in): Awaitable<\Errors\Result<DeleteDashboardsOutput>>;
  public function DeleteInsightRules(DeleteInsightRulesInput $in): Awaitable<\Errors\Result<DeleteInsightRulesOutput>>;
  public function DescribeAlarmHistory(DescribeAlarmHistoryInput $in): Awaitable<\Errors\Result<DescribeAlarmHistoryOutput>>;
  public function DescribeAlarms(DescribeAlarmsInput $in): Awaitable<\Errors\Result<DescribeAlarmsOutput>>;
  public function DescribeAlarmsForMetric(DescribeAlarmsForMetricInput $in): Awaitable<\Errors\Result<DescribeAlarmsForMetricOutput>>;
  public function DescribeAnomalyDetectors(DescribeAnomalyDetectorsInput $in): Awaitable<\Errors\Result<DescribeAnomalyDetectorsOutput>>;
  public function DescribeInsightRules(DescribeInsightRulesInput $in): Awaitable<\Errors\Result<DescribeInsightRulesOutput>>;
  public function DisableAlarmActions(DisableAlarmActionsInput $in): Awaitable<\Errors\Error>;
  public function DisableInsightRules(DisableInsightRulesInput $in): Awaitable<\Errors\Result<DisableInsightRulesOutput>>;
  public function EnableAlarmActions(EnableAlarmActionsInput $in): Awaitable<\Errors\Error>;
  public function EnableInsightRules(EnableInsightRulesInput $in): Awaitable<\Errors\Result<EnableInsightRulesOutput>>;
  public function GetDashboard(GetDashboardInput $in): Awaitable<\Errors\Result<GetDashboardOutput>>;
  public function GetInsightRuleReport(GetInsightRuleReportInput $in): Awaitable<\Errors\Result<GetInsightRuleReportOutput>>;
  public function GetMetricData(GetMetricDataInput $in): Awaitable<\Errors\Result<GetMetricDataOutput>>;
  public function GetMetricStatistics(GetMetricStatisticsInput $in): Awaitable<\Errors\Result<GetMetricStatisticsOutput>>;
  public function GetMetricWidgetImage(GetMetricWidgetImageInput $in): Awaitable<\Errors\Result<GetMetricWidgetImageOutput>>;
  public function ListDashboards(ListDashboardsInput $in): Awaitable<\Errors\Result<ListDashboardsOutput>>;
  public function ListMetrics(ListMetricsInput $in): Awaitable<\Errors\Result<ListMetricsOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput $in): Awaitable<\Errors\Result<ListTagsForResourceOutput>>;
  public function PutAnomalyDetector(PutAnomalyDetectorInput $in): Awaitable<\Errors\Result<PutAnomalyDetectorOutput>>;
  public function PutCompositeAlarm(PutCompositeAlarmInput $in): Awaitable<\Errors\Error>;
  public function PutDashboard(PutDashboardInput $in): Awaitable<\Errors\Result<PutDashboardOutput>>;
  public function PutInsightRule(PutInsightRuleInput $in): Awaitable<\Errors\Result<PutInsightRuleOutput>>;
  public function PutMetricAlarm(PutMetricAlarmInput $in): Awaitable<\Errors\Error>;
  public function PutMetricData(PutMetricDataInput $in): Awaitable<\Errors\Error>;
  public function SetAlarmState(SetAlarmStateInput $in): Awaitable<\Errors\Error>;
  public function TagResource(TagResourceInput $in): Awaitable<\Errors\Result<TagResourceOutput>>;
  public function UntagResource(UntagResourceInput $in): Awaitable<\Errors\Result<UntagResourceOutput>>;
}

type ActionPrefix = string;

type ActionsEnabled = bool;

type AlarmArn = string;

type AlarmDescription = string;

class AlarmHistoryItem {
  public ?AlarmName $alarm_name;
  public ?AlarmType $alarm_type;
  public ?HistoryData $history_data;
  public ?HistoryItemType $history_item_type;
  public ?HistorySummary $history_summary;
  public ?Timestamp $timestamp;

  public function __construct(shape(
    ?'alarm_name' => ?AlarmName,
    ?'alarm_type' => ?AlarmType,
    ?'history_data' => ?HistoryData,
    ?'history_item_type' => ?HistoryItemType,
    ?'history_summary' => ?HistorySummary,
    ?'timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->alarm_name = $s['alarm_name'] ?? '';
    $this->alarm_type = $s['alarm_type'] ?? '';
    $this->history_data = $s['history_data'] ?? '';
    $this->history_item_type = $s['history_item_type'] ?? '';
    $this->history_summary = $s['history_summary'] ?? '';
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type AlarmHistoryItems = vec<AlarmHistoryItem>;

type AlarmName = string;

type AlarmNamePrefix = string;

type AlarmNames = vec<AlarmName>;

type AlarmRule = string;

type AlarmType = string;

type AlarmTypes = vec<AlarmType>;

type AmazonResourceName = string;

class AnomalyDetector {
  public ?AnomalyDetectorConfiguration $configuration;
  public ?Dimensions $dimensions;
  public ?MetricName $metric_name;
  public ?Namespace $namespace;
  public ?AnomalyDetectorMetricStat $stat;
  public ?AnomalyDetectorStateValue $state_value;

  public function __construct(shape(
    ?'configuration' => ?AnomalyDetectorConfiguration,
    ?'dimensions' => ?Dimensions,
    ?'metric_name' => ?MetricName,
    ?'namespace' => ?Namespace,
    ?'stat' => ?AnomalyDetectorMetricStat,
    ?'state_value' => ?AnomalyDetectorStateValue,
  ) $s = shape()) {
    $this->configuration = $s['configuration'] ?? null;
    $this->dimensions = $s['dimensions'] ?? vec[];
    $this->metric_name = $s['metric_name'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
    $this->stat = $s['stat'] ?? '';
    $this->state_value = $s['state_value'] ?? '';
  }
}

class AnomalyDetectorConfiguration {
  public ?AnomalyDetectorExcludedTimeRanges $excluded_time_ranges;
  public ?AnomalyDetectorMetricTimezone $metric_timezone;

  public function __construct(shape(
    ?'excluded_time_ranges' => ?AnomalyDetectorExcludedTimeRanges,
    ?'metric_timezone' => ?AnomalyDetectorMetricTimezone,
  ) $s = shape()) {
    $this->excluded_time_ranges = $s['excluded_time_ranges'] ?? vec[];
    $this->metric_timezone = $s['metric_timezone'] ?? '';
  }
}

type AnomalyDetectorExcludedTimeRanges = vec<Range>;

type AnomalyDetectorMetricStat = string;

type AnomalyDetectorMetricTimezone = string;

type AnomalyDetectorStateValue = string;

type AnomalyDetectors = vec<AnomalyDetector>;

type AwsQueryErrorMessage = string;

type BatchFailures = vec<PartialFailure>;

type ComparisonOperator = string;

class CompositeAlarm {
  public ?ActionsEnabled $actions_enabled;
  public ?ResourceList $alarm_actions;
  public ?AlarmArn $alarm_arn;
  public ?Timestamp $alarm_configuration_updated_timestamp;
  public ?AlarmDescription $alarm_description;
  public ?AlarmName $alarm_name;
  public ?AlarmRule $alarm_rule;
  public ?ResourceList $insufficient_data_actions;
  public ?ResourceList $ok_actions;
  public ?StateReason $state_reason;
  public ?StateReasonData $state_reason_data;
  public ?Timestamp $state_updated_timestamp;
  public ?StateValue $state_value;

  public function __construct(shape(
    ?'actions_enabled' => ?ActionsEnabled,
    ?'alarm_actions' => ?ResourceList,
    ?'alarm_arn' => ?AlarmArn,
    ?'alarm_configuration_updated_timestamp' => ?Timestamp,
    ?'alarm_description' => ?AlarmDescription,
    ?'alarm_name' => ?AlarmName,
    ?'alarm_rule' => ?AlarmRule,
    ?'insufficient_data_actions' => ?ResourceList,
    ?'ok_actions' => ?ResourceList,
    ?'state_reason' => ?StateReason,
    ?'state_reason_data' => ?StateReasonData,
    ?'state_updated_timestamp' => ?Timestamp,
    ?'state_value' => ?StateValue,
  ) $s = shape()) {
    $this->actions_enabled = $s['actions_enabled'] ?? false;
    $this->alarm_actions = $s['alarm_actions'] ?? vec[];
    $this->alarm_arn = $s['alarm_arn'] ?? '';
    $this->alarm_configuration_updated_timestamp = $s['alarm_configuration_updated_timestamp'] ?? 0;
    $this->alarm_description = $s['alarm_description'] ?? '';
    $this->alarm_name = $s['alarm_name'] ?? '';
    $this->alarm_rule = $s['alarm_rule'] ?? '';
    $this->insufficient_data_actions = $s['insufficient_data_actions'] ?? vec[];
    $this->ok_actions = $s['ok_actions'] ?? vec[];
    $this->state_reason = $s['state_reason'] ?? '';
    $this->state_reason_data = $s['state_reason_data'] ?? '';
    $this->state_updated_timestamp = $s['state_updated_timestamp'] ?? 0;
    $this->state_value = $s['state_value'] ?? '';
  }
}

type CompositeAlarms = vec<CompositeAlarm>;

class ConcurrentModificationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Counts = vec<DatapointValue>;

type DashboardArn = string;

type DashboardBody = string;

type DashboardEntries = vec<DashboardEntry>;

class DashboardEntry {
  public ?DashboardArn $dashboard_arn;
  public ?DashboardName $dashboard_name;
  public ?LastModified $last_modified;
  public ?Size $size;

  public function __construct(shape(
    ?'dashboard_arn' => ?DashboardArn,
    ?'dashboard_name' => ?DashboardName,
    ?'last_modified' => ?LastModified,
    ?'size' => ?Size,
  ) $s = shape()) {
    $this->dashboard_arn = $s['dashboard_arn'] ?? '';
    $this->dashboard_name = $s['dashboard_name'] ?? '';
    $this->last_modified = $s['last_modified'] ?? 0;
    $this->size = $s['size'] ?? 0;
  }
}

type DashboardErrorMessage = string;

class DashboardInvalidInputError {
  public ?DashboardValidationMessages $dashboard_validation_messages;
  public ?DashboardErrorMessage $message;

  public function __construct(shape(
    ?'dashboard_validation_messages' => ?DashboardValidationMessages,
    ?'message' => ?DashboardErrorMessage,
  ) $s = shape()) {
    $this->dashboard_validation_messages = $s['dashboard_validation_messages'] ?? vec[];
    $this->message = $s['message'] ?? '';
  }
}

type DashboardName = string;

type DashboardNamePrefix = string;

type DashboardNames = vec<DashboardName>;

class DashboardNotFoundError {
  public ?DashboardErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?DashboardErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DashboardValidationMessage {
  public ?DataPath $data_path;
  public ?Message $message;

  public function __construct(shape(
    ?'data_path' => ?DataPath,
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->data_path = $s['data_path'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type DashboardValidationMessages = vec<DashboardValidationMessage>;

type DataPath = string;

class Datapoint {
  public ?DatapointValue $average;
  public ?DatapointValueMap $extended_statistics;
  public ?DatapointValue $maximum;
  public ?DatapointValue $minimum;
  public ?DatapointValue $sample_count;
  public ?DatapointValue $sum;
  public ?Timestamp $timestamp;
  public ?StandardUnit $unit;

  public function __construct(shape(
    ?'average' => ?DatapointValue,
    ?'extended_statistics' => ?DatapointValueMap,
    ?'maximum' => ?DatapointValue,
    ?'minimum' => ?DatapointValue,
    ?'sample_count' => ?DatapointValue,
    ?'sum' => ?DatapointValue,
    ?'timestamp' => ?Timestamp,
    ?'unit' => ?StandardUnit,
  ) $s = shape()) {
    $this->average = $s['average'] ?? 0.0;
    $this->extended_statistics = $s['extended_statistics'] ?? dict[];
    $this->maximum = $s['maximum'] ?? 0.0;
    $this->minimum = $s['minimum'] ?? 0.0;
    $this->sample_count = $s['sample_count'] ?? 0.0;
    $this->sum = $s['sum'] ?? 0.0;
    $this->timestamp = $s['timestamp'] ?? 0;
    $this->unit = $s['unit'] ?? '';
  }
}

type DatapointValue = float;

type DatapointValueMap = dict<ExtendedStatistic, DatapointValue>;

type DatapointValues = vec<DatapointValue>;

type Datapoints = vec<Datapoint>;

type DatapointsToAlarm = int;

class DeleteAlarmsInput {
  public ?AlarmNames $alarm_names;

  public function __construct(shape(
    ?'alarm_names' => ?AlarmNames,
  ) $s = shape()) {
    $this->alarm_names = $s['alarm_names'] ?? vec[];
  }
}

class DeleteAnomalyDetectorInput {
  public ?Dimensions $dimensions;
  public ?MetricName $metric_name;
  public ?Namespace $namespace;
  public ?AnomalyDetectorMetricStat $stat;

  public function __construct(shape(
    ?'dimensions' => ?Dimensions,
    ?'metric_name' => ?MetricName,
    ?'namespace' => ?Namespace,
    ?'stat' => ?AnomalyDetectorMetricStat,
  ) $s = shape()) {
    $this->dimensions = $s['dimensions'] ?? vec[];
    $this->metric_name = $s['metric_name'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
    $this->stat = $s['stat'] ?? '';
  }
}

class DeleteAnomalyDetectorOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDashboardsInput {
  public ?DashboardNames $dashboard_names;

  public function __construct(shape(
    ?'dashboard_names' => ?DashboardNames,
  ) $s = shape()) {
    $this->dashboard_names = $s['dashboard_names'] ?? vec[];
  }
}

class DeleteDashboardsOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteInsightRulesInput {
  public ?InsightRuleNames $rule_names;

  public function __construct(shape(
    ?'rule_names' => ?InsightRuleNames,
  ) $s = shape()) {
    $this->rule_names = $s['rule_names'] ?? vec[];
  }
}

class DeleteInsightRulesOutput {
  public ?BatchFailures $failures;

  public function __construct(shape(
    ?'failures' => ?BatchFailures,
  ) $s = shape()) {
    $this->failures = $s['failures'] ?? vec[];
  }
}

class DescribeAlarmHistoryInput {
  public ?AlarmName $alarm_name;
  public ?AlarmTypes $alarm_types;
  public ?Timestamp $end_date;
  public ?HistoryItemType $history_item_type;
  public ?MaxRecords $max_records;
  public ?NextToken $next_token;
  public ?ScanBy $scan_by;
  public ?Timestamp $start_date;

  public function __construct(shape(
    ?'alarm_name' => ?AlarmName,
    ?'alarm_types' => ?AlarmTypes,
    ?'end_date' => ?Timestamp,
    ?'history_item_type' => ?HistoryItemType,
    ?'max_records' => ?MaxRecords,
    ?'next_token' => ?NextToken,
    ?'scan_by' => ?ScanBy,
    ?'start_date' => ?Timestamp,
  ) $s = shape()) {
    $this->alarm_name = $s['alarm_name'] ?? '';
    $this->alarm_types = $s['alarm_types'] ?? vec[];
    $this->end_date = $s['end_date'] ?? 0;
    $this->history_item_type = $s['history_item_type'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->scan_by = $s['scan_by'] ?? '';
    $this->start_date = $s['start_date'] ?? 0;
  }
}

class DescribeAlarmHistoryOutput {
  public ?AlarmHistoryItems $alarm_history_items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'alarm_history_items' => ?AlarmHistoryItems,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->alarm_history_items = $s['alarm_history_items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeAlarmsForMetricInput {
  public ?Dimensions $dimensions;
  public ?ExtendedStatistic $extended_statistic;
  public ?MetricName $metric_name;
  public ?Namespace $namespace;
  public ?Period $period;
  public ?Statistic $statistic;
  public ?StandardUnit $unit;

  public function __construct(shape(
    ?'dimensions' => ?Dimensions,
    ?'extended_statistic' => ?ExtendedStatistic,
    ?'metric_name' => ?MetricName,
    ?'namespace' => ?Namespace,
    ?'period' => ?Period,
    ?'statistic' => ?Statistic,
    ?'unit' => ?StandardUnit,
  ) $s = shape()) {
    $this->dimensions = $s['dimensions'] ?? vec[];
    $this->extended_statistic = $s['extended_statistic'] ?? '';
    $this->metric_name = $s['metric_name'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
    $this->period = $s['period'] ?? 0;
    $this->statistic = $s['statistic'] ?? '';
    $this->unit = $s['unit'] ?? '';
  }
}

class DescribeAlarmsForMetricOutput {
  public ?MetricAlarms $metric_alarms;

  public function __construct(shape(
    ?'metric_alarms' => ?MetricAlarms,
  ) $s = shape()) {
    $this->metric_alarms = $s['metric_alarms'] ?? vec[];
  }
}

class DescribeAlarmsInput {
  public ?ActionPrefix $action_prefix;
  public ?AlarmNamePrefix $alarm_name_prefix;
  public ?AlarmNames $alarm_names;
  public ?AlarmTypes $alarm_types;
  public ?AlarmName $children_of_alarm_name;
  public ?MaxRecords $max_records;
  public ?NextToken $next_token;
  public ?AlarmName $parents_of_alarm_name;
  public ?StateValue $state_value;

  public function __construct(shape(
    ?'action_prefix' => ?ActionPrefix,
    ?'alarm_name_prefix' => ?AlarmNamePrefix,
    ?'alarm_names' => ?AlarmNames,
    ?'alarm_types' => ?AlarmTypes,
    ?'children_of_alarm_name' => ?AlarmName,
    ?'max_records' => ?MaxRecords,
    ?'next_token' => ?NextToken,
    ?'parents_of_alarm_name' => ?AlarmName,
    ?'state_value' => ?StateValue,
  ) $s = shape()) {
    $this->action_prefix = $s['action_prefix'] ?? '';
    $this->alarm_name_prefix = $s['alarm_name_prefix'] ?? '';
    $this->alarm_names = $s['alarm_names'] ?? vec[];
    $this->alarm_types = $s['alarm_types'] ?? vec[];
    $this->children_of_alarm_name = $s['children_of_alarm_name'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->parents_of_alarm_name = $s['parents_of_alarm_name'] ?? '';
    $this->state_value = $s['state_value'] ?? '';
  }
}

class DescribeAlarmsOutput {
  public ?CompositeAlarms $composite_alarms;
  public ?MetricAlarms $metric_alarms;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'composite_alarms' => ?CompositeAlarms,
    ?'metric_alarms' => ?MetricAlarms,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->composite_alarms = $s['composite_alarms'] ?? vec[];
    $this->metric_alarms = $s['metric_alarms'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeAnomalyDetectorsInput {
  public ?Dimensions $dimensions;
  public ?MaxReturnedResultsCount $max_results;
  public ?MetricName $metric_name;
  public ?Namespace $namespace;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'dimensions' => ?Dimensions,
    ?'max_results' => ?MaxReturnedResultsCount,
    ?'metric_name' => ?MetricName,
    ?'namespace' => ?Namespace,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->dimensions = $s['dimensions'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->metric_name = $s['metric_name'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeAnomalyDetectorsOutput {
  public ?AnomalyDetectors $anomaly_detectors;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'anomaly_detectors' => ?AnomalyDetectors,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->anomaly_detectors = $s['anomaly_detectors'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeInsightRulesInput {
  public ?InsightRuleMaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?InsightRuleMaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeInsightRulesOutput {
  public ?InsightRules $insight_rules;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'insight_rules' => ?InsightRules,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->insight_rules = $s['insight_rules'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class Dimension {
  public ?DimensionName $name;
  public ?DimensionValue $value;

  public function __construct(shape(
    ?'name' => ?DimensionName,
    ?'value' => ?DimensionValue,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class DimensionFilter {
  public ?DimensionName $name;
  public ?DimensionValue $value;

  public function __construct(shape(
    ?'name' => ?DimensionName,
    ?'value' => ?DimensionValue,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type DimensionFilters = vec<DimensionFilter>;

type DimensionName = string;

type DimensionValue = string;

type Dimensions = vec<Dimension>;

class DisableAlarmActionsInput {
  public ?AlarmNames $alarm_names;

  public function __construct(shape(
    ?'alarm_names' => ?AlarmNames,
  ) $s = shape()) {
    $this->alarm_names = $s['alarm_names'] ?? vec[];
  }
}

class DisableInsightRulesInput {
  public ?InsightRuleNames $rule_names;

  public function __construct(shape(
    ?'rule_names' => ?InsightRuleNames,
  ) $s = shape()) {
    $this->rule_names = $s['rule_names'] ?? vec[];
  }
}

class DisableInsightRulesOutput {
  public ?BatchFailures $failures;

  public function __construct(shape(
    ?'failures' => ?BatchFailures,
  ) $s = shape()) {
    $this->failures = $s['failures'] ?? vec[];
  }
}

class EnableAlarmActionsInput {
  public ?AlarmNames $alarm_names;

  public function __construct(shape(
    ?'alarm_names' => ?AlarmNames,
  ) $s = shape()) {
    $this->alarm_names = $s['alarm_names'] ?? vec[];
  }
}

class EnableInsightRulesInput {
  public ?InsightRuleNames $rule_names;

  public function __construct(shape(
    ?'rule_names' => ?InsightRuleNames,
  ) $s = shape()) {
    $this->rule_names = $s['rule_names'] ?? vec[];
  }
}

class EnableInsightRulesOutput {
  public ?BatchFailures $failures;

  public function __construct(shape(
    ?'failures' => ?BatchFailures,
  ) $s = shape()) {
    $this->failures = $s['failures'] ?? vec[];
  }
}

type ErrorMessage = string;

type EvaluateLowSampleCountPercentile = string;

type EvaluationPeriods = int;

type ExceptionType = string;

type ExtendedStatistic = string;

type ExtendedStatistics = vec<ExtendedStatistic>;

type FailureCode = string;

type FailureDescription = string;

type FailureResource = string;

type FaultDescription = string;

class GetDashboardInput {
  public ?DashboardName $dashboard_name;

  public function __construct(shape(
    ?'dashboard_name' => ?DashboardName,
  ) $s = shape()) {
    $this->dashboard_name = $s['dashboard_name'] ?? '';
  }
}

class GetDashboardOutput {
  public ?DashboardArn $dashboard_arn;
  public ?DashboardBody $dashboard_body;
  public ?DashboardName $dashboard_name;

  public function __construct(shape(
    ?'dashboard_arn' => ?DashboardArn,
    ?'dashboard_body' => ?DashboardBody,
    ?'dashboard_name' => ?DashboardName,
  ) $s = shape()) {
    $this->dashboard_arn = $s['dashboard_arn'] ?? '';
    $this->dashboard_body = $s['dashboard_body'] ?? '';
    $this->dashboard_name = $s['dashboard_name'] ?? '';
  }
}

class GetInsightRuleReportInput {
  public ?Timestamp $end_time;
  public ?InsightRuleUnboundInteger $max_contributor_count;
  public ?InsightRuleMetricList $metrics;
  public ?InsightRuleOrderBy $order_by;
  public ?Period $period;
  public ?InsightRuleName $rule_name;
  public ?Timestamp $start_time;

  public function __construct(shape(
    ?'end_time' => ?Timestamp,
    ?'max_contributor_count' => ?InsightRuleUnboundInteger,
    ?'metrics' => ?InsightRuleMetricList,
    ?'order_by' => ?InsightRuleOrderBy,
    ?'period' => ?Period,
    ?'rule_name' => ?InsightRuleName,
    ?'start_time' => ?Timestamp,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->max_contributor_count = $s['max_contributor_count'] ?? 0;
    $this->metrics = $s['metrics'] ?? vec[];
    $this->order_by = $s['order_by'] ?? '';
    $this->period = $s['period'] ?? 0;
    $this->rule_name = $s['rule_name'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class GetInsightRuleReportOutput {
  public ?InsightRuleUnboundDouble $aggregate_value;
  public ?InsightRuleAggregationStatistic $aggregation_statistic;
  public ?InsightRuleUnboundLong $approximate_unique_count;
  public ?InsightRuleContributors $contributors;
  public ?InsightRuleContributorKeyLabels $key_labels;
  public ?InsightRuleMetricDatapoints $metric_datapoints;

  public function __construct(shape(
    ?'aggregate_value' => ?InsightRuleUnboundDouble,
    ?'aggregation_statistic' => ?InsightRuleAggregationStatistic,
    ?'approximate_unique_count' => ?InsightRuleUnboundLong,
    ?'contributors' => ?InsightRuleContributors,
    ?'key_labels' => ?InsightRuleContributorKeyLabels,
    ?'metric_datapoints' => ?InsightRuleMetricDatapoints,
  ) $s = shape()) {
    $this->aggregate_value = $s['aggregate_value'] ?? 0.0;
    $this->aggregation_statistic = $s['aggregation_statistic'] ?? '';
    $this->approximate_unique_count = $s['approximate_unique_count'] ?? 0;
    $this->contributors = $s['contributors'] ?? vec[];
    $this->key_labels = $s['key_labels'] ?? vec[];
    $this->metric_datapoints = $s['metric_datapoints'] ?? vec[];
  }
}

class GetMetricDataInput {
  public ?Timestamp $end_time;
  public ?GetMetricDataMaxDatapoints $max_datapoints;
  public ?MetricDataQueries $metric_data_queries;
  public ?NextToken $next_token;
  public ?ScanBy $scan_by;
  public ?Timestamp $start_time;

  public function __construct(shape(
    ?'end_time' => ?Timestamp,
    ?'max_datapoints' => ?GetMetricDataMaxDatapoints,
    ?'metric_data_queries' => ?MetricDataQueries,
    ?'next_token' => ?NextToken,
    ?'scan_by' => ?ScanBy,
    ?'start_time' => ?Timestamp,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->max_datapoints = $s['max_datapoints'] ?? 0;
    $this->metric_data_queries = $s['metric_data_queries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->scan_by = $s['scan_by'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

type GetMetricDataMaxDatapoints = int;

class GetMetricDataOutput {
  public ?MetricDataResultMessages $messages;
  public ?MetricDataResults $metric_data_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'messages' => ?MetricDataResultMessages,
    ?'metric_data_results' => ?MetricDataResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->messages = $s['messages'] ?? vec[];
    $this->metric_data_results = $s['metric_data_results'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetMetricStatisticsInput {
  public ?Dimensions $dimensions;
  public ?Timestamp $end_time;
  public ?ExtendedStatistics $extended_statistics;
  public ?MetricName $metric_name;
  public ?Namespace $namespace;
  public ?Period $period;
  public ?Timestamp $start_time;
  public ?Statistics $statistics;
  public ?StandardUnit $unit;

  public function __construct(shape(
    ?'dimensions' => ?Dimensions,
    ?'end_time' => ?Timestamp,
    ?'extended_statistics' => ?ExtendedStatistics,
    ?'metric_name' => ?MetricName,
    ?'namespace' => ?Namespace,
    ?'period' => ?Period,
    ?'start_time' => ?Timestamp,
    ?'statistics' => ?Statistics,
    ?'unit' => ?StandardUnit,
  ) $s = shape()) {
    $this->dimensions = $s['dimensions'] ?? vec[];
    $this->end_time = $s['end_time'] ?? 0;
    $this->extended_statistics = $s['extended_statistics'] ?? vec[];
    $this->metric_name = $s['metric_name'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
    $this->period = $s['period'] ?? 0;
    $this->start_time = $s['start_time'] ?? 0;
    $this->statistics = $s['statistics'] ?? vec[];
    $this->unit = $s['unit'] ?? '';
  }
}

class GetMetricStatisticsOutput {
  public ?Datapoints $datapoints;
  public ?MetricLabel $label;

  public function __construct(shape(
    ?'datapoints' => ?Datapoints,
    ?'label' => ?MetricLabel,
  ) $s = shape()) {
    $this->datapoints = $s['datapoints'] ?? vec[];
    $this->label = $s['label'] ?? '';
  }
}

class GetMetricWidgetImageInput {
  public ?MetricWidget $metric_widget;
  public ?OutputFormat $output_format;

  public function __construct(shape(
    ?'metric_widget' => ?MetricWidget,
    ?'output_format' => ?OutputFormat,
  ) $s = shape()) {
    $this->metric_widget = $s['metric_widget'] ?? '';
    $this->output_format = $s['output_format'] ?? '';
  }
}

class GetMetricWidgetImageOutput {
  public ?MetricWidgetImage $metric_widget_image;

  public function __construct(shape(
    ?'metric_widget_image' => ?MetricWidgetImage,
  ) $s = shape()) {
    $this->metric_widget_image = $s['metric_widget_image'] ?? '';
  }
}

type HistoryData = string;

type HistoryItemType = string;

type HistorySummary = string;

class InsightRule {
  public ?InsightRuleDefinition $definition;
  public ?InsightRuleName $name;
  public ?InsightRuleSchema $schema;
  public ?InsightRuleState $state;

  public function __construct(shape(
    ?'definition' => ?InsightRuleDefinition,
    ?'name' => ?InsightRuleName,
    ?'schema' => ?InsightRuleSchema,
    ?'state' => ?InsightRuleState,
  ) $s = shape()) {
    $this->definition = $s['definition'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->schema = $s['schema'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

type InsightRuleAggregationStatistic = string;

class InsightRuleContributor {
  public ?InsightRuleUnboundDouble $approximate_aggregate_value;
  public ?InsightRuleContributorDatapoints $datapoints;
  public ?InsightRuleContributorKeys $keys;

  public function __construct(shape(
    ?'approximate_aggregate_value' => ?InsightRuleUnboundDouble,
    ?'datapoints' => ?InsightRuleContributorDatapoints,
    ?'keys' => ?InsightRuleContributorKeys,
  ) $s = shape()) {
    $this->approximate_aggregate_value = $s['approximate_aggregate_value'] ?? 0.0;
    $this->datapoints = $s['datapoints'] ?? vec[];
    $this->keys = $s['keys'] ?? vec[];
  }
}

class InsightRuleContributorDatapoint {
  public ?InsightRuleUnboundDouble $approximate_value;
  public ?Timestamp $timestamp;

  public function __construct(shape(
    ?'approximate_value' => ?InsightRuleUnboundDouble,
    ?'timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->approximate_value = $s['approximate_value'] ?? 0.0;
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type InsightRuleContributorDatapoints = vec<InsightRuleContributorDatapoint>;

type InsightRuleContributorKey = string;

type InsightRuleContributorKeyLabel = string;

type InsightRuleContributorKeyLabels = vec<InsightRuleContributorKeyLabel>;

type InsightRuleContributorKeys = vec<InsightRuleContributorKey>;

type InsightRuleContributors = vec<InsightRuleContributor>;

type InsightRuleDefinition = string;

type InsightRuleMaxResults = int;

class InsightRuleMetricDatapoint {
  public ?InsightRuleUnboundDouble $average;
  public ?InsightRuleUnboundDouble $max_contributor_value;
  public ?InsightRuleUnboundDouble $maximum;
  public ?InsightRuleUnboundDouble $minimum;
  public ?InsightRuleUnboundDouble $sample_count;
  public ?InsightRuleUnboundDouble $sum;
  public ?Timestamp $timestamp;
  public ?InsightRuleUnboundDouble $unique_contributors;

  public function __construct(shape(
    ?'average' => ?InsightRuleUnboundDouble,
    ?'max_contributor_value' => ?InsightRuleUnboundDouble,
    ?'maximum' => ?InsightRuleUnboundDouble,
    ?'minimum' => ?InsightRuleUnboundDouble,
    ?'sample_count' => ?InsightRuleUnboundDouble,
    ?'sum' => ?InsightRuleUnboundDouble,
    ?'timestamp' => ?Timestamp,
    ?'unique_contributors' => ?InsightRuleUnboundDouble,
  ) $s = shape()) {
    $this->average = $s['average'] ?? 0.0;
    $this->max_contributor_value = $s['max_contributor_value'] ?? 0.0;
    $this->maximum = $s['maximum'] ?? 0.0;
    $this->minimum = $s['minimum'] ?? 0.0;
    $this->sample_count = $s['sample_count'] ?? 0.0;
    $this->sum = $s['sum'] ?? 0.0;
    $this->timestamp = $s['timestamp'] ?? 0;
    $this->unique_contributors = $s['unique_contributors'] ?? 0.0;
  }
}

type InsightRuleMetricDatapoints = vec<InsightRuleMetricDatapoint>;

type InsightRuleMetricList = vec<InsightRuleMetricName>;

type InsightRuleMetricName = string;

type InsightRuleName = string;

type InsightRuleNames = vec<InsightRuleName>;

type InsightRuleOrderBy = string;

type InsightRuleSchema = string;

type InsightRuleState = string;

type InsightRuleUnboundDouble = float;

type InsightRuleUnboundInteger = int;

type InsightRuleUnboundLong = int;

type InsightRules = vec<InsightRule>;

class InternalServiceFault {
  public ?FaultDescription $message;

  public function __construct(shape(
    ?'message' => ?FaultDescription,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidFormatFault {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidNextToken {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterCombinationException {
  public ?AwsQueryErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?AwsQueryErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterValueException {
  public ?AwsQueryErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?AwsQueryErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type LastModified = int;

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class LimitExceededFault {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListDashboardsInput {
  public ?DashboardNamePrefix $dashboard_name_prefix;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'dashboard_name_prefix' => ?DashboardNamePrefix,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->dashboard_name_prefix = $s['dashboard_name_prefix'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDashboardsOutput {
  public ?DashboardEntries $dashboard_entries;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'dashboard_entries' => ?DashboardEntries,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->dashboard_entries = $s['dashboard_entries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListMetricsInput {
  public ?DimensionFilters $dimensions;
  public ?MetricName $metric_name;
  public ?Namespace $namespace;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'dimensions' => ?DimensionFilters,
    ?'metric_name' => ?MetricName,
    ?'namespace' => ?Namespace,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->dimensions = $s['dimensions'] ?? vec[];
    $this->metric_name = $s['metric_name'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListMetricsOutput {
  public ?Metrics $metrics;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'metrics' => ?Metrics,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->metrics = $s['metrics'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsForResourceInput {
  public ?AmazonResourceName $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceOutput {
  public ?TagList $tags;

  public function __construct(shape(
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
  }
}

type MaxRecords = int;

type MaxReturnedResultsCount = int;

type Message = string;

class MessageData {
  public ?MessageDataCode $code;
  public ?MessageDataValue $value;

  public function __construct(shape(
    ?'code' => ?MessageDataCode,
    ?'value' => ?MessageDataValue,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type MessageDataCode = string;

type MessageDataValue = string;

class Metric {
  public ?Dimensions $dimensions;
  public ?MetricName $metric_name;
  public ?Namespace $namespace;

  public function __construct(shape(
    ?'dimensions' => ?Dimensions,
    ?'metric_name' => ?MetricName,
    ?'namespace' => ?Namespace,
  ) $s = shape()) {
    $this->dimensions = $s['dimensions'] ?? vec[];
    $this->metric_name = $s['metric_name'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
  }
}

class MetricAlarm {
  public ?ActionsEnabled $actions_enabled;
  public ?ResourceList $alarm_actions;
  public ?AlarmArn $alarm_arn;
  public ?Timestamp $alarm_configuration_updated_timestamp;
  public ?AlarmDescription $alarm_description;
  public ?AlarmName $alarm_name;
  public ?ComparisonOperator $comparison_operator;
  public ?DatapointsToAlarm $datapoints_to_alarm;
  public ?Dimensions $dimensions;
  public ?EvaluateLowSampleCountPercentile $evaluate_low_sample_count_percentile;
  public ?EvaluationPeriods $evaluation_periods;
  public ?ExtendedStatistic $extended_statistic;
  public ?ResourceList $insufficient_data_actions;
  public ?MetricName $metric_name;
  public ?MetricDataQueries $metrics;
  public ?Namespace $namespace;
  public ?ResourceList $ok_actions;
  public ?Period $period;
  public ?StateReason $state_reason;
  public ?StateReasonData $state_reason_data;
  public ?Timestamp $state_updated_timestamp;
  public ?StateValue $state_value;
  public ?Statistic $statistic;
  public ?Threshold $threshold;
  public ?MetricId $threshold_metric_id;
  public ?TreatMissingData $treat_missing_data;
  public ?StandardUnit $unit;

  public function __construct(shape(
    ?'actions_enabled' => ?ActionsEnabled,
    ?'alarm_actions' => ?ResourceList,
    ?'alarm_arn' => ?AlarmArn,
    ?'alarm_configuration_updated_timestamp' => ?Timestamp,
    ?'alarm_description' => ?AlarmDescription,
    ?'alarm_name' => ?AlarmName,
    ?'comparison_operator' => ?ComparisonOperator,
    ?'datapoints_to_alarm' => ?DatapointsToAlarm,
    ?'dimensions' => ?Dimensions,
    ?'evaluate_low_sample_count_percentile' => ?EvaluateLowSampleCountPercentile,
    ?'evaluation_periods' => ?EvaluationPeriods,
    ?'extended_statistic' => ?ExtendedStatistic,
    ?'insufficient_data_actions' => ?ResourceList,
    ?'metric_name' => ?MetricName,
    ?'metrics' => ?MetricDataQueries,
    ?'namespace' => ?Namespace,
    ?'ok_actions' => ?ResourceList,
    ?'period' => ?Period,
    ?'state_reason' => ?StateReason,
    ?'state_reason_data' => ?StateReasonData,
    ?'state_updated_timestamp' => ?Timestamp,
    ?'state_value' => ?StateValue,
    ?'statistic' => ?Statistic,
    ?'threshold' => ?Threshold,
    ?'threshold_metric_id' => ?MetricId,
    ?'treat_missing_data' => ?TreatMissingData,
    ?'unit' => ?StandardUnit,
  ) $s = shape()) {
    $this->actions_enabled = $s['actions_enabled'] ?? false;
    $this->alarm_actions = $s['alarm_actions'] ?? vec[];
    $this->alarm_arn = $s['alarm_arn'] ?? '';
    $this->alarm_configuration_updated_timestamp = $s['alarm_configuration_updated_timestamp'] ?? 0;
    $this->alarm_description = $s['alarm_description'] ?? '';
    $this->alarm_name = $s['alarm_name'] ?? '';
    $this->comparison_operator = $s['comparison_operator'] ?? '';
    $this->datapoints_to_alarm = $s['datapoints_to_alarm'] ?? 0;
    $this->dimensions = $s['dimensions'] ?? vec[];
    $this->evaluate_low_sample_count_percentile = $s['evaluate_low_sample_count_percentile'] ?? '';
    $this->evaluation_periods = $s['evaluation_periods'] ?? 0;
    $this->extended_statistic = $s['extended_statistic'] ?? '';
    $this->insufficient_data_actions = $s['insufficient_data_actions'] ?? vec[];
    $this->metric_name = $s['metric_name'] ?? '';
    $this->metrics = $s['metrics'] ?? vec[];
    $this->namespace = $s['namespace'] ?? '';
    $this->ok_actions = $s['ok_actions'] ?? vec[];
    $this->period = $s['period'] ?? 0;
    $this->state_reason = $s['state_reason'] ?? '';
    $this->state_reason_data = $s['state_reason_data'] ?? '';
    $this->state_updated_timestamp = $s['state_updated_timestamp'] ?? 0;
    $this->state_value = $s['state_value'] ?? '';
    $this->statistic = $s['statistic'] ?? '';
    $this->threshold = $s['threshold'] ?? 0.0;
    $this->threshold_metric_id = $s['threshold_metric_id'] ?? '';
    $this->treat_missing_data = $s['treat_missing_data'] ?? '';
    $this->unit = $s['unit'] ?? '';
  }
}

type MetricAlarms = vec<MetricAlarm>;

type MetricData = vec<MetricDatum>;

type MetricDataQueries = vec<MetricDataQuery>;

class MetricDataQuery {
  public ?MetricExpression $expression;
  public ?MetricId $id;
  public ?MetricLabel $label;
  public ?MetricStat $metric_stat;
  public ?Period $period;
  public ?ReturnData $return_data;

  public function __construct(shape(
    ?'expression' => ?MetricExpression,
    ?'id' => ?MetricId,
    ?'label' => ?MetricLabel,
    ?'metric_stat' => ?MetricStat,
    ?'period' => ?Period,
    ?'return_data' => ?ReturnData,
  ) $s = shape()) {
    $this->expression = $s['expression'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->label = $s['label'] ?? '';
    $this->metric_stat = $s['metric_stat'] ?? null;
    $this->period = $s['period'] ?? 0;
    $this->return_data = $s['return_data'] ?? false;
  }
}

class MetricDataResult {
  public ?MetricId $id;
  public ?MetricLabel $label;
  public ?MetricDataResultMessages $messages;
  public ?StatusCode $status_code;
  public ?Timestamps $timestamps;
  public ?DatapointValues $values;

  public function __construct(shape(
    ?'id' => ?MetricId,
    ?'label' => ?MetricLabel,
    ?'messages' => ?MetricDataResultMessages,
    ?'status_code' => ?StatusCode,
    ?'timestamps' => ?Timestamps,
    ?'values' => ?DatapointValues,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->label = $s['label'] ?? '';
    $this->messages = $s['messages'] ?? vec[];
    $this->status_code = $s['status_code'] ?? '';
    $this->timestamps = $s['timestamps'] ?? vec[];
    $this->values = $s['values'] ?? vec[];
  }
}

type MetricDataResultMessages = vec<MessageData>;

type MetricDataResults = vec<MetricDataResult>;

class MetricDatum {
  public ?Counts $counts;
  public ?Dimensions $dimensions;
  public ?MetricName $metric_name;
  public ?StatisticSet $statistic_values;
  public ?StorageResolution $storage_resolution;
  public ?Timestamp $timestamp;
  public ?StandardUnit $unit;
  public ?DatapointValue $value;
  public ?Values $values;

  public function __construct(shape(
    ?'counts' => ?Counts,
    ?'dimensions' => ?Dimensions,
    ?'metric_name' => ?MetricName,
    ?'statistic_values' => ?StatisticSet,
    ?'storage_resolution' => ?StorageResolution,
    ?'timestamp' => ?Timestamp,
    ?'unit' => ?StandardUnit,
    ?'value' => ?DatapointValue,
    ?'values' => ?Values,
  ) $s = shape()) {
    $this->counts = $s['counts'] ?? vec[];
    $this->dimensions = $s['dimensions'] ?? vec[];
    $this->metric_name = $s['metric_name'] ?? '';
    $this->statistic_values = $s['statistic_values'] ?? null;
    $this->storage_resolution = $s['storage_resolution'] ?? 0;
    $this->timestamp = $s['timestamp'] ?? 0;
    $this->unit = $s['unit'] ?? '';
    $this->value = $s['value'] ?? 0.0;
    $this->values = $s['values'] ?? vec[];
  }
}

type MetricExpression = string;

type MetricId = string;

type MetricLabel = string;

type MetricName = string;

class MetricStat {
  public ?Metric $metric;
  public ?Period $period;
  public ?Stat $stat;
  public ?StandardUnit $unit;

  public function __construct(shape(
    ?'metric' => ?Metric,
    ?'period' => ?Period,
    ?'stat' => ?Stat,
    ?'unit' => ?StandardUnit,
  ) $s = shape()) {
    $this->metric = $s['metric'] ?? null;
    $this->period = $s['period'] ?? 0;
    $this->stat = $s['stat'] ?? '';
    $this->unit = $s['unit'] ?? '';
  }
}

type MetricWidget = string;

type MetricWidgetImage = string;

type Metrics = vec<Metric>;

class MissingRequiredParameterException {
  public ?AwsQueryErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?AwsQueryErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Namespace = string;

type NextToken = string;

type OutputFormat = string;

class PartialFailure {
  public ?ExceptionType $exception_type;
  public ?FailureCode $failure_code;
  public ?FailureDescription $failure_description;
  public ?FailureResource $failure_resource;

  public function __construct(shape(
    ?'exception_type' => ?ExceptionType,
    ?'failure_code' => ?FailureCode,
    ?'failure_description' => ?FailureDescription,
    ?'failure_resource' => ?FailureResource,
  ) $s = shape()) {
    $this->exception_type = $s['exception_type'] ?? '';
    $this->failure_code = $s['failure_code'] ?? '';
    $this->failure_description = $s['failure_description'] ?? '';
    $this->failure_resource = $s['failure_resource'] ?? '';
  }
}

type Period = int;

class PutAnomalyDetectorInput {
  public ?AnomalyDetectorConfiguration $configuration;
  public ?Dimensions $dimensions;
  public ?MetricName $metric_name;
  public ?Namespace $namespace;
  public ?AnomalyDetectorMetricStat $stat;

  public function __construct(shape(
    ?'configuration' => ?AnomalyDetectorConfiguration,
    ?'dimensions' => ?Dimensions,
    ?'metric_name' => ?MetricName,
    ?'namespace' => ?Namespace,
    ?'stat' => ?AnomalyDetectorMetricStat,
  ) $s = shape()) {
    $this->configuration = $s['configuration'] ?? null;
    $this->dimensions = $s['dimensions'] ?? vec[];
    $this->metric_name = $s['metric_name'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
    $this->stat = $s['stat'] ?? '';
  }
}

class PutAnomalyDetectorOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutCompositeAlarmInput {
  public ?ActionsEnabled $actions_enabled;
  public ?ResourceList $alarm_actions;
  public ?AlarmDescription $alarm_description;
  public ?AlarmName $alarm_name;
  public ?AlarmRule $alarm_rule;
  public ?ResourceList $insufficient_data_actions;
  public ?ResourceList $ok_actions;
  public ?TagList $tags;

  public function __construct(shape(
    ?'actions_enabled' => ?ActionsEnabled,
    ?'alarm_actions' => ?ResourceList,
    ?'alarm_description' => ?AlarmDescription,
    ?'alarm_name' => ?AlarmName,
    ?'alarm_rule' => ?AlarmRule,
    ?'insufficient_data_actions' => ?ResourceList,
    ?'ok_actions' => ?ResourceList,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->actions_enabled = $s['actions_enabled'] ?? false;
    $this->alarm_actions = $s['alarm_actions'] ?? vec[];
    $this->alarm_description = $s['alarm_description'] ?? '';
    $this->alarm_name = $s['alarm_name'] ?? '';
    $this->alarm_rule = $s['alarm_rule'] ?? '';
    $this->insufficient_data_actions = $s['insufficient_data_actions'] ?? vec[];
    $this->ok_actions = $s['ok_actions'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class PutDashboardInput {
  public ?DashboardBody $dashboard_body;
  public ?DashboardName $dashboard_name;

  public function __construct(shape(
    ?'dashboard_body' => ?DashboardBody,
    ?'dashboard_name' => ?DashboardName,
  ) $s = shape()) {
    $this->dashboard_body = $s['dashboard_body'] ?? '';
    $this->dashboard_name = $s['dashboard_name'] ?? '';
  }
}

class PutDashboardOutput {
  public ?DashboardValidationMessages $dashboard_validation_messages;

  public function __construct(shape(
    ?'dashboard_validation_messages' => ?DashboardValidationMessages,
  ) $s = shape()) {
    $this->dashboard_validation_messages = $s['dashboard_validation_messages'] ?? vec[];
  }
}

class PutInsightRuleInput {
  public ?InsightRuleDefinition $rule_definition;
  public ?InsightRuleName $rule_name;
  public ?InsightRuleState $rule_state;
  public ?TagList $tags;

  public function __construct(shape(
    ?'rule_definition' => ?InsightRuleDefinition,
    ?'rule_name' => ?InsightRuleName,
    ?'rule_state' => ?InsightRuleState,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->rule_definition = $s['rule_definition'] ?? '';
    $this->rule_name = $s['rule_name'] ?? '';
    $this->rule_state = $s['rule_state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class PutInsightRuleOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutMetricAlarmInput {
  public ?ActionsEnabled $actions_enabled;
  public ?ResourceList $alarm_actions;
  public ?AlarmDescription $alarm_description;
  public ?AlarmName $alarm_name;
  public ?ComparisonOperator $comparison_operator;
  public ?DatapointsToAlarm $datapoints_to_alarm;
  public ?Dimensions $dimensions;
  public ?EvaluateLowSampleCountPercentile $evaluate_low_sample_count_percentile;
  public ?EvaluationPeriods $evaluation_periods;
  public ?ExtendedStatistic $extended_statistic;
  public ?ResourceList $insufficient_data_actions;
  public ?MetricName $metric_name;
  public ?MetricDataQueries $metrics;
  public ?Namespace $namespace;
  public ?ResourceList $ok_actions;
  public ?Period $period;
  public ?Statistic $statistic;
  public ?TagList $tags;
  public ?Threshold $threshold;
  public ?MetricId $threshold_metric_id;
  public ?TreatMissingData $treat_missing_data;
  public ?StandardUnit $unit;

  public function __construct(shape(
    ?'actions_enabled' => ?ActionsEnabled,
    ?'alarm_actions' => ?ResourceList,
    ?'alarm_description' => ?AlarmDescription,
    ?'alarm_name' => ?AlarmName,
    ?'comparison_operator' => ?ComparisonOperator,
    ?'datapoints_to_alarm' => ?DatapointsToAlarm,
    ?'dimensions' => ?Dimensions,
    ?'evaluate_low_sample_count_percentile' => ?EvaluateLowSampleCountPercentile,
    ?'evaluation_periods' => ?EvaluationPeriods,
    ?'extended_statistic' => ?ExtendedStatistic,
    ?'insufficient_data_actions' => ?ResourceList,
    ?'metric_name' => ?MetricName,
    ?'metrics' => ?MetricDataQueries,
    ?'namespace' => ?Namespace,
    ?'ok_actions' => ?ResourceList,
    ?'period' => ?Period,
    ?'statistic' => ?Statistic,
    ?'tags' => ?TagList,
    ?'threshold' => ?Threshold,
    ?'threshold_metric_id' => ?MetricId,
    ?'treat_missing_data' => ?TreatMissingData,
    ?'unit' => ?StandardUnit,
  ) $s = shape()) {
    $this->actions_enabled = $s['actions_enabled'] ?? false;
    $this->alarm_actions = $s['alarm_actions'] ?? vec[];
    $this->alarm_description = $s['alarm_description'] ?? '';
    $this->alarm_name = $s['alarm_name'] ?? '';
    $this->comparison_operator = $s['comparison_operator'] ?? '';
    $this->datapoints_to_alarm = $s['datapoints_to_alarm'] ?? 0;
    $this->dimensions = $s['dimensions'] ?? vec[];
    $this->evaluate_low_sample_count_percentile = $s['evaluate_low_sample_count_percentile'] ?? '';
    $this->evaluation_periods = $s['evaluation_periods'] ?? 0;
    $this->extended_statistic = $s['extended_statistic'] ?? '';
    $this->insufficient_data_actions = $s['insufficient_data_actions'] ?? vec[];
    $this->metric_name = $s['metric_name'] ?? '';
    $this->metrics = $s['metrics'] ?? vec[];
    $this->namespace = $s['namespace'] ?? '';
    $this->ok_actions = $s['ok_actions'] ?? vec[];
    $this->period = $s['period'] ?? 0;
    $this->statistic = $s['statistic'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->threshold = $s['threshold'] ?? 0.0;
    $this->threshold_metric_id = $s['threshold_metric_id'] ?? '';
    $this->treat_missing_data = $s['treat_missing_data'] ?? '';
    $this->unit = $s['unit'] ?? '';
  }
}

class PutMetricDataInput {
  public ?MetricData $metric_data;
  public ?Namespace $namespace;

  public function __construct(shape(
    ?'metric_data' => ?MetricData,
    ?'namespace' => ?Namespace,
  ) $s = shape()) {
    $this->metric_data = $s['metric_data'] ?? vec[];
    $this->namespace = $s['namespace'] ?? '';
  }
}

class Range {
  public ?Timestamp $end_time;
  public ?Timestamp $start_time;

  public function __construct(shape(
    ?'end_time' => ?Timestamp,
    ?'start_time' => ?Timestamp,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->start_time = $s['start_time'] ?? 0;
  }
}

type ResourceId = string;

type ResourceList = vec<ResourceName>;

type ResourceName = string;

class ResourceNotFound {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceNotFoundException {
  public ?ResourceId $resource_id;
  public ?ResourceType $resource_type;

  public function __construct(shape(
    ?'resource_id' => ?ResourceId,
    ?'resource_type' => ?ResourceType,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

type ResourceType = string;

type ReturnData = bool;

type ScanBy = string;

class SetAlarmStateInput {
  public ?AlarmName $alarm_name;
  public ?StateReason $state_reason;
  public ?StateReasonData $state_reason_data;
  public ?StateValue $state_value;

  public function __construct(shape(
    ?'alarm_name' => ?AlarmName,
    ?'state_reason' => ?StateReason,
    ?'state_reason_data' => ?StateReasonData,
    ?'state_value' => ?StateValue,
  ) $s = shape()) {
    $this->alarm_name = $s['alarm_name'] ?? '';
    $this->state_reason = $s['state_reason'] ?? '';
    $this->state_reason_data = $s['state_reason_data'] ?? '';
    $this->state_value = $s['state_value'] ?? '';
  }
}

type Size = int;

type StandardUnit = string;

type Stat = string;

type StateReason = string;

type StateReasonData = string;

type StateValue = string;

type Statistic = string;

class StatisticSet {
  public ?DatapointValue $maximum;
  public ?DatapointValue $minimum;
  public ?DatapointValue $sample_count;
  public ?DatapointValue $sum;

  public function __construct(shape(
    ?'maximum' => ?DatapointValue,
    ?'minimum' => ?DatapointValue,
    ?'sample_count' => ?DatapointValue,
    ?'sum' => ?DatapointValue,
  ) $s = shape()) {
    $this->maximum = $s['maximum'] ?? 0.0;
    $this->minimum = $s['minimum'] ?? 0.0;
    $this->sample_count = $s['sample_count'] ?? 0.0;
    $this->sum = $s['sum'] ?? 0.0;
  }
}

type Statistics = vec<Statistic>;

type StatusCode = string;

type StorageResolution = int;

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceInput {
  public ?AmazonResourceName $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type Threshold = float;

type Timestamp = int;

type Timestamps = vec<Timestamp>;

type TreatMissingData = string;

class UntagResourceInput {
  public ?AmazonResourceName $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Values = vec<DatapointValue>;


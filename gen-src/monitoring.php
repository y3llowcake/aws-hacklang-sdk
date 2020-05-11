<?hh // strict
namespace slack\aws\monitoring;

interface CloudWatch {
  public function DeleteAlarms(DeleteAlarmsInput): Awaitable<Errors\Error>;
  public function DeleteAnomalyDetector(DeleteAnomalyDetectorInput): Awaitable<Errors\Result<DeleteAnomalyDetectorOutput>>;
  public function DeleteDashboards(DeleteDashboardsInput): Awaitable<Errors\Result<DeleteDashboardsOutput>>;
  public function DeleteInsightRules(DeleteInsightRulesInput): Awaitable<Errors\Result<DeleteInsightRulesOutput>>;
  public function DescribeAlarmHistory(DescribeAlarmHistoryInput): Awaitable<Errors\Result<DescribeAlarmHistoryOutput>>;
  public function DescribeAlarms(DescribeAlarmsInput): Awaitable<Errors\Result<DescribeAlarmsOutput>>;
  public function DescribeAlarmsForMetric(DescribeAlarmsForMetricInput): Awaitable<Errors\Result<DescribeAlarmsForMetricOutput>>;
  public function DescribeAnomalyDetectors(DescribeAnomalyDetectorsInput): Awaitable<Errors\Result<DescribeAnomalyDetectorsOutput>>;
  public function DescribeInsightRules(DescribeInsightRulesInput): Awaitable<Errors\Result<DescribeInsightRulesOutput>>;
  public function DisableAlarmActions(DisableAlarmActionsInput): Awaitable<Errors\Error>;
  public function DisableInsightRules(DisableInsightRulesInput): Awaitable<Errors\Result<DisableInsightRulesOutput>>;
  public function EnableAlarmActions(EnableAlarmActionsInput): Awaitable<Errors\Error>;
  public function EnableInsightRules(EnableInsightRulesInput): Awaitable<Errors\Result<EnableInsightRulesOutput>>;
  public function GetDashboard(GetDashboardInput): Awaitable<Errors\Result<GetDashboardOutput>>;
  public function GetInsightRuleReport(GetInsightRuleReportInput): Awaitable<Errors\Result<GetInsightRuleReportOutput>>;
  public function GetMetricData(GetMetricDataInput): Awaitable<Errors\Result<GetMetricDataOutput>>;
  public function GetMetricStatistics(GetMetricStatisticsInput): Awaitable<Errors\Result<GetMetricStatisticsOutput>>;
  public function GetMetricWidgetImage(GetMetricWidgetImageInput): Awaitable<Errors\Result<GetMetricWidgetImageOutput>>;
  public function ListDashboards(ListDashboardsInput): Awaitable<Errors\Result<ListDashboardsOutput>>;
  public function ListMetrics(ListMetricsInput): Awaitable<Errors\Result<ListMetricsOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput): Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function PutAnomalyDetector(PutAnomalyDetectorInput): Awaitable<Errors\Result<PutAnomalyDetectorOutput>>;
  public function PutCompositeAlarm(PutCompositeAlarmInput): Awaitable<Errors\Error>;
  public function PutDashboard(PutDashboardInput): Awaitable<Errors\Result<PutDashboardOutput>>;
  public function PutInsightRule(PutInsightRuleInput): Awaitable<Errors\Result<PutInsightRuleOutput>>;
  public function PutMetricAlarm(PutMetricAlarmInput): Awaitable<Errors\Error>;
  public function PutMetricData(PutMetricDataInput): Awaitable<Errors\Error>;
  public function SetAlarmState(SetAlarmStateInput): Awaitable<Errors\Error>;
  public function TagResource(TagResourceInput): Awaitable<Errors\Result<TagResourceOutput>>;
  public function UntagResource(UntagResourceInput): Awaitable<Errors\Result<UntagResourceOutput>>;
}

type ActionPrefix = string;

type ActionsEnabled = bool;

type AlarmArn = string;

type AlarmDescription = string;

class AlarmHistoryItem {
  public AlarmName $alarm_name;
  public AlarmType $alarm_type;
  public HistoryData $history_data;
  public HistoryItemType $history_item_type;
  public HistorySummary $history_summary;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'alarm_name' => AlarmName,
  ?'alarm_type' => AlarmType,
  ?'history_data' => HistoryData,
  ?'history_item_type' => HistoryItemType,
  ?'history_summary' => HistorySummary,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->alarm_name = $alarm_name ?? "";
    $this->alarm_type = $alarm_type ?? "";
    $this->history_data = $history_data ?? "";
    $this->history_item_type = $history_item_type ?? "";
    $this->history_summary = $history_summary ?? "";
    $this->timestamp = $timestamp ?? 0;
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
  public AnomalyDetectorConfiguration $configuration;
  public Dimensions $dimensions;
  public MetricName $metric_name;
  public Namespace $namespace;
  public AnomalyDetectorMetricStat $stat;
  public AnomalyDetectorStateValue $state_value;

  public function __construct(shape(
  ?'configuration' => AnomalyDetectorConfiguration,
  ?'dimensions' => Dimensions,
  ?'metric_name' => MetricName,
  ?'namespace' => Namespace,
  ?'stat' => AnomalyDetectorMetricStat,
  ?'state_value' => AnomalyDetectorStateValue,
  ) $s = shape()) {
    $this->configuration = $configuration ?? null;
    $this->dimensions = $dimensions ?? [];
    $this->metric_name = $metric_name ?? "";
    $this->namespace = $namespace ?? "";
    $this->stat = $stat ?? "";
    $this->state_value = $state_value ?? "";
  }
}

class AnomalyDetectorConfiguration {
  public AnomalyDetectorExcludedTimeRanges $excluded_time_ranges;
  public AnomalyDetectorMetricTimezone $metric_timezone;

  public function __construct(shape(
  ?'excluded_time_ranges' => AnomalyDetectorExcludedTimeRanges,
  ?'metric_timezone' => AnomalyDetectorMetricTimezone,
  ) $s = shape()) {
    $this->excluded_time_ranges = $excluded_time_ranges ?? [];
    $this->metric_timezone = $metric_timezone ?? "";
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
  public ActionsEnabled $actions_enabled;
  public ResourceList $alarm_actions;
  public AlarmArn $alarm_arn;
  public Timestamp $alarm_configuration_updated_timestamp;
  public AlarmDescription $alarm_description;
  public AlarmName $alarm_name;
  public AlarmRule $alarm_rule;
  public ResourceList $insufficient_data_actions;
  public ResourceList $ok_actions;
  public StateReason $state_reason;
  public StateReasonData $state_reason_data;
  public Timestamp $state_updated_timestamp;
  public StateValue $state_value;

  public function __construct(shape(
  ?'actions_enabled' => ActionsEnabled,
  ?'alarm_actions' => ResourceList,
  ?'alarm_arn' => AlarmArn,
  ?'alarm_configuration_updated_timestamp' => Timestamp,
  ?'alarm_description' => AlarmDescription,
  ?'alarm_name' => AlarmName,
  ?'alarm_rule' => AlarmRule,
  ?'insufficient_data_actions' => ResourceList,
  ?'ok_actions' => ResourceList,
  ?'state_reason' => StateReason,
  ?'state_reason_data' => StateReasonData,
  ?'state_updated_timestamp' => Timestamp,
  ?'state_value' => StateValue,
  ) $s = shape()) {
    $this->actions_enabled = $actions_enabled ?? false;
    $this->alarm_actions = $alarm_actions ?? [];
    $this->alarm_arn = $alarm_arn ?? "";
    $this->alarm_configuration_updated_timestamp = $alarm_configuration_updated_timestamp ?? 0;
    $this->alarm_description = $alarm_description ?? "";
    $this->alarm_name = $alarm_name ?? "";
    $this->alarm_rule = $alarm_rule ?? "";
    $this->insufficient_data_actions = $insufficient_data_actions ?? [];
    $this->ok_actions = $ok_actions ?? [];
    $this->state_reason = $state_reason ?? "";
    $this->state_reason_data = $state_reason_data ?? "";
    $this->state_updated_timestamp = $state_updated_timestamp ?? 0;
    $this->state_value = $state_value ?? "";
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
  public DashboardArn $dashboard_arn;
  public DashboardName $dashboard_name;
  public LastModified $last_modified;
  public Size $size;

  public function __construct(shape(
  ?'dashboard_arn' => DashboardArn,
  ?'dashboard_name' => DashboardName,
  ?'last_modified' => LastModified,
  ?'size' => Size,
  ) $s = shape()) {
    $this->dashboard_arn = $dashboard_arn ?? "";
    $this->dashboard_name = $dashboard_name ?? "";
    $this->last_modified = $last_modified ?? 0;
    $this->size = $size ?? 0;
  }
}

type DashboardErrorMessage = string;

class DashboardInvalidInputError {
  public DashboardValidationMessages $dashboard_validation_messages;
  public DashboardErrorMessage $message;

  public function __construct(shape(
  ?'dashboard_validation_messages' => DashboardValidationMessages,
  ?'message' => DashboardErrorMessage,
  ) $s = shape()) {
    $this->dashboard_validation_messages = $dashboard_validation_messages ?? [];
    $this->message = $message ?? "";
  }
}

type DashboardName = string;

type DashboardNamePrefix = string;

type DashboardNames = vec<DashboardName>;

class DashboardNotFoundError {
  public DashboardErrorMessage $message;

  public function __construct(shape(
  ?'message' => DashboardErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DashboardValidationMessage {
  public DataPath $data_path;
  public Message $message;

  public function __construct(shape(
  ?'data_path' => DataPath,
  ?'message' => Message,
  ) $s = shape()) {
    $this->data_path = $data_path ?? "";
    $this->message = $message ?? "";
  }
}

type DashboardValidationMessages = vec<DashboardValidationMessage>;

type DataPath = string;

class Datapoint {
  public DatapointValue $average;
  public DatapointValueMap $extended_statistics;
  public DatapointValue $maximum;
  public DatapointValue $minimum;
  public DatapointValue $sample_count;
  public DatapointValue $sum;
  public Timestamp $timestamp;
  public StandardUnit $unit;

  public function __construct(shape(
  ?'average' => DatapointValue,
  ?'extended_statistics' => DatapointValueMap,
  ?'maximum' => DatapointValue,
  ?'minimum' => DatapointValue,
  ?'sample_count' => DatapointValue,
  ?'sum' => DatapointValue,
  ?'timestamp' => Timestamp,
  ?'unit' => StandardUnit,
  ) $s = shape()) {
    $this->average = $average ?? 0.0;
    $this->extended_statistics = $extended_statistics ?? [];
    $this->maximum = $maximum ?? 0.0;
    $this->minimum = $minimum ?? 0.0;
    $this->sample_count = $sample_count ?? 0.0;
    $this->sum = $sum ?? 0.0;
    $this->timestamp = $timestamp ?? 0;
    $this->unit = $unit ?? "";
  }
}

type DatapointValue = float;

type DatapointValueMap = dict<ExtendedStatistic, DatapointValue>;

type DatapointValues = vec<DatapointValue>;

type Datapoints = vec<Datapoint>;

type DatapointsToAlarm = int;

class DeleteAlarmsInput {
  public AlarmNames $alarm_names;

  public function __construct(shape(
  ?'alarm_names' => AlarmNames,
  ) $s = shape()) {
    $this->alarm_names = $alarm_names ?? [];
  }
}

class DeleteAnomalyDetectorInput {
  public Dimensions $dimensions;
  public MetricName $metric_name;
  public Namespace $namespace;
  public AnomalyDetectorMetricStat $stat;

  public function __construct(shape(
  ?'dimensions' => Dimensions,
  ?'metric_name' => MetricName,
  ?'namespace' => Namespace,
  ?'stat' => AnomalyDetectorMetricStat,
  ) $s = shape()) {
    $this->dimensions = $dimensions ?? [];
    $this->metric_name = $metric_name ?? "";
    $this->namespace = $namespace ?? "";
    $this->stat = $stat ?? "";
  }
}

class DeleteAnomalyDetectorOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDashboardsInput {
  public DashboardNames $dashboard_names;

  public function __construct(shape(
  ?'dashboard_names' => DashboardNames,
  ) $s = shape()) {
    $this->dashboard_names = $dashboard_names ?? [];
  }
}

class DeleteDashboardsOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteInsightRulesInput {
  public InsightRuleNames $rule_names;

  public function __construct(shape(
  ?'rule_names' => InsightRuleNames,
  ) $s = shape()) {
    $this->rule_names = $rule_names ?? [];
  }
}

class DeleteInsightRulesOutput {
  public BatchFailures $failures;

  public function __construct(shape(
  ?'failures' => BatchFailures,
  ) $s = shape()) {
    $this->failures = $failures ?? [];
  }
}

class DescribeAlarmHistoryInput {
  public AlarmName $alarm_name;
  public AlarmTypes $alarm_types;
  public Timestamp $end_date;
  public HistoryItemType $history_item_type;
  public MaxRecords $max_records;
  public NextToken $next_token;
  public ScanBy $scan_by;
  public Timestamp $start_date;

  public function __construct(shape(
  ?'alarm_name' => AlarmName,
  ?'alarm_types' => AlarmTypes,
  ?'end_date' => Timestamp,
  ?'history_item_type' => HistoryItemType,
  ?'max_records' => MaxRecords,
  ?'next_token' => NextToken,
  ?'scan_by' => ScanBy,
  ?'start_date' => Timestamp,
  ) $s = shape()) {
    $this->alarm_name = $alarm_name ?? "";
    $this->alarm_types = $alarm_types ?? [];
    $this->end_date = $end_date ?? 0;
    $this->history_item_type = $history_item_type ?? "";
    $this->max_records = $max_records ?? 0;
    $this->next_token = $next_token ?? "";
    $this->scan_by = $scan_by ?? "";
    $this->start_date = $start_date ?? 0;
  }
}

class DescribeAlarmHistoryOutput {
  public AlarmHistoryItems $alarm_history_items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'alarm_history_items' => AlarmHistoryItems,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->alarm_history_items = $alarm_history_items ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAlarmsForMetricInput {
  public Dimensions $dimensions;
  public ExtendedStatistic $extended_statistic;
  public MetricName $metric_name;
  public Namespace $namespace;
  public Period $period;
  public Statistic $statistic;
  public StandardUnit $unit;

  public function __construct(shape(
  ?'dimensions' => Dimensions,
  ?'extended_statistic' => ExtendedStatistic,
  ?'metric_name' => MetricName,
  ?'namespace' => Namespace,
  ?'period' => Period,
  ?'statistic' => Statistic,
  ?'unit' => StandardUnit,
  ) $s = shape()) {
    $this->dimensions = $dimensions ?? [];
    $this->extended_statistic = $extended_statistic ?? "";
    $this->metric_name = $metric_name ?? "";
    $this->namespace = $namespace ?? "";
    $this->period = $period ?? 0;
    $this->statistic = $statistic ?? "";
    $this->unit = $unit ?? "";
  }
}

class DescribeAlarmsForMetricOutput {
  public MetricAlarms $metric_alarms;

  public function __construct(shape(
  ?'metric_alarms' => MetricAlarms,
  ) $s = shape()) {
    $this->metric_alarms = $metric_alarms ?? [];
  }
}

class DescribeAlarmsInput {
  public ActionPrefix $action_prefix;
  public AlarmNamePrefix $alarm_name_prefix;
  public AlarmNames $alarm_names;
  public AlarmTypes $alarm_types;
  public AlarmName $children_of_alarm_name;
  public MaxRecords $max_records;
  public NextToken $next_token;
  public AlarmName $parents_of_alarm_name;
  public StateValue $state_value;

  public function __construct(shape(
  ?'action_prefix' => ActionPrefix,
  ?'alarm_name_prefix' => AlarmNamePrefix,
  ?'alarm_names' => AlarmNames,
  ?'alarm_types' => AlarmTypes,
  ?'children_of_alarm_name' => AlarmName,
  ?'max_records' => MaxRecords,
  ?'next_token' => NextToken,
  ?'parents_of_alarm_name' => AlarmName,
  ?'state_value' => StateValue,
  ) $s = shape()) {
    $this->action_prefix = $action_prefix ?? "";
    $this->alarm_name_prefix = $alarm_name_prefix ?? "";
    $this->alarm_names = $alarm_names ?? [];
    $this->alarm_types = $alarm_types ?? [];
    $this->children_of_alarm_name = $children_of_alarm_name ?? "";
    $this->max_records = $max_records ?? 0;
    $this->next_token = $next_token ?? "";
    $this->parents_of_alarm_name = $parents_of_alarm_name ?? "";
    $this->state_value = $state_value ?? "";
  }
}

class DescribeAlarmsOutput {
  public CompositeAlarms $composite_alarms;
  public MetricAlarms $metric_alarms;
  public NextToken $next_token;

  public function __construct(shape(
  ?'composite_alarms' => CompositeAlarms,
  ?'metric_alarms' => MetricAlarms,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->composite_alarms = $composite_alarms ?? [];
    $this->metric_alarms = $metric_alarms ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAnomalyDetectorsInput {
  public Dimensions $dimensions;
  public MaxReturnedResultsCount $max_results;
  public MetricName $metric_name;
  public Namespace $namespace;
  public NextToken $next_token;

  public function __construct(shape(
  ?'dimensions' => Dimensions,
  ?'max_results' => MaxReturnedResultsCount,
  ?'metric_name' => MetricName,
  ?'namespace' => Namespace,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->dimensions = $dimensions ?? [];
    $this->max_results = $max_results ?? 0;
    $this->metric_name = $metric_name ?? "";
    $this->namespace = $namespace ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAnomalyDetectorsOutput {
  public AnomalyDetectors $anomaly_detectors;
  public NextToken $next_token;

  public function __construct(shape(
  ?'anomaly_detectors' => AnomalyDetectors,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->anomaly_detectors = $anomaly_detectors ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeInsightRulesInput {
  public InsightRuleMaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => InsightRuleMaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeInsightRulesOutput {
  public InsightRules $insight_rules;
  public NextToken $next_token;

  public function __construct(shape(
  ?'insight_rules' => InsightRules,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->insight_rules = $insight_rules ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class Dimension {
  public DimensionName $name;
  public DimensionValue $value;

  public function __construct(shape(
  ?'name' => DimensionName,
  ?'value' => DimensionValue,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

class DimensionFilter {
  public DimensionName $name;
  public DimensionValue $value;

  public function __construct(shape(
  ?'name' => DimensionName,
  ?'value' => DimensionValue,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

type DimensionFilters = vec<DimensionFilter>;

type DimensionName = string;

type DimensionValue = string;

type Dimensions = vec<Dimension>;

class DisableAlarmActionsInput {
  public AlarmNames $alarm_names;

  public function __construct(shape(
  ?'alarm_names' => AlarmNames,
  ) $s = shape()) {
    $this->alarm_names = $alarm_names ?? [];
  }
}

class DisableInsightRulesInput {
  public InsightRuleNames $rule_names;

  public function __construct(shape(
  ?'rule_names' => InsightRuleNames,
  ) $s = shape()) {
    $this->rule_names = $rule_names ?? [];
  }
}

class DisableInsightRulesOutput {
  public BatchFailures $failures;

  public function __construct(shape(
  ?'failures' => BatchFailures,
  ) $s = shape()) {
    $this->failures = $failures ?? [];
  }
}

class EnableAlarmActionsInput {
  public AlarmNames $alarm_names;

  public function __construct(shape(
  ?'alarm_names' => AlarmNames,
  ) $s = shape()) {
    $this->alarm_names = $alarm_names ?? [];
  }
}

class EnableInsightRulesInput {
  public InsightRuleNames $rule_names;

  public function __construct(shape(
  ?'rule_names' => InsightRuleNames,
  ) $s = shape()) {
    $this->rule_names = $rule_names ?? [];
  }
}

class EnableInsightRulesOutput {
  public BatchFailures $failures;

  public function __construct(shape(
  ?'failures' => BatchFailures,
  ) $s = shape()) {
    $this->failures = $failures ?? [];
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
  public DashboardName $dashboard_name;

  public function __construct(shape(
  ?'dashboard_name' => DashboardName,
  ) $s = shape()) {
    $this->dashboard_name = $dashboard_name ?? "";
  }
}

class GetDashboardOutput {
  public DashboardArn $dashboard_arn;
  public DashboardBody $dashboard_body;
  public DashboardName $dashboard_name;

  public function __construct(shape(
  ?'dashboard_arn' => DashboardArn,
  ?'dashboard_body' => DashboardBody,
  ?'dashboard_name' => DashboardName,
  ) $s = shape()) {
    $this->dashboard_arn = $dashboard_arn ?? "";
    $this->dashboard_body = $dashboard_body ?? "";
    $this->dashboard_name = $dashboard_name ?? "";
  }
}

class GetInsightRuleReportInput {
  public Timestamp $end_time;
  public InsightRuleUnboundInteger $max_contributor_count;
  public InsightRuleMetricList $metrics;
  public InsightRuleOrderBy $order_by;
  public Period $period;
  public InsightRuleName $rule_name;
  public Timestamp $start_time;

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'max_contributor_count' => InsightRuleUnboundInteger,
  ?'metrics' => InsightRuleMetricList,
  ?'order_by' => InsightRuleOrderBy,
  ?'period' => Period,
  ?'rule_name' => InsightRuleName,
  ?'start_time' => Timestamp,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->max_contributor_count = $max_contributor_count ?? 0;
    $this->metrics = $metrics ?? [];
    $this->order_by = $order_by ?? "";
    $this->period = $period ?? 0;
    $this->rule_name = $rule_name ?? "";
    $this->start_time = $start_time ?? 0;
  }
}

class GetInsightRuleReportOutput {
  public InsightRuleUnboundDouble $aggregate_value;
  public InsightRuleAggregationStatistic $aggregation_statistic;
  public InsightRuleUnboundLong $approximate_unique_count;
  public InsightRuleContributors $contributors;
  public InsightRuleContributorKeyLabels $key_labels;
  public InsightRuleMetricDatapoints $metric_datapoints;

  public function __construct(shape(
  ?'aggregate_value' => InsightRuleUnboundDouble,
  ?'aggregation_statistic' => InsightRuleAggregationStatistic,
  ?'approximate_unique_count' => InsightRuleUnboundLong,
  ?'contributors' => InsightRuleContributors,
  ?'key_labels' => InsightRuleContributorKeyLabels,
  ?'metric_datapoints' => InsightRuleMetricDatapoints,
  ) $s = shape()) {
    $this->aggregate_value = $aggregate_value ?? 0.0;
    $this->aggregation_statistic = $aggregation_statistic ?? "";
    $this->approximate_unique_count = $approximate_unique_count ?? 0;
    $this->contributors = $contributors ?? [];
    $this->key_labels = $key_labels ?? [];
    $this->metric_datapoints = $metric_datapoints ?? [];
  }
}

class GetMetricDataInput {
  public Timestamp $end_time;
  public GetMetricDataMaxDatapoints $max_datapoints;
  public MetricDataQueries $metric_data_queries;
  public NextToken $next_token;
  public ScanBy $scan_by;
  public Timestamp $start_time;

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'max_datapoints' => GetMetricDataMaxDatapoints,
  ?'metric_data_queries' => MetricDataQueries,
  ?'next_token' => NextToken,
  ?'scan_by' => ScanBy,
  ?'start_time' => Timestamp,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->max_datapoints = $max_datapoints ?? 0;
    $this->metric_data_queries = $metric_data_queries ?? [];
    $this->next_token = $next_token ?? "";
    $this->scan_by = $scan_by ?? "";
    $this->start_time = $start_time ?? 0;
  }
}

type GetMetricDataMaxDatapoints = int;

class GetMetricDataOutput {
  public MetricDataResultMessages $messages;
  public MetricDataResults $metric_data_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'messages' => MetricDataResultMessages,
  ?'metric_data_results' => MetricDataResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->messages = $messages ?? [];
    $this->metric_data_results = $metric_data_results ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetMetricStatisticsInput {
  public Dimensions $dimensions;
  public Timestamp $end_time;
  public ExtendedStatistics $extended_statistics;
  public MetricName $metric_name;
  public Namespace $namespace;
  public Period $period;
  public Timestamp $start_time;
  public Statistics $statistics;
  public StandardUnit $unit;

  public function __construct(shape(
  ?'dimensions' => Dimensions,
  ?'end_time' => Timestamp,
  ?'extended_statistics' => ExtendedStatistics,
  ?'metric_name' => MetricName,
  ?'namespace' => Namespace,
  ?'period' => Period,
  ?'start_time' => Timestamp,
  ?'statistics' => Statistics,
  ?'unit' => StandardUnit,
  ) $s = shape()) {
    $this->dimensions = $dimensions ?? [];
    $this->end_time = $end_time ?? 0;
    $this->extended_statistics = $extended_statistics ?? [];
    $this->metric_name = $metric_name ?? "";
    $this->namespace = $namespace ?? "";
    $this->period = $period ?? 0;
    $this->start_time = $start_time ?? 0;
    $this->statistics = $statistics ?? [];
    $this->unit = $unit ?? "";
  }
}

class GetMetricStatisticsOutput {
  public Datapoints $datapoints;
  public MetricLabel $label;

  public function __construct(shape(
  ?'datapoints' => Datapoints,
  ?'label' => MetricLabel,
  ) $s = shape()) {
    $this->datapoints = $datapoints ?? [];
    $this->label = $label ?? "";
  }
}

class GetMetricWidgetImageInput {
  public MetricWidget $metric_widget;
  public OutputFormat $output_format;

  public function __construct(shape(
  ?'metric_widget' => MetricWidget,
  ?'output_format' => OutputFormat,
  ) $s = shape()) {
    $this->metric_widget = $metric_widget ?? "";
    $this->output_format = $output_format ?? "";
  }
}

class GetMetricWidgetImageOutput {
  public MetricWidgetImage $metric_widget_image;

  public function __construct(shape(
  ?'metric_widget_image' => MetricWidgetImage,
  ) $s = shape()) {
    $this->metric_widget_image = $metric_widget_image ?? "";
  }
}

type HistoryData = string;

type HistoryItemType = string;

type HistorySummary = string;

class InsightRule {
  public InsightRuleDefinition $definition;
  public InsightRuleName $name;
  public InsightRuleSchema $schema;
  public InsightRuleState $state;

  public function __construct(shape(
  ?'definition' => InsightRuleDefinition,
  ?'name' => InsightRuleName,
  ?'schema' => InsightRuleSchema,
  ?'state' => InsightRuleState,
  ) $s = shape()) {
    $this->definition = $definition ?? "";
    $this->name = $name ?? "";
    $this->schema = $schema ?? "";
    $this->state = $state ?? "";
  }
}

type InsightRuleAggregationStatistic = string;

class InsightRuleContributor {
  public InsightRuleUnboundDouble $approximate_aggregate_value;
  public InsightRuleContributorDatapoints $datapoints;
  public InsightRuleContributorKeys $keys;

  public function __construct(shape(
  ?'approximate_aggregate_value' => InsightRuleUnboundDouble,
  ?'datapoints' => InsightRuleContributorDatapoints,
  ?'keys' => InsightRuleContributorKeys,
  ) $s = shape()) {
    $this->approximate_aggregate_value = $approximate_aggregate_value ?? 0.0;
    $this->datapoints = $datapoints ?? [];
    $this->keys = $keys ?? [];
  }
}

class InsightRuleContributorDatapoint {
  public InsightRuleUnboundDouble $approximate_value;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'approximate_value' => InsightRuleUnboundDouble,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->approximate_value = $approximate_value ?? 0.0;
    $this->timestamp = $timestamp ?? 0;
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
  public InsightRuleUnboundDouble $average;
  public InsightRuleUnboundDouble $max_contributor_value;
  public InsightRuleUnboundDouble $maximum;
  public InsightRuleUnboundDouble $minimum;
  public InsightRuleUnboundDouble $sample_count;
  public InsightRuleUnboundDouble $sum;
  public Timestamp $timestamp;
  public InsightRuleUnboundDouble $unique_contributors;

  public function __construct(shape(
  ?'average' => InsightRuleUnboundDouble,
  ?'max_contributor_value' => InsightRuleUnboundDouble,
  ?'maximum' => InsightRuleUnboundDouble,
  ?'minimum' => InsightRuleUnboundDouble,
  ?'sample_count' => InsightRuleUnboundDouble,
  ?'sum' => InsightRuleUnboundDouble,
  ?'timestamp' => Timestamp,
  ?'unique_contributors' => InsightRuleUnboundDouble,
  ) $s = shape()) {
    $this->average = $average ?? 0.0;
    $this->max_contributor_value = $max_contributor_value ?? 0.0;
    $this->maximum = $maximum ?? 0.0;
    $this->minimum = $minimum ?? 0.0;
    $this->sample_count = $sample_count ?? 0.0;
    $this->sum = $sum ?? 0.0;
    $this->timestamp = $timestamp ?? 0;
    $this->unique_contributors = $unique_contributors ?? 0.0;
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
  public FaultDescription $message;

  public function __construct(shape(
  ?'message' => FaultDescription,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidFormatFault {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidNextToken {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidParameterCombinationException {
  public AwsQueryErrorMessage $message;

  public function __construct(shape(
  ?'message' => AwsQueryErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidParameterValueException {
  public AwsQueryErrorMessage $message;

  public function __construct(shape(
  ?'message' => AwsQueryErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type LastModified = int;

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class LimitExceededFault {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListDashboardsInput {
  public DashboardNamePrefix $dashboard_name_prefix;
  public NextToken $next_token;

  public function __construct(shape(
  ?'dashboard_name_prefix' => DashboardNamePrefix,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->dashboard_name_prefix = $dashboard_name_prefix ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListDashboardsOutput {
  public DashboardEntries $dashboard_entries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'dashboard_entries' => DashboardEntries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->dashboard_entries = $dashboard_entries ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListMetricsInput {
  public DimensionFilters $dimensions;
  public MetricName $metric_name;
  public Namespace $namespace;
  public NextToken $next_token;

  public function __construct(shape(
  ?'dimensions' => DimensionFilters,
  ?'metric_name' => MetricName,
  ?'namespace' => Namespace,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->dimensions = $dimensions ?? [];
    $this->metric_name = $metric_name ?? "";
    $this->namespace = $namespace ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListMetricsOutput {
  public Metrics $metrics;
  public NextToken $next_token;

  public function __construct(shape(
  ?'metrics' => Metrics,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->metrics = $metrics ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListTagsForResourceInput {
  public AmazonResourceName $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceOutput {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

type MaxRecords = int;

type MaxReturnedResultsCount = int;

type Message = string;

class MessageData {
  public MessageDataCode $code;
  public MessageDataValue $value;

  public function __construct(shape(
  ?'code' => MessageDataCode,
  ?'value' => MessageDataValue,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->value = $value ?? "";
  }
}

type MessageDataCode = string;

type MessageDataValue = string;

class Metric {
  public Dimensions $dimensions;
  public MetricName $metric_name;
  public Namespace $namespace;

  public function __construct(shape(
  ?'dimensions' => Dimensions,
  ?'metric_name' => MetricName,
  ?'namespace' => Namespace,
  ) $s = shape()) {
    $this->dimensions = $dimensions ?? [];
    $this->metric_name = $metric_name ?? "";
    $this->namespace = $namespace ?? "";
  }
}

class MetricAlarm {
  public ActionsEnabled $actions_enabled;
  public ResourceList $alarm_actions;
  public AlarmArn $alarm_arn;
  public Timestamp $alarm_configuration_updated_timestamp;
  public AlarmDescription $alarm_description;
  public AlarmName $alarm_name;
  public ComparisonOperator $comparison_operator;
  public DatapointsToAlarm $datapoints_to_alarm;
  public Dimensions $dimensions;
  public EvaluateLowSampleCountPercentile $evaluate_low_sample_count_percentile;
  public EvaluationPeriods $evaluation_periods;
  public ExtendedStatistic $extended_statistic;
  public ResourceList $insufficient_data_actions;
  public MetricName $metric_name;
  public MetricDataQueries $metrics;
  public Namespace $namespace;
  public ResourceList $ok_actions;
  public Period $period;
  public StateReason $state_reason;
  public StateReasonData $state_reason_data;
  public Timestamp $state_updated_timestamp;
  public StateValue $state_value;
  public Statistic $statistic;
  public Threshold $threshold;
  public MetricId $threshold_metric_id;
  public TreatMissingData $treat_missing_data;
  public StandardUnit $unit;

  public function __construct(shape(
  ?'actions_enabled' => ActionsEnabled,
  ?'alarm_actions' => ResourceList,
  ?'alarm_arn' => AlarmArn,
  ?'alarm_configuration_updated_timestamp' => Timestamp,
  ?'alarm_description' => AlarmDescription,
  ?'alarm_name' => AlarmName,
  ?'comparison_operator' => ComparisonOperator,
  ?'datapoints_to_alarm' => DatapointsToAlarm,
  ?'dimensions' => Dimensions,
  ?'evaluate_low_sample_count_percentile' => EvaluateLowSampleCountPercentile,
  ?'evaluation_periods' => EvaluationPeriods,
  ?'extended_statistic' => ExtendedStatistic,
  ?'insufficient_data_actions' => ResourceList,
  ?'metric_name' => MetricName,
  ?'metrics' => MetricDataQueries,
  ?'namespace' => Namespace,
  ?'ok_actions' => ResourceList,
  ?'period' => Period,
  ?'state_reason' => StateReason,
  ?'state_reason_data' => StateReasonData,
  ?'state_updated_timestamp' => Timestamp,
  ?'state_value' => StateValue,
  ?'statistic' => Statistic,
  ?'threshold' => Threshold,
  ?'threshold_metric_id' => MetricId,
  ?'treat_missing_data' => TreatMissingData,
  ?'unit' => StandardUnit,
  ) $s = shape()) {
    $this->actions_enabled = $actions_enabled ?? false;
    $this->alarm_actions = $alarm_actions ?? [];
    $this->alarm_arn = $alarm_arn ?? "";
    $this->alarm_configuration_updated_timestamp = $alarm_configuration_updated_timestamp ?? 0;
    $this->alarm_description = $alarm_description ?? "";
    $this->alarm_name = $alarm_name ?? "";
    $this->comparison_operator = $comparison_operator ?? "";
    $this->datapoints_to_alarm = $datapoints_to_alarm ?? 0;
    $this->dimensions = $dimensions ?? [];
    $this->evaluate_low_sample_count_percentile = $evaluate_low_sample_count_percentile ?? "";
    $this->evaluation_periods = $evaluation_periods ?? 0;
    $this->extended_statistic = $extended_statistic ?? "";
    $this->insufficient_data_actions = $insufficient_data_actions ?? [];
    $this->metric_name = $metric_name ?? "";
    $this->metrics = $metrics ?? [];
    $this->namespace = $namespace ?? "";
    $this->ok_actions = $ok_actions ?? [];
    $this->period = $period ?? 0;
    $this->state_reason = $state_reason ?? "";
    $this->state_reason_data = $state_reason_data ?? "";
    $this->state_updated_timestamp = $state_updated_timestamp ?? 0;
    $this->state_value = $state_value ?? "";
    $this->statistic = $statistic ?? "";
    $this->threshold = $threshold ?? 0.0;
    $this->threshold_metric_id = $threshold_metric_id ?? "";
    $this->treat_missing_data = $treat_missing_data ?? "";
    $this->unit = $unit ?? "";
  }
}

type MetricAlarms = vec<MetricAlarm>;

type MetricData = vec<MetricDatum>;

type MetricDataQueries = vec<MetricDataQuery>;

class MetricDataQuery {
  public MetricExpression $expression;
  public MetricId $id;
  public MetricLabel $label;
  public MetricStat $metric_stat;
  public Period $period;
  public ReturnData $return_data;

  public function __construct(shape(
  ?'expression' => MetricExpression,
  ?'id' => MetricId,
  ?'label' => MetricLabel,
  ?'metric_stat' => MetricStat,
  ?'period' => Period,
  ?'return_data' => ReturnData,
  ) $s = shape()) {
    $this->expression = $expression ?? "";
    $this->id = $id ?? "";
    $this->label = $label ?? "";
    $this->metric_stat = $metric_stat ?? null;
    $this->period = $period ?? 0;
    $this->return_data = $return_data ?? false;
  }
}

class MetricDataResult {
  public MetricId $id;
  public MetricLabel $label;
  public MetricDataResultMessages $messages;
  public StatusCode $status_code;
  public Timestamps $timestamps;
  public DatapointValues $values;

  public function __construct(shape(
  ?'id' => MetricId,
  ?'label' => MetricLabel,
  ?'messages' => MetricDataResultMessages,
  ?'status_code' => StatusCode,
  ?'timestamps' => Timestamps,
  ?'values' => DatapointValues,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->label = $label ?? "";
    $this->messages = $messages ?? [];
    $this->status_code = $status_code ?? "";
    $this->timestamps = $timestamps ?? [];
    $this->values = $values ?? [];
  }
}

type MetricDataResultMessages = vec<MessageData>;

type MetricDataResults = vec<MetricDataResult>;

class MetricDatum {
  public Counts $counts;
  public Dimensions $dimensions;
  public MetricName $metric_name;
  public StatisticSet $statistic_values;
  public StorageResolution $storage_resolution;
  public Timestamp $timestamp;
  public StandardUnit $unit;
  public DatapointValue $value;
  public Values $values;

  public function __construct(shape(
  ?'counts' => Counts,
  ?'dimensions' => Dimensions,
  ?'metric_name' => MetricName,
  ?'statistic_values' => StatisticSet,
  ?'storage_resolution' => StorageResolution,
  ?'timestamp' => Timestamp,
  ?'unit' => StandardUnit,
  ?'value' => DatapointValue,
  ?'values' => Values,
  ) $s = shape()) {
    $this->counts = $counts ?? [];
    $this->dimensions = $dimensions ?? [];
    $this->metric_name = $metric_name ?? "";
    $this->statistic_values = $statistic_values ?? null;
    $this->storage_resolution = $storage_resolution ?? 0;
    $this->timestamp = $timestamp ?? 0;
    $this->unit = $unit ?? "";
    $this->value = $value ?? 0.0;
    $this->values = $values ?? [];
  }
}

type MetricExpression = string;

type MetricId = string;

type MetricLabel = string;

type MetricName = string;

class MetricStat {
  public Metric $metric;
  public Period $period;
  public Stat $stat;
  public StandardUnit $unit;

  public function __construct(shape(
  ?'metric' => Metric,
  ?'period' => Period,
  ?'stat' => Stat,
  ?'unit' => StandardUnit,
  ) $s = shape()) {
    $this->metric = $metric ?? null;
    $this->period = $period ?? 0;
    $this->stat = $stat ?? "";
    $this->unit = $unit ?? "";
  }
}

type MetricWidget = string;

type MetricWidgetImage = string;

type Metrics = vec<Metric>;

class MissingRequiredParameterException {
  public AwsQueryErrorMessage $message;

  public function __construct(shape(
  ?'message' => AwsQueryErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Namespace = string;

type NextToken = string;

type OutputFormat = string;

class PartialFailure {
  public ExceptionType $exception_type;
  public FailureCode $failure_code;
  public FailureDescription $failure_description;
  public FailureResource $failure_resource;

  public function __construct(shape(
  ?'exception_type' => ExceptionType,
  ?'failure_code' => FailureCode,
  ?'failure_description' => FailureDescription,
  ?'failure_resource' => FailureResource,
  ) $s = shape()) {
    $this->exception_type = $exception_type ?? "";
    $this->failure_code = $failure_code ?? "";
    $this->failure_description = $failure_description ?? "";
    $this->failure_resource = $failure_resource ?? "";
  }
}

type Period = int;

class PutAnomalyDetectorInput {
  public AnomalyDetectorConfiguration $configuration;
  public Dimensions $dimensions;
  public MetricName $metric_name;
  public Namespace $namespace;
  public AnomalyDetectorMetricStat $stat;

  public function __construct(shape(
  ?'configuration' => AnomalyDetectorConfiguration,
  ?'dimensions' => Dimensions,
  ?'metric_name' => MetricName,
  ?'namespace' => Namespace,
  ?'stat' => AnomalyDetectorMetricStat,
  ) $s = shape()) {
    $this->configuration = $configuration ?? null;
    $this->dimensions = $dimensions ?? [];
    $this->metric_name = $metric_name ?? "";
    $this->namespace = $namespace ?? "";
    $this->stat = $stat ?? "";
  }
}

class PutAnomalyDetectorOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutCompositeAlarmInput {
  public ActionsEnabled $actions_enabled;
  public ResourceList $alarm_actions;
  public AlarmDescription $alarm_description;
  public AlarmName $alarm_name;
  public AlarmRule $alarm_rule;
  public ResourceList $insufficient_data_actions;
  public ResourceList $ok_actions;
  public TagList $tags;

  public function __construct(shape(
  ?'actions_enabled' => ActionsEnabled,
  ?'alarm_actions' => ResourceList,
  ?'alarm_description' => AlarmDescription,
  ?'alarm_name' => AlarmName,
  ?'alarm_rule' => AlarmRule,
  ?'insufficient_data_actions' => ResourceList,
  ?'ok_actions' => ResourceList,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->actions_enabled = $actions_enabled ?? false;
    $this->alarm_actions = $alarm_actions ?? [];
    $this->alarm_description = $alarm_description ?? "";
    $this->alarm_name = $alarm_name ?? "";
    $this->alarm_rule = $alarm_rule ?? "";
    $this->insufficient_data_actions = $insufficient_data_actions ?? [];
    $this->ok_actions = $ok_actions ?? [];
    $this->tags = $tags ?? [];
  }
}

class PutDashboardInput {
  public DashboardBody $dashboard_body;
  public DashboardName $dashboard_name;

  public function __construct(shape(
  ?'dashboard_body' => DashboardBody,
  ?'dashboard_name' => DashboardName,
  ) $s = shape()) {
    $this->dashboard_body = $dashboard_body ?? "";
    $this->dashboard_name = $dashboard_name ?? "";
  }
}

class PutDashboardOutput {
  public DashboardValidationMessages $dashboard_validation_messages;

  public function __construct(shape(
  ?'dashboard_validation_messages' => DashboardValidationMessages,
  ) $s = shape()) {
    $this->dashboard_validation_messages = $dashboard_validation_messages ?? [];
  }
}

class PutInsightRuleInput {
  public InsightRuleDefinition $rule_definition;
  public InsightRuleName $rule_name;
  public InsightRuleState $rule_state;
  public TagList $tags;

  public function __construct(shape(
  ?'rule_definition' => InsightRuleDefinition,
  ?'rule_name' => InsightRuleName,
  ?'rule_state' => InsightRuleState,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->rule_definition = $rule_definition ?? "";
    $this->rule_name = $rule_name ?? "";
    $this->rule_state = $rule_state ?? "";
    $this->tags = $tags ?? [];
  }
}

class PutInsightRuleOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutMetricAlarmInput {
  public ActionsEnabled $actions_enabled;
  public ResourceList $alarm_actions;
  public AlarmDescription $alarm_description;
  public AlarmName $alarm_name;
  public ComparisonOperator $comparison_operator;
  public DatapointsToAlarm $datapoints_to_alarm;
  public Dimensions $dimensions;
  public EvaluateLowSampleCountPercentile $evaluate_low_sample_count_percentile;
  public EvaluationPeriods $evaluation_periods;
  public ExtendedStatistic $extended_statistic;
  public ResourceList $insufficient_data_actions;
  public MetricName $metric_name;
  public MetricDataQueries $metrics;
  public Namespace $namespace;
  public ResourceList $ok_actions;
  public Period $period;
  public Statistic $statistic;
  public TagList $tags;
  public Threshold $threshold;
  public MetricId $threshold_metric_id;
  public TreatMissingData $treat_missing_data;
  public StandardUnit $unit;

  public function __construct(shape(
  ?'actions_enabled' => ActionsEnabled,
  ?'alarm_actions' => ResourceList,
  ?'alarm_description' => AlarmDescription,
  ?'alarm_name' => AlarmName,
  ?'comparison_operator' => ComparisonOperator,
  ?'datapoints_to_alarm' => DatapointsToAlarm,
  ?'dimensions' => Dimensions,
  ?'evaluate_low_sample_count_percentile' => EvaluateLowSampleCountPercentile,
  ?'evaluation_periods' => EvaluationPeriods,
  ?'extended_statistic' => ExtendedStatistic,
  ?'insufficient_data_actions' => ResourceList,
  ?'metric_name' => MetricName,
  ?'metrics' => MetricDataQueries,
  ?'namespace' => Namespace,
  ?'ok_actions' => ResourceList,
  ?'period' => Period,
  ?'statistic' => Statistic,
  ?'tags' => TagList,
  ?'threshold' => Threshold,
  ?'threshold_metric_id' => MetricId,
  ?'treat_missing_data' => TreatMissingData,
  ?'unit' => StandardUnit,
  ) $s = shape()) {
    $this->actions_enabled = $actions_enabled ?? false;
    $this->alarm_actions = $alarm_actions ?? [];
    $this->alarm_description = $alarm_description ?? "";
    $this->alarm_name = $alarm_name ?? "";
    $this->comparison_operator = $comparison_operator ?? "";
    $this->datapoints_to_alarm = $datapoints_to_alarm ?? 0;
    $this->dimensions = $dimensions ?? [];
    $this->evaluate_low_sample_count_percentile = $evaluate_low_sample_count_percentile ?? "";
    $this->evaluation_periods = $evaluation_periods ?? 0;
    $this->extended_statistic = $extended_statistic ?? "";
    $this->insufficient_data_actions = $insufficient_data_actions ?? [];
    $this->metric_name = $metric_name ?? "";
    $this->metrics = $metrics ?? [];
    $this->namespace = $namespace ?? "";
    $this->ok_actions = $ok_actions ?? [];
    $this->period = $period ?? 0;
    $this->statistic = $statistic ?? "";
    $this->tags = $tags ?? [];
    $this->threshold = $threshold ?? 0.0;
    $this->threshold_metric_id = $threshold_metric_id ?? "";
    $this->treat_missing_data = $treat_missing_data ?? "";
    $this->unit = $unit ?? "";
  }
}

class PutMetricDataInput {
  public MetricData $metric_data;
  public Namespace $namespace;

  public function __construct(shape(
  ?'metric_data' => MetricData,
  ?'namespace' => Namespace,
  ) $s = shape()) {
    $this->metric_data = $metric_data ?? [];
    $this->namespace = $namespace ?? "";
  }
}

class Range {
  public Timestamp $end_time;
  public Timestamp $start_time;

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'start_time' => Timestamp,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->start_time = $start_time ?? 0;
  }
}

type ResourceId = string;

type ResourceList = vec<ResourceName>;

type ResourceName = string;

class ResourceNotFound {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceNotFoundException {
  public ResourceId $resource_id;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'resource_id' => ResourceId,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

type ResourceType = string;

type ReturnData = bool;

type ScanBy = string;

class SetAlarmStateInput {
  public AlarmName $alarm_name;
  public StateReason $state_reason;
  public StateReasonData $state_reason_data;
  public StateValue $state_value;

  public function __construct(shape(
  ?'alarm_name' => AlarmName,
  ?'state_reason' => StateReason,
  ?'state_reason_data' => StateReasonData,
  ?'state_value' => StateValue,
  ) $s = shape()) {
    $this->alarm_name = $alarm_name ?? "";
    $this->state_reason = $state_reason ?? "";
    $this->state_reason_data = $state_reason_data ?? "";
    $this->state_value = $state_value ?? "";
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
  public DatapointValue $maximum;
  public DatapointValue $minimum;
  public DatapointValue $sample_count;
  public DatapointValue $sum;

  public function __construct(shape(
  ?'maximum' => DatapointValue,
  ?'minimum' => DatapointValue,
  ?'sample_count' => DatapointValue,
  ?'sum' => DatapointValue,
  ) $s = shape()) {
    $this->maximum = $maximum ?? 0.0;
    $this->minimum = $minimum ?? 0.0;
    $this->sample_count = $sample_count ?? 0.0;
    $this->sum = $sum ?? 0.0;
  }
}

type Statistics = vec<Statistic>;

type StatusCode = string;

type StorageResolution = int;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceInput {
  public AmazonResourceName $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
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
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Values = vec<DatapointValue>;


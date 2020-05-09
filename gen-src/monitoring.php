<?hh // strict
namespace slack\aws\monitoring;

interface CloudWatch {
  public function DeleteAlarms(DeleteAlarmsInput) Awaitable<Errors\Error>;
  public function DeleteAnomalyDetector(DeleteAnomalyDetectorInput) Awaitable<Errors\Result<DeleteAnomalyDetectorOutput>>;
  public function DeleteDashboards(DeleteDashboardsInput) Awaitable<Errors\Result<DeleteDashboardsOutput>>;
  public function DeleteInsightRules(DeleteInsightRulesInput) Awaitable<Errors\Result<DeleteInsightRulesOutput>>;
  public function DescribeAlarmHistory(DescribeAlarmHistoryInput) Awaitable<Errors\Result<DescribeAlarmHistoryOutput>>;
  public function DescribeAlarms(DescribeAlarmsInput) Awaitable<Errors\Result<DescribeAlarmsOutput>>;
  public function DescribeAlarmsForMetric(DescribeAlarmsForMetricInput) Awaitable<Errors\Result<DescribeAlarmsForMetricOutput>>;
  public function DescribeAnomalyDetectors(DescribeAnomalyDetectorsInput) Awaitable<Errors\Result<DescribeAnomalyDetectorsOutput>>;
  public function DescribeInsightRules(DescribeInsightRulesInput) Awaitable<Errors\Result<DescribeInsightRulesOutput>>;
  public function DisableAlarmActions(DisableAlarmActionsInput) Awaitable<Errors\Error>;
  public function DisableInsightRules(DisableInsightRulesInput) Awaitable<Errors\Result<DisableInsightRulesOutput>>;
  public function EnableAlarmActions(EnableAlarmActionsInput) Awaitable<Errors\Error>;
  public function EnableInsightRules(EnableInsightRulesInput) Awaitable<Errors\Result<EnableInsightRulesOutput>>;
  public function GetDashboard(GetDashboardInput) Awaitable<Errors\Result<GetDashboardOutput>>;
  public function GetInsightRuleReport(GetInsightRuleReportInput) Awaitable<Errors\Result<GetInsightRuleReportOutput>>;
  public function GetMetricData(GetMetricDataInput) Awaitable<Errors\Result<GetMetricDataOutput>>;
  public function GetMetricStatistics(GetMetricStatisticsInput) Awaitable<Errors\Result<GetMetricStatisticsOutput>>;
  public function GetMetricWidgetImage(GetMetricWidgetImageInput) Awaitable<Errors\Result<GetMetricWidgetImageOutput>>;
  public function ListDashboards(ListDashboardsInput) Awaitable<Errors\Result<ListDashboardsOutput>>;
  public function ListMetrics(ListMetricsInput) Awaitable<Errors\Result<ListMetricsOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput) Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function PutAnomalyDetector(PutAnomalyDetectorInput) Awaitable<Errors\Result<PutAnomalyDetectorOutput>>;
  public function PutCompositeAlarm(PutCompositeAlarmInput) Awaitable<Errors\Error>;
  public function PutDashboard(PutDashboardInput) Awaitable<Errors\Result<PutDashboardOutput>>;
  public function PutInsightRule(PutInsightRuleInput) Awaitable<Errors\Result<PutInsightRuleOutput>>;
  public function PutMetricAlarm(PutMetricAlarmInput) Awaitable<Errors\Error>;
  public function PutMetricData(PutMetricDataInput) Awaitable<Errors\Error>;
  public function SetAlarmState(SetAlarmStateInput) Awaitable<Errors\Error>;
  public function TagResource(TagResourceInput) Awaitable<Errors\Result<TagResourceOutput>>;
  public function UntagResource(UntagResourceInput) Awaitable<Errors\Result<UntagResourceOutput>>;
}

class ActionPrefix {
}

class ActionsEnabled {
}

class AlarmArn {
}

class AlarmDescription {
}

class AlarmHistoryItem {
  public AlarmName $alarm_name;
  public AlarmType $alarm_type;
  public HistoryData $history_data;
  public HistoryItemType $history_item_type;
  public HistorySummary $history_summary;
  public Timestamp $timestamp;
}

class AlarmHistoryItems {
}

class AlarmName {
}

class AlarmNamePrefix {
}

class AlarmNames {
}

class AlarmRule {
}

class AlarmType {
}

class AlarmTypes {
}

class AmazonResourceName {
}

class AnomalyDetector {
  public AnomalyDetectorConfiguration $configuration;
  public Dimensions $dimensions;
  public MetricName $metric_name;
  public Namespace $namespace;
  public AnomalyDetectorMetricStat $stat;
  public AnomalyDetectorStateValue $state_value;
}

class AnomalyDetectorConfiguration {
  public AnomalyDetectorExcludedTimeRanges $excluded_time_ranges;
  public AnomalyDetectorMetricTimezone $metric_timezone;
}

class AnomalyDetectorExcludedTimeRanges {
}

class AnomalyDetectorMetricStat {
}

class AnomalyDetectorMetricTimezone {
}

class AnomalyDetectorStateValue {
}

class AnomalyDetectors {
}

class AwsQueryErrorMessage {
}

class BatchFailures {
}

class ComparisonOperator {
}

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
}

class CompositeAlarms {
}

class ConcurrentModificationException {
}

class Counts {
}

class DashboardArn {
}

class DashboardBody {
}

class DashboardEntries {
}

class DashboardEntry {
  public DashboardArn $dashboard_arn;
  public DashboardName $dashboard_name;
  public LastModified $last_modified;
  public Size $size;
}

class DashboardErrorMessage {
}

class DashboardInvalidInputError {
  public DashboardValidationMessages $dashboard_validation_messages;
  public DashboardErrorMessage $message;
}

class DashboardName {
}

class DashboardNamePrefix {
}

class DashboardNames {
}

class DashboardNotFoundError {
  public DashboardErrorMessage $message;
}

class DashboardValidationMessage {
  public DataPath $data_path;
  public Message $message;
}

class DashboardValidationMessages {
}

class DataPath {
}

class Datapoint {
  public DatapointValue $average;
  public DatapointValueMap $extended_statistics;
  public DatapointValue $maximum;
  public DatapointValue $minimum;
  public DatapointValue $sample_count;
  public DatapointValue $sum;
  public Timestamp $timestamp;
  public StandardUnit $unit;
}

class DatapointValue {
}

class DatapointValueMap {
}

class DatapointValues {
}

class Datapoints {
}

class DatapointsToAlarm {
}

class DeleteAlarmsInput {
  public AlarmNames $alarm_names;
}

class DeleteAnomalyDetectorInput {
  public Dimensions $dimensions;
  public MetricName $metric_name;
  public Namespace $namespace;
  public AnomalyDetectorMetricStat $stat;
}

class DeleteAnomalyDetectorOutput {
}

class DeleteDashboardsInput {
  public DashboardNames $dashboard_names;
}

class DeleteDashboardsOutput {
}

class DeleteInsightRulesInput {
  public InsightRuleNames $rule_names;
}

class DeleteInsightRulesOutput {
  public BatchFailures $failures;
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
}

class DescribeAlarmHistoryOutput {
  public AlarmHistoryItems $alarm_history_items;
  public NextToken $next_token;
}

class DescribeAlarmsForMetricInput {
  public Dimensions $dimensions;
  public ExtendedStatistic $extended_statistic;
  public MetricName $metric_name;
  public Namespace $namespace;
  public Period $period;
  public Statistic $statistic;
  public StandardUnit $unit;
}

class DescribeAlarmsForMetricOutput {
  public MetricAlarms $metric_alarms;
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
}

class DescribeAlarmsOutput {
  public CompositeAlarms $composite_alarms;
  public MetricAlarms $metric_alarms;
  public NextToken $next_token;
}

class DescribeAnomalyDetectorsInput {
  public Dimensions $dimensions;
  public MaxReturnedResultsCount $max_results;
  public MetricName $metric_name;
  public Namespace $namespace;
  public NextToken $next_token;
}

class DescribeAnomalyDetectorsOutput {
  public AnomalyDetectors $anomaly_detectors;
  public NextToken $next_token;
}

class DescribeInsightRulesInput {
  public InsightRuleMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeInsightRulesOutput {
  public InsightRules $insight_rules;
  public NextToken $next_token;
}

class Dimension {
  public DimensionName $name;
  public DimensionValue $value;
}

class DimensionFilter {
  public DimensionName $name;
  public DimensionValue $value;
}

class DimensionFilters {
}

class DimensionName {
}

class DimensionValue {
}

class Dimensions {
}

class DisableAlarmActionsInput {
  public AlarmNames $alarm_names;
}

class DisableInsightRulesInput {
  public InsightRuleNames $rule_names;
}

class DisableInsightRulesOutput {
  public BatchFailures $failures;
}

class EnableAlarmActionsInput {
  public AlarmNames $alarm_names;
}

class EnableInsightRulesInput {
  public InsightRuleNames $rule_names;
}

class EnableInsightRulesOutput {
  public BatchFailures $failures;
}

class ErrorMessage {
}

class EvaluateLowSampleCountPercentile {
}

class EvaluationPeriods {
}

class ExceptionType {
}

class ExtendedStatistic {
}

class ExtendedStatistics {
}

class FailureCode {
}

class FailureDescription {
}

class FailureResource {
}

class FaultDescription {
}

class GetDashboardInput {
  public DashboardName $dashboard_name;
}

class GetDashboardOutput {
  public DashboardArn $dashboard_arn;
  public DashboardBody $dashboard_body;
  public DashboardName $dashboard_name;
}

class GetInsightRuleReportInput {
  public Timestamp $end_time;
  public InsightRuleUnboundInteger $max_contributor_count;
  public InsightRuleMetricList $metrics;
  public InsightRuleOrderBy $order_by;
  public Period $period;
  public InsightRuleName $rule_name;
  public Timestamp $start_time;
}

class GetInsightRuleReportOutput {
  public InsightRuleUnboundDouble $aggregate_value;
  public InsightRuleAggregationStatistic $aggregation_statistic;
  public InsightRuleUnboundLong $approximate_unique_count;
  public InsightRuleContributors $contributors;
  public InsightRuleContributorKeyLabels $key_labels;
  public InsightRuleMetricDatapoints $metric_datapoints;
}

class GetMetricDataInput {
  public Timestamp $end_time;
  public GetMetricDataMaxDatapoints $max_datapoints;
  public MetricDataQueries $metric_data_queries;
  public NextToken $next_token;
  public ScanBy $scan_by;
  public Timestamp $start_time;
}

class GetMetricDataMaxDatapoints {
}

class GetMetricDataOutput {
  public MetricDataResultMessages $messages;
  public MetricDataResults $metric_data_results;
  public NextToken $next_token;
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
}

class GetMetricStatisticsOutput {
  public Datapoints $datapoints;
  public MetricLabel $label;
}

class GetMetricWidgetImageInput {
  public MetricWidget $metric_widget;
  public OutputFormat $output_format;
}

class GetMetricWidgetImageOutput {
  public MetricWidgetImage $metric_widget_image;
}

class HistoryData {
}

class HistoryItemType {
}

class HistorySummary {
}

class InsightRule {
  public InsightRuleDefinition $definition;
  public InsightRuleName $name;
  public InsightRuleSchema $schema;
  public InsightRuleState $state;
}

class InsightRuleAggregationStatistic {
}

class InsightRuleContributor {
  public InsightRuleUnboundDouble $approximate_aggregate_value;
  public InsightRuleContributorDatapoints $datapoints;
  public InsightRuleContributorKeys $keys;
}

class InsightRuleContributorDatapoint {
  public InsightRuleUnboundDouble $approximate_value;
  public Timestamp $timestamp;
}

class InsightRuleContributorDatapoints {
}

class InsightRuleContributorKey {
}

class InsightRuleContributorKeyLabel {
}

class InsightRuleContributorKeyLabels {
}

class InsightRuleContributorKeys {
}

class InsightRuleContributors {
}

class InsightRuleDefinition {
}

class InsightRuleMaxResults {
}

class InsightRuleMetricDatapoint {
  public InsightRuleUnboundDouble $average;
  public InsightRuleUnboundDouble $max_contributor_value;
  public InsightRuleUnboundDouble $maximum;
  public InsightRuleUnboundDouble $minimum;
  public InsightRuleUnboundDouble $sample_count;
  public InsightRuleUnboundDouble $sum;
  public Timestamp $timestamp;
  public InsightRuleUnboundDouble $unique_contributors;
}

class InsightRuleMetricDatapoints {
}

class InsightRuleMetricList {
}

class InsightRuleMetricName {
}

class InsightRuleName {
}

class InsightRuleNames {
}

class InsightRuleOrderBy {
}

class InsightRuleSchema {
}

class InsightRuleState {
}

class InsightRuleUnboundDouble {
}

class InsightRuleUnboundInteger {
}

class InsightRuleUnboundLong {
}

class InsightRules {
}

class InternalServiceFault {
  public FaultDescription $message;
}

class InvalidFormatFault {
  public ErrorMessage $message;
}

class InvalidNextToken {
  public ErrorMessage $message;
}

class InvalidParameterCombinationException {
  public AwsQueryErrorMessage $message;
}

class InvalidParameterValueException {
  public AwsQueryErrorMessage $message;
}

class LastModified {
}

class LimitExceededException {
}

class LimitExceededFault {
  public ErrorMessage $message;
}

class ListDashboardsInput {
  public DashboardNamePrefix $dashboard_name_prefix;
  public NextToken $next_token;
}

class ListDashboardsOutput {
  public DashboardEntries $dashboard_entries;
  public NextToken $next_token;
}

class ListMetricsInput {
  public DimensionFilters $dimensions;
  public MetricName $metric_name;
  public Namespace $namespace;
  public NextToken $next_token;
}

class ListMetricsOutput {
  public Metrics $metrics;
  public NextToken $next_token;
}

class ListTagsForResourceInput {
  public AmazonResourceName $resource_arn;
}

class ListTagsForResourceOutput {
  public TagList $tags;
}

class MaxRecords {
}

class MaxReturnedResultsCount {
}

class Message {
}

class MessageData {
  public MessageDataCode $code;
  public MessageDataValue $value;
}

class MessageDataCode {
}

class MessageDataValue {
}

class Metric {
  public Dimensions $dimensions;
  public MetricName $metric_name;
  public Namespace $namespace;
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
}

class MetricAlarms {
}

class MetricData {
}

class MetricDataQueries {
}

class MetricDataQuery {
  public MetricExpression $expression;
  public MetricId $id;
  public MetricLabel $label;
  public MetricStat $metric_stat;
  public Period $period;
  public ReturnData $return_data;
}

class MetricDataResult {
  public MetricId $id;
  public MetricLabel $label;
  public MetricDataResultMessages $messages;
  public StatusCode $status_code;
  public Timestamps $timestamps;
  public DatapointValues $values;
}

class MetricDataResultMessages {
}

class MetricDataResults {
}

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
}

class MetricExpression {
}

class MetricId {
}

class MetricLabel {
}

class MetricName {
}

class MetricStat {
  public Metric $metric;
  public Period $period;
  public Stat $stat;
  public StandardUnit $unit;
}

class MetricWidget {
}

class MetricWidgetImage {
}

class Metrics {
}

class MissingRequiredParameterException {
  public AwsQueryErrorMessage $message;
}

class Namespace {
}

class NextToken {
}

class OutputFormat {
}

class PartialFailure {
  public ExceptionType $exception_type;
  public FailureCode $failure_code;
  public FailureDescription $failure_description;
  public FailureResource $failure_resource;
}

class Period {
}

class PutAnomalyDetectorInput {
  public AnomalyDetectorConfiguration $configuration;
  public Dimensions $dimensions;
  public MetricName $metric_name;
  public Namespace $namespace;
  public AnomalyDetectorMetricStat $stat;
}

class PutAnomalyDetectorOutput {
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
}

class PutDashboardInput {
  public DashboardBody $dashboard_body;
  public DashboardName $dashboard_name;
}

class PutDashboardOutput {
  public DashboardValidationMessages $dashboard_validation_messages;
}

class PutInsightRuleInput {
  public InsightRuleDefinition $rule_definition;
  public InsightRuleName $rule_name;
  public InsightRuleState $rule_state;
  public TagList $tags;
}

class PutInsightRuleOutput {
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
}

class PutMetricDataInput {
  public MetricData $metric_data;
  public Namespace $namespace;
}

class Range {
  public Timestamp $end_time;
  public Timestamp $start_time;
}

class ResourceId {
}

class ResourceList {
}

class ResourceName {
}

class ResourceNotFound {
  public ErrorMessage $message;
}

class ResourceNotFoundException {
  public ResourceId $resource_id;
  public ResourceType $resource_type;
}

class ResourceType {
}

class ReturnData {
}

class ScanBy {
}

class SetAlarmStateInput {
  public AlarmName $alarm_name;
  public StateReason $state_reason;
  public StateReasonData $state_reason_data;
  public StateValue $state_value;
}

class Size {
}

class StandardUnit {
}

class Stat {
}

class StateReason {
}

class StateReasonData {
}

class StateValue {
}

class Statistic {
}

class StatisticSet {
  public DatapointValue $maximum;
  public DatapointValue $minimum;
  public DatapointValue $sample_count;
  public DatapointValue $sum;
}

class Statistics {
}

class StatusCode {
}

class StorageResolution {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagResourceInput {
  public AmazonResourceName $resource_arn;
  public TagList $tags;
}

class TagResourceOutput {
}

class TagValue {
}

class Threshold {
}

class Timestamp {
}

class Timestamps {
}

class TreatMissingData {
}

class UntagResourceInput {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceOutput {
}

class Values {
}


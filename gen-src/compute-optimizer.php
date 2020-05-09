<?hh // strict
namespace slack\aws\compute-optimizer;

interface Compute Optimizer {
  public function GetAutoScalingGroupRecommendations(GetAutoScalingGroupRecommendationsRequest): Awaitable<Errors\Result<GetAutoScalingGroupRecommendationsResponse>>;
  public function GetEC2InstanceRecommendations(GetEC2InstanceRecommendationsRequest): Awaitable<Errors\Result<GetEC2InstanceRecommendationsResponse>>;
  public function GetEC2RecommendationProjectedMetrics(GetEC2RecommendationProjectedMetricsRequest): Awaitable<Errors\Result<GetEC2RecommendationProjectedMetricsResponse>>;
  public function GetEnrollmentStatus(GetEnrollmentStatusRequest): Awaitable<Errors\Result<GetEnrollmentStatusResponse>>;
  public function GetRecommendationSummaries(GetRecommendationSummariesRequest): Awaitable<Errors\Result<GetRecommendationSummariesResponse>>;
  public function UpdateEnrollmentStatus(UpdateEnrollmentStatusRequest): Awaitable<Errors\Result<UpdateEnrollmentStatusResponse>>;
}

class AccessDeniedException {
  public ErrorMessage $message;
}

class AccountId {
}

class AccountIds {
}

class AutoScalingGroupArn {
}

class AutoScalingGroupArns {
}

class AutoScalingGroupConfiguration {
  public DesiredCapacity $desired_capacity;
  public InstanceType $instance_type;
  public MaxSize $max_size;
  public MinSize $min_size;
}

class AutoScalingGroupName {
}

class AutoScalingGroupRecommendation {
  public AccountId $account_id;
  public AutoScalingGroupArn $auto_scaling_group_arn;
  public AutoScalingGroupName $auto_scaling_group_name;
  public AutoScalingGroupConfiguration $current_configuration;
  public Finding $finding;
  public LastRefreshTimestamp $last_refresh_timestamp;
  public LookBackPeriodInDays $look_back_period_in_days;
  public AutoScalingGroupRecommendationOptions $recommendation_options;
  public UtilizationMetrics $utilization_metrics;
}

class AutoScalingGroupRecommendationOption {
  public AutoScalingGroupConfiguration $configuration;
  public PerformanceRisk $performance_risk;
  public ProjectedUtilizationMetrics $projected_utilization_metrics;
  public Rank $rank;
}

class AutoScalingGroupRecommendationOptions {
}

class AutoScalingGroupRecommendations {
}

class Code {
}

class CurrentInstanceType {
}

class DesiredCapacity {
}

class ErrorMessage {
}

class Filter {
  public FilterName $name;
  public FilterValues $values;
}

class FilterName {
}

class FilterValue {
}

class FilterValues {
}

class Filters {
}

class Finding {
}

class GetAutoScalingGroupRecommendationsRequest {
  public AccountIds $account_ids;
  public AutoScalingGroupArns $auto_scaling_group_arns;
  public Filters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class GetAutoScalingGroupRecommendationsResponse {
  public AutoScalingGroupRecommendations $auto_scaling_group_recommendations;
  public GetRecommendationErrors $errors;
  public NextToken $next_token;
}

class GetEC2InstanceRecommendationsRequest {
  public AccountIds $account_ids;
  public Filters $filters;
  public InstanceArns $instance_arns;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class GetEC2InstanceRecommendationsResponse {
  public GetRecommendationErrors $errors;
  public InstanceRecommendations $instance_recommendations;
  public NextToken $next_token;
}

class GetEC2RecommendationProjectedMetricsRequest {
  public Timestamp $end_time;
  public InstanceArn $instance_arn;
  public Period $period;
  public Timestamp $start_time;
  public MetricStatistic $stat;
}

class GetEC2RecommendationProjectedMetricsResponse {
  public RecommendedOptionProjectedMetrics $recommended_option_projected_metrics;
}

class GetEnrollmentStatusRequest {
}

class GetEnrollmentStatusResponse {
  public MemberAccountsEnrolled $member_accounts_enrolled;
  public Status $status;
  public StatusReason $status_reason;
}

class GetRecommendationError {
  public Code $code;
  public Identifier $identifier;
  public Message $message;
}

class GetRecommendationErrors {
}

class GetRecommendationSummariesRequest {
  public AccountIds $account_ids;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class GetRecommendationSummariesResponse {
  public NextToken $next_token;
  public RecommendationSummaries $recommendation_summaries;
}

class Identifier {
}

class IncludeMemberAccounts {
}

class InstanceArn {
}

class InstanceArns {
}

class InstanceName {
}

class InstanceRecommendation {
  public AccountId $account_id;
  public CurrentInstanceType $current_instance_type;
  public Finding $finding;
  public InstanceArn $instance_arn;
  public InstanceName $instance_name;
  public LastRefreshTimestamp $last_refresh_timestamp;
  public LookBackPeriodInDays $look_back_period_in_days;
  public RecommendationOptions $recommendation_options;
  public RecommendationSources $recommendation_sources;
  public UtilizationMetrics $utilization_metrics;
}

class InstanceRecommendationOption {
  public InstanceType $instance_type;
  public PerformanceRisk $performance_risk;
  public ProjectedUtilizationMetrics $projected_utilization_metrics;
  public Rank $rank;
}

class InstanceRecommendations {
}

class InstanceType {
}

class InternalServerException {
  public ErrorMessage $message;
}

class InvalidParameterValueException {
  public ErrorMessage $message;
}

class LastRefreshTimestamp {
}

class LookBackPeriodInDays {
}

class MaxResults {
}

class MaxSize {
}

class MemberAccountsEnrolled {
}

class Message {
}

class MetricName {
}

class MetricStatistic {
}

class MetricValue {
}

class MetricValues {
}

class MinSize {
}

class MissingAuthenticationToken {
  public ErrorMessage $message;
}

class NextToken {
}

class OptInRequiredException {
  public ErrorMessage $message;
}

class PerformanceRisk {
}

class Period {
}

class ProjectedMetric {
  public MetricName $name;
  public Timestamps $timestamps;
  public MetricValues $values;
}

class ProjectedMetrics {
}

class ProjectedUtilizationMetrics {
}

class Rank {
}

class RecommendationOptions {
}

class RecommendationSource {
  public RecommendationSourceArn $recommendation_source_arn;
  public RecommendationSourceType $recommendation_source_type;
}

class RecommendationSourceArn {
}

class RecommendationSourceType {
}

class RecommendationSources {
}

class RecommendationSummaries {
}

class RecommendationSummary {
  public AccountId $account_id;
  public RecommendationSourceType $recommendation_resource_type;
  public Summaries $summaries;
}

class RecommendedInstanceType {
}

class RecommendedOptionProjectedMetric {
  public ProjectedMetrics $projected_metrics;
  public Rank $rank;
  public RecommendedInstanceType $recommended_instance_type;
}

class RecommendedOptionProjectedMetrics {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class ServiceUnavailableException {
  public ErrorMessage $message;
}

class Status {
}

class StatusReason {
}

class Summaries {
}

class Summary {
  public Finding $name;
  public SummaryValue $value;
}

class SummaryValue {
}

class ThrottlingException {
  public ErrorMessage $message;
}

class Timestamp {
}

class Timestamps {
}

class UpdateEnrollmentStatusRequest {
  public IncludeMemberAccounts $include_member_accounts;
  public Status $status;
}

class UpdateEnrollmentStatusResponse {
  public Status $status;
  public StatusReason $status_reason;
}

class UtilizationMetric {
  public MetricName $name;
  public MetricStatistic $statistic;
  public MetricValue $value;
}

class UtilizationMetrics {
}


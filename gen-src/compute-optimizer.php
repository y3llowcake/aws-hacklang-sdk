<?hh // strict
namespace slack\aws\compute-optimizer;

interface Compute Optimizer {
  public function UpdateEnrollmentStatus(UpdateEnrollmentStatusRequest) Awaitable<Errors\Result<UpdateEnrollmentStatusResponse>>;
  public function GetAutoScalingGroupRecommendations(GetAutoScalingGroupRecommendationsRequest) Awaitable<Errors\Result<GetAutoScalingGroupRecommendationsResponse>>;
  public function GetEC2InstanceRecommendations(GetEC2InstanceRecommendationsRequest) Awaitable<Errors\Result<GetEC2InstanceRecommendationsResponse>>;
  public function GetEC2RecommendationProjectedMetrics(GetEC2RecommendationProjectedMetricsRequest) Awaitable<Errors\Result<GetEC2RecommendationProjectedMetricsResponse>>;
  public function GetEnrollmentStatus(GetEnrollmentStatusRequest) Awaitable<Errors\Result<GetEnrollmentStatusResponse>>;
  public function GetRecommendationSummaries(GetRecommendationSummariesRequest) Awaitable<Errors\Result<GetRecommendationSummariesResponse>>;
}

class AutoScalingGroupRecommendation {
  public AutoScalingGroupConfiguration $current_configuration;
  public LastRefreshTimestamp $last_refresh_timestamp;
  public AccountId $account_id;
  public AutoScalingGroupArn $auto_scaling_group_arn;
  public LookBackPeriodInDays $look_back_period_in_days;
  public AutoScalingGroupRecommendationOptions $recommendation_options;
  public AutoScalingGroupName $auto_scaling_group_name;
  public Finding $finding;
  public UtilizationMetrics $utilization_metrics;
}

class GetRecommendationErrors {
}

class IncludeMemberAccounts {
}

class InvalidParameterValueException {
  public ErrorMessage $message;
}

class LastRefreshTimestamp {
}

class Message {
}

class RecommendationSource {
  public RecommendationSourceArn $recommendation_source_arn;
  public RecommendationSourceType $recommendation_source_type;
}

class RecommendedOptionProjectedMetrics {
}

class GetEC2InstanceRecommendationsRequest {
  public InstanceArns $instance_arns;
  public NextToken $next_token;
  public MaxResults $max_results;
  public Filters $filters;
  public AccountIds $account_ids;
}

class ProjectedMetric {
  public MetricValues $values;
  public MetricName $name;
  public Timestamps $timestamps;
}

class UpdateEnrollmentStatusRequest {
  public Status $status;
  public IncludeMemberAccounts $include_member_accounts;
}

class AutoScalingGroupRecommendationOptions {
}

class Code {
}

class GetEC2RecommendationProjectedMetricsRequest {
  public InstanceArn $instance_arn;
  public MetricStatistic $stat;
  public Period $period;
  public Timestamp $start_time;
  public Timestamp $end_time;
}

class GetEnrollmentStatusResponse {
  public Status $status;
  public StatusReason $status_reason;
  public MemberAccountsEnrolled $member_accounts_enrolled;
}

class MaxSize {
}

class OptInRequiredException {
  public ErrorMessage $message;
}

class RecommendationSummaries {
}

class UtilizationMetric {
  public MetricName $name;
  public MetricStatistic $statistic;
  public MetricValue $value;
}

class AccountId {
}

class GetRecommendationError {
  public Identifier $identifier;
  public Code $code;
  public Message $message;
}

class Summary {
  public Finding $name;
  public SummaryValue $value;
}

class FilterValues {
}

class GetEC2InstanceRecommendationsResponse {
  public NextToken $next_token;
  public InstanceRecommendations $instance_recommendations;
  public GetRecommendationErrors $errors;
}

class GetRecommendationSummariesRequest {
  public AccountIds $account_ids;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class InstanceName {
}

class InstanceRecommendationOption {
  public InstanceType $instance_type;
  public ProjectedUtilizationMetrics $projected_utilization_metrics;
  public PerformanceRisk $performance_risk;
  public Rank $rank;
}

class LookBackPeriodInDays {
}

class MissingAuthenticationToken {
  public ErrorMessage $message;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class AutoScalingGroupArn {
}

class AutoScalingGroupArns {
}

class AutoScalingGroupRecommendations {
}

class InstanceArn {
}

class Summaries {
}

class FilterValue {
}

class Finding {
}

class Period {
}

class AccountIds {
}

class InstanceRecommendation {
  public Finding $finding;
  public UtilizationMetrics $utilization_metrics;
  public LookBackPeriodInDays $look_back_period_in_days;
  public LastRefreshTimestamp $last_refresh_timestamp;
  public RecommendationSources $recommendation_sources;
  public InstanceArn $instance_arn;
  public AccountId $account_id;
  public InstanceName $instance_name;
  public CurrentInstanceType $current_instance_type;
  public RecommendationOptions $recommendation_options;
}

class InternalServerException {
  public ErrorMessage $message;
}

class RecommendedInstanceType {
}

class ErrorMessage {
}

class GetEnrollmentStatusRequest {
}

class MemberAccountsEnrolled {
}

class StatusReason {
}

class ThrottlingException {
  public ErrorMessage $message;
}

class UpdateEnrollmentStatusResponse {
  public Status $status;
  public StatusReason $status_reason;
}

class AutoScalingGroupName {
}

class FilterName {
}

class Identifier {
}

class InstanceRecommendations {
}

class MetricStatistic {
}

class MetricValues {
}

class Rank {
}

class Status {
}

class SummaryValue {
}

class Timestamp {
}

class GetAutoScalingGroupRecommendationsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
  public Filters $filters;
  public AccountIds $account_ids;
  public AutoScalingGroupArns $auto_scaling_group_arns;
}

class RecommendationSummary {
  public AccountId $account_id;
  public Summaries $summaries;
  public RecommendationSourceType $recommendation_resource_type;
}

class AccessDeniedException {
  public ErrorMessage $message;
}

class DesiredCapacity {
}

class Filters {
}

class InstanceType {
}

class MaxResults {
}

class PerformanceRisk {
}

class ProjectedUtilizationMetrics {
}

class RecommendationSources {
}

class Timestamps {
}

class GetRecommendationSummariesResponse {
  public NextToken $next_token;
  public RecommendationSummaries $recommendation_summaries;
}

class MetricName {
}

class RecommendationSourceType {
}

class Filter {
  public FilterName $name;
  public FilterValues $values;
}

class GetAutoScalingGroupRecommendationsResponse {
  public NextToken $next_token;
  public AutoScalingGroupRecommendations $auto_scaling_group_recommendations;
  public GetRecommendationErrors $errors;
}

class MinSize {
}

class RecommendationOptions {
}

class ServiceUnavailableException {
  public ErrorMessage $message;
}

class AutoScalingGroupConfiguration {
  public DesiredCapacity $desired_capacity;
  public MinSize $min_size;
  public MaxSize $max_size;
  public InstanceType $instance_type;
}

class GetEC2RecommendationProjectedMetricsResponse {
  public RecommendedOptionProjectedMetrics $recommended_option_projected_metrics;
}

class InstanceArns {
}

class RecommendedOptionProjectedMetric {
  public RecommendedInstanceType $recommended_instance_type;
  public Rank $rank;
  public ProjectedMetrics $projected_metrics;
}

class AutoScalingGroupRecommendationOption {
  public AutoScalingGroupConfiguration $configuration;
  public ProjectedUtilizationMetrics $projected_utilization_metrics;
  public PerformanceRisk $performance_risk;
  public Rank $rank;
}

class CurrentInstanceType {
}

class MetricValue {
}

class NextToken {
}

class ProjectedMetrics {
}

class RecommendationSourceArn {
}

class UtilizationMetrics {
}


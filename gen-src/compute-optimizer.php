<?hh // strict
namespace slack\aws\compute-optimizer;

interface ComputeOptimizer {
  public function GetAutoScalingGroupRecommendations(GetAutoScalingGroupRecommendationsRequest $in): Awaitable<\Errors\Result<GetAutoScalingGroupRecommendationsResponse>>;
  public function GetEC2InstanceRecommendations(GetEC2InstanceRecommendationsRequest $in): Awaitable<\Errors\Result<GetEC2InstanceRecommendationsResponse>>;
  public function GetEC2RecommendationProjectedMetrics(GetEC2RecommendationProjectedMetricsRequest $in): Awaitable<\Errors\Result<GetEC2RecommendationProjectedMetricsResponse>>;
  public function GetEnrollmentStatus(GetEnrollmentStatusRequest $in): Awaitable<\Errors\Result<GetEnrollmentStatusResponse>>;
  public function GetRecommendationSummaries(GetRecommendationSummariesRequest $in): Awaitable<\Errors\Result<GetRecommendationSummariesResponse>>;
  public function UpdateEnrollmentStatus(UpdateEnrollmentStatusRequest $in): Awaitable<\Errors\Result<UpdateEnrollmentStatusResponse>>;
}

class AccessDeniedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type AccountId = string;

type AccountIds = vec<AccountId>;

type AutoScalingGroupArn = string;

type AutoScalingGroupArns = vec<AutoScalingGroupArn>;

class AutoScalingGroupConfiguration {
  public ?DesiredCapacity $desired_capacity;
  public ?InstanceType $instance_type;
  public ?MaxSize $max_size;
  public ?MinSize $min_size;

  public function __construct(shape(
    ?'desired_capacity' => ?DesiredCapacity,
    ?'instance_type' => ?InstanceType,
    ?'max_size' => ?MaxSize,
    ?'min_size' => ?MinSize,
  ) $s = shape()) {
    $this->desired_capacity = $s['desired_capacity'] ?? 0;
    $this->instance_type = $s['instance_type'] ?? '';
    $this->max_size = $s['max_size'] ?? 0;
    $this->min_size = $s['min_size'] ?? 0;
  }
}

type AutoScalingGroupName = string;

class AutoScalingGroupRecommendation {
  public ?AccountId $account_id;
  public ?AutoScalingGroupArn $auto_scaling_group_arn;
  public ?AutoScalingGroupName $auto_scaling_group_name;
  public ?AutoScalingGroupConfiguration $current_configuration;
  public ?Finding $finding;
  public ?LastRefreshTimestamp $last_refresh_timestamp;
  public ?LookBackPeriodInDays $look_back_period_in_days;
  public ?AutoScalingGroupRecommendationOptions $recommendation_options;
  public ?UtilizationMetrics $utilization_metrics;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'auto_scaling_group_arn' => ?AutoScalingGroupArn,
    ?'auto_scaling_group_name' => ?AutoScalingGroupName,
    ?'current_configuration' => ?AutoScalingGroupConfiguration,
    ?'finding' => ?Finding,
    ?'last_refresh_timestamp' => ?LastRefreshTimestamp,
    ?'look_back_period_in_days' => ?LookBackPeriodInDays,
    ?'recommendation_options' => ?AutoScalingGroupRecommendationOptions,
    ?'utilization_metrics' => ?UtilizationMetrics,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->auto_scaling_group_arn = $s['auto_scaling_group_arn'] ?? '';
    $this->auto_scaling_group_name = $s['auto_scaling_group_name'] ?? '';
    $this->current_configuration = $s['current_configuration'] ?? null;
    $this->finding = $s['finding'] ?? '';
    $this->last_refresh_timestamp = $s['last_refresh_timestamp'] ?? 0;
    $this->look_back_period_in_days = $s['look_back_period_in_days'] ?? 0.0;
    $this->recommendation_options = $s['recommendation_options'] ?? vec[];
    $this->utilization_metrics = $s['utilization_metrics'] ?? vec[];
  }
}

class AutoScalingGroupRecommendationOption {
  public ?AutoScalingGroupConfiguration $configuration;
  public ?PerformanceRisk $performance_risk;
  public ?ProjectedUtilizationMetrics $projected_utilization_metrics;
  public ?Rank $rank;

  public function __construct(shape(
    ?'configuration' => ?AutoScalingGroupConfiguration,
    ?'performance_risk' => ?PerformanceRisk,
    ?'projected_utilization_metrics' => ?ProjectedUtilizationMetrics,
    ?'rank' => ?Rank,
  ) $s = shape()) {
    $this->configuration = $s['configuration'] ?? null;
    $this->performance_risk = $s['performance_risk'] ?? 0.0;
    $this->projected_utilization_metrics = $s['projected_utilization_metrics'] ?? vec[];
    $this->rank = $s['rank'] ?? 0;
  }
}

type AutoScalingGroupRecommendationOptions = vec<AutoScalingGroupRecommendationOption>;

type AutoScalingGroupRecommendations = vec<AutoScalingGroupRecommendation>;

type Code = string;

type CurrentInstanceType = string;

type DesiredCapacity = int;

type ErrorMessage = string;

class Filter {
  public ?FilterName $name;
  public ?FilterValues $values;

  public function __construct(shape(
    ?'name' => ?FilterName,
    ?'values' => ?FilterValues,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type FilterName = string;

type FilterValue = string;

type FilterValues = vec<FilterValue>;

type Filters = vec<Filter>;

type Finding = string;

class GetAutoScalingGroupRecommendationsRequest {
  public ?AccountIds $account_ids;
  public ?AutoScalingGroupArns $auto_scaling_group_arns;
  public ?Filters $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'account_ids' => ?AccountIds,
    ?'auto_scaling_group_arns' => ?AutoScalingGroupArns,
    ?'filters' => ?Filters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
    $this->auto_scaling_group_arns = $s['auto_scaling_group_arns'] ?? vec[];
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetAutoScalingGroupRecommendationsResponse {
  public ?AutoScalingGroupRecommendations $auto_scaling_group_recommendations;
  public ?GetRecommendationErrors $errors;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'auto_scaling_group_recommendations' => ?AutoScalingGroupRecommendations,
    ?'errors' => ?GetRecommendationErrors,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->auto_scaling_group_recommendations = $s['auto_scaling_group_recommendations'] ?? vec[];
    $this->errors = $s['errors'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetEC2InstanceRecommendationsRequest {
  public ?AccountIds $account_ids;
  public ?Filters $filters;
  public ?InstanceArns $instance_arns;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'account_ids' => ?AccountIds,
    ?'filters' => ?Filters,
    ?'instance_arns' => ?InstanceArns,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
    $this->filters = $s['filters'] ?? vec[];
    $this->instance_arns = $s['instance_arns'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetEC2InstanceRecommendationsResponse {
  public ?GetRecommendationErrors $errors;
  public ?InstanceRecommendations $instance_recommendations;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'errors' => ?GetRecommendationErrors,
    ?'instance_recommendations' => ?InstanceRecommendations,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->errors = $s['errors'] ?? vec[];
    $this->instance_recommendations = $s['instance_recommendations'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetEC2RecommendationProjectedMetricsRequest {
  public ?Timestamp $end_time;
  public ?InstanceArn $instance_arn;
  public ?Period $period;
  public ?Timestamp $start_time;
  public ?MetricStatistic $stat;

  public function __construct(shape(
    ?'end_time' => ?Timestamp,
    ?'instance_arn' => ?InstanceArn,
    ?'period' => ?Period,
    ?'start_time' => ?Timestamp,
    ?'stat' => ?MetricStatistic,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->instance_arn = $s['instance_arn'] ?? '';
    $this->period = $s['period'] ?? 0;
    $this->start_time = $s['start_time'] ?? 0;
    $this->stat = $s['stat'] ?? '';
  }
}

class GetEC2RecommendationProjectedMetricsResponse {
  public ?RecommendedOptionProjectedMetrics $recommended_option_projected_metrics;

  public function __construct(shape(
    ?'recommended_option_projected_metrics' => ?RecommendedOptionProjectedMetrics,
  ) $s = shape()) {
    $this->recommended_option_projected_metrics = $s['recommended_option_projected_metrics'] ?? vec[];
  }
}

class GetEnrollmentStatusRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetEnrollmentStatusResponse {
  public ?MemberAccountsEnrolled $member_accounts_enrolled;
  public ?Status $status;
  public ?StatusReason $status_reason;

  public function __construct(shape(
    ?'member_accounts_enrolled' => ?MemberAccountsEnrolled,
    ?'status' => ?Status,
    ?'status_reason' => ?StatusReason,
  ) $s = shape()) {
    $this->member_accounts_enrolled = $s['member_accounts_enrolled'] ?? false;
    $this->status = $s['status'] ?? '';
    $this->status_reason = $s['status_reason'] ?? '';
  }
}

class GetRecommendationError {
  public ?Code $code;
  public ?Identifier $identifier;
  public ?Message $message;

  public function __construct(shape(
    ?'code' => ?Code,
    ?'identifier' => ?Identifier,
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->identifier = $s['identifier'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type GetRecommendationErrors = vec<GetRecommendationError>;

class GetRecommendationSummariesRequest {
  public ?AccountIds $account_ids;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'account_ids' => ?AccountIds,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetRecommendationSummariesResponse {
  public ?NextToken $next_token;
  public ?RecommendationSummaries $recommendation_summaries;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'recommendation_summaries' => ?RecommendationSummaries,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->recommendation_summaries = $s['recommendation_summaries'] ?? vec[];
  }
}

type Identifier = string;

type IncludeMemberAccounts = bool;

type InstanceArn = string;

type InstanceArns = vec<InstanceArn>;

type InstanceName = string;

class InstanceRecommendation {
  public ?AccountId $account_id;
  public ?CurrentInstanceType $current_instance_type;
  public ?Finding $finding;
  public ?InstanceArn $instance_arn;
  public ?InstanceName $instance_name;
  public ?LastRefreshTimestamp $last_refresh_timestamp;
  public ?LookBackPeriodInDays $look_back_period_in_days;
  public ?RecommendationOptions $recommendation_options;
  public ?RecommendationSources $recommendation_sources;
  public ?UtilizationMetrics $utilization_metrics;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'current_instance_type' => ?CurrentInstanceType,
    ?'finding' => ?Finding,
    ?'instance_arn' => ?InstanceArn,
    ?'instance_name' => ?InstanceName,
    ?'last_refresh_timestamp' => ?LastRefreshTimestamp,
    ?'look_back_period_in_days' => ?LookBackPeriodInDays,
    ?'recommendation_options' => ?RecommendationOptions,
    ?'recommendation_sources' => ?RecommendationSources,
    ?'utilization_metrics' => ?UtilizationMetrics,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->current_instance_type = $s['current_instance_type'] ?? '';
    $this->finding = $s['finding'] ?? '';
    $this->instance_arn = $s['instance_arn'] ?? '';
    $this->instance_name = $s['instance_name'] ?? '';
    $this->last_refresh_timestamp = $s['last_refresh_timestamp'] ?? 0;
    $this->look_back_period_in_days = $s['look_back_period_in_days'] ?? 0.0;
    $this->recommendation_options = $s['recommendation_options'] ?? vec[];
    $this->recommendation_sources = $s['recommendation_sources'] ?? vec[];
    $this->utilization_metrics = $s['utilization_metrics'] ?? vec[];
  }
}

class InstanceRecommendationOption {
  public ?InstanceType $instance_type;
  public ?PerformanceRisk $performance_risk;
  public ?ProjectedUtilizationMetrics $projected_utilization_metrics;
  public ?Rank $rank;

  public function __construct(shape(
    ?'instance_type' => ?InstanceType,
    ?'performance_risk' => ?PerformanceRisk,
    ?'projected_utilization_metrics' => ?ProjectedUtilizationMetrics,
    ?'rank' => ?Rank,
  ) $s = shape()) {
    $this->instance_type = $s['instance_type'] ?? '';
    $this->performance_risk = $s['performance_risk'] ?? 0.0;
    $this->projected_utilization_metrics = $s['projected_utilization_metrics'] ?? vec[];
    $this->rank = $s['rank'] ?? 0;
  }
}

type InstanceRecommendations = vec<InstanceRecommendation>;

type InstanceType = string;

class InternalServerException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterValueException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type LastRefreshTimestamp = int;

type LookBackPeriodInDays = float;

type MaxResults = int;

type MaxSize = int;

type MemberAccountsEnrolled = bool;

type Message = string;

type MetricName = string;

type MetricStatistic = string;

type MetricValue = float;

type MetricValues = vec<MetricValue>;

type MinSize = int;

class MissingAuthenticationToken {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type NextToken = string;

class OptInRequiredException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PerformanceRisk = float;

type Period = int;

class ProjectedMetric {
  public ?MetricName $name;
  public ?Timestamps $timestamps;
  public ?MetricValues $values;

  public function __construct(shape(
    ?'name' => ?MetricName,
    ?'timestamps' => ?Timestamps,
    ?'values' => ?MetricValues,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->timestamps = $s['timestamps'] ?? vec[];
    $this->values = $s['values'] ?? vec[];
  }
}

type ProjectedMetrics = vec<ProjectedMetric>;

type ProjectedUtilizationMetrics = vec<UtilizationMetric>;

type Rank = int;

type RecommendationOptions = vec<InstanceRecommendationOption>;

class RecommendationSource {
  public ?RecommendationSourceArn $recommendation_source_arn;
  public ?RecommendationSourceType $recommendation_source_type;

  public function __construct(shape(
    ?'recommendation_source_arn' => ?RecommendationSourceArn,
    ?'recommendation_source_type' => ?RecommendationSourceType,
  ) $s = shape()) {
    $this->recommendation_source_arn = $s['recommendation_source_arn'] ?? '';
    $this->recommendation_source_type = $s['recommendation_source_type'] ?? '';
  }
}

type RecommendationSourceArn = string;

type RecommendationSourceType = string;

type RecommendationSources = vec<RecommendationSource>;

type RecommendationSummaries = vec<RecommendationSummary>;

class RecommendationSummary {
  public ?AccountId $account_id;
  public ?RecommendationSourceType $recommendation_resource_type;
  public ?Summaries $summaries;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'recommendation_resource_type' => ?RecommendationSourceType,
    ?'summaries' => ?Summaries,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->recommendation_resource_type = $s['recommendation_resource_type'] ?? '';
    $this->summaries = $s['summaries'] ?? vec[];
  }
}

type RecommendedInstanceType = string;

class RecommendedOptionProjectedMetric {
  public ?ProjectedMetrics $projected_metrics;
  public ?Rank $rank;
  public ?RecommendedInstanceType $recommended_instance_type;

  public function __construct(shape(
    ?'projected_metrics' => ?ProjectedMetrics,
    ?'rank' => ?Rank,
    ?'recommended_instance_type' => ?RecommendedInstanceType,
  ) $s = shape()) {
    $this->projected_metrics = $s['projected_metrics'] ?? vec[];
    $this->rank = $s['rank'] ?? 0;
    $this->recommended_instance_type = $s['recommended_instance_type'] ?? '';
  }
}

type RecommendedOptionProjectedMetrics = vec<RecommendedOptionProjectedMetric>;

class ResourceNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ServiceUnavailableException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Status = string;

type StatusReason = string;

type Summaries = vec<Summary>;

class Summary {
  public ?Finding $name;
  public ?SummaryValue $value;

  public function __construct(shape(
    ?'name' => ?Finding,
    ?'value' => ?SummaryValue,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? 0.0;
  }
}

type SummaryValue = float;

class ThrottlingException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Timestamp = int;

type Timestamps = vec<Timestamp>;

class UpdateEnrollmentStatusRequest {
  public ?IncludeMemberAccounts $include_member_accounts;
  public ?Status $status;

  public function __construct(shape(
    ?'include_member_accounts' => ?IncludeMemberAccounts,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->include_member_accounts = $s['include_member_accounts'] ?? false;
    $this->status = $s['status'] ?? '';
  }
}

class UpdateEnrollmentStatusResponse {
  public ?Status $status;
  public ?StatusReason $status_reason;

  public function __construct(shape(
    ?'status' => ?Status,
    ?'status_reason' => ?StatusReason,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
    $this->status_reason = $s['status_reason'] ?? '';
  }
}

class UtilizationMetric {
  public ?MetricName $name;
  public ?MetricStatistic $statistic;
  public ?MetricValue $value;

  public function __construct(shape(
    ?'name' => ?MetricName,
    ?'statistic' => ?MetricStatistic,
    ?'value' => ?MetricValue,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->statistic = $s['statistic'] ?? '';
    $this->value = $s['value'] ?? 0.0;
  }
}

type UtilizationMetrics = vec<UtilizationMetric>;


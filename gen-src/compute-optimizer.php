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

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type AccountId = string;

type AccountIds = vec<AccountId>;

type AutoScalingGroupArn = string;

type AutoScalingGroupArns = vec<AutoScalingGroupArn>;

class AutoScalingGroupConfiguration {
  public DesiredCapacity $desired_capacity;
  public InstanceType $instance_type;
  public MaxSize $max_size;
  public MinSize $min_size;

  public function __construct(shape(
  ?'desired_capacity' => DesiredCapacity,
  ?'instance_type' => InstanceType,
  ?'max_size' => MaxSize,
  ?'min_size' => MinSize,
  ) $s = shape()) {
    $this->desired_capacity = $desired_capacity ?? ;
    $this->instance_type = $instance_type ?? ;
    $this->max_size = $max_size ?? ;
    $this->min_size = $min_size ?? ;
  }
}

type AutoScalingGroupName = string;

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

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'auto_scaling_group_arn' => AutoScalingGroupArn,
  ?'auto_scaling_group_name' => AutoScalingGroupName,
  ?'current_configuration' => AutoScalingGroupConfiguration,
  ?'finding' => Finding,
  ?'last_refresh_timestamp' => LastRefreshTimestamp,
  ?'look_back_period_in_days' => LookBackPeriodInDays,
  ?'recommendation_options' => AutoScalingGroupRecommendationOptions,
  ?'utilization_metrics' => UtilizationMetrics,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->auto_scaling_group_arn = $auto_scaling_group_arn ?? ;
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? ;
    $this->current_configuration = $current_configuration ?? ;
    $this->finding = $finding ?? ;
    $this->last_refresh_timestamp = $last_refresh_timestamp ?? ;
    $this->look_back_period_in_days = $look_back_period_in_days ?? ;
    $this->recommendation_options = $recommendation_options ?? ;
    $this->utilization_metrics = $utilization_metrics ?? ;
  }
}

class AutoScalingGroupRecommendationOption {
  public AutoScalingGroupConfiguration $configuration;
  public PerformanceRisk $performance_risk;
  public ProjectedUtilizationMetrics $projected_utilization_metrics;
  public Rank $rank;

  public function __construct(shape(
  ?'configuration' => AutoScalingGroupConfiguration,
  ?'performance_risk' => PerformanceRisk,
  ?'projected_utilization_metrics' => ProjectedUtilizationMetrics,
  ?'rank' => Rank,
  ) $s = shape()) {
    $this->configuration = $configuration ?? ;
    $this->performance_risk = $performance_risk ?? ;
    $this->projected_utilization_metrics = $projected_utilization_metrics ?? ;
    $this->rank = $rank ?? ;
  }
}

type AutoScalingGroupRecommendationOptions = vec<AutoScalingGroupRecommendationOption>;

type AutoScalingGroupRecommendations = vec<AutoScalingGroupRecommendation>;

type Code = string;

type CurrentInstanceType = string;

type DesiredCapacity = int;

type ErrorMessage = string;

class Filter {
  public FilterName $name;
  public FilterValues $values;

  public function __construct(shape(
  ?'name' => FilterName,
  ?'values' => FilterValues,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->values = $values ?? ;
  }
}

type FilterName = string;

type FilterValue = string;

type FilterValues = vec<FilterValue>;

type Filters = vec<Filter>;

type Finding = string;

class GetAutoScalingGroupRecommendationsRequest {
  public AccountIds $account_ids;
  public AutoScalingGroupArns $auto_scaling_group_arns;
  public Filters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'account_ids' => AccountIds,
  ?'auto_scaling_group_arns' => AutoScalingGroupArns,
  ?'filters' => Filters,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->account_ids = $account_ids ?? ;
    $this->auto_scaling_group_arns = $auto_scaling_group_arns ?? ;
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class GetAutoScalingGroupRecommendationsResponse {
  public AutoScalingGroupRecommendations $auto_scaling_group_recommendations;
  public GetRecommendationErrors $errors;
  public NextToken $next_token;

  public function __construct(shape(
  ?'auto_scaling_group_recommendations' => AutoScalingGroupRecommendations,
  ?'errors' => GetRecommendationErrors,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->auto_scaling_group_recommendations = $auto_scaling_group_recommendations ?? ;
    $this->errors = $errors ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class GetEC2InstanceRecommendationsRequest {
  public AccountIds $account_ids;
  public Filters $filters;
  public InstanceArns $instance_arns;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'account_ids' => AccountIds,
  ?'filters' => Filters,
  ?'instance_arns' => InstanceArns,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->account_ids = $account_ids ?? ;
    $this->filters = $filters ?? ;
    $this->instance_arns = $instance_arns ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class GetEC2InstanceRecommendationsResponse {
  public GetRecommendationErrors $errors;
  public InstanceRecommendations $instance_recommendations;
  public NextToken $next_token;

  public function __construct(shape(
  ?'errors' => GetRecommendationErrors,
  ?'instance_recommendations' => InstanceRecommendations,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->errors = $errors ?? ;
    $this->instance_recommendations = $instance_recommendations ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class GetEC2RecommendationProjectedMetricsRequest {
  public Timestamp $end_time;
  public InstanceArn $instance_arn;
  public Period $period;
  public Timestamp $start_time;
  public MetricStatistic $stat;

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'instance_arn' => InstanceArn,
  ?'period' => Period,
  ?'start_time' => Timestamp,
  ?'stat' => MetricStatistic,
  ) $s = shape()) {
    $this->end_time = $end_time ?? ;
    $this->instance_arn = $instance_arn ?? ;
    $this->period = $period ?? ;
    $this->start_time = $start_time ?? ;
    $this->stat = $stat ?? ;
  }
}

class GetEC2RecommendationProjectedMetricsResponse {
  public RecommendedOptionProjectedMetrics $recommended_option_projected_metrics;

  public function __construct(shape(
  ?'recommended_option_projected_metrics' => RecommendedOptionProjectedMetrics,
  ) $s = shape()) {
    $this->recommended_option_projected_metrics = $recommended_option_projected_metrics ?? ;
  }
}

class GetEnrollmentStatusRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetEnrollmentStatusResponse {
  public MemberAccountsEnrolled $member_accounts_enrolled;
  public Status $status;
  public StatusReason $status_reason;

  public function __construct(shape(
  ?'member_accounts_enrolled' => MemberAccountsEnrolled,
  ?'status' => Status,
  ?'status_reason' => StatusReason,
  ) $s = shape()) {
    $this->member_accounts_enrolled = $member_accounts_enrolled ?? ;
    $this->status = $status ?? ;
    $this->status_reason = $status_reason ?? ;
  }
}

class GetRecommendationError {
  public Code $code;
  public Identifier $identifier;
  public Message $message;

  public function __construct(shape(
  ?'code' => Code,
  ?'identifier' => Identifier,
  ?'message' => Message,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->identifier = $identifier ?? ;
    $this->message = $message ?? ;
  }
}

type GetRecommendationErrors = vec<GetRecommendationError>;

class GetRecommendationSummariesRequest {
  public AccountIds $account_ids;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'account_ids' => AccountIds,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->account_ids = $account_ids ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class GetRecommendationSummariesResponse {
  public NextToken $next_token;
  public RecommendationSummaries $recommendation_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'recommendation_summaries' => RecommendationSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->recommendation_summaries = $recommendation_summaries ?? ;
  }
}

type Identifier = string;

type IncludeMemberAccounts = bool;

type InstanceArn = string;

type InstanceArns = vec<InstanceArn>;

type InstanceName = string;

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

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'current_instance_type' => CurrentInstanceType,
  ?'finding' => Finding,
  ?'instance_arn' => InstanceArn,
  ?'instance_name' => InstanceName,
  ?'last_refresh_timestamp' => LastRefreshTimestamp,
  ?'look_back_period_in_days' => LookBackPeriodInDays,
  ?'recommendation_options' => RecommendationOptions,
  ?'recommendation_sources' => RecommendationSources,
  ?'utilization_metrics' => UtilizationMetrics,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->current_instance_type = $current_instance_type ?? ;
    $this->finding = $finding ?? ;
    $this->instance_arn = $instance_arn ?? ;
    $this->instance_name = $instance_name ?? ;
    $this->last_refresh_timestamp = $last_refresh_timestamp ?? ;
    $this->look_back_period_in_days = $look_back_period_in_days ?? ;
    $this->recommendation_options = $recommendation_options ?? ;
    $this->recommendation_sources = $recommendation_sources ?? ;
    $this->utilization_metrics = $utilization_metrics ?? ;
  }
}

class InstanceRecommendationOption {
  public InstanceType $instance_type;
  public PerformanceRisk $performance_risk;
  public ProjectedUtilizationMetrics $projected_utilization_metrics;
  public Rank $rank;

  public function __construct(shape(
  ?'instance_type' => InstanceType,
  ?'performance_risk' => PerformanceRisk,
  ?'projected_utilization_metrics' => ProjectedUtilizationMetrics,
  ?'rank' => Rank,
  ) $s = shape()) {
    $this->instance_type = $instance_type ?? ;
    $this->performance_risk = $performance_risk ?? ;
    $this->projected_utilization_metrics = $projected_utilization_metrics ?? ;
    $this->rank = $rank ?? ;
  }
}

type InstanceRecommendations = vec<InstanceRecommendation>;

type InstanceType = string;

class InternalServerException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidParameterValueException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
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
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type NextToken = string;

class OptInRequiredException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type PerformanceRisk = float;

type Period = int;

class ProjectedMetric {
  public MetricName $name;
  public Timestamps $timestamps;
  public MetricValues $values;

  public function __construct(shape(
  ?'name' => MetricName,
  ?'timestamps' => Timestamps,
  ?'values' => MetricValues,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->timestamps = $timestamps ?? ;
    $this->values = $values ?? ;
  }
}

type ProjectedMetrics = vec<ProjectedMetric>;

type ProjectedUtilizationMetrics = vec<UtilizationMetric>;

type Rank = int;

type RecommendationOptions = vec<InstanceRecommendationOption>;

class RecommendationSource {
  public RecommendationSourceArn $recommendation_source_arn;
  public RecommendationSourceType $recommendation_source_type;

  public function __construct(shape(
  ?'recommendation_source_arn' => RecommendationSourceArn,
  ?'recommendation_source_type' => RecommendationSourceType,
  ) $s = shape()) {
    $this->recommendation_source_arn = $recommendation_source_arn ?? ;
    $this->recommendation_source_type = $recommendation_source_type ?? ;
  }
}

type RecommendationSourceArn = string;

type RecommendationSourceType = string;

type RecommendationSources = vec<RecommendationSource>;

type RecommendationSummaries = vec<RecommendationSummary>;

class RecommendationSummary {
  public AccountId $account_id;
  public RecommendationSourceType $recommendation_resource_type;
  public Summaries $summaries;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'recommendation_resource_type' => RecommendationSourceType,
  ?'summaries' => Summaries,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->recommendation_resource_type = $recommendation_resource_type ?? ;
    $this->summaries = $summaries ?? ;
  }
}

type RecommendedInstanceType = string;

class RecommendedOptionProjectedMetric {
  public ProjectedMetrics $projected_metrics;
  public Rank $rank;
  public RecommendedInstanceType $recommended_instance_type;

  public function __construct(shape(
  ?'projected_metrics' => ProjectedMetrics,
  ?'rank' => Rank,
  ?'recommended_instance_type' => RecommendedInstanceType,
  ) $s = shape()) {
    $this->projected_metrics = $projected_metrics ?? ;
    $this->rank = $rank ?? ;
    $this->recommended_instance_type = $recommended_instance_type ?? ;
  }
}

type RecommendedOptionProjectedMetrics = vec<RecommendedOptionProjectedMetric>;

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ServiceUnavailableException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Status = string;

type StatusReason = string;

type Summaries = vec<Summary>;

class Summary {
  public Finding $name;
  public SummaryValue $value;

  public function __construct(shape(
  ?'name' => Finding,
  ?'value' => SummaryValue,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->value = $value ?? ;
  }
}

type SummaryValue = float;

class ThrottlingException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Timestamp = int;

type Timestamps = vec<Timestamp>;

class UpdateEnrollmentStatusRequest {
  public IncludeMemberAccounts $include_member_accounts;
  public Status $status;

  public function __construct(shape(
  ?'include_member_accounts' => IncludeMemberAccounts,
  ?'status' => Status,
  ) $s = shape()) {
    $this->include_member_accounts = $include_member_accounts ?? ;
    $this->status = $status ?? ;
  }
}

class UpdateEnrollmentStatusResponse {
  public Status $status;
  public StatusReason $status_reason;

  public function __construct(shape(
  ?'status' => Status,
  ?'status_reason' => StatusReason,
  ) $s = shape()) {
    $this->status = $status ?? ;
    $this->status_reason = $status_reason ?? ;
  }
}

class UtilizationMetric {
  public MetricName $name;
  public MetricStatistic $statistic;
  public MetricValue $value;

  public function __construct(shape(
  ?'name' => MetricName,
  ?'statistic' => MetricStatistic,
  ?'value' => MetricValue,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->statistic = $statistic ?? ;
    $this->value = $value ?? ;
  }
}

type UtilizationMetrics = vec<UtilizationMetric>;


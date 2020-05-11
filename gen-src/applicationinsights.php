<?hh // strict
namespace slack\aws\applicationinsights;

interface Application Insights {
  public function CreateApplication(CreateApplicationRequest): Awaitable<Errors\Result<CreateApplicationResponse>>;
  public function CreateComponent(CreateComponentRequest): Awaitable<Errors\Result<CreateComponentResponse>>;
  public function CreateLogPattern(CreateLogPatternRequest): Awaitable<Errors\Result<CreateLogPatternResponse>>;
  public function DeleteApplication(DeleteApplicationRequest): Awaitable<Errors\Result<DeleteApplicationResponse>>;
  public function DeleteComponent(DeleteComponentRequest): Awaitable<Errors\Result<DeleteComponentResponse>>;
  public function DeleteLogPattern(DeleteLogPatternRequest): Awaitable<Errors\Result<DeleteLogPatternResponse>>;
  public function DescribeApplication(DescribeApplicationRequest): Awaitable<Errors\Result<DescribeApplicationResponse>>;
  public function DescribeComponent(DescribeComponentRequest): Awaitable<Errors\Result<DescribeComponentResponse>>;
  public function DescribeComponentConfiguration(DescribeComponentConfigurationRequest): Awaitable<Errors\Result<DescribeComponentConfigurationResponse>>;
  public function DescribeComponentConfigurationRecommendation(DescribeComponentConfigurationRecommendationRequest): Awaitable<Errors\Result<DescribeComponentConfigurationRecommendationResponse>>;
  public function DescribeLogPattern(DescribeLogPatternRequest): Awaitable<Errors\Result<DescribeLogPatternResponse>>;
  public function DescribeObservation(DescribeObservationRequest): Awaitable<Errors\Result<DescribeObservationResponse>>;
  public function DescribeProblem(DescribeProblemRequest): Awaitable<Errors\Result<DescribeProblemResponse>>;
  public function DescribeProblemObservations(DescribeProblemObservationsRequest): Awaitable<Errors\Result<DescribeProblemObservationsResponse>>;
  public function ListApplications(ListApplicationsRequest): Awaitable<Errors\Result<ListApplicationsResponse>>;
  public function ListComponents(ListComponentsRequest): Awaitable<Errors\Result<ListComponentsResponse>>;
  public function ListConfigurationHistory(ListConfigurationHistoryRequest): Awaitable<Errors\Result<ListConfigurationHistoryResponse>>;
  public function ListLogPatternSets(ListLogPatternSetsRequest): Awaitable<Errors\Result<ListLogPatternSetsResponse>>;
  public function ListLogPatterns(ListLogPatternsRequest): Awaitable<Errors\Result<ListLogPatternsResponse>>;
  public function ListProblems(ListProblemsRequest): Awaitable<Errors\Result<ListProblemsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateApplication(UpdateApplicationRequest): Awaitable<Errors\Result<UpdateApplicationResponse>>;
  public function UpdateComponent(UpdateComponentRequest): Awaitable<Errors\Result<UpdateComponentResponse>>;
  public function UpdateComponentConfiguration(UpdateComponentConfigurationRequest): Awaitable<Errors\Result<UpdateComponentConfigurationResponse>>;
  public function UpdateLogPattern(UpdateLogPatternRequest): Awaitable<Errors\Result<UpdateLogPatternResponse>>;
}

type AffectedResource = string;

type AmazonResourceName = string;

class ApplicationComponent {
  public ComponentName $component_name;
  public Monitor $monitor;
  public ResourceType $resource_type;
  public Tier $tier;

  public function __construct(shape(
  ?'component_name' => ComponentName,
  ?'monitor' => Monitor,
  ?'resource_type' => ResourceType,
  ?'tier' => Tier,
  ) $s = shape()) {
    $this->component_name = $component_name ?? "";
    $this->monitor = $monitor ?? false;
    $this->resource_type = $resource_type ?? "";
    $this->tier = $tier ?? "";
  }
}

type ApplicationComponentList = vec<ApplicationComponent>;

class ApplicationInfo {
  public CWEMonitorEnabled $cwe_monitor_enabled;
  public LifeCycle $life_cycle;
  public OpsCenterEnabled $ops_center_enabled;
  public OpsItemSNSTopicArn $ops_item_sns_topic_arn;
  public Remarks $remarks;
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'cwe_monitor_enabled' => CWEMonitorEnabled,
  ?'life_cycle' => LifeCycle,
  ?'ops_center_enabled' => OpsCenterEnabled,
  ?'ops_item_sns_topic_arn' => OpsItemSNSTopicArn,
  ?'remarks' => Remarks,
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->cwe_monitor_enabled = $cwe_monitor_enabled ?? false;
    $this->life_cycle = $life_cycle ?? "";
    $this->ops_center_enabled = $ops_center_enabled ?? false;
    $this->ops_item_sns_topic_arn = $ops_item_sns_topic_arn ?? "";
    $this->remarks = $remarks ?? "";
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

type ApplicationInfoList = vec<ApplicationInfo>;

class BadRequestException {
  public ErrorMsg $message;

  public function __construct(shape(
  ?'message' => ErrorMsg,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type CWEMonitorEnabled = bool;

type CloudWatchEventDetailType = string;

type CloudWatchEventId = string;

type CloudWatchEventSource = string;

type CodeDeployApplication = string;

type CodeDeployDeploymentGroup = string;

type CodeDeployDeploymentId = string;

type CodeDeployInstanceGroupId = string;

type CodeDeployState = string;

type ComponentConfiguration = string;

type ComponentName = string;

class ConfigurationEvent {
  public ConfigurationEventDetail $event_detail;
  public ConfigurationEventResourceName $event_resource_name;
  public ConfigurationEventResourceType $event_resource_type;
  public ConfigurationEventStatus $event_status;
  public ConfigurationEventTime $event_time;
  public ConfigurationEventMonitoredResourceARN $monitored_resource_arn;

  public function __construct(shape(
  ?'event_detail' => ConfigurationEventDetail,
  ?'event_resource_name' => ConfigurationEventResourceName,
  ?'event_resource_type' => ConfigurationEventResourceType,
  ?'event_status' => ConfigurationEventStatus,
  ?'event_time' => ConfigurationEventTime,
  ?'monitored_resource_arn' => ConfigurationEventMonitoredResourceARN,
  ) $s = shape()) {
    $this->event_detail = $event_detail ?? ;
    $this->event_resource_name = $event_resource_name ?? ;
    $this->event_resource_type = $event_resource_type ?? ;
    $this->event_status = $event_status ?? ;
    $this->event_time = $event_time ?? ;
    $this->monitored_resource_arn = $monitored_resource_arn ?? ;
  }
}

type ConfigurationEventDetail = string;

type ConfigurationEventList = vec<ConfigurationEvent>;

type ConfigurationEventMonitoredResourceARN = string;

type ConfigurationEventResourceName = string;

type ConfigurationEventResourceType = string;

type ConfigurationEventStatus = string;

type ConfigurationEventTime = int;

class CreateApplicationRequest {
  public CWEMonitorEnabled $cwe_monitor_enabled;
  public OpsCenterEnabled $ops_center_enabled;
  public OpsItemSNSTopicArn $ops_item_sns_topic_arn;
  public ResourceGroupName $resource_group_name;
  public TagList $tags;

  public function __construct(shape(
  ?'cwe_monitor_enabled' => CWEMonitorEnabled,
  ?'ops_center_enabled' => OpsCenterEnabled,
  ?'ops_item_sns_topic_arn' => OpsItemSNSTopicArn,
  ?'resource_group_name' => ResourceGroupName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->cwe_monitor_enabled = $cwe_monitor_enabled ?? false;
    $this->ops_center_enabled = $ops_center_enabled ?? false;
    $this->ops_item_sns_topic_arn = $ops_item_sns_topic_arn ?? "";
    $this->resource_group_name = $resource_group_name ?? "";
    $this->tags = $tags ?? ;
  }
}

class CreateApplicationResponse {
  public ApplicationInfo $application_info;

  public function __construct(shape(
  ?'application_info' => ApplicationInfo,
  ) $s = shape()) {
    $this->application_info = $application_info ?? null;
  }
}

class CreateComponentRequest {
  public ComponentName $component_name;
  public ResourceGroupName $resource_group_name;
  public ResourceList $resource_list;

  public function __construct(shape(
  ?'component_name' => ComponentName,
  ?'resource_group_name' => ResourceGroupName,
  ?'resource_list' => ResourceList,
  ) $s = shape()) {
    $this->component_name = $component_name ?? "";
    $this->resource_group_name = $resource_group_name ?? "";
    $this->resource_list = $resource_list ?? [];
  }
}

class CreateComponentResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateLogPatternRequest {
  public LogPatternRegex $pattern;
  public LogPatternName $pattern_name;
  public LogPatternSetName $pattern_set_name;
  public LogPatternRank $rank;
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'pattern' => LogPatternRegex,
  ?'pattern_name' => LogPatternName,
  ?'pattern_set_name' => LogPatternSetName,
  ?'rank' => LogPatternRank,
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->pattern = $pattern ?? ;
    $this->pattern_name = $pattern_name ?? ;
    $this->pattern_set_name = $pattern_set_name ?? ;
    $this->rank = $rank ?? ;
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class CreateLogPatternResponse {
  public LogPattern $log_pattern;
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'log_pattern' => LogPattern,
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->log_pattern = $log_pattern ?? null;
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class DeleteApplicationRequest {
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class DeleteApplicationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteComponentRequest {
  public ComponentName $component_name;
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'component_name' => ComponentName,
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->component_name = $component_name ?? "";
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class DeleteComponentResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteLogPatternRequest {
  public LogPatternName $pattern_name;
  public LogPatternSetName $pattern_set_name;
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'pattern_name' => LogPatternName,
  ?'pattern_set_name' => LogPatternSetName,
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->pattern_name = $pattern_name ?? ;
    $this->pattern_set_name = $pattern_set_name ?? ;
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class DeleteLogPatternResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeApplicationRequest {
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class DescribeApplicationResponse {
  public ApplicationInfo $application_info;

  public function __construct(shape(
  ?'application_info' => ApplicationInfo,
  ) $s = shape()) {
    $this->application_info = $application_info ?? null;
  }
}

class DescribeComponentConfigurationRecommendationRequest {
  public ComponentName $component_name;
  public ResourceGroupName $resource_group_name;
  public Tier $tier;

  public function __construct(shape(
  ?'component_name' => ComponentName,
  ?'resource_group_name' => ResourceGroupName,
  ?'tier' => Tier,
  ) $s = shape()) {
    $this->component_name = $component_name ?? "";
    $this->resource_group_name = $resource_group_name ?? "";
    $this->tier = $tier ?? "";
  }
}

class DescribeComponentConfigurationRecommendationResponse {
  public ComponentConfiguration $component_configuration;

  public function __construct(shape(
  ?'component_configuration' => ComponentConfiguration,
  ) $s = shape()) {
    $this->component_configuration = $component_configuration ?? "";
  }
}

class DescribeComponentConfigurationRequest {
  public ComponentName $component_name;
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'component_name' => ComponentName,
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->component_name = $component_name ?? "";
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class DescribeComponentConfigurationResponse {
  public ComponentConfiguration $component_configuration;
  public Monitor $monitor;
  public Tier $tier;

  public function __construct(shape(
  ?'component_configuration' => ComponentConfiguration,
  ?'monitor' => Monitor,
  ?'tier' => Tier,
  ) $s = shape()) {
    $this->component_configuration = $component_configuration ?? "";
    $this->monitor = $monitor ?? false;
    $this->tier = $tier ?? "";
  }
}

class DescribeComponentRequest {
  public ComponentName $component_name;
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'component_name' => ComponentName,
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->component_name = $component_name ?? "";
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class DescribeComponentResponse {
  public ApplicationComponent $application_component;
  public ResourceList $resource_list;

  public function __construct(shape(
  ?'application_component' => ApplicationComponent,
  ?'resource_list' => ResourceList,
  ) $s = shape()) {
    $this->application_component = $application_component ?? null;
    $this->resource_list = $resource_list ?? [];
  }
}

class DescribeLogPatternRequest {
  public LogPatternName $pattern_name;
  public LogPatternSetName $pattern_set_name;
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'pattern_name' => LogPatternName,
  ?'pattern_set_name' => LogPatternSetName,
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->pattern_name = $pattern_name ?? ;
    $this->pattern_set_name = $pattern_set_name ?? ;
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class DescribeLogPatternResponse {
  public LogPattern $log_pattern;
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'log_pattern' => LogPattern,
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->log_pattern = $log_pattern ?? null;
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class DescribeObservationRequest {
  public ObservationId $observation_id;

  public function __construct(shape(
  ?'observation_id' => ObservationId,
  ) $s = shape()) {
    $this->observation_id = $observation_id ?? "";
  }
}

class DescribeObservationResponse {
  public Observation $observation;

  public function __construct(shape(
  ?'observation' => Observation,
  ) $s = shape()) {
    $this->observation = $observation ?? null;
  }
}

class DescribeProblemObservationsRequest {
  public ProblemId $problem_id;

  public function __construct(shape(
  ?'problem_id' => ProblemId,
  ) $s = shape()) {
    $this->problem_id = $problem_id ?? "";
  }
}

class DescribeProblemObservationsResponse {
  public RelatedObservations $related_observations;

  public function __construct(shape(
  ?'related_observations' => RelatedObservations,
  ) $s = shape()) {
    $this->related_observations = $related_observations ?? null;
  }
}

class DescribeProblemRequest {
  public ProblemId $problem_id;

  public function __construct(shape(
  ?'problem_id' => ProblemId,
  ) $s = shape()) {
    $this->problem_id = $problem_id ?? "";
  }
}

class DescribeProblemResponse {
  public Problem $problem;

  public function __construct(shape(
  ?'problem' => Problem,
  ) $s = shape()) {
    $this->problem = $problem ?? null;
  }
}

type Ec2State = string;

type EndTime = int;

type ErrorMsg = string;

type ExceptionMessage = string;

type Feedback = dict<FeedbackKey, FeedbackValue>;

type FeedbackKey = string;

type FeedbackValue = string;

type HealthEventArn = string;

type HealthEventDescription = string;

type HealthEventTypeCategory = string;

type HealthEventTypeCode = string;

type HealthService = string;

type Insights = string;

class InternalServerException {
  public ErrorMsg $message;

  public function __construct(shape(
  ?'message' => ErrorMsg,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type LifeCycle = string;

type LineTime = int;

class ListApplicationsRequest {
  public MaxEntities $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxEntities,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListApplicationsResponse {
  public ApplicationInfoList $application_info_list;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'application_info_list' => ApplicationInfoList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->application_info_list = $application_info_list ?? [];
    $this->next_token = $next_token ?? ;
  }
}

class ListComponentsRequest {
  public MaxEntities $max_results;
  public PaginationToken $next_token;
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'max_results' => MaxEntities,
  ?'next_token' => PaginationToken,
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class ListComponentsResponse {
  public ApplicationComponentList $application_component_list;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'application_component_list' => ApplicationComponentList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->application_component_list = $application_component_list ?? [];
    $this->next_token = $next_token ?? ;
  }
}

class ListConfigurationHistoryRequest {
  public EndTime $end_time;
  public ConfigurationEventStatus $event_status;
  public MaxEntities $max_results;
  public PaginationToken $next_token;
  public ResourceGroupName $resource_group_name;
  public StartTime $start_time;

  public function __construct(shape(
  ?'end_time' => EndTime,
  ?'event_status' => ConfigurationEventStatus,
  ?'max_results' => MaxEntities,
  ?'next_token' => PaginationToken,
  ?'resource_group_name' => ResourceGroupName,
  ?'start_time' => StartTime,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->event_status = $event_status ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->resource_group_name = $resource_group_name ?? "";
    $this->start_time = $start_time ?? 0;
  }
}

class ListConfigurationHistoryResponse {
  public ConfigurationEventList $event_list;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'event_list' => ConfigurationEventList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->event_list = $event_list ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListLogPatternSetsRequest {
  public MaxEntities $max_results;
  public PaginationToken $next_token;
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'max_results' => MaxEntities,
  ?'next_token' => PaginationToken,
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class ListLogPatternSetsResponse {
  public LogPatternSetList $log_pattern_sets;
  public PaginationToken $next_token;
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'log_pattern_sets' => LogPatternSetList,
  ?'next_token' => PaginationToken,
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->log_pattern_sets = $log_pattern_sets ?? ;
    $this->next_token = $next_token ?? ;
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class ListLogPatternsRequest {
  public MaxEntities $max_results;
  public PaginationToken $next_token;
  public LogPatternSetName $pattern_set_name;
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'max_results' => MaxEntities,
  ?'next_token' => PaginationToken,
  ?'pattern_set_name' => LogPatternSetName,
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->pattern_set_name = $pattern_set_name ?? ;
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class ListLogPatternsResponse {
  public LogPatternList $log_patterns;
  public PaginationToken $next_token;
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'log_patterns' => LogPatternList,
  ?'next_token' => PaginationToken,
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->log_patterns = $log_patterns ?? ;
    $this->next_token = $next_token ?? ;
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class ListProblemsRequest {
  public EndTime $end_time;
  public MaxEntities $max_results;
  public PaginationToken $next_token;
  public ResourceGroupName $resource_group_name;
  public StartTime $start_time;

  public function __construct(shape(
  ?'end_time' => EndTime,
  ?'max_results' => MaxEntities,
  ?'next_token' => PaginationToken,
  ?'resource_group_name' => ResourceGroupName,
  ?'start_time' => StartTime,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->resource_group_name = $resource_group_name ?? "";
    $this->start_time = $start_time ?? 0;
  }
}

class ListProblemsResponse {
  public PaginationToken $next_token;
  public ProblemList $problem_list;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'problem_list' => ProblemList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->problem_list = $problem_list ?? [];
  }
}

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
  }
}

type LogFilter = string;

type LogGroup = string;

class LogPattern {
  public LogPatternRegex $pattern;
  public LogPatternName $pattern_name;
  public LogPatternSetName $pattern_set_name;
  public LogPatternRank $rank;

  public function __construct(shape(
  ?'pattern' => LogPatternRegex,
  ?'pattern_name' => LogPatternName,
  ?'pattern_set_name' => LogPatternSetName,
  ?'rank' => LogPatternRank,
  ) $s = shape()) {
    $this->pattern = $pattern ?? ;
    $this->pattern_name = $pattern_name ?? ;
    $this->pattern_set_name = $pattern_set_name ?? ;
    $this->rank = $rank ?? ;
  }
}

type LogPatternList = vec<LogPattern>;

type LogPatternName = string;

type LogPatternRank = int;

type LogPatternRegex = string;

type LogPatternSetList = vec<LogPatternSetName>;

type LogPatternSetName = string;

type LogText = string;

type MaxEntities = int;

type MetricName = string;

type MetricNamespace = string;

type Monitor = bool;

type NewComponentName = string;

class Observation {
  public CloudWatchEventDetailType $cloud_watch_event_detail_type;
  public CloudWatchEventId $cloud_watch_event_id;
  public CloudWatchEventSource $cloud_watch_event_source;
  public CodeDeployApplication $code_deploy_application;
  public CodeDeployDeploymentGroup $code_deploy_deployment_group;
  public CodeDeployDeploymentId $code_deploy_deployment_id;
  public CodeDeployInstanceGroupId $code_deploy_instance_group_id;
  public CodeDeployState $code_deploy_state;
  public Ec2State $ec_2_state;
  public EndTime $end_time;
  public HealthEventArn $health_event_arn;
  public HealthEventDescription $health_event_description;
  public HealthEventTypeCategory $health_event_type_category;
  public HealthEventTypeCode $health_event_type_code;
  public HealthService $health_service;
  public ObservationId $id;
  public LineTime $line_time;
  public LogFilter $log_filter;
  public LogGroup $log_group;
  public LogText $log_text;
  public MetricName $metric_name;
  public MetricNamespace $metric_namespace;
  public SourceARN $source_arn;
  public SourceType $source_type;
  public StartTime $start_time;
  public Unit $unit;
  public Value $value;
  public XRayErrorPercent $x_ray_error_percent;
  public XRayFaultPercent $x_ray_fault_percent;
  public XRayNodeName $x_ray_node_name;
  public XRayNodeType $x_ray_node_type;
  public XRayRequestAverageLatency $x_ray_request_average_latency;
  public XRayRequestCount $x_ray_request_count;
  public XRayThrottlePercent $x_ray_throttle_percent;

  public function __construct(shape(
  ?'cloud_watch_event_detail_type' => CloudWatchEventDetailType,
  ?'cloud_watch_event_id' => CloudWatchEventId,
  ?'cloud_watch_event_source' => CloudWatchEventSource,
  ?'code_deploy_application' => CodeDeployApplication,
  ?'code_deploy_deployment_group' => CodeDeployDeploymentGroup,
  ?'code_deploy_deployment_id' => CodeDeployDeploymentId,
  ?'code_deploy_instance_group_id' => CodeDeployInstanceGroupId,
  ?'code_deploy_state' => CodeDeployState,
  ?'ec_2_state' => Ec2State,
  ?'end_time' => EndTime,
  ?'health_event_arn' => HealthEventArn,
  ?'health_event_description' => HealthEventDescription,
  ?'health_event_type_category' => HealthEventTypeCategory,
  ?'health_event_type_code' => HealthEventTypeCode,
  ?'health_service' => HealthService,
  ?'id' => ObservationId,
  ?'line_time' => LineTime,
  ?'log_filter' => LogFilter,
  ?'log_group' => LogGroup,
  ?'log_text' => LogText,
  ?'metric_name' => MetricName,
  ?'metric_namespace' => MetricNamespace,
  ?'source_arn' => SourceARN,
  ?'source_type' => SourceType,
  ?'start_time' => StartTime,
  ?'unit' => Unit,
  ?'value' => Value,
  ?'x_ray_error_percent' => XRayErrorPercent,
  ?'x_ray_fault_percent' => XRayFaultPercent,
  ?'x_ray_node_name' => XRayNodeName,
  ?'x_ray_node_type' => XRayNodeType,
  ?'x_ray_request_average_latency' => XRayRequestAverageLatency,
  ?'x_ray_request_count' => XRayRequestCount,
  ?'x_ray_throttle_percent' => XRayThrottlePercent,
  ) $s = shape()) {
    $this->cloud_watch_event_detail_type = $cloud_watch_event_detail_type ?? "";
    $this->cloud_watch_event_id = $cloud_watch_event_id ?? "";
    $this->cloud_watch_event_source = $cloud_watch_event_source ?? "";
    $this->code_deploy_application = $code_deploy_application ?? "";
    $this->code_deploy_deployment_group = $code_deploy_deployment_group ?? "";
    $this->code_deploy_deployment_id = $code_deploy_deployment_id ?? "";
    $this->code_deploy_instance_group_id = $code_deploy_instance_group_id ?? "";
    $this->code_deploy_state = $code_deploy_state ?? "";
    $this->ec_2_state = $ec_2_state ?? "";
    $this->end_time = $end_time ?? 0;
    $this->health_event_arn = $health_event_arn ?? "";
    $this->health_event_description = $health_event_description ?? "";
    $this->health_event_type_category = $health_event_type_category ?? "";
    $this->health_event_type_code = $health_event_type_code ?? "";
    $this->health_service = $health_service ?? "";
    $this->id = $id ?? ;
    $this->line_time = $line_time ?? 0;
    $this->log_filter = $log_filter ?? "";
    $this->log_group = $log_group ?? "";
    $this->log_text = $log_text ?? "";
    $this->metric_name = $metric_name ?? "";
    $this->metric_namespace = $metric_namespace ?? "";
    $this->source_arn = $source_arn ?? "";
    $this->source_type = $source_type ?? "";
    $this->start_time = $start_time ?? 0;
    $this->unit = $unit ?? "";
    $this->value = $value ?? 0.0;
    $this->x_ray_error_percent = $x_ray_error_percent ?? 0;
    $this->x_ray_fault_percent = $x_ray_fault_percent ?? 0;
    $this->x_ray_node_name = $x_ray_node_name ?? "";
    $this->x_ray_node_type = $x_ray_node_type ?? "";
    $this->x_ray_request_average_latency = $x_ray_request_average_latency ?? 0;
    $this->x_ray_request_count = $x_ray_request_count ?? 0;
    $this->x_ray_throttle_percent = $x_ray_throttle_percent ?? 0;
  }
}

type ObservationId = string;

type ObservationList = vec<Observation>;

type OpsCenterEnabled = bool;

type OpsItemSNSTopicArn = string;

type PaginationToken = string;

class Problem {
  public AffectedResource $affected_resource;
  public EndTime $end_time;
  public Feedback $feedback;
  public ProblemId $id;
  public Insights $insights;
  public ResourceGroupName $resource_group_name;
  public SeverityLevel $severity_level;
  public StartTime $start_time;
  public Status $status;
  public Title $title;

  public function __construct(shape(
  ?'affected_resource' => AffectedResource,
  ?'end_time' => EndTime,
  ?'feedback' => Feedback,
  ?'id' => ProblemId,
  ?'insights' => Insights,
  ?'resource_group_name' => ResourceGroupName,
  ?'severity_level' => SeverityLevel,
  ?'start_time' => StartTime,
  ?'status' => Status,
  ?'title' => Title,
  ) $s = shape()) {
    $this->affected_resource = $affected_resource ?? "";
    $this->end_time = $end_time ?? 0;
    $this->feedback = $feedback ?? [];
    $this->id = $id ?? ;
    $this->insights = $insights ?? "";
    $this->resource_group_name = $resource_group_name ?? "";
    $this->severity_level = $severity_level ?? "";
    $this->start_time = $start_time ?? 0;
    $this->status = $status ?? "";
    $this->title = $title ?? "";
  }
}

type ProblemId = string;

type ProblemList = vec<Problem>;

class RelatedObservations {
  public ObservationList $observation_list;

  public function __construct(shape(
  ?'observation_list' => ObservationList,
  ) $s = shape()) {
    $this->observation_list = $observation_list ?? [];
  }
}

type Remarks = string;

type RemoveSNSTopic = bool;

type ResourceARN = string;

type ResourceGroupName = string;

class ResourceInUseException {
  public ErrorMsg $message;

  public function __construct(shape(
  ?'message' => ErrorMsg,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ResourceList = vec<ResourceARN>;

class ResourceNotFoundException {
  public ErrorMsg $message;

  public function __construct(shape(
  ?'message' => ErrorMsg,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ResourceType = string;

type SeverityLevel = string;

type SourceARN = string;

type SourceType = string;

type StartTime = int;

type Status = string;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? 0.0;
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? ;
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class TagsAlreadyExistException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Tier = string;

type Title = string;

class TooManyTagsException {
  public ExceptionMessage $message;
  public AmazonResourceName $resource_name;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ?'resource_name' => AmazonResourceName,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->resource_name = $resource_name ?? ;
  }
}

type Unit = string;

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateApplicationRequest {
  public CWEMonitorEnabled $cwe_monitor_enabled;
  public OpsCenterEnabled $ops_center_enabled;
  public OpsItemSNSTopicArn $ops_item_sns_topic_arn;
  public RemoveSNSTopic $remove_sns_topic;
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'cwe_monitor_enabled' => CWEMonitorEnabled,
  ?'ops_center_enabled' => OpsCenterEnabled,
  ?'ops_item_sns_topic_arn' => OpsItemSNSTopicArn,
  ?'remove_sns_topic' => RemoveSNSTopic,
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->cwe_monitor_enabled = $cwe_monitor_enabled ?? false;
    $this->ops_center_enabled = $ops_center_enabled ?? false;
    $this->ops_item_sns_topic_arn = $ops_item_sns_topic_arn ?? "";
    $this->remove_sns_topic = $remove_sns_topic ?? false;
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class UpdateApplicationResponse {
  public ApplicationInfo $application_info;

  public function __construct(shape(
  ?'application_info' => ApplicationInfo,
  ) $s = shape()) {
    $this->application_info = $application_info ?? null;
  }
}

class UpdateComponentConfigurationRequest {
  public ComponentConfiguration $component_configuration;
  public ComponentName $component_name;
  public Monitor $monitor;
  public ResourceGroupName $resource_group_name;
  public Tier $tier;

  public function __construct(shape(
  ?'component_configuration' => ComponentConfiguration,
  ?'component_name' => ComponentName,
  ?'monitor' => Monitor,
  ?'resource_group_name' => ResourceGroupName,
  ?'tier' => Tier,
  ) $s = shape()) {
    $this->component_configuration = $component_configuration ?? "";
    $this->component_name = $component_name ?? "";
    $this->monitor = $monitor ?? false;
    $this->resource_group_name = $resource_group_name ?? "";
    $this->tier = $tier ?? "";
  }
}

class UpdateComponentConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateComponentRequest {
  public ComponentName $component_name;
  public NewComponentName $new_component_name;
  public ResourceGroupName $resource_group_name;
  public ResourceList $resource_list;

  public function __construct(shape(
  ?'component_name' => ComponentName,
  ?'new_component_name' => NewComponentName,
  ?'resource_group_name' => ResourceGroupName,
  ?'resource_list' => ResourceList,
  ) $s = shape()) {
    $this->component_name = $component_name ?? "";
    $this->new_component_name = $new_component_name ?? "";
    $this->resource_group_name = $resource_group_name ?? "";
    $this->resource_list = $resource_list ?? [];
  }
}

class UpdateComponentResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateLogPatternRequest {
  public LogPatternRegex $pattern;
  public LogPatternName $pattern_name;
  public LogPatternSetName $pattern_set_name;
  public LogPatternRank $rank;
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'pattern' => LogPatternRegex,
  ?'pattern_name' => LogPatternName,
  ?'pattern_set_name' => LogPatternSetName,
  ?'rank' => LogPatternRank,
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->pattern = $pattern ?? ;
    $this->pattern_name = $pattern_name ?? ;
    $this->pattern_set_name = $pattern_set_name ?? ;
    $this->rank = $rank ?? ;
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class UpdateLogPatternResponse {
  public LogPattern $log_pattern;
  public ResourceGroupName $resource_group_name;

  public function __construct(shape(
  ?'log_pattern' => LogPattern,
  ?'resource_group_name' => ResourceGroupName,
  ) $s = shape()) {
    $this->log_pattern = $log_pattern ?? null;
    $this->resource_group_name = $resource_group_name ?? "";
  }
}

class ValidationException {
  public ErrorMsg $message;

  public function __construct(shape(
  ?'message' => ErrorMsg,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Value = float;

type XRayErrorPercent = int;

type XRayFaultPercent = int;

type XRayNodeName = string;

type XRayNodeType = string;

type XRayRequestAverageLatency = int;

type XRayRequestCount = int;

type XRayThrottlePercent = int;


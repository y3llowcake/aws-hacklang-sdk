<?hh // strict
namespace slack\aws\applicationinsights;

interface Application Insights {
  public function CreateApplication(CreateApplicationRequest) Awaitable<Errors\Result<CreateApplicationResponse>>;
  public function CreateComponent(CreateComponentRequest) Awaitable<Errors\Result<CreateComponentResponse>>;
  public function CreateLogPattern(CreateLogPatternRequest) Awaitable<Errors\Result<CreateLogPatternResponse>>;
  public function DeleteApplication(DeleteApplicationRequest) Awaitable<Errors\Result<DeleteApplicationResponse>>;
  public function DeleteComponent(DeleteComponentRequest) Awaitable<Errors\Result<DeleteComponentResponse>>;
  public function DeleteLogPattern(DeleteLogPatternRequest) Awaitable<Errors\Result<DeleteLogPatternResponse>>;
  public function DescribeApplication(DescribeApplicationRequest) Awaitable<Errors\Result<DescribeApplicationResponse>>;
  public function DescribeComponent(DescribeComponentRequest) Awaitable<Errors\Result<DescribeComponentResponse>>;
  public function DescribeComponentConfiguration(DescribeComponentConfigurationRequest) Awaitable<Errors\Result<DescribeComponentConfigurationResponse>>;
  public function DescribeComponentConfigurationRecommendation(DescribeComponentConfigurationRecommendationRequest) Awaitable<Errors\Result<DescribeComponentConfigurationRecommendationResponse>>;
  public function DescribeLogPattern(DescribeLogPatternRequest) Awaitable<Errors\Result<DescribeLogPatternResponse>>;
  public function DescribeObservation(DescribeObservationRequest) Awaitable<Errors\Result<DescribeObservationResponse>>;
  public function DescribeProblem(DescribeProblemRequest) Awaitable<Errors\Result<DescribeProblemResponse>>;
  public function DescribeProblemObservations(DescribeProblemObservationsRequest) Awaitable<Errors\Result<DescribeProblemObservationsResponse>>;
  public function ListApplications(ListApplicationsRequest) Awaitable<Errors\Result<ListApplicationsResponse>>;
  public function ListComponents(ListComponentsRequest) Awaitable<Errors\Result<ListComponentsResponse>>;
  public function ListConfigurationHistory(ListConfigurationHistoryRequest) Awaitable<Errors\Result<ListConfigurationHistoryResponse>>;
  public function ListLogPatternSets(ListLogPatternSetsRequest) Awaitable<Errors\Result<ListLogPatternSetsResponse>>;
  public function ListLogPatterns(ListLogPatternsRequest) Awaitable<Errors\Result<ListLogPatternsResponse>>;
  public function ListProblems(ListProblemsRequest) Awaitable<Errors\Result<ListProblemsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateApplication(UpdateApplicationRequest) Awaitable<Errors\Result<UpdateApplicationResponse>>;
  public function UpdateComponent(UpdateComponentRequest) Awaitable<Errors\Result<UpdateComponentResponse>>;
  public function UpdateComponentConfiguration(UpdateComponentConfigurationRequest) Awaitable<Errors\Result<UpdateComponentConfigurationResponse>>;
  public function UpdateLogPattern(UpdateLogPatternRequest) Awaitable<Errors\Result<UpdateLogPatternResponse>>;
}

class AffectedResource {
}

class AmazonResourceName {
}

class ApplicationComponent {
  public ComponentName $component_name;
  public Monitor $monitor;
  public ResourceType $resource_type;
  public Tier $tier;
}

class ApplicationComponentList {
}

class ApplicationInfo {
  public CWEMonitorEnabled $cwe_monitor_enabled;
  public LifeCycle $life_cycle;
  public OpsCenterEnabled $ops_center_enabled;
  public OpsItemSNSTopicArn $ops_item_sns_topic_arn;
  public Remarks $remarks;
  public ResourceGroupName $resource_group_name;
}

class ApplicationInfoList {
}

class BadRequestException {
  public ErrorMsg $message;
}

class CWEMonitorEnabled {
}

class CloudWatchEventDetailType {
}

class CloudWatchEventId {
}

class CloudWatchEventSource {
}

class CodeDeployApplication {
}

class CodeDeployDeploymentGroup {
}

class CodeDeployDeploymentId {
}

class CodeDeployInstanceGroupId {
}

class CodeDeployState {
}

class ComponentConfiguration {
}

class ComponentName {
}

class ConfigurationEvent {
  public ConfigurationEventDetail $event_detail;
  public ConfigurationEventResourceName $event_resource_name;
  public ConfigurationEventResourceType $event_resource_type;
  public ConfigurationEventStatus $event_status;
  public ConfigurationEventTime $event_time;
  public ConfigurationEventMonitoredResourceARN $monitored_resource_arn;
}

class ConfigurationEventDetail {
}

class ConfigurationEventList {
}

class ConfigurationEventMonitoredResourceARN {
}

class ConfigurationEventResourceName {
}

class ConfigurationEventResourceType {
}

class ConfigurationEventStatus {
}

class ConfigurationEventTime {
}

class CreateApplicationRequest {
  public CWEMonitorEnabled $cwe_monitor_enabled;
  public OpsCenterEnabled $ops_center_enabled;
  public OpsItemSNSTopicArn $ops_item_sns_topic_arn;
  public ResourceGroupName $resource_group_name;
  public TagList $tags;
}

class CreateApplicationResponse {
  public ApplicationInfo $application_info;
}

class CreateComponentRequest {
  public ComponentName $component_name;
  public ResourceGroupName $resource_group_name;
  public ResourceList $resource_list;
}

class CreateComponentResponse {
}

class CreateLogPatternRequest {
  public LogPatternRegex $pattern;
  public LogPatternName $pattern_name;
  public LogPatternSetName $pattern_set_name;
  public LogPatternRank $rank;
  public ResourceGroupName $resource_group_name;
}

class CreateLogPatternResponse {
  public LogPattern $log_pattern;
  public ResourceGroupName $resource_group_name;
}

class DeleteApplicationRequest {
  public ResourceGroupName $resource_group_name;
}

class DeleteApplicationResponse {
}

class DeleteComponentRequest {
  public ComponentName $component_name;
  public ResourceGroupName $resource_group_name;
}

class DeleteComponentResponse {
}

class DeleteLogPatternRequest {
  public LogPatternName $pattern_name;
  public LogPatternSetName $pattern_set_name;
  public ResourceGroupName $resource_group_name;
}

class DeleteLogPatternResponse {
}

class DescribeApplicationRequest {
  public ResourceGroupName $resource_group_name;
}

class DescribeApplicationResponse {
  public ApplicationInfo $application_info;
}

class DescribeComponentConfigurationRecommendationRequest {
  public ComponentName $component_name;
  public ResourceGroupName $resource_group_name;
  public Tier $tier;
}

class DescribeComponentConfigurationRecommendationResponse {
  public ComponentConfiguration $component_configuration;
}

class DescribeComponentConfigurationRequest {
  public ComponentName $component_name;
  public ResourceGroupName $resource_group_name;
}

class DescribeComponentConfigurationResponse {
  public ComponentConfiguration $component_configuration;
  public Monitor $monitor;
  public Tier $tier;
}

class DescribeComponentRequest {
  public ComponentName $component_name;
  public ResourceGroupName $resource_group_name;
}

class DescribeComponentResponse {
  public ApplicationComponent $application_component;
  public ResourceList $resource_list;
}

class DescribeLogPatternRequest {
  public LogPatternName $pattern_name;
  public LogPatternSetName $pattern_set_name;
  public ResourceGroupName $resource_group_name;
}

class DescribeLogPatternResponse {
  public LogPattern $log_pattern;
  public ResourceGroupName $resource_group_name;
}

class DescribeObservationRequest {
  public ObservationId $observation_id;
}

class DescribeObservationResponse {
  public Observation $observation;
}

class DescribeProblemObservationsRequest {
  public ProblemId $problem_id;
}

class DescribeProblemObservationsResponse {
  public RelatedObservations $related_observations;
}

class DescribeProblemRequest {
  public ProblemId $problem_id;
}

class DescribeProblemResponse {
  public Problem $problem;
}

class Ec2State {
}

class EndTime {
}

class ErrorMsg {
}

class ExceptionMessage {
}

class Feedback {
}

class FeedbackKey {
}

class FeedbackValue {
}

class HealthEventArn {
}

class HealthEventDescription {
}

class HealthEventTypeCategory {
}

class HealthEventTypeCode {
}

class HealthService {
}

class Insights {
}

class InternalServerException {
  public ErrorMsg $message;
}

class LifeCycle {
}

class LineTime {
}

class ListApplicationsRequest {
  public MaxEntities $max_results;
  public PaginationToken $next_token;
}

class ListApplicationsResponse {
  public ApplicationInfoList $application_info_list;
  public PaginationToken $next_token;
}

class ListComponentsRequest {
  public MaxEntities $max_results;
  public PaginationToken $next_token;
  public ResourceGroupName $resource_group_name;
}

class ListComponentsResponse {
  public ApplicationComponentList $application_component_list;
  public PaginationToken $next_token;
}

class ListConfigurationHistoryRequest {
  public EndTime $end_time;
  public ConfigurationEventStatus $event_status;
  public MaxEntities $max_results;
  public PaginationToken $next_token;
  public ResourceGroupName $resource_group_name;
  public StartTime $start_time;
}

class ListConfigurationHistoryResponse {
  public ConfigurationEventList $event_list;
  public PaginationToken $next_token;
}

class ListLogPatternSetsRequest {
  public MaxEntities $max_results;
  public PaginationToken $next_token;
  public ResourceGroupName $resource_group_name;
}

class ListLogPatternSetsResponse {
  public LogPatternSetList $log_pattern_sets;
  public PaginationToken $next_token;
  public ResourceGroupName $resource_group_name;
}

class ListLogPatternsRequest {
  public MaxEntities $max_results;
  public PaginationToken $next_token;
  public LogPatternSetName $pattern_set_name;
  public ResourceGroupName $resource_group_name;
}

class ListLogPatternsResponse {
  public LogPatternList $log_patterns;
  public PaginationToken $next_token;
  public ResourceGroupName $resource_group_name;
}

class ListProblemsRequest {
  public EndTime $end_time;
  public MaxEntities $max_results;
  public PaginationToken $next_token;
  public ResourceGroupName $resource_group_name;
  public StartTime $start_time;
}

class ListProblemsResponse {
  public PaginationToken $next_token;
  public ProblemList $problem_list;
}

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class LogFilter {
}

class LogGroup {
}

class LogPattern {
  public LogPatternRegex $pattern;
  public LogPatternName $pattern_name;
  public LogPatternSetName $pattern_set_name;
  public LogPatternRank $rank;
}

class LogPatternList {
}

class LogPatternName {
}

class LogPatternRank {
}

class LogPatternRegex {
}

class LogPatternSetList {
}

class LogPatternSetName {
}

class LogText {
}

class MaxEntities {
}

class MetricName {
}

class MetricNamespace {
}

class Monitor {
}

class NewComponentName {
}

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
}

class ObservationId {
}

class ObservationList {
}

class OpsCenterEnabled {
}

class OpsItemSNSTopicArn {
}

class PaginationToken {
}

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
}

class ProblemId {
}

class ProblemList {
}

class RelatedObservations {
  public ObservationList $observation_list;
}

class Remarks {
}

class RemoveSNSTopic {
}

class ResourceARN {
}

class ResourceGroupName {
}

class ResourceInUseException {
  public ErrorMsg $message;
}

class ResourceList {
}

class ResourceNotFoundException {
  public ErrorMsg $message;
}

class ResourceType {
}

class SeverityLevel {
}

class SourceARN {
}

class SourceType {
}

class StartTime {
}

class Status {
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

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class TagsAlreadyExistException {
  public ExceptionMessage $message;
}

class Tier {
}

class Title {
}

class TooManyTagsException {
  public ExceptionMessage $message;
  public AmazonResourceName $resource_name;
}

class Unit {
}

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateApplicationRequest {
  public CWEMonitorEnabled $cwe_monitor_enabled;
  public OpsCenterEnabled $ops_center_enabled;
  public OpsItemSNSTopicArn $ops_item_sns_topic_arn;
  public RemoveSNSTopic $remove_sns_topic;
  public ResourceGroupName $resource_group_name;
}

class UpdateApplicationResponse {
  public ApplicationInfo $application_info;
}

class UpdateComponentConfigurationRequest {
  public ComponentConfiguration $component_configuration;
  public ComponentName $component_name;
  public Monitor $monitor;
  public ResourceGroupName $resource_group_name;
  public Tier $tier;
}

class UpdateComponentConfigurationResponse {
}

class UpdateComponentRequest {
  public ComponentName $component_name;
  public NewComponentName $new_component_name;
  public ResourceGroupName $resource_group_name;
  public ResourceList $resource_list;
}

class UpdateComponentResponse {
}

class UpdateLogPatternRequest {
  public LogPatternRegex $pattern;
  public LogPatternName $pattern_name;
  public LogPatternSetName $pattern_set_name;
  public LogPatternRank $rank;
  public ResourceGroupName $resource_group_name;
}

class UpdateLogPatternResponse {
  public LogPattern $log_pattern;
  public ResourceGroupName $resource_group_name;
}

class ValidationException {
  public ErrorMsg $message;
}

class Value {
}

class XRayErrorPercent {
}

class XRayFaultPercent {
}

class XRayNodeName {
}

class XRayNodeType {
}

class XRayRequestAverageLatency {
}

class XRayRequestCount {
}

class XRayThrottlePercent {
}


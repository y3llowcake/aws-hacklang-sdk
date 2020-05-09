<?hh // strict
namespace slack\aws\applicationinsights;

interface Application Insights {
  public function UpdateApplication(UpdateApplicationRequest) Awaitable<Errors\Result<UpdateApplicationResponse>>;
  public function CreateApplication(CreateApplicationRequest) Awaitable<Errors\Result<CreateApplicationResponse>>;
  public function DeleteLogPattern(DeleteLogPatternRequest) Awaitable<Errors\Result<DeleteLogPatternResponse>>;
  public function ListComponents(ListComponentsRequest) Awaitable<Errors\Result<ListComponentsResponse>>;
  public function DescribeComponentConfigurationRecommendation(DescribeComponentConfigurationRecommendationRequest) Awaitable<Errors\Result<DescribeComponentConfigurationRecommendationResponse>>;
  public function ListProblems(ListProblemsRequest) Awaitable<Errors\Result<ListProblemsResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateComponentConfiguration(UpdateComponentConfigurationRequest) Awaitable<Errors\Result<UpdateComponentConfigurationResponse>>;
  public function UpdateLogPattern(UpdateLogPatternRequest) Awaitable<Errors\Result<UpdateLogPatternResponse>>;
  public function DescribeProblemObservations(DescribeProblemObservationsRequest) Awaitable<Errors\Result<DescribeProblemObservationsResponse>>;
  public function ListApplications(ListApplicationsRequest) Awaitable<Errors\Result<ListApplicationsResponse>>;
  public function ListConfigurationHistory(ListConfigurationHistoryRequest) Awaitable<Errors\Result<ListConfigurationHistoryResponse>>;
  public function ListLogPatterns(ListLogPatternsRequest) Awaitable<Errors\Result<ListLogPatternsResponse>>;
  public function DescribeComponentConfiguration(DescribeComponentConfigurationRequest) Awaitable<Errors\Result<DescribeComponentConfigurationResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function DescribeApplication(DescribeApplicationRequest) Awaitable<Errors\Result<DescribeApplicationResponse>>;
  public function DescribeObservation(DescribeObservationRequest) Awaitable<Errors\Result<DescribeObservationResponse>>;
  public function DescribeLogPattern(DescribeLogPatternRequest) Awaitable<Errors\Result<DescribeLogPatternResponse>>;
  public function DescribeProblem(DescribeProblemRequest) Awaitable<Errors\Result<DescribeProblemResponse>>;
  public function ListLogPatternSets(ListLogPatternSetsRequest) Awaitable<Errors\Result<ListLogPatternSetsResponse>>;
  public function CreateComponent(CreateComponentRequest) Awaitable<Errors\Result<CreateComponentResponse>>;
  public function DeleteApplication(DeleteApplicationRequest) Awaitable<Errors\Result<DeleteApplicationResponse>>;
  public function DescribeComponent(DescribeComponentRequest) Awaitable<Errors\Result<DescribeComponentResponse>>;
  public function UpdateComponent(UpdateComponentRequest) Awaitable<Errors\Result<UpdateComponentResponse>>;
  public function CreateLogPattern(CreateLogPatternRequest) Awaitable<Errors\Result<CreateLogPatternResponse>>;
  public function DeleteComponent(DeleteComponentRequest) Awaitable<Errors\Result<DeleteComponentResponse>>;
}

class ApplicationComponentList {
}

class DescribeComponentConfigurationRequest {
  public ComponentName $component_name;
  public ResourceGroupName $resource_group_name;
}

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;
}

class PaginationToken {
}

class Tier {
}

class DeleteComponentResponse {
}

class RelatedObservations {
  public ObservationList $observation_list;
}

class StartTime {
}

class TagResourceResponse {
}

class ValidationException {
  public ErrorMsg $message;
}

class XRayFaultPercent {
}

class CodeDeployApplication {
}

class ListLogPatternSetsResponse {
  public ResourceGroupName $resource_group_name;
  public LogPatternSetList $log_pattern_sets;
  public PaginationToken $next_token;
}

class Problem {
  public Insights $insights;
  public AffectedResource $affected_resource;
  public SeverityLevel $severity_level;
  public ResourceGroupName $resource_group_name;
  public Feedback $feedback;
  public ProblemId $id;
  public Title $title;
  public Status $status;
  public StartTime $start_time;
  public EndTime $end_time;
}

class ProblemId {
}

class DescribeProblemObservationsResponse {
  public RelatedObservations $related_observations;
}

class ListApplicationsResponse {
  public ApplicationInfoList $application_info_list;
  public PaginationToken $next_token;
}

class LogFilter {
}

class ResourceARN {
}

class ResourceList {
}

class CloudWatchEventDetailType {
}

class DeleteApplicationRequest {
  public ResourceGroupName $resource_group_name;
}

class ObservationList {
}

class SourceARN {
}

class UpdateComponentResponse {
}

class ConfigurationEventResourceType {
}

class ListLogPatternsRequest {
  public ResourceGroupName $resource_group_name;
  public LogPatternSetName $pattern_set_name;
  public MaxEntities $max_results;
  public PaginationToken $next_token;
}

class ListProblemsRequest {
  public EndTime $end_time;
  public MaxEntities $max_results;
  public PaginationToken $next_token;
  public ResourceGroupName $resource_group_name;
  public StartTime $start_time;
}

class Unit {
}

class Value {
}

class CloudWatchEventSource {
}

class DeleteLogPatternResponse {
}

class DescribeLogPatternResponse {
  public ResourceGroupName $resource_group_name;
  public LogPattern $log_pattern;
}

class Ec2State {
}

class HealthEventTypeCategory {
}

class DescribeObservationResponse {
  public Observation $observation;
}

class ListLogPatternsResponse {
  public ResourceGroupName $resource_group_name;
  public LogPatternList $log_patterns;
  public PaginationToken $next_token;
}

class LogGroup {
}

class SourceType {
}

class CodeDeployState {
}

class DescribeComponentRequest {
  public ResourceGroupName $resource_group_name;
  public ComponentName $component_name;
}

class HealthEventArn {
}

class RemoveSNSTopic {
}

class ResourceType {
}

class TagsAlreadyExistException {
  public ExceptionMessage $message;
}

class CodeDeployInstanceGroupId {
}

class LogPatternList {
}

class MetricNamespace {
}

class NewComponentName {
}

class OpsItemSNSTopicArn {
}

class AmazonResourceName {
}

class CloudWatchEventId {
}

class CreateComponentRequest {
  public ResourceList $resource_list;
  public ResourceGroupName $resource_group_name;
  public ComponentName $component_name;
}

class DescribeComponentConfigurationRecommendationResponse {
  public ComponentConfiguration $component_configuration;
}

class Monitor {
}

class ConfigurationEventTime {
}

class LogPattern {
  public LogPatternSetName $pattern_set_name;
  public LogPatternName $pattern_name;
  public LogPatternRegex $pattern;
  public LogPatternRank $rank;
}

class Title {
}

class CodeDeployDeploymentGroup {
}

class DeleteComponentRequest {
  public ComponentName $component_name;
  public ResourceGroupName $resource_group_name;
}

class LifeCycle {
}

class Remarks {
}

class ConfigurationEventResourceName {
}

class LogText {
}

class DescribeProblemObservationsRequest {
  public ProblemId $problem_id;
}

class ErrorMsg {
}

class ExceptionMessage {
}

class HealthEventTypeCode {
}

class ListApplicationsRequest {
  public PaginationToken $next_token;
  public MaxEntities $max_results;
}

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;
}

class XRayNodeType {
}

class ConfigurationEventList {
}

class ConfigurationEventStatus {
}

class LogPatternSetList {
}

class ResourceGroupName {
}

class UpdateLogPatternResponse {
  public ResourceGroupName $resource_group_name;
  public LogPattern $log_pattern;
}

class ApplicationInfoList {
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class LogPatternSetName {
}

class XRayThrottlePercent {
}

class AffectedResource {
}

class BadRequestException {
  public ErrorMsg $message;
}

class HealthService {
}

class ListLogPatternSetsRequest {
  public MaxEntities $max_results;
  public PaginationToken $next_token;
  public ResourceGroupName $resource_group_name;
}

class LogPatternRegex {
}

class TagList {
}

class XRayNodeName {
}

class CodeDeployDeploymentId {
}

class LineTime {
}

class UpdateComponentRequest {
  public ResourceList $resource_list;
  public ResourceGroupName $resource_group_name;
  public ComponentName $component_name;
  public NewComponentName $new_component_name;
}

class UpdateComponentConfigurationRequest {
  public ResourceGroupName $resource_group_name;
  public ComponentName $component_name;
  public Monitor $monitor;
  public Tier $tier;
  public ComponentConfiguration $component_configuration;
}

class CWEMonitorEnabled {
}

class CreateComponentResponse {
}

class DescribeProblemRequest {
  public ProblemId $problem_id;
}

class InternalServerException {
  public ErrorMsg $message;
}

class LogPatternRank {
}

class MetricName {
}

class ConfigurationEventDetail {
}

class CreateApplicationRequest {
  public TagList $tags;
  public ResourceGroupName $resource_group_name;
  public OpsCenterEnabled $ops_center_enabled;
  public CWEMonitorEnabled $cwe_monitor_enabled;
  public OpsItemSNSTopicArn $ops_item_sns_topic_arn;
}

class DescribeApplicationResponse {
  public ApplicationInfo $application_info;
}

class DescribeObservationRequest {
  public ObservationId $observation_id;
}

class HealthEventDescription {
}

class ListProblemsResponse {
  public ProblemList $problem_list;
  public PaginationToken $next_token;
}

class LogPatternName {
}

class XRayErrorPercent {
}

class CreateLogPatternResponse {
  public LogPattern $log_pattern;
  public ResourceGroupName $resource_group_name;
}

class Feedback {
}

class ResourceNotFoundException {
  public ErrorMsg $message;
}

class Status {
}

class UntagResourceResponse {
}

class UpdateLogPatternRequest {
  public LogPatternRegex $pattern;
  public LogPatternRank $rank;
  public ResourceGroupName $resource_group_name;
  public LogPatternSetName $pattern_set_name;
  public LogPatternName $pattern_name;
}

class ComponentConfiguration {
}

class DescribeComponentConfigurationRecommendationRequest {
  public ResourceGroupName $resource_group_name;
  public ComponentName $component_name;
  public Tier $tier;
}

class Insights {
}

class ListConfigurationHistoryResponse {
  public ConfigurationEventList $event_list;
  public PaginationToken $next_token;
}

class MaxEntities {
}

class UpdateApplicationRequest {
  public OpsItemSNSTopicArn $ops_item_sns_topic_arn;
  public RemoveSNSTopic $remove_sns_topic;
  public ResourceGroupName $resource_group_name;
  public OpsCenterEnabled $ops_center_enabled;
  public CWEMonitorEnabled $cwe_monitor_enabled;
}

class DescribeApplicationRequest {
  public ResourceGroupName $resource_group_name;
}

class DescribeComponentConfigurationResponse {
  public Monitor $monitor;
  public Tier $tier;
  public ComponentConfiguration $component_configuration;
}

class DescribeComponentResponse {
  public ApplicationComponent $application_component;
  public ResourceList $resource_list;
}

class DescribeProblemResponse {
  public Problem $problem;
}

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;
}

class UpdateApplicationResponse {
  public ApplicationInfo $application_info;
}

class XRayRequestCount {
}

class DeleteLogPatternRequest {
  public ResourceGroupName $resource_group_name;
  public LogPatternSetName $pattern_set_name;
  public LogPatternName $pattern_name;
}

class OpsCenterEnabled {
}

class ResourceInUseException {
  public ErrorMsg $message;
}

class TagValue {
}

class FeedbackKey {
}

class TooManyTagsException {
  public ExceptionMessage $message;
  public AmazonResourceName $resource_name;
}

class ApplicationInfo {
  public ResourceGroupName $resource_group_name;
  public LifeCycle $life_cycle;
  public OpsItemSNSTopicArn $ops_item_sns_topic_arn;
  public OpsCenterEnabled $ops_center_enabled;
  public CWEMonitorEnabled $cwe_monitor_enabled;
  public Remarks $remarks;
}

class CreateApplicationResponse {
  public ApplicationInfo $application_info;
}

class DeleteApplicationResponse {
}

class ListComponentsRequest {
  public MaxEntities $max_results;
  public PaginationToken $next_token;
  public ResourceGroupName $resource_group_name;
}

class ListConfigurationHistoryRequest {
  public ConfigurationEventStatus $event_status;
  public MaxEntities $max_results;
  public PaginationToken $next_token;
  public ResourceGroupName $resource_group_name;
  public StartTime $start_time;
  public EndTime $end_time;
}

class ObservationId {
}

class XRayRequestAverageLatency {
}

class ConfigurationEvent {
  public ConfigurationEventMonitoredResourceARN $monitored_resource_arn;
  public ConfigurationEventStatus $event_status;
  public ConfigurationEventResourceType $event_resource_type;
  public ConfigurationEventTime $event_time;
  public ConfigurationEventDetail $event_detail;
  public ConfigurationEventResourceName $event_resource_name;
}

class FeedbackValue {
}

class SeverityLevel {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKeyList {
}

class ComponentName {
}

class DescribeLogPatternRequest {
  public LogPatternName $pattern_name;
  public ResourceGroupName $resource_group_name;
  public LogPatternSetName $pattern_set_name;
}

class EndTime {
}

class ListComponentsResponse {
  public ApplicationComponentList $application_component_list;
  public PaginationToken $next_token;
}

class ProblemList {
}

class TagKey {
}

class UpdateComponentConfigurationResponse {
}

class ApplicationComponent {
  public ComponentName $component_name;
  public ResourceType $resource_type;
  public Tier $tier;
  public Monitor $monitor;
}

class ConfigurationEventMonitoredResourceARN {
}

class CreateLogPatternRequest {
  public ResourceGroupName $resource_group_name;
  public LogPatternSetName $pattern_set_name;
  public LogPatternName $pattern_name;
  public LogPatternRegex $pattern;
  public LogPatternRank $rank;
}

class Observation {
  public Unit $unit;
  public CodeDeployApplication $code_deploy_application;
  public StartTime $start_time;
  public Value $value;
  public CloudWatchEventDetailType $cloud_watch_event_detail_type;
  public HealthService $health_service;
  public CodeDeployInstanceGroupId $code_deploy_instance_group_id;
  public LineTime $line_time;
  public CodeDeployState $code_deploy_state;
  public XRayRequestCount $x_ray_request_count;
  public XRayRequestAverageLatency $x_ray_request_average_latency;
  public XRayNodeName $x_ray_node_name;
  public LogText $log_text;
  public XRayNodeType $x_ray_node_type;
  public LogGroup $log_group;
  public CodeDeployDeploymentId $code_deploy_deployment_id;
  public Ec2State $ec_2_state;
  public XRayErrorPercent $x_ray_error_percent;
  public CloudWatchEventId $cloud_watch_event_id;
  public LogFilter $log_filter;
  public CloudWatchEventSource $cloud_watch_event_source;
  public HealthEventArn $health_event_arn;
  public HealthEventTypeCode $health_event_type_code;
  public HealthEventTypeCategory $health_event_type_category;
  public SourceARN $source_arn;
  public MetricNamespace $metric_namespace;
  public MetricName $metric_name;
  public HealthEventDescription $health_event_description;
  public CodeDeployDeploymentGroup $code_deploy_deployment_group;
  public XRayFaultPercent $x_ray_fault_percent;
  public XRayThrottlePercent $x_ray_throttle_percent;
  public SourceType $source_type;
  public EndTime $end_time;
  public ObservationId $id;
}


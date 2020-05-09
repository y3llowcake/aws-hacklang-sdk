<?hh // strict
namespace slack\aws\elasticbeanstalk;

interface Elastic Beanstalk {
  public function ListAvailableSolutionStacks() Awaitable<Errors\Result<ListAvailableSolutionStacksResultMessage>>;
  public function RebuildEnvironment(RebuildEnvironmentMessage) Awaitable<Errors\Error>;
  public function CreateEnvironment(CreateEnvironmentMessage) Awaitable<Errors\Result<EnvironmentDescription>>;
  public function CreateStorageLocation() Awaitable<Errors\Result<CreateStorageLocationResultMessage>>;
  public function DescribeApplications(DescribeApplicationsMessage) Awaitable<Errors\Result<ApplicationDescriptionsMessage>>;
  public function DescribeEnvironmentManagedActionHistory(DescribeEnvironmentManagedActionHistoryRequest) Awaitable<Errors\Result<DescribeEnvironmentManagedActionHistoryResult>>;
  public function DescribeEnvironments(DescribeEnvironmentsMessage) Awaitable<Errors\Result<EnvironmentDescriptionsMessage>>;
  public function DescribePlatformVersion(DescribePlatformVersionRequest) Awaitable<Errors\Result<DescribePlatformVersionResult>>;
  public function SwapEnvironmentCNAMEs(SwapEnvironmentCNAMEsMessage) Awaitable<Errors\Error>;
  public function UpdateApplicationResourceLifecycle(UpdateApplicationResourceLifecycleMessage) Awaitable<Errors\Result<ApplicationResourceLifecycleDescriptionMessage>>;
  public function UpdateConfigurationTemplate(UpdateConfigurationTemplateMessage) Awaitable<Errors\Result<ConfigurationSettingsDescription>>;
  public function DeleteApplication(DeleteApplicationMessage) Awaitable<Errors\Error>;
  public function DeleteApplicationVersion(DeleteApplicationVersionMessage) Awaitable<Errors\Error>;
  public function DeletePlatformVersion(DeletePlatformVersionRequest) Awaitable<Errors\Result<DeletePlatformVersionResult>>;
  public function DescribeApplicationVersions(DescribeApplicationVersionsMessage) Awaitable<Errors\Result<ApplicationVersionDescriptionsMessage>>;
  public function DescribeConfigurationSettings(DescribeConfigurationSettingsMessage) Awaitable<Errors\Result<ConfigurationSettingsDescriptions>>;
  public function DescribeInstancesHealth(DescribeInstancesHealthRequest) Awaitable<Errors\Result<DescribeInstancesHealthResult>>;
  public function AbortEnvironmentUpdate(AbortEnvironmentUpdateMessage) Awaitable<Errors\Error>;
  public function ApplyEnvironmentManagedAction(ApplyEnvironmentManagedActionRequest) Awaitable<Errors\Result<ApplyEnvironmentManagedActionResult>>;
  public function CreateConfigurationTemplate(CreateConfigurationTemplateMessage) Awaitable<Errors\Result<ConfigurationSettingsDescription>>;
  public function ListPlatformBranches(ListPlatformBranchesRequest) Awaitable<Errors\Result<ListPlatformBranchesResult>>;
  public function UpdateApplication(UpdateApplicationMessage) Awaitable<Errors\Result<ApplicationDescriptionMessage>>;
  public function UpdateTagsForResource(UpdateTagsForResourceMessage) Awaitable<Errors\Error>;
  public function CreateApplicationVersion(CreateApplicationVersionMessage) Awaitable<Errors\Result<ApplicationVersionDescriptionMessage>>;
  public function DeleteEnvironmentConfiguration(DeleteEnvironmentConfigurationMessage) Awaitable<Errors\Error>;
  public function RequestEnvironmentInfo(RequestEnvironmentInfoMessage) Awaitable<Errors\Error>;
  public function ValidateConfigurationSettings(ValidateConfigurationSettingsMessage) Awaitable<Errors\Result<ConfigurationSettingsValidationMessages>>;
  public function CreatePlatformVersion(CreatePlatformVersionRequest) Awaitable<Errors\Result<CreatePlatformVersionResult>>;
  public function DescribeAccountAttributes() Awaitable<Errors\Result<DescribeAccountAttributesResult>>;
  public function TerminateEnvironment(TerminateEnvironmentMessage) Awaitable<Errors\Result<EnvironmentDescription>>;
  public function CheckDNSAvailability(CheckDNSAvailabilityMessage) Awaitable<Errors\Result<CheckDNSAvailabilityResultMessage>>;
  public function ComposeEnvironments(ComposeEnvironmentsMessage) Awaitable<Errors\Result<EnvironmentDescriptionsMessage>>;
  public function DeleteConfigurationTemplate(DeleteConfigurationTemplateMessage) Awaitable<Errors\Error>;
  public function ListTagsForResource(ListTagsForResourceMessage) Awaitable<Errors\Result<ResourceTagsDescriptionMessage>>;
  public function RetrieveEnvironmentInfo(RetrieveEnvironmentInfoMessage) Awaitable<Errors\Result<RetrieveEnvironmentInfoResultMessage>>;
  public function UpdateApplicationVersion(UpdateApplicationVersionMessage) Awaitable<Errors\Result<ApplicationVersionDescriptionMessage>>;
  public function DescribeConfigurationOptions(DescribeConfigurationOptionsMessage) Awaitable<Errors\Result<ConfigurationOptionsDescription>>;
  public function DescribeEnvironmentHealth(DescribeEnvironmentHealthRequest) Awaitable<Errors\Result<DescribeEnvironmentHealthResult>>;
  public function DescribeEnvironmentManagedActions(DescribeEnvironmentManagedActionsRequest) Awaitable<Errors\Result<DescribeEnvironmentManagedActionsResult>>;
  public function CreateApplication(CreateApplicationMessage) Awaitable<Errors\Result<ApplicationDescriptionMessage>>;
  public function DescribeEnvironmentResources(DescribeEnvironmentResourcesMessage) Awaitable<Errors\Result<EnvironmentResourceDescriptionsMessage>>;
  public function DescribeEvents(DescribeEventsMessage) Awaitable<Errors\Result<EventDescriptionsMessage>>;
  public function ListPlatformVersions(ListPlatformVersionsRequest) Awaitable<Errors\Result<ListPlatformVersionsResult>>;
  public function RestartAppServer(RestartAppServerMessage) Awaitable<Errors\Error>;
  public function UpdateEnvironment(UpdateEnvironmentMessage) Awaitable<Errors\Result<EnvironmentDescription>>;
}

class CreatePlatformVersionRequest {
  public PlatformName $platform_name;
  public PlatformVersion $platform_version;
  public S3Location $platform_definition_bundle;
  public EnvironmentName $environment_name;
  public ConfigurationOptionSettingsList $option_settings;
  public Tags $tags;
}

class DeleteEnvironmentConfigurationMessage {
  public ApplicationName $application_name;
  public EnvironmentName $environment_name;
}

class DescribeApplicationsMessage {
  public ApplicationNamesList $application_names;
}

class EnvironmentDescriptionsList {
}

class EnvironmentLinks {
}

class RequestCount {
}

class AutoScalingGroupList {
}

class BoxedInt {
}

class RequestId {
}

class SearchFilters {
}

class DeletePlatformVersionResult {
  public PlatformSummary $platform_summary;
}

class NullableInteger {
}

class PlatformOwner {
}

class SupportedAddon {
}

class TerminateEnvironmentResources {
}

class ApplicationVersionDescriptionMessage {
  public ApplicationVersionDescription $application_version;
}

class ApplicationVersionDescriptionsMessage {
  public ApplicationVersionDescriptionList $application_versions;
  public Token $next_token;
}

class OptionRestrictionMaxLength {
}

class PlatformBranchSummaryList {
}

class SourceType {
}

class TagList {
}

class ConfigurationSettingsValidationMessages {
  public ValidationMessagesList $messages;
}

class DescribeApplicationVersionsMessage {
  public ApplicationName $application_name;
  public VersionLabelsList $version_labels;
  public MaxRecords $max_records;
  public Token $next_token;
}

class OperationInProgressException {
}

class PlatformLifecycleState {
}

class RequestEnvironmentInfoMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
  public EnvironmentInfoType $info_type;
}

class TagValue {
}

class EnvironmentName {
}

class LoadBalancerListenersDescription {
}

class ManagedActionHistoryItems {
}

class MaxCountRule {
  public BoxedBoolean $enabled;
  public BoxedInt $max_count;
  public BoxedBoolean $delete_source_from_s_3;
}

class SampleTimestamp {
}

class SourceBundleDeletionException {
}

class EventDescriptionsMessage {
  public EventDescriptionList $events;
  public Token $next_token;
}

class ManagedActionHistoryItem {
  public string $failure_description;
  public Timestamp $executed_time;
  public Timestamp $finished_time;
  public string $action_id;
  public ActionType $action_type;
  public string $action_description;
  public FailureType $failure_type;
  public ActionHistoryStatus $status;
}

class LaunchTemplate {
  public ResourceId $id;
}

class SearchFilter {
  public SearchFilterAttribute $attribute;
  public SearchFilterOperator $operator;
  public SearchFilterValues $values;
}

class UpdateApplicationVersionMessage {
  public ApplicationName $application_name;
  public VersionLabel $version_label;
  public Description $description;
}

class ConfigurationOptionSettingsList {
}

class ConfigurationSettingsDescription {
  public CreationDate $date_created;
  public ConfigurationOptionSettingsList $option_settings;
  public SolutionStackName $solution_stack_name;
  public ConfigurationTemplateName $template_name;
  public Description $description;
  public EnvironmentName $environment_name;
  public ConfigurationDeploymentStatus $deployment_status;
  public UpdateDate $date_updated;
  public PlatformArn $platform_arn;
  public ApplicationName $application_name;
}

class DeleteSourceBundle {
}

class PlatformSummaryList {
}

class QueueList {
}

class RebuildEnvironmentMessage {
  public EnvironmentName $environment_name;
  public EnvironmentId $environment_id;
}

class RetrieveEnvironmentInfoMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
  public EnvironmentInfoType $info_type;
}

class ConfigurationSettingsDescriptions {
  public ConfigurationSettingsDescriptionList $configuration_settings;
}

class OptionRestrictionMinValue {
}

class ListAvailableSolutionStacksResultMessage {
  public AvailableSolutionStackNamesList $solution_stacks;
  public AvailableSolutionStackDetailsList $solution_stack_details;
}

class AvailableSolutionStackDetailsList {
}

class EventSeverity {
}

class ManagedActions {
}

class PlatformSummary {
  public OperatingSystemVersion $operating_system_version;
  public SupportedTierList $supported_tier_list;
  public SupportedAddonList $supported_addon_list;
  public PlatformArn $platform_arn;
  public PlatformOwner $platform_owner;
  public PlatformStatus $platform_status;
  public OperatingSystemName $operating_system_name;
  public PlatformBranchLifecycleState $platform_branch_lifecycle_state;
  public PlatformCategory $platform_category;
  public PlatformLifecycleState $platform_lifecycle_state;
  public PlatformVersion $platform_version;
  public BranchName $platform_branch_name;
}

class TimeFilterStart {
}

class ValidationMessagesList {
}

class BuildConfiguration {
  public BoxedInt $timeout_in_minutes;
  public string $artifact_name;
  public NonEmptyString $code_build_service_role;
  public ComputeType $compute_type;
  public NonEmptyString $image;
}

class DeletePlatformVersionRequest {
  public PlatformArn $platform_arn;
}

class ExceptionMessage {
}

class NextToken {
}

class DescribeAccountAttributesResult {
  public ResourceQuotas $resource_quotas;
}

class EnvironmentIdList {
}

class EnvironmentHealthAttributes {
}

class EnvironmentInfoDescription {
  public Message $message;
  public EnvironmentInfoType $info_type;
  public Ec2InstanceId $ec_2_instance_id;
  public SampleTimestamp $sample_timestamp;
}

class IncludeDeletedBackTo {
}

class OptionSpecification {
  public ResourceName $resource_name;
  public OptionNamespace $namespace;
  public ConfigurationOptionName $option_name;
}

class PlatformFilterValue {
}

class String {
}

class ApplicationVersionArn {
}

class EnvironmentHealthAttribute {
}

class RegexLabel {
}

class RetrieveEnvironmentInfoResultMessage {
  public EnvironmentInfoDescriptionList $environment_info;
}

class ConfigurationOptionValue {
}

class Deployment {
  public string $version_label;
  public NullableLong $deployment_id;
  public string $status;
  public DeploymentTimestamp $deployment_time;
}

class TagKey {
}

class ActionType {
}

class LoadAverageValue {
}

class EnvironmentDescriptionsMessage {
  public EnvironmentDescriptionsList $environments;
  public Token $next_token;
}

class PlatformMaxRecords {
}

class ActionHistoryStatus {
}

class ConfigurationOptionDefaultValue {
}

class VersionLabelsList {
}

class ListPlatformVersionsRequest {
  public PlatformFilters $filters;
  public PlatformMaxRecords $max_records;
  public Token $next_token;
}

class SupportedTierList {
}

class ConfigurationTemplateNamesList {
}

class DescribePlatformVersionResult {
  public PlatformDescription $platform_description;
}

class SupportedTier {
}

class BoxedBoolean {
}

class CnameAvailability {
}

class DescribePlatformVersionRequest {
  public PlatformArn $platform_arn;
}

class Maintainer {
}

class PlatformProgrammingLanguage {
  public string $name;
  public string $version;
}

class Builder {
  public ARN $arn;
}

class DeleteApplicationVersionMessage {
  public ApplicationName $application_name;
  public VersionLabel $version_label;
  public DeleteSourceBundle $delete_source_bundle;
}

class DescribeEnvironmentResourcesMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
}

class EventDate {
}

class LoadAverage {
}

class NullableLong {
}

class TooManyApplicationVersionsException {
}

class Causes {
}

class ConfigurationOptionDescription {
  public OptionRestrictionMinValue $min_value;
  public OptionNamespace $namespace;
  public ConfigurationOptionSeverity $change_severity;
  public UserDefinedOption $user_defined;
  public ConfigurationOptionPossibleValues $value_options;
  public OptionRestrictionMaxValue $max_value;
  public OptionRestrictionMaxLength $max_length;
  public OptionRestrictionRegex $regex;
  public ConfigurationOptionName $name;
  public ConfigurationOptionDefaultValue $default_value;
  public ConfigurationOptionValueType $value_type;
}

class ActionStatus {
}

class OptionRestrictionMaxValue {
}

class Latency {
  public NullableDouble $p_10;
  public NullableDouble $p_999;
  public NullableDouble $p_99;
  public NullableDouble $p_95;
  public NullableDouble $p_90;
  public NullableDouble $p_85;
  public NullableDouble $p_75;
  public NullableDouble $p_50;
}

class ResourceName {
}

class ComposeEnvironmentsMessage {
  public ApplicationName $application_name;
  public GroupName $group_name;
  public VersionLabels $version_labels;
}

class DescribeEnvironmentManagedActionsResult {
  public ManagedActions $managed_actions;
}

class Instance {
  public ResourceId $id;
}

class RefreshedAt {
}

class Trigger {
  public ResourceId $name;
}

class ApplicationDescription {
  public ApplicationName $application_name;
  public Description $description;
  public CreationDate $date_created;
  public UpdateDate $date_updated;
  public VersionLabelsList $versions;
  public ConfigurationTemplateNamesList $configuration_templates;
  public ApplicationResourceLifecycleConfig $resource_lifecycle_config;
  public ApplicationArn $application_arn;
}

class EndpointURL {
}

class EnvironmentStatus {
}

class FileTypeExtension {
}

class OptionsSpecifierList {
}

class SolutionStackFileTypeList {
}

class SolutionStackName {
}

class UpdateTagsForResourceMessage {
  public ResourceArn $resource_arn;
  public TagList $tags_to_add;
  public TagKeyList $tags_to_remove;
}

class ApplicationVersionStatus {
}

class EnvironmentArn {
}

class RegexPattern {
}

class ValidationMessageString {
}

class CheckDNSAvailabilityMessage {
  public DNSCnamePrefix $cname_prefix;
}

class ConfigurationOptionValueType {
}

class ManagedAction {
  public string $action_id;
  public string $action_description;
  public ActionType $action_type;
  public ActionStatus $status;
  public Timestamp $window_start_time;
}

class NullableDouble {
}

class ResourceArn {
}

class TimeFilterEnd {
}

class TooManyEnvironmentsException {
}

class CPUUtilization {
  public NullableDouble $soft_irq;
  public NullableDouble $privileged;
  public NullableDouble $user;
  public NullableDouble $nice;
  public NullableDouble $system;
  public NullableDouble $idle;
  public NullableDouble $io_wait;
  public NullableDouble $irq;
}

class LaunchConfiguration {
  public ResourceId $name;
}

class CreateApplicationMessage {
  public ApplicationName $application_name;
  public Description $description;
  public ApplicationResourceLifecycleConfig $resource_lifecycle_config;
  public Tags $tags;
}

class EnvironmentDescription {
  public CreationDate $date_created;
  public EnvironmentStatus $status;
  public EnvironmentHealth $health;
  public EnvironmentHealthStatus $health_status;
  public PlatformArn $platform_arn;
  public ConfigurationTemplateName $template_name;
  public Description $description;
  public DNSCname $cname;
  public EnvironmentTier $tier;
  public ApplicationName $application_name;
  public VersionLabel $version_label;
  public SolutionStackName $solution_stack_name;
  public EnvironmentResourcesDescription $resources;
  public EnvironmentName $environment_name;
  public UpdateDate $date_updated;
  public AbortableOperationInProgress $abortable_operation_in_progress;
  public EnvironmentArn $environment_arn;
  public EnvironmentId $environment_id;
  public EndpointURL $endpoint_url;
  public EnvironmentLinks $environment_links;
}

class ImageId {
}

class PlatformFilter {
  public PlatformFilterValueList $values;
  public PlatformFilterType $type;
  public PlatformFilterOperator $operator;
}

class PlatformFilterOperator {
}

class S3Key {
}

class AbortableOperationInProgress {
}

class ConfigurationDeploymentStatus {
}

class TooManyBucketsException {
}

class CreatePlatformVersionResult {
  public PlatformSummary $platform_summary;
  public Builder $builder;
}

class ListTagsForResourceMessage {
  public ResourceArn $resource_arn;
}

class LaunchedAt {
}

class Cause {
}

class InstancesHealthAttributes {
}

class EnvironmentLink {
  public string $link_name;
  public string $environment_name;
}

class InstanceHealthSummary {
  public NullableInteger $degraded;
  public NullableInteger $severe;
  public NullableInteger $no_data;
  public NullableInteger $unknown;
  public NullableInteger $pending;
  public NullableInteger $ok;
  public NullableInteger $info;
  public NullableInteger $warning;
}

class S3Bucket {
}

class ConfigurationSettingsDescriptionList {
}

class CreationDate {
}

class CreateStorageLocationResultMessage {
  public S3Bucket $s_3_bucket;
}

class InstanceHealthList {
}

class PlatformVersionStillReferencedException {
}

class RestartAppServerMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
}

class StatusCodes {
  public NullableInteger $status_2_xx;
  public NullableInteger $status_3_xx;
  public NullableInteger $status_4_xx;
  public NullableInteger $status_5_xx;
}

class Timestamp {
}

class ApplicationResourceLifecycleDescriptionMessage {
  public ApplicationName $application_name;
  public ApplicationResourceLifecycleConfig $resource_lifecycle_config;
}

class ConfigurationOptionDescriptionsList {
}

class Token {
}

class UpdateApplicationMessage {
  public ApplicationName $application_name;
  public Description $description;
}

class Message {
}

class PlatformBranchSummary {
  public PlatformName $platform_name;
  public BranchName $branch_name;
  public PlatformBranchLifecycleState $lifecycle_state;
  public BranchOrder $branch_order;
  public SupportedTierList $supported_tier_list;
}

class TooManyPlatformsException {
}

class EnvironmentNamesList {
}

class ListPlatformBranchesResult {
  public Token $next_token;
  public PlatformBranchSummaryList $platform_branch_summary_list;
}

class EnvironmentResourceDescription {
  public QueueList $queues;
  public EnvironmentName $environment_name;
  public AutoScalingGroupList $auto_scaling_groups;
  public InstanceList $instances;
  public LaunchConfigurationList $launch_configurations;
  public LaunchTemplateList $launch_templates;
  public LoadBalancerList $load_balancers;
  public TriggerList $triggers;
}

class LaunchTemplateList {
}

class BranchOrder {
}

class ConfigurationOptionSetting {
  public OptionNamespace $namespace;
  public ConfigurationOptionName $option_name;
  public ConfigurationOptionValue $value;
  public ResourceName $resource_name;
}

class InstanceList {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class EventMessage {
}

class MaxRecords {
}

class PlatformProgrammingLanguages {
}

class TerminateEnvForce {
}

class CreateEnvironmentMessage {
  public SolutionStackName $solution_stack_name;
  public ConfigurationOptionSettingsList $option_settings;
  public ApplicationName $application_name;
  public EnvironmentName $environment_name;
  public DNSCnamePrefix $cname_prefix;
  public EnvironmentTier $tier;
  public Tags $tags;
  public ConfigurationTemplateName $template_name;
  public GroupName $group_name;
  public Description $description;
  public VersionLabel $version_label;
  public PlatformArn $platform_arn;
  public OptionsSpecifierList $options_to_remove;
}

class DNSCname {
}

class TerminateEnvironmentMessage {
  public EnvironmentName $environment_name;
  public TerminateEnvironmentResources $terminate_resources;
  public ForceTerminate $force_terminate;
  public EnvironmentId $environment_id;
}

class CreateApplicationVersionMessage {
  public BuildConfiguration $build_configuration;
  public ApplicationVersionProccess $process;
  public ApplicationName $application_name;
  public VersionLabel $version_label;
  public SourceBuildInformation $source_build_information;
  public S3Location $source_bundle;
  public Description $description;
  public AutoCreateApplication $auto_create_application;
  public Tags $tags;
}

class EnvironmentTier {
  public string $name;
  public string $type;
  public string $version;
}

class LoadBalancer {
  public ResourceId $name;
}

class S3SubscriptionRequiredException {
}

class EnvironmentResourcesDescription {
  public LoadBalancerDescription $load_balancer;
}

class Integer {
}

class DescribeConfigurationSettingsMessage {
  public ConfigurationTemplateName $template_name;
  public EnvironmentName $environment_name;
  public ApplicationName $application_name;
}

class LoadBalancerList {
}

class ResourceQuotas {
  public ResourceQuota $application_quota;
  public ResourceQuota $application_version_quota;
  public ResourceQuota $environment_quota;
  public ResourceQuota $configuration_template_quota;
  public ResourceQuota $custom_platform_quota;
}

class SearchFilterValues {
}

class SourceConfiguration {
  public ApplicationName $application_name;
  public ConfigurationTemplateName $template_name;
}

class SupportedAddonList {
}

class ApplicationArn {
}

class DescribeConfigurationOptionsMessage {
  public ApplicationName $application_name;
  public ConfigurationTemplateName $template_name;
  public EnvironmentName $environment_name;
  public SolutionStackName $solution_stack_name;
  public PlatformArn $platform_arn;
  public OptionsSpecifierList $options;
}

class TagKeyList {
}

class ApplicationDescriptionMessage {
  public ApplicationDescription $application;
}

class ApplicationMetrics {
  public NullableInteger $duration;
  public RequestCount $request_count;
  public StatusCodes $status_codes;
  public Latency $latency;
}

class PlatformFilterType {
}

class ValidationSeverity {
}

class ApplyEnvironmentManagedActionResult {
  public string $action_id;
  public string $action_description;
  public ActionType $action_type;
  public string $status;
}

class OptionRestrictionRegex {
  public RegexPattern $pattern;
  public RegexLabel $label;
}

class SourceBuildInformation {
  public SourceType $source_type;
  public SourceRepository $source_repository;
  public SourceLocation $source_location;
}

class UpdateEnvironmentMessage {
  public OptionsSpecifierList $options_to_remove;
  public EnvironmentName $environment_name;
  public GroupName $group_name;
  public PlatformArn $platform_arn;
  public EnvironmentTier $tier;
  public VersionLabel $version_label;
  public ConfigurationTemplateName $template_name;
  public SolutionStackName $solution_stack_name;
  public ConfigurationOptionSettingsList $option_settings;
  public ApplicationName $application_name;
  public EnvironmentId $environment_id;
  public Description $description;
}

class ConfigurationOptionsDescription {
  public SolutionStackName $solution_stack_name;
  public PlatformArn $platform_arn;
  public ConfigurationOptionDescriptionsList $options;
}

class InsufficientPrivilegesException {
}

class EventDescription {
  public EventMessage $message;
  public ApplicationName $application_name;
  public VersionLabel $version_label;
  public RequestId $request_id;
  public EventSeverity $severity;
  public EventDate $event_date;
  public ConfigurationTemplateName $template_name;
  public EnvironmentName $environment_name;
  public PlatformArn $platform_arn;
}

class SwapEnvironmentCNAMEsMessage {
  public EnvironmentId $source_environment_id;
  public EnvironmentName $source_environment_name;
  public EnvironmentId $destination_environment_id;
  public EnvironmentName $destination_environment_name;
}

class ConfigurationOptionPossibleValues {
}

class EnvironmentInfoDescriptionList {
}

class DescribeEnvironmentsMessage {
  public ApplicationName $application_name;
  public VersionLabel $version_label;
  public EnvironmentIdList $environment_ids;
  public EnvironmentNamesList $environment_names;
  public IncludeDeleted $include_deleted;
  public IncludeDeletedBackTo $included_deleted_back_to;
  public MaxRecords $max_records;
  public Token $next_token;
}

class S3Location {
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_key;
}

class CheckDNSAvailabilityResultMessage {
  public CnameAvailability $available;
  public DNSCname $fully_qualified_cname;
}

class ComputeType {
}

class ConfigurationTemplateName {
}

class DescribeEnvironmentManagedActionsRequest {
  public string $environment_name;
  public string $environment_id;
  public ActionStatus $status;
}

class ElasticBeanstalkServiceException {
  public ExceptionMessage $message;
}

class PlatformName {
}

class Tags {
}

class TooManyConfigurationTemplatesException {
}

class ARN {
}

class BranchName {
}

class OperatingSystemName {
}

class Queue {
  public string $name;
  public string $url;
}

class UserDefinedOption {
}

class AvailableSolutionStackNamesList {
}

class DescribeEventsMessage {
  public RequestId $request_id;
  public TimeFilterStart $start_time;
  public Token $next_token;
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
  public PlatformArn $platform_arn;
  public EventSeverity $severity;
  public TimeFilterEnd $end_time;
  public MaxRecords $max_records;
  public ApplicationName $application_name;
  public VersionLabel $version_label;
  public ConfigurationTemplateName $template_name;
}

class DeleteConfigurationTemplateMessage {
  public ApplicationName $application_name;
  public ConfigurationTemplateName $template_name;
}

class DescribeInstancesHealthResult {
  public InstanceHealthList $instance_health_list;
  public RefreshedAt $refreshed_at;
  public NextToken $next_token;
}

class EnvironmentInfoType {
}

class InvalidRequestException {
}

class TooManyTagsException {
}

class AutoCreateApplication {
}

class CodeBuildNotInServiceRegionException {
}

class ResourceTagsDescriptionMessage {
  public ResourceArn $resource_arn;
  public TagList $resource_tags;
}

class SearchFilterAttribute {
}

class SearchFilterOperator {
}

class ValidateConfigurationSettingsMessage {
  public ApplicationName $application_name;
  public ConfigurationTemplateName $template_name;
  public EnvironmentName $environment_name;
  public ConfigurationOptionSettingsList $option_settings;
}

class VirtualizationType {
}

class EnvironmentResourceDescriptionsMessage {
  public EnvironmentResourceDescription $environment_resources;
}

class ListPlatformVersionsResult {
  public Token $next_token;
  public PlatformSummaryList $platform_summary_list;
}

class SourceLocation {
}

class AbortEnvironmentUpdateMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
}

class ConfigurationOptionSeverity {
}

class DeploymentTimestamp {
}

class OptionNamespace {
}

class ResourceQuota {
  public BoxedInt $maximum;
}

class ApplicationDescriptionList {
}

class ApplicationVersionProccess {
}

class OperatingSystemVersion {
}

class TriggerList {
}

class CustomAmiList {
}

class LoadBalancerDescription {
  public string $load_balancer_name;
  public string $domain;
  public LoadBalancerListenersDescription $listeners;
}

class UpdateApplicationResourceLifecycleMessage {
  public ApplicationName $application_name;
  public ApplicationResourceLifecycleConfig $resource_lifecycle_config;
}

class UpdateConfigurationTemplateMessage {
  public ApplicationName $application_name;
  public ConfigurationTemplateName $template_name;
  public Description $description;
  public ConfigurationOptionSettingsList $option_settings;
  public OptionsSpecifierList $options_to_remove;
}

class ApplicationVersionDescription {
  public string $build_arn;
  public S3Location $source_bundle;
  public CreationDate $date_created;
  public ApplicationVersionStatus $status;
  public ApplicationName $application_name;
  public Description $description;
  public SourceBuildInformation $source_build_information;
  public ApplicationVersionArn $application_version_arn;
  public VersionLabel $version_label;
  public UpdateDate $date_updated;
}

class DescribeEnvironmentManagedActionHistoryRequest {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
  public string $next_token;
  public int $max_items;
}

class PlatformVersion {
}

class ManagedActionInvalidStateException {
}

class PlatformArn {
}

class MaxAgeRule {
  public BoxedBoolean $enabled;
  public BoxedInt $max_age_in_days;
  public BoxedBoolean $delete_source_from_s_3;
}

class EventDescriptionList {
}

class PlatformFramework {
  public string $name;
  public string $version;
}

class DescribeEnvironmentManagedActionHistoryResult {
  public ManagedActionHistoryItems $managed_action_history_items;
  public string $next_token;
}

class DescribeInstancesHealthRequest {
  public EnvironmentName $environment_name;
  public EnvironmentId $environment_id;
  public InstancesHealthAttributes $attribute_names;
  public NextToken $next_token;
}

class S3LocationNotInServiceRegionException {
}

class FailureType {
}

class NonEmptyString {
}

class Ec2InstanceId {
}

class ApplicationDescriptionsMessage {
  public ApplicationDescriptionList $applications;
}

class CreateConfigurationTemplateMessage {
  public PlatformArn $platform_arn;
  public ConfigurationOptionSettingsList $option_settings;
  public SolutionStackName $solution_stack_name;
  public ConfigurationTemplateName $template_name;
  public SourceConfiguration $source_configuration;
  public EnvironmentId $environment_id;
  public Description $description;
  public Tags $tags;
  public ApplicationName $application_name;
}

class EnvironmentId {
}

class LaunchConfigurationList {
}

class SingleInstanceHealth {
  public Deployment $deployment;
  public string $availability_zone;
  public InstanceId $instance_id;
  public string $color;
  public LaunchedAt $launched_at;
  public SystemStatus $system;
  public string $instance_type;
  public string $health_status;
  public Causes $causes;
  public ApplicationMetrics $application_metrics;
}

class UpdateDate {
}

class ValidationMessage {
  public ConfigurationOptionName $option_name;
  public ValidationMessageString $message;
  public ValidationSeverity $severity;
  public OptionNamespace $namespace;
}

class ConfigurationOptionName {
}

class EnvironmentHealthStatus {
}

class ResourceNotFoundException {
}

class SearchFilterValue {
}

class TooManyApplicationsException {
}

class InstancesHealthAttribute {
}

class PlatformFilterValueList {
}

class DescribeEnvironmentHealthResult {
  public string $health_status;
  public EnvironmentHealth $status;
  public string $color;
  public Causes $causes;
  public ApplicationMetrics $application_metrics;
  public InstanceHealthSummary $instances_health;
  public RefreshedAt $refreshed_at;
  public EnvironmentName $environment_name;
}

class Description {
}

class ForceTerminate {
}

class PlatformBranchLifecycleState {
}

class PlatformCategory {
}

class PlatformDescription {
  public PlatformStatus $platform_status;
  public PlatformCategory $platform_category;
  public Maintainer $maintainer;
  public PlatformProgrammingLanguages $programming_languages;
  public PlatformLifecycleState $platform_lifecycle_state;
  public CreationDate $date_created;
  public UpdateDate $date_updated;
  public BranchName $platform_branch_name;
  public OperatingSystemVersion $operating_system_version;
  public PlatformFrameworks $frameworks;
  public SupportedTierList $supported_tier_list;
  public PlatformArn $platform_arn;
  public PlatformName $platform_name;
  public PlatformVersion $platform_version;
  public SolutionStackName $solution_stack_name;
  public Description $description;
  public SupportedAddonList $supported_addon_list;
  public PlatformBranchLifecycleState $platform_branch_lifecycle_state;
  public PlatformOwner $platform_owner;
  public OperatingSystemName $operating_system_name;
  public CustomAmiList $custom_ami_list;
}

class ApplicationVersionLifecycleConfig {
  public MaxCountRule $max_count_rule;
  public MaxAgeRule $max_age_rule;
}

class DeleteApplicationMessage {
  public ApplicationName $application_name;
  public TerminateEnvForce $terminate_env_by_force;
}

class ResourceId {
}

class SystemStatus {
  public CPUUtilization $cpu_utilization;
  public LoadAverage $load_average;
}

class Listener {
  public string $protocol;
  public int $port;
}

class PlatformStatus {
}

class CustomAmi {
  public VirtualizationType $virtualization_type;
  public ImageId $image_id;
}

class DNSCnamePrefix {
}

class DescribeEnvironmentHealthRequest {
  public EnvironmentName $environment_name;
  public EnvironmentId $environment_id;
  public EnvironmentHealthAttributes $attribute_names;
}

class EnvironmentHealth {
}

class GroupName {
}

class InstanceId {
}

class ApplicationName {
}

class ConfigurationOptionPossibleValue {
}

class PlatformFilters {
}

class VersionLabel {
}

class PlatformFrameworks {
}

class VersionLabels {
}

class IncludeDeleted {
}

class PlatformBranchMaxRecords {
}

class SourceRepository {
}

class ApplyEnvironmentManagedActionRequest {
  public string $environment_name;
  public string $environment_id;
  public string $action_id;
}

class AutoScalingGroup {
  public ResourceId $name;
}

class ApplicationVersionDescriptionList {
}

class ListPlatformBranchesRequest {
  public SearchFilters $filters;
  public PlatformBranchMaxRecords $max_records;
  public Token $next_token;
}

class ResourceTypeNotSupportedException {
}

class SolutionStackDescription {
  public SolutionStackName $solution_stack_name;
  public SolutionStackFileTypeList $permitted_file_types;
}

class ApplicationNamesList {
}

class ApplicationResourceLifecycleConfig {
  public string $service_role;
  public ApplicationVersionLifecycleConfig $version_lifecycle_config;
}


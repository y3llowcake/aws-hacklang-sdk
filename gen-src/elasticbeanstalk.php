<?hh // strict
namespace slack\aws\elasticbeanstalk;

interface Elastic Beanstalk {
  public function AbortEnvironmentUpdate(AbortEnvironmentUpdateMessage): Awaitable<Errors\Error>;
  public function ApplyEnvironmentManagedAction(ApplyEnvironmentManagedActionRequest): Awaitable<Errors\Result<ApplyEnvironmentManagedActionResult>>;
  public function CheckDNSAvailability(CheckDNSAvailabilityMessage): Awaitable<Errors\Result<CheckDNSAvailabilityResultMessage>>;
  public function ComposeEnvironments(ComposeEnvironmentsMessage): Awaitable<Errors\Result<EnvironmentDescriptionsMessage>>;
  public function CreateApplication(CreateApplicationMessage): Awaitable<Errors\Result<ApplicationDescriptionMessage>>;
  public function CreateApplicationVersion(CreateApplicationVersionMessage): Awaitable<Errors\Result<ApplicationVersionDescriptionMessage>>;
  public function CreateConfigurationTemplate(CreateConfigurationTemplateMessage): Awaitable<Errors\Result<ConfigurationSettingsDescription>>;
  public function CreateEnvironment(CreateEnvironmentMessage): Awaitable<Errors\Result<EnvironmentDescription>>;
  public function CreatePlatformVersion(CreatePlatformVersionRequest): Awaitable<Errors\Result<CreatePlatformVersionResult>>;
  public function CreateStorageLocation(): Awaitable<Errors\Result<CreateStorageLocationResultMessage>>;
  public function DeleteApplication(DeleteApplicationMessage): Awaitable<Errors\Error>;
  public function DeleteApplicationVersion(DeleteApplicationVersionMessage): Awaitable<Errors\Error>;
  public function DeleteConfigurationTemplate(DeleteConfigurationTemplateMessage): Awaitable<Errors\Error>;
  public function DeleteEnvironmentConfiguration(DeleteEnvironmentConfigurationMessage): Awaitable<Errors\Error>;
  public function DeletePlatformVersion(DeletePlatformVersionRequest): Awaitable<Errors\Result<DeletePlatformVersionResult>>;
  public function DescribeAccountAttributes(): Awaitable<Errors\Result<DescribeAccountAttributesResult>>;
  public function DescribeApplicationVersions(DescribeApplicationVersionsMessage): Awaitable<Errors\Result<ApplicationVersionDescriptionsMessage>>;
  public function DescribeApplications(DescribeApplicationsMessage): Awaitable<Errors\Result<ApplicationDescriptionsMessage>>;
  public function DescribeConfigurationOptions(DescribeConfigurationOptionsMessage): Awaitable<Errors\Result<ConfigurationOptionsDescription>>;
  public function DescribeConfigurationSettings(DescribeConfigurationSettingsMessage): Awaitable<Errors\Result<ConfigurationSettingsDescriptions>>;
  public function DescribeEnvironmentHealth(DescribeEnvironmentHealthRequest): Awaitable<Errors\Result<DescribeEnvironmentHealthResult>>;
  public function DescribeEnvironmentManagedActionHistory(DescribeEnvironmentManagedActionHistoryRequest): Awaitable<Errors\Result<DescribeEnvironmentManagedActionHistoryResult>>;
  public function DescribeEnvironmentManagedActions(DescribeEnvironmentManagedActionsRequest): Awaitable<Errors\Result<DescribeEnvironmentManagedActionsResult>>;
  public function DescribeEnvironmentResources(DescribeEnvironmentResourcesMessage): Awaitable<Errors\Result<EnvironmentResourceDescriptionsMessage>>;
  public function DescribeEnvironments(DescribeEnvironmentsMessage): Awaitable<Errors\Result<EnvironmentDescriptionsMessage>>;
  public function DescribeEvents(DescribeEventsMessage): Awaitable<Errors\Result<EventDescriptionsMessage>>;
  public function DescribeInstancesHealth(DescribeInstancesHealthRequest): Awaitable<Errors\Result<DescribeInstancesHealthResult>>;
  public function DescribePlatformVersion(DescribePlatformVersionRequest): Awaitable<Errors\Result<DescribePlatformVersionResult>>;
  public function ListAvailableSolutionStacks(): Awaitable<Errors\Result<ListAvailableSolutionStacksResultMessage>>;
  public function ListPlatformBranches(ListPlatformBranchesRequest): Awaitable<Errors\Result<ListPlatformBranchesResult>>;
  public function ListPlatformVersions(ListPlatformVersionsRequest): Awaitable<Errors\Result<ListPlatformVersionsResult>>;
  public function ListTagsForResource(ListTagsForResourceMessage): Awaitable<Errors\Result<ResourceTagsDescriptionMessage>>;
  public function RebuildEnvironment(RebuildEnvironmentMessage): Awaitable<Errors\Error>;
  public function RequestEnvironmentInfo(RequestEnvironmentInfoMessage): Awaitable<Errors\Error>;
  public function RestartAppServer(RestartAppServerMessage): Awaitable<Errors\Error>;
  public function RetrieveEnvironmentInfo(RetrieveEnvironmentInfoMessage): Awaitable<Errors\Result<RetrieveEnvironmentInfoResultMessage>>;
  public function SwapEnvironmentCNAMEs(SwapEnvironmentCNAMEsMessage): Awaitable<Errors\Error>;
  public function TerminateEnvironment(TerminateEnvironmentMessage): Awaitable<Errors\Result<EnvironmentDescription>>;
  public function UpdateApplication(UpdateApplicationMessage): Awaitable<Errors\Result<ApplicationDescriptionMessage>>;
  public function UpdateApplicationResourceLifecycle(UpdateApplicationResourceLifecycleMessage): Awaitable<Errors\Result<ApplicationResourceLifecycleDescriptionMessage>>;
  public function UpdateApplicationVersion(UpdateApplicationVersionMessage): Awaitable<Errors\Result<ApplicationVersionDescriptionMessage>>;
  public function UpdateConfigurationTemplate(UpdateConfigurationTemplateMessage): Awaitable<Errors\Result<ConfigurationSettingsDescription>>;
  public function UpdateEnvironment(UpdateEnvironmentMessage): Awaitable<Errors\Result<EnvironmentDescription>>;
  public function UpdateTagsForResource(UpdateTagsForResourceMessage): Awaitable<Errors\Error>;
  public function ValidateConfigurationSettings(ValidateConfigurationSettingsMessage): Awaitable<Errors\Result<ConfigurationSettingsValidationMessages>>;
}

class ARN {
}

class AbortEnvironmentUpdateMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
}

class AbortableOperationInProgress {
}

class ActionHistoryStatus {
}

class ActionStatus {
}

class ActionType {
}

class ApplicationArn {
}

class ApplicationDescription {
  public ApplicationArn $application_arn;
  public ApplicationName $application_name;
  public ConfigurationTemplateNamesList $configuration_templates;
  public CreationDate $date_created;
  public UpdateDate $date_updated;
  public Description $description;
  public ApplicationResourceLifecycleConfig $resource_lifecycle_config;
  public VersionLabelsList $versions;
}

class ApplicationDescriptionList {
}

class ApplicationDescriptionMessage {
  public ApplicationDescription $application;
}

class ApplicationDescriptionsMessage {
  public ApplicationDescriptionList $applications;
}

class ApplicationMetrics {
  public NullableInteger $duration;
  public Latency $latency;
  public RequestCount $request_count;
  public StatusCodes $status_codes;
}

class ApplicationName {
}

class ApplicationNamesList {
}

class ApplicationResourceLifecycleConfig {
  public string $service_role;
  public ApplicationVersionLifecycleConfig $version_lifecycle_config;
}

class ApplicationResourceLifecycleDescriptionMessage {
  public ApplicationName $application_name;
  public ApplicationResourceLifecycleConfig $resource_lifecycle_config;
}

class ApplicationVersionArn {
}

class ApplicationVersionDescription {
  public ApplicationName $application_name;
  public ApplicationVersionArn $application_version_arn;
  public string $build_arn;
  public CreationDate $date_created;
  public UpdateDate $date_updated;
  public Description $description;
  public SourceBuildInformation $source_build_information;
  public S3Location $source_bundle;
  public ApplicationVersionStatus $status;
  public VersionLabel $version_label;
}

class ApplicationVersionDescriptionList {
}

class ApplicationVersionDescriptionMessage {
  public ApplicationVersionDescription $application_version;
}

class ApplicationVersionDescriptionsMessage {
  public ApplicationVersionDescriptionList $application_versions;
  public Token $next_token;
}

class ApplicationVersionLifecycleConfig {
  public MaxAgeRule $max_age_rule;
  public MaxCountRule $max_count_rule;
}

class ApplicationVersionProccess {
}

class ApplicationVersionStatus {
}

class ApplyEnvironmentManagedActionRequest {
  public string $action_id;
  public string $environment_id;
  public string $environment_name;
}

class ApplyEnvironmentManagedActionResult {
  public string $action_description;
  public string $action_id;
  public ActionType $action_type;
  public string $status;
}

class AutoCreateApplication {
}

class AutoScalingGroup {
  public ResourceId $name;
}

class AutoScalingGroupList {
}

class AvailableSolutionStackDetailsList {
}

class AvailableSolutionStackNamesList {
}

class BoxedBoolean {
}

class BoxedInt {
}

class BranchName {
}

class BranchOrder {
}

class BuildConfiguration {
  public string $artifact_name;
  public NonEmptyString $code_build_service_role;
  public ComputeType $compute_type;
  public NonEmptyString $image;
  public BoxedInt $timeout_in_minutes;
}

class Builder {
  public ARN $arn;
}

class CPUUtilization {
  public NullableDouble $io_wait;
  public NullableDouble $irq;
  public NullableDouble $idle;
  public NullableDouble $nice;
  public NullableDouble $privileged;
  public NullableDouble $soft_irq;
  public NullableDouble $system;
  public NullableDouble $user;
}

class Cause {
}

class Causes {
}

class CheckDNSAvailabilityMessage {
  public DNSCnamePrefix $cname_prefix;
}

class CheckDNSAvailabilityResultMessage {
  public CnameAvailability $available;
  public DNSCname $fully_qualified_cname;
}

class CnameAvailability {
}

class CodeBuildNotInServiceRegionException {
}

class ComposeEnvironmentsMessage {
  public ApplicationName $application_name;
  public GroupName $group_name;
  public VersionLabels $version_labels;
}

class ComputeType {
}

class ConfigurationDeploymentStatus {
}

class ConfigurationOptionDefaultValue {
}

class ConfigurationOptionDescription {
  public ConfigurationOptionSeverity $change_severity;
  public ConfigurationOptionDefaultValue $default_value;
  public OptionRestrictionMaxLength $max_length;
  public OptionRestrictionMaxValue $max_value;
  public OptionRestrictionMinValue $min_value;
  public ConfigurationOptionName $name;
  public OptionNamespace $namespace;
  public OptionRestrictionRegex $regex;
  public UserDefinedOption $user_defined;
  public ConfigurationOptionPossibleValues $value_options;
  public ConfigurationOptionValueType $value_type;
}

class ConfigurationOptionDescriptionsList {
}

class ConfigurationOptionName {
}

class ConfigurationOptionPossibleValue {
}

class ConfigurationOptionPossibleValues {
}

class ConfigurationOptionSetting {
  public OptionNamespace $namespace;
  public ConfigurationOptionName $option_name;
  public ResourceName $resource_name;
  public ConfigurationOptionValue $value;
}

class ConfigurationOptionSettingsList {
}

class ConfigurationOptionSeverity {
}

class ConfigurationOptionValue {
}

class ConfigurationOptionValueType {
}

class ConfigurationOptionsDescription {
  public ConfigurationOptionDescriptionsList $options;
  public PlatformArn $platform_arn;
  public SolutionStackName $solution_stack_name;
}

class ConfigurationSettingsDescription {
  public ApplicationName $application_name;
  public CreationDate $date_created;
  public UpdateDate $date_updated;
  public ConfigurationDeploymentStatus $deployment_status;
  public Description $description;
  public EnvironmentName $environment_name;
  public ConfigurationOptionSettingsList $option_settings;
  public PlatformArn $platform_arn;
  public SolutionStackName $solution_stack_name;
  public ConfigurationTemplateName $template_name;
}

class ConfigurationSettingsDescriptionList {
}

class ConfigurationSettingsDescriptions {
  public ConfigurationSettingsDescriptionList $configuration_settings;
}

class ConfigurationSettingsValidationMessages {
  public ValidationMessagesList $messages;
}

class ConfigurationTemplateName {
}

class ConfigurationTemplateNamesList {
}

class CreateApplicationMessage {
  public ApplicationName $application_name;
  public Description $description;
  public ApplicationResourceLifecycleConfig $resource_lifecycle_config;
  public Tags $tags;
}

class CreateApplicationVersionMessage {
  public ApplicationName $application_name;
  public AutoCreateApplication $auto_create_application;
  public BuildConfiguration $build_configuration;
  public Description $description;
  public ApplicationVersionProccess $process;
  public SourceBuildInformation $source_build_information;
  public S3Location $source_bundle;
  public Tags $tags;
  public VersionLabel $version_label;
}

class CreateConfigurationTemplateMessage {
  public ApplicationName $application_name;
  public Description $description;
  public EnvironmentId $environment_id;
  public ConfigurationOptionSettingsList $option_settings;
  public PlatformArn $platform_arn;
  public SolutionStackName $solution_stack_name;
  public SourceConfiguration $source_configuration;
  public Tags $tags;
  public ConfigurationTemplateName $template_name;
}

class CreateEnvironmentMessage {
  public ApplicationName $application_name;
  public DNSCnamePrefix $cname_prefix;
  public Description $description;
  public EnvironmentName $environment_name;
  public GroupName $group_name;
  public ConfigurationOptionSettingsList $option_settings;
  public OptionsSpecifierList $options_to_remove;
  public PlatformArn $platform_arn;
  public SolutionStackName $solution_stack_name;
  public Tags $tags;
  public ConfigurationTemplateName $template_name;
  public EnvironmentTier $tier;
  public VersionLabel $version_label;
}

class CreatePlatformVersionRequest {
  public EnvironmentName $environment_name;
  public ConfigurationOptionSettingsList $option_settings;
  public S3Location $platform_definition_bundle;
  public PlatformName $platform_name;
  public PlatformVersion $platform_version;
  public Tags $tags;
}

class CreatePlatformVersionResult {
  public Builder $builder;
  public PlatformSummary $platform_summary;
}

class CreateStorageLocationResultMessage {
  public S3Bucket $s_3_bucket;
}

class CreationDate {
}

class CustomAmi {
  public ImageId $image_id;
  public VirtualizationType $virtualization_type;
}

class CustomAmiList {
}

class DNSCname {
}

class DNSCnamePrefix {
}

class DeleteApplicationMessage {
  public ApplicationName $application_name;
  public TerminateEnvForce $terminate_env_by_force;
}

class DeleteApplicationVersionMessage {
  public ApplicationName $application_name;
  public DeleteSourceBundle $delete_source_bundle;
  public VersionLabel $version_label;
}

class DeleteConfigurationTemplateMessage {
  public ApplicationName $application_name;
  public ConfigurationTemplateName $template_name;
}

class DeleteEnvironmentConfigurationMessage {
  public ApplicationName $application_name;
  public EnvironmentName $environment_name;
}

class DeletePlatformVersionRequest {
  public PlatformArn $platform_arn;
}

class DeletePlatformVersionResult {
  public PlatformSummary $platform_summary;
}

class DeleteSourceBundle {
}

class Deployment {
  public NullableLong $deployment_id;
  public DeploymentTimestamp $deployment_time;
  public string $status;
  public string $version_label;
}

class DeploymentTimestamp {
}

class DescribeAccountAttributesResult {
  public ResourceQuotas $resource_quotas;
}

class DescribeApplicationVersionsMessage {
  public ApplicationName $application_name;
  public MaxRecords $max_records;
  public Token $next_token;
  public VersionLabelsList $version_labels;
}

class DescribeApplicationsMessage {
  public ApplicationNamesList $application_names;
}

class DescribeConfigurationOptionsMessage {
  public ApplicationName $application_name;
  public EnvironmentName $environment_name;
  public OptionsSpecifierList $options;
  public PlatformArn $platform_arn;
  public SolutionStackName $solution_stack_name;
  public ConfigurationTemplateName $template_name;
}

class DescribeConfigurationSettingsMessage {
  public ApplicationName $application_name;
  public EnvironmentName $environment_name;
  public ConfigurationTemplateName $template_name;
}

class DescribeEnvironmentHealthRequest {
  public EnvironmentHealthAttributes $attribute_names;
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
}

class DescribeEnvironmentHealthResult {
  public ApplicationMetrics $application_metrics;
  public Causes $causes;
  public string $color;
  public EnvironmentName $environment_name;
  public string $health_status;
  public InstanceHealthSummary $instances_health;
  public RefreshedAt $refreshed_at;
  public EnvironmentHealth $status;
}

class DescribeEnvironmentManagedActionHistoryRequest {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
  public int $max_items;
  public string $next_token;
}

class DescribeEnvironmentManagedActionHistoryResult {
  public ManagedActionHistoryItems $managed_action_history_items;
  public string $next_token;
}

class DescribeEnvironmentManagedActionsRequest {
  public string $environment_id;
  public string $environment_name;
  public ActionStatus $status;
}

class DescribeEnvironmentManagedActionsResult {
  public ManagedActions $managed_actions;
}

class DescribeEnvironmentResourcesMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
}

class DescribeEnvironmentsMessage {
  public ApplicationName $application_name;
  public EnvironmentIdList $environment_ids;
  public EnvironmentNamesList $environment_names;
  public IncludeDeleted $include_deleted;
  public IncludeDeletedBackTo $included_deleted_back_to;
  public MaxRecords $max_records;
  public Token $next_token;
  public VersionLabel $version_label;
}

class DescribeEventsMessage {
  public ApplicationName $application_name;
  public TimeFilterEnd $end_time;
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
  public MaxRecords $max_records;
  public Token $next_token;
  public PlatformArn $platform_arn;
  public RequestId $request_id;
  public EventSeverity $severity;
  public TimeFilterStart $start_time;
  public ConfigurationTemplateName $template_name;
  public VersionLabel $version_label;
}

class DescribeInstancesHealthRequest {
  public InstancesHealthAttributes $attribute_names;
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
  public NextToken $next_token;
}

class DescribeInstancesHealthResult {
  public InstanceHealthList $instance_health_list;
  public NextToken $next_token;
  public RefreshedAt $refreshed_at;
}

class DescribePlatformVersionRequest {
  public PlatformArn $platform_arn;
}

class DescribePlatformVersionResult {
  public PlatformDescription $platform_description;
}

class Description {
}

class Ec2InstanceId {
}

class ElasticBeanstalkServiceException {
  public ExceptionMessage $message;
}

class EndpointURL {
}

class EnvironmentArn {
}

class EnvironmentDescription {
  public AbortableOperationInProgress $abortable_operation_in_progress;
  public ApplicationName $application_name;
  public DNSCname $cname;
  public CreationDate $date_created;
  public UpdateDate $date_updated;
  public Description $description;
  public EndpointURL $endpoint_url;
  public EnvironmentArn $environment_arn;
  public EnvironmentId $environment_id;
  public EnvironmentLinks $environment_links;
  public EnvironmentName $environment_name;
  public EnvironmentHealth $health;
  public EnvironmentHealthStatus $health_status;
  public PlatformArn $platform_arn;
  public EnvironmentResourcesDescription $resources;
  public SolutionStackName $solution_stack_name;
  public EnvironmentStatus $status;
  public ConfigurationTemplateName $template_name;
  public EnvironmentTier $tier;
  public VersionLabel $version_label;
}

class EnvironmentDescriptionsList {
}

class EnvironmentDescriptionsMessage {
  public EnvironmentDescriptionsList $environments;
  public Token $next_token;
}

class EnvironmentHealth {
}

class EnvironmentHealthAttribute {
}

class EnvironmentHealthAttributes {
}

class EnvironmentHealthStatus {
}

class EnvironmentId {
}

class EnvironmentIdList {
}

class EnvironmentInfoDescription {
  public Ec2InstanceId $ec_2_instance_id;
  public EnvironmentInfoType $info_type;
  public Message $message;
  public SampleTimestamp $sample_timestamp;
}

class EnvironmentInfoDescriptionList {
}

class EnvironmentInfoType {
}

class EnvironmentLink {
  public string $environment_name;
  public string $link_name;
}

class EnvironmentLinks {
}

class EnvironmentName {
}

class EnvironmentNamesList {
}

class EnvironmentResourceDescription {
  public AutoScalingGroupList $auto_scaling_groups;
  public EnvironmentName $environment_name;
  public InstanceList $instances;
  public LaunchConfigurationList $launch_configurations;
  public LaunchTemplateList $launch_templates;
  public LoadBalancerList $load_balancers;
  public QueueList $queues;
  public TriggerList $triggers;
}

class EnvironmentResourceDescriptionsMessage {
  public EnvironmentResourceDescription $environment_resources;
}

class EnvironmentResourcesDescription {
  public LoadBalancerDescription $load_balancer;
}

class EnvironmentStatus {
}

class EnvironmentTier {
  public string $name;
  public string $type;
  public string $version;
}

class EventDate {
}

class EventDescription {
  public ApplicationName $application_name;
  public EnvironmentName $environment_name;
  public EventDate $event_date;
  public EventMessage $message;
  public PlatformArn $platform_arn;
  public RequestId $request_id;
  public EventSeverity $severity;
  public ConfigurationTemplateName $template_name;
  public VersionLabel $version_label;
}

class EventDescriptionList {
}

class EventDescriptionsMessage {
  public EventDescriptionList $events;
  public Token $next_token;
}

class EventMessage {
}

class EventSeverity {
}

class ExceptionMessage {
}

class FailureType {
}

class FileTypeExtension {
}

class ForceTerminate {
}

class GroupName {
}

class ImageId {
}

class IncludeDeleted {
}

class IncludeDeletedBackTo {
}

class Instance {
  public ResourceId $id;
}

class InstanceHealthList {
}

class InstanceHealthSummary {
  public NullableInteger $degraded;
  public NullableInteger $info;
  public NullableInteger $no_data;
  public NullableInteger $ok;
  public NullableInteger $pending;
  public NullableInteger $severe;
  public NullableInteger $unknown;
  public NullableInteger $warning;
}

class InstanceId {
}

class InstanceList {
}

class InstancesHealthAttribute {
}

class InstancesHealthAttributes {
}

class InsufficientPrivilegesException {
}

class Integer {
}

class InvalidRequestException {
}

class Latency {
  public NullableDouble $p_10;
  public NullableDouble $p_50;
  public NullableDouble $p_75;
  public NullableDouble $p_85;
  public NullableDouble $p_90;
  public NullableDouble $p_95;
  public NullableDouble $p_99;
  public NullableDouble $p_999;
}

class LaunchConfiguration {
  public ResourceId $name;
}

class LaunchConfigurationList {
}

class LaunchTemplate {
  public ResourceId $id;
}

class LaunchTemplateList {
}

class LaunchedAt {
}

class ListAvailableSolutionStacksResultMessage {
  public AvailableSolutionStackDetailsList $solution_stack_details;
  public AvailableSolutionStackNamesList $solution_stacks;
}

class ListPlatformBranchesRequest {
  public SearchFilters $filters;
  public PlatformBranchMaxRecords $max_records;
  public Token $next_token;
}

class ListPlatformBranchesResult {
  public Token $next_token;
  public PlatformBranchSummaryList $platform_branch_summary_list;
}

class ListPlatformVersionsRequest {
  public PlatformFilters $filters;
  public PlatformMaxRecords $max_records;
  public Token $next_token;
}

class ListPlatformVersionsResult {
  public Token $next_token;
  public PlatformSummaryList $platform_summary_list;
}

class ListTagsForResourceMessage {
  public ResourceArn $resource_arn;
}

class Listener {
  public int $port;
  public string $protocol;
}

class LoadAverage {
}

class LoadAverageValue {
}

class LoadBalancer {
  public ResourceId $name;
}

class LoadBalancerDescription {
  public string $domain;
  public LoadBalancerListenersDescription $listeners;
  public string $load_balancer_name;
}

class LoadBalancerList {
}

class LoadBalancerListenersDescription {
}

class Maintainer {
}

class ManagedAction {
  public string $action_description;
  public string $action_id;
  public ActionType $action_type;
  public ActionStatus $status;
  public Timestamp $window_start_time;
}

class ManagedActionHistoryItem {
  public string $action_description;
  public string $action_id;
  public ActionType $action_type;
  public Timestamp $executed_time;
  public string $failure_description;
  public FailureType $failure_type;
  public Timestamp $finished_time;
  public ActionHistoryStatus $status;
}

class ManagedActionHistoryItems {
}

class ManagedActionInvalidStateException {
}

class ManagedActions {
}

class MaxAgeRule {
  public BoxedBoolean $delete_source_from_s_3;
  public BoxedBoolean $enabled;
  public BoxedInt $max_age_in_days;
}

class MaxCountRule {
  public BoxedBoolean $delete_source_from_s_3;
  public BoxedBoolean $enabled;
  public BoxedInt $max_count;
}

class MaxRecords {
}

class Message {
}

class NextToken {
}

class NonEmptyString {
}

class NullableDouble {
}

class NullableInteger {
}

class NullableLong {
}

class OperatingSystemName {
}

class OperatingSystemVersion {
}

class OperationInProgressException {
}

class OptionNamespace {
}

class OptionRestrictionMaxLength {
}

class OptionRestrictionMaxValue {
}

class OptionRestrictionMinValue {
}

class OptionRestrictionRegex {
  public RegexLabel $label;
  public RegexPattern $pattern;
}

class OptionSpecification {
  public OptionNamespace $namespace;
  public ConfigurationOptionName $option_name;
  public ResourceName $resource_name;
}

class OptionsSpecifierList {
}

class PlatformArn {
}

class PlatformBranchLifecycleState {
}

class PlatformBranchMaxRecords {
}

class PlatformBranchSummary {
  public BranchName $branch_name;
  public BranchOrder $branch_order;
  public PlatformBranchLifecycleState $lifecycle_state;
  public PlatformName $platform_name;
  public SupportedTierList $supported_tier_list;
}

class PlatformBranchSummaryList {
}

class PlatformCategory {
}

class PlatformDescription {
  public CustomAmiList $custom_ami_list;
  public CreationDate $date_created;
  public UpdateDate $date_updated;
  public Description $description;
  public PlatformFrameworks $frameworks;
  public Maintainer $maintainer;
  public OperatingSystemName $operating_system_name;
  public OperatingSystemVersion $operating_system_version;
  public PlatformArn $platform_arn;
  public PlatformBranchLifecycleState $platform_branch_lifecycle_state;
  public BranchName $platform_branch_name;
  public PlatformCategory $platform_category;
  public PlatformLifecycleState $platform_lifecycle_state;
  public PlatformName $platform_name;
  public PlatformOwner $platform_owner;
  public PlatformStatus $platform_status;
  public PlatformVersion $platform_version;
  public PlatformProgrammingLanguages $programming_languages;
  public SolutionStackName $solution_stack_name;
  public SupportedAddonList $supported_addon_list;
  public SupportedTierList $supported_tier_list;
}

class PlatformFilter {
  public PlatformFilterOperator $operator;
  public PlatformFilterType $type;
  public PlatformFilterValueList $values;
}

class PlatformFilterOperator {
}

class PlatformFilterType {
}

class PlatformFilterValue {
}

class PlatformFilterValueList {
}

class PlatformFilters {
}

class PlatformFramework {
  public string $name;
  public string $version;
}

class PlatformFrameworks {
}

class PlatformLifecycleState {
}

class PlatformMaxRecords {
}

class PlatformName {
}

class PlatformOwner {
}

class PlatformProgrammingLanguage {
  public string $name;
  public string $version;
}

class PlatformProgrammingLanguages {
}

class PlatformStatus {
}

class PlatformSummary {
  public OperatingSystemName $operating_system_name;
  public OperatingSystemVersion $operating_system_version;
  public PlatformArn $platform_arn;
  public PlatformBranchLifecycleState $platform_branch_lifecycle_state;
  public BranchName $platform_branch_name;
  public PlatformCategory $platform_category;
  public PlatformLifecycleState $platform_lifecycle_state;
  public PlatformOwner $platform_owner;
  public PlatformStatus $platform_status;
  public PlatformVersion $platform_version;
  public SupportedAddonList $supported_addon_list;
  public SupportedTierList $supported_tier_list;
}

class PlatformSummaryList {
}

class PlatformVersion {
}

class PlatformVersionStillReferencedException {
}

class Queue {
  public string $name;
  public string $url;
}

class QueueList {
}

class RebuildEnvironmentMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
}

class RefreshedAt {
}

class RegexLabel {
}

class RegexPattern {
}

class RequestCount {
}

class RequestEnvironmentInfoMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
  public EnvironmentInfoType $info_type;
}

class RequestId {
}

class ResourceArn {
}

class ResourceId {
}

class ResourceName {
}

class ResourceNotFoundException {
}

class ResourceQuota {
  public BoxedInt $maximum;
}

class ResourceQuotas {
  public ResourceQuota $application_quota;
  public ResourceQuota $application_version_quota;
  public ResourceQuota $configuration_template_quota;
  public ResourceQuota $custom_platform_quota;
  public ResourceQuota $environment_quota;
}

class ResourceTagsDescriptionMessage {
  public ResourceArn $resource_arn;
  public TagList $resource_tags;
}

class ResourceTypeNotSupportedException {
}

class RestartAppServerMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
}

class RetrieveEnvironmentInfoMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
  public EnvironmentInfoType $info_type;
}

class RetrieveEnvironmentInfoResultMessage {
  public EnvironmentInfoDescriptionList $environment_info;
}

class S3Bucket {
}

class S3Key {
}

class S3Location {
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_key;
}

class S3LocationNotInServiceRegionException {
}

class S3SubscriptionRequiredException {
}

class SampleTimestamp {
}

class SearchFilter {
  public SearchFilterAttribute $attribute;
  public SearchFilterOperator $operator;
  public SearchFilterValues $values;
}

class SearchFilterAttribute {
}

class SearchFilterOperator {
}

class SearchFilterValue {
}

class SearchFilterValues {
}

class SearchFilters {
}

class SingleInstanceHealth {
  public ApplicationMetrics $application_metrics;
  public string $availability_zone;
  public Causes $causes;
  public string $color;
  public Deployment $deployment;
  public string $health_status;
  public InstanceId $instance_id;
  public string $instance_type;
  public LaunchedAt $launched_at;
  public SystemStatus $system;
}

class SolutionStackDescription {
  public SolutionStackFileTypeList $permitted_file_types;
  public SolutionStackName $solution_stack_name;
}

class SolutionStackFileTypeList {
}

class SolutionStackName {
}

class SourceBuildInformation {
  public SourceLocation $source_location;
  public SourceRepository $source_repository;
  public SourceType $source_type;
}

class SourceBundleDeletionException {
}

class SourceConfiguration {
  public ApplicationName $application_name;
  public ConfigurationTemplateName $template_name;
}

class SourceLocation {
}

class SourceRepository {
}

class SourceType {
}

class StatusCodes {
  public NullableInteger $status_2_xx;
  public NullableInteger $status_3_xx;
  public NullableInteger $status_4_xx;
  public NullableInteger $status_5_xx;
}

class String {
}

class SupportedAddon {
}

class SupportedAddonList {
}

class SupportedTier {
}

class SupportedTierList {
}

class SwapEnvironmentCNAMEsMessage {
  public EnvironmentId $destination_environment_id;
  public EnvironmentName $destination_environment_name;
  public EnvironmentId $source_environment_id;
  public EnvironmentName $source_environment_name;
}

class SystemStatus {
  public CPUUtilization $cpu_utilization;
  public LoadAverage $load_average;
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

class TagValue {
}

class Tags {
}

class TerminateEnvForce {
}

class TerminateEnvironmentMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
  public ForceTerminate $force_terminate;
  public TerminateEnvironmentResources $terminate_resources;
}

class TerminateEnvironmentResources {
}

class TimeFilterEnd {
}

class TimeFilterStart {
}

class Timestamp {
}

class Token {
}

class TooManyApplicationVersionsException {
}

class TooManyApplicationsException {
}

class TooManyBucketsException {
}

class TooManyConfigurationTemplatesException {
}

class TooManyEnvironmentsException {
}

class TooManyPlatformsException {
}

class TooManyTagsException {
}

class Trigger {
  public ResourceId $name;
}

class TriggerList {
}

class UpdateApplicationMessage {
  public ApplicationName $application_name;
  public Description $description;
}

class UpdateApplicationResourceLifecycleMessage {
  public ApplicationName $application_name;
  public ApplicationResourceLifecycleConfig $resource_lifecycle_config;
}

class UpdateApplicationVersionMessage {
  public ApplicationName $application_name;
  public Description $description;
  public VersionLabel $version_label;
}

class UpdateConfigurationTemplateMessage {
  public ApplicationName $application_name;
  public Description $description;
  public ConfigurationOptionSettingsList $option_settings;
  public OptionsSpecifierList $options_to_remove;
  public ConfigurationTemplateName $template_name;
}

class UpdateDate {
}

class UpdateEnvironmentMessage {
  public ApplicationName $application_name;
  public Description $description;
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
  public GroupName $group_name;
  public ConfigurationOptionSettingsList $option_settings;
  public OptionsSpecifierList $options_to_remove;
  public PlatformArn $platform_arn;
  public SolutionStackName $solution_stack_name;
  public ConfigurationTemplateName $template_name;
  public EnvironmentTier $tier;
  public VersionLabel $version_label;
}

class UpdateTagsForResourceMessage {
  public ResourceArn $resource_arn;
  public TagList $tags_to_add;
  public TagKeyList $tags_to_remove;
}

class UserDefinedOption {
}

class ValidateConfigurationSettingsMessage {
  public ApplicationName $application_name;
  public EnvironmentName $environment_name;
  public ConfigurationOptionSettingsList $option_settings;
  public ConfigurationTemplateName $template_name;
}

class ValidationMessage {
  public ValidationMessageString $message;
  public OptionNamespace $namespace;
  public ConfigurationOptionName $option_name;
  public ValidationSeverity $severity;
}

class ValidationMessageString {
}

class ValidationMessagesList {
}

class ValidationSeverity {
}

class VersionLabel {
}

class VersionLabels {
}

class VersionLabelsList {
}

class VirtualizationType {
}


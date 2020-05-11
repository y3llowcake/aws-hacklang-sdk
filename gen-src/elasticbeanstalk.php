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

type ARN = string;

class AbortEnvironmentUpdateMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;

  public function __construct(shape(
  ?'environment_id' => EnvironmentId,
  ?'environment_name' => EnvironmentName,
  ) $s = shape()) {
    $this->environment_id = $environment_id ?? "";
    $this->environment_name = $environment_name ?? "";
  }
}

type AbortableOperationInProgress = bool;

type ActionHistoryStatus = string;

type ActionStatus = string;

type ActionType = string;

type ApplicationArn = string;

class ApplicationDescription {
  public ApplicationArn $application_arn;
  public ApplicationName $application_name;
  public ConfigurationTemplateNamesList $configuration_templates;
  public CreationDate $date_created;
  public UpdateDate $date_updated;
  public Description $description;
  public ApplicationResourceLifecycleConfig $resource_lifecycle_config;
  public VersionLabelsList $versions;

  public function __construct(shape(
  ?'application_arn' => ApplicationArn,
  ?'application_name' => ApplicationName,
  ?'configuration_templates' => ConfigurationTemplateNamesList,
  ?'date_created' => CreationDate,
  ?'date_updated' => UpdateDate,
  ?'description' => Description,
  ?'resource_lifecycle_config' => ApplicationResourceLifecycleConfig,
  ?'versions' => VersionLabelsList,
  ) $s = shape()) {
    $this->application_arn = $application_arn ?? "";
    $this->application_name = $application_name ?? "";
    $this->configuration_templates = $configuration_templates ?? [];
    $this->date_created = $date_created ?? 0;
    $this->date_updated = $date_updated ?? 0;
    $this->description = $description ?? "";
    $this->resource_lifecycle_config = $resource_lifecycle_config ?? null;
    $this->versions = $versions ?? [];
  }
}

type ApplicationDescriptionList = vec<ApplicationDescription>;

class ApplicationDescriptionMessage {
  public ApplicationDescription $application;

  public function __construct(shape(
  ?'application' => ApplicationDescription,
  ) $s = shape()) {
    $this->application = $application ?? null;
  }
}

class ApplicationDescriptionsMessage {
  public ApplicationDescriptionList $applications;

  public function __construct(shape(
  ?'applications' => ApplicationDescriptionList,
  ) $s = shape()) {
    $this->applications = $applications ?? [];
  }
}

class ApplicationMetrics {
  public NullableInteger $duration;
  public Latency $latency;
  public RequestCount $request_count;
  public StatusCodes $status_codes;

  public function __construct(shape(
  ?'duration' => NullableInteger,
  ?'latency' => Latency,
  ?'request_count' => RequestCount,
  ?'status_codes' => StatusCodes,
  ) $s = shape()) {
    $this->duration = $duration ?? 0;
    $this->latency = $latency ?? null;
    $this->request_count = $request_count ?? 0;
    $this->status_codes = $status_codes ?? null;
  }
}

type ApplicationName = string;

type ApplicationNamesList = vec<ApplicationName>;

class ApplicationResourceLifecycleConfig {
  public string $service_role;
  public ApplicationVersionLifecycleConfig $version_lifecycle_config;

  public function __construct(shape(
  ?'service_role' => string,
  ?'version_lifecycle_config' => ApplicationVersionLifecycleConfig,
  ) $s = shape()) {
    $this->service_role = $service_role ?? "";
    $this->version_lifecycle_config = $version_lifecycle_config ?? null;
  }
}

class ApplicationResourceLifecycleDescriptionMessage {
  public ApplicationName $application_name;
  public ApplicationResourceLifecycleConfig $resource_lifecycle_config;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'resource_lifecycle_config' => ApplicationResourceLifecycleConfig,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->resource_lifecycle_config = $resource_lifecycle_config ?? null;
  }
}

type ApplicationVersionArn = string;

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

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'application_version_arn' => ApplicationVersionArn,
  ?'build_arn' => string,
  ?'date_created' => CreationDate,
  ?'date_updated' => UpdateDate,
  ?'description' => Description,
  ?'source_build_information' => SourceBuildInformation,
  ?'source_bundle' => S3Location,
  ?'status' => ApplicationVersionStatus,
  ?'version_label' => VersionLabel,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->application_version_arn = $application_version_arn ?? "";
    $this->build_arn = $build_arn ?? "";
    $this->date_created = $date_created ?? 0;
    $this->date_updated = $date_updated ?? 0;
    $this->description = $description ?? "";
    $this->source_build_information = $source_build_information ?? null;
    $this->source_bundle = $source_bundle ?? null;
    $this->status = $status ?? "";
    $this->version_label = $version_label ?? "";
  }
}

type ApplicationVersionDescriptionList = vec<ApplicationVersionDescription>;

class ApplicationVersionDescriptionMessage {
  public ApplicationVersionDescription $application_version;

  public function __construct(shape(
  ?'application_version' => ApplicationVersionDescription,
  ) $s = shape()) {
    $this->application_version = $application_version ?? null;
  }
}

class ApplicationVersionDescriptionsMessage {
  public ApplicationVersionDescriptionList $application_versions;
  public Token $next_token;

  public function __construct(shape(
  ?'application_versions' => ApplicationVersionDescriptionList,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->application_versions = $application_versions ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ApplicationVersionLifecycleConfig {
  public MaxAgeRule $max_age_rule;
  public MaxCountRule $max_count_rule;

  public function __construct(shape(
  ?'max_age_rule' => MaxAgeRule,
  ?'max_count_rule' => MaxCountRule,
  ) $s = shape()) {
    $this->max_age_rule = $max_age_rule ?? null;
    $this->max_count_rule = $max_count_rule ?? null;
  }
}

type ApplicationVersionProccess = bool;

type ApplicationVersionStatus = string;

class ApplyEnvironmentManagedActionRequest {
  public string $action_id;
  public string $environment_id;
  public string $environment_name;

  public function __construct(shape(
  ?'action_id' => string,
  ?'environment_id' => string,
  ?'environment_name' => string,
  ) $s = shape()) {
    $this->action_id = $action_id ?? "";
    $this->environment_id = $environment_id ?? "";
    $this->environment_name = $environment_name ?? "";
  }
}

class ApplyEnvironmentManagedActionResult {
  public string $action_description;
  public string $action_id;
  public ActionType $action_type;
  public string $status;

  public function __construct(shape(
  ?'action_description' => string,
  ?'action_id' => string,
  ?'action_type' => ActionType,
  ?'status' => string,
  ) $s = shape()) {
    $this->action_description = $action_description ?? "";
    $this->action_id = $action_id ?? "";
    $this->action_type = $action_type ?? "";
    $this->status = $status ?? "";
  }
}

type AutoCreateApplication = bool;

class AutoScalingGroup {
  public ResourceId $name;

  public function __construct(shape(
  ?'name' => ResourceId,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

type AutoScalingGroupList = vec<AutoScalingGroup>;

type AvailableSolutionStackDetailsList = vec<SolutionStackDescription>;

type AvailableSolutionStackNamesList = vec<SolutionStackName>;

type BoxedBoolean = bool;

type BoxedInt = int;

type BranchName = string;

type BranchOrder = int;

class BuildConfiguration {
  public string $artifact_name;
  public NonEmptyString $code_build_service_role;
  public ComputeType $compute_type;
  public NonEmptyString $image;
  public BoxedInt $timeout_in_minutes;

  public function __construct(shape(
  ?'artifact_name' => string,
  ?'code_build_service_role' => NonEmptyString,
  ?'compute_type' => ComputeType,
  ?'image' => NonEmptyString,
  ?'timeout_in_minutes' => BoxedInt,
  ) $s = shape()) {
    $this->artifact_name = $artifact_name ?? "";
    $this->code_build_service_role = $code_build_service_role ?? "";
    $this->compute_type = $compute_type ?? "";
    $this->image = $image ?? "";
    $this->timeout_in_minutes = $timeout_in_minutes ?? 0;
  }
}

class Builder {
  public ARN $arn;

  public function __construct(shape(
  ?'arn' => ARN,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
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

  public function __construct(shape(
  ?'io_wait' => NullableDouble,
  ?'irq' => NullableDouble,
  ?'idle' => NullableDouble,
  ?'nice' => NullableDouble,
  ?'privileged' => NullableDouble,
  ?'soft_irq' => NullableDouble,
  ?'system' => NullableDouble,
  ?'user' => NullableDouble,
  ) $s = shape()) {
    $this->io_wait = $io_wait ?? 0.0;
    $this->irq = $irq ?? 0.0;
    $this->idle = $idle ?? 0.0;
    $this->nice = $nice ?? 0.0;
    $this->privileged = $privileged ?? 0.0;
    $this->soft_irq = $soft_irq ?? 0.0;
    $this->system = $system ?? 0.0;
    $this->user = $user ?? 0.0;
  }
}

type Cause = string;

type Causes = vec<Cause>;

class CheckDNSAvailabilityMessage {
  public DNSCnamePrefix $cname_prefix;

  public function __construct(shape(
  ?'cname_prefix' => DNSCnamePrefix,
  ) $s = shape()) {
    $this->cname_prefix = $cname_prefix ?? "";
  }
}

class CheckDNSAvailabilityResultMessage {
  public CnameAvailability $available;
  public DNSCname $fully_qualified_cname;

  public function __construct(shape(
  ?'available' => CnameAvailability,
  ?'fully_qualified_cname' => DNSCname,
  ) $s = shape()) {
    $this->available = $available ?? false;
    $this->fully_qualified_cname = $fully_qualified_cname ?? "";
  }
}

type CnameAvailability = bool;

class CodeBuildNotInServiceRegionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ComposeEnvironmentsMessage {
  public ApplicationName $application_name;
  public GroupName $group_name;
  public VersionLabels $version_labels;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'group_name' => GroupName,
  ?'version_labels' => VersionLabels,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->group_name = $group_name ?? "";
    $this->version_labels = $version_labels ?? [];
  }
}

type ComputeType = string;

type ConfigurationDeploymentStatus = string;

type ConfigurationOptionDefaultValue = string;

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

  public function __construct(shape(
  ?'change_severity' => ConfigurationOptionSeverity,
  ?'default_value' => ConfigurationOptionDefaultValue,
  ?'max_length' => OptionRestrictionMaxLength,
  ?'max_value' => OptionRestrictionMaxValue,
  ?'min_value' => OptionRestrictionMinValue,
  ?'name' => ConfigurationOptionName,
  ?'namespace' => OptionNamespace,
  ?'regex' => OptionRestrictionRegex,
  ?'user_defined' => UserDefinedOption,
  ?'value_options' => ConfigurationOptionPossibleValues,
  ?'value_type' => ConfigurationOptionValueType,
  ) $s = shape()) {
    $this->change_severity = $change_severity ?? "";
    $this->default_value = $default_value ?? "";
    $this->max_length = $max_length ?? 0;
    $this->max_value = $max_value ?? 0;
    $this->min_value = $min_value ?? 0;
    $this->name = $name ?? "";
    $this->namespace = $namespace ?? "";
    $this->regex = $regex ?? null;
    $this->user_defined = $user_defined ?? false;
    $this->value_options = $value_options ?? [];
    $this->value_type = $value_type ?? "";
  }
}

type ConfigurationOptionDescriptionsList = vec<ConfigurationOptionDescription>;

type ConfigurationOptionName = string;

type ConfigurationOptionPossibleValue = string;

type ConfigurationOptionPossibleValues = vec<ConfigurationOptionPossibleValue>;

class ConfigurationOptionSetting {
  public OptionNamespace $namespace;
  public ConfigurationOptionName $option_name;
  public ResourceName $resource_name;
  public ConfigurationOptionValue $value;

  public function __construct(shape(
  ?'namespace' => OptionNamespace,
  ?'option_name' => ConfigurationOptionName,
  ?'resource_name' => ResourceName,
  ?'value' => ConfigurationOptionValue,
  ) $s = shape()) {
    $this->namespace = $namespace ?? "";
    $this->option_name = $option_name ?? "";
    $this->resource_name = $resource_name ?? "";
    $this->value = $value ?? "";
  }
}

type ConfigurationOptionSettingsList = vec<ConfigurationOptionSetting>;

type ConfigurationOptionSeverity = string;

type ConfigurationOptionValue = string;

type ConfigurationOptionValueType = string;

class ConfigurationOptionsDescription {
  public ConfigurationOptionDescriptionsList $options;
  public PlatformArn $platform_arn;
  public SolutionStackName $solution_stack_name;

  public function __construct(shape(
  ?'options' => ConfigurationOptionDescriptionsList,
  ?'platform_arn' => PlatformArn,
  ?'solution_stack_name' => SolutionStackName,
  ) $s = shape()) {
    $this->options = $options ?? [];
    $this->platform_arn = $platform_arn ?? "";
    $this->solution_stack_name = $solution_stack_name ?? "";
  }
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

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'date_created' => CreationDate,
  ?'date_updated' => UpdateDate,
  ?'deployment_status' => ConfigurationDeploymentStatus,
  ?'description' => Description,
  ?'environment_name' => EnvironmentName,
  ?'option_settings' => ConfigurationOptionSettingsList,
  ?'platform_arn' => PlatformArn,
  ?'solution_stack_name' => SolutionStackName,
  ?'template_name' => ConfigurationTemplateName,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->date_created = $date_created ?? 0;
    $this->date_updated = $date_updated ?? 0;
    $this->deployment_status = $deployment_status ?? "";
    $this->description = $description ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->option_settings = $option_settings ?? [];
    $this->platform_arn = $platform_arn ?? "";
    $this->solution_stack_name = $solution_stack_name ?? "";
    $this->template_name = $template_name ?? "";
  }
}

type ConfigurationSettingsDescriptionList = vec<ConfigurationSettingsDescription>;

class ConfigurationSettingsDescriptions {
  public ConfigurationSettingsDescriptionList $configuration_settings;

  public function __construct(shape(
  ?'configuration_settings' => ConfigurationSettingsDescriptionList,
  ) $s = shape()) {
    $this->configuration_settings = $configuration_settings ?? [];
  }
}

class ConfigurationSettingsValidationMessages {
  public ValidationMessagesList $messages;

  public function __construct(shape(
  ?'messages' => ValidationMessagesList,
  ) $s = shape()) {
    $this->messages = $messages ?? [];
  }
}

type ConfigurationTemplateName = string;

type ConfigurationTemplateNamesList = vec<ConfigurationTemplateName>;

class CreateApplicationMessage {
  public ApplicationName $application_name;
  public Description $description;
  public ApplicationResourceLifecycleConfig $resource_lifecycle_config;
  public Tags $tags;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'description' => Description,
  ?'resource_lifecycle_config' => ApplicationResourceLifecycleConfig,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->description = $description ?? "";
    $this->resource_lifecycle_config = $resource_lifecycle_config ?? null;
    $this->tags = $tags ?? [];
  }
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

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'auto_create_application' => AutoCreateApplication,
  ?'build_configuration' => BuildConfiguration,
  ?'description' => Description,
  ?'process' => ApplicationVersionProccess,
  ?'source_build_information' => SourceBuildInformation,
  ?'source_bundle' => S3Location,
  ?'tags' => Tags,
  ?'version_label' => VersionLabel,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->auto_create_application = $auto_create_application ?? false;
    $this->build_configuration = $build_configuration ?? null;
    $this->description = $description ?? "";
    $this->process = $process ?? false;
    $this->source_build_information = $source_build_information ?? null;
    $this->source_bundle = $source_bundle ?? null;
    $this->tags = $tags ?? [];
    $this->version_label = $version_label ?? "";
  }
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

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'description' => Description,
  ?'environment_id' => EnvironmentId,
  ?'option_settings' => ConfigurationOptionSettingsList,
  ?'platform_arn' => PlatformArn,
  ?'solution_stack_name' => SolutionStackName,
  ?'source_configuration' => SourceConfiguration,
  ?'tags' => Tags,
  ?'template_name' => ConfigurationTemplateName,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->description = $description ?? "";
    $this->environment_id = $environment_id ?? "";
    $this->option_settings = $option_settings ?? [];
    $this->platform_arn = $platform_arn ?? "";
    $this->solution_stack_name = $solution_stack_name ?? "";
    $this->source_configuration = $source_configuration ?? null;
    $this->tags = $tags ?? [];
    $this->template_name = $template_name ?? "";
  }
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

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'cname_prefix' => DNSCnamePrefix,
  ?'description' => Description,
  ?'environment_name' => EnvironmentName,
  ?'group_name' => GroupName,
  ?'option_settings' => ConfigurationOptionSettingsList,
  ?'options_to_remove' => OptionsSpecifierList,
  ?'platform_arn' => PlatformArn,
  ?'solution_stack_name' => SolutionStackName,
  ?'tags' => Tags,
  ?'template_name' => ConfigurationTemplateName,
  ?'tier' => EnvironmentTier,
  ?'version_label' => VersionLabel,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->cname_prefix = $cname_prefix ?? "";
    $this->description = $description ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->group_name = $group_name ?? "";
    $this->option_settings = $option_settings ?? [];
    $this->options_to_remove = $options_to_remove ?? [];
    $this->platform_arn = $platform_arn ?? "";
    $this->solution_stack_name = $solution_stack_name ?? "";
    $this->tags = $tags ?? [];
    $this->template_name = $template_name ?? "";
    $this->tier = $tier ?? null;
    $this->version_label = $version_label ?? "";
  }
}

class CreatePlatformVersionRequest {
  public EnvironmentName $environment_name;
  public ConfigurationOptionSettingsList $option_settings;
  public S3Location $platform_definition_bundle;
  public PlatformName $platform_name;
  public PlatformVersion $platform_version;
  public Tags $tags;

  public function __construct(shape(
  ?'environment_name' => EnvironmentName,
  ?'option_settings' => ConfigurationOptionSettingsList,
  ?'platform_definition_bundle' => S3Location,
  ?'platform_name' => PlatformName,
  ?'platform_version' => PlatformVersion,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->environment_name = $environment_name ?? "";
    $this->option_settings = $option_settings ?? [];
    $this->platform_definition_bundle = $platform_definition_bundle ?? null;
    $this->platform_name = $platform_name ?? "";
    $this->platform_version = $platform_version ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreatePlatformVersionResult {
  public Builder $builder;
  public PlatformSummary $platform_summary;

  public function __construct(shape(
  ?'builder' => Builder,
  ?'platform_summary' => PlatformSummary,
  ) $s = shape()) {
    $this->builder = $builder ?? null;
    $this->platform_summary = $platform_summary ?? null;
  }
}

class CreateStorageLocationResultMessage {
  public S3Bucket $s_3_bucket;

  public function __construct(shape(
  ?'s_3_bucket' => S3Bucket,
  ) $s = shape()) {
    $this->s_3_bucket = $s_3_bucket ?? "";
  }
}

type CreationDate = int;

class CustomAmi {
  public ImageId $image_id;
  public VirtualizationType $virtualization_type;

  public function __construct(shape(
  ?'image_id' => ImageId,
  ?'virtualization_type' => VirtualizationType,
  ) $s = shape()) {
    $this->image_id = $image_id ?? "";
    $this->virtualization_type = $virtualization_type ?? "";
  }
}

type CustomAmiList = vec<CustomAmi>;

type DNSCname = string;

type DNSCnamePrefix = string;

class DeleteApplicationMessage {
  public ApplicationName $application_name;
  public TerminateEnvForce $terminate_env_by_force;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'terminate_env_by_force' => TerminateEnvForce,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->terminate_env_by_force = $terminate_env_by_force ?? false;
  }
}

class DeleteApplicationVersionMessage {
  public ApplicationName $application_name;
  public DeleteSourceBundle $delete_source_bundle;
  public VersionLabel $version_label;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'delete_source_bundle' => DeleteSourceBundle,
  ?'version_label' => VersionLabel,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->delete_source_bundle = $delete_source_bundle ?? false;
    $this->version_label = $version_label ?? "";
  }
}

class DeleteConfigurationTemplateMessage {
  public ApplicationName $application_name;
  public ConfigurationTemplateName $template_name;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'template_name' => ConfigurationTemplateName,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->template_name = $template_name ?? "";
  }
}

class DeleteEnvironmentConfigurationMessage {
  public ApplicationName $application_name;
  public EnvironmentName $environment_name;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'environment_name' => EnvironmentName,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->environment_name = $environment_name ?? "";
  }
}

class DeletePlatformVersionRequest {
  public PlatformArn $platform_arn;

  public function __construct(shape(
  ?'platform_arn' => PlatformArn,
  ) $s = shape()) {
    $this->platform_arn = $platform_arn ?? "";
  }
}

class DeletePlatformVersionResult {
  public PlatformSummary $platform_summary;

  public function __construct(shape(
  ?'platform_summary' => PlatformSummary,
  ) $s = shape()) {
    $this->platform_summary = $platform_summary ?? null;
  }
}

type DeleteSourceBundle = bool;

class Deployment {
  public NullableLong $deployment_id;
  public DeploymentTimestamp $deployment_time;
  public string $status;
  public string $version_label;

  public function __construct(shape(
  ?'deployment_id' => NullableLong,
  ?'deployment_time' => DeploymentTimestamp,
  ?'status' => string,
  ?'version_label' => string,
  ) $s = shape()) {
    $this->deployment_id = $deployment_id ?? 0;
    $this->deployment_time = $deployment_time ?? 0;
    $this->status = $status ?? "";
    $this->version_label = $version_label ?? "";
  }
}

type DeploymentTimestamp = int;

class DescribeAccountAttributesResult {
  public ResourceQuotas $resource_quotas;

  public function __construct(shape(
  ?'resource_quotas' => ResourceQuotas,
  ) $s = shape()) {
    $this->resource_quotas = $resource_quotas ?? null;
  }
}

class DescribeApplicationVersionsMessage {
  public ApplicationName $application_name;
  public MaxRecords $max_records;
  public Token $next_token;
  public VersionLabelsList $version_labels;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'max_records' => MaxRecords,
  ?'next_token' => Token,
  ?'version_labels' => VersionLabelsList,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->max_records = $max_records ?? 0;
    $this->next_token = $next_token ?? "";
    $this->version_labels = $version_labels ?? [];
  }
}

class DescribeApplicationsMessage {
  public ApplicationNamesList $application_names;

  public function __construct(shape(
  ?'application_names' => ApplicationNamesList,
  ) $s = shape()) {
    $this->application_names = $application_names ?? [];
  }
}

class DescribeConfigurationOptionsMessage {
  public ApplicationName $application_name;
  public EnvironmentName $environment_name;
  public OptionsSpecifierList $options;
  public PlatformArn $platform_arn;
  public SolutionStackName $solution_stack_name;
  public ConfigurationTemplateName $template_name;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'environment_name' => EnvironmentName,
  ?'options' => OptionsSpecifierList,
  ?'platform_arn' => PlatformArn,
  ?'solution_stack_name' => SolutionStackName,
  ?'template_name' => ConfigurationTemplateName,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->options = $options ?? [];
    $this->platform_arn = $platform_arn ?? "";
    $this->solution_stack_name = $solution_stack_name ?? "";
    $this->template_name = $template_name ?? "";
  }
}

class DescribeConfigurationSettingsMessage {
  public ApplicationName $application_name;
  public EnvironmentName $environment_name;
  public ConfigurationTemplateName $template_name;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'environment_name' => EnvironmentName,
  ?'template_name' => ConfigurationTemplateName,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->template_name = $template_name ?? "";
  }
}

class DescribeEnvironmentHealthRequest {
  public EnvironmentHealthAttributes $attribute_names;
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;

  public function __construct(shape(
  ?'attribute_names' => EnvironmentHealthAttributes,
  ?'environment_id' => EnvironmentId,
  ?'environment_name' => EnvironmentName,
  ) $s = shape()) {
    $this->attribute_names = $attribute_names ?? [];
    $this->environment_id = $environment_id ?? "";
    $this->environment_name = $environment_name ?? "";
  }
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

  public function __construct(shape(
  ?'application_metrics' => ApplicationMetrics,
  ?'causes' => Causes,
  ?'color' => string,
  ?'environment_name' => EnvironmentName,
  ?'health_status' => string,
  ?'instances_health' => InstanceHealthSummary,
  ?'refreshed_at' => RefreshedAt,
  ?'status' => EnvironmentHealth,
  ) $s = shape()) {
    $this->application_metrics = $application_metrics ?? null;
    $this->causes = $causes ?? [];
    $this->color = $color ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->health_status = $health_status ?? "";
    $this->instances_health = $instances_health ?? null;
    $this->refreshed_at = $refreshed_at ?? 0;
    $this->status = $status ?? "";
  }
}

class DescribeEnvironmentManagedActionHistoryRequest {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
  public int $max_items;
  public string $next_token;

  public function __construct(shape(
  ?'environment_id' => EnvironmentId,
  ?'environment_name' => EnvironmentName,
  ?'max_items' => int,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->environment_id = $environment_id ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->max_items = $max_items ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeEnvironmentManagedActionHistoryResult {
  public ManagedActionHistoryItems $managed_action_history_items;
  public string $next_token;

  public function __construct(shape(
  ?'managed_action_history_items' => ManagedActionHistoryItems,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->managed_action_history_items = $managed_action_history_items ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeEnvironmentManagedActionsRequest {
  public string $environment_id;
  public string $environment_name;
  public ActionStatus $status;

  public function __construct(shape(
  ?'environment_id' => string,
  ?'environment_name' => string,
  ?'status' => ActionStatus,
  ) $s = shape()) {
    $this->environment_id = $environment_id ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->status = $status ?? "";
  }
}

class DescribeEnvironmentManagedActionsResult {
  public ManagedActions $managed_actions;

  public function __construct(shape(
  ?'managed_actions' => ManagedActions,
  ) $s = shape()) {
    $this->managed_actions = $managed_actions ?? [];
  }
}

class DescribeEnvironmentResourcesMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;

  public function __construct(shape(
  ?'environment_id' => EnvironmentId,
  ?'environment_name' => EnvironmentName,
  ) $s = shape()) {
    $this->environment_id = $environment_id ?? "";
    $this->environment_name = $environment_name ?? "";
  }
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

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'environment_ids' => EnvironmentIdList,
  ?'environment_names' => EnvironmentNamesList,
  ?'include_deleted' => IncludeDeleted,
  ?'included_deleted_back_to' => IncludeDeletedBackTo,
  ?'max_records' => MaxRecords,
  ?'next_token' => Token,
  ?'version_label' => VersionLabel,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->environment_ids = $environment_ids ?? [];
    $this->environment_names = $environment_names ?? [];
    $this->include_deleted = $include_deleted ?? false;
    $this->included_deleted_back_to = $included_deleted_back_to ?? 0;
    $this->max_records = $max_records ?? 0;
    $this->next_token = $next_token ?? "";
    $this->version_label = $version_label ?? "";
  }
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

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'end_time' => TimeFilterEnd,
  ?'environment_id' => EnvironmentId,
  ?'environment_name' => EnvironmentName,
  ?'max_records' => MaxRecords,
  ?'next_token' => Token,
  ?'platform_arn' => PlatformArn,
  ?'request_id' => RequestId,
  ?'severity' => EventSeverity,
  ?'start_time' => TimeFilterStart,
  ?'template_name' => ConfigurationTemplateName,
  ?'version_label' => VersionLabel,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->end_time = $end_time ?? 0;
    $this->environment_id = $environment_id ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->max_records = $max_records ?? 0;
    $this->next_token = $next_token ?? "";
    $this->platform_arn = $platform_arn ?? "";
    $this->request_id = $request_id ?? "";
    $this->severity = $severity ?? "";
    $this->start_time = $start_time ?? 0;
    $this->template_name = $template_name ?? "";
    $this->version_label = $version_label ?? "";
  }
}

class DescribeInstancesHealthRequest {
  public InstancesHealthAttributes $attribute_names;
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
  public NextToken $next_token;

  public function __construct(shape(
  ?'attribute_names' => InstancesHealthAttributes,
  ?'environment_id' => EnvironmentId,
  ?'environment_name' => EnvironmentName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->attribute_names = $attribute_names ?? [];
    $this->environment_id = $environment_id ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class DescribeInstancesHealthResult {
  public InstanceHealthList $instance_health_list;
  public NextToken $next_token;
  public RefreshedAt $refreshed_at;

  public function __construct(shape(
  ?'instance_health_list' => InstanceHealthList,
  ?'next_token' => NextToken,
  ?'refreshed_at' => RefreshedAt,
  ) $s = shape()) {
    $this->instance_health_list = $instance_health_list ?? [];
    $this->next_token = $next_token ?? "";
    $this->refreshed_at = $refreshed_at ?? 0;
  }
}

class DescribePlatformVersionRequest {
  public PlatformArn $platform_arn;

  public function __construct(shape(
  ?'platform_arn' => PlatformArn,
  ) $s = shape()) {
    $this->platform_arn = $platform_arn ?? "";
  }
}

class DescribePlatformVersionResult {
  public PlatformDescription $platform_description;

  public function __construct(shape(
  ?'platform_description' => PlatformDescription,
  ) $s = shape()) {
    $this->platform_description = $platform_description ?? null;
  }
}

type Description = string;

type Ec2InstanceId = string;

class ElasticBeanstalkServiceException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type EndpointURL = string;

type EnvironmentArn = string;

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

  public function __construct(shape(
  ?'abortable_operation_in_progress' => AbortableOperationInProgress,
  ?'application_name' => ApplicationName,
  ?'cname' => DNSCname,
  ?'date_created' => CreationDate,
  ?'date_updated' => UpdateDate,
  ?'description' => Description,
  ?'endpoint_url' => EndpointURL,
  ?'environment_arn' => EnvironmentArn,
  ?'environment_id' => EnvironmentId,
  ?'environment_links' => EnvironmentLinks,
  ?'environment_name' => EnvironmentName,
  ?'health' => EnvironmentHealth,
  ?'health_status' => EnvironmentHealthStatus,
  ?'platform_arn' => PlatformArn,
  ?'resources' => EnvironmentResourcesDescription,
  ?'solution_stack_name' => SolutionStackName,
  ?'status' => EnvironmentStatus,
  ?'template_name' => ConfigurationTemplateName,
  ?'tier' => EnvironmentTier,
  ?'version_label' => VersionLabel,
  ) $s = shape()) {
    $this->abortable_operation_in_progress = $abortable_operation_in_progress ?? false;
    $this->application_name = $application_name ?? "";
    $this->cname = $cname ?? "";
    $this->date_created = $date_created ?? 0;
    $this->date_updated = $date_updated ?? 0;
    $this->description = $description ?? "";
    $this->endpoint_url = $endpoint_url ?? "";
    $this->environment_arn = $environment_arn ?? "";
    $this->environment_id = $environment_id ?? "";
    $this->environment_links = $environment_links ?? [];
    $this->environment_name = $environment_name ?? "";
    $this->health = $health ?? "";
    $this->health_status = $health_status ?? "";
    $this->platform_arn = $platform_arn ?? "";
    $this->resources = $resources ?? null;
    $this->solution_stack_name = $solution_stack_name ?? "";
    $this->status = $status ?? "";
    $this->template_name = $template_name ?? "";
    $this->tier = $tier ?? null;
    $this->version_label = $version_label ?? "";
  }
}

type EnvironmentDescriptionsList = vec<EnvironmentDescription>;

class EnvironmentDescriptionsMessage {
  public EnvironmentDescriptionsList $environments;
  public Token $next_token;

  public function __construct(shape(
  ?'environments' => EnvironmentDescriptionsList,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->environments = $environments ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type EnvironmentHealth = string;

type EnvironmentHealthAttribute = string;

type EnvironmentHealthAttributes = vec<EnvironmentHealthAttribute>;

type EnvironmentHealthStatus = string;

type EnvironmentId = string;

type EnvironmentIdList = vec<EnvironmentId>;

class EnvironmentInfoDescription {
  public Ec2InstanceId $ec_2_instance_id;
  public EnvironmentInfoType $info_type;
  public Message $message;
  public SampleTimestamp $sample_timestamp;

  public function __construct(shape(
  ?'ec_2_instance_id' => Ec2InstanceId,
  ?'info_type' => EnvironmentInfoType,
  ?'message' => Message,
  ?'sample_timestamp' => SampleTimestamp,
  ) $s = shape()) {
    $this->ec_2_instance_id = $ec_2_instance_id ?? "";
    $this->info_type = $info_type ?? "";
    $this->message = $message ?? "";
    $this->sample_timestamp = $sample_timestamp ?? 0;
  }
}

type EnvironmentInfoDescriptionList = vec<EnvironmentInfoDescription>;

type EnvironmentInfoType = string;

class EnvironmentLink {
  public string $environment_name;
  public string $link_name;

  public function __construct(shape(
  ?'environment_name' => string,
  ?'link_name' => string,
  ) $s = shape()) {
    $this->environment_name = $environment_name ?? "";
    $this->link_name = $link_name ?? "";
  }
}

type EnvironmentLinks = vec<EnvironmentLink>;

type EnvironmentName = string;

type EnvironmentNamesList = vec<EnvironmentName>;

class EnvironmentResourceDescription {
  public AutoScalingGroupList $auto_scaling_groups;
  public EnvironmentName $environment_name;
  public InstanceList $instances;
  public LaunchConfigurationList $launch_configurations;
  public LaunchTemplateList $launch_templates;
  public LoadBalancerList $load_balancers;
  public QueueList $queues;
  public TriggerList $triggers;

  public function __construct(shape(
  ?'auto_scaling_groups' => AutoScalingGroupList,
  ?'environment_name' => EnvironmentName,
  ?'instances' => InstanceList,
  ?'launch_configurations' => LaunchConfigurationList,
  ?'launch_templates' => LaunchTemplateList,
  ?'load_balancers' => LoadBalancerList,
  ?'queues' => QueueList,
  ?'triggers' => TriggerList,
  ) $s = shape()) {
    $this->auto_scaling_groups = $auto_scaling_groups ?? [];
    $this->environment_name = $environment_name ?? "";
    $this->instances = $instances ?? [];
    $this->launch_configurations = $launch_configurations ?? [];
    $this->launch_templates = $launch_templates ?? [];
    $this->load_balancers = $load_balancers ?? [];
    $this->queues = $queues ?? [];
    $this->triggers = $triggers ?? [];
  }
}

class EnvironmentResourceDescriptionsMessage {
  public EnvironmentResourceDescription $environment_resources;

  public function __construct(shape(
  ?'environment_resources' => EnvironmentResourceDescription,
  ) $s = shape()) {
    $this->environment_resources = $environment_resources ?? null;
  }
}

class EnvironmentResourcesDescription {
  public LoadBalancerDescription $load_balancer;

  public function __construct(shape(
  ?'load_balancer' => LoadBalancerDescription,
  ) $s = shape()) {
    $this->load_balancer = $load_balancer ?? null;
  }
}

type EnvironmentStatus = string;

class EnvironmentTier {
  public string $name;
  public string $type;
  public string $version;

  public function __construct(shape(
  ?'name' => string,
  ?'type' => string,
  ?'version' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->type = $type ?? "";
    $this->version = $version ?? "";
  }
}

type EventDate = int;

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

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'environment_name' => EnvironmentName,
  ?'event_date' => EventDate,
  ?'message' => EventMessage,
  ?'platform_arn' => PlatformArn,
  ?'request_id' => RequestId,
  ?'severity' => EventSeverity,
  ?'template_name' => ConfigurationTemplateName,
  ?'version_label' => VersionLabel,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->event_date = $event_date ?? 0;
    $this->message = $message ?? "";
    $this->platform_arn = $platform_arn ?? "";
    $this->request_id = $request_id ?? "";
    $this->severity = $severity ?? "";
    $this->template_name = $template_name ?? "";
    $this->version_label = $version_label ?? "";
  }
}

type EventDescriptionList = vec<EventDescription>;

class EventDescriptionsMessage {
  public EventDescriptionList $events;
  public Token $next_token;

  public function __construct(shape(
  ?'events' => EventDescriptionList,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->events = $events ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type EventMessage = string;

type EventSeverity = string;

type ExceptionMessage = string;

type FailureType = string;

type FileTypeExtension = string;

type ForceTerminate = bool;

type GroupName = string;

type ImageId = string;

type IncludeDeleted = bool;

type IncludeDeletedBackTo = int;

class Instance {
  public ResourceId $id;

  public function __construct(shape(
  ?'id' => ResourceId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

type InstanceHealthList = vec<SingleInstanceHealth>;

class InstanceHealthSummary {
  public NullableInteger $degraded;
  public NullableInteger $info;
  public NullableInteger $no_data;
  public NullableInteger $ok;
  public NullableInteger $pending;
  public NullableInteger $severe;
  public NullableInteger $unknown;
  public NullableInteger $warning;

  public function __construct(shape(
  ?'degraded' => NullableInteger,
  ?'info' => NullableInteger,
  ?'no_data' => NullableInteger,
  ?'ok' => NullableInteger,
  ?'pending' => NullableInteger,
  ?'severe' => NullableInteger,
  ?'unknown' => NullableInteger,
  ?'warning' => NullableInteger,
  ) $s = shape()) {
    $this->degraded = $degraded ?? 0;
    $this->info = $info ?? 0;
    $this->no_data = $no_data ?? 0;
    $this->ok = $ok ?? 0;
    $this->pending = $pending ?? 0;
    $this->severe = $severe ?? 0;
    $this->unknown = $unknown ?? 0;
    $this->warning = $warning ?? 0;
  }
}

type InstanceId = string;

type InstanceList = vec<Instance>;

type InstancesHealthAttribute = string;

type InstancesHealthAttributes = vec<InstancesHealthAttribute>;

class InsufficientPrivilegesException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Integer = int;

class InvalidRequestException {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'p_10' => NullableDouble,
  ?'p_50' => NullableDouble,
  ?'p_75' => NullableDouble,
  ?'p_85' => NullableDouble,
  ?'p_90' => NullableDouble,
  ?'p_95' => NullableDouble,
  ?'p_99' => NullableDouble,
  ?'p_999' => NullableDouble,
  ) $s = shape()) {
    $this->p_10 = $p_10 ?? 0.0;
    $this->p_50 = $p_50 ?? 0.0;
    $this->p_75 = $p_75 ?? 0.0;
    $this->p_85 = $p_85 ?? 0.0;
    $this->p_90 = $p_90 ?? 0.0;
    $this->p_95 = $p_95 ?? 0.0;
    $this->p_99 = $p_99 ?? 0.0;
    $this->p_999 = $p_999 ?? 0.0;
  }
}

class LaunchConfiguration {
  public ResourceId $name;

  public function __construct(shape(
  ?'name' => ResourceId,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

type LaunchConfigurationList = vec<LaunchConfiguration>;

class LaunchTemplate {
  public ResourceId $id;

  public function __construct(shape(
  ?'id' => ResourceId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

type LaunchTemplateList = vec<LaunchTemplate>;

type LaunchedAt = int;

class ListAvailableSolutionStacksResultMessage {
  public AvailableSolutionStackDetailsList $solution_stack_details;
  public AvailableSolutionStackNamesList $solution_stacks;

  public function __construct(shape(
  ?'solution_stack_details' => AvailableSolutionStackDetailsList,
  ?'solution_stacks' => AvailableSolutionStackNamesList,
  ) $s = shape()) {
    $this->solution_stack_details = $solution_stack_details ?? [];
    $this->solution_stacks = $solution_stacks ?? [];
  }
}

class ListPlatformBranchesRequest {
  public SearchFilters $filters;
  public PlatformBranchMaxRecords $max_records;
  public Token $next_token;

  public function __construct(shape(
  ?'filters' => SearchFilters,
  ?'max_records' => PlatformBranchMaxRecords,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_records = $max_records ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListPlatformBranchesResult {
  public Token $next_token;
  public PlatformBranchSummaryList $platform_branch_summary_list;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'platform_branch_summary_list' => PlatformBranchSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->platform_branch_summary_list = $platform_branch_summary_list ?? [];
  }
}

class ListPlatformVersionsRequest {
  public PlatformFilters $filters;
  public PlatformMaxRecords $max_records;
  public Token $next_token;

  public function __construct(shape(
  ?'filters' => PlatformFilters,
  ?'max_records' => PlatformMaxRecords,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_records = $max_records ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListPlatformVersionsResult {
  public Token $next_token;
  public PlatformSummaryList $platform_summary_list;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'platform_summary_list' => PlatformSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->platform_summary_list = $platform_summary_list ?? [];
  }
}

class ListTagsForResourceMessage {
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class Listener {
  public int $port;
  public string $protocol;

  public function __construct(shape(
  ?'port' => int,
  ?'protocol' => string,
  ) $s = shape()) {
    $this->port = $port ?? 0;
    $this->protocol = $protocol ?? "";
  }
}

type LoadAverage = vec<LoadAverageValue>;

type LoadAverageValue = float;

class LoadBalancer {
  public ResourceId $name;

  public function __construct(shape(
  ?'name' => ResourceId,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class LoadBalancerDescription {
  public string $domain;
  public LoadBalancerListenersDescription $listeners;
  public string $load_balancer_name;

  public function __construct(shape(
  ?'domain' => string,
  ?'listeners' => LoadBalancerListenersDescription,
  ?'load_balancer_name' => string,
  ) $s = shape()) {
    $this->domain = $domain ?? "";
    $this->listeners = $listeners ?? [];
    $this->load_balancer_name = $load_balancer_name ?? "";
  }
}

type LoadBalancerList = vec<LoadBalancer>;

type LoadBalancerListenersDescription = vec<Listener>;

type Maintainer = string;

class ManagedAction {
  public string $action_description;
  public string $action_id;
  public ActionType $action_type;
  public ActionStatus $status;
  public Timestamp $window_start_time;

  public function __construct(shape(
  ?'action_description' => string,
  ?'action_id' => string,
  ?'action_type' => ActionType,
  ?'status' => ActionStatus,
  ?'window_start_time' => Timestamp,
  ) $s = shape()) {
    $this->action_description = $action_description ?? "";
    $this->action_id = $action_id ?? "";
    $this->action_type = $action_type ?? "";
    $this->status = $status ?? "";
    $this->window_start_time = $window_start_time ?? 0;
  }
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

  public function __construct(shape(
  ?'action_description' => string,
  ?'action_id' => string,
  ?'action_type' => ActionType,
  ?'executed_time' => Timestamp,
  ?'failure_description' => string,
  ?'failure_type' => FailureType,
  ?'finished_time' => Timestamp,
  ?'status' => ActionHistoryStatus,
  ) $s = shape()) {
    $this->action_description = $action_description ?? "";
    $this->action_id = $action_id ?? "";
    $this->action_type = $action_type ?? "";
    $this->executed_time = $executed_time ?? 0;
    $this->failure_description = $failure_description ?? "";
    $this->failure_type = $failure_type ?? "";
    $this->finished_time = $finished_time ?? 0;
    $this->status = $status ?? "";
  }
}

type ManagedActionHistoryItems = vec<ManagedActionHistoryItem>;

class ManagedActionInvalidStateException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ManagedActions = vec<ManagedAction>;

class MaxAgeRule {
  public BoxedBoolean $delete_source_from_s_3;
  public BoxedBoolean $enabled;
  public BoxedInt $max_age_in_days;

  public function __construct(shape(
  ?'delete_source_from_s_3' => BoxedBoolean,
  ?'enabled' => BoxedBoolean,
  ?'max_age_in_days' => BoxedInt,
  ) $s = shape()) {
    $this->delete_source_from_s_3 = $delete_source_from_s_3 ?? false;
    $this->enabled = $enabled ?? false;
    $this->max_age_in_days = $max_age_in_days ?? 0;
  }
}

class MaxCountRule {
  public BoxedBoolean $delete_source_from_s_3;
  public BoxedBoolean $enabled;
  public BoxedInt $max_count;

  public function __construct(shape(
  ?'delete_source_from_s_3' => BoxedBoolean,
  ?'enabled' => BoxedBoolean,
  ?'max_count' => BoxedInt,
  ) $s = shape()) {
    $this->delete_source_from_s_3 = $delete_source_from_s_3 ?? false;
    $this->enabled = $enabled ?? false;
    $this->max_count = $max_count ?? 0;
  }
}

type MaxRecords = int;

type Message = string;

type NextToken = string;

type NonEmptyString = string;

type NullableDouble = float;

type NullableInteger = int;

type NullableLong = int;

type OperatingSystemName = string;

type OperatingSystemVersion = string;

class OperationInProgressException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type OptionNamespace = string;

type OptionRestrictionMaxLength = int;

type OptionRestrictionMaxValue = int;

type OptionRestrictionMinValue = int;

class OptionRestrictionRegex {
  public RegexLabel $label;
  public RegexPattern $pattern;

  public function __construct(shape(
  ?'label' => RegexLabel,
  ?'pattern' => RegexPattern,
  ) $s = shape()) {
    $this->label = $label ?? "";
    $this->pattern = $pattern ?? "";
  }
}

class OptionSpecification {
  public OptionNamespace $namespace;
  public ConfigurationOptionName $option_name;
  public ResourceName $resource_name;

  public function __construct(shape(
  ?'namespace' => OptionNamespace,
  ?'option_name' => ConfigurationOptionName,
  ?'resource_name' => ResourceName,
  ) $s = shape()) {
    $this->namespace = $namespace ?? "";
    $this->option_name = $option_name ?? "";
    $this->resource_name = $resource_name ?? "";
  }
}

type OptionsSpecifierList = vec<OptionSpecification>;

type PlatformArn = string;

type PlatformBranchLifecycleState = string;

type PlatformBranchMaxRecords = int;

class PlatformBranchSummary {
  public BranchName $branch_name;
  public BranchOrder $branch_order;
  public PlatformBranchLifecycleState $lifecycle_state;
  public PlatformName $platform_name;
  public SupportedTierList $supported_tier_list;

  public function __construct(shape(
  ?'branch_name' => BranchName,
  ?'branch_order' => BranchOrder,
  ?'lifecycle_state' => PlatformBranchLifecycleState,
  ?'platform_name' => PlatformName,
  ?'supported_tier_list' => SupportedTierList,
  ) $s = shape()) {
    $this->branch_name = $branch_name ?? "";
    $this->branch_order = $branch_order ?? 0;
    $this->lifecycle_state = $lifecycle_state ?? "";
    $this->platform_name = $platform_name ?? "";
    $this->supported_tier_list = $supported_tier_list ?? [];
  }
}

type PlatformBranchSummaryList = vec<PlatformBranchSummary>;

type PlatformCategory = string;

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

  public function __construct(shape(
  ?'custom_ami_list' => CustomAmiList,
  ?'date_created' => CreationDate,
  ?'date_updated' => UpdateDate,
  ?'description' => Description,
  ?'frameworks' => PlatformFrameworks,
  ?'maintainer' => Maintainer,
  ?'operating_system_name' => OperatingSystemName,
  ?'operating_system_version' => OperatingSystemVersion,
  ?'platform_arn' => PlatformArn,
  ?'platform_branch_lifecycle_state' => PlatformBranchLifecycleState,
  ?'platform_branch_name' => BranchName,
  ?'platform_category' => PlatformCategory,
  ?'platform_lifecycle_state' => PlatformLifecycleState,
  ?'platform_name' => PlatformName,
  ?'platform_owner' => PlatformOwner,
  ?'platform_status' => PlatformStatus,
  ?'platform_version' => PlatformVersion,
  ?'programming_languages' => PlatformProgrammingLanguages,
  ?'solution_stack_name' => SolutionStackName,
  ?'supported_addon_list' => SupportedAddonList,
  ?'supported_tier_list' => SupportedTierList,
  ) $s = shape()) {
    $this->custom_ami_list = $custom_ami_list ?? [];
    $this->date_created = $date_created ?? 0;
    $this->date_updated = $date_updated ?? 0;
    $this->description = $description ?? "";
    $this->frameworks = $frameworks ?? [];
    $this->maintainer = $maintainer ?? "";
    $this->operating_system_name = $operating_system_name ?? "";
    $this->operating_system_version = $operating_system_version ?? "";
    $this->platform_arn = $platform_arn ?? "";
    $this->platform_branch_lifecycle_state = $platform_branch_lifecycle_state ?? "";
    $this->platform_branch_name = $platform_branch_name ?? "";
    $this->platform_category = $platform_category ?? "";
    $this->platform_lifecycle_state = $platform_lifecycle_state ?? "";
    $this->platform_name = $platform_name ?? "";
    $this->platform_owner = $platform_owner ?? "";
    $this->platform_status = $platform_status ?? "";
    $this->platform_version = $platform_version ?? "";
    $this->programming_languages = $programming_languages ?? [];
    $this->solution_stack_name = $solution_stack_name ?? "";
    $this->supported_addon_list = $supported_addon_list ?? [];
    $this->supported_tier_list = $supported_tier_list ?? [];
  }
}

class PlatformFilter {
  public PlatformFilterOperator $operator;
  public PlatformFilterType $type;
  public PlatformFilterValueList $values;

  public function __construct(shape(
  ?'operator' => PlatformFilterOperator,
  ?'type' => PlatformFilterType,
  ?'values' => PlatformFilterValueList,
  ) $s = shape()) {
    $this->operator = $operator ?? "";
    $this->type = $type ?? "";
    $this->values = $values ?? [];
  }
}

type PlatformFilterOperator = string;

type PlatformFilterType = string;

type PlatformFilterValue = string;

type PlatformFilterValueList = vec<PlatformFilterValue>;

type PlatformFilters = vec<PlatformFilter>;

class PlatformFramework {
  public string $name;
  public string $version;

  public function __construct(shape(
  ?'name' => string,
  ?'version' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->version = $version ?? "";
  }
}

type PlatformFrameworks = vec<PlatformFramework>;

type PlatformLifecycleState = string;

type PlatformMaxRecords = int;

type PlatformName = string;

type PlatformOwner = string;

class PlatformProgrammingLanguage {
  public string $name;
  public string $version;

  public function __construct(shape(
  ?'name' => string,
  ?'version' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->version = $version ?? "";
  }
}

type PlatformProgrammingLanguages = vec<PlatformProgrammingLanguage>;

type PlatformStatus = string;

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

  public function __construct(shape(
  ?'operating_system_name' => OperatingSystemName,
  ?'operating_system_version' => OperatingSystemVersion,
  ?'platform_arn' => PlatformArn,
  ?'platform_branch_lifecycle_state' => PlatformBranchLifecycleState,
  ?'platform_branch_name' => BranchName,
  ?'platform_category' => PlatformCategory,
  ?'platform_lifecycle_state' => PlatformLifecycleState,
  ?'platform_owner' => PlatformOwner,
  ?'platform_status' => PlatformStatus,
  ?'platform_version' => PlatformVersion,
  ?'supported_addon_list' => SupportedAddonList,
  ?'supported_tier_list' => SupportedTierList,
  ) $s = shape()) {
    $this->operating_system_name = $operating_system_name ?? "";
    $this->operating_system_version = $operating_system_version ?? "";
    $this->platform_arn = $platform_arn ?? "";
    $this->platform_branch_lifecycle_state = $platform_branch_lifecycle_state ?? "";
    $this->platform_branch_name = $platform_branch_name ?? "";
    $this->platform_category = $platform_category ?? "";
    $this->platform_lifecycle_state = $platform_lifecycle_state ?? "";
    $this->platform_owner = $platform_owner ?? "";
    $this->platform_status = $platform_status ?? "";
    $this->platform_version = $platform_version ?? "";
    $this->supported_addon_list = $supported_addon_list ?? [];
    $this->supported_tier_list = $supported_tier_list ?? [];
  }
}

type PlatformSummaryList = vec<PlatformSummary>;

type PlatformVersion = string;

class PlatformVersionStillReferencedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Queue {
  public string $name;
  public string $url;

  public function __construct(shape(
  ?'name' => string,
  ?'url' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->url = $url ?? "";
  }
}

type QueueList = vec<Queue>;

class RebuildEnvironmentMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;

  public function __construct(shape(
  ?'environment_id' => EnvironmentId,
  ?'environment_name' => EnvironmentName,
  ) $s = shape()) {
    $this->environment_id = $environment_id ?? "";
    $this->environment_name = $environment_name ?? "";
  }
}

type RefreshedAt = int;

type RegexLabel = string;

type RegexPattern = string;

type RequestCount = int;

class RequestEnvironmentInfoMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
  public EnvironmentInfoType $info_type;

  public function __construct(shape(
  ?'environment_id' => EnvironmentId,
  ?'environment_name' => EnvironmentName,
  ?'info_type' => EnvironmentInfoType,
  ) $s = shape()) {
    $this->environment_id = $environment_id ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->info_type = $info_type ?? "";
  }
}

type RequestId = string;

type ResourceArn = string;

type ResourceId = string;

type ResourceName = string;

class ResourceNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceQuota {
  public BoxedInt $maximum;

  public function __construct(shape(
  ?'maximum' => BoxedInt,
  ) $s = shape()) {
    $this->maximum = $maximum ?? 0;
  }
}

class ResourceQuotas {
  public ResourceQuota $application_quota;
  public ResourceQuota $application_version_quota;
  public ResourceQuota $configuration_template_quota;
  public ResourceQuota $custom_platform_quota;
  public ResourceQuota $environment_quota;

  public function __construct(shape(
  ?'application_quota' => ResourceQuota,
  ?'application_version_quota' => ResourceQuota,
  ?'configuration_template_quota' => ResourceQuota,
  ?'custom_platform_quota' => ResourceQuota,
  ?'environment_quota' => ResourceQuota,
  ) $s = shape()) {
    $this->application_quota = $application_quota ?? null;
    $this->application_version_quota = $application_version_quota ?? null;
    $this->configuration_template_quota = $configuration_template_quota ?? null;
    $this->custom_platform_quota = $custom_platform_quota ?? null;
    $this->environment_quota = $environment_quota ?? null;
  }
}

class ResourceTagsDescriptionMessage {
  public ResourceArn $resource_arn;
  public TagList $resource_tags;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'resource_tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->resource_tags = $resource_tags ?? [];
  }
}

class ResourceTypeNotSupportedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RestartAppServerMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;

  public function __construct(shape(
  ?'environment_id' => EnvironmentId,
  ?'environment_name' => EnvironmentName,
  ) $s = shape()) {
    $this->environment_id = $environment_id ?? "";
    $this->environment_name = $environment_name ?? "";
  }
}

class RetrieveEnvironmentInfoMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
  public EnvironmentInfoType $info_type;

  public function __construct(shape(
  ?'environment_id' => EnvironmentId,
  ?'environment_name' => EnvironmentName,
  ?'info_type' => EnvironmentInfoType,
  ) $s = shape()) {
    $this->environment_id = $environment_id ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->info_type = $info_type ?? "";
  }
}

class RetrieveEnvironmentInfoResultMessage {
  public EnvironmentInfoDescriptionList $environment_info;

  public function __construct(shape(
  ?'environment_info' => EnvironmentInfoDescriptionList,
  ) $s = shape()) {
    $this->environment_info = $environment_info ?? [];
  }
}

type S3Bucket = string;

type S3Key = string;

class S3Location {
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_key;

  public function __construct(shape(
  ?'s_3_bucket' => S3Bucket,
  ?'s_3_key' => S3Key,
  ) $s = shape()) {
    $this->s_3_bucket = $s_3_bucket ?? "";
    $this->s_3_key = $s_3_key ?? "";
  }
}

class S3LocationNotInServiceRegionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class S3SubscriptionRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SampleTimestamp = int;

class SearchFilter {
  public SearchFilterAttribute $attribute;
  public SearchFilterOperator $operator;
  public SearchFilterValues $values;

  public function __construct(shape(
  ?'attribute' => SearchFilterAttribute,
  ?'operator' => SearchFilterOperator,
  ?'values' => SearchFilterValues,
  ) $s = shape()) {
    $this->attribute = $attribute ?? "";
    $this->operator = $operator ?? "";
    $this->values = $values ?? [];
  }
}

type SearchFilterAttribute = string;

type SearchFilterOperator = string;

type SearchFilterValue = string;

type SearchFilterValues = vec<SearchFilterValue>;

type SearchFilters = vec<SearchFilter>;

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

  public function __construct(shape(
  ?'application_metrics' => ApplicationMetrics,
  ?'availability_zone' => string,
  ?'causes' => Causes,
  ?'color' => string,
  ?'deployment' => Deployment,
  ?'health_status' => string,
  ?'instance_id' => InstanceId,
  ?'instance_type' => string,
  ?'launched_at' => LaunchedAt,
  ?'system' => SystemStatus,
  ) $s = shape()) {
    $this->application_metrics = $application_metrics ?? null;
    $this->availability_zone = $availability_zone ?? "";
    $this->causes = $causes ?? [];
    $this->color = $color ?? "";
    $this->deployment = $deployment ?? null;
    $this->health_status = $health_status ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->instance_type = $instance_type ?? "";
    $this->launched_at = $launched_at ?? 0;
    $this->system = $system ?? null;
  }
}

class SolutionStackDescription {
  public SolutionStackFileTypeList $permitted_file_types;
  public SolutionStackName $solution_stack_name;

  public function __construct(shape(
  ?'permitted_file_types' => SolutionStackFileTypeList,
  ?'solution_stack_name' => SolutionStackName,
  ) $s = shape()) {
    $this->permitted_file_types = $permitted_file_types ?? [];
    $this->solution_stack_name = $solution_stack_name ?? "";
  }
}

type SolutionStackFileTypeList = vec<FileTypeExtension>;

type SolutionStackName = string;

class SourceBuildInformation {
  public SourceLocation $source_location;
  public SourceRepository $source_repository;
  public SourceType $source_type;

  public function __construct(shape(
  ?'source_location' => SourceLocation,
  ?'source_repository' => SourceRepository,
  ?'source_type' => SourceType,
  ) $s = shape()) {
    $this->source_location = $source_location ?? "";
    $this->source_repository = $source_repository ?? "";
    $this->source_type = $source_type ?? "";
  }
}

class SourceBundleDeletionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SourceConfiguration {
  public ApplicationName $application_name;
  public ConfigurationTemplateName $template_name;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'template_name' => ConfigurationTemplateName,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->template_name = $template_name ?? "";
  }
}

type SourceLocation = string;

type SourceRepository = string;

type SourceType = string;

class StatusCodes {
  public NullableInteger $status_2_xx;
  public NullableInteger $status_3_xx;
  public NullableInteger $status_4_xx;
  public NullableInteger $status_5_xx;

  public function __construct(shape(
  ?'status_2_xx' => NullableInteger,
  ?'status_3_xx' => NullableInteger,
  ?'status_4_xx' => NullableInteger,
  ?'status_5_xx' => NullableInteger,
  ) $s = shape()) {
    $this->status_2_xx = $status_2_xx ?? 0;
    $this->status_3_xx = $status_3_xx ?? 0;
    $this->status_4_xx = $status_4_xx ?? 0;
    $this->status_5_xx = $status_5_xx ?? 0;
  }
}

type String = string;

type SupportedAddon = string;

type SupportedAddonList = vec<SupportedAddon>;

type SupportedTier = string;

type SupportedTierList = vec<SupportedTier>;

class SwapEnvironmentCNAMEsMessage {
  public EnvironmentId $destination_environment_id;
  public EnvironmentName $destination_environment_name;
  public EnvironmentId $source_environment_id;
  public EnvironmentName $source_environment_name;

  public function __construct(shape(
  ?'destination_environment_id' => EnvironmentId,
  ?'destination_environment_name' => EnvironmentName,
  ?'source_environment_id' => EnvironmentId,
  ?'source_environment_name' => EnvironmentName,
  ) $s = shape()) {
    $this->destination_environment_id = $destination_environment_id ?? "";
    $this->destination_environment_name = $destination_environment_name ?? "";
    $this->source_environment_id = $source_environment_id ?? "";
    $this->source_environment_name = $source_environment_name ?? "";
  }
}

class SystemStatus {
  public CPUUtilization $cpu_utilization;
  public LoadAverage $load_average;

  public function __construct(shape(
  ?'cpu_utilization' => CPUUtilization,
  ?'load_average' => LoadAverage,
  ) $s = shape()) {
    $this->cpu_utilization = $cpu_utilization ?? null;
    $this->load_average = $load_average ?? [];
  }
}

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

type TagValue = string;

type Tags = vec<Tag>;

type TerminateEnvForce = bool;

class TerminateEnvironmentMessage {
  public EnvironmentId $environment_id;
  public EnvironmentName $environment_name;
  public ForceTerminate $force_terminate;
  public TerminateEnvironmentResources $terminate_resources;

  public function __construct(shape(
  ?'environment_id' => EnvironmentId,
  ?'environment_name' => EnvironmentName,
  ?'force_terminate' => ForceTerminate,
  ?'terminate_resources' => TerminateEnvironmentResources,
  ) $s = shape()) {
    $this->environment_id = $environment_id ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->force_terminate = $force_terminate ?? false;
    $this->terminate_resources = $terminate_resources ?? false;
  }
}

type TerminateEnvironmentResources = bool;

type TimeFilterEnd = int;

type TimeFilterStart = int;

type Timestamp = int;

type Token = string;

class TooManyApplicationVersionsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TooManyApplicationsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TooManyBucketsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TooManyConfigurationTemplatesException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TooManyEnvironmentsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TooManyPlatformsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TooManyTagsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Trigger {
  public ResourceId $name;

  public function __construct(shape(
  ?'name' => ResourceId,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

type TriggerList = vec<Trigger>;

class UpdateApplicationMessage {
  public ApplicationName $application_name;
  public Description $description;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'description' => Description,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->description = $description ?? "";
  }
}

class UpdateApplicationResourceLifecycleMessage {
  public ApplicationName $application_name;
  public ApplicationResourceLifecycleConfig $resource_lifecycle_config;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'resource_lifecycle_config' => ApplicationResourceLifecycleConfig,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->resource_lifecycle_config = $resource_lifecycle_config ?? null;
  }
}

class UpdateApplicationVersionMessage {
  public ApplicationName $application_name;
  public Description $description;
  public VersionLabel $version_label;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'description' => Description,
  ?'version_label' => VersionLabel,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->description = $description ?? "";
    $this->version_label = $version_label ?? "";
  }
}

class UpdateConfigurationTemplateMessage {
  public ApplicationName $application_name;
  public Description $description;
  public ConfigurationOptionSettingsList $option_settings;
  public OptionsSpecifierList $options_to_remove;
  public ConfigurationTemplateName $template_name;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'description' => Description,
  ?'option_settings' => ConfigurationOptionSettingsList,
  ?'options_to_remove' => OptionsSpecifierList,
  ?'template_name' => ConfigurationTemplateName,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->description = $description ?? "";
    $this->option_settings = $option_settings ?? [];
    $this->options_to_remove = $options_to_remove ?? [];
    $this->template_name = $template_name ?? "";
  }
}

type UpdateDate = int;

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

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'description' => Description,
  ?'environment_id' => EnvironmentId,
  ?'environment_name' => EnvironmentName,
  ?'group_name' => GroupName,
  ?'option_settings' => ConfigurationOptionSettingsList,
  ?'options_to_remove' => OptionsSpecifierList,
  ?'platform_arn' => PlatformArn,
  ?'solution_stack_name' => SolutionStackName,
  ?'template_name' => ConfigurationTemplateName,
  ?'tier' => EnvironmentTier,
  ?'version_label' => VersionLabel,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->description = $description ?? "";
    $this->environment_id = $environment_id ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->group_name = $group_name ?? "";
    $this->option_settings = $option_settings ?? [];
    $this->options_to_remove = $options_to_remove ?? [];
    $this->platform_arn = $platform_arn ?? "";
    $this->solution_stack_name = $solution_stack_name ?? "";
    $this->template_name = $template_name ?? "";
    $this->tier = $tier ?? null;
    $this->version_label = $version_label ?? "";
  }
}

class UpdateTagsForResourceMessage {
  public ResourceArn $resource_arn;
  public TagList $tags_to_add;
  public TagKeyList $tags_to_remove;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tags_to_add' => TagList,
  ?'tags_to_remove' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags_to_add = $tags_to_add ?? [];
    $this->tags_to_remove = $tags_to_remove ?? [];
  }
}

type UserDefinedOption = bool;

class ValidateConfigurationSettingsMessage {
  public ApplicationName $application_name;
  public EnvironmentName $environment_name;
  public ConfigurationOptionSettingsList $option_settings;
  public ConfigurationTemplateName $template_name;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'environment_name' => EnvironmentName,
  ?'option_settings' => ConfigurationOptionSettingsList,
  ?'template_name' => ConfigurationTemplateName,
  ) $s = shape()) {
    $this->application_name = $application_name ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->option_settings = $option_settings ?? [];
    $this->template_name = $template_name ?? "";
  }
}

class ValidationMessage {
  public ValidationMessageString $message;
  public OptionNamespace $namespace;
  public ConfigurationOptionName $option_name;
  public ValidationSeverity $severity;

  public function __construct(shape(
  ?'message' => ValidationMessageString,
  ?'namespace' => OptionNamespace,
  ?'option_name' => ConfigurationOptionName,
  ?'severity' => ValidationSeverity,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->namespace = $namespace ?? "";
    $this->option_name = $option_name ?? "";
    $this->severity = $severity ?? "";
  }
}

type ValidationMessageString = string;

type ValidationMessagesList = vec<ValidationMessage>;

type ValidationSeverity = string;

type VersionLabel = string;

type VersionLabels = vec<VersionLabel>;

type VersionLabelsList = vec<VersionLabel>;

type VirtualizationType = string;


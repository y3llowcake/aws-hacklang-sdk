<?hh // strict
namespace slack\aws\appconfig;

interface AppConfig {
  public function CreateApplication(CreateApplicationRequest): Awaitable<Errors\Result<Application>>;
  public function CreateConfigurationProfile(CreateConfigurationProfileRequest): Awaitable<Errors\Result<ConfigurationProfile>>;
  public function CreateDeploymentStrategy(CreateDeploymentStrategyRequest): Awaitable<Errors\Result<DeploymentStrategy>>;
  public function CreateEnvironment(CreateEnvironmentRequest): Awaitable<Errors\Result<Environment>>;
  public function DeleteApplication(DeleteApplicationRequest): Awaitable<Errors\Error>;
  public function DeleteConfigurationProfile(DeleteConfigurationProfileRequest): Awaitable<Errors\Error>;
  public function DeleteDeploymentStrategy(DeleteDeploymentStrategyRequest): Awaitable<Errors\Error>;
  public function DeleteEnvironment(DeleteEnvironmentRequest): Awaitable<Errors\Error>;
  public function GetApplication(GetApplicationRequest): Awaitable<Errors\Result<Application>>;
  public function GetConfiguration(GetConfigurationRequest): Awaitable<Errors\Result<Configuration>>;
  public function GetConfigurationProfile(GetConfigurationProfileRequest): Awaitable<Errors\Result<ConfigurationProfile>>;
  public function GetDeployment(GetDeploymentRequest): Awaitable<Errors\Result<Deployment>>;
  public function GetDeploymentStrategy(GetDeploymentStrategyRequest): Awaitable<Errors\Result<DeploymentStrategy>>;
  public function GetEnvironment(GetEnvironmentRequest): Awaitable<Errors\Result<Environment>>;
  public function ListApplications(ListApplicationsRequest): Awaitable<Errors\Result<Applications>>;
  public function ListConfigurationProfiles(ListConfigurationProfilesRequest): Awaitable<Errors\Result<ConfigurationProfiles>>;
  public function ListDeploymentStrategies(ListDeploymentStrategiesRequest): Awaitable<Errors\Result<DeploymentStrategies>>;
  public function ListDeployments(ListDeploymentsRequest): Awaitable<Errors\Result<Deployments>>;
  public function ListEnvironments(ListEnvironmentsRequest): Awaitable<Errors\Result<Environments>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ResourceTags>>;
  public function StartDeployment(StartDeploymentRequest): Awaitable<Errors\Result<Deployment>>;
  public function StopDeployment(StopDeploymentRequest): Awaitable<Errors\Result<Deployment>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateApplication(UpdateApplicationRequest): Awaitable<Errors\Result<Application>>;
  public function UpdateConfigurationProfile(UpdateConfigurationProfileRequest): Awaitable<Errors\Result<ConfigurationProfile>>;
  public function UpdateDeploymentStrategy(UpdateDeploymentStrategyRequest): Awaitable<Errors\Result<DeploymentStrategy>>;
  public function UpdateEnvironment(UpdateEnvironmentRequest): Awaitable<Errors\Result<Environment>>;
  public function ValidateConfiguration(ValidateConfigurationRequest): Awaitable<Errors\Error>;
}

class Application {
  public Description $description;
  public Id $id;
  public Name $name;

  public function __construct(shape(
  ?'description' => Description,
  ?'id' => Id,
  ?'name' => Name,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->id = $id ?? "";
    $this->name = $name ?? "";
  }
}

type ApplicationList = vec<Application>;

class Applications {
  public ApplicationList $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => ApplicationList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type Arn = string;

class BadRequestException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Blob = string;

class Configuration {
  public Version $configuration_version;
  public Blob $content;
  public string $content_type;

  public function __construct(shape(
  ?'configuration_version' => Version,
  ?'content' => Blob,
  ?'content_type' => string,
  ) $s = shape()) {
    $this->configuration_version = $configuration_version ?? "";
    $this->content = $content ?? "";
    $this->content_type = $content_type ?? "";
  }
}

class ConfigurationProfile {
  public Id $application_id;
  public Description $description;
  public Id $id;
  public Uri $location_uri;
  public Name $name;
  public Arn $retrieval_role_arn;
  public ValidatorList $validators;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'description' => Description,
  ?'id' => Id,
  ?'location_uri' => Uri,
  ?'name' => Name,
  ?'retrieval_role_arn' => Arn,
  ?'validators' => ValidatorList,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->description = $description ?? "";
    $this->id = $id ?? "";
    $this->location_uri = $location_uri ?? "";
    $this->name = $name ?? "";
    $this->retrieval_role_arn = $retrieval_role_arn ?? "";
    $this->validators = $validators ?? [];
  }
}

class ConfigurationProfileSummary {
  public Id $application_id;
  public Id $id;
  public Uri $location_uri;
  public Name $name;
  public ValidatorTypeList $validator_types;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'id' => Id,
  ?'location_uri' => Uri,
  ?'name' => Name,
  ?'validator_types' => ValidatorTypeList,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->id = $id ?? "";
    $this->location_uri = $location_uri ?? "";
    $this->name = $name ?? "";
    $this->validator_types = $validator_types ?? [];
  }
}

type ConfigurationProfileSummaryList = vec<ConfigurationProfileSummary>;

class ConfigurationProfiles {
  public ConfigurationProfileSummaryList $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => ConfigurationProfileSummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ConflictException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CreateApplicationRequest {
  public Description $description;
  public Name $name;
  public TagMap $tags;

  public function __construct(shape(
  ?'description' => Description,
  ?'name' => Name,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateConfigurationProfileRequest {
  public Id $application_id;
  public Description $description;
  public Uri $location_uri;
  public Name $name;
  public Arn $retrieval_role_arn;
  public TagMap $tags;
  public ValidatorList $validators;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'description' => Description,
  ?'location_uri' => Uri,
  ?'name' => Name,
  ?'retrieval_role_arn' => Arn,
  ?'tags' => TagMap,
  ?'validators' => ValidatorList,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->description = $description ?? "";
    $this->location_uri = $location_uri ?? "";
    $this->name = $name ?? "";
    $this->retrieval_role_arn = $retrieval_role_arn ?? "";
    $this->tags = $tags ?? [];
    $this->validators = $validators ?? [];
  }
}

class CreateDeploymentStrategyRequest {
  public MinutesBetween0And24Hours $deployment_duration_in_minutes;
  public Description $description;
  public MinutesBetween0And24Hours $final_bake_time_in_minutes;
  public GrowthFactor $growth_factor;
  public GrowthType $growth_type;
  public Name $name;
  public ReplicateTo $replicate_to;
  public TagMap $tags;

  public function __construct(shape(
  ?'deployment_duration_in_minutes' => MinutesBetween0And24Hours,
  ?'description' => Description,
  ?'final_bake_time_in_minutes' => MinutesBetween0And24Hours,
  ?'growth_factor' => GrowthFactor,
  ?'growth_type' => GrowthType,
  ?'name' => Name,
  ?'replicate_to' => ReplicateTo,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->deployment_duration_in_minutes = $deployment_duration_in_minutes ?? 0;
    $this->description = $description ?? "";
    $this->final_bake_time_in_minutes = $final_bake_time_in_minutes ?? 0;
    $this->growth_factor = $growth_factor ?? 0.0;
    $this->growth_type = $growth_type ?? "";
    $this->name = $name ?? "";
    $this->replicate_to = $replicate_to ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateEnvironmentRequest {
  public Id $application_id;
  public Description $description;
  public MonitorList $monitors;
  public Name $name;
  public TagMap $tags;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'description' => Description,
  ?'monitors' => MonitorList,
  ?'name' => Name,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->description = $description ?? "";
    $this->monitors = $monitors ?? [];
    $this->name = $name ?? "";
    $this->tags = $tags ?? [];
  }
}

class DeleteApplicationRequest {
  public Id $application_id;

  public function __construct(shape(
  ?'application_id' => Id,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
  }
}

class DeleteConfigurationProfileRequest {
  public Id $application_id;
  public Id $configuration_profile_id;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'configuration_profile_id' => Id,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->configuration_profile_id = $configuration_profile_id ?? "";
  }
}

class DeleteDeploymentStrategyRequest {
  public DeploymentStrategyId $deployment_strategy_id;

  public function __construct(shape(
  ?'deployment_strategy_id' => DeploymentStrategyId,
  ) $s = shape()) {
    $this->deployment_strategy_id = $deployment_strategy_id ?? "";
  }
}

class DeleteEnvironmentRequest {
  public Id $application_id;
  public Id $environment_id;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'environment_id' => Id,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->environment_id = $environment_id ?? "";
  }
}

class Deployment {
  public Id $application_id;
  public Iso8601DateTime $completed_at;
  public Uri $configuration_location_uri;
  public Name $configuration_name;
  public Id $configuration_profile_id;
  public Version $configuration_version;
  public MinutesBetween0And24Hours $deployment_duration_in_minutes;
  public int $deployment_number;
  public Id $deployment_strategy_id;
  public Description $description;
  public Id $environment_id;
  public DeploymentEvents $event_log;
  public MinutesBetween0And24Hours $final_bake_time_in_minutes;
  public Percentage $growth_factor;
  public GrowthType $growth_type;
  public Percentage $percentage_complete;
  public Iso8601DateTime $started_at;
  public DeploymentState $state;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'completed_at' => Iso8601DateTime,
  ?'configuration_location_uri' => Uri,
  ?'configuration_name' => Name,
  ?'configuration_profile_id' => Id,
  ?'configuration_version' => Version,
  ?'deployment_duration_in_minutes' => MinutesBetween0And24Hours,
  ?'deployment_number' => int,
  ?'deployment_strategy_id' => Id,
  ?'description' => Description,
  ?'environment_id' => Id,
  ?'event_log' => DeploymentEvents,
  ?'final_bake_time_in_minutes' => MinutesBetween0And24Hours,
  ?'growth_factor' => Percentage,
  ?'growth_type' => GrowthType,
  ?'percentage_complete' => Percentage,
  ?'started_at' => Iso8601DateTime,
  ?'state' => DeploymentState,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->completed_at = $completed_at ?? 0;
    $this->configuration_location_uri = $configuration_location_uri ?? "";
    $this->configuration_name = $configuration_name ?? "";
    $this->configuration_profile_id = $configuration_profile_id ?? "";
    $this->configuration_version = $configuration_version ?? "";
    $this->deployment_duration_in_minutes = $deployment_duration_in_minutes ?? 0;
    $this->deployment_number = $deployment_number ?? 0;
    $this->deployment_strategy_id = $deployment_strategy_id ?? "";
    $this->description = $description ?? "";
    $this->environment_id = $environment_id ?? "";
    $this->event_log = $event_log ?? [];
    $this->final_bake_time_in_minutes = $final_bake_time_in_minutes ?? 0;
    $this->growth_factor = $growth_factor ?? 0.0;
    $this->growth_type = $growth_type ?? "";
    $this->percentage_complete = $percentage_complete ?? 0.0;
    $this->started_at = $started_at ?? 0;
    $this->state = $state ?? "";
  }
}

class DeploymentEvent {
  public Description $description;
  public DeploymentEventType $event_type;
  public Iso8601DateTime $occurred_at;
  public TriggeredBy $triggered_by;

  public function __construct(shape(
  ?'description' => Description,
  ?'event_type' => DeploymentEventType,
  ?'occurred_at' => Iso8601DateTime,
  ?'triggered_by' => TriggeredBy,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->event_type = $event_type ?? "";
    $this->occurred_at = $occurred_at ?? 0;
    $this->triggered_by = $triggered_by ?? "";
  }
}

type DeploymentEventType = string;

type DeploymentEvents = vec<DeploymentEvent>;

type DeploymentList = vec<DeploymentSummary>;

type DeploymentState = string;

class DeploymentStrategies {
  public DeploymentStrategyList $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => DeploymentStrategyList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DeploymentStrategy {
  public MinutesBetween0And24Hours $deployment_duration_in_minutes;
  public Description $description;
  public MinutesBetween0And24Hours $final_bake_time_in_minutes;
  public Percentage $growth_factor;
  public GrowthType $growth_type;
  public Id $id;
  public Name $name;
  public ReplicateTo $replicate_to;

  public function __construct(shape(
  ?'deployment_duration_in_minutes' => MinutesBetween0And24Hours,
  ?'description' => Description,
  ?'final_bake_time_in_minutes' => MinutesBetween0And24Hours,
  ?'growth_factor' => Percentage,
  ?'growth_type' => GrowthType,
  ?'id' => Id,
  ?'name' => Name,
  ?'replicate_to' => ReplicateTo,
  ) $s = shape()) {
    $this->deployment_duration_in_minutes = $deployment_duration_in_minutes ?? 0;
    $this->description = $description ?? "";
    $this->final_bake_time_in_minutes = $final_bake_time_in_minutes ?? 0;
    $this->growth_factor = $growth_factor ?? 0.0;
    $this->growth_type = $growth_type ?? "";
    $this->id = $id ?? "";
    $this->name = $name ?? "";
    $this->replicate_to = $replicate_to ?? "";
  }
}

type DeploymentStrategyId = string;

type DeploymentStrategyList = vec<DeploymentStrategy>;

class DeploymentSummary {
  public Iso8601DateTime $completed_at;
  public Name $configuration_name;
  public Version $configuration_version;
  public MinutesBetween0And24Hours $deployment_duration_in_minutes;
  public int $deployment_number;
  public MinutesBetween0And24Hours $final_bake_time_in_minutes;
  public Percentage $growth_factor;
  public GrowthType $growth_type;
  public Percentage $percentage_complete;
  public Iso8601DateTime $started_at;
  public DeploymentState $state;

  public function __construct(shape(
  ?'completed_at' => Iso8601DateTime,
  ?'configuration_name' => Name,
  ?'configuration_version' => Version,
  ?'deployment_duration_in_minutes' => MinutesBetween0And24Hours,
  ?'deployment_number' => int,
  ?'final_bake_time_in_minutes' => MinutesBetween0And24Hours,
  ?'growth_factor' => Percentage,
  ?'growth_type' => GrowthType,
  ?'percentage_complete' => Percentage,
  ?'started_at' => Iso8601DateTime,
  ?'state' => DeploymentState,
  ) $s = shape()) {
    $this->completed_at = $completed_at ?? 0;
    $this->configuration_name = $configuration_name ?? "";
    $this->configuration_version = $configuration_version ?? "";
    $this->deployment_duration_in_minutes = $deployment_duration_in_minutes ?? 0;
    $this->deployment_number = $deployment_number ?? 0;
    $this->final_bake_time_in_minutes = $final_bake_time_in_minutes ?? 0;
    $this->growth_factor = $growth_factor ?? 0.0;
    $this->growth_type = $growth_type ?? "";
    $this->percentage_complete = $percentage_complete ?? 0.0;
    $this->started_at = $started_at ?? 0;
    $this->state = $state ?? "";
  }
}

class Deployments {
  public DeploymentList $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => DeploymentList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type Description = string;

class Environment {
  public Id $application_id;
  public Description $description;
  public Id $id;
  public MonitorList $monitors;
  public Name $name;
  public EnvironmentState $state;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'description' => Description,
  ?'id' => Id,
  ?'monitors' => MonitorList,
  ?'name' => Name,
  ?'state' => EnvironmentState,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->description = $description ?? "";
    $this->id = $id ?? "";
    $this->monitors = $monitors ?? [];
    $this->name = $name ?? "";
    $this->state = $state ?? "";
  }
}

type EnvironmentList = vec<Environment>;

type EnvironmentState = string;

class Environments {
  public EnvironmentList $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => EnvironmentList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetApplicationRequest {
  public Id $application_id;

  public function __construct(shape(
  ?'application_id' => Id,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
  }
}

class GetConfigurationProfileRequest {
  public Id $application_id;
  public Id $configuration_profile_id;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'configuration_profile_id' => Id,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->configuration_profile_id = $configuration_profile_id ?? "";
  }
}

class GetConfigurationRequest {
  public StringWithLengthBetween1And64 $application;
  public Version $client_configuration_version;
  public StringWithLengthBetween1And64 $client_id;
  public StringWithLengthBetween1And64 $configuration;
  public StringWithLengthBetween1And64 $environment;

  public function __construct(shape(
  ?'application' => StringWithLengthBetween1And64,
  ?'client_configuration_version' => Version,
  ?'client_id' => StringWithLengthBetween1And64,
  ?'configuration' => StringWithLengthBetween1And64,
  ?'environment' => StringWithLengthBetween1And64,
  ) $s = shape()) {
    $this->application = $application ?? "";
    $this->client_configuration_version = $client_configuration_version ?? "";
    $this->client_id = $client_id ?? "";
    $this->configuration = $configuration ?? "";
    $this->environment = $environment ?? "";
  }
}

class GetDeploymentRequest {
  public Id $application_id;
  public int $deployment_number;
  public Id $environment_id;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'deployment_number' => int,
  ?'environment_id' => Id,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->deployment_number = $deployment_number ?? 0;
    $this->environment_id = $environment_id ?? "";
  }
}

class GetDeploymentStrategyRequest {
  public DeploymentStrategyId $deployment_strategy_id;

  public function __construct(shape(
  ?'deployment_strategy_id' => DeploymentStrategyId,
  ) $s = shape()) {
    $this->deployment_strategy_id = $deployment_strategy_id ?? "";
  }
}

class GetEnvironmentRequest {
  public Id $application_id;
  public Id $environment_id;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'environment_id' => Id,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->environment_id = $environment_id ?? "";
  }
}

type GrowthFactor = float;

type GrowthType = string;

type Id = string;

type Integer = int;

class InternalServerException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Iso8601DateTime = int;

class ListApplicationsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListConfigurationProfilesRequest {
  public Id $application_id;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListDeploymentStrategiesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListDeploymentsRequest {
  public Id $application_id;
  public Id $environment_id;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'environment_id' => Id,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->environment_id = $environment_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListEnvironmentsRequest {
  public Id $application_id;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

type MaxResults = int;

type MinutesBetween0And24Hours = int;

class Monitor {
  public Arn $alarm_arn;
  public Arn $alarm_role_arn;

  public function __construct(shape(
  ?'alarm_arn' => Arn,
  ?'alarm_role_arn' => Arn,
  ) $s = shape()) {
    $this->alarm_arn = $alarm_arn ?? "";
    $this->alarm_role_arn = $alarm_role_arn ?? "";
  }
}

type MonitorList = vec<Monitor>;

type Name = string;

type NextToken = string;

type Percentage = float;

type ReplicateTo = string;

class ResourceNotFoundException {
  public string $message;
  public string $resource_name;

  public function __construct(shape(
  ?'message' => string,
  ?'resource_name' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->resource_name = $resource_name ?? "";
  }
}

class ResourceTags {
  public TagMap $tags;

  public function __construct(shape(
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class StartDeploymentRequest {
  public Id $application_id;
  public Id $configuration_profile_id;
  public Version $configuration_version;
  public DeploymentStrategyId $deployment_strategy_id;
  public Description $description;
  public Id $environment_id;
  public TagMap $tags;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'configuration_profile_id' => Id,
  ?'configuration_version' => Version,
  ?'deployment_strategy_id' => DeploymentStrategyId,
  ?'description' => Description,
  ?'environment_id' => Id,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->configuration_profile_id = $configuration_profile_id ?? "";
    $this->configuration_version = $configuration_version ?? "";
    $this->deployment_strategy_id = $deployment_strategy_id ?? "";
    $this->description = $description ?? "";
    $this->environment_id = $environment_id ?? "";
    $this->tags = $tags ?? [];
  }
}

class StopDeploymentRequest {
  public Id $application_id;
  public int $deployment_number;
  public Id $environment_id;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'deployment_number' => int,
  ?'environment_id' => Id,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->deployment_number = $deployment_number ?? 0;
    $this->environment_id = $environment_id ?? "";
  }
}

type String = string;

type StringWithLengthBetween0And32768 = string;

type StringWithLengthBetween1And64 = string;

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public Arn $resource_arn;
  public TagMap $tags;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

type TagValue = string;

type TriggeredBy = string;

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UpdateApplicationRequest {
  public Id $application_id;
  public Description $description;
  public Name $name;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'description' => Description,
  ?'name' => Name,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->description = $description ?? "";
    $this->name = $name ?? "";
  }
}

class UpdateConfigurationProfileRequest {
  public Id $application_id;
  public Id $configuration_profile_id;
  public Description $description;
  public Name $name;
  public Arn $retrieval_role_arn;
  public ValidatorList $validators;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'configuration_profile_id' => Id,
  ?'description' => Description,
  ?'name' => Name,
  ?'retrieval_role_arn' => Arn,
  ?'validators' => ValidatorList,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->configuration_profile_id = $configuration_profile_id ?? "";
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->retrieval_role_arn = $retrieval_role_arn ?? "";
    $this->validators = $validators ?? [];
  }
}

class UpdateDeploymentStrategyRequest {
  public MinutesBetween0And24Hours $deployment_duration_in_minutes;
  public DeploymentStrategyId $deployment_strategy_id;
  public Description $description;
  public MinutesBetween0And24Hours $final_bake_time_in_minutes;
  public GrowthFactor $growth_factor;
  public GrowthType $growth_type;

  public function __construct(shape(
  ?'deployment_duration_in_minutes' => MinutesBetween0And24Hours,
  ?'deployment_strategy_id' => DeploymentStrategyId,
  ?'description' => Description,
  ?'final_bake_time_in_minutes' => MinutesBetween0And24Hours,
  ?'growth_factor' => GrowthFactor,
  ?'growth_type' => GrowthType,
  ) $s = shape()) {
    $this->deployment_duration_in_minutes = $deployment_duration_in_minutes ?? 0;
    $this->deployment_strategy_id = $deployment_strategy_id ?? "";
    $this->description = $description ?? "";
    $this->final_bake_time_in_minutes = $final_bake_time_in_minutes ?? 0;
    $this->growth_factor = $growth_factor ?? 0.0;
    $this->growth_type = $growth_type ?? "";
  }
}

class UpdateEnvironmentRequest {
  public Id $application_id;
  public Description $description;
  public Id $environment_id;
  public MonitorList $monitors;
  public Name $name;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'description' => Description,
  ?'environment_id' => Id,
  ?'monitors' => MonitorList,
  ?'name' => Name,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->description = $description ?? "";
    $this->environment_id = $environment_id ?? "";
    $this->monitors = $monitors ?? [];
    $this->name = $name ?? "";
  }
}

type Uri = string;

class ValidateConfigurationRequest {
  public Id $application_id;
  public Id $configuration_profile_id;
  public Version $configuration_version;

  public function __construct(shape(
  ?'application_id' => Id,
  ?'configuration_profile_id' => Id,
  ?'configuration_version' => Version,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->configuration_profile_id = $configuration_profile_id ?? "";
    $this->configuration_version = $configuration_version ?? "";
  }
}

class Validator {
  public StringWithLengthBetween0And32768 $content;
  public ValidatorType $type;

  public function __construct(shape(
  ?'content' => StringWithLengthBetween0And32768,
  ?'type' => ValidatorType,
  ) $s = shape()) {
    $this->content = $content ?? "";
    $this->type = $type ?? "";
  }
}

type ValidatorList = vec<Validator>;

type ValidatorType = string;

type ValidatorTypeList = vec<ValidatorType>;

type Version = string;


<?hh // strict
namespace slack\aws\appconfig;

interface AppConfig {
  public function CreateApplication(CreateApplicationRequest $in): Awaitable<\Errors\Result<Application>>;
  public function CreateConfigurationProfile(CreateConfigurationProfileRequest $in): Awaitable<\Errors\Result<ConfigurationProfile>>;
  public function CreateDeploymentStrategy(CreateDeploymentStrategyRequest $in): Awaitable<\Errors\Result<DeploymentStrategy>>;
  public function CreateEnvironment(CreateEnvironmentRequest $in): Awaitable<\Errors\Result<Environment>>;
  public function DeleteApplication(DeleteApplicationRequest $in): Awaitable<\Errors\Error>;
  public function DeleteConfigurationProfile(DeleteConfigurationProfileRequest $in): Awaitable<\Errors\Error>;
  public function DeleteDeploymentStrategy(DeleteDeploymentStrategyRequest $in): Awaitable<\Errors\Error>;
  public function DeleteEnvironment(DeleteEnvironmentRequest $in): Awaitable<\Errors\Error>;
  public function GetApplication(GetApplicationRequest $in): Awaitable<\Errors\Result<Application>>;
  public function GetConfiguration(GetConfigurationRequest $in): Awaitable<\Errors\Result<Configuration>>;
  public function GetConfigurationProfile(GetConfigurationProfileRequest $in): Awaitable<\Errors\Result<ConfigurationProfile>>;
  public function GetDeployment(GetDeploymentRequest $in): Awaitable<\Errors\Result<Deployment>>;
  public function GetDeploymentStrategy(GetDeploymentStrategyRequest $in): Awaitable<\Errors\Result<DeploymentStrategy>>;
  public function GetEnvironment(GetEnvironmentRequest $in): Awaitable<\Errors\Result<Environment>>;
  public function ListApplications(ListApplicationsRequest $in): Awaitable<\Errors\Result<Applications>>;
  public function ListConfigurationProfiles(ListConfigurationProfilesRequest $in): Awaitable<\Errors\Result<ConfigurationProfiles>>;
  public function ListDeploymentStrategies(ListDeploymentStrategiesRequest $in): Awaitable<\Errors\Result<DeploymentStrategies>>;
  public function ListDeployments(ListDeploymentsRequest $in): Awaitable<\Errors\Result<Deployments>>;
  public function ListEnvironments(ListEnvironmentsRequest $in): Awaitable<\Errors\Result<Environments>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ResourceTags>>;
  public function StartDeployment(StartDeploymentRequest $in): Awaitable<\Errors\Result<Deployment>>;
  public function StopDeployment(StopDeploymentRequest $in): Awaitable<\Errors\Result<Deployment>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UpdateApplication(UpdateApplicationRequest $in): Awaitable<\Errors\Result<Application>>;
  public function UpdateConfigurationProfile(UpdateConfigurationProfileRequest $in): Awaitable<\Errors\Result<ConfigurationProfile>>;
  public function UpdateDeploymentStrategy(UpdateDeploymentStrategyRequest $in): Awaitable<\Errors\Result<DeploymentStrategy>>;
  public function UpdateEnvironment(UpdateEnvironmentRequest $in): Awaitable<\Errors\Result<Environment>>;
  public function ValidateConfiguration(ValidateConfigurationRequest $in): Awaitable<\Errors\Error>;
}

class Application {
  public ?Description $description;
  public ?Id $id;
  public ?Name $name;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'id' => ?Id,
    ?'name' => ?Name,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type ApplicationList = vec<Application>;

class Applications {
  public ?ApplicationList $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?ApplicationList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type Arn = string;

class BadRequestException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Blob = string;

class Configuration {
  public ?Version $configuration_version;
  public ?Blob $content;
  public string $content_type;

  public function __construct(shape(
    ?'configuration_version' => ?Version,
    ?'content' => ?Blob,
    ?'content_type' => string,
  ) $s = shape()) {
    $this->configuration_version = $s['configuration_version'] ?? '';
    $this->content = $s['content'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
  }
}

class ConfigurationProfile {
  public ?Id $application_id;
  public ?Description $description;
  public ?Id $id;
  public ?Uri $location_uri;
  public ?Name $name;
  public ?Arn $retrieval_role_arn;
  public ?ValidatorList $validators;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'description' => ?Description,
    ?'id' => ?Id,
    ?'location_uri' => ?Uri,
    ?'name' => ?Name,
    ?'retrieval_role_arn' => ?Arn,
    ?'validators' => ?ValidatorList,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->location_uri = $s['location_uri'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->retrieval_role_arn = $s['retrieval_role_arn'] ?? '';
    $this->validators = $s['validators'] ?? vec[];
  }
}

class ConfigurationProfileSummary {
  public ?Id $application_id;
  public ?Id $id;
  public ?Uri $location_uri;
  public ?Name $name;
  public ?ValidatorTypeList $validator_types;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'id' => ?Id,
    ?'location_uri' => ?Uri,
    ?'name' => ?Name,
    ?'validator_types' => ?ValidatorTypeList,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->location_uri = $s['location_uri'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->validator_types = $s['validator_types'] ?? vec[];
  }
}

type ConfigurationProfileSummaryList = vec<ConfigurationProfileSummary>;

class ConfigurationProfiles {
  public ?ConfigurationProfileSummaryList $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?ConfigurationProfileSummaryList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ConflictException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CreateApplicationRequest {
  public ?Description $description;
  public ?Name $name;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'name' => ?Name,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateConfigurationProfileRequest {
  public ?Id $application_id;
  public ?Description $description;
  public ?Uri $location_uri;
  public ?Name $name;
  public ?Arn $retrieval_role_arn;
  public ?TagMap $tags;
  public ?ValidatorList $validators;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'description' => ?Description,
    ?'location_uri' => ?Uri,
    ?'name' => ?Name,
    ?'retrieval_role_arn' => ?Arn,
    ?'tags' => ?TagMap,
    ?'validators' => ?ValidatorList,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->location_uri = $s['location_uri'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->retrieval_role_arn = $s['retrieval_role_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->validators = $s['validators'] ?? vec[];
  }
}

class CreateDeploymentStrategyRequest {
  public ?MinutesBetween0And24Hours $deployment_duration_in_minutes;
  public ?Description $description;
  public ?MinutesBetween0And24Hours $final_bake_time_in_minutes;
  public ?GrowthFactor $growth_factor;
  public ?GrowthType $growth_type;
  public ?Name $name;
  public ?ReplicateTo $replicate_to;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'deployment_duration_in_minutes' => ?MinutesBetween0And24Hours,
    ?'description' => ?Description,
    ?'final_bake_time_in_minutes' => ?MinutesBetween0And24Hours,
    ?'growth_factor' => ?GrowthFactor,
    ?'growth_type' => ?GrowthType,
    ?'name' => ?Name,
    ?'replicate_to' => ?ReplicateTo,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->deployment_duration_in_minutes = $s['deployment_duration_in_minutes'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->final_bake_time_in_minutes = $s['final_bake_time_in_minutes'] ?? 0;
    $this->growth_factor = $s['growth_factor'] ?? 0.0;
    $this->growth_type = $s['growth_type'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->replicate_to = $s['replicate_to'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateEnvironmentRequest {
  public ?Id $application_id;
  public ?Description $description;
  public ?MonitorList $monitors;
  public ?Name $name;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'description' => ?Description,
    ?'monitors' => ?MonitorList,
    ?'name' => ?Name,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->monitors = $s['monitors'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class DeleteApplicationRequest {
  public ?Id $application_id;

  public function __construct(shape(
    ?'application_id' => ?Id,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class DeleteConfigurationProfileRequest {
  public ?Id $application_id;
  public ?Id $configuration_profile_id;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'configuration_profile_id' => ?Id,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->configuration_profile_id = $s['configuration_profile_id'] ?? '';
  }
}

class DeleteDeploymentStrategyRequest {
  public ?DeploymentStrategyId $deployment_strategy_id;

  public function __construct(shape(
    ?'deployment_strategy_id' => ?DeploymentStrategyId,
  ) $s = shape()) {
    $this->deployment_strategy_id = $s['deployment_strategy_id'] ?? '';
  }
}

class DeleteEnvironmentRequest {
  public ?Id $application_id;
  public ?Id $environment_id;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'environment_id' => ?Id,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->environment_id = $s['environment_id'] ?? '';
  }
}

class Deployment {
  public ?Id $application_id;
  public ?Iso8601DateTime $completed_at;
  public ?Uri $configuration_location_uri;
  public ?Name $configuration_name;
  public ?Id $configuration_profile_id;
  public ?Version $configuration_version;
  public ?MinutesBetween0And24Hours $deployment_duration_in_minutes;
  public int $deployment_number;
  public ?Id $deployment_strategy_id;
  public ?Description $description;
  public ?Id $environment_id;
  public ?DeploymentEvents $event_log;
  public ?MinutesBetween0And24Hours $final_bake_time_in_minutes;
  public ?Percentage $growth_factor;
  public ?GrowthType $growth_type;
  public ?Percentage $percentage_complete;
  public ?Iso8601DateTime $started_at;
  public ?DeploymentState $state;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'completed_at' => ?Iso8601DateTime,
    ?'configuration_location_uri' => ?Uri,
    ?'configuration_name' => ?Name,
    ?'configuration_profile_id' => ?Id,
    ?'configuration_version' => ?Version,
    ?'deployment_duration_in_minutes' => ?MinutesBetween0And24Hours,
    ?'deployment_number' => int,
    ?'deployment_strategy_id' => ?Id,
    ?'description' => ?Description,
    ?'environment_id' => ?Id,
    ?'event_log' => ?DeploymentEvents,
    ?'final_bake_time_in_minutes' => ?MinutesBetween0And24Hours,
    ?'growth_factor' => ?Percentage,
    ?'growth_type' => ?GrowthType,
    ?'percentage_complete' => ?Percentage,
    ?'started_at' => ?Iso8601DateTime,
    ?'state' => ?DeploymentState,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->completed_at = $s['completed_at'] ?? 0;
    $this->configuration_location_uri = $s['configuration_location_uri'] ?? '';
    $this->configuration_name = $s['configuration_name'] ?? '';
    $this->configuration_profile_id = $s['configuration_profile_id'] ?? '';
    $this->configuration_version = $s['configuration_version'] ?? '';
    $this->deployment_duration_in_minutes = $s['deployment_duration_in_minutes'] ?? 0;
    $this->deployment_number = $s['deployment_number'] ?? 0;
    $this->deployment_strategy_id = $s['deployment_strategy_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->environment_id = $s['environment_id'] ?? '';
    $this->event_log = $s['event_log'] ?? vec[];
    $this->final_bake_time_in_minutes = $s['final_bake_time_in_minutes'] ?? 0;
    $this->growth_factor = $s['growth_factor'] ?? 0.0;
    $this->growth_type = $s['growth_type'] ?? '';
    $this->percentage_complete = $s['percentage_complete'] ?? 0.0;
    $this->started_at = $s['started_at'] ?? 0;
    $this->state = $s['state'] ?? '';
  }
}

class DeploymentEvent {
  public ?Description $description;
  public ?DeploymentEventType $event_type;
  public ?Iso8601DateTime $occurred_at;
  public ?TriggeredBy $triggered_by;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'event_type' => ?DeploymentEventType,
    ?'occurred_at' => ?Iso8601DateTime,
    ?'triggered_by' => ?TriggeredBy,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->event_type = $s['event_type'] ?? '';
    $this->occurred_at = $s['occurred_at'] ?? 0;
    $this->triggered_by = $s['triggered_by'] ?? '';
  }
}

type DeploymentEventType = string;

type DeploymentEvents = vec<DeploymentEvent>;

type DeploymentList = vec<DeploymentSummary>;

type DeploymentState = string;

class DeploymentStrategies {
  public ?DeploymentStrategyList $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?DeploymentStrategyList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DeploymentStrategy {
  public ?MinutesBetween0And24Hours $deployment_duration_in_minutes;
  public ?Description $description;
  public ?MinutesBetween0And24Hours $final_bake_time_in_minutes;
  public ?Percentage $growth_factor;
  public ?GrowthType $growth_type;
  public ?Id $id;
  public ?Name $name;
  public ?ReplicateTo $replicate_to;

  public function __construct(shape(
    ?'deployment_duration_in_minutes' => ?MinutesBetween0And24Hours,
    ?'description' => ?Description,
    ?'final_bake_time_in_minutes' => ?MinutesBetween0And24Hours,
    ?'growth_factor' => ?Percentage,
    ?'growth_type' => ?GrowthType,
    ?'id' => ?Id,
    ?'name' => ?Name,
    ?'replicate_to' => ?ReplicateTo,
  ) $s = shape()) {
    $this->deployment_duration_in_minutes = $s['deployment_duration_in_minutes'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->final_bake_time_in_minutes = $s['final_bake_time_in_minutes'] ?? 0;
    $this->growth_factor = $s['growth_factor'] ?? 0.0;
    $this->growth_type = $s['growth_type'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->replicate_to = $s['replicate_to'] ?? '';
  }
}

type DeploymentStrategyId = string;

type DeploymentStrategyList = vec<DeploymentStrategy>;

class DeploymentSummary {
  public ?Iso8601DateTime $completed_at;
  public ?Name $configuration_name;
  public ?Version $configuration_version;
  public ?MinutesBetween0And24Hours $deployment_duration_in_minutes;
  public int $deployment_number;
  public ?MinutesBetween0And24Hours $final_bake_time_in_minutes;
  public ?Percentage $growth_factor;
  public ?GrowthType $growth_type;
  public ?Percentage $percentage_complete;
  public ?Iso8601DateTime $started_at;
  public ?DeploymentState $state;

  public function __construct(shape(
    ?'completed_at' => ?Iso8601DateTime,
    ?'configuration_name' => ?Name,
    ?'configuration_version' => ?Version,
    ?'deployment_duration_in_minutes' => ?MinutesBetween0And24Hours,
    ?'deployment_number' => int,
    ?'final_bake_time_in_minutes' => ?MinutesBetween0And24Hours,
    ?'growth_factor' => ?Percentage,
    ?'growth_type' => ?GrowthType,
    ?'percentage_complete' => ?Percentage,
    ?'started_at' => ?Iso8601DateTime,
    ?'state' => ?DeploymentState,
  ) $s = shape()) {
    $this->completed_at = $s['completed_at'] ?? 0;
    $this->configuration_name = $s['configuration_name'] ?? '';
    $this->configuration_version = $s['configuration_version'] ?? '';
    $this->deployment_duration_in_minutes = $s['deployment_duration_in_minutes'] ?? 0;
    $this->deployment_number = $s['deployment_number'] ?? 0;
    $this->final_bake_time_in_minutes = $s['final_bake_time_in_minutes'] ?? 0;
    $this->growth_factor = $s['growth_factor'] ?? 0.0;
    $this->growth_type = $s['growth_type'] ?? '';
    $this->percentage_complete = $s['percentage_complete'] ?? 0.0;
    $this->started_at = $s['started_at'] ?? 0;
    $this->state = $s['state'] ?? '';
  }
}

class Deployments {
  public ?DeploymentList $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?DeploymentList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type Description = string;

class Environment {
  public ?Id $application_id;
  public ?Description $description;
  public ?Id $id;
  public ?MonitorList $monitors;
  public ?Name $name;
  public ?EnvironmentState $state;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'description' => ?Description,
    ?'id' => ?Id,
    ?'monitors' => ?MonitorList,
    ?'name' => ?Name,
    ?'state' => ?EnvironmentState,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->monitors = $s['monitors'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

type EnvironmentList = vec<Environment>;

type EnvironmentState = string;

class Environments {
  public ?EnvironmentList $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?EnvironmentList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetApplicationRequest {
  public ?Id $application_id;

  public function __construct(shape(
    ?'application_id' => ?Id,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class GetConfigurationProfileRequest {
  public ?Id $application_id;
  public ?Id $configuration_profile_id;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'configuration_profile_id' => ?Id,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->configuration_profile_id = $s['configuration_profile_id'] ?? '';
  }
}

class GetConfigurationRequest {
  public ?StringWithLengthBetween1And64 $application;
  public ?Version $client_configuration_version;
  public ?StringWithLengthBetween1And64 $client_id;
  public ?StringWithLengthBetween1And64 $configuration;
  public ?StringWithLengthBetween1And64 $environment;

  public function __construct(shape(
    ?'application' => ?StringWithLengthBetween1And64,
    ?'client_configuration_version' => ?Version,
    ?'client_id' => ?StringWithLengthBetween1And64,
    ?'configuration' => ?StringWithLengthBetween1And64,
    ?'environment' => ?StringWithLengthBetween1And64,
  ) $s = shape()) {
    $this->application = $s['application'] ?? '';
    $this->client_configuration_version = $s['client_configuration_version'] ?? '';
    $this->client_id = $s['client_id'] ?? '';
    $this->configuration = $s['configuration'] ?? '';
    $this->environment = $s['environment'] ?? '';
  }
}

class GetDeploymentRequest {
  public ?Id $application_id;
  public int $deployment_number;
  public ?Id $environment_id;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'deployment_number' => int,
    ?'environment_id' => ?Id,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->deployment_number = $s['deployment_number'] ?? 0;
    $this->environment_id = $s['environment_id'] ?? '';
  }
}

class GetDeploymentStrategyRequest {
  public ?DeploymentStrategyId $deployment_strategy_id;

  public function __construct(shape(
    ?'deployment_strategy_id' => ?DeploymentStrategyId,
  ) $s = shape()) {
    $this->deployment_strategy_id = $s['deployment_strategy_id'] ?? '';
  }
}

class GetEnvironmentRequest {
  public ?Id $application_id;
  public ?Id $environment_id;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'environment_id' => ?Id,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->environment_id = $s['environment_id'] ?? '';
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
    $this->message = $s['message'] ?? '';
  }
}

type Iso8601DateTime = int;

class ListApplicationsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListConfigurationProfilesRequest {
  public ?Id $application_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeploymentStrategiesRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeploymentsRequest {
  public ?Id $application_id;
  public ?Id $environment_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'environment_id' => ?Id,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->environment_id = $s['environment_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListEnvironmentsRequest {
  public ?Id $application_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public ?Arn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

type MaxResults = int;

type MinutesBetween0And24Hours = int;

class Monitor {
  public ?Arn $alarm_arn;
  public ?Arn $alarm_role_arn;

  public function __construct(shape(
    ?'alarm_arn' => ?Arn,
    ?'alarm_role_arn' => ?Arn,
  ) $s = shape()) {
    $this->alarm_arn = $s['alarm_arn'] ?? '';
    $this->alarm_role_arn = $s['alarm_role_arn'] ?? '';
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
    $this->message = $s['message'] ?? '';
    $this->resource_name = $s['resource_name'] ?? '';
  }
}

class ResourceTags {
  public ?TagMap $tags;

  public function __construct(shape(
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class StartDeploymentRequest {
  public ?Id $application_id;
  public ?Id $configuration_profile_id;
  public ?Version $configuration_version;
  public ?DeploymentStrategyId $deployment_strategy_id;
  public ?Description $description;
  public ?Id $environment_id;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'configuration_profile_id' => ?Id,
    ?'configuration_version' => ?Version,
    ?'deployment_strategy_id' => ?DeploymentStrategyId,
    ?'description' => ?Description,
    ?'environment_id' => ?Id,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->configuration_profile_id = $s['configuration_profile_id'] ?? '';
    $this->configuration_version = $s['configuration_version'] ?? '';
    $this->deployment_strategy_id = $s['deployment_strategy_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->environment_id = $s['environment_id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class StopDeploymentRequest {
  public ?Id $application_id;
  public int $deployment_number;
  public ?Id $environment_id;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'deployment_number' => int,
    ?'environment_id' => ?Id,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->deployment_number = $s['deployment_number'] ?? 0;
    $this->environment_id = $s['environment_id'] ?? '';
  }
}

type String = string;

type StringWithLengthBetween0And32768 = string;

type StringWithLengthBetween1And64 = string;

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public ?Arn $resource_arn;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

type TagValue = string;

type TriggeredBy = string;

class UntagResourceRequest {
  public ?Arn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UpdateApplicationRequest {
  public ?Id $application_id;
  public ?Description $description;
  public ?Name $name;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'description' => ?Description,
    ?'name' => ?Name,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class UpdateConfigurationProfileRequest {
  public ?Id $application_id;
  public ?Id $configuration_profile_id;
  public ?Description $description;
  public ?Name $name;
  public ?Arn $retrieval_role_arn;
  public ?ValidatorList $validators;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'configuration_profile_id' => ?Id,
    ?'description' => ?Description,
    ?'name' => ?Name,
    ?'retrieval_role_arn' => ?Arn,
    ?'validators' => ?ValidatorList,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->configuration_profile_id = $s['configuration_profile_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->retrieval_role_arn = $s['retrieval_role_arn'] ?? '';
    $this->validators = $s['validators'] ?? vec[];
  }
}

class UpdateDeploymentStrategyRequest {
  public ?MinutesBetween0And24Hours $deployment_duration_in_minutes;
  public ?DeploymentStrategyId $deployment_strategy_id;
  public ?Description $description;
  public ?MinutesBetween0And24Hours $final_bake_time_in_minutes;
  public ?GrowthFactor $growth_factor;
  public ?GrowthType $growth_type;

  public function __construct(shape(
    ?'deployment_duration_in_minutes' => ?MinutesBetween0And24Hours,
    ?'deployment_strategy_id' => ?DeploymentStrategyId,
    ?'description' => ?Description,
    ?'final_bake_time_in_minutes' => ?MinutesBetween0And24Hours,
    ?'growth_factor' => ?GrowthFactor,
    ?'growth_type' => ?GrowthType,
  ) $s = shape()) {
    $this->deployment_duration_in_minutes = $s['deployment_duration_in_minutes'] ?? 0;
    $this->deployment_strategy_id = $s['deployment_strategy_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->final_bake_time_in_minutes = $s['final_bake_time_in_minutes'] ?? 0;
    $this->growth_factor = $s['growth_factor'] ?? 0.0;
    $this->growth_type = $s['growth_type'] ?? '';
  }
}

class UpdateEnvironmentRequest {
  public ?Id $application_id;
  public ?Description $description;
  public ?Id $environment_id;
  public ?MonitorList $monitors;
  public ?Name $name;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'description' => ?Description,
    ?'environment_id' => ?Id,
    ?'monitors' => ?MonitorList,
    ?'name' => ?Name,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->environment_id = $s['environment_id'] ?? '';
    $this->monitors = $s['monitors'] ?? vec[];
    $this->name = $s['name'] ?? '';
  }
}

type Uri = string;

class ValidateConfigurationRequest {
  public ?Id $application_id;
  public ?Id $configuration_profile_id;
  public ?Version $configuration_version;

  public function __construct(shape(
    ?'application_id' => ?Id,
    ?'configuration_profile_id' => ?Id,
    ?'configuration_version' => ?Version,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->configuration_profile_id = $s['configuration_profile_id'] ?? '';
    $this->configuration_version = $s['configuration_version'] ?? '';
  }
}

class Validator {
  public ?StringWithLengthBetween0And32768 $content;
  public ?ValidatorType $type;

  public function __construct(shape(
    ?'content' => ?StringWithLengthBetween0And32768,
    ?'type' => ?ValidatorType,
  ) $s = shape()) {
    $this->content = $s['content'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ValidatorList = vec<Validator>;

type ValidatorType = string;

type ValidatorTypeList = vec<ValidatorType>;

type Version = string;


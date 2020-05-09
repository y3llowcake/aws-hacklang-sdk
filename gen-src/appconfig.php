<?hh // strict
namespace slack\aws\appconfig;

interface AppConfig {
  public function CreateApplication(CreateApplicationRequest) Awaitable<Errors\Result<Application>>;
  public function CreateConfigurationProfile(CreateConfigurationProfileRequest) Awaitable<Errors\Result<ConfigurationProfile>>;
  public function CreateDeploymentStrategy(CreateDeploymentStrategyRequest) Awaitable<Errors\Result<DeploymentStrategy>>;
  public function CreateEnvironment(CreateEnvironmentRequest) Awaitable<Errors\Result<Environment>>;
  public function DeleteApplication(DeleteApplicationRequest) Awaitable<Errors\Error>;
  public function DeleteConfigurationProfile(DeleteConfigurationProfileRequest) Awaitable<Errors\Error>;
  public function DeleteDeploymentStrategy(DeleteDeploymentStrategyRequest) Awaitable<Errors\Error>;
  public function DeleteEnvironment(DeleteEnvironmentRequest) Awaitable<Errors\Error>;
  public function GetApplication(GetApplicationRequest) Awaitable<Errors\Result<Application>>;
  public function GetConfiguration(GetConfigurationRequest) Awaitable<Errors\Result<Configuration>>;
  public function GetConfigurationProfile(GetConfigurationProfileRequest) Awaitable<Errors\Result<ConfigurationProfile>>;
  public function GetDeployment(GetDeploymentRequest) Awaitable<Errors\Result<Deployment>>;
  public function GetDeploymentStrategy(GetDeploymentStrategyRequest) Awaitable<Errors\Result<DeploymentStrategy>>;
  public function GetEnvironment(GetEnvironmentRequest) Awaitable<Errors\Result<Environment>>;
  public function ListApplications(ListApplicationsRequest) Awaitable<Errors\Result<Applications>>;
  public function ListConfigurationProfiles(ListConfigurationProfilesRequest) Awaitable<Errors\Result<ConfigurationProfiles>>;
  public function ListDeploymentStrategies(ListDeploymentStrategiesRequest) Awaitable<Errors\Result<DeploymentStrategies>>;
  public function ListDeployments(ListDeploymentsRequest) Awaitable<Errors\Result<Deployments>>;
  public function ListEnvironments(ListEnvironmentsRequest) Awaitable<Errors\Result<Environments>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ResourceTags>>;
  public function StartDeployment(StartDeploymentRequest) Awaitable<Errors\Result<Deployment>>;
  public function StopDeployment(StopDeploymentRequest) Awaitable<Errors\Result<Deployment>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateApplication(UpdateApplicationRequest) Awaitable<Errors\Result<Application>>;
  public function UpdateConfigurationProfile(UpdateConfigurationProfileRequest) Awaitable<Errors\Result<ConfigurationProfile>>;
  public function UpdateDeploymentStrategy(UpdateDeploymentStrategyRequest) Awaitable<Errors\Result<DeploymentStrategy>>;
  public function UpdateEnvironment(UpdateEnvironmentRequest) Awaitable<Errors\Result<Environment>>;
  public function ValidateConfiguration(ValidateConfigurationRequest) Awaitable<Errors\Error>;
}

class Application {
  public Description $description;
  public Id $id;
  public Name $name;
}

class ApplicationList {
}

class Applications {
  public ApplicationList $items;
  public NextToken $next_token;
}

class Arn {
}

class BadRequestException {
  public string $message;
}

class Blob {
}

class Configuration {
  public Version $configuration_version;
  public Blob $content;
  public string $content_type;
}

class ConfigurationProfile {
  public Id $application_id;
  public Description $description;
  public Id $id;
  public Uri $location_uri;
  public Name $name;
  public Arn $retrieval_role_arn;
  public ValidatorList $validators;
}

class ConfigurationProfileSummary {
  public Id $application_id;
  public Id $id;
  public Uri $location_uri;
  public Name $name;
  public ValidatorTypeList $validator_types;
}

class ConfigurationProfileSummaryList {
}

class ConfigurationProfiles {
  public ConfigurationProfileSummaryList $items;
  public NextToken $next_token;
}

class ConflictException {
  public string $message;
}

class CreateApplicationRequest {
  public Description $description;
  public Name $name;
  public TagMap $tags;
}

class CreateConfigurationProfileRequest {
  public Id $application_id;
  public Description $description;
  public Uri $location_uri;
  public Name $name;
  public Arn $retrieval_role_arn;
  public TagMap $tags;
  public ValidatorList $validators;
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
}

class CreateEnvironmentRequest {
  public Id $application_id;
  public Description $description;
  public MonitorList $monitors;
  public Name $name;
  public TagMap $tags;
}

class DeleteApplicationRequest {
  public Id $application_id;
}

class DeleteConfigurationProfileRequest {
  public Id $application_id;
  public Id $configuration_profile_id;
}

class DeleteDeploymentStrategyRequest {
  public DeploymentStrategyId $deployment_strategy_id;
}

class DeleteEnvironmentRequest {
  public Id $application_id;
  public Id $environment_id;
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
}

class DeploymentEvent {
  public Description $description;
  public DeploymentEventType $event_type;
  public Iso8601DateTime $occurred_at;
  public TriggeredBy $triggered_by;
}

class DeploymentEventType {
}

class DeploymentEvents {
}

class DeploymentList {
}

class DeploymentState {
}

class DeploymentStrategies {
  public DeploymentStrategyList $items;
  public NextToken $next_token;
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
}

class DeploymentStrategyId {
}

class DeploymentStrategyList {
}

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
}

class Deployments {
  public DeploymentList $items;
  public NextToken $next_token;
}

class Description {
}

class Environment {
  public Id $application_id;
  public Description $description;
  public Id $id;
  public MonitorList $monitors;
  public Name $name;
  public EnvironmentState $state;
}

class EnvironmentList {
}

class EnvironmentState {
}

class Environments {
  public EnvironmentList $items;
  public NextToken $next_token;
}

class GetApplicationRequest {
  public Id $application_id;
}

class GetConfigurationProfileRequest {
  public Id $application_id;
  public Id $configuration_profile_id;
}

class GetConfigurationRequest {
  public StringWithLengthBetween1And64 $application;
  public Version $client_configuration_version;
  public StringWithLengthBetween1And64 $client_id;
  public StringWithLengthBetween1And64 $configuration;
  public StringWithLengthBetween1And64 $environment;
}

class GetDeploymentRequest {
  public Id $application_id;
  public int $deployment_number;
  public Id $environment_id;
}

class GetDeploymentStrategyRequest {
  public DeploymentStrategyId $deployment_strategy_id;
}

class GetEnvironmentRequest {
  public Id $application_id;
  public Id $environment_id;
}

class GrowthFactor {
}

class GrowthType {
}

class Id {
}

class Integer {
}

class InternalServerException {
  public string $message;
}

class Iso8601DateTime {
}

class ListApplicationsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListConfigurationProfilesRequest {
  public Id $application_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDeploymentStrategiesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDeploymentsRequest {
  public Id $application_id;
  public Id $environment_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListEnvironmentsRequest {
  public Id $application_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;
}

class MaxResults {
}

class MinutesBetween0And24Hours {
}

class Monitor {
  public Arn $alarm_arn;
  public Arn $alarm_role_arn;
}

class MonitorList {
}

class Name {
}

class NextToken {
}

class Percentage {
}

class ReplicateTo {
}

class ResourceNotFoundException {
  public string $message;
  public string $resource_name;
}

class ResourceTags {
  public TagMap $tags;
}

class StartDeploymentRequest {
  public Id $application_id;
  public Id $configuration_profile_id;
  public Version $configuration_version;
  public DeploymentStrategyId $deployment_strategy_id;
  public Description $description;
  public Id $environment_id;
  public TagMap $tags;
}

class StopDeploymentRequest {
  public Id $application_id;
  public int $deployment_number;
  public Id $environment_id;
}

class String {
}

class StringWithLengthBetween0And32768 {
}

class StringWithLengthBetween1And64 {
}

class TagKey {
}

class TagKeyList {
}

class TagMap {
}

class TagResourceRequest {
  public Arn $resource_arn;
  public TagMap $tags;
}

class TagValue {
}

class TriggeredBy {
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class UpdateApplicationRequest {
  public Id $application_id;
  public Description $description;
  public Name $name;
}

class UpdateConfigurationProfileRequest {
  public Id $application_id;
  public Id $configuration_profile_id;
  public Description $description;
  public Name $name;
  public Arn $retrieval_role_arn;
  public ValidatorList $validators;
}

class UpdateDeploymentStrategyRequest {
  public MinutesBetween0And24Hours $deployment_duration_in_minutes;
  public DeploymentStrategyId $deployment_strategy_id;
  public Description $description;
  public MinutesBetween0And24Hours $final_bake_time_in_minutes;
  public GrowthFactor $growth_factor;
  public GrowthType $growth_type;
}

class UpdateEnvironmentRequest {
  public Id $application_id;
  public Description $description;
  public Id $environment_id;
  public MonitorList $monitors;
  public Name $name;
}

class Uri {
}

class ValidateConfigurationRequest {
  public Id $application_id;
  public Id $configuration_profile_id;
  public Version $configuration_version;
}

class Validator {
  public StringWithLengthBetween0And32768 $content;
  public ValidatorType $type;
}

class ValidatorList {
}

class ValidatorType {
}

class ValidatorTypeList {
}

class Version {
}


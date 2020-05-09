<?hh // strict
namespace slack\aws\appconfig;

interface AppConfig {
  public function UpdateApplication(UpdateApplicationRequest) Awaitable<Errors\Result<Application>>;
  public function UpdateEnvironment(UpdateEnvironmentRequest) Awaitable<Errors\Result<Environment>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ResourceTags>>;
  public function StopDeployment(StopDeploymentRequest) Awaitable<Errors\Result<Deployment>>;
  public function UpdateConfigurationProfile(UpdateConfigurationProfileRequest) Awaitable<Errors\Result<ConfigurationProfile>>;
  public function ValidateConfiguration(ValidateConfigurationRequest) Awaitable<Errors\Error>;
  public function GetDeploymentStrategy(GetDeploymentStrategyRequest) Awaitable<Errors\Result<DeploymentStrategy>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function DeleteDeploymentStrategy(DeleteDeploymentStrategyRequest) Awaitable<Errors\Error>;
  public function ListConfigurationProfiles(ListConfigurationProfilesRequest) Awaitable<Errors\Result<ConfigurationProfiles>>;
  public function CreateEnvironment(CreateEnvironmentRequest) Awaitable<Errors\Result<Environment>>;
  public function DeleteApplication(DeleteApplicationRequest) Awaitable<Errors\Error>;
  public function GetEnvironment(GetEnvironmentRequest) Awaitable<Errors\Result<Environment>>;
  public function CreateDeploymentStrategy(CreateDeploymentStrategyRequest) Awaitable<Errors\Result<DeploymentStrategy>>;
  public function GetConfiguration(GetConfigurationRequest) Awaitable<Errors\Result<Configuration>>;
  public function GetApplication(GetApplicationRequest) Awaitable<Errors\Result<Application>>;
  public function StartDeployment(StartDeploymentRequest) Awaitable<Errors\Result<Deployment>>;
  public function UpdateDeploymentStrategy(UpdateDeploymentStrategyRequest) Awaitable<Errors\Result<DeploymentStrategy>>;
  public function DeleteConfigurationProfile(DeleteConfigurationProfileRequest) Awaitable<Errors\Error>;
  public function ListDeployments(ListDeploymentsRequest) Awaitable<Errors\Result<Deployments>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function GetConfigurationProfile(GetConfigurationProfileRequest) Awaitable<Errors\Result<ConfigurationProfile>>;
  public function ListApplications(ListApplicationsRequest) Awaitable<Errors\Result<Applications>>;
  public function DeleteEnvironment(DeleteEnvironmentRequest) Awaitable<Errors\Error>;
  public function GetDeployment(GetDeploymentRequest) Awaitable<Errors\Result<Deployment>>;
  public function ListDeploymentStrategies(ListDeploymentStrategiesRequest) Awaitable<Errors\Result<DeploymentStrategies>>;
  public function ListEnvironments(ListEnvironmentsRequest) Awaitable<Errors\Result<Environments>>;
  public function CreateApplication(CreateApplicationRequest) Awaitable<Errors\Result<Application>>;
  public function CreateConfigurationProfile(CreateConfigurationProfileRequest) Awaitable<Errors\Result<ConfigurationProfile>>;
}

class Deployment {
  public Id $deployment_strategy_id;
  public Id $configuration_profile_id;
  public Name $configuration_name;
  public Version $configuration_version;
  public MinutesBetween0And24Hours $deployment_duration_in_minutes;
  public Percentage $growth_factor;
  public Iso8601DateTime $started_at;
  public Id $application_id;
  public Uri $configuration_location_uri;
  public Description $description;
  public DeploymentEvents $event_log;
  public Id $environment_id;
  public int $deployment_number;
  public GrowthType $growth_type;
  public MinutesBetween0And24Hours $final_bake_time_in_minutes;
  public DeploymentState $state;
  public Percentage $percentage_complete;
  public Iso8601DateTime $completed_at;
}

class DeploymentState {
}

class Deployments {
  public DeploymentList $items;
  public NextToken $next_token;
}

class GetDeploymentStrategyRequest {
  public DeploymentStrategyId $deployment_strategy_id;
}

class GrowthFactor {
}

class ListApplicationsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class Name {
}

class TagValue {
}

class Application {
  public Id $id;
  public Name $name;
  public Description $description;
}

class DeploymentStrategies {
  public DeploymentStrategyList $items;
  public NextToken $next_token;
}

class GetConfigurationProfileRequest {
  public Id $configuration_profile_id;
  public Id $application_id;
}

class EnvironmentList {
}

class GetApplicationRequest {
  public Id $application_id;
}

class MinutesBetween0And24Hours {
}

class String {
}

class StringWithLengthBetween0And32768 {
}

class ConfigurationProfileSummaryList {
}

class DeleteConfigurationProfileRequest {
  public Id $configuration_profile_id;
  public Id $application_id;
}

class DeploymentEventType {
}

class UpdateConfigurationProfileRequest {
  public Id $configuration_profile_id;
  public Name $name;
  public Description $description;
  public Arn $retrieval_role_arn;
  public ValidatorList $validators;
  public Id $application_id;
}

class Uri {
}

class CreateConfigurationProfileRequest {
  public Uri $location_uri;
  public Arn $retrieval_role_arn;
  public ValidatorList $validators;
  public TagMap $tags;
  public Id $application_id;
  public Name $name;
  public Description $description;
}

class Environments {
  public EnvironmentList $items;
  public NextToken $next_token;
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;
}

class ResourceNotFoundException {
  public string $message;
  public string $resource_name;
}

class ValidatorType {
}

class BadRequestException {
  public string $message;
}

class Configuration {
  public Blob $content;
  public Version $configuration_version;
  public string $content_type;
}

class CreateApplicationRequest {
  public Description $description;
  public TagMap $tags;
  public Name $name;
}

class ConfigurationProfileSummary {
  public Id $id;
  public Name $name;
  public Uri $location_uri;
  public ValidatorTypeList $validator_types;
  public Id $application_id;
}

class ConfigurationProfiles {
  public ConfigurationProfileSummaryList $items;
  public NextToken $next_token;
}

class Validator {
  public ValidatorType $type;
  public StringWithLengthBetween0And32768 $content;
}

class EnvironmentState {
}

class GetDeploymentRequest {
  public Id $application_id;
  public Id $environment_id;
  public int $deployment_number;
}

class InternalServerException {
  public string $message;
}

class StartDeploymentRequest {
  public TagMap $tags;
  public Id $application_id;
  public Id $environment_id;
  public DeploymentStrategyId $deployment_strategy_id;
  public Id $configuration_profile_id;
  public Version $configuration_version;
  public Description $description;
}

class Applications {
  public ApplicationList $items;
  public NextToken $next_token;
}

class CreateDeploymentStrategyRequest {
  public MinutesBetween0And24Hours $final_bake_time_in_minutes;
  public GrowthFactor $growth_factor;
  public GrowthType $growth_type;
  public ReplicateTo $replicate_to;
  public TagMap $tags;
  public Name $name;
  public Description $description;
  public MinutesBetween0And24Hours $deployment_duration_in_minutes;
}

class DeploymentStrategyList {
}

class UpdateDeploymentStrategyRequest {
  public GrowthFactor $growth_factor;
  public GrowthType $growth_type;
  public DeploymentStrategyId $deployment_strategy_id;
  public Description $description;
  public MinutesBetween0And24Hours $deployment_duration_in_minutes;
  public MinutesBetween0And24Hours $final_bake_time_in_minutes;
}

class ValidateConfigurationRequest {
  public Id $application_id;
  public Id $configuration_profile_id;
  public Version $configuration_version;
}

class Version {
}

class DeleteEnvironmentRequest {
  public Id $application_id;
  public Id $environment_id;
}

class DeploymentList {
}

class Integer {
}

class GetEnvironmentRequest {
  public Id $application_id;
  public Id $environment_id;
}

class ListConfigurationProfilesRequest {
  public Id $application_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDeploymentsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public Id $application_id;
  public Id $environment_id;
}

class ListEnvironmentsRequest {
  public Id $application_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class StopDeploymentRequest {
  public Id $application_id;
  public Id $environment_id;
  public int $deployment_number;
}

class ValidatorList {
}

class Blob {
}

class DeploymentEvent {
  public DeploymentEventType $event_type;
  public TriggeredBy $triggered_by;
  public Description $description;
  public Iso8601DateTime $occurred_at;
}

class DeploymentSummary {
  public Version $configuration_version;
  public MinutesBetween0And24Hours $deployment_duration_in_minutes;
  public GrowthType $growth_type;
  public MinutesBetween0And24Hours $final_bake_time_in_minutes;
  public DeploymentState $state;
  public Iso8601DateTime $completed_at;
  public Name $configuration_name;
  public Percentage $growth_factor;
  public Percentage $percentage_complete;
  public Iso8601DateTime $started_at;
  public int $deployment_number;
}

class TagMap {
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class Description {
}

class Monitor {
  public Arn $alarm_arn;
  public Arn $alarm_role_arn;
}

class MonitorList {
}

class DeleteApplicationRequest {
  public Id $application_id;
}

class ResourceTags {
  public TagMap $tags;
}

class Environment {
  public Id $application_id;
  public Id $id;
  public Name $name;
  public Description $description;
  public EnvironmentState $state;
  public MonitorList $monitors;
}

class TagKeyList {
}

class UpdateApplicationRequest {
  public Name $name;
  public Description $description;
  public Id $application_id;
}

class Iso8601DateTime {
}

class ListDeploymentStrategiesRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class Percentage {
}

class ValidatorTypeList {
}

class DeploymentEvents {
}

class GrowthType {
}

class Id {
}

class DeploymentStrategy {
  public ReplicateTo $replicate_to;
  public Id $id;
  public Name $name;
  public Description $description;
  public MinutesBetween0And24Hours $deployment_duration_in_minutes;
  public GrowthType $growth_type;
  public Percentage $growth_factor;
  public MinutesBetween0And24Hours $final_bake_time_in_minutes;
}

class ReplicateTo {
}

class StringWithLengthBetween1And64 {
}

class TagKey {
}

class Arn {
}

class ConfigurationProfile {
  public Id $application_id;
  public Id $id;
  public Name $name;
  public Description $description;
  public Uri $location_uri;
  public Arn $retrieval_role_arn;
  public ValidatorList $validators;
}

class DeleteDeploymentStrategyRequest {
  public DeploymentStrategyId $deployment_strategy_id;
}

class NextToken {
}

class TriggeredBy {
}

class UpdateEnvironmentRequest {
  public Id $environment_id;
  public Name $name;
  public Description $description;
  public MonitorList $monitors;
  public Id $application_id;
}

class ApplicationList {
}

class ConflictException {
  public string $message;
}

class DeploymentStrategyId {
}

class TagResourceRequest {
  public Arn $resource_arn;
  public TagMap $tags;
}

class CreateEnvironmentRequest {
  public Description $description;
  public MonitorList $monitors;
  public TagMap $tags;
  public Id $application_id;
  public Name $name;
}

class GetConfigurationRequest {
  public StringWithLengthBetween1And64 $application;
  public StringWithLengthBetween1And64 $environment;
  public StringWithLengthBetween1And64 $configuration;
  public StringWithLengthBetween1And64 $client_id;
  public Version $client_configuration_version;
}

class MaxResults {
}


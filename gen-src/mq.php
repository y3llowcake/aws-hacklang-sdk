<?hh // strict
namespace slack\aws\mq;

interface mq {
  public function CreateBroker(CreateBrokerRequest) Awaitable<Errors\Result<CreateBrokerResponse>>;
  public function CreateConfiguration(CreateConfigurationRequest) Awaitable<Errors\Result<CreateConfigurationResponse>>;
  public function CreateTags(CreateTagsRequest) Awaitable<Errors\Error>;
  public function CreateUser(CreateUserRequest) Awaitable<Errors\Result<CreateUserResponse>>;
  public function DeleteBroker(DeleteBrokerRequest) Awaitable<Errors\Result<DeleteBrokerResponse>>;
  public function DeleteTags(DeleteTagsRequest) Awaitable<Errors\Error>;
  public function DeleteUser(DeleteUserRequest) Awaitable<Errors\Result<DeleteUserResponse>>;
  public function DescribeBroker(DescribeBrokerRequest) Awaitable<Errors\Result<DescribeBrokerResponse>>;
  public function DescribeBrokerEngineTypes(DescribeBrokerEngineTypesRequest) Awaitable<Errors\Result<DescribeBrokerEngineTypesResponse>>;
  public function DescribeBrokerInstanceOptions(DescribeBrokerInstanceOptionsRequest) Awaitable<Errors\Result<DescribeBrokerInstanceOptionsResponse>>;
  public function DescribeConfiguration(DescribeConfigurationRequest) Awaitable<Errors\Result<DescribeConfigurationResponse>>;
  public function DescribeConfigurationRevision(DescribeConfigurationRevisionRequest) Awaitable<Errors\Result<DescribeConfigurationRevisionResponse>>;
  public function DescribeUser(DescribeUserRequest) Awaitable<Errors\Result<DescribeUserResponse>>;
  public function ListBrokers(ListBrokersRequest) Awaitable<Errors\Result<ListBrokersResponse>>;
  public function ListConfigurationRevisions(ListConfigurationRevisionsRequest) Awaitable<Errors\Result<ListConfigurationRevisionsResponse>>;
  public function ListConfigurations(ListConfigurationsRequest) Awaitable<Errors\Result<ListConfigurationsResponse>>;
  public function ListTags(ListTagsRequest) Awaitable<Errors\Result<ListTagsResponse>>;
  public function ListUsers(ListUsersRequest) Awaitable<Errors\Result<ListUsersResponse>>;
  public function RebootBroker(RebootBrokerRequest) Awaitable<Errors\Result<RebootBrokerResponse>>;
  public function UpdateBroker(UpdateBrokerRequest) Awaitable<Errors\Result<UpdateBrokerResponse>>;
  public function UpdateConfiguration(UpdateConfigurationRequest) Awaitable<Errors\Result<UpdateConfigurationResponse>>;
  public function UpdateUser(UpdateUserRequest) Awaitable<Errors\Result<UpdateUserResponse>>;
}

class AvailabilityZone {
  public __string $name;
}

class BadRequestException {
  public __string $error_attribute;
  public __string $message;
}

class BrokerEngineType {
  public EngineType $engine_type;
  public __listOfEngineVersion $engine_versions;
}

class BrokerEngineTypeOutput {
  public __listOfBrokerEngineType $broker_engine_types;
  public __integerMin5Max100 $max_results;
  public __string $next_token;
}

class BrokerInstance {
  public __string $console_url;
  public __listOf__string $endpoints;
  public __string $ip_address;
}

class BrokerInstanceOption {
  public __listOfAvailabilityZone $availability_zones;
  public EngineType $engine_type;
  public __string $host_instance_type;
  public BrokerStorageType $storage_type;
  public __listOfDeploymentMode $supported_deployment_modes;
  public __listOf__string $supported_engine_versions;
}

class BrokerInstanceOptionsOutput {
  public __listOfBrokerInstanceOption $broker_instance_options;
  public __integerMin5Max100 $max_results;
  public __string $next_token;
}

class BrokerState {
}

class BrokerStorageType {
}

class BrokerSummary {
  public __string $broker_arn;
  public __string $broker_id;
  public __string $broker_name;
  public BrokerState $broker_state;
  public __timestampIso8601 $created;
  public DeploymentMode $deployment_mode;
  public __string $host_instance_type;
}

class ChangeType {
}

class Configuration {
  public __string $arn;
  public __timestampIso8601 $created;
  public __string $description;
  public EngineType $engine_type;
  public __string $engine_version;
  public __string $id;
  public ConfigurationRevision $latest_revision;
  public __string $name;
  public __mapOf__string $tags;
}

class ConfigurationId {
  public __string $id;
  public __integer $revision;
}

class ConfigurationRevision {
  public __timestampIso8601 $created;
  public __string $description;
  public __integer $revision;
}

class Configurations {
  public ConfigurationId $current;
  public __listOfConfigurationId $history;
  public ConfigurationId $pending;
}

class ConflictException {
  public __string $error_attribute;
  public __string $message;
}

class CreateBrokerInput {
  public __boolean $auto_minor_version_upgrade;
  public __string $broker_name;
  public ConfigurationId $configuration;
  public __string $creator_request_id;
  public DeploymentMode $deployment_mode;
  public EncryptionOptions $encryption_options;
  public EngineType $engine_type;
  public __string $engine_version;
  public __string $host_instance_type;
  public Logs $logs;
  public WeeklyStartTime $maintenance_window_start_time;
  public __boolean $publicly_accessible;
  public __listOf__string $security_groups;
  public BrokerStorageType $storage_type;
  public __listOf__string $subnet_ids;
  public __mapOf__string $tags;
  public __listOfUser $users;
}

class CreateBrokerOutput {
  public __string $broker_arn;
  public __string $broker_id;
}

class CreateBrokerRequest {
  public __boolean $auto_minor_version_upgrade;
  public __string $broker_name;
  public ConfigurationId $configuration;
  public __string $creator_request_id;
  public DeploymentMode $deployment_mode;
  public EncryptionOptions $encryption_options;
  public EngineType $engine_type;
  public __string $engine_version;
  public __string $host_instance_type;
  public Logs $logs;
  public WeeklyStartTime $maintenance_window_start_time;
  public __boolean $publicly_accessible;
  public __listOf__string $security_groups;
  public BrokerStorageType $storage_type;
  public __listOf__string $subnet_ids;
  public __mapOf__string $tags;
  public __listOfUser $users;
}

class CreateBrokerResponse {
  public __string $broker_arn;
  public __string $broker_id;
}

class CreateConfigurationInput {
  public EngineType $engine_type;
  public __string $engine_version;
  public __string $name;
  public __mapOf__string $tags;
}

class CreateConfigurationOutput {
  public __string $arn;
  public __timestampIso8601 $created;
  public __string $id;
  public ConfigurationRevision $latest_revision;
  public __string $name;
}

class CreateConfigurationRequest {
  public EngineType $engine_type;
  public __string $engine_version;
  public __string $name;
  public __mapOf__string $tags;
}

class CreateConfigurationResponse {
  public __string $arn;
  public __timestampIso8601 $created;
  public __string $id;
  public ConfigurationRevision $latest_revision;
  public __string $name;
}

class CreateTagsRequest {
  public __string $resource_arn;
  public __mapOf__string $tags;
}

class CreateUserInput {
  public __boolean $console_access;
  public __listOf__string $groups;
  public __string $password;
}

class CreateUserRequest {
  public __string $broker_id;
  public __boolean $console_access;
  public __listOf__string $groups;
  public __string $password;
  public __string $username;
}

class CreateUserResponse {
}

class DayOfWeek {
}

class DeleteBrokerOutput {
  public __string $broker_id;
}

class DeleteBrokerRequest {
  public __string $broker_id;
}

class DeleteBrokerResponse {
  public __string $broker_id;
}

class DeleteTagsRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;
}

class DeleteUserRequest {
  public __string $broker_id;
  public __string $username;
}

class DeleteUserResponse {
}

class DeploymentMode {
}

class DescribeBrokerEngineTypesRequest {
  public __string $engine_type;
  public MaxResults $max_results;
  public __string $next_token;
}

class DescribeBrokerEngineTypesResponse {
  public __listOfBrokerEngineType $broker_engine_types;
  public __integerMin5Max100 $max_results;
  public __string $next_token;
}

class DescribeBrokerInstanceOptionsRequest {
  public __string $engine_type;
  public __string $host_instance_type;
  public MaxResults $max_results;
  public __string $next_token;
  public __string $storage_type;
}

class DescribeBrokerInstanceOptionsResponse {
  public __listOfBrokerInstanceOption $broker_instance_options;
  public __integerMin5Max100 $max_results;
  public __string $next_token;
}

class DescribeBrokerOutput {
  public __boolean $auto_minor_version_upgrade;
  public __string $broker_arn;
  public __string $broker_id;
  public __listOfBrokerInstance $broker_instances;
  public __string $broker_name;
  public BrokerState $broker_state;
  public Configurations $configurations;
  public __timestampIso8601 $created;
  public DeploymentMode $deployment_mode;
  public EncryptionOptions $encryption_options;
  public EngineType $engine_type;
  public __string $engine_version;
  public __string $host_instance_type;
  public LogsSummary $logs;
  public WeeklyStartTime $maintenance_window_start_time;
  public __string $pending_engine_version;
  public __string $pending_host_instance_type;
  public __listOf__string $pending_security_groups;
  public __boolean $publicly_accessible;
  public __listOf__string $security_groups;
  public BrokerStorageType $storage_type;
  public __listOf__string $subnet_ids;
  public __mapOf__string $tags;
  public __listOfUserSummary $users;
}

class DescribeBrokerRequest {
  public __string $broker_id;
}

class DescribeBrokerResponse {
  public __boolean $auto_minor_version_upgrade;
  public __string $broker_arn;
  public __string $broker_id;
  public __listOfBrokerInstance $broker_instances;
  public __string $broker_name;
  public BrokerState $broker_state;
  public Configurations $configurations;
  public __timestampIso8601 $created;
  public DeploymentMode $deployment_mode;
  public EncryptionOptions $encryption_options;
  public EngineType $engine_type;
  public __string $engine_version;
  public __string $host_instance_type;
  public LogsSummary $logs;
  public WeeklyStartTime $maintenance_window_start_time;
  public __string $pending_engine_version;
  public __string $pending_host_instance_type;
  public __listOf__string $pending_security_groups;
  public __boolean $publicly_accessible;
  public __listOf__string $security_groups;
  public BrokerStorageType $storage_type;
  public __listOf__string $subnet_ids;
  public __mapOf__string $tags;
  public __listOfUserSummary $users;
}

class DescribeConfigurationRequest {
  public __string $configuration_id;
}

class DescribeConfigurationResponse {
  public __string $arn;
  public __timestampIso8601 $created;
  public __string $description;
  public EngineType $engine_type;
  public __string $engine_version;
  public __string $id;
  public ConfigurationRevision $latest_revision;
  public __string $name;
  public __mapOf__string $tags;
}

class DescribeConfigurationRevisionOutput {
  public __string $configuration_id;
  public __timestampIso8601 $created;
  public __string $data;
  public __string $description;
}

class DescribeConfigurationRevisionRequest {
  public __string $configuration_id;
  public __string $configuration_revision;
}

class DescribeConfigurationRevisionResponse {
  public __string $configuration_id;
  public __timestampIso8601 $created;
  public __string $data;
  public __string $description;
}

class DescribeUserOutput {
  public __string $broker_id;
  public __boolean $console_access;
  public __listOf__string $groups;
  public UserPendingChanges $pending;
  public __string $username;
}

class DescribeUserRequest {
  public __string $broker_id;
  public __string $username;
}

class DescribeUserResponse {
  public __string $broker_id;
  public __boolean $console_access;
  public __listOf__string $groups;
  public UserPendingChanges $pending;
  public __string $username;
}

class EncryptionOptions {
  public __string $kms_key_id;
  public __boolean $use_aws_owned_key;
}

class EngineType {
}

class EngineVersion {
  public __string $name;
}

class Error {
  public __string $error_attribute;
  public __string $message;
}

class ForbiddenException {
  public __string $error_attribute;
  public __string $message;
}

class InternalServerErrorException {
  public __string $error_attribute;
  public __string $message;
}

class ListBrokersOutput {
  public __listOfBrokerSummary $broker_summaries;
  public __string $next_token;
}

class ListBrokersRequest {
  public MaxResults $max_results;
  public __string $next_token;
}

class ListBrokersResponse {
  public __listOfBrokerSummary $broker_summaries;
  public __string $next_token;
}

class ListConfigurationRevisionsOutput {
  public __string $configuration_id;
  public __integer $max_results;
  public __string $next_token;
  public __listOfConfigurationRevision $revisions;
}

class ListConfigurationRevisionsRequest {
  public __string $configuration_id;
  public MaxResults $max_results;
  public __string $next_token;
}

class ListConfigurationRevisionsResponse {
  public __string $configuration_id;
  public __integer $max_results;
  public __string $next_token;
  public __listOfConfigurationRevision $revisions;
}

class ListConfigurationsOutput {
  public __listOfConfiguration $configurations;
  public __integer $max_results;
  public __string $next_token;
}

class ListConfigurationsRequest {
  public MaxResults $max_results;
  public __string $next_token;
}

class ListConfigurationsResponse {
  public __listOfConfiguration $configurations;
  public __integer $max_results;
  public __string $next_token;
}

class ListTagsRequest {
  public __string $resource_arn;
}

class ListTagsResponse {
  public __mapOf__string $tags;
}

class ListUsersOutput {
  public __string $broker_id;
  public __integerMin5Max100 $max_results;
  public __string $next_token;
  public __listOfUserSummary $users;
}

class ListUsersRequest {
  public __string $broker_id;
  public MaxResults $max_results;
  public __string $next_token;
}

class ListUsersResponse {
  public __string $broker_id;
  public __integerMin5Max100 $max_results;
  public __string $next_token;
  public __listOfUserSummary $users;
}

class Logs {
  public __boolean $audit;
  public __boolean $general;
}

class LogsSummary {
  public __boolean $audit;
  public __string $audit_log_group;
  public __boolean $general;
  public __string $general_log_group;
  public PendingLogs $pending;
}

class MaxResults {
}

class NotFoundException {
  public __string $error_attribute;
  public __string $message;
}

class PendingLogs {
  public __boolean $audit;
  public __boolean $general;
}

class RebootBrokerRequest {
  public __string $broker_id;
}

class RebootBrokerResponse {
}

class SanitizationWarning {
  public __string $attribute_name;
  public __string $element_name;
  public SanitizationWarningReason $reason;
}

class SanitizationWarningReason {
}

class Tags {
  public __mapOf__string $tags;
}

class UnauthorizedException {
  public __string $error_attribute;
  public __string $message;
}

class UpdateBrokerInput {
  public __boolean $auto_minor_version_upgrade;
  public ConfigurationId $configuration;
  public __string $engine_version;
  public __string $host_instance_type;
  public Logs $logs;
  public __listOf__string $security_groups;
}

class UpdateBrokerOutput {
  public __boolean $auto_minor_version_upgrade;
  public __string $broker_id;
  public ConfigurationId $configuration;
  public __string $engine_version;
  public __string $host_instance_type;
  public Logs $logs;
  public __listOf__string $security_groups;
}

class UpdateBrokerRequest {
  public __boolean $auto_minor_version_upgrade;
  public __string $broker_id;
  public ConfigurationId $configuration;
  public __string $engine_version;
  public __string $host_instance_type;
  public Logs $logs;
  public __listOf__string $security_groups;
}

class UpdateBrokerResponse {
  public __boolean $auto_minor_version_upgrade;
  public __string $broker_id;
  public ConfigurationId $configuration;
  public __string $engine_version;
  public __string $host_instance_type;
  public Logs $logs;
  public __listOf__string $security_groups;
}

class UpdateConfigurationInput {
  public __string $data;
  public __string $description;
}

class UpdateConfigurationOutput {
  public __string $arn;
  public __timestampIso8601 $created;
  public __string $id;
  public ConfigurationRevision $latest_revision;
  public __string $name;
  public __listOfSanitizationWarning $warnings;
}

class UpdateConfigurationRequest {
  public __string $configuration_id;
  public __string $data;
  public __string $description;
}

class UpdateConfigurationResponse {
  public __string $arn;
  public __timestampIso8601 $created;
  public __string $id;
  public ConfigurationRevision $latest_revision;
  public __string $name;
  public __listOfSanitizationWarning $warnings;
}

class UpdateUserInput {
  public __boolean $console_access;
  public __listOf__string $groups;
  public __string $password;
}

class UpdateUserRequest {
  public __string $broker_id;
  public __boolean $console_access;
  public __listOf__string $groups;
  public __string $password;
  public __string $username;
}

class UpdateUserResponse {
}

class User {
  public __boolean $console_access;
  public __listOf__string $groups;
  public __string $password;
  public __string $username;
}

class UserPendingChanges {
  public __boolean $console_access;
  public __listOf__string $groups;
  public ChangeType $pending_change;
}

class UserSummary {
  public ChangeType $pending_change;
  public __string $username;
}

class WeeklyStartTime {
  public DayOfWeek $day_of_week;
  public __string $time_of_day;
  public __string $time_zone;
}

class __boolean {
}

class __double {
}

class __integer {
}

class __integerMin5Max100 {
}

class __listOfAvailabilityZone {
}

class __listOfBrokerEngineType {
}

class __listOfBrokerInstance {
}

class __listOfBrokerInstanceOption {
}

class __listOfBrokerSummary {
}

class __listOfConfiguration {
}

class __listOfConfigurationId {
}

class __listOfConfigurationRevision {
}

class __listOfDeploymentMode {
}

class __listOfEngineVersion {
}

class __listOfSanitizationWarning {
}

class __listOfUser {
}

class __listOfUserSummary {
}

class __listOf__string {
}

class __long {
}

class __mapOf__string {
}

class __string {
}

class __timestampIso8601 {
}

class __timestampUnix {
}


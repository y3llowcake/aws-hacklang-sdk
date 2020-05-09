<?hh // strict
namespace slack\aws\serverlessrepo;

interface ServerlessApplicationRepository {
  public function CreateApplication(CreateApplicationRequest) Awaitable<Errors\Result<CreateApplicationResponse>>;
  public function CreateApplicationVersion(CreateApplicationVersionRequest) Awaitable<Errors\Result<CreateApplicationVersionResponse>>;
  public function CreateCloudFormationChangeSet(CreateCloudFormationChangeSetRequest) Awaitable<Errors\Result<CreateCloudFormationChangeSetResponse>>;
  public function CreateCloudFormationTemplate(CreateCloudFormationTemplateRequest) Awaitable<Errors\Result<CreateCloudFormationTemplateResponse>>;
  public function DeleteApplication(DeleteApplicationRequest) Awaitable<Errors\Error>;
  public function GetApplication(GetApplicationRequest) Awaitable<Errors\Result<GetApplicationResponse>>;
  public function GetApplicationPolicy(GetApplicationPolicyRequest) Awaitable<Errors\Result<GetApplicationPolicyResponse>>;
  public function GetCloudFormationTemplate(GetCloudFormationTemplateRequest) Awaitable<Errors\Result<GetCloudFormationTemplateResponse>>;
  public function ListApplicationDependencies(ListApplicationDependenciesRequest) Awaitable<Errors\Result<ListApplicationDependenciesResponse>>;
  public function ListApplicationVersions(ListApplicationVersionsRequest) Awaitable<Errors\Result<ListApplicationVersionsResponse>>;
  public function ListApplications(ListApplicationsRequest) Awaitable<Errors\Result<ListApplicationsResponse>>;
  public function PutApplicationPolicy(PutApplicationPolicyRequest) Awaitable<Errors\Result<PutApplicationPolicyResponse>>;
  public function UnshareApplication(UnshareApplicationRequest) Awaitable<Errors\Error>;
  public function UpdateApplication(UpdateApplicationRequest) Awaitable<Errors\Result<UpdateApplicationResponse>>;
}

class Application {
  public __string $application_id;
  public __string $author;
  public __string $creation_time;
  public __string $description;
  public __string $home_page_url;
  public __boolean $is_verified_author;
  public __listOf__string $labels;
  public __string $license_url;
  public __string $name;
  public __string $readme_url;
  public __string $spdx_license_id;
  public __string $verified_author_url;
  public Version $version;
}

class ApplicationDependencyPage {
  public __listOfApplicationDependencySummary $dependencies;
  public __string $next_token;
}

class ApplicationDependencySummary {
  public __string $application_id;
  public __string $semantic_version;
}

class ApplicationPage {
  public __listOfApplicationSummary $applications;
  public __string $next_token;
}

class ApplicationPolicy {
  public __listOfApplicationPolicyStatement $statements;
}

class ApplicationPolicyStatement {
  public __listOf__string $actions;
  public __listOf__string $principal_org_i_ds;
  public __listOf__string $principals;
  public __string $statement_id;
}

class ApplicationSummary {
  public __string $application_id;
  public __string $author;
  public __string $creation_time;
  public __string $description;
  public __string $home_page_url;
  public __listOf__string $labels;
  public __string $name;
  public __string $spdx_license_id;
}

class ApplicationVersionPage {
  public __string $next_token;
  public __listOfVersionSummary $versions;
}

class BadRequestException {
  public __string $error_code;
  public __string $message;
}

class Capability {
}

class ChangeSetDetails {
  public __string $application_id;
  public __string $change_set_id;
  public __string $semantic_version;
  public __string $stack_id;
}

class ConflictException {
  public __string $error_code;
  public __string $message;
}

class CreateApplicationInput {
  public __string $author;
  public __string $description;
  public __string $home_page_url;
  public __listOf__string $labels;
  public __string $license_body;
  public __string $license_url;
  public __string $name;
  public __string $readme_body;
  public __string $readme_url;
  public __string $semantic_version;
  public __string $source_code_archive_url;
  public __string $source_code_url;
  public __string $spdx_license_id;
  public __string $template_body;
  public __string $template_url;
}

class CreateApplicationRequest {
  public __string $author;
  public __string $description;
  public __string $home_page_url;
  public __listOf__string $labels;
  public __string $license_body;
  public __string $license_url;
  public __string $name;
  public __string $readme_body;
  public __string $readme_url;
  public __string $semantic_version;
  public __string $source_code_archive_url;
  public __string $source_code_url;
  public __string $spdx_license_id;
  public __string $template_body;
  public __string $template_url;
}

class CreateApplicationResponse {
  public __string $application_id;
  public __string $author;
  public __string $creation_time;
  public __string $description;
  public __string $home_page_url;
  public __boolean $is_verified_author;
  public __listOf__string $labels;
  public __string $license_url;
  public __string $name;
  public __string $readme_url;
  public __string $spdx_license_id;
  public __string $verified_author_url;
  public Version $version;
}

class CreateApplicationVersionInput {
  public __string $source_code_archive_url;
  public __string $source_code_url;
  public __string $template_body;
  public __string $template_url;
}

class CreateApplicationVersionRequest {
  public __string $application_id;
  public __string $semantic_version;
  public __string $source_code_archive_url;
  public __string $source_code_url;
  public __string $template_body;
  public __string $template_url;
}

class CreateApplicationVersionResponse {
  public __string $application_id;
  public __string $creation_time;
  public __listOfParameterDefinition $parameter_definitions;
  public __listOfCapability $required_capabilities;
  public __boolean $resources_supported;
  public __string $semantic_version;
  public __string $source_code_archive_url;
  public __string $source_code_url;
  public __string $template_url;
}

class CreateCloudFormationChangeSetInput {
  public __listOf__string $capabilities;
  public __string $change_set_name;
  public __string $client_token;
  public __string $description;
  public __listOf__string $notification_arns;
  public __listOfParameterValue $parameter_overrides;
  public __listOf__string $resource_types;
  public RollbackConfiguration $rollback_configuration;
  public __string $semantic_version;
  public __string $stack_name;
  public __listOfTag $tags;
  public __string $template_id;
}

class CreateCloudFormationChangeSetRequest {
  public __string $application_id;
  public __listOf__string $capabilities;
  public __string $change_set_name;
  public __string $client_token;
  public __string $description;
  public __listOf__string $notification_arns;
  public __listOfParameterValue $parameter_overrides;
  public __listOf__string $resource_types;
  public RollbackConfiguration $rollback_configuration;
  public __string $semantic_version;
  public __string $stack_name;
  public __listOfTag $tags;
  public __string $template_id;
}

class CreateCloudFormationChangeSetResponse {
  public __string $application_id;
  public __string $change_set_id;
  public __string $semantic_version;
  public __string $stack_id;
}

class CreateCloudFormationTemplateRequest {
  public __string $application_id;
  public __string $semantic_version;
}

class CreateCloudFormationTemplateResponse {
  public __string $application_id;
  public __string $creation_time;
  public __string $expiration_time;
  public __string $semantic_version;
  public Status $status;
  public __string $template_id;
  public __string $template_url;
}

class DeleteApplicationRequest {
  public __string $application_id;
}

class ForbiddenException {
  public __string $error_code;
  public __string $message;
}

class GetApplicationPolicyRequest {
  public __string $application_id;
}

class GetApplicationPolicyResponse {
  public __listOfApplicationPolicyStatement $statements;
}

class GetApplicationRequest {
  public __string $application_id;
  public __string $semantic_version;
}

class GetApplicationResponse {
  public __string $application_id;
  public __string $author;
  public __string $creation_time;
  public __string $description;
  public __string $home_page_url;
  public __boolean $is_verified_author;
  public __listOf__string $labels;
  public __string $license_url;
  public __string $name;
  public __string $readme_url;
  public __string $spdx_license_id;
  public __string $verified_author_url;
  public Version $version;
}

class GetCloudFormationTemplateRequest {
  public __string $application_id;
  public __string $template_id;
}

class GetCloudFormationTemplateResponse {
  public __string $application_id;
  public __string $creation_time;
  public __string $expiration_time;
  public __string $semantic_version;
  public Status $status;
  public __string $template_id;
  public __string $template_url;
}

class InternalServerErrorException {
  public __string $error_code;
  public __string $message;
}

class ListApplicationDependenciesRequest {
  public __string $application_id;
  public MaxItems $max_items;
  public __string $next_token;
  public __string $semantic_version;
}

class ListApplicationDependenciesResponse {
  public __listOfApplicationDependencySummary $dependencies;
  public __string $next_token;
}

class ListApplicationVersionsRequest {
  public __string $application_id;
  public MaxItems $max_items;
  public __string $next_token;
}

class ListApplicationVersionsResponse {
  public __string $next_token;
  public __listOfVersionSummary $versions;
}

class ListApplicationsRequest {
  public MaxItems $max_items;
  public __string $next_token;
}

class ListApplicationsResponse {
  public __listOfApplicationSummary $applications;
  public __string $next_token;
}

class MaxItems {
}

class NotFoundException {
  public __string $error_code;
  public __string $message;
}

class ParameterDefinition {
  public __string $allowed_pattern;
  public __listOf__string $allowed_values;
  public __string $constraint_description;
  public __string $default_value;
  public __string $description;
  public __integer $max_length;
  public __integer $max_value;
  public __integer $min_length;
  public __integer $min_value;
  public __string $name;
  public __boolean $no_echo;
  public __listOf__string $referenced_by_resources;
  public __string $type;
}

class ParameterValue {
  public __string $name;
  public __string $value;
}

class PutApplicationPolicyRequest {
  public __string $application_id;
  public __listOfApplicationPolicyStatement $statements;
}

class PutApplicationPolicyResponse {
  public __listOfApplicationPolicyStatement $statements;
}

class RollbackConfiguration {
  public __integer $monitoring_time_in_minutes;
  public __listOfRollbackTrigger $rollback_triggers;
}

class RollbackTrigger {
  public __string $arn;
  public __string $type;
}

class Status {
}

class Tag {
  public __string $key;
  public __string $value;
}

class TemplateDetails {
  public __string $application_id;
  public __string $creation_time;
  public __string $expiration_time;
  public __string $semantic_version;
  public Status $status;
  public __string $template_id;
  public __string $template_url;
}

class TooManyRequestsException {
  public __string $error_code;
  public __string $message;
}

class UnshareApplicationInput {
  public __string $organization_id;
}

class UnshareApplicationRequest {
  public __string $application_id;
  public __string $organization_id;
}

class UpdateApplicationInput {
  public __string $author;
  public __string $description;
  public __string $home_page_url;
  public __listOf__string $labels;
  public __string $readme_body;
  public __string $readme_url;
}

class UpdateApplicationRequest {
  public __string $application_id;
  public __string $author;
  public __string $description;
  public __string $home_page_url;
  public __listOf__string $labels;
  public __string $readme_body;
  public __string $readme_url;
}

class UpdateApplicationResponse {
  public __string $application_id;
  public __string $author;
  public __string $creation_time;
  public __string $description;
  public __string $home_page_url;
  public __boolean $is_verified_author;
  public __listOf__string $labels;
  public __string $license_url;
  public __string $name;
  public __string $readme_url;
  public __string $spdx_license_id;
  public __string $verified_author_url;
  public Version $version;
}

class Version {
  public __string $application_id;
  public __string $creation_time;
  public __listOfParameterDefinition $parameter_definitions;
  public __listOfCapability $required_capabilities;
  public __boolean $resources_supported;
  public __string $semantic_version;
  public __string $source_code_archive_url;
  public __string $source_code_url;
  public __string $template_url;
}

class VersionSummary {
  public __string $application_id;
  public __string $creation_time;
  public __string $semantic_version;
  public __string $source_code_url;
}

class __boolean {
}

class __double {
}

class __integer {
}

class __listOfApplicationDependencySummary {
}

class __listOfApplicationPolicyStatement {
}

class __listOfApplicationSummary {
}

class __listOfCapability {
}

class __listOfParameterDefinition {
}

class __listOfParameterValue {
}

class __listOfRollbackTrigger {
}

class __listOfTag {
}

class __listOfVersionSummary {
}

class __listOf__string {
}

class __long {
}

class __string {
}


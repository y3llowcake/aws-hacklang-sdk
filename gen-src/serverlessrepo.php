<?hh // strict
namespace slack\aws\serverlessrepo;

interface ServerlessApplicationRepository {
  public function CreateApplication(CreateApplicationRequest): Awaitable<Errors\Result<CreateApplicationResponse>>;
  public function CreateApplicationVersion(CreateApplicationVersionRequest): Awaitable<Errors\Result<CreateApplicationVersionResponse>>;
  public function CreateCloudFormationChangeSet(CreateCloudFormationChangeSetRequest): Awaitable<Errors\Result<CreateCloudFormationChangeSetResponse>>;
  public function CreateCloudFormationTemplate(CreateCloudFormationTemplateRequest): Awaitable<Errors\Result<CreateCloudFormationTemplateResponse>>;
  public function DeleteApplication(DeleteApplicationRequest): Awaitable<Errors\Error>;
  public function GetApplication(GetApplicationRequest): Awaitable<Errors\Result<GetApplicationResponse>>;
  public function GetApplicationPolicy(GetApplicationPolicyRequest): Awaitable<Errors\Result<GetApplicationPolicyResponse>>;
  public function GetCloudFormationTemplate(GetCloudFormationTemplateRequest): Awaitable<Errors\Result<GetCloudFormationTemplateResponse>>;
  public function ListApplicationDependencies(ListApplicationDependenciesRequest): Awaitable<Errors\Result<ListApplicationDependenciesResponse>>;
  public function ListApplicationVersions(ListApplicationVersionsRequest): Awaitable<Errors\Result<ListApplicationVersionsResponse>>;
  public function ListApplications(ListApplicationsRequest): Awaitable<Errors\Result<ListApplicationsResponse>>;
  public function PutApplicationPolicy(PutApplicationPolicyRequest): Awaitable<Errors\Result<PutApplicationPolicyResponse>>;
  public function UnshareApplication(UnshareApplicationRequest): Awaitable<Errors\Error>;
  public function UpdateApplication(UpdateApplicationRequest): Awaitable<Errors\Result<UpdateApplicationResponse>>;
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'author' => __string,
  ?'creation_time' => __string,
  ?'description' => __string,
  ?'home_page_url' => __string,
  ?'is_verified_author' => __boolean,
  ?'labels' => __listOf__string,
  ?'license_url' => __string,
  ?'name' => __string,
  ?'readme_url' => __string,
  ?'spdx_license_id' => __string,
  ?'verified_author_url' => __string,
  ?'version' => Version,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->author = $author ?? "";
    $this->creation_time = $creation_time ?? "";
    $this->description = $description ?? "";
    $this->home_page_url = $home_page_url ?? "";
    $this->is_verified_author = $is_verified_author ?? false;
    $this->labels = $labels ?? [];
    $this->license_url = $license_url ?? "";
    $this->name = $name ?? "";
    $this->readme_url = $readme_url ?? "";
    $this->spdx_license_id = $spdx_license_id ?? "";
    $this->verified_author_url = $verified_author_url ?? "";
    $this->version = $version ?? null;
  }
}

class ApplicationDependencyPage {
  public __listOfApplicationDependencySummary $dependencies;
  public __string $next_token;

  public function __construct(shape(
  ?'dependencies' => __listOfApplicationDependencySummary,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->dependencies = $dependencies ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ApplicationDependencySummary {
  public __string $application_id;
  public __string $semantic_version;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'semantic_version' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->semantic_version = $semantic_version ?? "";
  }
}

class ApplicationPage {
  public __listOfApplicationSummary $applications;
  public __string $next_token;

  public function __construct(shape(
  ?'applications' => __listOfApplicationSummary,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->applications = $applications ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ApplicationPolicy {
  public __listOfApplicationPolicyStatement $statements;

  public function __construct(shape(
  ?'statements' => __listOfApplicationPolicyStatement,
  ) $s = shape()) {
    $this->statements = $statements ?? [];
  }
}

class ApplicationPolicyStatement {
  public __listOf__string $actions;
  public __listOf__string $principal_org_i_ds;
  public __listOf__string $principals;
  public __string $statement_id;

  public function __construct(shape(
  ?'actions' => __listOf__string,
  ?'principal_org_i_ds' => __listOf__string,
  ?'principals' => __listOf__string,
  ?'statement_id' => __string,
  ) $s = shape()) {
    $this->actions = $actions ?? [];
    $this->principal_org_i_ds = $principal_org_i_ds ?? [];
    $this->principals = $principals ?? [];
    $this->statement_id = $statement_id ?? "";
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'author' => __string,
  ?'creation_time' => __string,
  ?'description' => __string,
  ?'home_page_url' => __string,
  ?'labels' => __listOf__string,
  ?'name' => __string,
  ?'spdx_license_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->author = $author ?? "";
    $this->creation_time = $creation_time ?? "";
    $this->description = $description ?? "";
    $this->home_page_url = $home_page_url ?? "";
    $this->labels = $labels ?? [];
    $this->name = $name ?? "";
    $this->spdx_license_id = $spdx_license_id ?? "";
  }
}

class ApplicationVersionPage {
  public __string $next_token;
  public __listOfVersionSummary $versions;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'versions' => __listOfVersionSummary,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->versions = $versions ?? [];
  }
}

class BadRequestException {
  public __string $error_code;
  public __string $message;

  public function __construct(shape(
  ?'error_code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? "";
  }
}

type Capability = string;

class ChangeSetDetails {
  public __string $application_id;
  public __string $change_set_id;
  public __string $semantic_version;
  public __string $stack_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'change_set_id' => __string,
  ?'semantic_version' => __string,
  ?'stack_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->change_set_id = $change_set_id ?? "";
    $this->semantic_version = $semantic_version ?? "";
    $this->stack_id = $stack_id ?? "";
  }
}

class ConflictException {
  public __string $error_code;
  public __string $message;

  public function __construct(shape(
  ?'error_code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'author' => __string,
  ?'description' => __string,
  ?'home_page_url' => __string,
  ?'labels' => __listOf__string,
  ?'license_body' => __string,
  ?'license_url' => __string,
  ?'name' => __string,
  ?'readme_body' => __string,
  ?'readme_url' => __string,
  ?'semantic_version' => __string,
  ?'source_code_archive_url' => __string,
  ?'source_code_url' => __string,
  ?'spdx_license_id' => __string,
  ?'template_body' => __string,
  ?'template_url' => __string,
  ) $s = shape()) {
    $this->author = $author ?? "";
    $this->description = $description ?? "";
    $this->home_page_url = $home_page_url ?? "";
    $this->labels = $labels ?? [];
    $this->license_body = $license_body ?? "";
    $this->license_url = $license_url ?? "";
    $this->name = $name ?? "";
    $this->readme_body = $readme_body ?? "";
    $this->readme_url = $readme_url ?? "";
    $this->semantic_version = $semantic_version ?? "";
    $this->source_code_archive_url = $source_code_archive_url ?? "";
    $this->source_code_url = $source_code_url ?? "";
    $this->spdx_license_id = $spdx_license_id ?? "";
    $this->template_body = $template_body ?? "";
    $this->template_url = $template_url ?? "";
  }
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

  public function __construct(shape(
  ?'author' => __string,
  ?'description' => __string,
  ?'home_page_url' => __string,
  ?'labels' => __listOf__string,
  ?'license_body' => __string,
  ?'license_url' => __string,
  ?'name' => __string,
  ?'readme_body' => __string,
  ?'readme_url' => __string,
  ?'semantic_version' => __string,
  ?'source_code_archive_url' => __string,
  ?'source_code_url' => __string,
  ?'spdx_license_id' => __string,
  ?'template_body' => __string,
  ?'template_url' => __string,
  ) $s = shape()) {
    $this->author = $author ?? "";
    $this->description = $description ?? "";
    $this->home_page_url = $home_page_url ?? "";
    $this->labels = $labels ?? [];
    $this->license_body = $license_body ?? "";
    $this->license_url = $license_url ?? "";
    $this->name = $name ?? "";
    $this->readme_body = $readme_body ?? "";
    $this->readme_url = $readme_url ?? "";
    $this->semantic_version = $semantic_version ?? "";
    $this->source_code_archive_url = $source_code_archive_url ?? "";
    $this->source_code_url = $source_code_url ?? "";
    $this->spdx_license_id = $spdx_license_id ?? "";
    $this->template_body = $template_body ?? "";
    $this->template_url = $template_url ?? "";
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'author' => __string,
  ?'creation_time' => __string,
  ?'description' => __string,
  ?'home_page_url' => __string,
  ?'is_verified_author' => __boolean,
  ?'labels' => __listOf__string,
  ?'license_url' => __string,
  ?'name' => __string,
  ?'readme_url' => __string,
  ?'spdx_license_id' => __string,
  ?'verified_author_url' => __string,
  ?'version' => Version,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->author = $author ?? "";
    $this->creation_time = $creation_time ?? "";
    $this->description = $description ?? "";
    $this->home_page_url = $home_page_url ?? "";
    $this->is_verified_author = $is_verified_author ?? false;
    $this->labels = $labels ?? [];
    $this->license_url = $license_url ?? "";
    $this->name = $name ?? "";
    $this->readme_url = $readme_url ?? "";
    $this->spdx_license_id = $spdx_license_id ?? "";
    $this->verified_author_url = $verified_author_url ?? "";
    $this->version = $version ?? null;
  }
}

class CreateApplicationVersionInput {
  public __string $source_code_archive_url;
  public __string $source_code_url;
  public __string $template_body;
  public __string $template_url;

  public function __construct(shape(
  ?'source_code_archive_url' => __string,
  ?'source_code_url' => __string,
  ?'template_body' => __string,
  ?'template_url' => __string,
  ) $s = shape()) {
    $this->source_code_archive_url = $source_code_archive_url ?? "";
    $this->source_code_url = $source_code_url ?? "";
    $this->template_body = $template_body ?? "";
    $this->template_url = $template_url ?? "";
  }
}

class CreateApplicationVersionRequest {
  public __string $application_id;
  public __string $semantic_version;
  public __string $source_code_archive_url;
  public __string $source_code_url;
  public __string $template_body;
  public __string $template_url;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'semantic_version' => __string,
  ?'source_code_archive_url' => __string,
  ?'source_code_url' => __string,
  ?'template_body' => __string,
  ?'template_url' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->semantic_version = $semantic_version ?? "";
    $this->source_code_archive_url = $source_code_archive_url ?? "";
    $this->source_code_url = $source_code_url ?? "";
    $this->template_body = $template_body ?? "";
    $this->template_url = $template_url ?? "";
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'creation_time' => __string,
  ?'parameter_definitions' => __listOfParameterDefinition,
  ?'required_capabilities' => __listOfCapability,
  ?'resources_supported' => __boolean,
  ?'semantic_version' => __string,
  ?'source_code_archive_url' => __string,
  ?'source_code_url' => __string,
  ?'template_url' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->creation_time = $creation_time ?? "";
    $this->parameter_definitions = $parameter_definitions ?? [];
    $this->required_capabilities = $required_capabilities ?? [];
    $this->resources_supported = $resources_supported ?? false;
    $this->semantic_version = $semantic_version ?? "";
    $this->source_code_archive_url = $source_code_archive_url ?? "";
    $this->source_code_url = $source_code_url ?? "";
    $this->template_url = $template_url ?? "";
  }
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

  public function __construct(shape(
  ?'capabilities' => __listOf__string,
  ?'change_set_name' => __string,
  ?'client_token' => __string,
  ?'description' => __string,
  ?'notification_arns' => __listOf__string,
  ?'parameter_overrides' => __listOfParameterValue,
  ?'resource_types' => __listOf__string,
  ?'rollback_configuration' => RollbackConfiguration,
  ?'semantic_version' => __string,
  ?'stack_name' => __string,
  ?'tags' => __listOfTag,
  ?'template_id' => __string,
  ) $s = shape()) {
    $this->capabilities = $capabilities ?? [];
    $this->change_set_name = $change_set_name ?? "";
    $this->client_token = $client_token ?? "";
    $this->description = $description ?? "";
    $this->notification_arns = $notification_arns ?? [];
    $this->parameter_overrides = $parameter_overrides ?? [];
    $this->resource_types = $resource_types ?? [];
    $this->rollback_configuration = $rollback_configuration ?? null;
    $this->semantic_version = $semantic_version ?? "";
    $this->stack_name = $stack_name ?? "";
    $this->tags = $tags ?? [];
    $this->template_id = $template_id ?? "";
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'capabilities' => __listOf__string,
  ?'change_set_name' => __string,
  ?'client_token' => __string,
  ?'description' => __string,
  ?'notification_arns' => __listOf__string,
  ?'parameter_overrides' => __listOfParameterValue,
  ?'resource_types' => __listOf__string,
  ?'rollback_configuration' => RollbackConfiguration,
  ?'semantic_version' => __string,
  ?'stack_name' => __string,
  ?'tags' => __listOfTag,
  ?'template_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->capabilities = $capabilities ?? [];
    $this->change_set_name = $change_set_name ?? "";
    $this->client_token = $client_token ?? "";
    $this->description = $description ?? "";
    $this->notification_arns = $notification_arns ?? [];
    $this->parameter_overrides = $parameter_overrides ?? [];
    $this->resource_types = $resource_types ?? [];
    $this->rollback_configuration = $rollback_configuration ?? null;
    $this->semantic_version = $semantic_version ?? "";
    $this->stack_name = $stack_name ?? "";
    $this->tags = $tags ?? [];
    $this->template_id = $template_id ?? "";
  }
}

class CreateCloudFormationChangeSetResponse {
  public __string $application_id;
  public __string $change_set_id;
  public __string $semantic_version;
  public __string $stack_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'change_set_id' => __string,
  ?'semantic_version' => __string,
  ?'stack_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->change_set_id = $change_set_id ?? "";
    $this->semantic_version = $semantic_version ?? "";
    $this->stack_id = $stack_id ?? "";
  }
}

class CreateCloudFormationTemplateRequest {
  public __string $application_id;
  public __string $semantic_version;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'semantic_version' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->semantic_version = $semantic_version ?? "";
  }
}

class CreateCloudFormationTemplateResponse {
  public __string $application_id;
  public __string $creation_time;
  public __string $expiration_time;
  public __string $semantic_version;
  public Status $status;
  public __string $template_id;
  public __string $template_url;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'creation_time' => __string,
  ?'expiration_time' => __string,
  ?'semantic_version' => __string,
  ?'status' => Status,
  ?'template_id' => __string,
  ?'template_url' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->creation_time = $creation_time ?? "";
    $this->expiration_time = $expiration_time ?? "";
    $this->semantic_version = $semantic_version ?? "";
    $this->status = $status ?? "";
    $this->template_id = $template_id ?? "";
    $this->template_url = $template_url ?? "";
  }
}

class DeleteApplicationRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
  }
}

class ForbiddenException {
  public __string $error_code;
  public __string $message;

  public function __construct(shape(
  ?'error_code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? "";
  }
}

class GetApplicationPolicyRequest {
  public __string $application_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
  }
}

class GetApplicationPolicyResponse {
  public __listOfApplicationPolicyStatement $statements;

  public function __construct(shape(
  ?'statements' => __listOfApplicationPolicyStatement,
  ) $s = shape()) {
    $this->statements = $statements ?? [];
  }
}

class GetApplicationRequest {
  public __string $application_id;
  public __string $semantic_version;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'semantic_version' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->semantic_version = $semantic_version ?? "";
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'author' => __string,
  ?'creation_time' => __string,
  ?'description' => __string,
  ?'home_page_url' => __string,
  ?'is_verified_author' => __boolean,
  ?'labels' => __listOf__string,
  ?'license_url' => __string,
  ?'name' => __string,
  ?'readme_url' => __string,
  ?'spdx_license_id' => __string,
  ?'verified_author_url' => __string,
  ?'version' => Version,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->author = $author ?? "";
    $this->creation_time = $creation_time ?? "";
    $this->description = $description ?? "";
    $this->home_page_url = $home_page_url ?? "";
    $this->is_verified_author = $is_verified_author ?? false;
    $this->labels = $labels ?? [];
    $this->license_url = $license_url ?? "";
    $this->name = $name ?? "";
    $this->readme_url = $readme_url ?? "";
    $this->spdx_license_id = $spdx_license_id ?? "";
    $this->verified_author_url = $verified_author_url ?? "";
    $this->version = $version ?? null;
  }
}

class GetCloudFormationTemplateRequest {
  public __string $application_id;
  public __string $template_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'template_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->template_id = $template_id ?? "";
  }
}

class GetCloudFormationTemplateResponse {
  public __string $application_id;
  public __string $creation_time;
  public __string $expiration_time;
  public __string $semantic_version;
  public Status $status;
  public __string $template_id;
  public __string $template_url;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'creation_time' => __string,
  ?'expiration_time' => __string,
  ?'semantic_version' => __string,
  ?'status' => Status,
  ?'template_id' => __string,
  ?'template_url' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->creation_time = $creation_time ?? "";
    $this->expiration_time = $expiration_time ?? "";
    $this->semantic_version = $semantic_version ?? "";
    $this->status = $status ?? "";
    $this->template_id = $template_id ?? "";
    $this->template_url = $template_url ?? "";
  }
}

class InternalServerErrorException {
  public __string $error_code;
  public __string $message;

  public function __construct(shape(
  ?'error_code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? "";
  }
}

class ListApplicationDependenciesRequest {
  public __string $application_id;
  public MaxItems $max_items;
  public __string $next_token;
  public __string $semantic_version;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'max_items' => MaxItems,
  ?'next_token' => __string,
  ?'semantic_version' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->max_items = $max_items ?? 0;
    $this->next_token = $next_token ?? "";
    $this->semantic_version = $semantic_version ?? "";
  }
}

class ListApplicationDependenciesResponse {
  public __listOfApplicationDependencySummary $dependencies;
  public __string $next_token;

  public function __construct(shape(
  ?'dependencies' => __listOfApplicationDependencySummary,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->dependencies = $dependencies ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListApplicationVersionsRequest {
  public __string $application_id;
  public MaxItems $max_items;
  public __string $next_token;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'max_items' => MaxItems,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->max_items = $max_items ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListApplicationVersionsResponse {
  public __string $next_token;
  public __listOfVersionSummary $versions;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'versions' => __listOfVersionSummary,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->versions = $versions ?? [];
  }
}

class ListApplicationsRequest {
  public MaxItems $max_items;
  public __string $next_token;

  public function __construct(shape(
  ?'max_items' => MaxItems,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->max_items = $max_items ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListApplicationsResponse {
  public __listOfApplicationSummary $applications;
  public __string $next_token;

  public function __construct(shape(
  ?'applications' => __listOfApplicationSummary,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->applications = $applications ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type MaxItems = int;

class NotFoundException {
  public __string $error_code;
  public __string $message;

  public function __construct(shape(
  ?'error_code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'allowed_pattern' => __string,
  ?'allowed_values' => __listOf__string,
  ?'constraint_description' => __string,
  ?'default_value' => __string,
  ?'description' => __string,
  ?'max_length' => __integer,
  ?'max_value' => __integer,
  ?'min_length' => __integer,
  ?'min_value' => __integer,
  ?'name' => __string,
  ?'no_echo' => __boolean,
  ?'referenced_by_resources' => __listOf__string,
  ?'type' => __string,
  ) $s = shape()) {
    $this->allowed_pattern = $allowed_pattern ?? "";
    $this->allowed_values = $allowed_values ?? [];
    $this->constraint_description = $constraint_description ?? "";
    $this->default_value = $default_value ?? "";
    $this->description = $description ?? "";
    $this->max_length = $max_length ?? 0;
    $this->max_value = $max_value ?? 0;
    $this->min_length = $min_length ?? 0;
    $this->min_value = $min_value ?? 0;
    $this->name = $name ?? "";
    $this->no_echo = $no_echo ?? false;
    $this->referenced_by_resources = $referenced_by_resources ?? [];
    $this->type = $type ?? "";
  }
}

class ParameterValue {
  public __string $name;
  public __string $value;

  public function __construct(shape(
  ?'name' => __string,
  ?'value' => __string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

class PutApplicationPolicyRequest {
  public __string $application_id;
  public __listOfApplicationPolicyStatement $statements;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'statements' => __listOfApplicationPolicyStatement,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->statements = $statements ?? [];
  }
}

class PutApplicationPolicyResponse {
  public __listOfApplicationPolicyStatement $statements;

  public function __construct(shape(
  ?'statements' => __listOfApplicationPolicyStatement,
  ) $s = shape()) {
    $this->statements = $statements ?? [];
  }
}

class RollbackConfiguration {
  public __integer $monitoring_time_in_minutes;
  public __listOfRollbackTrigger $rollback_triggers;

  public function __construct(shape(
  ?'monitoring_time_in_minutes' => __integer,
  ?'rollback_triggers' => __listOfRollbackTrigger,
  ) $s = shape()) {
    $this->monitoring_time_in_minutes = $monitoring_time_in_minutes ?? 0;
    $this->rollback_triggers = $rollback_triggers ?? [];
  }
}

class RollbackTrigger {
  public __string $arn;
  public __string $type;

  public function __construct(shape(
  ?'arn' => __string,
  ?'type' => __string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->type = $type ?? "";
  }
}

type Status = string;

class Tag {
  public __string $key;
  public __string $value;

  public function __construct(shape(
  ?'key' => __string,
  ?'value' => __string,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

class TemplateDetails {
  public __string $application_id;
  public __string $creation_time;
  public __string $expiration_time;
  public __string $semantic_version;
  public Status $status;
  public __string $template_id;
  public __string $template_url;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'creation_time' => __string,
  ?'expiration_time' => __string,
  ?'semantic_version' => __string,
  ?'status' => Status,
  ?'template_id' => __string,
  ?'template_url' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->creation_time = $creation_time ?? "";
    $this->expiration_time = $expiration_time ?? "";
    $this->semantic_version = $semantic_version ?? "";
    $this->status = $status ?? "";
    $this->template_id = $template_id ?? "";
    $this->template_url = $template_url ?? "";
  }
}

class TooManyRequestsException {
  public __string $error_code;
  public __string $message;

  public function __construct(shape(
  ?'error_code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? "";
  }
}

class UnshareApplicationInput {
  public __string $organization_id;

  public function __construct(shape(
  ?'organization_id' => __string,
  ) $s = shape()) {
    $this->organization_id = $organization_id ?? "";
  }
}

class UnshareApplicationRequest {
  public __string $application_id;
  public __string $organization_id;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'organization_id' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->organization_id = $organization_id ?? "";
  }
}

class UpdateApplicationInput {
  public __string $author;
  public __string $description;
  public __string $home_page_url;
  public __listOf__string $labels;
  public __string $readme_body;
  public __string $readme_url;

  public function __construct(shape(
  ?'author' => __string,
  ?'description' => __string,
  ?'home_page_url' => __string,
  ?'labels' => __listOf__string,
  ?'readme_body' => __string,
  ?'readme_url' => __string,
  ) $s = shape()) {
    $this->author = $author ?? "";
    $this->description = $description ?? "";
    $this->home_page_url = $home_page_url ?? "";
    $this->labels = $labels ?? [];
    $this->readme_body = $readme_body ?? "";
    $this->readme_url = $readme_url ?? "";
  }
}

class UpdateApplicationRequest {
  public __string $application_id;
  public __string $author;
  public __string $description;
  public __string $home_page_url;
  public __listOf__string $labels;
  public __string $readme_body;
  public __string $readme_url;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'author' => __string,
  ?'description' => __string,
  ?'home_page_url' => __string,
  ?'labels' => __listOf__string,
  ?'readme_body' => __string,
  ?'readme_url' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->author = $author ?? "";
    $this->description = $description ?? "";
    $this->home_page_url = $home_page_url ?? "";
    $this->labels = $labels ?? [];
    $this->readme_body = $readme_body ?? "";
    $this->readme_url = $readme_url ?? "";
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'author' => __string,
  ?'creation_time' => __string,
  ?'description' => __string,
  ?'home_page_url' => __string,
  ?'is_verified_author' => __boolean,
  ?'labels' => __listOf__string,
  ?'license_url' => __string,
  ?'name' => __string,
  ?'readme_url' => __string,
  ?'spdx_license_id' => __string,
  ?'verified_author_url' => __string,
  ?'version' => Version,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->author = $author ?? "";
    $this->creation_time = $creation_time ?? "";
    $this->description = $description ?? "";
    $this->home_page_url = $home_page_url ?? "";
    $this->is_verified_author = $is_verified_author ?? false;
    $this->labels = $labels ?? [];
    $this->license_url = $license_url ?? "";
    $this->name = $name ?? "";
    $this->readme_url = $readme_url ?? "";
    $this->spdx_license_id = $spdx_license_id ?? "";
    $this->verified_author_url = $verified_author_url ?? "";
    $this->version = $version ?? null;
  }
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

  public function __construct(shape(
  ?'application_id' => __string,
  ?'creation_time' => __string,
  ?'parameter_definitions' => __listOfParameterDefinition,
  ?'required_capabilities' => __listOfCapability,
  ?'resources_supported' => __boolean,
  ?'semantic_version' => __string,
  ?'source_code_archive_url' => __string,
  ?'source_code_url' => __string,
  ?'template_url' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->creation_time = $creation_time ?? "";
    $this->parameter_definitions = $parameter_definitions ?? [];
    $this->required_capabilities = $required_capabilities ?? [];
    $this->resources_supported = $resources_supported ?? false;
    $this->semantic_version = $semantic_version ?? "";
    $this->source_code_archive_url = $source_code_archive_url ?? "";
    $this->source_code_url = $source_code_url ?? "";
    $this->template_url = $template_url ?? "";
  }
}

class VersionSummary {
  public __string $application_id;
  public __string $creation_time;
  public __string $semantic_version;
  public __string $source_code_url;

  public function __construct(shape(
  ?'application_id' => __string,
  ?'creation_time' => __string,
  ?'semantic_version' => __string,
  ?'source_code_url' => __string,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->creation_time = $creation_time ?? "";
    $this->semantic_version = $semantic_version ?? "";
    $this->source_code_url = $source_code_url ?? "";
  }
}

type __boolean = bool;

type __double = float;

type __integer = int;

type __listOfApplicationDependencySummary = vec<ApplicationDependencySummary>;

type __listOfApplicationPolicyStatement = vec<ApplicationPolicyStatement>;

type __listOfApplicationSummary = vec<ApplicationSummary>;

type __listOfCapability = vec<Capability>;

type __listOfParameterDefinition = vec<ParameterDefinition>;

type __listOfParameterValue = vec<ParameterValue>;

type __listOfRollbackTrigger = vec<RollbackTrigger>;

type __listOfTag = vec<Tag>;

type __listOfVersionSummary = vec<VersionSummary>;

type __listOf__string = vec<__string>;

type __long = int;

type __string = string;


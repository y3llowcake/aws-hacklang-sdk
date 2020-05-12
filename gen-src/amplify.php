<?hh // strict
namespace slack\aws\amplify;

interface Amplify {
  public function CreateApp(CreateAppRequest $in): Awaitable<\Errors\Result<CreateAppResult>>;
  public function CreateBackendEnvironment(CreateBackendEnvironmentRequest $in): Awaitable<\Errors\Result<CreateBackendEnvironmentResult>>;
  public function CreateBranch(CreateBranchRequest $in): Awaitable<\Errors\Result<CreateBranchResult>>;
  public function CreateDeployment(CreateDeploymentRequest $in): Awaitable<\Errors\Result<CreateDeploymentResult>>;
  public function CreateDomainAssociation(CreateDomainAssociationRequest $in): Awaitable<\Errors\Result<CreateDomainAssociationResult>>;
  public function CreateWebhook(CreateWebhookRequest $in): Awaitable<\Errors\Result<CreateWebhookResult>>;
  public function DeleteApp(DeleteAppRequest $in): Awaitable<\Errors\Result<DeleteAppResult>>;
  public function DeleteBackendEnvironment(DeleteBackendEnvironmentRequest $in): Awaitable<\Errors\Result<DeleteBackendEnvironmentResult>>;
  public function DeleteBranch(DeleteBranchRequest $in): Awaitable<\Errors\Result<DeleteBranchResult>>;
  public function DeleteDomainAssociation(DeleteDomainAssociationRequest $in): Awaitable<\Errors\Result<DeleteDomainAssociationResult>>;
  public function DeleteJob(DeleteJobRequest $in): Awaitable<\Errors\Result<DeleteJobResult>>;
  public function DeleteWebhook(DeleteWebhookRequest $in): Awaitable<\Errors\Result<DeleteWebhookResult>>;
  public function GenerateAccessLogs(GenerateAccessLogsRequest $in): Awaitable<\Errors\Result<GenerateAccessLogsResult>>;
  public function GetApp(GetAppRequest $in): Awaitable<\Errors\Result<GetAppResult>>;
  public function GetArtifactUrl(GetArtifactUrlRequest $in): Awaitable<\Errors\Result<GetArtifactUrlResult>>;
  public function GetBackendEnvironment(GetBackendEnvironmentRequest $in): Awaitable<\Errors\Result<GetBackendEnvironmentResult>>;
  public function GetBranch(GetBranchRequest $in): Awaitable<\Errors\Result<GetBranchResult>>;
  public function GetDomainAssociation(GetDomainAssociationRequest $in): Awaitable<\Errors\Result<GetDomainAssociationResult>>;
  public function GetJob(GetJobRequest $in): Awaitable<\Errors\Result<GetJobResult>>;
  public function GetWebhook(GetWebhookRequest $in): Awaitable<\Errors\Result<GetWebhookResult>>;
  public function ListApps(ListAppsRequest $in): Awaitable<\Errors\Result<ListAppsResult>>;
  public function ListArtifacts(ListArtifactsRequest $in): Awaitable<\Errors\Result<ListArtifactsResult>>;
  public function ListBackendEnvironments(ListBackendEnvironmentsRequest $in): Awaitable<\Errors\Result<ListBackendEnvironmentsResult>>;
  public function ListBranches(ListBranchesRequest $in): Awaitable<\Errors\Result<ListBranchesResult>>;
  public function ListDomainAssociations(ListDomainAssociationsRequest $in): Awaitable<\Errors\Result<ListDomainAssociationsResult>>;
  public function ListJobs(ListJobsRequest $in): Awaitable<\Errors\Result<ListJobsResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ListWebhooks(ListWebhooksRequest $in): Awaitable<\Errors\Result<ListWebhooksResult>>;
  public function StartDeployment(StartDeploymentRequest $in): Awaitable<\Errors\Result<StartDeploymentResult>>;
  public function StartJob(StartJobRequest $in): Awaitable<\Errors\Result<StartJobResult>>;
  public function StopJob(StopJobRequest $in): Awaitable<\Errors\Result<StopJobResult>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateApp(UpdateAppRequest $in): Awaitable<\Errors\Result<UpdateAppResult>>;
  public function UpdateBranch(UpdateBranchRequest $in): Awaitable<\Errors\Result<UpdateBranchResult>>;
  public function UpdateDomainAssociation(UpdateDomainAssociationRequest $in): Awaitable<\Errors\Result<UpdateDomainAssociationResult>>;
  public function UpdateWebhook(UpdateWebhookRequest $in): Awaitable<\Errors\Result<UpdateWebhookResult>>;
}

type AccessToken = string;

type ActiveJobId = string;

class App {
  public ?AppArn $app_arn;
  public ?AppId $app_id;
  public ?AutoBranchCreationConfig $auto_branch_creation_config;
  public ?AutoBranchCreationPatterns $auto_branch_creation_patterns;
  public ?BasicAuthCredentials $basic_auth_credentials;
  public ?BuildSpec $build_spec;
  public ?CreateTime $create_time;
  public ?CustomRules $custom_rules;
  public ?DefaultDomain $default_domain;
  public ?Description $description;
  public ?EnableAutoBranchCreation $enable_auto_branch_creation;
  public ?EnableBasicAuth $enable_basic_auth;
  public ?EnableBranchAutoBuild $enable_branch_auto_build;
  public ?EnvironmentVariables $environment_variables;
  public ?ServiceRoleArn $iam_service_role_arn;
  public ?Name $name;
  public ?Platform $platform;
  public ?ProductionBranch $production_branch;
  public ?Repository $repository;
  public ?TagMap $tags;
  public ?UpdateTime $update_time;

  public function __construct(shape(
    ?'app_arn' => ?AppArn,
    ?'app_id' => ?AppId,
    ?'auto_branch_creation_config' => ?AutoBranchCreationConfig,
    ?'auto_branch_creation_patterns' => ?AutoBranchCreationPatterns,
    ?'basic_auth_credentials' => ?BasicAuthCredentials,
    ?'build_spec' => ?BuildSpec,
    ?'create_time' => ?CreateTime,
    ?'custom_rules' => ?CustomRules,
    ?'default_domain' => ?DefaultDomain,
    ?'description' => ?Description,
    ?'enable_auto_branch_creation' => ?EnableAutoBranchCreation,
    ?'enable_basic_auth' => ?EnableBasicAuth,
    ?'enable_branch_auto_build' => ?EnableBranchAutoBuild,
    ?'environment_variables' => ?EnvironmentVariables,
    ?'iam_service_role_arn' => ?ServiceRoleArn,
    ?'name' => ?Name,
    ?'platform' => ?Platform,
    ?'production_branch' => ?ProductionBranch,
    ?'repository' => ?Repository,
    ?'tags' => ?TagMap,
    ?'update_time' => ?UpdateTime,
  ) $s = shape()) {
    $this->app_arn = $s['app_arn'] ?? '';
    $this->app_id = $s['app_id'] ?? '';
    $this->auto_branch_creation_config = $s['auto_branch_creation_config'] ?? null;
    $this->auto_branch_creation_patterns = $s['auto_branch_creation_patterns'] ?? vec[];
    $this->basic_auth_credentials = $s['basic_auth_credentials'] ?? '';
    $this->build_spec = $s['build_spec'] ?? '';
    $this->create_time = $s['create_time'] ?? 0;
    $this->custom_rules = $s['custom_rules'] ?? vec[];
    $this->default_domain = $s['default_domain'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->enable_auto_branch_creation = $s['enable_auto_branch_creation'] ?? false;
    $this->enable_basic_auth = $s['enable_basic_auth'] ?? false;
    $this->enable_branch_auto_build = $s['enable_branch_auto_build'] ?? false;
    $this->environment_variables = $s['environment_variables'] ?? dict[];
    $this->iam_service_role_arn = $s['iam_service_role_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->production_branch = $s['production_branch'] ?? null;
    $this->repository = $s['repository'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->update_time = $s['update_time'] ?? 0;
  }
}

type AppArn = string;

type AppId = string;

type Apps = vec<App>;

class Artifact {
  public ?ArtifactFileName $artifact_file_name;
  public ?ArtifactId $artifact_id;

  public function __construct(shape(
    ?'artifact_file_name' => ?ArtifactFileName,
    ?'artifact_id' => ?ArtifactId,
  ) $s = shape()) {
    $this->artifact_file_name = $s['artifact_file_name'] ?? '';
    $this->artifact_id = $s['artifact_id'] ?? '';
  }
}

type ArtifactFileName = string;

type ArtifactId = string;

type ArtifactUrl = string;

type Artifacts = vec<Artifact>;

type ArtifactsUrl = string;

type AssociatedResource = string;

type AssociatedResources = vec<AssociatedResource>;

class AutoBranchCreationConfig {
  public ?BasicAuthCredentials $basic_auth_credentials;
  public ?BuildSpec $build_spec;
  public ?EnableAutoBuild $enable_auto_build;
  public ?EnableBasicAuth $enable_basic_auth;
  public ?EnablePullRequestPreview $enable_pull_request_preview;
  public ?EnvironmentVariables $environment_variables;
  public ?Framework $framework;
  public ?PullRequestEnvironmentName $pull_request_environment_name;
  public ?Stage $stage;

  public function __construct(shape(
    ?'basic_auth_credentials' => ?BasicAuthCredentials,
    ?'build_spec' => ?BuildSpec,
    ?'enable_auto_build' => ?EnableAutoBuild,
    ?'enable_basic_auth' => ?EnableBasicAuth,
    ?'enable_pull_request_preview' => ?EnablePullRequestPreview,
    ?'environment_variables' => ?EnvironmentVariables,
    ?'framework' => ?Framework,
    ?'pull_request_environment_name' => ?PullRequestEnvironmentName,
    ?'stage' => ?Stage,
  ) $s = shape()) {
    $this->basic_auth_credentials = $s['basic_auth_credentials'] ?? '';
    $this->build_spec = $s['build_spec'] ?? '';
    $this->enable_auto_build = $s['enable_auto_build'] ?? false;
    $this->enable_basic_auth = $s['enable_basic_auth'] ?? false;
    $this->enable_pull_request_preview = $s['enable_pull_request_preview'] ?? false;
    $this->environment_variables = $s['environment_variables'] ?? dict[];
    $this->framework = $s['framework'] ?? '';
    $this->pull_request_environment_name = $s['pull_request_environment_name'] ?? '';
    $this->stage = $s['stage'] ?? '';
  }
}

type AutoBranchCreationPattern = string;

type AutoBranchCreationPatterns = vec<AutoBranchCreationPattern>;

class BackendEnvironment {
  public ?BackendEnvironmentArn $backend_environment_arn;
  public ?CreateTime $create_time;
  public ?DeploymentArtifacts $deployment_artifacts;
  public ?EnvironmentName $environment_name;
  public ?StackName $stack_name;
  public ?UpdateTime $update_time;

  public function __construct(shape(
    ?'backend_environment_arn' => ?BackendEnvironmentArn,
    ?'create_time' => ?CreateTime,
    ?'deployment_artifacts' => ?DeploymentArtifacts,
    ?'environment_name' => ?EnvironmentName,
    ?'stack_name' => ?StackName,
    ?'update_time' => ?UpdateTime,
  ) $s = shape()) {
    $this->backend_environment_arn = $s['backend_environment_arn'] ?? '';
    $this->create_time = $s['create_time'] ?? 0;
    $this->deployment_artifacts = $s['deployment_artifacts'] ?? '';
    $this->environment_name = $s['environment_name'] ?? '';
    $this->stack_name = $s['stack_name'] ?? '';
    $this->update_time = $s['update_time'] ?? 0;
  }
}

type BackendEnvironmentArn = string;

type BackendEnvironments = vec<BackendEnvironment>;

class BadRequestException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type BasicAuthCredentials = string;

class Branch {
  public ?ActiveJobId $active_job_id;
  public ?AssociatedResources $associated_resources;
  public ?BackendEnvironmentArn $backend_environment_arn;
  public ?BasicAuthCredentials $basic_auth_credentials;
  public ?BranchArn $branch_arn;
  public ?BranchName $branch_name;
  public ?BuildSpec $build_spec;
  public ?CreateTime $create_time;
  public ?CustomDomains $custom_domains;
  public ?Description $description;
  public ?BranchName $destination_branch;
  public ?DisplayName $display_name;
  public ?EnableAutoBuild $enable_auto_build;
  public ?EnableBasicAuth $enable_basic_auth;
  public ?EnableNotification $enable_notification;
  public ?EnablePullRequestPreview $enable_pull_request_preview;
  public ?EnvironmentVariables $environment_variables;
  public ?Framework $framework;
  public ?PullRequestEnvironmentName $pull_request_environment_name;
  public ?BranchName $source_branch;
  public ?Stage $stage;
  public ?TagMap $tags;
  public ?ThumbnailUrl $thumbnail_url;
  public ?TotalNumberOfJobs $total_number_of_jobs;
  public ?TTL $ttl;
  public ?UpdateTime $update_time;

  public function __construct(shape(
    ?'active_job_id' => ?ActiveJobId,
    ?'associated_resources' => ?AssociatedResources,
    ?'backend_environment_arn' => ?BackendEnvironmentArn,
    ?'basic_auth_credentials' => ?BasicAuthCredentials,
    ?'branch_arn' => ?BranchArn,
    ?'branch_name' => ?BranchName,
    ?'build_spec' => ?BuildSpec,
    ?'create_time' => ?CreateTime,
    ?'custom_domains' => ?CustomDomains,
    ?'description' => ?Description,
    ?'destination_branch' => ?BranchName,
    ?'display_name' => ?DisplayName,
    ?'enable_auto_build' => ?EnableAutoBuild,
    ?'enable_basic_auth' => ?EnableBasicAuth,
    ?'enable_notification' => ?EnableNotification,
    ?'enable_pull_request_preview' => ?EnablePullRequestPreview,
    ?'environment_variables' => ?EnvironmentVariables,
    ?'framework' => ?Framework,
    ?'pull_request_environment_name' => ?PullRequestEnvironmentName,
    ?'source_branch' => ?BranchName,
    ?'stage' => ?Stage,
    ?'tags' => ?TagMap,
    ?'thumbnail_url' => ?ThumbnailUrl,
    ?'total_number_of_jobs' => ?TotalNumberOfJobs,
    ?'ttl' => ?TTL,
    ?'update_time' => ?UpdateTime,
  ) $s = shape()) {
    $this->active_job_id = $s['active_job_id'] ?? '';
    $this->associated_resources = $s['associated_resources'] ?? vec[];
    $this->backend_environment_arn = $s['backend_environment_arn'] ?? '';
    $this->basic_auth_credentials = $s['basic_auth_credentials'] ?? '';
    $this->branch_arn = $s['branch_arn'] ?? '';
    $this->branch_name = $s['branch_name'] ?? '';
    $this->build_spec = $s['build_spec'] ?? '';
    $this->create_time = $s['create_time'] ?? 0;
    $this->custom_domains = $s['custom_domains'] ?? vec[];
    $this->description = $s['description'] ?? '';
    $this->destination_branch = $s['destination_branch'] ?? '';
    $this->display_name = $s['display_name'] ?? '';
    $this->enable_auto_build = $s['enable_auto_build'] ?? false;
    $this->enable_basic_auth = $s['enable_basic_auth'] ?? false;
    $this->enable_notification = $s['enable_notification'] ?? false;
    $this->enable_pull_request_preview = $s['enable_pull_request_preview'] ?? false;
    $this->environment_variables = $s['environment_variables'] ?? dict[];
    $this->framework = $s['framework'] ?? '';
    $this->pull_request_environment_name = $s['pull_request_environment_name'] ?? '';
    $this->source_branch = $s['source_branch'] ?? '';
    $this->stage = $s['stage'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->thumbnail_url = $s['thumbnail_url'] ?? '';
    $this->total_number_of_jobs = $s['total_number_of_jobs'] ?? '';
    $this->ttl = $s['ttl'] ?? '';
    $this->update_time = $s['update_time'] ?? 0;
  }
}

type BranchArn = string;

type BranchName = string;

type Branches = vec<Branch>;

type BuildSpec = string;

type CertificateVerificationDNSRecord = string;

type Code = string;

type CommitId = string;

type CommitMessage = string;

type CommitTime = int;

type Condition = string;

type Context = string;

class CreateAppRequest {
  public ?AccessToken $access_token;
  public ?AutoBranchCreationConfig $auto_branch_creation_config;
  public ?AutoBranchCreationPatterns $auto_branch_creation_patterns;
  public ?BasicAuthCredentials $basic_auth_credentials;
  public ?BuildSpec $build_spec;
  public ?CustomRules $custom_rules;
  public ?Description $description;
  public ?EnableAutoBranchCreation $enable_auto_branch_creation;
  public ?EnableBasicAuth $enable_basic_auth;
  public ?EnableBranchAutoBuild $enable_branch_auto_build;
  public ?EnvironmentVariables $environment_variables;
  public ?ServiceRoleArn $iam_service_role_arn;
  public ?Name $name;
  public ?OauthToken $oauth_token;
  public ?Platform $platform;
  public ?Repository $repository;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'access_token' => ?AccessToken,
    ?'auto_branch_creation_config' => ?AutoBranchCreationConfig,
    ?'auto_branch_creation_patterns' => ?AutoBranchCreationPatterns,
    ?'basic_auth_credentials' => ?BasicAuthCredentials,
    ?'build_spec' => ?BuildSpec,
    ?'custom_rules' => ?CustomRules,
    ?'description' => ?Description,
    ?'enable_auto_branch_creation' => ?EnableAutoBranchCreation,
    ?'enable_basic_auth' => ?EnableBasicAuth,
    ?'enable_branch_auto_build' => ?EnableBranchAutoBuild,
    ?'environment_variables' => ?EnvironmentVariables,
    ?'iam_service_role_arn' => ?ServiceRoleArn,
    ?'name' => ?Name,
    ?'oauth_token' => ?OauthToken,
    ?'platform' => ?Platform,
    ?'repository' => ?Repository,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->auto_branch_creation_config = $s['auto_branch_creation_config'] ?? null;
    $this->auto_branch_creation_patterns = $s['auto_branch_creation_patterns'] ?? vec[];
    $this->basic_auth_credentials = $s['basic_auth_credentials'] ?? '';
    $this->build_spec = $s['build_spec'] ?? '';
    $this->custom_rules = $s['custom_rules'] ?? vec[];
    $this->description = $s['description'] ?? '';
    $this->enable_auto_branch_creation = $s['enable_auto_branch_creation'] ?? false;
    $this->enable_basic_auth = $s['enable_basic_auth'] ?? false;
    $this->enable_branch_auto_build = $s['enable_branch_auto_build'] ?? false;
    $this->environment_variables = $s['environment_variables'] ?? dict[];
    $this->iam_service_role_arn = $s['iam_service_role_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->oauth_token = $s['oauth_token'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->repository = $s['repository'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateAppResult {
  public ?App $app;

  public function __construct(shape(
    ?'app' => ?App,
  ) $s = shape()) {
    $this->app = $s['app'] ?? null;
  }
}

class CreateBackendEnvironmentRequest {
  public ?AppId $app_id;
  public ?DeploymentArtifacts $deployment_artifacts;
  public ?EnvironmentName $environment_name;
  public ?StackName $stack_name;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'deployment_artifacts' => ?DeploymentArtifacts,
    ?'environment_name' => ?EnvironmentName,
    ?'stack_name' => ?StackName,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->deployment_artifacts = $s['deployment_artifacts'] ?? '';
    $this->environment_name = $s['environment_name'] ?? '';
    $this->stack_name = $s['stack_name'] ?? '';
  }
}

class CreateBackendEnvironmentResult {
  public ?BackendEnvironment $backend_environment;

  public function __construct(shape(
    ?'backend_environment' => ?BackendEnvironment,
  ) $s = shape()) {
    $this->backend_environment = $s['backend_environment'] ?? null;
  }
}

class CreateBranchRequest {
  public ?AppId $app_id;
  public ?BackendEnvironmentArn $backend_environment_arn;
  public ?BasicAuthCredentials $basic_auth_credentials;
  public ?BranchName $branch_name;
  public ?BuildSpec $build_spec;
  public ?Description $description;
  public ?DisplayName $display_name;
  public ?EnableAutoBuild $enable_auto_build;
  public ?EnableBasicAuth $enable_basic_auth;
  public ?EnableNotification $enable_notification;
  public ?EnablePullRequestPreview $enable_pull_request_preview;
  public ?EnvironmentVariables $environment_variables;
  public ?Framework $framework;
  public ?PullRequestEnvironmentName $pull_request_environment_name;
  public ?Stage $stage;
  public ?TagMap $tags;
  public ?TTL $ttl;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'backend_environment_arn' => ?BackendEnvironmentArn,
    ?'basic_auth_credentials' => ?BasicAuthCredentials,
    ?'branch_name' => ?BranchName,
    ?'build_spec' => ?BuildSpec,
    ?'description' => ?Description,
    ?'display_name' => ?DisplayName,
    ?'enable_auto_build' => ?EnableAutoBuild,
    ?'enable_basic_auth' => ?EnableBasicAuth,
    ?'enable_notification' => ?EnableNotification,
    ?'enable_pull_request_preview' => ?EnablePullRequestPreview,
    ?'environment_variables' => ?EnvironmentVariables,
    ?'framework' => ?Framework,
    ?'pull_request_environment_name' => ?PullRequestEnvironmentName,
    ?'stage' => ?Stage,
    ?'tags' => ?TagMap,
    ?'ttl' => ?TTL,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->backend_environment_arn = $s['backend_environment_arn'] ?? '';
    $this->basic_auth_credentials = $s['basic_auth_credentials'] ?? '';
    $this->branch_name = $s['branch_name'] ?? '';
    $this->build_spec = $s['build_spec'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->display_name = $s['display_name'] ?? '';
    $this->enable_auto_build = $s['enable_auto_build'] ?? false;
    $this->enable_basic_auth = $s['enable_basic_auth'] ?? false;
    $this->enable_notification = $s['enable_notification'] ?? false;
    $this->enable_pull_request_preview = $s['enable_pull_request_preview'] ?? false;
    $this->environment_variables = $s['environment_variables'] ?? dict[];
    $this->framework = $s['framework'] ?? '';
    $this->pull_request_environment_name = $s['pull_request_environment_name'] ?? '';
    $this->stage = $s['stage'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->ttl = $s['ttl'] ?? '';
  }
}

class CreateBranchResult {
  public ?Branch $branch;

  public function __construct(shape(
    ?'branch' => ?Branch,
  ) $s = shape()) {
    $this->branch = $s['branch'] ?? null;
  }
}

class CreateDeploymentRequest {
  public ?AppId $app_id;
  public ?BranchName $branch_name;
  public ?FileMap $file_map;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'branch_name' => ?BranchName,
    ?'file_map' => ?FileMap,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->branch_name = $s['branch_name'] ?? '';
    $this->file_map = $s['file_map'] ?? dict[];
  }
}

class CreateDeploymentResult {
  public ?FileUploadUrls $file_upload_urls;
  public ?JobId $job_id;
  public ?UploadUrl $zip_upload_url;

  public function __construct(shape(
    ?'file_upload_urls' => ?FileUploadUrls,
    ?'job_id' => ?JobId,
    ?'zip_upload_url' => ?UploadUrl,
  ) $s = shape()) {
    $this->file_upload_urls = $s['file_upload_urls'] ?? dict[];
    $this->job_id = $s['job_id'] ?? '';
    $this->zip_upload_url = $s['zip_upload_url'] ?? '';
  }
}

class CreateDomainAssociationRequest {
  public ?AppId $app_id;
  public ?DomainName $domain_name;
  public ?EnableAutoSubDomain $enable_auto_sub_domain;
  public ?SubDomainSettings $sub_domain_settings;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'domain_name' => ?DomainName,
    ?'enable_auto_sub_domain' => ?EnableAutoSubDomain,
    ?'sub_domain_settings' => ?SubDomainSettings,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->enable_auto_sub_domain = $s['enable_auto_sub_domain'] ?? false;
    $this->sub_domain_settings = $s['sub_domain_settings'] ?? vec[];
  }
}

class CreateDomainAssociationResult {
  public ?DomainAssociation $domain_association;

  public function __construct(shape(
    ?'domain_association' => ?DomainAssociation,
  ) $s = shape()) {
    $this->domain_association = $s['domain_association'] ?? null;
  }
}

type CreateTime = int;

class CreateWebhookRequest {
  public ?AppId $app_id;
  public ?BranchName $branch_name;
  public ?Description $description;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'branch_name' => ?BranchName,
    ?'description' => ?Description,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->branch_name = $s['branch_name'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

class CreateWebhookResult {
  public ?Webhook $webhook;

  public function __construct(shape(
    ?'webhook' => ?Webhook,
  ) $s = shape()) {
    $this->webhook = $s['webhook'] ?? null;
  }
}

type CustomDomain = string;

type CustomDomains = vec<CustomDomain>;

class CustomRule {
  public ?Condition $condition;
  public ?Source $source;
  public ?Status $status;
  public ?Target $target;

  public function __construct(shape(
    ?'condition' => ?Condition,
    ?'source' => ?Source,
    ?'status' => ?Status,
    ?'target' => ?Target,
  ) $s = shape()) {
    $this->condition = $s['condition'] ?? '';
    $this->source = $s['source'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->target = $s['target'] ?? '';
  }
}

type CustomRules = vec<CustomRule>;

type DNSRecord = string;

type DefaultDomain = string;

class DeleteAppRequest {
  public ?AppId $app_id;

  public function __construct(shape(
    ?'app_id' => ?AppId,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
  }
}

class DeleteAppResult {
  public ?App $app;

  public function __construct(shape(
    ?'app' => ?App,
  ) $s = shape()) {
    $this->app = $s['app'] ?? null;
  }
}

class DeleteBackendEnvironmentRequest {
  public ?AppId $app_id;
  public ?EnvironmentName $environment_name;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'environment_name' => ?EnvironmentName,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->environment_name = $s['environment_name'] ?? '';
  }
}

class DeleteBackendEnvironmentResult {
  public ?BackendEnvironment $backend_environment;

  public function __construct(shape(
    ?'backend_environment' => ?BackendEnvironment,
  ) $s = shape()) {
    $this->backend_environment = $s['backend_environment'] ?? null;
  }
}

class DeleteBranchRequest {
  public ?AppId $app_id;
  public ?BranchName $branch_name;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'branch_name' => ?BranchName,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->branch_name = $s['branch_name'] ?? '';
  }
}

class DeleteBranchResult {
  public ?Branch $branch;

  public function __construct(shape(
    ?'branch' => ?Branch,
  ) $s = shape()) {
    $this->branch = $s['branch'] ?? null;
  }
}

class DeleteDomainAssociationRequest {
  public ?AppId $app_id;
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DeleteDomainAssociationResult {
  public ?DomainAssociation $domain_association;

  public function __construct(shape(
    ?'domain_association' => ?DomainAssociation,
  ) $s = shape()) {
    $this->domain_association = $s['domain_association'] ?? null;
  }
}

class DeleteJobRequest {
  public ?AppId $app_id;
  public ?BranchName $branch_name;
  public ?JobId $job_id;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'branch_name' => ?BranchName,
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->branch_name = $s['branch_name'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
  }
}

class DeleteJobResult {
  public ?JobSummary $job_summary;

  public function __construct(shape(
    ?'job_summary' => ?JobSummary,
  ) $s = shape()) {
    $this->job_summary = $s['job_summary'] ?? null;
  }
}

class DeleteWebhookRequest {
  public ?WebhookId $webhook_id;

  public function __construct(shape(
    ?'webhook_id' => ?WebhookId,
  ) $s = shape()) {
    $this->webhook_id = $s['webhook_id'] ?? '';
  }
}

class DeleteWebhookResult {
  public ?Webhook $webhook;

  public function __construct(shape(
    ?'webhook' => ?Webhook,
  ) $s = shape()) {
    $this->webhook = $s['webhook'] ?? null;
  }
}

class DependentServiceFailureException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type DeploymentArtifacts = string;

type Description = string;

type DisplayName = string;

class DomainAssociation {
  public ?CertificateVerificationDNSRecord $certificate_verification_dns_record;
  public ?DomainAssociationArn $domain_association_arn;
  public ?DomainName $domain_name;
  public ?DomainStatus $domain_status;
  public ?EnableAutoSubDomain $enable_auto_sub_domain;
  public ?StatusReason $status_reason;
  public ?SubDomains $sub_domains;

  public function __construct(shape(
    ?'certificate_verification_dns_record' => ?CertificateVerificationDNSRecord,
    ?'domain_association_arn' => ?DomainAssociationArn,
    ?'domain_name' => ?DomainName,
    ?'domain_status' => ?DomainStatus,
    ?'enable_auto_sub_domain' => ?EnableAutoSubDomain,
    ?'status_reason' => ?StatusReason,
    ?'sub_domains' => ?SubDomains,
  ) $s = shape()) {
    $this->certificate_verification_dns_record = $s['certificate_verification_dns_record'] ?? '';
    $this->domain_association_arn = $s['domain_association_arn'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->domain_status = $s['domain_status'] ?? '';
    $this->enable_auto_sub_domain = $s['enable_auto_sub_domain'] ?? false;
    $this->status_reason = $s['status_reason'] ?? '';
    $this->sub_domains = $s['sub_domains'] ?? vec[];
  }
}

type DomainAssociationArn = string;

type DomainAssociations = vec<DomainAssociation>;

type DomainName = string;

type DomainPrefix = string;

type DomainStatus = string;

type EnableAutoBranchCreation = bool;

type EnableAutoBuild = bool;

type EnableAutoSubDomain = bool;

type EnableBasicAuth = bool;

type EnableBranchAutoBuild = bool;

type EnableNotification = bool;

type EnablePullRequestPreview = bool;

type EndTime = int;

type EnvKey = string;

type EnvValue = string;

type EnvironmentName = string;

type EnvironmentVariables = dict<EnvKey, EnvValue>;

type ErrorMessage = string;

type FileMap = dict<FileName, MD5Hash>;

type FileName = string;

type FileUploadUrls = dict<FileName, UploadUrl>;

type Framework = string;

class GenerateAccessLogsRequest {
  public ?AppId $app_id;
  public ?DomainName $domain_name;
  public ?EndTime $end_time;
  public ?StartTime $start_time;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'domain_name' => ?DomainName,
    ?'end_time' => ?EndTime,
    ?'start_time' => ?StartTime,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class GenerateAccessLogsResult {
  public ?LogUrl $log_url;

  public function __construct(shape(
    ?'log_url' => ?LogUrl,
  ) $s = shape()) {
    $this->log_url = $s['log_url'] ?? '';
  }
}

class GetAppRequest {
  public ?AppId $app_id;

  public function __construct(shape(
    ?'app_id' => ?AppId,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
  }
}

class GetAppResult {
  public ?App $app;

  public function __construct(shape(
    ?'app' => ?App,
  ) $s = shape()) {
    $this->app = $s['app'] ?? null;
  }
}

class GetArtifactUrlRequest {
  public ?ArtifactId $artifact_id;

  public function __construct(shape(
    ?'artifact_id' => ?ArtifactId,
  ) $s = shape()) {
    $this->artifact_id = $s['artifact_id'] ?? '';
  }
}

class GetArtifactUrlResult {
  public ?ArtifactId $artifact_id;
  public ?ArtifactUrl $artifact_url;

  public function __construct(shape(
    ?'artifact_id' => ?ArtifactId,
    ?'artifact_url' => ?ArtifactUrl,
  ) $s = shape()) {
    $this->artifact_id = $s['artifact_id'] ?? '';
    $this->artifact_url = $s['artifact_url'] ?? '';
  }
}

class GetBackendEnvironmentRequest {
  public ?AppId $app_id;
  public ?EnvironmentName $environment_name;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'environment_name' => ?EnvironmentName,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->environment_name = $s['environment_name'] ?? '';
  }
}

class GetBackendEnvironmentResult {
  public ?BackendEnvironment $backend_environment;

  public function __construct(shape(
    ?'backend_environment' => ?BackendEnvironment,
  ) $s = shape()) {
    $this->backend_environment = $s['backend_environment'] ?? null;
  }
}

class GetBranchRequest {
  public ?AppId $app_id;
  public ?BranchName $branch_name;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'branch_name' => ?BranchName,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->branch_name = $s['branch_name'] ?? '';
  }
}

class GetBranchResult {
  public ?Branch $branch;

  public function __construct(shape(
    ?'branch' => ?Branch,
  ) $s = shape()) {
    $this->branch = $s['branch'] ?? null;
  }
}

class GetDomainAssociationRequest {
  public ?AppId $app_id;
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class GetDomainAssociationResult {
  public ?DomainAssociation $domain_association;

  public function __construct(shape(
    ?'domain_association' => ?DomainAssociation,
  ) $s = shape()) {
    $this->domain_association = $s['domain_association'] ?? null;
  }
}

class GetJobRequest {
  public ?AppId $app_id;
  public ?BranchName $branch_name;
  public ?JobId $job_id;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'branch_name' => ?BranchName,
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->branch_name = $s['branch_name'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
  }
}

class GetJobResult {
  public ?Job $job;

  public function __construct(shape(
    ?'job' => ?Job,
  ) $s = shape()) {
    $this->job = $s['job'] ?? null;
  }
}

class GetWebhookRequest {
  public ?WebhookId $webhook_id;

  public function __construct(shape(
    ?'webhook_id' => ?WebhookId,
  ) $s = shape()) {
    $this->webhook_id = $s['webhook_id'] ?? '';
  }
}

class GetWebhookResult {
  public ?Webhook $webhook;

  public function __construct(shape(
    ?'webhook' => ?Webhook,
  ) $s = shape()) {
    $this->webhook = $s['webhook'] ?? null;
  }
}

class InternalFailureException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Job {
  public ?Steps $steps;
  public ?JobSummary $summary;

  public function __construct(shape(
    ?'steps' => ?Steps,
    ?'summary' => ?JobSummary,
  ) $s = shape()) {
    $this->steps = $s['steps'] ?? vec[];
    $this->summary = $s['summary'] ?? null;
  }
}

type JobArn = string;

type JobId = string;

type JobReason = string;

type JobStatus = string;

type JobSummaries = vec<JobSummary>;

class JobSummary {
  public ?CommitId $commit_id;
  public ?CommitMessage $commit_message;
  public ?CommitTime $commit_time;
  public ?EndTime $end_time;
  public ?JobArn $job_arn;
  public ?JobId $job_id;
  public ?JobType $job_type;
  public ?StartTime $start_time;
  public ?JobStatus $status;

  public function __construct(shape(
    ?'commit_id' => ?CommitId,
    ?'commit_message' => ?CommitMessage,
    ?'commit_time' => ?CommitTime,
    ?'end_time' => ?EndTime,
    ?'job_arn' => ?JobArn,
    ?'job_id' => ?JobId,
    ?'job_type' => ?JobType,
    ?'start_time' => ?StartTime,
    ?'status' => ?JobStatus,
  ) $s = shape()) {
    $this->commit_id = $s['commit_id'] ?? '';
    $this->commit_message = $s['commit_message'] ?? '';
    $this->commit_time = $s['commit_time'] ?? 0;
    $this->end_time = $s['end_time'] ?? 0;
    $this->job_arn = $s['job_arn'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
    $this->job_type = $s['job_type'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

type JobType = string;

type LastDeployTime = int;

class LimitExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListAppsRequest {
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

class ListAppsResult {
  public ?Apps $apps;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'apps' => ?Apps,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->apps = $s['apps'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListArtifactsRequest {
  public ?AppId $app_id;
  public ?BranchName $branch_name;
  public ?JobId $job_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'branch_name' => ?BranchName,
    ?'job_id' => ?JobId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->branch_name = $s['branch_name'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListArtifactsResult {
  public ?Artifacts $artifacts;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'artifacts' => ?Artifacts,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->artifacts = $s['artifacts'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBackendEnvironmentsRequest {
  public ?AppId $app_id;
  public ?EnvironmentName $environment_name;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'environment_name' => ?EnvironmentName,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->environment_name = $s['environment_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBackendEnvironmentsResult {
  public ?BackendEnvironments $backend_environments;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'backend_environments' => ?BackendEnvironments,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->backend_environments = $s['backend_environments'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBranchesRequest {
  public ?AppId $app_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBranchesResult {
  public ?Branches $branches;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'branches' => ?Branches,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->branches = $s['branches'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDomainAssociationsRequest {
  public ?AppId $app_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDomainAssociationsResult {
  public ?DomainAssociations $domain_associations;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'domain_associations' => ?DomainAssociations,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->domain_associations = $s['domain_associations'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListJobsRequest {
  public ?AppId $app_id;
  public ?BranchName $branch_name;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'branch_name' => ?BranchName,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->branch_name = $s['branch_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListJobsResult {
  public ?JobSummaries $job_summaries;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'job_summaries' => ?JobSummaries,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->job_summaries = $s['job_summaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagMap $tags;

  public function __construct(shape(
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class ListWebhooksRequest {
  public ?AppId $app_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListWebhooksResult {
  public ?NextToken $next_token;
  public ?Webhooks $webhooks;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'webhooks' => ?Webhooks,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->webhooks = $s['webhooks'] ?? vec[];
  }
}

type LogUrl = string;

type MD5Hash = string;

type MaxResults = int;

type Name = string;

type NextToken = string;

class NotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type OauthToken = string;

type Platform = string;

class ProductionBranch {
  public ?BranchName $branch_name;
  public ?LastDeployTime $last_deploy_time;
  public ?Status $status;
  public ?ThumbnailUrl $thumbnail_url;

  public function __construct(shape(
    ?'branch_name' => ?BranchName,
    ?'last_deploy_time' => ?LastDeployTime,
    ?'status' => ?Status,
    ?'thumbnail_url' => ?ThumbnailUrl,
  ) $s = shape()) {
    $this->branch_name = $s['branch_name'] ?? '';
    $this->last_deploy_time = $s['last_deploy_time'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->thumbnail_url = $s['thumbnail_url'] ?? '';
  }
}

type PullRequestEnvironmentName = string;

type Repository = string;

type ResourceArn = string;

class ResourceNotFoundException {
  public ?Code $code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'code' => ?Code,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type Screenshots = dict<ThumbnailName, ThumbnailUrl>;

type ServiceRoleArn = string;

type Source = string;

type SourceUrl = string;

type StackName = string;

type Stage = string;

class StartDeploymentRequest {
  public ?AppId $app_id;
  public ?BranchName $branch_name;
  public ?JobId $job_id;
  public ?SourceUrl $source_url;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'branch_name' => ?BranchName,
    ?'job_id' => ?JobId,
    ?'source_url' => ?SourceUrl,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->branch_name = $s['branch_name'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
    $this->source_url = $s['source_url'] ?? '';
  }
}

class StartDeploymentResult {
  public ?JobSummary $job_summary;

  public function __construct(shape(
    ?'job_summary' => ?JobSummary,
  ) $s = shape()) {
    $this->job_summary = $s['job_summary'] ?? null;
  }
}

class StartJobRequest {
  public ?AppId $app_id;
  public ?BranchName $branch_name;
  public ?CommitId $commit_id;
  public ?CommitMessage $commit_message;
  public ?CommitTime $commit_time;
  public ?JobId $job_id;
  public ?JobReason $job_reason;
  public ?JobType $job_type;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'branch_name' => ?BranchName,
    ?'commit_id' => ?CommitId,
    ?'commit_message' => ?CommitMessage,
    ?'commit_time' => ?CommitTime,
    ?'job_id' => ?JobId,
    ?'job_reason' => ?JobReason,
    ?'job_type' => ?JobType,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->branch_name = $s['branch_name'] ?? '';
    $this->commit_id = $s['commit_id'] ?? '';
    $this->commit_message = $s['commit_message'] ?? '';
    $this->commit_time = $s['commit_time'] ?? 0;
    $this->job_id = $s['job_id'] ?? '';
    $this->job_reason = $s['job_reason'] ?? '';
    $this->job_type = $s['job_type'] ?? '';
  }
}

class StartJobResult {
  public ?JobSummary $job_summary;

  public function __construct(shape(
    ?'job_summary' => ?JobSummary,
  ) $s = shape()) {
    $this->job_summary = $s['job_summary'] ?? null;
  }
}

type StartTime = int;

type Status = string;

type StatusReason = string;

class Step {
  public ?ArtifactsUrl $artifacts_url;
  public ?Context $context;
  public ?EndTime $end_time;
  public ?LogUrl $log_url;
  public ?Screenshots $screenshots;
  public ?StartTime $start_time;
  public ?JobStatus $status;
  public ?StatusReason $status_reason;
  public ?StepName $step_name;
  public ?TestArtifactsUrl $test_artifacts_url;
  public ?TestConfigUrl $test_config_url;

  public function __construct(shape(
    ?'artifacts_url' => ?ArtifactsUrl,
    ?'context' => ?Context,
    ?'end_time' => ?EndTime,
    ?'log_url' => ?LogUrl,
    ?'screenshots' => ?Screenshots,
    ?'start_time' => ?StartTime,
    ?'status' => ?JobStatus,
    ?'status_reason' => ?StatusReason,
    ?'step_name' => ?StepName,
    ?'test_artifacts_url' => ?TestArtifactsUrl,
    ?'test_config_url' => ?TestConfigUrl,
  ) $s = shape()) {
    $this->artifacts_url = $s['artifacts_url'] ?? '';
    $this->context = $s['context'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->log_url = $s['log_url'] ?? '';
    $this->screenshots = $s['screenshots'] ?? dict[];
    $this->start_time = $s['start_time'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->status_reason = $s['status_reason'] ?? '';
    $this->step_name = $s['step_name'] ?? '';
    $this->test_artifacts_url = $s['test_artifacts_url'] ?? '';
    $this->test_config_url = $s['test_config_url'] ?? '';
  }
}

type StepName = string;

type Steps = vec<Step>;

class StopJobRequest {
  public ?AppId $app_id;
  public ?BranchName $branch_name;
  public ?JobId $job_id;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'branch_name' => ?BranchName,
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->branch_name = $s['branch_name'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
  }
}

class StopJobResult {
  public ?JobSummary $job_summary;

  public function __construct(shape(
    ?'job_summary' => ?JobSummary,
  ) $s = shape()) {
    $this->job_summary = $s['job_summary'] ?? null;
  }
}

class SubDomain {
  public ?DNSRecord $dns_record;
  public ?SubDomainSetting $sub_domain_setting;
  public ?Verified $verified;

  public function __construct(shape(
    ?'dns_record' => ?DNSRecord,
    ?'sub_domain_setting' => ?SubDomainSetting,
    ?'verified' => ?Verified,
  ) $s = shape()) {
    $this->dns_record = $s['dns_record'] ?? '';
    $this->sub_domain_setting = $s['sub_domain_setting'] ?? null;
    $this->verified = $s['verified'] ?? false;
  }
}

class SubDomainSetting {
  public ?BranchName $branch_name;
  public ?DomainPrefix $prefix;

  public function __construct(shape(
    ?'branch_name' => ?BranchName,
    ?'prefix' => ?DomainPrefix,
  ) $s = shape()) {
    $this->branch_name = $s['branch_name'] ?? '';
    $this->prefix = $s['prefix'] ?? '';
  }
}

type SubDomainSettings = vec<SubDomainSetting>;

type SubDomains = vec<SubDomain>;

type TTL = string;

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public ?ResourceArn $resource_arn;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type Target = string;

type TestArtifactsUrl = string;

type TestConfigUrl = string;

type ThumbnailName = string;

type ThumbnailUrl = string;

type TotalNumberOfJobs = string;

class UnauthorizedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceRequest {
  public ?ResourceArn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateAppRequest {
  public ?AccessToken $access_token;
  public ?AppId $app_id;
  public ?AutoBranchCreationConfig $auto_branch_creation_config;
  public ?AutoBranchCreationPatterns $auto_branch_creation_patterns;
  public ?BasicAuthCredentials $basic_auth_credentials;
  public ?BuildSpec $build_spec;
  public ?CustomRules $custom_rules;
  public ?Description $description;
  public ?EnableAutoBranchCreation $enable_auto_branch_creation;
  public ?EnableBasicAuth $enable_basic_auth;
  public ?EnableAutoBuild $enable_branch_auto_build;
  public ?EnvironmentVariables $environment_variables;
  public ?ServiceRoleArn $iam_service_role_arn;
  public ?Name $name;
  public ?OauthToken $oauth_token;
  public ?Platform $platform;
  public ?Repository $repository;

  public function __construct(shape(
    ?'access_token' => ?AccessToken,
    ?'app_id' => ?AppId,
    ?'auto_branch_creation_config' => ?AutoBranchCreationConfig,
    ?'auto_branch_creation_patterns' => ?AutoBranchCreationPatterns,
    ?'basic_auth_credentials' => ?BasicAuthCredentials,
    ?'build_spec' => ?BuildSpec,
    ?'custom_rules' => ?CustomRules,
    ?'description' => ?Description,
    ?'enable_auto_branch_creation' => ?EnableAutoBranchCreation,
    ?'enable_basic_auth' => ?EnableBasicAuth,
    ?'enable_branch_auto_build' => ?EnableAutoBuild,
    ?'environment_variables' => ?EnvironmentVariables,
    ?'iam_service_role_arn' => ?ServiceRoleArn,
    ?'name' => ?Name,
    ?'oauth_token' => ?OauthToken,
    ?'platform' => ?Platform,
    ?'repository' => ?Repository,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->app_id = $s['app_id'] ?? '';
    $this->auto_branch_creation_config = $s['auto_branch_creation_config'] ?? null;
    $this->auto_branch_creation_patterns = $s['auto_branch_creation_patterns'] ?? vec[];
    $this->basic_auth_credentials = $s['basic_auth_credentials'] ?? '';
    $this->build_spec = $s['build_spec'] ?? '';
    $this->custom_rules = $s['custom_rules'] ?? vec[];
    $this->description = $s['description'] ?? '';
    $this->enable_auto_branch_creation = $s['enable_auto_branch_creation'] ?? false;
    $this->enable_basic_auth = $s['enable_basic_auth'] ?? false;
    $this->enable_branch_auto_build = $s['enable_branch_auto_build'] ?? false;
    $this->environment_variables = $s['environment_variables'] ?? dict[];
    $this->iam_service_role_arn = $s['iam_service_role_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->oauth_token = $s['oauth_token'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->repository = $s['repository'] ?? '';
  }
}

class UpdateAppResult {
  public ?App $app;

  public function __construct(shape(
    ?'app' => ?App,
  ) $s = shape()) {
    $this->app = $s['app'] ?? null;
  }
}

class UpdateBranchRequest {
  public ?AppId $app_id;
  public ?BackendEnvironmentArn $backend_environment_arn;
  public ?BasicAuthCredentials $basic_auth_credentials;
  public ?BranchName $branch_name;
  public ?BuildSpec $build_spec;
  public ?Description $description;
  public ?DisplayName $display_name;
  public ?EnableAutoBuild $enable_auto_build;
  public ?EnableBasicAuth $enable_basic_auth;
  public ?EnableNotification $enable_notification;
  public ?EnablePullRequestPreview $enable_pull_request_preview;
  public ?EnvironmentVariables $environment_variables;
  public ?Framework $framework;
  public ?PullRequestEnvironmentName $pull_request_environment_name;
  public ?Stage $stage;
  public ?TTL $ttl;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'backend_environment_arn' => ?BackendEnvironmentArn,
    ?'basic_auth_credentials' => ?BasicAuthCredentials,
    ?'branch_name' => ?BranchName,
    ?'build_spec' => ?BuildSpec,
    ?'description' => ?Description,
    ?'display_name' => ?DisplayName,
    ?'enable_auto_build' => ?EnableAutoBuild,
    ?'enable_basic_auth' => ?EnableBasicAuth,
    ?'enable_notification' => ?EnableNotification,
    ?'enable_pull_request_preview' => ?EnablePullRequestPreview,
    ?'environment_variables' => ?EnvironmentVariables,
    ?'framework' => ?Framework,
    ?'pull_request_environment_name' => ?PullRequestEnvironmentName,
    ?'stage' => ?Stage,
    ?'ttl' => ?TTL,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->backend_environment_arn = $s['backend_environment_arn'] ?? '';
    $this->basic_auth_credentials = $s['basic_auth_credentials'] ?? '';
    $this->branch_name = $s['branch_name'] ?? '';
    $this->build_spec = $s['build_spec'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->display_name = $s['display_name'] ?? '';
    $this->enable_auto_build = $s['enable_auto_build'] ?? false;
    $this->enable_basic_auth = $s['enable_basic_auth'] ?? false;
    $this->enable_notification = $s['enable_notification'] ?? false;
    $this->enable_pull_request_preview = $s['enable_pull_request_preview'] ?? false;
    $this->environment_variables = $s['environment_variables'] ?? dict[];
    $this->framework = $s['framework'] ?? '';
    $this->pull_request_environment_name = $s['pull_request_environment_name'] ?? '';
    $this->stage = $s['stage'] ?? '';
    $this->ttl = $s['ttl'] ?? '';
  }
}

class UpdateBranchResult {
  public ?Branch $branch;

  public function __construct(shape(
    ?'branch' => ?Branch,
  ) $s = shape()) {
    $this->branch = $s['branch'] ?? null;
  }
}

class UpdateDomainAssociationRequest {
  public ?AppId $app_id;
  public ?DomainName $domain_name;
  public ?EnableAutoSubDomain $enable_auto_sub_domain;
  public ?SubDomainSettings $sub_domain_settings;

  public function __construct(shape(
    ?'app_id' => ?AppId,
    ?'domain_name' => ?DomainName,
    ?'enable_auto_sub_domain' => ?EnableAutoSubDomain,
    ?'sub_domain_settings' => ?SubDomainSettings,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->enable_auto_sub_domain = $s['enable_auto_sub_domain'] ?? false;
    $this->sub_domain_settings = $s['sub_domain_settings'] ?? vec[];
  }
}

class UpdateDomainAssociationResult {
  public ?DomainAssociation $domain_association;

  public function __construct(shape(
    ?'domain_association' => ?DomainAssociation,
  ) $s = shape()) {
    $this->domain_association = $s['domain_association'] ?? null;
  }
}

type UpdateTime = int;

class UpdateWebhookRequest {
  public ?BranchName $branch_name;
  public ?Description $description;
  public ?WebhookId $webhook_id;

  public function __construct(shape(
    ?'branch_name' => ?BranchName,
    ?'description' => ?Description,
    ?'webhook_id' => ?WebhookId,
  ) $s = shape()) {
    $this->branch_name = $s['branch_name'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->webhook_id = $s['webhook_id'] ?? '';
  }
}

class UpdateWebhookResult {
  public ?Webhook $webhook;

  public function __construct(shape(
    ?'webhook' => ?Webhook,
  ) $s = shape()) {
    $this->webhook = $s['webhook'] ?? null;
  }
}

type UploadUrl = string;

type Verified = bool;

class Webhook {
  public ?BranchName $branch_name;
  public ?CreateTime $create_time;
  public ?Description $description;
  public ?UpdateTime $update_time;
  public ?WebhookArn $webhook_arn;
  public ?WebhookId $webhook_id;
  public ?WebhookUrl $webhook_url;

  public function __construct(shape(
    ?'branch_name' => ?BranchName,
    ?'create_time' => ?CreateTime,
    ?'description' => ?Description,
    ?'update_time' => ?UpdateTime,
    ?'webhook_arn' => ?WebhookArn,
    ?'webhook_id' => ?WebhookId,
    ?'webhook_url' => ?WebhookUrl,
  ) $s = shape()) {
    $this->branch_name = $s['branch_name'] ?? '';
    $this->create_time = $s['create_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->update_time = $s['update_time'] ?? 0;
    $this->webhook_arn = $s['webhook_arn'] ?? '';
    $this->webhook_id = $s['webhook_id'] ?? '';
    $this->webhook_url = $s['webhook_url'] ?? '';
  }
}

type WebhookArn = string;

type WebhookId = string;

type WebhookUrl = string;

type Webhooks = vec<Webhook>;


<?hh // strict
namespace slack\aws\amplify;

interface Amplify {
  public function CreateApp(CreateAppRequest): Awaitable<Errors\Result<CreateAppResult>>;
  public function CreateBackendEnvironment(CreateBackendEnvironmentRequest): Awaitable<Errors\Result<CreateBackendEnvironmentResult>>;
  public function CreateBranch(CreateBranchRequest): Awaitable<Errors\Result<CreateBranchResult>>;
  public function CreateDeployment(CreateDeploymentRequest): Awaitable<Errors\Result<CreateDeploymentResult>>;
  public function CreateDomainAssociation(CreateDomainAssociationRequest): Awaitable<Errors\Result<CreateDomainAssociationResult>>;
  public function CreateWebhook(CreateWebhookRequest): Awaitable<Errors\Result<CreateWebhookResult>>;
  public function DeleteApp(DeleteAppRequest): Awaitable<Errors\Result<DeleteAppResult>>;
  public function DeleteBackendEnvironment(DeleteBackendEnvironmentRequest): Awaitable<Errors\Result<DeleteBackendEnvironmentResult>>;
  public function DeleteBranch(DeleteBranchRequest): Awaitable<Errors\Result<DeleteBranchResult>>;
  public function DeleteDomainAssociation(DeleteDomainAssociationRequest): Awaitable<Errors\Result<DeleteDomainAssociationResult>>;
  public function DeleteJob(DeleteJobRequest): Awaitable<Errors\Result<DeleteJobResult>>;
  public function DeleteWebhook(DeleteWebhookRequest): Awaitable<Errors\Result<DeleteWebhookResult>>;
  public function GenerateAccessLogs(GenerateAccessLogsRequest): Awaitable<Errors\Result<GenerateAccessLogsResult>>;
  public function GetApp(GetAppRequest): Awaitable<Errors\Result<GetAppResult>>;
  public function GetArtifactUrl(GetArtifactUrlRequest): Awaitable<Errors\Result<GetArtifactUrlResult>>;
  public function GetBackendEnvironment(GetBackendEnvironmentRequest): Awaitable<Errors\Result<GetBackendEnvironmentResult>>;
  public function GetBranch(GetBranchRequest): Awaitable<Errors\Result<GetBranchResult>>;
  public function GetDomainAssociation(GetDomainAssociationRequest): Awaitable<Errors\Result<GetDomainAssociationResult>>;
  public function GetJob(GetJobRequest): Awaitable<Errors\Result<GetJobResult>>;
  public function GetWebhook(GetWebhookRequest): Awaitable<Errors\Result<GetWebhookResult>>;
  public function ListApps(ListAppsRequest): Awaitable<Errors\Result<ListAppsResult>>;
  public function ListArtifacts(ListArtifactsRequest): Awaitable<Errors\Result<ListArtifactsResult>>;
  public function ListBackendEnvironments(ListBackendEnvironmentsRequest): Awaitable<Errors\Result<ListBackendEnvironmentsResult>>;
  public function ListBranches(ListBranchesRequest): Awaitable<Errors\Result<ListBranchesResult>>;
  public function ListDomainAssociations(ListDomainAssociationsRequest): Awaitable<Errors\Result<ListDomainAssociationsResult>>;
  public function ListJobs(ListJobsRequest): Awaitable<Errors\Result<ListJobsResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListWebhooks(ListWebhooksRequest): Awaitable<Errors\Result<ListWebhooksResult>>;
  public function StartDeployment(StartDeploymentRequest): Awaitable<Errors\Result<StartDeploymentResult>>;
  public function StartJob(StartJobRequest): Awaitable<Errors\Result<StartJobResult>>;
  public function StopJob(StopJobRequest): Awaitable<Errors\Result<StopJobResult>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateApp(UpdateAppRequest): Awaitable<Errors\Result<UpdateAppResult>>;
  public function UpdateBranch(UpdateBranchRequest): Awaitable<Errors\Result<UpdateBranchResult>>;
  public function UpdateDomainAssociation(UpdateDomainAssociationRequest): Awaitable<Errors\Result<UpdateDomainAssociationResult>>;
  public function UpdateWebhook(UpdateWebhookRequest): Awaitable<Errors\Result<UpdateWebhookResult>>;
}

type AccessToken = string;

type ActiveJobId = string;

class App {
  public AppArn $app_arn;
  public AppId $app_id;
  public AutoBranchCreationConfig $auto_branch_creation_config;
  public AutoBranchCreationPatterns $auto_branch_creation_patterns;
  public BasicAuthCredentials $basic_auth_credentials;
  public BuildSpec $build_spec;
  public CreateTime $create_time;
  public CustomRules $custom_rules;
  public DefaultDomain $default_domain;
  public Description $description;
  public EnableAutoBranchCreation $enable_auto_branch_creation;
  public EnableBasicAuth $enable_basic_auth;
  public EnableBranchAutoBuild $enable_branch_auto_build;
  public EnvironmentVariables $environment_variables;
  public ServiceRoleArn $iam_service_role_arn;
  public Name $name;
  public Platform $platform;
  public ProductionBranch $production_branch;
  public Repository $repository;
  public TagMap $tags;
  public UpdateTime $update_time;

  public function __construct(shape(
  ?'app_arn' => AppArn,
  ?'app_id' => AppId,
  ?'auto_branch_creation_config' => AutoBranchCreationConfig,
  ?'auto_branch_creation_patterns' => AutoBranchCreationPatterns,
  ?'basic_auth_credentials' => BasicAuthCredentials,
  ?'build_spec' => BuildSpec,
  ?'create_time' => CreateTime,
  ?'custom_rules' => CustomRules,
  ?'default_domain' => DefaultDomain,
  ?'description' => Description,
  ?'enable_auto_branch_creation' => EnableAutoBranchCreation,
  ?'enable_basic_auth' => EnableBasicAuth,
  ?'enable_branch_auto_build' => EnableBranchAutoBuild,
  ?'environment_variables' => EnvironmentVariables,
  ?'iam_service_role_arn' => ServiceRoleArn,
  ?'name' => Name,
  ?'platform' => Platform,
  ?'production_branch' => ProductionBranch,
  ?'repository' => Repository,
  ?'tags' => TagMap,
  ?'update_time' => UpdateTime,
  ) $s = shape()) {
    $this->app_arn = $app_arn ?? "";
    $this->app_id = $app_id ?? "";
    $this->auto_branch_creation_config = $auto_branch_creation_config ?? null;
    $this->auto_branch_creation_patterns = $auto_branch_creation_patterns ?? [];
    $this->basic_auth_credentials = $basic_auth_credentials ?? "";
    $this->build_spec = $build_spec ?? "";
    $this->create_time = $create_time ?? 0;
    $this->custom_rules = $custom_rules ?? [];
    $this->default_domain = $default_domain ?? "";
    $this->description = $description ?? "";
    $this->enable_auto_branch_creation = $enable_auto_branch_creation ?? false;
    $this->enable_basic_auth = $enable_basic_auth ?? false;
    $this->enable_branch_auto_build = $enable_branch_auto_build ?? false;
    $this->environment_variables = $environment_variables ?? [];
    $this->iam_service_role_arn = $iam_service_role_arn ?? "";
    $this->name = $name ?? "";
    $this->platform = $platform ?? "";
    $this->production_branch = $production_branch ?? null;
    $this->repository = $repository ?? "";
    $this->tags = $tags ?? [];
    $this->update_time = $update_time ?? 0;
  }
}

type AppArn = string;

type AppId = string;

type Apps = vec<App>;

class Artifact {
  public ArtifactFileName $artifact_file_name;
  public ArtifactId $artifact_id;

  public function __construct(shape(
  ?'artifact_file_name' => ArtifactFileName,
  ?'artifact_id' => ArtifactId,
  ) $s = shape()) {
    $this->artifact_file_name = $artifact_file_name ?? "";
    $this->artifact_id = $artifact_id ?? "";
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
  public BasicAuthCredentials $basic_auth_credentials;
  public BuildSpec $build_spec;
  public EnableAutoBuild $enable_auto_build;
  public EnableBasicAuth $enable_basic_auth;
  public EnablePullRequestPreview $enable_pull_request_preview;
  public EnvironmentVariables $environment_variables;
  public Framework $framework;
  public PullRequestEnvironmentName $pull_request_environment_name;
  public Stage $stage;

  public function __construct(shape(
  ?'basic_auth_credentials' => BasicAuthCredentials,
  ?'build_spec' => BuildSpec,
  ?'enable_auto_build' => EnableAutoBuild,
  ?'enable_basic_auth' => EnableBasicAuth,
  ?'enable_pull_request_preview' => EnablePullRequestPreview,
  ?'environment_variables' => EnvironmentVariables,
  ?'framework' => Framework,
  ?'pull_request_environment_name' => PullRequestEnvironmentName,
  ?'stage' => Stage,
  ) $s = shape()) {
    $this->basic_auth_credentials = $basic_auth_credentials ?? "";
    $this->build_spec = $build_spec ?? "";
    $this->enable_auto_build = $enable_auto_build ?? false;
    $this->enable_basic_auth = $enable_basic_auth ?? false;
    $this->enable_pull_request_preview = $enable_pull_request_preview ?? false;
    $this->environment_variables = $environment_variables ?? [];
    $this->framework = $framework ?? "";
    $this->pull_request_environment_name = $pull_request_environment_name ?? "";
    $this->stage = $stage ?? "";
  }
}

type AutoBranchCreationPattern = string;

type AutoBranchCreationPatterns = vec<AutoBranchCreationPattern>;

class BackendEnvironment {
  public BackendEnvironmentArn $backend_environment_arn;
  public CreateTime $create_time;
  public DeploymentArtifacts $deployment_artifacts;
  public EnvironmentName $environment_name;
  public StackName $stack_name;
  public UpdateTime $update_time;

  public function __construct(shape(
  ?'backend_environment_arn' => BackendEnvironmentArn,
  ?'create_time' => CreateTime,
  ?'deployment_artifacts' => DeploymentArtifacts,
  ?'environment_name' => EnvironmentName,
  ?'stack_name' => StackName,
  ?'update_time' => UpdateTime,
  ) $s = shape()) {
    $this->backend_environment_arn = $backend_environment_arn ?? "";
    $this->create_time = $create_time ?? 0;
    $this->deployment_artifacts = $deployment_artifacts ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->stack_name = $stack_name ?? "";
    $this->update_time = $update_time ?? 0;
  }
}

type BackendEnvironmentArn = string;

type BackendEnvironments = vec<BackendEnvironment>;

class BadRequestException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type BasicAuthCredentials = string;

class Branch {
  public ActiveJobId $active_job_id;
  public AssociatedResources $associated_resources;
  public BackendEnvironmentArn $backend_environment_arn;
  public BasicAuthCredentials $basic_auth_credentials;
  public BranchArn $branch_arn;
  public BranchName $branch_name;
  public BuildSpec $build_spec;
  public CreateTime $create_time;
  public CustomDomains $custom_domains;
  public Description $description;
  public BranchName $destination_branch;
  public DisplayName $display_name;
  public EnableAutoBuild $enable_auto_build;
  public EnableBasicAuth $enable_basic_auth;
  public EnableNotification $enable_notification;
  public EnablePullRequestPreview $enable_pull_request_preview;
  public EnvironmentVariables $environment_variables;
  public Framework $framework;
  public PullRequestEnvironmentName $pull_request_environment_name;
  public BranchName $source_branch;
  public Stage $stage;
  public TagMap $tags;
  public ThumbnailUrl $thumbnail_url;
  public TotalNumberOfJobs $total_number_of_jobs;
  public TTL $ttl;
  public UpdateTime $update_time;

  public function __construct(shape(
  ?'active_job_id' => ActiveJobId,
  ?'associated_resources' => AssociatedResources,
  ?'backend_environment_arn' => BackendEnvironmentArn,
  ?'basic_auth_credentials' => BasicAuthCredentials,
  ?'branch_arn' => BranchArn,
  ?'branch_name' => BranchName,
  ?'build_spec' => BuildSpec,
  ?'create_time' => CreateTime,
  ?'custom_domains' => CustomDomains,
  ?'description' => Description,
  ?'destination_branch' => BranchName,
  ?'display_name' => DisplayName,
  ?'enable_auto_build' => EnableAutoBuild,
  ?'enable_basic_auth' => EnableBasicAuth,
  ?'enable_notification' => EnableNotification,
  ?'enable_pull_request_preview' => EnablePullRequestPreview,
  ?'environment_variables' => EnvironmentVariables,
  ?'framework' => Framework,
  ?'pull_request_environment_name' => PullRequestEnvironmentName,
  ?'source_branch' => BranchName,
  ?'stage' => Stage,
  ?'tags' => TagMap,
  ?'thumbnail_url' => ThumbnailUrl,
  ?'total_number_of_jobs' => TotalNumberOfJobs,
  ?'ttl' => TTL,
  ?'update_time' => UpdateTime,
  ) $s = shape()) {
    $this->active_job_id = $active_job_id ?? "";
    $this->associated_resources = $associated_resources ?? [];
    $this->backend_environment_arn = $backend_environment_arn ?? "";
    $this->basic_auth_credentials = $basic_auth_credentials ?? "";
    $this->branch_arn = $branch_arn ?? "";
    $this->branch_name = $branch_name ?? "";
    $this->build_spec = $build_spec ?? "";
    $this->create_time = $create_time ?? 0;
    $this->custom_domains = $custom_domains ?? [];
    $this->description = $description ?? "";
    $this->destination_branch = $destination_branch ?? "";
    $this->display_name = $display_name ?? "";
    $this->enable_auto_build = $enable_auto_build ?? false;
    $this->enable_basic_auth = $enable_basic_auth ?? false;
    $this->enable_notification = $enable_notification ?? false;
    $this->enable_pull_request_preview = $enable_pull_request_preview ?? false;
    $this->environment_variables = $environment_variables ?? [];
    $this->framework = $framework ?? "";
    $this->pull_request_environment_name = $pull_request_environment_name ?? "";
    $this->source_branch = $source_branch ?? "";
    $this->stage = $stage ?? "";
    $this->tags = $tags ?? [];
    $this->thumbnail_url = $thumbnail_url ?? "";
    $this->total_number_of_jobs = $total_number_of_jobs ?? "";
    $this->ttl = $ttl ?? "";
    $this->update_time = $update_time ?? 0;
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
  public AccessToken $access_token;
  public AutoBranchCreationConfig $auto_branch_creation_config;
  public AutoBranchCreationPatterns $auto_branch_creation_patterns;
  public BasicAuthCredentials $basic_auth_credentials;
  public BuildSpec $build_spec;
  public CustomRules $custom_rules;
  public Description $description;
  public EnableAutoBranchCreation $enable_auto_branch_creation;
  public EnableBasicAuth $enable_basic_auth;
  public EnableBranchAutoBuild $enable_branch_auto_build;
  public EnvironmentVariables $environment_variables;
  public ServiceRoleArn $iam_service_role_arn;
  public Name $name;
  public OauthToken $oauth_token;
  public Platform $platform;
  public Repository $repository;
  public TagMap $tags;

  public function __construct(shape(
  ?'access_token' => AccessToken,
  ?'auto_branch_creation_config' => AutoBranchCreationConfig,
  ?'auto_branch_creation_patterns' => AutoBranchCreationPatterns,
  ?'basic_auth_credentials' => BasicAuthCredentials,
  ?'build_spec' => BuildSpec,
  ?'custom_rules' => CustomRules,
  ?'description' => Description,
  ?'enable_auto_branch_creation' => EnableAutoBranchCreation,
  ?'enable_basic_auth' => EnableBasicAuth,
  ?'enable_branch_auto_build' => EnableBranchAutoBuild,
  ?'environment_variables' => EnvironmentVariables,
  ?'iam_service_role_arn' => ServiceRoleArn,
  ?'name' => Name,
  ?'oauth_token' => OauthToken,
  ?'platform' => Platform,
  ?'repository' => Repository,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->access_token = $access_token ?? "";
    $this->auto_branch_creation_config = $auto_branch_creation_config ?? null;
    $this->auto_branch_creation_patterns = $auto_branch_creation_patterns ?? [];
    $this->basic_auth_credentials = $basic_auth_credentials ?? "";
    $this->build_spec = $build_spec ?? "";
    $this->custom_rules = $custom_rules ?? [];
    $this->description = $description ?? "";
    $this->enable_auto_branch_creation = $enable_auto_branch_creation ?? false;
    $this->enable_basic_auth = $enable_basic_auth ?? false;
    $this->enable_branch_auto_build = $enable_branch_auto_build ?? false;
    $this->environment_variables = $environment_variables ?? [];
    $this->iam_service_role_arn = $iam_service_role_arn ?? "";
    $this->name = $name ?? "";
    $this->oauth_token = $oauth_token ?? "";
    $this->platform = $platform ?? "";
    $this->repository = $repository ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateAppResult {
  public App $app;

  public function __construct(shape(
  ?'app' => App,
  ) $s = shape()) {
    $this->app = $app ?? null;
  }
}

class CreateBackendEnvironmentRequest {
  public AppId $app_id;
  public DeploymentArtifacts $deployment_artifacts;
  public EnvironmentName $environment_name;
  public StackName $stack_name;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'deployment_artifacts' => DeploymentArtifacts,
  ?'environment_name' => EnvironmentName,
  ?'stack_name' => StackName,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->deployment_artifacts = $deployment_artifacts ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

class CreateBackendEnvironmentResult {
  public BackendEnvironment $backend_environment;

  public function __construct(shape(
  ?'backend_environment' => BackendEnvironment,
  ) $s = shape()) {
    $this->backend_environment = $backend_environment ?? null;
  }
}

class CreateBranchRequest {
  public AppId $app_id;
  public BackendEnvironmentArn $backend_environment_arn;
  public BasicAuthCredentials $basic_auth_credentials;
  public BranchName $branch_name;
  public BuildSpec $build_spec;
  public Description $description;
  public DisplayName $display_name;
  public EnableAutoBuild $enable_auto_build;
  public EnableBasicAuth $enable_basic_auth;
  public EnableNotification $enable_notification;
  public EnablePullRequestPreview $enable_pull_request_preview;
  public EnvironmentVariables $environment_variables;
  public Framework $framework;
  public PullRequestEnvironmentName $pull_request_environment_name;
  public Stage $stage;
  public TagMap $tags;
  public TTL $ttl;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'backend_environment_arn' => BackendEnvironmentArn,
  ?'basic_auth_credentials' => BasicAuthCredentials,
  ?'branch_name' => BranchName,
  ?'build_spec' => BuildSpec,
  ?'description' => Description,
  ?'display_name' => DisplayName,
  ?'enable_auto_build' => EnableAutoBuild,
  ?'enable_basic_auth' => EnableBasicAuth,
  ?'enable_notification' => EnableNotification,
  ?'enable_pull_request_preview' => EnablePullRequestPreview,
  ?'environment_variables' => EnvironmentVariables,
  ?'framework' => Framework,
  ?'pull_request_environment_name' => PullRequestEnvironmentName,
  ?'stage' => Stage,
  ?'tags' => TagMap,
  ?'ttl' => TTL,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->backend_environment_arn = $backend_environment_arn ?? "";
    $this->basic_auth_credentials = $basic_auth_credentials ?? "";
    $this->branch_name = $branch_name ?? "";
    $this->build_spec = $build_spec ?? "";
    $this->description = $description ?? "";
    $this->display_name = $display_name ?? "";
    $this->enable_auto_build = $enable_auto_build ?? false;
    $this->enable_basic_auth = $enable_basic_auth ?? false;
    $this->enable_notification = $enable_notification ?? false;
    $this->enable_pull_request_preview = $enable_pull_request_preview ?? false;
    $this->environment_variables = $environment_variables ?? [];
    $this->framework = $framework ?? "";
    $this->pull_request_environment_name = $pull_request_environment_name ?? "";
    $this->stage = $stage ?? "";
    $this->tags = $tags ?? [];
    $this->ttl = $ttl ?? "";
  }
}

class CreateBranchResult {
  public Branch $branch;

  public function __construct(shape(
  ?'branch' => Branch,
  ) $s = shape()) {
    $this->branch = $branch ?? null;
  }
}

class CreateDeploymentRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public FileMap $file_map;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'branch_name' => BranchName,
  ?'file_map' => FileMap,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->branch_name = $branch_name ?? "";
    $this->file_map = $file_map ?? [];
  }
}

class CreateDeploymentResult {
  public FileUploadUrls $file_upload_urls;
  public JobId $job_id;
  public UploadUrl $zip_upload_url;

  public function __construct(shape(
  ?'file_upload_urls' => FileUploadUrls,
  ?'job_id' => JobId,
  ?'zip_upload_url' => UploadUrl,
  ) $s = shape()) {
    $this->file_upload_urls = $file_upload_urls ?? [];
    $this->job_id = $job_id ?? "";
    $this->zip_upload_url = $zip_upload_url ?? "";
  }
}

class CreateDomainAssociationRequest {
  public AppId $app_id;
  public DomainName $domain_name;
  public EnableAutoSubDomain $enable_auto_sub_domain;
  public SubDomainSettings $sub_domain_settings;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'domain_name' => DomainName,
  ?'enable_auto_sub_domain' => EnableAutoSubDomain,
  ?'sub_domain_settings' => SubDomainSettings,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->domain_name = $domain_name ?? "";
    $this->enable_auto_sub_domain = $enable_auto_sub_domain ?? false;
    $this->sub_domain_settings = $sub_domain_settings ?? [];
  }
}

class CreateDomainAssociationResult {
  public DomainAssociation $domain_association;

  public function __construct(shape(
  ?'domain_association' => DomainAssociation,
  ) $s = shape()) {
    $this->domain_association = $domain_association ?? null;
  }
}

type CreateTime = int;

class CreateWebhookRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public Description $description;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'branch_name' => BranchName,
  ?'description' => Description,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->branch_name = $branch_name ?? "";
    $this->description = $description ?? "";
  }
}

class CreateWebhookResult {
  public Webhook $webhook;

  public function __construct(shape(
  ?'webhook' => Webhook,
  ) $s = shape()) {
    $this->webhook = $webhook ?? null;
  }
}

type CustomDomain = string;

type CustomDomains = vec<CustomDomain>;

class CustomRule {
  public Condition $condition;
  public Source $source;
  public Status $status;
  public Target $target;

  public function __construct(shape(
  ?'condition' => Condition,
  ?'source' => Source,
  ?'status' => Status,
  ?'target' => Target,
  ) $s = shape()) {
    $this->condition = $condition ?? "";
    $this->source = $source ?? "";
    $this->status = $status ?? "";
    $this->target = $target ?? "";
  }
}

type CustomRules = vec<CustomRule>;

type DNSRecord = string;

type DefaultDomain = string;

class DeleteAppRequest {
  public AppId $app_id;

  public function __construct(shape(
  ?'app_id' => AppId,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
  }
}

class DeleteAppResult {
  public App $app;

  public function __construct(shape(
  ?'app' => App,
  ) $s = shape()) {
    $this->app = $app ?? null;
  }
}

class DeleteBackendEnvironmentRequest {
  public AppId $app_id;
  public EnvironmentName $environment_name;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'environment_name' => EnvironmentName,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->environment_name = $environment_name ?? "";
  }
}

class DeleteBackendEnvironmentResult {
  public BackendEnvironment $backend_environment;

  public function __construct(shape(
  ?'backend_environment' => BackendEnvironment,
  ) $s = shape()) {
    $this->backend_environment = $backend_environment ?? null;
  }
}

class DeleteBranchRequest {
  public AppId $app_id;
  public BranchName $branch_name;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'branch_name' => BranchName,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->branch_name = $branch_name ?? "";
  }
}

class DeleteBranchResult {
  public Branch $branch;

  public function __construct(shape(
  ?'branch' => Branch,
  ) $s = shape()) {
    $this->branch = $branch ?? null;
  }
}

class DeleteDomainAssociationRequest {
  public AppId $app_id;
  public DomainName $domain_name;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->domain_name = $domain_name ?? "";
  }
}

class DeleteDomainAssociationResult {
  public DomainAssociation $domain_association;

  public function __construct(shape(
  ?'domain_association' => DomainAssociation,
  ) $s = shape()) {
    $this->domain_association = $domain_association ?? null;
  }
}

class DeleteJobRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public JobId $job_id;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'branch_name' => BranchName,
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->branch_name = $branch_name ?? "";
    $this->job_id = $job_id ?? "";
  }
}

class DeleteJobResult {
  public JobSummary $job_summary;

  public function __construct(shape(
  ?'job_summary' => JobSummary,
  ) $s = shape()) {
    $this->job_summary = $job_summary ?? null;
  }
}

class DeleteWebhookRequest {
  public WebhookId $webhook_id;

  public function __construct(shape(
  ?'webhook_id' => WebhookId,
  ) $s = shape()) {
    $this->webhook_id = $webhook_id ?? "";
  }
}

class DeleteWebhookResult {
  public Webhook $webhook;

  public function __construct(shape(
  ?'webhook' => Webhook,
  ) $s = shape()) {
    $this->webhook = $webhook ?? null;
  }
}

class DependentServiceFailureException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type DeploymentArtifacts = string;

type Description = string;

type DisplayName = string;

class DomainAssociation {
  public CertificateVerificationDNSRecord $certificate_verification_dns_record;
  public DomainAssociationArn $domain_association_arn;
  public DomainName $domain_name;
  public DomainStatus $domain_status;
  public EnableAutoSubDomain $enable_auto_sub_domain;
  public StatusReason $status_reason;
  public SubDomains $sub_domains;

  public function __construct(shape(
  ?'certificate_verification_dns_record' => CertificateVerificationDNSRecord,
  ?'domain_association_arn' => DomainAssociationArn,
  ?'domain_name' => DomainName,
  ?'domain_status' => DomainStatus,
  ?'enable_auto_sub_domain' => EnableAutoSubDomain,
  ?'status_reason' => StatusReason,
  ?'sub_domains' => SubDomains,
  ) $s = shape()) {
    $this->certificate_verification_dns_record = $certificate_verification_dns_record ?? "";
    $this->domain_association_arn = $domain_association_arn ?? "";
    $this->domain_name = $domain_name ?? "";
    $this->domain_status = $domain_status ?? "";
    $this->enable_auto_sub_domain = $enable_auto_sub_domain ?? false;
    $this->status_reason = $status_reason ?? "";
    $this->sub_domains = $sub_domains ?? [];
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
  public AppId $app_id;
  public DomainName $domain_name;
  public EndTime $end_time;
  public StartTime $start_time;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'domain_name' => DomainName,
  ?'end_time' => EndTime,
  ?'start_time' => StartTime,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->domain_name = $domain_name ?? "";
    $this->end_time = $end_time ?? 0;
    $this->start_time = $start_time ?? 0;
  }
}

class GenerateAccessLogsResult {
  public LogUrl $log_url;

  public function __construct(shape(
  ?'log_url' => LogUrl,
  ) $s = shape()) {
    $this->log_url = $log_url ?? "";
  }
}

class GetAppRequest {
  public AppId $app_id;

  public function __construct(shape(
  ?'app_id' => AppId,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
  }
}

class GetAppResult {
  public App $app;

  public function __construct(shape(
  ?'app' => App,
  ) $s = shape()) {
    $this->app = $app ?? null;
  }
}

class GetArtifactUrlRequest {
  public ArtifactId $artifact_id;

  public function __construct(shape(
  ?'artifact_id' => ArtifactId,
  ) $s = shape()) {
    $this->artifact_id = $artifact_id ?? "";
  }
}

class GetArtifactUrlResult {
  public ArtifactId $artifact_id;
  public ArtifactUrl $artifact_url;

  public function __construct(shape(
  ?'artifact_id' => ArtifactId,
  ?'artifact_url' => ArtifactUrl,
  ) $s = shape()) {
    $this->artifact_id = $artifact_id ?? "";
    $this->artifact_url = $artifact_url ?? "";
  }
}

class GetBackendEnvironmentRequest {
  public AppId $app_id;
  public EnvironmentName $environment_name;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'environment_name' => EnvironmentName,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->environment_name = $environment_name ?? "";
  }
}

class GetBackendEnvironmentResult {
  public BackendEnvironment $backend_environment;

  public function __construct(shape(
  ?'backend_environment' => BackendEnvironment,
  ) $s = shape()) {
    $this->backend_environment = $backend_environment ?? null;
  }
}

class GetBranchRequest {
  public AppId $app_id;
  public BranchName $branch_name;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'branch_name' => BranchName,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->branch_name = $branch_name ?? "";
  }
}

class GetBranchResult {
  public Branch $branch;

  public function __construct(shape(
  ?'branch' => Branch,
  ) $s = shape()) {
    $this->branch = $branch ?? null;
  }
}

class GetDomainAssociationRequest {
  public AppId $app_id;
  public DomainName $domain_name;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->domain_name = $domain_name ?? "";
  }
}

class GetDomainAssociationResult {
  public DomainAssociation $domain_association;

  public function __construct(shape(
  ?'domain_association' => DomainAssociation,
  ) $s = shape()) {
    $this->domain_association = $domain_association ?? null;
  }
}

class GetJobRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public JobId $job_id;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'branch_name' => BranchName,
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->branch_name = $branch_name ?? "";
    $this->job_id = $job_id ?? "";
  }
}

class GetJobResult {
  public Job $job;

  public function __construct(shape(
  ?'job' => Job,
  ) $s = shape()) {
    $this->job = $job ?? null;
  }
}

class GetWebhookRequest {
  public WebhookId $webhook_id;

  public function __construct(shape(
  ?'webhook_id' => WebhookId,
  ) $s = shape()) {
    $this->webhook_id = $webhook_id ?? "";
  }
}

class GetWebhookResult {
  public Webhook $webhook;

  public function __construct(shape(
  ?'webhook' => Webhook,
  ) $s = shape()) {
    $this->webhook = $webhook ?? null;
  }
}

class InternalFailureException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class Job {
  public Steps $steps;
  public JobSummary $summary;

  public function __construct(shape(
  ?'steps' => Steps,
  ?'summary' => JobSummary,
  ) $s = shape()) {
    $this->steps = $steps ?? [];
    $this->summary = $summary ?? null;
  }
}

type JobArn = string;

type JobId = string;

type JobReason = string;

type JobStatus = string;

type JobSummaries = vec<JobSummary>;

class JobSummary {
  public CommitId $commit_id;
  public CommitMessage $commit_message;
  public CommitTime $commit_time;
  public EndTime $end_time;
  public JobArn $job_arn;
  public JobId $job_id;
  public JobType $job_type;
  public StartTime $start_time;
  public JobStatus $status;

  public function __construct(shape(
  ?'commit_id' => CommitId,
  ?'commit_message' => CommitMessage,
  ?'commit_time' => CommitTime,
  ?'end_time' => EndTime,
  ?'job_arn' => JobArn,
  ?'job_id' => JobId,
  ?'job_type' => JobType,
  ?'start_time' => StartTime,
  ?'status' => JobStatus,
  ) $s = shape()) {
    $this->commit_id = $commit_id ?? "";
    $this->commit_message = $commit_message ?? "";
    $this->commit_time = $commit_time ?? 0;
    $this->end_time = $end_time ?? 0;
    $this->job_arn = $job_arn ?? "";
    $this->job_id = $job_id ?? "";
    $this->job_type = $job_type ?? "";
    $this->start_time = $start_time ?? 0;
    $this->status = $status ?? "";
  }
}

type JobType = string;

type LastDeployTime = int;

class LimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListAppsRequest {
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

class ListAppsResult {
  public Apps $apps;
  public NextToken $next_token;

  public function __construct(shape(
  ?'apps' => Apps,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->apps = $apps ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListArtifactsRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public JobId $job_id;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'branch_name' => BranchName,
  ?'job_id' => JobId,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->branch_name = $branch_name ?? "";
    $this->job_id = $job_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListArtifactsResult {
  public Artifacts $artifacts;
  public NextToken $next_token;

  public function __construct(shape(
  ?'artifacts' => Artifacts,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->artifacts = $artifacts ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListBackendEnvironmentsRequest {
  public AppId $app_id;
  public EnvironmentName $environment_name;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'environment_name' => EnvironmentName,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->environment_name = $environment_name ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListBackendEnvironmentsResult {
  public BackendEnvironments $backend_environments;
  public NextToken $next_token;

  public function __construct(shape(
  ?'backend_environments' => BackendEnvironments,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->backend_environments = $backend_environments ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListBranchesRequest {
  public AppId $app_id;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListBranchesResult {
  public Branches $branches;
  public NextToken $next_token;

  public function __construct(shape(
  ?'branches' => Branches,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->branches = $branches ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListDomainAssociationsRequest {
  public AppId $app_id;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListDomainAssociationsResult {
  public DomainAssociations $domain_associations;
  public NextToken $next_token;

  public function __construct(shape(
  ?'domain_associations' => DomainAssociations,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->domain_associations = $domain_associations ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListJobsRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'branch_name' => BranchName,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->branch_name = $branch_name ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListJobsResult {
  public JobSummaries $job_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'job_summaries' => JobSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->job_summaries = $job_summaries ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListTagsForResourceRequest {
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagMap $tags;

  public function __construct(shape(
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class ListWebhooksRequest {
  public AppId $app_id;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListWebhooksResult {
  public NextToken $next_token;
  public Webhooks $webhooks;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'webhooks' => Webhooks,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->webhooks = $webhooks ?? [];
  }
}

type LogUrl = string;

type MD5Hash = string;

type MaxResults = int;

type Name = string;

type NextToken = string;

class NotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type OauthToken = string;

type Platform = string;

class ProductionBranch {
  public BranchName $branch_name;
  public LastDeployTime $last_deploy_time;
  public Status $status;
  public ThumbnailUrl $thumbnail_url;

  public function __construct(shape(
  ?'branch_name' => BranchName,
  ?'last_deploy_time' => LastDeployTime,
  ?'status' => Status,
  ?'thumbnail_url' => ThumbnailUrl,
  ) $s = shape()) {
    $this->branch_name = $branch_name ?? "";
    $this->last_deploy_time = $last_deploy_time ?? 0;
    $this->status = $status ?? "";
    $this->thumbnail_url = $thumbnail_url ?? "";
  }
}

type PullRequestEnvironmentName = string;

type Repository = string;

type ResourceArn = string;

class ResourceNotFoundException {
  public Code $code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'code' => Code,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

type Screenshots = dict<ThumbnailName, ThumbnailUrl>;

type ServiceRoleArn = string;

type Source = string;

type SourceUrl = string;

type StackName = string;

type Stage = string;

class StartDeploymentRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public JobId $job_id;
  public SourceUrl $source_url;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'branch_name' => BranchName,
  ?'job_id' => JobId,
  ?'source_url' => SourceUrl,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->branch_name = $branch_name ?? "";
    $this->job_id = $job_id ?? "";
    $this->source_url = $source_url ?? "";
  }
}

class StartDeploymentResult {
  public JobSummary $job_summary;

  public function __construct(shape(
  ?'job_summary' => JobSummary,
  ) $s = shape()) {
    $this->job_summary = $job_summary ?? null;
  }
}

class StartJobRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public CommitId $commit_id;
  public CommitMessage $commit_message;
  public CommitTime $commit_time;
  public JobId $job_id;
  public JobReason $job_reason;
  public JobType $job_type;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'branch_name' => BranchName,
  ?'commit_id' => CommitId,
  ?'commit_message' => CommitMessage,
  ?'commit_time' => CommitTime,
  ?'job_id' => JobId,
  ?'job_reason' => JobReason,
  ?'job_type' => JobType,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->branch_name = $branch_name ?? "";
    $this->commit_id = $commit_id ?? "";
    $this->commit_message = $commit_message ?? "";
    $this->commit_time = $commit_time ?? 0;
    $this->job_id = $job_id ?? "";
    $this->job_reason = $job_reason ?? "";
    $this->job_type = $job_type ?? "";
  }
}

class StartJobResult {
  public JobSummary $job_summary;

  public function __construct(shape(
  ?'job_summary' => JobSummary,
  ) $s = shape()) {
    $this->job_summary = $job_summary ?? null;
  }
}

type StartTime = int;

type Status = string;

type StatusReason = string;

class Step {
  public ArtifactsUrl $artifacts_url;
  public Context $context;
  public EndTime $end_time;
  public LogUrl $log_url;
  public Screenshots $screenshots;
  public StartTime $start_time;
  public JobStatus $status;
  public StatusReason $status_reason;
  public StepName $step_name;
  public TestArtifactsUrl $test_artifacts_url;
  public TestConfigUrl $test_config_url;

  public function __construct(shape(
  ?'artifacts_url' => ArtifactsUrl,
  ?'context' => Context,
  ?'end_time' => EndTime,
  ?'log_url' => LogUrl,
  ?'screenshots' => Screenshots,
  ?'start_time' => StartTime,
  ?'status' => JobStatus,
  ?'status_reason' => StatusReason,
  ?'step_name' => StepName,
  ?'test_artifacts_url' => TestArtifactsUrl,
  ?'test_config_url' => TestConfigUrl,
  ) $s = shape()) {
    $this->artifacts_url = $artifacts_url ?? "";
    $this->context = $context ?? "";
    $this->end_time = $end_time ?? 0;
    $this->log_url = $log_url ?? "";
    $this->screenshots = $screenshots ?? [];
    $this->start_time = $start_time ?? 0;
    $this->status = $status ?? "";
    $this->status_reason = $status_reason ?? "";
    $this->step_name = $step_name ?? "";
    $this->test_artifacts_url = $test_artifacts_url ?? "";
    $this->test_config_url = $test_config_url ?? "";
  }
}

type StepName = string;

type Steps = vec<Step>;

class StopJobRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public JobId $job_id;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'branch_name' => BranchName,
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->branch_name = $branch_name ?? "";
    $this->job_id = $job_id ?? "";
  }
}

class StopJobResult {
  public JobSummary $job_summary;

  public function __construct(shape(
  ?'job_summary' => JobSummary,
  ) $s = shape()) {
    $this->job_summary = $job_summary ?? null;
  }
}

class SubDomain {
  public DNSRecord $dns_record;
  public SubDomainSetting $sub_domain_setting;
  public Verified $verified;

  public function __construct(shape(
  ?'dns_record' => DNSRecord,
  ?'sub_domain_setting' => SubDomainSetting,
  ?'verified' => Verified,
  ) $s = shape()) {
    $this->dns_record = $dns_record ?? "";
    $this->sub_domain_setting = $sub_domain_setting ?? null;
    $this->verified = $verified ?? false;
  }
}

class SubDomainSetting {
  public BranchName $branch_name;
  public DomainPrefix $prefix;

  public function __construct(shape(
  ?'branch_name' => BranchName,
  ?'prefix' => DomainPrefix,
  ) $s = shape()) {
    $this->branch_name = $branch_name ?? "";
    $this->prefix = $prefix ?? "";
  }
}

type SubDomainSettings = vec<SubDomainSetting>;

type SubDomains = vec<SubDomain>;

type TTL = string;

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagMap $tags;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
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
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateAppRequest {
  public AccessToken $access_token;
  public AppId $app_id;
  public AutoBranchCreationConfig $auto_branch_creation_config;
  public AutoBranchCreationPatterns $auto_branch_creation_patterns;
  public BasicAuthCredentials $basic_auth_credentials;
  public BuildSpec $build_spec;
  public CustomRules $custom_rules;
  public Description $description;
  public EnableAutoBranchCreation $enable_auto_branch_creation;
  public EnableBasicAuth $enable_basic_auth;
  public EnableAutoBuild $enable_branch_auto_build;
  public EnvironmentVariables $environment_variables;
  public ServiceRoleArn $iam_service_role_arn;
  public Name $name;
  public OauthToken $oauth_token;
  public Platform $platform;
  public Repository $repository;

  public function __construct(shape(
  ?'access_token' => AccessToken,
  ?'app_id' => AppId,
  ?'auto_branch_creation_config' => AutoBranchCreationConfig,
  ?'auto_branch_creation_patterns' => AutoBranchCreationPatterns,
  ?'basic_auth_credentials' => BasicAuthCredentials,
  ?'build_spec' => BuildSpec,
  ?'custom_rules' => CustomRules,
  ?'description' => Description,
  ?'enable_auto_branch_creation' => EnableAutoBranchCreation,
  ?'enable_basic_auth' => EnableBasicAuth,
  ?'enable_branch_auto_build' => EnableAutoBuild,
  ?'environment_variables' => EnvironmentVariables,
  ?'iam_service_role_arn' => ServiceRoleArn,
  ?'name' => Name,
  ?'oauth_token' => OauthToken,
  ?'platform' => Platform,
  ?'repository' => Repository,
  ) $s = shape()) {
    $this->access_token = $access_token ?? "";
    $this->app_id = $app_id ?? "";
    $this->auto_branch_creation_config = $auto_branch_creation_config ?? null;
    $this->auto_branch_creation_patterns = $auto_branch_creation_patterns ?? [];
    $this->basic_auth_credentials = $basic_auth_credentials ?? "";
    $this->build_spec = $build_spec ?? "";
    $this->custom_rules = $custom_rules ?? [];
    $this->description = $description ?? "";
    $this->enable_auto_branch_creation = $enable_auto_branch_creation ?? false;
    $this->enable_basic_auth = $enable_basic_auth ?? false;
    $this->enable_branch_auto_build = $enable_branch_auto_build ?? false;
    $this->environment_variables = $environment_variables ?? [];
    $this->iam_service_role_arn = $iam_service_role_arn ?? "";
    $this->name = $name ?? "";
    $this->oauth_token = $oauth_token ?? "";
    $this->platform = $platform ?? "";
    $this->repository = $repository ?? "";
  }
}

class UpdateAppResult {
  public App $app;

  public function __construct(shape(
  ?'app' => App,
  ) $s = shape()) {
    $this->app = $app ?? null;
  }
}

class UpdateBranchRequest {
  public AppId $app_id;
  public BackendEnvironmentArn $backend_environment_arn;
  public BasicAuthCredentials $basic_auth_credentials;
  public BranchName $branch_name;
  public BuildSpec $build_spec;
  public Description $description;
  public DisplayName $display_name;
  public EnableAutoBuild $enable_auto_build;
  public EnableBasicAuth $enable_basic_auth;
  public EnableNotification $enable_notification;
  public EnablePullRequestPreview $enable_pull_request_preview;
  public EnvironmentVariables $environment_variables;
  public Framework $framework;
  public PullRequestEnvironmentName $pull_request_environment_name;
  public Stage $stage;
  public TTL $ttl;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'backend_environment_arn' => BackendEnvironmentArn,
  ?'basic_auth_credentials' => BasicAuthCredentials,
  ?'branch_name' => BranchName,
  ?'build_spec' => BuildSpec,
  ?'description' => Description,
  ?'display_name' => DisplayName,
  ?'enable_auto_build' => EnableAutoBuild,
  ?'enable_basic_auth' => EnableBasicAuth,
  ?'enable_notification' => EnableNotification,
  ?'enable_pull_request_preview' => EnablePullRequestPreview,
  ?'environment_variables' => EnvironmentVariables,
  ?'framework' => Framework,
  ?'pull_request_environment_name' => PullRequestEnvironmentName,
  ?'stage' => Stage,
  ?'ttl' => TTL,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->backend_environment_arn = $backend_environment_arn ?? "";
    $this->basic_auth_credentials = $basic_auth_credentials ?? "";
    $this->branch_name = $branch_name ?? "";
    $this->build_spec = $build_spec ?? "";
    $this->description = $description ?? "";
    $this->display_name = $display_name ?? "";
    $this->enable_auto_build = $enable_auto_build ?? false;
    $this->enable_basic_auth = $enable_basic_auth ?? false;
    $this->enable_notification = $enable_notification ?? false;
    $this->enable_pull_request_preview = $enable_pull_request_preview ?? false;
    $this->environment_variables = $environment_variables ?? [];
    $this->framework = $framework ?? "";
    $this->pull_request_environment_name = $pull_request_environment_name ?? "";
    $this->stage = $stage ?? "";
    $this->ttl = $ttl ?? "";
  }
}

class UpdateBranchResult {
  public Branch $branch;

  public function __construct(shape(
  ?'branch' => Branch,
  ) $s = shape()) {
    $this->branch = $branch ?? null;
  }
}

class UpdateDomainAssociationRequest {
  public AppId $app_id;
  public DomainName $domain_name;
  public EnableAutoSubDomain $enable_auto_sub_domain;
  public SubDomainSettings $sub_domain_settings;

  public function __construct(shape(
  ?'app_id' => AppId,
  ?'domain_name' => DomainName,
  ?'enable_auto_sub_domain' => EnableAutoSubDomain,
  ?'sub_domain_settings' => SubDomainSettings,
  ) $s = shape()) {
    $this->app_id = $app_id ?? "";
    $this->domain_name = $domain_name ?? "";
    $this->enable_auto_sub_domain = $enable_auto_sub_domain ?? false;
    $this->sub_domain_settings = $sub_domain_settings ?? [];
  }
}

class UpdateDomainAssociationResult {
  public DomainAssociation $domain_association;

  public function __construct(shape(
  ?'domain_association' => DomainAssociation,
  ) $s = shape()) {
    $this->domain_association = $domain_association ?? null;
  }
}

type UpdateTime = int;

class UpdateWebhookRequest {
  public BranchName $branch_name;
  public Description $description;
  public WebhookId $webhook_id;

  public function __construct(shape(
  ?'branch_name' => BranchName,
  ?'description' => Description,
  ?'webhook_id' => WebhookId,
  ) $s = shape()) {
    $this->branch_name = $branch_name ?? "";
    $this->description = $description ?? "";
    $this->webhook_id = $webhook_id ?? "";
  }
}

class UpdateWebhookResult {
  public Webhook $webhook;

  public function __construct(shape(
  ?'webhook' => Webhook,
  ) $s = shape()) {
    $this->webhook = $webhook ?? null;
  }
}

type UploadUrl = string;

type Verified = bool;

class Webhook {
  public BranchName $branch_name;
  public CreateTime $create_time;
  public Description $description;
  public UpdateTime $update_time;
  public WebhookArn $webhook_arn;
  public WebhookId $webhook_id;
  public WebhookUrl $webhook_url;

  public function __construct(shape(
  ?'branch_name' => BranchName,
  ?'create_time' => CreateTime,
  ?'description' => Description,
  ?'update_time' => UpdateTime,
  ?'webhook_arn' => WebhookArn,
  ?'webhook_id' => WebhookId,
  ?'webhook_url' => WebhookUrl,
  ) $s = shape()) {
    $this->branch_name = $branch_name ?? "";
    $this->create_time = $create_time ?? 0;
    $this->description = $description ?? "";
    $this->update_time = $update_time ?? 0;
    $this->webhook_arn = $webhook_arn ?? "";
    $this->webhook_id = $webhook_id ?? "";
    $this->webhook_url = $webhook_url ?? "";
  }
}

type WebhookArn = string;

type WebhookId = string;

type WebhookUrl = string;

type Webhooks = vec<Webhook>;


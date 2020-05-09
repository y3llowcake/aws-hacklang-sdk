<?hh // strict
namespace slack\aws\amplify;

interface Amplify {
  public function DeleteApp(DeleteAppRequest) Awaitable<Errors\Result<DeleteAppResult>>;
  public function StopJob(StopJobRequest) Awaitable<Errors\Result<StopJobResult>>;
  public function DeleteJob(DeleteJobRequest) Awaitable<Errors\Result<DeleteJobResult>>;
  public function ListBackendEnvironments(ListBackendEnvironmentsRequest) Awaitable<Errors\Result<ListBackendEnvironmentsResult>>;
  public function ListDomainAssociations(ListDomainAssociationsRequest) Awaitable<Errors\Result<ListDomainAssociationsResult>>;
  public function ListJobs(ListJobsRequest) Awaitable<Errors\Result<ListJobsResult>>;
  public function StartJob(StartJobRequest) Awaitable<Errors\Result<StartJobResult>>;
  public function UpdateDomainAssociation(UpdateDomainAssociationRequest) Awaitable<Errors\Result<UpdateDomainAssociationResult>>;
  public function CreateBackendEnvironment(CreateBackendEnvironmentRequest) Awaitable<Errors\Result<CreateBackendEnvironmentResult>>;
  public function CreateWebhook(CreateWebhookRequest) Awaitable<Errors\Result<CreateWebhookResult>>;
  public function DeleteBranch(DeleteBranchRequest) Awaitable<Errors\Result<DeleteBranchResult>>;
  public function GenerateAccessLogs(GenerateAccessLogsRequest) Awaitable<Errors\Result<GenerateAccessLogsResult>>;
  public function UpdateBranch(UpdateBranchRequest) Awaitable<Errors\Result<UpdateBranchResult>>;
  public function UpdateWebhook(UpdateWebhookRequest) Awaitable<Errors\Result<UpdateWebhookResult>>;
  public function CreateApp(CreateAppRequest) Awaitable<Errors\Result<CreateAppResult>>;
  public function CreateDomainAssociation(CreateDomainAssociationRequest) Awaitable<Errors\Result<CreateDomainAssociationResult>>;
  public function DeleteWebhook(DeleteWebhookRequest) Awaitable<Errors\Result<DeleteWebhookResult>>;
  public function GetArtifactUrl(GetArtifactUrlRequest) Awaitable<Errors\Result<GetArtifactUrlResult>>;
  public function ListApps(ListAppsRequest) Awaitable<Errors\Result<ListAppsResult>>;
  public function ListWebhooks(ListWebhooksRequest) Awaitable<Errors\Result<ListWebhooksResult>>;
  public function DeleteBackendEnvironment(DeleteBackendEnvironmentRequest) Awaitable<Errors\Result<DeleteBackendEnvironmentResult>>;
  public function DeleteDomainAssociation(DeleteDomainAssociationRequest) Awaitable<Errors\Result<DeleteDomainAssociationResult>>;
  public function GetBranch(GetBranchRequest) Awaitable<Errors\Result<GetBranchResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UpdateApp(UpdateAppRequest) Awaitable<Errors\Result<UpdateAppResult>>;
  public function GetApp(GetAppRequest) Awaitable<Errors\Result<GetAppResult>>;
  public function GetBackendEnvironment(GetBackendEnvironmentRequest) Awaitable<Errors\Result<GetBackendEnvironmentResult>>;
  public function GetDomainAssociation(GetDomainAssociationRequest) Awaitable<Errors\Result<GetDomainAssociationResult>>;
  public function GetJob(GetJobRequest) Awaitable<Errors\Result<GetJobResult>>;
  public function GetWebhook(GetWebhookRequest) Awaitable<Errors\Result<GetWebhookResult>>;
  public function StartDeployment(StartDeploymentRequest) Awaitable<Errors\Result<StartDeploymentResult>>;
  public function CreateBranch(CreateBranchRequest) Awaitable<Errors\Result<CreateBranchResult>>;
  public function CreateDeployment(CreateDeploymentRequest) Awaitable<Errors\Result<CreateDeploymentResult>>;
  public function ListArtifacts(ListArtifactsRequest) Awaitable<Errors\Result<ListArtifactsResult>>;
  public function ListBranches(ListBranchesRequest) Awaitable<Errors\Result<ListBranchesResult>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
}

class CustomRule {
  public Condition $condition;
  public Source $source;
  public Target $target;
  public Status $status;
}

class DefaultDomain {
}

class DeleteBackendEnvironmentResult {
  public BackendEnvironment $backend_environment;
}

class OauthToken {
}

class Stage {
}

class StepName {
}

class CreateDeploymentResult {
  public JobId $job_id;
  public FileUploadUrls $file_upload_urls;
  public UploadUrl $zip_upload_url;
}

class CommitMessage {
}

class Condition {
}

class CreateAppRequest {
  public EnableBasicAuth $enable_basic_auth;
  public BuildSpec $build_spec;
  public EnableAutoBranchCreation $enable_auto_branch_creation;
  public AutoBranchCreationConfig $auto_branch_creation_config;
  public Description $description;
  public Platform $platform;
  public ServiceRoleArn $iam_service_role_arn;
  public AutoBranchCreationPatterns $auto_branch_creation_patterns;
  public Repository $repository;
  public AccessToken $access_token;
  public EnableBranchAutoBuild $enable_branch_auto_build;
  public CustomRules $custom_rules;
  public TagMap $tags;
  public Name $name;
  public OauthToken $oauth_token;
  public EnvironmentVariables $environment_variables;
  public BasicAuthCredentials $basic_auth_credentials;
}

class GetArtifactUrlRequest {
  public ArtifactId $artifact_id;
}

class LastDeployTime {
}

class WebhookId {
}

class CommitId {
}

class ListBranchesResult {
  public Branches $branches;
  public NextToken $next_token;
}

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagMap $tags;
}

class App {
  public Platform $platform;
  public UpdateTime $update_time;
  public EnableBranchAutoBuild $enable_branch_auto_build;
  public AppId $app_id;
  public TagMap $tags;
  public CreateTime $create_time;
  public DefaultDomain $default_domain;
  public AutoBranchCreationPatterns $auto_branch_creation_patterns;
  public Name $name;
  public Repository $repository;
  public EnableAutoBranchCreation $enable_auto_branch_creation;
  public EnvironmentVariables $environment_variables;
  public EnableBasicAuth $enable_basic_auth;
  public ServiceRoleArn $iam_service_role_arn;
  public BasicAuthCredentials $basic_auth_credentials;
  public CustomRules $custom_rules;
  public ProductionBranch $production_branch;
  public BuildSpec $build_spec;
  public AutoBranchCreationConfig $auto_branch_creation_config;
  public AppArn $app_arn;
  public Description $description;
}

class BranchName {
}

class FileName {
}

class ListArtifactsRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public JobId $job_id;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class StackName {
}

class StartJobRequest {
  public CommitMessage $commit_message;
  public CommitTime $commit_time;
  public AppId $app_id;
  public BranchName $branch_name;
  public JobId $job_id;
  public JobType $job_type;
  public JobReason $job_reason;
  public CommitId $commit_id;
}

class BadRequestException {
  public ErrorMessage $message;
}

class Screenshots {
}

class CreateDeploymentRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public FileMap $file_map;
}

class BackendEnvironmentArn {
}

class BuildSpec {
}

class CreateAppResult {
  public App $app;
}

class CreateBackendEnvironmentResult {
  public BackendEnvironment $backend_environment;
}

class CreateDomainAssociationRequest {
  public SubDomainSettings $sub_domain_settings;
  public AppId $app_id;
  public DomainName $domain_name;
  public EnableAutoSubDomain $enable_auto_sub_domain;
}

class EnableAutoBranchCreation {
}

class JobType {
}

class ArtifactFileName {
}

class UpdateWebhookRequest {
  public WebhookId $webhook_id;
  public BranchName $branch_name;
  public Description $description;
}

class ListAppsResult {
  public Apps $apps;
  public NextToken $next_token;
}

class Platform {
}

class Source {
}

class JobSummary {
  public CommitId $commit_id;
  public JobStatus $status;
  public EndTime $end_time;
  public JobType $job_type;
  public JobArn $job_arn;
  public JobId $job_id;
  public CommitMessage $commit_message;
  public CommitTime $commit_time;
  public StartTime $start_time;
}

class DomainName {
}

class FileUploadUrls {
}

class GetBranchRequest {
  public BranchName $branch_name;
  public AppId $app_id;
}

class ThumbnailName {
}

class DeleteAppRequest {
  public AppId $app_id;
}

class GetBranchResult {
  public Branch $branch;
}

class ListBackendEnvironmentsRequest {
  public AppId $app_id;
  public EnvironmentName $environment_name;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class WebhookArn {
}

class Framework {
}

class DeleteDomainAssociationResult {
  public DomainAssociation $domain_association;
}

class GenerateAccessLogsResult {
  public LogUrl $log_url;
}

class GetDomainAssociationRequest {
  public AppId $app_id;
  public DomainName $domain_name;
}

class SubDomains {
}

class UpdateBranchRequest {
  public Stage $stage;
  public EnableBasicAuth $enable_basic_auth;
  public BackendEnvironmentArn $backend_environment_arn;
  public Framework $framework;
  public EnableAutoBuild $enable_auto_build;
  public BuildSpec $build_spec;
  public BasicAuthCredentials $basic_auth_credentials;
  public EnablePullRequestPreview $enable_pull_request_preview;
  public PullRequestEnvironmentName $pull_request_environment_name;
  public AppId $app_id;
  public Description $description;
  public EnvironmentVariables $environment_variables;
  public DisplayName $display_name;
  public BranchName $branch_name;
  public EnableNotification $enable_notification;
  public TTL $ttl;
}

class UpdateDomainAssociationRequest {
  public AppId $app_id;
  public DomainName $domain_name;
  public EnableAutoSubDomain $enable_auto_sub_domain;
  public SubDomainSettings $sub_domain_settings;
}

class ActiveJobId {
}

class CreateWebhookRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public Description $description;
}

class GetBackendEnvironmentRequest {
  public AppId $app_id;
  public EnvironmentName $environment_name;
}

class ListArtifactsResult {
  public Artifacts $artifacts;
  public NextToken $next_token;
}

class NotFoundException {
  public ErrorMessage $message;
}

class CreateBranchRequest {
  public BasicAuthCredentials $basic_auth_credentials;
  public BuildSpec $build_spec;
  public PullRequestEnvironmentName $pull_request_environment_name;
  public BranchName $branch_name;
  public EnvironmentVariables $environment_variables;
  public EnableAutoBuild $enable_auto_build;
  public TagMap $tags;
  public AppId $app_id;
  public EnableNotification $enable_notification;
  public TTL $ttl;
  public EnablePullRequestPreview $enable_pull_request_preview;
  public BackendEnvironmentArn $backend_environment_arn;
  public Framework $framework;
  public EnableBasicAuth $enable_basic_auth;
  public DisplayName $display_name;
  public Description $description;
  public Stage $stage;
}

class BackendEnvironments {
}

class CreateDomainAssociationResult {
  public DomainAssociation $domain_association;
}

class GetArtifactUrlResult {
  public ArtifactId $artifact_id;
  public ArtifactUrl $artifact_url;
}

class SubDomainSetting {
  public DomainPrefix $prefix;
  public BranchName $branch_name;
}

class UntagResourceResponse {
}

class UpdateDomainAssociationResult {
  public DomainAssociation $domain_association;
}

class AccessToken {
}

class DeleteBranchResult {
  public Branch $branch;
}

class DeleteWebhookRequest {
  public WebhookId $webhook_id;
}

class LimitExceededException {
  public ErrorMessage $message;
}

class MD5Hash {
}

class MaxResults {
}

class ResourceNotFoundException {
  public Code $code;
  public ErrorMessage $message;
}

class Verified {
}

class AssociatedResources {
}

class BasicAuthCredentials {
}

class DeleteWebhookResult {
  public Webhook $webhook;
}

class DeploymentArtifacts {
}

class GetAppRequest {
  public AppId $app_id;
}

class ListWebhooksRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
  public AppId $app_id;
}

class StopJobRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public JobId $job_id;
}

class TestArtifactsUrl {
}

class ArtifactUrl {
}

class UpdateTime {
}

class ListAppsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class ListTagsForResourceRequest {
  public ResourceArn $resource_arn;
}

class LogUrl {
}

class SubDomain {
  public SubDomainSetting $sub_domain_setting;
  public Verified $verified;
  public DNSRecord $dns_record;
}

class TotalNumberOfJobs {
}

class WebhookUrl {
}

class AutoBranchCreationPatterns {
}

class DomainAssociations {
}

class EnableNotification {
}

class ListBackendEnvironmentsResult {
  public BackendEnvironments $backend_environments;
  public NextToken $next_token;
}

class Branches {
}

class StartDeploymentRequest {
  public SourceUrl $source_url;
  public AppId $app_id;
  public BranchName $branch_name;
  public JobId $job_id;
}

class StartTime {
}

class TagResourceResponse {
}

class UnauthorizedException {
  public ErrorMessage $message;
}

class Webhooks {
}

class DomainStatus {
}

class DeleteJobRequest {
  public JobId $job_id;
  public AppId $app_id;
  public BranchName $branch_name;
}

class StartJobResult {
  public JobSummary $job_summary;
}

class TestConfigUrl {
}

class UpdateBranchResult {
  public Branch $branch;
}

class Artifacts {
}

class DeleteJobResult {
  public JobSummary $job_summary;
}

class JobStatus {
}

class ListDomainAssociationsRequest {
  public AppId $app_id;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class ListJobsResult {
  public JobSummaries $job_summaries;
  public NextToken $next_token;
}

class PullRequestEnvironmentName {
}

class StartDeploymentResult {
  public JobSummary $job_summary;
}

class StopJobResult {
  public JobSummary $job_summary;
}

class AppId {
}

class TagValue {
}

class TagKeyList {
}

class EnableAutoBuild {
}

class EnvironmentVariables {
}

class NextToken {
}

class CreateBackendEnvironmentRequest {
  public AppId $app_id;
  public EnvironmentName $environment_name;
  public StackName $stack_name;
  public DeploymentArtifacts $deployment_artifacts;
}

class CreateTime {
}

class DependentServiceFailureException {
  public ErrorMessage $message;
}

class EnvironmentName {
}

class FileMap {
}

class TagKey {
}

class AssociatedResource {
}

class DomainAssociation {
  public DomainAssociationArn $domain_association_arn;
  public DomainName $domain_name;
  public EnableAutoSubDomain $enable_auto_sub_domain;
  public DomainStatus $domain_status;
  public StatusReason $status_reason;
  public CertificateVerificationDNSRecord $certificate_verification_dns_record;
  public SubDomains $sub_domains;
}

class GetAppResult {
  public App $app;
}

class Status {
}

class Target {
}

class UpdateAppResult {
  public App $app;
}

class UpdateWebhookResult {
  public Webhook $webhook;
}

class DeleteAppResult {
  public App $app;
}

class DeleteBranchRequest {
  public BranchName $branch_name;
  public AppId $app_id;
}

class EnablePullRequestPreview {
}

class GetDomainAssociationResult {
  public DomainAssociation $domain_association;
}

class CommitTime {
}

class DNSRecord {
}

class DeleteDomainAssociationRequest {
  public AppId $app_id;
  public DomainName $domain_name;
}

class DomainPrefix {
}

class GetBackendEnvironmentResult {
  public BackendEnvironment $backend_environment;
}

class InternalFailureException {
  public ErrorMessage $message;
}

class ListBranchesRequest {
  public AppId $app_id;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class TagMap {
}

class AutoBranchCreationConfig {
  public Stage $stage;
  public Framework $framework;
  public EnableAutoBuild $enable_auto_build;
  public PullRequestEnvironmentName $pull_request_environment_name;
  public EnvironmentVariables $environment_variables;
  public BasicAuthCredentials $basic_auth_credentials;
  public EnableBasicAuth $enable_basic_auth;
  public BuildSpec $build_spec;
  public EnablePullRequestPreview $enable_pull_request_preview;
}

class ErrorMessage {
}

class GetJobRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public JobId $job_id;
}

class GetWebhookResult {
  public Webhook $webhook;
}

class ListWebhooksResult {
  public Webhooks $webhooks;
  public NextToken $next_token;
}

class ResourceArn {
}

class TTL {
}

class CustomDomain {
}

class AutoBranchCreationPattern {
}

class BranchArn {
}

class Code {
}

class CreateWebhookResult {
  public Webhook $webhook;
}

class EnvKey {
}

class Repository {
}

class SourceUrl {
}

class ArtifactsUrl {
}

class ThumbnailUrl {
}

class EndTime {
}

class JobId {
}

class StatusReason {
}

class Step {
  public EndTime $end_time;
  public ArtifactsUrl $artifacts_url;
  public TestArtifactsUrl $test_artifacts_url;
  public StepName $step_name;
  public JobStatus $status;
  public TestConfigUrl $test_config_url;
  public Screenshots $screenshots;
  public StatusReason $status_reason;
  public Context $context;
  public StartTime $start_time;
  public LogUrl $log_url;
}

class Webhook {
  public WebhookUrl $webhook_url;
  public BranchName $branch_name;
  public Description $description;
  public CreateTime $create_time;
  public UpdateTime $update_time;
  public WebhookArn $webhook_arn;
  public WebhookId $webhook_id;
}

class CertificateVerificationDNSRecord {
}

class ServiceRoleArn {
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UploadUrl {
}

class CustomDomains {
}

class DisplayName {
}

class GenerateAccessLogsRequest {
  public StartTime $start_time;
  public EndTime $end_time;
  public DomainName $domain_name;
  public AppId $app_id;
}

class GetWebhookRequest {
  public WebhookId $webhook_id;
}

class CreateBranchResult {
  public Branch $branch;
}

class BackendEnvironment {
  public BackendEnvironmentArn $backend_environment_arn;
  public EnvironmentName $environment_name;
  public StackName $stack_name;
  public DeploymentArtifacts $deployment_artifacts;
  public CreateTime $create_time;
  public UpdateTime $update_time;
}

class Branch {
  public CustomDomains $custom_domains;
  public Framework $framework;
  public BuildSpec $build_spec;
  public PullRequestEnvironmentName $pull_request_environment_name;
  public BranchName $destination_branch;
  public TagMap $tags;
  public EnableNotification $enable_notification;
  public TotalNumberOfJobs $total_number_of_jobs;
  public EnablePullRequestPreview $enable_pull_request_preview;
  public BranchName $source_branch;
  public BackendEnvironmentArn $backend_environment_arn;
  public CreateTime $create_time;
  public UpdateTime $update_time;
  public EnvironmentVariables $environment_variables;
  public EnableAutoBuild $enable_auto_build;
  public ActiveJobId $active_job_id;
  public AssociatedResources $associated_resources;
  public BranchArn $branch_arn;
  public Stage $stage;
  public DisplayName $display_name;
  public EnableBasicAuth $enable_basic_auth;
  public ThumbnailUrl $thumbnail_url;
  public BasicAuthCredentials $basic_auth_credentials;
  public TTL $ttl;
  public BranchName $branch_name;
  public Description $description;
}

class CustomRules {
}

class DeleteBackendEnvironmentRequest {
  public AppId $app_id;
  public EnvironmentName $environment_name;
}

class Description {
}

class DomainAssociationArn {
}

class GetJobResult {
  public Job $job;
}

class Apps {
}

class ListDomainAssociationsResult {
  public DomainAssociations $domain_associations;
  public NextToken $next_token;
}

class ListJobsRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class ProductionBranch {
  public BranchName $branch_name;
  public LastDeployTime $last_deploy_time;
  public Status $status;
  public ThumbnailUrl $thumbnail_url;
}

class JobReason {
}

class Context {
}

class EnableAutoSubDomain {
}

class EnableBasicAuth {
}

class EnableBranchAutoBuild {
}

class Job {
  public Steps $steps;
  public JobSummary $summary;
}

class JobArn {
}

class UpdateAppRequest {
  public AppId $app_id;
  public EnableAutoBranchCreation $enable_auto_branch_creation;
  public AutoBranchCreationConfig $auto_branch_creation_config;
  public CustomRules $custom_rules;
  public BuildSpec $build_spec;
  public EnableAutoBuild $enable_branch_auto_build;
  public EnableBasicAuth $enable_basic_auth;
  public BasicAuthCredentials $basic_auth_credentials;
  public Repository $repository;
  public Name $name;
  public Platform $platform;
  public AutoBranchCreationPatterns $auto_branch_creation_patterns;
  public OauthToken $oauth_token;
  public AccessToken $access_token;
  public Description $description;
  public ServiceRoleArn $iam_service_role_arn;
  public EnvironmentVariables $environment_variables;
}

class Artifact {
  public ArtifactFileName $artifact_file_name;
  public ArtifactId $artifact_id;
}

class ArtifactId {
}

class EnvValue {
}

class JobSummaries {
}

class Name {
}

class Steps {
}

class SubDomainSettings {
}

class AppArn {
}


<?hh // strict
namespace slack\aws\amplify;

interface Amplify {
  public function CreateApp(CreateAppRequest) Awaitable<Errors\Result<CreateAppResult>>;
  public function CreateBackendEnvironment(CreateBackendEnvironmentRequest) Awaitable<Errors\Result<CreateBackendEnvironmentResult>>;
  public function CreateBranch(CreateBranchRequest) Awaitable<Errors\Result<CreateBranchResult>>;
  public function CreateDeployment(CreateDeploymentRequest) Awaitable<Errors\Result<CreateDeploymentResult>>;
  public function CreateDomainAssociation(CreateDomainAssociationRequest) Awaitable<Errors\Result<CreateDomainAssociationResult>>;
  public function CreateWebhook(CreateWebhookRequest) Awaitable<Errors\Result<CreateWebhookResult>>;
  public function DeleteApp(DeleteAppRequest) Awaitable<Errors\Result<DeleteAppResult>>;
  public function DeleteBackendEnvironment(DeleteBackendEnvironmentRequest) Awaitable<Errors\Result<DeleteBackendEnvironmentResult>>;
  public function DeleteBranch(DeleteBranchRequest) Awaitable<Errors\Result<DeleteBranchResult>>;
  public function DeleteDomainAssociation(DeleteDomainAssociationRequest) Awaitable<Errors\Result<DeleteDomainAssociationResult>>;
  public function DeleteJob(DeleteJobRequest) Awaitable<Errors\Result<DeleteJobResult>>;
  public function DeleteWebhook(DeleteWebhookRequest) Awaitable<Errors\Result<DeleteWebhookResult>>;
  public function GenerateAccessLogs(GenerateAccessLogsRequest) Awaitable<Errors\Result<GenerateAccessLogsResult>>;
  public function GetApp(GetAppRequest) Awaitable<Errors\Result<GetAppResult>>;
  public function GetArtifactUrl(GetArtifactUrlRequest) Awaitable<Errors\Result<GetArtifactUrlResult>>;
  public function GetBackendEnvironment(GetBackendEnvironmentRequest) Awaitable<Errors\Result<GetBackendEnvironmentResult>>;
  public function GetBranch(GetBranchRequest) Awaitable<Errors\Result<GetBranchResult>>;
  public function GetDomainAssociation(GetDomainAssociationRequest) Awaitable<Errors\Result<GetDomainAssociationResult>>;
  public function GetJob(GetJobRequest) Awaitable<Errors\Result<GetJobResult>>;
  public function GetWebhook(GetWebhookRequest) Awaitable<Errors\Result<GetWebhookResult>>;
  public function ListApps(ListAppsRequest) Awaitable<Errors\Result<ListAppsResult>>;
  public function ListArtifacts(ListArtifactsRequest) Awaitable<Errors\Result<ListArtifactsResult>>;
  public function ListBackendEnvironments(ListBackendEnvironmentsRequest) Awaitable<Errors\Result<ListBackendEnvironmentsResult>>;
  public function ListBranches(ListBranchesRequest) Awaitable<Errors\Result<ListBranchesResult>>;
  public function ListDomainAssociations(ListDomainAssociationsRequest) Awaitable<Errors\Result<ListDomainAssociationsResult>>;
  public function ListJobs(ListJobsRequest) Awaitable<Errors\Result<ListJobsResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListWebhooks(ListWebhooksRequest) Awaitable<Errors\Result<ListWebhooksResult>>;
  public function StartDeployment(StartDeploymentRequest) Awaitable<Errors\Result<StartDeploymentResult>>;
  public function StartJob(StartJobRequest) Awaitable<Errors\Result<StartJobResult>>;
  public function StopJob(StopJobRequest) Awaitable<Errors\Result<StopJobResult>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateApp(UpdateAppRequest) Awaitable<Errors\Result<UpdateAppResult>>;
  public function UpdateBranch(UpdateBranchRequest) Awaitable<Errors\Result<UpdateBranchResult>>;
  public function UpdateDomainAssociation(UpdateDomainAssociationRequest) Awaitable<Errors\Result<UpdateDomainAssociationResult>>;
  public function UpdateWebhook(UpdateWebhookRequest) Awaitable<Errors\Result<UpdateWebhookResult>>;
}

class AccessToken {
}

class ActiveJobId {
}

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
}

class AppArn {
}

class AppId {
}

class Apps {
}

class Artifact {
  public ArtifactFileName $artifact_file_name;
  public ArtifactId $artifact_id;
}

class ArtifactFileName {
}

class ArtifactId {
}

class ArtifactUrl {
}

class Artifacts {
}

class ArtifactsUrl {
}

class AssociatedResource {
}

class AssociatedResources {
}

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
}

class AutoBranchCreationPattern {
}

class AutoBranchCreationPatterns {
}

class BackendEnvironment {
  public BackendEnvironmentArn $backend_environment_arn;
  public CreateTime $create_time;
  public DeploymentArtifacts $deployment_artifacts;
  public EnvironmentName $environment_name;
  public StackName $stack_name;
  public UpdateTime $update_time;
}

class BackendEnvironmentArn {
}

class BackendEnvironments {
}

class BadRequestException {
  public ErrorMessage $message;
}

class BasicAuthCredentials {
}

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
}

class BranchArn {
}

class BranchName {
}

class Branches {
}

class BuildSpec {
}

class CertificateVerificationDNSRecord {
}

class Code {
}

class CommitId {
}

class CommitMessage {
}

class CommitTime {
}

class Condition {
}

class Context {
}

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
}

class CreateAppResult {
  public App $app;
}

class CreateBackendEnvironmentRequest {
  public AppId $app_id;
  public DeploymentArtifacts $deployment_artifacts;
  public EnvironmentName $environment_name;
  public StackName $stack_name;
}

class CreateBackendEnvironmentResult {
  public BackendEnvironment $backend_environment;
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
}

class CreateBranchResult {
  public Branch $branch;
}

class CreateDeploymentRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public FileMap $file_map;
}

class CreateDeploymentResult {
  public FileUploadUrls $file_upload_urls;
  public JobId $job_id;
  public UploadUrl $zip_upload_url;
}

class CreateDomainAssociationRequest {
  public AppId $app_id;
  public DomainName $domain_name;
  public EnableAutoSubDomain $enable_auto_sub_domain;
  public SubDomainSettings $sub_domain_settings;
}

class CreateDomainAssociationResult {
  public DomainAssociation $domain_association;
}

class CreateTime {
}

class CreateWebhookRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public Description $description;
}

class CreateWebhookResult {
  public Webhook $webhook;
}

class CustomDomain {
}

class CustomDomains {
}

class CustomRule {
  public Condition $condition;
  public Source $source;
  public Status $status;
  public Target $target;
}

class CustomRules {
}

class DNSRecord {
}

class DefaultDomain {
}

class DeleteAppRequest {
  public AppId $app_id;
}

class DeleteAppResult {
  public App $app;
}

class DeleteBackendEnvironmentRequest {
  public AppId $app_id;
  public EnvironmentName $environment_name;
}

class DeleteBackendEnvironmentResult {
  public BackendEnvironment $backend_environment;
}

class DeleteBranchRequest {
  public AppId $app_id;
  public BranchName $branch_name;
}

class DeleteBranchResult {
  public Branch $branch;
}

class DeleteDomainAssociationRequest {
  public AppId $app_id;
  public DomainName $domain_name;
}

class DeleteDomainAssociationResult {
  public DomainAssociation $domain_association;
}

class DeleteJobRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public JobId $job_id;
}

class DeleteJobResult {
  public JobSummary $job_summary;
}

class DeleteWebhookRequest {
  public WebhookId $webhook_id;
}

class DeleteWebhookResult {
  public Webhook $webhook;
}

class DependentServiceFailureException {
  public ErrorMessage $message;
}

class DeploymentArtifacts {
}

class Description {
}

class DisplayName {
}

class DomainAssociation {
  public CertificateVerificationDNSRecord $certificate_verification_dns_record;
  public DomainAssociationArn $domain_association_arn;
  public DomainName $domain_name;
  public DomainStatus $domain_status;
  public EnableAutoSubDomain $enable_auto_sub_domain;
  public StatusReason $status_reason;
  public SubDomains $sub_domains;
}

class DomainAssociationArn {
}

class DomainAssociations {
}

class DomainName {
}

class DomainPrefix {
}

class DomainStatus {
}

class EnableAutoBranchCreation {
}

class EnableAutoBuild {
}

class EnableAutoSubDomain {
}

class EnableBasicAuth {
}

class EnableBranchAutoBuild {
}

class EnableNotification {
}

class EnablePullRequestPreview {
}

class EndTime {
}

class EnvKey {
}

class EnvValue {
}

class EnvironmentName {
}

class EnvironmentVariables {
}

class ErrorMessage {
}

class FileMap {
}

class FileName {
}

class FileUploadUrls {
}

class Framework {
}

class GenerateAccessLogsRequest {
  public AppId $app_id;
  public DomainName $domain_name;
  public EndTime $end_time;
  public StartTime $start_time;
}

class GenerateAccessLogsResult {
  public LogUrl $log_url;
}

class GetAppRequest {
  public AppId $app_id;
}

class GetAppResult {
  public App $app;
}

class GetArtifactUrlRequest {
  public ArtifactId $artifact_id;
}

class GetArtifactUrlResult {
  public ArtifactId $artifact_id;
  public ArtifactUrl $artifact_url;
}

class GetBackendEnvironmentRequest {
  public AppId $app_id;
  public EnvironmentName $environment_name;
}

class GetBackendEnvironmentResult {
  public BackendEnvironment $backend_environment;
}

class GetBranchRequest {
  public AppId $app_id;
  public BranchName $branch_name;
}

class GetBranchResult {
  public Branch $branch;
}

class GetDomainAssociationRequest {
  public AppId $app_id;
  public DomainName $domain_name;
}

class GetDomainAssociationResult {
  public DomainAssociation $domain_association;
}

class GetJobRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public JobId $job_id;
}

class GetJobResult {
  public Job $job;
}

class GetWebhookRequest {
  public WebhookId $webhook_id;
}

class GetWebhookResult {
  public Webhook $webhook;
}

class InternalFailureException {
  public ErrorMessage $message;
}

class Job {
  public Steps $steps;
  public JobSummary $summary;
}

class JobArn {
}

class JobId {
}

class JobReason {
}

class JobStatus {
}

class JobSummaries {
}

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
}

class JobType {
}

class LastDeployTime {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListAppsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListAppsResult {
  public Apps $apps;
  public NextToken $next_token;
}

class ListArtifactsRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public JobId $job_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListArtifactsResult {
  public Artifacts $artifacts;
  public NextToken $next_token;
}

class ListBackendEnvironmentsRequest {
  public AppId $app_id;
  public EnvironmentName $environment_name;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListBackendEnvironmentsResult {
  public BackendEnvironments $backend_environments;
  public NextToken $next_token;
}

class ListBranchesRequest {
  public AppId $app_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListBranchesResult {
  public Branches $branches;
  public NextToken $next_token;
}

class ListDomainAssociationsRequest {
  public AppId $app_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDomainAssociationsResult {
  public DomainAssociations $domain_associations;
  public NextToken $next_token;
}

class ListJobsRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListJobsResult {
  public JobSummaries $job_summaries;
  public NextToken $next_token;
}

class ListTagsForResourceRequest {
  public ResourceArn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class ListWebhooksRequest {
  public AppId $app_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListWebhooksResult {
  public NextToken $next_token;
  public Webhooks $webhooks;
}

class LogUrl {
}

class MD5Hash {
}

class MaxResults {
}

class Name {
}

class NextToken {
}

class NotFoundException {
  public ErrorMessage $message;
}

class OauthToken {
}

class Platform {
}

class ProductionBranch {
  public BranchName $branch_name;
  public LastDeployTime $last_deploy_time;
  public Status $status;
  public ThumbnailUrl $thumbnail_url;
}

class PullRequestEnvironmentName {
}

class Repository {
}

class ResourceArn {
}

class ResourceNotFoundException {
  public Code $code;
  public ErrorMessage $message;
}

class Screenshots {
}

class ServiceRoleArn {
}

class Source {
}

class SourceUrl {
}

class StackName {
}

class Stage {
}

class StartDeploymentRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public JobId $job_id;
  public SourceUrl $source_url;
}

class StartDeploymentResult {
  public JobSummary $job_summary;
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
}

class StartJobResult {
  public JobSummary $job_summary;
}

class StartTime {
}

class Status {
}

class StatusReason {
}

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
}

class StepName {
}

class Steps {
}

class StopJobRequest {
  public AppId $app_id;
  public BranchName $branch_name;
  public JobId $job_id;
}

class StopJobResult {
  public JobSummary $job_summary;
}

class SubDomain {
  public DNSRecord $dns_record;
  public SubDomainSetting $sub_domain_setting;
  public Verified $verified;
}

class SubDomainSetting {
  public BranchName $branch_name;
  public DomainPrefix $prefix;
}

class SubDomainSettings {
}

class SubDomains {
}

class TTL {
}

class TagKey {
}

class TagKeyList {
}

class TagMap {
}

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagMap $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Target {
}

class TestArtifactsUrl {
}

class TestConfigUrl {
}

class ThumbnailName {
}

class ThumbnailUrl {
}

class TotalNumberOfJobs {
}

class UnauthorizedException {
  public ErrorMessage $message;
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
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
}

class UpdateAppResult {
  public App $app;
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
}

class UpdateBranchResult {
  public Branch $branch;
}

class UpdateDomainAssociationRequest {
  public AppId $app_id;
  public DomainName $domain_name;
  public EnableAutoSubDomain $enable_auto_sub_domain;
  public SubDomainSettings $sub_domain_settings;
}

class UpdateDomainAssociationResult {
  public DomainAssociation $domain_association;
}

class UpdateTime {
}

class UpdateWebhookRequest {
  public BranchName $branch_name;
  public Description $description;
  public WebhookId $webhook_id;
}

class UpdateWebhookResult {
  public Webhook $webhook;
}

class UploadUrl {
}

class Verified {
}

class Webhook {
  public BranchName $branch_name;
  public CreateTime $create_time;
  public Description $description;
  public UpdateTime $update_time;
  public WebhookArn $webhook_arn;
  public WebhookId $webhook_id;
  public WebhookUrl $webhook_url;
}

class WebhookArn {
}

class WebhookId {
}

class WebhookUrl {
}

class Webhooks {
}


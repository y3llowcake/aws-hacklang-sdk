<?hh // strict
namespace slack\aws\codebuild;

interface CodeBuild {
  public function BatchDeleteBuilds(BatchDeleteBuildsInput) Awaitable<Errors\Result<BatchDeleteBuildsOutput>>;
  public function BatchGetBuilds(BatchGetBuildsInput) Awaitable<Errors\Result<BatchGetBuildsOutput>>;
  public function BatchGetProjects(BatchGetProjectsInput) Awaitable<Errors\Result<BatchGetProjectsOutput>>;
  public function BatchGetReportGroups(BatchGetReportGroupsInput) Awaitable<Errors\Result<BatchGetReportGroupsOutput>>;
  public function BatchGetReports(BatchGetReportsInput) Awaitable<Errors\Result<BatchGetReportsOutput>>;
  public function CreateProject(CreateProjectInput) Awaitable<Errors\Result<CreateProjectOutput>>;
  public function CreateReportGroup(CreateReportGroupInput) Awaitable<Errors\Result<CreateReportGroupOutput>>;
  public function CreateWebhook(CreateWebhookInput) Awaitable<Errors\Result<CreateWebhookOutput>>;
  public function DeleteProject(DeleteProjectInput) Awaitable<Errors\Result<DeleteProjectOutput>>;
  public function DeleteReport(DeleteReportInput) Awaitable<Errors\Result<DeleteReportOutput>>;
  public function DeleteReportGroup(DeleteReportGroupInput) Awaitable<Errors\Result<DeleteReportGroupOutput>>;
  public function DeleteResourcePolicy(DeleteResourcePolicyInput) Awaitable<Errors\Result<DeleteResourcePolicyOutput>>;
  public function DeleteSourceCredentials(DeleteSourceCredentialsInput) Awaitable<Errors\Result<DeleteSourceCredentialsOutput>>;
  public function DeleteWebhook(DeleteWebhookInput) Awaitable<Errors\Result<DeleteWebhookOutput>>;
  public function DescribeTestCases(DescribeTestCasesInput) Awaitable<Errors\Result<DescribeTestCasesOutput>>;
  public function GetResourcePolicy(GetResourcePolicyInput) Awaitable<Errors\Result<GetResourcePolicyOutput>>;
  public function ImportSourceCredentials(ImportSourceCredentialsInput) Awaitable<Errors\Result<ImportSourceCredentialsOutput>>;
  public function InvalidateProjectCache(InvalidateProjectCacheInput) Awaitable<Errors\Result<InvalidateProjectCacheOutput>>;
  public function ListBuilds(ListBuildsInput) Awaitable<Errors\Result<ListBuildsOutput>>;
  public function ListBuildsForProject(ListBuildsForProjectInput) Awaitable<Errors\Result<ListBuildsForProjectOutput>>;
  public function ListCuratedEnvironmentImages(ListCuratedEnvironmentImagesInput) Awaitable<Errors\Result<ListCuratedEnvironmentImagesOutput>>;
  public function ListProjects(ListProjectsInput) Awaitable<Errors\Result<ListProjectsOutput>>;
  public function ListReportGroups(ListReportGroupsInput) Awaitable<Errors\Result<ListReportGroupsOutput>>;
  public function ListReports(ListReportsInput) Awaitable<Errors\Result<ListReportsOutput>>;
  public function ListReportsForReportGroup(ListReportsForReportGroupInput) Awaitable<Errors\Result<ListReportsForReportGroupOutput>>;
  public function ListSharedProjects(ListSharedProjectsInput) Awaitable<Errors\Result<ListSharedProjectsOutput>>;
  public function ListSharedReportGroups(ListSharedReportGroupsInput) Awaitable<Errors\Result<ListSharedReportGroupsOutput>>;
  public function ListSourceCredentials(ListSourceCredentialsInput) Awaitable<Errors\Result<ListSourceCredentialsOutput>>;
  public function PutResourcePolicy(PutResourcePolicyInput) Awaitable<Errors\Result<PutResourcePolicyOutput>>;
  public function StartBuild(StartBuildInput) Awaitable<Errors\Result<StartBuildOutput>>;
  public function StopBuild(StopBuildInput) Awaitable<Errors\Result<StopBuildOutput>>;
  public function UpdateProject(UpdateProjectInput) Awaitable<Errors\Result<UpdateProjectOutput>>;
  public function UpdateReportGroup(UpdateReportGroupInput) Awaitable<Errors\Result<UpdateReportGroupOutput>>;
  public function UpdateWebhook(UpdateWebhookInput) Awaitable<Errors\Result<UpdateWebhookOutput>>;
}

class AccountLimitExceededException {
}

class ArtifactNamespace {
}

class ArtifactPackaging {
}

class ArtifactsType {
}

class AuthType {
}

class BatchDeleteBuildsInput {
  public BuildIds $ids;
}

class BatchDeleteBuildsOutput {
  public BuildIds $builds_deleted;
  public BuildsNotDeleted $builds_not_deleted;
}

class BatchGetBuildsInput {
  public BuildIds $ids;
}

class BatchGetBuildsOutput {
  public Builds $builds;
  public BuildIds $builds_not_found;
}

class BatchGetProjectsInput {
  public ProjectNames $names;
}

class BatchGetProjectsOutput {
  public Projects $projects;
  public ProjectNames $projects_not_found;
}

class BatchGetReportGroupsInput {
  public ReportGroupArns $report_group_arns;
}

class BatchGetReportGroupsOutput {
  public ReportGroups $report_groups;
  public ReportGroupArns $report_groups_not_found;
}

class BatchGetReportsInput {
  public ReportArns $report_arns;
}

class BatchGetReportsOutput {
  public Reports $reports;
  public ReportArns $reports_not_found;
}

class Boolean {
}

class Build {
  public NonEmptyString $arn;
  public BuildArtifacts $artifacts;
  public boolean $build_complete;
  public WrapperLong $build_number;
  public StatusType $build_status;
  public ProjectCache $cache;
  public string $current_phase;
  public NonEmptyString $encryption_key;
  public Timestamp $end_time;
  public ProjectEnvironment $environment;
  public ExportedEnvironmentVariables $exported_environment_variables;
  public ProjectFileSystemLocations $file_system_locations;
  public NonEmptyString $id;
  public string $initiator;
  public LogsLocation $logs;
  public NetworkInterface $network_interface;
  public BuildPhases $phases;
  public NonEmptyString $project_name;
  public WrapperInt $queued_timeout_in_minutes;
  public BuildReportArns $report_arns;
  public NonEmptyString $resolved_source_version;
  public BuildArtifactsList $secondary_artifacts;
  public ProjectSecondarySourceVersions $secondary_source_versions;
  public ProjectSources $secondary_sources;
  public NonEmptyString $service_role;
  public ProjectSource $source;
  public NonEmptyString $source_version;
  public Timestamp $start_time;
  public WrapperInt $timeout_in_minutes;
  public VpcConfig $vpc_config;
}

class BuildArtifacts {
  public string $artifact_identifier;
  public WrapperBoolean $encryption_disabled;
  public string $location;
  public string $md_5_sum;
  public WrapperBoolean $override_artifact_name;
  public string $sha_256_sum;
}

class BuildArtifactsList {
}

class BuildIds {
}

class BuildNotDeleted {
  public NonEmptyString $id;
  public string $status_code;
}

class BuildPhase {
  public PhaseContexts $contexts;
  public WrapperLong $duration_in_seconds;
  public Timestamp $end_time;
  public StatusType $phase_status;
  public BuildPhaseType $phase_type;
  public Timestamp $start_time;
}

class BuildPhaseType {
}

class BuildPhases {
}

class BuildReportArns {
}

class Builds {
}

class BuildsNotDeleted {
}

class CacheMode {
}

class CacheType {
}

class CloudWatchLogsConfig {
  public string $group_name;
  public LogsConfigStatusType $status;
  public string $stream_name;
}

class ComputeType {
}

class CreateProjectInput {
  public ProjectArtifacts $artifacts;
  public WrapperBoolean $badge_enabled;
  public ProjectCache $cache;
  public ProjectDescription $description;
  public NonEmptyString $encryption_key;
  public ProjectEnvironment $environment;
  public ProjectFileSystemLocations $file_system_locations;
  public LogsConfig $logs_config;
  public ProjectName $name;
  public TimeOut $queued_timeout_in_minutes;
  public ProjectArtifactsList $secondary_artifacts;
  public ProjectSecondarySourceVersions $secondary_source_versions;
  public ProjectSources $secondary_sources;
  public NonEmptyString $service_role;
  public ProjectSource $source;
  public string $source_version;
  public TagList $tags;
  public TimeOut $timeout_in_minutes;
  public VpcConfig $vpc_config;
}

class CreateProjectOutput {
  public Project $project;
}

class CreateReportGroupInput {
  public ReportExportConfig $export_config;
  public ReportGroupName $name;
  public ReportType $type;
}

class CreateReportGroupOutput {
  public ReportGroup $report_group;
}

class CreateWebhookInput {
  public string $branch_filter;
  public FilterGroups $filter_groups;
  public ProjectName $project_name;
}

class CreateWebhookOutput {
  public Webhook $webhook;
}

class CredentialProviderType {
}

class DeleteProjectInput {
  public NonEmptyString $name;
}

class DeleteProjectOutput {
}

class DeleteReportGroupInput {
  public NonEmptyString $arn;
}

class DeleteReportGroupOutput {
}

class DeleteReportInput {
  public NonEmptyString $arn;
}

class DeleteReportOutput {
}

class DeleteResourcePolicyInput {
  public NonEmptyString $resource_arn;
}

class DeleteResourcePolicyOutput {
}

class DeleteSourceCredentialsInput {
  public NonEmptyString $arn;
}

class DeleteSourceCredentialsOutput {
  public NonEmptyString $arn;
}

class DeleteWebhookInput {
  public ProjectName $project_name;
}

class DeleteWebhookOutput {
}

class DescribeTestCasesInput {
  public TestCaseFilter $filter;
  public PageSize $max_results;
  public string $next_token;
  public string $report_arn;
}

class DescribeTestCasesOutput {
  public string $next_token;
  public TestCases $test_cases;
}

class EnvironmentImage {
  public string $description;
  public string $name;
  public ImageVersions $versions;
}

class EnvironmentImages {
}

class EnvironmentLanguage {
  public EnvironmentImages $images;
  public LanguageType $language;
}

class EnvironmentLanguages {
}

class EnvironmentPlatform {
  public EnvironmentLanguages $languages;
  public PlatformType $platform;
}

class EnvironmentPlatforms {
}

class EnvironmentType {
}

class EnvironmentVariable {
  public NonEmptyString $name;
  public EnvironmentVariableType $type;
  public string $value;
}

class EnvironmentVariableType {
}

class EnvironmentVariables {
}

class ExportedEnvironmentVariable {
  public NonEmptyString $name;
  public string $value;
}

class ExportedEnvironmentVariables {
}

class FileSystemType {
}

class FilterGroup {
}

class FilterGroups {
}

class GetResourcePolicyInput {
  public NonEmptyString $resource_arn;
}

class GetResourcePolicyOutput {
  public NonEmptyString $policy;
}

class GitCloneDepth {
}

class GitSubmodulesConfig {
  public WrapperBoolean $fetch_submodules;
}

class ImagePullCredentialsType {
}

class ImageVersions {
}

class ImportSourceCredentialsInput {
  public AuthType $auth_type;
  public ServerType $server_type;
  public WrapperBoolean $should_overwrite;
  public SensitiveNonEmptyString $token;
  public NonEmptyString $username;
}

class ImportSourceCredentialsOutput {
  public NonEmptyString $arn;
}

class InvalidInputException {
}

class InvalidateProjectCacheInput {
  public NonEmptyString $project_name;
}

class InvalidateProjectCacheOutput {
}

class KeyInput {
}

class LanguageType {
}

class ListBuildsForProjectInput {
  public string $next_token;
  public NonEmptyString $project_name;
  public SortOrderType $sort_order;
}

class ListBuildsForProjectOutput {
  public BuildIds $ids;
  public string $next_token;
}

class ListBuildsInput {
  public string $next_token;
  public SortOrderType $sort_order;
}

class ListBuildsOutput {
  public BuildIds $ids;
  public string $next_token;
}

class ListCuratedEnvironmentImagesInput {
}

class ListCuratedEnvironmentImagesOutput {
  public EnvironmentPlatforms $platforms;
}

class ListProjectsInput {
  public NonEmptyString $next_token;
  public ProjectSortByType $sort_by;
  public SortOrderType $sort_order;
}

class ListProjectsOutput {
  public string $next_token;
  public ProjectNames $projects;
}

class ListReportGroupsInput {
  public PageSize $max_results;
  public string $next_token;
  public ReportGroupSortByType $sort_by;
  public SortOrderType $sort_order;
}

class ListReportGroupsOutput {
  public string $next_token;
  public ReportGroupArns $report_groups;
}

class ListReportsForReportGroupInput {
  public ReportFilter $filter;
  public PageSize $max_results;
  public string $next_token;
  public string $report_group_arn;
  public SortOrderType $sort_order;
}

class ListReportsForReportGroupOutput {
  public string $next_token;
  public ReportArns $reports;
}

class ListReportsInput {
  public ReportFilter $filter;
  public PageSize $max_results;
  public string $next_token;
  public SortOrderType $sort_order;
}

class ListReportsOutput {
  public string $next_token;
  public ReportArns $reports;
}

class ListSharedProjectsInput {
  public PageSize $max_results;
  public NonEmptyString $next_token;
  public SharedResourceSortByType $sort_by;
  public SortOrderType $sort_order;
}

class ListSharedProjectsOutput {
  public string $next_token;
  public ProjectArns $projects;
}

class ListSharedReportGroupsInput {
  public PageSize $max_results;
  public string $next_token;
  public SharedResourceSortByType $sort_by;
  public SortOrderType $sort_order;
}

class ListSharedReportGroupsOutput {
  public string $next_token;
  public ReportGroupArns $report_groups;
}

class ListSourceCredentialsInput {
}

class ListSourceCredentialsOutput {
  public SourceCredentialsInfos $source_credentials_infos;
}

class LogsConfig {
  public CloudWatchLogsConfig $cloud_watch_logs;
  public S3LogsConfig $s_3_logs;
}

class LogsConfigStatusType {
}

class LogsLocation {
  public CloudWatchLogsConfig $cloud_watch_logs;
  public string $cloud_watch_logs_arn;
  public string $deep_link;
  public string $group_name;
  public string $s_3_deep_link;
  public S3LogsConfig $s_3_logs;
  public string $s_3_logs_arn;
  public string $stream_name;
}

class NetworkInterface {
  public NonEmptyString $network_interface_id;
  public NonEmptyString $subnet_id;
}

class NonEmptyString {
}

class OAuthProviderException {
}

class PageSize {
}

class PhaseContext {
  public string $message;
  public string $status_code;
}

class PhaseContexts {
}

class PlatformType {
}

class Project {
  public string $arn;
  public ProjectArtifacts $artifacts;
  public ProjectBadge $badge;
  public ProjectCache $cache;
  public Timestamp $created;
  public ProjectDescription $description;
  public NonEmptyString $encryption_key;
  public ProjectEnvironment $environment;
  public ProjectFileSystemLocations $file_system_locations;
  public Timestamp $last_modified;
  public LogsConfig $logs_config;
  public ProjectName $name;
  public TimeOut $queued_timeout_in_minutes;
  public ProjectArtifactsList $secondary_artifacts;
  public ProjectSecondarySourceVersions $secondary_source_versions;
  public ProjectSources $secondary_sources;
  public NonEmptyString $service_role;
  public ProjectSource $source;
  public string $source_version;
  public TagList $tags;
  public TimeOut $timeout_in_minutes;
  public VpcConfig $vpc_config;
  public Webhook $webhook;
}

class ProjectArns {
}

class ProjectArtifacts {
  public string $artifact_identifier;
  public WrapperBoolean $encryption_disabled;
  public string $location;
  public string $name;
  public ArtifactNamespace $namespace_type;
  public WrapperBoolean $override_artifact_name;
  public ArtifactPackaging $packaging;
  public string $path;
  public ArtifactsType $type;
}

class ProjectArtifactsList {
}

class ProjectBadge {
  public boolean $badge_enabled;
  public string $badge_request_url;
}

class ProjectCache {
  public string $location;
  public ProjectCacheModes $modes;
  public CacheType $type;
}

class ProjectCacheModes {
}

class ProjectDescription {
}

class ProjectEnvironment {
  public string $certificate;
  public ComputeType $compute_type;
  public EnvironmentVariables $environment_variables;
  public NonEmptyString $image;
  public ImagePullCredentialsType $image_pull_credentials_type;
  public WrapperBoolean $privileged_mode;
  public RegistryCredential $registry_credential;
  public EnvironmentType $type;
}

class ProjectFileSystemLocation {
  public string $identifier;
  public string $location;
  public string $mount_options;
  public string $mount_point;
  public FileSystemType $type;
}

class ProjectFileSystemLocations {
}

class ProjectName {
}

class ProjectNames {
}

class ProjectSecondarySourceVersions {
}

class ProjectSortByType {
}

class ProjectSource {
  public SourceAuth $auth;
  public string $buildspec;
  public GitCloneDepth $git_clone_depth;
  public GitSubmodulesConfig $git_submodules_config;
  public WrapperBoolean $insecure_ssl;
  public string $location;
  public WrapperBoolean $report_build_status;
  public string $source_identifier;
  public SourceType $type;
}

class ProjectSourceVersion {
  public string $source_identifier;
  public string $source_version;
}

class ProjectSources {
}

class Projects {
}

class PutResourcePolicyInput {
  public NonEmptyString $policy;
  public NonEmptyString $resource_arn;
}

class PutResourcePolicyOutput {
  public NonEmptyString $resource_arn;
}

class RegistryCredential {
  public NonEmptyString $credential;
  public CredentialProviderType $credential_provider;
}

class Report {
  public NonEmptyString $arn;
  public Timestamp $created;
  public string $execution_id;
  public Timestamp $expired;
  public ReportExportConfig $export_config;
  public string $name;
  public NonEmptyString $report_group_arn;
  public ReportStatusType $status;
  public TestReportSummary $test_summary;
  public WrapperBoolean $truncated;
  public ReportType $type;
}

class ReportArns {
}

class ReportExportConfig {
  public ReportExportConfigType $export_config_type;
  public S3ReportExportConfig $s_3_destination;
}

class ReportExportConfigType {
}

class ReportFilter {
  public ReportStatusType $status;
}

class ReportGroup {
  public NonEmptyString $arn;
  public Timestamp $created;
  public ReportExportConfig $export_config;
  public Timestamp $last_modified;
  public ReportGroupName $name;
  public ReportType $type;
}

class ReportGroupArns {
}

class ReportGroupName {
}

class ReportGroupSortByType {
}

class ReportGroups {
}

class ReportPackagingType {
}

class ReportStatusCounts {
}

class ReportStatusType {
}

class ReportType {
}

class Reports {
}

class ResourceAlreadyExistsException {
}

class ResourceNotFoundException {
}

class S3LogsConfig {
  public WrapperBoolean $encryption_disabled;
  public string $location;
  public LogsConfigStatusType $status;
}

class S3ReportExportConfig {
  public NonEmptyString $bucket;
  public WrapperBoolean $encryption_disabled;
  public NonEmptyString $encryption_key;
  public ReportPackagingType $packaging;
  public string $path;
}

class SecurityGroupIds {
}

class SensitiveNonEmptyString {
}

class ServerType {
}

class SharedResourceSortByType {
}

class SortOrderType {
}

class SourceAuth {
  public string $resource;
  public SourceAuthType $type;
}

class SourceAuthType {
}

class SourceCredentialsInfo {
  public NonEmptyString $arn;
  public AuthType $auth_type;
  public ServerType $server_type;
}

class SourceCredentialsInfos {
}

class SourceType {
}

class StartBuildInput {
  public ProjectArtifacts $artifacts_override;
  public string $buildspec_override;
  public ProjectCache $cache_override;
  public string $certificate_override;
  public ComputeType $compute_type_override;
  public NonEmptyString $encryption_key_override;
  public EnvironmentType $environment_type_override;
  public EnvironmentVariables $environment_variables_override;
  public GitCloneDepth $git_clone_depth_override;
  public GitSubmodulesConfig $git_submodules_config_override;
  public string $idempotency_token;
  public NonEmptyString $image_override;
  public ImagePullCredentialsType $image_pull_credentials_type_override;
  public WrapperBoolean $insecure_ssl_override;
  public LogsConfig $logs_config_override;
  public WrapperBoolean $privileged_mode_override;
  public NonEmptyString $project_name;
  public TimeOut $queued_timeout_in_minutes_override;
  public RegistryCredential $registry_credential_override;
  public WrapperBoolean $report_build_status_override;
  public ProjectArtifactsList $secondary_artifacts_override;
  public ProjectSources $secondary_sources_override;
  public ProjectSecondarySourceVersions $secondary_sources_version_override;
  public NonEmptyString $service_role_override;
  public SourceAuth $source_auth_override;
  public string $source_location_override;
  public SourceType $source_type_override;
  public string $source_version;
  public TimeOut $timeout_in_minutes_override;
}

class StartBuildOutput {
  public Build $build;
}

class StatusType {
}

class StopBuildInput {
  public NonEmptyString $id;
}

class StopBuildOutput {
  public Build $build;
}

class String {
}

class Subnets {
}

class Tag {
  public KeyInput $key;
  public ValueInput $value;
}

class TagList {
}

class TestCase {
  public WrapperLong $duration_in_nano_seconds;
  public Timestamp $expired;
  public string $message;
  public string $name;
  public string $prefix;
  public NonEmptyString $report_arn;
  public string $status;
  public string $test_raw_data_path;
}

class TestCaseFilter {
  public string $status;
}

class TestCases {
}

class TestReportSummary {
  public WrapperLong $duration_in_nano_seconds;
  public ReportStatusCounts $status_counts;
  public WrapperInt $total;
}

class TimeOut {
}

class Timestamp {
}

class UpdateProjectInput {
  public ProjectArtifacts $artifacts;
  public WrapperBoolean $badge_enabled;
  public ProjectCache $cache;
  public ProjectDescription $description;
  public NonEmptyString $encryption_key;
  public ProjectEnvironment $environment;
  public ProjectFileSystemLocations $file_system_locations;
  public LogsConfig $logs_config;
  public NonEmptyString $name;
  public TimeOut $queued_timeout_in_minutes;
  public ProjectArtifactsList $secondary_artifacts;
  public ProjectSecondarySourceVersions $secondary_source_versions;
  public ProjectSources $secondary_sources;
  public NonEmptyString $service_role;
  public ProjectSource $source;
  public string $source_version;
  public TagList $tags;
  public TimeOut $timeout_in_minutes;
  public VpcConfig $vpc_config;
}

class UpdateProjectOutput {
  public Project $project;
}

class UpdateReportGroupInput {
  public NonEmptyString $arn;
  public ReportExportConfig $export_config;
}

class UpdateReportGroupOutput {
  public ReportGroup $report_group;
}

class UpdateWebhookInput {
  public string $branch_filter;
  public FilterGroups $filter_groups;
  public ProjectName $project_name;
  public boolean $rotate_secret;
}

class UpdateWebhookOutput {
  public Webhook $webhook;
}

class ValueInput {
}

class VpcConfig {
  public SecurityGroupIds $security_group_ids;
  public Subnets $subnets;
  public NonEmptyString $vpc_id;
}

class Webhook {
  public string $branch_filter;
  public FilterGroups $filter_groups;
  public Timestamp $last_modified_secret;
  public NonEmptyString $payload_url;
  public NonEmptyString $secret;
  public NonEmptyString $url;
}

class WebhookFilter {
  public WrapperBoolean $exclude_matched_pattern;
  public string $pattern;
  public WebhookFilterType $type;
}

class WebhookFilterType {
}

class WrapperBoolean {
}

class WrapperInt {
}

class WrapperLong {
}


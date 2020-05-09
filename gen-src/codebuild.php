<?hh // strict
namespace slack\aws\codebuild;

interface CodeBuild {
  public function ListReports(ListReportsInput) Awaitable<Errors\Result<ListReportsOutput>>;
  public function BatchGetReportGroups(BatchGetReportGroupsInput) Awaitable<Errors\Result<BatchGetReportGroupsOutput>>;
  public function ListReportGroups(ListReportGroupsInput) Awaitable<Errors\Result<ListReportGroupsOutput>>;
  public function GetResourcePolicy(GetResourcePolicyInput) Awaitable<Errors\Result<GetResourcePolicyOutput>>;
  public function InvalidateProjectCache(InvalidateProjectCacheInput) Awaitable<Errors\Result<InvalidateProjectCacheOutput>>;
  public function ListSharedReportGroups(ListSharedReportGroupsInput) Awaitable<Errors\Result<ListSharedReportGroupsOutput>>;
  public function ListSourceCredentials(ListSourceCredentialsInput) Awaitable<Errors\Result<ListSourceCredentialsOutput>>;
  public function PutResourcePolicy(PutResourcePolicyInput) Awaitable<Errors\Result<PutResourcePolicyOutput>>;
  public function DeleteReport(DeleteReportInput) Awaitable<Errors\Result<DeleteReportOutput>>;
  public function DeleteReportGroup(DeleteReportGroupInput) Awaitable<Errors\Result<DeleteReportGroupOutput>>;
  public function UpdateProject(UpdateProjectInput) Awaitable<Errors\Result<UpdateProjectOutput>>;
  public function UpdateWebhook(UpdateWebhookInput) Awaitable<Errors\Result<UpdateWebhookOutput>>;
  public function DescribeTestCases(DescribeTestCasesInput) Awaitable<Errors\Result<DescribeTestCasesOutput>>;
  public function ListCuratedEnvironmentImages(ListCuratedEnvironmentImagesInput) Awaitable<Errors\Result<ListCuratedEnvironmentImagesOutput>>;
  public function StartBuild(StartBuildInput) Awaitable<Errors\Result<StartBuildOutput>>;
  public function UpdateReportGroup(UpdateReportGroupInput) Awaitable<Errors\Result<UpdateReportGroupOutput>>;
  public function DeleteProject(DeleteProjectInput) Awaitable<Errors\Result<DeleteProjectOutput>>;
  public function ListBuildsForProject(ListBuildsForProjectInput) Awaitable<Errors\Result<ListBuildsForProjectOutput>>;
  public function ImportSourceCredentials(ImportSourceCredentialsInput) Awaitable<Errors\Result<ImportSourceCredentialsOutput>>;
  public function ListReportsForReportGroup(ListReportsForReportGroupInput) Awaitable<Errors\Result<ListReportsForReportGroupOutput>>;
  public function ListSharedProjects(ListSharedProjectsInput) Awaitable<Errors\Result<ListSharedProjectsOutput>>;
  public function BatchDeleteBuilds(BatchDeleteBuildsInput) Awaitable<Errors\Result<BatchDeleteBuildsOutput>>;
  public function BatchGetReports(BatchGetReportsInput) Awaitable<Errors\Result<BatchGetReportsOutput>>;
  public function BatchGetProjects(BatchGetProjectsInput) Awaitable<Errors\Result<BatchGetProjectsOutput>>;
  public function StopBuild(StopBuildInput) Awaitable<Errors\Result<StopBuildOutput>>;
  public function CreateReportGroup(CreateReportGroupInput) Awaitable<Errors\Result<CreateReportGroupOutput>>;
  public function CreateWebhook(CreateWebhookInput) Awaitable<Errors\Result<CreateWebhookOutput>>;
  public function DeleteResourcePolicy(DeleteResourcePolicyInput) Awaitable<Errors\Result<DeleteResourcePolicyOutput>>;
  public function DeleteSourceCredentials(DeleteSourceCredentialsInput) Awaitable<Errors\Result<DeleteSourceCredentialsOutput>>;
  public function DeleteWebhook(DeleteWebhookInput) Awaitable<Errors\Result<DeleteWebhookOutput>>;
  public function ListBuilds(ListBuildsInput) Awaitable<Errors\Result<ListBuildsOutput>>;
  public function BatchGetBuilds(BatchGetBuildsInput) Awaitable<Errors\Result<BatchGetBuildsOutput>>;
  public function CreateProject(CreateProjectInput) Awaitable<Errors\Result<CreateProjectOutput>>;
  public function ListProjects(ListProjectsInput) Awaitable<Errors\Result<ListProjectsOutput>>;
}

class BatchDeleteBuildsInput {
  public BuildIds $ids;
}

class CreateProjectInput {
  public ProjectSecondarySourceVersions $secondary_source_versions;
  public NonEmptyString $encryption_key;
  public VpcConfig $vpc_config;
  public LogsConfig $logs_config;
  public ProjectFileSystemLocations $file_system_locations;
  public ProjectDescription $description;
  public ProjectSource $source;
  public string $source_version;
  public ProjectArtifactsList $secondary_artifacts;
  public WrapperBoolean $badge_enabled;
  public ProjectCache $cache;
  public TimeOut $queued_timeout_in_minutes;
  public ProjectName $name;
  public ProjectSources $secondary_sources;
  public ProjectArtifacts $artifacts;
  public ProjectEnvironment $environment;
  public NonEmptyString $service_role;
  public TimeOut $timeout_in_minutes;
  public TagList $tags;
}

class ListSharedProjectsInput {
  public SortOrderType $sort_order;
  public PageSize $max_results;
  public NonEmptyString $next_token;
  public SharedResourceSortByType $sort_by;
}

class OAuthProviderException {
}

class ProjectSourceVersion {
  public string $source_version;
  public string $source_identifier;
}

class UpdateProjectOutput {
  public Project $project;
}

class WrapperInt {
}

class ProjectSources {
}

class String {
}

class BuildReportArns {
}

class CacheMode {
}

class CacheType {
}

class EnvironmentPlatforms {
}

class ReportStatusType {
}

class CreateWebhookOutput {
  public Webhook $webhook;
}

class EnvironmentPlatform {
  public PlatformType $platform;
  public EnvironmentLanguages $languages;
}

class SourceAuth {
  public SourceAuthType $type;
  public string $resource;
}

class SourceCredentialsInfos {
}

class StatusType {
}

class TestCaseFilter {
  public string $status;
}

class BatchGetReportGroupsInput {
  public ReportGroupArns $report_group_arns;
}

class DeleteProjectInput {
  public NonEmptyString $name;
}

class KeyInput {
}

class LanguageType {
}

class ProjectFileSystemLocations {
}

class CredentialProviderType {
}

class InvalidInputException {
}

class ListBuildsOutput {
  public BuildIds $ids;
  public string $next_token;
}

class ProjectBadge {
  public boolean $badge_enabled;
  public string $badge_request_url;
}

class ProjectEnvironment {
  public NonEmptyString $image;
  public ComputeType $compute_type;
  public EnvironmentVariables $environment_variables;
  public WrapperBoolean $privileged_mode;
  public string $certificate;
  public RegistryCredential $registry_credential;
  public ImagePullCredentialsType $image_pull_credentials_type;
  public EnvironmentType $type;
}

class BatchGetReportsInput {
  public ReportArns $report_arns;
}

class BuildPhases {
}

class EnvironmentLanguages {
}

class ProjectArns {
}

class StartBuildInput {
  public ProjectSources $secondary_sources_override;
  public string $source_location_override;
  public EnvironmentType $environment_type_override;
  public TimeOut $queued_timeout_in_minutes_override;
  public ProjectArtifactsList $secondary_artifacts_override;
  public EnvironmentVariables $environment_variables_override;
  public GitSubmodulesConfig $git_submodules_config_override;
  public string $idempotency_token;
  public NonEmptyString $project_name;
  public string $source_version;
  public NonEmptyString $image_override;
  public ImagePullCredentialsType $image_pull_credentials_type_override;
  public NonEmptyString $encryption_key_override;
  public RegistryCredential $registry_credential_override;
  public ProjectSecondarySourceVersions $secondary_sources_version_override;
  public SourceType $source_type_override;
  public string $certificate_override;
  public ProjectCache $cache_override;
  public NonEmptyString $service_role_override;
  public TimeOut $timeout_in_minutes_override;
  public ProjectArtifacts $artifacts_override;
  public WrapperBoolean $insecure_ssl_override;
  public WrapperBoolean $report_build_status_override;
  public ComputeType $compute_type_override;
  public WrapperBoolean $privileged_mode_override;
  public SourceAuth $source_auth_override;
  public GitCloneDepth $git_clone_depth_override;
  public string $buildspec_override;
  public LogsConfig $logs_config_override;
}

class Webhook {
  public NonEmptyString $url;
  public NonEmptyString $payload_url;
  public NonEmptyString $secret;
  public string $branch_filter;
  public FilterGroups $filter_groups;
  public Timestamp $last_modified_secret;
}

class WebhookFilterType {
}

class Boolean {
}

class PageSize {
}

class ProjectCache {
  public CacheType $type;
  public string $location;
  public ProjectCacheModes $modes;
}

class ReportStatusCounts {
}

class StopBuildOutput {
  public Build $build;
}

class GitCloneDepth {
}

class ImageVersions {
}

class SourceType {
}

class Tag {
  public KeyInput $key;
  public ValueInput $value;
}

class WebhookFilter {
  public WebhookFilterType $type;
  public string $pattern;
  public WrapperBoolean $exclude_matched_pattern;
}

class BatchGetBuildsInput {
  public BuildIds $ids;
}

class ListProjectsOutput {
  public string $next_token;
  public ProjectNames $projects;
}

class ListReportsForReportGroupInput {
  public string $report_group_arn;
  public string $next_token;
  public SortOrderType $sort_order;
  public PageSize $max_results;
  public ReportFilter $filter;
}

class ListReportsInput {
  public PageSize $max_results;
  public ReportFilter $filter;
  public SortOrderType $sort_order;
  public string $next_token;
}

class ListSharedProjectsOutput {
  public ProjectArns $projects;
  public string $next_token;
}

class PlatformType {
}

class ProjectName {
}

class ReportGroupArns {
}

class TestCase {
  public string $status;
  public WrapperLong $duration_in_nano_seconds;
  public string $message;
  public Timestamp $expired;
  public NonEmptyString $report_arn;
  public string $test_raw_data_path;
  public string $prefix;
  public string $name;
}

class ImportSourceCredentialsInput {
  public NonEmptyString $username;
  public SensitiveNonEmptyString $token;
  public ServerType $server_type;
  public AuthType $auth_type;
  public WrapperBoolean $should_overwrite;
}

class ListSourceCredentialsInput {
}

class S3LogsConfig {
  public string $location;
  public WrapperBoolean $encryption_disabled;
  public LogsConfigStatusType $status;
}

class SortOrderType {
}

class Timestamp {
}

class BuildArtifacts {
  public string $md_5_sum;
  public WrapperBoolean $override_artifact_name;
  public WrapperBoolean $encryption_disabled;
  public string $artifact_identifier;
  public string $location;
  public string $sha_256_sum;
}

class BuildPhase {
  public StatusType $phase_status;
  public Timestamp $start_time;
  public Timestamp $end_time;
  public WrapperLong $duration_in_seconds;
  public PhaseContexts $contexts;
  public BuildPhaseType $phase_type;
}

class ProjectCacheModes {
}

class SourceAuthType {
}

class DeleteProjectOutput {
}

class ProjectArtifactsList {
}

class RegistryCredential {
  public NonEmptyString $credential;
  public CredentialProviderType $credential_provider;
}

class ReportType {
}

class StartBuildOutput {
  public Build $build;
}

class UpdateReportGroupOutput {
  public ReportGroup $report_group;
}

class BatchGetProjectsInput {
  public ProjectNames $names;
}

class BatchGetReportGroupsOutput {
  public ReportGroups $report_groups;
  public ReportGroupArns $report_groups_not_found;
}

class CreateReportGroupInput {
  public ReportGroupName $name;
  public ReportType $type;
  public ReportExportConfig $export_config;
}

class CreateWebhookInput {
  public ProjectName $project_name;
  public string $branch_filter;
  public FilterGroups $filter_groups;
}

class DeleteResourcePolicyOutput {
}

class InvalidateProjectCacheInput {
  public NonEmptyString $project_name;
}

class Project {
  public ProjectName $name;
  public ProjectSources $secondary_sources;
  public TimeOut $timeout_in_minutes;
  public TimeOut $queued_timeout_in_minutes;
  public Timestamp $last_modified;
  public LogsConfig $logs_config;
  public string $arn;
  public ProjectCache $cache;
  public Webhook $webhook;
  public VpcConfig $vpc_config;
  public ProjectFileSystemLocations $file_system_locations;
  public TagList $tags;
  public ProjectDescription $description;
  public ProjectSource $source;
  public ProjectSecondarySourceVersions $secondary_source_versions;
  public ProjectArtifacts $artifacts;
  public ProjectEnvironment $environment;
  public NonEmptyString $service_role;
  public NonEmptyString $encryption_key;
  public ProjectBadge $badge;
  public string $source_version;
  public ProjectArtifactsList $secondary_artifacts;
  public Timestamp $created;
}

class ServerType {
}

class TestCases {
}

class UpdateWebhookInput {
  public ProjectName $project_name;
  public string $branch_filter;
  public boolean $rotate_secret;
  public FilterGroups $filter_groups;
}

class ExportedEnvironmentVariables {
}

class ImagePullCredentialsType {
}

class PhaseContexts {
}

class ProjectArtifacts {
  public ArtifactPackaging $packaging;
  public WrapperBoolean $encryption_disabled;
  public string $artifact_identifier;
  public ArtifactsType $type;
  public string $location;
  public string $path;
  public ArtifactNamespace $namespace_type;
  public string $name;
  public WrapperBoolean $override_artifact_name;
}

class ProjectDescription {
}

class ReportGroupName {
}

class SharedResourceSortByType {
}

class TestReportSummary {
  public WrapperInt $total;
  public ReportStatusCounts $status_counts;
  public WrapperLong $duration_in_nano_seconds;
}

class DeleteSourceCredentialsOutput {
  public NonEmptyString $arn;
}

class LogsConfigStatusType {
}

class PhaseContext {
  public string $status_code;
  public string $message;
}

class ProjectFileSystemLocation {
  public string $identifier;
  public string $mount_options;
  public FileSystemType $type;
  public string $location;
  public string $mount_point;
}

class S3ReportExportConfig {
  public NonEmptyString $bucket;
  public string $path;
  public ReportPackagingType $packaging;
  public NonEmptyString $encryption_key;
  public WrapperBoolean $encryption_disabled;
}

class TimeOut {
}

class BatchDeleteBuildsOutput {
  public BuildIds $builds_deleted;
  public BuildsNotDeleted $builds_not_deleted;
}

class Build {
  public BuildPhases $phases;
  public WrapperInt $queued_timeout_in_minutes;
  public boolean $build_complete;
  public ExportedEnvironmentVariables $exported_environment_variables;
  public WrapperLong $build_number;
  public Timestamp $start_time;
  public string $current_phase;
  public Timestamp $end_time;
  public string $initiator;
  public NonEmptyString $encryption_key;
  public StatusType $build_status;
  public ProjectSecondarySourceVersions $secondary_source_versions;
  public ProjectSource $source;
  public ProjectSources $secondary_sources;
  public BuildArtifacts $artifacts;
  public NonEmptyString $service_role;
  public VpcConfig $vpc_config;
  public NonEmptyString $resolved_source_version;
  public ProjectCache $cache;
  public ProjectEnvironment $environment;
  public NonEmptyString $project_name;
  public BuildArtifactsList $secondary_artifacts;
  public LogsLocation $logs;
  public WrapperInt $timeout_in_minutes;
  public NetworkInterface $network_interface;
  public NonEmptyString $id;
  public NonEmptyString $arn;
  public NonEmptyString $source_version;
  public BuildReportArns $report_arns;
  public ProjectFileSystemLocations $file_system_locations;
}

class BuildIds {
}

class BuildsNotDeleted {
}

class EnvironmentImages {
}

class FileSystemType {
}

class InvalidateProjectCacheOutput {
}

class BatchGetProjectsOutput {
  public Projects $projects;
  public ProjectNames $projects_not_found;
}

class Builds {
}

class EnvironmentLanguage {
  public LanguageType $language;
  public EnvironmentImages $images;
}

class ListBuildsInput {
  public SortOrderType $sort_order;
  public string $next_token;
}

class ListReportsOutput {
  public string $next_token;
  public ReportArns $reports;
}

class TagList {
}

class BuildNotDeleted {
  public NonEmptyString $id;
  public string $status_code;
}

class EnvironmentVariableType {
}

class ListBuildsForProjectInput {
  public NonEmptyString $project_name;
  public SortOrderType $sort_order;
  public string $next_token;
}

class LogsConfig {
  public CloudWatchLogsConfig $cloud_watch_logs;
  public S3LogsConfig $s_3_logs;
}

class LogsLocation {
  public string $stream_name;
  public string $deep_link;
  public string $s_3_deep_link;
  public string $cloud_watch_logs_arn;
  public string $s_3_logs_arn;
  public CloudWatchLogsConfig $cloud_watch_logs;
  public S3LogsConfig $s_3_logs;
  public string $group_name;
}

class UpdateProjectInput {
  public TimeOut $timeout_in_minutes;
  public TimeOut $queued_timeout_in_minutes;
  public NonEmptyString $encryption_key;
  public VpcConfig $vpc_config;
  public LogsConfig $logs_config;
  public ProjectArtifacts $artifacts;
  public NonEmptyString $service_role;
  public ProjectEnvironment $environment;
  public ProjectDescription $description;
  public ProjectCache $cache;
  public ProjectArtifactsList $secondary_artifacts;
  public TagList $tags;
  public WrapperBoolean $badge_enabled;
  public ProjectFileSystemLocations $file_system_locations;
  public NonEmptyString $name;
  public ProjectSources $secondary_sources;
  public ProjectSecondarySourceVersions $secondary_source_versions;
  public ProjectSource $source;
  public string $source_version;
}

class BuildPhaseType {
}

class DeleteReportGroupOutput {
}

class DeleteWebhookInput {
  public ProjectName $project_name;
}

class ReportExportConfig {
  public ReportExportConfigType $export_config_type;
  public S3ReportExportConfig $s_3_destination;
}

class BatchGetReportsOutput {
  public Reports $reports;
  public ReportArns $reports_not_found;
}

class EnvironmentVariables {
}

class ArtifactsType {
}

class BatchGetBuildsOutput {
  public Builds $builds;
  public BuildIds $builds_not_found;
}

class FilterGroup {
}

class ProjectNames {
}

class AccountLimitExceededException {
}

class EnvironmentType {
}

class ExportedEnvironmentVariable {
  public string $value;
  public NonEmptyString $name;
}

class ListCuratedEnvironmentImagesInput {
}

class Report {
  public Timestamp $created;
  public Timestamp $expired;
  public WrapperBoolean $truncated;
  public NonEmptyString $arn;
  public ReportType $type;
  public NonEmptyString $report_group_arn;
  public string $execution_id;
  public ReportStatusType $status;
  public TestReportSummary $test_summary;
  public string $name;
  public ReportExportConfig $export_config;
}

class ReportFilter {
  public ReportStatusType $status;
}

class BuildArtifactsList {
}

class ComputeType {
}

class DeleteReportGroupInput {
  public NonEmptyString $arn;
}

class Reports {
}

class SourceCredentialsInfo {
  public NonEmptyString $arn;
  public ServerType $server_type;
  public AuthType $auth_type;
}

class ArtifactPackaging {
}

class CreateReportGroupOutput {
  public ReportGroup $report_group;
}

class NetworkInterface {
  public NonEmptyString $subnet_id;
  public NonEmptyString $network_interface_id;
}

class ReportGroup {
  public ReportExportConfig $export_config;
  public Timestamp $created;
  public Timestamp $last_modified;
  public NonEmptyString $arn;
  public ReportGroupName $name;
  public ReportType $type;
}

class ResourceNotFoundException {
}

class UpdateReportGroupInput {
  public NonEmptyString $arn;
  public ReportExportConfig $export_config;
}

class AuthType {
}

class DeleteReportInput {
  public NonEmptyString $arn;
}

class DeleteResourcePolicyInput {
  public NonEmptyString $resource_arn;
}

class DescribeTestCasesInput {
  public string $report_arn;
  public string $next_token;
  public PageSize $max_results;
  public TestCaseFilter $filter;
}

class GitSubmodulesConfig {
  public WrapperBoolean $fetch_submodules;
}

class ListReportGroupsOutput {
  public ReportGroupArns $report_groups;
  public string $next_token;
}

class ListSourceCredentialsOutput {
  public SourceCredentialsInfos $source_credentials_infos;
}

class PutResourcePolicyOutput {
  public NonEmptyString $resource_arn;
}

class ReportArns {
}

class ValueInput {
}

class CloudWatchLogsConfig {
  public LogsConfigStatusType $status;
  public string $group_name;
  public string $stream_name;
}

class DeleteWebhookOutput {
}

class ListReportsForReportGroupOutput {
  public string $next_token;
  public ReportArns $reports;
}

class ListSharedReportGroupsOutput {
  public ReportGroupArns $report_groups;
  public string $next_token;
}

class ReportExportConfigType {
}

class ReportGroupSortByType {
}

class DeleteReportOutput {
}

class PutResourcePolicyInput {
  public NonEmptyString $policy;
  public NonEmptyString $resource_arn;
}

class VpcConfig {
  public NonEmptyString $vpc_id;
  public Subnets $subnets;
  public SecurityGroupIds $security_group_ids;
}

class ArtifactNamespace {
}

class DeleteSourceCredentialsInput {
  public NonEmptyString $arn;
}

class EnvironmentVariable {
  public NonEmptyString $name;
  public string $value;
  public EnvironmentVariableType $type;
}

class ListProjectsInput {
  public SortOrderType $sort_order;
  public NonEmptyString $next_token;
  public ProjectSortByType $sort_by;
}

class ListReportGroupsInput {
  public SortOrderType $sort_order;
  public ReportGroupSortByType $sort_by;
  public string $next_token;
  public PageSize $max_results;
}

class ProjectSecondarySourceVersions {
}

class ProjectSource {
  public string $buildspec;
  public SourceAuth $auth;
  public WrapperBoolean $report_build_status;
  public SourceType $type;
  public GitCloneDepth $git_clone_depth;
  public GitSubmodulesConfig $git_submodules_config;
  public WrapperBoolean $insecure_ssl;
  public string $source_identifier;
  public string $location;
}

class ReportPackagingType {
}

class UpdateWebhookOutput {
  public Webhook $webhook;
}

class WrapperLong {
}

class CreateProjectOutput {
  public Project $project;
}

class EnvironmentImage {
  public string $description;
  public ImageVersions $versions;
  public string $name;
}

class GetResourcePolicyInput {
  public NonEmptyString $resource_arn;
}

class ListCuratedEnvironmentImagesOutput {
  public EnvironmentPlatforms $platforms;
}

class NonEmptyString {
}

class StopBuildInput {
  public NonEmptyString $id;
}

class Subnets {
}

class WrapperBoolean {
}

class FilterGroups {
}

class ListBuildsForProjectOutput {
  public BuildIds $ids;
  public string $next_token;
}

class ReportGroups {
}

class ResourceAlreadyExistsException {
}

class SecurityGroupIds {
}

class SensitiveNonEmptyString {
}

class DescribeTestCasesOutput {
  public string $next_token;
  public TestCases $test_cases;
}

class GetResourcePolicyOutput {
  public NonEmptyString $policy;
}

class ImportSourceCredentialsOutput {
  public NonEmptyString $arn;
}

class ListSharedReportGroupsInput {
  public string $next_token;
  public PageSize $max_results;
  public SortOrderType $sort_order;
  public SharedResourceSortByType $sort_by;
}

class ProjectSortByType {
}

class Projects {
}


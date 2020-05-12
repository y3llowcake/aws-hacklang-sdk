<?hh // strict
namespace slack\aws\codebuild;

interface CodeBuild {
  public function BatchDeleteBuilds(BatchDeleteBuildsInput $in): Awaitable<\Errors\Result<BatchDeleteBuildsOutput>>;
  public function BatchGetBuilds(BatchGetBuildsInput $in): Awaitable<\Errors\Result<BatchGetBuildsOutput>>;
  public function BatchGetProjects(BatchGetProjectsInput $in): Awaitable<\Errors\Result<BatchGetProjectsOutput>>;
  public function BatchGetReportGroups(BatchGetReportGroupsInput $in): Awaitable<\Errors\Result<BatchGetReportGroupsOutput>>;
  public function BatchGetReports(BatchGetReportsInput $in): Awaitable<\Errors\Result<BatchGetReportsOutput>>;
  public function CreateProject(CreateProjectInput $in): Awaitable<\Errors\Result<CreateProjectOutput>>;
  public function CreateReportGroup(CreateReportGroupInput $in): Awaitable<\Errors\Result<CreateReportGroupOutput>>;
  public function CreateWebhook(CreateWebhookInput $in): Awaitable<\Errors\Result<CreateWebhookOutput>>;
  public function DeleteProject(DeleteProjectInput $in): Awaitable<\Errors\Result<DeleteProjectOutput>>;
  public function DeleteReport(DeleteReportInput $in): Awaitable<\Errors\Result<DeleteReportOutput>>;
  public function DeleteReportGroup(DeleteReportGroupInput $in): Awaitable<\Errors\Result<DeleteReportGroupOutput>>;
  public function DeleteResourcePolicy(DeleteResourcePolicyInput $in): Awaitable<\Errors\Result<DeleteResourcePolicyOutput>>;
  public function DeleteSourceCredentials(DeleteSourceCredentialsInput $in): Awaitable<\Errors\Result<DeleteSourceCredentialsOutput>>;
  public function DeleteWebhook(DeleteWebhookInput $in): Awaitable<\Errors\Result<DeleteWebhookOutput>>;
  public function DescribeTestCases(DescribeTestCasesInput $in): Awaitable<\Errors\Result<DescribeTestCasesOutput>>;
  public function GetResourcePolicy(GetResourcePolicyInput $in): Awaitable<\Errors\Result<GetResourcePolicyOutput>>;
  public function ImportSourceCredentials(ImportSourceCredentialsInput $in): Awaitable<\Errors\Result<ImportSourceCredentialsOutput>>;
  public function InvalidateProjectCache(InvalidateProjectCacheInput $in): Awaitable<\Errors\Result<InvalidateProjectCacheOutput>>;
  public function ListBuilds(ListBuildsInput $in): Awaitable<\Errors\Result<ListBuildsOutput>>;
  public function ListBuildsForProject(ListBuildsForProjectInput $in): Awaitable<\Errors\Result<ListBuildsForProjectOutput>>;
  public function ListCuratedEnvironmentImages(ListCuratedEnvironmentImagesInput $in): Awaitable<\Errors\Result<ListCuratedEnvironmentImagesOutput>>;
  public function ListProjects(ListProjectsInput $in): Awaitable<\Errors\Result<ListProjectsOutput>>;
  public function ListReportGroups(ListReportGroupsInput $in): Awaitable<\Errors\Result<ListReportGroupsOutput>>;
  public function ListReports(ListReportsInput $in): Awaitable<\Errors\Result<ListReportsOutput>>;
  public function ListReportsForReportGroup(ListReportsForReportGroupInput $in): Awaitable<\Errors\Result<ListReportsForReportGroupOutput>>;
  public function ListSharedProjects(ListSharedProjectsInput $in): Awaitable<\Errors\Result<ListSharedProjectsOutput>>;
  public function ListSharedReportGroups(ListSharedReportGroupsInput $in): Awaitable<\Errors\Result<ListSharedReportGroupsOutput>>;
  public function ListSourceCredentials(ListSourceCredentialsInput $in): Awaitable<\Errors\Result<ListSourceCredentialsOutput>>;
  public function PutResourcePolicy(PutResourcePolicyInput $in): Awaitable<\Errors\Result<PutResourcePolicyOutput>>;
  public function StartBuild(StartBuildInput $in): Awaitable<\Errors\Result<StartBuildOutput>>;
  public function StopBuild(StopBuildInput $in): Awaitable<\Errors\Result<StopBuildOutput>>;
  public function UpdateProject(UpdateProjectInput $in): Awaitable<\Errors\Result<UpdateProjectOutput>>;
  public function UpdateReportGroup(UpdateReportGroupInput $in): Awaitable<\Errors\Result<UpdateReportGroupOutput>>;
  public function UpdateWebhook(UpdateWebhookInput $in): Awaitable<\Errors\Result<UpdateWebhookOutput>>;
}

class AccountLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ArtifactNamespace = string;

type ArtifactPackaging = string;

type ArtifactsType = string;

type AuthType = string;

class BatchDeleteBuildsInput {
  public ?BuildIds $ids;

  public function __construct(shape(
    ?'ids' => ?BuildIds,
  ) $s = shape()) {
    $this->ids = $s['ids'] ?? vec[];
  }
}

class BatchDeleteBuildsOutput {
  public ?BuildIds $builds_deleted;
  public ?BuildsNotDeleted $builds_not_deleted;

  public function __construct(shape(
    ?'builds_deleted' => ?BuildIds,
    ?'builds_not_deleted' => ?BuildsNotDeleted,
  ) $s = shape()) {
    $this->builds_deleted = $s['builds_deleted'] ?? vec[];
    $this->builds_not_deleted = $s['builds_not_deleted'] ?? vec[];
  }
}

class BatchGetBuildsInput {
  public ?BuildIds $ids;

  public function __construct(shape(
    ?'ids' => ?BuildIds,
  ) $s = shape()) {
    $this->ids = $s['ids'] ?? vec[];
  }
}

class BatchGetBuildsOutput {
  public ?Builds $builds;
  public ?BuildIds $builds_not_found;

  public function __construct(shape(
    ?'builds' => ?Builds,
    ?'builds_not_found' => ?BuildIds,
  ) $s = shape()) {
    $this->builds = $s['builds'] ?? vec[];
    $this->builds_not_found = $s['builds_not_found'] ?? vec[];
  }
}

class BatchGetProjectsInput {
  public ?ProjectNames $names;

  public function __construct(shape(
    ?'names' => ?ProjectNames,
  ) $s = shape()) {
    $this->names = $s['names'] ?? vec[];
  }
}

class BatchGetProjectsOutput {
  public ?Projects $projects;
  public ?ProjectNames $projects_not_found;

  public function __construct(shape(
    ?'projects' => ?Projects,
    ?'projects_not_found' => ?ProjectNames,
  ) $s = shape()) {
    $this->projects = $s['projects'] ?? vec[];
    $this->projects_not_found = $s['projects_not_found'] ?? vec[];
  }
}

class BatchGetReportGroupsInput {
  public ?ReportGroupArns $report_group_arns;

  public function __construct(shape(
    ?'report_group_arns' => ?ReportGroupArns,
  ) $s = shape()) {
    $this->report_group_arns = $s['report_group_arns'] ?? vec[];
  }
}

class BatchGetReportGroupsOutput {
  public ?ReportGroups $report_groups;
  public ?ReportGroupArns $report_groups_not_found;

  public function __construct(shape(
    ?'report_groups' => ?ReportGroups,
    ?'report_groups_not_found' => ?ReportGroupArns,
  ) $s = shape()) {
    $this->report_groups = $s['report_groups'] ?? vec[];
    $this->report_groups_not_found = $s['report_groups_not_found'] ?? vec[];
  }
}

class BatchGetReportsInput {
  public ?ReportArns $report_arns;

  public function __construct(shape(
    ?'report_arns' => ?ReportArns,
  ) $s = shape()) {
    $this->report_arns = $s['report_arns'] ?? vec[];
  }
}

class BatchGetReportsOutput {
  public ?Reports $reports;
  public ?ReportArns $reports_not_found;

  public function __construct(shape(
    ?'reports' => ?Reports,
    ?'reports_not_found' => ?ReportArns,
  ) $s = shape()) {
    $this->reports = $s['reports'] ?? vec[];
    $this->reports_not_found = $s['reports_not_found'] ?? vec[];
  }
}

type Boolean = bool;

class Build {
  public ?NonEmptyString $arn;
  public ?BuildArtifacts $artifacts;
  public bool $build_complete;
  public ?WrapperLong $build_number;
  public ?StatusType $build_status;
  public ?ProjectCache $cache;
  public string $current_phase;
  public ?NonEmptyString $encryption_key;
  public ?Timestamp $end_time;
  public ?ProjectEnvironment $environment;
  public ?ExportedEnvironmentVariables $exported_environment_variables;
  public ?ProjectFileSystemLocations $file_system_locations;
  public ?NonEmptyString $id;
  public string $initiator;
  public ?LogsLocation $logs;
  public ?NetworkInterface $network_interface;
  public ?BuildPhases $phases;
  public ?NonEmptyString $project_name;
  public ?WrapperInt $queued_timeout_in_minutes;
  public ?BuildReportArns $report_arns;
  public ?NonEmptyString $resolved_source_version;
  public ?BuildArtifactsList $secondary_artifacts;
  public ?ProjectSecondarySourceVersions $secondary_source_versions;
  public ?ProjectSources $secondary_sources;
  public ?NonEmptyString $service_role;
  public ?ProjectSource $source;
  public ?NonEmptyString $source_version;
  public ?Timestamp $start_time;
  public ?WrapperInt $timeout_in_minutes;
  public ?VpcConfig $vpc_config;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'artifacts' => ?BuildArtifacts,
    ?'build_complete' => bool,
    ?'build_number' => ?WrapperLong,
    ?'build_status' => ?StatusType,
    ?'cache' => ?ProjectCache,
    ?'current_phase' => string,
    ?'encryption_key' => ?NonEmptyString,
    ?'end_time' => ?Timestamp,
    ?'environment' => ?ProjectEnvironment,
    ?'exported_environment_variables' => ?ExportedEnvironmentVariables,
    ?'file_system_locations' => ?ProjectFileSystemLocations,
    ?'id' => ?NonEmptyString,
    ?'initiator' => string,
    ?'logs' => ?LogsLocation,
    ?'network_interface' => ?NetworkInterface,
    ?'phases' => ?BuildPhases,
    ?'project_name' => ?NonEmptyString,
    ?'queued_timeout_in_minutes' => ?WrapperInt,
    ?'report_arns' => ?BuildReportArns,
    ?'resolved_source_version' => ?NonEmptyString,
    ?'secondary_artifacts' => ?BuildArtifactsList,
    ?'secondary_source_versions' => ?ProjectSecondarySourceVersions,
    ?'secondary_sources' => ?ProjectSources,
    ?'service_role' => ?NonEmptyString,
    ?'source' => ?ProjectSource,
    ?'source_version' => ?NonEmptyString,
    ?'start_time' => ?Timestamp,
    ?'timeout_in_minutes' => ?WrapperInt,
    ?'vpc_config' => ?VpcConfig,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->artifacts = $s['artifacts'] ?? null;
    $this->build_complete = $s['build_complete'] ?? false;
    $this->build_number = $s['build_number'] ?? 0;
    $this->build_status = $s['build_status'] ?? '';
    $this->cache = $s['cache'] ?? null;
    $this->current_phase = $s['current_phase'] ?? '';
    $this->encryption_key = $s['encryption_key'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->environment = $s['environment'] ?? null;
    $this->exported_environment_variables = $s['exported_environment_variables'] ?? vec[];
    $this->file_system_locations = $s['file_system_locations'] ?? vec[];
    $this->id = $s['id'] ?? '';
    $this->initiator = $s['initiator'] ?? '';
    $this->logs = $s['logs'] ?? null;
    $this->network_interface = $s['network_interface'] ?? null;
    $this->phases = $s['phases'] ?? vec[];
    $this->project_name = $s['project_name'] ?? '';
    $this->queued_timeout_in_minutes = $s['queued_timeout_in_minutes'] ?? 0;
    $this->report_arns = $s['report_arns'] ?? vec[];
    $this->resolved_source_version = $s['resolved_source_version'] ?? '';
    $this->secondary_artifacts = $s['secondary_artifacts'] ?? vec[];
    $this->secondary_source_versions = $s['secondary_source_versions'] ?? vec[];
    $this->secondary_sources = $s['secondary_sources'] ?? vec[];
    $this->service_role = $s['service_role'] ?? '';
    $this->source = $s['source'] ?? null;
    $this->source_version = $s['source_version'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->timeout_in_minutes = $s['timeout_in_minutes'] ?? 0;
    $this->vpc_config = $s['vpc_config'] ?? null;
  }
}

class BuildArtifacts {
  public string $artifact_identifier;
  public ?WrapperBoolean $encryption_disabled;
  public string $location;
  public string $md_5_sum;
  public ?WrapperBoolean $override_artifact_name;
  public string $sha_256_sum;

  public function __construct(shape(
    ?'artifact_identifier' => string,
    ?'encryption_disabled' => ?WrapperBoolean,
    ?'location' => string,
    ?'md_5_sum' => string,
    ?'override_artifact_name' => ?WrapperBoolean,
    ?'sha_256_sum' => string,
  ) $s = shape()) {
    $this->artifact_identifier = $s['artifact_identifier'] ?? '';
    $this->encryption_disabled = $s['encryption_disabled'] ?? false;
    $this->location = $s['location'] ?? '';
    $this->md_5_sum = $s['md_5_sum'] ?? '';
    $this->override_artifact_name = $s['override_artifact_name'] ?? false;
    $this->sha_256_sum = $s['sha_256_sum'] ?? '';
  }
}

type BuildArtifactsList = vec<BuildArtifacts>;

type BuildIds = vec<NonEmptyString>;

class BuildNotDeleted {
  public ?NonEmptyString $id;
  public string $status_code;

  public function __construct(shape(
    ?'id' => ?NonEmptyString,
    ?'status_code' => string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->status_code = $s['status_code'] ?? '';
  }
}

class BuildPhase {
  public ?PhaseContexts $contexts;
  public ?WrapperLong $duration_in_seconds;
  public ?Timestamp $end_time;
  public ?StatusType $phase_status;
  public ?BuildPhaseType $phase_type;
  public ?Timestamp $start_time;

  public function __construct(shape(
    ?'contexts' => ?PhaseContexts,
    ?'duration_in_seconds' => ?WrapperLong,
    ?'end_time' => ?Timestamp,
    ?'phase_status' => ?StatusType,
    ?'phase_type' => ?BuildPhaseType,
    ?'start_time' => ?Timestamp,
  ) $s = shape()) {
    $this->contexts = $s['contexts'] ?? vec[];
    $this->duration_in_seconds = $s['duration_in_seconds'] ?? 0;
    $this->end_time = $s['end_time'] ?? 0;
    $this->phase_status = $s['phase_status'] ?? '';
    $this->phase_type = $s['phase_type'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

type BuildPhaseType = string;

type BuildPhases = vec<BuildPhase>;

type BuildReportArns = vec<String>;

type Builds = vec<Build>;

type BuildsNotDeleted = vec<BuildNotDeleted>;

type CacheMode = string;

type CacheType = string;

class CloudWatchLogsConfig {
  public string $group_name;
  public ?LogsConfigStatusType $status;
  public string $stream_name;

  public function __construct(shape(
    ?'group_name' => string,
    ?'status' => ?LogsConfigStatusType,
    ?'stream_name' => string,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->stream_name = $s['stream_name'] ?? '';
  }
}

type ComputeType = string;

class CreateProjectInput {
  public ?ProjectArtifacts $artifacts;
  public ?WrapperBoolean $badge_enabled;
  public ?ProjectCache $cache;
  public ?ProjectDescription $description;
  public ?NonEmptyString $encryption_key;
  public ?ProjectEnvironment $environment;
  public ?ProjectFileSystemLocations $file_system_locations;
  public ?LogsConfig $logs_config;
  public ?ProjectName $name;
  public ?TimeOut $queued_timeout_in_minutes;
  public ?ProjectArtifactsList $secondary_artifacts;
  public ?ProjectSecondarySourceVersions $secondary_source_versions;
  public ?ProjectSources $secondary_sources;
  public ?NonEmptyString $service_role;
  public ?ProjectSource $source;
  public string $source_version;
  public ?TagList $tags;
  public ?TimeOut $timeout_in_minutes;
  public ?VpcConfig $vpc_config;

  public function __construct(shape(
    ?'artifacts' => ?ProjectArtifacts,
    ?'badge_enabled' => ?WrapperBoolean,
    ?'cache' => ?ProjectCache,
    ?'description' => ?ProjectDescription,
    ?'encryption_key' => ?NonEmptyString,
    ?'environment' => ?ProjectEnvironment,
    ?'file_system_locations' => ?ProjectFileSystemLocations,
    ?'logs_config' => ?LogsConfig,
    ?'name' => ?ProjectName,
    ?'queued_timeout_in_minutes' => ?TimeOut,
    ?'secondary_artifacts' => ?ProjectArtifactsList,
    ?'secondary_source_versions' => ?ProjectSecondarySourceVersions,
    ?'secondary_sources' => ?ProjectSources,
    ?'service_role' => ?NonEmptyString,
    ?'source' => ?ProjectSource,
    ?'source_version' => string,
    ?'tags' => ?TagList,
    ?'timeout_in_minutes' => ?TimeOut,
    ?'vpc_config' => ?VpcConfig,
  ) $s = shape()) {
    $this->artifacts = $s['artifacts'] ?? null;
    $this->badge_enabled = $s['badge_enabled'] ?? false;
    $this->cache = $s['cache'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->encryption_key = $s['encryption_key'] ?? '';
    $this->environment = $s['environment'] ?? null;
    $this->file_system_locations = $s['file_system_locations'] ?? vec[];
    $this->logs_config = $s['logs_config'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->queued_timeout_in_minutes = $s['queued_timeout_in_minutes'] ?? 0;
    $this->secondary_artifacts = $s['secondary_artifacts'] ?? vec[];
    $this->secondary_source_versions = $s['secondary_source_versions'] ?? vec[];
    $this->secondary_sources = $s['secondary_sources'] ?? vec[];
    $this->service_role = $s['service_role'] ?? '';
    $this->source = $s['source'] ?? null;
    $this->source_version = $s['source_version'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->timeout_in_minutes = $s['timeout_in_minutes'] ?? 0;
    $this->vpc_config = $s['vpc_config'] ?? null;
  }
}

class CreateProjectOutput {
  public ?Project $project;

  public function __construct(shape(
    ?'project' => ?Project,
  ) $s = shape()) {
    $this->project = $s['project'] ?? null;
  }
}

class CreateReportGroupInput {
  public ?ReportExportConfig $export_config;
  public ?ReportGroupName $name;
  public ?ReportType $type;

  public function __construct(shape(
    ?'export_config' => ?ReportExportConfig,
    ?'name' => ?ReportGroupName,
    ?'type' => ?ReportType,
  ) $s = shape()) {
    $this->export_config = $s['export_config'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class CreateReportGroupOutput {
  public ?ReportGroup $report_group;

  public function __construct(shape(
    ?'report_group' => ?ReportGroup,
  ) $s = shape()) {
    $this->report_group = $s['report_group'] ?? null;
  }
}

class CreateWebhookInput {
  public string $branch_filter;
  public ?FilterGroups $filter_groups;
  public ?ProjectName $project_name;

  public function __construct(shape(
    ?'branch_filter' => string,
    ?'filter_groups' => ?FilterGroups,
    ?'project_name' => ?ProjectName,
  ) $s = shape()) {
    $this->branch_filter = $s['branch_filter'] ?? '';
    $this->filter_groups = $s['filter_groups'] ?? vec[];
    $this->project_name = $s['project_name'] ?? '';
  }
}

class CreateWebhookOutput {
  public ?Webhook $webhook;

  public function __construct(shape(
    ?'webhook' => ?Webhook,
  ) $s = shape()) {
    $this->webhook = $s['webhook'] ?? null;
  }
}

type CredentialProviderType = string;

class DeleteProjectInput {
  public ?NonEmptyString $name;

  public function __construct(shape(
    ?'name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DeleteProjectOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteReportGroupInput {
  public ?NonEmptyString $arn;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class DeleteReportGroupOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteReportInput {
  public ?NonEmptyString $arn;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class DeleteReportOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteResourcePolicyInput {
  public ?NonEmptyString $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class DeleteResourcePolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSourceCredentialsInput {
  public ?NonEmptyString $arn;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class DeleteSourceCredentialsOutput {
  public ?NonEmptyString $arn;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class DeleteWebhookInput {
  public ?ProjectName $project_name;

  public function __construct(shape(
    ?'project_name' => ?ProjectName,
  ) $s = shape()) {
    $this->project_name = $s['project_name'] ?? '';
  }
}

class DeleteWebhookOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeTestCasesInput {
  public ?TestCaseFilter $filter;
  public ?PageSize $max_results;
  public string $next_token;
  public string $report_arn;

  public function __construct(shape(
    ?'filter' => ?TestCaseFilter,
    ?'max_results' => ?PageSize,
    ?'next_token' => string,
    ?'report_arn' => string,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->report_arn = $s['report_arn'] ?? '';
  }
}

class DescribeTestCasesOutput {
  public string $next_token;
  public ?TestCases $test_cases;

  public function __construct(shape(
    ?'next_token' => string,
    ?'test_cases' => ?TestCases,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->test_cases = $s['test_cases'] ?? vec[];
  }
}

class EnvironmentImage {
  public string $description;
  public string $name;
  public ?ImageVersions $versions;

  public function __construct(shape(
    ?'description' => string,
    ?'name' => string,
    ?'versions' => ?ImageVersions,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->versions = $s['versions'] ?? vec[];
  }
}

type EnvironmentImages = vec<EnvironmentImage>;

class EnvironmentLanguage {
  public ?EnvironmentImages $images;
  public ?LanguageType $language;

  public function __construct(shape(
    ?'images' => ?EnvironmentImages,
    ?'language' => ?LanguageType,
  ) $s = shape()) {
    $this->images = $s['images'] ?? vec[];
    $this->language = $s['language'] ?? '';
  }
}

type EnvironmentLanguages = vec<EnvironmentLanguage>;

class EnvironmentPlatform {
  public ?EnvironmentLanguages $languages;
  public ?PlatformType $platform;

  public function __construct(shape(
    ?'languages' => ?EnvironmentLanguages,
    ?'platform' => ?PlatformType,
  ) $s = shape()) {
    $this->languages = $s['languages'] ?? vec[];
    $this->platform = $s['platform'] ?? '';
  }
}

type EnvironmentPlatforms = vec<EnvironmentPlatform>;

type EnvironmentType = string;

class EnvironmentVariable {
  public ?NonEmptyString $name;
  public ?EnvironmentVariableType $type;
  public string $value;

  public function __construct(shape(
    ?'name' => ?NonEmptyString,
    ?'type' => ?EnvironmentVariableType,
    ?'value' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type EnvironmentVariableType = string;

type EnvironmentVariables = vec<EnvironmentVariable>;

class ExportedEnvironmentVariable {
  public ?NonEmptyString $name;
  public string $value;

  public function __construct(shape(
    ?'name' => ?NonEmptyString,
    ?'value' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type ExportedEnvironmentVariables = vec<ExportedEnvironmentVariable>;

type FileSystemType = string;

type FilterGroup = vec<WebhookFilter>;

type FilterGroups = vec<FilterGroup>;

class GetResourcePolicyInput {
  public ?NonEmptyString $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class GetResourcePolicyOutput {
  public ?NonEmptyString $policy;

  public function __construct(shape(
    ?'policy' => ?NonEmptyString,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? '';
  }
}

type GitCloneDepth = int;

class GitSubmodulesConfig {
  public ?WrapperBoolean $fetch_submodules;

  public function __construct(shape(
    ?'fetch_submodules' => ?WrapperBoolean,
  ) $s = shape()) {
    $this->fetch_submodules = $s['fetch_submodules'] ?? false;
  }
}

type ImagePullCredentialsType = string;

type ImageVersions = vec<String>;

class ImportSourceCredentialsInput {
  public ?AuthType $auth_type;
  public ?ServerType $server_type;
  public ?WrapperBoolean $should_overwrite;
  public ?SensitiveNonEmptyString $token;
  public ?NonEmptyString $username;

  public function __construct(shape(
    ?'auth_type' => ?AuthType,
    ?'server_type' => ?ServerType,
    ?'should_overwrite' => ?WrapperBoolean,
    ?'token' => ?SensitiveNonEmptyString,
    ?'username' => ?NonEmptyString,
  ) $s = shape()) {
    $this->auth_type = $s['auth_type'] ?? '';
    $this->server_type = $s['server_type'] ?? '';
    $this->should_overwrite = $s['should_overwrite'] ?? false;
    $this->token = $s['token'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class ImportSourceCredentialsOutput {
  public ?NonEmptyString $arn;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class InvalidInputException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidateProjectCacheInput {
  public ?NonEmptyString $project_name;

  public function __construct(shape(
    ?'project_name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->project_name = $s['project_name'] ?? '';
  }
}

class InvalidateProjectCacheOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type KeyInput = string;

type LanguageType = string;

class ListBuildsForProjectInput {
  public string $next_token;
  public ?NonEmptyString $project_name;
  public ?SortOrderType $sort_order;

  public function __construct(shape(
    ?'next_token' => string,
    ?'project_name' => ?NonEmptyString,
    ?'sort_order' => ?SortOrderType,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->project_name = $s['project_name'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class ListBuildsForProjectOutput {
  public ?BuildIds $ids;
  public string $next_token;

  public function __construct(shape(
    ?'ids' => ?BuildIds,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->ids = $s['ids'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBuildsInput {
  public string $next_token;
  public ?SortOrderType $sort_order;

  public function __construct(shape(
    ?'next_token' => string,
    ?'sort_order' => ?SortOrderType,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class ListBuildsOutput {
  public ?BuildIds $ids;
  public string $next_token;

  public function __construct(shape(
    ?'ids' => ?BuildIds,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->ids = $s['ids'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListCuratedEnvironmentImagesInput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListCuratedEnvironmentImagesOutput {
  public ?EnvironmentPlatforms $platforms;

  public function __construct(shape(
    ?'platforms' => ?EnvironmentPlatforms,
  ) $s = shape()) {
    $this->platforms = $s['platforms'] ?? vec[];
  }
}

class ListProjectsInput {
  public ?NonEmptyString $next_token;
  public ?ProjectSortByType $sort_by;
  public ?SortOrderType $sort_order;

  public function __construct(shape(
    ?'next_token' => ?NonEmptyString,
    ?'sort_by' => ?ProjectSortByType,
    ?'sort_order' => ?SortOrderType,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_by = $s['sort_by'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class ListProjectsOutput {
  public string $next_token;
  public ?ProjectNames $projects;

  public function __construct(shape(
    ?'next_token' => string,
    ?'projects' => ?ProjectNames,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->projects = $s['projects'] ?? vec[];
  }
}

class ListReportGroupsInput {
  public ?PageSize $max_results;
  public string $next_token;
  public ?ReportGroupSortByType $sort_by;
  public ?SortOrderType $sort_order;

  public function __construct(shape(
    ?'max_results' => ?PageSize,
    ?'next_token' => string,
    ?'sort_by' => ?ReportGroupSortByType,
    ?'sort_order' => ?SortOrderType,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_by = $s['sort_by'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class ListReportGroupsOutput {
  public string $next_token;
  public ?ReportGroupArns $report_groups;

  public function __construct(shape(
    ?'next_token' => string,
    ?'report_groups' => ?ReportGroupArns,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->report_groups = $s['report_groups'] ?? vec[];
  }
}

class ListReportsForReportGroupInput {
  public ?ReportFilter $filter;
  public ?PageSize $max_results;
  public string $next_token;
  public string $report_group_arn;
  public ?SortOrderType $sort_order;

  public function __construct(shape(
    ?'filter' => ?ReportFilter,
    ?'max_results' => ?PageSize,
    ?'next_token' => string,
    ?'report_group_arn' => string,
    ?'sort_order' => ?SortOrderType,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->report_group_arn = $s['report_group_arn'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class ListReportsForReportGroupOutput {
  public string $next_token;
  public ?ReportArns $reports;

  public function __construct(shape(
    ?'next_token' => string,
    ?'reports' => ?ReportArns,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->reports = $s['reports'] ?? vec[];
  }
}

class ListReportsInput {
  public ?ReportFilter $filter;
  public ?PageSize $max_results;
  public string $next_token;
  public ?SortOrderType $sort_order;

  public function __construct(shape(
    ?'filter' => ?ReportFilter,
    ?'max_results' => ?PageSize,
    ?'next_token' => string,
    ?'sort_order' => ?SortOrderType,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class ListReportsOutput {
  public string $next_token;
  public ?ReportArns $reports;

  public function __construct(shape(
    ?'next_token' => string,
    ?'reports' => ?ReportArns,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->reports = $s['reports'] ?? vec[];
  }
}

class ListSharedProjectsInput {
  public ?PageSize $max_results;
  public ?NonEmptyString $next_token;
  public ?SharedResourceSortByType $sort_by;
  public ?SortOrderType $sort_order;

  public function __construct(shape(
    ?'max_results' => ?PageSize,
    ?'next_token' => ?NonEmptyString,
    ?'sort_by' => ?SharedResourceSortByType,
    ?'sort_order' => ?SortOrderType,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_by = $s['sort_by'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class ListSharedProjectsOutput {
  public string $next_token;
  public ?ProjectArns $projects;

  public function __construct(shape(
    ?'next_token' => string,
    ?'projects' => ?ProjectArns,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->projects = $s['projects'] ?? vec[];
  }
}

class ListSharedReportGroupsInput {
  public ?PageSize $max_results;
  public string $next_token;
  public ?SharedResourceSortByType $sort_by;
  public ?SortOrderType $sort_order;

  public function __construct(shape(
    ?'max_results' => ?PageSize,
    ?'next_token' => string,
    ?'sort_by' => ?SharedResourceSortByType,
    ?'sort_order' => ?SortOrderType,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_by = $s['sort_by'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class ListSharedReportGroupsOutput {
  public string $next_token;
  public ?ReportGroupArns $report_groups;

  public function __construct(shape(
    ?'next_token' => string,
    ?'report_groups' => ?ReportGroupArns,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->report_groups = $s['report_groups'] ?? vec[];
  }
}

class ListSourceCredentialsInput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListSourceCredentialsOutput {
  public ?SourceCredentialsInfos $source_credentials_infos;

  public function __construct(shape(
    ?'source_credentials_infos' => ?SourceCredentialsInfos,
  ) $s = shape()) {
    $this->source_credentials_infos = $s['source_credentials_infos'] ?? vec[];
  }
}

class LogsConfig {
  public ?CloudWatchLogsConfig $cloud_watch_logs;
  public ?S3LogsConfig $s_3_logs;

  public function __construct(shape(
    ?'cloud_watch_logs' => ?CloudWatchLogsConfig,
    ?'s_3_logs' => ?S3LogsConfig,
  ) $s = shape()) {
    $this->cloud_watch_logs = $s['cloud_watch_logs'] ?? null;
    $this->s_3_logs = $s['s_3_logs'] ?? null;
  }
}

type LogsConfigStatusType = string;

class LogsLocation {
  public ?CloudWatchLogsConfig $cloud_watch_logs;
  public string $cloud_watch_logs_arn;
  public string $deep_link;
  public string $group_name;
  public string $s_3_deep_link;
  public ?S3LogsConfig $s_3_logs;
  public string $s_3_logs_arn;
  public string $stream_name;

  public function __construct(shape(
    ?'cloud_watch_logs' => ?CloudWatchLogsConfig,
    ?'cloud_watch_logs_arn' => string,
    ?'deep_link' => string,
    ?'group_name' => string,
    ?'s_3_deep_link' => string,
    ?'s_3_logs' => ?S3LogsConfig,
    ?'s_3_logs_arn' => string,
    ?'stream_name' => string,
  ) $s = shape()) {
    $this->cloud_watch_logs = $s['cloud_watch_logs'] ?? null;
    $this->cloud_watch_logs_arn = $s['cloud_watch_logs_arn'] ?? '';
    $this->deep_link = $s['deep_link'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->s_3_deep_link = $s['s_3_deep_link'] ?? '';
    $this->s_3_logs = $s['s_3_logs'] ?? null;
    $this->s_3_logs_arn = $s['s_3_logs_arn'] ?? '';
    $this->stream_name = $s['stream_name'] ?? '';
  }
}

class NetworkInterface {
  public ?NonEmptyString $network_interface_id;
  public ?NonEmptyString $subnet_id;

  public function __construct(shape(
    ?'network_interface_id' => ?NonEmptyString,
    ?'subnet_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

type NonEmptyString = string;

class OAuthProviderException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type PageSize = int;

class PhaseContext {
  public string $message;
  public string $status_code;

  public function __construct(shape(
    ?'message' => string,
    ?'status_code' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->status_code = $s['status_code'] ?? '';
  }
}

type PhaseContexts = vec<PhaseContext>;

type PlatformType = string;

class Project {
  public string $arn;
  public ?ProjectArtifacts $artifacts;
  public ?ProjectBadge $badge;
  public ?ProjectCache $cache;
  public ?Timestamp $created;
  public ?ProjectDescription $description;
  public ?NonEmptyString $encryption_key;
  public ?ProjectEnvironment $environment;
  public ?ProjectFileSystemLocations $file_system_locations;
  public ?Timestamp $last_modified;
  public ?LogsConfig $logs_config;
  public ?ProjectName $name;
  public ?TimeOut $queued_timeout_in_minutes;
  public ?ProjectArtifactsList $secondary_artifacts;
  public ?ProjectSecondarySourceVersions $secondary_source_versions;
  public ?ProjectSources $secondary_sources;
  public ?NonEmptyString $service_role;
  public ?ProjectSource $source;
  public string $source_version;
  public ?TagList $tags;
  public ?TimeOut $timeout_in_minutes;
  public ?VpcConfig $vpc_config;
  public ?Webhook $webhook;

  public function __construct(shape(
    ?'arn' => string,
    ?'artifacts' => ?ProjectArtifacts,
    ?'badge' => ?ProjectBadge,
    ?'cache' => ?ProjectCache,
    ?'created' => ?Timestamp,
    ?'description' => ?ProjectDescription,
    ?'encryption_key' => ?NonEmptyString,
    ?'environment' => ?ProjectEnvironment,
    ?'file_system_locations' => ?ProjectFileSystemLocations,
    ?'last_modified' => ?Timestamp,
    ?'logs_config' => ?LogsConfig,
    ?'name' => ?ProjectName,
    ?'queued_timeout_in_minutes' => ?TimeOut,
    ?'secondary_artifacts' => ?ProjectArtifactsList,
    ?'secondary_source_versions' => ?ProjectSecondarySourceVersions,
    ?'secondary_sources' => ?ProjectSources,
    ?'service_role' => ?NonEmptyString,
    ?'source' => ?ProjectSource,
    ?'source_version' => string,
    ?'tags' => ?TagList,
    ?'timeout_in_minutes' => ?TimeOut,
    ?'vpc_config' => ?VpcConfig,
    ?'webhook' => ?Webhook,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->artifacts = $s['artifacts'] ?? null;
    $this->badge = $s['badge'] ?? null;
    $this->cache = $s['cache'] ?? null;
    $this->created = $s['created'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->encryption_key = $s['encryption_key'] ?? '';
    $this->environment = $s['environment'] ?? null;
    $this->file_system_locations = $s['file_system_locations'] ?? vec[];
    $this->last_modified = $s['last_modified'] ?? 0;
    $this->logs_config = $s['logs_config'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->queued_timeout_in_minutes = $s['queued_timeout_in_minutes'] ?? 0;
    $this->secondary_artifacts = $s['secondary_artifacts'] ?? vec[];
    $this->secondary_source_versions = $s['secondary_source_versions'] ?? vec[];
    $this->secondary_sources = $s['secondary_sources'] ?? vec[];
    $this->service_role = $s['service_role'] ?? '';
    $this->source = $s['source'] ?? null;
    $this->source_version = $s['source_version'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->timeout_in_minutes = $s['timeout_in_minutes'] ?? 0;
    $this->vpc_config = $s['vpc_config'] ?? null;
    $this->webhook = $s['webhook'] ?? null;
  }
}

type ProjectArns = vec<NonEmptyString>;

class ProjectArtifacts {
  public string $artifact_identifier;
  public ?WrapperBoolean $encryption_disabled;
  public string $location;
  public string $name;
  public ?ArtifactNamespace $namespace_type;
  public ?WrapperBoolean $override_artifact_name;
  public ?ArtifactPackaging $packaging;
  public string $path;
  public ?ArtifactsType $type;

  public function __construct(shape(
    ?'artifact_identifier' => string,
    ?'encryption_disabled' => ?WrapperBoolean,
    ?'location' => string,
    ?'name' => string,
    ?'namespace_type' => ?ArtifactNamespace,
    ?'override_artifact_name' => ?WrapperBoolean,
    ?'packaging' => ?ArtifactPackaging,
    ?'path' => string,
    ?'type' => ?ArtifactsType,
  ) $s = shape()) {
    $this->artifact_identifier = $s['artifact_identifier'] ?? '';
    $this->encryption_disabled = $s['encryption_disabled'] ?? false;
    $this->location = $s['location'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->namespace_type = $s['namespace_type'] ?? '';
    $this->override_artifact_name = $s['override_artifact_name'] ?? false;
    $this->packaging = $s['packaging'] ?? '';
    $this->path = $s['path'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ProjectArtifactsList = vec<ProjectArtifacts>;

class ProjectBadge {
  public bool $badge_enabled;
  public string $badge_request_url;

  public function __construct(shape(
    ?'badge_enabled' => bool,
    ?'badge_request_url' => string,
  ) $s = shape()) {
    $this->badge_enabled = $s['badge_enabled'] ?? false;
    $this->badge_request_url = $s['badge_request_url'] ?? '';
  }
}

class ProjectCache {
  public string $location;
  public ?ProjectCacheModes $modes;
  public ?CacheType $type;

  public function __construct(shape(
    ?'location' => string,
    ?'modes' => ?ProjectCacheModes,
    ?'type' => ?CacheType,
  ) $s = shape()) {
    $this->location = $s['location'] ?? '';
    $this->modes = $s['modes'] ?? vec[];
    $this->type = $s['type'] ?? '';
  }
}

type ProjectCacheModes = vec<CacheMode>;

type ProjectDescription = string;

class ProjectEnvironment {
  public string $certificate;
  public ?ComputeType $compute_type;
  public ?EnvironmentVariables $environment_variables;
  public ?NonEmptyString $image;
  public ?ImagePullCredentialsType $image_pull_credentials_type;
  public ?WrapperBoolean $privileged_mode;
  public ?RegistryCredential $registry_credential;
  public ?EnvironmentType $type;

  public function __construct(shape(
    ?'certificate' => string,
    ?'compute_type' => ?ComputeType,
    ?'environment_variables' => ?EnvironmentVariables,
    ?'image' => ?NonEmptyString,
    ?'image_pull_credentials_type' => ?ImagePullCredentialsType,
    ?'privileged_mode' => ?WrapperBoolean,
    ?'registry_credential' => ?RegistryCredential,
    ?'type' => ?EnvironmentType,
  ) $s = shape()) {
    $this->certificate = $s['certificate'] ?? '';
    $this->compute_type = $s['compute_type'] ?? '';
    $this->environment_variables = $s['environment_variables'] ?? vec[];
    $this->image = $s['image'] ?? '';
    $this->image_pull_credentials_type = $s['image_pull_credentials_type'] ?? '';
    $this->privileged_mode = $s['privileged_mode'] ?? false;
    $this->registry_credential = $s['registry_credential'] ?? null;
    $this->type = $s['type'] ?? '';
  }
}

class ProjectFileSystemLocation {
  public string $identifier;
  public string $location;
  public string $mount_options;
  public string $mount_point;
  public ?FileSystemType $type;

  public function __construct(shape(
    ?'identifier' => string,
    ?'location' => string,
    ?'mount_options' => string,
    ?'mount_point' => string,
    ?'type' => ?FileSystemType,
  ) $s = shape()) {
    $this->identifier = $s['identifier'] ?? '';
    $this->location = $s['location'] ?? '';
    $this->mount_options = $s['mount_options'] ?? '';
    $this->mount_point = $s['mount_point'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ProjectFileSystemLocations = vec<ProjectFileSystemLocation>;

type ProjectName = string;

type ProjectNames = vec<NonEmptyString>;

type ProjectSecondarySourceVersions = vec<ProjectSourceVersion>;

type ProjectSortByType = string;

class ProjectSource {
  public ?SourceAuth $auth;
  public string $buildspec;
  public ?GitCloneDepth $git_clone_depth;
  public ?GitSubmodulesConfig $git_submodules_config;
  public ?WrapperBoolean $insecure_ssl;
  public string $location;
  public ?WrapperBoolean $report_build_status;
  public string $source_identifier;
  public ?SourceType $type;

  public function __construct(shape(
    ?'auth' => ?SourceAuth,
    ?'buildspec' => string,
    ?'git_clone_depth' => ?GitCloneDepth,
    ?'git_submodules_config' => ?GitSubmodulesConfig,
    ?'insecure_ssl' => ?WrapperBoolean,
    ?'location' => string,
    ?'report_build_status' => ?WrapperBoolean,
    ?'source_identifier' => string,
    ?'type' => ?SourceType,
  ) $s = shape()) {
    $this->auth = $s['auth'] ?? null;
    $this->buildspec = $s['buildspec'] ?? '';
    $this->git_clone_depth = $s['git_clone_depth'] ?? 0;
    $this->git_submodules_config = $s['git_submodules_config'] ?? null;
    $this->insecure_ssl = $s['insecure_ssl'] ?? false;
    $this->location = $s['location'] ?? '';
    $this->report_build_status = $s['report_build_status'] ?? false;
    $this->source_identifier = $s['source_identifier'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class ProjectSourceVersion {
  public string $source_identifier;
  public string $source_version;

  public function __construct(shape(
    ?'source_identifier' => string,
    ?'source_version' => string,
  ) $s = shape()) {
    $this->source_identifier = $s['source_identifier'] ?? '';
    $this->source_version = $s['source_version'] ?? '';
  }
}

type ProjectSources = vec<ProjectSource>;

type Projects = vec<Project>;

class PutResourcePolicyInput {
  public ?NonEmptyString $policy;
  public ?NonEmptyString $resource_arn;

  public function __construct(shape(
    ?'policy' => ?NonEmptyString,
    ?'resource_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class PutResourcePolicyOutput {
  public ?NonEmptyString $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class RegistryCredential {
  public ?NonEmptyString $credential;
  public ?CredentialProviderType $credential_provider;

  public function __construct(shape(
    ?'credential' => ?NonEmptyString,
    ?'credential_provider' => ?CredentialProviderType,
  ) $s = shape()) {
    $this->credential = $s['credential'] ?? '';
    $this->credential_provider = $s['credential_provider'] ?? '';
  }
}

class Report {
  public ?NonEmptyString $arn;
  public ?Timestamp $created;
  public string $execution_id;
  public ?Timestamp $expired;
  public ?ReportExportConfig $export_config;
  public string $name;
  public ?NonEmptyString $report_group_arn;
  public ?ReportStatusType $status;
  public ?TestReportSummary $test_summary;
  public ?WrapperBoolean $truncated;
  public ?ReportType $type;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'created' => ?Timestamp,
    ?'execution_id' => string,
    ?'expired' => ?Timestamp,
    ?'export_config' => ?ReportExportConfig,
    ?'name' => string,
    ?'report_group_arn' => ?NonEmptyString,
    ?'status' => ?ReportStatusType,
    ?'test_summary' => ?TestReportSummary,
    ?'truncated' => ?WrapperBoolean,
    ?'type' => ?ReportType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created = $s['created'] ?? 0;
    $this->execution_id = $s['execution_id'] ?? '';
    $this->expired = $s['expired'] ?? 0;
    $this->export_config = $s['export_config'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->report_group_arn = $s['report_group_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->test_summary = $s['test_summary'] ?? null;
    $this->truncated = $s['truncated'] ?? false;
    $this->type = $s['type'] ?? '';
  }
}

type ReportArns = vec<NonEmptyString>;

class ReportExportConfig {
  public ?ReportExportConfigType $export_config_type;
  public ?S3ReportExportConfig $s_3_destination;

  public function __construct(shape(
    ?'export_config_type' => ?ReportExportConfigType,
    ?'s_3_destination' => ?S3ReportExportConfig,
  ) $s = shape()) {
    $this->export_config_type = $s['export_config_type'] ?? '';
    $this->s_3_destination = $s['s_3_destination'] ?? null;
  }
}

type ReportExportConfigType = string;

class ReportFilter {
  public ?ReportStatusType $status;

  public function __construct(shape(
    ?'status' => ?ReportStatusType,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
  }
}

class ReportGroup {
  public ?NonEmptyString $arn;
  public ?Timestamp $created;
  public ?ReportExportConfig $export_config;
  public ?Timestamp $last_modified;
  public ?ReportGroupName $name;
  public ?ReportType $type;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'created' => ?Timestamp,
    ?'export_config' => ?ReportExportConfig,
    ?'last_modified' => ?Timestamp,
    ?'name' => ?ReportGroupName,
    ?'type' => ?ReportType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created = $s['created'] ?? 0;
    $this->export_config = $s['export_config'] ?? null;
    $this->last_modified = $s['last_modified'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ReportGroupArns = vec<NonEmptyString>;

type ReportGroupName = string;

type ReportGroupSortByType = string;

type ReportGroups = vec<ReportGroup>;

type ReportPackagingType = string;

type ReportStatusCounts = dict<String, WrapperInt>;

type ReportStatusType = string;

type ReportType = string;

type Reports = vec<Report>;

class ResourceAlreadyExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class S3LogsConfig {
  public ?WrapperBoolean $encryption_disabled;
  public string $location;
  public ?LogsConfigStatusType $status;

  public function __construct(shape(
    ?'encryption_disabled' => ?WrapperBoolean,
    ?'location' => string,
    ?'status' => ?LogsConfigStatusType,
  ) $s = shape()) {
    $this->encryption_disabled = $s['encryption_disabled'] ?? false;
    $this->location = $s['location'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class S3ReportExportConfig {
  public ?NonEmptyString $bucket;
  public ?WrapperBoolean $encryption_disabled;
  public ?NonEmptyString $encryption_key;
  public ?ReportPackagingType $packaging;
  public string $path;

  public function __construct(shape(
    ?'bucket' => ?NonEmptyString,
    ?'encryption_disabled' => ?WrapperBoolean,
    ?'encryption_key' => ?NonEmptyString,
    ?'packaging' => ?ReportPackagingType,
    ?'path' => string,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->encryption_disabled = $s['encryption_disabled'] ?? false;
    $this->encryption_key = $s['encryption_key'] ?? '';
    $this->packaging = $s['packaging'] ?? '';
    $this->path = $s['path'] ?? '';
  }
}

type SecurityGroupIds = vec<NonEmptyString>;

type SensitiveNonEmptyString = string;

type ServerType = string;

type SharedResourceSortByType = string;

type SortOrderType = string;

class SourceAuth {
  public string $resource;
  public ?SourceAuthType $type;

  public function __construct(shape(
    ?'resource' => string,
    ?'type' => ?SourceAuthType,
  ) $s = shape()) {
    $this->resource = $s['resource'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type SourceAuthType = string;

class SourceCredentialsInfo {
  public ?NonEmptyString $arn;
  public ?AuthType $auth_type;
  public ?ServerType $server_type;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'auth_type' => ?AuthType,
    ?'server_type' => ?ServerType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->auth_type = $s['auth_type'] ?? '';
    $this->server_type = $s['server_type'] ?? '';
  }
}

type SourceCredentialsInfos = vec<SourceCredentialsInfo>;

type SourceType = string;

class StartBuildInput {
  public ?ProjectArtifacts $artifacts_override;
  public string $buildspec_override;
  public ?ProjectCache $cache_override;
  public string $certificate_override;
  public ?ComputeType $compute_type_override;
  public ?NonEmptyString $encryption_key_override;
  public ?EnvironmentType $environment_type_override;
  public ?EnvironmentVariables $environment_variables_override;
  public ?GitCloneDepth $git_clone_depth_override;
  public ?GitSubmodulesConfig $git_submodules_config_override;
  public string $idempotency_token;
  public ?NonEmptyString $image_override;
  public ?ImagePullCredentialsType $image_pull_credentials_type_override;
  public ?WrapperBoolean $insecure_ssl_override;
  public ?LogsConfig $logs_config_override;
  public ?WrapperBoolean $privileged_mode_override;
  public ?NonEmptyString $project_name;
  public ?TimeOut $queued_timeout_in_minutes_override;
  public ?RegistryCredential $registry_credential_override;
  public ?WrapperBoolean $report_build_status_override;
  public ?ProjectArtifactsList $secondary_artifacts_override;
  public ?ProjectSources $secondary_sources_override;
  public ?ProjectSecondarySourceVersions $secondary_sources_version_override;
  public ?NonEmptyString $service_role_override;
  public ?SourceAuth $source_auth_override;
  public string $source_location_override;
  public ?SourceType $source_type_override;
  public string $source_version;
  public ?TimeOut $timeout_in_minutes_override;

  public function __construct(shape(
    ?'artifacts_override' => ?ProjectArtifacts,
    ?'buildspec_override' => string,
    ?'cache_override' => ?ProjectCache,
    ?'certificate_override' => string,
    ?'compute_type_override' => ?ComputeType,
    ?'encryption_key_override' => ?NonEmptyString,
    ?'environment_type_override' => ?EnvironmentType,
    ?'environment_variables_override' => ?EnvironmentVariables,
    ?'git_clone_depth_override' => ?GitCloneDepth,
    ?'git_submodules_config_override' => ?GitSubmodulesConfig,
    ?'idempotency_token' => string,
    ?'image_override' => ?NonEmptyString,
    ?'image_pull_credentials_type_override' => ?ImagePullCredentialsType,
    ?'insecure_ssl_override' => ?WrapperBoolean,
    ?'logs_config_override' => ?LogsConfig,
    ?'privileged_mode_override' => ?WrapperBoolean,
    ?'project_name' => ?NonEmptyString,
    ?'queued_timeout_in_minutes_override' => ?TimeOut,
    ?'registry_credential_override' => ?RegistryCredential,
    ?'report_build_status_override' => ?WrapperBoolean,
    ?'secondary_artifacts_override' => ?ProjectArtifactsList,
    ?'secondary_sources_override' => ?ProjectSources,
    ?'secondary_sources_version_override' => ?ProjectSecondarySourceVersions,
    ?'service_role_override' => ?NonEmptyString,
    ?'source_auth_override' => ?SourceAuth,
    ?'source_location_override' => string,
    ?'source_type_override' => ?SourceType,
    ?'source_version' => string,
    ?'timeout_in_minutes_override' => ?TimeOut,
  ) $s = shape()) {
    $this->artifacts_override = $s['artifacts_override'] ?? null;
    $this->buildspec_override = $s['buildspec_override'] ?? '';
    $this->cache_override = $s['cache_override'] ?? null;
    $this->certificate_override = $s['certificate_override'] ?? '';
    $this->compute_type_override = $s['compute_type_override'] ?? '';
    $this->encryption_key_override = $s['encryption_key_override'] ?? '';
    $this->environment_type_override = $s['environment_type_override'] ?? '';
    $this->environment_variables_override = $s['environment_variables_override'] ?? vec[];
    $this->git_clone_depth_override = $s['git_clone_depth_override'] ?? 0;
    $this->git_submodules_config_override = $s['git_submodules_config_override'] ?? null;
    $this->idempotency_token = $s['idempotency_token'] ?? '';
    $this->image_override = $s['image_override'] ?? '';
    $this->image_pull_credentials_type_override = $s['image_pull_credentials_type_override'] ?? '';
    $this->insecure_ssl_override = $s['insecure_ssl_override'] ?? false;
    $this->logs_config_override = $s['logs_config_override'] ?? null;
    $this->privileged_mode_override = $s['privileged_mode_override'] ?? false;
    $this->project_name = $s['project_name'] ?? '';
    $this->queued_timeout_in_minutes_override = $s['queued_timeout_in_minutes_override'] ?? 0;
    $this->registry_credential_override = $s['registry_credential_override'] ?? null;
    $this->report_build_status_override = $s['report_build_status_override'] ?? false;
    $this->secondary_artifacts_override = $s['secondary_artifacts_override'] ?? vec[];
    $this->secondary_sources_override = $s['secondary_sources_override'] ?? vec[];
    $this->secondary_sources_version_override = $s['secondary_sources_version_override'] ?? vec[];
    $this->service_role_override = $s['service_role_override'] ?? '';
    $this->source_auth_override = $s['source_auth_override'] ?? null;
    $this->source_location_override = $s['source_location_override'] ?? '';
    $this->source_type_override = $s['source_type_override'] ?? '';
    $this->source_version = $s['source_version'] ?? '';
    $this->timeout_in_minutes_override = $s['timeout_in_minutes_override'] ?? 0;
  }
}

class StartBuildOutput {
  public ?Build $build;

  public function __construct(shape(
    ?'build' => ?Build,
  ) $s = shape()) {
    $this->build = $s['build'] ?? null;
  }
}

type StatusType = string;

class StopBuildInput {
  public ?NonEmptyString $id;

  public function __construct(shape(
    ?'id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class StopBuildOutput {
  public ?Build $build;

  public function __construct(shape(
    ?'build' => ?Build,
  ) $s = shape()) {
    $this->build = $s['build'] ?? null;
  }
}

type String = string;

type Subnets = vec<NonEmptyString>;

class Tag {
  public ?KeyInput $key;
  public ?ValueInput $value;

  public function __construct(shape(
    ?'key' => ?KeyInput,
    ?'value' => ?ValueInput,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagList = vec<Tag>;

class TestCase {
  public ?WrapperLong $duration_in_nano_seconds;
  public ?Timestamp $expired;
  public string $message;
  public string $name;
  public string $prefix;
  public ?NonEmptyString $report_arn;
  public string $status;
  public string $test_raw_data_path;

  public function __construct(shape(
    ?'duration_in_nano_seconds' => ?WrapperLong,
    ?'expired' => ?Timestamp,
    ?'message' => string,
    ?'name' => string,
    ?'prefix' => string,
    ?'report_arn' => ?NonEmptyString,
    ?'status' => string,
    ?'test_raw_data_path' => string,
  ) $s = shape()) {
    $this->duration_in_nano_seconds = $s['duration_in_nano_seconds'] ?? 0;
    $this->expired = $s['expired'] ?? 0;
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->prefix = $s['prefix'] ?? '';
    $this->report_arn = $s['report_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->test_raw_data_path = $s['test_raw_data_path'] ?? '';
  }
}

class TestCaseFilter {
  public string $status;

  public function __construct(shape(
    ?'status' => string,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
  }
}

type TestCases = vec<TestCase>;

class TestReportSummary {
  public ?WrapperLong $duration_in_nano_seconds;
  public ?ReportStatusCounts $status_counts;
  public ?WrapperInt $total;

  public function __construct(shape(
    ?'duration_in_nano_seconds' => ?WrapperLong,
    ?'status_counts' => ?ReportStatusCounts,
    ?'total' => ?WrapperInt,
  ) $s = shape()) {
    $this->duration_in_nano_seconds = $s['duration_in_nano_seconds'] ?? 0;
    $this->status_counts = $s['status_counts'] ?? dict[];
    $this->total = $s['total'] ?? 0;
  }
}

type TimeOut = int;

type Timestamp = int;

class UpdateProjectInput {
  public ?ProjectArtifacts $artifacts;
  public ?WrapperBoolean $badge_enabled;
  public ?ProjectCache $cache;
  public ?ProjectDescription $description;
  public ?NonEmptyString $encryption_key;
  public ?ProjectEnvironment $environment;
  public ?ProjectFileSystemLocations $file_system_locations;
  public ?LogsConfig $logs_config;
  public ?NonEmptyString $name;
  public ?TimeOut $queued_timeout_in_minutes;
  public ?ProjectArtifactsList $secondary_artifacts;
  public ?ProjectSecondarySourceVersions $secondary_source_versions;
  public ?ProjectSources $secondary_sources;
  public ?NonEmptyString $service_role;
  public ?ProjectSource $source;
  public string $source_version;
  public ?TagList $tags;
  public ?TimeOut $timeout_in_minutes;
  public ?VpcConfig $vpc_config;

  public function __construct(shape(
    ?'artifacts' => ?ProjectArtifacts,
    ?'badge_enabled' => ?WrapperBoolean,
    ?'cache' => ?ProjectCache,
    ?'description' => ?ProjectDescription,
    ?'encryption_key' => ?NonEmptyString,
    ?'environment' => ?ProjectEnvironment,
    ?'file_system_locations' => ?ProjectFileSystemLocations,
    ?'logs_config' => ?LogsConfig,
    ?'name' => ?NonEmptyString,
    ?'queued_timeout_in_minutes' => ?TimeOut,
    ?'secondary_artifacts' => ?ProjectArtifactsList,
    ?'secondary_source_versions' => ?ProjectSecondarySourceVersions,
    ?'secondary_sources' => ?ProjectSources,
    ?'service_role' => ?NonEmptyString,
    ?'source' => ?ProjectSource,
    ?'source_version' => string,
    ?'tags' => ?TagList,
    ?'timeout_in_minutes' => ?TimeOut,
    ?'vpc_config' => ?VpcConfig,
  ) $s = shape()) {
    $this->artifacts = $s['artifacts'] ?? null;
    $this->badge_enabled = $s['badge_enabled'] ?? false;
    $this->cache = $s['cache'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->encryption_key = $s['encryption_key'] ?? '';
    $this->environment = $s['environment'] ?? null;
    $this->file_system_locations = $s['file_system_locations'] ?? vec[];
    $this->logs_config = $s['logs_config'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->queued_timeout_in_minutes = $s['queued_timeout_in_minutes'] ?? 0;
    $this->secondary_artifacts = $s['secondary_artifacts'] ?? vec[];
    $this->secondary_source_versions = $s['secondary_source_versions'] ?? vec[];
    $this->secondary_sources = $s['secondary_sources'] ?? vec[];
    $this->service_role = $s['service_role'] ?? '';
    $this->source = $s['source'] ?? null;
    $this->source_version = $s['source_version'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->timeout_in_minutes = $s['timeout_in_minutes'] ?? 0;
    $this->vpc_config = $s['vpc_config'] ?? null;
  }
}

class UpdateProjectOutput {
  public ?Project $project;

  public function __construct(shape(
    ?'project' => ?Project,
  ) $s = shape()) {
    $this->project = $s['project'] ?? null;
  }
}

class UpdateReportGroupInput {
  public ?NonEmptyString $arn;
  public ?ReportExportConfig $export_config;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'export_config' => ?ReportExportConfig,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->export_config = $s['export_config'] ?? null;
  }
}

class UpdateReportGroupOutput {
  public ?ReportGroup $report_group;

  public function __construct(shape(
    ?'report_group' => ?ReportGroup,
  ) $s = shape()) {
    $this->report_group = $s['report_group'] ?? null;
  }
}

class UpdateWebhookInput {
  public string $branch_filter;
  public ?FilterGroups $filter_groups;
  public ?ProjectName $project_name;
  public bool $rotate_secret;

  public function __construct(shape(
    ?'branch_filter' => string,
    ?'filter_groups' => ?FilterGroups,
    ?'project_name' => ?ProjectName,
    ?'rotate_secret' => bool,
  ) $s = shape()) {
    $this->branch_filter = $s['branch_filter'] ?? '';
    $this->filter_groups = $s['filter_groups'] ?? vec[];
    $this->project_name = $s['project_name'] ?? '';
    $this->rotate_secret = $s['rotate_secret'] ?? false;
  }
}

class UpdateWebhookOutput {
  public ?Webhook $webhook;

  public function __construct(shape(
    ?'webhook' => ?Webhook,
  ) $s = shape()) {
    $this->webhook = $s['webhook'] ?? null;
  }
}

type ValueInput = string;

class VpcConfig {
  public ?SecurityGroupIds $security_group_ids;
  public ?Subnets $subnets;
  public ?NonEmptyString $vpc_id;

  public function __construct(shape(
    ?'security_group_ids' => ?SecurityGroupIds,
    ?'subnets' => ?Subnets,
    ?'vpc_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnets = $s['subnets'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class Webhook {
  public string $branch_filter;
  public ?FilterGroups $filter_groups;
  public ?Timestamp $last_modified_secret;
  public ?NonEmptyString $payload_url;
  public ?NonEmptyString $secret;
  public ?NonEmptyString $url;

  public function __construct(shape(
    ?'branch_filter' => string,
    ?'filter_groups' => ?FilterGroups,
    ?'last_modified_secret' => ?Timestamp,
    ?'payload_url' => ?NonEmptyString,
    ?'secret' => ?NonEmptyString,
    ?'url' => ?NonEmptyString,
  ) $s = shape()) {
    $this->branch_filter = $s['branch_filter'] ?? '';
    $this->filter_groups = $s['filter_groups'] ?? vec[];
    $this->last_modified_secret = $s['last_modified_secret'] ?? 0;
    $this->payload_url = $s['payload_url'] ?? '';
    $this->secret = $s['secret'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

class WebhookFilter {
  public ?WrapperBoolean $exclude_matched_pattern;
  public string $pattern;
  public ?WebhookFilterType $type;

  public function __construct(shape(
    ?'exclude_matched_pattern' => ?WrapperBoolean,
    ?'pattern' => string,
    ?'type' => ?WebhookFilterType,
  ) $s = shape()) {
    $this->exclude_matched_pattern = $s['exclude_matched_pattern'] ?? false;
    $this->pattern = $s['pattern'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type WebhookFilterType = string;

type WrapperBoolean = bool;

type WrapperInt = int;

type WrapperLong = int;


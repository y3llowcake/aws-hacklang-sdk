<?hh // strict
namespace slack\aws\robomaker;

interface RoboMaker {
  public function BatchDescribeSimulationJob(BatchDescribeSimulationJobRequest) Awaitable<Errors\Result<BatchDescribeSimulationJobResponse>>;
  public function CancelDeploymentJob(CancelDeploymentJobRequest) Awaitable<Errors\Result<CancelDeploymentJobResponse>>;
  public function CancelSimulationJob(CancelSimulationJobRequest) Awaitable<Errors\Result<CancelSimulationJobResponse>>;
  public function CancelSimulationJobBatch(CancelSimulationJobBatchRequest) Awaitable<Errors\Result<CancelSimulationJobBatchResponse>>;
  public function CreateDeploymentJob(CreateDeploymentJobRequest) Awaitable<Errors\Result<CreateDeploymentJobResponse>>;
  public function CreateFleet(CreateFleetRequest) Awaitable<Errors\Result<CreateFleetResponse>>;
  public function CreateRobot(CreateRobotRequest) Awaitable<Errors\Result<CreateRobotResponse>>;
  public function CreateRobotApplication(CreateRobotApplicationRequest) Awaitable<Errors\Result<CreateRobotApplicationResponse>>;
  public function CreateRobotApplicationVersion(CreateRobotApplicationVersionRequest) Awaitable<Errors\Result<CreateRobotApplicationVersionResponse>>;
  public function CreateSimulationApplication(CreateSimulationApplicationRequest) Awaitable<Errors\Result<CreateSimulationApplicationResponse>>;
  public function CreateSimulationApplicationVersion(CreateSimulationApplicationVersionRequest) Awaitable<Errors\Result<CreateSimulationApplicationVersionResponse>>;
  public function CreateSimulationJob(CreateSimulationJobRequest) Awaitable<Errors\Result<CreateSimulationJobResponse>>;
  public function DeleteFleet(DeleteFleetRequest) Awaitable<Errors\Result<DeleteFleetResponse>>;
  public function DeleteRobot(DeleteRobotRequest) Awaitable<Errors\Result<DeleteRobotResponse>>;
  public function DeleteRobotApplication(DeleteRobotApplicationRequest) Awaitable<Errors\Result<DeleteRobotApplicationResponse>>;
  public function DeleteSimulationApplication(DeleteSimulationApplicationRequest) Awaitable<Errors\Result<DeleteSimulationApplicationResponse>>;
  public function DeregisterRobot(DeregisterRobotRequest) Awaitable<Errors\Result<DeregisterRobotResponse>>;
  public function DescribeDeploymentJob(DescribeDeploymentJobRequest) Awaitable<Errors\Result<DescribeDeploymentJobResponse>>;
  public function DescribeFleet(DescribeFleetRequest) Awaitable<Errors\Result<DescribeFleetResponse>>;
  public function DescribeRobot(DescribeRobotRequest) Awaitable<Errors\Result<DescribeRobotResponse>>;
  public function DescribeRobotApplication(DescribeRobotApplicationRequest) Awaitable<Errors\Result<DescribeRobotApplicationResponse>>;
  public function DescribeSimulationApplication(DescribeSimulationApplicationRequest) Awaitable<Errors\Result<DescribeSimulationApplicationResponse>>;
  public function DescribeSimulationJob(DescribeSimulationJobRequest) Awaitable<Errors\Result<DescribeSimulationJobResponse>>;
  public function DescribeSimulationJobBatch(DescribeSimulationJobBatchRequest) Awaitable<Errors\Result<DescribeSimulationJobBatchResponse>>;
  public function ListDeploymentJobs(ListDeploymentJobsRequest) Awaitable<Errors\Result<ListDeploymentJobsResponse>>;
  public function ListFleets(ListFleetsRequest) Awaitable<Errors\Result<ListFleetsResponse>>;
  public function ListRobotApplications(ListRobotApplicationsRequest) Awaitable<Errors\Result<ListRobotApplicationsResponse>>;
  public function ListRobots(ListRobotsRequest) Awaitable<Errors\Result<ListRobotsResponse>>;
  public function ListSimulationApplications(ListSimulationApplicationsRequest) Awaitable<Errors\Result<ListSimulationApplicationsResponse>>;
  public function ListSimulationJobBatches(ListSimulationJobBatchesRequest) Awaitable<Errors\Result<ListSimulationJobBatchesResponse>>;
  public function ListSimulationJobs(ListSimulationJobsRequest) Awaitable<Errors\Result<ListSimulationJobsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function RegisterRobot(RegisterRobotRequest) Awaitable<Errors\Result<RegisterRobotResponse>>;
  public function RestartSimulationJob(RestartSimulationJobRequest) Awaitable<Errors\Result<RestartSimulationJobResponse>>;
  public function StartSimulationJobBatch(StartSimulationJobBatchRequest) Awaitable<Errors\Result<StartSimulationJobBatchResponse>>;
  public function SyncDeploymentJob(SyncDeploymentJobRequest) Awaitable<Errors\Result<SyncDeploymentJobResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateRobotApplication(UpdateRobotApplicationRequest) Awaitable<Errors\Result<UpdateRobotApplicationResponse>>;
  public function UpdateSimulationApplication(UpdateSimulationApplicationRequest) Awaitable<Errors\Result<UpdateSimulationApplicationResponse>>;
}

class Architecture {
}

class Arn {
}

class Arns {
}

class BatchDescribeSimulationJobRequest {
  public Arns $jobs;
}

class BatchDescribeSimulationJobResponse {
  public SimulationJobs $jobs;
  public Arns $unprocessed_jobs;
}

class BatchPolicy {
  public MaxConcurrency $max_concurrency;
  public BatchTimeoutInSeconds $timeout_in_seconds;
}

class BatchTimeoutInSeconds {
}

class Boolean {
}

class BoxedBoolean {
}

class CancelDeploymentJobRequest {
  public Arn $job;
}

class CancelDeploymentJobResponse {
}

class CancelSimulationJobBatchRequest {
  public Arn $batch;
}

class CancelSimulationJobBatchResponse {
}

class CancelSimulationJobRequest {
  public Arn $job;
}

class CancelSimulationJobResponse {
}

class ClientRequestToken {
}

class Command {
}

class Compute {
  public SimulationUnit $simulation_unit_limit;
}

class ComputeResponse {
  public SimulationUnit $simulation_unit_limit;
}

class ConcurrentDeploymentException {
  public errorMessage $message;
}

class CreateDeploymentJobRequest {
  public ClientRequestToken $client_request_token;
  public DeploymentApplicationConfigs $deployment_application_configs;
  public DeploymentConfig $deployment_config;
  public Arn $fleet;
  public TagMap $tags;
}

class CreateDeploymentJobResponse {
  public Arn $arn;
  public CreatedAt $created_at;
  public DeploymentApplicationConfigs $deployment_application_configs;
  public DeploymentConfig $deployment_config;
  public DeploymentJobErrorCode $failure_code;
  public GenericString $failure_reason;
  public Arn $fleet;
  public DeploymentStatus $status;
  public TagMap $tags;
}

class CreateFleetRequest {
  public Name $name;
  public TagMap $tags;
}

class CreateFleetResponse {
  public Arn $arn;
  public CreatedAt $created_at;
  public Name $name;
  public TagMap $tags;
}

class CreateRobotApplicationRequest {
  public Name $name;
  public RobotSoftwareSuite $robot_software_suite;
  public SourceConfigs $sources;
  public TagMap $tags;
}

class CreateRobotApplicationResponse {
  public Arn $arn;
  public LastUpdatedAt $last_updated_at;
  public Name $name;
  public RevisionId $revision_id;
  public RobotSoftwareSuite $robot_software_suite;
  public Sources $sources;
  public TagMap $tags;
  public Version $version;
}

class CreateRobotApplicationVersionRequest {
  public Arn $application;
  public RevisionId $current_revision_id;
}

class CreateRobotApplicationVersionResponse {
  public Arn $arn;
  public LastUpdatedAt $last_updated_at;
  public Name $name;
  public RevisionId $revision_id;
  public RobotSoftwareSuite $robot_software_suite;
  public Sources $sources;
  public Version $version;
}

class CreateRobotRequest {
  public Architecture $architecture;
  public Id $greengrass_group_id;
  public Name $name;
  public TagMap $tags;
}

class CreateRobotResponse {
  public Architecture $architecture;
  public Arn $arn;
  public CreatedAt $created_at;
  public Id $greengrass_group_id;
  public Name $name;
  public TagMap $tags;
}

class CreateSimulationApplicationRequest {
  public Name $name;
  public RenderingEngine $rendering_engine;
  public RobotSoftwareSuite $robot_software_suite;
  public SimulationSoftwareSuite $simulation_software_suite;
  public SourceConfigs $sources;
  public TagMap $tags;
}

class CreateSimulationApplicationResponse {
  public Arn $arn;
  public LastUpdatedAt $last_updated_at;
  public Name $name;
  public RenderingEngine $rendering_engine;
  public RevisionId $revision_id;
  public RobotSoftwareSuite $robot_software_suite;
  public SimulationSoftwareSuite $simulation_software_suite;
  public Sources $sources;
  public TagMap $tags;
  public Version $version;
}

class CreateSimulationApplicationVersionRequest {
  public Arn $application;
  public RevisionId $current_revision_id;
}

class CreateSimulationApplicationVersionResponse {
  public Arn $arn;
  public LastUpdatedAt $last_updated_at;
  public Name $name;
  public RenderingEngine $rendering_engine;
  public RevisionId $revision_id;
  public RobotSoftwareSuite $robot_software_suite;
  public SimulationSoftwareSuite $simulation_software_suite;
  public Sources $sources;
  public Version $version;
}

class CreateSimulationJobRequest {
  public ClientRequestToken $client_request_token;
  public Compute $compute;
  public DataSourceConfigs $data_sources;
  public FailureBehavior $failure_behavior;
  public IamRole $iam_role;
  public LoggingConfig $logging_config;
  public JobDuration $max_job_duration_in_seconds;
  public OutputLocation $output_location;
  public RobotApplicationConfigs $robot_applications;
  public SimulationApplicationConfigs $simulation_applications;
  public TagMap $tags;
  public VPCConfig $vpc_config;
}

class CreateSimulationJobRequests {
}

class CreateSimulationJobResponse {
  public Arn $arn;
  public ClientRequestToken $client_request_token;
  public ComputeResponse $compute;
  public DataSources $data_sources;
  public FailureBehavior $failure_behavior;
  public SimulationJobErrorCode $failure_code;
  public IamRole $iam_role;
  public LastStartedAt $last_started_at;
  public LastUpdatedAt $last_updated_at;
  public LoggingConfig $logging_config;
  public JobDuration $max_job_duration_in_seconds;
  public OutputLocation $output_location;
  public RobotApplicationConfigs $robot_applications;
  public SimulationApplicationConfigs $simulation_applications;
  public SimulationTimeMillis $simulation_time_millis;
  public SimulationJobStatus $status;
  public TagMap $tags;
  public VPCConfigResponse $vpc_config;
}

class CreatedAt {
}

class DataSource {
  public Name $name;
  public S3Bucket $s_3_bucket;
  public S3KeyOutputs $s_3_keys;
}

class DataSourceConfig {
  public Name $name;
  public S3Bucket $s_3_bucket;
  public S3Keys $s_3_keys;
}

class DataSourceConfigs {
}

class DataSourceNames {
}

class DataSources {
}

class DeleteFleetRequest {
  public Arn $fleet;
}

class DeleteFleetResponse {
}

class DeleteRobotApplicationRequest {
  public Arn $application;
  public Version $application_version;
}

class DeleteRobotApplicationResponse {
}

class DeleteRobotRequest {
  public Arn $robot;
}

class DeleteRobotResponse {
}

class DeleteSimulationApplicationRequest {
  public Arn $application;
  public Version $application_version;
}

class DeleteSimulationApplicationResponse {
}

class DeploymentApplicationConfig {
  public Arn $application;
  public DeploymentVersion $application_version;
  public DeploymentLaunchConfig $launch_config;
}

class DeploymentApplicationConfigs {
}

class DeploymentConfig {
  public Percentage $concurrent_deployment_percentage;
  public S3Object $download_condition_file;
  public Percentage $failure_threshold_percentage;
  public DeploymentTimeout $robot_deployment_timeout_in_seconds;
}

class DeploymentJob {
  public Arn $arn;
  public CreatedAt $created_at;
  public DeploymentApplicationConfigs $deployment_application_configs;
  public DeploymentConfig $deployment_config;
  public DeploymentJobErrorCode $failure_code;
  public GenericString $failure_reason;
  public Arn $fleet;
  public DeploymentStatus $status;
}

class DeploymentJobErrorCode {
}

class DeploymentJobs {
}

class DeploymentLaunchConfig {
  public EnvironmentVariableMap $environment_variables;
  public Command $launch_file;
  public Command $package_name;
  public Path $post_launch_file;
  public Path $pre_launch_file;
}

class DeploymentStatus {
}

class DeploymentTimeout {
}

class DeploymentVersion {
}

class DeregisterRobotRequest {
  public Arn $fleet;
  public Arn $robot;
}

class DeregisterRobotResponse {
  public Arn $fleet;
  public Arn $robot;
}

class DescribeDeploymentJobRequest {
  public Arn $job;
}

class DescribeDeploymentJobResponse {
  public Arn $arn;
  public CreatedAt $created_at;
  public DeploymentApplicationConfigs $deployment_application_configs;
  public DeploymentConfig $deployment_config;
  public DeploymentJobErrorCode $failure_code;
  public GenericString $failure_reason;
  public Arn $fleet;
  public RobotDeploymentSummary $robot_deployment_summary;
  public DeploymentStatus $status;
  public TagMap $tags;
}

class DescribeFleetRequest {
  public Arn $fleet;
}

class DescribeFleetResponse {
  public Arn $arn;
  public CreatedAt $created_at;
  public Arn $last_deployment_job;
  public DeploymentStatus $last_deployment_status;
  public CreatedAt $last_deployment_time;
  public Name $name;
  public Robots $robots;
  public TagMap $tags;
}

class DescribeRobotApplicationRequest {
  public Arn $application;
  public Version $application_version;
}

class DescribeRobotApplicationResponse {
  public Arn $arn;
  public LastUpdatedAt $last_updated_at;
  public Name $name;
  public RevisionId $revision_id;
  public RobotSoftwareSuite $robot_software_suite;
  public Sources $sources;
  public TagMap $tags;
  public Version $version;
}

class DescribeRobotRequest {
  public Arn $robot;
}

class DescribeRobotResponse {
  public Architecture $architecture;
  public Arn $arn;
  public CreatedAt $created_at;
  public Arn $fleet_arn;
  public Id $greengrass_group_id;
  public Arn $last_deployment_job;
  public CreatedAt $last_deployment_time;
  public Name $name;
  public RobotStatus $status;
  public TagMap $tags;
}

class DescribeSimulationApplicationRequest {
  public Arn $application;
  public Version $application_version;
}

class DescribeSimulationApplicationResponse {
  public Arn $arn;
  public LastUpdatedAt $last_updated_at;
  public Name $name;
  public RenderingEngine $rendering_engine;
  public RevisionId $revision_id;
  public RobotSoftwareSuite $robot_software_suite;
  public SimulationSoftwareSuite $simulation_software_suite;
  public Sources $sources;
  public TagMap $tags;
  public Version $version;
}

class DescribeSimulationJobBatchRequest {
  public Arn $batch;
}

class DescribeSimulationJobBatchResponse {
  public Arn $arn;
  public BatchPolicy $batch_policy;
  public ClientRequestToken $client_request_token;
  public CreatedAt $created_at;
  public SimulationJobSummaries $created_requests;
  public FailedCreateSimulationJobRequests $failed_requests;
  public SimulationJobBatchErrorCode $failure_code;
  public GenericString $failure_reason;
  public LastUpdatedAt $last_updated_at;
  public CreateSimulationJobRequests $pending_requests;
  public SimulationJobBatchStatus $status;
  public TagMap $tags;
}

class DescribeSimulationJobRequest {
  public Arn $job;
}

class DescribeSimulationJobResponse {
  public Arn $arn;
  public ClientRequestToken $client_request_token;
  public ComputeResponse $compute;
  public DataSources $data_sources;
  public FailureBehavior $failure_behavior;
  public SimulationJobErrorCode $failure_code;
  public GenericString $failure_reason;
  public IamRole $iam_role;
  public LastStartedAt $last_started_at;
  public LastUpdatedAt $last_updated_at;
  public LoggingConfig $logging_config;
  public JobDuration $max_job_duration_in_seconds;
  public Name $name;
  public NetworkInterface $network_interface;
  public OutputLocation $output_location;
  public RobotApplicationConfigs $robot_applications;
  public SimulationApplicationConfigs $simulation_applications;
  public SimulationTimeMillis $simulation_time_millis;
  public SimulationJobStatus $status;
  public TagMap $tags;
  public VPCConfigResponse $vpc_config;
}

class EnvironmentVariableKey {
}

class EnvironmentVariableMap {
}

class EnvironmentVariableValue {
}

class FailedAt {
}

class FailedCreateSimulationJobRequest {
  public FailedAt $failed_at;
  public SimulationJobErrorCode $failure_code;
  public GenericString $failure_reason;
  public SimulationJobRequest $request;
}

class FailedCreateSimulationJobRequests {
}

class FailureBehavior {
}

class Filter {
  public Name $name;
  public FilterValues $values;
}

class FilterValues {
}

class Filters {
}

class Fleet {
  public Arn $arn;
  public CreatedAt $created_at;
  public Arn $last_deployment_job;
  public DeploymentStatus $last_deployment_status;
  public CreatedAt $last_deployment_time;
  public Name $name;
}

class Fleets {
}

class GenericInteger {
}

class GenericString {
}

class IamRole {
}

class Id {
}

class IdempotentParameterMismatchException {
  public errorMessage $message;
}

class Integer {
}

class InternalServerException {
  public errorMessage $message;
}

class InvalidParameterException {
  public errorMessage $message;
}

class JobDuration {
}

class LastStartedAt {
}

class LastUpdatedAt {
}

class LaunchConfig {
  public EnvironmentVariableMap $environment_variables;
  public Command $launch_file;
  public Command $package_name;
  public PortForwardingConfig $port_forwarding_config;
  public boolean $stream_ui;
}

class LimitExceededException {
  public errorMessage $message;
}

class ListDeploymentJobsRequest {
  public Filters $filters;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListDeploymentJobsResponse {
  public DeploymentJobs $deployment_jobs;
  public PaginationToken $next_token;
}

class ListFleetsRequest {
  public Filters $filters;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListFleetsResponse {
  public Fleets $fleet_details;
  public PaginationToken $next_token;
}

class ListRobotApplicationsRequest {
  public Filters $filters;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public VersionQualifier $version_qualifier;
}

class ListRobotApplicationsResponse {
  public PaginationToken $next_token;
  public RobotApplicationSummaries $robot_application_summaries;
}

class ListRobotsRequest {
  public Filters $filters;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListRobotsResponse {
  public PaginationToken $next_token;
  public Robots $robots;
}

class ListSimulationApplicationsRequest {
  public Filters $filters;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public VersionQualifier $version_qualifier;
}

class ListSimulationApplicationsResponse {
  public PaginationToken $next_token;
  public SimulationApplicationSummaries $simulation_application_summaries;
}

class ListSimulationJobBatchesRequest {
  public Filters $filters;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListSimulationJobBatchesResponse {
  public PaginationToken $next_token;
  public SimulationJobBatchSummaries $simulation_job_batch_summaries;
}

class ListSimulationJobsRequest {
  public Filters $filters;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListSimulationJobsResponse {
  public PaginationToken $next_token;
  public SimulationJobSummaries $simulation_job_summaries;
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class LoggingConfig {
  public BoxedBoolean $record_all_ros_topics;
}

class MaxConcurrency {
}

class MaxResults {
}

class Name {
}

class NetworkInterface {
  public GenericString $network_interface_id;
  public GenericString $private_ip_address;
  public GenericString $public_ip_address;
}

class NonEmptyString {
}

class NonSystemPort {
}

class OutputLocation {
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_prefix;
}

class PaginationToken {
}

class Path {
}

class PercentDone {
}

class Percentage {
}

class Port {
}

class PortForwardingConfig {
  public PortMappingList $port_mappings;
}

class PortMapping {
  public NonSystemPort $application_port;
  public boolean $enable_on_public_ip;
  public Port $job_port;
}

class PortMappingList {
}

class ProgressDetail {
  public RobotDeploymentStep $current_progress;
  public GenericInteger $estimated_time_remaining_seconds;
  public PercentDone $percent_done;
  public GenericString $target_resource;
}

class RegisterRobotRequest {
  public Arn $fleet;
  public Arn $robot;
}

class RegisterRobotResponse {
  public Arn $fleet;
  public Arn $robot;
}

class RenderingEngine {
  public RenderingEngineType $name;
  public RenderingEngineVersionType $version;
}

class RenderingEngineType {
}

class RenderingEngineVersionType {
}

class ResourceAlreadyExistsException {
  public errorMessage $message;
}

class ResourceNotFoundException {
  public errorMessage $message;
}

class RestartSimulationJobRequest {
  public Arn $job;
}

class RestartSimulationJobResponse {
}

class RevisionId {
}

class Robot {
  public Architecture $architecture;
  public Arn $arn;
  public CreatedAt $created_at;
  public Arn $fleet_arn;
  public Id $green_grass_group_id;
  public Arn $last_deployment_job;
  public CreatedAt $last_deployment_time;
  public Name $name;
  public RobotStatus $status;
}

class RobotApplicationConfig {
  public Arn $application;
  public Version $application_version;
  public LaunchConfig $launch_config;
}

class RobotApplicationConfigs {
}

class RobotApplicationNames {
}

class RobotApplicationSummaries {
}

class RobotApplicationSummary {
  public Arn $arn;
  public LastUpdatedAt $last_updated_at;
  public Name $name;
  public RobotSoftwareSuite $robot_software_suite;
  public Version $version;
}

class RobotDeployment {
  public Arn $arn;
  public CreatedAt $deployment_finish_time;
  public CreatedAt $deployment_start_time;
  public DeploymentJobErrorCode $failure_code;
  public GenericString $failure_reason;
  public ProgressDetail $progress_detail;
  public RobotStatus $status;
}

class RobotDeploymentStep {
}

class RobotDeploymentSummary {
}

class RobotSoftwareSuite {
  public RobotSoftwareSuiteType $name;
  public RobotSoftwareSuiteVersionType $version;
}

class RobotSoftwareSuiteType {
}

class RobotSoftwareSuiteVersionType {
}

class RobotStatus {
}

class Robots {
}

class S3Bucket {
}

class S3Etag {
}

class S3Key {
}

class S3KeyOutput {
  public S3Etag $etag;
  public S3Key $s_3_key;
}

class S3KeyOutputs {
}

class S3Keys {
}

class S3Object {
  public S3Bucket $bucket;
  public S3Etag $etag;
  public S3Key $key;
}

class SecurityGroups {
}

class ServiceUnavailableException {
  public errorMessage $message;
}

class SimulationApplicationConfig {
  public Arn $application;
  public Version $application_version;
  public LaunchConfig $launch_config;
}

class SimulationApplicationConfigs {
}

class SimulationApplicationNames {
}

class SimulationApplicationSummaries {
}

class SimulationApplicationSummary {
  public Arn $arn;
  public LastUpdatedAt $last_updated_at;
  public Name $name;
  public RobotSoftwareSuite $robot_software_suite;
  public SimulationSoftwareSuite $simulation_software_suite;
  public Version $version;
}

class SimulationJob {
  public Arn $arn;
  public ClientRequestToken $client_request_token;
  public ComputeResponse $compute;
  public DataSources $data_sources;
  public FailureBehavior $failure_behavior;
  public SimulationJobErrorCode $failure_code;
  public GenericString $failure_reason;
  public IamRole $iam_role;
  public LastStartedAt $last_started_at;
  public LastUpdatedAt $last_updated_at;
  public LoggingConfig $logging_config;
  public JobDuration $max_job_duration_in_seconds;
  public Name $name;
  public NetworkInterface $network_interface;
  public OutputLocation $output_location;
  public RobotApplicationConfigs $robot_applications;
  public SimulationApplicationConfigs $simulation_applications;
  public SimulationTimeMillis $simulation_time_millis;
  public SimulationJobStatus $status;
  public TagMap $tags;
  public VPCConfigResponse $vpc_config;
}

class SimulationJobBatchErrorCode {
}

class SimulationJobBatchStatus {
}

class SimulationJobBatchSummaries {
}

class SimulationJobBatchSummary {
  public Arn $arn;
  public CreatedAt $created_at;
  public int $created_request_count;
  public int $failed_request_count;
  public LastUpdatedAt $last_updated_at;
  public int $pending_request_count;
  public SimulationJobBatchStatus $status;
}

class SimulationJobErrorCode {
}

class SimulationJobRequest {
  public Compute $compute;
  public DataSourceConfigs $data_sources;
  public FailureBehavior $failure_behavior;
  public IamRole $iam_role;
  public LoggingConfig $logging_config;
  public JobDuration $max_job_duration_in_seconds;
  public OutputLocation $output_location;
  public RobotApplicationConfigs $robot_applications;
  public SimulationApplicationConfigs $simulation_applications;
  public TagMap $tags;
  public BoxedBoolean $use_default_applications;
  public VPCConfig $vpc_config;
}

class SimulationJobStatus {
}

class SimulationJobSummaries {
}

class SimulationJobSummary {
  public Arn $arn;
  public DataSourceNames $data_source_names;
  public LastUpdatedAt $last_updated_at;
  public Name $name;
  public RobotApplicationNames $robot_application_names;
  public SimulationApplicationNames $simulation_application_names;
  public SimulationJobStatus $status;
}

class SimulationJobs {
}

class SimulationSoftwareSuite {
  public SimulationSoftwareSuiteType $name;
  public SimulationSoftwareSuiteVersionType $version;
}

class SimulationSoftwareSuiteType {
}

class SimulationSoftwareSuiteVersionType {
}

class SimulationTimeMillis {
}

class SimulationUnit {
}

class Source {
  public Architecture $architecture;
  public S3Etag $etag;
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_key;
}

class SourceConfig {
  public Architecture $architecture;
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_key;
}

class SourceConfigs {
}

class Sources {
}

class StartSimulationJobBatchRequest {
  public BatchPolicy $batch_policy;
  public ClientRequestToken $client_request_token;
  public CreateSimulationJobRequests $create_simulation_job_requests;
  public TagMap $tags;
}

class StartSimulationJobBatchResponse {
  public Arn $arn;
  public BatchPolicy $batch_policy;
  public ClientRequestToken $client_request_token;
  public CreatedAt $created_at;
  public SimulationJobSummaries $created_requests;
  public FailedCreateSimulationJobRequests $failed_requests;
  public SimulationJobBatchErrorCode $failure_code;
  public GenericString $failure_reason;
  public CreateSimulationJobRequests $pending_requests;
  public SimulationJobBatchStatus $status;
  public TagMap $tags;
}

class Subnets {
}

class SyncDeploymentJobRequest {
  public ClientRequestToken $client_request_token;
  public Arn $fleet;
}

class SyncDeploymentJobResponse {
  public Arn $arn;
  public CreatedAt $created_at;
  public DeploymentApplicationConfigs $deployment_application_configs;
  public DeploymentConfig $deployment_config;
  public DeploymentJobErrorCode $failure_code;
  public GenericString $failure_reason;
  public Arn $fleet;
  public DeploymentStatus $status;
}

class TagKey {
}

class TagKeyList {
}

class TagMap {
}

class TagResourceRequest {
  public Arn $resource_arn;
  public TagMap $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class ThrottlingException {
  public errorMessage $message;
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateRobotApplicationRequest {
  public Arn $application;
  public RevisionId $current_revision_id;
  public RobotSoftwareSuite $robot_software_suite;
  public SourceConfigs $sources;
}

class UpdateRobotApplicationResponse {
  public Arn $arn;
  public LastUpdatedAt $last_updated_at;
  public Name $name;
  public RevisionId $revision_id;
  public RobotSoftwareSuite $robot_software_suite;
  public Sources $sources;
  public Version $version;
}

class UpdateSimulationApplicationRequest {
  public Arn $application;
  public RevisionId $current_revision_id;
  public RenderingEngine $rendering_engine;
  public RobotSoftwareSuite $robot_software_suite;
  public SimulationSoftwareSuite $simulation_software_suite;
  public SourceConfigs $sources;
}

class UpdateSimulationApplicationResponse {
  public Arn $arn;
  public LastUpdatedAt $last_updated_at;
  public Name $name;
  public RenderingEngine $rendering_engine;
  public RevisionId $revision_id;
  public RobotSoftwareSuite $robot_software_suite;
  public SimulationSoftwareSuite $simulation_software_suite;
  public Sources $sources;
  public Version $version;
}

class VPCConfig {
  public boolean $assign_public_ip;
  public SecurityGroups $security_groups;
  public Subnets $subnets;
}

class VPCConfigResponse {
  public boolean $assign_public_ip;
  public SecurityGroups $security_groups;
  public Subnets $subnets;
  public GenericString $vpc_id;
}

class Version {
}

class VersionQualifier {
}

class errorMessage {
}


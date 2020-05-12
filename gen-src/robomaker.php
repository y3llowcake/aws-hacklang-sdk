<?hh // strict
namespace slack\aws\robomaker;

interface RoboMaker {
  public function BatchDescribeSimulationJob(BatchDescribeSimulationJobRequest $in): Awaitable<\Errors\Result<BatchDescribeSimulationJobResponse>>;
  public function CancelDeploymentJob(CancelDeploymentJobRequest $in): Awaitable<\Errors\Result<CancelDeploymentJobResponse>>;
  public function CancelSimulationJob(CancelSimulationJobRequest $in): Awaitable<\Errors\Result<CancelSimulationJobResponse>>;
  public function CancelSimulationJobBatch(CancelSimulationJobBatchRequest $in): Awaitable<\Errors\Result<CancelSimulationJobBatchResponse>>;
  public function CreateDeploymentJob(CreateDeploymentJobRequest $in): Awaitable<\Errors\Result<CreateDeploymentJobResponse>>;
  public function CreateFleet(CreateFleetRequest $in): Awaitable<\Errors\Result<CreateFleetResponse>>;
  public function CreateRobot(CreateRobotRequest $in): Awaitable<\Errors\Result<CreateRobotResponse>>;
  public function CreateRobotApplication(CreateRobotApplicationRequest $in): Awaitable<\Errors\Result<CreateRobotApplicationResponse>>;
  public function CreateRobotApplicationVersion(CreateRobotApplicationVersionRequest $in): Awaitable<\Errors\Result<CreateRobotApplicationVersionResponse>>;
  public function CreateSimulationApplication(CreateSimulationApplicationRequest $in): Awaitable<\Errors\Result<CreateSimulationApplicationResponse>>;
  public function CreateSimulationApplicationVersion(CreateSimulationApplicationVersionRequest $in): Awaitable<\Errors\Result<CreateSimulationApplicationVersionResponse>>;
  public function CreateSimulationJob(CreateSimulationJobRequest $in): Awaitable<\Errors\Result<CreateSimulationJobResponse>>;
  public function DeleteFleet(DeleteFleetRequest $in): Awaitable<\Errors\Result<DeleteFleetResponse>>;
  public function DeleteRobot(DeleteRobotRequest $in): Awaitable<\Errors\Result<DeleteRobotResponse>>;
  public function DeleteRobotApplication(DeleteRobotApplicationRequest $in): Awaitable<\Errors\Result<DeleteRobotApplicationResponse>>;
  public function DeleteSimulationApplication(DeleteSimulationApplicationRequest $in): Awaitable<\Errors\Result<DeleteSimulationApplicationResponse>>;
  public function DeregisterRobot(DeregisterRobotRequest $in): Awaitable<\Errors\Result<DeregisterRobotResponse>>;
  public function DescribeDeploymentJob(DescribeDeploymentJobRequest $in): Awaitable<\Errors\Result<DescribeDeploymentJobResponse>>;
  public function DescribeFleet(DescribeFleetRequest $in): Awaitable<\Errors\Result<DescribeFleetResponse>>;
  public function DescribeRobot(DescribeRobotRequest $in): Awaitable<\Errors\Result<DescribeRobotResponse>>;
  public function DescribeRobotApplication(DescribeRobotApplicationRequest $in): Awaitable<\Errors\Result<DescribeRobotApplicationResponse>>;
  public function DescribeSimulationApplication(DescribeSimulationApplicationRequest $in): Awaitable<\Errors\Result<DescribeSimulationApplicationResponse>>;
  public function DescribeSimulationJob(DescribeSimulationJobRequest $in): Awaitable<\Errors\Result<DescribeSimulationJobResponse>>;
  public function DescribeSimulationJobBatch(DescribeSimulationJobBatchRequest $in): Awaitable<\Errors\Result<DescribeSimulationJobBatchResponse>>;
  public function ListDeploymentJobs(ListDeploymentJobsRequest $in): Awaitable<\Errors\Result<ListDeploymentJobsResponse>>;
  public function ListFleets(ListFleetsRequest $in): Awaitable<\Errors\Result<ListFleetsResponse>>;
  public function ListRobotApplications(ListRobotApplicationsRequest $in): Awaitable<\Errors\Result<ListRobotApplicationsResponse>>;
  public function ListRobots(ListRobotsRequest $in): Awaitable<\Errors\Result<ListRobotsResponse>>;
  public function ListSimulationApplications(ListSimulationApplicationsRequest $in): Awaitable<\Errors\Result<ListSimulationApplicationsResponse>>;
  public function ListSimulationJobBatches(ListSimulationJobBatchesRequest $in): Awaitable<\Errors\Result<ListSimulationJobBatchesResponse>>;
  public function ListSimulationJobs(ListSimulationJobsRequest $in): Awaitable<\Errors\Result<ListSimulationJobsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function RegisterRobot(RegisterRobotRequest $in): Awaitable<\Errors\Result<RegisterRobotResponse>>;
  public function RestartSimulationJob(RestartSimulationJobRequest $in): Awaitable<\Errors\Result<RestartSimulationJobResponse>>;
  public function StartSimulationJobBatch(StartSimulationJobBatchRequest $in): Awaitable<\Errors\Result<StartSimulationJobBatchResponse>>;
  public function SyncDeploymentJob(SyncDeploymentJobRequest $in): Awaitable<\Errors\Result<SyncDeploymentJobResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateRobotApplication(UpdateRobotApplicationRequest $in): Awaitable<\Errors\Result<UpdateRobotApplicationResponse>>;
  public function UpdateSimulationApplication(UpdateSimulationApplicationRequest $in): Awaitable<\Errors\Result<UpdateSimulationApplicationResponse>>;
}

type Architecture = string;

type Arn = string;

type Arns = vec<Arn>;

class BatchDescribeSimulationJobRequest {
  public ?Arns $jobs;

  public function __construct(shape(
    ?'jobs' => ?Arns,
  ) $s = shape()) {
    $this->jobs = $s['jobs'] ?? vec[];
  }
}

class BatchDescribeSimulationJobResponse {
  public ?SimulationJobs $jobs;
  public ?Arns $unprocessed_jobs;

  public function __construct(shape(
    ?'jobs' => ?SimulationJobs,
    ?'unprocessed_jobs' => ?Arns,
  ) $s = shape()) {
    $this->jobs = $s['jobs'] ?? vec[];
    $this->unprocessed_jobs = $s['unprocessed_jobs'] ?? vec[];
  }
}

class BatchPolicy {
  public ?MaxConcurrency $max_concurrency;
  public ?BatchTimeoutInSeconds $timeout_in_seconds;

  public function __construct(shape(
    ?'max_concurrency' => ?MaxConcurrency,
    ?'timeout_in_seconds' => ?BatchTimeoutInSeconds,
  ) $s = shape()) {
    $this->max_concurrency = $s['max_concurrency'] ?? 0;
    $this->timeout_in_seconds = $s['timeout_in_seconds'] ?? 0;
  }
}

type BatchTimeoutInSeconds = int;

type Boolean = bool;

type BoxedBoolean = bool;

class CancelDeploymentJobRequest {
  public ?Arn $job;

  public function __construct(shape(
    ?'job' => ?Arn,
  ) $s = shape()) {
    $this->job = $s['job'] ?? '';
  }
}

class CancelDeploymentJobResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CancelSimulationJobBatchRequest {
  public ?Arn $batch;

  public function __construct(shape(
    ?'batch' => ?Arn,
  ) $s = shape()) {
    $this->batch = $s['batch'] ?? '';
  }
}

class CancelSimulationJobBatchResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CancelSimulationJobRequest {
  public ?Arn $job;

  public function __construct(shape(
    ?'job' => ?Arn,
  ) $s = shape()) {
    $this->job = $s['job'] ?? '';
  }
}

class CancelSimulationJobResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ClientRequestToken = string;

type Command = string;

class Compute {
  public ?SimulationUnit $simulation_unit_limit;

  public function __construct(shape(
    ?'simulation_unit_limit' => ?SimulationUnit,
  ) $s = shape()) {
    $this->simulation_unit_limit = $s['simulation_unit_limit'] ?? 0;
  }
}

class ComputeResponse {
  public ?SimulationUnit $simulation_unit_limit;

  public function __construct(shape(
    ?'simulation_unit_limit' => ?SimulationUnit,
  ) $s = shape()) {
    $this->simulation_unit_limit = $s['simulation_unit_limit'] ?? 0;
  }
}

class ConcurrentDeploymentException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CreateDeploymentJobRequest {
  public ?ClientRequestToken $client_request_token;
  public ?DeploymentApplicationConfigs $deployment_application_configs;
  public ?DeploymentConfig $deployment_config;
  public ?Arn $fleet;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'deployment_application_configs' => ?DeploymentApplicationConfigs,
    ?'deployment_config' => ?DeploymentConfig,
    ?'fleet' => ?Arn,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->deployment_application_configs = $s['deployment_application_configs'] ?? vec[];
    $this->deployment_config = $s['deployment_config'] ?? null;
    $this->fleet = $s['fleet'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateDeploymentJobResponse {
  public ?Arn $arn;
  public ?CreatedAt $created_at;
  public ?DeploymentApplicationConfigs $deployment_application_configs;
  public ?DeploymentConfig $deployment_config;
  public ?DeploymentJobErrorCode $failure_code;
  public ?GenericString $failure_reason;
  public ?Arn $fleet;
  public ?DeploymentStatus $status;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_at' => ?CreatedAt,
    ?'deployment_application_configs' => ?DeploymentApplicationConfigs,
    ?'deployment_config' => ?DeploymentConfig,
    ?'failure_code' => ?DeploymentJobErrorCode,
    ?'failure_reason' => ?GenericString,
    ?'fleet' => ?Arn,
    ?'status' => ?DeploymentStatus,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->deployment_application_configs = $s['deployment_application_configs'] ?? vec[];
    $this->deployment_config = $s['deployment_config'] ?? null;
    $this->failure_code = $s['failure_code'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->fleet = $s['fleet'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateFleetRequest {
  public ?Name $name;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'name' => ?Name,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateFleetResponse {
  public ?Arn $arn;
  public ?CreatedAt $created_at;
  public ?Name $name;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_at' => ?CreatedAt,
    ?'name' => ?Name,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateRobotApplicationRequest {
  public ?Name $name;
  public ?RobotSoftwareSuite $robot_software_suite;
  public ?SourceConfigs $sources;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'name' => ?Name,
    ?'robot_software_suite' => ?RobotSoftwareSuite,
    ?'sources' => ?SourceConfigs,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->robot_software_suite = $s['robot_software_suite'] ?? null;
    $this->sources = $s['sources'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateRobotApplicationResponse {
  public ?Arn $arn;
  public ?LastUpdatedAt $last_updated_at;
  public ?Name $name;
  public ?RevisionId $revision_id;
  public ?RobotSoftwareSuite $robot_software_suite;
  public ?Sources $sources;
  public ?TagMap $tags;
  public ?Version $version;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'last_updated_at' => ?LastUpdatedAt,
    ?'name' => ?Name,
    ?'revision_id' => ?RevisionId,
    ?'robot_software_suite' => ?RobotSoftwareSuite,
    ?'sources' => ?Sources,
    ?'tags' => ?TagMap,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
    $this->robot_software_suite = $s['robot_software_suite'] ?? null;
    $this->sources = $s['sources'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->version = $s['version'] ?? '';
  }
}

class CreateRobotApplicationVersionRequest {
  public ?Arn $application;
  public ?RevisionId $current_revision_id;

  public function __construct(shape(
    ?'application' => ?Arn,
    ?'current_revision_id' => ?RevisionId,
  ) $s = shape()) {
    $this->application = $s['application'] ?? '';
    $this->current_revision_id = $s['current_revision_id'] ?? '';
  }
}

class CreateRobotApplicationVersionResponse {
  public ?Arn $arn;
  public ?LastUpdatedAt $last_updated_at;
  public ?Name $name;
  public ?RevisionId $revision_id;
  public ?RobotSoftwareSuite $robot_software_suite;
  public ?Sources $sources;
  public ?Version $version;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'last_updated_at' => ?LastUpdatedAt,
    ?'name' => ?Name,
    ?'revision_id' => ?RevisionId,
    ?'robot_software_suite' => ?RobotSoftwareSuite,
    ?'sources' => ?Sources,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
    $this->robot_software_suite = $s['robot_software_suite'] ?? null;
    $this->sources = $s['sources'] ?? vec[];
    $this->version = $s['version'] ?? '';
  }
}

class CreateRobotRequest {
  public ?Architecture $architecture;
  public ?Id $greengrass_group_id;
  public ?Name $name;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'architecture' => ?Architecture,
    ?'greengrass_group_id' => ?Id,
    ?'name' => ?Name,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->architecture = $s['architecture'] ?? '';
    $this->greengrass_group_id = $s['greengrass_group_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateRobotResponse {
  public ?Architecture $architecture;
  public ?Arn $arn;
  public ?CreatedAt $created_at;
  public ?Id $greengrass_group_id;
  public ?Name $name;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'architecture' => ?Architecture,
    ?'arn' => ?Arn,
    ?'created_at' => ?CreatedAt,
    ?'greengrass_group_id' => ?Id,
    ?'name' => ?Name,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->architecture = $s['architecture'] ?? '';
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->greengrass_group_id = $s['greengrass_group_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateSimulationApplicationRequest {
  public ?Name $name;
  public ?RenderingEngine $rendering_engine;
  public ?RobotSoftwareSuite $robot_software_suite;
  public ?SimulationSoftwareSuite $simulation_software_suite;
  public ?SourceConfigs $sources;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'name' => ?Name,
    ?'rendering_engine' => ?RenderingEngine,
    ?'robot_software_suite' => ?RobotSoftwareSuite,
    ?'simulation_software_suite' => ?SimulationSoftwareSuite,
    ?'sources' => ?SourceConfigs,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->rendering_engine = $s['rendering_engine'] ?? null;
    $this->robot_software_suite = $s['robot_software_suite'] ?? null;
    $this->simulation_software_suite = $s['simulation_software_suite'] ?? null;
    $this->sources = $s['sources'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateSimulationApplicationResponse {
  public ?Arn $arn;
  public ?LastUpdatedAt $last_updated_at;
  public ?Name $name;
  public ?RenderingEngine $rendering_engine;
  public ?RevisionId $revision_id;
  public ?RobotSoftwareSuite $robot_software_suite;
  public ?SimulationSoftwareSuite $simulation_software_suite;
  public ?Sources $sources;
  public ?TagMap $tags;
  public ?Version $version;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'last_updated_at' => ?LastUpdatedAt,
    ?'name' => ?Name,
    ?'rendering_engine' => ?RenderingEngine,
    ?'revision_id' => ?RevisionId,
    ?'robot_software_suite' => ?RobotSoftwareSuite,
    ?'simulation_software_suite' => ?SimulationSoftwareSuite,
    ?'sources' => ?Sources,
    ?'tags' => ?TagMap,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->rendering_engine = $s['rendering_engine'] ?? null;
    $this->revision_id = $s['revision_id'] ?? '';
    $this->robot_software_suite = $s['robot_software_suite'] ?? null;
    $this->simulation_software_suite = $s['simulation_software_suite'] ?? null;
    $this->sources = $s['sources'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->version = $s['version'] ?? '';
  }
}

class CreateSimulationApplicationVersionRequest {
  public ?Arn $application;
  public ?RevisionId $current_revision_id;

  public function __construct(shape(
    ?'application' => ?Arn,
    ?'current_revision_id' => ?RevisionId,
  ) $s = shape()) {
    $this->application = $s['application'] ?? '';
    $this->current_revision_id = $s['current_revision_id'] ?? '';
  }
}

class CreateSimulationApplicationVersionResponse {
  public ?Arn $arn;
  public ?LastUpdatedAt $last_updated_at;
  public ?Name $name;
  public ?RenderingEngine $rendering_engine;
  public ?RevisionId $revision_id;
  public ?RobotSoftwareSuite $robot_software_suite;
  public ?SimulationSoftwareSuite $simulation_software_suite;
  public ?Sources $sources;
  public ?Version $version;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'last_updated_at' => ?LastUpdatedAt,
    ?'name' => ?Name,
    ?'rendering_engine' => ?RenderingEngine,
    ?'revision_id' => ?RevisionId,
    ?'robot_software_suite' => ?RobotSoftwareSuite,
    ?'simulation_software_suite' => ?SimulationSoftwareSuite,
    ?'sources' => ?Sources,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->rendering_engine = $s['rendering_engine'] ?? null;
    $this->revision_id = $s['revision_id'] ?? '';
    $this->robot_software_suite = $s['robot_software_suite'] ?? null;
    $this->simulation_software_suite = $s['simulation_software_suite'] ?? null;
    $this->sources = $s['sources'] ?? vec[];
    $this->version = $s['version'] ?? '';
  }
}

class CreateSimulationJobRequest {
  public ?ClientRequestToken $client_request_token;
  public ?Compute $compute;
  public ?DataSourceConfigs $data_sources;
  public ?FailureBehavior $failure_behavior;
  public ?IamRole $iam_role;
  public ?LoggingConfig $logging_config;
  public ?JobDuration $max_job_duration_in_seconds;
  public ?OutputLocation $output_location;
  public ?RobotApplicationConfigs $robot_applications;
  public ?SimulationApplicationConfigs $simulation_applications;
  public ?TagMap $tags;
  public ?VPCConfig $vpc_config;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'compute' => ?Compute,
    ?'data_sources' => ?DataSourceConfigs,
    ?'failure_behavior' => ?FailureBehavior,
    ?'iam_role' => ?IamRole,
    ?'logging_config' => ?LoggingConfig,
    ?'max_job_duration_in_seconds' => ?JobDuration,
    ?'output_location' => ?OutputLocation,
    ?'robot_applications' => ?RobotApplicationConfigs,
    ?'simulation_applications' => ?SimulationApplicationConfigs,
    ?'tags' => ?TagMap,
    ?'vpc_config' => ?VPCConfig,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->compute = $s['compute'] ?? null;
    $this->data_sources = $s['data_sources'] ?? vec[];
    $this->failure_behavior = $s['failure_behavior'] ?? '';
    $this->iam_role = $s['iam_role'] ?? '';
    $this->logging_config = $s['logging_config'] ?? null;
    $this->max_job_duration_in_seconds = $s['max_job_duration_in_seconds'] ?? 0;
    $this->output_location = $s['output_location'] ?? null;
    $this->robot_applications = $s['robot_applications'] ?? vec[];
    $this->simulation_applications = $s['simulation_applications'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->vpc_config = $s['vpc_config'] ?? null;
  }
}

type CreateSimulationJobRequests = vec<SimulationJobRequest>;

class CreateSimulationJobResponse {
  public ?Arn $arn;
  public ?ClientRequestToken $client_request_token;
  public ?ComputeResponse $compute;
  public ?DataSources $data_sources;
  public ?FailureBehavior $failure_behavior;
  public ?SimulationJobErrorCode $failure_code;
  public ?IamRole $iam_role;
  public ?LastStartedAt $last_started_at;
  public ?LastUpdatedAt $last_updated_at;
  public ?LoggingConfig $logging_config;
  public ?JobDuration $max_job_duration_in_seconds;
  public ?OutputLocation $output_location;
  public ?RobotApplicationConfigs $robot_applications;
  public ?SimulationApplicationConfigs $simulation_applications;
  public ?SimulationTimeMillis $simulation_time_millis;
  public ?SimulationJobStatus $status;
  public ?TagMap $tags;
  public ?VPCConfigResponse $vpc_config;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'client_request_token' => ?ClientRequestToken,
    ?'compute' => ?ComputeResponse,
    ?'data_sources' => ?DataSources,
    ?'failure_behavior' => ?FailureBehavior,
    ?'failure_code' => ?SimulationJobErrorCode,
    ?'iam_role' => ?IamRole,
    ?'last_started_at' => ?LastStartedAt,
    ?'last_updated_at' => ?LastUpdatedAt,
    ?'logging_config' => ?LoggingConfig,
    ?'max_job_duration_in_seconds' => ?JobDuration,
    ?'output_location' => ?OutputLocation,
    ?'robot_applications' => ?RobotApplicationConfigs,
    ?'simulation_applications' => ?SimulationApplicationConfigs,
    ?'simulation_time_millis' => ?SimulationTimeMillis,
    ?'status' => ?SimulationJobStatus,
    ?'tags' => ?TagMap,
    ?'vpc_config' => ?VPCConfigResponse,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->compute = $s['compute'] ?? null;
    $this->data_sources = $s['data_sources'] ?? vec[];
    $this->failure_behavior = $s['failure_behavior'] ?? '';
    $this->failure_code = $s['failure_code'] ?? '';
    $this->iam_role = $s['iam_role'] ?? '';
    $this->last_started_at = $s['last_started_at'] ?? 0;
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->logging_config = $s['logging_config'] ?? null;
    $this->max_job_duration_in_seconds = $s['max_job_duration_in_seconds'] ?? 0;
    $this->output_location = $s['output_location'] ?? null;
    $this->robot_applications = $s['robot_applications'] ?? vec[];
    $this->simulation_applications = $s['simulation_applications'] ?? vec[];
    $this->simulation_time_millis = $s['simulation_time_millis'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->vpc_config = $s['vpc_config'] ?? null;
  }
}

type CreatedAt = int;

class DataSource {
  public ?Name $name;
  public ?S3Bucket $s_3_bucket;
  public ?S3KeyOutputs $s_3_keys;

  public function __construct(shape(
    ?'name' => ?Name,
    ?'s_3_bucket' => ?S3Bucket,
    ?'s_3_keys' => ?S3KeyOutputs,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_keys = $s['s_3_keys'] ?? vec[];
  }
}

class DataSourceConfig {
  public ?Name $name;
  public ?S3Bucket $s_3_bucket;
  public ?S3Keys $s_3_keys;

  public function __construct(shape(
    ?'name' => ?Name,
    ?'s_3_bucket' => ?S3Bucket,
    ?'s_3_keys' => ?S3Keys,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_keys = $s['s_3_keys'] ?? vec[];
  }
}

type DataSourceConfigs = vec<DataSourceConfig>;

type DataSourceNames = vec<Name>;

type DataSources = vec<DataSource>;

class DeleteFleetRequest {
  public ?Arn $fleet;

  public function __construct(shape(
    ?'fleet' => ?Arn,
  ) $s = shape()) {
    $this->fleet = $s['fleet'] ?? '';
  }
}

class DeleteFleetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRobotApplicationRequest {
  public ?Arn $application;
  public ?Version $application_version;

  public function __construct(shape(
    ?'application' => ?Arn,
    ?'application_version' => ?Version,
  ) $s = shape()) {
    $this->application = $s['application'] ?? '';
    $this->application_version = $s['application_version'] ?? '';
  }
}

class DeleteRobotApplicationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRobotRequest {
  public ?Arn $robot;

  public function __construct(shape(
    ?'robot' => ?Arn,
  ) $s = shape()) {
    $this->robot = $s['robot'] ?? '';
  }
}

class DeleteRobotResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSimulationApplicationRequest {
  public ?Arn $application;
  public ?Version $application_version;

  public function __construct(shape(
    ?'application' => ?Arn,
    ?'application_version' => ?Version,
  ) $s = shape()) {
    $this->application = $s['application'] ?? '';
    $this->application_version = $s['application_version'] ?? '';
  }
}

class DeleteSimulationApplicationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeploymentApplicationConfig {
  public ?Arn $application;
  public ?DeploymentVersion $application_version;
  public ?DeploymentLaunchConfig $launch_config;

  public function __construct(shape(
    ?'application' => ?Arn,
    ?'application_version' => ?DeploymentVersion,
    ?'launch_config' => ?DeploymentLaunchConfig,
  ) $s = shape()) {
    $this->application = $s['application'] ?? '';
    $this->application_version = $s['application_version'] ?? '';
    $this->launch_config = $s['launch_config'] ?? null;
  }
}

type DeploymentApplicationConfigs = vec<DeploymentApplicationConfig>;

class DeploymentConfig {
  public ?Percentage $concurrent_deployment_percentage;
  public ?S3Object $download_condition_file;
  public ?Percentage $failure_threshold_percentage;
  public ?DeploymentTimeout $robot_deployment_timeout_in_seconds;

  public function __construct(shape(
    ?'concurrent_deployment_percentage' => ?Percentage,
    ?'download_condition_file' => ?S3Object,
    ?'failure_threshold_percentage' => ?Percentage,
    ?'robot_deployment_timeout_in_seconds' => ?DeploymentTimeout,
  ) $s = shape()) {
    $this->concurrent_deployment_percentage = $s['concurrent_deployment_percentage'] ?? 0;
    $this->download_condition_file = $s['download_condition_file'] ?? null;
    $this->failure_threshold_percentage = $s['failure_threshold_percentage'] ?? 0;
    $this->robot_deployment_timeout_in_seconds = $s['robot_deployment_timeout_in_seconds'] ?? 0;
  }
}

class DeploymentJob {
  public ?Arn $arn;
  public ?CreatedAt $created_at;
  public ?DeploymentApplicationConfigs $deployment_application_configs;
  public ?DeploymentConfig $deployment_config;
  public ?DeploymentJobErrorCode $failure_code;
  public ?GenericString $failure_reason;
  public ?Arn $fleet;
  public ?DeploymentStatus $status;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_at' => ?CreatedAt,
    ?'deployment_application_configs' => ?DeploymentApplicationConfigs,
    ?'deployment_config' => ?DeploymentConfig,
    ?'failure_code' => ?DeploymentJobErrorCode,
    ?'failure_reason' => ?GenericString,
    ?'fleet' => ?Arn,
    ?'status' => ?DeploymentStatus,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->deployment_application_configs = $s['deployment_application_configs'] ?? vec[];
    $this->deployment_config = $s['deployment_config'] ?? null;
    $this->failure_code = $s['failure_code'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->fleet = $s['fleet'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type DeploymentJobErrorCode = string;

type DeploymentJobs = vec<DeploymentJob>;

class DeploymentLaunchConfig {
  public ?EnvironmentVariableMap $environment_variables;
  public ?Command $launch_file;
  public ?Command $package_name;
  public ?Path $post_launch_file;
  public ?Path $pre_launch_file;

  public function __construct(shape(
    ?'environment_variables' => ?EnvironmentVariableMap,
    ?'launch_file' => ?Command,
    ?'package_name' => ?Command,
    ?'post_launch_file' => ?Path,
    ?'pre_launch_file' => ?Path,
  ) $s = shape()) {
    $this->environment_variables = $s['environment_variables'] ?? dict[];
    $this->launch_file = $s['launch_file'] ?? '';
    $this->package_name = $s['package_name'] ?? '';
    $this->post_launch_file = $s['post_launch_file'] ?? '';
    $this->pre_launch_file = $s['pre_launch_file'] ?? '';
  }
}

type DeploymentStatus = string;

type DeploymentTimeout = int;

type DeploymentVersion = string;

class DeregisterRobotRequest {
  public ?Arn $fleet;
  public ?Arn $robot;

  public function __construct(shape(
    ?'fleet' => ?Arn,
    ?'robot' => ?Arn,
  ) $s = shape()) {
    $this->fleet = $s['fleet'] ?? '';
    $this->robot = $s['robot'] ?? '';
  }
}

class DeregisterRobotResponse {
  public ?Arn $fleet;
  public ?Arn $robot;

  public function __construct(shape(
    ?'fleet' => ?Arn,
    ?'robot' => ?Arn,
  ) $s = shape()) {
    $this->fleet = $s['fleet'] ?? '';
    $this->robot = $s['robot'] ?? '';
  }
}

class DescribeDeploymentJobRequest {
  public ?Arn $job;

  public function __construct(shape(
    ?'job' => ?Arn,
  ) $s = shape()) {
    $this->job = $s['job'] ?? '';
  }
}

class DescribeDeploymentJobResponse {
  public ?Arn $arn;
  public ?CreatedAt $created_at;
  public ?DeploymentApplicationConfigs $deployment_application_configs;
  public ?DeploymentConfig $deployment_config;
  public ?DeploymentJobErrorCode $failure_code;
  public ?GenericString $failure_reason;
  public ?Arn $fleet;
  public ?RobotDeploymentSummary $robot_deployment_summary;
  public ?DeploymentStatus $status;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_at' => ?CreatedAt,
    ?'deployment_application_configs' => ?DeploymentApplicationConfigs,
    ?'deployment_config' => ?DeploymentConfig,
    ?'failure_code' => ?DeploymentJobErrorCode,
    ?'failure_reason' => ?GenericString,
    ?'fleet' => ?Arn,
    ?'robot_deployment_summary' => ?RobotDeploymentSummary,
    ?'status' => ?DeploymentStatus,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->deployment_application_configs = $s['deployment_application_configs'] ?? vec[];
    $this->deployment_config = $s['deployment_config'] ?? null;
    $this->failure_code = $s['failure_code'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->fleet = $s['fleet'] ?? '';
    $this->robot_deployment_summary = $s['robot_deployment_summary'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class DescribeFleetRequest {
  public ?Arn $fleet;

  public function __construct(shape(
    ?'fleet' => ?Arn,
  ) $s = shape()) {
    $this->fleet = $s['fleet'] ?? '';
  }
}

class DescribeFleetResponse {
  public ?Arn $arn;
  public ?CreatedAt $created_at;
  public ?Arn $last_deployment_job;
  public ?DeploymentStatus $last_deployment_status;
  public ?CreatedAt $last_deployment_time;
  public ?Name $name;
  public ?Robots $robots;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_at' => ?CreatedAt,
    ?'last_deployment_job' => ?Arn,
    ?'last_deployment_status' => ?DeploymentStatus,
    ?'last_deployment_time' => ?CreatedAt,
    ?'name' => ?Name,
    ?'robots' => ?Robots,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->last_deployment_job = $s['last_deployment_job'] ?? '';
    $this->last_deployment_status = $s['last_deployment_status'] ?? '';
    $this->last_deployment_time = $s['last_deployment_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->robots = $s['robots'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class DescribeRobotApplicationRequest {
  public ?Arn $application;
  public ?Version $application_version;

  public function __construct(shape(
    ?'application' => ?Arn,
    ?'application_version' => ?Version,
  ) $s = shape()) {
    $this->application = $s['application'] ?? '';
    $this->application_version = $s['application_version'] ?? '';
  }
}

class DescribeRobotApplicationResponse {
  public ?Arn $arn;
  public ?LastUpdatedAt $last_updated_at;
  public ?Name $name;
  public ?RevisionId $revision_id;
  public ?RobotSoftwareSuite $robot_software_suite;
  public ?Sources $sources;
  public ?TagMap $tags;
  public ?Version $version;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'last_updated_at' => ?LastUpdatedAt,
    ?'name' => ?Name,
    ?'revision_id' => ?RevisionId,
    ?'robot_software_suite' => ?RobotSoftwareSuite,
    ?'sources' => ?Sources,
    ?'tags' => ?TagMap,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
    $this->robot_software_suite = $s['robot_software_suite'] ?? null;
    $this->sources = $s['sources'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->version = $s['version'] ?? '';
  }
}

class DescribeRobotRequest {
  public ?Arn $robot;

  public function __construct(shape(
    ?'robot' => ?Arn,
  ) $s = shape()) {
    $this->robot = $s['robot'] ?? '';
  }
}

class DescribeRobotResponse {
  public ?Architecture $architecture;
  public ?Arn $arn;
  public ?CreatedAt $created_at;
  public ?Arn $fleet_arn;
  public ?Id $greengrass_group_id;
  public ?Arn $last_deployment_job;
  public ?CreatedAt $last_deployment_time;
  public ?Name $name;
  public ?RobotStatus $status;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'architecture' => ?Architecture,
    ?'arn' => ?Arn,
    ?'created_at' => ?CreatedAt,
    ?'fleet_arn' => ?Arn,
    ?'greengrass_group_id' => ?Id,
    ?'last_deployment_job' => ?Arn,
    ?'last_deployment_time' => ?CreatedAt,
    ?'name' => ?Name,
    ?'status' => ?RobotStatus,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->architecture = $s['architecture'] ?? '';
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->greengrass_group_id = $s['greengrass_group_id'] ?? '';
    $this->last_deployment_job = $s['last_deployment_job'] ?? '';
    $this->last_deployment_time = $s['last_deployment_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class DescribeSimulationApplicationRequest {
  public ?Arn $application;
  public ?Version $application_version;

  public function __construct(shape(
    ?'application' => ?Arn,
    ?'application_version' => ?Version,
  ) $s = shape()) {
    $this->application = $s['application'] ?? '';
    $this->application_version = $s['application_version'] ?? '';
  }
}

class DescribeSimulationApplicationResponse {
  public ?Arn $arn;
  public ?LastUpdatedAt $last_updated_at;
  public ?Name $name;
  public ?RenderingEngine $rendering_engine;
  public ?RevisionId $revision_id;
  public ?RobotSoftwareSuite $robot_software_suite;
  public ?SimulationSoftwareSuite $simulation_software_suite;
  public ?Sources $sources;
  public ?TagMap $tags;
  public ?Version $version;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'last_updated_at' => ?LastUpdatedAt,
    ?'name' => ?Name,
    ?'rendering_engine' => ?RenderingEngine,
    ?'revision_id' => ?RevisionId,
    ?'robot_software_suite' => ?RobotSoftwareSuite,
    ?'simulation_software_suite' => ?SimulationSoftwareSuite,
    ?'sources' => ?Sources,
    ?'tags' => ?TagMap,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->rendering_engine = $s['rendering_engine'] ?? null;
    $this->revision_id = $s['revision_id'] ?? '';
    $this->robot_software_suite = $s['robot_software_suite'] ?? null;
    $this->simulation_software_suite = $s['simulation_software_suite'] ?? null;
    $this->sources = $s['sources'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->version = $s['version'] ?? '';
  }
}

class DescribeSimulationJobBatchRequest {
  public ?Arn $batch;

  public function __construct(shape(
    ?'batch' => ?Arn,
  ) $s = shape()) {
    $this->batch = $s['batch'] ?? '';
  }
}

class DescribeSimulationJobBatchResponse {
  public ?Arn $arn;
  public ?BatchPolicy $batch_policy;
  public ?ClientRequestToken $client_request_token;
  public ?CreatedAt $created_at;
  public ?SimulationJobSummaries $created_requests;
  public ?FailedCreateSimulationJobRequests $failed_requests;
  public ?SimulationJobBatchErrorCode $failure_code;
  public ?GenericString $failure_reason;
  public ?LastUpdatedAt $last_updated_at;
  public ?CreateSimulationJobRequests $pending_requests;
  public ?SimulationJobBatchStatus $status;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'batch_policy' => ?BatchPolicy,
    ?'client_request_token' => ?ClientRequestToken,
    ?'created_at' => ?CreatedAt,
    ?'created_requests' => ?SimulationJobSummaries,
    ?'failed_requests' => ?FailedCreateSimulationJobRequests,
    ?'failure_code' => ?SimulationJobBatchErrorCode,
    ?'failure_reason' => ?GenericString,
    ?'last_updated_at' => ?LastUpdatedAt,
    ?'pending_requests' => ?CreateSimulationJobRequests,
    ?'status' => ?SimulationJobBatchStatus,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->batch_policy = $s['batch_policy'] ?? null;
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->created_requests = $s['created_requests'] ?? vec[];
    $this->failed_requests = $s['failed_requests'] ?? vec[];
    $this->failure_code = $s['failure_code'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->pending_requests = $s['pending_requests'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class DescribeSimulationJobRequest {
  public ?Arn $job;

  public function __construct(shape(
    ?'job' => ?Arn,
  ) $s = shape()) {
    $this->job = $s['job'] ?? '';
  }
}

class DescribeSimulationJobResponse {
  public ?Arn $arn;
  public ?ClientRequestToken $client_request_token;
  public ?ComputeResponse $compute;
  public ?DataSources $data_sources;
  public ?FailureBehavior $failure_behavior;
  public ?SimulationJobErrorCode $failure_code;
  public ?GenericString $failure_reason;
  public ?IamRole $iam_role;
  public ?LastStartedAt $last_started_at;
  public ?LastUpdatedAt $last_updated_at;
  public ?LoggingConfig $logging_config;
  public ?JobDuration $max_job_duration_in_seconds;
  public ?Name $name;
  public ?NetworkInterface $network_interface;
  public ?OutputLocation $output_location;
  public ?RobotApplicationConfigs $robot_applications;
  public ?SimulationApplicationConfigs $simulation_applications;
  public ?SimulationTimeMillis $simulation_time_millis;
  public ?SimulationJobStatus $status;
  public ?TagMap $tags;
  public ?VPCConfigResponse $vpc_config;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'client_request_token' => ?ClientRequestToken,
    ?'compute' => ?ComputeResponse,
    ?'data_sources' => ?DataSources,
    ?'failure_behavior' => ?FailureBehavior,
    ?'failure_code' => ?SimulationJobErrorCode,
    ?'failure_reason' => ?GenericString,
    ?'iam_role' => ?IamRole,
    ?'last_started_at' => ?LastStartedAt,
    ?'last_updated_at' => ?LastUpdatedAt,
    ?'logging_config' => ?LoggingConfig,
    ?'max_job_duration_in_seconds' => ?JobDuration,
    ?'name' => ?Name,
    ?'network_interface' => ?NetworkInterface,
    ?'output_location' => ?OutputLocation,
    ?'robot_applications' => ?RobotApplicationConfigs,
    ?'simulation_applications' => ?SimulationApplicationConfigs,
    ?'simulation_time_millis' => ?SimulationTimeMillis,
    ?'status' => ?SimulationJobStatus,
    ?'tags' => ?TagMap,
    ?'vpc_config' => ?VPCConfigResponse,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->compute = $s['compute'] ?? null;
    $this->data_sources = $s['data_sources'] ?? vec[];
    $this->failure_behavior = $s['failure_behavior'] ?? '';
    $this->failure_code = $s['failure_code'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->iam_role = $s['iam_role'] ?? '';
    $this->last_started_at = $s['last_started_at'] ?? 0;
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->logging_config = $s['logging_config'] ?? null;
    $this->max_job_duration_in_seconds = $s['max_job_duration_in_seconds'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->network_interface = $s['network_interface'] ?? null;
    $this->output_location = $s['output_location'] ?? null;
    $this->robot_applications = $s['robot_applications'] ?? vec[];
    $this->simulation_applications = $s['simulation_applications'] ?? vec[];
    $this->simulation_time_millis = $s['simulation_time_millis'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->vpc_config = $s['vpc_config'] ?? null;
  }
}

type EnvironmentVariableKey = string;

type EnvironmentVariableMap = dict<EnvironmentVariableKey, EnvironmentVariableValue>;

type EnvironmentVariableValue = string;

type FailedAt = int;

class FailedCreateSimulationJobRequest {
  public ?FailedAt $failed_at;
  public ?SimulationJobErrorCode $failure_code;
  public ?GenericString $failure_reason;
  public ?SimulationJobRequest $request;

  public function __construct(shape(
    ?'failed_at' => ?FailedAt,
    ?'failure_code' => ?SimulationJobErrorCode,
    ?'failure_reason' => ?GenericString,
    ?'request' => ?SimulationJobRequest,
  ) $s = shape()) {
    $this->failed_at = $s['failed_at'] ?? 0;
    $this->failure_code = $s['failure_code'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->request = $s['request'] ?? null;
  }
}

type FailedCreateSimulationJobRequests = vec<FailedCreateSimulationJobRequest>;

type FailureBehavior = string;

class Filter {
  public ?Name $name;
  public ?FilterValues $values;

  public function __construct(shape(
    ?'name' => ?Name,
    ?'values' => ?FilterValues,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type FilterValues = vec<Name>;

type Filters = vec<Filter>;

class Fleet {
  public ?Arn $arn;
  public ?CreatedAt $created_at;
  public ?Arn $last_deployment_job;
  public ?DeploymentStatus $last_deployment_status;
  public ?CreatedAt $last_deployment_time;
  public ?Name $name;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_at' => ?CreatedAt,
    ?'last_deployment_job' => ?Arn,
    ?'last_deployment_status' => ?DeploymentStatus,
    ?'last_deployment_time' => ?CreatedAt,
    ?'name' => ?Name,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->last_deployment_job = $s['last_deployment_job'] ?? '';
    $this->last_deployment_status = $s['last_deployment_status'] ?? '';
    $this->last_deployment_time = $s['last_deployment_time'] ?? 0;
    $this->name = $s['name'] ?? '';
  }
}

type Fleets = vec<Fleet>;

type GenericInteger = int;

type GenericString = string;

type IamRole = string;

type Id = string;

class IdempotentParameterMismatchException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Integer = int;

class InternalServerException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type JobDuration = int;

type LastStartedAt = int;

type LastUpdatedAt = int;

class LaunchConfig {
  public ?EnvironmentVariableMap $environment_variables;
  public ?Command $launch_file;
  public ?Command $package_name;
  public ?PortForwardingConfig $port_forwarding_config;
  public bool $stream_ui;

  public function __construct(shape(
    ?'environment_variables' => ?EnvironmentVariableMap,
    ?'launch_file' => ?Command,
    ?'package_name' => ?Command,
    ?'port_forwarding_config' => ?PortForwardingConfig,
    ?'stream_ui' => bool,
  ) $s = shape()) {
    $this->environment_variables = $s['environment_variables'] ?? dict[];
    $this->launch_file = $s['launch_file'] ?? '';
    $this->package_name = $s['package_name'] ?? '';
    $this->port_forwarding_config = $s['port_forwarding_config'] ?? null;
    $this->stream_ui = $s['stream_ui'] ?? false;
  }
}

class LimitExceededException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListDeploymentJobsRequest {
  public ?Filters $filters;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'filters' => ?Filters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeploymentJobsResponse {
  public ?DeploymentJobs $deployment_jobs;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'deployment_jobs' => ?DeploymentJobs,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->deployment_jobs = $s['deployment_jobs'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFleetsRequest {
  public ?Filters $filters;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'filters' => ?Filters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFleetsResponse {
  public ?Fleets $fleet_details;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'fleet_details' => ?Fleets,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->fleet_details = $s['fleet_details'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListRobotApplicationsRequest {
  public ?Filters $filters;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;
  public ?VersionQualifier $version_qualifier;

  public function __construct(shape(
    ?'filters' => ?Filters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
    ?'version_qualifier' => ?VersionQualifier,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->version_qualifier = $s['version_qualifier'] ?? '';
  }
}

class ListRobotApplicationsResponse {
  public ?PaginationToken $next_token;
  public ?RobotApplicationSummaries $robot_application_summaries;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'robot_application_summaries' => ?RobotApplicationSummaries,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->robot_application_summaries = $s['robot_application_summaries'] ?? vec[];
  }
}

class ListRobotsRequest {
  public ?Filters $filters;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'filters' => ?Filters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListRobotsResponse {
  public ?PaginationToken $next_token;
  public ?Robots $robots;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'robots' => ?Robots,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->robots = $s['robots'] ?? vec[];
  }
}

class ListSimulationApplicationsRequest {
  public ?Filters $filters;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;
  public ?VersionQualifier $version_qualifier;

  public function __construct(shape(
    ?'filters' => ?Filters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
    ?'version_qualifier' => ?VersionQualifier,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->version_qualifier = $s['version_qualifier'] ?? '';
  }
}

class ListSimulationApplicationsResponse {
  public ?PaginationToken $next_token;
  public ?SimulationApplicationSummaries $simulation_application_summaries;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'simulation_application_summaries' => ?SimulationApplicationSummaries,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->simulation_application_summaries = $s['simulation_application_summaries'] ?? vec[];
  }
}

class ListSimulationJobBatchesRequest {
  public ?Filters $filters;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'filters' => ?Filters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSimulationJobBatchesResponse {
  public ?PaginationToken $next_token;
  public ?SimulationJobBatchSummaries $simulation_job_batch_summaries;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'simulation_job_batch_summaries' => ?SimulationJobBatchSummaries,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->simulation_job_batch_summaries = $s['simulation_job_batch_summaries'] ?? vec[];
  }
}

class ListSimulationJobsRequest {
  public ?Filters $filters;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'filters' => ?Filters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSimulationJobsResponse {
  public ?PaginationToken $next_token;
  public ?SimulationJobSummaries $simulation_job_summaries;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'simulation_job_summaries' => ?SimulationJobSummaries,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->simulation_job_summaries = $s['simulation_job_summaries'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public ?Arn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
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

class LoggingConfig {
  public ?BoxedBoolean $record_all_ros_topics;

  public function __construct(shape(
    ?'record_all_ros_topics' => ?BoxedBoolean,
  ) $s = shape()) {
    $this->record_all_ros_topics = $s['record_all_ros_topics'] ?? false;
  }
}

type MaxConcurrency = int;

type MaxResults = int;

type Name = string;

class NetworkInterface {
  public ?GenericString $network_interface_id;
  public ?GenericString $private_ip_address;
  public ?GenericString $public_ip_address;

  public function __construct(shape(
    ?'network_interface_id' => ?GenericString,
    ?'private_ip_address' => ?GenericString,
    ?'public_ip_address' => ?GenericString,
  ) $s = shape()) {
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->private_ip_address = $s['private_ip_address'] ?? '';
    $this->public_ip_address = $s['public_ip_address'] ?? '';
  }
}

type NonEmptyString = string;

type NonSystemPort = int;

class OutputLocation {
  public ?S3Bucket $s_3_bucket;
  public ?S3Key $s_3_prefix;

  public function __construct(shape(
    ?'s_3_bucket' => ?S3Bucket,
    ?'s_3_prefix' => ?S3Key,
  ) $s = shape()) {
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_prefix = $s['s_3_prefix'] ?? '';
  }
}

type PaginationToken = string;

type Path = string;

type PercentDone = float;

type Percentage = int;

type Port = int;

class PortForwardingConfig {
  public ?PortMappingList $port_mappings;

  public function __construct(shape(
    ?'port_mappings' => ?PortMappingList,
  ) $s = shape()) {
    $this->port_mappings = $s['port_mappings'] ?? vec[];
  }
}

class PortMapping {
  public ?NonSystemPort $application_port;
  public bool $enable_on_public_ip;
  public ?Port $job_port;

  public function __construct(shape(
    ?'application_port' => ?NonSystemPort,
    ?'enable_on_public_ip' => bool,
    ?'job_port' => ?Port,
  ) $s = shape()) {
    $this->application_port = $s['application_port'] ?? 0;
    $this->enable_on_public_ip = $s['enable_on_public_ip'] ?? false;
    $this->job_port = $s['job_port'] ?? 0;
  }
}

type PortMappingList = vec<PortMapping>;

class ProgressDetail {
  public ?RobotDeploymentStep $current_progress;
  public ?GenericInteger $estimated_time_remaining_seconds;
  public ?PercentDone $percent_done;
  public ?GenericString $target_resource;

  public function __construct(shape(
    ?'current_progress' => ?RobotDeploymentStep,
    ?'estimated_time_remaining_seconds' => ?GenericInteger,
    ?'percent_done' => ?PercentDone,
    ?'target_resource' => ?GenericString,
  ) $s = shape()) {
    $this->current_progress = $s['current_progress'] ?? '';
    $this->estimated_time_remaining_seconds = $s['estimated_time_remaining_seconds'] ?? 0;
    $this->percent_done = $s['percent_done'] ?? 0.0;
    $this->target_resource = $s['target_resource'] ?? '';
  }
}

class RegisterRobotRequest {
  public ?Arn $fleet;
  public ?Arn $robot;

  public function __construct(shape(
    ?'fleet' => ?Arn,
    ?'robot' => ?Arn,
  ) $s = shape()) {
    $this->fleet = $s['fleet'] ?? '';
    $this->robot = $s['robot'] ?? '';
  }
}

class RegisterRobotResponse {
  public ?Arn $fleet;
  public ?Arn $robot;

  public function __construct(shape(
    ?'fleet' => ?Arn,
    ?'robot' => ?Arn,
  ) $s = shape()) {
    $this->fleet = $s['fleet'] ?? '';
    $this->robot = $s['robot'] ?? '';
  }
}

class RenderingEngine {
  public ?RenderingEngineType $name;
  public ?RenderingEngineVersionType $version;

  public function __construct(shape(
    ?'name' => ?RenderingEngineType,
    ?'version' => ?RenderingEngineVersionType,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type RenderingEngineType = string;

type RenderingEngineVersionType = string;

class ResourceAlreadyExistsException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceNotFoundException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class RestartSimulationJobRequest {
  public ?Arn $job;

  public function __construct(shape(
    ?'job' => ?Arn,
  ) $s = shape()) {
    $this->job = $s['job'] ?? '';
  }
}

class RestartSimulationJobResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RevisionId = string;

class Robot {
  public ?Architecture $architecture;
  public ?Arn $arn;
  public ?CreatedAt $created_at;
  public ?Arn $fleet_arn;
  public ?Id $green_grass_group_id;
  public ?Arn $last_deployment_job;
  public ?CreatedAt $last_deployment_time;
  public ?Name $name;
  public ?RobotStatus $status;

  public function __construct(shape(
    ?'architecture' => ?Architecture,
    ?'arn' => ?Arn,
    ?'created_at' => ?CreatedAt,
    ?'fleet_arn' => ?Arn,
    ?'green_grass_group_id' => ?Id,
    ?'last_deployment_job' => ?Arn,
    ?'last_deployment_time' => ?CreatedAt,
    ?'name' => ?Name,
    ?'status' => ?RobotStatus,
  ) $s = shape()) {
    $this->architecture = $s['architecture'] ?? '';
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->green_grass_group_id = $s['green_grass_group_id'] ?? '';
    $this->last_deployment_job = $s['last_deployment_job'] ?? '';
    $this->last_deployment_time = $s['last_deployment_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class RobotApplicationConfig {
  public ?Arn $application;
  public ?Version $application_version;
  public ?LaunchConfig $launch_config;

  public function __construct(shape(
    ?'application' => ?Arn,
    ?'application_version' => ?Version,
    ?'launch_config' => ?LaunchConfig,
  ) $s = shape()) {
    $this->application = $s['application'] ?? '';
    $this->application_version = $s['application_version'] ?? '';
    $this->launch_config = $s['launch_config'] ?? null;
  }
}

type RobotApplicationConfigs = vec<RobotApplicationConfig>;

type RobotApplicationNames = vec<Name>;

type RobotApplicationSummaries = vec<RobotApplicationSummary>;

class RobotApplicationSummary {
  public ?Arn $arn;
  public ?LastUpdatedAt $last_updated_at;
  public ?Name $name;
  public ?RobotSoftwareSuite $robot_software_suite;
  public ?Version $version;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'last_updated_at' => ?LastUpdatedAt,
    ?'name' => ?Name,
    ?'robot_software_suite' => ?RobotSoftwareSuite,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->robot_software_suite = $s['robot_software_suite'] ?? null;
    $this->version = $s['version'] ?? '';
  }
}

class RobotDeployment {
  public ?Arn $arn;
  public ?CreatedAt $deployment_finish_time;
  public ?CreatedAt $deployment_start_time;
  public ?DeploymentJobErrorCode $failure_code;
  public ?GenericString $failure_reason;
  public ?ProgressDetail $progress_detail;
  public ?RobotStatus $status;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'deployment_finish_time' => ?CreatedAt,
    ?'deployment_start_time' => ?CreatedAt,
    ?'failure_code' => ?DeploymentJobErrorCode,
    ?'failure_reason' => ?GenericString,
    ?'progress_detail' => ?ProgressDetail,
    ?'status' => ?RobotStatus,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->deployment_finish_time = $s['deployment_finish_time'] ?? 0;
    $this->deployment_start_time = $s['deployment_start_time'] ?? 0;
    $this->failure_code = $s['failure_code'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->progress_detail = $s['progress_detail'] ?? null;
    $this->status = $s['status'] ?? '';
  }
}

type RobotDeploymentStep = string;

type RobotDeploymentSummary = vec<RobotDeployment>;

class RobotSoftwareSuite {
  public ?RobotSoftwareSuiteType $name;
  public ?RobotSoftwareSuiteVersionType $version;

  public function __construct(shape(
    ?'name' => ?RobotSoftwareSuiteType,
    ?'version' => ?RobotSoftwareSuiteVersionType,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type RobotSoftwareSuiteType = string;

type RobotSoftwareSuiteVersionType = string;

type RobotStatus = string;

type Robots = vec<Robot>;

type S3Bucket = string;

type S3Etag = string;

type S3Key = string;

class S3KeyOutput {
  public ?S3Etag $etag;
  public ?S3Key $s_3_key;

  public function __construct(shape(
    ?'etag' => ?S3Etag,
    ?'s_3_key' => ?S3Key,
  ) $s = shape()) {
    $this->etag = $s['etag'] ?? '';
    $this->s_3_key = $s['s_3_key'] ?? '';
  }
}

type S3KeyOutputs = vec<S3KeyOutput>;

type S3Keys = vec<S3Key>;

class S3Object {
  public ?S3Bucket $bucket;
  public ?S3Etag $etag;
  public ?S3Key $key;

  public function __construct(shape(
    ?'bucket' => ?S3Bucket,
    ?'etag' => ?S3Etag,
    ?'key' => ?S3Key,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->etag = $s['etag'] ?? '';
    $this->key = $s['key'] ?? '';
  }
}

type SecurityGroups = vec<NonEmptyString>;

class ServiceUnavailableException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class SimulationApplicationConfig {
  public ?Arn $application;
  public ?Version $application_version;
  public ?LaunchConfig $launch_config;

  public function __construct(shape(
    ?'application' => ?Arn,
    ?'application_version' => ?Version,
    ?'launch_config' => ?LaunchConfig,
  ) $s = shape()) {
    $this->application = $s['application'] ?? '';
    $this->application_version = $s['application_version'] ?? '';
    $this->launch_config = $s['launch_config'] ?? null;
  }
}

type SimulationApplicationConfigs = vec<SimulationApplicationConfig>;

type SimulationApplicationNames = vec<Name>;

type SimulationApplicationSummaries = vec<SimulationApplicationSummary>;

class SimulationApplicationSummary {
  public ?Arn $arn;
  public ?LastUpdatedAt $last_updated_at;
  public ?Name $name;
  public ?RobotSoftwareSuite $robot_software_suite;
  public ?SimulationSoftwareSuite $simulation_software_suite;
  public ?Version $version;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'last_updated_at' => ?LastUpdatedAt,
    ?'name' => ?Name,
    ?'robot_software_suite' => ?RobotSoftwareSuite,
    ?'simulation_software_suite' => ?SimulationSoftwareSuite,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->robot_software_suite = $s['robot_software_suite'] ?? null;
    $this->simulation_software_suite = $s['simulation_software_suite'] ?? null;
    $this->version = $s['version'] ?? '';
  }
}

class SimulationJob {
  public ?Arn $arn;
  public ?ClientRequestToken $client_request_token;
  public ?ComputeResponse $compute;
  public ?DataSources $data_sources;
  public ?FailureBehavior $failure_behavior;
  public ?SimulationJobErrorCode $failure_code;
  public ?GenericString $failure_reason;
  public ?IamRole $iam_role;
  public ?LastStartedAt $last_started_at;
  public ?LastUpdatedAt $last_updated_at;
  public ?LoggingConfig $logging_config;
  public ?JobDuration $max_job_duration_in_seconds;
  public ?Name $name;
  public ?NetworkInterface $network_interface;
  public ?OutputLocation $output_location;
  public ?RobotApplicationConfigs $robot_applications;
  public ?SimulationApplicationConfigs $simulation_applications;
  public ?SimulationTimeMillis $simulation_time_millis;
  public ?SimulationJobStatus $status;
  public ?TagMap $tags;
  public ?VPCConfigResponse $vpc_config;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'client_request_token' => ?ClientRequestToken,
    ?'compute' => ?ComputeResponse,
    ?'data_sources' => ?DataSources,
    ?'failure_behavior' => ?FailureBehavior,
    ?'failure_code' => ?SimulationJobErrorCode,
    ?'failure_reason' => ?GenericString,
    ?'iam_role' => ?IamRole,
    ?'last_started_at' => ?LastStartedAt,
    ?'last_updated_at' => ?LastUpdatedAt,
    ?'logging_config' => ?LoggingConfig,
    ?'max_job_duration_in_seconds' => ?JobDuration,
    ?'name' => ?Name,
    ?'network_interface' => ?NetworkInterface,
    ?'output_location' => ?OutputLocation,
    ?'robot_applications' => ?RobotApplicationConfigs,
    ?'simulation_applications' => ?SimulationApplicationConfigs,
    ?'simulation_time_millis' => ?SimulationTimeMillis,
    ?'status' => ?SimulationJobStatus,
    ?'tags' => ?TagMap,
    ?'vpc_config' => ?VPCConfigResponse,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->compute = $s['compute'] ?? null;
    $this->data_sources = $s['data_sources'] ?? vec[];
    $this->failure_behavior = $s['failure_behavior'] ?? '';
    $this->failure_code = $s['failure_code'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->iam_role = $s['iam_role'] ?? '';
    $this->last_started_at = $s['last_started_at'] ?? 0;
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->logging_config = $s['logging_config'] ?? null;
    $this->max_job_duration_in_seconds = $s['max_job_duration_in_seconds'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->network_interface = $s['network_interface'] ?? null;
    $this->output_location = $s['output_location'] ?? null;
    $this->robot_applications = $s['robot_applications'] ?? vec[];
    $this->simulation_applications = $s['simulation_applications'] ?? vec[];
    $this->simulation_time_millis = $s['simulation_time_millis'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->vpc_config = $s['vpc_config'] ?? null;
  }
}

type SimulationJobBatchErrorCode = string;

type SimulationJobBatchStatus = string;

type SimulationJobBatchSummaries = vec<SimulationJobBatchSummary>;

class SimulationJobBatchSummary {
  public ?Arn $arn;
  public ?CreatedAt $created_at;
  public int $created_request_count;
  public int $failed_request_count;
  public ?LastUpdatedAt $last_updated_at;
  public int $pending_request_count;
  public ?SimulationJobBatchStatus $status;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_at' => ?CreatedAt,
    ?'created_request_count' => int,
    ?'failed_request_count' => int,
    ?'last_updated_at' => ?LastUpdatedAt,
    ?'pending_request_count' => int,
    ?'status' => ?SimulationJobBatchStatus,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->created_request_count = $s['created_request_count'] ?? 0;
    $this->failed_request_count = $s['failed_request_count'] ?? 0;
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->pending_request_count = $s['pending_request_count'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

type SimulationJobErrorCode = string;

class SimulationJobRequest {
  public ?Compute $compute;
  public ?DataSourceConfigs $data_sources;
  public ?FailureBehavior $failure_behavior;
  public ?IamRole $iam_role;
  public ?LoggingConfig $logging_config;
  public ?JobDuration $max_job_duration_in_seconds;
  public ?OutputLocation $output_location;
  public ?RobotApplicationConfigs $robot_applications;
  public ?SimulationApplicationConfigs $simulation_applications;
  public ?TagMap $tags;
  public ?BoxedBoolean $use_default_applications;
  public ?VPCConfig $vpc_config;

  public function __construct(shape(
    ?'compute' => ?Compute,
    ?'data_sources' => ?DataSourceConfigs,
    ?'failure_behavior' => ?FailureBehavior,
    ?'iam_role' => ?IamRole,
    ?'logging_config' => ?LoggingConfig,
    ?'max_job_duration_in_seconds' => ?JobDuration,
    ?'output_location' => ?OutputLocation,
    ?'robot_applications' => ?RobotApplicationConfigs,
    ?'simulation_applications' => ?SimulationApplicationConfigs,
    ?'tags' => ?TagMap,
    ?'use_default_applications' => ?BoxedBoolean,
    ?'vpc_config' => ?VPCConfig,
  ) $s = shape()) {
    $this->compute = $s['compute'] ?? null;
    $this->data_sources = $s['data_sources'] ?? vec[];
    $this->failure_behavior = $s['failure_behavior'] ?? '';
    $this->iam_role = $s['iam_role'] ?? '';
    $this->logging_config = $s['logging_config'] ?? null;
    $this->max_job_duration_in_seconds = $s['max_job_duration_in_seconds'] ?? 0;
    $this->output_location = $s['output_location'] ?? null;
    $this->robot_applications = $s['robot_applications'] ?? vec[];
    $this->simulation_applications = $s['simulation_applications'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->use_default_applications = $s['use_default_applications'] ?? false;
    $this->vpc_config = $s['vpc_config'] ?? null;
  }
}

type SimulationJobStatus = string;

type SimulationJobSummaries = vec<SimulationJobSummary>;

class SimulationJobSummary {
  public ?Arn $arn;
  public ?DataSourceNames $data_source_names;
  public ?LastUpdatedAt $last_updated_at;
  public ?Name $name;
  public ?RobotApplicationNames $robot_application_names;
  public ?SimulationApplicationNames $simulation_application_names;
  public ?SimulationJobStatus $status;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'data_source_names' => ?DataSourceNames,
    ?'last_updated_at' => ?LastUpdatedAt,
    ?'name' => ?Name,
    ?'robot_application_names' => ?RobotApplicationNames,
    ?'simulation_application_names' => ?SimulationApplicationNames,
    ?'status' => ?SimulationJobStatus,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->data_source_names = $s['data_source_names'] ?? vec[];
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->robot_application_names = $s['robot_application_names'] ?? vec[];
    $this->simulation_application_names = $s['simulation_application_names'] ?? vec[];
    $this->status = $s['status'] ?? '';
  }
}

type SimulationJobs = vec<SimulationJob>;

class SimulationSoftwareSuite {
  public ?SimulationSoftwareSuiteType $name;
  public ?SimulationSoftwareSuiteVersionType $version;

  public function __construct(shape(
    ?'name' => ?SimulationSoftwareSuiteType,
    ?'version' => ?SimulationSoftwareSuiteVersionType,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type SimulationSoftwareSuiteType = string;

type SimulationSoftwareSuiteVersionType = string;

type SimulationTimeMillis = int;

type SimulationUnit = int;

class Source {
  public ?Architecture $architecture;
  public ?S3Etag $etag;
  public ?S3Bucket $s_3_bucket;
  public ?S3Key $s_3_key;

  public function __construct(shape(
    ?'architecture' => ?Architecture,
    ?'etag' => ?S3Etag,
    ?'s_3_bucket' => ?S3Bucket,
    ?'s_3_key' => ?S3Key,
  ) $s = shape()) {
    $this->architecture = $s['architecture'] ?? '';
    $this->etag = $s['etag'] ?? '';
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_key = $s['s_3_key'] ?? '';
  }
}

class SourceConfig {
  public ?Architecture $architecture;
  public ?S3Bucket $s_3_bucket;
  public ?S3Key $s_3_key;

  public function __construct(shape(
    ?'architecture' => ?Architecture,
    ?'s_3_bucket' => ?S3Bucket,
    ?'s_3_key' => ?S3Key,
  ) $s = shape()) {
    $this->architecture = $s['architecture'] ?? '';
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_key = $s['s_3_key'] ?? '';
  }
}

type SourceConfigs = vec<SourceConfig>;

type Sources = vec<Source>;

class StartSimulationJobBatchRequest {
  public ?BatchPolicy $batch_policy;
  public ?ClientRequestToken $client_request_token;
  public ?CreateSimulationJobRequests $create_simulation_job_requests;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'batch_policy' => ?BatchPolicy,
    ?'client_request_token' => ?ClientRequestToken,
    ?'create_simulation_job_requests' => ?CreateSimulationJobRequests,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->batch_policy = $s['batch_policy'] ?? null;
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->create_simulation_job_requests = $s['create_simulation_job_requests'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class StartSimulationJobBatchResponse {
  public ?Arn $arn;
  public ?BatchPolicy $batch_policy;
  public ?ClientRequestToken $client_request_token;
  public ?CreatedAt $created_at;
  public ?SimulationJobSummaries $created_requests;
  public ?FailedCreateSimulationJobRequests $failed_requests;
  public ?SimulationJobBatchErrorCode $failure_code;
  public ?GenericString $failure_reason;
  public ?CreateSimulationJobRequests $pending_requests;
  public ?SimulationJobBatchStatus $status;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'batch_policy' => ?BatchPolicy,
    ?'client_request_token' => ?ClientRequestToken,
    ?'created_at' => ?CreatedAt,
    ?'created_requests' => ?SimulationJobSummaries,
    ?'failed_requests' => ?FailedCreateSimulationJobRequests,
    ?'failure_code' => ?SimulationJobBatchErrorCode,
    ?'failure_reason' => ?GenericString,
    ?'pending_requests' => ?CreateSimulationJobRequests,
    ?'status' => ?SimulationJobBatchStatus,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->batch_policy = $s['batch_policy'] ?? null;
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->created_requests = $s['created_requests'] ?? vec[];
    $this->failed_requests = $s['failed_requests'] ?? vec[];
    $this->failure_code = $s['failure_code'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->pending_requests = $s['pending_requests'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

type Subnets = vec<NonEmptyString>;

class SyncDeploymentJobRequest {
  public ?ClientRequestToken $client_request_token;
  public ?Arn $fleet;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'fleet' => ?Arn,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->fleet = $s['fleet'] ?? '';
  }
}

class SyncDeploymentJobResponse {
  public ?Arn $arn;
  public ?CreatedAt $created_at;
  public ?DeploymentApplicationConfigs $deployment_application_configs;
  public ?DeploymentConfig $deployment_config;
  public ?DeploymentJobErrorCode $failure_code;
  public ?GenericString $failure_reason;
  public ?Arn $fleet;
  public ?DeploymentStatus $status;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_at' => ?CreatedAt,
    ?'deployment_application_configs' => ?DeploymentApplicationConfigs,
    ?'deployment_config' => ?DeploymentConfig,
    ?'failure_code' => ?DeploymentJobErrorCode,
    ?'failure_reason' => ?GenericString,
    ?'fleet' => ?Arn,
    ?'status' => ?DeploymentStatus,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->deployment_application_configs = $s['deployment_application_configs'] ?? vec[];
    $this->deployment_config = $s['deployment_config'] ?? null;
    $this->failure_code = $s['failure_code'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->fleet = $s['fleet'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public ?Arn $resource_arn;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
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

class ThrottlingException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceRequest {
  public ?Arn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
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

class UpdateRobotApplicationRequest {
  public ?Arn $application;
  public ?RevisionId $current_revision_id;
  public ?RobotSoftwareSuite $robot_software_suite;
  public ?SourceConfigs $sources;

  public function __construct(shape(
    ?'application' => ?Arn,
    ?'current_revision_id' => ?RevisionId,
    ?'robot_software_suite' => ?RobotSoftwareSuite,
    ?'sources' => ?SourceConfigs,
  ) $s = shape()) {
    $this->application = $s['application'] ?? '';
    $this->current_revision_id = $s['current_revision_id'] ?? '';
    $this->robot_software_suite = $s['robot_software_suite'] ?? null;
    $this->sources = $s['sources'] ?? vec[];
  }
}

class UpdateRobotApplicationResponse {
  public ?Arn $arn;
  public ?LastUpdatedAt $last_updated_at;
  public ?Name $name;
  public ?RevisionId $revision_id;
  public ?RobotSoftwareSuite $robot_software_suite;
  public ?Sources $sources;
  public ?Version $version;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'last_updated_at' => ?LastUpdatedAt,
    ?'name' => ?Name,
    ?'revision_id' => ?RevisionId,
    ?'robot_software_suite' => ?RobotSoftwareSuite,
    ?'sources' => ?Sources,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
    $this->robot_software_suite = $s['robot_software_suite'] ?? null;
    $this->sources = $s['sources'] ?? vec[];
    $this->version = $s['version'] ?? '';
  }
}

class UpdateSimulationApplicationRequest {
  public ?Arn $application;
  public ?RevisionId $current_revision_id;
  public ?RenderingEngine $rendering_engine;
  public ?RobotSoftwareSuite $robot_software_suite;
  public ?SimulationSoftwareSuite $simulation_software_suite;
  public ?SourceConfigs $sources;

  public function __construct(shape(
    ?'application' => ?Arn,
    ?'current_revision_id' => ?RevisionId,
    ?'rendering_engine' => ?RenderingEngine,
    ?'robot_software_suite' => ?RobotSoftwareSuite,
    ?'simulation_software_suite' => ?SimulationSoftwareSuite,
    ?'sources' => ?SourceConfigs,
  ) $s = shape()) {
    $this->application = $s['application'] ?? '';
    $this->current_revision_id = $s['current_revision_id'] ?? '';
    $this->rendering_engine = $s['rendering_engine'] ?? null;
    $this->robot_software_suite = $s['robot_software_suite'] ?? null;
    $this->simulation_software_suite = $s['simulation_software_suite'] ?? null;
    $this->sources = $s['sources'] ?? vec[];
  }
}

class UpdateSimulationApplicationResponse {
  public ?Arn $arn;
  public ?LastUpdatedAt $last_updated_at;
  public ?Name $name;
  public ?RenderingEngine $rendering_engine;
  public ?RevisionId $revision_id;
  public ?RobotSoftwareSuite $robot_software_suite;
  public ?SimulationSoftwareSuite $simulation_software_suite;
  public ?Sources $sources;
  public ?Version $version;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'last_updated_at' => ?LastUpdatedAt,
    ?'name' => ?Name,
    ?'rendering_engine' => ?RenderingEngine,
    ?'revision_id' => ?RevisionId,
    ?'robot_software_suite' => ?RobotSoftwareSuite,
    ?'simulation_software_suite' => ?SimulationSoftwareSuite,
    ?'sources' => ?Sources,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->rendering_engine = $s['rendering_engine'] ?? null;
    $this->revision_id = $s['revision_id'] ?? '';
    $this->robot_software_suite = $s['robot_software_suite'] ?? null;
    $this->simulation_software_suite = $s['simulation_software_suite'] ?? null;
    $this->sources = $s['sources'] ?? vec[];
    $this->version = $s['version'] ?? '';
  }
}

class VPCConfig {
  public bool $assign_public_ip;
  public ?SecurityGroups $security_groups;
  public ?Subnets $subnets;

  public function __construct(shape(
    ?'assign_public_ip' => bool,
    ?'security_groups' => ?SecurityGroups,
    ?'subnets' => ?Subnets,
  ) $s = shape()) {
    $this->assign_public_ip = $s['assign_public_ip'] ?? false;
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->subnets = $s['subnets'] ?? vec[];
  }
}

class VPCConfigResponse {
  public bool $assign_public_ip;
  public ?SecurityGroups $security_groups;
  public ?Subnets $subnets;
  public ?GenericString $vpc_id;

  public function __construct(shape(
    ?'assign_public_ip' => bool,
    ?'security_groups' => ?SecurityGroups,
    ?'subnets' => ?Subnets,
    ?'vpc_id' => ?GenericString,
  ) $s = shape()) {
    $this->assign_public_ip = $s['assign_public_ip'] ?? false;
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->subnets = $s['subnets'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type Version = string;

type VersionQualifier = string;

type errorMessage = string;


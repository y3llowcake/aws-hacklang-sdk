<?hh // strict
namespace slack\aws\kinesisanalytics;

interface KinesisAnalyticsV2 {
  public function AddApplicationCloudWatchLoggingOption(AddApplicationCloudWatchLoggingOptionRequest $in): Awaitable<\Errors\Result<AddApplicationCloudWatchLoggingOptionResponse>>;
  public function AddApplicationInput(AddApplicationInputRequest $in): Awaitable<\Errors\Result<AddApplicationInputResponse>>;
  public function AddApplicationInputProcessingConfiguration(AddApplicationInputProcessingConfigurationRequest $in): Awaitable<\Errors\Result<AddApplicationInputProcessingConfigurationResponse>>;
  public function AddApplicationOutput(AddApplicationOutputRequest $in): Awaitable<\Errors\Result<AddApplicationOutputResponse>>;
  public function AddApplicationReferenceDataSource(AddApplicationReferenceDataSourceRequest $in): Awaitable<\Errors\Result<AddApplicationReferenceDataSourceResponse>>;
  public function AddApplicationVpcConfiguration(AddApplicationVpcConfigurationRequest $in): Awaitable<\Errors\Result<AddApplicationVpcConfigurationResponse>>;
  public function CreateApplication(CreateApplicationRequest $in): Awaitable<\Errors\Result<CreateApplicationResponse>>;
  public function CreateApplicationSnapshot(CreateApplicationSnapshotRequest $in): Awaitable<\Errors\Result<CreateApplicationSnapshotResponse>>;
  public function DeleteApplication(DeleteApplicationRequest $in): Awaitable<\Errors\Result<DeleteApplicationResponse>>;
  public function DeleteApplicationCloudWatchLoggingOption(DeleteApplicationCloudWatchLoggingOptionRequest $in): Awaitable<\Errors\Result<DeleteApplicationCloudWatchLoggingOptionResponse>>;
  public function DeleteApplicationInputProcessingConfiguration(DeleteApplicationInputProcessingConfigurationRequest $in): Awaitable<\Errors\Result<DeleteApplicationInputProcessingConfigurationResponse>>;
  public function DeleteApplicationOutput(DeleteApplicationOutputRequest $in): Awaitable<\Errors\Result<DeleteApplicationOutputResponse>>;
  public function DeleteApplicationReferenceDataSource(DeleteApplicationReferenceDataSourceRequest $in): Awaitable<\Errors\Result<DeleteApplicationReferenceDataSourceResponse>>;
  public function DeleteApplicationSnapshot(DeleteApplicationSnapshotRequest $in): Awaitable<\Errors\Result<DeleteApplicationSnapshotResponse>>;
  public function DeleteApplicationVpcConfiguration(DeleteApplicationVpcConfigurationRequest $in): Awaitable<\Errors\Result<DeleteApplicationVpcConfigurationResponse>>;
  public function DescribeApplication(DescribeApplicationRequest $in): Awaitable<\Errors\Result<DescribeApplicationResponse>>;
  public function DescribeApplicationSnapshot(DescribeApplicationSnapshotRequest $in): Awaitable<\Errors\Result<DescribeApplicationSnapshotResponse>>;
  public function DiscoverInputSchema(DiscoverInputSchemaRequest $in): Awaitable<\Errors\Result<DiscoverInputSchemaResponse>>;
  public function ListApplicationSnapshots(ListApplicationSnapshotsRequest $in): Awaitable<\Errors\Result<ListApplicationSnapshotsResponse>>;
  public function ListApplications(ListApplicationsRequest $in): Awaitable<\Errors\Result<ListApplicationsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function StartApplication(StartApplicationRequest $in): Awaitable<\Errors\Result<StartApplicationResponse>>;
  public function StopApplication(StopApplicationRequest $in): Awaitable<\Errors\Result<StopApplicationResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateApplication(UpdateApplicationRequest $in): Awaitable<\Errors\Result<UpdateApplicationResponse>>;
}

class AddApplicationCloudWatchLoggingOptionRequest {
  public ?ApplicationName $application_name;
  public ?CloudWatchLoggingOption $cloud_watch_logging_option;
  public ?ApplicationVersionId $current_application_version_id;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'cloud_watch_logging_option' => ?CloudWatchLoggingOption,
    ?'current_application_version_id' => ?ApplicationVersionId,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->cloud_watch_logging_option = $s['cloud_watch_logging_option'] ?? null;
    $this->current_application_version_id = $s['current_application_version_id'] ?? 0;
  }
}

class AddApplicationCloudWatchLoggingOptionResponse {
  public ?ResourceARN $application_arn;
  public ?ApplicationVersionId $application_version_id;
  public ?CloudWatchLoggingOptionDescriptions $cloud_watch_logging_option_descriptions;

  public function __construct(shape(
    ?'application_arn' => ?ResourceARN,
    ?'application_version_id' => ?ApplicationVersionId,
    ?'cloud_watch_logging_option_descriptions' => ?CloudWatchLoggingOptionDescriptions,
  ) $s = shape()) {
    $this->application_arn = $s['application_arn'] ?? '';
    $this->application_version_id = $s['application_version_id'] ?? 0;
    $this->cloud_watch_logging_option_descriptions = $s['cloud_watch_logging_option_descriptions'] ?? vec[];
  }
}

class AddApplicationInputProcessingConfigurationRequest {
  public ?ApplicationName $application_name;
  public ?ApplicationVersionId $current_application_version_id;
  public ?Id $input_id;
  public ?InputProcessingConfiguration $input_processing_configuration;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'current_application_version_id' => ?ApplicationVersionId,
    ?'input_id' => ?Id,
    ?'input_processing_configuration' => ?InputProcessingConfiguration,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->current_application_version_id = $s['current_application_version_id'] ?? 0;
    $this->input_id = $s['input_id'] ?? '';
    $this->input_processing_configuration = $s['input_processing_configuration'] ?? null;
  }
}

class AddApplicationInputProcessingConfigurationResponse {
  public ?ResourceARN $application_arn;
  public ?ApplicationVersionId $application_version_id;
  public ?Id $input_id;
  public ?InputProcessingConfigurationDescription $input_processing_configuration_description;

  public function __construct(shape(
    ?'application_arn' => ?ResourceARN,
    ?'application_version_id' => ?ApplicationVersionId,
    ?'input_id' => ?Id,
    ?'input_processing_configuration_description' => ?InputProcessingConfigurationDescription,
  ) $s = shape()) {
    $this->application_arn = $s['application_arn'] ?? '';
    $this->application_version_id = $s['application_version_id'] ?? 0;
    $this->input_id = $s['input_id'] ?? '';
    $this->input_processing_configuration_description = $s['input_processing_configuration_description'] ?? null;
  }
}

class AddApplicationInputRequest {
  public ?ApplicationName $application_name;
  public ?ApplicationVersionId $current_application_version_id;
  public ?Input $input;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'current_application_version_id' => ?ApplicationVersionId,
    ?'input' => ?Input,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->current_application_version_id = $s['current_application_version_id'] ?? 0;
    $this->input = $s['input'] ?? null;
  }
}

class AddApplicationInputResponse {
  public ?ResourceARN $application_arn;
  public ?ApplicationVersionId $application_version_id;
  public ?InputDescriptions $input_descriptions;

  public function __construct(shape(
    ?'application_arn' => ?ResourceARN,
    ?'application_version_id' => ?ApplicationVersionId,
    ?'input_descriptions' => ?InputDescriptions,
  ) $s = shape()) {
    $this->application_arn = $s['application_arn'] ?? '';
    $this->application_version_id = $s['application_version_id'] ?? 0;
    $this->input_descriptions = $s['input_descriptions'] ?? vec[];
  }
}

class AddApplicationOutputRequest {
  public ?ApplicationName $application_name;
  public ?ApplicationVersionId $current_application_version_id;
  public ?Output $output;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'current_application_version_id' => ?ApplicationVersionId,
    ?'output' => ?Output,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->current_application_version_id = $s['current_application_version_id'] ?? 0;
    $this->output = $s['output'] ?? null;
  }
}

class AddApplicationOutputResponse {
  public ?ResourceARN $application_arn;
  public ?ApplicationVersionId $application_version_id;
  public ?OutputDescriptions $output_descriptions;

  public function __construct(shape(
    ?'application_arn' => ?ResourceARN,
    ?'application_version_id' => ?ApplicationVersionId,
    ?'output_descriptions' => ?OutputDescriptions,
  ) $s = shape()) {
    $this->application_arn = $s['application_arn'] ?? '';
    $this->application_version_id = $s['application_version_id'] ?? 0;
    $this->output_descriptions = $s['output_descriptions'] ?? vec[];
  }
}

class AddApplicationReferenceDataSourceRequest {
  public ?ApplicationName $application_name;
  public ?ApplicationVersionId $current_application_version_id;
  public ?ReferenceDataSource $reference_data_source;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'current_application_version_id' => ?ApplicationVersionId,
    ?'reference_data_source' => ?ReferenceDataSource,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->current_application_version_id = $s['current_application_version_id'] ?? 0;
    $this->reference_data_source = $s['reference_data_source'] ?? null;
  }
}

class AddApplicationReferenceDataSourceResponse {
  public ?ResourceARN $application_arn;
  public ?ApplicationVersionId $application_version_id;
  public ?ReferenceDataSourceDescriptions $reference_data_source_descriptions;

  public function __construct(shape(
    ?'application_arn' => ?ResourceARN,
    ?'application_version_id' => ?ApplicationVersionId,
    ?'reference_data_source_descriptions' => ?ReferenceDataSourceDescriptions,
  ) $s = shape()) {
    $this->application_arn = $s['application_arn'] ?? '';
    $this->application_version_id = $s['application_version_id'] ?? 0;
    $this->reference_data_source_descriptions = $s['reference_data_source_descriptions'] ?? vec[];
  }
}

class AddApplicationVpcConfigurationRequest {
  public ?ApplicationName $application_name;
  public ?ApplicationVersionId $current_application_version_id;
  public ?VpcConfiguration $vpc_configuration;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'current_application_version_id' => ?ApplicationVersionId,
    ?'vpc_configuration' => ?VpcConfiguration,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->current_application_version_id = $s['current_application_version_id'] ?? 0;
    $this->vpc_configuration = $s['vpc_configuration'] ?? null;
  }
}

class AddApplicationVpcConfigurationResponse {
  public ?ResourceARN $application_arn;
  public ?ApplicationVersionId $application_version_id;
  public ?VpcConfigurationDescription $vpc_configuration_description;

  public function __construct(shape(
    ?'application_arn' => ?ResourceARN,
    ?'application_version_id' => ?ApplicationVersionId,
    ?'vpc_configuration_description' => ?VpcConfigurationDescription,
  ) $s = shape()) {
    $this->application_arn = $s['application_arn'] ?? '';
    $this->application_version_id = $s['application_version_id'] ?? 0;
    $this->vpc_configuration_description = $s['vpc_configuration_description'] ?? null;
  }
}

class ApplicationCodeConfiguration {
  public ?CodeContent $code_content;
  public ?CodeContentType $code_content_type;

  public function __construct(shape(
    ?'code_content' => ?CodeContent,
    ?'code_content_type' => ?CodeContentType,
  ) $s = shape()) {
    $this->code_content = $s['code_content'] ?? null;
    $this->code_content_type = $s['code_content_type'] ?? '';
  }
}

class ApplicationCodeConfigurationDescription {
  public ?CodeContentDescription $code_content_description;
  public ?CodeContentType $code_content_type;

  public function __construct(shape(
    ?'code_content_description' => ?CodeContentDescription,
    ?'code_content_type' => ?CodeContentType,
  ) $s = shape()) {
    $this->code_content_description = $s['code_content_description'] ?? null;
    $this->code_content_type = $s['code_content_type'] ?? '';
  }
}

class ApplicationCodeConfigurationUpdate {
  public ?CodeContentType $code_content_type_update;
  public ?CodeContentUpdate $code_content_update;

  public function __construct(shape(
    ?'code_content_type_update' => ?CodeContentType,
    ?'code_content_update' => ?CodeContentUpdate,
  ) $s = shape()) {
    $this->code_content_type_update = $s['code_content_type_update'] ?? '';
    $this->code_content_update = $s['code_content_update'] ?? null;
  }
}

class ApplicationConfiguration {
  public ?ApplicationCodeConfiguration $application_code_configuration;
  public ?ApplicationSnapshotConfiguration $application_snapshot_configuration;
  public ?EnvironmentProperties $environment_properties;
  public ?FlinkApplicationConfiguration $flink_application_configuration;
  public ?SqlApplicationConfiguration $sql_application_configuration;
  public ?VpcConfigurations $vpc_configurations;

  public function __construct(shape(
    ?'application_code_configuration' => ?ApplicationCodeConfiguration,
    ?'application_snapshot_configuration' => ?ApplicationSnapshotConfiguration,
    ?'environment_properties' => ?EnvironmentProperties,
    ?'flink_application_configuration' => ?FlinkApplicationConfiguration,
    ?'sql_application_configuration' => ?SqlApplicationConfiguration,
    ?'vpc_configurations' => ?VpcConfigurations,
  ) $s = shape()) {
    $this->application_code_configuration = $s['application_code_configuration'] ?? null;
    $this->application_snapshot_configuration = $s['application_snapshot_configuration'] ?? null;
    $this->environment_properties = $s['environment_properties'] ?? null;
    $this->flink_application_configuration = $s['flink_application_configuration'] ?? null;
    $this->sql_application_configuration = $s['sql_application_configuration'] ?? null;
    $this->vpc_configurations = $s['vpc_configurations'] ?? vec[];
  }
}

class ApplicationConfigurationDescription {
  public ?ApplicationCodeConfigurationDescription $application_code_configuration_description;
  public ?ApplicationSnapshotConfigurationDescription $application_snapshot_configuration_description;
  public ?EnvironmentPropertyDescriptions $environment_property_descriptions;
  public ?FlinkApplicationConfigurationDescription $flink_application_configuration_description;
  public ?RunConfigurationDescription $run_configuration_description;
  public ?SqlApplicationConfigurationDescription $sql_application_configuration_description;
  public ?VpcConfigurationDescriptions $vpc_configuration_descriptions;

  public function __construct(shape(
    ?'application_code_configuration_description' => ?ApplicationCodeConfigurationDescription,
    ?'application_snapshot_configuration_description' => ?ApplicationSnapshotConfigurationDescription,
    ?'environment_property_descriptions' => ?EnvironmentPropertyDescriptions,
    ?'flink_application_configuration_description' => ?FlinkApplicationConfigurationDescription,
    ?'run_configuration_description' => ?RunConfigurationDescription,
    ?'sql_application_configuration_description' => ?SqlApplicationConfigurationDescription,
    ?'vpc_configuration_descriptions' => ?VpcConfigurationDescriptions,
  ) $s = shape()) {
    $this->application_code_configuration_description = $s['application_code_configuration_description'] ?? null;
    $this->application_snapshot_configuration_description = $s['application_snapshot_configuration_description'] ?? null;
    $this->environment_property_descriptions = $s['environment_property_descriptions'] ?? null;
    $this->flink_application_configuration_description = $s['flink_application_configuration_description'] ?? null;
    $this->run_configuration_description = $s['run_configuration_description'] ?? null;
    $this->sql_application_configuration_description = $s['sql_application_configuration_description'] ?? null;
    $this->vpc_configuration_descriptions = $s['vpc_configuration_descriptions'] ?? vec[];
  }
}

class ApplicationConfigurationUpdate {
  public ?ApplicationCodeConfigurationUpdate $application_code_configuration_update;
  public ?ApplicationSnapshotConfigurationUpdate $application_snapshot_configuration_update;
  public ?EnvironmentPropertyUpdates $environment_property_updates;
  public ?FlinkApplicationConfigurationUpdate $flink_application_configuration_update;
  public ?SqlApplicationConfigurationUpdate $sql_application_configuration_update;
  public ?VpcConfigurationUpdates $vpc_configuration_updates;

  public function __construct(shape(
    ?'application_code_configuration_update' => ?ApplicationCodeConfigurationUpdate,
    ?'application_snapshot_configuration_update' => ?ApplicationSnapshotConfigurationUpdate,
    ?'environment_property_updates' => ?EnvironmentPropertyUpdates,
    ?'flink_application_configuration_update' => ?FlinkApplicationConfigurationUpdate,
    ?'sql_application_configuration_update' => ?SqlApplicationConfigurationUpdate,
    ?'vpc_configuration_updates' => ?VpcConfigurationUpdates,
  ) $s = shape()) {
    $this->application_code_configuration_update = $s['application_code_configuration_update'] ?? null;
    $this->application_snapshot_configuration_update = $s['application_snapshot_configuration_update'] ?? null;
    $this->environment_property_updates = $s['environment_property_updates'] ?? null;
    $this->flink_application_configuration_update = $s['flink_application_configuration_update'] ?? null;
    $this->sql_application_configuration_update = $s['sql_application_configuration_update'] ?? null;
    $this->vpc_configuration_updates = $s['vpc_configuration_updates'] ?? vec[];
  }
}

type ApplicationDescription = string;

class ApplicationDetail {
  public ?ResourceARN $application_arn;
  public ?ApplicationConfigurationDescription $application_configuration_description;
  public ?ApplicationDescription $application_description;
  public ?ApplicationName $application_name;
  public ?ApplicationStatus $application_status;
  public ?ApplicationVersionId $application_version_id;
  public ?CloudWatchLoggingOptionDescriptions $cloud_watch_logging_option_descriptions;
  public ?Timestamp $create_timestamp;
  public ?Timestamp $last_update_timestamp;
  public ?RuntimeEnvironment $runtime_environment;
  public ?RoleARN $service_execution_role;

  public function __construct(shape(
    ?'application_arn' => ?ResourceARN,
    ?'application_configuration_description' => ?ApplicationConfigurationDescription,
    ?'application_description' => ?ApplicationDescription,
    ?'application_name' => ?ApplicationName,
    ?'application_status' => ?ApplicationStatus,
    ?'application_version_id' => ?ApplicationVersionId,
    ?'cloud_watch_logging_option_descriptions' => ?CloudWatchLoggingOptionDescriptions,
    ?'create_timestamp' => ?Timestamp,
    ?'last_update_timestamp' => ?Timestamp,
    ?'runtime_environment' => ?RuntimeEnvironment,
    ?'service_execution_role' => ?RoleARN,
  ) $s = shape()) {
    $this->application_arn = $s['application_arn'] ?? '';
    $this->application_configuration_description = $s['application_configuration_description'] ?? null;
    $this->application_description = $s['application_description'] ?? '';
    $this->application_name = $s['application_name'] ?? '';
    $this->application_status = $s['application_status'] ?? '';
    $this->application_version_id = $s['application_version_id'] ?? 0;
    $this->cloud_watch_logging_option_descriptions = $s['cloud_watch_logging_option_descriptions'] ?? vec[];
    $this->create_timestamp = $s['create_timestamp'] ?? 0;
    $this->last_update_timestamp = $s['last_update_timestamp'] ?? 0;
    $this->runtime_environment = $s['runtime_environment'] ?? '';
    $this->service_execution_role = $s['service_execution_role'] ?? '';
  }
}

type ApplicationName = string;

class ApplicationRestoreConfiguration {
  public ?ApplicationRestoreType $application_restore_type;
  public ?SnapshotName $snapshot_name;

  public function __construct(shape(
    ?'application_restore_type' => ?ApplicationRestoreType,
    ?'snapshot_name' => ?SnapshotName,
  ) $s = shape()) {
    $this->application_restore_type = $s['application_restore_type'] ?? '';
    $this->snapshot_name = $s['snapshot_name'] ?? '';
  }
}

type ApplicationRestoreType = string;

class ApplicationSnapshotConfiguration {
  public ?BooleanObject $snapshots_enabled;

  public function __construct(shape(
    ?'snapshots_enabled' => ?BooleanObject,
  ) $s = shape()) {
    $this->snapshots_enabled = $s['snapshots_enabled'] ?? false;
  }
}

class ApplicationSnapshotConfigurationDescription {
  public ?BooleanObject $snapshots_enabled;

  public function __construct(shape(
    ?'snapshots_enabled' => ?BooleanObject,
  ) $s = shape()) {
    $this->snapshots_enabled = $s['snapshots_enabled'] ?? false;
  }
}

class ApplicationSnapshotConfigurationUpdate {
  public ?BooleanObject $snapshots_enabled_update;

  public function __construct(shape(
    ?'snapshots_enabled_update' => ?BooleanObject,
  ) $s = shape()) {
    $this->snapshots_enabled_update = $s['snapshots_enabled_update'] ?? false;
  }
}

type ApplicationStatus = string;

type ApplicationSummaries = vec<ApplicationSummary>;

class ApplicationSummary {
  public ?ResourceARN $application_arn;
  public ?ApplicationName $application_name;
  public ?ApplicationStatus $application_status;
  public ?ApplicationVersionId $application_version_id;
  public ?RuntimeEnvironment $runtime_environment;

  public function __construct(shape(
    ?'application_arn' => ?ResourceARN,
    ?'application_name' => ?ApplicationName,
    ?'application_status' => ?ApplicationStatus,
    ?'application_version_id' => ?ApplicationVersionId,
    ?'runtime_environment' => ?RuntimeEnvironment,
  ) $s = shape()) {
    $this->application_arn = $s['application_arn'] ?? '';
    $this->application_name = $s['application_name'] ?? '';
    $this->application_status = $s['application_status'] ?? '';
    $this->application_version_id = $s['application_version_id'] ?? 0;
    $this->runtime_environment = $s['runtime_environment'] ?? '';
  }
}

type ApplicationVersionId = int;

type BooleanObject = bool;

type BucketARN = string;

class CSVMappingParameters {
  public ?RecordColumnDelimiter $record_column_delimiter;
  public ?RecordRowDelimiter $record_row_delimiter;

  public function __construct(shape(
    ?'record_column_delimiter' => ?RecordColumnDelimiter,
    ?'record_row_delimiter' => ?RecordRowDelimiter,
  ) $s = shape()) {
    $this->record_column_delimiter = $s['record_column_delimiter'] ?? '';
    $this->record_row_delimiter = $s['record_row_delimiter'] ?? '';
  }
}

class CheckpointConfiguration {
  public ?CheckpointInterval $checkpoint_interval;
  public ?BooleanObject $checkpointing_enabled;
  public ?ConfigurationType $configuration_type;
  public ?MinPauseBetweenCheckpoints $min_pause_between_checkpoints;

  public function __construct(shape(
    ?'checkpoint_interval' => ?CheckpointInterval,
    ?'checkpointing_enabled' => ?BooleanObject,
    ?'configuration_type' => ?ConfigurationType,
    ?'min_pause_between_checkpoints' => ?MinPauseBetweenCheckpoints,
  ) $s = shape()) {
    $this->checkpoint_interval = $s['checkpoint_interval'] ?? 0;
    $this->checkpointing_enabled = $s['checkpointing_enabled'] ?? false;
    $this->configuration_type = $s['configuration_type'] ?? '';
    $this->min_pause_between_checkpoints = $s['min_pause_between_checkpoints'] ?? 0;
  }
}

class CheckpointConfigurationDescription {
  public ?CheckpointInterval $checkpoint_interval;
  public ?BooleanObject $checkpointing_enabled;
  public ?ConfigurationType $configuration_type;
  public ?MinPauseBetweenCheckpoints $min_pause_between_checkpoints;

  public function __construct(shape(
    ?'checkpoint_interval' => ?CheckpointInterval,
    ?'checkpointing_enabled' => ?BooleanObject,
    ?'configuration_type' => ?ConfigurationType,
    ?'min_pause_between_checkpoints' => ?MinPauseBetweenCheckpoints,
  ) $s = shape()) {
    $this->checkpoint_interval = $s['checkpoint_interval'] ?? 0;
    $this->checkpointing_enabled = $s['checkpointing_enabled'] ?? false;
    $this->configuration_type = $s['configuration_type'] ?? '';
    $this->min_pause_between_checkpoints = $s['min_pause_between_checkpoints'] ?? 0;
  }
}

class CheckpointConfigurationUpdate {
  public ?CheckpointInterval $checkpoint_interval_update;
  public ?BooleanObject $checkpointing_enabled_update;
  public ?ConfigurationType $configuration_type_update;
  public ?MinPauseBetweenCheckpoints $min_pause_between_checkpoints_update;

  public function __construct(shape(
    ?'checkpoint_interval_update' => ?CheckpointInterval,
    ?'checkpointing_enabled_update' => ?BooleanObject,
    ?'configuration_type_update' => ?ConfigurationType,
    ?'min_pause_between_checkpoints_update' => ?MinPauseBetweenCheckpoints,
  ) $s = shape()) {
    $this->checkpoint_interval_update = $s['checkpoint_interval_update'] ?? 0;
    $this->checkpointing_enabled_update = $s['checkpointing_enabled_update'] ?? false;
    $this->configuration_type_update = $s['configuration_type_update'] ?? '';
    $this->min_pause_between_checkpoints_update = $s['min_pause_between_checkpoints_update'] ?? 0;
  }
}

type CheckpointInterval = int;

class CloudWatchLoggingOption {
  public ?LogStreamARN $log_stream_arn;

  public function __construct(shape(
    ?'log_stream_arn' => ?LogStreamARN,
  ) $s = shape()) {
    $this->log_stream_arn = $s['log_stream_arn'] ?? '';
  }
}

class CloudWatchLoggingOptionDescription {
  public ?Id $cloud_watch_logging_option_id;
  public ?LogStreamARN $log_stream_arn;
  public ?RoleARN $role_arn;

  public function __construct(shape(
    ?'cloud_watch_logging_option_id' => ?Id,
    ?'log_stream_arn' => ?LogStreamARN,
    ?'role_arn' => ?RoleARN,
  ) $s = shape()) {
    $this->cloud_watch_logging_option_id = $s['cloud_watch_logging_option_id'] ?? '';
    $this->log_stream_arn = $s['log_stream_arn'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

type CloudWatchLoggingOptionDescriptions = vec<CloudWatchLoggingOptionDescription>;

class CloudWatchLoggingOptionUpdate {
  public ?Id $cloud_watch_logging_option_id;
  public ?LogStreamARN $log_stream_arn_update;

  public function __construct(shape(
    ?'cloud_watch_logging_option_id' => ?Id,
    ?'log_stream_arn_update' => ?LogStreamARN,
  ) $s = shape()) {
    $this->cloud_watch_logging_option_id = $s['cloud_watch_logging_option_id'] ?? '';
    $this->log_stream_arn_update = $s['log_stream_arn_update'] ?? '';
  }
}

type CloudWatchLoggingOptionUpdates = vec<CloudWatchLoggingOptionUpdate>;

type CloudWatchLoggingOptions = vec<CloudWatchLoggingOption>;

class CodeContent {
  public ?S3ContentLocation $s_3_content_location;
  public ?TextContent $text_content;
  public ?ZipFileContent $zip_file_content;

  public function __construct(shape(
    ?'s_3_content_location' => ?S3ContentLocation,
    ?'text_content' => ?TextContent,
    ?'zip_file_content' => ?ZipFileContent,
  ) $s = shape()) {
    $this->s_3_content_location = $s['s_3_content_location'] ?? null;
    $this->text_content = $s['text_content'] ?? '';
    $this->zip_file_content = $s['zip_file_content'] ?? '';
  }
}

class CodeContentDescription {
  public ?CodeMD5 $code_md_5;
  public ?CodeSize $code_size;
  public ?S3ApplicationCodeLocationDescription $s_3_application_code_location_description;
  public ?TextContent $text_content;

  public function __construct(shape(
    ?'code_md_5' => ?CodeMD5,
    ?'code_size' => ?CodeSize,
    ?'s_3_application_code_location_description' => ?S3ApplicationCodeLocationDescription,
    ?'text_content' => ?TextContent,
  ) $s = shape()) {
    $this->code_md_5 = $s['code_md_5'] ?? '';
    $this->code_size = $s['code_size'] ?? 0;
    $this->s_3_application_code_location_description = $s['s_3_application_code_location_description'] ?? null;
    $this->text_content = $s['text_content'] ?? '';
  }
}

type CodeContentType = string;

class CodeContentUpdate {
  public ?S3ContentLocationUpdate $s_3_content_location_update;
  public ?TextContent $text_content_update;
  public ?ZipFileContent $zip_file_content_update;

  public function __construct(shape(
    ?'s_3_content_location_update' => ?S3ContentLocationUpdate,
    ?'text_content_update' => ?TextContent,
    ?'zip_file_content_update' => ?ZipFileContent,
  ) $s = shape()) {
    $this->s_3_content_location_update = $s['s_3_content_location_update'] ?? null;
    $this->text_content_update = $s['text_content_update'] ?? '';
    $this->zip_file_content_update = $s['zip_file_content_update'] ?? '';
  }
}

type CodeMD5 = string;

type CodeSize = int;

class CodeValidationException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ConcurrentModificationException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ConfigurationType = string;

class CreateApplicationRequest {
  public ?ApplicationConfiguration $application_configuration;
  public ?ApplicationDescription $application_description;
  public ?ApplicationName $application_name;
  public ?CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ?RuntimeEnvironment $runtime_environment;
  public ?RoleARN $service_execution_role;
  public ?Tags $tags;

  public function __construct(shape(
    ?'application_configuration' => ?ApplicationConfiguration,
    ?'application_description' => ?ApplicationDescription,
    ?'application_name' => ?ApplicationName,
    ?'cloud_watch_logging_options' => ?CloudWatchLoggingOptions,
    ?'runtime_environment' => ?RuntimeEnvironment,
    ?'service_execution_role' => ?RoleARN,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->application_configuration = $s['application_configuration'] ?? null;
    $this->application_description = $s['application_description'] ?? '';
    $this->application_name = $s['application_name'] ?? '';
    $this->cloud_watch_logging_options = $s['cloud_watch_logging_options'] ?? vec[];
    $this->runtime_environment = $s['runtime_environment'] ?? '';
    $this->service_execution_role = $s['service_execution_role'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateApplicationResponse {
  public ?ApplicationDetail $application_detail;

  public function __construct(shape(
    ?'application_detail' => ?ApplicationDetail,
  ) $s = shape()) {
    $this->application_detail = $s['application_detail'] ?? null;
  }
}

class CreateApplicationSnapshotRequest {
  public ?ApplicationName $application_name;
  public ?SnapshotName $snapshot_name;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'snapshot_name' => ?SnapshotName,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->snapshot_name = $s['snapshot_name'] ?? '';
  }
}

class CreateApplicationSnapshotResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteApplicationCloudWatchLoggingOptionRequest {
  public ?ApplicationName $application_name;
  public ?Id $cloud_watch_logging_option_id;
  public ?ApplicationVersionId $current_application_version_id;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'cloud_watch_logging_option_id' => ?Id,
    ?'current_application_version_id' => ?ApplicationVersionId,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->cloud_watch_logging_option_id = $s['cloud_watch_logging_option_id'] ?? '';
    $this->current_application_version_id = $s['current_application_version_id'] ?? 0;
  }
}

class DeleteApplicationCloudWatchLoggingOptionResponse {
  public ?ResourceARN $application_arn;
  public ?ApplicationVersionId $application_version_id;
  public ?CloudWatchLoggingOptionDescriptions $cloud_watch_logging_option_descriptions;

  public function __construct(shape(
    ?'application_arn' => ?ResourceARN,
    ?'application_version_id' => ?ApplicationVersionId,
    ?'cloud_watch_logging_option_descriptions' => ?CloudWatchLoggingOptionDescriptions,
  ) $s = shape()) {
    $this->application_arn = $s['application_arn'] ?? '';
    $this->application_version_id = $s['application_version_id'] ?? 0;
    $this->cloud_watch_logging_option_descriptions = $s['cloud_watch_logging_option_descriptions'] ?? vec[];
  }
}

class DeleteApplicationInputProcessingConfigurationRequest {
  public ?ApplicationName $application_name;
  public ?ApplicationVersionId $current_application_version_id;
  public ?Id $input_id;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'current_application_version_id' => ?ApplicationVersionId,
    ?'input_id' => ?Id,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->current_application_version_id = $s['current_application_version_id'] ?? 0;
    $this->input_id = $s['input_id'] ?? '';
  }
}

class DeleteApplicationInputProcessingConfigurationResponse {
  public ?ResourceARN $application_arn;
  public ?ApplicationVersionId $application_version_id;

  public function __construct(shape(
    ?'application_arn' => ?ResourceARN,
    ?'application_version_id' => ?ApplicationVersionId,
  ) $s = shape()) {
    $this->application_arn = $s['application_arn'] ?? '';
    $this->application_version_id = $s['application_version_id'] ?? 0;
  }
}

class DeleteApplicationOutputRequest {
  public ?ApplicationName $application_name;
  public ?ApplicationVersionId $current_application_version_id;
  public ?Id $output_id;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'current_application_version_id' => ?ApplicationVersionId,
    ?'output_id' => ?Id,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->current_application_version_id = $s['current_application_version_id'] ?? 0;
    $this->output_id = $s['output_id'] ?? '';
  }
}

class DeleteApplicationOutputResponse {
  public ?ResourceARN $application_arn;
  public ?ApplicationVersionId $application_version_id;

  public function __construct(shape(
    ?'application_arn' => ?ResourceARN,
    ?'application_version_id' => ?ApplicationVersionId,
  ) $s = shape()) {
    $this->application_arn = $s['application_arn'] ?? '';
    $this->application_version_id = $s['application_version_id'] ?? 0;
  }
}

class DeleteApplicationReferenceDataSourceRequest {
  public ?ApplicationName $application_name;
  public ?ApplicationVersionId $current_application_version_id;
  public ?Id $reference_id;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'current_application_version_id' => ?ApplicationVersionId,
    ?'reference_id' => ?Id,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->current_application_version_id = $s['current_application_version_id'] ?? 0;
    $this->reference_id = $s['reference_id'] ?? '';
  }
}

class DeleteApplicationReferenceDataSourceResponse {
  public ?ResourceARN $application_arn;
  public ?ApplicationVersionId $application_version_id;

  public function __construct(shape(
    ?'application_arn' => ?ResourceARN,
    ?'application_version_id' => ?ApplicationVersionId,
  ) $s = shape()) {
    $this->application_arn = $s['application_arn'] ?? '';
    $this->application_version_id = $s['application_version_id'] ?? 0;
  }
}

class DeleteApplicationRequest {
  public ?ApplicationName $application_name;
  public ?Timestamp $create_timestamp;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'create_timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->create_timestamp = $s['create_timestamp'] ?? 0;
  }
}

class DeleteApplicationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteApplicationSnapshotRequest {
  public ?ApplicationName $application_name;
  public ?Timestamp $snapshot_creation_timestamp;
  public ?SnapshotName $snapshot_name;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'snapshot_creation_timestamp' => ?Timestamp,
    ?'snapshot_name' => ?SnapshotName,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->snapshot_creation_timestamp = $s['snapshot_creation_timestamp'] ?? 0;
    $this->snapshot_name = $s['snapshot_name'] ?? '';
  }
}

class DeleteApplicationSnapshotResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteApplicationVpcConfigurationRequest {
  public ?ApplicationName $application_name;
  public ?ApplicationVersionId $current_application_version_id;
  public ?Id $vpc_configuration_id;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'current_application_version_id' => ?ApplicationVersionId,
    ?'vpc_configuration_id' => ?Id,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->current_application_version_id = $s['current_application_version_id'] ?? 0;
    $this->vpc_configuration_id = $s['vpc_configuration_id'] ?? '';
  }
}

class DeleteApplicationVpcConfigurationResponse {
  public ?ResourceARN $application_arn;
  public ?ApplicationVersionId $application_version_id;

  public function __construct(shape(
    ?'application_arn' => ?ResourceARN,
    ?'application_version_id' => ?ApplicationVersionId,
  ) $s = shape()) {
    $this->application_arn = $s['application_arn'] ?? '';
    $this->application_version_id = $s['application_version_id'] ?? 0;
  }
}

class DescribeApplicationRequest {
  public ?ApplicationName $application_name;
  public ?BooleanObject $include_additional_details;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'include_additional_details' => ?BooleanObject,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->include_additional_details = $s['include_additional_details'] ?? false;
  }
}

class DescribeApplicationResponse {
  public ?ApplicationDetail $application_detail;

  public function __construct(shape(
    ?'application_detail' => ?ApplicationDetail,
  ) $s = shape()) {
    $this->application_detail = $s['application_detail'] ?? null;
  }
}

class DescribeApplicationSnapshotRequest {
  public ?ApplicationName $application_name;
  public ?SnapshotName $snapshot_name;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'snapshot_name' => ?SnapshotName,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->snapshot_name = $s['snapshot_name'] ?? '';
  }
}

class DescribeApplicationSnapshotResponse {
  public ?SnapshotDetails $snapshot_details;

  public function __construct(shape(
    ?'snapshot_details' => ?SnapshotDetails,
  ) $s = shape()) {
    $this->snapshot_details = $s['snapshot_details'] ?? null;
  }
}

class DestinationSchema {
  public ?RecordFormatType $record_format_type;

  public function __construct(shape(
    ?'record_format_type' => ?RecordFormatType,
  ) $s = shape()) {
    $this->record_format_type = $s['record_format_type'] ?? '';
  }
}

class DiscoverInputSchemaRequest {
  public ?InputProcessingConfiguration $input_processing_configuration;
  public ?InputStartingPositionConfiguration $input_starting_position_configuration;
  public ?ResourceARN $resource_arn;
  public ?S3Configuration $s_3_configuration;
  public ?RoleARN $service_execution_role;

  public function __construct(shape(
    ?'input_processing_configuration' => ?InputProcessingConfiguration,
    ?'input_starting_position_configuration' => ?InputStartingPositionConfiguration,
    ?'resource_arn' => ?ResourceARN,
    ?'s_3_configuration' => ?S3Configuration,
    ?'service_execution_role' => ?RoleARN,
  ) $s = shape()) {
    $this->input_processing_configuration = $s['input_processing_configuration'] ?? null;
    $this->input_starting_position_configuration = $s['input_starting_position_configuration'] ?? null;
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->s_3_configuration = $s['s_3_configuration'] ?? null;
    $this->service_execution_role = $s['service_execution_role'] ?? '';
  }
}

class DiscoverInputSchemaResponse {
  public ?SourceSchema $input_schema;
  public ?ParsedInputRecords $parsed_input_records;
  public ?ProcessedInputRecords $processed_input_records;
  public ?RawInputRecords $raw_input_records;

  public function __construct(shape(
    ?'input_schema' => ?SourceSchema,
    ?'parsed_input_records' => ?ParsedInputRecords,
    ?'processed_input_records' => ?ProcessedInputRecords,
    ?'raw_input_records' => ?RawInputRecords,
  ) $s = shape()) {
    $this->input_schema = $s['input_schema'] ?? null;
    $this->parsed_input_records = $s['parsed_input_records'] ?? vec[];
    $this->processed_input_records = $s['processed_input_records'] ?? vec[];
    $this->raw_input_records = $s['raw_input_records'] ?? vec[];
  }
}

class EnvironmentProperties {
  public ?PropertyGroups $property_groups;

  public function __construct(shape(
    ?'property_groups' => ?PropertyGroups,
  ) $s = shape()) {
    $this->property_groups = $s['property_groups'] ?? vec[];
  }
}

class EnvironmentPropertyDescriptions {
  public ?PropertyGroups $property_group_descriptions;

  public function __construct(shape(
    ?'property_group_descriptions' => ?PropertyGroups,
  ) $s = shape()) {
    $this->property_group_descriptions = $s['property_group_descriptions'] ?? vec[];
  }
}

class EnvironmentPropertyUpdates {
  public ?PropertyGroups $property_groups;

  public function __construct(shape(
    ?'property_groups' => ?PropertyGroups,
  ) $s = shape()) {
    $this->property_groups = $s['property_groups'] ?? vec[];
  }
}

type ErrorMessage = string;

type FileKey = string;

class FlinkApplicationConfiguration {
  public ?CheckpointConfiguration $checkpoint_configuration;
  public ?MonitoringConfiguration $monitoring_configuration;
  public ?ParallelismConfiguration $parallelism_configuration;

  public function __construct(shape(
    ?'checkpoint_configuration' => ?CheckpointConfiguration,
    ?'monitoring_configuration' => ?MonitoringConfiguration,
    ?'parallelism_configuration' => ?ParallelismConfiguration,
  ) $s = shape()) {
    $this->checkpoint_configuration = $s['checkpoint_configuration'] ?? null;
    $this->monitoring_configuration = $s['monitoring_configuration'] ?? null;
    $this->parallelism_configuration = $s['parallelism_configuration'] ?? null;
  }
}

class FlinkApplicationConfigurationDescription {
  public ?CheckpointConfigurationDescription $checkpoint_configuration_description;
  public ?JobPlanDescription $job_plan_description;
  public ?MonitoringConfigurationDescription $monitoring_configuration_description;
  public ?ParallelismConfigurationDescription $parallelism_configuration_description;

  public function __construct(shape(
    ?'checkpoint_configuration_description' => ?CheckpointConfigurationDescription,
    ?'job_plan_description' => ?JobPlanDescription,
    ?'monitoring_configuration_description' => ?MonitoringConfigurationDescription,
    ?'parallelism_configuration_description' => ?ParallelismConfigurationDescription,
  ) $s = shape()) {
    $this->checkpoint_configuration_description = $s['checkpoint_configuration_description'] ?? null;
    $this->job_plan_description = $s['job_plan_description'] ?? '';
    $this->monitoring_configuration_description = $s['monitoring_configuration_description'] ?? null;
    $this->parallelism_configuration_description = $s['parallelism_configuration_description'] ?? null;
  }
}

class FlinkApplicationConfigurationUpdate {
  public ?CheckpointConfigurationUpdate $checkpoint_configuration_update;
  public ?MonitoringConfigurationUpdate $monitoring_configuration_update;
  public ?ParallelismConfigurationUpdate $parallelism_configuration_update;

  public function __construct(shape(
    ?'checkpoint_configuration_update' => ?CheckpointConfigurationUpdate,
    ?'monitoring_configuration_update' => ?MonitoringConfigurationUpdate,
    ?'parallelism_configuration_update' => ?ParallelismConfigurationUpdate,
  ) $s = shape()) {
    $this->checkpoint_configuration_update = $s['checkpoint_configuration_update'] ?? null;
    $this->monitoring_configuration_update = $s['monitoring_configuration_update'] ?? null;
    $this->parallelism_configuration_update = $s['parallelism_configuration_update'] ?? null;
  }
}

class FlinkRunConfiguration {
  public ?BooleanObject $allow_non_restored_state;

  public function __construct(shape(
    ?'allow_non_restored_state' => ?BooleanObject,
  ) $s = shape()) {
    $this->allow_non_restored_state = $s['allow_non_restored_state'] ?? false;
  }
}

type Id = string;

type InAppStreamName = string;

type InAppStreamNames = vec<InAppStreamName>;

type InAppTableName = string;

class Input {
  public ?InputParallelism $input_parallelism;
  public ?InputProcessingConfiguration $input_processing_configuration;
  public ?SourceSchema $input_schema;
  public ?KinesisFirehoseInput $kinesis_firehose_input;
  public ?KinesisStreamsInput $kinesis_streams_input;
  public ?InAppStreamName $name_prefix;

  public function __construct(shape(
    ?'input_parallelism' => ?InputParallelism,
    ?'input_processing_configuration' => ?InputProcessingConfiguration,
    ?'input_schema' => ?SourceSchema,
    ?'kinesis_firehose_input' => ?KinesisFirehoseInput,
    ?'kinesis_streams_input' => ?KinesisStreamsInput,
    ?'name_prefix' => ?InAppStreamName,
  ) $s = shape()) {
    $this->input_parallelism = $s['input_parallelism'] ?? null;
    $this->input_processing_configuration = $s['input_processing_configuration'] ?? null;
    $this->input_schema = $s['input_schema'] ?? null;
    $this->kinesis_firehose_input = $s['kinesis_firehose_input'] ?? null;
    $this->kinesis_streams_input = $s['kinesis_streams_input'] ?? null;
    $this->name_prefix = $s['name_prefix'] ?? '';
  }
}

class InputDescription {
  public ?InAppStreamNames $in_app_stream_names;
  public ?Id $input_id;
  public ?InputParallelism $input_parallelism;
  public ?InputProcessingConfigurationDescription $input_processing_configuration_description;
  public ?SourceSchema $input_schema;
  public ?InputStartingPositionConfiguration $input_starting_position_configuration;
  public ?KinesisFirehoseInputDescription $kinesis_firehose_input_description;
  public ?KinesisStreamsInputDescription $kinesis_streams_input_description;
  public ?InAppStreamName $name_prefix;

  public function __construct(shape(
    ?'in_app_stream_names' => ?InAppStreamNames,
    ?'input_id' => ?Id,
    ?'input_parallelism' => ?InputParallelism,
    ?'input_processing_configuration_description' => ?InputProcessingConfigurationDescription,
    ?'input_schema' => ?SourceSchema,
    ?'input_starting_position_configuration' => ?InputStartingPositionConfiguration,
    ?'kinesis_firehose_input_description' => ?KinesisFirehoseInputDescription,
    ?'kinesis_streams_input_description' => ?KinesisStreamsInputDescription,
    ?'name_prefix' => ?InAppStreamName,
  ) $s = shape()) {
    $this->in_app_stream_names = $s['in_app_stream_names'] ?? vec[];
    $this->input_id = $s['input_id'] ?? '';
    $this->input_parallelism = $s['input_parallelism'] ?? null;
    $this->input_processing_configuration_description = $s['input_processing_configuration_description'] ?? null;
    $this->input_schema = $s['input_schema'] ?? null;
    $this->input_starting_position_configuration = $s['input_starting_position_configuration'] ?? null;
    $this->kinesis_firehose_input_description = $s['kinesis_firehose_input_description'] ?? null;
    $this->kinesis_streams_input_description = $s['kinesis_streams_input_description'] ?? null;
    $this->name_prefix = $s['name_prefix'] ?? '';
  }
}

type InputDescriptions = vec<InputDescription>;

class InputLambdaProcessor {
  public ?ResourceARN $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class InputLambdaProcessorDescription {
  public ?ResourceARN $resource_arn;
  public ?RoleARN $role_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
    ?'role_arn' => ?RoleARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class InputLambdaProcessorUpdate {
  public ?ResourceARN $resource_arn_update;

  public function __construct(shape(
    ?'resource_arn_update' => ?ResourceARN,
  ) $s = shape()) {
    $this->resource_arn_update = $s['resource_arn_update'] ?? '';
  }
}

class InputParallelism {
  public ?InputParallelismCount $count;

  public function __construct(shape(
    ?'count' => ?InputParallelismCount,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
  }
}

type InputParallelismCount = int;

class InputParallelismUpdate {
  public ?InputParallelismCount $count_update;

  public function __construct(shape(
    ?'count_update' => ?InputParallelismCount,
  ) $s = shape()) {
    $this->count_update = $s['count_update'] ?? 0;
  }
}

class InputProcessingConfiguration {
  public ?InputLambdaProcessor $input_lambda_processor;

  public function __construct(shape(
    ?'input_lambda_processor' => ?InputLambdaProcessor,
  ) $s = shape()) {
    $this->input_lambda_processor = $s['input_lambda_processor'] ?? null;
  }
}

class InputProcessingConfigurationDescription {
  public ?InputLambdaProcessorDescription $input_lambda_processor_description;

  public function __construct(shape(
    ?'input_lambda_processor_description' => ?InputLambdaProcessorDescription,
  ) $s = shape()) {
    $this->input_lambda_processor_description = $s['input_lambda_processor_description'] ?? null;
  }
}

class InputProcessingConfigurationUpdate {
  public ?InputLambdaProcessorUpdate $input_lambda_processor_update;

  public function __construct(shape(
    ?'input_lambda_processor_update' => ?InputLambdaProcessorUpdate,
  ) $s = shape()) {
    $this->input_lambda_processor_update = $s['input_lambda_processor_update'] ?? null;
  }
}

class InputSchemaUpdate {
  public ?RecordColumns $record_column_updates;
  public ?RecordEncoding $record_encoding_update;
  public ?RecordFormat $record_format_update;

  public function __construct(shape(
    ?'record_column_updates' => ?RecordColumns,
    ?'record_encoding_update' => ?RecordEncoding,
    ?'record_format_update' => ?RecordFormat,
  ) $s = shape()) {
    $this->record_column_updates = $s['record_column_updates'] ?? vec[];
    $this->record_encoding_update = $s['record_encoding_update'] ?? '';
    $this->record_format_update = $s['record_format_update'] ?? null;
  }
}

type InputStartingPosition = string;

class InputStartingPositionConfiguration {
  public ?InputStartingPosition $input_starting_position;

  public function __construct(shape(
    ?'input_starting_position' => ?InputStartingPosition,
  ) $s = shape()) {
    $this->input_starting_position = $s['input_starting_position'] ?? '';
  }
}

class InputUpdate {
  public ?Id $input_id;
  public ?InputParallelismUpdate $input_parallelism_update;
  public ?InputProcessingConfigurationUpdate $input_processing_configuration_update;
  public ?InputSchemaUpdate $input_schema_update;
  public ?KinesisFirehoseInputUpdate $kinesis_firehose_input_update;
  public ?KinesisStreamsInputUpdate $kinesis_streams_input_update;
  public ?InAppStreamName $name_prefix_update;

  public function __construct(shape(
    ?'input_id' => ?Id,
    ?'input_parallelism_update' => ?InputParallelismUpdate,
    ?'input_processing_configuration_update' => ?InputProcessingConfigurationUpdate,
    ?'input_schema_update' => ?InputSchemaUpdate,
    ?'kinesis_firehose_input_update' => ?KinesisFirehoseInputUpdate,
    ?'kinesis_streams_input_update' => ?KinesisStreamsInputUpdate,
    ?'name_prefix_update' => ?InAppStreamName,
  ) $s = shape()) {
    $this->input_id = $s['input_id'] ?? '';
    $this->input_parallelism_update = $s['input_parallelism_update'] ?? null;
    $this->input_processing_configuration_update = $s['input_processing_configuration_update'] ?? null;
    $this->input_schema_update = $s['input_schema_update'] ?? null;
    $this->kinesis_firehose_input_update = $s['kinesis_firehose_input_update'] ?? null;
    $this->kinesis_streams_input_update = $s['kinesis_streams_input_update'] ?? null;
    $this->name_prefix_update = $s['name_prefix_update'] ?? '';
  }
}

type InputUpdates = vec<InputUpdate>;

type Inputs = vec<Input>;

class InvalidApplicationConfigurationException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidArgumentException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidRequestException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class JSONMappingParameters {
  public ?RecordRowPath $record_row_path;

  public function __construct(shape(
    ?'record_row_path' => ?RecordRowPath,
  ) $s = shape()) {
    $this->record_row_path = $s['record_row_path'] ?? '';
  }
}

type JobPlanDescription = string;

type KinesisAnalyticsARN = string;

class KinesisFirehoseInput {
  public ?ResourceARN $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class KinesisFirehoseInputDescription {
  public ?ResourceARN $resource_arn;
  public ?RoleARN $role_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
    ?'role_arn' => ?RoleARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class KinesisFirehoseInputUpdate {
  public ?ResourceARN $resource_arn_update;

  public function __construct(shape(
    ?'resource_arn_update' => ?ResourceARN,
  ) $s = shape()) {
    $this->resource_arn_update = $s['resource_arn_update'] ?? '';
  }
}

class KinesisFirehoseOutput {
  public ?ResourceARN $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class KinesisFirehoseOutputDescription {
  public ?ResourceARN $resource_arn;
  public ?RoleARN $role_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
    ?'role_arn' => ?RoleARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class KinesisFirehoseOutputUpdate {
  public ?ResourceARN $resource_arn_update;

  public function __construct(shape(
    ?'resource_arn_update' => ?ResourceARN,
  ) $s = shape()) {
    $this->resource_arn_update = $s['resource_arn_update'] ?? '';
  }
}

class KinesisStreamsInput {
  public ?ResourceARN $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class KinesisStreamsInputDescription {
  public ?ResourceARN $resource_arn;
  public ?RoleARN $role_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
    ?'role_arn' => ?RoleARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class KinesisStreamsInputUpdate {
  public ?ResourceARN $resource_arn_update;

  public function __construct(shape(
    ?'resource_arn_update' => ?ResourceARN,
  ) $s = shape()) {
    $this->resource_arn_update = $s['resource_arn_update'] ?? '';
  }
}

class KinesisStreamsOutput {
  public ?ResourceARN $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class KinesisStreamsOutputDescription {
  public ?ResourceARN $resource_arn;
  public ?RoleARN $role_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
    ?'role_arn' => ?RoleARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class KinesisStreamsOutputUpdate {
  public ?ResourceARN $resource_arn_update;

  public function __construct(shape(
    ?'resource_arn_update' => ?ResourceARN,
  ) $s = shape()) {
    $this->resource_arn_update = $s['resource_arn_update'] ?? '';
  }
}

class LambdaOutput {
  public ?ResourceARN $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class LambdaOutputDescription {
  public ?ResourceARN $resource_arn;
  public ?RoleARN $role_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
    ?'role_arn' => ?RoleARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class LambdaOutputUpdate {
  public ?ResourceARN $resource_arn_update;

  public function __construct(shape(
    ?'resource_arn_update' => ?ResourceARN,
  ) $s = shape()) {
    $this->resource_arn_update = $s['resource_arn_update'] ?? '';
  }
}

class LimitExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListApplicationSnapshotsRequest {
  public ?ApplicationName $application_name;
  public ?ListSnapshotsInputLimit $limit;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'limit' => ?ListSnapshotsInputLimit,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListApplicationSnapshotsResponse {
  public ?NextToken $next_token;
  public ?SnapshotSummaries $snapshot_summaries;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'snapshot_summaries' => ?SnapshotSummaries,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->snapshot_summaries = $s['snapshot_summaries'] ?? vec[];
  }
}

type ListApplicationsInputLimit = int;

class ListApplicationsRequest {
  public ?ListApplicationsInputLimit $limit;
  public ?ApplicationName $next_token;

  public function __construct(shape(
    ?'limit' => ?ListApplicationsInputLimit,
    ?'next_token' => ?ApplicationName,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListApplicationsResponse {
  public ?ApplicationSummaries $application_summaries;
  public ?ApplicationName $next_token;

  public function __construct(shape(
    ?'application_summaries' => ?ApplicationSummaries,
    ?'next_token' => ?ApplicationName,
  ) $s = shape()) {
    $this->application_summaries = $s['application_summaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type ListSnapshotsInputLimit = int;

class ListTagsForResourceRequest {
  public ?KinesisAnalyticsARN $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?KinesisAnalyticsARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?Tags $tags;

  public function __construct(shape(
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
  }
}

type LogLevel = string;

type LogStreamARN = string;

class MappingParameters {
  public ?CSVMappingParameters $csv_mapping_parameters;
  public ?JSONMappingParameters $json_mapping_parameters;

  public function __construct(shape(
    ?'csv_mapping_parameters' => ?CSVMappingParameters,
    ?'json_mapping_parameters' => ?JSONMappingParameters,
  ) $s = shape()) {
    $this->csv_mapping_parameters = $s['csv_mapping_parameters'] ?? null;
    $this->json_mapping_parameters = $s['json_mapping_parameters'] ?? null;
  }
}

type MetricsLevel = string;

type MinPauseBetweenCheckpoints = int;

class MonitoringConfiguration {
  public ?ConfigurationType $configuration_type;
  public ?LogLevel $log_level;
  public ?MetricsLevel $metrics_level;

  public function __construct(shape(
    ?'configuration_type' => ?ConfigurationType,
    ?'log_level' => ?LogLevel,
    ?'metrics_level' => ?MetricsLevel,
  ) $s = shape()) {
    $this->configuration_type = $s['configuration_type'] ?? '';
    $this->log_level = $s['log_level'] ?? '';
    $this->metrics_level = $s['metrics_level'] ?? '';
  }
}

class MonitoringConfigurationDescription {
  public ?ConfigurationType $configuration_type;
  public ?LogLevel $log_level;
  public ?MetricsLevel $metrics_level;

  public function __construct(shape(
    ?'configuration_type' => ?ConfigurationType,
    ?'log_level' => ?LogLevel,
    ?'metrics_level' => ?MetricsLevel,
  ) $s = shape()) {
    $this->configuration_type = $s['configuration_type'] ?? '';
    $this->log_level = $s['log_level'] ?? '';
    $this->metrics_level = $s['metrics_level'] ?? '';
  }
}

class MonitoringConfigurationUpdate {
  public ?ConfigurationType $configuration_type_update;
  public ?LogLevel $log_level_update;
  public ?MetricsLevel $metrics_level_update;

  public function __construct(shape(
    ?'configuration_type_update' => ?ConfigurationType,
    ?'log_level_update' => ?LogLevel,
    ?'metrics_level_update' => ?MetricsLevel,
  ) $s = shape()) {
    $this->configuration_type_update = $s['configuration_type_update'] ?? '';
    $this->log_level_update = $s['log_level_update'] ?? '';
    $this->metrics_level_update = $s['metrics_level_update'] ?? '';
  }
}

type NextToken = string;

type ObjectVersion = string;

class Output {
  public ?DestinationSchema $destination_schema;
  public ?KinesisFirehoseOutput $kinesis_firehose_output;
  public ?KinesisStreamsOutput $kinesis_streams_output;
  public ?LambdaOutput $lambda_output;
  public ?InAppStreamName $name;

  public function __construct(shape(
    ?'destination_schema' => ?DestinationSchema,
    ?'kinesis_firehose_output' => ?KinesisFirehoseOutput,
    ?'kinesis_streams_output' => ?KinesisStreamsOutput,
    ?'lambda_output' => ?LambdaOutput,
    ?'name' => ?InAppStreamName,
  ) $s = shape()) {
    $this->destination_schema = $s['destination_schema'] ?? null;
    $this->kinesis_firehose_output = $s['kinesis_firehose_output'] ?? null;
    $this->kinesis_streams_output = $s['kinesis_streams_output'] ?? null;
    $this->lambda_output = $s['lambda_output'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

class OutputDescription {
  public ?DestinationSchema $destination_schema;
  public ?KinesisFirehoseOutputDescription $kinesis_firehose_output_description;
  public ?KinesisStreamsOutputDescription $kinesis_streams_output_description;
  public ?LambdaOutputDescription $lambda_output_description;
  public ?InAppStreamName $name;
  public ?Id $output_id;

  public function __construct(shape(
    ?'destination_schema' => ?DestinationSchema,
    ?'kinesis_firehose_output_description' => ?KinesisFirehoseOutputDescription,
    ?'kinesis_streams_output_description' => ?KinesisStreamsOutputDescription,
    ?'lambda_output_description' => ?LambdaOutputDescription,
    ?'name' => ?InAppStreamName,
    ?'output_id' => ?Id,
  ) $s = shape()) {
    $this->destination_schema = $s['destination_schema'] ?? null;
    $this->kinesis_firehose_output_description = $s['kinesis_firehose_output_description'] ?? null;
    $this->kinesis_streams_output_description = $s['kinesis_streams_output_description'] ?? null;
    $this->lambda_output_description = $s['lambda_output_description'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->output_id = $s['output_id'] ?? '';
  }
}

type OutputDescriptions = vec<OutputDescription>;

class OutputUpdate {
  public ?DestinationSchema $destination_schema_update;
  public ?KinesisFirehoseOutputUpdate $kinesis_firehose_output_update;
  public ?KinesisStreamsOutputUpdate $kinesis_streams_output_update;
  public ?LambdaOutputUpdate $lambda_output_update;
  public ?InAppStreamName $name_update;
  public ?Id $output_id;

  public function __construct(shape(
    ?'destination_schema_update' => ?DestinationSchema,
    ?'kinesis_firehose_output_update' => ?KinesisFirehoseOutputUpdate,
    ?'kinesis_streams_output_update' => ?KinesisStreamsOutputUpdate,
    ?'lambda_output_update' => ?LambdaOutputUpdate,
    ?'name_update' => ?InAppStreamName,
    ?'output_id' => ?Id,
  ) $s = shape()) {
    $this->destination_schema_update = $s['destination_schema_update'] ?? null;
    $this->kinesis_firehose_output_update = $s['kinesis_firehose_output_update'] ?? null;
    $this->kinesis_streams_output_update = $s['kinesis_streams_output_update'] ?? null;
    $this->lambda_output_update = $s['lambda_output_update'] ?? null;
    $this->name_update = $s['name_update'] ?? '';
    $this->output_id = $s['output_id'] ?? '';
  }
}

type OutputUpdates = vec<OutputUpdate>;

type Outputs = vec<Output>;

type Parallelism = int;

class ParallelismConfiguration {
  public ?BooleanObject $auto_scaling_enabled;
  public ?ConfigurationType $configuration_type;
  public ?Parallelism $parallelism;
  public ?ParallelismPerKPU $parallelism_per_kpu;

  public function __construct(shape(
    ?'auto_scaling_enabled' => ?BooleanObject,
    ?'configuration_type' => ?ConfigurationType,
    ?'parallelism' => ?Parallelism,
    ?'parallelism_per_kpu' => ?ParallelismPerKPU,
  ) $s = shape()) {
    $this->auto_scaling_enabled = $s['auto_scaling_enabled'] ?? false;
    $this->configuration_type = $s['configuration_type'] ?? '';
    $this->parallelism = $s['parallelism'] ?? 0;
    $this->parallelism_per_kpu = $s['parallelism_per_kpu'] ?? 0;
  }
}

class ParallelismConfigurationDescription {
  public ?BooleanObject $auto_scaling_enabled;
  public ?ConfigurationType $configuration_type;
  public ?Parallelism $current_parallelism;
  public ?Parallelism $parallelism;
  public ?ParallelismPerKPU $parallelism_per_kpu;

  public function __construct(shape(
    ?'auto_scaling_enabled' => ?BooleanObject,
    ?'configuration_type' => ?ConfigurationType,
    ?'current_parallelism' => ?Parallelism,
    ?'parallelism' => ?Parallelism,
    ?'parallelism_per_kpu' => ?ParallelismPerKPU,
  ) $s = shape()) {
    $this->auto_scaling_enabled = $s['auto_scaling_enabled'] ?? false;
    $this->configuration_type = $s['configuration_type'] ?? '';
    $this->current_parallelism = $s['current_parallelism'] ?? 0;
    $this->parallelism = $s['parallelism'] ?? 0;
    $this->parallelism_per_kpu = $s['parallelism_per_kpu'] ?? 0;
  }
}

class ParallelismConfigurationUpdate {
  public ?BooleanObject $auto_scaling_enabled_update;
  public ?ConfigurationType $configuration_type_update;
  public ?ParallelismPerKPU $parallelism_per_kpu_update;
  public ?Parallelism $parallelism_update;

  public function __construct(shape(
    ?'auto_scaling_enabled_update' => ?BooleanObject,
    ?'configuration_type_update' => ?ConfigurationType,
    ?'parallelism_per_kpu_update' => ?ParallelismPerKPU,
    ?'parallelism_update' => ?Parallelism,
  ) $s = shape()) {
    $this->auto_scaling_enabled_update = $s['auto_scaling_enabled_update'] ?? false;
    $this->configuration_type_update = $s['configuration_type_update'] ?? '';
    $this->parallelism_per_kpu_update = $s['parallelism_per_kpu_update'] ?? 0;
    $this->parallelism_update = $s['parallelism_update'] ?? 0;
  }
}

type ParallelismPerKPU = int;

type ParsedInputRecord = vec<ParsedInputRecordField>;

type ParsedInputRecordField = string;

type ParsedInputRecords = vec<ParsedInputRecord>;

type ProcessedInputRecord = string;

type ProcessedInputRecords = vec<ProcessedInputRecord>;

class PropertyGroup {
  public ?Id $property_group_id;
  public ?PropertyMap $property_map;

  public function __construct(shape(
    ?'property_group_id' => ?Id,
    ?'property_map' => ?PropertyMap,
  ) $s = shape()) {
    $this->property_group_id = $s['property_group_id'] ?? '';
    $this->property_map = $s['property_map'] ?? dict[];
  }
}

type PropertyGroups = vec<PropertyGroup>;

type PropertyKey = string;

type PropertyMap = dict<PropertyKey, PropertyValue>;

type PropertyValue = string;

type RawInputRecord = string;

type RawInputRecords = vec<RawInputRecord>;

class RecordColumn {
  public ?RecordColumnMapping $mapping;
  public ?RecordColumnName $name;
  public ?RecordColumnSqlType $sql_type;

  public function __construct(shape(
    ?'mapping' => ?RecordColumnMapping,
    ?'name' => ?RecordColumnName,
    ?'sql_type' => ?RecordColumnSqlType,
  ) $s = shape()) {
    $this->mapping = $s['mapping'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->sql_type = $s['sql_type'] ?? '';
  }
}

type RecordColumnDelimiter = string;

type RecordColumnMapping = string;

type RecordColumnName = string;

type RecordColumnSqlType = string;

type RecordColumns = vec<RecordColumn>;

type RecordEncoding = string;

class RecordFormat {
  public ?MappingParameters $mapping_parameters;
  public ?RecordFormatType $record_format_type;

  public function __construct(shape(
    ?'mapping_parameters' => ?MappingParameters,
    ?'record_format_type' => ?RecordFormatType,
  ) $s = shape()) {
    $this->mapping_parameters = $s['mapping_parameters'] ?? null;
    $this->record_format_type = $s['record_format_type'] ?? '';
  }
}

type RecordFormatType = string;

type RecordRowDelimiter = string;

type RecordRowPath = string;

class ReferenceDataSource {
  public ?SourceSchema $reference_schema;
  public ?S3ReferenceDataSource $s_3_reference_data_source;
  public ?InAppTableName $table_name;

  public function __construct(shape(
    ?'reference_schema' => ?SourceSchema,
    ?'s_3_reference_data_source' => ?S3ReferenceDataSource,
    ?'table_name' => ?InAppTableName,
  ) $s = shape()) {
    $this->reference_schema = $s['reference_schema'] ?? null;
    $this->s_3_reference_data_source = $s['s_3_reference_data_source'] ?? null;
    $this->table_name = $s['table_name'] ?? '';
  }
}

class ReferenceDataSourceDescription {
  public ?Id $reference_id;
  public ?SourceSchema $reference_schema;
  public ?S3ReferenceDataSourceDescription $s_3_reference_data_source_description;
  public ?InAppTableName $table_name;

  public function __construct(shape(
    ?'reference_id' => ?Id,
    ?'reference_schema' => ?SourceSchema,
    ?'s_3_reference_data_source_description' => ?S3ReferenceDataSourceDescription,
    ?'table_name' => ?InAppTableName,
  ) $s = shape()) {
    $this->reference_id = $s['reference_id'] ?? '';
    $this->reference_schema = $s['reference_schema'] ?? null;
    $this->s_3_reference_data_source_description = $s['s_3_reference_data_source_description'] ?? null;
    $this->table_name = $s['table_name'] ?? '';
  }
}

type ReferenceDataSourceDescriptions = vec<ReferenceDataSourceDescription>;

class ReferenceDataSourceUpdate {
  public ?Id $reference_id;
  public ?SourceSchema $reference_schema_update;
  public ?S3ReferenceDataSourceUpdate $s_3_reference_data_source_update;
  public ?InAppTableName $table_name_update;

  public function __construct(shape(
    ?'reference_id' => ?Id,
    ?'reference_schema_update' => ?SourceSchema,
    ?'s_3_reference_data_source_update' => ?S3ReferenceDataSourceUpdate,
    ?'table_name_update' => ?InAppTableName,
  ) $s = shape()) {
    $this->reference_id = $s['reference_id'] ?? '';
    $this->reference_schema_update = $s['reference_schema_update'] ?? null;
    $this->s_3_reference_data_source_update = $s['s_3_reference_data_source_update'] ?? null;
    $this->table_name_update = $s['table_name_update'] ?? '';
  }
}

type ReferenceDataSourceUpdates = vec<ReferenceDataSourceUpdate>;

type ReferenceDataSources = vec<ReferenceDataSource>;

type ResourceARN = string;

class ResourceInUseException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceProvisionedThroughputExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type RoleARN = string;

class RunConfiguration {
  public ?ApplicationRestoreConfiguration $application_restore_configuration;
  public ?FlinkRunConfiguration $flink_run_configuration;
  public ?SqlRunConfigurations $sql_run_configurations;

  public function __construct(shape(
    ?'application_restore_configuration' => ?ApplicationRestoreConfiguration,
    ?'flink_run_configuration' => ?FlinkRunConfiguration,
    ?'sql_run_configurations' => ?SqlRunConfigurations,
  ) $s = shape()) {
    $this->application_restore_configuration = $s['application_restore_configuration'] ?? null;
    $this->flink_run_configuration = $s['flink_run_configuration'] ?? null;
    $this->sql_run_configurations = $s['sql_run_configurations'] ?? vec[];
  }
}

class RunConfigurationDescription {
  public ?ApplicationRestoreConfiguration $application_restore_configuration_description;

  public function __construct(shape(
    ?'application_restore_configuration_description' => ?ApplicationRestoreConfiguration,
  ) $s = shape()) {
    $this->application_restore_configuration_description = $s['application_restore_configuration_description'] ?? null;
  }
}

class RunConfigurationUpdate {
  public ?ApplicationRestoreConfiguration $application_restore_configuration;
  public ?FlinkRunConfiguration $flink_run_configuration;

  public function __construct(shape(
    ?'application_restore_configuration' => ?ApplicationRestoreConfiguration,
    ?'flink_run_configuration' => ?FlinkRunConfiguration,
  ) $s = shape()) {
    $this->application_restore_configuration = $s['application_restore_configuration'] ?? null;
    $this->flink_run_configuration = $s['flink_run_configuration'] ?? null;
  }
}

type RuntimeEnvironment = string;

class S3ApplicationCodeLocationDescription {
  public ?BucketARN $bucket_arn;
  public ?FileKey $file_key;
  public ?ObjectVersion $object_version;

  public function __construct(shape(
    ?'bucket_arn' => ?BucketARN,
    ?'file_key' => ?FileKey,
    ?'object_version' => ?ObjectVersion,
  ) $s = shape()) {
    $this->bucket_arn = $s['bucket_arn'] ?? '';
    $this->file_key = $s['file_key'] ?? '';
    $this->object_version = $s['object_version'] ?? '';
  }
}

class S3Configuration {
  public ?BucketARN $bucket_arn;
  public ?FileKey $file_key;

  public function __construct(shape(
    ?'bucket_arn' => ?BucketARN,
    ?'file_key' => ?FileKey,
  ) $s = shape()) {
    $this->bucket_arn = $s['bucket_arn'] ?? '';
    $this->file_key = $s['file_key'] ?? '';
  }
}

class S3ContentLocation {
  public ?BucketARN $bucket_arn;
  public ?FileKey $file_key;
  public ?ObjectVersion $object_version;

  public function __construct(shape(
    ?'bucket_arn' => ?BucketARN,
    ?'file_key' => ?FileKey,
    ?'object_version' => ?ObjectVersion,
  ) $s = shape()) {
    $this->bucket_arn = $s['bucket_arn'] ?? '';
    $this->file_key = $s['file_key'] ?? '';
    $this->object_version = $s['object_version'] ?? '';
  }
}

class S3ContentLocationUpdate {
  public ?BucketARN $bucket_arn_update;
  public ?FileKey $file_key_update;
  public ?ObjectVersion $object_version_update;

  public function __construct(shape(
    ?'bucket_arn_update' => ?BucketARN,
    ?'file_key_update' => ?FileKey,
    ?'object_version_update' => ?ObjectVersion,
  ) $s = shape()) {
    $this->bucket_arn_update = $s['bucket_arn_update'] ?? '';
    $this->file_key_update = $s['file_key_update'] ?? '';
    $this->object_version_update = $s['object_version_update'] ?? '';
  }
}

class S3ReferenceDataSource {
  public ?BucketARN $bucket_arn;
  public ?FileKey $file_key;

  public function __construct(shape(
    ?'bucket_arn' => ?BucketARN,
    ?'file_key' => ?FileKey,
  ) $s = shape()) {
    $this->bucket_arn = $s['bucket_arn'] ?? '';
    $this->file_key = $s['file_key'] ?? '';
  }
}

class S3ReferenceDataSourceDescription {
  public ?BucketARN $bucket_arn;
  public ?FileKey $file_key;
  public ?RoleARN $reference_role_arn;

  public function __construct(shape(
    ?'bucket_arn' => ?BucketARN,
    ?'file_key' => ?FileKey,
    ?'reference_role_arn' => ?RoleARN,
  ) $s = shape()) {
    $this->bucket_arn = $s['bucket_arn'] ?? '';
    $this->file_key = $s['file_key'] ?? '';
    $this->reference_role_arn = $s['reference_role_arn'] ?? '';
  }
}

class S3ReferenceDataSourceUpdate {
  public ?BucketARN $bucket_arn_update;
  public ?FileKey $file_key_update;

  public function __construct(shape(
    ?'bucket_arn_update' => ?BucketARN,
    ?'file_key_update' => ?FileKey,
  ) $s = shape()) {
    $this->bucket_arn_update = $s['bucket_arn_update'] ?? '';
    $this->file_key_update = $s['file_key_update'] ?? '';
  }
}

type SecurityGroupId = string;

type SecurityGroupIds = vec<SecurityGroupId>;

class ServiceUnavailableException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class SnapshotDetails {
  public ?ApplicationVersionId $application_version_id;
  public ?Timestamp $snapshot_creation_timestamp;
  public ?SnapshotName $snapshot_name;
  public ?SnapshotStatus $snapshot_status;

  public function __construct(shape(
    ?'application_version_id' => ?ApplicationVersionId,
    ?'snapshot_creation_timestamp' => ?Timestamp,
    ?'snapshot_name' => ?SnapshotName,
    ?'snapshot_status' => ?SnapshotStatus,
  ) $s = shape()) {
    $this->application_version_id = $s['application_version_id'] ?? 0;
    $this->snapshot_creation_timestamp = $s['snapshot_creation_timestamp'] ?? 0;
    $this->snapshot_name = $s['snapshot_name'] ?? '';
    $this->snapshot_status = $s['snapshot_status'] ?? '';
  }
}

type SnapshotName = string;

type SnapshotStatus = string;

type SnapshotSummaries = vec<SnapshotDetails>;

class SourceSchema {
  public ?RecordColumns $record_columns;
  public ?RecordEncoding $record_encoding;
  public ?RecordFormat $record_format;

  public function __construct(shape(
    ?'record_columns' => ?RecordColumns,
    ?'record_encoding' => ?RecordEncoding,
    ?'record_format' => ?RecordFormat,
  ) $s = shape()) {
    $this->record_columns = $s['record_columns'] ?? vec[];
    $this->record_encoding = $s['record_encoding'] ?? '';
    $this->record_format = $s['record_format'] ?? null;
  }
}

class SqlApplicationConfiguration {
  public ?Inputs $inputs;
  public ?Outputs $outputs;
  public ?ReferenceDataSources $reference_data_sources;

  public function __construct(shape(
    ?'inputs' => ?Inputs,
    ?'outputs' => ?Outputs,
    ?'reference_data_sources' => ?ReferenceDataSources,
  ) $s = shape()) {
    $this->inputs = $s['inputs'] ?? vec[];
    $this->outputs = $s['outputs'] ?? vec[];
    $this->reference_data_sources = $s['reference_data_sources'] ?? vec[];
  }
}

class SqlApplicationConfigurationDescription {
  public ?InputDescriptions $input_descriptions;
  public ?OutputDescriptions $output_descriptions;
  public ?ReferenceDataSourceDescriptions $reference_data_source_descriptions;

  public function __construct(shape(
    ?'input_descriptions' => ?InputDescriptions,
    ?'output_descriptions' => ?OutputDescriptions,
    ?'reference_data_source_descriptions' => ?ReferenceDataSourceDescriptions,
  ) $s = shape()) {
    $this->input_descriptions = $s['input_descriptions'] ?? vec[];
    $this->output_descriptions = $s['output_descriptions'] ?? vec[];
    $this->reference_data_source_descriptions = $s['reference_data_source_descriptions'] ?? vec[];
  }
}

class SqlApplicationConfigurationUpdate {
  public ?InputUpdates $input_updates;
  public ?OutputUpdates $output_updates;
  public ?ReferenceDataSourceUpdates $reference_data_source_updates;

  public function __construct(shape(
    ?'input_updates' => ?InputUpdates,
    ?'output_updates' => ?OutputUpdates,
    ?'reference_data_source_updates' => ?ReferenceDataSourceUpdates,
  ) $s = shape()) {
    $this->input_updates = $s['input_updates'] ?? vec[];
    $this->output_updates = $s['output_updates'] ?? vec[];
    $this->reference_data_source_updates = $s['reference_data_source_updates'] ?? vec[];
  }
}

class SqlRunConfiguration {
  public ?Id $input_id;
  public ?InputStartingPositionConfiguration $input_starting_position_configuration;

  public function __construct(shape(
    ?'input_id' => ?Id,
    ?'input_starting_position_configuration' => ?InputStartingPositionConfiguration,
  ) $s = shape()) {
    $this->input_id = $s['input_id'] ?? '';
    $this->input_starting_position_configuration = $s['input_starting_position_configuration'] ?? null;
  }
}

type SqlRunConfigurations = vec<SqlRunConfiguration>;

class StartApplicationRequest {
  public ?ApplicationName $application_name;
  public ?RunConfiguration $run_configuration;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'run_configuration' => ?RunConfiguration,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->run_configuration = $s['run_configuration'] ?? null;
  }
}

class StartApplicationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StopApplicationRequest {
  public ?ApplicationName $application_name;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
  }
}

class StopApplicationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SubnetId = string;

type SubnetIds = vec<SubnetId>;

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagKeys = vec<TagKey>;

class TagResourceRequest {
  public ?KinesisAnalyticsARN $resource_arn;
  public ?Tags $tags;

  public function __construct(shape(
    ?'resource_arn' => ?KinesisAnalyticsARN,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type Tags = vec<Tag>;

type TextContent = string;

type Timestamp = int;

class TooManyTagsException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UnableToDetectSchemaException {
  public ?ErrorMessage $message;
  public ?ProcessedInputRecords $processed_input_records;
  public ?RawInputRecords $raw_input_records;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
    ?'processed_input_records' => ?ProcessedInputRecords,
    ?'raw_input_records' => ?RawInputRecords,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->processed_input_records = $s['processed_input_records'] ?? vec[];
    $this->raw_input_records = $s['raw_input_records'] ?? vec[];
  }
}

class UnsupportedOperationException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceRequest {
  public ?KinesisAnalyticsARN $resource_arn;
  public ?TagKeys $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?KinesisAnalyticsARN,
    ?'tag_keys' => ?TagKeys,
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

class UpdateApplicationRequest {
  public ?ApplicationConfigurationUpdate $application_configuration_update;
  public ?ApplicationName $application_name;
  public ?CloudWatchLoggingOptionUpdates $cloud_watch_logging_option_updates;
  public ?ApplicationVersionId $current_application_version_id;
  public ?RunConfigurationUpdate $run_configuration_update;
  public ?RoleARN $service_execution_role_update;

  public function __construct(shape(
    ?'application_configuration_update' => ?ApplicationConfigurationUpdate,
    ?'application_name' => ?ApplicationName,
    ?'cloud_watch_logging_option_updates' => ?CloudWatchLoggingOptionUpdates,
    ?'current_application_version_id' => ?ApplicationVersionId,
    ?'run_configuration_update' => ?RunConfigurationUpdate,
    ?'service_execution_role_update' => ?RoleARN,
  ) $s = shape()) {
    $this->application_configuration_update = $s['application_configuration_update'] ?? null;
    $this->application_name = $s['application_name'] ?? '';
    $this->cloud_watch_logging_option_updates = $s['cloud_watch_logging_option_updates'] ?? vec[];
    $this->current_application_version_id = $s['current_application_version_id'] ?? 0;
    $this->run_configuration_update = $s['run_configuration_update'] ?? null;
    $this->service_execution_role_update = $s['service_execution_role_update'] ?? '';
  }
}

class UpdateApplicationResponse {
  public ?ApplicationDetail $application_detail;

  public function __construct(shape(
    ?'application_detail' => ?ApplicationDetail,
  ) $s = shape()) {
    $this->application_detail = $s['application_detail'] ?? null;
  }
}

class VpcConfiguration {
  public ?SecurityGroupIds $security_group_ids;
  public ?SubnetIds $subnet_ids;

  public function __construct(shape(
    ?'security_group_ids' => ?SecurityGroupIds,
    ?'subnet_ids' => ?SubnetIds,
  ) $s = shape()) {
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
  }
}

class VpcConfigurationDescription {
  public ?SecurityGroupIds $security_group_ids;
  public ?SubnetIds $subnet_ids;
  public ?Id $vpc_configuration_id;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'security_group_ids' => ?SecurityGroupIds,
    ?'subnet_ids' => ?SubnetIds,
    ?'vpc_configuration_id' => ?Id,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->vpc_configuration_id = $s['vpc_configuration_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type VpcConfigurationDescriptions = vec<VpcConfigurationDescription>;

class VpcConfigurationUpdate {
  public ?SecurityGroupIds $security_group_id_updates;
  public ?SubnetIds $subnet_id_updates;
  public ?Id $vpc_configuration_id;

  public function __construct(shape(
    ?'security_group_id_updates' => ?SecurityGroupIds,
    ?'subnet_id_updates' => ?SubnetIds,
    ?'vpc_configuration_id' => ?Id,
  ) $s = shape()) {
    $this->security_group_id_updates = $s['security_group_id_updates'] ?? vec[];
    $this->subnet_id_updates = $s['subnet_id_updates'] ?? vec[];
    $this->vpc_configuration_id = $s['vpc_configuration_id'] ?? '';
  }
}

type VpcConfigurationUpdates = vec<VpcConfigurationUpdate>;

type VpcConfigurations = vec<VpcConfiguration>;

type VpcId = string;

type ZipFileContent = string;


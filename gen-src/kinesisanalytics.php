<?hh // strict
namespace slack\aws\kinesisanalytics;

interface Kinesis Analytics V2 {
  public function AddApplicationCloudWatchLoggingOption(AddApplicationCloudWatchLoggingOptionRequest) Awaitable<Errors\Result<AddApplicationCloudWatchLoggingOptionResponse>>;
  public function AddApplicationInput(AddApplicationInputRequest) Awaitable<Errors\Result<AddApplicationInputResponse>>;
  public function AddApplicationInputProcessingConfiguration(AddApplicationInputProcessingConfigurationRequest) Awaitable<Errors\Result<AddApplicationInputProcessingConfigurationResponse>>;
  public function AddApplicationOutput(AddApplicationOutputRequest) Awaitable<Errors\Result<AddApplicationOutputResponse>>;
  public function AddApplicationReferenceDataSource(AddApplicationReferenceDataSourceRequest) Awaitable<Errors\Result<AddApplicationReferenceDataSourceResponse>>;
  public function AddApplicationVpcConfiguration(AddApplicationVpcConfigurationRequest) Awaitable<Errors\Result<AddApplicationVpcConfigurationResponse>>;
  public function CreateApplication(CreateApplicationRequest) Awaitable<Errors\Result<CreateApplicationResponse>>;
  public function CreateApplicationSnapshot(CreateApplicationSnapshotRequest) Awaitable<Errors\Result<CreateApplicationSnapshotResponse>>;
  public function DeleteApplication(DeleteApplicationRequest) Awaitable<Errors\Result<DeleteApplicationResponse>>;
  public function DeleteApplicationCloudWatchLoggingOption(DeleteApplicationCloudWatchLoggingOptionRequest) Awaitable<Errors\Result<DeleteApplicationCloudWatchLoggingOptionResponse>>;
  public function DeleteApplicationInputProcessingConfiguration(DeleteApplicationInputProcessingConfigurationRequest) Awaitable<Errors\Result<DeleteApplicationInputProcessingConfigurationResponse>>;
  public function DeleteApplicationOutput(DeleteApplicationOutputRequest) Awaitable<Errors\Result<DeleteApplicationOutputResponse>>;
  public function DeleteApplicationReferenceDataSource(DeleteApplicationReferenceDataSourceRequest) Awaitable<Errors\Result<DeleteApplicationReferenceDataSourceResponse>>;
  public function DeleteApplicationSnapshot(DeleteApplicationSnapshotRequest) Awaitable<Errors\Result<DeleteApplicationSnapshotResponse>>;
  public function DeleteApplicationVpcConfiguration(DeleteApplicationVpcConfigurationRequest) Awaitable<Errors\Result<DeleteApplicationVpcConfigurationResponse>>;
  public function DescribeApplication(DescribeApplicationRequest) Awaitable<Errors\Result<DescribeApplicationResponse>>;
  public function DescribeApplicationSnapshot(DescribeApplicationSnapshotRequest) Awaitable<Errors\Result<DescribeApplicationSnapshotResponse>>;
  public function DiscoverInputSchema(DiscoverInputSchemaRequest) Awaitable<Errors\Result<DiscoverInputSchemaResponse>>;
  public function ListApplicationSnapshots(ListApplicationSnapshotsRequest) Awaitable<Errors\Result<ListApplicationSnapshotsResponse>>;
  public function ListApplications(ListApplicationsRequest) Awaitable<Errors\Result<ListApplicationsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function StartApplication(StartApplicationRequest) Awaitable<Errors\Result<StartApplicationResponse>>;
  public function StopApplication(StopApplicationRequest) Awaitable<Errors\Result<StopApplicationResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateApplication(UpdateApplicationRequest) Awaitable<Errors\Result<UpdateApplicationResponse>>;
}

class AddApplicationCloudWatchLoggingOptionRequest {
  public ApplicationName $application_name;
  public CloudWatchLoggingOption $cloud_watch_logging_option;
  public ApplicationVersionId $current_application_version_id;
}

class AddApplicationCloudWatchLoggingOptionResponse {
  public ResourceARN $application_arn;
  public ApplicationVersionId $application_version_id;
  public CloudWatchLoggingOptionDescriptions $cloud_watch_logging_option_descriptions;
}

class AddApplicationInputProcessingConfigurationRequest {
  public ApplicationName $application_name;
  public ApplicationVersionId $current_application_version_id;
  public Id $input_id;
  public InputProcessingConfiguration $input_processing_configuration;
}

class AddApplicationInputProcessingConfigurationResponse {
  public ResourceARN $application_arn;
  public ApplicationVersionId $application_version_id;
  public Id $input_id;
  public InputProcessingConfigurationDescription $input_processing_configuration_description;
}

class AddApplicationInputRequest {
  public ApplicationName $application_name;
  public ApplicationVersionId $current_application_version_id;
  public Input $input;
}

class AddApplicationInputResponse {
  public ResourceARN $application_arn;
  public ApplicationVersionId $application_version_id;
  public InputDescriptions $input_descriptions;
}

class AddApplicationOutputRequest {
  public ApplicationName $application_name;
  public ApplicationVersionId $current_application_version_id;
  public Output $output;
}

class AddApplicationOutputResponse {
  public ResourceARN $application_arn;
  public ApplicationVersionId $application_version_id;
  public OutputDescriptions $output_descriptions;
}

class AddApplicationReferenceDataSourceRequest {
  public ApplicationName $application_name;
  public ApplicationVersionId $current_application_version_id;
  public ReferenceDataSource $reference_data_source;
}

class AddApplicationReferenceDataSourceResponse {
  public ResourceARN $application_arn;
  public ApplicationVersionId $application_version_id;
  public ReferenceDataSourceDescriptions $reference_data_source_descriptions;
}

class AddApplicationVpcConfigurationRequest {
  public ApplicationName $application_name;
  public ApplicationVersionId $current_application_version_id;
  public VpcConfiguration $vpc_configuration;
}

class AddApplicationVpcConfigurationResponse {
  public ResourceARN $application_arn;
  public ApplicationVersionId $application_version_id;
  public VpcConfigurationDescription $vpc_configuration_description;
}

class ApplicationCodeConfiguration {
  public CodeContent $code_content;
  public CodeContentType $code_content_type;
}

class ApplicationCodeConfigurationDescription {
  public CodeContentDescription $code_content_description;
  public CodeContentType $code_content_type;
}

class ApplicationCodeConfigurationUpdate {
  public CodeContentType $code_content_type_update;
  public CodeContentUpdate $code_content_update;
}

class ApplicationConfiguration {
  public ApplicationCodeConfiguration $application_code_configuration;
  public ApplicationSnapshotConfiguration $application_snapshot_configuration;
  public EnvironmentProperties $environment_properties;
  public FlinkApplicationConfiguration $flink_application_configuration;
  public SqlApplicationConfiguration $sql_application_configuration;
  public VpcConfigurations $vpc_configurations;
}

class ApplicationConfigurationDescription {
  public ApplicationCodeConfigurationDescription $application_code_configuration_description;
  public ApplicationSnapshotConfigurationDescription $application_snapshot_configuration_description;
  public EnvironmentPropertyDescriptions $environment_property_descriptions;
  public FlinkApplicationConfigurationDescription $flink_application_configuration_description;
  public RunConfigurationDescription $run_configuration_description;
  public SqlApplicationConfigurationDescription $sql_application_configuration_description;
  public VpcConfigurationDescriptions $vpc_configuration_descriptions;
}

class ApplicationConfigurationUpdate {
  public ApplicationCodeConfigurationUpdate $application_code_configuration_update;
  public ApplicationSnapshotConfigurationUpdate $application_snapshot_configuration_update;
  public EnvironmentPropertyUpdates $environment_property_updates;
  public FlinkApplicationConfigurationUpdate $flink_application_configuration_update;
  public SqlApplicationConfigurationUpdate $sql_application_configuration_update;
  public VpcConfigurationUpdates $vpc_configuration_updates;
}

class ApplicationDescription {
}

class ApplicationDetail {
  public ResourceARN $application_arn;
  public ApplicationConfigurationDescription $application_configuration_description;
  public ApplicationDescription $application_description;
  public ApplicationName $application_name;
  public ApplicationStatus $application_status;
  public ApplicationVersionId $application_version_id;
  public CloudWatchLoggingOptionDescriptions $cloud_watch_logging_option_descriptions;
  public Timestamp $create_timestamp;
  public Timestamp $last_update_timestamp;
  public RuntimeEnvironment $runtime_environment;
  public RoleARN $service_execution_role;
}

class ApplicationName {
}

class ApplicationRestoreConfiguration {
  public ApplicationRestoreType $application_restore_type;
  public SnapshotName $snapshot_name;
}

class ApplicationRestoreType {
}

class ApplicationSnapshotConfiguration {
  public BooleanObject $snapshots_enabled;
}

class ApplicationSnapshotConfigurationDescription {
  public BooleanObject $snapshots_enabled;
}

class ApplicationSnapshotConfigurationUpdate {
  public BooleanObject $snapshots_enabled_update;
}

class ApplicationStatus {
}

class ApplicationSummaries {
}

class ApplicationSummary {
  public ResourceARN $application_arn;
  public ApplicationName $application_name;
  public ApplicationStatus $application_status;
  public ApplicationVersionId $application_version_id;
  public RuntimeEnvironment $runtime_environment;
}

class ApplicationVersionId {
}

class BooleanObject {
}

class BucketARN {
}

class CSVMappingParameters {
  public RecordColumnDelimiter $record_column_delimiter;
  public RecordRowDelimiter $record_row_delimiter;
}

class CheckpointConfiguration {
  public CheckpointInterval $checkpoint_interval;
  public BooleanObject $checkpointing_enabled;
  public ConfigurationType $configuration_type;
  public MinPauseBetweenCheckpoints $min_pause_between_checkpoints;
}

class CheckpointConfigurationDescription {
  public CheckpointInterval $checkpoint_interval;
  public BooleanObject $checkpointing_enabled;
  public ConfigurationType $configuration_type;
  public MinPauseBetweenCheckpoints $min_pause_between_checkpoints;
}

class CheckpointConfigurationUpdate {
  public CheckpointInterval $checkpoint_interval_update;
  public BooleanObject $checkpointing_enabled_update;
  public ConfigurationType $configuration_type_update;
  public MinPauseBetweenCheckpoints $min_pause_between_checkpoints_update;
}

class CheckpointInterval {
}

class CloudWatchLoggingOption {
  public LogStreamARN $log_stream_arn;
}

class CloudWatchLoggingOptionDescription {
  public Id $cloud_watch_logging_option_id;
  public LogStreamARN $log_stream_arn;
  public RoleARN $role_arn;
}

class CloudWatchLoggingOptionDescriptions {
}

class CloudWatchLoggingOptionUpdate {
  public Id $cloud_watch_logging_option_id;
  public LogStreamARN $log_stream_arn_update;
}

class CloudWatchLoggingOptionUpdates {
}

class CloudWatchLoggingOptions {
}

class CodeContent {
  public S3ContentLocation $s_3_content_location;
  public TextContent $text_content;
  public ZipFileContent $zip_file_content;
}

class CodeContentDescription {
  public CodeMD5 $code_md_5;
  public CodeSize $code_size;
  public S3ApplicationCodeLocationDescription $s_3_application_code_location_description;
  public TextContent $text_content;
}

class CodeContentType {
}

class CodeContentUpdate {
  public S3ContentLocationUpdate $s_3_content_location_update;
  public TextContent $text_content_update;
  public ZipFileContent $zip_file_content_update;
}

class CodeMD5 {
}

class CodeSize {
}

class CodeValidationException {
  public ErrorMessage $message;
}

class ConcurrentModificationException {
  public ErrorMessage $message;
}

class ConfigurationType {
}

class CreateApplicationRequest {
  public ApplicationConfiguration $application_configuration;
  public ApplicationDescription $application_description;
  public ApplicationName $application_name;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public RuntimeEnvironment $runtime_environment;
  public RoleARN $service_execution_role;
  public Tags $tags;
}

class CreateApplicationResponse {
  public ApplicationDetail $application_detail;
}

class CreateApplicationSnapshotRequest {
  public ApplicationName $application_name;
  public SnapshotName $snapshot_name;
}

class CreateApplicationSnapshotResponse {
}

class DeleteApplicationCloudWatchLoggingOptionRequest {
  public ApplicationName $application_name;
  public Id $cloud_watch_logging_option_id;
  public ApplicationVersionId $current_application_version_id;
}

class DeleteApplicationCloudWatchLoggingOptionResponse {
  public ResourceARN $application_arn;
  public ApplicationVersionId $application_version_id;
  public CloudWatchLoggingOptionDescriptions $cloud_watch_logging_option_descriptions;
}

class DeleteApplicationInputProcessingConfigurationRequest {
  public ApplicationName $application_name;
  public ApplicationVersionId $current_application_version_id;
  public Id $input_id;
}

class DeleteApplicationInputProcessingConfigurationResponse {
  public ResourceARN $application_arn;
  public ApplicationVersionId $application_version_id;
}

class DeleteApplicationOutputRequest {
  public ApplicationName $application_name;
  public ApplicationVersionId $current_application_version_id;
  public Id $output_id;
}

class DeleteApplicationOutputResponse {
  public ResourceARN $application_arn;
  public ApplicationVersionId $application_version_id;
}

class DeleteApplicationReferenceDataSourceRequest {
  public ApplicationName $application_name;
  public ApplicationVersionId $current_application_version_id;
  public Id $reference_id;
}

class DeleteApplicationReferenceDataSourceResponse {
  public ResourceARN $application_arn;
  public ApplicationVersionId $application_version_id;
}

class DeleteApplicationRequest {
  public ApplicationName $application_name;
  public Timestamp $create_timestamp;
}

class DeleteApplicationResponse {
}

class DeleteApplicationSnapshotRequest {
  public ApplicationName $application_name;
  public Timestamp $snapshot_creation_timestamp;
  public SnapshotName $snapshot_name;
}

class DeleteApplicationSnapshotResponse {
}

class DeleteApplicationVpcConfigurationRequest {
  public ApplicationName $application_name;
  public ApplicationVersionId $current_application_version_id;
  public Id $vpc_configuration_id;
}

class DeleteApplicationVpcConfigurationResponse {
  public ResourceARN $application_arn;
  public ApplicationVersionId $application_version_id;
}

class DescribeApplicationRequest {
  public ApplicationName $application_name;
  public BooleanObject $include_additional_details;
}

class DescribeApplicationResponse {
  public ApplicationDetail $application_detail;
}

class DescribeApplicationSnapshotRequest {
  public ApplicationName $application_name;
  public SnapshotName $snapshot_name;
}

class DescribeApplicationSnapshotResponse {
  public SnapshotDetails $snapshot_details;
}

class DestinationSchema {
  public RecordFormatType $record_format_type;
}

class DiscoverInputSchemaRequest {
  public InputProcessingConfiguration $input_processing_configuration;
  public InputStartingPositionConfiguration $input_starting_position_configuration;
  public ResourceARN $resource_arn;
  public S3Configuration $s_3_configuration;
  public RoleARN $service_execution_role;
}

class DiscoverInputSchemaResponse {
  public SourceSchema $input_schema;
  public ParsedInputRecords $parsed_input_records;
  public ProcessedInputRecords $processed_input_records;
  public RawInputRecords $raw_input_records;
}

class EnvironmentProperties {
  public PropertyGroups $property_groups;
}

class EnvironmentPropertyDescriptions {
  public PropertyGroups $property_group_descriptions;
}

class EnvironmentPropertyUpdates {
  public PropertyGroups $property_groups;
}

class ErrorMessage {
}

class FileKey {
}

class FlinkApplicationConfiguration {
  public CheckpointConfiguration $checkpoint_configuration;
  public MonitoringConfiguration $monitoring_configuration;
  public ParallelismConfiguration $parallelism_configuration;
}

class FlinkApplicationConfigurationDescription {
  public CheckpointConfigurationDescription $checkpoint_configuration_description;
  public JobPlanDescription $job_plan_description;
  public MonitoringConfigurationDescription $monitoring_configuration_description;
  public ParallelismConfigurationDescription $parallelism_configuration_description;
}

class FlinkApplicationConfigurationUpdate {
  public CheckpointConfigurationUpdate $checkpoint_configuration_update;
  public MonitoringConfigurationUpdate $monitoring_configuration_update;
  public ParallelismConfigurationUpdate $parallelism_configuration_update;
}

class FlinkRunConfiguration {
  public BooleanObject $allow_non_restored_state;
}

class Id {
}

class InAppStreamName {
}

class InAppStreamNames {
}

class InAppTableName {
}

class Input {
  public InputParallelism $input_parallelism;
  public InputProcessingConfiguration $input_processing_configuration;
  public SourceSchema $input_schema;
  public KinesisFirehoseInput $kinesis_firehose_input;
  public KinesisStreamsInput $kinesis_streams_input;
  public InAppStreamName $name_prefix;
}

class InputDescription {
  public InAppStreamNames $in_app_stream_names;
  public Id $input_id;
  public InputParallelism $input_parallelism;
  public InputProcessingConfigurationDescription $input_processing_configuration_description;
  public SourceSchema $input_schema;
  public InputStartingPositionConfiguration $input_starting_position_configuration;
  public KinesisFirehoseInputDescription $kinesis_firehose_input_description;
  public KinesisStreamsInputDescription $kinesis_streams_input_description;
  public InAppStreamName $name_prefix;
}

class InputDescriptions {
}

class InputLambdaProcessor {
  public ResourceARN $resource_arn;
}

class InputLambdaProcessorDescription {
  public ResourceARN $resource_arn;
  public RoleARN $role_arn;
}

class InputLambdaProcessorUpdate {
  public ResourceARN $resource_arn_update;
}

class InputParallelism {
  public InputParallelismCount $count;
}

class InputParallelismCount {
}

class InputParallelismUpdate {
  public InputParallelismCount $count_update;
}

class InputProcessingConfiguration {
  public InputLambdaProcessor $input_lambda_processor;
}

class InputProcessingConfigurationDescription {
  public InputLambdaProcessorDescription $input_lambda_processor_description;
}

class InputProcessingConfigurationUpdate {
  public InputLambdaProcessorUpdate $input_lambda_processor_update;
}

class InputSchemaUpdate {
  public RecordColumns $record_column_updates;
  public RecordEncoding $record_encoding_update;
  public RecordFormat $record_format_update;
}

class InputStartingPosition {
}

class InputStartingPositionConfiguration {
  public InputStartingPosition $input_starting_position;
}

class InputUpdate {
  public Id $input_id;
  public InputParallelismUpdate $input_parallelism_update;
  public InputProcessingConfigurationUpdate $input_processing_configuration_update;
  public InputSchemaUpdate $input_schema_update;
  public KinesisFirehoseInputUpdate $kinesis_firehose_input_update;
  public KinesisStreamsInputUpdate $kinesis_streams_input_update;
  public InAppStreamName $name_prefix_update;
}

class InputUpdates {
}

class Inputs {
}

class InvalidApplicationConfigurationException {
  public ErrorMessage $message;
}

class InvalidArgumentException {
  public ErrorMessage $message;
}

class InvalidRequestException {
  public ErrorMessage $message;
}

class JSONMappingParameters {
  public RecordRowPath $record_row_path;
}

class JobPlanDescription {
}

class KinesisAnalyticsARN {
}

class KinesisFirehoseInput {
  public ResourceARN $resource_arn;
}

class KinesisFirehoseInputDescription {
  public ResourceARN $resource_arn;
  public RoleARN $role_arn;
}

class KinesisFirehoseInputUpdate {
  public ResourceARN $resource_arn_update;
}

class KinesisFirehoseOutput {
  public ResourceARN $resource_arn;
}

class KinesisFirehoseOutputDescription {
  public ResourceARN $resource_arn;
  public RoleARN $role_arn;
}

class KinesisFirehoseOutputUpdate {
  public ResourceARN $resource_arn_update;
}

class KinesisStreamsInput {
  public ResourceARN $resource_arn;
}

class KinesisStreamsInputDescription {
  public ResourceARN $resource_arn;
  public RoleARN $role_arn;
}

class KinesisStreamsInputUpdate {
  public ResourceARN $resource_arn_update;
}

class KinesisStreamsOutput {
  public ResourceARN $resource_arn;
}

class KinesisStreamsOutputDescription {
  public ResourceARN $resource_arn;
  public RoleARN $role_arn;
}

class KinesisStreamsOutputUpdate {
  public ResourceARN $resource_arn_update;
}

class LambdaOutput {
  public ResourceARN $resource_arn;
}

class LambdaOutputDescription {
  public ResourceARN $resource_arn;
  public RoleARN $role_arn;
}

class LambdaOutputUpdate {
  public ResourceARN $resource_arn_update;
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListApplicationSnapshotsRequest {
  public ApplicationName $application_name;
  public ListSnapshotsInputLimit $limit;
  public NextToken $next_token;
}

class ListApplicationSnapshotsResponse {
  public NextToken $next_token;
  public SnapshotSummaries $snapshot_summaries;
}

class ListApplicationsInputLimit {
}

class ListApplicationsRequest {
  public ListApplicationsInputLimit $limit;
  public ApplicationName $next_token;
}

class ListApplicationsResponse {
  public ApplicationSummaries $application_summaries;
  public ApplicationName $next_token;
}

class ListSnapshotsInputLimit {
}

class ListTagsForResourceRequest {
  public KinesisAnalyticsARN $resource_arn;
}

class ListTagsForResourceResponse {
  public Tags $tags;
}

class LogLevel {
}

class LogStreamARN {
}

class MappingParameters {
  public CSVMappingParameters $csv_mapping_parameters;
  public JSONMappingParameters $json_mapping_parameters;
}

class MetricsLevel {
}

class MinPauseBetweenCheckpoints {
}

class MonitoringConfiguration {
  public ConfigurationType $configuration_type;
  public LogLevel $log_level;
  public MetricsLevel $metrics_level;
}

class MonitoringConfigurationDescription {
  public ConfigurationType $configuration_type;
  public LogLevel $log_level;
  public MetricsLevel $metrics_level;
}

class MonitoringConfigurationUpdate {
  public ConfigurationType $configuration_type_update;
  public LogLevel $log_level_update;
  public MetricsLevel $metrics_level_update;
}

class NextToken {
}

class ObjectVersion {
}

class Output {
  public DestinationSchema $destination_schema;
  public KinesisFirehoseOutput $kinesis_firehose_output;
  public KinesisStreamsOutput $kinesis_streams_output;
  public LambdaOutput $lambda_output;
  public InAppStreamName $name;
}

class OutputDescription {
  public DestinationSchema $destination_schema;
  public KinesisFirehoseOutputDescription $kinesis_firehose_output_description;
  public KinesisStreamsOutputDescription $kinesis_streams_output_description;
  public LambdaOutputDescription $lambda_output_description;
  public InAppStreamName $name;
  public Id $output_id;
}

class OutputDescriptions {
}

class OutputUpdate {
  public DestinationSchema $destination_schema_update;
  public KinesisFirehoseOutputUpdate $kinesis_firehose_output_update;
  public KinesisStreamsOutputUpdate $kinesis_streams_output_update;
  public LambdaOutputUpdate $lambda_output_update;
  public InAppStreamName $name_update;
  public Id $output_id;
}

class OutputUpdates {
}

class Outputs {
}

class Parallelism {
}

class ParallelismConfiguration {
  public BooleanObject $auto_scaling_enabled;
  public ConfigurationType $configuration_type;
  public Parallelism $parallelism;
  public ParallelismPerKPU $parallelism_per_kpu;
}

class ParallelismConfigurationDescription {
  public BooleanObject $auto_scaling_enabled;
  public ConfigurationType $configuration_type;
  public Parallelism $current_parallelism;
  public Parallelism $parallelism;
  public ParallelismPerKPU $parallelism_per_kpu;
}

class ParallelismConfigurationUpdate {
  public BooleanObject $auto_scaling_enabled_update;
  public ConfigurationType $configuration_type_update;
  public ParallelismPerKPU $parallelism_per_kpu_update;
  public Parallelism $parallelism_update;
}

class ParallelismPerKPU {
}

class ParsedInputRecord {
}

class ParsedInputRecordField {
}

class ParsedInputRecords {
}

class ProcessedInputRecord {
}

class ProcessedInputRecords {
}

class PropertyGroup {
  public Id $property_group_id;
  public PropertyMap $property_map;
}

class PropertyGroups {
}

class PropertyKey {
}

class PropertyMap {
}

class PropertyValue {
}

class RawInputRecord {
}

class RawInputRecords {
}

class RecordColumn {
  public RecordColumnMapping $mapping;
  public RecordColumnName $name;
  public RecordColumnSqlType $sql_type;
}

class RecordColumnDelimiter {
}

class RecordColumnMapping {
}

class RecordColumnName {
}

class RecordColumnSqlType {
}

class RecordColumns {
}

class RecordEncoding {
}

class RecordFormat {
  public MappingParameters $mapping_parameters;
  public RecordFormatType $record_format_type;
}

class RecordFormatType {
}

class RecordRowDelimiter {
}

class RecordRowPath {
}

class ReferenceDataSource {
  public SourceSchema $reference_schema;
  public S3ReferenceDataSource $s_3_reference_data_source;
  public InAppTableName $table_name;
}

class ReferenceDataSourceDescription {
  public Id $reference_id;
  public SourceSchema $reference_schema;
  public S3ReferenceDataSourceDescription $s_3_reference_data_source_description;
  public InAppTableName $table_name;
}

class ReferenceDataSourceDescriptions {
}

class ReferenceDataSourceUpdate {
  public Id $reference_id;
  public SourceSchema $reference_schema_update;
  public S3ReferenceDataSourceUpdate $s_3_reference_data_source_update;
  public InAppTableName $table_name_update;
}

class ReferenceDataSourceUpdates {
}

class ReferenceDataSources {
}

class ResourceARN {
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class ResourceProvisionedThroughputExceededException {
  public ErrorMessage $message;
}

class RoleARN {
}

class RunConfiguration {
  public ApplicationRestoreConfiguration $application_restore_configuration;
  public FlinkRunConfiguration $flink_run_configuration;
  public SqlRunConfigurations $sql_run_configurations;
}

class RunConfigurationDescription {
  public ApplicationRestoreConfiguration $application_restore_configuration_description;
}

class RunConfigurationUpdate {
  public ApplicationRestoreConfiguration $application_restore_configuration;
  public FlinkRunConfiguration $flink_run_configuration;
}

class RuntimeEnvironment {
}

class S3ApplicationCodeLocationDescription {
  public BucketARN $bucket_arn;
  public FileKey $file_key;
  public ObjectVersion $object_version;
}

class S3Configuration {
  public BucketARN $bucket_arn;
  public FileKey $file_key;
}

class S3ContentLocation {
  public BucketARN $bucket_arn;
  public FileKey $file_key;
  public ObjectVersion $object_version;
}

class S3ContentLocationUpdate {
  public BucketARN $bucket_arn_update;
  public FileKey $file_key_update;
  public ObjectVersion $object_version_update;
}

class S3ReferenceDataSource {
  public BucketARN $bucket_arn;
  public FileKey $file_key;
}

class S3ReferenceDataSourceDescription {
  public BucketARN $bucket_arn;
  public FileKey $file_key;
  public RoleARN $reference_role_arn;
}

class S3ReferenceDataSourceUpdate {
  public BucketARN $bucket_arn_update;
  public FileKey $file_key_update;
}

class SecurityGroupId {
}

class SecurityGroupIds {
}

class ServiceUnavailableException {
  public ErrorMessage $message;
}

class SnapshotDetails {
  public ApplicationVersionId $application_version_id;
  public Timestamp $snapshot_creation_timestamp;
  public SnapshotName $snapshot_name;
  public SnapshotStatus $snapshot_status;
}

class SnapshotName {
}

class SnapshotStatus {
}

class SnapshotSummaries {
}

class SourceSchema {
  public RecordColumns $record_columns;
  public RecordEncoding $record_encoding;
  public RecordFormat $record_format;
}

class SqlApplicationConfiguration {
  public Inputs $inputs;
  public Outputs $outputs;
  public ReferenceDataSources $reference_data_sources;
}

class SqlApplicationConfigurationDescription {
  public InputDescriptions $input_descriptions;
  public OutputDescriptions $output_descriptions;
  public ReferenceDataSourceDescriptions $reference_data_source_descriptions;
}

class SqlApplicationConfigurationUpdate {
  public InputUpdates $input_updates;
  public OutputUpdates $output_updates;
  public ReferenceDataSourceUpdates $reference_data_source_updates;
}

class SqlRunConfiguration {
  public Id $input_id;
  public InputStartingPositionConfiguration $input_starting_position_configuration;
}

class SqlRunConfigurations {
}

class StartApplicationRequest {
  public ApplicationName $application_name;
  public RunConfiguration $run_configuration;
}

class StartApplicationResponse {
}

class StopApplicationRequest {
  public ApplicationName $application_name;
}

class StopApplicationResponse {
}

class SubnetId {
}

class SubnetIds {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeys {
}

class TagResourceRequest {
  public KinesisAnalyticsARN $resource_arn;
  public Tags $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Tags {
}

class TextContent {
}

class Timestamp {
}

class TooManyTagsException {
  public ErrorMessage $message;
}

class UnableToDetectSchemaException {
  public ErrorMessage $message;
  public ProcessedInputRecords $processed_input_records;
  public RawInputRecords $raw_input_records;
}

class UnsupportedOperationException {
  public ErrorMessage $message;
}

class UntagResourceRequest {
  public KinesisAnalyticsARN $resource_arn;
  public TagKeys $tag_keys;
}

class UntagResourceResponse {
}

class UpdateApplicationRequest {
  public ApplicationConfigurationUpdate $application_configuration_update;
  public ApplicationName $application_name;
  public CloudWatchLoggingOptionUpdates $cloud_watch_logging_option_updates;
  public ApplicationVersionId $current_application_version_id;
  public RunConfigurationUpdate $run_configuration_update;
  public RoleARN $service_execution_role_update;
}

class UpdateApplicationResponse {
  public ApplicationDetail $application_detail;
}

class VpcConfiguration {
  public SecurityGroupIds $security_group_ids;
  public SubnetIds $subnet_ids;
}

class VpcConfigurationDescription {
  public SecurityGroupIds $security_group_ids;
  public SubnetIds $subnet_ids;
  public Id $vpc_configuration_id;
  public VpcId $vpc_id;
}

class VpcConfigurationDescriptions {
}

class VpcConfigurationUpdate {
  public SecurityGroupIds $security_group_id_updates;
  public SubnetIds $subnet_id_updates;
  public Id $vpc_configuration_id;
}

class VpcConfigurationUpdates {
}

class VpcConfigurations {
}

class VpcId {
}

class ZipFileContent {
}


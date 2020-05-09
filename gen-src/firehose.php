<?hh // strict
namespace slack\aws\firehose;

interface Firehose {
  public function DescribeDeliveryStream(DescribeDeliveryStreamInput) Awaitable<Errors\Result<DescribeDeliveryStreamOutput>>;
  public function PutRecord(PutRecordInput) Awaitable<Errors\Result<PutRecordOutput>>;
  public function PutRecordBatch(PutRecordBatchInput) Awaitable<Errors\Result<PutRecordBatchOutput>>;
  public function TagDeliveryStream(TagDeliveryStreamInput) Awaitable<Errors\Result<TagDeliveryStreamOutput>>;
  public function UntagDeliveryStream(UntagDeliveryStreamInput) Awaitable<Errors\Result<UntagDeliveryStreamOutput>>;
  public function UpdateDestination(UpdateDestinationInput) Awaitable<Errors\Result<UpdateDestinationOutput>>;
  public function CreateDeliveryStream(CreateDeliveryStreamInput) Awaitable<Errors\Result<CreateDeliveryStreamOutput>>;
  public function ListDeliveryStreams(ListDeliveryStreamsInput) Awaitable<Errors\Result<ListDeliveryStreamsOutput>>;
  public function ListTagsForDeliveryStream(ListTagsForDeliveryStreamInput) Awaitable<Errors\Result<ListTagsForDeliveryStreamOutput>>;
  public function StartDeliveryStreamEncryption(StartDeliveryStreamEncryptionInput) Awaitable<Errors\Result<StartDeliveryStreamEncryptionOutput>>;
  public function StopDeliveryStreamEncryption(StopDeliveryStreamEncryptionInput) Awaitable<Errors\Result<StopDeliveryStreamEncryptionOutput>>;
  public function DeleteDeliveryStream(DeleteDeliveryStreamInput) Awaitable<Errors\Result<DeleteDeliveryStreamOutput>>;
}

class ListDeliveryStreamsOutput {
  public DeliveryStreamNameList $delivery_stream_names;
  public BooleanObject $has_more_delivery_streams;
}

class PutRecordBatchOutput {
  public NonNegativeIntegerObject $failed_put_count;
  public BooleanObject $encrypted;
  public PutRecordBatchResponseEntryList $request_responses;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class SplunkDestinationConfiguration {
  public HECToken $hec_token;
  public HECAcknowledgmentTimeoutInSeconds $hec_acknowledgment_timeout_in_seconds;
  public SplunkRetryOptions $retry_options;
  public SplunkS3BackupMode $s_3_backup_mode;
  public S3DestinationConfiguration $s_3_configuration;
  public ProcessingConfiguration $processing_configuration;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public HECEndpoint $hec_endpoint;
  public HECEndpointType $hec_endpoint_type;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class CopyCommand {
  public DataTableName $data_table_name;
  public DataTableColumns $data_table_columns;
  public CopyOptions $copy_options;
}

class ElasticsearchDomainARN {
}

class ElasticsearchIndexName {
}

class ElasticsearchRetryOptions {
  public ElasticsearchRetryDurationInSeconds $duration_in_seconds;
}

class SplunkDestinationDescription {
  public SplunkS3BackupMode $s_3_backup_mode;
  public S3DestinationDescription $s_3_destination_description;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public HECAcknowledgmentTimeoutInSeconds $hec_acknowledgment_timeout_in_seconds;
  public HECEndpointType $hec_endpoint_type;
  public HECToken $hec_token;
  public SplunkRetryOptions $retry_options;
  public ProcessingConfiguration $processing_configuration;
  public HECEndpoint $hec_endpoint;
}

class SplunkDestinationUpdate {
  public S3DestinationUpdate $s_3_update;
  public HECEndpoint $hec_endpoint;
  public HECEndpointType $hec_endpoint_type;
  public SplunkS3BackupMode $s_3_backup_mode;
  public ProcessingConfiguration $processing_configuration;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public HECToken $hec_token;
  public HECAcknowledgmentTimeoutInSeconds $hec_acknowledgment_timeout_in_seconds;
  public SplunkRetryOptions $retry_options;
}

class TagDeliveryStreamOutput {
}

class BlockSizeBytes {
}

class CompressionFormat {
}

class CreateDeliveryStreamInput {
  public SplunkDestinationConfiguration $splunk_destination_configuration;
  public DeliveryStreamName $delivery_stream_name;
  public DeliveryStreamType $delivery_stream_type;
  public DeliveryStreamEncryptionConfigurationInput $delivery_stream_encryption_configuration_input;
  public ExtendedS3DestinationConfiguration $extended_s_3_destination_configuration;
  public RedshiftDestinationConfiguration $redshift_destination_configuration;
  public ElasticsearchDestinationConfiguration $elasticsearch_destination_configuration;
  public KinesisStreamSourceConfiguration $kinesis_stream_source_configuration;
  public S3DestinationConfiguration $s_3_destination_configuration;
  public TagDeliveryStreamInputTagList $tags;
}

class ElasticsearchS3BackupMode {
}

class RedshiftDestinationDescription {
  public RoleARN $role_arn;
  public ClusterJDBCURL $cluster_jdbcurl;
  public RedshiftRetryOptions $retry_options;
  public RedshiftS3BackupMode $s_3_backup_mode;
  public CopyCommand $copy_command;
  public Username $username;
  public S3DestinationDescription $s_3_destination_description;
  public ProcessingConfiguration $processing_configuration;
  public S3DestinationDescription $s_3_backup_description;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
}

class StopDeliveryStreamEncryptionOutput {
}

class HECEndpoint {
}

class NonEmptyString {
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class UpdateDestinationOutput {
}

class DeliveryStreamNameList {
}

class DescribeDeliveryStreamOutput {
  public DeliveryStreamDescription $delivery_stream_description;
}

class ElasticsearchIndexRotationPeriod {
}

class S3BackupMode {
}

class ElasticsearchBufferingHints {
  public ElasticsearchBufferingSizeInMBs $size_in_m_bs;
  public ElasticsearchBufferingIntervalInSeconds $interval_in_seconds;
}

class ElasticsearchClusterEndpoint {
}

class InputFormatConfiguration {
  public Deserializer $deserializer;
}

class ListTagsForDeliveryStreamOutput {
  public ListTagsForDeliveryStreamOutputTagList $tags;
  public BooleanObject $has_more_tags;
}

class SchemaConfiguration {
  public NonEmptyStringWithoutWhitespace $catalog_id;
  public NonEmptyStringWithoutWhitespace $database_name;
  public NonEmptyStringWithoutWhitespace $table_name;
  public NonEmptyStringWithoutWhitespace $region;
  public NonEmptyStringWithoutWhitespace $version_id;
  public NonEmptyStringWithoutWhitespace $role_arn;
}

class StartDeliveryStreamEncryptionInput {
  public DeliveryStreamName $delivery_stream_name;
  public DeliveryStreamEncryptionConfigurationInput $delivery_stream_encryption_configuration_input;
}

class UpdateDestinationInput {
  public SplunkDestinationUpdate $splunk_destination_update;
  public DeliveryStreamName $delivery_stream_name;
  public DeliveryStreamVersionId $current_delivery_stream_version_id;
  public DestinationId $destination_id;
  public S3DestinationUpdate $s_3_destination_update;
  public ExtendedS3DestinationUpdate $extended_s_3_destination_update;
  public RedshiftDestinationUpdate $redshift_destination_update;
  public ElasticsearchDestinationUpdate $elasticsearch_destination_update;
}

class ElasticsearchDestinationDescription {
  public ElasticsearchIndexRotationPeriod $index_rotation_period;
  public ElasticsearchS3BackupMode $s_3_backup_mode;
  public ProcessingConfiguration $processing_configuration;
  public VpcConfigurationDescription $vpc_configuration_description;
  public ElasticsearchBufferingHints $buffering_hints;
  public ElasticsearchRetryOptions $retry_options;
  public S3DestinationDescription $s_3_destination_description;
  public RoleARN $role_arn;
  public ElasticsearchDomainARN $domain_arn;
  public ElasticsearchClusterEndpoint $cluster_endpoint;
  public ElasticsearchIndexName $index_name;
  public ElasticsearchTypeName $type_name;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
}

class KinesisStreamARN {
}

class ListTagsForDeliveryStreamInput {
  public DeliveryStreamName $delivery_stream_name;
  public TagKey $exclusive_start_tag_key;
  public ListTagsForDeliveryStreamInputLimit $limit;
}

class OrcCompression {
}

class ProcessorParameterList {
}

class SplunkRetryDurationInSeconds {
}

class StopDeliveryStreamEncryptionInput {
  public DeliveryStreamName $delivery_stream_name;
}

class DeliveryStartTimestamp {
}

class DeliveryStreamEncryptionConfigurationInput {
  public AWSKMSKeyARN $key_arn;
  public KeyType $key_type;
}

class ExtendedS3DestinationDescription {
  public RoleARN $role_arn;
  public BufferingHints $buffering_hints;
  public CompressionFormat $compression_format;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public S3DestinationDescription $s_3_backup_description;
  public DataFormatConversionConfiguration $data_format_conversion_configuration;
  public BucketARN $bucket_arn;
  public Prefix $prefix;
  public ErrorOutputPrefix $error_output_prefix;
  public EncryptionConfiguration $encryption_configuration;
  public ProcessingConfiguration $processing_configuration;
  public S3BackupMode $s_3_backup_mode;
}

class ProcessorList {
}

class RedshiftRetryOptions {
  public RedshiftRetryDurationInSeconds $duration_in_seconds;
}

class Username {
}

class DestinationDescriptionList {
}

class ErrorOutputPrefix {
}

class KeyType {
}

class ProcessorParameterValue {
}

class PutRecordBatchResponseEntryList {
}

class ListDeliveryStreamsInputLimit {
}

class OrcSerDe {
  public Proportion $padding_tolerance;
  public ListOfNonEmptyStringsWithoutWhitespace $bloom_filter_columns;
  public Proportion $bloom_filter_false_positive_probability;
  public OrcStripeSizeBytes $stripe_size_bytes;
  public OrcRowIndexStride $row_index_stride;
  public OrcCompression $compression;
  public Proportion $dictionary_key_threshold;
  public OrcFormatVersion $format_version;
  public BlockSizeBytes $block_size_bytes;
  public BooleanObject $enable_padding;
}

class ParquetSerDe {
  public BlockSizeBytes $block_size_bytes;
  public ParquetPageSizeBytes $page_size_bytes;
  public ParquetCompression $compression;
  public BooleanObject $enable_dictionary_compression;
  public NonNegativeIntegerObject $max_padding_bytes;
  public ParquetWriterVersion $writer_version;
}

class PutRecordBatchInput {
  public PutRecordBatchRequestEntryList $records;
  public DeliveryStreamName $delivery_stream_name;
}

class S3DestinationDescription {
  public CompressionFormat $compression_format;
  public EncryptionConfiguration $encryption_configuration;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public RoleARN $role_arn;
  public BucketARN $bucket_arn;
  public Prefix $prefix;
  public ErrorOutputPrefix $error_output_prefix;
  public BufferingHints $buffering_hints;
}

class DataTableName {
}

class DeliveryStreamEncryptionConfiguration {
  public KeyType $key_type;
  public DeliveryStreamEncryptionStatus $status;
  public FailureDescription $failure_description;
  public AWSKMSKeyARN $key_arn;
}

class DeliveryStreamType {
}

class ServiceUnavailableException {
  public ErrorMessage $message;
}

class VpcConfiguration {
  public SubnetIdList $subnet_ids;
  public RoleARN $role_arn;
  public SecurityGroupIdList $security_group_ids;
}

class StartDeliveryStreamEncryptionOutput {
}

class ColumnToJsonKeyMappings {
}

class ElasticsearchBufferingSizeInMBs {
}

class ParquetWriterVersion {
}

class ExtendedS3DestinationUpdate {
  public ProcessingConfiguration $processing_configuration;
  public S3BackupMode $s_3_backup_mode;
  public RoleARN $role_arn;
  public ErrorOutputPrefix $error_output_prefix;
  public BufferingHints $buffering_hints;
  public CompressionFormat $compression_format;
  public S3DestinationUpdate $s_3_backup_update;
  public DataFormatConversionConfiguration $data_format_conversion_configuration;
  public BucketARN $bucket_arn;
  public Prefix $prefix;
  public EncryptionConfiguration $encryption_configuration;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
}

class ListTagsForDeliveryStreamOutputTagList {
}

class SecurityGroupIdList {
}

class TagKeyList {
}

class UntagDeliveryStreamInput {
  public TagKeyList $tag_keys;
  public DeliveryStreamName $delivery_stream_name;
}

class DescribeDeliveryStreamInput {
  public DescribeDeliveryStreamInputLimit $limit;
  public DestinationId $exclusive_start_destination_id;
  public DeliveryStreamName $delivery_stream_name;
}

class Deserializer {
  public OpenXJsonSerDe $open_x_json_ser_de;
  public HiveJsonSerDe $hive_json_ser_de;
}

class EncryptionConfiguration {
  public NoEncryptionConfig $no_encryption_config;
  public KMSEncryptionConfig $kms_encryption_config;
}

class DeliveryStreamEncryptionStatus {
}

class HECAcknowledgmentTimeoutInSeconds {
}

class ListOfNonEmptyStringsWithoutWhitespace {
}

class NoEncryptionConfig {
}

class PutRecordOutput {
  public BooleanObject $encrypted;
  public PutResponseRecordId $record_id;
}

class Timestamp {
}

class CloudWatchLoggingOptions {
  public BooleanObject $enabled;
  public LogGroupName $log_group_name;
  public LogStreamName $log_stream_name;
}

class Data {
}

class DestinationId {
}

class PutRecordBatchResponseEntry {
  public PutResponseRecordId $record_id;
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
}

class CreateDeliveryStreamOutput {
  public DeliveryStreamARN $delivery_stream_arn;
}

class DestinationDescription {
  public RedshiftDestinationDescription $redshift_destination_description;
  public ElasticsearchDestinationDescription $elasticsearch_destination_description;
  public SplunkDestinationDescription $splunk_destination_description;
  public DestinationId $destination_id;
  public S3DestinationDescription $s_3_destination_description;
  public ExtendedS3DestinationDescription $extended_s_3_destination_description;
}

class FailureDescription {
  public DeliveryStreamFailureType $type;
  public NonEmptyString $details;
}

class Proportion {
}

class PutRecordInput {
  public DeliveryStreamName $delivery_stream_name;
  public Record $record;
}

class ConcurrentModificationException {
  public ErrorMessage $message;
}

class ElasticsearchDestinationConfiguration {
  public ElasticsearchRetryOptions $retry_options;
  public S3DestinationConfiguration $s_3_configuration;
  public ProcessingConfiguration $processing_configuration;
  public RoleARN $role_arn;
  public ElasticsearchDomainARN $domain_arn;
  public ElasticsearchIndexName $index_name;
  public ElasticsearchIndexRotationPeriod $index_rotation_period;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public VpcConfiguration $vpc_configuration;
  public ElasticsearchClusterEndpoint $cluster_endpoint;
  public ElasticsearchTypeName $type_name;
  public ElasticsearchBufferingHints $buffering_hints;
  public ElasticsearchS3BackupMode $s_3_backup_mode;
}

class ProcessorParameter {
  public ProcessorParameterValue $parameter_value;
  public ProcessorParameterName $parameter_name;
}

class HiveJsonSerDe {
  public ListOfNonEmptyStrings $timestamp_formats;
}

class KinesisStreamSourceDescription {
  public KinesisStreamARN $kinesis_stream_arn;
  public RoleARN $role_arn;
  public DeliveryStartTimestamp $delivery_start_timestamp;
}

class LimitExceededException {
  public ErrorMessage $message;
}

class RedshiftRetryDurationInSeconds {
}

class DataFormatConversionConfiguration {
  public SchemaConfiguration $schema_configuration;
  public InputFormatConfiguration $input_format_configuration;
  public OutputFormatConfiguration $output_format_configuration;
  public BooleanObject $enabled;
}

class DeliveryStreamName {
}

class DescribeDeliveryStreamInputLimit {
}

class TagDeliveryStreamInput {
  public DeliveryStreamName $delivery_stream_name;
  public TagDeliveryStreamInputTagList $tags;
}

class BucketARN {
}

class HECToken {
}

class Processor {
  public ProcessorType $type;
  public ProcessorParameterList $parameters;
}

class DataTableColumns {
}

class DeliveryStreamDescription {
  public DeliveryStreamType $delivery_stream_type;
  public DeliveryStreamVersionId $version_id;
  public Timestamp $last_update_timestamp;
  public SourceDescription $source;
  public BooleanObject $has_more_destinations;
  public DeliveryStreamARN $delivery_stream_arn;
  public FailureDescription $failure_description;
  public DeliveryStreamEncryptionConfiguration $delivery_stream_encryption_configuration;
  public DestinationDescriptionList $destinations;
  public DeliveryStreamName $delivery_stream_name;
  public DeliveryStreamStatus $delivery_stream_status;
  public Timestamp $create_timestamp;
}

class ElasticsearchBufferingIntervalInSeconds {
}

class KMSEncryptionConfig {
  public AWSKMSKeyARN $awskms_key_arn;
}

class NonNegativeIntegerObject {
}

class SourceDescription {
  public KinesisStreamSourceDescription $kinesis_stream_source_description;
}

class CopyOptions {
}

class DeleteDeliveryStreamOutput {
}

class ExtendedS3DestinationConfiguration {
  public RoleARN $role_arn;
  public BucketARN $bucket_arn;
  public Prefix $prefix;
  public ProcessingConfiguration $processing_configuration;
  public S3BackupMode $s_3_backup_mode;
  public S3DestinationConfiguration $s_3_backup_configuration;
  public ErrorOutputPrefix $error_output_prefix;
  public BufferingHints $buffering_hints;
  public CompressionFormat $compression_format;
  public EncryptionConfiguration $encryption_configuration;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public DataFormatConversionConfiguration $data_format_conversion_configuration;
}

class SizeInMBs {
}

class VpcConfigurationDescription {
  public SubnetIdList $subnet_ids;
  public RoleARN $role_arn;
  public SecurityGroupIdList $security_group_ids;
  public NonEmptyStringWithoutWhitespace $vpc_id;
}

class BooleanObject {
}

class KinesisStreamSourceConfiguration {
  public KinesisStreamARN $kinesis_stream_arn;
  public RoleARN $role_arn;
}

class PutRecordBatchRequestEntryList {
}

class S3DestinationConfiguration {
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public RoleARN $role_arn;
  public BucketARN $bucket_arn;
  public Prefix $prefix;
  public ErrorOutputPrefix $error_output_prefix;
  public BufferingHints $buffering_hints;
  public CompressionFormat $compression_format;
  public EncryptionConfiguration $encryption_configuration;
}

class Serializer {
  public ParquetSerDe $parquet_ser_de;
  public OrcSerDe $orc_ser_de;
}

class DeleteDeliveryStreamInput {
  public BooleanObject $allow_force_delete;
  public DeliveryStreamName $delivery_stream_name;
}

class ErrorCode {
}

class RedshiftS3BackupMode {
}

class NonEmptyStringWithoutWhitespace {
}

class OrcFormatVersion {
}

class ParquetCompression {
}

class Record {
  public Data $data;
}

class RedshiftDestinationUpdate {
  public ClusterJDBCURL $cluster_jdbcurl;
  public CopyCommand $copy_command;
  public Username $username;
  public Password $password;
  public S3DestinationUpdate $s_3_update;
  public ProcessingConfiguration $processing_configuration;
  public RedshiftS3BackupMode $s_3_backup_mode;
  public RoleARN $role_arn;
  public RedshiftRetryOptions $retry_options;
  public S3DestinationUpdate $s_3_backup_update;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
}

class AWSKMSKeyARN {
}

class DeliveryStreamVersionId {
}

class ElasticsearchTypeName {
}

class SplunkRetryOptions {
  public SplunkRetryDurationInSeconds $duration_in_seconds;
}

class IntervalInSeconds {
}

class ListTagsForDeliveryStreamInputLimit {
}

class LogGroupName {
}

class RoleARN {
}

class SplunkS3BackupMode {
}

class DeliveryStreamFailureType {
}

class DeliveryStreamStatus {
}

class ParquetPageSizeBytes {
}

class BufferingHints {
  public SizeInMBs $size_in_m_bs;
  public IntervalInSeconds $interval_in_seconds;
}

class InvalidArgumentException {
  public ErrorMessage $message;
}

class ProcessorType {
}

class S3DestinationUpdate {
  public Prefix $prefix;
  public ErrorOutputPrefix $error_output_prefix;
  public BufferingHints $buffering_hints;
  public CompressionFormat $compression_format;
  public EncryptionConfiguration $encryption_configuration;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public RoleARN $role_arn;
  public BucketARN $bucket_arn;
}

class TagValue {
}

class UntagDeliveryStreamOutput {
}

class ElasticsearchDestinationUpdate {
  public ElasticsearchClusterEndpoint $cluster_endpoint;
  public ElasticsearchTypeName $type_name;
  public ElasticsearchBufferingHints $buffering_hints;
  public S3DestinationUpdate $s_3_update;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public RoleARN $role_arn;
  public ElasticsearchDomainARN $domain_arn;
  public ElasticsearchRetryOptions $retry_options;
  public ProcessingConfiguration $processing_configuration;
  public ElasticsearchIndexName $index_name;
  public ElasticsearchIndexRotationPeriod $index_rotation_period;
}

class HECEndpointType {
}

class ProcessingConfiguration {
  public BooleanObject $enabled;
  public ProcessorList $processors;
}

class TagDeliveryStreamInputTagList {
}

class LogStreamName {
}

class ProcessorParameterName {
}

class PutResponseRecordId {
}

class RedshiftDestinationConfiguration {
  public RoleARN $role_arn;
  public ClusterJDBCURL $cluster_jdbcurl;
  public RedshiftS3BackupMode $s_3_backup_mode;
  public S3DestinationConfiguration $s_3_backup_configuration;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public CopyCommand $copy_command;
  public Username $username;
  public Password $password;
  public RedshiftRetryOptions $retry_options;
  public S3DestinationConfiguration $s_3_configuration;
  public ProcessingConfiguration $processing_configuration;
}

class ClusterJDBCURL {
}

class OutputFormatConfiguration {
  public Serializer $serializer;
}

class Password {
}

class OrcStripeSizeBytes {
}

class SubnetIdList {
}

class TagKey {
}

class DeliveryStreamARN {
}

class ListDeliveryStreamsInput {
  public ListDeliveryStreamsInputLimit $limit;
  public DeliveryStreamType $delivery_stream_type;
  public DeliveryStreamName $exclusive_start_delivery_stream_name;
}

class ListOfNonEmptyStrings {
}

class OpenXJsonSerDe {
  public BooleanObject $convert_dots_in_json_keys_to_underscores;
  public BooleanObject $case_insensitive;
  public ColumnToJsonKeyMappings $column_to_json_key_mappings;
}

class OrcRowIndexStride {
}

class Prefix {
}

class ElasticsearchRetryDurationInSeconds {
}

class ErrorMessage {
}

class InvalidKMSResourceException {
  public ErrorCode $code;
  public ErrorMessage $message;
}


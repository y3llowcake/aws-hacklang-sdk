<?hh // strict
namespace slack\aws\firehose;

interface Firehose {
  public function CreateDeliveryStream(CreateDeliveryStreamInput) Awaitable<Errors\Result<CreateDeliveryStreamOutput>>;
  public function DeleteDeliveryStream(DeleteDeliveryStreamInput) Awaitable<Errors\Result<DeleteDeliveryStreamOutput>>;
  public function DescribeDeliveryStream(DescribeDeliveryStreamInput) Awaitable<Errors\Result<DescribeDeliveryStreamOutput>>;
  public function ListDeliveryStreams(ListDeliveryStreamsInput) Awaitable<Errors\Result<ListDeliveryStreamsOutput>>;
  public function ListTagsForDeliveryStream(ListTagsForDeliveryStreamInput) Awaitable<Errors\Result<ListTagsForDeliveryStreamOutput>>;
  public function PutRecord(PutRecordInput) Awaitable<Errors\Result<PutRecordOutput>>;
  public function PutRecordBatch(PutRecordBatchInput) Awaitable<Errors\Result<PutRecordBatchOutput>>;
  public function StartDeliveryStreamEncryption(StartDeliveryStreamEncryptionInput) Awaitable<Errors\Result<StartDeliveryStreamEncryptionOutput>>;
  public function StopDeliveryStreamEncryption(StopDeliveryStreamEncryptionInput) Awaitable<Errors\Result<StopDeliveryStreamEncryptionOutput>>;
  public function TagDeliveryStream(TagDeliveryStreamInput) Awaitable<Errors\Result<TagDeliveryStreamOutput>>;
  public function UntagDeliveryStream(UntagDeliveryStreamInput) Awaitable<Errors\Result<UntagDeliveryStreamOutput>>;
  public function UpdateDestination(UpdateDestinationInput) Awaitable<Errors\Result<UpdateDestinationOutput>>;
}

class AWSKMSKeyARN {
}

class BlockSizeBytes {
}

class BooleanObject {
}

class BucketARN {
}

class BufferingHints {
  public IntervalInSeconds $interval_in_seconds;
  public SizeInMBs $size_in_m_bs;
}

class CloudWatchLoggingOptions {
  public BooleanObject $enabled;
  public LogGroupName $log_group_name;
  public LogStreamName $log_stream_name;
}

class ClusterJDBCURL {
}

class ColumnToJsonKeyMappings {
}

class CompressionFormat {
}

class ConcurrentModificationException {
  public ErrorMessage $message;
}

class CopyCommand {
  public CopyOptions $copy_options;
  public DataTableColumns $data_table_columns;
  public DataTableName $data_table_name;
}

class CopyOptions {
}

class CreateDeliveryStreamInput {
  public DeliveryStreamEncryptionConfigurationInput $delivery_stream_encryption_configuration_input;
  public DeliveryStreamName $delivery_stream_name;
  public DeliveryStreamType $delivery_stream_type;
  public ElasticsearchDestinationConfiguration $elasticsearch_destination_configuration;
  public ExtendedS3DestinationConfiguration $extended_s_3_destination_configuration;
  public KinesisStreamSourceConfiguration $kinesis_stream_source_configuration;
  public RedshiftDestinationConfiguration $redshift_destination_configuration;
  public S3DestinationConfiguration $s_3_destination_configuration;
  public SplunkDestinationConfiguration $splunk_destination_configuration;
  public TagDeliveryStreamInputTagList $tags;
}

class CreateDeliveryStreamOutput {
  public DeliveryStreamARN $delivery_stream_arn;
}

class Data {
}

class DataFormatConversionConfiguration {
  public BooleanObject $enabled;
  public InputFormatConfiguration $input_format_configuration;
  public OutputFormatConfiguration $output_format_configuration;
  public SchemaConfiguration $schema_configuration;
}

class DataTableColumns {
}

class DataTableName {
}

class DeleteDeliveryStreamInput {
  public BooleanObject $allow_force_delete;
  public DeliveryStreamName $delivery_stream_name;
}

class DeleteDeliveryStreamOutput {
}

class DeliveryStartTimestamp {
}

class DeliveryStreamARN {
}

class DeliveryStreamDescription {
  public Timestamp $create_timestamp;
  public DeliveryStreamARN $delivery_stream_arn;
  public DeliveryStreamEncryptionConfiguration $delivery_stream_encryption_configuration;
  public DeliveryStreamName $delivery_stream_name;
  public DeliveryStreamStatus $delivery_stream_status;
  public DeliveryStreamType $delivery_stream_type;
  public DestinationDescriptionList $destinations;
  public FailureDescription $failure_description;
  public BooleanObject $has_more_destinations;
  public Timestamp $last_update_timestamp;
  public SourceDescription $source;
  public DeliveryStreamVersionId $version_id;
}

class DeliveryStreamEncryptionConfiguration {
  public FailureDescription $failure_description;
  public AWSKMSKeyARN $key_arn;
  public KeyType $key_type;
  public DeliveryStreamEncryptionStatus $status;
}

class DeliveryStreamEncryptionConfigurationInput {
  public AWSKMSKeyARN $key_arn;
  public KeyType $key_type;
}

class DeliveryStreamEncryptionStatus {
}

class DeliveryStreamFailureType {
}

class DeliveryStreamName {
}

class DeliveryStreamNameList {
}

class DeliveryStreamStatus {
}

class DeliveryStreamType {
}

class DeliveryStreamVersionId {
}

class DescribeDeliveryStreamInput {
  public DeliveryStreamName $delivery_stream_name;
  public DestinationId $exclusive_start_destination_id;
  public DescribeDeliveryStreamInputLimit $limit;
}

class DescribeDeliveryStreamInputLimit {
}

class DescribeDeliveryStreamOutput {
  public DeliveryStreamDescription $delivery_stream_description;
}

class Deserializer {
  public HiveJsonSerDe $hive_json_ser_de;
  public OpenXJsonSerDe $open_x_json_ser_de;
}

class DestinationDescription {
  public DestinationId $destination_id;
  public ElasticsearchDestinationDescription $elasticsearch_destination_description;
  public ExtendedS3DestinationDescription $extended_s_3_destination_description;
  public RedshiftDestinationDescription $redshift_destination_description;
  public S3DestinationDescription $s_3_destination_description;
  public SplunkDestinationDescription $splunk_destination_description;
}

class DestinationDescriptionList {
}

class DestinationId {
}

class ElasticsearchBufferingHints {
  public ElasticsearchBufferingIntervalInSeconds $interval_in_seconds;
  public ElasticsearchBufferingSizeInMBs $size_in_m_bs;
}

class ElasticsearchBufferingIntervalInSeconds {
}

class ElasticsearchBufferingSizeInMBs {
}

class ElasticsearchClusterEndpoint {
}

class ElasticsearchDestinationConfiguration {
  public ElasticsearchBufferingHints $buffering_hints;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ElasticsearchClusterEndpoint $cluster_endpoint;
  public ElasticsearchDomainARN $domain_arn;
  public ElasticsearchIndexName $index_name;
  public ElasticsearchIndexRotationPeriod $index_rotation_period;
  public ProcessingConfiguration $processing_configuration;
  public ElasticsearchRetryOptions $retry_options;
  public RoleARN $role_arn;
  public ElasticsearchS3BackupMode $s_3_backup_mode;
  public S3DestinationConfiguration $s_3_configuration;
  public ElasticsearchTypeName $type_name;
  public VpcConfiguration $vpc_configuration;
}

class ElasticsearchDestinationDescription {
  public ElasticsearchBufferingHints $buffering_hints;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ElasticsearchClusterEndpoint $cluster_endpoint;
  public ElasticsearchDomainARN $domain_arn;
  public ElasticsearchIndexName $index_name;
  public ElasticsearchIndexRotationPeriod $index_rotation_period;
  public ProcessingConfiguration $processing_configuration;
  public ElasticsearchRetryOptions $retry_options;
  public RoleARN $role_arn;
  public ElasticsearchS3BackupMode $s_3_backup_mode;
  public S3DestinationDescription $s_3_destination_description;
  public ElasticsearchTypeName $type_name;
  public VpcConfigurationDescription $vpc_configuration_description;
}

class ElasticsearchDestinationUpdate {
  public ElasticsearchBufferingHints $buffering_hints;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ElasticsearchClusterEndpoint $cluster_endpoint;
  public ElasticsearchDomainARN $domain_arn;
  public ElasticsearchIndexName $index_name;
  public ElasticsearchIndexRotationPeriod $index_rotation_period;
  public ProcessingConfiguration $processing_configuration;
  public ElasticsearchRetryOptions $retry_options;
  public RoleARN $role_arn;
  public S3DestinationUpdate $s_3_update;
  public ElasticsearchTypeName $type_name;
}

class ElasticsearchDomainARN {
}

class ElasticsearchIndexName {
}

class ElasticsearchIndexRotationPeriod {
}

class ElasticsearchRetryDurationInSeconds {
}

class ElasticsearchRetryOptions {
  public ElasticsearchRetryDurationInSeconds $duration_in_seconds;
}

class ElasticsearchS3BackupMode {
}

class ElasticsearchTypeName {
}

class EncryptionConfiguration {
  public KMSEncryptionConfig $kms_encryption_config;
  public NoEncryptionConfig $no_encryption_config;
}

class ErrorCode {
}

class ErrorMessage {
}

class ErrorOutputPrefix {
}

class ExtendedS3DestinationConfiguration {
  public BucketARN $bucket_arn;
  public BufferingHints $buffering_hints;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public CompressionFormat $compression_format;
  public DataFormatConversionConfiguration $data_format_conversion_configuration;
  public EncryptionConfiguration $encryption_configuration;
  public ErrorOutputPrefix $error_output_prefix;
  public Prefix $prefix;
  public ProcessingConfiguration $processing_configuration;
  public RoleARN $role_arn;
  public S3DestinationConfiguration $s_3_backup_configuration;
  public S3BackupMode $s_3_backup_mode;
}

class ExtendedS3DestinationDescription {
  public BucketARN $bucket_arn;
  public BufferingHints $buffering_hints;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public CompressionFormat $compression_format;
  public DataFormatConversionConfiguration $data_format_conversion_configuration;
  public EncryptionConfiguration $encryption_configuration;
  public ErrorOutputPrefix $error_output_prefix;
  public Prefix $prefix;
  public ProcessingConfiguration $processing_configuration;
  public RoleARN $role_arn;
  public S3DestinationDescription $s_3_backup_description;
  public S3BackupMode $s_3_backup_mode;
}

class ExtendedS3DestinationUpdate {
  public BucketARN $bucket_arn;
  public BufferingHints $buffering_hints;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public CompressionFormat $compression_format;
  public DataFormatConversionConfiguration $data_format_conversion_configuration;
  public EncryptionConfiguration $encryption_configuration;
  public ErrorOutputPrefix $error_output_prefix;
  public Prefix $prefix;
  public ProcessingConfiguration $processing_configuration;
  public RoleARN $role_arn;
  public S3BackupMode $s_3_backup_mode;
  public S3DestinationUpdate $s_3_backup_update;
}

class FailureDescription {
  public NonEmptyString $details;
  public DeliveryStreamFailureType $type;
}

class HECAcknowledgmentTimeoutInSeconds {
}

class HECEndpoint {
}

class HECEndpointType {
}

class HECToken {
}

class HiveJsonSerDe {
  public ListOfNonEmptyStrings $timestamp_formats;
}

class InputFormatConfiguration {
  public Deserializer $deserializer;
}

class IntervalInSeconds {
}

class InvalidArgumentException {
  public ErrorMessage $message;
}

class InvalidKMSResourceException {
  public ErrorCode $code;
  public ErrorMessage $message;
}

class KMSEncryptionConfig {
  public AWSKMSKeyARN $awskms_key_arn;
}

class KeyType {
}

class KinesisStreamARN {
}

class KinesisStreamSourceConfiguration {
  public KinesisStreamARN $kinesis_stream_arn;
  public RoleARN $role_arn;
}

class KinesisStreamSourceDescription {
  public DeliveryStartTimestamp $delivery_start_timestamp;
  public KinesisStreamARN $kinesis_stream_arn;
  public RoleARN $role_arn;
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListDeliveryStreamsInput {
  public DeliveryStreamType $delivery_stream_type;
  public DeliveryStreamName $exclusive_start_delivery_stream_name;
  public ListDeliveryStreamsInputLimit $limit;
}

class ListDeliveryStreamsInputLimit {
}

class ListDeliveryStreamsOutput {
  public DeliveryStreamNameList $delivery_stream_names;
  public BooleanObject $has_more_delivery_streams;
}

class ListOfNonEmptyStrings {
}

class ListOfNonEmptyStringsWithoutWhitespace {
}

class ListTagsForDeliveryStreamInput {
  public DeliveryStreamName $delivery_stream_name;
  public TagKey $exclusive_start_tag_key;
  public ListTagsForDeliveryStreamInputLimit $limit;
}

class ListTagsForDeliveryStreamInputLimit {
}

class ListTagsForDeliveryStreamOutput {
  public BooleanObject $has_more_tags;
  public ListTagsForDeliveryStreamOutputTagList $tags;
}

class ListTagsForDeliveryStreamOutputTagList {
}

class LogGroupName {
}

class LogStreamName {
}

class NoEncryptionConfig {
}

class NonEmptyString {
}

class NonEmptyStringWithoutWhitespace {
}

class NonNegativeIntegerObject {
}

class OpenXJsonSerDe {
  public BooleanObject $case_insensitive;
  public ColumnToJsonKeyMappings $column_to_json_key_mappings;
  public BooleanObject $convert_dots_in_json_keys_to_underscores;
}

class OrcCompression {
}

class OrcFormatVersion {
}

class OrcRowIndexStride {
}

class OrcSerDe {
  public BlockSizeBytes $block_size_bytes;
  public ListOfNonEmptyStringsWithoutWhitespace $bloom_filter_columns;
  public Proportion $bloom_filter_false_positive_probability;
  public OrcCompression $compression;
  public Proportion $dictionary_key_threshold;
  public BooleanObject $enable_padding;
  public OrcFormatVersion $format_version;
  public Proportion $padding_tolerance;
  public OrcRowIndexStride $row_index_stride;
  public OrcStripeSizeBytes $stripe_size_bytes;
}

class OrcStripeSizeBytes {
}

class OutputFormatConfiguration {
  public Serializer $serializer;
}

class ParquetCompression {
}

class ParquetPageSizeBytes {
}

class ParquetSerDe {
  public BlockSizeBytes $block_size_bytes;
  public ParquetCompression $compression;
  public BooleanObject $enable_dictionary_compression;
  public NonNegativeIntegerObject $max_padding_bytes;
  public ParquetPageSizeBytes $page_size_bytes;
  public ParquetWriterVersion $writer_version;
}

class ParquetWriterVersion {
}

class Password {
}

class Prefix {
}

class ProcessingConfiguration {
  public BooleanObject $enabled;
  public ProcessorList $processors;
}

class Processor {
  public ProcessorParameterList $parameters;
  public ProcessorType $type;
}

class ProcessorList {
}

class ProcessorParameter {
  public ProcessorParameterName $parameter_name;
  public ProcessorParameterValue $parameter_value;
}

class ProcessorParameterList {
}

class ProcessorParameterName {
}

class ProcessorParameterValue {
}

class ProcessorType {
}

class Proportion {
}

class PutRecordBatchInput {
  public DeliveryStreamName $delivery_stream_name;
  public PutRecordBatchRequestEntryList $records;
}

class PutRecordBatchOutput {
  public BooleanObject $encrypted;
  public NonNegativeIntegerObject $failed_put_count;
  public PutRecordBatchResponseEntryList $request_responses;
}

class PutRecordBatchRequestEntryList {
}

class PutRecordBatchResponseEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public PutResponseRecordId $record_id;
}

class PutRecordBatchResponseEntryList {
}

class PutRecordInput {
  public DeliveryStreamName $delivery_stream_name;
  public Record $record;
}

class PutRecordOutput {
  public BooleanObject $encrypted;
  public PutResponseRecordId $record_id;
}

class PutResponseRecordId {
}

class Record {
  public Data $data;
}

class RedshiftDestinationConfiguration {
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ClusterJDBCURL $cluster_jdbcurl;
  public CopyCommand $copy_command;
  public Password $password;
  public ProcessingConfiguration $processing_configuration;
  public RedshiftRetryOptions $retry_options;
  public RoleARN $role_arn;
  public S3DestinationConfiguration $s_3_backup_configuration;
  public RedshiftS3BackupMode $s_3_backup_mode;
  public S3DestinationConfiguration $s_3_configuration;
  public Username $username;
}

class RedshiftDestinationDescription {
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ClusterJDBCURL $cluster_jdbcurl;
  public CopyCommand $copy_command;
  public ProcessingConfiguration $processing_configuration;
  public RedshiftRetryOptions $retry_options;
  public RoleARN $role_arn;
  public S3DestinationDescription $s_3_backup_description;
  public RedshiftS3BackupMode $s_3_backup_mode;
  public S3DestinationDescription $s_3_destination_description;
  public Username $username;
}

class RedshiftDestinationUpdate {
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ClusterJDBCURL $cluster_jdbcurl;
  public CopyCommand $copy_command;
  public Password $password;
  public ProcessingConfiguration $processing_configuration;
  public RedshiftRetryOptions $retry_options;
  public RoleARN $role_arn;
  public RedshiftS3BackupMode $s_3_backup_mode;
  public S3DestinationUpdate $s_3_backup_update;
  public S3DestinationUpdate $s_3_update;
  public Username $username;
}

class RedshiftRetryDurationInSeconds {
}

class RedshiftRetryOptions {
  public RedshiftRetryDurationInSeconds $duration_in_seconds;
}

class RedshiftS3BackupMode {
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class RoleARN {
}

class S3BackupMode {
}

class S3DestinationConfiguration {
  public BucketARN $bucket_arn;
  public BufferingHints $buffering_hints;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public CompressionFormat $compression_format;
  public EncryptionConfiguration $encryption_configuration;
  public ErrorOutputPrefix $error_output_prefix;
  public Prefix $prefix;
  public RoleARN $role_arn;
}

class S3DestinationDescription {
  public BucketARN $bucket_arn;
  public BufferingHints $buffering_hints;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public CompressionFormat $compression_format;
  public EncryptionConfiguration $encryption_configuration;
  public ErrorOutputPrefix $error_output_prefix;
  public Prefix $prefix;
  public RoleARN $role_arn;
}

class S3DestinationUpdate {
  public BucketARN $bucket_arn;
  public BufferingHints $buffering_hints;
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public CompressionFormat $compression_format;
  public EncryptionConfiguration $encryption_configuration;
  public ErrorOutputPrefix $error_output_prefix;
  public Prefix $prefix;
  public RoleARN $role_arn;
}

class SchemaConfiguration {
  public NonEmptyStringWithoutWhitespace $catalog_id;
  public NonEmptyStringWithoutWhitespace $database_name;
  public NonEmptyStringWithoutWhitespace $region;
  public NonEmptyStringWithoutWhitespace $role_arn;
  public NonEmptyStringWithoutWhitespace $table_name;
  public NonEmptyStringWithoutWhitespace $version_id;
}

class SecurityGroupIdList {
}

class Serializer {
  public OrcSerDe $orc_ser_de;
  public ParquetSerDe $parquet_ser_de;
}

class ServiceUnavailableException {
  public ErrorMessage $message;
}

class SizeInMBs {
}

class SourceDescription {
  public KinesisStreamSourceDescription $kinesis_stream_source_description;
}

class SplunkDestinationConfiguration {
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public HECAcknowledgmentTimeoutInSeconds $hec_acknowledgment_timeout_in_seconds;
  public HECEndpoint $hec_endpoint;
  public HECEndpointType $hec_endpoint_type;
  public HECToken $hec_token;
  public ProcessingConfiguration $processing_configuration;
  public SplunkRetryOptions $retry_options;
  public SplunkS3BackupMode $s_3_backup_mode;
  public S3DestinationConfiguration $s_3_configuration;
}

class SplunkDestinationDescription {
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public HECAcknowledgmentTimeoutInSeconds $hec_acknowledgment_timeout_in_seconds;
  public HECEndpoint $hec_endpoint;
  public HECEndpointType $hec_endpoint_type;
  public HECToken $hec_token;
  public ProcessingConfiguration $processing_configuration;
  public SplunkRetryOptions $retry_options;
  public SplunkS3BackupMode $s_3_backup_mode;
  public S3DestinationDescription $s_3_destination_description;
}

class SplunkDestinationUpdate {
  public CloudWatchLoggingOptions $cloud_watch_logging_options;
  public HECAcknowledgmentTimeoutInSeconds $hec_acknowledgment_timeout_in_seconds;
  public HECEndpoint $hec_endpoint;
  public HECEndpointType $hec_endpoint_type;
  public HECToken $hec_token;
  public ProcessingConfiguration $processing_configuration;
  public SplunkRetryOptions $retry_options;
  public SplunkS3BackupMode $s_3_backup_mode;
  public S3DestinationUpdate $s_3_update;
}

class SplunkRetryDurationInSeconds {
}

class SplunkRetryOptions {
  public SplunkRetryDurationInSeconds $duration_in_seconds;
}

class SplunkS3BackupMode {
}

class StartDeliveryStreamEncryptionInput {
  public DeliveryStreamEncryptionConfigurationInput $delivery_stream_encryption_configuration_input;
  public DeliveryStreamName $delivery_stream_name;
}

class StartDeliveryStreamEncryptionOutput {
}

class StopDeliveryStreamEncryptionInput {
  public DeliveryStreamName $delivery_stream_name;
}

class StopDeliveryStreamEncryptionOutput {
}

class SubnetIdList {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagDeliveryStreamInput {
  public DeliveryStreamName $delivery_stream_name;
  public TagDeliveryStreamInputTagList $tags;
}

class TagDeliveryStreamInputTagList {
}

class TagDeliveryStreamOutput {
}

class TagKey {
}

class TagKeyList {
}

class TagValue {
}

class Timestamp {
}

class UntagDeliveryStreamInput {
  public DeliveryStreamName $delivery_stream_name;
  public TagKeyList $tag_keys;
}

class UntagDeliveryStreamOutput {
}

class UpdateDestinationInput {
  public DeliveryStreamVersionId $current_delivery_stream_version_id;
  public DeliveryStreamName $delivery_stream_name;
  public DestinationId $destination_id;
  public ElasticsearchDestinationUpdate $elasticsearch_destination_update;
  public ExtendedS3DestinationUpdate $extended_s_3_destination_update;
  public RedshiftDestinationUpdate $redshift_destination_update;
  public S3DestinationUpdate $s_3_destination_update;
  public SplunkDestinationUpdate $splunk_destination_update;
}

class UpdateDestinationOutput {
}

class Username {
}

class VpcConfiguration {
  public RoleARN $role_arn;
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;
}

class VpcConfigurationDescription {
  public RoleARN $role_arn;
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;
  public NonEmptyStringWithoutWhitespace $vpc_id;
}


<?hh // strict
namespace slack\aws\firehose;

interface Firehose {
  public function CreateDeliveryStream(CreateDeliveryStreamInput $in): Awaitable<\Errors\Result<CreateDeliveryStreamOutput>>;
  public function DeleteDeliveryStream(DeleteDeliveryStreamInput $in): Awaitable<\Errors\Result<DeleteDeliveryStreamOutput>>;
  public function DescribeDeliveryStream(DescribeDeliveryStreamInput $in): Awaitable<\Errors\Result<DescribeDeliveryStreamOutput>>;
  public function ListDeliveryStreams(ListDeliveryStreamsInput $in): Awaitable<\Errors\Result<ListDeliveryStreamsOutput>>;
  public function ListTagsForDeliveryStream(ListTagsForDeliveryStreamInput $in): Awaitable<\Errors\Result<ListTagsForDeliveryStreamOutput>>;
  public function PutRecord(PutRecordInput $in): Awaitable<\Errors\Result<PutRecordOutput>>;
  public function PutRecordBatch(PutRecordBatchInput $in): Awaitable<\Errors\Result<PutRecordBatchOutput>>;
  public function StartDeliveryStreamEncryption(StartDeliveryStreamEncryptionInput $in): Awaitable<\Errors\Result<StartDeliveryStreamEncryptionOutput>>;
  public function StopDeliveryStreamEncryption(StopDeliveryStreamEncryptionInput $in): Awaitable<\Errors\Result<StopDeliveryStreamEncryptionOutput>>;
  public function TagDeliveryStream(TagDeliveryStreamInput $in): Awaitable<\Errors\Result<TagDeliveryStreamOutput>>;
  public function UntagDeliveryStream(UntagDeliveryStreamInput $in): Awaitable<\Errors\Result<UntagDeliveryStreamOutput>>;
  public function UpdateDestination(UpdateDestinationInput $in): Awaitable<\Errors\Result<UpdateDestinationOutput>>;
}

type AWSKMSKeyARN = string;

type BlockSizeBytes = int;

type BooleanObject = bool;

type BucketARN = string;

class BufferingHints {
  public ?IntervalInSeconds $interval_in_seconds;
  public ?SizeInMBs $size_in_m_bs;

  public function __construct(shape(
    ?'interval_in_seconds' => ?IntervalInSeconds,
    ?'size_in_m_bs' => ?SizeInMBs,
  ) $s = shape()) {
    $this->interval_in_seconds = $s['interval_in_seconds'] ?? 0;
    $this->size_in_m_bs = $s['size_in_m_bs'] ?? 0;
  }
}

class CloudWatchLoggingOptions {
  public ?BooleanObject $enabled;
  public ?LogGroupName $log_group_name;
  public ?LogStreamName $log_stream_name;

  public function __construct(shape(
    ?'enabled' => ?BooleanObject,
    ?'log_group_name' => ?LogGroupName,
    ?'log_stream_name' => ?LogStreamName,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->log_group_name = $s['log_group_name'] ?? '';
    $this->log_stream_name = $s['log_stream_name'] ?? '';
  }
}

type ClusterJDBCURL = string;

type ColumnToJsonKeyMappings = dict<NonEmptyStringWithoutWhitespace, NonEmptyString>;

type CompressionFormat = string;

class ConcurrentModificationException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CopyCommand {
  public ?CopyOptions $copy_options;
  public ?DataTableColumns $data_table_columns;
  public ?DataTableName $data_table_name;

  public function __construct(shape(
    ?'copy_options' => ?CopyOptions,
    ?'data_table_columns' => ?DataTableColumns,
    ?'data_table_name' => ?DataTableName,
  ) $s = shape()) {
    $this->copy_options = $s['copy_options'] ?? '';
    $this->data_table_columns = $s['data_table_columns'] ?? '';
    $this->data_table_name = $s['data_table_name'] ?? '';
  }
}

type CopyOptions = string;

class CreateDeliveryStreamInput {
  public ?DeliveryStreamEncryptionConfigurationInput $delivery_stream_encryption_configuration_input;
  public ?DeliveryStreamName $delivery_stream_name;
  public ?DeliveryStreamType $delivery_stream_type;
  public ?ElasticsearchDestinationConfiguration $elasticsearch_destination_configuration;
  public ?ExtendedS3DestinationConfiguration $extended_s_3_destination_configuration;
  public ?KinesisStreamSourceConfiguration $kinesis_stream_source_configuration;
  public ?RedshiftDestinationConfiguration $redshift_destination_configuration;
  public ?S3DestinationConfiguration $s_3_destination_configuration;
  public ?SplunkDestinationConfiguration $splunk_destination_configuration;
  public ?TagDeliveryStreamInputTagList $tags;

  public function __construct(shape(
    ?'delivery_stream_encryption_configuration_input' => ?DeliveryStreamEncryptionConfigurationInput,
    ?'delivery_stream_name' => ?DeliveryStreamName,
    ?'delivery_stream_type' => ?DeliveryStreamType,
    ?'elasticsearch_destination_configuration' => ?ElasticsearchDestinationConfiguration,
    ?'extended_s_3_destination_configuration' => ?ExtendedS3DestinationConfiguration,
    ?'kinesis_stream_source_configuration' => ?KinesisStreamSourceConfiguration,
    ?'redshift_destination_configuration' => ?RedshiftDestinationConfiguration,
    ?'s_3_destination_configuration' => ?S3DestinationConfiguration,
    ?'splunk_destination_configuration' => ?SplunkDestinationConfiguration,
    ?'tags' => ?TagDeliveryStreamInputTagList,
  ) $s = shape()) {
    $this->delivery_stream_encryption_configuration_input = $s['delivery_stream_encryption_configuration_input'] ?? null;
    $this->delivery_stream_name = $s['delivery_stream_name'] ?? '';
    $this->delivery_stream_type = $s['delivery_stream_type'] ?? '';
    $this->elasticsearch_destination_configuration = $s['elasticsearch_destination_configuration'] ?? null;
    $this->extended_s_3_destination_configuration = $s['extended_s_3_destination_configuration'] ?? null;
    $this->kinesis_stream_source_configuration = $s['kinesis_stream_source_configuration'] ?? null;
    $this->redshift_destination_configuration = $s['redshift_destination_configuration'] ?? null;
    $this->s_3_destination_configuration = $s['s_3_destination_configuration'] ?? null;
    $this->splunk_destination_configuration = $s['splunk_destination_configuration'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateDeliveryStreamOutput {
  public ?DeliveryStreamARN $delivery_stream_arn;

  public function __construct(shape(
    ?'delivery_stream_arn' => ?DeliveryStreamARN,
  ) $s = shape()) {
    $this->delivery_stream_arn = $s['delivery_stream_arn'] ?? '';
  }
}

type Data = string;

class DataFormatConversionConfiguration {
  public ?BooleanObject $enabled;
  public ?InputFormatConfiguration $input_format_configuration;
  public ?OutputFormatConfiguration $output_format_configuration;
  public ?SchemaConfiguration $schema_configuration;

  public function __construct(shape(
    ?'enabled' => ?BooleanObject,
    ?'input_format_configuration' => ?InputFormatConfiguration,
    ?'output_format_configuration' => ?OutputFormatConfiguration,
    ?'schema_configuration' => ?SchemaConfiguration,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->input_format_configuration = $s['input_format_configuration'] ?? null;
    $this->output_format_configuration = $s['output_format_configuration'] ?? null;
    $this->schema_configuration = $s['schema_configuration'] ?? null;
  }
}

type DataTableColumns = string;

type DataTableName = string;

class DeleteDeliveryStreamInput {
  public ?BooleanObject $allow_force_delete;
  public ?DeliveryStreamName $delivery_stream_name;

  public function __construct(shape(
    ?'allow_force_delete' => ?BooleanObject,
    ?'delivery_stream_name' => ?DeliveryStreamName,
  ) $s = shape()) {
    $this->allow_force_delete = $s['allow_force_delete'] ?? false;
    $this->delivery_stream_name = $s['delivery_stream_name'] ?? '';
  }
}

class DeleteDeliveryStreamOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeliveryStartTimestamp = int;

type DeliveryStreamARN = string;

class DeliveryStreamDescription {
  public ?Timestamp $create_timestamp;
  public ?DeliveryStreamARN $delivery_stream_arn;
  public ?DeliveryStreamEncryptionConfiguration $delivery_stream_encryption_configuration;
  public ?DeliveryStreamName $delivery_stream_name;
  public ?DeliveryStreamStatus $delivery_stream_status;
  public ?DeliveryStreamType $delivery_stream_type;
  public ?DestinationDescriptionList $destinations;
  public ?FailureDescription $failure_description;
  public ?BooleanObject $has_more_destinations;
  public ?Timestamp $last_update_timestamp;
  public ?SourceDescription $source;
  public ?DeliveryStreamVersionId $version_id;

  public function __construct(shape(
    ?'create_timestamp' => ?Timestamp,
    ?'delivery_stream_arn' => ?DeliveryStreamARN,
    ?'delivery_stream_encryption_configuration' => ?DeliveryStreamEncryptionConfiguration,
    ?'delivery_stream_name' => ?DeliveryStreamName,
    ?'delivery_stream_status' => ?DeliveryStreamStatus,
    ?'delivery_stream_type' => ?DeliveryStreamType,
    ?'destinations' => ?DestinationDescriptionList,
    ?'failure_description' => ?FailureDescription,
    ?'has_more_destinations' => ?BooleanObject,
    ?'last_update_timestamp' => ?Timestamp,
    ?'source' => ?SourceDescription,
    ?'version_id' => ?DeliveryStreamVersionId,
  ) $s = shape()) {
    $this->create_timestamp = $s['create_timestamp'] ?? 0;
    $this->delivery_stream_arn = $s['delivery_stream_arn'] ?? '';
    $this->delivery_stream_encryption_configuration = $s['delivery_stream_encryption_configuration'] ?? null;
    $this->delivery_stream_name = $s['delivery_stream_name'] ?? '';
    $this->delivery_stream_status = $s['delivery_stream_status'] ?? '';
    $this->delivery_stream_type = $s['delivery_stream_type'] ?? '';
    $this->destinations = $s['destinations'] ?? vec[];
    $this->failure_description = $s['failure_description'] ?? null;
    $this->has_more_destinations = $s['has_more_destinations'] ?? false;
    $this->last_update_timestamp = $s['last_update_timestamp'] ?? 0;
    $this->source = $s['source'] ?? null;
    $this->version_id = $s['version_id'] ?? '';
  }
}

class DeliveryStreamEncryptionConfiguration {
  public ?FailureDescription $failure_description;
  public ?AWSKMSKeyARN $key_arn;
  public ?KeyType $key_type;
  public ?DeliveryStreamEncryptionStatus $status;

  public function __construct(shape(
    ?'failure_description' => ?FailureDescription,
    ?'key_arn' => ?AWSKMSKeyARN,
    ?'key_type' => ?KeyType,
    ?'status' => ?DeliveryStreamEncryptionStatus,
  ) $s = shape()) {
    $this->failure_description = $s['failure_description'] ?? null;
    $this->key_arn = $s['key_arn'] ?? '';
    $this->key_type = $s['key_type'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DeliveryStreamEncryptionConfigurationInput {
  public ?AWSKMSKeyARN $key_arn;
  public ?KeyType $key_type;

  public function __construct(shape(
    ?'key_arn' => ?AWSKMSKeyARN,
    ?'key_type' => ?KeyType,
  ) $s = shape()) {
    $this->key_arn = $s['key_arn'] ?? '';
    $this->key_type = $s['key_type'] ?? '';
  }
}

type DeliveryStreamEncryptionStatus = string;

type DeliveryStreamFailureType = string;

type DeliveryStreamName = string;

type DeliveryStreamNameList = vec<DeliveryStreamName>;

type DeliveryStreamStatus = string;

type DeliveryStreamType = string;

type DeliveryStreamVersionId = string;

class DescribeDeliveryStreamInput {
  public ?DeliveryStreamName $delivery_stream_name;
  public ?DestinationId $exclusive_start_destination_id;
  public ?DescribeDeliveryStreamInputLimit $limit;

  public function __construct(shape(
    ?'delivery_stream_name' => ?DeliveryStreamName,
    ?'exclusive_start_destination_id' => ?DestinationId,
    ?'limit' => ?DescribeDeliveryStreamInputLimit,
  ) $s = shape()) {
    $this->delivery_stream_name = $s['delivery_stream_name'] ?? '';
    $this->exclusive_start_destination_id = $s['exclusive_start_destination_id'] ?? '';
    $this->limit = $s['limit'] ?? 0;
  }
}

type DescribeDeliveryStreamInputLimit = int;

class DescribeDeliveryStreamOutput {
  public ?DeliveryStreamDescription $delivery_stream_description;

  public function __construct(shape(
    ?'delivery_stream_description' => ?DeliveryStreamDescription,
  ) $s = shape()) {
    $this->delivery_stream_description = $s['delivery_stream_description'] ?? null;
  }
}

class Deserializer {
  public ?HiveJsonSerDe $hive_json_ser_de;
  public ?OpenXJsonSerDe $open_x_json_ser_de;

  public function __construct(shape(
    ?'hive_json_ser_de' => ?HiveJsonSerDe,
    ?'open_x_json_ser_de' => ?OpenXJsonSerDe,
  ) $s = shape()) {
    $this->hive_json_ser_de = $s['hive_json_ser_de'] ?? null;
    $this->open_x_json_ser_de = $s['open_x_json_ser_de'] ?? null;
  }
}

class DestinationDescription {
  public ?DestinationId $destination_id;
  public ?ElasticsearchDestinationDescription $elasticsearch_destination_description;
  public ?ExtendedS3DestinationDescription $extended_s_3_destination_description;
  public ?RedshiftDestinationDescription $redshift_destination_description;
  public ?S3DestinationDescription $s_3_destination_description;
  public ?SplunkDestinationDescription $splunk_destination_description;

  public function __construct(shape(
    ?'destination_id' => ?DestinationId,
    ?'elasticsearch_destination_description' => ?ElasticsearchDestinationDescription,
    ?'extended_s_3_destination_description' => ?ExtendedS3DestinationDescription,
    ?'redshift_destination_description' => ?RedshiftDestinationDescription,
    ?'s_3_destination_description' => ?S3DestinationDescription,
    ?'splunk_destination_description' => ?SplunkDestinationDescription,
  ) $s = shape()) {
    $this->destination_id = $s['destination_id'] ?? '';
    $this->elasticsearch_destination_description = $s['elasticsearch_destination_description'] ?? null;
    $this->extended_s_3_destination_description = $s['extended_s_3_destination_description'] ?? null;
    $this->redshift_destination_description = $s['redshift_destination_description'] ?? null;
    $this->s_3_destination_description = $s['s_3_destination_description'] ?? null;
    $this->splunk_destination_description = $s['splunk_destination_description'] ?? null;
  }
}

type DestinationDescriptionList = vec<DestinationDescription>;

type DestinationId = string;

class ElasticsearchBufferingHints {
  public ?ElasticsearchBufferingIntervalInSeconds $interval_in_seconds;
  public ?ElasticsearchBufferingSizeInMBs $size_in_m_bs;

  public function __construct(shape(
    ?'interval_in_seconds' => ?ElasticsearchBufferingIntervalInSeconds,
    ?'size_in_m_bs' => ?ElasticsearchBufferingSizeInMBs,
  ) $s = shape()) {
    $this->interval_in_seconds = $s['interval_in_seconds'] ?? 0;
    $this->size_in_m_bs = $s['size_in_m_bs'] ?? 0;
  }
}

type ElasticsearchBufferingIntervalInSeconds = int;

type ElasticsearchBufferingSizeInMBs = int;

type ElasticsearchClusterEndpoint = string;

class ElasticsearchDestinationConfiguration {
  public ?ElasticsearchBufferingHints $buffering_hints;
  public ?CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ?ElasticsearchClusterEndpoint $cluster_endpoint;
  public ?ElasticsearchDomainARN $domain_arn;
  public ?ElasticsearchIndexName $index_name;
  public ?ElasticsearchIndexRotationPeriod $index_rotation_period;
  public ?ProcessingConfiguration $processing_configuration;
  public ?ElasticsearchRetryOptions $retry_options;
  public ?RoleARN $role_arn;
  public ?ElasticsearchS3BackupMode $s_3_backup_mode;
  public ?S3DestinationConfiguration $s_3_configuration;
  public ?ElasticsearchTypeName $type_name;
  public ?VpcConfiguration $vpc_configuration;

  public function __construct(shape(
    ?'buffering_hints' => ?ElasticsearchBufferingHints,
    ?'cloud_watch_logging_options' => ?CloudWatchLoggingOptions,
    ?'cluster_endpoint' => ?ElasticsearchClusterEndpoint,
    ?'domain_arn' => ?ElasticsearchDomainARN,
    ?'index_name' => ?ElasticsearchIndexName,
    ?'index_rotation_period' => ?ElasticsearchIndexRotationPeriod,
    ?'processing_configuration' => ?ProcessingConfiguration,
    ?'retry_options' => ?ElasticsearchRetryOptions,
    ?'role_arn' => ?RoleARN,
    ?'s_3_backup_mode' => ?ElasticsearchS3BackupMode,
    ?'s_3_configuration' => ?S3DestinationConfiguration,
    ?'type_name' => ?ElasticsearchTypeName,
    ?'vpc_configuration' => ?VpcConfiguration,
  ) $s = shape()) {
    $this->buffering_hints = $s['buffering_hints'] ?? null;
    $this->cloud_watch_logging_options = $s['cloud_watch_logging_options'] ?? null;
    $this->cluster_endpoint = $s['cluster_endpoint'] ?? '';
    $this->domain_arn = $s['domain_arn'] ?? '';
    $this->index_name = $s['index_name'] ?? '';
    $this->index_rotation_period = $s['index_rotation_period'] ?? '';
    $this->processing_configuration = $s['processing_configuration'] ?? null;
    $this->retry_options = $s['retry_options'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->s_3_backup_mode = $s['s_3_backup_mode'] ?? '';
    $this->s_3_configuration = $s['s_3_configuration'] ?? null;
    $this->type_name = $s['type_name'] ?? '';
    $this->vpc_configuration = $s['vpc_configuration'] ?? null;
  }
}

class ElasticsearchDestinationDescription {
  public ?ElasticsearchBufferingHints $buffering_hints;
  public ?CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ?ElasticsearchClusterEndpoint $cluster_endpoint;
  public ?ElasticsearchDomainARN $domain_arn;
  public ?ElasticsearchIndexName $index_name;
  public ?ElasticsearchIndexRotationPeriod $index_rotation_period;
  public ?ProcessingConfiguration $processing_configuration;
  public ?ElasticsearchRetryOptions $retry_options;
  public ?RoleARN $role_arn;
  public ?ElasticsearchS3BackupMode $s_3_backup_mode;
  public ?S3DestinationDescription $s_3_destination_description;
  public ?ElasticsearchTypeName $type_name;
  public ?VpcConfigurationDescription $vpc_configuration_description;

  public function __construct(shape(
    ?'buffering_hints' => ?ElasticsearchBufferingHints,
    ?'cloud_watch_logging_options' => ?CloudWatchLoggingOptions,
    ?'cluster_endpoint' => ?ElasticsearchClusterEndpoint,
    ?'domain_arn' => ?ElasticsearchDomainARN,
    ?'index_name' => ?ElasticsearchIndexName,
    ?'index_rotation_period' => ?ElasticsearchIndexRotationPeriod,
    ?'processing_configuration' => ?ProcessingConfiguration,
    ?'retry_options' => ?ElasticsearchRetryOptions,
    ?'role_arn' => ?RoleARN,
    ?'s_3_backup_mode' => ?ElasticsearchS3BackupMode,
    ?'s_3_destination_description' => ?S3DestinationDescription,
    ?'type_name' => ?ElasticsearchTypeName,
    ?'vpc_configuration_description' => ?VpcConfigurationDescription,
  ) $s = shape()) {
    $this->buffering_hints = $s['buffering_hints'] ?? null;
    $this->cloud_watch_logging_options = $s['cloud_watch_logging_options'] ?? null;
    $this->cluster_endpoint = $s['cluster_endpoint'] ?? '';
    $this->domain_arn = $s['domain_arn'] ?? '';
    $this->index_name = $s['index_name'] ?? '';
    $this->index_rotation_period = $s['index_rotation_period'] ?? '';
    $this->processing_configuration = $s['processing_configuration'] ?? null;
    $this->retry_options = $s['retry_options'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->s_3_backup_mode = $s['s_3_backup_mode'] ?? '';
    $this->s_3_destination_description = $s['s_3_destination_description'] ?? null;
    $this->type_name = $s['type_name'] ?? '';
    $this->vpc_configuration_description = $s['vpc_configuration_description'] ?? null;
  }
}

class ElasticsearchDestinationUpdate {
  public ?ElasticsearchBufferingHints $buffering_hints;
  public ?CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ?ElasticsearchClusterEndpoint $cluster_endpoint;
  public ?ElasticsearchDomainARN $domain_arn;
  public ?ElasticsearchIndexName $index_name;
  public ?ElasticsearchIndexRotationPeriod $index_rotation_period;
  public ?ProcessingConfiguration $processing_configuration;
  public ?ElasticsearchRetryOptions $retry_options;
  public ?RoleARN $role_arn;
  public ?S3DestinationUpdate $s_3_update;
  public ?ElasticsearchTypeName $type_name;

  public function __construct(shape(
    ?'buffering_hints' => ?ElasticsearchBufferingHints,
    ?'cloud_watch_logging_options' => ?CloudWatchLoggingOptions,
    ?'cluster_endpoint' => ?ElasticsearchClusterEndpoint,
    ?'domain_arn' => ?ElasticsearchDomainARN,
    ?'index_name' => ?ElasticsearchIndexName,
    ?'index_rotation_period' => ?ElasticsearchIndexRotationPeriod,
    ?'processing_configuration' => ?ProcessingConfiguration,
    ?'retry_options' => ?ElasticsearchRetryOptions,
    ?'role_arn' => ?RoleARN,
    ?'s_3_update' => ?S3DestinationUpdate,
    ?'type_name' => ?ElasticsearchTypeName,
  ) $s = shape()) {
    $this->buffering_hints = $s['buffering_hints'] ?? null;
    $this->cloud_watch_logging_options = $s['cloud_watch_logging_options'] ?? null;
    $this->cluster_endpoint = $s['cluster_endpoint'] ?? '';
    $this->domain_arn = $s['domain_arn'] ?? '';
    $this->index_name = $s['index_name'] ?? '';
    $this->index_rotation_period = $s['index_rotation_period'] ?? '';
    $this->processing_configuration = $s['processing_configuration'] ?? null;
    $this->retry_options = $s['retry_options'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->s_3_update = $s['s_3_update'] ?? null;
    $this->type_name = $s['type_name'] ?? '';
  }
}

type ElasticsearchDomainARN = string;

type ElasticsearchIndexName = string;

type ElasticsearchIndexRotationPeriod = string;

type ElasticsearchRetryDurationInSeconds = int;

class ElasticsearchRetryOptions {
  public ?ElasticsearchRetryDurationInSeconds $duration_in_seconds;

  public function __construct(shape(
    ?'duration_in_seconds' => ?ElasticsearchRetryDurationInSeconds,
  ) $s = shape()) {
    $this->duration_in_seconds = $s['duration_in_seconds'] ?? 0;
  }
}

type ElasticsearchS3BackupMode = string;

type ElasticsearchTypeName = string;

class EncryptionConfiguration {
  public ?KMSEncryptionConfig $kms_encryption_config;
  public ?NoEncryptionConfig $no_encryption_config;

  public function __construct(shape(
    ?'kms_encryption_config' => ?KMSEncryptionConfig,
    ?'no_encryption_config' => ?NoEncryptionConfig,
  ) $s = shape()) {
    $this->kms_encryption_config = $s['kms_encryption_config'] ?? null;
    $this->no_encryption_config = $s['no_encryption_config'] ?? '';
  }
}

type ErrorCode = string;

type ErrorMessage = string;

type ErrorOutputPrefix = string;

class ExtendedS3DestinationConfiguration {
  public ?BucketARN $bucket_arn;
  public ?BufferingHints $buffering_hints;
  public ?CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ?CompressionFormat $compression_format;
  public ?DataFormatConversionConfiguration $data_format_conversion_configuration;
  public ?EncryptionConfiguration $encryption_configuration;
  public ?ErrorOutputPrefix $error_output_prefix;
  public ?Prefix $prefix;
  public ?ProcessingConfiguration $processing_configuration;
  public ?RoleARN $role_arn;
  public ?S3DestinationConfiguration $s_3_backup_configuration;
  public ?S3BackupMode $s_3_backup_mode;

  public function __construct(shape(
    ?'bucket_arn' => ?BucketARN,
    ?'buffering_hints' => ?BufferingHints,
    ?'cloud_watch_logging_options' => ?CloudWatchLoggingOptions,
    ?'compression_format' => ?CompressionFormat,
    ?'data_format_conversion_configuration' => ?DataFormatConversionConfiguration,
    ?'encryption_configuration' => ?EncryptionConfiguration,
    ?'error_output_prefix' => ?ErrorOutputPrefix,
    ?'prefix' => ?Prefix,
    ?'processing_configuration' => ?ProcessingConfiguration,
    ?'role_arn' => ?RoleARN,
    ?'s_3_backup_configuration' => ?S3DestinationConfiguration,
    ?'s_3_backup_mode' => ?S3BackupMode,
  ) $s = shape()) {
    $this->bucket_arn = $s['bucket_arn'] ?? '';
    $this->buffering_hints = $s['buffering_hints'] ?? null;
    $this->cloud_watch_logging_options = $s['cloud_watch_logging_options'] ?? null;
    $this->compression_format = $s['compression_format'] ?? '';
    $this->data_format_conversion_configuration = $s['data_format_conversion_configuration'] ?? null;
    $this->encryption_configuration = $s['encryption_configuration'] ?? null;
    $this->error_output_prefix = $s['error_output_prefix'] ?? '';
    $this->prefix = $s['prefix'] ?? '';
    $this->processing_configuration = $s['processing_configuration'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->s_3_backup_configuration = $s['s_3_backup_configuration'] ?? null;
    $this->s_3_backup_mode = $s['s_3_backup_mode'] ?? '';
  }
}

class ExtendedS3DestinationDescription {
  public ?BucketARN $bucket_arn;
  public ?BufferingHints $buffering_hints;
  public ?CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ?CompressionFormat $compression_format;
  public ?DataFormatConversionConfiguration $data_format_conversion_configuration;
  public ?EncryptionConfiguration $encryption_configuration;
  public ?ErrorOutputPrefix $error_output_prefix;
  public ?Prefix $prefix;
  public ?ProcessingConfiguration $processing_configuration;
  public ?RoleARN $role_arn;
  public ?S3DestinationDescription $s_3_backup_description;
  public ?S3BackupMode $s_3_backup_mode;

  public function __construct(shape(
    ?'bucket_arn' => ?BucketARN,
    ?'buffering_hints' => ?BufferingHints,
    ?'cloud_watch_logging_options' => ?CloudWatchLoggingOptions,
    ?'compression_format' => ?CompressionFormat,
    ?'data_format_conversion_configuration' => ?DataFormatConversionConfiguration,
    ?'encryption_configuration' => ?EncryptionConfiguration,
    ?'error_output_prefix' => ?ErrorOutputPrefix,
    ?'prefix' => ?Prefix,
    ?'processing_configuration' => ?ProcessingConfiguration,
    ?'role_arn' => ?RoleARN,
    ?'s_3_backup_description' => ?S3DestinationDescription,
    ?'s_3_backup_mode' => ?S3BackupMode,
  ) $s = shape()) {
    $this->bucket_arn = $s['bucket_arn'] ?? '';
    $this->buffering_hints = $s['buffering_hints'] ?? null;
    $this->cloud_watch_logging_options = $s['cloud_watch_logging_options'] ?? null;
    $this->compression_format = $s['compression_format'] ?? '';
    $this->data_format_conversion_configuration = $s['data_format_conversion_configuration'] ?? null;
    $this->encryption_configuration = $s['encryption_configuration'] ?? null;
    $this->error_output_prefix = $s['error_output_prefix'] ?? '';
    $this->prefix = $s['prefix'] ?? '';
    $this->processing_configuration = $s['processing_configuration'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->s_3_backup_description = $s['s_3_backup_description'] ?? null;
    $this->s_3_backup_mode = $s['s_3_backup_mode'] ?? '';
  }
}

class ExtendedS3DestinationUpdate {
  public ?BucketARN $bucket_arn;
  public ?BufferingHints $buffering_hints;
  public ?CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ?CompressionFormat $compression_format;
  public ?DataFormatConversionConfiguration $data_format_conversion_configuration;
  public ?EncryptionConfiguration $encryption_configuration;
  public ?ErrorOutputPrefix $error_output_prefix;
  public ?Prefix $prefix;
  public ?ProcessingConfiguration $processing_configuration;
  public ?RoleARN $role_arn;
  public ?S3BackupMode $s_3_backup_mode;
  public ?S3DestinationUpdate $s_3_backup_update;

  public function __construct(shape(
    ?'bucket_arn' => ?BucketARN,
    ?'buffering_hints' => ?BufferingHints,
    ?'cloud_watch_logging_options' => ?CloudWatchLoggingOptions,
    ?'compression_format' => ?CompressionFormat,
    ?'data_format_conversion_configuration' => ?DataFormatConversionConfiguration,
    ?'encryption_configuration' => ?EncryptionConfiguration,
    ?'error_output_prefix' => ?ErrorOutputPrefix,
    ?'prefix' => ?Prefix,
    ?'processing_configuration' => ?ProcessingConfiguration,
    ?'role_arn' => ?RoleARN,
    ?'s_3_backup_mode' => ?S3BackupMode,
    ?'s_3_backup_update' => ?S3DestinationUpdate,
  ) $s = shape()) {
    $this->bucket_arn = $s['bucket_arn'] ?? '';
    $this->buffering_hints = $s['buffering_hints'] ?? null;
    $this->cloud_watch_logging_options = $s['cloud_watch_logging_options'] ?? null;
    $this->compression_format = $s['compression_format'] ?? '';
    $this->data_format_conversion_configuration = $s['data_format_conversion_configuration'] ?? null;
    $this->encryption_configuration = $s['encryption_configuration'] ?? null;
    $this->error_output_prefix = $s['error_output_prefix'] ?? '';
    $this->prefix = $s['prefix'] ?? '';
    $this->processing_configuration = $s['processing_configuration'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->s_3_backup_mode = $s['s_3_backup_mode'] ?? '';
    $this->s_3_backup_update = $s['s_3_backup_update'] ?? null;
  }
}

class FailureDescription {
  public ?NonEmptyString $details;
  public ?DeliveryStreamFailureType $type;

  public function __construct(shape(
    ?'details' => ?NonEmptyString,
    ?'type' => ?DeliveryStreamFailureType,
  ) $s = shape()) {
    $this->details = $s['details'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type HECAcknowledgmentTimeoutInSeconds = int;

type HECEndpoint = string;

type HECEndpointType = string;

type HECToken = string;

class HiveJsonSerDe {
  public ?ListOfNonEmptyStrings $timestamp_formats;

  public function __construct(shape(
    ?'timestamp_formats' => ?ListOfNonEmptyStrings,
  ) $s = shape()) {
    $this->timestamp_formats = $s['timestamp_formats'] ?? vec[];
  }
}

class InputFormatConfiguration {
  public ?Deserializer $deserializer;

  public function __construct(shape(
    ?'deserializer' => ?Deserializer,
  ) $s = shape()) {
    $this->deserializer = $s['deserializer'] ?? null;
  }
}

type IntervalInSeconds = int;

class InvalidArgumentException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidKMSResourceException {
  public ?ErrorCode $code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class KMSEncryptionConfig {
  public ?AWSKMSKeyARN $awskms_key_arn;

  public function __construct(shape(
    ?'awskms_key_arn' => ?AWSKMSKeyARN,
  ) $s = shape()) {
    $this->awskms_key_arn = $s['awskms_key_arn'] ?? '';
  }
}

type KeyType = string;

type KinesisStreamARN = string;

class KinesisStreamSourceConfiguration {
  public ?KinesisStreamARN $kinesis_stream_arn;
  public ?RoleARN $role_arn;

  public function __construct(shape(
    ?'kinesis_stream_arn' => ?KinesisStreamARN,
    ?'role_arn' => ?RoleARN,
  ) $s = shape()) {
    $this->kinesis_stream_arn = $s['kinesis_stream_arn'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class KinesisStreamSourceDescription {
  public ?DeliveryStartTimestamp $delivery_start_timestamp;
  public ?KinesisStreamARN $kinesis_stream_arn;
  public ?RoleARN $role_arn;

  public function __construct(shape(
    ?'delivery_start_timestamp' => ?DeliveryStartTimestamp,
    ?'kinesis_stream_arn' => ?KinesisStreamARN,
    ?'role_arn' => ?RoleARN,
  ) $s = shape()) {
    $this->delivery_start_timestamp = $s['delivery_start_timestamp'] ?? 0;
    $this->kinesis_stream_arn = $s['kinesis_stream_arn'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
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

class ListDeliveryStreamsInput {
  public ?DeliveryStreamType $delivery_stream_type;
  public ?DeliveryStreamName $exclusive_start_delivery_stream_name;
  public ?ListDeliveryStreamsInputLimit $limit;

  public function __construct(shape(
    ?'delivery_stream_type' => ?DeliveryStreamType,
    ?'exclusive_start_delivery_stream_name' => ?DeliveryStreamName,
    ?'limit' => ?ListDeliveryStreamsInputLimit,
  ) $s = shape()) {
    $this->delivery_stream_type = $s['delivery_stream_type'] ?? '';
    $this->exclusive_start_delivery_stream_name = $s['exclusive_start_delivery_stream_name'] ?? '';
    $this->limit = $s['limit'] ?? 0;
  }
}

type ListDeliveryStreamsInputLimit = int;

class ListDeliveryStreamsOutput {
  public ?DeliveryStreamNameList $delivery_stream_names;
  public ?BooleanObject $has_more_delivery_streams;

  public function __construct(shape(
    ?'delivery_stream_names' => ?DeliveryStreamNameList,
    ?'has_more_delivery_streams' => ?BooleanObject,
  ) $s = shape()) {
    $this->delivery_stream_names = $s['delivery_stream_names'] ?? vec[];
    $this->has_more_delivery_streams = $s['has_more_delivery_streams'] ?? false;
  }
}

type ListOfNonEmptyStrings = vec<NonEmptyString>;

type ListOfNonEmptyStringsWithoutWhitespace = vec<NonEmptyStringWithoutWhitespace>;

class ListTagsForDeliveryStreamInput {
  public ?DeliveryStreamName $delivery_stream_name;
  public ?TagKey $exclusive_start_tag_key;
  public ?ListTagsForDeliveryStreamInputLimit $limit;

  public function __construct(shape(
    ?'delivery_stream_name' => ?DeliveryStreamName,
    ?'exclusive_start_tag_key' => ?TagKey,
    ?'limit' => ?ListTagsForDeliveryStreamInputLimit,
  ) $s = shape()) {
    $this->delivery_stream_name = $s['delivery_stream_name'] ?? '';
    $this->exclusive_start_tag_key = $s['exclusive_start_tag_key'] ?? '';
    $this->limit = $s['limit'] ?? 0;
  }
}

type ListTagsForDeliveryStreamInputLimit = int;

class ListTagsForDeliveryStreamOutput {
  public ?BooleanObject $has_more_tags;
  public ?ListTagsForDeliveryStreamOutputTagList $tags;

  public function __construct(shape(
    ?'has_more_tags' => ?BooleanObject,
    ?'tags' => ?ListTagsForDeliveryStreamOutputTagList,
  ) $s = shape()) {
    $this->has_more_tags = $s['has_more_tags'] ?? false;
    $this->tags = $s['tags'] ?? vec[];
  }
}

type ListTagsForDeliveryStreamOutputTagList = vec<Tag>;

type LogGroupName = string;

type LogStreamName = string;

type NoEncryptionConfig = string;

type NonEmptyString = string;

type NonEmptyStringWithoutWhitespace = string;

type NonNegativeIntegerObject = int;

class OpenXJsonSerDe {
  public ?BooleanObject $case_insensitive;
  public ?ColumnToJsonKeyMappings $column_to_json_key_mappings;
  public ?BooleanObject $convert_dots_in_json_keys_to_underscores;

  public function __construct(shape(
    ?'case_insensitive' => ?BooleanObject,
    ?'column_to_json_key_mappings' => ?ColumnToJsonKeyMappings,
    ?'convert_dots_in_json_keys_to_underscores' => ?BooleanObject,
  ) $s = shape()) {
    $this->case_insensitive = $s['case_insensitive'] ?? false;
    $this->column_to_json_key_mappings = $s['column_to_json_key_mappings'] ?? dict[];
    $this->convert_dots_in_json_keys_to_underscores = $s['convert_dots_in_json_keys_to_underscores'] ?? false;
  }
}

type OrcCompression = string;

type OrcFormatVersion = string;

type OrcRowIndexStride = int;

class OrcSerDe {
  public ?BlockSizeBytes $block_size_bytes;
  public ?ListOfNonEmptyStringsWithoutWhitespace $bloom_filter_columns;
  public ?Proportion $bloom_filter_false_positive_probability;
  public ?OrcCompression $compression;
  public ?Proportion $dictionary_key_threshold;
  public ?BooleanObject $enable_padding;
  public ?OrcFormatVersion $format_version;
  public ?Proportion $padding_tolerance;
  public ?OrcRowIndexStride $row_index_stride;
  public ?OrcStripeSizeBytes $stripe_size_bytes;

  public function __construct(shape(
    ?'block_size_bytes' => ?BlockSizeBytes,
    ?'bloom_filter_columns' => ?ListOfNonEmptyStringsWithoutWhitespace,
    ?'bloom_filter_false_positive_probability' => ?Proportion,
    ?'compression' => ?OrcCompression,
    ?'dictionary_key_threshold' => ?Proportion,
    ?'enable_padding' => ?BooleanObject,
    ?'format_version' => ?OrcFormatVersion,
    ?'padding_tolerance' => ?Proportion,
    ?'row_index_stride' => ?OrcRowIndexStride,
    ?'stripe_size_bytes' => ?OrcStripeSizeBytes,
  ) $s = shape()) {
    $this->block_size_bytes = $s['block_size_bytes'] ?? 0;
    $this->bloom_filter_columns = $s['bloom_filter_columns'] ?? vec[];
    $this->bloom_filter_false_positive_probability = $s['bloom_filter_false_positive_probability'] ?? 0.0;
    $this->compression = $s['compression'] ?? '';
    $this->dictionary_key_threshold = $s['dictionary_key_threshold'] ?? 0.0;
    $this->enable_padding = $s['enable_padding'] ?? false;
    $this->format_version = $s['format_version'] ?? '';
    $this->padding_tolerance = $s['padding_tolerance'] ?? 0.0;
    $this->row_index_stride = $s['row_index_stride'] ?? 0;
    $this->stripe_size_bytes = $s['stripe_size_bytes'] ?? 0;
  }
}

type OrcStripeSizeBytes = int;

class OutputFormatConfiguration {
  public ?Serializer $serializer;

  public function __construct(shape(
    ?'serializer' => ?Serializer,
  ) $s = shape()) {
    $this->serializer = $s['serializer'] ?? null;
  }
}

type ParquetCompression = string;

type ParquetPageSizeBytes = int;

class ParquetSerDe {
  public ?BlockSizeBytes $block_size_bytes;
  public ?ParquetCompression $compression;
  public ?BooleanObject $enable_dictionary_compression;
  public ?NonNegativeIntegerObject $max_padding_bytes;
  public ?ParquetPageSizeBytes $page_size_bytes;
  public ?ParquetWriterVersion $writer_version;

  public function __construct(shape(
    ?'block_size_bytes' => ?BlockSizeBytes,
    ?'compression' => ?ParquetCompression,
    ?'enable_dictionary_compression' => ?BooleanObject,
    ?'max_padding_bytes' => ?NonNegativeIntegerObject,
    ?'page_size_bytes' => ?ParquetPageSizeBytes,
    ?'writer_version' => ?ParquetWriterVersion,
  ) $s = shape()) {
    $this->block_size_bytes = $s['block_size_bytes'] ?? 0;
    $this->compression = $s['compression'] ?? '';
    $this->enable_dictionary_compression = $s['enable_dictionary_compression'] ?? false;
    $this->max_padding_bytes = $s['max_padding_bytes'] ?? 0;
    $this->page_size_bytes = $s['page_size_bytes'] ?? 0;
    $this->writer_version = $s['writer_version'] ?? '';
  }
}

type ParquetWriterVersion = string;

type Password = string;

type Prefix = string;

class ProcessingConfiguration {
  public ?BooleanObject $enabled;
  public ?ProcessorList $processors;

  public function __construct(shape(
    ?'enabled' => ?BooleanObject,
    ?'processors' => ?ProcessorList,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->processors = $s['processors'] ?? vec[];
  }
}

class Processor {
  public ?ProcessorParameterList $parameters;
  public ?ProcessorType $type;

  public function __construct(shape(
    ?'parameters' => ?ProcessorParameterList,
    ?'type' => ?ProcessorType,
  ) $s = shape()) {
    $this->parameters = $s['parameters'] ?? vec[];
    $this->type = $s['type'] ?? '';
  }
}

type ProcessorList = vec<Processor>;

class ProcessorParameter {
  public ?ProcessorParameterName $parameter_name;
  public ?ProcessorParameterValue $parameter_value;

  public function __construct(shape(
    ?'parameter_name' => ?ProcessorParameterName,
    ?'parameter_value' => ?ProcessorParameterValue,
  ) $s = shape()) {
    $this->parameter_name = $s['parameter_name'] ?? '';
    $this->parameter_value = $s['parameter_value'] ?? '';
  }
}

type ProcessorParameterList = vec<ProcessorParameter>;

type ProcessorParameterName = string;

type ProcessorParameterValue = string;

type ProcessorType = string;

type Proportion = float;

class PutRecordBatchInput {
  public ?DeliveryStreamName $delivery_stream_name;
  public ?PutRecordBatchRequestEntryList $records;

  public function __construct(shape(
    ?'delivery_stream_name' => ?DeliveryStreamName,
    ?'records' => ?PutRecordBatchRequestEntryList,
  ) $s = shape()) {
    $this->delivery_stream_name = $s['delivery_stream_name'] ?? '';
    $this->records = $s['records'] ?? vec[];
  }
}

class PutRecordBatchOutput {
  public ?BooleanObject $encrypted;
  public ?NonNegativeIntegerObject $failed_put_count;
  public ?PutRecordBatchResponseEntryList $request_responses;

  public function __construct(shape(
    ?'encrypted' => ?BooleanObject,
    ?'failed_put_count' => ?NonNegativeIntegerObject,
    ?'request_responses' => ?PutRecordBatchResponseEntryList,
  ) $s = shape()) {
    $this->encrypted = $s['encrypted'] ?? false;
    $this->failed_put_count = $s['failed_put_count'] ?? 0;
    $this->request_responses = $s['request_responses'] ?? vec[];
  }
}

type PutRecordBatchRequestEntryList = vec<Record>;

class PutRecordBatchResponseEntry {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $error_message;
  public ?PutResponseRecordId $record_id;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ErrorMessage,
    ?'record_id' => ?PutResponseRecordId,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->record_id = $s['record_id'] ?? '';
  }
}

type PutRecordBatchResponseEntryList = vec<PutRecordBatchResponseEntry>;

class PutRecordInput {
  public ?DeliveryStreamName $delivery_stream_name;
  public ?Record $record;

  public function __construct(shape(
    ?'delivery_stream_name' => ?DeliveryStreamName,
    ?'record' => ?Record,
  ) $s = shape()) {
    $this->delivery_stream_name = $s['delivery_stream_name'] ?? '';
    $this->record = $s['record'] ?? null;
  }
}

class PutRecordOutput {
  public ?BooleanObject $encrypted;
  public ?PutResponseRecordId $record_id;

  public function __construct(shape(
    ?'encrypted' => ?BooleanObject,
    ?'record_id' => ?PutResponseRecordId,
  ) $s = shape()) {
    $this->encrypted = $s['encrypted'] ?? false;
    $this->record_id = $s['record_id'] ?? '';
  }
}

type PutResponseRecordId = string;

class Record {
  public ?Data $data;

  public function __construct(shape(
    ?'data' => ?Data,
  ) $s = shape()) {
    $this->data = $s['data'] ?? '';
  }
}

class RedshiftDestinationConfiguration {
  public ?CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ?ClusterJDBCURL $cluster_jdbcurl;
  public ?CopyCommand $copy_command;
  public ?Password $password;
  public ?ProcessingConfiguration $processing_configuration;
  public ?RedshiftRetryOptions $retry_options;
  public ?RoleARN $role_arn;
  public ?S3DestinationConfiguration $s_3_backup_configuration;
  public ?RedshiftS3BackupMode $s_3_backup_mode;
  public ?S3DestinationConfiguration $s_3_configuration;
  public ?Username $username;

  public function __construct(shape(
    ?'cloud_watch_logging_options' => ?CloudWatchLoggingOptions,
    ?'cluster_jdbcurl' => ?ClusterJDBCURL,
    ?'copy_command' => ?CopyCommand,
    ?'password' => ?Password,
    ?'processing_configuration' => ?ProcessingConfiguration,
    ?'retry_options' => ?RedshiftRetryOptions,
    ?'role_arn' => ?RoleARN,
    ?'s_3_backup_configuration' => ?S3DestinationConfiguration,
    ?'s_3_backup_mode' => ?RedshiftS3BackupMode,
    ?'s_3_configuration' => ?S3DestinationConfiguration,
    ?'username' => ?Username,
  ) $s = shape()) {
    $this->cloud_watch_logging_options = $s['cloud_watch_logging_options'] ?? null;
    $this->cluster_jdbcurl = $s['cluster_jdbcurl'] ?? '';
    $this->copy_command = $s['copy_command'] ?? null;
    $this->password = $s['password'] ?? '';
    $this->processing_configuration = $s['processing_configuration'] ?? null;
    $this->retry_options = $s['retry_options'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->s_3_backup_configuration = $s['s_3_backup_configuration'] ?? null;
    $this->s_3_backup_mode = $s['s_3_backup_mode'] ?? '';
    $this->s_3_configuration = $s['s_3_configuration'] ?? null;
    $this->username = $s['username'] ?? '';
  }
}

class RedshiftDestinationDescription {
  public ?CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ?ClusterJDBCURL $cluster_jdbcurl;
  public ?CopyCommand $copy_command;
  public ?ProcessingConfiguration $processing_configuration;
  public ?RedshiftRetryOptions $retry_options;
  public ?RoleARN $role_arn;
  public ?S3DestinationDescription $s_3_backup_description;
  public ?RedshiftS3BackupMode $s_3_backup_mode;
  public ?S3DestinationDescription $s_3_destination_description;
  public ?Username $username;

  public function __construct(shape(
    ?'cloud_watch_logging_options' => ?CloudWatchLoggingOptions,
    ?'cluster_jdbcurl' => ?ClusterJDBCURL,
    ?'copy_command' => ?CopyCommand,
    ?'processing_configuration' => ?ProcessingConfiguration,
    ?'retry_options' => ?RedshiftRetryOptions,
    ?'role_arn' => ?RoleARN,
    ?'s_3_backup_description' => ?S3DestinationDescription,
    ?'s_3_backup_mode' => ?RedshiftS3BackupMode,
    ?'s_3_destination_description' => ?S3DestinationDescription,
    ?'username' => ?Username,
  ) $s = shape()) {
    $this->cloud_watch_logging_options = $s['cloud_watch_logging_options'] ?? null;
    $this->cluster_jdbcurl = $s['cluster_jdbcurl'] ?? '';
    $this->copy_command = $s['copy_command'] ?? null;
    $this->processing_configuration = $s['processing_configuration'] ?? null;
    $this->retry_options = $s['retry_options'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->s_3_backup_description = $s['s_3_backup_description'] ?? null;
    $this->s_3_backup_mode = $s['s_3_backup_mode'] ?? '';
    $this->s_3_destination_description = $s['s_3_destination_description'] ?? null;
    $this->username = $s['username'] ?? '';
  }
}

class RedshiftDestinationUpdate {
  public ?CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ?ClusterJDBCURL $cluster_jdbcurl;
  public ?CopyCommand $copy_command;
  public ?Password $password;
  public ?ProcessingConfiguration $processing_configuration;
  public ?RedshiftRetryOptions $retry_options;
  public ?RoleARN $role_arn;
  public ?RedshiftS3BackupMode $s_3_backup_mode;
  public ?S3DestinationUpdate $s_3_backup_update;
  public ?S3DestinationUpdate $s_3_update;
  public ?Username $username;

  public function __construct(shape(
    ?'cloud_watch_logging_options' => ?CloudWatchLoggingOptions,
    ?'cluster_jdbcurl' => ?ClusterJDBCURL,
    ?'copy_command' => ?CopyCommand,
    ?'password' => ?Password,
    ?'processing_configuration' => ?ProcessingConfiguration,
    ?'retry_options' => ?RedshiftRetryOptions,
    ?'role_arn' => ?RoleARN,
    ?'s_3_backup_mode' => ?RedshiftS3BackupMode,
    ?'s_3_backup_update' => ?S3DestinationUpdate,
    ?'s_3_update' => ?S3DestinationUpdate,
    ?'username' => ?Username,
  ) $s = shape()) {
    $this->cloud_watch_logging_options = $s['cloud_watch_logging_options'] ?? null;
    $this->cluster_jdbcurl = $s['cluster_jdbcurl'] ?? '';
    $this->copy_command = $s['copy_command'] ?? null;
    $this->password = $s['password'] ?? '';
    $this->processing_configuration = $s['processing_configuration'] ?? null;
    $this->retry_options = $s['retry_options'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->s_3_backup_mode = $s['s_3_backup_mode'] ?? '';
    $this->s_3_backup_update = $s['s_3_backup_update'] ?? null;
    $this->s_3_update = $s['s_3_update'] ?? null;
    $this->username = $s['username'] ?? '';
  }
}

type RedshiftRetryDurationInSeconds = int;

class RedshiftRetryOptions {
  public ?RedshiftRetryDurationInSeconds $duration_in_seconds;

  public function __construct(shape(
    ?'duration_in_seconds' => ?RedshiftRetryDurationInSeconds,
  ) $s = shape()) {
    $this->duration_in_seconds = $s['duration_in_seconds'] ?? 0;
  }
}

type RedshiftS3BackupMode = string;

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

type RoleARN = string;

type S3BackupMode = string;

class S3DestinationConfiguration {
  public ?BucketARN $bucket_arn;
  public ?BufferingHints $buffering_hints;
  public ?CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ?CompressionFormat $compression_format;
  public ?EncryptionConfiguration $encryption_configuration;
  public ?ErrorOutputPrefix $error_output_prefix;
  public ?Prefix $prefix;
  public ?RoleARN $role_arn;

  public function __construct(shape(
    ?'bucket_arn' => ?BucketARN,
    ?'buffering_hints' => ?BufferingHints,
    ?'cloud_watch_logging_options' => ?CloudWatchLoggingOptions,
    ?'compression_format' => ?CompressionFormat,
    ?'encryption_configuration' => ?EncryptionConfiguration,
    ?'error_output_prefix' => ?ErrorOutputPrefix,
    ?'prefix' => ?Prefix,
    ?'role_arn' => ?RoleARN,
  ) $s = shape()) {
    $this->bucket_arn = $s['bucket_arn'] ?? '';
    $this->buffering_hints = $s['buffering_hints'] ?? null;
    $this->cloud_watch_logging_options = $s['cloud_watch_logging_options'] ?? null;
    $this->compression_format = $s['compression_format'] ?? '';
    $this->encryption_configuration = $s['encryption_configuration'] ?? null;
    $this->error_output_prefix = $s['error_output_prefix'] ?? '';
    $this->prefix = $s['prefix'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class S3DestinationDescription {
  public ?BucketARN $bucket_arn;
  public ?BufferingHints $buffering_hints;
  public ?CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ?CompressionFormat $compression_format;
  public ?EncryptionConfiguration $encryption_configuration;
  public ?ErrorOutputPrefix $error_output_prefix;
  public ?Prefix $prefix;
  public ?RoleARN $role_arn;

  public function __construct(shape(
    ?'bucket_arn' => ?BucketARN,
    ?'buffering_hints' => ?BufferingHints,
    ?'cloud_watch_logging_options' => ?CloudWatchLoggingOptions,
    ?'compression_format' => ?CompressionFormat,
    ?'encryption_configuration' => ?EncryptionConfiguration,
    ?'error_output_prefix' => ?ErrorOutputPrefix,
    ?'prefix' => ?Prefix,
    ?'role_arn' => ?RoleARN,
  ) $s = shape()) {
    $this->bucket_arn = $s['bucket_arn'] ?? '';
    $this->buffering_hints = $s['buffering_hints'] ?? null;
    $this->cloud_watch_logging_options = $s['cloud_watch_logging_options'] ?? null;
    $this->compression_format = $s['compression_format'] ?? '';
    $this->encryption_configuration = $s['encryption_configuration'] ?? null;
    $this->error_output_prefix = $s['error_output_prefix'] ?? '';
    $this->prefix = $s['prefix'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class S3DestinationUpdate {
  public ?BucketARN $bucket_arn;
  public ?BufferingHints $buffering_hints;
  public ?CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ?CompressionFormat $compression_format;
  public ?EncryptionConfiguration $encryption_configuration;
  public ?ErrorOutputPrefix $error_output_prefix;
  public ?Prefix $prefix;
  public ?RoleARN $role_arn;

  public function __construct(shape(
    ?'bucket_arn' => ?BucketARN,
    ?'buffering_hints' => ?BufferingHints,
    ?'cloud_watch_logging_options' => ?CloudWatchLoggingOptions,
    ?'compression_format' => ?CompressionFormat,
    ?'encryption_configuration' => ?EncryptionConfiguration,
    ?'error_output_prefix' => ?ErrorOutputPrefix,
    ?'prefix' => ?Prefix,
    ?'role_arn' => ?RoleARN,
  ) $s = shape()) {
    $this->bucket_arn = $s['bucket_arn'] ?? '';
    $this->buffering_hints = $s['buffering_hints'] ?? null;
    $this->cloud_watch_logging_options = $s['cloud_watch_logging_options'] ?? null;
    $this->compression_format = $s['compression_format'] ?? '';
    $this->encryption_configuration = $s['encryption_configuration'] ?? null;
    $this->error_output_prefix = $s['error_output_prefix'] ?? '';
    $this->prefix = $s['prefix'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class SchemaConfiguration {
  public ?NonEmptyStringWithoutWhitespace $catalog_id;
  public ?NonEmptyStringWithoutWhitespace $database_name;
  public ?NonEmptyStringWithoutWhitespace $region;
  public ?NonEmptyStringWithoutWhitespace $role_arn;
  public ?NonEmptyStringWithoutWhitespace $table_name;
  public ?NonEmptyStringWithoutWhitespace $version_id;

  public function __construct(shape(
    ?'catalog_id' => ?NonEmptyStringWithoutWhitespace,
    ?'database_name' => ?NonEmptyStringWithoutWhitespace,
    ?'region' => ?NonEmptyStringWithoutWhitespace,
    ?'role_arn' => ?NonEmptyStringWithoutWhitespace,
    ?'table_name' => ?NonEmptyStringWithoutWhitespace,
    ?'version_id' => ?NonEmptyStringWithoutWhitespace,
  ) $s = shape()) {
    $this->catalog_id = $s['catalog_id'] ?? '';
    $this->database_name = $s['database_name'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
    $this->version_id = $s['version_id'] ?? '';
  }
}

type SecurityGroupIdList = vec<NonEmptyStringWithoutWhitespace>;

class Serializer {
  public ?OrcSerDe $orc_ser_de;
  public ?ParquetSerDe $parquet_ser_de;

  public function __construct(shape(
    ?'orc_ser_de' => ?OrcSerDe,
    ?'parquet_ser_de' => ?ParquetSerDe,
  ) $s = shape()) {
    $this->orc_ser_de = $s['orc_ser_de'] ?? null;
    $this->parquet_ser_de = $s['parquet_ser_de'] ?? null;
  }
}

class ServiceUnavailableException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type SizeInMBs = int;

class SourceDescription {
  public ?KinesisStreamSourceDescription $kinesis_stream_source_description;

  public function __construct(shape(
    ?'kinesis_stream_source_description' => ?KinesisStreamSourceDescription,
  ) $s = shape()) {
    $this->kinesis_stream_source_description = $s['kinesis_stream_source_description'] ?? null;
  }
}

class SplunkDestinationConfiguration {
  public ?CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ?HECAcknowledgmentTimeoutInSeconds $hec_acknowledgment_timeout_in_seconds;
  public ?HECEndpoint $hec_endpoint;
  public ?HECEndpointType $hec_endpoint_type;
  public ?HECToken $hec_token;
  public ?ProcessingConfiguration $processing_configuration;
  public ?SplunkRetryOptions $retry_options;
  public ?SplunkS3BackupMode $s_3_backup_mode;
  public ?S3DestinationConfiguration $s_3_configuration;

  public function __construct(shape(
    ?'cloud_watch_logging_options' => ?CloudWatchLoggingOptions,
    ?'hec_acknowledgment_timeout_in_seconds' => ?HECAcknowledgmentTimeoutInSeconds,
    ?'hec_endpoint' => ?HECEndpoint,
    ?'hec_endpoint_type' => ?HECEndpointType,
    ?'hec_token' => ?HECToken,
    ?'processing_configuration' => ?ProcessingConfiguration,
    ?'retry_options' => ?SplunkRetryOptions,
    ?'s_3_backup_mode' => ?SplunkS3BackupMode,
    ?'s_3_configuration' => ?S3DestinationConfiguration,
  ) $s = shape()) {
    $this->cloud_watch_logging_options = $s['cloud_watch_logging_options'] ?? null;
    $this->hec_acknowledgment_timeout_in_seconds = $s['hec_acknowledgment_timeout_in_seconds'] ?? 0;
    $this->hec_endpoint = $s['hec_endpoint'] ?? '';
    $this->hec_endpoint_type = $s['hec_endpoint_type'] ?? '';
    $this->hec_token = $s['hec_token'] ?? '';
    $this->processing_configuration = $s['processing_configuration'] ?? null;
    $this->retry_options = $s['retry_options'] ?? null;
    $this->s_3_backup_mode = $s['s_3_backup_mode'] ?? '';
    $this->s_3_configuration = $s['s_3_configuration'] ?? null;
  }
}

class SplunkDestinationDescription {
  public ?CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ?HECAcknowledgmentTimeoutInSeconds $hec_acknowledgment_timeout_in_seconds;
  public ?HECEndpoint $hec_endpoint;
  public ?HECEndpointType $hec_endpoint_type;
  public ?HECToken $hec_token;
  public ?ProcessingConfiguration $processing_configuration;
  public ?SplunkRetryOptions $retry_options;
  public ?SplunkS3BackupMode $s_3_backup_mode;
  public ?S3DestinationDescription $s_3_destination_description;

  public function __construct(shape(
    ?'cloud_watch_logging_options' => ?CloudWatchLoggingOptions,
    ?'hec_acknowledgment_timeout_in_seconds' => ?HECAcknowledgmentTimeoutInSeconds,
    ?'hec_endpoint' => ?HECEndpoint,
    ?'hec_endpoint_type' => ?HECEndpointType,
    ?'hec_token' => ?HECToken,
    ?'processing_configuration' => ?ProcessingConfiguration,
    ?'retry_options' => ?SplunkRetryOptions,
    ?'s_3_backup_mode' => ?SplunkS3BackupMode,
    ?'s_3_destination_description' => ?S3DestinationDescription,
  ) $s = shape()) {
    $this->cloud_watch_logging_options = $s['cloud_watch_logging_options'] ?? null;
    $this->hec_acknowledgment_timeout_in_seconds = $s['hec_acknowledgment_timeout_in_seconds'] ?? 0;
    $this->hec_endpoint = $s['hec_endpoint'] ?? '';
    $this->hec_endpoint_type = $s['hec_endpoint_type'] ?? '';
    $this->hec_token = $s['hec_token'] ?? '';
    $this->processing_configuration = $s['processing_configuration'] ?? null;
    $this->retry_options = $s['retry_options'] ?? null;
    $this->s_3_backup_mode = $s['s_3_backup_mode'] ?? '';
    $this->s_3_destination_description = $s['s_3_destination_description'] ?? null;
  }
}

class SplunkDestinationUpdate {
  public ?CloudWatchLoggingOptions $cloud_watch_logging_options;
  public ?HECAcknowledgmentTimeoutInSeconds $hec_acknowledgment_timeout_in_seconds;
  public ?HECEndpoint $hec_endpoint;
  public ?HECEndpointType $hec_endpoint_type;
  public ?HECToken $hec_token;
  public ?ProcessingConfiguration $processing_configuration;
  public ?SplunkRetryOptions $retry_options;
  public ?SplunkS3BackupMode $s_3_backup_mode;
  public ?S3DestinationUpdate $s_3_update;

  public function __construct(shape(
    ?'cloud_watch_logging_options' => ?CloudWatchLoggingOptions,
    ?'hec_acknowledgment_timeout_in_seconds' => ?HECAcknowledgmentTimeoutInSeconds,
    ?'hec_endpoint' => ?HECEndpoint,
    ?'hec_endpoint_type' => ?HECEndpointType,
    ?'hec_token' => ?HECToken,
    ?'processing_configuration' => ?ProcessingConfiguration,
    ?'retry_options' => ?SplunkRetryOptions,
    ?'s_3_backup_mode' => ?SplunkS3BackupMode,
    ?'s_3_update' => ?S3DestinationUpdate,
  ) $s = shape()) {
    $this->cloud_watch_logging_options = $s['cloud_watch_logging_options'] ?? null;
    $this->hec_acknowledgment_timeout_in_seconds = $s['hec_acknowledgment_timeout_in_seconds'] ?? 0;
    $this->hec_endpoint = $s['hec_endpoint'] ?? '';
    $this->hec_endpoint_type = $s['hec_endpoint_type'] ?? '';
    $this->hec_token = $s['hec_token'] ?? '';
    $this->processing_configuration = $s['processing_configuration'] ?? null;
    $this->retry_options = $s['retry_options'] ?? null;
    $this->s_3_backup_mode = $s['s_3_backup_mode'] ?? '';
    $this->s_3_update = $s['s_3_update'] ?? null;
  }
}

type SplunkRetryDurationInSeconds = int;

class SplunkRetryOptions {
  public ?SplunkRetryDurationInSeconds $duration_in_seconds;

  public function __construct(shape(
    ?'duration_in_seconds' => ?SplunkRetryDurationInSeconds,
  ) $s = shape()) {
    $this->duration_in_seconds = $s['duration_in_seconds'] ?? 0;
  }
}

type SplunkS3BackupMode = string;

class StartDeliveryStreamEncryptionInput {
  public ?DeliveryStreamEncryptionConfigurationInput $delivery_stream_encryption_configuration_input;
  public ?DeliveryStreamName $delivery_stream_name;

  public function __construct(shape(
    ?'delivery_stream_encryption_configuration_input' => ?DeliveryStreamEncryptionConfigurationInput,
    ?'delivery_stream_name' => ?DeliveryStreamName,
  ) $s = shape()) {
    $this->delivery_stream_encryption_configuration_input = $s['delivery_stream_encryption_configuration_input'] ?? null;
    $this->delivery_stream_name = $s['delivery_stream_name'] ?? '';
  }
}

class StartDeliveryStreamEncryptionOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StopDeliveryStreamEncryptionInput {
  public ?DeliveryStreamName $delivery_stream_name;

  public function __construct(shape(
    ?'delivery_stream_name' => ?DeliveryStreamName,
  ) $s = shape()) {
    $this->delivery_stream_name = $s['delivery_stream_name'] ?? '';
  }
}

class StopDeliveryStreamEncryptionOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SubnetIdList = vec<NonEmptyStringWithoutWhitespace>;

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

class TagDeliveryStreamInput {
  public ?DeliveryStreamName $delivery_stream_name;
  public ?TagDeliveryStreamInputTagList $tags;

  public function __construct(shape(
    ?'delivery_stream_name' => ?DeliveryStreamName,
    ?'tags' => ?TagDeliveryStreamInputTagList,
  ) $s = shape()) {
    $this->delivery_stream_name = $s['delivery_stream_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type TagDeliveryStreamInputTagList = vec<Tag>;

class TagDeliveryStreamOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagValue = string;

type Timestamp = int;

class UntagDeliveryStreamInput {
  public ?DeliveryStreamName $delivery_stream_name;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'delivery_stream_name' => ?DeliveryStreamName,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->delivery_stream_name = $s['delivery_stream_name'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagDeliveryStreamOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDestinationInput {
  public ?DeliveryStreamVersionId $current_delivery_stream_version_id;
  public ?DeliveryStreamName $delivery_stream_name;
  public ?DestinationId $destination_id;
  public ?ElasticsearchDestinationUpdate $elasticsearch_destination_update;
  public ?ExtendedS3DestinationUpdate $extended_s_3_destination_update;
  public ?RedshiftDestinationUpdate $redshift_destination_update;
  public ?S3DestinationUpdate $s_3_destination_update;
  public ?SplunkDestinationUpdate $splunk_destination_update;

  public function __construct(shape(
    ?'current_delivery_stream_version_id' => ?DeliveryStreamVersionId,
    ?'delivery_stream_name' => ?DeliveryStreamName,
    ?'destination_id' => ?DestinationId,
    ?'elasticsearch_destination_update' => ?ElasticsearchDestinationUpdate,
    ?'extended_s_3_destination_update' => ?ExtendedS3DestinationUpdate,
    ?'redshift_destination_update' => ?RedshiftDestinationUpdate,
    ?'s_3_destination_update' => ?S3DestinationUpdate,
    ?'splunk_destination_update' => ?SplunkDestinationUpdate,
  ) $s = shape()) {
    $this->current_delivery_stream_version_id = $s['current_delivery_stream_version_id'] ?? '';
    $this->delivery_stream_name = $s['delivery_stream_name'] ?? '';
    $this->destination_id = $s['destination_id'] ?? '';
    $this->elasticsearch_destination_update = $s['elasticsearch_destination_update'] ?? null;
    $this->extended_s_3_destination_update = $s['extended_s_3_destination_update'] ?? null;
    $this->redshift_destination_update = $s['redshift_destination_update'] ?? null;
    $this->s_3_destination_update = $s['s_3_destination_update'] ?? null;
    $this->splunk_destination_update = $s['splunk_destination_update'] ?? null;
  }
}

class UpdateDestinationOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Username = string;

class VpcConfiguration {
  public ?RoleARN $role_arn;
  public ?SecurityGroupIdList $security_group_ids;
  public ?SubnetIdList $subnet_ids;

  public function __construct(shape(
    ?'role_arn' => ?RoleARN,
    ?'security_group_ids' => ?SecurityGroupIdList,
    ?'subnet_ids' => ?SubnetIdList,
  ) $s = shape()) {
    $this->role_arn = $s['role_arn'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
  }
}

class VpcConfigurationDescription {
  public ?RoleARN $role_arn;
  public ?SecurityGroupIdList $security_group_ids;
  public ?SubnetIdList $subnet_ids;
  public ?NonEmptyStringWithoutWhitespace $vpc_id;

  public function __construct(shape(
    ?'role_arn' => ?RoleARN,
    ?'security_group_ids' => ?SecurityGroupIdList,
    ?'subnet_ids' => ?SubnetIdList,
    ?'vpc_id' => ?NonEmptyStringWithoutWhitespace,
  ) $s = shape()) {
    $this->role_arn = $s['role_arn'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}


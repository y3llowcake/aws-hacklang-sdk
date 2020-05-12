<?hh // strict
namespace slack\aws\kendra;

interface kendra {
  public function BatchDeleteDocument(BatchDeleteDocumentRequest $in): Awaitable<\Errors\Result<BatchDeleteDocumentResponse>>;
  public function BatchPutDocument(BatchPutDocumentRequest $in): Awaitable<\Errors\Result<BatchPutDocumentResponse>>;
  public function CreateDataSource(CreateDataSourceRequest $in): Awaitable<\Errors\Result<CreateDataSourceResponse>>;
  public function CreateFaq(CreateFaqRequest $in): Awaitable<\Errors\Result<CreateFaqResponse>>;
  public function CreateIndex(CreateIndexRequest $in): Awaitable<\Errors\Result<CreateIndexResponse>>;
  public function DeleteFaq(DeleteFaqRequest $in): Awaitable<\Errors\Error>;
  public function DeleteIndex(DeleteIndexRequest $in): Awaitable<\Errors\Error>;
  public function DescribeDataSource(DescribeDataSourceRequest $in): Awaitable<\Errors\Result<DescribeDataSourceResponse>>;
  public function DescribeFaq(DescribeFaqRequest $in): Awaitable<\Errors\Result<DescribeFaqResponse>>;
  public function DescribeIndex(DescribeIndexRequest $in): Awaitable<\Errors\Result<DescribeIndexResponse>>;
  public function ListDataSourceSyncJobs(ListDataSourceSyncJobsRequest $in): Awaitable<\Errors\Result<ListDataSourceSyncJobsResponse>>;
  public function ListDataSources(ListDataSourcesRequest $in): Awaitable<\Errors\Result<ListDataSourcesResponse>>;
  public function ListFaqs(ListFaqsRequest $in): Awaitable<\Errors\Result<ListFaqsResponse>>;
  public function ListIndices(ListIndicesRequest $in): Awaitable<\Errors\Result<ListIndicesResponse>>;
  public function Query(QueryRequest $in): Awaitable<\Errors\Result<QueryResult>>;
  public function StartDataSourceSyncJob(StartDataSourceSyncJobRequest $in): Awaitable<\Errors\Result<StartDataSourceSyncJobResponse>>;
  public function StopDataSourceSyncJob(StopDataSourceSyncJobRequest $in): Awaitable<\Errors\Error>;
  public function SubmitFeedback(SubmitFeedbackRequest $in): Awaitable<\Errors\Error>;
  public function UpdateDataSource(UpdateDataSourceRequest $in): Awaitable<\Errors\Error>;
  public function UpdateIndex(UpdateIndexRequest $in): Awaitable<\Errors\Error>;
}

class AccessControlListConfiguration {
  public ?S3ObjectKey $key_path;

  public function __construct(shape(
    ?'key_path' => ?S3ObjectKey,
  ) $s = shape()) {
    $this->key_path = $s['key_path'] ?? '';
  }
}

class AccessDeniedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class AclConfiguration {
  public ?ColumnName $allowed_groups_column_name;

  public function __construct(shape(
    ?'allowed_groups_column_name' => ?ColumnName,
  ) $s = shape()) {
    $this->allowed_groups_column_name = $s['allowed_groups_column_name'] ?? '';
  }
}

class AdditionalResultAttribute {
  public string $key;
  public ?AdditionalResultAttributeValue $value;
  public ?AdditionalResultAttributeValueType $value_type;

  public function __construct(shape(
    ?'key' => string,
    ?'value' => ?AdditionalResultAttributeValue,
    ?'value_type' => ?AdditionalResultAttributeValueType,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? null;
    $this->value_type = $s['value_type'] ?? '';
  }
}

type AdditionalResultAttributeList = vec<AdditionalResultAttribute>;

class AdditionalResultAttributeValue {
  public ?TextWithHighlights $text_with_highlights_value;

  public function __construct(shape(
    ?'text_with_highlights_value' => ?TextWithHighlights,
  ) $s = shape()) {
    $this->text_with_highlights_value = $s['text_with_highlights_value'] ?? null;
  }
}

type AdditionalResultAttributeValueType = string;

class AttributeFilter {
  public ?AttributeFilterList $and_all_filters;
  public ?DocumentAttribute $contains_all;
  public ?DocumentAttribute $contains_any;
  public ?DocumentAttribute $equals_to;
  public ?DocumentAttribute $greater_than;
  public ?DocumentAttribute $greater_than_or_equals;
  public ?DocumentAttribute $less_than;
  public ?DocumentAttribute $less_than_or_equals;
  public ?AttributeFilter $not_filter;
  public ?AttributeFilterList $or_all_filters;

  public function __construct(shape(
    ?'and_all_filters' => ?AttributeFilterList,
    ?'contains_all' => ?DocumentAttribute,
    ?'contains_any' => ?DocumentAttribute,
    ?'equals_to' => ?DocumentAttribute,
    ?'greater_than' => ?DocumentAttribute,
    ?'greater_than_or_equals' => ?DocumentAttribute,
    ?'less_than' => ?DocumentAttribute,
    ?'less_than_or_equals' => ?DocumentAttribute,
    ?'not_filter' => ?AttributeFilter,
    ?'or_all_filters' => ?AttributeFilterList,
  ) $s = shape()) {
    $this->and_all_filters = $s['and_all_filters'] ?? vec[];
    $this->contains_all = $s['contains_all'] ?? null;
    $this->contains_any = $s['contains_any'] ?? null;
    $this->equals_to = $s['equals_to'] ?? null;
    $this->greater_than = $s['greater_than'] ?? null;
    $this->greater_than_or_equals = $s['greater_than_or_equals'] ?? null;
    $this->less_than = $s['less_than'] ?? null;
    $this->less_than_or_equals = $s['less_than_or_equals'] ?? null;
    $this->not_filter = $s['not_filter'] ?? null;
    $this->or_all_filters = $s['or_all_filters'] ?? vec[];
  }
}

type AttributeFilterList = vec<AttributeFilter>;

class BatchDeleteDocumentRequest {
  public ?DocumentIdList $document_id_list;
  public ?IndexId $index_id;

  public function __construct(shape(
    ?'document_id_list' => ?DocumentIdList,
    ?'index_id' => ?IndexId,
  ) $s = shape()) {
    $this->document_id_list = $s['document_id_list'] ?? vec[];
    $this->index_id = $s['index_id'] ?? '';
  }
}

class BatchDeleteDocumentResponse {
  public ?BatchDeleteDocumentResponseFailedDocuments $failed_documents;

  public function __construct(shape(
    ?'failed_documents' => ?BatchDeleteDocumentResponseFailedDocuments,
  ) $s = shape()) {
    $this->failed_documents = $s['failed_documents'] ?? vec[];
  }
}

class BatchDeleteDocumentResponseFailedDocument {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $error_message;
  public ?DocumentId $id;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ErrorMessage,
    ?'id' => ?DocumentId,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

type BatchDeleteDocumentResponseFailedDocuments = vec<BatchDeleteDocumentResponseFailedDocument>;

class BatchPutDocumentRequest {
  public ?DocumentList $documents;
  public ?IndexId $index_id;
  public ?RoleArn $role_arn;

  public function __construct(shape(
    ?'documents' => ?DocumentList,
    ?'index_id' => ?IndexId,
    ?'role_arn' => ?RoleArn,
  ) $s = shape()) {
    $this->documents = $s['documents'] ?? vec[];
    $this->index_id = $s['index_id'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class BatchPutDocumentResponse {
  public ?BatchPutDocumentResponseFailedDocuments $failed_documents;

  public function __construct(shape(
    ?'failed_documents' => ?BatchPutDocumentResponseFailedDocuments,
  ) $s = shape()) {
    $this->failed_documents = $s['failed_documents'] ?? vec[];
  }
}

class BatchPutDocumentResponseFailedDocument {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $error_message;
  public ?DocumentId $id;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ErrorMessage,
    ?'id' => ?DocumentId,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

type BatchPutDocumentResponseFailedDocuments = vec<BatchPutDocumentResponseFailedDocument>;

type Blob = string;

type Boolean = bool;

type ChangeDetectingColumns = vec<ColumnName>;

class ClickFeedback {
  public ?Timestamp $click_time;
  public ?ResultId $result_id;

  public function __construct(shape(
    ?'click_time' => ?Timestamp,
    ?'result_id' => ?ResultId,
  ) $s = shape()) {
    $this->click_time = $s['click_time'] ?? 0;
    $this->result_id = $s['result_id'] ?? '';
  }
}

type ClickFeedbackList = vec<ClickFeedback>;

type ClientTokenName = string;

class ColumnConfiguration {
  public ?ChangeDetectingColumns $change_detecting_columns;
  public ?ColumnName $document_data_column_name;
  public ?ColumnName $document_id_column_name;
  public ?ColumnName $document_title_column_name;
  public ?DataSourceToIndexFieldMappingList $field_mappings;

  public function __construct(shape(
    ?'change_detecting_columns' => ?ChangeDetectingColumns,
    ?'document_data_column_name' => ?ColumnName,
    ?'document_id_column_name' => ?ColumnName,
    ?'document_title_column_name' => ?ColumnName,
    ?'field_mappings' => ?DataSourceToIndexFieldMappingList,
  ) $s = shape()) {
    $this->change_detecting_columns = $s['change_detecting_columns'] ?? vec[];
    $this->document_data_column_name = $s['document_data_column_name'] ?? '';
    $this->document_id_column_name = $s['document_id_column_name'] ?? '';
    $this->document_title_column_name = $s['document_title_column_name'] ?? '';
    $this->field_mappings = $s['field_mappings'] ?? vec[];
  }
}

type ColumnName = string;

class ConflictException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ConnectionConfiguration {
  public ?DatabaseHost $database_host;
  public ?DatabaseName $database_name;
  public ?DatabasePort $database_port;
  public ?SecretArn $secret_arn;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'database_host' => ?DatabaseHost,
    ?'database_name' => ?DatabaseName,
    ?'database_port' => ?DatabasePort,
    ?'secret_arn' => ?SecretArn,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->database_host = $s['database_host'] ?? '';
    $this->database_name = $s['database_name'] ?? '';
    $this->database_port = $s['database_port'] ?? 0;
    $this->secret_arn = $s['secret_arn'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

type ContentType = string;

class CreateDataSourceRequest {
  public ?DataSourceConfiguration $configuration;
  public ?Description $description;
  public ?IndexId $index_id;
  public ?DataSourceName $name;
  public ?RoleArn $role_arn;
  public ?ScanSchedule $schedule;
  public ?DataSourceType $type;

  public function __construct(shape(
    ?'configuration' => ?DataSourceConfiguration,
    ?'description' => ?Description,
    ?'index_id' => ?IndexId,
    ?'name' => ?DataSourceName,
    ?'role_arn' => ?RoleArn,
    ?'schedule' => ?ScanSchedule,
    ?'type' => ?DataSourceType,
  ) $s = shape()) {
    $this->configuration = $s['configuration'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->index_id = $s['index_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->schedule = $s['schedule'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class CreateDataSourceResponse {
  public ?DataSourceId $id;

  public function __construct(shape(
    ?'id' => ?DataSourceId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class CreateFaqRequest {
  public ?Description $description;
  public ?IndexId $index_id;
  public ?FaqName $name;
  public ?RoleArn $role_arn;
  public ?S3Path $s_3_path;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'index_id' => ?IndexId,
    ?'name' => ?FaqName,
    ?'role_arn' => ?RoleArn,
    ?'s_3_path' => ?S3Path,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->index_id = $s['index_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->s_3_path = $s['s_3_path'] ?? null;
  }
}

class CreateFaqResponse {
  public ?FaqId $id;

  public function __construct(shape(
    ?'id' => ?FaqId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class CreateIndexRequest {
  public ?ClientTokenName $client_token;
  public ?Description $description;
  public ?IndexName $name;
  public ?RoleArn $role_arn;
  public ?ServerSideEncryptionConfiguration $server_side_encryption_configuration;

  public function __construct(shape(
    ?'client_token' => ?ClientTokenName,
    ?'description' => ?Description,
    ?'name' => ?IndexName,
    ?'role_arn' => ?RoleArn,
    ?'server_side_encryption_configuration' => ?ServerSideEncryptionConfiguration,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->server_side_encryption_configuration = $s['server_side_encryption_configuration'] ?? null;
  }
}

class CreateIndexResponse {
  public ?IndexId $id;

  public function __construct(shape(
    ?'id' => ?IndexId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DataSourceConfiguration {
  public ?DatabaseConfiguration $database_configuration;
  public ?S3DataSourceConfiguration $s_3_configuration;
  public ?SharePointConfiguration $share_point_configuration;

  public function __construct(shape(
    ?'database_configuration' => ?DatabaseConfiguration,
    ?'s_3_configuration' => ?S3DataSourceConfiguration,
    ?'share_point_configuration' => ?SharePointConfiguration,
  ) $s = shape()) {
    $this->database_configuration = $s['database_configuration'] ?? null;
    $this->s_3_configuration = $s['s_3_configuration'] ?? null;
    $this->share_point_configuration = $s['share_point_configuration'] ?? null;
  }
}

type DataSourceDateFieldFormat = string;

type DataSourceFieldName = string;

type DataSourceId = string;

type DataSourceInclusionsExclusionsStrings = vec<DataSourceInclusionsExclusionsStringsMember>;

type DataSourceInclusionsExclusionsStringsMember = string;

type DataSourceName = string;

type DataSourceStatus = string;

class DataSourceSummary {
  public ?Timestamp $created_at;
  public ?DataSourceId $id;
  public ?DataSourceName $name;
  public ?DataSourceStatus $status;
  public ?DataSourceType $type;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'created_at' => ?Timestamp,
    ?'id' => ?DataSourceId,
    ?'name' => ?DataSourceName,
    ?'status' => ?DataSourceStatus,
    ?'type' => ?DataSourceType,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

type DataSourceSummaryList = vec<DataSourceSummary>;

class DataSourceSyncJob {
  public string $data_source_error_code;
  public ?Timestamp $end_time;
  public ?ErrorCode $error_code;
  public ?ErrorMessage $error_message;
  public string $execution_id;
  public ?Timestamp $start_time;
  public ?DataSourceSyncJobStatus $status;

  public function __construct(shape(
    ?'data_source_error_code' => string,
    ?'end_time' => ?Timestamp,
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ErrorMessage,
    ?'execution_id' => string,
    ?'start_time' => ?Timestamp,
    ?'status' => ?DataSourceSyncJobStatus,
  ) $s = shape()) {
    $this->data_source_error_code = $s['data_source_error_code'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->execution_id = $s['execution_id'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

type DataSourceSyncJobHistoryList = vec<DataSourceSyncJob>;

type DataSourceSyncJobStatus = string;

class DataSourceToIndexFieldMapping {
  public ?DataSourceFieldName $data_source_field_name;
  public ?DataSourceDateFieldFormat $date_field_format;
  public ?IndexFieldName $index_field_name;

  public function __construct(shape(
    ?'data_source_field_name' => ?DataSourceFieldName,
    ?'date_field_format' => ?DataSourceDateFieldFormat,
    ?'index_field_name' => ?IndexFieldName,
  ) $s = shape()) {
    $this->data_source_field_name = $s['data_source_field_name'] ?? '';
    $this->date_field_format = $s['date_field_format'] ?? '';
    $this->index_field_name = $s['index_field_name'] ?? '';
  }
}

type DataSourceToIndexFieldMappingList = vec<DataSourceToIndexFieldMapping>;

type DataSourceType = string;

class DataSourceVpcConfiguration {
  public ?SecurityGroupIdList $security_group_ids;
  public ?SubnetIdList $subnet_ids;

  public function __construct(shape(
    ?'security_group_ids' => ?SecurityGroupIdList,
    ?'subnet_ids' => ?SubnetIdList,
  ) $s = shape()) {
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
  }
}

class DatabaseConfiguration {
  public ?AclConfiguration $acl_configuration;
  public ?ColumnConfiguration $column_configuration;
  public ?ConnectionConfiguration $connection_configuration;
  public ?DatabaseEngineType $database_engine_type;
  public ?DataSourceVpcConfiguration $vpc_configuration;

  public function __construct(shape(
    ?'acl_configuration' => ?AclConfiguration,
    ?'column_configuration' => ?ColumnConfiguration,
    ?'connection_configuration' => ?ConnectionConfiguration,
    ?'database_engine_type' => ?DatabaseEngineType,
    ?'vpc_configuration' => ?DataSourceVpcConfiguration,
  ) $s = shape()) {
    $this->acl_configuration = $s['acl_configuration'] ?? null;
    $this->column_configuration = $s['column_configuration'] ?? null;
    $this->connection_configuration = $s['connection_configuration'] ?? null;
    $this->database_engine_type = $s['database_engine_type'] ?? '';
    $this->vpc_configuration = $s['vpc_configuration'] ?? null;
  }
}

type DatabaseEngineType = string;

type DatabaseHost = string;

type DatabaseName = string;

type DatabasePort = int;

class DeleteFaqRequest {
  public ?FaqId $id;
  public ?IndexId $index_id;

  public function __construct(shape(
    ?'id' => ?FaqId,
    ?'index_id' => ?IndexId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->index_id = $s['index_id'] ?? '';
  }
}

class DeleteIndexRequest {
  public ?IndexId $id;

  public function __construct(shape(
    ?'id' => ?IndexId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DescribeDataSourceRequest {
  public ?DataSourceId $id;
  public ?IndexId $index_id;

  public function __construct(shape(
    ?'id' => ?DataSourceId,
    ?'index_id' => ?IndexId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->index_id = $s['index_id'] ?? '';
  }
}

class DescribeDataSourceResponse {
  public ?DataSourceConfiguration $configuration;
  public ?Timestamp $created_at;
  public ?Description $description;
  public ?ErrorMessage $error_message;
  public ?DataSourceId $id;
  public ?IndexId $index_id;
  public ?DataSourceName $name;
  public ?RoleArn $role_arn;
  public ?ScanSchedule $schedule;
  public ?DataSourceStatus $status;
  public ?DataSourceType $type;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'configuration' => ?DataSourceConfiguration,
    ?'created_at' => ?Timestamp,
    ?'description' => ?Description,
    ?'error_message' => ?ErrorMessage,
    ?'id' => ?DataSourceId,
    ?'index_id' => ?IndexId,
    ?'name' => ?DataSourceName,
    ?'role_arn' => ?RoleArn,
    ?'schedule' => ?ScanSchedule,
    ?'status' => ?DataSourceStatus,
    ?'type' => ?DataSourceType,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->configuration = $s['configuration'] ?? null;
    $this->created_at = $s['created_at'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->index_id = $s['index_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->schedule = $s['schedule'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class DescribeFaqRequest {
  public ?FaqId $id;
  public ?IndexId $index_id;

  public function __construct(shape(
    ?'id' => ?FaqId,
    ?'index_id' => ?IndexId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->index_id = $s['index_id'] ?? '';
  }
}

class DescribeFaqResponse {
  public ?Timestamp $created_at;
  public ?Description $description;
  public ?ErrorMessage $error_message;
  public ?FaqId $id;
  public ?IndexId $index_id;
  public ?FaqName $name;
  public ?RoleArn $role_arn;
  public ?S3Path $s_3_path;
  public ?FaqStatus $status;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'created_at' => ?Timestamp,
    ?'description' => ?Description,
    ?'error_message' => ?ErrorMessage,
    ?'id' => ?FaqId,
    ?'index_id' => ?IndexId,
    ?'name' => ?FaqName,
    ?'role_arn' => ?RoleArn,
    ?'s_3_path' => ?S3Path,
    ?'status' => ?FaqStatus,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->index_id = $s['index_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->s_3_path = $s['s_3_path'] ?? null;
    $this->status = $s['status'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class DescribeIndexRequest {
  public ?IndexId $id;

  public function __construct(shape(
    ?'id' => ?IndexId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DescribeIndexResponse {
  public ?Timestamp $created_at;
  public ?Description $description;
  public ?DocumentMetadataConfigurationList $document_metadata_configurations;
  public ?ErrorMessage $error_message;
  public ?IndexId $id;
  public ?IndexStatistics $index_statistics;
  public ?IndexName $name;
  public ?RoleArn $role_arn;
  public ?ServerSideEncryptionConfiguration $server_side_encryption_configuration;
  public ?IndexStatus $status;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'created_at' => ?Timestamp,
    ?'description' => ?Description,
    ?'document_metadata_configurations' => ?DocumentMetadataConfigurationList,
    ?'error_message' => ?ErrorMessage,
    ?'id' => ?IndexId,
    ?'index_statistics' => ?IndexStatistics,
    ?'name' => ?IndexName,
    ?'role_arn' => ?RoleArn,
    ?'server_side_encryption_configuration' => ?ServerSideEncryptionConfiguration,
    ?'status' => ?IndexStatus,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->document_metadata_configurations = $s['document_metadata_configurations'] ?? vec[];
    $this->error_message = $s['error_message'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->index_statistics = $s['index_statistics'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->server_side_encryption_configuration = $s['server_side_encryption_configuration'] ?? null;
    $this->status = $s['status'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

type Description = string;

class Document {
  public ?PrincipalList $access_control_list;
  public ?DocumentAttributeList $attributes;
  public ?Blob $blob;
  public ?ContentType $content_type;
  public ?DocumentId $id;
  public ?S3Path $s_3_path;
  public ?Title $title;

  public function __construct(shape(
    ?'access_control_list' => ?PrincipalList,
    ?'attributes' => ?DocumentAttributeList,
    ?'blob' => ?Blob,
    ?'content_type' => ?ContentType,
    ?'id' => ?DocumentId,
    ?'s_3_path' => ?S3Path,
    ?'title' => ?Title,
  ) $s = shape()) {
    $this->access_control_list = $s['access_control_list'] ?? vec[];
    $this->attributes = $s['attributes'] ?? vec[];
    $this->blob = $s['blob'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->s_3_path = $s['s_3_path'] ?? null;
    $this->title = $s['title'] ?? '';
  }
}

class DocumentAttribute {
  public ?DocumentAttributeKey $key;
  public ?DocumentAttributeValue $value;

  public function __construct(shape(
    ?'key' => ?DocumentAttributeKey,
    ?'value' => ?DocumentAttributeValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? null;
  }
}

type DocumentAttributeKey = string;

type DocumentAttributeKeyList = vec<DocumentAttributeKey>;

type DocumentAttributeList = vec<DocumentAttribute>;

type DocumentAttributeStringListValue = vec<String>;

type DocumentAttributeStringValue = string;

class DocumentAttributeValue {
  public ?Timestamp $date_value;
  public ?Long $long_value;
  public ?DocumentAttributeStringListValue $string_list_value;
  public ?DocumentAttributeStringValue $string_value;

  public function __construct(shape(
    ?'date_value' => ?Timestamp,
    ?'long_value' => ?Long,
    ?'string_list_value' => ?DocumentAttributeStringListValue,
    ?'string_value' => ?DocumentAttributeStringValue,
  ) $s = shape()) {
    $this->date_value = $s['date_value'] ?? 0;
    $this->long_value = $s['long_value'] ?? 0;
    $this->string_list_value = $s['string_list_value'] ?? vec[];
    $this->string_value = $s['string_value'] ?? '';
  }
}

class DocumentAttributeValueCountPair {
  public int $count;
  public ?DocumentAttributeValue $document_attribute_value;

  public function __construct(shape(
    ?'count' => int,
    ?'document_attribute_value' => ?DocumentAttributeValue,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->document_attribute_value = $s['document_attribute_value'] ?? null;
  }
}

type DocumentAttributeValueCountPairList = vec<DocumentAttributeValueCountPair>;

type DocumentAttributeValueType = string;

type DocumentId = string;

type DocumentIdList = vec<DocumentId>;

type DocumentList = vec<Document>;

type DocumentMetadataBoolean = bool;

class DocumentMetadataConfiguration {
  public ?DocumentMetadataConfigurationName $name;
  public ?Relevance $relevance;
  public ?Search $search;
  public ?DocumentAttributeValueType $type;

  public function __construct(shape(
    ?'name' => ?DocumentMetadataConfigurationName,
    ?'relevance' => ?Relevance,
    ?'search' => ?Search,
    ?'type' => ?DocumentAttributeValueType,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->relevance = $s['relevance'] ?? null;
    $this->search = $s['search'] ?? null;
    $this->type = $s['type'] ?? '';
  }
}

type DocumentMetadataConfigurationList = vec<DocumentMetadataConfiguration>;

type DocumentMetadataConfigurationName = string;

class DocumentsMetadataConfiguration {
  public ?S3ObjectKey $s_3_prefix;

  public function __construct(shape(
    ?'s_3_prefix' => ?S3ObjectKey,
  ) $s = shape()) {
    $this->s_3_prefix = $s['s_3_prefix'] ?? '';
  }
}

type Duration = string;

type ErrorCode = string;

type ErrorMessage = string;

class Facet {
  public ?DocumentAttributeKey $document_attribute_key;

  public function __construct(shape(
    ?'document_attribute_key' => ?DocumentAttributeKey,
  ) $s = shape()) {
    $this->document_attribute_key = $s['document_attribute_key'] ?? '';
  }
}

type FacetList = vec<Facet>;

class FacetResult {
  public ?DocumentAttributeKey $document_attribute_key;
  public ?DocumentAttributeValueCountPairList $document_attribute_value_count_pairs;

  public function __construct(shape(
    ?'document_attribute_key' => ?DocumentAttributeKey,
    ?'document_attribute_value_count_pairs' => ?DocumentAttributeValueCountPairList,
  ) $s = shape()) {
    $this->document_attribute_key = $s['document_attribute_key'] ?? '';
    $this->document_attribute_value_count_pairs = $s['document_attribute_value_count_pairs'] ?? vec[];
  }
}

type FacetResultList = vec<FacetResult>;

type FaqId = string;

type FaqName = string;

class FaqStatistics {
  public ?IndexedQuestionAnswersCount $indexed_question_answers_count;

  public function __construct(shape(
    ?'indexed_question_answers_count' => ?IndexedQuestionAnswersCount,
  ) $s = shape()) {
    $this->indexed_question_answers_count = $s['indexed_question_answers_count'] ?? 0;
  }
}

type FaqStatus = string;

class FaqSummary {
  public ?Timestamp $created_at;
  public ?FaqId $id;
  public ?FaqName $name;
  public ?FaqStatus $status;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'created_at' => ?Timestamp,
    ?'id' => ?FaqId,
    ?'name' => ?FaqName,
    ?'status' => ?FaqStatus,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

type FaqSummaryItems = vec<FaqSummary>;

class Highlight {
  public int $begin_offset;
  public int $end_offset;
  public bool $top_answer;

  public function __construct(shape(
    ?'begin_offset' => int,
    ?'end_offset' => int,
    ?'top_answer' => bool,
  ) $s = shape()) {
    $this->begin_offset = $s['begin_offset'] ?? 0;
    $this->end_offset = $s['end_offset'] ?? 0;
    $this->top_answer = $s['top_answer'] ?? false;
  }
}

type HighlightList = vec<Highlight>;

type Importance = int;

class IndexConfigurationSummary {
  public ?Timestamp $created_at;
  public ?IndexId $id;
  public ?IndexName $name;
  public ?IndexStatus $status;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'created_at' => ?Timestamp,
    ?'id' => ?IndexId,
    ?'name' => ?IndexName,
    ?'status' => ?IndexStatus,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

type IndexConfigurationSummaryList = vec<IndexConfigurationSummary>;

type IndexFieldName = string;

type IndexId = string;

type IndexName = string;

class IndexStatistics {
  public ?FaqStatistics $faq_statistics;
  public ?TextDocumentStatistics $text_document_statistics;

  public function __construct(shape(
    ?'faq_statistics' => ?FaqStatistics,
    ?'text_document_statistics' => ?TextDocumentStatistics,
  ) $s = shape()) {
    $this->faq_statistics = $s['faq_statistics'] ?? null;
    $this->text_document_statistics = $s['text_document_statistics'] ?? null;
  }
}

type IndexStatus = string;

type IndexedQuestionAnswersCount = int;

type IndexedTextDocumentsCount = int;

type Integer = int;

class InternalServerException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type KmsKeyId = string;

class ListDataSourceSyncJobsRequest {
  public ?DataSourceId $id;
  public ?IndexId $index_id;
  public ?MaxResultsIntegerForListDataSourceSyncJobsRequest $max_results;
  public ?NextToken $next_token;
  public ?TimeRange $start_time_filter;
  public ?DataSourceSyncJobStatus $status_filter;

  public function __construct(shape(
    ?'id' => ?DataSourceId,
    ?'index_id' => ?IndexId,
    ?'max_results' => ?MaxResultsIntegerForListDataSourceSyncJobsRequest,
    ?'next_token' => ?NextToken,
    ?'start_time_filter' => ?TimeRange,
    ?'status_filter' => ?DataSourceSyncJobStatus,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->index_id = $s['index_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->start_time_filter = $s['start_time_filter'] ?? null;
    $this->status_filter = $s['status_filter'] ?? '';
  }
}

class ListDataSourceSyncJobsResponse {
  public ?DataSourceSyncJobHistoryList $history;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'history' => ?DataSourceSyncJobHistoryList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->history = $s['history'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDataSourcesRequest {
  public ?IndexId $index_id;
  public ?MaxResultsIntegerForListDataSourcesRequest $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'index_id' => ?IndexId,
    ?'max_results' => ?MaxResultsIntegerForListDataSourcesRequest,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->index_id = $s['index_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDataSourcesResponse {
  public ?NextToken $next_token;
  public ?DataSourceSummaryList $summary_items;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'summary_items' => ?DataSourceSummaryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->summary_items = $s['summary_items'] ?? vec[];
  }
}

class ListFaqsRequest {
  public ?IndexId $index_id;
  public ?MaxResultsIntegerForListFaqsRequest $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'index_id' => ?IndexId,
    ?'max_results' => ?MaxResultsIntegerForListFaqsRequest,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->index_id = $s['index_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFaqsResponse {
  public ?FaqSummaryItems $faq_summary_items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'faq_summary_items' => ?FaqSummaryItems,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->faq_summary_items = $s['faq_summary_items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListIndicesRequest {
  public ?MaxResultsIntegerForListIndicesRequest $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResultsIntegerForListIndicesRequest,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListIndicesResponse {
  public ?IndexConfigurationSummaryList $index_configuration_summary_items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'index_configuration_summary_items' => ?IndexConfigurationSummaryList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->index_configuration_summary_items = $s['index_configuration_summary_items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type Long = int;

type MaxResultsIntegerForListDataSourceSyncJobsRequest = int;

type MaxResultsIntegerForListDataSourcesRequest = int;

type MaxResultsIntegerForListFaqsRequest = int;

type MaxResultsIntegerForListIndicesRequest = int;

type NextToken = string;

type Order = string;

class Principal {
  public ?ReadAccessType $access;
  public ?PrincipalName $name;
  public ?PrincipalType $type;

  public function __construct(shape(
    ?'access' => ?ReadAccessType,
    ?'name' => ?PrincipalName,
    ?'type' => ?PrincipalType,
  ) $s = shape()) {
    $this->access = $s['access'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type PrincipalList = vec<Principal>;

type PrincipalName = string;

type PrincipalType = string;

type QueryId = string;

class QueryRequest {
  public ?AttributeFilter $attribute_filter;
  public ?FacetList $facets;
  public ?IndexId $index_id;
  public int $page_number;
  public int $page_size;
  public ?QueryResultType $query_result_type_filter;
  public ?QueryText $query_text;
  public ?DocumentAttributeKeyList $requested_document_attributes;

  public function __construct(shape(
    ?'attribute_filter' => ?AttributeFilter,
    ?'facets' => ?FacetList,
    ?'index_id' => ?IndexId,
    ?'page_number' => int,
    ?'page_size' => int,
    ?'query_result_type_filter' => ?QueryResultType,
    ?'query_text' => ?QueryText,
    ?'requested_document_attributes' => ?DocumentAttributeKeyList,
  ) $s = shape()) {
    $this->attribute_filter = $s['attribute_filter'] ?? null;
    $this->facets = $s['facets'] ?? vec[];
    $this->index_id = $s['index_id'] ?? '';
    $this->page_number = $s['page_number'] ?? 0;
    $this->page_size = $s['page_size'] ?? 0;
    $this->query_result_type_filter = $s['query_result_type_filter'] ?? '';
    $this->query_text = $s['query_text'] ?? '';
    $this->requested_document_attributes = $s['requested_document_attributes'] ?? vec[];
  }
}

class QueryResult {
  public ?FacetResultList $facet_results;
  public ?QueryId $query_id;
  public ?QueryResultItemList $result_items;
  public int $total_number_of_results;

  public function __construct(shape(
    ?'facet_results' => ?FacetResultList,
    ?'query_id' => ?QueryId,
    ?'result_items' => ?QueryResultItemList,
    ?'total_number_of_results' => int,
  ) $s = shape()) {
    $this->facet_results = $s['facet_results'] ?? vec[];
    $this->query_id = $s['query_id'] ?? '';
    $this->result_items = $s['result_items'] ?? vec[];
    $this->total_number_of_results = $s['total_number_of_results'] ?? 0;
  }
}

class QueryResultItem {
  public ?AdditionalResultAttributeList $additional_attributes;
  public ?DocumentAttributeList $document_attributes;
  public ?TextWithHighlights $document_excerpt;
  public ?DocumentId $document_id;
  public ?TextWithHighlights $document_title;
  public ?Url $document_uri;
  public ?ResultId $id;
  public ?QueryResultType $type;

  public function __construct(shape(
    ?'additional_attributes' => ?AdditionalResultAttributeList,
    ?'document_attributes' => ?DocumentAttributeList,
    ?'document_excerpt' => ?TextWithHighlights,
    ?'document_id' => ?DocumentId,
    ?'document_title' => ?TextWithHighlights,
    ?'document_uri' => ?Url,
    ?'id' => ?ResultId,
    ?'type' => ?QueryResultType,
  ) $s = shape()) {
    $this->additional_attributes = $s['additional_attributes'] ?? vec[];
    $this->document_attributes = $s['document_attributes'] ?? vec[];
    $this->document_excerpt = $s['document_excerpt'] ?? null;
    $this->document_id = $s['document_id'] ?? '';
    $this->document_title = $s['document_title'] ?? null;
    $this->document_uri = $s['document_uri'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type QueryResultItemList = vec<QueryResultItem>;

type QueryResultType = string;

type QueryText = string;

type ReadAccessType = string;

class Relevance {
  public ?Duration $duration;
  public ?DocumentMetadataBoolean $freshness;
  public ?Importance $importance;
  public ?Order $rank_order;
  public ?ValueImportanceMap $value_importance_map;

  public function __construct(shape(
    ?'duration' => ?Duration,
    ?'freshness' => ?DocumentMetadataBoolean,
    ?'importance' => ?Importance,
    ?'rank_order' => ?Order,
    ?'value_importance_map' => ?ValueImportanceMap,
  ) $s = shape()) {
    $this->duration = $s['duration'] ?? '';
    $this->freshness = $s['freshness'] ?? false;
    $this->importance = $s['importance'] ?? 0;
    $this->rank_order = $s['rank_order'] ?? '';
    $this->value_importance_map = $s['value_importance_map'] ?? dict[];
  }
}

class RelevanceFeedback {
  public ?RelevanceType $relevance_value;
  public ?ResultId $result_id;

  public function __construct(shape(
    ?'relevance_value' => ?RelevanceType,
    ?'result_id' => ?ResultId,
  ) $s = shape()) {
    $this->relevance_value = $s['relevance_value'] ?? '';
    $this->result_id = $s['result_id'] ?? '';
  }
}

type RelevanceFeedbackList = vec<RelevanceFeedback>;

type RelevanceType = string;

class ResourceAlreadyExistException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

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

class ResourceUnavailableException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ResultId = string;

type RoleArn = string;

type S3BucketName = string;

class S3DataSourceConfiguration {
  public ?AccessControlListConfiguration $access_control_list_configuration;
  public ?S3BucketName $bucket_name;
  public ?DocumentsMetadataConfiguration $documents_metadata_configuration;
  public ?DataSourceInclusionsExclusionsStrings $exclusion_patterns;
  public ?DataSourceInclusionsExclusionsStrings $inclusion_prefixes;

  public function __construct(shape(
    ?'access_control_list_configuration' => ?AccessControlListConfiguration,
    ?'bucket_name' => ?S3BucketName,
    ?'documents_metadata_configuration' => ?DocumentsMetadataConfiguration,
    ?'exclusion_patterns' => ?DataSourceInclusionsExclusionsStrings,
    ?'inclusion_prefixes' => ?DataSourceInclusionsExclusionsStrings,
  ) $s = shape()) {
    $this->access_control_list_configuration = $s['access_control_list_configuration'] ?? null;
    $this->bucket_name = $s['bucket_name'] ?? '';
    $this->documents_metadata_configuration = $s['documents_metadata_configuration'] ?? null;
    $this->exclusion_patterns = $s['exclusion_patterns'] ?? vec[];
    $this->inclusion_prefixes = $s['inclusion_prefixes'] ?? vec[];
  }
}

type S3ObjectKey = string;

class S3Path {
  public ?S3BucketName $bucket;
  public ?S3ObjectKey $key;

  public function __construct(shape(
    ?'bucket' => ?S3BucketName,
    ?'key' => ?S3ObjectKey,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->key = $s['key'] ?? '';
  }
}

type ScanSchedule = string;

class Search {
  public bool $displayable;
  public bool $facetable;
  public bool $searchable;

  public function __construct(shape(
    ?'displayable' => bool,
    ?'facetable' => bool,
    ?'searchable' => bool,
  ) $s = shape()) {
    $this->displayable = $s['displayable'] ?? false;
    $this->facetable = $s['facetable'] ?? false;
    $this->searchable = $s['searchable'] ?? false;
  }
}

type SecretArn = string;

type SecurityGroupIdList = vec<VpcSecurityGroupId>;

class ServerSideEncryptionConfiguration {
  public ?KmsKeyId $kms_key_id;

  public function __construct(shape(
    ?'kms_key_id' => ?KmsKeyId,
  ) $s = shape()) {
    $this->kms_key_id = $s['kms_key_id'] ?? '';
  }
}

class ServiceQuotaExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class SharePointConfiguration {
  public bool $crawl_attachments;
  public ?DataSourceFieldName $document_title_field_name;
  public ?DataSourceInclusionsExclusionsStrings $exclusion_patterns;
  public ?DataSourceToIndexFieldMappingList $field_mappings;
  public ?DataSourceInclusionsExclusionsStrings $inclusion_patterns;
  public ?SecretArn $secret_arn;
  public ?SharePointVersion $share_point_version;
  public ?SharePointUrlList $urls;
  public bool $use_change_log;
  public ?DataSourceVpcConfiguration $vpc_configuration;

  public function __construct(shape(
    ?'crawl_attachments' => bool,
    ?'document_title_field_name' => ?DataSourceFieldName,
    ?'exclusion_patterns' => ?DataSourceInclusionsExclusionsStrings,
    ?'field_mappings' => ?DataSourceToIndexFieldMappingList,
    ?'inclusion_patterns' => ?DataSourceInclusionsExclusionsStrings,
    ?'secret_arn' => ?SecretArn,
    ?'share_point_version' => ?SharePointVersion,
    ?'urls' => ?SharePointUrlList,
    ?'use_change_log' => bool,
    ?'vpc_configuration' => ?DataSourceVpcConfiguration,
  ) $s = shape()) {
    $this->crawl_attachments = $s['crawl_attachments'] ?? false;
    $this->document_title_field_name = $s['document_title_field_name'] ?? '';
    $this->exclusion_patterns = $s['exclusion_patterns'] ?? vec[];
    $this->field_mappings = $s['field_mappings'] ?? vec[];
    $this->inclusion_patterns = $s['inclusion_patterns'] ?? vec[];
    $this->secret_arn = $s['secret_arn'] ?? '';
    $this->share_point_version = $s['share_point_version'] ?? '';
    $this->urls = $s['urls'] ?? vec[];
    $this->use_change_log = $s['use_change_log'] ?? false;
    $this->vpc_configuration = $s['vpc_configuration'] ?? null;
  }
}

type SharePointUrlList = vec<Url>;

type SharePointVersion = string;

class StartDataSourceSyncJobRequest {
  public ?DataSourceId $id;
  public ?IndexId $index_id;

  public function __construct(shape(
    ?'id' => ?DataSourceId,
    ?'index_id' => ?IndexId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->index_id = $s['index_id'] ?? '';
  }
}

class StartDataSourceSyncJobResponse {
  public string $execution_id;

  public function __construct(shape(
    ?'execution_id' => string,
  ) $s = shape()) {
    $this->execution_id = $s['execution_id'] ?? '';
  }
}

class StopDataSourceSyncJobRequest {
  public ?DataSourceId $id;
  public ?IndexId $index_id;

  public function __construct(shape(
    ?'id' => ?DataSourceId,
    ?'index_id' => ?IndexId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->index_id = $s['index_id'] ?? '';
  }
}

type String = string;

class SubmitFeedbackRequest {
  public ?ClickFeedbackList $click_feedback_items;
  public ?IndexId $index_id;
  public ?QueryId $query_id;
  public ?RelevanceFeedbackList $relevance_feedback_items;

  public function __construct(shape(
    ?'click_feedback_items' => ?ClickFeedbackList,
    ?'index_id' => ?IndexId,
    ?'query_id' => ?QueryId,
    ?'relevance_feedback_items' => ?RelevanceFeedbackList,
  ) $s = shape()) {
    $this->click_feedback_items = $s['click_feedback_items'] ?? vec[];
    $this->index_id = $s['index_id'] ?? '';
    $this->query_id = $s['query_id'] ?? '';
    $this->relevance_feedback_items = $s['relevance_feedback_items'] ?? vec[];
  }
}

type SubnetId = string;

type SubnetIdList = vec<SubnetId>;

type TableName = string;

class TextDocumentStatistics {
  public ?IndexedTextDocumentsCount $indexed_text_documents_count;

  public function __construct(shape(
    ?'indexed_text_documents_count' => ?IndexedTextDocumentsCount,
  ) $s = shape()) {
    $this->indexed_text_documents_count = $s['indexed_text_documents_count'] ?? 0;
  }
}

class TextWithHighlights {
  public ?HighlightList $highlights;
  public string $text;

  public function __construct(shape(
    ?'highlights' => ?HighlightList,
    ?'text' => string,
  ) $s = shape()) {
    $this->highlights = $s['highlights'] ?? vec[];
    $this->text = $s['text'] ?? '';
  }
}

class ThrottlingException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TimeRange {
  public ?Timestamp $end_time;
  public ?Timestamp $start_time;

  public function __construct(shape(
    ?'end_time' => ?Timestamp,
    ?'start_time' => ?Timestamp,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->start_time = $s['start_time'] ?? 0;
  }
}

type Timestamp = int;

type Title = string;

class UpdateDataSourceRequest {
  public ?DataSourceConfiguration $configuration;
  public ?Description $description;
  public ?DataSourceId $id;
  public ?IndexId $index_id;
  public ?DataSourceName $name;
  public ?RoleArn $role_arn;
  public ?ScanSchedule $schedule;

  public function __construct(shape(
    ?'configuration' => ?DataSourceConfiguration,
    ?'description' => ?Description,
    ?'id' => ?DataSourceId,
    ?'index_id' => ?IndexId,
    ?'name' => ?DataSourceName,
    ?'role_arn' => ?RoleArn,
    ?'schedule' => ?ScanSchedule,
  ) $s = shape()) {
    $this->configuration = $s['configuration'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->index_id = $s['index_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->schedule = $s['schedule'] ?? '';
  }
}

class UpdateIndexRequest {
  public ?Description $description;
  public ?DocumentMetadataConfigurationList $document_metadata_configuration_updates;
  public ?IndexId $id;
  public ?IndexName $name;
  public ?RoleArn $role_arn;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'document_metadata_configuration_updates' => ?DocumentMetadataConfigurationList,
    ?'id' => ?IndexId,
    ?'name' => ?IndexName,
    ?'role_arn' => ?RoleArn,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->document_metadata_configuration_updates = $s['document_metadata_configuration_updates'] ?? vec[];
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

type Url = string;

class ValidationException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ValueImportanceMap = dict<ValueImportanceMapKey, Importance>;

type ValueImportanceMapKey = string;

type VpcSecurityGroupId = string;


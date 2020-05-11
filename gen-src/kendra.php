<?hh // strict
namespace slack\aws\kendra;

interface kendra {
  public function BatchDeleteDocument(BatchDeleteDocumentRequest): Awaitable<Errors\Result<BatchDeleteDocumentResponse>>;
  public function BatchPutDocument(BatchPutDocumentRequest): Awaitable<Errors\Result<BatchPutDocumentResponse>>;
  public function CreateDataSource(CreateDataSourceRequest): Awaitable<Errors\Result<CreateDataSourceResponse>>;
  public function CreateFaq(CreateFaqRequest): Awaitable<Errors\Result<CreateFaqResponse>>;
  public function CreateIndex(CreateIndexRequest): Awaitable<Errors\Result<CreateIndexResponse>>;
  public function DeleteFaq(DeleteFaqRequest): Awaitable<Errors\Error>;
  public function DeleteIndex(DeleteIndexRequest): Awaitable<Errors\Error>;
  public function DescribeDataSource(DescribeDataSourceRequest): Awaitable<Errors\Result<DescribeDataSourceResponse>>;
  public function DescribeFaq(DescribeFaqRequest): Awaitable<Errors\Result<DescribeFaqResponse>>;
  public function DescribeIndex(DescribeIndexRequest): Awaitable<Errors\Result<DescribeIndexResponse>>;
  public function ListDataSourceSyncJobs(ListDataSourceSyncJobsRequest): Awaitable<Errors\Result<ListDataSourceSyncJobsResponse>>;
  public function ListDataSources(ListDataSourcesRequest): Awaitable<Errors\Result<ListDataSourcesResponse>>;
  public function ListFaqs(ListFaqsRequest): Awaitable<Errors\Result<ListFaqsResponse>>;
  public function ListIndices(ListIndicesRequest): Awaitable<Errors\Result<ListIndicesResponse>>;
  public function Query(QueryRequest): Awaitable<Errors\Result<QueryResult>>;
  public function StartDataSourceSyncJob(StartDataSourceSyncJobRequest): Awaitable<Errors\Result<StartDataSourceSyncJobResponse>>;
  public function StopDataSourceSyncJob(StopDataSourceSyncJobRequest): Awaitable<Errors\Error>;
  public function SubmitFeedback(SubmitFeedbackRequest): Awaitable<Errors\Error>;
  public function UpdateDataSource(UpdateDataSourceRequest): Awaitable<Errors\Error>;
  public function UpdateIndex(UpdateIndexRequest): Awaitable<Errors\Error>;
}

class AccessControlListConfiguration {
  public S3ObjectKey $key_path;

  public function __construct(shape(
  ?'key_path' => S3ObjectKey,
  ) $s = shape()) {
    $this->key_path = $key_path ?? "";
  }
}

class AccessDeniedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class AclConfiguration {
  public ColumnName $allowed_groups_column_name;

  public function __construct(shape(
  ?'allowed_groups_column_name' => ColumnName,
  ) $s = shape()) {
    $this->allowed_groups_column_name = $allowed_groups_column_name ?? "";
  }
}

class AdditionalResultAttribute {
  public string $key;
  public AdditionalResultAttributeValue $value;
  public AdditionalResultAttributeValueType $value_type;

  public function __construct(shape(
  ?'key' => string,
  ?'value' => AdditionalResultAttributeValue,
  ?'value_type' => AdditionalResultAttributeValueType,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? null;
    $this->value_type = $value_type ?? "";
  }
}

type AdditionalResultAttributeList = vec<AdditionalResultAttribute>;

class AdditionalResultAttributeValue {
  public TextWithHighlights $text_with_highlights_value;

  public function __construct(shape(
  ?'text_with_highlights_value' => TextWithHighlights,
  ) $s = shape()) {
    $this->text_with_highlights_value = $text_with_highlights_value ?? null;
  }
}

type AdditionalResultAttributeValueType = string;

class AttributeFilter {
  public AttributeFilterList $and_all_filters;
  public DocumentAttribute $contains_all;
  public DocumentAttribute $contains_any;
  public DocumentAttribute $equals_to;
  public DocumentAttribute $greater_than;
  public DocumentAttribute $greater_than_or_equals;
  public DocumentAttribute $less_than;
  public DocumentAttribute $less_than_or_equals;
  public AttributeFilter $not_filter;
  public AttributeFilterList $or_all_filters;

  public function __construct(shape(
  ?'and_all_filters' => AttributeFilterList,
  ?'contains_all' => DocumentAttribute,
  ?'contains_any' => DocumentAttribute,
  ?'equals_to' => DocumentAttribute,
  ?'greater_than' => DocumentAttribute,
  ?'greater_than_or_equals' => DocumentAttribute,
  ?'less_than' => DocumentAttribute,
  ?'less_than_or_equals' => DocumentAttribute,
  ?'not_filter' => AttributeFilter,
  ?'or_all_filters' => AttributeFilterList,
  ) $s = shape()) {
    $this->and_all_filters = $and_all_filters ?? [];
    $this->contains_all = $contains_all ?? null;
    $this->contains_any = $contains_any ?? null;
    $this->equals_to = $equals_to ?? null;
    $this->greater_than = $greater_than ?? null;
    $this->greater_than_or_equals = $greater_than_or_equals ?? null;
    $this->less_than = $less_than ?? null;
    $this->less_than_or_equals = $less_than_or_equals ?? null;
    $this->not_filter = $not_filter ?? null;
    $this->or_all_filters = $or_all_filters ?? [];
  }
}

type AttributeFilterList = vec<AttributeFilter>;

class BatchDeleteDocumentRequest {
  public DocumentIdList $document_id_list;
  public IndexId $index_id;

  public function __construct(shape(
  ?'document_id_list' => DocumentIdList,
  ?'index_id' => IndexId,
  ) $s = shape()) {
    $this->document_id_list = $document_id_list ?? [];
    $this->index_id = $index_id ?? "";
  }
}

class BatchDeleteDocumentResponse {
  public BatchDeleteDocumentResponseFailedDocuments $failed_documents;

  public function __construct(shape(
  ?'failed_documents' => BatchDeleteDocumentResponseFailedDocuments,
  ) $s = shape()) {
    $this->failed_documents = $failed_documents ?? [];
  }
}

class BatchDeleteDocumentResponseFailedDocument {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public DocumentId $id;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => ErrorMessage,
  ?'id' => DocumentId,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->id = $id ?? "";
  }
}

type BatchDeleteDocumentResponseFailedDocuments = vec<BatchDeleteDocumentResponseFailedDocument>;

class BatchPutDocumentRequest {
  public DocumentList $documents;
  public IndexId $index_id;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'documents' => DocumentList,
  ?'index_id' => IndexId,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->documents = $documents ?? [];
    $this->index_id = $index_id ?? "";
    $this->role_arn = $role_arn ?? "";
  }
}

class BatchPutDocumentResponse {
  public BatchPutDocumentResponseFailedDocuments $failed_documents;

  public function __construct(shape(
  ?'failed_documents' => BatchPutDocumentResponseFailedDocuments,
  ) $s = shape()) {
    $this->failed_documents = $failed_documents ?? [];
  }
}

class BatchPutDocumentResponseFailedDocument {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public DocumentId $id;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => ErrorMessage,
  ?'id' => DocumentId,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->id = $id ?? "";
  }
}

type BatchPutDocumentResponseFailedDocuments = vec<BatchPutDocumentResponseFailedDocument>;

type Blob = string;

type Boolean = bool;

type ChangeDetectingColumns = vec<ColumnName>;

class ClickFeedback {
  public Timestamp $click_time;
  public ResultId $result_id;

  public function __construct(shape(
  ?'click_time' => Timestamp,
  ?'result_id' => ResultId,
  ) $s = shape()) {
    $this->click_time = $click_time ?? 0;
    $this->result_id = $result_id ?? "";
  }
}

type ClickFeedbackList = vec<ClickFeedback>;

type ClientTokenName = string;

class ColumnConfiguration {
  public ChangeDetectingColumns $change_detecting_columns;
  public ColumnName $document_data_column_name;
  public ColumnName $document_id_column_name;
  public ColumnName $document_title_column_name;
  public DataSourceToIndexFieldMappingList $field_mappings;

  public function __construct(shape(
  ?'change_detecting_columns' => ChangeDetectingColumns,
  ?'document_data_column_name' => ColumnName,
  ?'document_id_column_name' => ColumnName,
  ?'document_title_column_name' => ColumnName,
  ?'field_mappings' => DataSourceToIndexFieldMappingList,
  ) $s = shape()) {
    $this->change_detecting_columns = $change_detecting_columns ?? [];
    $this->document_data_column_name = $document_data_column_name ?? "";
    $this->document_id_column_name = $document_id_column_name ?? "";
    $this->document_title_column_name = $document_title_column_name ?? "";
    $this->field_mappings = $field_mappings ?? [];
  }
}

type ColumnName = string;

class ConflictException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ConnectionConfiguration {
  public DatabaseHost $database_host;
  public DatabaseName $database_name;
  public DatabasePort $database_port;
  public SecretArn $secret_arn;
  public TableName $table_name;

  public function __construct(shape(
  ?'database_host' => DatabaseHost,
  ?'database_name' => DatabaseName,
  ?'database_port' => DatabasePort,
  ?'secret_arn' => SecretArn,
  ?'table_name' => TableName,
  ) $s = shape()) {
    $this->database_host = $database_host ?? "";
    $this->database_name = $database_name ?? "";
    $this->database_port = $database_port ?? 0;
    $this->secret_arn = $secret_arn ?? "";
    $this->table_name = $table_name ?? "";
  }
}

type ContentType = string;

class CreateDataSourceRequest {
  public DataSourceConfiguration $configuration;
  public Description $description;
  public IndexId $index_id;
  public DataSourceName $name;
  public RoleArn $role_arn;
  public ScanSchedule $schedule;
  public DataSourceType $type;

  public function __construct(shape(
  ?'configuration' => DataSourceConfiguration,
  ?'description' => Description,
  ?'index_id' => IndexId,
  ?'name' => DataSourceName,
  ?'role_arn' => RoleArn,
  ?'schedule' => ScanSchedule,
  ?'type' => DataSourceType,
  ) $s = shape()) {
    $this->configuration = $configuration ?? null;
    $this->description = $description ?? "";
    $this->index_id = $index_id ?? "";
    $this->name = $name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->schedule = $schedule ?? "";
    $this->type = $type ?? "";
  }
}

class CreateDataSourceResponse {
  public DataSourceId $id;

  public function __construct(shape(
  ?'id' => DataSourceId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class CreateFaqRequest {
  public Description $description;
  public IndexId $index_id;
  public FaqName $name;
  public RoleArn $role_arn;
  public S3Path $s_3_path;

  public function __construct(shape(
  ?'description' => Description,
  ?'index_id' => IndexId,
  ?'name' => FaqName,
  ?'role_arn' => RoleArn,
  ?'s_3_path' => S3Path,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->index_id = $index_id ?? "";
    $this->name = $name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->s_3_path = $s_3_path ?? null;
  }
}

class CreateFaqResponse {
  public FaqId $id;

  public function __construct(shape(
  ?'id' => FaqId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class CreateIndexRequest {
  public ClientTokenName $client_token;
  public Description $description;
  public IndexName $name;
  public RoleArn $role_arn;
  public ServerSideEncryptionConfiguration $server_side_encryption_configuration;

  public function __construct(shape(
  ?'client_token' => ClientTokenName,
  ?'description' => Description,
  ?'name' => IndexName,
  ?'role_arn' => RoleArn,
  ?'server_side_encryption_configuration' => ServerSideEncryptionConfiguration,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->server_side_encryption_configuration = $server_side_encryption_configuration ?? null;
  }
}

class CreateIndexResponse {
  public IndexId $id;

  public function __construct(shape(
  ?'id' => IndexId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class DataSourceConfiguration {
  public DatabaseConfiguration $database_configuration;
  public S3DataSourceConfiguration $s_3_configuration;
  public SharePointConfiguration $share_point_configuration;

  public function __construct(shape(
  ?'database_configuration' => DatabaseConfiguration,
  ?'s_3_configuration' => S3DataSourceConfiguration,
  ?'share_point_configuration' => SharePointConfiguration,
  ) $s = shape()) {
    $this->database_configuration = $database_configuration ?? null;
    $this->s_3_configuration = $s_3_configuration ?? null;
    $this->share_point_configuration = $share_point_configuration ?? null;
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
  public Timestamp $created_at;
  public DataSourceId $id;
  public DataSourceName $name;
  public DataSourceStatus $status;
  public DataSourceType $type;
  public Timestamp $updated_at;

  public function __construct(shape(
  ?'created_at' => Timestamp,
  ?'id' => DataSourceId,
  ?'name' => DataSourceName,
  ?'status' => DataSourceStatus,
  ?'type' => DataSourceType,
  ?'updated_at' => Timestamp,
  ) $s = shape()) {
    $this->created_at = $created_at ?? 0;
    $this->id = $id ?? "";
    $this->name = $name ?? "";
    $this->status = $status ?? "";
    $this->type = $type ?? "";
    $this->updated_at = $updated_at ?? 0;
  }
}

type DataSourceSummaryList = vec<DataSourceSummary>;

class DataSourceSyncJob {
  public string $data_source_error_code;
  public Timestamp $end_time;
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public string $execution_id;
  public Timestamp $start_time;
  public DataSourceSyncJobStatus $status;

  public function __construct(shape(
  ?'data_source_error_code' => string,
  ?'end_time' => Timestamp,
  ?'error_code' => ErrorCode,
  ?'error_message' => ErrorMessage,
  ?'execution_id' => string,
  ?'start_time' => Timestamp,
  ?'status' => DataSourceSyncJobStatus,
  ) $s = shape()) {
    $this->data_source_error_code = $data_source_error_code ?? "";
    $this->end_time = $end_time ?? 0;
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->execution_id = $execution_id ?? "";
    $this->start_time = $start_time ?? 0;
    $this->status = $status ?? "";
  }
}

type DataSourceSyncJobHistoryList = vec<DataSourceSyncJob>;

type DataSourceSyncJobStatus = string;

class DataSourceToIndexFieldMapping {
  public DataSourceFieldName $data_source_field_name;
  public DataSourceDateFieldFormat $date_field_format;
  public IndexFieldName $index_field_name;

  public function __construct(shape(
  ?'data_source_field_name' => DataSourceFieldName,
  ?'date_field_format' => DataSourceDateFieldFormat,
  ?'index_field_name' => IndexFieldName,
  ) $s = shape()) {
    $this->data_source_field_name = $data_source_field_name ?? "";
    $this->date_field_format = $date_field_format ?? "";
    $this->index_field_name = $index_field_name ?? "";
  }
}

type DataSourceToIndexFieldMappingList = vec<DataSourceToIndexFieldMapping>;

type DataSourceType = string;

class DataSourceVpcConfiguration {
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;

  public function __construct(shape(
  ?'security_group_ids' => SecurityGroupIdList,
  ?'subnet_ids' => SubnetIdList,
  ) $s = shape()) {
    $this->security_group_ids = $security_group_ids ?? [];
    $this->subnet_ids = $subnet_ids ?? [];
  }
}

class DatabaseConfiguration {
  public AclConfiguration $acl_configuration;
  public ColumnConfiguration $column_configuration;
  public ConnectionConfiguration $connection_configuration;
  public DatabaseEngineType $database_engine_type;
  public DataSourceVpcConfiguration $vpc_configuration;

  public function __construct(shape(
  ?'acl_configuration' => AclConfiguration,
  ?'column_configuration' => ColumnConfiguration,
  ?'connection_configuration' => ConnectionConfiguration,
  ?'database_engine_type' => DatabaseEngineType,
  ?'vpc_configuration' => DataSourceVpcConfiguration,
  ) $s = shape()) {
    $this->acl_configuration = $acl_configuration ?? null;
    $this->column_configuration = $column_configuration ?? null;
    $this->connection_configuration = $connection_configuration ?? null;
    $this->database_engine_type = $database_engine_type ?? "";
    $this->vpc_configuration = $vpc_configuration ?? null;
  }
}

type DatabaseEngineType = string;

type DatabaseHost = string;

type DatabaseName = string;

type DatabasePort = int;

class DeleteFaqRequest {
  public FaqId $id;
  public IndexId $index_id;

  public function __construct(shape(
  ?'id' => FaqId,
  ?'index_id' => IndexId,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->index_id = $index_id ?? "";
  }
}

class DeleteIndexRequest {
  public IndexId $id;

  public function __construct(shape(
  ?'id' => IndexId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class DescribeDataSourceRequest {
  public DataSourceId $id;
  public IndexId $index_id;

  public function __construct(shape(
  ?'id' => DataSourceId,
  ?'index_id' => IndexId,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->index_id = $index_id ?? "";
  }
}

class DescribeDataSourceResponse {
  public DataSourceConfiguration $configuration;
  public Timestamp $created_at;
  public Description $description;
  public ErrorMessage $error_message;
  public DataSourceId $id;
  public IndexId $index_id;
  public DataSourceName $name;
  public RoleArn $role_arn;
  public ScanSchedule $schedule;
  public DataSourceStatus $status;
  public DataSourceType $type;
  public Timestamp $updated_at;

  public function __construct(shape(
  ?'configuration' => DataSourceConfiguration,
  ?'created_at' => Timestamp,
  ?'description' => Description,
  ?'error_message' => ErrorMessage,
  ?'id' => DataSourceId,
  ?'index_id' => IndexId,
  ?'name' => DataSourceName,
  ?'role_arn' => RoleArn,
  ?'schedule' => ScanSchedule,
  ?'status' => DataSourceStatus,
  ?'type' => DataSourceType,
  ?'updated_at' => Timestamp,
  ) $s = shape()) {
    $this->configuration = $configuration ?? null;
    $this->created_at = $created_at ?? 0;
    $this->description = $description ?? "";
    $this->error_message = $error_message ?? "";
    $this->id = $id ?? "";
    $this->index_id = $index_id ?? "";
    $this->name = $name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->schedule = $schedule ?? "";
    $this->status = $status ?? "";
    $this->type = $type ?? "";
    $this->updated_at = $updated_at ?? 0;
  }
}

class DescribeFaqRequest {
  public FaqId $id;
  public IndexId $index_id;

  public function __construct(shape(
  ?'id' => FaqId,
  ?'index_id' => IndexId,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->index_id = $index_id ?? "";
  }
}

class DescribeFaqResponse {
  public Timestamp $created_at;
  public Description $description;
  public ErrorMessage $error_message;
  public FaqId $id;
  public IndexId $index_id;
  public FaqName $name;
  public RoleArn $role_arn;
  public S3Path $s_3_path;
  public FaqStatus $status;
  public Timestamp $updated_at;

  public function __construct(shape(
  ?'created_at' => Timestamp,
  ?'description' => Description,
  ?'error_message' => ErrorMessage,
  ?'id' => FaqId,
  ?'index_id' => IndexId,
  ?'name' => FaqName,
  ?'role_arn' => RoleArn,
  ?'s_3_path' => S3Path,
  ?'status' => FaqStatus,
  ?'updated_at' => Timestamp,
  ) $s = shape()) {
    $this->created_at = $created_at ?? 0;
    $this->description = $description ?? "";
    $this->error_message = $error_message ?? "";
    $this->id = $id ?? "";
    $this->index_id = $index_id ?? "";
    $this->name = $name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->s_3_path = $s_3_path ?? null;
    $this->status = $status ?? "";
    $this->updated_at = $updated_at ?? 0;
  }
}

class DescribeIndexRequest {
  public IndexId $id;

  public function __construct(shape(
  ?'id' => IndexId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class DescribeIndexResponse {
  public Timestamp $created_at;
  public Description $description;
  public DocumentMetadataConfigurationList $document_metadata_configurations;
  public ErrorMessage $error_message;
  public IndexId $id;
  public IndexStatistics $index_statistics;
  public IndexName $name;
  public RoleArn $role_arn;
  public ServerSideEncryptionConfiguration $server_side_encryption_configuration;
  public IndexStatus $status;
  public Timestamp $updated_at;

  public function __construct(shape(
  ?'created_at' => Timestamp,
  ?'description' => Description,
  ?'document_metadata_configurations' => DocumentMetadataConfigurationList,
  ?'error_message' => ErrorMessage,
  ?'id' => IndexId,
  ?'index_statistics' => IndexStatistics,
  ?'name' => IndexName,
  ?'role_arn' => RoleArn,
  ?'server_side_encryption_configuration' => ServerSideEncryptionConfiguration,
  ?'status' => IndexStatus,
  ?'updated_at' => Timestamp,
  ) $s = shape()) {
    $this->created_at = $created_at ?? 0;
    $this->description = $description ?? "";
    $this->document_metadata_configurations = $document_metadata_configurations ?? [];
    $this->error_message = $error_message ?? "";
    $this->id = $id ?? "";
    $this->index_statistics = $index_statistics ?? null;
    $this->name = $name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->server_side_encryption_configuration = $server_side_encryption_configuration ?? null;
    $this->status = $status ?? "";
    $this->updated_at = $updated_at ?? 0;
  }
}

type Description = string;

class Document {
  public PrincipalList $access_control_list;
  public DocumentAttributeList $attributes;
  public Blob $blob;
  public ContentType $content_type;
  public DocumentId $id;
  public S3Path $s_3_path;
  public Title $title;

  public function __construct(shape(
  ?'access_control_list' => PrincipalList,
  ?'attributes' => DocumentAttributeList,
  ?'blob' => Blob,
  ?'content_type' => ContentType,
  ?'id' => DocumentId,
  ?'s_3_path' => S3Path,
  ?'title' => Title,
  ) $s = shape()) {
    $this->access_control_list = $access_control_list ?? [];
    $this->attributes = $attributes ?? [];
    $this->blob = $blob ?? "";
    $this->content_type = $content_type ?? "";
    $this->id = $id ?? "";
    $this->s_3_path = $s_3_path ?? null;
    $this->title = $title ?? "";
  }
}

class DocumentAttribute {
  public DocumentAttributeKey $key;
  public DocumentAttributeValue $value;

  public function __construct(shape(
  ?'key' => DocumentAttributeKey,
  ?'value' => DocumentAttributeValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? null;
  }
}

type DocumentAttributeKey = string;

type DocumentAttributeKeyList = vec<DocumentAttributeKey>;

type DocumentAttributeList = vec<DocumentAttribute>;

type DocumentAttributeStringListValue = vec<String>;

type DocumentAttributeStringValue = string;

class DocumentAttributeValue {
  public Timestamp $date_value;
  public Long $long_value;
  public DocumentAttributeStringListValue $string_list_value;
  public DocumentAttributeStringValue $string_value;

  public function __construct(shape(
  ?'date_value' => Timestamp,
  ?'long_value' => Long,
  ?'string_list_value' => DocumentAttributeStringListValue,
  ?'string_value' => DocumentAttributeStringValue,
  ) $s = shape()) {
    $this->date_value = $date_value ?? 0;
    $this->long_value = $long_value ?? 0;
    $this->string_list_value = $string_list_value ?? [];
    $this->string_value = $string_value ?? "";
  }
}

class DocumentAttributeValueCountPair {
  public int $count;
  public DocumentAttributeValue $document_attribute_value;

  public function __construct(shape(
  ?'count' => int,
  ?'document_attribute_value' => DocumentAttributeValue,
  ) $s = shape()) {
    $this->count = $count ?? 0;
    $this->document_attribute_value = $document_attribute_value ?? null;
  }
}

type DocumentAttributeValueCountPairList = vec<DocumentAttributeValueCountPair>;

type DocumentAttributeValueType = string;

type DocumentId = string;

type DocumentIdList = vec<DocumentId>;

type DocumentList = vec<Document>;

type DocumentMetadataBoolean = bool;

class DocumentMetadataConfiguration {
  public DocumentMetadataConfigurationName $name;
  public Relevance $relevance;
  public Search $search;
  public DocumentAttributeValueType $type;

  public function __construct(shape(
  ?'name' => DocumentMetadataConfigurationName,
  ?'relevance' => Relevance,
  ?'search' => Search,
  ?'type' => DocumentAttributeValueType,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->relevance = $relevance ?? null;
    $this->search = $search ?? null;
    $this->type = $type ?? "";
  }
}

type DocumentMetadataConfigurationList = vec<DocumentMetadataConfiguration>;

type DocumentMetadataConfigurationName = string;

class DocumentsMetadataConfiguration {
  public S3ObjectKey $s_3_prefix;

  public function __construct(shape(
  ?'s_3_prefix' => S3ObjectKey,
  ) $s = shape()) {
    $this->s_3_prefix = $s_3_prefix ?? "";
  }
}

type Duration = string;

type ErrorCode = string;

type ErrorMessage = string;

class Facet {
  public DocumentAttributeKey $document_attribute_key;

  public function __construct(shape(
  ?'document_attribute_key' => DocumentAttributeKey,
  ) $s = shape()) {
    $this->document_attribute_key = $document_attribute_key ?? "";
  }
}

type FacetList = vec<Facet>;

class FacetResult {
  public DocumentAttributeKey $document_attribute_key;
  public DocumentAttributeValueCountPairList $document_attribute_value_count_pairs;

  public function __construct(shape(
  ?'document_attribute_key' => DocumentAttributeKey,
  ?'document_attribute_value_count_pairs' => DocumentAttributeValueCountPairList,
  ) $s = shape()) {
    $this->document_attribute_key = $document_attribute_key ?? "";
    $this->document_attribute_value_count_pairs = $document_attribute_value_count_pairs ?? [];
  }
}

type FacetResultList = vec<FacetResult>;

type FaqId = string;

type FaqName = string;

class FaqStatistics {
  public IndexedQuestionAnswersCount $indexed_question_answers_count;

  public function __construct(shape(
  ?'indexed_question_answers_count' => IndexedQuestionAnswersCount,
  ) $s = shape()) {
    $this->indexed_question_answers_count = $indexed_question_answers_count ?? 0;
  }
}

type FaqStatus = string;

class FaqSummary {
  public Timestamp $created_at;
  public FaqId $id;
  public FaqName $name;
  public FaqStatus $status;
  public Timestamp $updated_at;

  public function __construct(shape(
  ?'created_at' => Timestamp,
  ?'id' => FaqId,
  ?'name' => FaqName,
  ?'status' => FaqStatus,
  ?'updated_at' => Timestamp,
  ) $s = shape()) {
    $this->created_at = $created_at ?? 0;
    $this->id = $id ?? "";
    $this->name = $name ?? "";
    $this->status = $status ?? "";
    $this->updated_at = $updated_at ?? 0;
  }
}

type FaqSummaryItems = vec<FaqSummary>;

class Highlight {
  public int $begin_offset;
  public int $end_offset;
  public boolean $top_answer;

  public function __construct(shape(
  ?'begin_offset' => int,
  ?'end_offset' => int,
  ?'top_answer' => boolean,
  ) $s = shape()) {
    $this->begin_offset = $begin_offset ?? 0;
    $this->end_offset = $end_offset ?? 0;
    $this->top_answer = $top_answer ?? false;
  }
}

type HighlightList = vec<Highlight>;

type Importance = int;

class IndexConfigurationSummary {
  public Timestamp $created_at;
  public IndexId $id;
  public IndexName $name;
  public IndexStatus $status;
  public Timestamp $updated_at;

  public function __construct(shape(
  ?'created_at' => Timestamp,
  ?'id' => IndexId,
  ?'name' => IndexName,
  ?'status' => IndexStatus,
  ?'updated_at' => Timestamp,
  ) $s = shape()) {
    $this->created_at = $created_at ?? 0;
    $this->id = $id ?? "";
    $this->name = $name ?? "";
    $this->status = $status ?? "";
    $this->updated_at = $updated_at ?? 0;
  }
}

type IndexConfigurationSummaryList = vec<IndexConfigurationSummary>;

type IndexFieldName = string;

type IndexId = string;

type IndexName = string;

class IndexStatistics {
  public FaqStatistics $faq_statistics;
  public TextDocumentStatistics $text_document_statistics;

  public function __construct(shape(
  ?'faq_statistics' => FaqStatistics,
  ?'text_document_statistics' => TextDocumentStatistics,
  ) $s = shape()) {
    $this->faq_statistics = $faq_statistics ?? null;
    $this->text_document_statistics = $text_document_statistics ?? null;
  }
}

type IndexStatus = string;

type IndexedQuestionAnswersCount = int;

type IndexedTextDocumentsCount = int;

type Integer = int;

class InternalServerException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type KmsKeyId = string;

class ListDataSourceSyncJobsRequest {
  public DataSourceId $id;
  public IndexId $index_id;
  public MaxResultsIntegerForListDataSourceSyncJobsRequest $max_results;
  public NextToken $next_token;
  public TimeRange $start_time_filter;
  public DataSourceSyncJobStatus $status_filter;

  public function __construct(shape(
  ?'id' => DataSourceId,
  ?'index_id' => IndexId,
  ?'max_results' => MaxResultsIntegerForListDataSourceSyncJobsRequest,
  ?'next_token' => NextToken,
  ?'start_time_filter' => TimeRange,
  ?'status_filter' => DataSourceSyncJobStatus,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->index_id = $index_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->start_time_filter = $start_time_filter ?? null;
    $this->status_filter = $status_filter ?? "";
  }
}

class ListDataSourceSyncJobsResponse {
  public DataSourceSyncJobHistoryList $history;
  public NextToken $next_token;

  public function __construct(shape(
  ?'history' => DataSourceSyncJobHistoryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->history = $history ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListDataSourcesRequest {
  public IndexId $index_id;
  public MaxResultsIntegerForListDataSourcesRequest $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'index_id' => IndexId,
  ?'max_results' => MaxResultsIntegerForListDataSourcesRequest,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->index_id = $index_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListDataSourcesResponse {
  public NextToken $next_token;
  public DataSourceSummaryList $summary_items;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'summary_items' => DataSourceSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->summary_items = $summary_items ?? [];
  }
}

class ListFaqsRequest {
  public IndexId $index_id;
  public MaxResultsIntegerForListFaqsRequest $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'index_id' => IndexId,
  ?'max_results' => MaxResultsIntegerForListFaqsRequest,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->index_id = $index_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListFaqsResponse {
  public FaqSummaryItems $faq_summary_items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'faq_summary_items' => FaqSummaryItems,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->faq_summary_items = $faq_summary_items ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListIndicesRequest {
  public MaxResultsIntegerForListIndicesRequest $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResultsIntegerForListIndicesRequest,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListIndicesResponse {
  public IndexConfigurationSummaryList $index_configuration_summary_items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'index_configuration_summary_items' => IndexConfigurationSummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->index_configuration_summary_items = $index_configuration_summary_items ?? [];
    $this->next_token = $next_token ?? "";
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
  public ReadAccessType $access;
  public PrincipalName $name;
  public PrincipalType $type;

  public function __construct(shape(
  ?'access' => ReadAccessType,
  ?'name' => PrincipalName,
  ?'type' => PrincipalType,
  ) $s = shape()) {
    $this->access = $access ?? "";
    $this->name = $name ?? "";
    $this->type = $type ?? "";
  }
}

type PrincipalList = vec<Principal>;

type PrincipalName = string;

type PrincipalType = string;

type QueryId = string;

class QueryRequest {
  public AttributeFilter $attribute_filter;
  public FacetList $facets;
  public IndexId $index_id;
  public int $page_number;
  public int $page_size;
  public QueryResultType $query_result_type_filter;
  public QueryText $query_text;
  public DocumentAttributeKeyList $requested_document_attributes;

  public function __construct(shape(
  ?'attribute_filter' => AttributeFilter,
  ?'facets' => FacetList,
  ?'index_id' => IndexId,
  ?'page_number' => int,
  ?'page_size' => int,
  ?'query_result_type_filter' => QueryResultType,
  ?'query_text' => QueryText,
  ?'requested_document_attributes' => DocumentAttributeKeyList,
  ) $s = shape()) {
    $this->attribute_filter = $attribute_filter ?? null;
    $this->facets = $facets ?? [];
    $this->index_id = $index_id ?? "";
    $this->page_number = $page_number ?? 0;
    $this->page_size = $page_size ?? 0;
    $this->query_result_type_filter = $query_result_type_filter ?? "";
    $this->query_text = $query_text ?? "";
    $this->requested_document_attributes = $requested_document_attributes ?? [];
  }
}

class QueryResult {
  public FacetResultList $facet_results;
  public QueryId $query_id;
  public QueryResultItemList $result_items;
  public int $total_number_of_results;

  public function __construct(shape(
  ?'facet_results' => FacetResultList,
  ?'query_id' => QueryId,
  ?'result_items' => QueryResultItemList,
  ?'total_number_of_results' => int,
  ) $s = shape()) {
    $this->facet_results = $facet_results ?? [];
    $this->query_id = $query_id ?? "";
    $this->result_items = $result_items ?? [];
    $this->total_number_of_results = $total_number_of_results ?? 0;
  }
}

class QueryResultItem {
  public AdditionalResultAttributeList $additional_attributes;
  public DocumentAttributeList $document_attributes;
  public TextWithHighlights $document_excerpt;
  public DocumentId $document_id;
  public TextWithHighlights $document_title;
  public Url $document_uri;
  public ResultId $id;
  public QueryResultType $type;

  public function __construct(shape(
  ?'additional_attributes' => AdditionalResultAttributeList,
  ?'document_attributes' => DocumentAttributeList,
  ?'document_excerpt' => TextWithHighlights,
  ?'document_id' => DocumentId,
  ?'document_title' => TextWithHighlights,
  ?'document_uri' => Url,
  ?'id' => ResultId,
  ?'type' => QueryResultType,
  ) $s = shape()) {
    $this->additional_attributes = $additional_attributes ?? [];
    $this->document_attributes = $document_attributes ?? [];
    $this->document_excerpt = $document_excerpt ?? null;
    $this->document_id = $document_id ?? "";
    $this->document_title = $document_title ?? null;
    $this->document_uri = $document_uri ?? "";
    $this->id = $id ?? "";
    $this->type = $type ?? "";
  }
}

type QueryResultItemList = vec<QueryResultItem>;

type QueryResultType = string;

type QueryText = string;

type ReadAccessType = string;

class Relevance {
  public Duration $duration;
  public DocumentMetadataBoolean $freshness;
  public Importance $importance;
  public Order $rank_order;
  public ValueImportanceMap $value_importance_map;

  public function __construct(shape(
  ?'duration' => Duration,
  ?'freshness' => DocumentMetadataBoolean,
  ?'importance' => Importance,
  ?'rank_order' => Order,
  ?'value_importance_map' => ValueImportanceMap,
  ) $s = shape()) {
    $this->duration = $duration ?? "";
    $this->freshness = $freshness ?? false;
    $this->importance = $importance ?? 0;
    $this->rank_order = $rank_order ?? "";
    $this->value_importance_map = $value_importance_map ?? [];
  }
}

class RelevanceFeedback {
  public RelevanceType $relevance_value;
  public ResultId $result_id;

  public function __construct(shape(
  ?'relevance_value' => RelevanceType,
  ?'result_id' => ResultId,
  ) $s = shape()) {
    $this->relevance_value = $relevance_value ?? "";
    $this->result_id = $result_id ?? "";
  }
}

type RelevanceFeedbackList = vec<RelevanceFeedback>;

type RelevanceType = string;

class ResourceAlreadyExistException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceInUseException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceUnavailableException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ResultId = string;

type RoleArn = string;

type S3BucketName = string;

class S3DataSourceConfiguration {
  public AccessControlListConfiguration $access_control_list_configuration;
  public S3BucketName $bucket_name;
  public DocumentsMetadataConfiguration $documents_metadata_configuration;
  public DataSourceInclusionsExclusionsStrings $exclusion_patterns;
  public DataSourceInclusionsExclusionsStrings $inclusion_prefixes;

  public function __construct(shape(
  ?'access_control_list_configuration' => AccessControlListConfiguration,
  ?'bucket_name' => S3BucketName,
  ?'documents_metadata_configuration' => DocumentsMetadataConfiguration,
  ?'exclusion_patterns' => DataSourceInclusionsExclusionsStrings,
  ?'inclusion_prefixes' => DataSourceInclusionsExclusionsStrings,
  ) $s = shape()) {
    $this->access_control_list_configuration = $access_control_list_configuration ?? null;
    $this->bucket_name = $bucket_name ?? "";
    $this->documents_metadata_configuration = $documents_metadata_configuration ?? null;
    $this->exclusion_patterns = $exclusion_patterns ?? [];
    $this->inclusion_prefixes = $inclusion_prefixes ?? [];
  }
}

type S3ObjectKey = string;

class S3Path {
  public S3BucketName $bucket;
  public S3ObjectKey $key;

  public function __construct(shape(
  ?'bucket' => S3BucketName,
  ?'key' => S3ObjectKey,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->key = $key ?? "";
  }
}

type ScanSchedule = string;

class Search {
  public boolean $displayable;
  public boolean $facetable;
  public boolean $searchable;

  public function __construct(shape(
  ?'displayable' => boolean,
  ?'facetable' => boolean,
  ?'searchable' => boolean,
  ) $s = shape()) {
    $this->displayable = $displayable ?? false;
    $this->facetable = $facetable ?? false;
    $this->searchable = $searchable ?? false;
  }
}

type SecretArn = string;

type SecurityGroupIdList = vec<VpcSecurityGroupId>;

class ServerSideEncryptionConfiguration {
  public KmsKeyId $kms_key_id;

  public function __construct(shape(
  ?'kms_key_id' => KmsKeyId,
  ) $s = shape()) {
    $this->kms_key_id = $kms_key_id ?? "";
  }
}

class ServiceQuotaExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class SharePointConfiguration {
  public boolean $crawl_attachments;
  public DataSourceFieldName $document_title_field_name;
  public DataSourceInclusionsExclusionsStrings $exclusion_patterns;
  public DataSourceToIndexFieldMappingList $field_mappings;
  public DataSourceInclusionsExclusionsStrings $inclusion_patterns;
  public SecretArn $secret_arn;
  public SharePointVersion $share_point_version;
  public SharePointUrlList $urls;
  public boolean $use_change_log;
  public DataSourceVpcConfiguration $vpc_configuration;

  public function __construct(shape(
  ?'crawl_attachments' => boolean,
  ?'document_title_field_name' => DataSourceFieldName,
  ?'exclusion_patterns' => DataSourceInclusionsExclusionsStrings,
  ?'field_mappings' => DataSourceToIndexFieldMappingList,
  ?'inclusion_patterns' => DataSourceInclusionsExclusionsStrings,
  ?'secret_arn' => SecretArn,
  ?'share_point_version' => SharePointVersion,
  ?'urls' => SharePointUrlList,
  ?'use_change_log' => boolean,
  ?'vpc_configuration' => DataSourceVpcConfiguration,
  ) $s = shape()) {
    $this->crawl_attachments = $crawl_attachments ?? false;
    $this->document_title_field_name = $document_title_field_name ?? "";
    $this->exclusion_patterns = $exclusion_patterns ?? [];
    $this->field_mappings = $field_mappings ?? [];
    $this->inclusion_patterns = $inclusion_patterns ?? [];
    $this->secret_arn = $secret_arn ?? "";
    $this->share_point_version = $share_point_version ?? "";
    $this->urls = $urls ?? [];
    $this->use_change_log = $use_change_log ?? false;
    $this->vpc_configuration = $vpc_configuration ?? null;
  }
}

type SharePointUrlList = vec<Url>;

type SharePointVersion = string;

class StartDataSourceSyncJobRequest {
  public DataSourceId $id;
  public IndexId $index_id;

  public function __construct(shape(
  ?'id' => DataSourceId,
  ?'index_id' => IndexId,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->index_id = $index_id ?? "";
  }
}

class StartDataSourceSyncJobResponse {
  public string $execution_id;

  public function __construct(shape(
  ?'execution_id' => string,
  ) $s = shape()) {
    $this->execution_id = $execution_id ?? "";
  }
}

class StopDataSourceSyncJobRequest {
  public DataSourceId $id;
  public IndexId $index_id;

  public function __construct(shape(
  ?'id' => DataSourceId,
  ?'index_id' => IndexId,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->index_id = $index_id ?? "";
  }
}

type String = string;

class SubmitFeedbackRequest {
  public ClickFeedbackList $click_feedback_items;
  public IndexId $index_id;
  public QueryId $query_id;
  public RelevanceFeedbackList $relevance_feedback_items;

  public function __construct(shape(
  ?'click_feedback_items' => ClickFeedbackList,
  ?'index_id' => IndexId,
  ?'query_id' => QueryId,
  ?'relevance_feedback_items' => RelevanceFeedbackList,
  ) $s = shape()) {
    $this->click_feedback_items = $click_feedback_items ?? [];
    $this->index_id = $index_id ?? "";
    $this->query_id = $query_id ?? "";
    $this->relevance_feedback_items = $relevance_feedback_items ?? [];
  }
}

type SubnetId = string;

type SubnetIdList = vec<SubnetId>;

type TableName = string;

class TextDocumentStatistics {
  public IndexedTextDocumentsCount $indexed_text_documents_count;

  public function __construct(shape(
  ?'indexed_text_documents_count' => IndexedTextDocumentsCount,
  ) $s = shape()) {
    $this->indexed_text_documents_count = $indexed_text_documents_count ?? 0;
  }
}

class TextWithHighlights {
  public HighlightList $highlights;
  public string $text;

  public function __construct(shape(
  ?'highlights' => HighlightList,
  ?'text' => string,
  ) $s = shape()) {
    $this->highlights = $highlights ?? [];
    $this->text = $text ?? "";
  }
}

class ThrottlingException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class TimeRange {
  public Timestamp $end_time;
  public Timestamp $start_time;

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'start_time' => Timestamp,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->start_time = $start_time ?? 0;
  }
}

type Timestamp = int;

type Title = string;

class UpdateDataSourceRequest {
  public DataSourceConfiguration $configuration;
  public Description $description;
  public DataSourceId $id;
  public IndexId $index_id;
  public DataSourceName $name;
  public RoleArn $role_arn;
  public ScanSchedule $schedule;

  public function __construct(shape(
  ?'configuration' => DataSourceConfiguration,
  ?'description' => Description,
  ?'id' => DataSourceId,
  ?'index_id' => IndexId,
  ?'name' => DataSourceName,
  ?'role_arn' => RoleArn,
  ?'schedule' => ScanSchedule,
  ) $s = shape()) {
    $this->configuration = $configuration ?? null;
    $this->description = $description ?? "";
    $this->id = $id ?? "";
    $this->index_id = $index_id ?? "";
    $this->name = $name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->schedule = $schedule ?? "";
  }
}

class UpdateIndexRequest {
  public Description $description;
  public DocumentMetadataConfigurationList $document_metadata_configuration_updates;
  public IndexId $id;
  public IndexName $name;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'description' => Description,
  ?'document_metadata_configuration_updates' => DocumentMetadataConfigurationList,
  ?'id' => IndexId,
  ?'name' => IndexName,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->document_metadata_configuration_updates = $document_metadata_configuration_updates ?? [];
    $this->id = $id ?? "";
    $this->name = $name ?? "";
    $this->role_arn = $role_arn ?? "";
  }
}

type Url = string;

class ValidationException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ValueImportanceMap = dict<ValueImportanceMapKey, Importance>;

type ValueImportanceMapKey = string;

type VpcSecurityGroupId = string;


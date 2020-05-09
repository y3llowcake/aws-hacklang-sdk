<?hh // strict
namespace slack\aws\kendra;

interface kendra {
  public function BatchDeleteDocument(BatchDeleteDocumentRequest) Awaitable<Errors\Result<BatchDeleteDocumentResponse>>;
  public function ListDataSources(ListDataSourcesRequest) Awaitable<Errors\Result<ListDataSourcesResponse>>;
  public function UpdateIndex(UpdateIndexRequest) Awaitable<Errors\Error>;
  public function StopDataSourceSyncJob(StopDataSourceSyncJobRequest) Awaitable<Errors\Error>;
  public function SubmitFeedback(SubmitFeedbackRequest) Awaitable<Errors\Error>;
  public function BatchPutDocument(BatchPutDocumentRequest) Awaitable<Errors\Result<BatchPutDocumentResponse>>;
  public function DescribeDataSource(DescribeDataSourceRequest) Awaitable<Errors\Result<DescribeDataSourceResponse>>;
  public function DescribeIndex(DescribeIndexRequest) Awaitable<Errors\Result<DescribeIndexResponse>>;
  public function ListDataSourceSyncJobs(ListDataSourceSyncJobsRequest) Awaitable<Errors\Result<ListDataSourceSyncJobsResponse>>;
  public function ListFaqs(ListFaqsRequest) Awaitable<Errors\Result<ListFaqsResponse>>;
  public function ListIndices(ListIndicesRequest) Awaitable<Errors\Result<ListIndicesResponse>>;
  public function CreateFaq(CreateFaqRequest) Awaitable<Errors\Result<CreateFaqResponse>>;
  public function DeleteFaq(DeleteFaqRequest) Awaitable<Errors\Error>;
  public function DeleteIndex(DeleteIndexRequest) Awaitable<Errors\Error>;
  public function Query(QueryRequest) Awaitable<Errors\Result<QueryResult>>;
  public function CreateDataSource(CreateDataSourceRequest) Awaitable<Errors\Result<CreateDataSourceResponse>>;
  public function CreateIndex(CreateIndexRequest) Awaitable<Errors\Result<CreateIndexResponse>>;
  public function DescribeFaq(DescribeFaqRequest) Awaitable<Errors\Result<DescribeFaqResponse>>;
  public function StartDataSourceSyncJob(StartDataSourceSyncJobRequest) Awaitable<Errors\Result<StartDataSourceSyncJobResponse>>;
  public function UpdateDataSource(UpdateDataSourceRequest) Awaitable<Errors\Error>;
}

class ListFaqsRequest {
  public IndexId $index_id;
  public NextToken $next_token;
  public MaxResultsIntegerForListFaqsRequest $max_results;
}

class ResourceAlreadyExistException {
  public ErrorMessage $message;
}

class AdditionalResultAttribute {
  public string $key;
  public AdditionalResultAttributeValueType $value_type;
  public AdditionalResultAttributeValue $value;
}

class AttributeFilter {
  public AttributeFilterList $and_all_filters;
  public AttributeFilter $not_filter;
  public DocumentAttribute $greater_than;
  public DocumentAttribute $greater_than_or_equals;
  public AttributeFilterList $or_all_filters;
  public DocumentAttribute $equals_to;
  public DocumentAttribute $contains_all;
  public DocumentAttribute $contains_any;
  public DocumentAttribute $less_than;
  public DocumentAttribute $less_than_or_equals;
}

class AttributeFilterList {
}

class DatabaseEngineType {
}

class ErrorCode {
}

class IndexFieldName {
}

class ScanSchedule {
}

class DataSourceInclusionsExclusionsStrings {
}

class DescribeDataSourceResponse {
  public DataSourceName $name;
  public Timestamp $updated_at;
  public Description $description;
  public DataSourceStatus $status;
  public RoleArn $role_arn;
  public DataSourceId $id;
  public IndexId $index_id;
  public DataSourceType $type;
  public DataSourceConfiguration $configuration;
  public Timestamp $created_at;
  public ScanSchedule $schedule;
  public ErrorMessage $error_message;
}

class IndexStatistics {
  public FaqStatistics $faq_statistics;
  public TextDocumentStatistics $text_document_statistics;
}

class RelevanceFeedback {
  public ResultId $result_id;
  public RelevanceType $relevance_value;
}

class RelevanceType {
}

class ServerSideEncryptionConfiguration {
  public KmsKeyId $kms_key_id;
}

class Long {
}

class AclConfiguration {
  public ColumnName $allowed_groups_column_name;
}

class BatchDeleteDocumentResponseFailedDocuments {
}

class DataSourceVpcConfiguration {
  public SubnetIdList $subnet_ids;
  public SecurityGroupIdList $security_group_ids;
}

class DatabaseName {
}

class IndexName {
}

class ListDataSourcesRequest {
  public IndexId $index_id;
  public NextToken $next_token;
  public MaxResultsIntegerForListDataSourcesRequest $max_results;
}

class ClickFeedbackList {
}

class ConflictException {
  public ErrorMessage $message;
}

class FaqName {
}

class Relevance {
  public Importance $importance;
  public Duration $duration;
  public Order $rank_order;
  public ValueImportanceMap $value_importance_map;
  public DocumentMetadataBoolean $freshness;
}

class SubnetIdList {
}

class Timestamp {
}

class ErrorMessage {
}

class FaqStatistics {
  public IndexedQuestionAnswersCount $indexed_question_answers_count;
}

class HighlightList {
}

class QueryId {
}

class QueryRequest {
  public DocumentAttributeKeyList $requested_document_attributes;
  public QueryResultType $query_result_type_filter;
  public int $page_number;
  public int $page_size;
  public IndexId $index_id;
  public QueryText $query_text;
  public AttributeFilter $attribute_filter;
  public FacetList $facets;
}

class SubmitFeedbackRequest {
  public IndexId $index_id;
  public QueryId $query_id;
  public ClickFeedbackList $click_feedback_items;
  public RelevanceFeedbackList $relevance_feedback_items;
}

class AdditionalResultAttributeValueType {
}

class ChangeDetectingColumns {
}

class DataSourceSummary {
  public DataSourceStatus $status;
  public DataSourceName $name;
  public DataSourceId $id;
  public DataSourceType $type;
  public Timestamp $created_at;
  public Timestamp $updated_at;
}

class DescribeFaqResponse {
  public FaqId $id;
  public FaqName $name;
  public RoleArn $role_arn;
  public FaqStatus $status;
  public ErrorMessage $error_message;
  public IndexId $index_id;
  public Description $description;
  public Timestamp $created_at;
  public Timestamp $updated_at;
  public S3Path $s_3_path;
}

class DocumentMetadataBoolean {
}

class DocumentsMetadataConfiguration {
  public S3ObjectKey $s_3_prefix;
}

class RelevanceFeedbackList {
}

class ResultId {
}

class BatchDeleteDocumentRequest {
  public IndexId $index_id;
  public DocumentIdList $document_id_list;
}

class ClickFeedback {
  public ResultId $result_id;
  public Timestamp $click_time;
}

class ColumnName {
}

class DataSourceId {
}

class DescribeIndexResponse {
  public Description $description;
  public Timestamp $created_at;
  public DocumentMetadataConfigurationList $document_metadata_configurations;
  public IndexStatistics $index_statistics;
  public IndexName $name;
  public IndexId $id;
  public IndexStatus $status;
  public ErrorMessage $error_message;
  public RoleArn $role_arn;
  public ServerSideEncryptionConfiguration $server_side_encryption_configuration;
  public Timestamp $updated_at;
}

class Description {
}

class S3ObjectKey {
}

class SecurityGroupIdList {
}

class ServiceQuotaExceededException {
  public ErrorMessage $message;
}

class DataSourceSummaryList {
}

class FacetList {
}

class ConnectionConfiguration {
  public DatabaseHost $database_host;
  public DatabasePort $database_port;
  public DatabaseName $database_name;
  public TableName $table_name;
  public SecretArn $secret_arn;
}

class Document {
  public DocumentId $id;
  public Title $title;
  public Blob $blob;
  public S3Path $s_3_path;
  public DocumentAttributeList $attributes;
  public PrincipalList $access_control_list;
  public ContentType $content_type;
}

class S3BucketName {
}

class Search {
  public boolean $facetable;
  public boolean $searchable;
  public boolean $displayable;
}

class CreateDataSourceResponse {
  public DataSourceId $id;
}

class CreateFaqRequest {
  public IndexId $index_id;
  public FaqName $name;
  public Description $description;
  public S3Path $s_3_path;
  public RoleArn $role_arn;
}

class ListDataSourceSyncJobsRequest {
  public DataSourceSyncJobStatus $status_filter;
  public DataSourceId $id;
  public IndexId $index_id;
  public NextToken $next_token;
  public MaxResultsIntegerForListDataSourceSyncJobsRequest $max_results;
  public TimeRange $start_time_filter;
}

class IndexedQuestionAnswersCount {
}

class MaxResultsIntegerForListIndicesRequest {
}

class BatchDeleteDocumentResponseFailedDocument {
  public DocumentId $id;
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
}

class DatabasePort {
}

class DocumentAttribute {
  public DocumentAttributeKey $key;
  public DocumentAttributeValue $value;
}

class Duration {
}

class FaqSummaryItems {
}

class IndexConfigurationSummaryList {
}

class PrincipalName {
}

class Title {
}

class UpdateDataSourceRequest {
  public IndexId $index_id;
  public DataSourceConfiguration $configuration;
  public Description $description;
  public ScanSchedule $schedule;
  public RoleArn $role_arn;
  public DataSourceId $id;
  public DataSourceName $name;
}

class NextToken {
}

class ValidationException {
  public ErrorMessage $message;
}

class BatchPutDocumentResponseFailedDocument {
  public DocumentId $id;
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
}

class DocumentAttributeValueCountPairList {
}

class IndexId {
}

class Integer {
}

class InternalServerException {
  public ErrorMessage $message;
}

class MaxResultsIntegerForListFaqsRequest {
}

class ValueImportanceMap {
}

class DocumentAttributeValueType {
}

class VpcSecurityGroupId {
}

class AccessDeniedException {
  public ErrorMessage $message;
}

class CreateDataSourceRequest {
  public IndexId $index_id;
  public DataSourceType $type;
  public DataSourceConfiguration $configuration;
  public Description $description;
  public ScanSchedule $schedule;
  public RoleArn $role_arn;
  public DataSourceName $name;
}

class DeleteFaqRequest {
  public IndexId $index_id;
  public FaqId $id;
}

class DescribeIndexRequest {
  public IndexId $id;
}

class DocumentAttributeKeyList {
}

class DocumentAttributeValue {
  public Timestamp $date_value;
  public DocumentAttributeStringValue $string_value;
  public DocumentAttributeStringListValue $string_list_value;
  public Long $long_value;
}

class BatchPutDocumentRequest {
  public IndexId $index_id;
  public RoleArn $role_arn;
  public DocumentList $documents;
}

class DataSourceToIndexFieldMappingList {
}

class S3DataSourceConfiguration {
  public AccessControlListConfiguration $access_control_list_configuration;
  public S3BucketName $bucket_name;
  public DataSourceInclusionsExclusionsStrings $inclusion_prefixes;
  public DataSourceInclusionsExclusionsStrings $exclusion_patterns;
  public DocumentsMetadataConfiguration $documents_metadata_configuration;
}

class TimeRange {
  public Timestamp $end_time;
  public Timestamp $start_time;
}

class AdditionalResultAttributeValue {
  public TextWithHighlights $text_with_highlights_value;
}

class FaqId {
}

class QueryResult {
  public QueryResultItemList $result_items;
  public FacetResultList $facet_results;
  public int $total_number_of_results;
  public QueryId $query_id;
}

class ResourceUnavailableException {
  public ErrorMessage $message;
}

class StartDataSourceSyncJobRequest {
  public IndexId $index_id;
  public DataSourceId $id;
}

class StopDataSourceSyncJobRequest {
  public DataSourceId $id;
  public IndexId $index_id;
}

class MaxResultsIntegerForListDataSourceSyncJobsRequest {
}

class MaxResultsIntegerForListDataSourcesRequest {
}

class String {
}

class ValueImportanceMapKey {
}

class DatabaseConfiguration {
  public AclConfiguration $acl_configuration;
  public DatabaseEngineType $database_engine_type;
  public ConnectionConfiguration $connection_configuration;
  public DataSourceVpcConfiguration $vpc_configuration;
  public ColumnConfiguration $column_configuration;
}

class DescribeFaqRequest {
  public FaqId $id;
  public IndexId $index_id;
}

class ListIndicesRequest {
  public NextToken $next_token;
  public MaxResultsIntegerForListIndicesRequest $max_results;
}

class RoleArn {
}

class BatchPutDocumentResponse {
  public BatchPutDocumentResponseFailedDocuments $failed_documents;
}

class DocumentMetadataConfiguration {
  public Search $search;
  public DocumentMetadataConfigurationName $name;
  public DocumentAttributeValueType $type;
  public Relevance $relevance;
}

class Facet {
  public DocumentAttributeKey $document_attribute_key;
}

class Importance {
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class ListDataSourcesResponse {
  public DataSourceSummaryList $summary_items;
  public NextToken $next_token;
}

class ListFaqsResponse {
  public NextToken $next_token;
  public FaqSummaryItems $faq_summary_items;
}

class DataSourceStatus {
}

class DescribeDataSourceRequest {
  public DataSourceId $id;
  public IndexId $index_id;
}

class FacetResultList {
}

class FaqStatus {
}

class FaqSummary {
  public FaqId $id;
  public FaqName $name;
  public FaqStatus $status;
  public Timestamp $created_at;
  public Timestamp $updated_at;
}

class KmsKeyId {
}

class QueryResultItemList {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class SharePointVersion {
}

class CreateIndexResponse {
  public IndexId $id;
}

class DataSourceSyncJobHistoryList {
}

class DataSourceType {
}

class DocumentIdList {
}

class Order {
}

class DocumentAttributeList {
}

class DocumentAttributeStringValue {
}

class DocumentId {
}

class IndexedTextDocumentsCount {
}

class PrincipalType {
}

class ReadAccessType {
}

class DataSourceDateFieldFormat {
}

class DeleteIndexRequest {
  public IndexId $id;
}

class ListIndicesResponse {
  public IndexConfigurationSummaryList $index_configuration_summary_items;
  public NextToken $next_token;
}

class SharePointUrlList {
}

class DataSourceFieldName {
}

class DataSourceToIndexFieldMapping {
  public DataSourceFieldName $data_source_field_name;
  public DataSourceDateFieldFormat $date_field_format;
  public IndexFieldName $index_field_name;
}

class QueryResultItem {
  public ResultId $id;
  public QueryResultType $type;
  public AdditionalResultAttributeList $additional_attributes;
  public DocumentId $document_id;
  public TextWithHighlights $document_title;
  public TextWithHighlights $document_excerpt;
  public Url $document_uri;
  public DocumentAttributeList $document_attributes;
}

class S3Path {
  public S3BucketName $bucket;
  public S3ObjectKey $key;
}

class SharePointConfiguration {
  public SharePointUrlList $urls;
  public DataSourceInclusionsExclusionsStrings $inclusion_patterns;
  public DataSourceInclusionsExclusionsStrings $exclusion_patterns;
  public DataSourceToIndexFieldMappingList $field_mappings;
  public DataSourceFieldName $document_title_field_name;
  public SharePointVersion $share_point_version;
  public SecretArn $secret_arn;
  public boolean $crawl_attachments;
  public boolean $use_change_log;
  public DataSourceVpcConfiguration $vpc_configuration;
}

class TextDocumentStatistics {
  public IndexedTextDocumentsCount $indexed_text_documents_count;
}

class BatchPutDocumentResponseFailedDocuments {
}

class CreateIndexRequest {
  public IndexName $name;
  public RoleArn $role_arn;
  public ServerSideEncryptionConfiguration $server_side_encryption_configuration;
  public Description $description;
  public ClientTokenName $client_token;
}

class DocumentAttributeKey {
}

class FacetResult {
  public DocumentAttributeKey $document_attribute_key;
  public DocumentAttributeValueCountPairList $document_attribute_value_count_pairs;
}

class QueryResultType {
}

class TextWithHighlights {
  public HighlightList $highlights;
  public string $text;
}

class UpdateIndexRequest {
  public IndexId $id;
  public IndexName $name;
  public RoleArn $role_arn;
  public Description $description;
  public DocumentMetadataConfigurationList $document_metadata_configuration_updates;
}

class ThrottlingException {
  public ErrorMessage $message;
}

class AccessControlListConfiguration {
  public S3ObjectKey $key_path;
}

class Boolean {
}

class DatabaseHost {
}

class ListDataSourceSyncJobsResponse {
  public DataSourceSyncJobHistoryList $history;
  public NextToken $next_token;
}

class SecretArn {
}

class SubnetId {
}

class ClientTokenName {
}

class DocumentAttributeStringListValue {
}

class DocumentAttributeValueCountPair {
  public int $count;
  public DocumentAttributeValue $document_attribute_value;
}

class QueryText {
}

class DocumentList {
}

class AdditionalResultAttributeList {
}

class ContentType {
}

class DataSourceConfiguration {
  public S3DataSourceConfiguration $s_3_configuration;
  public SharePointConfiguration $share_point_configuration;
  public DatabaseConfiguration $database_configuration;
}

class Principal {
  public PrincipalName $name;
  public PrincipalType $type;
  public ReadAccessType $access;
}

class PrincipalList {
}

class StartDataSourceSyncJobResponse {
  public string $execution_id;
}

class IndexStatus {
}

class TableName {
}

class BatchDeleteDocumentResponse {
  public BatchDeleteDocumentResponseFailedDocuments $failed_documents;
}

class Blob {
}

class CreateFaqResponse {
  public FaqId $id;
}

class DataSourceInclusionsExclusionsStringsMember {
}

class DataSourceSyncJob {
  public Timestamp $end_time;
  public DataSourceSyncJobStatus $status;
  public ErrorMessage $error_message;
  public ErrorCode $error_code;
  public string $data_source_error_code;
  public string $execution_id;
  public Timestamp $start_time;
}

class IndexConfigurationSummary {
  public IndexName $name;
  public IndexId $id;
  public Timestamp $created_at;
  public Timestamp $updated_at;
  public IndexStatus $status;
}

class DataSourceName {
}

class DataSourceSyncJobStatus {
}

class DocumentMetadataConfigurationList {
}

class DocumentMetadataConfigurationName {
}

class ColumnConfiguration {
  public ColumnName $document_data_column_name;
  public ColumnName $document_title_column_name;
  public DataSourceToIndexFieldMappingList $field_mappings;
  public ChangeDetectingColumns $change_detecting_columns;
  public ColumnName $document_id_column_name;
}

class Highlight {
  public int $begin_offset;
  public int $end_offset;
  public boolean $top_answer;
}

class Url {
}


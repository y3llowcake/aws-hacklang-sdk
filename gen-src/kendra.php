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
}

class AccessDeniedException {
  public ErrorMessage $message;
}

class AclConfiguration {
  public ColumnName $allowed_groups_column_name;
}

class AdditionalResultAttribute {
  public string $key;
  public AdditionalResultAttributeValue $value;
  public AdditionalResultAttributeValueType $value_type;
}

class AdditionalResultAttributeList {
}

class AdditionalResultAttributeValue {
  public TextWithHighlights $text_with_highlights_value;
}

class AdditionalResultAttributeValueType {
}

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
}

class AttributeFilterList {
}

class BatchDeleteDocumentRequest {
  public DocumentIdList $document_id_list;
  public IndexId $index_id;
}

class BatchDeleteDocumentResponse {
  public BatchDeleteDocumentResponseFailedDocuments $failed_documents;
}

class BatchDeleteDocumentResponseFailedDocument {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public DocumentId $id;
}

class BatchDeleteDocumentResponseFailedDocuments {
}

class BatchPutDocumentRequest {
  public DocumentList $documents;
  public IndexId $index_id;
  public RoleArn $role_arn;
}

class BatchPutDocumentResponse {
  public BatchPutDocumentResponseFailedDocuments $failed_documents;
}

class BatchPutDocumentResponseFailedDocument {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public DocumentId $id;
}

class BatchPutDocumentResponseFailedDocuments {
}

class Blob {
}

class Boolean {
}

class ChangeDetectingColumns {
}

class ClickFeedback {
  public Timestamp $click_time;
  public ResultId $result_id;
}

class ClickFeedbackList {
}

class ClientTokenName {
}

class ColumnConfiguration {
  public ChangeDetectingColumns $change_detecting_columns;
  public ColumnName $document_data_column_name;
  public ColumnName $document_id_column_name;
  public ColumnName $document_title_column_name;
  public DataSourceToIndexFieldMappingList $field_mappings;
}

class ColumnName {
}

class ConflictException {
  public ErrorMessage $message;
}

class ConnectionConfiguration {
  public DatabaseHost $database_host;
  public DatabaseName $database_name;
  public DatabasePort $database_port;
  public SecretArn $secret_arn;
  public TableName $table_name;
}

class ContentType {
}

class CreateDataSourceRequest {
  public DataSourceConfiguration $configuration;
  public Description $description;
  public IndexId $index_id;
  public DataSourceName $name;
  public RoleArn $role_arn;
  public ScanSchedule $schedule;
  public DataSourceType $type;
}

class CreateDataSourceResponse {
  public DataSourceId $id;
}

class CreateFaqRequest {
  public Description $description;
  public IndexId $index_id;
  public FaqName $name;
  public RoleArn $role_arn;
  public S3Path $s_3_path;
}

class CreateFaqResponse {
  public FaqId $id;
}

class CreateIndexRequest {
  public ClientTokenName $client_token;
  public Description $description;
  public IndexName $name;
  public RoleArn $role_arn;
  public ServerSideEncryptionConfiguration $server_side_encryption_configuration;
}

class CreateIndexResponse {
  public IndexId $id;
}

class DataSourceConfiguration {
  public DatabaseConfiguration $database_configuration;
  public S3DataSourceConfiguration $s_3_configuration;
  public SharePointConfiguration $share_point_configuration;
}

class DataSourceDateFieldFormat {
}

class DataSourceFieldName {
}

class DataSourceId {
}

class DataSourceInclusionsExclusionsStrings {
}

class DataSourceInclusionsExclusionsStringsMember {
}

class DataSourceName {
}

class DataSourceStatus {
}

class DataSourceSummary {
  public Timestamp $created_at;
  public DataSourceId $id;
  public DataSourceName $name;
  public DataSourceStatus $status;
  public DataSourceType $type;
  public Timestamp $updated_at;
}

class DataSourceSummaryList {
}

class DataSourceSyncJob {
  public string $data_source_error_code;
  public Timestamp $end_time;
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public string $execution_id;
  public Timestamp $start_time;
  public DataSourceSyncJobStatus $status;
}

class DataSourceSyncJobHistoryList {
}

class DataSourceSyncJobStatus {
}

class DataSourceToIndexFieldMapping {
  public DataSourceFieldName $data_source_field_name;
  public DataSourceDateFieldFormat $date_field_format;
  public IndexFieldName $index_field_name;
}

class DataSourceToIndexFieldMappingList {
}

class DataSourceType {
}

class DataSourceVpcConfiguration {
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;
}

class DatabaseConfiguration {
  public AclConfiguration $acl_configuration;
  public ColumnConfiguration $column_configuration;
  public ConnectionConfiguration $connection_configuration;
  public DatabaseEngineType $database_engine_type;
  public DataSourceVpcConfiguration $vpc_configuration;
}

class DatabaseEngineType {
}

class DatabaseHost {
}

class DatabaseName {
}

class DatabasePort {
}

class DeleteFaqRequest {
  public FaqId $id;
  public IndexId $index_id;
}

class DeleteIndexRequest {
  public IndexId $id;
}

class DescribeDataSourceRequest {
  public DataSourceId $id;
  public IndexId $index_id;
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
}

class DescribeFaqRequest {
  public FaqId $id;
  public IndexId $index_id;
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
}

class DescribeIndexRequest {
  public IndexId $id;
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
}

class Description {
}

class Document {
  public PrincipalList $access_control_list;
  public DocumentAttributeList $attributes;
  public Blob $blob;
  public ContentType $content_type;
  public DocumentId $id;
  public S3Path $s_3_path;
  public Title $title;
}

class DocumentAttribute {
  public DocumentAttributeKey $key;
  public DocumentAttributeValue $value;
}

class DocumentAttributeKey {
}

class DocumentAttributeKeyList {
}

class DocumentAttributeList {
}

class DocumentAttributeStringListValue {
}

class DocumentAttributeStringValue {
}

class DocumentAttributeValue {
  public Timestamp $date_value;
  public Long $long_value;
  public DocumentAttributeStringListValue $string_list_value;
  public DocumentAttributeStringValue $string_value;
}

class DocumentAttributeValueCountPair {
  public int $count;
  public DocumentAttributeValue $document_attribute_value;
}

class DocumentAttributeValueCountPairList {
}

class DocumentAttributeValueType {
}

class DocumentId {
}

class DocumentIdList {
}

class DocumentList {
}

class DocumentMetadataBoolean {
}

class DocumentMetadataConfiguration {
  public DocumentMetadataConfigurationName $name;
  public Relevance $relevance;
  public Search $search;
  public DocumentAttributeValueType $type;
}

class DocumentMetadataConfigurationList {
}

class DocumentMetadataConfigurationName {
}

class DocumentsMetadataConfiguration {
  public S3ObjectKey $s_3_prefix;
}

class Duration {
}

class ErrorCode {
}

class ErrorMessage {
}

class Facet {
  public DocumentAttributeKey $document_attribute_key;
}

class FacetList {
}

class FacetResult {
  public DocumentAttributeKey $document_attribute_key;
  public DocumentAttributeValueCountPairList $document_attribute_value_count_pairs;
}

class FacetResultList {
}

class FaqId {
}

class FaqName {
}

class FaqStatistics {
  public IndexedQuestionAnswersCount $indexed_question_answers_count;
}

class FaqStatus {
}

class FaqSummary {
  public Timestamp $created_at;
  public FaqId $id;
  public FaqName $name;
  public FaqStatus $status;
  public Timestamp $updated_at;
}

class FaqSummaryItems {
}

class Highlight {
  public int $begin_offset;
  public int $end_offset;
  public boolean $top_answer;
}

class HighlightList {
}

class Importance {
}

class IndexConfigurationSummary {
  public Timestamp $created_at;
  public IndexId $id;
  public IndexName $name;
  public IndexStatus $status;
  public Timestamp $updated_at;
}

class IndexConfigurationSummaryList {
}

class IndexFieldName {
}

class IndexId {
}

class IndexName {
}

class IndexStatistics {
  public FaqStatistics $faq_statistics;
  public TextDocumentStatistics $text_document_statistics;
}

class IndexStatus {
}

class IndexedQuestionAnswersCount {
}

class IndexedTextDocumentsCount {
}

class Integer {
}

class InternalServerException {
  public ErrorMessage $message;
}

class KmsKeyId {
}

class ListDataSourceSyncJobsRequest {
  public DataSourceId $id;
  public IndexId $index_id;
  public MaxResultsIntegerForListDataSourceSyncJobsRequest $max_results;
  public NextToken $next_token;
  public TimeRange $start_time_filter;
  public DataSourceSyncJobStatus $status_filter;
}

class ListDataSourceSyncJobsResponse {
  public DataSourceSyncJobHistoryList $history;
  public NextToken $next_token;
}

class ListDataSourcesRequest {
  public IndexId $index_id;
  public MaxResultsIntegerForListDataSourcesRequest $max_results;
  public NextToken $next_token;
}

class ListDataSourcesResponse {
  public NextToken $next_token;
  public DataSourceSummaryList $summary_items;
}

class ListFaqsRequest {
  public IndexId $index_id;
  public MaxResultsIntegerForListFaqsRequest $max_results;
  public NextToken $next_token;
}

class ListFaqsResponse {
  public FaqSummaryItems $faq_summary_items;
  public NextToken $next_token;
}

class ListIndicesRequest {
  public MaxResultsIntegerForListIndicesRequest $max_results;
  public NextToken $next_token;
}

class ListIndicesResponse {
  public IndexConfigurationSummaryList $index_configuration_summary_items;
  public NextToken $next_token;
}

class Long {
}

class MaxResultsIntegerForListDataSourceSyncJobsRequest {
}

class MaxResultsIntegerForListDataSourcesRequest {
}

class MaxResultsIntegerForListFaqsRequest {
}

class MaxResultsIntegerForListIndicesRequest {
}

class NextToken {
}

class Order {
}

class Principal {
  public ReadAccessType $access;
  public PrincipalName $name;
  public PrincipalType $type;
}

class PrincipalList {
}

class PrincipalName {
}

class PrincipalType {
}

class QueryId {
}

class QueryRequest {
  public AttributeFilter $attribute_filter;
  public FacetList $facets;
  public IndexId $index_id;
  public int $page_number;
  public int $page_size;
  public QueryResultType $query_result_type_filter;
  public QueryText $query_text;
  public DocumentAttributeKeyList $requested_document_attributes;
}

class QueryResult {
  public FacetResultList $facet_results;
  public QueryId $query_id;
  public QueryResultItemList $result_items;
  public int $total_number_of_results;
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
}

class QueryResultItemList {
}

class QueryResultType {
}

class QueryText {
}

class ReadAccessType {
}

class Relevance {
  public Duration $duration;
  public DocumentMetadataBoolean $freshness;
  public Importance $importance;
  public Order $rank_order;
  public ValueImportanceMap $value_importance_map;
}

class RelevanceFeedback {
  public RelevanceType $relevance_value;
  public ResultId $result_id;
}

class RelevanceFeedbackList {
}

class RelevanceType {
}

class ResourceAlreadyExistException {
  public ErrorMessage $message;
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class ResourceUnavailableException {
  public ErrorMessage $message;
}

class ResultId {
}

class RoleArn {
}

class S3BucketName {
}

class S3DataSourceConfiguration {
  public AccessControlListConfiguration $access_control_list_configuration;
  public S3BucketName $bucket_name;
  public DocumentsMetadataConfiguration $documents_metadata_configuration;
  public DataSourceInclusionsExclusionsStrings $exclusion_patterns;
  public DataSourceInclusionsExclusionsStrings $inclusion_prefixes;
}

class S3ObjectKey {
}

class S3Path {
  public S3BucketName $bucket;
  public S3ObjectKey $key;
}

class ScanSchedule {
}

class Search {
  public boolean $displayable;
  public boolean $facetable;
  public boolean $searchable;
}

class SecretArn {
}

class SecurityGroupIdList {
}

class ServerSideEncryptionConfiguration {
  public KmsKeyId $kms_key_id;
}

class ServiceQuotaExceededException {
  public ErrorMessage $message;
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
}

class SharePointUrlList {
}

class SharePointVersion {
}

class StartDataSourceSyncJobRequest {
  public DataSourceId $id;
  public IndexId $index_id;
}

class StartDataSourceSyncJobResponse {
  public string $execution_id;
}

class StopDataSourceSyncJobRequest {
  public DataSourceId $id;
  public IndexId $index_id;
}

class String {
}

class SubmitFeedbackRequest {
  public ClickFeedbackList $click_feedback_items;
  public IndexId $index_id;
  public QueryId $query_id;
  public RelevanceFeedbackList $relevance_feedback_items;
}

class SubnetId {
}

class SubnetIdList {
}

class TableName {
}

class TextDocumentStatistics {
  public IndexedTextDocumentsCount $indexed_text_documents_count;
}

class TextWithHighlights {
  public HighlightList $highlights;
  public string $text;
}

class ThrottlingException {
  public ErrorMessage $message;
}

class TimeRange {
  public Timestamp $end_time;
  public Timestamp $start_time;
}

class Timestamp {
}

class Title {
}

class UpdateDataSourceRequest {
  public DataSourceConfiguration $configuration;
  public Description $description;
  public DataSourceId $id;
  public IndexId $index_id;
  public DataSourceName $name;
  public RoleArn $role_arn;
  public ScanSchedule $schedule;
}

class UpdateIndexRequest {
  public Description $description;
  public DocumentMetadataConfigurationList $document_metadata_configuration_updates;
  public IndexId $id;
  public IndexName $name;
  public RoleArn $role_arn;
}

class Url {
}

class ValidationException {
  public ErrorMessage $message;
}

class ValueImportanceMap {
}

class ValueImportanceMapKey {
}

class VpcSecurityGroupId {
}


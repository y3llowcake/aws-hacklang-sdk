<?hh // strict
namespace slack\aws\textract;

interface Textract {
  public function AnalyzeDocument(AnalyzeDocumentRequest) Awaitable<Errors\Result<AnalyzeDocumentResponse>>;
  public function DetectDocumentText(DetectDocumentTextRequest) Awaitable<Errors\Result<DetectDocumentTextResponse>>;
  public function GetDocumentAnalysis(GetDocumentAnalysisRequest) Awaitable<Errors\Result<GetDocumentAnalysisResponse>>;
  public function GetDocumentTextDetection(GetDocumentTextDetectionRequest) Awaitable<Errors\Result<GetDocumentTextDetectionResponse>>;
  public function StartDocumentAnalysis(StartDocumentAnalysisRequest) Awaitable<Errors\Result<StartDocumentAnalysisResponse>>;
  public function StartDocumentTextDetection(StartDocumentTextDetectionRequest) Awaitable<Errors\Result<StartDocumentTextDetectionResponse>>;
}

class AccessDeniedException {
}

class AnalyzeDocumentRequest {
  public Document $document;
  public FeatureTypes $feature_types;
  public HumanLoopConfig $human_loop_config;
}

class AnalyzeDocumentResponse {
  public string $analyze_document_model_version;
  public BlockList $blocks;
  public DocumentMetadata $document_metadata;
  public HumanLoopActivationOutput $human_loop_activation_output;
}

class BadDocumentException {
}

class Block {
  public BlockType $block_type;
  public UInteger $column_index;
  public UInteger $column_span;
  public Percent $confidence;
  public EntityTypes $entity_types;
  public Geometry $geometry;
  public NonEmptyString $id;
  public UInteger $page;
  public RelationshipList $relationships;
  public UInteger $row_index;
  public UInteger $row_span;
  public SelectionStatus $selection_status;
  public string $text;
}

class BlockList {
}

class BlockType {
}

class BoundingBox {
  public Float $height;
  public Float $left;
  public Float $top;
  public Float $width;
}

class ClientRequestToken {
}

class ContentClassifier {
}

class ContentClassifiers {
}

class DetectDocumentTextRequest {
  public Document $document;
}

class DetectDocumentTextResponse {
  public BlockList $blocks;
  public string $detect_document_text_model_version;
  public DocumentMetadata $document_metadata;
}

class Document {
  public ImageBlob $bytes;
  public S3Object $s_3_object;
}

class DocumentLocation {
  public S3Object $s_3_object;
}

class DocumentMetadata {
  public UInteger $pages;
}

class DocumentTooLargeException {
}

class EntityType {
}

class EntityTypes {
}

class ErrorCode {
}

class FeatureType {
}

class FeatureTypes {
}

class Float {
}

class FlowDefinitionArn {
}

class Geometry {
  public BoundingBox $bounding_box;
  public Polygon $polygon;
}

class GetDocumentAnalysisRequest {
  public JobId $job_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class GetDocumentAnalysisResponse {
  public string $analyze_document_model_version;
  public BlockList $blocks;
  public DocumentMetadata $document_metadata;
  public JobStatus $job_status;
  public PaginationToken $next_token;
  public StatusMessage $status_message;
  public Warnings $warnings;
}

class GetDocumentTextDetectionRequest {
  public JobId $job_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class GetDocumentTextDetectionResponse {
  public BlockList $blocks;
  public string $detect_document_text_model_version;
  public DocumentMetadata $document_metadata;
  public JobStatus $job_status;
  public PaginationToken $next_token;
  public StatusMessage $status_message;
  public Warnings $warnings;
}

class HumanLoopActivationConditionsEvaluationResults {
}

class HumanLoopActivationOutput {
  public HumanLoopActivationConditionsEvaluationResults $human_loop_activation_conditions_evaluation_results;
  public HumanLoopActivationReasons $human_loop_activation_reasons;
  public HumanLoopArn $human_loop_arn;
}

class HumanLoopActivationReason {
}

class HumanLoopActivationReasons {
}

class HumanLoopArn {
}

class HumanLoopConfig {
  public HumanLoopDataAttributes $data_attributes;
  public FlowDefinitionArn $flow_definition_arn;
  public HumanLoopName $human_loop_name;
}

class HumanLoopDataAttributes {
  public ContentClassifiers $content_classifiers;
}

class HumanLoopName {
}

class HumanLoopQuotaExceededException {
  public string $quota_code;
  public string $resource_type;
  public string $service_code;
}

class IdList {
}

class IdempotentParameterMismatchException {
}

class ImageBlob {
}

class InternalServerError {
}

class InvalidJobIdException {
}

class InvalidParameterException {
}

class InvalidS3ObjectException {
}

class JobId {
}

class JobStatus {
}

class JobTag {
}

class LimitExceededException {
}

class MaxResults {
}

class NonEmptyString {
}

class NotificationChannel {
  public RoleArn $role_arn;
  public SNSTopicArn $sns_topic_arn;
}

class Pages {
}

class PaginationToken {
}

class Percent {
}

class Point {
  public Float $x;
  public Float $y;
}

class Polygon {
}

class ProvisionedThroughputExceededException {
}

class Relationship {
  public IdList $ids;
  public RelationshipType $type;
}

class RelationshipList {
}

class RelationshipType {
}

class RoleArn {
}

class S3Bucket {
}

class S3Object {
  public S3Bucket $bucket;
  public S3ObjectName $name;
  public S3ObjectVersion $version;
}

class S3ObjectName {
}

class S3ObjectVersion {
}

class SNSTopicArn {
}

class SelectionStatus {
}

class StartDocumentAnalysisRequest {
  public ClientRequestToken $client_request_token;
  public DocumentLocation $document_location;
  public FeatureTypes $feature_types;
  public JobTag $job_tag;
  public NotificationChannel $notification_channel;
}

class StartDocumentAnalysisResponse {
  public JobId $job_id;
}

class StartDocumentTextDetectionRequest {
  public ClientRequestToken $client_request_token;
  public DocumentLocation $document_location;
  public JobTag $job_tag;
  public NotificationChannel $notification_channel;
}

class StartDocumentTextDetectionResponse {
  public JobId $job_id;
}

class StatusMessage {
}

class String {
}

class ThrottlingException {
}

class UInteger {
}

class UnsupportedDocumentException {
}

class Warning {
  public ErrorCode $error_code;
  public Pages $pages;
}

class Warnings {
}


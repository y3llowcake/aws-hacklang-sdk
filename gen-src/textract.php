<?hh // strict
namespace slack\aws\textract;

interface Textract {
  public function AnalyzeDocument(AnalyzeDocumentRequest $in): Awaitable<\Errors\Result<AnalyzeDocumentResponse>>;
  public function DetectDocumentText(DetectDocumentTextRequest $in): Awaitable<\Errors\Result<DetectDocumentTextResponse>>;
  public function GetDocumentAnalysis(GetDocumentAnalysisRequest $in): Awaitable<\Errors\Result<GetDocumentAnalysisResponse>>;
  public function GetDocumentTextDetection(GetDocumentTextDetectionRequest $in): Awaitable<\Errors\Result<GetDocumentTextDetectionResponse>>;
  public function StartDocumentAnalysis(StartDocumentAnalysisRequest $in): Awaitable<\Errors\Result<StartDocumentAnalysisResponse>>;
  public function StartDocumentTextDetection(StartDocumentTextDetectionRequest $in): Awaitable<\Errors\Result<StartDocumentTextDetectionResponse>>;
}

class AccessDeniedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AnalyzeDocumentRequest {
  public ?Document $document;
  public ?FeatureTypes $feature_types;
  public ?HumanLoopConfig $human_loop_config;

  public function __construct(shape(
    ?'document' => ?Document,
    ?'feature_types' => ?FeatureTypes,
    ?'human_loop_config' => ?HumanLoopConfig,
  ) $s = shape()) {
    $this->document = $s['document'] ?? null;
    $this->feature_types = $s['feature_types'] ?? vec[];
    $this->human_loop_config = $s['human_loop_config'] ?? null;
  }
}

class AnalyzeDocumentResponse {
  public string $analyze_document_model_version;
  public ?BlockList $blocks;
  public ?DocumentMetadata $document_metadata;
  public ?HumanLoopActivationOutput $human_loop_activation_output;

  public function __construct(shape(
    ?'analyze_document_model_version' => string,
    ?'blocks' => ?BlockList,
    ?'document_metadata' => ?DocumentMetadata,
    ?'human_loop_activation_output' => ?HumanLoopActivationOutput,
  ) $s = shape()) {
    $this->analyze_document_model_version = $s['analyze_document_model_version'] ?? '';
    $this->blocks = $s['blocks'] ?? vec[];
    $this->document_metadata = $s['document_metadata'] ?? null;
    $this->human_loop_activation_output = $s['human_loop_activation_output'] ?? null;
  }
}

class BadDocumentException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Block {
  public ?BlockType $block_type;
  public ?UInteger $column_index;
  public ?UInteger $column_span;
  public ?Percent $confidence;
  public ?EntityTypes $entity_types;
  public ?Geometry $geometry;
  public ?NonEmptyString $id;
  public ?UInteger $page;
  public ?RelationshipList $relationships;
  public ?UInteger $row_index;
  public ?UInteger $row_span;
  public ?SelectionStatus $selection_status;
  public string $text;

  public function __construct(shape(
    ?'block_type' => ?BlockType,
    ?'column_index' => ?UInteger,
    ?'column_span' => ?UInteger,
    ?'confidence' => ?Percent,
    ?'entity_types' => ?EntityTypes,
    ?'geometry' => ?Geometry,
    ?'id' => ?NonEmptyString,
    ?'page' => ?UInteger,
    ?'relationships' => ?RelationshipList,
    ?'row_index' => ?UInteger,
    ?'row_span' => ?UInteger,
    ?'selection_status' => ?SelectionStatus,
    ?'text' => string,
  ) $s = shape()) {
    $this->block_type = $s['block_type'] ?? '';
    $this->column_index = $s['column_index'] ?? 0;
    $this->column_span = $s['column_span'] ?? 0;
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->entity_types = $s['entity_types'] ?? vec[];
    $this->geometry = $s['geometry'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->page = $s['page'] ?? 0;
    $this->relationships = $s['relationships'] ?? vec[];
    $this->row_index = $s['row_index'] ?? 0;
    $this->row_span = $s['row_span'] ?? 0;
    $this->selection_status = $s['selection_status'] ?? '';
    $this->text = $s['text'] ?? '';
  }
}

type BlockList = vec<Block>;

type BlockType = string;

class BoundingBox {
  public ?Float $height;
  public ?Float $left;
  public ?Float $top;
  public ?Float $width;

  public function __construct(shape(
    ?'height' => ?Float,
    ?'left' => ?Float,
    ?'top' => ?Float,
    ?'width' => ?Float,
  ) $s = shape()) {
    $this->height = $s['height'] ?? 0.0;
    $this->left = $s['left'] ?? 0.0;
    $this->top = $s['top'] ?? 0.0;
    $this->width = $s['width'] ?? 0.0;
  }
}

type ClientRequestToken = string;

type ContentClassifier = string;

type ContentClassifiers = vec<ContentClassifier>;

class DetectDocumentTextRequest {
  public ?Document $document;

  public function __construct(shape(
    ?'document' => ?Document,
  ) $s = shape()) {
    $this->document = $s['document'] ?? null;
  }
}

class DetectDocumentTextResponse {
  public ?BlockList $blocks;
  public string $detect_document_text_model_version;
  public ?DocumentMetadata $document_metadata;

  public function __construct(shape(
    ?'blocks' => ?BlockList,
    ?'detect_document_text_model_version' => string,
    ?'document_metadata' => ?DocumentMetadata,
  ) $s = shape()) {
    $this->blocks = $s['blocks'] ?? vec[];
    $this->detect_document_text_model_version = $s['detect_document_text_model_version'] ?? '';
    $this->document_metadata = $s['document_metadata'] ?? null;
  }
}

class Document {
  public ?ImageBlob $bytes;
  public ?S3Object $s_3_object;

  public function __construct(shape(
    ?'bytes' => ?ImageBlob,
    ?'s_3_object' => ?S3Object,
  ) $s = shape()) {
    $this->bytes = $s['bytes'] ?? '';
    $this->s_3_object = $s['s_3_object'] ?? null;
  }
}

class DocumentLocation {
  public ?S3Object $s_3_object;

  public function __construct(shape(
    ?'s_3_object' => ?S3Object,
  ) $s = shape()) {
    $this->s_3_object = $s['s_3_object'] ?? null;
  }
}

class DocumentMetadata {
  public ?UInteger $pages;

  public function __construct(shape(
    ?'pages' => ?UInteger,
  ) $s = shape()) {
    $this->pages = $s['pages'] ?? 0;
  }
}

class DocumentTooLargeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type EntityType = string;

type EntityTypes = vec<EntityType>;

type ErrorCode = string;

type FeatureType = string;

type FeatureTypes = vec<FeatureType>;

type Float = float;

type FlowDefinitionArn = string;

class Geometry {
  public ?BoundingBox $bounding_box;
  public ?Polygon $polygon;

  public function __construct(shape(
    ?'bounding_box' => ?BoundingBox,
    ?'polygon' => ?Polygon,
  ) $s = shape()) {
    $this->bounding_box = $s['bounding_box'] ?? null;
    $this->polygon = $s['polygon'] ?? vec[];
  }
}

class GetDocumentAnalysisRequest {
  public ?JobId $job_id;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'job_id' => ?JobId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetDocumentAnalysisResponse {
  public string $analyze_document_model_version;
  public ?BlockList $blocks;
  public ?DocumentMetadata $document_metadata;
  public ?JobStatus $job_status;
  public ?PaginationToken $next_token;
  public ?StatusMessage $status_message;
  public ?Warnings $warnings;

  public function __construct(shape(
    ?'analyze_document_model_version' => string,
    ?'blocks' => ?BlockList,
    ?'document_metadata' => ?DocumentMetadata,
    ?'job_status' => ?JobStatus,
    ?'next_token' => ?PaginationToken,
    ?'status_message' => ?StatusMessage,
    ?'warnings' => ?Warnings,
  ) $s = shape()) {
    $this->analyze_document_model_version = $s['analyze_document_model_version'] ?? '';
    $this->blocks = $s['blocks'] ?? vec[];
    $this->document_metadata = $s['document_metadata'] ?? null;
    $this->job_status = $s['job_status'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->warnings = $s['warnings'] ?? vec[];
  }
}

class GetDocumentTextDetectionRequest {
  public ?JobId $job_id;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'job_id' => ?JobId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetDocumentTextDetectionResponse {
  public ?BlockList $blocks;
  public string $detect_document_text_model_version;
  public ?DocumentMetadata $document_metadata;
  public ?JobStatus $job_status;
  public ?PaginationToken $next_token;
  public ?StatusMessage $status_message;
  public ?Warnings $warnings;

  public function __construct(shape(
    ?'blocks' => ?BlockList,
    ?'detect_document_text_model_version' => string,
    ?'document_metadata' => ?DocumentMetadata,
    ?'job_status' => ?JobStatus,
    ?'next_token' => ?PaginationToken,
    ?'status_message' => ?StatusMessage,
    ?'warnings' => ?Warnings,
  ) $s = shape()) {
    $this->blocks = $s['blocks'] ?? vec[];
    $this->detect_document_text_model_version = $s['detect_document_text_model_version'] ?? '';
    $this->document_metadata = $s['document_metadata'] ?? null;
    $this->job_status = $s['job_status'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->warnings = $s['warnings'] ?? vec[];
  }
}

type HumanLoopActivationConditionsEvaluationResults = string;

class HumanLoopActivationOutput {
  public ?HumanLoopActivationConditionsEvaluationResults $human_loop_activation_conditions_evaluation_results;
  public ?HumanLoopActivationReasons $human_loop_activation_reasons;
  public ?HumanLoopArn $human_loop_arn;

  public function __construct(shape(
    ?'human_loop_activation_conditions_evaluation_results' => ?HumanLoopActivationConditionsEvaluationResults,
    ?'human_loop_activation_reasons' => ?HumanLoopActivationReasons,
    ?'human_loop_arn' => ?HumanLoopArn,
  ) $s = shape()) {
    $this->human_loop_activation_conditions_evaluation_results = $s['human_loop_activation_conditions_evaluation_results'] ?? '';
    $this->human_loop_activation_reasons = $s['human_loop_activation_reasons'] ?? vec[];
    $this->human_loop_arn = $s['human_loop_arn'] ?? '';
  }
}

type HumanLoopActivationReason = string;

type HumanLoopActivationReasons = vec<HumanLoopActivationReason>;

type HumanLoopArn = string;

class HumanLoopConfig {
  public ?HumanLoopDataAttributes $data_attributes;
  public ?FlowDefinitionArn $flow_definition_arn;
  public ?HumanLoopName $human_loop_name;

  public function __construct(shape(
    ?'data_attributes' => ?HumanLoopDataAttributes,
    ?'flow_definition_arn' => ?FlowDefinitionArn,
    ?'human_loop_name' => ?HumanLoopName,
  ) $s = shape()) {
    $this->data_attributes = $s['data_attributes'] ?? null;
    $this->flow_definition_arn = $s['flow_definition_arn'] ?? '';
    $this->human_loop_name = $s['human_loop_name'] ?? '';
  }
}

class HumanLoopDataAttributes {
  public ?ContentClassifiers $content_classifiers;

  public function __construct(shape(
    ?'content_classifiers' => ?ContentClassifiers,
  ) $s = shape()) {
    $this->content_classifiers = $s['content_classifiers'] ?? vec[];
  }
}

type HumanLoopName = string;

class HumanLoopQuotaExceededException {
  public string $quota_code;
  public string $resource_type;
  public string $service_code;

  public function __construct(shape(
    ?'quota_code' => string,
    ?'resource_type' => string,
    ?'service_code' => string,
  ) $s = shape()) {
    $this->quota_code = $s['quota_code'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
  }
}

type IdList = vec<NonEmptyString>;

class IdempotentParameterMismatchException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ImageBlob = string;

class InternalServerError {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidJobIdException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidParameterException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidS3ObjectException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type JobId = string;

type JobStatus = string;

type JobTag = string;

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type MaxResults = int;

type NonEmptyString = string;

class NotificationChannel {
  public ?RoleArn $role_arn;
  public ?SNSTopicArn $sns_topic_arn;

  public function __construct(shape(
    ?'role_arn' => ?RoleArn,
    ?'sns_topic_arn' => ?SNSTopicArn,
  ) $s = shape()) {
    $this->role_arn = $s['role_arn'] ?? '';
    $this->sns_topic_arn = $s['sns_topic_arn'] ?? '';
  }
}

type Pages = vec<UInteger>;

type PaginationToken = string;

type Percent = float;

class Point {
  public ?Float $x;
  public ?Float $y;

  public function __construct(shape(
    ?'x' => ?Float,
    ?'y' => ?Float,
  ) $s = shape()) {
    $this->x = $s['x'] ?? 0.0;
    $this->y = $s['y'] ?? 0.0;
  }
}

type Polygon = vec<Point>;

class ProvisionedThroughputExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Relationship {
  public ?IdList $ids;
  public ?RelationshipType $type;

  public function __construct(shape(
    ?'ids' => ?IdList,
    ?'type' => ?RelationshipType,
  ) $s = shape()) {
    $this->ids = $s['ids'] ?? vec[];
    $this->type = $s['type'] ?? '';
  }
}

type RelationshipList = vec<Relationship>;

type RelationshipType = string;

type RoleArn = string;

type S3Bucket = string;

class S3Object {
  public ?S3Bucket $bucket;
  public ?S3ObjectName $name;
  public ?S3ObjectVersion $version;

  public function __construct(shape(
    ?'bucket' => ?S3Bucket,
    ?'name' => ?S3ObjectName,
    ?'version' => ?S3ObjectVersion,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type S3ObjectName = string;

type S3ObjectVersion = string;

type SNSTopicArn = string;

type SelectionStatus = string;

class StartDocumentAnalysisRequest {
  public ?ClientRequestToken $client_request_token;
  public ?DocumentLocation $document_location;
  public ?FeatureTypes $feature_types;
  public ?JobTag $job_tag;
  public ?NotificationChannel $notification_channel;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'document_location' => ?DocumentLocation,
    ?'feature_types' => ?FeatureTypes,
    ?'job_tag' => ?JobTag,
    ?'notification_channel' => ?NotificationChannel,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->document_location = $s['document_location'] ?? null;
    $this->feature_types = $s['feature_types'] ?? vec[];
    $this->job_tag = $s['job_tag'] ?? '';
    $this->notification_channel = $s['notification_channel'] ?? null;
  }
}

class StartDocumentAnalysisResponse {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class StartDocumentTextDetectionRequest {
  public ?ClientRequestToken $client_request_token;
  public ?DocumentLocation $document_location;
  public ?JobTag $job_tag;
  public ?NotificationChannel $notification_channel;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'document_location' => ?DocumentLocation,
    ?'job_tag' => ?JobTag,
    ?'notification_channel' => ?NotificationChannel,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->document_location = $s['document_location'] ?? null;
    $this->job_tag = $s['job_tag'] ?? '';
    $this->notification_channel = $s['notification_channel'] ?? null;
  }
}

class StartDocumentTextDetectionResponse {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

type StatusMessage = string;

type String = string;

class ThrottlingException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type UInteger = int;

class UnsupportedDocumentException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Warning {
  public ?ErrorCode $error_code;
  public ?Pages $pages;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'pages' => ?Pages,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->pages = $s['pages'] ?? vec[];
  }
}

type Warnings = vec<Warning>;


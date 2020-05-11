<?hh // strict
namespace slack\aws\comprehendmedical;

interface ComprehendMedical {
  public function DescribeEntitiesDetectionV2Job(DescribeEntitiesDetectionV2JobRequest): Awaitable<Errors\Result<DescribeEntitiesDetectionV2JobResponse>>;
  public function DescribePHIDetectionJob(DescribePHIDetectionJobRequest): Awaitable<Errors\Result<DescribePHIDetectionJobResponse>>;
  public function DetectEntities(DetectEntitiesRequest): Awaitable<Errors\Result<DetectEntitiesResponse>>;
  public function DetectEntitiesV2(DetectEntitiesV2Request): Awaitable<Errors\Result<DetectEntitiesV2Response>>;
  public function DetectPHI(DetectPHIRequest): Awaitable<Errors\Result<DetectPHIResponse>>;
  public function InferICD10CM(InferICD10CMRequest): Awaitable<Errors\Result<InferICD10CMResponse>>;
  public function InferRxNorm(InferRxNormRequest): Awaitable<Errors\Result<InferRxNormResponse>>;
  public function ListEntitiesDetectionV2Jobs(ListEntitiesDetectionV2JobsRequest): Awaitable<Errors\Result<ListEntitiesDetectionV2JobsResponse>>;
  public function ListPHIDetectionJobs(ListPHIDetectionJobsRequest): Awaitable<Errors\Result<ListPHIDetectionJobsResponse>>;
  public function StartEntitiesDetectionV2Job(StartEntitiesDetectionV2JobRequest): Awaitable<Errors\Result<StartEntitiesDetectionV2JobResponse>>;
  public function StartPHIDetectionJob(StartPHIDetectionJobRequest): Awaitable<Errors\Result<StartPHIDetectionJobResponse>>;
  public function StopEntitiesDetectionV2Job(StopEntitiesDetectionV2JobRequest): Awaitable<Errors\Result<StopEntitiesDetectionV2JobResponse>>;
  public function StopPHIDetectionJob(StopPHIDetectionJobRequest): Awaitable<Errors\Result<StopPHIDetectionJobResponse>>;
}

type AnyLengthString = string;

class Attribute {
  public int $begin_offset;
  public EntityType $category;
  public int $end_offset;
  public int $id;
  public Float $relationship_score;
  public RelationshipType $relationship_type;
  public Float $score;
  public string $text;
  public TraitList $traits;
  public EntitySubType $type;

  public function __construct(shape(
  ?'begin_offset' => int,
  ?'category' => EntityType,
  ?'end_offset' => int,
  ?'id' => int,
  ?'relationship_score' => Float,
  ?'relationship_type' => RelationshipType,
  ?'score' => Float,
  ?'text' => string,
  ?'traits' => TraitList,
  ?'type' => EntitySubType,
  ) $s = shape()) {
    $this->begin_offset = $begin_offset ?? ;
    $this->category = $category ?? ;
    $this->end_offset = $end_offset ?? ;
    $this->id = $id ?? ;
    $this->relationship_score = $relationship_score ?? ;
    $this->relationship_type = $relationship_type ?? "";
    $this->score = $score ?? ;
    $this->text = $text ?? ;
    $this->traits = $traits ?? ;
    $this->type = $type ?? ;
  }
}

type AttributeList = vec<Attribute>;

type AttributeName = string;

type BoundedLengthString = string;

type ClientRequestTokenString = string;

class ComprehendMedicalAsyncJobFilter {
  public JobName $job_name;
  public JobStatus $job_status;
  public Timestamp $submit_time_after;
  public Timestamp $submit_time_before;

  public function __construct(shape(
  ?'job_name' => JobName,
  ?'job_status' => JobStatus,
  ?'submit_time_after' => Timestamp,
  ?'submit_time_before' => Timestamp,
  ) $s = shape()) {
    $this->job_name = $job_name ?? "";
    $this->job_status = $job_status ?? "";
    $this->submit_time_after = $submit_time_after ?? ;
    $this->submit_time_before = $submit_time_before ?? ;
  }
}

class ComprehendMedicalAsyncJobProperties {
  public IamRoleArn $data_access_role_arn;
  public Timestamp $end_time;
  public Timestamp $expiration_time;
  public InputDataConfig $input_data_config;
  public JobId $job_id;
  public JobName $job_name;
  public JobStatus $job_status;
  public KMSKey $kms_key;
  public LanguageCode $language_code;
  public ManifestFilePath $manifest_file_path;
  public AnyLengthString $message;
  public ModelVersion $model_version;
  public OutputDataConfig $output_data_config;
  public Timestamp $submit_time;

  public function __construct(shape(
  ?'data_access_role_arn' => IamRoleArn,
  ?'end_time' => Timestamp,
  ?'expiration_time' => Timestamp,
  ?'input_data_config' => InputDataConfig,
  ?'job_id' => JobId,
  ?'job_name' => JobName,
  ?'job_status' => JobStatus,
  ?'kms_key' => KMSKey,
  ?'language_code' => LanguageCode,
  ?'manifest_file_path' => ManifestFilePath,
  ?'message' => AnyLengthString,
  ?'model_version' => ModelVersion,
  ?'output_data_config' => OutputDataConfig,
  ?'submit_time' => Timestamp,
  ) $s = shape()) {
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->end_time = $end_time ?? ;
    $this->expiration_time = $expiration_time ?? ;
    $this->input_data_config = $input_data_config ?? null;
    $this->job_id = $job_id ?? "";
    $this->job_name = $job_name ?? "";
    $this->job_status = $job_status ?? "";
    $this->kms_key = $kms_key ?? "";
    $this->language_code = $language_code ?? "";
    $this->manifest_file_path = $manifest_file_path ?? "";
    $this->message = $message ?? ;
    $this->model_version = $model_version ?? "";
    $this->output_data_config = $output_data_config ?? null;
    $this->submit_time = $submit_time ?? ;
  }
}

type ComprehendMedicalAsyncJobPropertiesList = vec<ComprehendMedicalAsyncJobProperties>;

class DescribeEntitiesDetectionV2JobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class DescribeEntitiesDetectionV2JobResponse {
  public ComprehendMedicalAsyncJobProperties $comprehend_medical_async_job_properties;

  public function __construct(shape(
  ?'comprehend_medical_async_job_properties' => ComprehendMedicalAsyncJobProperties,
  ) $s = shape()) {
    $this->comprehend_medical_async_job_properties = $comprehend_medical_async_job_properties ?? null;
  }
}

class DescribePHIDetectionJobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class DescribePHIDetectionJobResponse {
  public ComprehendMedicalAsyncJobProperties $comprehend_medical_async_job_properties;

  public function __construct(shape(
  ?'comprehend_medical_async_job_properties' => ComprehendMedicalAsyncJobProperties,
  ) $s = shape()) {
    $this->comprehend_medical_async_job_properties = $comprehend_medical_async_job_properties ?? null;
  }
}

class DetectEntitiesRequest {
  public BoundedLengthString $text;

  public function __construct(shape(
  ?'text' => BoundedLengthString,
  ) $s = shape()) {
    $this->text = $text ?? ;
  }
}

class DetectEntitiesResponse {
  public EntityList $entities;
  public string $model_version;
  public string $pagination_token;
  public UnmappedAttributeList $unmapped_attributes;

  public function __construct(shape(
  ?'entities' => EntityList,
  ?'model_version' => string,
  ?'pagination_token' => string,
  ?'unmapped_attributes' => UnmappedAttributeList,
  ) $s = shape()) {
    $this->entities = $entities ?? ;
    $this->model_version = $model_version ?? "";
    $this->pagination_token = $pagination_token ?? ;
    $this->unmapped_attributes = $unmapped_attributes ?? ;
  }
}

class DetectEntitiesV2Request {
  public BoundedLengthString $text;

  public function __construct(shape(
  ?'text' => BoundedLengthString,
  ) $s = shape()) {
    $this->text = $text ?? ;
  }
}

class DetectEntitiesV2Response {
  public EntityList $entities;
  public string $model_version;
  public string $pagination_token;
  public UnmappedAttributeList $unmapped_attributes;

  public function __construct(shape(
  ?'entities' => EntityList,
  ?'model_version' => string,
  ?'pagination_token' => string,
  ?'unmapped_attributes' => UnmappedAttributeList,
  ) $s = shape()) {
    $this->entities = $entities ?? ;
    $this->model_version = $model_version ?? "";
    $this->pagination_token = $pagination_token ?? ;
    $this->unmapped_attributes = $unmapped_attributes ?? ;
  }
}

class DetectPHIRequest {
  public BoundedLengthString $text;

  public function __construct(shape(
  ?'text' => BoundedLengthString,
  ) $s = shape()) {
    $this->text = $text ?? ;
  }
}

class DetectPHIResponse {
  public EntityList $entities;
  public string $model_version;
  public string $pagination_token;

  public function __construct(shape(
  ?'entities' => EntityList,
  ?'model_version' => string,
  ?'pagination_token' => string,
  ) $s = shape()) {
    $this->entities = $entities ?? ;
    $this->model_version = $model_version ?? "";
    $this->pagination_token = $pagination_token ?? ;
  }
}

class Entity {
  public AttributeList $attributes;
  public int $begin_offset;
  public EntityType $category;
  public int $end_offset;
  public int $id;
  public Float $score;
  public string $text;
  public TraitList $traits;
  public EntitySubType $type;

  public function __construct(shape(
  ?'attributes' => AttributeList,
  ?'begin_offset' => int,
  ?'category' => EntityType,
  ?'end_offset' => int,
  ?'id' => int,
  ?'score' => Float,
  ?'text' => string,
  ?'traits' => TraitList,
  ?'type' => EntitySubType,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->begin_offset = $begin_offset ?? ;
    $this->category = $category ?? ;
    $this->end_offset = $end_offset ?? ;
    $this->id = $id ?? ;
    $this->score = $score ?? ;
    $this->text = $text ?? ;
    $this->traits = $traits ?? ;
    $this->type = $type ?? ;
  }
}

type EntityList = vec<Entity>;

type EntitySubType = string;

type EntityType = string;

type Float = float;

class ICD10CMAttribute {
  public int $begin_offset;
  public int $end_offset;
  public int $id;
  public Float $relationship_score;
  public Float $score;
  public string $text;
  public ICD10CMTraitList $traits;
  public ICD10CMAttributeType $type;

  public function __construct(shape(
  ?'begin_offset' => int,
  ?'end_offset' => int,
  ?'id' => int,
  ?'relationship_score' => Float,
  ?'score' => Float,
  ?'text' => string,
  ?'traits' => ICD10CMTraitList,
  ?'type' => ICD10CMAttributeType,
  ) $s = shape()) {
    $this->begin_offset = $begin_offset ?? ;
    $this->end_offset = $end_offset ?? ;
    $this->id = $id ?? ;
    $this->relationship_score = $relationship_score ?? ;
    $this->score = $score ?? ;
    $this->text = $text ?? ;
    $this->traits = $traits ?? ;
    $this->type = $type ?? ;
  }
}

type ICD10CMAttributeList = vec<ICD10CMAttribute>;

type ICD10CMAttributeType = string;

class ICD10CMConcept {
  public string $code;
  public string $description;
  public Float $score;

  public function __construct(shape(
  ?'code' => string,
  ?'description' => string,
  ?'score' => Float,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->description = $description ?? ;
    $this->score = $score ?? ;
  }
}

type ICD10CMConceptList = vec<ICD10CMConcept>;

class ICD10CMEntity {
  public ICD10CMAttributeList $attributes;
  public int $begin_offset;
  public ICD10CMEntityCategory $category;
  public int $end_offset;
  public ICD10CMConceptList $icd_10_cm_concepts;
  public int $id;
  public Float $score;
  public OntologyLinkingBoundedLengthString $text;
  public ICD10CMTraitList $traits;
  public ICD10CMEntityType $type;

  public function __construct(shape(
  ?'attributes' => ICD10CMAttributeList,
  ?'begin_offset' => int,
  ?'category' => ICD10CMEntityCategory,
  ?'end_offset' => int,
  ?'icd_10_cm_concepts' => ICD10CMConceptList,
  ?'id' => int,
  ?'score' => Float,
  ?'text' => OntologyLinkingBoundedLengthString,
  ?'traits' => ICD10CMTraitList,
  ?'type' => ICD10CMEntityType,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->begin_offset = $begin_offset ?? ;
    $this->category = $category ?? ;
    $this->end_offset = $end_offset ?? ;
    $this->icd_10_cm_concepts = $icd_10_cm_concepts ?? ;
    $this->id = $id ?? ;
    $this->score = $score ?? ;
    $this->text = $text ?? ;
    $this->traits = $traits ?? ;
    $this->type = $type ?? ;
  }
}

type ICD10CMEntityCategory = string;

type ICD10CMEntityList = vec<ICD10CMEntity>;

type ICD10CMEntityType = string;

class ICD10CMTrait {
  public ICD10CMTraitName $name;
  public Float $score;

  public function __construct(shape(
  ?'name' => ICD10CMTraitName,
  ?'score' => Float,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->score = $score ?? ;
  }
}

type ICD10CMTraitList = vec<ICD10CMTrait>;

type ICD10CMTraitName = string;

type IamRoleArn = string;

class InferICD10CMRequest {
  public OntologyLinkingBoundedLengthString $text;

  public function __construct(shape(
  ?'text' => OntologyLinkingBoundedLengthString,
  ) $s = shape()) {
    $this->text = $text ?? ;
  }
}

class InferICD10CMResponse {
  public ICD10CMEntityList $entities;
  public string $model_version;
  public string $pagination_token;

  public function __construct(shape(
  ?'entities' => ICD10CMEntityList,
  ?'model_version' => string,
  ?'pagination_token' => string,
  ) $s = shape()) {
    $this->entities = $entities ?? ;
    $this->model_version = $model_version ?? "";
    $this->pagination_token = $pagination_token ?? ;
  }
}

class InferRxNormRequest {
  public OntologyLinkingBoundedLengthString $text;

  public function __construct(shape(
  ?'text' => OntologyLinkingBoundedLengthString,
  ) $s = shape()) {
    $this->text = $text ?? ;
  }
}

class InferRxNormResponse {
  public RxNormEntityList $entities;
  public string $model_version;
  public string $pagination_token;

  public function __construct(shape(
  ?'entities' => RxNormEntityList,
  ?'model_version' => string,
  ?'pagination_token' => string,
  ) $s = shape()) {
    $this->entities = $entities ?? ;
    $this->model_version = $model_version ?? "";
    $this->pagination_token = $pagination_token ?? ;
  }
}

class InputDataConfig {
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_key;

  public function __construct(shape(
  ?'s_3_bucket' => S3Bucket,
  ?'s_3_key' => S3Key,
  ) $s = shape()) {
    $this->s_3_bucket = $s_3_bucket ?? "";
    $this->s_3_key = $s_3_key ?? "";
  }
}

type Integer = int;

class InternalServerException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidEncodingException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidRequestException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type JobId = string;

type JobName = string;

type JobStatus = string;

type KMSKey = string;

type LanguageCode = string;

class ListEntitiesDetectionV2JobsRequest {
  public ComprehendMedicalAsyncJobFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'filter' => ComprehendMedicalAsyncJobFilter,
  ?'max_results' => MaxResultsInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->filter = $filter ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListEntitiesDetectionV2JobsResponse {
  public ComprehendMedicalAsyncJobPropertiesList $comprehend_medical_async_job_properties_list;
  public string $next_token;

  public function __construct(shape(
  ?'comprehend_medical_async_job_properties_list' => ComprehendMedicalAsyncJobPropertiesList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->comprehend_medical_async_job_properties_list = $comprehend_medical_async_job_properties_list ?? [];
    $this->next_token = $next_token ?? ;
  }
}

class ListPHIDetectionJobsRequest {
  public ComprehendMedicalAsyncJobFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'filter' => ComprehendMedicalAsyncJobFilter,
  ?'max_results' => MaxResultsInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->filter = $filter ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListPHIDetectionJobsResponse {
  public ComprehendMedicalAsyncJobPropertiesList $comprehend_medical_async_job_properties_list;
  public string $next_token;

  public function __construct(shape(
  ?'comprehend_medical_async_job_properties_list' => ComprehendMedicalAsyncJobPropertiesList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->comprehend_medical_async_job_properties_list = $comprehend_medical_async_job_properties_list ?? [];
    $this->next_token = $next_token ?? ;
  }
}

type ManifestFilePath = string;

type MaxResultsInteger = int;

type ModelVersion = string;

type OntologyLinkingBoundedLengthString = string;

class OutputDataConfig {
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_key;

  public function __construct(shape(
  ?'s_3_bucket' => S3Bucket,
  ?'s_3_key' => S3Key,
  ) $s = shape()) {
    $this->s_3_bucket = $s_3_bucket ?? "";
    $this->s_3_key = $s_3_key ?? "";
  }
}

type RelationshipType = string;

class ResourceNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class RxNormAttribute {
  public int $begin_offset;
  public int $end_offset;
  public int $id;
  public Float $relationship_score;
  public Float $score;
  public string $text;
  public RxNormTraitList $traits;
  public RxNormAttributeType $type;

  public function __construct(shape(
  ?'begin_offset' => int,
  ?'end_offset' => int,
  ?'id' => int,
  ?'relationship_score' => Float,
  ?'score' => Float,
  ?'text' => string,
  ?'traits' => RxNormTraitList,
  ?'type' => RxNormAttributeType,
  ) $s = shape()) {
    $this->begin_offset = $begin_offset ?? ;
    $this->end_offset = $end_offset ?? ;
    $this->id = $id ?? ;
    $this->relationship_score = $relationship_score ?? ;
    $this->score = $score ?? ;
    $this->text = $text ?? ;
    $this->traits = $traits ?? ;
    $this->type = $type ?? ;
  }
}

type RxNormAttributeList = vec<RxNormAttribute>;

type RxNormAttributeType = string;

class RxNormConcept {
  public string $code;
  public string $description;
  public Float $score;

  public function __construct(shape(
  ?'code' => string,
  ?'description' => string,
  ?'score' => Float,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->description = $description ?? ;
    $this->score = $score ?? ;
  }
}

type RxNormConceptList = vec<RxNormConcept>;

class RxNormEntity {
  public RxNormAttributeList $attributes;
  public int $begin_offset;
  public RxNormEntityCategory $category;
  public int $end_offset;
  public int $id;
  public RxNormConceptList $rx_norm_concepts;
  public Float $score;
  public OntologyLinkingBoundedLengthString $text;
  public RxNormTraitList $traits;
  public RxNormEntityType $type;

  public function __construct(shape(
  ?'attributes' => RxNormAttributeList,
  ?'begin_offset' => int,
  ?'category' => RxNormEntityCategory,
  ?'end_offset' => int,
  ?'id' => int,
  ?'rx_norm_concepts' => RxNormConceptList,
  ?'score' => Float,
  ?'text' => OntologyLinkingBoundedLengthString,
  ?'traits' => RxNormTraitList,
  ?'type' => RxNormEntityType,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->begin_offset = $begin_offset ?? ;
    $this->category = $category ?? ;
    $this->end_offset = $end_offset ?? ;
    $this->id = $id ?? ;
    $this->rx_norm_concepts = $rx_norm_concepts ?? ;
    $this->score = $score ?? ;
    $this->text = $text ?? ;
    $this->traits = $traits ?? ;
    $this->type = $type ?? ;
  }
}

type RxNormEntityCategory = string;

type RxNormEntityList = vec<RxNormEntity>;

type RxNormEntityType = string;

class RxNormTrait {
  public RxNormTraitName $name;
  public Float $score;

  public function __construct(shape(
  ?'name' => RxNormTraitName,
  ?'score' => Float,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->score = $score ?? ;
  }
}

type RxNormTraitList = vec<RxNormTrait>;

type RxNormTraitName = string;

type S3Bucket = string;

type S3Key = string;

class ServiceUnavailableException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class StartEntitiesDetectionV2JobRequest {
  public ClientRequestTokenString $client_request_token;
  public IamRoleArn $data_access_role_arn;
  public InputDataConfig $input_data_config;
  public JobName $job_name;
  public KMSKey $kms_key;
  public LanguageCode $language_code;
  public OutputDataConfig $output_data_config;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenString,
  ?'data_access_role_arn' => IamRoleArn,
  ?'input_data_config' => InputDataConfig,
  ?'job_name' => JobName,
  ?'kms_key' => KMSKey,
  ?'language_code' => LanguageCode,
  ?'output_data_config' => OutputDataConfig,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->input_data_config = $input_data_config ?? null;
    $this->job_name = $job_name ?? "";
    $this->kms_key = $kms_key ?? "";
    $this->language_code = $language_code ?? "";
    $this->output_data_config = $output_data_config ?? null;
  }
}

class StartEntitiesDetectionV2JobResponse {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class StartPHIDetectionJobRequest {
  public ClientRequestTokenString $client_request_token;
  public IamRoleArn $data_access_role_arn;
  public InputDataConfig $input_data_config;
  public JobName $job_name;
  public KMSKey $kms_key;
  public LanguageCode $language_code;
  public OutputDataConfig $output_data_config;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenString,
  ?'data_access_role_arn' => IamRoleArn,
  ?'input_data_config' => InputDataConfig,
  ?'job_name' => JobName,
  ?'kms_key' => KMSKey,
  ?'language_code' => LanguageCode,
  ?'output_data_config' => OutputDataConfig,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->input_data_config = $input_data_config ?? null;
    $this->job_name = $job_name ?? "";
    $this->kms_key = $kms_key ?? "";
    $this->language_code = $language_code ?? "";
    $this->output_data_config = $output_data_config ?? null;
  }
}

class StartPHIDetectionJobResponse {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class StopEntitiesDetectionV2JobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class StopEntitiesDetectionV2JobResponse {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class StopPHIDetectionJobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class StopPHIDetectionJobResponse {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

type String = string;

class TextSizeLimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Timestamp = int;

class TooManyRequestsException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class Trait {
  public AttributeName $name;
  public Float $score;

  public function __construct(shape(
  ?'name' => AttributeName,
  ?'score' => Float,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->score = $score ?? ;
  }
}

type TraitList = vec<Trait>;

class UnmappedAttribute {
  public Attribute $attribute;
  public EntityType $type;

  public function __construct(shape(
  ?'attribute' => Attribute,
  ?'type' => EntityType,
  ) $s = shape()) {
    $this->attribute = $attribute ?? null;
    $this->type = $type ?? ;
  }
}

type UnmappedAttributeList = vec<UnmappedAttribute>;

class ValidationException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}


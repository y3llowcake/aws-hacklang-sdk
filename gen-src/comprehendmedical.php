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

class AnyLengthString {
}

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
}

class AttributeList {
}

class AttributeName {
}

class BoundedLengthString {
}

class ClientRequestTokenString {
}

class ComprehendMedicalAsyncJobFilter {
  public JobName $job_name;
  public JobStatus $job_status;
  public Timestamp $submit_time_after;
  public Timestamp $submit_time_before;
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
}

class ComprehendMedicalAsyncJobPropertiesList {
}

class DescribeEntitiesDetectionV2JobRequest {
  public JobId $job_id;
}

class DescribeEntitiesDetectionV2JobResponse {
  public ComprehendMedicalAsyncJobProperties $comprehend_medical_async_job_properties;
}

class DescribePHIDetectionJobRequest {
  public JobId $job_id;
}

class DescribePHIDetectionJobResponse {
  public ComprehendMedicalAsyncJobProperties $comprehend_medical_async_job_properties;
}

class DetectEntitiesRequest {
  public BoundedLengthString $text;
}

class DetectEntitiesResponse {
  public EntityList $entities;
  public string $model_version;
  public string $pagination_token;
  public UnmappedAttributeList $unmapped_attributes;
}

class DetectEntitiesV2Request {
  public BoundedLengthString $text;
}

class DetectEntitiesV2Response {
  public EntityList $entities;
  public string $model_version;
  public string $pagination_token;
  public UnmappedAttributeList $unmapped_attributes;
}

class DetectPHIRequest {
  public BoundedLengthString $text;
}

class DetectPHIResponse {
  public EntityList $entities;
  public string $model_version;
  public string $pagination_token;
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
}

class EntityList {
}

class EntitySubType {
}

class EntityType {
}

class Float {
}

class ICD10CMAttribute {
  public int $begin_offset;
  public int $end_offset;
  public int $id;
  public Float $relationship_score;
  public Float $score;
  public string $text;
  public ICD10CMTraitList $traits;
  public ICD10CMAttributeType $type;
}

class ICD10CMAttributeList {
}

class ICD10CMAttributeType {
}

class ICD10CMConcept {
  public string $code;
  public string $description;
  public Float $score;
}

class ICD10CMConceptList {
}

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
}

class ICD10CMEntityCategory {
}

class ICD10CMEntityList {
}

class ICD10CMEntityType {
}

class ICD10CMTrait {
  public ICD10CMTraitName $name;
  public Float $score;
}

class ICD10CMTraitList {
}

class ICD10CMTraitName {
}

class IamRoleArn {
}

class InferICD10CMRequest {
  public OntologyLinkingBoundedLengthString $text;
}

class InferICD10CMResponse {
  public ICD10CMEntityList $entities;
  public string $model_version;
  public string $pagination_token;
}

class InferRxNormRequest {
  public OntologyLinkingBoundedLengthString $text;
}

class InferRxNormResponse {
  public RxNormEntityList $entities;
  public string $model_version;
  public string $pagination_token;
}

class InputDataConfig {
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_key;
}

class Integer {
}

class InternalServerException {
  public string $message;
}

class InvalidEncodingException {
  public string $message;
}

class InvalidRequestException {
  public string $message;
}

class JobId {
}

class JobName {
}

class JobStatus {
}

class KMSKey {
}

class LanguageCode {
}

class ListEntitiesDetectionV2JobsRequest {
  public ComprehendMedicalAsyncJobFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;
}

class ListEntitiesDetectionV2JobsResponse {
  public ComprehendMedicalAsyncJobPropertiesList $comprehend_medical_async_job_properties_list;
  public string $next_token;
}

class ListPHIDetectionJobsRequest {
  public ComprehendMedicalAsyncJobFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;
}

class ListPHIDetectionJobsResponse {
  public ComprehendMedicalAsyncJobPropertiesList $comprehend_medical_async_job_properties_list;
  public string $next_token;
}

class ManifestFilePath {
}

class MaxResultsInteger {
}

class ModelVersion {
}

class OntologyLinkingBoundedLengthString {
}

class OutputDataConfig {
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_key;
}

class RelationshipType {
}

class ResourceNotFoundException {
  public string $message;
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
}

class RxNormAttributeList {
}

class RxNormAttributeType {
}

class RxNormConcept {
  public string $code;
  public string $description;
  public Float $score;
}

class RxNormConceptList {
}

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
}

class RxNormEntityCategory {
}

class RxNormEntityList {
}

class RxNormEntityType {
}

class RxNormTrait {
  public RxNormTraitName $name;
  public Float $score;
}

class RxNormTraitList {
}

class RxNormTraitName {
}

class S3Bucket {
}

class S3Key {
}

class ServiceUnavailableException {
  public string $message;
}

class StartEntitiesDetectionV2JobRequest {
  public ClientRequestTokenString $client_request_token;
  public IamRoleArn $data_access_role_arn;
  public InputDataConfig $input_data_config;
  public JobName $job_name;
  public KMSKey $kms_key;
  public LanguageCode $language_code;
  public OutputDataConfig $output_data_config;
}

class StartEntitiesDetectionV2JobResponse {
  public JobId $job_id;
}

class StartPHIDetectionJobRequest {
  public ClientRequestTokenString $client_request_token;
  public IamRoleArn $data_access_role_arn;
  public InputDataConfig $input_data_config;
  public JobName $job_name;
  public KMSKey $kms_key;
  public LanguageCode $language_code;
  public OutputDataConfig $output_data_config;
}

class StartPHIDetectionJobResponse {
  public JobId $job_id;
}

class StopEntitiesDetectionV2JobRequest {
  public JobId $job_id;
}

class StopEntitiesDetectionV2JobResponse {
  public JobId $job_id;
}

class StopPHIDetectionJobRequest {
  public JobId $job_id;
}

class StopPHIDetectionJobResponse {
  public JobId $job_id;
}

class String {
}

class TextSizeLimitExceededException {
  public string $message;
}

class Timestamp {
}

class TooManyRequestsException {
  public string $message;
}

class Trait {
  public AttributeName $name;
  public Float $score;
}

class TraitList {
}

class UnmappedAttribute {
  public Attribute $attribute;
  public EntityType $type;
}

class UnmappedAttributeList {
}

class ValidationException {
  public string $message;
}


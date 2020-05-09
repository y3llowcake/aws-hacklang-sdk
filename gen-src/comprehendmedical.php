<?hh // strict
namespace slack\aws\comprehendmedical;

interface ComprehendMedical {
  public function DetectEntities(DetectEntitiesRequest) Awaitable<Errors\Result<DetectEntitiesResponse>>;
  public function DetectEntitiesV2(DetectEntitiesV2Request) Awaitable<Errors\Result<DetectEntitiesV2Response>>;
  public function DetectPHI(DetectPHIRequest) Awaitable<Errors\Result<DetectPHIResponse>>;
  public function InferICD10CM(InferICD10CMRequest) Awaitable<Errors\Result<InferICD10CMResponse>>;
  public function ListPHIDetectionJobs(ListPHIDetectionJobsRequest) Awaitable<Errors\Result<ListPHIDetectionJobsResponse>>;
  public function StartEntitiesDetectionV2Job(StartEntitiesDetectionV2JobRequest) Awaitable<Errors\Result<StartEntitiesDetectionV2JobResponse>>;
  public function DescribeEntitiesDetectionV2Job(DescribeEntitiesDetectionV2JobRequest) Awaitable<Errors\Result<DescribeEntitiesDetectionV2JobResponse>>;
  public function DescribePHIDetectionJob(DescribePHIDetectionJobRequest) Awaitable<Errors\Result<DescribePHIDetectionJobResponse>>;
  public function StopPHIDetectionJob(StopPHIDetectionJobRequest) Awaitable<Errors\Result<StopPHIDetectionJobResponse>>;
  public function StartPHIDetectionJob(StartPHIDetectionJobRequest) Awaitable<Errors\Result<StartPHIDetectionJobResponse>>;
  public function StopEntitiesDetectionV2Job(StopEntitiesDetectionV2JobRequest) Awaitable<Errors\Result<StopEntitiesDetectionV2JobResponse>>;
  public function InferRxNorm(InferRxNormRequest) Awaitable<Errors\Result<InferRxNormResponse>>;
  public function ListEntitiesDetectionV2Jobs(ListEntitiesDetectionV2JobsRequest) Awaitable<Errors\Result<ListEntitiesDetectionV2JobsResponse>>;
}

class DetectEntitiesRequest {
  public BoundedLengthString $text;
}

class ICD10CMEntity {
  public OntologyLinkingBoundedLengthString $text;
  public Float $score;
  public ICD10CMAttributeList $attributes;
  public ICD10CMTraitList $traits;
  public ICD10CMConceptList $icd_10_cm_concepts;
  public int $id;
  public ICD10CMEntityCategory $category;
  public ICD10CMEntityType $type;
  public int $begin_offset;
  public int $end_offset;
}

class InferRxNormResponse {
  public string $pagination_token;
  public string $model_version;
  public RxNormEntityList $entities;
}

class RelationshipType {
}

class TraitList {
}

class UnmappedAttribute {
  public EntityType $type;
  public Attribute $attribute;
}

class ComprehendMedicalAsyncJobPropertiesList {
}

class ICD10CMAttribute {
  public Float $relationship_score;
  public int $id;
  public int $begin_offset;
  public int $end_offset;
  public string $text;
  public ICD10CMTraitList $traits;
  public ICD10CMAttributeType $type;
  public Float $score;
}

class Attribute {
  public EntitySubType $type;
  public Float $relationship_score;
  public int $begin_offset;
  public EntityType $category;
  public TraitList $traits;
  public Float $score;
  public RelationshipType $relationship_type;
  public int $id;
  public int $end_offset;
  public string $text;
}

class ICD10CMTrait {
  public ICD10CMTraitName $name;
  public Float $score;
}

class LanguageCode {
}

class StopPHIDetectionJobResponse {
  public JobId $job_id;
}

class Timestamp {
}

class UnmappedAttributeList {
}

class ComprehendMedicalAsyncJobProperties {
  public JobId $job_id;
  public JobStatus $job_status;
  public AnyLengthString $message;
  public Timestamp $end_time;
  public Timestamp $expiration_time;
  public OutputDataConfig $output_data_config;
  public Timestamp $submit_time;
  public JobName $job_name;
  public ModelVersion $model_version;
  public InputDataConfig $input_data_config;
  public LanguageCode $language_code;
  public IamRoleArn $data_access_role_arn;
  public ManifestFilePath $manifest_file_path;
  public KMSKey $kms_key;
}

class DetectEntitiesV2Response {
  public EntityList $entities;
  public UnmappedAttributeList $unmapped_attributes;
  public string $pagination_token;
  public string $model_version;
}

class ListEntitiesDetectionV2JobsRequest {
  public ComprehendMedicalAsyncJobFilter $filter;
  public string $next_token;
  public MaxResultsInteger $max_results;
}

class RxNormAttributeList {
}

class RxNormAttributeType {
}

class DetectPHIRequest {
  public BoundedLengthString $text;
}

class EntitySubType {
}

class ICD10CMAttributeList {
}

class ICD10CMConceptList {
}

class IamRoleArn {
}

class JobStatus {
}

class OntologyLinkingBoundedLengthString {
}

class ResourceNotFoundException {
  public string $message;
}

class S3Bucket {
}

class StartEntitiesDetectionV2JobResponse {
  public JobId $job_id;
}

class DescribePHIDetectionJobRequest {
  public JobId $job_id;
}

class DetectEntitiesV2Request {
  public BoundedLengthString $text;
}

class ICD10CMTraitList {
}

class ICD10CMTraitName {
}

class ManifestFilePath {
}

class RxNormEntityCategory {
}

class RxNormEntityType {
}

class RxNormTraitList {
}

class ServiceUnavailableException {
  public string $message;
}

class StartEntitiesDetectionV2JobRequest {
  public JobName $job_name;
  public ClientRequestTokenString $client_request_token;
  public KMSKey $kms_key;
  public LanguageCode $language_code;
  public InputDataConfig $input_data_config;
  public OutputDataConfig $output_data_config;
  public IamRoleArn $data_access_role_arn;
}

class TooManyRequestsException {
  public string $message;
}

class ValidationException {
  public string $message;
}

class AnyLengthString {
}

class ICD10CMEntityCategory {
}

class ICD10CMEntityList {
}

class Integer {
}

class KMSKey {
}

class MaxResultsInteger {
}

class RxNormEntity {
  public int $id;
  public RxNormEntityCategory $category;
  public RxNormEntityType $type;
  public Float $score;
  public RxNormAttributeList $attributes;
  public RxNormTraitList $traits;
  public OntologyLinkingBoundedLengthString $text;
  public int $begin_offset;
  public int $end_offset;
  public RxNormConceptList $rx_norm_concepts;
}

class Trait {
  public AttributeName $name;
  public Float $score;
}

class EntityList {
}

class ModelVersion {
}

class RxNormAttribute {
  public string $text;
  public RxNormTraitList $traits;
  public RxNormAttributeType $type;
  public Float $score;
  public Float $relationship_score;
  public int $id;
  public int $begin_offset;
  public int $end_offset;
}

class RxNormTraitName {
}

class DescribeEntitiesDetectionV2JobResponse {
  public ComprehendMedicalAsyncJobProperties $comprehend_medical_async_job_properties;
}

class ICD10CMEntityType {
}

class InternalServerException {
  public string $message;
}

class ListEntitiesDetectionV2JobsResponse {
  public string $next_token;
  public ComprehendMedicalAsyncJobPropertiesList $comprehend_medical_async_job_properties_list;
}

class S3Key {
}

class StartPHIDetectionJobResponse {
  public JobId $job_id;
}

class DescribePHIDetectionJobResponse {
  public ComprehendMedicalAsyncJobProperties $comprehend_medical_async_job_properties;
}

class DetectEntitiesResponse {
  public EntityList $entities;
  public UnmappedAttributeList $unmapped_attributes;
  public string $pagination_token;
  public string $model_version;
}

class DetectPHIResponse {
  public EntityList $entities;
  public string $pagination_token;
  public string $model_version;
}

class Entity {
  public AttributeList $attributes;
  public EntityType $category;
  public int $begin_offset;
  public int $end_offset;
  public Float $score;
  public string $text;
  public EntitySubType $type;
  public TraitList $traits;
  public int $id;
}

class ListPHIDetectionJobsRequest {
  public string $next_token;
  public MaxResultsInteger $max_results;
  public ComprehendMedicalAsyncJobFilter $filter;
}

class RxNormConcept {
  public string $description;
  public string $code;
  public Float $score;
}

class String {
}

class ClientRequestTokenString {
}

class InferRxNormRequest {
  public OntologyLinkingBoundedLengthString $text;
}

class InvalidRequestException {
  public string $message;
}

class JobId {
}

class ListPHIDetectionJobsResponse {
  public ComprehendMedicalAsyncJobPropertiesList $comprehend_medical_async_job_properties_list;
  public string $next_token;
}

class TextSizeLimitExceededException {
  public string $message;
}

class BoundedLengthString {
}

class ComprehendMedicalAsyncJobFilter {
  public Timestamp $submit_time_after;
  public JobName $job_name;
  public JobStatus $job_status;
  public Timestamp $submit_time_before;
}

class InputDataConfig {
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_key;
}

class RxNormEntityList {
}

class StopPHIDetectionJobRequest {
  public JobId $job_id;
}

class AttributeName {
}

class EntityType {
}

class InferICD10CMRequest {
  public OntologyLinkingBoundedLengthString $text;
}

class RxNormConceptList {
}

class StopEntitiesDetectionV2JobResponse {
  public JobId $job_id;
}

class ICD10CMConcept {
  public string $description;
  public string $code;
  public Float $score;
}

class InferICD10CMResponse {
  public ICD10CMEntityList $entities;
  public string $pagination_token;
  public string $model_version;
}

class JobName {
}

class StartPHIDetectionJobRequest {
  public InputDataConfig $input_data_config;
  public OutputDataConfig $output_data_config;
  public IamRoleArn $data_access_role_arn;
  public JobName $job_name;
  public ClientRequestTokenString $client_request_token;
  public KMSKey $kms_key;
  public LanguageCode $language_code;
}

class InvalidEncodingException {
  public string $message;
}

class OutputDataConfig {
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_key;
}

class AttributeList {
}

class DescribeEntitiesDetectionV2JobRequest {
  public JobId $job_id;
}

class Float {
}

class ICD10CMAttributeType {
}

class RxNormTrait {
  public RxNormTraitName $name;
  public Float $score;
}

class StopEntitiesDetectionV2JobRequest {
  public JobId $job_id;
}


<?hh // strict
namespace slack\aws\comprehend;

interface Comprehend {
  public function BatchDetectDominantLanguage(BatchDetectDominantLanguageRequest) Awaitable<Errors\Result<BatchDetectDominantLanguageResponse>>;
  public function BatchDetectEntities(BatchDetectEntitiesRequest) Awaitable<Errors\Result<BatchDetectEntitiesResponse>>;
  public function BatchDetectKeyPhrases(BatchDetectKeyPhrasesRequest) Awaitable<Errors\Result<BatchDetectKeyPhrasesResponse>>;
  public function BatchDetectSentiment(BatchDetectSentimentRequest) Awaitable<Errors\Result<BatchDetectSentimentResponse>>;
  public function BatchDetectSyntax(BatchDetectSyntaxRequest) Awaitable<Errors\Result<BatchDetectSyntaxResponse>>;
  public function ClassifyDocument(ClassifyDocumentRequest) Awaitable<Errors\Result<ClassifyDocumentResponse>>;
  public function CreateDocumentClassifier(CreateDocumentClassifierRequest) Awaitable<Errors\Result<CreateDocumentClassifierResponse>>;
  public function CreateEndpoint(CreateEndpointRequest) Awaitable<Errors\Result<CreateEndpointResponse>>;
  public function CreateEntityRecognizer(CreateEntityRecognizerRequest) Awaitable<Errors\Result<CreateEntityRecognizerResponse>>;
  public function DeleteDocumentClassifier(DeleteDocumentClassifierRequest) Awaitable<Errors\Result<DeleteDocumentClassifierResponse>>;
  public function DeleteEndpoint(DeleteEndpointRequest) Awaitable<Errors\Result<DeleteEndpointResponse>>;
  public function DeleteEntityRecognizer(DeleteEntityRecognizerRequest) Awaitable<Errors\Result<DeleteEntityRecognizerResponse>>;
  public function DescribeDocumentClassificationJob(DescribeDocumentClassificationJobRequest) Awaitable<Errors\Result<DescribeDocumentClassificationJobResponse>>;
  public function DescribeDocumentClassifier(DescribeDocumentClassifierRequest) Awaitable<Errors\Result<DescribeDocumentClassifierResponse>>;
  public function DescribeDominantLanguageDetectionJob(DescribeDominantLanguageDetectionJobRequest) Awaitable<Errors\Result<DescribeDominantLanguageDetectionJobResponse>>;
  public function DescribeEndpoint(DescribeEndpointRequest) Awaitable<Errors\Result<DescribeEndpointResponse>>;
  public function DescribeEntitiesDetectionJob(DescribeEntitiesDetectionJobRequest) Awaitable<Errors\Result<DescribeEntitiesDetectionJobResponse>>;
  public function DescribeEntityRecognizer(DescribeEntityRecognizerRequest) Awaitable<Errors\Result<DescribeEntityRecognizerResponse>>;
  public function DescribeKeyPhrasesDetectionJob(DescribeKeyPhrasesDetectionJobRequest) Awaitable<Errors\Result<DescribeKeyPhrasesDetectionJobResponse>>;
  public function DescribeSentimentDetectionJob(DescribeSentimentDetectionJobRequest) Awaitable<Errors\Result<DescribeSentimentDetectionJobResponse>>;
  public function DescribeTopicsDetectionJob(DescribeTopicsDetectionJobRequest) Awaitable<Errors\Result<DescribeTopicsDetectionJobResponse>>;
  public function DetectDominantLanguage(DetectDominantLanguageRequest) Awaitable<Errors\Result<DetectDominantLanguageResponse>>;
  public function DetectEntities(DetectEntitiesRequest) Awaitable<Errors\Result<DetectEntitiesResponse>>;
  public function DetectKeyPhrases(DetectKeyPhrasesRequest) Awaitable<Errors\Result<DetectKeyPhrasesResponse>>;
  public function DetectSentiment(DetectSentimentRequest) Awaitable<Errors\Result<DetectSentimentResponse>>;
  public function DetectSyntax(DetectSyntaxRequest) Awaitable<Errors\Result<DetectSyntaxResponse>>;
  public function ListDocumentClassificationJobs(ListDocumentClassificationJobsRequest) Awaitable<Errors\Result<ListDocumentClassificationJobsResponse>>;
  public function ListDocumentClassifiers(ListDocumentClassifiersRequest) Awaitable<Errors\Result<ListDocumentClassifiersResponse>>;
  public function ListDominantLanguageDetectionJobs(ListDominantLanguageDetectionJobsRequest) Awaitable<Errors\Result<ListDominantLanguageDetectionJobsResponse>>;
  public function ListEndpoints(ListEndpointsRequest) Awaitable<Errors\Result<ListEndpointsResponse>>;
  public function ListEntitiesDetectionJobs(ListEntitiesDetectionJobsRequest) Awaitable<Errors\Result<ListEntitiesDetectionJobsResponse>>;
  public function ListEntityRecognizers(ListEntityRecognizersRequest) Awaitable<Errors\Result<ListEntityRecognizersResponse>>;
  public function ListKeyPhrasesDetectionJobs(ListKeyPhrasesDetectionJobsRequest) Awaitable<Errors\Result<ListKeyPhrasesDetectionJobsResponse>>;
  public function ListSentimentDetectionJobs(ListSentimentDetectionJobsRequest) Awaitable<Errors\Result<ListSentimentDetectionJobsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTopicsDetectionJobs(ListTopicsDetectionJobsRequest) Awaitable<Errors\Result<ListTopicsDetectionJobsResponse>>;
  public function StartDocumentClassificationJob(StartDocumentClassificationJobRequest) Awaitable<Errors\Result<StartDocumentClassificationJobResponse>>;
  public function StartDominantLanguageDetectionJob(StartDominantLanguageDetectionJobRequest) Awaitable<Errors\Result<StartDominantLanguageDetectionJobResponse>>;
  public function StartEntitiesDetectionJob(StartEntitiesDetectionJobRequest) Awaitable<Errors\Result<StartEntitiesDetectionJobResponse>>;
  public function StartKeyPhrasesDetectionJob(StartKeyPhrasesDetectionJobRequest) Awaitable<Errors\Result<StartKeyPhrasesDetectionJobResponse>>;
  public function StartSentimentDetectionJob(StartSentimentDetectionJobRequest) Awaitable<Errors\Result<StartSentimentDetectionJobResponse>>;
  public function StartTopicsDetectionJob(StartTopicsDetectionJobRequest) Awaitable<Errors\Result<StartTopicsDetectionJobResponse>>;
  public function StopDominantLanguageDetectionJob(StopDominantLanguageDetectionJobRequest) Awaitable<Errors\Result<StopDominantLanguageDetectionJobResponse>>;
  public function StopEntitiesDetectionJob(StopEntitiesDetectionJobRequest) Awaitable<Errors\Result<StopEntitiesDetectionJobResponse>>;
  public function StopKeyPhrasesDetectionJob(StopKeyPhrasesDetectionJobRequest) Awaitable<Errors\Result<StopKeyPhrasesDetectionJobResponse>>;
  public function StopSentimentDetectionJob(StopSentimentDetectionJobRequest) Awaitable<Errors\Result<StopSentimentDetectionJobResponse>>;
  public function StopTrainingDocumentClassifier(StopTrainingDocumentClassifierRequest) Awaitable<Errors\Result<StopTrainingDocumentClassifierResponse>>;
  public function StopTrainingEntityRecognizer(StopTrainingEntityRecognizerRequest) Awaitable<Errors\Result<StopTrainingEntityRecognizerResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateEndpoint(UpdateEndpointRequest) Awaitable<Errors\Result<UpdateEndpointResponse>>;
}

class AnyLengthString {
}

class BatchDetectDominantLanguageItemResult {
  public int $index;
  public ListOfDominantLanguages $languages;
}

class BatchDetectDominantLanguageRequest {
  public StringList $text_list;
}

class BatchDetectDominantLanguageResponse {
  public BatchItemErrorList $error_list;
  public ListOfDetectDominantLanguageResult $result_list;
}

class BatchDetectEntitiesItemResult {
  public ListOfEntities $entities;
  public int $index;
}

class BatchDetectEntitiesRequest {
  public LanguageCode $language_code;
  public StringList $text_list;
}

class BatchDetectEntitiesResponse {
  public BatchItemErrorList $error_list;
  public ListOfDetectEntitiesResult $result_list;
}

class BatchDetectKeyPhrasesItemResult {
  public int $index;
  public ListOfKeyPhrases $key_phrases;
}

class BatchDetectKeyPhrasesRequest {
  public LanguageCode $language_code;
  public StringList $text_list;
}

class BatchDetectKeyPhrasesResponse {
  public BatchItemErrorList $error_list;
  public ListOfDetectKeyPhrasesResult $result_list;
}

class BatchDetectSentimentItemResult {
  public int $index;
  public SentimentType $sentiment;
  public SentimentScore $sentiment_score;
}

class BatchDetectSentimentRequest {
  public LanguageCode $language_code;
  public StringList $text_list;
}

class BatchDetectSentimentResponse {
  public BatchItemErrorList $error_list;
  public ListOfDetectSentimentResult $result_list;
}

class BatchDetectSyntaxItemResult {
  public int $index;
  public ListOfSyntaxTokens $syntax_tokens;
}

class BatchDetectSyntaxRequest {
  public SyntaxLanguageCode $language_code;
  public StringList $text_list;
}

class BatchDetectSyntaxResponse {
  public BatchItemErrorList $error_list;
  public ListOfDetectSyntaxResult $result_list;
}

class BatchItemError {
  public string $error_code;
  public string $error_message;
  public int $index;
}

class BatchItemErrorList {
}

class BatchSizeLimitExceededException {
  public string $message;
}

class ClassifierEvaluationMetrics {
  public Double $accuracy;
  public Double $f_1_score;
  public Double $hamming_loss;
  public Double $micro_f_1_score;
  public Double $micro_precision;
  public Double $micro_recall;
  public Double $precision;
  public Double $recall;
}

class ClassifierMetadata {
  public ClassifierEvaluationMetrics $evaluation_metrics;
  public int $number_of_labels;
  public int $number_of_test_documents;
  public int $number_of_trained_documents;
}

class ClassifyDocumentRequest {
  public DocumentClassifierEndpointArn $endpoint_arn;
  public string $text;
}

class ClassifyDocumentResponse {
  public ListOfClasses $classes;
  public ListOfLabels $labels;
}

class ClientRequestTokenString {
}

class ComprehendArn {
}

class ComprehendArnName {
}

class ComprehendEndpointArn {
}

class ComprehendEndpointName {
}

class ComprehendModelArn {
}

class ConcurrentModificationException {
  public string $message;
}

class CreateDocumentClassifierRequest {
  public ClientRequestTokenString $client_request_token;
  public IamRoleArn $data_access_role_arn;
  public ComprehendArnName $document_classifier_name;
  public DocumentClassifierInputDataConfig $input_data_config;
  public LanguageCode $language_code;
  public DocumentClassifierMode $mode;
  public DocumentClassifierOutputDataConfig $output_data_config;
  public TagList $tags;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
}

class CreateDocumentClassifierResponse {
  public DocumentClassifierArn $document_classifier_arn;
}

class CreateEndpointRequest {
  public ClientRequestTokenString $client_request_token;
  public InferenceUnitsInteger $desired_inference_units;
  public ComprehendEndpointName $endpoint_name;
  public ComprehendModelArn $model_arn;
  public TagList $tags;
}

class CreateEndpointResponse {
  public ComprehendEndpointArn $endpoint_arn;
}

class CreateEntityRecognizerRequest {
  public ClientRequestTokenString $client_request_token;
  public IamRoleArn $data_access_role_arn;
  public EntityRecognizerInputDataConfig $input_data_config;
  public LanguageCode $language_code;
  public ComprehendArnName $recognizer_name;
  public TagList $tags;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
}

class CreateEntityRecognizerResponse {
  public EntityRecognizerArn $entity_recognizer_arn;
}

class DeleteDocumentClassifierRequest {
  public DocumentClassifierArn $document_classifier_arn;
}

class DeleteDocumentClassifierResponse {
}

class DeleteEndpointRequest {
  public ComprehendEndpointArn $endpoint_arn;
}

class DeleteEndpointResponse {
}

class DeleteEntityRecognizerRequest {
  public EntityRecognizerArn $entity_recognizer_arn;
}

class DeleteEntityRecognizerResponse {
}

class DescribeDocumentClassificationJobRequest {
  public JobId $job_id;
}

class DescribeDocumentClassificationJobResponse {
  public DocumentClassificationJobProperties $document_classification_job_properties;
}

class DescribeDocumentClassifierRequest {
  public DocumentClassifierArn $document_classifier_arn;
}

class DescribeDocumentClassifierResponse {
  public DocumentClassifierProperties $document_classifier_properties;
}

class DescribeDominantLanguageDetectionJobRequest {
  public JobId $job_id;
}

class DescribeDominantLanguageDetectionJobResponse {
  public DominantLanguageDetectionJobProperties $dominant_language_detection_job_properties;
}

class DescribeEndpointRequest {
  public ComprehendEndpointArn $endpoint_arn;
}

class DescribeEndpointResponse {
  public EndpointProperties $endpoint_properties;
}

class DescribeEntitiesDetectionJobRequest {
  public JobId $job_id;
}

class DescribeEntitiesDetectionJobResponse {
  public EntitiesDetectionJobProperties $entities_detection_job_properties;
}

class DescribeEntityRecognizerRequest {
  public EntityRecognizerArn $entity_recognizer_arn;
}

class DescribeEntityRecognizerResponse {
  public EntityRecognizerProperties $entity_recognizer_properties;
}

class DescribeKeyPhrasesDetectionJobRequest {
  public JobId $job_id;
}

class DescribeKeyPhrasesDetectionJobResponse {
  public KeyPhrasesDetectionJobProperties $key_phrases_detection_job_properties;
}

class DescribeSentimentDetectionJobRequest {
  public JobId $job_id;
}

class DescribeSentimentDetectionJobResponse {
  public SentimentDetectionJobProperties $sentiment_detection_job_properties;
}

class DescribeTopicsDetectionJobRequest {
  public JobId $job_id;
}

class DescribeTopicsDetectionJobResponse {
  public TopicsDetectionJobProperties $topics_detection_job_properties;
}

class DetectDominantLanguageRequest {
  public string $text;
}

class DetectDominantLanguageResponse {
  public ListOfDominantLanguages $languages;
}

class DetectEntitiesRequest {
  public LanguageCode $language_code;
  public string $text;
}

class DetectEntitiesResponse {
  public ListOfEntities $entities;
}

class DetectKeyPhrasesRequest {
  public LanguageCode $language_code;
  public string $text;
}

class DetectKeyPhrasesResponse {
  public ListOfKeyPhrases $key_phrases;
}

class DetectSentimentRequest {
  public LanguageCode $language_code;
  public string $text;
}

class DetectSentimentResponse {
  public SentimentType $sentiment;
  public SentimentScore $sentiment_score;
}

class DetectSyntaxRequest {
  public SyntaxLanguageCode $language_code;
  public string $text;
}

class DetectSyntaxResponse {
  public ListOfSyntaxTokens $syntax_tokens;
}

class DocumentClass {
  public string $name;
  public Float $score;
}

class DocumentClassificationJobFilter {
  public JobName $job_name;
  public JobStatus $job_status;
  public Timestamp $submit_time_after;
  public Timestamp $submit_time_before;
}

class DocumentClassificationJobProperties {
  public IamRoleArn $data_access_role_arn;
  public DocumentClassifierArn $document_classifier_arn;
  public Timestamp $end_time;
  public InputDataConfig $input_data_config;
  public JobId $job_id;
  public JobName $job_name;
  public JobStatus $job_status;
  public AnyLengthString $message;
  public OutputDataConfig $output_data_config;
  public Timestamp $submit_time;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
}

class DocumentClassificationJobPropertiesList {
}

class DocumentClassifierArn {
}

class DocumentClassifierEndpointArn {
}

class DocumentClassifierFilter {
  public ModelStatus $status;
  public Timestamp $submit_time_after;
  public Timestamp $submit_time_before;
}

class DocumentClassifierInputDataConfig {
  public LabelDelimiter $label_delimiter;
  public S3Uri $s_3_uri;
}

class DocumentClassifierMode {
}

class DocumentClassifierOutputDataConfig {
  public KmsKeyId $kms_key_id;
  public S3Uri $s_3_uri;
}

class DocumentClassifierProperties {
  public ClassifierMetadata $classifier_metadata;
  public IamRoleArn $data_access_role_arn;
  public DocumentClassifierArn $document_classifier_arn;
  public Timestamp $end_time;
  public DocumentClassifierInputDataConfig $input_data_config;
  public LanguageCode $language_code;
  public AnyLengthString $message;
  public DocumentClassifierMode $mode;
  public DocumentClassifierOutputDataConfig $output_data_config;
  public ModelStatus $status;
  public Timestamp $submit_time;
  public Timestamp $training_end_time;
  public Timestamp $training_start_time;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
}

class DocumentClassifierPropertiesList {
}

class DocumentLabel {
  public string $name;
  public Float $score;
}

class DominantLanguage {
  public string $language_code;
  public Float $score;
}

class DominantLanguageDetectionJobFilter {
  public JobName $job_name;
  public JobStatus $job_status;
  public Timestamp $submit_time_after;
  public Timestamp $submit_time_before;
}

class DominantLanguageDetectionJobProperties {
  public IamRoleArn $data_access_role_arn;
  public Timestamp $end_time;
  public InputDataConfig $input_data_config;
  public JobId $job_id;
  public JobName $job_name;
  public JobStatus $job_status;
  public AnyLengthString $message;
  public OutputDataConfig $output_data_config;
  public Timestamp $submit_time;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
}

class DominantLanguageDetectionJobPropertiesList {
}

class Double {
}

class EndpointFilter {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public ComprehendModelArn $model_arn;
  public EndpointStatus $status;
}

class EndpointProperties {
  public Timestamp $creation_time;
  public InferenceUnitsInteger $current_inference_units;
  public InferenceUnitsInteger $desired_inference_units;
  public ComprehendEndpointArn $endpoint_arn;
  public Timestamp $last_modified_time;
  public AnyLengthString $message;
  public ComprehendModelArn $model_arn;
  public EndpointStatus $status;
}

class EndpointPropertiesList {
}

class EndpointStatus {
}

class EntitiesDetectionJobFilter {
  public JobName $job_name;
  public JobStatus $job_status;
  public Timestamp $submit_time_after;
  public Timestamp $submit_time_before;
}

class EntitiesDetectionJobProperties {
  public IamRoleArn $data_access_role_arn;
  public Timestamp $end_time;
  public EntityRecognizerArn $entity_recognizer_arn;
  public InputDataConfig $input_data_config;
  public JobId $job_id;
  public JobName $job_name;
  public JobStatus $job_status;
  public LanguageCode $language_code;
  public AnyLengthString $message;
  public OutputDataConfig $output_data_config;
  public Timestamp $submit_time;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
}

class EntitiesDetectionJobPropertiesList {
}

class Entity {
  public int $begin_offset;
  public int $end_offset;
  public Float $score;
  public string $text;
  public EntityType $type;
}

class EntityRecognizerAnnotations {
  public S3Uri $s_3_uri;
}

class EntityRecognizerArn {
}

class EntityRecognizerDocuments {
  public S3Uri $s_3_uri;
}

class EntityRecognizerEntityList {
  public S3Uri $s_3_uri;
}

class EntityRecognizerEvaluationMetrics {
  public Double $f_1_score;
  public Double $precision;
  public Double $recall;
}

class EntityRecognizerFilter {
  public ModelStatus $status;
  public Timestamp $submit_time_after;
  public Timestamp $submit_time_before;
}

class EntityRecognizerInputDataConfig {
  public EntityRecognizerAnnotations $annotations;
  public EntityRecognizerDocuments $documents;
  public EntityRecognizerEntityList $entity_list;
  public EntityTypesList $entity_types;
}

class EntityRecognizerMetadata {
  public EntityRecognizerMetadataEntityTypesList $entity_types;
  public EntityRecognizerEvaluationMetrics $evaluation_metrics;
  public int $number_of_test_documents;
  public int $number_of_trained_documents;
}

class EntityRecognizerMetadataEntityTypesList {
}

class EntityRecognizerMetadataEntityTypesListItem {
  public EntityTypesEvaluationMetrics $evaluation_metrics;
  public int $number_of_train_mentions;
  public AnyLengthString $type;
}

class EntityRecognizerProperties {
  public IamRoleArn $data_access_role_arn;
  public Timestamp $end_time;
  public EntityRecognizerArn $entity_recognizer_arn;
  public EntityRecognizerInputDataConfig $input_data_config;
  public LanguageCode $language_code;
  public AnyLengthString $message;
  public EntityRecognizerMetadata $recognizer_metadata;
  public ModelStatus $status;
  public Timestamp $submit_time;
  public Timestamp $training_end_time;
  public Timestamp $training_start_time;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
}

class EntityRecognizerPropertiesList {
}

class EntityType {
}

class EntityTypeName {
}

class EntityTypesEvaluationMetrics {
  public Double $f_1_score;
  public Double $precision;
  public Double $recall;
}

class EntityTypesList {
}

class EntityTypesListItem {
  public EntityTypeName $type;
}

class Float {
}

class IamRoleArn {
}

class InferenceUnitsInteger {
}

class InputDataConfig {
  public InputFormat $input_format;
  public S3Uri $s_3_uri;
}

class InputFormat {
}

class Integer {
}

class InternalServerException {
  public string $message;
}

class InvalidFilterException {
  public string $message;
}

class InvalidRequestException {
  public string $message;
}

class JobId {
}

class JobName {
}

class JobNotFoundException {
  public string $message;
}

class JobStatus {
}

class KeyPhrase {
  public int $begin_offset;
  public int $end_offset;
  public Float $score;
  public string $text;
}

class KeyPhrasesDetectionJobFilter {
  public JobName $job_name;
  public JobStatus $job_status;
  public Timestamp $submit_time_after;
  public Timestamp $submit_time_before;
}

class KeyPhrasesDetectionJobProperties {
  public IamRoleArn $data_access_role_arn;
  public Timestamp $end_time;
  public InputDataConfig $input_data_config;
  public JobId $job_id;
  public JobName $job_name;
  public JobStatus $job_status;
  public LanguageCode $language_code;
  public AnyLengthString $message;
  public OutputDataConfig $output_data_config;
  public Timestamp $submit_time;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
}

class KeyPhrasesDetectionJobPropertiesList {
}

class KmsKeyId {
}

class KmsKeyValidationException {
  public string $message;
}

class LabelDelimiter {
}

class LanguageCode {
}

class ListDocumentClassificationJobsRequest {
  public DocumentClassificationJobFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;
}

class ListDocumentClassificationJobsResponse {
  public DocumentClassificationJobPropertiesList $document_classification_job_properties_list;
  public string $next_token;
}

class ListDocumentClassifiersRequest {
  public DocumentClassifierFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;
}

class ListDocumentClassifiersResponse {
  public DocumentClassifierPropertiesList $document_classifier_properties_list;
  public string $next_token;
}

class ListDominantLanguageDetectionJobsRequest {
  public DominantLanguageDetectionJobFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;
}

class ListDominantLanguageDetectionJobsResponse {
  public DominantLanguageDetectionJobPropertiesList $dominant_language_detection_job_properties_list;
  public string $next_token;
}

class ListEndpointsRequest {
  public EndpointFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;
}

class ListEndpointsResponse {
  public EndpointPropertiesList $endpoint_properties_list;
  public string $next_token;
}

class ListEntitiesDetectionJobsRequest {
  public EntitiesDetectionJobFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;
}

class ListEntitiesDetectionJobsResponse {
  public EntitiesDetectionJobPropertiesList $entities_detection_job_properties_list;
  public string $next_token;
}

class ListEntityRecognizersRequest {
  public EntityRecognizerFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;
}

class ListEntityRecognizersResponse {
  public EntityRecognizerPropertiesList $entity_recognizer_properties_list;
  public string $next_token;
}

class ListKeyPhrasesDetectionJobsRequest {
  public KeyPhrasesDetectionJobFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;
}

class ListKeyPhrasesDetectionJobsResponse {
  public KeyPhrasesDetectionJobPropertiesList $key_phrases_detection_job_properties_list;
  public string $next_token;
}

class ListOfClasses {
}

class ListOfDetectDominantLanguageResult {
}

class ListOfDetectEntitiesResult {
}

class ListOfDetectKeyPhrasesResult {
}

class ListOfDetectSentimentResult {
}

class ListOfDetectSyntaxResult {
}

class ListOfDominantLanguages {
}

class ListOfEntities {
}

class ListOfKeyPhrases {
}

class ListOfLabels {
}

class ListOfSyntaxTokens {
}

class ListSentimentDetectionJobsRequest {
  public SentimentDetectionJobFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;
}

class ListSentimentDetectionJobsResponse {
  public string $next_token;
  public SentimentDetectionJobPropertiesList $sentiment_detection_job_properties_list;
}

class ListTagsForResourceRequest {
  public ComprehendArn $resource_arn;
}

class ListTagsForResourceResponse {
  public ComprehendArn $resource_arn;
  public TagList $tags;
}

class ListTopicsDetectionJobsRequest {
  public TopicsDetectionJobFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;
}

class ListTopicsDetectionJobsResponse {
  public string $next_token;
  public TopicsDetectionJobPropertiesList $topics_detection_job_properties_list;
}

class MaxResultsInteger {
}

class ModelStatus {
}

class NumberOfTopicsInteger {
}

class OutputDataConfig {
  public KmsKeyId $kms_key_id;
  public S3Uri $s_3_uri;
}

class PartOfSpeechTag {
  public Float $score;
  public PartOfSpeechTagType $tag;
}

class PartOfSpeechTagType {
}

class ResourceInUseException {
  public string $message;
}

class ResourceLimitExceededException {
  public string $message;
}

class ResourceNotFoundException {
  public string $message;
}

class ResourceUnavailableException {
  public string $message;
}

class S3Uri {
}

class SecurityGroupId {
}

class SecurityGroupIds {
}

class SentimentDetectionJobFilter {
  public JobName $job_name;
  public JobStatus $job_status;
  public Timestamp $submit_time_after;
  public Timestamp $submit_time_before;
}

class SentimentDetectionJobProperties {
  public IamRoleArn $data_access_role_arn;
  public Timestamp $end_time;
  public InputDataConfig $input_data_config;
  public JobId $job_id;
  public JobName $job_name;
  public JobStatus $job_status;
  public LanguageCode $language_code;
  public AnyLengthString $message;
  public OutputDataConfig $output_data_config;
  public Timestamp $submit_time;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
}

class SentimentDetectionJobPropertiesList {
}

class SentimentScore {
  public Float $mixed;
  public Float $negative;
  public Float $neutral;
  public Float $positive;
}

class SentimentType {
}

class StartDocumentClassificationJobRequest {
  public ClientRequestTokenString $client_request_token;
  public IamRoleArn $data_access_role_arn;
  public DocumentClassifierArn $document_classifier_arn;
  public InputDataConfig $input_data_config;
  public JobName $job_name;
  public OutputDataConfig $output_data_config;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
}

class StartDocumentClassificationJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class StartDominantLanguageDetectionJobRequest {
  public ClientRequestTokenString $client_request_token;
  public IamRoleArn $data_access_role_arn;
  public InputDataConfig $input_data_config;
  public JobName $job_name;
  public OutputDataConfig $output_data_config;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
}

class StartDominantLanguageDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class StartEntitiesDetectionJobRequest {
  public ClientRequestTokenString $client_request_token;
  public IamRoleArn $data_access_role_arn;
  public EntityRecognizerArn $entity_recognizer_arn;
  public InputDataConfig $input_data_config;
  public JobName $job_name;
  public LanguageCode $language_code;
  public OutputDataConfig $output_data_config;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
}

class StartEntitiesDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class StartKeyPhrasesDetectionJobRequest {
  public ClientRequestTokenString $client_request_token;
  public IamRoleArn $data_access_role_arn;
  public InputDataConfig $input_data_config;
  public JobName $job_name;
  public LanguageCode $language_code;
  public OutputDataConfig $output_data_config;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
}

class StartKeyPhrasesDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class StartSentimentDetectionJobRequest {
  public ClientRequestTokenString $client_request_token;
  public IamRoleArn $data_access_role_arn;
  public InputDataConfig $input_data_config;
  public JobName $job_name;
  public LanguageCode $language_code;
  public OutputDataConfig $output_data_config;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
}

class StartSentimentDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class StartTopicsDetectionJobRequest {
  public ClientRequestTokenString $client_request_token;
  public IamRoleArn $data_access_role_arn;
  public InputDataConfig $input_data_config;
  public JobName $job_name;
  public NumberOfTopicsInteger $number_of_topics;
  public OutputDataConfig $output_data_config;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
}

class StartTopicsDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class StopDominantLanguageDetectionJobRequest {
  public JobId $job_id;
}

class StopDominantLanguageDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class StopEntitiesDetectionJobRequest {
  public JobId $job_id;
}

class StopEntitiesDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class StopKeyPhrasesDetectionJobRequest {
  public JobId $job_id;
}

class StopKeyPhrasesDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class StopSentimentDetectionJobRequest {
  public JobId $job_id;
}

class StopSentimentDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class StopTrainingDocumentClassifierRequest {
  public DocumentClassifierArn $document_classifier_arn;
}

class StopTrainingDocumentClassifierResponse {
}

class StopTrainingEntityRecognizerRequest {
  public EntityRecognizerArn $entity_recognizer_arn;
}

class StopTrainingEntityRecognizerResponse {
}

class String {
}

class StringList {
}

class SubnetId {
}

class Subnets {
}

class SyntaxLanguageCode {
}

class SyntaxToken {
  public int $begin_offset;
  public int $end_offset;
  public PartOfSpeechTag $part_of_speech;
  public string $text;
  public int $token_id;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagResourceRequest {
  public ComprehendArn $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class TextSizeLimitExceededException {
  public string $message;
}

class Timestamp {
}

class TooManyRequestsException {
  public string $message;
}

class TooManyTagKeysException {
  public string $message;
}

class TooManyTagsException {
  public string $message;
}

class TopicsDetectionJobFilter {
  public JobName $job_name;
  public JobStatus $job_status;
  public Timestamp $submit_time_after;
  public Timestamp $submit_time_before;
}

class TopicsDetectionJobProperties {
  public IamRoleArn $data_access_role_arn;
  public Timestamp $end_time;
  public InputDataConfig $input_data_config;
  public JobId $job_id;
  public JobName $job_name;
  public JobStatus $job_status;
  public AnyLengthString $message;
  public int $number_of_topics;
  public OutputDataConfig $output_data_config;
  public Timestamp $submit_time;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
}

class TopicsDetectionJobPropertiesList {
}

class UnsupportedLanguageException {
  public string $message;
}

class UntagResourceRequest {
  public ComprehendArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateEndpointRequest {
  public InferenceUnitsInteger $desired_inference_units;
  public ComprehendEndpointArn $endpoint_arn;
}

class UpdateEndpointResponse {
}

class VpcConfig {
  public SecurityGroupIds $security_group_ids;
  public Subnets $subnets;
}


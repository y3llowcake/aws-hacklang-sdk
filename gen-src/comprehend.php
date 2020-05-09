<?hh // strict
namespace slack\aws\comprehend;

interface Comprehend {
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function DescribeDocumentClassifier(DescribeDocumentClassifierRequest) Awaitable<Errors\Result<DescribeDocumentClassifierResponse>>;
  public function DescribeEndpoint(DescribeEndpointRequest) Awaitable<Errors\Result<DescribeEndpointResponse>>;
  public function DetectSyntax(DetectSyntaxRequest) Awaitable<Errors\Result<DetectSyntaxResponse>>;
  public function ListKeyPhrasesDetectionJobs(ListKeyPhrasesDetectionJobsRequest) Awaitable<Errors\Result<ListKeyPhrasesDetectionJobsResponse>>;
  public function ClassifyDocument(ClassifyDocumentRequest) Awaitable<Errors\Result<ClassifyDocumentResponse>>;
  public function ListDocumentClassificationJobs(ListDocumentClassificationJobsRequest) Awaitable<Errors\Result<ListDocumentClassificationJobsResponse>>;
  public function StopKeyPhrasesDetectionJob(StopKeyPhrasesDetectionJobRequest) Awaitable<Errors\Result<StopKeyPhrasesDetectionJobResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function DetectSentiment(DetectSentimentRequest) Awaitable<Errors\Result<DetectSentimentResponse>>;
  public function ListDominantLanguageDetectionJobs(ListDominantLanguageDetectionJobsRequest) Awaitable<Errors\Result<ListDominantLanguageDetectionJobsResponse>>;
  public function ListEntitiesDetectionJobs(ListEntitiesDetectionJobsRequest) Awaitable<Errors\Result<ListEntitiesDetectionJobsResponse>>;
  public function StartDocumentClassificationJob(StartDocumentClassificationJobRequest) Awaitable<Errors\Result<StartDocumentClassificationJobResponse>>;
  public function BatchDetectEntities(BatchDetectEntitiesRequest) Awaitable<Errors\Result<BatchDetectEntitiesResponse>>;
  public function CreateEntityRecognizer(CreateEntityRecognizerRequest) Awaitable<Errors\Result<CreateEntityRecognizerResponse>>;
  public function DeleteDocumentClassifier(DeleteDocumentClassifierRequest) Awaitable<Errors\Result<DeleteDocumentClassifierResponse>>;
  public function DescribeTopicsDetectionJob(DescribeTopicsDetectionJobRequest) Awaitable<Errors\Result<DescribeTopicsDetectionJobResponse>>;
  public function StartDominantLanguageDetectionJob(StartDominantLanguageDetectionJobRequest) Awaitable<Errors\Result<StartDominantLanguageDetectionJobResponse>>;
  public function StartEntitiesDetectionJob(StartEntitiesDetectionJobRequest) Awaitable<Errors\Result<StartEntitiesDetectionJobResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function StopTrainingEntityRecognizer(StopTrainingEntityRecognizerRequest) Awaitable<Errors\Result<StopTrainingEntityRecognizerResponse>>;
  public function BatchDetectDominantLanguage(BatchDetectDominantLanguageRequest) Awaitable<Errors\Result<BatchDetectDominantLanguageResponse>>;
  public function DescribeKeyPhrasesDetectionJob(DescribeKeyPhrasesDetectionJobRequest) Awaitable<Errors\Result<DescribeKeyPhrasesDetectionJobResponse>>;
  public function ListEndpoints(ListEndpointsRequest) Awaitable<Errors\Result<ListEndpointsResponse>>;
  public function StartTopicsDetectionJob(StartTopicsDetectionJobRequest) Awaitable<Errors\Result<StartTopicsDetectionJobResponse>>;
  public function StartKeyPhrasesDetectionJob(StartKeyPhrasesDetectionJobRequest) Awaitable<Errors\Result<StartKeyPhrasesDetectionJobResponse>>;
  public function DescribeDocumentClassificationJob(DescribeDocumentClassificationJobRequest) Awaitable<Errors\Result<DescribeDocumentClassificationJobResponse>>;
  public function DescribeEntityRecognizer(DescribeEntityRecognizerRequest) Awaitable<Errors\Result<DescribeEntityRecognizerResponse>>;
  public function DetectDominantLanguage(DetectDominantLanguageRequest) Awaitable<Errors\Result<DetectDominantLanguageResponse>>;
  public function ListTopicsDetectionJobs(ListTopicsDetectionJobsRequest) Awaitable<Errors\Result<ListTopicsDetectionJobsResponse>>;
  public function StopSentimentDetectionJob(StopSentimentDetectionJobRequest) Awaitable<Errors\Result<StopSentimentDetectionJobResponse>>;
  public function BatchDetectSentiment(BatchDetectSentimentRequest) Awaitable<Errors\Result<BatchDetectSentimentResponse>>;
  public function CreateEndpoint(CreateEndpointRequest) Awaitable<Errors\Result<CreateEndpointResponse>>;
  public function ListDocumentClassifiers(ListDocumentClassifiersRequest) Awaitable<Errors\Result<ListDocumentClassifiersResponse>>;
  public function StopEntitiesDetectionJob(StopEntitiesDetectionJobRequest) Awaitable<Errors\Result<StopEntitiesDetectionJobResponse>>;
  public function DescribeEntitiesDetectionJob(DescribeEntitiesDetectionJobRequest) Awaitable<Errors\Result<DescribeEntitiesDetectionJobResponse>>;
  public function StartSentimentDetectionJob(StartSentimentDetectionJobRequest) Awaitable<Errors\Result<StartSentimentDetectionJobResponse>>;
  public function StopDominantLanguageDetectionJob(StopDominantLanguageDetectionJobRequest) Awaitable<Errors\Result<StopDominantLanguageDetectionJobResponse>>;
  public function StopTrainingDocumentClassifier(StopTrainingDocumentClassifierRequest) Awaitable<Errors\Result<StopTrainingDocumentClassifierResponse>>;
  public function BatchDetectSyntax(BatchDetectSyntaxRequest) Awaitable<Errors\Result<BatchDetectSyntaxResponse>>;
  public function CreateDocumentClassifier(CreateDocumentClassifierRequest) Awaitable<Errors\Result<CreateDocumentClassifierResponse>>;
  public function DeleteEndpoint(DeleteEndpointRequest) Awaitable<Errors\Result<DeleteEndpointResponse>>;
  public function DeleteEntityRecognizer(DeleteEntityRecognizerRequest) Awaitable<Errors\Result<DeleteEntityRecognizerResponse>>;
  public function DetectKeyPhrases(DetectKeyPhrasesRequest) Awaitable<Errors\Result<DetectKeyPhrasesResponse>>;
  public function ListEntityRecognizers(ListEntityRecognizersRequest) Awaitable<Errors\Result<ListEntityRecognizersResponse>>;
  public function ListSentimentDetectionJobs(ListSentimentDetectionJobsRequest) Awaitable<Errors\Result<ListSentimentDetectionJobsResponse>>;
  public function UpdateEndpoint(UpdateEndpointRequest) Awaitable<Errors\Result<UpdateEndpointResponse>>;
  public function BatchDetectKeyPhrases(BatchDetectKeyPhrasesRequest) Awaitable<Errors\Result<BatchDetectKeyPhrasesResponse>>;
  public function DescribeDominantLanguageDetectionJob(DescribeDominantLanguageDetectionJobRequest) Awaitable<Errors\Result<DescribeDominantLanguageDetectionJobResponse>>;
  public function DescribeSentimentDetectionJob(DescribeSentimentDetectionJobRequest) Awaitable<Errors\Result<DescribeSentimentDetectionJobResponse>>;
  public function DetectEntities(DetectEntitiesRequest) Awaitable<Errors\Result<DetectEntitiesResponse>>;
}

class DominantLanguageDetectionJobPropertiesList {
}

class EntityRecognizerDocuments {
  public S3Uri $s_3_uri;
}

class ListDocumentClassifiersResponse {
  public DocumentClassifierPropertiesList $document_classifier_properties_list;
  public string $next_token;
}

class ListEntitiesDetectionJobsRequest {
  public EntitiesDetectionJobFilter $filter;
  public string $next_token;
  public MaxResultsInteger $max_results;
}

class ListEntityRecognizersRequest {
  public EntityRecognizerFilter $filter;
  public string $next_token;
  public MaxResultsInteger $max_results;
}

class OutputDataConfig {
  public S3Uri $s_3_uri;
  public KmsKeyId $kms_key_id;
}

class TextSizeLimitExceededException {
  public string $message;
}

class CreateEntityRecognizerResponse {
  public EntityRecognizerArn $entity_recognizer_arn;
}

class DeleteDocumentClassifierRequest {
  public DocumentClassifierArn $document_classifier_arn;
}

class DominantLanguageDetectionJobFilter {
  public JobName $job_name;
  public JobStatus $job_status;
  public Timestamp $submit_time_before;
  public Timestamp $submit_time_after;
}

class SentimentDetectionJobPropertiesList {
}

class BatchDetectEntitiesItemResult {
  public int $index;
  public ListOfEntities $entities;
}

class TooManyRequestsException {
  public string $message;
}

class DeleteEndpointRequest {
  public ComprehendEndpointArn $endpoint_arn;
}

class DescribeEndpointRequest {
  public ComprehendEndpointArn $endpoint_arn;
}

class DocumentClassifierPropertiesList {
}

class ResourceNotFoundException {
  public string $message;
}

class BatchDetectSentimentRequest {
  public StringList $text_list;
  public LanguageCode $language_code;
}

class TagKey {
}

class EntitiesDetectionJobFilter {
  public JobName $job_name;
  public JobStatus $job_status;
  public Timestamp $submit_time_before;
  public Timestamp $submit_time_after;
}

class StartDocumentClassificationJobRequest {
  public IamRoleArn $data_access_role_arn;
  public ClientRequestTokenString $client_request_token;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
  public JobName $job_name;
  public DocumentClassifierArn $document_classifier_arn;
  public InputDataConfig $input_data_config;
  public OutputDataConfig $output_data_config;
}

class TagList {
}

class DeleteEndpointResponse {
}

class DescribeEntitiesDetectionJobRequest {
  public JobId $job_id;
}

class TagKeyList {
}

class DescribeDominantLanguageDetectionJobResponse {
  public DominantLanguageDetectionJobProperties $dominant_language_detection_job_properties;
}

class ListOfSyntaxTokens {
}

class BatchSizeLimitExceededException {
  public string $message;
}

class ComprehendArn {
}

class ListEntityRecognizersResponse {
  public EntityRecognizerPropertiesList $entity_recognizer_properties_list;
  public string $next_token;
}

class EntityTypesList {
}

class StopSentimentDetectionJobRequest {
  public JobId $job_id;
}

class TagValue {
}

class DetectDominantLanguageResponse {
  public ListOfDominantLanguages $languages;
}

class EntityRecognizerEntityList {
  public S3Uri $s_3_uri;
}

class KmsKeyId {
}

class UnsupportedLanguageException {
  public string $message;
}

class BatchDetectEntitiesResponse {
  public ListOfDetectEntitiesResult $result_list;
  public BatchItemErrorList $error_list;
}

class IamRoleArn {
}

class LabelDelimiter {
}

class ListOfDetectSyntaxResult {
}

class String {
}

class SyntaxToken {
  public int $token_id;
  public string $text;
  public int $begin_offset;
  public int $end_offset;
  public PartOfSpeechTag $part_of_speech;
}

class TooManyTagKeysException {
  public string $message;
}

class BatchDetectKeyPhrasesRequest {
  public StringList $text_list;
  public LanguageCode $language_code;
}

class BatchDetectSyntaxResponse {
  public ListOfDetectSyntaxResult $result_list;
  public BatchItemErrorList $error_list;
}

class StartSentimentDetectionJobRequest {
  public LanguageCode $language_code;
  public ClientRequestTokenString $client_request_token;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
  public InputDataConfig $input_data_config;
  public OutputDataConfig $output_data_config;
  public IamRoleArn $data_access_role_arn;
  public JobName $job_name;
}

class StopTrainingDocumentClassifierResponse {
}

class BatchDetectSentimentItemResult {
  public int $index;
  public SentimentType $sentiment;
  public SentimentScore $sentiment_score;
}

class ClassifierEvaluationMetrics {
  public Double $micro_recall;
  public Double $micro_f_1_score;
  public Double $hamming_loss;
  public Double $accuracy;
  public Double $precision;
  public Double $recall;
  public Double $f_1_score;
  public Double $micro_precision;
}

class CreateEndpointResponse {
  public ComprehendEndpointArn $endpoint_arn;
}

class EntityTypesListItem {
  public EntityTypeName $type;
}

class LanguageCode {
}

class ListEndpointsResponse {
  public EndpointPropertiesList $endpoint_properties_list;
  public string $next_token;
}

class ListOfDetectEntitiesResult {
}

class BatchDetectKeyPhrasesResponse {
  public ListOfDetectKeyPhrasesResult $result_list;
  public BatchItemErrorList $error_list;
}

class DescribeKeyPhrasesDetectionJobResponse {
  public KeyPhrasesDetectionJobProperties $key_phrases_detection_job_properties;
}

class DocumentClassifierArn {
}

class DeleteDocumentClassifierResponse {
}

class DescribeEntityRecognizerRequest {
  public EntityRecognizerArn $entity_recognizer_arn;
}

class DocumentClass {
  public string $name;
  public Float $score;
}

class DocumentClassifierFilter {
  public ModelStatus $status;
  public Timestamp $submit_time_before;
  public Timestamp $submit_time_after;
}

class KeyPhrasesDetectionJobPropertiesList {
}

class DescribeDominantLanguageDetectionJobRequest {
  public JobId $job_id;
}

class DetectSentimentRequest {
  public string $text;
  public LanguageCode $language_code;
}

class PartOfSpeechTagType {
}

class ClassifierMetadata {
  public ClassifierEvaluationMetrics $evaluation_metrics;
  public int $number_of_labels;
  public int $number_of_trained_documents;
  public int $number_of_test_documents;
}

class ClassifyDocumentResponse {
  public ListOfClasses $classes;
  public ListOfLabels $labels;
}

class EntityRecognizerAnnotations {
  public S3Uri $s_3_uri;
}

class NumberOfTopicsInteger {
}

class StartDocumentClassificationJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class TopicsDetectionJobPropertiesList {
}

class BatchDetectSentimentResponse {
  public ListOfDetectSentimentResult $result_list;
  public BatchItemErrorList $error_list;
}

class ListOfLabels {
}

class SentimentScore {
  public Float $mixed;
  public Float $positive;
  public Float $negative;
  public Float $neutral;
}

class DetectDominantLanguageRequest {
  public string $text;
}

class DetectSyntaxResponse {
  public ListOfSyntaxTokens $syntax_tokens;
}

class InferenceUnitsInteger {
}

class InvalidFilterException {
  public string $message;
}

class ListSentimentDetectionJobsRequest {
  public string $next_token;
  public MaxResultsInteger $max_results;
  public SentimentDetectionJobFilter $filter;
}

class StopKeyPhrasesDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class DescribeKeyPhrasesDetectionJobRequest {
  public JobId $job_id;
}

class EntityRecognizerProperties {
  public ModelStatus $status;
  public KmsKeyId $volume_kms_key_id;
  public AnyLengthString $message;
  public Timestamp $submit_time;
  public Timestamp $end_time;
  public Timestamp $training_start_time;
  public Timestamp $training_end_time;
  public EntityRecognizerInputDataConfig $input_data_config;
  public EntityRecognizerArn $entity_recognizer_arn;
  public LanguageCode $language_code;
  public VpcConfig $vpc_config;
  public EntityRecognizerMetadata $recognizer_metadata;
  public IamRoleArn $data_access_role_arn;
}

class StringList {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TooManyTagsException {
  public string $message;
}

class ListOfEntities {
}

class EntitiesDetectionJobProperties {
  public EntityRecognizerArn $entity_recognizer_arn;
  public InputDataConfig $input_data_config;
  public OutputDataConfig $output_data_config;
  public LanguageCode $language_code;
  public IamRoleArn $data_access_role_arn;
  public KmsKeyId $volume_kms_key_id;
  public JobId $job_id;
  public JobStatus $job_status;
  public Timestamp $submit_time;
  public Timestamp $end_time;
  public VpcConfig $vpc_config;
  public JobName $job_name;
  public AnyLengthString $message;
}

class KmsKeyValidationException {
  public string $message;
}

class EntityType {
}

class KeyPhrasesDetectionJobFilter {
  public JobName $job_name;
  public JobStatus $job_status;
  public Timestamp $submit_time_before;
  public Timestamp $submit_time_after;
}

class ResourceUnavailableException {
  public string $message;
}

class SentimentType {
}

class StopSentimentDetectionJobResponse {
  public JobStatus $job_status;
  public JobId $job_id;
}

class DocumentClassificationJobFilter {
  public JobStatus $job_status;
  public Timestamp $submit_time_before;
  public Timestamp $submit_time_after;
  public JobName $job_name;
}

class DocumentClassificationJobPropertiesList {
}

class EntityRecognizerInputDataConfig {
  public EntityTypesList $entity_types;
  public EntityRecognizerDocuments $documents;
  public EntityRecognizerAnnotations $annotations;
  public EntityRecognizerEntityList $entity_list;
}

class SentimentDetectionJobFilter {
  public JobName $job_name;
  public JobStatus $job_status;
  public Timestamp $submit_time_before;
  public Timestamp $submit_time_after;
}

class UntagResourceRequest {
  public ComprehendArn $resource_arn;
  public TagKeyList $tag_keys;
}

class BatchItemErrorList {
}

class DeleteEntityRecognizerRequest {
  public EntityRecognizerArn $entity_recognizer_arn;
}

class EntityRecognizerMetadataEntityTypesList {
}

class KeyPhrase {
  public Float $score;
  public string $text;
  public int $begin_offset;
  public int $end_offset;
}

class StartDominantLanguageDetectionJobResponse {
  public JobStatus $job_status;
  public JobId $job_id;
}

class CreateDocumentClassifierResponse {
  public DocumentClassifierArn $document_classifier_arn;
}

class StartTopicsDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class EndpointStatus {
}

class EntityRecognizerEvaluationMetrics {
  public Double $precision;
  public Double $recall;
  public Double $f_1_score;
}

class InvalidRequestException {
  public string $message;
}

class TopicsDetectionJobFilter {
  public JobName $job_name;
  public JobStatus $job_status;
  public Timestamp $submit_time_before;
  public Timestamp $submit_time_after;
}

class TopicsDetectionJobProperties {
  public Timestamp $end_time;
  public OutputDataConfig $output_data_config;
  public KmsKeyId $volume_kms_key_id;
  public JobId $job_id;
  public JobName $job_name;
  public Timestamp $submit_time;
  public InputDataConfig $input_data_config;
  public int $number_of_topics;
  public IamRoleArn $data_access_role_arn;
  public VpcConfig $vpc_config;
  public JobStatus $job_status;
  public AnyLengthString $message;
}

class DocumentClassifierEndpointArn {
}

class EntityRecognizerMetadataEntityTypesListItem {
  public AnyLengthString $type;
  public EntityTypesEvaluationMetrics $evaluation_metrics;
  public int $number_of_train_mentions;
}

class EntityTypesEvaluationMetrics {
  public Double $precision;
  public Double $recall;
  public Double $f_1_score;
}

class StopDominantLanguageDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class BatchDetectSyntaxItemResult {
  public int $index;
  public ListOfSyntaxTokens $syntax_tokens;
}

class ComprehendModelArn {
}

class DeleteEntityRecognizerResponse {
}

class DocumentClassifierMode {
}

class DocumentClassifierOutputDataConfig {
  public S3Uri $s_3_uri;
  public KmsKeyId $kms_key_id;
}

class ListTopicsDetectionJobsRequest {
  public TopicsDetectionJobFilter $filter;
  public string $next_token;
  public MaxResultsInteger $max_results;
}

class ResourceLimitExceededException {
  public string $message;
}

class StopEntitiesDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class CreateEntityRecognizerRequest {
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
  public ComprehendArnName $recognizer_name;
  public IamRoleArn $data_access_role_arn;
  public TagList $tags;
  public EntityRecognizerInputDataConfig $input_data_config;
  public ClientRequestTokenString $client_request_token;
  public LanguageCode $language_code;
}

class DocumentClassifierInputDataConfig {
  public S3Uri $s_3_uri;
  public LabelDelimiter $label_delimiter;
}

class BatchDetectDominantLanguageRequest {
  public StringList $text_list;
}

class DescribeTopicsDetectionJobRequest {
  public JobId $job_id;
}

class EndpointPropertiesList {
}

class StartDominantLanguageDetectionJobRequest {
  public OutputDataConfig $output_data_config;
  public IamRoleArn $data_access_role_arn;
  public JobName $job_name;
  public ClientRequestTokenString $client_request_token;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
  public InputDataConfig $input_data_config;
}

class DocumentClassifierProperties {
  public DocumentClassifierArn $document_classifier_arn;
  public AnyLengthString $message;
  public DocumentClassifierInputDataConfig $input_data_config;
  public DocumentClassifierOutputDataConfig $output_data_config;
  public KmsKeyId $volume_kms_key_id;
  public Timestamp $end_time;
  public DocumentClassifierMode $mode;
  public IamRoleArn $data_access_role_arn;
  public VpcConfig $vpc_config;
  public LanguageCode $language_code;
  public ModelStatus $status;
  public Timestamp $submit_time;
  public Timestamp $training_start_time;
  public Timestamp $training_end_time;
  public ClassifierMetadata $classifier_metadata;
}

class Float {
}

class ListTopicsDetectionJobsResponse {
  public TopicsDetectionJobPropertiesList $topics_detection_job_properties_list;
  public string $next_token;
}

class SyntaxLanguageCode {
}

class CreateEndpointRequest {
  public ComprehendEndpointName $endpoint_name;
  public ComprehendModelArn $model_arn;
  public InferenceUnitsInteger $desired_inference_units;
  public ClientRequestTokenString $client_request_token;
  public TagList $tags;
}

class DescribeEndpointResponse {
  public EndpointProperties $endpoint_properties;
}

class DetectEntitiesRequest {
  public string $text;
  public LanguageCode $language_code;
}

class StopTrainingEntityRecognizerRequest {
  public EntityRecognizerArn $entity_recognizer_arn;
}

class DescribeSentimentDetectionJobResponse {
  public SentimentDetectionJobProperties $sentiment_detection_job_properties;
}

class ListOfDominantLanguages {
}

class ResourceInUseException {
  public string $message;
}

class StartKeyPhrasesDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class UpdateEndpointRequest {
  public ComprehendEndpointArn $endpoint_arn;
  public InferenceUnitsInteger $desired_inference_units;
}

class DescribeDocumentClassificationJobResponse {
  public DocumentClassificationJobProperties $document_classification_job_properties;
}

class DetectSentimentResponse {
  public SentimentType $sentiment;
  public SentimentScore $sentiment_score;
}

class EntityRecognizerArn {
}

class ListDocumentClassifiersRequest {
  public DocumentClassifierFilter $filter;
  public string $next_token;
  public MaxResultsInteger $max_results;
}

class BatchDetectDominantLanguageResponse {
  public ListOfDetectDominantLanguageResult $result_list;
  public BatchItemErrorList $error_list;
}

class EntitiesDetectionJobPropertiesList {
}

class StopKeyPhrasesDetectionJobRequest {
  public JobId $job_id;
}

class DescribeDocumentClassifierRequest {
  public DocumentClassifierArn $document_classifier_arn;
}

class DescribeTopicsDetectionJobResponse {
  public TopicsDetectionJobProperties $topics_detection_job_properties;
}

class EntityRecognizerPropertiesList {
}

class SecurityGroupIds {
}

class StartTopicsDetectionJobRequest {
  public NumberOfTopicsInteger $number_of_topics;
  public ClientRequestTokenString $client_request_token;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
  public InputDataConfig $input_data_config;
  public OutputDataConfig $output_data_config;
  public IamRoleArn $data_access_role_arn;
  public JobName $job_name;
}

class JobNotFoundException {
  public string $message;
}

class ListKeyPhrasesDetectionJobsRequest {
  public KeyPhrasesDetectionJobFilter $filter;
  public string $next_token;
  public MaxResultsInteger $max_results;
}

class ListOfKeyPhrases {
}

class KeyPhrasesDetectionJobProperties {
  public InputDataConfig $input_data_config;
  public OutputDataConfig $output_data_config;
  public IamRoleArn $data_access_role_arn;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
  public JobId $job_id;
  public JobStatus $job_status;
  public AnyLengthString $message;
  public Timestamp $submit_time;
  public Timestamp $end_time;
  public LanguageCode $language_code;
  public JobName $job_name;
}

class ListOfDetectSentimentResult {
}

class S3Uri {
}

class SentimentDetectionJobProperties {
  public IamRoleArn $data_access_role_arn;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
  public JobId $job_id;
  public JobName $job_name;
  public JobStatus $job_status;
  public AnyLengthString $message;
  public LanguageCode $language_code;
  public Timestamp $submit_time;
  public Timestamp $end_time;
  public InputDataConfig $input_data_config;
  public OutputDataConfig $output_data_config;
}

class ListDominantLanguageDetectionJobsResponse {
  public string $next_token;
  public DominantLanguageDetectionJobPropertiesList $dominant_language_detection_job_properties_list;
}

class PartOfSpeechTag {
  public PartOfSpeechTagType $tag;
  public Float $score;
}

class StartEntitiesDetectionJobRequest {
  public InputDataConfig $input_data_config;
  public JobName $job_name;
  public EntityRecognizerArn $entity_recognizer_arn;
  public ClientRequestTokenString $client_request_token;
  public VpcConfig $vpc_config;
  public OutputDataConfig $output_data_config;
  public IamRoleArn $data_access_role_arn;
  public LanguageCode $language_code;
  public KmsKeyId $volume_kms_key_id;
}

class InputFormat {
}

class ModelStatus {
}

class BatchDetectKeyPhrasesItemResult {
  public int $index;
  public ListOfKeyPhrases $key_phrases;
}

class DetectEntitiesResponse {
  public ListOfEntities $entities;
}

class ListTagsForResourceResponse {
  public ComprehendArn $resource_arn;
  public TagList $tags;
}

class StartEntitiesDetectionJobResponse {
  public JobStatus $job_status;
  public JobId $job_id;
}

class TagResourceResponse {
}

class BatchItemError {
  public int $index;
  public string $error_code;
  public string $error_message;
}

class ListEntitiesDetectionJobsResponse {
  public EntitiesDetectionJobPropertiesList $entities_detection_job_properties_list;
  public string $next_token;
}

class ListOfDetectDominantLanguageResult {
}

class UntagResourceResponse {
}

class Double {
}

class EntityRecognizerFilter {
  public ModelStatus $status;
  public Timestamp $submit_time_before;
  public Timestamp $submit_time_after;
}

class ComprehendEndpointArn {
}

class EndpointProperties {
  public InferenceUnitsInteger $current_inference_units;
  public Timestamp $creation_time;
  public Timestamp $last_modified_time;
  public ComprehendEndpointArn $endpoint_arn;
  public EndpointStatus $status;
  public AnyLengthString $message;
  public ComprehendModelArn $model_arn;
  public InferenceUnitsInteger $desired_inference_units;
}

class EntityTypeName {
}

class StopTrainingDocumentClassifierRequest {
  public DocumentClassifierArn $document_classifier_arn;
}

class UpdateEndpointResponse {
}

class BatchDetectDominantLanguageItemResult {
  public ListOfDominantLanguages $languages;
  public int $index;
}

class ClassifyDocumentRequest {
  public string $text;
  public DocumentClassifierEndpointArn $endpoint_arn;
}

class DocumentLabel {
  public Float $score;
  public string $name;
}

class MaxResultsInteger {
}

class JobId {
}

class SubnetId {
}

class DetectSyntaxRequest {
  public string $text;
  public SyntaxLanguageCode $language_code;
}

class DominantLanguage {
  public Float $score;
  public string $language_code;
}

class Entity {
  public Float $score;
  public EntityType $type;
  public string $text;
  public int $begin_offset;
  public int $end_offset;
}

class Integer {
}

class ListDocumentClassificationJobsResponse {
  public DocumentClassificationJobPropertiesList $document_classification_job_properties_list;
  public string $next_token;
}

class ListDominantLanguageDetectionJobsRequest {
  public DominantLanguageDetectionJobFilter $filter;
  public string $next_token;
  public MaxResultsInteger $max_results;
}

class ListSentimentDetectionJobsResponse {
  public SentimentDetectionJobPropertiesList $sentiment_detection_job_properties_list;
  public string $next_token;
}

class BatchDetectEntitiesRequest {
  public StringList $text_list;
  public LanguageCode $language_code;
}

class BatchDetectSyntaxRequest {
  public StringList $text_list;
  public SyntaxLanguageCode $language_code;
}

class DescribeSentimentDetectionJobRequest {
  public JobId $job_id;
}

class InternalServerException {
  public string $message;
}

class DescribeDocumentClassificationJobRequest {
  public JobId $job_id;
}

class DetectKeyPhrasesRequest {
  public string $text;
  public LanguageCode $language_code;
}

class ListDocumentClassificationJobsRequest {
  public string $next_token;
  public MaxResultsInteger $max_results;
  public DocumentClassificationJobFilter $filter;
}

class Subnets {
}

class TagResourceRequest {
  public ComprehendArn $resource_arn;
  public TagList $tags;
}

class ComprehendEndpointName {
}

class DetectKeyPhrasesResponse {
  public ListOfKeyPhrases $key_phrases;
}

class EndpointFilter {
  public ComprehendModelArn $model_arn;
  public EndpointStatus $status;
  public Timestamp $creation_time_before;
  public Timestamp $creation_time_after;
}

class ListTagsForResourceRequest {
  public ComprehendArn $resource_arn;
}

class SecurityGroupId {
}

class CreateDocumentClassifierRequest {
  public TagList $tags;
  public ClientRequestTokenString $client_request_token;
  public VpcConfig $vpc_config;
  public DocumentClassifierMode $mode;
  public ComprehendArnName $document_classifier_name;
  public IamRoleArn $data_access_role_arn;
  public DocumentClassifierInputDataConfig $input_data_config;
  public DocumentClassifierOutputDataConfig $output_data_config;
  public LanguageCode $language_code;
  public KmsKeyId $volume_kms_key_id;
}

class ListEndpointsRequest {
  public EndpointFilter $filter;
  public string $next_token;
  public MaxResultsInteger $max_results;
}

class ComprehendArnName {
}

class ConcurrentModificationException {
  public string $message;
}

class DescribeEntityRecognizerResponse {
  public EntityRecognizerProperties $entity_recognizer_properties;
}

class ListKeyPhrasesDetectionJobsResponse {
  public KeyPhrasesDetectionJobPropertiesList $key_phrases_detection_job_properties_list;
  public string $next_token;
}

class JobName {
}

class JobStatus {
}

class ListOfDetectKeyPhrasesResult {
}

class StopTrainingEntityRecognizerResponse {
}

class VpcConfig {
  public Subnets $subnets;
  public SecurityGroupIds $security_group_ids;
}

class DescribeEntitiesDetectionJobResponse {
  public EntitiesDetectionJobProperties $entities_detection_job_properties;
}

class AnyLengthString {
}

class DominantLanguageDetectionJobProperties {
  public Timestamp $submit_time;
  public KmsKeyId $volume_kms_key_id;
  public JobName $job_name;
  public JobStatus $job_status;
  public AnyLengthString $message;
  public OutputDataConfig $output_data_config;
  public IamRoleArn $data_access_role_arn;
  public VpcConfig $vpc_config;
  public JobId $job_id;
  public Timestamp $end_time;
  public InputDataConfig $input_data_config;
}

class EntityRecognizerMetadata {
  public int $number_of_trained_documents;
  public int $number_of_test_documents;
  public EntityRecognizerEvaluationMetrics $evaluation_metrics;
  public EntityRecognizerMetadataEntityTypesList $entity_types;
}

class StartKeyPhrasesDetectionJobRequest {
  public IamRoleArn $data_access_role_arn;
  public JobName $job_name;
  public LanguageCode $language_code;
  public ClientRequestTokenString $client_request_token;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
  public InputDataConfig $input_data_config;
  public OutputDataConfig $output_data_config;
}

class StopEntitiesDetectionJobRequest {
  public JobId $job_id;
}

class Timestamp {
}

class ClientRequestTokenString {
}

class DescribeDocumentClassifierResponse {
  public DocumentClassifierProperties $document_classifier_properties;
}

class DocumentClassificationJobProperties {
  public JobStatus $job_status;
  public InputDataConfig $input_data_config;
  public OutputDataConfig $output_data_config;
  public JobName $job_name;
  public AnyLengthString $message;
  public Timestamp $submit_time;
  public Timestamp $end_time;
  public DocumentClassifierArn $document_classifier_arn;
  public IamRoleArn $data_access_role_arn;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
  public JobId $job_id;
}

class InputDataConfig {
  public S3Uri $s_3_uri;
  public InputFormat $input_format;
}

class ListOfClasses {
}

class StartSentimentDetectionJobResponse {
  public JobStatus $job_status;
  public JobId $job_id;
}

class StopDominantLanguageDetectionJobRequest {
  public JobId $job_id;
}


<?hh // strict
namespace slack\aws\comprehend;

interface Comprehend {
  public function BatchDetectDominantLanguage(BatchDetectDominantLanguageRequest): Awaitable<Errors\Result<BatchDetectDominantLanguageResponse>>;
  public function BatchDetectEntities(BatchDetectEntitiesRequest): Awaitable<Errors\Result<BatchDetectEntitiesResponse>>;
  public function BatchDetectKeyPhrases(BatchDetectKeyPhrasesRequest): Awaitable<Errors\Result<BatchDetectKeyPhrasesResponse>>;
  public function BatchDetectSentiment(BatchDetectSentimentRequest): Awaitable<Errors\Result<BatchDetectSentimentResponse>>;
  public function BatchDetectSyntax(BatchDetectSyntaxRequest): Awaitable<Errors\Result<BatchDetectSyntaxResponse>>;
  public function ClassifyDocument(ClassifyDocumentRequest): Awaitable<Errors\Result<ClassifyDocumentResponse>>;
  public function CreateDocumentClassifier(CreateDocumentClassifierRequest): Awaitable<Errors\Result<CreateDocumentClassifierResponse>>;
  public function CreateEndpoint(CreateEndpointRequest): Awaitable<Errors\Result<CreateEndpointResponse>>;
  public function CreateEntityRecognizer(CreateEntityRecognizerRequest): Awaitable<Errors\Result<CreateEntityRecognizerResponse>>;
  public function DeleteDocumentClassifier(DeleteDocumentClassifierRequest): Awaitable<Errors\Result<DeleteDocumentClassifierResponse>>;
  public function DeleteEndpoint(DeleteEndpointRequest): Awaitable<Errors\Result<DeleteEndpointResponse>>;
  public function DeleteEntityRecognizer(DeleteEntityRecognizerRequest): Awaitable<Errors\Result<DeleteEntityRecognizerResponse>>;
  public function DescribeDocumentClassificationJob(DescribeDocumentClassificationJobRequest): Awaitable<Errors\Result<DescribeDocumentClassificationJobResponse>>;
  public function DescribeDocumentClassifier(DescribeDocumentClassifierRequest): Awaitable<Errors\Result<DescribeDocumentClassifierResponse>>;
  public function DescribeDominantLanguageDetectionJob(DescribeDominantLanguageDetectionJobRequest): Awaitable<Errors\Result<DescribeDominantLanguageDetectionJobResponse>>;
  public function DescribeEndpoint(DescribeEndpointRequest): Awaitable<Errors\Result<DescribeEndpointResponse>>;
  public function DescribeEntitiesDetectionJob(DescribeEntitiesDetectionJobRequest): Awaitable<Errors\Result<DescribeEntitiesDetectionJobResponse>>;
  public function DescribeEntityRecognizer(DescribeEntityRecognizerRequest): Awaitable<Errors\Result<DescribeEntityRecognizerResponse>>;
  public function DescribeKeyPhrasesDetectionJob(DescribeKeyPhrasesDetectionJobRequest): Awaitable<Errors\Result<DescribeKeyPhrasesDetectionJobResponse>>;
  public function DescribeSentimentDetectionJob(DescribeSentimentDetectionJobRequest): Awaitable<Errors\Result<DescribeSentimentDetectionJobResponse>>;
  public function DescribeTopicsDetectionJob(DescribeTopicsDetectionJobRequest): Awaitable<Errors\Result<DescribeTopicsDetectionJobResponse>>;
  public function DetectDominantLanguage(DetectDominantLanguageRequest): Awaitable<Errors\Result<DetectDominantLanguageResponse>>;
  public function DetectEntities(DetectEntitiesRequest): Awaitable<Errors\Result<DetectEntitiesResponse>>;
  public function DetectKeyPhrases(DetectKeyPhrasesRequest): Awaitable<Errors\Result<DetectKeyPhrasesResponse>>;
  public function DetectSentiment(DetectSentimentRequest): Awaitable<Errors\Result<DetectSentimentResponse>>;
  public function DetectSyntax(DetectSyntaxRequest): Awaitable<Errors\Result<DetectSyntaxResponse>>;
  public function ListDocumentClassificationJobs(ListDocumentClassificationJobsRequest): Awaitable<Errors\Result<ListDocumentClassificationJobsResponse>>;
  public function ListDocumentClassifiers(ListDocumentClassifiersRequest): Awaitable<Errors\Result<ListDocumentClassifiersResponse>>;
  public function ListDominantLanguageDetectionJobs(ListDominantLanguageDetectionJobsRequest): Awaitable<Errors\Result<ListDominantLanguageDetectionJobsResponse>>;
  public function ListEndpoints(ListEndpointsRequest): Awaitable<Errors\Result<ListEndpointsResponse>>;
  public function ListEntitiesDetectionJobs(ListEntitiesDetectionJobsRequest): Awaitable<Errors\Result<ListEntitiesDetectionJobsResponse>>;
  public function ListEntityRecognizers(ListEntityRecognizersRequest): Awaitable<Errors\Result<ListEntityRecognizersResponse>>;
  public function ListKeyPhrasesDetectionJobs(ListKeyPhrasesDetectionJobsRequest): Awaitable<Errors\Result<ListKeyPhrasesDetectionJobsResponse>>;
  public function ListSentimentDetectionJobs(ListSentimentDetectionJobsRequest): Awaitable<Errors\Result<ListSentimentDetectionJobsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTopicsDetectionJobs(ListTopicsDetectionJobsRequest): Awaitable<Errors\Result<ListTopicsDetectionJobsResponse>>;
  public function StartDocumentClassificationJob(StartDocumentClassificationJobRequest): Awaitable<Errors\Result<StartDocumentClassificationJobResponse>>;
  public function StartDominantLanguageDetectionJob(StartDominantLanguageDetectionJobRequest): Awaitable<Errors\Result<StartDominantLanguageDetectionJobResponse>>;
  public function StartEntitiesDetectionJob(StartEntitiesDetectionJobRequest): Awaitable<Errors\Result<StartEntitiesDetectionJobResponse>>;
  public function StartKeyPhrasesDetectionJob(StartKeyPhrasesDetectionJobRequest): Awaitable<Errors\Result<StartKeyPhrasesDetectionJobResponse>>;
  public function StartSentimentDetectionJob(StartSentimentDetectionJobRequest): Awaitable<Errors\Result<StartSentimentDetectionJobResponse>>;
  public function StartTopicsDetectionJob(StartTopicsDetectionJobRequest): Awaitable<Errors\Result<StartTopicsDetectionJobResponse>>;
  public function StopDominantLanguageDetectionJob(StopDominantLanguageDetectionJobRequest): Awaitable<Errors\Result<StopDominantLanguageDetectionJobResponse>>;
  public function StopEntitiesDetectionJob(StopEntitiesDetectionJobRequest): Awaitable<Errors\Result<StopEntitiesDetectionJobResponse>>;
  public function StopKeyPhrasesDetectionJob(StopKeyPhrasesDetectionJobRequest): Awaitable<Errors\Result<StopKeyPhrasesDetectionJobResponse>>;
  public function StopSentimentDetectionJob(StopSentimentDetectionJobRequest): Awaitable<Errors\Result<StopSentimentDetectionJobResponse>>;
  public function StopTrainingDocumentClassifier(StopTrainingDocumentClassifierRequest): Awaitable<Errors\Result<StopTrainingDocumentClassifierResponse>>;
  public function StopTrainingEntityRecognizer(StopTrainingEntityRecognizerRequest): Awaitable<Errors\Result<StopTrainingEntityRecognizerResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateEndpoint(UpdateEndpointRequest): Awaitable<Errors\Result<UpdateEndpointResponse>>;
}

type AnyLengthString = string;

class BatchDetectDominantLanguageItemResult {
  public int $index;
  public ListOfDominantLanguages $languages;

  public function __construct(shape(
  ?'index' => int,
  ?'languages' => ListOfDominantLanguages,
  ) $s = shape()) {
    $this->index = $index ?? ;
    $this->languages = $languages ?? ;
  }
}

class BatchDetectDominantLanguageRequest {
  public StringList $text_list;

  public function __construct(shape(
  ?'text_list' => StringList,
  ) $s = shape()) {
    $this->text_list = $text_list ?? ;
  }
}

class BatchDetectDominantLanguageResponse {
  public BatchItemErrorList $error_list;
  public ListOfDetectDominantLanguageResult $result_list;

  public function __construct(shape(
  ?'error_list' => BatchItemErrorList,
  ?'result_list' => ListOfDetectDominantLanguageResult,
  ) $s = shape()) {
    $this->error_list = $error_list ?? ;
    $this->result_list = $result_list ?? ;
  }
}

class BatchDetectEntitiesItemResult {
  public ListOfEntities $entities;
  public int $index;

  public function __construct(shape(
  ?'entities' => ListOfEntities,
  ?'index' => int,
  ) $s = shape()) {
    $this->entities = $entities ?? ;
    $this->index = $index ?? ;
  }
}

class BatchDetectEntitiesRequest {
  public LanguageCode $language_code;
  public StringList $text_list;

  public function __construct(shape(
  ?'language_code' => LanguageCode,
  ?'text_list' => StringList,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->text_list = $text_list ?? ;
  }
}

class BatchDetectEntitiesResponse {
  public BatchItemErrorList $error_list;
  public ListOfDetectEntitiesResult $result_list;

  public function __construct(shape(
  ?'error_list' => BatchItemErrorList,
  ?'result_list' => ListOfDetectEntitiesResult,
  ) $s = shape()) {
    $this->error_list = $error_list ?? ;
    $this->result_list = $result_list ?? ;
  }
}

class BatchDetectKeyPhrasesItemResult {
  public int $index;
  public ListOfKeyPhrases $key_phrases;

  public function __construct(shape(
  ?'index' => int,
  ?'key_phrases' => ListOfKeyPhrases,
  ) $s = shape()) {
    $this->index = $index ?? ;
    $this->key_phrases = $key_phrases ?? ;
  }
}

class BatchDetectKeyPhrasesRequest {
  public LanguageCode $language_code;
  public StringList $text_list;

  public function __construct(shape(
  ?'language_code' => LanguageCode,
  ?'text_list' => StringList,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->text_list = $text_list ?? ;
  }
}

class BatchDetectKeyPhrasesResponse {
  public BatchItemErrorList $error_list;
  public ListOfDetectKeyPhrasesResult $result_list;

  public function __construct(shape(
  ?'error_list' => BatchItemErrorList,
  ?'result_list' => ListOfDetectKeyPhrasesResult,
  ) $s = shape()) {
    $this->error_list = $error_list ?? ;
    $this->result_list = $result_list ?? ;
  }
}

class BatchDetectSentimentItemResult {
  public int $index;
  public SentimentType $sentiment;
  public SentimentScore $sentiment_score;

  public function __construct(shape(
  ?'index' => int,
  ?'sentiment' => SentimentType,
  ?'sentiment_score' => SentimentScore,
  ) $s = shape()) {
    $this->index = $index ?? ;
    $this->sentiment = $sentiment ?? ;
    $this->sentiment_score = $sentiment_score ?? null;
  }
}

class BatchDetectSentimentRequest {
  public LanguageCode $language_code;
  public StringList $text_list;

  public function __construct(shape(
  ?'language_code' => LanguageCode,
  ?'text_list' => StringList,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->text_list = $text_list ?? ;
  }
}

class BatchDetectSentimentResponse {
  public BatchItemErrorList $error_list;
  public ListOfDetectSentimentResult $result_list;

  public function __construct(shape(
  ?'error_list' => BatchItemErrorList,
  ?'result_list' => ListOfDetectSentimentResult,
  ) $s = shape()) {
    $this->error_list = $error_list ?? ;
    $this->result_list = $result_list ?? ;
  }
}

class BatchDetectSyntaxItemResult {
  public int $index;
  public ListOfSyntaxTokens $syntax_tokens;

  public function __construct(shape(
  ?'index' => int,
  ?'syntax_tokens' => ListOfSyntaxTokens,
  ) $s = shape()) {
    $this->index = $index ?? ;
    $this->syntax_tokens = $syntax_tokens ?? ;
  }
}

class BatchDetectSyntaxRequest {
  public SyntaxLanguageCode $language_code;
  public StringList $text_list;

  public function __construct(shape(
  ?'language_code' => SyntaxLanguageCode,
  ?'text_list' => StringList,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->text_list = $text_list ?? ;
  }
}

class BatchDetectSyntaxResponse {
  public BatchItemErrorList $error_list;
  public ListOfDetectSyntaxResult $result_list;

  public function __construct(shape(
  ?'error_list' => BatchItemErrorList,
  ?'result_list' => ListOfDetectSyntaxResult,
  ) $s = shape()) {
    $this->error_list = $error_list ?? ;
    $this->result_list = $result_list ?? ;
  }
}

class BatchItemError {
  public string $error_code;
  public string $error_message;
  public int $index;

  public function __construct(shape(
  ?'error_code' => string,
  ?'error_message' => string,
  ?'index' => int,
  ) $s = shape()) {
    $this->error_code = $error_code ?? ;
    $this->error_message = $error_message ?? ;
    $this->index = $index ?? ;
  }
}

type BatchItemErrorList = vec<BatchItemError>;

class BatchSizeLimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
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

  public function __construct(shape(
  ?'accuracy' => Double,
  ?'f_1_score' => Double,
  ?'hamming_loss' => Double,
  ?'micro_f_1_score' => Double,
  ?'micro_precision' => Double,
  ?'micro_recall' => Double,
  ?'precision' => Double,
  ?'recall' => Double,
  ) $s = shape()) {
    $this->accuracy = $accuracy ?? ;
    $this->f_1_score = $f_1_score ?? ;
    $this->hamming_loss = $hamming_loss ?? ;
    $this->micro_f_1_score = $micro_f_1_score ?? ;
    $this->micro_precision = $micro_precision ?? ;
    $this->micro_recall = $micro_recall ?? ;
    $this->precision = $precision ?? ;
    $this->recall = $recall ?? ;
  }
}

class ClassifierMetadata {
  public ClassifierEvaluationMetrics $evaluation_metrics;
  public int $number_of_labels;
  public int $number_of_test_documents;
  public int $number_of_trained_documents;

  public function __construct(shape(
  ?'evaluation_metrics' => ClassifierEvaluationMetrics,
  ?'number_of_labels' => int,
  ?'number_of_test_documents' => int,
  ?'number_of_trained_documents' => int,
  ) $s = shape()) {
    $this->evaluation_metrics = $evaluation_metrics ?? ;
    $this->number_of_labels = $number_of_labels ?? ;
    $this->number_of_test_documents = $number_of_test_documents ?? ;
    $this->number_of_trained_documents = $number_of_trained_documents ?? ;
  }
}

class ClassifyDocumentRequest {
  public DocumentClassifierEndpointArn $endpoint_arn;
  public string $text;

  public function __construct(shape(
  ?'endpoint_arn' => DocumentClassifierEndpointArn,
  ?'text' => string,
  ) $s = shape()) {
    $this->endpoint_arn = $endpoint_arn ?? ;
    $this->text = $text ?? ;
  }
}

class ClassifyDocumentResponse {
  public ListOfClasses $classes;
  public ListOfLabels $labels;

  public function __construct(shape(
  ?'classes' => ListOfClasses,
  ?'labels' => ListOfLabels,
  ) $s = shape()) {
    $this->classes = $classes ?? ;
    $this->labels = $labels ?? ;
  }
}

type ClientRequestTokenString = string;

type ComprehendArn = string;

type ComprehendArnName = string;

type ComprehendEndpointArn = string;

type ComprehendEndpointName = string;

type ComprehendModelArn = string;

class ConcurrentModificationException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
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

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenString,
  ?'data_access_role_arn' => IamRoleArn,
  ?'document_classifier_name' => ComprehendArnName,
  ?'input_data_config' => DocumentClassifierInputDataConfig,
  ?'language_code' => LanguageCode,
  ?'mode' => DocumentClassifierMode,
  ?'output_data_config' => DocumentClassifierOutputDataConfig,
  ?'tags' => TagList,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->document_classifier_name = $document_classifier_name ?? ;
    $this->input_data_config = $input_data_config ?? null;
    $this->language_code = $language_code ?? "";
    $this->mode = $mode ?? ;
    $this->output_data_config = $output_data_config ?? null;
    $this->tags = $tags ?? ;
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

class CreateDocumentClassifierResponse {
  public DocumentClassifierArn $document_classifier_arn;

  public function __construct(shape(
  ?'document_classifier_arn' => DocumentClassifierArn,
  ) $s = shape()) {
    $this->document_classifier_arn = $document_classifier_arn ?? "";
  }
}

class CreateEndpointRequest {
  public ClientRequestTokenString $client_request_token;
  public InferenceUnitsInteger $desired_inference_units;
  public ComprehendEndpointName $endpoint_name;
  public ComprehendModelArn $model_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenString,
  ?'desired_inference_units' => InferenceUnitsInteger,
  ?'endpoint_name' => ComprehendEndpointName,
  ?'model_arn' => ComprehendModelArn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->desired_inference_units = $desired_inference_units ?? ;
    $this->endpoint_name = $endpoint_name ?? ;
    $this->model_arn = $model_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateEndpointResponse {
  public ComprehendEndpointArn $endpoint_arn;

  public function __construct(shape(
  ?'endpoint_arn' => ComprehendEndpointArn,
  ) $s = shape()) {
    $this->endpoint_arn = $endpoint_arn ?? ;
  }
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

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenString,
  ?'data_access_role_arn' => IamRoleArn,
  ?'input_data_config' => EntityRecognizerInputDataConfig,
  ?'language_code' => LanguageCode,
  ?'recognizer_name' => ComprehendArnName,
  ?'tags' => TagList,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->input_data_config = $input_data_config ?? null;
    $this->language_code = $language_code ?? "";
    $this->recognizer_name = $recognizer_name ?? ;
    $this->tags = $tags ?? ;
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

class CreateEntityRecognizerResponse {
  public EntityRecognizerArn $entity_recognizer_arn;

  public function __construct(shape(
  ?'entity_recognizer_arn' => EntityRecognizerArn,
  ) $s = shape()) {
    $this->entity_recognizer_arn = $entity_recognizer_arn ?? "";
  }
}

class DeleteDocumentClassifierRequest {
  public DocumentClassifierArn $document_classifier_arn;

  public function __construct(shape(
  ?'document_classifier_arn' => DocumentClassifierArn,
  ) $s = shape()) {
    $this->document_classifier_arn = $document_classifier_arn ?? "";
  }
}

class DeleteDocumentClassifierResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteEndpointRequest {
  public ComprehendEndpointArn $endpoint_arn;

  public function __construct(shape(
  ?'endpoint_arn' => ComprehendEndpointArn,
  ) $s = shape()) {
    $this->endpoint_arn = $endpoint_arn ?? ;
  }
}

class DeleteEndpointResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteEntityRecognizerRequest {
  public EntityRecognizerArn $entity_recognizer_arn;

  public function __construct(shape(
  ?'entity_recognizer_arn' => EntityRecognizerArn,
  ) $s = shape()) {
    $this->entity_recognizer_arn = $entity_recognizer_arn ?? "";
  }
}

class DeleteEntityRecognizerResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeDocumentClassificationJobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class DescribeDocumentClassificationJobResponse {
  public DocumentClassificationJobProperties $document_classification_job_properties;

  public function __construct(shape(
  ?'document_classification_job_properties' => DocumentClassificationJobProperties,
  ) $s = shape()) {
    $this->document_classification_job_properties = $document_classification_job_properties ?? null;
  }
}

class DescribeDocumentClassifierRequest {
  public DocumentClassifierArn $document_classifier_arn;

  public function __construct(shape(
  ?'document_classifier_arn' => DocumentClassifierArn,
  ) $s = shape()) {
    $this->document_classifier_arn = $document_classifier_arn ?? "";
  }
}

class DescribeDocumentClassifierResponse {
  public DocumentClassifierProperties $document_classifier_properties;

  public function __construct(shape(
  ?'document_classifier_properties' => DocumentClassifierProperties,
  ) $s = shape()) {
    $this->document_classifier_properties = $document_classifier_properties ?? null;
  }
}

class DescribeDominantLanguageDetectionJobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class DescribeDominantLanguageDetectionJobResponse {
  public DominantLanguageDetectionJobProperties $dominant_language_detection_job_properties;

  public function __construct(shape(
  ?'dominant_language_detection_job_properties' => DominantLanguageDetectionJobProperties,
  ) $s = shape()) {
    $this->dominant_language_detection_job_properties = $dominant_language_detection_job_properties ?? null;
  }
}

class DescribeEndpointRequest {
  public ComprehendEndpointArn $endpoint_arn;

  public function __construct(shape(
  ?'endpoint_arn' => ComprehendEndpointArn,
  ) $s = shape()) {
    $this->endpoint_arn = $endpoint_arn ?? ;
  }
}

class DescribeEndpointResponse {
  public EndpointProperties $endpoint_properties;

  public function __construct(shape(
  ?'endpoint_properties' => EndpointProperties,
  ) $s = shape()) {
    $this->endpoint_properties = $endpoint_properties ?? null;
  }
}

class DescribeEntitiesDetectionJobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class DescribeEntitiesDetectionJobResponse {
  public EntitiesDetectionJobProperties $entities_detection_job_properties;

  public function __construct(shape(
  ?'entities_detection_job_properties' => EntitiesDetectionJobProperties,
  ) $s = shape()) {
    $this->entities_detection_job_properties = $entities_detection_job_properties ?? null;
  }
}

class DescribeEntityRecognizerRequest {
  public EntityRecognizerArn $entity_recognizer_arn;

  public function __construct(shape(
  ?'entity_recognizer_arn' => EntityRecognizerArn,
  ) $s = shape()) {
    $this->entity_recognizer_arn = $entity_recognizer_arn ?? "";
  }
}

class DescribeEntityRecognizerResponse {
  public EntityRecognizerProperties $entity_recognizer_properties;

  public function __construct(shape(
  ?'entity_recognizer_properties' => EntityRecognizerProperties,
  ) $s = shape()) {
    $this->entity_recognizer_properties = $entity_recognizer_properties ?? null;
  }
}

class DescribeKeyPhrasesDetectionJobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class DescribeKeyPhrasesDetectionJobResponse {
  public KeyPhrasesDetectionJobProperties $key_phrases_detection_job_properties;

  public function __construct(shape(
  ?'key_phrases_detection_job_properties' => KeyPhrasesDetectionJobProperties,
  ) $s = shape()) {
    $this->key_phrases_detection_job_properties = $key_phrases_detection_job_properties ?? null;
  }
}

class DescribeSentimentDetectionJobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class DescribeSentimentDetectionJobResponse {
  public SentimentDetectionJobProperties $sentiment_detection_job_properties;

  public function __construct(shape(
  ?'sentiment_detection_job_properties' => SentimentDetectionJobProperties,
  ) $s = shape()) {
    $this->sentiment_detection_job_properties = $sentiment_detection_job_properties ?? null;
  }
}

class DescribeTopicsDetectionJobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class DescribeTopicsDetectionJobResponse {
  public TopicsDetectionJobProperties $topics_detection_job_properties;

  public function __construct(shape(
  ?'topics_detection_job_properties' => TopicsDetectionJobProperties,
  ) $s = shape()) {
    $this->topics_detection_job_properties = $topics_detection_job_properties ?? null;
  }
}

class DetectDominantLanguageRequest {
  public string $text;

  public function __construct(shape(
  ?'text' => string,
  ) $s = shape()) {
    $this->text = $text ?? ;
  }
}

class DetectDominantLanguageResponse {
  public ListOfDominantLanguages $languages;

  public function __construct(shape(
  ?'languages' => ListOfDominantLanguages,
  ) $s = shape()) {
    $this->languages = $languages ?? ;
  }
}

class DetectEntitiesRequest {
  public LanguageCode $language_code;
  public string $text;

  public function __construct(shape(
  ?'language_code' => LanguageCode,
  ?'text' => string,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->text = $text ?? ;
  }
}

class DetectEntitiesResponse {
  public ListOfEntities $entities;

  public function __construct(shape(
  ?'entities' => ListOfEntities,
  ) $s = shape()) {
    $this->entities = $entities ?? ;
  }
}

class DetectKeyPhrasesRequest {
  public LanguageCode $language_code;
  public string $text;

  public function __construct(shape(
  ?'language_code' => LanguageCode,
  ?'text' => string,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->text = $text ?? ;
  }
}

class DetectKeyPhrasesResponse {
  public ListOfKeyPhrases $key_phrases;

  public function __construct(shape(
  ?'key_phrases' => ListOfKeyPhrases,
  ) $s = shape()) {
    $this->key_phrases = $key_phrases ?? ;
  }
}

class DetectSentimentRequest {
  public LanguageCode $language_code;
  public string $text;

  public function __construct(shape(
  ?'language_code' => LanguageCode,
  ?'text' => string,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->text = $text ?? ;
  }
}

class DetectSentimentResponse {
  public SentimentType $sentiment;
  public SentimentScore $sentiment_score;

  public function __construct(shape(
  ?'sentiment' => SentimentType,
  ?'sentiment_score' => SentimentScore,
  ) $s = shape()) {
    $this->sentiment = $sentiment ?? ;
    $this->sentiment_score = $sentiment_score ?? null;
  }
}

class DetectSyntaxRequest {
  public SyntaxLanguageCode $language_code;
  public string $text;

  public function __construct(shape(
  ?'language_code' => SyntaxLanguageCode,
  ?'text' => string,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->text = $text ?? ;
  }
}

class DetectSyntaxResponse {
  public ListOfSyntaxTokens $syntax_tokens;

  public function __construct(shape(
  ?'syntax_tokens' => ListOfSyntaxTokens,
  ) $s = shape()) {
    $this->syntax_tokens = $syntax_tokens ?? ;
  }
}

class DocumentClass {
  public string $name;
  public Float $score;

  public function __construct(shape(
  ?'name' => string,
  ?'score' => Float,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->score = $score ?? ;
  }
}

class DocumentClassificationJobFilter {
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

  public function __construct(shape(
  ?'data_access_role_arn' => IamRoleArn,
  ?'document_classifier_arn' => DocumentClassifierArn,
  ?'end_time' => Timestamp,
  ?'input_data_config' => InputDataConfig,
  ?'job_id' => JobId,
  ?'job_name' => JobName,
  ?'job_status' => JobStatus,
  ?'message' => AnyLengthString,
  ?'output_data_config' => OutputDataConfig,
  ?'submit_time' => Timestamp,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->document_classifier_arn = $document_classifier_arn ?? "";
    $this->end_time = $end_time ?? ;
    $this->input_data_config = $input_data_config ?? null;
    $this->job_id = $job_id ?? "";
    $this->job_name = $job_name ?? "";
    $this->job_status = $job_status ?? "";
    $this->message = $message ?? ;
    $this->output_data_config = $output_data_config ?? null;
    $this->submit_time = $submit_time ?? ;
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

type DocumentClassificationJobPropertiesList = vec<DocumentClassificationJobProperties>;

type DocumentClassifierArn = string;

type DocumentClassifierEndpointArn = string;

class DocumentClassifierFilter {
  public ModelStatus $status;
  public Timestamp $submit_time_after;
  public Timestamp $submit_time_before;

  public function __construct(shape(
  ?'status' => ModelStatus,
  ?'submit_time_after' => Timestamp,
  ?'submit_time_before' => Timestamp,
  ) $s = shape()) {
    $this->status = $status ?? ;
    $this->submit_time_after = $submit_time_after ?? ;
    $this->submit_time_before = $submit_time_before ?? ;
  }
}

class DocumentClassifierInputDataConfig {
  public LabelDelimiter $label_delimiter;
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'label_delimiter' => LabelDelimiter,
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->label_delimiter = $label_delimiter ?? "";
    $this->s_3_uri = $s_3_uri ?? "";
  }
}

type DocumentClassifierMode = string;

class DocumentClassifierOutputDataConfig {
  public KmsKeyId $kms_key_id;
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'kms_key_id' => KmsKeyId,
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->kms_key_id = $kms_key_id ?? "";
    $this->s_3_uri = $s_3_uri ?? "";
  }
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

  public function __construct(shape(
  ?'classifier_metadata' => ClassifierMetadata,
  ?'data_access_role_arn' => IamRoleArn,
  ?'document_classifier_arn' => DocumentClassifierArn,
  ?'end_time' => Timestamp,
  ?'input_data_config' => DocumentClassifierInputDataConfig,
  ?'language_code' => LanguageCode,
  ?'message' => AnyLengthString,
  ?'mode' => DocumentClassifierMode,
  ?'output_data_config' => DocumentClassifierOutputDataConfig,
  ?'status' => ModelStatus,
  ?'submit_time' => Timestamp,
  ?'training_end_time' => Timestamp,
  ?'training_start_time' => Timestamp,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->classifier_metadata = $classifier_metadata ?? null;
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->document_classifier_arn = $document_classifier_arn ?? "";
    $this->end_time = $end_time ?? ;
    $this->input_data_config = $input_data_config ?? null;
    $this->language_code = $language_code ?? "";
    $this->message = $message ?? ;
    $this->mode = $mode ?? ;
    $this->output_data_config = $output_data_config ?? null;
    $this->status = $status ?? ;
    $this->submit_time = $submit_time ?? ;
    $this->training_end_time = $training_end_time ?? ;
    $this->training_start_time = $training_start_time ?? ;
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

type DocumentClassifierPropertiesList = vec<DocumentClassifierProperties>;

class DocumentLabel {
  public string $name;
  public Float $score;

  public function __construct(shape(
  ?'name' => string,
  ?'score' => Float,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->score = $score ?? ;
  }
}

class DominantLanguage {
  public string $language_code;
  public Float $score;

  public function __construct(shape(
  ?'language_code' => string,
  ?'score' => Float,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->score = $score ?? ;
  }
}

class DominantLanguageDetectionJobFilter {
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

  public function __construct(shape(
  ?'data_access_role_arn' => IamRoleArn,
  ?'end_time' => Timestamp,
  ?'input_data_config' => InputDataConfig,
  ?'job_id' => JobId,
  ?'job_name' => JobName,
  ?'job_status' => JobStatus,
  ?'message' => AnyLengthString,
  ?'output_data_config' => OutputDataConfig,
  ?'submit_time' => Timestamp,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->end_time = $end_time ?? ;
    $this->input_data_config = $input_data_config ?? null;
    $this->job_id = $job_id ?? "";
    $this->job_name = $job_name ?? "";
    $this->job_status = $job_status ?? "";
    $this->message = $message ?? ;
    $this->output_data_config = $output_data_config ?? null;
    $this->submit_time = $submit_time ?? ;
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

type DominantLanguageDetectionJobPropertiesList = vec<DominantLanguageDetectionJobProperties>;

type Double = float;

class EndpointFilter {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public ComprehendModelArn $model_arn;
  public EndpointStatus $status;

  public function __construct(shape(
  ?'creation_time_after' => Timestamp,
  ?'creation_time_before' => Timestamp,
  ?'model_arn' => ComprehendModelArn,
  ?'status' => EndpointStatus,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->model_arn = $model_arn ?? ;
    $this->status = $status ?? ;
  }
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

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'current_inference_units' => InferenceUnitsInteger,
  ?'desired_inference_units' => InferenceUnitsInteger,
  ?'endpoint_arn' => ComprehendEndpointArn,
  ?'last_modified_time' => Timestamp,
  ?'message' => AnyLengthString,
  ?'model_arn' => ComprehendModelArn,
  ?'status' => EndpointStatus,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? ;
    $this->current_inference_units = $current_inference_units ?? ;
    $this->desired_inference_units = $desired_inference_units ?? ;
    $this->endpoint_arn = $endpoint_arn ?? ;
    $this->last_modified_time = $last_modified_time ?? ;
    $this->message = $message ?? ;
    $this->model_arn = $model_arn ?? ;
    $this->status = $status ?? ;
  }
}

type EndpointPropertiesList = vec<EndpointProperties>;

type EndpointStatus = string;

class EntitiesDetectionJobFilter {
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

  public function __construct(shape(
  ?'data_access_role_arn' => IamRoleArn,
  ?'end_time' => Timestamp,
  ?'entity_recognizer_arn' => EntityRecognizerArn,
  ?'input_data_config' => InputDataConfig,
  ?'job_id' => JobId,
  ?'job_name' => JobName,
  ?'job_status' => JobStatus,
  ?'language_code' => LanguageCode,
  ?'message' => AnyLengthString,
  ?'output_data_config' => OutputDataConfig,
  ?'submit_time' => Timestamp,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->end_time = $end_time ?? ;
    $this->entity_recognizer_arn = $entity_recognizer_arn ?? "";
    $this->input_data_config = $input_data_config ?? null;
    $this->job_id = $job_id ?? "";
    $this->job_name = $job_name ?? "";
    $this->job_status = $job_status ?? "";
    $this->language_code = $language_code ?? "";
    $this->message = $message ?? ;
    $this->output_data_config = $output_data_config ?? null;
    $this->submit_time = $submit_time ?? ;
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

type EntitiesDetectionJobPropertiesList = vec<EntitiesDetectionJobProperties>;

class Entity {
  public int $begin_offset;
  public int $end_offset;
  public Float $score;
  public string $text;
  public EntityType $type;

  public function __construct(shape(
  ?'begin_offset' => int,
  ?'end_offset' => int,
  ?'score' => Float,
  ?'text' => string,
  ?'type' => EntityType,
  ) $s = shape()) {
    $this->begin_offset = $begin_offset ?? ;
    $this->end_offset = $end_offset ?? ;
    $this->score = $score ?? ;
    $this->text = $text ?? ;
    $this->type = $type ?? ;
  }
}

class EntityRecognizerAnnotations {
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->s_3_uri = $s_3_uri ?? "";
  }
}

type EntityRecognizerArn = string;

class EntityRecognizerDocuments {
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->s_3_uri = $s_3_uri ?? "";
  }
}

class EntityRecognizerEntityList {
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->s_3_uri = $s_3_uri ?? "";
  }
}

class EntityRecognizerEvaluationMetrics {
  public Double $f_1_score;
  public Double $precision;
  public Double $recall;

  public function __construct(shape(
  ?'f_1_score' => Double,
  ?'precision' => Double,
  ?'recall' => Double,
  ) $s = shape()) {
    $this->f_1_score = $f_1_score ?? ;
    $this->precision = $precision ?? ;
    $this->recall = $recall ?? ;
  }
}

class EntityRecognizerFilter {
  public ModelStatus $status;
  public Timestamp $submit_time_after;
  public Timestamp $submit_time_before;

  public function __construct(shape(
  ?'status' => ModelStatus,
  ?'submit_time_after' => Timestamp,
  ?'submit_time_before' => Timestamp,
  ) $s = shape()) {
    $this->status = $status ?? ;
    $this->submit_time_after = $submit_time_after ?? ;
    $this->submit_time_before = $submit_time_before ?? ;
  }
}

class EntityRecognizerInputDataConfig {
  public EntityRecognizerAnnotations $annotations;
  public EntityRecognizerDocuments $documents;
  public EntityRecognizerEntityList $entity_list;
  public EntityTypesList $entity_types;

  public function __construct(shape(
  ?'annotations' => EntityRecognizerAnnotations,
  ?'documents' => EntityRecognizerDocuments,
  ?'entity_list' => EntityRecognizerEntityList,
  ?'entity_types' => EntityTypesList,
  ) $s = shape()) {
    $this->annotations = $annotations ?? ;
    $this->documents = $documents ?? ;
    $this->entity_list = $entity_list ?? ;
    $this->entity_types = $entity_types ?? ;
  }
}

class EntityRecognizerMetadata {
  public EntityRecognizerMetadataEntityTypesList $entity_types;
  public EntityRecognizerEvaluationMetrics $evaluation_metrics;
  public int $number_of_test_documents;
  public int $number_of_trained_documents;

  public function __construct(shape(
  ?'entity_types' => EntityRecognizerMetadataEntityTypesList,
  ?'evaluation_metrics' => EntityRecognizerEvaluationMetrics,
  ?'number_of_test_documents' => int,
  ?'number_of_trained_documents' => int,
  ) $s = shape()) {
    $this->entity_types = $entity_types ?? ;
    $this->evaluation_metrics = $evaluation_metrics ?? ;
    $this->number_of_test_documents = $number_of_test_documents ?? ;
    $this->number_of_trained_documents = $number_of_trained_documents ?? ;
  }
}

type EntityRecognizerMetadataEntityTypesList = vec<EntityRecognizerMetadataEntityTypesListItem>;

class EntityRecognizerMetadataEntityTypesListItem {
  public EntityTypesEvaluationMetrics $evaluation_metrics;
  public int $number_of_train_mentions;
  public AnyLengthString $type;

  public function __construct(shape(
  ?'evaluation_metrics' => EntityTypesEvaluationMetrics,
  ?'number_of_train_mentions' => int,
  ?'type' => AnyLengthString,
  ) $s = shape()) {
    $this->evaluation_metrics = $evaluation_metrics ?? ;
    $this->number_of_train_mentions = $number_of_train_mentions ?? ;
    $this->type = $type ?? ;
  }
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

  public function __construct(shape(
  ?'data_access_role_arn' => IamRoleArn,
  ?'end_time' => Timestamp,
  ?'entity_recognizer_arn' => EntityRecognizerArn,
  ?'input_data_config' => EntityRecognizerInputDataConfig,
  ?'language_code' => LanguageCode,
  ?'message' => AnyLengthString,
  ?'recognizer_metadata' => EntityRecognizerMetadata,
  ?'status' => ModelStatus,
  ?'submit_time' => Timestamp,
  ?'training_end_time' => Timestamp,
  ?'training_start_time' => Timestamp,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->end_time = $end_time ?? ;
    $this->entity_recognizer_arn = $entity_recognizer_arn ?? "";
    $this->input_data_config = $input_data_config ?? null;
    $this->language_code = $language_code ?? "";
    $this->message = $message ?? ;
    $this->recognizer_metadata = $recognizer_metadata ?? ;
    $this->status = $status ?? ;
    $this->submit_time = $submit_time ?? ;
    $this->training_end_time = $training_end_time ?? ;
    $this->training_start_time = $training_start_time ?? ;
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

type EntityRecognizerPropertiesList = vec<EntityRecognizerProperties>;

type EntityType = string;

type EntityTypeName = string;

class EntityTypesEvaluationMetrics {
  public Double $f_1_score;
  public Double $precision;
  public Double $recall;

  public function __construct(shape(
  ?'f_1_score' => Double,
  ?'precision' => Double,
  ?'recall' => Double,
  ) $s = shape()) {
    $this->f_1_score = $f_1_score ?? ;
    $this->precision = $precision ?? ;
    $this->recall = $recall ?? ;
  }
}

type EntityTypesList = vec<EntityTypesListItem>;

class EntityTypesListItem {
  public EntityTypeName $type;

  public function __construct(shape(
  ?'type' => EntityTypeName,
  ) $s = shape()) {
    $this->type = $type ?? ;
  }
}

type Float = float;

type IamRoleArn = string;

type InferenceUnitsInteger = int;

class InputDataConfig {
  public InputFormat $input_format;
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'input_format' => InputFormat,
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->input_format = $input_format ?? "";
    $this->s_3_uri = $s_3_uri ?? "";
  }
}

type InputFormat = string;

type Integer = int;

class InternalServerException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidFilterException {
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

class JobNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type JobStatus = string;

class KeyPhrase {
  public int $begin_offset;
  public int $end_offset;
  public Float $score;
  public string $text;

  public function __construct(shape(
  ?'begin_offset' => int,
  ?'end_offset' => int,
  ?'score' => Float,
  ?'text' => string,
  ) $s = shape()) {
    $this->begin_offset = $begin_offset ?? ;
    $this->end_offset = $end_offset ?? ;
    $this->score = $score ?? ;
    $this->text = $text ?? ;
  }
}

class KeyPhrasesDetectionJobFilter {
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

  public function __construct(shape(
  ?'data_access_role_arn' => IamRoleArn,
  ?'end_time' => Timestamp,
  ?'input_data_config' => InputDataConfig,
  ?'job_id' => JobId,
  ?'job_name' => JobName,
  ?'job_status' => JobStatus,
  ?'language_code' => LanguageCode,
  ?'message' => AnyLengthString,
  ?'output_data_config' => OutputDataConfig,
  ?'submit_time' => Timestamp,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->end_time = $end_time ?? ;
    $this->input_data_config = $input_data_config ?? null;
    $this->job_id = $job_id ?? "";
    $this->job_name = $job_name ?? "";
    $this->job_status = $job_status ?? "";
    $this->language_code = $language_code ?? "";
    $this->message = $message ?? ;
    $this->output_data_config = $output_data_config ?? null;
    $this->submit_time = $submit_time ?? ;
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

type KeyPhrasesDetectionJobPropertiesList = vec<KeyPhrasesDetectionJobProperties>;

type KmsKeyId = string;

class KmsKeyValidationException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type LabelDelimiter = string;

type LanguageCode = string;

class ListDocumentClassificationJobsRequest {
  public DocumentClassificationJobFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'filter' => DocumentClassificationJobFilter,
  ?'max_results' => MaxResultsInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->filter = $filter ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDocumentClassificationJobsResponse {
  public DocumentClassificationJobPropertiesList $document_classification_job_properties_list;
  public string $next_token;

  public function __construct(shape(
  ?'document_classification_job_properties_list' => DocumentClassificationJobPropertiesList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->document_classification_job_properties_list = $document_classification_job_properties_list ?? [];
    $this->next_token = $next_token ?? ;
  }
}

class ListDocumentClassifiersRequest {
  public DocumentClassifierFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'filter' => DocumentClassifierFilter,
  ?'max_results' => MaxResultsInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->filter = $filter ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDocumentClassifiersResponse {
  public DocumentClassifierPropertiesList $document_classifier_properties_list;
  public string $next_token;

  public function __construct(shape(
  ?'document_classifier_properties_list' => DocumentClassifierPropertiesList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->document_classifier_properties_list = $document_classifier_properties_list ?? [];
    $this->next_token = $next_token ?? ;
  }
}

class ListDominantLanguageDetectionJobsRequest {
  public DominantLanguageDetectionJobFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'filter' => DominantLanguageDetectionJobFilter,
  ?'max_results' => MaxResultsInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->filter = $filter ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDominantLanguageDetectionJobsResponse {
  public DominantLanguageDetectionJobPropertiesList $dominant_language_detection_job_properties_list;
  public string $next_token;

  public function __construct(shape(
  ?'dominant_language_detection_job_properties_list' => DominantLanguageDetectionJobPropertiesList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->dominant_language_detection_job_properties_list = $dominant_language_detection_job_properties_list ?? [];
    $this->next_token = $next_token ?? ;
  }
}

class ListEndpointsRequest {
  public EndpointFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'filter' => EndpointFilter,
  ?'max_results' => MaxResultsInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->filter = $filter ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListEndpointsResponse {
  public EndpointPropertiesList $endpoint_properties_list;
  public string $next_token;

  public function __construct(shape(
  ?'endpoint_properties_list' => EndpointPropertiesList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->endpoint_properties_list = $endpoint_properties_list ?? [];
    $this->next_token = $next_token ?? ;
  }
}

class ListEntitiesDetectionJobsRequest {
  public EntitiesDetectionJobFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'filter' => EntitiesDetectionJobFilter,
  ?'max_results' => MaxResultsInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->filter = $filter ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListEntitiesDetectionJobsResponse {
  public EntitiesDetectionJobPropertiesList $entities_detection_job_properties_list;
  public string $next_token;

  public function __construct(shape(
  ?'entities_detection_job_properties_list' => EntitiesDetectionJobPropertiesList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->entities_detection_job_properties_list = $entities_detection_job_properties_list ?? [];
    $this->next_token = $next_token ?? ;
  }
}

class ListEntityRecognizersRequest {
  public EntityRecognizerFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'filter' => EntityRecognizerFilter,
  ?'max_results' => MaxResultsInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->filter = $filter ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListEntityRecognizersResponse {
  public EntityRecognizerPropertiesList $entity_recognizer_properties_list;
  public string $next_token;

  public function __construct(shape(
  ?'entity_recognizer_properties_list' => EntityRecognizerPropertiesList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->entity_recognizer_properties_list = $entity_recognizer_properties_list ?? [];
    $this->next_token = $next_token ?? ;
  }
}

class ListKeyPhrasesDetectionJobsRequest {
  public KeyPhrasesDetectionJobFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'filter' => KeyPhrasesDetectionJobFilter,
  ?'max_results' => MaxResultsInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->filter = $filter ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListKeyPhrasesDetectionJobsResponse {
  public KeyPhrasesDetectionJobPropertiesList $key_phrases_detection_job_properties_list;
  public string $next_token;

  public function __construct(shape(
  ?'key_phrases_detection_job_properties_list' => KeyPhrasesDetectionJobPropertiesList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->key_phrases_detection_job_properties_list = $key_phrases_detection_job_properties_list ?? [];
    $this->next_token = $next_token ?? ;
  }
}

type ListOfClasses = vec<DocumentClass>;

type ListOfDetectDominantLanguageResult = vec<BatchDetectDominantLanguageItemResult>;

type ListOfDetectEntitiesResult = vec<BatchDetectEntitiesItemResult>;

type ListOfDetectKeyPhrasesResult = vec<BatchDetectKeyPhrasesItemResult>;

type ListOfDetectSentimentResult = vec<BatchDetectSentimentItemResult>;

type ListOfDetectSyntaxResult = vec<BatchDetectSyntaxItemResult>;

type ListOfDominantLanguages = vec<DominantLanguage>;

type ListOfEntities = vec<Entity>;

type ListOfKeyPhrases = vec<KeyPhrase>;

type ListOfLabels = vec<DocumentLabel>;

type ListOfSyntaxTokens = vec<SyntaxToken>;

class ListSentimentDetectionJobsRequest {
  public SentimentDetectionJobFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'filter' => SentimentDetectionJobFilter,
  ?'max_results' => MaxResultsInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->filter = $filter ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListSentimentDetectionJobsResponse {
  public string $next_token;
  public SentimentDetectionJobPropertiesList $sentiment_detection_job_properties_list;

  public function __construct(shape(
  ?'next_token' => string,
  ?'sentiment_detection_job_properties_list' => SentimentDetectionJobPropertiesList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->sentiment_detection_job_properties_list = $sentiment_detection_job_properties_list ?? [];
  }
}

class ListTagsForResourceRequest {
  public ComprehendArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ComprehendArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
  }
}

class ListTagsForResourceResponse {
  public ComprehendArn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => ComprehendArn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class ListTopicsDetectionJobsRequest {
  public TopicsDetectionJobFilter $filter;
  public MaxResultsInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'filter' => TopicsDetectionJobFilter,
  ?'max_results' => MaxResultsInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->filter = $filter ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListTopicsDetectionJobsResponse {
  public string $next_token;
  public TopicsDetectionJobPropertiesList $topics_detection_job_properties_list;

  public function __construct(shape(
  ?'next_token' => string,
  ?'topics_detection_job_properties_list' => TopicsDetectionJobPropertiesList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->topics_detection_job_properties_list = $topics_detection_job_properties_list ?? [];
  }
}

type MaxResultsInteger = int;

type ModelStatus = string;

type NumberOfTopicsInteger = int;

class OutputDataConfig {
  public KmsKeyId $kms_key_id;
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'kms_key_id' => KmsKeyId,
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->kms_key_id = $kms_key_id ?? "";
    $this->s_3_uri = $s_3_uri ?? "";
  }
}

class PartOfSpeechTag {
  public Float $score;
  public PartOfSpeechTagType $tag;

  public function __construct(shape(
  ?'score' => Float,
  ?'tag' => PartOfSpeechTagType,
  ) $s = shape()) {
    $this->score = $score ?? ;
    $this->tag = $tag ?? null;
  }
}

type PartOfSpeechTagType = string;

class ResourceInUseException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceLimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceUnavailableException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type S3Uri = string;

type SecurityGroupId = string;

type SecurityGroupIds = vec<SecurityGroupId>;

class SentimentDetectionJobFilter {
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

  public function __construct(shape(
  ?'data_access_role_arn' => IamRoleArn,
  ?'end_time' => Timestamp,
  ?'input_data_config' => InputDataConfig,
  ?'job_id' => JobId,
  ?'job_name' => JobName,
  ?'job_status' => JobStatus,
  ?'language_code' => LanguageCode,
  ?'message' => AnyLengthString,
  ?'output_data_config' => OutputDataConfig,
  ?'submit_time' => Timestamp,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->end_time = $end_time ?? ;
    $this->input_data_config = $input_data_config ?? null;
    $this->job_id = $job_id ?? "";
    $this->job_name = $job_name ?? "";
    $this->job_status = $job_status ?? "";
    $this->language_code = $language_code ?? "";
    $this->message = $message ?? ;
    $this->output_data_config = $output_data_config ?? null;
    $this->submit_time = $submit_time ?? ;
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

type SentimentDetectionJobPropertiesList = vec<SentimentDetectionJobProperties>;

class SentimentScore {
  public Float $mixed;
  public Float $negative;
  public Float $neutral;
  public Float $positive;

  public function __construct(shape(
  ?'mixed' => Float,
  ?'negative' => Float,
  ?'neutral' => Float,
  ?'positive' => Float,
  ) $s = shape()) {
    $this->mixed = $mixed ?? ;
    $this->negative = $negative ?? ;
    $this->neutral = $neutral ?? ;
    $this->positive = $positive ?? ;
  }
}

type SentimentType = string;

class StartDocumentClassificationJobRequest {
  public ClientRequestTokenString $client_request_token;
  public IamRoleArn $data_access_role_arn;
  public DocumentClassifierArn $document_classifier_arn;
  public InputDataConfig $input_data_config;
  public JobName $job_name;
  public OutputDataConfig $output_data_config;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenString,
  ?'data_access_role_arn' => IamRoleArn,
  ?'document_classifier_arn' => DocumentClassifierArn,
  ?'input_data_config' => InputDataConfig,
  ?'job_name' => JobName,
  ?'output_data_config' => OutputDataConfig,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->document_classifier_arn = $document_classifier_arn ?? "";
    $this->input_data_config = $input_data_config ?? null;
    $this->job_name = $job_name ?? "";
    $this->output_data_config = $output_data_config ?? null;
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

class StartDocumentClassificationJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'job_status' => JobStatus,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->job_status = $job_status ?? "";
  }
}

class StartDominantLanguageDetectionJobRequest {
  public ClientRequestTokenString $client_request_token;
  public IamRoleArn $data_access_role_arn;
  public InputDataConfig $input_data_config;
  public JobName $job_name;
  public OutputDataConfig $output_data_config;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenString,
  ?'data_access_role_arn' => IamRoleArn,
  ?'input_data_config' => InputDataConfig,
  ?'job_name' => JobName,
  ?'output_data_config' => OutputDataConfig,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->input_data_config = $input_data_config ?? null;
    $this->job_name = $job_name ?? "";
    $this->output_data_config = $output_data_config ?? null;
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

class StartDominantLanguageDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'job_status' => JobStatus,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->job_status = $job_status ?? "";
  }
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

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenString,
  ?'data_access_role_arn' => IamRoleArn,
  ?'entity_recognizer_arn' => EntityRecognizerArn,
  ?'input_data_config' => InputDataConfig,
  ?'job_name' => JobName,
  ?'language_code' => LanguageCode,
  ?'output_data_config' => OutputDataConfig,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->entity_recognizer_arn = $entity_recognizer_arn ?? "";
    $this->input_data_config = $input_data_config ?? null;
    $this->job_name = $job_name ?? "";
    $this->language_code = $language_code ?? "";
    $this->output_data_config = $output_data_config ?? null;
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

class StartEntitiesDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'job_status' => JobStatus,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->job_status = $job_status ?? "";
  }
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

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenString,
  ?'data_access_role_arn' => IamRoleArn,
  ?'input_data_config' => InputDataConfig,
  ?'job_name' => JobName,
  ?'language_code' => LanguageCode,
  ?'output_data_config' => OutputDataConfig,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->input_data_config = $input_data_config ?? null;
    $this->job_name = $job_name ?? "";
    $this->language_code = $language_code ?? "";
    $this->output_data_config = $output_data_config ?? null;
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

class StartKeyPhrasesDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'job_status' => JobStatus,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->job_status = $job_status ?? "";
  }
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

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenString,
  ?'data_access_role_arn' => IamRoleArn,
  ?'input_data_config' => InputDataConfig,
  ?'job_name' => JobName,
  ?'language_code' => LanguageCode,
  ?'output_data_config' => OutputDataConfig,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->input_data_config = $input_data_config ?? null;
    $this->job_name = $job_name ?? "";
    $this->language_code = $language_code ?? "";
    $this->output_data_config = $output_data_config ?? null;
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

class StartSentimentDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'job_status' => JobStatus,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->job_status = $job_status ?? "";
  }
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

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenString,
  ?'data_access_role_arn' => IamRoleArn,
  ?'input_data_config' => InputDataConfig,
  ?'job_name' => JobName,
  ?'number_of_topics' => NumberOfTopicsInteger,
  ?'output_data_config' => OutputDataConfig,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->input_data_config = $input_data_config ?? null;
    $this->job_name = $job_name ?? "";
    $this->number_of_topics = $number_of_topics ?? ;
    $this->output_data_config = $output_data_config ?? null;
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

class StartTopicsDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'job_status' => JobStatus,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->job_status = $job_status ?? "";
  }
}

class StopDominantLanguageDetectionJobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class StopDominantLanguageDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'job_status' => JobStatus,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->job_status = $job_status ?? "";
  }
}

class StopEntitiesDetectionJobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class StopEntitiesDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'job_status' => JobStatus,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->job_status = $job_status ?? "";
  }
}

class StopKeyPhrasesDetectionJobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class StopKeyPhrasesDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'job_status' => JobStatus,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->job_status = $job_status ?? "";
  }
}

class StopSentimentDetectionJobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class StopSentimentDetectionJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'job_status' => JobStatus,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->job_status = $job_status ?? "";
  }
}

class StopTrainingDocumentClassifierRequest {
  public DocumentClassifierArn $document_classifier_arn;

  public function __construct(shape(
  ?'document_classifier_arn' => DocumentClassifierArn,
  ) $s = shape()) {
    $this->document_classifier_arn = $document_classifier_arn ?? "";
  }
}

class StopTrainingDocumentClassifierResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StopTrainingEntityRecognizerRequest {
  public EntityRecognizerArn $entity_recognizer_arn;

  public function __construct(shape(
  ?'entity_recognizer_arn' => EntityRecognizerArn,
  ) $s = shape()) {
    $this->entity_recognizer_arn = $entity_recognizer_arn ?? "";
  }
}

class StopTrainingEntityRecognizerResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type String = string;

type StringList = vec<String>;

type SubnetId = string;

type Subnets = vec<SubnetId>;

type SyntaxLanguageCode = string;

class SyntaxToken {
  public int $begin_offset;
  public int $end_offset;
  public PartOfSpeechTag $part_of_speech;
  public string $text;
  public int $token_id;

  public function __construct(shape(
  ?'begin_offset' => int,
  ?'end_offset' => int,
  ?'part_of_speech' => PartOfSpeechTag,
  ?'text' => string,
  ?'token_id' => int,
  ) $s = shape()) {
    $this->begin_offset = $begin_offset ?? ;
    $this->end_offset = $end_offset ?? ;
    $this->part_of_speech = $part_of_speech ?? ;
    $this->text = $text ?? ;
    $this->token_id = $token_id ?? ;
  }
}

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public ComprehendArn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => ComprehendArn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

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

class TooManyTagKeysException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyTagsException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TopicsDetectionJobFilter {
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

  public function __construct(shape(
  ?'data_access_role_arn' => IamRoleArn,
  ?'end_time' => Timestamp,
  ?'input_data_config' => InputDataConfig,
  ?'job_id' => JobId,
  ?'job_name' => JobName,
  ?'job_status' => JobStatus,
  ?'message' => AnyLengthString,
  ?'number_of_topics' => int,
  ?'output_data_config' => OutputDataConfig,
  ?'submit_time' => Timestamp,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->end_time = $end_time ?? ;
    $this->input_data_config = $input_data_config ?? null;
    $this->job_id = $job_id ?? "";
    $this->job_name = $job_name ?? "";
    $this->job_status = $job_status ?? "";
    $this->message = $message ?? ;
    $this->number_of_topics = $number_of_topics ?? ;
    $this->output_data_config = $output_data_config ?? null;
    $this->submit_time = $submit_time ?? ;
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

type TopicsDetectionJobPropertiesList = vec<TopicsDetectionJobProperties>;

class UnsupportedLanguageException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class UntagResourceRequest {
  public ComprehendArn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ComprehendArn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateEndpointRequest {
  public InferenceUnitsInteger $desired_inference_units;
  public ComprehendEndpointArn $endpoint_arn;

  public function __construct(shape(
  ?'desired_inference_units' => InferenceUnitsInteger,
  ?'endpoint_arn' => ComprehendEndpointArn,
  ) $s = shape()) {
    $this->desired_inference_units = $desired_inference_units ?? ;
    $this->endpoint_arn = $endpoint_arn ?? ;
  }
}

class UpdateEndpointResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class VpcConfig {
  public SecurityGroupIds $security_group_ids;
  public Subnets $subnets;

  public function __construct(shape(
  ?'security_group_ids' => SecurityGroupIds,
  ?'subnets' => Subnets,
  ) $s = shape()) {
    $this->security_group_ids = $security_group_ids ?? [];
    $this->subnets = $subnets ?? [];
  }
}


<?hh // strict
namespace slack\aws\translate;

interface Translate {
  public function DeleteTerminology(DeleteTerminologyRequest $in): Awaitable<\Errors\Error>;
  public function DescribeTextTranslationJob(DescribeTextTranslationJobRequest $in): Awaitable<\Errors\Result<DescribeTextTranslationJobResponse>>;
  public function GetTerminology(GetTerminologyRequest $in): Awaitable<\Errors\Result<GetTerminologyResponse>>;
  public function ImportTerminology(ImportTerminologyRequest $in): Awaitable<\Errors\Result<ImportTerminologyResponse>>;
  public function ListTerminologies(ListTerminologiesRequest $in): Awaitable<\Errors\Result<ListTerminologiesResponse>>;
  public function ListTextTranslationJobs(ListTextTranslationJobsRequest $in): Awaitable<\Errors\Result<ListTextTranslationJobsResponse>>;
  public function StartTextTranslationJob(StartTextTranslationJobRequest $in): Awaitable<\Errors\Result<StartTextTranslationJobResponse>>;
  public function StopTextTranslationJob(StopTextTranslationJobRequest $in): Awaitable<\Errors\Result<StopTextTranslationJobResponse>>;
  public function TranslateText(TranslateTextRequest $in): Awaitable<\Errors\Result<TranslateTextResponse>>;
}

class AppliedTerminology {
  public ?ResourceName $name;
  public ?TermList $terms;

  public function __construct(shape(
    ?'name' => ?ResourceName,
    ?'terms' => ?TermList,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->terms = $s['terms'] ?? vec[];
  }
}

type AppliedTerminologyList = vec<AppliedTerminology>;

type BoundedLengthString = string;

type ClientTokenString = string;

type ContentType = string;

class DeleteTerminologyRequest {
  public ?ResourceName $name;

  public function __construct(shape(
    ?'name' => ?ResourceName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DescribeTextTranslationJobRequest {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class DescribeTextTranslationJobResponse {
  public ?TextTranslationJobProperties $text_translation_job_properties;

  public function __construct(shape(
    ?'text_translation_job_properties' => ?TextTranslationJobProperties,
  ) $s = shape()) {
    $this->text_translation_job_properties = $s['text_translation_job_properties'] ?? null;
  }
}

type Description = string;

class DetectedLanguageLowConfidenceException {
  public ?LanguageCodeString $detected_language_code;
  public string $message;

  public function __construct(shape(
    ?'detected_language_code' => ?LanguageCodeString,
    ?'message' => string,
  ) $s = shape()) {
    $this->detected_language_code = $s['detected_language_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class EncryptionKey {
  public ?EncryptionKeyID $id;
  public ?EncryptionKeyType $type;

  public function __construct(shape(
    ?'id' => ?EncryptionKeyID,
    ?'type' => ?EncryptionKeyType,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type EncryptionKeyID = string;

type EncryptionKeyType = string;

class GetTerminologyRequest {
  public ?ResourceName $name;
  public ?TerminologyDataFormat $terminology_data_format;

  public function __construct(shape(
    ?'name' => ?ResourceName,
    ?'terminology_data_format' => ?TerminologyDataFormat,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->terminology_data_format = $s['terminology_data_format'] ?? '';
  }
}

class GetTerminologyResponse {
  public ?TerminologyDataLocation $terminology_data_location;
  public ?TerminologyProperties $terminology_properties;

  public function __construct(shape(
    ?'terminology_data_location' => ?TerminologyDataLocation,
    ?'terminology_properties' => ?TerminologyProperties,
  ) $s = shape()) {
    $this->terminology_data_location = $s['terminology_data_location'] ?? null;
    $this->terminology_properties = $s['terminology_properties'] ?? null;
  }
}

type IamRoleArn = string;

class ImportTerminologyRequest {
  public ?Description $description;
  public ?EncryptionKey $encryption_key;
  public ?MergeStrategy $merge_strategy;
  public ?ResourceName $name;
  public ?TerminologyData $terminology_data;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'encryption_key' => ?EncryptionKey,
    ?'merge_strategy' => ?MergeStrategy,
    ?'name' => ?ResourceName,
    ?'terminology_data' => ?TerminologyData,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->encryption_key = $s['encryption_key'] ?? null;
    $this->merge_strategy = $s['merge_strategy'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->terminology_data = $s['terminology_data'] ?? null;
  }
}

class ImportTerminologyResponse {
  public ?TerminologyProperties $terminology_properties;

  public function __construct(shape(
    ?'terminology_properties' => ?TerminologyProperties,
  ) $s = shape()) {
    $this->terminology_properties = $s['terminology_properties'] ?? null;
  }
}

class InputDataConfig {
  public ?ContentType $content_type;
  public ?S3Uri $s_3_uri;

  public function __construct(shape(
    ?'content_type' => ?ContentType,
    ?'s_3_uri' => ?S3Uri,
  ) $s = shape()) {
    $this->content_type = $s['content_type'] ?? '';
    $this->s_3_uri = $s['s_3_uri'] ?? '';
  }
}

type Integer = int;

class InternalServerException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidFilterException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterValueException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidRequestException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class JobDetails {
  public int $documents_with_errors_count;
  public int $input_documents_count;
  public int $translated_documents_count;

  public function __construct(shape(
    ?'documents_with_errors_count' => int,
    ?'input_documents_count' => int,
    ?'translated_documents_count' => int,
  ) $s = shape()) {
    $this->documents_with_errors_count = $s['documents_with_errors_count'] ?? 0;
    $this->input_documents_count = $s['input_documents_count'] ?? 0;
    $this->translated_documents_count = $s['translated_documents_count'] ?? 0;
  }
}

type JobId = string;

type JobName = string;

type JobStatus = string;

type LanguageCodeString = string;

type LanguageCodeStringList = vec<LanguageCodeString>;

class LimitExceededException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListTerminologiesRequest {
  public ?MaxResultsInteger $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResultsInteger,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTerminologiesResponse {
  public ?NextToken $next_token;
  public ?TerminologyPropertiesList $terminology_properties_list;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'terminology_properties_list' => ?TerminologyPropertiesList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->terminology_properties_list = $s['terminology_properties_list'] ?? vec[];
  }
}

class ListTextTranslationJobsRequest {
  public ?TextTranslationJobFilter $filter;
  public ?MaxResultsInteger $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filter' => ?TextTranslationJobFilter,
    ?'max_results' => ?MaxResultsInteger,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTextTranslationJobsResponse {
  public ?NextToken $next_token;
  public ?TextTranslationJobPropertiesList $text_translation_job_properties_list;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'text_translation_job_properties_list' => ?TextTranslationJobPropertiesList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->text_translation_job_properties_list = $s['text_translation_job_properties_list'] ?? vec[];
  }
}

type MaxResultsInteger = int;

type MergeStrategy = string;

type NextToken = string;

class OutputDataConfig {
  public ?S3Uri $s_3_uri;

  public function __construct(shape(
    ?'s_3_uri' => ?S3Uri,
  ) $s = shape()) {
    $this->s_3_uri = $s['s_3_uri'] ?? '';
  }
}

type ResourceName = string;

type ResourceNameList = vec<ResourceName>;

class ResourceNotFoundException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type S3Uri = string;

class ServiceUnavailableException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class StartTextTranslationJobRequest {
  public ?ClientTokenString $client_token;
  public ?IamRoleArn $data_access_role_arn;
  public ?InputDataConfig $input_data_config;
  public ?JobName $job_name;
  public ?OutputDataConfig $output_data_config;
  public ?LanguageCodeString $source_language_code;
  public ?TargetLanguageCodeStringList $target_language_codes;
  public ?ResourceNameList $terminology_names;

  public function __construct(shape(
    ?'client_token' => ?ClientTokenString,
    ?'data_access_role_arn' => ?IamRoleArn,
    ?'input_data_config' => ?InputDataConfig,
    ?'job_name' => ?JobName,
    ?'output_data_config' => ?OutputDataConfig,
    ?'source_language_code' => ?LanguageCodeString,
    ?'target_language_codes' => ?TargetLanguageCodeStringList,
    ?'terminology_names' => ?ResourceNameList,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->data_access_role_arn = $s['data_access_role_arn'] ?? '';
    $this->input_data_config = $s['input_data_config'] ?? null;
    $this->job_name = $s['job_name'] ?? '';
    $this->output_data_config = $s['output_data_config'] ?? null;
    $this->source_language_code = $s['source_language_code'] ?? '';
    $this->target_language_codes = $s['target_language_codes'] ?? vec[];
    $this->terminology_names = $s['terminology_names'] ?? vec[];
  }
}

class StartTextTranslationJobResponse {
  public ?JobId $job_id;
  public ?JobStatus $job_status;

  public function __construct(shape(
    ?'job_id' => ?JobId,
    ?'job_status' => ?JobStatus,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->job_status = $s['job_status'] ?? '';
  }
}

class StopTextTranslationJobRequest {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class StopTextTranslationJobResponse {
  public ?JobId $job_id;
  public ?JobStatus $job_status;

  public function __construct(shape(
    ?'job_id' => ?JobId,
    ?'job_status' => ?JobStatus,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->job_status = $s['job_status'] ?? '';
  }
}

type String = string;

type TargetLanguageCodeStringList = vec<LanguageCodeString>;

class Term {
  public string $source_text;
  public string $target_text;

  public function __construct(shape(
    ?'source_text' => string,
    ?'target_text' => string,
  ) $s = shape()) {
    $this->source_text = $s['source_text'] ?? '';
    $this->target_text = $s['target_text'] ?? '';
  }
}

type TermList = vec<Term>;

type TerminologyArn = string;

class TerminologyData {
  public ?TerminologyFile $file;
  public ?TerminologyDataFormat $format;

  public function __construct(shape(
    ?'file' => ?TerminologyFile,
    ?'format' => ?TerminologyDataFormat,
  ) $s = shape()) {
    $this->file = $s['file'] ?? '';
    $this->format = $s['format'] ?? '';
  }
}

type TerminologyDataFormat = string;

class TerminologyDataLocation {
  public string $location;
  public string $repository_type;

  public function __construct(shape(
    ?'location' => string,
    ?'repository_type' => string,
  ) $s = shape()) {
    $this->location = $s['location'] ?? '';
    $this->repository_type = $s['repository_type'] ?? '';
  }
}

type TerminologyFile = string;

class TerminologyProperties {
  public ?TerminologyArn $arn;
  public ?Timestamp $created_at;
  public ?Description $description;
  public ?EncryptionKey $encryption_key;
  public ?Timestamp $last_updated_at;
  public ?ResourceName $name;
  public int $size_bytes;
  public ?LanguageCodeString $source_language_code;
  public ?LanguageCodeStringList $target_language_codes;
  public int $term_count;

  public function __construct(shape(
    ?'arn' => ?TerminologyArn,
    ?'created_at' => ?Timestamp,
    ?'description' => ?Description,
    ?'encryption_key' => ?EncryptionKey,
    ?'last_updated_at' => ?Timestamp,
    ?'name' => ?ResourceName,
    ?'size_bytes' => int,
    ?'source_language_code' => ?LanguageCodeString,
    ?'target_language_codes' => ?LanguageCodeStringList,
    ?'term_count' => int,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->encryption_key = $s['encryption_key'] ?? null;
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->size_bytes = $s['size_bytes'] ?? 0;
    $this->source_language_code = $s['source_language_code'] ?? '';
    $this->target_language_codes = $s['target_language_codes'] ?? vec[];
    $this->term_count = $s['term_count'] ?? 0;
  }
}

type TerminologyPropertiesList = vec<TerminologyProperties>;

class TextSizeLimitExceededException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TextTranslationJobFilter {
  public ?JobName $job_name;
  public ?JobStatus $job_status;
  public ?Timestamp $submitted_after_time;
  public ?Timestamp $submitted_before_time;

  public function __construct(shape(
    ?'job_name' => ?JobName,
    ?'job_status' => ?JobStatus,
    ?'submitted_after_time' => ?Timestamp,
    ?'submitted_before_time' => ?Timestamp,
  ) $s = shape()) {
    $this->job_name = $s['job_name'] ?? '';
    $this->job_status = $s['job_status'] ?? '';
    $this->submitted_after_time = $s['submitted_after_time'] ?? 0;
    $this->submitted_before_time = $s['submitted_before_time'] ?? 0;
  }
}

class TextTranslationJobProperties {
  public ?IamRoleArn $data_access_role_arn;
  public ?Timestamp $end_time;
  public ?InputDataConfig $input_data_config;
  public ?JobDetails $job_details;
  public ?JobId $job_id;
  public ?JobName $job_name;
  public ?JobStatus $job_status;
  public ?UnboundedLengthString $message;
  public ?OutputDataConfig $output_data_config;
  public ?LanguageCodeString $source_language_code;
  public ?Timestamp $submitted_time;
  public ?TargetLanguageCodeStringList $target_language_codes;
  public ?ResourceNameList $terminology_names;

  public function __construct(shape(
    ?'data_access_role_arn' => ?IamRoleArn,
    ?'end_time' => ?Timestamp,
    ?'input_data_config' => ?InputDataConfig,
    ?'job_details' => ?JobDetails,
    ?'job_id' => ?JobId,
    ?'job_name' => ?JobName,
    ?'job_status' => ?JobStatus,
    ?'message' => ?UnboundedLengthString,
    ?'output_data_config' => ?OutputDataConfig,
    ?'source_language_code' => ?LanguageCodeString,
    ?'submitted_time' => ?Timestamp,
    ?'target_language_codes' => ?TargetLanguageCodeStringList,
    ?'terminology_names' => ?ResourceNameList,
  ) $s = shape()) {
    $this->data_access_role_arn = $s['data_access_role_arn'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->input_data_config = $s['input_data_config'] ?? null;
    $this->job_details = $s['job_details'] ?? null;
    $this->job_id = $s['job_id'] ?? '';
    $this->job_name = $s['job_name'] ?? '';
    $this->job_status = $s['job_status'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->output_data_config = $s['output_data_config'] ?? null;
    $this->source_language_code = $s['source_language_code'] ?? '';
    $this->submitted_time = $s['submitted_time'] ?? 0;
    $this->target_language_codes = $s['target_language_codes'] ?? vec[];
    $this->terminology_names = $s['terminology_names'] ?? vec[];
  }
}

type TextTranslationJobPropertiesList = vec<TextTranslationJobProperties>;

type Timestamp = int;

class TooManyRequestsException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TranslateTextRequest {
  public ?LanguageCodeString $source_language_code;
  public ?LanguageCodeString $target_language_code;
  public ?ResourceNameList $terminology_names;
  public ?BoundedLengthString $text;

  public function __construct(shape(
    ?'source_language_code' => ?LanguageCodeString,
    ?'target_language_code' => ?LanguageCodeString,
    ?'terminology_names' => ?ResourceNameList,
    ?'text' => ?BoundedLengthString,
  ) $s = shape()) {
    $this->source_language_code = $s['source_language_code'] ?? '';
    $this->target_language_code = $s['target_language_code'] ?? '';
    $this->terminology_names = $s['terminology_names'] ?? vec[];
    $this->text = $s['text'] ?? '';
  }
}

class TranslateTextResponse {
  public ?AppliedTerminologyList $applied_terminologies;
  public ?LanguageCodeString $source_language_code;
  public ?LanguageCodeString $target_language_code;
  public string $translated_text;

  public function __construct(shape(
    ?'applied_terminologies' => ?AppliedTerminologyList,
    ?'source_language_code' => ?LanguageCodeString,
    ?'target_language_code' => ?LanguageCodeString,
    ?'translated_text' => string,
  ) $s = shape()) {
    $this->applied_terminologies = $s['applied_terminologies'] ?? vec[];
    $this->source_language_code = $s['source_language_code'] ?? '';
    $this->target_language_code = $s['target_language_code'] ?? '';
    $this->translated_text = $s['translated_text'] ?? '';
  }
}

type UnboundedLengthString = string;

class UnsupportedLanguagePairException {
  public string $message;
  public ?LanguageCodeString $source_language_code;
  public ?LanguageCodeString $target_language_code;

  public function __construct(shape(
    ?'message' => string,
    ?'source_language_code' => ?LanguageCodeString,
    ?'target_language_code' => ?LanguageCodeString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->source_language_code = $s['source_language_code'] ?? '';
    $this->target_language_code = $s['target_language_code'] ?? '';
  }
}


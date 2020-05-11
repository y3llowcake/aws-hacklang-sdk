<?hh // strict
namespace slack\aws\translate;

interface Translate {
  public function DeleteTerminology(DeleteTerminologyRequest): Awaitable<Errors\Error>;
  public function DescribeTextTranslationJob(DescribeTextTranslationJobRequest): Awaitable<Errors\Result<DescribeTextTranslationJobResponse>>;
  public function GetTerminology(GetTerminologyRequest): Awaitable<Errors\Result<GetTerminologyResponse>>;
  public function ImportTerminology(ImportTerminologyRequest): Awaitable<Errors\Result<ImportTerminologyResponse>>;
  public function ListTerminologies(ListTerminologiesRequest): Awaitable<Errors\Result<ListTerminologiesResponse>>;
  public function ListTextTranslationJobs(ListTextTranslationJobsRequest): Awaitable<Errors\Result<ListTextTranslationJobsResponse>>;
  public function StartTextTranslationJob(StartTextTranslationJobRequest): Awaitable<Errors\Result<StartTextTranslationJobResponse>>;
  public function StopTextTranslationJob(StopTextTranslationJobRequest): Awaitable<Errors\Result<StopTextTranslationJobResponse>>;
  public function TranslateText(TranslateTextRequest): Awaitable<Errors\Result<TranslateTextResponse>>;
}

class AppliedTerminology {
  public ResourceName $name;
  public TermList $terms;

  public function __construct(shape(
  ?'name' => ResourceName,
  ?'terms' => TermList,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->terms = $terms ?? ;
  }
}

type AppliedTerminologyList = vec<AppliedTerminology>;

type BoundedLengthString = string;

type ClientTokenString = string;

type ContentType = string;

class DeleteTerminologyRequest {
  public ResourceName $name;

  public function __construct(shape(
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class DescribeTextTranslationJobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class DescribeTextTranslationJobResponse {
  public TextTranslationJobProperties $text_translation_job_properties;

  public function __construct(shape(
  ?'text_translation_job_properties' => TextTranslationJobProperties,
  ) $s = shape()) {
    $this->text_translation_job_properties = $text_translation_job_properties ?? null;
  }
}

type Description = string;

class DetectedLanguageLowConfidenceException {
  public LanguageCodeString $detected_language_code;
  public string $message;

  public function __construct(shape(
  ?'detected_language_code' => LanguageCodeString,
  ?'message' => string,
  ) $s = shape()) {
    $this->detected_language_code = $detected_language_code ?? ;
    $this->message = $message ?? ;
  }
}

class EncryptionKey {
  public EncryptionKeyID $id;
  public EncryptionKeyType $type;

  public function __construct(shape(
  ?'id' => EncryptionKeyID,
  ?'type' => EncryptionKeyType,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->type = $type ?? ;
  }
}

type EncryptionKeyID = string;

type EncryptionKeyType = string;

class GetTerminologyRequest {
  public ResourceName $name;
  public TerminologyDataFormat $terminology_data_format;

  public function __construct(shape(
  ?'name' => ResourceName,
  ?'terminology_data_format' => TerminologyDataFormat,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->terminology_data_format = $terminology_data_format ?? "";
  }
}

class GetTerminologyResponse {
  public TerminologyDataLocation $terminology_data_location;
  public TerminologyProperties $terminology_properties;

  public function __construct(shape(
  ?'terminology_data_location' => TerminologyDataLocation,
  ?'terminology_properties' => TerminologyProperties,
  ) $s = shape()) {
    $this->terminology_data_location = $terminology_data_location ?? null;
    $this->terminology_properties = $terminology_properties ?? null;
  }
}

type IamRoleArn = string;

class ImportTerminologyRequest {
  public Description $description;
  public EncryptionKey $encryption_key;
  public MergeStrategy $merge_strategy;
  public ResourceName $name;
  public TerminologyData $terminology_data;

  public function __construct(shape(
  ?'description' => Description,
  ?'encryption_key' => EncryptionKey,
  ?'merge_strategy' => MergeStrategy,
  ?'name' => ResourceName,
  ?'terminology_data' => TerminologyData,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->encryption_key = $encryption_key ?? null;
    $this->merge_strategy = $merge_strategy ?? "";
    $this->name = $name ?? ;
    $this->terminology_data = $terminology_data ?? null;
  }
}

class ImportTerminologyResponse {
  public TerminologyProperties $terminology_properties;

  public function __construct(shape(
  ?'terminology_properties' => TerminologyProperties,
  ) $s = shape()) {
    $this->terminology_properties = $terminology_properties ?? null;
  }
}

class InputDataConfig {
  public ContentType $content_type;
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'content_type' => ContentType,
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->content_type = $content_type ?? "";
    $this->s_3_uri = $s_3_uri ?? "";
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

class InvalidFilterException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidParameterValueException {
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

class JobDetails {
  public int $documents_with_errors_count;
  public int $input_documents_count;
  public int $translated_documents_count;

  public function __construct(shape(
  ?'documents_with_errors_count' => int,
  ?'input_documents_count' => int,
  ?'translated_documents_count' => int,
  ) $s = shape()) {
    $this->documents_with_errors_count = $documents_with_errors_count ?? ;
    $this->input_documents_count = $input_documents_count ?? ;
    $this->translated_documents_count = $translated_documents_count ?? ;
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
    $this->message = $message ?? ;
  }
}

class ListTerminologiesRequest {
  public MaxResultsInteger $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResultsInteger,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListTerminologiesResponse {
  public NextToken $next_token;
  public TerminologyPropertiesList $terminology_properties_list;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'terminology_properties_list' => TerminologyPropertiesList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->terminology_properties_list = $terminology_properties_list ?? [];
  }
}

class ListTextTranslationJobsRequest {
  public TextTranslationJobFilter $filter;
  public MaxResultsInteger $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filter' => TextTranslationJobFilter,
  ?'max_results' => MaxResultsInteger,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filter = $filter ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListTextTranslationJobsResponse {
  public NextToken $next_token;
  public TextTranslationJobPropertiesList $text_translation_job_properties_list;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'text_translation_job_properties_list' => TextTranslationJobPropertiesList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->text_translation_job_properties_list = $text_translation_job_properties_list ?? [];
  }
}

type MaxResultsInteger = int;

type MergeStrategy = string;

type NextToken = string;

class OutputDataConfig {
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->s_3_uri = $s_3_uri ?? "";
  }
}

type ResourceName = string;

type ResourceNameList = vec<ResourceName>;

class ResourceNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type S3Uri = string;

class ServiceUnavailableException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class StartTextTranslationJobRequest {
  public ClientTokenString $client_token;
  public IamRoleArn $data_access_role_arn;
  public InputDataConfig $input_data_config;
  public JobName $job_name;
  public OutputDataConfig $output_data_config;
  public LanguageCodeString $source_language_code;
  public TargetLanguageCodeStringList $target_language_codes;
  public ResourceNameList $terminology_names;

  public function __construct(shape(
  ?'client_token' => ClientTokenString,
  ?'data_access_role_arn' => IamRoleArn,
  ?'input_data_config' => InputDataConfig,
  ?'job_name' => JobName,
  ?'output_data_config' => OutputDataConfig,
  ?'source_language_code' => LanguageCodeString,
  ?'target_language_codes' => TargetLanguageCodeStringList,
  ?'terminology_names' => ResourceNameList,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->input_data_config = $input_data_config ?? null;
    $this->job_name = $job_name ?? "";
    $this->output_data_config = $output_data_config ?? null;
    $this->source_language_code = $source_language_code ?? ;
    $this->target_language_codes = $target_language_codes ?? ;
    $this->terminology_names = $terminology_names ?? ;
  }
}

class StartTextTranslationJobResponse {
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

class StopTextTranslationJobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class StopTextTranslationJobResponse {
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

type String = string;

type TargetLanguageCodeStringList = vec<LanguageCodeString>;

class Term {
  public string $source_text;
  public string $target_text;

  public function __construct(shape(
  ?'source_text' => string,
  ?'target_text' => string,
  ) $s = shape()) {
    $this->source_text = $source_text ?? ;
    $this->target_text = $target_text ?? ;
  }
}

type TermList = vec<Term>;

type TerminologyArn = string;

class TerminologyData {
  public TerminologyFile $file;
  public TerminologyDataFormat $format;

  public function __construct(shape(
  ?'file' => TerminologyFile,
  ?'format' => TerminologyDataFormat,
  ) $s = shape()) {
    $this->file = $file ?? ;
    $this->format = $format ?? ;
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
    $this->location = $location ?? ;
    $this->repository_type = $repository_type ?? ;
  }
}

type TerminologyFile = string;

class TerminologyProperties {
  public TerminologyArn $arn;
  public Timestamp $created_at;
  public Description $description;
  public EncryptionKey $encryption_key;
  public Timestamp $last_updated_at;
  public ResourceName $name;
  public int $size_bytes;
  public LanguageCodeString $source_language_code;
  public LanguageCodeStringList $target_language_codes;
  public int $term_count;

  public function __construct(shape(
  ?'arn' => TerminologyArn,
  ?'created_at' => Timestamp,
  ?'description' => Description,
  ?'encryption_key' => EncryptionKey,
  ?'last_updated_at' => Timestamp,
  ?'name' => ResourceName,
  ?'size_bytes' => int,
  ?'source_language_code' => LanguageCodeString,
  ?'target_language_codes' => LanguageCodeStringList,
  ?'term_count' => int,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->created_at = $created_at ?? ;
    $this->description = $description ?? "";
    $this->encryption_key = $encryption_key ?? null;
    $this->last_updated_at = $last_updated_at ?? ;
    $this->name = $name ?? ;
    $this->size_bytes = $size_bytes ?? ;
    $this->source_language_code = $source_language_code ?? ;
    $this->target_language_codes = $target_language_codes ?? ;
    $this->term_count = $term_count ?? ;
  }
}

type TerminologyPropertiesList = vec<TerminologyProperties>;

class TextSizeLimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TextTranslationJobFilter {
  public JobName $job_name;
  public JobStatus $job_status;
  public Timestamp $submitted_after_time;
  public Timestamp $submitted_before_time;

  public function __construct(shape(
  ?'job_name' => JobName,
  ?'job_status' => JobStatus,
  ?'submitted_after_time' => Timestamp,
  ?'submitted_before_time' => Timestamp,
  ) $s = shape()) {
    $this->job_name = $job_name ?? "";
    $this->job_status = $job_status ?? "";
    $this->submitted_after_time = $submitted_after_time ?? ;
    $this->submitted_before_time = $submitted_before_time ?? ;
  }
}

class TextTranslationJobProperties {
  public IamRoleArn $data_access_role_arn;
  public Timestamp $end_time;
  public InputDataConfig $input_data_config;
  public JobDetails $job_details;
  public JobId $job_id;
  public JobName $job_name;
  public JobStatus $job_status;
  public UnboundedLengthString $message;
  public OutputDataConfig $output_data_config;
  public LanguageCodeString $source_language_code;
  public Timestamp $submitted_time;
  public TargetLanguageCodeStringList $target_language_codes;
  public ResourceNameList $terminology_names;

  public function __construct(shape(
  ?'data_access_role_arn' => IamRoleArn,
  ?'end_time' => Timestamp,
  ?'input_data_config' => InputDataConfig,
  ?'job_details' => JobDetails,
  ?'job_id' => JobId,
  ?'job_name' => JobName,
  ?'job_status' => JobStatus,
  ?'message' => UnboundedLengthString,
  ?'output_data_config' => OutputDataConfig,
  ?'source_language_code' => LanguageCodeString,
  ?'submitted_time' => Timestamp,
  ?'target_language_codes' => TargetLanguageCodeStringList,
  ?'terminology_names' => ResourceNameList,
  ) $s = shape()) {
    $this->data_access_role_arn = $data_access_role_arn ?? ;
    $this->end_time = $end_time ?? ;
    $this->input_data_config = $input_data_config ?? null;
    $this->job_details = $job_details ?? null;
    $this->job_id = $job_id ?? "";
    $this->job_name = $job_name ?? "";
    $this->job_status = $job_status ?? "";
    $this->message = $message ?? ;
    $this->output_data_config = $output_data_config ?? null;
    $this->source_language_code = $source_language_code ?? ;
    $this->submitted_time = $submitted_time ?? ;
    $this->target_language_codes = $target_language_codes ?? ;
    $this->terminology_names = $terminology_names ?? ;
  }
}

type TextTranslationJobPropertiesList = vec<TextTranslationJobProperties>;

type Timestamp = int;

class TooManyRequestsException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TranslateTextRequest {
  public LanguageCodeString $source_language_code;
  public LanguageCodeString $target_language_code;
  public ResourceNameList $terminology_names;
  public BoundedLengthString $text;

  public function __construct(shape(
  ?'source_language_code' => LanguageCodeString,
  ?'target_language_code' => LanguageCodeString,
  ?'terminology_names' => ResourceNameList,
  ?'text' => BoundedLengthString,
  ) $s = shape()) {
    $this->source_language_code = $source_language_code ?? ;
    $this->target_language_code = $target_language_code ?? ;
    $this->terminology_names = $terminology_names ?? ;
    $this->text = $text ?? ;
  }
}

class TranslateTextResponse {
  public AppliedTerminologyList $applied_terminologies;
  public LanguageCodeString $source_language_code;
  public LanguageCodeString $target_language_code;
  public string $translated_text;

  public function __construct(shape(
  ?'applied_terminologies' => AppliedTerminologyList,
  ?'source_language_code' => LanguageCodeString,
  ?'target_language_code' => LanguageCodeString,
  ?'translated_text' => string,
  ) $s = shape()) {
    $this->applied_terminologies = $applied_terminologies ?? ;
    $this->source_language_code = $source_language_code ?? ;
    $this->target_language_code = $target_language_code ?? ;
    $this->translated_text = $translated_text ?? ;
  }
}

type UnboundedLengthString = string;

class UnsupportedLanguagePairException {
  public string $message;
  public LanguageCodeString $source_language_code;
  public LanguageCodeString $target_language_code;

  public function __construct(shape(
  ?'message' => string,
  ?'source_language_code' => LanguageCodeString,
  ?'target_language_code' => LanguageCodeString,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->source_language_code = $source_language_code ?? ;
    $this->target_language_code = $target_language_code ?? ;
  }
}


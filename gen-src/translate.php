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
}

class AppliedTerminologyList {
}

class BoundedLengthString {
}

class ClientTokenString {
}

class ContentType {
}

class DeleteTerminologyRequest {
  public ResourceName $name;
}

class DescribeTextTranslationJobRequest {
  public JobId $job_id;
}

class DescribeTextTranslationJobResponse {
  public TextTranslationJobProperties $text_translation_job_properties;
}

class Description {
}

class DetectedLanguageLowConfidenceException {
  public LanguageCodeString $detected_language_code;
  public string $message;
}

class EncryptionKey {
  public EncryptionKeyID $id;
  public EncryptionKeyType $type;
}

class EncryptionKeyID {
}

class EncryptionKeyType {
}

class GetTerminologyRequest {
  public ResourceName $name;
  public TerminologyDataFormat $terminology_data_format;
}

class GetTerminologyResponse {
  public TerminologyDataLocation $terminology_data_location;
  public TerminologyProperties $terminology_properties;
}

class IamRoleArn {
}

class ImportTerminologyRequest {
  public Description $description;
  public EncryptionKey $encryption_key;
  public MergeStrategy $merge_strategy;
  public ResourceName $name;
  public TerminologyData $terminology_data;
}

class ImportTerminologyResponse {
  public TerminologyProperties $terminology_properties;
}

class InputDataConfig {
  public ContentType $content_type;
  public S3Uri $s_3_uri;
}

class Integer {
}

class InternalServerException {
  public string $message;
}

class InvalidFilterException {
  public string $message;
}

class InvalidParameterValueException {
  public string $message;
}

class InvalidRequestException {
  public string $message;
}

class JobDetails {
  public int $documents_with_errors_count;
  public int $input_documents_count;
  public int $translated_documents_count;
}

class JobId {
}

class JobName {
}

class JobStatus {
}

class LanguageCodeString {
}

class LanguageCodeStringList {
}

class LimitExceededException {
  public string $message;
}

class ListTerminologiesRequest {
  public MaxResultsInteger $max_results;
  public NextToken $next_token;
}

class ListTerminologiesResponse {
  public NextToken $next_token;
  public TerminologyPropertiesList $terminology_properties_list;
}

class ListTextTranslationJobsRequest {
  public TextTranslationJobFilter $filter;
  public MaxResultsInteger $max_results;
  public NextToken $next_token;
}

class ListTextTranslationJobsResponse {
  public NextToken $next_token;
  public TextTranslationJobPropertiesList $text_translation_job_properties_list;
}

class MaxResultsInteger {
}

class MergeStrategy {
}

class NextToken {
}

class OutputDataConfig {
  public S3Uri $s_3_uri;
}

class ResourceName {
}

class ResourceNameList {
}

class ResourceNotFoundException {
  public string $message;
}

class S3Uri {
}

class ServiceUnavailableException {
  public string $message;
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
}

class StartTextTranslationJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class StopTextTranslationJobRequest {
  public JobId $job_id;
}

class StopTextTranslationJobResponse {
  public JobId $job_id;
  public JobStatus $job_status;
}

class String {
}

class TargetLanguageCodeStringList {
}

class Term {
  public string $source_text;
  public string $target_text;
}

class TermList {
}

class TerminologyArn {
}

class TerminologyData {
  public TerminologyFile $file;
  public TerminologyDataFormat $format;
}

class TerminologyDataFormat {
}

class TerminologyDataLocation {
  public string $location;
  public string $repository_type;
}

class TerminologyFile {
}

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
}

class TerminologyPropertiesList {
}

class TextSizeLimitExceededException {
  public string $message;
}

class TextTranslationJobFilter {
  public JobName $job_name;
  public JobStatus $job_status;
  public Timestamp $submitted_after_time;
  public Timestamp $submitted_before_time;
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
}

class TextTranslationJobPropertiesList {
}

class Timestamp {
}

class TooManyRequestsException {
  public string $message;
}

class TranslateTextRequest {
  public LanguageCodeString $source_language_code;
  public LanguageCodeString $target_language_code;
  public ResourceNameList $terminology_names;
  public BoundedLengthString $text;
}

class TranslateTextResponse {
  public AppliedTerminologyList $applied_terminologies;
  public LanguageCodeString $source_language_code;
  public LanguageCodeString $target_language_code;
  public string $translated_text;
}

class UnboundedLengthString {
}

class UnsupportedLanguagePairException {
  public string $message;
  public LanguageCodeString $source_language_code;
  public LanguageCodeString $target_language_code;
}


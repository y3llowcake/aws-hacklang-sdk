<?hh // strict
namespace slack\aws\transcribe;

interface Transcribe {
  public function CreateVocabulary(CreateVocabularyRequest) Awaitable<Errors\Result<CreateVocabularyResponse>>;
  public function CreateVocabularyFilter(CreateVocabularyFilterRequest) Awaitable<Errors\Result<CreateVocabularyFilterResponse>>;
  public function DeleteMedicalTranscriptionJob(DeleteMedicalTranscriptionJobRequest) Awaitable<Errors\Error>;
  public function DeleteTranscriptionJob(DeleteTranscriptionJobRequest) Awaitable<Errors\Error>;
  public function DeleteVocabulary(DeleteVocabularyRequest) Awaitable<Errors\Error>;
  public function DeleteVocabularyFilter(DeleteVocabularyFilterRequest) Awaitable<Errors\Error>;
  public function GetMedicalTranscriptionJob(GetMedicalTranscriptionJobRequest) Awaitable<Errors\Result<GetMedicalTranscriptionJobResponse>>;
  public function GetTranscriptionJob(GetTranscriptionJobRequest) Awaitable<Errors\Result<GetTranscriptionJobResponse>>;
  public function GetVocabulary(GetVocabularyRequest) Awaitable<Errors\Result<GetVocabularyResponse>>;
  public function GetVocabularyFilter(GetVocabularyFilterRequest) Awaitable<Errors\Result<GetVocabularyFilterResponse>>;
  public function ListMedicalTranscriptionJobs(ListMedicalTranscriptionJobsRequest) Awaitable<Errors\Result<ListMedicalTranscriptionJobsResponse>>;
  public function ListTranscriptionJobs(ListTranscriptionJobsRequest) Awaitable<Errors\Result<ListTranscriptionJobsResponse>>;
  public function ListVocabularies(ListVocabulariesRequest) Awaitable<Errors\Result<ListVocabulariesResponse>>;
  public function ListVocabularyFilters(ListVocabularyFiltersRequest) Awaitable<Errors\Result<ListVocabularyFiltersResponse>>;
  public function StartMedicalTranscriptionJob(StartMedicalTranscriptionJobRequest) Awaitable<Errors\Result<StartMedicalTranscriptionJobResponse>>;
  public function StartTranscriptionJob(StartTranscriptionJobRequest) Awaitable<Errors\Result<StartTranscriptionJobResponse>>;
  public function UpdateVocabulary(UpdateVocabularyRequest) Awaitable<Errors\Result<UpdateVocabularyResponse>>;
  public function UpdateVocabularyFilter(UpdateVocabularyFilterRequest) Awaitable<Errors\Result<UpdateVocabularyFilterResponse>>;
}

class BadRequestException {
  public FailureReason $message;
}

class Boolean {
}

class ConflictException {
  public string $message;
}

class ContentRedaction {
  public RedactionOutput $redaction_output;
  public RedactionType $redaction_type;
}

class CreateVocabularyFilterRequest {
  public LanguageCode $language_code;
  public Uri $vocabulary_filter_file_uri;
  public VocabularyFilterName $vocabulary_filter_name;
  public Words $words;
}

class CreateVocabularyFilterResponse {
  public LanguageCode $language_code;
  public DateTime $last_modified_time;
  public VocabularyFilterName $vocabulary_filter_name;
}

class CreateVocabularyRequest {
  public LanguageCode $language_code;
  public Phrases $phrases;
  public Uri $vocabulary_file_uri;
  public VocabularyName $vocabulary_name;
}

class CreateVocabularyResponse {
  public FailureReason $failure_reason;
  public LanguageCode $language_code;
  public DateTime $last_modified_time;
  public VocabularyName $vocabulary_name;
  public VocabularyState $vocabulary_state;
}

class DataAccessRoleArn {
}

class DateTime {
}

class DeleteMedicalTranscriptionJobRequest {
  public TranscriptionJobName $medical_transcription_job_name;
}

class DeleteTranscriptionJobRequest {
  public TranscriptionJobName $transcription_job_name;
}

class DeleteVocabularyFilterRequest {
  public VocabularyFilterName $vocabulary_filter_name;
}

class DeleteVocabularyRequest {
  public VocabularyName $vocabulary_name;
}

class FailureReason {
}

class GetMedicalTranscriptionJobRequest {
  public TranscriptionJobName $medical_transcription_job_name;
}

class GetMedicalTranscriptionJobResponse {
  public MedicalTranscriptionJob $medical_transcription_job;
}

class GetTranscriptionJobRequest {
  public TranscriptionJobName $transcription_job_name;
}

class GetTranscriptionJobResponse {
  public TranscriptionJob $transcription_job;
}

class GetVocabularyFilterRequest {
  public VocabularyFilterName $vocabulary_filter_name;
}

class GetVocabularyFilterResponse {
  public Uri $download_uri;
  public LanguageCode $language_code;
  public DateTime $last_modified_time;
  public VocabularyFilterName $vocabulary_filter_name;
}

class GetVocabularyRequest {
  public VocabularyName $vocabulary_name;
}

class GetVocabularyResponse {
  public Uri $download_uri;
  public FailureReason $failure_reason;
  public LanguageCode $language_code;
  public DateTime $last_modified_time;
  public VocabularyName $vocabulary_name;
  public VocabularyState $vocabulary_state;
}

class InternalFailureException {
  public string $message;
}

class JobExecutionSettings {
  public boolean $allow_deferred_execution;
  public DataAccessRoleArn $data_access_role_arn;
}

class KMSKeyId {
}

class LanguageCode {
}

class LimitExceededException {
  public string $message;
}

class ListMedicalTranscriptionJobsRequest {
  public TranscriptionJobName $job_name_contains;
  public MaxResults $max_results;
  public NextToken $next_token;
  public TranscriptionJobStatus $status;
}

class ListMedicalTranscriptionJobsResponse {
  public MedicalTranscriptionJobSummaries $medical_transcription_job_summaries;
  public NextToken $next_token;
  public TranscriptionJobStatus $status;
}

class ListTranscriptionJobsRequest {
  public TranscriptionJobName $job_name_contains;
  public MaxResults $max_results;
  public NextToken $next_token;
  public TranscriptionJobStatus $status;
}

class ListTranscriptionJobsResponse {
  public NextToken $next_token;
  public TranscriptionJobStatus $status;
  public TranscriptionJobSummaries $transcription_job_summaries;
}

class ListVocabulariesRequest {
  public MaxResults $max_results;
  public VocabularyName $name_contains;
  public NextToken $next_token;
  public VocabularyState $state_equals;
}

class ListVocabulariesResponse {
  public NextToken $next_token;
  public TranscriptionJobStatus $status;
  public Vocabularies $vocabularies;
}

class ListVocabularyFiltersRequest {
  public MaxResults $max_results;
  public VocabularyFilterName $name_contains;
  public NextToken $next_token;
}

class ListVocabularyFiltersResponse {
  public NextToken $next_token;
  public VocabularyFilters $vocabulary_filters;
}

class MaxAlternatives {
}

class MaxResults {
}

class MaxSpeakers {
}

class Media {
  public Uri $media_file_uri;
}

class MediaFormat {
}

class MediaSampleRateHertz {
}

class MedicalTranscript {
  public Uri $transcript_file_uri;
}

class MedicalTranscriptionJob {
  public DateTime $completion_time;
  public DateTime $creation_time;
  public FailureReason $failure_reason;
  public LanguageCode $language_code;
  public Media $media;
  public MediaFormat $media_format;
  public MediaSampleRateHertz $media_sample_rate_hertz;
  public TranscriptionJobName $medical_transcription_job_name;
  public MedicalTranscriptionSetting $settings;
  public Specialty $specialty;
  public DateTime $start_time;
  public MedicalTranscript $transcript;
  public TranscriptionJobStatus $transcription_job_status;
  public Type $type;
}

class MedicalTranscriptionJobSummaries {
}

class MedicalTranscriptionJobSummary {
  public DateTime $completion_time;
  public DateTime $creation_time;
  public FailureReason $failure_reason;
  public LanguageCode $language_code;
  public TranscriptionJobName $medical_transcription_job_name;
  public OutputLocationType $output_location_type;
  public Specialty $specialty;
  public DateTime $start_time;
  public TranscriptionJobStatus $transcription_job_status;
  public Type $type;
}

class MedicalTranscriptionSetting {
  public boolean $channel_identification;
  public MaxAlternatives $max_alternatives;
  public MaxSpeakers $max_speaker_labels;
  public boolean $show_alternatives;
  public boolean $show_speaker_labels;
}

class NextToken {
}

class NotFoundException {
  public string $message;
}

class OutputBucketName {
}

class OutputLocationType {
}

class Phrase {
}

class Phrases {
}

class RedactionOutput {
}

class RedactionType {
}

class Settings {
  public boolean $channel_identification;
  public MaxAlternatives $max_alternatives;
  public MaxSpeakers $max_speaker_labels;
  public boolean $show_alternatives;
  public boolean $show_speaker_labels;
  public VocabularyFilterMethod $vocabulary_filter_method;
  public VocabularyFilterName $vocabulary_filter_name;
  public VocabularyName $vocabulary_name;
}

class Specialty {
}

class StartMedicalTranscriptionJobRequest {
  public LanguageCode $language_code;
  public Media $media;
  public MediaFormat $media_format;
  public MediaSampleRateHertz $media_sample_rate_hertz;
  public TranscriptionJobName $medical_transcription_job_name;
  public OutputBucketName $output_bucket_name;
  public KMSKeyId $output_encryption_kms_key_id;
  public MedicalTranscriptionSetting $settings;
  public Specialty $specialty;
  public Type $type;
}

class StartMedicalTranscriptionJobResponse {
  public MedicalTranscriptionJob $medical_transcription_job;
}

class StartTranscriptionJobRequest {
  public ContentRedaction $content_redaction;
  public JobExecutionSettings $job_execution_settings;
  public LanguageCode $language_code;
  public Media $media;
  public MediaFormat $media_format;
  public MediaSampleRateHertz $media_sample_rate_hertz;
  public OutputBucketName $output_bucket_name;
  public KMSKeyId $output_encryption_kms_key_id;
  public Settings $settings;
  public TranscriptionJobName $transcription_job_name;
}

class StartTranscriptionJobResponse {
  public TranscriptionJob $transcription_job;
}

class String {
}

class Transcript {
  public Uri $redacted_transcript_file_uri;
  public Uri $transcript_file_uri;
}

class TranscriptionJob {
  public DateTime $completion_time;
  public ContentRedaction $content_redaction;
  public DateTime $creation_time;
  public FailureReason $failure_reason;
  public JobExecutionSettings $job_execution_settings;
  public LanguageCode $language_code;
  public Media $media;
  public MediaFormat $media_format;
  public MediaSampleRateHertz $media_sample_rate_hertz;
  public Settings $settings;
  public DateTime $start_time;
  public Transcript $transcript;
  public TranscriptionJobName $transcription_job_name;
  public TranscriptionJobStatus $transcription_job_status;
}

class TranscriptionJobName {
}

class TranscriptionJobStatus {
}

class TranscriptionJobSummaries {
}

class TranscriptionJobSummary {
  public DateTime $completion_time;
  public ContentRedaction $content_redaction;
  public DateTime $creation_time;
  public FailureReason $failure_reason;
  public LanguageCode $language_code;
  public OutputLocationType $output_location_type;
  public DateTime $start_time;
  public TranscriptionJobName $transcription_job_name;
  public TranscriptionJobStatus $transcription_job_status;
}

class Type {
}

class UpdateVocabularyFilterRequest {
  public Uri $vocabulary_filter_file_uri;
  public VocabularyFilterName $vocabulary_filter_name;
  public Words $words;
}

class UpdateVocabularyFilterResponse {
  public LanguageCode $language_code;
  public DateTime $last_modified_time;
  public VocabularyFilterName $vocabulary_filter_name;
}

class UpdateVocabularyRequest {
  public LanguageCode $language_code;
  public Phrases $phrases;
  public Uri $vocabulary_file_uri;
  public VocabularyName $vocabulary_name;
}

class UpdateVocabularyResponse {
  public LanguageCode $language_code;
  public DateTime $last_modified_time;
  public VocabularyName $vocabulary_name;
  public VocabularyState $vocabulary_state;
}

class Uri {
}

class Vocabularies {
}

class VocabularyFilterInfo {
  public LanguageCode $language_code;
  public DateTime $last_modified_time;
  public VocabularyFilterName $vocabulary_filter_name;
}

class VocabularyFilterMethod {
}

class VocabularyFilterName {
}

class VocabularyFilters {
}

class VocabularyInfo {
  public LanguageCode $language_code;
  public DateTime $last_modified_time;
  public VocabularyName $vocabulary_name;
  public VocabularyState $vocabulary_state;
}

class VocabularyName {
}

class VocabularyState {
}

class Word {
}

class Words {
}


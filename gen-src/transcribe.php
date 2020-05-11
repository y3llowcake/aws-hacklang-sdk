<?hh // strict
namespace slack\aws\transcribe;

interface Transcribe {
  public function CreateVocabulary(CreateVocabularyRequest): Awaitable<Errors\Result<CreateVocabularyResponse>>;
  public function CreateVocabularyFilter(CreateVocabularyFilterRequest): Awaitable<Errors\Result<CreateVocabularyFilterResponse>>;
  public function DeleteMedicalTranscriptionJob(DeleteMedicalTranscriptionJobRequest): Awaitable<Errors\Error>;
  public function DeleteTranscriptionJob(DeleteTranscriptionJobRequest): Awaitable<Errors\Error>;
  public function DeleteVocabulary(DeleteVocabularyRequest): Awaitable<Errors\Error>;
  public function DeleteVocabularyFilter(DeleteVocabularyFilterRequest): Awaitable<Errors\Error>;
  public function GetMedicalTranscriptionJob(GetMedicalTranscriptionJobRequest): Awaitable<Errors\Result<GetMedicalTranscriptionJobResponse>>;
  public function GetTranscriptionJob(GetTranscriptionJobRequest): Awaitable<Errors\Result<GetTranscriptionJobResponse>>;
  public function GetVocabulary(GetVocabularyRequest): Awaitable<Errors\Result<GetVocabularyResponse>>;
  public function GetVocabularyFilter(GetVocabularyFilterRequest): Awaitable<Errors\Result<GetVocabularyFilterResponse>>;
  public function ListMedicalTranscriptionJobs(ListMedicalTranscriptionJobsRequest): Awaitable<Errors\Result<ListMedicalTranscriptionJobsResponse>>;
  public function ListTranscriptionJobs(ListTranscriptionJobsRequest): Awaitable<Errors\Result<ListTranscriptionJobsResponse>>;
  public function ListVocabularies(ListVocabulariesRequest): Awaitable<Errors\Result<ListVocabulariesResponse>>;
  public function ListVocabularyFilters(ListVocabularyFiltersRequest): Awaitable<Errors\Result<ListVocabularyFiltersResponse>>;
  public function StartMedicalTranscriptionJob(StartMedicalTranscriptionJobRequest): Awaitable<Errors\Result<StartMedicalTranscriptionJobResponse>>;
  public function StartTranscriptionJob(StartTranscriptionJobRequest): Awaitable<Errors\Result<StartTranscriptionJobResponse>>;
  public function UpdateVocabulary(UpdateVocabularyRequest): Awaitable<Errors\Result<UpdateVocabularyResponse>>;
  public function UpdateVocabularyFilter(UpdateVocabularyFilterRequest): Awaitable<Errors\Result<UpdateVocabularyFilterResponse>>;
}

class BadRequestException {
  public FailureReason $message;

  public function __construct(shape(
  ?'message' => FailureReason,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Boolean = bool;

class ConflictException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ContentRedaction {
  public RedactionOutput $redaction_output;
  public RedactionType $redaction_type;

  public function __construct(shape(
  ?'redaction_output' => RedactionOutput,
  ?'redaction_type' => RedactionType,
  ) $s = shape()) {
    $this->redaction_output = $redaction_output ?? "";
    $this->redaction_type = $redaction_type ?? "";
  }
}

class CreateVocabularyFilterRequest {
  public LanguageCode $language_code;
  public Uri $vocabulary_filter_file_uri;
  public VocabularyFilterName $vocabulary_filter_name;
  public Words $words;

  public function __construct(shape(
  ?'language_code' => LanguageCode,
  ?'vocabulary_filter_file_uri' => Uri,
  ?'vocabulary_filter_name' => VocabularyFilterName,
  ?'words' => Words,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->vocabulary_filter_file_uri = $vocabulary_filter_file_uri ?? ;
    $this->vocabulary_filter_name = $vocabulary_filter_name ?? "";
    $this->words = $words ?? [];
  }
}

class CreateVocabularyFilterResponse {
  public LanguageCode $language_code;
  public DateTime $last_modified_time;
  public VocabularyFilterName $vocabulary_filter_name;

  public function __construct(shape(
  ?'language_code' => LanguageCode,
  ?'last_modified_time' => DateTime,
  ?'vocabulary_filter_name' => VocabularyFilterName,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->last_modified_time = $last_modified_time ?? ;
    $this->vocabulary_filter_name = $vocabulary_filter_name ?? "";
  }
}

class CreateVocabularyRequest {
  public LanguageCode $language_code;
  public Phrases $phrases;
  public Uri $vocabulary_file_uri;
  public VocabularyName $vocabulary_name;

  public function __construct(shape(
  ?'language_code' => LanguageCode,
  ?'phrases' => Phrases,
  ?'vocabulary_file_uri' => Uri,
  ?'vocabulary_name' => VocabularyName,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->phrases = $phrases ?? [];
    $this->vocabulary_file_uri = $vocabulary_file_uri ?? ;
    $this->vocabulary_name = $vocabulary_name ?? "";
  }
}

class CreateVocabularyResponse {
  public FailureReason $failure_reason;
  public LanguageCode $language_code;
  public DateTime $last_modified_time;
  public VocabularyName $vocabulary_name;
  public VocabularyState $vocabulary_state;

  public function __construct(shape(
  ?'failure_reason' => FailureReason,
  ?'language_code' => LanguageCode,
  ?'last_modified_time' => DateTime,
  ?'vocabulary_name' => VocabularyName,
  ?'vocabulary_state' => VocabularyState,
  ) $s = shape()) {
    $this->failure_reason = $failure_reason ?? "";
    $this->language_code = $language_code ?? "";
    $this->last_modified_time = $last_modified_time ?? ;
    $this->vocabulary_name = $vocabulary_name ?? "";
    $this->vocabulary_state = $vocabulary_state ?? "";
  }
}

type DataAccessRoleArn = string;

type DateTime = int;

class DeleteMedicalTranscriptionJobRequest {
  public TranscriptionJobName $medical_transcription_job_name;

  public function __construct(shape(
  ?'medical_transcription_job_name' => TranscriptionJobName,
  ) $s = shape()) {
    $this->medical_transcription_job_name = $medical_transcription_job_name ?? ;
  }
}

class DeleteTranscriptionJobRequest {
  public TranscriptionJobName $transcription_job_name;

  public function __construct(shape(
  ?'transcription_job_name' => TranscriptionJobName,
  ) $s = shape()) {
    $this->transcription_job_name = $transcription_job_name ?? "";
  }
}

class DeleteVocabularyFilterRequest {
  public VocabularyFilterName $vocabulary_filter_name;

  public function __construct(shape(
  ?'vocabulary_filter_name' => VocabularyFilterName,
  ) $s = shape()) {
    $this->vocabulary_filter_name = $vocabulary_filter_name ?? "";
  }
}

class DeleteVocabularyRequest {
  public VocabularyName $vocabulary_name;

  public function __construct(shape(
  ?'vocabulary_name' => VocabularyName,
  ) $s = shape()) {
    $this->vocabulary_name = $vocabulary_name ?? "";
  }
}

type FailureReason = string;

class GetMedicalTranscriptionJobRequest {
  public TranscriptionJobName $medical_transcription_job_name;

  public function __construct(shape(
  ?'medical_transcription_job_name' => TranscriptionJobName,
  ) $s = shape()) {
    $this->medical_transcription_job_name = $medical_transcription_job_name ?? ;
  }
}

class GetMedicalTranscriptionJobResponse {
  public MedicalTranscriptionJob $medical_transcription_job;

  public function __construct(shape(
  ?'medical_transcription_job' => MedicalTranscriptionJob,
  ) $s = shape()) {
    $this->medical_transcription_job = $medical_transcription_job ?? null;
  }
}

class GetTranscriptionJobRequest {
  public TranscriptionJobName $transcription_job_name;

  public function __construct(shape(
  ?'transcription_job_name' => TranscriptionJobName,
  ) $s = shape()) {
    $this->transcription_job_name = $transcription_job_name ?? "";
  }
}

class GetTranscriptionJobResponse {
  public TranscriptionJob $transcription_job;

  public function __construct(shape(
  ?'transcription_job' => TranscriptionJob,
  ) $s = shape()) {
    $this->transcription_job = $transcription_job ?? null;
  }
}

class GetVocabularyFilterRequest {
  public VocabularyFilterName $vocabulary_filter_name;

  public function __construct(shape(
  ?'vocabulary_filter_name' => VocabularyFilterName,
  ) $s = shape()) {
    $this->vocabulary_filter_name = $vocabulary_filter_name ?? "";
  }
}

class GetVocabularyFilterResponse {
  public Uri $download_uri;
  public LanguageCode $language_code;
  public DateTime $last_modified_time;
  public VocabularyFilterName $vocabulary_filter_name;

  public function __construct(shape(
  ?'download_uri' => Uri,
  ?'language_code' => LanguageCode,
  ?'last_modified_time' => DateTime,
  ?'vocabulary_filter_name' => VocabularyFilterName,
  ) $s = shape()) {
    $this->download_uri = $download_uri ?? ;
    $this->language_code = $language_code ?? "";
    $this->last_modified_time = $last_modified_time ?? ;
    $this->vocabulary_filter_name = $vocabulary_filter_name ?? "";
  }
}

class GetVocabularyRequest {
  public VocabularyName $vocabulary_name;

  public function __construct(shape(
  ?'vocabulary_name' => VocabularyName,
  ) $s = shape()) {
    $this->vocabulary_name = $vocabulary_name ?? "";
  }
}

class GetVocabularyResponse {
  public Uri $download_uri;
  public FailureReason $failure_reason;
  public LanguageCode $language_code;
  public DateTime $last_modified_time;
  public VocabularyName $vocabulary_name;
  public VocabularyState $vocabulary_state;

  public function __construct(shape(
  ?'download_uri' => Uri,
  ?'failure_reason' => FailureReason,
  ?'language_code' => LanguageCode,
  ?'last_modified_time' => DateTime,
  ?'vocabulary_name' => VocabularyName,
  ?'vocabulary_state' => VocabularyState,
  ) $s = shape()) {
    $this->download_uri = $download_uri ?? ;
    $this->failure_reason = $failure_reason ?? "";
    $this->language_code = $language_code ?? "";
    $this->last_modified_time = $last_modified_time ?? ;
    $this->vocabulary_name = $vocabulary_name ?? "";
    $this->vocabulary_state = $vocabulary_state ?? "";
  }
}

class InternalFailureException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class JobExecutionSettings {
  public boolean $allow_deferred_execution;
  public DataAccessRoleArn $data_access_role_arn;

  public function __construct(shape(
  ?'allow_deferred_execution' => boolean,
  ?'data_access_role_arn' => DataAccessRoleArn,
  ) $s = shape()) {
    $this->allow_deferred_execution = $allow_deferred_execution ?? ;
    $this->data_access_role_arn = $data_access_role_arn ?? "";
  }
}

type KMSKeyId = string;

type LanguageCode = string;

class LimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ListMedicalTranscriptionJobsRequest {
  public TranscriptionJobName $job_name_contains;
  public MaxResults $max_results;
  public NextToken $next_token;
  public TranscriptionJobStatus $status;

  public function __construct(shape(
  ?'job_name_contains' => TranscriptionJobName,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'status' => TranscriptionJobStatus,
  ) $s = shape()) {
    $this->job_name_contains = $job_name_contains ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->status = $status ?? ;
  }
}

class ListMedicalTranscriptionJobsResponse {
  public MedicalTranscriptionJobSummaries $medical_transcription_job_summaries;
  public NextToken $next_token;
  public TranscriptionJobStatus $status;

  public function __construct(shape(
  ?'medical_transcription_job_summaries' => MedicalTranscriptionJobSummaries,
  ?'next_token' => NextToken,
  ?'status' => TranscriptionJobStatus,
  ) $s = shape()) {
    $this->medical_transcription_job_summaries = $medical_transcription_job_summaries ?? [];
    $this->next_token = $next_token ?? "";
    $this->status = $status ?? ;
  }
}

class ListTranscriptionJobsRequest {
  public TranscriptionJobName $job_name_contains;
  public MaxResults $max_results;
  public NextToken $next_token;
  public TranscriptionJobStatus $status;

  public function __construct(shape(
  ?'job_name_contains' => TranscriptionJobName,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'status' => TranscriptionJobStatus,
  ) $s = shape()) {
    $this->job_name_contains = $job_name_contains ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->status = $status ?? ;
  }
}

class ListTranscriptionJobsResponse {
  public NextToken $next_token;
  public TranscriptionJobStatus $status;
  public TranscriptionJobSummaries $transcription_job_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'status' => TranscriptionJobStatus,
  ?'transcription_job_summaries' => TranscriptionJobSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->status = $status ?? ;
    $this->transcription_job_summaries = $transcription_job_summaries ?? [];
  }
}

class ListVocabulariesRequest {
  public MaxResults $max_results;
  public VocabularyName $name_contains;
  public NextToken $next_token;
  public VocabularyState $state_equals;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'name_contains' => VocabularyName,
  ?'next_token' => NextToken,
  ?'state_equals' => VocabularyState,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? ;
    $this->next_token = $next_token ?? "";
    $this->state_equals = $state_equals ?? ;
  }
}

class ListVocabulariesResponse {
  public NextToken $next_token;
  public TranscriptionJobStatus $status;
  public Vocabularies $vocabularies;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'status' => TranscriptionJobStatus,
  ?'vocabularies' => Vocabularies,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->status = $status ?? ;
    $this->vocabularies = $vocabularies ?? [];
  }
}

class ListVocabularyFiltersRequest {
  public MaxResults $max_results;
  public VocabularyFilterName $name_contains;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'name_contains' => VocabularyFilterName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListVocabularyFiltersResponse {
  public NextToken $next_token;
  public VocabularyFilters $vocabulary_filters;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'vocabulary_filters' => VocabularyFilters,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->vocabulary_filters = $vocabulary_filters ?? [];
  }
}

type MaxAlternatives = int;

type MaxResults = int;

type MaxSpeakers = int;

class Media {
  public Uri $media_file_uri;

  public function __construct(shape(
  ?'media_file_uri' => Uri,
  ) $s = shape()) {
    $this->media_file_uri = $media_file_uri ?? ;
  }
}

type MediaFormat = string;

type MediaSampleRateHertz = int;

class MedicalTranscript {
  public Uri $transcript_file_uri;

  public function __construct(shape(
  ?'transcript_file_uri' => Uri,
  ) $s = shape()) {
    $this->transcript_file_uri = $transcript_file_uri ?? ;
  }
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

  public function __construct(shape(
  ?'completion_time' => DateTime,
  ?'creation_time' => DateTime,
  ?'failure_reason' => FailureReason,
  ?'language_code' => LanguageCode,
  ?'media' => Media,
  ?'media_format' => MediaFormat,
  ?'media_sample_rate_hertz' => MediaSampleRateHertz,
  ?'medical_transcription_job_name' => TranscriptionJobName,
  ?'settings' => MedicalTranscriptionSetting,
  ?'specialty' => Specialty,
  ?'start_time' => DateTime,
  ?'transcript' => MedicalTranscript,
  ?'transcription_job_status' => TranscriptionJobStatus,
  ?'type' => Type,
  ) $s = shape()) {
    $this->completion_time = $completion_time ?? ;
    $this->creation_time = $creation_time ?? ;
    $this->failure_reason = $failure_reason ?? "";
    $this->language_code = $language_code ?? "";
    $this->media = $media ?? null;
    $this->media_format = $media_format ?? "";
    $this->media_sample_rate_hertz = $media_sample_rate_hertz ?? 0;
    $this->medical_transcription_job_name = $medical_transcription_job_name ?? ;
    $this->settings = $settings ?? null;
    $this->specialty = $specialty ?? "";
    $this->start_time = $start_time ?? ;
    $this->transcript = $transcript ?? null;
    $this->transcription_job_status = $transcription_job_status ?? "";
    $this->type = $type ?? "";
  }
}

type MedicalTranscriptionJobSummaries = vec<MedicalTranscriptionJobSummary>;

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

  public function __construct(shape(
  ?'completion_time' => DateTime,
  ?'creation_time' => DateTime,
  ?'failure_reason' => FailureReason,
  ?'language_code' => LanguageCode,
  ?'medical_transcription_job_name' => TranscriptionJobName,
  ?'output_location_type' => OutputLocationType,
  ?'specialty' => Specialty,
  ?'start_time' => DateTime,
  ?'transcription_job_status' => TranscriptionJobStatus,
  ?'type' => Type,
  ) $s = shape()) {
    $this->completion_time = $completion_time ?? ;
    $this->creation_time = $creation_time ?? ;
    $this->failure_reason = $failure_reason ?? "";
    $this->language_code = $language_code ?? "";
    $this->medical_transcription_job_name = $medical_transcription_job_name ?? ;
    $this->output_location_type = $output_location_type ?? "";
    $this->specialty = $specialty ?? "";
    $this->start_time = $start_time ?? ;
    $this->transcription_job_status = $transcription_job_status ?? "";
    $this->type = $type ?? "";
  }
}

class MedicalTranscriptionSetting {
  public boolean $channel_identification;
  public MaxAlternatives $max_alternatives;
  public MaxSpeakers $max_speaker_labels;
  public boolean $show_alternatives;
  public boolean $show_speaker_labels;

  public function __construct(shape(
  ?'channel_identification' => boolean,
  ?'max_alternatives' => MaxAlternatives,
  ?'max_speaker_labels' => MaxSpeakers,
  ?'show_alternatives' => boolean,
  ?'show_speaker_labels' => boolean,
  ) $s = shape()) {
    $this->channel_identification = $channel_identification ?? ;
    $this->max_alternatives = $max_alternatives ?? 0;
    $this->max_speaker_labels = $max_speaker_labels ?? ;
    $this->show_alternatives = $show_alternatives ?? ;
    $this->show_speaker_labels = $show_speaker_labels ?? ;
  }
}

type NextToken = string;

class NotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type OutputBucketName = string;

type OutputLocationType = string;

type Phrase = string;

type Phrases = vec<Phrase>;

type RedactionOutput = string;

type RedactionType = string;

class Settings {
  public boolean $channel_identification;
  public MaxAlternatives $max_alternatives;
  public MaxSpeakers $max_speaker_labels;
  public boolean $show_alternatives;
  public boolean $show_speaker_labels;
  public VocabularyFilterMethod $vocabulary_filter_method;
  public VocabularyFilterName $vocabulary_filter_name;
  public VocabularyName $vocabulary_name;

  public function __construct(shape(
  ?'channel_identification' => boolean,
  ?'max_alternatives' => MaxAlternatives,
  ?'max_speaker_labels' => MaxSpeakers,
  ?'show_alternatives' => boolean,
  ?'show_speaker_labels' => boolean,
  ?'vocabulary_filter_method' => VocabularyFilterMethod,
  ?'vocabulary_filter_name' => VocabularyFilterName,
  ?'vocabulary_name' => VocabularyName,
  ) $s = shape()) {
    $this->channel_identification = $channel_identification ?? ;
    $this->max_alternatives = $max_alternatives ?? 0;
    $this->max_speaker_labels = $max_speaker_labels ?? ;
    $this->show_alternatives = $show_alternatives ?? ;
    $this->show_speaker_labels = $show_speaker_labels ?? ;
    $this->vocabulary_filter_method = $vocabulary_filter_method ?? "";
    $this->vocabulary_filter_name = $vocabulary_filter_name ?? "";
    $this->vocabulary_name = $vocabulary_name ?? "";
  }
}

type Specialty = string;

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

  public function __construct(shape(
  ?'language_code' => LanguageCode,
  ?'media' => Media,
  ?'media_format' => MediaFormat,
  ?'media_sample_rate_hertz' => MediaSampleRateHertz,
  ?'medical_transcription_job_name' => TranscriptionJobName,
  ?'output_bucket_name' => OutputBucketName,
  ?'output_encryption_kms_key_id' => KMSKeyId,
  ?'settings' => MedicalTranscriptionSetting,
  ?'specialty' => Specialty,
  ?'type' => Type,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->media = $media ?? null;
    $this->media_format = $media_format ?? "";
    $this->media_sample_rate_hertz = $media_sample_rate_hertz ?? 0;
    $this->medical_transcription_job_name = $medical_transcription_job_name ?? ;
    $this->output_bucket_name = $output_bucket_name ?? "";
    $this->output_encryption_kms_key_id = $output_encryption_kms_key_id ?? ;
    $this->settings = $settings ?? null;
    $this->specialty = $specialty ?? "";
    $this->type = $type ?? "";
  }
}

class StartMedicalTranscriptionJobResponse {
  public MedicalTranscriptionJob $medical_transcription_job;

  public function __construct(shape(
  ?'medical_transcription_job' => MedicalTranscriptionJob,
  ) $s = shape()) {
    $this->medical_transcription_job = $medical_transcription_job ?? null;
  }
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

  public function __construct(shape(
  ?'content_redaction' => ContentRedaction,
  ?'job_execution_settings' => JobExecutionSettings,
  ?'language_code' => LanguageCode,
  ?'media' => Media,
  ?'media_format' => MediaFormat,
  ?'media_sample_rate_hertz' => MediaSampleRateHertz,
  ?'output_bucket_name' => OutputBucketName,
  ?'output_encryption_kms_key_id' => KMSKeyId,
  ?'settings' => Settings,
  ?'transcription_job_name' => TranscriptionJobName,
  ) $s = shape()) {
    $this->content_redaction = $content_redaction ?? null;
    $this->job_execution_settings = $job_execution_settings ?? null;
    $this->language_code = $language_code ?? "";
    $this->media = $media ?? null;
    $this->media_format = $media_format ?? "";
    $this->media_sample_rate_hertz = $media_sample_rate_hertz ?? 0;
    $this->output_bucket_name = $output_bucket_name ?? "";
    $this->output_encryption_kms_key_id = $output_encryption_kms_key_id ?? ;
    $this->settings = $settings ?? null;
    $this->transcription_job_name = $transcription_job_name ?? "";
  }
}

class StartTranscriptionJobResponse {
  public TranscriptionJob $transcription_job;

  public function __construct(shape(
  ?'transcription_job' => TranscriptionJob,
  ) $s = shape()) {
    $this->transcription_job = $transcription_job ?? null;
  }
}

type String = string;

class Transcript {
  public Uri $redacted_transcript_file_uri;
  public Uri $transcript_file_uri;

  public function __construct(shape(
  ?'redacted_transcript_file_uri' => Uri,
  ?'transcript_file_uri' => Uri,
  ) $s = shape()) {
    $this->redacted_transcript_file_uri = $redacted_transcript_file_uri ?? ;
    $this->transcript_file_uri = $transcript_file_uri ?? ;
  }
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

  public function __construct(shape(
  ?'completion_time' => DateTime,
  ?'content_redaction' => ContentRedaction,
  ?'creation_time' => DateTime,
  ?'failure_reason' => FailureReason,
  ?'job_execution_settings' => JobExecutionSettings,
  ?'language_code' => LanguageCode,
  ?'media' => Media,
  ?'media_format' => MediaFormat,
  ?'media_sample_rate_hertz' => MediaSampleRateHertz,
  ?'settings' => Settings,
  ?'start_time' => DateTime,
  ?'transcript' => Transcript,
  ?'transcription_job_name' => TranscriptionJobName,
  ?'transcription_job_status' => TranscriptionJobStatus,
  ) $s = shape()) {
    $this->completion_time = $completion_time ?? ;
    $this->content_redaction = $content_redaction ?? null;
    $this->creation_time = $creation_time ?? ;
    $this->failure_reason = $failure_reason ?? "";
    $this->job_execution_settings = $job_execution_settings ?? null;
    $this->language_code = $language_code ?? "";
    $this->media = $media ?? null;
    $this->media_format = $media_format ?? "";
    $this->media_sample_rate_hertz = $media_sample_rate_hertz ?? 0;
    $this->settings = $settings ?? null;
    $this->start_time = $start_time ?? ;
    $this->transcript = $transcript ?? null;
    $this->transcription_job_name = $transcription_job_name ?? "";
    $this->transcription_job_status = $transcription_job_status ?? "";
  }
}

type TranscriptionJobName = string;

type TranscriptionJobStatus = string;

type TranscriptionJobSummaries = vec<TranscriptionJobSummary>;

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

  public function __construct(shape(
  ?'completion_time' => DateTime,
  ?'content_redaction' => ContentRedaction,
  ?'creation_time' => DateTime,
  ?'failure_reason' => FailureReason,
  ?'language_code' => LanguageCode,
  ?'output_location_type' => OutputLocationType,
  ?'start_time' => DateTime,
  ?'transcription_job_name' => TranscriptionJobName,
  ?'transcription_job_status' => TranscriptionJobStatus,
  ) $s = shape()) {
    $this->completion_time = $completion_time ?? ;
    $this->content_redaction = $content_redaction ?? null;
    $this->creation_time = $creation_time ?? ;
    $this->failure_reason = $failure_reason ?? "";
    $this->language_code = $language_code ?? "";
    $this->output_location_type = $output_location_type ?? "";
    $this->start_time = $start_time ?? ;
    $this->transcription_job_name = $transcription_job_name ?? "";
    $this->transcription_job_status = $transcription_job_status ?? "";
  }
}

type Type = string;

class UpdateVocabularyFilterRequest {
  public Uri $vocabulary_filter_file_uri;
  public VocabularyFilterName $vocabulary_filter_name;
  public Words $words;

  public function __construct(shape(
  ?'vocabulary_filter_file_uri' => Uri,
  ?'vocabulary_filter_name' => VocabularyFilterName,
  ?'words' => Words,
  ) $s = shape()) {
    $this->vocabulary_filter_file_uri = $vocabulary_filter_file_uri ?? ;
    $this->vocabulary_filter_name = $vocabulary_filter_name ?? "";
    $this->words = $words ?? [];
  }
}

class UpdateVocabularyFilterResponse {
  public LanguageCode $language_code;
  public DateTime $last_modified_time;
  public VocabularyFilterName $vocabulary_filter_name;

  public function __construct(shape(
  ?'language_code' => LanguageCode,
  ?'last_modified_time' => DateTime,
  ?'vocabulary_filter_name' => VocabularyFilterName,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->last_modified_time = $last_modified_time ?? ;
    $this->vocabulary_filter_name = $vocabulary_filter_name ?? "";
  }
}

class UpdateVocabularyRequest {
  public LanguageCode $language_code;
  public Phrases $phrases;
  public Uri $vocabulary_file_uri;
  public VocabularyName $vocabulary_name;

  public function __construct(shape(
  ?'language_code' => LanguageCode,
  ?'phrases' => Phrases,
  ?'vocabulary_file_uri' => Uri,
  ?'vocabulary_name' => VocabularyName,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->phrases = $phrases ?? [];
    $this->vocabulary_file_uri = $vocabulary_file_uri ?? ;
    $this->vocabulary_name = $vocabulary_name ?? "";
  }
}

class UpdateVocabularyResponse {
  public LanguageCode $language_code;
  public DateTime $last_modified_time;
  public VocabularyName $vocabulary_name;
  public VocabularyState $vocabulary_state;

  public function __construct(shape(
  ?'language_code' => LanguageCode,
  ?'last_modified_time' => DateTime,
  ?'vocabulary_name' => VocabularyName,
  ?'vocabulary_state' => VocabularyState,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->last_modified_time = $last_modified_time ?? ;
    $this->vocabulary_name = $vocabulary_name ?? "";
    $this->vocabulary_state = $vocabulary_state ?? "";
  }
}

type Uri = string;

type Vocabularies = vec<VocabularyInfo>;

class VocabularyFilterInfo {
  public LanguageCode $language_code;
  public DateTime $last_modified_time;
  public VocabularyFilterName $vocabulary_filter_name;

  public function __construct(shape(
  ?'language_code' => LanguageCode,
  ?'last_modified_time' => DateTime,
  ?'vocabulary_filter_name' => VocabularyFilterName,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->last_modified_time = $last_modified_time ?? ;
    $this->vocabulary_filter_name = $vocabulary_filter_name ?? "";
  }
}

type VocabularyFilterMethod = string;

type VocabularyFilterName = string;

type VocabularyFilters = vec<VocabularyFilterInfo>;

class VocabularyInfo {
  public LanguageCode $language_code;
  public DateTime $last_modified_time;
  public VocabularyName $vocabulary_name;
  public VocabularyState $vocabulary_state;

  public function __construct(shape(
  ?'language_code' => LanguageCode,
  ?'last_modified_time' => DateTime,
  ?'vocabulary_name' => VocabularyName,
  ?'vocabulary_state' => VocabularyState,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->last_modified_time = $last_modified_time ?? ;
    $this->vocabulary_name = $vocabulary_name ?? "";
    $this->vocabulary_state = $vocabulary_state ?? "";
  }
}

type VocabularyName = string;

type VocabularyState = string;

type Word = string;

type Words = vec<Word>;


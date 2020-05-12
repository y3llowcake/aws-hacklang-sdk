<?hh // strict
namespace slack\aws\polly;

interface Polly {
  public function DeleteLexicon(DeleteLexiconInput $in): Awaitable<\Errors\Result<DeleteLexiconOutput>>;
  public function DescribeVoices(DescribeVoicesInput $in): Awaitable<\Errors\Result<DescribeVoicesOutput>>;
  public function GetLexicon(GetLexiconInput $in): Awaitable<\Errors\Result<GetLexiconOutput>>;
  public function GetSpeechSynthesisTask(GetSpeechSynthesisTaskInput $in): Awaitable<\Errors\Result<GetSpeechSynthesisTaskOutput>>;
  public function ListLexicons(ListLexiconsInput $in): Awaitable<\Errors\Result<ListLexiconsOutput>>;
  public function ListSpeechSynthesisTasks(ListSpeechSynthesisTasksInput $in): Awaitable<\Errors\Result<ListSpeechSynthesisTasksOutput>>;
  public function PutLexicon(PutLexiconInput $in): Awaitable<\Errors\Result<PutLexiconOutput>>;
  public function StartSpeechSynthesisTask(StartSpeechSynthesisTaskInput $in): Awaitable<\Errors\Result<StartSpeechSynthesisTaskOutput>>;
  public function SynthesizeSpeech(SynthesizeSpeechInput $in): Awaitable<\Errors\Result<SynthesizeSpeechOutput>>;
}

type Alphabet = string;

type AudioStream = string;

type ContentType = string;

type DateTime = int;

class DeleteLexiconInput {
  public ?LexiconName $name;

  public function __construct(shape(
    ?'name' => ?LexiconName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DeleteLexiconOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeVoicesInput {
  public ?Engine $engine;
  public ?IncludeAdditionalLanguageCodes $include_additional_language_codes;
  public ?LanguageCode $language_code;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'engine' => ?Engine,
    ?'include_additional_language_codes' => ?IncludeAdditionalLanguageCodes,
    ?'language_code' => ?LanguageCode,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->engine = $s['engine'] ?? '';
    $this->include_additional_language_codes = $s['include_additional_language_codes'] ?? false;
    $this->language_code = $s['language_code'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeVoicesOutput {
  public ?NextToken $next_token;
  public ?VoiceList $voices;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'voices' => ?VoiceList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->voices = $s['voices'] ?? vec[];
  }
}

type Engine = string;

type EngineList = vec<Engine>;

class EngineNotSupportedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ErrorMessage = string;

type Gender = string;

class GetLexiconInput {
  public ?LexiconName $name;

  public function __construct(shape(
    ?'name' => ?LexiconName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class GetLexiconOutput {
  public ?Lexicon $lexicon;
  public ?LexiconAttributes $lexicon_attributes;

  public function __construct(shape(
    ?'lexicon' => ?Lexicon,
    ?'lexicon_attributes' => ?LexiconAttributes,
  ) $s = shape()) {
    $this->lexicon = $s['lexicon'] ?? null;
    $this->lexicon_attributes = $s['lexicon_attributes'] ?? null;
  }
}

class GetSpeechSynthesisTaskInput {
  public ?TaskId $task_id;

  public function __construct(shape(
    ?'task_id' => ?TaskId,
  ) $s = shape()) {
    $this->task_id = $s['task_id'] ?? '';
  }
}

class GetSpeechSynthesisTaskOutput {
  public ?SynthesisTask $synthesis_task;

  public function __construct(shape(
    ?'synthesis_task' => ?SynthesisTask,
  ) $s = shape()) {
    $this->synthesis_task = $s['synthesis_task'] ?? null;
  }
}

type IncludeAdditionalLanguageCodes = bool;

class InvalidLexiconException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidNextTokenException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidS3BucketException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidS3KeyException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidSampleRateException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidSnsTopicArnException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidSsmlException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidTaskIdException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type LanguageCode = string;

type LanguageCodeList = vec<LanguageCode>;

type LanguageName = string;

class LanguageNotSupportedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type LastModified = int;

type LexemesCount = int;

class Lexicon {
  public ?LexiconContent $content;
  public ?LexiconName $name;

  public function __construct(shape(
    ?'content' => ?LexiconContent,
    ?'name' => ?LexiconName,
  ) $s = shape()) {
    $this->content = $s['content'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type LexiconArn = string;

class LexiconAttributes {
  public ?Alphabet $alphabet;
  public ?LanguageCode $language_code;
  public ?LastModified $last_modified;
  public ?LexemesCount $lexemes_count;
  public ?LexiconArn $lexicon_arn;
  public ?Size $size;

  public function __construct(shape(
    ?'alphabet' => ?Alphabet,
    ?'language_code' => ?LanguageCode,
    ?'last_modified' => ?LastModified,
    ?'lexemes_count' => ?LexemesCount,
    ?'lexicon_arn' => ?LexiconArn,
    ?'size' => ?Size,
  ) $s = shape()) {
    $this->alphabet = $s['alphabet'] ?? '';
    $this->language_code = $s['language_code'] ?? '';
    $this->last_modified = $s['last_modified'] ?? 0;
    $this->lexemes_count = $s['lexemes_count'] ?? 0;
    $this->lexicon_arn = $s['lexicon_arn'] ?? '';
    $this->size = $s['size'] ?? 0;
  }
}

type LexiconContent = string;

class LexiconDescription {
  public ?LexiconAttributes $attributes;
  public ?LexiconName $name;

  public function __construct(shape(
    ?'attributes' => ?LexiconAttributes,
    ?'name' => ?LexiconName,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

type LexiconDescriptionList = vec<LexiconDescription>;

type LexiconName = string;

type LexiconNameList = vec<LexiconName>;

class LexiconNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class LexiconSizeExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListLexiconsInput {
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListLexiconsOutput {
  public ?LexiconDescriptionList $lexicons;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'lexicons' => ?LexiconDescriptionList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->lexicons = $s['lexicons'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSpeechSynthesisTasksInput {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?TaskStatus $status;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'status' => ?TaskStatus,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class ListSpeechSynthesisTasksOutput {
  public ?NextToken $next_token;
  public ?SynthesisTasks $synthesis_tasks;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'synthesis_tasks' => ?SynthesisTasks,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->synthesis_tasks = $s['synthesis_tasks'] ?? vec[];
  }
}

class MarksNotSupportedForFormatException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class MaxLexemeLengthExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class MaxLexiconsNumberExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type MaxResults = int;

type NextToken = string;

type OutputFormat = string;

type OutputS3BucketName = string;

type OutputS3KeyPrefix = string;

type OutputUri = string;

class PutLexiconInput {
  public ?LexiconContent $content;
  public ?LexiconName $name;

  public function __construct(shape(
    ?'content' => ?LexiconContent,
    ?'name' => ?LexiconName,
  ) $s = shape()) {
    $this->content = $s['content'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class PutLexiconOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RequestCharacters = int;

type SampleRate = string;

class ServiceFailureException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Size = int;

type SnsTopicArn = string;

type SpeechMarkType = string;

type SpeechMarkTypeList = vec<SpeechMarkType>;

class SsmlMarksNotSupportedForTextTypeException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class StartSpeechSynthesisTaskInput {
  public ?Engine $engine;
  public ?LanguageCode $language_code;
  public ?LexiconNameList $lexicon_names;
  public ?OutputFormat $output_format;
  public ?OutputS3BucketName $output_s_3_bucket_name;
  public ?OutputS3KeyPrefix $output_s_3_key_prefix;
  public ?SampleRate $sample_rate;
  public ?SnsTopicArn $sns_topic_arn;
  public ?SpeechMarkTypeList $speech_mark_types;
  public ?Text $text;
  public ?TextType $text_type;
  public ?VoiceId $voice_id;

  public function __construct(shape(
    ?'engine' => ?Engine,
    ?'language_code' => ?LanguageCode,
    ?'lexicon_names' => ?LexiconNameList,
    ?'output_format' => ?OutputFormat,
    ?'output_s_3_bucket_name' => ?OutputS3BucketName,
    ?'output_s_3_key_prefix' => ?OutputS3KeyPrefix,
    ?'sample_rate' => ?SampleRate,
    ?'sns_topic_arn' => ?SnsTopicArn,
    ?'speech_mark_types' => ?SpeechMarkTypeList,
    ?'text' => ?Text,
    ?'text_type' => ?TextType,
    ?'voice_id' => ?VoiceId,
  ) $s = shape()) {
    $this->engine = $s['engine'] ?? '';
    $this->language_code = $s['language_code'] ?? '';
    $this->lexicon_names = $s['lexicon_names'] ?? vec[];
    $this->output_format = $s['output_format'] ?? '';
    $this->output_s_3_bucket_name = $s['output_s_3_bucket_name'] ?? '';
    $this->output_s_3_key_prefix = $s['output_s_3_key_prefix'] ?? '';
    $this->sample_rate = $s['sample_rate'] ?? '';
    $this->sns_topic_arn = $s['sns_topic_arn'] ?? '';
    $this->speech_mark_types = $s['speech_mark_types'] ?? vec[];
    $this->text = $s['text'] ?? '';
    $this->text_type = $s['text_type'] ?? '';
    $this->voice_id = $s['voice_id'] ?? '';
  }
}

class StartSpeechSynthesisTaskOutput {
  public ?SynthesisTask $synthesis_task;

  public function __construct(shape(
    ?'synthesis_task' => ?SynthesisTask,
  ) $s = shape()) {
    $this->synthesis_task = $s['synthesis_task'] ?? null;
  }
}

class SynthesisTask {
  public ?DateTime $creation_time;
  public ?Engine $engine;
  public ?LanguageCode $language_code;
  public ?LexiconNameList $lexicon_names;
  public ?OutputFormat $output_format;
  public ?OutputUri $output_uri;
  public ?RequestCharacters $request_characters;
  public ?SampleRate $sample_rate;
  public ?SnsTopicArn $sns_topic_arn;
  public ?SpeechMarkTypeList $speech_mark_types;
  public ?TaskId $task_id;
  public ?TaskStatus $task_status;
  public ?TaskStatusReason $task_status_reason;
  public ?TextType $text_type;
  public ?VoiceId $voice_id;

  public function __construct(shape(
    ?'creation_time' => ?DateTime,
    ?'engine' => ?Engine,
    ?'language_code' => ?LanguageCode,
    ?'lexicon_names' => ?LexiconNameList,
    ?'output_format' => ?OutputFormat,
    ?'output_uri' => ?OutputUri,
    ?'request_characters' => ?RequestCharacters,
    ?'sample_rate' => ?SampleRate,
    ?'sns_topic_arn' => ?SnsTopicArn,
    ?'speech_mark_types' => ?SpeechMarkTypeList,
    ?'task_id' => ?TaskId,
    ?'task_status' => ?TaskStatus,
    ?'task_status_reason' => ?TaskStatusReason,
    ?'text_type' => ?TextType,
    ?'voice_id' => ?VoiceId,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->engine = $s['engine'] ?? '';
    $this->language_code = $s['language_code'] ?? '';
    $this->lexicon_names = $s['lexicon_names'] ?? vec[];
    $this->output_format = $s['output_format'] ?? '';
    $this->output_uri = $s['output_uri'] ?? '';
    $this->request_characters = $s['request_characters'] ?? 0;
    $this->sample_rate = $s['sample_rate'] ?? '';
    $this->sns_topic_arn = $s['sns_topic_arn'] ?? '';
    $this->speech_mark_types = $s['speech_mark_types'] ?? vec[];
    $this->task_id = $s['task_id'] ?? '';
    $this->task_status = $s['task_status'] ?? '';
    $this->task_status_reason = $s['task_status_reason'] ?? '';
    $this->text_type = $s['text_type'] ?? '';
    $this->voice_id = $s['voice_id'] ?? '';
  }
}

class SynthesisTaskNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type SynthesisTasks = vec<SynthesisTask>;

class SynthesizeSpeechInput {
  public ?Engine $engine;
  public ?LanguageCode $language_code;
  public ?LexiconNameList $lexicon_names;
  public ?OutputFormat $output_format;
  public ?SampleRate $sample_rate;
  public ?SpeechMarkTypeList $speech_mark_types;
  public ?Text $text;
  public ?TextType $text_type;
  public ?VoiceId $voice_id;

  public function __construct(shape(
    ?'engine' => ?Engine,
    ?'language_code' => ?LanguageCode,
    ?'lexicon_names' => ?LexiconNameList,
    ?'output_format' => ?OutputFormat,
    ?'sample_rate' => ?SampleRate,
    ?'speech_mark_types' => ?SpeechMarkTypeList,
    ?'text' => ?Text,
    ?'text_type' => ?TextType,
    ?'voice_id' => ?VoiceId,
  ) $s = shape()) {
    $this->engine = $s['engine'] ?? '';
    $this->language_code = $s['language_code'] ?? '';
    $this->lexicon_names = $s['lexicon_names'] ?? vec[];
    $this->output_format = $s['output_format'] ?? '';
    $this->sample_rate = $s['sample_rate'] ?? '';
    $this->speech_mark_types = $s['speech_mark_types'] ?? vec[];
    $this->text = $s['text'] ?? '';
    $this->text_type = $s['text_type'] ?? '';
    $this->voice_id = $s['voice_id'] ?? '';
  }
}

class SynthesizeSpeechOutput {
  public ?AudioStream $audio_stream;
  public ?ContentType $content_type;
  public ?RequestCharacters $request_characters;

  public function __construct(shape(
    ?'audio_stream' => ?AudioStream,
    ?'content_type' => ?ContentType,
    ?'request_characters' => ?RequestCharacters,
  ) $s = shape()) {
    $this->audio_stream = $s['audio_stream'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
    $this->request_characters = $s['request_characters'] ?? 0;
  }
}

type TaskId = string;

type TaskStatus = string;

type TaskStatusReason = string;

type Text = string;

class TextLengthExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type TextType = string;

class UnsupportedPlsAlphabetException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UnsupportedPlsLanguageException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Voice {
  public ?LanguageCodeList $additional_language_codes;
  public ?Gender $gender;
  public ?VoiceId $id;
  public ?LanguageCode $language_code;
  public ?LanguageName $language_name;
  public ?VoiceName $name;
  public ?EngineList $supported_engines;

  public function __construct(shape(
    ?'additional_language_codes' => ?LanguageCodeList,
    ?'gender' => ?Gender,
    ?'id' => ?VoiceId,
    ?'language_code' => ?LanguageCode,
    ?'language_name' => ?LanguageName,
    ?'name' => ?VoiceName,
    ?'supported_engines' => ?EngineList,
  ) $s = shape()) {
    $this->additional_language_codes = $s['additional_language_codes'] ?? vec[];
    $this->gender = $s['gender'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->language_code = $s['language_code'] ?? '';
    $this->language_name = $s['language_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->supported_engines = $s['supported_engines'] ?? vec[];
  }
}

type VoiceId = string;

type VoiceList = vec<Voice>;

type VoiceName = string;


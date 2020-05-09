<?hh // strict
namespace slack\aws\polly;

interface Polly {
  public function DeleteLexicon(DeleteLexiconInput) Awaitable<Errors\Result<DeleteLexiconOutput>>;
  public function DescribeVoices(DescribeVoicesInput) Awaitable<Errors\Result<DescribeVoicesOutput>>;
  public function GetLexicon(GetLexiconInput) Awaitable<Errors\Result<GetLexiconOutput>>;
  public function GetSpeechSynthesisTask(GetSpeechSynthesisTaskInput) Awaitable<Errors\Result<GetSpeechSynthesisTaskOutput>>;
  public function ListLexicons(ListLexiconsInput) Awaitable<Errors\Result<ListLexiconsOutput>>;
  public function ListSpeechSynthesisTasks(ListSpeechSynthesisTasksInput) Awaitable<Errors\Result<ListSpeechSynthesisTasksOutput>>;
  public function PutLexicon(PutLexiconInput) Awaitable<Errors\Result<PutLexiconOutput>>;
  public function StartSpeechSynthesisTask(StartSpeechSynthesisTaskInput) Awaitable<Errors\Result<StartSpeechSynthesisTaskOutput>>;
  public function SynthesizeSpeech(SynthesizeSpeechInput) Awaitable<Errors\Result<SynthesizeSpeechOutput>>;
}

class Alphabet {
}

class AudioStream {
}

class ContentType {
}

class DateTime {
}

class DeleteLexiconInput {
  public LexiconName $name;
}

class DeleteLexiconOutput {
}

class DescribeVoicesInput {
  public Engine $engine;
  public IncludeAdditionalLanguageCodes $include_additional_language_codes;
  public LanguageCode $language_code;
  public NextToken $next_token;
}

class DescribeVoicesOutput {
  public NextToken $next_token;
  public VoiceList $voices;
}

class Engine {
}

class EngineList {
}

class EngineNotSupportedException {
  public ErrorMessage $message;
}

class ErrorMessage {
}

class Gender {
}

class GetLexiconInput {
  public LexiconName $name;
}

class GetLexiconOutput {
  public Lexicon $lexicon;
  public LexiconAttributes $lexicon_attributes;
}

class GetSpeechSynthesisTaskInput {
  public TaskId $task_id;
}

class GetSpeechSynthesisTaskOutput {
  public SynthesisTask $synthesis_task;
}

class IncludeAdditionalLanguageCodes {
}

class InvalidLexiconException {
  public ErrorMessage $message;
}

class InvalidNextTokenException {
  public ErrorMessage $message;
}

class InvalidS3BucketException {
  public ErrorMessage $message;
}

class InvalidS3KeyException {
  public ErrorMessage $message;
}

class InvalidSampleRateException {
  public ErrorMessage $message;
}

class InvalidSnsTopicArnException {
  public ErrorMessage $message;
}

class InvalidSsmlException {
  public ErrorMessage $message;
}

class InvalidTaskIdException {
  public ErrorMessage $message;
}

class LanguageCode {
}

class LanguageCodeList {
}

class LanguageName {
}

class LanguageNotSupportedException {
  public ErrorMessage $message;
}

class LastModified {
}

class LexemesCount {
}

class Lexicon {
  public LexiconContent $content;
  public LexiconName $name;
}

class LexiconArn {
}

class LexiconAttributes {
  public Alphabet $alphabet;
  public LanguageCode $language_code;
  public LastModified $last_modified;
  public LexemesCount $lexemes_count;
  public LexiconArn $lexicon_arn;
  public Size $size;
}

class LexiconContent {
}

class LexiconDescription {
  public LexiconAttributes $attributes;
  public LexiconName $name;
}

class LexiconDescriptionList {
}

class LexiconName {
}

class LexiconNameList {
}

class LexiconNotFoundException {
  public ErrorMessage $message;
}

class LexiconSizeExceededException {
  public ErrorMessage $message;
}

class ListLexiconsInput {
  public NextToken $next_token;
}

class ListLexiconsOutput {
  public LexiconDescriptionList $lexicons;
  public NextToken $next_token;
}

class ListSpeechSynthesisTasksInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public TaskStatus $status;
}

class ListSpeechSynthesisTasksOutput {
  public NextToken $next_token;
  public SynthesisTasks $synthesis_tasks;
}

class MarksNotSupportedForFormatException {
  public ErrorMessage $message;
}

class MaxLexemeLengthExceededException {
  public ErrorMessage $message;
}

class MaxLexiconsNumberExceededException {
  public ErrorMessage $message;
}

class MaxResults {
}

class NextToken {
}

class OutputFormat {
}

class OutputS3BucketName {
}

class OutputS3KeyPrefix {
}

class OutputUri {
}

class PutLexiconInput {
  public LexiconContent $content;
  public LexiconName $name;
}

class PutLexiconOutput {
}

class RequestCharacters {
}

class SampleRate {
}

class ServiceFailureException {
  public ErrorMessage $message;
}

class Size {
}

class SnsTopicArn {
}

class SpeechMarkType {
}

class SpeechMarkTypeList {
}

class SsmlMarksNotSupportedForTextTypeException {
  public ErrorMessage $message;
}

class StartSpeechSynthesisTaskInput {
  public Engine $engine;
  public LanguageCode $language_code;
  public LexiconNameList $lexicon_names;
  public OutputFormat $output_format;
  public OutputS3BucketName $output_s_3_bucket_name;
  public OutputS3KeyPrefix $output_s_3_key_prefix;
  public SampleRate $sample_rate;
  public SnsTopicArn $sns_topic_arn;
  public SpeechMarkTypeList $speech_mark_types;
  public Text $text;
  public TextType $text_type;
  public VoiceId $voice_id;
}

class StartSpeechSynthesisTaskOutput {
  public SynthesisTask $synthesis_task;
}

class SynthesisTask {
  public DateTime $creation_time;
  public Engine $engine;
  public LanguageCode $language_code;
  public LexiconNameList $lexicon_names;
  public OutputFormat $output_format;
  public OutputUri $output_uri;
  public RequestCharacters $request_characters;
  public SampleRate $sample_rate;
  public SnsTopicArn $sns_topic_arn;
  public SpeechMarkTypeList $speech_mark_types;
  public TaskId $task_id;
  public TaskStatus $task_status;
  public TaskStatusReason $task_status_reason;
  public TextType $text_type;
  public VoiceId $voice_id;
}

class SynthesisTaskNotFoundException {
  public ErrorMessage $message;
}

class SynthesisTasks {
}

class SynthesizeSpeechInput {
  public Engine $engine;
  public LanguageCode $language_code;
  public LexiconNameList $lexicon_names;
  public OutputFormat $output_format;
  public SampleRate $sample_rate;
  public SpeechMarkTypeList $speech_mark_types;
  public Text $text;
  public TextType $text_type;
  public VoiceId $voice_id;
}

class SynthesizeSpeechOutput {
  public AudioStream $audio_stream;
  public ContentType $content_type;
  public RequestCharacters $request_characters;
}

class TaskId {
}

class TaskStatus {
}

class TaskStatusReason {
}

class Text {
}

class TextLengthExceededException {
  public ErrorMessage $message;
}

class TextType {
}

class UnsupportedPlsAlphabetException {
  public ErrorMessage $message;
}

class UnsupportedPlsLanguageException {
  public ErrorMessage $message;
}

class Voice {
  public LanguageCodeList $additional_language_codes;
  public Gender $gender;
  public VoiceId $id;
  public LanguageCode $language_code;
  public LanguageName $language_name;
  public VoiceName $name;
  public EngineList $supported_engines;
}

class VoiceId {
}

class VoiceList {
}

class VoiceName {
}


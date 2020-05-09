<?hh // strict
namespace slack\aws\transcribestreaming;

interface Transcribe Streaming {
  public function StartStreamTranscription(StartStreamTranscriptionRequest): Awaitable<Errors\Result<StartStreamTranscriptionResponse>>;
}

class Alternative {
  public ItemList $items;
  public string $transcript;
}

class AlternativeList {
}

class AudioChunk {
}

class AudioEvent {
  public AudioChunk $audio_chunk;
}

class AudioStream {
  public AudioEvent $audio_event;
}

class BadRequestException {
  public string $message;
}

class Boolean {
}

class ConflictException {
  public string $message;
}

class Double {
}

class InternalFailureException {
  public string $message;
}

class Item {
  public string $content;
  public Double $end_time;
  public Double $start_time;
  public ItemType $type;
}

class ItemList {
}

class ItemType {
}

class LanguageCode {
}

class LimitExceededException {
  public string $message;
}

class MediaEncoding {
}

class MediaSampleRateHertz {
}

class RequestId {
}

class Result {
  public AlternativeList $alternatives;
  public Double $end_time;
  public boolean $is_partial;
  public string $result_id;
  public Double $start_time;
}

class ResultList {
}

class ServiceUnavailableException {
  public string $message;
}

class SessionId {
}

class StartStreamTranscriptionRequest {
  public AudioStream $audio_stream;
  public LanguageCode $language_code;
  public MediaEncoding $media_encoding;
  public MediaSampleRateHertz $media_sample_rate_hertz;
  public SessionId $session_id;
  public VocabularyName $vocabulary_name;
}

class StartStreamTranscriptionResponse {
  public LanguageCode $language_code;
  public MediaEncoding $media_encoding;
  public MediaSampleRateHertz $media_sample_rate_hertz;
  public RequestId $request_id;
  public SessionId $session_id;
  public TranscriptResultStream $transcript_result_stream;
  public VocabularyName $vocabulary_name;
}

class String {
}

class Transcript {
  public ResultList $results;
}

class TranscriptEvent {
  public Transcript $transcript;
}

class TranscriptResultStream {
  public BadRequestException $bad_request_exception;
  public ConflictException $conflict_exception;
  public InternalFailureException $internal_failure_exception;
  public LimitExceededException $limit_exceeded_exception;
  public ServiceUnavailableException $service_unavailable_exception;
  public TranscriptEvent $transcript_event;
}

class VocabularyName {
}


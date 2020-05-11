<?hh // strict
namespace slack\aws\transcribestreaming;

interface Transcribe Streaming {
  public function StartStreamTranscription(StartStreamTranscriptionRequest): Awaitable<Errors\Result<StartStreamTranscriptionResponse>>;
}

class Alternative {
  public ItemList $items;
  public string $transcript;

  public function __construct(shape(
  ?'items' => ItemList,
  ?'transcript' => string,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->transcript = $transcript ?? null;
  }
}

type AlternativeList = vec<Alternative>;

type AudioChunk = string;

class AudioEvent {
  public AudioChunk $audio_chunk;

  public function __construct(shape(
  ?'audio_chunk' => AudioChunk,
  ) $s = shape()) {
    $this->audio_chunk = $audio_chunk ?? "";
  }
}

class AudioStream {
  public AudioEvent $audio_event;

  public function __construct(shape(
  ?'audio_event' => AudioEvent,
  ) $s = shape()) {
    $this->audio_event = $audio_event ?? null;
  }
}

class BadRequestException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
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

type Double = float;

class InternalFailureException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class Item {
  public string $content;
  public Double $end_time;
  public Double $start_time;
  public ItemType $type;

  public function __construct(shape(
  ?'content' => string,
  ?'end_time' => Double,
  ?'start_time' => Double,
  ?'type' => ItemType,
  ) $s = shape()) {
    $this->content = $content ?? ;
    $this->end_time = $end_time ?? ;
    $this->start_time = $start_time ?? ;
    $this->type = $type ?? ;
  }
}

type ItemList = vec<Item>;

type ItemType = string;

type LanguageCode = string;

class LimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type MediaEncoding = string;

type MediaSampleRateHertz = int;

type RequestId = string;

class Result {
  public AlternativeList $alternatives;
  public Double $end_time;
  public boolean $is_partial;
  public string $result_id;
  public Double $start_time;

  public function __construct(shape(
  ?'alternatives' => AlternativeList,
  ?'end_time' => Double,
  ?'is_partial' => boolean,
  ?'result_id' => string,
  ?'start_time' => Double,
  ) $s = shape()) {
    $this->alternatives = $alternatives ?? ;
    $this->end_time = $end_time ?? ;
    $this->is_partial = $is_partial ?? ;
    $this->result_id = $result_id ?? ;
    $this->start_time = $start_time ?? ;
  }
}

type ResultList = vec<Result>;

class ServiceUnavailableException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type SessionId = string;

class StartStreamTranscriptionRequest {
  public AudioStream $audio_stream;
  public LanguageCode $language_code;
  public MediaEncoding $media_encoding;
  public MediaSampleRateHertz $media_sample_rate_hertz;
  public SessionId $session_id;
  public VocabularyName $vocabulary_name;

  public function __construct(shape(
  ?'audio_stream' => AudioStream,
  ?'language_code' => LanguageCode,
  ?'media_encoding' => MediaEncoding,
  ?'media_sample_rate_hertz' => MediaSampleRateHertz,
  ?'session_id' => SessionId,
  ?'vocabulary_name' => VocabularyName,
  ) $s = shape()) {
    $this->audio_stream = $audio_stream ?? null;
    $this->language_code = $language_code ?? "";
    $this->media_encoding = $media_encoding ?? "";
    $this->media_sample_rate_hertz = $media_sample_rate_hertz ?? 0;
    $this->session_id = $session_id ?? "";
    $this->vocabulary_name = $vocabulary_name ?? "";
  }
}

class StartStreamTranscriptionResponse {
  public LanguageCode $language_code;
  public MediaEncoding $media_encoding;
  public MediaSampleRateHertz $media_sample_rate_hertz;
  public RequestId $request_id;
  public SessionId $session_id;
  public TranscriptResultStream $transcript_result_stream;
  public VocabularyName $vocabulary_name;

  public function __construct(shape(
  ?'language_code' => LanguageCode,
  ?'media_encoding' => MediaEncoding,
  ?'media_sample_rate_hertz' => MediaSampleRateHertz,
  ?'request_id' => RequestId,
  ?'session_id' => SessionId,
  ?'transcript_result_stream' => TranscriptResultStream,
  ?'vocabulary_name' => VocabularyName,
  ) $s = shape()) {
    $this->language_code = $language_code ?? "";
    $this->media_encoding = $media_encoding ?? "";
    $this->media_sample_rate_hertz = $media_sample_rate_hertz ?? 0;
    $this->request_id = $request_id ?? "";
    $this->session_id = $session_id ?? "";
    $this->transcript_result_stream = $transcript_result_stream ?? null;
    $this->vocabulary_name = $vocabulary_name ?? "";
  }
}

type String = string;

class Transcript {
  public ResultList $results;

  public function __construct(shape(
  ?'results' => ResultList,
  ) $s = shape()) {
    $this->results = $results ?? ;
  }
}

class TranscriptEvent {
  public Transcript $transcript;

  public function __construct(shape(
  ?'transcript' => Transcript,
  ) $s = shape()) {
    $this->transcript = $transcript ?? null;
  }
}

class TranscriptResultStream {
  public BadRequestException $bad_request_exception;
  public ConflictException $conflict_exception;
  public InternalFailureException $internal_failure_exception;
  public LimitExceededException $limit_exceeded_exception;
  public ServiceUnavailableException $service_unavailable_exception;
  public TranscriptEvent $transcript_event;

  public function __construct(shape(
  ?'bad_request_exception' => BadRequestException,
  ?'conflict_exception' => ConflictException,
  ?'internal_failure_exception' => InternalFailureException,
  ?'limit_exceeded_exception' => LimitExceededException,
  ?'service_unavailable_exception' => ServiceUnavailableException,
  ?'transcript_event' => TranscriptEvent,
  ) $s = shape()) {
    $this->bad_request_exception = $bad_request_exception ?? null;
    $this->conflict_exception = $conflict_exception ?? null;
    $this->internal_failure_exception = $internal_failure_exception ?? null;
    $this->limit_exceeded_exception = $limit_exceeded_exception ?? null;
    $this->service_unavailable_exception = $service_unavailable_exception ?? null;
    $this->transcript_event = $transcript_event ?? null;
  }
}

type VocabularyName = string;


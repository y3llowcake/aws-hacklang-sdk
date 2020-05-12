<?hh // strict
namespace slack\aws\mobileanalytics;

interface  {
  public function PutEvents(PutEventsInput $in): Awaitable<\Errors\Error>;
}

class BadRequestException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Double = float;

class Event {
  public ?MapOfStringToString $attributes;
  public ?String50Chars $event_type;
  public ?MapOfStringToNumber $metrics;
  public ?Session $session;
  public ?ISO8601Timestamp $timestamp;
  public ?String10Chars $version;

  public function __construct(shape(
    ?'attributes' => ?MapOfStringToString,
    ?'event_type' => ?String50Chars,
    ?'metrics' => ?MapOfStringToNumber,
    ?'session' => ?Session,
    ?'timestamp' => ?ISO8601Timestamp,
    ?'version' => ?String10Chars,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->event_type = $s['event_type'] ?? '';
    $this->metrics = $s['metrics'] ?? dict[];
    $this->session = $s['session'] ?? null;
    $this->timestamp = $s['timestamp'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type EventListDefinition = vec<Event>;

type ISO8601Timestamp = string;

type Long = int;

type MapOfStringToNumber = dict<String50Chars, Double>;

type MapOfStringToString = dict<String50Chars, String0to1000Chars>;

class PutEventsInput {
  public string $client_context;
  public string $client_context_encoding;
  public ?EventListDefinition $events;

  public function __construct(shape(
    ?'client_context' => string,
    ?'client_context_encoding' => string,
    ?'events' => ?EventListDefinition,
  ) $s = shape()) {
    $this->client_context = $s['client_context'] ?? '';
    $this->client_context_encoding = $s['client_context_encoding'] ?? '';
    $this->events = $s['events'] ?? vec[];
  }
}

class Session {
  public ?Long $duration;
  public ?String50Chars $id;
  public ?ISO8601Timestamp $start_timestamp;
  public ?ISO8601Timestamp $stop_timestamp;

  public function __construct(shape(
    ?'duration' => ?Long,
    ?'id' => ?String50Chars,
    ?'start_timestamp' => ?ISO8601Timestamp,
    ?'stop_timestamp' => ?ISO8601Timestamp,
  ) $s = shape()) {
    $this->duration = $s['duration'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->start_timestamp = $s['start_timestamp'] ?? '';
    $this->stop_timestamp = $s['stop_timestamp'] ?? '';
  }
}

type String = string;

type String0to1000Chars = string;

type String10Chars = string;

type String50Chars = string;


<?hh // strict
namespace slack\aws\mobileanalytics;

interface  {
  public function PutEvents(PutEventsInput) Awaitable<Errors\Error>;
}

class BadRequestException {
  public string $message;
}

class Double {
}

class Event {
  public MapOfStringToString $attributes;
  public String50Chars $event_type;
  public MapOfStringToNumber $metrics;
  public Session $session;
  public ISO8601Timestamp $timestamp;
  public String10Chars $version;
}

class EventListDefinition {
}

class ISO8601Timestamp {
}

class Long {
}

class MapOfStringToNumber {
}

class MapOfStringToString {
}

class PutEventsInput {
  public string $client_context;
  public string $client_context_encoding;
  public EventListDefinition $events;
}

class Session {
  public Long $duration;
  public String50Chars $id;
  public ISO8601Timestamp $start_timestamp;
  public ISO8601Timestamp $stop_timestamp;
}

class String {
}

class String0to1000Chars {
}

class String10Chars {
}

class String50Chars {
}


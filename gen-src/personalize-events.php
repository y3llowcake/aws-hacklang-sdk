<?hh // strict
namespace slack\aws\personalize-events;

interface PersonalizeEvents {
  public function PutEvents(PutEventsRequest $in): Awaitable<\Errors\Error>;
}

type Date = int;

type ErrorMessage = string;

class Event {
  public ?StringType $event_id;
  public ?StringType $event_type;
  public ?EventPropertiesJSON $properties;
  public ?Date $sent_at;

  public function __construct(shape(
    ?'event_id' => ?StringType,
    ?'event_type' => ?StringType,
    ?'properties' => ?EventPropertiesJSON,
    ?'sent_at' => ?Date,
  ) $s = shape()) {
    $this->event_id = $s['event_id'] ?? '';
    $this->event_type = $s['event_type'] ?? '';
    $this->properties = $s['properties'] ?? '';
    $this->sent_at = $s['sent_at'] ?? 0;
  }
}

type EventList = vec<Event>;

type EventPropertiesJSON = string;

class InvalidInputException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class PutEventsRequest {
  public ?EventList $event_list;
  public ?StringType $session_id;
  public ?StringType $tracking_id;
  public ?UserId $user_id;

  public function __construct(shape(
    ?'event_list' => ?EventList,
    ?'session_id' => ?StringType,
    ?'tracking_id' => ?StringType,
    ?'user_id' => ?UserId,
  ) $s = shape()) {
    $this->event_list = $s['event_list'] ?? vec[];
    $this->session_id = $s['session_id'] ?? '';
    $this->tracking_id = $s['tracking_id'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

type StringType = string;

type UserId = string;


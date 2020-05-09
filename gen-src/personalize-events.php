<?hh // strict
namespace slack\aws\personalize-events;

interface Personalize Events {
  public function PutEvents(PutEventsRequest): Awaitable<Errors\Error>;
}

class Date {
}

class ErrorMessage {
}

class Event {
  public StringType $event_id;
  public StringType $event_type;
  public EventPropertiesJSON $properties;
  public Date $sent_at;
}

class EventList {
}

class EventPropertiesJSON {
}

class InvalidInputException {
  public ErrorMessage $message;
}

class PutEventsRequest {
  public EventList $event_list;
  public StringType $session_id;
  public StringType $tracking_id;
  public UserId $user_id;
}

class StringType {
}

class UserId {
}


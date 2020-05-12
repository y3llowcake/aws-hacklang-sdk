<?hh // strict
namespace slack\aws\participant.connect;

interface ConnectParticipant {
  public function CreateParticipantConnection(CreateParticipantConnectionRequest $in): Awaitable<\Errors\Result<CreateParticipantConnectionResponse>>;
  public function DisconnectParticipant(DisconnectParticipantRequest $in): Awaitable<\Errors\Result<DisconnectParticipantResponse>>;
  public function GetTranscript(GetTranscriptRequest $in): Awaitable<\Errors\Result<GetTranscriptResponse>>;
  public function SendEvent(SendEventRequest $in): Awaitable<\Errors\Result<SendEventResponse>>;
  public function SendMessage(SendMessageRequest $in): Awaitable<\Errors\Result<SendMessageResponse>>;
}

class AccessDeniedException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ChatContent = string;

type ChatContentType = string;

type ChatItemId = string;

type ChatItemType = string;

type ClientToken = string;

class ConnectionCredentials {
  public ?ParticipantToken $connection_token;
  public ?ISO8601Datetime $expiry;

  public function __construct(shape(
    ?'connection_token' => ?ParticipantToken,
    ?'expiry' => ?ISO8601Datetime,
  ) $s = shape()) {
    $this->connection_token = $s['connection_token'] ?? '';
    $this->expiry = $s['expiry'] ?? '';
  }
}

type ConnectionType = string;

type ConnectionTypeList = vec<ConnectionType>;

type ContactId = string;

class CreateParticipantConnectionRequest {
  public ?ParticipantToken $participant_token;
  public ?ConnectionTypeList $type;

  public function __construct(shape(
    ?'participant_token' => ?ParticipantToken,
    ?'type' => ?ConnectionTypeList,
  ) $s = shape()) {
    $this->participant_token = $s['participant_token'] ?? '';
    $this->type = $s['type'] ?? vec[];
  }
}

class CreateParticipantConnectionResponse {
  public ?ConnectionCredentials $connection_credentials;
  public ?Websocket $websocket;

  public function __construct(shape(
    ?'connection_credentials' => ?ConnectionCredentials,
    ?'websocket' => ?Websocket,
  ) $s = shape()) {
    $this->connection_credentials = $s['connection_credentials'] ?? null;
    $this->websocket = $s['websocket'] ?? null;
  }
}

class DisconnectParticipantRequest {
  public ?ClientToken $client_token;
  public ?ParticipantToken $connection_token;

  public function __construct(shape(
    ?'client_token' => ?ClientToken,
    ?'connection_token' => ?ParticipantToken,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->connection_token = $s['connection_token'] ?? '';
  }
}

class DisconnectParticipantResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DisplayName = string;

class GetTranscriptRequest {
  public ?ParticipantToken $connection_token;
  public ?ContactId $contact_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ScanDirection $scan_direction;
  public ?SortKey $sort_order;
  public ?StartPosition $start_position;

  public function __construct(shape(
    ?'connection_token' => ?ParticipantToken,
    ?'contact_id' => ?ContactId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'scan_direction' => ?ScanDirection,
    ?'sort_order' => ?SortKey,
    ?'start_position' => ?StartPosition,
  ) $s = shape()) {
    $this->connection_token = $s['connection_token'] ?? '';
    $this->contact_id = $s['contact_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->scan_direction = $s['scan_direction'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
    $this->start_position = $s['start_position'] ?? null;
  }
}

class GetTranscriptResponse {
  public ?ContactId $initial_contact_id;
  public ?NextToken $next_token;
  public ?Transcript $transcript;

  public function __construct(shape(
    ?'initial_contact_id' => ?ContactId,
    ?'next_token' => ?NextToken,
    ?'transcript' => ?Transcript,
  ) $s = shape()) {
    $this->initial_contact_id = $s['initial_contact_id'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->transcript = $s['transcript'] ?? vec[];
  }
}

type ISO8601Datetime = string;

type Instant = string;

class InternalServerException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Item {
  public ?Instant $absolute_time;
  public ?ChatContent $content;
  public ?ChatContentType $content_type;
  public ?DisplayName $display_name;
  public ?ChatItemId $id;
  public ?ParticipantId $participant_id;
  public ?ParticipantRole $participant_role;
  public ?ChatItemType $type;

  public function __construct(shape(
    ?'absolute_time' => ?Instant,
    ?'content' => ?ChatContent,
    ?'content_type' => ?ChatContentType,
    ?'display_name' => ?DisplayName,
    ?'id' => ?ChatItemId,
    ?'participant_id' => ?ParticipantId,
    ?'participant_role' => ?ParticipantRole,
    ?'type' => ?ChatItemType,
  ) $s = shape()) {
    $this->absolute_time = $s['absolute_time'] ?? '';
    $this->content = $s['content'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
    $this->display_name = $s['display_name'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->participant_id = $s['participant_id'] ?? '';
    $this->participant_role = $s['participant_role'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type MaxResults = int;

type Message = string;

type MostRecent = int;

type NextToken = string;

type ParticipantId = string;

type ParticipantRole = string;

type ParticipantToken = string;

type PreSignedConnectionUrl = string;

type Reason = string;

type ScanDirection = string;

class SendEventRequest {
  public ?ClientToken $client_token;
  public ?ParticipantToken $connection_token;
  public ?ChatContent $content;
  public ?ChatContentType $content_type;

  public function __construct(shape(
    ?'client_token' => ?ClientToken,
    ?'connection_token' => ?ParticipantToken,
    ?'content' => ?ChatContent,
    ?'content_type' => ?ChatContentType,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->connection_token = $s['connection_token'] ?? '';
    $this->content = $s['content'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
  }
}

class SendEventResponse {
  public ?Instant $absolute_time;
  public ?ChatItemId $id;

  public function __construct(shape(
    ?'absolute_time' => ?Instant,
    ?'id' => ?ChatItemId,
  ) $s = shape()) {
    $this->absolute_time = $s['absolute_time'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class SendMessageRequest {
  public ?ClientToken $client_token;
  public ?ParticipantToken $connection_token;
  public ?ChatContent $content;
  public ?ChatContentType $content_type;

  public function __construct(shape(
    ?'client_token' => ?ClientToken,
    ?'connection_token' => ?ParticipantToken,
    ?'content' => ?ChatContent,
    ?'content_type' => ?ChatContentType,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->connection_token = $s['connection_token'] ?? '';
    $this->content = $s['content'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
  }
}

class SendMessageResponse {
  public ?Instant $absolute_time;
  public ?ChatItemId $id;

  public function __construct(shape(
    ?'absolute_time' => ?Instant,
    ?'id' => ?ChatItemId,
  ) $s = shape()) {
    $this->absolute_time = $s['absolute_time'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

type SortKey = string;

class StartPosition {
  public ?Instant $absolute_time;
  public ?ChatItemId $id;
  public ?MostRecent $most_recent;

  public function __construct(shape(
    ?'absolute_time' => ?Instant,
    ?'id' => ?ChatItemId,
    ?'most_recent' => ?MostRecent,
  ) $s = shape()) {
    $this->absolute_time = $s['absolute_time'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->most_recent = $s['most_recent'] ?? 0;
  }
}

class ThrottlingException {
  public ?Message $message;

  public function __construct(shape(
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Transcript = vec<Item>;

class ValidationException {
  public ?Reason $message;

  public function __construct(shape(
    ?'message' => ?Reason,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Websocket {
  public ?ISO8601Datetime $connection_expiry;
  public ?PreSignedConnectionUrl $url;

  public function __construct(shape(
    ?'connection_expiry' => ?ISO8601Datetime,
    ?'url' => ?PreSignedConnectionUrl,
  ) $s = shape()) {
    $this->connection_expiry = $s['connection_expiry'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}


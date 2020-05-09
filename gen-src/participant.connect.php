<?hh // strict
namespace slack\aws\participant.connect;

interface ConnectParticipant {
  public function CreateParticipantConnection(CreateParticipantConnectionRequest) Awaitable<Errors\Result<CreateParticipantConnectionResponse>>;
  public function DisconnectParticipant(DisconnectParticipantRequest) Awaitable<Errors\Result<DisconnectParticipantResponse>>;
  public function GetTranscript(GetTranscriptRequest) Awaitable<Errors\Result<GetTranscriptResponse>>;
  public function SendEvent(SendEventRequest) Awaitable<Errors\Result<SendEventResponse>>;
  public function SendMessage(SendMessageRequest) Awaitable<Errors\Result<SendMessageResponse>>;
}

class AccessDeniedException {
  public Message $message;
}

class ChatContent {
}

class ChatContentType {
}

class ChatItemId {
}

class ChatItemType {
}

class ClientToken {
}

class ConnectionCredentials {
  public ParticipantToken $connection_token;
  public ISO8601Datetime $expiry;
}

class ConnectionType {
}

class ConnectionTypeList {
}

class ContactId {
}

class CreateParticipantConnectionRequest {
  public ParticipantToken $participant_token;
  public ConnectionTypeList $type;
}

class CreateParticipantConnectionResponse {
  public ConnectionCredentials $connection_credentials;
  public Websocket $websocket;
}

class DisconnectParticipantRequest {
  public ClientToken $client_token;
  public ParticipantToken $connection_token;
}

class DisconnectParticipantResponse {
}

class DisplayName {
}

class GetTranscriptRequest {
  public ParticipantToken $connection_token;
  public ContactId $contact_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ScanDirection $scan_direction;
  public SortKey $sort_order;
  public StartPosition $start_position;
}

class GetTranscriptResponse {
  public ContactId $initial_contact_id;
  public NextToken $next_token;
  public Transcript $transcript;
}

class ISO8601Datetime {
}

class Instant {
}

class InternalServerException {
  public Message $message;
}

class Item {
  public Instant $absolute_time;
  public ChatContent $content;
  public ChatContentType $content_type;
  public DisplayName $display_name;
  public ChatItemId $id;
  public ParticipantId $participant_id;
  public ParticipantRole $participant_role;
  public ChatItemType $type;
}

class MaxResults {
}

class Message {
}

class MostRecent {
}

class NextToken {
}

class ParticipantId {
}

class ParticipantRole {
}

class ParticipantToken {
}

class PreSignedConnectionUrl {
}

class Reason {
}

class ScanDirection {
}

class SendEventRequest {
  public ClientToken $client_token;
  public ParticipantToken $connection_token;
  public ChatContent $content;
  public ChatContentType $content_type;
}

class SendEventResponse {
  public Instant $absolute_time;
  public ChatItemId $id;
}

class SendMessageRequest {
  public ClientToken $client_token;
  public ParticipantToken $connection_token;
  public ChatContent $content;
  public ChatContentType $content_type;
}

class SendMessageResponse {
  public Instant $absolute_time;
  public ChatItemId $id;
}

class SortKey {
}

class StartPosition {
  public Instant $absolute_time;
  public ChatItemId $id;
  public MostRecent $most_recent;
}

class ThrottlingException {
  public Message $message;
}

class Transcript {
}

class ValidationException {
  public Reason $message;
}

class Websocket {
  public ISO8601Datetime $connection_expiry;
  public PreSignedConnectionUrl $url;
}


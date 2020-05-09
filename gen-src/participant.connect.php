<?hh // strict
namespace slack\aws\participant.connect;

interface ConnectParticipant {
  public function GetTranscript(GetTranscriptRequest) Awaitable<Errors\Result<GetTranscriptResponse>>;
  public function SendEvent(SendEventRequest) Awaitable<Errors\Result<SendEventResponse>>;
  public function SendMessage(SendMessageRequest) Awaitable<Errors\Result<SendMessageResponse>>;
  public function CreateParticipantConnection(CreateParticipantConnectionRequest) Awaitable<Errors\Result<CreateParticipantConnectionResponse>>;
  public function DisconnectParticipant(DisconnectParticipantRequest) Awaitable<Errors\Result<DisconnectParticipantResponse>>;
}

class NextToken {
}

class ThrottlingException {
  public Message $message;
}

class ValidationException {
  public Reason $message;
}

class ConnectionCredentials {
  public ParticipantToken $connection_token;
  public ISO8601Datetime $expiry;
}

class ContactId {
}

class CreateParticipantConnectionRequest {
  public ConnectionTypeList $type;
  public ParticipantToken $participant_token;
}

class DisplayName {
}

class InternalServerException {
  public Message $message;
}

class Item {
  public ChatItemType $type;
  public ParticipantId $participant_id;
  public DisplayName $display_name;
  public ParticipantRole $participant_role;
  public Instant $absolute_time;
  public ChatContent $content;
  public ChatContentType $content_type;
  public ChatItemId $id;
}

class ParticipantToken {
}

class SendEventResponse {
  public ChatItemId $id;
  public Instant $absolute_time;
}

class SendMessageRequest {
  public ClientToken $client_token;
  public ParticipantToken $connection_token;
  public ChatContentType $content_type;
  public ChatContent $content;
}

class CreateParticipantConnectionResponse {
  public Websocket $websocket;
  public ConnectionCredentials $connection_credentials;
}

class GetTranscriptResponse {
  public ContactId $initial_contact_id;
  public Transcript $transcript;
  public NextToken $next_token;
}

class MaxResults {
}

class Reason {
}

class ChatContentType {
}

class SortKey {
}

class Transcript {
}

class MostRecent {
}

class ParticipantId {
}

class ParticipantRole {
}

class ChatItemId {
}

class ChatItemType {
}

class ClientToken {
}

class ConnectionType {
}

class DisconnectParticipantRequest {
  public ParticipantToken $connection_token;
  public ClientToken $client_token;
}

class PreSignedConnectionUrl {
}

class ISO8601Datetime {
}

class SendEventRequest {
  public ParticipantToken $connection_token;
  public ChatContentType $content_type;
  public ChatContent $content;
  public ClientToken $client_token;
}

class ScanDirection {
}

class SendMessageResponse {
  public ChatItemId $id;
  public Instant $absolute_time;
}

class AccessDeniedException {
  public Message $message;
}

class ChatContent {
}

class GetTranscriptRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ScanDirection $scan_direction;
  public SortKey $sort_order;
  public StartPosition $start_position;
  public ParticipantToken $connection_token;
  public ContactId $contact_id;
}

class Instant {
}

class Message {
}

class ConnectionTypeList {
}

class DisconnectParticipantResponse {
}

class StartPosition {
  public ChatItemId $id;
  public Instant $absolute_time;
  public MostRecent $most_recent;
}

class Websocket {
  public PreSignedConnectionUrl $url;
  public ISO8601Datetime $connection_expiry;
}


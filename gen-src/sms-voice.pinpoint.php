<?hh // strict
namespace slack\aws\sms-voice.pinpoint;

interface Pinpoint SMS Voice {
  public function CreateConfigurationSet(CreateConfigurationSetRequest): Awaitable<Errors\Result<CreateConfigurationSetResponse>>;
  public function CreateConfigurationSetEventDestination(CreateConfigurationSetEventDestinationRequest): Awaitable<Errors\Result<CreateConfigurationSetEventDestinationResponse>>;
  public function DeleteConfigurationSet(DeleteConfigurationSetRequest): Awaitable<Errors\Result<DeleteConfigurationSetResponse>>;
  public function DeleteConfigurationSetEventDestination(DeleteConfigurationSetEventDestinationRequest): Awaitable<Errors\Result<DeleteConfigurationSetEventDestinationResponse>>;
  public function GetConfigurationSetEventDestinations(GetConfigurationSetEventDestinationsRequest): Awaitable<Errors\Result<GetConfigurationSetEventDestinationsResponse>>;
  public function ListConfigurationSets(ListConfigurationSetsRequest): Awaitable<Errors\Result<ListConfigurationSetsResponse>>;
  public function SendVoiceMessage(SendVoiceMessageRequest): Awaitable<Errors\Result<SendVoiceMessageResponse>>;
  public function UpdateConfigurationSetEventDestination(UpdateConfigurationSetEventDestinationRequest): Awaitable<Errors\Result<UpdateConfigurationSetEventDestinationResponse>>;
}

class AlreadyExistsException {
  public string $message;
}

class BadRequestException {
  public string $message;
}

class Boolean {
}

class CallInstructionsMessageType {
  public NonEmptyString $text;
}

class CloudWatchLogsDestination {
  public string $iam_role_arn;
  public string $log_group_arn;
}

class ConfigurationSets {
}

class CreateConfigurationSetEventDestinationRequest {
  public __string $configuration_set_name;
  public EventDestinationDefinition $event_destination;
  public NonEmptyString $event_destination_name;
}

class CreateConfigurationSetEventDestinationResponse {
}

class CreateConfigurationSetRequest {
  public WordCharactersWithDelimiters $configuration_set_name;
}

class CreateConfigurationSetResponse {
}

class DeleteConfigurationSetEventDestinationRequest {
  public __string $configuration_set_name;
  public __string $event_destination_name;
}

class DeleteConfigurationSetEventDestinationResponse {
}

class DeleteConfigurationSetRequest {
  public __string $configuration_set_name;
}

class DeleteConfigurationSetResponse {
}

class EventDestination {
  public CloudWatchLogsDestination $cloud_watch_logs_destination;
  public boolean $enabled;
  public KinesisFirehoseDestination $kinesis_firehose_destination;
  public EventTypes $matching_event_types;
  public string $name;
  public SnsDestination $sns_destination;
}

class EventDestinationDefinition {
  public CloudWatchLogsDestination $cloud_watch_logs_destination;
  public boolean $enabled;
  public KinesisFirehoseDestination $kinesis_firehose_destination;
  public EventTypes $matching_event_types;
  public SnsDestination $sns_destination;
}

class EventDestinations {
}

class EventType {
}

class EventTypes {
}

class GetConfigurationSetEventDestinationsRequest {
  public __string $configuration_set_name;
}

class GetConfigurationSetEventDestinationsResponse {
  public EventDestinations $event_destinations;
}

class InternalServiceErrorException {
  public string $message;
}

class KinesisFirehoseDestination {
  public string $delivery_stream_arn;
  public string $iam_role_arn;
}

class LimitExceededException {
  public string $message;
}

class ListConfigurationSetsRequest {
  public __string $next_token;
  public __string $page_size;
}

class ListConfigurationSetsResponse {
  public ConfigurationSets $configuration_sets;
  public NextTokenString $next_token;
}

class NextTokenString {
}

class NonEmptyString {
}

class NotFoundException {
  public string $message;
}

class PlainTextMessageType {
  public string $language_code;
  public NonEmptyString $text;
  public string $voice_id;
}

class SSMLMessageType {
  public string $language_code;
  public NonEmptyString $text;
  public string $voice_id;
}

class SendVoiceMessageRequest {
  public string $caller_id;
  public WordCharactersWithDelimiters $configuration_set_name;
  public VoiceMessageContent $content;
  public NonEmptyString $destination_phone_number;
  public NonEmptyString $origination_phone_number;
}

class SendVoiceMessageResponse {
  public string $message_id;
}

class SnsDestination {
  public string $topic_arn;
}

class String {
}

class TooManyRequestsException {
  public string $message;
}

class UpdateConfigurationSetEventDestinationRequest {
  public __string $configuration_set_name;
  public EventDestinationDefinition $event_destination;
  public __string $event_destination_name;
}

class UpdateConfigurationSetEventDestinationResponse {
}

class VoiceMessageContent {
  public CallInstructionsMessageType $call_instructions_message;
  public PlainTextMessageType $plain_text_message;
  public SSMLMessageType $ssml_message;
}

class WordCharactersWithDelimiters {
}

class __boolean {
}

class __double {
}

class __integer {
}

class __long {
}

class __string {
}

class __timestampIso8601 {
}

class __timestampUnix {
}


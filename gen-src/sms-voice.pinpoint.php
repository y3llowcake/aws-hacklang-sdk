<?hh // strict
namespace slack\aws\sms-voice.pinpoint;

interface PinpointSMSVoice {
  public function CreateConfigurationSet(CreateConfigurationSetRequest $in): Awaitable<\Errors\Result<CreateConfigurationSetResponse>>;
  public function CreateConfigurationSetEventDestination(CreateConfigurationSetEventDestinationRequest $in): Awaitable<\Errors\Result<CreateConfigurationSetEventDestinationResponse>>;
  public function DeleteConfigurationSet(DeleteConfigurationSetRequest $in): Awaitable<\Errors\Result<DeleteConfigurationSetResponse>>;
  public function DeleteConfigurationSetEventDestination(DeleteConfigurationSetEventDestinationRequest $in): Awaitable<\Errors\Result<DeleteConfigurationSetEventDestinationResponse>>;
  public function GetConfigurationSetEventDestinations(GetConfigurationSetEventDestinationsRequest $in): Awaitable<\Errors\Result<GetConfigurationSetEventDestinationsResponse>>;
  public function ListConfigurationSets(ListConfigurationSetsRequest $in): Awaitable<\Errors\Result<ListConfigurationSetsResponse>>;
  public function SendVoiceMessage(SendVoiceMessageRequest $in): Awaitable<\Errors\Result<SendVoiceMessageResponse>>;
  public function UpdateConfigurationSetEventDestination(UpdateConfigurationSetEventDestinationRequest $in): Awaitable<\Errors\Result<UpdateConfigurationSetEventDestinationResponse>>;
}

class AlreadyExistsException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class BadRequestException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Boolean = bool;

class CallInstructionsMessageType {
  public ?NonEmptyString $text;

  public function __construct(shape(
    ?'text' => ?NonEmptyString,
  ) $s = shape()) {
    $this->text = $s['text'] ?? '';
  }
}

class CloudWatchLogsDestination {
  public string $iam_role_arn;
  public string $log_group_arn;

  public function __construct(shape(
    ?'iam_role_arn' => string,
    ?'log_group_arn' => string,
  ) $s = shape()) {
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->log_group_arn = $s['log_group_arn'] ?? '';
  }
}

type ConfigurationSets = vec<WordCharactersWithDelimiters>;

class CreateConfigurationSetEventDestinationRequest {
  public ?__string $configuration_set_name;
  public ?EventDestinationDefinition $event_destination;
  public ?NonEmptyString $event_destination_name;

  public function __construct(shape(
    ?'configuration_set_name' => ?__string,
    ?'event_destination' => ?EventDestinationDefinition,
    ?'event_destination_name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->configuration_set_name = $s['configuration_set_name'] ?? '';
    $this->event_destination = $s['event_destination'] ?? null;
    $this->event_destination_name = $s['event_destination_name'] ?? '';
  }
}

class CreateConfigurationSetEventDestinationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateConfigurationSetRequest {
  public ?WordCharactersWithDelimiters $configuration_set_name;

  public function __construct(shape(
    ?'configuration_set_name' => ?WordCharactersWithDelimiters,
  ) $s = shape()) {
    $this->configuration_set_name = $s['configuration_set_name'] ?? '';
  }
}

class CreateConfigurationSetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteConfigurationSetEventDestinationRequest {
  public ?__string $configuration_set_name;
  public ?__string $event_destination_name;

  public function __construct(shape(
    ?'configuration_set_name' => ?__string,
    ?'event_destination_name' => ?__string,
  ) $s = shape()) {
    $this->configuration_set_name = $s['configuration_set_name'] ?? '';
    $this->event_destination_name = $s['event_destination_name'] ?? '';
  }
}

class DeleteConfigurationSetEventDestinationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteConfigurationSetRequest {
  public ?__string $configuration_set_name;

  public function __construct(shape(
    ?'configuration_set_name' => ?__string,
  ) $s = shape()) {
    $this->configuration_set_name = $s['configuration_set_name'] ?? '';
  }
}

class DeleteConfigurationSetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EventDestination {
  public ?CloudWatchLogsDestination $cloud_watch_logs_destination;
  public bool $enabled;
  public ?KinesisFirehoseDestination $kinesis_firehose_destination;
  public ?EventTypes $matching_event_types;
  public string $name;
  public ?SnsDestination $sns_destination;

  public function __construct(shape(
    ?'cloud_watch_logs_destination' => ?CloudWatchLogsDestination,
    ?'enabled' => bool,
    ?'kinesis_firehose_destination' => ?KinesisFirehoseDestination,
    ?'matching_event_types' => ?EventTypes,
    ?'name' => string,
    ?'sns_destination' => ?SnsDestination,
  ) $s = shape()) {
    $this->cloud_watch_logs_destination = $s['cloud_watch_logs_destination'] ?? null;
    $this->enabled = $s['enabled'] ?? false;
    $this->kinesis_firehose_destination = $s['kinesis_firehose_destination'] ?? null;
    $this->matching_event_types = $s['matching_event_types'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->sns_destination = $s['sns_destination'] ?? null;
  }
}

class EventDestinationDefinition {
  public ?CloudWatchLogsDestination $cloud_watch_logs_destination;
  public bool $enabled;
  public ?KinesisFirehoseDestination $kinesis_firehose_destination;
  public ?EventTypes $matching_event_types;
  public ?SnsDestination $sns_destination;

  public function __construct(shape(
    ?'cloud_watch_logs_destination' => ?CloudWatchLogsDestination,
    ?'enabled' => bool,
    ?'kinesis_firehose_destination' => ?KinesisFirehoseDestination,
    ?'matching_event_types' => ?EventTypes,
    ?'sns_destination' => ?SnsDestination,
  ) $s = shape()) {
    $this->cloud_watch_logs_destination = $s['cloud_watch_logs_destination'] ?? null;
    $this->enabled = $s['enabled'] ?? false;
    $this->kinesis_firehose_destination = $s['kinesis_firehose_destination'] ?? null;
    $this->matching_event_types = $s['matching_event_types'] ?? vec[];
    $this->sns_destination = $s['sns_destination'] ?? null;
  }
}

type EventDestinations = vec<EventDestination>;

type EventType = string;

type EventTypes = vec<EventType>;

class GetConfigurationSetEventDestinationsRequest {
  public ?__string $configuration_set_name;

  public function __construct(shape(
    ?'configuration_set_name' => ?__string,
  ) $s = shape()) {
    $this->configuration_set_name = $s['configuration_set_name'] ?? '';
  }
}

class GetConfigurationSetEventDestinationsResponse {
  public ?EventDestinations $event_destinations;

  public function __construct(shape(
    ?'event_destinations' => ?EventDestinations,
  ) $s = shape()) {
    $this->event_destinations = $s['event_destinations'] ?? vec[];
  }
}

class InternalServiceErrorException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class KinesisFirehoseDestination {
  public string $delivery_stream_arn;
  public string $iam_role_arn;

  public function __construct(shape(
    ?'delivery_stream_arn' => string,
    ?'iam_role_arn' => string,
  ) $s = shape()) {
    $this->delivery_stream_arn = $s['delivery_stream_arn'] ?? '';
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
  }
}

class LimitExceededException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListConfigurationSetsRequest {
  public ?__string $next_token;
  public ?__string $page_size;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'page_size' => ?__string,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->page_size = $s['page_size'] ?? '';
  }
}

class ListConfigurationSetsResponse {
  public ?ConfigurationSets $configuration_sets;
  public ?NextTokenString $next_token;

  public function __construct(shape(
    ?'configuration_sets' => ?ConfigurationSets,
    ?'next_token' => ?NextTokenString,
  ) $s = shape()) {
    $this->configuration_sets = $s['configuration_sets'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type NextTokenString = string;

type NonEmptyString = string;

class NotFoundException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class PlainTextMessageType {
  public string $language_code;
  public ?NonEmptyString $text;
  public string $voice_id;

  public function __construct(shape(
    ?'language_code' => string,
    ?'text' => ?NonEmptyString,
    ?'voice_id' => string,
  ) $s = shape()) {
    $this->language_code = $s['language_code'] ?? '';
    $this->text = $s['text'] ?? '';
    $this->voice_id = $s['voice_id'] ?? '';
  }
}

class SSMLMessageType {
  public string $language_code;
  public ?NonEmptyString $text;
  public string $voice_id;

  public function __construct(shape(
    ?'language_code' => string,
    ?'text' => ?NonEmptyString,
    ?'voice_id' => string,
  ) $s = shape()) {
    $this->language_code = $s['language_code'] ?? '';
    $this->text = $s['text'] ?? '';
    $this->voice_id = $s['voice_id'] ?? '';
  }
}

class SendVoiceMessageRequest {
  public string $caller_id;
  public ?WordCharactersWithDelimiters $configuration_set_name;
  public ?VoiceMessageContent $content;
  public ?NonEmptyString $destination_phone_number;
  public ?NonEmptyString $origination_phone_number;

  public function __construct(shape(
    ?'caller_id' => string,
    ?'configuration_set_name' => ?WordCharactersWithDelimiters,
    ?'content' => ?VoiceMessageContent,
    ?'destination_phone_number' => ?NonEmptyString,
    ?'origination_phone_number' => ?NonEmptyString,
  ) $s = shape()) {
    $this->caller_id = $s['caller_id'] ?? '';
    $this->configuration_set_name = $s['configuration_set_name'] ?? '';
    $this->content = $s['content'] ?? null;
    $this->destination_phone_number = $s['destination_phone_number'] ?? '';
    $this->origination_phone_number = $s['origination_phone_number'] ?? '';
  }
}

class SendVoiceMessageResponse {
  public string $message_id;

  public function __construct(shape(
    ?'message_id' => string,
  ) $s = shape()) {
    $this->message_id = $s['message_id'] ?? '';
  }
}

class SnsDestination {
  public string $topic_arn;

  public function __construct(shape(
    ?'topic_arn' => string,
  ) $s = shape()) {
    $this->topic_arn = $s['topic_arn'] ?? '';
  }
}

type String = string;

class TooManyRequestsException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UpdateConfigurationSetEventDestinationRequest {
  public ?__string $configuration_set_name;
  public ?EventDestinationDefinition $event_destination;
  public ?__string $event_destination_name;

  public function __construct(shape(
    ?'configuration_set_name' => ?__string,
    ?'event_destination' => ?EventDestinationDefinition,
    ?'event_destination_name' => ?__string,
  ) $s = shape()) {
    $this->configuration_set_name = $s['configuration_set_name'] ?? '';
    $this->event_destination = $s['event_destination'] ?? null;
    $this->event_destination_name = $s['event_destination_name'] ?? '';
  }
}

class UpdateConfigurationSetEventDestinationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class VoiceMessageContent {
  public ?CallInstructionsMessageType $call_instructions_message;
  public ?PlainTextMessageType $plain_text_message;
  public ?SSMLMessageType $ssml_message;

  public function __construct(shape(
    ?'call_instructions_message' => ?CallInstructionsMessageType,
    ?'plain_text_message' => ?PlainTextMessageType,
    ?'ssml_message' => ?SSMLMessageType,
  ) $s = shape()) {
    $this->call_instructions_message = $s['call_instructions_message'] ?? null;
    $this->plain_text_message = $s['plain_text_message'] ?? null;
    $this->ssml_message = $s['ssml_message'] ?? null;
  }
}

type WordCharactersWithDelimiters = string;

type __boolean = bool;

type __double = float;

type __integer = int;

type __long = int;

type __string = string;

type __timestampIso8601 = int;

type __timestampUnix = int;


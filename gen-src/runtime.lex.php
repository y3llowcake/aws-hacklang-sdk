<?hh // strict
namespace slack\aws\runtime.lex;

interface LexRuntimeService {
  public function DeleteSession(DeleteSessionRequest $in): Awaitable<\Errors\Result<DeleteSessionResponse>>;
  public function GetSession(GetSessionRequest $in): Awaitable<\Errors\Result<GetSessionResponse>>;
  public function PostContent(PostContentRequest $in): Awaitable<\Errors\Result<PostContentResponse>>;
  public function PostText(PostTextRequest $in): Awaitable<\Errors\Result<PostTextResponse>>;
  public function PutSession(PutSessionRequest $in): Awaitable<\Errors\Result<PutSessionResponse>>;
}

type Accept = string;

type AttributesString = string;

class BadGatewayException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
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

type BlobStream = string;

type BotAlias = string;

type BotName = string;

class Button {
  public ?ButtonTextStringWithLength $text;
  public ?ButtonValueStringWithLength $value;

  public function __construct(shape(
    ?'text' => ?ButtonTextStringWithLength,
    ?'value' => ?ButtonValueStringWithLength,
  ) $s = shape()) {
    $this->text = $s['text'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type ButtonTextStringWithLength = string;

type ButtonValueStringWithLength = string;

type ConfirmationStatus = string;

class ConflictException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ContentType = string;

class DeleteSessionRequest {
  public ?BotAlias $bot_alias;
  public ?BotName $bot_name;
  public ?UserId $user_id;

  public function __construct(shape(
    ?'bot_alias' => ?BotAlias,
    ?'bot_name' => ?BotName,
    ?'user_id' => ?UserId,
  ) $s = shape()) {
    $this->bot_alias = $s['bot_alias'] ?? '';
    $this->bot_name = $s['bot_name'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class DeleteSessionResponse {
  public ?BotAlias $bot_alias;
  public ?BotName $bot_name;
  public string $session_id;
  public ?UserId $user_id;

  public function __construct(shape(
    ?'bot_alias' => ?BotAlias,
    ?'bot_name' => ?BotName,
    ?'session_id' => string,
    ?'user_id' => ?UserId,
  ) $s = shape()) {
    $this->bot_alias = $s['bot_alias'] ?? '';
    $this->bot_name = $s['bot_name'] ?? '';
    $this->session_id = $s['session_id'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class DependencyFailedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DialogAction {
  public ?FulfillmentState $fulfillment_state;
  public ?IntentName $intent_name;
  public ?Text $message;
  public ?MessageFormatType $message_format;
  public string $slot_to_elicit;
  public ?StringMap $slots;
  public ?DialogActionType $type;

  public function __construct(shape(
    ?'fulfillment_state' => ?FulfillmentState,
    ?'intent_name' => ?IntentName,
    ?'message' => ?Text,
    ?'message_format' => ?MessageFormatType,
    ?'slot_to_elicit' => string,
    ?'slots' => ?StringMap,
    ?'type' => ?DialogActionType,
  ) $s = shape()) {
    $this->fulfillment_state = $s['fulfillment_state'] ?? '';
    $this->intent_name = $s['intent_name'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->message_format = $s['message_format'] ?? '';
    $this->slot_to_elicit = $s['slot_to_elicit'] ?? '';
    $this->slots = $s['slots'] ?? dict[];
    $this->type = $s['type'] ?? '';
  }
}

type DialogActionType = string;

type DialogState = string;

type ErrorMessage = string;

type FulfillmentState = string;

class GenericAttachment {
  public ?StringUrlWithLength $attachment_link_url;
  public ?listOfButtons $buttons;
  public ?StringUrlWithLength $image_url;
  public ?StringWithLength $sub_title;
  public ?StringWithLength $title;

  public function __construct(shape(
    ?'attachment_link_url' => ?StringUrlWithLength,
    ?'buttons' => ?listOfButtons,
    ?'image_url' => ?StringUrlWithLength,
    ?'sub_title' => ?StringWithLength,
    ?'title' => ?StringWithLength,
  ) $s = shape()) {
    $this->attachment_link_url = $s['attachment_link_url'] ?? '';
    $this->buttons = $s['buttons'] ?? vec[];
    $this->image_url = $s['image_url'] ?? '';
    $this->sub_title = $s['sub_title'] ?? '';
    $this->title = $s['title'] ?? '';
  }
}

class GetSessionRequest {
  public ?BotAlias $bot_alias;
  public ?BotName $bot_name;
  public ?IntentSummaryCheckpointLabel $checkpoint_label_filter;
  public ?UserId $user_id;

  public function __construct(shape(
    ?'bot_alias' => ?BotAlias,
    ?'bot_name' => ?BotName,
    ?'checkpoint_label_filter' => ?IntentSummaryCheckpointLabel,
    ?'user_id' => ?UserId,
  ) $s = shape()) {
    $this->bot_alias = $s['bot_alias'] ?? '';
    $this->bot_name = $s['bot_name'] ?? '';
    $this->checkpoint_label_filter = $s['checkpoint_label_filter'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class GetSessionResponse {
  public ?DialogAction $dialog_action;
  public ?IntentSummaryList $recent_intent_summary_view;
  public ?StringMap $session_attributes;
  public string $session_id;

  public function __construct(shape(
    ?'dialog_action' => ?DialogAction,
    ?'recent_intent_summary_view' => ?IntentSummaryList,
    ?'session_attributes' => ?StringMap,
    ?'session_id' => string,
  ) $s = shape()) {
    $this->dialog_action = $s['dialog_action'] ?? null;
    $this->recent_intent_summary_view = $s['recent_intent_summary_view'] ?? vec[];
    $this->session_attributes = $s['session_attributes'] ?? dict[];
    $this->session_id = $s['session_id'] ?? '';
  }
}

type HttpContentType = string;

type IntentName = string;

class IntentSummary {
  public ?IntentSummaryCheckpointLabel $checkpoint_label;
  public ?ConfirmationStatus $confirmation_status;
  public ?DialogActionType $dialog_action_type;
  public ?FulfillmentState $fulfillment_state;
  public ?IntentName $intent_name;
  public string $slot_to_elicit;
  public ?StringMap $slots;

  public function __construct(shape(
    ?'checkpoint_label' => ?IntentSummaryCheckpointLabel,
    ?'confirmation_status' => ?ConfirmationStatus,
    ?'dialog_action_type' => ?DialogActionType,
    ?'fulfillment_state' => ?FulfillmentState,
    ?'intent_name' => ?IntentName,
    ?'slot_to_elicit' => string,
    ?'slots' => ?StringMap,
  ) $s = shape()) {
    $this->checkpoint_label = $s['checkpoint_label'] ?? '';
    $this->confirmation_status = $s['confirmation_status'] ?? '';
    $this->dialog_action_type = $s['dialog_action_type'] ?? '';
    $this->fulfillment_state = $s['fulfillment_state'] ?? '';
    $this->intent_name = $s['intent_name'] ?? '';
    $this->slot_to_elicit = $s['slot_to_elicit'] ?? '';
    $this->slots = $s['slots'] ?? dict[];
  }
}

type IntentSummaryCheckpointLabel = string;

type IntentSummaryList = vec<IntentSummary>;

class InternalFailureException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class LimitExceededException {
  public string $message;
  public string $retry_after_seconds;

  public function __construct(shape(
    ?'message' => string,
    ?'retry_after_seconds' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->retry_after_seconds = $s['retry_after_seconds'] ?? '';
  }
}

class LoopDetectedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type MessageFormatType = string;

class NotAcceptableException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class NotFoundException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class PostContentRequest {
  public ?Accept $accept;
  public ?BotAlias $bot_alias;
  public ?BotName $bot_name;
  public ?HttpContentType $content_type;
  public ?BlobStream $input_stream;
  public ?AttributesString $request_attributes;
  public ?AttributesString $session_attributes;
  public ?UserId $user_id;

  public function __construct(shape(
    ?'accept' => ?Accept,
    ?'bot_alias' => ?BotAlias,
    ?'bot_name' => ?BotName,
    ?'content_type' => ?HttpContentType,
    ?'input_stream' => ?BlobStream,
    ?'request_attributes' => ?AttributesString,
    ?'session_attributes' => ?AttributesString,
    ?'user_id' => ?UserId,
  ) $s = shape()) {
    $this->accept = $s['accept'] ?? '';
    $this->bot_alias = $s['bot_alias'] ?? '';
    $this->bot_name = $s['bot_name'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
    $this->input_stream = $s['input_stream'] ?? '';
    $this->request_attributes = $s['request_attributes'] ?? '';
    $this->session_attributes = $s['session_attributes'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class PostContentResponse {
  public ?BlobStream $audio_stream;
  public ?HttpContentType $content_type;
  public ?DialogState $dialog_state;
  public string $input_transcript;
  public ?IntentName $intent_name;
  public ?Text $message;
  public ?MessageFormatType $message_format;
  public string $sentiment_response;
  public string $session_attributes;
  public string $session_id;
  public string $slot_to_elicit;
  public string $slots;

  public function __construct(shape(
    ?'audio_stream' => ?BlobStream,
    ?'content_type' => ?HttpContentType,
    ?'dialog_state' => ?DialogState,
    ?'input_transcript' => string,
    ?'intent_name' => ?IntentName,
    ?'message' => ?Text,
    ?'message_format' => ?MessageFormatType,
    ?'sentiment_response' => string,
    ?'session_attributes' => string,
    ?'session_id' => string,
    ?'slot_to_elicit' => string,
    ?'slots' => string,
  ) $s = shape()) {
    $this->audio_stream = $s['audio_stream'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
    $this->dialog_state = $s['dialog_state'] ?? '';
    $this->input_transcript = $s['input_transcript'] ?? '';
    $this->intent_name = $s['intent_name'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->message_format = $s['message_format'] ?? '';
    $this->sentiment_response = $s['sentiment_response'] ?? '';
    $this->session_attributes = $s['session_attributes'] ?? '';
    $this->session_id = $s['session_id'] ?? '';
    $this->slot_to_elicit = $s['slot_to_elicit'] ?? '';
    $this->slots = $s['slots'] ?? '';
  }
}

class PostTextRequest {
  public ?BotAlias $bot_alias;
  public ?BotName $bot_name;
  public ?Text $input_text;
  public ?StringMap $request_attributes;
  public ?StringMap $session_attributes;
  public ?UserId $user_id;

  public function __construct(shape(
    ?'bot_alias' => ?BotAlias,
    ?'bot_name' => ?BotName,
    ?'input_text' => ?Text,
    ?'request_attributes' => ?StringMap,
    ?'session_attributes' => ?StringMap,
    ?'user_id' => ?UserId,
  ) $s = shape()) {
    $this->bot_alias = $s['bot_alias'] ?? '';
    $this->bot_name = $s['bot_name'] ?? '';
    $this->input_text = $s['input_text'] ?? '';
    $this->request_attributes = $s['request_attributes'] ?? dict[];
    $this->session_attributes = $s['session_attributes'] ?? dict[];
    $this->user_id = $s['user_id'] ?? '';
  }
}

class PostTextResponse {
  public ?DialogState $dialog_state;
  public ?IntentName $intent_name;
  public ?Text $message;
  public ?MessageFormatType $message_format;
  public ?ResponseCard $response_card;
  public ?SentimentResponse $sentiment_response;
  public ?StringMap $session_attributes;
  public string $session_id;
  public string $slot_to_elicit;
  public ?StringMap $slots;

  public function __construct(shape(
    ?'dialog_state' => ?DialogState,
    ?'intent_name' => ?IntentName,
    ?'message' => ?Text,
    ?'message_format' => ?MessageFormatType,
    ?'response_card' => ?ResponseCard,
    ?'sentiment_response' => ?SentimentResponse,
    ?'session_attributes' => ?StringMap,
    ?'session_id' => string,
    ?'slot_to_elicit' => string,
    ?'slots' => ?StringMap,
  ) $s = shape()) {
    $this->dialog_state = $s['dialog_state'] ?? '';
    $this->intent_name = $s['intent_name'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->message_format = $s['message_format'] ?? '';
    $this->response_card = $s['response_card'] ?? null;
    $this->sentiment_response = $s['sentiment_response'] ?? null;
    $this->session_attributes = $s['session_attributes'] ?? dict[];
    $this->session_id = $s['session_id'] ?? '';
    $this->slot_to_elicit = $s['slot_to_elicit'] ?? '';
    $this->slots = $s['slots'] ?? dict[];
  }
}

class PutSessionRequest {
  public ?Accept $accept;
  public ?BotAlias $bot_alias;
  public ?BotName $bot_name;
  public ?DialogAction $dialog_action;
  public ?IntentSummaryList $recent_intent_summary_view;
  public ?StringMap $session_attributes;
  public ?UserId $user_id;

  public function __construct(shape(
    ?'accept' => ?Accept,
    ?'bot_alias' => ?BotAlias,
    ?'bot_name' => ?BotName,
    ?'dialog_action' => ?DialogAction,
    ?'recent_intent_summary_view' => ?IntentSummaryList,
    ?'session_attributes' => ?StringMap,
    ?'user_id' => ?UserId,
  ) $s = shape()) {
    $this->accept = $s['accept'] ?? '';
    $this->bot_alias = $s['bot_alias'] ?? '';
    $this->bot_name = $s['bot_name'] ?? '';
    $this->dialog_action = $s['dialog_action'] ?? null;
    $this->recent_intent_summary_view = $s['recent_intent_summary_view'] ?? vec[];
    $this->session_attributes = $s['session_attributes'] ?? dict[];
    $this->user_id = $s['user_id'] ?? '';
  }
}

class PutSessionResponse {
  public ?BlobStream $audio_stream;
  public ?HttpContentType $content_type;
  public ?DialogState $dialog_state;
  public ?IntentName $intent_name;
  public ?Text $message;
  public ?MessageFormatType $message_format;
  public string $session_attributes;
  public string $session_id;
  public string $slot_to_elicit;
  public string $slots;

  public function __construct(shape(
    ?'audio_stream' => ?BlobStream,
    ?'content_type' => ?HttpContentType,
    ?'dialog_state' => ?DialogState,
    ?'intent_name' => ?IntentName,
    ?'message' => ?Text,
    ?'message_format' => ?MessageFormatType,
    ?'session_attributes' => string,
    ?'session_id' => string,
    ?'slot_to_elicit' => string,
    ?'slots' => string,
  ) $s = shape()) {
    $this->audio_stream = $s['audio_stream'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
    $this->dialog_state = $s['dialog_state'] ?? '';
    $this->intent_name = $s['intent_name'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->message_format = $s['message_format'] ?? '';
    $this->session_attributes = $s['session_attributes'] ?? '';
    $this->session_id = $s['session_id'] ?? '';
    $this->slot_to_elicit = $s['slot_to_elicit'] ?? '';
    $this->slots = $s['slots'] ?? '';
  }
}

class RequestTimeoutException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResponseCard {
  public ?ContentType $content_type;
  public ?genericAttachmentList $generic_attachments;
  public string $version;

  public function __construct(shape(
    ?'content_type' => ?ContentType,
    ?'generic_attachments' => ?genericAttachmentList,
    ?'version' => string,
  ) $s = shape()) {
    $this->content_type = $s['content_type'] ?? '';
    $this->generic_attachments = $s['generic_attachments'] ?? vec[];
    $this->version = $s['version'] ?? '';
  }
}

type SentimentLabel = string;

class SentimentResponse {
  public ?SentimentLabel $sentiment_label;
  public ?SentimentScore $sentiment_score;

  public function __construct(shape(
    ?'sentiment_label' => ?SentimentLabel,
    ?'sentiment_score' => ?SentimentScore,
  ) $s = shape()) {
    $this->sentiment_label = $s['sentiment_label'] ?? '';
    $this->sentiment_score = $s['sentiment_score'] ?? '';
  }
}

type SentimentScore = string;

type String = string;

type StringMap = dict<String, String>;

type StringUrlWithLength = string;

type StringWithLength = string;

type Text = string;

class UnsupportedMediaTypeException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type UserId = string;

type genericAttachmentList = vec<GenericAttachment>;

type listOfButtons = vec<Button>;


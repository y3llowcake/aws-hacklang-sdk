<?hh // strict
namespace slack\aws\runtime.lex;

interface Lex Runtime Service {
  public function DeleteSession(DeleteSessionRequest): Awaitable<Errors\Result<DeleteSessionResponse>>;
  public function GetSession(GetSessionRequest): Awaitable<Errors\Result<GetSessionResponse>>;
  public function PostContent(PostContentRequest): Awaitable<Errors\Result<PostContentResponse>>;
  public function PostText(PostTextRequest): Awaitable<Errors\Result<PostTextResponse>>;
  public function PutSession(PutSessionRequest): Awaitable<Errors\Result<PutSessionResponse>>;
}

class Accept {
}

class AttributesString {
}

class BadGatewayException {
  public ErrorMessage $message;
}

class BadRequestException {
  public string $message;
}

class BlobStream {
}

class BotAlias {
}

class BotName {
}

class Button {
  public ButtonTextStringWithLength $text;
  public ButtonValueStringWithLength $value;
}

class ButtonTextStringWithLength {
}

class ButtonValueStringWithLength {
}

class ConfirmationStatus {
}

class ConflictException {
  public string $message;
}

class ContentType {
}

class DeleteSessionRequest {
  public BotAlias $bot_alias;
  public BotName $bot_name;
  public UserId $user_id;
}

class DeleteSessionResponse {
  public BotAlias $bot_alias;
  public BotName $bot_name;
  public string $session_id;
  public UserId $user_id;
}

class DependencyFailedException {
  public ErrorMessage $message;
}

class DialogAction {
  public FulfillmentState $fulfillment_state;
  public IntentName $intent_name;
  public Text $message;
  public MessageFormatType $message_format;
  public string $slot_to_elicit;
  public StringMap $slots;
  public DialogActionType $type;
}

class DialogActionType {
}

class DialogState {
}

class ErrorMessage {
}

class FulfillmentState {
}

class GenericAttachment {
  public StringUrlWithLength $attachment_link_url;
  public listOfButtons $buttons;
  public StringUrlWithLength $image_url;
  public StringWithLength $sub_title;
  public StringWithLength $title;
}

class GetSessionRequest {
  public BotAlias $bot_alias;
  public BotName $bot_name;
  public IntentSummaryCheckpointLabel $checkpoint_label_filter;
  public UserId $user_id;
}

class GetSessionResponse {
  public DialogAction $dialog_action;
  public IntentSummaryList $recent_intent_summary_view;
  public StringMap $session_attributes;
  public string $session_id;
}

class HttpContentType {
}

class IntentName {
}

class IntentSummary {
  public IntentSummaryCheckpointLabel $checkpoint_label;
  public ConfirmationStatus $confirmation_status;
  public DialogActionType $dialog_action_type;
  public FulfillmentState $fulfillment_state;
  public IntentName $intent_name;
  public string $slot_to_elicit;
  public StringMap $slots;
}

class IntentSummaryCheckpointLabel {
}

class IntentSummaryList {
}

class InternalFailureException {
  public string $message;
}

class LimitExceededException {
  public string $message;
  public string $retry_after_seconds;
}

class LoopDetectedException {
  public ErrorMessage $message;
}

class MessageFormatType {
}

class NotAcceptableException {
  public string $message;
}

class NotFoundException {
  public string $message;
}

class PostContentRequest {
  public Accept $accept;
  public BotAlias $bot_alias;
  public BotName $bot_name;
  public HttpContentType $content_type;
  public BlobStream $input_stream;
  public AttributesString $request_attributes;
  public AttributesString $session_attributes;
  public UserId $user_id;
}

class PostContentResponse {
  public BlobStream $audio_stream;
  public HttpContentType $content_type;
  public DialogState $dialog_state;
  public string $input_transcript;
  public IntentName $intent_name;
  public Text $message;
  public MessageFormatType $message_format;
  public string $sentiment_response;
  public string $session_attributes;
  public string $session_id;
  public string $slot_to_elicit;
  public string $slots;
}

class PostTextRequest {
  public BotAlias $bot_alias;
  public BotName $bot_name;
  public Text $input_text;
  public StringMap $request_attributes;
  public StringMap $session_attributes;
  public UserId $user_id;
}

class PostTextResponse {
  public DialogState $dialog_state;
  public IntentName $intent_name;
  public Text $message;
  public MessageFormatType $message_format;
  public ResponseCard $response_card;
  public SentimentResponse $sentiment_response;
  public StringMap $session_attributes;
  public string $session_id;
  public string $slot_to_elicit;
  public StringMap $slots;
}

class PutSessionRequest {
  public Accept $accept;
  public BotAlias $bot_alias;
  public BotName $bot_name;
  public DialogAction $dialog_action;
  public IntentSummaryList $recent_intent_summary_view;
  public StringMap $session_attributes;
  public UserId $user_id;
}

class PutSessionResponse {
  public BlobStream $audio_stream;
  public HttpContentType $content_type;
  public DialogState $dialog_state;
  public IntentName $intent_name;
  public Text $message;
  public MessageFormatType $message_format;
  public string $session_attributes;
  public string $session_id;
  public string $slot_to_elicit;
  public string $slots;
}

class RequestTimeoutException {
  public string $message;
}

class ResponseCard {
  public ContentType $content_type;
  public genericAttachmentList $generic_attachments;
  public string $version;
}

class SentimentLabel {
}

class SentimentResponse {
  public SentimentLabel $sentiment_label;
  public SentimentScore $sentiment_score;
}

class SentimentScore {
}

class String {
}

class StringMap {
}

class StringUrlWithLength {
}

class StringWithLength {
}

class Text {
}

class UnsupportedMediaTypeException {
  public string $message;
}

class UserId {
}

class genericAttachmentList {
}

class listOfButtons {
}


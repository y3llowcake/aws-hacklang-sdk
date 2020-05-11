<?hh // strict
namespace slack\aws\workmailmessageflow;

interface WorkMailMessageFlow {
  public function GetRawMessageContent(GetRawMessageContentRequest): Awaitable<Errors\Result<GetRawMessageContentResponse>>;
}

class GetRawMessageContentRequest {
  public messageIdType $message_id;

  public function __construct(shape(
  ?'message_id' => messageIdType,
  ) $s = shape()) {
    $this->message_id = $message_id ?? ;
  }
}

class GetRawMessageContentResponse {
  public messageContentBlob $message_content;

  public function __construct(shape(
  ?'message_content' => messageContentBlob,
  ) $s = shape()) {
    $this->message_content = $message_content ?? ;
  }
}

class ResourceNotFoundException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type errorMessage = string;

type messageContentBlob = string;

type messageIdType = string;


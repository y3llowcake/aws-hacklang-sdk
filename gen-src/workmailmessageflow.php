<?hh // strict
namespace slack\aws\workmailmessageflow;

interface WorkMailMessageFlow {
  public function GetRawMessageContent(GetRawMessageContentRequest) Awaitable<Errors\Result<GetRawMessageContentResponse>>;
}

class GetRawMessageContentRequest {
  public messageIdType $message_id;
}

class GetRawMessageContentResponse {
  public messageContentBlob $message_content;
}

class ResourceNotFoundException {
  public errorMessage $message;
}

class errorMessage {
}

class messageContentBlob {
}

class messageIdType {
}


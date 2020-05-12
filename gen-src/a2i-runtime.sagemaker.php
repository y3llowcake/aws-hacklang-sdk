<?hh // strict
namespace slack\aws\a2i-runtime.sagemaker;

interface SageMakerA2IRuntime {
  public function DeleteHumanLoop(DeleteHumanLoopRequest $in): Awaitable<\Errors\Result<DeleteHumanLoopResponse>>;
  public function DescribeHumanLoop(DescribeHumanLoopRequest $in): Awaitable<\Errors\Result<DescribeHumanLoopResponse>>;
  public function ListHumanLoops(ListHumanLoopsRequest $in): Awaitable<\Errors\Result<ListHumanLoopsResponse>>;
  public function StartHumanLoop(StartHumanLoopRequest $in): Awaitable<\Errors\Result<StartHumanLoopResponse>>;
  public function StopHumanLoop(StopHumanLoopRequest $in): Awaitable<\Errors\Result<StopHumanLoopResponse>>;
}

class ConflictException {
  public ?FailureReason $message;

  public function __construct(shape(
    ?'message' => ?FailureReason,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ContentClassifier = string;

type ContentClassifiers = vec<ContentClassifier>;

class DeleteHumanLoopRequest {
  public ?HumanLoopName $human_loop_name;

  public function __construct(shape(
    ?'human_loop_name' => ?HumanLoopName,
  ) $s = shape()) {
    $this->human_loop_name = $s['human_loop_name'] ?? '';
  }
}

class DeleteHumanLoopResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeHumanLoopRequest {
  public ?HumanLoopName $human_loop_name;

  public function __construct(shape(
    ?'human_loop_name' => ?HumanLoopName,
  ) $s = shape()) {
    $this->human_loop_name = $s['human_loop_name'] ?? '';
  }
}

class DescribeHumanLoopResponse {
  public ?Timestamp $creation_time;
  public string $failure_code;
  public string $failure_reason;
  public ?FlowDefinitionArn $flow_definition_arn;
  public ?HumanLoopArn $human_loop_arn;
  public ?HumanLoopName $human_loop_name;
  public ?HumanLoopOutput $human_loop_output;
  public ?HumanLoopStatus $human_loop_status;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'failure_code' => string,
    ?'failure_reason' => string,
    ?'flow_definition_arn' => ?FlowDefinitionArn,
    ?'human_loop_arn' => ?HumanLoopArn,
    ?'human_loop_name' => ?HumanLoopName,
    ?'human_loop_output' => ?HumanLoopOutput,
    ?'human_loop_status' => ?HumanLoopStatus,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->failure_code = $s['failure_code'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->flow_definition_arn = $s['flow_definition_arn'] ?? '';
    $this->human_loop_arn = $s['human_loop_arn'] ?? '';
    $this->human_loop_name = $s['human_loop_name'] ?? '';
    $this->human_loop_output = $s['human_loop_output'] ?? null;
    $this->human_loop_status = $s['human_loop_status'] ?? '';
  }
}

type FailureReason = string;

type FlowDefinitionArn = string;

type HumanLoopArn = string;

class HumanLoopDataAttributes {
  public ?ContentClassifiers $content_classifiers;

  public function __construct(shape(
    ?'content_classifiers' => ?ContentClassifiers,
  ) $s = shape()) {
    $this->content_classifiers = $s['content_classifiers'] ?? vec[];
  }
}

class HumanLoopInput {
  public ?InputContent $input_content;

  public function __construct(shape(
    ?'input_content' => ?InputContent,
  ) $s = shape()) {
    $this->input_content = $s['input_content'] ?? '';
  }
}

type HumanLoopName = string;

class HumanLoopOutput {
  public string $output_s_3_uri;

  public function __construct(shape(
    ?'output_s_3_uri' => string,
  ) $s = shape()) {
    $this->output_s_3_uri = $s['output_s_3_uri'] ?? '';
  }
}

type HumanLoopStatus = string;

type HumanLoopSummaries = vec<HumanLoopSummary>;

class HumanLoopSummary {
  public ?Timestamp $creation_time;
  public ?FailureReason $failure_reason;
  public ?FlowDefinitionArn $flow_definition_arn;
  public ?HumanLoopName $human_loop_name;
  public ?HumanLoopStatus $human_loop_status;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'failure_reason' => ?FailureReason,
    ?'flow_definition_arn' => ?FlowDefinitionArn,
    ?'human_loop_name' => ?HumanLoopName,
    ?'human_loop_status' => ?HumanLoopStatus,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->flow_definition_arn = $s['flow_definition_arn'] ?? '';
    $this->human_loop_name = $s['human_loop_name'] ?? '';
    $this->human_loop_status = $s['human_loop_status'] ?? '';
  }
}

type InputContent = string;

class InternalServerException {
  public ?FailureReason $message;

  public function __construct(shape(
    ?'message' => ?FailureReason,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListHumanLoopsRequest {
  public ?Timestamp $creation_time_after;
  public ?Timestamp $creation_time_before;
  public ?FlowDefinitionArn $flow_definition_arn;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?SortOrder $sort_order;

  public function __construct(shape(
    ?'creation_time_after' => ?Timestamp,
    ?'creation_time_before' => ?Timestamp,
    ?'flow_definition_arn' => ?FlowDefinitionArn,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'sort_order' => ?SortOrder,
  ) $s = shape()) {
    $this->creation_time_after = $s['creation_time_after'] ?? 0;
    $this->creation_time_before = $s['creation_time_before'] ?? 0;
    $this->flow_definition_arn = $s['flow_definition_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class ListHumanLoopsResponse {
  public ?HumanLoopSummaries $human_loop_summaries;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'human_loop_summaries' => ?HumanLoopSummaries,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->human_loop_summaries = $s['human_loop_summaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type MaxResults = int;

type NextToken = string;

class ResourceNotFoundException {
  public ?FailureReason $message;

  public function __construct(shape(
    ?'message' => ?FailureReason,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ServiceQuotaExceededException {
  public ?FailureReason $message;

  public function __construct(shape(
    ?'message' => ?FailureReason,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type SortOrder = string;

class StartHumanLoopRequest {
  public ?HumanLoopDataAttributes $data_attributes;
  public ?FlowDefinitionArn $flow_definition_arn;
  public ?HumanLoopInput $human_loop_input;
  public ?HumanLoopName $human_loop_name;

  public function __construct(shape(
    ?'data_attributes' => ?HumanLoopDataAttributes,
    ?'flow_definition_arn' => ?FlowDefinitionArn,
    ?'human_loop_input' => ?HumanLoopInput,
    ?'human_loop_name' => ?HumanLoopName,
  ) $s = shape()) {
    $this->data_attributes = $s['data_attributes'] ?? null;
    $this->flow_definition_arn = $s['flow_definition_arn'] ?? '';
    $this->human_loop_input = $s['human_loop_input'] ?? null;
    $this->human_loop_name = $s['human_loop_name'] ?? '';
  }
}

class StartHumanLoopResponse {
  public ?HumanLoopArn $human_loop_arn;

  public function __construct(shape(
    ?'human_loop_arn' => ?HumanLoopArn,
  ) $s = shape()) {
    $this->human_loop_arn = $s['human_loop_arn'] ?? '';
  }
}

class StopHumanLoopRequest {
  public ?HumanLoopName $human_loop_name;

  public function __construct(shape(
    ?'human_loop_name' => ?HumanLoopName,
  ) $s = shape()) {
    $this->human_loop_name = $s['human_loop_name'] ?? '';
  }
}

class StopHumanLoopResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type String = string;

class ThrottlingException {
  public ?FailureReason $message;

  public function __construct(shape(
    ?'message' => ?FailureReason,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Timestamp = int;

class ValidationException {
  public ?FailureReason $message;

  public function __construct(shape(
    ?'message' => ?FailureReason,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}


<?hh // strict
namespace slack\aws\a2i-runtime.sagemaker;

interface SageMaker A2I Runtime {
  public function DeleteHumanLoop(DeleteHumanLoopRequest): Awaitable<Errors\Result<DeleteHumanLoopResponse>>;
  public function DescribeHumanLoop(DescribeHumanLoopRequest): Awaitable<Errors\Result<DescribeHumanLoopResponse>>;
  public function ListHumanLoops(ListHumanLoopsRequest): Awaitable<Errors\Result<ListHumanLoopsResponse>>;
  public function StartHumanLoop(StartHumanLoopRequest): Awaitable<Errors\Result<StartHumanLoopResponse>>;
  public function StopHumanLoop(StopHumanLoopRequest): Awaitable<Errors\Result<StopHumanLoopResponse>>;
}

class ConflictException {
  public FailureReason $message;

  public function __construct(shape(
  ?'message' => FailureReason,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ContentClassifier = string;

type ContentClassifiers = vec<ContentClassifier>;

class DeleteHumanLoopRequest {
  public HumanLoopName $human_loop_name;

  public function __construct(shape(
  ?'human_loop_name' => HumanLoopName,
  ) $s = shape()) {
    $this->human_loop_name = $human_loop_name ?? "";
  }
}

class DeleteHumanLoopResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeHumanLoopRequest {
  public HumanLoopName $human_loop_name;

  public function __construct(shape(
  ?'human_loop_name' => HumanLoopName,
  ) $s = shape()) {
    $this->human_loop_name = $human_loop_name ?? "";
  }
}

class DescribeHumanLoopResponse {
  public Timestamp $creation_time;
  public string $failure_code;
  public string $failure_reason;
  public FlowDefinitionArn $flow_definition_arn;
  public HumanLoopArn $human_loop_arn;
  public HumanLoopName $human_loop_name;
  public HumanLoopOutput $human_loop_output;
  public HumanLoopStatus $human_loop_status;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'failure_code' => string,
  ?'failure_reason' => string,
  ?'flow_definition_arn' => FlowDefinitionArn,
  ?'human_loop_arn' => HumanLoopArn,
  ?'human_loop_name' => HumanLoopName,
  ?'human_loop_output' => HumanLoopOutput,
  ?'human_loop_status' => HumanLoopStatus,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? ;
    $this->failure_code = $failure_code ?? ;
    $this->failure_reason = $failure_reason ?? "";
    $this->flow_definition_arn = $flow_definition_arn ?? "";
    $this->human_loop_arn = $human_loop_arn ?? "";
    $this->human_loop_name = $human_loop_name ?? "";
    $this->human_loop_output = $human_loop_output ?? null;
    $this->human_loop_status = $human_loop_status ?? "";
  }
}

type FailureReason = string;

type FlowDefinitionArn = string;

type HumanLoopArn = string;

class HumanLoopDataAttributes {
  public ContentClassifiers $content_classifiers;

  public function __construct(shape(
  ?'content_classifiers' => ContentClassifiers,
  ) $s = shape()) {
    $this->content_classifiers = $content_classifiers ?? [];
  }
}

class HumanLoopInput {
  public InputContent $input_content;

  public function __construct(shape(
  ?'input_content' => InputContent,
  ) $s = shape()) {
    $this->input_content = $input_content ?? "";
  }
}

type HumanLoopName = string;

class HumanLoopOutput {
  public string $output_s_3_uri;

  public function __construct(shape(
  ?'output_s_3_uri' => string,
  ) $s = shape()) {
    $this->output_s_3_uri = $output_s_3_uri ?? ;
  }
}

type HumanLoopStatus = string;

type HumanLoopSummaries = vec<HumanLoopSummary>;

class HumanLoopSummary {
  public Timestamp $creation_time;
  public FailureReason $failure_reason;
  public FlowDefinitionArn $flow_definition_arn;
  public HumanLoopName $human_loop_name;
  public HumanLoopStatus $human_loop_status;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'failure_reason' => FailureReason,
  ?'flow_definition_arn' => FlowDefinitionArn,
  ?'human_loop_name' => HumanLoopName,
  ?'human_loop_status' => HumanLoopStatus,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? ;
    $this->failure_reason = $failure_reason ?? "";
    $this->flow_definition_arn = $flow_definition_arn ?? "";
    $this->human_loop_name = $human_loop_name ?? "";
    $this->human_loop_status = $human_loop_status ?? "";
  }
}

type InputContent = string;

class InternalServerException {
  public FailureReason $message;

  public function __construct(shape(
  ?'message' => FailureReason,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ListHumanLoopsRequest {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public FlowDefinitionArn $flow_definition_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortOrder $sort_order;

  public function __construct(shape(
  ?'creation_time_after' => Timestamp,
  ?'creation_time_before' => Timestamp,
  ?'flow_definition_arn' => FlowDefinitionArn,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_order' => SortOrder,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->flow_definition_arn = $flow_definition_arn ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_order = $sort_order ?? "";
  }
}

class ListHumanLoopsResponse {
  public HumanLoopSummaries $human_loop_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'human_loop_summaries' => HumanLoopSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->human_loop_summaries = $human_loop_summaries ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type MaxResults = int;

type NextToken = string;

class ResourceNotFoundException {
  public FailureReason $message;

  public function __construct(shape(
  ?'message' => FailureReason,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ServiceQuotaExceededException {
  public FailureReason $message;

  public function __construct(shape(
  ?'message' => FailureReason,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type SortOrder = string;

class StartHumanLoopRequest {
  public HumanLoopDataAttributes $data_attributes;
  public FlowDefinitionArn $flow_definition_arn;
  public HumanLoopInput $human_loop_input;
  public HumanLoopName $human_loop_name;

  public function __construct(shape(
  ?'data_attributes' => HumanLoopDataAttributes,
  ?'flow_definition_arn' => FlowDefinitionArn,
  ?'human_loop_input' => HumanLoopInput,
  ?'human_loop_name' => HumanLoopName,
  ) $s = shape()) {
    $this->data_attributes = $data_attributes ?? ;
    $this->flow_definition_arn = $flow_definition_arn ?? "";
    $this->human_loop_input = $human_loop_input ?? null;
    $this->human_loop_name = $human_loop_name ?? "";
  }
}

class StartHumanLoopResponse {
  public HumanLoopArn $human_loop_arn;

  public function __construct(shape(
  ?'human_loop_arn' => HumanLoopArn,
  ) $s = shape()) {
    $this->human_loop_arn = $human_loop_arn ?? "";
  }
}

class StopHumanLoopRequest {
  public HumanLoopName $human_loop_name;

  public function __construct(shape(
  ?'human_loop_name' => HumanLoopName,
  ) $s = shape()) {
    $this->human_loop_name = $human_loop_name ?? "";
  }
}

class StopHumanLoopResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type String = string;

class ThrottlingException {
  public FailureReason $message;

  public function __construct(shape(
  ?'message' => FailureReason,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Timestamp = int;

class ValidationException {
  public FailureReason $message;

  public function __construct(shape(
  ?'message' => FailureReason,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}


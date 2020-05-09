<?hh // strict
namespace slack\aws\a2i-runtime.sagemaker;

interface SageMaker A2I Runtime {
  public function DeleteHumanLoop(DeleteHumanLoopRequest) Awaitable<Errors\Result<DeleteHumanLoopResponse>>;
  public function DescribeHumanLoop(DescribeHumanLoopRequest) Awaitable<Errors\Result<DescribeHumanLoopResponse>>;
  public function ListHumanLoops(ListHumanLoopsRequest) Awaitable<Errors\Result<ListHumanLoopsResponse>>;
  public function StartHumanLoop(StartHumanLoopRequest) Awaitable<Errors\Result<StartHumanLoopResponse>>;
  public function StopHumanLoop(StopHumanLoopRequest) Awaitable<Errors\Result<StopHumanLoopResponse>>;
}

class ConflictException {
  public FailureReason $message;
}

class ContentClassifier {
}

class ContentClassifiers {
}

class DeleteHumanLoopRequest {
  public HumanLoopName $human_loop_name;
}

class DeleteHumanLoopResponse {
}

class DescribeHumanLoopRequest {
  public HumanLoopName $human_loop_name;
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
}

class FailureReason {
}

class FlowDefinitionArn {
}

class HumanLoopArn {
}

class HumanLoopDataAttributes {
  public ContentClassifiers $content_classifiers;
}

class HumanLoopInput {
  public InputContent $input_content;
}

class HumanLoopName {
}

class HumanLoopOutput {
  public string $output_s_3_uri;
}

class HumanLoopStatus {
}

class HumanLoopSummaries {
}

class HumanLoopSummary {
  public Timestamp $creation_time;
  public FailureReason $failure_reason;
  public FlowDefinitionArn $flow_definition_arn;
  public HumanLoopName $human_loop_name;
  public HumanLoopStatus $human_loop_status;
}

class InputContent {
}

class InternalServerException {
  public FailureReason $message;
}

class ListHumanLoopsRequest {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public FlowDefinitionArn $flow_definition_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortOrder $sort_order;
}

class ListHumanLoopsResponse {
  public HumanLoopSummaries $human_loop_summaries;
  public NextToken $next_token;
}

class MaxResults {
}

class NextToken {
}

class ResourceNotFoundException {
  public FailureReason $message;
}

class ServiceQuotaExceededException {
  public FailureReason $message;
}

class SortOrder {
}

class StartHumanLoopRequest {
  public HumanLoopDataAttributes $data_attributes;
  public FlowDefinitionArn $flow_definition_arn;
  public HumanLoopInput $human_loop_input;
  public HumanLoopName $human_loop_name;
}

class StartHumanLoopResponse {
  public HumanLoopArn $human_loop_arn;
}

class StopHumanLoopRequest {
  public HumanLoopName $human_loop_name;
}

class StopHumanLoopResponse {
}

class String {
}

class ThrottlingException {
  public FailureReason $message;
}

class Timestamp {
}

class ValidationException {
  public FailureReason $message;
}


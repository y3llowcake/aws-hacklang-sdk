<?hh // strict
namespace slack\aws\datapipeline;

interface  {
  public function ActivatePipeline(ActivatePipelineInput): Awaitable<Errors\Result<ActivatePipelineOutput>>;
  public function AddTags(AddTagsInput): Awaitable<Errors\Result<AddTagsOutput>>;
  public function CreatePipeline(CreatePipelineInput): Awaitable<Errors\Result<CreatePipelineOutput>>;
  public function DeactivatePipeline(DeactivatePipelineInput): Awaitable<Errors\Result<DeactivatePipelineOutput>>;
  public function DeletePipeline(DeletePipelineInput): Awaitable<Errors\Error>;
  public function DescribeObjects(DescribeObjectsInput): Awaitable<Errors\Result<DescribeObjectsOutput>>;
  public function DescribePipelines(DescribePipelinesInput): Awaitable<Errors\Result<DescribePipelinesOutput>>;
  public function EvaluateExpression(EvaluateExpressionInput): Awaitable<Errors\Result<EvaluateExpressionOutput>>;
  public function GetPipelineDefinition(GetPipelineDefinitionInput): Awaitable<Errors\Result<GetPipelineDefinitionOutput>>;
  public function ListPipelines(ListPipelinesInput): Awaitable<Errors\Result<ListPipelinesOutput>>;
  public function PollForTask(PollForTaskInput): Awaitable<Errors\Result<PollForTaskOutput>>;
  public function PutPipelineDefinition(PutPipelineDefinitionInput): Awaitable<Errors\Result<PutPipelineDefinitionOutput>>;
  public function QueryObjects(QueryObjectsInput): Awaitable<Errors\Result<QueryObjectsOutput>>;
  public function RemoveTags(RemoveTagsInput): Awaitable<Errors\Result<RemoveTagsOutput>>;
  public function ReportTaskProgress(ReportTaskProgressInput): Awaitable<Errors\Result<ReportTaskProgressOutput>>;
  public function ReportTaskRunnerHeartbeat(ReportTaskRunnerHeartbeatInput): Awaitable<Errors\Result<ReportTaskRunnerHeartbeatOutput>>;
  public function SetStatus(SetStatusInput): Awaitable<Errors\Error>;
  public function SetTaskStatus(SetTaskStatusInput): Awaitable<Errors\Result<SetTaskStatusOutput>>;
  public function ValidatePipelineDefinition(ValidatePipelineDefinitionInput): Awaitable<Errors\Result<ValidatePipelineDefinitionOutput>>;
}

class ActivatePipelineInput {
  public ParameterValueList $parameter_values;
  public id $pipeline_id;
  public timestamp $start_timestamp;
}

class ActivatePipelineOutput {
}

class AddTagsInput {
  public id $pipeline_id;
  public tagList $tags;
}

class AddTagsOutput {
}

class CreatePipelineInput {
  public string $description;
  public id $name;
  public tagList $tags;
  public id $unique_id;
}

class CreatePipelineOutput {
  public id $pipeline_id;
}

class DeactivatePipelineInput {
  public cancelActive $cancel_active;
  public id $pipeline_id;
}

class DeactivatePipelineOutput {
}

class DeletePipelineInput {
  public id $pipeline_id;
}

class DescribeObjectsInput {
  public boolean $evaluate_expressions;
  public string $marker;
  public idList $object_ids;
  public id $pipeline_id;
}

class DescribeObjectsOutput {
  public boolean $has_more_results;
  public string $marker;
  public PipelineObjectList $pipeline_objects;
}

class DescribePipelinesInput {
  public idList $pipeline_ids;
}

class DescribePipelinesOutput {
  public PipelineDescriptionList $pipeline_description_list;
}

class EvaluateExpressionInput {
  public longString $expression;
  public id $object_id;
  public id $pipeline_id;
}

class EvaluateExpressionOutput {
  public longString $evaluated_expression;
}

class Field {
  public fieldNameString $key;
  public fieldNameString $ref_value;
  public fieldStringValue $string_value;
}

class GetPipelineDefinitionInput {
  public id $pipeline_id;
  public string $version;
}

class GetPipelineDefinitionOutput {
  public ParameterObjectList $parameter_objects;
  public ParameterValueList $parameter_values;
  public PipelineObjectList $pipeline_objects;
}

class InstanceIdentity {
  public string $document;
  public string $signature;
}

class InternalServiceError {
  public errorMessage $message;
}

class InvalidRequestException {
  public errorMessage $message;
}

class ListPipelinesInput {
  public string $marker;
}

class ListPipelinesOutput {
  public boolean $has_more_results;
  public string $marker;
  public pipelineList $pipeline_id_list;
}

class Operator {
  public OperatorType $type;
  public stringList $values;
}

class OperatorType {
}

class ParameterAttribute {
  public attributeNameString $key;
  public attributeValueString $string_value;
}

class ParameterAttributeList {
}

class ParameterObject {
  public ParameterAttributeList $attributes;
  public fieldNameString $id;
}

class ParameterObjectList {
}

class ParameterValue {
  public fieldNameString $id;
  public fieldStringValue $string_value;
}

class ParameterValueList {
}

class PipelineDeletedException {
  public errorMessage $message;
}

class PipelineDescription {
  public string $description;
  public fieldList $fields;
  public id $name;
  public id $pipeline_id;
  public tagList $tags;
}

class PipelineDescriptionList {
}

class PipelineIdName {
  public id $id;
  public id $name;
}

class PipelineNotFoundException {
  public errorMessage $message;
}

class PipelineObject {
  public fieldList $fields;
  public id $id;
  public id $name;
}

class PipelineObjectList {
}

class PipelineObjectMap {
}

class PollForTaskInput {
  public id $hostname;
  public InstanceIdentity $instance_identity;
  public string $worker_group;
}

class PollForTaskOutput {
  public TaskObject $task_object;
}

class PutPipelineDefinitionInput {
  public ParameterObjectList $parameter_objects;
  public ParameterValueList $parameter_values;
  public id $pipeline_id;
  public PipelineObjectList $pipeline_objects;
}

class PutPipelineDefinitionOutput {
  public boolean $errored;
  public ValidationErrors $validation_errors;
  public ValidationWarnings $validation_warnings;
}

class Query {
  public SelectorList $selectors;
}

class QueryObjectsInput {
  public int $limit;
  public string $marker;
  public id $pipeline_id;
  public Query $query;
  public string $sphere;
}

class QueryObjectsOutput {
  public boolean $has_more_results;
  public idList $ids;
  public string $marker;
}

class RemoveTagsInput {
  public id $pipeline_id;
  public stringList $tag_keys;
}

class RemoveTagsOutput {
}

class ReportTaskProgressInput {
  public fieldList $fields;
  public taskId $task_id;
}

class ReportTaskProgressOutput {
  public boolean $canceled;
}

class ReportTaskRunnerHeartbeatInput {
  public id $hostname;
  public id $taskrunner_id;
  public string $worker_group;
}

class ReportTaskRunnerHeartbeatOutput {
  public boolean $terminate;
}

class Selector {
  public string $field_name;
  public Operator $operator;
}

class SelectorList {
}

class SetStatusInput {
  public idList $object_ids;
  public id $pipeline_id;
  public string $status;
}

class SetTaskStatusInput {
  public string $error_id;
  public errorMessage $error_message;
  public string $error_stack_trace;
  public taskId $task_id;
  public TaskStatus $task_status;
}

class SetTaskStatusOutput {
}

class Tag {
  public tagKey $key;
  public tagValue $value;
}

class TaskNotFoundException {
  public errorMessage $message;
}

class TaskObject {
  public id $attempt_id;
  public PipelineObjectMap $objects;
  public id $pipeline_id;
  public taskId $task_id;
}

class TaskStatus {
}

class ValidatePipelineDefinitionInput {
  public ParameterObjectList $parameter_objects;
  public ParameterValueList $parameter_values;
  public id $pipeline_id;
  public PipelineObjectList $pipeline_objects;
}

class ValidatePipelineDefinitionOutput {
  public boolean $errored;
  public ValidationErrors $validation_errors;
  public ValidationWarnings $validation_warnings;
}

class ValidationError {
  public validationMessages $errors;
  public id $id;
}

class ValidationErrors {
}

class ValidationWarning {
  public id $id;
  public validationMessages $warnings;
}

class ValidationWarnings {
}

class attributeNameString {
}

class attributeValueString {
}

class boolean {
}

class cancelActive {
}

class errorMessage {
}

class fieldList {
}

class fieldNameString {
}

class fieldStringValue {
}

class id {
}

class idList {
}

class int {
}

class longString {
}

class pipelineList {
}

class string {
}

class stringList {
}

class tagKey {
}

class tagList {
}

class tagValue {
}

class taskId {
}

class timestamp {
}

class validationMessage {
}

class validationMessages {
}


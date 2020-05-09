<?hh // strict
namespace slack\aws\datapipeline;

interface  {
  public function DeletePipeline(DeletePipelineInput) Awaitable<Errors\Error>;
  public function EvaluateExpression(EvaluateExpressionInput) Awaitable<Errors\Result<EvaluateExpressionOutput>>;
  public function PutPipelineDefinition(PutPipelineDefinitionInput) Awaitable<Errors\Result<PutPipelineDefinitionOutput>>;
  public function QueryObjects(QueryObjectsInput) Awaitable<Errors\Result<QueryObjectsOutput>>;
  public function SetTaskStatus(SetTaskStatusInput) Awaitable<Errors\Result<SetTaskStatusOutput>>;
  public function AddTags(AddTagsInput) Awaitable<Errors\Result<AddTagsOutput>>;
  public function CreatePipeline(CreatePipelineInput) Awaitable<Errors\Result<CreatePipelineOutput>>;
  public function DeactivatePipeline(DeactivatePipelineInput) Awaitable<Errors\Result<DeactivatePipelineOutput>>;
  public function DescribePipelines(DescribePipelinesInput) Awaitable<Errors\Result<DescribePipelinesOutput>>;
  public function RemoveTags(RemoveTagsInput) Awaitable<Errors\Result<RemoveTagsOutput>>;
  public function ReportTaskRunnerHeartbeat(ReportTaskRunnerHeartbeatInput) Awaitable<Errors\Result<ReportTaskRunnerHeartbeatOutput>>;
  public function SetStatus(SetStatusInput) Awaitable<Errors\Error>;
  public function ValidatePipelineDefinition(ValidatePipelineDefinitionInput) Awaitable<Errors\Result<ValidatePipelineDefinitionOutput>>;
  public function ActivatePipeline(ActivatePipelineInput) Awaitable<Errors\Result<ActivatePipelineOutput>>;
  public function GetPipelineDefinition(GetPipelineDefinitionInput) Awaitable<Errors\Result<GetPipelineDefinitionOutput>>;
  public function PollForTask(PollForTaskInput) Awaitable<Errors\Result<PollForTaskOutput>>;
  public function DescribeObjects(DescribeObjectsInput) Awaitable<Errors\Result<DescribeObjectsOutput>>;
  public function ListPipelines(ListPipelinesInput) Awaitable<Errors\Result<ListPipelinesOutput>>;
  public function ReportTaskProgress(ReportTaskProgressInput) Awaitable<Errors\Result<ReportTaskProgressOutput>>;
}

class DescribeObjectsOutput {
  public boolean $has_more_results;
  public PipelineObjectList $pipeline_objects;
  public string $marker;
}

class InvalidRequestException {
  public errorMessage $message;
}

class OperatorType {
}

class PipelineObjectMap {
}

class pipelineList {
}

class timestamp {
}

class ActivatePipelineOutput {
}

class PipelineDescriptionList {
}

class PollForTaskOutput {
  public TaskObject $task_object;
}

class SetTaskStatusOutput {
}

class Tag {
  public tagKey $key;
  public tagValue $value;
}

class ParameterObject {
  public fieldNameString $id;
  public ParameterAttributeList $attributes;
}

class PipelineIdName {
  public id $name;
  public id $id;
}

class PutPipelineDefinitionOutput {
  public ValidationErrors $validation_errors;
  public ValidationWarnings $validation_warnings;
  public boolean $errored;
}

class RemoveTagsInput {
  public id $pipeline_id;
  public stringList $tag_keys;
}

class ReportTaskRunnerHeartbeatInput {
  public id $taskrunner_id;
  public string $worker_group;
  public id $hostname;
}

class SetStatusInput {
  public id $pipeline_id;
  public idList $object_ids;
  public string $status;
}

class ValidationError {
  public id $id;
  public validationMessages $errors;
}

class DescribePipelinesOutput {
  public PipelineDescriptionList $pipeline_description_list;
}

class Selector {
  public Operator $operator;
  public string $field_name;
}

class attributeNameString {
}

class string {
}

class tagList {
}

class QueryObjectsOutput {
  public idList $ids;
  public string $marker;
  public boolean $has_more_results;
}

class EvaluateExpressionInput {
  public id $pipeline_id;
  public id $object_id;
  public longString $expression;
}

class GetPipelineDefinitionOutput {
  public PipelineObjectList $pipeline_objects;
  public ParameterObjectList $parameter_objects;
  public ParameterValueList $parameter_values;
}

class Operator {
  public OperatorType $type;
  public stringList $values;
}

class PipelineDeletedException {
  public errorMessage $message;
}

class RemoveTagsOutput {
}

class ValidationWarning {
  public id $id;
  public validationMessages $warnings;
}

class attributeValueString {
}

class DescribeObjectsInput {
  public boolean $evaluate_expressions;
  public string $marker;
  public id $pipeline_id;
  public idList $object_ids;
}

class CreatePipelineInput {
  public id $name;
  public id $unique_id;
  public string $description;
  public tagList $tags;
}

class InternalServiceError {
  public errorMessage $message;
}

class ReportTaskRunnerHeartbeatOutput {
  public boolean $terminate;
}

class cancelActive {
}

class ActivatePipelineInput {
  public id $pipeline_id;
  public ParameterValueList $parameter_values;
  public timestamp $start_timestamp;
}

class ParameterObjectList {
}

class ParameterValueList {
}

class TaskObject {
  public taskId $task_id;
  public id $pipeline_id;
  public id $attempt_id;
  public PipelineObjectMap $objects;
}

class ListPipelinesOutput {
  public pipelineList $pipeline_id_list;
  public string $marker;
  public boolean $has_more_results;
}

class ParameterValue {
  public fieldNameString $id;
  public fieldStringValue $string_value;
}

class PipelineNotFoundException {
  public errorMessage $message;
}

class PutPipelineDefinitionInput {
  public id $pipeline_id;
  public PipelineObjectList $pipeline_objects;
  public ParameterObjectList $parameter_objects;
  public ParameterValueList $parameter_values;
}

class taskId {
}

class AddTagsOutput {
}

class ListPipelinesInput {
  public string $marker;
}

class PipelineDescription {
  public id $pipeline_id;
  public id $name;
  public fieldList $fields;
  public string $description;
  public tagList $tags;
}

class PipelineObject {
  public id $id;
  public id $name;
  public fieldList $fields;
}

class PipelineObjectList {
}

class ValidatePipelineDefinitionInput {
  public ParameterValueList $parameter_values;
  public id $pipeline_id;
  public PipelineObjectList $pipeline_objects;
  public ParameterObjectList $parameter_objects;
}

class errorMessage {
}

class fieldNameString {
}

class Field {
  public fieldNameString $key;
  public fieldStringValue $string_value;
  public fieldNameString $ref_value;
}

class stringList {
}

class tagValue {
}

class id {
}

class ReportTaskProgressOutput {
  public boolean $canceled;
}

class fieldStringValue {
}

class validationMessage {
}

class GetPipelineDefinitionInput {
  public id $pipeline_id;
  public string $version;
}

class DeletePipelineInput {
  public id $pipeline_id;
}

class ParameterAttribute {
  public attributeNameString $key;
  public attributeValueString $string_value;
}

class PollForTaskInput {
  public string $worker_group;
  public id $hostname;
  public InstanceIdentity $instance_identity;
}

class Query {
  public SelectorList $selectors;
}

class AddTagsInput {
  public id $pipeline_id;
  public tagList $tags;
}

class DeactivatePipelineOutput {
}

class EvaluateExpressionOutput {
  public longString $evaluated_expression;
}

class SetTaskStatusInput {
  public string $error_stack_trace;
  public taskId $task_id;
  public TaskStatus $task_status;
  public string $error_id;
  public errorMessage $error_message;
}

class longString {
}

class tagKey {
}

class DeactivatePipelineInput {
  public id $pipeline_id;
  public cancelActive $cancel_active;
}

class DescribePipelinesInput {
  public idList $pipeline_ids;
}

class QueryObjectsInput {
  public id $pipeline_id;
  public Query $query;
  public string $sphere;
  public string $marker;
  public int $limit;
}

class ReportTaskProgressInput {
  public taskId $task_id;
  public fieldList $fields;
}

class TaskStatus {
}

class ValidatePipelineDefinitionOutput {
  public boolean $errored;
  public ValidationErrors $validation_errors;
  public ValidationWarnings $validation_warnings;
}

class CreatePipelineOutput {
  public id $pipeline_id;
}

class TaskNotFoundException {
  public errorMessage $message;
}

class boolean {
}

class validationMessages {
}

class SelectorList {
}

class ValidationWarnings {
}

class idList {
}

class ValidationErrors {
}

class ParameterAttributeList {
}

class fieldList {
}

class int {
}

class InstanceIdentity {
  public string $document;
  public string $signature;
}


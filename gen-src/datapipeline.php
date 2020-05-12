<?hh // strict
namespace slack\aws\datapipeline;

interface  {
  public function ActivatePipeline(ActivatePipelineInput $in): Awaitable<\Errors\Result<ActivatePipelineOutput>>;
  public function AddTags(AddTagsInput $in): Awaitable<\Errors\Result<AddTagsOutput>>;
  public function CreatePipeline(CreatePipelineInput $in): Awaitable<\Errors\Result<CreatePipelineOutput>>;
  public function DeactivatePipeline(DeactivatePipelineInput $in): Awaitable<\Errors\Result<DeactivatePipelineOutput>>;
  public function DeletePipeline(DeletePipelineInput $in): Awaitable<\Errors\Error>;
  public function DescribeObjects(DescribeObjectsInput $in): Awaitable<\Errors\Result<DescribeObjectsOutput>>;
  public function DescribePipelines(DescribePipelinesInput $in): Awaitable<\Errors\Result<DescribePipelinesOutput>>;
  public function EvaluateExpression(EvaluateExpressionInput $in): Awaitable<\Errors\Result<EvaluateExpressionOutput>>;
  public function GetPipelineDefinition(GetPipelineDefinitionInput $in): Awaitable<\Errors\Result<GetPipelineDefinitionOutput>>;
  public function ListPipelines(ListPipelinesInput $in): Awaitable<\Errors\Result<ListPipelinesOutput>>;
  public function PollForTask(PollForTaskInput $in): Awaitable<\Errors\Result<PollForTaskOutput>>;
  public function PutPipelineDefinition(PutPipelineDefinitionInput $in): Awaitable<\Errors\Result<PutPipelineDefinitionOutput>>;
  public function QueryObjects(QueryObjectsInput $in): Awaitable<\Errors\Result<QueryObjectsOutput>>;
  public function RemoveTags(RemoveTagsInput $in): Awaitable<\Errors\Result<RemoveTagsOutput>>;
  public function ReportTaskProgress(ReportTaskProgressInput $in): Awaitable<\Errors\Result<ReportTaskProgressOutput>>;
  public function ReportTaskRunnerHeartbeat(ReportTaskRunnerHeartbeatInput $in): Awaitable<\Errors\Result<ReportTaskRunnerHeartbeatOutput>>;
  public function SetStatus(SetStatusInput $in): Awaitable<\Errors\Error>;
  public function SetTaskStatus(SetTaskStatusInput $in): Awaitable<\Errors\Result<SetTaskStatusOutput>>;
  public function ValidatePipelineDefinition(ValidatePipelineDefinitionInput $in): Awaitable<\Errors\Result<ValidatePipelineDefinitionOutput>>;
}

class ActivatePipelineInput {
  public ?ParameterValueList $parameter_values;
  public ?id $pipeline_id;
  public ?timestamp $start_timestamp;

  public function __construct(shape(
    ?'parameter_values' => ?ParameterValueList,
    ?'pipeline_id' => ?id,
    ?'start_timestamp' => ?timestamp,
  ) $s = shape()) {
    $this->parameter_values = $s['parameter_values'] ?? vec[];
    $this->pipeline_id = $s['pipeline_id'] ?? '';
    $this->start_timestamp = $s['start_timestamp'] ?? 0;
  }
}

class ActivatePipelineOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AddTagsInput {
  public ?id $pipeline_id;
  public ?tagList $tags;

  public function __construct(shape(
    ?'pipeline_id' => ?id,
    ?'tags' => ?tagList,
  ) $s = shape()) {
    $this->pipeline_id = $s['pipeline_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class AddTagsOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreatePipelineInput {
  public ?string $description;
  public ?id $name;
  public ?tagList $tags;
  public ?id $unique_id;

  public function __construct(shape(
    ?'description' => ?string,
    ?'name' => ?id,
    ?'tags' => ?tagList,
    ?'unique_id' => ?id,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->unique_id = $s['unique_id'] ?? '';
  }
}

class CreatePipelineOutput {
  public ?id $pipeline_id;

  public function __construct(shape(
    ?'pipeline_id' => ?id,
  ) $s = shape()) {
    $this->pipeline_id = $s['pipeline_id'] ?? '';
  }
}

class DeactivatePipelineInput {
  public ?cancelActive $cancel_active;
  public ?id $pipeline_id;

  public function __construct(shape(
    ?'cancel_active' => ?cancelActive,
    ?'pipeline_id' => ?id,
  ) $s = shape()) {
    $this->cancel_active = $s['cancel_active'] ?? false;
    $this->pipeline_id = $s['pipeline_id'] ?? '';
  }
}

class DeactivatePipelineOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeletePipelineInput {
  public ?id $pipeline_id;

  public function __construct(shape(
    ?'pipeline_id' => ?id,
  ) $s = shape()) {
    $this->pipeline_id = $s['pipeline_id'] ?? '';
  }
}

class DescribeObjectsInput {
  public ?boolean $evaluate_expressions;
  public ?string $marker;
  public ?idList $object_ids;
  public ?id $pipeline_id;

  public function __construct(shape(
    ?'evaluate_expressions' => ?boolean,
    ?'marker' => ?string,
    ?'object_ids' => ?idList,
    ?'pipeline_id' => ?id,
  ) $s = shape()) {
    $this->evaluate_expressions = $s['evaluate_expressions'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->object_ids = $s['object_ids'] ?? vec[];
    $this->pipeline_id = $s['pipeline_id'] ?? '';
  }
}

class DescribeObjectsOutput {
  public ?boolean $has_more_results;
  public ?string $marker;
  public ?PipelineObjectList $pipeline_objects;

  public function __construct(shape(
    ?'has_more_results' => ?boolean,
    ?'marker' => ?string,
    ?'pipeline_objects' => ?PipelineObjectList,
  ) $s = shape()) {
    $this->has_more_results = $s['has_more_results'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->pipeline_objects = $s['pipeline_objects'] ?? vec[];
  }
}

class DescribePipelinesInput {
  public ?idList $pipeline_ids;

  public function __construct(shape(
    ?'pipeline_ids' => ?idList,
  ) $s = shape()) {
    $this->pipeline_ids = $s['pipeline_ids'] ?? vec[];
  }
}

class DescribePipelinesOutput {
  public ?PipelineDescriptionList $pipeline_description_list;

  public function __construct(shape(
    ?'pipeline_description_list' => ?PipelineDescriptionList,
  ) $s = shape()) {
    $this->pipeline_description_list = $s['pipeline_description_list'] ?? vec[];
  }
}

class EvaluateExpressionInput {
  public ?longString $expression;
  public ?id $object_id;
  public ?id $pipeline_id;

  public function __construct(shape(
    ?'expression' => ?longString,
    ?'object_id' => ?id,
    ?'pipeline_id' => ?id,
  ) $s = shape()) {
    $this->expression = $s['expression'] ?? '';
    $this->object_id = $s['object_id'] ?? '';
    $this->pipeline_id = $s['pipeline_id'] ?? '';
  }
}

class EvaluateExpressionOutput {
  public ?longString $evaluated_expression;

  public function __construct(shape(
    ?'evaluated_expression' => ?longString,
  ) $s = shape()) {
    $this->evaluated_expression = $s['evaluated_expression'] ?? '';
  }
}

class Field {
  public ?fieldNameString $key;
  public ?fieldNameString $ref_value;
  public ?fieldStringValue $string_value;

  public function __construct(shape(
    ?'key' => ?fieldNameString,
    ?'ref_value' => ?fieldNameString,
    ?'string_value' => ?fieldStringValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->ref_value = $s['ref_value'] ?? '';
    $this->string_value = $s['string_value'] ?? '';
  }
}

class GetPipelineDefinitionInput {
  public ?id $pipeline_id;
  public ?string $version;

  public function __construct(shape(
    ?'pipeline_id' => ?id,
    ?'version' => ?string,
  ) $s = shape()) {
    $this->pipeline_id = $s['pipeline_id'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetPipelineDefinitionOutput {
  public ?ParameterObjectList $parameter_objects;
  public ?ParameterValueList $parameter_values;
  public ?PipelineObjectList $pipeline_objects;

  public function __construct(shape(
    ?'parameter_objects' => ?ParameterObjectList,
    ?'parameter_values' => ?ParameterValueList,
    ?'pipeline_objects' => ?PipelineObjectList,
  ) $s = shape()) {
    $this->parameter_objects = $s['parameter_objects'] ?? vec[];
    $this->parameter_values = $s['parameter_values'] ?? vec[];
    $this->pipeline_objects = $s['pipeline_objects'] ?? vec[];
  }
}

class InstanceIdentity {
  public ?string $document;
  public ?string $signature;

  public function __construct(shape(
    ?'document' => ?string,
    ?'signature' => ?string,
  ) $s = shape()) {
    $this->document = $s['document'] ?? '';
    $this->signature = $s['signature'] ?? '';
  }
}

class InternalServiceError {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidRequestException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListPipelinesInput {
  public ?string $marker;

  public function __construct(shape(
    ?'marker' => ?string,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
  }
}

class ListPipelinesOutput {
  public ?boolean $has_more_results;
  public ?string $marker;
  public ?pipelineList $pipeline_id_list;

  public function __construct(shape(
    ?'has_more_results' => ?boolean,
    ?'marker' => ?string,
    ?'pipeline_id_list' => ?pipelineList,
  ) $s = shape()) {
    $this->has_more_results = $s['has_more_results'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->pipeline_id_list = $s['pipeline_id_list'] ?? vec[];
  }
}

class Operator {
  public ?OperatorType $type;
  public ?stringList $values;

  public function __construct(shape(
    ?'type' => ?OperatorType,
    ?'values' => ?stringList,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type OperatorType = string;

class ParameterAttribute {
  public ?attributeNameString $key;
  public ?attributeValueString $string_value;

  public function __construct(shape(
    ?'key' => ?attributeNameString,
    ?'string_value' => ?attributeValueString,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->string_value = $s['string_value'] ?? '';
  }
}

type ParameterAttributeList = vec<ParameterAttribute>;

class ParameterObject {
  public ?ParameterAttributeList $attributes;
  public ?fieldNameString $id;

  public function __construct(shape(
    ?'attributes' => ?ParameterAttributeList,
    ?'id' => ?fieldNameString,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->id = $s['id'] ?? '';
  }
}

type ParameterObjectList = vec<ParameterObject>;

class ParameterValue {
  public ?fieldNameString $id;
  public ?fieldStringValue $string_value;

  public function __construct(shape(
    ?'id' => ?fieldNameString,
    ?'string_value' => ?fieldStringValue,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->string_value = $s['string_value'] ?? '';
  }
}

type ParameterValueList = vec<ParameterValue>;

class PipelineDeletedException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class PipelineDescription {
  public ?string $description;
  public ?fieldList $fields;
  public ?id $name;
  public ?id $pipeline_id;
  public ?tagList $tags;

  public function __construct(shape(
    ?'description' => ?string,
    ?'fields' => ?fieldList,
    ?'name' => ?id,
    ?'pipeline_id' => ?id,
    ?'tags' => ?tagList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->fields = $s['fields'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->pipeline_id = $s['pipeline_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type PipelineDescriptionList = vec<PipelineDescription>;

class PipelineIdName {
  public ?id $id;
  public ?id $name;

  public function __construct(shape(
    ?'id' => ?id,
    ?'name' => ?id,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class PipelineNotFoundException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class PipelineObject {
  public ?fieldList $fields;
  public ?id $id;
  public ?id $name;

  public function __construct(shape(
    ?'fields' => ?fieldList,
    ?'id' => ?id,
    ?'name' => ?id,
  ) $s = shape()) {
    $this->fields = $s['fields'] ?? vec[];
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type PipelineObjectList = vec<PipelineObject>;

type PipelineObjectMap = dict<id, PipelineObject>;

class PollForTaskInput {
  public ?id $hostname;
  public ?InstanceIdentity $instance_identity;
  public ?string $worker_group;

  public function __construct(shape(
    ?'hostname' => ?id,
    ?'instance_identity' => ?InstanceIdentity,
    ?'worker_group' => ?string,
  ) $s = shape()) {
    $this->hostname = $s['hostname'] ?? '';
    $this->instance_identity = $s['instance_identity'] ?? null;
    $this->worker_group = $s['worker_group'] ?? '';
  }
}

class PollForTaskOutput {
  public ?TaskObject $task_object;

  public function __construct(shape(
    ?'task_object' => ?TaskObject,
  ) $s = shape()) {
    $this->task_object = $s['task_object'] ?? null;
  }
}

class PutPipelineDefinitionInput {
  public ?ParameterObjectList $parameter_objects;
  public ?ParameterValueList $parameter_values;
  public ?id $pipeline_id;
  public ?PipelineObjectList $pipeline_objects;

  public function __construct(shape(
    ?'parameter_objects' => ?ParameterObjectList,
    ?'parameter_values' => ?ParameterValueList,
    ?'pipeline_id' => ?id,
    ?'pipeline_objects' => ?PipelineObjectList,
  ) $s = shape()) {
    $this->parameter_objects = $s['parameter_objects'] ?? vec[];
    $this->parameter_values = $s['parameter_values'] ?? vec[];
    $this->pipeline_id = $s['pipeline_id'] ?? '';
    $this->pipeline_objects = $s['pipeline_objects'] ?? vec[];
  }
}

class PutPipelineDefinitionOutput {
  public ?boolean $errored;
  public ?ValidationErrors $validation_errors;
  public ?ValidationWarnings $validation_warnings;

  public function __construct(shape(
    ?'errored' => ?boolean,
    ?'validation_errors' => ?ValidationErrors,
    ?'validation_warnings' => ?ValidationWarnings,
  ) $s = shape()) {
    $this->errored = $s['errored'] ?? false;
    $this->validation_errors = $s['validation_errors'] ?? vec[];
    $this->validation_warnings = $s['validation_warnings'] ?? vec[];
  }
}

class Query {
  public ?SelectorList $selectors;

  public function __construct(shape(
    ?'selectors' => ?SelectorList,
  ) $s = shape()) {
    $this->selectors = $s['selectors'] ?? vec[];
  }
}

class QueryObjectsInput {
  public ?int $limit;
  public ?string $marker;
  public ?id $pipeline_id;
  public ?Query $query;
  public ?string $sphere;

  public function __construct(shape(
    ?'limit' => ?int,
    ?'marker' => ?string,
    ?'pipeline_id' => ?id,
    ?'query' => ?Query,
    ?'sphere' => ?string,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->marker = $s['marker'] ?? '';
    $this->pipeline_id = $s['pipeline_id'] ?? '';
    $this->query = $s['query'] ?? null;
    $this->sphere = $s['sphere'] ?? '';
  }
}

class QueryObjectsOutput {
  public ?boolean $has_more_results;
  public ?idList $ids;
  public ?string $marker;

  public function __construct(shape(
    ?'has_more_results' => ?boolean,
    ?'ids' => ?idList,
    ?'marker' => ?string,
  ) $s = shape()) {
    $this->has_more_results = $s['has_more_results'] ?? false;
    $this->ids = $s['ids'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class RemoveTagsInput {
  public ?id $pipeline_id;
  public ?stringList $tag_keys;

  public function __construct(shape(
    ?'pipeline_id' => ?id,
    ?'tag_keys' => ?stringList,
  ) $s = shape()) {
    $this->pipeline_id = $s['pipeline_id'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class RemoveTagsOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ReportTaskProgressInput {
  public ?fieldList $fields;
  public ?taskId $task_id;

  public function __construct(shape(
    ?'fields' => ?fieldList,
    ?'task_id' => ?taskId,
  ) $s = shape()) {
    $this->fields = $s['fields'] ?? vec[];
    $this->task_id = $s['task_id'] ?? '';
  }
}

class ReportTaskProgressOutput {
  public ?boolean $canceled;

  public function __construct(shape(
    ?'canceled' => ?boolean,
  ) $s = shape()) {
    $this->canceled = $s['canceled'] ?? false;
  }
}

class ReportTaskRunnerHeartbeatInput {
  public ?id $hostname;
  public ?id $taskrunner_id;
  public ?string $worker_group;

  public function __construct(shape(
    ?'hostname' => ?id,
    ?'taskrunner_id' => ?id,
    ?'worker_group' => ?string,
  ) $s = shape()) {
    $this->hostname = $s['hostname'] ?? '';
    $this->taskrunner_id = $s['taskrunner_id'] ?? '';
    $this->worker_group = $s['worker_group'] ?? '';
  }
}

class ReportTaskRunnerHeartbeatOutput {
  public ?boolean $terminate;

  public function __construct(shape(
    ?'terminate' => ?boolean,
  ) $s = shape()) {
    $this->terminate = $s['terminate'] ?? false;
  }
}

class Selector {
  public ?string $field_name;
  public ?Operator $operator;

  public function __construct(shape(
    ?'field_name' => ?string,
    ?'operator' => ?Operator,
  ) $s = shape()) {
    $this->field_name = $s['field_name'] ?? '';
    $this->operator = $s['operator'] ?? null;
  }
}

type SelectorList = vec<Selector>;

class SetStatusInput {
  public ?idList $object_ids;
  public ?id $pipeline_id;
  public ?string $status;

  public function __construct(shape(
    ?'object_ids' => ?idList,
    ?'pipeline_id' => ?id,
    ?'status' => ?string,
  ) $s = shape()) {
    $this->object_ids = $s['object_ids'] ?? vec[];
    $this->pipeline_id = $s['pipeline_id'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class SetTaskStatusInput {
  public ?string $error_id;
  public ?errorMessage $error_message;
  public ?string $error_stack_trace;
  public ?taskId $task_id;
  public ?TaskStatus $task_status;

  public function __construct(shape(
    ?'error_id' => ?string,
    ?'error_message' => ?errorMessage,
    ?'error_stack_trace' => ?string,
    ?'task_id' => ?taskId,
    ?'task_status' => ?TaskStatus,
  ) $s = shape()) {
    $this->error_id = $s['error_id'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->error_stack_trace = $s['error_stack_trace'] ?? '';
    $this->task_id = $s['task_id'] ?? '';
    $this->task_status = $s['task_status'] ?? '';
  }
}

class SetTaskStatusOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Tag {
  public ?tagKey $key;
  public ?tagValue $value;

  public function __construct(shape(
    ?'key' => ?tagKey,
    ?'value' => ?tagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class TaskNotFoundException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TaskObject {
  public ?id $attempt_id;
  public ?PipelineObjectMap $objects;
  public ?id $pipeline_id;
  public ?taskId $task_id;

  public function __construct(shape(
    ?'attempt_id' => ?id,
    ?'objects' => ?PipelineObjectMap,
    ?'pipeline_id' => ?id,
    ?'task_id' => ?taskId,
  ) $s = shape()) {
    $this->attempt_id = $s['attempt_id'] ?? '';
    $this->objects = $s['objects'] ?? dict[];
    $this->pipeline_id = $s['pipeline_id'] ?? '';
    $this->task_id = $s['task_id'] ?? '';
  }
}

type TaskStatus = string;

class ValidatePipelineDefinitionInput {
  public ?ParameterObjectList $parameter_objects;
  public ?ParameterValueList $parameter_values;
  public ?id $pipeline_id;
  public ?PipelineObjectList $pipeline_objects;

  public function __construct(shape(
    ?'parameter_objects' => ?ParameterObjectList,
    ?'parameter_values' => ?ParameterValueList,
    ?'pipeline_id' => ?id,
    ?'pipeline_objects' => ?PipelineObjectList,
  ) $s = shape()) {
    $this->parameter_objects = $s['parameter_objects'] ?? vec[];
    $this->parameter_values = $s['parameter_values'] ?? vec[];
    $this->pipeline_id = $s['pipeline_id'] ?? '';
    $this->pipeline_objects = $s['pipeline_objects'] ?? vec[];
  }
}

class ValidatePipelineDefinitionOutput {
  public ?boolean $errored;
  public ?ValidationErrors $validation_errors;
  public ?ValidationWarnings $validation_warnings;

  public function __construct(shape(
    ?'errored' => ?boolean,
    ?'validation_errors' => ?ValidationErrors,
    ?'validation_warnings' => ?ValidationWarnings,
  ) $s = shape()) {
    $this->errored = $s['errored'] ?? false;
    $this->validation_errors = $s['validation_errors'] ?? vec[];
    $this->validation_warnings = $s['validation_warnings'] ?? vec[];
  }
}

class ValidationError {
  public ?validationMessages $errors;
  public ?id $id;

  public function __construct(shape(
    ?'errors' => ?validationMessages,
    ?'id' => ?id,
  ) $s = shape()) {
    $this->errors = $s['errors'] ?? vec[];
    $this->id = $s['id'] ?? '';
  }
}

type ValidationErrors = vec<ValidationError>;

class ValidationWarning {
  public ?id $id;
  public ?validationMessages $warnings;

  public function __construct(shape(
    ?'id' => ?id,
    ?'warnings' => ?validationMessages,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->warnings = $s['warnings'] ?? vec[];
  }
}

type ValidationWarnings = vec<ValidationWarning>;

type attributeNameString = string;

type attributeValueString = string;

type boolean = bool;

type cancelActive = bool;

type errorMessage = string;

type fieldList = vec<Field>;

type fieldNameString = string;

type fieldStringValue = string;

type id = string;

type idList = vec<id>;

type int = int;

type longString = string;

type pipelineList = vec<PipelineIdName>;

type string = string;

type stringList = vec<string>;

type tagKey = string;

type tagList = vec<Tag>;

type tagValue = string;

type taskId = string;

type timestamp = int;

type validationMessage = string;

type validationMessages = vec<validationMessage>;


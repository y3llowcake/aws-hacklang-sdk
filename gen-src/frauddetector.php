<?hh // strict
namespace slack\aws\frauddetector;

interface FraudDetector {
  public function BatchCreateVariable(BatchCreateVariableRequest $in): Awaitable<\Errors\Result<BatchCreateVariableResult>>;
  public function BatchGetVariable(BatchGetVariableRequest $in): Awaitable<\Errors\Result<BatchGetVariableResult>>;
  public function CreateDetectorVersion(CreateDetectorVersionRequest $in): Awaitable<\Errors\Result<CreateDetectorVersionResult>>;
  public function CreateModelVersion(CreateModelVersionRequest $in): Awaitable<\Errors\Result<CreateModelVersionResult>>;
  public function CreateRule(CreateRuleRequest $in): Awaitable<\Errors\Result<CreateRuleResult>>;
  public function CreateVariable(CreateVariableRequest $in): Awaitable<\Errors\Result<CreateVariableResult>>;
  public function DeleteDetector(DeleteDetectorRequest $in): Awaitable<\Errors\Result<DeleteDetectorResult>>;
  public function DeleteDetectorVersion(DeleteDetectorVersionRequest $in): Awaitable<\Errors\Result<DeleteDetectorVersionResult>>;
  public function DeleteEvent(DeleteEventRequest $in): Awaitable<\Errors\Result<DeleteEventResult>>;
  public function DeleteRuleVersion(DeleteRuleVersionRequest $in): Awaitable<\Errors\Result<DeleteRuleVersionResult>>;
  public function DescribeDetector(DescribeDetectorRequest $in): Awaitable<\Errors\Result<DescribeDetectorResult>>;
  public function DescribeModelVersions(DescribeModelVersionsRequest $in): Awaitable<\Errors\Result<DescribeModelVersionsResult>>;
  public function GetDetectorVersion(GetDetectorVersionRequest $in): Awaitable<\Errors\Result<GetDetectorVersionResult>>;
  public function GetDetectors(GetDetectorsRequest $in): Awaitable<\Errors\Result<GetDetectorsResult>>;
  public function GetExternalModels(GetExternalModelsRequest $in): Awaitable<\Errors\Result<GetExternalModelsResult>>;
  public function GetModelVersion(GetModelVersionRequest $in): Awaitable<\Errors\Result<GetModelVersionResult>>;
  public function GetModels(GetModelsRequest $in): Awaitable<\Errors\Result<GetModelsResult>>;
  public function GetOutcomes(GetOutcomesRequest $in): Awaitable<\Errors\Result<GetOutcomesResult>>;
  public function GetPrediction(GetPredictionRequest $in): Awaitable<\Errors\Result<GetPredictionResult>>;
  public function GetRules(GetRulesRequest $in): Awaitable<\Errors\Result<GetRulesResult>>;
  public function GetVariables(GetVariablesRequest $in): Awaitable<\Errors\Result<GetVariablesResult>>;
  public function PutDetector(PutDetectorRequest $in): Awaitable<\Errors\Result<PutDetectorResult>>;
  public function PutExternalModel(PutExternalModelRequest $in): Awaitable<\Errors\Result<PutExternalModelResult>>;
  public function PutModel(PutModelRequest $in): Awaitable<\Errors\Result<PutModelResult>>;
  public function PutOutcome(PutOutcomeRequest $in): Awaitable<\Errors\Result<PutOutcomeResult>>;
  public function UpdateDetectorVersion(UpdateDetectorVersionRequest $in): Awaitable<\Errors\Result<UpdateDetectorVersionResult>>;
  public function UpdateDetectorVersionMetadata(UpdateDetectorVersionMetadataRequest $in): Awaitable<\Errors\Result<UpdateDetectorVersionMetadataResult>>;
  public function UpdateDetectorVersionStatus(UpdateDetectorVersionStatusRequest $in): Awaitable<\Errors\Result<UpdateDetectorVersionStatusResult>>;
  public function UpdateModelVersion(UpdateModelVersionRequest $in): Awaitable<\Errors\Result<UpdateModelVersionResult>>;
  public function UpdateRuleMetadata(UpdateRuleMetadataRequest $in): Awaitable<\Errors\Result<UpdateRuleMetadataResult>>;
  public function UpdateRuleVersion(UpdateRuleVersionRequest $in): Awaitable<\Errors\Result<UpdateRuleVersionResult>>;
  public function UpdateVariable(UpdateVariableRequest $in): Awaitable<\Errors\Result<UpdateVariableResult>>;
}

class BatchCreateVariableError {
  public ?integer $code;
  public ?string $message;
  public ?string $name;

  public function __construct(shape(
    ?'code' => ?integer,
    ?'message' => ?string,
    ?'name' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? 0;
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type BatchCreateVariableErrorList = vec<BatchCreateVariableError>;

class BatchCreateVariableRequest {
  public ?VariableEntryList $variable_entries;

  public function __construct(shape(
    ?'variable_entries' => ?VariableEntryList,
  ) $s = shape()) {
    $this->variable_entries = $s['variable_entries'] ?? vec[];
  }
}

class BatchCreateVariableResult {
  public ?BatchCreateVariableErrorList $errors;

  public function __construct(shape(
    ?'errors' => ?BatchCreateVariableErrorList,
  ) $s = shape()) {
    $this->errors = $s['errors'] ?? vec[];
  }
}

class BatchGetVariableError {
  public ?integer $code;
  public ?string $message;
  public ?string $name;

  public function __construct(shape(
    ?'code' => ?integer,
    ?'message' => ?string,
    ?'name' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? 0;
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type BatchGetVariableErrorList = vec<BatchGetVariableError>;

class BatchGetVariableRequest {
  public ?NameList $names;

  public function __construct(shape(
    ?'names' => ?NameList,
  ) $s = shape()) {
    $this->names = $s['names'] ?? vec[];
  }
}

class BatchGetVariableResult {
  public ?BatchGetVariableErrorList $errors;
  public ?VariableList $variables;

  public function __construct(shape(
    ?'errors' => ?BatchGetVariableErrorList,
    ?'variables' => ?VariableList,
  ) $s = shape()) {
    $this->errors = $s['errors'] ?? vec[];
    $this->variables = $s['variables'] ?? vec[];
  }
}

class ConflictException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CreateDetectorVersionRequest {
  public ?description $description;
  public ?identifier $detector_id;
  public ?ListOfStrings $external_model_endpoints;
  public ?ListOfModelVersions $model_versions;
  public ?RuleExecutionMode $rule_execution_mode;
  public ?RuleList $rules;

  public function __construct(shape(
    ?'description' => ?description,
    ?'detector_id' => ?identifier,
    ?'external_model_endpoints' => ?ListOfStrings,
    ?'model_versions' => ?ListOfModelVersions,
    ?'rule_execution_mode' => ?RuleExecutionMode,
    ?'rules' => ?RuleList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->detector_id = $s['detector_id'] ?? '';
    $this->external_model_endpoints = $s['external_model_endpoints'] ?? vec[];
    $this->model_versions = $s['model_versions'] ?? vec[];
    $this->rule_execution_mode = $s['rule_execution_mode'] ?? '';
    $this->rules = $s['rules'] ?? vec[];
  }
}

class CreateDetectorVersionResult {
  public ?identifier $detector_id;
  public ?nonEmptyString $detector_version_id;
  public ?DetectorVersionStatus $status;

  public function __construct(shape(
    ?'detector_id' => ?identifier,
    ?'detector_version_id' => ?nonEmptyString,
    ?'status' => ?DetectorVersionStatus,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->detector_version_id = $s['detector_version_id'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class CreateModelVersionRequest {
  public ?description $description;
  public ?identifier $model_id;
  public ?ModelTypeEnum $model_type;

  public function __construct(shape(
    ?'description' => ?description,
    ?'model_id' => ?identifier,
    ?'model_type' => ?ModelTypeEnum,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->model_id = $s['model_id'] ?? '';
    $this->model_type = $s['model_type'] ?? '';
  }
}

class CreateModelVersionResult {
  public ?identifier $model_id;
  public ?ModelTypeEnum $model_type;
  public ?nonEmptyString $model_version_number;
  public ?string $status;

  public function __construct(shape(
    ?'model_id' => ?identifier,
    ?'model_type' => ?ModelTypeEnum,
    ?'model_version_number' => ?nonEmptyString,
    ?'status' => ?string,
  ) $s = shape()) {
    $this->model_id = $s['model_id'] ?? '';
    $this->model_type = $s['model_type'] ?? '';
    $this->model_version_number = $s['model_version_number'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class CreateRuleRequest {
  public ?description $description;
  public ?identifier $detector_id;
  public ?ruleExpression $expression;
  public ?Language $language;
  public ?NonEmptyListOfStrings $outcomes;
  public ?identifier $rule_id;

  public function __construct(shape(
    ?'description' => ?description,
    ?'detector_id' => ?identifier,
    ?'expression' => ?ruleExpression,
    ?'language' => ?Language,
    ?'outcomes' => ?NonEmptyListOfStrings,
    ?'rule_id' => ?identifier,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->detector_id = $s['detector_id'] ?? '';
    $this->expression = $s['expression'] ?? '';
    $this->language = $s['language'] ?? '';
    $this->outcomes = $s['outcomes'] ?? vec[];
    $this->rule_id = $s['rule_id'] ?? '';
  }
}

class CreateRuleResult {
  public ?Rule $rule;

  public function __construct(shape(
    ?'rule' => ?Rule,
  ) $s = shape()) {
    $this->rule = $s['rule'] ?? null;
  }
}

class CreateVariableRequest {
  public ?DataSource $data_source;
  public ?DataType $data_type;
  public ?string $default_value;
  public ?string $description;
  public ?string $name;
  public ?string $variable_type;

  public function __construct(shape(
    ?'data_source' => ?DataSource,
    ?'data_type' => ?DataType,
    ?'default_value' => ?string,
    ?'description' => ?string,
    ?'name' => ?string,
    ?'variable_type' => ?string,
  ) $s = shape()) {
    $this->data_source = $s['data_source'] ?? '';
    $this->data_type = $s['data_type'] ?? '';
    $this->default_value = $s['default_value'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->variable_type = $s['variable_type'] ?? '';
  }
}

class CreateVariableResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type CsvIndexToVariableMap = dict<string, string>;

type DataSource = string;

type DataType = string;

class DeleteDetectorRequest {
  public ?identifier $detector_id;

  public function __construct(shape(
    ?'detector_id' => ?identifier,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class DeleteDetectorResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDetectorVersionRequest {
  public ?identifier $detector_id;
  public ?nonEmptyString $detector_version_id;

  public function __construct(shape(
    ?'detector_id' => ?identifier,
    ?'detector_version_id' => ?nonEmptyString,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->detector_version_id = $s['detector_version_id'] ?? '';
  }
}

class DeleteDetectorVersionResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteEventRequest {
  public ?string $event_id;

  public function __construct(shape(
    ?'event_id' => ?string,
  ) $s = shape()) {
    $this->event_id = $s['event_id'] ?? '';
  }
}

class DeleteEventResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRuleVersionRequest {
  public ?identifier $detector_id;
  public ?identifier $rule_id;
  public ?nonEmptyString $rule_version;

  public function __construct(shape(
    ?'detector_id' => ?identifier,
    ?'rule_id' => ?identifier,
    ?'rule_version' => ?nonEmptyString,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->rule_id = $s['rule_id'] ?? '';
    $this->rule_version = $s['rule_version'] ?? '';
  }
}

class DeleteRuleVersionResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeDetectorRequest {
  public ?identifier $detector_id;
  public ?DetectorVersionMaxResults $max_results;
  public ?string $next_token;

  public function __construct(shape(
    ?'detector_id' => ?identifier,
    ?'max_results' => ?DetectorVersionMaxResults,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeDetectorResult {
  public ?identifier $detector_id;
  public ?DetectorVersionSummaryList $detector_version_summaries;
  public ?string $next_token;

  public function __construct(shape(
    ?'detector_id' => ?identifier,
    ?'detector_version_summaries' => ?DetectorVersionSummaryList,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->detector_version_summaries = $s['detector_version_summaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeModelVersionsRequest {
  public ?MaxResults $max_results;
  public ?identifier $model_id;
  public ?ModelTypeEnum $model_type;
  public ?nonEmptyString $model_version_number;
  public ?string $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'model_id' => ?identifier,
    ?'model_type' => ?ModelTypeEnum,
    ?'model_version_number' => ?nonEmptyString,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->model_id = $s['model_id'] ?? '';
    $this->model_type = $s['model_type'] ?? '';
    $this->model_version_number = $s['model_version_number'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeModelVersionsResult {
  public ?ModelVersionDetailList $model_version_details;
  public ?string $next_token;

  public function __construct(shape(
    ?'model_version_details' => ?ModelVersionDetailList,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->model_version_details = $s['model_version_details'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class Detector {
  public ?time $created_time;
  public ?description $description;
  public ?identifier $detector_id;
  public ?time $last_updated_time;

  public function __construct(shape(
    ?'created_time' => ?time,
    ?'description' => ?description,
    ?'detector_id' => ?identifier,
    ?'last_updated_time' => ?time,
  ) $s = shape()) {
    $this->created_time = $s['created_time'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->detector_id = $s['detector_id'] ?? '';
    $this->last_updated_time = $s['last_updated_time'] ?? '';
  }
}

type DetectorList = vec<Detector>;

type DetectorVersionMaxResults = int;

type DetectorVersionStatus = string;

class DetectorVersionSummary {
  public ?description $description;
  public ?nonEmptyString $detector_version_id;
  public ?time $last_updated_time;
  public ?DetectorVersionStatus $status;

  public function __construct(shape(
    ?'description' => ?description,
    ?'detector_version_id' => ?nonEmptyString,
    ?'last_updated_time' => ?time,
    ?'status' => ?DetectorVersionStatus,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->detector_version_id = $s['detector_version_id'] ?? '';
    $this->last_updated_time = $s['last_updated_time'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type DetectorVersionSummaryList = vec<DetectorVersionSummary>;

type DetectorsMaxResults = int;

type EventAttributeMap = dict<attributeKey, attributeValue>;

class ExternalModel {
  public ?time $created_time;
  public ?ModelInputConfiguration $input_configuration;
  public ?time $last_updated_time;
  public ?string $model_endpoint;
  public ?ModelEndpointStatus $model_endpoint_status;
  public ?ModelSource $model_source;
  public ?ModelOutputConfiguration $output_configuration;
  public ?Role $role;

  public function __construct(shape(
    ?'created_time' => ?time,
    ?'input_configuration' => ?ModelInputConfiguration,
    ?'last_updated_time' => ?time,
    ?'model_endpoint' => ?string,
    ?'model_endpoint_status' => ?ModelEndpointStatus,
    ?'model_source' => ?ModelSource,
    ?'output_configuration' => ?ModelOutputConfiguration,
    ?'role' => ?Role,
  ) $s = shape()) {
    $this->created_time = $s['created_time'] ?? '';
    $this->input_configuration = $s['input_configuration'] ?? null;
    $this->last_updated_time = $s['last_updated_time'] ?? '';
    $this->model_endpoint = $s['model_endpoint'] ?? '';
    $this->model_endpoint_status = $s['model_endpoint_status'] ?? '';
    $this->model_source = $s['model_source'] ?? '';
    $this->output_configuration = $s['output_configuration'] ?? null;
    $this->role = $s['role'] ?? null;
  }
}

type ExternalModelEndpointDataBlobMap = dict<string, ModelEndpointDataBlob>;

type ExternalModelList = vec<ExternalModel>;

type ExternalModelsMaxResults = int;

class GetDetectorVersionRequest {
  public ?identifier $detector_id;
  public ?nonEmptyString $detector_version_id;

  public function __construct(shape(
    ?'detector_id' => ?identifier,
    ?'detector_version_id' => ?nonEmptyString,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->detector_version_id = $s['detector_version_id'] ?? '';
  }
}

class GetDetectorVersionResult {
  public ?time $created_time;
  public ?description $description;
  public ?identifier $detector_id;
  public ?nonEmptyString $detector_version_id;
  public ?ListOfStrings $external_model_endpoints;
  public ?time $last_updated_time;
  public ?ListOfModelVersions $model_versions;
  public ?RuleExecutionMode $rule_execution_mode;
  public ?RuleList $rules;
  public ?DetectorVersionStatus $status;

  public function __construct(shape(
    ?'created_time' => ?time,
    ?'description' => ?description,
    ?'detector_id' => ?identifier,
    ?'detector_version_id' => ?nonEmptyString,
    ?'external_model_endpoints' => ?ListOfStrings,
    ?'last_updated_time' => ?time,
    ?'model_versions' => ?ListOfModelVersions,
    ?'rule_execution_mode' => ?RuleExecutionMode,
    ?'rules' => ?RuleList,
    ?'status' => ?DetectorVersionStatus,
  ) $s = shape()) {
    $this->created_time = $s['created_time'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->detector_id = $s['detector_id'] ?? '';
    $this->detector_version_id = $s['detector_version_id'] ?? '';
    $this->external_model_endpoints = $s['external_model_endpoints'] ?? vec[];
    $this->last_updated_time = $s['last_updated_time'] ?? '';
    $this->model_versions = $s['model_versions'] ?? vec[];
    $this->rule_execution_mode = $s['rule_execution_mode'] ?? '';
    $this->rules = $s['rules'] ?? vec[];
    $this->status = $s['status'] ?? '';
  }
}

class GetDetectorsRequest {
  public ?identifier $detector_id;
  public ?DetectorsMaxResults $max_results;
  public ?string $next_token;

  public function __construct(shape(
    ?'detector_id' => ?identifier,
    ?'max_results' => ?DetectorsMaxResults,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetDetectorsResult {
  public ?DetectorList $detectors;
  public ?string $next_token;

  public function __construct(shape(
    ?'detectors' => ?DetectorList,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->detectors = $s['detectors'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetExternalModelsRequest {
  public ?ExternalModelsMaxResults $max_results;
  public ?string $model_endpoint;
  public ?string $next_token;

  public function __construct(shape(
    ?'max_results' => ?ExternalModelsMaxResults,
    ?'model_endpoint' => ?string,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->model_endpoint = $s['model_endpoint'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetExternalModelsResult {
  public ?ExternalModelList $external_models;
  public ?string $next_token;

  public function __construct(shape(
    ?'external_models' => ?ExternalModelList,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->external_models = $s['external_models'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetModelVersionRequest {
  public ?identifier $model_id;
  public ?ModelTypeEnum $model_type;
  public ?nonEmptyString $model_version_number;

  public function __construct(shape(
    ?'model_id' => ?identifier,
    ?'model_type' => ?ModelTypeEnum,
    ?'model_version_number' => ?nonEmptyString,
  ) $s = shape()) {
    $this->model_id = $s['model_id'] ?? '';
    $this->model_type = $s['model_type'] ?? '';
    $this->model_version_number = $s['model_version_number'] ?? '';
  }
}

class GetModelVersionResult {
  public ?description $description;
  public ?identifier $model_id;
  public ?ModelTypeEnum $model_type;
  public ?nonEmptyString $model_version_number;
  public ?string $status;

  public function __construct(shape(
    ?'description' => ?description,
    ?'model_id' => ?identifier,
    ?'model_type' => ?ModelTypeEnum,
    ?'model_version_number' => ?nonEmptyString,
    ?'status' => ?string,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->model_id = $s['model_id'] ?? '';
    $this->model_type = $s['model_type'] ?? '';
    $this->model_version_number = $s['model_version_number'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class GetModelsRequest {
  public ?MaxResults $max_results;
  public ?identifier $model_id;
  public ?ModelTypeEnum $model_type;
  public ?string $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'model_id' => ?identifier,
    ?'model_type' => ?ModelTypeEnum,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->model_id = $s['model_id'] ?? '';
    $this->model_type = $s['model_type'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetModelsResult {
  public ?ModelList $models;
  public ?string $next_token;

  public function __construct(shape(
    ?'models' => ?ModelList,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->models = $s['models'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetOutcomesRequest {
  public ?OutcomesMaxResults $max_results;
  public ?identifier $name;
  public ?string $next_token;

  public function __construct(shape(
    ?'max_results' => ?OutcomesMaxResults,
    ?'name' => ?identifier,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetOutcomesResult {
  public ?string $next_token;
  public ?OutcomeList $outcomes;

  public function __construct(shape(
    ?'next_token' => ?string,
    ?'outcomes' => ?OutcomeList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->outcomes = $s['outcomes'] ?? vec[];
  }
}

class GetPredictionRequest {
  public ?string $detector_id;
  public ?string $detector_version_id;
  public ?EventAttributeMap $event_attributes;
  public ?string $event_id;
  public ?ExternalModelEndpointDataBlobMap $external_model_endpoint_data_blobs;

  public function __construct(shape(
    ?'detector_id' => ?string,
    ?'detector_version_id' => ?string,
    ?'event_attributes' => ?EventAttributeMap,
    ?'event_id' => ?string,
    ?'external_model_endpoint_data_blobs' => ?ExternalModelEndpointDataBlobMap,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->detector_version_id = $s['detector_version_id'] ?? '';
    $this->event_attributes = $s['event_attributes'] ?? dict[];
    $this->event_id = $s['event_id'] ?? '';
    $this->external_model_endpoint_data_blobs = $s['external_model_endpoint_data_blobs'] ?? dict[];
  }
}

class GetPredictionResult {
  public ?ListOfModelScores $model_scores;
  public ?ListOfStrings $outcomes;
  public ?ListOfRuleResults $rule_results;

  public function __construct(shape(
    ?'model_scores' => ?ListOfModelScores,
    ?'outcomes' => ?ListOfStrings,
    ?'rule_results' => ?ListOfRuleResults,
  ) $s = shape()) {
    $this->model_scores = $s['model_scores'] ?? vec[];
    $this->outcomes = $s['outcomes'] ?? vec[];
    $this->rule_results = $s['rule_results'] ?? vec[];
  }
}

class GetRulesRequest {
  public ?identifier $detector_id;
  public ?RulesMaxResults $max_results;
  public ?string $next_token;
  public ?identifier $rule_id;
  public ?nonEmptyString $rule_version;

  public function __construct(shape(
    ?'detector_id' => ?identifier,
    ?'max_results' => ?RulesMaxResults,
    ?'next_token' => ?string,
    ?'rule_id' => ?identifier,
    ?'rule_version' => ?nonEmptyString,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->rule_id = $s['rule_id'] ?? '';
    $this->rule_version = $s['rule_version'] ?? '';
  }
}

class GetRulesResult {
  public ?string $next_token;
  public ?RuleDetailList $rule_details;

  public function __construct(shape(
    ?'next_token' => ?string,
    ?'rule_details' => ?RuleDetailList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->rule_details = $s['rule_details'] ?? vec[];
  }
}

class GetVariablesRequest {
  public ?VariablesMaxResults $max_results;
  public ?string $name;
  public ?string $next_token;

  public function __construct(shape(
    ?'max_results' => ?VariablesMaxResults,
    ?'name' => ?string,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetVariablesResult {
  public ?string $next_token;
  public ?VariableList $variables;

  public function __construct(shape(
    ?'next_token' => ?string,
    ?'variables' => ?VariableList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->variables = $s['variables'] ?? vec[];
  }
}

class InternalServerException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type IsOpaque = bool;

type JsonKeyToVariableMap = dict<string, string>;

type LabelMapper = dict<string, ListOfStrings>;

class LabelSchema {
  public ?string $label_key;
  public ?LabelMapper $label_mapper;

  public function __construct(shape(
    ?'label_key' => ?string,
    ?'label_mapper' => ?LabelMapper,
  ) $s = shape()) {
    $this->label_key = $s['label_key'] ?? '';
    $this->label_mapper = $s['label_mapper'] ?? dict[];
  }
}

type Language = string;

type ListOfModelScores = vec<ModelScores>;

type ListOfModelVersions = vec<ModelVersion>;

type ListOfRuleResults = vec<RuleResult>;

type ListOfStrings = vec<string>;

type MaxResults = int;

type MetricsMap = dict<string, string>;

class Model {
  public ?time $created_time;
  public ?description $description;
  public ?LabelSchema $label_schema;
  public ?time $last_updated_time;
  public ?identifier $model_id;
  public ?ModelTypeEnum $model_type;
  public ?ModelVariablesList $model_variables;
  public ?TrainingDataSource $training_data_source;

  public function __construct(shape(
    ?'created_time' => ?time,
    ?'description' => ?description,
    ?'label_schema' => ?LabelSchema,
    ?'last_updated_time' => ?time,
    ?'model_id' => ?identifier,
    ?'model_type' => ?ModelTypeEnum,
    ?'model_variables' => ?ModelVariablesList,
    ?'training_data_source' => ?TrainingDataSource,
  ) $s = shape()) {
    $this->created_time = $s['created_time'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->label_schema = $s['label_schema'] ?? null;
    $this->last_updated_time = $s['last_updated_time'] ?? '';
    $this->model_id = $s['model_id'] ?? '';
    $this->model_type = $s['model_type'] ?? '';
    $this->model_variables = $s['model_variables'] ?? vec[];
    $this->training_data_source = $s['training_data_source'] ?? null;
  }
}

class ModelEndpointDataBlob {
  public ?blob $byte_buffer;
  public ?contentType $content_type;

  public function __construct(shape(
    ?'byte_buffer' => ?blob,
    ?'content_type' => ?contentType,
  ) $s = shape()) {
    $this->byte_buffer = $s['byte_buffer'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
  }
}

type ModelEndpointStatus = string;

class ModelInputConfiguration {
  public ?string $csv_input_template;
  public ?ModelInputDataFormat $format;
  public ?IsOpaque $is_opaque;
  public ?string $json_input_template;

  public function __construct(shape(
    ?'csv_input_template' => ?string,
    ?'format' => ?ModelInputDataFormat,
    ?'is_opaque' => ?IsOpaque,
    ?'json_input_template' => ?string,
  ) $s = shape()) {
    $this->csv_input_template = $s['csv_input_template'] ?? '';
    $this->format = $s['format'] ?? '';
    $this->is_opaque = $s['is_opaque'] ?? false;
    $this->json_input_template = $s['json_input_template'] ?? '';
  }
}

type ModelInputDataFormat = string;

type ModelList = vec<Model>;

class ModelOutputConfiguration {
  public ?CsvIndexToVariableMap $csv_index_to_variable_map;
  public ?ModelOutputDataFormat $format;
  public ?JsonKeyToVariableMap $json_key_to_variable_map;

  public function __construct(shape(
    ?'csv_index_to_variable_map' => ?CsvIndexToVariableMap,
    ?'format' => ?ModelOutputDataFormat,
    ?'json_key_to_variable_map' => ?JsonKeyToVariableMap,
  ) $s = shape()) {
    $this->csv_index_to_variable_map = $s['csv_index_to_variable_map'] ?? dict[];
    $this->format = $s['format'] ?? '';
    $this->json_key_to_variable_map = $s['json_key_to_variable_map'] ?? dict[];
  }
}

type ModelOutputDataFormat = string;

type ModelPredictionMap = dict<string, float>;

class ModelScores {
  public ?ModelVersion $model_version;
  public ?ModelPredictionMap $scores;

  public function __construct(shape(
    ?'model_version' => ?ModelVersion,
    ?'scores' => ?ModelPredictionMap,
  ) $s = shape()) {
    $this->model_version = $s['model_version'] ?? null;
    $this->scores = $s['scores'] ?? dict[];
  }
}

type ModelSource = string;

type ModelTypeEnum = string;

class ModelVariable {
  public ?ModelVariableIndex $index;
  public ?string $name;

  public function __construct(shape(
    ?'index' => ?ModelVariableIndex,
    ?'name' => ?string,
  ) $s = shape()) {
    $this->index = $s['index'] ?? 0;
    $this->name = $s['name'] ?? '';
  }
}

type ModelVariableIndex = int;

type ModelVariablesList = vec<ModelVariable>;

class ModelVersion {
  public ?identifier $model_id;
  public ?ModelTypeEnum $model_type;
  public ?nonEmptyString $model_version_number;

  public function __construct(shape(
    ?'model_id' => ?identifier,
    ?'model_type' => ?ModelTypeEnum,
    ?'model_version_number' => ?nonEmptyString,
  ) $s = shape()) {
    $this->model_id = $s['model_id'] ?? '';
    $this->model_type = $s['model_type'] ?? '';
    $this->model_version_number = $s['model_version_number'] ?? '';
  }
}

class ModelVersionDetail {
  public ?time $created_time;
  public ?description $description;
  public ?LabelSchema $label_schema;
  public ?time $last_updated_time;
  public ?identifier $model_id;
  public ?ModelTypeEnum $model_type;
  public ?ModelVariablesList $model_variables;
  public ?nonEmptyString $model_version_number;
  public ?string $status;
  public ?TrainingDataSource $training_data_source;
  public ?MetricsMap $training_metrics;
  public ?MetricsMap $validation_metrics;

  public function __construct(shape(
    ?'created_time' => ?time,
    ?'description' => ?description,
    ?'label_schema' => ?LabelSchema,
    ?'last_updated_time' => ?time,
    ?'model_id' => ?identifier,
    ?'model_type' => ?ModelTypeEnum,
    ?'model_variables' => ?ModelVariablesList,
    ?'model_version_number' => ?nonEmptyString,
    ?'status' => ?string,
    ?'training_data_source' => ?TrainingDataSource,
    ?'training_metrics' => ?MetricsMap,
    ?'validation_metrics' => ?MetricsMap,
  ) $s = shape()) {
    $this->created_time = $s['created_time'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->label_schema = $s['label_schema'] ?? null;
    $this->last_updated_time = $s['last_updated_time'] ?? '';
    $this->model_id = $s['model_id'] ?? '';
    $this->model_type = $s['model_type'] ?? '';
    $this->model_variables = $s['model_variables'] ?? vec[];
    $this->model_version_number = $s['model_version_number'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->training_data_source = $s['training_data_source'] ?? null;
    $this->training_metrics = $s['training_metrics'] ?? dict[];
    $this->validation_metrics = $s['validation_metrics'] ?? dict[];
  }
}

type ModelVersionDetailList = vec<ModelVersionDetail>;

type ModelVersionStatus = string;

type NameList = vec<string>;

type NonEmptyListOfStrings = vec<string>;

class Outcome {
  public ?time $created_time;
  public ?description $description;
  public ?time $last_updated_time;
  public ?identifier $name;

  public function __construct(shape(
    ?'created_time' => ?time,
    ?'description' => ?description,
    ?'last_updated_time' => ?time,
    ?'name' => ?identifier,
  ) $s = shape()) {
    $this->created_time = $s['created_time'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->last_updated_time = $s['last_updated_time'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type OutcomeList = vec<Outcome>;

type OutcomesMaxResults = int;

class PutDetectorRequest {
  public ?description $description;
  public ?identifier $detector_id;

  public function __construct(shape(
    ?'description' => ?description,
    ?'detector_id' => ?identifier,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class PutDetectorResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutExternalModelRequest {
  public ?ModelInputConfiguration $input_configuration;
  public ?string $model_endpoint;
  public ?ModelEndpointStatus $model_endpoint_status;
  public ?ModelSource $model_source;
  public ?ModelOutputConfiguration $output_configuration;
  public ?Role $role;

  public function __construct(shape(
    ?'input_configuration' => ?ModelInputConfiguration,
    ?'model_endpoint' => ?string,
    ?'model_endpoint_status' => ?ModelEndpointStatus,
    ?'model_source' => ?ModelSource,
    ?'output_configuration' => ?ModelOutputConfiguration,
    ?'role' => ?Role,
  ) $s = shape()) {
    $this->input_configuration = $s['input_configuration'] ?? null;
    $this->model_endpoint = $s['model_endpoint'] ?? '';
    $this->model_endpoint_status = $s['model_endpoint_status'] ?? '';
    $this->model_source = $s['model_source'] ?? '';
    $this->output_configuration = $s['output_configuration'] ?? null;
    $this->role = $s['role'] ?? null;
  }
}

class PutExternalModelResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutModelRequest {
  public ?description $description;
  public ?LabelSchema $label_schema;
  public ?identifier $model_id;
  public ?ModelTypeEnum $model_type;
  public ?ModelVariablesList $model_variables;
  public ?TrainingDataSource $training_data_source;

  public function __construct(shape(
    ?'description' => ?description,
    ?'label_schema' => ?LabelSchema,
    ?'model_id' => ?identifier,
    ?'model_type' => ?ModelTypeEnum,
    ?'model_variables' => ?ModelVariablesList,
    ?'training_data_source' => ?TrainingDataSource,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->label_schema = $s['label_schema'] ?? null;
    $this->model_id = $s['model_id'] ?? '';
    $this->model_type = $s['model_type'] ?? '';
    $this->model_variables = $s['model_variables'] ?? vec[];
    $this->training_data_source = $s['training_data_source'] ?? null;
  }
}

class PutModelResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutOutcomeRequest {
  public ?description $description;
  public ?identifier $name;

  public function __construct(shape(
    ?'description' => ?description,
    ?'name' => ?identifier,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class PutOutcomeResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceNotFoundException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Role {
  public ?string $arn;
  public ?string $name;

  public function __construct(shape(
    ?'arn' => ?string,
    ?'name' => ?string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class Rule {
  public ?identifier $detector_id;
  public ?identifier $rule_id;
  public ?nonEmptyString $rule_version;

  public function __construct(shape(
    ?'detector_id' => ?identifier,
    ?'rule_id' => ?identifier,
    ?'rule_version' => ?nonEmptyString,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->rule_id = $s['rule_id'] ?? '';
    $this->rule_version = $s['rule_version'] ?? '';
  }
}

class RuleDetail {
  public ?time $created_time;
  public ?description $description;
  public ?identifier $detector_id;
  public ?ruleExpression $expression;
  public ?Language $language;
  public ?time $last_updated_time;
  public ?NonEmptyListOfStrings $outcomes;
  public ?identifier $rule_id;
  public ?nonEmptyString $rule_version;

  public function __construct(shape(
    ?'created_time' => ?time,
    ?'description' => ?description,
    ?'detector_id' => ?identifier,
    ?'expression' => ?ruleExpression,
    ?'language' => ?Language,
    ?'last_updated_time' => ?time,
    ?'outcomes' => ?NonEmptyListOfStrings,
    ?'rule_id' => ?identifier,
    ?'rule_version' => ?nonEmptyString,
  ) $s = shape()) {
    $this->created_time = $s['created_time'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->detector_id = $s['detector_id'] ?? '';
    $this->expression = $s['expression'] ?? '';
    $this->language = $s['language'] ?? '';
    $this->last_updated_time = $s['last_updated_time'] ?? '';
    $this->outcomes = $s['outcomes'] ?? vec[];
    $this->rule_id = $s['rule_id'] ?? '';
    $this->rule_version = $s['rule_version'] ?? '';
  }
}

type RuleDetailList = vec<RuleDetail>;

type RuleExecutionMode = string;

type RuleList = vec<Rule>;

class RuleResult {
  public ?ListOfStrings $outcomes;
  public ?string $rule_id;

  public function __construct(shape(
    ?'outcomes' => ?ListOfStrings,
    ?'rule_id' => ?string,
  ) $s = shape()) {
    $this->outcomes = $s['outcomes'] ?? vec[];
    $this->rule_id = $s['rule_id'] ?? '';
  }
}

type RulesMaxResults = int;

class ThrottlingException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TrainingDataSource {
  public ?iamRoleArn $data_access_role_arn;
  public ?s3BucketLocation $data_location;

  public function __construct(shape(
    ?'data_access_role_arn' => ?iamRoleArn,
    ?'data_location' => ?s3BucketLocation,
  ) $s = shape()) {
    $this->data_access_role_arn = $s['data_access_role_arn'] ?? '';
    $this->data_location = $s['data_location'] ?? '';
  }
}

class UpdateDetectorVersionMetadataRequest {
  public ?description $description;
  public ?identifier $detector_id;
  public ?nonEmptyString $detector_version_id;

  public function __construct(shape(
    ?'description' => ?description,
    ?'detector_id' => ?identifier,
    ?'detector_version_id' => ?nonEmptyString,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->detector_id = $s['detector_id'] ?? '';
    $this->detector_version_id = $s['detector_version_id'] ?? '';
  }
}

class UpdateDetectorVersionMetadataResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDetectorVersionRequest {
  public ?description $description;
  public ?identifier $detector_id;
  public ?nonEmptyString $detector_version_id;
  public ?ListOfStrings $external_model_endpoints;
  public ?ListOfModelVersions $model_versions;
  public ?RuleExecutionMode $rule_execution_mode;
  public ?RuleList $rules;

  public function __construct(shape(
    ?'description' => ?description,
    ?'detector_id' => ?identifier,
    ?'detector_version_id' => ?nonEmptyString,
    ?'external_model_endpoints' => ?ListOfStrings,
    ?'model_versions' => ?ListOfModelVersions,
    ?'rule_execution_mode' => ?RuleExecutionMode,
    ?'rules' => ?RuleList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->detector_id = $s['detector_id'] ?? '';
    $this->detector_version_id = $s['detector_version_id'] ?? '';
    $this->external_model_endpoints = $s['external_model_endpoints'] ?? vec[];
    $this->model_versions = $s['model_versions'] ?? vec[];
    $this->rule_execution_mode = $s['rule_execution_mode'] ?? '';
    $this->rules = $s['rules'] ?? vec[];
  }
}

class UpdateDetectorVersionResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDetectorVersionStatusRequest {
  public ?identifier $detector_id;
  public ?nonEmptyString $detector_version_id;
  public ?DetectorVersionStatus $status;

  public function __construct(shape(
    ?'detector_id' => ?identifier,
    ?'detector_version_id' => ?nonEmptyString,
    ?'status' => ?DetectorVersionStatus,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->detector_version_id = $s['detector_version_id'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class UpdateDetectorVersionStatusResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateModelVersionRequest {
  public ?description $description;
  public ?identifier $model_id;
  public ?ModelTypeEnum $model_type;
  public ?nonEmptyString $model_version_number;
  public ?ModelVersionStatus $status;

  public function __construct(shape(
    ?'description' => ?description,
    ?'model_id' => ?identifier,
    ?'model_type' => ?ModelTypeEnum,
    ?'model_version_number' => ?nonEmptyString,
    ?'status' => ?ModelVersionStatus,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->model_id = $s['model_id'] ?? '';
    $this->model_type = $s['model_type'] ?? '';
    $this->model_version_number = $s['model_version_number'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class UpdateModelVersionResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateRuleMetadataRequest {
  public ?description $description;
  public ?Rule $rule;

  public function __construct(shape(
    ?'description' => ?description,
    ?'rule' => ?Rule,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->rule = $s['rule'] ?? null;
  }
}

class UpdateRuleMetadataResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateRuleVersionRequest {
  public ?description $description;
  public ?ruleExpression $expression;
  public ?Language $language;
  public ?NonEmptyListOfStrings $outcomes;
  public ?Rule $rule;

  public function __construct(shape(
    ?'description' => ?description,
    ?'expression' => ?ruleExpression,
    ?'language' => ?Language,
    ?'outcomes' => ?NonEmptyListOfStrings,
    ?'rule' => ?Rule,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->expression = $s['expression'] ?? '';
    $this->language = $s['language'] ?? '';
    $this->outcomes = $s['outcomes'] ?? vec[];
    $this->rule = $s['rule'] ?? null;
  }
}

class UpdateRuleVersionResult {
  public ?Rule $rule;

  public function __construct(shape(
    ?'rule' => ?Rule,
  ) $s = shape()) {
    $this->rule = $s['rule'] ?? null;
  }
}

class UpdateVariableRequest {
  public ?string $default_value;
  public ?string $description;
  public ?string $name;
  public ?string $variable_type;

  public function __construct(shape(
    ?'default_value' => ?string,
    ?'description' => ?string,
    ?'name' => ?string,
    ?'variable_type' => ?string,
  ) $s = shape()) {
    $this->default_value = $s['default_value'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->variable_type = $s['variable_type'] ?? '';
  }
}

class UpdateVariableResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ValidationException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Variable {
  public ?time $created_time;
  public ?DataSource $data_source;
  public ?DataType $data_type;
  public ?string $default_value;
  public ?string $description;
  public ?time $last_updated_time;
  public ?string $name;
  public ?string $variable_type;

  public function __construct(shape(
    ?'created_time' => ?time,
    ?'data_source' => ?DataSource,
    ?'data_type' => ?DataType,
    ?'default_value' => ?string,
    ?'description' => ?string,
    ?'last_updated_time' => ?time,
    ?'name' => ?string,
    ?'variable_type' => ?string,
  ) $s = shape()) {
    $this->created_time = $s['created_time'] ?? '';
    $this->data_source = $s['data_source'] ?? '';
    $this->data_type = $s['data_type'] ?? '';
    $this->default_value = $s['default_value'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->last_updated_time = $s['last_updated_time'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->variable_type = $s['variable_type'] ?? '';
  }
}

class VariableEntry {
  public ?string $data_source;
  public ?string $data_type;
  public ?string $default_value;
  public ?string $description;
  public ?string $name;
  public ?string $variable_type;

  public function __construct(shape(
    ?'data_source' => ?string,
    ?'data_type' => ?string,
    ?'default_value' => ?string,
    ?'description' => ?string,
    ?'name' => ?string,
    ?'variable_type' => ?string,
  ) $s = shape()) {
    $this->data_source = $s['data_source'] ?? '';
    $this->data_type = $s['data_type'] ?? '';
    $this->default_value = $s['default_value'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->variable_type = $s['variable_type'] ?? '';
  }
}

type VariableEntryList = vec<VariableEntry>;

type VariableList = vec<Variable>;

type VariablesMaxResults = int;

type attributeKey = string;

type attributeValue = string;

type blob = string;

type contentType = string;

type description = string;

type float = float;

type iamRoleArn = string;

type identifier = string;

type integer = int;

type nonEmptyString = string;

type ruleExpression = string;

type s3BucketLocation = string;

type string = string;

type time = string;


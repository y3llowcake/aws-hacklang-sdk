<?hh // strict
namespace slack\aws\frauddetector;

interface FraudDetector {
  public function BatchGetVariable(BatchGetVariableRequest) Awaitable<Errors\Result<BatchGetVariableResult>>;
  public function GetDetectorVersion(GetDetectorVersionRequest) Awaitable<Errors\Result<GetDetectorVersionResult>>;
  public function UpdateDetectorVersionMetadata(UpdateDetectorVersionMetadataRequest) Awaitable<Errors\Result<UpdateDetectorVersionMetadataResult>>;
  public function GetVariables(GetVariablesRequest) Awaitable<Errors\Result<GetVariablesResult>>;
  public function UpdateDetectorVersion(UpdateDetectorVersionRequest) Awaitable<Errors\Result<UpdateDetectorVersionResult>>;
  public function CreateRule(CreateRuleRequest) Awaitable<Errors\Result<CreateRuleResult>>;
  public function CreateVariable(CreateVariableRequest) Awaitable<Errors\Result<CreateVariableResult>>;
  public function DeleteRuleVersion(DeleteRuleVersionRequest) Awaitable<Errors\Result<DeleteRuleVersionResult>>;
  public function GetModelVersion(GetModelVersionRequest) Awaitable<Errors\Result<GetModelVersionResult>>;
  public function CreateDetectorVersion(CreateDetectorVersionRequest) Awaitable<Errors\Result<CreateDetectorVersionResult>>;
  public function DescribeDetector(DescribeDetectorRequest) Awaitable<Errors\Result<DescribeDetectorResult>>;
  public function PutModel(PutModelRequest) Awaitable<Errors\Result<PutModelResult>>;
  public function PutOutcome(PutOutcomeRequest) Awaitable<Errors\Result<PutOutcomeResult>>;
  public function CreateModelVersion(CreateModelVersionRequest) Awaitable<Errors\Result<CreateModelVersionResult>>;
  public function GetRules(GetRulesRequest) Awaitable<Errors\Result<GetRulesResult>>;
  public function UpdateRuleVersion(UpdateRuleVersionRequest) Awaitable<Errors\Result<UpdateRuleVersionResult>>;
  public function GetExternalModels(GetExternalModelsRequest) Awaitable<Errors\Result<GetExternalModelsResult>>;
  public function GetOutcomes(GetOutcomesRequest) Awaitable<Errors\Result<GetOutcomesResult>>;
  public function BatchCreateVariable(BatchCreateVariableRequest) Awaitable<Errors\Result<BatchCreateVariableResult>>;
  public function DeleteDetector(DeleteDetectorRequest) Awaitable<Errors\Result<DeleteDetectorResult>>;
  public function DeleteDetectorVersion(DeleteDetectorVersionRequest) Awaitable<Errors\Result<DeleteDetectorVersionResult>>;
  public function GetDetectors(GetDetectorsRequest) Awaitable<Errors\Result<GetDetectorsResult>>;
  public function PutDetector(PutDetectorRequest) Awaitable<Errors\Result<PutDetectorResult>>;
  public function UpdateDetectorVersionStatus(UpdateDetectorVersionStatusRequest) Awaitable<Errors\Result<UpdateDetectorVersionStatusResult>>;
  public function UpdateModelVersion(UpdateModelVersionRequest) Awaitable<Errors\Result<UpdateModelVersionResult>>;
  public function DeleteEvent(DeleteEventRequest) Awaitable<Errors\Result<DeleteEventResult>>;
  public function GetModels(GetModelsRequest) Awaitable<Errors\Result<GetModelsResult>>;
  public function GetPrediction(GetPredictionRequest) Awaitable<Errors\Result<GetPredictionResult>>;
  public function UpdateRuleMetadata(UpdateRuleMetadataRequest) Awaitable<Errors\Result<UpdateRuleMetadataResult>>;
  public function DescribeModelVersions(DescribeModelVersionsRequest) Awaitable<Errors\Result<DescribeModelVersionsResult>>;
  public function PutExternalModel(PutExternalModelRequest) Awaitable<Errors\Result<PutExternalModelResult>>;
  public function UpdateVariable(UpdateVariableRequest) Awaitable<Errors\Result<UpdateVariableResult>>;
}

class UpdateDetectorVersionStatusRequest {
  public identifier $detector_id;
  public nonEmptyString $detector_version_id;
  public DetectorVersionStatus $status;
}

class BatchGetVariableErrorList {
}

class CreateVariableRequest {
  public DataSource $data_source;
  public string $default_value;
  public string $description;
  public string $variable_type;
  public string $name;
  public DataType $data_type;
}

class DataType {
}

class DescribeDetectorRequest {
  public DetectorVersionMaxResults $max_results;
  public identifier $detector_id;
  public string $next_token;
}

class GetVariablesRequest {
  public string $name;
  public string $next_token;
  public VariablesMaxResults $max_results;
}

class ListOfStrings {
}

class PutModelRequest {
  public LabelSchema $label_schema;
  public identifier $model_id;
  public ModelTypeEnum $model_type;
  public description $description;
  public TrainingDataSource $training_data_source;
  public ModelVariablesList $model_variables;
}

class UpdateModelVersionRequest {
  public identifier $model_id;
  public ModelTypeEnum $model_type;
  public nonEmptyString $model_version_number;
  public description $description;
  public ModelVersionStatus $status;
}

class UpdateVariableRequest {
  public string $variable_type;
  public string $name;
  public string $default_value;
  public string $description;
}

class ConflictException {
  public string $message;
}

class MaxResults {
}

class ModelOutputDataFormat {
}

class Outcome {
  public time $last_updated_time;
  public time $created_time;
  public identifier $name;
  public description $description;
}

class UpdateRuleVersionRequest {
  public Language $language;
  public NonEmptyListOfStrings $outcomes;
  public Rule $rule;
  public description $description;
  public ruleExpression $expression;
}

class ExternalModelsMaxResults {
}

class LabelMapper {
}

class ModelVersion {
  public ModelTypeEnum $model_type;
  public nonEmptyString $model_version_number;
  public identifier $model_id;
}

class attributeValue {
}

class DeleteDetectorRequest {
  public identifier $detector_id;
}

class DeleteDetectorResult {
}

class ListOfModelVersions {
}

class contentType {
}

class description {
}

class BatchGetVariableRequest {
  public NameList $names;
}

class VariableList {
}

class DescribeDetectorResult {
  public string $next_token;
  public identifier $detector_id;
  public DetectorVersionSummaryList $detector_version_summaries;
}

class EventAttributeMap {
}

class GetModelVersionRequest {
  public identifier $model_id;
  public ModelTypeEnum $model_type;
  public nonEmptyString $model_version_number;
}

class RulesMaxResults {
}

class blob {
}

class GetExternalModelsRequest {
  public string $model_endpoint;
  public string $next_token;
  public ExternalModelsMaxResults $max_results;
}

class Language {
}

class float {
}

class BatchCreateVariableError {
  public string $name;
  public integer $code;
  public string $message;
}

class CreateRuleRequest {
  public NonEmptyListOfStrings $outcomes;
  public identifier $rule_id;
  public identifier $detector_id;
  public description $description;
  public ruleExpression $expression;
  public Language $language;
}

class DescribeModelVersionsResult {
  public ModelVersionDetailList $model_version_details;
  public string $next_token;
}

class ListOfRuleResults {
}

class NameList {
}

class PutDetectorResult {
}

class identifier {
}

class DescribeModelVersionsRequest {
  public identifier $model_id;
  public nonEmptyString $model_version_number;
  public ModelTypeEnum $model_type;
  public string $next_token;
  public MaxResults $max_results;
}

class ExternalModel {
  public Role $role;
  public ModelInputConfiguration $input_configuration;
  public ModelOutputConfiguration $output_configuration;
  public ModelEndpointStatus $model_endpoint_status;
  public time $last_updated_time;
  public time $created_time;
  public string $model_endpoint;
  public ModelSource $model_source;
}

class JsonKeyToVariableMap {
}

class OutcomesMaxResults {
}

class RuleExecutionMode {
}

class Variable {
  public DataType $data_type;
  public DataSource $data_source;
  public string $default_value;
  public string $description;
  public string $variable_type;
  public time $last_updated_time;
  public time $created_time;
  public string $name;
}

class ruleExpression {
}

class GetModelsRequest {
  public ModelTypeEnum $model_type;
  public identifier $model_id;
  public string $next_token;
  public MaxResults $max_results;
}

class ModelList {
}

class DetectorVersionSummaryList {
}

class GetOutcomesResult {
  public OutcomeList $outcomes;
  public string $next_token;
}

class UpdateDetectorVersionMetadataResult {
}

class UpdateDetectorVersionRequest {
  public ListOfStrings $external_model_endpoints;
  public RuleList $rules;
  public description $description;
  public ListOfModelVersions $model_versions;
  public RuleExecutionMode $rule_execution_mode;
  public identifier $detector_id;
  public nonEmptyString $detector_version_id;
}

class UpdateVariableResult {
}

class attributeKey {
}

class GetDetectorsRequest {
  public DetectorsMaxResults $max_results;
  public identifier $detector_id;
  public string $next_token;
}

class UpdateDetectorVersionResult {
}

class VariablesMaxResults {
}

class CreateDetectorVersionRequest {
  public ListOfModelVersions $model_versions;
  public RuleExecutionMode $rule_execution_mode;
  public identifier $detector_id;
  public description $description;
  public ListOfStrings $external_model_endpoints;
  public RuleList $rules;
}

class Detector {
  public identifier $detector_id;
  public description $description;
  public time $last_updated_time;
  public time $created_time;
}

class GetDetectorVersionResult {
  public RuleList $rules;
  public DetectorVersionStatus $status;
  public RuleExecutionMode $rule_execution_mode;
  public identifier $detector_id;
  public nonEmptyString $detector_version_id;
  public description $description;
  public ListOfModelVersions $model_versions;
  public ListOfStrings $external_model_endpoints;
  public time $last_updated_time;
  public time $created_time;
}

class MetricsMap {
}

class UpdateModelVersionResult {
}

class DeleteEventResult {
}

class DetectorVersionStatus {
}

class iamRoleArn {
}

class DetectorList {
}

class UpdateDetectorVersionMetadataRequest {
  public identifier $detector_id;
  public nonEmptyString $detector_version_id;
  public description $description;
}

class UpdateRuleVersionResult {
  public Rule $rule;
}

class DetectorVersionMaxResults {
}

class InternalServerException {
  public string $message;
}

class IsOpaque {
}

class ModelVariablesList {
}

class PutOutcomeRequest {
  public identifier $name;
  public description $description;
}

class GetDetectorVersionRequest {
  public identifier $detector_id;
  public nonEmptyString $detector_version_id;
}

class ModelEndpointDataBlob {
  public blob $byte_buffer;
  public contentType $content_type;
}

class ModelVersionDetail {
  public description $description;
  public TrainingDataSource $training_data_source;
  public LabelSchema $label_schema;
  public MetricsMap $validation_metrics;
  public time $created_time;
  public identifier $model_id;
  public ModelTypeEnum $model_type;
  public ModelVariablesList $model_variables;
  public MetricsMap $training_metrics;
  public time $last_updated_time;
  public nonEmptyString $model_version_number;
  public string $status;
}

class time {
}

class ExternalModelEndpointDataBlobMap {
}

class GetPredictionRequest {
  public string $detector_id;
  public string $detector_version_id;
  public string $event_id;
  public EventAttributeMap $event_attributes;
  public ExternalModelEndpointDataBlobMap $external_model_endpoint_data_blobs;
}

class ModelTypeEnum {
}

class ModelVariableIndex {
}

class ModelVersionDetailList {
}

class RuleDetail {
  public nonEmptyString $rule_version;
  public ruleExpression $expression;
  public time $created_time;
  public identifier $rule_id;
  public description $description;
  public identifier $detector_id;
  public Language $language;
  public NonEmptyListOfStrings $outcomes;
  public time $last_updated_time;
}

class BatchCreateVariableResult {
  public BatchCreateVariableErrorList $errors;
}

class CreateDetectorVersionResult {
  public nonEmptyString $detector_version_id;
  public DetectorVersionStatus $status;
  public identifier $detector_id;
}

class CreateRuleResult {
  public Rule $rule;
}

class DeleteRuleVersionRequest {
  public nonEmptyString $rule_version;
  public identifier $detector_id;
  public identifier $rule_id;
}

class ExternalModelList {
}

class GetVariablesResult {
  public string $next_token;
  public VariableList $variables;
}

class ModelScores {
  public ModelVersion $model_version;
  public ModelPredictionMap $scores;
}

class RuleResult {
  public string $rule_id;
  public ListOfStrings $outcomes;
}

class CreateModelVersionRequest {
  public identifier $model_id;
  public ModelTypeEnum $model_type;
  public description $description;
}

class CreateModelVersionResult {
  public ModelTypeEnum $model_type;
  public nonEmptyString $model_version_number;
  public string $status;
  public identifier $model_id;
}

class DetectorsMaxResults {
}

class GetModelVersionResult {
  public identifier $model_id;
  public ModelTypeEnum $model_type;
  public nonEmptyString $model_version_number;
  public description $description;
  public string $status;
}

class GetOutcomesRequest {
  public identifier $name;
  public string $next_token;
  public OutcomesMaxResults $max_results;
}

class GetRulesResult {
  public RuleDetailList $rule_details;
  public string $next_token;
}

class s3BucketLocation {
}

class BatchCreateVariableErrorList {
}

class CreateVariableResult {
}

class NonEmptyListOfStrings {
}

class ValidationException {
  public string $message;
}

class integer {
}

class GetModelsResult {
  public ModelList $models;
  public string $next_token;
}

class LabelSchema {
  public string $label_key;
  public LabelMapper $label_mapper;
}

class ThrottlingException {
  public string $message;
}

class UpdateRuleMetadataRequest {
  public Rule $rule;
  public description $description;
}

class VariableEntry {
  public string $variable_type;
  public string $name;
  public string $data_type;
  public string $data_source;
  public string $default_value;
  public string $description;
}

class string {
}

class Model {
  public time $created_time;
  public identifier $model_id;
  public ModelTypeEnum $model_type;
  public description $description;
  public TrainingDataSource $training_data_source;
  public ModelVariablesList $model_variables;
  public LabelSchema $label_schema;
  public time $last_updated_time;
}

class ModelEndpointStatus {
}

class ModelVariable {
  public ModelVariableIndex $index;
  public string $name;
}

class PutDetectorRequest {
  public identifier $detector_id;
  public description $description;
}

class UpdateDetectorVersionStatusResult {
}

class CsvIndexToVariableMap {
}

class DeleteDetectorVersionResult {
}

class DetectorVersionSummary {
  public nonEmptyString $detector_version_id;
  public DetectorVersionStatus $status;
  public description $description;
  public time $last_updated_time;
}

class GetRulesRequest {
  public identifier $rule_id;
  public identifier $detector_id;
  public nonEmptyString $rule_version;
  public string $next_token;
  public RulesMaxResults $max_results;
}

class ModelInputDataFormat {
}

class PutOutcomeResult {
}

class RuleList {
}

class ModelPredictionMap {
}

class PutModelResult {
}

class Role {
  public string $arn;
  public string $name;
}

class BatchCreateVariableRequest {
  public VariableEntryList $variable_entries;
}

class BatchGetVariableError {
  public string $name;
  public integer $code;
  public string $message;
}

class PutExternalModelRequest {
  public Role $role;
  public ModelInputConfiguration $input_configuration;
  public ModelOutputConfiguration $output_configuration;
  public ModelEndpointStatus $model_endpoint_status;
  public string $model_endpoint;
  public ModelSource $model_source;
}

class Rule {
  public identifier $detector_id;
  public identifier $rule_id;
  public nonEmptyString $rule_version;
}

class RuleDetailList {
}

class VariableEntryList {
}

class nonEmptyString {
}

class DeleteDetectorVersionRequest {
  public identifier $detector_id;
  public nonEmptyString $detector_version_id;
}

class DeleteEventRequest {
  public string $event_id;
}

class DeleteRuleVersionResult {
}

class ListOfModelScores {
}

class ModelVersionStatus {
}

class OutcomeList {
}

class PutExternalModelResult {
}

class UpdateRuleMetadataResult {
}

class BatchGetVariableResult {
  public VariableList $variables;
  public BatchGetVariableErrorList $errors;
}

class DataSource {
}

class GetDetectorsResult {
  public DetectorList $detectors;
  public string $next_token;
}

class GetExternalModelsResult {
  public ExternalModelList $external_models;
  public string $next_token;
}

class GetPredictionResult {
  public ListOfStrings $outcomes;
  public ListOfModelScores $model_scores;
  public ListOfRuleResults $rule_results;
}

class ModelOutputConfiguration {
  public CsvIndexToVariableMap $csv_index_to_variable_map;
  public ModelOutputDataFormat $format;
  public JsonKeyToVariableMap $json_key_to_variable_map;
}

class TrainingDataSource {
  public iamRoleArn $data_access_role_arn;
  public s3BucketLocation $data_location;
}

class ModelInputConfiguration {
  public string $json_input_template;
  public string $csv_input_template;
  public ModelInputDataFormat $format;
  public IsOpaque $is_opaque;
}

class ModelSource {
}

class ResourceNotFoundException {
  public string $message;
}


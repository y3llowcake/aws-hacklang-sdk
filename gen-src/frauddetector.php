<?hh // strict
namespace slack\aws\frauddetector;

interface FraudDetector {
  public function BatchCreateVariable(BatchCreateVariableRequest): Awaitable<Errors\Result<BatchCreateVariableResult>>;
  public function BatchGetVariable(BatchGetVariableRequest): Awaitable<Errors\Result<BatchGetVariableResult>>;
  public function CreateDetectorVersion(CreateDetectorVersionRequest): Awaitable<Errors\Result<CreateDetectorVersionResult>>;
  public function CreateModelVersion(CreateModelVersionRequest): Awaitable<Errors\Result<CreateModelVersionResult>>;
  public function CreateRule(CreateRuleRequest): Awaitable<Errors\Result<CreateRuleResult>>;
  public function CreateVariable(CreateVariableRequest): Awaitable<Errors\Result<CreateVariableResult>>;
  public function DeleteDetector(DeleteDetectorRequest): Awaitable<Errors\Result<DeleteDetectorResult>>;
  public function DeleteDetectorVersion(DeleteDetectorVersionRequest): Awaitable<Errors\Result<DeleteDetectorVersionResult>>;
  public function DeleteEvent(DeleteEventRequest): Awaitable<Errors\Result<DeleteEventResult>>;
  public function DeleteRuleVersion(DeleteRuleVersionRequest): Awaitable<Errors\Result<DeleteRuleVersionResult>>;
  public function DescribeDetector(DescribeDetectorRequest): Awaitable<Errors\Result<DescribeDetectorResult>>;
  public function DescribeModelVersions(DescribeModelVersionsRequest): Awaitable<Errors\Result<DescribeModelVersionsResult>>;
  public function GetDetectorVersion(GetDetectorVersionRequest): Awaitable<Errors\Result<GetDetectorVersionResult>>;
  public function GetDetectors(GetDetectorsRequest): Awaitable<Errors\Result<GetDetectorsResult>>;
  public function GetExternalModels(GetExternalModelsRequest): Awaitable<Errors\Result<GetExternalModelsResult>>;
  public function GetModelVersion(GetModelVersionRequest): Awaitable<Errors\Result<GetModelVersionResult>>;
  public function GetModels(GetModelsRequest): Awaitable<Errors\Result<GetModelsResult>>;
  public function GetOutcomes(GetOutcomesRequest): Awaitable<Errors\Result<GetOutcomesResult>>;
  public function GetPrediction(GetPredictionRequest): Awaitable<Errors\Result<GetPredictionResult>>;
  public function GetRules(GetRulesRequest): Awaitable<Errors\Result<GetRulesResult>>;
  public function GetVariables(GetVariablesRequest): Awaitable<Errors\Result<GetVariablesResult>>;
  public function PutDetector(PutDetectorRequest): Awaitable<Errors\Result<PutDetectorResult>>;
  public function PutExternalModel(PutExternalModelRequest): Awaitable<Errors\Result<PutExternalModelResult>>;
  public function PutModel(PutModelRequest): Awaitable<Errors\Result<PutModelResult>>;
  public function PutOutcome(PutOutcomeRequest): Awaitable<Errors\Result<PutOutcomeResult>>;
  public function UpdateDetectorVersion(UpdateDetectorVersionRequest): Awaitable<Errors\Result<UpdateDetectorVersionResult>>;
  public function UpdateDetectorVersionMetadata(UpdateDetectorVersionMetadataRequest): Awaitable<Errors\Result<UpdateDetectorVersionMetadataResult>>;
  public function UpdateDetectorVersionStatus(UpdateDetectorVersionStatusRequest): Awaitable<Errors\Result<UpdateDetectorVersionStatusResult>>;
  public function UpdateModelVersion(UpdateModelVersionRequest): Awaitable<Errors\Result<UpdateModelVersionResult>>;
  public function UpdateRuleMetadata(UpdateRuleMetadataRequest): Awaitable<Errors\Result<UpdateRuleMetadataResult>>;
  public function UpdateRuleVersion(UpdateRuleVersionRequest): Awaitable<Errors\Result<UpdateRuleVersionResult>>;
  public function UpdateVariable(UpdateVariableRequest): Awaitable<Errors\Result<UpdateVariableResult>>;
}

class BatchCreateVariableError {
  public integer $code;
  public string $message;
  public string $name;
}

class BatchCreateVariableErrorList {
}

class BatchCreateVariableRequest {
  public VariableEntryList $variable_entries;
}

class BatchCreateVariableResult {
  public BatchCreateVariableErrorList $errors;
}

class BatchGetVariableError {
  public integer $code;
  public string $message;
  public string $name;
}

class BatchGetVariableErrorList {
}

class BatchGetVariableRequest {
  public NameList $names;
}

class BatchGetVariableResult {
  public BatchGetVariableErrorList $errors;
  public VariableList $variables;
}

class ConflictException {
  public string $message;
}

class CreateDetectorVersionRequest {
  public description $description;
  public identifier $detector_id;
  public ListOfStrings $external_model_endpoints;
  public ListOfModelVersions $model_versions;
  public RuleExecutionMode $rule_execution_mode;
  public RuleList $rules;
}

class CreateDetectorVersionResult {
  public identifier $detector_id;
  public nonEmptyString $detector_version_id;
  public DetectorVersionStatus $status;
}

class CreateModelVersionRequest {
  public description $description;
  public identifier $model_id;
  public ModelTypeEnum $model_type;
}

class CreateModelVersionResult {
  public identifier $model_id;
  public ModelTypeEnum $model_type;
  public nonEmptyString $model_version_number;
  public string $status;
}

class CreateRuleRequest {
  public description $description;
  public identifier $detector_id;
  public ruleExpression $expression;
  public Language $language;
  public NonEmptyListOfStrings $outcomes;
  public identifier $rule_id;
}

class CreateRuleResult {
  public Rule $rule;
}

class CreateVariableRequest {
  public DataSource $data_source;
  public DataType $data_type;
  public string $default_value;
  public string $description;
  public string $name;
  public string $variable_type;
}

class CreateVariableResult {
}

class CsvIndexToVariableMap {
}

class DataSource {
}

class DataType {
}

class DeleteDetectorRequest {
  public identifier $detector_id;
}

class DeleteDetectorResult {
}

class DeleteDetectorVersionRequest {
  public identifier $detector_id;
  public nonEmptyString $detector_version_id;
}

class DeleteDetectorVersionResult {
}

class DeleteEventRequest {
  public string $event_id;
}

class DeleteEventResult {
}

class DeleteRuleVersionRequest {
  public identifier $detector_id;
  public identifier $rule_id;
  public nonEmptyString $rule_version;
}

class DeleteRuleVersionResult {
}

class DescribeDetectorRequest {
  public identifier $detector_id;
  public DetectorVersionMaxResults $max_results;
  public string $next_token;
}

class DescribeDetectorResult {
  public identifier $detector_id;
  public DetectorVersionSummaryList $detector_version_summaries;
  public string $next_token;
}

class DescribeModelVersionsRequest {
  public MaxResults $max_results;
  public identifier $model_id;
  public ModelTypeEnum $model_type;
  public nonEmptyString $model_version_number;
  public string $next_token;
}

class DescribeModelVersionsResult {
  public ModelVersionDetailList $model_version_details;
  public string $next_token;
}

class Detector {
  public time $created_time;
  public description $description;
  public identifier $detector_id;
  public time $last_updated_time;
}

class DetectorList {
}

class DetectorVersionMaxResults {
}

class DetectorVersionStatus {
}

class DetectorVersionSummary {
  public description $description;
  public nonEmptyString $detector_version_id;
  public time $last_updated_time;
  public DetectorVersionStatus $status;
}

class DetectorVersionSummaryList {
}

class DetectorsMaxResults {
}

class EventAttributeMap {
}

class ExternalModel {
  public time $created_time;
  public ModelInputConfiguration $input_configuration;
  public time $last_updated_time;
  public string $model_endpoint;
  public ModelEndpointStatus $model_endpoint_status;
  public ModelSource $model_source;
  public ModelOutputConfiguration $output_configuration;
  public Role $role;
}

class ExternalModelEndpointDataBlobMap {
}

class ExternalModelList {
}

class ExternalModelsMaxResults {
}

class GetDetectorVersionRequest {
  public identifier $detector_id;
  public nonEmptyString $detector_version_id;
}

class GetDetectorVersionResult {
  public time $created_time;
  public description $description;
  public identifier $detector_id;
  public nonEmptyString $detector_version_id;
  public ListOfStrings $external_model_endpoints;
  public time $last_updated_time;
  public ListOfModelVersions $model_versions;
  public RuleExecutionMode $rule_execution_mode;
  public RuleList $rules;
  public DetectorVersionStatus $status;
}

class GetDetectorsRequest {
  public identifier $detector_id;
  public DetectorsMaxResults $max_results;
  public string $next_token;
}

class GetDetectorsResult {
  public DetectorList $detectors;
  public string $next_token;
}

class GetExternalModelsRequest {
  public ExternalModelsMaxResults $max_results;
  public string $model_endpoint;
  public string $next_token;
}

class GetExternalModelsResult {
  public ExternalModelList $external_models;
  public string $next_token;
}

class GetModelVersionRequest {
  public identifier $model_id;
  public ModelTypeEnum $model_type;
  public nonEmptyString $model_version_number;
}

class GetModelVersionResult {
  public description $description;
  public identifier $model_id;
  public ModelTypeEnum $model_type;
  public nonEmptyString $model_version_number;
  public string $status;
}

class GetModelsRequest {
  public MaxResults $max_results;
  public identifier $model_id;
  public ModelTypeEnum $model_type;
  public string $next_token;
}

class GetModelsResult {
  public ModelList $models;
  public string $next_token;
}

class GetOutcomesRequest {
  public OutcomesMaxResults $max_results;
  public identifier $name;
  public string $next_token;
}

class GetOutcomesResult {
  public string $next_token;
  public OutcomeList $outcomes;
}

class GetPredictionRequest {
  public string $detector_id;
  public string $detector_version_id;
  public EventAttributeMap $event_attributes;
  public string $event_id;
  public ExternalModelEndpointDataBlobMap $external_model_endpoint_data_blobs;
}

class GetPredictionResult {
  public ListOfModelScores $model_scores;
  public ListOfStrings $outcomes;
  public ListOfRuleResults $rule_results;
}

class GetRulesRequest {
  public identifier $detector_id;
  public RulesMaxResults $max_results;
  public string $next_token;
  public identifier $rule_id;
  public nonEmptyString $rule_version;
}

class GetRulesResult {
  public string $next_token;
  public RuleDetailList $rule_details;
}

class GetVariablesRequest {
  public VariablesMaxResults $max_results;
  public string $name;
  public string $next_token;
}

class GetVariablesResult {
  public string $next_token;
  public VariableList $variables;
}

class InternalServerException {
  public string $message;
}

class IsOpaque {
}

class JsonKeyToVariableMap {
}

class LabelMapper {
}

class LabelSchema {
  public string $label_key;
  public LabelMapper $label_mapper;
}

class Language {
}

class ListOfModelScores {
}

class ListOfModelVersions {
}

class ListOfRuleResults {
}

class ListOfStrings {
}

class MaxResults {
}

class MetricsMap {
}

class Model {
  public time $created_time;
  public description $description;
  public LabelSchema $label_schema;
  public time $last_updated_time;
  public identifier $model_id;
  public ModelTypeEnum $model_type;
  public ModelVariablesList $model_variables;
  public TrainingDataSource $training_data_source;
}

class ModelEndpointDataBlob {
  public blob $byte_buffer;
  public contentType $content_type;
}

class ModelEndpointStatus {
}

class ModelInputConfiguration {
  public string $csv_input_template;
  public ModelInputDataFormat $format;
  public IsOpaque $is_opaque;
  public string $json_input_template;
}

class ModelInputDataFormat {
}

class ModelList {
}

class ModelOutputConfiguration {
  public CsvIndexToVariableMap $csv_index_to_variable_map;
  public ModelOutputDataFormat $format;
  public JsonKeyToVariableMap $json_key_to_variable_map;
}

class ModelOutputDataFormat {
}

class ModelPredictionMap {
}

class ModelScores {
  public ModelVersion $model_version;
  public ModelPredictionMap $scores;
}

class ModelSource {
}

class ModelTypeEnum {
}

class ModelVariable {
  public ModelVariableIndex $index;
  public string $name;
}

class ModelVariableIndex {
}

class ModelVariablesList {
}

class ModelVersion {
  public identifier $model_id;
  public ModelTypeEnum $model_type;
  public nonEmptyString $model_version_number;
}

class ModelVersionDetail {
  public time $created_time;
  public description $description;
  public LabelSchema $label_schema;
  public time $last_updated_time;
  public identifier $model_id;
  public ModelTypeEnum $model_type;
  public ModelVariablesList $model_variables;
  public nonEmptyString $model_version_number;
  public string $status;
  public TrainingDataSource $training_data_source;
  public MetricsMap $training_metrics;
  public MetricsMap $validation_metrics;
}

class ModelVersionDetailList {
}

class ModelVersionStatus {
}

class NameList {
}

class NonEmptyListOfStrings {
}

class Outcome {
  public time $created_time;
  public description $description;
  public time $last_updated_time;
  public identifier $name;
}

class OutcomeList {
}

class OutcomesMaxResults {
}

class PutDetectorRequest {
  public description $description;
  public identifier $detector_id;
}

class PutDetectorResult {
}

class PutExternalModelRequest {
  public ModelInputConfiguration $input_configuration;
  public string $model_endpoint;
  public ModelEndpointStatus $model_endpoint_status;
  public ModelSource $model_source;
  public ModelOutputConfiguration $output_configuration;
  public Role $role;
}

class PutExternalModelResult {
}

class PutModelRequest {
  public description $description;
  public LabelSchema $label_schema;
  public identifier $model_id;
  public ModelTypeEnum $model_type;
  public ModelVariablesList $model_variables;
  public TrainingDataSource $training_data_source;
}

class PutModelResult {
}

class PutOutcomeRequest {
  public description $description;
  public identifier $name;
}

class PutOutcomeResult {
}

class ResourceNotFoundException {
  public string $message;
}

class Role {
  public string $arn;
  public string $name;
}

class Rule {
  public identifier $detector_id;
  public identifier $rule_id;
  public nonEmptyString $rule_version;
}

class RuleDetail {
  public time $created_time;
  public description $description;
  public identifier $detector_id;
  public ruleExpression $expression;
  public Language $language;
  public time $last_updated_time;
  public NonEmptyListOfStrings $outcomes;
  public identifier $rule_id;
  public nonEmptyString $rule_version;
}

class RuleDetailList {
}

class RuleExecutionMode {
}

class RuleList {
}

class RuleResult {
  public ListOfStrings $outcomes;
  public string $rule_id;
}

class RulesMaxResults {
}

class ThrottlingException {
  public string $message;
}

class TrainingDataSource {
  public iamRoleArn $data_access_role_arn;
  public s3BucketLocation $data_location;
}

class UpdateDetectorVersionMetadataRequest {
  public description $description;
  public identifier $detector_id;
  public nonEmptyString $detector_version_id;
}

class UpdateDetectorVersionMetadataResult {
}

class UpdateDetectorVersionRequest {
  public description $description;
  public identifier $detector_id;
  public nonEmptyString $detector_version_id;
  public ListOfStrings $external_model_endpoints;
  public ListOfModelVersions $model_versions;
  public RuleExecutionMode $rule_execution_mode;
  public RuleList $rules;
}

class UpdateDetectorVersionResult {
}

class UpdateDetectorVersionStatusRequest {
  public identifier $detector_id;
  public nonEmptyString $detector_version_id;
  public DetectorVersionStatus $status;
}

class UpdateDetectorVersionStatusResult {
}

class UpdateModelVersionRequest {
  public description $description;
  public identifier $model_id;
  public ModelTypeEnum $model_type;
  public nonEmptyString $model_version_number;
  public ModelVersionStatus $status;
}

class UpdateModelVersionResult {
}

class UpdateRuleMetadataRequest {
  public description $description;
  public Rule $rule;
}

class UpdateRuleMetadataResult {
}

class UpdateRuleVersionRequest {
  public description $description;
  public ruleExpression $expression;
  public Language $language;
  public NonEmptyListOfStrings $outcomes;
  public Rule $rule;
}

class UpdateRuleVersionResult {
  public Rule $rule;
}

class UpdateVariableRequest {
  public string $default_value;
  public string $description;
  public string $name;
  public string $variable_type;
}

class UpdateVariableResult {
}

class ValidationException {
  public string $message;
}

class Variable {
  public time $created_time;
  public DataSource $data_source;
  public DataType $data_type;
  public string $default_value;
  public string $description;
  public time $last_updated_time;
  public string $name;
  public string $variable_type;
}

class VariableEntry {
  public string $data_source;
  public string $data_type;
  public string $default_value;
  public string $description;
  public string $name;
  public string $variable_type;
}

class VariableEntryList {
}

class VariableList {
}

class VariablesMaxResults {
}

class attributeKey {
}

class attributeValue {
}

class blob {
}

class contentType {
}

class description {
}

class float {
}

class iamRoleArn {
}

class identifier {
}

class integer {
}

class nonEmptyString {
}

class ruleExpression {
}

class s3BucketLocation {
}

class string {
}

class time {
}


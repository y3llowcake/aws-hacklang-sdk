<?hh // strict
namespace slack\aws\machinelearning;

interface  {
  public function AddTags(AddTagsInput) Awaitable<Errors\Result<AddTagsOutput>>;
  public function CreateBatchPrediction(CreateBatchPredictionInput) Awaitable<Errors\Result<CreateBatchPredictionOutput>>;
  public function CreateDataSourceFromRDS(CreateDataSourceFromRDSInput) Awaitable<Errors\Result<CreateDataSourceFromRDSOutput>>;
  public function CreateDataSourceFromRedshift(CreateDataSourceFromRedshiftInput) Awaitable<Errors\Result<CreateDataSourceFromRedshiftOutput>>;
  public function CreateDataSourceFromS3(CreateDataSourceFromS3Input) Awaitable<Errors\Result<CreateDataSourceFromS3Output>>;
  public function CreateEvaluation(CreateEvaluationInput) Awaitable<Errors\Result<CreateEvaluationOutput>>;
  public function CreateMLModel(CreateMLModelInput) Awaitable<Errors\Result<CreateMLModelOutput>>;
  public function CreateRealtimeEndpoint(CreateRealtimeEndpointInput) Awaitable<Errors\Result<CreateRealtimeEndpointOutput>>;
  public function DeleteBatchPrediction(DeleteBatchPredictionInput) Awaitable<Errors\Result<DeleteBatchPredictionOutput>>;
  public function DeleteDataSource(DeleteDataSourceInput) Awaitable<Errors\Result<DeleteDataSourceOutput>>;
  public function DeleteEvaluation(DeleteEvaluationInput) Awaitable<Errors\Result<DeleteEvaluationOutput>>;
  public function DeleteMLModel(DeleteMLModelInput) Awaitable<Errors\Result<DeleteMLModelOutput>>;
  public function DeleteRealtimeEndpoint(DeleteRealtimeEndpointInput) Awaitable<Errors\Result<DeleteRealtimeEndpointOutput>>;
  public function DeleteTags(DeleteTagsInput) Awaitable<Errors\Result<DeleteTagsOutput>>;
  public function DescribeBatchPredictions(DescribeBatchPredictionsInput) Awaitable<Errors\Result<DescribeBatchPredictionsOutput>>;
  public function DescribeDataSources(DescribeDataSourcesInput) Awaitable<Errors\Result<DescribeDataSourcesOutput>>;
  public function DescribeEvaluations(DescribeEvaluationsInput) Awaitable<Errors\Result<DescribeEvaluationsOutput>>;
  public function DescribeMLModels(DescribeMLModelsInput) Awaitable<Errors\Result<DescribeMLModelsOutput>>;
  public function DescribeTags(DescribeTagsInput) Awaitable<Errors\Result<DescribeTagsOutput>>;
  public function GetBatchPrediction(GetBatchPredictionInput) Awaitable<Errors\Result<GetBatchPredictionOutput>>;
  public function GetDataSource(GetDataSourceInput) Awaitable<Errors\Result<GetDataSourceOutput>>;
  public function GetEvaluation(GetEvaluationInput) Awaitable<Errors\Result<GetEvaluationOutput>>;
  public function GetMLModel(GetMLModelInput) Awaitable<Errors\Result<GetMLModelOutput>>;
  public function Predict(PredictInput) Awaitable<Errors\Result<PredictOutput>>;
  public function UpdateBatchPrediction(UpdateBatchPredictionInput) Awaitable<Errors\Result<UpdateBatchPredictionOutput>>;
  public function UpdateDataSource(UpdateDataSourceInput) Awaitable<Errors\Result<UpdateDataSourceOutput>>;
  public function UpdateEvaluation(UpdateEvaluationInput) Awaitable<Errors\Result<UpdateEvaluationOutput>>;
  public function UpdateMLModel(UpdateMLModelInput) Awaitable<Errors\Result<UpdateMLModelOutput>>;
}

class AddTagsInput {
  public EntityId $resource_id;
  public TaggableResourceType $resource_type;
  public TagList $tags;
}

class AddTagsOutput {
  public EntityId $resource_id;
  public TaggableResourceType $resource_type;
}

class Algorithm {
}

class AwsUserArn {
}

class BatchPrediction {
  public EntityId $batch_prediction_data_source_id;
  public EntityId $batch_prediction_id;
  public LongType $compute_time;
  public EpochTime $created_at;
  public AwsUserArn $created_by_iam_user;
  public EpochTime $finished_at;
  public S3Url $input_data_location_s_3;
  public LongType $invalid_record_count;
  public EpochTime $last_updated_at;
  public EntityId $ml_model_id;
  public Message $message;
  public EntityName $name;
  public S3Url $output_uri;
  public EpochTime $started_at;
  public EntityStatus $status;
  public LongType $total_record_count;
}

class BatchPredictionFilterVariable {
}

class BatchPredictions {
}

class ComparatorValue {
}

class ComputeStatistics {
}

class CreateBatchPredictionInput {
  public EntityId $batch_prediction_data_source_id;
  public EntityId $batch_prediction_id;
  public EntityName $batch_prediction_name;
  public EntityId $ml_model_id;
  public S3Url $output_uri;
}

class CreateBatchPredictionOutput {
  public EntityId $batch_prediction_id;
}

class CreateDataSourceFromRDSInput {
  public ComputeStatistics $compute_statistics;
  public EntityId $data_source_id;
  public EntityName $data_source_name;
  public RDSDataSpec $rds_data;
  public RoleARN $role_arn;
}

class CreateDataSourceFromRDSOutput {
  public EntityId $data_source_id;
}

class CreateDataSourceFromRedshiftInput {
  public ComputeStatistics $compute_statistics;
  public EntityId $data_source_id;
  public EntityName $data_source_name;
  public RedshiftDataSpec $data_spec;
  public RoleARN $role_arn;
}

class CreateDataSourceFromRedshiftOutput {
  public EntityId $data_source_id;
}

class CreateDataSourceFromS3Input {
  public ComputeStatistics $compute_statistics;
  public EntityId $data_source_id;
  public EntityName $data_source_name;
  public S3DataSpec $data_spec;
}

class CreateDataSourceFromS3Output {
  public EntityId $data_source_id;
}

class CreateEvaluationInput {
  public EntityId $evaluation_data_source_id;
  public EntityId $evaluation_id;
  public EntityName $evaluation_name;
  public EntityId $ml_model_id;
}

class CreateEvaluationOutput {
  public EntityId $evaluation_id;
}

class CreateMLModelInput {
  public EntityId $ml_model_id;
  public EntityName $ml_model_name;
  public MLModelType $ml_model_type;
  public TrainingParameters $parameters;
  public Recipe $recipe;
  public S3Url $recipe_uri;
  public EntityId $training_data_source_id;
}

class CreateMLModelOutput {
  public EntityId $ml_model_id;
}

class CreateRealtimeEndpointInput {
  public EntityId $ml_model_id;
}

class CreateRealtimeEndpointOutput {
  public EntityId $ml_model_id;
  public RealtimeEndpointInfo $realtime_endpoint_info;
}

class DataRearrangement {
}

class DataSchema {
}

class DataSource {
  public ComputeStatistics $compute_statistics;
  public LongType $compute_time;
  public EpochTime $created_at;
  public AwsUserArn $created_by_iam_user;
  public S3Url $data_location_s_3;
  public DataRearrangement $data_rearrangement;
  public LongType $data_size_in_bytes;
  public EntityId $data_source_id;
  public EpochTime $finished_at;
  public EpochTime $last_updated_at;
  public Message $message;
  public EntityName $name;
  public LongType $number_of_files;
  public RDSMetadata $rds_metadata;
  public RedshiftMetadata $redshift_metadata;
  public RoleARN $role_arn;
  public EpochTime $started_at;
  public EntityStatus $status;
}

class DataSourceFilterVariable {
}

class DataSources {
}

class DeleteBatchPredictionInput {
  public EntityId $batch_prediction_id;
}

class DeleteBatchPredictionOutput {
  public EntityId $batch_prediction_id;
}

class DeleteDataSourceInput {
  public EntityId $data_source_id;
}

class DeleteDataSourceOutput {
  public EntityId $data_source_id;
}

class DeleteEvaluationInput {
  public EntityId $evaluation_id;
}

class DeleteEvaluationOutput {
  public EntityId $evaluation_id;
}

class DeleteMLModelInput {
  public EntityId $ml_model_id;
}

class DeleteMLModelOutput {
  public EntityId $ml_model_id;
}

class DeleteRealtimeEndpointInput {
  public EntityId $ml_model_id;
}

class DeleteRealtimeEndpointOutput {
  public EntityId $ml_model_id;
  public RealtimeEndpointInfo $realtime_endpoint_info;
}

class DeleteTagsInput {
  public EntityId $resource_id;
  public TaggableResourceType $resource_type;
  public TagKeyList $tag_keys;
}

class DeleteTagsOutput {
  public EntityId $resource_id;
  public TaggableResourceType $resource_type;
}

class DescribeBatchPredictionsInput {
  public ComparatorValue $eq;
  public BatchPredictionFilterVariable $filter_variable;
  public ComparatorValue $ge;
  public ComparatorValue $gt;
  public ComparatorValue $le;
  public ComparatorValue $lt;
  public PageLimit $limit;
  public ComparatorValue $ne;
  public StringType $next_token;
  public ComparatorValue $prefix;
  public SortOrder $sort_order;
}

class DescribeBatchPredictionsOutput {
  public StringType $next_token;
  public BatchPredictions $results;
}

class DescribeDataSourcesInput {
  public ComparatorValue $eq;
  public DataSourceFilterVariable $filter_variable;
  public ComparatorValue $ge;
  public ComparatorValue $gt;
  public ComparatorValue $le;
  public ComparatorValue $lt;
  public PageLimit $limit;
  public ComparatorValue $ne;
  public StringType $next_token;
  public ComparatorValue $prefix;
  public SortOrder $sort_order;
}

class DescribeDataSourcesOutput {
  public StringType $next_token;
  public DataSources $results;
}

class DescribeEvaluationsInput {
  public ComparatorValue $eq;
  public EvaluationFilterVariable $filter_variable;
  public ComparatorValue $ge;
  public ComparatorValue $gt;
  public ComparatorValue $le;
  public ComparatorValue $lt;
  public PageLimit $limit;
  public ComparatorValue $ne;
  public StringType $next_token;
  public ComparatorValue $prefix;
  public SortOrder $sort_order;
}

class DescribeEvaluationsOutput {
  public StringType $next_token;
  public Evaluations $results;
}

class DescribeMLModelsInput {
  public ComparatorValue $eq;
  public MLModelFilterVariable $filter_variable;
  public ComparatorValue $ge;
  public ComparatorValue $gt;
  public ComparatorValue $le;
  public ComparatorValue $lt;
  public PageLimit $limit;
  public ComparatorValue $ne;
  public StringType $next_token;
  public ComparatorValue $prefix;
  public SortOrder $sort_order;
}

class DescribeMLModelsOutput {
  public StringType $next_token;
  public MLModels $results;
}

class DescribeTagsInput {
  public EntityId $resource_id;
  public TaggableResourceType $resource_type;
}

class DescribeTagsOutput {
  public EntityId $resource_id;
  public TaggableResourceType $resource_type;
  public TagList $tags;
}

class DetailsAttributes {
}

class DetailsMap {
}

class DetailsValue {
}

class EDPPipelineId {
}

class EDPResourceRole {
}

class EDPSecurityGroupId {
}

class EDPSecurityGroupIds {
}

class EDPServiceRole {
}

class EDPSubnetId {
}

class EntityId {
}

class EntityName {
}

class EntityStatus {
}

class EpochTime {
}

class ErrorCode {
}

class ErrorMessage {
}

class Evaluation {
  public LongType $compute_time;
  public EpochTime $created_at;
  public AwsUserArn $created_by_iam_user;
  public EntityId $evaluation_data_source_id;
  public EntityId $evaluation_id;
  public EpochTime $finished_at;
  public S3Url $input_data_location_s_3;
  public EpochTime $last_updated_at;
  public EntityId $ml_model_id;
  public Message $message;
  public EntityName $name;
  public PerformanceMetrics $performance_metrics;
  public EpochTime $started_at;
  public EntityStatus $status;
}

class EvaluationFilterVariable {
}

class Evaluations {
}

class GetBatchPredictionInput {
  public EntityId $batch_prediction_id;
}

class GetBatchPredictionOutput {
  public EntityId $batch_prediction_data_source_id;
  public EntityId $batch_prediction_id;
  public LongType $compute_time;
  public EpochTime $created_at;
  public AwsUserArn $created_by_iam_user;
  public EpochTime $finished_at;
  public S3Url $input_data_location_s_3;
  public LongType $invalid_record_count;
  public EpochTime $last_updated_at;
  public PresignedS3Url $log_uri;
  public EntityId $ml_model_id;
  public Message $message;
  public EntityName $name;
  public S3Url $output_uri;
  public EpochTime $started_at;
  public EntityStatus $status;
  public LongType $total_record_count;
}

class GetDataSourceInput {
  public EntityId $data_source_id;
  public Verbose $verbose;
}

class GetDataSourceOutput {
  public ComputeStatistics $compute_statistics;
  public LongType $compute_time;
  public EpochTime $created_at;
  public AwsUserArn $created_by_iam_user;
  public S3Url $data_location_s_3;
  public DataRearrangement $data_rearrangement;
  public LongType $data_size_in_bytes;
  public EntityId $data_source_id;
  public DataSchema $data_source_schema;
  public EpochTime $finished_at;
  public EpochTime $last_updated_at;
  public PresignedS3Url $log_uri;
  public Message $message;
  public EntityName $name;
  public LongType $number_of_files;
  public RDSMetadata $rds_metadata;
  public RedshiftMetadata $redshift_metadata;
  public RoleARN $role_arn;
  public EpochTime $started_at;
  public EntityStatus $status;
}

class GetEvaluationInput {
  public EntityId $evaluation_id;
}

class GetEvaluationOutput {
  public LongType $compute_time;
  public EpochTime $created_at;
  public AwsUserArn $created_by_iam_user;
  public EntityId $evaluation_data_source_id;
  public EntityId $evaluation_id;
  public EpochTime $finished_at;
  public S3Url $input_data_location_s_3;
  public EpochTime $last_updated_at;
  public PresignedS3Url $log_uri;
  public EntityId $ml_model_id;
  public Message $message;
  public EntityName $name;
  public PerformanceMetrics $performance_metrics;
  public EpochTime $started_at;
  public EntityStatus $status;
}

class GetMLModelInput {
  public EntityId $ml_model_id;
  public Verbose $verbose;
}

class GetMLModelOutput {
  public LongType $compute_time;
  public EpochTime $created_at;
  public AwsUserArn $created_by_iam_user;
  public RealtimeEndpointInfo $endpoint_info;
  public EpochTime $finished_at;
  public S3Url $input_data_location_s_3;
  public EpochTime $last_updated_at;
  public PresignedS3Url $log_uri;
  public EntityId $ml_model_id;
  public MLModelType $ml_model_type;
  public Message $message;
  public MLModelName $name;
  public Recipe $recipe;
  public DataSchema $schema;
  public ScoreThreshold $score_threshold;
  public EpochTime $score_threshold_last_updated_at;
  public LongType $size_in_bytes;
  public EpochTime $started_at;
  public EntityStatus $status;
  public EntityId $training_data_source_id;
  public TrainingParameters $training_parameters;
}

class IdempotentParameterMismatchException {
  public ErrorCode $code;
  public ErrorMessage $message;
}

class IntegerType {
}

class InternalServerException {
  public ErrorCode $code;
  public ErrorMessage $message;
}

class InvalidInputException {
  public ErrorCode $code;
  public ErrorMessage $message;
}

class InvalidTagException {
  public ErrorMessage $message;
}

class Label {
}

class LimitExceededException {
  public ErrorCode $code;
  public ErrorMessage $message;
}

class LongType {
}

class MLModel {
  public Algorithm $algorithm;
  public LongType $compute_time;
  public EpochTime $created_at;
  public AwsUserArn $created_by_iam_user;
  public RealtimeEndpointInfo $endpoint_info;
  public EpochTime $finished_at;
  public S3Url $input_data_location_s_3;
  public EpochTime $last_updated_at;
  public EntityId $ml_model_id;
  public MLModelType $ml_model_type;
  public Message $message;
  public MLModelName $name;
  public ScoreThreshold $score_threshold;
  public EpochTime $score_threshold_last_updated_at;
  public LongType $size_in_bytes;
  public EpochTime $started_at;
  public EntityStatus $status;
  public EntityId $training_data_source_id;
  public TrainingParameters $training_parameters;
}

class MLModelFilterVariable {
}

class MLModelName {
}

class MLModelType {
}

class MLModels {
}

class Message {
}

class PageLimit {
}

class PerformanceMetrics {
  public PerformanceMetricsProperties $properties;
}

class PerformanceMetricsProperties {
}

class PerformanceMetricsPropertyKey {
}

class PerformanceMetricsPropertyValue {
}

class PredictInput {
  public EntityId $ml_model_id;
  public VipURL $predict_endpoint;
  public Record $record;
}

class PredictOutput {
  public Prediction $prediction;
}

class Prediction {
  public DetailsMap $details;
  public Label $predicted_label;
  public ScoreValuePerLabelMap $predicted_scores;
  public floatLabel $predicted_value;
}

class PredictorNotMountedException {
  public ErrorMessage $message;
}

class PresignedS3Url {
}

class RDSDataSpec {
  public DataRearrangement $data_rearrangement;
  public DataSchema $data_schema;
  public S3Url $data_schema_uri;
  public RDSDatabaseCredentials $database_credentials;
  public RDSDatabase $database_information;
  public EDPResourceRole $resource_role;
  public S3Url $s_3_staging_location;
  public EDPSecurityGroupIds $security_group_ids;
  public RDSSelectSqlQuery $select_sql_query;
  public EDPServiceRole $service_role;
  public EDPSubnetId $subnet_id;
}

class RDSDatabase {
  public RDSDatabaseName $database_name;
  public RDSInstanceIdentifier $instance_identifier;
}

class RDSDatabaseCredentials {
  public RDSDatabasePassword $password;
  public RDSDatabaseUsername $username;
}

class RDSDatabaseName {
}

class RDSDatabasePassword {
}

class RDSDatabaseUsername {
}

class RDSInstanceIdentifier {
}

class RDSMetadata {
  public EDPPipelineId $data_pipeline_id;
  public RDSDatabase $database;
  public RDSDatabaseUsername $database_user_name;
  public EDPResourceRole $resource_role;
  public RDSSelectSqlQuery $select_sql_query;
  public EDPServiceRole $service_role;
}

class RDSSelectSqlQuery {
}

class RealtimeEndpointInfo {
  public EpochTime $created_at;
  public RealtimeEndpointStatus $endpoint_status;
  public VipURL $endpoint_url;
  public IntegerType $peak_requests_per_second;
}

class RealtimeEndpointStatus {
}

class Recipe {
}

class Record {
}

class RedshiftClusterIdentifier {
}

class RedshiftDataSpec {
  public DataRearrangement $data_rearrangement;
  public DataSchema $data_schema;
  public S3Url $data_schema_uri;
  public RedshiftDatabaseCredentials $database_credentials;
  public RedshiftDatabase $database_information;
  public S3Url $s_3_staging_location;
  public RedshiftSelectSqlQuery $select_sql_query;
}

class RedshiftDatabase {
  public RedshiftClusterIdentifier $cluster_identifier;
  public RedshiftDatabaseName $database_name;
}

class RedshiftDatabaseCredentials {
  public RedshiftDatabasePassword $password;
  public RedshiftDatabaseUsername $username;
}

class RedshiftDatabaseName {
}

class RedshiftDatabasePassword {
}

class RedshiftDatabaseUsername {
}

class RedshiftMetadata {
  public RedshiftDatabaseUsername $database_user_name;
  public RedshiftDatabase $redshift_database;
  public RedshiftSelectSqlQuery $select_sql_query;
}

class RedshiftSelectSqlQuery {
}

class ResourceNotFoundException {
  public ErrorCode $code;
  public ErrorMessage $message;
}

class RoleARN {
}

class S3DataSpec {
  public S3Url $data_location_s_3;
  public DataRearrangement $data_rearrangement;
  public DataSchema $data_schema;
  public S3Url $data_schema_location_s_3;
}

class S3Url {
}

class ScoreThreshold {
}

class ScoreValue {
}

class ScoreValuePerLabelMap {
}

class SortOrder {
}

class StringType {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagLimitExceededException {
  public ErrorMessage $message;
}

class TagList {
}

class TagValue {
}

class TaggableResourceType {
}

class TrainingParameters {
}

class UpdateBatchPredictionInput {
  public EntityId $batch_prediction_id;
  public EntityName $batch_prediction_name;
}

class UpdateBatchPredictionOutput {
  public EntityId $batch_prediction_id;
}

class UpdateDataSourceInput {
  public EntityId $data_source_id;
  public EntityName $data_source_name;
}

class UpdateDataSourceOutput {
  public EntityId $data_source_id;
}

class UpdateEvaluationInput {
  public EntityId $evaluation_id;
  public EntityName $evaluation_name;
}

class UpdateEvaluationOutput {
  public EntityId $evaluation_id;
}

class UpdateMLModelInput {
  public EntityId $ml_model_id;
  public EntityName $ml_model_name;
  public ScoreThreshold $score_threshold;
}

class UpdateMLModelOutput {
  public EntityId $ml_model_id;
}

class VariableName {
}

class VariableValue {
}

class Verbose {
}

class VipURL {
}

class floatLabel {
}


<?hh // strict
namespace slack\aws\forecast;

interface forecast {
  public function CreateDataset(CreateDatasetRequest) Awaitable<Errors\Result<CreateDatasetResponse>>;
  public function DeleteDatasetGroup(DeleteDatasetGroupRequest) Awaitable<Errors\Error>;
  public function DeleteForecast(DeleteForecastRequest) Awaitable<Errors\Error>;
  public function DescribeForecastExportJob(DescribeForecastExportJobRequest) Awaitable<Errors\Result<DescribeForecastExportJobResponse>>;
  public function ListDatasetImportJobs(ListDatasetImportJobsRequest) Awaitable<Errors\Result<ListDatasetImportJobsResponse>>;
  public function ListForecastExportJobs(ListForecastExportJobsRequest) Awaitable<Errors\Result<ListForecastExportJobsResponse>>;
  public function ListForecasts(ListForecastsRequest) Awaitable<Errors\Result<ListForecastsResponse>>;
  public function CreateForecast(CreateForecastRequest) Awaitable<Errors\Result<CreateForecastResponse>>;
  public function CreatePredictor(CreatePredictorRequest) Awaitable<Errors\Result<CreatePredictorResponse>>;
  public function DeleteDataset(DeleteDatasetRequest) Awaitable<Errors\Error>;
  public function DeletePredictor(DeletePredictorRequest) Awaitable<Errors\Error>;
  public function DescribeDatasetGroup(DescribeDatasetGroupRequest) Awaitable<Errors\Result<DescribeDatasetGroupResponse>>;
  public function ListDatasetGroups(ListDatasetGroupsRequest) Awaitable<Errors\Result<ListDatasetGroupsResponse>>;
  public function UpdateDatasetGroup(UpdateDatasetGroupRequest) Awaitable<Errors\Result<UpdateDatasetGroupResponse>>;
  public function CreateForecastExportJob(CreateForecastExportJobRequest) Awaitable<Errors\Result<CreateForecastExportJobResponse>>;
  public function DeleteDatasetImportJob(DeleteDatasetImportJobRequest) Awaitable<Errors\Error>;
  public function DescribeDatasetImportJob(DescribeDatasetImportJobRequest) Awaitable<Errors\Result<DescribeDatasetImportJobResponse>>;
  public function DescribeForecast(DescribeForecastRequest) Awaitable<Errors\Result<DescribeForecastResponse>>;
  public function ListPredictors(ListPredictorsRequest) Awaitable<Errors\Result<ListPredictorsResponse>>;
  public function CreateDatasetGroup(CreateDatasetGroupRequest) Awaitable<Errors\Result<CreateDatasetGroupResponse>>;
  public function CreateDatasetImportJob(CreateDatasetImportJobRequest) Awaitable<Errors\Result<CreateDatasetImportJobResponse>>;
  public function DeleteForecastExportJob(DeleteForecastExportJobRequest) Awaitable<Errors\Error>;
  public function DescribeDataset(DescribeDatasetRequest) Awaitable<Errors\Result<DescribeDatasetResponse>>;
  public function DescribePredictor(DescribePredictorRequest) Awaitable<Errors\Result<DescribePredictorResponse>>;
  public function GetAccuracyMetrics(GetAccuracyMetricsRequest) Awaitable<Errors\Result<GetAccuracyMetricsResponse>>;
  public function ListDatasets(ListDatasetsRequest) Awaitable<Errors\Result<ListDatasetsResponse>>;
}

class DescribePredictorResponse {
  public TrainingParameters $training_parameters;
  public FeaturizationConfig $featurization_config;
  public Timestamp $last_modification_time;
  public Name $predictor_arn;
  public int $forecast_horizon;
  public ArnList $dataset_import_job_arns;
  public Status $status;
  public Message $message;
  public Timestamp $creation_time;
  public EvaluationParameters $evaluation_parameters;
  public EncryptionConfig $encryption_config;
  public boolean $perform_auto_ml;
  public boolean $perform_hpo;
  public HyperParameterTuningJobConfig $hpo_config;
  public InputDataConfig $input_data_config;
  public PredictorExecutionDetails $predictor_execution_details;
  public ArnList $auto_ml_algorithm_arns;
  public Name $predictor_name;
  public Arn $algorithm_arn;
}

class ListForecastExportJobsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
  public Filters $filters;
}

class TrainingParameters {
}

class DeletePredictorRequest {
  public Arn $predictor_arn;
}

class DescribeDatasetGroupResponse {
  public Name $dataset_group_name;
  public Arn $dataset_group_arn;
  public ArnList $dataset_arns;
  public Domain $domain;
  public Status $status;
  public Timestamp $creation_time;
  public Timestamp $last_modification_time;
}

class DescribeForecastRequest {
  public Arn $forecast_arn;
}

class HyperParameterTuningJobConfig {
  public ParameterRanges $parameter_ranges;
}

class IntegerParameterRanges {
}

class Datasets {
}

class ForecastExportJobs {
}

class ForecastType {
}

class ResourceAlreadyExistsException {
  public ErrorMessage $message;
}

class ListDatasetsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class ListDatasetsResponse {
  public NextToken $next_token;
  public Datasets $datasets;
}

class PredictorExecutions {
}

class DescribeForecastResponse {
  public string $status;
  public Arn $forecast_arn;
  public Arn $predictor_arn;
  public Arn $dataset_group_arn;
  public ErrorMessage $message;
  public Timestamp $creation_time;
  public Timestamp $last_modification_time;
  public Name $forecast_name;
  public ForecastTypes $forecast_types;
}

class CreateForecastExportJobResponse {
  public Arn $forecast_export_job_arn;
}

class DescribeDatasetImportJobRequest {
  public Arn $dataset_import_job_arn;
}

class DescribeForecastExportJobRequest {
  public Arn $forecast_export_job_arn;
}

class Arn {
}

class NextToken {
}

class CreateDatasetGroupRequest {
  public Name $dataset_group_name;
  public Domain $domain;
  public ArnList $dataset_arns;
}

class InputDataConfig {
  public Arn $dataset_group_arn;
  public SupplementaryFeatures $supplementary_features;
}

class Value {
}

class ForecastTypes {
}

class ListDatasetImportJobsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
  public Filters $filters;
}

class Schema {
  public SchemaAttributes $attributes;
}

class TestWindowSummary {
  public Timestamp $test_window_start;
  public Timestamp $test_window_end;
  public Status $status;
  public ErrorMessage $message;
}

class DatasetImportJobs {
}

class DatasetType {
}

class DescribeForecastExportJobResponse {
  public Timestamp $creation_time;
  public Timestamp $last_modification_time;
  public Arn $forecast_export_job_arn;
  public Name $forecast_export_job_name;
  public Arn $forecast_arn;
  public DataDestination $destination;
  public Message $message;
  public Status $status;
}

class ForecastDimensions {
}

class Frequency {
}

class CreateDatasetGroupResponse {
  public Arn $dataset_group_arn;
}

class CreateForecastExportJobRequest {
  public DataDestination $destination;
  public Name $forecast_export_job_name;
  public Arn $forecast_arn;
}

class DeleteDatasetRequest {
  public Arn $dataset_arn;
}

class Featurization {
  public Name $attribute_name;
  public FeaturizationPipeline $featurization_pipeline;
}

class FeaturizationMethod {
  public FeaturizationMethodName $featurization_method_name;
  public FeaturizationMethodParameters $featurization_method_parameters;
}

class Featurizations {
}

class GetAccuracyMetricsRequest {
  public Arn $predictor_arn;
}

class DeleteDatasetImportJobRequest {
  public Arn $dataset_import_job_arn;
}

class Double {
}

class EvaluationParameters {
  public int $number_of_backtest_windows;
  public int $back_test_window_offset;
}

class Message {
}

class PredictorExecution {
  public Arn $algorithm_arn;
  public TestWindowDetails $test_windows;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class ArnList {
}

class DeleteDatasetGroupRequest {
  public Arn $dataset_group_arn;
}

class FeaturizationConfig {
  public Frequency $forecast_frequency;
  public ForecastDimensions $forecast_dimensions;
  public Featurizations $featurizations;
}

class DescribePredictorRequest {
  public Arn $predictor_arn;
}

class ListForecastsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
  public Filters $filters;
}

class Statistics {
  public int $count;
  public int $count_distinct;
  public int $count_null;
  public int $count_nan;
  public string $min;
  public string $max;
  public Double $avg;
  public Double $stddev;
}

class CategoricalParameterRange {
  public Name $name;
  public Values $values;
}

class DeleteForecastExportJobRequest {
  public Arn $forecast_export_job_arn;
}

class Filter {
  public Arn $value;
  public FilterConditionString $condition;
  public string $key;
}

class CreatePredictorRequest {
  public EncryptionConfig $encryption_config;
  public Name $predictor_name;
  public Arn $algorithm_arn;
  public EvaluationParameters $evaluation_parameters;
  public InputDataConfig $input_data_config;
  public FeaturizationConfig $featurization_config;
  public int $forecast_horizon;
  public boolean $perform_auto_ml;
  public boolean $perform_hpo;
  public TrainingParameters $training_parameters;
  public HyperParameterTuningJobConfig $hpo_config;
}

class DescribeDatasetRequest {
  public Arn $dataset_arn;
}

class Timestamp {
}

class ListPredictorsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
  public Filters $filters;
}

class SchemaAttributes {
}

class CreateDatasetRequest {
  public EncryptionConfig $encryption_config;
  public Name $dataset_name;
  public Domain $domain;
  public DatasetType $dataset_type;
  public Frequency $data_frequency;
  public Schema $schema;
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListForecastExportJobsResponse {
  public NextToken $next_token;
  public ForecastExportJobs $forecast_export_jobs;
}

class WeightedQuantileLosses {
}

class CreatePredictorResponse {
  public Arn $predictor_arn;
}

class Filters {
}

class ScalingType {
}

class ForecastSummary {
  public Timestamp $last_modification_time;
  public Arn $forecast_arn;
  public Name $forecast_name;
  public string $predictor_arn;
  public string $dataset_group_arn;
  public Status $status;
  public ErrorMessage $message;
  public Timestamp $creation_time;
}

class ParameterKey {
}

class String {
}

class SupplementaryFeature {
  public Value $value;
  public Name $name;
}

class CreateDatasetResponse {
  public Arn $dataset_arn;
}

class Metrics {
  public Double $rmse;
  public WeightedQuantileLosses $weighted_quantile_losses;
}

class Predictors {
}

class CategoricalParameterRanges {
}

class CreateDatasetImportJobResponse {
  public Arn $dataset_import_job_arn;
}

class ListDatasetImportJobsResponse {
  public DatasetImportJobs $dataset_import_jobs;
  public NextToken $next_token;
}

class ListDatasetGroupsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class DataSource {
  public S3Config $s_3_config;
}

class DatasetImportJobSummary {
  public DataSource $data_source;
  public Status $status;
  public ErrorMessage $message;
  public Timestamp $creation_time;
  public Timestamp $last_modification_time;
  public Arn $dataset_import_job_arn;
  public Name $dataset_import_job_name;
}

class FieldStatistics {
}

class KMSKeyArn {
}

class ParameterRanges {
  public CategoricalParameterRanges $categorical_parameter_ranges;
  public ContinuousParameterRanges $continuous_parameter_ranges;
  public IntegerParameterRanges $integer_parameter_ranges;
}

class WeightedQuantileLoss {
  public Double $quantile;
  public Double $loss_value;
}

class EvaluationResult {
  public Arn $algorithm_arn;
  public TestWindows $test_windows;
}

class Forecasts {
}

class DatasetSummary {
  public Arn $dataset_arn;
  public Name $dataset_name;
  public DatasetType $dataset_type;
  public Domain $domain;
  public Timestamp $creation_time;
  public Timestamp $last_modification_time;
}

class TimestampFormat {
}

class Boolean {
}

class CreateForecastRequest {
  public Name $forecast_name;
  public Arn $predictor_arn;
  public ForecastTypes $forecast_types;
}

class CreateForecastResponse {
  public Arn $forecast_arn;
}

class ContinuousParameterRange {
  public Name $name;
  public Double $max_value;
  public Double $min_value;
  public ScalingType $scaling_type;
}

class EvaluationType {
}

class ListForecastsResponse {
  public Forecasts $forecasts;
  public NextToken $next_token;
}

class ErrorMessage {
}

class ListDatasetGroupsResponse {
  public DatasetGroups $dataset_groups;
  public NextToken $next_token;
}

class PredictorEvaluationResults {
}

class PredictorExecutionDetails {
  public PredictorExecutions $predictor_executions;
}

class UpdateDatasetGroupRequest {
  public Arn $dataset_group_arn;
  public ArnList $dataset_arns;
}

class DataDestination {
  public S3Config $s_3_config;
}

class DatasetGroups {
}

class DeleteForecastRequest {
  public Arn $forecast_arn;
}

class MaxResults {
}

class DescribeDatasetResponse {
  public Schema $schema;
  public Arn $dataset_arn;
  public Name $dataset_name;
  public Domain $domain;
  public DatasetType $dataset_type;
  public Frequency $data_frequency;
  public EncryptionConfig $encryption_config;
  public Status $status;
  public Timestamp $creation_time;
  public Timestamp $last_modification_time;
}

class FilterConditionString {
}

class IntegerParameterRange {
  public Name $name;
  public int $max_value;
  public int $min_value;
  public ScalingType $scaling_type;
}

class EncryptionConfig {
  public Arn $role_arn;
  public KMSKeyArn $kms_key_arn;
}

class ForecastExportJobSummary {
  public Timestamp $creation_time;
  public Timestamp $last_modification_time;
  public Arn $forecast_export_job_arn;
  public Name $forecast_export_job_name;
  public DataDestination $destination;
  public Status $status;
  public ErrorMessage $message;
}

class S3Path {
}

class UpdateDatasetGroupResponse {
}

class CreateDatasetImportJobRequest {
  public TimestampFormat $timestamp_format;
  public Name $dataset_import_job_name;
  public Arn $dataset_arn;
  public DataSource $data_source;
}

class DatasetGroupSummary {
  public Timestamp $creation_time;
  public Timestamp $last_modification_time;
  public Arn $dataset_group_arn;
  public Name $dataset_group_name;
}

class DescribeDatasetImportJobResponse {
  public DataSource $data_source;
  public Double $data_size;
  public Message $message;
  public Timestamp $creation_time;
  public Timestamp $last_modification_time;
  public Name $dataset_import_job_name;
  public Arn $dataset_import_job_arn;
  public FieldStatistics $field_statistics;
  public Status $status;
  public Arn $dataset_arn;
  public TimestampFormat $timestamp_format;
}

class SupplementaryFeatures {
}

class ListPredictorsResponse {
  public Predictors $predictors;
  public NextToken $next_token;
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class S3Config {
  public KMSKeyArn $kms_key_arn;
  public S3Path $path;
  public Arn $role_arn;
}

class WindowSummary {
  public Timestamp $test_window_start;
  public Timestamp $test_window_end;
  public int $item_count;
  public EvaluationType $evaluation_type;
  public Metrics $metrics;
}

class DescribeDatasetGroupRequest {
  public Arn $dataset_group_arn;
}

class Domain {
}

class FeaturizationMethodName {
}

class FeaturizationPipeline {
}

class Status {
}

class TestWindows {
}

class ContinuousParameterRanges {
}

class FeaturizationMethodParameters {
}

class InvalidInputException {
  public ErrorMessage $message;
}

class InvalidNextTokenException {
  public ErrorMessage $message;
}

class Name {
}

class PredictorSummary {
  public Arn $predictor_arn;
  public Name $predictor_name;
  public Arn $dataset_group_arn;
  public Status $status;
  public ErrorMessage $message;
  public Timestamp $creation_time;
  public Timestamp $last_modification_time;
}

class Values {
}

class AttributeType {
}

class GetAccuracyMetricsResponse {
  public PredictorEvaluationResults $predictor_evaluation_results;
}

class Integer {
}

class ParameterValue {
}

class SchemaAttribute {
  public Name $attribute_name;
  public AttributeType $attribute_type;
}

class TestWindowDetails {
}


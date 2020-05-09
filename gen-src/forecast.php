<?hh // strict
namespace slack\aws\forecast;

interface forecast {
  public function CreateDataset(CreateDatasetRequest): Awaitable<Errors\Result<CreateDatasetResponse>>;
  public function CreateDatasetGroup(CreateDatasetGroupRequest): Awaitable<Errors\Result<CreateDatasetGroupResponse>>;
  public function CreateDatasetImportJob(CreateDatasetImportJobRequest): Awaitable<Errors\Result<CreateDatasetImportJobResponse>>;
  public function CreateForecast(CreateForecastRequest): Awaitable<Errors\Result<CreateForecastResponse>>;
  public function CreateForecastExportJob(CreateForecastExportJobRequest): Awaitable<Errors\Result<CreateForecastExportJobResponse>>;
  public function CreatePredictor(CreatePredictorRequest): Awaitable<Errors\Result<CreatePredictorResponse>>;
  public function DeleteDataset(DeleteDatasetRequest): Awaitable<Errors\Error>;
  public function DeleteDatasetGroup(DeleteDatasetGroupRequest): Awaitable<Errors\Error>;
  public function DeleteDatasetImportJob(DeleteDatasetImportJobRequest): Awaitable<Errors\Error>;
  public function DeleteForecast(DeleteForecastRequest): Awaitable<Errors\Error>;
  public function DeleteForecastExportJob(DeleteForecastExportJobRequest): Awaitable<Errors\Error>;
  public function DeletePredictor(DeletePredictorRequest): Awaitable<Errors\Error>;
  public function DescribeDataset(DescribeDatasetRequest): Awaitable<Errors\Result<DescribeDatasetResponse>>;
  public function DescribeDatasetGroup(DescribeDatasetGroupRequest): Awaitable<Errors\Result<DescribeDatasetGroupResponse>>;
  public function DescribeDatasetImportJob(DescribeDatasetImportJobRequest): Awaitable<Errors\Result<DescribeDatasetImportJobResponse>>;
  public function DescribeForecast(DescribeForecastRequest): Awaitable<Errors\Result<DescribeForecastResponse>>;
  public function DescribeForecastExportJob(DescribeForecastExportJobRequest): Awaitable<Errors\Result<DescribeForecastExportJobResponse>>;
  public function DescribePredictor(DescribePredictorRequest): Awaitable<Errors\Result<DescribePredictorResponse>>;
  public function GetAccuracyMetrics(GetAccuracyMetricsRequest): Awaitable<Errors\Result<GetAccuracyMetricsResponse>>;
  public function ListDatasetGroups(ListDatasetGroupsRequest): Awaitable<Errors\Result<ListDatasetGroupsResponse>>;
  public function ListDatasetImportJobs(ListDatasetImportJobsRequest): Awaitable<Errors\Result<ListDatasetImportJobsResponse>>;
  public function ListDatasets(ListDatasetsRequest): Awaitable<Errors\Result<ListDatasetsResponse>>;
  public function ListForecastExportJobs(ListForecastExportJobsRequest): Awaitable<Errors\Result<ListForecastExportJobsResponse>>;
  public function ListForecasts(ListForecastsRequest): Awaitable<Errors\Result<ListForecastsResponse>>;
  public function ListPredictors(ListPredictorsRequest): Awaitable<Errors\Result<ListPredictorsResponse>>;
  public function UpdateDatasetGroup(UpdateDatasetGroupRequest): Awaitable<Errors\Result<UpdateDatasetGroupResponse>>;
}

class Arn {
}

class ArnList {
}

class AttributeType {
}

class Boolean {
}

class CategoricalParameterRange {
  public Name $name;
  public Values $values;
}

class CategoricalParameterRanges {
}

class ContinuousParameterRange {
  public Double $max_value;
  public Double $min_value;
  public Name $name;
  public ScalingType $scaling_type;
}

class ContinuousParameterRanges {
}

class CreateDatasetGroupRequest {
  public ArnList $dataset_arns;
  public Name $dataset_group_name;
  public Domain $domain;
}

class CreateDatasetGroupResponse {
  public Arn $dataset_group_arn;
}

class CreateDatasetImportJobRequest {
  public DataSource $data_source;
  public Arn $dataset_arn;
  public Name $dataset_import_job_name;
  public TimestampFormat $timestamp_format;
}

class CreateDatasetImportJobResponse {
  public Arn $dataset_import_job_arn;
}

class CreateDatasetRequest {
  public Frequency $data_frequency;
  public Name $dataset_name;
  public DatasetType $dataset_type;
  public Domain $domain;
  public EncryptionConfig $encryption_config;
  public Schema $schema;
}

class CreateDatasetResponse {
  public Arn $dataset_arn;
}

class CreateForecastExportJobRequest {
  public DataDestination $destination;
  public Arn $forecast_arn;
  public Name $forecast_export_job_name;
}

class CreateForecastExportJobResponse {
  public Arn $forecast_export_job_arn;
}

class CreateForecastRequest {
  public Name $forecast_name;
  public ForecastTypes $forecast_types;
  public Arn $predictor_arn;
}

class CreateForecastResponse {
  public Arn $forecast_arn;
}

class CreatePredictorRequest {
  public Arn $algorithm_arn;
  public EncryptionConfig $encryption_config;
  public EvaluationParameters $evaluation_parameters;
  public FeaturizationConfig $featurization_config;
  public int $forecast_horizon;
  public HyperParameterTuningJobConfig $hpo_config;
  public InputDataConfig $input_data_config;
  public boolean $perform_auto_ml;
  public boolean $perform_hpo;
  public Name $predictor_name;
  public TrainingParameters $training_parameters;
}

class CreatePredictorResponse {
  public Arn $predictor_arn;
}

class DataDestination {
  public S3Config $s_3_config;
}

class DataSource {
  public S3Config $s_3_config;
}

class DatasetGroupSummary {
  public Timestamp $creation_time;
  public Arn $dataset_group_arn;
  public Name $dataset_group_name;
  public Timestamp $last_modification_time;
}

class DatasetGroups {
}

class DatasetImportJobSummary {
  public Timestamp $creation_time;
  public DataSource $data_source;
  public Arn $dataset_import_job_arn;
  public Name $dataset_import_job_name;
  public Timestamp $last_modification_time;
  public ErrorMessage $message;
  public Status $status;
}

class DatasetImportJobs {
}

class DatasetSummary {
  public Timestamp $creation_time;
  public Arn $dataset_arn;
  public Name $dataset_name;
  public DatasetType $dataset_type;
  public Domain $domain;
  public Timestamp $last_modification_time;
}

class DatasetType {
}

class Datasets {
}

class DeleteDatasetGroupRequest {
  public Arn $dataset_group_arn;
}

class DeleteDatasetImportJobRequest {
  public Arn $dataset_import_job_arn;
}

class DeleteDatasetRequest {
  public Arn $dataset_arn;
}

class DeleteForecastExportJobRequest {
  public Arn $forecast_export_job_arn;
}

class DeleteForecastRequest {
  public Arn $forecast_arn;
}

class DeletePredictorRequest {
  public Arn $predictor_arn;
}

class DescribeDatasetGroupRequest {
  public Arn $dataset_group_arn;
}

class DescribeDatasetGroupResponse {
  public Timestamp $creation_time;
  public ArnList $dataset_arns;
  public Arn $dataset_group_arn;
  public Name $dataset_group_name;
  public Domain $domain;
  public Timestamp $last_modification_time;
  public Status $status;
}

class DescribeDatasetImportJobRequest {
  public Arn $dataset_import_job_arn;
}

class DescribeDatasetImportJobResponse {
  public Timestamp $creation_time;
  public Double $data_size;
  public DataSource $data_source;
  public Arn $dataset_arn;
  public Arn $dataset_import_job_arn;
  public Name $dataset_import_job_name;
  public FieldStatistics $field_statistics;
  public Timestamp $last_modification_time;
  public Message $message;
  public Status $status;
  public TimestampFormat $timestamp_format;
}

class DescribeDatasetRequest {
  public Arn $dataset_arn;
}

class DescribeDatasetResponse {
  public Timestamp $creation_time;
  public Frequency $data_frequency;
  public Arn $dataset_arn;
  public Name $dataset_name;
  public DatasetType $dataset_type;
  public Domain $domain;
  public EncryptionConfig $encryption_config;
  public Timestamp $last_modification_time;
  public Schema $schema;
  public Status $status;
}

class DescribeForecastExportJobRequest {
  public Arn $forecast_export_job_arn;
}

class DescribeForecastExportJobResponse {
  public Timestamp $creation_time;
  public DataDestination $destination;
  public Arn $forecast_arn;
  public Arn $forecast_export_job_arn;
  public Name $forecast_export_job_name;
  public Timestamp $last_modification_time;
  public Message $message;
  public Status $status;
}

class DescribeForecastRequest {
  public Arn $forecast_arn;
}

class DescribeForecastResponse {
  public Timestamp $creation_time;
  public Arn $dataset_group_arn;
  public Arn $forecast_arn;
  public Name $forecast_name;
  public ForecastTypes $forecast_types;
  public Timestamp $last_modification_time;
  public ErrorMessage $message;
  public Arn $predictor_arn;
  public string $status;
}

class DescribePredictorRequest {
  public Arn $predictor_arn;
}

class DescribePredictorResponse {
  public Arn $algorithm_arn;
  public ArnList $auto_ml_algorithm_arns;
  public Timestamp $creation_time;
  public ArnList $dataset_import_job_arns;
  public EncryptionConfig $encryption_config;
  public EvaluationParameters $evaluation_parameters;
  public FeaturizationConfig $featurization_config;
  public int $forecast_horizon;
  public HyperParameterTuningJobConfig $hpo_config;
  public InputDataConfig $input_data_config;
  public Timestamp $last_modification_time;
  public Message $message;
  public boolean $perform_auto_ml;
  public boolean $perform_hpo;
  public Name $predictor_arn;
  public PredictorExecutionDetails $predictor_execution_details;
  public Name $predictor_name;
  public Status $status;
  public TrainingParameters $training_parameters;
}

class Domain {
}

class Double {
}

class EncryptionConfig {
  public KMSKeyArn $kms_key_arn;
  public Arn $role_arn;
}

class ErrorMessage {
}

class EvaluationParameters {
  public int $back_test_window_offset;
  public int $number_of_backtest_windows;
}

class EvaluationResult {
  public Arn $algorithm_arn;
  public TestWindows $test_windows;
}

class EvaluationType {
}

class Featurization {
  public Name $attribute_name;
  public FeaturizationPipeline $featurization_pipeline;
}

class FeaturizationConfig {
  public Featurizations $featurizations;
  public ForecastDimensions $forecast_dimensions;
  public Frequency $forecast_frequency;
}

class FeaturizationMethod {
  public FeaturizationMethodName $featurization_method_name;
  public FeaturizationMethodParameters $featurization_method_parameters;
}

class FeaturizationMethodName {
}

class FeaturizationMethodParameters {
}

class FeaturizationPipeline {
}

class Featurizations {
}

class FieldStatistics {
}

class Filter {
  public FilterConditionString $condition;
  public string $key;
  public Arn $value;
}

class FilterConditionString {
}

class Filters {
}

class ForecastDimensions {
}

class ForecastExportJobSummary {
  public Timestamp $creation_time;
  public DataDestination $destination;
  public Arn $forecast_export_job_arn;
  public Name $forecast_export_job_name;
  public Timestamp $last_modification_time;
  public ErrorMessage $message;
  public Status $status;
}

class ForecastExportJobs {
}

class ForecastSummary {
  public Timestamp $creation_time;
  public string $dataset_group_arn;
  public Arn $forecast_arn;
  public Name $forecast_name;
  public Timestamp $last_modification_time;
  public ErrorMessage $message;
  public string $predictor_arn;
  public Status $status;
}

class ForecastType {
}

class ForecastTypes {
}

class Forecasts {
}

class Frequency {
}

class GetAccuracyMetricsRequest {
  public Arn $predictor_arn;
}

class GetAccuracyMetricsResponse {
  public PredictorEvaluationResults $predictor_evaluation_results;
}

class HyperParameterTuningJobConfig {
  public ParameterRanges $parameter_ranges;
}

class InputDataConfig {
  public Arn $dataset_group_arn;
  public SupplementaryFeatures $supplementary_features;
}

class Integer {
}

class IntegerParameterRange {
  public int $max_value;
  public int $min_value;
  public Name $name;
  public ScalingType $scaling_type;
}

class IntegerParameterRanges {
}

class InvalidInputException {
  public ErrorMessage $message;
}

class InvalidNextTokenException {
  public ErrorMessage $message;
}

class KMSKeyArn {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListDatasetGroupsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDatasetGroupsResponse {
  public DatasetGroups $dataset_groups;
  public NextToken $next_token;
}

class ListDatasetImportJobsRequest {
  public Filters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDatasetImportJobsResponse {
  public DatasetImportJobs $dataset_import_jobs;
  public NextToken $next_token;
}

class ListDatasetsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDatasetsResponse {
  public Datasets $datasets;
  public NextToken $next_token;
}

class ListForecastExportJobsRequest {
  public Filters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListForecastExportJobsResponse {
  public ForecastExportJobs $forecast_export_jobs;
  public NextToken $next_token;
}

class ListForecastsRequest {
  public Filters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListForecastsResponse {
  public Forecasts $forecasts;
  public NextToken $next_token;
}

class ListPredictorsRequest {
  public Filters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListPredictorsResponse {
  public NextToken $next_token;
  public Predictors $predictors;
}

class MaxResults {
}

class Message {
}

class Metrics {
  public Double $rmse;
  public WeightedQuantileLosses $weighted_quantile_losses;
}

class Name {
}

class NextToken {
}

class ParameterKey {
}

class ParameterRanges {
  public CategoricalParameterRanges $categorical_parameter_ranges;
  public ContinuousParameterRanges $continuous_parameter_ranges;
  public IntegerParameterRanges $integer_parameter_ranges;
}

class ParameterValue {
}

class PredictorEvaluationResults {
}

class PredictorExecution {
  public Arn $algorithm_arn;
  public TestWindowDetails $test_windows;
}

class PredictorExecutionDetails {
  public PredictorExecutions $predictor_executions;
}

class PredictorExecutions {
}

class PredictorSummary {
  public Timestamp $creation_time;
  public Arn $dataset_group_arn;
  public Timestamp $last_modification_time;
  public ErrorMessage $message;
  public Arn $predictor_arn;
  public Name $predictor_name;
  public Status $status;
}

class Predictors {
}

class ResourceAlreadyExistsException {
  public ErrorMessage $message;
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class S3Config {
  public KMSKeyArn $kms_key_arn;
  public S3Path $path;
  public Arn $role_arn;
}

class S3Path {
}

class ScalingType {
}

class Schema {
  public SchemaAttributes $attributes;
}

class SchemaAttribute {
  public Name $attribute_name;
  public AttributeType $attribute_type;
}

class SchemaAttributes {
}

class Statistics {
  public Double $avg;
  public int $count;
  public int $count_distinct;
  public int $count_nan;
  public int $count_null;
  public string $max;
  public string $min;
  public Double $stddev;
}

class Status {
}

class String {
}

class SupplementaryFeature {
  public Name $name;
  public Value $value;
}

class SupplementaryFeatures {
}

class TestWindowDetails {
}

class TestWindowSummary {
  public ErrorMessage $message;
  public Status $status;
  public Timestamp $test_window_end;
  public Timestamp $test_window_start;
}

class TestWindows {
}

class Timestamp {
}

class TimestampFormat {
}

class TrainingParameters {
}

class UpdateDatasetGroupRequest {
  public ArnList $dataset_arns;
  public Arn $dataset_group_arn;
}

class UpdateDatasetGroupResponse {
}

class Value {
}

class Values {
}

class WeightedQuantileLoss {
  public Double $loss_value;
  public Double $quantile;
}

class WeightedQuantileLosses {
}

class WindowSummary {
  public EvaluationType $evaluation_type;
  public int $item_count;
  public Metrics $metrics;
  public Timestamp $test_window_end;
  public Timestamp $test_window_start;
}


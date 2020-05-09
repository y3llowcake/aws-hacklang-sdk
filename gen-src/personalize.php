<?hh // strict
namespace slack\aws\personalize;

interface Personalize {
  public function CreateBatchInferenceJob(CreateBatchInferenceJobRequest) Awaitable<Errors\Result<CreateBatchInferenceJobResponse>>;
  public function CreateCampaign(CreateCampaignRequest) Awaitable<Errors\Result<CreateCampaignResponse>>;
  public function CreateDataset(CreateDatasetRequest) Awaitable<Errors\Result<CreateDatasetResponse>>;
  public function CreateDatasetGroup(CreateDatasetGroupRequest) Awaitable<Errors\Result<CreateDatasetGroupResponse>>;
  public function CreateDatasetImportJob(CreateDatasetImportJobRequest) Awaitable<Errors\Result<CreateDatasetImportJobResponse>>;
  public function CreateEventTracker(CreateEventTrackerRequest) Awaitable<Errors\Result<CreateEventTrackerResponse>>;
  public function CreateSchema(CreateSchemaRequest) Awaitable<Errors\Result<CreateSchemaResponse>>;
  public function CreateSolution(CreateSolutionRequest) Awaitable<Errors\Result<CreateSolutionResponse>>;
  public function CreateSolutionVersion(CreateSolutionVersionRequest) Awaitable<Errors\Result<CreateSolutionVersionResponse>>;
  public function DeleteCampaign(DeleteCampaignRequest) Awaitable<Errors\Error>;
  public function DeleteDataset(DeleteDatasetRequest) Awaitable<Errors\Error>;
  public function DeleteDatasetGroup(DeleteDatasetGroupRequest) Awaitable<Errors\Error>;
  public function DeleteEventTracker(DeleteEventTrackerRequest) Awaitable<Errors\Error>;
  public function DeleteSchema(DeleteSchemaRequest) Awaitable<Errors\Error>;
  public function DeleteSolution(DeleteSolutionRequest) Awaitable<Errors\Error>;
  public function DescribeAlgorithm(DescribeAlgorithmRequest) Awaitable<Errors\Result<DescribeAlgorithmResponse>>;
  public function DescribeBatchInferenceJob(DescribeBatchInferenceJobRequest) Awaitable<Errors\Result<DescribeBatchInferenceJobResponse>>;
  public function DescribeCampaign(DescribeCampaignRequest) Awaitable<Errors\Result<DescribeCampaignResponse>>;
  public function DescribeDataset(DescribeDatasetRequest) Awaitable<Errors\Result<DescribeDatasetResponse>>;
  public function DescribeDatasetGroup(DescribeDatasetGroupRequest) Awaitable<Errors\Result<DescribeDatasetGroupResponse>>;
  public function DescribeDatasetImportJob(DescribeDatasetImportJobRequest) Awaitable<Errors\Result<DescribeDatasetImportJobResponse>>;
  public function DescribeEventTracker(DescribeEventTrackerRequest) Awaitable<Errors\Result<DescribeEventTrackerResponse>>;
  public function DescribeFeatureTransformation(DescribeFeatureTransformationRequest) Awaitable<Errors\Result<DescribeFeatureTransformationResponse>>;
  public function DescribeRecipe(DescribeRecipeRequest) Awaitable<Errors\Result<DescribeRecipeResponse>>;
  public function DescribeSchema(DescribeSchemaRequest) Awaitable<Errors\Result<DescribeSchemaResponse>>;
  public function DescribeSolution(DescribeSolutionRequest) Awaitable<Errors\Result<DescribeSolutionResponse>>;
  public function DescribeSolutionVersion(DescribeSolutionVersionRequest) Awaitable<Errors\Result<DescribeSolutionVersionResponse>>;
  public function GetSolutionMetrics(GetSolutionMetricsRequest) Awaitable<Errors\Result<GetSolutionMetricsResponse>>;
  public function ListBatchInferenceJobs(ListBatchInferenceJobsRequest) Awaitable<Errors\Result<ListBatchInferenceJobsResponse>>;
  public function ListCampaigns(ListCampaignsRequest) Awaitable<Errors\Result<ListCampaignsResponse>>;
  public function ListDatasetGroups(ListDatasetGroupsRequest) Awaitable<Errors\Result<ListDatasetGroupsResponse>>;
  public function ListDatasetImportJobs(ListDatasetImportJobsRequest) Awaitable<Errors\Result<ListDatasetImportJobsResponse>>;
  public function ListDatasets(ListDatasetsRequest) Awaitable<Errors\Result<ListDatasetsResponse>>;
  public function ListEventTrackers(ListEventTrackersRequest) Awaitable<Errors\Result<ListEventTrackersResponse>>;
  public function ListRecipes(ListRecipesRequest) Awaitable<Errors\Result<ListRecipesResponse>>;
  public function ListSchemas(ListSchemasRequest) Awaitable<Errors\Result<ListSchemasResponse>>;
  public function ListSolutionVersions(ListSolutionVersionsRequest) Awaitable<Errors\Result<ListSolutionVersionsResponse>>;
  public function ListSolutions(ListSolutionsRequest) Awaitable<Errors\Result<ListSolutionsResponse>>;
  public function UpdateCampaign(UpdateCampaignRequest) Awaitable<Errors\Result<UpdateCampaignResponse>>;
}

class AccountId {
}

class Algorithm {
  public Arn $algorithm_arn;
  public AlgorithmImage $algorithm_image;
  public Date $creation_date_time;
  public DefaultHyperParameterRanges $default_hyper_parameter_ranges;
  public HyperParameters $default_hyper_parameters;
  public ResourceConfig $default_resource_config;
  public Date $last_updated_date_time;
  public Name $name;
  public Arn $role_arn;
  public TrainingInputMode $training_input_mode;
}

class AlgorithmImage {
  public DockerURI $docker_uri;
  public Name $name;
}

class Arn {
}

class ArnList {
}

class AutoMLConfig {
  public MetricName $metric_name;
  public ArnList $recipe_list;
}

class AutoMLResult {
  public Arn $best_recipe_arn;
}

class AvroSchema {
}

class BatchInferenceJob {
  public Arn $batch_inference_job_arn;
  public Date $creation_date_time;
  public FailureReason $failure_reason;
  public BatchInferenceJobInput $job_input;
  public Name $job_name;
  public BatchInferenceJobOutput $job_output;
  public Date $last_updated_date_time;
  public NumBatchResults $num_results;
  public RoleArn $role_arn;
  public Arn $solution_version_arn;
  public Status $status;
}

class BatchInferenceJobInput {
  public S3DataConfig $s_3_data_source;
}

class BatchInferenceJobOutput {
  public S3DataConfig $s_3_data_destination;
}

class BatchInferenceJobSummary {
  public Arn $batch_inference_job_arn;
  public Date $creation_date_time;
  public FailureReason $failure_reason;
  public Name $job_name;
  public Date $last_updated_date_time;
  public Arn $solution_version_arn;
  public Status $status;
}

class BatchInferenceJobs {
}

class Boolean {
}

class Campaign {
  public Arn $campaign_arn;
  public Date $creation_date_time;
  public FailureReason $failure_reason;
  public Date $last_updated_date_time;
  public CampaignUpdateSummary $latest_campaign_update;
  public TransactionsPerSecond $min_provisioned_tps;
  public Name $name;
  public Arn $solution_version_arn;
  public Status $status;
}

class CampaignSummary {
  public Arn $campaign_arn;
  public Date $creation_date_time;
  public FailureReason $failure_reason;
  public Date $last_updated_date_time;
  public Name $name;
  public Status $status;
}

class CampaignUpdateSummary {
  public Date $creation_date_time;
  public FailureReason $failure_reason;
  public Date $last_updated_date_time;
  public TransactionsPerSecond $min_provisioned_tps;
  public Arn $solution_version_arn;
  public Status $status;
}

class Campaigns {
}

class CategoricalHyperParameterRange {
  public ParameterName $name;
  public CategoricalValues $values;
}

class CategoricalHyperParameterRanges {
}

class CategoricalValue {
}

class CategoricalValues {
}

class ContinuousHyperParameterRange {
  public ContinuousMaxValue $max_value;
  public ContinuousMinValue $min_value;
  public ParameterName $name;
}

class ContinuousHyperParameterRanges {
}

class ContinuousMaxValue {
}

class ContinuousMinValue {
}

class CreateBatchInferenceJobRequest {
  public BatchInferenceJobInput $job_input;
  public Name $job_name;
  public BatchInferenceJobOutput $job_output;
  public NumBatchResults $num_results;
  public RoleArn $role_arn;
  public Arn $solution_version_arn;
}

class CreateBatchInferenceJobResponse {
  public Arn $batch_inference_job_arn;
}

class CreateCampaignRequest {
  public TransactionsPerSecond $min_provisioned_tps;
  public Name $name;
  public Arn $solution_version_arn;
}

class CreateCampaignResponse {
  public Arn $campaign_arn;
}

class CreateDatasetGroupRequest {
  public KmsKeyArn $kms_key_arn;
  public Name $name;
  public RoleArn $role_arn;
}

class CreateDatasetGroupResponse {
  public Arn $dataset_group_arn;
}

class CreateDatasetImportJobRequest {
  public DataSource $data_source;
  public Arn $dataset_arn;
  public Name $job_name;
  public RoleArn $role_arn;
}

class CreateDatasetImportJobResponse {
  public Arn $dataset_import_job_arn;
}

class CreateDatasetRequest {
  public Arn $dataset_group_arn;
  public DatasetType $dataset_type;
  public Name $name;
  public Arn $schema_arn;
}

class CreateDatasetResponse {
  public Arn $dataset_arn;
}

class CreateEventTrackerRequest {
  public Arn $dataset_group_arn;
  public Name $name;
}

class CreateEventTrackerResponse {
  public Arn $event_tracker_arn;
  public TrackingId $tracking_id;
}

class CreateSchemaRequest {
  public Name $name;
  public AvroSchema $schema;
}

class CreateSchemaResponse {
  public Arn $schema_arn;
}

class CreateSolutionRequest {
  public Arn $dataset_group_arn;
  public EventType $event_type;
  public Name $name;
  public PerformAutoML $perform_auto_ml;
  public boolean $perform_hpo;
  public Arn $recipe_arn;
  public SolutionConfig $solution_config;
}

class CreateSolutionResponse {
  public Arn $solution_arn;
}

class CreateSolutionVersionRequest {
  public Arn $solution_arn;
  public TrainingMode $training_mode;
}

class CreateSolutionVersionResponse {
  public Arn $solution_version_arn;
}

class DataSource {
  public S3Location $data_location;
}

class Dataset {
  public Date $creation_date_time;
  public Arn $dataset_arn;
  public Arn $dataset_group_arn;
  public DatasetType $dataset_type;
  public Date $last_updated_date_time;
  public Name $name;
  public Arn $schema_arn;
  public Status $status;
}

class DatasetGroup {
  public Date $creation_date_time;
  public Arn $dataset_group_arn;
  public FailureReason $failure_reason;
  public KmsKeyArn $kms_key_arn;
  public Date $last_updated_date_time;
  public Name $name;
  public RoleArn $role_arn;
  public Status $status;
}

class DatasetGroupSummary {
  public Date $creation_date_time;
  public Arn $dataset_group_arn;
  public FailureReason $failure_reason;
  public Date $last_updated_date_time;
  public Name $name;
  public Status $status;
}

class DatasetGroups {
}

class DatasetImportJob {
  public Date $creation_date_time;
  public DataSource $data_source;
  public Arn $dataset_arn;
  public Arn $dataset_import_job_arn;
  public FailureReason $failure_reason;
  public Name $job_name;
  public Date $last_updated_date_time;
  public Arn $role_arn;
  public Status $status;
}

class DatasetImportJobSummary {
  public Date $creation_date_time;
  public Arn $dataset_import_job_arn;
  public FailureReason $failure_reason;
  public Name $job_name;
  public Date $last_updated_date_time;
  public Status $status;
}

class DatasetImportJobs {
}

class DatasetSchema {
  public Date $creation_date_time;
  public Date $last_updated_date_time;
  public Name $name;
  public AvroSchema $schema;
  public Arn $schema_arn;
}

class DatasetSchemaSummary {
  public Date $creation_date_time;
  public Date $last_updated_date_time;
  public Name $name;
  public Arn $schema_arn;
}

class DatasetSummary {
  public Date $creation_date_time;
  public Arn $dataset_arn;
  public DatasetType $dataset_type;
  public Date $last_updated_date_time;
  public Name $name;
  public Status $status;
}

class DatasetType {
}

class Datasets {
}

class Date {
}

class DefaultCategoricalHyperParameterRange {
  public Tunable $is_tunable;
  public ParameterName $name;
  public CategoricalValues $values;
}

class DefaultCategoricalHyperParameterRanges {
}

class DefaultContinuousHyperParameterRange {
  public Tunable $is_tunable;
  public ContinuousMaxValue $max_value;
  public ContinuousMinValue $min_value;
  public ParameterName $name;
}

class DefaultContinuousHyperParameterRanges {
}

class DefaultHyperParameterRanges {
  public DefaultCategoricalHyperParameterRanges $categorical_hyper_parameter_ranges;
  public DefaultContinuousHyperParameterRanges $continuous_hyper_parameter_ranges;
  public DefaultIntegerHyperParameterRanges $integer_hyper_parameter_ranges;
}

class DefaultIntegerHyperParameterRange {
  public Tunable $is_tunable;
  public IntegerMaxValue $max_value;
  public IntegerMinValue $min_value;
  public ParameterName $name;
}

class DefaultIntegerHyperParameterRanges {
}

class DeleteCampaignRequest {
  public Arn $campaign_arn;
}

class DeleteDatasetGroupRequest {
  public Arn $dataset_group_arn;
}

class DeleteDatasetRequest {
  public Arn $dataset_arn;
}

class DeleteEventTrackerRequest {
  public Arn $event_tracker_arn;
}

class DeleteSchemaRequest {
  public Arn $schema_arn;
}

class DeleteSolutionRequest {
  public Arn $solution_arn;
}

class DescribeAlgorithmRequest {
  public Arn $algorithm_arn;
}

class DescribeAlgorithmResponse {
  public Algorithm $algorithm;
}

class DescribeBatchInferenceJobRequest {
  public Arn $batch_inference_job_arn;
}

class DescribeBatchInferenceJobResponse {
  public BatchInferenceJob $batch_inference_job;
}

class DescribeCampaignRequest {
  public Arn $campaign_arn;
}

class DescribeCampaignResponse {
  public Campaign $campaign;
}

class DescribeDatasetGroupRequest {
  public Arn $dataset_group_arn;
}

class DescribeDatasetGroupResponse {
  public DatasetGroup $dataset_group;
}

class DescribeDatasetImportJobRequest {
  public Arn $dataset_import_job_arn;
}

class DescribeDatasetImportJobResponse {
  public DatasetImportJob $dataset_import_job;
}

class DescribeDatasetRequest {
  public Arn $dataset_arn;
}

class DescribeDatasetResponse {
  public Dataset $dataset;
}

class DescribeEventTrackerRequest {
  public Arn $event_tracker_arn;
}

class DescribeEventTrackerResponse {
  public EventTracker $event_tracker;
}

class DescribeFeatureTransformationRequest {
  public Arn $feature_transformation_arn;
}

class DescribeFeatureTransformationResponse {
  public FeatureTransformation $feature_transformation;
}

class DescribeRecipeRequest {
  public Arn $recipe_arn;
}

class DescribeRecipeResponse {
  public Recipe $recipe;
}

class DescribeSchemaRequest {
  public Arn $schema_arn;
}

class DescribeSchemaResponse {
  public DatasetSchema $schema;
}

class DescribeSolutionRequest {
  public Arn $solution_arn;
}

class DescribeSolutionResponse {
  public Solution $solution;
}

class DescribeSolutionVersionRequest {
  public Arn $solution_version_arn;
}

class DescribeSolutionVersionResponse {
  public SolutionVersion $solution_version;
}

class Description {
}

class DockerURI {
}

class ErrorMessage {
}

class EventTracker {
  public AccountId $account_id;
  public Date $creation_date_time;
  public Arn $dataset_group_arn;
  public Arn $event_tracker_arn;
  public Date $last_updated_date_time;
  public Name $name;
  public Status $status;
  public TrackingId $tracking_id;
}

class EventTrackerSummary {
  public Date $creation_date_time;
  public Arn $event_tracker_arn;
  public Date $last_updated_date_time;
  public Name $name;
  public Status $status;
}

class EventTrackers {
}

class EventType {
}

class EventValueThreshold {
}

class FailureReason {
}

class FeatureTransformation {
  public Date $creation_date_time;
  public FeaturizationParameters $default_parameters;
  public Arn $feature_transformation_arn;
  public Date $last_updated_date_time;
  public Name $name;
  public Status $status;
}

class FeatureTransformationParameters {
}

class FeaturizationParameters {
}

class GetSolutionMetricsRequest {
  public Arn $solution_version_arn;
}

class GetSolutionMetricsResponse {
  public Metrics $metrics;
  public Arn $solution_version_arn;
}

class HPOConfig {
  public HyperParameterRanges $algorithm_hyper_parameter_ranges;
  public HPOObjective $hpo_objective;
  public HPOResourceConfig $hpo_resource_config;
}

class HPOObjective {
  public MetricName $metric_name;
  public MetricRegex $metric_regex;
  public HPOObjectiveType $type;
}

class HPOObjectiveType {
}

class HPOResource {
}

class HPOResourceConfig {
  public HPOResource $max_number_of_training_jobs;
  public HPOResource $max_parallel_training_jobs;
}

class HyperParameterRanges {
  public CategoricalHyperParameterRanges $categorical_hyper_parameter_ranges;
  public ContinuousHyperParameterRanges $continuous_hyper_parameter_ranges;
  public IntegerHyperParameterRanges $integer_hyper_parameter_ranges;
}

class HyperParameters {
}

class IntegerHyperParameterRange {
  public IntegerMaxValue $max_value;
  public IntegerMinValue $min_value;
  public ParameterName $name;
}

class IntegerHyperParameterRanges {
}

class IntegerMaxValue {
}

class IntegerMinValue {
}

class InvalidInputException {
  public ErrorMessage $message;
}

class InvalidNextTokenException {
  public ErrorMessage $message;
}

class KmsKeyArn {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListBatchInferenceJobsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public Arn $solution_version_arn;
}

class ListBatchInferenceJobsResponse {
  public BatchInferenceJobs $batch_inference_jobs;
  public NextToken $next_token;
}

class ListCampaignsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public Arn $solution_arn;
}

class ListCampaignsResponse {
  public Campaigns $campaigns;
  public NextToken $next_token;
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
  public Arn $dataset_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDatasetImportJobsResponse {
  public DatasetImportJobs $dataset_import_jobs;
  public NextToken $next_token;
}

class ListDatasetsRequest {
  public Arn $dataset_group_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDatasetsResponse {
  public Datasets $datasets;
  public NextToken $next_token;
}

class ListEventTrackersRequest {
  public Arn $dataset_group_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListEventTrackersResponse {
  public EventTrackers $event_trackers;
  public NextToken $next_token;
}

class ListRecipesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public RecipeProvider $recipe_provider;
}

class ListRecipesResponse {
  public NextToken $next_token;
  public Recipes $recipes;
}

class ListSchemasRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListSchemasResponse {
  public NextToken $next_token;
  public Schemas $schemas;
}

class ListSolutionVersionsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public Arn $solution_arn;
}

class ListSolutionVersionsResponse {
  public NextToken $next_token;
  public SolutionVersions $solution_versions;
}

class ListSolutionsRequest {
  public Arn $dataset_group_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListSolutionsResponse {
  public NextToken $next_token;
  public Solutions $solutions;
}

class MaxResults {
}

class MetricName {
}

class MetricRegex {
}

class MetricValue {
}

class Metrics {
}

class Name {
}

class NextToken {
}

class NumBatchResults {
}

class ParameterName {
}

class ParameterValue {
}

class PerformAutoML {
}

class PerformHPO {
}

class Recipe {
  public Arn $algorithm_arn;
  public Date $creation_date_time;
  public Description $description;
  public Arn $feature_transformation_arn;
  public Date $last_updated_date_time;
  public Name $name;
  public Arn $recipe_arn;
  public RecipeType $recipe_type;
  public Status $status;
}

class RecipeProvider {
}

class RecipeSummary {
  public Date $creation_date_time;
  public Date $last_updated_date_time;
  public Name $name;
  public Arn $recipe_arn;
  public Status $status;
}

class RecipeType {
}

class Recipes {
}

class ResourceAlreadyExistsException {
  public ErrorMessage $message;
}

class ResourceConfig {
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class RoleArn {
}

class S3DataConfig {
  public KmsKeyArn $kms_key_arn;
  public S3Location $path;
}

class S3Location {
}

class Schemas {
}

class Solution {
  public AutoMLResult $auto_ml_result;
  public Date $creation_date_time;
  public Arn $dataset_group_arn;
  public EventType $event_type;
  public Date $last_updated_date_time;
  public SolutionVersionSummary $latest_solution_version;
  public Name $name;
  public PerformAutoML $perform_auto_ml;
  public PerformHPO $perform_hpo;
  public Arn $recipe_arn;
  public Arn $solution_arn;
  public SolutionConfig $solution_config;
  public Status $status;
}

class SolutionConfig {
  public HyperParameters $algorithm_hyper_parameters;
  public AutoMLConfig $auto_ml_config;
  public EventValueThreshold $event_value_threshold;
  public FeatureTransformationParameters $feature_transformation_parameters;
  public HPOConfig $hpo_config;
}

class SolutionSummary {
  public Date $creation_date_time;
  public Date $last_updated_date_time;
  public Name $name;
  public Arn $solution_arn;
  public Status $status;
}

class SolutionVersion {
  public Date $creation_date_time;
  public Arn $dataset_group_arn;
  public EventType $event_type;
  public FailureReason $failure_reason;
  public Date $last_updated_date_time;
  public PerformAutoML $perform_auto_ml;
  public PerformHPO $perform_hpo;
  public Arn $recipe_arn;
  public Arn $solution_arn;
  public SolutionConfig $solution_config;
  public Arn $solution_version_arn;
  public Status $status;
  public TrainingHours $training_hours;
  public TrainingMode $training_mode;
  public TunedHPOParams $tuned_hpo_params;
}

class SolutionVersionSummary {
  public Date $creation_date_time;
  public FailureReason $failure_reason;
  public Date $last_updated_date_time;
  public Arn $solution_version_arn;
  public Status $status;
}

class SolutionVersions {
}

class Solutions {
}

class Status {
}

class TrackingId {
}

class TrainingHours {
}

class TrainingInputMode {
}

class TrainingMode {
}

class TransactionsPerSecond {
}

class Tunable {
}

class TunedHPOParams {
  public HyperParameters $algorithm_hyper_parameters;
}

class UpdateCampaignRequest {
  public Arn $campaign_arn;
  public TransactionsPerSecond $min_provisioned_tps;
  public Arn $solution_version_arn;
}

class UpdateCampaignResponse {
  public Arn $campaign_arn;
}


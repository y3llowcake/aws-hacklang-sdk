<?hh // strict
namespace slack\aws\personalize;

interface Personalize {
  public function CreateBatchInferenceJob(CreateBatchInferenceJobRequest $in): Awaitable<\Errors\Result<CreateBatchInferenceJobResponse>>;
  public function CreateCampaign(CreateCampaignRequest $in): Awaitable<\Errors\Result<CreateCampaignResponse>>;
  public function CreateDataset(CreateDatasetRequest $in): Awaitable<\Errors\Result<CreateDatasetResponse>>;
  public function CreateDatasetGroup(CreateDatasetGroupRequest $in): Awaitable<\Errors\Result<CreateDatasetGroupResponse>>;
  public function CreateDatasetImportJob(CreateDatasetImportJobRequest $in): Awaitable<\Errors\Result<CreateDatasetImportJobResponse>>;
  public function CreateEventTracker(CreateEventTrackerRequest $in): Awaitable<\Errors\Result<CreateEventTrackerResponse>>;
  public function CreateSchema(CreateSchemaRequest $in): Awaitable<\Errors\Result<CreateSchemaResponse>>;
  public function CreateSolution(CreateSolutionRequest $in): Awaitable<\Errors\Result<CreateSolutionResponse>>;
  public function CreateSolutionVersion(CreateSolutionVersionRequest $in): Awaitable<\Errors\Result<CreateSolutionVersionResponse>>;
  public function DeleteCampaign(DeleteCampaignRequest $in): Awaitable<\Errors\Error>;
  public function DeleteDataset(DeleteDatasetRequest $in): Awaitable<\Errors\Error>;
  public function DeleteDatasetGroup(DeleteDatasetGroupRequest $in): Awaitable<\Errors\Error>;
  public function DeleteEventTracker(DeleteEventTrackerRequest $in): Awaitable<\Errors\Error>;
  public function DeleteSchema(DeleteSchemaRequest $in): Awaitable<\Errors\Error>;
  public function DeleteSolution(DeleteSolutionRequest $in): Awaitable<\Errors\Error>;
  public function DescribeAlgorithm(DescribeAlgorithmRequest $in): Awaitable<\Errors\Result<DescribeAlgorithmResponse>>;
  public function DescribeBatchInferenceJob(DescribeBatchInferenceJobRequest $in): Awaitable<\Errors\Result<DescribeBatchInferenceJobResponse>>;
  public function DescribeCampaign(DescribeCampaignRequest $in): Awaitable<\Errors\Result<DescribeCampaignResponse>>;
  public function DescribeDataset(DescribeDatasetRequest $in): Awaitable<\Errors\Result<DescribeDatasetResponse>>;
  public function DescribeDatasetGroup(DescribeDatasetGroupRequest $in): Awaitable<\Errors\Result<DescribeDatasetGroupResponse>>;
  public function DescribeDatasetImportJob(DescribeDatasetImportJobRequest $in): Awaitable<\Errors\Result<DescribeDatasetImportJobResponse>>;
  public function DescribeEventTracker(DescribeEventTrackerRequest $in): Awaitable<\Errors\Result<DescribeEventTrackerResponse>>;
  public function DescribeFeatureTransformation(DescribeFeatureTransformationRequest $in): Awaitable<\Errors\Result<DescribeFeatureTransformationResponse>>;
  public function DescribeRecipe(DescribeRecipeRequest $in): Awaitable<\Errors\Result<DescribeRecipeResponse>>;
  public function DescribeSchema(DescribeSchemaRequest $in): Awaitable<\Errors\Result<DescribeSchemaResponse>>;
  public function DescribeSolution(DescribeSolutionRequest $in): Awaitable<\Errors\Result<DescribeSolutionResponse>>;
  public function DescribeSolutionVersion(DescribeSolutionVersionRequest $in): Awaitable<\Errors\Result<DescribeSolutionVersionResponse>>;
  public function GetSolutionMetrics(GetSolutionMetricsRequest $in): Awaitable<\Errors\Result<GetSolutionMetricsResponse>>;
  public function ListBatchInferenceJobs(ListBatchInferenceJobsRequest $in): Awaitable<\Errors\Result<ListBatchInferenceJobsResponse>>;
  public function ListCampaigns(ListCampaignsRequest $in): Awaitable<\Errors\Result<ListCampaignsResponse>>;
  public function ListDatasetGroups(ListDatasetGroupsRequest $in): Awaitable<\Errors\Result<ListDatasetGroupsResponse>>;
  public function ListDatasetImportJobs(ListDatasetImportJobsRequest $in): Awaitable<\Errors\Result<ListDatasetImportJobsResponse>>;
  public function ListDatasets(ListDatasetsRequest $in): Awaitable<\Errors\Result<ListDatasetsResponse>>;
  public function ListEventTrackers(ListEventTrackersRequest $in): Awaitable<\Errors\Result<ListEventTrackersResponse>>;
  public function ListRecipes(ListRecipesRequest $in): Awaitable<\Errors\Result<ListRecipesResponse>>;
  public function ListSchemas(ListSchemasRequest $in): Awaitable<\Errors\Result<ListSchemasResponse>>;
  public function ListSolutionVersions(ListSolutionVersionsRequest $in): Awaitable<\Errors\Result<ListSolutionVersionsResponse>>;
  public function ListSolutions(ListSolutionsRequest $in): Awaitable<\Errors\Result<ListSolutionsResponse>>;
  public function UpdateCampaign(UpdateCampaignRequest $in): Awaitable<\Errors\Result<UpdateCampaignResponse>>;
}

type AccountId = string;

class Algorithm {
  public ?Arn $algorithm_arn;
  public ?AlgorithmImage $algorithm_image;
  public ?Date $creation_date_time;
  public ?DefaultHyperParameterRanges $default_hyper_parameter_ranges;
  public ?HyperParameters $default_hyper_parameters;
  public ?ResourceConfig $default_resource_config;
  public ?Date $last_updated_date_time;
  public ?Name $name;
  public ?Arn $role_arn;
  public ?TrainingInputMode $training_input_mode;

  public function __construct(shape(
    ?'algorithm_arn' => ?Arn,
    ?'algorithm_image' => ?AlgorithmImage,
    ?'creation_date_time' => ?Date,
    ?'default_hyper_parameter_ranges' => ?DefaultHyperParameterRanges,
    ?'default_hyper_parameters' => ?HyperParameters,
    ?'default_resource_config' => ?ResourceConfig,
    ?'last_updated_date_time' => ?Date,
    ?'name' => ?Name,
    ?'role_arn' => ?Arn,
    ?'training_input_mode' => ?TrainingInputMode,
  ) $s = shape()) {
    $this->algorithm_arn = $s['algorithm_arn'] ?? '';
    $this->algorithm_image = $s['algorithm_image'] ?? null;
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->default_hyper_parameter_ranges = $s['default_hyper_parameter_ranges'] ?? null;
    $this->default_hyper_parameters = $s['default_hyper_parameters'] ?? dict[];
    $this->default_resource_config = $s['default_resource_config'] ?? dict[];
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->training_input_mode = $s['training_input_mode'] ?? '';
  }
}

class AlgorithmImage {
  public ?DockerURI $docker_uri;
  public ?Name $name;

  public function __construct(shape(
    ?'docker_uri' => ?DockerURI,
    ?'name' => ?Name,
  ) $s = shape()) {
    $this->docker_uri = $s['docker_uri'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type Arn = string;

type ArnList = vec<Arn>;

class AutoMLConfig {
  public ?MetricName $metric_name;
  public ?ArnList $recipe_list;

  public function __construct(shape(
    ?'metric_name' => ?MetricName,
    ?'recipe_list' => ?ArnList,
  ) $s = shape()) {
    $this->metric_name = $s['metric_name'] ?? '';
    $this->recipe_list = $s['recipe_list'] ?? vec[];
  }
}

class AutoMLResult {
  public ?Arn $best_recipe_arn;

  public function __construct(shape(
    ?'best_recipe_arn' => ?Arn,
  ) $s = shape()) {
    $this->best_recipe_arn = $s['best_recipe_arn'] ?? '';
  }
}

type AvroSchema = string;

class BatchInferenceJob {
  public ?Arn $batch_inference_job_arn;
  public ?Date $creation_date_time;
  public ?FailureReason $failure_reason;
  public ?BatchInferenceJobInput $job_input;
  public ?Name $job_name;
  public ?BatchInferenceJobOutput $job_output;
  public ?Date $last_updated_date_time;
  public ?NumBatchResults $num_results;
  public ?RoleArn $role_arn;
  public ?Arn $solution_version_arn;
  public ?Status $status;

  public function __construct(shape(
    ?'batch_inference_job_arn' => ?Arn,
    ?'creation_date_time' => ?Date,
    ?'failure_reason' => ?FailureReason,
    ?'job_input' => ?BatchInferenceJobInput,
    ?'job_name' => ?Name,
    ?'job_output' => ?BatchInferenceJobOutput,
    ?'last_updated_date_time' => ?Date,
    ?'num_results' => ?NumBatchResults,
    ?'role_arn' => ?RoleArn,
    ?'solution_version_arn' => ?Arn,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->batch_inference_job_arn = $s['batch_inference_job_arn'] ?? '';
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->job_input = $s['job_input'] ?? null;
    $this->job_name = $s['job_name'] ?? '';
    $this->job_output = $s['job_output'] ?? null;
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->num_results = $s['num_results'] ?? 0;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->solution_version_arn = $s['solution_version_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class BatchInferenceJobInput {
  public ?S3DataConfig $s_3_data_source;

  public function __construct(shape(
    ?'s_3_data_source' => ?S3DataConfig,
  ) $s = shape()) {
    $this->s_3_data_source = $s['s_3_data_source'] ?? null;
  }
}

class BatchInferenceJobOutput {
  public ?S3DataConfig $s_3_data_destination;

  public function __construct(shape(
    ?'s_3_data_destination' => ?S3DataConfig,
  ) $s = shape()) {
    $this->s_3_data_destination = $s['s_3_data_destination'] ?? null;
  }
}

class BatchInferenceJobSummary {
  public ?Arn $batch_inference_job_arn;
  public ?Date $creation_date_time;
  public ?FailureReason $failure_reason;
  public ?Name $job_name;
  public ?Date $last_updated_date_time;
  public ?Arn $solution_version_arn;
  public ?Status $status;

  public function __construct(shape(
    ?'batch_inference_job_arn' => ?Arn,
    ?'creation_date_time' => ?Date,
    ?'failure_reason' => ?FailureReason,
    ?'job_name' => ?Name,
    ?'last_updated_date_time' => ?Date,
    ?'solution_version_arn' => ?Arn,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->batch_inference_job_arn = $s['batch_inference_job_arn'] ?? '';
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->job_name = $s['job_name'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->solution_version_arn = $s['solution_version_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type BatchInferenceJobs = vec<BatchInferenceJobSummary>;

type Boolean = bool;

class Campaign {
  public ?Arn $campaign_arn;
  public ?Date $creation_date_time;
  public ?FailureReason $failure_reason;
  public ?Date $last_updated_date_time;
  public ?CampaignUpdateSummary $latest_campaign_update;
  public ?TransactionsPerSecond $min_provisioned_tps;
  public ?Name $name;
  public ?Arn $solution_version_arn;
  public ?Status $status;

  public function __construct(shape(
    ?'campaign_arn' => ?Arn,
    ?'creation_date_time' => ?Date,
    ?'failure_reason' => ?FailureReason,
    ?'last_updated_date_time' => ?Date,
    ?'latest_campaign_update' => ?CampaignUpdateSummary,
    ?'min_provisioned_tps' => ?TransactionsPerSecond,
    ?'name' => ?Name,
    ?'solution_version_arn' => ?Arn,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->campaign_arn = $s['campaign_arn'] ?? '';
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->latest_campaign_update = $s['latest_campaign_update'] ?? null;
    $this->min_provisioned_tps = $s['min_provisioned_tps'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->solution_version_arn = $s['solution_version_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class CampaignSummary {
  public ?Arn $campaign_arn;
  public ?Date $creation_date_time;
  public ?FailureReason $failure_reason;
  public ?Date $last_updated_date_time;
  public ?Name $name;
  public ?Status $status;

  public function __construct(shape(
    ?'campaign_arn' => ?Arn,
    ?'creation_date_time' => ?Date,
    ?'failure_reason' => ?FailureReason,
    ?'last_updated_date_time' => ?Date,
    ?'name' => ?Name,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->campaign_arn = $s['campaign_arn'] ?? '';
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class CampaignUpdateSummary {
  public ?Date $creation_date_time;
  public ?FailureReason $failure_reason;
  public ?Date $last_updated_date_time;
  public ?TransactionsPerSecond $min_provisioned_tps;
  public ?Arn $solution_version_arn;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_date_time' => ?Date,
    ?'failure_reason' => ?FailureReason,
    ?'last_updated_date_time' => ?Date,
    ?'min_provisioned_tps' => ?TransactionsPerSecond,
    ?'solution_version_arn' => ?Arn,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->min_provisioned_tps = $s['min_provisioned_tps'] ?? 0;
    $this->solution_version_arn = $s['solution_version_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type Campaigns = vec<CampaignSummary>;

class CategoricalHyperParameterRange {
  public ?ParameterName $name;
  public ?CategoricalValues $values;

  public function __construct(shape(
    ?'name' => ?ParameterName,
    ?'values' => ?CategoricalValues,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type CategoricalHyperParameterRanges = vec<CategoricalHyperParameterRange>;

type CategoricalValue = string;

type CategoricalValues = vec<CategoricalValue>;

class ContinuousHyperParameterRange {
  public ?ContinuousMaxValue $max_value;
  public ?ContinuousMinValue $min_value;
  public ?ParameterName $name;

  public function __construct(shape(
    ?'max_value' => ?ContinuousMaxValue,
    ?'min_value' => ?ContinuousMinValue,
    ?'name' => ?ParameterName,
  ) $s = shape()) {
    $this->max_value = $s['max_value'] ?? 0.0;
    $this->min_value = $s['min_value'] ?? 0.0;
    $this->name = $s['name'] ?? '';
  }
}

type ContinuousHyperParameterRanges = vec<ContinuousHyperParameterRange>;

type ContinuousMaxValue = float;

type ContinuousMinValue = float;

class CreateBatchInferenceJobRequest {
  public ?BatchInferenceJobInput $job_input;
  public ?Name $job_name;
  public ?BatchInferenceJobOutput $job_output;
  public ?NumBatchResults $num_results;
  public ?RoleArn $role_arn;
  public ?Arn $solution_version_arn;

  public function __construct(shape(
    ?'job_input' => ?BatchInferenceJobInput,
    ?'job_name' => ?Name,
    ?'job_output' => ?BatchInferenceJobOutput,
    ?'num_results' => ?NumBatchResults,
    ?'role_arn' => ?RoleArn,
    ?'solution_version_arn' => ?Arn,
  ) $s = shape()) {
    $this->job_input = $s['job_input'] ?? null;
    $this->job_name = $s['job_name'] ?? '';
    $this->job_output = $s['job_output'] ?? null;
    $this->num_results = $s['num_results'] ?? 0;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->solution_version_arn = $s['solution_version_arn'] ?? '';
  }
}

class CreateBatchInferenceJobResponse {
  public ?Arn $batch_inference_job_arn;

  public function __construct(shape(
    ?'batch_inference_job_arn' => ?Arn,
  ) $s = shape()) {
    $this->batch_inference_job_arn = $s['batch_inference_job_arn'] ?? '';
  }
}

class CreateCampaignRequest {
  public ?TransactionsPerSecond $min_provisioned_tps;
  public ?Name $name;
  public ?Arn $solution_version_arn;

  public function __construct(shape(
    ?'min_provisioned_tps' => ?TransactionsPerSecond,
    ?'name' => ?Name,
    ?'solution_version_arn' => ?Arn,
  ) $s = shape()) {
    $this->min_provisioned_tps = $s['min_provisioned_tps'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->solution_version_arn = $s['solution_version_arn'] ?? '';
  }
}

class CreateCampaignResponse {
  public ?Arn $campaign_arn;

  public function __construct(shape(
    ?'campaign_arn' => ?Arn,
  ) $s = shape()) {
    $this->campaign_arn = $s['campaign_arn'] ?? '';
  }
}

class CreateDatasetGroupRequest {
  public ?KmsKeyArn $kms_key_arn;
  public ?Name $name;
  public ?RoleArn $role_arn;

  public function __construct(shape(
    ?'kms_key_arn' => ?KmsKeyArn,
    ?'name' => ?Name,
    ?'role_arn' => ?RoleArn,
  ) $s = shape()) {
    $this->kms_key_arn = $s['kms_key_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class CreateDatasetGroupResponse {
  public ?Arn $dataset_group_arn;

  public function __construct(shape(
    ?'dataset_group_arn' => ?Arn,
  ) $s = shape()) {
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
  }
}

class CreateDatasetImportJobRequest {
  public ?DataSource $data_source;
  public ?Arn $dataset_arn;
  public ?Name $job_name;
  public ?RoleArn $role_arn;

  public function __construct(shape(
    ?'data_source' => ?DataSource,
    ?'dataset_arn' => ?Arn,
    ?'job_name' => ?Name,
    ?'role_arn' => ?RoleArn,
  ) $s = shape()) {
    $this->data_source = $s['data_source'] ?? null;
    $this->dataset_arn = $s['dataset_arn'] ?? '';
    $this->job_name = $s['job_name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class CreateDatasetImportJobResponse {
  public ?Arn $dataset_import_job_arn;

  public function __construct(shape(
    ?'dataset_import_job_arn' => ?Arn,
  ) $s = shape()) {
    $this->dataset_import_job_arn = $s['dataset_import_job_arn'] ?? '';
  }
}

class CreateDatasetRequest {
  public ?Arn $dataset_group_arn;
  public ?DatasetType $dataset_type;
  public ?Name $name;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'dataset_group_arn' => ?Arn,
    ?'dataset_type' => ?DatasetType,
    ?'name' => ?Name,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->dataset_type = $s['dataset_type'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class CreateDatasetResponse {
  public ?Arn $dataset_arn;

  public function __construct(shape(
    ?'dataset_arn' => ?Arn,
  ) $s = shape()) {
    $this->dataset_arn = $s['dataset_arn'] ?? '';
  }
}

class CreateEventTrackerRequest {
  public ?Arn $dataset_group_arn;
  public ?Name $name;

  public function __construct(shape(
    ?'dataset_group_arn' => ?Arn,
    ?'name' => ?Name,
  ) $s = shape()) {
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateEventTrackerResponse {
  public ?Arn $event_tracker_arn;
  public ?TrackingId $tracking_id;

  public function __construct(shape(
    ?'event_tracker_arn' => ?Arn,
    ?'tracking_id' => ?TrackingId,
  ) $s = shape()) {
    $this->event_tracker_arn = $s['event_tracker_arn'] ?? '';
    $this->tracking_id = $s['tracking_id'] ?? '';
  }
}

class CreateSchemaRequest {
  public ?Name $name;
  public ?AvroSchema $schema;

  public function __construct(shape(
    ?'name' => ?Name,
    ?'schema' => ?AvroSchema,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->schema = $s['schema'] ?? '';
  }
}

class CreateSchemaResponse {
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class CreateSolutionRequest {
  public ?Arn $dataset_group_arn;
  public ?EventType $event_type;
  public ?Name $name;
  public ?PerformAutoML $perform_auto_ml;
  public bool $perform_hpo;
  public ?Arn $recipe_arn;
  public ?SolutionConfig $solution_config;

  public function __construct(shape(
    ?'dataset_group_arn' => ?Arn,
    ?'event_type' => ?EventType,
    ?'name' => ?Name,
    ?'perform_auto_ml' => ?PerformAutoML,
    ?'perform_hpo' => bool,
    ?'recipe_arn' => ?Arn,
    ?'solution_config' => ?SolutionConfig,
  ) $s = shape()) {
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->event_type = $s['event_type'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->perform_auto_ml = $s['perform_auto_ml'] ?? false;
    $this->perform_hpo = $s['perform_hpo'] ?? false;
    $this->recipe_arn = $s['recipe_arn'] ?? '';
    $this->solution_config = $s['solution_config'] ?? null;
  }
}

class CreateSolutionResponse {
  public ?Arn $solution_arn;

  public function __construct(shape(
    ?'solution_arn' => ?Arn,
  ) $s = shape()) {
    $this->solution_arn = $s['solution_arn'] ?? '';
  }
}

class CreateSolutionVersionRequest {
  public ?Arn $solution_arn;
  public ?TrainingMode $training_mode;

  public function __construct(shape(
    ?'solution_arn' => ?Arn,
    ?'training_mode' => ?TrainingMode,
  ) $s = shape()) {
    $this->solution_arn = $s['solution_arn'] ?? '';
    $this->training_mode = $s['training_mode'] ?? '';
  }
}

class CreateSolutionVersionResponse {
  public ?Arn $solution_version_arn;

  public function __construct(shape(
    ?'solution_version_arn' => ?Arn,
  ) $s = shape()) {
    $this->solution_version_arn = $s['solution_version_arn'] ?? '';
  }
}

class DataSource {
  public ?S3Location $data_location;

  public function __construct(shape(
    ?'data_location' => ?S3Location,
  ) $s = shape()) {
    $this->data_location = $s['data_location'] ?? '';
  }
}

class Dataset {
  public ?Date $creation_date_time;
  public ?Arn $dataset_arn;
  public ?Arn $dataset_group_arn;
  public ?DatasetType $dataset_type;
  public ?Date $last_updated_date_time;
  public ?Name $name;
  public ?Arn $schema_arn;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_date_time' => ?Date,
    ?'dataset_arn' => ?Arn,
    ?'dataset_group_arn' => ?Arn,
    ?'dataset_type' => ?DatasetType,
    ?'last_updated_date_time' => ?Date,
    ?'name' => ?Name,
    ?'schema_arn' => ?Arn,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->dataset_arn = $s['dataset_arn'] ?? '';
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->dataset_type = $s['dataset_type'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DatasetGroup {
  public ?Date $creation_date_time;
  public ?Arn $dataset_group_arn;
  public ?FailureReason $failure_reason;
  public ?KmsKeyArn $kms_key_arn;
  public ?Date $last_updated_date_time;
  public ?Name $name;
  public ?RoleArn $role_arn;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_date_time' => ?Date,
    ?'dataset_group_arn' => ?Arn,
    ?'failure_reason' => ?FailureReason,
    ?'kms_key_arn' => ?KmsKeyArn,
    ?'last_updated_date_time' => ?Date,
    ?'name' => ?Name,
    ?'role_arn' => ?RoleArn,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->kms_key_arn = $s['kms_key_arn'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DatasetGroupSummary {
  public ?Date $creation_date_time;
  public ?Arn $dataset_group_arn;
  public ?FailureReason $failure_reason;
  public ?Date $last_updated_date_time;
  public ?Name $name;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_date_time' => ?Date,
    ?'dataset_group_arn' => ?Arn,
    ?'failure_reason' => ?FailureReason,
    ?'last_updated_date_time' => ?Date,
    ?'name' => ?Name,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type DatasetGroups = vec<DatasetGroupSummary>;

class DatasetImportJob {
  public ?Date $creation_date_time;
  public ?DataSource $data_source;
  public ?Arn $dataset_arn;
  public ?Arn $dataset_import_job_arn;
  public ?FailureReason $failure_reason;
  public ?Name $job_name;
  public ?Date $last_updated_date_time;
  public ?Arn $role_arn;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_date_time' => ?Date,
    ?'data_source' => ?DataSource,
    ?'dataset_arn' => ?Arn,
    ?'dataset_import_job_arn' => ?Arn,
    ?'failure_reason' => ?FailureReason,
    ?'job_name' => ?Name,
    ?'last_updated_date_time' => ?Date,
    ?'role_arn' => ?Arn,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->data_source = $s['data_source'] ?? null;
    $this->dataset_arn = $s['dataset_arn'] ?? '';
    $this->dataset_import_job_arn = $s['dataset_import_job_arn'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->job_name = $s['job_name'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DatasetImportJobSummary {
  public ?Date $creation_date_time;
  public ?Arn $dataset_import_job_arn;
  public ?FailureReason $failure_reason;
  public ?Name $job_name;
  public ?Date $last_updated_date_time;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_date_time' => ?Date,
    ?'dataset_import_job_arn' => ?Arn,
    ?'failure_reason' => ?FailureReason,
    ?'job_name' => ?Name,
    ?'last_updated_date_time' => ?Date,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->dataset_import_job_arn = $s['dataset_import_job_arn'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->job_name = $s['job_name'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

type DatasetImportJobs = vec<DatasetImportJobSummary>;

class DatasetSchema {
  public ?Date $creation_date_time;
  public ?Date $last_updated_date_time;
  public ?Name $name;
  public ?AvroSchema $schema;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'creation_date_time' => ?Date,
    ?'last_updated_date_time' => ?Date,
    ?'name' => ?Name,
    ?'schema' => ?AvroSchema,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->schema = $s['schema'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class DatasetSchemaSummary {
  public ?Date $creation_date_time;
  public ?Date $last_updated_date_time;
  public ?Name $name;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'creation_date_time' => ?Date,
    ?'last_updated_date_time' => ?Date,
    ?'name' => ?Name,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class DatasetSummary {
  public ?Date $creation_date_time;
  public ?Arn $dataset_arn;
  public ?DatasetType $dataset_type;
  public ?Date $last_updated_date_time;
  public ?Name $name;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_date_time' => ?Date,
    ?'dataset_arn' => ?Arn,
    ?'dataset_type' => ?DatasetType,
    ?'last_updated_date_time' => ?Date,
    ?'name' => ?Name,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->dataset_arn = $s['dataset_arn'] ?? '';
    $this->dataset_type = $s['dataset_type'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type DatasetType = string;

type Datasets = vec<DatasetSummary>;

type Date = int;

class DefaultCategoricalHyperParameterRange {
  public ?Tunable $is_tunable;
  public ?ParameterName $name;
  public ?CategoricalValues $values;

  public function __construct(shape(
    ?'is_tunable' => ?Tunable,
    ?'name' => ?ParameterName,
    ?'values' => ?CategoricalValues,
  ) $s = shape()) {
    $this->is_tunable = $s['is_tunable'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type DefaultCategoricalHyperParameterRanges = vec<DefaultCategoricalHyperParameterRange>;

class DefaultContinuousHyperParameterRange {
  public ?Tunable $is_tunable;
  public ?ContinuousMaxValue $max_value;
  public ?ContinuousMinValue $min_value;
  public ?ParameterName $name;

  public function __construct(shape(
    ?'is_tunable' => ?Tunable,
    ?'max_value' => ?ContinuousMaxValue,
    ?'min_value' => ?ContinuousMinValue,
    ?'name' => ?ParameterName,
  ) $s = shape()) {
    $this->is_tunable = $s['is_tunable'] ?? false;
    $this->max_value = $s['max_value'] ?? 0.0;
    $this->min_value = $s['min_value'] ?? 0.0;
    $this->name = $s['name'] ?? '';
  }
}

type DefaultContinuousHyperParameterRanges = vec<DefaultContinuousHyperParameterRange>;

class DefaultHyperParameterRanges {
  public ?DefaultCategoricalHyperParameterRanges $categorical_hyper_parameter_ranges;
  public ?DefaultContinuousHyperParameterRanges $continuous_hyper_parameter_ranges;
  public ?DefaultIntegerHyperParameterRanges $integer_hyper_parameter_ranges;

  public function __construct(shape(
    ?'categorical_hyper_parameter_ranges' => ?DefaultCategoricalHyperParameterRanges,
    ?'continuous_hyper_parameter_ranges' => ?DefaultContinuousHyperParameterRanges,
    ?'integer_hyper_parameter_ranges' => ?DefaultIntegerHyperParameterRanges,
  ) $s = shape()) {
    $this->categorical_hyper_parameter_ranges = $s['categorical_hyper_parameter_ranges'] ?? vec[];
    $this->continuous_hyper_parameter_ranges = $s['continuous_hyper_parameter_ranges'] ?? vec[];
    $this->integer_hyper_parameter_ranges = $s['integer_hyper_parameter_ranges'] ?? vec[];
  }
}

class DefaultIntegerHyperParameterRange {
  public ?Tunable $is_tunable;
  public ?IntegerMaxValue $max_value;
  public ?IntegerMinValue $min_value;
  public ?ParameterName $name;

  public function __construct(shape(
    ?'is_tunable' => ?Tunable,
    ?'max_value' => ?IntegerMaxValue,
    ?'min_value' => ?IntegerMinValue,
    ?'name' => ?ParameterName,
  ) $s = shape()) {
    $this->is_tunable = $s['is_tunable'] ?? false;
    $this->max_value = $s['max_value'] ?? 0;
    $this->min_value = $s['min_value'] ?? 0;
    $this->name = $s['name'] ?? '';
  }
}

type DefaultIntegerHyperParameterRanges = vec<DefaultIntegerHyperParameterRange>;

class DeleteCampaignRequest {
  public ?Arn $campaign_arn;

  public function __construct(shape(
    ?'campaign_arn' => ?Arn,
  ) $s = shape()) {
    $this->campaign_arn = $s['campaign_arn'] ?? '';
  }
}

class DeleteDatasetGroupRequest {
  public ?Arn $dataset_group_arn;

  public function __construct(shape(
    ?'dataset_group_arn' => ?Arn,
  ) $s = shape()) {
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
  }
}

class DeleteDatasetRequest {
  public ?Arn $dataset_arn;

  public function __construct(shape(
    ?'dataset_arn' => ?Arn,
  ) $s = shape()) {
    $this->dataset_arn = $s['dataset_arn'] ?? '';
  }
}

class DeleteEventTrackerRequest {
  public ?Arn $event_tracker_arn;

  public function __construct(shape(
    ?'event_tracker_arn' => ?Arn,
  ) $s = shape()) {
    $this->event_tracker_arn = $s['event_tracker_arn'] ?? '';
  }
}

class DeleteSchemaRequest {
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class DeleteSolutionRequest {
  public ?Arn $solution_arn;

  public function __construct(shape(
    ?'solution_arn' => ?Arn,
  ) $s = shape()) {
    $this->solution_arn = $s['solution_arn'] ?? '';
  }
}

class DescribeAlgorithmRequest {
  public ?Arn $algorithm_arn;

  public function __construct(shape(
    ?'algorithm_arn' => ?Arn,
  ) $s = shape()) {
    $this->algorithm_arn = $s['algorithm_arn'] ?? '';
  }
}

class DescribeAlgorithmResponse {
  public ?Algorithm $algorithm;

  public function __construct(shape(
    ?'algorithm' => ?Algorithm,
  ) $s = shape()) {
    $this->algorithm = $s['algorithm'] ?? null;
  }
}

class DescribeBatchInferenceJobRequest {
  public ?Arn $batch_inference_job_arn;

  public function __construct(shape(
    ?'batch_inference_job_arn' => ?Arn,
  ) $s = shape()) {
    $this->batch_inference_job_arn = $s['batch_inference_job_arn'] ?? '';
  }
}

class DescribeBatchInferenceJobResponse {
  public ?BatchInferenceJob $batch_inference_job;

  public function __construct(shape(
    ?'batch_inference_job' => ?BatchInferenceJob,
  ) $s = shape()) {
    $this->batch_inference_job = $s['batch_inference_job'] ?? null;
  }
}

class DescribeCampaignRequest {
  public ?Arn $campaign_arn;

  public function __construct(shape(
    ?'campaign_arn' => ?Arn,
  ) $s = shape()) {
    $this->campaign_arn = $s['campaign_arn'] ?? '';
  }
}

class DescribeCampaignResponse {
  public ?Campaign $campaign;

  public function __construct(shape(
    ?'campaign' => ?Campaign,
  ) $s = shape()) {
    $this->campaign = $s['campaign'] ?? null;
  }
}

class DescribeDatasetGroupRequest {
  public ?Arn $dataset_group_arn;

  public function __construct(shape(
    ?'dataset_group_arn' => ?Arn,
  ) $s = shape()) {
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
  }
}

class DescribeDatasetGroupResponse {
  public ?DatasetGroup $dataset_group;

  public function __construct(shape(
    ?'dataset_group' => ?DatasetGroup,
  ) $s = shape()) {
    $this->dataset_group = $s['dataset_group'] ?? null;
  }
}

class DescribeDatasetImportJobRequest {
  public ?Arn $dataset_import_job_arn;

  public function __construct(shape(
    ?'dataset_import_job_arn' => ?Arn,
  ) $s = shape()) {
    $this->dataset_import_job_arn = $s['dataset_import_job_arn'] ?? '';
  }
}

class DescribeDatasetImportJobResponse {
  public ?DatasetImportJob $dataset_import_job;

  public function __construct(shape(
    ?'dataset_import_job' => ?DatasetImportJob,
  ) $s = shape()) {
    $this->dataset_import_job = $s['dataset_import_job'] ?? null;
  }
}

class DescribeDatasetRequest {
  public ?Arn $dataset_arn;

  public function __construct(shape(
    ?'dataset_arn' => ?Arn,
  ) $s = shape()) {
    $this->dataset_arn = $s['dataset_arn'] ?? '';
  }
}

class DescribeDatasetResponse {
  public ?Dataset $dataset;

  public function __construct(shape(
    ?'dataset' => ?Dataset,
  ) $s = shape()) {
    $this->dataset = $s['dataset'] ?? null;
  }
}

class DescribeEventTrackerRequest {
  public ?Arn $event_tracker_arn;

  public function __construct(shape(
    ?'event_tracker_arn' => ?Arn,
  ) $s = shape()) {
    $this->event_tracker_arn = $s['event_tracker_arn'] ?? '';
  }
}

class DescribeEventTrackerResponse {
  public ?EventTracker $event_tracker;

  public function __construct(shape(
    ?'event_tracker' => ?EventTracker,
  ) $s = shape()) {
    $this->event_tracker = $s['event_tracker'] ?? null;
  }
}

class DescribeFeatureTransformationRequest {
  public ?Arn $feature_transformation_arn;

  public function __construct(shape(
    ?'feature_transformation_arn' => ?Arn,
  ) $s = shape()) {
    $this->feature_transformation_arn = $s['feature_transformation_arn'] ?? '';
  }
}

class DescribeFeatureTransformationResponse {
  public ?FeatureTransformation $feature_transformation;

  public function __construct(shape(
    ?'feature_transformation' => ?FeatureTransformation,
  ) $s = shape()) {
    $this->feature_transformation = $s['feature_transformation'] ?? null;
  }
}

class DescribeRecipeRequest {
  public ?Arn $recipe_arn;

  public function __construct(shape(
    ?'recipe_arn' => ?Arn,
  ) $s = shape()) {
    $this->recipe_arn = $s['recipe_arn'] ?? '';
  }
}

class DescribeRecipeResponse {
  public ?Recipe $recipe;

  public function __construct(shape(
    ?'recipe' => ?Recipe,
  ) $s = shape()) {
    $this->recipe = $s['recipe'] ?? null;
  }
}

class DescribeSchemaRequest {
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class DescribeSchemaResponse {
  public ?DatasetSchema $schema;

  public function __construct(shape(
    ?'schema' => ?DatasetSchema,
  ) $s = shape()) {
    $this->schema = $s['schema'] ?? null;
  }
}

class DescribeSolutionRequest {
  public ?Arn $solution_arn;

  public function __construct(shape(
    ?'solution_arn' => ?Arn,
  ) $s = shape()) {
    $this->solution_arn = $s['solution_arn'] ?? '';
  }
}

class DescribeSolutionResponse {
  public ?Solution $solution;

  public function __construct(shape(
    ?'solution' => ?Solution,
  ) $s = shape()) {
    $this->solution = $s['solution'] ?? null;
  }
}

class DescribeSolutionVersionRequest {
  public ?Arn $solution_version_arn;

  public function __construct(shape(
    ?'solution_version_arn' => ?Arn,
  ) $s = shape()) {
    $this->solution_version_arn = $s['solution_version_arn'] ?? '';
  }
}

class DescribeSolutionVersionResponse {
  public ?SolutionVersion $solution_version;

  public function __construct(shape(
    ?'solution_version' => ?SolutionVersion,
  ) $s = shape()) {
    $this->solution_version = $s['solution_version'] ?? null;
  }
}

type Description = string;

type DockerURI = string;

type ErrorMessage = string;

class EventTracker {
  public ?AccountId $account_id;
  public ?Date $creation_date_time;
  public ?Arn $dataset_group_arn;
  public ?Arn $event_tracker_arn;
  public ?Date $last_updated_date_time;
  public ?Name $name;
  public ?Status $status;
  public ?TrackingId $tracking_id;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'creation_date_time' => ?Date,
    ?'dataset_group_arn' => ?Arn,
    ?'event_tracker_arn' => ?Arn,
    ?'last_updated_date_time' => ?Date,
    ?'name' => ?Name,
    ?'status' => ?Status,
    ?'tracking_id' => ?TrackingId,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->event_tracker_arn = $s['event_tracker_arn'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->tracking_id = $s['tracking_id'] ?? '';
  }
}

class EventTrackerSummary {
  public ?Date $creation_date_time;
  public ?Arn $event_tracker_arn;
  public ?Date $last_updated_date_time;
  public ?Name $name;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_date_time' => ?Date,
    ?'event_tracker_arn' => ?Arn,
    ?'last_updated_date_time' => ?Date,
    ?'name' => ?Name,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->event_tracker_arn = $s['event_tracker_arn'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type EventTrackers = vec<EventTrackerSummary>;

type EventType = string;

type EventValueThreshold = string;

type FailureReason = string;

class FeatureTransformation {
  public ?Date $creation_date_time;
  public ?FeaturizationParameters $default_parameters;
  public ?Arn $feature_transformation_arn;
  public ?Date $last_updated_date_time;
  public ?Name $name;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_date_time' => ?Date,
    ?'default_parameters' => ?FeaturizationParameters,
    ?'feature_transformation_arn' => ?Arn,
    ?'last_updated_date_time' => ?Date,
    ?'name' => ?Name,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->default_parameters = $s['default_parameters'] ?? dict[];
    $this->feature_transformation_arn = $s['feature_transformation_arn'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type FeatureTransformationParameters = dict<ParameterName, ParameterValue>;

type FeaturizationParameters = dict<ParameterName, ParameterValue>;

class GetSolutionMetricsRequest {
  public ?Arn $solution_version_arn;

  public function __construct(shape(
    ?'solution_version_arn' => ?Arn,
  ) $s = shape()) {
    $this->solution_version_arn = $s['solution_version_arn'] ?? '';
  }
}

class GetSolutionMetricsResponse {
  public ?Metrics $metrics;
  public ?Arn $solution_version_arn;

  public function __construct(shape(
    ?'metrics' => ?Metrics,
    ?'solution_version_arn' => ?Arn,
  ) $s = shape()) {
    $this->metrics = $s['metrics'] ?? dict[];
    $this->solution_version_arn = $s['solution_version_arn'] ?? '';
  }
}

class HPOConfig {
  public ?HyperParameterRanges $algorithm_hyper_parameter_ranges;
  public ?HPOObjective $hpo_objective;
  public ?HPOResourceConfig $hpo_resource_config;

  public function __construct(shape(
    ?'algorithm_hyper_parameter_ranges' => ?HyperParameterRanges,
    ?'hpo_objective' => ?HPOObjective,
    ?'hpo_resource_config' => ?HPOResourceConfig,
  ) $s = shape()) {
    $this->algorithm_hyper_parameter_ranges = $s['algorithm_hyper_parameter_ranges'] ?? null;
    $this->hpo_objective = $s['hpo_objective'] ?? null;
    $this->hpo_resource_config = $s['hpo_resource_config'] ?? null;
  }
}

class HPOObjective {
  public ?MetricName $metric_name;
  public ?MetricRegex $metric_regex;
  public ?HPOObjectiveType $type;

  public function __construct(shape(
    ?'metric_name' => ?MetricName,
    ?'metric_regex' => ?MetricRegex,
    ?'type' => ?HPOObjectiveType,
  ) $s = shape()) {
    $this->metric_name = $s['metric_name'] ?? '';
    $this->metric_regex = $s['metric_regex'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type HPOObjectiveType = string;

type HPOResource = string;

class HPOResourceConfig {
  public ?HPOResource $max_number_of_training_jobs;
  public ?HPOResource $max_parallel_training_jobs;

  public function __construct(shape(
    ?'max_number_of_training_jobs' => ?HPOResource,
    ?'max_parallel_training_jobs' => ?HPOResource,
  ) $s = shape()) {
    $this->max_number_of_training_jobs = $s['max_number_of_training_jobs'] ?? '';
    $this->max_parallel_training_jobs = $s['max_parallel_training_jobs'] ?? '';
  }
}

class HyperParameterRanges {
  public ?CategoricalHyperParameterRanges $categorical_hyper_parameter_ranges;
  public ?ContinuousHyperParameterRanges $continuous_hyper_parameter_ranges;
  public ?IntegerHyperParameterRanges $integer_hyper_parameter_ranges;

  public function __construct(shape(
    ?'categorical_hyper_parameter_ranges' => ?CategoricalHyperParameterRanges,
    ?'continuous_hyper_parameter_ranges' => ?ContinuousHyperParameterRanges,
    ?'integer_hyper_parameter_ranges' => ?IntegerHyperParameterRanges,
  ) $s = shape()) {
    $this->categorical_hyper_parameter_ranges = $s['categorical_hyper_parameter_ranges'] ?? vec[];
    $this->continuous_hyper_parameter_ranges = $s['continuous_hyper_parameter_ranges'] ?? vec[];
    $this->integer_hyper_parameter_ranges = $s['integer_hyper_parameter_ranges'] ?? vec[];
  }
}

type HyperParameters = dict<ParameterName, ParameterValue>;

class IntegerHyperParameterRange {
  public ?IntegerMaxValue $max_value;
  public ?IntegerMinValue $min_value;
  public ?ParameterName $name;

  public function __construct(shape(
    ?'max_value' => ?IntegerMaxValue,
    ?'min_value' => ?IntegerMinValue,
    ?'name' => ?ParameterName,
  ) $s = shape()) {
    $this->max_value = $s['max_value'] ?? 0;
    $this->min_value = $s['min_value'] ?? 0;
    $this->name = $s['name'] ?? '';
  }
}

type IntegerHyperParameterRanges = vec<IntegerHyperParameterRange>;

type IntegerMaxValue = int;

type IntegerMinValue = int;

class InvalidInputException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidNextTokenException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type KmsKeyArn = string;

class LimitExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListBatchInferenceJobsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?Arn $solution_version_arn;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'solution_version_arn' => ?Arn,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->solution_version_arn = $s['solution_version_arn'] ?? '';
  }
}

class ListBatchInferenceJobsResponse {
  public ?BatchInferenceJobs $batch_inference_jobs;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'batch_inference_jobs' => ?BatchInferenceJobs,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->batch_inference_jobs = $s['batch_inference_jobs'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListCampaignsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?Arn $solution_arn;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'solution_arn' => ?Arn,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->solution_arn = $s['solution_arn'] ?? '';
  }
}

class ListCampaignsResponse {
  public ?Campaigns $campaigns;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'campaigns' => ?Campaigns,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->campaigns = $s['campaigns'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDatasetGroupsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDatasetGroupsResponse {
  public ?DatasetGroups $dataset_groups;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'dataset_groups' => ?DatasetGroups,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->dataset_groups = $s['dataset_groups'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDatasetImportJobsRequest {
  public ?Arn $dataset_arn;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'dataset_arn' => ?Arn,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->dataset_arn = $s['dataset_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDatasetImportJobsResponse {
  public ?DatasetImportJobs $dataset_import_jobs;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'dataset_import_jobs' => ?DatasetImportJobs,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->dataset_import_jobs = $s['dataset_import_jobs'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDatasetsRequest {
  public ?Arn $dataset_group_arn;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'dataset_group_arn' => ?Arn,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDatasetsResponse {
  public ?Datasets $datasets;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'datasets' => ?Datasets,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->datasets = $s['datasets'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListEventTrackersRequest {
  public ?Arn $dataset_group_arn;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'dataset_group_arn' => ?Arn,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListEventTrackersResponse {
  public ?EventTrackers $event_trackers;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'event_trackers' => ?EventTrackers,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->event_trackers = $s['event_trackers'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListRecipesRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?RecipeProvider $recipe_provider;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'recipe_provider' => ?RecipeProvider,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->recipe_provider = $s['recipe_provider'] ?? '';
  }
}

class ListRecipesResponse {
  public ?NextToken $next_token;
  public ?Recipes $recipes;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'recipes' => ?Recipes,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->recipes = $s['recipes'] ?? vec[];
  }
}

class ListSchemasRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSchemasResponse {
  public ?NextToken $next_token;
  public ?Schemas $schemas;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'schemas' => ?Schemas,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->schemas = $s['schemas'] ?? vec[];
  }
}

class ListSolutionVersionsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?Arn $solution_arn;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'solution_arn' => ?Arn,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->solution_arn = $s['solution_arn'] ?? '';
  }
}

class ListSolutionVersionsResponse {
  public ?NextToken $next_token;
  public ?SolutionVersions $solution_versions;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'solution_versions' => ?SolutionVersions,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->solution_versions = $s['solution_versions'] ?? vec[];
  }
}

class ListSolutionsRequest {
  public ?Arn $dataset_group_arn;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'dataset_group_arn' => ?Arn,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSolutionsResponse {
  public ?NextToken $next_token;
  public ?Solutions $solutions;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'solutions' => ?Solutions,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->solutions = $s['solutions'] ?? vec[];
  }
}

type MaxResults = int;

type MetricName = string;

type MetricRegex = string;

type MetricValue = float;

type Metrics = dict<MetricName, MetricValue>;

type Name = string;

type NextToken = string;

type NumBatchResults = int;

type ParameterName = string;

type ParameterValue = string;

type PerformAutoML = bool;

type PerformHPO = bool;

class Recipe {
  public ?Arn $algorithm_arn;
  public ?Date $creation_date_time;
  public ?Description $description;
  public ?Arn $feature_transformation_arn;
  public ?Date $last_updated_date_time;
  public ?Name $name;
  public ?Arn $recipe_arn;
  public ?RecipeType $recipe_type;
  public ?Status $status;

  public function __construct(shape(
    ?'algorithm_arn' => ?Arn,
    ?'creation_date_time' => ?Date,
    ?'description' => ?Description,
    ?'feature_transformation_arn' => ?Arn,
    ?'last_updated_date_time' => ?Date,
    ?'name' => ?Name,
    ?'recipe_arn' => ?Arn,
    ?'recipe_type' => ?RecipeType,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->algorithm_arn = $s['algorithm_arn'] ?? '';
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->feature_transformation_arn = $s['feature_transformation_arn'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->recipe_arn = $s['recipe_arn'] ?? '';
    $this->recipe_type = $s['recipe_type'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type RecipeProvider = string;

class RecipeSummary {
  public ?Date $creation_date_time;
  public ?Date $last_updated_date_time;
  public ?Name $name;
  public ?Arn $recipe_arn;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_date_time' => ?Date,
    ?'last_updated_date_time' => ?Date,
    ?'name' => ?Name,
    ?'recipe_arn' => ?Arn,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->recipe_arn = $s['recipe_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type RecipeType = string;

type Recipes = vec<RecipeSummary>;

class ResourceAlreadyExistsException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ResourceConfig = dict<ParameterName, ParameterValue>;

class ResourceInUseException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type RoleArn = string;

class S3DataConfig {
  public ?KmsKeyArn $kms_key_arn;
  public ?S3Location $path;

  public function __construct(shape(
    ?'kms_key_arn' => ?KmsKeyArn,
    ?'path' => ?S3Location,
  ) $s = shape()) {
    $this->kms_key_arn = $s['kms_key_arn'] ?? '';
    $this->path = $s['path'] ?? '';
  }
}

type S3Location = string;

type Schemas = vec<DatasetSchemaSummary>;

class Solution {
  public ?AutoMLResult $auto_ml_result;
  public ?Date $creation_date_time;
  public ?Arn $dataset_group_arn;
  public ?EventType $event_type;
  public ?Date $last_updated_date_time;
  public ?SolutionVersionSummary $latest_solution_version;
  public ?Name $name;
  public ?PerformAutoML $perform_auto_ml;
  public ?PerformHPO $perform_hpo;
  public ?Arn $recipe_arn;
  public ?Arn $solution_arn;
  public ?SolutionConfig $solution_config;
  public ?Status $status;

  public function __construct(shape(
    ?'auto_ml_result' => ?AutoMLResult,
    ?'creation_date_time' => ?Date,
    ?'dataset_group_arn' => ?Arn,
    ?'event_type' => ?EventType,
    ?'last_updated_date_time' => ?Date,
    ?'latest_solution_version' => ?SolutionVersionSummary,
    ?'name' => ?Name,
    ?'perform_auto_ml' => ?PerformAutoML,
    ?'perform_hpo' => ?PerformHPO,
    ?'recipe_arn' => ?Arn,
    ?'solution_arn' => ?Arn,
    ?'solution_config' => ?SolutionConfig,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->auto_ml_result = $s['auto_ml_result'] ?? null;
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->event_type = $s['event_type'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->latest_solution_version = $s['latest_solution_version'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->perform_auto_ml = $s['perform_auto_ml'] ?? false;
    $this->perform_hpo = $s['perform_hpo'] ?? false;
    $this->recipe_arn = $s['recipe_arn'] ?? '';
    $this->solution_arn = $s['solution_arn'] ?? '';
    $this->solution_config = $s['solution_config'] ?? null;
    $this->status = $s['status'] ?? '';
  }
}

class SolutionConfig {
  public ?HyperParameters $algorithm_hyper_parameters;
  public ?AutoMLConfig $auto_ml_config;
  public ?EventValueThreshold $event_value_threshold;
  public ?FeatureTransformationParameters $feature_transformation_parameters;
  public ?HPOConfig $hpo_config;

  public function __construct(shape(
    ?'algorithm_hyper_parameters' => ?HyperParameters,
    ?'auto_ml_config' => ?AutoMLConfig,
    ?'event_value_threshold' => ?EventValueThreshold,
    ?'feature_transformation_parameters' => ?FeatureTransformationParameters,
    ?'hpo_config' => ?HPOConfig,
  ) $s = shape()) {
    $this->algorithm_hyper_parameters = $s['algorithm_hyper_parameters'] ?? dict[];
    $this->auto_ml_config = $s['auto_ml_config'] ?? null;
    $this->event_value_threshold = $s['event_value_threshold'] ?? '';
    $this->feature_transformation_parameters = $s['feature_transformation_parameters'] ?? dict[];
    $this->hpo_config = $s['hpo_config'] ?? null;
  }
}

class SolutionSummary {
  public ?Date $creation_date_time;
  public ?Date $last_updated_date_time;
  public ?Name $name;
  public ?Arn $solution_arn;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_date_time' => ?Date,
    ?'last_updated_date_time' => ?Date,
    ?'name' => ?Name,
    ?'solution_arn' => ?Arn,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->solution_arn = $s['solution_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class SolutionVersion {
  public ?Date $creation_date_time;
  public ?Arn $dataset_group_arn;
  public ?EventType $event_type;
  public ?FailureReason $failure_reason;
  public ?Date $last_updated_date_time;
  public ?PerformAutoML $perform_auto_ml;
  public ?PerformHPO $perform_hpo;
  public ?Arn $recipe_arn;
  public ?Arn $solution_arn;
  public ?SolutionConfig $solution_config;
  public ?Arn $solution_version_arn;
  public ?Status $status;
  public ?TrainingHours $training_hours;
  public ?TrainingMode $training_mode;
  public ?TunedHPOParams $tuned_hpo_params;

  public function __construct(shape(
    ?'creation_date_time' => ?Date,
    ?'dataset_group_arn' => ?Arn,
    ?'event_type' => ?EventType,
    ?'failure_reason' => ?FailureReason,
    ?'last_updated_date_time' => ?Date,
    ?'perform_auto_ml' => ?PerformAutoML,
    ?'perform_hpo' => ?PerformHPO,
    ?'recipe_arn' => ?Arn,
    ?'solution_arn' => ?Arn,
    ?'solution_config' => ?SolutionConfig,
    ?'solution_version_arn' => ?Arn,
    ?'status' => ?Status,
    ?'training_hours' => ?TrainingHours,
    ?'training_mode' => ?TrainingMode,
    ?'tuned_hpo_params' => ?TunedHPOParams,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->event_type = $s['event_type'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->perform_auto_ml = $s['perform_auto_ml'] ?? false;
    $this->perform_hpo = $s['perform_hpo'] ?? false;
    $this->recipe_arn = $s['recipe_arn'] ?? '';
    $this->solution_arn = $s['solution_arn'] ?? '';
    $this->solution_config = $s['solution_config'] ?? null;
    $this->solution_version_arn = $s['solution_version_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->training_hours = $s['training_hours'] ?? 0.0;
    $this->training_mode = $s['training_mode'] ?? '';
    $this->tuned_hpo_params = $s['tuned_hpo_params'] ?? null;
  }
}

class SolutionVersionSummary {
  public ?Date $creation_date_time;
  public ?FailureReason $failure_reason;
  public ?Date $last_updated_date_time;
  public ?Arn $solution_version_arn;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_date_time' => ?Date,
    ?'failure_reason' => ?FailureReason,
    ?'last_updated_date_time' => ?Date,
    ?'solution_version_arn' => ?Arn,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->last_updated_date_time = $s['last_updated_date_time'] ?? 0;
    $this->solution_version_arn = $s['solution_version_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type SolutionVersions = vec<SolutionVersionSummary>;

type Solutions = vec<SolutionSummary>;

type Status = string;

type TrackingId = string;

type TrainingHours = float;

type TrainingInputMode = string;

type TrainingMode = string;

type TransactionsPerSecond = int;

type Tunable = bool;

class TunedHPOParams {
  public ?HyperParameters $algorithm_hyper_parameters;

  public function __construct(shape(
    ?'algorithm_hyper_parameters' => ?HyperParameters,
  ) $s = shape()) {
    $this->algorithm_hyper_parameters = $s['algorithm_hyper_parameters'] ?? dict[];
  }
}

class UpdateCampaignRequest {
  public ?Arn $campaign_arn;
  public ?TransactionsPerSecond $min_provisioned_tps;
  public ?Arn $solution_version_arn;

  public function __construct(shape(
    ?'campaign_arn' => ?Arn,
    ?'min_provisioned_tps' => ?TransactionsPerSecond,
    ?'solution_version_arn' => ?Arn,
  ) $s = shape()) {
    $this->campaign_arn = $s['campaign_arn'] ?? '';
    $this->min_provisioned_tps = $s['min_provisioned_tps'] ?? 0;
    $this->solution_version_arn = $s['solution_version_arn'] ?? '';
  }
}

class UpdateCampaignResponse {
  public ?Arn $campaign_arn;

  public function __construct(shape(
    ?'campaign_arn' => ?Arn,
  ) $s = shape()) {
    $this->campaign_arn = $s['campaign_arn'] ?? '';
  }
}


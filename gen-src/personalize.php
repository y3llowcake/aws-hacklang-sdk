<?hh // strict
namespace slack\aws\personalize;

interface Personalize {
  public function CreateBatchInferenceJob(CreateBatchInferenceJobRequest): Awaitable<Errors\Result<CreateBatchInferenceJobResponse>>;
  public function CreateCampaign(CreateCampaignRequest): Awaitable<Errors\Result<CreateCampaignResponse>>;
  public function CreateDataset(CreateDatasetRequest): Awaitable<Errors\Result<CreateDatasetResponse>>;
  public function CreateDatasetGroup(CreateDatasetGroupRequest): Awaitable<Errors\Result<CreateDatasetGroupResponse>>;
  public function CreateDatasetImportJob(CreateDatasetImportJobRequest): Awaitable<Errors\Result<CreateDatasetImportJobResponse>>;
  public function CreateEventTracker(CreateEventTrackerRequest): Awaitable<Errors\Result<CreateEventTrackerResponse>>;
  public function CreateSchema(CreateSchemaRequest): Awaitable<Errors\Result<CreateSchemaResponse>>;
  public function CreateSolution(CreateSolutionRequest): Awaitable<Errors\Result<CreateSolutionResponse>>;
  public function CreateSolutionVersion(CreateSolutionVersionRequest): Awaitable<Errors\Result<CreateSolutionVersionResponse>>;
  public function DeleteCampaign(DeleteCampaignRequest): Awaitable<Errors\Error>;
  public function DeleteDataset(DeleteDatasetRequest): Awaitable<Errors\Error>;
  public function DeleteDatasetGroup(DeleteDatasetGroupRequest): Awaitable<Errors\Error>;
  public function DeleteEventTracker(DeleteEventTrackerRequest): Awaitable<Errors\Error>;
  public function DeleteSchema(DeleteSchemaRequest): Awaitable<Errors\Error>;
  public function DeleteSolution(DeleteSolutionRequest): Awaitable<Errors\Error>;
  public function DescribeAlgorithm(DescribeAlgorithmRequest): Awaitable<Errors\Result<DescribeAlgorithmResponse>>;
  public function DescribeBatchInferenceJob(DescribeBatchInferenceJobRequest): Awaitable<Errors\Result<DescribeBatchInferenceJobResponse>>;
  public function DescribeCampaign(DescribeCampaignRequest): Awaitable<Errors\Result<DescribeCampaignResponse>>;
  public function DescribeDataset(DescribeDatasetRequest): Awaitable<Errors\Result<DescribeDatasetResponse>>;
  public function DescribeDatasetGroup(DescribeDatasetGroupRequest): Awaitable<Errors\Result<DescribeDatasetGroupResponse>>;
  public function DescribeDatasetImportJob(DescribeDatasetImportJobRequest): Awaitable<Errors\Result<DescribeDatasetImportJobResponse>>;
  public function DescribeEventTracker(DescribeEventTrackerRequest): Awaitable<Errors\Result<DescribeEventTrackerResponse>>;
  public function DescribeFeatureTransformation(DescribeFeatureTransformationRequest): Awaitable<Errors\Result<DescribeFeatureTransformationResponse>>;
  public function DescribeRecipe(DescribeRecipeRequest): Awaitable<Errors\Result<DescribeRecipeResponse>>;
  public function DescribeSchema(DescribeSchemaRequest): Awaitable<Errors\Result<DescribeSchemaResponse>>;
  public function DescribeSolution(DescribeSolutionRequest): Awaitable<Errors\Result<DescribeSolutionResponse>>;
  public function DescribeSolutionVersion(DescribeSolutionVersionRequest): Awaitable<Errors\Result<DescribeSolutionVersionResponse>>;
  public function GetSolutionMetrics(GetSolutionMetricsRequest): Awaitable<Errors\Result<GetSolutionMetricsResponse>>;
  public function ListBatchInferenceJobs(ListBatchInferenceJobsRequest): Awaitable<Errors\Result<ListBatchInferenceJobsResponse>>;
  public function ListCampaigns(ListCampaignsRequest): Awaitable<Errors\Result<ListCampaignsResponse>>;
  public function ListDatasetGroups(ListDatasetGroupsRequest): Awaitable<Errors\Result<ListDatasetGroupsResponse>>;
  public function ListDatasetImportJobs(ListDatasetImportJobsRequest): Awaitable<Errors\Result<ListDatasetImportJobsResponse>>;
  public function ListDatasets(ListDatasetsRequest): Awaitable<Errors\Result<ListDatasetsResponse>>;
  public function ListEventTrackers(ListEventTrackersRequest): Awaitable<Errors\Result<ListEventTrackersResponse>>;
  public function ListRecipes(ListRecipesRequest): Awaitable<Errors\Result<ListRecipesResponse>>;
  public function ListSchemas(ListSchemasRequest): Awaitable<Errors\Result<ListSchemasResponse>>;
  public function ListSolutionVersions(ListSolutionVersionsRequest): Awaitable<Errors\Result<ListSolutionVersionsResponse>>;
  public function ListSolutions(ListSolutionsRequest): Awaitable<Errors\Result<ListSolutionsResponse>>;
  public function UpdateCampaign(UpdateCampaignRequest): Awaitable<Errors\Result<UpdateCampaignResponse>>;
}

type AccountId = string;

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

  public function __construct(shape(
  ?'algorithm_arn' => Arn,
  ?'algorithm_image' => AlgorithmImage,
  ?'creation_date_time' => Date,
  ?'default_hyper_parameter_ranges' => DefaultHyperParameterRanges,
  ?'default_hyper_parameters' => HyperParameters,
  ?'default_resource_config' => ResourceConfig,
  ?'last_updated_date_time' => Date,
  ?'name' => Name,
  ?'role_arn' => Arn,
  ?'training_input_mode' => TrainingInputMode,
  ) $s = shape()) {
    $this->algorithm_arn = $algorithm_arn ?? ;
    $this->algorithm_image = $algorithm_image ?? ;
    $this->creation_date_time = $creation_date_time ?? ;
    $this->default_hyper_parameter_ranges = $default_hyper_parameter_ranges ?? ;
    $this->default_hyper_parameters = $default_hyper_parameters ?? ;
    $this->default_resource_config = $default_resource_config ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->name = $name ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->training_input_mode = $training_input_mode ?? ;
  }
}

class AlgorithmImage {
  public DockerURI $docker_uri;
  public Name $name;

  public function __construct(shape(
  ?'docker_uri' => DockerURI,
  ?'name' => Name,
  ) $s = shape()) {
    $this->docker_uri = $docker_uri ?? ;
    $this->name = $name ?? ;
  }
}

type Arn = string;

type ArnList = vec<Arn>;

class AutoMLConfig {
  public MetricName $metric_name;
  public ArnList $recipe_list;

  public function __construct(shape(
  ?'metric_name' => MetricName,
  ?'recipe_list' => ArnList,
  ) $s = shape()) {
    $this->metric_name = $metric_name ?? ;
    $this->recipe_list = $recipe_list ?? ;
  }
}

class AutoMLResult {
  public Arn $best_recipe_arn;

  public function __construct(shape(
  ?'best_recipe_arn' => Arn,
  ) $s = shape()) {
    $this->best_recipe_arn = $best_recipe_arn ?? ;
  }
}

type AvroSchema = string;

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

  public function __construct(shape(
  ?'batch_inference_job_arn' => Arn,
  ?'creation_date_time' => Date,
  ?'failure_reason' => FailureReason,
  ?'job_input' => BatchInferenceJobInput,
  ?'job_name' => Name,
  ?'job_output' => BatchInferenceJobOutput,
  ?'last_updated_date_time' => Date,
  ?'num_results' => NumBatchResults,
  ?'role_arn' => RoleArn,
  ?'solution_version_arn' => Arn,
  ?'status' => Status,
  ) $s = shape()) {
    $this->batch_inference_job_arn = $batch_inference_job_arn ?? ;
    $this->creation_date_time = $creation_date_time ?? ;
    $this->failure_reason = $failure_reason ?? ;
    $this->job_input = $job_input ?? ;
    $this->job_name = $job_name ?? ;
    $this->job_output = $job_output ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->num_results = $num_results ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->solution_version_arn = $solution_version_arn ?? ;
    $this->status = $status ?? ;
  }
}

class BatchInferenceJobInput {
  public S3DataConfig $s_3_data_source;

  public function __construct(shape(
  ?'s_3_data_source' => S3DataConfig,
  ) $s = shape()) {
    $this->s_3_data_source = $s_3_data_source ?? ;
  }
}

class BatchInferenceJobOutput {
  public S3DataConfig $s_3_data_destination;

  public function __construct(shape(
  ?'s_3_data_destination' => S3DataConfig,
  ) $s = shape()) {
    $this->s_3_data_destination = $s_3_data_destination ?? ;
  }
}

class BatchInferenceJobSummary {
  public Arn $batch_inference_job_arn;
  public Date $creation_date_time;
  public FailureReason $failure_reason;
  public Name $job_name;
  public Date $last_updated_date_time;
  public Arn $solution_version_arn;
  public Status $status;

  public function __construct(shape(
  ?'batch_inference_job_arn' => Arn,
  ?'creation_date_time' => Date,
  ?'failure_reason' => FailureReason,
  ?'job_name' => Name,
  ?'last_updated_date_time' => Date,
  ?'solution_version_arn' => Arn,
  ?'status' => Status,
  ) $s = shape()) {
    $this->batch_inference_job_arn = $batch_inference_job_arn ?? ;
    $this->creation_date_time = $creation_date_time ?? ;
    $this->failure_reason = $failure_reason ?? ;
    $this->job_name = $job_name ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->solution_version_arn = $solution_version_arn ?? ;
    $this->status = $status ?? ;
  }
}

type BatchInferenceJobs = vec<BatchInferenceJobSummary>;

type Boolean = bool;

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

  public function __construct(shape(
  ?'campaign_arn' => Arn,
  ?'creation_date_time' => Date,
  ?'failure_reason' => FailureReason,
  ?'last_updated_date_time' => Date,
  ?'latest_campaign_update' => CampaignUpdateSummary,
  ?'min_provisioned_tps' => TransactionsPerSecond,
  ?'name' => Name,
  ?'solution_version_arn' => Arn,
  ?'status' => Status,
  ) $s = shape()) {
    $this->campaign_arn = $campaign_arn ?? ;
    $this->creation_date_time = $creation_date_time ?? ;
    $this->failure_reason = $failure_reason ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->latest_campaign_update = $latest_campaign_update ?? ;
    $this->min_provisioned_tps = $min_provisioned_tps ?? ;
    $this->name = $name ?? ;
    $this->solution_version_arn = $solution_version_arn ?? ;
    $this->status = $status ?? ;
  }
}

class CampaignSummary {
  public Arn $campaign_arn;
  public Date $creation_date_time;
  public FailureReason $failure_reason;
  public Date $last_updated_date_time;
  public Name $name;
  public Status $status;

  public function __construct(shape(
  ?'campaign_arn' => Arn,
  ?'creation_date_time' => Date,
  ?'failure_reason' => FailureReason,
  ?'last_updated_date_time' => Date,
  ?'name' => Name,
  ?'status' => Status,
  ) $s = shape()) {
    $this->campaign_arn = $campaign_arn ?? ;
    $this->creation_date_time = $creation_date_time ?? ;
    $this->failure_reason = $failure_reason ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->name = $name ?? ;
    $this->status = $status ?? ;
  }
}

class CampaignUpdateSummary {
  public Date $creation_date_time;
  public FailureReason $failure_reason;
  public Date $last_updated_date_time;
  public TransactionsPerSecond $min_provisioned_tps;
  public Arn $solution_version_arn;
  public Status $status;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'failure_reason' => FailureReason,
  ?'last_updated_date_time' => Date,
  ?'min_provisioned_tps' => TransactionsPerSecond,
  ?'solution_version_arn' => Arn,
  ?'status' => Status,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? ;
    $this->failure_reason = $failure_reason ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->min_provisioned_tps = $min_provisioned_tps ?? ;
    $this->solution_version_arn = $solution_version_arn ?? ;
    $this->status = $status ?? ;
  }
}

type Campaigns = vec<CampaignSummary>;

class CategoricalHyperParameterRange {
  public ParameterName $name;
  public CategoricalValues $values;

  public function __construct(shape(
  ?'name' => ParameterName,
  ?'values' => CategoricalValues,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->values = $values ?? ;
  }
}

type CategoricalHyperParameterRanges = vec<CategoricalHyperParameterRange>;

type CategoricalValue = string;

type CategoricalValues = vec<CategoricalValue>;

class ContinuousHyperParameterRange {
  public ContinuousMaxValue $max_value;
  public ContinuousMinValue $min_value;
  public ParameterName $name;

  public function __construct(shape(
  ?'max_value' => ContinuousMaxValue,
  ?'min_value' => ContinuousMinValue,
  ?'name' => ParameterName,
  ) $s = shape()) {
    $this->max_value = $max_value ?? ;
    $this->min_value = $min_value ?? ;
    $this->name = $name ?? ;
  }
}

type ContinuousHyperParameterRanges = vec<ContinuousHyperParameterRange>;

type ContinuousMaxValue = float;

type ContinuousMinValue = float;

class CreateBatchInferenceJobRequest {
  public BatchInferenceJobInput $job_input;
  public Name $job_name;
  public BatchInferenceJobOutput $job_output;
  public NumBatchResults $num_results;
  public RoleArn $role_arn;
  public Arn $solution_version_arn;

  public function __construct(shape(
  ?'job_input' => BatchInferenceJobInput,
  ?'job_name' => Name,
  ?'job_output' => BatchInferenceJobOutput,
  ?'num_results' => NumBatchResults,
  ?'role_arn' => RoleArn,
  ?'solution_version_arn' => Arn,
  ) $s = shape()) {
    $this->job_input = $job_input ?? ;
    $this->job_name = $job_name ?? ;
    $this->job_output = $job_output ?? ;
    $this->num_results = $num_results ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->solution_version_arn = $solution_version_arn ?? ;
  }
}

class CreateBatchInferenceJobResponse {
  public Arn $batch_inference_job_arn;

  public function __construct(shape(
  ?'batch_inference_job_arn' => Arn,
  ) $s = shape()) {
    $this->batch_inference_job_arn = $batch_inference_job_arn ?? ;
  }
}

class CreateCampaignRequest {
  public TransactionsPerSecond $min_provisioned_tps;
  public Name $name;
  public Arn $solution_version_arn;

  public function __construct(shape(
  ?'min_provisioned_tps' => TransactionsPerSecond,
  ?'name' => Name,
  ?'solution_version_arn' => Arn,
  ) $s = shape()) {
    $this->min_provisioned_tps = $min_provisioned_tps ?? ;
    $this->name = $name ?? ;
    $this->solution_version_arn = $solution_version_arn ?? ;
  }
}

class CreateCampaignResponse {
  public Arn $campaign_arn;

  public function __construct(shape(
  ?'campaign_arn' => Arn,
  ) $s = shape()) {
    $this->campaign_arn = $campaign_arn ?? ;
  }
}

class CreateDatasetGroupRequest {
  public KmsKeyArn $kms_key_arn;
  public Name $name;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'kms_key_arn' => KmsKeyArn,
  ?'name' => Name,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->kms_key_arn = $kms_key_arn ?? ;
    $this->name = $name ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class CreateDatasetGroupResponse {
  public Arn $dataset_group_arn;

  public function __construct(shape(
  ?'dataset_group_arn' => Arn,
  ) $s = shape()) {
    $this->dataset_group_arn = $dataset_group_arn ?? ;
  }
}

class CreateDatasetImportJobRequest {
  public DataSource $data_source;
  public Arn $dataset_arn;
  public Name $job_name;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'data_source' => DataSource,
  ?'dataset_arn' => Arn,
  ?'job_name' => Name,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->data_source = $data_source ?? ;
    $this->dataset_arn = $dataset_arn ?? ;
    $this->job_name = $job_name ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class CreateDatasetImportJobResponse {
  public Arn $dataset_import_job_arn;

  public function __construct(shape(
  ?'dataset_import_job_arn' => Arn,
  ) $s = shape()) {
    $this->dataset_import_job_arn = $dataset_import_job_arn ?? ;
  }
}

class CreateDatasetRequest {
  public Arn $dataset_group_arn;
  public DatasetType $dataset_type;
  public Name $name;
  public Arn $schema_arn;

  public function __construct(shape(
  ?'dataset_group_arn' => Arn,
  ?'dataset_type' => DatasetType,
  ?'name' => Name,
  ?'schema_arn' => Arn,
  ) $s = shape()) {
    $this->dataset_group_arn = $dataset_group_arn ?? ;
    $this->dataset_type = $dataset_type ?? ;
    $this->name = $name ?? ;
    $this->schema_arn = $schema_arn ?? ;
  }
}

class CreateDatasetResponse {
  public Arn $dataset_arn;

  public function __construct(shape(
  ?'dataset_arn' => Arn,
  ) $s = shape()) {
    $this->dataset_arn = $dataset_arn ?? ;
  }
}

class CreateEventTrackerRequest {
  public Arn $dataset_group_arn;
  public Name $name;

  public function __construct(shape(
  ?'dataset_group_arn' => Arn,
  ?'name' => Name,
  ) $s = shape()) {
    $this->dataset_group_arn = $dataset_group_arn ?? ;
    $this->name = $name ?? ;
  }
}

class CreateEventTrackerResponse {
  public Arn $event_tracker_arn;
  public TrackingId $tracking_id;

  public function __construct(shape(
  ?'event_tracker_arn' => Arn,
  ?'tracking_id' => TrackingId,
  ) $s = shape()) {
    $this->event_tracker_arn = $event_tracker_arn ?? ;
    $this->tracking_id = $tracking_id ?? ;
  }
}

class CreateSchemaRequest {
  public Name $name;
  public AvroSchema $schema;

  public function __construct(shape(
  ?'name' => Name,
  ?'schema' => AvroSchema,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->schema = $schema ?? ;
  }
}

class CreateSchemaResponse {
  public Arn $schema_arn;

  public function __construct(shape(
  ?'schema_arn' => Arn,
  ) $s = shape()) {
    $this->schema_arn = $schema_arn ?? ;
  }
}

class CreateSolutionRequest {
  public Arn $dataset_group_arn;
  public EventType $event_type;
  public Name $name;
  public PerformAutoML $perform_auto_ml;
  public boolean $perform_hpo;
  public Arn $recipe_arn;
  public SolutionConfig $solution_config;

  public function __construct(shape(
  ?'dataset_group_arn' => Arn,
  ?'event_type' => EventType,
  ?'name' => Name,
  ?'perform_auto_ml' => PerformAutoML,
  ?'perform_hpo' => boolean,
  ?'recipe_arn' => Arn,
  ?'solution_config' => SolutionConfig,
  ) $s = shape()) {
    $this->dataset_group_arn = $dataset_group_arn ?? ;
    $this->event_type = $event_type ?? ;
    $this->name = $name ?? ;
    $this->perform_auto_ml = $perform_auto_ml ?? ;
    $this->perform_hpo = $perform_hpo ?? ;
    $this->recipe_arn = $recipe_arn ?? ;
    $this->solution_config = $solution_config ?? ;
  }
}

class CreateSolutionResponse {
  public Arn $solution_arn;

  public function __construct(shape(
  ?'solution_arn' => Arn,
  ) $s = shape()) {
    $this->solution_arn = $solution_arn ?? ;
  }
}

class CreateSolutionVersionRequest {
  public Arn $solution_arn;
  public TrainingMode $training_mode;

  public function __construct(shape(
  ?'solution_arn' => Arn,
  ?'training_mode' => TrainingMode,
  ) $s = shape()) {
    $this->solution_arn = $solution_arn ?? ;
    $this->training_mode = $training_mode ?? ;
  }
}

class CreateSolutionVersionResponse {
  public Arn $solution_version_arn;

  public function __construct(shape(
  ?'solution_version_arn' => Arn,
  ) $s = shape()) {
    $this->solution_version_arn = $solution_version_arn ?? ;
  }
}

class DataSource {
  public S3Location $data_location;

  public function __construct(shape(
  ?'data_location' => S3Location,
  ) $s = shape()) {
    $this->data_location = $data_location ?? ;
  }
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

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'dataset_arn' => Arn,
  ?'dataset_group_arn' => Arn,
  ?'dataset_type' => DatasetType,
  ?'last_updated_date_time' => Date,
  ?'name' => Name,
  ?'schema_arn' => Arn,
  ?'status' => Status,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? ;
    $this->dataset_arn = $dataset_arn ?? ;
    $this->dataset_group_arn = $dataset_group_arn ?? ;
    $this->dataset_type = $dataset_type ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->name = $name ?? ;
    $this->schema_arn = $schema_arn ?? ;
    $this->status = $status ?? ;
  }
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

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'dataset_group_arn' => Arn,
  ?'failure_reason' => FailureReason,
  ?'kms_key_arn' => KmsKeyArn,
  ?'last_updated_date_time' => Date,
  ?'name' => Name,
  ?'role_arn' => RoleArn,
  ?'status' => Status,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? ;
    $this->dataset_group_arn = $dataset_group_arn ?? ;
    $this->failure_reason = $failure_reason ?? ;
    $this->kms_key_arn = $kms_key_arn ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->name = $name ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->status = $status ?? ;
  }
}

class DatasetGroupSummary {
  public Date $creation_date_time;
  public Arn $dataset_group_arn;
  public FailureReason $failure_reason;
  public Date $last_updated_date_time;
  public Name $name;
  public Status $status;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'dataset_group_arn' => Arn,
  ?'failure_reason' => FailureReason,
  ?'last_updated_date_time' => Date,
  ?'name' => Name,
  ?'status' => Status,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? ;
    $this->dataset_group_arn = $dataset_group_arn ?? ;
    $this->failure_reason = $failure_reason ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->name = $name ?? ;
    $this->status = $status ?? ;
  }
}

type DatasetGroups = vec<DatasetGroupSummary>;

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

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'data_source' => DataSource,
  ?'dataset_arn' => Arn,
  ?'dataset_import_job_arn' => Arn,
  ?'failure_reason' => FailureReason,
  ?'job_name' => Name,
  ?'last_updated_date_time' => Date,
  ?'role_arn' => Arn,
  ?'status' => Status,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? ;
    $this->data_source = $data_source ?? ;
    $this->dataset_arn = $dataset_arn ?? ;
    $this->dataset_import_job_arn = $dataset_import_job_arn ?? ;
    $this->failure_reason = $failure_reason ?? ;
    $this->job_name = $job_name ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->status = $status ?? ;
  }
}

class DatasetImportJobSummary {
  public Date $creation_date_time;
  public Arn $dataset_import_job_arn;
  public FailureReason $failure_reason;
  public Name $job_name;
  public Date $last_updated_date_time;
  public Status $status;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'dataset_import_job_arn' => Arn,
  ?'failure_reason' => FailureReason,
  ?'job_name' => Name,
  ?'last_updated_date_time' => Date,
  ?'status' => Status,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? ;
    $this->dataset_import_job_arn = $dataset_import_job_arn ?? ;
    $this->failure_reason = $failure_reason ?? ;
    $this->job_name = $job_name ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->status = $status ?? ;
  }
}

type DatasetImportJobs = vec<DatasetImportJobSummary>;

class DatasetSchema {
  public Date $creation_date_time;
  public Date $last_updated_date_time;
  public Name $name;
  public AvroSchema $schema;
  public Arn $schema_arn;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'last_updated_date_time' => Date,
  ?'name' => Name,
  ?'schema' => AvroSchema,
  ?'schema_arn' => Arn,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->name = $name ?? ;
    $this->schema = $schema ?? ;
    $this->schema_arn = $schema_arn ?? ;
  }
}

class DatasetSchemaSummary {
  public Date $creation_date_time;
  public Date $last_updated_date_time;
  public Name $name;
  public Arn $schema_arn;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'last_updated_date_time' => Date,
  ?'name' => Name,
  ?'schema_arn' => Arn,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->name = $name ?? ;
    $this->schema_arn = $schema_arn ?? ;
  }
}

class DatasetSummary {
  public Date $creation_date_time;
  public Arn $dataset_arn;
  public DatasetType $dataset_type;
  public Date $last_updated_date_time;
  public Name $name;
  public Status $status;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'dataset_arn' => Arn,
  ?'dataset_type' => DatasetType,
  ?'last_updated_date_time' => Date,
  ?'name' => Name,
  ?'status' => Status,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? ;
    $this->dataset_arn = $dataset_arn ?? ;
    $this->dataset_type = $dataset_type ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->name = $name ?? ;
    $this->status = $status ?? ;
  }
}

type DatasetType = string;

type Datasets = vec<DatasetSummary>;

type Date = int;

class DefaultCategoricalHyperParameterRange {
  public Tunable $is_tunable;
  public ParameterName $name;
  public CategoricalValues $values;

  public function __construct(shape(
  ?'is_tunable' => Tunable,
  ?'name' => ParameterName,
  ?'values' => CategoricalValues,
  ) $s = shape()) {
    $this->is_tunable = $is_tunable ?? ;
    $this->name = $name ?? ;
    $this->values = $values ?? ;
  }
}

type DefaultCategoricalHyperParameterRanges = vec<DefaultCategoricalHyperParameterRange>;

class DefaultContinuousHyperParameterRange {
  public Tunable $is_tunable;
  public ContinuousMaxValue $max_value;
  public ContinuousMinValue $min_value;
  public ParameterName $name;

  public function __construct(shape(
  ?'is_tunable' => Tunable,
  ?'max_value' => ContinuousMaxValue,
  ?'min_value' => ContinuousMinValue,
  ?'name' => ParameterName,
  ) $s = shape()) {
    $this->is_tunable = $is_tunable ?? ;
    $this->max_value = $max_value ?? ;
    $this->min_value = $min_value ?? ;
    $this->name = $name ?? ;
  }
}

type DefaultContinuousHyperParameterRanges = vec<DefaultContinuousHyperParameterRange>;

class DefaultHyperParameterRanges {
  public DefaultCategoricalHyperParameterRanges $categorical_hyper_parameter_ranges;
  public DefaultContinuousHyperParameterRanges $continuous_hyper_parameter_ranges;
  public DefaultIntegerHyperParameterRanges $integer_hyper_parameter_ranges;

  public function __construct(shape(
  ?'categorical_hyper_parameter_ranges' => DefaultCategoricalHyperParameterRanges,
  ?'continuous_hyper_parameter_ranges' => DefaultContinuousHyperParameterRanges,
  ?'integer_hyper_parameter_ranges' => DefaultIntegerHyperParameterRanges,
  ) $s = shape()) {
    $this->categorical_hyper_parameter_ranges = $categorical_hyper_parameter_ranges ?? ;
    $this->continuous_hyper_parameter_ranges = $continuous_hyper_parameter_ranges ?? ;
    $this->integer_hyper_parameter_ranges = $integer_hyper_parameter_ranges ?? ;
  }
}

class DefaultIntegerHyperParameterRange {
  public Tunable $is_tunable;
  public IntegerMaxValue $max_value;
  public IntegerMinValue $min_value;
  public ParameterName $name;

  public function __construct(shape(
  ?'is_tunable' => Tunable,
  ?'max_value' => IntegerMaxValue,
  ?'min_value' => IntegerMinValue,
  ?'name' => ParameterName,
  ) $s = shape()) {
    $this->is_tunable = $is_tunable ?? ;
    $this->max_value = $max_value ?? ;
    $this->min_value = $min_value ?? ;
    $this->name = $name ?? ;
  }
}

type DefaultIntegerHyperParameterRanges = vec<DefaultIntegerHyperParameterRange>;

class DeleteCampaignRequest {
  public Arn $campaign_arn;

  public function __construct(shape(
  ?'campaign_arn' => Arn,
  ) $s = shape()) {
    $this->campaign_arn = $campaign_arn ?? ;
  }
}

class DeleteDatasetGroupRequest {
  public Arn $dataset_group_arn;

  public function __construct(shape(
  ?'dataset_group_arn' => Arn,
  ) $s = shape()) {
    $this->dataset_group_arn = $dataset_group_arn ?? ;
  }
}

class DeleteDatasetRequest {
  public Arn $dataset_arn;

  public function __construct(shape(
  ?'dataset_arn' => Arn,
  ) $s = shape()) {
    $this->dataset_arn = $dataset_arn ?? ;
  }
}

class DeleteEventTrackerRequest {
  public Arn $event_tracker_arn;

  public function __construct(shape(
  ?'event_tracker_arn' => Arn,
  ) $s = shape()) {
    $this->event_tracker_arn = $event_tracker_arn ?? ;
  }
}

class DeleteSchemaRequest {
  public Arn $schema_arn;

  public function __construct(shape(
  ?'schema_arn' => Arn,
  ) $s = shape()) {
    $this->schema_arn = $schema_arn ?? ;
  }
}

class DeleteSolutionRequest {
  public Arn $solution_arn;

  public function __construct(shape(
  ?'solution_arn' => Arn,
  ) $s = shape()) {
    $this->solution_arn = $solution_arn ?? ;
  }
}

class DescribeAlgorithmRequest {
  public Arn $algorithm_arn;

  public function __construct(shape(
  ?'algorithm_arn' => Arn,
  ) $s = shape()) {
    $this->algorithm_arn = $algorithm_arn ?? ;
  }
}

class DescribeAlgorithmResponse {
  public Algorithm $algorithm;

  public function __construct(shape(
  ?'algorithm' => Algorithm,
  ) $s = shape()) {
    $this->algorithm = $algorithm ?? ;
  }
}

class DescribeBatchInferenceJobRequest {
  public Arn $batch_inference_job_arn;

  public function __construct(shape(
  ?'batch_inference_job_arn' => Arn,
  ) $s = shape()) {
    $this->batch_inference_job_arn = $batch_inference_job_arn ?? ;
  }
}

class DescribeBatchInferenceJobResponse {
  public BatchInferenceJob $batch_inference_job;

  public function __construct(shape(
  ?'batch_inference_job' => BatchInferenceJob,
  ) $s = shape()) {
    $this->batch_inference_job = $batch_inference_job ?? ;
  }
}

class DescribeCampaignRequest {
  public Arn $campaign_arn;

  public function __construct(shape(
  ?'campaign_arn' => Arn,
  ) $s = shape()) {
    $this->campaign_arn = $campaign_arn ?? ;
  }
}

class DescribeCampaignResponse {
  public Campaign $campaign;

  public function __construct(shape(
  ?'campaign' => Campaign,
  ) $s = shape()) {
    $this->campaign = $campaign ?? ;
  }
}

class DescribeDatasetGroupRequest {
  public Arn $dataset_group_arn;

  public function __construct(shape(
  ?'dataset_group_arn' => Arn,
  ) $s = shape()) {
    $this->dataset_group_arn = $dataset_group_arn ?? ;
  }
}

class DescribeDatasetGroupResponse {
  public DatasetGroup $dataset_group;

  public function __construct(shape(
  ?'dataset_group' => DatasetGroup,
  ) $s = shape()) {
    $this->dataset_group = $dataset_group ?? ;
  }
}

class DescribeDatasetImportJobRequest {
  public Arn $dataset_import_job_arn;

  public function __construct(shape(
  ?'dataset_import_job_arn' => Arn,
  ) $s = shape()) {
    $this->dataset_import_job_arn = $dataset_import_job_arn ?? ;
  }
}

class DescribeDatasetImportJobResponse {
  public DatasetImportJob $dataset_import_job;

  public function __construct(shape(
  ?'dataset_import_job' => DatasetImportJob,
  ) $s = shape()) {
    $this->dataset_import_job = $dataset_import_job ?? ;
  }
}

class DescribeDatasetRequest {
  public Arn $dataset_arn;

  public function __construct(shape(
  ?'dataset_arn' => Arn,
  ) $s = shape()) {
    $this->dataset_arn = $dataset_arn ?? ;
  }
}

class DescribeDatasetResponse {
  public Dataset $dataset;

  public function __construct(shape(
  ?'dataset' => Dataset,
  ) $s = shape()) {
    $this->dataset = $dataset ?? ;
  }
}

class DescribeEventTrackerRequest {
  public Arn $event_tracker_arn;

  public function __construct(shape(
  ?'event_tracker_arn' => Arn,
  ) $s = shape()) {
    $this->event_tracker_arn = $event_tracker_arn ?? ;
  }
}

class DescribeEventTrackerResponse {
  public EventTracker $event_tracker;

  public function __construct(shape(
  ?'event_tracker' => EventTracker,
  ) $s = shape()) {
    $this->event_tracker = $event_tracker ?? ;
  }
}

class DescribeFeatureTransformationRequest {
  public Arn $feature_transformation_arn;

  public function __construct(shape(
  ?'feature_transformation_arn' => Arn,
  ) $s = shape()) {
    $this->feature_transformation_arn = $feature_transformation_arn ?? ;
  }
}

class DescribeFeatureTransformationResponse {
  public FeatureTransformation $feature_transformation;

  public function __construct(shape(
  ?'feature_transformation' => FeatureTransformation,
  ) $s = shape()) {
    $this->feature_transformation = $feature_transformation ?? ;
  }
}

class DescribeRecipeRequest {
  public Arn $recipe_arn;

  public function __construct(shape(
  ?'recipe_arn' => Arn,
  ) $s = shape()) {
    $this->recipe_arn = $recipe_arn ?? ;
  }
}

class DescribeRecipeResponse {
  public Recipe $recipe;

  public function __construct(shape(
  ?'recipe' => Recipe,
  ) $s = shape()) {
    $this->recipe = $recipe ?? ;
  }
}

class DescribeSchemaRequest {
  public Arn $schema_arn;

  public function __construct(shape(
  ?'schema_arn' => Arn,
  ) $s = shape()) {
    $this->schema_arn = $schema_arn ?? ;
  }
}

class DescribeSchemaResponse {
  public DatasetSchema $schema;

  public function __construct(shape(
  ?'schema' => DatasetSchema,
  ) $s = shape()) {
    $this->schema = $schema ?? ;
  }
}

class DescribeSolutionRequest {
  public Arn $solution_arn;

  public function __construct(shape(
  ?'solution_arn' => Arn,
  ) $s = shape()) {
    $this->solution_arn = $solution_arn ?? ;
  }
}

class DescribeSolutionResponse {
  public Solution $solution;

  public function __construct(shape(
  ?'solution' => Solution,
  ) $s = shape()) {
    $this->solution = $solution ?? ;
  }
}

class DescribeSolutionVersionRequest {
  public Arn $solution_version_arn;

  public function __construct(shape(
  ?'solution_version_arn' => Arn,
  ) $s = shape()) {
    $this->solution_version_arn = $solution_version_arn ?? ;
  }
}

class DescribeSolutionVersionResponse {
  public SolutionVersion $solution_version;

  public function __construct(shape(
  ?'solution_version' => SolutionVersion,
  ) $s = shape()) {
    $this->solution_version = $solution_version ?? ;
  }
}

type Description = string;

type DockerURI = string;

type ErrorMessage = string;

class EventTracker {
  public AccountId $account_id;
  public Date $creation_date_time;
  public Arn $dataset_group_arn;
  public Arn $event_tracker_arn;
  public Date $last_updated_date_time;
  public Name $name;
  public Status $status;
  public TrackingId $tracking_id;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'creation_date_time' => Date,
  ?'dataset_group_arn' => Arn,
  ?'event_tracker_arn' => Arn,
  ?'last_updated_date_time' => Date,
  ?'name' => Name,
  ?'status' => Status,
  ?'tracking_id' => TrackingId,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->creation_date_time = $creation_date_time ?? ;
    $this->dataset_group_arn = $dataset_group_arn ?? ;
    $this->event_tracker_arn = $event_tracker_arn ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->name = $name ?? ;
    $this->status = $status ?? ;
    $this->tracking_id = $tracking_id ?? ;
  }
}

class EventTrackerSummary {
  public Date $creation_date_time;
  public Arn $event_tracker_arn;
  public Date $last_updated_date_time;
  public Name $name;
  public Status $status;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'event_tracker_arn' => Arn,
  ?'last_updated_date_time' => Date,
  ?'name' => Name,
  ?'status' => Status,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? ;
    $this->event_tracker_arn = $event_tracker_arn ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->name = $name ?? ;
    $this->status = $status ?? ;
  }
}

type EventTrackers = vec<EventTrackerSummary>;

type EventType = string;

type EventValueThreshold = string;

type FailureReason = string;

class FeatureTransformation {
  public Date $creation_date_time;
  public FeaturizationParameters $default_parameters;
  public Arn $feature_transformation_arn;
  public Date $last_updated_date_time;
  public Name $name;
  public Status $status;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'default_parameters' => FeaturizationParameters,
  ?'feature_transformation_arn' => Arn,
  ?'last_updated_date_time' => Date,
  ?'name' => Name,
  ?'status' => Status,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? ;
    $this->default_parameters = $default_parameters ?? ;
    $this->feature_transformation_arn = $feature_transformation_arn ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->name = $name ?? ;
    $this->status = $status ?? ;
  }
}

type FeatureTransformationParameters = dict<ParameterName, ParameterValue>;

type FeaturizationParameters = dict<ParameterName, ParameterValue>;

class GetSolutionMetricsRequest {
  public Arn $solution_version_arn;

  public function __construct(shape(
  ?'solution_version_arn' => Arn,
  ) $s = shape()) {
    $this->solution_version_arn = $solution_version_arn ?? ;
  }
}

class GetSolutionMetricsResponse {
  public Metrics $metrics;
  public Arn $solution_version_arn;

  public function __construct(shape(
  ?'metrics' => Metrics,
  ?'solution_version_arn' => Arn,
  ) $s = shape()) {
    $this->metrics = $metrics ?? ;
    $this->solution_version_arn = $solution_version_arn ?? ;
  }
}

class HPOConfig {
  public HyperParameterRanges $algorithm_hyper_parameter_ranges;
  public HPOObjective $hpo_objective;
  public HPOResourceConfig $hpo_resource_config;

  public function __construct(shape(
  ?'algorithm_hyper_parameter_ranges' => HyperParameterRanges,
  ?'hpo_objective' => HPOObjective,
  ?'hpo_resource_config' => HPOResourceConfig,
  ) $s = shape()) {
    $this->algorithm_hyper_parameter_ranges = $algorithm_hyper_parameter_ranges ?? ;
    $this->hpo_objective = $hpo_objective ?? ;
    $this->hpo_resource_config = $hpo_resource_config ?? ;
  }
}

class HPOObjective {
  public MetricName $metric_name;
  public MetricRegex $metric_regex;
  public HPOObjectiveType $type;

  public function __construct(shape(
  ?'metric_name' => MetricName,
  ?'metric_regex' => MetricRegex,
  ?'type' => HPOObjectiveType,
  ) $s = shape()) {
    $this->metric_name = $metric_name ?? ;
    $this->metric_regex = $metric_regex ?? ;
    $this->type = $type ?? ;
  }
}

type HPOObjectiveType = string;

type HPOResource = string;

class HPOResourceConfig {
  public HPOResource $max_number_of_training_jobs;
  public HPOResource $max_parallel_training_jobs;

  public function __construct(shape(
  ?'max_number_of_training_jobs' => HPOResource,
  ?'max_parallel_training_jobs' => HPOResource,
  ) $s = shape()) {
    $this->max_number_of_training_jobs = $max_number_of_training_jobs ?? ;
    $this->max_parallel_training_jobs = $max_parallel_training_jobs ?? ;
  }
}

class HyperParameterRanges {
  public CategoricalHyperParameterRanges $categorical_hyper_parameter_ranges;
  public ContinuousHyperParameterRanges $continuous_hyper_parameter_ranges;
  public IntegerHyperParameterRanges $integer_hyper_parameter_ranges;

  public function __construct(shape(
  ?'categorical_hyper_parameter_ranges' => CategoricalHyperParameterRanges,
  ?'continuous_hyper_parameter_ranges' => ContinuousHyperParameterRanges,
  ?'integer_hyper_parameter_ranges' => IntegerHyperParameterRanges,
  ) $s = shape()) {
    $this->categorical_hyper_parameter_ranges = $categorical_hyper_parameter_ranges ?? ;
    $this->continuous_hyper_parameter_ranges = $continuous_hyper_parameter_ranges ?? ;
    $this->integer_hyper_parameter_ranges = $integer_hyper_parameter_ranges ?? ;
  }
}

type HyperParameters = dict<ParameterName, ParameterValue>;

class IntegerHyperParameterRange {
  public IntegerMaxValue $max_value;
  public IntegerMinValue $min_value;
  public ParameterName $name;

  public function __construct(shape(
  ?'max_value' => IntegerMaxValue,
  ?'min_value' => IntegerMinValue,
  ?'name' => ParameterName,
  ) $s = shape()) {
    $this->max_value = $max_value ?? ;
    $this->min_value = $min_value ?? ;
    $this->name = $name ?? ;
  }
}

type IntegerHyperParameterRanges = vec<IntegerHyperParameterRange>;

type IntegerMaxValue = int;

type IntegerMinValue = int;

class InvalidInputException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidNextTokenException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type KmsKeyArn = string;

class LimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ListBatchInferenceJobsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public Arn $solution_version_arn;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'solution_version_arn' => Arn,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->solution_version_arn = $solution_version_arn ?? ;
  }
}

class ListBatchInferenceJobsResponse {
  public BatchInferenceJobs $batch_inference_jobs;
  public NextToken $next_token;

  public function __construct(shape(
  ?'batch_inference_jobs' => BatchInferenceJobs,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->batch_inference_jobs = $batch_inference_jobs ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListCampaignsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public Arn $solution_arn;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'solution_arn' => Arn,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->solution_arn = $solution_arn ?? ;
  }
}

class ListCampaignsResponse {
  public Campaigns $campaigns;
  public NextToken $next_token;

  public function __construct(shape(
  ?'campaigns' => Campaigns,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->campaigns = $campaigns ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDatasetGroupsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDatasetGroupsResponse {
  public DatasetGroups $dataset_groups;
  public NextToken $next_token;

  public function __construct(shape(
  ?'dataset_groups' => DatasetGroups,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->dataset_groups = $dataset_groups ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDatasetImportJobsRequest {
  public Arn $dataset_arn;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'dataset_arn' => Arn,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->dataset_arn = $dataset_arn ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDatasetImportJobsResponse {
  public DatasetImportJobs $dataset_import_jobs;
  public NextToken $next_token;

  public function __construct(shape(
  ?'dataset_import_jobs' => DatasetImportJobs,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->dataset_import_jobs = $dataset_import_jobs ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDatasetsRequest {
  public Arn $dataset_group_arn;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'dataset_group_arn' => Arn,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->dataset_group_arn = $dataset_group_arn ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDatasetsResponse {
  public Datasets $datasets;
  public NextToken $next_token;

  public function __construct(shape(
  ?'datasets' => Datasets,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->datasets = $datasets ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListEventTrackersRequest {
  public Arn $dataset_group_arn;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'dataset_group_arn' => Arn,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->dataset_group_arn = $dataset_group_arn ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListEventTrackersResponse {
  public EventTrackers $event_trackers;
  public NextToken $next_token;

  public function __construct(shape(
  ?'event_trackers' => EventTrackers,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->event_trackers = $event_trackers ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListRecipesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public RecipeProvider $recipe_provider;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'recipe_provider' => RecipeProvider,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->recipe_provider = $recipe_provider ?? ;
  }
}

class ListRecipesResponse {
  public NextToken $next_token;
  public Recipes $recipes;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'recipes' => Recipes,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->recipes = $recipes ?? ;
  }
}

class ListSchemasRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListSchemasResponse {
  public NextToken $next_token;
  public Schemas $schemas;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'schemas' => Schemas,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->schemas = $schemas ?? ;
  }
}

class ListSolutionVersionsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public Arn $solution_arn;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'solution_arn' => Arn,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->solution_arn = $solution_arn ?? ;
  }
}

class ListSolutionVersionsResponse {
  public NextToken $next_token;
  public SolutionVersions $solution_versions;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'solution_versions' => SolutionVersions,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->solution_versions = $solution_versions ?? ;
  }
}

class ListSolutionsRequest {
  public Arn $dataset_group_arn;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'dataset_group_arn' => Arn,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->dataset_group_arn = $dataset_group_arn ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListSolutionsResponse {
  public NextToken $next_token;
  public Solutions $solutions;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'solutions' => Solutions,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->solutions = $solutions ?? ;
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
  public Arn $algorithm_arn;
  public Date $creation_date_time;
  public Description $description;
  public Arn $feature_transformation_arn;
  public Date $last_updated_date_time;
  public Name $name;
  public Arn $recipe_arn;
  public RecipeType $recipe_type;
  public Status $status;

  public function __construct(shape(
  ?'algorithm_arn' => Arn,
  ?'creation_date_time' => Date,
  ?'description' => Description,
  ?'feature_transformation_arn' => Arn,
  ?'last_updated_date_time' => Date,
  ?'name' => Name,
  ?'recipe_arn' => Arn,
  ?'recipe_type' => RecipeType,
  ?'status' => Status,
  ) $s = shape()) {
    $this->algorithm_arn = $algorithm_arn ?? ;
    $this->creation_date_time = $creation_date_time ?? ;
    $this->description = $description ?? ;
    $this->feature_transformation_arn = $feature_transformation_arn ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->name = $name ?? ;
    $this->recipe_arn = $recipe_arn ?? ;
    $this->recipe_type = $recipe_type ?? ;
    $this->status = $status ?? ;
  }
}

type RecipeProvider = string;

class RecipeSummary {
  public Date $creation_date_time;
  public Date $last_updated_date_time;
  public Name $name;
  public Arn $recipe_arn;
  public Status $status;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'last_updated_date_time' => Date,
  ?'name' => Name,
  ?'recipe_arn' => Arn,
  ?'status' => Status,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->name = $name ?? ;
    $this->recipe_arn = $recipe_arn ?? ;
    $this->status = $status ?? ;
  }
}

type RecipeType = string;

type Recipes = vec<RecipeSummary>;

class ResourceAlreadyExistsException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ResourceConfig = dict<ParameterName, ParameterValue>;

class ResourceInUseException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type RoleArn = string;

class S3DataConfig {
  public KmsKeyArn $kms_key_arn;
  public S3Location $path;

  public function __construct(shape(
  ?'kms_key_arn' => KmsKeyArn,
  ?'path' => S3Location,
  ) $s = shape()) {
    $this->kms_key_arn = $kms_key_arn ?? ;
    $this->path = $path ?? ;
  }
}

type S3Location = string;

type Schemas = vec<DatasetSchemaSummary>;

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

  public function __construct(shape(
  ?'auto_ml_result' => AutoMLResult,
  ?'creation_date_time' => Date,
  ?'dataset_group_arn' => Arn,
  ?'event_type' => EventType,
  ?'last_updated_date_time' => Date,
  ?'latest_solution_version' => SolutionVersionSummary,
  ?'name' => Name,
  ?'perform_auto_ml' => PerformAutoML,
  ?'perform_hpo' => PerformHPO,
  ?'recipe_arn' => Arn,
  ?'solution_arn' => Arn,
  ?'solution_config' => SolutionConfig,
  ?'status' => Status,
  ) $s = shape()) {
    $this->auto_ml_result = $auto_ml_result ?? ;
    $this->creation_date_time = $creation_date_time ?? ;
    $this->dataset_group_arn = $dataset_group_arn ?? ;
    $this->event_type = $event_type ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->latest_solution_version = $latest_solution_version ?? ;
    $this->name = $name ?? ;
    $this->perform_auto_ml = $perform_auto_ml ?? ;
    $this->perform_hpo = $perform_hpo ?? ;
    $this->recipe_arn = $recipe_arn ?? ;
    $this->solution_arn = $solution_arn ?? ;
    $this->solution_config = $solution_config ?? ;
    $this->status = $status ?? ;
  }
}

class SolutionConfig {
  public HyperParameters $algorithm_hyper_parameters;
  public AutoMLConfig $auto_ml_config;
  public EventValueThreshold $event_value_threshold;
  public FeatureTransformationParameters $feature_transformation_parameters;
  public HPOConfig $hpo_config;

  public function __construct(shape(
  ?'algorithm_hyper_parameters' => HyperParameters,
  ?'auto_ml_config' => AutoMLConfig,
  ?'event_value_threshold' => EventValueThreshold,
  ?'feature_transformation_parameters' => FeatureTransformationParameters,
  ?'hpo_config' => HPOConfig,
  ) $s = shape()) {
    $this->algorithm_hyper_parameters = $algorithm_hyper_parameters ?? ;
    $this->auto_ml_config = $auto_ml_config ?? ;
    $this->event_value_threshold = $event_value_threshold ?? ;
    $this->feature_transformation_parameters = $feature_transformation_parameters ?? ;
    $this->hpo_config = $hpo_config ?? ;
  }
}

class SolutionSummary {
  public Date $creation_date_time;
  public Date $last_updated_date_time;
  public Name $name;
  public Arn $solution_arn;
  public Status $status;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'last_updated_date_time' => Date,
  ?'name' => Name,
  ?'solution_arn' => Arn,
  ?'status' => Status,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->name = $name ?? ;
    $this->solution_arn = $solution_arn ?? ;
    $this->status = $status ?? ;
  }
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

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'dataset_group_arn' => Arn,
  ?'event_type' => EventType,
  ?'failure_reason' => FailureReason,
  ?'last_updated_date_time' => Date,
  ?'perform_auto_ml' => PerformAutoML,
  ?'perform_hpo' => PerformHPO,
  ?'recipe_arn' => Arn,
  ?'solution_arn' => Arn,
  ?'solution_config' => SolutionConfig,
  ?'solution_version_arn' => Arn,
  ?'status' => Status,
  ?'training_hours' => TrainingHours,
  ?'training_mode' => TrainingMode,
  ?'tuned_hpo_params' => TunedHPOParams,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? ;
    $this->dataset_group_arn = $dataset_group_arn ?? ;
    $this->event_type = $event_type ?? ;
    $this->failure_reason = $failure_reason ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->perform_auto_ml = $perform_auto_ml ?? ;
    $this->perform_hpo = $perform_hpo ?? ;
    $this->recipe_arn = $recipe_arn ?? ;
    $this->solution_arn = $solution_arn ?? ;
    $this->solution_config = $solution_config ?? ;
    $this->solution_version_arn = $solution_version_arn ?? ;
    $this->status = $status ?? ;
    $this->training_hours = $training_hours ?? ;
    $this->training_mode = $training_mode ?? ;
    $this->tuned_hpo_params = $tuned_hpo_params ?? ;
  }
}

class SolutionVersionSummary {
  public Date $creation_date_time;
  public FailureReason $failure_reason;
  public Date $last_updated_date_time;
  public Arn $solution_version_arn;
  public Status $status;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'failure_reason' => FailureReason,
  ?'last_updated_date_time' => Date,
  ?'solution_version_arn' => Arn,
  ?'status' => Status,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? ;
    $this->failure_reason = $failure_reason ?? ;
    $this->last_updated_date_time = $last_updated_date_time ?? ;
    $this->solution_version_arn = $solution_version_arn ?? ;
    $this->status = $status ?? ;
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
  public HyperParameters $algorithm_hyper_parameters;

  public function __construct(shape(
  ?'algorithm_hyper_parameters' => HyperParameters,
  ) $s = shape()) {
    $this->algorithm_hyper_parameters = $algorithm_hyper_parameters ?? ;
  }
}

class UpdateCampaignRequest {
  public Arn $campaign_arn;
  public TransactionsPerSecond $min_provisioned_tps;
  public Arn $solution_version_arn;

  public function __construct(shape(
  ?'campaign_arn' => Arn,
  ?'min_provisioned_tps' => TransactionsPerSecond,
  ?'solution_version_arn' => Arn,
  ) $s = shape()) {
    $this->campaign_arn = $campaign_arn ?? ;
    $this->min_provisioned_tps = $min_provisioned_tps ?? ;
    $this->solution_version_arn = $solution_version_arn ?? ;
  }
}

class UpdateCampaignResponse {
  public Arn $campaign_arn;

  public function __construct(shape(
  ?'campaign_arn' => Arn,
  ) $s = shape()) {
    $this->campaign_arn = $campaign_arn ?? ;
  }
}


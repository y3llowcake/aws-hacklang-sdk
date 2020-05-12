<?hh // strict
namespace slack\aws\forecast;

interface forecast {
  public function CreateDataset(CreateDatasetRequest $in): Awaitable<\Errors\Result<CreateDatasetResponse>>;
  public function CreateDatasetGroup(CreateDatasetGroupRequest $in): Awaitable<\Errors\Result<CreateDatasetGroupResponse>>;
  public function CreateDatasetImportJob(CreateDatasetImportJobRequest $in): Awaitable<\Errors\Result<CreateDatasetImportJobResponse>>;
  public function CreateForecast(CreateForecastRequest $in): Awaitable<\Errors\Result<CreateForecastResponse>>;
  public function CreateForecastExportJob(CreateForecastExportJobRequest $in): Awaitable<\Errors\Result<CreateForecastExportJobResponse>>;
  public function CreatePredictor(CreatePredictorRequest $in): Awaitable<\Errors\Result<CreatePredictorResponse>>;
  public function DeleteDataset(DeleteDatasetRequest $in): Awaitable<\Errors\Error>;
  public function DeleteDatasetGroup(DeleteDatasetGroupRequest $in): Awaitable<\Errors\Error>;
  public function DeleteDatasetImportJob(DeleteDatasetImportJobRequest $in): Awaitable<\Errors\Error>;
  public function DeleteForecast(DeleteForecastRequest $in): Awaitable<\Errors\Error>;
  public function DeleteForecastExportJob(DeleteForecastExportJobRequest $in): Awaitable<\Errors\Error>;
  public function DeletePredictor(DeletePredictorRequest $in): Awaitable<\Errors\Error>;
  public function DescribeDataset(DescribeDatasetRequest $in): Awaitable<\Errors\Result<DescribeDatasetResponse>>;
  public function DescribeDatasetGroup(DescribeDatasetGroupRequest $in): Awaitable<\Errors\Result<DescribeDatasetGroupResponse>>;
  public function DescribeDatasetImportJob(DescribeDatasetImportJobRequest $in): Awaitable<\Errors\Result<DescribeDatasetImportJobResponse>>;
  public function DescribeForecast(DescribeForecastRequest $in): Awaitable<\Errors\Result<DescribeForecastResponse>>;
  public function DescribeForecastExportJob(DescribeForecastExportJobRequest $in): Awaitable<\Errors\Result<DescribeForecastExportJobResponse>>;
  public function DescribePredictor(DescribePredictorRequest $in): Awaitable<\Errors\Result<DescribePredictorResponse>>;
  public function GetAccuracyMetrics(GetAccuracyMetricsRequest $in): Awaitable<\Errors\Result<GetAccuracyMetricsResponse>>;
  public function ListDatasetGroups(ListDatasetGroupsRequest $in): Awaitable<\Errors\Result<ListDatasetGroupsResponse>>;
  public function ListDatasetImportJobs(ListDatasetImportJobsRequest $in): Awaitable<\Errors\Result<ListDatasetImportJobsResponse>>;
  public function ListDatasets(ListDatasetsRequest $in): Awaitable<\Errors\Result<ListDatasetsResponse>>;
  public function ListForecastExportJobs(ListForecastExportJobsRequest $in): Awaitable<\Errors\Result<ListForecastExportJobsResponse>>;
  public function ListForecasts(ListForecastsRequest $in): Awaitable<\Errors\Result<ListForecastsResponse>>;
  public function ListPredictors(ListPredictorsRequest $in): Awaitable<\Errors\Result<ListPredictorsResponse>>;
  public function UpdateDatasetGroup(UpdateDatasetGroupRequest $in): Awaitable<\Errors\Result<UpdateDatasetGroupResponse>>;
}

type Arn = string;

type ArnList = vec<Arn>;

type AttributeType = string;

type Boolean = bool;

class CategoricalParameterRange {
  public ?Name $name;
  public ?Values $values;

  public function __construct(shape(
    ?'name' => ?Name,
    ?'values' => ?Values,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type CategoricalParameterRanges = vec<CategoricalParameterRange>;

class ContinuousParameterRange {
  public ?Double $max_value;
  public ?Double $min_value;
  public ?Name $name;
  public ?ScalingType $scaling_type;

  public function __construct(shape(
    ?'max_value' => ?Double,
    ?'min_value' => ?Double,
    ?'name' => ?Name,
    ?'scaling_type' => ?ScalingType,
  ) $s = shape()) {
    $this->max_value = $s['max_value'] ?? 0.0;
    $this->min_value = $s['min_value'] ?? 0.0;
    $this->name = $s['name'] ?? '';
    $this->scaling_type = $s['scaling_type'] ?? '';
  }
}

type ContinuousParameterRanges = vec<ContinuousParameterRange>;

class CreateDatasetGroupRequest {
  public ?ArnList $dataset_arns;
  public ?Name $dataset_group_name;
  public ?Domain $domain;

  public function __construct(shape(
    ?'dataset_arns' => ?ArnList,
    ?'dataset_group_name' => ?Name,
    ?'domain' => ?Domain,
  ) $s = shape()) {
    $this->dataset_arns = $s['dataset_arns'] ?? vec[];
    $this->dataset_group_name = $s['dataset_group_name'] ?? '';
    $this->domain = $s['domain'] ?? '';
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
  public ?Name $dataset_import_job_name;
  public ?TimestampFormat $timestamp_format;

  public function __construct(shape(
    ?'data_source' => ?DataSource,
    ?'dataset_arn' => ?Arn,
    ?'dataset_import_job_name' => ?Name,
    ?'timestamp_format' => ?TimestampFormat,
  ) $s = shape()) {
    $this->data_source = $s['data_source'] ?? null;
    $this->dataset_arn = $s['dataset_arn'] ?? '';
    $this->dataset_import_job_name = $s['dataset_import_job_name'] ?? '';
    $this->timestamp_format = $s['timestamp_format'] ?? '';
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
  public ?Frequency $data_frequency;
  public ?Name $dataset_name;
  public ?DatasetType $dataset_type;
  public ?Domain $domain;
  public ?EncryptionConfig $encryption_config;
  public ?Schema $schema;

  public function __construct(shape(
    ?'data_frequency' => ?Frequency,
    ?'dataset_name' => ?Name,
    ?'dataset_type' => ?DatasetType,
    ?'domain' => ?Domain,
    ?'encryption_config' => ?EncryptionConfig,
    ?'schema' => ?Schema,
  ) $s = shape()) {
    $this->data_frequency = $s['data_frequency'] ?? '';
    $this->dataset_name = $s['dataset_name'] ?? '';
    $this->dataset_type = $s['dataset_type'] ?? '';
    $this->domain = $s['domain'] ?? '';
    $this->encryption_config = $s['encryption_config'] ?? null;
    $this->schema = $s['schema'] ?? null;
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

class CreateForecastExportJobRequest {
  public ?DataDestination $destination;
  public ?Arn $forecast_arn;
  public ?Name $forecast_export_job_name;

  public function __construct(shape(
    ?'destination' => ?DataDestination,
    ?'forecast_arn' => ?Arn,
    ?'forecast_export_job_name' => ?Name,
  ) $s = shape()) {
    $this->destination = $s['destination'] ?? null;
    $this->forecast_arn = $s['forecast_arn'] ?? '';
    $this->forecast_export_job_name = $s['forecast_export_job_name'] ?? '';
  }
}

class CreateForecastExportJobResponse {
  public ?Arn $forecast_export_job_arn;

  public function __construct(shape(
    ?'forecast_export_job_arn' => ?Arn,
  ) $s = shape()) {
    $this->forecast_export_job_arn = $s['forecast_export_job_arn'] ?? '';
  }
}

class CreateForecastRequest {
  public ?Name $forecast_name;
  public ?ForecastTypes $forecast_types;
  public ?Arn $predictor_arn;

  public function __construct(shape(
    ?'forecast_name' => ?Name,
    ?'forecast_types' => ?ForecastTypes,
    ?'predictor_arn' => ?Arn,
  ) $s = shape()) {
    $this->forecast_name = $s['forecast_name'] ?? '';
    $this->forecast_types = $s['forecast_types'] ?? vec[];
    $this->predictor_arn = $s['predictor_arn'] ?? '';
  }
}

class CreateForecastResponse {
  public ?Arn $forecast_arn;

  public function __construct(shape(
    ?'forecast_arn' => ?Arn,
  ) $s = shape()) {
    $this->forecast_arn = $s['forecast_arn'] ?? '';
  }
}

class CreatePredictorRequest {
  public ?Arn $algorithm_arn;
  public ?EncryptionConfig $encryption_config;
  public ?EvaluationParameters $evaluation_parameters;
  public ?FeaturizationConfig $featurization_config;
  public int $forecast_horizon;
  public ?HyperParameterTuningJobConfig $hpo_config;
  public ?InputDataConfig $input_data_config;
  public bool $perform_auto_ml;
  public bool $perform_hpo;
  public ?Name $predictor_name;
  public ?TrainingParameters $training_parameters;

  public function __construct(shape(
    ?'algorithm_arn' => ?Arn,
    ?'encryption_config' => ?EncryptionConfig,
    ?'evaluation_parameters' => ?EvaluationParameters,
    ?'featurization_config' => ?FeaturizationConfig,
    ?'forecast_horizon' => int,
    ?'hpo_config' => ?HyperParameterTuningJobConfig,
    ?'input_data_config' => ?InputDataConfig,
    ?'perform_auto_ml' => bool,
    ?'perform_hpo' => bool,
    ?'predictor_name' => ?Name,
    ?'training_parameters' => ?TrainingParameters,
  ) $s = shape()) {
    $this->algorithm_arn = $s['algorithm_arn'] ?? '';
    $this->encryption_config = $s['encryption_config'] ?? null;
    $this->evaluation_parameters = $s['evaluation_parameters'] ?? null;
    $this->featurization_config = $s['featurization_config'] ?? null;
    $this->forecast_horizon = $s['forecast_horizon'] ?? 0;
    $this->hpo_config = $s['hpo_config'] ?? null;
    $this->input_data_config = $s['input_data_config'] ?? null;
    $this->perform_auto_ml = $s['perform_auto_ml'] ?? false;
    $this->perform_hpo = $s['perform_hpo'] ?? false;
    $this->predictor_name = $s['predictor_name'] ?? '';
    $this->training_parameters = $s['training_parameters'] ?? dict[];
  }
}

class CreatePredictorResponse {
  public ?Arn $predictor_arn;

  public function __construct(shape(
    ?'predictor_arn' => ?Arn,
  ) $s = shape()) {
    $this->predictor_arn = $s['predictor_arn'] ?? '';
  }
}

class DataDestination {
  public ?S3Config $s_3_config;

  public function __construct(shape(
    ?'s_3_config' => ?S3Config,
  ) $s = shape()) {
    $this->s_3_config = $s['s_3_config'] ?? null;
  }
}

class DataSource {
  public ?S3Config $s_3_config;

  public function __construct(shape(
    ?'s_3_config' => ?S3Config,
  ) $s = shape()) {
    $this->s_3_config = $s['s_3_config'] ?? null;
  }
}

class DatasetGroupSummary {
  public ?Timestamp $creation_time;
  public ?Arn $dataset_group_arn;
  public ?Name $dataset_group_name;
  public ?Timestamp $last_modification_time;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'dataset_group_arn' => ?Arn,
    ?'dataset_group_name' => ?Name,
    ?'last_modification_time' => ?Timestamp,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->dataset_group_name = $s['dataset_group_name'] ?? '';
    $this->last_modification_time = $s['last_modification_time'] ?? 0;
  }
}

type DatasetGroups = vec<DatasetGroupSummary>;

class DatasetImportJobSummary {
  public ?Timestamp $creation_time;
  public ?DataSource $data_source;
  public ?Arn $dataset_import_job_arn;
  public ?Name $dataset_import_job_name;
  public ?Timestamp $last_modification_time;
  public ?ErrorMessage $message;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'data_source' => ?DataSource,
    ?'dataset_import_job_arn' => ?Arn,
    ?'dataset_import_job_name' => ?Name,
    ?'last_modification_time' => ?Timestamp,
    ?'message' => ?ErrorMessage,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->data_source = $s['data_source'] ?? null;
    $this->dataset_import_job_arn = $s['dataset_import_job_arn'] ?? '';
    $this->dataset_import_job_name = $s['dataset_import_job_name'] ?? '';
    $this->last_modification_time = $s['last_modification_time'] ?? 0;
    $this->message = $s['message'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type DatasetImportJobs = vec<DatasetImportJobSummary>;

class DatasetSummary {
  public ?Timestamp $creation_time;
  public ?Arn $dataset_arn;
  public ?Name $dataset_name;
  public ?DatasetType $dataset_type;
  public ?Domain $domain;
  public ?Timestamp $last_modification_time;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'dataset_arn' => ?Arn,
    ?'dataset_name' => ?Name,
    ?'dataset_type' => ?DatasetType,
    ?'domain' => ?Domain,
    ?'last_modification_time' => ?Timestamp,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->dataset_arn = $s['dataset_arn'] ?? '';
    $this->dataset_name = $s['dataset_name'] ?? '';
    $this->dataset_type = $s['dataset_type'] ?? '';
    $this->domain = $s['domain'] ?? '';
    $this->last_modification_time = $s['last_modification_time'] ?? 0;
  }
}

type DatasetType = string;

type Datasets = vec<DatasetSummary>;

class DeleteDatasetGroupRequest {
  public ?Arn $dataset_group_arn;

  public function __construct(shape(
    ?'dataset_group_arn' => ?Arn,
  ) $s = shape()) {
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
  }
}

class DeleteDatasetImportJobRequest {
  public ?Arn $dataset_import_job_arn;

  public function __construct(shape(
    ?'dataset_import_job_arn' => ?Arn,
  ) $s = shape()) {
    $this->dataset_import_job_arn = $s['dataset_import_job_arn'] ?? '';
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

class DeleteForecastExportJobRequest {
  public ?Arn $forecast_export_job_arn;

  public function __construct(shape(
    ?'forecast_export_job_arn' => ?Arn,
  ) $s = shape()) {
    $this->forecast_export_job_arn = $s['forecast_export_job_arn'] ?? '';
  }
}

class DeleteForecastRequest {
  public ?Arn $forecast_arn;

  public function __construct(shape(
    ?'forecast_arn' => ?Arn,
  ) $s = shape()) {
    $this->forecast_arn = $s['forecast_arn'] ?? '';
  }
}

class DeletePredictorRequest {
  public ?Arn $predictor_arn;

  public function __construct(shape(
    ?'predictor_arn' => ?Arn,
  ) $s = shape()) {
    $this->predictor_arn = $s['predictor_arn'] ?? '';
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
  public ?Timestamp $creation_time;
  public ?ArnList $dataset_arns;
  public ?Arn $dataset_group_arn;
  public ?Name $dataset_group_name;
  public ?Domain $domain;
  public ?Timestamp $last_modification_time;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'dataset_arns' => ?ArnList,
    ?'dataset_group_arn' => ?Arn,
    ?'dataset_group_name' => ?Name,
    ?'domain' => ?Domain,
    ?'last_modification_time' => ?Timestamp,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->dataset_arns = $s['dataset_arns'] ?? vec[];
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->dataset_group_name = $s['dataset_group_name'] ?? '';
    $this->domain = $s['domain'] ?? '';
    $this->last_modification_time = $s['last_modification_time'] ?? 0;
    $this->status = $s['status'] ?? '';
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
  public ?Timestamp $creation_time;
  public ?Double $data_size;
  public ?DataSource $data_source;
  public ?Arn $dataset_arn;
  public ?Arn $dataset_import_job_arn;
  public ?Name $dataset_import_job_name;
  public ?FieldStatistics $field_statistics;
  public ?Timestamp $last_modification_time;
  public ?Message $message;
  public ?Status $status;
  public ?TimestampFormat $timestamp_format;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'data_size' => ?Double,
    ?'data_source' => ?DataSource,
    ?'dataset_arn' => ?Arn,
    ?'dataset_import_job_arn' => ?Arn,
    ?'dataset_import_job_name' => ?Name,
    ?'field_statistics' => ?FieldStatistics,
    ?'last_modification_time' => ?Timestamp,
    ?'message' => ?Message,
    ?'status' => ?Status,
    ?'timestamp_format' => ?TimestampFormat,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->data_size = $s['data_size'] ?? 0.0;
    $this->data_source = $s['data_source'] ?? null;
    $this->dataset_arn = $s['dataset_arn'] ?? '';
    $this->dataset_import_job_arn = $s['dataset_import_job_arn'] ?? '';
    $this->dataset_import_job_name = $s['dataset_import_job_name'] ?? '';
    $this->field_statistics = $s['field_statistics'] ?? dict[];
    $this->last_modification_time = $s['last_modification_time'] ?? 0;
    $this->message = $s['message'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->timestamp_format = $s['timestamp_format'] ?? '';
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
  public ?Timestamp $creation_time;
  public ?Frequency $data_frequency;
  public ?Arn $dataset_arn;
  public ?Name $dataset_name;
  public ?DatasetType $dataset_type;
  public ?Domain $domain;
  public ?EncryptionConfig $encryption_config;
  public ?Timestamp $last_modification_time;
  public ?Schema $schema;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'data_frequency' => ?Frequency,
    ?'dataset_arn' => ?Arn,
    ?'dataset_name' => ?Name,
    ?'dataset_type' => ?DatasetType,
    ?'domain' => ?Domain,
    ?'encryption_config' => ?EncryptionConfig,
    ?'last_modification_time' => ?Timestamp,
    ?'schema' => ?Schema,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->data_frequency = $s['data_frequency'] ?? '';
    $this->dataset_arn = $s['dataset_arn'] ?? '';
    $this->dataset_name = $s['dataset_name'] ?? '';
    $this->dataset_type = $s['dataset_type'] ?? '';
    $this->domain = $s['domain'] ?? '';
    $this->encryption_config = $s['encryption_config'] ?? null;
    $this->last_modification_time = $s['last_modification_time'] ?? 0;
    $this->schema = $s['schema'] ?? null;
    $this->status = $s['status'] ?? '';
  }
}

class DescribeForecastExportJobRequest {
  public ?Arn $forecast_export_job_arn;

  public function __construct(shape(
    ?'forecast_export_job_arn' => ?Arn,
  ) $s = shape()) {
    $this->forecast_export_job_arn = $s['forecast_export_job_arn'] ?? '';
  }
}

class DescribeForecastExportJobResponse {
  public ?Timestamp $creation_time;
  public ?DataDestination $destination;
  public ?Arn $forecast_arn;
  public ?Arn $forecast_export_job_arn;
  public ?Name $forecast_export_job_name;
  public ?Timestamp $last_modification_time;
  public ?Message $message;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'destination' => ?DataDestination,
    ?'forecast_arn' => ?Arn,
    ?'forecast_export_job_arn' => ?Arn,
    ?'forecast_export_job_name' => ?Name,
    ?'last_modification_time' => ?Timestamp,
    ?'message' => ?Message,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->destination = $s['destination'] ?? null;
    $this->forecast_arn = $s['forecast_arn'] ?? '';
    $this->forecast_export_job_arn = $s['forecast_export_job_arn'] ?? '';
    $this->forecast_export_job_name = $s['forecast_export_job_name'] ?? '';
    $this->last_modification_time = $s['last_modification_time'] ?? 0;
    $this->message = $s['message'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DescribeForecastRequest {
  public ?Arn $forecast_arn;

  public function __construct(shape(
    ?'forecast_arn' => ?Arn,
  ) $s = shape()) {
    $this->forecast_arn = $s['forecast_arn'] ?? '';
  }
}

class DescribeForecastResponse {
  public ?Timestamp $creation_time;
  public ?Arn $dataset_group_arn;
  public ?Arn $forecast_arn;
  public ?Name $forecast_name;
  public ?ForecastTypes $forecast_types;
  public ?Timestamp $last_modification_time;
  public ?ErrorMessage $message;
  public ?Arn $predictor_arn;
  public string $status;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'dataset_group_arn' => ?Arn,
    ?'forecast_arn' => ?Arn,
    ?'forecast_name' => ?Name,
    ?'forecast_types' => ?ForecastTypes,
    ?'last_modification_time' => ?Timestamp,
    ?'message' => ?ErrorMessage,
    ?'predictor_arn' => ?Arn,
    ?'status' => string,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->forecast_arn = $s['forecast_arn'] ?? '';
    $this->forecast_name = $s['forecast_name'] ?? '';
    $this->forecast_types = $s['forecast_types'] ?? vec[];
    $this->last_modification_time = $s['last_modification_time'] ?? 0;
    $this->message = $s['message'] ?? '';
    $this->predictor_arn = $s['predictor_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DescribePredictorRequest {
  public ?Arn $predictor_arn;

  public function __construct(shape(
    ?'predictor_arn' => ?Arn,
  ) $s = shape()) {
    $this->predictor_arn = $s['predictor_arn'] ?? '';
  }
}

class DescribePredictorResponse {
  public ?Arn $algorithm_arn;
  public ?ArnList $auto_ml_algorithm_arns;
  public ?Timestamp $creation_time;
  public ?ArnList $dataset_import_job_arns;
  public ?EncryptionConfig $encryption_config;
  public ?EvaluationParameters $evaluation_parameters;
  public ?FeaturizationConfig $featurization_config;
  public int $forecast_horizon;
  public ?HyperParameterTuningJobConfig $hpo_config;
  public ?InputDataConfig $input_data_config;
  public ?Timestamp $last_modification_time;
  public ?Message $message;
  public bool $perform_auto_ml;
  public bool $perform_hpo;
  public ?Name $predictor_arn;
  public ?PredictorExecutionDetails $predictor_execution_details;
  public ?Name $predictor_name;
  public ?Status $status;
  public ?TrainingParameters $training_parameters;

  public function __construct(shape(
    ?'algorithm_arn' => ?Arn,
    ?'auto_ml_algorithm_arns' => ?ArnList,
    ?'creation_time' => ?Timestamp,
    ?'dataset_import_job_arns' => ?ArnList,
    ?'encryption_config' => ?EncryptionConfig,
    ?'evaluation_parameters' => ?EvaluationParameters,
    ?'featurization_config' => ?FeaturizationConfig,
    ?'forecast_horizon' => int,
    ?'hpo_config' => ?HyperParameterTuningJobConfig,
    ?'input_data_config' => ?InputDataConfig,
    ?'last_modification_time' => ?Timestamp,
    ?'message' => ?Message,
    ?'perform_auto_ml' => bool,
    ?'perform_hpo' => bool,
    ?'predictor_arn' => ?Name,
    ?'predictor_execution_details' => ?PredictorExecutionDetails,
    ?'predictor_name' => ?Name,
    ?'status' => ?Status,
    ?'training_parameters' => ?TrainingParameters,
  ) $s = shape()) {
    $this->algorithm_arn = $s['algorithm_arn'] ?? '';
    $this->auto_ml_algorithm_arns = $s['auto_ml_algorithm_arns'] ?? vec[];
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->dataset_import_job_arns = $s['dataset_import_job_arns'] ?? vec[];
    $this->encryption_config = $s['encryption_config'] ?? null;
    $this->evaluation_parameters = $s['evaluation_parameters'] ?? null;
    $this->featurization_config = $s['featurization_config'] ?? null;
    $this->forecast_horizon = $s['forecast_horizon'] ?? 0;
    $this->hpo_config = $s['hpo_config'] ?? null;
    $this->input_data_config = $s['input_data_config'] ?? null;
    $this->last_modification_time = $s['last_modification_time'] ?? 0;
    $this->message = $s['message'] ?? '';
    $this->perform_auto_ml = $s['perform_auto_ml'] ?? false;
    $this->perform_hpo = $s['perform_hpo'] ?? false;
    $this->predictor_arn = $s['predictor_arn'] ?? '';
    $this->predictor_execution_details = $s['predictor_execution_details'] ?? null;
    $this->predictor_name = $s['predictor_name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->training_parameters = $s['training_parameters'] ?? dict[];
  }
}

type Domain = string;

type Double = float;

class EncryptionConfig {
  public ?KMSKeyArn $kms_key_arn;
  public ?Arn $role_arn;

  public function __construct(shape(
    ?'kms_key_arn' => ?KMSKeyArn,
    ?'role_arn' => ?Arn,
  ) $s = shape()) {
    $this->kms_key_arn = $s['kms_key_arn'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

type ErrorMessage = string;

class EvaluationParameters {
  public int $back_test_window_offset;
  public int $number_of_backtest_windows;

  public function __construct(shape(
    ?'back_test_window_offset' => int,
    ?'number_of_backtest_windows' => int,
  ) $s = shape()) {
    $this->back_test_window_offset = $s['back_test_window_offset'] ?? 0;
    $this->number_of_backtest_windows = $s['number_of_backtest_windows'] ?? 0;
  }
}

class EvaluationResult {
  public ?Arn $algorithm_arn;
  public ?TestWindows $test_windows;

  public function __construct(shape(
    ?'algorithm_arn' => ?Arn,
    ?'test_windows' => ?TestWindows,
  ) $s = shape()) {
    $this->algorithm_arn = $s['algorithm_arn'] ?? '';
    $this->test_windows = $s['test_windows'] ?? vec[];
  }
}

type EvaluationType = string;

class Featurization {
  public ?Name $attribute_name;
  public ?FeaturizationPipeline $featurization_pipeline;

  public function __construct(shape(
    ?'attribute_name' => ?Name,
    ?'featurization_pipeline' => ?FeaturizationPipeline,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->featurization_pipeline = $s['featurization_pipeline'] ?? vec[];
  }
}

class FeaturizationConfig {
  public ?Featurizations $featurizations;
  public ?ForecastDimensions $forecast_dimensions;
  public ?Frequency $forecast_frequency;

  public function __construct(shape(
    ?'featurizations' => ?Featurizations,
    ?'forecast_dimensions' => ?ForecastDimensions,
    ?'forecast_frequency' => ?Frequency,
  ) $s = shape()) {
    $this->featurizations = $s['featurizations'] ?? vec[];
    $this->forecast_dimensions = $s['forecast_dimensions'] ?? vec[];
    $this->forecast_frequency = $s['forecast_frequency'] ?? '';
  }
}

class FeaturizationMethod {
  public ?FeaturizationMethodName $featurization_method_name;
  public ?FeaturizationMethodParameters $featurization_method_parameters;

  public function __construct(shape(
    ?'featurization_method_name' => ?FeaturizationMethodName,
    ?'featurization_method_parameters' => ?FeaturizationMethodParameters,
  ) $s = shape()) {
    $this->featurization_method_name = $s['featurization_method_name'] ?? '';
    $this->featurization_method_parameters = $s['featurization_method_parameters'] ?? dict[];
  }
}

type FeaturizationMethodName = string;

type FeaturizationMethodParameters = dict<ParameterKey, ParameterValue>;

type FeaturizationPipeline = vec<FeaturizationMethod>;

type Featurizations = vec<Featurization>;

type FieldStatistics = dict<String, Statistics>;

class Filter {
  public ?FilterConditionString $condition;
  public string $key;
  public ?Arn $value;

  public function __construct(shape(
    ?'condition' => ?FilterConditionString,
    ?'key' => string,
    ?'value' => ?Arn,
  ) $s = shape()) {
    $this->condition = $s['condition'] ?? '';
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type FilterConditionString = string;

type Filters = vec<Filter>;

type ForecastDimensions = vec<Name>;

class ForecastExportJobSummary {
  public ?Timestamp $creation_time;
  public ?DataDestination $destination;
  public ?Arn $forecast_export_job_arn;
  public ?Name $forecast_export_job_name;
  public ?Timestamp $last_modification_time;
  public ?ErrorMessage $message;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'destination' => ?DataDestination,
    ?'forecast_export_job_arn' => ?Arn,
    ?'forecast_export_job_name' => ?Name,
    ?'last_modification_time' => ?Timestamp,
    ?'message' => ?ErrorMessage,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->destination = $s['destination'] ?? null;
    $this->forecast_export_job_arn = $s['forecast_export_job_arn'] ?? '';
    $this->forecast_export_job_name = $s['forecast_export_job_name'] ?? '';
    $this->last_modification_time = $s['last_modification_time'] ?? 0;
    $this->message = $s['message'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type ForecastExportJobs = vec<ForecastExportJobSummary>;

class ForecastSummary {
  public ?Timestamp $creation_time;
  public string $dataset_group_arn;
  public ?Arn $forecast_arn;
  public ?Name $forecast_name;
  public ?Timestamp $last_modification_time;
  public ?ErrorMessage $message;
  public string $predictor_arn;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'dataset_group_arn' => string,
    ?'forecast_arn' => ?Arn,
    ?'forecast_name' => ?Name,
    ?'last_modification_time' => ?Timestamp,
    ?'message' => ?ErrorMessage,
    ?'predictor_arn' => string,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->forecast_arn = $s['forecast_arn'] ?? '';
    $this->forecast_name = $s['forecast_name'] ?? '';
    $this->last_modification_time = $s['last_modification_time'] ?? 0;
    $this->message = $s['message'] ?? '';
    $this->predictor_arn = $s['predictor_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type ForecastType = string;

type ForecastTypes = vec<ForecastType>;

type Forecasts = vec<ForecastSummary>;

type Frequency = string;

class GetAccuracyMetricsRequest {
  public ?Arn $predictor_arn;

  public function __construct(shape(
    ?'predictor_arn' => ?Arn,
  ) $s = shape()) {
    $this->predictor_arn = $s['predictor_arn'] ?? '';
  }
}

class GetAccuracyMetricsResponse {
  public ?PredictorEvaluationResults $predictor_evaluation_results;

  public function __construct(shape(
    ?'predictor_evaluation_results' => ?PredictorEvaluationResults,
  ) $s = shape()) {
    $this->predictor_evaluation_results = $s['predictor_evaluation_results'] ?? vec[];
  }
}

class HyperParameterTuningJobConfig {
  public ?ParameterRanges $parameter_ranges;

  public function __construct(shape(
    ?'parameter_ranges' => ?ParameterRanges,
  ) $s = shape()) {
    $this->parameter_ranges = $s['parameter_ranges'] ?? null;
  }
}

class InputDataConfig {
  public ?Arn $dataset_group_arn;
  public ?SupplementaryFeatures $supplementary_features;

  public function __construct(shape(
    ?'dataset_group_arn' => ?Arn,
    ?'supplementary_features' => ?SupplementaryFeatures,
  ) $s = shape()) {
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->supplementary_features = $s['supplementary_features'] ?? vec[];
  }
}

type Integer = int;

class IntegerParameterRange {
  public int $max_value;
  public int $min_value;
  public ?Name $name;
  public ?ScalingType $scaling_type;

  public function __construct(shape(
    ?'max_value' => int,
    ?'min_value' => int,
    ?'name' => ?Name,
    ?'scaling_type' => ?ScalingType,
  ) $s = shape()) {
    $this->max_value = $s['max_value'] ?? 0;
    $this->min_value = $s['min_value'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->scaling_type = $s['scaling_type'] ?? '';
  }
}

type IntegerParameterRanges = vec<IntegerParameterRange>;

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

type KMSKeyArn = string;

class LimitExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
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
  public ?Filters $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filters' => ?Filters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
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

class ListForecastExportJobsRequest {
  public ?Filters $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filters' => ?Filters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListForecastExportJobsResponse {
  public ?ForecastExportJobs $forecast_export_jobs;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'forecast_export_jobs' => ?ForecastExportJobs,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->forecast_export_jobs = $s['forecast_export_jobs'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListForecastsRequest {
  public ?Filters $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filters' => ?Filters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListForecastsResponse {
  public ?Forecasts $forecasts;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'forecasts' => ?Forecasts,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->forecasts = $s['forecasts'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPredictorsRequest {
  public ?Filters $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filters' => ?Filters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPredictorsResponse {
  public ?NextToken $next_token;
  public ?Predictors $predictors;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'predictors' => ?Predictors,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->predictors = $s['predictors'] ?? vec[];
  }
}

type MaxResults = int;

type Message = string;

class Metrics {
  public ?Double $rmse;
  public ?WeightedQuantileLosses $weighted_quantile_losses;

  public function __construct(shape(
    ?'rmse' => ?Double,
    ?'weighted_quantile_losses' => ?WeightedQuantileLosses,
  ) $s = shape()) {
    $this->rmse = $s['rmse'] ?? 0.0;
    $this->weighted_quantile_losses = $s['weighted_quantile_losses'] ?? vec[];
  }
}

type Name = string;

type NextToken = string;

type ParameterKey = string;

class ParameterRanges {
  public ?CategoricalParameterRanges $categorical_parameter_ranges;
  public ?ContinuousParameterRanges $continuous_parameter_ranges;
  public ?IntegerParameterRanges $integer_parameter_ranges;

  public function __construct(shape(
    ?'categorical_parameter_ranges' => ?CategoricalParameterRanges,
    ?'continuous_parameter_ranges' => ?ContinuousParameterRanges,
    ?'integer_parameter_ranges' => ?IntegerParameterRanges,
  ) $s = shape()) {
    $this->categorical_parameter_ranges = $s['categorical_parameter_ranges'] ?? vec[];
    $this->continuous_parameter_ranges = $s['continuous_parameter_ranges'] ?? vec[];
    $this->integer_parameter_ranges = $s['integer_parameter_ranges'] ?? vec[];
  }
}

type ParameterValue = string;

type PredictorEvaluationResults = vec<EvaluationResult>;

class PredictorExecution {
  public ?Arn $algorithm_arn;
  public ?TestWindowDetails $test_windows;

  public function __construct(shape(
    ?'algorithm_arn' => ?Arn,
    ?'test_windows' => ?TestWindowDetails,
  ) $s = shape()) {
    $this->algorithm_arn = $s['algorithm_arn'] ?? '';
    $this->test_windows = $s['test_windows'] ?? vec[];
  }
}

class PredictorExecutionDetails {
  public ?PredictorExecutions $predictor_executions;

  public function __construct(shape(
    ?'predictor_executions' => ?PredictorExecutions,
  ) $s = shape()) {
    $this->predictor_executions = $s['predictor_executions'] ?? vec[];
  }
}

type PredictorExecutions = vec<PredictorExecution>;

class PredictorSummary {
  public ?Timestamp $creation_time;
  public ?Arn $dataset_group_arn;
  public ?Timestamp $last_modification_time;
  public ?ErrorMessage $message;
  public ?Arn $predictor_arn;
  public ?Name $predictor_name;
  public ?Status $status;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'dataset_group_arn' => ?Arn,
    ?'last_modification_time' => ?Timestamp,
    ?'message' => ?ErrorMessage,
    ?'predictor_arn' => ?Arn,
    ?'predictor_name' => ?Name,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
    $this->last_modification_time = $s['last_modification_time'] ?? 0;
    $this->message = $s['message'] ?? '';
    $this->predictor_arn = $s['predictor_arn'] ?? '';
    $this->predictor_name = $s['predictor_name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type Predictors = vec<PredictorSummary>;

class ResourceAlreadyExistsException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

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

class S3Config {
  public ?KMSKeyArn $kms_key_arn;
  public ?S3Path $path;
  public ?Arn $role_arn;

  public function __construct(shape(
    ?'kms_key_arn' => ?KMSKeyArn,
    ?'path' => ?S3Path,
    ?'role_arn' => ?Arn,
  ) $s = shape()) {
    $this->kms_key_arn = $s['kms_key_arn'] ?? '';
    $this->path = $s['path'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

type S3Path = string;

type ScalingType = string;

class Schema {
  public ?SchemaAttributes $attributes;

  public function __construct(shape(
    ?'attributes' => ?SchemaAttributes,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
  }
}

class SchemaAttribute {
  public ?Name $attribute_name;
  public ?AttributeType $attribute_type;

  public function __construct(shape(
    ?'attribute_name' => ?Name,
    ?'attribute_type' => ?AttributeType,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->attribute_type = $s['attribute_type'] ?? '';
  }
}

type SchemaAttributes = vec<SchemaAttribute>;

class Statistics {
  public ?Double $avg;
  public int $count;
  public int $count_distinct;
  public int $count_nan;
  public int $count_null;
  public string $max;
  public string $min;
  public ?Double $stddev;

  public function __construct(shape(
    ?'avg' => ?Double,
    ?'count' => int,
    ?'count_distinct' => int,
    ?'count_nan' => int,
    ?'count_null' => int,
    ?'max' => string,
    ?'min' => string,
    ?'stddev' => ?Double,
  ) $s = shape()) {
    $this->avg = $s['avg'] ?? 0.0;
    $this->count = $s['count'] ?? 0;
    $this->count_distinct = $s['count_distinct'] ?? 0;
    $this->count_nan = $s['count_nan'] ?? 0;
    $this->count_null = $s['count_null'] ?? 0;
    $this->max = $s['max'] ?? '';
    $this->min = $s['min'] ?? '';
    $this->stddev = $s['stddev'] ?? 0.0;
  }
}

type Status = string;

type String = string;

class SupplementaryFeature {
  public ?Name $name;
  public ?Value $value;

  public function __construct(shape(
    ?'name' => ?Name,
    ?'value' => ?Value,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type SupplementaryFeatures = vec<SupplementaryFeature>;

type TestWindowDetails = vec<TestWindowSummary>;

class TestWindowSummary {
  public ?ErrorMessage $message;
  public ?Status $status;
  public ?Timestamp $test_window_end;
  public ?Timestamp $test_window_start;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
    ?'status' => ?Status,
    ?'test_window_end' => ?Timestamp,
    ?'test_window_start' => ?Timestamp,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->test_window_end = $s['test_window_end'] ?? 0;
    $this->test_window_start = $s['test_window_start'] ?? 0;
  }
}

type TestWindows = vec<WindowSummary>;

type Timestamp = int;

type TimestampFormat = string;

type TrainingParameters = dict<ParameterKey, ParameterValue>;

class UpdateDatasetGroupRequest {
  public ?ArnList $dataset_arns;
  public ?Arn $dataset_group_arn;

  public function __construct(shape(
    ?'dataset_arns' => ?ArnList,
    ?'dataset_group_arn' => ?Arn,
  ) $s = shape()) {
    $this->dataset_arns = $s['dataset_arns'] ?? vec[];
    $this->dataset_group_arn = $s['dataset_group_arn'] ?? '';
  }
}

class UpdateDatasetGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Value = string;

type Values = vec<Value>;

class WeightedQuantileLoss {
  public ?Double $loss_value;
  public ?Double $quantile;

  public function __construct(shape(
    ?'loss_value' => ?Double,
    ?'quantile' => ?Double,
  ) $s = shape()) {
    $this->loss_value = $s['loss_value'] ?? 0.0;
    $this->quantile = $s['quantile'] ?? 0.0;
  }
}

type WeightedQuantileLosses = vec<WeightedQuantileLoss>;

class WindowSummary {
  public ?EvaluationType $evaluation_type;
  public int $item_count;
  public ?Metrics $metrics;
  public ?Timestamp $test_window_end;
  public ?Timestamp $test_window_start;

  public function __construct(shape(
    ?'evaluation_type' => ?EvaluationType,
    ?'item_count' => int,
    ?'metrics' => ?Metrics,
    ?'test_window_end' => ?Timestamp,
    ?'test_window_start' => ?Timestamp,
  ) $s = shape()) {
    $this->evaluation_type = $s['evaluation_type'] ?? '';
    $this->item_count = $s['item_count'] ?? 0;
    $this->metrics = $s['metrics'] ?? null;
    $this->test_window_end = $s['test_window_end'] ?? 0;
    $this->test_window_start = $s['test_window_start'] ?? 0;
  }
}


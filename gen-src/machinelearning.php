<?hh // strict
namespace slack\aws\machinelearning;

interface  {
  public function AddTags(AddTagsInput $in): Awaitable<\Errors\Result<AddTagsOutput>>;
  public function CreateBatchPrediction(CreateBatchPredictionInput $in): Awaitable<\Errors\Result<CreateBatchPredictionOutput>>;
  public function CreateDataSourceFromRDS(CreateDataSourceFromRDSInput $in): Awaitable<\Errors\Result<CreateDataSourceFromRDSOutput>>;
  public function CreateDataSourceFromRedshift(CreateDataSourceFromRedshiftInput $in): Awaitable<\Errors\Result<CreateDataSourceFromRedshiftOutput>>;
  public function CreateDataSourceFromS3(CreateDataSourceFromS3Input $in): Awaitable<\Errors\Result<CreateDataSourceFromS3Output>>;
  public function CreateEvaluation(CreateEvaluationInput $in): Awaitable<\Errors\Result<CreateEvaluationOutput>>;
  public function CreateMLModel(CreateMLModelInput $in): Awaitable<\Errors\Result<CreateMLModelOutput>>;
  public function CreateRealtimeEndpoint(CreateRealtimeEndpointInput $in): Awaitable<\Errors\Result<CreateRealtimeEndpointOutput>>;
  public function DeleteBatchPrediction(DeleteBatchPredictionInput $in): Awaitable<\Errors\Result<DeleteBatchPredictionOutput>>;
  public function DeleteDataSource(DeleteDataSourceInput $in): Awaitable<\Errors\Result<DeleteDataSourceOutput>>;
  public function DeleteEvaluation(DeleteEvaluationInput $in): Awaitable<\Errors\Result<DeleteEvaluationOutput>>;
  public function DeleteMLModel(DeleteMLModelInput $in): Awaitable<\Errors\Result<DeleteMLModelOutput>>;
  public function DeleteRealtimeEndpoint(DeleteRealtimeEndpointInput $in): Awaitable<\Errors\Result<DeleteRealtimeEndpointOutput>>;
  public function DeleteTags(DeleteTagsInput $in): Awaitable<\Errors\Result<DeleteTagsOutput>>;
  public function DescribeBatchPredictions(DescribeBatchPredictionsInput $in): Awaitable<\Errors\Result<DescribeBatchPredictionsOutput>>;
  public function DescribeDataSources(DescribeDataSourcesInput $in): Awaitable<\Errors\Result<DescribeDataSourcesOutput>>;
  public function DescribeEvaluations(DescribeEvaluationsInput $in): Awaitable<\Errors\Result<DescribeEvaluationsOutput>>;
  public function DescribeMLModels(DescribeMLModelsInput $in): Awaitable<\Errors\Result<DescribeMLModelsOutput>>;
  public function DescribeTags(DescribeTagsInput $in): Awaitable<\Errors\Result<DescribeTagsOutput>>;
  public function GetBatchPrediction(GetBatchPredictionInput $in): Awaitable<\Errors\Result<GetBatchPredictionOutput>>;
  public function GetDataSource(GetDataSourceInput $in): Awaitable<\Errors\Result<GetDataSourceOutput>>;
  public function GetEvaluation(GetEvaluationInput $in): Awaitable<\Errors\Result<GetEvaluationOutput>>;
  public function GetMLModel(GetMLModelInput $in): Awaitable<\Errors\Result<GetMLModelOutput>>;
  public function Predict(PredictInput $in): Awaitable<\Errors\Result<PredictOutput>>;
  public function UpdateBatchPrediction(UpdateBatchPredictionInput $in): Awaitable<\Errors\Result<UpdateBatchPredictionOutput>>;
  public function UpdateDataSource(UpdateDataSourceInput $in): Awaitable<\Errors\Result<UpdateDataSourceOutput>>;
  public function UpdateEvaluation(UpdateEvaluationInput $in): Awaitable<\Errors\Result<UpdateEvaluationOutput>>;
  public function UpdateMLModel(UpdateMLModelInput $in): Awaitable<\Errors\Result<UpdateMLModelOutput>>;
}

class AddTagsInput {
  public ?EntityId $resource_id;
  public ?TaggableResourceType $resource_type;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_id' => ?EntityId,
    ?'resource_type' => ?TaggableResourceType,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class AddTagsOutput {
  public ?EntityId $resource_id;
  public ?TaggableResourceType $resource_type;

  public function __construct(shape(
    ?'resource_id' => ?EntityId,
    ?'resource_type' => ?TaggableResourceType,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

type Algorithm = string;

type AwsUserArn = string;

class BatchPrediction {
  public ?EntityId $batch_prediction_data_source_id;
  public ?EntityId $batch_prediction_id;
  public ?LongType $compute_time;
  public ?EpochTime $created_at;
  public ?AwsUserArn $created_by_iam_user;
  public ?EpochTime $finished_at;
  public ?S3Url $input_data_location_s_3;
  public ?LongType $invalid_record_count;
  public ?EpochTime $last_updated_at;
  public ?EntityId $ml_model_id;
  public ?Message $message;
  public ?EntityName $name;
  public ?S3Url $output_uri;
  public ?EpochTime $started_at;
  public ?EntityStatus $status;
  public ?LongType $total_record_count;

  public function __construct(shape(
    ?'batch_prediction_data_source_id' => ?EntityId,
    ?'batch_prediction_id' => ?EntityId,
    ?'compute_time' => ?LongType,
    ?'created_at' => ?EpochTime,
    ?'created_by_iam_user' => ?AwsUserArn,
    ?'finished_at' => ?EpochTime,
    ?'input_data_location_s_3' => ?S3Url,
    ?'invalid_record_count' => ?LongType,
    ?'last_updated_at' => ?EpochTime,
    ?'ml_model_id' => ?EntityId,
    ?'message' => ?Message,
    ?'name' => ?EntityName,
    ?'output_uri' => ?S3Url,
    ?'started_at' => ?EpochTime,
    ?'status' => ?EntityStatus,
    ?'total_record_count' => ?LongType,
  ) $s = shape()) {
    $this->batch_prediction_data_source_id = $s['batch_prediction_data_source_id'] ?? '';
    $this->batch_prediction_id = $s['batch_prediction_id'] ?? '';
    $this->compute_time = $s['compute_time'] ?? 0;
    $this->created_at = $s['created_at'] ?? 0;
    $this->created_by_iam_user = $s['created_by_iam_user'] ?? '';
    $this->finished_at = $s['finished_at'] ?? 0;
    $this->input_data_location_s_3 = $s['input_data_location_s_3'] ?? '';
    $this->invalid_record_count = $s['invalid_record_count'] ?? 0;
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->ml_model_id = $s['ml_model_id'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->output_uri = $s['output_uri'] ?? '';
    $this->started_at = $s['started_at'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->total_record_count = $s['total_record_count'] ?? 0;
  }
}

type BatchPredictionFilterVariable = string;

type BatchPredictions = vec<BatchPrediction>;

type ComparatorValue = string;

type ComputeStatistics = bool;

class CreateBatchPredictionInput {
  public ?EntityId $batch_prediction_data_source_id;
  public ?EntityId $batch_prediction_id;
  public ?EntityName $batch_prediction_name;
  public ?EntityId $ml_model_id;
  public ?S3Url $output_uri;

  public function __construct(shape(
    ?'batch_prediction_data_source_id' => ?EntityId,
    ?'batch_prediction_id' => ?EntityId,
    ?'batch_prediction_name' => ?EntityName,
    ?'ml_model_id' => ?EntityId,
    ?'output_uri' => ?S3Url,
  ) $s = shape()) {
    $this->batch_prediction_data_source_id = $s['batch_prediction_data_source_id'] ?? '';
    $this->batch_prediction_id = $s['batch_prediction_id'] ?? '';
    $this->batch_prediction_name = $s['batch_prediction_name'] ?? '';
    $this->ml_model_id = $s['ml_model_id'] ?? '';
    $this->output_uri = $s['output_uri'] ?? '';
  }
}

class CreateBatchPredictionOutput {
  public ?EntityId $batch_prediction_id;

  public function __construct(shape(
    ?'batch_prediction_id' => ?EntityId,
  ) $s = shape()) {
    $this->batch_prediction_id = $s['batch_prediction_id'] ?? '';
  }
}

class CreateDataSourceFromRDSInput {
  public ?ComputeStatistics $compute_statistics;
  public ?EntityId $data_source_id;
  public ?EntityName $data_source_name;
  public ?RDSDataSpec $rds_data;
  public ?RoleARN $role_arn;

  public function __construct(shape(
    ?'compute_statistics' => ?ComputeStatistics,
    ?'data_source_id' => ?EntityId,
    ?'data_source_name' => ?EntityName,
    ?'rds_data' => ?RDSDataSpec,
    ?'role_arn' => ?RoleARN,
  ) $s = shape()) {
    $this->compute_statistics = $s['compute_statistics'] ?? false;
    $this->data_source_id = $s['data_source_id'] ?? '';
    $this->data_source_name = $s['data_source_name'] ?? '';
    $this->rds_data = $s['rds_data'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class CreateDataSourceFromRDSOutput {
  public ?EntityId $data_source_id;

  public function __construct(shape(
    ?'data_source_id' => ?EntityId,
  ) $s = shape()) {
    $this->data_source_id = $s['data_source_id'] ?? '';
  }
}

class CreateDataSourceFromRedshiftInput {
  public ?ComputeStatistics $compute_statistics;
  public ?EntityId $data_source_id;
  public ?EntityName $data_source_name;
  public ?RedshiftDataSpec $data_spec;
  public ?RoleARN $role_arn;

  public function __construct(shape(
    ?'compute_statistics' => ?ComputeStatistics,
    ?'data_source_id' => ?EntityId,
    ?'data_source_name' => ?EntityName,
    ?'data_spec' => ?RedshiftDataSpec,
    ?'role_arn' => ?RoleARN,
  ) $s = shape()) {
    $this->compute_statistics = $s['compute_statistics'] ?? false;
    $this->data_source_id = $s['data_source_id'] ?? '';
    $this->data_source_name = $s['data_source_name'] ?? '';
    $this->data_spec = $s['data_spec'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class CreateDataSourceFromRedshiftOutput {
  public ?EntityId $data_source_id;

  public function __construct(shape(
    ?'data_source_id' => ?EntityId,
  ) $s = shape()) {
    $this->data_source_id = $s['data_source_id'] ?? '';
  }
}

class CreateDataSourceFromS3Input {
  public ?ComputeStatistics $compute_statistics;
  public ?EntityId $data_source_id;
  public ?EntityName $data_source_name;
  public ?S3DataSpec $data_spec;

  public function __construct(shape(
    ?'compute_statistics' => ?ComputeStatistics,
    ?'data_source_id' => ?EntityId,
    ?'data_source_name' => ?EntityName,
    ?'data_spec' => ?S3DataSpec,
  ) $s = shape()) {
    $this->compute_statistics = $s['compute_statistics'] ?? false;
    $this->data_source_id = $s['data_source_id'] ?? '';
    $this->data_source_name = $s['data_source_name'] ?? '';
    $this->data_spec = $s['data_spec'] ?? null;
  }
}

class CreateDataSourceFromS3Output {
  public ?EntityId $data_source_id;

  public function __construct(shape(
    ?'data_source_id' => ?EntityId,
  ) $s = shape()) {
    $this->data_source_id = $s['data_source_id'] ?? '';
  }
}

class CreateEvaluationInput {
  public ?EntityId $evaluation_data_source_id;
  public ?EntityId $evaluation_id;
  public ?EntityName $evaluation_name;
  public ?EntityId $ml_model_id;

  public function __construct(shape(
    ?'evaluation_data_source_id' => ?EntityId,
    ?'evaluation_id' => ?EntityId,
    ?'evaluation_name' => ?EntityName,
    ?'ml_model_id' => ?EntityId,
  ) $s = shape()) {
    $this->evaluation_data_source_id = $s['evaluation_data_source_id'] ?? '';
    $this->evaluation_id = $s['evaluation_id'] ?? '';
    $this->evaluation_name = $s['evaluation_name'] ?? '';
    $this->ml_model_id = $s['ml_model_id'] ?? '';
  }
}

class CreateEvaluationOutput {
  public ?EntityId $evaluation_id;

  public function __construct(shape(
    ?'evaluation_id' => ?EntityId,
  ) $s = shape()) {
    $this->evaluation_id = $s['evaluation_id'] ?? '';
  }
}

class CreateMLModelInput {
  public ?EntityId $ml_model_id;
  public ?EntityName $ml_model_name;
  public ?MLModelType $ml_model_type;
  public ?TrainingParameters $parameters;
  public ?Recipe $recipe;
  public ?S3Url $recipe_uri;
  public ?EntityId $training_data_source_id;

  public function __construct(shape(
    ?'ml_model_id' => ?EntityId,
    ?'ml_model_name' => ?EntityName,
    ?'ml_model_type' => ?MLModelType,
    ?'parameters' => ?TrainingParameters,
    ?'recipe' => ?Recipe,
    ?'recipe_uri' => ?S3Url,
    ?'training_data_source_id' => ?EntityId,
  ) $s = shape()) {
    $this->ml_model_id = $s['ml_model_id'] ?? '';
    $this->ml_model_name = $s['ml_model_name'] ?? '';
    $this->ml_model_type = $s['ml_model_type'] ?? '';
    $this->parameters = $s['parameters'] ?? dict[];
    $this->recipe = $s['recipe'] ?? '';
    $this->recipe_uri = $s['recipe_uri'] ?? '';
    $this->training_data_source_id = $s['training_data_source_id'] ?? '';
  }
}

class CreateMLModelOutput {
  public ?EntityId $ml_model_id;

  public function __construct(shape(
    ?'ml_model_id' => ?EntityId,
  ) $s = shape()) {
    $this->ml_model_id = $s['ml_model_id'] ?? '';
  }
}

class CreateRealtimeEndpointInput {
  public ?EntityId $ml_model_id;

  public function __construct(shape(
    ?'ml_model_id' => ?EntityId,
  ) $s = shape()) {
    $this->ml_model_id = $s['ml_model_id'] ?? '';
  }
}

class CreateRealtimeEndpointOutput {
  public ?EntityId $ml_model_id;
  public ?RealtimeEndpointInfo $realtime_endpoint_info;

  public function __construct(shape(
    ?'ml_model_id' => ?EntityId,
    ?'realtime_endpoint_info' => ?RealtimeEndpointInfo,
  ) $s = shape()) {
    $this->ml_model_id = $s['ml_model_id'] ?? '';
    $this->realtime_endpoint_info = $s['realtime_endpoint_info'] ?? null;
  }
}

type DataRearrangement = string;

type DataSchema = string;

class DataSource {
  public ?ComputeStatistics $compute_statistics;
  public ?LongType $compute_time;
  public ?EpochTime $created_at;
  public ?AwsUserArn $created_by_iam_user;
  public ?S3Url $data_location_s_3;
  public ?DataRearrangement $data_rearrangement;
  public ?LongType $data_size_in_bytes;
  public ?EntityId $data_source_id;
  public ?EpochTime $finished_at;
  public ?EpochTime $last_updated_at;
  public ?Message $message;
  public ?EntityName $name;
  public ?LongType $number_of_files;
  public ?RDSMetadata $rds_metadata;
  public ?RedshiftMetadata $redshift_metadata;
  public ?RoleARN $role_arn;
  public ?EpochTime $started_at;
  public ?EntityStatus $status;

  public function __construct(shape(
    ?'compute_statistics' => ?ComputeStatistics,
    ?'compute_time' => ?LongType,
    ?'created_at' => ?EpochTime,
    ?'created_by_iam_user' => ?AwsUserArn,
    ?'data_location_s_3' => ?S3Url,
    ?'data_rearrangement' => ?DataRearrangement,
    ?'data_size_in_bytes' => ?LongType,
    ?'data_source_id' => ?EntityId,
    ?'finished_at' => ?EpochTime,
    ?'last_updated_at' => ?EpochTime,
    ?'message' => ?Message,
    ?'name' => ?EntityName,
    ?'number_of_files' => ?LongType,
    ?'rds_metadata' => ?RDSMetadata,
    ?'redshift_metadata' => ?RedshiftMetadata,
    ?'role_arn' => ?RoleARN,
    ?'started_at' => ?EpochTime,
    ?'status' => ?EntityStatus,
  ) $s = shape()) {
    $this->compute_statistics = $s['compute_statistics'] ?? false;
    $this->compute_time = $s['compute_time'] ?? 0;
    $this->created_at = $s['created_at'] ?? 0;
    $this->created_by_iam_user = $s['created_by_iam_user'] ?? '';
    $this->data_location_s_3 = $s['data_location_s_3'] ?? '';
    $this->data_rearrangement = $s['data_rearrangement'] ?? '';
    $this->data_size_in_bytes = $s['data_size_in_bytes'] ?? 0;
    $this->data_source_id = $s['data_source_id'] ?? '';
    $this->finished_at = $s['finished_at'] ?? 0;
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->number_of_files = $s['number_of_files'] ?? 0;
    $this->rds_metadata = $s['rds_metadata'] ?? null;
    $this->redshift_metadata = $s['redshift_metadata'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->started_at = $s['started_at'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

type DataSourceFilterVariable = string;

type DataSources = vec<DataSource>;

class DeleteBatchPredictionInput {
  public ?EntityId $batch_prediction_id;

  public function __construct(shape(
    ?'batch_prediction_id' => ?EntityId,
  ) $s = shape()) {
    $this->batch_prediction_id = $s['batch_prediction_id'] ?? '';
  }
}

class DeleteBatchPredictionOutput {
  public ?EntityId $batch_prediction_id;

  public function __construct(shape(
    ?'batch_prediction_id' => ?EntityId,
  ) $s = shape()) {
    $this->batch_prediction_id = $s['batch_prediction_id'] ?? '';
  }
}

class DeleteDataSourceInput {
  public ?EntityId $data_source_id;

  public function __construct(shape(
    ?'data_source_id' => ?EntityId,
  ) $s = shape()) {
    $this->data_source_id = $s['data_source_id'] ?? '';
  }
}

class DeleteDataSourceOutput {
  public ?EntityId $data_source_id;

  public function __construct(shape(
    ?'data_source_id' => ?EntityId,
  ) $s = shape()) {
    $this->data_source_id = $s['data_source_id'] ?? '';
  }
}

class DeleteEvaluationInput {
  public ?EntityId $evaluation_id;

  public function __construct(shape(
    ?'evaluation_id' => ?EntityId,
  ) $s = shape()) {
    $this->evaluation_id = $s['evaluation_id'] ?? '';
  }
}

class DeleteEvaluationOutput {
  public ?EntityId $evaluation_id;

  public function __construct(shape(
    ?'evaluation_id' => ?EntityId,
  ) $s = shape()) {
    $this->evaluation_id = $s['evaluation_id'] ?? '';
  }
}

class DeleteMLModelInput {
  public ?EntityId $ml_model_id;

  public function __construct(shape(
    ?'ml_model_id' => ?EntityId,
  ) $s = shape()) {
    $this->ml_model_id = $s['ml_model_id'] ?? '';
  }
}

class DeleteMLModelOutput {
  public ?EntityId $ml_model_id;

  public function __construct(shape(
    ?'ml_model_id' => ?EntityId,
  ) $s = shape()) {
    $this->ml_model_id = $s['ml_model_id'] ?? '';
  }
}

class DeleteRealtimeEndpointInput {
  public ?EntityId $ml_model_id;

  public function __construct(shape(
    ?'ml_model_id' => ?EntityId,
  ) $s = shape()) {
    $this->ml_model_id = $s['ml_model_id'] ?? '';
  }
}

class DeleteRealtimeEndpointOutput {
  public ?EntityId $ml_model_id;
  public ?RealtimeEndpointInfo $realtime_endpoint_info;

  public function __construct(shape(
    ?'ml_model_id' => ?EntityId,
    ?'realtime_endpoint_info' => ?RealtimeEndpointInfo,
  ) $s = shape()) {
    $this->ml_model_id = $s['ml_model_id'] ?? '';
    $this->realtime_endpoint_info = $s['realtime_endpoint_info'] ?? null;
  }
}

class DeleteTagsInput {
  public ?EntityId $resource_id;
  public ?TaggableResourceType $resource_type;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_id' => ?EntityId,
    ?'resource_type' => ?TaggableResourceType,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class DeleteTagsOutput {
  public ?EntityId $resource_id;
  public ?TaggableResourceType $resource_type;

  public function __construct(shape(
    ?'resource_id' => ?EntityId,
    ?'resource_type' => ?TaggableResourceType,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class DescribeBatchPredictionsInput {
  public ?ComparatorValue $eq;
  public ?BatchPredictionFilterVariable $filter_variable;
  public ?ComparatorValue $ge;
  public ?ComparatorValue $gt;
  public ?ComparatorValue $le;
  public ?ComparatorValue $lt;
  public ?PageLimit $limit;
  public ?ComparatorValue $ne;
  public ?StringType $next_token;
  public ?ComparatorValue $prefix;
  public ?SortOrder $sort_order;

  public function __construct(shape(
    ?'eq' => ?ComparatorValue,
    ?'filter_variable' => ?BatchPredictionFilterVariable,
    ?'ge' => ?ComparatorValue,
    ?'gt' => ?ComparatorValue,
    ?'le' => ?ComparatorValue,
    ?'lt' => ?ComparatorValue,
    ?'limit' => ?PageLimit,
    ?'ne' => ?ComparatorValue,
    ?'next_token' => ?StringType,
    ?'prefix' => ?ComparatorValue,
    ?'sort_order' => ?SortOrder,
  ) $s = shape()) {
    $this->eq = $s['eq'] ?? '';
    $this->filter_variable = $s['filter_variable'] ?? '';
    $this->ge = $s['ge'] ?? '';
    $this->gt = $s['gt'] ?? '';
    $this->le = $s['le'] ?? '';
    $this->lt = $s['lt'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->ne = $s['ne'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->prefix = $s['prefix'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class DescribeBatchPredictionsOutput {
  public ?StringType $next_token;
  public ?BatchPredictions $results;

  public function __construct(shape(
    ?'next_token' => ?StringType,
    ?'results' => ?BatchPredictions,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->results = $s['results'] ?? vec[];
  }
}

class DescribeDataSourcesInput {
  public ?ComparatorValue $eq;
  public ?DataSourceFilterVariable $filter_variable;
  public ?ComparatorValue $ge;
  public ?ComparatorValue $gt;
  public ?ComparatorValue $le;
  public ?ComparatorValue $lt;
  public ?PageLimit $limit;
  public ?ComparatorValue $ne;
  public ?StringType $next_token;
  public ?ComparatorValue $prefix;
  public ?SortOrder $sort_order;

  public function __construct(shape(
    ?'eq' => ?ComparatorValue,
    ?'filter_variable' => ?DataSourceFilterVariable,
    ?'ge' => ?ComparatorValue,
    ?'gt' => ?ComparatorValue,
    ?'le' => ?ComparatorValue,
    ?'lt' => ?ComparatorValue,
    ?'limit' => ?PageLimit,
    ?'ne' => ?ComparatorValue,
    ?'next_token' => ?StringType,
    ?'prefix' => ?ComparatorValue,
    ?'sort_order' => ?SortOrder,
  ) $s = shape()) {
    $this->eq = $s['eq'] ?? '';
    $this->filter_variable = $s['filter_variable'] ?? '';
    $this->ge = $s['ge'] ?? '';
    $this->gt = $s['gt'] ?? '';
    $this->le = $s['le'] ?? '';
    $this->lt = $s['lt'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->ne = $s['ne'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->prefix = $s['prefix'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class DescribeDataSourcesOutput {
  public ?StringType $next_token;
  public ?DataSources $results;

  public function __construct(shape(
    ?'next_token' => ?StringType,
    ?'results' => ?DataSources,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->results = $s['results'] ?? vec[];
  }
}

class DescribeEvaluationsInput {
  public ?ComparatorValue $eq;
  public ?EvaluationFilterVariable $filter_variable;
  public ?ComparatorValue $ge;
  public ?ComparatorValue $gt;
  public ?ComparatorValue $le;
  public ?ComparatorValue $lt;
  public ?PageLimit $limit;
  public ?ComparatorValue $ne;
  public ?StringType $next_token;
  public ?ComparatorValue $prefix;
  public ?SortOrder $sort_order;

  public function __construct(shape(
    ?'eq' => ?ComparatorValue,
    ?'filter_variable' => ?EvaluationFilterVariable,
    ?'ge' => ?ComparatorValue,
    ?'gt' => ?ComparatorValue,
    ?'le' => ?ComparatorValue,
    ?'lt' => ?ComparatorValue,
    ?'limit' => ?PageLimit,
    ?'ne' => ?ComparatorValue,
    ?'next_token' => ?StringType,
    ?'prefix' => ?ComparatorValue,
    ?'sort_order' => ?SortOrder,
  ) $s = shape()) {
    $this->eq = $s['eq'] ?? '';
    $this->filter_variable = $s['filter_variable'] ?? '';
    $this->ge = $s['ge'] ?? '';
    $this->gt = $s['gt'] ?? '';
    $this->le = $s['le'] ?? '';
    $this->lt = $s['lt'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->ne = $s['ne'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->prefix = $s['prefix'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class DescribeEvaluationsOutput {
  public ?StringType $next_token;
  public ?Evaluations $results;

  public function __construct(shape(
    ?'next_token' => ?StringType,
    ?'results' => ?Evaluations,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->results = $s['results'] ?? vec[];
  }
}

class DescribeMLModelsInput {
  public ?ComparatorValue $eq;
  public ?MLModelFilterVariable $filter_variable;
  public ?ComparatorValue $ge;
  public ?ComparatorValue $gt;
  public ?ComparatorValue $le;
  public ?ComparatorValue $lt;
  public ?PageLimit $limit;
  public ?ComparatorValue $ne;
  public ?StringType $next_token;
  public ?ComparatorValue $prefix;
  public ?SortOrder $sort_order;

  public function __construct(shape(
    ?'eq' => ?ComparatorValue,
    ?'filter_variable' => ?MLModelFilterVariable,
    ?'ge' => ?ComparatorValue,
    ?'gt' => ?ComparatorValue,
    ?'le' => ?ComparatorValue,
    ?'lt' => ?ComparatorValue,
    ?'limit' => ?PageLimit,
    ?'ne' => ?ComparatorValue,
    ?'next_token' => ?StringType,
    ?'prefix' => ?ComparatorValue,
    ?'sort_order' => ?SortOrder,
  ) $s = shape()) {
    $this->eq = $s['eq'] ?? '';
    $this->filter_variable = $s['filter_variable'] ?? '';
    $this->ge = $s['ge'] ?? '';
    $this->gt = $s['gt'] ?? '';
    $this->le = $s['le'] ?? '';
    $this->lt = $s['lt'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->ne = $s['ne'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->prefix = $s['prefix'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class DescribeMLModelsOutput {
  public ?StringType $next_token;
  public ?MLModels $results;

  public function __construct(shape(
    ?'next_token' => ?StringType,
    ?'results' => ?MLModels,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->results = $s['results'] ?? vec[];
  }
}

class DescribeTagsInput {
  public ?EntityId $resource_id;
  public ?TaggableResourceType $resource_type;

  public function __construct(shape(
    ?'resource_id' => ?EntityId,
    ?'resource_type' => ?TaggableResourceType,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class DescribeTagsOutput {
  public ?EntityId $resource_id;
  public ?TaggableResourceType $resource_type;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_id' => ?EntityId,
    ?'resource_type' => ?TaggableResourceType,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type DetailsAttributes = string;

type DetailsMap = dict<DetailsAttributes, DetailsValue>;

type DetailsValue = string;

type EDPPipelineId = string;

type EDPResourceRole = string;

type EDPSecurityGroupId = string;

type EDPSecurityGroupIds = vec<EDPSecurityGroupId>;

type EDPServiceRole = string;

type EDPSubnetId = string;

type EntityId = string;

type EntityName = string;

type EntityStatus = string;

type EpochTime = int;

type ErrorCode = int;

type ErrorMessage = string;

class Evaluation {
  public ?LongType $compute_time;
  public ?EpochTime $created_at;
  public ?AwsUserArn $created_by_iam_user;
  public ?EntityId $evaluation_data_source_id;
  public ?EntityId $evaluation_id;
  public ?EpochTime $finished_at;
  public ?S3Url $input_data_location_s_3;
  public ?EpochTime $last_updated_at;
  public ?EntityId $ml_model_id;
  public ?Message $message;
  public ?EntityName $name;
  public ?PerformanceMetrics $performance_metrics;
  public ?EpochTime $started_at;
  public ?EntityStatus $status;

  public function __construct(shape(
    ?'compute_time' => ?LongType,
    ?'created_at' => ?EpochTime,
    ?'created_by_iam_user' => ?AwsUserArn,
    ?'evaluation_data_source_id' => ?EntityId,
    ?'evaluation_id' => ?EntityId,
    ?'finished_at' => ?EpochTime,
    ?'input_data_location_s_3' => ?S3Url,
    ?'last_updated_at' => ?EpochTime,
    ?'ml_model_id' => ?EntityId,
    ?'message' => ?Message,
    ?'name' => ?EntityName,
    ?'performance_metrics' => ?PerformanceMetrics,
    ?'started_at' => ?EpochTime,
    ?'status' => ?EntityStatus,
  ) $s = shape()) {
    $this->compute_time = $s['compute_time'] ?? 0;
    $this->created_at = $s['created_at'] ?? 0;
    $this->created_by_iam_user = $s['created_by_iam_user'] ?? '';
    $this->evaluation_data_source_id = $s['evaluation_data_source_id'] ?? '';
    $this->evaluation_id = $s['evaluation_id'] ?? '';
    $this->finished_at = $s['finished_at'] ?? 0;
    $this->input_data_location_s_3 = $s['input_data_location_s_3'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->ml_model_id = $s['ml_model_id'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->performance_metrics = $s['performance_metrics'] ?? null;
    $this->started_at = $s['started_at'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

type EvaluationFilterVariable = string;

type Evaluations = vec<Evaluation>;

class GetBatchPredictionInput {
  public ?EntityId $batch_prediction_id;

  public function __construct(shape(
    ?'batch_prediction_id' => ?EntityId,
  ) $s = shape()) {
    $this->batch_prediction_id = $s['batch_prediction_id'] ?? '';
  }
}

class GetBatchPredictionOutput {
  public ?EntityId $batch_prediction_data_source_id;
  public ?EntityId $batch_prediction_id;
  public ?LongType $compute_time;
  public ?EpochTime $created_at;
  public ?AwsUserArn $created_by_iam_user;
  public ?EpochTime $finished_at;
  public ?S3Url $input_data_location_s_3;
  public ?LongType $invalid_record_count;
  public ?EpochTime $last_updated_at;
  public ?PresignedS3Url $log_uri;
  public ?EntityId $ml_model_id;
  public ?Message $message;
  public ?EntityName $name;
  public ?S3Url $output_uri;
  public ?EpochTime $started_at;
  public ?EntityStatus $status;
  public ?LongType $total_record_count;

  public function __construct(shape(
    ?'batch_prediction_data_source_id' => ?EntityId,
    ?'batch_prediction_id' => ?EntityId,
    ?'compute_time' => ?LongType,
    ?'created_at' => ?EpochTime,
    ?'created_by_iam_user' => ?AwsUserArn,
    ?'finished_at' => ?EpochTime,
    ?'input_data_location_s_3' => ?S3Url,
    ?'invalid_record_count' => ?LongType,
    ?'last_updated_at' => ?EpochTime,
    ?'log_uri' => ?PresignedS3Url,
    ?'ml_model_id' => ?EntityId,
    ?'message' => ?Message,
    ?'name' => ?EntityName,
    ?'output_uri' => ?S3Url,
    ?'started_at' => ?EpochTime,
    ?'status' => ?EntityStatus,
    ?'total_record_count' => ?LongType,
  ) $s = shape()) {
    $this->batch_prediction_data_source_id = $s['batch_prediction_data_source_id'] ?? '';
    $this->batch_prediction_id = $s['batch_prediction_id'] ?? '';
    $this->compute_time = $s['compute_time'] ?? 0;
    $this->created_at = $s['created_at'] ?? 0;
    $this->created_by_iam_user = $s['created_by_iam_user'] ?? '';
    $this->finished_at = $s['finished_at'] ?? 0;
    $this->input_data_location_s_3 = $s['input_data_location_s_3'] ?? '';
    $this->invalid_record_count = $s['invalid_record_count'] ?? 0;
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->log_uri = $s['log_uri'] ?? '';
    $this->ml_model_id = $s['ml_model_id'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->output_uri = $s['output_uri'] ?? '';
    $this->started_at = $s['started_at'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->total_record_count = $s['total_record_count'] ?? 0;
  }
}

class GetDataSourceInput {
  public ?EntityId $data_source_id;
  public ?Verbose $verbose;

  public function __construct(shape(
    ?'data_source_id' => ?EntityId,
    ?'verbose' => ?Verbose,
  ) $s = shape()) {
    $this->data_source_id = $s['data_source_id'] ?? '';
    $this->verbose = $s['verbose'] ?? false;
  }
}

class GetDataSourceOutput {
  public ?ComputeStatistics $compute_statistics;
  public ?LongType $compute_time;
  public ?EpochTime $created_at;
  public ?AwsUserArn $created_by_iam_user;
  public ?S3Url $data_location_s_3;
  public ?DataRearrangement $data_rearrangement;
  public ?LongType $data_size_in_bytes;
  public ?EntityId $data_source_id;
  public ?DataSchema $data_source_schema;
  public ?EpochTime $finished_at;
  public ?EpochTime $last_updated_at;
  public ?PresignedS3Url $log_uri;
  public ?Message $message;
  public ?EntityName $name;
  public ?LongType $number_of_files;
  public ?RDSMetadata $rds_metadata;
  public ?RedshiftMetadata $redshift_metadata;
  public ?RoleARN $role_arn;
  public ?EpochTime $started_at;
  public ?EntityStatus $status;

  public function __construct(shape(
    ?'compute_statistics' => ?ComputeStatistics,
    ?'compute_time' => ?LongType,
    ?'created_at' => ?EpochTime,
    ?'created_by_iam_user' => ?AwsUserArn,
    ?'data_location_s_3' => ?S3Url,
    ?'data_rearrangement' => ?DataRearrangement,
    ?'data_size_in_bytes' => ?LongType,
    ?'data_source_id' => ?EntityId,
    ?'data_source_schema' => ?DataSchema,
    ?'finished_at' => ?EpochTime,
    ?'last_updated_at' => ?EpochTime,
    ?'log_uri' => ?PresignedS3Url,
    ?'message' => ?Message,
    ?'name' => ?EntityName,
    ?'number_of_files' => ?LongType,
    ?'rds_metadata' => ?RDSMetadata,
    ?'redshift_metadata' => ?RedshiftMetadata,
    ?'role_arn' => ?RoleARN,
    ?'started_at' => ?EpochTime,
    ?'status' => ?EntityStatus,
  ) $s = shape()) {
    $this->compute_statistics = $s['compute_statistics'] ?? false;
    $this->compute_time = $s['compute_time'] ?? 0;
    $this->created_at = $s['created_at'] ?? 0;
    $this->created_by_iam_user = $s['created_by_iam_user'] ?? '';
    $this->data_location_s_3 = $s['data_location_s_3'] ?? '';
    $this->data_rearrangement = $s['data_rearrangement'] ?? '';
    $this->data_size_in_bytes = $s['data_size_in_bytes'] ?? 0;
    $this->data_source_id = $s['data_source_id'] ?? '';
    $this->data_source_schema = $s['data_source_schema'] ?? '';
    $this->finished_at = $s['finished_at'] ?? 0;
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->log_uri = $s['log_uri'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->number_of_files = $s['number_of_files'] ?? 0;
    $this->rds_metadata = $s['rds_metadata'] ?? null;
    $this->redshift_metadata = $s['redshift_metadata'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->started_at = $s['started_at'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

class GetEvaluationInput {
  public ?EntityId $evaluation_id;

  public function __construct(shape(
    ?'evaluation_id' => ?EntityId,
  ) $s = shape()) {
    $this->evaluation_id = $s['evaluation_id'] ?? '';
  }
}

class GetEvaluationOutput {
  public ?LongType $compute_time;
  public ?EpochTime $created_at;
  public ?AwsUserArn $created_by_iam_user;
  public ?EntityId $evaluation_data_source_id;
  public ?EntityId $evaluation_id;
  public ?EpochTime $finished_at;
  public ?S3Url $input_data_location_s_3;
  public ?EpochTime $last_updated_at;
  public ?PresignedS3Url $log_uri;
  public ?EntityId $ml_model_id;
  public ?Message $message;
  public ?EntityName $name;
  public ?PerformanceMetrics $performance_metrics;
  public ?EpochTime $started_at;
  public ?EntityStatus $status;

  public function __construct(shape(
    ?'compute_time' => ?LongType,
    ?'created_at' => ?EpochTime,
    ?'created_by_iam_user' => ?AwsUserArn,
    ?'evaluation_data_source_id' => ?EntityId,
    ?'evaluation_id' => ?EntityId,
    ?'finished_at' => ?EpochTime,
    ?'input_data_location_s_3' => ?S3Url,
    ?'last_updated_at' => ?EpochTime,
    ?'log_uri' => ?PresignedS3Url,
    ?'ml_model_id' => ?EntityId,
    ?'message' => ?Message,
    ?'name' => ?EntityName,
    ?'performance_metrics' => ?PerformanceMetrics,
    ?'started_at' => ?EpochTime,
    ?'status' => ?EntityStatus,
  ) $s = shape()) {
    $this->compute_time = $s['compute_time'] ?? 0;
    $this->created_at = $s['created_at'] ?? 0;
    $this->created_by_iam_user = $s['created_by_iam_user'] ?? '';
    $this->evaluation_data_source_id = $s['evaluation_data_source_id'] ?? '';
    $this->evaluation_id = $s['evaluation_id'] ?? '';
    $this->finished_at = $s['finished_at'] ?? 0;
    $this->input_data_location_s_3 = $s['input_data_location_s_3'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->log_uri = $s['log_uri'] ?? '';
    $this->ml_model_id = $s['ml_model_id'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->performance_metrics = $s['performance_metrics'] ?? null;
    $this->started_at = $s['started_at'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

class GetMLModelInput {
  public ?EntityId $ml_model_id;
  public ?Verbose $verbose;

  public function __construct(shape(
    ?'ml_model_id' => ?EntityId,
    ?'verbose' => ?Verbose,
  ) $s = shape()) {
    $this->ml_model_id = $s['ml_model_id'] ?? '';
    $this->verbose = $s['verbose'] ?? false;
  }
}

class GetMLModelOutput {
  public ?LongType $compute_time;
  public ?EpochTime $created_at;
  public ?AwsUserArn $created_by_iam_user;
  public ?RealtimeEndpointInfo $endpoint_info;
  public ?EpochTime $finished_at;
  public ?S3Url $input_data_location_s_3;
  public ?EpochTime $last_updated_at;
  public ?PresignedS3Url $log_uri;
  public ?EntityId $ml_model_id;
  public ?MLModelType $ml_model_type;
  public ?Message $message;
  public ?MLModelName $name;
  public ?Recipe $recipe;
  public ?DataSchema $schema;
  public ?ScoreThreshold $score_threshold;
  public ?EpochTime $score_threshold_last_updated_at;
  public ?LongType $size_in_bytes;
  public ?EpochTime $started_at;
  public ?EntityStatus $status;
  public ?EntityId $training_data_source_id;
  public ?TrainingParameters $training_parameters;

  public function __construct(shape(
    ?'compute_time' => ?LongType,
    ?'created_at' => ?EpochTime,
    ?'created_by_iam_user' => ?AwsUserArn,
    ?'endpoint_info' => ?RealtimeEndpointInfo,
    ?'finished_at' => ?EpochTime,
    ?'input_data_location_s_3' => ?S3Url,
    ?'last_updated_at' => ?EpochTime,
    ?'log_uri' => ?PresignedS3Url,
    ?'ml_model_id' => ?EntityId,
    ?'ml_model_type' => ?MLModelType,
    ?'message' => ?Message,
    ?'name' => ?MLModelName,
    ?'recipe' => ?Recipe,
    ?'schema' => ?DataSchema,
    ?'score_threshold' => ?ScoreThreshold,
    ?'score_threshold_last_updated_at' => ?EpochTime,
    ?'size_in_bytes' => ?LongType,
    ?'started_at' => ?EpochTime,
    ?'status' => ?EntityStatus,
    ?'training_data_source_id' => ?EntityId,
    ?'training_parameters' => ?TrainingParameters,
  ) $s = shape()) {
    $this->compute_time = $s['compute_time'] ?? 0;
    $this->created_at = $s['created_at'] ?? 0;
    $this->created_by_iam_user = $s['created_by_iam_user'] ?? '';
    $this->endpoint_info = $s['endpoint_info'] ?? null;
    $this->finished_at = $s['finished_at'] ?? 0;
    $this->input_data_location_s_3 = $s['input_data_location_s_3'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->log_uri = $s['log_uri'] ?? '';
    $this->ml_model_id = $s['ml_model_id'] ?? '';
    $this->ml_model_type = $s['ml_model_type'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->recipe = $s['recipe'] ?? '';
    $this->schema = $s['schema'] ?? '';
    $this->score_threshold = $s['score_threshold'] ?? 0.0;
    $this->score_threshold_last_updated_at = $s['score_threshold_last_updated_at'] ?? 0;
    $this->size_in_bytes = $s['size_in_bytes'] ?? 0;
    $this->started_at = $s['started_at'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->training_data_source_id = $s['training_data_source_id'] ?? '';
    $this->training_parameters = $s['training_parameters'] ?? dict[];
  }
}

class IdempotentParameterMismatchException {
  public ?ErrorCode $code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->code = $s['code'] ?? 0;
    $this->message = $s['message'] ?? '';
  }
}

type IntegerType = int;

class InternalServerException {
  public ?ErrorCode $code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->code = $s['code'] ?? 0;
    $this->message = $s['message'] ?? '';
  }
}

class InvalidInputException {
  public ?ErrorCode $code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->code = $s['code'] ?? 0;
    $this->message = $s['message'] ?? '';
  }
}

class InvalidTagException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Label = string;

class LimitExceededException {
  public ?ErrorCode $code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->code = $s['code'] ?? 0;
    $this->message = $s['message'] ?? '';
  }
}

type LongType = int;

class MLModel {
  public ?Algorithm $algorithm;
  public ?LongType $compute_time;
  public ?EpochTime $created_at;
  public ?AwsUserArn $created_by_iam_user;
  public ?RealtimeEndpointInfo $endpoint_info;
  public ?EpochTime $finished_at;
  public ?S3Url $input_data_location_s_3;
  public ?EpochTime $last_updated_at;
  public ?EntityId $ml_model_id;
  public ?MLModelType $ml_model_type;
  public ?Message $message;
  public ?MLModelName $name;
  public ?ScoreThreshold $score_threshold;
  public ?EpochTime $score_threshold_last_updated_at;
  public ?LongType $size_in_bytes;
  public ?EpochTime $started_at;
  public ?EntityStatus $status;
  public ?EntityId $training_data_source_id;
  public ?TrainingParameters $training_parameters;

  public function __construct(shape(
    ?'algorithm' => ?Algorithm,
    ?'compute_time' => ?LongType,
    ?'created_at' => ?EpochTime,
    ?'created_by_iam_user' => ?AwsUserArn,
    ?'endpoint_info' => ?RealtimeEndpointInfo,
    ?'finished_at' => ?EpochTime,
    ?'input_data_location_s_3' => ?S3Url,
    ?'last_updated_at' => ?EpochTime,
    ?'ml_model_id' => ?EntityId,
    ?'ml_model_type' => ?MLModelType,
    ?'message' => ?Message,
    ?'name' => ?MLModelName,
    ?'score_threshold' => ?ScoreThreshold,
    ?'score_threshold_last_updated_at' => ?EpochTime,
    ?'size_in_bytes' => ?LongType,
    ?'started_at' => ?EpochTime,
    ?'status' => ?EntityStatus,
    ?'training_data_source_id' => ?EntityId,
    ?'training_parameters' => ?TrainingParameters,
  ) $s = shape()) {
    $this->algorithm = $s['algorithm'] ?? '';
    $this->compute_time = $s['compute_time'] ?? 0;
    $this->created_at = $s['created_at'] ?? 0;
    $this->created_by_iam_user = $s['created_by_iam_user'] ?? '';
    $this->endpoint_info = $s['endpoint_info'] ?? null;
    $this->finished_at = $s['finished_at'] ?? 0;
    $this->input_data_location_s_3 = $s['input_data_location_s_3'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->ml_model_id = $s['ml_model_id'] ?? '';
    $this->ml_model_type = $s['ml_model_type'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->score_threshold = $s['score_threshold'] ?? 0.0;
    $this->score_threshold_last_updated_at = $s['score_threshold_last_updated_at'] ?? 0;
    $this->size_in_bytes = $s['size_in_bytes'] ?? 0;
    $this->started_at = $s['started_at'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->training_data_source_id = $s['training_data_source_id'] ?? '';
    $this->training_parameters = $s['training_parameters'] ?? dict[];
  }
}

type MLModelFilterVariable = string;

type MLModelName = string;

type MLModelType = string;

type MLModels = vec<MLModel>;

type Message = string;

type PageLimit = int;

class PerformanceMetrics {
  public ?PerformanceMetricsProperties $properties;

  public function __construct(shape(
    ?'properties' => ?PerformanceMetricsProperties,
  ) $s = shape()) {
    $this->properties = $s['properties'] ?? dict[];
  }
}

type PerformanceMetricsProperties = dict<PerformanceMetricsPropertyKey, PerformanceMetricsPropertyValue>;

type PerformanceMetricsPropertyKey = string;

type PerformanceMetricsPropertyValue = string;

class PredictInput {
  public ?EntityId $ml_model_id;
  public ?VipURL $predict_endpoint;
  public ?Record $record;

  public function __construct(shape(
    ?'ml_model_id' => ?EntityId,
    ?'predict_endpoint' => ?VipURL,
    ?'record' => ?Record,
  ) $s = shape()) {
    $this->ml_model_id = $s['ml_model_id'] ?? '';
    $this->predict_endpoint = $s['predict_endpoint'] ?? '';
    $this->record = $s['record'] ?? dict[];
  }
}

class PredictOutput {
  public ?Prediction $prediction;

  public function __construct(shape(
    ?'prediction' => ?Prediction,
  ) $s = shape()) {
    $this->prediction = $s['prediction'] ?? null;
  }
}

class Prediction {
  public ?DetailsMap $details;
  public ?Label $predicted_label;
  public ?ScoreValuePerLabelMap $predicted_scores;
  public ?floatLabel $predicted_value;

  public function __construct(shape(
    ?'details' => ?DetailsMap,
    ?'predicted_label' => ?Label,
    ?'predicted_scores' => ?ScoreValuePerLabelMap,
    ?'predicted_value' => ?floatLabel,
  ) $s = shape()) {
    $this->details = $s['details'] ?? dict[];
    $this->predicted_label = $s['predicted_label'] ?? '';
    $this->predicted_scores = $s['predicted_scores'] ?? dict[];
    $this->predicted_value = $s['predicted_value'] ?? 0.0;
  }
}

class PredictorNotMountedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PresignedS3Url = string;

class RDSDataSpec {
  public ?DataRearrangement $data_rearrangement;
  public ?DataSchema $data_schema;
  public ?S3Url $data_schema_uri;
  public ?RDSDatabaseCredentials $database_credentials;
  public ?RDSDatabase $database_information;
  public ?EDPResourceRole $resource_role;
  public ?S3Url $s_3_staging_location;
  public ?EDPSecurityGroupIds $security_group_ids;
  public ?RDSSelectSqlQuery $select_sql_query;
  public ?EDPServiceRole $service_role;
  public ?EDPSubnetId $subnet_id;

  public function __construct(shape(
    ?'data_rearrangement' => ?DataRearrangement,
    ?'data_schema' => ?DataSchema,
    ?'data_schema_uri' => ?S3Url,
    ?'database_credentials' => ?RDSDatabaseCredentials,
    ?'database_information' => ?RDSDatabase,
    ?'resource_role' => ?EDPResourceRole,
    ?'s_3_staging_location' => ?S3Url,
    ?'security_group_ids' => ?EDPSecurityGroupIds,
    ?'select_sql_query' => ?RDSSelectSqlQuery,
    ?'service_role' => ?EDPServiceRole,
    ?'subnet_id' => ?EDPSubnetId,
  ) $s = shape()) {
    $this->data_rearrangement = $s['data_rearrangement'] ?? '';
    $this->data_schema = $s['data_schema'] ?? '';
    $this->data_schema_uri = $s['data_schema_uri'] ?? '';
    $this->database_credentials = $s['database_credentials'] ?? null;
    $this->database_information = $s['database_information'] ?? null;
    $this->resource_role = $s['resource_role'] ?? '';
    $this->s_3_staging_location = $s['s_3_staging_location'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->select_sql_query = $s['select_sql_query'] ?? '';
    $this->service_role = $s['service_role'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

class RDSDatabase {
  public ?RDSDatabaseName $database_name;
  public ?RDSInstanceIdentifier $instance_identifier;

  public function __construct(shape(
    ?'database_name' => ?RDSDatabaseName,
    ?'instance_identifier' => ?RDSInstanceIdentifier,
  ) $s = shape()) {
    $this->database_name = $s['database_name'] ?? '';
    $this->instance_identifier = $s['instance_identifier'] ?? '';
  }
}

class RDSDatabaseCredentials {
  public ?RDSDatabasePassword $password;
  public ?RDSDatabaseUsername $username;

  public function __construct(shape(
    ?'password' => ?RDSDatabasePassword,
    ?'username' => ?RDSDatabaseUsername,
  ) $s = shape()) {
    $this->password = $s['password'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

type RDSDatabaseName = string;

type RDSDatabasePassword = string;

type RDSDatabaseUsername = string;

type RDSInstanceIdentifier = string;

class RDSMetadata {
  public ?EDPPipelineId $data_pipeline_id;
  public ?RDSDatabase $database;
  public ?RDSDatabaseUsername $database_user_name;
  public ?EDPResourceRole $resource_role;
  public ?RDSSelectSqlQuery $select_sql_query;
  public ?EDPServiceRole $service_role;

  public function __construct(shape(
    ?'data_pipeline_id' => ?EDPPipelineId,
    ?'database' => ?RDSDatabase,
    ?'database_user_name' => ?RDSDatabaseUsername,
    ?'resource_role' => ?EDPResourceRole,
    ?'select_sql_query' => ?RDSSelectSqlQuery,
    ?'service_role' => ?EDPServiceRole,
  ) $s = shape()) {
    $this->data_pipeline_id = $s['data_pipeline_id'] ?? '';
    $this->database = $s['database'] ?? null;
    $this->database_user_name = $s['database_user_name'] ?? '';
    $this->resource_role = $s['resource_role'] ?? '';
    $this->select_sql_query = $s['select_sql_query'] ?? '';
    $this->service_role = $s['service_role'] ?? '';
  }
}

type RDSSelectSqlQuery = string;

class RealtimeEndpointInfo {
  public ?EpochTime $created_at;
  public ?RealtimeEndpointStatus $endpoint_status;
  public ?VipURL $endpoint_url;
  public ?IntegerType $peak_requests_per_second;

  public function __construct(shape(
    ?'created_at' => ?EpochTime,
    ?'endpoint_status' => ?RealtimeEndpointStatus,
    ?'endpoint_url' => ?VipURL,
    ?'peak_requests_per_second' => ?IntegerType,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->endpoint_status = $s['endpoint_status'] ?? '';
    $this->endpoint_url = $s['endpoint_url'] ?? '';
    $this->peak_requests_per_second = $s['peak_requests_per_second'] ?? 0;
  }
}

type RealtimeEndpointStatus = string;

type Recipe = string;

type Record = dict<VariableName, VariableValue>;

type RedshiftClusterIdentifier = string;

class RedshiftDataSpec {
  public ?DataRearrangement $data_rearrangement;
  public ?DataSchema $data_schema;
  public ?S3Url $data_schema_uri;
  public ?RedshiftDatabaseCredentials $database_credentials;
  public ?RedshiftDatabase $database_information;
  public ?S3Url $s_3_staging_location;
  public ?RedshiftSelectSqlQuery $select_sql_query;

  public function __construct(shape(
    ?'data_rearrangement' => ?DataRearrangement,
    ?'data_schema' => ?DataSchema,
    ?'data_schema_uri' => ?S3Url,
    ?'database_credentials' => ?RedshiftDatabaseCredentials,
    ?'database_information' => ?RedshiftDatabase,
    ?'s_3_staging_location' => ?S3Url,
    ?'select_sql_query' => ?RedshiftSelectSqlQuery,
  ) $s = shape()) {
    $this->data_rearrangement = $s['data_rearrangement'] ?? '';
    $this->data_schema = $s['data_schema'] ?? '';
    $this->data_schema_uri = $s['data_schema_uri'] ?? '';
    $this->database_credentials = $s['database_credentials'] ?? null;
    $this->database_information = $s['database_information'] ?? null;
    $this->s_3_staging_location = $s['s_3_staging_location'] ?? '';
    $this->select_sql_query = $s['select_sql_query'] ?? '';
  }
}

class RedshiftDatabase {
  public ?RedshiftClusterIdentifier $cluster_identifier;
  public ?RedshiftDatabaseName $database_name;

  public function __construct(shape(
    ?'cluster_identifier' => ?RedshiftClusterIdentifier,
    ?'database_name' => ?RedshiftDatabaseName,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->database_name = $s['database_name'] ?? '';
  }
}

class RedshiftDatabaseCredentials {
  public ?RedshiftDatabasePassword $password;
  public ?RedshiftDatabaseUsername $username;

  public function __construct(shape(
    ?'password' => ?RedshiftDatabasePassword,
    ?'username' => ?RedshiftDatabaseUsername,
  ) $s = shape()) {
    $this->password = $s['password'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

type RedshiftDatabaseName = string;

type RedshiftDatabasePassword = string;

type RedshiftDatabaseUsername = string;

class RedshiftMetadata {
  public ?RedshiftDatabaseUsername $database_user_name;
  public ?RedshiftDatabase $redshift_database;
  public ?RedshiftSelectSqlQuery $select_sql_query;

  public function __construct(shape(
    ?'database_user_name' => ?RedshiftDatabaseUsername,
    ?'redshift_database' => ?RedshiftDatabase,
    ?'select_sql_query' => ?RedshiftSelectSqlQuery,
  ) $s = shape()) {
    $this->database_user_name = $s['database_user_name'] ?? '';
    $this->redshift_database = $s['redshift_database'] ?? null;
    $this->select_sql_query = $s['select_sql_query'] ?? '';
  }
}

type RedshiftSelectSqlQuery = string;

class ResourceNotFoundException {
  public ?ErrorCode $code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->code = $s['code'] ?? 0;
    $this->message = $s['message'] ?? '';
  }
}

type RoleARN = string;

class S3DataSpec {
  public ?S3Url $data_location_s_3;
  public ?DataRearrangement $data_rearrangement;
  public ?DataSchema $data_schema;
  public ?S3Url $data_schema_location_s_3;

  public function __construct(shape(
    ?'data_location_s_3' => ?S3Url,
    ?'data_rearrangement' => ?DataRearrangement,
    ?'data_schema' => ?DataSchema,
    ?'data_schema_location_s_3' => ?S3Url,
  ) $s = shape()) {
    $this->data_location_s_3 = $s['data_location_s_3'] ?? '';
    $this->data_rearrangement = $s['data_rearrangement'] ?? '';
    $this->data_schema = $s['data_schema'] ?? '';
    $this->data_schema_location_s_3 = $s['data_schema_location_s_3'] ?? '';
  }
}

type S3Url = string;

type ScoreThreshold = float;

type ScoreValue = float;

type ScoreValuePerLabelMap = dict<Label, ScoreValue>;

type SortOrder = string;

type StringType = string;

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

class TagLimitExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type TagList = vec<Tag>;

type TagValue = string;

type TaggableResourceType = string;

type TrainingParameters = dict<StringType, StringType>;

class UpdateBatchPredictionInput {
  public ?EntityId $batch_prediction_id;
  public ?EntityName $batch_prediction_name;

  public function __construct(shape(
    ?'batch_prediction_id' => ?EntityId,
    ?'batch_prediction_name' => ?EntityName,
  ) $s = shape()) {
    $this->batch_prediction_id = $s['batch_prediction_id'] ?? '';
    $this->batch_prediction_name = $s['batch_prediction_name'] ?? '';
  }
}

class UpdateBatchPredictionOutput {
  public ?EntityId $batch_prediction_id;

  public function __construct(shape(
    ?'batch_prediction_id' => ?EntityId,
  ) $s = shape()) {
    $this->batch_prediction_id = $s['batch_prediction_id'] ?? '';
  }
}

class UpdateDataSourceInput {
  public ?EntityId $data_source_id;
  public ?EntityName $data_source_name;

  public function __construct(shape(
    ?'data_source_id' => ?EntityId,
    ?'data_source_name' => ?EntityName,
  ) $s = shape()) {
    $this->data_source_id = $s['data_source_id'] ?? '';
    $this->data_source_name = $s['data_source_name'] ?? '';
  }
}

class UpdateDataSourceOutput {
  public ?EntityId $data_source_id;

  public function __construct(shape(
    ?'data_source_id' => ?EntityId,
  ) $s = shape()) {
    $this->data_source_id = $s['data_source_id'] ?? '';
  }
}

class UpdateEvaluationInput {
  public ?EntityId $evaluation_id;
  public ?EntityName $evaluation_name;

  public function __construct(shape(
    ?'evaluation_id' => ?EntityId,
    ?'evaluation_name' => ?EntityName,
  ) $s = shape()) {
    $this->evaluation_id = $s['evaluation_id'] ?? '';
    $this->evaluation_name = $s['evaluation_name'] ?? '';
  }
}

class UpdateEvaluationOutput {
  public ?EntityId $evaluation_id;

  public function __construct(shape(
    ?'evaluation_id' => ?EntityId,
  ) $s = shape()) {
    $this->evaluation_id = $s['evaluation_id'] ?? '';
  }
}

class UpdateMLModelInput {
  public ?EntityId $ml_model_id;
  public ?EntityName $ml_model_name;
  public ?ScoreThreshold $score_threshold;

  public function __construct(shape(
    ?'ml_model_id' => ?EntityId,
    ?'ml_model_name' => ?EntityName,
    ?'score_threshold' => ?ScoreThreshold,
  ) $s = shape()) {
    $this->ml_model_id = $s['ml_model_id'] ?? '';
    $this->ml_model_name = $s['ml_model_name'] ?? '';
    $this->score_threshold = $s['score_threshold'] ?? 0.0;
  }
}

class UpdateMLModelOutput {
  public ?EntityId $ml_model_id;

  public function __construct(shape(
    ?'ml_model_id' => ?EntityId,
  ) $s = shape()) {
    $this->ml_model_id = $s['ml_model_id'] ?? '';
  }
}

type VariableName = string;

type VariableValue = string;

type Verbose = bool;

type VipURL = string;

type floatLabel = float;


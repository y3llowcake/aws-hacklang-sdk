<?hh // strict
namespace slack\aws\api.sagemaker;

interface SageMaker {
  public function AddTags(AddTagsInput): Awaitable<Errors\Result<AddTagsOutput>>;
  public function AssociateTrialComponent(AssociateTrialComponentRequest): Awaitable<Errors\Result<AssociateTrialComponentResponse>>;
  public function CreateAlgorithm(CreateAlgorithmInput): Awaitable<Errors\Result<CreateAlgorithmOutput>>;
  public function CreateApp(CreateAppRequest): Awaitable<Errors\Result<CreateAppResponse>>;
  public function CreateAutoMLJob(CreateAutoMLJobRequest): Awaitable<Errors\Result<CreateAutoMLJobResponse>>;
  public function CreateCodeRepository(CreateCodeRepositoryInput): Awaitable<Errors\Result<CreateCodeRepositoryOutput>>;
  public function CreateCompilationJob(CreateCompilationJobRequest): Awaitable<Errors\Result<CreateCompilationJobResponse>>;
  public function CreateDomain(CreateDomainRequest): Awaitable<Errors\Result<CreateDomainResponse>>;
  public function CreateEndpoint(CreateEndpointInput): Awaitable<Errors\Result<CreateEndpointOutput>>;
  public function CreateEndpointConfig(CreateEndpointConfigInput): Awaitable<Errors\Result<CreateEndpointConfigOutput>>;
  public function CreateExperiment(CreateExperimentRequest): Awaitable<Errors\Result<CreateExperimentResponse>>;
  public function CreateFlowDefinition(CreateFlowDefinitionRequest): Awaitable<Errors\Result<CreateFlowDefinitionResponse>>;
  public function CreateHumanTaskUi(CreateHumanTaskUiRequest): Awaitable<Errors\Result<CreateHumanTaskUiResponse>>;
  public function CreateHyperParameterTuningJob(CreateHyperParameterTuningJobRequest): Awaitable<Errors\Result<CreateHyperParameterTuningJobResponse>>;
  public function CreateLabelingJob(CreateLabelingJobRequest): Awaitable<Errors\Result<CreateLabelingJobResponse>>;
  public function CreateModel(CreateModelInput): Awaitable<Errors\Result<CreateModelOutput>>;
  public function CreateModelPackage(CreateModelPackageInput): Awaitable<Errors\Result<CreateModelPackageOutput>>;
  public function CreateMonitoringSchedule(CreateMonitoringScheduleRequest): Awaitable<Errors\Result<CreateMonitoringScheduleResponse>>;
  public function CreateNotebookInstance(CreateNotebookInstanceInput): Awaitable<Errors\Result<CreateNotebookInstanceOutput>>;
  public function CreateNotebookInstanceLifecycleConfig(CreateNotebookInstanceLifecycleConfigInput): Awaitable<Errors\Result<CreateNotebookInstanceLifecycleConfigOutput>>;
  public function CreatePresignedDomainUrl(CreatePresignedDomainUrlRequest): Awaitable<Errors\Result<CreatePresignedDomainUrlResponse>>;
  public function CreatePresignedNotebookInstanceUrl(CreatePresignedNotebookInstanceUrlInput): Awaitable<Errors\Result<CreatePresignedNotebookInstanceUrlOutput>>;
  public function CreateProcessingJob(CreateProcessingJobRequest): Awaitable<Errors\Result<CreateProcessingJobResponse>>;
  public function CreateTrainingJob(CreateTrainingJobRequest): Awaitable<Errors\Result<CreateTrainingJobResponse>>;
  public function CreateTransformJob(CreateTransformJobRequest): Awaitable<Errors\Result<CreateTransformJobResponse>>;
  public function CreateTrial(CreateTrialRequest): Awaitable<Errors\Result<CreateTrialResponse>>;
  public function CreateTrialComponent(CreateTrialComponentRequest): Awaitable<Errors\Result<CreateTrialComponentResponse>>;
  public function CreateUserProfile(CreateUserProfileRequest): Awaitable<Errors\Result<CreateUserProfileResponse>>;
  public function CreateWorkteam(CreateWorkteamRequest): Awaitable<Errors\Result<CreateWorkteamResponse>>;
  public function DeleteAlgorithm(DeleteAlgorithmInput): Awaitable<Errors\Error>;
  public function DeleteApp(DeleteAppRequest): Awaitable<Errors\Error>;
  public function DeleteCodeRepository(DeleteCodeRepositoryInput): Awaitable<Errors\Error>;
  public function DeleteDomain(DeleteDomainRequest): Awaitable<Errors\Error>;
  public function DeleteEndpoint(DeleteEndpointInput): Awaitable<Errors\Error>;
  public function DeleteEndpointConfig(DeleteEndpointConfigInput): Awaitable<Errors\Error>;
  public function DeleteExperiment(DeleteExperimentRequest): Awaitable<Errors\Result<DeleteExperimentResponse>>;
  public function DeleteFlowDefinition(DeleteFlowDefinitionRequest): Awaitable<Errors\Result<DeleteFlowDefinitionResponse>>;
  public function DeleteModel(DeleteModelInput): Awaitable<Errors\Error>;
  public function DeleteModelPackage(DeleteModelPackageInput): Awaitable<Errors\Error>;
  public function DeleteMonitoringSchedule(DeleteMonitoringScheduleRequest): Awaitable<Errors\Error>;
  public function DeleteNotebookInstance(DeleteNotebookInstanceInput): Awaitable<Errors\Error>;
  public function DeleteNotebookInstanceLifecycleConfig(DeleteNotebookInstanceLifecycleConfigInput): Awaitable<Errors\Error>;
  public function DeleteTags(DeleteTagsInput): Awaitable<Errors\Result<DeleteTagsOutput>>;
  public function DeleteTrial(DeleteTrialRequest): Awaitable<Errors\Result<DeleteTrialResponse>>;
  public function DeleteTrialComponent(DeleteTrialComponentRequest): Awaitable<Errors\Result<DeleteTrialComponentResponse>>;
  public function DeleteUserProfile(DeleteUserProfileRequest): Awaitable<Errors\Error>;
  public function DeleteWorkteam(DeleteWorkteamRequest): Awaitable<Errors\Result<DeleteWorkteamResponse>>;
  public function DescribeAlgorithm(DescribeAlgorithmInput): Awaitable<Errors\Result<DescribeAlgorithmOutput>>;
  public function DescribeApp(DescribeAppRequest): Awaitable<Errors\Result<DescribeAppResponse>>;
  public function DescribeAutoMLJob(DescribeAutoMLJobRequest): Awaitable<Errors\Result<DescribeAutoMLJobResponse>>;
  public function DescribeCodeRepository(DescribeCodeRepositoryInput): Awaitable<Errors\Result<DescribeCodeRepositoryOutput>>;
  public function DescribeCompilationJob(DescribeCompilationJobRequest): Awaitable<Errors\Result<DescribeCompilationJobResponse>>;
  public function DescribeDomain(DescribeDomainRequest): Awaitable<Errors\Result<DescribeDomainResponse>>;
  public function DescribeEndpoint(DescribeEndpointInput): Awaitable<Errors\Result<DescribeEndpointOutput>>;
  public function DescribeEndpointConfig(DescribeEndpointConfigInput): Awaitable<Errors\Result<DescribeEndpointConfigOutput>>;
  public function DescribeExperiment(DescribeExperimentRequest): Awaitable<Errors\Result<DescribeExperimentResponse>>;
  public function DescribeFlowDefinition(DescribeFlowDefinitionRequest): Awaitable<Errors\Result<DescribeFlowDefinitionResponse>>;
  public function DescribeHumanTaskUi(DescribeHumanTaskUiRequest): Awaitable<Errors\Result<DescribeHumanTaskUiResponse>>;
  public function DescribeHyperParameterTuningJob(DescribeHyperParameterTuningJobRequest): Awaitable<Errors\Result<DescribeHyperParameterTuningJobResponse>>;
  public function DescribeLabelingJob(DescribeLabelingJobRequest): Awaitable<Errors\Result<DescribeLabelingJobResponse>>;
  public function DescribeModel(DescribeModelInput): Awaitable<Errors\Result<DescribeModelOutput>>;
  public function DescribeModelPackage(DescribeModelPackageInput): Awaitable<Errors\Result<DescribeModelPackageOutput>>;
  public function DescribeMonitoringSchedule(DescribeMonitoringScheduleRequest): Awaitable<Errors\Result<DescribeMonitoringScheduleResponse>>;
  public function DescribeNotebookInstance(DescribeNotebookInstanceInput): Awaitable<Errors\Result<DescribeNotebookInstanceOutput>>;
  public function DescribeNotebookInstanceLifecycleConfig(DescribeNotebookInstanceLifecycleConfigInput): Awaitable<Errors\Result<DescribeNotebookInstanceLifecycleConfigOutput>>;
  public function DescribeProcessingJob(DescribeProcessingJobRequest): Awaitable<Errors\Result<DescribeProcessingJobResponse>>;
  public function DescribeSubscribedWorkteam(DescribeSubscribedWorkteamRequest): Awaitable<Errors\Result<DescribeSubscribedWorkteamResponse>>;
  public function DescribeTrainingJob(DescribeTrainingJobRequest): Awaitable<Errors\Result<DescribeTrainingJobResponse>>;
  public function DescribeTransformJob(DescribeTransformJobRequest): Awaitable<Errors\Result<DescribeTransformJobResponse>>;
  public function DescribeTrial(DescribeTrialRequest): Awaitable<Errors\Result<DescribeTrialResponse>>;
  public function DescribeTrialComponent(DescribeTrialComponentRequest): Awaitable<Errors\Result<DescribeTrialComponentResponse>>;
  public function DescribeUserProfile(DescribeUserProfileRequest): Awaitable<Errors\Result<DescribeUserProfileResponse>>;
  public function DescribeWorkforce(DescribeWorkforceRequest): Awaitable<Errors\Result<DescribeWorkforceResponse>>;
  public function DescribeWorkteam(DescribeWorkteamRequest): Awaitable<Errors\Result<DescribeWorkteamResponse>>;
  public function DisassociateTrialComponent(DisassociateTrialComponentRequest): Awaitable<Errors\Result<DisassociateTrialComponentResponse>>;
  public function GetSearchSuggestions(GetSearchSuggestionsRequest): Awaitable<Errors\Result<GetSearchSuggestionsResponse>>;
  public function ListAlgorithms(ListAlgorithmsInput): Awaitable<Errors\Result<ListAlgorithmsOutput>>;
  public function ListApps(ListAppsRequest): Awaitable<Errors\Result<ListAppsResponse>>;
  public function ListAutoMLJobs(ListAutoMLJobsRequest): Awaitable<Errors\Result<ListAutoMLJobsResponse>>;
  public function ListCandidatesForAutoMLJob(ListCandidatesForAutoMLJobRequest): Awaitable<Errors\Result<ListCandidatesForAutoMLJobResponse>>;
  public function ListCodeRepositories(ListCodeRepositoriesInput): Awaitable<Errors\Result<ListCodeRepositoriesOutput>>;
  public function ListCompilationJobs(ListCompilationJobsRequest): Awaitable<Errors\Result<ListCompilationJobsResponse>>;
  public function ListDomains(ListDomainsRequest): Awaitable<Errors\Result<ListDomainsResponse>>;
  public function ListEndpointConfigs(ListEndpointConfigsInput): Awaitable<Errors\Result<ListEndpointConfigsOutput>>;
  public function ListEndpoints(ListEndpointsInput): Awaitable<Errors\Result<ListEndpointsOutput>>;
  public function ListExperiments(ListExperimentsRequest): Awaitable<Errors\Result<ListExperimentsResponse>>;
  public function ListFlowDefinitions(ListFlowDefinitionsRequest): Awaitable<Errors\Result<ListFlowDefinitionsResponse>>;
  public function ListHumanTaskUis(ListHumanTaskUisRequest): Awaitable<Errors\Result<ListHumanTaskUisResponse>>;
  public function ListHyperParameterTuningJobs(ListHyperParameterTuningJobsRequest): Awaitable<Errors\Result<ListHyperParameterTuningJobsResponse>>;
  public function ListLabelingJobs(ListLabelingJobsRequest): Awaitable<Errors\Result<ListLabelingJobsResponse>>;
  public function ListLabelingJobsForWorkteam(ListLabelingJobsForWorkteamRequest): Awaitable<Errors\Result<ListLabelingJobsForWorkteamResponse>>;
  public function ListModelPackages(ListModelPackagesInput): Awaitable<Errors\Result<ListModelPackagesOutput>>;
  public function ListModels(ListModelsInput): Awaitable<Errors\Result<ListModelsOutput>>;
  public function ListMonitoringExecutions(ListMonitoringExecutionsRequest): Awaitable<Errors\Result<ListMonitoringExecutionsResponse>>;
  public function ListMonitoringSchedules(ListMonitoringSchedulesRequest): Awaitable<Errors\Result<ListMonitoringSchedulesResponse>>;
  public function ListNotebookInstanceLifecycleConfigs(ListNotebookInstanceLifecycleConfigsInput): Awaitable<Errors\Result<ListNotebookInstanceLifecycleConfigsOutput>>;
  public function ListNotebookInstances(ListNotebookInstancesInput): Awaitable<Errors\Result<ListNotebookInstancesOutput>>;
  public function ListProcessingJobs(ListProcessingJobsRequest): Awaitable<Errors\Result<ListProcessingJobsResponse>>;
  public function ListSubscribedWorkteams(ListSubscribedWorkteamsRequest): Awaitable<Errors\Result<ListSubscribedWorkteamsResponse>>;
  public function ListTags(ListTagsInput): Awaitable<Errors\Result<ListTagsOutput>>;
  public function ListTrainingJobs(ListTrainingJobsRequest): Awaitable<Errors\Result<ListTrainingJobsResponse>>;
  public function ListTrainingJobsForHyperParameterTuningJob(ListTrainingJobsForHyperParameterTuningJobRequest): Awaitable<Errors\Result<ListTrainingJobsForHyperParameterTuningJobResponse>>;
  public function ListTransformJobs(ListTransformJobsRequest): Awaitable<Errors\Result<ListTransformJobsResponse>>;
  public function ListTrialComponents(ListTrialComponentsRequest): Awaitable<Errors\Result<ListTrialComponentsResponse>>;
  public function ListTrials(ListTrialsRequest): Awaitable<Errors\Result<ListTrialsResponse>>;
  public function ListUserProfiles(ListUserProfilesRequest): Awaitable<Errors\Result<ListUserProfilesResponse>>;
  public function ListWorkteams(ListWorkteamsRequest): Awaitable<Errors\Result<ListWorkteamsResponse>>;
  public function RenderUiTemplate(RenderUiTemplateRequest): Awaitable<Errors\Result<RenderUiTemplateResponse>>;
  public function Search(SearchRequest): Awaitable<Errors\Result<SearchResponse>>;
  public function StartMonitoringSchedule(StartMonitoringScheduleRequest): Awaitable<Errors\Error>;
  public function StartNotebookInstance(StartNotebookInstanceInput): Awaitable<Errors\Error>;
  public function StopAutoMLJob(StopAutoMLJobRequest): Awaitable<Errors\Error>;
  public function StopCompilationJob(StopCompilationJobRequest): Awaitable<Errors\Error>;
  public function StopHyperParameterTuningJob(StopHyperParameterTuningJobRequest): Awaitable<Errors\Error>;
  public function StopLabelingJob(StopLabelingJobRequest): Awaitable<Errors\Error>;
  public function StopMonitoringSchedule(StopMonitoringScheduleRequest): Awaitable<Errors\Error>;
  public function StopNotebookInstance(StopNotebookInstanceInput): Awaitable<Errors\Error>;
  public function StopProcessingJob(StopProcessingJobRequest): Awaitable<Errors\Error>;
  public function StopTrainingJob(StopTrainingJobRequest): Awaitable<Errors\Error>;
  public function StopTransformJob(StopTransformJobRequest): Awaitable<Errors\Error>;
  public function UpdateCodeRepository(UpdateCodeRepositoryInput): Awaitable<Errors\Result<UpdateCodeRepositoryOutput>>;
  public function UpdateDomain(UpdateDomainRequest): Awaitable<Errors\Result<UpdateDomainResponse>>;
  public function UpdateEndpoint(UpdateEndpointInput): Awaitable<Errors\Result<UpdateEndpointOutput>>;
  public function UpdateEndpointWeightsAndCapacities(UpdateEndpointWeightsAndCapacitiesInput): Awaitable<Errors\Result<UpdateEndpointWeightsAndCapacitiesOutput>>;
  public function UpdateExperiment(UpdateExperimentRequest): Awaitable<Errors\Result<UpdateExperimentResponse>>;
  public function UpdateMonitoringSchedule(UpdateMonitoringScheduleRequest): Awaitable<Errors\Result<UpdateMonitoringScheduleResponse>>;
  public function UpdateNotebookInstance(UpdateNotebookInstanceInput): Awaitable<Errors\Result<UpdateNotebookInstanceOutput>>;
  public function UpdateNotebookInstanceLifecycleConfig(UpdateNotebookInstanceLifecycleConfigInput): Awaitable<Errors\Result<UpdateNotebookInstanceLifecycleConfigOutput>>;
  public function UpdateTrial(UpdateTrialRequest): Awaitable<Errors\Result<UpdateTrialResponse>>;
  public function UpdateTrialComponent(UpdateTrialComponentRequest): Awaitable<Errors\Result<UpdateTrialComponentResponse>>;
  public function UpdateUserProfile(UpdateUserProfileRequest): Awaitable<Errors\Result<UpdateUserProfileResponse>>;
  public function UpdateWorkforce(UpdateWorkforceRequest): Awaitable<Errors\Result<UpdateWorkforceResponse>>;
  public function UpdateWorkteam(UpdateWorkteamRequest): Awaitable<Errors\Result<UpdateWorkteamResponse>>;
}

type Accept = string;

type AccountId = string;

class AddTagsInput {
  public ResourceArn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? ;
  }
}

class AddTagsOutput {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
  }
}

type AdditionalCodeRepositoryNamesOrUrls = vec<CodeRepositoryNameOrUrl>;

type AlgorithmArn = string;

type AlgorithmImage = string;

type AlgorithmSortBy = string;

class AlgorithmSpecification {
  public ArnOrName $algorithm_name;
  public boolean $enable_sage_maker_metrics_time_series;
  public MetricDefinitionList $metric_definitions;
  public AlgorithmImage $training_image;
  public TrainingInputMode $training_input_mode;

  public function __construct(shape(
  ?'algorithm_name' => ArnOrName,
  ?'enable_sage_maker_metrics_time_series' => boolean,
  ?'metric_definitions' => MetricDefinitionList,
  ?'training_image' => AlgorithmImage,
  ?'training_input_mode' => TrainingInputMode,
  ) $s = shape()) {
    $this->algorithm_name = $algorithm_name ?? ;
    $this->enable_sage_maker_metrics_time_series = $enable_sage_maker_metrics_time_series ?? ;
    $this->metric_definitions = $metric_definitions ?? ;
    $this->training_image = $training_image ?? ;
    $this->training_input_mode = $training_input_mode ?? "";
  }
}

type AlgorithmStatus = string;

class AlgorithmStatusDetails {
  public AlgorithmStatusItemList $image_scan_statuses;
  public AlgorithmStatusItemList $validation_statuses;

  public function __construct(shape(
  ?'image_scan_statuses' => AlgorithmStatusItemList,
  ?'validation_statuses' => AlgorithmStatusItemList,
  ) $s = shape()) {
    $this->image_scan_statuses = $image_scan_statuses ?? ;
    $this->validation_statuses = $validation_statuses ?? ;
  }
}

class AlgorithmStatusItem {
  public string $failure_reason;
  public EntityName $name;
  public DetailedAlgorithmStatus $status;

  public function __construct(shape(
  ?'failure_reason' => string,
  ?'name' => EntityName,
  ?'status' => DetailedAlgorithmStatus,
  ) $s = shape()) {
    $this->failure_reason = $failure_reason ?? "";
    $this->name = $name ?? ;
    $this->status = $status ?? ;
  }
}

type AlgorithmStatusItemList = vec<AlgorithmStatusItem>;

class AlgorithmSummary {
  public AlgorithmArn $algorithm_arn;
  public EntityDescription $algorithm_description;
  public EntityName $algorithm_name;
  public AlgorithmStatus $algorithm_status;
  public CreationTime $creation_time;

  public function __construct(shape(
  ?'algorithm_arn' => AlgorithmArn,
  ?'algorithm_description' => EntityDescription,
  ?'algorithm_name' => EntityName,
  ?'algorithm_status' => AlgorithmStatus,
  ?'creation_time' => CreationTime,
  ) $s = shape()) {
    $this->algorithm_arn = $algorithm_arn ?? "";
    $this->algorithm_description = $algorithm_description ?? ;
    $this->algorithm_name = $algorithm_name ?? ;
    $this->algorithm_status = $algorithm_status ?? "";
    $this->creation_time = $creation_time ?? 0;
  }
}

type AlgorithmSummaryList = vec<AlgorithmSummary>;

class AlgorithmValidationProfile {
  public EntityName $profile_name;
  public TrainingJobDefinition $training_job_definition;
  public TransformJobDefinition $transform_job_definition;

  public function __construct(shape(
  ?'profile_name' => EntityName,
  ?'training_job_definition' => TrainingJobDefinition,
  ?'transform_job_definition' => TransformJobDefinition,
  ) $s = shape()) {
    $this->profile_name = $profile_name ?? ;
    $this->training_job_definition = $training_job_definition ?? null;
    $this->transform_job_definition = $transform_job_definition ?? null;
  }
}

type AlgorithmValidationProfiles = vec<AlgorithmValidationProfile>;

class AlgorithmValidationSpecification {
  public AlgorithmValidationProfiles $validation_profiles;
  public RoleArn $validation_role;

  public function __construct(shape(
  ?'validation_profiles' => AlgorithmValidationProfiles,
  ?'validation_role' => RoleArn,
  ) $s = shape()) {
    $this->validation_profiles = $validation_profiles ?? ;
    $this->validation_role = $validation_role ?? ;
  }
}

class AnnotationConsolidationConfig {
  public LambdaFunctionArn $annotation_consolidation_lambda_arn;

  public function __construct(shape(
  ?'annotation_consolidation_lambda_arn' => LambdaFunctionArn,
  ) $s = shape()) {
    $this->annotation_consolidation_lambda_arn = $annotation_consolidation_lambda_arn ?? ;
  }
}

type AppArn = string;

class AppDetails {
  public AppName $app_name;
  public AppType $app_type;
  public CreationTime $creation_time;
  public DomainId $domain_id;
  public AppStatus $status;
  public UserProfileName $user_profile_name;

  public function __construct(shape(
  ?'app_name' => AppName,
  ?'app_type' => AppType,
  ?'creation_time' => CreationTime,
  ?'domain_id' => DomainId,
  ?'status' => AppStatus,
  ?'user_profile_name' => UserProfileName,
  ) $s = shape()) {
    $this->app_name = $app_name ?? "";
    $this->app_type = $app_type ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->domain_id = $domain_id ?? "";
    $this->status = $status ?? ;
    $this->user_profile_name = $user_profile_name ?? "";
  }
}

type AppInstanceType = string;

type AppList = vec<AppDetails>;

type AppName = string;

type AppSortKey = string;

class AppSpecification {
  public ContainerArguments $container_arguments;
  public ContainerEntrypoint $container_entrypoint;
  public ImageUri $image_uri;

  public function __construct(shape(
  ?'container_arguments' => ContainerArguments,
  ?'container_entrypoint' => ContainerEntrypoint,
  ?'image_uri' => ImageUri,
  ) $s = shape()) {
    $this->container_arguments = $container_arguments ?? [];
    $this->container_entrypoint = $container_entrypoint ?? [];
    $this->image_uri = $image_uri ?? "";
  }
}

type AppStatus = string;

type AppType = string;

type ArnOrName = string;

type AssemblyType = string;

class AssociateTrialComponentRequest {
  public ExperimentEntityName $trial_component_name;
  public ExperimentEntityName $trial_name;

  public function __construct(shape(
  ?'trial_component_name' => ExperimentEntityName,
  ?'trial_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->trial_component_name = $trial_component_name ?? ;
    $this->trial_name = $trial_name ?? ;
  }
}

class AssociateTrialComponentResponse {
  public TrialArn $trial_arn;
  public TrialComponentArn $trial_component_arn;

  public function __construct(shape(
  ?'trial_arn' => TrialArn,
  ?'trial_component_arn' => TrialComponentArn,
  ) $s = shape()) {
    $this->trial_arn = $trial_arn ?? "";
    $this->trial_component_arn = $trial_component_arn ?? "";
  }
}

type AttributeName = string;

type AttributeNames = vec<AttributeName>;

type AuthMode = string;

class AutoMLCandidate {
  public CandidateName $candidate_name;
  public CandidateStatus $candidate_status;
  public CandidateSteps $candidate_steps;
  public Timestamp $creation_time;
  public Timestamp $end_time;
  public AutoMLFailureReason $failure_reason;
  public FinalAutoMLJobObjectiveMetric $final_auto_ml_job_objective_metric;
  public AutoMLContainerDefinitions $inference_containers;
  public Timestamp $last_modified_time;
  public ObjectiveStatus $objective_status;

  public function __construct(shape(
  ?'candidate_name' => CandidateName,
  ?'candidate_status' => CandidateStatus,
  ?'candidate_steps' => CandidateSteps,
  ?'creation_time' => Timestamp,
  ?'end_time' => Timestamp,
  ?'failure_reason' => AutoMLFailureReason,
  ?'final_auto_ml_job_objective_metric' => FinalAutoMLJobObjectiveMetric,
  ?'inference_containers' => AutoMLContainerDefinitions,
  ?'last_modified_time' => Timestamp,
  ?'objective_status' => ObjectiveStatus,
  ) $s = shape()) {
    $this->candidate_name = $candidate_name ?? "";
    $this->candidate_status = $candidate_status ?? "";
    $this->candidate_steps = $candidate_steps ?? [];
    $this->creation_time = $creation_time ?? 0;
    $this->end_time = $end_time ?? ;
    $this->failure_reason = $failure_reason ?? "";
    $this->final_auto_ml_job_objective_metric = $final_auto_ml_job_objective_metric ?? null;
    $this->inference_containers = $inference_containers ?? ;
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->objective_status = $objective_status ?? "";
  }
}

class AutoMLCandidateStep {
  public CandidateStepArn $candidate_step_arn;
  public CandidateStepName $candidate_step_name;
  public CandidateStepType $candidate_step_type;

  public function __construct(shape(
  ?'candidate_step_arn' => CandidateStepArn,
  ?'candidate_step_name' => CandidateStepName,
  ?'candidate_step_type' => CandidateStepType,
  ) $s = shape()) {
    $this->candidate_step_arn = $candidate_step_arn ?? "";
    $this->candidate_step_name = $candidate_step_name ?? "";
    $this->candidate_step_type = $candidate_step_type ?? "";
  }
}

type AutoMLCandidates = vec<AutoMLCandidate>;

class AutoMLChannel {
  public CompressionType $compression_type;
  public AutoMLDataSource $data_source;
  public TargetAttributeName $target_attribute_name;

  public function __construct(shape(
  ?'compression_type' => CompressionType,
  ?'data_source' => AutoMLDataSource,
  ?'target_attribute_name' => TargetAttributeName,
  ) $s = shape()) {
    $this->compression_type = $compression_type ?? "";
    $this->data_source = $data_source ?? null;
    $this->target_attribute_name = $target_attribute_name ?? "";
  }
}

class AutoMLContainerDefinition {
  public EnvironmentMap $environment;
  public Image $image;
  public Url $model_data_url;

  public function __construct(shape(
  ?'environment' => EnvironmentMap,
  ?'image' => Image,
  ?'model_data_url' => Url,
  ) $s = shape()) {
    $this->environment = $environment ?? ;
    $this->image = $image ?? "";
    $this->model_data_url = $model_data_url ?? ;
  }
}

type AutoMLContainerDefinitions = vec<AutoMLContainerDefinition>;

class AutoMLDataSource {
  public AutoMLS3DataSource $s_3_data_source;

  public function __construct(shape(
  ?'s_3_data_source' => AutoMLS3DataSource,
  ) $s = shape()) {
    $this->s_3_data_source = $s_3_data_source ?? null;
  }
}

type AutoMLFailureReason = string;

type AutoMLInputDataConfig = vec<AutoMLChannel>;

type AutoMLJobArn = string;

class AutoMLJobArtifacts {
  public CandidateDefinitionNotebookLocation $candidate_definition_notebook_location;
  public DataExplorationNotebookLocation $data_exploration_notebook_location;

  public function __construct(shape(
  ?'candidate_definition_notebook_location' => CandidateDefinitionNotebookLocation,
  ?'data_exploration_notebook_location' => DataExplorationNotebookLocation,
  ) $s = shape()) {
    $this->candidate_definition_notebook_location = $candidate_definition_notebook_location ?? "";
    $this->data_exploration_notebook_location = $data_exploration_notebook_location ?? "";
  }
}

class AutoMLJobCompletionCriteria {
  public MaxAutoMLJobRuntimeInSeconds $max_auto_ml_job_runtime_in_seconds;
  public MaxCandidates $max_candidates;
  public MaxRuntimePerTrainingJobInSeconds $max_runtime_per_training_job_in_seconds;

  public function __construct(shape(
  ?'max_auto_ml_job_runtime_in_seconds' => MaxAutoMLJobRuntimeInSeconds,
  ?'max_candidates' => MaxCandidates,
  ?'max_runtime_per_training_job_in_seconds' => MaxRuntimePerTrainingJobInSeconds,
  ) $s = shape()) {
    $this->max_auto_ml_job_runtime_in_seconds = $max_auto_ml_job_runtime_in_seconds ?? 0;
    $this->max_candidates = $max_candidates ?? 0;
    $this->max_runtime_per_training_job_in_seconds = $max_runtime_per_training_job_in_seconds ?? 0;
  }
}

class AutoMLJobConfig {
  public AutoMLJobCompletionCriteria $completion_criteria;
  public AutoMLSecurityConfig $security_config;

  public function __construct(shape(
  ?'completion_criteria' => AutoMLJobCompletionCriteria,
  ?'security_config' => AutoMLSecurityConfig,
  ) $s = shape()) {
    $this->completion_criteria = $completion_criteria ?? ;
    $this->security_config = $security_config ?? ;
  }
}

type AutoMLJobName = string;

class AutoMLJobObjective {
  public AutoMLMetricEnum $metric_name;

  public function __construct(shape(
  ?'metric_name' => AutoMLMetricEnum,
  ) $s = shape()) {
    $this->metric_name = $metric_name ?? "";
  }
}

type AutoMLJobObjectiveType = string;

type AutoMLJobSecondaryStatus = string;

type AutoMLJobStatus = string;

type AutoMLJobSummaries = vec<AutoMLJobSummary>;

class AutoMLJobSummary {
  public AutoMLJobArn $auto_ml_job_arn;
  public AutoMLJobName $auto_ml_job_name;
  public AutoMLJobSecondaryStatus $auto_ml_job_secondary_status;
  public AutoMLJobStatus $auto_ml_job_status;
  public Timestamp $creation_time;
  public Timestamp $end_time;
  public AutoMLFailureReason $failure_reason;
  public Timestamp $last_modified_time;

  public function __construct(shape(
  ?'auto_ml_job_arn' => AutoMLJobArn,
  ?'auto_ml_job_name' => AutoMLJobName,
  ?'auto_ml_job_secondary_status' => AutoMLJobSecondaryStatus,
  ?'auto_ml_job_status' => AutoMLJobStatus,
  ?'creation_time' => Timestamp,
  ?'end_time' => Timestamp,
  ?'failure_reason' => AutoMLFailureReason,
  ?'last_modified_time' => Timestamp,
  ) $s = shape()) {
    $this->auto_ml_job_arn = $auto_ml_job_arn ?? "";
    $this->auto_ml_job_name = $auto_ml_job_name ?? "";
    $this->auto_ml_job_secondary_status = $auto_ml_job_secondary_status ?? "";
    $this->auto_ml_job_status = $auto_ml_job_status ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->end_time = $end_time ?? ;
    $this->failure_reason = $failure_reason ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
  }
}

type AutoMLMaxResults = int;

type AutoMLMetricEnum = string;

type AutoMLNameContains = string;

class AutoMLOutputDataConfig {
  public KmsKeyId $kms_key_id;
  public S3Uri $s_3_output_path;

  public function __construct(shape(
  ?'kms_key_id' => KmsKeyId,
  ?'s_3_output_path' => S3Uri,
  ) $s = shape()) {
    $this->kms_key_id = $kms_key_id ?? "";
    $this->s_3_output_path = $s_3_output_path ?? ;
  }
}

class AutoMLS3DataSource {
  public AutoMLS3DataType $s_3_data_type;
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'s_3_data_type' => AutoMLS3DataType,
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->s_3_data_type = $s_3_data_type ?? "";
    $this->s_3_uri = $s_3_uri ?? "";
  }
}

type AutoMLS3DataType = string;

class AutoMLSecurityConfig {
  public boolean $enable_inter_container_traffic_encryption;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;

  public function __construct(shape(
  ?'enable_inter_container_traffic_encryption' => boolean,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->enable_inter_container_traffic_encryption = $enable_inter_container_traffic_encryption ?? ;
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

type AutoMLSortBy = string;

type AutoMLSortOrder = string;

type AwsManagedHumanLoopRequestSource = string;

type BatchStrategy = string;

type BillableTimeInSeconds = int;

type Boolean = bool;

type BooleanOperator = string;

type Branch = string;

type CandidateDefinitionNotebookLocation = string;

type CandidateName = string;

type CandidateSortBy = string;

type CandidateStatus = string;

type CandidateStepArn = string;

type CandidateStepName = string;

type CandidateStepType = string;

type CandidateSteps = vec<AutoMLCandidateStep>;

class CaptureContentTypeHeader {
  public CsvContentTypes $csv_content_types;
  public JsonContentTypes $json_content_types;

  public function __construct(shape(
  ?'csv_content_types' => CsvContentTypes,
  ?'json_content_types' => JsonContentTypes,
  ) $s = shape()) {
    $this->csv_content_types = $csv_content_types ?? [];
    $this->json_content_types = $json_content_types ?? [];
  }
}

type CaptureMode = string;

class CaptureOption {
  public CaptureMode $capture_mode;

  public function __construct(shape(
  ?'capture_mode' => CaptureMode,
  ) $s = shape()) {
    $this->capture_mode = $capture_mode ?? "";
  }
}

type CaptureOptionList = vec<CaptureOption>;

type CaptureStatus = string;

class CategoricalParameterRange {
  public ParameterKey $name;
  public ParameterValues $values;

  public function __construct(shape(
  ?'name' => ParameterKey,
  ?'values' => ParameterValues,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->values = $values ?? ;
  }
}

class CategoricalParameterRangeSpecification {
  public ParameterValues $values;

  public function __construct(shape(
  ?'values' => ParameterValues,
  ) $s = shape()) {
    $this->values = $values ?? ;
  }
}

type CategoricalParameterRanges = vec<CategoricalParameterRange>;

type Cents = int;

type CertifyForMarketplace = bool;

class Channel {
  public ChannelName $channel_name;
  public CompressionType $compression_type;
  public ContentType $content_type;
  public DataSource $data_source;
  public TrainingInputMode $input_mode;
  public RecordWrapper $record_wrapper_type;
  public ShuffleConfig $shuffle_config;

  public function __construct(shape(
  ?'channel_name' => ChannelName,
  ?'compression_type' => CompressionType,
  ?'content_type' => ContentType,
  ?'data_source' => DataSource,
  ?'input_mode' => TrainingInputMode,
  ?'record_wrapper_type' => RecordWrapper,
  ?'shuffle_config' => ShuffleConfig,
  ) $s = shape()) {
    $this->channel_name = $channel_name ?? "";
    $this->compression_type = $compression_type ?? "";
    $this->content_type = $content_type ?? "";
    $this->data_source = $data_source ?? null;
    $this->input_mode = $input_mode ?? ;
    $this->record_wrapper_type = $record_wrapper_type ?? ;
    $this->shuffle_config = $shuffle_config ?? null;
  }
}

type ChannelName = string;

class ChannelSpecification {
  public EntityDescription $description;
  public boolean $is_required;
  public ChannelName $name;
  public CompressionTypes $supported_compression_types;
  public ContentTypes $supported_content_types;
  public InputModes $supported_input_modes;

  public function __construct(shape(
  ?'description' => EntityDescription,
  ?'is_required' => boolean,
  ?'name' => ChannelName,
  ?'supported_compression_types' => CompressionTypes,
  ?'supported_content_types' => ContentTypes,
  ?'supported_input_modes' => InputModes,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->is_required = $is_required ?? ;
    $this->name = $name ?? ;
    $this->supported_compression_types = $supported_compression_types ?? ;
    $this->supported_content_types = $supported_content_types ?? ;
    $this->supported_input_modes = $supported_input_modes ?? ;
  }
}

type ChannelSpecifications = vec<ChannelSpecification>;

class CheckpointConfig {
  public DirectoryPath $local_path;
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'local_path' => DirectoryPath,
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->local_path = $local_path ?? ;
    $this->s_3_uri = $s_3_uri ?? "";
  }
}

type Cidr = string;

type Cidrs = vec<Cidr>;

type CodeRepositoryArn = string;

type CodeRepositoryContains = string;

type CodeRepositoryNameContains = string;

type CodeRepositoryNameOrUrl = string;

type CodeRepositorySortBy = string;

type CodeRepositorySortOrder = string;

class CodeRepositorySummary {
  public CodeRepositoryArn $code_repository_arn;
  public EntityName $code_repository_name;
  public CreationTime $creation_time;
  public GitConfig $git_config;
  public LastModifiedTime $last_modified_time;

  public function __construct(shape(
  ?'code_repository_arn' => CodeRepositoryArn,
  ?'code_repository_name' => EntityName,
  ?'creation_time' => CreationTime,
  ?'git_config' => GitConfig,
  ?'last_modified_time' => LastModifiedTime,
  ) $s = shape()) {
    $this->code_repository_arn = $code_repository_arn ?? "";
    $this->code_repository_name = $code_repository_name ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->git_config = $git_config ?? null;
    $this->last_modified_time = $last_modified_time ?? 0;
  }
}

type CodeRepositorySummaryList = vec<CodeRepositorySummary>;

type CognitoClientId = string;

class CognitoMemberDefinition {
  public CognitoClientId $client_id;
  public CognitoUserGroup $user_group;
  public CognitoUserPool $user_pool;

  public function __construct(shape(
  ?'client_id' => CognitoClientId,
  ?'user_group' => CognitoUserGroup,
  ?'user_pool' => CognitoUserPool,
  ) $s = shape()) {
    $this->client_id = $client_id ?? ;
    $this->user_group = $user_group ?? ;
    $this->user_pool = $user_pool ?? ;
  }
}

type CognitoUserGroup = string;

type CognitoUserPool = string;

class CollectionConfiguration {
  public CollectionName $collection_name;
  public CollectionParameters $collection_parameters;

  public function __construct(shape(
  ?'collection_name' => CollectionName,
  ?'collection_parameters' => CollectionParameters,
  ) $s = shape()) {
    $this->collection_name = $collection_name ?? "";
    $this->collection_parameters = $collection_parameters ?? [];
  }
}

type CollectionConfigurations = vec<CollectionConfiguration>;

type CollectionName = string;

type CollectionParameters = dict<ConfigKey, ConfigValue>;

type CompilationJobArn = string;

type CompilationJobStatus = string;

type CompilationJobSummaries = vec<CompilationJobSummary>;

class CompilationJobSummary {
  public Timestamp $compilation_end_time;
  public CompilationJobArn $compilation_job_arn;
  public EntityName $compilation_job_name;
  public CompilationJobStatus $compilation_job_status;
  public Timestamp $compilation_start_time;
  public TargetDevice $compilation_target_device;
  public CreationTime $creation_time;
  public LastModifiedTime $last_modified_time;

  public function __construct(shape(
  ?'compilation_end_time' => Timestamp,
  ?'compilation_job_arn' => CompilationJobArn,
  ?'compilation_job_name' => EntityName,
  ?'compilation_job_status' => CompilationJobStatus,
  ?'compilation_start_time' => Timestamp,
  ?'compilation_target_device' => TargetDevice,
  ?'creation_time' => CreationTime,
  ?'last_modified_time' => LastModifiedTime,
  ) $s = shape()) {
    $this->compilation_end_time = $compilation_end_time ?? ;
    $this->compilation_job_arn = $compilation_job_arn ?? "";
    $this->compilation_job_name = $compilation_job_name ?? ;
    $this->compilation_job_status = $compilation_job_status ?? "";
    $this->compilation_start_time = $compilation_start_time ?? ;
    $this->compilation_target_device = $compilation_target_device ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->last_modified_time = $last_modified_time ?? 0;
  }
}

type CompressionType = string;

type CompressionTypes = vec<CompressionType>;

type ConfigKey = string;

type ConfigValue = string;

class ConflictException {
  public FailureReason $message;

  public function __construct(shape(
  ?'message' => FailureReason,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ContainerArgument = string;

type ContainerArguments = vec<ContainerArgument>;

class ContainerDefinition {
  public ContainerHostname $container_hostname;
  public EnvironmentMap $environment;
  public Image $image;
  public ContainerMode $mode;
  public Url $model_data_url;
  public ArnOrName $model_package_name;

  public function __construct(shape(
  ?'container_hostname' => ContainerHostname,
  ?'environment' => EnvironmentMap,
  ?'image' => Image,
  ?'mode' => ContainerMode,
  ?'model_data_url' => Url,
  ?'model_package_name' => ArnOrName,
  ) $s = shape()) {
    $this->container_hostname = $container_hostname ?? "";
    $this->environment = $environment ?? ;
    $this->image = $image ?? "";
    $this->mode = $mode ?? ;
    $this->model_data_url = $model_data_url ?? ;
    $this->model_package_name = $model_package_name ?? ;
  }
}

type ContainerDefinitionList = vec<ContainerDefinition>;

type ContainerEntrypoint = vec<ContainerEntrypointString>;

type ContainerEntrypointString = string;

type ContainerHostname = string;

type ContainerMode = string;

type ContentClassifier = string;

type ContentClassifiers = vec<ContentClassifier>;

type ContentType = string;

type ContentTypes = vec<ContentType>;

class ContinuousParameterRange {
  public ParameterValue $max_value;
  public ParameterValue $min_value;
  public ParameterKey $name;
  public HyperParameterScalingType $scaling_type;

  public function __construct(shape(
  ?'max_value' => ParameterValue,
  ?'min_value' => ParameterValue,
  ?'name' => ParameterKey,
  ?'scaling_type' => HyperParameterScalingType,
  ) $s = shape()) {
    $this->max_value = $max_value ?? ;
    $this->min_value = $min_value ?? ;
    $this->name = $name ?? ;
    $this->scaling_type = $scaling_type ?? ;
  }
}

class ContinuousParameterRangeSpecification {
  public ParameterValue $max_value;
  public ParameterValue $min_value;

  public function __construct(shape(
  ?'max_value' => ParameterValue,
  ?'min_value' => ParameterValue,
  ) $s = shape()) {
    $this->max_value = $max_value ?? ;
    $this->min_value = $min_value ?? ;
  }
}

type ContinuousParameterRanges = vec<ContinuousParameterRange>;

class CreateAlgorithmInput {
  public EntityDescription $algorithm_description;
  public EntityName $algorithm_name;
  public CertifyForMarketplace $certify_for_marketplace;
  public InferenceSpecification $inference_specification;
  public TrainingSpecification $training_specification;
  public AlgorithmValidationSpecification $validation_specification;

  public function __construct(shape(
  ?'algorithm_description' => EntityDescription,
  ?'algorithm_name' => EntityName,
  ?'certify_for_marketplace' => CertifyForMarketplace,
  ?'inference_specification' => InferenceSpecification,
  ?'training_specification' => TrainingSpecification,
  ?'validation_specification' => AlgorithmValidationSpecification,
  ) $s = shape()) {
    $this->algorithm_description = $algorithm_description ?? ;
    $this->algorithm_name = $algorithm_name ?? ;
    $this->certify_for_marketplace = $certify_for_marketplace ?? false;
    $this->inference_specification = $inference_specification ?? null;
    $this->training_specification = $training_specification ?? null;
    $this->validation_specification = $validation_specification ?? ;
  }
}

class CreateAlgorithmOutput {
  public AlgorithmArn $algorithm_arn;

  public function __construct(shape(
  ?'algorithm_arn' => AlgorithmArn,
  ) $s = shape()) {
    $this->algorithm_arn = $algorithm_arn ?? "";
  }
}

class CreateAppRequest {
  public AppName $app_name;
  public AppType $app_type;
  public DomainId $domain_id;
  public ResourceSpec $resource_spec;
  public TagList $tags;
  public UserProfileName $user_profile_name;

  public function __construct(shape(
  ?'app_name' => AppName,
  ?'app_type' => AppType,
  ?'domain_id' => DomainId,
  ?'resource_spec' => ResourceSpec,
  ?'tags' => TagList,
  ?'user_profile_name' => UserProfileName,
  ) $s = shape()) {
    $this->app_name = $app_name ?? "";
    $this->app_type = $app_type ?? "";
    $this->domain_id = $domain_id ?? "";
    $this->resource_spec = $resource_spec ?? null;
    $this->tags = $tags ?? ;
    $this->user_profile_name = $user_profile_name ?? "";
  }
}

class CreateAppResponse {
  public AppArn $app_arn;

  public function __construct(shape(
  ?'app_arn' => AppArn,
  ) $s = shape()) {
    $this->app_arn = $app_arn ?? "";
  }
}

class CreateAutoMLJobRequest {
  public AutoMLJobConfig $auto_ml_job_config;
  public AutoMLJobName $auto_ml_job_name;
  public AutoMLJobObjective $auto_ml_job_objective;
  public GenerateCandidateDefinitionsOnly $generate_candidate_definitions_only;
  public AutoMLInputDataConfig $input_data_config;
  public AutoMLOutputDataConfig $output_data_config;
  public ProblemType $problem_type;
  public RoleArn $role_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'auto_ml_job_config' => AutoMLJobConfig,
  ?'auto_ml_job_name' => AutoMLJobName,
  ?'auto_ml_job_objective' => AutoMLJobObjective,
  ?'generate_candidate_definitions_only' => GenerateCandidateDefinitionsOnly,
  ?'input_data_config' => AutoMLInputDataConfig,
  ?'output_data_config' => AutoMLOutputDataConfig,
  ?'problem_type' => ProblemType,
  ?'role_arn' => RoleArn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->auto_ml_job_config = $auto_ml_job_config ?? null;
    $this->auto_ml_job_name = $auto_ml_job_name ?? "";
    $this->auto_ml_job_objective = $auto_ml_job_objective ?? null;
    $this->generate_candidate_definitions_only = $generate_candidate_definitions_only ?? false;
    $this->input_data_config = $input_data_config ?? [];
    $this->output_data_config = $output_data_config ?? null;
    $this->problem_type = $problem_type ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->tags = $tags ?? ;
  }
}

class CreateAutoMLJobResponse {
  public AutoMLJobArn $auto_ml_job_arn;

  public function __construct(shape(
  ?'auto_ml_job_arn' => AutoMLJobArn,
  ) $s = shape()) {
    $this->auto_ml_job_arn = $auto_ml_job_arn ?? "";
  }
}

class CreateCodeRepositoryInput {
  public EntityName $code_repository_name;
  public GitConfig $git_config;

  public function __construct(shape(
  ?'code_repository_name' => EntityName,
  ?'git_config' => GitConfig,
  ) $s = shape()) {
    $this->code_repository_name = $code_repository_name ?? ;
    $this->git_config = $git_config ?? null;
  }
}

class CreateCodeRepositoryOutput {
  public CodeRepositoryArn $code_repository_arn;

  public function __construct(shape(
  ?'code_repository_arn' => CodeRepositoryArn,
  ) $s = shape()) {
    $this->code_repository_arn = $code_repository_arn ?? "";
  }
}

class CreateCompilationJobRequest {
  public EntityName $compilation_job_name;
  public InputConfig $input_config;
  public OutputConfig $output_config;
  public RoleArn $role_arn;
  public StoppingCondition $stopping_condition;

  public function __construct(shape(
  ?'compilation_job_name' => EntityName,
  ?'input_config' => InputConfig,
  ?'output_config' => OutputConfig,
  ?'role_arn' => RoleArn,
  ?'stopping_condition' => StoppingCondition,
  ) $s = shape()) {
    $this->compilation_job_name = $compilation_job_name ?? ;
    $this->input_config = $input_config ?? null;
    $this->output_config = $output_config ?? null;
    $this->role_arn = $role_arn ?? "";
    $this->stopping_condition = $stopping_condition ?? null;
  }
}

class CreateCompilationJobResponse {
  public CompilationJobArn $compilation_job_arn;

  public function __construct(shape(
  ?'compilation_job_arn' => CompilationJobArn,
  ) $s = shape()) {
    $this->compilation_job_arn = $compilation_job_arn ?? "";
  }
}

class CreateDomainRequest {
  public AuthMode $auth_mode;
  public UserSettings $default_user_settings;
  public DomainName $domain_name;
  public KmsKeyId $home_efs_file_system_kms_key_id;
  public Subnets $subnet_ids;
  public TagList $tags;
  public VpcId $vpc_id;

  public function __construct(shape(
  ?'auth_mode' => AuthMode,
  ?'default_user_settings' => UserSettings,
  ?'domain_name' => DomainName,
  ?'home_efs_file_system_kms_key_id' => KmsKeyId,
  ?'subnet_ids' => Subnets,
  ?'tags' => TagList,
  ?'vpc_id' => VpcId,
  ) $s = shape()) {
    $this->auth_mode = $auth_mode ?? "";
    $this->default_user_settings = $default_user_settings ?? ;
    $this->domain_name = $domain_name ?? "";
    $this->home_efs_file_system_kms_key_id = $home_efs_file_system_kms_key_id ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
    $this->tags = $tags ?? ;
    $this->vpc_id = $vpc_id ?? "";
  }
}

class CreateDomainResponse {
  public DomainArn $domain_arn;
  public String1024 $url;

  public function __construct(shape(
  ?'domain_arn' => DomainArn,
  ?'url' => String1024,
  ) $s = shape()) {
    $this->domain_arn = $domain_arn ?? "";
    $this->url = $url ?? "";
  }
}

class CreateEndpointConfigInput {
  public DataCaptureConfig $data_capture_config;
  public EndpointConfigName $endpoint_config_name;
  public KmsKeyId $kms_key_id;
  public ProductionVariantList $production_variants;
  public TagList $tags;

  public function __construct(shape(
  ?'data_capture_config' => DataCaptureConfig,
  ?'endpoint_config_name' => EndpointConfigName,
  ?'kms_key_id' => KmsKeyId,
  ?'production_variants' => ProductionVariantList,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->data_capture_config = $data_capture_config ?? null;
    $this->endpoint_config_name = $endpoint_config_name ?? "";
    $this->kms_key_id = $kms_key_id ?? "";
    $this->production_variants = $production_variants ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateEndpointConfigOutput {
  public EndpointConfigArn $endpoint_config_arn;

  public function __construct(shape(
  ?'endpoint_config_arn' => EndpointConfigArn,
  ) $s = shape()) {
    $this->endpoint_config_arn = $endpoint_config_arn ?? "";
  }
}

class CreateEndpointInput {
  public EndpointConfigName $endpoint_config_name;
  public EndpointName $endpoint_name;
  public TagList $tags;

  public function __construct(shape(
  ?'endpoint_config_name' => EndpointConfigName,
  ?'endpoint_name' => EndpointName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->endpoint_config_name = $endpoint_config_name ?? "";
    $this->endpoint_name = $endpoint_name ?? "";
    $this->tags = $tags ?? ;
  }
}

class CreateEndpointOutput {
  public EndpointArn $endpoint_arn;

  public function __construct(shape(
  ?'endpoint_arn' => EndpointArn,
  ) $s = shape()) {
    $this->endpoint_arn = $endpoint_arn ?? "";
  }
}

class CreateExperimentRequest {
  public ExperimentDescription $description;
  public ExperimentEntityName $display_name;
  public ExperimentEntityName $experiment_name;
  public TagList $tags;

  public function __construct(shape(
  ?'description' => ExperimentDescription,
  ?'display_name' => ExperimentEntityName,
  ?'experiment_name' => ExperimentEntityName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->display_name = $display_name ?? ;
    $this->experiment_name = $experiment_name ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateExperimentResponse {
  public ExperimentArn $experiment_arn;

  public function __construct(shape(
  ?'experiment_arn' => ExperimentArn,
  ) $s = shape()) {
    $this->experiment_arn = $experiment_arn ?? "";
  }
}

class CreateFlowDefinitionRequest {
  public FlowDefinitionName $flow_definition_name;
  public HumanLoopActivationConfig $human_loop_activation_config;
  public HumanLoopConfig $human_loop_config;
  public HumanLoopRequestSource $human_loop_request_source;
  public FlowDefinitionOutputConfig $output_config;
  public RoleArn $role_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'flow_definition_name' => FlowDefinitionName,
  ?'human_loop_activation_config' => HumanLoopActivationConfig,
  ?'human_loop_config' => HumanLoopConfig,
  ?'human_loop_request_source' => HumanLoopRequestSource,
  ?'output_config' => FlowDefinitionOutputConfig,
  ?'role_arn' => RoleArn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->flow_definition_name = $flow_definition_name ?? "";
    $this->human_loop_activation_config = $human_loop_activation_config ?? null;
    $this->human_loop_config = $human_loop_config ?? null;
    $this->human_loop_request_source = $human_loop_request_source ?? null;
    $this->output_config = $output_config ?? null;
    $this->role_arn = $role_arn ?? "";
    $this->tags = $tags ?? ;
  }
}

class CreateFlowDefinitionResponse {
  public FlowDefinitionArn $flow_definition_arn;

  public function __construct(shape(
  ?'flow_definition_arn' => FlowDefinitionArn,
  ) $s = shape()) {
    $this->flow_definition_arn = $flow_definition_arn ?? "";
  }
}

class CreateHumanTaskUiRequest {
  public HumanTaskUiName $human_task_ui_name;
  public TagList $tags;
  public UiTemplate $ui_template;

  public function __construct(shape(
  ?'human_task_ui_name' => HumanTaskUiName,
  ?'tags' => TagList,
  ?'ui_template' => UiTemplate,
  ) $s = shape()) {
    $this->human_task_ui_name = $human_task_ui_name ?? "";
    $this->tags = $tags ?? ;
    $this->ui_template = $ui_template ?? null;
  }
}

class CreateHumanTaskUiResponse {
  public HumanTaskUiArn $human_task_ui_arn;

  public function __construct(shape(
  ?'human_task_ui_arn' => HumanTaskUiArn,
  ) $s = shape()) {
    $this->human_task_ui_arn = $human_task_ui_arn ?? "";
  }
}

class CreateHyperParameterTuningJobRequest {
  public HyperParameterTuningJobConfig $hyper_parameter_tuning_job_config;
  public HyperParameterTuningJobName $hyper_parameter_tuning_job_name;
  public TagList $tags;
  public HyperParameterTrainingJobDefinition $training_job_definition;
  public HyperParameterTrainingJobDefinitions $training_job_definitions;
  public HyperParameterTuningJobWarmStartConfig $warm_start_config;

  public function __construct(shape(
  ?'hyper_parameter_tuning_job_config' => HyperParameterTuningJobConfig,
  ?'hyper_parameter_tuning_job_name' => HyperParameterTuningJobName,
  ?'tags' => TagList,
  ?'training_job_definition' => HyperParameterTrainingJobDefinition,
  ?'training_job_definitions' => HyperParameterTrainingJobDefinitions,
  ?'warm_start_config' => HyperParameterTuningJobWarmStartConfig,
  ) $s = shape()) {
    $this->hyper_parameter_tuning_job_config = $hyper_parameter_tuning_job_config ?? null;
    $this->hyper_parameter_tuning_job_name = $hyper_parameter_tuning_job_name ?? "";
    $this->tags = $tags ?? ;
    $this->training_job_definition = $training_job_definition ?? null;
    $this->training_job_definitions = $training_job_definitions ?? ;
    $this->warm_start_config = $warm_start_config ?? ;
  }
}

class CreateHyperParameterTuningJobResponse {
  public HyperParameterTuningJobArn $hyper_parameter_tuning_job_arn;

  public function __construct(shape(
  ?'hyper_parameter_tuning_job_arn' => HyperParameterTuningJobArn,
  ) $s = shape()) {
    $this->hyper_parameter_tuning_job_arn = $hyper_parameter_tuning_job_arn ?? "";
  }
}

class CreateLabelingJobRequest {
  public HumanTaskConfig $human_task_config;
  public LabelingJobInputConfig $input_config;
  public LabelAttributeName $label_attribute_name;
  public S3Uri $label_category_config_s_3_uri;
  public LabelingJobAlgorithmsConfig $labeling_job_algorithms_config;
  public LabelingJobName $labeling_job_name;
  public LabelingJobOutputConfig $output_config;
  public RoleArn $role_arn;
  public LabelingJobStoppingConditions $stopping_conditions;
  public TagList $tags;

  public function __construct(shape(
  ?'human_task_config' => HumanTaskConfig,
  ?'input_config' => LabelingJobInputConfig,
  ?'label_attribute_name' => LabelAttributeName,
  ?'label_category_config_s_3_uri' => S3Uri,
  ?'labeling_job_algorithms_config' => LabelingJobAlgorithmsConfig,
  ?'labeling_job_name' => LabelingJobName,
  ?'output_config' => LabelingJobOutputConfig,
  ?'role_arn' => RoleArn,
  ?'stopping_conditions' => LabelingJobStoppingConditions,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->human_task_config = $human_task_config ?? null;
    $this->input_config = $input_config ?? null;
    $this->label_attribute_name = $label_attribute_name ?? "";
    $this->label_category_config_s_3_uri = $label_category_config_s_3_uri ?? ;
    $this->labeling_job_algorithms_config = $labeling_job_algorithms_config ?? null;
    $this->labeling_job_name = $labeling_job_name ?? "";
    $this->output_config = $output_config ?? null;
    $this->role_arn = $role_arn ?? "";
    $this->stopping_conditions = $stopping_conditions ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateLabelingJobResponse {
  public LabelingJobArn $labeling_job_arn;

  public function __construct(shape(
  ?'labeling_job_arn' => LabelingJobArn,
  ) $s = shape()) {
    $this->labeling_job_arn = $labeling_job_arn ?? "";
  }
}

class CreateModelInput {
  public ContainerDefinitionList $containers;
  public boolean $enable_network_isolation;
  public RoleArn $execution_role_arn;
  public ModelName $model_name;
  public ContainerDefinition $primary_container;
  public TagList $tags;
  public VpcConfig $vpc_config;

  public function __construct(shape(
  ?'containers' => ContainerDefinitionList,
  ?'enable_network_isolation' => boolean,
  ?'execution_role_arn' => RoleArn,
  ?'model_name' => ModelName,
  ?'primary_container' => ContainerDefinition,
  ?'tags' => TagList,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->containers = $containers ?? ;
    $this->enable_network_isolation = $enable_network_isolation ?? ;
    $this->execution_role_arn = $execution_role_arn ?? ;
    $this->model_name = $model_name ?? "";
    $this->primary_container = $primary_container ?? ;
    $this->tags = $tags ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

class CreateModelOutput {
  public ModelArn $model_arn;

  public function __construct(shape(
  ?'model_arn' => ModelArn,
  ) $s = shape()) {
    $this->model_arn = $model_arn ?? "";
  }
}

class CreateModelPackageInput {
  public CertifyForMarketplace $certify_for_marketplace;
  public InferenceSpecification $inference_specification;
  public EntityDescription $model_package_description;
  public EntityName $model_package_name;
  public SourceAlgorithmSpecification $source_algorithm_specification;
  public ModelPackageValidationSpecification $validation_specification;

  public function __construct(shape(
  ?'certify_for_marketplace' => CertifyForMarketplace,
  ?'inference_specification' => InferenceSpecification,
  ?'model_package_description' => EntityDescription,
  ?'model_package_name' => EntityName,
  ?'source_algorithm_specification' => SourceAlgorithmSpecification,
  ?'validation_specification' => ModelPackageValidationSpecification,
  ) $s = shape()) {
    $this->certify_for_marketplace = $certify_for_marketplace ?? false;
    $this->inference_specification = $inference_specification ?? null;
    $this->model_package_description = $model_package_description ?? ;
    $this->model_package_name = $model_package_name ?? ;
    $this->source_algorithm_specification = $source_algorithm_specification ?? null;
    $this->validation_specification = $validation_specification ?? ;
  }
}

class CreateModelPackageOutput {
  public ModelPackageArn $model_package_arn;

  public function __construct(shape(
  ?'model_package_arn' => ModelPackageArn,
  ) $s = shape()) {
    $this->model_package_arn = $model_package_arn ?? "";
  }
}

class CreateMonitoringScheduleRequest {
  public MonitoringScheduleConfig $monitoring_schedule_config;
  public MonitoringScheduleName $monitoring_schedule_name;
  public TagList $tags;

  public function __construct(shape(
  ?'monitoring_schedule_config' => MonitoringScheduleConfig,
  ?'monitoring_schedule_name' => MonitoringScheduleName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->monitoring_schedule_config = $monitoring_schedule_config ?? null;
    $this->monitoring_schedule_name = $monitoring_schedule_name ?? "";
    $this->tags = $tags ?? ;
  }
}

class CreateMonitoringScheduleResponse {
  public MonitoringScheduleArn $monitoring_schedule_arn;

  public function __construct(shape(
  ?'monitoring_schedule_arn' => MonitoringScheduleArn,
  ) $s = shape()) {
    $this->monitoring_schedule_arn = $monitoring_schedule_arn ?? "";
  }
}

class CreateNotebookInstanceInput {
  public NotebookInstanceAcceleratorTypes $accelerator_types;
  public AdditionalCodeRepositoryNamesOrUrls $additional_code_repositories;
  public CodeRepositoryNameOrUrl $default_code_repository;
  public DirectInternetAccess $direct_internet_access;
  public InstanceType $instance_type;
  public KmsKeyId $kms_key_id;
  public NotebookInstanceLifecycleConfigName $lifecycle_config_name;
  public NotebookInstanceName $notebook_instance_name;
  public RoleArn $role_arn;
  public RootAccess $root_access;
  public SecurityGroupIds $security_group_ids;
  public SubnetId $subnet_id;
  public TagList $tags;
  public NotebookInstanceVolumeSizeInGB $volume_size_in_gb;

  public function __construct(shape(
  ?'accelerator_types' => NotebookInstanceAcceleratorTypes,
  ?'additional_code_repositories' => AdditionalCodeRepositoryNamesOrUrls,
  ?'default_code_repository' => CodeRepositoryNameOrUrl,
  ?'direct_internet_access' => DirectInternetAccess,
  ?'instance_type' => InstanceType,
  ?'kms_key_id' => KmsKeyId,
  ?'lifecycle_config_name' => NotebookInstanceLifecycleConfigName,
  ?'notebook_instance_name' => NotebookInstanceName,
  ?'role_arn' => RoleArn,
  ?'root_access' => RootAccess,
  ?'security_group_ids' => SecurityGroupIds,
  ?'subnet_id' => SubnetId,
  ?'tags' => TagList,
  ?'volume_size_in_gb' => NotebookInstanceVolumeSizeInGB,
  ) $s = shape()) {
    $this->accelerator_types = $accelerator_types ?? ;
    $this->additional_code_repositories = $additional_code_repositories ?? ;
    $this->default_code_repository = $default_code_repository ?? ;
    $this->direct_internet_access = $direct_internet_access ?? "";
    $this->instance_type = $instance_type ?? "";
    $this->kms_key_id = $kms_key_id ?? "";
    $this->lifecycle_config_name = $lifecycle_config_name ?? ;
    $this->notebook_instance_name = $notebook_instance_name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->root_access = $root_access ?? "";
    $this->security_group_ids = $security_group_ids ?? [];
    $this->subnet_id = $subnet_id ?? "";
    $this->tags = $tags ?? ;
    $this->volume_size_in_gb = $volume_size_in_gb ?? 0;
  }
}

class CreateNotebookInstanceLifecycleConfigInput {
  public NotebookInstanceLifecycleConfigName $notebook_instance_lifecycle_config_name;
  public NotebookInstanceLifecycleConfigList $on_create;
  public NotebookInstanceLifecycleConfigList $on_start;

  public function __construct(shape(
  ?'notebook_instance_lifecycle_config_name' => NotebookInstanceLifecycleConfigName,
  ?'on_create' => NotebookInstanceLifecycleConfigList,
  ?'on_start' => NotebookInstanceLifecycleConfigList,
  ) $s = shape()) {
    $this->notebook_instance_lifecycle_config_name = $notebook_instance_lifecycle_config_name ?? "";
    $this->on_create = $on_create ?? ;
    $this->on_start = $on_start ?? ;
  }
}

class CreateNotebookInstanceLifecycleConfigOutput {
  public NotebookInstanceLifecycleConfigArn $notebook_instance_lifecycle_config_arn;

  public function __construct(shape(
  ?'notebook_instance_lifecycle_config_arn' => NotebookInstanceLifecycleConfigArn,
  ) $s = shape()) {
    $this->notebook_instance_lifecycle_config_arn = $notebook_instance_lifecycle_config_arn ?? "";
  }
}

class CreateNotebookInstanceOutput {
  public NotebookInstanceArn $notebook_instance_arn;

  public function __construct(shape(
  ?'notebook_instance_arn' => NotebookInstanceArn,
  ) $s = shape()) {
    $this->notebook_instance_arn = $notebook_instance_arn ?? "";
  }
}

class CreatePresignedDomainUrlRequest {
  public DomainId $domain_id;
  public SessionExpirationDurationInSeconds $session_expiration_duration_in_seconds;
  public UserProfileName $user_profile_name;

  public function __construct(shape(
  ?'domain_id' => DomainId,
  ?'session_expiration_duration_in_seconds' => SessionExpirationDurationInSeconds,
  ?'user_profile_name' => UserProfileName,
  ) $s = shape()) {
    $this->domain_id = $domain_id ?? "";
    $this->session_expiration_duration_in_seconds = $session_expiration_duration_in_seconds ?? 0;
    $this->user_profile_name = $user_profile_name ?? "";
  }
}

class CreatePresignedDomainUrlResponse {
  public PresignedDomainUrl $authorized_url;

  public function __construct(shape(
  ?'authorized_url' => PresignedDomainUrl,
  ) $s = shape()) {
    $this->authorized_url = $authorized_url ?? ;
  }
}

class CreatePresignedNotebookInstanceUrlInput {
  public NotebookInstanceName $notebook_instance_name;
  public SessionExpirationDurationInSeconds $session_expiration_duration_in_seconds;

  public function __construct(shape(
  ?'notebook_instance_name' => NotebookInstanceName,
  ?'session_expiration_duration_in_seconds' => SessionExpirationDurationInSeconds,
  ) $s = shape()) {
    $this->notebook_instance_name = $notebook_instance_name ?? "";
    $this->session_expiration_duration_in_seconds = $session_expiration_duration_in_seconds ?? 0;
  }
}

class CreatePresignedNotebookInstanceUrlOutput {
  public NotebookInstanceUrl $authorized_url;

  public function __construct(shape(
  ?'authorized_url' => NotebookInstanceUrl,
  ) $s = shape()) {
    $this->authorized_url = $authorized_url ?? ;
  }
}

class CreateProcessingJobRequest {
  public AppSpecification $app_specification;
  public ProcessingEnvironmentMap $environment;
  public ExperimentConfig $experiment_config;
  public NetworkConfig $network_config;
  public ProcessingInputs $processing_inputs;
  public ProcessingJobName $processing_job_name;
  public ProcessingOutputConfig $processing_output_config;
  public ProcessingResources $processing_resources;
  public RoleArn $role_arn;
  public ProcessingStoppingCondition $stopping_condition;
  public TagList $tags;

  public function __construct(shape(
  ?'app_specification' => AppSpecification,
  ?'environment' => ProcessingEnvironmentMap,
  ?'experiment_config' => ExperimentConfig,
  ?'network_config' => NetworkConfig,
  ?'processing_inputs' => ProcessingInputs,
  ?'processing_job_name' => ProcessingJobName,
  ?'processing_output_config' => ProcessingOutputConfig,
  ?'processing_resources' => ProcessingResources,
  ?'role_arn' => RoleArn,
  ?'stopping_condition' => ProcessingStoppingCondition,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->app_specification = $app_specification ?? null;
    $this->environment = $environment ?? ;
    $this->experiment_config = $experiment_config ?? null;
    $this->network_config = $network_config ?? null;
    $this->processing_inputs = $processing_inputs ?? [];
    $this->processing_job_name = $processing_job_name ?? "";
    $this->processing_output_config = $processing_output_config ?? null;
    $this->processing_resources = $processing_resources ?? null;
    $this->role_arn = $role_arn ?? "";
    $this->stopping_condition = $stopping_condition ?? null;
    $this->tags = $tags ?? ;
  }
}

class CreateProcessingJobResponse {
  public ProcessingJobArn $processing_job_arn;

  public function __construct(shape(
  ?'processing_job_arn' => ProcessingJobArn,
  ) $s = shape()) {
    $this->processing_job_arn = $processing_job_arn ?? "";
  }
}

class CreateTrainingJobRequest {
  public AlgorithmSpecification $algorithm_specification;
  public CheckpointConfig $checkpoint_config;
  public DebugHookConfig $debug_hook_config;
  public DebugRuleConfigurations $debug_rule_configurations;
  public boolean $enable_inter_container_traffic_encryption;
  public boolean $enable_managed_spot_training;
  public boolean $enable_network_isolation;
  public ExperimentConfig $experiment_config;
  public HyperParameters $hyper_parameters;
  public InputDataConfig $input_data_config;
  public OutputDataConfig $output_data_config;
  public ResourceConfig $resource_config;
  public RoleArn $role_arn;
  public StoppingCondition $stopping_condition;
  public TagList $tags;
  public TensorBoardOutputConfig $tensor_board_output_config;
  public TrainingJobName $training_job_name;
  public VpcConfig $vpc_config;

  public function __construct(shape(
  ?'algorithm_specification' => AlgorithmSpecification,
  ?'checkpoint_config' => CheckpointConfig,
  ?'debug_hook_config' => DebugHookConfig,
  ?'debug_rule_configurations' => DebugRuleConfigurations,
  ?'enable_inter_container_traffic_encryption' => boolean,
  ?'enable_managed_spot_training' => boolean,
  ?'enable_network_isolation' => boolean,
  ?'experiment_config' => ExperimentConfig,
  ?'hyper_parameters' => HyperParameters,
  ?'input_data_config' => InputDataConfig,
  ?'output_data_config' => OutputDataConfig,
  ?'resource_config' => ResourceConfig,
  ?'role_arn' => RoleArn,
  ?'stopping_condition' => StoppingCondition,
  ?'tags' => TagList,
  ?'tensor_board_output_config' => TensorBoardOutputConfig,
  ?'training_job_name' => TrainingJobName,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->algorithm_specification = $algorithm_specification ?? null;
    $this->checkpoint_config = $checkpoint_config ?? null;
    $this->debug_hook_config = $debug_hook_config ?? null;
    $this->debug_rule_configurations = $debug_rule_configurations ?? [];
    $this->enable_inter_container_traffic_encryption = $enable_inter_container_traffic_encryption ?? ;
    $this->enable_managed_spot_training = $enable_managed_spot_training ?? ;
    $this->enable_network_isolation = $enable_network_isolation ?? ;
    $this->experiment_config = $experiment_config ?? null;
    $this->hyper_parameters = $hyper_parameters ?? [];
    $this->input_data_config = $input_data_config ?? [];
    $this->output_data_config = $output_data_config ?? null;
    $this->resource_config = $resource_config ?? null;
    $this->role_arn = $role_arn ?? "";
    $this->stopping_condition = $stopping_condition ?? null;
    $this->tags = $tags ?? ;
    $this->tensor_board_output_config = $tensor_board_output_config ?? null;
    $this->training_job_name = $training_job_name ?? "";
    $this->vpc_config = $vpc_config ?? null;
  }
}

class CreateTrainingJobResponse {
  public TrainingJobArn $training_job_arn;

  public function __construct(shape(
  ?'training_job_arn' => TrainingJobArn,
  ) $s = shape()) {
    $this->training_job_arn = $training_job_arn ?? "";
  }
}

class CreateTransformJobRequest {
  public BatchStrategy $batch_strategy;
  public DataProcessing $data_processing;
  public TransformEnvironmentMap $environment;
  public ExperimentConfig $experiment_config;
  public MaxConcurrentTransforms $max_concurrent_transforms;
  public MaxPayloadInMB $max_payload_in_mb;
  public ModelName $model_name;
  public TagList $tags;
  public TransformInput $transform_input;
  public TransformJobName $transform_job_name;
  public TransformOutput $transform_output;
  public TransformResources $transform_resources;

  public function __construct(shape(
  ?'batch_strategy' => BatchStrategy,
  ?'data_processing' => DataProcessing,
  ?'environment' => TransformEnvironmentMap,
  ?'experiment_config' => ExperimentConfig,
  ?'max_concurrent_transforms' => MaxConcurrentTransforms,
  ?'max_payload_in_mb' => MaxPayloadInMB,
  ?'model_name' => ModelName,
  ?'tags' => TagList,
  ?'transform_input' => TransformInput,
  ?'transform_job_name' => TransformJobName,
  ?'transform_output' => TransformOutput,
  ?'transform_resources' => TransformResources,
  ) $s = shape()) {
    $this->batch_strategy = $batch_strategy ?? "";
    $this->data_processing = $data_processing ?? null;
    $this->environment = $environment ?? ;
    $this->experiment_config = $experiment_config ?? null;
    $this->max_concurrent_transforms = $max_concurrent_transforms ?? 0;
    $this->max_payload_in_mb = $max_payload_in_mb ?? 0;
    $this->model_name = $model_name ?? "";
    $this->tags = $tags ?? ;
    $this->transform_input = $transform_input ?? null;
    $this->transform_job_name = $transform_job_name ?? "";
    $this->transform_output = $transform_output ?? null;
    $this->transform_resources = $transform_resources ?? null;
  }
}

class CreateTransformJobResponse {
  public TransformJobArn $transform_job_arn;

  public function __construct(shape(
  ?'transform_job_arn' => TransformJobArn,
  ) $s = shape()) {
    $this->transform_job_arn = $transform_job_arn ?? "";
  }
}

class CreateTrialComponentRequest {
  public ExperimentEntityName $display_name;
  public Timestamp $end_time;
  public TrialComponentArtifacts $input_artifacts;
  public TrialComponentArtifacts $output_artifacts;
  public TrialComponentParameters $parameters;
  public Timestamp $start_time;
  public TrialComponentStatus $status;
  public TagList $tags;
  public ExperimentEntityName $trial_component_name;

  public function __construct(shape(
  ?'display_name' => ExperimentEntityName,
  ?'end_time' => Timestamp,
  ?'input_artifacts' => TrialComponentArtifacts,
  ?'output_artifacts' => TrialComponentArtifacts,
  ?'parameters' => TrialComponentParameters,
  ?'start_time' => Timestamp,
  ?'status' => TrialComponentStatus,
  ?'tags' => TagList,
  ?'trial_component_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->display_name = $display_name ?? ;
    $this->end_time = $end_time ?? ;
    $this->input_artifacts = $input_artifacts ?? ;
    $this->output_artifacts = $output_artifacts ?? ;
    $this->parameters = $parameters ?? ;
    $this->start_time = $start_time ?? ;
    $this->status = $status ?? ;
    $this->tags = $tags ?? ;
    $this->trial_component_name = $trial_component_name ?? ;
  }
}

class CreateTrialComponentResponse {
  public TrialComponentArn $trial_component_arn;

  public function __construct(shape(
  ?'trial_component_arn' => TrialComponentArn,
  ) $s = shape()) {
    $this->trial_component_arn = $trial_component_arn ?? "";
  }
}

class CreateTrialRequest {
  public ExperimentEntityName $display_name;
  public ExperimentEntityName $experiment_name;
  public TagList $tags;
  public ExperimentEntityName $trial_name;

  public function __construct(shape(
  ?'display_name' => ExperimentEntityName,
  ?'experiment_name' => ExperimentEntityName,
  ?'tags' => TagList,
  ?'trial_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->display_name = $display_name ?? ;
    $this->experiment_name = $experiment_name ?? ;
    $this->tags = $tags ?? ;
    $this->trial_name = $trial_name ?? ;
  }
}

class CreateTrialResponse {
  public TrialArn $trial_arn;

  public function __construct(shape(
  ?'trial_arn' => TrialArn,
  ) $s = shape()) {
    $this->trial_arn = $trial_arn ?? "";
  }
}

class CreateUserProfileRequest {
  public DomainId $domain_id;
  public SingleSignOnUserIdentifier $single_sign_on_user_identifier;
  public String256 $single_sign_on_user_value;
  public TagList $tags;
  public UserProfileName $user_profile_name;
  public UserSettings $user_settings;

  public function __construct(shape(
  ?'domain_id' => DomainId,
  ?'single_sign_on_user_identifier' => SingleSignOnUserIdentifier,
  ?'single_sign_on_user_value' => String256,
  ?'tags' => TagList,
  ?'user_profile_name' => UserProfileName,
  ?'user_settings' => UserSettings,
  ) $s = shape()) {
    $this->domain_id = $domain_id ?? "";
    $this->single_sign_on_user_identifier = $single_sign_on_user_identifier ?? "";
    $this->single_sign_on_user_value = $single_sign_on_user_value ?? ;
    $this->tags = $tags ?? ;
    $this->user_profile_name = $user_profile_name ?? "";
    $this->user_settings = $user_settings ?? null;
  }
}

class CreateUserProfileResponse {
  public UserProfileArn $user_profile_arn;

  public function __construct(shape(
  ?'user_profile_arn' => UserProfileArn,
  ) $s = shape()) {
    $this->user_profile_arn = $user_profile_arn ?? "";
  }
}

class CreateWorkteamRequest {
  public String200 $description;
  public MemberDefinitions $member_definitions;
  public NotificationConfiguration $notification_configuration;
  public TagList $tags;
  public WorkteamName $workteam_name;

  public function __construct(shape(
  ?'description' => String200,
  ?'member_definitions' => MemberDefinitions,
  ?'notification_configuration' => NotificationConfiguration,
  ?'tags' => TagList,
  ?'workteam_name' => WorkteamName,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->member_definitions = $member_definitions ?? [];
    $this->notification_configuration = $notification_configuration ?? null;
    $this->tags = $tags ?? ;
    $this->workteam_name = $workteam_name ?? "";
  }
}

class CreateWorkteamResponse {
  public WorkteamArn $workteam_arn;

  public function __construct(shape(
  ?'workteam_arn' => WorkteamArn,
  ) $s = shape()) {
    $this->workteam_arn = $workteam_arn ?? "";
  }
}

type CreationTime = int;

type CsvContentType = string;

type CsvContentTypes = vec<CsvContentType>;

class DataCaptureConfig {
  public CaptureContentTypeHeader $capture_content_type_header;
  public CaptureOptionList $capture_options;
  public DestinationS3Uri $destination_s_3_uri;
  public EnableCapture $enable_capture;
  public SamplingPercentage $initial_sampling_percentage;
  public KmsKeyId $kms_key_id;

  public function __construct(shape(
  ?'capture_content_type_header' => CaptureContentTypeHeader,
  ?'capture_options' => CaptureOptionList,
  ?'destination_s_3_uri' => DestinationS3Uri,
  ?'enable_capture' => EnableCapture,
  ?'initial_sampling_percentage' => SamplingPercentage,
  ?'kms_key_id' => KmsKeyId,
  ) $s = shape()) {
    $this->capture_content_type_header = $capture_content_type_header ?? null;
    $this->capture_options = $capture_options ?? ;
    $this->destination_s_3_uri = $destination_s_3_uri ?? "";
    $this->enable_capture = $enable_capture ?? false;
    $this->initial_sampling_percentage = $initial_sampling_percentage ?? ;
    $this->kms_key_id = $kms_key_id ?? "";
  }
}

class DataCaptureConfigSummary {
  public CaptureStatus $capture_status;
  public SamplingPercentage $current_sampling_percentage;
  public DestinationS3Uri $destination_s_3_uri;
  public EnableCapture $enable_capture;
  public KmsKeyId $kms_key_id;

  public function __construct(shape(
  ?'capture_status' => CaptureStatus,
  ?'current_sampling_percentage' => SamplingPercentage,
  ?'destination_s_3_uri' => DestinationS3Uri,
  ?'enable_capture' => EnableCapture,
  ?'kms_key_id' => KmsKeyId,
  ) $s = shape()) {
    $this->capture_status = $capture_status ?? "";
    $this->current_sampling_percentage = $current_sampling_percentage ?? ;
    $this->destination_s_3_uri = $destination_s_3_uri ?? "";
    $this->enable_capture = $enable_capture ?? false;
    $this->kms_key_id = $kms_key_id ?? "";
  }
}

type DataExplorationNotebookLocation = string;

type DataInputConfig = string;

class DataProcessing {
  public JsonPath $input_filter;
  public JoinSource $join_source;
  public JsonPath $output_filter;

  public function __construct(shape(
  ?'input_filter' => JsonPath,
  ?'join_source' => JoinSource,
  ?'output_filter' => JsonPath,
  ) $s = shape()) {
    $this->input_filter = $input_filter ?? ;
    $this->join_source = $join_source ?? "";
    $this->output_filter = $output_filter ?? ;
  }
}

class DataSource {
  public FileSystemDataSource $file_system_data_source;
  public S3DataSource $s_3_data_source;

  public function __construct(shape(
  ?'file_system_data_source' => FileSystemDataSource,
  ?'s_3_data_source' => S3DataSource,
  ) $s = shape()) {
    $this->file_system_data_source = $file_system_data_source ?? null;
    $this->s_3_data_source = $s_3_data_source ?? null;
  }
}

class DebugHookConfig {
  public CollectionConfigurations $collection_configurations;
  public HookParameters $hook_parameters;
  public DirectoryPath $local_path;
  public S3Uri $s_3_output_path;

  public function __construct(shape(
  ?'collection_configurations' => CollectionConfigurations,
  ?'hook_parameters' => HookParameters,
  ?'local_path' => DirectoryPath,
  ?'s_3_output_path' => S3Uri,
  ) $s = shape()) {
    $this->collection_configurations = $collection_configurations ?? [];
    $this->hook_parameters = $hook_parameters ?? [];
    $this->local_path = $local_path ?? ;
    $this->s_3_output_path = $s_3_output_path ?? ;
  }
}

class DebugRuleConfiguration {
  public ProcessingInstanceType $instance_type;
  public DirectoryPath $local_path;
  public RuleConfigurationName $rule_configuration_name;
  public AlgorithmImage $rule_evaluator_image;
  public RuleParameters $rule_parameters;
  public S3Uri $s_3_output_path;
  public OptionalVolumeSizeInGB $volume_size_in_gb;

  public function __construct(shape(
  ?'instance_type' => ProcessingInstanceType,
  ?'local_path' => DirectoryPath,
  ?'rule_configuration_name' => RuleConfigurationName,
  ?'rule_evaluator_image' => AlgorithmImage,
  ?'rule_parameters' => RuleParameters,
  ?'s_3_output_path' => S3Uri,
  ?'volume_size_in_gb' => OptionalVolumeSizeInGB,
  ) $s = shape()) {
    $this->instance_type = $instance_type ?? "";
    $this->local_path = $local_path ?? ;
    $this->rule_configuration_name = $rule_configuration_name ?? "";
    $this->rule_evaluator_image = $rule_evaluator_image ?? ;
    $this->rule_parameters = $rule_parameters ?? [];
    $this->s_3_output_path = $s_3_output_path ?? ;
    $this->volume_size_in_gb = $volume_size_in_gb ?? 0;
  }
}

type DebugRuleConfigurations = vec<DebugRuleConfiguration>;

class DebugRuleEvaluationStatus {
  public Timestamp $last_modified_time;
  public RuleConfigurationName $rule_configuration_name;
  public ProcessingJobArn $rule_evaluation_job_arn;
  public RuleEvaluationStatus $rule_evaluation_status;
  public StatusDetails $status_details;

  public function __construct(shape(
  ?'last_modified_time' => Timestamp,
  ?'rule_configuration_name' => RuleConfigurationName,
  ?'rule_evaluation_job_arn' => ProcessingJobArn,
  ?'rule_evaluation_status' => RuleEvaluationStatus,
  ?'status_details' => StatusDetails,
  ) $s = shape()) {
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->rule_configuration_name = $rule_configuration_name ?? "";
    $this->rule_evaluation_job_arn = $rule_evaluation_job_arn ?? ;
    $this->rule_evaluation_status = $rule_evaluation_status ?? "";
    $this->status_details = $status_details ?? "";
  }
}

type DebugRuleEvaluationStatuses = vec<DebugRuleEvaluationStatus>;

class DeleteAlgorithmInput {
  public EntityName $algorithm_name;

  public function __construct(shape(
  ?'algorithm_name' => EntityName,
  ) $s = shape()) {
    $this->algorithm_name = $algorithm_name ?? ;
  }
}

class DeleteAppRequest {
  public AppName $app_name;
  public AppType $app_type;
  public DomainId $domain_id;
  public UserProfileName $user_profile_name;

  public function __construct(shape(
  ?'app_name' => AppName,
  ?'app_type' => AppType,
  ?'domain_id' => DomainId,
  ?'user_profile_name' => UserProfileName,
  ) $s = shape()) {
    $this->app_name = $app_name ?? "";
    $this->app_type = $app_type ?? "";
    $this->domain_id = $domain_id ?? "";
    $this->user_profile_name = $user_profile_name ?? "";
  }
}

class DeleteCodeRepositoryInput {
  public EntityName $code_repository_name;

  public function __construct(shape(
  ?'code_repository_name' => EntityName,
  ) $s = shape()) {
    $this->code_repository_name = $code_repository_name ?? ;
  }
}

class DeleteDomainRequest {
  public DomainId $domain_id;
  public RetentionPolicy $retention_policy;

  public function __construct(shape(
  ?'domain_id' => DomainId,
  ?'retention_policy' => RetentionPolicy,
  ) $s = shape()) {
    $this->domain_id = $domain_id ?? "";
    $this->retention_policy = $retention_policy ?? null;
  }
}

class DeleteEndpointConfigInput {
  public EndpointConfigName $endpoint_config_name;

  public function __construct(shape(
  ?'endpoint_config_name' => EndpointConfigName,
  ) $s = shape()) {
    $this->endpoint_config_name = $endpoint_config_name ?? "";
  }
}

class DeleteEndpointInput {
  public EndpointName $endpoint_name;

  public function __construct(shape(
  ?'endpoint_name' => EndpointName,
  ) $s = shape()) {
    $this->endpoint_name = $endpoint_name ?? "";
  }
}

class DeleteExperimentRequest {
  public ExperimentEntityName $experiment_name;

  public function __construct(shape(
  ?'experiment_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->experiment_name = $experiment_name ?? ;
  }
}

class DeleteExperimentResponse {
  public ExperimentArn $experiment_arn;

  public function __construct(shape(
  ?'experiment_arn' => ExperimentArn,
  ) $s = shape()) {
    $this->experiment_arn = $experiment_arn ?? "";
  }
}

class DeleteFlowDefinitionRequest {
  public FlowDefinitionName $flow_definition_name;

  public function __construct(shape(
  ?'flow_definition_name' => FlowDefinitionName,
  ) $s = shape()) {
    $this->flow_definition_name = $flow_definition_name ?? "";
  }
}

class DeleteFlowDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteModelInput {
  public ModelName $model_name;

  public function __construct(shape(
  ?'model_name' => ModelName,
  ) $s = shape()) {
    $this->model_name = $model_name ?? "";
  }
}

class DeleteModelPackageInput {
  public EntityName $model_package_name;

  public function __construct(shape(
  ?'model_package_name' => EntityName,
  ) $s = shape()) {
    $this->model_package_name = $model_package_name ?? ;
  }
}

class DeleteMonitoringScheduleRequest {
  public MonitoringScheduleName $monitoring_schedule_name;

  public function __construct(shape(
  ?'monitoring_schedule_name' => MonitoringScheduleName,
  ) $s = shape()) {
    $this->monitoring_schedule_name = $monitoring_schedule_name ?? "";
  }
}

class DeleteNotebookInstanceInput {
  public NotebookInstanceName $notebook_instance_name;

  public function __construct(shape(
  ?'notebook_instance_name' => NotebookInstanceName,
  ) $s = shape()) {
    $this->notebook_instance_name = $notebook_instance_name ?? "";
  }
}

class DeleteNotebookInstanceLifecycleConfigInput {
  public NotebookInstanceLifecycleConfigName $notebook_instance_lifecycle_config_name;

  public function __construct(shape(
  ?'notebook_instance_lifecycle_config_name' => NotebookInstanceLifecycleConfigName,
  ) $s = shape()) {
    $this->notebook_instance_lifecycle_config_name = $notebook_instance_lifecycle_config_name ?? "";
  }
}

class DeleteTagsInput {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? ;
  }
}

class DeleteTagsOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTrialComponentRequest {
  public ExperimentEntityName $trial_component_name;

  public function __construct(shape(
  ?'trial_component_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->trial_component_name = $trial_component_name ?? ;
  }
}

class DeleteTrialComponentResponse {
  public TrialComponentArn $trial_component_arn;

  public function __construct(shape(
  ?'trial_component_arn' => TrialComponentArn,
  ) $s = shape()) {
    $this->trial_component_arn = $trial_component_arn ?? "";
  }
}

class DeleteTrialRequest {
  public ExperimentEntityName $trial_name;

  public function __construct(shape(
  ?'trial_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->trial_name = $trial_name ?? ;
  }
}

class DeleteTrialResponse {
  public TrialArn $trial_arn;

  public function __construct(shape(
  ?'trial_arn' => TrialArn,
  ) $s = shape()) {
    $this->trial_arn = $trial_arn ?? "";
  }
}

class DeleteUserProfileRequest {
  public DomainId $domain_id;
  public UserProfileName $user_profile_name;

  public function __construct(shape(
  ?'domain_id' => DomainId,
  ?'user_profile_name' => UserProfileName,
  ) $s = shape()) {
    $this->domain_id = $domain_id ?? "";
    $this->user_profile_name = $user_profile_name ?? "";
  }
}

class DeleteWorkteamRequest {
  public WorkteamName $workteam_name;

  public function __construct(shape(
  ?'workteam_name' => WorkteamName,
  ) $s = shape()) {
    $this->workteam_name = $workteam_name ?? "";
  }
}

class DeleteWorkteamResponse {
  public Success $success;

  public function __construct(shape(
  ?'success' => Success,
  ) $s = shape()) {
    $this->success = $success ?? false;
  }
}

class DeployedImage {
  public Timestamp $resolution_time;
  public Image $resolved_image;
  public Image $specified_image;

  public function __construct(shape(
  ?'resolution_time' => Timestamp,
  ?'resolved_image' => Image,
  ?'specified_image' => Image,
  ) $s = shape()) {
    $this->resolution_time = $resolution_time ?? ;
    $this->resolved_image = $resolved_image ?? ;
    $this->specified_image = $specified_image ?? ;
  }
}

type DeployedImages = vec<DeployedImage>;

class DescribeAlgorithmInput {
  public ArnOrName $algorithm_name;

  public function __construct(shape(
  ?'algorithm_name' => ArnOrName,
  ) $s = shape()) {
    $this->algorithm_name = $algorithm_name ?? ;
  }
}

class DescribeAlgorithmOutput {
  public AlgorithmArn $algorithm_arn;
  public EntityDescription $algorithm_description;
  public EntityName $algorithm_name;
  public AlgorithmStatus $algorithm_status;
  public AlgorithmStatusDetails $algorithm_status_details;
  public CertifyForMarketplace $certify_for_marketplace;
  public CreationTime $creation_time;
  public InferenceSpecification $inference_specification;
  public ProductId $product_id;
  public TrainingSpecification $training_specification;
  public AlgorithmValidationSpecification $validation_specification;

  public function __construct(shape(
  ?'algorithm_arn' => AlgorithmArn,
  ?'algorithm_description' => EntityDescription,
  ?'algorithm_name' => EntityName,
  ?'algorithm_status' => AlgorithmStatus,
  ?'algorithm_status_details' => AlgorithmStatusDetails,
  ?'certify_for_marketplace' => CertifyForMarketplace,
  ?'creation_time' => CreationTime,
  ?'inference_specification' => InferenceSpecification,
  ?'product_id' => ProductId,
  ?'training_specification' => TrainingSpecification,
  ?'validation_specification' => AlgorithmValidationSpecification,
  ) $s = shape()) {
    $this->algorithm_arn = $algorithm_arn ?? "";
    $this->algorithm_description = $algorithm_description ?? ;
    $this->algorithm_name = $algorithm_name ?? ;
    $this->algorithm_status = $algorithm_status ?? "";
    $this->algorithm_status_details = $algorithm_status_details ?? null;
    $this->certify_for_marketplace = $certify_for_marketplace ?? false;
    $this->creation_time = $creation_time ?? 0;
    $this->inference_specification = $inference_specification ?? null;
    $this->product_id = $product_id ?? "";
    $this->training_specification = $training_specification ?? null;
    $this->validation_specification = $validation_specification ?? ;
  }
}

class DescribeAppRequest {
  public AppName $app_name;
  public AppType $app_type;
  public DomainId $domain_id;
  public UserProfileName $user_profile_name;

  public function __construct(shape(
  ?'app_name' => AppName,
  ?'app_type' => AppType,
  ?'domain_id' => DomainId,
  ?'user_profile_name' => UserProfileName,
  ) $s = shape()) {
    $this->app_name = $app_name ?? "";
    $this->app_type = $app_type ?? "";
    $this->domain_id = $domain_id ?? "";
    $this->user_profile_name = $user_profile_name ?? "";
  }
}

class DescribeAppResponse {
  public AppArn $app_arn;
  public AppName $app_name;
  public AppType $app_type;
  public CreationTime $creation_time;
  public DomainId $domain_id;
  public FailureReason $failure_reason;
  public Timestamp $last_health_check_timestamp;
  public Timestamp $last_user_activity_timestamp;
  public ResourceSpec $resource_spec;
  public AppStatus $status;
  public UserProfileName $user_profile_name;

  public function __construct(shape(
  ?'app_arn' => AppArn,
  ?'app_name' => AppName,
  ?'app_type' => AppType,
  ?'creation_time' => CreationTime,
  ?'domain_id' => DomainId,
  ?'failure_reason' => FailureReason,
  ?'last_health_check_timestamp' => Timestamp,
  ?'last_user_activity_timestamp' => Timestamp,
  ?'resource_spec' => ResourceSpec,
  ?'status' => AppStatus,
  ?'user_profile_name' => UserProfileName,
  ) $s = shape()) {
    $this->app_arn = $app_arn ?? "";
    $this->app_name = $app_name ?? "";
    $this->app_type = $app_type ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->domain_id = $domain_id ?? "";
    $this->failure_reason = $failure_reason ?? "";
    $this->last_health_check_timestamp = $last_health_check_timestamp ?? ;
    $this->last_user_activity_timestamp = $last_user_activity_timestamp ?? ;
    $this->resource_spec = $resource_spec ?? null;
    $this->status = $status ?? ;
    $this->user_profile_name = $user_profile_name ?? "";
  }
}

class DescribeAutoMLJobRequest {
  public AutoMLJobName $auto_ml_job_name;

  public function __construct(shape(
  ?'auto_ml_job_name' => AutoMLJobName,
  ) $s = shape()) {
    $this->auto_ml_job_name = $auto_ml_job_name ?? "";
  }
}

class DescribeAutoMLJobResponse {
  public AutoMLJobArn $auto_ml_job_arn;
  public AutoMLJobArtifacts $auto_ml_job_artifacts;
  public AutoMLJobConfig $auto_ml_job_config;
  public AutoMLJobName $auto_ml_job_name;
  public AutoMLJobObjective $auto_ml_job_objective;
  public AutoMLJobSecondaryStatus $auto_ml_job_secondary_status;
  public AutoMLJobStatus $auto_ml_job_status;
  public AutoMLCandidate $best_candidate;
  public Timestamp $creation_time;
  public Timestamp $end_time;
  public AutoMLFailureReason $failure_reason;
  public GenerateCandidateDefinitionsOnly $generate_candidate_definitions_only;
  public AutoMLInputDataConfig $input_data_config;
  public Timestamp $last_modified_time;
  public AutoMLOutputDataConfig $output_data_config;
  public ProblemType $problem_type;
  public ResolvedAttributes $resolved_attributes;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'auto_ml_job_arn' => AutoMLJobArn,
  ?'auto_ml_job_artifacts' => AutoMLJobArtifacts,
  ?'auto_ml_job_config' => AutoMLJobConfig,
  ?'auto_ml_job_name' => AutoMLJobName,
  ?'auto_ml_job_objective' => AutoMLJobObjective,
  ?'auto_ml_job_secondary_status' => AutoMLJobSecondaryStatus,
  ?'auto_ml_job_status' => AutoMLJobStatus,
  ?'best_candidate' => AutoMLCandidate,
  ?'creation_time' => Timestamp,
  ?'end_time' => Timestamp,
  ?'failure_reason' => AutoMLFailureReason,
  ?'generate_candidate_definitions_only' => GenerateCandidateDefinitionsOnly,
  ?'input_data_config' => AutoMLInputDataConfig,
  ?'last_modified_time' => Timestamp,
  ?'output_data_config' => AutoMLOutputDataConfig,
  ?'problem_type' => ProblemType,
  ?'resolved_attributes' => ResolvedAttributes,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->auto_ml_job_arn = $auto_ml_job_arn ?? "";
    $this->auto_ml_job_artifacts = $auto_ml_job_artifacts ?? null;
    $this->auto_ml_job_config = $auto_ml_job_config ?? null;
    $this->auto_ml_job_name = $auto_ml_job_name ?? "";
    $this->auto_ml_job_objective = $auto_ml_job_objective ?? null;
    $this->auto_ml_job_secondary_status = $auto_ml_job_secondary_status ?? "";
    $this->auto_ml_job_status = $auto_ml_job_status ?? "";
    $this->best_candidate = $best_candidate ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->end_time = $end_time ?? ;
    $this->failure_reason = $failure_reason ?? "";
    $this->generate_candidate_definitions_only = $generate_candidate_definitions_only ?? false;
    $this->input_data_config = $input_data_config ?? [];
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->output_data_config = $output_data_config ?? null;
    $this->problem_type = $problem_type ?? "";
    $this->resolved_attributes = $resolved_attributes ?? null;
    $this->role_arn = $role_arn ?? "";
  }
}

class DescribeCodeRepositoryInput {
  public EntityName $code_repository_name;

  public function __construct(shape(
  ?'code_repository_name' => EntityName,
  ) $s = shape()) {
    $this->code_repository_name = $code_repository_name ?? ;
  }
}

class DescribeCodeRepositoryOutput {
  public CodeRepositoryArn $code_repository_arn;
  public EntityName $code_repository_name;
  public CreationTime $creation_time;
  public GitConfig $git_config;
  public LastModifiedTime $last_modified_time;

  public function __construct(shape(
  ?'code_repository_arn' => CodeRepositoryArn,
  ?'code_repository_name' => EntityName,
  ?'creation_time' => CreationTime,
  ?'git_config' => GitConfig,
  ?'last_modified_time' => LastModifiedTime,
  ) $s = shape()) {
    $this->code_repository_arn = $code_repository_arn ?? "";
    $this->code_repository_name = $code_repository_name ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->git_config = $git_config ?? null;
    $this->last_modified_time = $last_modified_time ?? 0;
  }
}

class DescribeCompilationJobRequest {
  public EntityName $compilation_job_name;

  public function __construct(shape(
  ?'compilation_job_name' => EntityName,
  ) $s = shape()) {
    $this->compilation_job_name = $compilation_job_name ?? ;
  }
}

class DescribeCompilationJobResponse {
  public Timestamp $compilation_end_time;
  public CompilationJobArn $compilation_job_arn;
  public EntityName $compilation_job_name;
  public CompilationJobStatus $compilation_job_status;
  public Timestamp $compilation_start_time;
  public CreationTime $creation_time;
  public FailureReason $failure_reason;
  public InputConfig $input_config;
  public LastModifiedTime $last_modified_time;
  public ModelArtifacts $model_artifacts;
  public OutputConfig $output_config;
  public RoleArn $role_arn;
  public StoppingCondition $stopping_condition;

  public function __construct(shape(
  ?'compilation_end_time' => Timestamp,
  ?'compilation_job_arn' => CompilationJobArn,
  ?'compilation_job_name' => EntityName,
  ?'compilation_job_status' => CompilationJobStatus,
  ?'compilation_start_time' => Timestamp,
  ?'creation_time' => CreationTime,
  ?'failure_reason' => FailureReason,
  ?'input_config' => InputConfig,
  ?'last_modified_time' => LastModifiedTime,
  ?'model_artifacts' => ModelArtifacts,
  ?'output_config' => OutputConfig,
  ?'role_arn' => RoleArn,
  ?'stopping_condition' => StoppingCondition,
  ) $s = shape()) {
    $this->compilation_end_time = $compilation_end_time ?? ;
    $this->compilation_job_arn = $compilation_job_arn ?? "";
    $this->compilation_job_name = $compilation_job_name ?? ;
    $this->compilation_job_status = $compilation_job_status ?? "";
    $this->compilation_start_time = $compilation_start_time ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->failure_reason = $failure_reason ?? "";
    $this->input_config = $input_config ?? null;
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->model_artifacts = $model_artifacts ?? null;
    $this->output_config = $output_config ?? null;
    $this->role_arn = $role_arn ?? "";
    $this->stopping_condition = $stopping_condition ?? null;
  }
}

class DescribeDomainRequest {
  public DomainId $domain_id;

  public function __construct(shape(
  ?'domain_id' => DomainId,
  ) $s = shape()) {
    $this->domain_id = $domain_id ?? "";
  }
}

class DescribeDomainResponse {
  public AuthMode $auth_mode;
  public CreationTime $creation_time;
  public UserSettings $default_user_settings;
  public DomainArn $domain_arn;
  public DomainId $domain_id;
  public DomainName $domain_name;
  public FailureReason $failure_reason;
  public ResourceId $home_efs_file_system_id;
  public KmsKeyId $home_efs_file_system_kms_key_id;
  public LastModifiedTime $last_modified_time;
  public String256 $single_sign_on_managed_application_instance_id;
  public DomainStatus $status;
  public Subnets $subnet_ids;
  public String1024 $url;
  public VpcId $vpc_id;

  public function __construct(shape(
  ?'auth_mode' => AuthMode,
  ?'creation_time' => CreationTime,
  ?'default_user_settings' => UserSettings,
  ?'domain_arn' => DomainArn,
  ?'domain_id' => DomainId,
  ?'domain_name' => DomainName,
  ?'failure_reason' => FailureReason,
  ?'home_efs_file_system_id' => ResourceId,
  ?'home_efs_file_system_kms_key_id' => KmsKeyId,
  ?'last_modified_time' => LastModifiedTime,
  ?'single_sign_on_managed_application_instance_id' => String256,
  ?'status' => DomainStatus,
  ?'subnet_ids' => Subnets,
  ?'url' => String1024,
  ?'vpc_id' => VpcId,
  ) $s = shape()) {
    $this->auth_mode = $auth_mode ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->default_user_settings = $default_user_settings ?? ;
    $this->domain_arn = $domain_arn ?? "";
    $this->domain_id = $domain_id ?? "";
    $this->domain_name = $domain_name ?? "";
    $this->failure_reason = $failure_reason ?? "";
    $this->home_efs_file_system_id = $home_efs_file_system_id ?? ;
    $this->home_efs_file_system_kms_key_id = $home_efs_file_system_kms_key_id ?? ;
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->single_sign_on_managed_application_instance_id = $single_sign_on_managed_application_instance_id ?? ;
    $this->status = $status ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
    $this->url = $url ?? "";
    $this->vpc_id = $vpc_id ?? "";
  }
}

class DescribeEndpointConfigInput {
  public EndpointConfigName $endpoint_config_name;

  public function __construct(shape(
  ?'endpoint_config_name' => EndpointConfigName,
  ) $s = shape()) {
    $this->endpoint_config_name = $endpoint_config_name ?? "";
  }
}

class DescribeEndpointConfigOutput {
  public Timestamp $creation_time;
  public DataCaptureConfig $data_capture_config;
  public EndpointConfigArn $endpoint_config_arn;
  public EndpointConfigName $endpoint_config_name;
  public KmsKeyId $kms_key_id;
  public ProductionVariantList $production_variants;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'data_capture_config' => DataCaptureConfig,
  ?'endpoint_config_arn' => EndpointConfigArn,
  ?'endpoint_config_name' => EndpointConfigName,
  ?'kms_key_id' => KmsKeyId,
  ?'production_variants' => ProductionVariantList,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->data_capture_config = $data_capture_config ?? null;
    $this->endpoint_config_arn = $endpoint_config_arn ?? "";
    $this->endpoint_config_name = $endpoint_config_name ?? "";
    $this->kms_key_id = $kms_key_id ?? "";
    $this->production_variants = $production_variants ?? ;
  }
}

class DescribeEndpointInput {
  public EndpointName $endpoint_name;

  public function __construct(shape(
  ?'endpoint_name' => EndpointName,
  ) $s = shape()) {
    $this->endpoint_name = $endpoint_name ?? "";
  }
}

class DescribeEndpointOutput {
  public Timestamp $creation_time;
  public DataCaptureConfigSummary $data_capture_config;
  public EndpointArn $endpoint_arn;
  public EndpointConfigName $endpoint_config_name;
  public EndpointName $endpoint_name;
  public EndpointStatus $endpoint_status;
  public FailureReason $failure_reason;
  public Timestamp $last_modified_time;
  public ProductionVariantSummaryList $production_variants;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'data_capture_config' => DataCaptureConfigSummary,
  ?'endpoint_arn' => EndpointArn,
  ?'endpoint_config_name' => EndpointConfigName,
  ?'endpoint_name' => EndpointName,
  ?'endpoint_status' => EndpointStatus,
  ?'failure_reason' => FailureReason,
  ?'last_modified_time' => Timestamp,
  ?'production_variants' => ProductionVariantSummaryList,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->data_capture_config = $data_capture_config ?? null;
    $this->endpoint_arn = $endpoint_arn ?? "";
    $this->endpoint_config_name = $endpoint_config_name ?? "";
    $this->endpoint_name = $endpoint_name ?? "";
    $this->endpoint_status = $endpoint_status ?? "";
    $this->failure_reason = $failure_reason ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->production_variants = $production_variants ?? ;
  }
}

class DescribeExperimentRequest {
  public ExperimentEntityName $experiment_name;

  public function __construct(shape(
  ?'experiment_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->experiment_name = $experiment_name ?? ;
  }
}

class DescribeExperimentResponse {
  public UserContext $created_by;
  public Timestamp $creation_time;
  public ExperimentDescription $description;
  public ExperimentEntityName $display_name;
  public ExperimentArn $experiment_arn;
  public ExperimentEntityName $experiment_name;
  public UserContext $last_modified_by;
  public Timestamp $last_modified_time;
  public ExperimentSource $source;

  public function __construct(shape(
  ?'created_by' => UserContext,
  ?'creation_time' => Timestamp,
  ?'description' => ExperimentDescription,
  ?'display_name' => ExperimentEntityName,
  ?'experiment_arn' => ExperimentArn,
  ?'experiment_name' => ExperimentEntityName,
  ?'last_modified_by' => UserContext,
  ?'last_modified_time' => Timestamp,
  ?'source' => ExperimentSource,
  ) $s = shape()) {
    $this->created_by = $created_by ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->description = $description ?? ;
    $this->display_name = $display_name ?? ;
    $this->experiment_arn = $experiment_arn ?? "";
    $this->experiment_name = $experiment_name ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->source = $source ?? ;
  }
}

class DescribeFlowDefinitionRequest {
  public FlowDefinitionName $flow_definition_name;

  public function __construct(shape(
  ?'flow_definition_name' => FlowDefinitionName,
  ) $s = shape()) {
    $this->flow_definition_name = $flow_definition_name ?? "";
  }
}

class DescribeFlowDefinitionResponse {
  public Timestamp $creation_time;
  public FailureReason $failure_reason;
  public FlowDefinitionArn $flow_definition_arn;
  public FlowDefinitionName $flow_definition_name;
  public FlowDefinitionStatus $flow_definition_status;
  public HumanLoopActivationConfig $human_loop_activation_config;
  public HumanLoopConfig $human_loop_config;
  public HumanLoopRequestSource $human_loop_request_source;
  public FlowDefinitionOutputConfig $output_config;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'failure_reason' => FailureReason,
  ?'flow_definition_arn' => FlowDefinitionArn,
  ?'flow_definition_name' => FlowDefinitionName,
  ?'flow_definition_status' => FlowDefinitionStatus,
  ?'human_loop_activation_config' => HumanLoopActivationConfig,
  ?'human_loop_config' => HumanLoopConfig,
  ?'human_loop_request_source' => HumanLoopRequestSource,
  ?'output_config' => FlowDefinitionOutputConfig,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->failure_reason = $failure_reason ?? "";
    $this->flow_definition_arn = $flow_definition_arn ?? "";
    $this->flow_definition_name = $flow_definition_name ?? "";
    $this->flow_definition_status = $flow_definition_status ?? "";
    $this->human_loop_activation_config = $human_loop_activation_config ?? null;
    $this->human_loop_config = $human_loop_config ?? null;
    $this->human_loop_request_source = $human_loop_request_source ?? null;
    $this->output_config = $output_config ?? null;
    $this->role_arn = $role_arn ?? "";
  }
}

class DescribeHumanTaskUiRequest {
  public HumanTaskUiName $human_task_ui_name;

  public function __construct(shape(
  ?'human_task_ui_name' => HumanTaskUiName,
  ) $s = shape()) {
    $this->human_task_ui_name = $human_task_ui_name ?? "";
  }
}

class DescribeHumanTaskUiResponse {
  public Timestamp $creation_time;
  public HumanTaskUiArn $human_task_ui_arn;
  public HumanTaskUiName $human_task_ui_name;
  public UiTemplateInfo $ui_template;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'human_task_ui_arn' => HumanTaskUiArn,
  ?'human_task_ui_name' => HumanTaskUiName,
  ?'ui_template' => UiTemplateInfo,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->human_task_ui_arn = $human_task_ui_arn ?? "";
    $this->human_task_ui_name = $human_task_ui_name ?? "";
    $this->ui_template = $ui_template ?? null;
  }
}

class DescribeHyperParameterTuningJobRequest {
  public HyperParameterTuningJobName $hyper_parameter_tuning_job_name;

  public function __construct(shape(
  ?'hyper_parameter_tuning_job_name' => HyperParameterTuningJobName,
  ) $s = shape()) {
    $this->hyper_parameter_tuning_job_name = $hyper_parameter_tuning_job_name ?? "";
  }
}

class DescribeHyperParameterTuningJobResponse {
  public HyperParameterTrainingJobSummary $best_training_job;
  public Timestamp $creation_time;
  public FailureReason $failure_reason;
  public Timestamp $hyper_parameter_tuning_end_time;
  public HyperParameterTuningJobArn $hyper_parameter_tuning_job_arn;
  public HyperParameterTuningJobConfig $hyper_parameter_tuning_job_config;
  public HyperParameterTuningJobName $hyper_parameter_tuning_job_name;
  public HyperParameterTuningJobStatus $hyper_parameter_tuning_job_status;
  public Timestamp $last_modified_time;
  public ObjectiveStatusCounters $objective_status_counters;
  public HyperParameterTrainingJobSummary $overall_best_training_job;
  public HyperParameterTrainingJobDefinition $training_job_definition;
  public HyperParameterTrainingJobDefinitions $training_job_definitions;
  public TrainingJobStatusCounters $training_job_status_counters;
  public HyperParameterTuningJobWarmStartConfig $warm_start_config;

  public function __construct(shape(
  ?'best_training_job' => HyperParameterTrainingJobSummary,
  ?'creation_time' => Timestamp,
  ?'failure_reason' => FailureReason,
  ?'hyper_parameter_tuning_end_time' => Timestamp,
  ?'hyper_parameter_tuning_job_arn' => HyperParameterTuningJobArn,
  ?'hyper_parameter_tuning_job_config' => HyperParameterTuningJobConfig,
  ?'hyper_parameter_tuning_job_name' => HyperParameterTuningJobName,
  ?'hyper_parameter_tuning_job_status' => HyperParameterTuningJobStatus,
  ?'last_modified_time' => Timestamp,
  ?'objective_status_counters' => ObjectiveStatusCounters,
  ?'overall_best_training_job' => HyperParameterTrainingJobSummary,
  ?'training_job_definition' => HyperParameterTrainingJobDefinition,
  ?'training_job_definitions' => HyperParameterTrainingJobDefinitions,
  ?'training_job_status_counters' => TrainingJobStatusCounters,
  ?'warm_start_config' => HyperParameterTuningJobWarmStartConfig,
  ) $s = shape()) {
    $this->best_training_job = $best_training_job ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->failure_reason = $failure_reason ?? "";
    $this->hyper_parameter_tuning_end_time = $hyper_parameter_tuning_end_time ?? ;
    $this->hyper_parameter_tuning_job_arn = $hyper_parameter_tuning_job_arn ?? "";
    $this->hyper_parameter_tuning_job_config = $hyper_parameter_tuning_job_config ?? null;
    $this->hyper_parameter_tuning_job_name = $hyper_parameter_tuning_job_name ?? "";
    $this->hyper_parameter_tuning_job_status = $hyper_parameter_tuning_job_status ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->objective_status_counters = $objective_status_counters ?? null;
    $this->overall_best_training_job = $overall_best_training_job ?? ;
    $this->training_job_definition = $training_job_definition ?? null;
    $this->training_job_definitions = $training_job_definitions ?? ;
    $this->training_job_status_counters = $training_job_status_counters ?? null;
    $this->warm_start_config = $warm_start_config ?? ;
  }
}

class DescribeLabelingJobRequest {
  public LabelingJobName $labeling_job_name;

  public function __construct(shape(
  ?'labeling_job_name' => LabelingJobName,
  ) $s = shape()) {
    $this->labeling_job_name = $labeling_job_name ?? "";
  }
}

class DescribeLabelingJobResponse {
  public Timestamp $creation_time;
  public FailureReason $failure_reason;
  public HumanTaskConfig $human_task_config;
  public LabelingJobInputConfig $input_config;
  public JobReferenceCode $job_reference_code;
  public LabelAttributeName $label_attribute_name;
  public S3Uri $label_category_config_s_3_uri;
  public LabelCounters $label_counters;
  public LabelingJobAlgorithmsConfig $labeling_job_algorithms_config;
  public LabelingJobArn $labeling_job_arn;
  public LabelingJobName $labeling_job_name;
  public LabelingJobOutput $labeling_job_output;
  public LabelingJobStatus $labeling_job_status;
  public Timestamp $last_modified_time;
  public LabelingJobOutputConfig $output_config;
  public RoleArn $role_arn;
  public LabelingJobStoppingConditions $stopping_conditions;
  public TagList $tags;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'failure_reason' => FailureReason,
  ?'human_task_config' => HumanTaskConfig,
  ?'input_config' => LabelingJobInputConfig,
  ?'job_reference_code' => JobReferenceCode,
  ?'label_attribute_name' => LabelAttributeName,
  ?'label_category_config_s_3_uri' => S3Uri,
  ?'label_counters' => LabelCounters,
  ?'labeling_job_algorithms_config' => LabelingJobAlgorithmsConfig,
  ?'labeling_job_arn' => LabelingJobArn,
  ?'labeling_job_name' => LabelingJobName,
  ?'labeling_job_output' => LabelingJobOutput,
  ?'labeling_job_status' => LabelingJobStatus,
  ?'last_modified_time' => Timestamp,
  ?'output_config' => LabelingJobOutputConfig,
  ?'role_arn' => RoleArn,
  ?'stopping_conditions' => LabelingJobStoppingConditions,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->failure_reason = $failure_reason ?? "";
    $this->human_task_config = $human_task_config ?? null;
    $this->input_config = $input_config ?? null;
    $this->job_reference_code = $job_reference_code ?? "";
    $this->label_attribute_name = $label_attribute_name ?? "";
    $this->label_category_config_s_3_uri = $label_category_config_s_3_uri ?? ;
    $this->label_counters = $label_counters ?? null;
    $this->labeling_job_algorithms_config = $labeling_job_algorithms_config ?? null;
    $this->labeling_job_arn = $labeling_job_arn ?? "";
    $this->labeling_job_name = $labeling_job_name ?? "";
    $this->labeling_job_output = $labeling_job_output ?? null;
    $this->labeling_job_status = $labeling_job_status ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->output_config = $output_config ?? null;
    $this->role_arn = $role_arn ?? "";
    $this->stopping_conditions = $stopping_conditions ?? ;
    $this->tags = $tags ?? ;
  }
}

class DescribeModelInput {
  public ModelName $model_name;

  public function __construct(shape(
  ?'model_name' => ModelName,
  ) $s = shape()) {
    $this->model_name = $model_name ?? "";
  }
}

class DescribeModelOutput {
  public ContainerDefinitionList $containers;
  public Timestamp $creation_time;
  public boolean $enable_network_isolation;
  public RoleArn $execution_role_arn;
  public ModelArn $model_arn;
  public ModelName $model_name;
  public ContainerDefinition $primary_container;
  public VpcConfig $vpc_config;

  public function __construct(shape(
  ?'containers' => ContainerDefinitionList,
  ?'creation_time' => Timestamp,
  ?'enable_network_isolation' => boolean,
  ?'execution_role_arn' => RoleArn,
  ?'model_arn' => ModelArn,
  ?'model_name' => ModelName,
  ?'primary_container' => ContainerDefinition,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->containers = $containers ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->enable_network_isolation = $enable_network_isolation ?? ;
    $this->execution_role_arn = $execution_role_arn ?? ;
    $this->model_arn = $model_arn ?? "";
    $this->model_name = $model_name ?? "";
    $this->primary_container = $primary_container ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

class DescribeModelPackageInput {
  public ArnOrName $model_package_name;

  public function __construct(shape(
  ?'model_package_name' => ArnOrName,
  ) $s = shape()) {
    $this->model_package_name = $model_package_name ?? ;
  }
}

class DescribeModelPackageOutput {
  public CertifyForMarketplace $certify_for_marketplace;
  public CreationTime $creation_time;
  public InferenceSpecification $inference_specification;
  public ModelPackageArn $model_package_arn;
  public EntityDescription $model_package_description;
  public EntityName $model_package_name;
  public ModelPackageStatus $model_package_status;
  public ModelPackageStatusDetails $model_package_status_details;
  public SourceAlgorithmSpecification $source_algorithm_specification;
  public ModelPackageValidationSpecification $validation_specification;

  public function __construct(shape(
  ?'certify_for_marketplace' => CertifyForMarketplace,
  ?'creation_time' => CreationTime,
  ?'inference_specification' => InferenceSpecification,
  ?'model_package_arn' => ModelPackageArn,
  ?'model_package_description' => EntityDescription,
  ?'model_package_name' => EntityName,
  ?'model_package_status' => ModelPackageStatus,
  ?'model_package_status_details' => ModelPackageStatusDetails,
  ?'source_algorithm_specification' => SourceAlgorithmSpecification,
  ?'validation_specification' => ModelPackageValidationSpecification,
  ) $s = shape()) {
    $this->certify_for_marketplace = $certify_for_marketplace ?? false;
    $this->creation_time = $creation_time ?? 0;
    $this->inference_specification = $inference_specification ?? null;
    $this->model_package_arn = $model_package_arn ?? "";
    $this->model_package_description = $model_package_description ?? ;
    $this->model_package_name = $model_package_name ?? ;
    $this->model_package_status = $model_package_status ?? "";
    $this->model_package_status_details = $model_package_status_details ?? null;
    $this->source_algorithm_specification = $source_algorithm_specification ?? null;
    $this->validation_specification = $validation_specification ?? ;
  }
}

class DescribeMonitoringScheduleRequest {
  public MonitoringScheduleName $monitoring_schedule_name;

  public function __construct(shape(
  ?'monitoring_schedule_name' => MonitoringScheduleName,
  ) $s = shape()) {
    $this->monitoring_schedule_name = $monitoring_schedule_name ?? "";
  }
}

class DescribeMonitoringScheduleResponse {
  public Timestamp $creation_time;
  public EndpointName $endpoint_name;
  public FailureReason $failure_reason;
  public Timestamp $last_modified_time;
  public MonitoringExecutionSummary $last_monitoring_execution_summary;
  public MonitoringScheduleArn $monitoring_schedule_arn;
  public MonitoringScheduleConfig $monitoring_schedule_config;
  public MonitoringScheduleName $monitoring_schedule_name;
  public ScheduleStatus $monitoring_schedule_status;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'endpoint_name' => EndpointName,
  ?'failure_reason' => FailureReason,
  ?'last_modified_time' => Timestamp,
  ?'last_monitoring_execution_summary' => MonitoringExecutionSummary,
  ?'monitoring_schedule_arn' => MonitoringScheduleArn,
  ?'monitoring_schedule_config' => MonitoringScheduleConfig,
  ?'monitoring_schedule_name' => MonitoringScheduleName,
  ?'monitoring_schedule_status' => ScheduleStatus,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->endpoint_name = $endpoint_name ?? "";
    $this->failure_reason = $failure_reason ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->last_monitoring_execution_summary = $last_monitoring_execution_summary ?? ;
    $this->monitoring_schedule_arn = $monitoring_schedule_arn ?? "";
    $this->monitoring_schedule_config = $monitoring_schedule_config ?? null;
    $this->monitoring_schedule_name = $monitoring_schedule_name ?? "";
    $this->monitoring_schedule_status = $monitoring_schedule_status ?? ;
  }
}

class DescribeNotebookInstanceInput {
  public NotebookInstanceName $notebook_instance_name;

  public function __construct(shape(
  ?'notebook_instance_name' => NotebookInstanceName,
  ) $s = shape()) {
    $this->notebook_instance_name = $notebook_instance_name ?? "";
  }
}

class DescribeNotebookInstanceLifecycleConfigInput {
  public NotebookInstanceLifecycleConfigName $notebook_instance_lifecycle_config_name;

  public function __construct(shape(
  ?'notebook_instance_lifecycle_config_name' => NotebookInstanceLifecycleConfigName,
  ) $s = shape()) {
    $this->notebook_instance_lifecycle_config_name = $notebook_instance_lifecycle_config_name ?? "";
  }
}

class DescribeNotebookInstanceLifecycleConfigOutput {
  public CreationTime $creation_time;
  public LastModifiedTime $last_modified_time;
  public NotebookInstanceLifecycleConfigArn $notebook_instance_lifecycle_config_arn;
  public NotebookInstanceLifecycleConfigName $notebook_instance_lifecycle_config_name;
  public NotebookInstanceLifecycleConfigList $on_create;
  public NotebookInstanceLifecycleConfigList $on_start;

  public function __construct(shape(
  ?'creation_time' => CreationTime,
  ?'last_modified_time' => LastModifiedTime,
  ?'notebook_instance_lifecycle_config_arn' => NotebookInstanceLifecycleConfigArn,
  ?'notebook_instance_lifecycle_config_name' => NotebookInstanceLifecycleConfigName,
  ?'on_create' => NotebookInstanceLifecycleConfigList,
  ?'on_start' => NotebookInstanceLifecycleConfigList,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->notebook_instance_lifecycle_config_arn = $notebook_instance_lifecycle_config_arn ?? "";
    $this->notebook_instance_lifecycle_config_name = $notebook_instance_lifecycle_config_name ?? "";
    $this->on_create = $on_create ?? ;
    $this->on_start = $on_start ?? ;
  }
}

class DescribeNotebookInstanceOutput {
  public NotebookInstanceAcceleratorTypes $accelerator_types;
  public AdditionalCodeRepositoryNamesOrUrls $additional_code_repositories;
  public CreationTime $creation_time;
  public CodeRepositoryNameOrUrl $default_code_repository;
  public DirectInternetAccess $direct_internet_access;
  public FailureReason $failure_reason;
  public InstanceType $instance_type;
  public KmsKeyId $kms_key_id;
  public LastModifiedTime $last_modified_time;
  public NetworkInterfaceId $network_interface_id;
  public NotebookInstanceArn $notebook_instance_arn;
  public NotebookInstanceLifecycleConfigName $notebook_instance_lifecycle_config_name;
  public NotebookInstanceName $notebook_instance_name;
  public NotebookInstanceStatus $notebook_instance_status;
  public RoleArn $role_arn;
  public RootAccess $root_access;
  public SecurityGroupIds $security_groups;
  public SubnetId $subnet_id;
  public NotebookInstanceUrl $url;
  public NotebookInstanceVolumeSizeInGB $volume_size_in_gb;

  public function __construct(shape(
  ?'accelerator_types' => NotebookInstanceAcceleratorTypes,
  ?'additional_code_repositories' => AdditionalCodeRepositoryNamesOrUrls,
  ?'creation_time' => CreationTime,
  ?'default_code_repository' => CodeRepositoryNameOrUrl,
  ?'direct_internet_access' => DirectInternetAccess,
  ?'failure_reason' => FailureReason,
  ?'instance_type' => InstanceType,
  ?'kms_key_id' => KmsKeyId,
  ?'last_modified_time' => LastModifiedTime,
  ?'network_interface_id' => NetworkInterfaceId,
  ?'notebook_instance_arn' => NotebookInstanceArn,
  ?'notebook_instance_lifecycle_config_name' => NotebookInstanceLifecycleConfigName,
  ?'notebook_instance_name' => NotebookInstanceName,
  ?'notebook_instance_status' => NotebookInstanceStatus,
  ?'role_arn' => RoleArn,
  ?'root_access' => RootAccess,
  ?'security_groups' => SecurityGroupIds,
  ?'subnet_id' => SubnetId,
  ?'url' => NotebookInstanceUrl,
  ?'volume_size_in_gb' => NotebookInstanceVolumeSizeInGB,
  ) $s = shape()) {
    $this->accelerator_types = $accelerator_types ?? ;
    $this->additional_code_repositories = $additional_code_repositories ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->default_code_repository = $default_code_repository ?? ;
    $this->direct_internet_access = $direct_internet_access ?? "";
    $this->failure_reason = $failure_reason ?? "";
    $this->instance_type = $instance_type ?? "";
    $this->kms_key_id = $kms_key_id ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->network_interface_id = $network_interface_id ?? "";
    $this->notebook_instance_arn = $notebook_instance_arn ?? "";
    $this->notebook_instance_lifecycle_config_name = $notebook_instance_lifecycle_config_name ?? "";
    $this->notebook_instance_name = $notebook_instance_name ?? "";
    $this->notebook_instance_status = $notebook_instance_status ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->root_access = $root_access ?? "";
    $this->security_groups = $security_groups ?? ;
    $this->subnet_id = $subnet_id ?? "";
    $this->url = $url ?? "";
    $this->volume_size_in_gb = $volume_size_in_gb ?? 0;
  }
}

class DescribeProcessingJobRequest {
  public ProcessingJobName $processing_job_name;

  public function __construct(shape(
  ?'processing_job_name' => ProcessingJobName,
  ) $s = shape()) {
    $this->processing_job_name = $processing_job_name ?? "";
  }
}

class DescribeProcessingJobResponse {
  public AppSpecification $app_specification;
  public AutoMLJobArn $auto_ml_job_arn;
  public Timestamp $creation_time;
  public ProcessingEnvironmentMap $environment;
  public ExitMessage $exit_message;
  public ExperimentConfig $experiment_config;
  public FailureReason $failure_reason;
  public Timestamp $last_modified_time;
  public MonitoringScheduleArn $monitoring_schedule_arn;
  public NetworkConfig $network_config;
  public Timestamp $processing_end_time;
  public ProcessingInputs $processing_inputs;
  public ProcessingJobArn $processing_job_arn;
  public ProcessingJobName $processing_job_name;
  public ProcessingJobStatus $processing_job_status;
  public ProcessingOutputConfig $processing_output_config;
  public ProcessingResources $processing_resources;
  public Timestamp $processing_start_time;
  public RoleArn $role_arn;
  public ProcessingStoppingCondition $stopping_condition;
  public TrainingJobArn $training_job_arn;

  public function __construct(shape(
  ?'app_specification' => AppSpecification,
  ?'auto_ml_job_arn' => AutoMLJobArn,
  ?'creation_time' => Timestamp,
  ?'environment' => ProcessingEnvironmentMap,
  ?'exit_message' => ExitMessage,
  ?'experiment_config' => ExperimentConfig,
  ?'failure_reason' => FailureReason,
  ?'last_modified_time' => Timestamp,
  ?'monitoring_schedule_arn' => MonitoringScheduleArn,
  ?'network_config' => NetworkConfig,
  ?'processing_end_time' => Timestamp,
  ?'processing_inputs' => ProcessingInputs,
  ?'processing_job_arn' => ProcessingJobArn,
  ?'processing_job_name' => ProcessingJobName,
  ?'processing_job_status' => ProcessingJobStatus,
  ?'processing_output_config' => ProcessingOutputConfig,
  ?'processing_resources' => ProcessingResources,
  ?'processing_start_time' => Timestamp,
  ?'role_arn' => RoleArn,
  ?'stopping_condition' => ProcessingStoppingCondition,
  ?'training_job_arn' => TrainingJobArn,
  ) $s = shape()) {
    $this->app_specification = $app_specification ?? null;
    $this->auto_ml_job_arn = $auto_ml_job_arn ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->environment = $environment ?? ;
    $this->exit_message = $exit_message ?? "";
    $this->experiment_config = $experiment_config ?? null;
    $this->failure_reason = $failure_reason ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->monitoring_schedule_arn = $monitoring_schedule_arn ?? "";
    $this->network_config = $network_config ?? null;
    $this->processing_end_time = $processing_end_time ?? ;
    $this->processing_inputs = $processing_inputs ?? [];
    $this->processing_job_arn = $processing_job_arn ?? "";
    $this->processing_job_name = $processing_job_name ?? "";
    $this->processing_job_status = $processing_job_status ?? "";
    $this->processing_output_config = $processing_output_config ?? null;
    $this->processing_resources = $processing_resources ?? null;
    $this->processing_start_time = $processing_start_time ?? ;
    $this->role_arn = $role_arn ?? "";
    $this->stopping_condition = $stopping_condition ?? null;
    $this->training_job_arn = $training_job_arn ?? "";
  }
}

class DescribeSubscribedWorkteamRequest {
  public WorkteamArn $workteam_arn;

  public function __construct(shape(
  ?'workteam_arn' => WorkteamArn,
  ) $s = shape()) {
    $this->workteam_arn = $workteam_arn ?? "";
  }
}

class DescribeSubscribedWorkteamResponse {
  public SubscribedWorkteam $subscribed_workteam;

  public function __construct(shape(
  ?'subscribed_workteam' => SubscribedWorkteam,
  ) $s = shape()) {
    $this->subscribed_workteam = $subscribed_workteam ?? null;
  }
}

class DescribeTrainingJobRequest {
  public TrainingJobName $training_job_name;

  public function __construct(shape(
  ?'training_job_name' => TrainingJobName,
  ) $s = shape()) {
    $this->training_job_name = $training_job_name ?? "";
  }
}

class DescribeTrainingJobResponse {
  public AlgorithmSpecification $algorithm_specification;
  public AutoMLJobArn $auto_ml_job_arn;
  public BillableTimeInSeconds $billable_time_in_seconds;
  public CheckpointConfig $checkpoint_config;
  public Timestamp $creation_time;
  public DebugHookConfig $debug_hook_config;
  public DebugRuleConfigurations $debug_rule_configurations;
  public DebugRuleEvaluationStatuses $debug_rule_evaluation_statuses;
  public boolean $enable_inter_container_traffic_encryption;
  public boolean $enable_managed_spot_training;
  public boolean $enable_network_isolation;
  public ExperimentConfig $experiment_config;
  public FailureReason $failure_reason;
  public FinalMetricDataList $final_metric_data_list;
  public HyperParameters $hyper_parameters;
  public InputDataConfig $input_data_config;
  public LabelingJobArn $labeling_job_arn;
  public Timestamp $last_modified_time;
  public ModelArtifacts $model_artifacts;
  public OutputDataConfig $output_data_config;
  public ResourceConfig $resource_config;
  public RoleArn $role_arn;
  public SecondaryStatus $secondary_status;
  public SecondaryStatusTransitions $secondary_status_transitions;
  public StoppingCondition $stopping_condition;
  public TensorBoardOutputConfig $tensor_board_output_config;
  public Timestamp $training_end_time;
  public TrainingJobArn $training_job_arn;
  public TrainingJobName $training_job_name;
  public TrainingJobStatus $training_job_status;
  public Timestamp $training_start_time;
  public TrainingTimeInSeconds $training_time_in_seconds;
  public HyperParameterTuningJobArn $tuning_job_arn;
  public VpcConfig $vpc_config;

  public function __construct(shape(
  ?'algorithm_specification' => AlgorithmSpecification,
  ?'auto_ml_job_arn' => AutoMLJobArn,
  ?'billable_time_in_seconds' => BillableTimeInSeconds,
  ?'checkpoint_config' => CheckpointConfig,
  ?'creation_time' => Timestamp,
  ?'debug_hook_config' => DebugHookConfig,
  ?'debug_rule_configurations' => DebugRuleConfigurations,
  ?'debug_rule_evaluation_statuses' => DebugRuleEvaluationStatuses,
  ?'enable_inter_container_traffic_encryption' => boolean,
  ?'enable_managed_spot_training' => boolean,
  ?'enable_network_isolation' => boolean,
  ?'experiment_config' => ExperimentConfig,
  ?'failure_reason' => FailureReason,
  ?'final_metric_data_list' => FinalMetricDataList,
  ?'hyper_parameters' => HyperParameters,
  ?'input_data_config' => InputDataConfig,
  ?'labeling_job_arn' => LabelingJobArn,
  ?'last_modified_time' => Timestamp,
  ?'model_artifacts' => ModelArtifacts,
  ?'output_data_config' => OutputDataConfig,
  ?'resource_config' => ResourceConfig,
  ?'role_arn' => RoleArn,
  ?'secondary_status' => SecondaryStatus,
  ?'secondary_status_transitions' => SecondaryStatusTransitions,
  ?'stopping_condition' => StoppingCondition,
  ?'tensor_board_output_config' => TensorBoardOutputConfig,
  ?'training_end_time' => Timestamp,
  ?'training_job_arn' => TrainingJobArn,
  ?'training_job_name' => TrainingJobName,
  ?'training_job_status' => TrainingJobStatus,
  ?'training_start_time' => Timestamp,
  ?'training_time_in_seconds' => TrainingTimeInSeconds,
  ?'tuning_job_arn' => HyperParameterTuningJobArn,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->algorithm_specification = $algorithm_specification ?? null;
    $this->auto_ml_job_arn = $auto_ml_job_arn ?? "";
    $this->billable_time_in_seconds = $billable_time_in_seconds ?? 0;
    $this->checkpoint_config = $checkpoint_config ?? null;
    $this->creation_time = $creation_time ?? 0;
    $this->debug_hook_config = $debug_hook_config ?? null;
    $this->debug_rule_configurations = $debug_rule_configurations ?? [];
    $this->debug_rule_evaluation_statuses = $debug_rule_evaluation_statuses ?? [];
    $this->enable_inter_container_traffic_encryption = $enable_inter_container_traffic_encryption ?? ;
    $this->enable_managed_spot_training = $enable_managed_spot_training ?? ;
    $this->enable_network_isolation = $enable_network_isolation ?? ;
    $this->experiment_config = $experiment_config ?? null;
    $this->failure_reason = $failure_reason ?? "";
    $this->final_metric_data_list = $final_metric_data_list ?? [];
    $this->hyper_parameters = $hyper_parameters ?? [];
    $this->input_data_config = $input_data_config ?? [];
    $this->labeling_job_arn = $labeling_job_arn ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->model_artifacts = $model_artifacts ?? null;
    $this->output_data_config = $output_data_config ?? null;
    $this->resource_config = $resource_config ?? null;
    $this->role_arn = $role_arn ?? "";
    $this->secondary_status = $secondary_status ?? "";
    $this->secondary_status_transitions = $secondary_status_transitions ?? [];
    $this->stopping_condition = $stopping_condition ?? null;
    $this->tensor_board_output_config = $tensor_board_output_config ?? null;
    $this->training_end_time = $training_end_time ?? ;
    $this->training_job_arn = $training_job_arn ?? "";
    $this->training_job_name = $training_job_name ?? "";
    $this->training_job_status = $training_job_status ?? "";
    $this->training_start_time = $training_start_time ?? ;
    $this->training_time_in_seconds = $training_time_in_seconds ?? 0;
    $this->tuning_job_arn = $tuning_job_arn ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

class DescribeTransformJobRequest {
  public TransformJobName $transform_job_name;

  public function __construct(shape(
  ?'transform_job_name' => TransformJobName,
  ) $s = shape()) {
    $this->transform_job_name = $transform_job_name ?? "";
  }
}

class DescribeTransformJobResponse {
  public AutoMLJobArn $auto_ml_job_arn;
  public BatchStrategy $batch_strategy;
  public Timestamp $creation_time;
  public DataProcessing $data_processing;
  public TransformEnvironmentMap $environment;
  public ExperimentConfig $experiment_config;
  public FailureReason $failure_reason;
  public LabelingJobArn $labeling_job_arn;
  public MaxConcurrentTransforms $max_concurrent_transforms;
  public MaxPayloadInMB $max_payload_in_mb;
  public ModelName $model_name;
  public Timestamp $transform_end_time;
  public TransformInput $transform_input;
  public TransformJobArn $transform_job_arn;
  public TransformJobName $transform_job_name;
  public TransformJobStatus $transform_job_status;
  public TransformOutput $transform_output;
  public TransformResources $transform_resources;
  public Timestamp $transform_start_time;

  public function __construct(shape(
  ?'auto_ml_job_arn' => AutoMLJobArn,
  ?'batch_strategy' => BatchStrategy,
  ?'creation_time' => Timestamp,
  ?'data_processing' => DataProcessing,
  ?'environment' => TransformEnvironmentMap,
  ?'experiment_config' => ExperimentConfig,
  ?'failure_reason' => FailureReason,
  ?'labeling_job_arn' => LabelingJobArn,
  ?'max_concurrent_transforms' => MaxConcurrentTransforms,
  ?'max_payload_in_mb' => MaxPayloadInMB,
  ?'model_name' => ModelName,
  ?'transform_end_time' => Timestamp,
  ?'transform_input' => TransformInput,
  ?'transform_job_arn' => TransformJobArn,
  ?'transform_job_name' => TransformJobName,
  ?'transform_job_status' => TransformJobStatus,
  ?'transform_output' => TransformOutput,
  ?'transform_resources' => TransformResources,
  ?'transform_start_time' => Timestamp,
  ) $s = shape()) {
    $this->auto_ml_job_arn = $auto_ml_job_arn ?? "";
    $this->batch_strategy = $batch_strategy ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->data_processing = $data_processing ?? null;
    $this->environment = $environment ?? ;
    $this->experiment_config = $experiment_config ?? null;
    $this->failure_reason = $failure_reason ?? "";
    $this->labeling_job_arn = $labeling_job_arn ?? "";
    $this->max_concurrent_transforms = $max_concurrent_transforms ?? 0;
    $this->max_payload_in_mb = $max_payload_in_mb ?? 0;
    $this->model_name = $model_name ?? "";
    $this->transform_end_time = $transform_end_time ?? ;
    $this->transform_input = $transform_input ?? null;
    $this->transform_job_arn = $transform_job_arn ?? "";
    $this->transform_job_name = $transform_job_name ?? "";
    $this->transform_job_status = $transform_job_status ?? "";
    $this->transform_output = $transform_output ?? null;
    $this->transform_resources = $transform_resources ?? null;
    $this->transform_start_time = $transform_start_time ?? ;
  }
}

class DescribeTrialComponentRequest {
  public ExperimentEntityName $trial_component_name;

  public function __construct(shape(
  ?'trial_component_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->trial_component_name = $trial_component_name ?? ;
  }
}

class DescribeTrialComponentResponse {
  public UserContext $created_by;
  public Timestamp $creation_time;
  public ExperimentEntityName $display_name;
  public Timestamp $end_time;
  public TrialComponentArtifacts $input_artifacts;
  public UserContext $last_modified_by;
  public Timestamp $last_modified_time;
  public TrialComponentMetricSummaries $metrics;
  public TrialComponentArtifacts $output_artifacts;
  public TrialComponentParameters $parameters;
  public TrialComponentSource $source;
  public Timestamp $start_time;
  public TrialComponentStatus $status;
  public TrialComponentArn $trial_component_arn;
  public ExperimentEntityName $trial_component_name;

  public function __construct(shape(
  ?'created_by' => UserContext,
  ?'creation_time' => Timestamp,
  ?'display_name' => ExperimentEntityName,
  ?'end_time' => Timestamp,
  ?'input_artifacts' => TrialComponentArtifacts,
  ?'last_modified_by' => UserContext,
  ?'last_modified_time' => Timestamp,
  ?'metrics' => TrialComponentMetricSummaries,
  ?'output_artifacts' => TrialComponentArtifacts,
  ?'parameters' => TrialComponentParameters,
  ?'source' => TrialComponentSource,
  ?'start_time' => Timestamp,
  ?'status' => TrialComponentStatus,
  ?'trial_component_arn' => TrialComponentArn,
  ?'trial_component_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->created_by = $created_by ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->display_name = $display_name ?? ;
    $this->end_time = $end_time ?? ;
    $this->input_artifacts = $input_artifacts ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->metrics = $metrics ?? ;
    $this->output_artifacts = $output_artifacts ?? ;
    $this->parameters = $parameters ?? ;
    $this->source = $source ?? ;
    $this->start_time = $start_time ?? ;
    $this->status = $status ?? ;
    $this->trial_component_arn = $trial_component_arn ?? "";
    $this->trial_component_name = $trial_component_name ?? ;
  }
}

class DescribeTrialRequest {
  public ExperimentEntityName $trial_name;

  public function __construct(shape(
  ?'trial_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->trial_name = $trial_name ?? ;
  }
}

class DescribeTrialResponse {
  public UserContext $created_by;
  public Timestamp $creation_time;
  public ExperimentEntityName $display_name;
  public ExperimentEntityName $experiment_name;
  public UserContext $last_modified_by;
  public Timestamp $last_modified_time;
  public TrialSource $source;
  public TrialArn $trial_arn;
  public ExperimentEntityName $trial_name;

  public function __construct(shape(
  ?'created_by' => UserContext,
  ?'creation_time' => Timestamp,
  ?'display_name' => ExperimentEntityName,
  ?'experiment_name' => ExperimentEntityName,
  ?'last_modified_by' => UserContext,
  ?'last_modified_time' => Timestamp,
  ?'source' => TrialSource,
  ?'trial_arn' => TrialArn,
  ?'trial_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->created_by = $created_by ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->display_name = $display_name ?? ;
    $this->experiment_name = $experiment_name ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->source = $source ?? ;
    $this->trial_arn = $trial_arn ?? "";
    $this->trial_name = $trial_name ?? ;
  }
}

class DescribeUserProfileRequest {
  public DomainId $domain_id;
  public UserProfileName $user_profile_name;

  public function __construct(shape(
  ?'domain_id' => DomainId,
  ?'user_profile_name' => UserProfileName,
  ) $s = shape()) {
    $this->domain_id = $domain_id ?? "";
    $this->user_profile_name = $user_profile_name ?? "";
  }
}

class DescribeUserProfileResponse {
  public CreationTime $creation_time;
  public DomainId $domain_id;
  public FailureReason $failure_reason;
  public EfsUid $home_efs_file_system_uid;
  public LastModifiedTime $last_modified_time;
  public SingleSignOnUserIdentifier $single_sign_on_user_identifier;
  public String256 $single_sign_on_user_value;
  public UserProfileStatus $status;
  public UserProfileArn $user_profile_arn;
  public UserProfileName $user_profile_name;
  public UserSettings $user_settings;

  public function __construct(shape(
  ?'creation_time' => CreationTime,
  ?'domain_id' => DomainId,
  ?'failure_reason' => FailureReason,
  ?'home_efs_file_system_uid' => EfsUid,
  ?'last_modified_time' => LastModifiedTime,
  ?'single_sign_on_user_identifier' => SingleSignOnUserIdentifier,
  ?'single_sign_on_user_value' => String256,
  ?'status' => UserProfileStatus,
  ?'user_profile_arn' => UserProfileArn,
  ?'user_profile_name' => UserProfileName,
  ?'user_settings' => UserSettings,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->domain_id = $domain_id ?? "";
    $this->failure_reason = $failure_reason ?? "";
    $this->home_efs_file_system_uid = $home_efs_file_system_uid ?? ;
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->single_sign_on_user_identifier = $single_sign_on_user_identifier ?? "";
    $this->single_sign_on_user_value = $single_sign_on_user_value ?? ;
    $this->status = $status ?? ;
    $this->user_profile_arn = $user_profile_arn ?? "";
    $this->user_profile_name = $user_profile_name ?? "";
    $this->user_settings = $user_settings ?? null;
  }
}

class DescribeWorkforceRequest {
  public WorkforceName $workforce_name;

  public function __construct(shape(
  ?'workforce_name' => WorkforceName,
  ) $s = shape()) {
    $this->workforce_name = $workforce_name ?? "";
  }
}

class DescribeWorkforceResponse {
  public Workforce $workforce;

  public function __construct(shape(
  ?'workforce' => Workforce,
  ) $s = shape()) {
    $this->workforce = $workforce ?? null;
  }
}

class DescribeWorkteamRequest {
  public WorkteamName $workteam_name;

  public function __construct(shape(
  ?'workteam_name' => WorkteamName,
  ) $s = shape()) {
    $this->workteam_name = $workteam_name ?? "";
  }
}

class DescribeWorkteamResponse {
  public Workteam $workteam;

  public function __construct(shape(
  ?'workteam' => Workteam,
  ) $s = shape()) {
    $this->workteam = $workteam ?? null;
  }
}

class DesiredWeightAndCapacity {
  public TaskCount $desired_instance_count;
  public VariantWeight $desired_weight;
  public VariantName $variant_name;

  public function __construct(shape(
  ?'desired_instance_count' => TaskCount,
  ?'desired_weight' => VariantWeight,
  ?'variant_name' => VariantName,
  ) $s = shape()) {
    $this->desired_instance_count = $desired_instance_count ?? ;
    $this->desired_weight = $desired_weight ?? ;
    $this->variant_name = $variant_name ?? "";
  }
}

type DesiredWeightAndCapacityList = vec<DesiredWeightAndCapacity>;

type DestinationS3Uri = string;

type DetailedAlgorithmStatus = string;

type DetailedModelPackageStatus = string;

type DirectInternetAccess = string;

type DirectoryPath = string;

type DisassociateAdditionalCodeRepositories = bool;

type DisassociateDefaultCodeRepository = bool;

type DisassociateNotebookInstanceAcceleratorTypes = bool;

type DisassociateNotebookInstanceLifecycleConfig = bool;

class DisassociateTrialComponentRequest {
  public ExperimentEntityName $trial_component_name;
  public ExperimentEntityName $trial_name;

  public function __construct(shape(
  ?'trial_component_name' => ExperimentEntityName,
  ?'trial_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->trial_component_name = $trial_component_name ?? ;
    $this->trial_name = $trial_name ?? ;
  }
}

class DisassociateTrialComponentResponse {
  public TrialArn $trial_arn;
  public TrialComponentArn $trial_component_arn;

  public function __construct(shape(
  ?'trial_arn' => TrialArn,
  ?'trial_component_arn' => TrialComponentArn,
  ) $s = shape()) {
    $this->trial_arn = $trial_arn ?? "";
    $this->trial_component_arn = $trial_component_arn ?? "";
  }
}

type Dollars = int;

type DomainArn = string;

class DomainDetails {
  public CreationTime $creation_time;
  public DomainArn $domain_arn;
  public DomainId $domain_id;
  public DomainName $domain_name;
  public LastModifiedTime $last_modified_time;
  public DomainStatus $status;
  public String1024 $url;

  public function __construct(shape(
  ?'creation_time' => CreationTime,
  ?'domain_arn' => DomainArn,
  ?'domain_id' => DomainId,
  ?'domain_name' => DomainName,
  ?'last_modified_time' => LastModifiedTime,
  ?'status' => DomainStatus,
  ?'url' => String1024,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->domain_arn = $domain_arn ?? "";
    $this->domain_id = $domain_id ?? "";
    $this->domain_name = $domain_name ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->status = $status ?? ;
    $this->url = $url ?? "";
  }
}

type DomainId = string;

type DomainList = vec<DomainDetails>;

type DomainName = string;

type DomainStatus = string;

type DoubleParameterValue = float;

type EfsUid = string;

type EnableCapture = bool;

type EndpointArn = string;

type EndpointConfigArn = string;

type EndpointConfigName = string;

type EndpointConfigNameContains = string;

type EndpointConfigSortKey = string;

class EndpointConfigSummary {
  public Timestamp $creation_time;
  public EndpointConfigArn $endpoint_config_arn;
  public EndpointConfigName $endpoint_config_name;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'endpoint_config_arn' => EndpointConfigArn,
  ?'endpoint_config_name' => EndpointConfigName,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->endpoint_config_arn = $endpoint_config_arn ?? "";
    $this->endpoint_config_name = $endpoint_config_name ?? "";
  }
}

type EndpointConfigSummaryList = vec<EndpointConfigSummary>;

class EndpointInput {
  public EndpointName $endpoint_name;
  public ProcessingLocalPath $local_path;
  public ProcessingS3DataDistributionType $s_3_data_distribution_type;
  public ProcessingS3InputMode $s_3_input_mode;

  public function __construct(shape(
  ?'endpoint_name' => EndpointName,
  ?'local_path' => ProcessingLocalPath,
  ?'s_3_data_distribution_type' => ProcessingS3DataDistributionType,
  ?'s_3_input_mode' => ProcessingS3InputMode,
  ) $s = shape()) {
    $this->endpoint_name = $endpoint_name ?? "";
    $this->local_path = $local_path ?? ;
    $this->s_3_data_distribution_type = $s_3_data_distribution_type ?? ;
    $this->s_3_input_mode = $s_3_input_mode ?? ;
  }
}

type EndpointName = string;

type EndpointNameContains = string;

type EndpointSortKey = string;

type EndpointStatus = string;

class EndpointSummary {
  public Timestamp $creation_time;
  public EndpointArn $endpoint_arn;
  public EndpointName $endpoint_name;
  public EndpointStatus $endpoint_status;
  public Timestamp $last_modified_time;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'endpoint_arn' => EndpointArn,
  ?'endpoint_name' => EndpointName,
  ?'endpoint_status' => EndpointStatus,
  ?'last_modified_time' => Timestamp,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->endpoint_arn = $endpoint_arn ?? "";
    $this->endpoint_name = $endpoint_name ?? "";
    $this->endpoint_status = $endpoint_status ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
  }
}

type EndpointSummaryList = vec<EndpointSummary>;

type EntityDescription = string;

type EntityName = string;

type EnvironmentKey = string;

type EnvironmentMap = dict<EnvironmentKey, EnvironmentValue>;

type EnvironmentValue = string;

type ExecutionStatus = string;

type ExitMessage = string;

class Experiment {
  public UserContext $created_by;
  public Timestamp $creation_time;
  public ExperimentDescription $description;
  public ExperimentEntityName $display_name;
  public ExperimentArn $experiment_arn;
  public ExperimentEntityName $experiment_name;
  public UserContext $last_modified_by;
  public Timestamp $last_modified_time;
  public ExperimentSource $source;
  public TagList $tags;

  public function __construct(shape(
  ?'created_by' => UserContext,
  ?'creation_time' => Timestamp,
  ?'description' => ExperimentDescription,
  ?'display_name' => ExperimentEntityName,
  ?'experiment_arn' => ExperimentArn,
  ?'experiment_name' => ExperimentEntityName,
  ?'last_modified_by' => UserContext,
  ?'last_modified_time' => Timestamp,
  ?'source' => ExperimentSource,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->created_by = $created_by ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->description = $description ?? ;
    $this->display_name = $display_name ?? ;
    $this->experiment_arn = $experiment_arn ?? "";
    $this->experiment_name = $experiment_name ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->source = $source ?? ;
    $this->tags = $tags ?? ;
  }
}

type ExperimentArn = string;

class ExperimentConfig {
  public ExperimentEntityName $experiment_name;
  public ExperimentEntityName $trial_component_display_name;
  public ExperimentEntityName $trial_name;

  public function __construct(shape(
  ?'experiment_name' => ExperimentEntityName,
  ?'trial_component_display_name' => ExperimentEntityName,
  ?'trial_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->experiment_name = $experiment_name ?? ;
    $this->trial_component_display_name = $trial_component_display_name ?? ;
    $this->trial_name = $trial_name ?? ;
  }
}

type ExperimentDescription = string;

type ExperimentEntityName = string;

class ExperimentSource {
  public ExperimentSourceArn $source_arn;
  public SourceType $source_type;

  public function __construct(shape(
  ?'source_arn' => ExperimentSourceArn,
  ?'source_type' => SourceType,
  ) $s = shape()) {
    $this->source_arn = $source_arn ?? ;
    $this->source_type = $source_type ?? "";
  }
}

type ExperimentSourceArn = string;

type ExperimentSummaries = vec<ExperimentSummary>;

class ExperimentSummary {
  public Timestamp $creation_time;
  public ExperimentEntityName $display_name;
  public ExperimentArn $experiment_arn;
  public ExperimentEntityName $experiment_name;
  public ExperimentSource $experiment_source;
  public Timestamp $last_modified_time;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'display_name' => ExperimentEntityName,
  ?'experiment_arn' => ExperimentArn,
  ?'experiment_name' => ExperimentEntityName,
  ?'experiment_source' => ExperimentSource,
  ?'last_modified_time' => Timestamp,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->display_name = $display_name ?? ;
    $this->experiment_arn = $experiment_arn ?? "";
    $this->experiment_name = $experiment_name ?? ;
    $this->experiment_source = $experiment_source ?? null;
    $this->last_modified_time = $last_modified_time ?? 0;
  }
}

type FailureReason = string;

type FileSystemAccessMode = string;

class FileSystemDataSource {
  public DirectoryPath $directory_path;
  public FileSystemAccessMode $file_system_access_mode;
  public FileSystemId $file_system_id;
  public FileSystemType $file_system_type;

  public function __construct(shape(
  ?'directory_path' => DirectoryPath,
  ?'file_system_access_mode' => FileSystemAccessMode,
  ?'file_system_id' => FileSystemId,
  ?'file_system_type' => FileSystemType,
  ) $s = shape()) {
    $this->directory_path = $directory_path ?? "";
    $this->file_system_access_mode = $file_system_access_mode ?? "";
    $this->file_system_id = $file_system_id ?? "";
    $this->file_system_type = $file_system_type ?? "";
  }
}

type FileSystemId = string;

type FileSystemType = string;

class Filter {
  public ResourcePropertyName $name;
  public Operator $operator;
  public FilterValue $value;

  public function __construct(shape(
  ?'name' => ResourcePropertyName,
  ?'operator' => Operator,
  ?'value' => FilterValue,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->operator = $operator ?? "";
    $this->value = $value ?? ;
  }
}

type FilterList = vec<Filter>;

type FilterValue = string;

class FinalAutoMLJobObjectiveMetric {
  public AutoMLMetricEnum $metric_name;
  public AutoMLJobObjectiveType $type;
  public MetricValue $value;

  public function __construct(shape(
  ?'metric_name' => AutoMLMetricEnum,
  ?'type' => AutoMLJobObjectiveType,
  ?'value' => MetricValue,
  ) $s = shape()) {
    $this->metric_name = $metric_name ?? "";
    $this->type = $type ?? ;
    $this->value = $value ?? ;
  }
}

class FinalHyperParameterTuningJobObjectiveMetric {
  public MetricName $metric_name;
  public HyperParameterTuningJobObjectiveType $type;
  public MetricValue $value;

  public function __construct(shape(
  ?'metric_name' => MetricName,
  ?'type' => HyperParameterTuningJobObjectiveType,
  ?'value' => MetricValue,
  ) $s = shape()) {
    $this->metric_name = $metric_name ?? "";
    $this->type = $type ?? ;
    $this->value = $value ?? ;
  }
}

type FinalMetricDataList = vec<MetricData>;

type Float = float;

type FlowDefinitionArn = string;

type FlowDefinitionName = string;

class FlowDefinitionOutputConfig {
  public KmsKeyId $kms_key_id;
  public S3Uri $s_3_output_path;

  public function __construct(shape(
  ?'kms_key_id' => KmsKeyId,
  ?'s_3_output_path' => S3Uri,
  ) $s = shape()) {
    $this->kms_key_id = $kms_key_id ?? "";
    $this->s_3_output_path = $s_3_output_path ?? ;
  }
}

type FlowDefinitionStatus = string;

type FlowDefinitionSummaries = vec<FlowDefinitionSummary>;

class FlowDefinitionSummary {
  public Timestamp $creation_time;
  public FailureReason $failure_reason;
  public FlowDefinitionArn $flow_definition_arn;
  public FlowDefinitionName $flow_definition_name;
  public FlowDefinitionStatus $flow_definition_status;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'failure_reason' => FailureReason,
  ?'flow_definition_arn' => FlowDefinitionArn,
  ?'flow_definition_name' => FlowDefinitionName,
  ?'flow_definition_status' => FlowDefinitionStatus,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->failure_reason = $failure_reason ?? "";
    $this->flow_definition_arn = $flow_definition_arn ?? "";
    $this->flow_definition_name = $flow_definition_name ?? "";
    $this->flow_definition_status = $flow_definition_status ?? "";
  }
}

type FlowDefinitionTaskAvailabilityLifetimeInSeconds = int;

type FlowDefinitionTaskCount = int;

type FlowDefinitionTaskDescription = string;

type FlowDefinitionTaskKeyword = string;

type FlowDefinitionTaskKeywords = vec<FlowDefinitionTaskKeyword>;

type FlowDefinitionTaskTimeLimitInSeconds = int;

type FlowDefinitionTaskTitle = string;

type Framework = string;

type GenerateCandidateDefinitionsOnly = bool;

class GetSearchSuggestionsRequest {
  public ResourceType $resource;
  public SuggestionQuery $suggestion_query;

  public function __construct(shape(
  ?'resource' => ResourceType,
  ?'suggestion_query' => SuggestionQuery,
  ) $s = shape()) {
    $this->resource = $resource ?? ;
    $this->suggestion_query = $suggestion_query ?? null;
  }
}

class GetSearchSuggestionsResponse {
  public PropertyNameSuggestionList $property_name_suggestions;

  public function __construct(shape(
  ?'property_name_suggestions' => PropertyNameSuggestionList,
  ) $s = shape()) {
    $this->property_name_suggestions = $property_name_suggestions ?? ;
  }
}

class GitConfig {
  public Branch $branch;
  public GitConfigUrl $repository_url;
  public SecretArn $secret_arn;

  public function __construct(shape(
  ?'branch' => Branch,
  ?'repository_url' => GitConfigUrl,
  ?'secret_arn' => SecretArn,
  ) $s = shape()) {
    $this->branch = $branch ?? "";
    $this->repository_url = $repository_url ?? ;
    $this->secret_arn = $secret_arn ?? "";
  }
}

class GitConfigForUpdate {
  public SecretArn $secret_arn;

  public function __construct(shape(
  ?'secret_arn' => SecretArn,
  ) $s = shape()) {
    $this->secret_arn = $secret_arn ?? "";
  }
}

type GitConfigUrl = string;

type HookParameters = dict<ConfigKey, ConfigValue>;

type HumanLoopActivationConditions = string;

class HumanLoopActivationConditionsConfig {
  public HumanLoopActivationConditions $human_loop_activation_conditions;

  public function __construct(shape(
  ?'human_loop_activation_conditions' => HumanLoopActivationConditions,
  ) $s = shape()) {
    $this->human_loop_activation_conditions = $human_loop_activation_conditions ?? "";
  }
}

class HumanLoopActivationConfig {
  public HumanLoopActivationConditionsConfig $human_loop_activation_conditions_config;

  public function __construct(shape(
  ?'human_loop_activation_conditions_config' => HumanLoopActivationConditionsConfig,
  ) $s = shape()) {
    $this->human_loop_activation_conditions_config = $human_loop_activation_conditions_config ?? null;
  }
}

class HumanLoopConfig {
  public HumanTaskUiArn $human_task_ui_arn;
  public PublicWorkforceTaskPrice $public_workforce_task_price;
  public FlowDefinitionTaskAvailabilityLifetimeInSeconds $task_availability_lifetime_in_seconds;
  public FlowDefinitionTaskCount $task_count;
  public FlowDefinitionTaskDescription $task_description;
  public FlowDefinitionTaskKeywords $task_keywords;
  public FlowDefinitionTaskTimeLimitInSeconds $task_time_limit_in_seconds;
  public FlowDefinitionTaskTitle $task_title;
  public WorkteamArn $workteam_arn;

  public function __construct(shape(
  ?'human_task_ui_arn' => HumanTaskUiArn,
  ?'public_workforce_task_price' => PublicWorkforceTaskPrice,
  ?'task_availability_lifetime_in_seconds' => FlowDefinitionTaskAvailabilityLifetimeInSeconds,
  ?'task_count' => FlowDefinitionTaskCount,
  ?'task_description' => FlowDefinitionTaskDescription,
  ?'task_keywords' => FlowDefinitionTaskKeywords,
  ?'task_time_limit_in_seconds' => FlowDefinitionTaskTimeLimitInSeconds,
  ?'task_title' => FlowDefinitionTaskTitle,
  ?'workteam_arn' => WorkteamArn,
  ) $s = shape()) {
    $this->human_task_ui_arn = $human_task_ui_arn ?? "";
    $this->public_workforce_task_price = $public_workforce_task_price ?? null;
    $this->task_availability_lifetime_in_seconds = $task_availability_lifetime_in_seconds ?? 0;
    $this->task_count = $task_count ?? 0;
    $this->task_description = $task_description ?? "";
    $this->task_keywords = $task_keywords ?? [];
    $this->task_time_limit_in_seconds = $task_time_limit_in_seconds ?? 0;
    $this->task_title = $task_title ?? "";
    $this->workteam_arn = $workteam_arn ?? "";
  }
}

class HumanLoopRequestSource {
  public AwsManagedHumanLoopRequestSource $aws_managed_human_loop_request_source;

  public function __construct(shape(
  ?'aws_managed_human_loop_request_source' => AwsManagedHumanLoopRequestSource,
  ) $s = shape()) {
    $this->aws_managed_human_loop_request_source = $aws_managed_human_loop_request_source ?? "";
  }
}

class HumanTaskConfig {
  public AnnotationConsolidationConfig $annotation_consolidation_config;
  public MaxConcurrentTaskCount $max_concurrent_task_count;
  public NumberOfHumanWorkersPerDataObject $number_of_human_workers_per_data_object;
  public LambdaFunctionArn $pre_human_task_lambda_arn;
  public PublicWorkforceTaskPrice $public_workforce_task_price;
  public TaskAvailabilityLifetimeInSeconds $task_availability_lifetime_in_seconds;
  public TaskDescription $task_description;
  public TaskKeywords $task_keywords;
  public TaskTimeLimitInSeconds $task_time_limit_in_seconds;
  public TaskTitle $task_title;
  public UiConfig $ui_config;
  public WorkteamArn $workteam_arn;

  public function __construct(shape(
  ?'annotation_consolidation_config' => AnnotationConsolidationConfig,
  ?'max_concurrent_task_count' => MaxConcurrentTaskCount,
  ?'number_of_human_workers_per_data_object' => NumberOfHumanWorkersPerDataObject,
  ?'pre_human_task_lambda_arn' => LambdaFunctionArn,
  ?'public_workforce_task_price' => PublicWorkforceTaskPrice,
  ?'task_availability_lifetime_in_seconds' => TaskAvailabilityLifetimeInSeconds,
  ?'task_description' => TaskDescription,
  ?'task_keywords' => TaskKeywords,
  ?'task_time_limit_in_seconds' => TaskTimeLimitInSeconds,
  ?'task_title' => TaskTitle,
  ?'ui_config' => UiConfig,
  ?'workteam_arn' => WorkteamArn,
  ) $s = shape()) {
    $this->annotation_consolidation_config = $annotation_consolidation_config ?? null;
    $this->max_concurrent_task_count = $max_concurrent_task_count ?? 0;
    $this->number_of_human_workers_per_data_object = $number_of_human_workers_per_data_object ?? 0;
    $this->pre_human_task_lambda_arn = $pre_human_task_lambda_arn ?? ;
    $this->public_workforce_task_price = $public_workforce_task_price ?? null;
    $this->task_availability_lifetime_in_seconds = $task_availability_lifetime_in_seconds ?? 0;
    $this->task_description = $task_description ?? "";
    $this->task_keywords = $task_keywords ?? [];
    $this->task_time_limit_in_seconds = $task_time_limit_in_seconds ?? 0;
    $this->task_title = $task_title ?? "";
    $this->ui_config = $ui_config ?? null;
    $this->workteam_arn = $workteam_arn ?? "";
  }
}

type HumanTaskUiArn = string;

type HumanTaskUiName = string;

type HumanTaskUiSummaries = vec<HumanTaskUiSummary>;

class HumanTaskUiSummary {
  public Timestamp $creation_time;
  public HumanTaskUiArn $human_task_ui_arn;
  public HumanTaskUiName $human_task_ui_name;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'human_task_ui_arn' => HumanTaskUiArn,
  ?'human_task_ui_name' => HumanTaskUiName,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->human_task_ui_arn = $human_task_ui_arn ?? "";
    $this->human_task_ui_name = $human_task_ui_name ?? "";
  }
}

class HyperParameterAlgorithmSpecification {
  public ArnOrName $algorithm_name;
  public MetricDefinitionList $metric_definitions;
  public AlgorithmImage $training_image;
  public TrainingInputMode $training_input_mode;

  public function __construct(shape(
  ?'algorithm_name' => ArnOrName,
  ?'metric_definitions' => MetricDefinitionList,
  ?'training_image' => AlgorithmImage,
  ?'training_input_mode' => TrainingInputMode,
  ) $s = shape()) {
    $this->algorithm_name = $algorithm_name ?? ;
    $this->metric_definitions = $metric_definitions ?? ;
    $this->training_image = $training_image ?? ;
    $this->training_input_mode = $training_input_mode ?? "";
  }
}

type HyperParameterScalingType = string;

class HyperParameterSpecification {
  public ParameterValue $default_value;
  public EntityDescription $description;
  public boolean $is_required;
  public boolean $is_tunable;
  public ParameterName $name;
  public ParameterRange $range;
  public ParameterType $type;

  public function __construct(shape(
  ?'default_value' => ParameterValue,
  ?'description' => EntityDescription,
  ?'is_required' => boolean,
  ?'is_tunable' => boolean,
  ?'name' => ParameterName,
  ?'range' => ParameterRange,
  ?'type' => ParameterType,
  ) $s = shape()) {
    $this->default_value = $default_value ?? ;
    $this->description = $description ?? ;
    $this->is_required = $is_required ?? ;
    $this->is_tunable = $is_tunable ?? ;
    $this->name = $name ?? ;
    $this->range = $range ?? ;
    $this->type = $type ?? ;
  }
}

type HyperParameterSpecifications = vec<HyperParameterSpecification>;

class HyperParameterTrainingJobDefinition {
  public HyperParameterAlgorithmSpecification $algorithm_specification;
  public CheckpointConfig $checkpoint_config;
  public HyperParameterTrainingJobDefinitionName $definition_name;
  public boolean $enable_inter_container_traffic_encryption;
  public boolean $enable_managed_spot_training;
  public boolean $enable_network_isolation;
  public ParameterRanges $hyper_parameter_ranges;
  public InputDataConfig $input_data_config;
  public OutputDataConfig $output_data_config;
  public ResourceConfig $resource_config;
  public RoleArn $role_arn;
  public HyperParameters $static_hyper_parameters;
  public StoppingCondition $stopping_condition;
  public HyperParameterTuningJobObjective $tuning_objective;
  public VpcConfig $vpc_config;

  public function __construct(shape(
  ?'algorithm_specification' => HyperParameterAlgorithmSpecification,
  ?'checkpoint_config' => CheckpointConfig,
  ?'definition_name' => HyperParameterTrainingJobDefinitionName,
  ?'enable_inter_container_traffic_encryption' => boolean,
  ?'enable_managed_spot_training' => boolean,
  ?'enable_network_isolation' => boolean,
  ?'hyper_parameter_ranges' => ParameterRanges,
  ?'input_data_config' => InputDataConfig,
  ?'output_data_config' => OutputDataConfig,
  ?'resource_config' => ResourceConfig,
  ?'role_arn' => RoleArn,
  ?'static_hyper_parameters' => HyperParameters,
  ?'stopping_condition' => StoppingCondition,
  ?'tuning_objective' => HyperParameterTuningJobObjective,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->algorithm_specification = $algorithm_specification ?? null;
    $this->checkpoint_config = $checkpoint_config ?? null;
    $this->definition_name = $definition_name ?? ;
    $this->enable_inter_container_traffic_encryption = $enable_inter_container_traffic_encryption ?? ;
    $this->enable_managed_spot_training = $enable_managed_spot_training ?? ;
    $this->enable_network_isolation = $enable_network_isolation ?? ;
    $this->hyper_parameter_ranges = $hyper_parameter_ranges ?? ;
    $this->input_data_config = $input_data_config ?? [];
    $this->output_data_config = $output_data_config ?? null;
    $this->resource_config = $resource_config ?? null;
    $this->role_arn = $role_arn ?? "";
    $this->static_hyper_parameters = $static_hyper_parameters ?? ;
    $this->stopping_condition = $stopping_condition ?? null;
    $this->tuning_objective = $tuning_objective ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

type HyperParameterTrainingJobDefinitionName = string;

type HyperParameterTrainingJobDefinitions = vec<HyperParameterTrainingJobDefinition>;

type HyperParameterTrainingJobSummaries = vec<HyperParameterTrainingJobSummary>;

class HyperParameterTrainingJobSummary {
  public Timestamp $creation_time;
  public FailureReason $failure_reason;
  public FinalHyperParameterTuningJobObjectiveMetric $final_hyper_parameter_tuning_job_objective_metric;
  public ObjectiveStatus $objective_status;
  public Timestamp $training_end_time;
  public TrainingJobArn $training_job_arn;
  public HyperParameterTrainingJobDefinitionName $training_job_definition_name;
  public TrainingJobName $training_job_name;
  public TrainingJobStatus $training_job_status;
  public Timestamp $training_start_time;
  public HyperParameters $tuned_hyper_parameters;
  public HyperParameterTuningJobName $tuning_job_name;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'failure_reason' => FailureReason,
  ?'final_hyper_parameter_tuning_job_objective_metric' => FinalHyperParameterTuningJobObjectiveMetric,
  ?'objective_status' => ObjectiveStatus,
  ?'training_end_time' => Timestamp,
  ?'training_job_arn' => TrainingJobArn,
  ?'training_job_definition_name' => HyperParameterTrainingJobDefinitionName,
  ?'training_job_name' => TrainingJobName,
  ?'training_job_status' => TrainingJobStatus,
  ?'training_start_time' => Timestamp,
  ?'tuned_hyper_parameters' => HyperParameters,
  ?'tuning_job_name' => HyperParameterTuningJobName,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->failure_reason = $failure_reason ?? "";
    $this->final_hyper_parameter_tuning_job_objective_metric = $final_hyper_parameter_tuning_job_objective_metric ?? null;
    $this->objective_status = $objective_status ?? "";
    $this->training_end_time = $training_end_time ?? ;
    $this->training_job_arn = $training_job_arn ?? "";
    $this->training_job_definition_name = $training_job_definition_name ?? ;
    $this->training_job_name = $training_job_name ?? "";
    $this->training_job_status = $training_job_status ?? "";
    $this->training_start_time = $training_start_time ?? ;
    $this->tuned_hyper_parameters = $tuned_hyper_parameters ?? ;
    $this->tuning_job_name = $tuning_job_name ?? ;
  }
}

type HyperParameterTuningJobArn = string;

class HyperParameterTuningJobConfig {
  public HyperParameterTuningJobObjective $hyper_parameter_tuning_job_objective;
  public ParameterRanges $parameter_ranges;
  public ResourceLimits $resource_limits;
  public HyperParameterTuningJobStrategyType $strategy;
  public TrainingJobEarlyStoppingType $training_job_early_stopping_type;
  public TuningJobCompletionCriteria $tuning_job_completion_criteria;

  public function __construct(shape(
  ?'hyper_parameter_tuning_job_objective' => HyperParameterTuningJobObjective,
  ?'parameter_ranges' => ParameterRanges,
  ?'resource_limits' => ResourceLimits,
  ?'strategy' => HyperParameterTuningJobStrategyType,
  ?'training_job_early_stopping_type' => TrainingJobEarlyStoppingType,
  ?'tuning_job_completion_criteria' => TuningJobCompletionCriteria,
  ) $s = shape()) {
    $this->hyper_parameter_tuning_job_objective = $hyper_parameter_tuning_job_objective ?? null;
    $this->parameter_ranges = $parameter_ranges ?? null;
    $this->resource_limits = $resource_limits ?? null;
    $this->strategy = $strategy ?? ;
    $this->training_job_early_stopping_type = $training_job_early_stopping_type ?? "";
    $this->tuning_job_completion_criteria = $tuning_job_completion_criteria ?? null;
  }
}

type HyperParameterTuningJobName = string;

class HyperParameterTuningJobObjective {
  public MetricName $metric_name;
  public HyperParameterTuningJobObjectiveType $type;

  public function __construct(shape(
  ?'metric_name' => MetricName,
  ?'type' => HyperParameterTuningJobObjectiveType,
  ) $s = shape()) {
    $this->metric_name = $metric_name ?? "";
    $this->type = $type ?? ;
  }
}

type HyperParameterTuningJobObjectiveType = string;

type HyperParameterTuningJobObjectives = vec<HyperParameterTuningJobObjective>;

type HyperParameterTuningJobSortByOptions = string;

type HyperParameterTuningJobStatus = string;

type HyperParameterTuningJobStrategyType = string;

type HyperParameterTuningJobSummaries = vec<HyperParameterTuningJobSummary>;

class HyperParameterTuningJobSummary {
  public Timestamp $creation_time;
  public Timestamp $hyper_parameter_tuning_end_time;
  public HyperParameterTuningJobArn $hyper_parameter_tuning_job_arn;
  public HyperParameterTuningJobName $hyper_parameter_tuning_job_name;
  public HyperParameterTuningJobStatus $hyper_parameter_tuning_job_status;
  public Timestamp $last_modified_time;
  public ObjectiveStatusCounters $objective_status_counters;
  public ResourceLimits $resource_limits;
  public HyperParameterTuningJobStrategyType $strategy;
  public TrainingJobStatusCounters $training_job_status_counters;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'hyper_parameter_tuning_end_time' => Timestamp,
  ?'hyper_parameter_tuning_job_arn' => HyperParameterTuningJobArn,
  ?'hyper_parameter_tuning_job_name' => HyperParameterTuningJobName,
  ?'hyper_parameter_tuning_job_status' => HyperParameterTuningJobStatus,
  ?'last_modified_time' => Timestamp,
  ?'objective_status_counters' => ObjectiveStatusCounters,
  ?'resource_limits' => ResourceLimits,
  ?'strategy' => HyperParameterTuningJobStrategyType,
  ?'training_job_status_counters' => TrainingJobStatusCounters,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->hyper_parameter_tuning_end_time = $hyper_parameter_tuning_end_time ?? ;
    $this->hyper_parameter_tuning_job_arn = $hyper_parameter_tuning_job_arn ?? "";
    $this->hyper_parameter_tuning_job_name = $hyper_parameter_tuning_job_name ?? "";
    $this->hyper_parameter_tuning_job_status = $hyper_parameter_tuning_job_status ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->objective_status_counters = $objective_status_counters ?? null;
    $this->resource_limits = $resource_limits ?? null;
    $this->strategy = $strategy ?? ;
    $this->training_job_status_counters = $training_job_status_counters ?? null;
  }
}

class HyperParameterTuningJobWarmStartConfig {
  public ParentHyperParameterTuningJobs $parent_hyper_parameter_tuning_jobs;
  public HyperParameterTuningJobWarmStartType $warm_start_type;

  public function __construct(shape(
  ?'parent_hyper_parameter_tuning_jobs' => ParentHyperParameterTuningJobs,
  ?'warm_start_type' => HyperParameterTuningJobWarmStartType,
  ) $s = shape()) {
    $this->parent_hyper_parameter_tuning_jobs = $parent_hyper_parameter_tuning_jobs ?? [];
    $this->warm_start_type = $warm_start_type ?? ;
  }
}

type HyperParameterTuningJobWarmStartType = string;

type HyperParameters = dict<ParameterKey, ParameterValue>;

type Image = string;

type ImageDigest = string;

type ImageUri = string;

class InferenceSpecification {
  public ModelPackageContainerDefinitionList $containers;
  public ContentTypes $supported_content_types;
  public RealtimeInferenceInstanceTypes $supported_realtime_inference_instance_types;
  public ResponseMIMETypes $supported_response_mime_types;
  public TransformInstanceTypes $supported_transform_instance_types;

  public function __construct(shape(
  ?'containers' => ModelPackageContainerDefinitionList,
  ?'supported_content_types' => ContentTypes,
  ?'supported_realtime_inference_instance_types' => RealtimeInferenceInstanceTypes,
  ?'supported_response_mime_types' => ResponseMIMETypes,
  ?'supported_transform_instance_types' => TransformInstanceTypes,
  ) $s = shape()) {
    $this->containers = $containers ?? ;
    $this->supported_content_types = $supported_content_types ?? ;
    $this->supported_realtime_inference_instance_types = $supported_realtime_inference_instance_types ?? ;
    $this->supported_response_mime_types = $supported_response_mime_types ?? ;
    $this->supported_transform_instance_types = $supported_transform_instance_types ?? ;
  }
}

class InputConfig {
  public DataInputConfig $data_input_config;
  public Framework $framework;
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'data_input_config' => DataInputConfig,
  ?'framework' => Framework,
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->data_input_config = $data_input_config ?? "";
    $this->framework = $framework ?? "";
    $this->s_3_uri = $s_3_uri ?? "";
  }
}

type InputDataConfig = vec<Channel>;

type InputModes = vec<TrainingInputMode>;

type InstanceType = string;

class IntegerParameterRange {
  public ParameterValue $max_value;
  public ParameterValue $min_value;
  public ParameterKey $name;
  public HyperParameterScalingType $scaling_type;

  public function __construct(shape(
  ?'max_value' => ParameterValue,
  ?'min_value' => ParameterValue,
  ?'name' => ParameterKey,
  ?'scaling_type' => HyperParameterScalingType,
  ) $s = shape()) {
    $this->max_value = $max_value ?? ;
    $this->min_value = $min_value ?? ;
    $this->name = $name ?? ;
    $this->scaling_type = $scaling_type ?? ;
  }
}

class IntegerParameterRangeSpecification {
  public ParameterValue $max_value;
  public ParameterValue $min_value;

  public function __construct(shape(
  ?'max_value' => ParameterValue,
  ?'min_value' => ParameterValue,
  ) $s = shape()) {
    $this->max_value = $max_value ?? ;
    $this->min_value = $min_value ?? ;
  }
}

type IntegerParameterRanges = vec<IntegerParameterRange>;

type JobReferenceCode = string;

type JobReferenceCodeContains = string;

type JoinSource = string;

type JsonContentType = string;

type JsonContentTypes = vec<JsonContentType>;

type JsonPath = string;

class JupyterServerAppSettings {
  public ResourceSpec $default_resource_spec;

  public function __construct(shape(
  ?'default_resource_spec' => ResourceSpec,
  ) $s = shape()) {
    $this->default_resource_spec = $default_resource_spec ?? ;
  }
}

class KernelGatewayAppSettings {
  public ResourceSpec $default_resource_spec;

  public function __construct(shape(
  ?'default_resource_spec' => ResourceSpec,
  ) $s = shape()) {
    $this->default_resource_spec = $default_resource_spec ?? ;
  }
}

type KmsKeyId = string;

type LabelAttributeName = string;

type LabelCounter = int;

class LabelCounters {
  public LabelCounter $failed_non_retryable_error;
  public LabelCounter $human_labeled;
  public LabelCounter $machine_labeled;
  public LabelCounter $total_labeled;
  public LabelCounter $unlabeled;

  public function __construct(shape(
  ?'failed_non_retryable_error' => LabelCounter,
  ?'human_labeled' => LabelCounter,
  ?'machine_labeled' => LabelCounter,
  ?'total_labeled' => LabelCounter,
  ?'unlabeled' => LabelCounter,
  ) $s = shape()) {
    $this->failed_non_retryable_error = $failed_non_retryable_error ?? ;
    $this->human_labeled = $human_labeled ?? ;
    $this->machine_labeled = $machine_labeled ?? ;
    $this->total_labeled = $total_labeled ?? ;
    $this->unlabeled = $unlabeled ?? ;
  }
}

class LabelCountersForWorkteam {
  public LabelCounter $human_labeled;
  public LabelCounter $pending_human;
  public LabelCounter $total;

  public function __construct(shape(
  ?'human_labeled' => LabelCounter,
  ?'pending_human' => LabelCounter,
  ?'total' => LabelCounter,
  ) $s = shape()) {
    $this->human_labeled = $human_labeled ?? ;
    $this->pending_human = $pending_human ?? ;
    $this->total = $total ?? ;
  }
}

type LabelingJobAlgorithmSpecificationArn = string;

class LabelingJobAlgorithmsConfig {
  public ModelArn $initial_active_learning_model_arn;
  public LabelingJobAlgorithmSpecificationArn $labeling_job_algorithm_specification_arn;
  public LabelingJobResourceConfig $labeling_job_resource_config;

  public function __construct(shape(
  ?'initial_active_learning_model_arn' => ModelArn,
  ?'labeling_job_algorithm_specification_arn' => LabelingJobAlgorithmSpecificationArn,
  ?'labeling_job_resource_config' => LabelingJobResourceConfig,
  ) $s = shape()) {
    $this->initial_active_learning_model_arn = $initial_active_learning_model_arn ?? ;
    $this->labeling_job_algorithm_specification_arn = $labeling_job_algorithm_specification_arn ?? "";
    $this->labeling_job_resource_config = $labeling_job_resource_config ?? null;
  }
}

type LabelingJobArn = string;

class LabelingJobDataAttributes {
  public ContentClassifiers $content_classifiers;

  public function __construct(shape(
  ?'content_classifiers' => ContentClassifiers,
  ) $s = shape()) {
    $this->content_classifiers = $content_classifiers ?? [];
  }
}

class LabelingJobDataSource {
  public LabelingJobS3DataSource $s_3_data_source;

  public function __construct(shape(
  ?'s_3_data_source' => LabelingJobS3DataSource,
  ) $s = shape()) {
    $this->s_3_data_source = $s_3_data_source ?? null;
  }
}

class LabelingJobForWorkteamSummary {
  public Timestamp $creation_time;
  public JobReferenceCode $job_reference_code;
  public LabelCountersForWorkteam $label_counters;
  public LabelingJobName $labeling_job_name;
  public NumberOfHumanWorkersPerDataObject $number_of_human_workers_per_data_object;
  public AccountId $work_requester_account_id;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'job_reference_code' => JobReferenceCode,
  ?'label_counters' => LabelCountersForWorkteam,
  ?'labeling_job_name' => LabelingJobName,
  ?'number_of_human_workers_per_data_object' => NumberOfHumanWorkersPerDataObject,
  ?'work_requester_account_id' => AccountId,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->job_reference_code = $job_reference_code ?? "";
    $this->label_counters = $label_counters ?? null;
    $this->labeling_job_name = $labeling_job_name ?? "";
    $this->number_of_human_workers_per_data_object = $number_of_human_workers_per_data_object ?? 0;
    $this->work_requester_account_id = $work_requester_account_id ?? ;
  }
}

type LabelingJobForWorkteamSummaryList = vec<LabelingJobForWorkteamSummary>;

class LabelingJobInputConfig {
  public LabelingJobDataAttributes $data_attributes;
  public LabelingJobDataSource $data_source;

  public function __construct(shape(
  ?'data_attributes' => LabelingJobDataAttributes,
  ?'data_source' => LabelingJobDataSource,
  ) $s = shape()) {
    $this->data_attributes = $data_attributes ?? ;
    $this->data_source = $data_source ?? null;
  }
}

type LabelingJobName = string;

class LabelingJobOutput {
  public ModelArn $final_active_learning_model_arn;
  public S3Uri $output_dataset_s_3_uri;

  public function __construct(shape(
  ?'final_active_learning_model_arn' => ModelArn,
  ?'output_dataset_s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->final_active_learning_model_arn = $final_active_learning_model_arn ?? ;
    $this->output_dataset_s_3_uri = $output_dataset_s_3_uri ?? ;
  }
}

class LabelingJobOutputConfig {
  public KmsKeyId $kms_key_id;
  public S3Uri $s_3_output_path;

  public function __construct(shape(
  ?'kms_key_id' => KmsKeyId,
  ?'s_3_output_path' => S3Uri,
  ) $s = shape()) {
    $this->kms_key_id = $kms_key_id ?? "";
    $this->s_3_output_path = $s_3_output_path ?? ;
  }
}

class LabelingJobResourceConfig {
  public KmsKeyId $volume_kms_key_id;

  public function __construct(shape(
  ?'volume_kms_key_id' => KmsKeyId,
  ) $s = shape()) {
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
  }
}

class LabelingJobS3DataSource {
  public S3Uri $manifest_s_3_uri;

  public function __construct(shape(
  ?'manifest_s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->manifest_s_3_uri = $manifest_s_3_uri ?? ;
  }
}

type LabelingJobStatus = string;

class LabelingJobStoppingConditions {
  public MaxHumanLabeledObjectCount $max_human_labeled_object_count;
  public MaxPercentageOfInputDatasetLabeled $max_percentage_of_input_dataset_labeled;

  public function __construct(shape(
  ?'max_human_labeled_object_count' => MaxHumanLabeledObjectCount,
  ?'max_percentage_of_input_dataset_labeled' => MaxPercentageOfInputDatasetLabeled,
  ) $s = shape()) {
    $this->max_human_labeled_object_count = $max_human_labeled_object_count ?? 0;
    $this->max_percentage_of_input_dataset_labeled = $max_percentage_of_input_dataset_labeled ?? 0;
  }
}

class LabelingJobSummary {
  public LambdaFunctionArn $annotation_consolidation_lambda_arn;
  public Timestamp $creation_time;
  public FailureReason $failure_reason;
  public LabelingJobInputConfig $input_config;
  public LabelCounters $label_counters;
  public LabelingJobArn $labeling_job_arn;
  public LabelingJobName $labeling_job_name;
  public LabelingJobOutput $labeling_job_output;
  public LabelingJobStatus $labeling_job_status;
  public Timestamp $last_modified_time;
  public LambdaFunctionArn $pre_human_task_lambda_arn;
  public WorkteamArn $workteam_arn;

  public function __construct(shape(
  ?'annotation_consolidation_lambda_arn' => LambdaFunctionArn,
  ?'creation_time' => Timestamp,
  ?'failure_reason' => FailureReason,
  ?'input_config' => LabelingJobInputConfig,
  ?'label_counters' => LabelCounters,
  ?'labeling_job_arn' => LabelingJobArn,
  ?'labeling_job_name' => LabelingJobName,
  ?'labeling_job_output' => LabelingJobOutput,
  ?'labeling_job_status' => LabelingJobStatus,
  ?'last_modified_time' => Timestamp,
  ?'pre_human_task_lambda_arn' => LambdaFunctionArn,
  ?'workteam_arn' => WorkteamArn,
  ) $s = shape()) {
    $this->annotation_consolidation_lambda_arn = $annotation_consolidation_lambda_arn ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->failure_reason = $failure_reason ?? "";
    $this->input_config = $input_config ?? null;
    $this->label_counters = $label_counters ?? null;
    $this->labeling_job_arn = $labeling_job_arn ?? "";
    $this->labeling_job_name = $labeling_job_name ?? "";
    $this->labeling_job_output = $labeling_job_output ?? null;
    $this->labeling_job_status = $labeling_job_status ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->pre_human_task_lambda_arn = $pre_human_task_lambda_arn ?? ;
    $this->workteam_arn = $workteam_arn ?? "";
  }
}

type LabelingJobSummaryList = vec<LabelingJobSummary>;

type LambdaFunctionArn = string;

type LastModifiedTime = int;

class ListAlgorithmsInput {
  public CreationTime $creation_time_after;
  public CreationTime $creation_time_before;
  public MaxResults $max_results;
  public NameContains $name_contains;
  public NextToken $next_token;
  public AlgorithmSortBy $sort_by;
  public SortOrder $sort_order;

  public function __construct(shape(
  ?'creation_time_after' => CreationTime,
  ?'creation_time_before' => CreationTime,
  ?'max_results' => MaxResults,
  ?'name_contains' => NameContains,
  ?'next_token' => NextToken,
  ?'sort_by' => AlgorithmSortBy,
  ?'sort_order' => SortOrder,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
  }
}

class ListAlgorithmsOutput {
  public AlgorithmSummaryList $algorithm_summary_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'algorithm_summary_list' => AlgorithmSummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->algorithm_summary_list = $algorithm_summary_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListAppsRequest {
  public DomainId $domain_id_equals;
  public MaxResults $max_results;
  public NextToken $next_token;
  public AppSortKey $sort_by;
  public SortOrder $sort_order;
  public UserProfileName $user_profile_name_equals;

  public function __construct(shape(
  ?'domain_id_equals' => DomainId,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_by' => AppSortKey,
  ?'sort_order' => SortOrder,
  ?'user_profile_name_equals' => UserProfileName,
  ) $s = shape()) {
    $this->domain_id_equals = $domain_id_equals ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->user_profile_name_equals = $user_profile_name_equals ?? ;
  }
}

class ListAppsResponse {
  public AppList $apps;
  public NextToken $next_token;

  public function __construct(shape(
  ?'apps' => AppList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->apps = $apps ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListAutoMLJobsRequest {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public Timestamp $last_modified_time_after;
  public Timestamp $last_modified_time_before;
  public AutoMLMaxResults $max_results;
  public AutoMLNameContains $name_contains;
  public NextToken $next_token;
  public AutoMLSortBy $sort_by;
  public AutoMLSortOrder $sort_order;
  public AutoMLJobStatus $status_equals;

  public function __construct(shape(
  ?'creation_time_after' => Timestamp,
  ?'creation_time_before' => Timestamp,
  ?'last_modified_time_after' => Timestamp,
  ?'last_modified_time_before' => Timestamp,
  ?'max_results' => AutoMLMaxResults,
  ?'name_contains' => AutoMLNameContains,
  ?'next_token' => NextToken,
  ?'sort_by' => AutoMLSortBy,
  ?'sort_order' => AutoMLSortOrder,
  ?'status_equals' => AutoMLJobStatus,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->last_modified_time_after = $last_modified_time_after ?? ;
    $this->last_modified_time_before = $last_modified_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->status_equals = $status_equals ?? ;
  }
}

class ListAutoMLJobsResponse {
  public AutoMLJobSummaries $auto_ml_job_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'auto_ml_job_summaries' => AutoMLJobSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->auto_ml_job_summaries = $auto_ml_job_summaries ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListCandidatesForAutoMLJobRequest {
  public AutoMLJobName $auto_ml_job_name;
  public CandidateName $candidate_name_equals;
  public AutoMLMaxResults $max_results;
  public NextToken $next_token;
  public CandidateSortBy $sort_by;
  public AutoMLSortOrder $sort_order;
  public CandidateStatus $status_equals;

  public function __construct(shape(
  ?'auto_ml_job_name' => AutoMLJobName,
  ?'candidate_name_equals' => CandidateName,
  ?'max_results' => AutoMLMaxResults,
  ?'next_token' => NextToken,
  ?'sort_by' => CandidateSortBy,
  ?'sort_order' => AutoMLSortOrder,
  ?'status_equals' => CandidateStatus,
  ) $s = shape()) {
    $this->auto_ml_job_name = $auto_ml_job_name ?? "";
    $this->candidate_name_equals = $candidate_name_equals ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->status_equals = $status_equals ?? ;
  }
}

class ListCandidatesForAutoMLJobResponse {
  public AutoMLCandidates $candidates;
  public NextToken $next_token;

  public function __construct(shape(
  ?'candidates' => AutoMLCandidates,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->candidates = $candidates ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListCodeRepositoriesInput {
  public CreationTime $creation_time_after;
  public CreationTime $creation_time_before;
  public Timestamp $last_modified_time_after;
  public Timestamp $last_modified_time_before;
  public MaxResults $max_results;
  public CodeRepositoryNameContains $name_contains;
  public NextToken $next_token;
  public CodeRepositorySortBy $sort_by;
  public CodeRepositorySortOrder $sort_order;

  public function __construct(shape(
  ?'creation_time_after' => CreationTime,
  ?'creation_time_before' => CreationTime,
  ?'last_modified_time_after' => Timestamp,
  ?'last_modified_time_before' => Timestamp,
  ?'max_results' => MaxResults,
  ?'name_contains' => CodeRepositoryNameContains,
  ?'next_token' => NextToken,
  ?'sort_by' => CodeRepositorySortBy,
  ?'sort_order' => CodeRepositorySortOrder,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->last_modified_time_after = $last_modified_time_after ?? ;
    $this->last_modified_time_before = $last_modified_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
  }
}

class ListCodeRepositoriesOutput {
  public CodeRepositorySummaryList $code_repository_summary_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'code_repository_summary_list' => CodeRepositorySummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->code_repository_summary_list = $code_repository_summary_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListCompilationJobsRequest {
  public CreationTime $creation_time_after;
  public CreationTime $creation_time_before;
  public LastModifiedTime $last_modified_time_after;
  public LastModifiedTime $last_modified_time_before;
  public MaxResults $max_results;
  public NameContains $name_contains;
  public NextToken $next_token;
  public ListCompilationJobsSortBy $sort_by;
  public SortOrder $sort_order;
  public CompilationJobStatus $status_equals;

  public function __construct(shape(
  ?'creation_time_after' => CreationTime,
  ?'creation_time_before' => CreationTime,
  ?'last_modified_time_after' => LastModifiedTime,
  ?'last_modified_time_before' => LastModifiedTime,
  ?'max_results' => MaxResults,
  ?'name_contains' => NameContains,
  ?'next_token' => NextToken,
  ?'sort_by' => ListCompilationJobsSortBy,
  ?'sort_order' => SortOrder,
  ?'status_equals' => CompilationJobStatus,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->last_modified_time_after = $last_modified_time_after ?? ;
    $this->last_modified_time_before = $last_modified_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->status_equals = $status_equals ?? ;
  }
}

class ListCompilationJobsResponse {
  public CompilationJobSummaries $compilation_job_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'compilation_job_summaries' => CompilationJobSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->compilation_job_summaries = $compilation_job_summaries ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type ListCompilationJobsSortBy = string;

class ListDomainsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListDomainsResponse {
  public DomainList $domains;
  public NextToken $next_token;

  public function __construct(shape(
  ?'domains' => DomainList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->domains = $domains ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListEndpointConfigsInput {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public MaxResults $max_results;
  public EndpointConfigNameContains $name_contains;
  public PaginationToken $next_token;
  public EndpointConfigSortKey $sort_by;
  public OrderKey $sort_order;

  public function __construct(shape(
  ?'creation_time_after' => Timestamp,
  ?'creation_time_before' => Timestamp,
  ?'max_results' => MaxResults,
  ?'name_contains' => EndpointConfigNameContains,
  ?'next_token' => PaginationToken,
  ?'sort_by' => EndpointConfigSortKey,
  ?'sort_order' => OrderKey,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
  }
}

class ListEndpointConfigsOutput {
  public EndpointConfigSummaryList $endpoint_configs;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'endpoint_configs' => EndpointConfigSummaryList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->endpoint_configs = $endpoint_configs ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListEndpointsInput {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public Timestamp $last_modified_time_after;
  public Timestamp $last_modified_time_before;
  public MaxResults $max_results;
  public EndpointNameContains $name_contains;
  public PaginationToken $next_token;
  public EndpointSortKey $sort_by;
  public OrderKey $sort_order;
  public EndpointStatus $status_equals;

  public function __construct(shape(
  ?'creation_time_after' => Timestamp,
  ?'creation_time_before' => Timestamp,
  ?'last_modified_time_after' => Timestamp,
  ?'last_modified_time_before' => Timestamp,
  ?'max_results' => MaxResults,
  ?'name_contains' => EndpointNameContains,
  ?'next_token' => PaginationToken,
  ?'sort_by' => EndpointSortKey,
  ?'sort_order' => OrderKey,
  ?'status_equals' => EndpointStatus,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->last_modified_time_after = $last_modified_time_after ?? ;
    $this->last_modified_time_before = $last_modified_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->status_equals = $status_equals ?? ;
  }
}

class ListEndpointsOutput {
  public EndpointSummaryList $endpoints;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'endpoints' => EndpointSummaryList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->endpoints = $endpoints ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListExperimentsRequest {
  public Timestamp $created_after;
  public Timestamp $created_before;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortExperimentsBy $sort_by;
  public SortOrder $sort_order;

  public function __construct(shape(
  ?'created_after' => Timestamp,
  ?'created_before' => Timestamp,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_by' => SortExperimentsBy,
  ?'sort_order' => SortOrder,
  ) $s = shape()) {
    $this->created_after = $created_after ?? ;
    $this->created_before = $created_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
  }
}

class ListExperimentsResponse {
  public ExperimentSummaries $experiment_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'experiment_summaries' => ExperimentSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->experiment_summaries = $experiment_summaries ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListFlowDefinitionsRequest {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortOrder $sort_order;

  public function __construct(shape(
  ?'creation_time_after' => Timestamp,
  ?'creation_time_before' => Timestamp,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_order' => SortOrder,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_order = $sort_order ?? "";
  }
}

class ListFlowDefinitionsResponse {
  public FlowDefinitionSummaries $flow_definition_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'flow_definition_summaries' => FlowDefinitionSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->flow_definition_summaries = $flow_definition_summaries ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListHumanTaskUisRequest {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortOrder $sort_order;

  public function __construct(shape(
  ?'creation_time_after' => Timestamp,
  ?'creation_time_before' => Timestamp,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_order' => SortOrder,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_order = $sort_order ?? "";
  }
}

class ListHumanTaskUisResponse {
  public HumanTaskUiSummaries $human_task_ui_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'human_task_ui_summaries' => HumanTaskUiSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->human_task_ui_summaries = $human_task_ui_summaries ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListHyperParameterTuningJobsRequest {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public Timestamp $last_modified_time_after;
  public Timestamp $last_modified_time_before;
  public MaxResults $max_results;
  public NameContains $name_contains;
  public NextToken $next_token;
  public HyperParameterTuningJobSortByOptions $sort_by;
  public SortOrder $sort_order;
  public HyperParameterTuningJobStatus $status_equals;

  public function __construct(shape(
  ?'creation_time_after' => Timestamp,
  ?'creation_time_before' => Timestamp,
  ?'last_modified_time_after' => Timestamp,
  ?'last_modified_time_before' => Timestamp,
  ?'max_results' => MaxResults,
  ?'name_contains' => NameContains,
  ?'next_token' => NextToken,
  ?'sort_by' => HyperParameterTuningJobSortByOptions,
  ?'sort_order' => SortOrder,
  ?'status_equals' => HyperParameterTuningJobStatus,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->last_modified_time_after = $last_modified_time_after ?? ;
    $this->last_modified_time_before = $last_modified_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->status_equals = $status_equals ?? ;
  }
}

class ListHyperParameterTuningJobsResponse {
  public HyperParameterTuningJobSummaries $hyper_parameter_tuning_job_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'hyper_parameter_tuning_job_summaries' => HyperParameterTuningJobSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->hyper_parameter_tuning_job_summaries = $hyper_parameter_tuning_job_summaries ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListLabelingJobsForWorkteamRequest {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public JobReferenceCodeContains $job_reference_code_contains;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ListLabelingJobsForWorkteamSortByOptions $sort_by;
  public SortOrder $sort_order;
  public WorkteamArn $workteam_arn;

  public function __construct(shape(
  ?'creation_time_after' => Timestamp,
  ?'creation_time_before' => Timestamp,
  ?'job_reference_code_contains' => JobReferenceCodeContains,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_by' => ListLabelingJobsForWorkteamSortByOptions,
  ?'sort_order' => SortOrder,
  ?'workteam_arn' => WorkteamArn,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->job_reference_code_contains = $job_reference_code_contains ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->workteam_arn = $workteam_arn ?? "";
  }
}

class ListLabelingJobsForWorkteamResponse {
  public LabelingJobForWorkteamSummaryList $labeling_job_summary_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'labeling_job_summary_list' => LabelingJobForWorkteamSummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->labeling_job_summary_list = $labeling_job_summary_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type ListLabelingJobsForWorkteamSortByOptions = string;

class ListLabelingJobsRequest {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public Timestamp $last_modified_time_after;
  public Timestamp $last_modified_time_before;
  public MaxResults $max_results;
  public NameContains $name_contains;
  public NextToken $next_token;
  public SortBy $sort_by;
  public SortOrder $sort_order;
  public LabelingJobStatus $status_equals;

  public function __construct(shape(
  ?'creation_time_after' => Timestamp,
  ?'creation_time_before' => Timestamp,
  ?'last_modified_time_after' => Timestamp,
  ?'last_modified_time_before' => Timestamp,
  ?'max_results' => MaxResults,
  ?'name_contains' => NameContains,
  ?'next_token' => NextToken,
  ?'sort_by' => SortBy,
  ?'sort_order' => SortOrder,
  ?'status_equals' => LabelingJobStatus,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->last_modified_time_after = $last_modified_time_after ?? ;
    $this->last_modified_time_before = $last_modified_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->status_equals = $status_equals ?? ;
  }
}

class ListLabelingJobsResponse {
  public LabelingJobSummaryList $labeling_job_summary_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'labeling_job_summary_list' => LabelingJobSummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->labeling_job_summary_list = $labeling_job_summary_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListModelPackagesInput {
  public CreationTime $creation_time_after;
  public CreationTime $creation_time_before;
  public MaxResults $max_results;
  public NameContains $name_contains;
  public NextToken $next_token;
  public ModelPackageSortBy $sort_by;
  public SortOrder $sort_order;

  public function __construct(shape(
  ?'creation_time_after' => CreationTime,
  ?'creation_time_before' => CreationTime,
  ?'max_results' => MaxResults,
  ?'name_contains' => NameContains,
  ?'next_token' => NextToken,
  ?'sort_by' => ModelPackageSortBy,
  ?'sort_order' => SortOrder,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
  }
}

class ListModelPackagesOutput {
  public ModelPackageSummaryList $model_package_summary_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'model_package_summary_list' => ModelPackageSummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->model_package_summary_list = $model_package_summary_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListModelsInput {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public MaxResults $max_results;
  public ModelNameContains $name_contains;
  public PaginationToken $next_token;
  public ModelSortKey $sort_by;
  public OrderKey $sort_order;

  public function __construct(shape(
  ?'creation_time_after' => Timestamp,
  ?'creation_time_before' => Timestamp,
  ?'max_results' => MaxResults,
  ?'name_contains' => ModelNameContains,
  ?'next_token' => PaginationToken,
  ?'sort_by' => ModelSortKey,
  ?'sort_order' => OrderKey,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
  }
}

class ListModelsOutput {
  public ModelSummaryList $models;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'models' => ModelSummaryList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->models = $models ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListMonitoringExecutionsRequest {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public EndpointName $endpoint_name;
  public Timestamp $last_modified_time_after;
  public Timestamp $last_modified_time_before;
  public MaxResults $max_results;
  public MonitoringScheduleName $monitoring_schedule_name;
  public NextToken $next_token;
  public Timestamp $scheduled_time_after;
  public Timestamp $scheduled_time_before;
  public MonitoringExecutionSortKey $sort_by;
  public SortOrder $sort_order;
  public ExecutionStatus $status_equals;

  public function __construct(shape(
  ?'creation_time_after' => Timestamp,
  ?'creation_time_before' => Timestamp,
  ?'endpoint_name' => EndpointName,
  ?'last_modified_time_after' => Timestamp,
  ?'last_modified_time_before' => Timestamp,
  ?'max_results' => MaxResults,
  ?'monitoring_schedule_name' => MonitoringScheduleName,
  ?'next_token' => NextToken,
  ?'scheduled_time_after' => Timestamp,
  ?'scheduled_time_before' => Timestamp,
  ?'sort_by' => MonitoringExecutionSortKey,
  ?'sort_order' => SortOrder,
  ?'status_equals' => ExecutionStatus,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->endpoint_name = $endpoint_name ?? "";
    $this->last_modified_time_after = $last_modified_time_after ?? ;
    $this->last_modified_time_before = $last_modified_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->monitoring_schedule_name = $monitoring_schedule_name ?? "";
    $this->next_token = $next_token ?? "";
    $this->scheduled_time_after = $scheduled_time_after ?? ;
    $this->scheduled_time_before = $scheduled_time_before ?? ;
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->status_equals = $status_equals ?? ;
  }
}

class ListMonitoringExecutionsResponse {
  public MonitoringExecutionSummaryList $monitoring_execution_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'monitoring_execution_summaries' => MonitoringExecutionSummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->monitoring_execution_summaries = $monitoring_execution_summaries ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListMonitoringSchedulesRequest {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public EndpointName $endpoint_name;
  public Timestamp $last_modified_time_after;
  public Timestamp $last_modified_time_before;
  public MaxResults $max_results;
  public NameContains $name_contains;
  public NextToken $next_token;
  public MonitoringScheduleSortKey $sort_by;
  public SortOrder $sort_order;
  public ScheduleStatus $status_equals;

  public function __construct(shape(
  ?'creation_time_after' => Timestamp,
  ?'creation_time_before' => Timestamp,
  ?'endpoint_name' => EndpointName,
  ?'last_modified_time_after' => Timestamp,
  ?'last_modified_time_before' => Timestamp,
  ?'max_results' => MaxResults,
  ?'name_contains' => NameContains,
  ?'next_token' => NextToken,
  ?'sort_by' => MonitoringScheduleSortKey,
  ?'sort_order' => SortOrder,
  ?'status_equals' => ScheduleStatus,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->endpoint_name = $endpoint_name ?? "";
    $this->last_modified_time_after = $last_modified_time_after ?? ;
    $this->last_modified_time_before = $last_modified_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->status_equals = $status_equals ?? ;
  }
}

class ListMonitoringSchedulesResponse {
  public MonitoringScheduleSummaryList $monitoring_schedule_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'monitoring_schedule_summaries' => MonitoringScheduleSummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->monitoring_schedule_summaries = $monitoring_schedule_summaries ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListNotebookInstanceLifecycleConfigsInput {
  public CreationTime $creation_time_after;
  public CreationTime $creation_time_before;
  public LastModifiedTime $last_modified_time_after;
  public LastModifiedTime $last_modified_time_before;
  public MaxResults $max_results;
  public NotebookInstanceLifecycleConfigNameContains $name_contains;
  public NextToken $next_token;
  public NotebookInstanceLifecycleConfigSortKey $sort_by;
  public NotebookInstanceLifecycleConfigSortOrder $sort_order;

  public function __construct(shape(
  ?'creation_time_after' => CreationTime,
  ?'creation_time_before' => CreationTime,
  ?'last_modified_time_after' => LastModifiedTime,
  ?'last_modified_time_before' => LastModifiedTime,
  ?'max_results' => MaxResults,
  ?'name_contains' => NotebookInstanceLifecycleConfigNameContains,
  ?'next_token' => NextToken,
  ?'sort_by' => NotebookInstanceLifecycleConfigSortKey,
  ?'sort_order' => NotebookInstanceLifecycleConfigSortOrder,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->last_modified_time_after = $last_modified_time_after ?? ;
    $this->last_modified_time_before = $last_modified_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
  }
}

class ListNotebookInstanceLifecycleConfigsOutput {
  public NextToken $next_token;
  public NotebookInstanceLifecycleConfigSummaryList $notebook_instance_lifecycle_configs;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'notebook_instance_lifecycle_configs' => NotebookInstanceLifecycleConfigSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->notebook_instance_lifecycle_configs = $notebook_instance_lifecycle_configs ?? ;
  }
}

class ListNotebookInstancesInput {
  public CodeRepositoryNameOrUrl $additional_code_repository_equals;
  public CreationTime $creation_time_after;
  public CreationTime $creation_time_before;
  public CodeRepositoryContains $default_code_repository_contains;
  public LastModifiedTime $last_modified_time_after;
  public LastModifiedTime $last_modified_time_before;
  public MaxResults $max_results;
  public NotebookInstanceNameContains $name_contains;
  public NextToken $next_token;
  public NotebookInstanceLifecycleConfigName $notebook_instance_lifecycle_config_name_contains;
  public NotebookInstanceSortKey $sort_by;
  public NotebookInstanceSortOrder $sort_order;
  public NotebookInstanceStatus $status_equals;

  public function __construct(shape(
  ?'additional_code_repository_equals' => CodeRepositoryNameOrUrl,
  ?'creation_time_after' => CreationTime,
  ?'creation_time_before' => CreationTime,
  ?'default_code_repository_contains' => CodeRepositoryContains,
  ?'last_modified_time_after' => LastModifiedTime,
  ?'last_modified_time_before' => LastModifiedTime,
  ?'max_results' => MaxResults,
  ?'name_contains' => NotebookInstanceNameContains,
  ?'next_token' => NextToken,
  ?'notebook_instance_lifecycle_config_name_contains' => NotebookInstanceLifecycleConfigName,
  ?'sort_by' => NotebookInstanceSortKey,
  ?'sort_order' => NotebookInstanceSortOrder,
  ?'status_equals' => NotebookInstanceStatus,
  ) $s = shape()) {
    $this->additional_code_repository_equals = $additional_code_repository_equals ?? ;
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->default_code_repository_contains = $default_code_repository_contains ?? ;
    $this->last_modified_time_after = $last_modified_time_after ?? ;
    $this->last_modified_time_before = $last_modified_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
    $this->notebook_instance_lifecycle_config_name_contains = $notebook_instance_lifecycle_config_name_contains ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->status_equals = $status_equals ?? ;
  }
}

class ListNotebookInstancesOutput {
  public NextToken $next_token;
  public NotebookInstanceSummaryList $notebook_instances;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'notebook_instances' => NotebookInstanceSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->notebook_instances = $notebook_instances ?? ;
  }
}

class ListProcessingJobsRequest {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public Timestamp $last_modified_time_after;
  public Timestamp $last_modified_time_before;
  public MaxResults $max_results;
  public string $name_contains;
  public NextToken $next_token;
  public SortBy $sort_by;
  public SortOrder $sort_order;
  public ProcessingJobStatus $status_equals;

  public function __construct(shape(
  ?'creation_time_after' => Timestamp,
  ?'creation_time_before' => Timestamp,
  ?'last_modified_time_after' => Timestamp,
  ?'last_modified_time_before' => Timestamp,
  ?'max_results' => MaxResults,
  ?'name_contains' => string,
  ?'next_token' => NextToken,
  ?'sort_by' => SortBy,
  ?'sort_order' => SortOrder,
  ?'status_equals' => ProcessingJobStatus,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->last_modified_time_after = $last_modified_time_after ?? ;
    $this->last_modified_time_before = $last_modified_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->status_equals = $status_equals ?? ;
  }
}

class ListProcessingJobsResponse {
  public NextToken $next_token;
  public ProcessingJobSummaries $processing_job_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'processing_job_summaries' => ProcessingJobSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->processing_job_summaries = $processing_job_summaries ?? [];
  }
}

class ListSubscribedWorkteamsRequest {
  public MaxResults $max_results;
  public WorkteamName $name_contains;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'name_contains' => WorkteamName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListSubscribedWorkteamsResponse {
  public NextToken $next_token;
  public SubscribedWorkteams $subscribed_workteams;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'subscribed_workteams' => SubscribedWorkteams,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->subscribed_workteams = $subscribed_workteams ?? [];
  }
}

class ListTagsInput {
  public ListTagsMaxResults $max_results;
  public NextToken $next_token;
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'max_results' => ListTagsMaxResults,
  ?'next_token' => NextToken,
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_arn = $resource_arn ?? "";
  }
}

type ListTagsMaxResults = int;

class ListTagsOutput {
  public NextToken $next_token;
  public TagList $tags;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? ;
  }
}

class ListTrainingJobsForHyperParameterTuningJobRequest {
  public HyperParameterTuningJobName $hyper_parameter_tuning_job_name;
  public MaxResults $max_results;
  public NextToken $next_token;
  public TrainingJobSortByOptions $sort_by;
  public SortOrder $sort_order;
  public TrainingJobStatus $status_equals;

  public function __construct(shape(
  ?'hyper_parameter_tuning_job_name' => HyperParameterTuningJobName,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_by' => TrainingJobSortByOptions,
  ?'sort_order' => SortOrder,
  ?'status_equals' => TrainingJobStatus,
  ) $s = shape()) {
    $this->hyper_parameter_tuning_job_name = $hyper_parameter_tuning_job_name ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->status_equals = $status_equals ?? ;
  }
}

class ListTrainingJobsForHyperParameterTuningJobResponse {
  public NextToken $next_token;
  public HyperParameterTrainingJobSummaries $training_job_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'training_job_summaries' => HyperParameterTrainingJobSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->training_job_summaries = $training_job_summaries ?? [];
  }
}

class ListTrainingJobsRequest {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public Timestamp $last_modified_time_after;
  public Timestamp $last_modified_time_before;
  public MaxResults $max_results;
  public NameContains $name_contains;
  public NextToken $next_token;
  public SortBy $sort_by;
  public SortOrder $sort_order;
  public TrainingJobStatus $status_equals;

  public function __construct(shape(
  ?'creation_time_after' => Timestamp,
  ?'creation_time_before' => Timestamp,
  ?'last_modified_time_after' => Timestamp,
  ?'last_modified_time_before' => Timestamp,
  ?'max_results' => MaxResults,
  ?'name_contains' => NameContains,
  ?'next_token' => NextToken,
  ?'sort_by' => SortBy,
  ?'sort_order' => SortOrder,
  ?'status_equals' => TrainingJobStatus,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->last_modified_time_after = $last_modified_time_after ?? ;
    $this->last_modified_time_before = $last_modified_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->status_equals = $status_equals ?? ;
  }
}

class ListTrainingJobsResponse {
  public NextToken $next_token;
  public TrainingJobSummaries $training_job_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'training_job_summaries' => TrainingJobSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->training_job_summaries = $training_job_summaries ?? [];
  }
}

class ListTransformJobsRequest {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public Timestamp $last_modified_time_after;
  public Timestamp $last_modified_time_before;
  public MaxResults $max_results;
  public NameContains $name_contains;
  public NextToken $next_token;
  public SortBy $sort_by;
  public SortOrder $sort_order;
  public TransformJobStatus $status_equals;

  public function __construct(shape(
  ?'creation_time_after' => Timestamp,
  ?'creation_time_before' => Timestamp,
  ?'last_modified_time_after' => Timestamp,
  ?'last_modified_time_before' => Timestamp,
  ?'max_results' => MaxResults,
  ?'name_contains' => NameContains,
  ?'next_token' => NextToken,
  ?'sort_by' => SortBy,
  ?'sort_order' => SortOrder,
  ?'status_equals' => TransformJobStatus,
  ) $s = shape()) {
    $this->creation_time_after = $creation_time_after ?? ;
    $this->creation_time_before = $creation_time_before ?? ;
    $this->last_modified_time_after = $last_modified_time_after ?? ;
    $this->last_modified_time_before = $last_modified_time_before ?? ;
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->status_equals = $status_equals ?? ;
  }
}

class ListTransformJobsResponse {
  public NextToken $next_token;
  public TransformJobSummaries $transform_job_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'transform_job_summaries' => TransformJobSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->transform_job_summaries = $transform_job_summaries ?? [];
  }
}

type ListTrialComponentKey256 = vec<TrialComponentKey256>;

class ListTrialComponentsRequest {
  public Timestamp $created_after;
  public Timestamp $created_before;
  public ExperimentEntityName $experiment_name;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortTrialComponentsBy $sort_by;
  public SortOrder $sort_order;
  public String256 $source_arn;
  public ExperimentEntityName $trial_name;

  public function __construct(shape(
  ?'created_after' => Timestamp,
  ?'created_before' => Timestamp,
  ?'experiment_name' => ExperimentEntityName,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_by' => SortTrialComponentsBy,
  ?'sort_order' => SortOrder,
  ?'source_arn' => String256,
  ?'trial_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->created_after = $created_after ?? ;
    $this->created_before = $created_before ?? ;
    $this->experiment_name = $experiment_name ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->source_arn = $source_arn ?? ;
    $this->trial_name = $trial_name ?? ;
  }
}

class ListTrialComponentsResponse {
  public NextToken $next_token;
  public TrialComponentSummaries $trial_component_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'trial_component_summaries' => TrialComponentSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->trial_component_summaries = $trial_component_summaries ?? [];
  }
}

class ListTrialsRequest {
  public Timestamp $created_after;
  public Timestamp $created_before;
  public ExperimentEntityName $experiment_name;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortTrialsBy $sort_by;
  public SortOrder $sort_order;
  public ExperimentEntityName $trial_component_name;

  public function __construct(shape(
  ?'created_after' => Timestamp,
  ?'created_before' => Timestamp,
  ?'experiment_name' => ExperimentEntityName,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_by' => SortTrialsBy,
  ?'sort_order' => SortOrder,
  ?'trial_component_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->created_after = $created_after ?? ;
    $this->created_before = $created_before ?? ;
    $this->experiment_name = $experiment_name ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->trial_component_name = $trial_component_name ?? ;
  }
}

class ListTrialsResponse {
  public NextToken $next_token;
  public TrialSummaries $trial_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'trial_summaries' => TrialSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->trial_summaries = $trial_summaries ?? [];
  }
}

class ListUserProfilesRequest {
  public DomainId $domain_id_equals;
  public MaxResults $max_results;
  public NextToken $next_token;
  public UserProfileSortKey $sort_by;
  public SortOrder $sort_order;
  public UserProfileName $user_profile_name_contains;

  public function __construct(shape(
  ?'domain_id_equals' => DomainId,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_by' => UserProfileSortKey,
  ?'sort_order' => SortOrder,
  ?'user_profile_name_contains' => UserProfileName,
  ) $s = shape()) {
    $this->domain_id_equals = $domain_id_equals ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
    $this->user_profile_name_contains = $user_profile_name_contains ?? ;
  }
}

class ListUserProfilesResponse {
  public NextToken $next_token;
  public UserProfileList $user_profiles;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'user_profiles' => UserProfileList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->user_profiles = $user_profiles ?? ;
  }
}

class ListWorkteamsRequest {
  public MaxResults $max_results;
  public WorkteamName $name_contains;
  public NextToken $next_token;
  public ListWorkteamsSortByOptions $sort_by;
  public SortOrder $sort_order;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'name_contains' => WorkteamName,
  ?'next_token' => NextToken,
  ?'sort_by' => ListWorkteamsSortByOptions,
  ?'sort_order' => SortOrder,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
  }
}

class ListWorkteamsResponse {
  public NextToken $next_token;
  public Workteams $workteams;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'workteams' => Workteams,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->workteams = $workteams ?? [];
  }
}

type ListWorkteamsSortByOptions = string;

type MaxAutoMLJobRuntimeInSeconds = int;

type MaxCandidates = int;

type MaxConcurrentTaskCount = int;

type MaxConcurrentTransforms = int;

type MaxHumanLabeledObjectCount = int;

type MaxNumberOfTrainingJobs = int;

type MaxParallelTrainingJobs = int;

type MaxPayloadInMB = int;

type MaxPercentageOfInputDatasetLabeled = int;

type MaxResults = int;

type MaxRuntimeInSeconds = int;

type MaxRuntimePerTrainingJobInSeconds = int;

type MaxWaitTimeInSeconds = int;

type MediaType = string;

class MemberDefinition {
  public CognitoMemberDefinition $cognito_member_definition;

  public function __construct(shape(
  ?'cognito_member_definition' => CognitoMemberDefinition,
  ) $s = shape()) {
    $this->cognito_member_definition = $cognito_member_definition ?? null;
  }
}

type MemberDefinitions = vec<MemberDefinition>;

class MetricData {
  public MetricName $metric_name;
  public Timestamp $timestamp;
  public Float $value;

  public function __construct(shape(
  ?'metric_name' => MetricName,
  ?'timestamp' => Timestamp,
  ?'value' => Float,
  ) $s = shape()) {
    $this->metric_name = $metric_name ?? "";
    $this->timestamp = $timestamp ?? 0;
    $this->value = $value ?? ;
  }
}

class MetricDefinition {
  public MetricName $name;
  public MetricRegex $regex;

  public function __construct(shape(
  ?'name' => MetricName,
  ?'regex' => MetricRegex,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->regex = $regex ?? ;
  }
}

type MetricDefinitionList = vec<MetricDefinition>;

type MetricName = string;

type MetricRegex = string;

type MetricValue = float;

type ModelArn = string;

class ModelArtifacts {
  public S3Uri $s_3_model_artifacts;

  public function __construct(shape(
  ?'s_3_model_artifacts' => S3Uri,
  ) $s = shape()) {
    $this->s_3_model_artifacts = $s_3_model_artifacts ?? ;
  }
}

type ModelName = string;

type ModelNameContains = string;

type ModelPackageArn = string;

class ModelPackageContainerDefinition {
  public ContainerHostname $container_hostname;
  public Image $image;
  public ImageDigest $image_digest;
  public Url $model_data_url;
  public ProductId $product_id;

  public function __construct(shape(
  ?'container_hostname' => ContainerHostname,
  ?'image' => Image,
  ?'image_digest' => ImageDigest,
  ?'model_data_url' => Url,
  ?'product_id' => ProductId,
  ) $s = shape()) {
    $this->container_hostname = $container_hostname ?? "";
    $this->image = $image ?? "";
    $this->image_digest = $image_digest ?? "";
    $this->model_data_url = $model_data_url ?? ;
    $this->product_id = $product_id ?? "";
  }
}

type ModelPackageContainerDefinitionList = vec<ModelPackageContainerDefinition>;

type ModelPackageSortBy = string;

type ModelPackageStatus = string;

class ModelPackageStatusDetails {
  public ModelPackageStatusItemList $image_scan_statuses;
  public ModelPackageStatusItemList $validation_statuses;

  public function __construct(shape(
  ?'image_scan_statuses' => ModelPackageStatusItemList,
  ?'validation_statuses' => ModelPackageStatusItemList,
  ) $s = shape()) {
    $this->image_scan_statuses = $image_scan_statuses ?? ;
    $this->validation_statuses = $validation_statuses ?? ;
  }
}

class ModelPackageStatusItem {
  public string $failure_reason;
  public EntityName $name;
  public DetailedModelPackageStatus $status;

  public function __construct(shape(
  ?'failure_reason' => string,
  ?'name' => EntityName,
  ?'status' => DetailedModelPackageStatus,
  ) $s = shape()) {
    $this->failure_reason = $failure_reason ?? "";
    $this->name = $name ?? ;
    $this->status = $status ?? ;
  }
}

type ModelPackageStatusItemList = vec<ModelPackageStatusItem>;

class ModelPackageSummary {
  public CreationTime $creation_time;
  public ModelPackageArn $model_package_arn;
  public EntityDescription $model_package_description;
  public EntityName $model_package_name;
  public ModelPackageStatus $model_package_status;

  public function __construct(shape(
  ?'creation_time' => CreationTime,
  ?'model_package_arn' => ModelPackageArn,
  ?'model_package_description' => EntityDescription,
  ?'model_package_name' => EntityName,
  ?'model_package_status' => ModelPackageStatus,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->model_package_arn = $model_package_arn ?? "";
    $this->model_package_description = $model_package_description ?? ;
    $this->model_package_name = $model_package_name ?? ;
    $this->model_package_status = $model_package_status ?? "";
  }
}

type ModelPackageSummaryList = vec<ModelPackageSummary>;

class ModelPackageValidationProfile {
  public EntityName $profile_name;
  public TransformJobDefinition $transform_job_definition;

  public function __construct(shape(
  ?'profile_name' => EntityName,
  ?'transform_job_definition' => TransformJobDefinition,
  ) $s = shape()) {
    $this->profile_name = $profile_name ?? ;
    $this->transform_job_definition = $transform_job_definition ?? null;
  }
}

type ModelPackageValidationProfiles = vec<ModelPackageValidationProfile>;

class ModelPackageValidationSpecification {
  public ModelPackageValidationProfiles $validation_profiles;
  public RoleArn $validation_role;

  public function __construct(shape(
  ?'validation_profiles' => ModelPackageValidationProfiles,
  ?'validation_role' => RoleArn,
  ) $s = shape()) {
    $this->validation_profiles = $validation_profiles ?? ;
    $this->validation_role = $validation_role ?? ;
  }
}

type ModelSortKey = string;

class ModelSummary {
  public Timestamp $creation_time;
  public ModelArn $model_arn;
  public ModelName $model_name;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'model_arn' => ModelArn,
  ?'model_name' => ModelName,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->model_arn = $model_arn ?? "";
    $this->model_name = $model_name ?? "";
  }
}

type ModelSummaryList = vec<ModelSummary>;

class MonitoringAppSpecification {
  public MonitoringContainerArguments $container_arguments;
  public ContainerEntrypoint $container_entrypoint;
  public ImageUri $image_uri;
  public S3Uri $post_analytics_processor_source_uri;
  public S3Uri $record_preprocessor_source_uri;

  public function __construct(shape(
  ?'container_arguments' => MonitoringContainerArguments,
  ?'container_entrypoint' => ContainerEntrypoint,
  ?'image_uri' => ImageUri,
  ?'post_analytics_processor_source_uri' => S3Uri,
  ?'record_preprocessor_source_uri' => S3Uri,
  ) $s = shape()) {
    $this->container_arguments = $container_arguments ?? [];
    $this->container_entrypoint = $container_entrypoint ?? [];
    $this->image_uri = $image_uri ?? "";
    $this->post_analytics_processor_source_uri = $post_analytics_processor_source_uri ?? ;
    $this->record_preprocessor_source_uri = $record_preprocessor_source_uri ?? ;
  }
}

class MonitoringBaselineConfig {
  public MonitoringConstraintsResource $constraints_resource;
  public MonitoringStatisticsResource $statistics_resource;

  public function __construct(shape(
  ?'constraints_resource' => MonitoringConstraintsResource,
  ?'statistics_resource' => MonitoringStatisticsResource,
  ) $s = shape()) {
    $this->constraints_resource = $constraints_resource ?? ;
    $this->statistics_resource = $statistics_resource ?? ;
  }
}

class MonitoringClusterConfig {
  public ProcessingInstanceCount $instance_count;
  public ProcessingInstanceType $instance_type;
  public KmsKeyId $volume_kms_key_id;
  public ProcessingVolumeSizeInGB $volume_size_in_gb;

  public function __construct(shape(
  ?'instance_count' => ProcessingInstanceCount,
  ?'instance_type' => ProcessingInstanceType,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'volume_size_in_gb' => ProcessingVolumeSizeInGB,
  ) $s = shape()) {
    $this->instance_count = $instance_count ?? ;
    $this->instance_type = $instance_type ?? "";
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->volume_size_in_gb = $volume_size_in_gb ?? 0;
  }
}

class MonitoringConstraintsResource {
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->s_3_uri = $s_3_uri ?? "";
  }
}

type MonitoringContainerArguments = vec<ContainerArgument>;

type MonitoringEnvironmentMap = dict<ProcessingEnvironmentKey, ProcessingEnvironmentValue>;

type MonitoringExecutionSortKey = string;

class MonitoringExecutionSummary {
  public Timestamp $creation_time;
  public EndpointName $endpoint_name;
  public FailureReason $failure_reason;
  public Timestamp $last_modified_time;
  public ExecutionStatus $monitoring_execution_status;
  public MonitoringScheduleName $monitoring_schedule_name;
  public ProcessingJobArn $processing_job_arn;
  public Timestamp $scheduled_time;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'endpoint_name' => EndpointName,
  ?'failure_reason' => FailureReason,
  ?'last_modified_time' => Timestamp,
  ?'monitoring_execution_status' => ExecutionStatus,
  ?'monitoring_schedule_name' => MonitoringScheduleName,
  ?'processing_job_arn' => ProcessingJobArn,
  ?'scheduled_time' => Timestamp,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->endpoint_name = $endpoint_name ?? "";
    $this->failure_reason = $failure_reason ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->monitoring_execution_status = $monitoring_execution_status ?? ;
    $this->monitoring_schedule_name = $monitoring_schedule_name ?? "";
    $this->processing_job_arn = $processing_job_arn ?? "";
    $this->scheduled_time = $scheduled_time ?? ;
  }
}

type MonitoringExecutionSummaryList = vec<MonitoringExecutionSummary>;

class MonitoringInput {
  public EndpointInput $endpoint_input;

  public function __construct(shape(
  ?'endpoint_input' => EndpointInput,
  ) $s = shape()) {
    $this->endpoint_input = $endpoint_input ?? null;
  }
}

type MonitoringInputs = vec<MonitoringInput>;

class MonitoringJobDefinition {
  public MonitoringBaselineConfig $baseline_config;
  public MonitoringEnvironmentMap $environment;
  public MonitoringAppSpecification $monitoring_app_specification;
  public MonitoringInputs $monitoring_inputs;
  public MonitoringOutputConfig $monitoring_output_config;
  public MonitoringResources $monitoring_resources;
  public NetworkConfig $network_config;
  public RoleArn $role_arn;
  public MonitoringStoppingCondition $stopping_condition;

  public function __construct(shape(
  ?'baseline_config' => MonitoringBaselineConfig,
  ?'environment' => MonitoringEnvironmentMap,
  ?'monitoring_app_specification' => MonitoringAppSpecification,
  ?'monitoring_inputs' => MonitoringInputs,
  ?'monitoring_output_config' => MonitoringOutputConfig,
  ?'monitoring_resources' => MonitoringResources,
  ?'network_config' => NetworkConfig,
  ?'role_arn' => RoleArn,
  ?'stopping_condition' => MonitoringStoppingCondition,
  ) $s = shape()) {
    $this->baseline_config = $baseline_config ?? ;
    $this->environment = $environment ?? ;
    $this->monitoring_app_specification = $monitoring_app_specification ?? null;
    $this->monitoring_inputs = $monitoring_inputs ?? [];
    $this->monitoring_output_config = $monitoring_output_config ?? null;
    $this->monitoring_resources = $monitoring_resources ?? null;
    $this->network_config = $network_config ?? null;
    $this->role_arn = $role_arn ?? "";
    $this->stopping_condition = $stopping_condition ?? null;
  }
}

type MonitoringMaxRuntimeInSeconds = int;

class MonitoringOutput {
  public MonitoringS3Output $s_3_output;

  public function __construct(shape(
  ?'s_3_output' => MonitoringS3Output,
  ) $s = shape()) {
    $this->s_3_output = $s_3_output ?? ;
  }
}

class MonitoringOutputConfig {
  public KmsKeyId $kms_key_id;
  public MonitoringOutputs $monitoring_outputs;

  public function __construct(shape(
  ?'kms_key_id' => KmsKeyId,
  ?'monitoring_outputs' => MonitoringOutputs,
  ) $s = shape()) {
    $this->kms_key_id = $kms_key_id ?? "";
    $this->monitoring_outputs = $monitoring_outputs ?? [];
  }
}

type MonitoringOutputs = vec<MonitoringOutput>;

class MonitoringResources {
  public MonitoringClusterConfig $cluster_config;

  public function __construct(shape(
  ?'cluster_config' => MonitoringClusterConfig,
  ) $s = shape()) {
    $this->cluster_config = $cluster_config ?? ;
  }
}

class MonitoringS3Output {
  public ProcessingLocalPath $local_path;
  public ProcessingS3UploadMode $s_3_upload_mode;
  public MonitoringS3Uri $s_3_uri;

  public function __construct(shape(
  ?'local_path' => ProcessingLocalPath,
  ?'s_3_upload_mode' => ProcessingS3UploadMode,
  ?'s_3_uri' => MonitoringS3Uri,
  ) $s = shape()) {
    $this->local_path = $local_path ?? ;
    $this->s_3_upload_mode = $s_3_upload_mode ?? ;
    $this->s_3_uri = $s_3_uri ?? "";
  }
}

type MonitoringS3Uri = string;

type MonitoringScheduleArn = string;

class MonitoringScheduleConfig {
  public MonitoringJobDefinition $monitoring_job_definition;
  public ScheduleConfig $schedule_config;

  public function __construct(shape(
  ?'monitoring_job_definition' => MonitoringJobDefinition,
  ?'schedule_config' => ScheduleConfig,
  ) $s = shape()) {
    $this->monitoring_job_definition = $monitoring_job_definition ?? null;
    $this->schedule_config = $schedule_config ?? null;
  }
}

type MonitoringScheduleName = string;

type MonitoringScheduleSortKey = string;

class MonitoringScheduleSummary {
  public Timestamp $creation_time;
  public EndpointName $endpoint_name;
  public Timestamp $last_modified_time;
  public MonitoringScheduleArn $monitoring_schedule_arn;
  public MonitoringScheduleName $monitoring_schedule_name;
  public ScheduleStatus $monitoring_schedule_status;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'endpoint_name' => EndpointName,
  ?'last_modified_time' => Timestamp,
  ?'monitoring_schedule_arn' => MonitoringScheduleArn,
  ?'monitoring_schedule_name' => MonitoringScheduleName,
  ?'monitoring_schedule_status' => ScheduleStatus,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->endpoint_name = $endpoint_name ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->monitoring_schedule_arn = $monitoring_schedule_arn ?? "";
    $this->monitoring_schedule_name = $monitoring_schedule_name ?? "";
    $this->monitoring_schedule_status = $monitoring_schedule_status ?? ;
  }
}

type MonitoringScheduleSummaryList = vec<MonitoringScheduleSummary>;

class MonitoringStatisticsResource {
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->s_3_uri = $s_3_uri ?? "";
  }
}

class MonitoringStoppingCondition {
  public MonitoringMaxRuntimeInSeconds $max_runtime_in_seconds;

  public function __construct(shape(
  ?'max_runtime_in_seconds' => MonitoringMaxRuntimeInSeconds,
  ) $s = shape()) {
    $this->max_runtime_in_seconds = $max_runtime_in_seconds ?? 0;
  }
}

type NameContains = string;

class NestedFilters {
  public FilterList $filters;
  public ResourcePropertyName $nested_property_name;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'nested_property_name' => ResourcePropertyName,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->nested_property_name = $nested_property_name ?? ;
  }
}

type NestedFiltersList = vec<NestedFilters>;

class NetworkConfig {
  public boolean $enable_network_isolation;
  public VpcConfig $vpc_config;

  public function __construct(shape(
  ?'enable_network_isolation' => boolean,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->enable_network_isolation = $enable_network_isolation ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

type NetworkInterfaceId = string;

type NextToken = string;

type NotebookInstanceAcceleratorType = string;

type NotebookInstanceAcceleratorTypes = vec<NotebookInstanceAcceleratorType>;

type NotebookInstanceArn = string;

type NotebookInstanceLifecycleConfigArn = string;

type NotebookInstanceLifecycleConfigContent = string;

type NotebookInstanceLifecycleConfigList = vec<NotebookInstanceLifecycleHook>;

type NotebookInstanceLifecycleConfigName = string;

type NotebookInstanceLifecycleConfigNameContains = string;

type NotebookInstanceLifecycleConfigSortKey = string;

type NotebookInstanceLifecycleConfigSortOrder = string;

class NotebookInstanceLifecycleConfigSummary {
  public CreationTime $creation_time;
  public LastModifiedTime $last_modified_time;
  public NotebookInstanceLifecycleConfigArn $notebook_instance_lifecycle_config_arn;
  public NotebookInstanceLifecycleConfigName $notebook_instance_lifecycle_config_name;

  public function __construct(shape(
  ?'creation_time' => CreationTime,
  ?'last_modified_time' => LastModifiedTime,
  ?'notebook_instance_lifecycle_config_arn' => NotebookInstanceLifecycleConfigArn,
  ?'notebook_instance_lifecycle_config_name' => NotebookInstanceLifecycleConfigName,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->notebook_instance_lifecycle_config_arn = $notebook_instance_lifecycle_config_arn ?? "";
    $this->notebook_instance_lifecycle_config_name = $notebook_instance_lifecycle_config_name ?? "";
  }
}

type NotebookInstanceLifecycleConfigSummaryList = vec<NotebookInstanceLifecycleConfigSummary>;

class NotebookInstanceLifecycleHook {
  public NotebookInstanceLifecycleConfigContent $content;

  public function __construct(shape(
  ?'content' => NotebookInstanceLifecycleConfigContent,
  ) $s = shape()) {
    $this->content = $content ?? ;
  }
}

type NotebookInstanceName = string;

type NotebookInstanceNameContains = string;

type NotebookInstanceSortKey = string;

type NotebookInstanceSortOrder = string;

type NotebookInstanceStatus = string;

class NotebookInstanceSummary {
  public AdditionalCodeRepositoryNamesOrUrls $additional_code_repositories;
  public CreationTime $creation_time;
  public CodeRepositoryNameOrUrl $default_code_repository;
  public InstanceType $instance_type;
  public LastModifiedTime $last_modified_time;
  public NotebookInstanceArn $notebook_instance_arn;
  public NotebookInstanceLifecycleConfigName $notebook_instance_lifecycle_config_name;
  public NotebookInstanceName $notebook_instance_name;
  public NotebookInstanceStatus $notebook_instance_status;
  public NotebookInstanceUrl $url;

  public function __construct(shape(
  ?'additional_code_repositories' => AdditionalCodeRepositoryNamesOrUrls,
  ?'creation_time' => CreationTime,
  ?'default_code_repository' => CodeRepositoryNameOrUrl,
  ?'instance_type' => InstanceType,
  ?'last_modified_time' => LastModifiedTime,
  ?'notebook_instance_arn' => NotebookInstanceArn,
  ?'notebook_instance_lifecycle_config_name' => NotebookInstanceLifecycleConfigName,
  ?'notebook_instance_name' => NotebookInstanceName,
  ?'notebook_instance_status' => NotebookInstanceStatus,
  ?'url' => NotebookInstanceUrl,
  ) $s = shape()) {
    $this->additional_code_repositories = $additional_code_repositories ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->default_code_repository = $default_code_repository ?? ;
    $this->instance_type = $instance_type ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->notebook_instance_arn = $notebook_instance_arn ?? "";
    $this->notebook_instance_lifecycle_config_name = $notebook_instance_lifecycle_config_name ?? "";
    $this->notebook_instance_name = $notebook_instance_name ?? "";
    $this->notebook_instance_status = $notebook_instance_status ?? "";
    $this->url = $url ?? "";
  }
}

type NotebookInstanceSummaryList = vec<NotebookInstanceSummary>;

type NotebookInstanceUrl = string;

type NotebookInstanceVolumeSizeInGB = int;

type NotebookOutputOption = string;

class NotificationConfiguration {
  public NotificationTopicArn $notification_topic_arn;

  public function __construct(shape(
  ?'notification_topic_arn' => NotificationTopicArn,
  ) $s = shape()) {
    $this->notification_topic_arn = $notification_topic_arn ?? "";
  }
}

type NotificationTopicArn = string;

type NumberOfHumanWorkersPerDataObject = int;

type ObjectiveStatus = string;

type ObjectiveStatusCounter = int;

class ObjectiveStatusCounters {
  public ObjectiveStatusCounter $failed;
  public ObjectiveStatusCounter $pending;
  public ObjectiveStatusCounter $succeeded;

  public function __construct(shape(
  ?'failed' => ObjectiveStatusCounter,
  ?'pending' => ObjectiveStatusCounter,
  ?'succeeded' => ObjectiveStatusCounter,
  ) $s = shape()) {
    $this->failed = $failed ?? ;
    $this->pending = $pending ?? ;
    $this->succeeded = $succeeded ?? ;
  }
}

type Operator = string;

type OptionalDouble = float;

type OptionalInteger = int;

type OptionalVolumeSizeInGB = int;

type OrderKey = string;

class OutputConfig {
  public S3Uri $s_3_output_location;
  public TargetDevice $target_device;

  public function __construct(shape(
  ?'s_3_output_location' => S3Uri,
  ?'target_device' => TargetDevice,
  ) $s = shape()) {
    $this->s_3_output_location = $s_3_output_location ?? ;
    $this->target_device = $target_device ?? "";
  }
}

class OutputDataConfig {
  public KmsKeyId $kms_key_id;
  public S3Uri $s_3_output_path;

  public function __construct(shape(
  ?'kms_key_id' => KmsKeyId,
  ?'s_3_output_path' => S3Uri,
  ) $s = shape()) {
    $this->kms_key_id = $kms_key_id ?? "";
    $this->s_3_output_path = $s_3_output_path ?? ;
  }
}

type PaginationToken = string;

type ParameterKey = string;

type ParameterName = string;

class ParameterRange {
  public CategoricalParameterRangeSpecification $categorical_parameter_range_specification;
  public ContinuousParameterRangeSpecification $continuous_parameter_range_specification;
  public IntegerParameterRangeSpecification $integer_parameter_range_specification;

  public function __construct(shape(
  ?'categorical_parameter_range_specification' => CategoricalParameterRangeSpecification,
  ?'continuous_parameter_range_specification' => ContinuousParameterRangeSpecification,
  ?'integer_parameter_range_specification' => IntegerParameterRangeSpecification,
  ) $s = shape()) {
    $this->categorical_parameter_range_specification = $categorical_parameter_range_specification ?? null;
    $this->continuous_parameter_range_specification = $continuous_parameter_range_specification ?? null;
    $this->integer_parameter_range_specification = $integer_parameter_range_specification ?? null;
  }
}

class ParameterRanges {
  public CategoricalParameterRanges $categorical_parameter_ranges;
  public ContinuousParameterRanges $continuous_parameter_ranges;
  public IntegerParameterRanges $integer_parameter_ranges;

  public function __construct(shape(
  ?'categorical_parameter_ranges' => CategoricalParameterRanges,
  ?'continuous_parameter_ranges' => ContinuousParameterRanges,
  ?'integer_parameter_ranges' => IntegerParameterRanges,
  ) $s = shape()) {
    $this->categorical_parameter_ranges = $categorical_parameter_ranges ?? [];
    $this->continuous_parameter_ranges = $continuous_parameter_ranges ?? [];
    $this->integer_parameter_ranges = $integer_parameter_ranges ?? [];
  }
}

type ParameterType = string;

type ParameterValue = string;

type ParameterValues = vec<ParameterValue>;

class Parent {
  public ExperimentEntityName $experiment_name;
  public ExperimentEntityName $trial_name;

  public function __construct(shape(
  ?'experiment_name' => ExperimentEntityName,
  ?'trial_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->experiment_name = $experiment_name ?? ;
    $this->trial_name = $trial_name ?? ;
  }
}

class ParentHyperParameterTuningJob {
  public HyperParameterTuningJobName $hyper_parameter_tuning_job_name;

  public function __construct(shape(
  ?'hyper_parameter_tuning_job_name' => HyperParameterTuningJobName,
  ) $s = shape()) {
    $this->hyper_parameter_tuning_job_name = $hyper_parameter_tuning_job_name ?? "";
  }
}

type ParentHyperParameterTuningJobs = vec<ParentHyperParameterTuningJob>;

type Parents = vec<Parent>;

type PresignedDomainUrl = string;

type ProblemType = string;

class ProcessingClusterConfig {
  public ProcessingInstanceCount $instance_count;
  public ProcessingInstanceType $instance_type;
  public KmsKeyId $volume_kms_key_id;
  public ProcessingVolumeSizeInGB $volume_size_in_gb;

  public function __construct(shape(
  ?'instance_count' => ProcessingInstanceCount,
  ?'instance_type' => ProcessingInstanceType,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'volume_size_in_gb' => ProcessingVolumeSizeInGB,
  ) $s = shape()) {
    $this->instance_count = $instance_count ?? ;
    $this->instance_type = $instance_type ?? "";
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->volume_size_in_gb = $volume_size_in_gb ?? 0;
  }
}

type ProcessingEnvironmentKey = string;

type ProcessingEnvironmentMap = dict<ProcessingEnvironmentKey, ProcessingEnvironmentValue>;

type ProcessingEnvironmentValue = string;

class ProcessingInput {
  public string $input_name;
  public ProcessingS3Input $s_3_input;

  public function __construct(shape(
  ?'input_name' => string,
  ?'s_3_input' => ProcessingS3Input,
  ) $s = shape()) {
    $this->input_name = $input_name ?? ;
    $this->s_3_input = $s_3_input ?? ;
  }
}

type ProcessingInputs = vec<ProcessingInput>;

type ProcessingInstanceCount = int;

type ProcessingInstanceType = string;

class ProcessingJob {
  public AppSpecification $app_specification;
  public AutoMLJobArn $auto_ml_job_arn;
  public Timestamp $creation_time;
  public ProcessingEnvironmentMap $environment;
  public ExitMessage $exit_message;
  public ExperimentConfig $experiment_config;
  public FailureReason $failure_reason;
  public Timestamp $last_modified_time;
  public MonitoringScheduleArn $monitoring_schedule_arn;
  public NetworkConfig $network_config;
  public Timestamp $processing_end_time;
  public ProcessingInputs $processing_inputs;
  public ProcessingJobArn $processing_job_arn;
  public ProcessingJobName $processing_job_name;
  public ProcessingJobStatus $processing_job_status;
  public ProcessingOutputConfig $processing_output_config;
  public ProcessingResources $processing_resources;
  public Timestamp $processing_start_time;
  public RoleArn $role_arn;
  public ProcessingStoppingCondition $stopping_condition;
  public TagList $tags;
  public TrainingJobArn $training_job_arn;

  public function __construct(shape(
  ?'app_specification' => AppSpecification,
  ?'auto_ml_job_arn' => AutoMLJobArn,
  ?'creation_time' => Timestamp,
  ?'environment' => ProcessingEnvironmentMap,
  ?'exit_message' => ExitMessage,
  ?'experiment_config' => ExperimentConfig,
  ?'failure_reason' => FailureReason,
  ?'last_modified_time' => Timestamp,
  ?'monitoring_schedule_arn' => MonitoringScheduleArn,
  ?'network_config' => NetworkConfig,
  ?'processing_end_time' => Timestamp,
  ?'processing_inputs' => ProcessingInputs,
  ?'processing_job_arn' => ProcessingJobArn,
  ?'processing_job_name' => ProcessingJobName,
  ?'processing_job_status' => ProcessingJobStatus,
  ?'processing_output_config' => ProcessingOutputConfig,
  ?'processing_resources' => ProcessingResources,
  ?'processing_start_time' => Timestamp,
  ?'role_arn' => RoleArn,
  ?'stopping_condition' => ProcessingStoppingCondition,
  ?'tags' => TagList,
  ?'training_job_arn' => TrainingJobArn,
  ) $s = shape()) {
    $this->app_specification = $app_specification ?? null;
    $this->auto_ml_job_arn = $auto_ml_job_arn ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->environment = $environment ?? ;
    $this->exit_message = $exit_message ?? "";
    $this->experiment_config = $experiment_config ?? null;
    $this->failure_reason = $failure_reason ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->monitoring_schedule_arn = $monitoring_schedule_arn ?? "";
    $this->network_config = $network_config ?? null;
    $this->processing_end_time = $processing_end_time ?? ;
    $this->processing_inputs = $processing_inputs ?? [];
    $this->processing_job_arn = $processing_job_arn ?? "";
    $this->processing_job_name = $processing_job_name ?? "";
    $this->processing_job_status = $processing_job_status ?? "";
    $this->processing_output_config = $processing_output_config ?? null;
    $this->processing_resources = $processing_resources ?? null;
    $this->processing_start_time = $processing_start_time ?? ;
    $this->role_arn = $role_arn ?? "";
    $this->stopping_condition = $stopping_condition ?? null;
    $this->tags = $tags ?? ;
    $this->training_job_arn = $training_job_arn ?? "";
  }
}

type ProcessingJobArn = string;

type ProcessingJobName = string;

type ProcessingJobStatus = string;

type ProcessingJobSummaries = vec<ProcessingJobSummary>;

class ProcessingJobSummary {
  public Timestamp $creation_time;
  public ExitMessage $exit_message;
  public FailureReason $failure_reason;
  public Timestamp $last_modified_time;
  public Timestamp $processing_end_time;
  public ProcessingJobArn $processing_job_arn;
  public ProcessingJobName $processing_job_name;
  public ProcessingJobStatus $processing_job_status;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'exit_message' => ExitMessage,
  ?'failure_reason' => FailureReason,
  ?'last_modified_time' => Timestamp,
  ?'processing_end_time' => Timestamp,
  ?'processing_job_arn' => ProcessingJobArn,
  ?'processing_job_name' => ProcessingJobName,
  ?'processing_job_status' => ProcessingJobStatus,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->exit_message = $exit_message ?? "";
    $this->failure_reason = $failure_reason ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->processing_end_time = $processing_end_time ?? ;
    $this->processing_job_arn = $processing_job_arn ?? "";
    $this->processing_job_name = $processing_job_name ?? "";
    $this->processing_job_status = $processing_job_status ?? "";
  }
}

type ProcessingLocalPath = string;

type ProcessingMaxRuntimeInSeconds = int;

class ProcessingOutput {
  public string $output_name;
  public ProcessingS3Output $s_3_output;

  public function __construct(shape(
  ?'output_name' => string,
  ?'s_3_output' => ProcessingS3Output,
  ) $s = shape()) {
    $this->output_name = $output_name ?? ;
    $this->s_3_output = $s_3_output ?? ;
  }
}

class ProcessingOutputConfig {
  public KmsKeyId $kms_key_id;
  public ProcessingOutputs $outputs;

  public function __construct(shape(
  ?'kms_key_id' => KmsKeyId,
  ?'outputs' => ProcessingOutputs,
  ) $s = shape()) {
    $this->kms_key_id = $kms_key_id ?? "";
    $this->outputs = $outputs ?? ;
  }
}

type ProcessingOutputs = vec<ProcessingOutput>;

class ProcessingResources {
  public ProcessingClusterConfig $cluster_config;

  public function __construct(shape(
  ?'cluster_config' => ProcessingClusterConfig,
  ) $s = shape()) {
    $this->cluster_config = $cluster_config ?? ;
  }
}

type ProcessingS3CompressionType = string;

type ProcessingS3DataDistributionType = string;

type ProcessingS3DataType = string;

class ProcessingS3Input {
  public ProcessingLocalPath $local_path;
  public ProcessingS3CompressionType $s_3_compression_type;
  public ProcessingS3DataDistributionType $s_3_data_distribution_type;
  public ProcessingS3DataType $s_3_data_type;
  public ProcessingS3InputMode $s_3_input_mode;
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'local_path' => ProcessingLocalPath,
  ?'s_3_compression_type' => ProcessingS3CompressionType,
  ?'s_3_data_distribution_type' => ProcessingS3DataDistributionType,
  ?'s_3_data_type' => ProcessingS3DataType,
  ?'s_3_input_mode' => ProcessingS3InputMode,
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->local_path = $local_path ?? ;
    $this->s_3_compression_type = $s_3_compression_type ?? ;
    $this->s_3_data_distribution_type = $s_3_data_distribution_type ?? ;
    $this->s_3_data_type = $s_3_data_type ?? "";
    $this->s_3_input_mode = $s_3_input_mode ?? ;
    $this->s_3_uri = $s_3_uri ?? "";
  }
}

type ProcessingS3InputMode = string;

class ProcessingS3Output {
  public ProcessingLocalPath $local_path;
  public ProcessingS3UploadMode $s_3_upload_mode;
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'local_path' => ProcessingLocalPath,
  ?'s_3_upload_mode' => ProcessingS3UploadMode,
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->local_path = $local_path ?? ;
    $this->s_3_upload_mode = $s_3_upload_mode ?? ;
    $this->s_3_uri = $s_3_uri ?? "";
  }
}

type ProcessingS3UploadMode = string;

class ProcessingStoppingCondition {
  public ProcessingMaxRuntimeInSeconds $max_runtime_in_seconds;

  public function __construct(shape(
  ?'max_runtime_in_seconds' => ProcessingMaxRuntimeInSeconds,
  ) $s = shape()) {
    $this->max_runtime_in_seconds = $max_runtime_in_seconds ?? 0;
  }
}

type ProcessingVolumeSizeInGB = int;

type ProductId = string;

type ProductListings = vec<String>;

class ProductionVariant {
  public ProductionVariantAcceleratorType $accelerator_type;
  public TaskCount $initial_instance_count;
  public VariantWeight $initial_variant_weight;
  public ProductionVariantInstanceType $instance_type;
  public ModelName $model_name;
  public VariantName $variant_name;

  public function __construct(shape(
  ?'accelerator_type' => ProductionVariantAcceleratorType,
  ?'initial_instance_count' => TaskCount,
  ?'initial_variant_weight' => VariantWeight,
  ?'instance_type' => ProductionVariantInstanceType,
  ?'model_name' => ModelName,
  ?'variant_name' => VariantName,
  ) $s = shape()) {
    $this->accelerator_type = $accelerator_type ?? ;
    $this->initial_instance_count = $initial_instance_count ?? ;
    $this->initial_variant_weight = $initial_variant_weight ?? ;
    $this->instance_type = $instance_type ?? "";
    $this->model_name = $model_name ?? "";
    $this->variant_name = $variant_name ?? "";
  }
}

type ProductionVariantAcceleratorType = string;

type ProductionVariantInstanceType = string;

type ProductionVariantList = vec<ProductionVariant>;

class ProductionVariantSummary {
  public TaskCount $current_instance_count;
  public VariantWeight $current_weight;
  public DeployedImages $deployed_images;
  public TaskCount $desired_instance_count;
  public VariantWeight $desired_weight;
  public VariantName $variant_name;

  public function __construct(shape(
  ?'current_instance_count' => TaskCount,
  ?'current_weight' => VariantWeight,
  ?'deployed_images' => DeployedImages,
  ?'desired_instance_count' => TaskCount,
  ?'desired_weight' => VariantWeight,
  ?'variant_name' => VariantName,
  ) $s = shape()) {
    $this->current_instance_count = $current_instance_count ?? ;
    $this->current_weight = $current_weight ?? ;
    $this->deployed_images = $deployed_images ?? [];
    $this->desired_instance_count = $desired_instance_count ?? ;
    $this->desired_weight = $desired_weight ?? ;
    $this->variant_name = $variant_name ?? "";
  }
}

type ProductionVariantSummaryList = vec<ProductionVariantSummary>;

type PropertyNameHint = string;

class PropertyNameQuery {
  public PropertyNameHint $property_name_hint;

  public function __construct(shape(
  ?'property_name_hint' => PropertyNameHint,
  ) $s = shape()) {
    $this->property_name_hint = $property_name_hint ?? "";
  }
}

class PropertyNameSuggestion {
  public ResourcePropertyName $property_name;

  public function __construct(shape(
  ?'property_name' => ResourcePropertyName,
  ) $s = shape()) {
    $this->property_name = $property_name ?? ;
  }
}

type PropertyNameSuggestionList = vec<PropertyNameSuggestion>;

class PublicWorkforceTaskPrice {
  public USD $amount_in_usd;

  public function __construct(shape(
  ?'amount_in_usd' => USD,
  ) $s = shape()) {
    $this->amount_in_usd = $amount_in_usd ?? ;
  }
}

type RealtimeInferenceInstanceTypes = vec<ProductionVariantInstanceType>;

type RecordWrapper = string;

class RenderUiTemplateRequest {
  public RoleArn $role_arn;
  public RenderableTask $task;
  public UiTemplate $ui_template;

  public function __construct(shape(
  ?'role_arn' => RoleArn,
  ?'task' => RenderableTask,
  ?'ui_template' => UiTemplate,
  ) $s = shape()) {
    $this->role_arn = $role_arn ?? "";
    $this->task = $task ?? ;
    $this->ui_template = $ui_template ?? null;
  }
}

class RenderUiTemplateResponse {
  public RenderingErrorList $errors;
  public string $rendered_content;

  public function __construct(shape(
  ?'errors' => RenderingErrorList,
  ?'rendered_content' => string,
  ) $s = shape()) {
    $this->errors = $errors ?? ;
    $this->rendered_content = $rendered_content ?? ;
  }
}

class RenderableTask {
  public TaskInput $input;

  public function __construct(shape(
  ?'input' => TaskInput,
  ) $s = shape()) {
    $this->input = $input ?? ;
  }
}

class RenderingError {
  public string $code;
  public string $message;

  public function __construct(shape(
  ?'code' => string,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

type RenderingErrorList = vec<RenderingError>;

class ResolvedAttributes {
  public AutoMLJobObjective $auto_ml_job_objective;
  public AutoMLJobCompletionCriteria $completion_criteria;
  public ProblemType $problem_type;

  public function __construct(shape(
  ?'auto_ml_job_objective' => AutoMLJobObjective,
  ?'completion_criteria' => AutoMLJobCompletionCriteria,
  ?'problem_type' => ProblemType,
  ) $s = shape()) {
    $this->auto_ml_job_objective = $auto_ml_job_objective ?? null;
    $this->completion_criteria = $completion_criteria ?? ;
    $this->problem_type = $problem_type ?? "";
  }
}

type ResourceArn = string;

class ResourceConfig {
  public TrainingInstanceCount $instance_count;
  public TrainingInstanceType $instance_type;
  public KmsKeyId $volume_kms_key_id;
  public VolumeSizeInGB $volume_size_in_gb;

  public function __construct(shape(
  ?'instance_count' => TrainingInstanceCount,
  ?'instance_type' => TrainingInstanceType,
  ?'volume_kms_key_id' => KmsKeyId,
  ?'volume_size_in_gb' => VolumeSizeInGB,
  ) $s = shape()) {
    $this->instance_count = $instance_count ?? ;
    $this->instance_type = $instance_type ?? "";
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
    $this->volume_size_in_gb = $volume_size_in_gb ?? 0;
  }
}

type ResourceId = string;

class ResourceInUse {
  public FailureReason $message;

  public function __construct(shape(
  ?'message' => FailureReason,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceLimitExceeded {
  public FailureReason $message;

  public function __construct(shape(
  ?'message' => FailureReason,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceLimits {
  public MaxNumberOfTrainingJobs $max_number_of_training_jobs;
  public MaxParallelTrainingJobs $max_parallel_training_jobs;

  public function __construct(shape(
  ?'max_number_of_training_jobs' => MaxNumberOfTrainingJobs,
  ?'max_parallel_training_jobs' => MaxParallelTrainingJobs,
  ) $s = shape()) {
    $this->max_number_of_training_jobs = $max_number_of_training_jobs ?? 0;
    $this->max_parallel_training_jobs = $max_parallel_training_jobs ?? 0;
  }
}

class ResourceNotFound {
  public FailureReason $message;

  public function __construct(shape(
  ?'message' => FailureReason,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ResourcePropertyName = string;

class ResourceSpec {
  public AppInstanceType $instance_type;
  public SageMakerImageArn $sage_maker_image_arn;

  public function __construct(shape(
  ?'instance_type' => AppInstanceType,
  ?'sage_maker_image_arn' => SageMakerImageArn,
  ) $s = shape()) {
    $this->instance_type = $instance_type ?? "";
    $this->sage_maker_image_arn = $sage_maker_image_arn ?? "";
  }
}

type ResourceType = string;

type ResponseMIMEType = string;

type ResponseMIMETypes = vec<ResponseMIMEType>;

class RetentionPolicy {
  public RetentionType $home_efs_file_system;

  public function __construct(shape(
  ?'home_efs_file_system' => RetentionType,
  ) $s = shape()) {
    $this->home_efs_file_system = $home_efs_file_system ?? ;
  }
}

type RetentionType = string;

type RoleArn = string;

type RootAccess = string;

type RuleConfigurationName = string;

type RuleEvaluationStatus = string;

type RuleParameters = dict<ConfigKey, ConfigValue>;

type S3DataDistribution = string;

class S3DataSource {
  public AttributeNames $attribute_names;
  public S3DataDistribution $s_3_data_distribution_type;
  public S3DataType $s_3_data_type;
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'attribute_names' => AttributeNames,
  ?'s_3_data_distribution_type' => S3DataDistribution,
  ?'s_3_data_type' => S3DataType,
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->attribute_names = $attribute_names ?? [];
    $this->s_3_data_distribution_type = $s_3_data_distribution_type ?? ;
    $this->s_3_data_type = $s_3_data_type ?? "";
    $this->s_3_uri = $s_3_uri ?? "";
  }
}

type S3DataType = string;

type S3Uri = string;

type SageMakerImageArn = string;

type SamplingPercentage = int;

class ScheduleConfig {
  public ScheduleExpression $schedule_expression;

  public function __construct(shape(
  ?'schedule_expression' => ScheduleExpression,
  ) $s = shape()) {
    $this->schedule_expression = $schedule_expression ?? "";
  }
}

type ScheduleExpression = string;

type ScheduleStatus = string;

class SearchExpression {
  public FilterList $filters;
  public NestedFiltersList $nested_filters;
  public BooleanOperator $operator;
  public SearchExpressionList $sub_expressions;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'nested_filters' => NestedFiltersList,
  ?'operator' => BooleanOperator,
  ?'sub_expressions' => SearchExpressionList,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->nested_filters = $nested_filters ?? null;
    $this->operator = $operator ?? "";
    $this->sub_expressions = $sub_expressions ?? ;
  }
}

type SearchExpressionList = vec<SearchExpression>;

class SearchRecord {
  public Experiment $experiment;
  public TrainingJob $training_job;
  public Trial $trial;
  public TrialComponent $trial_component;

  public function __construct(shape(
  ?'experiment' => Experiment,
  ?'training_job' => TrainingJob,
  ?'trial' => Trial,
  ?'trial_component' => TrialComponent,
  ) $s = shape()) {
    $this->experiment = $experiment ?? null;
    $this->training_job = $training_job ?? null;
    $this->trial = $trial ?? null;
    $this->trial_component = $trial_component ?? null;
  }
}

class SearchRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceType $resource;
  public SearchExpression $search_expression;
  public ResourcePropertyName $sort_by;
  public SearchSortOrder $sort_order;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'resource' => ResourceType,
  ?'search_expression' => SearchExpression,
  ?'sort_by' => ResourcePropertyName,
  ?'sort_order' => SearchSortOrder,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource = $resource ?? ;
    $this->search_expression = $search_expression ?? null;
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
  }
}

class SearchResponse {
  public NextToken $next_token;
  public SearchResultsList $results;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'results' => SearchResultsList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->results = $results ?? ;
  }
}

type SearchResultsList = vec<SearchRecord>;

type SearchSortOrder = string;

type SecondaryStatus = string;

class SecondaryStatusTransition {
  public Timestamp $end_time;
  public Timestamp $start_time;
  public SecondaryStatus $status;
  public StatusMessage $status_message;

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'start_time' => Timestamp,
  ?'status' => SecondaryStatus,
  ?'status_message' => StatusMessage,
  ) $s = shape()) {
    $this->end_time = $end_time ?? ;
    $this->start_time = $start_time ?? ;
    $this->status = $status ?? ;
    $this->status_message = $status_message ?? "";
  }
}

type SecondaryStatusTransitions = vec<SecondaryStatusTransition>;

type SecretArn = string;

type SecurityGroupId = string;

type SecurityGroupIds = vec<SecurityGroupId>;

type Seed = int;

type SessionExpirationDurationInSeconds = int;

class SharingSettings {
  public NotebookOutputOption $notebook_output_option;
  public KmsKeyId $s_3_kms_key_id;
  public S3Uri $s_3_output_path;

  public function __construct(shape(
  ?'notebook_output_option' => NotebookOutputOption,
  ?'s_3_kms_key_id' => KmsKeyId,
  ?'s_3_output_path' => S3Uri,
  ) $s = shape()) {
    $this->notebook_output_option = $notebook_output_option ?? "";
    $this->s_3_kms_key_id = $s_3_kms_key_id ?? ;
    $this->s_3_output_path = $s_3_output_path ?? ;
  }
}

class ShuffleConfig {
  public Seed $seed;

  public function __construct(shape(
  ?'seed' => Seed,
  ) $s = shape()) {
    $this->seed = $seed ?? 0;
  }
}

type SingleSignOnUserIdentifier = string;

type SortBy = string;

type SortExperimentsBy = string;

type SortOrder = string;

type SortTrialComponentsBy = string;

type SortTrialsBy = string;

class SourceAlgorithm {
  public ArnOrName $algorithm_name;
  public Url $model_data_url;

  public function __construct(shape(
  ?'algorithm_name' => ArnOrName,
  ?'model_data_url' => Url,
  ) $s = shape()) {
    $this->algorithm_name = $algorithm_name ?? ;
    $this->model_data_url = $model_data_url ?? ;
  }
}

type SourceAlgorithmList = vec<SourceAlgorithm>;

class SourceAlgorithmSpecification {
  public SourceAlgorithmList $source_algorithms;

  public function __construct(shape(
  ?'source_algorithms' => SourceAlgorithmList,
  ) $s = shape()) {
    $this->source_algorithms = $source_algorithms ?? ;
  }
}

class SourceIpConfig {
  public Cidrs $cidrs;

  public function __construct(shape(
  ?'cidrs' => Cidrs,
  ) $s = shape()) {
    $this->cidrs = $cidrs ?? [];
  }
}

type SourceType = string;

type SplitType = string;

class StartMonitoringScheduleRequest {
  public MonitoringScheduleName $monitoring_schedule_name;

  public function __construct(shape(
  ?'monitoring_schedule_name' => MonitoringScheduleName,
  ) $s = shape()) {
    $this->monitoring_schedule_name = $monitoring_schedule_name ?? "";
  }
}

class StartNotebookInstanceInput {
  public NotebookInstanceName $notebook_instance_name;

  public function __construct(shape(
  ?'notebook_instance_name' => NotebookInstanceName,
  ) $s = shape()) {
    $this->notebook_instance_name = $notebook_instance_name ?? "";
  }
}

type StatusDetails = string;

type StatusMessage = string;

class StopAutoMLJobRequest {
  public AutoMLJobName $auto_ml_job_name;

  public function __construct(shape(
  ?'auto_ml_job_name' => AutoMLJobName,
  ) $s = shape()) {
    $this->auto_ml_job_name = $auto_ml_job_name ?? "";
  }
}

class StopCompilationJobRequest {
  public EntityName $compilation_job_name;

  public function __construct(shape(
  ?'compilation_job_name' => EntityName,
  ) $s = shape()) {
    $this->compilation_job_name = $compilation_job_name ?? ;
  }
}

class StopHyperParameterTuningJobRequest {
  public HyperParameterTuningJobName $hyper_parameter_tuning_job_name;

  public function __construct(shape(
  ?'hyper_parameter_tuning_job_name' => HyperParameterTuningJobName,
  ) $s = shape()) {
    $this->hyper_parameter_tuning_job_name = $hyper_parameter_tuning_job_name ?? "";
  }
}

class StopLabelingJobRequest {
  public LabelingJobName $labeling_job_name;

  public function __construct(shape(
  ?'labeling_job_name' => LabelingJobName,
  ) $s = shape()) {
    $this->labeling_job_name = $labeling_job_name ?? "";
  }
}

class StopMonitoringScheduleRequest {
  public MonitoringScheduleName $monitoring_schedule_name;

  public function __construct(shape(
  ?'monitoring_schedule_name' => MonitoringScheduleName,
  ) $s = shape()) {
    $this->monitoring_schedule_name = $monitoring_schedule_name ?? "";
  }
}

class StopNotebookInstanceInput {
  public NotebookInstanceName $notebook_instance_name;

  public function __construct(shape(
  ?'notebook_instance_name' => NotebookInstanceName,
  ) $s = shape()) {
    $this->notebook_instance_name = $notebook_instance_name ?? "";
  }
}

class StopProcessingJobRequest {
  public ProcessingJobName $processing_job_name;

  public function __construct(shape(
  ?'processing_job_name' => ProcessingJobName,
  ) $s = shape()) {
    $this->processing_job_name = $processing_job_name ?? "";
  }
}

class StopTrainingJobRequest {
  public TrainingJobName $training_job_name;

  public function __construct(shape(
  ?'training_job_name' => TrainingJobName,
  ) $s = shape()) {
    $this->training_job_name = $training_job_name ?? "";
  }
}

class StopTransformJobRequest {
  public TransformJobName $transform_job_name;

  public function __construct(shape(
  ?'transform_job_name' => TransformJobName,
  ) $s = shape()) {
    $this->transform_job_name = $transform_job_name ?? "";
  }
}

class StoppingCondition {
  public MaxRuntimeInSeconds $max_runtime_in_seconds;
  public MaxWaitTimeInSeconds $max_wait_time_in_seconds;

  public function __construct(shape(
  ?'max_runtime_in_seconds' => MaxRuntimeInSeconds,
  ?'max_wait_time_in_seconds' => MaxWaitTimeInSeconds,
  ) $s = shape()) {
    $this->max_runtime_in_seconds = $max_runtime_in_seconds ?? 0;
    $this->max_wait_time_in_seconds = $max_wait_time_in_seconds ?? 0;
  }
}

type String = string;

type String1024 = string;

type String200 = string;

type String256 = string;

type StringParameterValue = string;

type SubnetId = string;

type Subnets = vec<SubnetId>;

class SubscribedWorkteam {
  public string $listing_id;
  public String200 $marketplace_description;
  public String200 $marketplace_title;
  public string $seller_name;
  public WorkteamArn $workteam_arn;

  public function __construct(shape(
  ?'listing_id' => string,
  ?'marketplace_description' => String200,
  ?'marketplace_title' => String200,
  ?'seller_name' => string,
  ?'workteam_arn' => WorkteamArn,
  ) $s = shape()) {
    $this->listing_id = $listing_id ?? ;
    $this->marketplace_description = $marketplace_description ?? ;
    $this->marketplace_title = $marketplace_title ?? ;
    $this->seller_name = $seller_name ?? ;
    $this->workteam_arn = $workteam_arn ?? "";
  }
}

type SubscribedWorkteams = vec<SubscribedWorkteam>;

type Success = bool;

class SuggestionQuery {
  public PropertyNameQuery $property_name_query;

  public function __construct(shape(
  ?'property_name_query' => PropertyNameQuery,
  ) $s = shape()) {
    $this->property_name_query = $property_name_query ?? null;
  }
}

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

type TagValue = string;

type TargetAttributeName = string;

type TargetDevice = string;

type TargetObjectiveMetricValue = float;

type TaskAvailabilityLifetimeInSeconds = int;

type TaskCount = int;

type TaskDescription = string;

type TaskInput = string;

type TaskKeyword = string;

type TaskKeywords = vec<TaskKeyword>;

type TaskTimeLimitInSeconds = int;

type TaskTitle = string;

type TemplateContent = string;

type TemplateContentSha256 = string;

type TemplateUrl = string;

class TensorBoardAppSettings {
  public ResourceSpec $default_resource_spec;

  public function __construct(shape(
  ?'default_resource_spec' => ResourceSpec,
  ) $s = shape()) {
    $this->default_resource_spec = $default_resource_spec ?? ;
  }
}

class TensorBoardOutputConfig {
  public DirectoryPath $local_path;
  public S3Uri $s_3_output_path;

  public function __construct(shape(
  ?'local_path' => DirectoryPath,
  ?'s_3_output_path' => S3Uri,
  ) $s = shape()) {
    $this->local_path = $local_path ?? ;
    $this->s_3_output_path = $s_3_output_path ?? ;
  }
}

type TenthFractionsOfACent = int;

type Timestamp = int;

type TrainingInputMode = string;

type TrainingInstanceCount = int;

type TrainingInstanceType = string;

type TrainingInstanceTypes = vec<TrainingInstanceType>;

class TrainingJob {
  public AlgorithmSpecification $algorithm_specification;
  public AutoMLJobArn $auto_ml_job_arn;
  public BillableTimeInSeconds $billable_time_in_seconds;
  public CheckpointConfig $checkpoint_config;
  public Timestamp $creation_time;
  public DebugHookConfig $debug_hook_config;
  public DebugRuleConfigurations $debug_rule_configurations;
  public DebugRuleEvaluationStatuses $debug_rule_evaluation_statuses;
  public boolean $enable_inter_container_traffic_encryption;
  public boolean $enable_managed_spot_training;
  public boolean $enable_network_isolation;
  public ExperimentConfig $experiment_config;
  public FailureReason $failure_reason;
  public FinalMetricDataList $final_metric_data_list;
  public HyperParameters $hyper_parameters;
  public InputDataConfig $input_data_config;
  public LabelingJobArn $labeling_job_arn;
  public Timestamp $last_modified_time;
  public ModelArtifacts $model_artifacts;
  public OutputDataConfig $output_data_config;
  public ResourceConfig $resource_config;
  public RoleArn $role_arn;
  public SecondaryStatus $secondary_status;
  public SecondaryStatusTransitions $secondary_status_transitions;
  public StoppingCondition $stopping_condition;
  public TagList $tags;
  public TensorBoardOutputConfig $tensor_board_output_config;
  public Timestamp $training_end_time;
  public TrainingJobArn $training_job_arn;
  public TrainingJobName $training_job_name;
  public TrainingJobStatus $training_job_status;
  public Timestamp $training_start_time;
  public TrainingTimeInSeconds $training_time_in_seconds;
  public HyperParameterTuningJobArn $tuning_job_arn;
  public VpcConfig $vpc_config;

  public function __construct(shape(
  ?'algorithm_specification' => AlgorithmSpecification,
  ?'auto_ml_job_arn' => AutoMLJobArn,
  ?'billable_time_in_seconds' => BillableTimeInSeconds,
  ?'checkpoint_config' => CheckpointConfig,
  ?'creation_time' => Timestamp,
  ?'debug_hook_config' => DebugHookConfig,
  ?'debug_rule_configurations' => DebugRuleConfigurations,
  ?'debug_rule_evaluation_statuses' => DebugRuleEvaluationStatuses,
  ?'enable_inter_container_traffic_encryption' => boolean,
  ?'enable_managed_spot_training' => boolean,
  ?'enable_network_isolation' => boolean,
  ?'experiment_config' => ExperimentConfig,
  ?'failure_reason' => FailureReason,
  ?'final_metric_data_list' => FinalMetricDataList,
  ?'hyper_parameters' => HyperParameters,
  ?'input_data_config' => InputDataConfig,
  ?'labeling_job_arn' => LabelingJobArn,
  ?'last_modified_time' => Timestamp,
  ?'model_artifacts' => ModelArtifacts,
  ?'output_data_config' => OutputDataConfig,
  ?'resource_config' => ResourceConfig,
  ?'role_arn' => RoleArn,
  ?'secondary_status' => SecondaryStatus,
  ?'secondary_status_transitions' => SecondaryStatusTransitions,
  ?'stopping_condition' => StoppingCondition,
  ?'tags' => TagList,
  ?'tensor_board_output_config' => TensorBoardOutputConfig,
  ?'training_end_time' => Timestamp,
  ?'training_job_arn' => TrainingJobArn,
  ?'training_job_name' => TrainingJobName,
  ?'training_job_status' => TrainingJobStatus,
  ?'training_start_time' => Timestamp,
  ?'training_time_in_seconds' => TrainingTimeInSeconds,
  ?'tuning_job_arn' => HyperParameterTuningJobArn,
  ?'vpc_config' => VpcConfig,
  ) $s = shape()) {
    $this->algorithm_specification = $algorithm_specification ?? null;
    $this->auto_ml_job_arn = $auto_ml_job_arn ?? "";
    $this->billable_time_in_seconds = $billable_time_in_seconds ?? 0;
    $this->checkpoint_config = $checkpoint_config ?? null;
    $this->creation_time = $creation_time ?? 0;
    $this->debug_hook_config = $debug_hook_config ?? null;
    $this->debug_rule_configurations = $debug_rule_configurations ?? [];
    $this->debug_rule_evaluation_statuses = $debug_rule_evaluation_statuses ?? [];
    $this->enable_inter_container_traffic_encryption = $enable_inter_container_traffic_encryption ?? ;
    $this->enable_managed_spot_training = $enable_managed_spot_training ?? ;
    $this->enable_network_isolation = $enable_network_isolation ?? ;
    $this->experiment_config = $experiment_config ?? null;
    $this->failure_reason = $failure_reason ?? "";
    $this->final_metric_data_list = $final_metric_data_list ?? [];
    $this->hyper_parameters = $hyper_parameters ?? [];
    $this->input_data_config = $input_data_config ?? [];
    $this->labeling_job_arn = $labeling_job_arn ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->model_artifacts = $model_artifacts ?? null;
    $this->output_data_config = $output_data_config ?? null;
    $this->resource_config = $resource_config ?? null;
    $this->role_arn = $role_arn ?? "";
    $this->secondary_status = $secondary_status ?? "";
    $this->secondary_status_transitions = $secondary_status_transitions ?? [];
    $this->stopping_condition = $stopping_condition ?? null;
    $this->tags = $tags ?? ;
    $this->tensor_board_output_config = $tensor_board_output_config ?? null;
    $this->training_end_time = $training_end_time ?? ;
    $this->training_job_arn = $training_job_arn ?? "";
    $this->training_job_name = $training_job_name ?? "";
    $this->training_job_status = $training_job_status ?? "";
    $this->training_start_time = $training_start_time ?? ;
    $this->training_time_in_seconds = $training_time_in_seconds ?? 0;
    $this->tuning_job_arn = $tuning_job_arn ?? ;
    $this->vpc_config = $vpc_config ?? null;
  }
}

type TrainingJobArn = string;

class TrainingJobDefinition {
  public HyperParameters $hyper_parameters;
  public InputDataConfig $input_data_config;
  public OutputDataConfig $output_data_config;
  public ResourceConfig $resource_config;
  public StoppingCondition $stopping_condition;
  public TrainingInputMode $training_input_mode;

  public function __construct(shape(
  ?'hyper_parameters' => HyperParameters,
  ?'input_data_config' => InputDataConfig,
  ?'output_data_config' => OutputDataConfig,
  ?'resource_config' => ResourceConfig,
  ?'stopping_condition' => StoppingCondition,
  ?'training_input_mode' => TrainingInputMode,
  ) $s = shape()) {
    $this->hyper_parameters = $hyper_parameters ?? [];
    $this->input_data_config = $input_data_config ?? [];
    $this->output_data_config = $output_data_config ?? null;
    $this->resource_config = $resource_config ?? null;
    $this->stopping_condition = $stopping_condition ?? null;
    $this->training_input_mode = $training_input_mode ?? "";
  }
}

type TrainingJobEarlyStoppingType = string;

type TrainingJobName = string;

type TrainingJobSortByOptions = string;

type TrainingJobStatus = string;

type TrainingJobStatusCounter = int;

class TrainingJobStatusCounters {
  public TrainingJobStatusCounter $completed;
  public TrainingJobStatusCounter $in_progress;
  public TrainingJobStatusCounter $non_retryable_error;
  public TrainingJobStatusCounter $retryable_error;
  public TrainingJobStatusCounter $stopped;

  public function __construct(shape(
  ?'completed' => TrainingJobStatusCounter,
  ?'in_progress' => TrainingJobStatusCounter,
  ?'non_retryable_error' => TrainingJobStatusCounter,
  ?'retryable_error' => TrainingJobStatusCounter,
  ?'stopped' => TrainingJobStatusCounter,
  ) $s = shape()) {
    $this->completed = $completed ?? ;
    $this->in_progress = $in_progress ?? ;
    $this->non_retryable_error = $non_retryable_error ?? ;
    $this->retryable_error = $retryable_error ?? ;
    $this->stopped = $stopped ?? ;
  }
}

type TrainingJobSummaries = vec<TrainingJobSummary>;

class TrainingJobSummary {
  public Timestamp $creation_time;
  public Timestamp $last_modified_time;
  public Timestamp $training_end_time;
  public TrainingJobArn $training_job_arn;
  public TrainingJobName $training_job_name;
  public TrainingJobStatus $training_job_status;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'last_modified_time' => Timestamp,
  ?'training_end_time' => Timestamp,
  ?'training_job_arn' => TrainingJobArn,
  ?'training_job_name' => TrainingJobName,
  ?'training_job_status' => TrainingJobStatus,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->training_end_time = $training_end_time ?? ;
    $this->training_job_arn = $training_job_arn ?? "";
    $this->training_job_name = $training_job_name ?? "";
    $this->training_job_status = $training_job_status ?? "";
  }
}

class TrainingSpecification {
  public MetricDefinitionList $metric_definitions;
  public HyperParameterSpecifications $supported_hyper_parameters;
  public TrainingInstanceTypes $supported_training_instance_types;
  public HyperParameterTuningJobObjectives $supported_tuning_job_objective_metrics;
  public boolean $supports_distributed_training;
  public ChannelSpecifications $training_channels;
  public Image $training_image;
  public ImageDigest $training_image_digest;

  public function __construct(shape(
  ?'metric_definitions' => MetricDefinitionList,
  ?'supported_hyper_parameters' => HyperParameterSpecifications,
  ?'supported_training_instance_types' => TrainingInstanceTypes,
  ?'supported_tuning_job_objective_metrics' => HyperParameterTuningJobObjectives,
  ?'supports_distributed_training' => boolean,
  ?'training_channels' => ChannelSpecifications,
  ?'training_image' => Image,
  ?'training_image_digest' => ImageDigest,
  ) $s = shape()) {
    $this->metric_definitions = $metric_definitions ?? ;
    $this->supported_hyper_parameters = $supported_hyper_parameters ?? ;
    $this->supported_training_instance_types = $supported_training_instance_types ?? ;
    $this->supported_tuning_job_objective_metrics = $supported_tuning_job_objective_metrics ?? ;
    $this->supports_distributed_training = $supports_distributed_training ?? ;
    $this->training_channels = $training_channels ?? ;
    $this->training_image = $training_image ?? ;
    $this->training_image_digest = $training_image_digest ?? ;
  }
}

type TrainingTimeInSeconds = int;

class TransformDataSource {
  public TransformS3DataSource $s_3_data_source;

  public function __construct(shape(
  ?'s_3_data_source' => TransformS3DataSource,
  ) $s = shape()) {
    $this->s_3_data_source = $s_3_data_source ?? null;
  }
}

type TransformEnvironmentKey = string;

type TransformEnvironmentMap = dict<TransformEnvironmentKey, TransformEnvironmentValue>;

type TransformEnvironmentValue = string;

class TransformInput {
  public CompressionType $compression_type;
  public ContentType $content_type;
  public TransformDataSource $data_source;
  public SplitType $split_type;

  public function __construct(shape(
  ?'compression_type' => CompressionType,
  ?'content_type' => ContentType,
  ?'data_source' => TransformDataSource,
  ?'split_type' => SplitType,
  ) $s = shape()) {
    $this->compression_type = $compression_type ?? "";
    $this->content_type = $content_type ?? "";
    $this->data_source = $data_source ?? null;
    $this->split_type = $split_type ?? "";
  }
}

type TransformInstanceCount = int;

type TransformInstanceType = string;

type TransformInstanceTypes = vec<TransformInstanceType>;

type TransformJobArn = string;

class TransformJobDefinition {
  public BatchStrategy $batch_strategy;
  public TransformEnvironmentMap $environment;
  public MaxConcurrentTransforms $max_concurrent_transforms;
  public MaxPayloadInMB $max_payload_in_mb;
  public TransformInput $transform_input;
  public TransformOutput $transform_output;
  public TransformResources $transform_resources;

  public function __construct(shape(
  ?'batch_strategy' => BatchStrategy,
  ?'environment' => TransformEnvironmentMap,
  ?'max_concurrent_transforms' => MaxConcurrentTransforms,
  ?'max_payload_in_mb' => MaxPayloadInMB,
  ?'transform_input' => TransformInput,
  ?'transform_output' => TransformOutput,
  ?'transform_resources' => TransformResources,
  ) $s = shape()) {
    $this->batch_strategy = $batch_strategy ?? "";
    $this->environment = $environment ?? ;
    $this->max_concurrent_transforms = $max_concurrent_transforms ?? 0;
    $this->max_payload_in_mb = $max_payload_in_mb ?? 0;
    $this->transform_input = $transform_input ?? null;
    $this->transform_output = $transform_output ?? null;
    $this->transform_resources = $transform_resources ?? null;
  }
}

type TransformJobName = string;

type TransformJobStatus = string;

type TransformJobSummaries = vec<TransformJobSummary>;

class TransformJobSummary {
  public Timestamp $creation_time;
  public FailureReason $failure_reason;
  public Timestamp $last_modified_time;
  public Timestamp $transform_end_time;
  public TransformJobArn $transform_job_arn;
  public TransformJobName $transform_job_name;
  public TransformJobStatus $transform_job_status;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'failure_reason' => FailureReason,
  ?'last_modified_time' => Timestamp,
  ?'transform_end_time' => Timestamp,
  ?'transform_job_arn' => TransformJobArn,
  ?'transform_job_name' => TransformJobName,
  ?'transform_job_status' => TransformJobStatus,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->failure_reason = $failure_reason ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->transform_end_time = $transform_end_time ?? ;
    $this->transform_job_arn = $transform_job_arn ?? "";
    $this->transform_job_name = $transform_job_name ?? "";
    $this->transform_job_status = $transform_job_status ?? "";
  }
}

class TransformOutput {
  public Accept $accept;
  public AssemblyType $assemble_with;
  public KmsKeyId $kms_key_id;
  public S3Uri $s_3_output_path;

  public function __construct(shape(
  ?'accept' => Accept,
  ?'assemble_with' => AssemblyType,
  ?'kms_key_id' => KmsKeyId,
  ?'s_3_output_path' => S3Uri,
  ) $s = shape()) {
    $this->accept = $accept ?? "";
    $this->assemble_with = $assemble_with ?? ;
    $this->kms_key_id = $kms_key_id ?? "";
    $this->s_3_output_path = $s_3_output_path ?? ;
  }
}

class TransformResources {
  public TransformInstanceCount $instance_count;
  public TransformInstanceType $instance_type;
  public KmsKeyId $volume_kms_key_id;

  public function __construct(shape(
  ?'instance_count' => TransformInstanceCount,
  ?'instance_type' => TransformInstanceType,
  ?'volume_kms_key_id' => KmsKeyId,
  ) $s = shape()) {
    $this->instance_count = $instance_count ?? ;
    $this->instance_type = $instance_type ?? "";
    $this->volume_kms_key_id = $volume_kms_key_id ?? ;
  }
}

class TransformS3DataSource {
  public S3DataType $s_3_data_type;
  public S3Uri $s_3_uri;

  public function __construct(shape(
  ?'s_3_data_type' => S3DataType,
  ?'s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->s_3_data_type = $s_3_data_type ?? "";
    $this->s_3_uri = $s_3_uri ?? "";
  }
}

class Trial {
  public UserContext $created_by;
  public Timestamp $creation_time;
  public ExperimentEntityName $display_name;
  public ExperimentEntityName $experiment_name;
  public UserContext $last_modified_by;
  public Timestamp $last_modified_time;
  public TrialSource $source;
  public TagList $tags;
  public TrialArn $trial_arn;
  public TrialComponentSimpleSummaries $trial_component_summaries;
  public ExperimentEntityName $trial_name;

  public function __construct(shape(
  ?'created_by' => UserContext,
  ?'creation_time' => Timestamp,
  ?'display_name' => ExperimentEntityName,
  ?'experiment_name' => ExperimentEntityName,
  ?'last_modified_by' => UserContext,
  ?'last_modified_time' => Timestamp,
  ?'source' => TrialSource,
  ?'tags' => TagList,
  ?'trial_arn' => TrialArn,
  ?'trial_component_summaries' => TrialComponentSimpleSummaries,
  ?'trial_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->created_by = $created_by ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->display_name = $display_name ?? ;
    $this->experiment_name = $experiment_name ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->source = $source ?? ;
    $this->tags = $tags ?? ;
    $this->trial_arn = $trial_arn ?? "";
    $this->trial_component_summaries = $trial_component_summaries ?? [];
    $this->trial_name = $trial_name ?? ;
  }
}

type TrialArn = string;

class TrialComponent {
  public UserContext $created_by;
  public Timestamp $creation_time;
  public ExperimentEntityName $display_name;
  public Timestamp $end_time;
  public TrialComponentArtifacts $input_artifacts;
  public UserContext $last_modified_by;
  public Timestamp $last_modified_time;
  public TrialComponentMetricSummaries $metrics;
  public TrialComponentArtifacts $output_artifacts;
  public TrialComponentParameters $parameters;
  public Parents $parents;
  public TrialComponentSource $source;
  public TrialComponentSourceDetail $source_detail;
  public Timestamp $start_time;
  public TrialComponentStatus $status;
  public TagList $tags;
  public TrialComponentArn $trial_component_arn;
  public ExperimentEntityName $trial_component_name;

  public function __construct(shape(
  ?'created_by' => UserContext,
  ?'creation_time' => Timestamp,
  ?'display_name' => ExperimentEntityName,
  ?'end_time' => Timestamp,
  ?'input_artifacts' => TrialComponentArtifacts,
  ?'last_modified_by' => UserContext,
  ?'last_modified_time' => Timestamp,
  ?'metrics' => TrialComponentMetricSummaries,
  ?'output_artifacts' => TrialComponentArtifacts,
  ?'parameters' => TrialComponentParameters,
  ?'parents' => Parents,
  ?'source' => TrialComponentSource,
  ?'source_detail' => TrialComponentSourceDetail,
  ?'start_time' => Timestamp,
  ?'status' => TrialComponentStatus,
  ?'tags' => TagList,
  ?'trial_component_arn' => TrialComponentArn,
  ?'trial_component_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->created_by = $created_by ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->display_name = $display_name ?? ;
    $this->end_time = $end_time ?? ;
    $this->input_artifacts = $input_artifacts ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->metrics = $metrics ?? ;
    $this->output_artifacts = $output_artifacts ?? ;
    $this->parameters = $parameters ?? ;
    $this->parents = $parents ?? [];
    $this->source = $source ?? ;
    $this->source_detail = $source_detail ?? ;
    $this->start_time = $start_time ?? ;
    $this->status = $status ?? ;
    $this->tags = $tags ?? ;
    $this->trial_component_arn = $trial_component_arn ?? "";
    $this->trial_component_name = $trial_component_name ?? ;
  }
}

type TrialComponentArn = string;

class TrialComponentArtifact {
  public MediaType $media_type;
  public TrialComponentArtifactValue $value;

  public function __construct(shape(
  ?'media_type' => MediaType,
  ?'value' => TrialComponentArtifactValue,
  ) $s = shape()) {
    $this->media_type = $media_type ?? "";
    $this->value = $value ?? ;
  }
}

type TrialComponentArtifactValue = string;

type TrialComponentArtifacts = dict<TrialComponentKey64, TrialComponentArtifact>;

type TrialComponentKey256 = string;

type TrialComponentKey64 = string;

type TrialComponentMetricSummaries = vec<TrialComponentMetricSummary>;

class TrialComponentMetricSummary {
  public OptionalDouble $avg;
  public OptionalInteger $count;
  public OptionalDouble $last;
  public OptionalDouble $max;
  public MetricName $metric_name;
  public OptionalDouble $min;
  public TrialComponentSourceArn $source_arn;
  public OptionalDouble $std_dev;
  public Timestamp $time_stamp;

  public function __construct(shape(
  ?'avg' => OptionalDouble,
  ?'count' => OptionalInteger,
  ?'last' => OptionalDouble,
  ?'max' => OptionalDouble,
  ?'metric_name' => MetricName,
  ?'min' => OptionalDouble,
  ?'source_arn' => TrialComponentSourceArn,
  ?'std_dev' => OptionalDouble,
  ?'time_stamp' => Timestamp,
  ) $s = shape()) {
    $this->avg = $avg ?? ;
    $this->count = $count ?? ;
    $this->last = $last ?? ;
    $this->max = $max ?? ;
    $this->metric_name = $metric_name ?? "";
    $this->min = $min ?? ;
    $this->source_arn = $source_arn ?? ;
    $this->std_dev = $std_dev ?? ;
    $this->time_stamp = $time_stamp ?? ;
  }
}

class TrialComponentParameterValue {
  public DoubleParameterValue $number_value;
  public StringParameterValue $string_value;

  public function __construct(shape(
  ?'number_value' => DoubleParameterValue,
  ?'string_value' => StringParameterValue,
  ) $s = shape()) {
    $this->number_value = $number_value ?? ;
    $this->string_value = $string_value ?? ;
  }
}

type TrialComponentParameters = dict<TrialComponentKey256, TrialComponentParameterValue>;

type TrialComponentPrimaryStatus = string;

type TrialComponentSimpleSummaries = vec<TrialComponentSimpleSummary>;

class TrialComponentSimpleSummary {
  public UserContext $created_by;
  public Timestamp $creation_time;
  public TrialComponentArn $trial_component_arn;
  public ExperimentEntityName $trial_component_name;
  public TrialComponentSource $trial_component_source;

  public function __construct(shape(
  ?'created_by' => UserContext,
  ?'creation_time' => Timestamp,
  ?'trial_component_arn' => TrialComponentArn,
  ?'trial_component_name' => ExperimentEntityName,
  ?'trial_component_source' => TrialComponentSource,
  ) $s = shape()) {
    $this->created_by = $created_by ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->trial_component_arn = $trial_component_arn ?? "";
    $this->trial_component_name = $trial_component_name ?? ;
    $this->trial_component_source = $trial_component_source ?? null;
  }
}

class TrialComponentSource {
  public TrialComponentSourceArn $source_arn;
  public SourceType $source_type;

  public function __construct(shape(
  ?'source_arn' => TrialComponentSourceArn,
  ?'source_type' => SourceType,
  ) $s = shape()) {
    $this->source_arn = $source_arn ?? ;
    $this->source_type = $source_type ?? "";
  }
}

type TrialComponentSourceArn = string;

class TrialComponentSourceDetail {
  public ProcessingJob $processing_job;
  public TrialComponentSourceArn $source_arn;
  public TrainingJob $training_job;

  public function __construct(shape(
  ?'processing_job' => ProcessingJob,
  ?'source_arn' => TrialComponentSourceArn,
  ?'training_job' => TrainingJob,
  ) $s = shape()) {
    $this->processing_job = $processing_job ?? null;
    $this->source_arn = $source_arn ?? ;
    $this->training_job = $training_job ?? null;
  }
}

class TrialComponentStatus {
  public TrialComponentStatusMessage $message;
  public TrialComponentPrimaryStatus $primary_status;

  public function __construct(shape(
  ?'message' => TrialComponentStatusMessage,
  ?'primary_status' => TrialComponentPrimaryStatus,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->primary_status = $primary_status ?? ;
  }
}

type TrialComponentStatusMessage = string;

type TrialComponentSummaries = vec<TrialComponentSummary>;

class TrialComponentSummary {
  public UserContext $created_by;
  public Timestamp $creation_time;
  public ExperimentEntityName $display_name;
  public Timestamp $end_time;
  public UserContext $last_modified_by;
  public Timestamp $last_modified_time;
  public Timestamp $start_time;
  public TrialComponentStatus $status;
  public TrialComponentArn $trial_component_arn;
  public ExperimentEntityName $trial_component_name;
  public TrialComponentSource $trial_component_source;

  public function __construct(shape(
  ?'created_by' => UserContext,
  ?'creation_time' => Timestamp,
  ?'display_name' => ExperimentEntityName,
  ?'end_time' => Timestamp,
  ?'last_modified_by' => UserContext,
  ?'last_modified_time' => Timestamp,
  ?'start_time' => Timestamp,
  ?'status' => TrialComponentStatus,
  ?'trial_component_arn' => TrialComponentArn,
  ?'trial_component_name' => ExperimentEntityName,
  ?'trial_component_source' => TrialComponentSource,
  ) $s = shape()) {
    $this->created_by = $created_by ?? ;
    $this->creation_time = $creation_time ?? 0;
    $this->display_name = $display_name ?? ;
    $this->end_time = $end_time ?? ;
    $this->last_modified_by = $last_modified_by ?? ;
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->start_time = $start_time ?? ;
    $this->status = $status ?? ;
    $this->trial_component_arn = $trial_component_arn ?? "";
    $this->trial_component_name = $trial_component_name ?? ;
    $this->trial_component_source = $trial_component_source ?? null;
  }
}

class TrialSource {
  public TrialSourceArn $source_arn;
  public SourceType $source_type;

  public function __construct(shape(
  ?'source_arn' => TrialSourceArn,
  ?'source_type' => SourceType,
  ) $s = shape()) {
    $this->source_arn = $source_arn ?? ;
    $this->source_type = $source_type ?? "";
  }
}

type TrialSourceArn = string;

type TrialSummaries = vec<TrialSummary>;

class TrialSummary {
  public Timestamp $creation_time;
  public ExperimentEntityName $display_name;
  public Timestamp $last_modified_time;
  public TrialArn $trial_arn;
  public ExperimentEntityName $trial_name;
  public TrialSource $trial_source;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'display_name' => ExperimentEntityName,
  ?'last_modified_time' => Timestamp,
  ?'trial_arn' => TrialArn,
  ?'trial_name' => ExperimentEntityName,
  ?'trial_source' => TrialSource,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->display_name = $display_name ?? ;
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->trial_arn = $trial_arn ?? "";
    $this->trial_name = $trial_name ?? ;
    $this->trial_source = $trial_source ?? null;
  }
}

class TuningJobCompletionCriteria {
  public TargetObjectiveMetricValue $target_objective_metric_value;

  public function __construct(shape(
  ?'target_objective_metric_value' => TargetObjectiveMetricValue,
  ) $s = shape()) {
    $this->target_objective_metric_value = $target_objective_metric_value ?? 0.0;
  }
}

class USD {
  public Cents $cents;
  public Dollars $dollars;
  public TenthFractionsOfACent $tenth_fractions_of_a_cent;

  public function __construct(shape(
  ?'cents' => Cents,
  ?'dollars' => Dollars,
  ?'tenth_fractions_of_a_cent' => TenthFractionsOfACent,
  ) $s = shape()) {
    $this->cents = $cents ?? 0;
    $this->dollars = $dollars ?? 0;
    $this->tenth_fractions_of_a_cent = $tenth_fractions_of_a_cent ?? 0;
  }
}

class UiConfig {
  public S3Uri $ui_template_s_3_uri;

  public function __construct(shape(
  ?'ui_template_s_3_uri' => S3Uri,
  ) $s = shape()) {
    $this->ui_template_s_3_uri = $ui_template_s_3_uri ?? ;
  }
}

class UiTemplate {
  public TemplateContent $content;

  public function __construct(shape(
  ?'content' => TemplateContent,
  ) $s = shape()) {
    $this->content = $content ?? ;
  }
}

class UiTemplateInfo {
  public TemplateContentSha256 $content_sha_256;
  public TemplateUrl $url;

  public function __construct(shape(
  ?'content_sha_256' => TemplateContentSha256,
  ?'url' => TemplateUrl,
  ) $s = shape()) {
    $this->content_sha_256 = $content_sha_256 ?? ;
    $this->url = $url ?? "";
  }
}

class UpdateCodeRepositoryInput {
  public EntityName $code_repository_name;
  public GitConfigForUpdate $git_config;

  public function __construct(shape(
  ?'code_repository_name' => EntityName,
  ?'git_config' => GitConfigForUpdate,
  ) $s = shape()) {
    $this->code_repository_name = $code_repository_name ?? ;
    $this->git_config = $git_config ?? null;
  }
}

class UpdateCodeRepositoryOutput {
  public CodeRepositoryArn $code_repository_arn;

  public function __construct(shape(
  ?'code_repository_arn' => CodeRepositoryArn,
  ) $s = shape()) {
    $this->code_repository_arn = $code_repository_arn ?? "";
  }
}

class UpdateDomainRequest {
  public UserSettings $default_user_settings;
  public DomainId $domain_id;

  public function __construct(shape(
  ?'default_user_settings' => UserSettings,
  ?'domain_id' => DomainId,
  ) $s = shape()) {
    $this->default_user_settings = $default_user_settings ?? ;
    $this->domain_id = $domain_id ?? "";
  }
}

class UpdateDomainResponse {
  public DomainArn $domain_arn;

  public function __construct(shape(
  ?'domain_arn' => DomainArn,
  ) $s = shape()) {
    $this->domain_arn = $domain_arn ?? "";
  }
}

class UpdateEndpointInput {
  public EndpointConfigName $endpoint_config_name;
  public EndpointName $endpoint_name;
  public VariantPropertyList $exclude_retained_variant_properties;
  public boolean $retain_all_variant_properties;

  public function __construct(shape(
  ?'endpoint_config_name' => EndpointConfigName,
  ?'endpoint_name' => EndpointName,
  ?'exclude_retained_variant_properties' => VariantPropertyList,
  ?'retain_all_variant_properties' => boolean,
  ) $s = shape()) {
    $this->endpoint_config_name = $endpoint_config_name ?? "";
    $this->endpoint_name = $endpoint_name ?? "";
    $this->exclude_retained_variant_properties = $exclude_retained_variant_properties ?? ;
    $this->retain_all_variant_properties = $retain_all_variant_properties ?? ;
  }
}

class UpdateEndpointOutput {
  public EndpointArn $endpoint_arn;

  public function __construct(shape(
  ?'endpoint_arn' => EndpointArn,
  ) $s = shape()) {
    $this->endpoint_arn = $endpoint_arn ?? "";
  }
}

class UpdateEndpointWeightsAndCapacitiesInput {
  public DesiredWeightAndCapacityList $desired_weights_and_capacities;
  public EndpointName $endpoint_name;

  public function __construct(shape(
  ?'desired_weights_and_capacities' => DesiredWeightAndCapacityList,
  ?'endpoint_name' => EndpointName,
  ) $s = shape()) {
    $this->desired_weights_and_capacities = $desired_weights_and_capacities ?? ;
    $this->endpoint_name = $endpoint_name ?? "";
  }
}

class UpdateEndpointWeightsAndCapacitiesOutput {
  public EndpointArn $endpoint_arn;

  public function __construct(shape(
  ?'endpoint_arn' => EndpointArn,
  ) $s = shape()) {
    $this->endpoint_arn = $endpoint_arn ?? "";
  }
}

class UpdateExperimentRequest {
  public ExperimentDescription $description;
  public ExperimentEntityName $display_name;
  public ExperimentEntityName $experiment_name;

  public function __construct(shape(
  ?'description' => ExperimentDescription,
  ?'display_name' => ExperimentEntityName,
  ?'experiment_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->display_name = $display_name ?? ;
    $this->experiment_name = $experiment_name ?? ;
  }
}

class UpdateExperimentResponse {
  public ExperimentArn $experiment_arn;

  public function __construct(shape(
  ?'experiment_arn' => ExperimentArn,
  ) $s = shape()) {
    $this->experiment_arn = $experiment_arn ?? "";
  }
}

class UpdateMonitoringScheduleRequest {
  public MonitoringScheduleConfig $monitoring_schedule_config;
  public MonitoringScheduleName $monitoring_schedule_name;

  public function __construct(shape(
  ?'monitoring_schedule_config' => MonitoringScheduleConfig,
  ?'monitoring_schedule_name' => MonitoringScheduleName,
  ) $s = shape()) {
    $this->monitoring_schedule_config = $monitoring_schedule_config ?? null;
    $this->monitoring_schedule_name = $monitoring_schedule_name ?? "";
  }
}

class UpdateMonitoringScheduleResponse {
  public MonitoringScheduleArn $monitoring_schedule_arn;

  public function __construct(shape(
  ?'monitoring_schedule_arn' => MonitoringScheduleArn,
  ) $s = shape()) {
    $this->monitoring_schedule_arn = $monitoring_schedule_arn ?? "";
  }
}

class UpdateNotebookInstanceInput {
  public NotebookInstanceAcceleratorTypes $accelerator_types;
  public AdditionalCodeRepositoryNamesOrUrls $additional_code_repositories;
  public CodeRepositoryNameOrUrl $default_code_repository;
  public DisassociateNotebookInstanceAcceleratorTypes $disassociate_accelerator_types;
  public DisassociateAdditionalCodeRepositories $disassociate_additional_code_repositories;
  public DisassociateDefaultCodeRepository $disassociate_default_code_repository;
  public DisassociateNotebookInstanceLifecycleConfig $disassociate_lifecycle_config;
  public InstanceType $instance_type;
  public NotebookInstanceLifecycleConfigName $lifecycle_config_name;
  public NotebookInstanceName $notebook_instance_name;
  public RoleArn $role_arn;
  public RootAccess $root_access;
  public NotebookInstanceVolumeSizeInGB $volume_size_in_gb;

  public function __construct(shape(
  ?'accelerator_types' => NotebookInstanceAcceleratorTypes,
  ?'additional_code_repositories' => AdditionalCodeRepositoryNamesOrUrls,
  ?'default_code_repository' => CodeRepositoryNameOrUrl,
  ?'disassociate_accelerator_types' => DisassociateNotebookInstanceAcceleratorTypes,
  ?'disassociate_additional_code_repositories' => DisassociateAdditionalCodeRepositories,
  ?'disassociate_default_code_repository' => DisassociateDefaultCodeRepository,
  ?'disassociate_lifecycle_config' => DisassociateNotebookInstanceLifecycleConfig,
  ?'instance_type' => InstanceType,
  ?'lifecycle_config_name' => NotebookInstanceLifecycleConfigName,
  ?'notebook_instance_name' => NotebookInstanceName,
  ?'role_arn' => RoleArn,
  ?'root_access' => RootAccess,
  ?'volume_size_in_gb' => NotebookInstanceVolumeSizeInGB,
  ) $s = shape()) {
    $this->accelerator_types = $accelerator_types ?? ;
    $this->additional_code_repositories = $additional_code_repositories ?? ;
    $this->default_code_repository = $default_code_repository ?? ;
    $this->disassociate_accelerator_types = $disassociate_accelerator_types ?? ;
    $this->disassociate_additional_code_repositories = $disassociate_additional_code_repositories ?? false;
    $this->disassociate_default_code_repository = $disassociate_default_code_repository ?? false;
    $this->disassociate_lifecycle_config = $disassociate_lifecycle_config ?? ;
    $this->instance_type = $instance_type ?? "";
    $this->lifecycle_config_name = $lifecycle_config_name ?? ;
    $this->notebook_instance_name = $notebook_instance_name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->root_access = $root_access ?? "";
    $this->volume_size_in_gb = $volume_size_in_gb ?? 0;
  }
}

class UpdateNotebookInstanceLifecycleConfigInput {
  public NotebookInstanceLifecycleConfigName $notebook_instance_lifecycle_config_name;
  public NotebookInstanceLifecycleConfigList $on_create;
  public NotebookInstanceLifecycleConfigList $on_start;

  public function __construct(shape(
  ?'notebook_instance_lifecycle_config_name' => NotebookInstanceLifecycleConfigName,
  ?'on_create' => NotebookInstanceLifecycleConfigList,
  ?'on_start' => NotebookInstanceLifecycleConfigList,
  ) $s = shape()) {
    $this->notebook_instance_lifecycle_config_name = $notebook_instance_lifecycle_config_name ?? "";
    $this->on_create = $on_create ?? ;
    $this->on_start = $on_start ?? ;
  }
}

class UpdateNotebookInstanceLifecycleConfigOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateNotebookInstanceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateTrialComponentRequest {
  public ExperimentEntityName $display_name;
  public Timestamp $end_time;
  public TrialComponentArtifacts $input_artifacts;
  public ListTrialComponentKey256 $input_artifacts_to_remove;
  public TrialComponentArtifacts $output_artifacts;
  public ListTrialComponentKey256 $output_artifacts_to_remove;
  public TrialComponentParameters $parameters;
  public ListTrialComponentKey256 $parameters_to_remove;
  public Timestamp $start_time;
  public TrialComponentStatus $status;
  public ExperimentEntityName $trial_component_name;

  public function __construct(shape(
  ?'display_name' => ExperimentEntityName,
  ?'end_time' => Timestamp,
  ?'input_artifacts' => TrialComponentArtifacts,
  ?'input_artifacts_to_remove' => ListTrialComponentKey256,
  ?'output_artifacts' => TrialComponentArtifacts,
  ?'output_artifacts_to_remove' => ListTrialComponentKey256,
  ?'parameters' => TrialComponentParameters,
  ?'parameters_to_remove' => ListTrialComponentKey256,
  ?'start_time' => Timestamp,
  ?'status' => TrialComponentStatus,
  ?'trial_component_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->display_name = $display_name ?? ;
    $this->end_time = $end_time ?? ;
    $this->input_artifacts = $input_artifacts ?? ;
    $this->input_artifacts_to_remove = $input_artifacts_to_remove ?? ;
    $this->output_artifacts = $output_artifacts ?? ;
    $this->output_artifacts_to_remove = $output_artifacts_to_remove ?? ;
    $this->parameters = $parameters ?? ;
    $this->parameters_to_remove = $parameters_to_remove ?? ;
    $this->start_time = $start_time ?? ;
    $this->status = $status ?? ;
    $this->trial_component_name = $trial_component_name ?? ;
  }
}

class UpdateTrialComponentResponse {
  public TrialComponentArn $trial_component_arn;

  public function __construct(shape(
  ?'trial_component_arn' => TrialComponentArn,
  ) $s = shape()) {
    $this->trial_component_arn = $trial_component_arn ?? "";
  }
}

class UpdateTrialRequest {
  public ExperimentEntityName $display_name;
  public ExperimentEntityName $trial_name;

  public function __construct(shape(
  ?'display_name' => ExperimentEntityName,
  ?'trial_name' => ExperimentEntityName,
  ) $s = shape()) {
    $this->display_name = $display_name ?? ;
    $this->trial_name = $trial_name ?? ;
  }
}

class UpdateTrialResponse {
  public TrialArn $trial_arn;

  public function __construct(shape(
  ?'trial_arn' => TrialArn,
  ) $s = shape()) {
    $this->trial_arn = $trial_arn ?? "";
  }
}

class UpdateUserProfileRequest {
  public DomainId $domain_id;
  public UserProfileName $user_profile_name;
  public UserSettings $user_settings;

  public function __construct(shape(
  ?'domain_id' => DomainId,
  ?'user_profile_name' => UserProfileName,
  ?'user_settings' => UserSettings,
  ) $s = shape()) {
    $this->domain_id = $domain_id ?? "";
    $this->user_profile_name = $user_profile_name ?? "";
    $this->user_settings = $user_settings ?? null;
  }
}

class UpdateUserProfileResponse {
  public UserProfileArn $user_profile_arn;

  public function __construct(shape(
  ?'user_profile_arn' => UserProfileArn,
  ) $s = shape()) {
    $this->user_profile_arn = $user_profile_arn ?? "";
  }
}

class UpdateWorkforceRequest {
  public SourceIpConfig $source_ip_config;
  public WorkforceName $workforce_name;

  public function __construct(shape(
  ?'source_ip_config' => SourceIpConfig,
  ?'workforce_name' => WorkforceName,
  ) $s = shape()) {
    $this->source_ip_config = $source_ip_config ?? null;
    $this->workforce_name = $workforce_name ?? "";
  }
}

class UpdateWorkforceResponse {
  public Workforce $workforce;

  public function __construct(shape(
  ?'workforce' => Workforce,
  ) $s = shape()) {
    $this->workforce = $workforce ?? null;
  }
}

class UpdateWorkteamRequest {
  public String200 $description;
  public MemberDefinitions $member_definitions;
  public NotificationConfiguration $notification_configuration;
  public WorkteamName $workteam_name;

  public function __construct(shape(
  ?'description' => String200,
  ?'member_definitions' => MemberDefinitions,
  ?'notification_configuration' => NotificationConfiguration,
  ?'workteam_name' => WorkteamName,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->member_definitions = $member_definitions ?? [];
    $this->notification_configuration = $notification_configuration ?? null;
    $this->workteam_name = $workteam_name ?? "";
  }
}

class UpdateWorkteamResponse {
  public Workteam $workteam;

  public function __construct(shape(
  ?'workteam' => Workteam,
  ) $s = shape()) {
    $this->workteam = $workteam ?? null;
  }
}

type Url = string;

class UserContext {
  public string $domain_id;
  public string $user_profile_arn;
  public string $user_profile_name;

  public function __construct(shape(
  ?'domain_id' => string,
  ?'user_profile_arn' => string,
  ?'user_profile_name' => string,
  ) $s = shape()) {
    $this->domain_id = $domain_id ?? "";
    $this->user_profile_arn = $user_profile_arn ?? "";
    $this->user_profile_name = $user_profile_name ?? "";
  }
}

type UserProfileArn = string;

class UserProfileDetails {
  public CreationTime $creation_time;
  public DomainId $domain_id;
  public LastModifiedTime $last_modified_time;
  public UserProfileStatus $status;
  public UserProfileName $user_profile_name;

  public function __construct(shape(
  ?'creation_time' => CreationTime,
  ?'domain_id' => DomainId,
  ?'last_modified_time' => LastModifiedTime,
  ?'status' => UserProfileStatus,
  ?'user_profile_name' => UserProfileName,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->domain_id = $domain_id ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->status = $status ?? ;
    $this->user_profile_name = $user_profile_name ?? "";
  }
}

type UserProfileList = vec<UserProfileDetails>;

type UserProfileName = string;

type UserProfileSortKey = string;

type UserProfileStatus = string;

class UserSettings {
  public RoleArn $execution_role;
  public JupyterServerAppSettings $jupyter_server_app_settings;
  public KernelGatewayAppSettings $kernel_gateway_app_settings;
  public SecurityGroupIds $security_groups;
  public SharingSettings $sharing_settings;
  public TensorBoardAppSettings $tensor_board_app_settings;

  public function __construct(shape(
  ?'execution_role' => RoleArn,
  ?'jupyter_server_app_settings' => JupyterServerAppSettings,
  ?'kernel_gateway_app_settings' => KernelGatewayAppSettings,
  ?'security_groups' => SecurityGroupIds,
  ?'sharing_settings' => SharingSettings,
  ?'tensor_board_app_settings' => TensorBoardAppSettings,
  ) $s = shape()) {
    $this->execution_role = $execution_role ?? ;
    $this->jupyter_server_app_settings = $jupyter_server_app_settings ?? null;
    $this->kernel_gateway_app_settings = $kernel_gateway_app_settings ?? null;
    $this->security_groups = $security_groups ?? ;
    $this->sharing_settings = $sharing_settings ?? null;
    $this->tensor_board_app_settings = $tensor_board_app_settings ?? null;
  }
}

type VariantName = string;

class VariantProperty {
  public VariantPropertyType $variant_property_type;

  public function __construct(shape(
  ?'variant_property_type' => VariantPropertyType,
  ) $s = shape()) {
    $this->variant_property_type = $variant_property_type ?? "";
  }
}

type VariantPropertyList = vec<VariantProperty>;

type VariantPropertyType = string;

type VariantWeight = float;

type VolumeSizeInGB = int;

class VpcConfig {
  public VpcSecurityGroupIds $security_group_ids;
  public Subnets $subnets;

  public function __construct(shape(
  ?'security_group_ids' => VpcSecurityGroupIds,
  ?'subnets' => Subnets,
  ) $s = shape()) {
    $this->security_group_ids = $security_group_ids ?? [];
    $this->subnets = $subnets ?? [];
  }
}

type VpcId = string;

type VpcSecurityGroupIds = vec<SecurityGroupId>;

class Workforce {
  public Timestamp $last_updated_date;
  public SourceIpConfig $source_ip_config;
  public WorkforceArn $workforce_arn;
  public WorkforceName $workforce_name;

  public function __construct(shape(
  ?'last_updated_date' => Timestamp,
  ?'source_ip_config' => SourceIpConfig,
  ?'workforce_arn' => WorkforceArn,
  ?'workforce_name' => WorkforceName,
  ) $s = shape()) {
    $this->last_updated_date = $last_updated_date ?? ;
    $this->source_ip_config = $source_ip_config ?? null;
    $this->workforce_arn = $workforce_arn ?? "";
    $this->workforce_name = $workforce_name ?? "";
  }
}

type WorkforceArn = string;

type WorkforceName = string;

class Workteam {
  public Timestamp $create_date;
  public String200 $description;
  public Timestamp $last_updated_date;
  public MemberDefinitions $member_definitions;
  public NotificationConfiguration $notification_configuration;
  public ProductListings $product_listing_ids;
  public string $sub_domain;
  public WorkteamArn $workteam_arn;
  public WorkteamName $workteam_name;

  public function __construct(shape(
  ?'create_date' => Timestamp,
  ?'description' => String200,
  ?'last_updated_date' => Timestamp,
  ?'member_definitions' => MemberDefinitions,
  ?'notification_configuration' => NotificationConfiguration,
  ?'product_listing_ids' => ProductListings,
  ?'sub_domain' => string,
  ?'workteam_arn' => WorkteamArn,
  ?'workteam_name' => WorkteamName,
  ) $s = shape()) {
    $this->create_date = $create_date ?? ;
    $this->description = $description ?? ;
    $this->last_updated_date = $last_updated_date ?? ;
    $this->member_definitions = $member_definitions ?? [];
    $this->notification_configuration = $notification_configuration ?? null;
    $this->product_listing_ids = $product_listing_ids ?? ;
    $this->sub_domain = $sub_domain ?? ;
    $this->workteam_arn = $workteam_arn ?? "";
    $this->workteam_name = $workteam_name ?? "";
  }
}

type WorkteamArn = string;

type WorkteamName = string;

type Workteams = vec<Workteam>;


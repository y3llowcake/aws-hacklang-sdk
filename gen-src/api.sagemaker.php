<?hh // strict
namespace slack\aws\api.sagemaker;

interface SageMaker {
  public function AddTags(AddTagsInput) Awaitable<Errors\Result<AddTagsOutput>>;
  public function AssociateTrialComponent(AssociateTrialComponentRequest) Awaitable<Errors\Result<AssociateTrialComponentResponse>>;
  public function CreateAlgorithm(CreateAlgorithmInput) Awaitable<Errors\Result<CreateAlgorithmOutput>>;
  public function CreateApp(CreateAppRequest) Awaitable<Errors\Result<CreateAppResponse>>;
  public function CreateAutoMLJob(CreateAutoMLJobRequest) Awaitable<Errors\Result<CreateAutoMLJobResponse>>;
  public function CreateCodeRepository(CreateCodeRepositoryInput) Awaitable<Errors\Result<CreateCodeRepositoryOutput>>;
  public function CreateCompilationJob(CreateCompilationJobRequest) Awaitable<Errors\Result<CreateCompilationJobResponse>>;
  public function CreateDomain(CreateDomainRequest) Awaitable<Errors\Result<CreateDomainResponse>>;
  public function CreateEndpoint(CreateEndpointInput) Awaitable<Errors\Result<CreateEndpointOutput>>;
  public function CreateEndpointConfig(CreateEndpointConfigInput) Awaitable<Errors\Result<CreateEndpointConfigOutput>>;
  public function CreateExperiment(CreateExperimentRequest) Awaitable<Errors\Result<CreateExperimentResponse>>;
  public function CreateFlowDefinition(CreateFlowDefinitionRequest) Awaitable<Errors\Result<CreateFlowDefinitionResponse>>;
  public function CreateHumanTaskUi(CreateHumanTaskUiRequest) Awaitable<Errors\Result<CreateHumanTaskUiResponse>>;
  public function CreateHyperParameterTuningJob(CreateHyperParameterTuningJobRequest) Awaitable<Errors\Result<CreateHyperParameterTuningJobResponse>>;
  public function CreateLabelingJob(CreateLabelingJobRequest) Awaitable<Errors\Result<CreateLabelingJobResponse>>;
  public function CreateModel(CreateModelInput) Awaitable<Errors\Result<CreateModelOutput>>;
  public function CreateModelPackage(CreateModelPackageInput) Awaitable<Errors\Result<CreateModelPackageOutput>>;
  public function CreateMonitoringSchedule(CreateMonitoringScheduleRequest) Awaitable<Errors\Result<CreateMonitoringScheduleResponse>>;
  public function CreateNotebookInstance(CreateNotebookInstanceInput) Awaitable<Errors\Result<CreateNotebookInstanceOutput>>;
  public function CreateNotebookInstanceLifecycleConfig(CreateNotebookInstanceLifecycleConfigInput) Awaitable<Errors\Result<CreateNotebookInstanceLifecycleConfigOutput>>;
  public function CreatePresignedDomainUrl(CreatePresignedDomainUrlRequest) Awaitable<Errors\Result<CreatePresignedDomainUrlResponse>>;
  public function CreatePresignedNotebookInstanceUrl(CreatePresignedNotebookInstanceUrlInput) Awaitable<Errors\Result<CreatePresignedNotebookInstanceUrlOutput>>;
  public function CreateProcessingJob(CreateProcessingJobRequest) Awaitable<Errors\Result<CreateProcessingJobResponse>>;
  public function CreateTrainingJob(CreateTrainingJobRequest) Awaitable<Errors\Result<CreateTrainingJobResponse>>;
  public function CreateTransformJob(CreateTransformJobRequest) Awaitable<Errors\Result<CreateTransformJobResponse>>;
  public function CreateTrial(CreateTrialRequest) Awaitable<Errors\Result<CreateTrialResponse>>;
  public function CreateTrialComponent(CreateTrialComponentRequest) Awaitable<Errors\Result<CreateTrialComponentResponse>>;
  public function CreateUserProfile(CreateUserProfileRequest) Awaitable<Errors\Result<CreateUserProfileResponse>>;
  public function CreateWorkteam(CreateWorkteamRequest) Awaitable<Errors\Result<CreateWorkteamResponse>>;
  public function DeleteAlgorithm(DeleteAlgorithmInput) Awaitable<Errors\Error>;
  public function DeleteApp(DeleteAppRequest) Awaitable<Errors\Error>;
  public function DeleteCodeRepository(DeleteCodeRepositoryInput) Awaitable<Errors\Error>;
  public function DeleteDomain(DeleteDomainRequest) Awaitable<Errors\Error>;
  public function DeleteEndpoint(DeleteEndpointInput) Awaitable<Errors\Error>;
  public function DeleteEndpointConfig(DeleteEndpointConfigInput) Awaitable<Errors\Error>;
  public function DeleteExperiment(DeleteExperimentRequest) Awaitable<Errors\Result<DeleteExperimentResponse>>;
  public function DeleteFlowDefinition(DeleteFlowDefinitionRequest) Awaitable<Errors\Result<DeleteFlowDefinitionResponse>>;
  public function DeleteModel(DeleteModelInput) Awaitable<Errors\Error>;
  public function DeleteModelPackage(DeleteModelPackageInput) Awaitable<Errors\Error>;
  public function DeleteMonitoringSchedule(DeleteMonitoringScheduleRequest) Awaitable<Errors\Error>;
  public function DeleteNotebookInstance(DeleteNotebookInstanceInput) Awaitable<Errors\Error>;
  public function DeleteNotebookInstanceLifecycleConfig(DeleteNotebookInstanceLifecycleConfigInput) Awaitable<Errors\Error>;
  public function DeleteTags(DeleteTagsInput) Awaitable<Errors\Result<DeleteTagsOutput>>;
  public function DeleteTrial(DeleteTrialRequest) Awaitable<Errors\Result<DeleteTrialResponse>>;
  public function DeleteTrialComponent(DeleteTrialComponentRequest) Awaitable<Errors\Result<DeleteTrialComponentResponse>>;
  public function DeleteUserProfile(DeleteUserProfileRequest) Awaitable<Errors\Error>;
  public function DeleteWorkteam(DeleteWorkteamRequest) Awaitable<Errors\Result<DeleteWorkteamResponse>>;
  public function DescribeAlgorithm(DescribeAlgorithmInput) Awaitable<Errors\Result<DescribeAlgorithmOutput>>;
  public function DescribeApp(DescribeAppRequest) Awaitable<Errors\Result<DescribeAppResponse>>;
  public function DescribeAutoMLJob(DescribeAutoMLJobRequest) Awaitable<Errors\Result<DescribeAutoMLJobResponse>>;
  public function DescribeCodeRepository(DescribeCodeRepositoryInput) Awaitable<Errors\Result<DescribeCodeRepositoryOutput>>;
  public function DescribeCompilationJob(DescribeCompilationJobRequest) Awaitable<Errors\Result<DescribeCompilationJobResponse>>;
  public function DescribeDomain(DescribeDomainRequest) Awaitable<Errors\Result<DescribeDomainResponse>>;
  public function DescribeEndpoint(DescribeEndpointInput) Awaitable<Errors\Result<DescribeEndpointOutput>>;
  public function DescribeEndpointConfig(DescribeEndpointConfigInput) Awaitable<Errors\Result<DescribeEndpointConfigOutput>>;
  public function DescribeExperiment(DescribeExperimentRequest) Awaitable<Errors\Result<DescribeExperimentResponse>>;
  public function DescribeFlowDefinition(DescribeFlowDefinitionRequest) Awaitable<Errors\Result<DescribeFlowDefinitionResponse>>;
  public function DescribeHumanTaskUi(DescribeHumanTaskUiRequest) Awaitable<Errors\Result<DescribeHumanTaskUiResponse>>;
  public function DescribeHyperParameterTuningJob(DescribeHyperParameterTuningJobRequest) Awaitable<Errors\Result<DescribeHyperParameterTuningJobResponse>>;
  public function DescribeLabelingJob(DescribeLabelingJobRequest) Awaitable<Errors\Result<DescribeLabelingJobResponse>>;
  public function DescribeModel(DescribeModelInput) Awaitable<Errors\Result<DescribeModelOutput>>;
  public function DescribeModelPackage(DescribeModelPackageInput) Awaitable<Errors\Result<DescribeModelPackageOutput>>;
  public function DescribeMonitoringSchedule(DescribeMonitoringScheduleRequest) Awaitable<Errors\Result<DescribeMonitoringScheduleResponse>>;
  public function DescribeNotebookInstance(DescribeNotebookInstanceInput) Awaitable<Errors\Result<DescribeNotebookInstanceOutput>>;
  public function DescribeNotebookInstanceLifecycleConfig(DescribeNotebookInstanceLifecycleConfigInput) Awaitable<Errors\Result<DescribeNotebookInstanceLifecycleConfigOutput>>;
  public function DescribeProcessingJob(DescribeProcessingJobRequest) Awaitable<Errors\Result<DescribeProcessingJobResponse>>;
  public function DescribeSubscribedWorkteam(DescribeSubscribedWorkteamRequest) Awaitable<Errors\Result<DescribeSubscribedWorkteamResponse>>;
  public function DescribeTrainingJob(DescribeTrainingJobRequest) Awaitable<Errors\Result<DescribeTrainingJobResponse>>;
  public function DescribeTransformJob(DescribeTransformJobRequest) Awaitable<Errors\Result<DescribeTransformJobResponse>>;
  public function DescribeTrial(DescribeTrialRequest) Awaitable<Errors\Result<DescribeTrialResponse>>;
  public function DescribeTrialComponent(DescribeTrialComponentRequest) Awaitable<Errors\Result<DescribeTrialComponentResponse>>;
  public function DescribeUserProfile(DescribeUserProfileRequest) Awaitable<Errors\Result<DescribeUserProfileResponse>>;
  public function DescribeWorkforce(DescribeWorkforceRequest) Awaitable<Errors\Result<DescribeWorkforceResponse>>;
  public function DescribeWorkteam(DescribeWorkteamRequest) Awaitable<Errors\Result<DescribeWorkteamResponse>>;
  public function DisassociateTrialComponent(DisassociateTrialComponentRequest) Awaitable<Errors\Result<DisassociateTrialComponentResponse>>;
  public function GetSearchSuggestions(GetSearchSuggestionsRequest) Awaitable<Errors\Result<GetSearchSuggestionsResponse>>;
  public function ListAlgorithms(ListAlgorithmsInput) Awaitable<Errors\Result<ListAlgorithmsOutput>>;
  public function ListApps(ListAppsRequest) Awaitable<Errors\Result<ListAppsResponse>>;
  public function ListAutoMLJobs(ListAutoMLJobsRequest) Awaitable<Errors\Result<ListAutoMLJobsResponse>>;
  public function ListCandidatesForAutoMLJob(ListCandidatesForAutoMLJobRequest) Awaitable<Errors\Result<ListCandidatesForAutoMLJobResponse>>;
  public function ListCodeRepositories(ListCodeRepositoriesInput) Awaitable<Errors\Result<ListCodeRepositoriesOutput>>;
  public function ListCompilationJobs(ListCompilationJobsRequest) Awaitable<Errors\Result<ListCompilationJobsResponse>>;
  public function ListDomains(ListDomainsRequest) Awaitable<Errors\Result<ListDomainsResponse>>;
  public function ListEndpointConfigs(ListEndpointConfigsInput) Awaitable<Errors\Result<ListEndpointConfigsOutput>>;
  public function ListEndpoints(ListEndpointsInput) Awaitable<Errors\Result<ListEndpointsOutput>>;
  public function ListExperiments(ListExperimentsRequest) Awaitable<Errors\Result<ListExperimentsResponse>>;
  public function ListFlowDefinitions(ListFlowDefinitionsRequest) Awaitable<Errors\Result<ListFlowDefinitionsResponse>>;
  public function ListHumanTaskUis(ListHumanTaskUisRequest) Awaitable<Errors\Result<ListHumanTaskUisResponse>>;
  public function ListHyperParameterTuningJobs(ListHyperParameterTuningJobsRequest) Awaitable<Errors\Result<ListHyperParameterTuningJobsResponse>>;
  public function ListLabelingJobs(ListLabelingJobsRequest) Awaitable<Errors\Result<ListLabelingJobsResponse>>;
  public function ListLabelingJobsForWorkteam(ListLabelingJobsForWorkteamRequest) Awaitable<Errors\Result<ListLabelingJobsForWorkteamResponse>>;
  public function ListModelPackages(ListModelPackagesInput) Awaitable<Errors\Result<ListModelPackagesOutput>>;
  public function ListModels(ListModelsInput) Awaitable<Errors\Result<ListModelsOutput>>;
  public function ListMonitoringExecutions(ListMonitoringExecutionsRequest) Awaitable<Errors\Result<ListMonitoringExecutionsResponse>>;
  public function ListMonitoringSchedules(ListMonitoringSchedulesRequest) Awaitable<Errors\Result<ListMonitoringSchedulesResponse>>;
  public function ListNotebookInstanceLifecycleConfigs(ListNotebookInstanceLifecycleConfigsInput) Awaitable<Errors\Result<ListNotebookInstanceLifecycleConfigsOutput>>;
  public function ListNotebookInstances(ListNotebookInstancesInput) Awaitable<Errors\Result<ListNotebookInstancesOutput>>;
  public function ListProcessingJobs(ListProcessingJobsRequest) Awaitable<Errors\Result<ListProcessingJobsResponse>>;
  public function ListSubscribedWorkteams(ListSubscribedWorkteamsRequest) Awaitable<Errors\Result<ListSubscribedWorkteamsResponse>>;
  public function ListTags(ListTagsInput) Awaitable<Errors\Result<ListTagsOutput>>;
  public function ListTrainingJobs(ListTrainingJobsRequest) Awaitable<Errors\Result<ListTrainingJobsResponse>>;
  public function ListTrainingJobsForHyperParameterTuningJob(ListTrainingJobsForHyperParameterTuningJobRequest) Awaitable<Errors\Result<ListTrainingJobsForHyperParameterTuningJobResponse>>;
  public function ListTransformJobs(ListTransformJobsRequest) Awaitable<Errors\Result<ListTransformJobsResponse>>;
  public function ListTrialComponents(ListTrialComponentsRequest) Awaitable<Errors\Result<ListTrialComponentsResponse>>;
  public function ListTrials(ListTrialsRequest) Awaitable<Errors\Result<ListTrialsResponse>>;
  public function ListUserProfiles(ListUserProfilesRequest) Awaitable<Errors\Result<ListUserProfilesResponse>>;
  public function ListWorkteams(ListWorkteamsRequest) Awaitable<Errors\Result<ListWorkteamsResponse>>;
  public function RenderUiTemplate(RenderUiTemplateRequest) Awaitable<Errors\Result<RenderUiTemplateResponse>>;
  public function Search(SearchRequest) Awaitable<Errors\Result<SearchResponse>>;
  public function StartMonitoringSchedule(StartMonitoringScheduleRequest) Awaitable<Errors\Error>;
  public function StartNotebookInstance(StartNotebookInstanceInput) Awaitable<Errors\Error>;
  public function StopAutoMLJob(StopAutoMLJobRequest) Awaitable<Errors\Error>;
  public function StopCompilationJob(StopCompilationJobRequest) Awaitable<Errors\Error>;
  public function StopHyperParameterTuningJob(StopHyperParameterTuningJobRequest) Awaitable<Errors\Error>;
  public function StopLabelingJob(StopLabelingJobRequest) Awaitable<Errors\Error>;
  public function StopMonitoringSchedule(StopMonitoringScheduleRequest) Awaitable<Errors\Error>;
  public function StopNotebookInstance(StopNotebookInstanceInput) Awaitable<Errors\Error>;
  public function StopProcessingJob(StopProcessingJobRequest) Awaitable<Errors\Error>;
  public function StopTrainingJob(StopTrainingJobRequest) Awaitable<Errors\Error>;
  public function StopTransformJob(StopTransformJobRequest) Awaitable<Errors\Error>;
  public function UpdateCodeRepository(UpdateCodeRepositoryInput) Awaitable<Errors\Result<UpdateCodeRepositoryOutput>>;
  public function UpdateDomain(UpdateDomainRequest) Awaitable<Errors\Result<UpdateDomainResponse>>;
  public function UpdateEndpoint(UpdateEndpointInput) Awaitable<Errors\Result<UpdateEndpointOutput>>;
  public function UpdateEndpointWeightsAndCapacities(UpdateEndpointWeightsAndCapacitiesInput) Awaitable<Errors\Result<UpdateEndpointWeightsAndCapacitiesOutput>>;
  public function UpdateExperiment(UpdateExperimentRequest) Awaitable<Errors\Result<UpdateExperimentResponse>>;
  public function UpdateMonitoringSchedule(UpdateMonitoringScheduleRequest) Awaitable<Errors\Result<UpdateMonitoringScheduleResponse>>;
  public function UpdateNotebookInstance(UpdateNotebookInstanceInput) Awaitable<Errors\Result<UpdateNotebookInstanceOutput>>;
  public function UpdateNotebookInstanceLifecycleConfig(UpdateNotebookInstanceLifecycleConfigInput) Awaitable<Errors\Result<UpdateNotebookInstanceLifecycleConfigOutput>>;
  public function UpdateTrial(UpdateTrialRequest) Awaitable<Errors\Result<UpdateTrialResponse>>;
  public function UpdateTrialComponent(UpdateTrialComponentRequest) Awaitable<Errors\Result<UpdateTrialComponentResponse>>;
  public function UpdateUserProfile(UpdateUserProfileRequest) Awaitable<Errors\Result<UpdateUserProfileResponse>>;
  public function UpdateWorkforce(UpdateWorkforceRequest) Awaitable<Errors\Result<UpdateWorkforceResponse>>;
  public function UpdateWorkteam(UpdateWorkteamRequest) Awaitable<Errors\Result<UpdateWorkteamResponse>>;
}

class Accept {
}

class AccountId {
}

class AddTagsInput {
  public ResourceArn $resource_arn;
  public TagList $tags;
}

class AddTagsOutput {
  public TagList $tags;
}

class AdditionalCodeRepositoryNamesOrUrls {
}

class AlgorithmArn {
}

class AlgorithmImage {
}

class AlgorithmSortBy {
}

class AlgorithmSpecification {
  public ArnOrName $algorithm_name;
  public boolean $enable_sage_maker_metrics_time_series;
  public MetricDefinitionList $metric_definitions;
  public AlgorithmImage $training_image;
  public TrainingInputMode $training_input_mode;
}

class AlgorithmStatus {
}

class AlgorithmStatusDetails {
  public AlgorithmStatusItemList $image_scan_statuses;
  public AlgorithmStatusItemList $validation_statuses;
}

class AlgorithmStatusItem {
  public string $failure_reason;
  public EntityName $name;
  public DetailedAlgorithmStatus $status;
}

class AlgorithmStatusItemList {
}

class AlgorithmSummary {
  public AlgorithmArn $algorithm_arn;
  public EntityDescription $algorithm_description;
  public EntityName $algorithm_name;
  public AlgorithmStatus $algorithm_status;
  public CreationTime $creation_time;
}

class AlgorithmSummaryList {
}

class AlgorithmValidationProfile {
  public EntityName $profile_name;
  public TrainingJobDefinition $training_job_definition;
  public TransformJobDefinition $transform_job_definition;
}

class AlgorithmValidationProfiles {
}

class AlgorithmValidationSpecification {
  public AlgorithmValidationProfiles $validation_profiles;
  public RoleArn $validation_role;
}

class AnnotationConsolidationConfig {
  public LambdaFunctionArn $annotation_consolidation_lambda_arn;
}

class AppArn {
}

class AppDetails {
  public AppName $app_name;
  public AppType $app_type;
  public CreationTime $creation_time;
  public DomainId $domain_id;
  public AppStatus $status;
  public UserProfileName $user_profile_name;
}

class AppInstanceType {
}

class AppList {
}

class AppName {
}

class AppSortKey {
}

class AppSpecification {
  public ContainerArguments $container_arguments;
  public ContainerEntrypoint $container_entrypoint;
  public ImageUri $image_uri;
}

class AppStatus {
}

class AppType {
}

class ArnOrName {
}

class AssemblyType {
}

class AssociateTrialComponentRequest {
  public ExperimentEntityName $trial_component_name;
  public ExperimentEntityName $trial_name;
}

class AssociateTrialComponentResponse {
  public TrialArn $trial_arn;
  public TrialComponentArn $trial_component_arn;
}

class AttributeName {
}

class AttributeNames {
}

class AuthMode {
}

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
}

class AutoMLCandidateStep {
  public CandidateStepArn $candidate_step_arn;
  public CandidateStepName $candidate_step_name;
  public CandidateStepType $candidate_step_type;
}

class AutoMLCandidates {
}

class AutoMLChannel {
  public CompressionType $compression_type;
  public AutoMLDataSource $data_source;
  public TargetAttributeName $target_attribute_name;
}

class AutoMLContainerDefinition {
  public EnvironmentMap $environment;
  public Image $image;
  public Url $model_data_url;
}

class AutoMLContainerDefinitions {
}

class AutoMLDataSource {
  public AutoMLS3DataSource $s_3_data_source;
}

class AutoMLFailureReason {
}

class AutoMLInputDataConfig {
}

class AutoMLJobArn {
}

class AutoMLJobArtifacts {
  public CandidateDefinitionNotebookLocation $candidate_definition_notebook_location;
  public DataExplorationNotebookLocation $data_exploration_notebook_location;
}

class AutoMLJobCompletionCriteria {
  public MaxAutoMLJobRuntimeInSeconds $max_auto_ml_job_runtime_in_seconds;
  public MaxCandidates $max_candidates;
  public MaxRuntimePerTrainingJobInSeconds $max_runtime_per_training_job_in_seconds;
}

class AutoMLJobConfig {
  public AutoMLJobCompletionCriteria $completion_criteria;
  public AutoMLSecurityConfig $security_config;
}

class AutoMLJobName {
}

class AutoMLJobObjective {
  public AutoMLMetricEnum $metric_name;
}

class AutoMLJobObjectiveType {
}

class AutoMLJobSecondaryStatus {
}

class AutoMLJobStatus {
}

class AutoMLJobSummaries {
}

class AutoMLJobSummary {
  public AutoMLJobArn $auto_ml_job_arn;
  public AutoMLJobName $auto_ml_job_name;
  public AutoMLJobSecondaryStatus $auto_ml_job_secondary_status;
  public AutoMLJobStatus $auto_ml_job_status;
  public Timestamp $creation_time;
  public Timestamp $end_time;
  public AutoMLFailureReason $failure_reason;
  public Timestamp $last_modified_time;
}

class AutoMLMaxResults {
}

class AutoMLMetricEnum {
}

class AutoMLNameContains {
}

class AutoMLOutputDataConfig {
  public KmsKeyId $kms_key_id;
  public S3Uri $s_3_output_path;
}

class AutoMLS3DataSource {
  public AutoMLS3DataType $s_3_data_type;
  public S3Uri $s_3_uri;
}

class AutoMLS3DataType {
}

class AutoMLSecurityConfig {
  public boolean $enable_inter_container_traffic_encryption;
  public KmsKeyId $volume_kms_key_id;
  public VpcConfig $vpc_config;
}

class AutoMLSortBy {
}

class AutoMLSortOrder {
}

class AwsManagedHumanLoopRequestSource {
}

class BatchStrategy {
}

class BillableTimeInSeconds {
}

class Boolean {
}

class BooleanOperator {
}

class Branch {
}

class CandidateDefinitionNotebookLocation {
}

class CandidateName {
}

class CandidateSortBy {
}

class CandidateStatus {
}

class CandidateStepArn {
}

class CandidateStepName {
}

class CandidateStepType {
}

class CandidateSteps {
}

class CaptureContentTypeHeader {
  public CsvContentTypes $csv_content_types;
  public JsonContentTypes $json_content_types;
}

class CaptureMode {
}

class CaptureOption {
  public CaptureMode $capture_mode;
}

class CaptureOptionList {
}

class CaptureStatus {
}

class CategoricalParameterRange {
  public ParameterKey $name;
  public ParameterValues $values;
}

class CategoricalParameterRangeSpecification {
  public ParameterValues $values;
}

class CategoricalParameterRanges {
}

class Cents {
}

class CertifyForMarketplace {
}

class Channel {
  public ChannelName $channel_name;
  public CompressionType $compression_type;
  public ContentType $content_type;
  public DataSource $data_source;
  public TrainingInputMode $input_mode;
  public RecordWrapper $record_wrapper_type;
  public ShuffleConfig $shuffle_config;
}

class ChannelName {
}

class ChannelSpecification {
  public EntityDescription $description;
  public boolean $is_required;
  public ChannelName $name;
  public CompressionTypes $supported_compression_types;
  public ContentTypes $supported_content_types;
  public InputModes $supported_input_modes;
}

class ChannelSpecifications {
}

class CheckpointConfig {
  public DirectoryPath $local_path;
  public S3Uri $s_3_uri;
}

class Cidr {
}

class Cidrs {
}

class CodeRepositoryArn {
}

class CodeRepositoryContains {
}

class CodeRepositoryNameContains {
}

class CodeRepositoryNameOrUrl {
}

class CodeRepositorySortBy {
}

class CodeRepositorySortOrder {
}

class CodeRepositorySummary {
  public CodeRepositoryArn $code_repository_arn;
  public EntityName $code_repository_name;
  public CreationTime $creation_time;
  public GitConfig $git_config;
  public LastModifiedTime $last_modified_time;
}

class CodeRepositorySummaryList {
}

class CognitoClientId {
}

class CognitoMemberDefinition {
  public CognitoClientId $client_id;
  public CognitoUserGroup $user_group;
  public CognitoUserPool $user_pool;
}

class CognitoUserGroup {
}

class CognitoUserPool {
}

class CollectionConfiguration {
  public CollectionName $collection_name;
  public CollectionParameters $collection_parameters;
}

class CollectionConfigurations {
}

class CollectionName {
}

class CollectionParameters {
}

class CompilationJobArn {
}

class CompilationJobStatus {
}

class CompilationJobSummaries {
}

class CompilationJobSummary {
  public Timestamp $compilation_end_time;
  public CompilationJobArn $compilation_job_arn;
  public EntityName $compilation_job_name;
  public CompilationJobStatus $compilation_job_status;
  public Timestamp $compilation_start_time;
  public TargetDevice $compilation_target_device;
  public CreationTime $creation_time;
  public LastModifiedTime $last_modified_time;
}

class CompressionType {
}

class CompressionTypes {
}

class ConfigKey {
}

class ConfigValue {
}

class ConflictException {
  public FailureReason $message;
}

class ContainerArgument {
}

class ContainerArguments {
}

class ContainerDefinition {
  public ContainerHostname $container_hostname;
  public EnvironmentMap $environment;
  public Image $image;
  public ContainerMode $mode;
  public Url $model_data_url;
  public ArnOrName $model_package_name;
}

class ContainerDefinitionList {
}

class ContainerEntrypoint {
}

class ContainerEntrypointString {
}

class ContainerHostname {
}

class ContainerMode {
}

class ContentClassifier {
}

class ContentClassifiers {
}

class ContentType {
}

class ContentTypes {
}

class ContinuousParameterRange {
  public ParameterValue $max_value;
  public ParameterValue $min_value;
  public ParameterKey $name;
  public HyperParameterScalingType $scaling_type;
}

class ContinuousParameterRangeSpecification {
  public ParameterValue $max_value;
  public ParameterValue $min_value;
}

class ContinuousParameterRanges {
}

class CreateAlgorithmInput {
  public EntityDescription $algorithm_description;
  public EntityName $algorithm_name;
  public CertifyForMarketplace $certify_for_marketplace;
  public InferenceSpecification $inference_specification;
  public TrainingSpecification $training_specification;
  public AlgorithmValidationSpecification $validation_specification;
}

class CreateAlgorithmOutput {
  public AlgorithmArn $algorithm_arn;
}

class CreateAppRequest {
  public AppName $app_name;
  public AppType $app_type;
  public DomainId $domain_id;
  public ResourceSpec $resource_spec;
  public TagList $tags;
  public UserProfileName $user_profile_name;
}

class CreateAppResponse {
  public AppArn $app_arn;
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
}

class CreateAutoMLJobResponse {
  public AutoMLJobArn $auto_ml_job_arn;
}

class CreateCodeRepositoryInput {
  public EntityName $code_repository_name;
  public GitConfig $git_config;
}

class CreateCodeRepositoryOutput {
  public CodeRepositoryArn $code_repository_arn;
}

class CreateCompilationJobRequest {
  public EntityName $compilation_job_name;
  public InputConfig $input_config;
  public OutputConfig $output_config;
  public RoleArn $role_arn;
  public StoppingCondition $stopping_condition;
}

class CreateCompilationJobResponse {
  public CompilationJobArn $compilation_job_arn;
}

class CreateDomainRequest {
  public AuthMode $auth_mode;
  public UserSettings $default_user_settings;
  public DomainName $domain_name;
  public KmsKeyId $home_efs_file_system_kms_key_id;
  public Subnets $subnet_ids;
  public TagList $tags;
  public VpcId $vpc_id;
}

class CreateDomainResponse {
  public DomainArn $domain_arn;
  public String1024 $url;
}

class CreateEndpointConfigInput {
  public DataCaptureConfig $data_capture_config;
  public EndpointConfigName $endpoint_config_name;
  public KmsKeyId $kms_key_id;
  public ProductionVariantList $production_variants;
  public TagList $tags;
}

class CreateEndpointConfigOutput {
  public EndpointConfigArn $endpoint_config_arn;
}

class CreateEndpointInput {
  public EndpointConfigName $endpoint_config_name;
  public EndpointName $endpoint_name;
  public TagList $tags;
}

class CreateEndpointOutput {
  public EndpointArn $endpoint_arn;
}

class CreateExperimentRequest {
  public ExperimentDescription $description;
  public ExperimentEntityName $display_name;
  public ExperimentEntityName $experiment_name;
  public TagList $tags;
}

class CreateExperimentResponse {
  public ExperimentArn $experiment_arn;
}

class CreateFlowDefinitionRequest {
  public FlowDefinitionName $flow_definition_name;
  public HumanLoopActivationConfig $human_loop_activation_config;
  public HumanLoopConfig $human_loop_config;
  public HumanLoopRequestSource $human_loop_request_source;
  public FlowDefinitionOutputConfig $output_config;
  public RoleArn $role_arn;
  public TagList $tags;
}

class CreateFlowDefinitionResponse {
  public FlowDefinitionArn $flow_definition_arn;
}

class CreateHumanTaskUiRequest {
  public HumanTaskUiName $human_task_ui_name;
  public TagList $tags;
  public UiTemplate $ui_template;
}

class CreateHumanTaskUiResponse {
  public HumanTaskUiArn $human_task_ui_arn;
}

class CreateHyperParameterTuningJobRequest {
  public HyperParameterTuningJobConfig $hyper_parameter_tuning_job_config;
  public HyperParameterTuningJobName $hyper_parameter_tuning_job_name;
  public TagList $tags;
  public HyperParameterTrainingJobDefinition $training_job_definition;
  public HyperParameterTrainingJobDefinitions $training_job_definitions;
  public HyperParameterTuningJobWarmStartConfig $warm_start_config;
}

class CreateHyperParameterTuningJobResponse {
  public HyperParameterTuningJobArn $hyper_parameter_tuning_job_arn;
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
}

class CreateLabelingJobResponse {
  public LabelingJobArn $labeling_job_arn;
}

class CreateModelInput {
  public ContainerDefinitionList $containers;
  public boolean $enable_network_isolation;
  public RoleArn $execution_role_arn;
  public ModelName $model_name;
  public ContainerDefinition $primary_container;
  public TagList $tags;
  public VpcConfig $vpc_config;
}

class CreateModelOutput {
  public ModelArn $model_arn;
}

class CreateModelPackageInput {
  public CertifyForMarketplace $certify_for_marketplace;
  public InferenceSpecification $inference_specification;
  public EntityDescription $model_package_description;
  public EntityName $model_package_name;
  public SourceAlgorithmSpecification $source_algorithm_specification;
  public ModelPackageValidationSpecification $validation_specification;
}

class CreateModelPackageOutput {
  public ModelPackageArn $model_package_arn;
}

class CreateMonitoringScheduleRequest {
  public MonitoringScheduleConfig $monitoring_schedule_config;
  public MonitoringScheduleName $monitoring_schedule_name;
  public TagList $tags;
}

class CreateMonitoringScheduleResponse {
  public MonitoringScheduleArn $monitoring_schedule_arn;
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
}

class CreateNotebookInstanceLifecycleConfigInput {
  public NotebookInstanceLifecycleConfigName $notebook_instance_lifecycle_config_name;
  public NotebookInstanceLifecycleConfigList $on_create;
  public NotebookInstanceLifecycleConfigList $on_start;
}

class CreateNotebookInstanceLifecycleConfigOutput {
  public NotebookInstanceLifecycleConfigArn $notebook_instance_lifecycle_config_arn;
}

class CreateNotebookInstanceOutput {
  public NotebookInstanceArn $notebook_instance_arn;
}

class CreatePresignedDomainUrlRequest {
  public DomainId $domain_id;
  public SessionExpirationDurationInSeconds $session_expiration_duration_in_seconds;
  public UserProfileName $user_profile_name;
}

class CreatePresignedDomainUrlResponse {
  public PresignedDomainUrl $authorized_url;
}

class CreatePresignedNotebookInstanceUrlInput {
  public NotebookInstanceName $notebook_instance_name;
  public SessionExpirationDurationInSeconds $session_expiration_duration_in_seconds;
}

class CreatePresignedNotebookInstanceUrlOutput {
  public NotebookInstanceUrl $authorized_url;
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
}

class CreateProcessingJobResponse {
  public ProcessingJobArn $processing_job_arn;
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
}

class CreateTrainingJobResponse {
  public TrainingJobArn $training_job_arn;
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
}

class CreateTransformJobResponse {
  public TransformJobArn $transform_job_arn;
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
}

class CreateTrialComponentResponse {
  public TrialComponentArn $trial_component_arn;
}

class CreateTrialRequest {
  public ExperimentEntityName $display_name;
  public ExperimentEntityName $experiment_name;
  public TagList $tags;
  public ExperimentEntityName $trial_name;
}

class CreateTrialResponse {
  public TrialArn $trial_arn;
}

class CreateUserProfileRequest {
  public DomainId $domain_id;
  public SingleSignOnUserIdentifier $single_sign_on_user_identifier;
  public String256 $single_sign_on_user_value;
  public TagList $tags;
  public UserProfileName $user_profile_name;
  public UserSettings $user_settings;
}

class CreateUserProfileResponse {
  public UserProfileArn $user_profile_arn;
}

class CreateWorkteamRequest {
  public String200 $description;
  public MemberDefinitions $member_definitions;
  public NotificationConfiguration $notification_configuration;
  public TagList $tags;
  public WorkteamName $workteam_name;
}

class CreateWorkteamResponse {
  public WorkteamArn $workteam_arn;
}

class CreationTime {
}

class CsvContentType {
}

class CsvContentTypes {
}

class DataCaptureConfig {
  public CaptureContentTypeHeader $capture_content_type_header;
  public CaptureOptionList $capture_options;
  public DestinationS3Uri $destination_s_3_uri;
  public EnableCapture $enable_capture;
  public SamplingPercentage $initial_sampling_percentage;
  public KmsKeyId $kms_key_id;
}

class DataCaptureConfigSummary {
  public CaptureStatus $capture_status;
  public SamplingPercentage $current_sampling_percentage;
  public DestinationS3Uri $destination_s_3_uri;
  public EnableCapture $enable_capture;
  public KmsKeyId $kms_key_id;
}

class DataExplorationNotebookLocation {
}

class DataInputConfig {
}

class DataProcessing {
  public JsonPath $input_filter;
  public JoinSource $join_source;
  public JsonPath $output_filter;
}

class DataSource {
  public FileSystemDataSource $file_system_data_source;
  public S3DataSource $s_3_data_source;
}

class DebugHookConfig {
  public CollectionConfigurations $collection_configurations;
  public HookParameters $hook_parameters;
  public DirectoryPath $local_path;
  public S3Uri $s_3_output_path;
}

class DebugRuleConfiguration {
  public ProcessingInstanceType $instance_type;
  public DirectoryPath $local_path;
  public RuleConfigurationName $rule_configuration_name;
  public AlgorithmImage $rule_evaluator_image;
  public RuleParameters $rule_parameters;
  public S3Uri $s_3_output_path;
  public OptionalVolumeSizeInGB $volume_size_in_gb;
}

class DebugRuleConfigurations {
}

class DebugRuleEvaluationStatus {
  public Timestamp $last_modified_time;
  public RuleConfigurationName $rule_configuration_name;
  public ProcessingJobArn $rule_evaluation_job_arn;
  public RuleEvaluationStatus $rule_evaluation_status;
  public StatusDetails $status_details;
}

class DebugRuleEvaluationStatuses {
}

class DeleteAlgorithmInput {
  public EntityName $algorithm_name;
}

class DeleteAppRequest {
  public AppName $app_name;
  public AppType $app_type;
  public DomainId $domain_id;
  public UserProfileName $user_profile_name;
}

class DeleteCodeRepositoryInput {
  public EntityName $code_repository_name;
}

class DeleteDomainRequest {
  public DomainId $domain_id;
  public RetentionPolicy $retention_policy;
}

class DeleteEndpointConfigInput {
  public EndpointConfigName $endpoint_config_name;
}

class DeleteEndpointInput {
  public EndpointName $endpoint_name;
}

class DeleteExperimentRequest {
  public ExperimentEntityName $experiment_name;
}

class DeleteExperimentResponse {
  public ExperimentArn $experiment_arn;
}

class DeleteFlowDefinitionRequest {
  public FlowDefinitionName $flow_definition_name;
}

class DeleteFlowDefinitionResponse {
}

class DeleteModelInput {
  public ModelName $model_name;
}

class DeleteModelPackageInput {
  public EntityName $model_package_name;
}

class DeleteMonitoringScheduleRequest {
  public MonitoringScheduleName $monitoring_schedule_name;
}

class DeleteNotebookInstanceInput {
  public NotebookInstanceName $notebook_instance_name;
}

class DeleteNotebookInstanceLifecycleConfigInput {
  public NotebookInstanceLifecycleConfigName $notebook_instance_lifecycle_config_name;
}

class DeleteTagsInput {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class DeleteTagsOutput {
}

class DeleteTrialComponentRequest {
  public ExperimentEntityName $trial_component_name;
}

class DeleteTrialComponentResponse {
  public TrialComponentArn $trial_component_arn;
}

class DeleteTrialRequest {
  public ExperimentEntityName $trial_name;
}

class DeleteTrialResponse {
  public TrialArn $trial_arn;
}

class DeleteUserProfileRequest {
  public DomainId $domain_id;
  public UserProfileName $user_profile_name;
}

class DeleteWorkteamRequest {
  public WorkteamName $workteam_name;
}

class DeleteWorkteamResponse {
  public Success $success;
}

class DeployedImage {
  public Timestamp $resolution_time;
  public Image $resolved_image;
  public Image $specified_image;
}

class DeployedImages {
}

class DescribeAlgorithmInput {
  public ArnOrName $algorithm_name;
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
}

class DescribeAppRequest {
  public AppName $app_name;
  public AppType $app_type;
  public DomainId $domain_id;
  public UserProfileName $user_profile_name;
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
}

class DescribeAutoMLJobRequest {
  public AutoMLJobName $auto_ml_job_name;
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
}

class DescribeCodeRepositoryInput {
  public EntityName $code_repository_name;
}

class DescribeCodeRepositoryOutput {
  public CodeRepositoryArn $code_repository_arn;
  public EntityName $code_repository_name;
  public CreationTime $creation_time;
  public GitConfig $git_config;
  public LastModifiedTime $last_modified_time;
}

class DescribeCompilationJobRequest {
  public EntityName $compilation_job_name;
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
}

class DescribeDomainRequest {
  public DomainId $domain_id;
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
}

class DescribeEndpointConfigInput {
  public EndpointConfigName $endpoint_config_name;
}

class DescribeEndpointConfigOutput {
  public Timestamp $creation_time;
  public DataCaptureConfig $data_capture_config;
  public EndpointConfigArn $endpoint_config_arn;
  public EndpointConfigName $endpoint_config_name;
  public KmsKeyId $kms_key_id;
  public ProductionVariantList $production_variants;
}

class DescribeEndpointInput {
  public EndpointName $endpoint_name;
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
}

class DescribeExperimentRequest {
  public ExperimentEntityName $experiment_name;
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
}

class DescribeFlowDefinitionRequest {
  public FlowDefinitionName $flow_definition_name;
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
}

class DescribeHumanTaskUiRequest {
  public HumanTaskUiName $human_task_ui_name;
}

class DescribeHumanTaskUiResponse {
  public Timestamp $creation_time;
  public HumanTaskUiArn $human_task_ui_arn;
  public HumanTaskUiName $human_task_ui_name;
  public UiTemplateInfo $ui_template;
}

class DescribeHyperParameterTuningJobRequest {
  public HyperParameterTuningJobName $hyper_parameter_tuning_job_name;
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
}

class DescribeLabelingJobRequest {
  public LabelingJobName $labeling_job_name;
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
}

class DescribeModelInput {
  public ModelName $model_name;
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
}

class DescribeModelPackageInput {
  public ArnOrName $model_package_name;
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
}

class DescribeMonitoringScheduleRequest {
  public MonitoringScheduleName $monitoring_schedule_name;
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
}

class DescribeNotebookInstanceInput {
  public NotebookInstanceName $notebook_instance_name;
}

class DescribeNotebookInstanceLifecycleConfigInput {
  public NotebookInstanceLifecycleConfigName $notebook_instance_lifecycle_config_name;
}

class DescribeNotebookInstanceLifecycleConfigOutput {
  public CreationTime $creation_time;
  public LastModifiedTime $last_modified_time;
  public NotebookInstanceLifecycleConfigArn $notebook_instance_lifecycle_config_arn;
  public NotebookInstanceLifecycleConfigName $notebook_instance_lifecycle_config_name;
  public NotebookInstanceLifecycleConfigList $on_create;
  public NotebookInstanceLifecycleConfigList $on_start;
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
}

class DescribeProcessingJobRequest {
  public ProcessingJobName $processing_job_name;
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
}

class DescribeSubscribedWorkteamRequest {
  public WorkteamArn $workteam_arn;
}

class DescribeSubscribedWorkteamResponse {
  public SubscribedWorkteam $subscribed_workteam;
}

class DescribeTrainingJobRequest {
  public TrainingJobName $training_job_name;
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
}

class DescribeTransformJobRequest {
  public TransformJobName $transform_job_name;
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
}

class DescribeTrialComponentRequest {
  public ExperimentEntityName $trial_component_name;
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
}

class DescribeTrialRequest {
  public ExperimentEntityName $trial_name;
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
}

class DescribeUserProfileRequest {
  public DomainId $domain_id;
  public UserProfileName $user_profile_name;
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
}

class DescribeWorkforceRequest {
  public WorkforceName $workforce_name;
}

class DescribeWorkforceResponse {
  public Workforce $workforce;
}

class DescribeWorkteamRequest {
  public WorkteamName $workteam_name;
}

class DescribeWorkteamResponse {
  public Workteam $workteam;
}

class DesiredWeightAndCapacity {
  public TaskCount $desired_instance_count;
  public VariantWeight $desired_weight;
  public VariantName $variant_name;
}

class DesiredWeightAndCapacityList {
}

class DestinationS3Uri {
}

class DetailedAlgorithmStatus {
}

class DetailedModelPackageStatus {
}

class DirectInternetAccess {
}

class DirectoryPath {
}

class DisassociateAdditionalCodeRepositories {
}

class DisassociateDefaultCodeRepository {
}

class DisassociateNotebookInstanceAcceleratorTypes {
}

class DisassociateNotebookInstanceLifecycleConfig {
}

class DisassociateTrialComponentRequest {
  public ExperimentEntityName $trial_component_name;
  public ExperimentEntityName $trial_name;
}

class DisassociateTrialComponentResponse {
  public TrialArn $trial_arn;
  public TrialComponentArn $trial_component_arn;
}

class Dollars {
}

class DomainArn {
}

class DomainDetails {
  public CreationTime $creation_time;
  public DomainArn $domain_arn;
  public DomainId $domain_id;
  public DomainName $domain_name;
  public LastModifiedTime $last_modified_time;
  public DomainStatus $status;
  public String1024 $url;
}

class DomainId {
}

class DomainList {
}

class DomainName {
}

class DomainStatus {
}

class DoubleParameterValue {
}

class EfsUid {
}

class EnableCapture {
}

class EndpointArn {
}

class EndpointConfigArn {
}

class EndpointConfigName {
}

class EndpointConfigNameContains {
}

class EndpointConfigSortKey {
}

class EndpointConfigSummary {
  public Timestamp $creation_time;
  public EndpointConfigArn $endpoint_config_arn;
  public EndpointConfigName $endpoint_config_name;
}

class EndpointConfigSummaryList {
}

class EndpointInput {
  public EndpointName $endpoint_name;
  public ProcessingLocalPath $local_path;
  public ProcessingS3DataDistributionType $s_3_data_distribution_type;
  public ProcessingS3InputMode $s_3_input_mode;
}

class EndpointName {
}

class EndpointNameContains {
}

class EndpointSortKey {
}

class EndpointStatus {
}

class EndpointSummary {
  public Timestamp $creation_time;
  public EndpointArn $endpoint_arn;
  public EndpointName $endpoint_name;
  public EndpointStatus $endpoint_status;
  public Timestamp $last_modified_time;
}

class EndpointSummaryList {
}

class EntityDescription {
}

class EntityName {
}

class EnvironmentKey {
}

class EnvironmentMap {
}

class EnvironmentValue {
}

class ExecutionStatus {
}

class ExitMessage {
}

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
}

class ExperimentArn {
}

class ExperimentConfig {
  public ExperimentEntityName $experiment_name;
  public ExperimentEntityName $trial_component_display_name;
  public ExperimentEntityName $trial_name;
}

class ExperimentDescription {
}

class ExperimentEntityName {
}

class ExperimentSource {
  public ExperimentSourceArn $source_arn;
  public SourceType $source_type;
}

class ExperimentSourceArn {
}

class ExperimentSummaries {
}

class ExperimentSummary {
  public Timestamp $creation_time;
  public ExperimentEntityName $display_name;
  public ExperimentArn $experiment_arn;
  public ExperimentEntityName $experiment_name;
  public ExperimentSource $experiment_source;
  public Timestamp $last_modified_time;
}

class FailureReason {
}

class FileSystemAccessMode {
}

class FileSystemDataSource {
  public DirectoryPath $directory_path;
  public FileSystemAccessMode $file_system_access_mode;
  public FileSystemId $file_system_id;
  public FileSystemType $file_system_type;
}

class FileSystemId {
}

class FileSystemType {
}

class Filter {
  public ResourcePropertyName $name;
  public Operator $operator;
  public FilterValue $value;
}

class FilterList {
}

class FilterValue {
}

class FinalAutoMLJobObjectiveMetric {
  public AutoMLMetricEnum $metric_name;
  public AutoMLJobObjectiveType $type;
  public MetricValue $value;
}

class FinalHyperParameterTuningJobObjectiveMetric {
  public MetricName $metric_name;
  public HyperParameterTuningJobObjectiveType $type;
  public MetricValue $value;
}

class FinalMetricDataList {
}

class Float {
}

class FlowDefinitionArn {
}

class FlowDefinitionName {
}

class FlowDefinitionOutputConfig {
  public KmsKeyId $kms_key_id;
  public S3Uri $s_3_output_path;
}

class FlowDefinitionStatus {
}

class FlowDefinitionSummaries {
}

class FlowDefinitionSummary {
  public Timestamp $creation_time;
  public FailureReason $failure_reason;
  public FlowDefinitionArn $flow_definition_arn;
  public FlowDefinitionName $flow_definition_name;
  public FlowDefinitionStatus $flow_definition_status;
}

class FlowDefinitionTaskAvailabilityLifetimeInSeconds {
}

class FlowDefinitionTaskCount {
}

class FlowDefinitionTaskDescription {
}

class FlowDefinitionTaskKeyword {
}

class FlowDefinitionTaskKeywords {
}

class FlowDefinitionTaskTimeLimitInSeconds {
}

class FlowDefinitionTaskTitle {
}

class Framework {
}

class GenerateCandidateDefinitionsOnly {
}

class GetSearchSuggestionsRequest {
  public ResourceType $resource;
  public SuggestionQuery $suggestion_query;
}

class GetSearchSuggestionsResponse {
  public PropertyNameSuggestionList $property_name_suggestions;
}

class GitConfig {
  public Branch $branch;
  public GitConfigUrl $repository_url;
  public SecretArn $secret_arn;
}

class GitConfigForUpdate {
  public SecretArn $secret_arn;
}

class GitConfigUrl {
}

class HookParameters {
}

class HumanLoopActivationConditions {
}

class HumanLoopActivationConditionsConfig {
  public HumanLoopActivationConditions $human_loop_activation_conditions;
}

class HumanLoopActivationConfig {
  public HumanLoopActivationConditionsConfig $human_loop_activation_conditions_config;
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
}

class HumanLoopRequestSource {
  public AwsManagedHumanLoopRequestSource $aws_managed_human_loop_request_source;
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
}

class HumanTaskUiArn {
}

class HumanTaskUiName {
}

class HumanTaskUiSummaries {
}

class HumanTaskUiSummary {
  public Timestamp $creation_time;
  public HumanTaskUiArn $human_task_ui_arn;
  public HumanTaskUiName $human_task_ui_name;
}

class HyperParameterAlgorithmSpecification {
  public ArnOrName $algorithm_name;
  public MetricDefinitionList $metric_definitions;
  public AlgorithmImage $training_image;
  public TrainingInputMode $training_input_mode;
}

class HyperParameterScalingType {
}

class HyperParameterSpecification {
  public ParameterValue $default_value;
  public EntityDescription $description;
  public boolean $is_required;
  public boolean $is_tunable;
  public ParameterName $name;
  public ParameterRange $range;
  public ParameterType $type;
}

class HyperParameterSpecifications {
}

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
}

class HyperParameterTrainingJobDefinitionName {
}

class HyperParameterTrainingJobDefinitions {
}

class HyperParameterTrainingJobSummaries {
}

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
}

class HyperParameterTuningJobArn {
}

class HyperParameterTuningJobConfig {
  public HyperParameterTuningJobObjective $hyper_parameter_tuning_job_objective;
  public ParameterRanges $parameter_ranges;
  public ResourceLimits $resource_limits;
  public HyperParameterTuningJobStrategyType $strategy;
  public TrainingJobEarlyStoppingType $training_job_early_stopping_type;
  public TuningJobCompletionCriteria $tuning_job_completion_criteria;
}

class HyperParameterTuningJobName {
}

class HyperParameterTuningJobObjective {
  public MetricName $metric_name;
  public HyperParameterTuningJobObjectiveType $type;
}

class HyperParameterTuningJobObjectiveType {
}

class HyperParameterTuningJobObjectives {
}

class HyperParameterTuningJobSortByOptions {
}

class HyperParameterTuningJobStatus {
}

class HyperParameterTuningJobStrategyType {
}

class HyperParameterTuningJobSummaries {
}

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
}

class HyperParameterTuningJobWarmStartConfig {
  public ParentHyperParameterTuningJobs $parent_hyper_parameter_tuning_jobs;
  public HyperParameterTuningJobWarmStartType $warm_start_type;
}

class HyperParameterTuningJobWarmStartType {
}

class HyperParameters {
}

class Image {
}

class ImageDigest {
}

class ImageUri {
}

class InferenceSpecification {
  public ModelPackageContainerDefinitionList $containers;
  public ContentTypes $supported_content_types;
  public RealtimeInferenceInstanceTypes $supported_realtime_inference_instance_types;
  public ResponseMIMETypes $supported_response_mime_types;
  public TransformInstanceTypes $supported_transform_instance_types;
}

class InputConfig {
  public DataInputConfig $data_input_config;
  public Framework $framework;
  public S3Uri $s_3_uri;
}

class InputDataConfig {
}

class InputModes {
}

class InstanceType {
}

class IntegerParameterRange {
  public ParameterValue $max_value;
  public ParameterValue $min_value;
  public ParameterKey $name;
  public HyperParameterScalingType $scaling_type;
}

class IntegerParameterRangeSpecification {
  public ParameterValue $max_value;
  public ParameterValue $min_value;
}

class IntegerParameterRanges {
}

class JobReferenceCode {
}

class JobReferenceCodeContains {
}

class JoinSource {
}

class JsonContentType {
}

class JsonContentTypes {
}

class JsonPath {
}

class JupyterServerAppSettings {
  public ResourceSpec $default_resource_spec;
}

class KernelGatewayAppSettings {
  public ResourceSpec $default_resource_spec;
}

class KmsKeyId {
}

class LabelAttributeName {
}

class LabelCounter {
}

class LabelCounters {
  public LabelCounter $failed_non_retryable_error;
  public LabelCounter $human_labeled;
  public LabelCounter $machine_labeled;
  public LabelCounter $total_labeled;
  public LabelCounter $unlabeled;
}

class LabelCountersForWorkteam {
  public LabelCounter $human_labeled;
  public LabelCounter $pending_human;
  public LabelCounter $total;
}

class LabelingJobAlgorithmSpecificationArn {
}

class LabelingJobAlgorithmsConfig {
  public ModelArn $initial_active_learning_model_arn;
  public LabelingJobAlgorithmSpecificationArn $labeling_job_algorithm_specification_arn;
  public LabelingJobResourceConfig $labeling_job_resource_config;
}

class LabelingJobArn {
}

class LabelingJobDataAttributes {
  public ContentClassifiers $content_classifiers;
}

class LabelingJobDataSource {
  public LabelingJobS3DataSource $s_3_data_source;
}

class LabelingJobForWorkteamSummary {
  public Timestamp $creation_time;
  public JobReferenceCode $job_reference_code;
  public LabelCountersForWorkteam $label_counters;
  public LabelingJobName $labeling_job_name;
  public NumberOfHumanWorkersPerDataObject $number_of_human_workers_per_data_object;
  public AccountId $work_requester_account_id;
}

class LabelingJobForWorkteamSummaryList {
}

class LabelingJobInputConfig {
  public LabelingJobDataAttributes $data_attributes;
  public LabelingJobDataSource $data_source;
}

class LabelingJobName {
}

class LabelingJobOutput {
  public ModelArn $final_active_learning_model_arn;
  public S3Uri $output_dataset_s_3_uri;
}

class LabelingJobOutputConfig {
  public KmsKeyId $kms_key_id;
  public S3Uri $s_3_output_path;
}

class LabelingJobResourceConfig {
  public KmsKeyId $volume_kms_key_id;
}

class LabelingJobS3DataSource {
  public S3Uri $manifest_s_3_uri;
}

class LabelingJobStatus {
}

class LabelingJobStoppingConditions {
  public MaxHumanLabeledObjectCount $max_human_labeled_object_count;
  public MaxPercentageOfInputDatasetLabeled $max_percentage_of_input_dataset_labeled;
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
}

class LabelingJobSummaryList {
}

class LambdaFunctionArn {
}

class LastModifiedTime {
}

class ListAlgorithmsInput {
  public CreationTime $creation_time_after;
  public CreationTime $creation_time_before;
  public MaxResults $max_results;
  public NameContains $name_contains;
  public NextToken $next_token;
  public AlgorithmSortBy $sort_by;
  public SortOrder $sort_order;
}

class ListAlgorithmsOutput {
  public AlgorithmSummaryList $algorithm_summary_list;
  public NextToken $next_token;
}

class ListAppsRequest {
  public DomainId $domain_id_equals;
  public MaxResults $max_results;
  public NextToken $next_token;
  public AppSortKey $sort_by;
  public SortOrder $sort_order;
  public UserProfileName $user_profile_name_equals;
}

class ListAppsResponse {
  public AppList $apps;
  public NextToken $next_token;
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
}

class ListAutoMLJobsResponse {
  public AutoMLJobSummaries $auto_ml_job_summaries;
  public NextToken $next_token;
}

class ListCandidatesForAutoMLJobRequest {
  public AutoMLJobName $auto_ml_job_name;
  public CandidateName $candidate_name_equals;
  public AutoMLMaxResults $max_results;
  public NextToken $next_token;
  public CandidateSortBy $sort_by;
  public AutoMLSortOrder $sort_order;
  public CandidateStatus $status_equals;
}

class ListCandidatesForAutoMLJobResponse {
  public AutoMLCandidates $candidates;
  public NextToken $next_token;
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
}

class ListCodeRepositoriesOutput {
  public CodeRepositorySummaryList $code_repository_summary_list;
  public NextToken $next_token;
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
}

class ListCompilationJobsResponse {
  public CompilationJobSummaries $compilation_job_summaries;
  public NextToken $next_token;
}

class ListCompilationJobsSortBy {
}

class ListDomainsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDomainsResponse {
  public DomainList $domains;
  public NextToken $next_token;
}

class ListEndpointConfigsInput {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public MaxResults $max_results;
  public EndpointConfigNameContains $name_contains;
  public PaginationToken $next_token;
  public EndpointConfigSortKey $sort_by;
  public OrderKey $sort_order;
}

class ListEndpointConfigsOutput {
  public EndpointConfigSummaryList $endpoint_configs;
  public PaginationToken $next_token;
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
}

class ListEndpointsOutput {
  public EndpointSummaryList $endpoints;
  public PaginationToken $next_token;
}

class ListExperimentsRequest {
  public Timestamp $created_after;
  public Timestamp $created_before;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortExperimentsBy $sort_by;
  public SortOrder $sort_order;
}

class ListExperimentsResponse {
  public ExperimentSummaries $experiment_summaries;
  public NextToken $next_token;
}

class ListFlowDefinitionsRequest {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortOrder $sort_order;
}

class ListFlowDefinitionsResponse {
  public FlowDefinitionSummaries $flow_definition_summaries;
  public NextToken $next_token;
}

class ListHumanTaskUisRequest {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortOrder $sort_order;
}

class ListHumanTaskUisResponse {
  public HumanTaskUiSummaries $human_task_ui_summaries;
  public NextToken $next_token;
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
}

class ListHyperParameterTuningJobsResponse {
  public HyperParameterTuningJobSummaries $hyper_parameter_tuning_job_summaries;
  public NextToken $next_token;
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
}

class ListLabelingJobsForWorkteamResponse {
  public LabelingJobForWorkteamSummaryList $labeling_job_summary_list;
  public NextToken $next_token;
}

class ListLabelingJobsForWorkteamSortByOptions {
}

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
}

class ListLabelingJobsResponse {
  public LabelingJobSummaryList $labeling_job_summary_list;
  public NextToken $next_token;
}

class ListModelPackagesInput {
  public CreationTime $creation_time_after;
  public CreationTime $creation_time_before;
  public MaxResults $max_results;
  public NameContains $name_contains;
  public NextToken $next_token;
  public ModelPackageSortBy $sort_by;
  public SortOrder $sort_order;
}

class ListModelPackagesOutput {
  public ModelPackageSummaryList $model_package_summary_list;
  public NextToken $next_token;
}

class ListModelsInput {
  public Timestamp $creation_time_after;
  public Timestamp $creation_time_before;
  public MaxResults $max_results;
  public ModelNameContains $name_contains;
  public PaginationToken $next_token;
  public ModelSortKey $sort_by;
  public OrderKey $sort_order;
}

class ListModelsOutput {
  public ModelSummaryList $models;
  public PaginationToken $next_token;
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
}

class ListMonitoringExecutionsResponse {
  public MonitoringExecutionSummaryList $monitoring_execution_summaries;
  public NextToken $next_token;
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
}

class ListMonitoringSchedulesResponse {
  public MonitoringScheduleSummaryList $monitoring_schedule_summaries;
  public NextToken $next_token;
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
}

class ListNotebookInstanceLifecycleConfigsOutput {
  public NextToken $next_token;
  public NotebookInstanceLifecycleConfigSummaryList $notebook_instance_lifecycle_configs;
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
}

class ListNotebookInstancesOutput {
  public NextToken $next_token;
  public NotebookInstanceSummaryList $notebook_instances;
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
}

class ListProcessingJobsResponse {
  public NextToken $next_token;
  public ProcessingJobSummaries $processing_job_summaries;
}

class ListSubscribedWorkteamsRequest {
  public MaxResults $max_results;
  public WorkteamName $name_contains;
  public NextToken $next_token;
}

class ListSubscribedWorkteamsResponse {
  public NextToken $next_token;
  public SubscribedWorkteams $subscribed_workteams;
}

class ListTagsInput {
  public ListTagsMaxResults $max_results;
  public NextToken $next_token;
  public ResourceArn $resource_arn;
}

class ListTagsMaxResults {
}

class ListTagsOutput {
  public NextToken $next_token;
  public TagList $tags;
}

class ListTrainingJobsForHyperParameterTuningJobRequest {
  public HyperParameterTuningJobName $hyper_parameter_tuning_job_name;
  public MaxResults $max_results;
  public NextToken $next_token;
  public TrainingJobSortByOptions $sort_by;
  public SortOrder $sort_order;
  public TrainingJobStatus $status_equals;
}

class ListTrainingJobsForHyperParameterTuningJobResponse {
  public NextToken $next_token;
  public HyperParameterTrainingJobSummaries $training_job_summaries;
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
}

class ListTrainingJobsResponse {
  public NextToken $next_token;
  public TrainingJobSummaries $training_job_summaries;
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
}

class ListTransformJobsResponse {
  public NextToken $next_token;
  public TransformJobSummaries $transform_job_summaries;
}

class ListTrialComponentKey256 {
}

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
}

class ListTrialComponentsResponse {
  public NextToken $next_token;
  public TrialComponentSummaries $trial_component_summaries;
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
}

class ListTrialsResponse {
  public NextToken $next_token;
  public TrialSummaries $trial_summaries;
}

class ListUserProfilesRequest {
  public DomainId $domain_id_equals;
  public MaxResults $max_results;
  public NextToken $next_token;
  public UserProfileSortKey $sort_by;
  public SortOrder $sort_order;
  public UserProfileName $user_profile_name_contains;
}

class ListUserProfilesResponse {
  public NextToken $next_token;
  public UserProfileList $user_profiles;
}

class ListWorkteamsRequest {
  public MaxResults $max_results;
  public WorkteamName $name_contains;
  public NextToken $next_token;
  public ListWorkteamsSortByOptions $sort_by;
  public SortOrder $sort_order;
}

class ListWorkteamsResponse {
  public NextToken $next_token;
  public Workteams $workteams;
}

class ListWorkteamsSortByOptions {
}

class MaxAutoMLJobRuntimeInSeconds {
}

class MaxCandidates {
}

class MaxConcurrentTaskCount {
}

class MaxConcurrentTransforms {
}

class MaxHumanLabeledObjectCount {
}

class MaxNumberOfTrainingJobs {
}

class MaxParallelTrainingJobs {
}

class MaxPayloadInMB {
}

class MaxPercentageOfInputDatasetLabeled {
}

class MaxResults {
}

class MaxRuntimeInSeconds {
}

class MaxRuntimePerTrainingJobInSeconds {
}

class MaxWaitTimeInSeconds {
}

class MediaType {
}

class MemberDefinition {
  public CognitoMemberDefinition $cognito_member_definition;
}

class MemberDefinitions {
}

class MetricData {
  public MetricName $metric_name;
  public Timestamp $timestamp;
  public Float $value;
}

class MetricDefinition {
  public MetricName $name;
  public MetricRegex $regex;
}

class MetricDefinitionList {
}

class MetricName {
}

class MetricRegex {
}

class MetricValue {
}

class ModelArn {
}

class ModelArtifacts {
  public S3Uri $s_3_model_artifacts;
}

class ModelName {
}

class ModelNameContains {
}

class ModelPackageArn {
}

class ModelPackageContainerDefinition {
  public ContainerHostname $container_hostname;
  public Image $image;
  public ImageDigest $image_digest;
  public Url $model_data_url;
  public ProductId $product_id;
}

class ModelPackageContainerDefinitionList {
}

class ModelPackageSortBy {
}

class ModelPackageStatus {
}

class ModelPackageStatusDetails {
  public ModelPackageStatusItemList $image_scan_statuses;
  public ModelPackageStatusItemList $validation_statuses;
}

class ModelPackageStatusItem {
  public string $failure_reason;
  public EntityName $name;
  public DetailedModelPackageStatus $status;
}

class ModelPackageStatusItemList {
}

class ModelPackageSummary {
  public CreationTime $creation_time;
  public ModelPackageArn $model_package_arn;
  public EntityDescription $model_package_description;
  public EntityName $model_package_name;
  public ModelPackageStatus $model_package_status;
}

class ModelPackageSummaryList {
}

class ModelPackageValidationProfile {
  public EntityName $profile_name;
  public TransformJobDefinition $transform_job_definition;
}

class ModelPackageValidationProfiles {
}

class ModelPackageValidationSpecification {
  public ModelPackageValidationProfiles $validation_profiles;
  public RoleArn $validation_role;
}

class ModelSortKey {
}

class ModelSummary {
  public Timestamp $creation_time;
  public ModelArn $model_arn;
  public ModelName $model_name;
}

class ModelSummaryList {
}

class MonitoringAppSpecification {
  public MonitoringContainerArguments $container_arguments;
  public ContainerEntrypoint $container_entrypoint;
  public ImageUri $image_uri;
  public S3Uri $post_analytics_processor_source_uri;
  public S3Uri $record_preprocessor_source_uri;
}

class MonitoringBaselineConfig {
  public MonitoringConstraintsResource $constraints_resource;
  public MonitoringStatisticsResource $statistics_resource;
}

class MonitoringClusterConfig {
  public ProcessingInstanceCount $instance_count;
  public ProcessingInstanceType $instance_type;
  public KmsKeyId $volume_kms_key_id;
  public ProcessingVolumeSizeInGB $volume_size_in_gb;
}

class MonitoringConstraintsResource {
  public S3Uri $s_3_uri;
}

class MonitoringContainerArguments {
}

class MonitoringEnvironmentMap {
}

class MonitoringExecutionSortKey {
}

class MonitoringExecutionSummary {
  public Timestamp $creation_time;
  public EndpointName $endpoint_name;
  public FailureReason $failure_reason;
  public Timestamp $last_modified_time;
  public ExecutionStatus $monitoring_execution_status;
  public MonitoringScheduleName $monitoring_schedule_name;
  public ProcessingJobArn $processing_job_arn;
  public Timestamp $scheduled_time;
}

class MonitoringExecutionSummaryList {
}

class MonitoringInput {
  public EndpointInput $endpoint_input;
}

class MonitoringInputs {
}

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
}

class MonitoringMaxRuntimeInSeconds {
}

class MonitoringOutput {
  public MonitoringS3Output $s_3_output;
}

class MonitoringOutputConfig {
  public KmsKeyId $kms_key_id;
  public MonitoringOutputs $monitoring_outputs;
}

class MonitoringOutputs {
}

class MonitoringResources {
  public MonitoringClusterConfig $cluster_config;
}

class MonitoringS3Output {
  public ProcessingLocalPath $local_path;
  public ProcessingS3UploadMode $s_3_upload_mode;
  public MonitoringS3Uri $s_3_uri;
}

class MonitoringS3Uri {
}

class MonitoringScheduleArn {
}

class MonitoringScheduleConfig {
  public MonitoringJobDefinition $monitoring_job_definition;
  public ScheduleConfig $schedule_config;
}

class MonitoringScheduleName {
}

class MonitoringScheduleSortKey {
}

class MonitoringScheduleSummary {
  public Timestamp $creation_time;
  public EndpointName $endpoint_name;
  public Timestamp $last_modified_time;
  public MonitoringScheduleArn $monitoring_schedule_arn;
  public MonitoringScheduleName $monitoring_schedule_name;
  public ScheduleStatus $monitoring_schedule_status;
}

class MonitoringScheduleSummaryList {
}

class MonitoringStatisticsResource {
  public S3Uri $s_3_uri;
}

class MonitoringStoppingCondition {
  public MonitoringMaxRuntimeInSeconds $max_runtime_in_seconds;
}

class NameContains {
}

class NestedFilters {
  public FilterList $filters;
  public ResourcePropertyName $nested_property_name;
}

class NestedFiltersList {
}

class NetworkConfig {
  public boolean $enable_network_isolation;
  public VpcConfig $vpc_config;
}

class NetworkInterfaceId {
}

class NextToken {
}

class NotebookInstanceAcceleratorType {
}

class NotebookInstanceAcceleratorTypes {
}

class NotebookInstanceArn {
}

class NotebookInstanceLifecycleConfigArn {
}

class NotebookInstanceLifecycleConfigContent {
}

class NotebookInstanceLifecycleConfigList {
}

class NotebookInstanceLifecycleConfigName {
}

class NotebookInstanceLifecycleConfigNameContains {
}

class NotebookInstanceLifecycleConfigSortKey {
}

class NotebookInstanceLifecycleConfigSortOrder {
}

class NotebookInstanceLifecycleConfigSummary {
  public CreationTime $creation_time;
  public LastModifiedTime $last_modified_time;
  public NotebookInstanceLifecycleConfigArn $notebook_instance_lifecycle_config_arn;
  public NotebookInstanceLifecycleConfigName $notebook_instance_lifecycle_config_name;
}

class NotebookInstanceLifecycleConfigSummaryList {
}

class NotebookInstanceLifecycleHook {
  public NotebookInstanceLifecycleConfigContent $content;
}

class NotebookInstanceName {
}

class NotebookInstanceNameContains {
}

class NotebookInstanceSortKey {
}

class NotebookInstanceSortOrder {
}

class NotebookInstanceStatus {
}

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
}

class NotebookInstanceSummaryList {
}

class NotebookInstanceUrl {
}

class NotebookInstanceVolumeSizeInGB {
}

class NotebookOutputOption {
}

class NotificationConfiguration {
  public NotificationTopicArn $notification_topic_arn;
}

class NotificationTopicArn {
}

class NumberOfHumanWorkersPerDataObject {
}

class ObjectiveStatus {
}

class ObjectiveStatusCounter {
}

class ObjectiveStatusCounters {
  public ObjectiveStatusCounter $failed;
  public ObjectiveStatusCounter $pending;
  public ObjectiveStatusCounter $succeeded;
}

class Operator {
}

class OptionalDouble {
}

class OptionalInteger {
}

class OptionalVolumeSizeInGB {
}

class OrderKey {
}

class OutputConfig {
  public S3Uri $s_3_output_location;
  public TargetDevice $target_device;
}

class OutputDataConfig {
  public KmsKeyId $kms_key_id;
  public S3Uri $s_3_output_path;
}

class PaginationToken {
}

class ParameterKey {
}

class ParameterName {
}

class ParameterRange {
  public CategoricalParameterRangeSpecification $categorical_parameter_range_specification;
  public ContinuousParameterRangeSpecification $continuous_parameter_range_specification;
  public IntegerParameterRangeSpecification $integer_parameter_range_specification;
}

class ParameterRanges {
  public CategoricalParameterRanges $categorical_parameter_ranges;
  public ContinuousParameterRanges $continuous_parameter_ranges;
  public IntegerParameterRanges $integer_parameter_ranges;
}

class ParameterType {
}

class ParameterValue {
}

class ParameterValues {
}

class Parent {
  public ExperimentEntityName $experiment_name;
  public ExperimentEntityName $trial_name;
}

class ParentHyperParameterTuningJob {
  public HyperParameterTuningJobName $hyper_parameter_tuning_job_name;
}

class ParentHyperParameterTuningJobs {
}

class Parents {
}

class PresignedDomainUrl {
}

class ProblemType {
}

class ProcessingClusterConfig {
  public ProcessingInstanceCount $instance_count;
  public ProcessingInstanceType $instance_type;
  public KmsKeyId $volume_kms_key_id;
  public ProcessingVolumeSizeInGB $volume_size_in_gb;
}

class ProcessingEnvironmentKey {
}

class ProcessingEnvironmentMap {
}

class ProcessingEnvironmentValue {
}

class ProcessingInput {
  public string $input_name;
  public ProcessingS3Input $s_3_input;
}

class ProcessingInputs {
}

class ProcessingInstanceCount {
}

class ProcessingInstanceType {
}

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
}

class ProcessingJobArn {
}

class ProcessingJobName {
}

class ProcessingJobStatus {
}

class ProcessingJobSummaries {
}

class ProcessingJobSummary {
  public Timestamp $creation_time;
  public ExitMessage $exit_message;
  public FailureReason $failure_reason;
  public Timestamp $last_modified_time;
  public Timestamp $processing_end_time;
  public ProcessingJobArn $processing_job_arn;
  public ProcessingJobName $processing_job_name;
  public ProcessingJobStatus $processing_job_status;
}

class ProcessingLocalPath {
}

class ProcessingMaxRuntimeInSeconds {
}

class ProcessingOutput {
  public string $output_name;
  public ProcessingS3Output $s_3_output;
}

class ProcessingOutputConfig {
  public KmsKeyId $kms_key_id;
  public ProcessingOutputs $outputs;
}

class ProcessingOutputs {
}

class ProcessingResources {
  public ProcessingClusterConfig $cluster_config;
}

class ProcessingS3CompressionType {
}

class ProcessingS3DataDistributionType {
}

class ProcessingS3DataType {
}

class ProcessingS3Input {
  public ProcessingLocalPath $local_path;
  public ProcessingS3CompressionType $s_3_compression_type;
  public ProcessingS3DataDistributionType $s_3_data_distribution_type;
  public ProcessingS3DataType $s_3_data_type;
  public ProcessingS3InputMode $s_3_input_mode;
  public S3Uri $s_3_uri;
}

class ProcessingS3InputMode {
}

class ProcessingS3Output {
  public ProcessingLocalPath $local_path;
  public ProcessingS3UploadMode $s_3_upload_mode;
  public S3Uri $s_3_uri;
}

class ProcessingS3UploadMode {
}

class ProcessingStoppingCondition {
  public ProcessingMaxRuntimeInSeconds $max_runtime_in_seconds;
}

class ProcessingVolumeSizeInGB {
}

class ProductId {
}

class ProductListings {
}

class ProductionVariant {
  public ProductionVariantAcceleratorType $accelerator_type;
  public TaskCount $initial_instance_count;
  public VariantWeight $initial_variant_weight;
  public ProductionVariantInstanceType $instance_type;
  public ModelName $model_name;
  public VariantName $variant_name;
}

class ProductionVariantAcceleratorType {
}

class ProductionVariantInstanceType {
}

class ProductionVariantList {
}

class ProductionVariantSummary {
  public TaskCount $current_instance_count;
  public VariantWeight $current_weight;
  public DeployedImages $deployed_images;
  public TaskCount $desired_instance_count;
  public VariantWeight $desired_weight;
  public VariantName $variant_name;
}

class ProductionVariantSummaryList {
}

class PropertyNameHint {
}

class PropertyNameQuery {
  public PropertyNameHint $property_name_hint;
}

class PropertyNameSuggestion {
  public ResourcePropertyName $property_name;
}

class PropertyNameSuggestionList {
}

class PublicWorkforceTaskPrice {
  public USD $amount_in_usd;
}

class RealtimeInferenceInstanceTypes {
}

class RecordWrapper {
}

class RenderUiTemplateRequest {
  public RoleArn $role_arn;
  public RenderableTask $task;
  public UiTemplate $ui_template;
}

class RenderUiTemplateResponse {
  public RenderingErrorList $errors;
  public string $rendered_content;
}

class RenderableTask {
  public TaskInput $input;
}

class RenderingError {
  public string $code;
  public string $message;
}

class RenderingErrorList {
}

class ResolvedAttributes {
  public AutoMLJobObjective $auto_ml_job_objective;
  public AutoMLJobCompletionCriteria $completion_criteria;
  public ProblemType $problem_type;
}

class ResourceArn {
}

class ResourceConfig {
  public TrainingInstanceCount $instance_count;
  public TrainingInstanceType $instance_type;
  public KmsKeyId $volume_kms_key_id;
  public VolumeSizeInGB $volume_size_in_gb;
}

class ResourceId {
}

class ResourceInUse {
  public FailureReason $message;
}

class ResourceLimitExceeded {
  public FailureReason $message;
}

class ResourceLimits {
  public MaxNumberOfTrainingJobs $max_number_of_training_jobs;
  public MaxParallelTrainingJobs $max_parallel_training_jobs;
}

class ResourceNotFound {
  public FailureReason $message;
}

class ResourcePropertyName {
}

class ResourceSpec {
  public AppInstanceType $instance_type;
  public SageMakerImageArn $sage_maker_image_arn;
}

class ResourceType {
}

class ResponseMIMEType {
}

class ResponseMIMETypes {
}

class RetentionPolicy {
  public RetentionType $home_efs_file_system;
}

class RetentionType {
}

class RoleArn {
}

class RootAccess {
}

class RuleConfigurationName {
}

class RuleEvaluationStatus {
}

class RuleParameters {
}

class S3DataDistribution {
}

class S3DataSource {
  public AttributeNames $attribute_names;
  public S3DataDistribution $s_3_data_distribution_type;
  public S3DataType $s_3_data_type;
  public S3Uri $s_3_uri;
}

class S3DataType {
}

class S3Uri {
}

class SageMakerImageArn {
}

class SamplingPercentage {
}

class ScheduleConfig {
  public ScheduleExpression $schedule_expression;
}

class ScheduleExpression {
}

class ScheduleStatus {
}

class SearchExpression {
  public FilterList $filters;
  public NestedFiltersList $nested_filters;
  public BooleanOperator $operator;
  public SearchExpressionList $sub_expressions;
}

class SearchExpressionList {
}

class SearchRecord {
  public Experiment $experiment;
  public TrainingJob $training_job;
  public Trial $trial;
  public TrialComponent $trial_component;
}

class SearchRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceType $resource;
  public SearchExpression $search_expression;
  public ResourcePropertyName $sort_by;
  public SearchSortOrder $sort_order;
}

class SearchResponse {
  public NextToken $next_token;
  public SearchResultsList $results;
}

class SearchResultsList {
}

class SearchSortOrder {
}

class SecondaryStatus {
}

class SecondaryStatusTransition {
  public Timestamp $end_time;
  public Timestamp $start_time;
  public SecondaryStatus $status;
  public StatusMessage $status_message;
}

class SecondaryStatusTransitions {
}

class SecretArn {
}

class SecurityGroupId {
}

class SecurityGroupIds {
}

class Seed {
}

class SessionExpirationDurationInSeconds {
}

class SharingSettings {
  public NotebookOutputOption $notebook_output_option;
  public KmsKeyId $s_3_kms_key_id;
  public S3Uri $s_3_output_path;
}

class ShuffleConfig {
  public Seed $seed;
}

class SingleSignOnUserIdentifier {
}

class SortBy {
}

class SortExperimentsBy {
}

class SortOrder {
}

class SortTrialComponentsBy {
}

class SortTrialsBy {
}

class SourceAlgorithm {
  public ArnOrName $algorithm_name;
  public Url $model_data_url;
}

class SourceAlgorithmList {
}

class SourceAlgorithmSpecification {
  public SourceAlgorithmList $source_algorithms;
}

class SourceIpConfig {
  public Cidrs $cidrs;
}

class SourceType {
}

class SplitType {
}

class StartMonitoringScheduleRequest {
  public MonitoringScheduleName $monitoring_schedule_name;
}

class StartNotebookInstanceInput {
  public NotebookInstanceName $notebook_instance_name;
}

class StatusDetails {
}

class StatusMessage {
}

class StopAutoMLJobRequest {
  public AutoMLJobName $auto_ml_job_name;
}

class StopCompilationJobRequest {
  public EntityName $compilation_job_name;
}

class StopHyperParameterTuningJobRequest {
  public HyperParameterTuningJobName $hyper_parameter_tuning_job_name;
}

class StopLabelingJobRequest {
  public LabelingJobName $labeling_job_name;
}

class StopMonitoringScheduleRequest {
  public MonitoringScheduleName $monitoring_schedule_name;
}

class StopNotebookInstanceInput {
  public NotebookInstanceName $notebook_instance_name;
}

class StopProcessingJobRequest {
  public ProcessingJobName $processing_job_name;
}

class StopTrainingJobRequest {
  public TrainingJobName $training_job_name;
}

class StopTransformJobRequest {
  public TransformJobName $transform_job_name;
}

class StoppingCondition {
  public MaxRuntimeInSeconds $max_runtime_in_seconds;
  public MaxWaitTimeInSeconds $max_wait_time_in_seconds;
}

class String {
}

class String1024 {
}

class String200 {
}

class String256 {
}

class StringParameterValue {
}

class SubnetId {
}

class Subnets {
}

class SubscribedWorkteam {
  public string $listing_id;
  public String200 $marketplace_description;
  public String200 $marketplace_title;
  public string $seller_name;
  public WorkteamArn $workteam_arn;
}

class SubscribedWorkteams {
}

class Success {
}

class SuggestionQuery {
  public PropertyNameQuery $property_name_query;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagValue {
}

class TargetAttributeName {
}

class TargetDevice {
}

class TargetObjectiveMetricValue {
}

class TaskAvailabilityLifetimeInSeconds {
}

class TaskCount {
}

class TaskDescription {
}

class TaskInput {
}

class TaskKeyword {
}

class TaskKeywords {
}

class TaskTimeLimitInSeconds {
}

class TaskTitle {
}

class TemplateContent {
}

class TemplateContentSha256 {
}

class TemplateUrl {
}

class TensorBoardAppSettings {
  public ResourceSpec $default_resource_spec;
}

class TensorBoardOutputConfig {
  public DirectoryPath $local_path;
  public S3Uri $s_3_output_path;
}

class TenthFractionsOfACent {
}

class Timestamp {
}

class TrainingInputMode {
}

class TrainingInstanceCount {
}

class TrainingInstanceType {
}

class TrainingInstanceTypes {
}

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
}

class TrainingJobArn {
}

class TrainingJobDefinition {
  public HyperParameters $hyper_parameters;
  public InputDataConfig $input_data_config;
  public OutputDataConfig $output_data_config;
  public ResourceConfig $resource_config;
  public StoppingCondition $stopping_condition;
  public TrainingInputMode $training_input_mode;
}

class TrainingJobEarlyStoppingType {
}

class TrainingJobName {
}

class TrainingJobSortByOptions {
}

class TrainingJobStatus {
}

class TrainingJobStatusCounter {
}

class TrainingJobStatusCounters {
  public TrainingJobStatusCounter $completed;
  public TrainingJobStatusCounter $in_progress;
  public TrainingJobStatusCounter $non_retryable_error;
  public TrainingJobStatusCounter $retryable_error;
  public TrainingJobStatusCounter $stopped;
}

class TrainingJobSummaries {
}

class TrainingJobSummary {
  public Timestamp $creation_time;
  public Timestamp $last_modified_time;
  public Timestamp $training_end_time;
  public TrainingJobArn $training_job_arn;
  public TrainingJobName $training_job_name;
  public TrainingJobStatus $training_job_status;
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
}

class TrainingTimeInSeconds {
}

class TransformDataSource {
  public TransformS3DataSource $s_3_data_source;
}

class TransformEnvironmentKey {
}

class TransformEnvironmentMap {
}

class TransformEnvironmentValue {
}

class TransformInput {
  public CompressionType $compression_type;
  public ContentType $content_type;
  public TransformDataSource $data_source;
  public SplitType $split_type;
}

class TransformInstanceCount {
}

class TransformInstanceType {
}

class TransformInstanceTypes {
}

class TransformJobArn {
}

class TransformJobDefinition {
  public BatchStrategy $batch_strategy;
  public TransformEnvironmentMap $environment;
  public MaxConcurrentTransforms $max_concurrent_transforms;
  public MaxPayloadInMB $max_payload_in_mb;
  public TransformInput $transform_input;
  public TransformOutput $transform_output;
  public TransformResources $transform_resources;
}

class TransformJobName {
}

class TransformJobStatus {
}

class TransformJobSummaries {
}

class TransformJobSummary {
  public Timestamp $creation_time;
  public FailureReason $failure_reason;
  public Timestamp $last_modified_time;
  public Timestamp $transform_end_time;
  public TransformJobArn $transform_job_arn;
  public TransformJobName $transform_job_name;
  public TransformJobStatus $transform_job_status;
}

class TransformOutput {
  public Accept $accept;
  public AssemblyType $assemble_with;
  public KmsKeyId $kms_key_id;
  public S3Uri $s_3_output_path;
}

class TransformResources {
  public TransformInstanceCount $instance_count;
  public TransformInstanceType $instance_type;
  public KmsKeyId $volume_kms_key_id;
}

class TransformS3DataSource {
  public S3DataType $s_3_data_type;
  public S3Uri $s_3_uri;
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
}

class TrialArn {
}

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
}

class TrialComponentArn {
}

class TrialComponentArtifact {
  public MediaType $media_type;
  public TrialComponentArtifactValue $value;
}

class TrialComponentArtifactValue {
}

class TrialComponentArtifacts {
}

class TrialComponentKey256 {
}

class TrialComponentKey64 {
}

class TrialComponentMetricSummaries {
}

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
}

class TrialComponentParameterValue {
  public DoubleParameterValue $number_value;
  public StringParameterValue $string_value;
}

class TrialComponentParameters {
}

class TrialComponentPrimaryStatus {
}

class TrialComponentSimpleSummaries {
}

class TrialComponentSimpleSummary {
  public UserContext $created_by;
  public Timestamp $creation_time;
  public TrialComponentArn $trial_component_arn;
  public ExperimentEntityName $trial_component_name;
  public TrialComponentSource $trial_component_source;
}

class TrialComponentSource {
  public TrialComponentSourceArn $source_arn;
  public SourceType $source_type;
}

class TrialComponentSourceArn {
}

class TrialComponentSourceDetail {
  public ProcessingJob $processing_job;
  public TrialComponentSourceArn $source_arn;
  public TrainingJob $training_job;
}

class TrialComponentStatus {
  public TrialComponentStatusMessage $message;
  public TrialComponentPrimaryStatus $primary_status;
}

class TrialComponentStatusMessage {
}

class TrialComponentSummaries {
}

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
}

class TrialSource {
  public TrialSourceArn $source_arn;
  public SourceType $source_type;
}

class TrialSourceArn {
}

class TrialSummaries {
}

class TrialSummary {
  public Timestamp $creation_time;
  public ExperimentEntityName $display_name;
  public Timestamp $last_modified_time;
  public TrialArn $trial_arn;
  public ExperimentEntityName $trial_name;
  public TrialSource $trial_source;
}

class TuningJobCompletionCriteria {
  public TargetObjectiveMetricValue $target_objective_metric_value;
}

class USD {
  public Cents $cents;
  public Dollars $dollars;
  public TenthFractionsOfACent $tenth_fractions_of_a_cent;
}

class UiConfig {
  public S3Uri $ui_template_s_3_uri;
}

class UiTemplate {
  public TemplateContent $content;
}

class UiTemplateInfo {
  public TemplateContentSha256 $content_sha_256;
  public TemplateUrl $url;
}

class UpdateCodeRepositoryInput {
  public EntityName $code_repository_name;
  public GitConfigForUpdate $git_config;
}

class UpdateCodeRepositoryOutput {
  public CodeRepositoryArn $code_repository_arn;
}

class UpdateDomainRequest {
  public UserSettings $default_user_settings;
  public DomainId $domain_id;
}

class UpdateDomainResponse {
  public DomainArn $domain_arn;
}

class UpdateEndpointInput {
  public EndpointConfigName $endpoint_config_name;
  public EndpointName $endpoint_name;
  public VariantPropertyList $exclude_retained_variant_properties;
  public boolean $retain_all_variant_properties;
}

class UpdateEndpointOutput {
  public EndpointArn $endpoint_arn;
}

class UpdateEndpointWeightsAndCapacitiesInput {
  public DesiredWeightAndCapacityList $desired_weights_and_capacities;
  public EndpointName $endpoint_name;
}

class UpdateEndpointWeightsAndCapacitiesOutput {
  public EndpointArn $endpoint_arn;
}

class UpdateExperimentRequest {
  public ExperimentDescription $description;
  public ExperimentEntityName $display_name;
  public ExperimentEntityName $experiment_name;
}

class UpdateExperimentResponse {
  public ExperimentArn $experiment_arn;
}

class UpdateMonitoringScheduleRequest {
  public MonitoringScheduleConfig $monitoring_schedule_config;
  public MonitoringScheduleName $monitoring_schedule_name;
}

class UpdateMonitoringScheduleResponse {
  public MonitoringScheduleArn $monitoring_schedule_arn;
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
}

class UpdateNotebookInstanceLifecycleConfigInput {
  public NotebookInstanceLifecycleConfigName $notebook_instance_lifecycle_config_name;
  public NotebookInstanceLifecycleConfigList $on_create;
  public NotebookInstanceLifecycleConfigList $on_start;
}

class UpdateNotebookInstanceLifecycleConfigOutput {
}

class UpdateNotebookInstanceOutput {
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
}

class UpdateTrialComponentResponse {
  public TrialComponentArn $trial_component_arn;
}

class UpdateTrialRequest {
  public ExperimentEntityName $display_name;
  public ExperimentEntityName $trial_name;
}

class UpdateTrialResponse {
  public TrialArn $trial_arn;
}

class UpdateUserProfileRequest {
  public DomainId $domain_id;
  public UserProfileName $user_profile_name;
  public UserSettings $user_settings;
}

class UpdateUserProfileResponse {
  public UserProfileArn $user_profile_arn;
}

class UpdateWorkforceRequest {
  public SourceIpConfig $source_ip_config;
  public WorkforceName $workforce_name;
}

class UpdateWorkforceResponse {
  public Workforce $workforce;
}

class UpdateWorkteamRequest {
  public String200 $description;
  public MemberDefinitions $member_definitions;
  public NotificationConfiguration $notification_configuration;
  public WorkteamName $workteam_name;
}

class UpdateWorkteamResponse {
  public Workteam $workteam;
}

class Url {
}

class UserContext {
  public string $domain_id;
  public string $user_profile_arn;
  public string $user_profile_name;
}

class UserProfileArn {
}

class UserProfileDetails {
  public CreationTime $creation_time;
  public DomainId $domain_id;
  public LastModifiedTime $last_modified_time;
  public UserProfileStatus $status;
  public UserProfileName $user_profile_name;
}

class UserProfileList {
}

class UserProfileName {
}

class UserProfileSortKey {
}

class UserProfileStatus {
}

class UserSettings {
  public RoleArn $execution_role;
  public JupyterServerAppSettings $jupyter_server_app_settings;
  public KernelGatewayAppSettings $kernel_gateway_app_settings;
  public SecurityGroupIds $security_groups;
  public SharingSettings $sharing_settings;
  public TensorBoardAppSettings $tensor_board_app_settings;
}

class VariantName {
}

class VariantProperty {
  public VariantPropertyType $variant_property_type;
}

class VariantPropertyList {
}

class VariantPropertyType {
}

class VariantWeight {
}

class VolumeSizeInGB {
}

class VpcConfig {
  public VpcSecurityGroupIds $security_group_ids;
  public Subnets $subnets;
}

class VpcId {
}

class VpcSecurityGroupIds {
}

class Workforce {
  public Timestamp $last_updated_date;
  public SourceIpConfig $source_ip_config;
  public WorkforceArn $workforce_arn;
  public WorkforceName $workforce_name;
}

class WorkforceArn {
}

class WorkforceName {
}

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
}

class WorkteamArn {
}

class WorkteamName {
}

class Workteams {
}


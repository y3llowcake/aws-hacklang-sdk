<?hh // strict
namespace slack\aws\codepipeline;

interface CodePipeline {
  public function AcknowledgeJob(AcknowledgeJobInput): Awaitable<Errors\Result<AcknowledgeJobOutput>>;
  public function AcknowledgeThirdPartyJob(AcknowledgeThirdPartyJobInput): Awaitable<Errors\Result<AcknowledgeThirdPartyJobOutput>>;
  public function CreateCustomActionType(CreateCustomActionTypeInput): Awaitable<Errors\Result<CreateCustomActionTypeOutput>>;
  public function CreatePipeline(CreatePipelineInput): Awaitable<Errors\Result<CreatePipelineOutput>>;
  public function DeleteCustomActionType(DeleteCustomActionTypeInput): Awaitable<Errors\Error>;
  public function DeletePipeline(DeletePipelineInput): Awaitable<Errors\Error>;
  public function DeleteWebhook(DeleteWebhookInput): Awaitable<Errors\Result<DeleteWebhookOutput>>;
  public function DeregisterWebhookWithThirdParty(DeregisterWebhookWithThirdPartyInput): Awaitable<Errors\Result<DeregisterWebhookWithThirdPartyOutput>>;
  public function DisableStageTransition(DisableStageTransitionInput): Awaitable<Errors\Error>;
  public function EnableStageTransition(EnableStageTransitionInput): Awaitable<Errors\Error>;
  public function GetJobDetails(GetJobDetailsInput): Awaitable<Errors\Result<GetJobDetailsOutput>>;
  public function GetPipeline(GetPipelineInput): Awaitable<Errors\Result<GetPipelineOutput>>;
  public function GetPipelineExecution(GetPipelineExecutionInput): Awaitable<Errors\Result<GetPipelineExecutionOutput>>;
  public function GetPipelineState(GetPipelineStateInput): Awaitable<Errors\Result<GetPipelineStateOutput>>;
  public function GetThirdPartyJobDetails(GetThirdPartyJobDetailsInput): Awaitable<Errors\Result<GetThirdPartyJobDetailsOutput>>;
  public function ListActionExecutions(ListActionExecutionsInput): Awaitable<Errors\Result<ListActionExecutionsOutput>>;
  public function ListActionTypes(ListActionTypesInput): Awaitable<Errors\Result<ListActionTypesOutput>>;
  public function ListPipelineExecutions(ListPipelineExecutionsInput): Awaitable<Errors\Result<ListPipelineExecutionsOutput>>;
  public function ListPipelines(ListPipelinesInput): Awaitable<Errors\Result<ListPipelinesOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput): Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function ListWebhooks(ListWebhooksInput): Awaitable<Errors\Result<ListWebhooksOutput>>;
  public function PollForJobs(PollForJobsInput): Awaitable<Errors\Result<PollForJobsOutput>>;
  public function PollForThirdPartyJobs(PollForThirdPartyJobsInput): Awaitable<Errors\Result<PollForThirdPartyJobsOutput>>;
  public function PutActionRevision(PutActionRevisionInput): Awaitable<Errors\Result<PutActionRevisionOutput>>;
  public function PutApprovalResult(PutApprovalResultInput): Awaitable<Errors\Result<PutApprovalResultOutput>>;
  public function PutJobFailureResult(PutJobFailureResultInput): Awaitable<Errors\Error>;
  public function PutJobSuccessResult(PutJobSuccessResultInput): Awaitable<Errors\Error>;
  public function PutThirdPartyJobFailureResult(PutThirdPartyJobFailureResultInput): Awaitable<Errors\Error>;
  public function PutThirdPartyJobSuccessResult(PutThirdPartyJobSuccessResultInput): Awaitable<Errors\Error>;
  public function PutWebhook(PutWebhookInput): Awaitable<Errors\Result<PutWebhookOutput>>;
  public function RegisterWebhookWithThirdParty(RegisterWebhookWithThirdPartyInput): Awaitable<Errors\Result<RegisterWebhookWithThirdPartyOutput>>;
  public function RetryStageExecution(RetryStageExecutionInput): Awaitable<Errors\Result<RetryStageExecutionOutput>>;
  public function StartPipelineExecution(StartPipelineExecutionInput): Awaitable<Errors\Result<StartPipelineExecutionOutput>>;
  public function StopPipelineExecution(StopPipelineExecutionInput): Awaitable<Errors\Result<StopPipelineExecutionOutput>>;
  public function TagResource(TagResourceInput): Awaitable<Errors\Result<TagResourceOutput>>;
  public function UntagResource(UntagResourceInput): Awaitable<Errors\Result<UntagResourceOutput>>;
  public function UpdatePipeline(UpdatePipelineInput): Awaitable<Errors\Result<UpdatePipelineOutput>>;
}

type AWSRegionName = string;

class AWSSessionCredentials {
  public AccessKeyId $access_key_id;
  public SecretAccessKey $secret_access_key;
  public SessionToken $session_token;

  public function __construct(shape(
  ?'access_key_id' => AccessKeyId,
  ?'secret_access_key' => SecretAccessKey,
  ?'session_token' => SessionToken,
  ) $s = shape()) {
    $this->access_key_id = $access_key_id ?? ;
    $this->secret_access_key = $secret_access_key ?? ;
    $this->session_token = $session_token ?? ;
  }
}

type AccessKeyId = string;

type AccountId = string;

class AcknowledgeJobInput {
  public JobId $job_id;
  public Nonce $nonce;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'nonce' => Nonce,
  ) $s = shape()) {
    $this->job_id = $job_id ?? ;
    $this->nonce = $nonce ?? ;
  }
}

class AcknowledgeJobOutput {
  public JobStatus $status;

  public function __construct(shape(
  ?'status' => JobStatus,
  ) $s = shape()) {
    $this->status = $status ?? ;
  }
}

class AcknowledgeThirdPartyJobInput {
  public ClientToken $client_token;
  public ThirdPartyJobId $job_id;
  public Nonce $nonce;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'job_id' => ThirdPartyJobId,
  ?'nonce' => Nonce,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->job_id = $job_id ?? ;
    $this->nonce = $nonce ?? ;
  }
}

class AcknowledgeThirdPartyJobOutput {
  public JobStatus $status;

  public function __construct(shape(
  ?'status' => JobStatus,
  ) $s = shape()) {
    $this->status = $status ?? ;
  }
}

type ActionCategory = string;

class ActionConfiguration {
  public ActionConfigurationMap $configuration;

  public function __construct(shape(
  ?'configuration' => ActionConfigurationMap,
  ) $s = shape()) {
    $this->configuration = $configuration ?? ;
  }
}

type ActionConfigurationKey = string;

type ActionConfigurationMap = dict<ActionConfigurationKey, ActionConfigurationValue>;

class ActionConfigurationProperty {
  public Description $description;
  public boolean $key;
  public ActionConfigurationKey $name;
  public boolean $queryable;
  public boolean $required;
  public boolean $secret;
  public ActionConfigurationPropertyType $type;

  public function __construct(shape(
  ?'description' => Description,
  ?'key' => boolean,
  ?'name' => ActionConfigurationKey,
  ?'queryable' => boolean,
  ?'required' => boolean,
  ?'secret' => boolean,
  ?'type' => ActionConfigurationPropertyType,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->key = $key ?? ;
    $this->name = $name ?? ;
    $this->queryable = $queryable ?? ;
    $this->required = $required ?? ;
    $this->secret = $secret ?? ;
    $this->type = $type ?? ;
  }
}

type ActionConfigurationPropertyList = vec<ActionConfigurationProperty>;

type ActionConfigurationPropertyType = string;

type ActionConfigurationQueryableValue = string;

type ActionConfigurationValue = string;

class ActionContext {
  public ActionExecutionId $action_execution_id;
  public ActionName $name;

  public function __construct(shape(
  ?'action_execution_id' => ActionExecutionId,
  ?'name' => ActionName,
  ) $s = shape()) {
    $this->action_execution_id = $action_execution_id ?? ;
    $this->name = $name ?? ;
  }
}

class ActionDeclaration {
  public ActionTypeId $action_type_id;
  public ActionConfigurationMap $configuration;
  public InputArtifactList $input_artifacts;
  public ActionName $name;
  public ActionNamespace $namespace;
  public OutputArtifactList $output_artifacts;
  public AWSRegionName $region;
  public RoleArn $role_arn;
  public ActionRunOrder $run_order;

  public function __construct(shape(
  ?'action_type_id' => ActionTypeId,
  ?'configuration' => ActionConfigurationMap,
  ?'input_artifacts' => InputArtifactList,
  ?'name' => ActionName,
  ?'namespace' => ActionNamespace,
  ?'output_artifacts' => OutputArtifactList,
  ?'region' => AWSRegionName,
  ?'role_arn' => RoleArn,
  ?'run_order' => ActionRunOrder,
  ) $s = shape()) {
    $this->action_type_id = $action_type_id ?? ;
    $this->configuration = $configuration ?? ;
    $this->input_artifacts = $input_artifacts ?? ;
    $this->name = $name ?? ;
    $this->namespace = $namespace ?? ;
    $this->output_artifacts = $output_artifacts ?? ;
    $this->region = $region ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->run_order = $run_order ?? ;
  }
}

class ActionExecution {
  public ErrorDetails $error_details;
  public ExecutionId $external_execution_id;
  public Url $external_execution_url;
  public Timestamp $last_status_change;
  public LastUpdatedBy $last_updated_by;
  public Percentage $percent_complete;
  public ActionExecutionStatus $status;
  public ExecutionSummary $summary;
  public ActionExecutionToken $token;

  public function __construct(shape(
  ?'error_details' => ErrorDetails,
  ?'external_execution_id' => ExecutionId,
  ?'external_execution_url' => Url,
  ?'last_status_change' => Timestamp,
  ?'last_updated_by' => LastUpdatedBy,
  ?'percent_complete' => Percentage,
  ?'status' => ActionExecutionStatus,
  ?'summary' => ExecutionSummary,
  ?'token' => ActionExecutionToken,
  ) $s = shape()) {
    $this->error_details = $error_details ?? ;
    $this->external_execution_id = $external_execution_id ?? ;
    $this->external_execution_url = $external_execution_url ?? ;
    $this->last_status_change = $last_status_change ?? ;
    $this->last_updated_by = $last_updated_by ?? ;
    $this->percent_complete = $percent_complete ?? ;
    $this->status = $status ?? ;
    $this->summary = $summary ?? ;
    $this->token = $token ?? ;
  }
}

class ActionExecutionDetail {
  public ActionExecutionId $action_execution_id;
  public ActionName $action_name;
  public ActionExecutionInput $input;
  public Timestamp $last_update_time;
  public ActionExecutionOutput $output;
  public PipelineExecutionId $pipeline_execution_id;
  public PipelineVersion $pipeline_version;
  public StageName $stage_name;
  public Timestamp $start_time;
  public ActionExecutionStatus $status;

  public function __construct(shape(
  ?'action_execution_id' => ActionExecutionId,
  ?'action_name' => ActionName,
  ?'input' => ActionExecutionInput,
  ?'last_update_time' => Timestamp,
  ?'output' => ActionExecutionOutput,
  ?'pipeline_execution_id' => PipelineExecutionId,
  ?'pipeline_version' => PipelineVersion,
  ?'stage_name' => StageName,
  ?'start_time' => Timestamp,
  ?'status' => ActionExecutionStatus,
  ) $s = shape()) {
    $this->action_execution_id = $action_execution_id ?? ;
    $this->action_name = $action_name ?? ;
    $this->input = $input ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->output = $output ?? ;
    $this->pipeline_execution_id = $pipeline_execution_id ?? ;
    $this->pipeline_version = $pipeline_version ?? ;
    $this->stage_name = $stage_name ?? ;
    $this->start_time = $start_time ?? ;
    $this->status = $status ?? ;
  }
}

type ActionExecutionDetailList = vec<ActionExecutionDetail>;

class ActionExecutionFilter {
  public PipelineExecutionId $pipeline_execution_id;

  public function __construct(shape(
  ?'pipeline_execution_id' => PipelineExecutionId,
  ) $s = shape()) {
    $this->pipeline_execution_id = $pipeline_execution_id ?? ;
  }
}

type ActionExecutionId = string;

class ActionExecutionInput {
  public ActionTypeId $action_type_id;
  public ActionConfigurationMap $configuration;
  public ArtifactDetailList $input_artifacts;
  public ActionNamespace $namespace;
  public AWSRegionName $region;
  public ResolvedActionConfigurationMap $resolved_configuration;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'action_type_id' => ActionTypeId,
  ?'configuration' => ActionConfigurationMap,
  ?'input_artifacts' => ArtifactDetailList,
  ?'namespace' => ActionNamespace,
  ?'region' => AWSRegionName,
  ?'resolved_configuration' => ResolvedActionConfigurationMap,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->action_type_id = $action_type_id ?? ;
    $this->configuration = $configuration ?? ;
    $this->input_artifacts = $input_artifacts ?? ;
    $this->namespace = $namespace ?? ;
    $this->region = $region ?? ;
    $this->resolved_configuration = $resolved_configuration ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class ActionExecutionOutput {
  public ActionExecutionResult $execution_result;
  public ArtifactDetailList $output_artifacts;
  public OutputVariablesMap $output_variables;

  public function __construct(shape(
  ?'execution_result' => ActionExecutionResult,
  ?'output_artifacts' => ArtifactDetailList,
  ?'output_variables' => OutputVariablesMap,
  ) $s = shape()) {
    $this->execution_result = $execution_result ?? ;
    $this->output_artifacts = $output_artifacts ?? ;
    $this->output_variables = $output_variables ?? ;
  }
}

class ActionExecutionResult {
  public ExternalExecutionId $external_execution_id;
  public ExternalExecutionSummary $external_execution_summary;
  public Url $external_execution_url;

  public function __construct(shape(
  ?'external_execution_id' => ExternalExecutionId,
  ?'external_execution_summary' => ExternalExecutionSummary,
  ?'external_execution_url' => Url,
  ) $s = shape()) {
    $this->external_execution_id = $external_execution_id ?? ;
    $this->external_execution_summary = $external_execution_summary ?? ;
    $this->external_execution_url = $external_execution_url ?? ;
  }
}

type ActionExecutionStatus = string;

type ActionExecutionToken = string;

type ActionName = string;

type ActionNamespace = string;

class ActionNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ActionOwner = string;

type ActionProvider = string;

class ActionRevision {
  public Timestamp $created;
  public RevisionChangeIdentifier $revision_change_id;
  public Revision $revision_id;

  public function __construct(shape(
  ?'created' => Timestamp,
  ?'revision_change_id' => RevisionChangeIdentifier,
  ?'revision_id' => Revision,
  ) $s = shape()) {
    $this->created = $created ?? ;
    $this->revision_change_id = $revision_change_id ?? ;
    $this->revision_id = $revision_id ?? ;
  }
}

type ActionRunOrder = int;

class ActionState {
  public ActionName $action_name;
  public ActionRevision $current_revision;
  public Url $entity_url;
  public ActionExecution $latest_execution;
  public Url $revision_url;

  public function __construct(shape(
  ?'action_name' => ActionName,
  ?'current_revision' => ActionRevision,
  ?'entity_url' => Url,
  ?'latest_execution' => ActionExecution,
  ?'revision_url' => Url,
  ) $s = shape()) {
    $this->action_name = $action_name ?? ;
    $this->current_revision = $current_revision ?? ;
    $this->entity_url = $entity_url ?? ;
    $this->latest_execution = $latest_execution ?? ;
    $this->revision_url = $revision_url ?? ;
  }
}

type ActionStateList = vec<ActionState>;

class ActionType {
  public ActionConfigurationPropertyList $action_configuration_properties;
  public ActionTypeId $id;
  public ArtifactDetails $input_artifact_details;
  public ArtifactDetails $output_artifact_details;
  public ActionTypeSettings $settings;

  public function __construct(shape(
  ?'action_configuration_properties' => ActionConfigurationPropertyList,
  ?'id' => ActionTypeId,
  ?'input_artifact_details' => ArtifactDetails,
  ?'output_artifact_details' => ArtifactDetails,
  ?'settings' => ActionTypeSettings,
  ) $s = shape()) {
    $this->action_configuration_properties = $action_configuration_properties ?? ;
    $this->id = $id ?? ;
    $this->input_artifact_details = $input_artifact_details ?? ;
    $this->output_artifact_details = $output_artifact_details ?? ;
    $this->settings = $settings ?? ;
  }
}

class ActionTypeId {
  public ActionCategory $category;
  public ActionOwner $owner;
  public ActionProvider $provider;
  public Version $version;

  public function __construct(shape(
  ?'category' => ActionCategory,
  ?'owner' => ActionOwner,
  ?'provider' => ActionProvider,
  ?'version' => Version,
  ) $s = shape()) {
    $this->category = $category ?? ;
    $this->owner = $owner ?? ;
    $this->provider = $provider ?? ;
    $this->version = $version ?? ;
  }
}

type ActionTypeList = vec<ActionType>;

class ActionTypeNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ActionTypeSettings {
  public UrlTemplate $entity_url_template;
  public UrlTemplate $execution_url_template;
  public UrlTemplate $revision_url_template;
  public Url $third_party_configuration_url;

  public function __construct(shape(
  ?'entity_url_template' => UrlTemplate,
  ?'execution_url_template' => UrlTemplate,
  ?'revision_url_template' => UrlTemplate,
  ?'third_party_configuration_url' => Url,
  ) $s = shape()) {
    $this->entity_url_template = $entity_url_template ?? ;
    $this->execution_url_template = $execution_url_template ?? ;
    $this->revision_url_template = $revision_url_template ?? ;
    $this->third_party_configuration_url = $third_party_configuration_url ?? ;
  }
}

class ApprovalAlreadyCompletedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ApprovalResult {
  public ApprovalStatus $status;
  public ApprovalSummary $summary;

  public function __construct(shape(
  ?'status' => ApprovalStatus,
  ?'summary' => ApprovalSummary,
  ) $s = shape()) {
    $this->status = $status ?? ;
    $this->summary = $summary ?? ;
  }
}

type ApprovalStatus = string;

type ApprovalSummary = string;

type ApprovalToken = string;

class Artifact {
  public ArtifactLocation $location;
  public ArtifactName $name;
  public Revision $revision;

  public function __construct(shape(
  ?'location' => ArtifactLocation,
  ?'name' => ArtifactName,
  ?'revision' => Revision,
  ) $s = shape()) {
    $this->location = $location ?? ;
    $this->name = $name ?? ;
    $this->revision = $revision ?? ;
  }
}

class ArtifactDetail {
  public ArtifactName $name;
  public S3Location $s_3_location;

  public function __construct(shape(
  ?'name' => ArtifactName,
  ?'s_3_location' => S3Location,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->s_3_location = $s_3_location ?? ;
  }
}

type ArtifactDetailList = vec<ArtifactDetail>;

class ArtifactDetails {
  public MaximumArtifactCount $maximum_count;
  public MinimumArtifactCount $minimum_count;

  public function __construct(shape(
  ?'maximum_count' => MaximumArtifactCount,
  ?'minimum_count' => MinimumArtifactCount,
  ) $s = shape()) {
    $this->maximum_count = $maximum_count ?? ;
    $this->minimum_count = $minimum_count ?? ;
  }
}

type ArtifactList = vec<Artifact>;

class ArtifactLocation {
  public S3ArtifactLocation $s_3_location;
  public ArtifactLocationType $type;

  public function __construct(shape(
  ?'s_3_location' => S3ArtifactLocation,
  ?'type' => ArtifactLocationType,
  ) $s = shape()) {
    $this->s_3_location = $s_3_location ?? ;
    $this->type = $type ?? ;
  }
}

type ArtifactLocationType = string;

type ArtifactName = string;

class ArtifactRevision {
  public Timestamp $created;
  public ArtifactName $name;
  public RevisionChangeIdentifier $revision_change_identifier;
  public Revision $revision_id;
  public RevisionSummary $revision_summary;
  public Url $revision_url;

  public function __construct(shape(
  ?'created' => Timestamp,
  ?'name' => ArtifactName,
  ?'revision_change_identifier' => RevisionChangeIdentifier,
  ?'revision_id' => Revision,
  ?'revision_summary' => RevisionSummary,
  ?'revision_url' => Url,
  ) $s = shape()) {
    $this->created = $created ?? ;
    $this->name = $name ?? ;
    $this->revision_change_identifier = $revision_change_identifier ?? ;
    $this->revision_id = $revision_id ?? ;
    $this->revision_summary = $revision_summary ?? ;
    $this->revision_url = $revision_url ?? ;
  }
}

type ArtifactRevisionList = vec<ArtifactRevision>;

class ArtifactStore {
  public EncryptionKey $encryption_key;
  public ArtifactStoreLocation $location;
  public ArtifactStoreType $type;

  public function __construct(shape(
  ?'encryption_key' => EncryptionKey,
  ?'location' => ArtifactStoreLocation,
  ?'type' => ArtifactStoreType,
  ) $s = shape()) {
    $this->encryption_key = $encryption_key ?? ;
    $this->location = $location ?? ;
    $this->type = $type ?? ;
  }
}

type ArtifactStoreLocation = string;

type ArtifactStoreMap = dict<AWSRegionName, ArtifactStore>;

type ArtifactStoreType = string;

class BlockerDeclaration {
  public BlockerName $name;
  public BlockerType $type;

  public function __construct(shape(
  ?'name' => BlockerName,
  ?'type' => BlockerType,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->type = $type ?? ;
  }
}

type BlockerName = string;

type BlockerType = string;

type Boolean = bool;

type ClientId = string;

type ClientRequestToken = string;

type ClientToken = string;

type Code = string;

class ConcurrentModificationException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ContinuationToken = string;

class CreateCustomActionTypeInput {
  public ActionCategory $category;
  public ActionConfigurationPropertyList $configuration_properties;
  public ArtifactDetails $input_artifact_details;
  public ArtifactDetails $output_artifact_details;
  public ActionProvider $provider;
  public ActionTypeSettings $settings;
  public TagList $tags;
  public Version $version;

  public function __construct(shape(
  ?'category' => ActionCategory,
  ?'configuration_properties' => ActionConfigurationPropertyList,
  ?'input_artifact_details' => ArtifactDetails,
  ?'output_artifact_details' => ArtifactDetails,
  ?'provider' => ActionProvider,
  ?'settings' => ActionTypeSettings,
  ?'tags' => TagList,
  ?'version' => Version,
  ) $s = shape()) {
    $this->category = $category ?? ;
    $this->configuration_properties = $configuration_properties ?? ;
    $this->input_artifact_details = $input_artifact_details ?? ;
    $this->output_artifact_details = $output_artifact_details ?? ;
    $this->provider = $provider ?? ;
    $this->settings = $settings ?? ;
    $this->tags = $tags ?? ;
    $this->version = $version ?? ;
  }
}

class CreateCustomActionTypeOutput {
  public ActionType $action_type;
  public TagList $tags;

  public function __construct(shape(
  ?'action_type' => ActionType,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->action_type = $action_type ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreatePipelineInput {
  public PipelineDeclaration $pipeline;
  public TagList $tags;

  public function __construct(shape(
  ?'pipeline' => PipelineDeclaration,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->pipeline = $pipeline ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreatePipelineOutput {
  public PipelineDeclaration $pipeline;
  public TagList $tags;

  public function __construct(shape(
  ?'pipeline' => PipelineDeclaration,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->pipeline = $pipeline ?? ;
    $this->tags = $tags ?? ;
  }
}

class CurrentRevision {
  public RevisionChangeIdentifier $change_identifier;
  public Time $created;
  public Revision $revision;
  public RevisionSummary $revision_summary;

  public function __construct(shape(
  ?'change_identifier' => RevisionChangeIdentifier,
  ?'created' => Time,
  ?'revision' => Revision,
  ?'revision_summary' => RevisionSummary,
  ) $s = shape()) {
    $this->change_identifier = $change_identifier ?? ;
    $this->created = $created ?? ;
    $this->revision = $revision ?? ;
    $this->revision_summary = $revision_summary ?? ;
  }
}

class DeleteCustomActionTypeInput {
  public ActionCategory $category;
  public ActionProvider $provider;
  public Version $version;

  public function __construct(shape(
  ?'category' => ActionCategory,
  ?'provider' => ActionProvider,
  ?'version' => Version,
  ) $s = shape()) {
    $this->category = $category ?? ;
    $this->provider = $provider ?? ;
    $this->version = $version ?? ;
  }
}

class DeletePipelineInput {
  public PipelineName $name;

  public function __construct(shape(
  ?'name' => PipelineName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class DeleteWebhookInput {
  public WebhookName $name;

  public function __construct(shape(
  ?'name' => WebhookName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class DeleteWebhookOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeregisterWebhookWithThirdPartyInput {
  public WebhookName $webhook_name;

  public function __construct(shape(
  ?'webhook_name' => WebhookName,
  ) $s = shape()) {
    $this->webhook_name = $webhook_name ?? ;
  }
}

class DeregisterWebhookWithThirdPartyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Description = string;

class DisableStageTransitionInput {
  public PipelineName $pipeline_name;
  public DisabledReason $reason;
  public StageName $stage_name;
  public StageTransitionType $transition_type;

  public function __construct(shape(
  ?'pipeline_name' => PipelineName,
  ?'reason' => DisabledReason,
  ?'stage_name' => StageName,
  ?'transition_type' => StageTransitionType,
  ) $s = shape()) {
    $this->pipeline_name = $pipeline_name ?? ;
    $this->reason = $reason ?? ;
    $this->stage_name = $stage_name ?? ;
    $this->transition_type = $transition_type ?? ;
  }
}

type DisabledReason = string;

class DuplicatedStopRequestException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class EnableStageTransitionInput {
  public PipelineName $pipeline_name;
  public StageName $stage_name;
  public StageTransitionType $transition_type;

  public function __construct(shape(
  ?'pipeline_name' => PipelineName,
  ?'stage_name' => StageName,
  ?'transition_type' => StageTransitionType,
  ) $s = shape()) {
    $this->pipeline_name = $pipeline_name ?? ;
    $this->stage_name = $stage_name ?? ;
    $this->transition_type = $transition_type ?? ;
  }
}

type Enabled = bool;

class EncryptionKey {
  public EncryptionKeyId $id;
  public EncryptionKeyType $type;

  public function __construct(shape(
  ?'id' => EncryptionKeyId,
  ?'type' => EncryptionKeyType,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->type = $type ?? ;
  }
}

type EncryptionKeyId = string;

type EncryptionKeyType = string;

class ErrorDetails {
  public Code $code;
  public Message $message;

  public function __construct(shape(
  ?'code' => Code,
  ?'message' => Message,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

class ExecutionDetails {
  public ExecutionId $external_execution_id;
  public Percentage $percent_complete;
  public ExecutionSummary $summary;

  public function __construct(shape(
  ?'external_execution_id' => ExecutionId,
  ?'percent_complete' => Percentage,
  ?'summary' => ExecutionSummary,
  ) $s = shape()) {
    $this->external_execution_id = $external_execution_id ?? ;
    $this->percent_complete = $percent_complete ?? ;
    $this->summary = $summary ?? ;
  }
}

type ExecutionId = string;

type ExecutionSummary = string;

class ExecutionTrigger {
  public TriggerDetail $trigger_detail;
  public TriggerType $trigger_type;

  public function __construct(shape(
  ?'trigger_detail' => TriggerDetail,
  ?'trigger_type' => TriggerType,
  ) $s = shape()) {
    $this->trigger_detail = $trigger_detail ?? ;
    $this->trigger_type = $trigger_type ?? ;
  }
}

type ExternalExecutionId = string;

type ExternalExecutionSummary = string;

class FailureDetails {
  public ExecutionId $external_execution_id;
  public Message $message;
  public FailureType $type;

  public function __construct(shape(
  ?'external_execution_id' => ExecutionId,
  ?'message' => Message,
  ?'type' => FailureType,
  ) $s = shape()) {
    $this->external_execution_id = $external_execution_id ?? ;
    $this->message = $message ?? ;
    $this->type = $type ?? ;
  }
}

type FailureType = string;

class GetJobDetailsInput {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? ;
  }
}

class GetJobDetailsOutput {
  public JobDetails $job_details;

  public function __construct(shape(
  ?'job_details' => JobDetails,
  ) $s = shape()) {
    $this->job_details = $job_details ?? ;
  }
}

class GetPipelineExecutionInput {
  public PipelineExecutionId $pipeline_execution_id;
  public PipelineName $pipeline_name;

  public function __construct(shape(
  ?'pipeline_execution_id' => PipelineExecutionId,
  ?'pipeline_name' => PipelineName,
  ) $s = shape()) {
    $this->pipeline_execution_id = $pipeline_execution_id ?? ;
    $this->pipeline_name = $pipeline_name ?? ;
  }
}

class GetPipelineExecutionOutput {
  public PipelineExecution $pipeline_execution;

  public function __construct(shape(
  ?'pipeline_execution' => PipelineExecution,
  ) $s = shape()) {
    $this->pipeline_execution = $pipeline_execution ?? ;
  }
}

class GetPipelineInput {
  public PipelineName $name;
  public PipelineVersion $version;

  public function __construct(shape(
  ?'name' => PipelineName,
  ?'version' => PipelineVersion,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->version = $version ?? ;
  }
}

class GetPipelineOutput {
  public PipelineMetadata $metadata;
  public PipelineDeclaration $pipeline;

  public function __construct(shape(
  ?'metadata' => PipelineMetadata,
  ?'pipeline' => PipelineDeclaration,
  ) $s = shape()) {
    $this->metadata = $metadata ?? ;
    $this->pipeline = $pipeline ?? ;
  }
}

class GetPipelineStateInput {
  public PipelineName $name;

  public function __construct(shape(
  ?'name' => PipelineName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class GetPipelineStateOutput {
  public Timestamp $created;
  public PipelineName $pipeline_name;
  public PipelineVersion $pipeline_version;
  public StageStateList $stage_states;
  public Timestamp $updated;

  public function __construct(shape(
  ?'created' => Timestamp,
  ?'pipeline_name' => PipelineName,
  ?'pipeline_version' => PipelineVersion,
  ?'stage_states' => StageStateList,
  ?'updated' => Timestamp,
  ) $s = shape()) {
    $this->created = $created ?? ;
    $this->pipeline_name = $pipeline_name ?? ;
    $this->pipeline_version = $pipeline_version ?? ;
    $this->stage_states = $stage_states ?? ;
    $this->updated = $updated ?? ;
  }
}

class GetThirdPartyJobDetailsInput {
  public ClientToken $client_token;
  public ThirdPartyJobId $job_id;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'job_id' => ThirdPartyJobId,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->job_id = $job_id ?? ;
  }
}

class GetThirdPartyJobDetailsOutput {
  public ThirdPartyJobDetails $job_details;

  public function __construct(shape(
  ?'job_details' => ThirdPartyJobDetails,
  ) $s = shape()) {
    $this->job_details = $job_details ?? ;
  }
}

class InputArtifact {
  public ArtifactName $name;

  public function __construct(shape(
  ?'name' => ArtifactName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

type InputArtifactList = vec<InputArtifact>;

class InvalidActionDeclarationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidApprovalTokenException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidArnException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidBlockerDeclarationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidClientTokenException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidJobException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidJobStateException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidNextTokenException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidNonceException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidStageDeclarationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidStructureException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTagsException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidWebhookAuthenticationParametersException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidWebhookFilterPatternException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Job {
  public AccountId $account_id;
  public JobData $data;
  public JobId $id;
  public Nonce $nonce;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'data' => JobData,
  ?'id' => JobId,
  ?'nonce' => Nonce,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->data = $data ?? ;
    $this->id = $id ?? ;
    $this->nonce = $nonce ?? ;
  }
}

class JobData {
  public ActionConfiguration $action_configuration;
  public ActionTypeId $action_type_id;
  public AWSSessionCredentials $artifact_credentials;
  public ContinuationToken $continuation_token;
  public EncryptionKey $encryption_key;
  public ArtifactList $input_artifacts;
  public ArtifactList $output_artifacts;
  public PipelineContext $pipeline_context;

  public function __construct(shape(
  ?'action_configuration' => ActionConfiguration,
  ?'action_type_id' => ActionTypeId,
  ?'artifact_credentials' => AWSSessionCredentials,
  ?'continuation_token' => ContinuationToken,
  ?'encryption_key' => EncryptionKey,
  ?'input_artifacts' => ArtifactList,
  ?'output_artifacts' => ArtifactList,
  ?'pipeline_context' => PipelineContext,
  ) $s = shape()) {
    $this->action_configuration = $action_configuration ?? ;
    $this->action_type_id = $action_type_id ?? ;
    $this->artifact_credentials = $artifact_credentials ?? ;
    $this->continuation_token = $continuation_token ?? ;
    $this->encryption_key = $encryption_key ?? ;
    $this->input_artifacts = $input_artifacts ?? ;
    $this->output_artifacts = $output_artifacts ?? ;
    $this->pipeline_context = $pipeline_context ?? ;
  }
}

class JobDetails {
  public AccountId $account_id;
  public JobData $data;
  public JobId $id;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'data' => JobData,
  ?'id' => JobId,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->data = $data ?? ;
    $this->id = $id ?? ;
  }
}

type JobId = string;

type JobList = vec<Job>;

class JobNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type JobStatus = string;

type JsonPath = string;

type LastChangedAt = int;

type LastChangedBy = string;

type LastUpdatedBy = string;

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListActionExecutionsInput {
  public ActionExecutionFilter $filter;
  public MaxResults $max_results;
  public NextToken $next_token;
  public PipelineName $pipeline_name;

  public function __construct(shape(
  ?'filter' => ActionExecutionFilter,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'pipeline_name' => PipelineName,
  ) $s = shape()) {
    $this->filter = $filter ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->pipeline_name = $pipeline_name ?? ;
  }
}

class ListActionExecutionsOutput {
  public ActionExecutionDetailList $action_execution_details;
  public NextToken $next_token;

  public function __construct(shape(
  ?'action_execution_details' => ActionExecutionDetailList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->action_execution_details = $action_execution_details ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListActionTypesInput {
  public ActionOwner $action_owner_filter;
  public NextToken $next_token;

  public function __construct(shape(
  ?'action_owner_filter' => ActionOwner,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->action_owner_filter = $action_owner_filter ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListActionTypesOutput {
  public ActionTypeList $action_types;
  public NextToken $next_token;

  public function __construct(shape(
  ?'action_types' => ActionTypeList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->action_types = $action_types ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListPipelineExecutionsInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public PipelineName $pipeline_name;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'pipeline_name' => PipelineName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->pipeline_name = $pipeline_name ?? ;
  }
}

class ListPipelineExecutionsOutput {
  public NextToken $next_token;
  public PipelineExecutionSummaryList $pipeline_execution_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'pipeline_execution_summaries' => PipelineExecutionSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->pipeline_execution_summaries = $pipeline_execution_summaries ?? ;
  }
}

class ListPipelinesInput {
  public NextToken $next_token;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
  }
}

class ListPipelinesOutput {
  public NextToken $next_token;
  public PipelineList $pipelines;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'pipelines' => PipelineList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->pipelines = $pipelines ?? ;
  }
}

class ListTagsForResourceInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->resource_arn = $resource_arn ?? ;
  }
}

class ListTagsForResourceOutput {
  public NextToken $next_token;
  public TagList $tags;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->tags = $tags ?? ;
  }
}

class ListWebhookItem {
  public WebhookArn $arn;
  public WebhookDefinition $definition;
  public WebhookErrorCode $error_code;
  public WebhookErrorMessage $error_message;
  public WebhookLastTriggered $last_triggered;
  public TagList $tags;
  public WebhookUrl $url;

  public function __construct(shape(
  ?'arn' => WebhookArn,
  ?'definition' => WebhookDefinition,
  ?'error_code' => WebhookErrorCode,
  ?'error_message' => WebhookErrorMessage,
  ?'last_triggered' => WebhookLastTriggered,
  ?'tags' => TagList,
  ?'url' => WebhookUrl,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->definition = $definition ?? ;
    $this->error_code = $error_code ?? ;
    $this->error_message = $error_message ?? ;
    $this->last_triggered = $last_triggered ?? ;
    $this->tags = $tags ?? ;
    $this->url = $url ?? ;
  }
}

class ListWebhooksInput {
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

class ListWebhooksOutput {
  public NextToken $next_token;
  public WebhookList $webhooks;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'webhooks' => WebhookList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->webhooks = $webhooks ?? ;
  }
}

type MatchEquals = string;

type MaxBatchSize = int;

type MaxResults = int;

type MaximumArtifactCount = int;

type Message = string;

type MinimumArtifactCount = int;

type NextToken = string;

type Nonce = string;

class NotLatestPipelineExecutionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class OutputArtifact {
  public ArtifactName $name;

  public function __construct(shape(
  ?'name' => ArtifactName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

type OutputArtifactList = vec<OutputArtifact>;

type OutputVariablesKey = string;

type OutputVariablesMap = dict<OutputVariablesKey, OutputVariablesValue>;

class OutputVariablesSizeExceededException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type OutputVariablesValue = string;

type Percentage = int;

type PipelineArn = string;

class PipelineContext {
  public ActionContext $action;
  public PipelineArn $pipeline_arn;
  public PipelineExecutionId $pipeline_execution_id;
  public PipelineName $pipeline_name;
  public StageContext $stage;

  public function __construct(shape(
  ?'action' => ActionContext,
  ?'pipeline_arn' => PipelineArn,
  ?'pipeline_execution_id' => PipelineExecutionId,
  ?'pipeline_name' => PipelineName,
  ?'stage' => StageContext,
  ) $s = shape()) {
    $this->action = $action ?? ;
    $this->pipeline_arn = $pipeline_arn ?? ;
    $this->pipeline_execution_id = $pipeline_execution_id ?? ;
    $this->pipeline_name = $pipeline_name ?? ;
    $this->stage = $stage ?? ;
  }
}

class PipelineDeclaration {
  public ArtifactStore $artifact_store;
  public ArtifactStoreMap $artifact_stores;
  public PipelineName $name;
  public RoleArn $role_arn;
  public PipelineStageDeclarationList $stages;
  public PipelineVersion $version;

  public function __construct(shape(
  ?'artifact_store' => ArtifactStore,
  ?'artifact_stores' => ArtifactStoreMap,
  ?'name' => PipelineName,
  ?'role_arn' => RoleArn,
  ?'stages' => PipelineStageDeclarationList,
  ?'version' => PipelineVersion,
  ) $s = shape()) {
    $this->artifact_store = $artifact_store ?? ;
    $this->artifact_stores = $artifact_stores ?? ;
    $this->name = $name ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->stages = $stages ?? ;
    $this->version = $version ?? ;
  }
}

class PipelineExecution {
  public ArtifactRevisionList $artifact_revisions;
  public PipelineExecutionId $pipeline_execution_id;
  public PipelineName $pipeline_name;
  public PipelineVersion $pipeline_version;
  public PipelineExecutionStatus $status;

  public function __construct(shape(
  ?'artifact_revisions' => ArtifactRevisionList,
  ?'pipeline_execution_id' => PipelineExecutionId,
  ?'pipeline_name' => PipelineName,
  ?'pipeline_version' => PipelineVersion,
  ?'status' => PipelineExecutionStatus,
  ) $s = shape()) {
    $this->artifact_revisions = $artifact_revisions ?? ;
    $this->pipeline_execution_id = $pipeline_execution_id ?? ;
    $this->pipeline_name = $pipeline_name ?? ;
    $this->pipeline_version = $pipeline_version ?? ;
    $this->status = $status ?? ;
  }
}

type PipelineExecutionId = string;

class PipelineExecutionNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PipelineExecutionNotStoppableException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type PipelineExecutionStatus = string;

class PipelineExecutionSummary {
  public Timestamp $last_update_time;
  public PipelineExecutionId $pipeline_execution_id;
  public SourceRevisionList $source_revisions;
  public Timestamp $start_time;
  public PipelineExecutionStatus $status;
  public StopExecutionTrigger $stop_trigger;
  public ExecutionTrigger $trigger;

  public function __construct(shape(
  ?'last_update_time' => Timestamp,
  ?'pipeline_execution_id' => PipelineExecutionId,
  ?'source_revisions' => SourceRevisionList,
  ?'start_time' => Timestamp,
  ?'status' => PipelineExecutionStatus,
  ?'stop_trigger' => StopExecutionTrigger,
  ?'trigger' => ExecutionTrigger,
  ) $s = shape()) {
    $this->last_update_time = $last_update_time ?? ;
    $this->pipeline_execution_id = $pipeline_execution_id ?? ;
    $this->source_revisions = $source_revisions ?? ;
    $this->start_time = $start_time ?? ;
    $this->status = $status ?? ;
    $this->stop_trigger = $stop_trigger ?? ;
    $this->trigger = $trigger ?? ;
  }
}

type PipelineExecutionSummaryList = vec<PipelineExecutionSummary>;

type PipelineList = vec<PipelineSummary>;

class PipelineMetadata {
  public Timestamp $created;
  public PipelineArn $pipeline_arn;
  public Timestamp $updated;

  public function __construct(shape(
  ?'created' => Timestamp,
  ?'pipeline_arn' => PipelineArn,
  ?'updated' => Timestamp,
  ) $s = shape()) {
    $this->created = $created ?? ;
    $this->pipeline_arn = $pipeline_arn ?? ;
    $this->updated = $updated ?? ;
  }
}

type PipelineName = string;

class PipelineNameInUseException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PipelineNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type PipelineStageDeclarationList = vec<StageDeclaration>;

class PipelineSummary {
  public Timestamp $created;
  public PipelineName $name;
  public Timestamp $updated;
  public PipelineVersion $version;

  public function __construct(shape(
  ?'created' => Timestamp,
  ?'name' => PipelineName,
  ?'updated' => Timestamp,
  ?'version' => PipelineVersion,
  ) $s = shape()) {
    $this->created = $created ?? ;
    $this->name = $name ?? ;
    $this->updated = $updated ?? ;
    $this->version = $version ?? ;
  }
}

type PipelineVersion = int;

class PipelineVersionNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PollForJobsInput {
  public ActionTypeId $action_type_id;
  public MaxBatchSize $max_batch_size;
  public QueryParamMap $query_param;

  public function __construct(shape(
  ?'action_type_id' => ActionTypeId,
  ?'max_batch_size' => MaxBatchSize,
  ?'query_param' => QueryParamMap,
  ) $s = shape()) {
    $this->action_type_id = $action_type_id ?? ;
    $this->max_batch_size = $max_batch_size ?? ;
    $this->query_param = $query_param ?? ;
  }
}

class PollForJobsOutput {
  public JobList $jobs;

  public function __construct(shape(
  ?'jobs' => JobList,
  ) $s = shape()) {
    $this->jobs = $jobs ?? ;
  }
}

class PollForThirdPartyJobsInput {
  public ActionTypeId $action_type_id;
  public MaxBatchSize $max_batch_size;

  public function __construct(shape(
  ?'action_type_id' => ActionTypeId,
  ?'max_batch_size' => MaxBatchSize,
  ) $s = shape()) {
    $this->action_type_id = $action_type_id ?? ;
    $this->max_batch_size = $max_batch_size ?? ;
  }
}

class PollForThirdPartyJobsOutput {
  public ThirdPartyJobList $jobs;

  public function __construct(shape(
  ?'jobs' => ThirdPartyJobList,
  ) $s = shape()) {
    $this->jobs = $jobs ?? ;
  }
}

class PutActionRevisionInput {
  public ActionName $action_name;
  public ActionRevision $action_revision;
  public PipelineName $pipeline_name;
  public StageName $stage_name;

  public function __construct(shape(
  ?'action_name' => ActionName,
  ?'action_revision' => ActionRevision,
  ?'pipeline_name' => PipelineName,
  ?'stage_name' => StageName,
  ) $s = shape()) {
    $this->action_name = $action_name ?? ;
    $this->action_revision = $action_revision ?? ;
    $this->pipeline_name = $pipeline_name ?? ;
    $this->stage_name = $stage_name ?? ;
  }
}

class PutActionRevisionOutput {
  public boolean $new_revision;
  public PipelineExecutionId $pipeline_execution_id;

  public function __construct(shape(
  ?'new_revision' => boolean,
  ?'pipeline_execution_id' => PipelineExecutionId,
  ) $s = shape()) {
    $this->new_revision = $new_revision ?? ;
    $this->pipeline_execution_id = $pipeline_execution_id ?? ;
  }
}

class PutApprovalResultInput {
  public ActionName $action_name;
  public PipelineName $pipeline_name;
  public ApprovalResult $result;
  public StageName $stage_name;
  public ApprovalToken $token;

  public function __construct(shape(
  ?'action_name' => ActionName,
  ?'pipeline_name' => PipelineName,
  ?'result' => ApprovalResult,
  ?'stage_name' => StageName,
  ?'token' => ApprovalToken,
  ) $s = shape()) {
    $this->action_name = $action_name ?? ;
    $this->pipeline_name = $pipeline_name ?? ;
    $this->result = $result ?? ;
    $this->stage_name = $stage_name ?? ;
    $this->token = $token ?? ;
  }
}

class PutApprovalResultOutput {
  public Timestamp $approved_at;

  public function __construct(shape(
  ?'approved_at' => Timestamp,
  ) $s = shape()) {
    $this->approved_at = $approved_at ?? ;
  }
}

class PutJobFailureResultInput {
  public FailureDetails $failure_details;
  public JobId $job_id;

  public function __construct(shape(
  ?'failure_details' => FailureDetails,
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->failure_details = $failure_details ?? ;
    $this->job_id = $job_id ?? ;
  }
}

class PutJobSuccessResultInput {
  public ContinuationToken $continuation_token;
  public CurrentRevision $current_revision;
  public ExecutionDetails $execution_details;
  public JobId $job_id;
  public OutputVariablesMap $output_variables;

  public function __construct(shape(
  ?'continuation_token' => ContinuationToken,
  ?'current_revision' => CurrentRevision,
  ?'execution_details' => ExecutionDetails,
  ?'job_id' => JobId,
  ?'output_variables' => OutputVariablesMap,
  ) $s = shape()) {
    $this->continuation_token = $continuation_token ?? ;
    $this->current_revision = $current_revision ?? ;
    $this->execution_details = $execution_details ?? ;
    $this->job_id = $job_id ?? ;
    $this->output_variables = $output_variables ?? ;
  }
}

class PutThirdPartyJobFailureResultInput {
  public ClientToken $client_token;
  public FailureDetails $failure_details;
  public ThirdPartyJobId $job_id;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'failure_details' => FailureDetails,
  ?'job_id' => ThirdPartyJobId,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->failure_details = $failure_details ?? ;
    $this->job_id = $job_id ?? ;
  }
}

class PutThirdPartyJobSuccessResultInput {
  public ClientToken $client_token;
  public ContinuationToken $continuation_token;
  public CurrentRevision $current_revision;
  public ExecutionDetails $execution_details;
  public ThirdPartyJobId $job_id;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'continuation_token' => ContinuationToken,
  ?'current_revision' => CurrentRevision,
  ?'execution_details' => ExecutionDetails,
  ?'job_id' => ThirdPartyJobId,
  ) $s = shape()) {
    $this->client_token = $client_token ?? ;
    $this->continuation_token = $continuation_token ?? ;
    $this->current_revision = $current_revision ?? ;
    $this->execution_details = $execution_details ?? ;
    $this->job_id = $job_id ?? ;
  }
}

class PutWebhookInput {
  public TagList $tags;
  public WebhookDefinition $webhook;

  public function __construct(shape(
  ?'tags' => TagList,
  ?'webhook' => WebhookDefinition,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
    $this->webhook = $webhook ?? ;
  }
}

class PutWebhookOutput {
  public ListWebhookItem $webhook;

  public function __construct(shape(
  ?'webhook' => ListWebhookItem,
  ) $s = shape()) {
    $this->webhook = $webhook ?? ;
  }
}

type QueryParamMap = dict<ActionConfigurationKey, ActionConfigurationQueryableValue>;

class RegisterWebhookWithThirdPartyInput {
  public WebhookName $webhook_name;

  public function __construct(shape(
  ?'webhook_name' => WebhookName,
  ) $s = shape()) {
    $this->webhook_name = $webhook_name ?? ;
  }
}

class RegisterWebhookWithThirdPartyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ResolvedActionConfigurationMap = dict<String, String>;

type ResourceArn = string;

class ResourceNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RetryStageExecutionInput {
  public PipelineExecutionId $pipeline_execution_id;
  public PipelineName $pipeline_name;
  public StageRetryMode $retry_mode;
  public StageName $stage_name;

  public function __construct(shape(
  ?'pipeline_execution_id' => PipelineExecutionId,
  ?'pipeline_name' => PipelineName,
  ?'retry_mode' => StageRetryMode,
  ?'stage_name' => StageName,
  ) $s = shape()) {
    $this->pipeline_execution_id = $pipeline_execution_id ?? ;
    $this->pipeline_name = $pipeline_name ?? ;
    $this->retry_mode = $retry_mode ?? ;
    $this->stage_name = $stage_name ?? ;
  }
}

class RetryStageExecutionOutput {
  public PipelineExecutionId $pipeline_execution_id;

  public function __construct(shape(
  ?'pipeline_execution_id' => PipelineExecutionId,
  ) $s = shape()) {
    $this->pipeline_execution_id = $pipeline_execution_id ?? ;
  }
}

type Revision = string;

type RevisionChangeIdentifier = string;

type RevisionSummary = string;

type RoleArn = string;

class S3ArtifactLocation {
  public S3BucketName $bucket_name;
  public S3ObjectKey $object_key;

  public function __construct(shape(
  ?'bucket_name' => S3BucketName,
  ?'object_key' => S3ObjectKey,
  ) $s = shape()) {
    $this->bucket_name = $bucket_name ?? ;
    $this->object_key = $object_key ?? ;
  }
}

type S3Bucket = string;

type S3BucketName = string;

type S3Key = string;

class S3Location {
  public S3Bucket $bucket;
  public S3Key $key;

  public function __construct(shape(
  ?'bucket' => S3Bucket,
  ?'key' => S3Key,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->key = $key ?? ;
  }
}

type S3ObjectKey = string;

type SecretAccessKey = string;

type SessionToken = string;

class SourceRevision {
  public ActionName $action_name;
  public Revision $revision_id;
  public RevisionSummary $revision_summary;
  public Url $revision_url;

  public function __construct(shape(
  ?'action_name' => ActionName,
  ?'revision_id' => Revision,
  ?'revision_summary' => RevisionSummary,
  ?'revision_url' => Url,
  ) $s = shape()) {
    $this->action_name = $action_name ?? ;
    $this->revision_id = $revision_id ?? ;
    $this->revision_summary = $revision_summary ?? ;
    $this->revision_url = $revision_url ?? ;
  }
}

type SourceRevisionList = vec<SourceRevision>;

type StageActionDeclarationList = vec<ActionDeclaration>;

type StageBlockerDeclarationList = vec<BlockerDeclaration>;

class StageContext {
  public StageName $name;

  public function __construct(shape(
  ?'name' => StageName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class StageDeclaration {
  public StageActionDeclarationList $actions;
  public StageBlockerDeclarationList $blockers;
  public StageName $name;

  public function __construct(shape(
  ?'actions' => StageActionDeclarationList,
  ?'blockers' => StageBlockerDeclarationList,
  ?'name' => StageName,
  ) $s = shape()) {
    $this->actions = $actions ?? ;
    $this->blockers = $blockers ?? ;
    $this->name = $name ?? ;
  }
}

class StageExecution {
  public PipelineExecutionId $pipeline_execution_id;
  public StageExecutionStatus $status;

  public function __construct(shape(
  ?'pipeline_execution_id' => PipelineExecutionId,
  ?'status' => StageExecutionStatus,
  ) $s = shape()) {
    $this->pipeline_execution_id = $pipeline_execution_id ?? ;
    $this->status = $status ?? ;
  }
}

type StageExecutionStatus = string;

type StageName = string;

class StageNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StageNotRetryableException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type StageRetryMode = string;

class StageState {
  public ActionStateList $action_states;
  public TransitionState $inbound_transition_state;
  public StageExecution $latest_execution;
  public StageName $stage_name;

  public function __construct(shape(
  ?'action_states' => ActionStateList,
  ?'inbound_transition_state' => TransitionState,
  ?'latest_execution' => StageExecution,
  ?'stage_name' => StageName,
  ) $s = shape()) {
    $this->action_states = $action_states ?? ;
    $this->inbound_transition_state = $inbound_transition_state ?? ;
    $this->latest_execution = $latest_execution ?? ;
    $this->stage_name = $stage_name ?? ;
  }
}

type StageStateList = vec<StageState>;

type StageTransitionType = string;

class StartPipelineExecutionInput {
  public ClientRequestToken $client_request_token;
  public PipelineName $name;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'name' => PipelineName,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->name = $name ?? ;
  }
}

class StartPipelineExecutionOutput {
  public PipelineExecutionId $pipeline_execution_id;

  public function __construct(shape(
  ?'pipeline_execution_id' => PipelineExecutionId,
  ) $s = shape()) {
    $this->pipeline_execution_id = $pipeline_execution_id ?? ;
  }
}

class StopExecutionTrigger {
  public StopPipelineExecutionReason $reason;

  public function __construct(shape(
  ?'reason' => StopPipelineExecutionReason,
  ) $s = shape()) {
    $this->reason = $reason ?? ;
  }
}

class StopPipelineExecutionInput {
  public boolean $abandon;
  public PipelineExecutionId $pipeline_execution_id;
  public PipelineName $pipeline_name;
  public StopPipelineExecutionReason $reason;

  public function __construct(shape(
  ?'abandon' => boolean,
  ?'pipeline_execution_id' => PipelineExecutionId,
  ?'pipeline_name' => PipelineName,
  ?'reason' => StopPipelineExecutionReason,
  ) $s = shape()) {
    $this->abandon = $abandon ?? ;
    $this->pipeline_execution_id = $pipeline_execution_id ?? ;
    $this->pipeline_name = $pipeline_name ?? ;
    $this->reason = $reason ?? ;
  }
}

class StopPipelineExecutionOutput {
  public PipelineExecutionId $pipeline_execution_id;

  public function __construct(shape(
  ?'pipeline_execution_id' => PipelineExecutionId,
  ) $s = shape()) {
    $this->pipeline_execution_id = $pipeline_execution_id ?? ;
  }
}

type StopPipelineExecutionReason = string;

type String = string;

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

class TagResourceInput {
  public ResourceArn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class TagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class ThirdPartyJob {
  public ClientId $client_id;
  public JobId $job_id;

  public function __construct(shape(
  ?'client_id' => ClientId,
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->client_id = $client_id ?? ;
    $this->job_id = $job_id ?? ;
  }
}

class ThirdPartyJobData {
  public ActionConfiguration $action_configuration;
  public ActionTypeId $action_type_id;
  public AWSSessionCredentials $artifact_credentials;
  public ContinuationToken $continuation_token;
  public EncryptionKey $encryption_key;
  public ArtifactList $input_artifacts;
  public ArtifactList $output_artifacts;
  public PipelineContext $pipeline_context;

  public function __construct(shape(
  ?'action_configuration' => ActionConfiguration,
  ?'action_type_id' => ActionTypeId,
  ?'artifact_credentials' => AWSSessionCredentials,
  ?'continuation_token' => ContinuationToken,
  ?'encryption_key' => EncryptionKey,
  ?'input_artifacts' => ArtifactList,
  ?'output_artifacts' => ArtifactList,
  ?'pipeline_context' => PipelineContext,
  ) $s = shape()) {
    $this->action_configuration = $action_configuration ?? ;
    $this->action_type_id = $action_type_id ?? ;
    $this->artifact_credentials = $artifact_credentials ?? ;
    $this->continuation_token = $continuation_token ?? ;
    $this->encryption_key = $encryption_key ?? ;
    $this->input_artifacts = $input_artifacts ?? ;
    $this->output_artifacts = $output_artifacts ?? ;
    $this->pipeline_context = $pipeline_context ?? ;
  }
}

class ThirdPartyJobDetails {
  public ThirdPartyJobData $data;
  public ThirdPartyJobId $id;
  public Nonce $nonce;

  public function __construct(shape(
  ?'data' => ThirdPartyJobData,
  ?'id' => ThirdPartyJobId,
  ?'nonce' => Nonce,
  ) $s = shape()) {
    $this->data = $data ?? ;
    $this->id = $id ?? ;
    $this->nonce = $nonce ?? ;
  }
}

type ThirdPartyJobId = string;

type ThirdPartyJobList = vec<ThirdPartyJob>;

type Time = int;

type Timestamp = int;

class TooManyTagsException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TransitionState {
  public DisabledReason $disabled_reason;
  public Enabled $enabled;
  public LastChangedAt $last_changed_at;
  public LastChangedBy $last_changed_by;

  public function __construct(shape(
  ?'disabled_reason' => DisabledReason,
  ?'enabled' => Enabled,
  ?'last_changed_at' => LastChangedAt,
  ?'last_changed_by' => LastChangedBy,
  ) $s = shape()) {
    $this->disabled_reason = $disabled_reason ?? ;
    $this->enabled = $enabled ?? ;
    $this->last_changed_at = $last_changed_at ?? ;
    $this->last_changed_by = $last_changed_by ?? ;
  }
}

type TriggerDetail = string;

type TriggerType = string;

class UntagResourceInput {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdatePipelineInput {
  public PipelineDeclaration $pipeline;

  public function __construct(shape(
  ?'pipeline' => PipelineDeclaration,
  ) $s = shape()) {
    $this->pipeline = $pipeline ?? ;
  }
}

class UpdatePipelineOutput {
  public PipelineDeclaration $pipeline;

  public function __construct(shape(
  ?'pipeline' => PipelineDeclaration,
  ) $s = shape()) {
    $this->pipeline = $pipeline ?? ;
  }
}

type Url = string;

type UrlTemplate = string;

class ValidationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Version = string;

type WebhookArn = string;

class WebhookAuthConfiguration {
  public WebhookAuthConfigurationAllowedIPRange $allowed_ip_range;
  public WebhookAuthConfigurationSecretToken $secret_token;

  public function __construct(shape(
  ?'allowed_ip_range' => WebhookAuthConfigurationAllowedIPRange,
  ?'secret_token' => WebhookAuthConfigurationSecretToken,
  ) $s = shape()) {
    $this->allowed_ip_range = $allowed_ip_range ?? ;
    $this->secret_token = $secret_token ?? ;
  }
}

type WebhookAuthConfigurationAllowedIPRange = string;

type WebhookAuthConfigurationSecretToken = string;

type WebhookAuthenticationType = string;

class WebhookDefinition {
  public WebhookAuthenticationType $authentication;
  public WebhookAuthConfiguration $authentication_configuration;
  public WebhookFilters $filters;
  public WebhookName $name;
  public ActionName $target_action;
  public PipelineName $target_pipeline;

  public function __construct(shape(
  ?'authentication' => WebhookAuthenticationType,
  ?'authentication_configuration' => WebhookAuthConfiguration,
  ?'filters' => WebhookFilters,
  ?'name' => WebhookName,
  ?'target_action' => ActionName,
  ?'target_pipeline' => PipelineName,
  ) $s = shape()) {
    $this->authentication = $authentication ?? ;
    $this->authentication_configuration = $authentication_configuration ?? ;
    $this->filters = $filters ?? ;
    $this->name = $name ?? ;
    $this->target_action = $target_action ?? ;
    $this->target_pipeline = $target_pipeline ?? ;
  }
}

type WebhookErrorCode = string;

type WebhookErrorMessage = string;

class WebhookFilterRule {
  public JsonPath $json_path;
  public MatchEquals $match_equals;

  public function __construct(shape(
  ?'json_path' => JsonPath,
  ?'match_equals' => MatchEquals,
  ) $s = shape()) {
    $this->json_path = $json_path ?? ;
    $this->match_equals = $match_equals ?? ;
  }
}

type WebhookFilters = vec<WebhookFilterRule>;

type WebhookLastTriggered = int;

type WebhookList = vec<ListWebhookItem>;

type WebhookName = string;

class WebhookNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type WebhookUrl = string;


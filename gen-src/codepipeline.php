<?hh // strict
namespace slack\aws\codepipeline;

interface CodePipeline {
  public function AcknowledgeJob(AcknowledgeJobInput) Awaitable<Errors\Result<AcknowledgeJobOutput>>;
  public function AcknowledgeThirdPartyJob(AcknowledgeThirdPartyJobInput) Awaitable<Errors\Result<AcknowledgeThirdPartyJobOutput>>;
  public function CreateCustomActionType(CreateCustomActionTypeInput) Awaitable<Errors\Result<CreateCustomActionTypeOutput>>;
  public function CreatePipeline(CreatePipelineInput) Awaitable<Errors\Result<CreatePipelineOutput>>;
  public function DeleteCustomActionType(DeleteCustomActionTypeInput) Awaitable<Errors\Error>;
  public function DeletePipeline(DeletePipelineInput) Awaitable<Errors\Error>;
  public function DeleteWebhook(DeleteWebhookInput) Awaitable<Errors\Result<DeleteWebhookOutput>>;
  public function DeregisterWebhookWithThirdParty(DeregisterWebhookWithThirdPartyInput) Awaitable<Errors\Result<DeregisterWebhookWithThirdPartyOutput>>;
  public function DisableStageTransition(DisableStageTransitionInput) Awaitable<Errors\Error>;
  public function EnableStageTransition(EnableStageTransitionInput) Awaitable<Errors\Error>;
  public function GetJobDetails(GetJobDetailsInput) Awaitable<Errors\Result<GetJobDetailsOutput>>;
  public function GetPipeline(GetPipelineInput) Awaitable<Errors\Result<GetPipelineOutput>>;
  public function GetPipelineExecution(GetPipelineExecutionInput) Awaitable<Errors\Result<GetPipelineExecutionOutput>>;
  public function GetPipelineState(GetPipelineStateInput) Awaitable<Errors\Result<GetPipelineStateOutput>>;
  public function GetThirdPartyJobDetails(GetThirdPartyJobDetailsInput) Awaitable<Errors\Result<GetThirdPartyJobDetailsOutput>>;
  public function ListActionExecutions(ListActionExecutionsInput) Awaitable<Errors\Result<ListActionExecutionsOutput>>;
  public function ListActionTypes(ListActionTypesInput) Awaitable<Errors\Result<ListActionTypesOutput>>;
  public function ListPipelineExecutions(ListPipelineExecutionsInput) Awaitable<Errors\Result<ListPipelineExecutionsOutput>>;
  public function ListPipelines(ListPipelinesInput) Awaitable<Errors\Result<ListPipelinesOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput) Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function ListWebhooks(ListWebhooksInput) Awaitable<Errors\Result<ListWebhooksOutput>>;
  public function PollForJobs(PollForJobsInput) Awaitable<Errors\Result<PollForJobsOutput>>;
  public function PollForThirdPartyJobs(PollForThirdPartyJobsInput) Awaitable<Errors\Result<PollForThirdPartyJobsOutput>>;
  public function PutActionRevision(PutActionRevisionInput) Awaitable<Errors\Result<PutActionRevisionOutput>>;
  public function PutApprovalResult(PutApprovalResultInput) Awaitable<Errors\Result<PutApprovalResultOutput>>;
  public function PutJobFailureResult(PutJobFailureResultInput) Awaitable<Errors\Error>;
  public function PutJobSuccessResult(PutJobSuccessResultInput) Awaitable<Errors\Error>;
  public function PutThirdPartyJobFailureResult(PutThirdPartyJobFailureResultInput) Awaitable<Errors\Error>;
  public function PutThirdPartyJobSuccessResult(PutThirdPartyJobSuccessResultInput) Awaitable<Errors\Error>;
  public function PutWebhook(PutWebhookInput) Awaitable<Errors\Result<PutWebhookOutput>>;
  public function RegisterWebhookWithThirdParty(RegisterWebhookWithThirdPartyInput) Awaitable<Errors\Result<RegisterWebhookWithThirdPartyOutput>>;
  public function RetryStageExecution(RetryStageExecutionInput) Awaitable<Errors\Result<RetryStageExecutionOutput>>;
  public function StartPipelineExecution(StartPipelineExecutionInput) Awaitable<Errors\Result<StartPipelineExecutionOutput>>;
  public function StopPipelineExecution(StopPipelineExecutionInput) Awaitable<Errors\Result<StopPipelineExecutionOutput>>;
  public function TagResource(TagResourceInput) Awaitable<Errors\Result<TagResourceOutput>>;
  public function UntagResource(UntagResourceInput) Awaitable<Errors\Result<UntagResourceOutput>>;
  public function UpdatePipeline(UpdatePipelineInput) Awaitable<Errors\Result<UpdatePipelineOutput>>;
}

class AWSRegionName {
}

class AWSSessionCredentials {
  public AccessKeyId $access_key_id;
  public SecretAccessKey $secret_access_key;
  public SessionToken $session_token;
}

class AccessKeyId {
}

class AccountId {
}

class AcknowledgeJobInput {
  public JobId $job_id;
  public Nonce $nonce;
}

class AcknowledgeJobOutput {
  public JobStatus $status;
}

class AcknowledgeThirdPartyJobInput {
  public ClientToken $client_token;
  public ThirdPartyJobId $job_id;
  public Nonce $nonce;
}

class AcknowledgeThirdPartyJobOutput {
  public JobStatus $status;
}

class ActionCategory {
}

class ActionConfiguration {
  public ActionConfigurationMap $configuration;
}

class ActionConfigurationKey {
}

class ActionConfigurationMap {
}

class ActionConfigurationProperty {
  public Description $description;
  public boolean $key;
  public ActionConfigurationKey $name;
  public boolean $queryable;
  public boolean $required;
  public boolean $secret;
  public ActionConfigurationPropertyType $type;
}

class ActionConfigurationPropertyList {
}

class ActionConfigurationPropertyType {
}

class ActionConfigurationQueryableValue {
}

class ActionConfigurationValue {
}

class ActionContext {
  public ActionExecutionId $action_execution_id;
  public ActionName $name;
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
}

class ActionExecutionDetailList {
}

class ActionExecutionFilter {
  public PipelineExecutionId $pipeline_execution_id;
}

class ActionExecutionId {
}

class ActionExecutionInput {
  public ActionTypeId $action_type_id;
  public ActionConfigurationMap $configuration;
  public ArtifactDetailList $input_artifacts;
  public ActionNamespace $namespace;
  public AWSRegionName $region;
  public ResolvedActionConfigurationMap $resolved_configuration;
  public RoleArn $role_arn;
}

class ActionExecutionOutput {
  public ActionExecutionResult $execution_result;
  public ArtifactDetailList $output_artifacts;
  public OutputVariablesMap $output_variables;
}

class ActionExecutionResult {
  public ExternalExecutionId $external_execution_id;
  public ExternalExecutionSummary $external_execution_summary;
  public Url $external_execution_url;
}

class ActionExecutionStatus {
}

class ActionExecutionToken {
}

class ActionName {
}

class ActionNamespace {
}

class ActionNotFoundException {
}

class ActionOwner {
}

class ActionProvider {
}

class ActionRevision {
  public Timestamp $created;
  public RevisionChangeIdentifier $revision_change_id;
  public Revision $revision_id;
}

class ActionRunOrder {
}

class ActionState {
  public ActionName $action_name;
  public ActionRevision $current_revision;
  public Url $entity_url;
  public ActionExecution $latest_execution;
  public Url $revision_url;
}

class ActionStateList {
}

class ActionType {
  public ActionConfigurationPropertyList $action_configuration_properties;
  public ActionTypeId $id;
  public ArtifactDetails $input_artifact_details;
  public ArtifactDetails $output_artifact_details;
  public ActionTypeSettings $settings;
}

class ActionTypeId {
  public ActionCategory $category;
  public ActionOwner $owner;
  public ActionProvider $provider;
  public Version $version;
}

class ActionTypeList {
}

class ActionTypeNotFoundException {
}

class ActionTypeSettings {
  public UrlTemplate $entity_url_template;
  public UrlTemplate $execution_url_template;
  public UrlTemplate $revision_url_template;
  public Url $third_party_configuration_url;
}

class ApprovalAlreadyCompletedException {
}

class ApprovalResult {
  public ApprovalStatus $status;
  public ApprovalSummary $summary;
}

class ApprovalStatus {
}

class ApprovalSummary {
}

class ApprovalToken {
}

class Artifact {
  public ArtifactLocation $location;
  public ArtifactName $name;
  public Revision $revision;
}

class ArtifactDetail {
  public ArtifactName $name;
  public S3Location $s_3_location;
}

class ArtifactDetailList {
}

class ArtifactDetails {
  public MaximumArtifactCount $maximum_count;
  public MinimumArtifactCount $minimum_count;
}

class ArtifactList {
}

class ArtifactLocation {
  public S3ArtifactLocation $s_3_location;
  public ArtifactLocationType $type;
}

class ArtifactLocationType {
}

class ArtifactName {
}

class ArtifactRevision {
  public Timestamp $created;
  public ArtifactName $name;
  public RevisionChangeIdentifier $revision_change_identifier;
  public Revision $revision_id;
  public RevisionSummary $revision_summary;
  public Url $revision_url;
}

class ArtifactRevisionList {
}

class ArtifactStore {
  public EncryptionKey $encryption_key;
  public ArtifactStoreLocation $location;
  public ArtifactStoreType $type;
}

class ArtifactStoreLocation {
}

class ArtifactStoreMap {
}

class ArtifactStoreType {
}

class BlockerDeclaration {
  public BlockerName $name;
  public BlockerType $type;
}

class BlockerName {
}

class BlockerType {
}

class Boolean {
}

class ClientId {
}

class ClientRequestToken {
}

class ClientToken {
}

class Code {
}

class ConcurrentModificationException {
  public Message $message;
}

class ContinuationToken {
}

class CreateCustomActionTypeInput {
  public ActionCategory $category;
  public ActionConfigurationPropertyList $configuration_properties;
  public ArtifactDetails $input_artifact_details;
  public ArtifactDetails $output_artifact_details;
  public ActionProvider $provider;
  public ActionTypeSettings $settings;
  public TagList $tags;
  public Version $version;
}

class CreateCustomActionTypeOutput {
  public ActionType $action_type;
  public TagList $tags;
}

class CreatePipelineInput {
  public PipelineDeclaration $pipeline;
  public TagList $tags;
}

class CreatePipelineOutput {
  public PipelineDeclaration $pipeline;
  public TagList $tags;
}

class CurrentRevision {
  public RevisionChangeIdentifier $change_identifier;
  public Time $created;
  public Revision $revision;
  public RevisionSummary $revision_summary;
}

class DeleteCustomActionTypeInput {
  public ActionCategory $category;
  public ActionProvider $provider;
  public Version $version;
}

class DeletePipelineInput {
  public PipelineName $name;
}

class DeleteWebhookInput {
  public WebhookName $name;
}

class DeleteWebhookOutput {
}

class DeregisterWebhookWithThirdPartyInput {
  public WebhookName $webhook_name;
}

class DeregisterWebhookWithThirdPartyOutput {
}

class Description {
}

class DisableStageTransitionInput {
  public PipelineName $pipeline_name;
  public DisabledReason $reason;
  public StageName $stage_name;
  public StageTransitionType $transition_type;
}

class DisabledReason {
}

class DuplicatedStopRequestException {
  public Message $message;
}

class EnableStageTransitionInput {
  public PipelineName $pipeline_name;
  public StageName $stage_name;
  public StageTransitionType $transition_type;
}

class Enabled {
}

class EncryptionKey {
  public EncryptionKeyId $id;
  public EncryptionKeyType $type;
}

class EncryptionKeyId {
}

class EncryptionKeyType {
}

class ErrorDetails {
  public Code $code;
  public Message $message;
}

class ExecutionDetails {
  public ExecutionId $external_execution_id;
  public Percentage $percent_complete;
  public ExecutionSummary $summary;
}

class ExecutionId {
}

class ExecutionSummary {
}

class ExecutionTrigger {
  public TriggerDetail $trigger_detail;
  public TriggerType $trigger_type;
}

class ExternalExecutionId {
}

class ExternalExecutionSummary {
}

class FailureDetails {
  public ExecutionId $external_execution_id;
  public Message $message;
  public FailureType $type;
}

class FailureType {
}

class GetJobDetailsInput {
  public JobId $job_id;
}

class GetJobDetailsOutput {
  public JobDetails $job_details;
}

class GetPipelineExecutionInput {
  public PipelineExecutionId $pipeline_execution_id;
  public PipelineName $pipeline_name;
}

class GetPipelineExecutionOutput {
  public PipelineExecution $pipeline_execution;
}

class GetPipelineInput {
  public PipelineName $name;
  public PipelineVersion $version;
}

class GetPipelineOutput {
  public PipelineMetadata $metadata;
  public PipelineDeclaration $pipeline;
}

class GetPipelineStateInput {
  public PipelineName $name;
}

class GetPipelineStateOutput {
  public Timestamp $created;
  public PipelineName $pipeline_name;
  public PipelineVersion $pipeline_version;
  public StageStateList $stage_states;
  public Timestamp $updated;
}

class GetThirdPartyJobDetailsInput {
  public ClientToken $client_token;
  public ThirdPartyJobId $job_id;
}

class GetThirdPartyJobDetailsOutput {
  public ThirdPartyJobDetails $job_details;
}

class InputArtifact {
  public ArtifactName $name;
}

class InputArtifactList {
}

class InvalidActionDeclarationException {
}

class InvalidApprovalTokenException {
}

class InvalidArnException {
  public Message $message;
}

class InvalidBlockerDeclarationException {
}

class InvalidClientTokenException {
}

class InvalidJobException {
}

class InvalidJobStateException {
}

class InvalidNextTokenException {
}

class InvalidNonceException {
}

class InvalidStageDeclarationException {
}

class InvalidStructureException {
}

class InvalidTagsException {
  public Message $message;
}

class InvalidWebhookAuthenticationParametersException {
}

class InvalidWebhookFilterPatternException {
}

class Job {
  public AccountId $account_id;
  public JobData $data;
  public JobId $id;
  public Nonce $nonce;
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
}

class JobDetails {
  public AccountId $account_id;
  public JobData $data;
  public JobId $id;
}

class JobId {
}

class JobList {
}

class JobNotFoundException {
}

class JobStatus {
}

class JsonPath {
}

class LastChangedAt {
}

class LastChangedBy {
}

class LastUpdatedBy {
}

class LimitExceededException {
}

class ListActionExecutionsInput {
  public ActionExecutionFilter $filter;
  public MaxResults $max_results;
  public NextToken $next_token;
  public PipelineName $pipeline_name;
}

class ListActionExecutionsOutput {
  public ActionExecutionDetailList $action_execution_details;
  public NextToken $next_token;
}

class ListActionTypesInput {
  public ActionOwner $action_owner_filter;
  public NextToken $next_token;
}

class ListActionTypesOutput {
  public ActionTypeList $action_types;
  public NextToken $next_token;
}

class ListPipelineExecutionsInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public PipelineName $pipeline_name;
}

class ListPipelineExecutionsOutput {
  public NextToken $next_token;
  public PipelineExecutionSummaryList $pipeline_execution_summaries;
}

class ListPipelinesInput {
  public NextToken $next_token;
}

class ListPipelinesOutput {
  public NextToken $next_token;
  public PipelineList $pipelines;
}

class ListTagsForResourceInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceArn $resource_arn;
}

class ListTagsForResourceOutput {
  public NextToken $next_token;
  public TagList $tags;
}

class ListWebhookItem {
  public WebhookArn $arn;
  public WebhookDefinition $definition;
  public WebhookErrorCode $error_code;
  public WebhookErrorMessage $error_message;
  public WebhookLastTriggered $last_triggered;
  public TagList $tags;
  public WebhookUrl $url;
}

class ListWebhooksInput {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListWebhooksOutput {
  public NextToken $next_token;
  public WebhookList $webhooks;
}

class MatchEquals {
}

class MaxBatchSize {
}

class MaxResults {
}

class MaximumArtifactCount {
}

class Message {
}

class MinimumArtifactCount {
}

class NextToken {
}

class Nonce {
}

class NotLatestPipelineExecutionException {
}

class OutputArtifact {
  public ArtifactName $name;
}

class OutputArtifactList {
}

class OutputVariablesKey {
}

class OutputVariablesMap {
}

class OutputVariablesSizeExceededException {
  public Message $message;
}

class OutputVariablesValue {
}

class Percentage {
}

class PipelineArn {
}

class PipelineContext {
  public ActionContext $action;
  public PipelineArn $pipeline_arn;
  public PipelineExecutionId $pipeline_execution_id;
  public PipelineName $pipeline_name;
  public StageContext $stage;
}

class PipelineDeclaration {
  public ArtifactStore $artifact_store;
  public ArtifactStoreMap $artifact_stores;
  public PipelineName $name;
  public RoleArn $role_arn;
  public PipelineStageDeclarationList $stages;
  public PipelineVersion $version;
}

class PipelineExecution {
  public ArtifactRevisionList $artifact_revisions;
  public PipelineExecutionId $pipeline_execution_id;
  public PipelineName $pipeline_name;
  public PipelineVersion $pipeline_version;
  public PipelineExecutionStatus $status;
}

class PipelineExecutionId {
}

class PipelineExecutionNotFoundException {
}

class PipelineExecutionNotStoppableException {
  public Message $message;
}

class PipelineExecutionStatus {
}

class PipelineExecutionSummary {
  public Timestamp $last_update_time;
  public PipelineExecutionId $pipeline_execution_id;
  public SourceRevisionList $source_revisions;
  public Timestamp $start_time;
  public PipelineExecutionStatus $status;
  public StopExecutionTrigger $stop_trigger;
  public ExecutionTrigger $trigger;
}

class PipelineExecutionSummaryList {
}

class PipelineList {
}

class PipelineMetadata {
  public Timestamp $created;
  public PipelineArn $pipeline_arn;
  public Timestamp $updated;
}

class PipelineName {
}

class PipelineNameInUseException {
}

class PipelineNotFoundException {
}

class PipelineStageDeclarationList {
}

class PipelineSummary {
  public Timestamp $created;
  public PipelineName $name;
  public Timestamp $updated;
  public PipelineVersion $version;
}

class PipelineVersion {
}

class PipelineVersionNotFoundException {
}

class PollForJobsInput {
  public ActionTypeId $action_type_id;
  public MaxBatchSize $max_batch_size;
  public QueryParamMap $query_param;
}

class PollForJobsOutput {
  public JobList $jobs;
}

class PollForThirdPartyJobsInput {
  public ActionTypeId $action_type_id;
  public MaxBatchSize $max_batch_size;
}

class PollForThirdPartyJobsOutput {
  public ThirdPartyJobList $jobs;
}

class PutActionRevisionInput {
  public ActionName $action_name;
  public ActionRevision $action_revision;
  public PipelineName $pipeline_name;
  public StageName $stage_name;
}

class PutActionRevisionOutput {
  public boolean $new_revision;
  public PipelineExecutionId $pipeline_execution_id;
}

class PutApprovalResultInput {
  public ActionName $action_name;
  public PipelineName $pipeline_name;
  public ApprovalResult $result;
  public StageName $stage_name;
  public ApprovalToken $token;
}

class PutApprovalResultOutput {
  public Timestamp $approved_at;
}

class PutJobFailureResultInput {
  public FailureDetails $failure_details;
  public JobId $job_id;
}

class PutJobSuccessResultInput {
  public ContinuationToken $continuation_token;
  public CurrentRevision $current_revision;
  public ExecutionDetails $execution_details;
  public JobId $job_id;
  public OutputVariablesMap $output_variables;
}

class PutThirdPartyJobFailureResultInput {
  public ClientToken $client_token;
  public FailureDetails $failure_details;
  public ThirdPartyJobId $job_id;
}

class PutThirdPartyJobSuccessResultInput {
  public ClientToken $client_token;
  public ContinuationToken $continuation_token;
  public CurrentRevision $current_revision;
  public ExecutionDetails $execution_details;
  public ThirdPartyJobId $job_id;
}

class PutWebhookInput {
  public TagList $tags;
  public WebhookDefinition $webhook;
}

class PutWebhookOutput {
  public ListWebhookItem $webhook;
}

class QueryParamMap {
}

class RegisterWebhookWithThirdPartyInput {
  public WebhookName $webhook_name;
}

class RegisterWebhookWithThirdPartyOutput {
}

class ResolvedActionConfigurationMap {
}

class ResourceArn {
}

class ResourceNotFoundException {
}

class RetryStageExecutionInput {
  public PipelineExecutionId $pipeline_execution_id;
  public PipelineName $pipeline_name;
  public StageRetryMode $retry_mode;
  public StageName $stage_name;
}

class RetryStageExecutionOutput {
  public PipelineExecutionId $pipeline_execution_id;
}

class Revision {
}

class RevisionChangeIdentifier {
}

class RevisionSummary {
}

class RoleArn {
}

class S3ArtifactLocation {
  public S3BucketName $bucket_name;
  public S3ObjectKey $object_key;
}

class S3Bucket {
}

class S3BucketName {
}

class S3Key {
}

class S3Location {
  public S3Bucket $bucket;
  public S3Key $key;
}

class S3ObjectKey {
}

class SecretAccessKey {
}

class SessionToken {
}

class SourceRevision {
  public ActionName $action_name;
  public Revision $revision_id;
  public RevisionSummary $revision_summary;
  public Url $revision_url;
}

class SourceRevisionList {
}

class StageActionDeclarationList {
}

class StageBlockerDeclarationList {
}

class StageContext {
  public StageName $name;
}

class StageDeclaration {
  public StageActionDeclarationList $actions;
  public StageBlockerDeclarationList $blockers;
  public StageName $name;
}

class StageExecution {
  public PipelineExecutionId $pipeline_execution_id;
  public StageExecutionStatus $status;
}

class StageExecutionStatus {
}

class StageName {
}

class StageNotFoundException {
}

class StageNotRetryableException {
}

class StageRetryMode {
}

class StageState {
  public ActionStateList $action_states;
  public TransitionState $inbound_transition_state;
  public StageExecution $latest_execution;
  public StageName $stage_name;
}

class StageStateList {
}

class StageTransitionType {
}

class StartPipelineExecutionInput {
  public ClientRequestToken $client_request_token;
  public PipelineName $name;
}

class StartPipelineExecutionOutput {
  public PipelineExecutionId $pipeline_execution_id;
}

class StopExecutionTrigger {
  public StopPipelineExecutionReason $reason;
}

class StopPipelineExecutionInput {
  public boolean $abandon;
  public PipelineExecutionId $pipeline_execution_id;
  public PipelineName $pipeline_name;
  public StopPipelineExecutionReason $reason;
}

class StopPipelineExecutionOutput {
  public PipelineExecutionId $pipeline_execution_id;
}

class StopPipelineExecutionReason {
}

class String {
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

class TagResourceInput {
  public ResourceArn $resource_arn;
  public TagList $tags;
}

class TagResourceOutput {
}

class TagValue {
}

class ThirdPartyJob {
  public ClientId $client_id;
  public JobId $job_id;
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
}

class ThirdPartyJobDetails {
  public ThirdPartyJobData $data;
  public ThirdPartyJobId $id;
  public Nonce $nonce;
}

class ThirdPartyJobId {
}

class ThirdPartyJobList {
}

class Time {
}

class Timestamp {
}

class TooManyTagsException {
  public Message $message;
}

class TransitionState {
  public DisabledReason $disabled_reason;
  public Enabled $enabled;
  public LastChangedAt $last_changed_at;
  public LastChangedBy $last_changed_by;
}

class TriggerDetail {
}

class TriggerType {
}

class UntagResourceInput {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceOutput {
}

class UpdatePipelineInput {
  public PipelineDeclaration $pipeline;
}

class UpdatePipelineOutput {
  public PipelineDeclaration $pipeline;
}

class Url {
}

class UrlTemplate {
}

class ValidationException {
}

class Version {
}

class WebhookArn {
}

class WebhookAuthConfiguration {
  public WebhookAuthConfigurationAllowedIPRange $allowed_ip_range;
  public WebhookAuthConfigurationSecretToken $secret_token;
}

class WebhookAuthConfigurationAllowedIPRange {
}

class WebhookAuthConfigurationSecretToken {
}

class WebhookAuthenticationType {
}

class WebhookDefinition {
  public WebhookAuthenticationType $authentication;
  public WebhookAuthConfiguration $authentication_configuration;
  public WebhookFilters $filters;
  public WebhookName $name;
  public ActionName $target_action;
  public PipelineName $target_pipeline;
}

class WebhookErrorCode {
}

class WebhookErrorMessage {
}

class WebhookFilterRule {
  public JsonPath $json_path;
  public MatchEquals $match_equals;
}

class WebhookFilters {
}

class WebhookLastTriggered {
}

class WebhookList {
}

class WebhookName {
}

class WebhookNotFoundException {
}

class WebhookUrl {
}


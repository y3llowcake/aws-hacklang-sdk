<?hh // strict
namespace slack\aws\codepipeline;

interface CodePipeline {
  public function CreateCustomActionType(CreateCustomActionTypeInput) Awaitable<Errors\Result<CreateCustomActionTypeOutput>>;
  public function DeleteCustomActionType(DeleteCustomActionTypeInput) Awaitable<Errors\Error>;
  public function DeregisterWebhookWithThirdParty(DeregisterWebhookWithThirdPartyInput) Awaitable<Errors\Result<DeregisterWebhookWithThirdPartyOutput>>;
  public function GetPipeline(GetPipelineInput) Awaitable<Errors\Result<GetPipelineOutput>>;
  public function GetPipelineExecution(GetPipelineExecutionInput) Awaitable<Errors\Result<GetPipelineExecutionOutput>>;
  public function ListWebhooks(ListWebhooksInput) Awaitable<Errors\Result<ListWebhooksOutput>>;
  public function PutActionRevision(PutActionRevisionInput) Awaitable<Errors\Result<PutActionRevisionOutput>>;
  public function PutThirdPartyJobSuccessResult(PutThirdPartyJobSuccessResultInput) Awaitable<Errors\Error>;
  public function RegisterWebhookWithThirdParty(RegisterWebhookWithThirdPartyInput) Awaitable<Errors\Result<RegisterWebhookWithThirdPartyOutput>>;
  public function RetryStageExecution(RetryStageExecutionInput) Awaitable<Errors\Result<RetryStageExecutionOutput>>;
  public function UntagResource(UntagResourceInput) Awaitable<Errors\Result<UntagResourceOutput>>;
  public function GetPipelineState(GetPipelineStateInput) Awaitable<Errors\Result<GetPipelineStateOutput>>;
  public function ListActionTypes(ListActionTypesInput) Awaitable<Errors\Result<ListActionTypesOutput>>;
  public function PutApprovalResult(PutApprovalResultInput) Awaitable<Errors\Result<PutApprovalResultOutput>>;
  public function PutJobSuccessResult(PutJobSuccessResultInput) Awaitable<Errors\Error>;
  public function DeleteWebhook(DeleteWebhookInput) Awaitable<Errors\Result<DeleteWebhookOutput>>;
  public function ListPipelines(ListPipelinesInput) Awaitable<Errors\Result<ListPipelinesOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput) Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function StopPipelineExecution(StopPipelineExecutionInput) Awaitable<Errors\Result<StopPipelineExecutionOutput>>;
  public function AcknowledgeJob(AcknowledgeJobInput) Awaitable<Errors\Result<AcknowledgeJobOutput>>;
  public function ListActionExecutions(ListActionExecutionsInput) Awaitable<Errors\Result<ListActionExecutionsOutput>>;
  public function PutJobFailureResult(PutJobFailureResultInput) Awaitable<Errors\Error>;
  public function PutThirdPartyJobFailureResult(PutThirdPartyJobFailureResultInput) Awaitable<Errors\Error>;
  public function AcknowledgeThirdPartyJob(AcknowledgeThirdPartyJobInput) Awaitable<Errors\Result<AcknowledgeThirdPartyJobOutput>>;
  public function PutWebhook(PutWebhookInput) Awaitable<Errors\Result<PutWebhookOutput>>;
  public function DisableStageTransition(DisableStageTransitionInput) Awaitable<Errors\Error>;
  public function GetThirdPartyJobDetails(GetThirdPartyJobDetailsInput) Awaitable<Errors\Result<GetThirdPartyJobDetailsOutput>>;
  public function ListPipelineExecutions(ListPipelineExecutionsInput) Awaitable<Errors\Result<ListPipelineExecutionsOutput>>;
  public function TagResource(TagResourceInput) Awaitable<Errors\Result<TagResourceOutput>>;
  public function CreatePipeline(CreatePipelineInput) Awaitable<Errors\Result<CreatePipelineOutput>>;
  public function DeletePipeline(DeletePipelineInput) Awaitable<Errors\Error>;
  public function PollForThirdPartyJobs(PollForThirdPartyJobsInput) Awaitable<Errors\Result<PollForThirdPartyJobsOutput>>;
  public function EnableStageTransition(EnableStageTransitionInput) Awaitable<Errors\Error>;
  public function GetJobDetails(GetJobDetailsInput) Awaitable<Errors\Result<GetJobDetailsOutput>>;
  public function PollForJobs(PollForJobsInput) Awaitable<Errors\Result<PollForJobsOutput>>;
  public function StartPipelineExecution(StartPipelineExecutionInput) Awaitable<Errors\Result<StartPipelineExecutionOutput>>;
  public function UpdatePipeline(UpdatePipelineInput) Awaitable<Errors\Result<UpdatePipelineOutput>>;
}

class JobId {
}

class S3Bucket {
}

class S3Key {
}

class Url {
}

class AWSRegionName {
}

class BlockerDeclaration {
  public BlockerName $name;
  public BlockerType $type;
}

class CreatePipelineInput {
  public PipelineDeclaration $pipeline;
  public TagList $tags;
}

class SessionToken {
}

class DeleteWebhookInput {
  public WebhookName $name;
}

class LimitExceededException {
}

class OutputVariablesSizeExceededException {
  public Message $message;
}

class SourceRevisionList {
}

class TagKey {
}

class UntagResourceOutput {
}

class ValidationException {
}

class AcknowledgeThirdPartyJobInput {
  public ThirdPartyJobId $job_id;
  public Nonce $nonce;
  public ClientToken $client_token;
}

class AcknowledgeThirdPartyJobOutput {
  public JobStatus $status;
}

class ApprovalResult {
  public ApprovalSummary $summary;
  public ApprovalStatus $status;
}

class Enabled {
}

class PollForThirdPartyJobsOutput {
  public ThirdPartyJobList $jobs;
}

class StageTransitionType {
}

class ListActionTypesOutput {
  public ActionTypeList $action_types;
  public NextToken $next_token;
}

class PipelineNameInUseException {
}

class AcknowledgeJobInput {
  public JobId $job_id;
  public Nonce $nonce;
}

class CreatePipelineOutput {
  public TagList $tags;
  public PipelineDeclaration $pipeline;
}

class ExecutionId {
}

class StopPipelineExecutionOutput {
  public PipelineExecutionId $pipeline_execution_id;
}

class ArtifactName {
}

class DisabledReason {
}

class PutActionRevisionInput {
  public PipelineName $pipeline_name;
  public StageName $stage_name;
  public ActionName $action_name;
  public ActionRevision $action_revision;
}

class StageDeclaration {
  public StageBlockerDeclarationList $blockers;
  public StageActionDeclarationList $actions;
  public StageName $name;
}

class ActionCategory {
}

class LastUpdatedBy {
}

class PipelineExecutionNotStoppableException {
  public Message $message;
}

class LastChangedAt {
}

class MaximumArtifactCount {
}

class Message {
}

class PipelineExecutionId {
}

class TriggerDetail {
}

class ActionDeclaration {
  public OutputArtifactList $output_artifacts;
  public ActionNamespace $namespace;
  public ActionName $name;
  public ActionRunOrder $run_order;
  public ActionConfigurationMap $configuration;
  public AWSRegionName $region;
  public ActionTypeId $action_type_id;
  public InputArtifactList $input_artifacts;
  public RoleArn $role_arn;
}

class GetPipelineExecutionInput {
  public PipelineName $pipeline_name;
  public PipelineExecutionId $pipeline_execution_id;
}

class InvalidJobStateException {
}

class WebhookAuthConfiguration {
  public WebhookAuthConfigurationAllowedIPRange $allowed_ip_range;
  public WebhookAuthConfigurationSecretToken $secret_token;
}

class EncryptionKeyType {
}

class GetJobDetailsInput {
  public JobId $job_id;
}

class InvalidStageDeclarationException {
}

class StageBlockerDeclarationList {
}

class StopPipelineExecutionReason {
}

class ActionConfigurationProperty {
  public boolean $queryable;
  public Description $description;
  public ActionConfigurationPropertyType $type;
  public ActionConfigurationKey $name;
  public boolean $required;
  public boolean $key;
  public boolean $secret;
}

class ArtifactStore {
  public ArtifactStoreType $type;
  public ArtifactStoreLocation $location;
  public EncryptionKey $encryption_key;
}

class BlockerName {
}

class S3ArtifactLocation {
  public S3BucketName $bucket_name;
  public S3ObjectKey $object_key;
}

class StageActionDeclarationList {
}

class TagList {
}

class UpdatePipelineInput {
  public PipelineDeclaration $pipeline;
}

class InvalidClientTokenException {
}

class ListPipelinesOutput {
  public PipelineList $pipelines;
  public NextToken $next_token;
}

class PipelineVersion {
}

class ArtifactRevision {
  public ArtifactName $name;
  public Revision $revision_id;
  public RevisionChangeIdentifier $revision_change_identifier;
  public RevisionSummary $revision_summary;
  public Timestamp $created;
  public Url $revision_url;
}

class ListWebhooksOutput {
  public WebhookList $webhooks;
  public NextToken $next_token;
}

class ApprovalToken {
}

class InputArtifactList {
}

class InvalidNonceException {
}

class WebhookErrorMessage {
}

class EnableStageTransitionInput {
  public PipelineName $pipeline_name;
  public StageName $stage_name;
  public StageTransitionType $transition_type;
}

class NextToken {
}

class StartPipelineExecutionInput {
  public PipelineName $name;
  public ClientRequestToken $client_request_token;
}

class ArtifactStoreLocation {
}

class PipelineExecution {
  public PipelineName $pipeline_name;
  public PipelineVersion $pipeline_version;
  public PipelineExecutionId $pipeline_execution_id;
  public PipelineExecutionStatus $status;
  public ArtifactRevisionList $artifact_revisions;
}

class PutJobFailureResultInput {
  public JobId $job_id;
  public FailureDetails $failure_details;
}

class ActionContext {
  public ActionName $name;
  public ActionExecutionId $action_execution_id;
}

class PipelineContext {
  public PipelineName $pipeline_name;
  public StageContext $stage;
  public ActionContext $action;
  public PipelineArn $pipeline_arn;
  public PipelineExecutionId $pipeline_execution_id;
}

class PutActionRevisionOutput {
  public boolean $new_revision;
  public PipelineExecutionId $pipeline_execution_id;
}

class ActionConfigurationValue {
}

class InvalidTagsException {
  public Message $message;
}

class StartPipelineExecutionOutput {
  public PipelineExecutionId $pipeline_execution_id;
}

class AccountId {
}

class InputArtifact {
  public ArtifactName $name;
}

class InvalidStructureException {
}

class PipelineVersionNotFoundException {
}

class PutApprovalResultOutput {
  public Timestamp $approved_at;
}

class RoleArn {
}

class TransitionState {
  public Enabled $enabled;
  public LastChangedBy $last_changed_by;
  public LastChangedAt $last_changed_at;
  public DisabledReason $disabled_reason;
}

class WebhookUrl {
}

class ActionNamespace {
}

class ArtifactDetailList {
}

class CreateCustomActionTypeOutput {
  public ActionType $action_type;
  public TagList $tags;
}

class StageStateList {
}

class TooManyTagsException {
  public Message $message;
}

class ArtifactStoreMap {
}

class DisableStageTransitionInput {
  public PipelineName $pipeline_name;
  public StageName $stage_name;
  public StageTransitionType $transition_type;
  public DisabledReason $reason;
}

class PipelineDeclaration {
  public PipelineStageDeclarationList $stages;
  public PipelineVersion $version;
  public PipelineName $name;
  public RoleArn $role_arn;
  public ArtifactStore $artifact_store;
  public ArtifactStoreMap $artifact_stores;
}

class PipelineName {
}

class PipelineStageDeclarationList {
}

class ActionConfigurationQueryableValue {
}

class ArtifactList {
}

class Description {
}

class ContinuationToken {
}

class ActionOwner {
}

class ActionStateList {
}

class ClientToken {
}

class TagResourceInput {
  public ResourceArn $resource_arn;
  public TagList $tags;
}

class ActionExecutionDetail {
  public ActionExecutionStatus $status;
  public ActionExecutionOutput $output;
  public PipelineExecutionId $pipeline_execution_id;
  public ActionExecutionId $action_execution_id;
  public PipelineVersion $pipeline_version;
  public Timestamp $last_update_time;
  public ActionExecutionInput $input;
  public StageName $stage_name;
  public ActionName $action_name;
  public Timestamp $start_time;
}

class SourceRevision {
  public Url $revision_url;
  public ActionName $action_name;
  public Revision $revision_id;
  public RevisionSummary $revision_summary;
}

class StageName {
}

class PipelineSummary {
  public Timestamp $created;
  public Timestamp $updated;
  public PipelineName $name;
  public PipelineVersion $version;
}

class PutWebhookOutput {
  public ListWebhookItem $webhook;
}

class ClientId {
}

class DeregisterWebhookWithThirdPartyOutput {
}

class JobDetails {
  public JobId $id;
  public JobData $data;
  public AccountId $account_id;
}

class LastChangedBy {
}

class ActionName {
}

class ApprovalAlreadyCompletedException {
}

class Code {
}

class ActionExecution {
  public ActionExecutionToken $token;
  public ErrorDetails $error_details;
  public ActionExecutionStatus $status;
  public Timestamp $last_status_change;
  public LastUpdatedBy $last_updated_by;
  public ExecutionId $external_execution_id;
  public Url $external_execution_url;
  public Percentage $percent_complete;
  public ExecutionSummary $summary;
}

class GetPipelineStateOutput {
  public PipelineName $pipeline_name;
  public PipelineVersion $pipeline_version;
  public StageStateList $stage_states;
  public Timestamp $created;
  public Timestamp $updated;
}

class PipelineExecutionStatus {
}

class RevisionSummary {
}

class String {
}

class ActionProvider {
}

class ApprovalStatus {
}

class ExecutionDetails {
  public Percentage $percent_complete;
  public ExecutionSummary $summary;
  public ExecutionId $external_execution_id;
}

class ListPipelineExecutionsOutput {
  public PipelineExecutionSummaryList $pipeline_execution_summaries;
  public NextToken $next_token;
}

class PollForJobsOutput {
  public JobList $jobs;
}

class WebhookName {
}

class ActionExecutionFilter {
  public PipelineExecutionId $pipeline_execution_id;
}

class DeletePipelineInput {
  public PipelineName $name;
}

class DeregisterWebhookWithThirdPartyInput {
  public WebhookName $webhook_name;
}

class ApprovalSummary {
}

class WebhookAuthConfigurationAllowedIPRange {
}

class TriggerType {
}

class Boolean {
}

class ErrorDetails {
  public Code $code;
  public Message $message;
}

class ResolvedActionConfigurationMap {
}

class InvalidJobException {
}

class RevisionChangeIdentifier {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class WebhookNotFoundException {
}

class ArtifactDetail {
  public S3Location $s_3_location;
  public ArtifactName $name;
}

class ClientRequestToken {
}

class NotLatestPipelineExecutionException {
}

class PipelineNotFoundException {
}

class ActionExecutionId {
}

class ListPipelineExecutionsInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public PipelineName $pipeline_name;
}

class MaxBatchSize {
}

class WebhookFilterRule {
  public JsonPath $json_path;
  public MatchEquals $match_equals;
}

class JobStatus {
}

class PipelineArn {
}

class StageNotRetryableException {
}

class InvalidActionDeclarationException {
}

class ActionTypeSettings {
  public UrlTemplate $entity_url_template;
  public UrlTemplate $execution_url_template;
  public UrlTemplate $revision_url_template;
  public Url $third_party_configuration_url;
}

class ArtifactLocationType {
}

class GetPipelineInput {
  public PipelineName $name;
  public PipelineVersion $version;
}

class PipelineList {
}

class S3ObjectKey {
}

class StopExecutionTrigger {
  public StopPipelineExecutionReason $reason;
}

class InvalidWebhookAuthenticationParametersException {
}

class Nonce {
}

class PipelineExecutionSummaryList {
}

class TagResourceOutput {
}

class InvalidWebhookFilterPatternException {
}

class RegisterWebhookWithThirdPartyOutput {
}

class StageContext {
  public StageName $name;
}

class GetJobDetailsOutput {
  public JobDetails $job_details;
}

class InvalidBlockerDeclarationException {
}

class GetPipelineStateInput {
  public PipelineName $name;
}

class GetThirdPartyJobDetailsInput {
  public ThirdPartyJobId $job_id;
  public ClientToken $client_token;
}

class JobList {
}

class PutApprovalResultInput {
  public PipelineName $pipeline_name;
  public StageName $stage_name;
  public ActionName $action_name;
  public ApprovalResult $result;
  public ApprovalToken $token;
}

class ActionTypeList {
}

class DeleteCustomActionTypeInput {
  public ActionCategory $category;
  public ActionProvider $provider;
  public Version $version;
}

class GetPipelineOutput {
  public PipelineDeclaration $pipeline;
  public PipelineMetadata $metadata;
}

class ActionConfigurationMap {
}

class PutThirdPartyJobFailureResultInput {
  public ThirdPartyJobId $job_id;
  public ClientToken $client_token;
  public FailureDetails $failure_details;
}

class ThirdPartyJobList {
}

class TagValue {
}

class UpdatePipelineOutput {
  public PipelineDeclaration $pipeline;
}

class ArtifactStoreType {
}

class CurrentRevision {
  public Revision $revision;
  public RevisionChangeIdentifier $change_identifier;
  public Time $created;
  public RevisionSummary $revision_summary;
}

class GetThirdPartyJobDetailsOutput {
  public ThirdPartyJobDetails $job_details;
}

class ConcurrentModificationException {
  public Message $message;
}

class ListActionTypesInput {
  public ActionOwner $action_owner_filter;
  public NextToken $next_token;
}

class ListTagsForResourceInput {
  public NextToken $next_token;
  public MaxResults $max_results;
  public ResourceArn $resource_arn;
}

class RetryStageExecutionOutput {
  public PipelineExecutionId $pipeline_execution_id;
}

class WebhookAuthenticationType {
}

class AcknowledgeJobOutput {
  public JobStatus $status;
}

class ActionExecutionToken {
}

class ActionType {
  public ArtifactDetails $input_artifact_details;
  public ArtifactDetails $output_artifact_details;
  public ActionTypeId $id;
  public ActionTypeSettings $settings;
  public ActionConfigurationPropertyList $action_configuration_properties;
}

class Artifact {
  public ArtifactName $name;
  public Revision $revision;
  public ArtifactLocation $location;
}

class BlockerType {
}

class TagKeyList {
}

class MaxResults {
}

class S3Location {
  public S3Bucket $bucket;
  public S3Key $key;
}

class Timestamp {
}

class ActionExecutionResult {
  public ExternalExecutionId $external_execution_id;
  public ExternalExecutionSummary $external_execution_summary;
  public Url $external_execution_url;
}

class ArtifactRevisionList {
}

class JobNotFoundException {
}

class S3BucketName {
}

class StageRetryMode {
}

class StageState {
  public StageName $stage_name;
  public TransitionState $inbound_transition_state;
  public ActionStateList $action_states;
  public StageExecution $latest_execution;
}

class GetPipelineExecutionOutput {
  public PipelineExecution $pipeline_execution;
}

class OutputVariablesKey {
}

class ResourceArn {
}

class JobData {
  public ActionTypeId $action_type_id;
  public ActionConfiguration $action_configuration;
  public PipelineContext $pipeline_context;
  public ArtifactList $input_artifacts;
  public ArtifactList $output_artifacts;
  public AWSSessionCredentials $artifact_credentials;
  public ContinuationToken $continuation_token;
  public EncryptionKey $encryption_key;
}

class ListTagsForResourceOutput {
  public TagList $tags;
  public NextToken $next_token;
}

class StopPipelineExecutionInput {
  public PipelineName $pipeline_name;
  public PipelineExecutionId $pipeline_execution_id;
  public boolean $abandon;
  public StopPipelineExecutionReason $reason;
}

class ListPipelinesInput {
  public NextToken $next_token;
}

class OutputArtifactList {
}

class Percentage {
}

class Version {
}

class WebhookFilters {
}

class AccessKeyId {
}

class ArtifactLocation {
  public ArtifactLocationType $type;
  public S3ArtifactLocation $s_3_location;
}

class ListActionExecutionsOutput {
  public ActionExecutionDetailList $action_execution_details;
  public NextToken $next_token;
}

class StageNotFoundException {
}

class MatchEquals {
}

class OutputVariablesMap {
}

class RetryStageExecutionInput {
  public PipelineName $pipeline_name;
  public StageName $stage_name;
  public PipelineExecutionId $pipeline_execution_id;
  public StageRetryMode $retry_mode;
}

class InvalidNextTokenException {
}

class ThirdPartyJobData {
  public PipelineContext $pipeline_context;
  public ArtifactList $input_artifacts;
  public ArtifactList $output_artifacts;
  public AWSSessionCredentials $artifact_credentials;
  public ContinuationToken $continuation_token;
  public EncryptionKey $encryption_key;
  public ActionTypeId $action_type_id;
  public ActionConfiguration $action_configuration;
}

class ThirdPartyJobDetails {
  public ThirdPartyJobId $id;
  public ThirdPartyJobData $data;
  public Nonce $nonce;
}

class ThirdPartyJobId {
}

class WebhookDefinition {
  public WebhookName $name;
  public PipelineName $target_pipeline;
  public ActionName $target_action;
  public WebhookFilters $filters;
  public WebhookAuthenticationType $authentication;
  public WebhookAuthConfiguration $authentication_configuration;
}

class ActionConfigurationKey {
}

class ActionConfigurationPropertyList {
}

class ExecutionTrigger {
  public TriggerType $trigger_type;
  public TriggerDetail $trigger_detail;
}

class UntagResourceInput {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class AWSSessionCredentials {
  public AccessKeyId $access_key_id;
  public SecretAccessKey $secret_access_key;
  public SessionToken $session_token;
}

class PollForThirdPartyJobsInput {
  public ActionTypeId $action_type_id;
  public MaxBatchSize $max_batch_size;
}

class Revision {
}

class ActionConfiguration {
  public ActionConfigurationMap $configuration;
}

class ActionRevision {
  public Revision $revision_id;
  public RevisionChangeIdentifier $revision_change_id;
  public Timestamp $created;
}

class StageExecutionStatus {
}

class Job {
  public JobId $id;
  public JobData $data;
  public Nonce $nonce;
  public AccountId $account_id;
}

class PipelineExecutionSummary {
  public PipelineExecutionId $pipeline_execution_id;
  public PipelineExecutionStatus $status;
  public Timestamp $start_time;
  public Timestamp $last_update_time;
  public SourceRevisionList $source_revisions;
  public ExecutionTrigger $trigger;
  public StopExecutionTrigger $stop_trigger;
}

class PollForJobsInput {
  public ActionTypeId $action_type_id;
  public MaxBatchSize $max_batch_size;
  public QueryParamMap $query_param;
}

class StageExecution {
  public PipelineExecutionId $pipeline_execution_id;
  public StageExecutionStatus $status;
}

class WebhookAuthConfigurationSecretToken {
}

class ActionExecutionOutput {
  public OutputVariablesMap $output_variables;
  public ArtifactDetailList $output_artifacts;
  public ActionExecutionResult $execution_result;
}

class ActionRunOrder {
}

class CreateCustomActionTypeInput {
  public TagList $tags;
  public ActionCategory $category;
  public ActionProvider $provider;
  public Version $version;
  public ActionTypeSettings $settings;
  public ActionConfigurationPropertyList $configuration_properties;
  public ArtifactDetails $input_artifact_details;
  public ArtifactDetails $output_artifact_details;
}

class ActionExecutionStatus {
}

class PutWebhookInput {
  public WebhookDefinition $webhook;
  public TagList $tags;
}

class PutThirdPartyJobSuccessResultInput {
  public ClientToken $client_token;
  public CurrentRevision $current_revision;
  public ContinuationToken $continuation_token;
  public ExecutionDetails $execution_details;
  public ThirdPartyJobId $job_id;
}

class WebhookList {
}

class ActionConfigurationPropertyType {
}

class ExecutionSummary {
}

class ListWebhooksInput {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class EncryptionKey {
  public EncryptionKeyId $id;
  public EncryptionKeyType $type;
}

class WebhookLastTriggered {
}

class FailureDetails {
  public FailureType $type;
  public Message $message;
  public ExecutionId $external_execution_id;
}

class ListWebhookItem {
  public WebhookErrorCode $error_code;
  public WebhookLastTriggered $last_triggered;
  public WebhookArn $arn;
  public TagList $tags;
  public WebhookDefinition $definition;
  public WebhookUrl $url;
  public WebhookErrorMessage $error_message;
}

class OutputArtifact {
  public ArtifactName $name;
}

class ThirdPartyJob {
  public ClientId $client_id;
  public JobId $job_id;
}

class ActionState {
  public Url $entity_url;
  public Url $revision_url;
  public ActionName $action_name;
  public ActionRevision $current_revision;
  public ActionExecution $latest_execution;
}

class ActionTypeId {
  public ActionOwner $owner;
  public ActionProvider $provider;
  public Version $version;
  public ActionCategory $category;
}

class ExternalExecutionSummary {
}

class ActionTypeNotFoundException {
}

class PipelineExecutionNotFoundException {
}

class PipelineMetadata {
  public PipelineArn $pipeline_arn;
  public Timestamp $created;
  public Timestamp $updated;
}

class PutJobSuccessResultInput {
  public ExecutionDetails $execution_details;
  public OutputVariablesMap $output_variables;
  public JobId $job_id;
  public CurrentRevision $current_revision;
  public ContinuationToken $continuation_token;
}

class RegisterWebhookWithThirdPartyInput {
  public WebhookName $webhook_name;
}

class Time {
}

class ActionExecutionInput {
  public ActionNamespace $namespace;
  public ActionTypeId $action_type_id;
  public ActionConfigurationMap $configuration;
  public ResolvedActionConfigurationMap $resolved_configuration;
  public RoleArn $role_arn;
  public AWSRegionName $region;
  public ArtifactDetailList $input_artifacts;
}

class DuplicatedStopRequestException {
  public Message $message;
}

class InvalidApprovalTokenException {
}

class DeleteWebhookOutput {
}

class OutputVariablesValue {
}

class QueryParamMap {
}

class ResourceNotFoundException {
}

class UrlTemplate {
}

class ActionExecutionDetailList {
}

class InvalidArnException {
  public Message $message;
}

class MinimumArtifactCount {
}

class WebhookErrorCode {
}

class ArtifactDetails {
  public MinimumArtifactCount $minimum_count;
  public MaximumArtifactCount $maximum_count;
}

class SecretAccessKey {
}

class WebhookArn {
}

class ListActionExecutionsInput {
  public PipelineName $pipeline_name;
  public ActionExecutionFilter $filter;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class EncryptionKeyId {
}

class ExternalExecutionId {
}

class FailureType {
}

class ActionNotFoundException {
}

class JsonPath {
}


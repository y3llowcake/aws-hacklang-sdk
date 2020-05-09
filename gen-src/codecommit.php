<?hh // strict
namespace slack\aws\codecommit;

interface CodeCommit {
  public function ListTagsForResource(ListTagsForResourceInput) Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function MergePullRequestByThreeWay(MergePullRequestByThreeWayInput) Awaitable<Errors\Result<MergePullRequestByThreeWayOutput>>;
  public function PostCommentReply(PostCommentReplyInput) Awaitable<Errors\Result<PostCommentReplyOutput>>;
  public function BatchAssociateApprovalRuleTemplateWithRepositories(BatchAssociateApprovalRuleTemplateWithRepositoriesInput) Awaitable<Errors\Result<BatchAssociateApprovalRuleTemplateWithRepositoriesOutput>>;
  public function DescribeMergeConflicts(DescribeMergeConflictsInput) Awaitable<Errors\Result<DescribeMergeConflictsOutput>>;
  public function DisassociateApprovalRuleTemplateFromRepository(DisassociateApprovalRuleTemplateFromRepositoryInput) Awaitable<Errors\Error>;
  public function GetApprovalRuleTemplate(GetApprovalRuleTemplateInput) Awaitable<Errors\Result<GetApprovalRuleTemplateOutput>>;
  public function GetCommentsForComparedCommit(GetCommentsForComparedCommitInput) Awaitable<Errors\Result<GetCommentsForComparedCommitOutput>>;
  public function ListBranches(ListBranchesInput) Awaitable<Errors\Result<ListBranchesOutput>>;
  public function DeleteBranch(DeleteBranchInput) Awaitable<Errors\Result<DeleteBranchOutput>>;
  public function DeleteFile(DeleteFileInput) Awaitable<Errors\Result<DeleteFileOutput>>;
  public function GetComment(GetCommentInput) Awaitable<Errors\Result<GetCommentOutput>>;
  public function CreateApprovalRuleTemplate(CreateApprovalRuleTemplateInput) Awaitable<Errors\Result<CreateApprovalRuleTemplateOutput>>;
  public function GetBlob(GetBlobInput) Awaitable<Errors\Result<GetBlobOutput>>;
  public function DeleteApprovalRuleTemplate(DeleteApprovalRuleTemplateInput) Awaitable<Errors\Result<DeleteApprovalRuleTemplateOutput>>;
  public function DeleteCommentContent(DeleteCommentContentInput) Awaitable<Errors\Result<DeleteCommentContentOutput>>;
  public function GetPullRequestOverrideState(GetPullRequestOverrideStateInput) Awaitable<Errors\Result<GetPullRequestOverrideStateOutput>>;
  public function UpdatePullRequestStatus(UpdatePullRequestStatusInput) Awaitable<Errors\Result<UpdatePullRequestStatusOutput>>;
  public function BatchDisassociateApprovalRuleTemplateFromRepositories(BatchDisassociateApprovalRuleTemplateFromRepositoriesInput) Awaitable<Errors\Result<BatchDisassociateApprovalRuleTemplateFromRepositoriesOutput>>;
  public function GetCommentsForPullRequest(GetCommentsForPullRequestInput) Awaitable<Errors\Result<GetCommentsForPullRequestOutput>>;
  public function MergeBranchesByThreeWay(MergeBranchesByThreeWayInput) Awaitable<Errors\Result<MergeBranchesByThreeWayOutput>>;
  public function MergePullRequestByFastForward(MergePullRequestByFastForwardInput) Awaitable<Errors\Result<MergePullRequestByFastForwardOutput>>;
  public function PutFile(PutFileInput) Awaitable<Errors\Result<PutFileOutput>>;
  public function UpdateRepositoryDescription(UpdateRepositoryDescriptionInput) Awaitable<Errors\Error>;
  public function DeleteRepository(DeleteRepositoryInput) Awaitable<Errors\Result<DeleteRepositoryOutput>>;
  public function UntagResource(UntagResourceInput) Awaitable<Errors\Error>;
  public function UpdatePullRequestTitle(UpdatePullRequestTitleInput) Awaitable<Errors\Result<UpdatePullRequestTitleOutput>>;
  public function BatchGetCommits(BatchGetCommitsInput) Awaitable<Errors\Result<BatchGetCommitsOutput>>;
  public function CreatePullRequestApprovalRule(CreatePullRequestApprovalRuleInput) Awaitable<Errors\Result<CreatePullRequestApprovalRuleOutput>>;
  public function GetFolder(GetFolderInput) Awaitable<Errors\Result<GetFolderOutput>>;
  public function MergeBranchesBySquash(MergeBranchesBySquashInput) Awaitable<Errors\Result<MergeBranchesBySquashOutput>>;
  public function OverridePullRequestApprovalRules(OverridePullRequestApprovalRulesInput) Awaitable<Errors\Error>;
  public function UpdateComment(UpdateCommentInput) Awaitable<Errors\Result<UpdateCommentOutput>>;
  public function CreateBranch(CreateBranchInput) Awaitable<Errors\Error>;
  public function CreateUnreferencedMergeCommit(CreateUnreferencedMergeCommitInput) Awaitable<Errors\Result<CreateUnreferencedMergeCommitOutput>>;
  public function MergeBranchesByFastForward(MergeBranchesByFastForwardInput) Awaitable<Errors\Result<MergeBranchesByFastForwardOutput>>;
  public function UpdatePullRequestApprovalRuleContent(UpdatePullRequestApprovalRuleContentInput) Awaitable<Errors\Result<UpdatePullRequestApprovalRuleContentOutput>>;
  public function EvaluatePullRequestApprovalRules(EvaluatePullRequestApprovalRulesInput) Awaitable<Errors\Result<EvaluatePullRequestApprovalRulesOutput>>;
  public function ListPullRequests(ListPullRequestsInput) Awaitable<Errors\Result<ListPullRequestsOutput>>;
  public function PutRepositoryTriggers(PutRepositoryTriggersInput) Awaitable<Errors\Result<PutRepositoryTriggersOutput>>;
  public function UpdatePullRequestApprovalState(UpdatePullRequestApprovalStateInput) Awaitable<Errors\Error>;
  public function UpdatePullRequestDescription(UpdatePullRequestDescriptionInput) Awaitable<Errors\Result<UpdatePullRequestDescriptionOutput>>;
  public function CreateRepository(CreateRepositoryInput) Awaitable<Errors\Result<CreateRepositoryOutput>>;
  public function GetDifferences(GetDifferencesInput) Awaitable<Errors\Result<GetDifferencesOutput>>;
  public function ListRepositoriesForApprovalRuleTemplate(ListRepositoriesForApprovalRuleTemplateInput) Awaitable<Errors\Result<ListRepositoriesForApprovalRuleTemplateOutput>>;
  public function MergePullRequestBySquash(MergePullRequestBySquashInput) Awaitable<Errors\Result<MergePullRequestBySquashOutput>>;
  public function TagResource(TagResourceInput) Awaitable<Errors\Error>;
  public function UpdateApprovalRuleTemplateContent(UpdateApprovalRuleTemplateContentInput) Awaitable<Errors\Result<UpdateApprovalRuleTemplateContentOutput>>;
  public function DescribePullRequestEvents(DescribePullRequestEventsInput) Awaitable<Errors\Result<DescribePullRequestEventsOutput>>;
  public function GetMergeConflicts(GetMergeConflictsInput) Awaitable<Errors\Result<GetMergeConflictsOutput>>;
  public function GetRepositoryTriggers(GetRepositoryTriggersInput) Awaitable<Errors\Result<GetRepositoryTriggersOutput>>;
  public function PostCommentForPullRequest(PostCommentForPullRequestInput) Awaitable<Errors\Result<PostCommentForPullRequestOutput>>;
  public function UpdateDefaultBranch(UpdateDefaultBranchInput) Awaitable<Errors\Error>;
  public function UpdateRepositoryName(UpdateRepositoryNameInput) Awaitable<Errors\Error>;
  public function GetRepository(GetRepositoryInput) Awaitable<Errors\Result<GetRepositoryOutput>>;
  public function ListApprovalRuleTemplates(ListApprovalRuleTemplatesInput) Awaitable<Errors\Result<ListApprovalRuleTemplatesOutput>>;
  public function TestRepositoryTriggers(TestRepositoryTriggersInput) Awaitable<Errors\Result<TestRepositoryTriggersOutput>>;
  public function BatchGetRepositories(BatchGetRepositoriesInput) Awaitable<Errors\Result<BatchGetRepositoriesOutput>>;
  public function GetMergeOptions(GetMergeOptionsInput) Awaitable<Errors\Result<GetMergeOptionsOutput>>;
  public function GetPullRequestApprovalStates(GetPullRequestApprovalStatesInput) Awaitable<Errors\Result<GetPullRequestApprovalStatesOutput>>;
  public function PostCommentForComparedCommit(PostCommentForComparedCommitInput) Awaitable<Errors\Result<PostCommentForComparedCommitOutput>>;
  public function UpdateApprovalRuleTemplateDescription(UpdateApprovalRuleTemplateDescriptionInput) Awaitable<Errors\Result<UpdateApprovalRuleTemplateDescriptionOutput>>;
  public function AssociateApprovalRuleTemplateWithRepository(AssociateApprovalRuleTemplateWithRepositoryInput) Awaitable<Errors\Error>;
  public function CreateCommit(CreateCommitInput) Awaitable<Errors\Result<CreateCommitOutput>>;
  public function DeletePullRequestApprovalRule(DeletePullRequestApprovalRuleInput) Awaitable<Errors\Result<DeletePullRequestApprovalRuleOutput>>;
  public function GetCommit(GetCommitInput) Awaitable<Errors\Result<GetCommitOutput>>;
  public function GetPullRequest(GetPullRequestInput) Awaitable<Errors\Result<GetPullRequestOutput>>;
  public function ListRepositories(ListRepositoriesInput) Awaitable<Errors\Result<ListRepositoriesOutput>>;
  public function UpdateApprovalRuleTemplateName(UpdateApprovalRuleTemplateNameInput) Awaitable<Errors\Result<UpdateApprovalRuleTemplateNameOutput>>;
  public function BatchDescribeMergeConflicts(BatchDescribeMergeConflictsInput) Awaitable<Errors\Result<BatchDescribeMergeConflictsOutput>>;
  public function CreatePullRequest(CreatePullRequestInput) Awaitable<Errors\Result<CreatePullRequestOutput>>;
  public function GetBranch(GetBranchInput) Awaitable<Errors\Result<GetBranchOutput>>;
  public function GetFile(GetFileInput) Awaitable<Errors\Result<GetFileOutput>>;
  public function GetMergeCommit(GetMergeCommitInput) Awaitable<Errors\Result<GetMergeCommitOutput>>;
  public function ListAssociatedApprovalRuleTemplatesForRepository(ListAssociatedApprovalRuleTemplatesForRepositoryInput) Awaitable<Errors\Result<ListAssociatedApprovalRuleTemplatesForRepositoryOutput>>;
}

class PullRequestStatusRequiredException {
}

class UpdateApprovalRuleTemplateNameInput {
  public ApprovalRuleTemplateName $old_approval_rule_template_name;
  public ApprovalRuleTemplateName $new_approval_rule_template_name;
}

class UpdatePullRequestStatusOutput {
  public PullRequest $pull_request;
}

class BatchDescribeMergeConflictsInput {
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public CommitName $destination_commit_specifier;
  public MaxResults $max_merge_hunks;
  public FilePaths $file_paths;
  public MaxResults $max_conflict_files;
  public NextToken $next_token;
  public RepositoryName $repository_name;
  public CommitName $source_commit_specifier;
  public MergeOptionTypeEnum $merge_option;
}

class BranchDoesNotExistException {
}

class InvalidTargetsException {
}

class PostCommentForPullRequestOutput {
  public CommitId $after_commit_id;
  public ObjectId $before_blob_id;
  public ObjectId $after_blob_id;
  public Location $location;
  public Comment $comment;
  public RepositoryName $repository_name;
  public PullRequestId $pull_request_id;
  public CommitId $before_commit_id;
}

class BatchDescribeMergeConflictsErrors {
}

class CommitIdDoesNotExistException {
}

class CreatePullRequestOutput {
  public PullRequest $pull_request;
}

class InvalidParentCommitIdException {
}

class InvalidSystemTagUsageException {
}

class CommentDeletedException {
}

class InvalidConflictResolutionException {
}

class MaximumOpenPullRequestsExceededException {
}

class MergePullRequestByFastForwardOutput {
  public PullRequest $pull_request;
}

class ManualMergeRequiredException {
}

class MaximumNumberOfApprovalsExceededException {
}

class RepositoryMetadata {
  public LastModifiedDate $last_modified_date;
  public RepositoryId $repository_id;
  public RepositoryName $repository_name;
  public RepositoryDescription $repository_description;
  public BranchName $default_branch;
  public CreationDate $creation_date;
  public CloneUrlHttp $clone_url_http;
  public CloneUrlSsh $clone_url_ssh;
  public AccountId $account_id;
  public Arn $arn;
}

class BatchGetRepositoriesInput {
  public RepositoryNameList $repository_names;
}

class InvalidTargetException {
}

class TipsDivergenceExceededException {
}

class RepositoryTriggersConfigurationId {
}

class TargetRequiredException {
}

class Comment {
  public CommentId $comment_id;
  public Content $content;
  public CommentId $in_reply_to;
  public CreationDate $creation_date;
  public LastModifiedDate $last_modified_date;
  public Arn $author_arn;
  public IsCommentDeleted $deleted;
  public ClientRequestToken $client_request_token;
}

class EncryptionIntegrityChecksFailedException {
}

class GetRepositoryTriggersOutput {
  public RepositoryTriggersConfigurationId $configuration_id;
  public RepositoryTriggersList $triggers;
}

class InvalidCommitIdException {
}

class ParentCommitDoesNotExistException {
}

class ClientRequestToken {
}

class GetApprovalRuleTemplateOutput {
  public ApprovalRuleTemplate $approval_rule_template;
}

class OrderEnum {
}

class GetDifferencesOutput {
  public NextToken $next_token;
  public DifferenceList $differences;
}

class PutFileEntries {
}

class RepositoryTriggerEventList {
}

class ApprovalRuleNameAlreadyExistsException {
}

class ApprovalRuleOverriddenEventMetadata {
  public RevisionId $revision_id;
  public OverrideStatus $override_status;
}

class BatchGetCommitsErrorsList {
}

class CreatePullRequestInput {
  public Title $title;
  public Description $description;
  public TargetList $targets;
  public ClientRequestToken $client_request_token;
}

class CreationDate {
}

class CreateUnreferencedMergeCommitOutput {
  public ObjectId $commit_id;
  public ObjectId $tree_id;
}

class UpdateRepositoryDescriptionInput {
  public RepositoryName $repository_name;
  public RepositoryDescription $repository_description;
}

class FileNameConflictsWithDirectoryNameException {
}

class FilePathConflictsWithSubmodulePathException {
}

class ListRepositoriesInput {
  public OrderEnum $order;
  public NextToken $next_token;
  public SortByEnum $sort_by;
}

class InvalidPullRequestIdException {
}

class RepositoryMetadataList {
}

class UpdateApprovalRuleTemplateNameOutput {
  public ApprovalRuleTemplate $approval_rule_template;
}

class blob {
}

class DeleteApprovalRuleTemplateInput {
  public ApprovalRuleTemplateName $approval_rule_template_name;
}

class Limit {
}

class MaximumFileContentToLoadExceededException {
}

class OverrideStatusRequiredException {
}

class ParentCommitIdOutdatedException {
}

class CommentId {
}

class FileSizes {
  public FileSize $source;
  public FileSize $destination;
  public FileSize $base;
}

class GetFolderInput {
  public RepositoryName $repository_name;
  public CommitName $commit_specifier;
  public Path $folder_path;
}

class InvalidCommentIdException {
}

class InvalidPathException {
}

class CannotDeleteApprovalRuleFromTemplateException {
}

class DeleteBranchInput {
  public RepositoryName $repository_name;
  public BranchName $branch_name;
}

class GetFolderOutput {
  public ObjectId $commit_id;
  public Path $folder_path;
  public ObjectId $tree_id;
  public FolderList $sub_folders;
  public FileList $files;
  public SymbolicLinkList $symbolic_links;
  public SubModuleList $sub_modules;
}

class InvalidPullRequestEventTypeException {
}

class Conflict {
  public ConflictMetadata $conflict_metadata;
  public MergeHunks $merge_hunks;
}

class MultipleRepositoriesInPullRequestException {
}

class NumberOfConflicts {
}

class RepositoryName {
}

class UpdateRepositoryNameInput {
  public RepositoryName $old_name;
  public RepositoryName $new_name;
}

class BatchDescribeMergeConflictsError {
  public Path $file_path;
  public ExceptionName $exception_name;
  public Message $message;
}

class CreateCommitOutput {
  public FilesMetadata $files_deleted;
  public ObjectId $commit_id;
  public ObjectId $tree_id;
  public FilesMetadata $files_added;
  public FilesMetadata $files_updated;
}

class PullRequestEvent {
  public EventDate $event_date;
  public ApprovalRuleOverriddenEventMetadata $approval_rule_overridden_event_metadata;
  public PullRequestId $pull_request_id;
  public Arn $actor_arn;
  public PullRequestCreatedEventMetadata $pull_request_created_event_metadata;
  public PullRequestStatusChangedEventMetadata $pull_request_status_changed_event_metadata;
  public PullRequestSourceReferenceUpdatedEventMetadata $pull_request_source_reference_updated_event_metadata;
  public PullRequestMergedStateChangedEventMetadata $pull_request_merged_state_changed_event_metadata;
  public ApprovalRuleEventMetadata $approval_rule_event_metadata;
  public ApprovalStateChangedEventMetadata $approval_state_changed_event_metadata;
  public PullRequestEventType $pull_request_event_type;
}

class ReplaceContentEntries {
}

class UpdateCommentOutput {
  public Comment $comment;
}

class ApprovalList {
}

class BatchAssociateApprovalRuleTemplateWithRepositoriesInput {
  public ApprovalRuleTemplateName $approval_rule_template_name;
  public RepositoryNameList $repository_names;
}

class GetFileInput {
  public RepositoryName $repository_name;
  public CommitName $commit_specifier;
  public Path $file_path;
}

class InvalidRepositoryDescriptionException {
}

class UpdateApprovalRuleTemplateContentOutput {
  public ApprovalRuleTemplate $approval_rule_template;
}

class ApprovalRuleTemplateContent {
}

class IsMerged {
}

class MergePullRequestByThreeWayInput {
  public Email $email;
  public PullRequestId $pull_request_id;
  public ObjectId $source_commit_id;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public Message $commit_message;
  public Name $author_name;
  public RepositoryName $repository_name;
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public KeepEmptyFolders $keep_empty_folders;
  public ConflictResolution $conflict_resolution;
}

class NumberOfRuleTemplatesExceededException {
}

class ErrorCode {
}

class Evaluation {
  public Approved $approved;
  public Overridden $overridden;
  public ApprovalRulesSatisfiedList $approval_rules_satisfied;
  public ApprovalRulesNotSatisfiedList $approval_rules_not_satisfied;
}

class ListPullRequestsInput {
  public RepositoryName $repository_name;
  public Arn $author_arn;
  public PullRequestStatusEnum $pull_request_status;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class MaximumBranchesExceededException {
}

class UpdatePullRequestDescriptionOutput {
  public PullRequest $pull_request;
}

class IsHunkConflict {
}

class GetMergeCommitOutput {
  public ObjectId $source_commit_id;
  public ObjectId $destination_commit_id;
  public ObjectId $base_commit_id;
  public ObjectId $merged_commit_id;
}

class GetPullRequestInput {
  public PullRequestId $pull_request_id;
}

class MergeBranchesByFastForwardOutput {
  public ObjectId $commit_id;
  public ObjectId $tree_id;
}

class SetFileModeEntries {
}

class BranchInfo {
  public BranchName $branch_name;
  public CommitId $commit_id;
}

class BranchNameRequiredException {
}

class GetDifferencesInput {
  public RepositoryName $repository_name;
  public CommitName $before_commit_specifier;
  public CommitName $after_commit_specifier;
  public Path $before_path;
  public Path $after_path;
  public Limit $max_results;
  public NextToken $next_token;
}

class TagsMapRequiredException {
}

class FileContentSizeLimitExceededException {
}

class InvalidMergeOptionException {
}

class InvalidRepositoryTriggerEventsException {
}

class ApprovalRuleNameRequiredException {
}

class FileModes {
  public FileModeTypeEnum $source;
  public FileModeTypeEnum $destination;
  public FileModeTypeEnum $base;
}

class ListRepositoriesForApprovalRuleTemplateInput {
  public ApprovalRuleTemplateName $approval_rule_template_name;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class PullRequestStatusChangedEventMetadata {
  public PullRequestStatusEnum $pull_request_status;
}

class RevisionNotCurrentException {
}

class ListBranchesOutput {
  public BranchNameList $branches;
  public NextToken $next_token;
}

class PullRequestCreatedEventMetadata {
  public CommitId $source_commit_id;
  public CommitId $destination_commit_id;
  public CommitId $merge_base;
  public RepositoryName $repository_name;
}

class PullRequestSourceReferenceUpdatedEventMetadata {
  public CommitId $after_commit_id;
  public CommitId $merge_base;
  public RepositoryName $repository_name;
  public CommitId $before_commit_id;
}

class ApprovalStateChangedEventMetadata {
  public ApprovalState $approval_status;
  public RevisionId $revision_id;
}

class BatchGetRepositoriesOutput {
  public RepositoryMetadataList $repositories;
  public RepositoryNotFoundList $repositories_not_found;
}

class CreateRepositoryInput {
  public RepositoryName $repository_name;
  public RepositoryDescription $repository_description;
  public TagsMap $tags;
}

class GetCommentsForComparedCommitInput {
  public NextToken $next_token;
  public MaxResults $max_results;
  public RepositoryName $repository_name;
  public CommitId $before_commit_id;
  public CommitId $after_commit_id;
}

class InvalidTargetBranchException {
}

class SymbolicLink {
  public ObjectId $blob_id;
  public Path $absolute_path;
  public Path $relative_path;
  public FileModeTypeEnum $file_mode;
}

class ApprovalRuleContent {
}

class ApprovalRuleTemplateContentRequiredException {
}

class CommentContentRequiredException {
}

class DescribeMergeConflictsOutput {
  public ConflictMetadata $conflict_metadata;
  public MergeHunks $merge_hunks;
  public NextToken $next_token;
  public ObjectId $destination_commit_id;
  public ObjectId $source_commit_id;
  public ObjectId $base_commit_id;
}

class PullRequestAlreadyClosedException {
}

class CannotModifyApprovalRuleFromTemplateException {
}

class InvalidReplacementTypeException {
}

class PutFileEntryConflictException {
}

class GetPullRequestApprovalStatesOutput {
  public ApprovalList $approvals;
}

class InvalidDescriptionException {
}

class InvalidRepositoryTriggerRegionException {
}

class ListRepositoriesForApprovalRuleTemplateOutput {
  public RepositoryNameList $repository_names;
  public NextToken $next_token;
}

class PutRepositoryTriggersOutput {
  public RepositoryTriggersConfigurationId $configuration_id;
}

class RepositoryNotAssociatedWithPullRequestException {
}

class UpdatePullRequestDescriptionInput {
  public Description $description;
  public PullRequestId $pull_request_id;
}

class CommentIdRequiredException {
}

class ConflictDetailLevelTypeEnum {
}

class CreatePullRequestApprovalRuleOutput {
  public ApprovalRule $approval_rule;
}

class FileList {
}

class InvalidSourceCommitSpecifierException {
}

class CommitIdsInputList {
}

class Description {
}

class RepositoryTriggerNameRequiredException {
}

class BatchGetCommitsInput {
  public CommitIdsInputList $commit_ids;
  public RepositoryName $repository_name;
}

class CommitMessageLengthExceededException {
}

class InvalidResourceArnException {
}

class RepositoryTriggerExecutionFailure {
  public RepositoryTriggerName $trigger;
  public RepositoryTriggerExecutionFailureMessage $failure_message;
}

class ActorDoesNotExistException {
}

class DescribePullRequestEventsInput {
  public Arn $actor_arn;
  public NextToken $next_token;
  public MaxResults $max_results;
  public PullRequestId $pull_request_id;
  public PullRequestEventType $pull_request_event_type;
}

class FilePaths {
}

class MaxResults {
}

class MergeBranchesByThreeWayOutput {
  public ObjectId $commit_id;
  public ObjectId $tree_id;
}

class PullRequestIdRequiredException {
}

class AuthorDoesNotExistException {
}

class EncryptionKeyDisabledException {
}

class FolderList {
}

class InvalidCommitException {
}

class InvalidRevisionIdException {
}

class Conflicts {
}

class CommentsForPullRequestData {
}

class InvalidMaxResultsException {
}

class RepositoryTriggerEventsListRequiredException {
}

class RuleContentSha256 {
}

class CreateUnreferencedMergeCommitInput {
  public CommitName $destination_commit_specifier;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public KeepEmptyFolders $keep_empty_folders;
  public CommitName $source_commit_specifier;
  public MergeOptionTypeEnum $merge_option;
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public Name $author_name;
  public Email $email;
  public Message $commit_message;
  public ConflictResolution $conflict_resolution;
  public RepositoryName $repository_name;
}

class Approved {
}

class KeepEmptyFolders {
}

class PutFileOutput {
  public ObjectId $blob_id;
  public ObjectId $tree_id;
  public ObjectId $commit_id;
}

class RepositoryDescription {
}

class ApprovalRuleTemplateDoesNotExistException {
}

class DeleteFileEntry {
  public Path $file_path;
}

class GetCommentOutput {
  public Comment $comment;
}

class IsCommentDeleted {
}

class RepositoryNameExistsException {
}

class ErrorMessage {
}

class IsMove {
}

class ApprovalRuleContentRequiredException {
}

class CreateApprovalRuleTemplateInput {
  public ApprovalRuleTemplateName $approval_rule_template_name;
  public ApprovalRuleTemplateContent $approval_rule_template_content;
  public ApprovalRuleTemplateDescription $approval_rule_template_description;
}

class ExceptionName {
}

class DeleteFileInput {
  public CommitId $parent_commit_id;
  public KeepEmptyFolders $keep_empty_folders;
  public Message $commit_message;
  public Name $name;
  public Email $email;
  public RepositoryName $repository_name;
  public BranchName $branch_name;
  public Path $file_path;
}

class MaximumRepositoryTriggersExceededException {
}

class ApprovalRulesList {
}

class BranchName {
}

class MergeBranchesBySquashOutput {
  public ObjectId $tree_id;
  public ObjectId $commit_id;
}

class Name {
}

class RelativeFileVersionEnum {
}

class BatchDescribeMergeConflictsOutput {
  public Conflicts $conflicts;
  public NextToken $next_token;
  public BatchDescribeMergeConflictsErrors $errors;
  public ObjectId $destination_commit_id;
  public ObjectId $source_commit_id;
  public ObjectId $base_commit_id;
}

class ChangeTypeEnum {
}

class DescribeMergeConflictsInput {
  public MergeOptionTypeEnum $merge_option;
  public MaxResults $max_merge_hunks;
  public Path $file_path;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public NextToken $next_token;
  public CommitName $destination_commit_specifier;
  public CommitName $source_commit_specifier;
  public RepositoryName $repository_name;
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
}

class NameLengthExceededException {
}

class TestRepositoryTriggersOutput {
  public RepositoryTriggerExecutionFailureList $failed_executions;
  public RepositoryTriggerNameList $successful_executions;
}

class CommentNotCreatedByCallerException {
}

class SubModuleList {
}

class RepositoryTriggerBranchNameListRequiredException {
}

class SamePathRequestException {
}

class ApprovalRulesNotSatisfiedList {
}

class BranchNameExistsException {
}

class DeleteCommentContentInput {
  public CommentId $comment_id;
}

class InvalidRepositoryTriggerDestinationArnException {
}

class PostCommentForComparedCommitInput {
  public RepositoryName $repository_name;
  public CommitId $before_commit_id;
  public CommitId $after_commit_id;
  public Location $location;
  public Content $content;
  public ClientRequestToken $client_request_token;
}

class TooManyTagsException {
}

class GetBlobOutput {
  public blob $content;
}

class InvalidMaxMergeHunksException {
}

class InvalidReferenceNameException {
}

class PullRequestId {
}

class RepositoryTriggerEventEnum {
}

class ApprovalRuleTemplateNameAlreadyExistsException {
}

class GetRepositoryOutput {
  public RepositoryMetadata $repository_metadata;
}

class HunkContent {
}

class PullRequestEventType {
}

class RepositoryDoesNotExistException {
}

class ApprovalRuleEventMetadata {
  public ApprovalRuleName $approval_rule_name;
  public ApprovalRuleId $approval_rule_id;
  public ApprovalRuleContent $approval_rule_content;
}

class FolderContentSizeLimitExceededException {
}

class TagResourceInput {
  public ResourceArn $resource_arn;
  public TagsMap $tags;
}

class FileEntryRequiredException {
}

class InvalidFilePositionException {
}

class MergeBranchesByThreeWayInput {
  public CommitName $destination_commit_specifier;
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public Email $email;
  public KeepEmptyFolders $keep_empty_folders;
  public ConflictResolution $conflict_resolution;
  public RepositoryName $repository_name;
  public CommitName $source_commit_specifier;
  public BranchName $target_branch;
  public Name $author_name;
  public Message $commit_message;
}

class PullRequestTarget {
  public MergeMetadata $merge_metadata;
  public RepositoryName $repository_name;
  public ReferenceName $source_reference;
  public ReferenceName $destination_reference;
  public CommitId $destination_commit;
  public CommitId $source_commit;
  public CommitId $merge_base;
}

class RepositoryTriggerExecutionFailureList {
}

class UserInfo {
  public Name $name;
  public Email $email;
  public Date $date;
}

class PullRequestStatusEnum {
}

class TipOfSourceReferenceIsDifferentException {
}

class GetRepositoryInput {
  public RepositoryName $repository_name;
}

class MergeBranchesByFastForwardInput {
  public CommitName $destination_commit_specifier;
  public BranchName $target_branch;
  public RepositoryName $repository_name;
  public CommitName $source_commit_specifier;
}

class MergeBranchesBySquashInput {
  public RepositoryName $repository_name;
  public BranchName $target_branch;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public Name $author_name;
  public ConflictResolution $conflict_resolution;
  public KeepEmptyFolders $keep_empty_folders;
  public CommitName $source_commit_specifier;
  public CommitName $destination_commit_specifier;
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public Email $email;
  public Message $commit_message;
}

class NextToken {
}

class PullRequestIdList {
}

class InvalidFileLocationException {
}

class InvalidMaxConflictFilesException {
}

class IsContentConflict {
}

class IsMergeable {
}

class MergeHunkDetail {
  public LineNumber $start_line;
  public LineNumber $end_line;
  public HunkContent $hunk_content;
}

class SourceAndDestinationAreSameException {
}

class TitleRequiredException {
}

class UpdateApprovalRuleTemplateDescriptionInput {
  public ApprovalRuleTemplateName $approval_rule_template_name;
  public ApprovalRuleTemplateDescription $approval_rule_template_description;
}

class ApprovalRuleId {
}

class FileSize {
}

class GetApprovalRuleTemplateInput {
  public ApprovalRuleTemplateName $approval_rule_template_name;
}

class ListApprovalRuleTemplatesInput {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class UpdatePullRequestApprovalRuleContentInput {
  public PullRequestId $pull_request_id;
  public ApprovalRuleName $approval_rule_name;
  public RuleContentSha256 $existing_rule_content_sha_256;
  public ApprovalRuleContent $new_rule_content;
}

class FileModeRequiredException {
}

class PathDoesNotExistException {
}

class EvaluatePullRequestApprovalRulesOutput {
  public Evaluation $evaluation;
}

class GetBranchInput {
  public BranchName $branch_name;
  public RepositoryName $repository_name;
}

class GetPullRequestOverrideStateOutput {
  public Overridden $overridden;
  public Arn $overrider;
}

class NoChangeException {
}

class TestRepositoryTriggersInput {
  public RepositoryName $repository_name;
  public RepositoryTriggersList $triggers;
}

class InvalidAuthorArnException {
}

class InvalidConflictResolutionStrategyException {
}

class ListAssociatedApprovalRuleTemplatesForRepositoryInput {
  public RepositoryName $repository_name;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class BatchAssociateApprovalRuleTemplateWithRepositoriesError {
  public RepositoryName $repository_name;
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
}

class InvalidRepositoryTriggerBranchNameException {
}

class MaximumRepositoryNamesExceededException {
}

class MergeOperations {
  public ChangeTypeEnum $source;
  public ChangeTypeEnum $destination;
}

class ResourceArn {
}

class ListRepositoriesOutput {
  public RepositoryNameIdPairList $repositories;
  public NextToken $next_token;
}

class Location {
  public Path $file_path;
  public Position $file_position;
  public RelativeFileVersionEnum $relative_file_version;
}

class MergeHunk {
  public MergeHunkDetail $base;
  public IsHunkConflict $is_conflict;
  public MergeHunkDetail $source;
  public MergeHunkDetail $destination;
}

class ApprovalStateRequiredException {
}

class CreateApprovalRuleTemplateOutput {
  public ApprovalRuleTemplate $approval_rule_template;
}

class DeleteBranchOutput {
  public BranchInfo $deleted_branch;
}

class GetPullRequestApprovalStatesInput {
  public PullRequestId $pull_request_id;
  public RevisionId $revision_id;
}

class InvalidApprovalRuleTemplateDescriptionException {
}

class ReferenceName {
}

class GetMergeConflictsOutput {
  public ObjectId $destination_commit_id;
  public ObjectId $source_commit_id;
  public ObjectId $base_commit_id;
  public ConflictMetadataList $conflict_metadata_list;
  public NextToken $next_token;
  public IsMergeable $mergeable;
}

class OriginApprovalRuleTemplate {
  public ApprovalRuleTemplateId $approval_rule_template_id;
  public ApprovalRuleTemplateName $approval_rule_template_name;
}

class PostCommentForComparedCommitOutput {
  public Location $location;
  public Comment $comment;
  public RepositoryName $repository_name;
  public CommitId $before_commit_id;
  public CommitId $after_commit_id;
  public ObjectId $before_blob_id;
  public ObjectId $after_blob_id;
}

class SetFileModeEntry {
  public Path $file_path;
  public FileModeTypeEnum $file_mode;
}

class FileContentRequiredException {
}

class InvalidApprovalRuleContentException {
}

class InvalidOverrideStatusException {
}

class CommitRequiredException {
}

class ConcurrentReferenceUpdateException {
}

class Date {
}

class DeleteFileEntries {
}

class InvalidOrderException {
}

class PullRequestTargetList {
}

class RepositoryTrigger {
  public Arn $destination_arn;
  public RepositoryTriggerCustomData $custom_data;
  public BranchNameList $branches;
  public RepositoryTriggerEventList $events;
  public RepositoryTriggerName $name;
}

class SubModule {
  public ObjectId $commit_id;
  public Path $absolute_path;
  public Path $relative_path;
}

class CommentsForComparedCommit {
  public RepositoryName $repository_name;
  public CommitId $before_commit_id;
  public CommitId $after_commit_id;
  public ObjectId $before_blob_id;
  public ObjectId $after_blob_id;
  public Location $location;
  public Comments $comments;
}

class DeletePullRequestApprovalRuleInput {
  public ApprovalRuleName $approval_rule_name;
  public PullRequestId $pull_request_id;
}

class InvalidContinuationTokenException {
}

class LastModifiedDate {
}

class MergeOptions {
}

class CommitId {
}

class DescribePullRequestEventsOutput {
  public PullRequestEventList $pull_request_events;
  public NextToken $next_token;
}

class ListBranchesInput {
  public RepositoryName $repository_name;
  public NextToken $next_token;
}

class CommitIdsListRequiredException {
}

class GetCommentsForComparedCommitOutput {
  public CommentsForComparedCommitData $comments_for_compared_commit_data;
  public NextToken $next_token;
}

class TargetList {
}

class BlobIdDoesNotExistException {
}

class Email {
}

class GetBranchOutput {
  public BranchInfo $branch;
}

class BatchGetCommitsError {
  public ObjectId $commit_id;
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
}

class ObjectId {
}

class ReplaceContentEntry {
  public Path $file_path;
  public ReplacementTypeEnum $replacement_type;
  public FileContent $content;
  public FileModeTypeEnum $file_mode;
}

class ResourceArnRequiredException {
}

class UpdateApprovalRuleTemplateDescriptionOutput {
  public ApprovalRuleTemplate $approval_rule_template;
}

class SortByEnum {
}

class ApprovalRuleTemplateId {
}

class CommentDoesNotExistException {
}

class InvalidRepositoryTriggerCustomDataException {
}

class MergeOptionRequiredException {
}

class RepositoryTriggersList {
}

class EncryptionKeyAccessDeniedException {
}

class FilesMetadata {
}

class IdempotencyParameterMismatchException {
}

class RepositoryTriggerNameList {
}

class RevisionIdRequiredException {
}

class FileMetadata {
  public Path $absolute_path;
  public ObjectId $blob_id;
  public FileModeTypeEnum $file_mode;
}

class PathRequiredException {
}

class PullRequestMergedStateChangedEventMetadata {
  public RepositoryName $repository_name;
  public ReferenceName $destination_reference;
  public MergeMetadata $merge_metadata;
}

class ApprovalState {
}

class EvaluatePullRequestApprovalRulesInput {
  public RevisionId $revision_id;
  public PullRequestId $pull_request_id;
}

class GetCommentsForPullRequestOutput {
  public CommentsForPullRequestData $comments_for_pull_request_data;
  public NextToken $next_token;
}

class ReplacementContentRequiredException {
}

class UpdatePullRequestTitleInput {
  public PullRequestId $pull_request_id;
  public Title $title;
}

class ApprovalRuleTemplateInUseException {
}

class DisassociateApprovalRuleTemplateFromRepositoryInput {
  public RepositoryName $repository_name;
  public ApprovalRuleTemplateName $approval_rule_template_name;
}

class UpdatePullRequestApprovalStateInput {
  public PullRequestId $pull_request_id;
  public RevisionId $revision_id;
  public ApprovalState $approval_state;
}

class DirectoryNameConflictsWithFileNameException {
}

class Folder {
  public ObjectId $tree_id;
  public Path $absolute_path;
  public Path $relative_path;
}

class ReplacementTypeEnum {
}

class RepositoryTriggerName {
}

class RestrictedSourceFileException {
}

class PullRequestEventList {
}

class ReferenceTypeNotSupportedException {
}

class ApprovalRuleTemplateDescription {
}

class BatchDisassociateApprovalRuleTemplateFromRepositoriesErrorsList {
}

class LineNumber {
}

class Message {
}

class Overridden {
}

class Content {
}

class AdditionalData {
}

class RepositoryNotFoundList {
}

class ApprovalRuleName {
}

class ListTagsForResourceOutput {
  public TagsMap $tags;
  public NextToken $next_token;
}

class PutFileEntry {
  public Path $file_path;
  public FileModeTypeEnum $file_mode;
  public FileContent $file_content;
  public SourceFileSpecifier $source_file;
}

class RepositoryNameRequiredException {
}

class SameFileContentException {
}

class ListPullRequestsOutput {
  public PullRequestIdList $pull_request_ids;
  public NextToken $next_token;
}

class ObjectTypes {
  public ObjectTypeEnum $source;
  public ObjectTypeEnum $destination;
  public ObjectTypeEnum $base;
}

class EncryptionKeyNotFoundException {
}

class RepositoryTriggersListRequiredException {
}

class UpdatePullRequestStatusInput {
  public PullRequestId $pull_request_id;
  public PullRequestStatusEnum $pull_request_status;
}

class InvalidTagsMapException {
}

class ListTagsForResourceInput {
  public ResourceArn $resource_arn;
  public NextToken $next_token;
}

class Position {
}

class DeleteApprovalRuleTemplateOutput {
  public ApprovalRuleTemplateId $approval_rule_template_id;
}

class DeleteRepositoryOutput {
  public RepositoryId $repository_id;
}

class GetPullRequestOutput {
  public PullRequest $pull_request;
}

class InvalidApprovalRuleNameException {
}

class InvalidReplacementContentException {
}

class UpdateCommentInput {
  public CommentId $comment_id;
  public Content $content;
}

class AccountId {
}

class BatchAssociateApprovalRuleTemplateWithRepositoriesOutput {
  public RepositoryNameList $associated_repository_names;
  public BatchAssociateApprovalRuleTemplateWithRepositoriesErrorsList $errors;
}

class DifferenceList {
}

class FileContentAndSourceFileSpecifiedException {
}

class ObjectTypeEnum {
}

class AssociateApprovalRuleTemplateWithRepositoryInput {
  public ApprovalRuleTemplateName $approval_rule_template_name;
  public RepositoryName $repository_name;
}

class CapitalBoolean {
}

class ListApprovalRuleTemplatesOutput {
  public ApprovalRuleTemplateNameList $approval_rule_template_names;
  public NextToken $next_token;
}

class NumberOfRulesExceededException {
}

class BatchDisassociateApprovalRuleTemplateFromRepositoriesOutput {
  public RepositoryNameList $disassociated_repository_names;
  public BatchDisassociateApprovalRuleTemplateFromRepositoriesErrorsList $errors;
}

class GetCommitOutput {
  public Commit $commit;
}

class MergeMetadata {
  public MergeOptionTypeEnum $merge_option;
  public IsMerged $is_merged;
  public Arn $merged_by;
  public CommitId $merge_commit_id;
}

class ReplacementTypeRequiredException {
}

class ConflictResolutionStrategyTypeEnum {
}

class CreatePullRequestApprovalRuleInput {
  public ApprovalRuleName $approval_rule_name;
  public ApprovalRuleContent $approval_rule_content;
  public PullRequestId $pull_request_id;
}

class GetMergeConflictsInput {
  public RepositoryName $repository_name;
  public CommitName $destination_commit_specifier;
  public CommitName $source_commit_specifier;
  public MergeOptionTypeEnum $merge_option;
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public MaxResults $max_conflict_files;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public NextToken $next_token;
}

class GetMergeOptionsOutput {
  public MergeOptions $merge_options;
  public ObjectId $source_commit_id;
  public ObjectId $destination_commit_id;
  public ObjectId $base_commit_id;
}

class TagKey {
}

class RepositoryNameIdPairList {
}

class GetBlobInput {
  public RepositoryName $repository_name;
  public ObjectId $blob_id;
}

class MaximumRuleTemplatesAssociatedWithRepositoryException {
}

class MultipleConflictResolutionEntriesException {
}

class ApprovalRuleTemplate {
  public ApprovalRuleTemplateContent $approval_rule_template_content;
  public RuleContentSha256 $rule_content_sha_256;
  public LastModifiedDate $last_modified_date;
  public CreationDate $creation_date;
  public Arn $last_modified_user;
  public ApprovalRuleTemplateId $approval_rule_template_id;
  public ApprovalRuleTemplateName $approval_rule_template_name;
  public ApprovalRuleTemplateDescription $approval_rule_template_description;
}

class DeleteFileOutput {
  public ObjectId $commit_id;
  public ObjectId $blob_id;
  public ObjectId $tree_id;
  public Path $file_path;
}

class InvalidDestinationCommitSpecifierException {
}

class InvalidRelativeFileVersionEnumException {
}

class ApprovalRule {
  public OriginApprovalRuleTemplate $origin_approval_rule_template;
  public ApprovalRuleId $approval_rule_id;
  public ApprovalRuleName $approval_rule_name;
  public ApprovalRuleContent $approval_rule_content;
  public RuleContentSha256 $rule_content_sha_256;
  public LastModifiedDate $last_modified_date;
  public CreationDate $creation_date;
  public Arn $last_modified_user;
}

class CreateRepositoryOutput {
  public RepositoryMetadata $repository_metadata;
}

class RepositoryId {
}

class RepositoryNamesRequiredException {
}

class Target {
  public RepositoryName $repository_name;
  public ReferenceName $source_reference;
  public ReferenceName $destination_reference;
}

class UpdateDefaultBranchInput {
  public RepositoryName $repository_name;
  public BranchName $default_branch_name;
}

class BatchDisassociateApprovalRuleTemplateFromRepositoriesInput {
  public RepositoryNameList $repository_names;
  public ApprovalRuleTemplateName $approval_rule_template_name;
}

class ConflictResolution {
  public SetFileModeEntries $set_file_modes;
  public ReplaceContentEntries $replace_contents;
  public DeleteFileEntries $delete_files;
}

class InvalidFileModeException {
}

class MergePullRequestByFastForwardInput {
  public PullRequestId $pull_request_id;
  public RepositoryName $repository_name;
  public ObjectId $source_commit_id;
}

class UntagResourceInput {
  public ResourceArn $resource_arn;
  public TagKeysList $tag_keys;
}

class InvalidTitleException {
}

class PullRequest {
  public PullRequestTargetList $pull_request_targets;
  public ClientRequestToken $client_request_token;
  public RevisionId $revision_id;
  public PullRequestId $pull_request_id;
  public LastModifiedDate $last_activity_date;
  public CreationDate $creation_date;
  public PullRequestStatusEnum $pull_request_status;
  public Arn $author_arn;
  public Title $title;
  public Description $description;
  public ApprovalRulesList $approval_rules;
}

class PullRequestApprovalRulesNotSatisfiedException {
}

class RepositoryNameList {
}

class BatchAssociateApprovalRuleTemplateWithRepositoriesErrorsList {
}

class BatchGetCommitsOutput {
  public CommitObjectsList $commits;
  public BatchGetCommitsErrorsList $errors;
}

class Mode {
}

class OverridePullRequestApprovalRulesInput {
  public PullRequestId $pull_request_id;
  public RevisionId $revision_id;
  public OverrideStatus $override_status;
}

class TagsMap {
}

class BlobMetadata {
  public ObjectId $blob_id;
  public Path $path;
  public Mode $mode;
}

class PostCommentForPullRequestInput {
  public Location $location;
  public Content $content;
  public ClientRequestToken $client_request_token;
  public PullRequestId $pull_request_id;
  public RepositoryName $repository_name;
  public CommitId $before_commit_id;
  public CommitId $after_commit_id;
}

class InvalidTagKeysListException {
}

class ApprovalRuleTemplateNameRequiredException {
}

class CommentContentSizeLimitExceededException {
}

class CommitDoesNotExistException {
}

class FileContent {
}

class InvalidClientRequestTokenException {
}

class UpdatePullRequestTitleOutput {
  public PullRequest $pull_request;
}

class DeleteCommentContentOutput {
  public Comment $comment;
}

class EncryptionKeyUnavailableException {
}

class FolderDoesNotExistException {
}

class InvalidRepositoryTriggerNameException {
}

class MergePullRequestBySquashOutput {
  public PullRequest $pull_request;
}

class ApprovalRuleDoesNotExistException {
}

class File {
  public ObjectId $blob_id;
  public Path $absolute_path;
  public Path $relative_path;
  public FileModeTypeEnum $file_mode;
}

class MaximumFileEntriesExceededException {
}

class Title {
}

class CloneUrlSsh {
}

class InvalidEmailException {
}

class MergeOptionTypeEnum {
}

class MergePullRequestByThreeWayOutput {
  public PullRequest $pull_request;
}

class TagPolicyException {
}

class MergeHunks {
}

class PostCommentReplyOutput {
  public Comment $comment;
}

class InvalidDeletionParameterException {
}

class PostCommentReplyInput {
  public CommentId $in_reply_to;
  public ClientRequestToken $client_request_token;
  public Content $content;
}

class PutFileInput {
  public Email $email;
  public RepositoryName $repository_name;
  public Path $file_path;
  public FileModeTypeEnum $file_mode;
  public Message $commit_message;
  public Name $name;
  public BranchName $branch_name;
  public FileContent $file_content;
  public CommitId $parent_commit_id;
}

class RepositoryNameIdPair {
  public RepositoryName $repository_name;
  public RepositoryId $repository_id;
}

class Arn {
}

class BatchDisassociateApprovalRuleTemplateFromRepositoriesError {
  public RepositoryName $repository_name;
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
}

class CommitIdsLimitExceededException {
}

class MaximumItemsToCompareExceededException {
}

class ParentList {
}

class GetCommentsForPullRequestInput {
  public CommitId $after_commit_id;
  public NextToken $next_token;
  public MaxResults $max_results;
  public PullRequestId $pull_request_id;
  public RepositoryName $repository_name;
  public CommitId $before_commit_id;
}

class InvalidApprovalStateException {
}

class IsFileModeConflict {
}

class ApprovalRulesSatisfiedList {
}

class Commit {
  public ParentList $parents;
  public Message $message;
  public UserInfo $author;
  public UserInfo $committer;
  public AdditionalData $additional_data;
  public ObjectId $commit_id;
  public ObjectId $tree_id;
}

class CommitObjectsList {
}

class CreateBranchInput {
  public RepositoryName $repository_name;
  public BranchName $branch_name;
  public CommitId $commit_id;
}

class DeletePullRequestApprovalRuleOutput {
  public ApprovalRuleId $approval_rule_id;
}

class TargetsRequiredException {
}

class Approval {
  public Arn $user_arn;
  public ApprovalState $approval_state;
}

class CreateCommitInput {
  public Email $email;
  public Message $commit_message;
  public RepositoryName $repository_name;
  public Name $author_name;
  public KeepEmptyFolders $keep_empty_folders;
  public PutFileEntries $put_files;
  public DeleteFileEntries $delete_files;
  public SetFileModeEntries $set_file_modes;
  public BranchName $branch_name;
  public CommitId $parent_commit_id;
}

class SymbolicLinkList {
}

class BeforeCommitIdAndAfterCommitIdAreSameException {
}

class ListAssociatedApprovalRuleTemplatesForRepositoryOutput {
  public ApprovalRuleTemplateNameList $approval_rule_template_names;
  public NextToken $next_token;
}

class RepositoryTriggerCustomData {
}

class CommentsForComparedCommitData {
}

class Difference {
  public BlobMetadata $before_blob;
  public BlobMetadata $after_blob;
  public ChangeTypeEnum $change_type;
}

class MaximumConflictResolutionEntriesExceededException {
}

class OverrideStatus {
}

class SourceFileSpecifier {
  public Path $file_path;
  public IsMove $is_move;
}

class IsBinaryFile {
  public CapitalBoolean $source;
  public CapitalBoolean $destination;
  public CapitalBoolean $base;
}

class TagKeysList {
}

class GetRepositoryTriggersInput {
  public RepositoryName $repository_name;
}

class PullRequestDoesNotExistException {
}

class SourceFileOrContentRequiredException {
}

class Comments {
}

class UpdatePullRequestApprovalRuleContentOutput {
  public ApprovalRule $approval_rule;
}

class GetFileOutput {
  public ObjectId $commit_id;
  public ObjectId $blob_id;
  public Path $file_path;
  public FileModeTypeEnum $file_mode;
  public ObjectSize $file_size;
  public FileContent $file_content;
}

class ObjectSize {
}

class PutRepositoryTriggersInput {
  public RepositoryName $repository_name;
  public RepositoryTriggersList $triggers;
}

class ApprovalRuleTemplateNameList {
}

class GetMergeOptionsInput {
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public RepositoryName $repository_name;
  public CommitName $source_commit_specifier;
  public CommitName $destination_commit_specifier;
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
}

class InvalidApprovalRuleTemplateNameException {
}

class Path {
}

class FileDoesNotExistException {
}

class FileTooLargeException {
}

class UpdateApprovalRuleTemplateContentInput {
  public ApprovalRuleTemplateName $approval_rule_template_name;
  public ApprovalRuleTemplateContent $new_rule_content;
  public RuleContentSha256 $existing_rule_content_sha_256;
}

class BranchNameList {
}

class CommentsForPullRequest {
  public Comments $comments;
  public PullRequestId $pull_request_id;
  public RepositoryName $repository_name;
  public CommitId $before_commit_id;
  public CommitId $after_commit_id;
  public ObjectId $before_blob_id;
  public ObjectId $after_blob_id;
  public Location $location;
}

class InvalidPullRequestStatusException {
}

class ReferenceNameRequiredException {
}

class InvalidActorArnException {
}

class InvalidPullRequestStatusUpdateException {
}

class RepositoryTriggerExecutionFailureMessage {
}

class RevisionId {
}

class BlobIdRequiredException {
}

class CommitIdRequiredException {
}

class GetPullRequestOverrideStateInput {
  public PullRequestId $pull_request_id;
  public RevisionId $revision_id;
}

class ReferenceDoesNotExistException {
}

class ConflictMetadata {
  public MergeOperations $merge_operations;
  public FileSizes $file_sizes;
  public FileModes $file_modes;
  public ObjectTypes $object_types;
  public NumberOfConflicts $number_of_conflicts;
  public IsObjectTypeConflict $object_type_conflict;
  public Path $file_path;
  public IsBinaryFile $is_binary_file;
  public IsContentConflict $content_conflict;
  public IsFileModeConflict $file_mode_conflict;
}

class GetCommentInput {
  public CommentId $comment_id;
}

class GetCommitInput {
  public RepositoryName $repository_name;
  public ObjectId $commit_id;
}

class InvalidRepositoryNameException {
}

class PullRequestCannotBeApprovedByAuthorException {
}

class ClientRequestTokenRequiredException {
}

class EventDate {
}

class RepositoryLimitExceededException {
}

class ApprovalRuleTemplateName {
}

class InvalidSortByException {
}

class IsObjectTypeConflict {
}

class RepositoryTriggerDestinationArnRequiredException {
}

class CloneUrlHttp {
}

class InvalidApprovalRuleTemplateContentException {
}

class InvalidRuleContentSha256Exception {
}

class MergePullRequestBySquashInput {
  public PullRequestId $pull_request_id;
  public ObjectId $source_commit_id;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public KeepEmptyFolders $keep_empty_folders;
  public ConflictResolution $conflict_resolution;
  public RepositoryName $repository_name;
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public Message $commit_message;
  public Name $author_name;
  public Email $email;
}

class OverrideAlreadySetException {
}

class TagKeysListRequiredException {
}

class CommitName {
}

class DefaultBranchCannotBeDeletedException {
}

class DeleteRepositoryInput {
  public RepositoryName $repository_name;
}

class FileModeTypeEnum {
}

class InvalidBlobIdException {
}

class ParentCommitIdRequiredException {
}

class TagValue {
}

class BranchNameIsTagNameException {
}

class ConflictMetadataList {
}

class GetMergeCommitInput {
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public RepositoryName $repository_name;
  public CommitName $source_commit_specifier;
  public CommitName $destination_commit_specifier;
}

class InvalidBranchNameException {
}

class InvalidConflictDetailLevelException {
}


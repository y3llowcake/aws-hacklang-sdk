<?hh // strict
namespace slack\aws\codecommit;

interface CodeCommit {
  public function AssociateApprovalRuleTemplateWithRepository(AssociateApprovalRuleTemplateWithRepositoryInput) Awaitable<Errors\Error>;
  public function BatchAssociateApprovalRuleTemplateWithRepositories(BatchAssociateApprovalRuleTemplateWithRepositoriesInput) Awaitable<Errors\Result<BatchAssociateApprovalRuleTemplateWithRepositoriesOutput>>;
  public function BatchDescribeMergeConflicts(BatchDescribeMergeConflictsInput) Awaitable<Errors\Result<BatchDescribeMergeConflictsOutput>>;
  public function BatchDisassociateApprovalRuleTemplateFromRepositories(BatchDisassociateApprovalRuleTemplateFromRepositoriesInput) Awaitable<Errors\Result<BatchDisassociateApprovalRuleTemplateFromRepositoriesOutput>>;
  public function BatchGetCommits(BatchGetCommitsInput) Awaitable<Errors\Result<BatchGetCommitsOutput>>;
  public function BatchGetRepositories(BatchGetRepositoriesInput) Awaitable<Errors\Result<BatchGetRepositoriesOutput>>;
  public function CreateApprovalRuleTemplate(CreateApprovalRuleTemplateInput) Awaitable<Errors\Result<CreateApprovalRuleTemplateOutput>>;
  public function CreateBranch(CreateBranchInput) Awaitable<Errors\Error>;
  public function CreateCommit(CreateCommitInput) Awaitable<Errors\Result<CreateCommitOutput>>;
  public function CreatePullRequest(CreatePullRequestInput) Awaitable<Errors\Result<CreatePullRequestOutput>>;
  public function CreatePullRequestApprovalRule(CreatePullRequestApprovalRuleInput) Awaitable<Errors\Result<CreatePullRequestApprovalRuleOutput>>;
  public function CreateRepository(CreateRepositoryInput) Awaitable<Errors\Result<CreateRepositoryOutput>>;
  public function CreateUnreferencedMergeCommit(CreateUnreferencedMergeCommitInput) Awaitable<Errors\Result<CreateUnreferencedMergeCommitOutput>>;
  public function DeleteApprovalRuleTemplate(DeleteApprovalRuleTemplateInput) Awaitable<Errors\Result<DeleteApprovalRuleTemplateOutput>>;
  public function DeleteBranch(DeleteBranchInput) Awaitable<Errors\Result<DeleteBranchOutput>>;
  public function DeleteCommentContent(DeleteCommentContentInput) Awaitable<Errors\Result<DeleteCommentContentOutput>>;
  public function DeleteFile(DeleteFileInput) Awaitable<Errors\Result<DeleteFileOutput>>;
  public function DeletePullRequestApprovalRule(DeletePullRequestApprovalRuleInput) Awaitable<Errors\Result<DeletePullRequestApprovalRuleOutput>>;
  public function DeleteRepository(DeleteRepositoryInput) Awaitable<Errors\Result<DeleteRepositoryOutput>>;
  public function DescribeMergeConflicts(DescribeMergeConflictsInput) Awaitable<Errors\Result<DescribeMergeConflictsOutput>>;
  public function DescribePullRequestEvents(DescribePullRequestEventsInput) Awaitable<Errors\Result<DescribePullRequestEventsOutput>>;
  public function DisassociateApprovalRuleTemplateFromRepository(DisassociateApprovalRuleTemplateFromRepositoryInput) Awaitable<Errors\Error>;
  public function EvaluatePullRequestApprovalRules(EvaluatePullRequestApprovalRulesInput) Awaitable<Errors\Result<EvaluatePullRequestApprovalRulesOutput>>;
  public function GetApprovalRuleTemplate(GetApprovalRuleTemplateInput) Awaitable<Errors\Result<GetApprovalRuleTemplateOutput>>;
  public function GetBlob(GetBlobInput) Awaitable<Errors\Result<GetBlobOutput>>;
  public function GetBranch(GetBranchInput) Awaitable<Errors\Result<GetBranchOutput>>;
  public function GetComment(GetCommentInput) Awaitable<Errors\Result<GetCommentOutput>>;
  public function GetCommentsForComparedCommit(GetCommentsForComparedCommitInput) Awaitable<Errors\Result<GetCommentsForComparedCommitOutput>>;
  public function GetCommentsForPullRequest(GetCommentsForPullRequestInput) Awaitable<Errors\Result<GetCommentsForPullRequestOutput>>;
  public function GetCommit(GetCommitInput) Awaitable<Errors\Result<GetCommitOutput>>;
  public function GetDifferences(GetDifferencesInput) Awaitable<Errors\Result<GetDifferencesOutput>>;
  public function GetFile(GetFileInput) Awaitable<Errors\Result<GetFileOutput>>;
  public function GetFolder(GetFolderInput) Awaitable<Errors\Result<GetFolderOutput>>;
  public function GetMergeCommit(GetMergeCommitInput) Awaitable<Errors\Result<GetMergeCommitOutput>>;
  public function GetMergeConflicts(GetMergeConflictsInput) Awaitable<Errors\Result<GetMergeConflictsOutput>>;
  public function GetMergeOptions(GetMergeOptionsInput) Awaitable<Errors\Result<GetMergeOptionsOutput>>;
  public function GetPullRequest(GetPullRequestInput) Awaitable<Errors\Result<GetPullRequestOutput>>;
  public function GetPullRequestApprovalStates(GetPullRequestApprovalStatesInput) Awaitable<Errors\Result<GetPullRequestApprovalStatesOutput>>;
  public function GetPullRequestOverrideState(GetPullRequestOverrideStateInput) Awaitable<Errors\Result<GetPullRequestOverrideStateOutput>>;
  public function GetRepository(GetRepositoryInput) Awaitable<Errors\Result<GetRepositoryOutput>>;
  public function GetRepositoryTriggers(GetRepositoryTriggersInput) Awaitable<Errors\Result<GetRepositoryTriggersOutput>>;
  public function ListApprovalRuleTemplates(ListApprovalRuleTemplatesInput) Awaitable<Errors\Result<ListApprovalRuleTemplatesOutput>>;
  public function ListAssociatedApprovalRuleTemplatesForRepository(ListAssociatedApprovalRuleTemplatesForRepositoryInput) Awaitable<Errors\Result<ListAssociatedApprovalRuleTemplatesForRepositoryOutput>>;
  public function ListBranches(ListBranchesInput) Awaitable<Errors\Result<ListBranchesOutput>>;
  public function ListPullRequests(ListPullRequestsInput) Awaitable<Errors\Result<ListPullRequestsOutput>>;
  public function ListRepositories(ListRepositoriesInput) Awaitable<Errors\Result<ListRepositoriesOutput>>;
  public function ListRepositoriesForApprovalRuleTemplate(ListRepositoriesForApprovalRuleTemplateInput) Awaitable<Errors\Result<ListRepositoriesForApprovalRuleTemplateOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput) Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function MergeBranchesByFastForward(MergeBranchesByFastForwardInput) Awaitable<Errors\Result<MergeBranchesByFastForwardOutput>>;
  public function MergeBranchesBySquash(MergeBranchesBySquashInput) Awaitable<Errors\Result<MergeBranchesBySquashOutput>>;
  public function MergeBranchesByThreeWay(MergeBranchesByThreeWayInput) Awaitable<Errors\Result<MergeBranchesByThreeWayOutput>>;
  public function MergePullRequestByFastForward(MergePullRequestByFastForwardInput) Awaitable<Errors\Result<MergePullRequestByFastForwardOutput>>;
  public function MergePullRequestBySquash(MergePullRequestBySquashInput) Awaitable<Errors\Result<MergePullRequestBySquashOutput>>;
  public function MergePullRequestByThreeWay(MergePullRequestByThreeWayInput) Awaitable<Errors\Result<MergePullRequestByThreeWayOutput>>;
  public function OverridePullRequestApprovalRules(OverridePullRequestApprovalRulesInput) Awaitable<Errors\Error>;
  public function PostCommentForComparedCommit(PostCommentForComparedCommitInput) Awaitable<Errors\Result<PostCommentForComparedCommitOutput>>;
  public function PostCommentForPullRequest(PostCommentForPullRequestInput) Awaitable<Errors\Result<PostCommentForPullRequestOutput>>;
  public function PostCommentReply(PostCommentReplyInput) Awaitable<Errors\Result<PostCommentReplyOutput>>;
  public function PutFile(PutFileInput) Awaitable<Errors\Result<PutFileOutput>>;
  public function PutRepositoryTriggers(PutRepositoryTriggersInput) Awaitable<Errors\Result<PutRepositoryTriggersOutput>>;
  public function TagResource(TagResourceInput) Awaitable<Errors\Error>;
  public function TestRepositoryTriggers(TestRepositoryTriggersInput) Awaitable<Errors\Result<TestRepositoryTriggersOutput>>;
  public function UntagResource(UntagResourceInput) Awaitable<Errors\Error>;
  public function UpdateApprovalRuleTemplateContent(UpdateApprovalRuleTemplateContentInput) Awaitable<Errors\Result<UpdateApprovalRuleTemplateContentOutput>>;
  public function UpdateApprovalRuleTemplateDescription(UpdateApprovalRuleTemplateDescriptionInput) Awaitable<Errors\Result<UpdateApprovalRuleTemplateDescriptionOutput>>;
  public function UpdateApprovalRuleTemplateName(UpdateApprovalRuleTemplateNameInput) Awaitable<Errors\Result<UpdateApprovalRuleTemplateNameOutput>>;
  public function UpdateComment(UpdateCommentInput) Awaitable<Errors\Result<UpdateCommentOutput>>;
  public function UpdateDefaultBranch(UpdateDefaultBranchInput) Awaitable<Errors\Error>;
  public function UpdatePullRequestApprovalRuleContent(UpdatePullRequestApprovalRuleContentInput) Awaitable<Errors\Result<UpdatePullRequestApprovalRuleContentOutput>>;
  public function UpdatePullRequestApprovalState(UpdatePullRequestApprovalStateInput) Awaitable<Errors\Error>;
  public function UpdatePullRequestDescription(UpdatePullRequestDescriptionInput) Awaitable<Errors\Result<UpdatePullRequestDescriptionOutput>>;
  public function UpdatePullRequestStatus(UpdatePullRequestStatusInput) Awaitable<Errors\Result<UpdatePullRequestStatusOutput>>;
  public function UpdatePullRequestTitle(UpdatePullRequestTitleInput) Awaitable<Errors\Result<UpdatePullRequestTitleOutput>>;
  public function UpdateRepositoryDescription(UpdateRepositoryDescriptionInput) Awaitable<Errors\Error>;
  public function UpdateRepositoryName(UpdateRepositoryNameInput) Awaitable<Errors\Error>;
}

class AccountId {
}

class ActorDoesNotExistException {
}

class AdditionalData {
}

class Approval {
  public ApprovalState $approval_state;
  public Arn $user_arn;
}

class ApprovalList {
}

class ApprovalRule {
  public ApprovalRuleContent $approval_rule_content;
  public ApprovalRuleId $approval_rule_id;
  public ApprovalRuleName $approval_rule_name;
  public CreationDate $creation_date;
  public LastModifiedDate $last_modified_date;
  public Arn $last_modified_user;
  public OriginApprovalRuleTemplate $origin_approval_rule_template;
  public RuleContentSha256 $rule_content_sha_256;
}

class ApprovalRuleContent {
}

class ApprovalRuleContentRequiredException {
}

class ApprovalRuleDoesNotExistException {
}

class ApprovalRuleEventMetadata {
  public ApprovalRuleContent $approval_rule_content;
  public ApprovalRuleId $approval_rule_id;
  public ApprovalRuleName $approval_rule_name;
}

class ApprovalRuleId {
}

class ApprovalRuleName {
}

class ApprovalRuleNameAlreadyExistsException {
}

class ApprovalRuleNameRequiredException {
}

class ApprovalRuleOverriddenEventMetadata {
  public OverrideStatus $override_status;
  public RevisionId $revision_id;
}

class ApprovalRuleTemplate {
  public ApprovalRuleTemplateContent $approval_rule_template_content;
  public ApprovalRuleTemplateDescription $approval_rule_template_description;
  public ApprovalRuleTemplateId $approval_rule_template_id;
  public ApprovalRuleTemplateName $approval_rule_template_name;
  public CreationDate $creation_date;
  public LastModifiedDate $last_modified_date;
  public Arn $last_modified_user;
  public RuleContentSha256 $rule_content_sha_256;
}

class ApprovalRuleTemplateContent {
}

class ApprovalRuleTemplateContentRequiredException {
}

class ApprovalRuleTemplateDescription {
}

class ApprovalRuleTemplateDoesNotExistException {
}

class ApprovalRuleTemplateId {
}

class ApprovalRuleTemplateInUseException {
}

class ApprovalRuleTemplateName {
}

class ApprovalRuleTemplateNameAlreadyExistsException {
}

class ApprovalRuleTemplateNameList {
}

class ApprovalRuleTemplateNameRequiredException {
}

class ApprovalRulesList {
}

class ApprovalRulesNotSatisfiedList {
}

class ApprovalRulesSatisfiedList {
}

class ApprovalState {
}

class ApprovalStateChangedEventMetadata {
  public ApprovalState $approval_status;
  public RevisionId $revision_id;
}

class ApprovalStateRequiredException {
}

class Approved {
}

class Arn {
}

class AssociateApprovalRuleTemplateWithRepositoryInput {
  public ApprovalRuleTemplateName $approval_rule_template_name;
  public RepositoryName $repository_name;
}

class AuthorDoesNotExistException {
}

class BatchAssociateApprovalRuleTemplateWithRepositoriesError {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public RepositoryName $repository_name;
}

class BatchAssociateApprovalRuleTemplateWithRepositoriesErrorsList {
}

class BatchAssociateApprovalRuleTemplateWithRepositoriesInput {
  public ApprovalRuleTemplateName $approval_rule_template_name;
  public RepositoryNameList $repository_names;
}

class BatchAssociateApprovalRuleTemplateWithRepositoriesOutput {
  public RepositoryNameList $associated_repository_names;
  public BatchAssociateApprovalRuleTemplateWithRepositoriesErrorsList $errors;
}

class BatchDescribeMergeConflictsError {
  public ExceptionName $exception_name;
  public Path $file_path;
  public Message $message;
}

class BatchDescribeMergeConflictsErrors {
}

class BatchDescribeMergeConflictsInput {
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public CommitName $destination_commit_specifier;
  public FilePaths $file_paths;
  public MaxResults $max_conflict_files;
  public MaxResults $max_merge_hunks;
  public MergeOptionTypeEnum $merge_option;
  public NextToken $next_token;
  public RepositoryName $repository_name;
  public CommitName $source_commit_specifier;
}

class BatchDescribeMergeConflictsOutput {
  public ObjectId $base_commit_id;
  public Conflicts $conflicts;
  public ObjectId $destination_commit_id;
  public BatchDescribeMergeConflictsErrors $errors;
  public NextToken $next_token;
  public ObjectId $source_commit_id;
}

class BatchDisassociateApprovalRuleTemplateFromRepositoriesError {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public RepositoryName $repository_name;
}

class BatchDisassociateApprovalRuleTemplateFromRepositoriesErrorsList {
}

class BatchDisassociateApprovalRuleTemplateFromRepositoriesInput {
  public ApprovalRuleTemplateName $approval_rule_template_name;
  public RepositoryNameList $repository_names;
}

class BatchDisassociateApprovalRuleTemplateFromRepositoriesOutput {
  public RepositoryNameList $disassociated_repository_names;
  public BatchDisassociateApprovalRuleTemplateFromRepositoriesErrorsList $errors;
}

class BatchGetCommitsError {
  public ObjectId $commit_id;
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
}

class BatchGetCommitsErrorsList {
}

class BatchGetCommitsInput {
  public CommitIdsInputList $commit_ids;
  public RepositoryName $repository_name;
}

class BatchGetCommitsOutput {
  public CommitObjectsList $commits;
  public BatchGetCommitsErrorsList $errors;
}

class BatchGetRepositoriesInput {
  public RepositoryNameList $repository_names;
}

class BatchGetRepositoriesOutput {
  public RepositoryMetadataList $repositories;
  public RepositoryNotFoundList $repositories_not_found;
}

class BeforeCommitIdAndAfterCommitIdAreSameException {
}

class BlobIdDoesNotExistException {
}

class BlobIdRequiredException {
}

class BlobMetadata {
  public ObjectId $blob_id;
  public Mode $mode;
  public Path $path;
}

class BranchDoesNotExistException {
}

class BranchInfo {
  public BranchName $branch_name;
  public CommitId $commit_id;
}

class BranchName {
}

class BranchNameExistsException {
}

class BranchNameIsTagNameException {
}

class BranchNameList {
}

class BranchNameRequiredException {
}

class CannotDeleteApprovalRuleFromTemplateException {
}

class CannotModifyApprovalRuleFromTemplateException {
}

class CapitalBoolean {
}

class ChangeTypeEnum {
}

class ClientRequestToken {
}

class ClientRequestTokenRequiredException {
}

class CloneUrlHttp {
}

class CloneUrlSsh {
}

class Comment {
  public Arn $author_arn;
  public ClientRequestToken $client_request_token;
  public CommentId $comment_id;
  public Content $content;
  public CreationDate $creation_date;
  public IsCommentDeleted $deleted;
  public CommentId $in_reply_to;
  public LastModifiedDate $last_modified_date;
}

class CommentContentRequiredException {
}

class CommentContentSizeLimitExceededException {
}

class CommentDeletedException {
}

class CommentDoesNotExistException {
}

class CommentId {
}

class CommentIdRequiredException {
}

class CommentNotCreatedByCallerException {
}

class Comments {
}

class CommentsForComparedCommit {
  public ObjectId $after_blob_id;
  public CommitId $after_commit_id;
  public ObjectId $before_blob_id;
  public CommitId $before_commit_id;
  public Comments $comments;
  public Location $location;
  public RepositoryName $repository_name;
}

class CommentsForComparedCommitData {
}

class CommentsForPullRequest {
  public ObjectId $after_blob_id;
  public CommitId $after_commit_id;
  public ObjectId $before_blob_id;
  public CommitId $before_commit_id;
  public Comments $comments;
  public Location $location;
  public PullRequestId $pull_request_id;
  public RepositoryName $repository_name;
}

class CommentsForPullRequestData {
}

class Commit {
  public AdditionalData $additional_data;
  public UserInfo $author;
  public ObjectId $commit_id;
  public UserInfo $committer;
  public Message $message;
  public ParentList $parents;
  public ObjectId $tree_id;
}

class CommitDoesNotExistException {
}

class CommitId {
}

class CommitIdDoesNotExistException {
}

class CommitIdRequiredException {
}

class CommitIdsInputList {
}

class CommitIdsLimitExceededException {
}

class CommitIdsListRequiredException {
}

class CommitMessageLengthExceededException {
}

class CommitName {
}

class CommitObjectsList {
}

class CommitRequiredException {
}

class ConcurrentReferenceUpdateException {
}

class Conflict {
  public ConflictMetadata $conflict_metadata;
  public MergeHunks $merge_hunks;
}

class ConflictDetailLevelTypeEnum {
}

class ConflictMetadata {
  public IsContentConflict $content_conflict;
  public IsFileModeConflict $file_mode_conflict;
  public FileModes $file_modes;
  public Path $file_path;
  public FileSizes $file_sizes;
  public IsBinaryFile $is_binary_file;
  public MergeOperations $merge_operations;
  public NumberOfConflicts $number_of_conflicts;
  public IsObjectTypeConflict $object_type_conflict;
  public ObjectTypes $object_types;
}

class ConflictMetadataList {
}

class ConflictResolution {
  public DeleteFileEntries $delete_files;
  public ReplaceContentEntries $replace_contents;
  public SetFileModeEntries $set_file_modes;
}

class ConflictResolutionStrategyTypeEnum {
}

class Conflicts {
}

class Content {
}

class CreateApprovalRuleTemplateInput {
  public ApprovalRuleTemplateContent $approval_rule_template_content;
  public ApprovalRuleTemplateDescription $approval_rule_template_description;
  public ApprovalRuleTemplateName $approval_rule_template_name;
}

class CreateApprovalRuleTemplateOutput {
  public ApprovalRuleTemplate $approval_rule_template;
}

class CreateBranchInput {
  public BranchName $branch_name;
  public CommitId $commit_id;
  public RepositoryName $repository_name;
}

class CreateCommitInput {
  public Name $author_name;
  public BranchName $branch_name;
  public Message $commit_message;
  public DeleteFileEntries $delete_files;
  public Email $email;
  public KeepEmptyFolders $keep_empty_folders;
  public CommitId $parent_commit_id;
  public PutFileEntries $put_files;
  public RepositoryName $repository_name;
  public SetFileModeEntries $set_file_modes;
}

class CreateCommitOutput {
  public ObjectId $commit_id;
  public FilesMetadata $files_added;
  public FilesMetadata $files_deleted;
  public FilesMetadata $files_updated;
  public ObjectId $tree_id;
}

class CreatePullRequestApprovalRuleInput {
  public ApprovalRuleContent $approval_rule_content;
  public ApprovalRuleName $approval_rule_name;
  public PullRequestId $pull_request_id;
}

class CreatePullRequestApprovalRuleOutput {
  public ApprovalRule $approval_rule;
}

class CreatePullRequestInput {
  public ClientRequestToken $client_request_token;
  public Description $description;
  public TargetList $targets;
  public Title $title;
}

class CreatePullRequestOutput {
  public PullRequest $pull_request;
}

class CreateRepositoryInput {
  public RepositoryDescription $repository_description;
  public RepositoryName $repository_name;
  public TagsMap $tags;
}

class CreateRepositoryOutput {
  public RepositoryMetadata $repository_metadata;
}

class CreateUnreferencedMergeCommitInput {
  public Name $author_name;
  public Message $commit_message;
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ConflictResolution $conflict_resolution;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public CommitName $destination_commit_specifier;
  public Email $email;
  public KeepEmptyFolders $keep_empty_folders;
  public MergeOptionTypeEnum $merge_option;
  public RepositoryName $repository_name;
  public CommitName $source_commit_specifier;
}

class CreateUnreferencedMergeCommitOutput {
  public ObjectId $commit_id;
  public ObjectId $tree_id;
}

class CreationDate {
}

class Date {
}

class DefaultBranchCannotBeDeletedException {
}

class DeleteApprovalRuleTemplateInput {
  public ApprovalRuleTemplateName $approval_rule_template_name;
}

class DeleteApprovalRuleTemplateOutput {
  public ApprovalRuleTemplateId $approval_rule_template_id;
}

class DeleteBranchInput {
  public BranchName $branch_name;
  public RepositoryName $repository_name;
}

class DeleteBranchOutput {
  public BranchInfo $deleted_branch;
}

class DeleteCommentContentInput {
  public CommentId $comment_id;
}

class DeleteCommentContentOutput {
  public Comment $comment;
}

class DeleteFileEntries {
}

class DeleteFileEntry {
  public Path $file_path;
}

class DeleteFileInput {
  public BranchName $branch_name;
  public Message $commit_message;
  public Email $email;
  public Path $file_path;
  public KeepEmptyFolders $keep_empty_folders;
  public Name $name;
  public CommitId $parent_commit_id;
  public RepositoryName $repository_name;
}

class DeleteFileOutput {
  public ObjectId $blob_id;
  public ObjectId $commit_id;
  public Path $file_path;
  public ObjectId $tree_id;
}

class DeletePullRequestApprovalRuleInput {
  public ApprovalRuleName $approval_rule_name;
  public PullRequestId $pull_request_id;
}

class DeletePullRequestApprovalRuleOutput {
  public ApprovalRuleId $approval_rule_id;
}

class DeleteRepositoryInput {
  public RepositoryName $repository_name;
}

class DeleteRepositoryOutput {
  public RepositoryId $repository_id;
}

class DescribeMergeConflictsInput {
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public CommitName $destination_commit_specifier;
  public Path $file_path;
  public MaxResults $max_merge_hunks;
  public MergeOptionTypeEnum $merge_option;
  public NextToken $next_token;
  public RepositoryName $repository_name;
  public CommitName $source_commit_specifier;
}

class DescribeMergeConflictsOutput {
  public ObjectId $base_commit_id;
  public ConflictMetadata $conflict_metadata;
  public ObjectId $destination_commit_id;
  public MergeHunks $merge_hunks;
  public NextToken $next_token;
  public ObjectId $source_commit_id;
}

class DescribePullRequestEventsInput {
  public Arn $actor_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
  public PullRequestEventType $pull_request_event_type;
  public PullRequestId $pull_request_id;
}

class DescribePullRequestEventsOutput {
  public NextToken $next_token;
  public PullRequestEventList $pull_request_events;
}

class Description {
}

class Difference {
  public BlobMetadata $after_blob;
  public BlobMetadata $before_blob;
  public ChangeTypeEnum $change_type;
}

class DifferenceList {
}

class DirectoryNameConflictsWithFileNameException {
}

class DisassociateApprovalRuleTemplateFromRepositoryInput {
  public ApprovalRuleTemplateName $approval_rule_template_name;
  public RepositoryName $repository_name;
}

class Email {
}

class EncryptionIntegrityChecksFailedException {
}

class EncryptionKeyAccessDeniedException {
}

class EncryptionKeyDisabledException {
}

class EncryptionKeyNotFoundException {
}

class EncryptionKeyUnavailableException {
}

class ErrorCode {
}

class ErrorMessage {
}

class EvaluatePullRequestApprovalRulesInput {
  public PullRequestId $pull_request_id;
  public RevisionId $revision_id;
}

class EvaluatePullRequestApprovalRulesOutput {
  public Evaluation $evaluation;
}

class Evaluation {
  public ApprovalRulesNotSatisfiedList $approval_rules_not_satisfied;
  public ApprovalRulesSatisfiedList $approval_rules_satisfied;
  public Approved $approved;
  public Overridden $overridden;
}

class EventDate {
}

class ExceptionName {
}

class File {
  public Path $absolute_path;
  public ObjectId $blob_id;
  public FileModeTypeEnum $file_mode;
  public Path $relative_path;
}

class FileContent {
}

class FileContentAndSourceFileSpecifiedException {
}

class FileContentRequiredException {
}

class FileContentSizeLimitExceededException {
}

class FileDoesNotExistException {
}

class FileEntryRequiredException {
}

class FileList {
}

class FileMetadata {
  public Path $absolute_path;
  public ObjectId $blob_id;
  public FileModeTypeEnum $file_mode;
}

class FileModeRequiredException {
}

class FileModeTypeEnum {
}

class FileModes {
  public FileModeTypeEnum $base;
  public FileModeTypeEnum $destination;
  public FileModeTypeEnum $source;
}

class FileNameConflictsWithDirectoryNameException {
}

class FilePathConflictsWithSubmodulePathException {
}

class FilePaths {
}

class FileSize {
}

class FileSizes {
  public FileSize $base;
  public FileSize $destination;
  public FileSize $source;
}

class FileTooLargeException {
}

class FilesMetadata {
}

class Folder {
  public Path $absolute_path;
  public Path $relative_path;
  public ObjectId $tree_id;
}

class FolderContentSizeLimitExceededException {
}

class FolderDoesNotExistException {
}

class FolderList {
}

class GetApprovalRuleTemplateInput {
  public ApprovalRuleTemplateName $approval_rule_template_name;
}

class GetApprovalRuleTemplateOutput {
  public ApprovalRuleTemplate $approval_rule_template;
}

class GetBlobInput {
  public ObjectId $blob_id;
  public RepositoryName $repository_name;
}

class GetBlobOutput {
  public blob $content;
}

class GetBranchInput {
  public BranchName $branch_name;
  public RepositoryName $repository_name;
}

class GetBranchOutput {
  public BranchInfo $branch;
}

class GetCommentInput {
  public CommentId $comment_id;
}

class GetCommentOutput {
  public Comment $comment;
}

class GetCommentsForComparedCommitInput {
  public CommitId $after_commit_id;
  public CommitId $before_commit_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public RepositoryName $repository_name;
}

class GetCommentsForComparedCommitOutput {
  public CommentsForComparedCommitData $comments_for_compared_commit_data;
  public NextToken $next_token;
}

class GetCommentsForPullRequestInput {
  public CommitId $after_commit_id;
  public CommitId $before_commit_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public PullRequestId $pull_request_id;
  public RepositoryName $repository_name;
}

class GetCommentsForPullRequestOutput {
  public CommentsForPullRequestData $comments_for_pull_request_data;
  public NextToken $next_token;
}

class GetCommitInput {
  public ObjectId $commit_id;
  public RepositoryName $repository_name;
}

class GetCommitOutput {
  public Commit $commit;
}

class GetDifferencesInput {
  public Limit $max_results;
  public NextToken $next_token;
  public CommitName $after_commit_specifier;
  public Path $after_path;
  public CommitName $before_commit_specifier;
  public Path $before_path;
  public RepositoryName $repository_name;
}

class GetDifferencesOutput {
  public NextToken $next_token;
  public DifferenceList $differences;
}

class GetFileInput {
  public CommitName $commit_specifier;
  public Path $file_path;
  public RepositoryName $repository_name;
}

class GetFileOutput {
  public ObjectId $blob_id;
  public ObjectId $commit_id;
  public FileContent $file_content;
  public FileModeTypeEnum $file_mode;
  public Path $file_path;
  public ObjectSize $file_size;
}

class GetFolderInput {
  public CommitName $commit_specifier;
  public Path $folder_path;
  public RepositoryName $repository_name;
}

class GetFolderOutput {
  public ObjectId $commit_id;
  public FileList $files;
  public Path $folder_path;
  public FolderList $sub_folders;
  public SubModuleList $sub_modules;
  public SymbolicLinkList $symbolic_links;
  public ObjectId $tree_id;
}

class GetMergeCommitInput {
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public CommitName $destination_commit_specifier;
  public RepositoryName $repository_name;
  public CommitName $source_commit_specifier;
}

class GetMergeCommitOutput {
  public ObjectId $base_commit_id;
  public ObjectId $destination_commit_id;
  public ObjectId $merged_commit_id;
  public ObjectId $source_commit_id;
}

class GetMergeConflictsInput {
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public CommitName $destination_commit_specifier;
  public MaxResults $max_conflict_files;
  public MergeOptionTypeEnum $merge_option;
  public NextToken $next_token;
  public RepositoryName $repository_name;
  public CommitName $source_commit_specifier;
}

class GetMergeConflictsOutput {
  public ObjectId $base_commit_id;
  public ConflictMetadataList $conflict_metadata_list;
  public ObjectId $destination_commit_id;
  public IsMergeable $mergeable;
  public NextToken $next_token;
  public ObjectId $source_commit_id;
}

class GetMergeOptionsInput {
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public CommitName $destination_commit_specifier;
  public RepositoryName $repository_name;
  public CommitName $source_commit_specifier;
}

class GetMergeOptionsOutput {
  public ObjectId $base_commit_id;
  public ObjectId $destination_commit_id;
  public MergeOptions $merge_options;
  public ObjectId $source_commit_id;
}

class GetPullRequestApprovalStatesInput {
  public PullRequestId $pull_request_id;
  public RevisionId $revision_id;
}

class GetPullRequestApprovalStatesOutput {
  public ApprovalList $approvals;
}

class GetPullRequestInput {
  public PullRequestId $pull_request_id;
}

class GetPullRequestOutput {
  public PullRequest $pull_request;
}

class GetPullRequestOverrideStateInput {
  public PullRequestId $pull_request_id;
  public RevisionId $revision_id;
}

class GetPullRequestOverrideStateOutput {
  public Overridden $overridden;
  public Arn $overrider;
}

class GetRepositoryInput {
  public RepositoryName $repository_name;
}

class GetRepositoryOutput {
  public RepositoryMetadata $repository_metadata;
}

class GetRepositoryTriggersInput {
  public RepositoryName $repository_name;
}

class GetRepositoryTriggersOutput {
  public RepositoryTriggersConfigurationId $configuration_id;
  public RepositoryTriggersList $triggers;
}

class HunkContent {
}

class IdempotencyParameterMismatchException {
}

class InvalidActorArnException {
}

class InvalidApprovalRuleContentException {
}

class InvalidApprovalRuleNameException {
}

class InvalidApprovalRuleTemplateContentException {
}

class InvalidApprovalRuleTemplateDescriptionException {
}

class InvalidApprovalRuleTemplateNameException {
}

class InvalidApprovalStateException {
}

class InvalidAuthorArnException {
}

class InvalidBlobIdException {
}

class InvalidBranchNameException {
}

class InvalidClientRequestTokenException {
}

class InvalidCommentIdException {
}

class InvalidCommitException {
}

class InvalidCommitIdException {
}

class InvalidConflictDetailLevelException {
}

class InvalidConflictResolutionException {
}

class InvalidConflictResolutionStrategyException {
}

class InvalidContinuationTokenException {
}

class InvalidDeletionParameterException {
}

class InvalidDescriptionException {
}

class InvalidDestinationCommitSpecifierException {
}

class InvalidEmailException {
}

class InvalidFileLocationException {
}

class InvalidFileModeException {
}

class InvalidFilePositionException {
}

class InvalidMaxConflictFilesException {
}

class InvalidMaxMergeHunksException {
}

class InvalidMaxResultsException {
}

class InvalidMergeOptionException {
}

class InvalidOrderException {
}

class InvalidOverrideStatusException {
}

class InvalidParentCommitIdException {
}

class InvalidPathException {
}

class InvalidPullRequestEventTypeException {
}

class InvalidPullRequestIdException {
}

class InvalidPullRequestStatusException {
}

class InvalidPullRequestStatusUpdateException {
}

class InvalidReferenceNameException {
}

class InvalidRelativeFileVersionEnumException {
}

class InvalidReplacementContentException {
}

class InvalidReplacementTypeException {
}

class InvalidRepositoryDescriptionException {
}

class InvalidRepositoryNameException {
}

class InvalidRepositoryTriggerBranchNameException {
}

class InvalidRepositoryTriggerCustomDataException {
}

class InvalidRepositoryTriggerDestinationArnException {
}

class InvalidRepositoryTriggerEventsException {
}

class InvalidRepositoryTriggerNameException {
}

class InvalidRepositoryTriggerRegionException {
}

class InvalidResourceArnException {
}

class InvalidRevisionIdException {
}

class InvalidRuleContentSha256Exception {
}

class InvalidSortByException {
}

class InvalidSourceCommitSpecifierException {
}

class InvalidSystemTagUsageException {
}

class InvalidTagKeysListException {
}

class InvalidTagsMapException {
}

class InvalidTargetBranchException {
}

class InvalidTargetException {
}

class InvalidTargetsException {
}

class InvalidTitleException {
}

class IsBinaryFile {
  public CapitalBoolean $base;
  public CapitalBoolean $destination;
  public CapitalBoolean $source;
}

class IsCommentDeleted {
}

class IsContentConflict {
}

class IsFileModeConflict {
}

class IsHunkConflict {
}

class IsMergeable {
}

class IsMerged {
}

class IsMove {
}

class IsObjectTypeConflict {
}

class KeepEmptyFolders {
}

class LastModifiedDate {
}

class Limit {
}

class LineNumber {
}

class ListApprovalRuleTemplatesInput {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListApprovalRuleTemplatesOutput {
  public ApprovalRuleTemplateNameList $approval_rule_template_names;
  public NextToken $next_token;
}

class ListAssociatedApprovalRuleTemplatesForRepositoryInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public RepositoryName $repository_name;
}

class ListAssociatedApprovalRuleTemplatesForRepositoryOutput {
  public ApprovalRuleTemplateNameList $approval_rule_template_names;
  public NextToken $next_token;
}

class ListBranchesInput {
  public NextToken $next_token;
  public RepositoryName $repository_name;
}

class ListBranchesOutput {
  public BranchNameList $branches;
  public NextToken $next_token;
}

class ListPullRequestsInput {
  public Arn $author_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
  public PullRequestStatusEnum $pull_request_status;
  public RepositoryName $repository_name;
}

class ListPullRequestsOutput {
  public NextToken $next_token;
  public PullRequestIdList $pull_request_ids;
}

class ListRepositoriesForApprovalRuleTemplateInput {
  public ApprovalRuleTemplateName $approval_rule_template_name;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListRepositoriesForApprovalRuleTemplateOutput {
  public NextToken $next_token;
  public RepositoryNameList $repository_names;
}

class ListRepositoriesInput {
  public NextToken $next_token;
  public OrderEnum $order;
  public SortByEnum $sort_by;
}

class ListRepositoriesOutput {
  public NextToken $next_token;
  public RepositoryNameIdPairList $repositories;
}

class ListTagsForResourceInput {
  public NextToken $next_token;
  public ResourceArn $resource_arn;
}

class ListTagsForResourceOutput {
  public NextToken $next_token;
  public TagsMap $tags;
}

class Location {
  public Path $file_path;
  public Position $file_position;
  public RelativeFileVersionEnum $relative_file_version;
}

class ManualMergeRequiredException {
}

class MaxResults {
}

class MaximumBranchesExceededException {
}

class MaximumConflictResolutionEntriesExceededException {
}

class MaximumFileContentToLoadExceededException {
}

class MaximumFileEntriesExceededException {
}

class MaximumItemsToCompareExceededException {
}

class MaximumNumberOfApprovalsExceededException {
}

class MaximumOpenPullRequestsExceededException {
}

class MaximumRepositoryNamesExceededException {
}

class MaximumRepositoryTriggersExceededException {
}

class MaximumRuleTemplatesAssociatedWithRepositoryException {
}

class MergeBranchesByFastForwardInput {
  public CommitName $destination_commit_specifier;
  public RepositoryName $repository_name;
  public CommitName $source_commit_specifier;
  public BranchName $target_branch;
}

class MergeBranchesByFastForwardOutput {
  public ObjectId $commit_id;
  public ObjectId $tree_id;
}

class MergeBranchesBySquashInput {
  public Name $author_name;
  public Message $commit_message;
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ConflictResolution $conflict_resolution;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public CommitName $destination_commit_specifier;
  public Email $email;
  public KeepEmptyFolders $keep_empty_folders;
  public RepositoryName $repository_name;
  public CommitName $source_commit_specifier;
  public BranchName $target_branch;
}

class MergeBranchesBySquashOutput {
  public ObjectId $commit_id;
  public ObjectId $tree_id;
}

class MergeBranchesByThreeWayInput {
  public Name $author_name;
  public Message $commit_message;
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ConflictResolution $conflict_resolution;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public CommitName $destination_commit_specifier;
  public Email $email;
  public KeepEmptyFolders $keep_empty_folders;
  public RepositoryName $repository_name;
  public CommitName $source_commit_specifier;
  public BranchName $target_branch;
}

class MergeBranchesByThreeWayOutput {
  public ObjectId $commit_id;
  public ObjectId $tree_id;
}

class MergeHunk {
  public MergeHunkDetail $base;
  public MergeHunkDetail $destination;
  public IsHunkConflict $is_conflict;
  public MergeHunkDetail $source;
}

class MergeHunkDetail {
  public LineNumber $end_line;
  public HunkContent $hunk_content;
  public LineNumber $start_line;
}

class MergeHunks {
}

class MergeMetadata {
  public IsMerged $is_merged;
  public CommitId $merge_commit_id;
  public MergeOptionTypeEnum $merge_option;
  public Arn $merged_by;
}

class MergeOperations {
  public ChangeTypeEnum $destination;
  public ChangeTypeEnum $source;
}

class MergeOptionRequiredException {
}

class MergeOptionTypeEnum {
}

class MergeOptions {
}

class MergePullRequestByFastForwardInput {
  public PullRequestId $pull_request_id;
  public RepositoryName $repository_name;
  public ObjectId $source_commit_id;
}

class MergePullRequestByFastForwardOutput {
  public PullRequest $pull_request;
}

class MergePullRequestBySquashInput {
  public Name $author_name;
  public Message $commit_message;
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ConflictResolution $conflict_resolution;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public Email $email;
  public KeepEmptyFolders $keep_empty_folders;
  public PullRequestId $pull_request_id;
  public RepositoryName $repository_name;
  public ObjectId $source_commit_id;
}

class MergePullRequestBySquashOutput {
  public PullRequest $pull_request;
}

class MergePullRequestByThreeWayInput {
  public Name $author_name;
  public Message $commit_message;
  public ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ConflictResolution $conflict_resolution;
  public ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public Email $email;
  public KeepEmptyFolders $keep_empty_folders;
  public PullRequestId $pull_request_id;
  public RepositoryName $repository_name;
  public ObjectId $source_commit_id;
}

class MergePullRequestByThreeWayOutput {
  public PullRequest $pull_request;
}

class Message {
}

class Mode {
}

class MultipleConflictResolutionEntriesException {
}

class MultipleRepositoriesInPullRequestException {
}

class Name {
}

class NameLengthExceededException {
}

class NextToken {
}

class NoChangeException {
}

class NumberOfConflicts {
}

class NumberOfRuleTemplatesExceededException {
}

class NumberOfRulesExceededException {
}

class ObjectId {
}

class ObjectSize {
}

class ObjectTypeEnum {
}

class ObjectTypes {
  public ObjectTypeEnum $base;
  public ObjectTypeEnum $destination;
  public ObjectTypeEnum $source;
}

class OrderEnum {
}

class OriginApprovalRuleTemplate {
  public ApprovalRuleTemplateId $approval_rule_template_id;
  public ApprovalRuleTemplateName $approval_rule_template_name;
}

class Overridden {
}

class OverrideAlreadySetException {
}

class OverridePullRequestApprovalRulesInput {
  public OverrideStatus $override_status;
  public PullRequestId $pull_request_id;
  public RevisionId $revision_id;
}

class OverrideStatus {
}

class OverrideStatusRequiredException {
}

class ParentCommitDoesNotExistException {
}

class ParentCommitIdOutdatedException {
}

class ParentCommitIdRequiredException {
}

class ParentList {
}

class Path {
}

class PathDoesNotExistException {
}

class PathRequiredException {
}

class Position {
}

class PostCommentForComparedCommitInput {
  public CommitId $after_commit_id;
  public CommitId $before_commit_id;
  public ClientRequestToken $client_request_token;
  public Content $content;
  public Location $location;
  public RepositoryName $repository_name;
}

class PostCommentForComparedCommitOutput {
  public ObjectId $after_blob_id;
  public CommitId $after_commit_id;
  public ObjectId $before_blob_id;
  public CommitId $before_commit_id;
  public Comment $comment;
  public Location $location;
  public RepositoryName $repository_name;
}

class PostCommentForPullRequestInput {
  public CommitId $after_commit_id;
  public CommitId $before_commit_id;
  public ClientRequestToken $client_request_token;
  public Content $content;
  public Location $location;
  public PullRequestId $pull_request_id;
  public RepositoryName $repository_name;
}

class PostCommentForPullRequestOutput {
  public ObjectId $after_blob_id;
  public CommitId $after_commit_id;
  public ObjectId $before_blob_id;
  public CommitId $before_commit_id;
  public Comment $comment;
  public Location $location;
  public PullRequestId $pull_request_id;
  public RepositoryName $repository_name;
}

class PostCommentReplyInput {
  public ClientRequestToken $client_request_token;
  public Content $content;
  public CommentId $in_reply_to;
}

class PostCommentReplyOutput {
  public Comment $comment;
}

class PullRequest {
  public ApprovalRulesList $approval_rules;
  public Arn $author_arn;
  public ClientRequestToken $client_request_token;
  public CreationDate $creation_date;
  public Description $description;
  public LastModifiedDate $last_activity_date;
  public PullRequestId $pull_request_id;
  public PullRequestStatusEnum $pull_request_status;
  public PullRequestTargetList $pull_request_targets;
  public RevisionId $revision_id;
  public Title $title;
}

class PullRequestAlreadyClosedException {
}

class PullRequestApprovalRulesNotSatisfiedException {
}

class PullRequestCannotBeApprovedByAuthorException {
}

class PullRequestCreatedEventMetadata {
  public CommitId $destination_commit_id;
  public CommitId $merge_base;
  public RepositoryName $repository_name;
  public CommitId $source_commit_id;
}

class PullRequestDoesNotExistException {
}

class PullRequestEvent {
  public Arn $actor_arn;
  public ApprovalRuleEventMetadata $approval_rule_event_metadata;
  public ApprovalRuleOverriddenEventMetadata $approval_rule_overridden_event_metadata;
  public ApprovalStateChangedEventMetadata $approval_state_changed_event_metadata;
  public EventDate $event_date;
  public PullRequestCreatedEventMetadata $pull_request_created_event_metadata;
  public PullRequestEventType $pull_request_event_type;
  public PullRequestId $pull_request_id;
  public PullRequestMergedStateChangedEventMetadata $pull_request_merged_state_changed_event_metadata;
  public PullRequestSourceReferenceUpdatedEventMetadata $pull_request_source_reference_updated_event_metadata;
  public PullRequestStatusChangedEventMetadata $pull_request_status_changed_event_metadata;
}

class PullRequestEventList {
}

class PullRequestEventType {
}

class PullRequestId {
}

class PullRequestIdList {
}

class PullRequestIdRequiredException {
}

class PullRequestMergedStateChangedEventMetadata {
  public ReferenceName $destination_reference;
  public MergeMetadata $merge_metadata;
  public RepositoryName $repository_name;
}

class PullRequestSourceReferenceUpdatedEventMetadata {
  public CommitId $after_commit_id;
  public CommitId $before_commit_id;
  public CommitId $merge_base;
  public RepositoryName $repository_name;
}

class PullRequestStatusChangedEventMetadata {
  public PullRequestStatusEnum $pull_request_status;
}

class PullRequestStatusEnum {
}

class PullRequestStatusRequiredException {
}

class PullRequestTarget {
  public CommitId $destination_commit;
  public ReferenceName $destination_reference;
  public CommitId $merge_base;
  public MergeMetadata $merge_metadata;
  public RepositoryName $repository_name;
  public CommitId $source_commit;
  public ReferenceName $source_reference;
}

class PullRequestTargetList {
}

class PutFileEntries {
}

class PutFileEntry {
  public FileContent $file_content;
  public FileModeTypeEnum $file_mode;
  public Path $file_path;
  public SourceFileSpecifier $source_file;
}

class PutFileEntryConflictException {
}

class PutFileInput {
  public BranchName $branch_name;
  public Message $commit_message;
  public Email $email;
  public FileContent $file_content;
  public FileModeTypeEnum $file_mode;
  public Path $file_path;
  public Name $name;
  public CommitId $parent_commit_id;
  public RepositoryName $repository_name;
}

class PutFileOutput {
  public ObjectId $blob_id;
  public ObjectId $commit_id;
  public ObjectId $tree_id;
}

class PutRepositoryTriggersInput {
  public RepositoryName $repository_name;
  public RepositoryTriggersList $triggers;
}

class PutRepositoryTriggersOutput {
  public RepositoryTriggersConfigurationId $configuration_id;
}

class ReferenceDoesNotExistException {
}

class ReferenceName {
}

class ReferenceNameRequiredException {
}

class ReferenceTypeNotSupportedException {
}

class RelativeFileVersionEnum {
}

class ReplaceContentEntries {
}

class ReplaceContentEntry {
  public FileContent $content;
  public FileModeTypeEnum $file_mode;
  public Path $file_path;
  public ReplacementTypeEnum $replacement_type;
}

class ReplacementContentRequiredException {
}

class ReplacementTypeEnum {
}

class ReplacementTypeRequiredException {
}

class RepositoryDescription {
}

class RepositoryDoesNotExistException {
}

class RepositoryId {
}

class RepositoryLimitExceededException {
}

class RepositoryMetadata {
  public Arn $arn;
  public AccountId $account_id;
  public CloneUrlHttp $clone_url_http;
  public CloneUrlSsh $clone_url_ssh;
  public CreationDate $creation_date;
  public BranchName $default_branch;
  public LastModifiedDate $last_modified_date;
  public RepositoryDescription $repository_description;
  public RepositoryId $repository_id;
  public RepositoryName $repository_name;
}

class RepositoryMetadataList {
}

class RepositoryName {
}

class RepositoryNameExistsException {
}

class RepositoryNameIdPair {
  public RepositoryId $repository_id;
  public RepositoryName $repository_name;
}

class RepositoryNameIdPairList {
}

class RepositoryNameList {
}

class RepositoryNameRequiredException {
}

class RepositoryNamesRequiredException {
}

class RepositoryNotAssociatedWithPullRequestException {
}

class RepositoryNotFoundList {
}

class RepositoryTrigger {
  public BranchNameList $branches;
  public RepositoryTriggerCustomData $custom_data;
  public Arn $destination_arn;
  public RepositoryTriggerEventList $events;
  public RepositoryTriggerName $name;
}

class RepositoryTriggerBranchNameListRequiredException {
}

class RepositoryTriggerCustomData {
}

class RepositoryTriggerDestinationArnRequiredException {
}

class RepositoryTriggerEventEnum {
}

class RepositoryTriggerEventList {
}

class RepositoryTriggerEventsListRequiredException {
}

class RepositoryTriggerExecutionFailure {
  public RepositoryTriggerExecutionFailureMessage $failure_message;
  public RepositoryTriggerName $trigger;
}

class RepositoryTriggerExecutionFailureList {
}

class RepositoryTriggerExecutionFailureMessage {
}

class RepositoryTriggerName {
}

class RepositoryTriggerNameList {
}

class RepositoryTriggerNameRequiredException {
}

class RepositoryTriggersConfigurationId {
}

class RepositoryTriggersList {
}

class RepositoryTriggersListRequiredException {
}

class ResourceArn {
}

class ResourceArnRequiredException {
}

class RestrictedSourceFileException {
}

class RevisionId {
}

class RevisionIdRequiredException {
}

class RevisionNotCurrentException {
}

class RuleContentSha256 {
}

class SameFileContentException {
}

class SamePathRequestException {
}

class SetFileModeEntries {
}

class SetFileModeEntry {
  public FileModeTypeEnum $file_mode;
  public Path $file_path;
}

class SortByEnum {
}

class SourceAndDestinationAreSameException {
}

class SourceFileOrContentRequiredException {
}

class SourceFileSpecifier {
  public Path $file_path;
  public IsMove $is_move;
}

class SubModule {
  public Path $absolute_path;
  public ObjectId $commit_id;
  public Path $relative_path;
}

class SubModuleList {
}

class SymbolicLink {
  public Path $absolute_path;
  public ObjectId $blob_id;
  public FileModeTypeEnum $file_mode;
  public Path $relative_path;
}

class SymbolicLinkList {
}

class TagKey {
}

class TagKeysList {
}

class TagKeysListRequiredException {
}

class TagPolicyException {
}

class TagResourceInput {
  public ResourceArn $resource_arn;
  public TagsMap $tags;
}

class TagValue {
}

class TagsMap {
}

class TagsMapRequiredException {
}

class Target {
  public ReferenceName $destination_reference;
  public RepositoryName $repository_name;
  public ReferenceName $source_reference;
}

class TargetList {
}

class TargetRequiredException {
}

class TargetsRequiredException {
}

class TestRepositoryTriggersInput {
  public RepositoryName $repository_name;
  public RepositoryTriggersList $triggers;
}

class TestRepositoryTriggersOutput {
  public RepositoryTriggerExecutionFailureList $failed_executions;
  public RepositoryTriggerNameList $successful_executions;
}

class TipOfSourceReferenceIsDifferentException {
}

class TipsDivergenceExceededException {
}

class Title {
}

class TitleRequiredException {
}

class TooManyTagsException {
}

class UntagResourceInput {
  public ResourceArn $resource_arn;
  public TagKeysList $tag_keys;
}

class UpdateApprovalRuleTemplateContentInput {
  public ApprovalRuleTemplateName $approval_rule_template_name;
  public RuleContentSha256 $existing_rule_content_sha_256;
  public ApprovalRuleTemplateContent $new_rule_content;
}

class UpdateApprovalRuleTemplateContentOutput {
  public ApprovalRuleTemplate $approval_rule_template;
}

class UpdateApprovalRuleTemplateDescriptionInput {
  public ApprovalRuleTemplateDescription $approval_rule_template_description;
  public ApprovalRuleTemplateName $approval_rule_template_name;
}

class UpdateApprovalRuleTemplateDescriptionOutput {
  public ApprovalRuleTemplate $approval_rule_template;
}

class UpdateApprovalRuleTemplateNameInput {
  public ApprovalRuleTemplateName $new_approval_rule_template_name;
  public ApprovalRuleTemplateName $old_approval_rule_template_name;
}

class UpdateApprovalRuleTemplateNameOutput {
  public ApprovalRuleTemplate $approval_rule_template;
}

class UpdateCommentInput {
  public CommentId $comment_id;
  public Content $content;
}

class UpdateCommentOutput {
  public Comment $comment;
}

class UpdateDefaultBranchInput {
  public BranchName $default_branch_name;
  public RepositoryName $repository_name;
}

class UpdatePullRequestApprovalRuleContentInput {
  public ApprovalRuleName $approval_rule_name;
  public RuleContentSha256 $existing_rule_content_sha_256;
  public ApprovalRuleContent $new_rule_content;
  public PullRequestId $pull_request_id;
}

class UpdatePullRequestApprovalRuleContentOutput {
  public ApprovalRule $approval_rule;
}

class UpdatePullRequestApprovalStateInput {
  public ApprovalState $approval_state;
  public PullRequestId $pull_request_id;
  public RevisionId $revision_id;
}

class UpdatePullRequestDescriptionInput {
  public Description $description;
  public PullRequestId $pull_request_id;
}

class UpdatePullRequestDescriptionOutput {
  public PullRequest $pull_request;
}

class UpdatePullRequestStatusInput {
  public PullRequestId $pull_request_id;
  public PullRequestStatusEnum $pull_request_status;
}

class UpdatePullRequestStatusOutput {
  public PullRequest $pull_request;
}

class UpdatePullRequestTitleInput {
  public PullRequestId $pull_request_id;
  public Title $title;
}

class UpdatePullRequestTitleOutput {
  public PullRequest $pull_request;
}

class UpdateRepositoryDescriptionInput {
  public RepositoryDescription $repository_description;
  public RepositoryName $repository_name;
}

class UpdateRepositoryNameInput {
  public RepositoryName $new_name;
  public RepositoryName $old_name;
}

class UserInfo {
  public Date $date;
  public Email $email;
  public Name $name;
}

class blob {
}


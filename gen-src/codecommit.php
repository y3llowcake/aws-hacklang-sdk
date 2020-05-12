<?hh // strict
namespace slack\aws\codecommit;

interface CodeCommit {
  public function AssociateApprovalRuleTemplateWithRepository(AssociateApprovalRuleTemplateWithRepositoryInput $in): Awaitable<\Errors\Error>;
  public function BatchAssociateApprovalRuleTemplateWithRepositories(BatchAssociateApprovalRuleTemplateWithRepositoriesInput $in): Awaitable<\Errors\Result<BatchAssociateApprovalRuleTemplateWithRepositoriesOutput>>;
  public function BatchDescribeMergeConflicts(BatchDescribeMergeConflictsInput $in): Awaitable<\Errors\Result<BatchDescribeMergeConflictsOutput>>;
  public function BatchDisassociateApprovalRuleTemplateFromRepositories(BatchDisassociateApprovalRuleTemplateFromRepositoriesInput $in): Awaitable<\Errors\Result<BatchDisassociateApprovalRuleTemplateFromRepositoriesOutput>>;
  public function BatchGetCommits(BatchGetCommitsInput $in): Awaitable<\Errors\Result<BatchGetCommitsOutput>>;
  public function BatchGetRepositories(BatchGetRepositoriesInput $in): Awaitable<\Errors\Result<BatchGetRepositoriesOutput>>;
  public function CreateApprovalRuleTemplate(CreateApprovalRuleTemplateInput $in): Awaitable<\Errors\Result<CreateApprovalRuleTemplateOutput>>;
  public function CreateBranch(CreateBranchInput $in): Awaitable<\Errors\Error>;
  public function CreateCommit(CreateCommitInput $in): Awaitable<\Errors\Result<CreateCommitOutput>>;
  public function CreatePullRequest(CreatePullRequestInput $in): Awaitable<\Errors\Result<CreatePullRequestOutput>>;
  public function CreatePullRequestApprovalRule(CreatePullRequestApprovalRuleInput $in): Awaitable<\Errors\Result<CreatePullRequestApprovalRuleOutput>>;
  public function CreateRepository(CreateRepositoryInput $in): Awaitable<\Errors\Result<CreateRepositoryOutput>>;
  public function CreateUnreferencedMergeCommit(CreateUnreferencedMergeCommitInput $in): Awaitable<\Errors\Result<CreateUnreferencedMergeCommitOutput>>;
  public function DeleteApprovalRuleTemplate(DeleteApprovalRuleTemplateInput $in): Awaitable<\Errors\Result<DeleteApprovalRuleTemplateOutput>>;
  public function DeleteBranch(DeleteBranchInput $in): Awaitable<\Errors\Result<DeleteBranchOutput>>;
  public function DeleteCommentContent(DeleteCommentContentInput $in): Awaitable<\Errors\Result<DeleteCommentContentOutput>>;
  public function DeleteFile(DeleteFileInput $in): Awaitable<\Errors\Result<DeleteFileOutput>>;
  public function DeletePullRequestApprovalRule(DeletePullRequestApprovalRuleInput $in): Awaitable<\Errors\Result<DeletePullRequestApprovalRuleOutput>>;
  public function DeleteRepository(DeleteRepositoryInput $in): Awaitable<\Errors\Result<DeleteRepositoryOutput>>;
  public function DescribeMergeConflicts(DescribeMergeConflictsInput $in): Awaitable<\Errors\Result<DescribeMergeConflictsOutput>>;
  public function DescribePullRequestEvents(DescribePullRequestEventsInput $in): Awaitable<\Errors\Result<DescribePullRequestEventsOutput>>;
  public function DisassociateApprovalRuleTemplateFromRepository(DisassociateApprovalRuleTemplateFromRepositoryInput $in): Awaitable<\Errors\Error>;
  public function EvaluatePullRequestApprovalRules(EvaluatePullRequestApprovalRulesInput $in): Awaitable<\Errors\Result<EvaluatePullRequestApprovalRulesOutput>>;
  public function GetApprovalRuleTemplate(GetApprovalRuleTemplateInput $in): Awaitable<\Errors\Result<GetApprovalRuleTemplateOutput>>;
  public function GetBlob(GetBlobInput $in): Awaitable<\Errors\Result<GetBlobOutput>>;
  public function GetBranch(GetBranchInput $in): Awaitable<\Errors\Result<GetBranchOutput>>;
  public function GetComment(GetCommentInput $in): Awaitable<\Errors\Result<GetCommentOutput>>;
  public function GetCommentsForComparedCommit(GetCommentsForComparedCommitInput $in): Awaitable<\Errors\Result<GetCommentsForComparedCommitOutput>>;
  public function GetCommentsForPullRequest(GetCommentsForPullRequestInput $in): Awaitable<\Errors\Result<GetCommentsForPullRequestOutput>>;
  public function GetCommit(GetCommitInput $in): Awaitable<\Errors\Result<GetCommitOutput>>;
  public function GetDifferences(GetDifferencesInput $in): Awaitable<\Errors\Result<GetDifferencesOutput>>;
  public function GetFile(GetFileInput $in): Awaitable<\Errors\Result<GetFileOutput>>;
  public function GetFolder(GetFolderInput $in): Awaitable<\Errors\Result<GetFolderOutput>>;
  public function GetMergeCommit(GetMergeCommitInput $in): Awaitable<\Errors\Result<GetMergeCommitOutput>>;
  public function GetMergeConflicts(GetMergeConflictsInput $in): Awaitable<\Errors\Result<GetMergeConflictsOutput>>;
  public function GetMergeOptions(GetMergeOptionsInput $in): Awaitable<\Errors\Result<GetMergeOptionsOutput>>;
  public function GetPullRequest(GetPullRequestInput $in): Awaitable<\Errors\Result<GetPullRequestOutput>>;
  public function GetPullRequestApprovalStates(GetPullRequestApprovalStatesInput $in): Awaitable<\Errors\Result<GetPullRequestApprovalStatesOutput>>;
  public function GetPullRequestOverrideState(GetPullRequestOverrideStateInput $in): Awaitable<\Errors\Result<GetPullRequestOverrideStateOutput>>;
  public function GetRepository(GetRepositoryInput $in): Awaitable<\Errors\Result<GetRepositoryOutput>>;
  public function GetRepositoryTriggers(GetRepositoryTriggersInput $in): Awaitable<\Errors\Result<GetRepositoryTriggersOutput>>;
  public function ListApprovalRuleTemplates(ListApprovalRuleTemplatesInput $in): Awaitable<\Errors\Result<ListApprovalRuleTemplatesOutput>>;
  public function ListAssociatedApprovalRuleTemplatesForRepository(ListAssociatedApprovalRuleTemplatesForRepositoryInput $in): Awaitable<\Errors\Result<ListAssociatedApprovalRuleTemplatesForRepositoryOutput>>;
  public function ListBranches(ListBranchesInput $in): Awaitable<\Errors\Result<ListBranchesOutput>>;
  public function ListPullRequests(ListPullRequestsInput $in): Awaitable<\Errors\Result<ListPullRequestsOutput>>;
  public function ListRepositories(ListRepositoriesInput $in): Awaitable<\Errors\Result<ListRepositoriesOutput>>;
  public function ListRepositoriesForApprovalRuleTemplate(ListRepositoriesForApprovalRuleTemplateInput $in): Awaitable<\Errors\Result<ListRepositoriesForApprovalRuleTemplateOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput $in): Awaitable<\Errors\Result<ListTagsForResourceOutput>>;
  public function MergeBranchesByFastForward(MergeBranchesByFastForwardInput $in): Awaitable<\Errors\Result<MergeBranchesByFastForwardOutput>>;
  public function MergeBranchesBySquash(MergeBranchesBySquashInput $in): Awaitable<\Errors\Result<MergeBranchesBySquashOutput>>;
  public function MergeBranchesByThreeWay(MergeBranchesByThreeWayInput $in): Awaitable<\Errors\Result<MergeBranchesByThreeWayOutput>>;
  public function MergePullRequestByFastForward(MergePullRequestByFastForwardInput $in): Awaitable<\Errors\Result<MergePullRequestByFastForwardOutput>>;
  public function MergePullRequestBySquash(MergePullRequestBySquashInput $in): Awaitable<\Errors\Result<MergePullRequestBySquashOutput>>;
  public function MergePullRequestByThreeWay(MergePullRequestByThreeWayInput $in): Awaitable<\Errors\Result<MergePullRequestByThreeWayOutput>>;
  public function OverridePullRequestApprovalRules(OverridePullRequestApprovalRulesInput $in): Awaitable<\Errors\Error>;
  public function PostCommentForComparedCommit(PostCommentForComparedCommitInput $in): Awaitable<\Errors\Result<PostCommentForComparedCommitOutput>>;
  public function PostCommentForPullRequest(PostCommentForPullRequestInput $in): Awaitable<\Errors\Result<PostCommentForPullRequestOutput>>;
  public function PostCommentReply(PostCommentReplyInput $in): Awaitable<\Errors\Result<PostCommentReplyOutput>>;
  public function PutFile(PutFileInput $in): Awaitable<\Errors\Result<PutFileOutput>>;
  public function PutRepositoryTriggers(PutRepositoryTriggersInput $in): Awaitable<\Errors\Result<PutRepositoryTriggersOutput>>;
  public function TagResource(TagResourceInput $in): Awaitable<\Errors\Error>;
  public function TestRepositoryTriggers(TestRepositoryTriggersInput $in): Awaitable<\Errors\Result<TestRepositoryTriggersOutput>>;
  public function UntagResource(UntagResourceInput $in): Awaitable<\Errors\Error>;
  public function UpdateApprovalRuleTemplateContent(UpdateApprovalRuleTemplateContentInput $in): Awaitable<\Errors\Result<UpdateApprovalRuleTemplateContentOutput>>;
  public function UpdateApprovalRuleTemplateDescription(UpdateApprovalRuleTemplateDescriptionInput $in): Awaitable<\Errors\Result<UpdateApprovalRuleTemplateDescriptionOutput>>;
  public function UpdateApprovalRuleTemplateName(UpdateApprovalRuleTemplateNameInput $in): Awaitable<\Errors\Result<UpdateApprovalRuleTemplateNameOutput>>;
  public function UpdateComment(UpdateCommentInput $in): Awaitable<\Errors\Result<UpdateCommentOutput>>;
  public function UpdateDefaultBranch(UpdateDefaultBranchInput $in): Awaitable<\Errors\Error>;
  public function UpdatePullRequestApprovalRuleContent(UpdatePullRequestApprovalRuleContentInput $in): Awaitable<\Errors\Result<UpdatePullRequestApprovalRuleContentOutput>>;
  public function UpdatePullRequestApprovalState(UpdatePullRequestApprovalStateInput $in): Awaitable<\Errors\Error>;
  public function UpdatePullRequestDescription(UpdatePullRequestDescriptionInput $in): Awaitable<\Errors\Result<UpdatePullRequestDescriptionOutput>>;
  public function UpdatePullRequestStatus(UpdatePullRequestStatusInput $in): Awaitable<\Errors\Result<UpdatePullRequestStatusOutput>>;
  public function UpdatePullRequestTitle(UpdatePullRequestTitleInput $in): Awaitable<\Errors\Result<UpdatePullRequestTitleOutput>>;
  public function UpdateRepositoryDescription(UpdateRepositoryDescriptionInput $in): Awaitable<\Errors\Error>;
  public function UpdateRepositoryName(UpdateRepositoryNameInput $in): Awaitable<\Errors\Error>;
}

type AccountId = string;

class ActorDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AdditionalData = string;

class Approval {
  public ?ApprovalState $approval_state;
  public ?Arn $user_arn;

  public function __construct(shape(
    ?'approval_state' => ?ApprovalState,
    ?'user_arn' => ?Arn,
  ) $s = shape()) {
    $this->approval_state = $s['approval_state'] ?? '';
    $this->user_arn = $s['user_arn'] ?? '';
  }
}

type ApprovalList = vec<Approval>;

class ApprovalRule {
  public ?ApprovalRuleContent $approval_rule_content;
  public ?ApprovalRuleId $approval_rule_id;
  public ?ApprovalRuleName $approval_rule_name;
  public ?CreationDate $creation_date;
  public ?LastModifiedDate $last_modified_date;
  public ?Arn $last_modified_user;
  public ?OriginApprovalRuleTemplate $origin_approval_rule_template;
  public ?RuleContentSha256 $rule_content_sha_256;

  public function __construct(shape(
    ?'approval_rule_content' => ?ApprovalRuleContent,
    ?'approval_rule_id' => ?ApprovalRuleId,
    ?'approval_rule_name' => ?ApprovalRuleName,
    ?'creation_date' => ?CreationDate,
    ?'last_modified_date' => ?LastModifiedDate,
    ?'last_modified_user' => ?Arn,
    ?'origin_approval_rule_template' => ?OriginApprovalRuleTemplate,
    ?'rule_content_sha_256' => ?RuleContentSha256,
  ) $s = shape()) {
    $this->approval_rule_content = $s['approval_rule_content'] ?? '';
    $this->approval_rule_id = $s['approval_rule_id'] ?? '';
    $this->approval_rule_name = $s['approval_rule_name'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->last_modified_date = $s['last_modified_date'] ?? 0;
    $this->last_modified_user = $s['last_modified_user'] ?? '';
    $this->origin_approval_rule_template = $s['origin_approval_rule_template'] ?? null;
    $this->rule_content_sha_256 = $s['rule_content_sha_256'] ?? '';
  }
}

type ApprovalRuleContent = string;

class ApprovalRuleContentRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ApprovalRuleDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ApprovalRuleEventMetadata {
  public ?ApprovalRuleContent $approval_rule_content;
  public ?ApprovalRuleId $approval_rule_id;
  public ?ApprovalRuleName $approval_rule_name;

  public function __construct(shape(
    ?'approval_rule_content' => ?ApprovalRuleContent,
    ?'approval_rule_id' => ?ApprovalRuleId,
    ?'approval_rule_name' => ?ApprovalRuleName,
  ) $s = shape()) {
    $this->approval_rule_content = $s['approval_rule_content'] ?? '';
    $this->approval_rule_id = $s['approval_rule_id'] ?? '';
    $this->approval_rule_name = $s['approval_rule_name'] ?? '';
  }
}

type ApprovalRuleId = string;

type ApprovalRuleName = string;

class ApprovalRuleNameAlreadyExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ApprovalRuleNameRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ApprovalRuleOverriddenEventMetadata {
  public ?OverrideStatus $override_status;
  public ?RevisionId $revision_id;

  public function __construct(shape(
    ?'override_status' => ?OverrideStatus,
    ?'revision_id' => ?RevisionId,
  ) $s = shape()) {
    $this->override_status = $s['override_status'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class ApprovalRuleTemplate {
  public ?ApprovalRuleTemplateContent $approval_rule_template_content;
  public ?ApprovalRuleTemplateDescription $approval_rule_template_description;
  public ?ApprovalRuleTemplateId $approval_rule_template_id;
  public ?ApprovalRuleTemplateName $approval_rule_template_name;
  public ?CreationDate $creation_date;
  public ?LastModifiedDate $last_modified_date;
  public ?Arn $last_modified_user;
  public ?RuleContentSha256 $rule_content_sha_256;

  public function __construct(shape(
    ?'approval_rule_template_content' => ?ApprovalRuleTemplateContent,
    ?'approval_rule_template_description' => ?ApprovalRuleTemplateDescription,
    ?'approval_rule_template_id' => ?ApprovalRuleTemplateId,
    ?'approval_rule_template_name' => ?ApprovalRuleTemplateName,
    ?'creation_date' => ?CreationDate,
    ?'last_modified_date' => ?LastModifiedDate,
    ?'last_modified_user' => ?Arn,
    ?'rule_content_sha_256' => ?RuleContentSha256,
  ) $s = shape()) {
    $this->approval_rule_template_content = $s['approval_rule_template_content'] ?? '';
    $this->approval_rule_template_description = $s['approval_rule_template_description'] ?? '';
    $this->approval_rule_template_id = $s['approval_rule_template_id'] ?? '';
    $this->approval_rule_template_name = $s['approval_rule_template_name'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->last_modified_date = $s['last_modified_date'] ?? 0;
    $this->last_modified_user = $s['last_modified_user'] ?? '';
    $this->rule_content_sha_256 = $s['rule_content_sha_256'] ?? '';
  }
}

type ApprovalRuleTemplateContent = string;

class ApprovalRuleTemplateContentRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ApprovalRuleTemplateDescription = string;

class ApprovalRuleTemplateDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ApprovalRuleTemplateId = string;

class ApprovalRuleTemplateInUseException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ApprovalRuleTemplateName = string;

class ApprovalRuleTemplateNameAlreadyExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ApprovalRuleTemplateNameList = vec<ApprovalRuleTemplateName>;

class ApprovalRuleTemplateNameRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ApprovalRulesList = vec<ApprovalRule>;

type ApprovalRulesNotSatisfiedList = vec<ApprovalRuleName>;

type ApprovalRulesSatisfiedList = vec<ApprovalRuleName>;

type ApprovalState = string;

class ApprovalStateChangedEventMetadata {
  public ?ApprovalState $approval_status;
  public ?RevisionId $revision_id;

  public function __construct(shape(
    ?'approval_status' => ?ApprovalState,
    ?'revision_id' => ?RevisionId,
  ) $s = shape()) {
    $this->approval_status = $s['approval_status'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class ApprovalStateRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Approved = bool;

type Arn = string;

class AssociateApprovalRuleTemplateWithRepositoryInput {
  public ?ApprovalRuleTemplateName $approval_rule_template_name;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'approval_rule_template_name' => ?ApprovalRuleTemplateName,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->approval_rule_template_name = $s['approval_rule_template_name'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class AuthorDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BatchAssociateApprovalRuleTemplateWithRepositoriesError {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $error_message;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ErrorMessage,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

type BatchAssociateApprovalRuleTemplateWithRepositoriesErrorsList = vec<BatchAssociateApprovalRuleTemplateWithRepositoriesError>;

class BatchAssociateApprovalRuleTemplateWithRepositoriesInput {
  public ?ApprovalRuleTemplateName $approval_rule_template_name;
  public ?RepositoryNameList $repository_names;

  public function __construct(shape(
    ?'approval_rule_template_name' => ?ApprovalRuleTemplateName,
    ?'repository_names' => ?RepositoryNameList,
  ) $s = shape()) {
    $this->approval_rule_template_name = $s['approval_rule_template_name'] ?? '';
    $this->repository_names = $s['repository_names'] ?? vec[];
  }
}

class BatchAssociateApprovalRuleTemplateWithRepositoriesOutput {
  public ?RepositoryNameList $associated_repository_names;
  public ?BatchAssociateApprovalRuleTemplateWithRepositoriesErrorsList $errors;

  public function __construct(shape(
    ?'associated_repository_names' => ?RepositoryNameList,
    ?'errors' => ?BatchAssociateApprovalRuleTemplateWithRepositoriesErrorsList,
  ) $s = shape()) {
    $this->associated_repository_names = $s['associated_repository_names'] ?? vec[];
    $this->errors = $s['errors'] ?? vec[];
  }
}

class BatchDescribeMergeConflictsError {
  public ?ExceptionName $exception_name;
  public ?Path $file_path;
  public ?Message $message;

  public function __construct(shape(
    ?'exception_name' => ?ExceptionName,
    ?'file_path' => ?Path,
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->exception_name = $s['exception_name'] ?? '';
    $this->file_path = $s['file_path'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type BatchDescribeMergeConflictsErrors = vec<BatchDescribeMergeConflictsError>;

class BatchDescribeMergeConflictsInput {
  public ?ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ?ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public ?CommitName $destination_commit_specifier;
  public ?FilePaths $file_paths;
  public ?MaxResults $max_conflict_files;
  public ?MaxResults $max_merge_hunks;
  public ?MergeOptionTypeEnum $merge_option;
  public ?NextToken $next_token;
  public ?RepositoryName $repository_name;
  public ?CommitName $source_commit_specifier;

  public function __construct(shape(
    ?'conflict_detail_level' => ?ConflictDetailLevelTypeEnum,
    ?'conflict_resolution_strategy' => ?ConflictResolutionStrategyTypeEnum,
    ?'destination_commit_specifier' => ?CommitName,
    ?'file_paths' => ?FilePaths,
    ?'max_conflict_files' => ?MaxResults,
    ?'max_merge_hunks' => ?MaxResults,
    ?'merge_option' => ?MergeOptionTypeEnum,
    ?'next_token' => ?NextToken,
    ?'repository_name' => ?RepositoryName,
    ?'source_commit_specifier' => ?CommitName,
  ) $s = shape()) {
    $this->conflict_detail_level = $s['conflict_detail_level'] ?? '';
    $this->conflict_resolution_strategy = $s['conflict_resolution_strategy'] ?? '';
    $this->destination_commit_specifier = $s['destination_commit_specifier'] ?? '';
    $this->file_paths = $s['file_paths'] ?? vec[];
    $this->max_conflict_files = $s['max_conflict_files'] ?? 0;
    $this->max_merge_hunks = $s['max_merge_hunks'] ?? 0;
    $this->merge_option = $s['merge_option'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->source_commit_specifier = $s['source_commit_specifier'] ?? '';
  }
}

class BatchDescribeMergeConflictsOutput {
  public ?ObjectId $base_commit_id;
  public ?Conflicts $conflicts;
  public ?ObjectId $destination_commit_id;
  public ?BatchDescribeMergeConflictsErrors $errors;
  public ?NextToken $next_token;
  public ?ObjectId $source_commit_id;

  public function __construct(shape(
    ?'base_commit_id' => ?ObjectId,
    ?'conflicts' => ?Conflicts,
    ?'destination_commit_id' => ?ObjectId,
    ?'errors' => ?BatchDescribeMergeConflictsErrors,
    ?'next_token' => ?NextToken,
    ?'source_commit_id' => ?ObjectId,
  ) $s = shape()) {
    $this->base_commit_id = $s['base_commit_id'] ?? '';
    $this->conflicts = $s['conflicts'] ?? vec[];
    $this->destination_commit_id = $s['destination_commit_id'] ?? '';
    $this->errors = $s['errors'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->source_commit_id = $s['source_commit_id'] ?? '';
  }
}

class BatchDisassociateApprovalRuleTemplateFromRepositoriesError {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $error_message;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ErrorMessage,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

type BatchDisassociateApprovalRuleTemplateFromRepositoriesErrorsList = vec<BatchDisassociateApprovalRuleTemplateFromRepositoriesError>;

class BatchDisassociateApprovalRuleTemplateFromRepositoriesInput {
  public ?ApprovalRuleTemplateName $approval_rule_template_name;
  public ?RepositoryNameList $repository_names;

  public function __construct(shape(
    ?'approval_rule_template_name' => ?ApprovalRuleTemplateName,
    ?'repository_names' => ?RepositoryNameList,
  ) $s = shape()) {
    $this->approval_rule_template_name = $s['approval_rule_template_name'] ?? '';
    $this->repository_names = $s['repository_names'] ?? vec[];
  }
}

class BatchDisassociateApprovalRuleTemplateFromRepositoriesOutput {
  public ?RepositoryNameList $disassociated_repository_names;
  public ?BatchDisassociateApprovalRuleTemplateFromRepositoriesErrorsList $errors;

  public function __construct(shape(
    ?'disassociated_repository_names' => ?RepositoryNameList,
    ?'errors' => ?BatchDisassociateApprovalRuleTemplateFromRepositoriesErrorsList,
  ) $s = shape()) {
    $this->disassociated_repository_names = $s['disassociated_repository_names'] ?? vec[];
    $this->errors = $s['errors'] ?? vec[];
  }
}

class BatchGetCommitsError {
  public ?ObjectId $commit_id;
  public ?ErrorCode $error_code;
  public ?ErrorMessage $error_message;

  public function __construct(shape(
    ?'commit_id' => ?ObjectId,
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->commit_id = $s['commit_id'] ?? '';
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
  }
}

type BatchGetCommitsErrorsList = vec<BatchGetCommitsError>;

class BatchGetCommitsInput {
  public ?CommitIdsInputList $commit_ids;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'commit_ids' => ?CommitIdsInputList,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->commit_ids = $s['commit_ids'] ?? vec[];
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class BatchGetCommitsOutput {
  public ?CommitObjectsList $commits;
  public ?BatchGetCommitsErrorsList $errors;

  public function __construct(shape(
    ?'commits' => ?CommitObjectsList,
    ?'errors' => ?BatchGetCommitsErrorsList,
  ) $s = shape()) {
    $this->commits = $s['commits'] ?? vec[];
    $this->errors = $s['errors'] ?? vec[];
  }
}

class BatchGetRepositoriesInput {
  public ?RepositoryNameList $repository_names;

  public function __construct(shape(
    ?'repository_names' => ?RepositoryNameList,
  ) $s = shape()) {
    $this->repository_names = $s['repository_names'] ?? vec[];
  }
}

class BatchGetRepositoriesOutput {
  public ?RepositoryMetadataList $repositories;
  public ?RepositoryNotFoundList $repositories_not_found;

  public function __construct(shape(
    ?'repositories' => ?RepositoryMetadataList,
    ?'repositories_not_found' => ?RepositoryNotFoundList,
  ) $s = shape()) {
    $this->repositories = $s['repositories'] ?? vec[];
    $this->repositories_not_found = $s['repositories_not_found'] ?? vec[];
  }
}

class BeforeCommitIdAndAfterCommitIdAreSameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BlobIdDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BlobIdRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BlobMetadata {
  public ?ObjectId $blob_id;
  public ?Mode $mode;
  public ?Path $path;

  public function __construct(shape(
    ?'blob_id' => ?ObjectId,
    ?'mode' => ?Mode,
    ?'path' => ?Path,
  ) $s = shape()) {
    $this->blob_id = $s['blob_id'] ?? '';
    $this->mode = $s['mode'] ?? '';
    $this->path = $s['path'] ?? '';
  }
}

class BranchDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BranchInfo {
  public ?BranchName $branch_name;
  public ?CommitId $commit_id;

  public function __construct(shape(
    ?'branch_name' => ?BranchName,
    ?'commit_id' => ?CommitId,
  ) $s = shape()) {
    $this->branch_name = $s['branch_name'] ?? '';
    $this->commit_id = $s['commit_id'] ?? '';
  }
}

type BranchName = string;

class BranchNameExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BranchNameIsTagNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type BranchNameList = vec<BranchName>;

class BranchNameRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CannotDeleteApprovalRuleFromTemplateException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CannotModifyApprovalRuleFromTemplateException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type CapitalBoolean = bool;

type ChangeTypeEnum = string;

type ClientRequestToken = string;

class ClientRequestTokenRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type CloneUrlHttp = string;

type CloneUrlSsh = string;

class Comment {
  public ?Arn $author_arn;
  public ?ClientRequestToken $client_request_token;
  public ?CommentId $comment_id;
  public ?Content $content;
  public ?CreationDate $creation_date;
  public ?IsCommentDeleted $deleted;
  public ?CommentId $in_reply_to;
  public ?LastModifiedDate $last_modified_date;

  public function __construct(shape(
    ?'author_arn' => ?Arn,
    ?'client_request_token' => ?ClientRequestToken,
    ?'comment_id' => ?CommentId,
    ?'content' => ?Content,
    ?'creation_date' => ?CreationDate,
    ?'deleted' => ?IsCommentDeleted,
    ?'in_reply_to' => ?CommentId,
    ?'last_modified_date' => ?LastModifiedDate,
  ) $s = shape()) {
    $this->author_arn = $s['author_arn'] ?? '';
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->comment_id = $s['comment_id'] ?? '';
    $this->content = $s['content'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->deleted = $s['deleted'] ?? false;
    $this->in_reply_to = $s['in_reply_to'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? 0;
  }
}

class CommentContentRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CommentContentSizeLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CommentDeletedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CommentDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type CommentId = string;

class CommentIdRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CommentNotCreatedByCallerException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Comments = vec<Comment>;

class CommentsForComparedCommit {
  public ?ObjectId $after_blob_id;
  public ?CommitId $after_commit_id;
  public ?ObjectId $before_blob_id;
  public ?CommitId $before_commit_id;
  public ?Comments $comments;
  public ?Location $location;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'after_blob_id' => ?ObjectId,
    ?'after_commit_id' => ?CommitId,
    ?'before_blob_id' => ?ObjectId,
    ?'before_commit_id' => ?CommitId,
    ?'comments' => ?Comments,
    ?'location' => ?Location,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->after_blob_id = $s['after_blob_id'] ?? '';
    $this->after_commit_id = $s['after_commit_id'] ?? '';
    $this->before_blob_id = $s['before_blob_id'] ?? '';
    $this->before_commit_id = $s['before_commit_id'] ?? '';
    $this->comments = $s['comments'] ?? vec[];
    $this->location = $s['location'] ?? null;
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

type CommentsForComparedCommitData = vec<CommentsForComparedCommit>;

class CommentsForPullRequest {
  public ?ObjectId $after_blob_id;
  public ?CommitId $after_commit_id;
  public ?ObjectId $before_blob_id;
  public ?CommitId $before_commit_id;
  public ?Comments $comments;
  public ?Location $location;
  public ?PullRequestId $pull_request_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'after_blob_id' => ?ObjectId,
    ?'after_commit_id' => ?CommitId,
    ?'before_blob_id' => ?ObjectId,
    ?'before_commit_id' => ?CommitId,
    ?'comments' => ?Comments,
    ?'location' => ?Location,
    ?'pull_request_id' => ?PullRequestId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->after_blob_id = $s['after_blob_id'] ?? '';
    $this->after_commit_id = $s['after_commit_id'] ?? '';
    $this->before_blob_id = $s['before_blob_id'] ?? '';
    $this->before_commit_id = $s['before_commit_id'] ?? '';
    $this->comments = $s['comments'] ?? vec[];
    $this->location = $s['location'] ?? null;
    $this->pull_request_id = $s['pull_request_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

type CommentsForPullRequestData = vec<CommentsForPullRequest>;

class Commit {
  public ?AdditionalData $additional_data;
  public ?UserInfo $author;
  public ?ObjectId $commit_id;
  public ?UserInfo $committer;
  public ?Message $message;
  public ?ParentList $parents;
  public ?ObjectId $tree_id;

  public function __construct(shape(
    ?'additional_data' => ?AdditionalData,
    ?'author' => ?UserInfo,
    ?'commit_id' => ?ObjectId,
    ?'committer' => ?UserInfo,
    ?'message' => ?Message,
    ?'parents' => ?ParentList,
    ?'tree_id' => ?ObjectId,
  ) $s = shape()) {
    $this->additional_data = $s['additional_data'] ?? '';
    $this->author = $s['author'] ?? null;
    $this->commit_id = $s['commit_id'] ?? '';
    $this->committer = $s['committer'] ?? null;
    $this->message = $s['message'] ?? '';
    $this->parents = $s['parents'] ?? vec[];
    $this->tree_id = $s['tree_id'] ?? '';
  }
}

class CommitDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type CommitId = string;

class CommitIdDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CommitIdRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type CommitIdsInputList = vec<ObjectId>;

class CommitIdsLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CommitIdsListRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CommitMessageLengthExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type CommitName = string;

type CommitObjectsList = vec<Commit>;

class CommitRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ConcurrentReferenceUpdateException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Conflict {
  public ?ConflictMetadata $conflict_metadata;
  public ?MergeHunks $merge_hunks;

  public function __construct(shape(
    ?'conflict_metadata' => ?ConflictMetadata,
    ?'merge_hunks' => ?MergeHunks,
  ) $s = shape()) {
    $this->conflict_metadata = $s['conflict_metadata'] ?? null;
    $this->merge_hunks = $s['merge_hunks'] ?? vec[];
  }
}

type ConflictDetailLevelTypeEnum = string;

class ConflictMetadata {
  public ?IsContentConflict $content_conflict;
  public ?IsFileModeConflict $file_mode_conflict;
  public ?FileModes $file_modes;
  public ?Path $file_path;
  public ?FileSizes $file_sizes;
  public ?IsBinaryFile $is_binary_file;
  public ?MergeOperations $merge_operations;
  public ?NumberOfConflicts $number_of_conflicts;
  public ?IsObjectTypeConflict $object_type_conflict;
  public ?ObjectTypes $object_types;

  public function __construct(shape(
    ?'content_conflict' => ?IsContentConflict,
    ?'file_mode_conflict' => ?IsFileModeConflict,
    ?'file_modes' => ?FileModes,
    ?'file_path' => ?Path,
    ?'file_sizes' => ?FileSizes,
    ?'is_binary_file' => ?IsBinaryFile,
    ?'merge_operations' => ?MergeOperations,
    ?'number_of_conflicts' => ?NumberOfConflicts,
    ?'object_type_conflict' => ?IsObjectTypeConflict,
    ?'object_types' => ?ObjectTypes,
  ) $s = shape()) {
    $this->content_conflict = $s['content_conflict'] ?? false;
    $this->file_mode_conflict = $s['file_mode_conflict'] ?? false;
    $this->file_modes = $s['file_modes'] ?? null;
    $this->file_path = $s['file_path'] ?? '';
    $this->file_sizes = $s['file_sizes'] ?? null;
    $this->is_binary_file = $s['is_binary_file'] ?? null;
    $this->merge_operations = $s['merge_operations'] ?? null;
    $this->number_of_conflicts = $s['number_of_conflicts'] ?? 0;
    $this->object_type_conflict = $s['object_type_conflict'] ?? false;
    $this->object_types = $s['object_types'] ?? null;
  }
}

type ConflictMetadataList = vec<ConflictMetadata>;

class ConflictResolution {
  public ?DeleteFileEntries $delete_files;
  public ?ReplaceContentEntries $replace_contents;
  public ?SetFileModeEntries $set_file_modes;

  public function __construct(shape(
    ?'delete_files' => ?DeleteFileEntries,
    ?'replace_contents' => ?ReplaceContentEntries,
    ?'set_file_modes' => ?SetFileModeEntries,
  ) $s = shape()) {
    $this->delete_files = $s['delete_files'] ?? vec[];
    $this->replace_contents = $s['replace_contents'] ?? vec[];
    $this->set_file_modes = $s['set_file_modes'] ?? vec[];
  }
}

type ConflictResolutionStrategyTypeEnum = string;

type Conflicts = vec<Conflict>;

type Content = string;

class CreateApprovalRuleTemplateInput {
  public ?ApprovalRuleTemplateContent $approval_rule_template_content;
  public ?ApprovalRuleTemplateDescription $approval_rule_template_description;
  public ?ApprovalRuleTemplateName $approval_rule_template_name;

  public function __construct(shape(
    ?'approval_rule_template_content' => ?ApprovalRuleTemplateContent,
    ?'approval_rule_template_description' => ?ApprovalRuleTemplateDescription,
    ?'approval_rule_template_name' => ?ApprovalRuleTemplateName,
  ) $s = shape()) {
    $this->approval_rule_template_content = $s['approval_rule_template_content'] ?? '';
    $this->approval_rule_template_description = $s['approval_rule_template_description'] ?? '';
    $this->approval_rule_template_name = $s['approval_rule_template_name'] ?? '';
  }
}

class CreateApprovalRuleTemplateOutput {
  public ?ApprovalRuleTemplate $approval_rule_template;

  public function __construct(shape(
    ?'approval_rule_template' => ?ApprovalRuleTemplate,
  ) $s = shape()) {
    $this->approval_rule_template = $s['approval_rule_template'] ?? null;
  }
}

class CreateBranchInput {
  public ?BranchName $branch_name;
  public ?CommitId $commit_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'branch_name' => ?BranchName,
    ?'commit_id' => ?CommitId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->branch_name = $s['branch_name'] ?? '';
    $this->commit_id = $s['commit_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class CreateCommitInput {
  public ?Name $author_name;
  public ?BranchName $branch_name;
  public ?Message $commit_message;
  public ?DeleteFileEntries $delete_files;
  public ?Email $email;
  public ?KeepEmptyFolders $keep_empty_folders;
  public ?CommitId $parent_commit_id;
  public ?PutFileEntries $put_files;
  public ?RepositoryName $repository_name;
  public ?SetFileModeEntries $set_file_modes;

  public function __construct(shape(
    ?'author_name' => ?Name,
    ?'branch_name' => ?BranchName,
    ?'commit_message' => ?Message,
    ?'delete_files' => ?DeleteFileEntries,
    ?'email' => ?Email,
    ?'keep_empty_folders' => ?KeepEmptyFolders,
    ?'parent_commit_id' => ?CommitId,
    ?'put_files' => ?PutFileEntries,
    ?'repository_name' => ?RepositoryName,
    ?'set_file_modes' => ?SetFileModeEntries,
  ) $s = shape()) {
    $this->author_name = $s['author_name'] ?? '';
    $this->branch_name = $s['branch_name'] ?? '';
    $this->commit_message = $s['commit_message'] ?? '';
    $this->delete_files = $s['delete_files'] ?? vec[];
    $this->email = $s['email'] ?? '';
    $this->keep_empty_folders = $s['keep_empty_folders'] ?? false;
    $this->parent_commit_id = $s['parent_commit_id'] ?? '';
    $this->put_files = $s['put_files'] ?? vec[];
    $this->repository_name = $s['repository_name'] ?? '';
    $this->set_file_modes = $s['set_file_modes'] ?? vec[];
  }
}

class CreateCommitOutput {
  public ?ObjectId $commit_id;
  public ?FilesMetadata $files_added;
  public ?FilesMetadata $files_deleted;
  public ?FilesMetadata $files_updated;
  public ?ObjectId $tree_id;

  public function __construct(shape(
    ?'commit_id' => ?ObjectId,
    ?'files_added' => ?FilesMetadata,
    ?'files_deleted' => ?FilesMetadata,
    ?'files_updated' => ?FilesMetadata,
    ?'tree_id' => ?ObjectId,
  ) $s = shape()) {
    $this->commit_id = $s['commit_id'] ?? '';
    $this->files_added = $s['files_added'] ?? vec[];
    $this->files_deleted = $s['files_deleted'] ?? vec[];
    $this->files_updated = $s['files_updated'] ?? vec[];
    $this->tree_id = $s['tree_id'] ?? '';
  }
}

class CreatePullRequestApprovalRuleInput {
  public ?ApprovalRuleContent $approval_rule_content;
  public ?ApprovalRuleName $approval_rule_name;
  public ?PullRequestId $pull_request_id;

  public function __construct(shape(
    ?'approval_rule_content' => ?ApprovalRuleContent,
    ?'approval_rule_name' => ?ApprovalRuleName,
    ?'pull_request_id' => ?PullRequestId,
  ) $s = shape()) {
    $this->approval_rule_content = $s['approval_rule_content'] ?? '';
    $this->approval_rule_name = $s['approval_rule_name'] ?? '';
    $this->pull_request_id = $s['pull_request_id'] ?? '';
  }
}

class CreatePullRequestApprovalRuleOutput {
  public ?ApprovalRule $approval_rule;

  public function __construct(shape(
    ?'approval_rule' => ?ApprovalRule,
  ) $s = shape()) {
    $this->approval_rule = $s['approval_rule'] ?? null;
  }
}

class CreatePullRequestInput {
  public ?ClientRequestToken $client_request_token;
  public ?Description $description;
  public ?TargetList $targets;
  public ?Title $title;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'description' => ?Description,
    ?'targets' => ?TargetList,
    ?'title' => ?Title,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->targets = $s['targets'] ?? vec[];
    $this->title = $s['title'] ?? '';
  }
}

class CreatePullRequestOutput {
  public ?PullRequest $pull_request;

  public function __construct(shape(
    ?'pull_request' => ?PullRequest,
  ) $s = shape()) {
    $this->pull_request = $s['pull_request'] ?? null;
  }
}

class CreateRepositoryInput {
  public ?RepositoryDescription $repository_description;
  public ?RepositoryName $repository_name;
  public ?TagsMap $tags;

  public function __construct(shape(
    ?'repository_description' => ?RepositoryDescription,
    ?'repository_name' => ?RepositoryName,
    ?'tags' => ?TagsMap,
  ) $s = shape()) {
    $this->repository_description = $s['repository_description'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateRepositoryOutput {
  public ?RepositoryMetadata $repository_metadata;

  public function __construct(shape(
    ?'repository_metadata' => ?RepositoryMetadata,
  ) $s = shape()) {
    $this->repository_metadata = $s['repository_metadata'] ?? null;
  }
}

class CreateUnreferencedMergeCommitInput {
  public ?Name $author_name;
  public ?Message $commit_message;
  public ?ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ?ConflictResolution $conflict_resolution;
  public ?ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public ?CommitName $destination_commit_specifier;
  public ?Email $email;
  public ?KeepEmptyFolders $keep_empty_folders;
  public ?MergeOptionTypeEnum $merge_option;
  public ?RepositoryName $repository_name;
  public ?CommitName $source_commit_specifier;

  public function __construct(shape(
    ?'author_name' => ?Name,
    ?'commit_message' => ?Message,
    ?'conflict_detail_level' => ?ConflictDetailLevelTypeEnum,
    ?'conflict_resolution' => ?ConflictResolution,
    ?'conflict_resolution_strategy' => ?ConflictResolutionStrategyTypeEnum,
    ?'destination_commit_specifier' => ?CommitName,
    ?'email' => ?Email,
    ?'keep_empty_folders' => ?KeepEmptyFolders,
    ?'merge_option' => ?MergeOptionTypeEnum,
    ?'repository_name' => ?RepositoryName,
    ?'source_commit_specifier' => ?CommitName,
  ) $s = shape()) {
    $this->author_name = $s['author_name'] ?? '';
    $this->commit_message = $s['commit_message'] ?? '';
    $this->conflict_detail_level = $s['conflict_detail_level'] ?? '';
    $this->conflict_resolution = $s['conflict_resolution'] ?? null;
    $this->conflict_resolution_strategy = $s['conflict_resolution_strategy'] ?? '';
    $this->destination_commit_specifier = $s['destination_commit_specifier'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->keep_empty_folders = $s['keep_empty_folders'] ?? false;
    $this->merge_option = $s['merge_option'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->source_commit_specifier = $s['source_commit_specifier'] ?? '';
  }
}

class CreateUnreferencedMergeCommitOutput {
  public ?ObjectId $commit_id;
  public ?ObjectId $tree_id;

  public function __construct(shape(
    ?'commit_id' => ?ObjectId,
    ?'tree_id' => ?ObjectId,
  ) $s = shape()) {
    $this->commit_id = $s['commit_id'] ?? '';
    $this->tree_id = $s['tree_id'] ?? '';
  }
}

type CreationDate = int;

type Date = string;

class DefaultBranchCannotBeDeletedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteApprovalRuleTemplateInput {
  public ?ApprovalRuleTemplateName $approval_rule_template_name;

  public function __construct(shape(
    ?'approval_rule_template_name' => ?ApprovalRuleTemplateName,
  ) $s = shape()) {
    $this->approval_rule_template_name = $s['approval_rule_template_name'] ?? '';
  }
}

class DeleteApprovalRuleTemplateOutput {
  public ?ApprovalRuleTemplateId $approval_rule_template_id;

  public function __construct(shape(
    ?'approval_rule_template_id' => ?ApprovalRuleTemplateId,
  ) $s = shape()) {
    $this->approval_rule_template_id = $s['approval_rule_template_id'] ?? '';
  }
}

class DeleteBranchInput {
  public ?BranchName $branch_name;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'branch_name' => ?BranchName,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->branch_name = $s['branch_name'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class DeleteBranchOutput {
  public ?BranchInfo $deleted_branch;

  public function __construct(shape(
    ?'deleted_branch' => ?BranchInfo,
  ) $s = shape()) {
    $this->deleted_branch = $s['deleted_branch'] ?? null;
  }
}

class DeleteCommentContentInput {
  public ?CommentId $comment_id;

  public function __construct(shape(
    ?'comment_id' => ?CommentId,
  ) $s = shape()) {
    $this->comment_id = $s['comment_id'] ?? '';
  }
}

class DeleteCommentContentOutput {
  public ?Comment $comment;

  public function __construct(shape(
    ?'comment' => ?Comment,
  ) $s = shape()) {
    $this->comment = $s['comment'] ?? null;
  }
}

type DeleteFileEntries = vec<DeleteFileEntry>;

class DeleteFileEntry {
  public ?Path $file_path;

  public function __construct(shape(
    ?'file_path' => ?Path,
  ) $s = shape()) {
    $this->file_path = $s['file_path'] ?? '';
  }
}

class DeleteFileInput {
  public ?BranchName $branch_name;
  public ?Message $commit_message;
  public ?Email $email;
  public ?Path $file_path;
  public ?KeepEmptyFolders $keep_empty_folders;
  public ?Name $name;
  public ?CommitId $parent_commit_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'branch_name' => ?BranchName,
    ?'commit_message' => ?Message,
    ?'email' => ?Email,
    ?'file_path' => ?Path,
    ?'keep_empty_folders' => ?KeepEmptyFolders,
    ?'name' => ?Name,
    ?'parent_commit_id' => ?CommitId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->branch_name = $s['branch_name'] ?? '';
    $this->commit_message = $s['commit_message'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->file_path = $s['file_path'] ?? '';
    $this->keep_empty_folders = $s['keep_empty_folders'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->parent_commit_id = $s['parent_commit_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class DeleteFileOutput {
  public ?ObjectId $blob_id;
  public ?ObjectId $commit_id;
  public ?Path $file_path;
  public ?ObjectId $tree_id;

  public function __construct(shape(
    ?'blob_id' => ?ObjectId,
    ?'commit_id' => ?ObjectId,
    ?'file_path' => ?Path,
    ?'tree_id' => ?ObjectId,
  ) $s = shape()) {
    $this->blob_id = $s['blob_id'] ?? '';
    $this->commit_id = $s['commit_id'] ?? '';
    $this->file_path = $s['file_path'] ?? '';
    $this->tree_id = $s['tree_id'] ?? '';
  }
}

class DeletePullRequestApprovalRuleInput {
  public ?ApprovalRuleName $approval_rule_name;
  public ?PullRequestId $pull_request_id;

  public function __construct(shape(
    ?'approval_rule_name' => ?ApprovalRuleName,
    ?'pull_request_id' => ?PullRequestId,
  ) $s = shape()) {
    $this->approval_rule_name = $s['approval_rule_name'] ?? '';
    $this->pull_request_id = $s['pull_request_id'] ?? '';
  }
}

class DeletePullRequestApprovalRuleOutput {
  public ?ApprovalRuleId $approval_rule_id;

  public function __construct(shape(
    ?'approval_rule_id' => ?ApprovalRuleId,
  ) $s = shape()) {
    $this->approval_rule_id = $s['approval_rule_id'] ?? '';
  }
}

class DeleteRepositoryInput {
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class DeleteRepositoryOutput {
  public ?RepositoryId $repository_id;

  public function __construct(shape(
    ?'repository_id' => ?RepositoryId,
  ) $s = shape()) {
    $this->repository_id = $s['repository_id'] ?? '';
  }
}

class DescribeMergeConflictsInput {
  public ?ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ?ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public ?CommitName $destination_commit_specifier;
  public ?Path $file_path;
  public ?MaxResults $max_merge_hunks;
  public ?MergeOptionTypeEnum $merge_option;
  public ?NextToken $next_token;
  public ?RepositoryName $repository_name;
  public ?CommitName $source_commit_specifier;

  public function __construct(shape(
    ?'conflict_detail_level' => ?ConflictDetailLevelTypeEnum,
    ?'conflict_resolution_strategy' => ?ConflictResolutionStrategyTypeEnum,
    ?'destination_commit_specifier' => ?CommitName,
    ?'file_path' => ?Path,
    ?'max_merge_hunks' => ?MaxResults,
    ?'merge_option' => ?MergeOptionTypeEnum,
    ?'next_token' => ?NextToken,
    ?'repository_name' => ?RepositoryName,
    ?'source_commit_specifier' => ?CommitName,
  ) $s = shape()) {
    $this->conflict_detail_level = $s['conflict_detail_level'] ?? '';
    $this->conflict_resolution_strategy = $s['conflict_resolution_strategy'] ?? '';
    $this->destination_commit_specifier = $s['destination_commit_specifier'] ?? '';
    $this->file_path = $s['file_path'] ?? '';
    $this->max_merge_hunks = $s['max_merge_hunks'] ?? 0;
    $this->merge_option = $s['merge_option'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->source_commit_specifier = $s['source_commit_specifier'] ?? '';
  }
}

class DescribeMergeConflictsOutput {
  public ?ObjectId $base_commit_id;
  public ?ConflictMetadata $conflict_metadata;
  public ?ObjectId $destination_commit_id;
  public ?MergeHunks $merge_hunks;
  public ?NextToken $next_token;
  public ?ObjectId $source_commit_id;

  public function __construct(shape(
    ?'base_commit_id' => ?ObjectId,
    ?'conflict_metadata' => ?ConflictMetadata,
    ?'destination_commit_id' => ?ObjectId,
    ?'merge_hunks' => ?MergeHunks,
    ?'next_token' => ?NextToken,
    ?'source_commit_id' => ?ObjectId,
  ) $s = shape()) {
    $this->base_commit_id = $s['base_commit_id'] ?? '';
    $this->conflict_metadata = $s['conflict_metadata'] ?? null;
    $this->destination_commit_id = $s['destination_commit_id'] ?? '';
    $this->merge_hunks = $s['merge_hunks'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->source_commit_id = $s['source_commit_id'] ?? '';
  }
}

class DescribePullRequestEventsInput {
  public ?Arn $actor_arn;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?PullRequestEventType $pull_request_event_type;
  public ?PullRequestId $pull_request_id;

  public function __construct(shape(
    ?'actor_arn' => ?Arn,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'pull_request_event_type' => ?PullRequestEventType,
    ?'pull_request_id' => ?PullRequestId,
  ) $s = shape()) {
    $this->actor_arn = $s['actor_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->pull_request_event_type = $s['pull_request_event_type'] ?? '';
    $this->pull_request_id = $s['pull_request_id'] ?? '';
  }
}

class DescribePullRequestEventsOutput {
  public ?NextToken $next_token;
  public ?PullRequestEventList $pull_request_events;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'pull_request_events' => ?PullRequestEventList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->pull_request_events = $s['pull_request_events'] ?? vec[];
  }
}

type Description = string;

class Difference {
  public ?BlobMetadata $after_blob;
  public ?BlobMetadata $before_blob;
  public ?ChangeTypeEnum $change_type;

  public function __construct(shape(
    ?'after_blob' => ?BlobMetadata,
    ?'before_blob' => ?BlobMetadata,
    ?'change_type' => ?ChangeTypeEnum,
  ) $s = shape()) {
    $this->after_blob = $s['after_blob'] ?? null;
    $this->before_blob = $s['before_blob'] ?? null;
    $this->change_type = $s['change_type'] ?? '';
  }
}

type DifferenceList = vec<Difference>;

class DirectoryNameConflictsWithFileNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateApprovalRuleTemplateFromRepositoryInput {
  public ?ApprovalRuleTemplateName $approval_rule_template_name;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'approval_rule_template_name' => ?ApprovalRuleTemplateName,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->approval_rule_template_name = $s['approval_rule_template_name'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

type Email = string;

class EncryptionIntegrityChecksFailedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EncryptionKeyAccessDeniedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EncryptionKeyDisabledException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EncryptionKeyNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EncryptionKeyUnavailableException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ErrorCode = string;

type ErrorMessage = string;

class EvaluatePullRequestApprovalRulesInput {
  public ?PullRequestId $pull_request_id;
  public ?RevisionId $revision_id;

  public function __construct(shape(
    ?'pull_request_id' => ?PullRequestId,
    ?'revision_id' => ?RevisionId,
  ) $s = shape()) {
    $this->pull_request_id = $s['pull_request_id'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class EvaluatePullRequestApprovalRulesOutput {
  public ?Evaluation $evaluation;

  public function __construct(shape(
    ?'evaluation' => ?Evaluation,
  ) $s = shape()) {
    $this->evaluation = $s['evaluation'] ?? null;
  }
}

class Evaluation {
  public ?ApprovalRulesNotSatisfiedList $approval_rules_not_satisfied;
  public ?ApprovalRulesSatisfiedList $approval_rules_satisfied;
  public ?Approved $approved;
  public ?Overridden $overridden;

  public function __construct(shape(
    ?'approval_rules_not_satisfied' => ?ApprovalRulesNotSatisfiedList,
    ?'approval_rules_satisfied' => ?ApprovalRulesSatisfiedList,
    ?'approved' => ?Approved,
    ?'overridden' => ?Overridden,
  ) $s = shape()) {
    $this->approval_rules_not_satisfied = $s['approval_rules_not_satisfied'] ?? vec[];
    $this->approval_rules_satisfied = $s['approval_rules_satisfied'] ?? vec[];
    $this->approved = $s['approved'] ?? false;
    $this->overridden = $s['overridden'] ?? false;
  }
}

type EventDate = int;

type ExceptionName = string;

class File {
  public ?Path $absolute_path;
  public ?ObjectId $blob_id;
  public ?FileModeTypeEnum $file_mode;
  public ?Path $relative_path;

  public function __construct(shape(
    ?'absolute_path' => ?Path,
    ?'blob_id' => ?ObjectId,
    ?'file_mode' => ?FileModeTypeEnum,
    ?'relative_path' => ?Path,
  ) $s = shape()) {
    $this->absolute_path = $s['absolute_path'] ?? '';
    $this->blob_id = $s['blob_id'] ?? '';
    $this->file_mode = $s['file_mode'] ?? '';
    $this->relative_path = $s['relative_path'] ?? '';
  }
}

type FileContent = string;

class FileContentAndSourceFileSpecifiedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class FileContentRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class FileContentSizeLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class FileDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class FileEntryRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type FileList = vec<File>;

class FileMetadata {
  public ?Path $absolute_path;
  public ?ObjectId $blob_id;
  public ?FileModeTypeEnum $file_mode;

  public function __construct(shape(
    ?'absolute_path' => ?Path,
    ?'blob_id' => ?ObjectId,
    ?'file_mode' => ?FileModeTypeEnum,
  ) $s = shape()) {
    $this->absolute_path = $s['absolute_path'] ?? '';
    $this->blob_id = $s['blob_id'] ?? '';
    $this->file_mode = $s['file_mode'] ?? '';
  }
}

class FileModeRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type FileModeTypeEnum = string;

class FileModes {
  public ?FileModeTypeEnum $base;
  public ?FileModeTypeEnum $destination;
  public ?FileModeTypeEnum $source;

  public function __construct(shape(
    ?'base' => ?FileModeTypeEnum,
    ?'destination' => ?FileModeTypeEnum,
    ?'source' => ?FileModeTypeEnum,
  ) $s = shape()) {
    $this->base = $s['base'] ?? '';
    $this->destination = $s['destination'] ?? '';
    $this->source = $s['source'] ?? '';
  }
}

class FileNameConflictsWithDirectoryNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class FilePathConflictsWithSubmodulePathException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type FilePaths = vec<Path>;

type FileSize = int;

class FileSizes {
  public ?FileSize $base;
  public ?FileSize $destination;
  public ?FileSize $source;

  public function __construct(shape(
    ?'base' => ?FileSize,
    ?'destination' => ?FileSize,
    ?'source' => ?FileSize,
  ) $s = shape()) {
    $this->base = $s['base'] ?? 0;
    $this->destination = $s['destination'] ?? 0;
    $this->source = $s['source'] ?? 0;
  }
}

class FileTooLargeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type FilesMetadata = vec<FileMetadata>;

class Folder {
  public ?Path $absolute_path;
  public ?Path $relative_path;
  public ?ObjectId $tree_id;

  public function __construct(shape(
    ?'absolute_path' => ?Path,
    ?'relative_path' => ?Path,
    ?'tree_id' => ?ObjectId,
  ) $s = shape()) {
    $this->absolute_path = $s['absolute_path'] ?? '';
    $this->relative_path = $s['relative_path'] ?? '';
    $this->tree_id = $s['tree_id'] ?? '';
  }
}

class FolderContentSizeLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class FolderDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type FolderList = vec<Folder>;

class GetApprovalRuleTemplateInput {
  public ?ApprovalRuleTemplateName $approval_rule_template_name;

  public function __construct(shape(
    ?'approval_rule_template_name' => ?ApprovalRuleTemplateName,
  ) $s = shape()) {
    $this->approval_rule_template_name = $s['approval_rule_template_name'] ?? '';
  }
}

class GetApprovalRuleTemplateOutput {
  public ?ApprovalRuleTemplate $approval_rule_template;

  public function __construct(shape(
    ?'approval_rule_template' => ?ApprovalRuleTemplate,
  ) $s = shape()) {
    $this->approval_rule_template = $s['approval_rule_template'] ?? null;
  }
}

class GetBlobInput {
  public ?ObjectId $blob_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'blob_id' => ?ObjectId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->blob_id = $s['blob_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class GetBlobOutput {
  public ?blob $content;

  public function __construct(shape(
    ?'content' => ?blob,
  ) $s = shape()) {
    $this->content = $s['content'] ?? '';
  }
}

class GetBranchInput {
  public ?BranchName $branch_name;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'branch_name' => ?BranchName,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->branch_name = $s['branch_name'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class GetBranchOutput {
  public ?BranchInfo $branch;

  public function __construct(shape(
    ?'branch' => ?BranchInfo,
  ) $s = shape()) {
    $this->branch = $s['branch'] ?? null;
  }
}

class GetCommentInput {
  public ?CommentId $comment_id;

  public function __construct(shape(
    ?'comment_id' => ?CommentId,
  ) $s = shape()) {
    $this->comment_id = $s['comment_id'] ?? '';
  }
}

class GetCommentOutput {
  public ?Comment $comment;

  public function __construct(shape(
    ?'comment' => ?Comment,
  ) $s = shape()) {
    $this->comment = $s['comment'] ?? null;
  }
}

class GetCommentsForComparedCommitInput {
  public ?CommitId $after_commit_id;
  public ?CommitId $before_commit_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'after_commit_id' => ?CommitId,
    ?'before_commit_id' => ?CommitId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->after_commit_id = $s['after_commit_id'] ?? '';
    $this->before_commit_id = $s['before_commit_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class GetCommentsForComparedCommitOutput {
  public ?CommentsForComparedCommitData $comments_for_compared_commit_data;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'comments_for_compared_commit_data' => ?CommentsForComparedCommitData,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->comments_for_compared_commit_data = $s['comments_for_compared_commit_data'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetCommentsForPullRequestInput {
  public ?CommitId $after_commit_id;
  public ?CommitId $before_commit_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?PullRequestId $pull_request_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'after_commit_id' => ?CommitId,
    ?'before_commit_id' => ?CommitId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'pull_request_id' => ?PullRequestId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->after_commit_id = $s['after_commit_id'] ?? '';
    $this->before_commit_id = $s['before_commit_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->pull_request_id = $s['pull_request_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class GetCommentsForPullRequestOutput {
  public ?CommentsForPullRequestData $comments_for_pull_request_data;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'comments_for_pull_request_data' => ?CommentsForPullRequestData,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->comments_for_pull_request_data = $s['comments_for_pull_request_data'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetCommitInput {
  public ?ObjectId $commit_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'commit_id' => ?ObjectId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->commit_id = $s['commit_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class GetCommitOutput {
  public ?Commit $commit;

  public function __construct(shape(
    ?'commit' => ?Commit,
  ) $s = shape()) {
    $this->commit = $s['commit'] ?? null;
  }
}

class GetDifferencesInput {
  public ?Limit $max_results;
  public ?NextToken $next_token;
  public ?CommitName $after_commit_specifier;
  public ?Path $after_path;
  public ?CommitName $before_commit_specifier;
  public ?Path $before_path;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'max_results' => ?Limit,
    ?'next_token' => ?NextToken,
    ?'after_commit_specifier' => ?CommitName,
    ?'after_path' => ?Path,
    ?'before_commit_specifier' => ?CommitName,
    ?'before_path' => ?Path,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->after_commit_specifier = $s['after_commit_specifier'] ?? '';
    $this->after_path = $s['after_path'] ?? '';
    $this->before_commit_specifier = $s['before_commit_specifier'] ?? '';
    $this->before_path = $s['before_path'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class GetDifferencesOutput {
  public ?NextToken $next_token;
  public ?DifferenceList $differences;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'differences' => ?DifferenceList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->differences = $s['differences'] ?? vec[];
  }
}

class GetFileInput {
  public ?CommitName $commit_specifier;
  public ?Path $file_path;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'commit_specifier' => ?CommitName,
    ?'file_path' => ?Path,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->commit_specifier = $s['commit_specifier'] ?? '';
    $this->file_path = $s['file_path'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class GetFileOutput {
  public ?ObjectId $blob_id;
  public ?ObjectId $commit_id;
  public ?FileContent $file_content;
  public ?FileModeTypeEnum $file_mode;
  public ?Path $file_path;
  public ?ObjectSize $file_size;

  public function __construct(shape(
    ?'blob_id' => ?ObjectId,
    ?'commit_id' => ?ObjectId,
    ?'file_content' => ?FileContent,
    ?'file_mode' => ?FileModeTypeEnum,
    ?'file_path' => ?Path,
    ?'file_size' => ?ObjectSize,
  ) $s = shape()) {
    $this->blob_id = $s['blob_id'] ?? '';
    $this->commit_id = $s['commit_id'] ?? '';
    $this->file_content = $s['file_content'] ?? '';
    $this->file_mode = $s['file_mode'] ?? '';
    $this->file_path = $s['file_path'] ?? '';
    $this->file_size = $s['file_size'] ?? 0;
  }
}

class GetFolderInput {
  public ?CommitName $commit_specifier;
  public ?Path $folder_path;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'commit_specifier' => ?CommitName,
    ?'folder_path' => ?Path,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->commit_specifier = $s['commit_specifier'] ?? '';
    $this->folder_path = $s['folder_path'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class GetFolderOutput {
  public ?ObjectId $commit_id;
  public ?FileList $files;
  public ?Path $folder_path;
  public ?FolderList $sub_folders;
  public ?SubModuleList $sub_modules;
  public ?SymbolicLinkList $symbolic_links;
  public ?ObjectId $tree_id;

  public function __construct(shape(
    ?'commit_id' => ?ObjectId,
    ?'files' => ?FileList,
    ?'folder_path' => ?Path,
    ?'sub_folders' => ?FolderList,
    ?'sub_modules' => ?SubModuleList,
    ?'symbolic_links' => ?SymbolicLinkList,
    ?'tree_id' => ?ObjectId,
  ) $s = shape()) {
    $this->commit_id = $s['commit_id'] ?? '';
    $this->files = $s['files'] ?? vec[];
    $this->folder_path = $s['folder_path'] ?? '';
    $this->sub_folders = $s['sub_folders'] ?? vec[];
    $this->sub_modules = $s['sub_modules'] ?? vec[];
    $this->symbolic_links = $s['symbolic_links'] ?? vec[];
    $this->tree_id = $s['tree_id'] ?? '';
  }
}

class GetMergeCommitInput {
  public ?ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ?ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public ?CommitName $destination_commit_specifier;
  public ?RepositoryName $repository_name;
  public ?CommitName $source_commit_specifier;

  public function __construct(shape(
    ?'conflict_detail_level' => ?ConflictDetailLevelTypeEnum,
    ?'conflict_resolution_strategy' => ?ConflictResolutionStrategyTypeEnum,
    ?'destination_commit_specifier' => ?CommitName,
    ?'repository_name' => ?RepositoryName,
    ?'source_commit_specifier' => ?CommitName,
  ) $s = shape()) {
    $this->conflict_detail_level = $s['conflict_detail_level'] ?? '';
    $this->conflict_resolution_strategy = $s['conflict_resolution_strategy'] ?? '';
    $this->destination_commit_specifier = $s['destination_commit_specifier'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->source_commit_specifier = $s['source_commit_specifier'] ?? '';
  }
}

class GetMergeCommitOutput {
  public ?ObjectId $base_commit_id;
  public ?ObjectId $destination_commit_id;
  public ?ObjectId $merged_commit_id;
  public ?ObjectId $source_commit_id;

  public function __construct(shape(
    ?'base_commit_id' => ?ObjectId,
    ?'destination_commit_id' => ?ObjectId,
    ?'merged_commit_id' => ?ObjectId,
    ?'source_commit_id' => ?ObjectId,
  ) $s = shape()) {
    $this->base_commit_id = $s['base_commit_id'] ?? '';
    $this->destination_commit_id = $s['destination_commit_id'] ?? '';
    $this->merged_commit_id = $s['merged_commit_id'] ?? '';
    $this->source_commit_id = $s['source_commit_id'] ?? '';
  }
}

class GetMergeConflictsInput {
  public ?ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ?ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public ?CommitName $destination_commit_specifier;
  public ?MaxResults $max_conflict_files;
  public ?MergeOptionTypeEnum $merge_option;
  public ?NextToken $next_token;
  public ?RepositoryName $repository_name;
  public ?CommitName $source_commit_specifier;

  public function __construct(shape(
    ?'conflict_detail_level' => ?ConflictDetailLevelTypeEnum,
    ?'conflict_resolution_strategy' => ?ConflictResolutionStrategyTypeEnum,
    ?'destination_commit_specifier' => ?CommitName,
    ?'max_conflict_files' => ?MaxResults,
    ?'merge_option' => ?MergeOptionTypeEnum,
    ?'next_token' => ?NextToken,
    ?'repository_name' => ?RepositoryName,
    ?'source_commit_specifier' => ?CommitName,
  ) $s = shape()) {
    $this->conflict_detail_level = $s['conflict_detail_level'] ?? '';
    $this->conflict_resolution_strategy = $s['conflict_resolution_strategy'] ?? '';
    $this->destination_commit_specifier = $s['destination_commit_specifier'] ?? '';
    $this->max_conflict_files = $s['max_conflict_files'] ?? 0;
    $this->merge_option = $s['merge_option'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->source_commit_specifier = $s['source_commit_specifier'] ?? '';
  }
}

class GetMergeConflictsOutput {
  public ?ObjectId $base_commit_id;
  public ?ConflictMetadataList $conflict_metadata_list;
  public ?ObjectId $destination_commit_id;
  public ?IsMergeable $mergeable;
  public ?NextToken $next_token;
  public ?ObjectId $source_commit_id;

  public function __construct(shape(
    ?'base_commit_id' => ?ObjectId,
    ?'conflict_metadata_list' => ?ConflictMetadataList,
    ?'destination_commit_id' => ?ObjectId,
    ?'mergeable' => ?IsMergeable,
    ?'next_token' => ?NextToken,
    ?'source_commit_id' => ?ObjectId,
  ) $s = shape()) {
    $this->base_commit_id = $s['base_commit_id'] ?? '';
    $this->conflict_metadata_list = $s['conflict_metadata_list'] ?? vec[];
    $this->destination_commit_id = $s['destination_commit_id'] ?? '';
    $this->mergeable = $s['mergeable'] ?? false;
    $this->next_token = $s['next_token'] ?? '';
    $this->source_commit_id = $s['source_commit_id'] ?? '';
  }
}

class GetMergeOptionsInput {
  public ?ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ?ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public ?CommitName $destination_commit_specifier;
  public ?RepositoryName $repository_name;
  public ?CommitName $source_commit_specifier;

  public function __construct(shape(
    ?'conflict_detail_level' => ?ConflictDetailLevelTypeEnum,
    ?'conflict_resolution_strategy' => ?ConflictResolutionStrategyTypeEnum,
    ?'destination_commit_specifier' => ?CommitName,
    ?'repository_name' => ?RepositoryName,
    ?'source_commit_specifier' => ?CommitName,
  ) $s = shape()) {
    $this->conflict_detail_level = $s['conflict_detail_level'] ?? '';
    $this->conflict_resolution_strategy = $s['conflict_resolution_strategy'] ?? '';
    $this->destination_commit_specifier = $s['destination_commit_specifier'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->source_commit_specifier = $s['source_commit_specifier'] ?? '';
  }
}

class GetMergeOptionsOutput {
  public ?ObjectId $base_commit_id;
  public ?ObjectId $destination_commit_id;
  public ?MergeOptions $merge_options;
  public ?ObjectId $source_commit_id;

  public function __construct(shape(
    ?'base_commit_id' => ?ObjectId,
    ?'destination_commit_id' => ?ObjectId,
    ?'merge_options' => ?MergeOptions,
    ?'source_commit_id' => ?ObjectId,
  ) $s = shape()) {
    $this->base_commit_id = $s['base_commit_id'] ?? '';
    $this->destination_commit_id = $s['destination_commit_id'] ?? '';
    $this->merge_options = $s['merge_options'] ?? vec[];
    $this->source_commit_id = $s['source_commit_id'] ?? '';
  }
}

class GetPullRequestApprovalStatesInput {
  public ?PullRequestId $pull_request_id;
  public ?RevisionId $revision_id;

  public function __construct(shape(
    ?'pull_request_id' => ?PullRequestId,
    ?'revision_id' => ?RevisionId,
  ) $s = shape()) {
    $this->pull_request_id = $s['pull_request_id'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class GetPullRequestApprovalStatesOutput {
  public ?ApprovalList $approvals;

  public function __construct(shape(
    ?'approvals' => ?ApprovalList,
  ) $s = shape()) {
    $this->approvals = $s['approvals'] ?? vec[];
  }
}

class GetPullRequestInput {
  public ?PullRequestId $pull_request_id;

  public function __construct(shape(
    ?'pull_request_id' => ?PullRequestId,
  ) $s = shape()) {
    $this->pull_request_id = $s['pull_request_id'] ?? '';
  }
}

class GetPullRequestOutput {
  public ?PullRequest $pull_request;

  public function __construct(shape(
    ?'pull_request' => ?PullRequest,
  ) $s = shape()) {
    $this->pull_request = $s['pull_request'] ?? null;
  }
}

class GetPullRequestOverrideStateInput {
  public ?PullRequestId $pull_request_id;
  public ?RevisionId $revision_id;

  public function __construct(shape(
    ?'pull_request_id' => ?PullRequestId,
    ?'revision_id' => ?RevisionId,
  ) $s = shape()) {
    $this->pull_request_id = $s['pull_request_id'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class GetPullRequestOverrideStateOutput {
  public ?Overridden $overridden;
  public ?Arn $overrider;

  public function __construct(shape(
    ?'overridden' => ?Overridden,
    ?'overrider' => ?Arn,
  ) $s = shape()) {
    $this->overridden = $s['overridden'] ?? false;
    $this->overrider = $s['overrider'] ?? '';
  }
}

class GetRepositoryInput {
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class GetRepositoryOutput {
  public ?RepositoryMetadata $repository_metadata;

  public function __construct(shape(
    ?'repository_metadata' => ?RepositoryMetadata,
  ) $s = shape()) {
    $this->repository_metadata = $s['repository_metadata'] ?? null;
  }
}

class GetRepositoryTriggersInput {
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class GetRepositoryTriggersOutput {
  public ?RepositoryTriggersConfigurationId $configuration_id;
  public ?RepositoryTriggersList $triggers;

  public function __construct(shape(
    ?'configuration_id' => ?RepositoryTriggersConfigurationId,
    ?'triggers' => ?RepositoryTriggersList,
  ) $s = shape()) {
    $this->configuration_id = $s['configuration_id'] ?? '';
    $this->triggers = $s['triggers'] ?? vec[];
  }
}

type HunkContent = string;

class IdempotencyParameterMismatchException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidActorArnException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidApprovalRuleContentException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidApprovalRuleNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidApprovalRuleTemplateContentException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidApprovalRuleTemplateDescriptionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidApprovalRuleTemplateNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidApprovalStateException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidAuthorArnException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidBlobIdException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidBranchNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidClientRequestTokenException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidCommentIdException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidCommitException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidCommitIdException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidConflictDetailLevelException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidConflictResolutionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidConflictResolutionStrategyException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidContinuationTokenException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDeletionParameterException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDescriptionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDestinationCommitSpecifierException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidEmailException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidFileLocationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidFileModeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidFilePositionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidMaxConflictFilesException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidMaxMergeHunksException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidMaxResultsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidMergeOptionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidOrderException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidOverrideStatusException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidParentCommitIdException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidPathException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidPullRequestEventTypeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidPullRequestIdException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidPullRequestStatusException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidPullRequestStatusUpdateException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidReferenceNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRelativeFileVersionEnumException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidReplacementContentException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidReplacementTypeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRepositoryDescriptionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRepositoryNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRepositoryTriggerBranchNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRepositoryTriggerCustomDataException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRepositoryTriggerDestinationArnException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRepositoryTriggerEventsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRepositoryTriggerNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRepositoryTriggerRegionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidResourceArnException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRevisionIdException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRuleContentSha256Exception {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidSortByException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidSourceCommitSpecifierException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidSystemTagUsageException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTagKeysListException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTagsMapException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTargetBranchException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTargetException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTargetsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTitleException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class IsBinaryFile {
  public ?CapitalBoolean $base;
  public ?CapitalBoolean $destination;
  public ?CapitalBoolean $source;

  public function __construct(shape(
    ?'base' => ?CapitalBoolean,
    ?'destination' => ?CapitalBoolean,
    ?'source' => ?CapitalBoolean,
  ) $s = shape()) {
    $this->base = $s['base'] ?? false;
    $this->destination = $s['destination'] ?? false;
    $this->source = $s['source'] ?? false;
  }
}

type IsCommentDeleted = bool;

type IsContentConflict = bool;

type IsFileModeConflict = bool;

type IsHunkConflict = bool;

type IsMergeable = bool;

type IsMerged = bool;

type IsMove = bool;

type IsObjectTypeConflict = bool;

type KeepEmptyFolders = bool;

type LastModifiedDate = int;

type Limit = int;

type LineNumber = int;

class ListApprovalRuleTemplatesInput {
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

class ListApprovalRuleTemplatesOutput {
  public ?ApprovalRuleTemplateNameList $approval_rule_template_names;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'approval_rule_template_names' => ?ApprovalRuleTemplateNameList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->approval_rule_template_names = $s['approval_rule_template_names'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAssociatedApprovalRuleTemplatesForRepositoryInput {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class ListAssociatedApprovalRuleTemplatesForRepositoryOutput {
  public ?ApprovalRuleTemplateNameList $approval_rule_template_names;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'approval_rule_template_names' => ?ApprovalRuleTemplateNameList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->approval_rule_template_names = $s['approval_rule_template_names'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBranchesInput {
  public ?NextToken $next_token;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class ListBranchesOutput {
  public ?BranchNameList $branches;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'branches' => ?BranchNameList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->branches = $s['branches'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPullRequestsInput {
  public ?Arn $author_arn;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?PullRequestStatusEnum $pull_request_status;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'author_arn' => ?Arn,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'pull_request_status' => ?PullRequestStatusEnum,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->author_arn = $s['author_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->pull_request_status = $s['pull_request_status'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class ListPullRequestsOutput {
  public ?NextToken $next_token;
  public ?PullRequestIdList $pull_request_ids;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'pull_request_ids' => ?PullRequestIdList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->pull_request_ids = $s['pull_request_ids'] ?? vec[];
  }
}

class ListRepositoriesForApprovalRuleTemplateInput {
  public ?ApprovalRuleTemplateName $approval_rule_template_name;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'approval_rule_template_name' => ?ApprovalRuleTemplateName,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->approval_rule_template_name = $s['approval_rule_template_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListRepositoriesForApprovalRuleTemplateOutput {
  public ?NextToken $next_token;
  public ?RepositoryNameList $repository_names;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'repository_names' => ?RepositoryNameList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->repository_names = $s['repository_names'] ?? vec[];
  }
}

class ListRepositoriesInput {
  public ?NextToken $next_token;
  public ?OrderEnum $order;
  public ?SortByEnum $sort_by;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'order' => ?OrderEnum,
    ?'sort_by' => ?SortByEnum,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->order = $s['order'] ?? '';
    $this->sort_by = $s['sort_by'] ?? '';
  }
}

class ListRepositoriesOutput {
  public ?NextToken $next_token;
  public ?RepositoryNameIdPairList $repositories;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'repositories' => ?RepositoryNameIdPairList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->repositories = $s['repositories'] ?? vec[];
  }
}

class ListTagsForResourceInput {
  public ?NextToken $next_token;
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceOutput {
  public ?NextToken $next_token;
  public ?TagsMap $tags;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'tags' => ?TagsMap,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class Location {
  public ?Path $file_path;
  public ?Position $file_position;
  public ?RelativeFileVersionEnum $relative_file_version;

  public function __construct(shape(
    ?'file_path' => ?Path,
    ?'file_position' => ?Position,
    ?'relative_file_version' => ?RelativeFileVersionEnum,
  ) $s = shape()) {
    $this->file_path = $s['file_path'] ?? '';
    $this->file_position = $s['file_position'] ?? 0;
    $this->relative_file_version = $s['relative_file_version'] ?? '';
  }
}

class ManualMergeRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type MaxResults = int;

class MaximumBranchesExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MaximumConflictResolutionEntriesExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MaximumFileContentToLoadExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MaximumFileEntriesExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MaximumItemsToCompareExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MaximumNumberOfApprovalsExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MaximumOpenPullRequestsExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MaximumRepositoryNamesExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MaximumRepositoryTriggersExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MaximumRuleTemplatesAssociatedWithRepositoryException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MergeBranchesByFastForwardInput {
  public ?CommitName $destination_commit_specifier;
  public ?RepositoryName $repository_name;
  public ?CommitName $source_commit_specifier;
  public ?BranchName $target_branch;

  public function __construct(shape(
    ?'destination_commit_specifier' => ?CommitName,
    ?'repository_name' => ?RepositoryName,
    ?'source_commit_specifier' => ?CommitName,
    ?'target_branch' => ?BranchName,
  ) $s = shape()) {
    $this->destination_commit_specifier = $s['destination_commit_specifier'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->source_commit_specifier = $s['source_commit_specifier'] ?? '';
    $this->target_branch = $s['target_branch'] ?? '';
  }
}

class MergeBranchesByFastForwardOutput {
  public ?ObjectId $commit_id;
  public ?ObjectId $tree_id;

  public function __construct(shape(
    ?'commit_id' => ?ObjectId,
    ?'tree_id' => ?ObjectId,
  ) $s = shape()) {
    $this->commit_id = $s['commit_id'] ?? '';
    $this->tree_id = $s['tree_id'] ?? '';
  }
}

class MergeBranchesBySquashInput {
  public ?Name $author_name;
  public ?Message $commit_message;
  public ?ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ?ConflictResolution $conflict_resolution;
  public ?ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public ?CommitName $destination_commit_specifier;
  public ?Email $email;
  public ?KeepEmptyFolders $keep_empty_folders;
  public ?RepositoryName $repository_name;
  public ?CommitName $source_commit_specifier;
  public ?BranchName $target_branch;

  public function __construct(shape(
    ?'author_name' => ?Name,
    ?'commit_message' => ?Message,
    ?'conflict_detail_level' => ?ConflictDetailLevelTypeEnum,
    ?'conflict_resolution' => ?ConflictResolution,
    ?'conflict_resolution_strategy' => ?ConflictResolutionStrategyTypeEnum,
    ?'destination_commit_specifier' => ?CommitName,
    ?'email' => ?Email,
    ?'keep_empty_folders' => ?KeepEmptyFolders,
    ?'repository_name' => ?RepositoryName,
    ?'source_commit_specifier' => ?CommitName,
    ?'target_branch' => ?BranchName,
  ) $s = shape()) {
    $this->author_name = $s['author_name'] ?? '';
    $this->commit_message = $s['commit_message'] ?? '';
    $this->conflict_detail_level = $s['conflict_detail_level'] ?? '';
    $this->conflict_resolution = $s['conflict_resolution'] ?? null;
    $this->conflict_resolution_strategy = $s['conflict_resolution_strategy'] ?? '';
    $this->destination_commit_specifier = $s['destination_commit_specifier'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->keep_empty_folders = $s['keep_empty_folders'] ?? false;
    $this->repository_name = $s['repository_name'] ?? '';
    $this->source_commit_specifier = $s['source_commit_specifier'] ?? '';
    $this->target_branch = $s['target_branch'] ?? '';
  }
}

class MergeBranchesBySquashOutput {
  public ?ObjectId $commit_id;
  public ?ObjectId $tree_id;

  public function __construct(shape(
    ?'commit_id' => ?ObjectId,
    ?'tree_id' => ?ObjectId,
  ) $s = shape()) {
    $this->commit_id = $s['commit_id'] ?? '';
    $this->tree_id = $s['tree_id'] ?? '';
  }
}

class MergeBranchesByThreeWayInput {
  public ?Name $author_name;
  public ?Message $commit_message;
  public ?ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ?ConflictResolution $conflict_resolution;
  public ?ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public ?CommitName $destination_commit_specifier;
  public ?Email $email;
  public ?KeepEmptyFolders $keep_empty_folders;
  public ?RepositoryName $repository_name;
  public ?CommitName $source_commit_specifier;
  public ?BranchName $target_branch;

  public function __construct(shape(
    ?'author_name' => ?Name,
    ?'commit_message' => ?Message,
    ?'conflict_detail_level' => ?ConflictDetailLevelTypeEnum,
    ?'conflict_resolution' => ?ConflictResolution,
    ?'conflict_resolution_strategy' => ?ConflictResolutionStrategyTypeEnum,
    ?'destination_commit_specifier' => ?CommitName,
    ?'email' => ?Email,
    ?'keep_empty_folders' => ?KeepEmptyFolders,
    ?'repository_name' => ?RepositoryName,
    ?'source_commit_specifier' => ?CommitName,
    ?'target_branch' => ?BranchName,
  ) $s = shape()) {
    $this->author_name = $s['author_name'] ?? '';
    $this->commit_message = $s['commit_message'] ?? '';
    $this->conflict_detail_level = $s['conflict_detail_level'] ?? '';
    $this->conflict_resolution = $s['conflict_resolution'] ?? null;
    $this->conflict_resolution_strategy = $s['conflict_resolution_strategy'] ?? '';
    $this->destination_commit_specifier = $s['destination_commit_specifier'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->keep_empty_folders = $s['keep_empty_folders'] ?? false;
    $this->repository_name = $s['repository_name'] ?? '';
    $this->source_commit_specifier = $s['source_commit_specifier'] ?? '';
    $this->target_branch = $s['target_branch'] ?? '';
  }
}

class MergeBranchesByThreeWayOutput {
  public ?ObjectId $commit_id;
  public ?ObjectId $tree_id;

  public function __construct(shape(
    ?'commit_id' => ?ObjectId,
    ?'tree_id' => ?ObjectId,
  ) $s = shape()) {
    $this->commit_id = $s['commit_id'] ?? '';
    $this->tree_id = $s['tree_id'] ?? '';
  }
}

class MergeHunk {
  public ?MergeHunkDetail $base;
  public ?MergeHunkDetail $destination;
  public ?IsHunkConflict $is_conflict;
  public ?MergeHunkDetail $source;

  public function __construct(shape(
    ?'base' => ?MergeHunkDetail,
    ?'destination' => ?MergeHunkDetail,
    ?'is_conflict' => ?IsHunkConflict,
    ?'source' => ?MergeHunkDetail,
  ) $s = shape()) {
    $this->base = $s['base'] ?? null;
    $this->destination = $s['destination'] ?? null;
    $this->is_conflict = $s['is_conflict'] ?? false;
    $this->source = $s['source'] ?? null;
  }
}

class MergeHunkDetail {
  public ?LineNumber $end_line;
  public ?HunkContent $hunk_content;
  public ?LineNumber $start_line;

  public function __construct(shape(
    ?'end_line' => ?LineNumber,
    ?'hunk_content' => ?HunkContent,
    ?'start_line' => ?LineNumber,
  ) $s = shape()) {
    $this->end_line = $s['end_line'] ?? 0;
    $this->hunk_content = $s['hunk_content'] ?? '';
    $this->start_line = $s['start_line'] ?? 0;
  }
}

type MergeHunks = vec<MergeHunk>;

class MergeMetadata {
  public ?IsMerged $is_merged;
  public ?CommitId $merge_commit_id;
  public ?MergeOptionTypeEnum $merge_option;
  public ?Arn $merged_by;

  public function __construct(shape(
    ?'is_merged' => ?IsMerged,
    ?'merge_commit_id' => ?CommitId,
    ?'merge_option' => ?MergeOptionTypeEnum,
    ?'merged_by' => ?Arn,
  ) $s = shape()) {
    $this->is_merged = $s['is_merged'] ?? false;
    $this->merge_commit_id = $s['merge_commit_id'] ?? '';
    $this->merge_option = $s['merge_option'] ?? '';
    $this->merged_by = $s['merged_by'] ?? '';
  }
}

class MergeOperations {
  public ?ChangeTypeEnum $destination;
  public ?ChangeTypeEnum $source;

  public function __construct(shape(
    ?'destination' => ?ChangeTypeEnum,
    ?'source' => ?ChangeTypeEnum,
  ) $s = shape()) {
    $this->destination = $s['destination'] ?? '';
    $this->source = $s['source'] ?? '';
  }
}

class MergeOptionRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type MergeOptionTypeEnum = string;

type MergeOptions = vec<MergeOptionTypeEnum>;

class MergePullRequestByFastForwardInput {
  public ?PullRequestId $pull_request_id;
  public ?RepositoryName $repository_name;
  public ?ObjectId $source_commit_id;

  public function __construct(shape(
    ?'pull_request_id' => ?PullRequestId,
    ?'repository_name' => ?RepositoryName,
    ?'source_commit_id' => ?ObjectId,
  ) $s = shape()) {
    $this->pull_request_id = $s['pull_request_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->source_commit_id = $s['source_commit_id'] ?? '';
  }
}

class MergePullRequestByFastForwardOutput {
  public ?PullRequest $pull_request;

  public function __construct(shape(
    ?'pull_request' => ?PullRequest,
  ) $s = shape()) {
    $this->pull_request = $s['pull_request'] ?? null;
  }
}

class MergePullRequestBySquashInput {
  public ?Name $author_name;
  public ?Message $commit_message;
  public ?ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ?ConflictResolution $conflict_resolution;
  public ?ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public ?Email $email;
  public ?KeepEmptyFolders $keep_empty_folders;
  public ?PullRequestId $pull_request_id;
  public ?RepositoryName $repository_name;
  public ?ObjectId $source_commit_id;

  public function __construct(shape(
    ?'author_name' => ?Name,
    ?'commit_message' => ?Message,
    ?'conflict_detail_level' => ?ConflictDetailLevelTypeEnum,
    ?'conflict_resolution' => ?ConflictResolution,
    ?'conflict_resolution_strategy' => ?ConflictResolutionStrategyTypeEnum,
    ?'email' => ?Email,
    ?'keep_empty_folders' => ?KeepEmptyFolders,
    ?'pull_request_id' => ?PullRequestId,
    ?'repository_name' => ?RepositoryName,
    ?'source_commit_id' => ?ObjectId,
  ) $s = shape()) {
    $this->author_name = $s['author_name'] ?? '';
    $this->commit_message = $s['commit_message'] ?? '';
    $this->conflict_detail_level = $s['conflict_detail_level'] ?? '';
    $this->conflict_resolution = $s['conflict_resolution'] ?? null;
    $this->conflict_resolution_strategy = $s['conflict_resolution_strategy'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->keep_empty_folders = $s['keep_empty_folders'] ?? false;
    $this->pull_request_id = $s['pull_request_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->source_commit_id = $s['source_commit_id'] ?? '';
  }
}

class MergePullRequestBySquashOutput {
  public ?PullRequest $pull_request;

  public function __construct(shape(
    ?'pull_request' => ?PullRequest,
  ) $s = shape()) {
    $this->pull_request = $s['pull_request'] ?? null;
  }
}

class MergePullRequestByThreeWayInput {
  public ?Name $author_name;
  public ?Message $commit_message;
  public ?ConflictDetailLevelTypeEnum $conflict_detail_level;
  public ?ConflictResolution $conflict_resolution;
  public ?ConflictResolutionStrategyTypeEnum $conflict_resolution_strategy;
  public ?Email $email;
  public ?KeepEmptyFolders $keep_empty_folders;
  public ?PullRequestId $pull_request_id;
  public ?RepositoryName $repository_name;
  public ?ObjectId $source_commit_id;

  public function __construct(shape(
    ?'author_name' => ?Name,
    ?'commit_message' => ?Message,
    ?'conflict_detail_level' => ?ConflictDetailLevelTypeEnum,
    ?'conflict_resolution' => ?ConflictResolution,
    ?'conflict_resolution_strategy' => ?ConflictResolutionStrategyTypeEnum,
    ?'email' => ?Email,
    ?'keep_empty_folders' => ?KeepEmptyFolders,
    ?'pull_request_id' => ?PullRequestId,
    ?'repository_name' => ?RepositoryName,
    ?'source_commit_id' => ?ObjectId,
  ) $s = shape()) {
    $this->author_name = $s['author_name'] ?? '';
    $this->commit_message = $s['commit_message'] ?? '';
    $this->conflict_detail_level = $s['conflict_detail_level'] ?? '';
    $this->conflict_resolution = $s['conflict_resolution'] ?? null;
    $this->conflict_resolution_strategy = $s['conflict_resolution_strategy'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->keep_empty_folders = $s['keep_empty_folders'] ?? false;
    $this->pull_request_id = $s['pull_request_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->source_commit_id = $s['source_commit_id'] ?? '';
  }
}

class MergePullRequestByThreeWayOutput {
  public ?PullRequest $pull_request;

  public function __construct(shape(
    ?'pull_request' => ?PullRequest,
  ) $s = shape()) {
    $this->pull_request = $s['pull_request'] ?? null;
  }
}

type Message = string;

type Mode = string;

class MultipleConflictResolutionEntriesException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MultipleRepositoriesInPullRequestException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Name = string;

class NameLengthExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type NextToken = string;

class NoChangeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type NumberOfConflicts = int;

class NumberOfRuleTemplatesExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NumberOfRulesExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ObjectId = string;

type ObjectSize = int;

type ObjectTypeEnum = string;

class ObjectTypes {
  public ?ObjectTypeEnum $base;
  public ?ObjectTypeEnum $destination;
  public ?ObjectTypeEnum $source;

  public function __construct(shape(
    ?'base' => ?ObjectTypeEnum,
    ?'destination' => ?ObjectTypeEnum,
    ?'source' => ?ObjectTypeEnum,
  ) $s = shape()) {
    $this->base = $s['base'] ?? '';
    $this->destination = $s['destination'] ?? '';
    $this->source = $s['source'] ?? '';
  }
}

type OrderEnum = string;

class OriginApprovalRuleTemplate {
  public ?ApprovalRuleTemplateId $approval_rule_template_id;
  public ?ApprovalRuleTemplateName $approval_rule_template_name;

  public function __construct(shape(
    ?'approval_rule_template_id' => ?ApprovalRuleTemplateId,
    ?'approval_rule_template_name' => ?ApprovalRuleTemplateName,
  ) $s = shape()) {
    $this->approval_rule_template_id = $s['approval_rule_template_id'] ?? '';
    $this->approval_rule_template_name = $s['approval_rule_template_name'] ?? '';
  }
}

type Overridden = bool;

class OverrideAlreadySetException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class OverridePullRequestApprovalRulesInput {
  public ?OverrideStatus $override_status;
  public ?PullRequestId $pull_request_id;
  public ?RevisionId $revision_id;

  public function __construct(shape(
    ?'override_status' => ?OverrideStatus,
    ?'pull_request_id' => ?PullRequestId,
    ?'revision_id' => ?RevisionId,
  ) $s = shape()) {
    $this->override_status = $s['override_status'] ?? '';
    $this->pull_request_id = $s['pull_request_id'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

type OverrideStatus = string;

class OverrideStatusRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ParentCommitDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ParentCommitIdOutdatedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ParentCommitIdRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ParentList = vec<ObjectId>;

type Path = string;

class PathDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PathRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Position = int;

class PostCommentForComparedCommitInput {
  public ?CommitId $after_commit_id;
  public ?CommitId $before_commit_id;
  public ?ClientRequestToken $client_request_token;
  public ?Content $content;
  public ?Location $location;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'after_commit_id' => ?CommitId,
    ?'before_commit_id' => ?CommitId,
    ?'client_request_token' => ?ClientRequestToken,
    ?'content' => ?Content,
    ?'location' => ?Location,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->after_commit_id = $s['after_commit_id'] ?? '';
    $this->before_commit_id = $s['before_commit_id'] ?? '';
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->content = $s['content'] ?? '';
    $this->location = $s['location'] ?? null;
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class PostCommentForComparedCommitOutput {
  public ?ObjectId $after_blob_id;
  public ?CommitId $after_commit_id;
  public ?ObjectId $before_blob_id;
  public ?CommitId $before_commit_id;
  public ?Comment $comment;
  public ?Location $location;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'after_blob_id' => ?ObjectId,
    ?'after_commit_id' => ?CommitId,
    ?'before_blob_id' => ?ObjectId,
    ?'before_commit_id' => ?CommitId,
    ?'comment' => ?Comment,
    ?'location' => ?Location,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->after_blob_id = $s['after_blob_id'] ?? '';
    $this->after_commit_id = $s['after_commit_id'] ?? '';
    $this->before_blob_id = $s['before_blob_id'] ?? '';
    $this->before_commit_id = $s['before_commit_id'] ?? '';
    $this->comment = $s['comment'] ?? null;
    $this->location = $s['location'] ?? null;
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class PostCommentForPullRequestInput {
  public ?CommitId $after_commit_id;
  public ?CommitId $before_commit_id;
  public ?ClientRequestToken $client_request_token;
  public ?Content $content;
  public ?Location $location;
  public ?PullRequestId $pull_request_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'after_commit_id' => ?CommitId,
    ?'before_commit_id' => ?CommitId,
    ?'client_request_token' => ?ClientRequestToken,
    ?'content' => ?Content,
    ?'location' => ?Location,
    ?'pull_request_id' => ?PullRequestId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->after_commit_id = $s['after_commit_id'] ?? '';
    $this->before_commit_id = $s['before_commit_id'] ?? '';
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->content = $s['content'] ?? '';
    $this->location = $s['location'] ?? null;
    $this->pull_request_id = $s['pull_request_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class PostCommentForPullRequestOutput {
  public ?ObjectId $after_blob_id;
  public ?CommitId $after_commit_id;
  public ?ObjectId $before_blob_id;
  public ?CommitId $before_commit_id;
  public ?Comment $comment;
  public ?Location $location;
  public ?PullRequestId $pull_request_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'after_blob_id' => ?ObjectId,
    ?'after_commit_id' => ?CommitId,
    ?'before_blob_id' => ?ObjectId,
    ?'before_commit_id' => ?CommitId,
    ?'comment' => ?Comment,
    ?'location' => ?Location,
    ?'pull_request_id' => ?PullRequestId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->after_blob_id = $s['after_blob_id'] ?? '';
    $this->after_commit_id = $s['after_commit_id'] ?? '';
    $this->before_blob_id = $s['before_blob_id'] ?? '';
    $this->before_commit_id = $s['before_commit_id'] ?? '';
    $this->comment = $s['comment'] ?? null;
    $this->location = $s['location'] ?? null;
    $this->pull_request_id = $s['pull_request_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class PostCommentReplyInput {
  public ?ClientRequestToken $client_request_token;
  public ?Content $content;
  public ?CommentId $in_reply_to;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'content' => ?Content,
    ?'in_reply_to' => ?CommentId,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->content = $s['content'] ?? '';
    $this->in_reply_to = $s['in_reply_to'] ?? '';
  }
}

class PostCommentReplyOutput {
  public ?Comment $comment;

  public function __construct(shape(
    ?'comment' => ?Comment,
  ) $s = shape()) {
    $this->comment = $s['comment'] ?? null;
  }
}

class PullRequest {
  public ?ApprovalRulesList $approval_rules;
  public ?Arn $author_arn;
  public ?ClientRequestToken $client_request_token;
  public ?CreationDate $creation_date;
  public ?Description $description;
  public ?LastModifiedDate $last_activity_date;
  public ?PullRequestId $pull_request_id;
  public ?PullRequestStatusEnum $pull_request_status;
  public ?PullRequestTargetList $pull_request_targets;
  public ?RevisionId $revision_id;
  public ?Title $title;

  public function __construct(shape(
    ?'approval_rules' => ?ApprovalRulesList,
    ?'author_arn' => ?Arn,
    ?'client_request_token' => ?ClientRequestToken,
    ?'creation_date' => ?CreationDate,
    ?'description' => ?Description,
    ?'last_activity_date' => ?LastModifiedDate,
    ?'pull_request_id' => ?PullRequestId,
    ?'pull_request_status' => ?PullRequestStatusEnum,
    ?'pull_request_targets' => ?PullRequestTargetList,
    ?'revision_id' => ?RevisionId,
    ?'title' => ?Title,
  ) $s = shape()) {
    $this->approval_rules = $s['approval_rules'] ?? vec[];
    $this->author_arn = $s['author_arn'] ?? '';
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->last_activity_date = $s['last_activity_date'] ?? 0;
    $this->pull_request_id = $s['pull_request_id'] ?? '';
    $this->pull_request_status = $s['pull_request_status'] ?? '';
    $this->pull_request_targets = $s['pull_request_targets'] ?? vec[];
    $this->revision_id = $s['revision_id'] ?? '';
    $this->title = $s['title'] ?? '';
  }
}

class PullRequestAlreadyClosedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PullRequestApprovalRulesNotSatisfiedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PullRequestCannotBeApprovedByAuthorException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PullRequestCreatedEventMetadata {
  public ?CommitId $destination_commit_id;
  public ?CommitId $merge_base;
  public ?RepositoryName $repository_name;
  public ?CommitId $source_commit_id;

  public function __construct(shape(
    ?'destination_commit_id' => ?CommitId,
    ?'merge_base' => ?CommitId,
    ?'repository_name' => ?RepositoryName,
    ?'source_commit_id' => ?CommitId,
  ) $s = shape()) {
    $this->destination_commit_id = $s['destination_commit_id'] ?? '';
    $this->merge_base = $s['merge_base'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->source_commit_id = $s['source_commit_id'] ?? '';
  }
}

class PullRequestDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PullRequestEvent {
  public ?Arn $actor_arn;
  public ?ApprovalRuleEventMetadata $approval_rule_event_metadata;
  public ?ApprovalRuleOverriddenEventMetadata $approval_rule_overridden_event_metadata;
  public ?ApprovalStateChangedEventMetadata $approval_state_changed_event_metadata;
  public ?EventDate $event_date;
  public ?PullRequestCreatedEventMetadata $pull_request_created_event_metadata;
  public ?PullRequestEventType $pull_request_event_type;
  public ?PullRequestId $pull_request_id;
  public ?PullRequestMergedStateChangedEventMetadata $pull_request_merged_state_changed_event_metadata;
  public ?PullRequestSourceReferenceUpdatedEventMetadata $pull_request_source_reference_updated_event_metadata;
  public ?PullRequestStatusChangedEventMetadata $pull_request_status_changed_event_metadata;

  public function __construct(shape(
    ?'actor_arn' => ?Arn,
    ?'approval_rule_event_metadata' => ?ApprovalRuleEventMetadata,
    ?'approval_rule_overridden_event_metadata' => ?ApprovalRuleOverriddenEventMetadata,
    ?'approval_state_changed_event_metadata' => ?ApprovalStateChangedEventMetadata,
    ?'event_date' => ?EventDate,
    ?'pull_request_created_event_metadata' => ?PullRequestCreatedEventMetadata,
    ?'pull_request_event_type' => ?PullRequestEventType,
    ?'pull_request_id' => ?PullRequestId,
    ?'pull_request_merged_state_changed_event_metadata' => ?PullRequestMergedStateChangedEventMetadata,
    ?'pull_request_source_reference_updated_event_metadata' => ?PullRequestSourceReferenceUpdatedEventMetadata,
    ?'pull_request_status_changed_event_metadata' => ?PullRequestStatusChangedEventMetadata,
  ) $s = shape()) {
    $this->actor_arn = $s['actor_arn'] ?? '';
    $this->approval_rule_event_metadata = $s['approval_rule_event_metadata'] ?? null;
    $this->approval_rule_overridden_event_metadata = $s['approval_rule_overridden_event_metadata'] ?? null;
    $this->approval_state_changed_event_metadata = $s['approval_state_changed_event_metadata'] ?? null;
    $this->event_date = $s['event_date'] ?? 0;
    $this->pull_request_created_event_metadata = $s['pull_request_created_event_metadata'] ?? null;
    $this->pull_request_event_type = $s['pull_request_event_type'] ?? '';
    $this->pull_request_id = $s['pull_request_id'] ?? '';
    $this->pull_request_merged_state_changed_event_metadata = $s['pull_request_merged_state_changed_event_metadata'] ?? null;
    $this->pull_request_source_reference_updated_event_metadata = $s['pull_request_source_reference_updated_event_metadata'] ?? null;
    $this->pull_request_status_changed_event_metadata = $s['pull_request_status_changed_event_metadata'] ?? null;
  }
}

type PullRequestEventList = vec<PullRequestEvent>;

type PullRequestEventType = string;

type PullRequestId = string;

type PullRequestIdList = vec<PullRequestId>;

class PullRequestIdRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PullRequestMergedStateChangedEventMetadata {
  public ?ReferenceName $destination_reference;
  public ?MergeMetadata $merge_metadata;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'destination_reference' => ?ReferenceName,
    ?'merge_metadata' => ?MergeMetadata,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->destination_reference = $s['destination_reference'] ?? '';
    $this->merge_metadata = $s['merge_metadata'] ?? null;
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class PullRequestSourceReferenceUpdatedEventMetadata {
  public ?CommitId $after_commit_id;
  public ?CommitId $before_commit_id;
  public ?CommitId $merge_base;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'after_commit_id' => ?CommitId,
    ?'before_commit_id' => ?CommitId,
    ?'merge_base' => ?CommitId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->after_commit_id = $s['after_commit_id'] ?? '';
    $this->before_commit_id = $s['before_commit_id'] ?? '';
    $this->merge_base = $s['merge_base'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class PullRequestStatusChangedEventMetadata {
  public ?PullRequestStatusEnum $pull_request_status;

  public function __construct(shape(
    ?'pull_request_status' => ?PullRequestStatusEnum,
  ) $s = shape()) {
    $this->pull_request_status = $s['pull_request_status'] ?? '';
  }
}

type PullRequestStatusEnum = string;

class PullRequestStatusRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PullRequestTarget {
  public ?CommitId $destination_commit;
  public ?ReferenceName $destination_reference;
  public ?CommitId $merge_base;
  public ?MergeMetadata $merge_metadata;
  public ?RepositoryName $repository_name;
  public ?CommitId $source_commit;
  public ?ReferenceName $source_reference;

  public function __construct(shape(
    ?'destination_commit' => ?CommitId,
    ?'destination_reference' => ?ReferenceName,
    ?'merge_base' => ?CommitId,
    ?'merge_metadata' => ?MergeMetadata,
    ?'repository_name' => ?RepositoryName,
    ?'source_commit' => ?CommitId,
    ?'source_reference' => ?ReferenceName,
  ) $s = shape()) {
    $this->destination_commit = $s['destination_commit'] ?? '';
    $this->destination_reference = $s['destination_reference'] ?? '';
    $this->merge_base = $s['merge_base'] ?? '';
    $this->merge_metadata = $s['merge_metadata'] ?? null;
    $this->repository_name = $s['repository_name'] ?? '';
    $this->source_commit = $s['source_commit'] ?? '';
    $this->source_reference = $s['source_reference'] ?? '';
  }
}

type PullRequestTargetList = vec<PullRequestTarget>;

type PutFileEntries = vec<PutFileEntry>;

class PutFileEntry {
  public ?FileContent $file_content;
  public ?FileModeTypeEnum $file_mode;
  public ?Path $file_path;
  public ?SourceFileSpecifier $source_file;

  public function __construct(shape(
    ?'file_content' => ?FileContent,
    ?'file_mode' => ?FileModeTypeEnum,
    ?'file_path' => ?Path,
    ?'source_file' => ?SourceFileSpecifier,
  ) $s = shape()) {
    $this->file_content = $s['file_content'] ?? '';
    $this->file_mode = $s['file_mode'] ?? '';
    $this->file_path = $s['file_path'] ?? '';
    $this->source_file = $s['source_file'] ?? null;
  }
}

class PutFileEntryConflictException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutFileInput {
  public ?BranchName $branch_name;
  public ?Message $commit_message;
  public ?Email $email;
  public ?FileContent $file_content;
  public ?FileModeTypeEnum $file_mode;
  public ?Path $file_path;
  public ?Name $name;
  public ?CommitId $parent_commit_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'branch_name' => ?BranchName,
    ?'commit_message' => ?Message,
    ?'email' => ?Email,
    ?'file_content' => ?FileContent,
    ?'file_mode' => ?FileModeTypeEnum,
    ?'file_path' => ?Path,
    ?'name' => ?Name,
    ?'parent_commit_id' => ?CommitId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->branch_name = $s['branch_name'] ?? '';
    $this->commit_message = $s['commit_message'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->file_content = $s['file_content'] ?? '';
    $this->file_mode = $s['file_mode'] ?? '';
    $this->file_path = $s['file_path'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->parent_commit_id = $s['parent_commit_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class PutFileOutput {
  public ?ObjectId $blob_id;
  public ?ObjectId $commit_id;
  public ?ObjectId $tree_id;

  public function __construct(shape(
    ?'blob_id' => ?ObjectId,
    ?'commit_id' => ?ObjectId,
    ?'tree_id' => ?ObjectId,
  ) $s = shape()) {
    $this->blob_id = $s['blob_id'] ?? '';
    $this->commit_id = $s['commit_id'] ?? '';
    $this->tree_id = $s['tree_id'] ?? '';
  }
}

class PutRepositoryTriggersInput {
  public ?RepositoryName $repository_name;
  public ?RepositoryTriggersList $triggers;

  public function __construct(shape(
    ?'repository_name' => ?RepositoryName,
    ?'triggers' => ?RepositoryTriggersList,
  ) $s = shape()) {
    $this->repository_name = $s['repository_name'] ?? '';
    $this->triggers = $s['triggers'] ?? vec[];
  }
}

class PutRepositoryTriggersOutput {
  public ?RepositoryTriggersConfigurationId $configuration_id;

  public function __construct(shape(
    ?'configuration_id' => ?RepositoryTriggersConfigurationId,
  ) $s = shape()) {
    $this->configuration_id = $s['configuration_id'] ?? '';
  }
}

class ReferenceDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ReferenceName = string;

class ReferenceNameRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ReferenceTypeNotSupportedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RelativeFileVersionEnum = string;

type ReplaceContentEntries = vec<ReplaceContentEntry>;

class ReplaceContentEntry {
  public ?FileContent $content;
  public ?FileModeTypeEnum $file_mode;
  public ?Path $file_path;
  public ?ReplacementTypeEnum $replacement_type;

  public function __construct(shape(
    ?'content' => ?FileContent,
    ?'file_mode' => ?FileModeTypeEnum,
    ?'file_path' => ?Path,
    ?'replacement_type' => ?ReplacementTypeEnum,
  ) $s = shape()) {
    $this->content = $s['content'] ?? '';
    $this->file_mode = $s['file_mode'] ?? '';
    $this->file_path = $s['file_path'] ?? '';
    $this->replacement_type = $s['replacement_type'] ?? '';
  }
}

class ReplacementContentRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ReplacementTypeEnum = string;

class ReplacementTypeRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RepositoryDescription = string;

class RepositoryDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RepositoryId = string;

class RepositoryLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RepositoryMetadata {
  public ?Arn $arn;
  public ?AccountId $account_id;
  public ?CloneUrlHttp $clone_url_http;
  public ?CloneUrlSsh $clone_url_ssh;
  public ?CreationDate $creation_date;
  public ?BranchName $default_branch;
  public ?LastModifiedDate $last_modified_date;
  public ?RepositoryDescription $repository_description;
  public ?RepositoryId $repository_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'account_id' => ?AccountId,
    ?'clone_url_http' => ?CloneUrlHttp,
    ?'clone_url_ssh' => ?CloneUrlSsh,
    ?'creation_date' => ?CreationDate,
    ?'default_branch' => ?BranchName,
    ?'last_modified_date' => ?LastModifiedDate,
    ?'repository_description' => ?RepositoryDescription,
    ?'repository_id' => ?RepositoryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->account_id = $s['account_id'] ?? '';
    $this->clone_url_http = $s['clone_url_http'] ?? '';
    $this->clone_url_ssh = $s['clone_url_ssh'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->default_branch = $s['default_branch'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? 0;
    $this->repository_description = $s['repository_description'] ?? '';
    $this->repository_id = $s['repository_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

type RepositoryMetadataList = vec<RepositoryMetadata>;

type RepositoryName = string;

class RepositoryNameExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RepositoryNameIdPair {
  public ?RepositoryId $repository_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'repository_id' => ?RepositoryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->repository_id = $s['repository_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

type RepositoryNameIdPairList = vec<RepositoryNameIdPair>;

type RepositoryNameList = vec<RepositoryName>;

class RepositoryNameRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RepositoryNamesRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RepositoryNotAssociatedWithPullRequestException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RepositoryNotFoundList = vec<RepositoryName>;

class RepositoryTrigger {
  public ?BranchNameList $branches;
  public ?RepositoryTriggerCustomData $custom_data;
  public ?Arn $destination_arn;
  public ?RepositoryTriggerEventList $events;
  public ?RepositoryTriggerName $name;

  public function __construct(shape(
    ?'branches' => ?BranchNameList,
    ?'custom_data' => ?RepositoryTriggerCustomData,
    ?'destination_arn' => ?Arn,
    ?'events' => ?RepositoryTriggerEventList,
    ?'name' => ?RepositoryTriggerName,
  ) $s = shape()) {
    $this->branches = $s['branches'] ?? vec[];
    $this->custom_data = $s['custom_data'] ?? '';
    $this->destination_arn = $s['destination_arn'] ?? '';
    $this->events = $s['events'] ?? vec[];
    $this->name = $s['name'] ?? '';
  }
}

class RepositoryTriggerBranchNameListRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RepositoryTriggerCustomData = string;

class RepositoryTriggerDestinationArnRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RepositoryTriggerEventEnum = string;

type RepositoryTriggerEventList = vec<RepositoryTriggerEventEnum>;

class RepositoryTriggerEventsListRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RepositoryTriggerExecutionFailure {
  public ?RepositoryTriggerExecutionFailureMessage $failure_message;
  public ?RepositoryTriggerName $trigger;

  public function __construct(shape(
    ?'failure_message' => ?RepositoryTriggerExecutionFailureMessage,
    ?'trigger' => ?RepositoryTriggerName,
  ) $s = shape()) {
    $this->failure_message = $s['failure_message'] ?? '';
    $this->trigger = $s['trigger'] ?? '';
  }
}

type RepositoryTriggerExecutionFailureList = vec<RepositoryTriggerExecutionFailure>;

type RepositoryTriggerExecutionFailureMessage = string;

type RepositoryTriggerName = string;

type RepositoryTriggerNameList = vec<RepositoryTriggerName>;

class RepositoryTriggerNameRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RepositoryTriggersConfigurationId = string;

type RepositoryTriggersList = vec<RepositoryTrigger>;

class RepositoryTriggersListRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ResourceArn = string;

class ResourceArnRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RestrictedSourceFileException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RevisionId = string;

class RevisionIdRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RevisionNotCurrentException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RuleContentSha256 = string;

class SameFileContentException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SamePathRequestException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SetFileModeEntries = vec<SetFileModeEntry>;

class SetFileModeEntry {
  public ?FileModeTypeEnum $file_mode;
  public ?Path $file_path;

  public function __construct(shape(
    ?'file_mode' => ?FileModeTypeEnum,
    ?'file_path' => ?Path,
  ) $s = shape()) {
    $this->file_mode = $s['file_mode'] ?? '';
    $this->file_path = $s['file_path'] ?? '';
  }
}

type SortByEnum = string;

class SourceAndDestinationAreSameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SourceFileOrContentRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SourceFileSpecifier {
  public ?Path $file_path;
  public ?IsMove $is_move;

  public function __construct(shape(
    ?'file_path' => ?Path,
    ?'is_move' => ?IsMove,
  ) $s = shape()) {
    $this->file_path = $s['file_path'] ?? '';
    $this->is_move = $s['is_move'] ?? false;
  }
}

class SubModule {
  public ?Path $absolute_path;
  public ?ObjectId $commit_id;
  public ?Path $relative_path;

  public function __construct(shape(
    ?'absolute_path' => ?Path,
    ?'commit_id' => ?ObjectId,
    ?'relative_path' => ?Path,
  ) $s = shape()) {
    $this->absolute_path = $s['absolute_path'] ?? '';
    $this->commit_id = $s['commit_id'] ?? '';
    $this->relative_path = $s['relative_path'] ?? '';
  }
}

type SubModuleList = vec<SubModule>;

class SymbolicLink {
  public ?Path $absolute_path;
  public ?ObjectId $blob_id;
  public ?FileModeTypeEnum $file_mode;
  public ?Path $relative_path;

  public function __construct(shape(
    ?'absolute_path' => ?Path,
    ?'blob_id' => ?ObjectId,
    ?'file_mode' => ?FileModeTypeEnum,
    ?'relative_path' => ?Path,
  ) $s = shape()) {
    $this->absolute_path = $s['absolute_path'] ?? '';
    $this->blob_id = $s['blob_id'] ?? '';
    $this->file_mode = $s['file_mode'] ?? '';
    $this->relative_path = $s['relative_path'] ?? '';
  }
}

type SymbolicLinkList = vec<SymbolicLink>;

type TagKey = string;

type TagKeysList = vec<TagKey>;

class TagKeysListRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TagPolicyException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TagResourceInput {
  public ?ResourceArn $resource_arn;
  public ?TagsMap $tags;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'tags' => ?TagsMap,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

type TagValue = string;

type TagsMap = dict<TagKey, TagValue>;

class TagsMapRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Target {
  public ?ReferenceName $destination_reference;
  public ?RepositoryName $repository_name;
  public ?ReferenceName $source_reference;

  public function __construct(shape(
    ?'destination_reference' => ?ReferenceName,
    ?'repository_name' => ?RepositoryName,
    ?'source_reference' => ?ReferenceName,
  ) $s = shape()) {
    $this->destination_reference = $s['destination_reference'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->source_reference = $s['source_reference'] ?? '';
  }
}

type TargetList = vec<Target>;

class TargetRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TargetsRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TestRepositoryTriggersInput {
  public ?RepositoryName $repository_name;
  public ?RepositoryTriggersList $triggers;

  public function __construct(shape(
    ?'repository_name' => ?RepositoryName,
    ?'triggers' => ?RepositoryTriggersList,
  ) $s = shape()) {
    $this->repository_name = $s['repository_name'] ?? '';
    $this->triggers = $s['triggers'] ?? vec[];
  }
}

class TestRepositoryTriggersOutput {
  public ?RepositoryTriggerExecutionFailureList $failed_executions;
  public ?RepositoryTriggerNameList $successful_executions;

  public function __construct(shape(
    ?'failed_executions' => ?RepositoryTriggerExecutionFailureList,
    ?'successful_executions' => ?RepositoryTriggerNameList,
  ) $s = shape()) {
    $this->failed_executions = $s['failed_executions'] ?? vec[];
    $this->successful_executions = $s['successful_executions'] ?? vec[];
  }
}

class TipOfSourceReferenceIsDifferentException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TipsDivergenceExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Title = string;

class TitleRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TooManyTagsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UntagResourceInput {
  public ?ResourceArn $resource_arn;
  public ?TagKeysList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'tag_keys' => ?TagKeysList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UpdateApprovalRuleTemplateContentInput {
  public ?ApprovalRuleTemplateName $approval_rule_template_name;
  public ?RuleContentSha256 $existing_rule_content_sha_256;
  public ?ApprovalRuleTemplateContent $new_rule_content;

  public function __construct(shape(
    ?'approval_rule_template_name' => ?ApprovalRuleTemplateName,
    ?'existing_rule_content_sha_256' => ?RuleContentSha256,
    ?'new_rule_content' => ?ApprovalRuleTemplateContent,
  ) $s = shape()) {
    $this->approval_rule_template_name = $s['approval_rule_template_name'] ?? '';
    $this->existing_rule_content_sha_256 = $s['existing_rule_content_sha_256'] ?? '';
    $this->new_rule_content = $s['new_rule_content'] ?? '';
  }
}

class UpdateApprovalRuleTemplateContentOutput {
  public ?ApprovalRuleTemplate $approval_rule_template;

  public function __construct(shape(
    ?'approval_rule_template' => ?ApprovalRuleTemplate,
  ) $s = shape()) {
    $this->approval_rule_template = $s['approval_rule_template'] ?? null;
  }
}

class UpdateApprovalRuleTemplateDescriptionInput {
  public ?ApprovalRuleTemplateDescription $approval_rule_template_description;
  public ?ApprovalRuleTemplateName $approval_rule_template_name;

  public function __construct(shape(
    ?'approval_rule_template_description' => ?ApprovalRuleTemplateDescription,
    ?'approval_rule_template_name' => ?ApprovalRuleTemplateName,
  ) $s = shape()) {
    $this->approval_rule_template_description = $s['approval_rule_template_description'] ?? '';
    $this->approval_rule_template_name = $s['approval_rule_template_name'] ?? '';
  }
}

class UpdateApprovalRuleTemplateDescriptionOutput {
  public ?ApprovalRuleTemplate $approval_rule_template;

  public function __construct(shape(
    ?'approval_rule_template' => ?ApprovalRuleTemplate,
  ) $s = shape()) {
    $this->approval_rule_template = $s['approval_rule_template'] ?? null;
  }
}

class UpdateApprovalRuleTemplateNameInput {
  public ?ApprovalRuleTemplateName $new_approval_rule_template_name;
  public ?ApprovalRuleTemplateName $old_approval_rule_template_name;

  public function __construct(shape(
    ?'new_approval_rule_template_name' => ?ApprovalRuleTemplateName,
    ?'old_approval_rule_template_name' => ?ApprovalRuleTemplateName,
  ) $s = shape()) {
    $this->new_approval_rule_template_name = $s['new_approval_rule_template_name'] ?? '';
    $this->old_approval_rule_template_name = $s['old_approval_rule_template_name'] ?? '';
  }
}

class UpdateApprovalRuleTemplateNameOutput {
  public ?ApprovalRuleTemplate $approval_rule_template;

  public function __construct(shape(
    ?'approval_rule_template' => ?ApprovalRuleTemplate,
  ) $s = shape()) {
    $this->approval_rule_template = $s['approval_rule_template'] ?? null;
  }
}

class UpdateCommentInput {
  public ?CommentId $comment_id;
  public ?Content $content;

  public function __construct(shape(
    ?'comment_id' => ?CommentId,
    ?'content' => ?Content,
  ) $s = shape()) {
    $this->comment_id = $s['comment_id'] ?? '';
    $this->content = $s['content'] ?? '';
  }
}

class UpdateCommentOutput {
  public ?Comment $comment;

  public function __construct(shape(
    ?'comment' => ?Comment,
  ) $s = shape()) {
    $this->comment = $s['comment'] ?? null;
  }
}

class UpdateDefaultBranchInput {
  public ?BranchName $default_branch_name;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'default_branch_name' => ?BranchName,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->default_branch_name = $s['default_branch_name'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class UpdatePullRequestApprovalRuleContentInput {
  public ?ApprovalRuleName $approval_rule_name;
  public ?RuleContentSha256 $existing_rule_content_sha_256;
  public ?ApprovalRuleContent $new_rule_content;
  public ?PullRequestId $pull_request_id;

  public function __construct(shape(
    ?'approval_rule_name' => ?ApprovalRuleName,
    ?'existing_rule_content_sha_256' => ?RuleContentSha256,
    ?'new_rule_content' => ?ApprovalRuleContent,
    ?'pull_request_id' => ?PullRequestId,
  ) $s = shape()) {
    $this->approval_rule_name = $s['approval_rule_name'] ?? '';
    $this->existing_rule_content_sha_256 = $s['existing_rule_content_sha_256'] ?? '';
    $this->new_rule_content = $s['new_rule_content'] ?? '';
    $this->pull_request_id = $s['pull_request_id'] ?? '';
  }
}

class UpdatePullRequestApprovalRuleContentOutput {
  public ?ApprovalRule $approval_rule;

  public function __construct(shape(
    ?'approval_rule' => ?ApprovalRule,
  ) $s = shape()) {
    $this->approval_rule = $s['approval_rule'] ?? null;
  }
}

class UpdatePullRequestApprovalStateInput {
  public ?ApprovalState $approval_state;
  public ?PullRequestId $pull_request_id;
  public ?RevisionId $revision_id;

  public function __construct(shape(
    ?'approval_state' => ?ApprovalState,
    ?'pull_request_id' => ?PullRequestId,
    ?'revision_id' => ?RevisionId,
  ) $s = shape()) {
    $this->approval_state = $s['approval_state'] ?? '';
    $this->pull_request_id = $s['pull_request_id'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class UpdatePullRequestDescriptionInput {
  public ?Description $description;
  public ?PullRequestId $pull_request_id;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'pull_request_id' => ?PullRequestId,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->pull_request_id = $s['pull_request_id'] ?? '';
  }
}

class UpdatePullRequestDescriptionOutput {
  public ?PullRequest $pull_request;

  public function __construct(shape(
    ?'pull_request' => ?PullRequest,
  ) $s = shape()) {
    $this->pull_request = $s['pull_request'] ?? null;
  }
}

class UpdatePullRequestStatusInput {
  public ?PullRequestId $pull_request_id;
  public ?PullRequestStatusEnum $pull_request_status;

  public function __construct(shape(
    ?'pull_request_id' => ?PullRequestId,
    ?'pull_request_status' => ?PullRequestStatusEnum,
  ) $s = shape()) {
    $this->pull_request_id = $s['pull_request_id'] ?? '';
    $this->pull_request_status = $s['pull_request_status'] ?? '';
  }
}

class UpdatePullRequestStatusOutput {
  public ?PullRequest $pull_request;

  public function __construct(shape(
    ?'pull_request' => ?PullRequest,
  ) $s = shape()) {
    $this->pull_request = $s['pull_request'] ?? null;
  }
}

class UpdatePullRequestTitleInput {
  public ?PullRequestId $pull_request_id;
  public ?Title $title;

  public function __construct(shape(
    ?'pull_request_id' => ?PullRequestId,
    ?'title' => ?Title,
  ) $s = shape()) {
    $this->pull_request_id = $s['pull_request_id'] ?? '';
    $this->title = $s['title'] ?? '';
  }
}

class UpdatePullRequestTitleOutput {
  public ?PullRequest $pull_request;

  public function __construct(shape(
    ?'pull_request' => ?PullRequest,
  ) $s = shape()) {
    $this->pull_request = $s['pull_request'] ?? null;
  }
}

class UpdateRepositoryDescriptionInput {
  public ?RepositoryDescription $repository_description;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'repository_description' => ?RepositoryDescription,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->repository_description = $s['repository_description'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class UpdateRepositoryNameInput {
  public ?RepositoryName $new_name;
  public ?RepositoryName $old_name;

  public function __construct(shape(
    ?'new_name' => ?RepositoryName,
    ?'old_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->new_name = $s['new_name'] ?? '';
    $this->old_name = $s['old_name'] ?? '';
  }
}

class UserInfo {
  public ?Date $date;
  public ?Email $email;
  public ?Name $name;

  public function __construct(shape(
    ?'date' => ?Date,
    ?'email' => ?Email,
    ?'name' => ?Name,
  ) $s = shape()) {
    $this->date = $s['date'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type blob = string;


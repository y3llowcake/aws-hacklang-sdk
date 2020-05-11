<?hh // strict
namespace slack\aws\codeguru-reviewer;

interface CodeGuru Reviewer {
  public function AssociateRepository(AssociateRepositoryRequest): Awaitable<Errors\Result<AssociateRepositoryResponse>>;
  public function DescribeCodeReview(DescribeCodeReviewRequest): Awaitable<Errors\Result<DescribeCodeReviewResponse>>;
  public function DescribeRecommendationFeedback(DescribeRecommendationFeedbackRequest): Awaitable<Errors\Result<DescribeRecommendationFeedbackResponse>>;
  public function DescribeRepositoryAssociation(DescribeRepositoryAssociationRequest): Awaitable<Errors\Result<DescribeRepositoryAssociationResponse>>;
  public function DisassociateRepository(DisassociateRepositoryRequest): Awaitable<Errors\Result<DisassociateRepositoryResponse>>;
  public function ListCodeReviews(ListCodeReviewsRequest): Awaitable<Errors\Result<ListCodeReviewsResponse>>;
  public function ListRecommendationFeedback(ListRecommendationFeedbackRequest): Awaitable<Errors\Result<ListRecommendationFeedbackResponse>>;
  public function ListRecommendations(ListRecommendationsRequest): Awaitable<Errors\Result<ListRecommendationsResponse>>;
  public function ListRepositoryAssociations(ListRepositoryAssociationsRequest): Awaitable<Errors\Result<ListRepositoryAssociationsResponse>>;
  public function PutRecommendationFeedback(PutRecommendationFeedbackRequest): Awaitable<Errors\Result<PutRecommendationFeedbackResponse>>;
}

class AccessDeniedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Arn = string;

class AssociateRepositoryRequest {
  public ClientRequestToken $client_request_token;
  public Repository $repository;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'repository' => Repository,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->repository = $repository ?? null;
  }
}

class AssociateRepositoryResponse {
  public RepositoryAssociation $repository_association;

  public function __construct(shape(
  ?'repository_association' => RepositoryAssociation,
  ) $s = shape()) {
    $this->repository_association = $repository_association ?? null;
  }
}

type AssociationId = string;

type ClientRequestToken = string;

class CodeCommitRepository {
  public Name $name;

  public function __construct(shape(
  ?'name' => Name,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class CodeReview {
  public Arn $code_review_arn;
  public TimeStamp $created_time_stamp;
  public TimeStamp $last_updated_time_stamp;
  public Metrics $metrics;
  public Name $name;
  public Owner $owner;
  public ProviderType $provider_type;
  public PullRequestId $pull_request_id;
  public Name $repository_name;
  public SourceCodeType $source_code_type;
  public JobState $state;
  public StateReason $state_reason;
  public Type $type;

  public function __construct(shape(
  ?'code_review_arn' => Arn,
  ?'created_time_stamp' => TimeStamp,
  ?'last_updated_time_stamp' => TimeStamp,
  ?'metrics' => Metrics,
  ?'name' => Name,
  ?'owner' => Owner,
  ?'provider_type' => ProviderType,
  ?'pull_request_id' => PullRequestId,
  ?'repository_name' => Name,
  ?'source_code_type' => SourceCodeType,
  ?'state' => JobState,
  ?'state_reason' => StateReason,
  ?'type' => Type,
  ) $s = shape()) {
    $this->code_review_arn = $code_review_arn ?? "";
    $this->created_time_stamp = $created_time_stamp ?? 0;
    $this->last_updated_time_stamp = $last_updated_time_stamp ?? 0;
    $this->metrics = $metrics ?? null;
    $this->name = $name ?? "";
    $this->owner = $owner ?? "";
    $this->provider_type = $provider_type ?? "";
    $this->pull_request_id = $pull_request_id ?? "";
    $this->repository_name = $repository_name ?? "";
    $this->source_code_type = $source_code_type ?? null;
    $this->state = $state ?? "";
    $this->state_reason = $state_reason ?? "";
    $this->type = $type ?? "";
  }
}

type CodeReviewSummaries = vec<CodeReviewSummary>;

class CodeReviewSummary {
  public Arn $code_review_arn;
  public TimeStamp $created_time_stamp;
  public TimeStamp $last_updated_time_stamp;
  public MetricsSummary $metrics_summary;
  public Name $name;
  public Owner $owner;
  public ProviderType $provider_type;
  public PullRequestId $pull_request_id;
  public Name $repository_name;
  public JobState $state;
  public Type $type;

  public function __construct(shape(
  ?'code_review_arn' => Arn,
  ?'created_time_stamp' => TimeStamp,
  ?'last_updated_time_stamp' => TimeStamp,
  ?'metrics_summary' => MetricsSummary,
  ?'name' => Name,
  ?'owner' => Owner,
  ?'provider_type' => ProviderType,
  ?'pull_request_id' => PullRequestId,
  ?'repository_name' => Name,
  ?'state' => JobState,
  ?'type' => Type,
  ) $s = shape()) {
    $this->code_review_arn = $code_review_arn ?? "";
    $this->created_time_stamp = $created_time_stamp ?? 0;
    $this->last_updated_time_stamp = $last_updated_time_stamp ?? 0;
    $this->metrics_summary = $metrics_summary ?? null;
    $this->name = $name ?? "";
    $this->owner = $owner ?? "";
    $this->provider_type = $provider_type ?? "";
    $this->pull_request_id = $pull_request_id ?? "";
    $this->repository_name = $repository_name ?? "";
    $this->state = $state ?? "";
    $this->type = $type ?? "";
  }
}

class CommitDiffSourceCodeType {
  public CommitId $destination_commit;
  public CommitId $source_commit;

  public function __construct(shape(
  ?'destination_commit' => CommitId,
  ?'source_commit' => CommitId,
  ) $s = shape()) {
    $this->destination_commit = $destination_commit ?? "";
    $this->source_commit = $source_commit ?? "";
  }
}

type CommitId = string;

class ConflictException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DescribeCodeReviewRequest {
  public Arn $code_review_arn;

  public function __construct(shape(
  ?'code_review_arn' => Arn,
  ) $s = shape()) {
    $this->code_review_arn = $code_review_arn ?? "";
  }
}

class DescribeCodeReviewResponse {
  public CodeReview $code_review;

  public function __construct(shape(
  ?'code_review' => CodeReview,
  ) $s = shape()) {
    $this->code_review = $code_review ?? null;
  }
}

class DescribeRecommendationFeedbackRequest {
  public Arn $code_review_arn;
  public RecommendationId $recommendation_id;
  public UserId $user_id;

  public function __construct(shape(
  ?'code_review_arn' => Arn,
  ?'recommendation_id' => RecommendationId,
  ?'user_id' => UserId,
  ) $s = shape()) {
    $this->code_review_arn = $code_review_arn ?? "";
    $this->recommendation_id = $recommendation_id ?? "";
    $this->user_id = $user_id ?? "";
  }
}

class DescribeRecommendationFeedbackResponse {
  public RecommendationFeedback $recommendation_feedback;

  public function __construct(shape(
  ?'recommendation_feedback' => RecommendationFeedback,
  ) $s = shape()) {
    $this->recommendation_feedback = $recommendation_feedback ?? null;
  }
}

class DescribeRepositoryAssociationRequest {
  public Arn $association_arn;

  public function __construct(shape(
  ?'association_arn' => Arn,
  ) $s = shape()) {
    $this->association_arn = $association_arn ?? "";
  }
}

class DescribeRepositoryAssociationResponse {
  public RepositoryAssociation $repository_association;

  public function __construct(shape(
  ?'repository_association' => RepositoryAssociation,
  ) $s = shape()) {
    $this->repository_association = $repository_association ?? null;
  }
}

class DisassociateRepositoryRequest {
  public Arn $association_arn;

  public function __construct(shape(
  ?'association_arn' => Arn,
  ) $s = shape()) {
    $this->association_arn = $association_arn ?? "";
  }
}

class DisassociateRepositoryResponse {
  public RepositoryAssociation $repository_association;

  public function __construct(shape(
  ?'repository_association' => RepositoryAssociation,
  ) $s = shape()) {
    $this->repository_association = $repository_association ?? null;
  }
}

type ErrorMessage = string;

type FilePath = string;

type FindingsCount = int;

class InternalServerException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type JobState = string;

type JobStates = vec<JobState>;

type LineNumber = int;

type ListCodeReviewsMaxResults = int;

class ListCodeReviewsRequest {
  public ListCodeReviewsMaxResults $max_results;
  public NextToken $next_token;
  public ProviderTypes $provider_types;
  public RepositoryNames $repository_names;
  public JobStates $states;
  public Type $type;

  public function __construct(shape(
  ?'max_results' => ListCodeReviewsMaxResults,
  ?'next_token' => NextToken,
  ?'provider_types' => ProviderTypes,
  ?'repository_names' => RepositoryNames,
  ?'states' => JobStates,
  ?'type' => Type,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->provider_types = $provider_types ?? [];
    $this->repository_names = $repository_names ?? [];
    $this->states = $states ?? [];
    $this->type = $type ?? "";
  }
}

class ListCodeReviewsResponse {
  public CodeReviewSummaries $code_review_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'code_review_summaries' => CodeReviewSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->code_review_summaries = $code_review_summaries ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListRecommendationFeedbackRequest {
  public Arn $code_review_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
  public RecommendationIds $recommendation_ids;
  public UserIds $user_ids;

  public function __construct(shape(
  ?'code_review_arn' => Arn,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'recommendation_ids' => RecommendationIds,
  ?'user_ids' => UserIds,
  ) $s = shape()) {
    $this->code_review_arn = $code_review_arn ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->recommendation_ids = $recommendation_ids ?? [];
    $this->user_ids = $user_ids ?? [];
  }
}

class ListRecommendationFeedbackResponse {
  public NextToken $next_token;
  public RecommendationFeedbackSummaries $recommendation_feedback_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'recommendation_feedback_summaries' => RecommendationFeedbackSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->recommendation_feedback_summaries = $recommendation_feedback_summaries ?? [];
  }
}

class ListRecommendationsRequest {
  public Arn $code_review_arn;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'code_review_arn' => Arn,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->code_review_arn = $code_review_arn ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListRecommendationsResponse {
  public NextToken $next_token;
  public RecommendationSummaries $recommendation_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'recommendation_summaries' => RecommendationSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->recommendation_summaries = $recommendation_summaries ?? [];
  }
}

class ListRepositoryAssociationsRequest {
  public MaxResults $max_results;
  public Names $names;
  public NextToken $next_token;
  public Owners $owners;
  public ProviderTypes $provider_types;
  public RepositoryAssociationStates $states;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'names' => Names,
  ?'next_token' => NextToken,
  ?'owners' => Owners,
  ?'provider_types' => ProviderTypes,
  ?'states' => RepositoryAssociationStates,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->names = $names ?? [];
    $this->next_token = $next_token ?? "";
    $this->owners = $owners ?? [];
    $this->provider_types = $provider_types ?? [];
    $this->states = $states ?? [];
  }
}

class ListRepositoryAssociationsResponse {
  public NextToken $next_token;
  public RepositoryAssociationSummaries $repository_association_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'repository_association_summaries' => RepositoryAssociationSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->repository_association_summaries = $repository_association_summaries ?? [];
  }
}

type MaxResults = int;

type MeteredLinesOfCodeCount = int;

class Metrics {
  public FindingsCount $findings_count;
  public MeteredLinesOfCodeCount $metered_lines_of_code_count;

  public function __construct(shape(
  ?'findings_count' => FindingsCount,
  ?'metered_lines_of_code_count' => MeteredLinesOfCodeCount,
  ) $s = shape()) {
    $this->findings_count = $findings_count ?? 0;
    $this->metered_lines_of_code_count = $metered_lines_of_code_count ?? 0;
  }
}

class MetricsSummary {
  public FindingsCount $findings_count;
  public MeteredLinesOfCodeCount $metered_lines_of_code_count;

  public function __construct(shape(
  ?'findings_count' => FindingsCount,
  ?'metered_lines_of_code_count' => MeteredLinesOfCodeCount,
  ) $s = shape()) {
    $this->findings_count = $findings_count ?? 0;
    $this->metered_lines_of_code_count = $metered_lines_of_code_count ?? 0;
  }
}

type Name = string;

type Names = vec<Name>;

type NextToken = string;

class NotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Owner = string;

type Owners = vec<Owner>;

type ProviderType = string;

type ProviderTypes = vec<ProviderType>;

type PullRequestId = string;

class PutRecommendationFeedbackRequest {
  public Arn $code_review_arn;
  public Reactions $reactions;
  public RecommendationId $recommendation_id;

  public function __construct(shape(
  ?'code_review_arn' => Arn,
  ?'reactions' => Reactions,
  ?'recommendation_id' => RecommendationId,
  ) $s = shape()) {
    $this->code_review_arn = $code_review_arn ?? "";
    $this->reactions = $reactions ?? [];
    $this->recommendation_id = $recommendation_id ?? "";
  }
}

class PutRecommendationFeedbackResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Reaction = string;

type Reactions = vec<Reaction>;

class RecommendationFeedback {
  public Arn $code_review_arn;
  public TimeStamp $created_time_stamp;
  public TimeStamp $last_updated_time_stamp;
  public Reactions $reactions;
  public RecommendationId $recommendation_id;
  public UserId $user_id;

  public function __construct(shape(
  ?'code_review_arn' => Arn,
  ?'created_time_stamp' => TimeStamp,
  ?'last_updated_time_stamp' => TimeStamp,
  ?'reactions' => Reactions,
  ?'recommendation_id' => RecommendationId,
  ?'user_id' => UserId,
  ) $s = shape()) {
    $this->code_review_arn = $code_review_arn ?? "";
    $this->created_time_stamp = $created_time_stamp ?? 0;
    $this->last_updated_time_stamp = $last_updated_time_stamp ?? 0;
    $this->reactions = $reactions ?? [];
    $this->recommendation_id = $recommendation_id ?? "";
    $this->user_id = $user_id ?? "";
  }
}

type RecommendationFeedbackSummaries = vec<RecommendationFeedbackSummary>;

class RecommendationFeedbackSummary {
  public Reactions $reactions;
  public RecommendationId $recommendation_id;
  public UserId $user_id;

  public function __construct(shape(
  ?'reactions' => Reactions,
  ?'recommendation_id' => RecommendationId,
  ?'user_id' => UserId,
  ) $s = shape()) {
    $this->reactions = $reactions ?? [];
    $this->recommendation_id = $recommendation_id ?? "";
    $this->user_id = $user_id ?? "";
  }
}

type RecommendationId = string;

type RecommendationIds = vec<RecommendationId>;

type RecommendationSummaries = vec<RecommendationSummary>;

class RecommendationSummary {
  public Text $description;
  public LineNumber $end_line;
  public FilePath $file_path;
  public RecommendationId $recommendation_id;
  public LineNumber $start_line;

  public function __construct(shape(
  ?'description' => Text,
  ?'end_line' => LineNumber,
  ?'file_path' => FilePath,
  ?'recommendation_id' => RecommendationId,
  ?'start_line' => LineNumber,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->end_line = $end_line ?? 0;
    $this->file_path = $file_path ?? "";
    $this->recommendation_id = $recommendation_id ?? "";
    $this->start_line = $start_line ?? 0;
  }
}

class Repository {
  public CodeCommitRepository $code_commit;

  public function __construct(shape(
  ?'code_commit' => CodeCommitRepository,
  ) $s = shape()) {
    $this->code_commit = $code_commit ?? null;
  }
}

class RepositoryAssociation {
  public Arn $association_arn;
  public AssociationId $association_id;
  public TimeStamp $created_time_stamp;
  public TimeStamp $last_updated_time_stamp;
  public Name $name;
  public Owner $owner;
  public ProviderType $provider_type;
  public RepositoryAssociationState $state;
  public StateReason $state_reason;

  public function __construct(shape(
  ?'association_arn' => Arn,
  ?'association_id' => AssociationId,
  ?'created_time_stamp' => TimeStamp,
  ?'last_updated_time_stamp' => TimeStamp,
  ?'name' => Name,
  ?'owner' => Owner,
  ?'provider_type' => ProviderType,
  ?'state' => RepositoryAssociationState,
  ?'state_reason' => StateReason,
  ) $s = shape()) {
    $this->association_arn = $association_arn ?? "";
    $this->association_id = $association_id ?? "";
    $this->created_time_stamp = $created_time_stamp ?? 0;
    $this->last_updated_time_stamp = $last_updated_time_stamp ?? 0;
    $this->name = $name ?? "";
    $this->owner = $owner ?? "";
    $this->provider_type = $provider_type ?? "";
    $this->state = $state ?? "";
    $this->state_reason = $state_reason ?? "";
  }
}

type RepositoryAssociationState = string;

type RepositoryAssociationStates = vec<RepositoryAssociationState>;

type RepositoryAssociationSummaries = vec<RepositoryAssociationSummary>;

class RepositoryAssociationSummary {
  public Arn $association_arn;
  public AssociationId $association_id;
  public TimeStamp $last_updated_time_stamp;
  public Name $name;
  public Owner $owner;
  public ProviderType $provider_type;
  public RepositoryAssociationState $state;

  public function __construct(shape(
  ?'association_arn' => Arn,
  ?'association_id' => AssociationId,
  ?'last_updated_time_stamp' => TimeStamp,
  ?'name' => Name,
  ?'owner' => Owner,
  ?'provider_type' => ProviderType,
  ?'state' => RepositoryAssociationState,
  ) $s = shape()) {
    $this->association_arn = $association_arn ?? "";
    $this->association_id = $association_id ?? "";
    $this->last_updated_time_stamp = $last_updated_time_stamp ?? 0;
    $this->name = $name ?? "";
    $this->owner = $owner ?? "";
    $this->provider_type = $provider_type ?? "";
    $this->state = $state ?? "";
  }
}

type RepositoryNames = vec<Name>;

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class SourceCodeType {
  public CommitDiffSourceCodeType $commit_diff;

  public function __construct(shape(
  ?'commit_diff' => CommitDiffSourceCodeType,
  ) $s = shape()) {
    $this->commit_diff = $commit_diff ?? null;
  }
}

type StateReason = string;

type Text = string;

class ThrottlingException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type TimeStamp = int;

type Type = string;

type UserId = string;

type UserIds = vec<UserId>;

class ValidationException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}


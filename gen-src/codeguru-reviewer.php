<?hh // strict
namespace slack\aws\codeguru-reviewer;

interface CodeGuru Reviewer {
  public function DisassociateRepository(DisassociateRepositoryRequest) Awaitable<Errors\Result<DisassociateRepositoryResponse>>;
  public function ListCodeReviews(ListCodeReviewsRequest) Awaitable<Errors\Result<ListCodeReviewsResponse>>;
  public function ListRecommendationFeedback(ListRecommendationFeedbackRequest) Awaitable<Errors\Result<ListRecommendationFeedbackResponse>>;
  public function PutRecommendationFeedback(PutRecommendationFeedbackRequest) Awaitable<Errors\Result<PutRecommendationFeedbackResponse>>;
  public function AssociateRepository(AssociateRepositoryRequest) Awaitable<Errors\Result<AssociateRepositoryResponse>>;
  public function DescribeCodeReview(DescribeCodeReviewRequest) Awaitable<Errors\Result<DescribeCodeReviewResponse>>;
  public function DescribeRecommendationFeedback(DescribeRecommendationFeedbackRequest) Awaitable<Errors\Result<DescribeRecommendationFeedbackResponse>>;
  public function DescribeRepositoryAssociation(DescribeRepositoryAssociationRequest) Awaitable<Errors\Result<DescribeRepositoryAssociationResponse>>;
  public function ListRecommendations(ListRecommendationsRequest) Awaitable<Errors\Result<ListRecommendationsResponse>>;
  public function ListRepositoryAssociations(ListRepositoryAssociationsRequest) Awaitable<Errors\Result<ListRepositoryAssociationsResponse>>;
}

class LineNumber {
}

class ListRecommendationFeedbackRequest {
  public Arn $code_review_arn;
  public UserIds $user_ids;
  public RecommendationIds $recommendation_ids;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class ProviderType {
}

class ProviderTypes {
}

class RecommendationSummary {
  public FilePath $file_path;
  public RecommendationId $recommendation_id;
  public LineNumber $start_line;
  public LineNumber $end_line;
  public Text $description;
}

class ConflictException {
  public ErrorMessage $message;
}

class FilePath {
}

class ListRecommendationsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
  public Arn $code_review_arn;
}

class PutRecommendationFeedbackRequest {
  public Arn $code_review_arn;
  public RecommendationId $recommendation_id;
  public Reactions $reactions;
}

class UserId {
}

class CommitId {
}

class RecommendationFeedbackSummaries {
}

class Name {
}

class ThrottlingException {
  public ErrorMessage $message;
}

class DisassociateRepositoryRequest {
  public Arn $association_arn;
}

class DescribeRecommendationFeedbackRequest {
  public Arn $code_review_arn;
  public RecommendationId $recommendation_id;
  public UserId $user_id;
}

class InternalServerException {
  public ErrorMessage $message;
}

class Names {
}

class Repository {
  public CodeCommitRepository $code_commit;
}

class RepositoryAssociation {
  public AssociationId $association_id;
  public Name $name;
  public Owner $owner;
  public StateReason $state_reason;
  public Arn $association_arn;
  public ProviderType $provider_type;
  public RepositoryAssociationState $state;
  public TimeStamp $last_updated_time_stamp;
  public TimeStamp $created_time_stamp;
}

class RepositoryAssociationState {
}

class RepositoryNames {
}

class DescribeCodeReviewResponse {
  public CodeReview $code_review;
}

class RecommendationSummaries {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class FindingsCount {
}

class Reactions {
}

class RecommendationIds {
}

class RepositoryAssociationStates {
}

class ListCodeReviewsResponse {
  public CodeReviewSummaries $code_review_summaries;
  public NextToken $next_token;
}

class ListRecommendationsResponse {
  public RecommendationSummaries $recommendation_summaries;
  public NextToken $next_token;
}

class MeteredLinesOfCodeCount {
}

class NextToken {
}

class RecommendationFeedbackSummary {
  public RecommendationId $recommendation_id;
  public Reactions $reactions;
  public UserId $user_id;
}

class RecommendationId {
}

class Text {
}

class ValidationException {
  public ErrorMessage $message;
}

class DescribeCodeReviewRequest {
  public Arn $code_review_arn;
}

class DescribeRepositoryAssociationRequest {
  public Arn $association_arn;
}

class Reaction {
}

class AssociateRepositoryResponse {
  public RepositoryAssociation $repository_association;
}

class ListRepositoryAssociationsResponse {
  public RepositoryAssociationSummaries $repository_association_summaries;
  public NextToken $next_token;
}

class Metrics {
  public MeteredLinesOfCodeCount $metered_lines_of_code_count;
  public FindingsCount $findings_count;
}

class NotFoundException {
  public ErrorMessage $message;
}

class PutRecommendationFeedbackResponse {
}

class Type {
}

class ListCodeReviewsMaxResults {
}

class AssociationId {
}

class CodeCommitRepository {
  public Name $name;
}

class DisassociateRepositoryResponse {
  public RepositoryAssociation $repository_association;
}

class MaxResults {
}

class SourceCodeType {
  public CommitDiffSourceCodeType $commit_diff;
}

class Arn {
}

class CommitDiffSourceCodeType {
  public CommitId $destination_commit;
  public CommitId $source_commit;
}

class DescribeRecommendationFeedbackResponse {
  public RecommendationFeedback $recommendation_feedback;
}

class ErrorMessage {
}

class RepositoryAssociationSummary {
  public Owner $owner;
  public ProviderType $provider_type;
  public RepositoryAssociationState $state;
  public Arn $association_arn;
  public TimeStamp $last_updated_time_stamp;
  public AssociationId $association_id;
  public Name $name;
}

class UserIds {
}

class CodeReviewSummaries {
}

class ListRecommendationFeedbackResponse {
  public RecommendationFeedbackSummaries $recommendation_feedback_summaries;
  public NextToken $next_token;
}

class RecommendationFeedback {
  public RecommendationId $recommendation_id;
  public Reactions $reactions;
  public UserId $user_id;
  public TimeStamp $created_time_stamp;
  public TimeStamp $last_updated_time_stamp;
  public Arn $code_review_arn;
}

class DescribeRepositoryAssociationResponse {
  public RepositoryAssociation $repository_association;
}

class JobStates {
}

class ListCodeReviewsRequest {
  public JobStates $states;
  public RepositoryNames $repository_names;
  public Type $type;
  public ListCodeReviewsMaxResults $max_results;
  public NextToken $next_token;
  public ProviderTypes $provider_types;
}

class ListRepositoryAssociationsRequest {
  public Names $names;
  public Owners $owners;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ProviderTypes $provider_types;
  public RepositoryAssociationStates $states;
}

class RepositoryAssociationSummaries {
}

class StateReason {
}

class AssociateRepositoryRequest {
  public Repository $repository;
  public ClientRequestToken $client_request_token;
}

class CodeReviewSummary {
  public TimeStamp $last_updated_time_stamp;
  public Type $type;
  public PullRequestId $pull_request_id;
  public MetricsSummary $metrics_summary;
  public Name $repository_name;
  public Owner $owner;
  public JobState $state;
  public TimeStamp $created_time_stamp;
  public Name $name;
  public Arn $code_review_arn;
  public ProviderType $provider_type;
}

class AccessDeniedException {
  public ErrorMessage $message;
}

class CodeReview {
  public TimeStamp $created_time_stamp;
  public SourceCodeType $source_code_type;
  public Metrics $metrics;
  public Name $name;
  public Name $repository_name;
  public ProviderType $provider_type;
  public JobState $state;
  public Type $type;
  public PullRequestId $pull_request_id;
  public Arn $code_review_arn;
  public Owner $owner;
  public StateReason $state_reason;
  public TimeStamp $last_updated_time_stamp;
}

class JobState {
}

class MetricsSummary {
  public MeteredLinesOfCodeCount $metered_lines_of_code_count;
  public FindingsCount $findings_count;
}

class Owner {
}

class Owners {
}

class PullRequestId {
}

class TimeStamp {
}

class ClientRequestToken {
}


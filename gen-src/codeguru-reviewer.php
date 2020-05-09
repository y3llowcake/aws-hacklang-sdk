<?hh // strict
namespace slack\aws\codeguru-reviewer;

interface CodeGuru Reviewer {
  public function AssociateRepository(AssociateRepositoryRequest) Awaitable<Errors\Result<AssociateRepositoryResponse>>;
  public function DescribeCodeReview(DescribeCodeReviewRequest) Awaitable<Errors\Result<DescribeCodeReviewResponse>>;
  public function DescribeRecommendationFeedback(DescribeRecommendationFeedbackRequest) Awaitable<Errors\Result<DescribeRecommendationFeedbackResponse>>;
  public function DescribeRepositoryAssociation(DescribeRepositoryAssociationRequest) Awaitable<Errors\Result<DescribeRepositoryAssociationResponse>>;
  public function DisassociateRepository(DisassociateRepositoryRequest) Awaitable<Errors\Result<DisassociateRepositoryResponse>>;
  public function ListCodeReviews(ListCodeReviewsRequest) Awaitable<Errors\Result<ListCodeReviewsResponse>>;
  public function ListRecommendationFeedback(ListRecommendationFeedbackRequest) Awaitable<Errors\Result<ListRecommendationFeedbackResponse>>;
  public function ListRecommendations(ListRecommendationsRequest) Awaitable<Errors\Result<ListRecommendationsResponse>>;
  public function ListRepositoryAssociations(ListRepositoryAssociationsRequest) Awaitable<Errors\Result<ListRepositoryAssociationsResponse>>;
  public function PutRecommendationFeedback(PutRecommendationFeedbackRequest) Awaitable<Errors\Result<PutRecommendationFeedbackResponse>>;
}

class AccessDeniedException {
  public ErrorMessage $message;
}

class Arn {
}

class AssociateRepositoryRequest {
  public ClientRequestToken $client_request_token;
  public Repository $repository;
}

class AssociateRepositoryResponse {
  public RepositoryAssociation $repository_association;
}

class AssociationId {
}

class ClientRequestToken {
}

class CodeCommitRepository {
  public Name $name;
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
}

class CodeReviewSummaries {
}

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
}

class CommitDiffSourceCodeType {
  public CommitId $destination_commit;
  public CommitId $source_commit;
}

class CommitId {
}

class ConflictException {
  public ErrorMessage $message;
}

class DescribeCodeReviewRequest {
  public Arn $code_review_arn;
}

class DescribeCodeReviewResponse {
  public CodeReview $code_review;
}

class DescribeRecommendationFeedbackRequest {
  public Arn $code_review_arn;
  public RecommendationId $recommendation_id;
  public UserId $user_id;
}

class DescribeRecommendationFeedbackResponse {
  public RecommendationFeedback $recommendation_feedback;
}

class DescribeRepositoryAssociationRequest {
  public Arn $association_arn;
}

class DescribeRepositoryAssociationResponse {
  public RepositoryAssociation $repository_association;
}

class DisassociateRepositoryRequest {
  public Arn $association_arn;
}

class DisassociateRepositoryResponse {
  public RepositoryAssociation $repository_association;
}

class ErrorMessage {
}

class FilePath {
}

class FindingsCount {
}

class InternalServerException {
  public ErrorMessage $message;
}

class JobState {
}

class JobStates {
}

class LineNumber {
}

class ListCodeReviewsMaxResults {
}

class ListCodeReviewsRequest {
  public ListCodeReviewsMaxResults $max_results;
  public NextToken $next_token;
  public ProviderTypes $provider_types;
  public RepositoryNames $repository_names;
  public JobStates $states;
  public Type $type;
}

class ListCodeReviewsResponse {
  public CodeReviewSummaries $code_review_summaries;
  public NextToken $next_token;
}

class ListRecommendationFeedbackRequest {
  public Arn $code_review_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
  public RecommendationIds $recommendation_ids;
  public UserIds $user_ids;
}

class ListRecommendationFeedbackResponse {
  public NextToken $next_token;
  public RecommendationFeedbackSummaries $recommendation_feedback_summaries;
}

class ListRecommendationsRequest {
  public Arn $code_review_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListRecommendationsResponse {
  public NextToken $next_token;
  public RecommendationSummaries $recommendation_summaries;
}

class ListRepositoryAssociationsRequest {
  public MaxResults $max_results;
  public Names $names;
  public NextToken $next_token;
  public Owners $owners;
  public ProviderTypes $provider_types;
  public RepositoryAssociationStates $states;
}

class ListRepositoryAssociationsResponse {
  public NextToken $next_token;
  public RepositoryAssociationSummaries $repository_association_summaries;
}

class MaxResults {
}

class MeteredLinesOfCodeCount {
}

class Metrics {
  public FindingsCount $findings_count;
  public MeteredLinesOfCodeCount $metered_lines_of_code_count;
}

class MetricsSummary {
  public FindingsCount $findings_count;
  public MeteredLinesOfCodeCount $metered_lines_of_code_count;
}

class Name {
}

class Names {
}

class NextToken {
}

class NotFoundException {
  public ErrorMessage $message;
}

class Owner {
}

class Owners {
}

class ProviderType {
}

class ProviderTypes {
}

class PullRequestId {
}

class PutRecommendationFeedbackRequest {
  public Arn $code_review_arn;
  public Reactions $reactions;
  public RecommendationId $recommendation_id;
}

class PutRecommendationFeedbackResponse {
}

class Reaction {
}

class Reactions {
}

class RecommendationFeedback {
  public Arn $code_review_arn;
  public TimeStamp $created_time_stamp;
  public TimeStamp $last_updated_time_stamp;
  public Reactions $reactions;
  public RecommendationId $recommendation_id;
  public UserId $user_id;
}

class RecommendationFeedbackSummaries {
}

class RecommendationFeedbackSummary {
  public Reactions $reactions;
  public RecommendationId $recommendation_id;
  public UserId $user_id;
}

class RecommendationId {
}

class RecommendationIds {
}

class RecommendationSummaries {
}

class RecommendationSummary {
  public Text $description;
  public LineNumber $end_line;
  public FilePath $file_path;
  public RecommendationId $recommendation_id;
  public LineNumber $start_line;
}

class Repository {
  public CodeCommitRepository $code_commit;
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
}

class RepositoryAssociationState {
}

class RepositoryAssociationStates {
}

class RepositoryAssociationSummaries {
}

class RepositoryAssociationSummary {
  public Arn $association_arn;
  public AssociationId $association_id;
  public TimeStamp $last_updated_time_stamp;
  public Name $name;
  public Owner $owner;
  public ProviderType $provider_type;
  public RepositoryAssociationState $state;
}

class RepositoryNames {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class SourceCodeType {
  public CommitDiffSourceCodeType $commit_diff;
}

class StateReason {
}

class Text {
}

class ThrottlingException {
  public ErrorMessage $message;
}

class TimeStamp {
}

class Type {
}

class UserId {
}

class UserIds {
}

class ValidationException {
  public ErrorMessage $message;
}


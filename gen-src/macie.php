<?hh // strict
namespace slack\aws\macie;

interface Macie {
  public function AssociateMemberAccount(AssociateMemberAccountRequest): Awaitable<Errors\Error>;
  public function AssociateS3Resources(AssociateS3ResourcesRequest): Awaitable<Errors\Result<AssociateS3ResourcesResult>>;
  public function DisassociateMemberAccount(DisassociateMemberAccountRequest): Awaitable<Errors\Error>;
  public function DisassociateS3Resources(DisassociateS3ResourcesRequest): Awaitable<Errors\Result<DisassociateS3ResourcesResult>>;
  public function ListMemberAccounts(ListMemberAccountsRequest): Awaitable<Errors\Result<ListMemberAccountsResult>>;
  public function ListS3Resources(ListS3ResourcesRequest): Awaitable<Errors\Result<ListS3ResourcesResult>>;
  public function UpdateS3Resources(UpdateS3ResourcesRequest): Awaitable<Errors\Result<UpdateS3ResourcesResult>>;
}

class AWSAccountId {
}

class AccessDeniedException {
  public ExceptionMessage $message;
  public ResourceType $resource_type;
}

class AssociateMemberAccountRequest {
  public AWSAccountId $member_account_id;
}

class AssociateS3ResourcesRequest {
  public AWSAccountId $member_account_id;
  public S3ResourcesClassification $s_3_resources;
}

class AssociateS3ResourcesResult {
  public FailedS3Resources $failed_s_3_resources;
}

class BucketName {
}

class ClassificationType {
  public S3ContinuousClassificationType $continuous;
  public S3OneTimeClassificationType $one_time;
}

class ClassificationTypeUpdate {
  public S3ContinuousClassificationType $continuous;
  public S3OneTimeClassificationType $one_time;
}

class DisassociateMemberAccountRequest {
  public AWSAccountId $member_account_id;
}

class DisassociateS3ResourcesRequest {
  public S3Resources $associated_s_3_resources;
  public AWSAccountId $member_account_id;
}

class DisassociateS3ResourcesResult {
  public FailedS3Resources $failed_s_3_resources;
}

class ErrorCode {
}

class ExceptionMessage {
}

class FailedS3Resource {
  public ErrorCode $error_code;
  public ExceptionMessage $error_message;
  public S3Resource $failed_item;
}

class FailedS3Resources {
}

class FieldName {
}

class InternalException {
  public ErrorCode $error_code;
  public ExceptionMessage $message;
}

class InvalidInputException {
  public ErrorCode $error_code;
  public FieldName $field_name;
  public ExceptionMessage $message;
}

class LimitExceededException {
  public ErrorCode $error_code;
  public ExceptionMessage $message;
  public ResourceType $resource_type;
}

class ListMemberAccountsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListMemberAccountsResult {
  public MemberAccounts $member_accounts;
  public NextToken $next_token;
}

class ListS3ResourcesRequest {
  public MaxResults $max_results;
  public AWSAccountId $member_account_id;
  public NextToken $next_token;
}

class ListS3ResourcesResult {
  public NextToken $next_token;
  public S3ResourcesClassification $s_3_resources;
}

class MaxResults {
}

class MemberAccount {
  public AWSAccountId $account_id;
}

class MemberAccounts {
}

class NextToken {
}

class Prefix {
}

class ResourceType {
}

class S3ContinuousClassificationType {
}

class S3OneTimeClassificationType {
}

class S3Resource {
  public BucketName $bucket_name;
  public Prefix $prefix;
}

class S3ResourceClassification {
  public BucketName $bucket_name;
  public ClassificationType $classification_type;
  public Prefix $prefix;
}

class S3ResourceClassificationUpdate {
  public BucketName $bucket_name;
  public ClassificationTypeUpdate $classification_type_update;
  public Prefix $prefix;
}

class S3Resources {
}

class S3ResourcesClassification {
}

class S3ResourcesClassificationUpdate {
}

class UpdateS3ResourcesRequest {
  public AWSAccountId $member_account_id;
  public S3ResourcesClassificationUpdate $s_3_resources_update;
}

class UpdateS3ResourcesResult {
  public FailedS3Resources $failed_s_3_resources;
}


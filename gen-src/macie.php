<?hh // strict
namespace slack\aws\macie;

interface Macie {
  public function AssociateMemberAccount(AssociateMemberAccountRequest $in): Awaitable<\Errors\Error>;
  public function AssociateS3Resources(AssociateS3ResourcesRequest $in): Awaitable<\Errors\Result<AssociateS3ResourcesResult>>;
  public function DisassociateMemberAccount(DisassociateMemberAccountRequest $in): Awaitable<\Errors\Error>;
  public function DisassociateS3Resources(DisassociateS3ResourcesRequest $in): Awaitable<\Errors\Result<DisassociateS3ResourcesResult>>;
  public function ListMemberAccounts(ListMemberAccountsRequest $in): Awaitable<\Errors\Result<ListMemberAccountsResult>>;
  public function ListS3Resources(ListS3ResourcesRequest $in): Awaitable<\Errors\Result<ListS3ResourcesResult>>;
  public function UpdateS3Resources(UpdateS3ResourcesRequest $in): Awaitable<\Errors\Result<UpdateS3ResourcesResult>>;
}

type AWSAccountId = string;

class AccessDeniedException {
  public ?ExceptionMessage $message;
  public ?ResourceType $resource_type;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'resource_type' => ?ResourceType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class AssociateMemberAccountRequest {
  public ?AWSAccountId $member_account_id;

  public function __construct(shape(
    ?'member_account_id' => ?AWSAccountId,
  ) $s = shape()) {
    $this->member_account_id = $s['member_account_id'] ?? '';
  }
}

class AssociateS3ResourcesRequest {
  public ?AWSAccountId $member_account_id;
  public ?S3ResourcesClassification $s_3_resources;

  public function __construct(shape(
    ?'member_account_id' => ?AWSAccountId,
    ?'s_3_resources' => ?S3ResourcesClassification,
  ) $s = shape()) {
    $this->member_account_id = $s['member_account_id'] ?? '';
    $this->s_3_resources = $s['s_3_resources'] ?? vec[];
  }
}

class AssociateS3ResourcesResult {
  public ?FailedS3Resources $failed_s_3_resources;

  public function __construct(shape(
    ?'failed_s_3_resources' => ?FailedS3Resources,
  ) $s = shape()) {
    $this->failed_s_3_resources = $s['failed_s_3_resources'] ?? vec[];
  }
}

type BucketName = string;

class ClassificationType {
  public ?S3ContinuousClassificationType $continuous;
  public ?S3OneTimeClassificationType $one_time;

  public function __construct(shape(
    ?'continuous' => ?S3ContinuousClassificationType,
    ?'one_time' => ?S3OneTimeClassificationType,
  ) $s = shape()) {
    $this->continuous = $s['continuous'] ?? '';
    $this->one_time = $s['one_time'] ?? '';
  }
}

class ClassificationTypeUpdate {
  public ?S3ContinuousClassificationType $continuous;
  public ?S3OneTimeClassificationType $one_time;

  public function __construct(shape(
    ?'continuous' => ?S3ContinuousClassificationType,
    ?'one_time' => ?S3OneTimeClassificationType,
  ) $s = shape()) {
    $this->continuous = $s['continuous'] ?? '';
    $this->one_time = $s['one_time'] ?? '';
  }
}

class DisassociateMemberAccountRequest {
  public ?AWSAccountId $member_account_id;

  public function __construct(shape(
    ?'member_account_id' => ?AWSAccountId,
  ) $s = shape()) {
    $this->member_account_id = $s['member_account_id'] ?? '';
  }
}

class DisassociateS3ResourcesRequest {
  public ?S3Resources $associated_s_3_resources;
  public ?AWSAccountId $member_account_id;

  public function __construct(shape(
    ?'associated_s_3_resources' => ?S3Resources,
    ?'member_account_id' => ?AWSAccountId,
  ) $s = shape()) {
    $this->associated_s_3_resources = $s['associated_s_3_resources'] ?? vec[];
    $this->member_account_id = $s['member_account_id'] ?? '';
  }
}

class DisassociateS3ResourcesResult {
  public ?FailedS3Resources $failed_s_3_resources;

  public function __construct(shape(
    ?'failed_s_3_resources' => ?FailedS3Resources,
  ) $s = shape()) {
    $this->failed_s_3_resources = $s['failed_s_3_resources'] ?? vec[];
  }
}

type ErrorCode = string;

type ExceptionMessage = string;

class FailedS3Resource {
  public ?ErrorCode $error_code;
  public ?ExceptionMessage $error_message;
  public ?S3Resource $failed_item;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ExceptionMessage,
    ?'failed_item' => ?S3Resource,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->failed_item = $s['failed_item'] ?? null;
  }
}

type FailedS3Resources = vec<FailedS3Resource>;

type FieldName = string;

class InternalException {
  public ?ErrorCode $error_code;
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class InvalidInputException {
  public ?ErrorCode $error_code;
  public ?FieldName $field_name;
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'field_name' => ?FieldName,
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->field_name = $s['field_name'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class LimitExceededException {
  public ?ErrorCode $error_code;
  public ?ExceptionMessage $message;
  public ?ResourceType $resource_type;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'message' => ?ExceptionMessage,
    ?'resource_type' => ?ResourceType,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class ListMemberAccountsRequest {
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

class ListMemberAccountsResult {
  public ?MemberAccounts $member_accounts;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'member_accounts' => ?MemberAccounts,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->member_accounts = $s['member_accounts'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListS3ResourcesRequest {
  public ?MaxResults $max_results;
  public ?AWSAccountId $member_account_id;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'member_account_id' => ?AWSAccountId,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->member_account_id = $s['member_account_id'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListS3ResourcesResult {
  public ?NextToken $next_token;
  public ?S3ResourcesClassification $s_3_resources;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'s_3_resources' => ?S3ResourcesClassification,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->s_3_resources = $s['s_3_resources'] ?? vec[];
  }
}

type MaxResults = int;

class MemberAccount {
  public ?AWSAccountId $account_id;

  public function __construct(shape(
    ?'account_id' => ?AWSAccountId,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
  }
}

type MemberAccounts = vec<MemberAccount>;

type NextToken = string;

type Prefix = string;

type ResourceType = string;

type S3ContinuousClassificationType = string;

type S3OneTimeClassificationType = string;

class S3Resource {
  public ?BucketName $bucket_name;
  public ?Prefix $prefix;

  public function __construct(shape(
    ?'bucket_name' => ?BucketName,
    ?'prefix' => ?Prefix,
  ) $s = shape()) {
    $this->bucket_name = $s['bucket_name'] ?? '';
    $this->prefix = $s['prefix'] ?? '';
  }
}

class S3ResourceClassification {
  public ?BucketName $bucket_name;
  public ?ClassificationType $classification_type;
  public ?Prefix $prefix;

  public function __construct(shape(
    ?'bucket_name' => ?BucketName,
    ?'classification_type' => ?ClassificationType,
    ?'prefix' => ?Prefix,
  ) $s = shape()) {
    $this->bucket_name = $s['bucket_name'] ?? '';
    $this->classification_type = $s['classification_type'] ?? null;
    $this->prefix = $s['prefix'] ?? '';
  }
}

class S3ResourceClassificationUpdate {
  public ?BucketName $bucket_name;
  public ?ClassificationTypeUpdate $classification_type_update;
  public ?Prefix $prefix;

  public function __construct(shape(
    ?'bucket_name' => ?BucketName,
    ?'classification_type_update' => ?ClassificationTypeUpdate,
    ?'prefix' => ?Prefix,
  ) $s = shape()) {
    $this->bucket_name = $s['bucket_name'] ?? '';
    $this->classification_type_update = $s['classification_type_update'] ?? null;
    $this->prefix = $s['prefix'] ?? '';
  }
}

type S3Resources = vec<S3Resource>;

type S3ResourcesClassification = vec<S3ResourceClassification>;

type S3ResourcesClassificationUpdate = vec<S3ResourceClassificationUpdate>;

class UpdateS3ResourcesRequest {
  public ?AWSAccountId $member_account_id;
  public ?S3ResourcesClassificationUpdate $s_3_resources_update;

  public function __construct(shape(
    ?'member_account_id' => ?AWSAccountId,
    ?'s_3_resources_update' => ?S3ResourcesClassificationUpdate,
  ) $s = shape()) {
    $this->member_account_id = $s['member_account_id'] ?? '';
    $this->s_3_resources_update = $s['s_3_resources_update'] ?? vec[];
  }
}

class UpdateS3ResourcesResult {
  public ?FailedS3Resources $failed_s_3_resources;

  public function __construct(shape(
    ?'failed_s_3_resources' => ?FailedS3Resources,
  ) $s = shape()) {
    $this->failed_s_3_resources = $s['failed_s_3_resources'] ?? vec[];
  }
}


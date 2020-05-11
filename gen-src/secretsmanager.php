<?hh // strict
namespace slack\aws\secretsmanager;

interface Secrets Manager {
  public function CancelRotateSecret(CancelRotateSecretRequest): Awaitable<Errors\Result<CancelRotateSecretResponse>>;
  public function CreateSecret(CreateSecretRequest): Awaitable<Errors\Result<CreateSecretResponse>>;
  public function DeleteResourcePolicy(DeleteResourcePolicyRequest): Awaitable<Errors\Result<DeleteResourcePolicyResponse>>;
  public function DeleteSecret(DeleteSecretRequest): Awaitable<Errors\Result<DeleteSecretResponse>>;
  public function DescribeSecret(DescribeSecretRequest): Awaitable<Errors\Result<DescribeSecretResponse>>;
  public function GetRandomPassword(GetRandomPasswordRequest): Awaitable<Errors\Result<GetRandomPasswordResponse>>;
  public function GetResourcePolicy(GetResourcePolicyRequest): Awaitable<Errors\Result<GetResourcePolicyResponse>>;
  public function GetSecretValue(GetSecretValueRequest): Awaitable<Errors\Result<GetSecretValueResponse>>;
  public function ListSecretVersionIds(ListSecretVersionIdsRequest): Awaitable<Errors\Result<ListSecretVersionIdsResponse>>;
  public function ListSecrets(ListSecretsRequest): Awaitable<Errors\Result<ListSecretsResponse>>;
  public function PutResourcePolicy(PutResourcePolicyRequest): Awaitable<Errors\Result<PutResourcePolicyResponse>>;
  public function PutSecretValue(PutSecretValueRequest): Awaitable<Errors\Result<PutSecretValueResponse>>;
  public function RestoreSecret(RestoreSecretRequest): Awaitable<Errors\Result<RestoreSecretResponse>>;
  public function RotateSecret(RotateSecretRequest): Awaitable<Errors\Result<RotateSecretResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateSecret(UpdateSecretRequest): Awaitable<Errors\Result<UpdateSecretResponse>>;
  public function UpdateSecretVersionStage(UpdateSecretVersionStageRequest): Awaitable<Errors\Result<UpdateSecretVersionStageResponse>>;
}

type AutomaticallyRotateAfterDaysType = int;

type BooleanType = bool;

class CancelRotateSecretRequest {
  public SecretIdType $secret_id;

  public function __construct(shape(
  ?'secret_id' => SecretIdType,
  ) $s = shape()) {
    $this->secret_id = $secret_id ?? "";
  }
}

class CancelRotateSecretResponse {
  public SecretARNType $arn;
  public SecretNameType $name;
  public SecretVersionIdType $version_id;

  public function __construct(shape(
  ?'arn' => SecretARNType,
  ?'name' => SecretNameType,
  ?'version_id' => SecretVersionIdType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->name = $name ?? "";
    $this->version_id = $version_id ?? "";
  }
}

type ClientRequestTokenType = string;

class CreateSecretRequest {
  public ClientRequestTokenType $client_request_token;
  public DescriptionType $description;
  public KmsKeyIdType $kms_key_id;
  public NameType $name;
  public SecretBinaryType $secret_binary;
  public SecretStringType $secret_string;
  public TagListType $tags;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenType,
  ?'description' => DescriptionType,
  ?'kms_key_id' => KmsKeyIdType,
  ?'name' => NameType,
  ?'secret_binary' => SecretBinaryType,
  ?'secret_string' => SecretStringType,
  ?'tags' => TagListType,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->description = $description ?? "";
    $this->kms_key_id = $kms_key_id ?? "";
    $this->name = $name ?? "";
    $this->secret_binary = $secret_binary ?? "";
    $this->secret_string = $secret_string ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateSecretResponse {
  public SecretARNType $arn;
  public SecretNameType $name;
  public SecretVersionIdType $version_id;

  public function __construct(shape(
  ?'arn' => SecretARNType,
  ?'name' => SecretNameType,
  ?'version_id' => SecretVersionIdType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->name = $name ?? "";
    $this->version_id = $version_id ?? "";
  }
}

type CreatedDateType = int;

class DecryptionFailure {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DeleteResourcePolicyRequest {
  public SecretIdType $secret_id;

  public function __construct(shape(
  ?'secret_id' => SecretIdType,
  ) $s = shape()) {
    $this->secret_id = $secret_id ?? "";
  }
}

class DeleteResourcePolicyResponse {
  public SecretARNType $arn;
  public NameType $name;

  public function __construct(shape(
  ?'arn' => SecretARNType,
  ?'name' => NameType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->name = $name ?? "";
  }
}

class DeleteSecretRequest {
  public BooleanType $force_delete_without_recovery;
  public RecoveryWindowInDaysType $recovery_window_in_days;
  public SecretIdType $secret_id;

  public function __construct(shape(
  ?'force_delete_without_recovery' => BooleanType,
  ?'recovery_window_in_days' => RecoveryWindowInDaysType,
  ?'secret_id' => SecretIdType,
  ) $s = shape()) {
    $this->force_delete_without_recovery = $force_delete_without_recovery ?? false;
    $this->recovery_window_in_days = $recovery_window_in_days ?? 0;
    $this->secret_id = $secret_id ?? "";
  }
}

class DeleteSecretResponse {
  public SecretARNType $arn;
  public DeletionDateType $deletion_date;
  public SecretNameType $name;

  public function __construct(shape(
  ?'arn' => SecretARNType,
  ?'deletion_date' => DeletionDateType,
  ?'name' => SecretNameType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->deletion_date = $deletion_date ?? 0;
    $this->name = $name ?? "";
  }
}

type DeletedDateType = int;

type DeletionDateType = int;

class DescribeSecretRequest {
  public SecretIdType $secret_id;

  public function __construct(shape(
  ?'secret_id' => SecretIdType,
  ) $s = shape()) {
    $this->secret_id = $secret_id ?? "";
  }
}

class DescribeSecretResponse {
  public SecretARNType $arn;
  public DeletedDateType $deleted_date;
  public DescriptionType $description;
  public KmsKeyIdType $kms_key_id;
  public LastAccessedDateType $last_accessed_date;
  public LastChangedDateType $last_changed_date;
  public LastRotatedDateType $last_rotated_date;
  public SecretNameType $name;
  public OwningServiceType $owning_service;
  public RotationEnabledType $rotation_enabled;
  public RotationLambdaARNType $rotation_lambda_arn;
  public RotationRulesType $rotation_rules;
  public TagListType $tags;
  public SecretVersionsToStagesMapType $version_ids_to_stages;

  public function __construct(shape(
  ?'arn' => SecretARNType,
  ?'deleted_date' => DeletedDateType,
  ?'description' => DescriptionType,
  ?'kms_key_id' => KmsKeyIdType,
  ?'last_accessed_date' => LastAccessedDateType,
  ?'last_changed_date' => LastChangedDateType,
  ?'last_rotated_date' => LastRotatedDateType,
  ?'name' => SecretNameType,
  ?'owning_service' => OwningServiceType,
  ?'rotation_enabled' => RotationEnabledType,
  ?'rotation_lambda_arn' => RotationLambdaARNType,
  ?'rotation_rules' => RotationRulesType,
  ?'tags' => TagListType,
  ?'version_ids_to_stages' => SecretVersionsToStagesMapType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->deleted_date = $deleted_date ?? 0;
    $this->description = $description ?? "";
    $this->kms_key_id = $kms_key_id ?? "";
    $this->last_accessed_date = $last_accessed_date ?? 0;
    $this->last_changed_date = $last_changed_date ?? 0;
    $this->last_rotated_date = $last_rotated_date ?? 0;
    $this->name = $name ?? "";
    $this->owning_service = $owning_service ?? "";
    $this->rotation_enabled = $rotation_enabled ?? false;
    $this->rotation_lambda_arn = $rotation_lambda_arn ?? "";
    $this->rotation_rules = $rotation_rules ?? null;
    $this->tags = $tags ?? [];
    $this->version_ids_to_stages = $version_ids_to_stages ?? [];
  }
}

type DescriptionType = string;

class EncryptionFailure {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ErrorMessage = string;

type ExcludeCharactersType = string;

type ExcludeLowercaseType = bool;

type ExcludeNumbersType = bool;

type ExcludePunctuationType = bool;

type ExcludeUppercaseType = bool;

class GetRandomPasswordRequest {
  public ExcludeCharactersType $exclude_characters;
  public ExcludeLowercaseType $exclude_lowercase;
  public ExcludeNumbersType $exclude_numbers;
  public ExcludePunctuationType $exclude_punctuation;
  public ExcludeUppercaseType $exclude_uppercase;
  public IncludeSpaceType $include_space;
  public PasswordLengthType $password_length;
  public RequireEachIncludedTypeType $require_each_included_type;

  public function __construct(shape(
  ?'exclude_characters' => ExcludeCharactersType,
  ?'exclude_lowercase' => ExcludeLowercaseType,
  ?'exclude_numbers' => ExcludeNumbersType,
  ?'exclude_punctuation' => ExcludePunctuationType,
  ?'exclude_uppercase' => ExcludeUppercaseType,
  ?'include_space' => IncludeSpaceType,
  ?'password_length' => PasswordLengthType,
  ?'require_each_included_type' => RequireEachIncludedTypeType,
  ) $s = shape()) {
    $this->exclude_characters = $exclude_characters ?? "";
    $this->exclude_lowercase = $exclude_lowercase ?? false;
    $this->exclude_numbers = $exclude_numbers ?? false;
    $this->exclude_punctuation = $exclude_punctuation ?? false;
    $this->exclude_uppercase = $exclude_uppercase ?? false;
    $this->include_space = $include_space ?? false;
    $this->password_length = $password_length ?? 0;
    $this->require_each_included_type = $require_each_included_type ?? false;
  }
}

class GetRandomPasswordResponse {
  public RandomPasswordType $random_password;

  public function __construct(shape(
  ?'random_password' => RandomPasswordType,
  ) $s = shape()) {
    $this->random_password = $random_password ?? "";
  }
}

class GetResourcePolicyRequest {
  public SecretIdType $secret_id;

  public function __construct(shape(
  ?'secret_id' => SecretIdType,
  ) $s = shape()) {
    $this->secret_id = $secret_id ?? "";
  }
}

class GetResourcePolicyResponse {
  public SecretARNType $arn;
  public NameType $name;
  public NonEmptyResourcePolicyType $resource_policy;

  public function __construct(shape(
  ?'arn' => SecretARNType,
  ?'name' => NameType,
  ?'resource_policy' => NonEmptyResourcePolicyType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->name = $name ?? "";
    $this->resource_policy = $resource_policy ?? "";
  }
}

class GetSecretValueRequest {
  public SecretIdType $secret_id;
  public SecretVersionIdType $version_id;
  public SecretVersionStageType $version_stage;

  public function __construct(shape(
  ?'secret_id' => SecretIdType,
  ?'version_id' => SecretVersionIdType,
  ?'version_stage' => SecretVersionStageType,
  ) $s = shape()) {
    $this->secret_id = $secret_id ?? "";
    $this->version_id = $version_id ?? "";
    $this->version_stage = $version_stage ?? "";
  }
}

class GetSecretValueResponse {
  public SecretARNType $arn;
  public CreatedDateType $created_date;
  public SecretNameType $name;
  public SecretBinaryType $secret_binary;
  public SecretStringType $secret_string;
  public SecretVersionIdType $version_id;
  public SecretVersionStagesType $version_stages;

  public function __construct(shape(
  ?'arn' => SecretARNType,
  ?'created_date' => CreatedDateType,
  ?'name' => SecretNameType,
  ?'secret_binary' => SecretBinaryType,
  ?'secret_string' => SecretStringType,
  ?'version_id' => SecretVersionIdType,
  ?'version_stages' => SecretVersionStagesType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created_date = $created_date ?? 0;
    $this->name = $name ?? "";
    $this->secret_binary = $secret_binary ?? "";
    $this->secret_string = $secret_string ?? "";
    $this->version_id = $version_id ?? "";
    $this->version_stages = $version_stages ?? [];
  }
}

type IncludeSpaceType = bool;

class InternalServiceError {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidNextTokenException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidParameterException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidRequestException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type KmsKeyIdType = string;

type LastAccessedDateType = int;

type LastChangedDateType = int;

type LastRotatedDateType = int;

class LimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListSecretVersionIdsRequest {
  public BooleanType $include_deprecated;
  public MaxResultsType $max_results;
  public NextTokenType $next_token;
  public SecretIdType $secret_id;

  public function __construct(shape(
  ?'include_deprecated' => BooleanType,
  ?'max_results' => MaxResultsType,
  ?'next_token' => NextTokenType,
  ?'secret_id' => SecretIdType,
  ) $s = shape()) {
    $this->include_deprecated = $include_deprecated ?? false;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->secret_id = $secret_id ?? "";
  }
}

class ListSecretVersionIdsResponse {
  public SecretARNType $arn;
  public SecretNameType $name;
  public NextTokenType $next_token;
  public SecretVersionsListType $versions;

  public function __construct(shape(
  ?'arn' => SecretARNType,
  ?'name' => SecretNameType,
  ?'next_token' => NextTokenType,
  ?'versions' => SecretVersionsListType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->name = $name ?? "";
    $this->next_token = $next_token ?? "";
    $this->versions = $versions ?? [];
  }
}

class ListSecretsRequest {
  public MaxResultsType $max_results;
  public NextTokenType $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResultsType,
  ?'next_token' => NextTokenType,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListSecretsResponse {
  public NextTokenType $next_token;
  public SecretListType $secret_list;

  public function __construct(shape(
  ?'next_token' => NextTokenType,
  ?'secret_list' => SecretListType,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->secret_list = $secret_list ?? [];
  }
}

class MalformedPolicyDocumentException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type MaxResultsType = int;

type NameType = string;

type NextTokenType = string;

type NonEmptyResourcePolicyType = string;

type OwningServiceType = string;

type PasswordLengthType = int;

class PreconditionNotMetException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class PutResourcePolicyRequest {
  public NonEmptyResourcePolicyType $resource_policy;
  public SecretIdType $secret_id;

  public function __construct(shape(
  ?'resource_policy' => NonEmptyResourcePolicyType,
  ?'secret_id' => SecretIdType,
  ) $s = shape()) {
    $this->resource_policy = $resource_policy ?? "";
    $this->secret_id = $secret_id ?? "";
  }
}

class PutResourcePolicyResponse {
  public SecretARNType $arn;
  public NameType $name;

  public function __construct(shape(
  ?'arn' => SecretARNType,
  ?'name' => NameType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->name = $name ?? "";
  }
}

class PutSecretValueRequest {
  public ClientRequestTokenType $client_request_token;
  public SecretBinaryType $secret_binary;
  public SecretIdType $secret_id;
  public SecretStringType $secret_string;
  public SecretVersionStagesType $version_stages;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenType,
  ?'secret_binary' => SecretBinaryType,
  ?'secret_id' => SecretIdType,
  ?'secret_string' => SecretStringType,
  ?'version_stages' => SecretVersionStagesType,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->secret_binary = $secret_binary ?? "";
    $this->secret_id = $secret_id ?? "";
    $this->secret_string = $secret_string ?? "";
    $this->version_stages = $version_stages ?? [];
  }
}

class PutSecretValueResponse {
  public SecretARNType $arn;
  public SecretNameType $name;
  public SecretVersionIdType $version_id;
  public SecretVersionStagesType $version_stages;

  public function __construct(shape(
  ?'arn' => SecretARNType,
  ?'name' => SecretNameType,
  ?'version_id' => SecretVersionIdType,
  ?'version_stages' => SecretVersionStagesType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->name = $name ?? "";
    $this->version_id = $version_id ?? "";
    $this->version_stages = $version_stages ?? [];
  }
}

type RandomPasswordType = string;

type RecoveryWindowInDaysType = int;

type RequireEachIncludedTypeType = bool;

class ResourceExistsException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class RestoreSecretRequest {
  public SecretIdType $secret_id;

  public function __construct(shape(
  ?'secret_id' => SecretIdType,
  ) $s = shape()) {
    $this->secret_id = $secret_id ?? "";
  }
}

class RestoreSecretResponse {
  public SecretARNType $arn;
  public SecretNameType $name;

  public function __construct(shape(
  ?'arn' => SecretARNType,
  ?'name' => SecretNameType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->name = $name ?? "";
  }
}

class RotateSecretRequest {
  public ClientRequestTokenType $client_request_token;
  public RotationLambdaARNType $rotation_lambda_arn;
  public RotationRulesType $rotation_rules;
  public SecretIdType $secret_id;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenType,
  ?'rotation_lambda_arn' => RotationLambdaARNType,
  ?'rotation_rules' => RotationRulesType,
  ?'secret_id' => SecretIdType,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->rotation_lambda_arn = $rotation_lambda_arn ?? "";
    $this->rotation_rules = $rotation_rules ?? null;
    $this->secret_id = $secret_id ?? "";
  }
}

class RotateSecretResponse {
  public SecretARNType $arn;
  public SecretNameType $name;
  public SecretVersionIdType $version_id;

  public function __construct(shape(
  ?'arn' => SecretARNType,
  ?'name' => SecretNameType,
  ?'version_id' => SecretVersionIdType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->name = $name ?? "";
    $this->version_id = $version_id ?? "";
  }
}

type RotationEnabledType = bool;

type RotationLambdaARNType = string;

class RotationRulesType {
  public AutomaticallyRotateAfterDaysType $automatically_after_days;

  public function __construct(shape(
  ?'automatically_after_days' => AutomaticallyRotateAfterDaysType,
  ) $s = shape()) {
    $this->automatically_after_days = $automatically_after_days ?? 0;
  }
}

type SecretARNType = string;

type SecretBinaryType = string;

type SecretIdType = string;

class SecretListEntry {
  public SecretARNType $arn;
  public DeletedDateType $deleted_date;
  public DescriptionType $description;
  public KmsKeyIdType $kms_key_id;
  public LastAccessedDateType $last_accessed_date;
  public LastChangedDateType $last_changed_date;
  public LastRotatedDateType $last_rotated_date;
  public SecretNameType $name;
  public OwningServiceType $owning_service;
  public RotationEnabledType $rotation_enabled;
  public RotationLambdaARNType $rotation_lambda_arn;
  public RotationRulesType $rotation_rules;
  public SecretVersionsToStagesMapType $secret_versions_to_stages;
  public TagListType $tags;

  public function __construct(shape(
  ?'arn' => SecretARNType,
  ?'deleted_date' => DeletedDateType,
  ?'description' => DescriptionType,
  ?'kms_key_id' => KmsKeyIdType,
  ?'last_accessed_date' => LastAccessedDateType,
  ?'last_changed_date' => LastChangedDateType,
  ?'last_rotated_date' => LastRotatedDateType,
  ?'name' => SecretNameType,
  ?'owning_service' => OwningServiceType,
  ?'rotation_enabled' => RotationEnabledType,
  ?'rotation_lambda_arn' => RotationLambdaARNType,
  ?'rotation_rules' => RotationRulesType,
  ?'secret_versions_to_stages' => SecretVersionsToStagesMapType,
  ?'tags' => TagListType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->deleted_date = $deleted_date ?? 0;
    $this->description = $description ?? "";
    $this->kms_key_id = $kms_key_id ?? "";
    $this->last_accessed_date = $last_accessed_date ?? 0;
    $this->last_changed_date = $last_changed_date ?? 0;
    $this->last_rotated_date = $last_rotated_date ?? 0;
    $this->name = $name ?? "";
    $this->owning_service = $owning_service ?? "";
    $this->rotation_enabled = $rotation_enabled ?? false;
    $this->rotation_lambda_arn = $rotation_lambda_arn ?? "";
    $this->rotation_rules = $rotation_rules ?? null;
    $this->secret_versions_to_stages = $secret_versions_to_stages ?? [];
    $this->tags = $tags ?? [];
  }
}

type SecretListType = vec<SecretListEntry>;

type SecretNameType = string;

type SecretStringType = string;

type SecretVersionIdType = string;

type SecretVersionStageType = string;

type SecretVersionStagesType = vec<SecretVersionStageType>;

class SecretVersionsListEntry {
  public CreatedDateType $created_date;
  public LastAccessedDateType $last_accessed_date;
  public SecretVersionIdType $version_id;
  public SecretVersionStagesType $version_stages;

  public function __construct(shape(
  ?'created_date' => CreatedDateType,
  ?'last_accessed_date' => LastAccessedDateType,
  ?'version_id' => SecretVersionIdType,
  ?'version_stages' => SecretVersionStagesType,
  ) $s = shape()) {
    $this->created_date = $created_date ?? 0;
    $this->last_accessed_date = $last_accessed_date ?? 0;
    $this->version_id = $version_id ?? "";
    $this->version_stages = $version_stages ?? [];
  }
}

type SecretVersionsListType = vec<SecretVersionsListEntry>;

type SecretVersionsToStagesMapType = dict<SecretVersionIdType, SecretVersionStagesType>;

class Tag {
  public TagKeyType $key;
  public TagValueType $value;

  public function __construct(shape(
  ?'key' => TagKeyType,
  ?'value' => TagValueType,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagKeyListType = vec<TagKeyType>;

type TagKeyType = string;

type TagListType = vec<Tag>;

class TagResourceRequest {
  public SecretIdType $secret_id;
  public TagListType $tags;

  public function __construct(shape(
  ?'secret_id' => SecretIdType,
  ?'tags' => TagListType,
  ) $s = shape()) {
    $this->secret_id = $secret_id ?? "";
    $this->tags = $tags ?? [];
  }
}

type TagValueType = string;

class UntagResourceRequest {
  public SecretIdType $secret_id;
  public TagKeyListType $tag_keys;

  public function __construct(shape(
  ?'secret_id' => SecretIdType,
  ?'tag_keys' => TagKeyListType,
  ) $s = shape()) {
    $this->secret_id = $secret_id ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UpdateSecretRequest {
  public ClientRequestTokenType $client_request_token;
  public DescriptionType $description;
  public KmsKeyIdType $kms_key_id;
  public SecretBinaryType $secret_binary;
  public SecretIdType $secret_id;
  public SecretStringType $secret_string;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenType,
  ?'description' => DescriptionType,
  ?'kms_key_id' => KmsKeyIdType,
  ?'secret_binary' => SecretBinaryType,
  ?'secret_id' => SecretIdType,
  ?'secret_string' => SecretStringType,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->description = $description ?? "";
    $this->kms_key_id = $kms_key_id ?? "";
    $this->secret_binary = $secret_binary ?? "";
    $this->secret_id = $secret_id ?? "";
    $this->secret_string = $secret_string ?? "";
  }
}

class UpdateSecretResponse {
  public SecretARNType $arn;
  public SecretNameType $name;
  public SecretVersionIdType $version_id;

  public function __construct(shape(
  ?'arn' => SecretARNType,
  ?'name' => SecretNameType,
  ?'version_id' => SecretVersionIdType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->name = $name ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class UpdateSecretVersionStageRequest {
  public SecretVersionIdType $move_to_version_id;
  public SecretVersionIdType $remove_from_version_id;
  public SecretIdType $secret_id;
  public SecretVersionStageType $version_stage;

  public function __construct(shape(
  ?'move_to_version_id' => SecretVersionIdType,
  ?'remove_from_version_id' => SecretVersionIdType,
  ?'secret_id' => SecretIdType,
  ?'version_stage' => SecretVersionStageType,
  ) $s = shape()) {
    $this->move_to_version_id = $move_to_version_id ?? "";
    $this->remove_from_version_id = $remove_from_version_id ?? "";
    $this->secret_id = $secret_id ?? "";
    $this->version_stage = $version_stage ?? "";
  }
}

class UpdateSecretVersionStageResponse {
  public SecretARNType $arn;
  public SecretNameType $name;

  public function __construct(shape(
  ?'arn' => SecretARNType,
  ?'name' => SecretNameType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->name = $name ?? "";
  }
}


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

class AutomaticallyRotateAfterDaysType {
}

class BooleanType {
}

class CancelRotateSecretRequest {
  public SecretIdType $secret_id;
}

class CancelRotateSecretResponse {
  public SecretARNType $arn;
  public SecretNameType $name;
  public SecretVersionIdType $version_id;
}

class ClientRequestTokenType {
}

class CreateSecretRequest {
  public ClientRequestTokenType $client_request_token;
  public DescriptionType $description;
  public KmsKeyIdType $kms_key_id;
  public NameType $name;
  public SecretBinaryType $secret_binary;
  public SecretStringType $secret_string;
  public TagListType $tags;
}

class CreateSecretResponse {
  public SecretARNType $arn;
  public SecretNameType $name;
  public SecretVersionIdType $version_id;
}

class CreatedDateType {
}

class DecryptionFailure {
  public ErrorMessage $message;
}

class DeleteResourcePolicyRequest {
  public SecretIdType $secret_id;
}

class DeleteResourcePolicyResponse {
  public SecretARNType $arn;
  public NameType $name;
}

class DeleteSecretRequest {
  public BooleanType $force_delete_without_recovery;
  public RecoveryWindowInDaysType $recovery_window_in_days;
  public SecretIdType $secret_id;
}

class DeleteSecretResponse {
  public SecretARNType $arn;
  public DeletionDateType $deletion_date;
  public SecretNameType $name;
}

class DeletedDateType {
}

class DeletionDateType {
}

class DescribeSecretRequest {
  public SecretIdType $secret_id;
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
}

class DescriptionType {
}

class EncryptionFailure {
  public ErrorMessage $message;
}

class ErrorMessage {
}

class ExcludeCharactersType {
}

class ExcludeLowercaseType {
}

class ExcludeNumbersType {
}

class ExcludePunctuationType {
}

class ExcludeUppercaseType {
}

class GetRandomPasswordRequest {
  public ExcludeCharactersType $exclude_characters;
  public ExcludeLowercaseType $exclude_lowercase;
  public ExcludeNumbersType $exclude_numbers;
  public ExcludePunctuationType $exclude_punctuation;
  public ExcludeUppercaseType $exclude_uppercase;
  public IncludeSpaceType $include_space;
  public PasswordLengthType $password_length;
  public RequireEachIncludedTypeType $require_each_included_type;
}

class GetRandomPasswordResponse {
  public RandomPasswordType $random_password;
}

class GetResourcePolicyRequest {
  public SecretIdType $secret_id;
}

class GetResourcePolicyResponse {
  public SecretARNType $arn;
  public NameType $name;
  public NonEmptyResourcePolicyType $resource_policy;
}

class GetSecretValueRequest {
  public SecretIdType $secret_id;
  public SecretVersionIdType $version_id;
  public SecretVersionStageType $version_stage;
}

class GetSecretValueResponse {
  public SecretARNType $arn;
  public CreatedDateType $created_date;
  public SecretNameType $name;
  public SecretBinaryType $secret_binary;
  public SecretStringType $secret_string;
  public SecretVersionIdType $version_id;
  public SecretVersionStagesType $version_stages;
}

class IncludeSpaceType {
}

class InternalServiceError {
  public ErrorMessage $message;
}

class InvalidNextTokenException {
  public ErrorMessage $message;
}

class InvalidParameterException {
  public ErrorMessage $message;
}

class InvalidRequestException {
  public ErrorMessage $message;
}

class KmsKeyIdType {
}

class LastAccessedDateType {
}

class LastChangedDateType {
}

class LastRotatedDateType {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListSecretVersionIdsRequest {
  public BooleanType $include_deprecated;
  public MaxResultsType $max_results;
  public NextTokenType $next_token;
  public SecretIdType $secret_id;
}

class ListSecretVersionIdsResponse {
  public SecretARNType $arn;
  public SecretNameType $name;
  public NextTokenType $next_token;
  public SecretVersionsListType $versions;
}

class ListSecretsRequest {
  public MaxResultsType $max_results;
  public NextTokenType $next_token;
}

class ListSecretsResponse {
  public NextTokenType $next_token;
  public SecretListType $secret_list;
}

class MalformedPolicyDocumentException {
  public ErrorMessage $message;
}

class MaxResultsType {
}

class NameType {
}

class NextTokenType {
}

class NonEmptyResourcePolicyType {
}

class OwningServiceType {
}

class PasswordLengthType {
}

class PreconditionNotMetException {
  public ErrorMessage $message;
}

class PutResourcePolicyRequest {
  public NonEmptyResourcePolicyType $resource_policy;
  public SecretIdType $secret_id;
}

class PutResourcePolicyResponse {
  public SecretARNType $arn;
  public NameType $name;
}

class PutSecretValueRequest {
  public ClientRequestTokenType $client_request_token;
  public SecretBinaryType $secret_binary;
  public SecretIdType $secret_id;
  public SecretStringType $secret_string;
  public SecretVersionStagesType $version_stages;
}

class PutSecretValueResponse {
  public SecretARNType $arn;
  public SecretNameType $name;
  public SecretVersionIdType $version_id;
  public SecretVersionStagesType $version_stages;
}

class RandomPasswordType {
}

class RecoveryWindowInDaysType {
}

class RequireEachIncludedTypeType {
}

class ResourceExistsException {
  public ErrorMessage $message;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class RestoreSecretRequest {
  public SecretIdType $secret_id;
}

class RestoreSecretResponse {
  public SecretARNType $arn;
  public SecretNameType $name;
}

class RotateSecretRequest {
  public ClientRequestTokenType $client_request_token;
  public RotationLambdaARNType $rotation_lambda_arn;
  public RotationRulesType $rotation_rules;
  public SecretIdType $secret_id;
}

class RotateSecretResponse {
  public SecretARNType $arn;
  public SecretNameType $name;
  public SecretVersionIdType $version_id;
}

class RotationEnabledType {
}

class RotationLambdaARNType {
}

class RotationRulesType {
  public AutomaticallyRotateAfterDaysType $automatically_after_days;
}

class SecretARNType {
}

class SecretBinaryType {
}

class SecretIdType {
}

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
}

class SecretListType {
}

class SecretNameType {
}

class SecretStringType {
}

class SecretVersionIdType {
}

class SecretVersionStageType {
}

class SecretVersionStagesType {
}

class SecretVersionsListEntry {
  public CreatedDateType $created_date;
  public LastAccessedDateType $last_accessed_date;
  public SecretVersionIdType $version_id;
  public SecretVersionStagesType $version_stages;
}

class SecretVersionsListType {
}

class SecretVersionsToStagesMapType {
}

class Tag {
  public TagKeyType $key;
  public TagValueType $value;
}

class TagKeyListType {
}

class TagKeyType {
}

class TagListType {
}

class TagResourceRequest {
  public SecretIdType $secret_id;
  public TagListType $tags;
}

class TagValueType {
}

class UntagResourceRequest {
  public SecretIdType $secret_id;
  public TagKeyListType $tag_keys;
}

class UpdateSecretRequest {
  public ClientRequestTokenType $client_request_token;
  public DescriptionType $description;
  public KmsKeyIdType $kms_key_id;
  public SecretBinaryType $secret_binary;
  public SecretIdType $secret_id;
  public SecretStringType $secret_string;
}

class UpdateSecretResponse {
  public SecretARNType $arn;
  public SecretNameType $name;
  public SecretVersionIdType $version_id;
}

class UpdateSecretVersionStageRequest {
  public SecretVersionIdType $move_to_version_id;
  public SecretVersionIdType $remove_from_version_id;
  public SecretIdType $secret_id;
  public SecretVersionStageType $version_stage;
}

class UpdateSecretVersionStageResponse {
  public SecretARNType $arn;
  public SecretNameType $name;
}


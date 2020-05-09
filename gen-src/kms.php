<?hh // strict
namespace slack\aws\kms;

interface KMS {
  public function CancelKeyDeletion(CancelKeyDeletionRequest): Awaitable<Errors\Result<CancelKeyDeletionResponse>>;
  public function ConnectCustomKeyStore(ConnectCustomKeyStoreRequest): Awaitable<Errors\Result<ConnectCustomKeyStoreResponse>>;
  public function CreateAlias(CreateAliasRequest): Awaitable<Errors\Error>;
  public function CreateCustomKeyStore(CreateCustomKeyStoreRequest): Awaitable<Errors\Result<CreateCustomKeyStoreResponse>>;
  public function CreateGrant(CreateGrantRequest): Awaitable<Errors\Result<CreateGrantResponse>>;
  public function CreateKey(CreateKeyRequest): Awaitable<Errors\Result<CreateKeyResponse>>;
  public function Decrypt(DecryptRequest): Awaitable<Errors\Result<DecryptResponse>>;
  public function DeleteAlias(DeleteAliasRequest): Awaitable<Errors\Error>;
  public function DeleteCustomKeyStore(DeleteCustomKeyStoreRequest): Awaitable<Errors\Result<DeleteCustomKeyStoreResponse>>;
  public function DeleteImportedKeyMaterial(DeleteImportedKeyMaterialRequest): Awaitable<Errors\Error>;
  public function DescribeCustomKeyStores(DescribeCustomKeyStoresRequest): Awaitable<Errors\Result<DescribeCustomKeyStoresResponse>>;
  public function DescribeKey(DescribeKeyRequest): Awaitable<Errors\Result<DescribeKeyResponse>>;
  public function DisableKey(DisableKeyRequest): Awaitable<Errors\Error>;
  public function DisableKeyRotation(DisableKeyRotationRequest): Awaitable<Errors\Error>;
  public function DisconnectCustomKeyStore(DisconnectCustomKeyStoreRequest): Awaitable<Errors\Result<DisconnectCustomKeyStoreResponse>>;
  public function EnableKey(EnableKeyRequest): Awaitable<Errors\Error>;
  public function EnableKeyRotation(EnableKeyRotationRequest): Awaitable<Errors\Error>;
  public function Encrypt(EncryptRequest): Awaitable<Errors\Result<EncryptResponse>>;
  public function GenerateDataKey(GenerateDataKeyRequest): Awaitable<Errors\Result<GenerateDataKeyResponse>>;
  public function GenerateDataKeyPair(GenerateDataKeyPairRequest): Awaitable<Errors\Result<GenerateDataKeyPairResponse>>;
  public function GenerateDataKeyPairWithoutPlaintext(GenerateDataKeyPairWithoutPlaintextRequest): Awaitable<Errors\Result<GenerateDataKeyPairWithoutPlaintextResponse>>;
  public function GenerateDataKeyWithoutPlaintext(GenerateDataKeyWithoutPlaintextRequest): Awaitable<Errors\Result<GenerateDataKeyWithoutPlaintextResponse>>;
  public function GenerateRandom(GenerateRandomRequest): Awaitable<Errors\Result<GenerateRandomResponse>>;
  public function GetKeyPolicy(GetKeyPolicyRequest): Awaitable<Errors\Result<GetKeyPolicyResponse>>;
  public function GetKeyRotationStatus(GetKeyRotationStatusRequest): Awaitable<Errors\Result<GetKeyRotationStatusResponse>>;
  public function GetParametersForImport(GetParametersForImportRequest): Awaitable<Errors\Result<GetParametersForImportResponse>>;
  public function GetPublicKey(GetPublicKeyRequest): Awaitable<Errors\Result<GetPublicKeyResponse>>;
  public function ImportKeyMaterial(ImportKeyMaterialRequest): Awaitable<Errors\Result<ImportKeyMaterialResponse>>;
  public function ListAliases(ListAliasesRequest): Awaitable<Errors\Result<ListAliasesResponse>>;
  public function ListGrants(ListGrantsRequest): Awaitable<Errors\Result<ListGrantsResponse>>;
  public function ListKeyPolicies(ListKeyPoliciesRequest): Awaitable<Errors\Result<ListKeyPoliciesResponse>>;
  public function ListKeys(ListKeysRequest): Awaitable<Errors\Result<ListKeysResponse>>;
  public function ListResourceTags(ListResourceTagsRequest): Awaitable<Errors\Result<ListResourceTagsResponse>>;
  public function ListRetirableGrants(ListRetirableGrantsRequest): Awaitable<Errors\Result<ListGrantsResponse>>;
  public function PutKeyPolicy(PutKeyPolicyRequest): Awaitable<Errors\Error>;
  public function ReEncrypt(ReEncryptRequest): Awaitable<Errors\Result<ReEncryptResponse>>;
  public function RetireGrant(RetireGrantRequest): Awaitable<Errors\Error>;
  public function RevokeGrant(RevokeGrantRequest): Awaitable<Errors\Error>;
  public function ScheduleKeyDeletion(ScheduleKeyDeletionRequest): Awaitable<Errors\Result<ScheduleKeyDeletionResponse>>;
  public function Sign(SignRequest): Awaitable<Errors\Result<SignResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateAlias(UpdateAliasRequest): Awaitable<Errors\Error>;
  public function UpdateCustomKeyStore(UpdateCustomKeyStoreRequest): Awaitable<Errors\Result<UpdateCustomKeyStoreResponse>>;
  public function UpdateKeyDescription(UpdateKeyDescriptionRequest): Awaitable<Errors\Error>;
  public function Verify(VerifyRequest): Awaitable<Errors\Result<VerifyResponse>>;
}

class AWSAccountIdType {
}

class AlgorithmSpec {
}

class AliasList {
}

class AliasListEntry {
  public ArnType $alias_arn;
  public AliasNameType $alias_name;
  public KeyIdType $target_key_id;
}

class AliasNameType {
}

class AlreadyExistsException {
  public ErrorMessageType $message;
}

class ArnType {
}

class BooleanType {
}

class CancelKeyDeletionRequest {
  public KeyIdType $key_id;
}

class CancelKeyDeletionResponse {
  public KeyIdType $key_id;
}

class CiphertextType {
}

class CloudHsmClusterIdType {
}

class CloudHsmClusterInUseException {
  public ErrorMessageType $message;
}

class CloudHsmClusterInvalidConfigurationException {
  public ErrorMessageType $message;
}

class CloudHsmClusterNotActiveException {
  public ErrorMessageType $message;
}

class CloudHsmClusterNotFoundException {
  public ErrorMessageType $message;
}

class CloudHsmClusterNotRelatedException {
  public ErrorMessageType $message;
}

class ConnectCustomKeyStoreRequest {
  public CustomKeyStoreIdType $custom_key_store_id;
}

class ConnectCustomKeyStoreResponse {
}

class ConnectionErrorCodeType {
}

class ConnectionStateType {
}

class CreateAliasRequest {
  public AliasNameType $alias_name;
  public KeyIdType $target_key_id;
}

class CreateCustomKeyStoreRequest {
  public CloudHsmClusterIdType $cloud_hsm_cluster_id;
  public CustomKeyStoreNameType $custom_key_store_name;
  public KeyStorePasswordType $key_store_password;
  public TrustAnchorCertificateType $trust_anchor_certificate;
}

class CreateCustomKeyStoreResponse {
  public CustomKeyStoreIdType $custom_key_store_id;
}

class CreateGrantRequest {
  public GrantConstraints $constraints;
  public GrantTokenList $grant_tokens;
  public PrincipalIdType $grantee_principal;
  public KeyIdType $key_id;
  public GrantNameType $name;
  public GrantOperationList $operations;
  public PrincipalIdType $retiring_principal;
}

class CreateGrantResponse {
  public GrantIdType $grant_id;
  public GrantTokenType $grant_token;
}

class CreateKeyRequest {
  public BooleanType $bypass_policy_lockout_safety_check;
  public CustomKeyStoreIdType $custom_key_store_id;
  public CustomerMasterKeySpec $customer_master_key_spec;
  public DescriptionType $description;
  public KeyUsageType $key_usage;
  public OriginType $origin;
  public PolicyType $policy;
  public TagList $tags;
}

class CreateKeyResponse {
  public KeyMetadata $key_metadata;
}

class CustomKeyStoreHasCMKsException {
  public ErrorMessageType $message;
}

class CustomKeyStoreIdType {
}

class CustomKeyStoreInvalidStateException {
  public ErrorMessageType $message;
}

class CustomKeyStoreNameInUseException {
  public ErrorMessageType $message;
}

class CustomKeyStoreNameType {
}

class CustomKeyStoreNotFoundException {
  public ErrorMessageType $message;
}

class CustomKeyStoresList {
}

class CustomKeyStoresListEntry {
  public CloudHsmClusterIdType $cloud_hsm_cluster_id;
  public ConnectionErrorCodeType $connection_error_code;
  public ConnectionStateType $connection_state;
  public DateType $creation_date;
  public CustomKeyStoreIdType $custom_key_store_id;
  public CustomKeyStoreNameType $custom_key_store_name;
  public TrustAnchorCertificateType $trust_anchor_certificate;
}

class CustomerMasterKeySpec {
}

class DataKeyPairSpec {
}

class DataKeySpec {
}

class DateType {
}

class DecryptRequest {
  public CiphertextType $ciphertext_blob;
  public EncryptionAlgorithmSpec $encryption_algorithm;
  public EncryptionContextType $encryption_context;
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;
}

class DecryptResponse {
  public EncryptionAlgorithmSpec $encryption_algorithm;
  public KeyIdType $key_id;
  public PlaintextType $plaintext;
}

class DeleteAliasRequest {
  public AliasNameType $alias_name;
}

class DeleteCustomKeyStoreRequest {
  public CustomKeyStoreIdType $custom_key_store_id;
}

class DeleteCustomKeyStoreResponse {
}

class DeleteImportedKeyMaterialRequest {
  public KeyIdType $key_id;
}

class DependencyTimeoutException {
  public ErrorMessageType $message;
}

class DescribeCustomKeyStoresRequest {
  public CustomKeyStoreIdType $custom_key_store_id;
  public CustomKeyStoreNameType $custom_key_store_name;
  public LimitType $limit;
  public MarkerType $marker;
}

class DescribeCustomKeyStoresResponse {
  public CustomKeyStoresList $custom_key_stores;
  public MarkerType $next_marker;
  public BooleanType $truncated;
}

class DescribeKeyRequest {
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;
}

class DescribeKeyResponse {
  public KeyMetadata $key_metadata;
}

class DescriptionType {
}

class DisableKeyRequest {
  public KeyIdType $key_id;
}

class DisableKeyRotationRequest {
  public KeyIdType $key_id;
}

class DisabledException {
  public ErrorMessageType $message;
}

class DisconnectCustomKeyStoreRequest {
  public CustomKeyStoreIdType $custom_key_store_id;
}

class DisconnectCustomKeyStoreResponse {
}

class EnableKeyRequest {
  public KeyIdType $key_id;
}

class EnableKeyRotationRequest {
  public KeyIdType $key_id;
}

class EncryptRequest {
  public EncryptionAlgorithmSpec $encryption_algorithm;
  public EncryptionContextType $encryption_context;
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;
  public PlaintextType $plaintext;
}

class EncryptResponse {
  public CiphertextType $ciphertext_blob;
  public EncryptionAlgorithmSpec $encryption_algorithm;
  public KeyIdType $key_id;
}

class EncryptionAlgorithmSpec {
}

class EncryptionAlgorithmSpecList {
}

class EncryptionContextKey {
}

class EncryptionContextType {
}

class EncryptionContextValue {
}

class ErrorMessageType {
}

class ExpirationModelType {
}

class ExpiredImportTokenException {
  public ErrorMessageType $message;
}

class GenerateDataKeyPairRequest {
  public EncryptionContextType $encryption_context;
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;
  public DataKeyPairSpec $key_pair_spec;
}

class GenerateDataKeyPairResponse {
  public KeyIdType $key_id;
  public DataKeyPairSpec $key_pair_spec;
  public CiphertextType $private_key_ciphertext_blob;
  public PlaintextType $private_key_plaintext;
  public PublicKeyType $public_key;
}

class GenerateDataKeyPairWithoutPlaintextRequest {
  public EncryptionContextType $encryption_context;
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;
  public DataKeyPairSpec $key_pair_spec;
}

class GenerateDataKeyPairWithoutPlaintextResponse {
  public KeyIdType $key_id;
  public DataKeyPairSpec $key_pair_spec;
  public CiphertextType $private_key_ciphertext_blob;
  public PublicKeyType $public_key;
}

class GenerateDataKeyRequest {
  public EncryptionContextType $encryption_context;
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;
  public DataKeySpec $key_spec;
  public NumberOfBytesType $number_of_bytes;
}

class GenerateDataKeyResponse {
  public CiphertextType $ciphertext_blob;
  public KeyIdType $key_id;
  public PlaintextType $plaintext;
}

class GenerateDataKeyWithoutPlaintextRequest {
  public EncryptionContextType $encryption_context;
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;
  public DataKeySpec $key_spec;
  public NumberOfBytesType $number_of_bytes;
}

class GenerateDataKeyWithoutPlaintextResponse {
  public CiphertextType $ciphertext_blob;
  public KeyIdType $key_id;
}

class GenerateRandomRequest {
  public CustomKeyStoreIdType $custom_key_store_id;
  public NumberOfBytesType $number_of_bytes;
}

class GenerateRandomResponse {
  public PlaintextType $plaintext;
}

class GetKeyPolicyRequest {
  public KeyIdType $key_id;
  public PolicyNameType $policy_name;
}

class GetKeyPolicyResponse {
  public PolicyType $policy;
}

class GetKeyRotationStatusRequest {
  public KeyIdType $key_id;
}

class GetKeyRotationStatusResponse {
  public BooleanType $key_rotation_enabled;
}

class GetParametersForImportRequest {
  public KeyIdType $key_id;
  public AlgorithmSpec $wrapping_algorithm;
  public WrappingKeySpec $wrapping_key_spec;
}

class GetParametersForImportResponse {
  public CiphertextType $import_token;
  public KeyIdType $key_id;
  public DateType $parameters_valid_to;
  public PlaintextType $public_key;
}

class GetPublicKeyRequest {
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;
}

class GetPublicKeyResponse {
  public CustomerMasterKeySpec $customer_master_key_spec;
  public EncryptionAlgorithmSpecList $encryption_algorithms;
  public KeyIdType $key_id;
  public KeyUsageType $key_usage;
  public PublicKeyType $public_key;
  public SigningAlgorithmSpecList $signing_algorithms;
}

class GrantConstraints {
  public EncryptionContextType $encryption_context_equals;
  public EncryptionContextType $encryption_context_subset;
}

class GrantIdType {
}

class GrantList {
}

class GrantListEntry {
  public GrantConstraints $constraints;
  public DateType $creation_date;
  public GrantIdType $grant_id;
  public PrincipalIdType $grantee_principal;
  public PrincipalIdType $issuing_account;
  public KeyIdType $key_id;
  public GrantNameType $name;
  public GrantOperationList $operations;
  public PrincipalIdType $retiring_principal;
}

class GrantNameType {
}

class GrantOperation {
}

class GrantOperationList {
}

class GrantTokenList {
}

class GrantTokenType {
}

class ImportKeyMaterialRequest {
  public CiphertextType $encrypted_key_material;
  public ExpirationModelType $expiration_model;
  public CiphertextType $import_token;
  public KeyIdType $key_id;
  public DateType $valid_to;
}

class ImportKeyMaterialResponse {
}

class IncorrectKeyException {
  public ErrorMessageType $message;
}

class IncorrectKeyMaterialException {
  public ErrorMessageType $message;
}

class IncorrectTrustAnchorException {
  public ErrorMessageType $message;
}

class InvalidAliasNameException {
  public ErrorMessageType $message;
}

class InvalidArnException {
  public ErrorMessageType $message;
}

class InvalidCiphertextException {
  public ErrorMessageType $message;
}

class InvalidGrantIdException {
  public ErrorMessageType $message;
}

class InvalidGrantTokenException {
  public ErrorMessageType $message;
}

class InvalidImportTokenException {
  public ErrorMessageType $message;
}

class InvalidKeyUsageException {
  public ErrorMessageType $message;
}

class InvalidMarkerException {
  public ErrorMessageType $message;
}

class KMSInternalException {
  public ErrorMessageType $message;
}

class KMSInvalidSignatureException {
  public ErrorMessageType $message;
}

class KMSInvalidStateException {
  public ErrorMessageType $message;
}

class KeyIdType {
}

class KeyList {
}

class KeyListEntry {
  public ArnType $key_arn;
  public KeyIdType $key_id;
}

class KeyManagerType {
}

class KeyMetadata {
  public AWSAccountIdType $aws_account_id;
  public ArnType $arn;
  public CloudHsmClusterIdType $cloud_hsm_cluster_id;
  public DateType $creation_date;
  public CustomKeyStoreIdType $custom_key_store_id;
  public CustomerMasterKeySpec $customer_master_key_spec;
  public DateType $deletion_date;
  public DescriptionType $description;
  public BooleanType $enabled;
  public EncryptionAlgorithmSpecList $encryption_algorithms;
  public ExpirationModelType $expiration_model;
  public KeyIdType $key_id;
  public KeyManagerType $key_manager;
  public KeyState $key_state;
  public KeyUsageType $key_usage;
  public OriginType $origin;
  public SigningAlgorithmSpecList $signing_algorithms;
  public DateType $valid_to;
}

class KeyState {
}

class KeyStorePasswordType {
}

class KeyUnavailableException {
  public ErrorMessageType $message;
}

class KeyUsageType {
}

class LimitExceededException {
  public ErrorMessageType $message;
}

class LimitType {
}

class ListAliasesRequest {
  public KeyIdType $key_id;
  public LimitType $limit;
  public MarkerType $marker;
}

class ListAliasesResponse {
  public AliasList $aliases;
  public MarkerType $next_marker;
  public BooleanType $truncated;
}

class ListGrantsRequest {
  public KeyIdType $key_id;
  public LimitType $limit;
  public MarkerType $marker;
}

class ListGrantsResponse {
  public GrantList $grants;
  public MarkerType $next_marker;
  public BooleanType $truncated;
}

class ListKeyPoliciesRequest {
  public KeyIdType $key_id;
  public LimitType $limit;
  public MarkerType $marker;
}

class ListKeyPoliciesResponse {
  public MarkerType $next_marker;
  public PolicyNameList $policy_names;
  public BooleanType $truncated;
}

class ListKeysRequest {
  public LimitType $limit;
  public MarkerType $marker;
}

class ListKeysResponse {
  public KeyList $keys;
  public MarkerType $next_marker;
  public BooleanType $truncated;
}

class ListResourceTagsRequest {
  public KeyIdType $key_id;
  public LimitType $limit;
  public MarkerType $marker;
}

class ListResourceTagsResponse {
  public MarkerType $next_marker;
  public TagList $tags;
  public BooleanType $truncated;
}

class ListRetirableGrantsRequest {
  public LimitType $limit;
  public MarkerType $marker;
  public PrincipalIdType $retiring_principal;
}

class MalformedPolicyDocumentException {
  public ErrorMessageType $message;
}

class MarkerType {
}

class MessageType {
}

class NotFoundException {
  public ErrorMessageType $message;
}

class NumberOfBytesType {
}

class OriginType {
}

class PendingWindowInDaysType {
}

class PlaintextType {
}

class PolicyNameList {
}

class PolicyNameType {
}

class PolicyType {
}

class PrincipalIdType {
}

class PublicKeyType {
}

class PutKeyPolicyRequest {
  public BooleanType $bypass_policy_lockout_safety_check;
  public KeyIdType $key_id;
  public PolicyType $policy;
  public PolicyNameType $policy_name;
}

class ReEncryptRequest {
  public CiphertextType $ciphertext_blob;
  public EncryptionAlgorithmSpec $destination_encryption_algorithm;
  public EncryptionContextType $destination_encryption_context;
  public KeyIdType $destination_key_id;
  public GrantTokenList $grant_tokens;
  public EncryptionAlgorithmSpec $source_encryption_algorithm;
  public EncryptionContextType $source_encryption_context;
  public KeyIdType $source_key_id;
}

class ReEncryptResponse {
  public CiphertextType $ciphertext_blob;
  public EncryptionAlgorithmSpec $destination_encryption_algorithm;
  public KeyIdType $key_id;
  public EncryptionAlgorithmSpec $source_encryption_algorithm;
  public KeyIdType $source_key_id;
}

class RetireGrantRequest {
  public GrantIdType $grant_id;
  public GrantTokenType $grant_token;
  public KeyIdType $key_id;
}

class RevokeGrantRequest {
  public GrantIdType $grant_id;
  public KeyIdType $key_id;
}

class ScheduleKeyDeletionRequest {
  public KeyIdType $key_id;
  public PendingWindowInDaysType $pending_window_in_days;
}

class ScheduleKeyDeletionResponse {
  public DateType $deletion_date;
  public KeyIdType $key_id;
}

class SignRequest {
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;
  public PlaintextType $message;
  public MessageType $message_type;
  public SigningAlgorithmSpec $signing_algorithm;
}

class SignResponse {
  public KeyIdType $key_id;
  public CiphertextType $signature;
  public SigningAlgorithmSpec $signing_algorithm;
}

class SigningAlgorithmSpec {
}

class SigningAlgorithmSpecList {
}

class Tag {
  public TagKeyType $tag_key;
  public TagValueType $tag_value;
}

class TagException {
  public ErrorMessageType $message;
}

class TagKeyList {
}

class TagKeyType {
}

class TagList {
}

class TagResourceRequest {
  public KeyIdType $key_id;
  public TagList $tags;
}

class TagValueType {
}

class TrustAnchorCertificateType {
}

class UnsupportedOperationException {
  public ErrorMessageType $message;
}

class UntagResourceRequest {
  public KeyIdType $key_id;
  public TagKeyList $tag_keys;
}

class UpdateAliasRequest {
  public AliasNameType $alias_name;
  public KeyIdType $target_key_id;
}

class UpdateCustomKeyStoreRequest {
  public CloudHsmClusterIdType $cloud_hsm_cluster_id;
  public CustomKeyStoreIdType $custom_key_store_id;
  public KeyStorePasswordType $key_store_password;
  public CustomKeyStoreNameType $new_custom_key_store_name;
}

class UpdateCustomKeyStoreResponse {
}

class UpdateKeyDescriptionRequest {
  public DescriptionType $description;
  public KeyIdType $key_id;
}

class VerifyRequest {
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;
  public PlaintextType $message;
  public MessageType $message_type;
  public CiphertextType $signature;
  public SigningAlgorithmSpec $signing_algorithm;
}

class VerifyResponse {
  public KeyIdType $key_id;
  public BooleanType $signature_valid;
  public SigningAlgorithmSpec $signing_algorithm;
}

class WrappingKeySpec {
}


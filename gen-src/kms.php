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

type AWSAccountIdType = string;

type AlgorithmSpec = string;

type AliasList = vec<AliasListEntry>;

class AliasListEntry {
  public ArnType $alias_arn;
  public AliasNameType $alias_name;
  public KeyIdType $target_key_id;

  public function __construct(shape(
  ?'alias_arn' => ArnType,
  ?'alias_name' => AliasNameType,
  ?'target_key_id' => KeyIdType,
  ) $s = shape()) {
    $this->alias_arn = $alias_arn ?? "";
    $this->alias_name = $alias_name ?? "";
    $this->target_key_id = $target_key_id ?? "";
  }
}

type AliasNameType = string;

class AlreadyExistsException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ArnType = string;

type BooleanType = bool;

class CancelKeyDeletionRequest {
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
  }
}

class CancelKeyDeletionResponse {
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
  }
}

type CiphertextType = string;

type CloudHsmClusterIdType = string;

class CloudHsmClusterInUseException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CloudHsmClusterInvalidConfigurationException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CloudHsmClusterNotActiveException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CloudHsmClusterNotFoundException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CloudHsmClusterNotRelatedException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ConnectCustomKeyStoreRequest {
  public CustomKeyStoreIdType $custom_key_store_id;

  public function __construct(shape(
  ?'custom_key_store_id' => CustomKeyStoreIdType,
  ) $s = shape()) {
    $this->custom_key_store_id = $custom_key_store_id ?? "";
  }
}

class ConnectCustomKeyStoreResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ConnectionErrorCodeType = string;

type ConnectionStateType = string;

class CreateAliasRequest {
  public AliasNameType $alias_name;
  public KeyIdType $target_key_id;

  public function __construct(shape(
  ?'alias_name' => AliasNameType,
  ?'target_key_id' => KeyIdType,
  ) $s = shape()) {
    $this->alias_name = $alias_name ?? "";
    $this->target_key_id = $target_key_id ?? "";
  }
}

class CreateCustomKeyStoreRequest {
  public CloudHsmClusterIdType $cloud_hsm_cluster_id;
  public CustomKeyStoreNameType $custom_key_store_name;
  public KeyStorePasswordType $key_store_password;
  public TrustAnchorCertificateType $trust_anchor_certificate;

  public function __construct(shape(
  ?'cloud_hsm_cluster_id' => CloudHsmClusterIdType,
  ?'custom_key_store_name' => CustomKeyStoreNameType,
  ?'key_store_password' => KeyStorePasswordType,
  ?'trust_anchor_certificate' => TrustAnchorCertificateType,
  ) $s = shape()) {
    $this->cloud_hsm_cluster_id = $cloud_hsm_cluster_id ?? "";
    $this->custom_key_store_name = $custom_key_store_name ?? "";
    $this->key_store_password = $key_store_password ?? "";
    $this->trust_anchor_certificate = $trust_anchor_certificate ?? "";
  }
}

class CreateCustomKeyStoreResponse {
  public CustomKeyStoreIdType $custom_key_store_id;

  public function __construct(shape(
  ?'custom_key_store_id' => CustomKeyStoreIdType,
  ) $s = shape()) {
    $this->custom_key_store_id = $custom_key_store_id ?? "";
  }
}

class CreateGrantRequest {
  public GrantConstraints $constraints;
  public GrantTokenList $grant_tokens;
  public PrincipalIdType $grantee_principal;
  public KeyIdType $key_id;
  public GrantNameType $name;
  public GrantOperationList $operations;
  public PrincipalIdType $retiring_principal;

  public function __construct(shape(
  ?'constraints' => GrantConstraints,
  ?'grant_tokens' => GrantTokenList,
  ?'grantee_principal' => PrincipalIdType,
  ?'key_id' => KeyIdType,
  ?'name' => GrantNameType,
  ?'operations' => GrantOperationList,
  ?'retiring_principal' => PrincipalIdType,
  ) $s = shape()) {
    $this->constraints = $constraints ?? null;
    $this->grant_tokens = $grant_tokens ?? [];
    $this->grantee_principal = $grantee_principal ?? "";
    $this->key_id = $key_id ?? "";
    $this->name = $name ?? "";
    $this->operations = $operations ?? [];
    $this->retiring_principal = $retiring_principal ?? "";
  }
}

class CreateGrantResponse {
  public GrantIdType $grant_id;
  public GrantTokenType $grant_token;

  public function __construct(shape(
  ?'grant_id' => GrantIdType,
  ?'grant_token' => GrantTokenType,
  ) $s = shape()) {
    $this->grant_id = $grant_id ?? "";
    $this->grant_token = $grant_token ?? "";
  }
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

  public function __construct(shape(
  ?'bypass_policy_lockout_safety_check' => BooleanType,
  ?'custom_key_store_id' => CustomKeyStoreIdType,
  ?'customer_master_key_spec' => CustomerMasterKeySpec,
  ?'description' => DescriptionType,
  ?'key_usage' => KeyUsageType,
  ?'origin' => OriginType,
  ?'policy' => PolicyType,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->bypass_policy_lockout_safety_check = $bypass_policy_lockout_safety_check ?? false;
    $this->custom_key_store_id = $custom_key_store_id ?? "";
    $this->customer_master_key_spec = $customer_master_key_spec ?? "";
    $this->description = $description ?? "";
    $this->key_usage = $key_usage ?? "";
    $this->origin = $origin ?? "";
    $this->policy = $policy ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateKeyResponse {
  public KeyMetadata $key_metadata;

  public function __construct(shape(
  ?'key_metadata' => KeyMetadata,
  ) $s = shape()) {
    $this->key_metadata = $key_metadata ?? null;
  }
}

class CustomKeyStoreHasCMKsException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type CustomKeyStoreIdType = string;

class CustomKeyStoreInvalidStateException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CustomKeyStoreNameInUseException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type CustomKeyStoreNameType = string;

class CustomKeyStoreNotFoundException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type CustomKeyStoresList = vec<CustomKeyStoresListEntry>;

class CustomKeyStoresListEntry {
  public CloudHsmClusterIdType $cloud_hsm_cluster_id;
  public ConnectionErrorCodeType $connection_error_code;
  public ConnectionStateType $connection_state;
  public DateType $creation_date;
  public CustomKeyStoreIdType $custom_key_store_id;
  public CustomKeyStoreNameType $custom_key_store_name;
  public TrustAnchorCertificateType $trust_anchor_certificate;

  public function __construct(shape(
  ?'cloud_hsm_cluster_id' => CloudHsmClusterIdType,
  ?'connection_error_code' => ConnectionErrorCodeType,
  ?'connection_state' => ConnectionStateType,
  ?'creation_date' => DateType,
  ?'custom_key_store_id' => CustomKeyStoreIdType,
  ?'custom_key_store_name' => CustomKeyStoreNameType,
  ?'trust_anchor_certificate' => TrustAnchorCertificateType,
  ) $s = shape()) {
    $this->cloud_hsm_cluster_id = $cloud_hsm_cluster_id ?? "";
    $this->connection_error_code = $connection_error_code ?? "";
    $this->connection_state = $connection_state ?? "";
    $this->creation_date = $creation_date ?? 0;
    $this->custom_key_store_id = $custom_key_store_id ?? "";
    $this->custom_key_store_name = $custom_key_store_name ?? "";
    $this->trust_anchor_certificate = $trust_anchor_certificate ?? "";
  }
}

type CustomerMasterKeySpec = string;

type DataKeyPairSpec = string;

type DataKeySpec = string;

type DateType = int;

class DecryptRequest {
  public CiphertextType $ciphertext_blob;
  public EncryptionAlgorithmSpec $encryption_algorithm;
  public EncryptionContextType $encryption_context;
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'ciphertext_blob' => CiphertextType,
  ?'encryption_algorithm' => EncryptionAlgorithmSpec,
  ?'encryption_context' => EncryptionContextType,
  ?'grant_tokens' => GrantTokenList,
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->ciphertext_blob = $ciphertext_blob ?? "";
    $this->encryption_algorithm = $encryption_algorithm ?? "";
    $this->encryption_context = $encryption_context ?? [];
    $this->grant_tokens = $grant_tokens ?? [];
    $this->key_id = $key_id ?? "";
  }
}

class DecryptResponse {
  public EncryptionAlgorithmSpec $encryption_algorithm;
  public KeyIdType $key_id;
  public PlaintextType $plaintext;

  public function __construct(shape(
  ?'encryption_algorithm' => EncryptionAlgorithmSpec,
  ?'key_id' => KeyIdType,
  ?'plaintext' => PlaintextType,
  ) $s = shape()) {
    $this->encryption_algorithm = $encryption_algorithm ?? "";
    $this->key_id = $key_id ?? "";
    $this->plaintext = $plaintext ?? "";
  }
}

class DeleteAliasRequest {
  public AliasNameType $alias_name;

  public function __construct(shape(
  ?'alias_name' => AliasNameType,
  ) $s = shape()) {
    $this->alias_name = $alias_name ?? "";
  }
}

class DeleteCustomKeyStoreRequest {
  public CustomKeyStoreIdType $custom_key_store_id;

  public function __construct(shape(
  ?'custom_key_store_id' => CustomKeyStoreIdType,
  ) $s = shape()) {
    $this->custom_key_store_id = $custom_key_store_id ?? "";
  }
}

class DeleteCustomKeyStoreResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteImportedKeyMaterialRequest {
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
  }
}

class DependencyTimeoutException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DescribeCustomKeyStoresRequest {
  public CustomKeyStoreIdType $custom_key_store_id;
  public CustomKeyStoreNameType $custom_key_store_name;
  public LimitType $limit;
  public MarkerType $marker;

  public function __construct(shape(
  ?'custom_key_store_id' => CustomKeyStoreIdType,
  ?'custom_key_store_name' => CustomKeyStoreNameType,
  ?'limit' => LimitType,
  ?'marker' => MarkerType,
  ) $s = shape()) {
    $this->custom_key_store_id = $custom_key_store_id ?? "";
    $this->custom_key_store_name = $custom_key_store_name ?? "";
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
  }
}

class DescribeCustomKeyStoresResponse {
  public CustomKeyStoresList $custom_key_stores;
  public MarkerType $next_marker;
  public BooleanType $truncated;

  public function __construct(shape(
  ?'custom_key_stores' => CustomKeyStoresList,
  ?'next_marker' => MarkerType,
  ?'truncated' => BooleanType,
  ) $s = shape()) {
    $this->custom_key_stores = $custom_key_stores ?? [];
    $this->next_marker = $next_marker ?? "";
    $this->truncated = $truncated ?? false;
  }
}

class DescribeKeyRequest {
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'grant_tokens' => GrantTokenList,
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->grant_tokens = $grant_tokens ?? [];
    $this->key_id = $key_id ?? "";
  }
}

class DescribeKeyResponse {
  public KeyMetadata $key_metadata;

  public function __construct(shape(
  ?'key_metadata' => KeyMetadata,
  ) $s = shape()) {
    $this->key_metadata = $key_metadata ?? null;
  }
}

type DescriptionType = string;

class DisableKeyRequest {
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
  }
}

class DisableKeyRotationRequest {
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
  }
}

class DisabledException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DisconnectCustomKeyStoreRequest {
  public CustomKeyStoreIdType $custom_key_store_id;

  public function __construct(shape(
  ?'custom_key_store_id' => CustomKeyStoreIdType,
  ) $s = shape()) {
    $this->custom_key_store_id = $custom_key_store_id ?? "";
  }
}

class DisconnectCustomKeyStoreResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EnableKeyRequest {
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
  }
}

class EnableKeyRotationRequest {
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
  }
}

class EncryptRequest {
  public EncryptionAlgorithmSpec $encryption_algorithm;
  public EncryptionContextType $encryption_context;
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;
  public PlaintextType $plaintext;

  public function __construct(shape(
  ?'encryption_algorithm' => EncryptionAlgorithmSpec,
  ?'encryption_context' => EncryptionContextType,
  ?'grant_tokens' => GrantTokenList,
  ?'key_id' => KeyIdType,
  ?'plaintext' => PlaintextType,
  ) $s = shape()) {
    $this->encryption_algorithm = $encryption_algorithm ?? "";
    $this->encryption_context = $encryption_context ?? [];
    $this->grant_tokens = $grant_tokens ?? [];
    $this->key_id = $key_id ?? "";
    $this->plaintext = $plaintext ?? "";
  }
}

class EncryptResponse {
  public CiphertextType $ciphertext_blob;
  public EncryptionAlgorithmSpec $encryption_algorithm;
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'ciphertext_blob' => CiphertextType,
  ?'encryption_algorithm' => EncryptionAlgorithmSpec,
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->ciphertext_blob = $ciphertext_blob ?? "";
    $this->encryption_algorithm = $encryption_algorithm ?? "";
    $this->key_id = $key_id ?? "";
  }
}

type EncryptionAlgorithmSpec = string;

type EncryptionAlgorithmSpecList = vec<EncryptionAlgorithmSpec>;

type EncryptionContextKey = string;

type EncryptionContextType = dict<EncryptionContextKey, EncryptionContextValue>;

type EncryptionContextValue = string;

type ErrorMessageType = string;

type ExpirationModelType = string;

class ExpiredImportTokenException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class GenerateDataKeyPairRequest {
  public EncryptionContextType $encryption_context;
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;
  public DataKeyPairSpec $key_pair_spec;

  public function __construct(shape(
  ?'encryption_context' => EncryptionContextType,
  ?'grant_tokens' => GrantTokenList,
  ?'key_id' => KeyIdType,
  ?'key_pair_spec' => DataKeyPairSpec,
  ) $s = shape()) {
    $this->encryption_context = $encryption_context ?? [];
    $this->grant_tokens = $grant_tokens ?? [];
    $this->key_id = $key_id ?? "";
    $this->key_pair_spec = $key_pair_spec ?? "";
  }
}

class GenerateDataKeyPairResponse {
  public KeyIdType $key_id;
  public DataKeyPairSpec $key_pair_spec;
  public CiphertextType $private_key_ciphertext_blob;
  public PlaintextType $private_key_plaintext;
  public PublicKeyType $public_key;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ?'key_pair_spec' => DataKeyPairSpec,
  ?'private_key_ciphertext_blob' => CiphertextType,
  ?'private_key_plaintext' => PlaintextType,
  ?'public_key' => PublicKeyType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
    $this->key_pair_spec = $key_pair_spec ?? "";
    $this->private_key_ciphertext_blob = $private_key_ciphertext_blob ?? "";
    $this->private_key_plaintext = $private_key_plaintext ?? "";
    $this->public_key = $public_key ?? "";
  }
}

class GenerateDataKeyPairWithoutPlaintextRequest {
  public EncryptionContextType $encryption_context;
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;
  public DataKeyPairSpec $key_pair_spec;

  public function __construct(shape(
  ?'encryption_context' => EncryptionContextType,
  ?'grant_tokens' => GrantTokenList,
  ?'key_id' => KeyIdType,
  ?'key_pair_spec' => DataKeyPairSpec,
  ) $s = shape()) {
    $this->encryption_context = $encryption_context ?? [];
    $this->grant_tokens = $grant_tokens ?? [];
    $this->key_id = $key_id ?? "";
    $this->key_pair_spec = $key_pair_spec ?? "";
  }
}

class GenerateDataKeyPairWithoutPlaintextResponse {
  public KeyIdType $key_id;
  public DataKeyPairSpec $key_pair_spec;
  public CiphertextType $private_key_ciphertext_blob;
  public PublicKeyType $public_key;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ?'key_pair_spec' => DataKeyPairSpec,
  ?'private_key_ciphertext_blob' => CiphertextType,
  ?'public_key' => PublicKeyType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
    $this->key_pair_spec = $key_pair_spec ?? "";
    $this->private_key_ciphertext_blob = $private_key_ciphertext_blob ?? "";
    $this->public_key = $public_key ?? "";
  }
}

class GenerateDataKeyRequest {
  public EncryptionContextType $encryption_context;
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;
  public DataKeySpec $key_spec;
  public NumberOfBytesType $number_of_bytes;

  public function __construct(shape(
  ?'encryption_context' => EncryptionContextType,
  ?'grant_tokens' => GrantTokenList,
  ?'key_id' => KeyIdType,
  ?'key_spec' => DataKeySpec,
  ?'number_of_bytes' => NumberOfBytesType,
  ) $s = shape()) {
    $this->encryption_context = $encryption_context ?? [];
    $this->grant_tokens = $grant_tokens ?? [];
    $this->key_id = $key_id ?? "";
    $this->key_spec = $key_spec ?? "";
    $this->number_of_bytes = $number_of_bytes ?? 0;
  }
}

class GenerateDataKeyResponse {
  public CiphertextType $ciphertext_blob;
  public KeyIdType $key_id;
  public PlaintextType $plaintext;

  public function __construct(shape(
  ?'ciphertext_blob' => CiphertextType,
  ?'key_id' => KeyIdType,
  ?'plaintext' => PlaintextType,
  ) $s = shape()) {
    $this->ciphertext_blob = $ciphertext_blob ?? "";
    $this->key_id = $key_id ?? "";
    $this->plaintext = $plaintext ?? "";
  }
}

class GenerateDataKeyWithoutPlaintextRequest {
  public EncryptionContextType $encryption_context;
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;
  public DataKeySpec $key_spec;
  public NumberOfBytesType $number_of_bytes;

  public function __construct(shape(
  ?'encryption_context' => EncryptionContextType,
  ?'grant_tokens' => GrantTokenList,
  ?'key_id' => KeyIdType,
  ?'key_spec' => DataKeySpec,
  ?'number_of_bytes' => NumberOfBytesType,
  ) $s = shape()) {
    $this->encryption_context = $encryption_context ?? [];
    $this->grant_tokens = $grant_tokens ?? [];
    $this->key_id = $key_id ?? "";
    $this->key_spec = $key_spec ?? "";
    $this->number_of_bytes = $number_of_bytes ?? 0;
  }
}

class GenerateDataKeyWithoutPlaintextResponse {
  public CiphertextType $ciphertext_blob;
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'ciphertext_blob' => CiphertextType,
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->ciphertext_blob = $ciphertext_blob ?? "";
    $this->key_id = $key_id ?? "";
  }
}

class GenerateRandomRequest {
  public CustomKeyStoreIdType $custom_key_store_id;
  public NumberOfBytesType $number_of_bytes;

  public function __construct(shape(
  ?'custom_key_store_id' => CustomKeyStoreIdType,
  ?'number_of_bytes' => NumberOfBytesType,
  ) $s = shape()) {
    $this->custom_key_store_id = $custom_key_store_id ?? "";
    $this->number_of_bytes = $number_of_bytes ?? 0;
  }
}

class GenerateRandomResponse {
  public PlaintextType $plaintext;

  public function __construct(shape(
  ?'plaintext' => PlaintextType,
  ) $s = shape()) {
    $this->plaintext = $plaintext ?? "";
  }
}

class GetKeyPolicyRequest {
  public KeyIdType $key_id;
  public PolicyNameType $policy_name;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ?'policy_name' => PolicyNameType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
    $this->policy_name = $policy_name ?? "";
  }
}

class GetKeyPolicyResponse {
  public PolicyType $policy;

  public function __construct(shape(
  ?'policy' => PolicyType,
  ) $s = shape()) {
    $this->policy = $policy ?? "";
  }
}

class GetKeyRotationStatusRequest {
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
  }
}

class GetKeyRotationStatusResponse {
  public BooleanType $key_rotation_enabled;

  public function __construct(shape(
  ?'key_rotation_enabled' => BooleanType,
  ) $s = shape()) {
    $this->key_rotation_enabled = $key_rotation_enabled ?? false;
  }
}

class GetParametersForImportRequest {
  public KeyIdType $key_id;
  public AlgorithmSpec $wrapping_algorithm;
  public WrappingKeySpec $wrapping_key_spec;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ?'wrapping_algorithm' => AlgorithmSpec,
  ?'wrapping_key_spec' => WrappingKeySpec,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
    $this->wrapping_algorithm = $wrapping_algorithm ?? "";
    $this->wrapping_key_spec = $wrapping_key_spec ?? "";
  }
}

class GetParametersForImportResponse {
  public CiphertextType $import_token;
  public KeyIdType $key_id;
  public DateType $parameters_valid_to;
  public PlaintextType $public_key;

  public function __construct(shape(
  ?'import_token' => CiphertextType,
  ?'key_id' => KeyIdType,
  ?'parameters_valid_to' => DateType,
  ?'public_key' => PlaintextType,
  ) $s = shape()) {
    $this->import_token = $import_token ?? "";
    $this->key_id = $key_id ?? "";
    $this->parameters_valid_to = $parameters_valid_to ?? 0;
    $this->public_key = $public_key ?? "";
  }
}

class GetPublicKeyRequest {
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'grant_tokens' => GrantTokenList,
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->grant_tokens = $grant_tokens ?? [];
    $this->key_id = $key_id ?? "";
  }
}

class GetPublicKeyResponse {
  public CustomerMasterKeySpec $customer_master_key_spec;
  public EncryptionAlgorithmSpecList $encryption_algorithms;
  public KeyIdType $key_id;
  public KeyUsageType $key_usage;
  public PublicKeyType $public_key;
  public SigningAlgorithmSpecList $signing_algorithms;

  public function __construct(shape(
  ?'customer_master_key_spec' => CustomerMasterKeySpec,
  ?'encryption_algorithms' => EncryptionAlgorithmSpecList,
  ?'key_id' => KeyIdType,
  ?'key_usage' => KeyUsageType,
  ?'public_key' => PublicKeyType,
  ?'signing_algorithms' => SigningAlgorithmSpecList,
  ) $s = shape()) {
    $this->customer_master_key_spec = $customer_master_key_spec ?? "";
    $this->encryption_algorithms = $encryption_algorithms ?? [];
    $this->key_id = $key_id ?? "";
    $this->key_usage = $key_usage ?? "";
    $this->public_key = $public_key ?? "";
    $this->signing_algorithms = $signing_algorithms ?? [];
  }
}

class GrantConstraints {
  public EncryptionContextType $encryption_context_equals;
  public EncryptionContextType $encryption_context_subset;

  public function __construct(shape(
  ?'encryption_context_equals' => EncryptionContextType,
  ?'encryption_context_subset' => EncryptionContextType,
  ) $s = shape()) {
    $this->encryption_context_equals = $encryption_context_equals ?? [];
    $this->encryption_context_subset = $encryption_context_subset ?? [];
  }
}

type GrantIdType = string;

type GrantList = vec<GrantListEntry>;

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

  public function __construct(shape(
  ?'constraints' => GrantConstraints,
  ?'creation_date' => DateType,
  ?'grant_id' => GrantIdType,
  ?'grantee_principal' => PrincipalIdType,
  ?'issuing_account' => PrincipalIdType,
  ?'key_id' => KeyIdType,
  ?'name' => GrantNameType,
  ?'operations' => GrantOperationList,
  ?'retiring_principal' => PrincipalIdType,
  ) $s = shape()) {
    $this->constraints = $constraints ?? null;
    $this->creation_date = $creation_date ?? 0;
    $this->grant_id = $grant_id ?? "";
    $this->grantee_principal = $grantee_principal ?? "";
    $this->issuing_account = $issuing_account ?? "";
    $this->key_id = $key_id ?? "";
    $this->name = $name ?? "";
    $this->operations = $operations ?? [];
    $this->retiring_principal = $retiring_principal ?? "";
  }
}

type GrantNameType = string;

type GrantOperation = string;

type GrantOperationList = vec<GrantOperation>;

type GrantTokenList = vec<GrantTokenType>;

type GrantTokenType = string;

class ImportKeyMaterialRequest {
  public CiphertextType $encrypted_key_material;
  public ExpirationModelType $expiration_model;
  public CiphertextType $import_token;
  public KeyIdType $key_id;
  public DateType $valid_to;

  public function __construct(shape(
  ?'encrypted_key_material' => CiphertextType,
  ?'expiration_model' => ExpirationModelType,
  ?'import_token' => CiphertextType,
  ?'key_id' => KeyIdType,
  ?'valid_to' => DateType,
  ) $s = shape()) {
    $this->encrypted_key_material = $encrypted_key_material ?? "";
    $this->expiration_model = $expiration_model ?? "";
    $this->import_token = $import_token ?? "";
    $this->key_id = $key_id ?? "";
    $this->valid_to = $valid_to ?? 0;
  }
}

class ImportKeyMaterialResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class IncorrectKeyException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class IncorrectKeyMaterialException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class IncorrectTrustAnchorException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidAliasNameException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidArnException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidCiphertextException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidGrantIdException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidGrantTokenException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidImportTokenException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidKeyUsageException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidMarkerException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class KMSInternalException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class KMSInvalidSignatureException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class KMSInvalidStateException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type KeyIdType = string;

type KeyList = vec<KeyListEntry>;

class KeyListEntry {
  public ArnType $key_arn;
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'key_arn' => ArnType,
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->key_arn = $key_arn ?? "";
    $this->key_id = $key_id ?? "";
  }
}

type KeyManagerType = string;

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

  public function __construct(shape(
  ?'aws_account_id' => AWSAccountIdType,
  ?'arn' => ArnType,
  ?'cloud_hsm_cluster_id' => CloudHsmClusterIdType,
  ?'creation_date' => DateType,
  ?'custom_key_store_id' => CustomKeyStoreIdType,
  ?'customer_master_key_spec' => CustomerMasterKeySpec,
  ?'deletion_date' => DateType,
  ?'description' => DescriptionType,
  ?'enabled' => BooleanType,
  ?'encryption_algorithms' => EncryptionAlgorithmSpecList,
  ?'expiration_model' => ExpirationModelType,
  ?'key_id' => KeyIdType,
  ?'key_manager' => KeyManagerType,
  ?'key_state' => KeyState,
  ?'key_usage' => KeyUsageType,
  ?'origin' => OriginType,
  ?'signing_algorithms' => SigningAlgorithmSpecList,
  ?'valid_to' => DateType,
  ) $s = shape()) {
    $this->aws_account_id = $aws_account_id ?? "";
    $this->arn = $arn ?? "";
    $this->cloud_hsm_cluster_id = $cloud_hsm_cluster_id ?? "";
    $this->creation_date = $creation_date ?? 0;
    $this->custom_key_store_id = $custom_key_store_id ?? "";
    $this->customer_master_key_spec = $customer_master_key_spec ?? "";
    $this->deletion_date = $deletion_date ?? 0;
    $this->description = $description ?? "";
    $this->enabled = $enabled ?? false;
    $this->encryption_algorithms = $encryption_algorithms ?? [];
    $this->expiration_model = $expiration_model ?? "";
    $this->key_id = $key_id ?? "";
    $this->key_manager = $key_manager ?? "";
    $this->key_state = $key_state ?? "";
    $this->key_usage = $key_usage ?? "";
    $this->origin = $origin ?? "";
    $this->signing_algorithms = $signing_algorithms ?? [];
    $this->valid_to = $valid_to ?? 0;
  }
}

type KeyState = string;

type KeyStorePasswordType = string;

class KeyUnavailableException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type KeyUsageType = string;

class LimitExceededException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type LimitType = int;

class ListAliasesRequest {
  public KeyIdType $key_id;
  public LimitType $limit;
  public MarkerType $marker;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ?'limit' => LimitType,
  ?'marker' => MarkerType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
  }
}

class ListAliasesResponse {
  public AliasList $aliases;
  public MarkerType $next_marker;
  public BooleanType $truncated;

  public function __construct(shape(
  ?'aliases' => AliasList,
  ?'next_marker' => MarkerType,
  ?'truncated' => BooleanType,
  ) $s = shape()) {
    $this->aliases = $aliases ?? [];
    $this->next_marker = $next_marker ?? "";
    $this->truncated = $truncated ?? false;
  }
}

class ListGrantsRequest {
  public KeyIdType $key_id;
  public LimitType $limit;
  public MarkerType $marker;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ?'limit' => LimitType,
  ?'marker' => MarkerType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
  }
}

class ListGrantsResponse {
  public GrantList $grants;
  public MarkerType $next_marker;
  public BooleanType $truncated;

  public function __construct(shape(
  ?'grants' => GrantList,
  ?'next_marker' => MarkerType,
  ?'truncated' => BooleanType,
  ) $s = shape()) {
    $this->grants = $grants ?? [];
    $this->next_marker = $next_marker ?? "";
    $this->truncated = $truncated ?? false;
  }
}

class ListKeyPoliciesRequest {
  public KeyIdType $key_id;
  public LimitType $limit;
  public MarkerType $marker;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ?'limit' => LimitType,
  ?'marker' => MarkerType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
  }
}

class ListKeyPoliciesResponse {
  public MarkerType $next_marker;
  public PolicyNameList $policy_names;
  public BooleanType $truncated;

  public function __construct(shape(
  ?'next_marker' => MarkerType,
  ?'policy_names' => PolicyNameList,
  ?'truncated' => BooleanType,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? "";
    $this->policy_names = $policy_names ?? [];
    $this->truncated = $truncated ?? false;
  }
}

class ListKeysRequest {
  public LimitType $limit;
  public MarkerType $marker;

  public function __construct(shape(
  ?'limit' => LimitType,
  ?'marker' => MarkerType,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
  }
}

class ListKeysResponse {
  public KeyList $keys;
  public MarkerType $next_marker;
  public BooleanType $truncated;

  public function __construct(shape(
  ?'keys' => KeyList,
  ?'next_marker' => MarkerType,
  ?'truncated' => BooleanType,
  ) $s = shape()) {
    $this->keys = $keys ?? [];
    $this->next_marker = $next_marker ?? "";
    $this->truncated = $truncated ?? false;
  }
}

class ListResourceTagsRequest {
  public KeyIdType $key_id;
  public LimitType $limit;
  public MarkerType $marker;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ?'limit' => LimitType,
  ?'marker' => MarkerType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
  }
}

class ListResourceTagsResponse {
  public MarkerType $next_marker;
  public TagList $tags;
  public BooleanType $truncated;

  public function __construct(shape(
  ?'next_marker' => MarkerType,
  ?'tags' => TagList,
  ?'truncated' => BooleanType,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? "";
    $this->tags = $tags ?? [];
    $this->truncated = $truncated ?? false;
  }
}

class ListRetirableGrantsRequest {
  public LimitType $limit;
  public MarkerType $marker;
  public PrincipalIdType $retiring_principal;

  public function __construct(shape(
  ?'limit' => LimitType,
  ?'marker' => MarkerType,
  ?'retiring_principal' => PrincipalIdType,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->marker = $marker ?? "";
    $this->retiring_principal = $retiring_principal ?? "";
  }
}

class MalformedPolicyDocumentException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type MarkerType = string;

type MessageType = string;

class NotFoundException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type NumberOfBytesType = int;

type OriginType = string;

type PendingWindowInDaysType = int;

type PlaintextType = string;

type PolicyNameList = vec<PolicyNameType>;

type PolicyNameType = string;

type PolicyType = string;

type PrincipalIdType = string;

type PublicKeyType = string;

class PutKeyPolicyRequest {
  public BooleanType $bypass_policy_lockout_safety_check;
  public KeyIdType $key_id;
  public PolicyType $policy;
  public PolicyNameType $policy_name;

  public function __construct(shape(
  ?'bypass_policy_lockout_safety_check' => BooleanType,
  ?'key_id' => KeyIdType,
  ?'policy' => PolicyType,
  ?'policy_name' => PolicyNameType,
  ) $s = shape()) {
    $this->bypass_policy_lockout_safety_check = $bypass_policy_lockout_safety_check ?? false;
    $this->key_id = $key_id ?? "";
    $this->policy = $policy ?? "";
    $this->policy_name = $policy_name ?? "";
  }
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

  public function __construct(shape(
  ?'ciphertext_blob' => CiphertextType,
  ?'destination_encryption_algorithm' => EncryptionAlgorithmSpec,
  ?'destination_encryption_context' => EncryptionContextType,
  ?'destination_key_id' => KeyIdType,
  ?'grant_tokens' => GrantTokenList,
  ?'source_encryption_algorithm' => EncryptionAlgorithmSpec,
  ?'source_encryption_context' => EncryptionContextType,
  ?'source_key_id' => KeyIdType,
  ) $s = shape()) {
    $this->ciphertext_blob = $ciphertext_blob ?? "";
    $this->destination_encryption_algorithm = $destination_encryption_algorithm ?? "";
    $this->destination_encryption_context = $destination_encryption_context ?? [];
    $this->destination_key_id = $destination_key_id ?? "";
    $this->grant_tokens = $grant_tokens ?? [];
    $this->source_encryption_algorithm = $source_encryption_algorithm ?? "";
    $this->source_encryption_context = $source_encryption_context ?? [];
    $this->source_key_id = $source_key_id ?? "";
  }
}

class ReEncryptResponse {
  public CiphertextType $ciphertext_blob;
  public EncryptionAlgorithmSpec $destination_encryption_algorithm;
  public KeyIdType $key_id;
  public EncryptionAlgorithmSpec $source_encryption_algorithm;
  public KeyIdType $source_key_id;

  public function __construct(shape(
  ?'ciphertext_blob' => CiphertextType,
  ?'destination_encryption_algorithm' => EncryptionAlgorithmSpec,
  ?'key_id' => KeyIdType,
  ?'source_encryption_algorithm' => EncryptionAlgorithmSpec,
  ?'source_key_id' => KeyIdType,
  ) $s = shape()) {
    $this->ciphertext_blob = $ciphertext_blob ?? "";
    $this->destination_encryption_algorithm = $destination_encryption_algorithm ?? "";
    $this->key_id = $key_id ?? "";
    $this->source_encryption_algorithm = $source_encryption_algorithm ?? "";
    $this->source_key_id = $source_key_id ?? "";
  }
}

class RetireGrantRequest {
  public GrantIdType $grant_id;
  public GrantTokenType $grant_token;
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'grant_id' => GrantIdType,
  ?'grant_token' => GrantTokenType,
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->grant_id = $grant_id ?? "";
    $this->grant_token = $grant_token ?? "";
    $this->key_id = $key_id ?? "";
  }
}

class RevokeGrantRequest {
  public GrantIdType $grant_id;
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'grant_id' => GrantIdType,
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->grant_id = $grant_id ?? "";
    $this->key_id = $key_id ?? "";
  }
}

class ScheduleKeyDeletionRequest {
  public KeyIdType $key_id;
  public PendingWindowInDaysType $pending_window_in_days;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ?'pending_window_in_days' => PendingWindowInDaysType,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
    $this->pending_window_in_days = $pending_window_in_days ?? 0;
  }
}

class ScheduleKeyDeletionResponse {
  public DateType $deletion_date;
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'deletion_date' => DateType,
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->deletion_date = $deletion_date ?? 0;
    $this->key_id = $key_id ?? "";
  }
}

class SignRequest {
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;
  public PlaintextType $message;
  public MessageType $message_type;
  public SigningAlgorithmSpec $signing_algorithm;

  public function __construct(shape(
  ?'grant_tokens' => GrantTokenList,
  ?'key_id' => KeyIdType,
  ?'message' => PlaintextType,
  ?'message_type' => MessageType,
  ?'signing_algorithm' => SigningAlgorithmSpec,
  ) $s = shape()) {
    $this->grant_tokens = $grant_tokens ?? [];
    $this->key_id = $key_id ?? "";
    $this->message = $message ?? "";
    $this->message_type = $message_type ?? "";
    $this->signing_algorithm = $signing_algorithm ?? "";
  }
}

class SignResponse {
  public KeyIdType $key_id;
  public CiphertextType $signature;
  public SigningAlgorithmSpec $signing_algorithm;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ?'signature' => CiphertextType,
  ?'signing_algorithm' => SigningAlgorithmSpec,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
    $this->signature = $signature ?? "";
    $this->signing_algorithm = $signing_algorithm ?? "";
  }
}

type SigningAlgorithmSpec = string;

type SigningAlgorithmSpecList = vec<SigningAlgorithmSpec>;

class Tag {
  public TagKeyType $tag_key;
  public TagValueType $tag_value;

  public function __construct(shape(
  ?'tag_key' => TagKeyType,
  ?'tag_value' => TagValueType,
  ) $s = shape()) {
    $this->tag_key = $tag_key ?? "";
    $this->tag_value = $tag_value ?? "";
  }
}

class TagException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type TagKeyList = vec<TagKeyType>;

type TagKeyType = string;

type TagList = vec<Tag>;

class TagResourceRequest {
  public KeyIdType $key_id;
  public TagList $tags;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
    $this->tags = $tags ?? [];
  }
}

type TagValueType = string;

type TrustAnchorCertificateType = string;

class UnsupportedOperationException {
  public ErrorMessageType $message;

  public function __construct(shape(
  ?'message' => ErrorMessageType,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UntagResourceRequest {
  public KeyIdType $key_id;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UpdateAliasRequest {
  public AliasNameType $alias_name;
  public KeyIdType $target_key_id;

  public function __construct(shape(
  ?'alias_name' => AliasNameType,
  ?'target_key_id' => KeyIdType,
  ) $s = shape()) {
    $this->alias_name = $alias_name ?? "";
    $this->target_key_id = $target_key_id ?? "";
  }
}

class UpdateCustomKeyStoreRequest {
  public CloudHsmClusterIdType $cloud_hsm_cluster_id;
  public CustomKeyStoreIdType $custom_key_store_id;
  public KeyStorePasswordType $key_store_password;
  public CustomKeyStoreNameType $new_custom_key_store_name;

  public function __construct(shape(
  ?'cloud_hsm_cluster_id' => CloudHsmClusterIdType,
  ?'custom_key_store_id' => CustomKeyStoreIdType,
  ?'key_store_password' => KeyStorePasswordType,
  ?'new_custom_key_store_name' => CustomKeyStoreNameType,
  ) $s = shape()) {
    $this->cloud_hsm_cluster_id = $cloud_hsm_cluster_id ?? "";
    $this->custom_key_store_id = $custom_key_store_id ?? "";
    $this->key_store_password = $key_store_password ?? "";
    $this->new_custom_key_store_name = $new_custom_key_store_name ?? "";
  }
}

class UpdateCustomKeyStoreResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateKeyDescriptionRequest {
  public DescriptionType $description;
  public KeyIdType $key_id;

  public function __construct(shape(
  ?'description' => DescriptionType,
  ?'key_id' => KeyIdType,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->key_id = $key_id ?? "";
  }
}

class VerifyRequest {
  public GrantTokenList $grant_tokens;
  public KeyIdType $key_id;
  public PlaintextType $message;
  public MessageType $message_type;
  public CiphertextType $signature;
  public SigningAlgorithmSpec $signing_algorithm;

  public function __construct(shape(
  ?'grant_tokens' => GrantTokenList,
  ?'key_id' => KeyIdType,
  ?'message' => PlaintextType,
  ?'message_type' => MessageType,
  ?'signature' => CiphertextType,
  ?'signing_algorithm' => SigningAlgorithmSpec,
  ) $s = shape()) {
    $this->grant_tokens = $grant_tokens ?? [];
    $this->key_id = $key_id ?? "";
    $this->message = $message ?? "";
    $this->message_type = $message_type ?? "";
    $this->signature = $signature ?? "";
    $this->signing_algorithm = $signing_algorithm ?? "";
  }
}

class VerifyResponse {
  public KeyIdType $key_id;
  public BooleanType $signature_valid;
  public SigningAlgorithmSpec $signing_algorithm;

  public function __construct(shape(
  ?'key_id' => KeyIdType,
  ?'signature_valid' => BooleanType,
  ?'signing_algorithm' => SigningAlgorithmSpec,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
    $this->signature_valid = $signature_valid ?? false;
    $this->signing_algorithm = $signing_algorithm ?? "";
  }
}

type WrappingKeySpec = string;


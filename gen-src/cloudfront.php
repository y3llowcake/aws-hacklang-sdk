<?hh // strict
namespace slack\aws\cloudfront;

interface CloudFront {
  public function CreateCloudFrontOriginAccessIdentity2019_03_26(CreateCloudFrontOriginAccessIdentityRequest): Awaitable<Errors\Result<CreateCloudFrontOriginAccessIdentityResult>>;
  public function CreateDistribution2019_03_26(CreateDistributionRequest): Awaitable<Errors\Result<CreateDistributionResult>>;
  public function CreateDistributionWithTags2019_03_26(CreateDistributionWithTagsRequest): Awaitable<Errors\Result<CreateDistributionWithTagsResult>>;
  public function CreateFieldLevelEncryptionConfig2019_03_26(CreateFieldLevelEncryptionConfigRequest): Awaitable<Errors\Result<CreateFieldLevelEncryptionConfigResult>>;
  public function CreateFieldLevelEncryptionProfile2019_03_26(CreateFieldLevelEncryptionProfileRequest): Awaitable<Errors\Result<CreateFieldLevelEncryptionProfileResult>>;
  public function CreateInvalidation2019_03_26(CreateInvalidationRequest): Awaitable<Errors\Result<CreateInvalidationResult>>;
  public function CreatePublicKey2019_03_26(CreatePublicKeyRequest): Awaitable<Errors\Result<CreatePublicKeyResult>>;
  public function CreateStreamingDistribution2019_03_26(CreateStreamingDistributionRequest): Awaitable<Errors\Result<CreateStreamingDistributionResult>>;
  public function CreateStreamingDistributionWithTags2019_03_26(CreateStreamingDistributionWithTagsRequest): Awaitable<Errors\Result<CreateStreamingDistributionWithTagsResult>>;
  public function DeleteCloudFrontOriginAccessIdentity2019_03_26(DeleteCloudFrontOriginAccessIdentityRequest): Awaitable<Errors\Error>;
  public function DeleteDistribution2019_03_26(DeleteDistributionRequest): Awaitable<Errors\Error>;
  public function DeleteFieldLevelEncryptionConfig2019_03_26(DeleteFieldLevelEncryptionConfigRequest): Awaitable<Errors\Error>;
  public function DeleteFieldLevelEncryptionProfile2019_03_26(DeleteFieldLevelEncryptionProfileRequest): Awaitable<Errors\Error>;
  public function DeletePublicKey2019_03_26(DeletePublicKeyRequest): Awaitable<Errors\Error>;
  public function DeleteStreamingDistribution2019_03_26(DeleteStreamingDistributionRequest): Awaitable<Errors\Error>;
  public function GetCloudFrontOriginAccessIdentity2019_03_26(GetCloudFrontOriginAccessIdentityRequest): Awaitable<Errors\Result<GetCloudFrontOriginAccessIdentityResult>>;
  public function GetCloudFrontOriginAccessIdentityConfig2019_03_26(GetCloudFrontOriginAccessIdentityConfigRequest): Awaitable<Errors\Result<GetCloudFrontOriginAccessIdentityConfigResult>>;
  public function GetDistribution2019_03_26(GetDistributionRequest): Awaitable<Errors\Result<GetDistributionResult>>;
  public function GetDistributionConfig2019_03_26(GetDistributionConfigRequest): Awaitable<Errors\Result<GetDistributionConfigResult>>;
  public function GetFieldLevelEncryption2019_03_26(GetFieldLevelEncryptionRequest): Awaitable<Errors\Result<GetFieldLevelEncryptionResult>>;
  public function GetFieldLevelEncryptionConfig2019_03_26(GetFieldLevelEncryptionConfigRequest): Awaitable<Errors\Result<GetFieldLevelEncryptionConfigResult>>;
  public function GetFieldLevelEncryptionProfile2019_03_26(GetFieldLevelEncryptionProfileRequest): Awaitable<Errors\Result<GetFieldLevelEncryptionProfileResult>>;
  public function GetFieldLevelEncryptionProfileConfig2019_03_26(GetFieldLevelEncryptionProfileConfigRequest): Awaitable<Errors\Result<GetFieldLevelEncryptionProfileConfigResult>>;
  public function GetInvalidation2019_03_26(GetInvalidationRequest): Awaitable<Errors\Result<GetInvalidationResult>>;
  public function GetPublicKey2019_03_26(GetPublicKeyRequest): Awaitable<Errors\Result<GetPublicKeyResult>>;
  public function GetPublicKeyConfig2019_03_26(GetPublicKeyConfigRequest): Awaitable<Errors\Result<GetPublicKeyConfigResult>>;
  public function GetStreamingDistribution2019_03_26(GetStreamingDistributionRequest): Awaitable<Errors\Result<GetStreamingDistributionResult>>;
  public function GetStreamingDistributionConfig2019_03_26(GetStreamingDistributionConfigRequest): Awaitable<Errors\Result<GetStreamingDistributionConfigResult>>;
  public function ListCloudFrontOriginAccessIdentities2019_03_26(ListCloudFrontOriginAccessIdentitiesRequest): Awaitable<Errors\Result<ListCloudFrontOriginAccessIdentitiesResult>>;
  public function ListDistributions2019_03_26(ListDistributionsRequest): Awaitable<Errors\Result<ListDistributionsResult>>;
  public function ListDistributionsByWebACLId2019_03_26(ListDistributionsByWebACLIdRequest): Awaitable<Errors\Result<ListDistributionsByWebACLIdResult>>;
  public function ListFieldLevelEncryptionConfigs2019_03_26(ListFieldLevelEncryptionConfigsRequest): Awaitable<Errors\Result<ListFieldLevelEncryptionConfigsResult>>;
  public function ListFieldLevelEncryptionProfiles2019_03_26(ListFieldLevelEncryptionProfilesRequest): Awaitable<Errors\Result<ListFieldLevelEncryptionProfilesResult>>;
  public function ListInvalidations2019_03_26(ListInvalidationsRequest): Awaitable<Errors\Result<ListInvalidationsResult>>;
  public function ListPublicKeys2019_03_26(ListPublicKeysRequest): Awaitable<Errors\Result<ListPublicKeysResult>>;
  public function ListStreamingDistributions2019_03_26(ListStreamingDistributionsRequest): Awaitable<Errors\Result<ListStreamingDistributionsResult>>;
  public function ListTagsForResource2019_03_26(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResult>>;
  public function TagResource2019_03_26(TagResourceRequest): Awaitable<Errors\Error>;
  public function UntagResource2019_03_26(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateCloudFrontOriginAccessIdentity2019_03_26(UpdateCloudFrontOriginAccessIdentityRequest): Awaitable<Errors\Result<UpdateCloudFrontOriginAccessIdentityResult>>;
  public function UpdateDistribution2019_03_26(UpdateDistributionRequest): Awaitable<Errors\Result<UpdateDistributionResult>>;
  public function UpdateFieldLevelEncryptionConfig2019_03_26(UpdateFieldLevelEncryptionConfigRequest): Awaitable<Errors\Result<UpdateFieldLevelEncryptionConfigResult>>;
  public function UpdateFieldLevelEncryptionProfile2019_03_26(UpdateFieldLevelEncryptionProfileRequest): Awaitable<Errors\Result<UpdateFieldLevelEncryptionProfileResult>>;
  public function UpdatePublicKey2019_03_26(UpdatePublicKeyRequest): Awaitable<Errors\Result<UpdatePublicKeyResult>>;
  public function UpdateStreamingDistribution2019_03_26(UpdateStreamingDistributionRequest): Awaitable<Errors\Result<UpdateStreamingDistributionResult>>;
}

class AccessDenied {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ActiveTrustedSigners {
  public boolean $enabled;
  public SignerList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'enabled' => boolean,
  ?'items' => SignerList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->enabled = $enabled ?? ;
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class AliasICPRecordal {
  public string $cname;
  public ICPRecordalStatus $icp_recordal_status;

  public function __construct(shape(
  ?'cname' => string,
  ?'icp_recordal_status' => ICPRecordalStatus,
  ) $s = shape()) {
    $this->cname = $cname ?? ;
    $this->icp_recordal_status = $icp_recordal_status ?? "";
  }
}

type AliasICPRecordals = vec<AliasICPRecordal>;

type AliasList = vec<string>;

class Aliases {
  public AliasList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => AliasList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class AllowedMethods {
  public CachedMethods $cached_methods;
  public MethodsList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'cached_methods' => CachedMethods,
  ?'items' => MethodsList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->cached_methods = $cached_methods ?? null;
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

type AwsAccountNumberList = vec<string>;

class BatchTooLarge {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class CNAMEAlreadyExists {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class CacheBehavior {
  public AllowedMethods $allowed_methods;
  public boolean $compress;
  public long $default_ttl;
  public string $field_level_encryption_id;
  public ForwardedValues $forwarded_values;
  public LambdaFunctionAssociations $lambda_function_associations;
  public long $max_ttl;
  public long $min_ttl;
  public string $path_pattern;
  public boolean $smooth_streaming;
  public string $target_origin_id;
  public TrustedSigners $trusted_signers;
  public ViewerProtocolPolicy $viewer_protocol_policy;

  public function __construct(shape(
  ?'allowed_methods' => AllowedMethods,
  ?'compress' => boolean,
  ?'default_ttl' => long,
  ?'field_level_encryption_id' => string,
  ?'forwarded_values' => ForwardedValues,
  ?'lambda_function_associations' => LambdaFunctionAssociations,
  ?'max_ttl' => long,
  ?'min_ttl' => long,
  ?'path_pattern' => string,
  ?'smooth_streaming' => boolean,
  ?'target_origin_id' => string,
  ?'trusted_signers' => TrustedSigners,
  ?'viewer_protocol_policy' => ViewerProtocolPolicy,
  ) $s = shape()) {
    $this->allowed_methods = $allowed_methods ?? null;
    $this->compress = $compress ?? ;
    $this->default_ttl = $default_ttl ?? ;
    $this->field_level_encryption_id = $field_level_encryption_id ?? ;
    $this->forwarded_values = $forwarded_values ?? null;
    $this->lambda_function_associations = $lambda_function_associations ?? null;
    $this->max_ttl = $max_ttl ?? ;
    $this->min_ttl = $min_ttl ?? ;
    $this->path_pattern = $path_pattern ?? ;
    $this->smooth_streaming = $smooth_streaming ?? ;
    $this->target_origin_id = $target_origin_id ?? ;
    $this->trusted_signers = $trusted_signers ?? null;
    $this->viewer_protocol_policy = $viewer_protocol_policy ?? "";
  }
}

type CacheBehaviorList = vec<CacheBehavior>;

class CacheBehaviors {
  public CacheBehaviorList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => CacheBehaviorList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class CachedMethods {
  public MethodsList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => MethodsList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class CannotChangeImmutablePublicKeyFields {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type CertificateSource = string;

class CloudFrontOriginAccessIdentity {
  public CloudFrontOriginAccessIdentityConfig $cloud_front_origin_access_identity_config;
  public string $id;
  public string $s_3_canonical_user_id;

  public function __construct(shape(
  ?'cloud_front_origin_access_identity_config' => CloudFrontOriginAccessIdentityConfig,
  ?'id' => string,
  ?'s_3_canonical_user_id' => string,
  ) $s = shape()) {
    $this->cloud_front_origin_access_identity_config = $cloud_front_origin_access_identity_config ?? null;
    $this->id = $id ?? ;
    $this->s_3_canonical_user_id = $s_3_canonical_user_id ?? ;
  }
}

class CloudFrontOriginAccessIdentityAlreadyExists {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class CloudFrontOriginAccessIdentityConfig {
  public string $caller_reference;
  public string $comment;

  public function __construct(shape(
  ?'caller_reference' => string,
  ?'comment' => string,
  ) $s = shape()) {
    $this->caller_reference = $caller_reference ?? ;
    $this->comment = $comment ?? ;
  }
}

class CloudFrontOriginAccessIdentityInUse {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class CloudFrontOriginAccessIdentityList {
  public boolean $is_truncated;
  public CloudFrontOriginAccessIdentitySummaryList $items;
  public string $marker;
  public integer $max_items;
  public string $next_marker;
  public integer $quantity;

  public function __construct(shape(
  ?'is_truncated' => boolean,
  ?'items' => CloudFrontOriginAccessIdentitySummaryList,
  ?'marker' => string,
  ?'max_items' => integer,
  ?'next_marker' => string,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? ;
    $this->items = $items ?? ;
    $this->marker = $marker ?? ;
    $this->max_items = $max_items ?? ;
    $this->next_marker = $next_marker ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class CloudFrontOriginAccessIdentitySummary {
  public string $comment;
  public string $id;
  public string $s_3_canonical_user_id;

  public function __construct(shape(
  ?'comment' => string,
  ?'id' => string,
  ?'s_3_canonical_user_id' => string,
  ) $s = shape()) {
    $this->comment = $comment ?? ;
    $this->id = $id ?? ;
    $this->s_3_canonical_user_id = $s_3_canonical_user_id ?? ;
  }
}

type CloudFrontOriginAccessIdentitySummaryList = vec<CloudFrontOriginAccessIdentitySummary>;

type CommentType = string;

class ContentTypeProfile {
  public string $content_type;
  public Format $format;
  public string $profile_id;

  public function __construct(shape(
  ?'content_type' => string,
  ?'format' => Format,
  ?'profile_id' => string,
  ) $s = shape()) {
    $this->content_type = $content_type ?? ;
    $this->format = $format ?? "";
    $this->profile_id = $profile_id ?? ;
  }
}

class ContentTypeProfileConfig {
  public ContentTypeProfiles $content_type_profiles;
  public boolean $forward_when_content_type_is_unknown;

  public function __construct(shape(
  ?'content_type_profiles' => ContentTypeProfiles,
  ?'forward_when_content_type_is_unknown' => boolean,
  ) $s = shape()) {
    $this->content_type_profiles = $content_type_profiles ?? null;
    $this->forward_when_content_type_is_unknown = $forward_when_content_type_is_unknown ?? ;
  }
}

type ContentTypeProfileList = vec<ContentTypeProfile>;

class ContentTypeProfiles {
  public ContentTypeProfileList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => ContentTypeProfileList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

type CookieNameList = vec<string>;

class CookieNames {
  public CookieNameList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => CookieNameList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class CookiePreference {
  public ItemSelection $forward;
  public CookieNames $whitelisted_names;

  public function __construct(shape(
  ?'forward' => ItemSelection,
  ?'whitelisted_names' => CookieNames,
  ) $s = shape()) {
    $this->forward = $forward ?? ;
    $this->whitelisted_names = $whitelisted_names ?? ;
  }
}

class CreateCloudFrontOriginAccessIdentityRequest {
  public CloudFrontOriginAccessIdentityConfig $cloud_front_origin_access_identity_config;

  public function __construct(shape(
  ?'cloud_front_origin_access_identity_config' => CloudFrontOriginAccessIdentityConfig,
  ) $s = shape()) {
    $this->cloud_front_origin_access_identity_config = $cloud_front_origin_access_identity_config ?? null;
  }
}

class CreateCloudFrontOriginAccessIdentityResult {
  public CloudFrontOriginAccessIdentity $cloud_front_origin_access_identity;
  public string $e_tag;
  public string $location;

  public function __construct(shape(
  ?'cloud_front_origin_access_identity' => CloudFrontOriginAccessIdentity,
  ?'e_tag' => string,
  ?'location' => string,
  ) $s = shape()) {
    $this->cloud_front_origin_access_identity = $cloud_front_origin_access_identity ?? null;
    $this->e_tag = $e_tag ?? ;
    $this->location = $location ?? ;
  }
}

class CreateDistributionRequest {
  public DistributionConfig $distribution_config;

  public function __construct(shape(
  ?'distribution_config' => DistributionConfig,
  ) $s = shape()) {
    $this->distribution_config = $distribution_config ?? null;
  }
}

class CreateDistributionResult {
  public Distribution $distribution;
  public string $e_tag;
  public string $location;

  public function __construct(shape(
  ?'distribution' => Distribution,
  ?'e_tag' => string,
  ?'location' => string,
  ) $s = shape()) {
    $this->distribution = $distribution ?? null;
    $this->e_tag = $e_tag ?? ;
    $this->location = $location ?? ;
  }
}

class CreateDistributionWithTagsRequest {
  public DistributionConfigWithTags $distribution_config_with_tags;

  public function __construct(shape(
  ?'distribution_config_with_tags' => DistributionConfigWithTags,
  ) $s = shape()) {
    $this->distribution_config_with_tags = $distribution_config_with_tags ?? null;
  }
}

class CreateDistributionWithTagsResult {
  public Distribution $distribution;
  public string $e_tag;
  public string $location;

  public function __construct(shape(
  ?'distribution' => Distribution,
  ?'e_tag' => string,
  ?'location' => string,
  ) $s = shape()) {
    $this->distribution = $distribution ?? null;
    $this->e_tag = $e_tag ?? ;
    $this->location = $location ?? ;
  }
}

class CreateFieldLevelEncryptionConfigRequest {
  public FieldLevelEncryptionConfig $field_level_encryption_config;

  public function __construct(shape(
  ?'field_level_encryption_config' => FieldLevelEncryptionConfig,
  ) $s = shape()) {
    $this->field_level_encryption_config = $field_level_encryption_config ?? null;
  }
}

class CreateFieldLevelEncryptionConfigResult {
  public string $e_tag;
  public FieldLevelEncryption $field_level_encryption;
  public string $location;

  public function __construct(shape(
  ?'e_tag' => string,
  ?'field_level_encryption' => FieldLevelEncryption,
  ?'location' => string,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->field_level_encryption = $field_level_encryption ?? null;
    $this->location = $location ?? ;
  }
}

class CreateFieldLevelEncryptionProfileRequest {
  public FieldLevelEncryptionProfileConfig $field_level_encryption_profile_config;

  public function __construct(shape(
  ?'field_level_encryption_profile_config' => FieldLevelEncryptionProfileConfig,
  ) $s = shape()) {
    $this->field_level_encryption_profile_config = $field_level_encryption_profile_config ?? null;
  }
}

class CreateFieldLevelEncryptionProfileResult {
  public string $e_tag;
  public FieldLevelEncryptionProfile $field_level_encryption_profile;
  public string $location;

  public function __construct(shape(
  ?'e_tag' => string,
  ?'field_level_encryption_profile' => FieldLevelEncryptionProfile,
  ?'location' => string,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->field_level_encryption_profile = $field_level_encryption_profile ?? null;
    $this->location = $location ?? ;
  }
}

class CreateInvalidationRequest {
  public string $distribution_id;
  public InvalidationBatch $invalidation_batch;

  public function __construct(shape(
  ?'distribution_id' => string,
  ?'invalidation_batch' => InvalidationBatch,
  ) $s = shape()) {
    $this->distribution_id = $distribution_id ?? ;
    $this->invalidation_batch = $invalidation_batch ?? null;
  }
}

class CreateInvalidationResult {
  public Invalidation $invalidation;
  public string $location;

  public function __construct(shape(
  ?'invalidation' => Invalidation,
  ?'location' => string,
  ) $s = shape()) {
    $this->invalidation = $invalidation ?? null;
    $this->location = $location ?? ;
  }
}

class CreatePublicKeyRequest {
  public PublicKeyConfig $public_key_config;

  public function __construct(shape(
  ?'public_key_config' => PublicKeyConfig,
  ) $s = shape()) {
    $this->public_key_config = $public_key_config ?? null;
  }
}

class CreatePublicKeyResult {
  public string $e_tag;
  public string $location;
  public PublicKey $public_key;

  public function __construct(shape(
  ?'e_tag' => string,
  ?'location' => string,
  ?'public_key' => PublicKey,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->location = $location ?? ;
    $this->public_key = $public_key ?? null;
  }
}

class CreateStreamingDistributionRequest {
  public StreamingDistributionConfig $streaming_distribution_config;

  public function __construct(shape(
  ?'streaming_distribution_config' => StreamingDistributionConfig,
  ) $s = shape()) {
    $this->streaming_distribution_config = $streaming_distribution_config ?? null;
  }
}

class CreateStreamingDistributionResult {
  public string $e_tag;
  public string $location;
  public StreamingDistribution $streaming_distribution;

  public function __construct(shape(
  ?'e_tag' => string,
  ?'location' => string,
  ?'streaming_distribution' => StreamingDistribution,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->location = $location ?? ;
    $this->streaming_distribution = $streaming_distribution ?? null;
  }
}

class CreateStreamingDistributionWithTagsRequest {
  public StreamingDistributionConfigWithTags $streaming_distribution_config_with_tags;

  public function __construct(shape(
  ?'streaming_distribution_config_with_tags' => StreamingDistributionConfigWithTags,
  ) $s = shape()) {
    $this->streaming_distribution_config_with_tags = $streaming_distribution_config_with_tags ?? null;
  }
}

class CreateStreamingDistributionWithTagsResult {
  public string $e_tag;
  public string $location;
  public StreamingDistribution $streaming_distribution;

  public function __construct(shape(
  ?'e_tag' => string,
  ?'location' => string,
  ?'streaming_distribution' => StreamingDistribution,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->location = $location ?? ;
    $this->streaming_distribution = $streaming_distribution ?? null;
  }
}

class CustomErrorResponse {
  public long $error_caching_min_ttl;
  public integer $error_code;
  public string $response_code;
  public string $response_page_path;

  public function __construct(shape(
  ?'error_caching_min_ttl' => long,
  ?'error_code' => integer,
  ?'response_code' => string,
  ?'response_page_path' => string,
  ) $s = shape()) {
    $this->error_caching_min_ttl = $error_caching_min_ttl ?? ;
    $this->error_code = $error_code ?? ;
    $this->response_code = $response_code ?? ;
    $this->response_page_path = $response_page_path ?? ;
  }
}

type CustomErrorResponseList = vec<CustomErrorResponse>;

class CustomErrorResponses {
  public CustomErrorResponseList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => CustomErrorResponseList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class CustomHeaders {
  public OriginCustomHeadersList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => OriginCustomHeadersList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class CustomOriginConfig {
  public integer $http_port;
  public integer $https_port;
  public integer $origin_keepalive_timeout;
  public OriginProtocolPolicy $origin_protocol_policy;
  public integer $origin_read_timeout;
  public OriginSslProtocols $origin_ssl_protocols;

  public function __construct(shape(
  ?'http_port' => integer,
  ?'https_port' => integer,
  ?'origin_keepalive_timeout' => integer,
  ?'origin_protocol_policy' => OriginProtocolPolicy,
  ?'origin_read_timeout' => integer,
  ?'origin_ssl_protocols' => OriginSslProtocols,
  ) $s = shape()) {
    $this->http_port = $http_port ?? ;
    $this->https_port = $https_port ?? ;
    $this->origin_keepalive_timeout = $origin_keepalive_timeout ?? ;
    $this->origin_protocol_policy = $origin_protocol_policy ?? "";
    $this->origin_read_timeout = $origin_read_timeout ?? ;
    $this->origin_ssl_protocols = $origin_ssl_protocols ?? null;
  }
}

class DefaultCacheBehavior {
  public AllowedMethods $allowed_methods;
  public boolean $compress;
  public long $default_ttl;
  public string $field_level_encryption_id;
  public ForwardedValues $forwarded_values;
  public LambdaFunctionAssociations $lambda_function_associations;
  public long $max_ttl;
  public long $min_ttl;
  public boolean $smooth_streaming;
  public string $target_origin_id;
  public TrustedSigners $trusted_signers;
  public ViewerProtocolPolicy $viewer_protocol_policy;

  public function __construct(shape(
  ?'allowed_methods' => AllowedMethods,
  ?'compress' => boolean,
  ?'default_ttl' => long,
  ?'field_level_encryption_id' => string,
  ?'forwarded_values' => ForwardedValues,
  ?'lambda_function_associations' => LambdaFunctionAssociations,
  ?'max_ttl' => long,
  ?'min_ttl' => long,
  ?'smooth_streaming' => boolean,
  ?'target_origin_id' => string,
  ?'trusted_signers' => TrustedSigners,
  ?'viewer_protocol_policy' => ViewerProtocolPolicy,
  ) $s = shape()) {
    $this->allowed_methods = $allowed_methods ?? null;
    $this->compress = $compress ?? ;
    $this->default_ttl = $default_ttl ?? ;
    $this->field_level_encryption_id = $field_level_encryption_id ?? ;
    $this->forwarded_values = $forwarded_values ?? null;
    $this->lambda_function_associations = $lambda_function_associations ?? null;
    $this->max_ttl = $max_ttl ?? ;
    $this->min_ttl = $min_ttl ?? ;
    $this->smooth_streaming = $smooth_streaming ?? ;
    $this->target_origin_id = $target_origin_id ?? ;
    $this->trusted_signers = $trusted_signers ?? null;
    $this->viewer_protocol_policy = $viewer_protocol_policy ?? "";
  }
}

class DeleteCloudFrontOriginAccessIdentityRequest {
  public string $id;
  public string $if_match;

  public function __construct(shape(
  ?'id' => string,
  ?'if_match' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->if_match = $if_match ?? ;
  }
}

class DeleteDistributionRequest {
  public string $id;
  public string $if_match;

  public function __construct(shape(
  ?'id' => string,
  ?'if_match' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->if_match = $if_match ?? ;
  }
}

class DeleteFieldLevelEncryptionConfigRequest {
  public string $id;
  public string $if_match;

  public function __construct(shape(
  ?'id' => string,
  ?'if_match' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->if_match = $if_match ?? ;
  }
}

class DeleteFieldLevelEncryptionProfileRequest {
  public string $id;
  public string $if_match;

  public function __construct(shape(
  ?'id' => string,
  ?'if_match' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->if_match = $if_match ?? ;
  }
}

class DeletePublicKeyRequest {
  public string $id;
  public string $if_match;

  public function __construct(shape(
  ?'id' => string,
  ?'if_match' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->if_match = $if_match ?? ;
  }
}

class DeleteStreamingDistributionRequest {
  public string $id;
  public string $if_match;

  public function __construct(shape(
  ?'id' => string,
  ?'if_match' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->if_match = $if_match ?? ;
  }
}

class Distribution {
  public string $arn;
  public ActiveTrustedSigners $active_trusted_signers;
  public AliasICPRecordals $alias_icp_recordals;
  public DistributionConfig $distribution_config;
  public string $domain_name;
  public string $id;
  public integer $in_progress_invalidation_batches;
  public timestamp $last_modified_time;
  public string $status;

  public function __construct(shape(
  ?'arn' => string,
  ?'active_trusted_signers' => ActiveTrustedSigners,
  ?'alias_icp_recordals' => AliasICPRecordals,
  ?'distribution_config' => DistributionConfig,
  ?'domain_name' => string,
  ?'id' => string,
  ?'in_progress_invalidation_batches' => integer,
  ?'last_modified_time' => timestamp,
  ?'status' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->active_trusted_signers = $active_trusted_signers ?? null;
    $this->alias_icp_recordals = $alias_icp_recordals ?? [];
    $this->distribution_config = $distribution_config ?? null;
    $this->domain_name = $domain_name ?? ;
    $this->id = $id ?? ;
    $this->in_progress_invalidation_batches = $in_progress_invalidation_batches ?? ;
    $this->last_modified_time = $last_modified_time ?? ;
    $this->status = $status ?? ;
  }
}

class DistributionAlreadyExists {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class DistributionConfig {
  public Aliases $aliases;
  public CacheBehaviors $cache_behaviors;
  public string $caller_reference;
  public CommentType $comment;
  public CustomErrorResponses $custom_error_responses;
  public DefaultCacheBehavior $default_cache_behavior;
  public string $default_root_object;
  public boolean $enabled;
  public HttpVersion $http_version;
  public boolean $is_ipv_6_enabled;
  public LoggingConfig $logging;
  public OriginGroups $origin_groups;
  public Origins $origins;
  public PriceClass $price_class;
  public Restrictions $restrictions;
  public ViewerCertificate $viewer_certificate;
  public string $web_acl_id;

  public function __construct(shape(
  ?'aliases' => Aliases,
  ?'cache_behaviors' => CacheBehaviors,
  ?'caller_reference' => string,
  ?'comment' => CommentType,
  ?'custom_error_responses' => CustomErrorResponses,
  ?'default_cache_behavior' => DefaultCacheBehavior,
  ?'default_root_object' => string,
  ?'enabled' => boolean,
  ?'http_version' => HttpVersion,
  ?'is_ipv_6_enabled' => boolean,
  ?'logging' => LoggingConfig,
  ?'origin_groups' => OriginGroups,
  ?'origins' => Origins,
  ?'price_class' => PriceClass,
  ?'restrictions' => Restrictions,
  ?'viewer_certificate' => ViewerCertificate,
  ?'web_acl_id' => string,
  ) $s = shape()) {
    $this->aliases = $aliases ?? null;
    $this->cache_behaviors = $cache_behaviors ?? null;
    $this->caller_reference = $caller_reference ?? ;
    $this->comment = $comment ?? ;
    $this->custom_error_responses = $custom_error_responses ?? null;
    $this->default_cache_behavior = $default_cache_behavior ?? null;
    $this->default_root_object = $default_root_object ?? ;
    $this->enabled = $enabled ?? ;
    $this->http_version = $http_version ?? "";
    $this->is_ipv_6_enabled = $is_ipv_6_enabled ?? ;
    $this->logging = $logging ?? ;
    $this->origin_groups = $origin_groups ?? null;
    $this->origins = $origins ?? null;
    $this->price_class = $price_class ?? "";
    $this->restrictions = $restrictions ?? null;
    $this->viewer_certificate = $viewer_certificate ?? null;
    $this->web_acl_id = $web_acl_id ?? ;
  }
}

class DistributionConfigWithTags {
  public DistributionConfig $distribution_config;
  public Tags $tags;

  public function __construct(shape(
  ?'distribution_config' => DistributionConfig,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->distribution_config = $distribution_config ?? null;
    $this->tags = $tags ?? null;
  }
}

class DistributionList {
  public boolean $is_truncated;
  public DistributionSummaryList $items;
  public string $marker;
  public integer $max_items;
  public string $next_marker;
  public integer $quantity;

  public function __construct(shape(
  ?'is_truncated' => boolean,
  ?'items' => DistributionSummaryList,
  ?'marker' => string,
  ?'max_items' => integer,
  ?'next_marker' => string,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? ;
    $this->items = $items ?? ;
    $this->marker = $marker ?? ;
    $this->max_items = $max_items ?? ;
    $this->next_marker = $next_marker ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class DistributionNotDisabled {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class DistributionSummary {
  public string $arn;
  public AliasICPRecordals $alias_icp_recordals;
  public Aliases $aliases;
  public CacheBehaviors $cache_behaviors;
  public string $comment;
  public CustomErrorResponses $custom_error_responses;
  public DefaultCacheBehavior $default_cache_behavior;
  public string $domain_name;
  public boolean $enabled;
  public HttpVersion $http_version;
  public string $id;
  public boolean $is_ipv_6_enabled;
  public timestamp $last_modified_time;
  public OriginGroups $origin_groups;
  public Origins $origins;
  public PriceClass $price_class;
  public Restrictions $restrictions;
  public string $status;
  public ViewerCertificate $viewer_certificate;
  public string $web_acl_id;

  public function __construct(shape(
  ?'arn' => string,
  ?'alias_icp_recordals' => AliasICPRecordals,
  ?'aliases' => Aliases,
  ?'cache_behaviors' => CacheBehaviors,
  ?'comment' => string,
  ?'custom_error_responses' => CustomErrorResponses,
  ?'default_cache_behavior' => DefaultCacheBehavior,
  ?'domain_name' => string,
  ?'enabled' => boolean,
  ?'http_version' => HttpVersion,
  ?'id' => string,
  ?'is_ipv_6_enabled' => boolean,
  ?'last_modified_time' => timestamp,
  ?'origin_groups' => OriginGroups,
  ?'origins' => Origins,
  ?'price_class' => PriceClass,
  ?'restrictions' => Restrictions,
  ?'status' => string,
  ?'viewer_certificate' => ViewerCertificate,
  ?'web_acl_id' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->alias_icp_recordals = $alias_icp_recordals ?? [];
    $this->aliases = $aliases ?? null;
    $this->cache_behaviors = $cache_behaviors ?? null;
    $this->comment = $comment ?? ;
    $this->custom_error_responses = $custom_error_responses ?? null;
    $this->default_cache_behavior = $default_cache_behavior ?? null;
    $this->domain_name = $domain_name ?? ;
    $this->enabled = $enabled ?? ;
    $this->http_version = $http_version ?? "";
    $this->id = $id ?? ;
    $this->is_ipv_6_enabled = $is_ipv_6_enabled ?? ;
    $this->last_modified_time = $last_modified_time ?? ;
    $this->origin_groups = $origin_groups ?? null;
    $this->origins = $origins ?? null;
    $this->price_class = $price_class ?? "";
    $this->restrictions = $restrictions ?? null;
    $this->status = $status ?? ;
    $this->viewer_certificate = $viewer_certificate ?? null;
    $this->web_acl_id = $web_acl_id ?? ;
  }
}

type DistributionSummaryList = vec<DistributionSummary>;

class EncryptionEntities {
  public EncryptionEntityList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => EncryptionEntityList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class EncryptionEntity {
  public FieldPatterns $field_patterns;
  public string $provider_id;
  public string $public_key_id;

  public function __construct(shape(
  ?'field_patterns' => FieldPatterns,
  ?'provider_id' => string,
  ?'public_key_id' => string,
  ) $s = shape()) {
    $this->field_patterns = $field_patterns ?? null;
    $this->provider_id = $provider_id ?? ;
    $this->public_key_id = $public_key_id ?? ;
  }
}

type EncryptionEntityList = vec<EncryptionEntity>;

type EventType = string;

class FieldLevelEncryption {
  public FieldLevelEncryptionConfig $field_level_encryption_config;
  public string $id;
  public timestamp $last_modified_time;

  public function __construct(shape(
  ?'field_level_encryption_config' => FieldLevelEncryptionConfig,
  ?'id' => string,
  ?'last_modified_time' => timestamp,
  ) $s = shape()) {
    $this->field_level_encryption_config = $field_level_encryption_config ?? null;
    $this->id = $id ?? ;
    $this->last_modified_time = $last_modified_time ?? ;
  }
}

class FieldLevelEncryptionConfig {
  public string $caller_reference;
  public string $comment;
  public ContentTypeProfileConfig $content_type_profile_config;
  public QueryArgProfileConfig $query_arg_profile_config;

  public function __construct(shape(
  ?'caller_reference' => string,
  ?'comment' => string,
  ?'content_type_profile_config' => ContentTypeProfileConfig,
  ?'query_arg_profile_config' => QueryArgProfileConfig,
  ) $s = shape()) {
    $this->caller_reference = $caller_reference ?? ;
    $this->comment = $comment ?? ;
    $this->content_type_profile_config = $content_type_profile_config ?? null;
    $this->query_arg_profile_config = $query_arg_profile_config ?? null;
  }
}

class FieldLevelEncryptionConfigAlreadyExists {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class FieldLevelEncryptionConfigInUse {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class FieldLevelEncryptionList {
  public FieldLevelEncryptionSummaryList $items;
  public integer $max_items;
  public string $next_marker;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => FieldLevelEncryptionSummaryList,
  ?'max_items' => integer,
  ?'next_marker' => string,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->max_items = $max_items ?? ;
    $this->next_marker = $next_marker ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class FieldLevelEncryptionProfile {
  public FieldLevelEncryptionProfileConfig $field_level_encryption_profile_config;
  public string $id;
  public timestamp $last_modified_time;

  public function __construct(shape(
  ?'field_level_encryption_profile_config' => FieldLevelEncryptionProfileConfig,
  ?'id' => string,
  ?'last_modified_time' => timestamp,
  ) $s = shape()) {
    $this->field_level_encryption_profile_config = $field_level_encryption_profile_config ?? null;
    $this->id = $id ?? ;
    $this->last_modified_time = $last_modified_time ?? ;
  }
}

class FieldLevelEncryptionProfileAlreadyExists {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class FieldLevelEncryptionProfileConfig {
  public string $caller_reference;
  public string $comment;
  public EncryptionEntities $encryption_entities;
  public string $name;

  public function __construct(shape(
  ?'caller_reference' => string,
  ?'comment' => string,
  ?'encryption_entities' => EncryptionEntities,
  ?'name' => string,
  ) $s = shape()) {
    $this->caller_reference = $caller_reference ?? ;
    $this->comment = $comment ?? ;
    $this->encryption_entities = $encryption_entities ?? null;
    $this->name = $name ?? ;
  }
}

class FieldLevelEncryptionProfileInUse {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class FieldLevelEncryptionProfileList {
  public FieldLevelEncryptionProfileSummaryList $items;
  public integer $max_items;
  public string $next_marker;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => FieldLevelEncryptionProfileSummaryList,
  ?'max_items' => integer,
  ?'next_marker' => string,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->max_items = $max_items ?? ;
    $this->next_marker = $next_marker ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class FieldLevelEncryptionProfileSizeExceeded {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class FieldLevelEncryptionProfileSummary {
  public string $comment;
  public EncryptionEntities $encryption_entities;
  public string $id;
  public timestamp $last_modified_time;
  public string $name;

  public function __construct(shape(
  ?'comment' => string,
  ?'encryption_entities' => EncryptionEntities,
  ?'id' => string,
  ?'last_modified_time' => timestamp,
  ?'name' => string,
  ) $s = shape()) {
    $this->comment = $comment ?? ;
    $this->encryption_entities = $encryption_entities ?? null;
    $this->id = $id ?? ;
    $this->last_modified_time = $last_modified_time ?? ;
    $this->name = $name ?? ;
  }
}

type FieldLevelEncryptionProfileSummaryList = vec<FieldLevelEncryptionProfileSummary>;

class FieldLevelEncryptionSummary {
  public string $comment;
  public ContentTypeProfileConfig $content_type_profile_config;
  public string $id;
  public timestamp $last_modified_time;
  public QueryArgProfileConfig $query_arg_profile_config;

  public function __construct(shape(
  ?'comment' => string,
  ?'content_type_profile_config' => ContentTypeProfileConfig,
  ?'id' => string,
  ?'last_modified_time' => timestamp,
  ?'query_arg_profile_config' => QueryArgProfileConfig,
  ) $s = shape()) {
    $this->comment = $comment ?? ;
    $this->content_type_profile_config = $content_type_profile_config ?? null;
    $this->id = $id ?? ;
    $this->last_modified_time = $last_modified_time ?? ;
    $this->query_arg_profile_config = $query_arg_profile_config ?? null;
  }
}

type FieldLevelEncryptionSummaryList = vec<FieldLevelEncryptionSummary>;

type FieldPatternList = vec<string>;

class FieldPatterns {
  public FieldPatternList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => FieldPatternList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

type Format = string;

class ForwardedValues {
  public CookiePreference $cookies;
  public Headers $headers;
  public boolean $query_string;
  public QueryStringCacheKeys $query_string_cache_keys;

  public function __construct(shape(
  ?'cookies' => CookiePreference,
  ?'headers' => Headers,
  ?'query_string' => boolean,
  ?'query_string_cache_keys' => QueryStringCacheKeys,
  ) $s = shape()) {
    $this->cookies = $cookies ?? ;
    $this->headers = $headers ?? null;
    $this->query_string = $query_string ?? ;
    $this->query_string_cache_keys = $query_string_cache_keys ?? null;
  }
}

class GeoRestriction {
  public LocationList $items;
  public integer $quantity;
  public GeoRestrictionType $restriction_type;

  public function __construct(shape(
  ?'items' => LocationList,
  ?'quantity' => integer,
  ?'restriction_type' => GeoRestrictionType,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
    $this->restriction_type = $restriction_type ?? ;
  }
}

type GeoRestrictionType = string;

class GetCloudFrontOriginAccessIdentityConfigRequest {
  public string $id;

  public function __construct(shape(
  ?'id' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

class GetCloudFrontOriginAccessIdentityConfigResult {
  public CloudFrontOriginAccessIdentityConfig $cloud_front_origin_access_identity_config;
  public string $e_tag;

  public function __construct(shape(
  ?'cloud_front_origin_access_identity_config' => CloudFrontOriginAccessIdentityConfig,
  ?'e_tag' => string,
  ) $s = shape()) {
    $this->cloud_front_origin_access_identity_config = $cloud_front_origin_access_identity_config ?? null;
    $this->e_tag = $e_tag ?? ;
  }
}

class GetCloudFrontOriginAccessIdentityRequest {
  public string $id;

  public function __construct(shape(
  ?'id' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

class GetCloudFrontOriginAccessIdentityResult {
  public CloudFrontOriginAccessIdentity $cloud_front_origin_access_identity;
  public string $e_tag;

  public function __construct(shape(
  ?'cloud_front_origin_access_identity' => CloudFrontOriginAccessIdentity,
  ?'e_tag' => string,
  ) $s = shape()) {
    $this->cloud_front_origin_access_identity = $cloud_front_origin_access_identity ?? null;
    $this->e_tag = $e_tag ?? ;
  }
}

class GetDistributionConfigRequest {
  public string $id;

  public function __construct(shape(
  ?'id' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

class GetDistributionConfigResult {
  public DistributionConfig $distribution_config;
  public string $e_tag;

  public function __construct(shape(
  ?'distribution_config' => DistributionConfig,
  ?'e_tag' => string,
  ) $s = shape()) {
    $this->distribution_config = $distribution_config ?? null;
    $this->e_tag = $e_tag ?? ;
  }
}

class GetDistributionRequest {
  public string $id;

  public function __construct(shape(
  ?'id' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

class GetDistributionResult {
  public Distribution $distribution;
  public string $e_tag;

  public function __construct(shape(
  ?'distribution' => Distribution,
  ?'e_tag' => string,
  ) $s = shape()) {
    $this->distribution = $distribution ?? null;
    $this->e_tag = $e_tag ?? ;
  }
}

class GetFieldLevelEncryptionConfigRequest {
  public string $id;

  public function __construct(shape(
  ?'id' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

class GetFieldLevelEncryptionConfigResult {
  public string $e_tag;
  public FieldLevelEncryptionConfig $field_level_encryption_config;

  public function __construct(shape(
  ?'e_tag' => string,
  ?'field_level_encryption_config' => FieldLevelEncryptionConfig,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->field_level_encryption_config = $field_level_encryption_config ?? null;
  }
}

class GetFieldLevelEncryptionProfileConfigRequest {
  public string $id;

  public function __construct(shape(
  ?'id' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

class GetFieldLevelEncryptionProfileConfigResult {
  public string $e_tag;
  public FieldLevelEncryptionProfileConfig $field_level_encryption_profile_config;

  public function __construct(shape(
  ?'e_tag' => string,
  ?'field_level_encryption_profile_config' => FieldLevelEncryptionProfileConfig,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->field_level_encryption_profile_config = $field_level_encryption_profile_config ?? null;
  }
}

class GetFieldLevelEncryptionProfileRequest {
  public string $id;

  public function __construct(shape(
  ?'id' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

class GetFieldLevelEncryptionProfileResult {
  public string $e_tag;
  public FieldLevelEncryptionProfile $field_level_encryption_profile;

  public function __construct(shape(
  ?'e_tag' => string,
  ?'field_level_encryption_profile' => FieldLevelEncryptionProfile,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->field_level_encryption_profile = $field_level_encryption_profile ?? null;
  }
}

class GetFieldLevelEncryptionRequest {
  public string $id;

  public function __construct(shape(
  ?'id' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

class GetFieldLevelEncryptionResult {
  public string $e_tag;
  public FieldLevelEncryption $field_level_encryption;

  public function __construct(shape(
  ?'e_tag' => string,
  ?'field_level_encryption' => FieldLevelEncryption,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->field_level_encryption = $field_level_encryption ?? null;
  }
}

class GetInvalidationRequest {
  public string $distribution_id;
  public string $id;

  public function __construct(shape(
  ?'distribution_id' => string,
  ?'id' => string,
  ) $s = shape()) {
    $this->distribution_id = $distribution_id ?? ;
    $this->id = $id ?? ;
  }
}

class GetInvalidationResult {
  public Invalidation $invalidation;

  public function __construct(shape(
  ?'invalidation' => Invalidation,
  ) $s = shape()) {
    $this->invalidation = $invalidation ?? null;
  }
}

class GetPublicKeyConfigRequest {
  public string $id;

  public function __construct(shape(
  ?'id' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

class GetPublicKeyConfigResult {
  public string $e_tag;
  public PublicKeyConfig $public_key_config;

  public function __construct(shape(
  ?'e_tag' => string,
  ?'public_key_config' => PublicKeyConfig,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->public_key_config = $public_key_config ?? null;
  }
}

class GetPublicKeyRequest {
  public string $id;

  public function __construct(shape(
  ?'id' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

class GetPublicKeyResult {
  public string $e_tag;
  public PublicKey $public_key;

  public function __construct(shape(
  ?'e_tag' => string,
  ?'public_key' => PublicKey,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->public_key = $public_key ?? null;
  }
}

class GetStreamingDistributionConfigRequest {
  public string $id;

  public function __construct(shape(
  ?'id' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

class GetStreamingDistributionConfigResult {
  public string $e_tag;
  public StreamingDistributionConfig $streaming_distribution_config;

  public function __construct(shape(
  ?'e_tag' => string,
  ?'streaming_distribution_config' => StreamingDistributionConfig,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->streaming_distribution_config = $streaming_distribution_config ?? null;
  }
}

class GetStreamingDistributionRequest {
  public string $id;

  public function __construct(shape(
  ?'id' => string,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

class GetStreamingDistributionResult {
  public string $e_tag;
  public StreamingDistribution $streaming_distribution;

  public function __construct(shape(
  ?'e_tag' => string,
  ?'streaming_distribution' => StreamingDistribution,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->streaming_distribution = $streaming_distribution ?? null;
  }
}

type HeaderList = vec<string>;

class Headers {
  public HeaderList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => HeaderList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

type HttpVersion = string;

type ICPRecordalStatus = string;

class IllegalFieldLevelEncryptionConfigAssociationWithCacheBehavior {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class IllegalUpdate {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InconsistentQuantities {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidArgument {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidDefaultRootObject {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidErrorCode {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidForwardCookies {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidGeoRestrictionParameter {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidHeadersForS3Origin {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidIfMatchVersion {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidLambdaFunctionAssociation {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidLocationCode {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidMinimumProtocolVersion {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidOrigin {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidOriginAccessIdentity {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidOriginKeepaliveTimeout {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidOriginReadTimeout {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidProtocolSettings {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidQueryStringParameters {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidRelativePath {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidRequiredProtocol {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidResponseCode {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidTTLOrder {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidTagging {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidViewerCertificate {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidWebACLId {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class Invalidation {
  public timestamp $create_time;
  public string $id;
  public InvalidationBatch $invalidation_batch;
  public string $status;

  public function __construct(shape(
  ?'create_time' => timestamp,
  ?'id' => string,
  ?'invalidation_batch' => InvalidationBatch,
  ?'status' => string,
  ) $s = shape()) {
    $this->create_time = $create_time ?? ;
    $this->id = $id ?? ;
    $this->invalidation_batch = $invalidation_batch ?? null;
    $this->status = $status ?? ;
  }
}

class InvalidationBatch {
  public string $caller_reference;
  public Paths $paths;

  public function __construct(shape(
  ?'caller_reference' => string,
  ?'paths' => Paths,
  ) $s = shape()) {
    $this->caller_reference = $caller_reference ?? ;
    $this->paths = $paths ?? null;
  }
}

class InvalidationList {
  public boolean $is_truncated;
  public InvalidationSummaryList $items;
  public string $marker;
  public integer $max_items;
  public string $next_marker;
  public integer $quantity;

  public function __construct(shape(
  ?'is_truncated' => boolean,
  ?'items' => InvalidationSummaryList,
  ?'marker' => string,
  ?'max_items' => integer,
  ?'next_marker' => string,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? ;
    $this->items = $items ?? ;
    $this->marker = $marker ?? ;
    $this->max_items = $max_items ?? ;
    $this->next_marker = $next_marker ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class InvalidationSummary {
  public timestamp $create_time;
  public string $id;
  public string $status;

  public function __construct(shape(
  ?'create_time' => timestamp,
  ?'id' => string,
  ?'status' => string,
  ) $s = shape()) {
    $this->create_time = $create_time ?? ;
    $this->id = $id ?? ;
    $this->status = $status ?? ;
  }
}

type InvalidationSummaryList = vec<InvalidationSummary>;

type ItemSelection = string;

type KeyPairIdList = vec<string>;

class KeyPairIds {
  public KeyPairIdList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => KeyPairIdList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

type LambdaFunctionARN = string;

class LambdaFunctionAssociation {
  public EventType $event_type;
  public boolean $include_body;
  public LambdaFunctionARN $lambda_function_arn;

  public function __construct(shape(
  ?'event_type' => EventType,
  ?'include_body' => boolean,
  ?'lambda_function_arn' => LambdaFunctionARN,
  ) $s = shape()) {
    $this->event_type = $event_type ?? "";
    $this->include_body = $include_body ?? ;
    $this->lambda_function_arn = $lambda_function_arn ?? "";
  }
}

type LambdaFunctionAssociationList = vec<LambdaFunctionAssociation>;

class LambdaFunctionAssociations {
  public LambdaFunctionAssociationList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => LambdaFunctionAssociationList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class ListCloudFrontOriginAccessIdentitiesRequest {
  public string $marker;
  public string $max_items;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_items' => string,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->max_items = $max_items ?? ;
  }
}

class ListCloudFrontOriginAccessIdentitiesResult {
  public CloudFrontOriginAccessIdentityList $cloud_front_origin_access_identity_list;

  public function __construct(shape(
  ?'cloud_front_origin_access_identity_list' => CloudFrontOriginAccessIdentityList,
  ) $s = shape()) {
    $this->cloud_front_origin_access_identity_list = $cloud_front_origin_access_identity_list ?? null;
  }
}

class ListDistributionsByWebACLIdRequest {
  public string $marker;
  public string $max_items;
  public string $web_acl_id;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_items' => string,
  ?'web_acl_id' => string,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->max_items = $max_items ?? ;
    $this->web_acl_id = $web_acl_id ?? ;
  }
}

class ListDistributionsByWebACLIdResult {
  public DistributionList $distribution_list;

  public function __construct(shape(
  ?'distribution_list' => DistributionList,
  ) $s = shape()) {
    $this->distribution_list = $distribution_list ?? null;
  }
}

class ListDistributionsRequest {
  public string $marker;
  public string $max_items;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_items' => string,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->max_items = $max_items ?? ;
  }
}

class ListDistributionsResult {
  public DistributionList $distribution_list;

  public function __construct(shape(
  ?'distribution_list' => DistributionList,
  ) $s = shape()) {
    $this->distribution_list = $distribution_list ?? null;
  }
}

class ListFieldLevelEncryptionConfigsRequest {
  public string $marker;
  public string $max_items;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_items' => string,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->max_items = $max_items ?? ;
  }
}

class ListFieldLevelEncryptionConfigsResult {
  public FieldLevelEncryptionList $field_level_encryption_list;

  public function __construct(shape(
  ?'field_level_encryption_list' => FieldLevelEncryptionList,
  ) $s = shape()) {
    $this->field_level_encryption_list = $field_level_encryption_list ?? null;
  }
}

class ListFieldLevelEncryptionProfilesRequest {
  public string $marker;
  public string $max_items;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_items' => string,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->max_items = $max_items ?? ;
  }
}

class ListFieldLevelEncryptionProfilesResult {
  public FieldLevelEncryptionProfileList $field_level_encryption_profile_list;

  public function __construct(shape(
  ?'field_level_encryption_profile_list' => FieldLevelEncryptionProfileList,
  ) $s = shape()) {
    $this->field_level_encryption_profile_list = $field_level_encryption_profile_list ?? null;
  }
}

class ListInvalidationsRequest {
  public string $distribution_id;
  public string $marker;
  public string $max_items;

  public function __construct(shape(
  ?'distribution_id' => string,
  ?'marker' => string,
  ?'max_items' => string,
  ) $s = shape()) {
    $this->distribution_id = $distribution_id ?? ;
    $this->marker = $marker ?? ;
    $this->max_items = $max_items ?? ;
  }
}

class ListInvalidationsResult {
  public InvalidationList $invalidation_list;

  public function __construct(shape(
  ?'invalidation_list' => InvalidationList,
  ) $s = shape()) {
    $this->invalidation_list = $invalidation_list ?? null;
  }
}

class ListPublicKeysRequest {
  public string $marker;
  public string $max_items;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_items' => string,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->max_items = $max_items ?? ;
  }
}

class ListPublicKeysResult {
  public PublicKeyList $public_key_list;

  public function __construct(shape(
  ?'public_key_list' => PublicKeyList,
  ) $s = shape()) {
    $this->public_key_list = $public_key_list ?? null;
  }
}

class ListStreamingDistributionsRequest {
  public string $marker;
  public string $max_items;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_items' => string,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->max_items = $max_items ?? ;
  }
}

class ListStreamingDistributionsResult {
  public StreamingDistributionList $streaming_distribution_list;

  public function __construct(shape(
  ?'streaming_distribution_list' => StreamingDistributionList,
  ) $s = shape()) {
    $this->streaming_distribution_list = $streaming_distribution_list ?? null;
  }
}

class ListTagsForResourceRequest {
  public ResourceARN $resource;

  public function __construct(shape(
  ?'resource' => ResourceARN,
  ) $s = shape()) {
    $this->resource = $resource ?? ;
  }
}

class ListTagsForResourceResult {
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? null;
  }
}

type LocationList = vec<string>;

class LoggingConfig {
  public string $bucket;
  public boolean $enabled;
  public boolean $include_cookies;
  public string $prefix;

  public function __construct(shape(
  ?'bucket' => string,
  ?'enabled' => boolean,
  ?'include_cookies' => boolean,
  ?'prefix' => string,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->enabled = $enabled ?? ;
    $this->include_cookies = $include_cookies ?? ;
    $this->prefix = $prefix ?? ;
  }
}

type Method = string;

type MethodsList = vec<Method>;

type MinimumProtocolVersion = string;

class MissingBody {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class NoSuchCloudFrontOriginAccessIdentity {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class NoSuchDistribution {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class NoSuchFieldLevelEncryptionConfig {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class NoSuchFieldLevelEncryptionProfile {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class NoSuchInvalidation {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class NoSuchOrigin {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class NoSuchPublicKey {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class NoSuchResource {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class NoSuchStreamingDistribution {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class Origin {
  public CustomHeaders $custom_headers;
  public CustomOriginConfig $custom_origin_config;
  public string $domain_name;
  public string $id;
  public string $origin_path;
  public S3OriginConfig $s_3_origin_config;

  public function __construct(shape(
  ?'custom_headers' => CustomHeaders,
  ?'custom_origin_config' => CustomOriginConfig,
  ?'domain_name' => string,
  ?'id' => string,
  ?'origin_path' => string,
  ?'s_3_origin_config' => S3OriginConfig,
  ) $s = shape()) {
    $this->custom_headers = $custom_headers ?? null;
    $this->custom_origin_config = $custom_origin_config ?? null;
    $this->domain_name = $domain_name ?? ;
    $this->id = $id ?? ;
    $this->origin_path = $origin_path ?? ;
    $this->s_3_origin_config = $s_3_origin_config ?? null;
  }
}

class OriginCustomHeader {
  public string $header_name;
  public string $header_value;

  public function __construct(shape(
  ?'header_name' => string,
  ?'header_value' => string,
  ) $s = shape()) {
    $this->header_name = $header_name ?? ;
    $this->header_value = $header_value ?? ;
  }
}

type OriginCustomHeadersList = vec<OriginCustomHeader>;

class OriginGroup {
  public OriginGroupFailoverCriteria $failover_criteria;
  public string $id;
  public OriginGroupMembers $members;

  public function __construct(shape(
  ?'failover_criteria' => OriginGroupFailoverCriteria,
  ?'id' => string,
  ?'members' => OriginGroupMembers,
  ) $s = shape()) {
    $this->failover_criteria = $failover_criteria ?? ;
    $this->id = $id ?? ;
    $this->members = $members ?? ;
  }
}

class OriginGroupFailoverCriteria {
  public StatusCodes $status_codes;

  public function __construct(shape(
  ?'status_codes' => StatusCodes,
  ) $s = shape()) {
    $this->status_codes = $status_codes ?? null;
  }
}

type OriginGroupList = vec<OriginGroup>;

class OriginGroupMember {
  public string $origin_id;

  public function __construct(shape(
  ?'origin_id' => string,
  ) $s = shape()) {
    $this->origin_id = $origin_id ?? ;
  }
}

type OriginGroupMemberList = vec<OriginGroupMember>;

class OriginGroupMembers {
  public OriginGroupMemberList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => OriginGroupMemberList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class OriginGroups {
  public OriginGroupList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => OriginGroupList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

type OriginList = vec<Origin>;

type OriginProtocolPolicy = string;

class OriginSslProtocols {
  public SslProtocolsList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => SslProtocolsList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class Origins {
  public OriginList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => OriginList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

type PathList = vec<string>;

class Paths {
  public PathList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => PathList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class PreconditionFailed {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type PriceClass = string;

class PublicKey {
  public timestamp $created_time;
  public string $id;
  public PublicKeyConfig $public_key_config;

  public function __construct(shape(
  ?'created_time' => timestamp,
  ?'id' => string,
  ?'public_key_config' => PublicKeyConfig,
  ) $s = shape()) {
    $this->created_time = $created_time ?? ;
    $this->id = $id ?? ;
    $this->public_key_config = $public_key_config ?? null;
  }
}

class PublicKeyAlreadyExists {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class PublicKeyConfig {
  public string $caller_reference;
  public string $comment;
  public string $encoded_key;
  public string $name;

  public function __construct(shape(
  ?'caller_reference' => string,
  ?'comment' => string,
  ?'encoded_key' => string,
  ?'name' => string,
  ) $s = shape()) {
    $this->caller_reference = $caller_reference ?? ;
    $this->comment = $comment ?? ;
    $this->encoded_key = $encoded_key ?? ;
    $this->name = $name ?? ;
  }
}

class PublicKeyInUse {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class PublicKeyList {
  public PublicKeySummaryList $items;
  public integer $max_items;
  public string $next_marker;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => PublicKeySummaryList,
  ?'max_items' => integer,
  ?'next_marker' => string,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->max_items = $max_items ?? ;
    $this->next_marker = $next_marker ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class PublicKeySummary {
  public string $comment;
  public timestamp $created_time;
  public string $encoded_key;
  public string $id;
  public string $name;

  public function __construct(shape(
  ?'comment' => string,
  ?'created_time' => timestamp,
  ?'encoded_key' => string,
  ?'id' => string,
  ?'name' => string,
  ) $s = shape()) {
    $this->comment = $comment ?? ;
    $this->created_time = $created_time ?? ;
    $this->encoded_key = $encoded_key ?? ;
    $this->id = $id ?? ;
    $this->name = $name ?? ;
  }
}

type PublicKeySummaryList = vec<PublicKeySummary>;

class QueryArgProfile {
  public string $profile_id;
  public string $query_arg;

  public function __construct(shape(
  ?'profile_id' => string,
  ?'query_arg' => string,
  ) $s = shape()) {
    $this->profile_id = $profile_id ?? ;
    $this->query_arg = $query_arg ?? ;
  }
}

class QueryArgProfileConfig {
  public boolean $forward_when_query_arg_profile_is_unknown;
  public QueryArgProfiles $query_arg_profiles;

  public function __construct(shape(
  ?'forward_when_query_arg_profile_is_unknown' => boolean,
  ?'query_arg_profiles' => QueryArgProfiles,
  ) $s = shape()) {
    $this->forward_when_query_arg_profile_is_unknown = $forward_when_query_arg_profile_is_unknown ?? ;
    $this->query_arg_profiles = $query_arg_profiles ?? null;
  }
}

class QueryArgProfileEmpty {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type QueryArgProfileList = vec<QueryArgProfile>;

class QueryArgProfiles {
  public QueryArgProfileList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => QueryArgProfileList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class QueryStringCacheKeys {
  public QueryStringCacheKeysList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => QueryStringCacheKeysList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

type QueryStringCacheKeysList = vec<string>;

type ResourceARN = string;

class Restrictions {
  public GeoRestriction $geo_restriction;

  public function __construct(shape(
  ?'geo_restriction' => GeoRestriction,
  ) $s = shape()) {
    $this->geo_restriction = $geo_restriction ?? null;
  }
}

class S3Origin {
  public string $domain_name;
  public string $origin_access_identity;

  public function __construct(shape(
  ?'domain_name' => string,
  ?'origin_access_identity' => string,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? ;
    $this->origin_access_identity = $origin_access_identity ?? ;
  }
}

class S3OriginConfig {
  public string $origin_access_identity;

  public function __construct(shape(
  ?'origin_access_identity' => string,
  ) $s = shape()) {
    $this->origin_access_identity = $origin_access_identity ?? ;
  }
}

type SSLSupportMethod = string;

class Signer {
  public string $aws_account_number;
  public KeyPairIds $key_pair_ids;

  public function __construct(shape(
  ?'aws_account_number' => string,
  ?'key_pair_ids' => KeyPairIds,
  ) $s = shape()) {
    $this->aws_account_number = $aws_account_number ?? ;
    $this->key_pair_ids = $key_pair_ids ?? null;
  }
}

type SignerList = vec<Signer>;

type SslProtocol = string;

type SslProtocolsList = vec<SslProtocol>;

type StatusCodeList = vec<integer>;

class StatusCodes {
  public StatusCodeList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'items' => StatusCodeList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class StreamingDistribution {
  public string $arn;
  public ActiveTrustedSigners $active_trusted_signers;
  public string $domain_name;
  public string $id;
  public timestamp $last_modified_time;
  public string $status;
  public StreamingDistributionConfig $streaming_distribution_config;

  public function __construct(shape(
  ?'arn' => string,
  ?'active_trusted_signers' => ActiveTrustedSigners,
  ?'domain_name' => string,
  ?'id' => string,
  ?'last_modified_time' => timestamp,
  ?'status' => string,
  ?'streaming_distribution_config' => StreamingDistributionConfig,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->active_trusted_signers = $active_trusted_signers ?? null;
    $this->domain_name = $domain_name ?? ;
    $this->id = $id ?? ;
    $this->last_modified_time = $last_modified_time ?? ;
    $this->status = $status ?? ;
    $this->streaming_distribution_config = $streaming_distribution_config ?? null;
  }
}

class StreamingDistributionAlreadyExists {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class StreamingDistributionConfig {
  public Aliases $aliases;
  public string $caller_reference;
  public string $comment;
  public boolean $enabled;
  public StreamingLoggingConfig $logging;
  public PriceClass $price_class;
  public S3Origin $s_3_origin;
  public TrustedSigners $trusted_signers;

  public function __construct(shape(
  ?'aliases' => Aliases,
  ?'caller_reference' => string,
  ?'comment' => string,
  ?'enabled' => boolean,
  ?'logging' => StreamingLoggingConfig,
  ?'price_class' => PriceClass,
  ?'s_3_origin' => S3Origin,
  ?'trusted_signers' => TrustedSigners,
  ) $s = shape()) {
    $this->aliases = $aliases ?? null;
    $this->caller_reference = $caller_reference ?? ;
    $this->comment = $comment ?? ;
    $this->enabled = $enabled ?? ;
    $this->logging = $logging ?? ;
    $this->price_class = $price_class ?? "";
    $this->s_3_origin = $s_3_origin ?? null;
    $this->trusted_signers = $trusted_signers ?? null;
  }
}

class StreamingDistributionConfigWithTags {
  public StreamingDistributionConfig $streaming_distribution_config;
  public Tags $tags;

  public function __construct(shape(
  ?'streaming_distribution_config' => StreamingDistributionConfig,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->streaming_distribution_config = $streaming_distribution_config ?? null;
    $this->tags = $tags ?? null;
  }
}

class StreamingDistributionList {
  public boolean $is_truncated;
  public StreamingDistributionSummaryList $items;
  public string $marker;
  public integer $max_items;
  public string $next_marker;
  public integer $quantity;

  public function __construct(shape(
  ?'is_truncated' => boolean,
  ?'items' => StreamingDistributionSummaryList,
  ?'marker' => string,
  ?'max_items' => integer,
  ?'next_marker' => string,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? ;
    $this->items = $items ?? ;
    $this->marker = $marker ?? ;
    $this->max_items = $max_items ?? ;
    $this->next_marker = $next_marker ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class StreamingDistributionNotDisabled {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class StreamingDistributionSummary {
  public string $arn;
  public Aliases $aliases;
  public string $comment;
  public string $domain_name;
  public boolean $enabled;
  public string $id;
  public timestamp $last_modified_time;
  public PriceClass $price_class;
  public S3Origin $s_3_origin;
  public string $status;
  public TrustedSigners $trusted_signers;

  public function __construct(shape(
  ?'arn' => string,
  ?'aliases' => Aliases,
  ?'comment' => string,
  ?'domain_name' => string,
  ?'enabled' => boolean,
  ?'id' => string,
  ?'last_modified_time' => timestamp,
  ?'price_class' => PriceClass,
  ?'s_3_origin' => S3Origin,
  ?'status' => string,
  ?'trusted_signers' => TrustedSigners,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->aliases = $aliases ?? null;
    $this->comment = $comment ?? ;
    $this->domain_name = $domain_name ?? ;
    $this->enabled = $enabled ?? ;
    $this->id = $id ?? ;
    $this->last_modified_time = $last_modified_time ?? ;
    $this->price_class = $price_class ?? "";
    $this->s_3_origin = $s_3_origin ?? null;
    $this->status = $status ?? ;
    $this->trusted_signers = $trusted_signers ?? null;
  }
}

type StreamingDistributionSummaryList = vec<StreamingDistributionSummary>;

class StreamingLoggingConfig {
  public string $bucket;
  public boolean $enabled;
  public string $prefix;

  public function __construct(shape(
  ?'bucket' => string,
  ?'enabled' => boolean,
  ?'prefix' => string,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->enabled = $enabled ?? ;
    $this->prefix = $prefix ?? ;
  }
}

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

class TagKeys {
  public TagKeyList $items;

  public function __construct(shape(
  ?'items' => TagKeyList,
  ) $s = shape()) {
    $this->items = $items ?? ;
  }
}

type TagList = vec<Tag>;

class TagResourceRequest {
  public ResourceARN $resource;
  public Tags $tags;

  public function __construct(shape(
  ?'resource' => ResourceARN,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->resource = $resource ?? ;
    $this->tags = $tags ?? null;
  }
}

type TagValue = string;

class Tags {
  public TagList $items;

  public function __construct(shape(
  ?'items' => TagList,
  ) $s = shape()) {
    $this->items = $items ?? ;
  }
}

class TooManyCacheBehaviors {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyCertificates {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyCloudFrontOriginAccessIdentities {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyCookieNamesInWhiteList {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyDistributionCNAMEs {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyDistributions {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyDistributionsAssociatedToFieldLevelEncryptionConfig {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyDistributionsWithLambdaAssociations {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyFieldLevelEncryptionConfigs {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyFieldLevelEncryptionContentTypeProfiles {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyFieldLevelEncryptionEncryptionEntities {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyFieldLevelEncryptionFieldPatterns {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyFieldLevelEncryptionProfiles {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyFieldLevelEncryptionQueryArgProfiles {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyHeadersInForwardedValues {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyInvalidationsInProgress {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyLambdaFunctionAssociations {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyOriginCustomHeaders {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyOriginGroupsPerDistribution {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyOrigins {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyPublicKeys {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyQueryStringParameters {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyStreamingDistributionCNAMEs {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyStreamingDistributions {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyTrustedSigners {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TrustedSignerDoesNotExist {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TrustedSigners {
  public boolean $enabled;
  public AwsAccountNumberList $items;
  public integer $quantity;

  public function __construct(shape(
  ?'enabled' => boolean,
  ?'items' => AwsAccountNumberList,
  ?'quantity' => integer,
  ) $s = shape()) {
    $this->enabled = $enabled ?? ;
    $this->items = $items ?? ;
    $this->quantity = $quantity ?? ;
  }
}

class UntagResourceRequest {
  public ResourceARN $resource;
  public TagKeys $tag_keys;

  public function __construct(shape(
  ?'resource' => ResourceARN,
  ?'tag_keys' => TagKeys,
  ) $s = shape()) {
    $this->resource = $resource ?? ;
    $this->tag_keys = $tag_keys ?? null;
  }
}

class UpdateCloudFrontOriginAccessIdentityRequest {
  public CloudFrontOriginAccessIdentityConfig $cloud_front_origin_access_identity_config;
  public string $id;
  public string $if_match;

  public function __construct(shape(
  ?'cloud_front_origin_access_identity_config' => CloudFrontOriginAccessIdentityConfig,
  ?'id' => string,
  ?'if_match' => string,
  ) $s = shape()) {
    $this->cloud_front_origin_access_identity_config = $cloud_front_origin_access_identity_config ?? null;
    $this->id = $id ?? ;
    $this->if_match = $if_match ?? ;
  }
}

class UpdateCloudFrontOriginAccessIdentityResult {
  public CloudFrontOriginAccessIdentity $cloud_front_origin_access_identity;
  public string $e_tag;

  public function __construct(shape(
  ?'cloud_front_origin_access_identity' => CloudFrontOriginAccessIdentity,
  ?'e_tag' => string,
  ) $s = shape()) {
    $this->cloud_front_origin_access_identity = $cloud_front_origin_access_identity ?? null;
    $this->e_tag = $e_tag ?? ;
  }
}

class UpdateDistributionRequest {
  public DistributionConfig $distribution_config;
  public string $id;
  public string $if_match;

  public function __construct(shape(
  ?'distribution_config' => DistributionConfig,
  ?'id' => string,
  ?'if_match' => string,
  ) $s = shape()) {
    $this->distribution_config = $distribution_config ?? null;
    $this->id = $id ?? ;
    $this->if_match = $if_match ?? ;
  }
}

class UpdateDistributionResult {
  public Distribution $distribution;
  public string $e_tag;

  public function __construct(shape(
  ?'distribution' => Distribution,
  ?'e_tag' => string,
  ) $s = shape()) {
    $this->distribution = $distribution ?? null;
    $this->e_tag = $e_tag ?? ;
  }
}

class UpdateFieldLevelEncryptionConfigRequest {
  public FieldLevelEncryptionConfig $field_level_encryption_config;
  public string $id;
  public string $if_match;

  public function __construct(shape(
  ?'field_level_encryption_config' => FieldLevelEncryptionConfig,
  ?'id' => string,
  ?'if_match' => string,
  ) $s = shape()) {
    $this->field_level_encryption_config = $field_level_encryption_config ?? null;
    $this->id = $id ?? ;
    $this->if_match = $if_match ?? ;
  }
}

class UpdateFieldLevelEncryptionConfigResult {
  public string $e_tag;
  public FieldLevelEncryption $field_level_encryption;

  public function __construct(shape(
  ?'e_tag' => string,
  ?'field_level_encryption' => FieldLevelEncryption,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->field_level_encryption = $field_level_encryption ?? null;
  }
}

class UpdateFieldLevelEncryptionProfileRequest {
  public FieldLevelEncryptionProfileConfig $field_level_encryption_profile_config;
  public string $id;
  public string $if_match;

  public function __construct(shape(
  ?'field_level_encryption_profile_config' => FieldLevelEncryptionProfileConfig,
  ?'id' => string,
  ?'if_match' => string,
  ) $s = shape()) {
    $this->field_level_encryption_profile_config = $field_level_encryption_profile_config ?? null;
    $this->id = $id ?? ;
    $this->if_match = $if_match ?? ;
  }
}

class UpdateFieldLevelEncryptionProfileResult {
  public string $e_tag;
  public FieldLevelEncryptionProfile $field_level_encryption_profile;

  public function __construct(shape(
  ?'e_tag' => string,
  ?'field_level_encryption_profile' => FieldLevelEncryptionProfile,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->field_level_encryption_profile = $field_level_encryption_profile ?? null;
  }
}

class UpdatePublicKeyRequest {
  public string $id;
  public string $if_match;
  public PublicKeyConfig $public_key_config;

  public function __construct(shape(
  ?'id' => string,
  ?'if_match' => string,
  ?'public_key_config' => PublicKeyConfig,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->if_match = $if_match ?? ;
    $this->public_key_config = $public_key_config ?? null;
  }
}

class UpdatePublicKeyResult {
  public string $e_tag;
  public PublicKey $public_key;

  public function __construct(shape(
  ?'e_tag' => string,
  ?'public_key' => PublicKey,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->public_key = $public_key ?? null;
  }
}

class UpdateStreamingDistributionRequest {
  public string $id;
  public string $if_match;
  public StreamingDistributionConfig $streaming_distribution_config;

  public function __construct(shape(
  ?'id' => string,
  ?'if_match' => string,
  ?'streaming_distribution_config' => StreamingDistributionConfig,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->if_match = $if_match ?? ;
    $this->streaming_distribution_config = $streaming_distribution_config ?? null;
  }
}

class UpdateStreamingDistributionResult {
  public string $e_tag;
  public StreamingDistribution $streaming_distribution;

  public function __construct(shape(
  ?'e_tag' => string,
  ?'streaming_distribution' => StreamingDistribution,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->streaming_distribution = $streaming_distribution ?? null;
  }
}

class ViewerCertificate {
  public string $acm_certificate_arn;
  public string $certificate;
  public CertificateSource $certificate_source;
  public boolean $cloud_front_default_certificate;
  public string $iam_certificate_id;
  public MinimumProtocolVersion $minimum_protocol_version;
  public SSLSupportMethod $ssl_support_method;

  public function __construct(shape(
  ?'acm_certificate_arn' => string,
  ?'certificate' => string,
  ?'certificate_source' => CertificateSource,
  ?'cloud_front_default_certificate' => boolean,
  ?'iam_certificate_id' => string,
  ?'minimum_protocol_version' => MinimumProtocolVersion,
  ?'ssl_support_method' => SSLSupportMethod,
  ) $s = shape()) {
    $this->acm_certificate_arn = $acm_certificate_arn ?? ;
    $this->certificate = $certificate ?? ;
    $this->certificate_source = $certificate_source ?? "";
    $this->cloud_front_default_certificate = $cloud_front_default_certificate ?? ;
    $this->iam_certificate_id = $iam_certificate_id ?? ;
    $this->minimum_protocol_version = $minimum_protocol_version ?? "";
    $this->ssl_support_method = $ssl_support_method ?? "";
  }
}

type ViewerProtocolPolicy = string;

type boolean = bool;

type integer = int;

type long = int;

type string = string;

type timestamp = int;


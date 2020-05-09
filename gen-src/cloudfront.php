<?hh // strict
namespace slack\aws\cloudfront;

interface CloudFront {
  public function CreateCloudFrontOriginAccessIdentity2019_03_26(CreateCloudFrontOriginAccessIdentityRequest) Awaitable<Errors\Result<CreateCloudFrontOriginAccessIdentityResult>>;
  public function CreateDistribution2019_03_26(CreateDistributionRequest) Awaitable<Errors\Result<CreateDistributionResult>>;
  public function CreateDistributionWithTags2019_03_26(CreateDistributionWithTagsRequest) Awaitable<Errors\Result<CreateDistributionWithTagsResult>>;
  public function CreateFieldLevelEncryptionConfig2019_03_26(CreateFieldLevelEncryptionConfigRequest) Awaitable<Errors\Result<CreateFieldLevelEncryptionConfigResult>>;
  public function CreateFieldLevelEncryptionProfile2019_03_26(CreateFieldLevelEncryptionProfileRequest) Awaitable<Errors\Result<CreateFieldLevelEncryptionProfileResult>>;
  public function CreateInvalidation2019_03_26(CreateInvalidationRequest) Awaitable<Errors\Result<CreateInvalidationResult>>;
  public function CreatePublicKey2019_03_26(CreatePublicKeyRequest) Awaitable<Errors\Result<CreatePublicKeyResult>>;
  public function CreateStreamingDistribution2019_03_26(CreateStreamingDistributionRequest) Awaitable<Errors\Result<CreateStreamingDistributionResult>>;
  public function CreateStreamingDistributionWithTags2019_03_26(CreateStreamingDistributionWithTagsRequest) Awaitable<Errors\Result<CreateStreamingDistributionWithTagsResult>>;
  public function DeleteCloudFrontOriginAccessIdentity2019_03_26(DeleteCloudFrontOriginAccessIdentityRequest) Awaitable<Errors\Error>;
  public function DeleteDistribution2019_03_26(DeleteDistributionRequest) Awaitable<Errors\Error>;
  public function DeleteFieldLevelEncryptionConfig2019_03_26(DeleteFieldLevelEncryptionConfigRequest) Awaitable<Errors\Error>;
  public function DeleteFieldLevelEncryptionProfile2019_03_26(DeleteFieldLevelEncryptionProfileRequest) Awaitable<Errors\Error>;
  public function DeletePublicKey2019_03_26(DeletePublicKeyRequest) Awaitable<Errors\Error>;
  public function DeleteStreamingDistribution2019_03_26(DeleteStreamingDistributionRequest) Awaitable<Errors\Error>;
  public function GetCloudFrontOriginAccessIdentity2019_03_26(GetCloudFrontOriginAccessIdentityRequest) Awaitable<Errors\Result<GetCloudFrontOriginAccessIdentityResult>>;
  public function GetCloudFrontOriginAccessIdentityConfig2019_03_26(GetCloudFrontOriginAccessIdentityConfigRequest) Awaitable<Errors\Result<GetCloudFrontOriginAccessIdentityConfigResult>>;
  public function GetDistribution2019_03_26(GetDistributionRequest) Awaitable<Errors\Result<GetDistributionResult>>;
  public function GetDistributionConfig2019_03_26(GetDistributionConfigRequest) Awaitable<Errors\Result<GetDistributionConfigResult>>;
  public function GetFieldLevelEncryption2019_03_26(GetFieldLevelEncryptionRequest) Awaitable<Errors\Result<GetFieldLevelEncryptionResult>>;
  public function GetFieldLevelEncryptionConfig2019_03_26(GetFieldLevelEncryptionConfigRequest) Awaitable<Errors\Result<GetFieldLevelEncryptionConfigResult>>;
  public function GetFieldLevelEncryptionProfile2019_03_26(GetFieldLevelEncryptionProfileRequest) Awaitable<Errors\Result<GetFieldLevelEncryptionProfileResult>>;
  public function GetFieldLevelEncryptionProfileConfig2019_03_26(GetFieldLevelEncryptionProfileConfigRequest) Awaitable<Errors\Result<GetFieldLevelEncryptionProfileConfigResult>>;
  public function GetInvalidation2019_03_26(GetInvalidationRequest) Awaitable<Errors\Result<GetInvalidationResult>>;
  public function GetPublicKey2019_03_26(GetPublicKeyRequest) Awaitable<Errors\Result<GetPublicKeyResult>>;
  public function GetPublicKeyConfig2019_03_26(GetPublicKeyConfigRequest) Awaitable<Errors\Result<GetPublicKeyConfigResult>>;
  public function GetStreamingDistribution2019_03_26(GetStreamingDistributionRequest) Awaitable<Errors\Result<GetStreamingDistributionResult>>;
  public function GetStreamingDistributionConfig2019_03_26(GetStreamingDistributionConfigRequest) Awaitable<Errors\Result<GetStreamingDistributionConfigResult>>;
  public function ListCloudFrontOriginAccessIdentities2019_03_26(ListCloudFrontOriginAccessIdentitiesRequest) Awaitable<Errors\Result<ListCloudFrontOriginAccessIdentitiesResult>>;
  public function ListDistributions2019_03_26(ListDistributionsRequest) Awaitable<Errors\Result<ListDistributionsResult>>;
  public function ListDistributionsByWebACLId2019_03_26(ListDistributionsByWebACLIdRequest) Awaitable<Errors\Result<ListDistributionsByWebACLIdResult>>;
  public function ListFieldLevelEncryptionConfigs2019_03_26(ListFieldLevelEncryptionConfigsRequest) Awaitable<Errors\Result<ListFieldLevelEncryptionConfigsResult>>;
  public function ListFieldLevelEncryptionProfiles2019_03_26(ListFieldLevelEncryptionProfilesRequest) Awaitable<Errors\Result<ListFieldLevelEncryptionProfilesResult>>;
  public function ListInvalidations2019_03_26(ListInvalidationsRequest) Awaitable<Errors\Result<ListInvalidationsResult>>;
  public function ListPublicKeys2019_03_26(ListPublicKeysRequest) Awaitable<Errors\Result<ListPublicKeysResult>>;
  public function ListStreamingDistributions2019_03_26(ListStreamingDistributionsRequest) Awaitable<Errors\Result<ListStreamingDistributionsResult>>;
  public function ListTagsForResource2019_03_26(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResult>>;
  public function TagResource2019_03_26(TagResourceRequest) Awaitable<Errors\Error>;
  public function UntagResource2019_03_26(UntagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateCloudFrontOriginAccessIdentity2019_03_26(UpdateCloudFrontOriginAccessIdentityRequest) Awaitable<Errors\Result<UpdateCloudFrontOriginAccessIdentityResult>>;
  public function UpdateDistribution2019_03_26(UpdateDistributionRequest) Awaitable<Errors\Result<UpdateDistributionResult>>;
  public function UpdateFieldLevelEncryptionConfig2019_03_26(UpdateFieldLevelEncryptionConfigRequest) Awaitable<Errors\Result<UpdateFieldLevelEncryptionConfigResult>>;
  public function UpdateFieldLevelEncryptionProfile2019_03_26(UpdateFieldLevelEncryptionProfileRequest) Awaitable<Errors\Result<UpdateFieldLevelEncryptionProfileResult>>;
  public function UpdatePublicKey2019_03_26(UpdatePublicKeyRequest) Awaitable<Errors\Result<UpdatePublicKeyResult>>;
  public function UpdateStreamingDistribution2019_03_26(UpdateStreamingDistributionRequest) Awaitable<Errors\Result<UpdateStreamingDistributionResult>>;
}

class AccessDenied {
  public string $message;
}

class ActiveTrustedSigners {
  public boolean $enabled;
  public SignerList $items;
  public integer $quantity;
}

class AliasICPRecordal {
  public string $cname;
  public ICPRecordalStatus $icp_recordal_status;
}

class AliasICPRecordals {
}

class AliasList {
}

class Aliases {
  public AliasList $items;
  public integer $quantity;
}

class AllowedMethods {
  public CachedMethods $cached_methods;
  public MethodsList $items;
  public integer $quantity;
}

class AwsAccountNumberList {
}

class BatchTooLarge {
  public string $message;
}

class CNAMEAlreadyExists {
  public string $message;
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
}

class CacheBehaviorList {
}

class CacheBehaviors {
  public CacheBehaviorList $items;
  public integer $quantity;
}

class CachedMethods {
  public MethodsList $items;
  public integer $quantity;
}

class CannotChangeImmutablePublicKeyFields {
  public string $message;
}

class CertificateSource {
}

class CloudFrontOriginAccessIdentity {
  public CloudFrontOriginAccessIdentityConfig $cloud_front_origin_access_identity_config;
  public string $id;
  public string $s_3_canonical_user_id;
}

class CloudFrontOriginAccessIdentityAlreadyExists {
  public string $message;
}

class CloudFrontOriginAccessIdentityConfig {
  public string $caller_reference;
  public string $comment;
}

class CloudFrontOriginAccessIdentityInUse {
  public string $message;
}

class CloudFrontOriginAccessIdentityList {
  public boolean $is_truncated;
  public CloudFrontOriginAccessIdentitySummaryList $items;
  public string $marker;
  public integer $max_items;
  public string $next_marker;
  public integer $quantity;
}

class CloudFrontOriginAccessIdentitySummary {
  public string $comment;
  public string $id;
  public string $s_3_canonical_user_id;
}

class CloudFrontOriginAccessIdentitySummaryList {
}

class CommentType {
}

class ContentTypeProfile {
  public string $content_type;
  public Format $format;
  public string $profile_id;
}

class ContentTypeProfileConfig {
  public ContentTypeProfiles $content_type_profiles;
  public boolean $forward_when_content_type_is_unknown;
}

class ContentTypeProfileList {
}

class ContentTypeProfiles {
  public ContentTypeProfileList $items;
  public integer $quantity;
}

class CookieNameList {
}

class CookieNames {
  public CookieNameList $items;
  public integer $quantity;
}

class CookiePreference {
  public ItemSelection $forward;
  public CookieNames $whitelisted_names;
}

class CreateCloudFrontOriginAccessIdentityRequest {
  public CloudFrontOriginAccessIdentityConfig $cloud_front_origin_access_identity_config;
}

class CreateCloudFrontOriginAccessIdentityResult {
  public CloudFrontOriginAccessIdentity $cloud_front_origin_access_identity;
  public string $e_tag;
  public string $location;
}

class CreateDistributionRequest {
  public DistributionConfig $distribution_config;
}

class CreateDistributionResult {
  public Distribution $distribution;
  public string $e_tag;
  public string $location;
}

class CreateDistributionWithTagsRequest {
  public DistributionConfigWithTags $distribution_config_with_tags;
}

class CreateDistributionWithTagsResult {
  public Distribution $distribution;
  public string $e_tag;
  public string $location;
}

class CreateFieldLevelEncryptionConfigRequest {
  public FieldLevelEncryptionConfig $field_level_encryption_config;
}

class CreateFieldLevelEncryptionConfigResult {
  public string $e_tag;
  public FieldLevelEncryption $field_level_encryption;
  public string $location;
}

class CreateFieldLevelEncryptionProfileRequest {
  public FieldLevelEncryptionProfileConfig $field_level_encryption_profile_config;
}

class CreateFieldLevelEncryptionProfileResult {
  public string $e_tag;
  public FieldLevelEncryptionProfile $field_level_encryption_profile;
  public string $location;
}

class CreateInvalidationRequest {
  public string $distribution_id;
  public InvalidationBatch $invalidation_batch;
}

class CreateInvalidationResult {
  public Invalidation $invalidation;
  public string $location;
}

class CreatePublicKeyRequest {
  public PublicKeyConfig $public_key_config;
}

class CreatePublicKeyResult {
  public string $e_tag;
  public string $location;
  public PublicKey $public_key;
}

class CreateStreamingDistributionRequest {
  public StreamingDistributionConfig $streaming_distribution_config;
}

class CreateStreamingDistributionResult {
  public string $e_tag;
  public string $location;
  public StreamingDistribution $streaming_distribution;
}

class CreateStreamingDistributionWithTagsRequest {
  public StreamingDistributionConfigWithTags $streaming_distribution_config_with_tags;
}

class CreateStreamingDistributionWithTagsResult {
  public string $e_tag;
  public string $location;
  public StreamingDistribution $streaming_distribution;
}

class CustomErrorResponse {
  public long $error_caching_min_ttl;
  public integer $error_code;
  public string $response_code;
  public string $response_page_path;
}

class CustomErrorResponseList {
}

class CustomErrorResponses {
  public CustomErrorResponseList $items;
  public integer $quantity;
}

class CustomHeaders {
  public OriginCustomHeadersList $items;
  public integer $quantity;
}

class CustomOriginConfig {
  public integer $http_port;
  public integer $https_port;
  public integer $origin_keepalive_timeout;
  public OriginProtocolPolicy $origin_protocol_policy;
  public integer $origin_read_timeout;
  public OriginSslProtocols $origin_ssl_protocols;
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
}

class DeleteCloudFrontOriginAccessIdentityRequest {
  public string $id;
  public string $if_match;
}

class DeleteDistributionRequest {
  public string $id;
  public string $if_match;
}

class DeleteFieldLevelEncryptionConfigRequest {
  public string $id;
  public string $if_match;
}

class DeleteFieldLevelEncryptionProfileRequest {
  public string $id;
  public string $if_match;
}

class DeletePublicKeyRequest {
  public string $id;
  public string $if_match;
}

class DeleteStreamingDistributionRequest {
  public string $id;
  public string $if_match;
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
}

class DistributionAlreadyExists {
  public string $message;
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
}

class DistributionConfigWithTags {
  public DistributionConfig $distribution_config;
  public Tags $tags;
}

class DistributionList {
  public boolean $is_truncated;
  public DistributionSummaryList $items;
  public string $marker;
  public integer $max_items;
  public string $next_marker;
  public integer $quantity;
}

class DistributionNotDisabled {
  public string $message;
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
}

class DistributionSummaryList {
}

class EncryptionEntities {
  public EncryptionEntityList $items;
  public integer $quantity;
}

class EncryptionEntity {
  public FieldPatterns $field_patterns;
  public string $provider_id;
  public string $public_key_id;
}

class EncryptionEntityList {
}

class EventType {
}

class FieldLevelEncryption {
  public FieldLevelEncryptionConfig $field_level_encryption_config;
  public string $id;
  public timestamp $last_modified_time;
}

class FieldLevelEncryptionConfig {
  public string $caller_reference;
  public string $comment;
  public ContentTypeProfileConfig $content_type_profile_config;
  public QueryArgProfileConfig $query_arg_profile_config;
}

class FieldLevelEncryptionConfigAlreadyExists {
  public string $message;
}

class FieldLevelEncryptionConfigInUse {
  public string $message;
}

class FieldLevelEncryptionList {
  public FieldLevelEncryptionSummaryList $items;
  public integer $max_items;
  public string $next_marker;
  public integer $quantity;
}

class FieldLevelEncryptionProfile {
  public FieldLevelEncryptionProfileConfig $field_level_encryption_profile_config;
  public string $id;
  public timestamp $last_modified_time;
}

class FieldLevelEncryptionProfileAlreadyExists {
  public string $message;
}

class FieldLevelEncryptionProfileConfig {
  public string $caller_reference;
  public string $comment;
  public EncryptionEntities $encryption_entities;
  public string $name;
}

class FieldLevelEncryptionProfileInUse {
  public string $message;
}

class FieldLevelEncryptionProfileList {
  public FieldLevelEncryptionProfileSummaryList $items;
  public integer $max_items;
  public string $next_marker;
  public integer $quantity;
}

class FieldLevelEncryptionProfileSizeExceeded {
  public string $message;
}

class FieldLevelEncryptionProfileSummary {
  public string $comment;
  public EncryptionEntities $encryption_entities;
  public string $id;
  public timestamp $last_modified_time;
  public string $name;
}

class FieldLevelEncryptionProfileSummaryList {
}

class FieldLevelEncryptionSummary {
  public string $comment;
  public ContentTypeProfileConfig $content_type_profile_config;
  public string $id;
  public timestamp $last_modified_time;
  public QueryArgProfileConfig $query_arg_profile_config;
}

class FieldLevelEncryptionSummaryList {
}

class FieldPatternList {
}

class FieldPatterns {
  public FieldPatternList $items;
  public integer $quantity;
}

class Format {
}

class ForwardedValues {
  public CookiePreference $cookies;
  public Headers $headers;
  public boolean $query_string;
  public QueryStringCacheKeys $query_string_cache_keys;
}

class GeoRestriction {
  public LocationList $items;
  public integer $quantity;
  public GeoRestrictionType $restriction_type;
}

class GeoRestrictionType {
}

class GetCloudFrontOriginAccessIdentityConfigRequest {
  public string $id;
}

class GetCloudFrontOriginAccessIdentityConfigResult {
  public CloudFrontOriginAccessIdentityConfig $cloud_front_origin_access_identity_config;
  public string $e_tag;
}

class GetCloudFrontOriginAccessIdentityRequest {
  public string $id;
}

class GetCloudFrontOriginAccessIdentityResult {
  public CloudFrontOriginAccessIdentity $cloud_front_origin_access_identity;
  public string $e_tag;
}

class GetDistributionConfigRequest {
  public string $id;
}

class GetDistributionConfigResult {
  public DistributionConfig $distribution_config;
  public string $e_tag;
}

class GetDistributionRequest {
  public string $id;
}

class GetDistributionResult {
  public Distribution $distribution;
  public string $e_tag;
}

class GetFieldLevelEncryptionConfigRequest {
  public string $id;
}

class GetFieldLevelEncryptionConfigResult {
  public string $e_tag;
  public FieldLevelEncryptionConfig $field_level_encryption_config;
}

class GetFieldLevelEncryptionProfileConfigRequest {
  public string $id;
}

class GetFieldLevelEncryptionProfileConfigResult {
  public string $e_tag;
  public FieldLevelEncryptionProfileConfig $field_level_encryption_profile_config;
}

class GetFieldLevelEncryptionProfileRequest {
  public string $id;
}

class GetFieldLevelEncryptionProfileResult {
  public string $e_tag;
  public FieldLevelEncryptionProfile $field_level_encryption_profile;
}

class GetFieldLevelEncryptionRequest {
  public string $id;
}

class GetFieldLevelEncryptionResult {
  public string $e_tag;
  public FieldLevelEncryption $field_level_encryption;
}

class GetInvalidationRequest {
  public string $distribution_id;
  public string $id;
}

class GetInvalidationResult {
  public Invalidation $invalidation;
}

class GetPublicKeyConfigRequest {
  public string $id;
}

class GetPublicKeyConfigResult {
  public string $e_tag;
  public PublicKeyConfig $public_key_config;
}

class GetPublicKeyRequest {
  public string $id;
}

class GetPublicKeyResult {
  public string $e_tag;
  public PublicKey $public_key;
}

class GetStreamingDistributionConfigRequest {
  public string $id;
}

class GetStreamingDistributionConfigResult {
  public string $e_tag;
  public StreamingDistributionConfig $streaming_distribution_config;
}

class GetStreamingDistributionRequest {
  public string $id;
}

class GetStreamingDistributionResult {
  public string $e_tag;
  public StreamingDistribution $streaming_distribution;
}

class HeaderList {
}

class Headers {
  public HeaderList $items;
  public integer $quantity;
}

class HttpVersion {
}

class ICPRecordalStatus {
}

class IllegalFieldLevelEncryptionConfigAssociationWithCacheBehavior {
  public string $message;
}

class IllegalUpdate {
  public string $message;
}

class InconsistentQuantities {
  public string $message;
}

class InvalidArgument {
  public string $message;
}

class InvalidDefaultRootObject {
  public string $message;
}

class InvalidErrorCode {
  public string $message;
}

class InvalidForwardCookies {
  public string $message;
}

class InvalidGeoRestrictionParameter {
  public string $message;
}

class InvalidHeadersForS3Origin {
  public string $message;
}

class InvalidIfMatchVersion {
  public string $message;
}

class InvalidLambdaFunctionAssociation {
  public string $message;
}

class InvalidLocationCode {
  public string $message;
}

class InvalidMinimumProtocolVersion {
  public string $message;
}

class InvalidOrigin {
  public string $message;
}

class InvalidOriginAccessIdentity {
  public string $message;
}

class InvalidOriginKeepaliveTimeout {
  public string $message;
}

class InvalidOriginReadTimeout {
  public string $message;
}

class InvalidProtocolSettings {
  public string $message;
}

class InvalidQueryStringParameters {
  public string $message;
}

class InvalidRelativePath {
  public string $message;
}

class InvalidRequiredProtocol {
  public string $message;
}

class InvalidResponseCode {
  public string $message;
}

class InvalidTTLOrder {
  public string $message;
}

class InvalidTagging {
  public string $message;
}

class InvalidViewerCertificate {
  public string $message;
}

class InvalidWebACLId {
  public string $message;
}

class Invalidation {
  public timestamp $create_time;
  public string $id;
  public InvalidationBatch $invalidation_batch;
  public string $status;
}

class InvalidationBatch {
  public string $caller_reference;
  public Paths $paths;
}

class InvalidationList {
  public boolean $is_truncated;
  public InvalidationSummaryList $items;
  public string $marker;
  public integer $max_items;
  public string $next_marker;
  public integer $quantity;
}

class InvalidationSummary {
  public timestamp $create_time;
  public string $id;
  public string $status;
}

class InvalidationSummaryList {
}

class ItemSelection {
}

class KeyPairIdList {
}

class KeyPairIds {
  public KeyPairIdList $items;
  public integer $quantity;
}

class LambdaFunctionARN {
}

class LambdaFunctionAssociation {
  public EventType $event_type;
  public boolean $include_body;
  public LambdaFunctionARN $lambda_function_arn;
}

class LambdaFunctionAssociationList {
}

class LambdaFunctionAssociations {
  public LambdaFunctionAssociationList $items;
  public integer $quantity;
}

class ListCloudFrontOriginAccessIdentitiesRequest {
  public string $marker;
  public string $max_items;
}

class ListCloudFrontOriginAccessIdentitiesResult {
  public CloudFrontOriginAccessIdentityList $cloud_front_origin_access_identity_list;
}

class ListDistributionsByWebACLIdRequest {
  public string $marker;
  public string $max_items;
  public string $web_acl_id;
}

class ListDistributionsByWebACLIdResult {
  public DistributionList $distribution_list;
}

class ListDistributionsRequest {
  public string $marker;
  public string $max_items;
}

class ListDistributionsResult {
  public DistributionList $distribution_list;
}

class ListFieldLevelEncryptionConfigsRequest {
  public string $marker;
  public string $max_items;
}

class ListFieldLevelEncryptionConfigsResult {
  public FieldLevelEncryptionList $field_level_encryption_list;
}

class ListFieldLevelEncryptionProfilesRequest {
  public string $marker;
  public string $max_items;
}

class ListFieldLevelEncryptionProfilesResult {
  public FieldLevelEncryptionProfileList $field_level_encryption_profile_list;
}

class ListInvalidationsRequest {
  public string $distribution_id;
  public string $marker;
  public string $max_items;
}

class ListInvalidationsResult {
  public InvalidationList $invalidation_list;
}

class ListPublicKeysRequest {
  public string $marker;
  public string $max_items;
}

class ListPublicKeysResult {
  public PublicKeyList $public_key_list;
}

class ListStreamingDistributionsRequest {
  public string $marker;
  public string $max_items;
}

class ListStreamingDistributionsResult {
  public StreamingDistributionList $streaming_distribution_list;
}

class ListTagsForResourceRequest {
  public ResourceARN $resource;
}

class ListTagsForResourceResult {
  public Tags $tags;
}

class LocationList {
}

class LoggingConfig {
  public string $bucket;
  public boolean $enabled;
  public boolean $include_cookies;
  public string $prefix;
}

class Method {
}

class MethodsList {
}

class MinimumProtocolVersion {
}

class MissingBody {
  public string $message;
}

class NoSuchCloudFrontOriginAccessIdentity {
  public string $message;
}

class NoSuchDistribution {
  public string $message;
}

class NoSuchFieldLevelEncryptionConfig {
  public string $message;
}

class NoSuchFieldLevelEncryptionProfile {
  public string $message;
}

class NoSuchInvalidation {
  public string $message;
}

class NoSuchOrigin {
  public string $message;
}

class NoSuchPublicKey {
  public string $message;
}

class NoSuchResource {
  public string $message;
}

class NoSuchStreamingDistribution {
  public string $message;
}

class Origin {
  public CustomHeaders $custom_headers;
  public CustomOriginConfig $custom_origin_config;
  public string $domain_name;
  public string $id;
  public string $origin_path;
  public S3OriginConfig $s_3_origin_config;
}

class OriginCustomHeader {
  public string $header_name;
  public string $header_value;
}

class OriginCustomHeadersList {
}

class OriginGroup {
  public OriginGroupFailoverCriteria $failover_criteria;
  public string $id;
  public OriginGroupMembers $members;
}

class OriginGroupFailoverCriteria {
  public StatusCodes $status_codes;
}

class OriginGroupList {
}

class OriginGroupMember {
  public string $origin_id;
}

class OriginGroupMemberList {
}

class OriginGroupMembers {
  public OriginGroupMemberList $items;
  public integer $quantity;
}

class OriginGroups {
  public OriginGroupList $items;
  public integer $quantity;
}

class OriginList {
}

class OriginProtocolPolicy {
}

class OriginSslProtocols {
  public SslProtocolsList $items;
  public integer $quantity;
}

class Origins {
  public OriginList $items;
  public integer $quantity;
}

class PathList {
}

class Paths {
  public PathList $items;
  public integer $quantity;
}

class PreconditionFailed {
  public string $message;
}

class PriceClass {
}

class PublicKey {
  public timestamp $created_time;
  public string $id;
  public PublicKeyConfig $public_key_config;
}

class PublicKeyAlreadyExists {
  public string $message;
}

class PublicKeyConfig {
  public string $caller_reference;
  public string $comment;
  public string $encoded_key;
  public string $name;
}

class PublicKeyInUse {
  public string $message;
}

class PublicKeyList {
  public PublicKeySummaryList $items;
  public integer $max_items;
  public string $next_marker;
  public integer $quantity;
}

class PublicKeySummary {
  public string $comment;
  public timestamp $created_time;
  public string $encoded_key;
  public string $id;
  public string $name;
}

class PublicKeySummaryList {
}

class QueryArgProfile {
  public string $profile_id;
  public string $query_arg;
}

class QueryArgProfileConfig {
  public boolean $forward_when_query_arg_profile_is_unknown;
  public QueryArgProfiles $query_arg_profiles;
}

class QueryArgProfileEmpty {
  public string $message;
}

class QueryArgProfileList {
}

class QueryArgProfiles {
  public QueryArgProfileList $items;
  public integer $quantity;
}

class QueryStringCacheKeys {
  public QueryStringCacheKeysList $items;
  public integer $quantity;
}

class QueryStringCacheKeysList {
}

class ResourceARN {
}

class Restrictions {
  public GeoRestriction $geo_restriction;
}

class S3Origin {
  public string $domain_name;
  public string $origin_access_identity;
}

class S3OriginConfig {
  public string $origin_access_identity;
}

class SSLSupportMethod {
}

class Signer {
  public string $aws_account_number;
  public KeyPairIds $key_pair_ids;
}

class SignerList {
}

class SslProtocol {
}

class SslProtocolsList {
}

class StatusCodeList {
}

class StatusCodes {
  public StatusCodeList $items;
  public integer $quantity;
}

class StreamingDistribution {
  public string $arn;
  public ActiveTrustedSigners $active_trusted_signers;
  public string $domain_name;
  public string $id;
  public timestamp $last_modified_time;
  public string $status;
  public StreamingDistributionConfig $streaming_distribution_config;
}

class StreamingDistributionAlreadyExists {
  public string $message;
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
}

class StreamingDistributionConfigWithTags {
  public StreamingDistributionConfig $streaming_distribution_config;
  public Tags $tags;
}

class StreamingDistributionList {
  public boolean $is_truncated;
  public StreamingDistributionSummaryList $items;
  public string $marker;
  public integer $max_items;
  public string $next_marker;
  public integer $quantity;
}

class StreamingDistributionNotDisabled {
  public string $message;
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
}

class StreamingDistributionSummaryList {
}

class StreamingLoggingConfig {
  public string $bucket;
  public boolean $enabled;
  public string $prefix;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagKeys {
  public TagKeyList $items;
}

class TagList {
}

class TagResourceRequest {
  public ResourceARN $resource;
  public Tags $tags;
}

class TagValue {
}

class Tags {
  public TagList $items;
}

class TooManyCacheBehaviors {
  public string $message;
}

class TooManyCertificates {
  public string $message;
}

class TooManyCloudFrontOriginAccessIdentities {
  public string $message;
}

class TooManyCookieNamesInWhiteList {
  public string $message;
}

class TooManyDistributionCNAMEs {
  public string $message;
}

class TooManyDistributions {
  public string $message;
}

class TooManyDistributionsAssociatedToFieldLevelEncryptionConfig {
  public string $message;
}

class TooManyDistributionsWithLambdaAssociations {
  public string $message;
}

class TooManyFieldLevelEncryptionConfigs {
  public string $message;
}

class TooManyFieldLevelEncryptionContentTypeProfiles {
  public string $message;
}

class TooManyFieldLevelEncryptionEncryptionEntities {
  public string $message;
}

class TooManyFieldLevelEncryptionFieldPatterns {
  public string $message;
}

class TooManyFieldLevelEncryptionProfiles {
  public string $message;
}

class TooManyFieldLevelEncryptionQueryArgProfiles {
  public string $message;
}

class TooManyHeadersInForwardedValues {
  public string $message;
}

class TooManyInvalidationsInProgress {
  public string $message;
}

class TooManyLambdaFunctionAssociations {
  public string $message;
}

class TooManyOriginCustomHeaders {
  public string $message;
}

class TooManyOriginGroupsPerDistribution {
  public string $message;
}

class TooManyOrigins {
  public string $message;
}

class TooManyPublicKeys {
  public string $message;
}

class TooManyQueryStringParameters {
  public string $message;
}

class TooManyStreamingDistributionCNAMEs {
  public string $message;
}

class TooManyStreamingDistributions {
  public string $message;
}

class TooManyTrustedSigners {
  public string $message;
}

class TrustedSignerDoesNotExist {
  public string $message;
}

class TrustedSigners {
  public boolean $enabled;
  public AwsAccountNumberList $items;
  public integer $quantity;
}

class UntagResourceRequest {
  public ResourceARN $resource;
  public TagKeys $tag_keys;
}

class UpdateCloudFrontOriginAccessIdentityRequest {
  public CloudFrontOriginAccessIdentityConfig $cloud_front_origin_access_identity_config;
  public string $id;
  public string $if_match;
}

class UpdateCloudFrontOriginAccessIdentityResult {
  public CloudFrontOriginAccessIdentity $cloud_front_origin_access_identity;
  public string $e_tag;
}

class UpdateDistributionRequest {
  public DistributionConfig $distribution_config;
  public string $id;
  public string $if_match;
}

class UpdateDistributionResult {
  public Distribution $distribution;
  public string $e_tag;
}

class UpdateFieldLevelEncryptionConfigRequest {
  public FieldLevelEncryptionConfig $field_level_encryption_config;
  public string $id;
  public string $if_match;
}

class UpdateFieldLevelEncryptionConfigResult {
  public string $e_tag;
  public FieldLevelEncryption $field_level_encryption;
}

class UpdateFieldLevelEncryptionProfileRequest {
  public FieldLevelEncryptionProfileConfig $field_level_encryption_profile_config;
  public string $id;
  public string $if_match;
}

class UpdateFieldLevelEncryptionProfileResult {
  public string $e_tag;
  public FieldLevelEncryptionProfile $field_level_encryption_profile;
}

class UpdatePublicKeyRequest {
  public string $id;
  public string $if_match;
  public PublicKeyConfig $public_key_config;
}

class UpdatePublicKeyResult {
  public string $e_tag;
  public PublicKey $public_key;
}

class UpdateStreamingDistributionRequest {
  public string $id;
  public string $if_match;
  public StreamingDistributionConfig $streaming_distribution_config;
}

class UpdateStreamingDistributionResult {
  public string $e_tag;
  public StreamingDistribution $streaming_distribution;
}

class ViewerCertificate {
  public string $acm_certificate_arn;
  public string $certificate;
  public CertificateSource $certificate_source;
  public boolean $cloud_front_default_certificate;
  public string $iam_certificate_id;
  public MinimumProtocolVersion $minimum_protocol_version;
  public SSLSupportMethod $ssl_support_method;
}

class ViewerProtocolPolicy {
}

class boolean {
}

class integer {
}

class long {
}

class string {
}

class timestamp {
}


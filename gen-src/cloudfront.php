<?hh // strict
namespace slack\aws\cloudfront;

interface CloudFront {
  public function DeleteDistribution2019_03_26(DeleteDistributionRequest) Awaitable<Errors\Error>;
  public function DeleteFieldLevelEncryptionConfig2019_03_26(DeleteFieldLevelEncryptionConfigRequest) Awaitable<Errors\Error>;
  public function GetFieldLevelEncryptionProfile2019_03_26(GetFieldLevelEncryptionProfileRequest) Awaitable<Errors\Result<GetFieldLevelEncryptionProfileResult>>;
  public function UpdatePublicKey2019_03_26(UpdatePublicKeyRequest) Awaitable<Errors\Result<UpdatePublicKeyResult>>;
  public function CreateInvalidation2019_03_26(CreateInvalidationRequest) Awaitable<Errors\Result<CreateInvalidationResult>>;
  public function GetDistribution2019_03_26(GetDistributionRequest) Awaitable<Errors\Result<GetDistributionResult>>;
  public function ListFieldLevelEncryptionConfigs2019_03_26(ListFieldLevelEncryptionConfigsRequest) Awaitable<Errors\Result<ListFieldLevelEncryptionConfigsResult>>;
  public function ListCloudFrontOriginAccessIdentities2019_03_26(ListCloudFrontOriginAccessIdentitiesRequest) Awaitable<Errors\Result<ListCloudFrontOriginAccessIdentitiesResult>>;
  public function ListDistributions2019_03_26(ListDistributionsRequest) Awaitable<Errors\Result<ListDistributionsResult>>;
  public function ListStreamingDistributions2019_03_26(ListStreamingDistributionsRequest) Awaitable<Errors\Result<ListStreamingDistributionsResult>>;
  public function CreateStreamingDistributionWithTags2019_03_26(CreateStreamingDistributionWithTagsRequest) Awaitable<Errors\Result<CreateStreamingDistributionWithTagsResult>>;
  public function DeleteFieldLevelEncryptionProfile2019_03_26(DeleteFieldLevelEncryptionProfileRequest) Awaitable<Errors\Error>;
  public function GetFieldLevelEncryption2019_03_26(GetFieldLevelEncryptionRequest) Awaitable<Errors\Result<GetFieldLevelEncryptionResult>>;
  public function GetFieldLevelEncryptionConfig2019_03_26(GetFieldLevelEncryptionConfigRequest) Awaitable<Errors\Result<GetFieldLevelEncryptionConfigResult>>;
  public function GetStreamingDistributionConfig2019_03_26(GetStreamingDistributionConfigRequest) Awaitable<Errors\Result<GetStreamingDistributionConfigResult>>;
  public function UpdateFieldLevelEncryptionConfig2019_03_26(UpdateFieldLevelEncryptionConfigRequest) Awaitable<Errors\Result<UpdateFieldLevelEncryptionConfigResult>>;
  public function DeleteStreamingDistribution2019_03_26(DeleteStreamingDistributionRequest) Awaitable<Errors\Error>;
  public function ListDistributionsByWebACLId2019_03_26(ListDistributionsByWebACLIdRequest) Awaitable<Errors\Result<ListDistributionsByWebACLIdResult>>;
  public function UntagResource2019_03_26(UntagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateDistribution2019_03_26(UpdateDistributionRequest) Awaitable<Errors\Result<UpdateDistributionResult>>;
  public function UpdateStreamingDistribution2019_03_26(UpdateStreamingDistributionRequest) Awaitable<Errors\Result<UpdateStreamingDistributionResult>>;
  public function UpdateFieldLevelEncryptionProfile2019_03_26(UpdateFieldLevelEncryptionProfileRequest) Awaitable<Errors\Result<UpdateFieldLevelEncryptionProfileResult>>;
  public function CreateFieldLevelEncryptionConfig2019_03_26(CreateFieldLevelEncryptionConfigRequest) Awaitable<Errors\Result<CreateFieldLevelEncryptionConfigResult>>;
  public function GetCloudFrontOriginAccessIdentity2019_03_26(GetCloudFrontOriginAccessIdentityRequest) Awaitable<Errors\Result<GetCloudFrontOriginAccessIdentityResult>>;
  public function GetCloudFrontOriginAccessIdentityConfig2019_03_26(GetCloudFrontOriginAccessIdentityConfigRequest) Awaitable<Errors\Result<GetCloudFrontOriginAccessIdentityConfigResult>>;
  public function GetPublicKey2019_03_26(GetPublicKeyRequest) Awaitable<Errors\Result<GetPublicKeyResult>>;
  public function ListFieldLevelEncryptionProfiles2019_03_26(ListFieldLevelEncryptionProfilesRequest) Awaitable<Errors\Result<ListFieldLevelEncryptionProfilesResult>>;
  public function CreateCloudFrontOriginAccessIdentity2019_03_26(CreateCloudFrontOriginAccessIdentityRequest) Awaitable<Errors\Result<CreateCloudFrontOriginAccessIdentityResult>>;
  public function CreatePublicKey2019_03_26(CreatePublicKeyRequest) Awaitable<Errors\Result<CreatePublicKeyResult>>;
  public function GetPublicKeyConfig2019_03_26(GetPublicKeyConfigRequest) Awaitable<Errors\Result<GetPublicKeyConfigResult>>;
  public function ListInvalidations2019_03_26(ListInvalidationsRequest) Awaitable<Errors\Result<ListInvalidationsResult>>;
  public function UpdateCloudFrontOriginAccessIdentity2019_03_26(UpdateCloudFrontOriginAccessIdentityRequest) Awaitable<Errors\Result<UpdateCloudFrontOriginAccessIdentityResult>>;
  public function DeletePublicKey2019_03_26(DeletePublicKeyRequest) Awaitable<Errors\Error>;
  public function GetFieldLevelEncryptionProfileConfig2019_03_26(GetFieldLevelEncryptionProfileConfigRequest) Awaitable<Errors\Result<GetFieldLevelEncryptionProfileConfigResult>>;
  public function ListPublicKeys2019_03_26(ListPublicKeysRequest) Awaitable<Errors\Result<ListPublicKeysResult>>;
  public function CreateDistribution2019_03_26(CreateDistributionRequest) Awaitable<Errors\Result<CreateDistributionResult>>;
  public function CreateDistributionWithTags2019_03_26(CreateDistributionWithTagsRequest) Awaitable<Errors\Result<CreateDistributionWithTagsResult>>;
  public function CreateFieldLevelEncryptionProfile2019_03_26(CreateFieldLevelEncryptionProfileRequest) Awaitable<Errors\Result<CreateFieldLevelEncryptionProfileResult>>;
  public function CreateStreamingDistribution2019_03_26(CreateStreamingDistributionRequest) Awaitable<Errors\Result<CreateStreamingDistributionResult>>;
  public function DeleteCloudFrontOriginAccessIdentity2019_03_26(DeleteCloudFrontOriginAccessIdentityRequest) Awaitable<Errors\Error>;
  public function TagResource2019_03_26(TagResourceRequest) Awaitable<Errors\Error>;
  public function GetDistributionConfig2019_03_26(GetDistributionConfigRequest) Awaitable<Errors\Result<GetDistributionConfigResult>>;
  public function GetInvalidation2019_03_26(GetInvalidationRequest) Awaitable<Errors\Result<GetInvalidationResult>>;
  public function GetStreamingDistribution2019_03_26(GetStreamingDistributionRequest) Awaitable<Errors\Result<GetStreamingDistributionResult>>;
  public function ListTagsForResource2019_03_26(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResult>>;
}

class CookieNameList {
}

class NoSuchFieldLevelEncryptionConfig {
  public string $message;
}

class TooManyDistributionsWithLambdaAssociations {
  public string $message;
}

class InvalidationBatch {
  public Paths $paths;
  public string $caller_reference;
}

class PublicKeySummary {
  public string $id;
  public string $name;
  public timestamp $created_time;
  public string $encoded_key;
  public string $comment;
}

class TooManyHeadersInForwardedValues {
  public string $message;
}

class CacheBehavior {
  public boolean $compress;
  public string $field_level_encryption_id;
  public string $target_origin_id;
  public ForwardedValues $forwarded_values;
  public long $min_ttl;
  public AllowedMethods $allowed_methods;
  public long $default_ttl;
  public long $max_ttl;
  public string $path_pattern;
  public TrustedSigners $trusted_signers;
  public ViewerProtocolPolicy $viewer_protocol_policy;
  public boolean $smooth_streaming;
  public LambdaFunctionAssociations $lambda_function_associations;
}

class CacheBehaviors {
  public integer $quantity;
  public CacheBehaviorList $items;
}

class CookiePreference {
  public ItemSelection $forward;
  public CookieNames $whitelisted_names;
}

class GetCloudFrontOriginAccessIdentityResult {
  public CloudFrontOriginAccessIdentity $cloud_front_origin_access_identity;
  public string $e_tag;
}

class ListFieldLevelEncryptionConfigsRequest {
  public string $marker;
  public string $max_items;
}

class S3Origin {
  public string $domain_name;
  public string $origin_access_identity;
}

class TooManyDistributions {
  public string $message;
}

class ActiveTrustedSigners {
  public boolean $enabled;
  public integer $quantity;
  public SignerList $items;
}

class DeletePublicKeyRequest {
  public string $id;
  public string $if_match;
}

class OriginCustomHeadersList {
}

class PublicKeyAlreadyExists {
  public string $message;
}

class FieldLevelEncryptionProfile {
  public timestamp $last_modified_time;
  public FieldLevelEncryptionProfileConfig $field_level_encryption_profile_config;
  public string $id;
}

class MinimumProtocolVersion {
}

class NoSuchDistribution {
  public string $message;
}

class PublicKeySummaryList {
}

class DeleteFieldLevelEncryptionProfileRequest {
  public string $id;
  public string $if_match;
}

class Distribution {
  public ActiveTrustedSigners $active_trusted_signers;
  public DistributionConfig $distribution_config;
  public AliasICPRecordals $alias_icp_recordals;
  public string $arn;
  public string $status;
  public integer $in_progress_invalidation_batches;
  public string $domain_name;
  public string $id;
  public timestamp $last_modified_time;
}

class EventType {
}

class GetFieldLevelEncryptionConfigRequest {
  public string $id;
}

class IllegalFieldLevelEncryptionConfigAssociationWithCacheBehavior {
  public string $message;
}

class UpdateFieldLevelEncryptionConfigRequest {
  public FieldLevelEncryptionConfig $field_level_encryption_config;
  public string $id;
  public string $if_match;
}

class GetFieldLevelEncryptionConfigResult {
  public FieldLevelEncryptionConfig $field_level_encryption_config;
  public string $e_tag;
}

class InvalidGeoRestrictionParameter {
  public string $message;
}

class CommentType {
}

class IllegalUpdate {
  public string $message;
}

class Origin {
  public string $id;
  public string $domain_name;
  public string $origin_path;
  public CustomHeaders $custom_headers;
  public S3OriginConfig $s_3_origin_config;
  public CustomOriginConfig $custom_origin_config;
}

class OriginList {
}

class QueryArgProfileEmpty {
  public string $message;
}

class CachedMethods {
  public MethodsList $items;
  public integer $quantity;
}

class CreateDistributionRequest {
  public DistributionConfig $distribution_config;
}

class CustomErrorResponseList {
}

class DeleteCloudFrontOriginAccessIdentityRequest {
  public string $id;
  public string $if_match;
}

class GetPublicKeyConfigRequest {
  public string $id;
}

class GetStreamingDistributionConfigResult {
  public StreamingDistributionConfig $streaming_distribution_config;
  public string $e_tag;
}

class InvalidRequiredProtocol {
  public string $message;
}

class OriginGroupMembers {
  public integer $quantity;
  public OriginGroupMemberList $items;
}

class GeoRestriction {
  public GeoRestrictionType $restriction_type;
  public integer $quantity;
  public LocationList $items;
}

class PublicKeyInUse {
  public string $message;
}

class QueryArgProfileList {
}

class CreateCloudFrontOriginAccessIdentityResult {
  public CloudFrontOriginAccessIdentity $cloud_front_origin_access_identity;
  public string $location;
  public string $e_tag;
}

class FieldLevelEncryptionProfileAlreadyExists {
  public string $message;
}

class InvalidForwardCookies {
  public string $message;
}

class InvalidProtocolSettings {
  public string $message;
}

class StatusCodes {
  public integer $quantity;
  public StatusCodeList $items;
}

class StreamingDistributionAlreadyExists {
  public string $message;
}

class TooManyFieldLevelEncryptionEncryptionEntities {
  public string $message;
}

class FieldLevelEncryptionConfigAlreadyExists {
  public string $message;
}

class FieldPatterns {
  public integer $quantity;
  public FieldPatternList $items;
}

class StreamingDistributionNotDisabled {
  public string $message;
}

class TooManyDistributionCNAMEs {
  public string $message;
}

class timestamp {
}

class CloudFrontOriginAccessIdentitySummary {
  public string $id;
  public string $s_3_canonical_user_id;
  public string $comment;
}

class CreateFieldLevelEncryptionProfileRequest {
  public FieldLevelEncryptionProfileConfig $field_level_encryption_profile_config;
}

class DistributionSummary {
  public boolean $is_ipv_6_enabled;
  public string $id;
  public string $arn;
  public string $status;
  public OriginGroups $origin_groups;
  public string $web_acl_id;
  public boolean $enabled;
  public Restrictions $restrictions;
  public HttpVersion $http_version;
  public string $domain_name;
  public Aliases $aliases;
  public DefaultCacheBehavior $default_cache_behavior;
  public CacheBehaviors $cache_behaviors;
  public string $comment;
  public ViewerCertificate $viewer_certificate;
  public timestamp $last_modified_time;
  public Origins $origins;
  public CustomErrorResponses $custom_error_responses;
  public PriceClass $price_class;
  public AliasICPRecordals $alias_icp_recordals;
}

class FieldLevelEncryptionProfileSummary {
  public timestamp $last_modified_time;
  public string $name;
  public EncryptionEntities $encryption_entities;
  public string $comment;
  public string $id;
}

class GetFieldLevelEncryptionProfileConfigResult {
  public string $e_tag;
  public FieldLevelEncryptionProfileConfig $field_level_encryption_profile_config;
}

class InvalidResponseCode {
  public string $message;
}

class InvalidWebACLId {
  public string $message;
}

class CreateStreamingDistributionWithTagsResult {
  public StreamingDistribution $streaming_distribution;
  public string $location;
  public string $e_tag;
}

class DistributionConfig {
  public Restrictions $restrictions;
  public HttpVersion $http_version;
  public Aliases $aliases;
  public PriceClass $price_class;
  public CacheBehaviors $cache_behaviors;
  public CustomErrorResponses $custom_error_responses;
  public CommentType $comment;
  public boolean $enabled;
  public string $default_root_object;
  public DefaultCacheBehavior $default_cache_behavior;
  public OriginGroups $origin_groups;
  public LoggingConfig $logging;
  public ViewerCertificate $viewer_certificate;
  public string $web_acl_id;
  public boolean $is_ipv_6_enabled;
  public string $caller_reference;
  public Origins $origins;
}

class ICPRecordalStatus {
}

class ListDistributionsByWebACLIdRequest {
  public string $max_items;
  public string $web_acl_id;
  public string $marker;
}

class ListPublicKeysRequest {
  public string $marker;
  public string $max_items;
}

class PriceClass {
}

class AliasICPRecordals {
}

class CloudFrontOriginAccessIdentityAlreadyExists {
  public string $message;
}

class DistributionAlreadyExists {
  public string $message;
}

class OriginGroupMemberList {
}

class DeleteStreamingDistributionRequest {
  public string $id;
  public string $if_match;
}

class FieldLevelEncryptionProfileConfig {
  public string $name;
  public string $caller_reference;
  public string $comment;
  public EncryptionEntities $encryption_entities;
}

class FieldLevelEncryptionSummary {
  public ContentTypeProfileConfig $content_type_profile_config;
  public string $id;
  public timestamp $last_modified_time;
  public string $comment;
  public QueryArgProfileConfig $query_arg_profile_config;
}

class TooManyStreamingDistributionCNAMEs {
  public string $message;
}

class UpdateCloudFrontOriginAccessIdentityRequest {
  public CloudFrontOriginAccessIdentityConfig $cloud_front_origin_access_identity_config;
  public string $id;
  public string $if_match;
}

class GetInvalidationRequest {
  public string $distribution_id;
  public string $id;
}

class InvalidOriginKeepaliveTimeout {
  public string $message;
}

class FieldLevelEncryptionList {
  public integer $max_items;
  public integer $quantity;
  public FieldLevelEncryptionSummaryList $items;
  public string $next_marker;
}

class LambdaFunctionAssociationList {
}

class PreconditionFailed {
  public string $message;
}

class FieldLevelEncryptionProfileList {
  public FieldLevelEncryptionProfileSummaryList $items;
  public string $next_marker;
  public integer $max_items;
  public integer $quantity;
}

class GetPublicKeyConfigResult {
  public PublicKeyConfig $public_key_config;
  public string $e_tag;
}

class MethodsList {
}

class CreateStreamingDistributionResult {
  public StreamingDistribution $streaming_distribution;
  public string $location;
  public string $e_tag;
}

class ListTagsForResourceResult {
  public Tags $tags;
}

class UpdateDistributionResult {
  public Distribution $distribution;
  public string $e_tag;
}

class CloudFrontOriginAccessIdentityList {
  public boolean $is_truncated;
  public integer $quantity;
  public CloudFrontOriginAccessIdentitySummaryList $items;
  public string $marker;
  public string $next_marker;
  public integer $max_items;
}

class ListCloudFrontOriginAccessIdentitiesRequest {
  public string $marker;
  public string $max_items;
}

class CreateInvalidationRequest {
  public string $distribution_id;
  public InvalidationBatch $invalidation_batch;
}

class CustomErrorResponse {
  public integer $error_code;
  public string $response_page_path;
  public string $response_code;
  public long $error_caching_min_ttl;
}

class DistributionNotDisabled {
  public string $message;
}

class ListStreamingDistributionsRequest {
  public string $marker;
  public string $max_items;
}

class OriginCustomHeader {
  public string $header_name;
  public string $header_value;
}

class InvalidLambdaFunctionAssociation {
  public string $message;
}

class InvalidationSummary {
  public string $id;
  public timestamp $create_time;
  public string $status;
}

class MissingBody {
  public string $message;
}

class StreamingDistributionSummaryList {
}

class TooManyOrigins {
  public string $message;
}

class TooManyQueryStringParameters {
  public string $message;
}

class OriginGroupMember {
  public string $origin_id;
}

class SignerList {
}

class StreamingDistribution {
  public ActiveTrustedSigners $active_trusted_signers;
  public StreamingDistributionConfig $streaming_distribution_config;
  public string $id;
  public string $arn;
  public string $status;
  public timestamp $last_modified_time;
  public string $domain_name;
}

class GeoRestrictionType {
}

class ListDistributionsRequest {
  public string $max_items;
  public string $marker;
}

class Restrictions {
  public GeoRestriction $geo_restriction;
}

class TooManyFieldLevelEncryptionProfiles {
  public string $message;
}

class AliasList {
}

class InvalidDefaultRootObject {
  public string $message;
}

class UpdateFieldLevelEncryptionConfigResult {
  public FieldLevelEncryption $field_level_encryption;
  public string $e_tag;
}

class CloudFrontOriginAccessIdentity {
  public string $id;
  public string $s_3_canonical_user_id;
  public CloudFrontOriginAccessIdentityConfig $cloud_front_origin_access_identity_config;
}

class ContentTypeProfiles {
  public integer $quantity;
  public ContentTypeProfileList $items;
}

class GetStreamingDistributionRequest {
  public string $id;
}

class NoSuchFieldLevelEncryptionProfile {
  public string $message;
}

class QueryArgProfiles {
  public integer $quantity;
  public QueryArgProfileList $items;
}

class TooManyCloudFrontOriginAccessIdentities {
  public string $message;
}

class UpdateFieldLevelEncryptionProfileResult {
  public FieldLevelEncryptionProfile $field_level_encryption_profile;
  public string $e_tag;
}

class BatchTooLarge {
  public string $message;
}

class CertificateSource {
}

class CloudFrontOriginAccessIdentityConfig {
  public string $comment;
  public string $caller_reference;
}

class NoSuchStreamingDistribution {
  public string $message;
}

class OriginGroups {
  public integer $quantity;
  public OriginGroupList $items;
}

class FieldLevelEncryption {
  public string $id;
  public timestamp $last_modified_time;
  public FieldLevelEncryptionConfig $field_level_encryption_config;
}

class GetCloudFrontOriginAccessIdentityConfigRequest {
  public string $id;
}

class GetFieldLevelEncryptionRequest {
  public string $id;
}

class InvalidOriginReadTimeout {
  public string $message;
}

class KeyPairIdList {
}

class TagValue {
}

class TooManyCacheBehaviors {
  public string $message;
}

class TrustedSigners {
  public boolean $enabled;
  public integer $quantity;
  public AwsAccountNumberList $items;
}

class ViewerCertificate {
  public boolean $cloud_front_default_certificate;
  public string $iam_certificate_id;
  public string $acm_certificate_arn;
  public SSLSupportMethod $ssl_support_method;
  public MinimumProtocolVersion $minimum_protocol_version;
  public string $certificate;
  public CertificateSource $certificate_source;
}

class CreatePublicKeyResult {
  public PublicKey $public_key;
  public string $location;
  public string $e_tag;
}

class GetDistributionResult {
  public Distribution $distribution;
  public string $e_tag;
}

class HeaderList {
}

class NoSuchPublicKey {
  public string $message;
}

class QueryStringCacheKeys {
  public integer $quantity;
  public QueryStringCacheKeysList $items;
}

class UpdatePublicKeyRequest {
  public PublicKeyConfig $public_key_config;
  public string $id;
  public string $if_match;
}

class AwsAccountNumberList {
}

class CreateStreamingDistributionRequest {
  public StreamingDistributionConfig $streaming_distribution_config;
}

class FieldLevelEncryptionProfileSummaryList {
}

class TooManyFieldLevelEncryptionFieldPatterns {
  public string $message;
}

class FieldPatternList {
}

class InvalidMinimumProtocolVersion {
  public string $message;
}

class NoSuchCloudFrontOriginAccessIdentity {
  public string $message;
}

class TrustedSignerDoesNotExist {
  public string $message;
}

class ContentTypeProfile {
  public Format $format;
  public string $profile_id;
  public string $content_type;
}

class CreateDistributionWithTagsRequest {
  public DistributionConfigWithTags $distribution_config_with_tags;
}

class GetPublicKeyRequest {
  public string $id;
}

class LoggingConfig {
  public boolean $enabled;
  public boolean $include_cookies;
  public string $bucket;
  public string $prefix;
}

class OriginGroup {
  public string $id;
  public OriginGroupFailoverCriteria $failover_criteria;
  public OriginGroupMembers $members;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class QueryArgProfileConfig {
  public boolean $forward_when_query_arg_profile_is_unknown;
  public QueryArgProfiles $query_arg_profiles;
}

class TooManyFieldLevelEncryptionConfigs {
  public string $message;
}

class CreateDistributionWithTagsResult {
  public Distribution $distribution;
  public string $location;
  public string $e_tag;
}

class CustomHeaders {
  public integer $quantity;
  public OriginCustomHeadersList $items;
}

class GetDistributionConfigResult {
  public DistributionConfig $distribution_config;
  public string $e_tag;
}

class ListDistributionsByWebACLIdResult {
  public DistributionList $distribution_list;
}

class ListPublicKeysResult {
  public PublicKeyList $public_key_list;
}

class NoSuchInvalidation {
  public string $message;
}

class Origins {
  public integer $quantity;
  public OriginList $items;
}

class PathList {
}

class PublicKey {
  public string $id;
  public timestamp $created_time;
  public PublicKeyConfig $public_key_config;
}

class SslProtocol {
}

class DefaultCacheBehavior {
  public long $min_ttl;
  public AllowedMethods $allowed_methods;
  public long $max_ttl;
  public boolean $compress;
  public LambdaFunctionAssociations $lambda_function_associations;
  public ForwardedValues $forwarded_values;
  public TrustedSigners $trusted_signers;
  public boolean $smooth_streaming;
  public long $default_ttl;
  public string $field_level_encryption_id;
  public string $target_origin_id;
  public ViewerProtocolPolicy $viewer_protocol_policy;
}

class DistributionList {
  public integer $max_items;
  public boolean $is_truncated;
  public integer $quantity;
  public DistributionSummaryList $items;
  public string $marker;
  public string $next_marker;
}

class ForwardedValues {
  public boolean $query_string;
  public CookiePreference $cookies;
  public Headers $headers;
  public QueryStringCacheKeys $query_string_cache_keys;
}

class InvalidHeadersForS3Origin {
  public string $message;
}

class ListFieldLevelEncryptionProfilesRequest {
  public string $marker;
  public string $max_items;
}

class QueryArgProfile {
  public string $query_arg;
  public string $profile_id;
}

class integer {
}

class AccessDenied {
  public string $message;
}

class GetStreamingDistributionConfigRequest {
  public string $id;
}

class InvalidRelativePath {
  public string $message;
}

class TooManyPublicKeys {
  public string $message;
}

class UpdateStreamingDistributionResult {
  public StreamingDistribution $streaming_distribution;
  public string $e_tag;
}

class Aliases {
  public integer $quantity;
  public AliasList $items;
}

class Invalidation {
  public string $id;
  public string $status;
  public timestamp $create_time;
  public InvalidationBatch $invalidation_batch;
}

class ItemSelection {
}

class OriginSslProtocols {
  public integer $quantity;
  public SslProtocolsList $items;
}

class AliasICPRecordal {
  public string $cname;
  public ICPRecordalStatus $icp_recordal_status;
}

class GetCloudFrontOriginAccessIdentityRequest {
  public string $id;
}

class InvalidOriginAccessIdentity {
  public string $message;
}

class LambdaFunctionAssociations {
  public integer $quantity;
  public LambdaFunctionAssociationList $items;
}

class LocationList {
}

class TagKeyList {
}

class TooManyOriginGroupsPerDistribution {
  public string $message;
}

class FieldLevelEncryptionConfigInUse {
  public string $message;
}

class Headers {
  public integer $quantity;
  public HeaderList $items;
}

class LambdaFunctionARN {
}

class ListStreamingDistributionsResult {
  public StreamingDistributionList $streaming_distribution_list;
}

class TagList {
}

class CloudFrontOriginAccessIdentitySummaryList {
}

class ListCloudFrontOriginAccessIdentitiesResult {
  public CloudFrontOriginAccessIdentityList $cloud_front_origin_access_identity_list;
}

class CloudFrontOriginAccessIdentityInUse {
  public string $message;
}

class QueryStringCacheKeysList {
}

class TooManyCookieNamesInWhiteList {
  public string $message;
}

class string {
}

class CNAMEAlreadyExists {
  public string $message;
}

class DeleteDistributionRequest {
  public string $if_match;
  public string $id;
}

class EncryptionEntityList {
}

class InvalidViewerCertificate {
  public string $message;
}

class ResourceARN {
}

class Signer {
  public string $aws_account_number;
  public KeyPairIds $key_pair_ids;
}

class Tags {
  public TagList $items;
}

class UpdatePublicKeyResult {
  public PublicKey $public_key;
  public string $e_tag;
}

class GetFieldLevelEncryptionResult {
  public string $e_tag;
  public FieldLevelEncryption $field_level_encryption;
}

class ListTagsForResourceRequest {
  public ResourceARN $resource;
}

class OriginProtocolPolicy {
}

class TooManyDistributionsAssociatedToFieldLevelEncryptionConfig {
  public string $message;
}

class ListDistributionsResult {
  public DistributionList $distribution_list;
}

class GetFieldLevelEncryptionProfileConfigRequest {
  public string $id;
}

class TooManyFieldLevelEncryptionContentTypeProfiles {
  public string $message;
}

class TooManyStreamingDistributions {
  public string $message;
}

class DistributionSummaryList {
}

class GetPublicKeyResult {
  public string $e_tag;
  public PublicKey $public_key;
}

class ListInvalidationsRequest {
  public string $distribution_id;
  public string $marker;
  public string $max_items;
}

class StreamingLoggingConfig {
  public boolean $enabled;
  public string $bucket;
  public string $prefix;
}

class boolean {
}

class CreateFieldLevelEncryptionProfileResult {
  public FieldLevelEncryptionProfile $field_level_encryption_profile;
  public string $location;
  public string $e_tag;
}

class FieldLevelEncryptionProfileInUse {
  public string $message;
}

class InvalidationSummaryList {
}

class ListFieldLevelEncryptionProfilesResult {
  public FieldLevelEncryptionProfileList $field_level_encryption_profile_list;
}

class Method {
}

class OriginGroupList {
}

class SslProtocolsList {
}

class TooManyOriginCustomHeaders {
  public string $message;
}

class CannotChangeImmutablePublicKeyFields {
  public string $message;
}

class CustomOriginConfig {
  public integer $http_port;
  public integer $https_port;
  public OriginProtocolPolicy $origin_protocol_policy;
  public OriginSslProtocols $origin_ssl_protocols;
  public integer $origin_read_timeout;
  public integer $origin_keepalive_timeout;
}

class AllowedMethods {
  public integer $quantity;
  public MethodsList $items;
  public CachedMethods $cached_methods;
}

class EncryptionEntity {
  public string $public_key_id;
  public string $provider_id;
  public FieldPatterns $field_patterns;
}

class UpdateStreamingDistributionRequest {
  public StreamingDistributionConfig $streaming_distribution_config;
  public string $id;
  public string $if_match;
}

class CacheBehaviorList {
}

class DistributionConfigWithTags {
  public DistributionConfig $distribution_config;
  public Tags $tags;
}

class EncryptionEntities {
  public integer $quantity;
  public EncryptionEntityList $items;
}

class InvalidErrorCode {
  public string $message;
}

class TooManyInvalidationsInProgress {
  public string $message;
}

class TooManyTrustedSigners {
  public string $message;
}

class UntagResourceRequest {
  public ResourceARN $resource;
  public TagKeys $tag_keys;
}

class ContentTypeProfileList {
}

class CookieNames {
  public integer $quantity;
  public CookieNameList $items;
}

class FieldLevelEncryptionProfileSizeExceeded {
  public string $message;
}

class InconsistentQuantities {
  public string $message;
}

class GetInvalidationResult {
  public Invalidation $invalidation;
}

class KeyPairIds {
  public integer $quantity;
  public KeyPairIdList $items;
}

class NoSuchResource {
  public string $message;
}

class StatusCodeList {
}

class StreamingDistributionSummary {
  public string $arn;
  public string $domain_name;
  public S3Origin $s_3_origin;
  public PriceClass $price_class;
  public string $id;
  public string $status;
  public timestamp $last_modified_time;
  public Aliases $aliases;
  public TrustedSigners $trusted_signers;
  public string $comment;
  public boolean $enabled;
}

class TagKeys {
  public TagKeyList $items;
}

class CreateFieldLevelEncryptionConfigResult {
  public string $e_tag;
  public FieldLevelEncryption $field_level_encryption;
  public string $location;
}

class CreatePublicKeyRequest {
  public PublicKeyConfig $public_key_config;
}

class FieldLevelEncryptionSummaryList {
}

class Format {
}

class InvalidIfMatchVersion {
  public string $message;
}

class PublicKeyList {
  public PublicKeySummaryList $items;
  public string $next_marker;
  public integer $max_items;
  public integer $quantity;
}

class SSLSupportMethod {
}

class UpdateDistributionRequest {
  public string $if_match;
  public DistributionConfig $distribution_config;
  public string $id;
}

class DeleteFieldLevelEncryptionConfigRequest {
  public string $id;
  public string $if_match;
}

class GetFieldLevelEncryptionProfileRequest {
  public string $id;
}

class TooManyFieldLevelEncryptionQueryArgProfiles {
  public string $message;
}

class UpdateFieldLevelEncryptionProfileRequest {
  public FieldLevelEncryptionProfileConfig $field_level_encryption_profile_config;
  public string $id;
  public string $if_match;
}

class ContentTypeProfileConfig {
  public boolean $forward_when_content_type_is_unknown;
  public ContentTypeProfiles $content_type_profiles;
}

class GetDistributionRequest {
  public string $id;
}

class InvalidLocationCode {
  public string $message;
}

class InvalidQueryStringParameters {
  public string $message;
}

class ListFieldLevelEncryptionConfigsResult {
  public FieldLevelEncryptionList $field_level_encryption_list;
}

class ListInvalidationsResult {
  public InvalidationList $invalidation_list;
}

class OriginGroupFailoverCriteria {
  public StatusCodes $status_codes;
}

class PublicKeyConfig {
  public string $encoded_key;
  public string $comment;
  public string $caller_reference;
  public string $name;
}

class S3OriginConfig {
  public string $origin_access_identity;
}

class HttpVersion {
}

class Paths {
  public integer $quantity;
  public PathList $items;
}

class CreateFieldLevelEncryptionConfigRequest {
  public FieldLevelEncryptionConfig $field_level_encryption_config;
}

class CustomErrorResponses {
  public integer $quantity;
  public CustomErrorResponseList $items;
}

class GetFieldLevelEncryptionProfileResult {
  public FieldLevelEncryptionProfile $field_level_encryption_profile;
  public string $e_tag;
}

class GetStreamingDistributionResult {
  public StreamingDistribution $streaming_distribution;
  public string $e_tag;
}

class InvalidArgument {
  public string $message;
}

class InvalidOrigin {
  public string $message;
}

class InvalidTagging {
  public string $message;
}

class NoSuchOrigin {
  public string $message;
}

class StreamingDistributionList {
  public string $marker;
  public string $next_marker;
  public integer $max_items;
  public boolean $is_truncated;
  public integer $quantity;
  public StreamingDistributionSummaryList $items;
}

class TagResourceRequest {
  public ResourceARN $resource;
  public Tags $tags;
}

class CreateCloudFrontOriginAccessIdentityRequest {
  public CloudFrontOriginAccessIdentityConfig $cloud_front_origin_access_identity_config;
}

class StreamingDistributionConfigWithTags {
  public StreamingDistributionConfig $streaming_distribution_config;
  public Tags $tags;
}

class TooManyLambdaFunctionAssociations {
  public string $message;
}

class UpdateCloudFrontOriginAccessIdentityResult {
  public CloudFrontOriginAccessIdentity $cloud_front_origin_access_identity;
  public string $e_tag;
}

class long {
}

class CreateDistributionResult {
  public Distribution $distribution;
  public string $location;
  public string $e_tag;
}

class CreateInvalidationResult {
  public string $location;
  public Invalidation $invalidation;
}

class FieldLevelEncryptionConfig {
  public string $caller_reference;
  public string $comment;
  public QueryArgProfileConfig $query_arg_profile_config;
  public ContentTypeProfileConfig $content_type_profile_config;
}

class InvalidationList {
  public integer $quantity;
  public InvalidationSummaryList $items;
  public string $marker;
  public string $next_marker;
  public integer $max_items;
  public boolean $is_truncated;
}

class TooManyCertificates {
  public string $message;
}

class ViewerProtocolPolicy {
}

class CreateStreamingDistributionWithTagsRequest {
  public StreamingDistributionConfigWithTags $streaming_distribution_config_with_tags;
}

class GetCloudFrontOriginAccessIdentityConfigResult {
  public CloudFrontOriginAccessIdentityConfig $cloud_front_origin_access_identity_config;
  public string $e_tag;
}

class GetDistributionConfigRequest {
  public string $id;
}

class InvalidTTLOrder {
  public string $message;
}

class LambdaFunctionAssociation {
  public LambdaFunctionARN $lambda_function_arn;
  public EventType $event_type;
  public boolean $include_body;
}

class StreamingDistributionConfig {
  public PriceClass $price_class;
  public boolean $enabled;
  public string $caller_reference;
  public S3Origin $s_3_origin;
  public Aliases $aliases;
  public string $comment;
  public StreamingLoggingConfig $logging;
  public TrustedSigners $trusted_signers;
}

class TagKey {
}


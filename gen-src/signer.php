<?hh // strict
namespace slack\aws\signer;

interface signer {
  public function CancelSigningProfile(CancelSigningProfileRequest) Awaitable<Errors\Error>;
  public function DescribeSigningJob(DescribeSigningJobRequest) Awaitable<Errors\Result<DescribeSigningJobResponse>>;
  public function GetSigningPlatform(GetSigningPlatformRequest) Awaitable<Errors\Result<GetSigningPlatformResponse>>;
  public function GetSigningProfile(GetSigningProfileRequest) Awaitable<Errors\Result<GetSigningProfileResponse>>;
  public function ListSigningJobs(ListSigningJobsRequest) Awaitable<Errors\Result<ListSigningJobsResponse>>;
  public function ListSigningPlatforms(ListSigningPlatformsRequest) Awaitable<Errors\Result<ListSigningPlatformsResponse>>;
  public function ListSigningProfiles(ListSigningProfilesRequest) Awaitable<Errors\Result<ListSigningProfilesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutSigningProfile(PutSigningProfileRequest) Awaitable<Errors\Result<PutSigningProfileResponse>>;
  public function StartSigningJob(StartSigningJobRequest) Awaitable<Errors\Result<StartSigningJobResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
}

class AccessDeniedException {
  public ErrorMessage $message;
}

class BadRequestException {
  public ErrorMessage $message;
}

class BucketName {
}

class CancelSigningProfileRequest {
  public ProfileName $profile_name;
}

class Category {
}

class CertificateArn {
}

class ClientRequestToken {
}

class CompletedAt {
}

class CreatedAt {
}

class DescribeSigningJobRequest {
  public JobId $job_id;
}

class DescribeSigningJobResponse {
  public CompletedAt $completed_at;
  public CreatedAt $created_at;
  public JobId $job_id;
  public SigningPlatformOverrides $overrides;
  public PlatformId $platform_id;
  public ProfileName $profile_name;
  public RequestedBy $requested_by;
  public SignedObject $signed_object;
  public SigningMaterial $signing_material;
  public SigningParameters $signing_parameters;
  public Source $source;
  public SigningStatus $status;
  public StatusReason $status_reason;
}

class Destination {
  public S3Destination $s_3;
}

class DisplayName {
}

class EncryptionAlgorithm {
}

class EncryptionAlgorithmOptions {
  public EncryptionAlgorithms $allowed_values;
  public EncryptionAlgorithm $default_value;
}

class EncryptionAlgorithms {
}

class ErrorMessage {
}

class GetSigningPlatformRequest {
  public PlatformId $platform_id;
}

class GetSigningPlatformResponse {
  public Category $category;
  public DisplayName $display_name;
  public MaxSizeInMB $max_size_in_mb;
  public string $partner;
  public PlatformId $platform_id;
  public SigningConfiguration $signing_configuration;
  public SigningImageFormat $signing_image_format;
  public string $target;
}

class GetSigningProfileRequest {
  public ProfileName $profile_name;
}

class GetSigningProfileResponse {
  public string $arn;
  public SigningPlatformOverrides $overrides;
  public PlatformId $platform_id;
  public ProfileName $profile_name;
  public SigningMaterial $signing_material;
  public SigningParameters $signing_parameters;
  public SigningProfileStatus $status;
  public TagMap $tags;
}

class HashAlgorithm {
}

class HashAlgorithmOptions {
  public HashAlgorithms $allowed_values;
  public HashAlgorithm $default_value;
}

class HashAlgorithms {
}

class ImageFormat {
}

class ImageFormats {
}

class InternalServiceErrorException {
  public ErrorMessage $message;
}

class JobId {
}

class Key {
}

class ListSigningJobsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public PlatformId $platform_id;
  public RequestedBy $requested_by;
  public SigningStatus $status;
}

class ListSigningJobsResponse {
  public SigningJobs $jobs;
  public NextToken $next_token;
}

class ListSigningPlatformsRequest {
  public string $category;
  public MaxResults $max_results;
  public string $next_token;
  public string $partner;
  public string $target;
}

class ListSigningPlatformsResponse {
  public string $next_token;
  public SigningPlatforms $platforms;
}

class ListSigningProfilesRequest {
  public bool $include_canceled;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListSigningProfilesResponse {
  public NextToken $next_token;
  public SigningProfiles $profiles;
}

class ListTagsForResourceRequest {
  public string $resource_arn;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class MaxResults {
}

class MaxSizeInMB {
}

class NextToken {
}

class NotFoundException {
  public ErrorMessage $message;
}

class PlatformId {
}

class Prefix {
}

class ProfileName {
}

class PutSigningProfileRequest {
  public SigningPlatformOverrides $overrides;
  public PlatformId $platform_id;
  public ProfileName $profile_name;
  public SigningMaterial $signing_material;
  public SigningParameters $signing_parameters;
  public TagMap $tags;
}

class PutSigningProfileResponse {
  public string $arn;
}

class RequestedBy {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class S3Destination {
  public BucketName $bucket_name;
  public Prefix $prefix;
}

class S3SignedObject {
  public BucketName $bucket_name;
  public key $key;
}

class S3Source {
  public BucketName $bucket_name;
  public Key $key;
  public Version $version;
}

class SignedObject {
  public S3SignedObject $s_3;
}

class SigningConfiguration {
  public EncryptionAlgorithmOptions $encryption_algorithm_options;
  public HashAlgorithmOptions $hash_algorithm_options;
}

class SigningConfigurationOverrides {
  public EncryptionAlgorithm $encryption_algorithm;
  public HashAlgorithm $hash_algorithm;
}

class SigningImageFormat {
  public ImageFormat $default_format;
  public ImageFormats $supported_formats;
}

class SigningJob {
  public CreatedAt $created_at;
  public JobId $job_id;
  public SignedObject $signed_object;
  public SigningMaterial $signing_material;
  public Source $source;
  public SigningStatus $status;
}

class SigningJobs {
}

class SigningMaterial {
  public CertificateArn $certificate_arn;
}

class SigningParameterKey {
}

class SigningParameterValue {
}

class SigningParameters {
}

class SigningPlatform {
  public Category $category;
  public string $display_name;
  public MaxSizeInMB $max_size_in_mb;
  public string $partner;
  public string $platform_id;
  public SigningConfiguration $signing_configuration;
  public SigningImageFormat $signing_image_format;
  public string $target;
}

class SigningPlatformOverrides {
  public SigningConfigurationOverrides $signing_configuration;
  public ImageFormat $signing_image_format;
}

class SigningPlatforms {
}

class SigningProfile {
  public string $arn;
  public PlatformId $platform_id;
  public ProfileName $profile_name;
  public SigningMaterial $signing_material;
  public SigningParameters $signing_parameters;
  public SigningProfileStatus $status;
  public TagMap $tags;
}

class SigningProfileStatus {
}

class SigningProfiles {
}

class SigningStatus {
}

class Source {
  public S3Source $s_3;
}

class StartSigningJobRequest {
  public ClientRequestToken $client_request_token;
  public Destination $destination;
  public ProfileName $profile_name;
  public Source $source;
}

class StartSigningJobResponse {
  public JobId $job_id;
}

class StatusReason {
}

class String {
}

class TagKey {
}

class TagKeyList {
}

class TagMap {
}

class TagResourceRequest {
  public string $resource_arn;
  public TagMap $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class ThrottlingException {
  public ErrorMessage $message;
}

class UntagResourceRequest {
  public string $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class ValidationException {
  public ErrorMessage $message;
}

class Version {
}

class bool {
}

class key {
}

class string {
}


<?hh // strict
namespace slack\aws\signer;

interface signer {
  public function CancelSigningProfile(CancelSigningProfileRequest $in): Awaitable<\Errors\Error>;
  public function DescribeSigningJob(DescribeSigningJobRequest $in): Awaitable<\Errors\Result<DescribeSigningJobResponse>>;
  public function GetSigningPlatform(GetSigningPlatformRequest $in): Awaitable<\Errors\Result<GetSigningPlatformResponse>>;
  public function GetSigningProfile(GetSigningProfileRequest $in): Awaitable<\Errors\Result<GetSigningProfileResponse>>;
  public function ListSigningJobs(ListSigningJobsRequest $in): Awaitable<\Errors\Result<ListSigningJobsResponse>>;
  public function ListSigningPlatforms(ListSigningPlatformsRequest $in): Awaitable<\Errors\Result<ListSigningPlatformsResponse>>;
  public function ListSigningProfiles(ListSigningProfilesRequest $in): Awaitable<\Errors\Result<ListSigningProfilesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function PutSigningProfile(PutSigningProfileRequest $in): Awaitable<\Errors\Result<PutSigningProfileResponse>>;
  public function StartSigningJob(StartSigningJobRequest $in): Awaitable<\Errors\Result<StartSigningJobResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
}

class AccessDeniedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class BadRequestException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type BucketName = string;

class CancelSigningProfileRequest {
  public ?ProfileName $profile_name;

  public function __construct(shape(
    ?'profile_name' => ?ProfileName,
  ) $s = shape()) {
    $this->profile_name = $s['profile_name'] ?? '';
  }
}

type Category = string;

type CertificateArn = string;

type ClientRequestToken = string;

type CompletedAt = int;

type CreatedAt = int;

class DescribeSigningJobRequest {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class DescribeSigningJobResponse {
  public ?CompletedAt $completed_at;
  public ?CreatedAt $created_at;
  public ?JobId $job_id;
  public ?SigningPlatformOverrides $overrides;
  public ?PlatformId $platform_id;
  public ?ProfileName $profile_name;
  public ?RequestedBy $requested_by;
  public ?SignedObject $signed_object;
  public ?SigningMaterial $signing_material;
  public ?SigningParameters $signing_parameters;
  public ?Source $source;
  public ?SigningStatus $status;
  public ?StatusReason $status_reason;

  public function __construct(shape(
    ?'completed_at' => ?CompletedAt,
    ?'created_at' => ?CreatedAt,
    ?'job_id' => ?JobId,
    ?'overrides' => ?SigningPlatformOverrides,
    ?'platform_id' => ?PlatformId,
    ?'profile_name' => ?ProfileName,
    ?'requested_by' => ?RequestedBy,
    ?'signed_object' => ?SignedObject,
    ?'signing_material' => ?SigningMaterial,
    ?'signing_parameters' => ?SigningParameters,
    ?'source' => ?Source,
    ?'status' => ?SigningStatus,
    ?'status_reason' => ?StatusReason,
  ) $s = shape()) {
    $this->completed_at = $s['completed_at'] ?? 0;
    $this->created_at = $s['created_at'] ?? 0;
    $this->job_id = $s['job_id'] ?? '';
    $this->overrides = $s['overrides'] ?? null;
    $this->platform_id = $s['platform_id'] ?? '';
    $this->profile_name = $s['profile_name'] ?? '';
    $this->requested_by = $s['requested_by'] ?? '';
    $this->signed_object = $s['signed_object'] ?? null;
    $this->signing_material = $s['signing_material'] ?? null;
    $this->signing_parameters = $s['signing_parameters'] ?? dict[];
    $this->source = $s['source'] ?? null;
    $this->status = $s['status'] ?? '';
    $this->status_reason = $s['status_reason'] ?? '';
  }
}

class Destination {
  public ?S3Destination $s_3;

  public function __construct(shape(
    ?'s_3' => ?S3Destination,
  ) $s = shape()) {
    $this->s_3 = $s['s_3'] ?? null;
  }
}

type DisplayName = string;

type EncryptionAlgorithm = string;

class EncryptionAlgorithmOptions {
  public ?EncryptionAlgorithms $allowed_values;
  public ?EncryptionAlgorithm $default_value;

  public function __construct(shape(
    ?'allowed_values' => ?EncryptionAlgorithms,
    ?'default_value' => ?EncryptionAlgorithm,
  ) $s = shape()) {
    $this->allowed_values = $s['allowed_values'] ?? vec[];
    $this->default_value = $s['default_value'] ?? '';
  }
}

type EncryptionAlgorithms = vec<EncryptionAlgorithm>;

type ErrorMessage = string;

class GetSigningPlatformRequest {
  public ?PlatformId $platform_id;

  public function __construct(shape(
    ?'platform_id' => ?PlatformId,
  ) $s = shape()) {
    $this->platform_id = $s['platform_id'] ?? '';
  }
}

class GetSigningPlatformResponse {
  public ?Category $category;
  public ?DisplayName $display_name;
  public ?MaxSizeInMB $max_size_in_mb;
  public string $partner;
  public ?PlatformId $platform_id;
  public ?SigningConfiguration $signing_configuration;
  public ?SigningImageFormat $signing_image_format;
  public string $target;

  public function __construct(shape(
    ?'category' => ?Category,
    ?'display_name' => ?DisplayName,
    ?'max_size_in_mb' => ?MaxSizeInMB,
    ?'partner' => string,
    ?'platform_id' => ?PlatformId,
    ?'signing_configuration' => ?SigningConfiguration,
    ?'signing_image_format' => ?SigningImageFormat,
    ?'target' => string,
  ) $s = shape()) {
    $this->category = $s['category'] ?? '';
    $this->display_name = $s['display_name'] ?? '';
    $this->max_size_in_mb = $s['max_size_in_mb'] ?? 0;
    $this->partner = $s['partner'] ?? '';
    $this->platform_id = $s['platform_id'] ?? '';
    $this->signing_configuration = $s['signing_configuration'] ?? null;
    $this->signing_image_format = $s['signing_image_format'] ?? null;
    $this->target = $s['target'] ?? '';
  }
}

class GetSigningProfileRequest {
  public ?ProfileName $profile_name;

  public function __construct(shape(
    ?'profile_name' => ?ProfileName,
  ) $s = shape()) {
    $this->profile_name = $s['profile_name'] ?? '';
  }
}

class GetSigningProfileResponse {
  public ?string $arn;
  public ?SigningPlatformOverrides $overrides;
  public ?PlatformId $platform_id;
  public ?ProfileName $profile_name;
  public ?SigningMaterial $signing_material;
  public ?SigningParameters $signing_parameters;
  public ?SigningProfileStatus $status;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'arn' => ?string,
    ?'overrides' => ?SigningPlatformOverrides,
    ?'platform_id' => ?PlatformId,
    ?'profile_name' => ?ProfileName,
    ?'signing_material' => ?SigningMaterial,
    ?'signing_parameters' => ?SigningParameters,
    ?'status' => ?SigningProfileStatus,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->overrides = $s['overrides'] ?? null;
    $this->platform_id = $s['platform_id'] ?? '';
    $this->profile_name = $s['profile_name'] ?? '';
    $this->signing_material = $s['signing_material'] ?? null;
    $this->signing_parameters = $s['signing_parameters'] ?? dict[];
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

type HashAlgorithm = string;

class HashAlgorithmOptions {
  public ?HashAlgorithms $allowed_values;
  public ?HashAlgorithm $default_value;

  public function __construct(shape(
    ?'allowed_values' => ?HashAlgorithms,
    ?'default_value' => ?HashAlgorithm,
  ) $s = shape()) {
    $this->allowed_values = $s['allowed_values'] ?? vec[];
    $this->default_value = $s['default_value'] ?? '';
  }
}

type HashAlgorithms = vec<HashAlgorithm>;

type ImageFormat = string;

type ImageFormats = vec<ImageFormat>;

class InternalServiceErrorException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type JobId = string;

type Key = string;

class ListSigningJobsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?PlatformId $platform_id;
  public ?RequestedBy $requested_by;
  public ?SigningStatus $status;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'platform_id' => ?PlatformId,
    ?'requested_by' => ?RequestedBy,
    ?'status' => ?SigningStatus,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->platform_id = $s['platform_id'] ?? '';
    $this->requested_by = $s['requested_by'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class ListSigningJobsResponse {
  public ?SigningJobs $jobs;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'jobs' => ?SigningJobs,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->jobs = $s['jobs'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSigningPlatformsRequest {
  public string $category;
  public ?MaxResults $max_results;
  public string $next_token;
  public string $partner;
  public string $target;

  public function __construct(shape(
    ?'category' => string,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
    ?'partner' => string,
    ?'target' => string,
  ) $s = shape()) {
    $this->category = $s['category'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->partner = $s['partner'] ?? '';
    $this->target = $s['target'] ?? '';
  }
}

class ListSigningPlatformsResponse {
  public string $next_token;
  public ?SigningPlatforms $platforms;

  public function __construct(shape(
    ?'next_token' => string,
    ?'platforms' => ?SigningPlatforms,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->platforms = $s['platforms'] ?? vec[];
  }
}

class ListSigningProfilesRequest {
  public ?bool $include_canceled;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'include_canceled' => ?bool,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->include_canceled = $s['include_canceled'] ?? false;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSigningProfilesResponse {
  public ?NextToken $next_token;
  public ?SigningProfiles $profiles;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'profiles' => ?SigningProfiles,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->profiles = $s['profiles'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public string $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagMap $tags;

  public function __construct(shape(
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

type MaxResults = int;

type MaxSizeInMB = int;

type NextToken = string;

class NotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PlatformId = string;

type Prefix = string;

type ProfileName = string;

class PutSigningProfileRequest {
  public ?SigningPlatformOverrides $overrides;
  public ?PlatformId $platform_id;
  public ?ProfileName $profile_name;
  public ?SigningMaterial $signing_material;
  public ?SigningParameters $signing_parameters;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'overrides' => ?SigningPlatformOverrides,
    ?'platform_id' => ?PlatformId,
    ?'profile_name' => ?ProfileName,
    ?'signing_material' => ?SigningMaterial,
    ?'signing_parameters' => ?SigningParameters,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->overrides = $s['overrides'] ?? null;
    $this->platform_id = $s['platform_id'] ?? '';
    $this->profile_name = $s['profile_name'] ?? '';
    $this->signing_material = $s['signing_material'] ?? null;
    $this->signing_parameters = $s['signing_parameters'] ?? dict[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class PutSigningProfileResponse {
  public ?string $arn;

  public function __construct(shape(
    ?'arn' => ?string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

type RequestedBy = string;

class ResourceNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class S3Destination {
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

class S3SignedObject {
  public ?BucketName $bucket_name;
  public ?key $key;

  public function __construct(shape(
    ?'bucket_name' => ?BucketName,
    ?'key' => ?key,
  ) $s = shape()) {
    $this->bucket_name = $s['bucket_name'] ?? '';
    $this->key = $s['key'] ?? '';
  }
}

class S3Source {
  public ?BucketName $bucket_name;
  public ?Key $key;
  public ?Version $version;

  public function __construct(shape(
    ?'bucket_name' => ?BucketName,
    ?'key' => ?Key,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->bucket_name = $s['bucket_name'] ?? '';
    $this->key = $s['key'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class SignedObject {
  public ?S3SignedObject $s_3;

  public function __construct(shape(
    ?'s_3' => ?S3SignedObject,
  ) $s = shape()) {
    $this->s_3 = $s['s_3'] ?? null;
  }
}

class SigningConfiguration {
  public ?EncryptionAlgorithmOptions $encryption_algorithm_options;
  public ?HashAlgorithmOptions $hash_algorithm_options;

  public function __construct(shape(
    ?'encryption_algorithm_options' => ?EncryptionAlgorithmOptions,
    ?'hash_algorithm_options' => ?HashAlgorithmOptions,
  ) $s = shape()) {
    $this->encryption_algorithm_options = $s['encryption_algorithm_options'] ?? null;
    $this->hash_algorithm_options = $s['hash_algorithm_options'] ?? null;
  }
}

class SigningConfigurationOverrides {
  public ?EncryptionAlgorithm $encryption_algorithm;
  public ?HashAlgorithm $hash_algorithm;

  public function __construct(shape(
    ?'encryption_algorithm' => ?EncryptionAlgorithm,
    ?'hash_algorithm' => ?HashAlgorithm,
  ) $s = shape()) {
    $this->encryption_algorithm = $s['encryption_algorithm'] ?? '';
    $this->hash_algorithm = $s['hash_algorithm'] ?? '';
  }
}

class SigningImageFormat {
  public ?ImageFormat $default_format;
  public ?ImageFormats $supported_formats;

  public function __construct(shape(
    ?'default_format' => ?ImageFormat,
    ?'supported_formats' => ?ImageFormats,
  ) $s = shape()) {
    $this->default_format = $s['default_format'] ?? '';
    $this->supported_formats = $s['supported_formats'] ?? vec[];
  }
}

class SigningJob {
  public ?CreatedAt $created_at;
  public ?JobId $job_id;
  public ?SignedObject $signed_object;
  public ?SigningMaterial $signing_material;
  public ?Source $source;
  public ?SigningStatus $status;

  public function __construct(shape(
    ?'created_at' => ?CreatedAt,
    ?'job_id' => ?JobId,
    ?'signed_object' => ?SignedObject,
    ?'signing_material' => ?SigningMaterial,
    ?'source' => ?Source,
    ?'status' => ?SigningStatus,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->job_id = $s['job_id'] ?? '';
    $this->signed_object = $s['signed_object'] ?? null;
    $this->signing_material = $s['signing_material'] ?? null;
    $this->source = $s['source'] ?? null;
    $this->status = $s['status'] ?? '';
  }
}

type SigningJobs = vec<SigningJob>;

class SigningMaterial {
  public ?CertificateArn $certificate_arn;

  public function __construct(shape(
    ?'certificate_arn' => ?CertificateArn,
  ) $s = shape()) {
    $this->certificate_arn = $s['certificate_arn'] ?? '';
  }
}

type SigningParameterKey = string;

type SigningParameterValue = string;

type SigningParameters = dict<SigningParameterKey, SigningParameterValue>;

class SigningPlatform {
  public ?Category $category;
  public string $display_name;
  public ?MaxSizeInMB $max_size_in_mb;
  public string $partner;
  public string $platform_id;
  public ?SigningConfiguration $signing_configuration;
  public ?SigningImageFormat $signing_image_format;
  public string $target;

  public function __construct(shape(
    ?'category' => ?Category,
    ?'display_name' => string,
    ?'max_size_in_mb' => ?MaxSizeInMB,
    ?'partner' => string,
    ?'platform_id' => string,
    ?'signing_configuration' => ?SigningConfiguration,
    ?'signing_image_format' => ?SigningImageFormat,
    ?'target' => string,
  ) $s = shape()) {
    $this->category = $s['category'] ?? '';
    $this->display_name = $s['display_name'] ?? '';
    $this->max_size_in_mb = $s['max_size_in_mb'] ?? 0;
    $this->partner = $s['partner'] ?? '';
    $this->platform_id = $s['platform_id'] ?? '';
    $this->signing_configuration = $s['signing_configuration'] ?? null;
    $this->signing_image_format = $s['signing_image_format'] ?? null;
    $this->target = $s['target'] ?? '';
  }
}

class SigningPlatformOverrides {
  public ?SigningConfigurationOverrides $signing_configuration;
  public ?ImageFormat $signing_image_format;

  public function __construct(shape(
    ?'signing_configuration' => ?SigningConfigurationOverrides,
    ?'signing_image_format' => ?ImageFormat,
  ) $s = shape()) {
    $this->signing_configuration = $s['signing_configuration'] ?? null;
    $this->signing_image_format = $s['signing_image_format'] ?? '';
  }
}

type SigningPlatforms = vec<SigningPlatform>;

class SigningProfile {
  public ?string $arn;
  public ?PlatformId $platform_id;
  public ?ProfileName $profile_name;
  public ?SigningMaterial $signing_material;
  public ?SigningParameters $signing_parameters;
  public ?SigningProfileStatus $status;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'arn' => ?string,
    ?'platform_id' => ?PlatformId,
    ?'profile_name' => ?ProfileName,
    ?'signing_material' => ?SigningMaterial,
    ?'signing_parameters' => ?SigningParameters,
    ?'status' => ?SigningProfileStatus,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->platform_id = $s['platform_id'] ?? '';
    $this->profile_name = $s['profile_name'] ?? '';
    $this->signing_material = $s['signing_material'] ?? null;
    $this->signing_parameters = $s['signing_parameters'] ?? dict[];
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

type SigningProfileStatus = string;

type SigningProfiles = vec<SigningProfile>;

type SigningStatus = string;

class Source {
  public ?S3Source $s_3;

  public function __construct(shape(
    ?'s_3' => ?S3Source,
  ) $s = shape()) {
    $this->s_3 = $s['s_3'] ?? null;
  }
}

class StartSigningJobRequest {
  public ?ClientRequestToken $client_request_token;
  public ?Destination $destination;
  public ?ProfileName $profile_name;
  public ?Source $source;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'destination' => ?Destination,
    ?'profile_name' => ?ProfileName,
    ?'source' => ?Source,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->destination = $s['destination'] ?? null;
    $this->profile_name = $s['profile_name'] ?? '';
    $this->source = $s['source'] ?? null;
  }
}

class StartSigningJobResponse {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

type StatusReason = string;

type String = string;

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public string $resource_arn;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'resource_arn' => string,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class ThrottlingException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceRequest {
  public string $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => string,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ValidationException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Version = string;

type bool = bool;

type key = string;

type string = string;


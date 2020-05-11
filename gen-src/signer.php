<?hh // strict
namespace slack\aws\signer;

interface signer {
  public function CancelSigningProfile(CancelSigningProfileRequest): Awaitable<Errors\Error>;
  public function DescribeSigningJob(DescribeSigningJobRequest): Awaitable<Errors\Result<DescribeSigningJobResponse>>;
  public function GetSigningPlatform(GetSigningPlatformRequest): Awaitable<Errors\Result<GetSigningPlatformResponse>>;
  public function GetSigningProfile(GetSigningProfileRequest): Awaitable<Errors\Result<GetSigningProfileResponse>>;
  public function ListSigningJobs(ListSigningJobsRequest): Awaitable<Errors\Result<ListSigningJobsResponse>>;
  public function ListSigningPlatforms(ListSigningPlatformsRequest): Awaitable<Errors\Result<ListSigningPlatformsResponse>>;
  public function ListSigningProfiles(ListSigningProfilesRequest): Awaitable<Errors\Result<ListSigningProfilesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutSigningProfile(PutSigningProfileRequest): Awaitable<Errors\Result<PutSigningProfileResponse>>;
  public function StartSigningJob(StartSigningJobRequest): Awaitable<Errors\Result<StartSigningJobResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
}

class AccessDeniedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class BadRequestException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type BucketName = string;

class CancelSigningProfileRequest {
  public ProfileName $profile_name;

  public function __construct(shape(
  ?'profile_name' => ProfileName,
  ) $s = shape()) {
    $this->profile_name = $profile_name ?? "";
  }
}

type Category = string;

type CertificateArn = string;

type ClientRequestToken = string;

type CompletedAt = int;

type CreatedAt = int;

class DescribeSigningJobRequest {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
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

  public function __construct(shape(
  ?'completed_at' => CompletedAt,
  ?'created_at' => CreatedAt,
  ?'job_id' => JobId,
  ?'overrides' => SigningPlatformOverrides,
  ?'platform_id' => PlatformId,
  ?'profile_name' => ProfileName,
  ?'requested_by' => RequestedBy,
  ?'signed_object' => SignedObject,
  ?'signing_material' => SigningMaterial,
  ?'signing_parameters' => SigningParameters,
  ?'source' => Source,
  ?'status' => SigningStatus,
  ?'status_reason' => StatusReason,
  ) $s = shape()) {
    $this->completed_at = $completed_at ?? 0;
    $this->created_at = $created_at ?? 0;
    $this->job_id = $job_id ?? "";
    $this->overrides = $overrides ?? null;
    $this->platform_id = $platform_id ?? "";
    $this->profile_name = $profile_name ?? "";
    $this->requested_by = $requested_by ?? "";
    $this->signed_object = $signed_object ?? null;
    $this->signing_material = $signing_material ?? null;
    $this->signing_parameters = $signing_parameters ?? [];
    $this->source = $source ?? null;
    $this->status = $status ?? "";
    $this->status_reason = $status_reason ?? "";
  }
}

class Destination {
  public S3Destination $s_3;

  public function __construct(shape(
  ?'s_3' => S3Destination,
  ) $s = shape()) {
    $this->s_3 = $s_3 ?? null;
  }
}

type DisplayName = string;

type EncryptionAlgorithm = string;

class EncryptionAlgorithmOptions {
  public EncryptionAlgorithms $allowed_values;
  public EncryptionAlgorithm $default_value;

  public function __construct(shape(
  ?'allowed_values' => EncryptionAlgorithms,
  ?'default_value' => EncryptionAlgorithm,
  ) $s = shape()) {
    $this->allowed_values = $allowed_values ?? [];
    $this->default_value = $default_value ?? "";
  }
}

type EncryptionAlgorithms = vec<EncryptionAlgorithm>;

type ErrorMessage = string;

class GetSigningPlatformRequest {
  public PlatformId $platform_id;

  public function __construct(shape(
  ?'platform_id' => PlatformId,
  ) $s = shape()) {
    $this->platform_id = $platform_id ?? "";
  }
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

  public function __construct(shape(
  ?'category' => Category,
  ?'display_name' => DisplayName,
  ?'max_size_in_mb' => MaxSizeInMB,
  ?'partner' => string,
  ?'platform_id' => PlatformId,
  ?'signing_configuration' => SigningConfiguration,
  ?'signing_image_format' => SigningImageFormat,
  ?'target' => string,
  ) $s = shape()) {
    $this->category = $category ?? "";
    $this->display_name = $display_name ?? "";
    $this->max_size_in_mb = $max_size_in_mb ?? 0;
    $this->partner = $partner ?? "";
    $this->platform_id = $platform_id ?? "";
    $this->signing_configuration = $signing_configuration ?? null;
    $this->signing_image_format = $signing_image_format ?? null;
    $this->target = $target ?? "";
  }
}

class GetSigningProfileRequest {
  public ProfileName $profile_name;

  public function __construct(shape(
  ?'profile_name' => ProfileName,
  ) $s = shape()) {
    $this->profile_name = $profile_name ?? "";
  }
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

  public function __construct(shape(
  ?'arn' => string,
  ?'overrides' => SigningPlatformOverrides,
  ?'platform_id' => PlatformId,
  ?'profile_name' => ProfileName,
  ?'signing_material' => SigningMaterial,
  ?'signing_parameters' => SigningParameters,
  ?'status' => SigningProfileStatus,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->overrides = $overrides ?? null;
    $this->platform_id = $platform_id ?? "";
    $this->profile_name = $profile_name ?? "";
    $this->signing_material = $signing_material ?? null;
    $this->signing_parameters = $signing_parameters ?? [];
    $this->status = $status ?? "";
    $this->tags = $tags ?? [];
  }
}

type HashAlgorithm = string;

class HashAlgorithmOptions {
  public HashAlgorithms $allowed_values;
  public HashAlgorithm $default_value;

  public function __construct(shape(
  ?'allowed_values' => HashAlgorithms,
  ?'default_value' => HashAlgorithm,
  ) $s = shape()) {
    $this->allowed_values = $allowed_values ?? [];
    $this->default_value = $default_value ?? "";
  }
}

type HashAlgorithms = vec<HashAlgorithm>;

type ImageFormat = string;

type ImageFormats = vec<ImageFormat>;

class InternalServiceErrorException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type JobId = string;

type Key = string;

class ListSigningJobsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public PlatformId $platform_id;
  public RequestedBy $requested_by;
  public SigningStatus $status;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'platform_id' => PlatformId,
  ?'requested_by' => RequestedBy,
  ?'status' => SigningStatus,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->platform_id = $platform_id ?? "";
    $this->requested_by = $requested_by ?? "";
    $this->status = $status ?? "";
  }
}

class ListSigningJobsResponse {
  public SigningJobs $jobs;
  public NextToken $next_token;

  public function __construct(shape(
  ?'jobs' => SigningJobs,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->jobs = $jobs ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListSigningPlatformsRequest {
  public string $category;
  public MaxResults $max_results;
  public string $next_token;
  public string $partner;
  public string $target;

  public function __construct(shape(
  ?'category' => string,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ?'partner' => string,
  ?'target' => string,
  ) $s = shape()) {
    $this->category = $category ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->partner = $partner ?? "";
    $this->target = $target ?? "";
  }
}

class ListSigningPlatformsResponse {
  public string $next_token;
  public SigningPlatforms $platforms;

  public function __construct(shape(
  ?'next_token' => string,
  ?'platforms' => SigningPlatforms,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->platforms = $platforms ?? [];
  }
}

class ListSigningProfilesRequest {
  public bool $include_canceled;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'include_canceled' => bool,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->include_canceled = $include_canceled ?? false;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListSigningProfilesResponse {
  public NextToken $next_token;
  public SigningProfiles $profiles;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'profiles' => SigningProfiles,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->profiles = $profiles ?? [];
  }
}

class ListTagsForResourceRequest {
  public string $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagMap $tags;

  public function __construct(shape(
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

type MaxResults = int;

type MaxSizeInMB = int;

type NextToken = string;

class NotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type PlatformId = string;

type Prefix = string;

type ProfileName = string;

class PutSigningProfileRequest {
  public SigningPlatformOverrides $overrides;
  public PlatformId $platform_id;
  public ProfileName $profile_name;
  public SigningMaterial $signing_material;
  public SigningParameters $signing_parameters;
  public TagMap $tags;

  public function __construct(shape(
  ?'overrides' => SigningPlatformOverrides,
  ?'platform_id' => PlatformId,
  ?'profile_name' => ProfileName,
  ?'signing_material' => SigningMaterial,
  ?'signing_parameters' => SigningParameters,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->overrides = $overrides ?? null;
    $this->platform_id = $platform_id ?? "";
    $this->profile_name = $profile_name ?? "";
    $this->signing_material = $signing_material ?? null;
    $this->signing_parameters = $signing_parameters ?? [];
    $this->tags = $tags ?? [];
  }
}

class PutSigningProfileResponse {
  public string $arn;

  public function __construct(shape(
  ?'arn' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

type RequestedBy = string;

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class S3Destination {
  public BucketName $bucket_name;
  public Prefix $prefix;

  public function __construct(shape(
  ?'bucket_name' => BucketName,
  ?'prefix' => Prefix,
  ) $s = shape()) {
    $this->bucket_name = $bucket_name ?? "";
    $this->prefix = $prefix ?? "";
  }
}

class S3SignedObject {
  public BucketName $bucket_name;
  public key $key;

  public function __construct(shape(
  ?'bucket_name' => BucketName,
  ?'key' => key,
  ) $s = shape()) {
    $this->bucket_name = $bucket_name ?? "";
    $this->key = $key ?? "";
  }
}

class S3Source {
  public BucketName $bucket_name;
  public Key $key;
  public Version $version;

  public function __construct(shape(
  ?'bucket_name' => BucketName,
  ?'key' => Key,
  ?'version' => Version,
  ) $s = shape()) {
    $this->bucket_name = $bucket_name ?? "";
    $this->key = $key ?? "";
    $this->version = $version ?? "";
  }
}

class SignedObject {
  public S3SignedObject $s_3;

  public function __construct(shape(
  ?'s_3' => S3SignedObject,
  ) $s = shape()) {
    $this->s_3 = $s_3 ?? null;
  }
}

class SigningConfiguration {
  public EncryptionAlgorithmOptions $encryption_algorithm_options;
  public HashAlgorithmOptions $hash_algorithm_options;

  public function __construct(shape(
  ?'encryption_algorithm_options' => EncryptionAlgorithmOptions,
  ?'hash_algorithm_options' => HashAlgorithmOptions,
  ) $s = shape()) {
    $this->encryption_algorithm_options = $encryption_algorithm_options ?? null;
    $this->hash_algorithm_options = $hash_algorithm_options ?? null;
  }
}

class SigningConfigurationOverrides {
  public EncryptionAlgorithm $encryption_algorithm;
  public HashAlgorithm $hash_algorithm;

  public function __construct(shape(
  ?'encryption_algorithm' => EncryptionAlgorithm,
  ?'hash_algorithm' => HashAlgorithm,
  ) $s = shape()) {
    $this->encryption_algorithm = $encryption_algorithm ?? "";
    $this->hash_algorithm = $hash_algorithm ?? "";
  }
}

class SigningImageFormat {
  public ImageFormat $default_format;
  public ImageFormats $supported_formats;

  public function __construct(shape(
  ?'default_format' => ImageFormat,
  ?'supported_formats' => ImageFormats,
  ) $s = shape()) {
    $this->default_format = $default_format ?? "";
    $this->supported_formats = $supported_formats ?? [];
  }
}

class SigningJob {
  public CreatedAt $created_at;
  public JobId $job_id;
  public SignedObject $signed_object;
  public SigningMaterial $signing_material;
  public Source $source;
  public SigningStatus $status;

  public function __construct(shape(
  ?'created_at' => CreatedAt,
  ?'job_id' => JobId,
  ?'signed_object' => SignedObject,
  ?'signing_material' => SigningMaterial,
  ?'source' => Source,
  ?'status' => SigningStatus,
  ) $s = shape()) {
    $this->created_at = $created_at ?? 0;
    $this->job_id = $job_id ?? "";
    $this->signed_object = $signed_object ?? null;
    $this->signing_material = $signing_material ?? null;
    $this->source = $source ?? null;
    $this->status = $status ?? "";
  }
}

type SigningJobs = vec<SigningJob>;

class SigningMaterial {
  public CertificateArn $certificate_arn;

  public function __construct(shape(
  ?'certificate_arn' => CertificateArn,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
  }
}

type SigningParameterKey = string;

type SigningParameterValue = string;

type SigningParameters = dict<SigningParameterKey, SigningParameterValue>;

class SigningPlatform {
  public Category $category;
  public string $display_name;
  public MaxSizeInMB $max_size_in_mb;
  public string $partner;
  public string $platform_id;
  public SigningConfiguration $signing_configuration;
  public SigningImageFormat $signing_image_format;
  public string $target;

  public function __construct(shape(
  ?'category' => Category,
  ?'display_name' => string,
  ?'max_size_in_mb' => MaxSizeInMB,
  ?'partner' => string,
  ?'platform_id' => string,
  ?'signing_configuration' => SigningConfiguration,
  ?'signing_image_format' => SigningImageFormat,
  ?'target' => string,
  ) $s = shape()) {
    $this->category = $category ?? "";
    $this->display_name = $display_name ?? "";
    $this->max_size_in_mb = $max_size_in_mb ?? 0;
    $this->partner = $partner ?? "";
    $this->platform_id = $platform_id ?? "";
    $this->signing_configuration = $signing_configuration ?? null;
    $this->signing_image_format = $signing_image_format ?? null;
    $this->target = $target ?? "";
  }
}

class SigningPlatformOverrides {
  public SigningConfigurationOverrides $signing_configuration;
  public ImageFormat $signing_image_format;

  public function __construct(shape(
  ?'signing_configuration' => SigningConfigurationOverrides,
  ?'signing_image_format' => ImageFormat,
  ) $s = shape()) {
    $this->signing_configuration = $signing_configuration ?? null;
    $this->signing_image_format = $signing_image_format ?? "";
  }
}

type SigningPlatforms = vec<SigningPlatform>;

class SigningProfile {
  public string $arn;
  public PlatformId $platform_id;
  public ProfileName $profile_name;
  public SigningMaterial $signing_material;
  public SigningParameters $signing_parameters;
  public SigningProfileStatus $status;
  public TagMap $tags;

  public function __construct(shape(
  ?'arn' => string,
  ?'platform_id' => PlatformId,
  ?'profile_name' => ProfileName,
  ?'signing_material' => SigningMaterial,
  ?'signing_parameters' => SigningParameters,
  ?'status' => SigningProfileStatus,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->platform_id = $platform_id ?? "";
    $this->profile_name = $profile_name ?? "";
    $this->signing_material = $signing_material ?? null;
    $this->signing_parameters = $signing_parameters ?? [];
    $this->status = $status ?? "";
    $this->tags = $tags ?? [];
  }
}

type SigningProfileStatus = string;

type SigningProfiles = vec<SigningProfile>;

type SigningStatus = string;

class Source {
  public S3Source $s_3;

  public function __construct(shape(
  ?'s_3' => S3Source,
  ) $s = shape()) {
    $this->s_3 = $s_3 ?? null;
  }
}

class StartSigningJobRequest {
  public ClientRequestToken $client_request_token;
  public Destination $destination;
  public ProfileName $profile_name;
  public Source $source;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'destination' => Destination,
  ?'profile_name' => ProfileName,
  ?'source' => Source,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->destination = $destination ?? null;
    $this->profile_name = $profile_name ?? "";
    $this->source = $source ?? null;
  }
}

class StartSigningJobResponse {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

type StatusReason = string;

type String = string;

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public string $resource_arn;
  public TagMap $tags;

  public function __construct(shape(
  ?'resource_arn' => string,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class ThrottlingException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UntagResourceRequest {
  public string $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => string,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ValidationException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Version = string;

type bool = bool;

type key = string;

type string = string;


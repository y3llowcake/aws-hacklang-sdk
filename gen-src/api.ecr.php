<?hh // strict
namespace slack\aws\api.ecr;

interface ECR {
  public function BatchCheckLayerAvailability(BatchCheckLayerAvailabilityRequest $in): Awaitable<\Errors\Result<BatchCheckLayerAvailabilityResponse>>;
  public function BatchDeleteImage(BatchDeleteImageRequest $in): Awaitable<\Errors\Result<BatchDeleteImageResponse>>;
  public function BatchGetImage(BatchGetImageRequest $in): Awaitable<\Errors\Result<BatchGetImageResponse>>;
  public function CompleteLayerUpload(CompleteLayerUploadRequest $in): Awaitable<\Errors\Result<CompleteLayerUploadResponse>>;
  public function CreateRepository(CreateRepositoryRequest $in): Awaitable<\Errors\Result<CreateRepositoryResponse>>;
  public function DeleteLifecyclePolicy(DeleteLifecyclePolicyRequest $in): Awaitable<\Errors\Result<DeleteLifecyclePolicyResponse>>;
  public function DeleteRepository(DeleteRepositoryRequest $in): Awaitable<\Errors\Result<DeleteRepositoryResponse>>;
  public function DeleteRepositoryPolicy(DeleteRepositoryPolicyRequest $in): Awaitable<\Errors\Result<DeleteRepositoryPolicyResponse>>;
  public function DescribeImageScanFindings(DescribeImageScanFindingsRequest $in): Awaitable<\Errors\Result<DescribeImageScanFindingsResponse>>;
  public function DescribeImages(DescribeImagesRequest $in): Awaitable<\Errors\Result<DescribeImagesResponse>>;
  public function DescribeRepositories(DescribeRepositoriesRequest $in): Awaitable<\Errors\Result<DescribeRepositoriesResponse>>;
  public function GetAuthorizationToken(GetAuthorizationTokenRequest $in): Awaitable<\Errors\Result<GetAuthorizationTokenResponse>>;
  public function GetDownloadUrlForLayer(GetDownloadUrlForLayerRequest $in): Awaitable<\Errors\Result<GetDownloadUrlForLayerResponse>>;
  public function GetLifecyclePolicy(GetLifecyclePolicyRequest $in): Awaitable<\Errors\Result<GetLifecyclePolicyResponse>>;
  public function GetLifecyclePolicyPreview(GetLifecyclePolicyPreviewRequest $in): Awaitable<\Errors\Result<GetLifecyclePolicyPreviewResponse>>;
  public function GetRepositoryPolicy(GetRepositoryPolicyRequest $in): Awaitable<\Errors\Result<GetRepositoryPolicyResponse>>;
  public function InitiateLayerUpload(InitiateLayerUploadRequest $in): Awaitable<\Errors\Result<InitiateLayerUploadResponse>>;
  public function ListImages(ListImagesRequest $in): Awaitable<\Errors\Result<ListImagesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function PutImage(PutImageRequest $in): Awaitable<\Errors\Result<PutImageResponse>>;
  public function PutImageScanningConfiguration(PutImageScanningConfigurationRequest $in): Awaitable<\Errors\Result<PutImageScanningConfigurationResponse>>;
  public function PutImageTagMutability(PutImageTagMutabilityRequest $in): Awaitable<\Errors\Result<PutImageTagMutabilityResponse>>;
  public function PutLifecyclePolicy(PutLifecyclePolicyRequest $in): Awaitable<\Errors\Result<PutLifecyclePolicyResponse>>;
  public function SetRepositoryPolicy(SetRepositoryPolicyRequest $in): Awaitable<\Errors\Result<SetRepositoryPolicyResponse>>;
  public function StartImageScan(StartImageScanRequest $in): Awaitable<\Errors\Result<StartImageScanResponse>>;
  public function StartLifecyclePolicyPreview(StartLifecyclePolicyPreviewRequest $in): Awaitable<\Errors\Result<StartLifecyclePolicyPreviewResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UploadLayerPart(UploadLayerPartRequest $in): Awaitable<\Errors\Result<UploadLayerPartResponse>>;
}

type Arn = string;

class Attribute {
  public ?AttributeKey $key;
  public ?AttributeValue $value;

  public function __construct(shape(
    ?'key' => ?AttributeKey,
    ?'value' => ?AttributeValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type AttributeKey = string;

type AttributeList = vec<Attribute>;

type AttributeValue = string;

class AuthorizationData {
  public ?Base64 $authorization_token;
  public ?ExpirationTimestamp $expires_at;
  public ?ProxyEndpoint $proxy_endpoint;

  public function __construct(shape(
    ?'authorization_token' => ?Base64,
    ?'expires_at' => ?ExpirationTimestamp,
    ?'proxy_endpoint' => ?ProxyEndpoint,
  ) $s = shape()) {
    $this->authorization_token = $s['authorization_token'] ?? '';
    $this->expires_at = $s['expires_at'] ?? 0;
    $this->proxy_endpoint = $s['proxy_endpoint'] ?? '';
  }
}

type AuthorizationDataList = vec<AuthorizationData>;

type Base64 = string;

class BatchCheckLayerAvailabilityRequest {
  public ?BatchedOperationLayerDigestList $layer_digests;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'layer_digests' => ?BatchedOperationLayerDigestList,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->layer_digests = $s['layer_digests'] ?? vec[];
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class BatchCheckLayerAvailabilityResponse {
  public ?LayerFailureList $failures;
  public ?LayerList $layers;

  public function __construct(shape(
    ?'failures' => ?LayerFailureList,
    ?'layers' => ?LayerList,
  ) $s = shape()) {
    $this->failures = $s['failures'] ?? vec[];
    $this->layers = $s['layers'] ?? vec[];
  }
}

class BatchDeleteImageRequest {
  public ?ImageIdentifierList $image_ids;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'image_ids' => ?ImageIdentifierList,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->image_ids = $s['image_ids'] ?? vec[];
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class BatchDeleteImageResponse {
  public ?ImageFailureList $failures;
  public ?ImageIdentifierList $image_ids;

  public function __construct(shape(
    ?'failures' => ?ImageFailureList,
    ?'image_ids' => ?ImageIdentifierList,
  ) $s = shape()) {
    $this->failures = $s['failures'] ?? vec[];
    $this->image_ids = $s['image_ids'] ?? vec[];
  }
}

class BatchGetImageRequest {
  public ?MediaTypeList $accepted_media_types;
  public ?ImageIdentifierList $image_ids;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'accepted_media_types' => ?MediaTypeList,
    ?'image_ids' => ?ImageIdentifierList,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->accepted_media_types = $s['accepted_media_types'] ?? vec[];
    $this->image_ids = $s['image_ids'] ?? vec[];
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class BatchGetImageResponse {
  public ?ImageFailureList $failures;
  public ?ImageList $images;

  public function __construct(shape(
    ?'failures' => ?ImageFailureList,
    ?'images' => ?ImageList,
  ) $s = shape()) {
    $this->failures = $s['failures'] ?? vec[];
    $this->images = $s['images'] ?? vec[];
  }
}

type BatchedOperationLayerDigest = string;

type BatchedOperationLayerDigestList = vec<BatchedOperationLayerDigest>;

class CompleteLayerUploadRequest {
  public ?LayerDigestList $layer_digests;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;
  public ?UploadId $upload_id;

  public function __construct(shape(
    ?'layer_digests' => ?LayerDigestList,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
    ?'upload_id' => ?UploadId,
  ) $s = shape()) {
    $this->layer_digests = $s['layer_digests'] ?? vec[];
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->upload_id = $s['upload_id'] ?? '';
  }
}

class CompleteLayerUploadResponse {
  public ?LayerDigest $layer_digest;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;
  public ?UploadId $upload_id;

  public function __construct(shape(
    ?'layer_digest' => ?LayerDigest,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
    ?'upload_id' => ?UploadId,
  ) $s = shape()) {
    $this->layer_digest = $s['layer_digest'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->upload_id = $s['upload_id'] ?? '';
  }
}

class CreateRepositoryRequest {
  public ?ImageScanningConfiguration $image_scanning_configuration;
  public ?ImageTagMutability $image_tag_mutability;
  public ?RepositoryName $repository_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'image_scanning_configuration' => ?ImageScanningConfiguration,
    ?'image_tag_mutability' => ?ImageTagMutability,
    ?'repository_name' => ?RepositoryName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->image_scanning_configuration = $s['image_scanning_configuration'] ?? null;
    $this->image_tag_mutability = $s['image_tag_mutability'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateRepositoryResponse {
  public ?Repository $repository;

  public function __construct(shape(
    ?'repository' => ?Repository,
  ) $s = shape()) {
    $this->repository = $s['repository'] ?? null;
  }
}

type CreationTimestamp = int;

class DeleteLifecyclePolicyRequest {
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class DeleteLifecyclePolicyResponse {
  public ?EvaluationTimestamp $last_evaluated_at;
  public ?LifecyclePolicyText $lifecycle_policy_text;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'last_evaluated_at' => ?EvaluationTimestamp,
    ?'lifecycle_policy_text' => ?LifecyclePolicyText,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->last_evaluated_at = $s['last_evaluated_at'] ?? 0;
    $this->lifecycle_policy_text = $s['lifecycle_policy_text'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class DeleteRepositoryPolicyRequest {
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class DeleteRepositoryPolicyResponse {
  public ?RepositoryPolicyText $policy_text;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'policy_text' => ?RepositoryPolicyText,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->policy_text = $s['policy_text'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class DeleteRepositoryRequest {
  public ?ForceFlag $force;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'force' => ?ForceFlag,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->force = $s['force'] ?? false;
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class DeleteRepositoryResponse {
  public ?Repository $repository;

  public function __construct(shape(
    ?'repository' => ?Repository,
  ) $s = shape()) {
    $this->repository = $s['repository'] ?? null;
  }
}

class DescribeImageScanFindingsRequest {
  public ?ImageIdentifier $image_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'image_id' => ?ImageIdentifier,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->image_id = $s['image_id'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class DescribeImageScanFindingsResponse {
  public ?ImageIdentifier $image_id;
  public ?ImageScanFindings $image_scan_findings;
  public ?ImageScanStatus $image_scan_status;
  public ?NextToken $next_token;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'image_id' => ?ImageIdentifier,
    ?'image_scan_findings' => ?ImageScanFindings,
    ?'image_scan_status' => ?ImageScanStatus,
    ?'next_token' => ?NextToken,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->image_id = $s['image_id'] ?? null;
    $this->image_scan_findings = $s['image_scan_findings'] ?? null;
    $this->image_scan_status = $s['image_scan_status'] ?? null;
    $this->next_token = $s['next_token'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class DescribeImagesFilter {
  public ?TagStatus $tag_status;

  public function __construct(shape(
    ?'tag_status' => ?TagStatus,
  ) $s = shape()) {
    $this->tag_status = $s['tag_status'] ?? '';
  }
}

class DescribeImagesRequest {
  public ?DescribeImagesFilter $filter;
  public ?ImageIdentifierList $image_ids;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'filter' => ?DescribeImagesFilter,
    ?'image_ids' => ?ImageIdentifierList,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->image_ids = $s['image_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class DescribeImagesResponse {
  public ?ImageDetailList $image_details;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'image_details' => ?ImageDetailList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->image_details = $s['image_details'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeRepositoriesRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?RegistryId $registry_id;
  public ?RepositoryNameList $repository_names;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'registry_id' => ?RegistryId,
    ?'repository_names' => ?RepositoryNameList,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_names = $s['repository_names'] ?? vec[];
  }
}

class DescribeRepositoriesResponse {
  public ?NextToken $next_token;
  public ?RepositoryList $repositories;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'repositories' => ?RepositoryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->repositories = $s['repositories'] ?? vec[];
  }
}

class EmptyUploadException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type EvaluationTimestamp = int;

type ExceptionMessage = string;

type ExpirationTimestamp = int;

type FindingDescription = string;

type FindingName = string;

type FindingSeverity = string;

type FindingSeverityCounts = dict<FindingSeverity, SeverityCount>;

type ForceFlag = bool;

type GetAuthorizationTokenRegistryIdList = vec<RegistryId>;

class GetAuthorizationTokenRequest {
  public ?GetAuthorizationTokenRegistryIdList $registry_ids;

  public function __construct(shape(
    ?'registry_ids' => ?GetAuthorizationTokenRegistryIdList,
  ) $s = shape()) {
    $this->registry_ids = $s['registry_ids'] ?? vec[];
  }
}

class GetAuthorizationTokenResponse {
  public ?AuthorizationDataList $authorization_data;

  public function __construct(shape(
    ?'authorization_data' => ?AuthorizationDataList,
  ) $s = shape()) {
    $this->authorization_data = $s['authorization_data'] ?? vec[];
  }
}

class GetDownloadUrlForLayerRequest {
  public ?LayerDigest $layer_digest;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'layer_digest' => ?LayerDigest,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->layer_digest = $s['layer_digest'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class GetDownloadUrlForLayerResponse {
  public ?Url $download_url;
  public ?LayerDigest $layer_digest;

  public function __construct(shape(
    ?'download_url' => ?Url,
    ?'layer_digest' => ?LayerDigest,
  ) $s = shape()) {
    $this->download_url = $s['download_url'] ?? '';
    $this->layer_digest = $s['layer_digest'] ?? '';
  }
}

class GetLifecyclePolicyPreviewRequest {
  public ?LifecyclePolicyPreviewFilter $filter;
  public ?ImageIdentifierList $image_ids;
  public ?LifecyclePreviewMaxResults $max_results;
  public ?NextToken $next_token;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'filter' => ?LifecyclePolicyPreviewFilter,
    ?'image_ids' => ?ImageIdentifierList,
    ?'max_results' => ?LifecyclePreviewMaxResults,
    ?'next_token' => ?NextToken,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->image_ids = $s['image_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class GetLifecyclePolicyPreviewResponse {
  public ?LifecyclePolicyText $lifecycle_policy_text;
  public ?NextToken $next_token;
  public ?LifecyclePolicyPreviewResultList $preview_results;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;
  public ?LifecyclePolicyPreviewStatus $status;
  public ?LifecyclePolicyPreviewSummary $summary;

  public function __construct(shape(
    ?'lifecycle_policy_text' => ?LifecyclePolicyText,
    ?'next_token' => ?NextToken,
    ?'preview_results' => ?LifecyclePolicyPreviewResultList,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
    ?'status' => ?LifecyclePolicyPreviewStatus,
    ?'summary' => ?LifecyclePolicyPreviewSummary,
  ) $s = shape()) {
    $this->lifecycle_policy_text = $s['lifecycle_policy_text'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->preview_results = $s['preview_results'] ?? vec[];
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->summary = $s['summary'] ?? null;
  }
}

class GetLifecyclePolicyRequest {
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class GetLifecyclePolicyResponse {
  public ?EvaluationTimestamp $last_evaluated_at;
  public ?LifecyclePolicyText $lifecycle_policy_text;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'last_evaluated_at' => ?EvaluationTimestamp,
    ?'lifecycle_policy_text' => ?LifecyclePolicyText,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->last_evaluated_at = $s['last_evaluated_at'] ?? 0;
    $this->lifecycle_policy_text = $s['lifecycle_policy_text'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class GetRepositoryPolicyRequest {
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class GetRepositoryPolicyResponse {
  public ?RepositoryPolicyText $policy_text;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'policy_text' => ?RepositoryPolicyText,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->policy_text = $s['policy_text'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class Image {
  public ?ImageIdentifier $image_id;
  public ?ImageManifest $image_manifest;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'image_id' => ?ImageIdentifier,
    ?'image_manifest' => ?ImageManifest,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->image_id = $s['image_id'] ?? null;
    $this->image_manifest = $s['image_manifest'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

type ImageActionType = string;

class ImageAlreadyExistsException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ImageCount = int;

class ImageDetail {
  public ?ImageDigest $image_digest;
  public ?PushTimestamp $image_pushed_at;
  public ?ImageScanFindingsSummary $image_scan_findings_summary;
  public ?ImageScanStatus $image_scan_status;
  public ?ImageSizeInBytes $image_size_in_bytes;
  public ?ImageTagList $image_tags;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'image_digest' => ?ImageDigest,
    ?'image_pushed_at' => ?PushTimestamp,
    ?'image_scan_findings_summary' => ?ImageScanFindingsSummary,
    ?'image_scan_status' => ?ImageScanStatus,
    ?'image_size_in_bytes' => ?ImageSizeInBytes,
    ?'image_tags' => ?ImageTagList,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->image_digest = $s['image_digest'] ?? '';
    $this->image_pushed_at = $s['image_pushed_at'] ?? 0;
    $this->image_scan_findings_summary = $s['image_scan_findings_summary'] ?? null;
    $this->image_scan_status = $s['image_scan_status'] ?? null;
    $this->image_size_in_bytes = $s['image_size_in_bytes'] ?? 0;
    $this->image_tags = $s['image_tags'] ?? vec[];
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

type ImageDetailList = vec<ImageDetail>;

type ImageDigest = string;

class ImageFailure {
  public ?ImageFailureCode $failure_code;
  public ?ImageFailureReason $failure_reason;
  public ?ImageIdentifier $image_id;

  public function __construct(shape(
    ?'failure_code' => ?ImageFailureCode,
    ?'failure_reason' => ?ImageFailureReason,
    ?'image_id' => ?ImageIdentifier,
  ) $s = shape()) {
    $this->failure_code = $s['failure_code'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->image_id = $s['image_id'] ?? null;
  }
}

type ImageFailureCode = string;

type ImageFailureList = vec<ImageFailure>;

type ImageFailureReason = string;

class ImageIdentifier {
  public ?ImageDigest $image_digest;
  public ?ImageTag $image_tag;

  public function __construct(shape(
    ?'image_digest' => ?ImageDigest,
    ?'image_tag' => ?ImageTag,
  ) $s = shape()) {
    $this->image_digest = $s['image_digest'] ?? '';
    $this->image_tag = $s['image_tag'] ?? '';
  }
}

type ImageIdentifierList = vec<ImageIdentifier>;

type ImageList = vec<Image>;

type ImageManifest = string;

class ImageNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ImageScanFinding {
  public ?AttributeList $attributes;
  public ?FindingDescription $description;
  public ?FindingName $name;
  public ?FindingSeverity $severity;
  public ?Url $uri;

  public function __construct(shape(
    ?'attributes' => ?AttributeList,
    ?'description' => ?FindingDescription,
    ?'name' => ?FindingName,
    ?'severity' => ?FindingSeverity,
    ?'uri' => ?Url,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->severity = $s['severity'] ?? '';
    $this->uri = $s['uri'] ?? '';
  }
}

type ImageScanFindingList = vec<ImageScanFinding>;

class ImageScanFindings {
  public ?FindingSeverityCounts $finding_severity_counts;
  public ?ImageScanFindingList $findings;
  public ?ScanTimestamp $image_scan_completed_at;
  public ?VulnerabilitySourceUpdateTimestamp $vulnerability_source_updated_at;

  public function __construct(shape(
    ?'finding_severity_counts' => ?FindingSeverityCounts,
    ?'findings' => ?ImageScanFindingList,
    ?'image_scan_completed_at' => ?ScanTimestamp,
    ?'vulnerability_source_updated_at' => ?VulnerabilitySourceUpdateTimestamp,
  ) $s = shape()) {
    $this->finding_severity_counts = $s['finding_severity_counts'] ?? dict[];
    $this->findings = $s['findings'] ?? vec[];
    $this->image_scan_completed_at = $s['image_scan_completed_at'] ?? 0;
    $this->vulnerability_source_updated_at = $s['vulnerability_source_updated_at'] ?? 0;
  }
}

class ImageScanFindingsSummary {
  public ?FindingSeverityCounts $finding_severity_counts;
  public ?ScanTimestamp $image_scan_completed_at;
  public ?VulnerabilitySourceUpdateTimestamp $vulnerability_source_updated_at;

  public function __construct(shape(
    ?'finding_severity_counts' => ?FindingSeverityCounts,
    ?'image_scan_completed_at' => ?ScanTimestamp,
    ?'vulnerability_source_updated_at' => ?VulnerabilitySourceUpdateTimestamp,
  ) $s = shape()) {
    $this->finding_severity_counts = $s['finding_severity_counts'] ?? dict[];
    $this->image_scan_completed_at = $s['image_scan_completed_at'] ?? 0;
    $this->vulnerability_source_updated_at = $s['vulnerability_source_updated_at'] ?? 0;
  }
}

class ImageScanStatus {
  public ?ScanStatusDescription $description;
  public ?ScanStatus $status;

  public function __construct(shape(
    ?'description' => ?ScanStatusDescription,
    ?'status' => ?ScanStatus,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class ImageScanningConfiguration {
  public ?ScanOnPushFlag $scan_on_push;

  public function __construct(shape(
    ?'scan_on_push' => ?ScanOnPushFlag,
  ) $s = shape()) {
    $this->scan_on_push = $s['scan_on_push'] ?? false;
  }
}

type ImageSizeInBytes = int;

type ImageTag = string;

class ImageTagAlreadyExistsException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ImageTagList = vec<ImageTag>;

type ImageTagMutability = string;

class InitiateLayerUploadRequest {
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class InitiateLayerUploadResponse {
  public ?PartSize $part_size;
  public ?UploadId $upload_id;

  public function __construct(shape(
    ?'part_size' => ?PartSize,
    ?'upload_id' => ?UploadId,
  ) $s = shape()) {
    $this->part_size = $s['part_size'] ?? 0;
    $this->upload_id = $s['upload_id'] ?? '';
  }
}

class InvalidLayerException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidLayerPartException {
  public ?PartSize $last_valid_byte_received;
  public ?ExceptionMessage $message;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;
  public ?UploadId $upload_id;

  public function __construct(shape(
    ?'last_valid_byte_received' => ?PartSize,
    ?'message' => ?ExceptionMessage,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
    ?'upload_id' => ?UploadId,
  ) $s = shape()) {
    $this->last_valid_byte_received = $s['last_valid_byte_received'] ?? 0;
    $this->message = $s['message'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->upload_id = $s['upload_id'] ?? '';
  }
}

class InvalidParameterException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidTagParameterException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Layer {
  public ?LayerAvailability $layer_availability;
  public ?LayerDigest $layer_digest;
  public ?LayerSizeInBytes $layer_size;
  public ?MediaType $media_type;

  public function __construct(shape(
    ?'layer_availability' => ?LayerAvailability,
    ?'layer_digest' => ?LayerDigest,
    ?'layer_size' => ?LayerSizeInBytes,
    ?'media_type' => ?MediaType,
  ) $s = shape()) {
    $this->layer_availability = $s['layer_availability'] ?? '';
    $this->layer_digest = $s['layer_digest'] ?? '';
    $this->layer_size = $s['layer_size'] ?? 0;
    $this->media_type = $s['media_type'] ?? '';
  }
}

class LayerAlreadyExistsException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type LayerAvailability = string;

type LayerDigest = string;

type LayerDigestList = vec<LayerDigest>;

class LayerFailure {
  public ?LayerFailureCode $failure_code;
  public ?LayerFailureReason $failure_reason;
  public ?BatchedOperationLayerDigest $layer_digest;

  public function __construct(shape(
    ?'failure_code' => ?LayerFailureCode,
    ?'failure_reason' => ?LayerFailureReason,
    ?'layer_digest' => ?BatchedOperationLayerDigest,
  ) $s = shape()) {
    $this->failure_code = $s['failure_code'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->layer_digest = $s['layer_digest'] ?? '';
  }
}

type LayerFailureCode = string;

type LayerFailureList = vec<LayerFailure>;

type LayerFailureReason = string;

class LayerInaccessibleException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type LayerList = vec<Layer>;

type LayerPartBlob = string;

class LayerPartTooSmallException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type LayerSizeInBytes = int;

class LayersNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class LifecyclePolicyNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class LifecyclePolicyPreviewFilter {
  public ?TagStatus $tag_status;

  public function __construct(shape(
    ?'tag_status' => ?TagStatus,
  ) $s = shape()) {
    $this->tag_status = $s['tag_status'] ?? '';
  }
}

class LifecyclePolicyPreviewInProgressException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class LifecyclePolicyPreviewNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class LifecyclePolicyPreviewResult {
  public ?LifecyclePolicyRuleAction $action;
  public ?LifecyclePolicyRulePriority $applied_rule_priority;
  public ?ImageDigest $image_digest;
  public ?PushTimestamp $image_pushed_at;
  public ?ImageTagList $image_tags;

  public function __construct(shape(
    ?'action' => ?LifecyclePolicyRuleAction,
    ?'applied_rule_priority' => ?LifecyclePolicyRulePriority,
    ?'image_digest' => ?ImageDigest,
    ?'image_pushed_at' => ?PushTimestamp,
    ?'image_tags' => ?ImageTagList,
  ) $s = shape()) {
    $this->action = $s['action'] ?? null;
    $this->applied_rule_priority = $s['applied_rule_priority'] ?? 0;
    $this->image_digest = $s['image_digest'] ?? '';
    $this->image_pushed_at = $s['image_pushed_at'] ?? 0;
    $this->image_tags = $s['image_tags'] ?? vec[];
  }
}

type LifecyclePolicyPreviewResultList = vec<LifecyclePolicyPreviewResult>;

type LifecyclePolicyPreviewStatus = string;

class LifecyclePolicyPreviewSummary {
  public ?ImageCount $expiring_image_total_count;

  public function __construct(shape(
    ?'expiring_image_total_count' => ?ImageCount,
  ) $s = shape()) {
    $this->expiring_image_total_count = $s['expiring_image_total_count'] ?? 0;
  }
}

class LifecyclePolicyRuleAction {
  public ?ImageActionType $type;

  public function __construct(shape(
    ?'type' => ?ImageActionType,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
  }
}

type LifecyclePolicyRulePriority = int;

type LifecyclePolicyText = string;

type LifecyclePreviewMaxResults = int;

class LimitExceededException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListImagesFilter {
  public ?TagStatus $tag_status;

  public function __construct(shape(
    ?'tag_status' => ?TagStatus,
  ) $s = shape()) {
    $this->tag_status = $s['tag_status'] ?? '';
  }
}

class ListImagesRequest {
  public ?ListImagesFilter $filter;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'filter' => ?ListImagesFilter,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class ListImagesResponse {
  public ?ImageIdentifierList $image_ids;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'image_ids' => ?ImageIdentifierList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->image_ids = $s['image_ids'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public ?Arn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagList $tags;

  public function __construct(shape(
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
  }
}

type MaxResults = int;

type MediaType = string;

type MediaTypeList = vec<MediaType>;

type NextToken = string;

type PartSize = int;

type ProxyEndpoint = string;

type PushTimestamp = int;

class PutImageRequest {
  public ?ImageManifest $image_manifest;
  public ?ImageTag $image_tag;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'image_manifest' => ?ImageManifest,
    ?'image_tag' => ?ImageTag,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->image_manifest = $s['image_manifest'] ?? '';
    $this->image_tag = $s['image_tag'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class PutImageResponse {
  public ?Image $image;

  public function __construct(shape(
    ?'image' => ?Image,
  ) $s = shape()) {
    $this->image = $s['image'] ?? null;
  }
}

class PutImageScanningConfigurationRequest {
  public ?ImageScanningConfiguration $image_scanning_configuration;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'image_scanning_configuration' => ?ImageScanningConfiguration,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->image_scanning_configuration = $s['image_scanning_configuration'] ?? null;
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class PutImageScanningConfigurationResponse {
  public ?ImageScanningConfiguration $image_scanning_configuration;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'image_scanning_configuration' => ?ImageScanningConfiguration,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->image_scanning_configuration = $s['image_scanning_configuration'] ?? null;
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class PutImageTagMutabilityRequest {
  public ?ImageTagMutability $image_tag_mutability;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'image_tag_mutability' => ?ImageTagMutability,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->image_tag_mutability = $s['image_tag_mutability'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class PutImageTagMutabilityResponse {
  public ?ImageTagMutability $image_tag_mutability;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'image_tag_mutability' => ?ImageTagMutability,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->image_tag_mutability = $s['image_tag_mutability'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class PutLifecyclePolicyRequest {
  public ?LifecyclePolicyText $lifecycle_policy_text;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'lifecycle_policy_text' => ?LifecyclePolicyText,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->lifecycle_policy_text = $s['lifecycle_policy_text'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class PutLifecyclePolicyResponse {
  public ?LifecyclePolicyText $lifecycle_policy_text;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'lifecycle_policy_text' => ?LifecyclePolicyText,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->lifecycle_policy_text = $s['lifecycle_policy_text'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

type RegistryId = string;

class Repository {
  public ?CreationTimestamp $created_at;
  public ?ImageScanningConfiguration $image_scanning_configuration;
  public ?ImageTagMutability $image_tag_mutability;
  public ?RegistryId $registry_id;
  public ?Arn $repository_arn;
  public ?RepositoryName $repository_name;
  public ?Url $repository_uri;

  public function __construct(shape(
    ?'created_at' => ?CreationTimestamp,
    ?'image_scanning_configuration' => ?ImageScanningConfiguration,
    ?'image_tag_mutability' => ?ImageTagMutability,
    ?'registry_id' => ?RegistryId,
    ?'repository_arn' => ?Arn,
    ?'repository_name' => ?RepositoryName,
    ?'repository_uri' => ?Url,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->image_scanning_configuration = $s['image_scanning_configuration'] ?? null;
    $this->image_tag_mutability = $s['image_tag_mutability'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_arn = $s['repository_arn'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->repository_uri = $s['repository_uri'] ?? '';
  }
}

class RepositoryAlreadyExistsException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type RepositoryList = vec<Repository>;

type RepositoryName = string;

type RepositoryNameList = vec<RepositoryName>;

class RepositoryNotEmptyException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class RepositoryNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class RepositoryPolicyNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type RepositoryPolicyText = string;

class ScanNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ScanOnPushFlag = bool;

type ScanStatus = string;

type ScanStatusDescription = string;

type ScanTimestamp = int;

class ServerException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class SetRepositoryPolicyRequest {
  public ?ForceFlag $force;
  public ?RepositoryPolicyText $policy_text;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'force' => ?ForceFlag,
    ?'policy_text' => ?RepositoryPolicyText,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->force = $s['force'] ?? false;
    $this->policy_text = $s['policy_text'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class SetRepositoryPolicyResponse {
  public ?RepositoryPolicyText $policy_text;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'policy_text' => ?RepositoryPolicyText,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->policy_text = $s['policy_text'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

type SeverityCount = int;

class StartImageScanRequest {
  public ?ImageIdentifier $image_id;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'image_id' => ?ImageIdentifier,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->image_id = $s['image_id'] ?? null;
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class StartImageScanResponse {
  public ?ImageIdentifier $image_id;
  public ?ImageScanStatus $image_scan_status;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'image_id' => ?ImageIdentifier,
    ?'image_scan_status' => ?ImageScanStatus,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->image_id = $s['image_id'] ?? null;
    $this->image_scan_status = $s['image_scan_status'] ?? null;
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class StartLifecyclePolicyPreviewRequest {
  public ?LifecyclePolicyText $lifecycle_policy_text;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;

  public function __construct(shape(
    ?'lifecycle_policy_text' => ?LifecyclePolicyText,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
  ) $s = shape()) {
    $this->lifecycle_policy_text = $s['lifecycle_policy_text'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
  }
}

class StartLifecyclePolicyPreviewResponse {
  public ?LifecyclePolicyText $lifecycle_policy_text;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;
  public ?LifecyclePolicyPreviewStatus $status;

  public function __construct(shape(
    ?'lifecycle_policy_text' => ?LifecyclePolicyText,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
    ?'status' => ?LifecyclePolicyPreviewStatus,
  ) $s = shape()) {
    $this->lifecycle_policy_text = $s['lifecycle_policy_text'] ?? '';
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public ?Arn $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagStatus = string;

type TagValue = string;

class TooManyTagsException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceRequest {
  public ?Arn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
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

type UploadId = string;

class UploadLayerPartRequest {
  public ?LayerPartBlob $layer_part_blob;
  public ?PartSize $part_first_byte;
  public ?PartSize $part_last_byte;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;
  public ?UploadId $upload_id;

  public function __construct(shape(
    ?'layer_part_blob' => ?LayerPartBlob,
    ?'part_first_byte' => ?PartSize,
    ?'part_last_byte' => ?PartSize,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
    ?'upload_id' => ?UploadId,
  ) $s = shape()) {
    $this->layer_part_blob = $s['layer_part_blob'] ?? '';
    $this->part_first_byte = $s['part_first_byte'] ?? 0;
    $this->part_last_byte = $s['part_last_byte'] ?? 0;
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->upload_id = $s['upload_id'] ?? '';
  }
}

class UploadLayerPartResponse {
  public ?PartSize $last_byte_received;
  public ?RegistryId $registry_id;
  public ?RepositoryName $repository_name;
  public ?UploadId $upload_id;

  public function __construct(shape(
    ?'last_byte_received' => ?PartSize,
    ?'registry_id' => ?RegistryId,
    ?'repository_name' => ?RepositoryName,
    ?'upload_id' => ?UploadId,
  ) $s = shape()) {
    $this->last_byte_received = $s['last_byte_received'] ?? 0;
    $this->registry_id = $s['registry_id'] ?? '';
    $this->repository_name = $s['repository_name'] ?? '';
    $this->upload_id = $s['upload_id'] ?? '';
  }
}

class UploadNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Url = string;

type VulnerabilitySourceUpdateTimestamp = int;


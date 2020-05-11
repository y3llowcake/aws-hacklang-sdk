<?hh // strict
namespace slack\aws\api.ecr;

interface ECR {
  public function BatchCheckLayerAvailability(BatchCheckLayerAvailabilityRequest): Awaitable<Errors\Result<BatchCheckLayerAvailabilityResponse>>;
  public function BatchDeleteImage(BatchDeleteImageRequest): Awaitable<Errors\Result<BatchDeleteImageResponse>>;
  public function BatchGetImage(BatchGetImageRequest): Awaitable<Errors\Result<BatchGetImageResponse>>;
  public function CompleteLayerUpload(CompleteLayerUploadRequest): Awaitable<Errors\Result<CompleteLayerUploadResponse>>;
  public function CreateRepository(CreateRepositoryRequest): Awaitable<Errors\Result<CreateRepositoryResponse>>;
  public function DeleteLifecyclePolicy(DeleteLifecyclePolicyRequest): Awaitable<Errors\Result<DeleteLifecyclePolicyResponse>>;
  public function DeleteRepository(DeleteRepositoryRequest): Awaitable<Errors\Result<DeleteRepositoryResponse>>;
  public function DeleteRepositoryPolicy(DeleteRepositoryPolicyRequest): Awaitable<Errors\Result<DeleteRepositoryPolicyResponse>>;
  public function DescribeImageScanFindings(DescribeImageScanFindingsRequest): Awaitable<Errors\Result<DescribeImageScanFindingsResponse>>;
  public function DescribeImages(DescribeImagesRequest): Awaitable<Errors\Result<DescribeImagesResponse>>;
  public function DescribeRepositories(DescribeRepositoriesRequest): Awaitable<Errors\Result<DescribeRepositoriesResponse>>;
  public function GetAuthorizationToken(GetAuthorizationTokenRequest): Awaitable<Errors\Result<GetAuthorizationTokenResponse>>;
  public function GetDownloadUrlForLayer(GetDownloadUrlForLayerRequest): Awaitable<Errors\Result<GetDownloadUrlForLayerResponse>>;
  public function GetLifecyclePolicy(GetLifecyclePolicyRequest): Awaitable<Errors\Result<GetLifecyclePolicyResponse>>;
  public function GetLifecyclePolicyPreview(GetLifecyclePolicyPreviewRequest): Awaitable<Errors\Result<GetLifecyclePolicyPreviewResponse>>;
  public function GetRepositoryPolicy(GetRepositoryPolicyRequest): Awaitable<Errors\Result<GetRepositoryPolicyResponse>>;
  public function InitiateLayerUpload(InitiateLayerUploadRequest): Awaitable<Errors\Result<InitiateLayerUploadResponse>>;
  public function ListImages(ListImagesRequest): Awaitable<Errors\Result<ListImagesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutImage(PutImageRequest): Awaitable<Errors\Result<PutImageResponse>>;
  public function PutImageScanningConfiguration(PutImageScanningConfigurationRequest): Awaitable<Errors\Result<PutImageScanningConfigurationResponse>>;
  public function PutImageTagMutability(PutImageTagMutabilityRequest): Awaitable<Errors\Result<PutImageTagMutabilityResponse>>;
  public function PutLifecyclePolicy(PutLifecyclePolicyRequest): Awaitable<Errors\Result<PutLifecyclePolicyResponse>>;
  public function SetRepositoryPolicy(SetRepositoryPolicyRequest): Awaitable<Errors\Result<SetRepositoryPolicyResponse>>;
  public function StartImageScan(StartImageScanRequest): Awaitable<Errors\Result<StartImageScanResponse>>;
  public function StartLifecyclePolicyPreview(StartLifecyclePolicyPreviewRequest): Awaitable<Errors\Result<StartLifecyclePolicyPreviewResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UploadLayerPart(UploadLayerPartRequest): Awaitable<Errors\Result<UploadLayerPartResponse>>;
}

type Arn = string;

class Attribute {
  public AttributeKey $key;
  public AttributeValue $value;

  public function __construct(shape(
  ?'key' => AttributeKey,
  ?'value' => AttributeValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type AttributeKey = string;

type AttributeList = vec<Attribute>;

type AttributeValue = string;

class AuthorizationData {
  public Base64 $authorization_token;
  public ExpirationTimestamp $expires_at;
  public ProxyEndpoint $proxy_endpoint;

  public function __construct(shape(
  ?'authorization_token' => Base64,
  ?'expires_at' => ExpirationTimestamp,
  ?'proxy_endpoint' => ProxyEndpoint,
  ) $s = shape()) {
    $this->authorization_token = $authorization_token ?? "";
    $this->expires_at = $expires_at ?? 0;
    $this->proxy_endpoint = $proxy_endpoint ?? "";
  }
}

type AuthorizationDataList = vec<AuthorizationData>;

type Base64 = string;

class BatchCheckLayerAvailabilityRequest {
  public BatchedOperationLayerDigestList $layer_digests;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'layer_digests' => BatchedOperationLayerDigestList,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->layer_digests = $layer_digests ?? [];
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class BatchCheckLayerAvailabilityResponse {
  public LayerFailureList $failures;
  public LayerList $layers;

  public function __construct(shape(
  ?'failures' => LayerFailureList,
  ?'layers' => LayerList,
  ) $s = shape()) {
    $this->failures = $failures ?? [];
    $this->layers = $layers ?? [];
  }
}

class BatchDeleteImageRequest {
  public ImageIdentifierList $image_ids;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'image_ids' => ImageIdentifierList,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->image_ids = $image_ids ?? [];
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class BatchDeleteImageResponse {
  public ImageFailureList $failures;
  public ImageIdentifierList $image_ids;

  public function __construct(shape(
  ?'failures' => ImageFailureList,
  ?'image_ids' => ImageIdentifierList,
  ) $s = shape()) {
    $this->failures = $failures ?? [];
    $this->image_ids = $image_ids ?? [];
  }
}

class BatchGetImageRequest {
  public MediaTypeList $accepted_media_types;
  public ImageIdentifierList $image_ids;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'accepted_media_types' => MediaTypeList,
  ?'image_ids' => ImageIdentifierList,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->accepted_media_types = $accepted_media_types ?? [];
    $this->image_ids = $image_ids ?? [];
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class BatchGetImageResponse {
  public ImageFailureList $failures;
  public ImageList $images;

  public function __construct(shape(
  ?'failures' => ImageFailureList,
  ?'images' => ImageList,
  ) $s = shape()) {
    $this->failures = $failures ?? [];
    $this->images = $images ?? [];
  }
}

type BatchedOperationLayerDigest = string;

type BatchedOperationLayerDigestList = vec<BatchedOperationLayerDigest>;

class CompleteLayerUploadRequest {
  public LayerDigestList $layer_digests;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public UploadId $upload_id;

  public function __construct(shape(
  ?'layer_digests' => LayerDigestList,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ?'upload_id' => UploadId,
  ) $s = shape()) {
    $this->layer_digests = $layer_digests ?? [];
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
    $this->upload_id = $upload_id ?? "";
  }
}

class CompleteLayerUploadResponse {
  public LayerDigest $layer_digest;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public UploadId $upload_id;

  public function __construct(shape(
  ?'layer_digest' => LayerDigest,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ?'upload_id' => UploadId,
  ) $s = shape()) {
    $this->layer_digest = $layer_digest ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
    $this->upload_id = $upload_id ?? "";
  }
}

class CreateRepositoryRequest {
  public ImageScanningConfiguration $image_scanning_configuration;
  public ImageTagMutability $image_tag_mutability;
  public RepositoryName $repository_name;
  public TagList $tags;

  public function __construct(shape(
  ?'image_scanning_configuration' => ImageScanningConfiguration,
  ?'image_tag_mutability' => ImageTagMutability,
  ?'repository_name' => RepositoryName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->image_scanning_configuration = $image_scanning_configuration ?? null;
    $this->image_tag_mutability = $image_tag_mutability ?? "";
    $this->repository_name = $repository_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateRepositoryResponse {
  public Repository $repository;

  public function __construct(shape(
  ?'repository' => Repository,
  ) $s = shape()) {
    $this->repository = $repository ?? null;
  }
}

type CreationTimestamp = int;

class DeleteLifecyclePolicyRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class DeleteLifecyclePolicyResponse {
  public EvaluationTimestamp $last_evaluated_at;
  public LifecyclePolicyText $lifecycle_policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'last_evaluated_at' => EvaluationTimestamp,
  ?'lifecycle_policy_text' => LifecyclePolicyText,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->last_evaluated_at = $last_evaluated_at ?? 0;
    $this->lifecycle_policy_text = $lifecycle_policy_text ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class DeleteRepositoryPolicyRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class DeleteRepositoryPolicyResponse {
  public RepositoryPolicyText $policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'policy_text' => RepositoryPolicyText,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->policy_text = $policy_text ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class DeleteRepositoryRequest {
  public ForceFlag $force;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'force' => ForceFlag,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->force = $force ?? false;
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class DeleteRepositoryResponse {
  public Repository $repository;

  public function __construct(shape(
  ?'repository' => Repository,
  ) $s = shape()) {
    $this->repository = $repository ?? null;
  }
}

class DescribeImageScanFindingsRequest {
  public ImageIdentifier $image_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'image_id' => ImageIdentifier,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->image_id = $image_id ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class DescribeImageScanFindingsResponse {
  public ImageIdentifier $image_id;
  public ImageScanFindings $image_scan_findings;
  public ImageScanStatus $image_scan_status;
  public NextToken $next_token;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'image_id' => ImageIdentifier,
  ?'image_scan_findings' => ImageScanFindings,
  ?'image_scan_status' => ImageScanStatus,
  ?'next_token' => NextToken,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->image_id = $image_id ?? null;
    $this->image_scan_findings = $image_scan_findings ?? null;
    $this->image_scan_status = $image_scan_status ?? null;
    $this->next_token = $next_token ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class DescribeImagesFilter {
  public TagStatus $tag_status;

  public function __construct(shape(
  ?'tag_status' => TagStatus,
  ) $s = shape()) {
    $this->tag_status = $tag_status ?? "";
  }
}

class DescribeImagesRequest {
  public DescribeImagesFilter $filter;
  public ImageIdentifierList $image_ids;
  public MaxResults $max_results;
  public NextToken $next_token;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'filter' => DescribeImagesFilter,
  ?'image_ids' => ImageIdentifierList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->image_ids = $image_ids ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class DescribeImagesResponse {
  public ImageDetailList $image_details;
  public NextToken $next_token;

  public function __construct(shape(
  ?'image_details' => ImageDetailList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->image_details = $image_details ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeRepositoriesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public RegistryId $registry_id;
  public RepositoryNameList $repository_names;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'registry_id' => RegistryId,
  ?'repository_names' => RepositoryNameList,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_names = $repository_names ?? [];
  }
}

class DescribeRepositoriesResponse {
  public NextToken $next_token;
  public RepositoryList $repositories;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'repositories' => RepositoryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->repositories = $repositories ?? [];
  }
}

class EmptyUploadException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
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
  public GetAuthorizationTokenRegistryIdList $registry_ids;

  public function __construct(shape(
  ?'registry_ids' => GetAuthorizationTokenRegistryIdList,
  ) $s = shape()) {
    $this->registry_ids = $registry_ids ?? [];
  }
}

class GetAuthorizationTokenResponse {
  public AuthorizationDataList $authorization_data;

  public function __construct(shape(
  ?'authorization_data' => AuthorizationDataList,
  ) $s = shape()) {
    $this->authorization_data = $authorization_data ?? [];
  }
}

class GetDownloadUrlForLayerRequest {
  public LayerDigest $layer_digest;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'layer_digest' => LayerDigest,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->layer_digest = $layer_digest ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class GetDownloadUrlForLayerResponse {
  public Url $download_url;
  public LayerDigest $layer_digest;

  public function __construct(shape(
  ?'download_url' => Url,
  ?'layer_digest' => LayerDigest,
  ) $s = shape()) {
    $this->download_url = $download_url ?? "";
    $this->layer_digest = $layer_digest ?? "";
  }
}

class GetLifecyclePolicyPreviewRequest {
  public LifecyclePolicyPreviewFilter $filter;
  public ImageIdentifierList $image_ids;
  public LifecyclePreviewMaxResults $max_results;
  public NextToken $next_token;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'filter' => LifecyclePolicyPreviewFilter,
  ?'image_ids' => ImageIdentifierList,
  ?'max_results' => LifecyclePreviewMaxResults,
  ?'next_token' => NextToken,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->image_ids = $image_ids ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class GetLifecyclePolicyPreviewResponse {
  public LifecyclePolicyText $lifecycle_policy_text;
  public NextToken $next_token;
  public LifecyclePolicyPreviewResultList $preview_results;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public LifecyclePolicyPreviewStatus $status;
  public LifecyclePolicyPreviewSummary $summary;

  public function __construct(shape(
  ?'lifecycle_policy_text' => LifecyclePolicyText,
  ?'next_token' => NextToken,
  ?'preview_results' => LifecyclePolicyPreviewResultList,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ?'status' => LifecyclePolicyPreviewStatus,
  ?'summary' => LifecyclePolicyPreviewSummary,
  ) $s = shape()) {
    $this->lifecycle_policy_text = $lifecycle_policy_text ?? "";
    $this->next_token = $next_token ?? "";
    $this->preview_results = $preview_results ?? [];
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
    $this->status = $status ?? "";
    $this->summary = $summary ?? null;
  }
}

class GetLifecyclePolicyRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class GetLifecyclePolicyResponse {
  public EvaluationTimestamp $last_evaluated_at;
  public LifecyclePolicyText $lifecycle_policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'last_evaluated_at' => EvaluationTimestamp,
  ?'lifecycle_policy_text' => LifecyclePolicyText,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->last_evaluated_at = $last_evaluated_at ?? 0;
    $this->lifecycle_policy_text = $lifecycle_policy_text ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class GetRepositoryPolicyRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class GetRepositoryPolicyResponse {
  public RepositoryPolicyText $policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'policy_text' => RepositoryPolicyText,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->policy_text = $policy_text ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class Image {
  public ImageIdentifier $image_id;
  public ImageManifest $image_manifest;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'image_id' => ImageIdentifier,
  ?'image_manifest' => ImageManifest,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->image_id = $image_id ?? null;
    $this->image_manifest = $image_manifest ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

type ImageActionType = string;

class ImageAlreadyExistsException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ImageCount = int;

class ImageDetail {
  public ImageDigest $image_digest;
  public PushTimestamp $image_pushed_at;
  public ImageScanFindingsSummary $image_scan_findings_summary;
  public ImageScanStatus $image_scan_status;
  public ImageSizeInBytes $image_size_in_bytes;
  public ImageTagList $image_tags;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'image_digest' => ImageDigest,
  ?'image_pushed_at' => PushTimestamp,
  ?'image_scan_findings_summary' => ImageScanFindingsSummary,
  ?'image_scan_status' => ImageScanStatus,
  ?'image_size_in_bytes' => ImageSizeInBytes,
  ?'image_tags' => ImageTagList,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->image_digest = $image_digest ?? "";
    $this->image_pushed_at = $image_pushed_at ?? 0;
    $this->image_scan_findings_summary = $image_scan_findings_summary ?? null;
    $this->image_scan_status = $image_scan_status ?? null;
    $this->image_size_in_bytes = $image_size_in_bytes ?? 0;
    $this->image_tags = $image_tags ?? [];
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

type ImageDetailList = vec<ImageDetail>;

type ImageDigest = string;

class ImageFailure {
  public ImageFailureCode $failure_code;
  public ImageFailureReason $failure_reason;
  public ImageIdentifier $image_id;

  public function __construct(shape(
  ?'failure_code' => ImageFailureCode,
  ?'failure_reason' => ImageFailureReason,
  ?'image_id' => ImageIdentifier,
  ) $s = shape()) {
    $this->failure_code = $failure_code ?? "";
    $this->failure_reason = $failure_reason ?? "";
    $this->image_id = $image_id ?? null;
  }
}

type ImageFailureCode = string;

type ImageFailureList = vec<ImageFailure>;

type ImageFailureReason = string;

class ImageIdentifier {
  public ImageDigest $image_digest;
  public ImageTag $image_tag;

  public function __construct(shape(
  ?'image_digest' => ImageDigest,
  ?'image_tag' => ImageTag,
  ) $s = shape()) {
    $this->image_digest = $image_digest ?? "";
    $this->image_tag = $image_tag ?? "";
  }
}

type ImageIdentifierList = vec<ImageIdentifier>;

type ImageList = vec<Image>;

type ImageManifest = string;

class ImageNotFoundException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ImageScanFinding {
  public AttributeList $attributes;
  public FindingDescription $description;
  public FindingName $name;
  public FindingSeverity $severity;
  public Url $uri;

  public function __construct(shape(
  ?'attributes' => AttributeList,
  ?'description' => FindingDescription,
  ?'name' => FindingName,
  ?'severity' => FindingSeverity,
  ?'uri' => Url,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->severity = $severity ?? "";
    $this->uri = $uri ?? "";
  }
}

type ImageScanFindingList = vec<ImageScanFinding>;

class ImageScanFindings {
  public FindingSeverityCounts $finding_severity_counts;
  public ImageScanFindingList $findings;
  public ScanTimestamp $image_scan_completed_at;
  public VulnerabilitySourceUpdateTimestamp $vulnerability_source_updated_at;

  public function __construct(shape(
  ?'finding_severity_counts' => FindingSeverityCounts,
  ?'findings' => ImageScanFindingList,
  ?'image_scan_completed_at' => ScanTimestamp,
  ?'vulnerability_source_updated_at' => VulnerabilitySourceUpdateTimestamp,
  ) $s = shape()) {
    $this->finding_severity_counts = $finding_severity_counts ?? [];
    $this->findings = $findings ?? [];
    $this->image_scan_completed_at = $image_scan_completed_at ?? 0;
    $this->vulnerability_source_updated_at = $vulnerability_source_updated_at ?? 0;
  }
}

class ImageScanFindingsSummary {
  public FindingSeverityCounts $finding_severity_counts;
  public ScanTimestamp $image_scan_completed_at;
  public VulnerabilitySourceUpdateTimestamp $vulnerability_source_updated_at;

  public function __construct(shape(
  ?'finding_severity_counts' => FindingSeverityCounts,
  ?'image_scan_completed_at' => ScanTimestamp,
  ?'vulnerability_source_updated_at' => VulnerabilitySourceUpdateTimestamp,
  ) $s = shape()) {
    $this->finding_severity_counts = $finding_severity_counts ?? [];
    $this->image_scan_completed_at = $image_scan_completed_at ?? 0;
    $this->vulnerability_source_updated_at = $vulnerability_source_updated_at ?? 0;
  }
}

class ImageScanStatus {
  public ScanStatusDescription $description;
  public ScanStatus $status;

  public function __construct(shape(
  ?'description' => ScanStatusDescription,
  ?'status' => ScanStatus,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->status = $status ?? "";
  }
}

class ImageScanningConfiguration {
  public ScanOnPushFlag $scan_on_push;

  public function __construct(shape(
  ?'scan_on_push' => ScanOnPushFlag,
  ) $s = shape()) {
    $this->scan_on_push = $scan_on_push ?? false;
  }
}

type ImageSizeInBytes = int;

type ImageTag = string;

class ImageTagAlreadyExistsException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ImageTagList = vec<ImageTag>;

type ImageTagMutability = string;

class InitiateLayerUploadRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class InitiateLayerUploadResponse {
  public PartSize $part_size;
  public UploadId $upload_id;

  public function __construct(shape(
  ?'part_size' => PartSize,
  ?'upload_id' => UploadId,
  ) $s = shape()) {
    $this->part_size = $part_size ?? 0;
    $this->upload_id = $upload_id ?? "";
  }
}

class InvalidLayerException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidLayerPartException {
  public PartSize $last_valid_byte_received;
  public ExceptionMessage $message;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public UploadId $upload_id;

  public function __construct(shape(
  ?'last_valid_byte_received' => PartSize,
  ?'message' => ExceptionMessage,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ?'upload_id' => UploadId,
  ) $s = shape()) {
    $this->last_valid_byte_received = $last_valid_byte_received ?? 0;
    $this->message = $message ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
    $this->upload_id = $upload_id ?? "";
  }
}

class InvalidParameterException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidTagParameterException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class Layer {
  public LayerAvailability $layer_availability;
  public LayerDigest $layer_digest;
  public LayerSizeInBytes $layer_size;
  public MediaType $media_type;

  public function __construct(shape(
  ?'layer_availability' => LayerAvailability,
  ?'layer_digest' => LayerDigest,
  ?'layer_size' => LayerSizeInBytes,
  ?'media_type' => MediaType,
  ) $s = shape()) {
    $this->layer_availability = $layer_availability ?? "";
    $this->layer_digest = $layer_digest ?? "";
    $this->layer_size = $layer_size ?? 0;
    $this->media_type = $media_type ?? "";
  }
}

class LayerAlreadyExistsException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type LayerAvailability = string;

type LayerDigest = string;

type LayerDigestList = vec<LayerDigest>;

class LayerFailure {
  public LayerFailureCode $failure_code;
  public LayerFailureReason $failure_reason;
  public BatchedOperationLayerDigest $layer_digest;

  public function __construct(shape(
  ?'failure_code' => LayerFailureCode,
  ?'failure_reason' => LayerFailureReason,
  ?'layer_digest' => BatchedOperationLayerDigest,
  ) $s = shape()) {
    $this->failure_code = $failure_code ?? "";
    $this->failure_reason = $failure_reason ?? "";
    $this->layer_digest = $layer_digest ?? "";
  }
}

type LayerFailureCode = string;

type LayerFailureList = vec<LayerFailure>;

type LayerFailureReason = string;

class LayerInaccessibleException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type LayerList = vec<Layer>;

type LayerPartBlob = string;

class LayerPartTooSmallException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type LayerSizeInBytes = int;

class LayersNotFoundException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class LifecyclePolicyNotFoundException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class LifecyclePolicyPreviewFilter {
  public TagStatus $tag_status;

  public function __construct(shape(
  ?'tag_status' => TagStatus,
  ) $s = shape()) {
    $this->tag_status = $tag_status ?? "";
  }
}

class LifecyclePolicyPreviewInProgressException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class LifecyclePolicyPreviewNotFoundException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class LifecyclePolicyPreviewResult {
  public LifecyclePolicyRuleAction $action;
  public LifecyclePolicyRulePriority $applied_rule_priority;
  public ImageDigest $image_digest;
  public PushTimestamp $image_pushed_at;
  public ImageTagList $image_tags;

  public function __construct(shape(
  ?'action' => LifecyclePolicyRuleAction,
  ?'applied_rule_priority' => LifecyclePolicyRulePriority,
  ?'image_digest' => ImageDigest,
  ?'image_pushed_at' => PushTimestamp,
  ?'image_tags' => ImageTagList,
  ) $s = shape()) {
    $this->action = $action ?? null;
    $this->applied_rule_priority = $applied_rule_priority ?? 0;
    $this->image_digest = $image_digest ?? "";
    $this->image_pushed_at = $image_pushed_at ?? 0;
    $this->image_tags = $image_tags ?? [];
  }
}

type LifecyclePolicyPreviewResultList = vec<LifecyclePolicyPreviewResult>;

type LifecyclePolicyPreviewStatus = string;

class LifecyclePolicyPreviewSummary {
  public ImageCount $expiring_image_total_count;

  public function __construct(shape(
  ?'expiring_image_total_count' => ImageCount,
  ) $s = shape()) {
    $this->expiring_image_total_count = $expiring_image_total_count ?? 0;
  }
}

class LifecyclePolicyRuleAction {
  public ImageActionType $type;

  public function __construct(shape(
  ?'type' => ImageActionType,
  ) $s = shape()) {
    $this->type = $type ?? "";
  }
}

type LifecyclePolicyRulePriority = int;

type LifecyclePolicyText = string;

type LifecyclePreviewMaxResults = int;

class LimitExceededException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListImagesFilter {
  public TagStatus $tag_status;

  public function __construct(shape(
  ?'tag_status' => TagStatus,
  ) $s = shape()) {
    $this->tag_status = $tag_status ?? "";
  }
}

class ListImagesRequest {
  public ListImagesFilter $filter;
  public MaxResults $max_results;
  public NextToken $next_token;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'filter' => ListImagesFilter,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class ListImagesResponse {
  public ImageIdentifierList $image_ids;
  public NextToken $next_token;

  public function __construct(shape(
  ?'image_ids' => ImageIdentifierList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->image_ids = $image_ids ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
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
  public ImageManifest $image_manifest;
  public ImageTag $image_tag;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'image_manifest' => ImageManifest,
  ?'image_tag' => ImageTag,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->image_manifest = $image_manifest ?? "";
    $this->image_tag = $image_tag ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class PutImageResponse {
  public Image $image;

  public function __construct(shape(
  ?'image' => Image,
  ) $s = shape()) {
    $this->image = $image ?? null;
  }
}

class PutImageScanningConfigurationRequest {
  public ImageScanningConfiguration $image_scanning_configuration;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'image_scanning_configuration' => ImageScanningConfiguration,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->image_scanning_configuration = $image_scanning_configuration ?? null;
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class PutImageScanningConfigurationResponse {
  public ImageScanningConfiguration $image_scanning_configuration;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'image_scanning_configuration' => ImageScanningConfiguration,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->image_scanning_configuration = $image_scanning_configuration ?? null;
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class PutImageTagMutabilityRequest {
  public ImageTagMutability $image_tag_mutability;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'image_tag_mutability' => ImageTagMutability,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->image_tag_mutability = $image_tag_mutability ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class PutImageTagMutabilityResponse {
  public ImageTagMutability $image_tag_mutability;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'image_tag_mutability' => ImageTagMutability,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->image_tag_mutability = $image_tag_mutability ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class PutLifecyclePolicyRequest {
  public LifecyclePolicyText $lifecycle_policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'lifecycle_policy_text' => LifecyclePolicyText,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->lifecycle_policy_text = $lifecycle_policy_text ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class PutLifecyclePolicyResponse {
  public LifecyclePolicyText $lifecycle_policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'lifecycle_policy_text' => LifecyclePolicyText,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->lifecycle_policy_text = $lifecycle_policy_text ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

type RegistryId = string;

class Repository {
  public CreationTimestamp $created_at;
  public ImageScanningConfiguration $image_scanning_configuration;
  public ImageTagMutability $image_tag_mutability;
  public RegistryId $registry_id;
  public Arn $repository_arn;
  public RepositoryName $repository_name;
  public Url $repository_uri;

  public function __construct(shape(
  ?'created_at' => CreationTimestamp,
  ?'image_scanning_configuration' => ImageScanningConfiguration,
  ?'image_tag_mutability' => ImageTagMutability,
  ?'registry_id' => RegistryId,
  ?'repository_arn' => Arn,
  ?'repository_name' => RepositoryName,
  ?'repository_uri' => Url,
  ) $s = shape()) {
    $this->created_at = $created_at ?? 0;
    $this->image_scanning_configuration = $image_scanning_configuration ?? null;
    $this->image_tag_mutability = $image_tag_mutability ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_arn = $repository_arn ?? "";
    $this->repository_name = $repository_name ?? "";
    $this->repository_uri = $repository_uri ?? "";
  }
}

class RepositoryAlreadyExistsException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type RepositoryList = vec<Repository>;

type RepositoryName = string;

type RepositoryNameList = vec<RepositoryName>;

class RepositoryNotEmptyException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class RepositoryNotFoundException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class RepositoryPolicyNotFoundException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type RepositoryPolicyText = string;

class ScanNotFoundException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ScanOnPushFlag = bool;

type ScanStatus = string;

type ScanStatusDescription = string;

type ScanTimestamp = int;

class ServerException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class SetRepositoryPolicyRequest {
  public ForceFlag $force;
  public RepositoryPolicyText $policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'force' => ForceFlag,
  ?'policy_text' => RepositoryPolicyText,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->force = $force ?? false;
    $this->policy_text = $policy_text ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class SetRepositoryPolicyResponse {
  public RepositoryPolicyText $policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'policy_text' => RepositoryPolicyText,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->policy_text = $policy_text ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

type SeverityCount = int;

class StartImageScanRequest {
  public ImageIdentifier $image_id;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'image_id' => ImageIdentifier,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->image_id = $image_id ?? null;
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class StartImageScanResponse {
  public ImageIdentifier $image_id;
  public ImageScanStatus $image_scan_status;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'image_id' => ImageIdentifier,
  ?'image_scan_status' => ImageScanStatus,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->image_id = $image_id ?? null;
    $this->image_scan_status = $image_scan_status ?? null;
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class StartLifecyclePolicyPreviewRequest {
  public LifecyclePolicyText $lifecycle_policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;

  public function __construct(shape(
  ?'lifecycle_policy_text' => LifecyclePolicyText,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ) $s = shape()) {
    $this->lifecycle_policy_text = $lifecycle_policy_text ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
  }
}

class StartLifecyclePolicyPreviewResponse {
  public LifecyclePolicyText $lifecycle_policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public LifecyclePolicyPreviewStatus $status;

  public function __construct(shape(
  ?'lifecycle_policy_text' => LifecyclePolicyText,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ?'status' => LifecyclePolicyPreviewStatus,
  ) $s = shape()) {
    $this->lifecycle_policy_text = $lifecycle_policy_text ?? "";
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
    $this->status = $status ?? "";
  }
}

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public Arn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tags' => TagList,
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

type TagStatus = string;

type TagValue = string;

class TooManyTagsException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => Arn,
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

type UploadId = string;

class UploadLayerPartRequest {
  public LayerPartBlob $layer_part_blob;
  public PartSize $part_first_byte;
  public PartSize $part_last_byte;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public UploadId $upload_id;

  public function __construct(shape(
  ?'layer_part_blob' => LayerPartBlob,
  ?'part_first_byte' => PartSize,
  ?'part_last_byte' => PartSize,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ?'upload_id' => UploadId,
  ) $s = shape()) {
    $this->layer_part_blob = $layer_part_blob ?? "";
    $this->part_first_byte = $part_first_byte ?? 0;
    $this->part_last_byte = $part_last_byte ?? 0;
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
    $this->upload_id = $upload_id ?? "";
  }
}

class UploadLayerPartResponse {
  public PartSize $last_byte_received;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public UploadId $upload_id;

  public function __construct(shape(
  ?'last_byte_received' => PartSize,
  ?'registry_id' => RegistryId,
  ?'repository_name' => RepositoryName,
  ?'upload_id' => UploadId,
  ) $s = shape()) {
    $this->last_byte_received = $last_byte_received ?? 0;
    $this->registry_id = $registry_id ?? "";
    $this->repository_name = $repository_name ?? "";
    $this->upload_id = $upload_id ?? "";
  }
}

class UploadNotFoundException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Url = string;

type VulnerabilitySourceUpdateTimestamp = int;


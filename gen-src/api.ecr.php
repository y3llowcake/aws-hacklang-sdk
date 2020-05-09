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

class Arn {
}

class Attribute {
  public AttributeKey $key;
  public AttributeValue $value;
}

class AttributeKey {
}

class AttributeList {
}

class AttributeValue {
}

class AuthorizationData {
  public Base64 $authorization_token;
  public ExpirationTimestamp $expires_at;
  public ProxyEndpoint $proxy_endpoint;
}

class AuthorizationDataList {
}

class Base64 {
}

class BatchCheckLayerAvailabilityRequest {
  public BatchedOperationLayerDigestList $layer_digests;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class BatchCheckLayerAvailabilityResponse {
  public LayerFailureList $failures;
  public LayerList $layers;
}

class BatchDeleteImageRequest {
  public ImageIdentifierList $image_ids;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class BatchDeleteImageResponse {
  public ImageFailureList $failures;
  public ImageIdentifierList $image_ids;
}

class BatchGetImageRequest {
  public MediaTypeList $accepted_media_types;
  public ImageIdentifierList $image_ids;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class BatchGetImageResponse {
  public ImageFailureList $failures;
  public ImageList $images;
}

class BatchedOperationLayerDigest {
}

class BatchedOperationLayerDigestList {
}

class CompleteLayerUploadRequest {
  public LayerDigestList $layer_digests;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public UploadId $upload_id;
}

class CompleteLayerUploadResponse {
  public LayerDigest $layer_digest;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public UploadId $upload_id;
}

class CreateRepositoryRequest {
  public ImageScanningConfiguration $image_scanning_configuration;
  public ImageTagMutability $image_tag_mutability;
  public RepositoryName $repository_name;
  public TagList $tags;
}

class CreateRepositoryResponse {
  public Repository $repository;
}

class CreationTimestamp {
}

class DeleteLifecyclePolicyRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class DeleteLifecyclePolicyResponse {
  public EvaluationTimestamp $last_evaluated_at;
  public LifecyclePolicyText $lifecycle_policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class DeleteRepositoryPolicyRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class DeleteRepositoryPolicyResponse {
  public RepositoryPolicyText $policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class DeleteRepositoryRequest {
  public ForceFlag $force;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class DeleteRepositoryResponse {
  public Repository $repository;
}

class DescribeImageScanFindingsRequest {
  public ImageIdentifier $image_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class DescribeImageScanFindingsResponse {
  public ImageIdentifier $image_id;
  public ImageScanFindings $image_scan_findings;
  public ImageScanStatus $image_scan_status;
  public NextToken $next_token;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class DescribeImagesFilter {
  public TagStatus $tag_status;
}

class DescribeImagesRequest {
  public DescribeImagesFilter $filter;
  public ImageIdentifierList $image_ids;
  public MaxResults $max_results;
  public NextToken $next_token;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class DescribeImagesResponse {
  public ImageDetailList $image_details;
  public NextToken $next_token;
}

class DescribeRepositoriesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public RegistryId $registry_id;
  public RepositoryNameList $repository_names;
}

class DescribeRepositoriesResponse {
  public NextToken $next_token;
  public RepositoryList $repositories;
}

class EmptyUploadException {
  public ExceptionMessage $message;
}

class EvaluationTimestamp {
}

class ExceptionMessage {
}

class ExpirationTimestamp {
}

class FindingDescription {
}

class FindingName {
}

class FindingSeverity {
}

class FindingSeverityCounts {
}

class ForceFlag {
}

class GetAuthorizationTokenRegistryIdList {
}

class GetAuthorizationTokenRequest {
  public GetAuthorizationTokenRegistryIdList $registry_ids;
}

class GetAuthorizationTokenResponse {
  public AuthorizationDataList $authorization_data;
}

class GetDownloadUrlForLayerRequest {
  public LayerDigest $layer_digest;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class GetDownloadUrlForLayerResponse {
  public Url $download_url;
  public LayerDigest $layer_digest;
}

class GetLifecyclePolicyPreviewRequest {
  public LifecyclePolicyPreviewFilter $filter;
  public ImageIdentifierList $image_ids;
  public LifecyclePreviewMaxResults $max_results;
  public NextToken $next_token;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class GetLifecyclePolicyPreviewResponse {
  public LifecyclePolicyText $lifecycle_policy_text;
  public NextToken $next_token;
  public LifecyclePolicyPreviewResultList $preview_results;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public LifecyclePolicyPreviewStatus $status;
  public LifecyclePolicyPreviewSummary $summary;
}

class GetLifecyclePolicyRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class GetLifecyclePolicyResponse {
  public EvaluationTimestamp $last_evaluated_at;
  public LifecyclePolicyText $lifecycle_policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class GetRepositoryPolicyRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class GetRepositoryPolicyResponse {
  public RepositoryPolicyText $policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class Image {
  public ImageIdentifier $image_id;
  public ImageManifest $image_manifest;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class ImageActionType {
}

class ImageAlreadyExistsException {
  public ExceptionMessage $message;
}

class ImageCount {
}

class ImageDetail {
  public ImageDigest $image_digest;
  public PushTimestamp $image_pushed_at;
  public ImageScanFindingsSummary $image_scan_findings_summary;
  public ImageScanStatus $image_scan_status;
  public ImageSizeInBytes $image_size_in_bytes;
  public ImageTagList $image_tags;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class ImageDetailList {
}

class ImageDigest {
}

class ImageFailure {
  public ImageFailureCode $failure_code;
  public ImageFailureReason $failure_reason;
  public ImageIdentifier $image_id;
}

class ImageFailureCode {
}

class ImageFailureList {
}

class ImageFailureReason {
}

class ImageIdentifier {
  public ImageDigest $image_digest;
  public ImageTag $image_tag;
}

class ImageIdentifierList {
}

class ImageList {
}

class ImageManifest {
}

class ImageNotFoundException {
  public ExceptionMessage $message;
}

class ImageScanFinding {
  public AttributeList $attributes;
  public FindingDescription $description;
  public FindingName $name;
  public FindingSeverity $severity;
  public Url $uri;
}

class ImageScanFindingList {
}

class ImageScanFindings {
  public FindingSeverityCounts $finding_severity_counts;
  public ImageScanFindingList $findings;
  public ScanTimestamp $image_scan_completed_at;
  public VulnerabilitySourceUpdateTimestamp $vulnerability_source_updated_at;
}

class ImageScanFindingsSummary {
  public FindingSeverityCounts $finding_severity_counts;
  public ScanTimestamp $image_scan_completed_at;
  public VulnerabilitySourceUpdateTimestamp $vulnerability_source_updated_at;
}

class ImageScanStatus {
  public ScanStatusDescription $description;
  public ScanStatus $status;
}

class ImageScanningConfiguration {
  public ScanOnPushFlag $scan_on_push;
}

class ImageSizeInBytes {
}

class ImageTag {
}

class ImageTagAlreadyExistsException {
  public ExceptionMessage $message;
}

class ImageTagList {
}

class ImageTagMutability {
}

class InitiateLayerUploadRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class InitiateLayerUploadResponse {
  public PartSize $part_size;
  public UploadId $upload_id;
}

class InvalidLayerException {
  public ExceptionMessage $message;
}

class InvalidLayerPartException {
  public PartSize $last_valid_byte_received;
  public ExceptionMessage $message;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public UploadId $upload_id;
}

class InvalidParameterException {
  public ExceptionMessage $message;
}

class InvalidTagParameterException {
  public ExceptionMessage $message;
}

class Layer {
  public LayerAvailability $layer_availability;
  public LayerDigest $layer_digest;
  public LayerSizeInBytes $layer_size;
  public MediaType $media_type;
}

class LayerAlreadyExistsException {
  public ExceptionMessage $message;
}

class LayerAvailability {
}

class LayerDigest {
}

class LayerDigestList {
}

class LayerFailure {
  public LayerFailureCode $failure_code;
  public LayerFailureReason $failure_reason;
  public BatchedOperationLayerDigest $layer_digest;
}

class LayerFailureCode {
}

class LayerFailureList {
}

class LayerFailureReason {
}

class LayerInaccessibleException {
  public ExceptionMessage $message;
}

class LayerList {
}

class LayerPartBlob {
}

class LayerPartTooSmallException {
  public ExceptionMessage $message;
}

class LayerSizeInBytes {
}

class LayersNotFoundException {
  public ExceptionMessage $message;
}

class LifecyclePolicyNotFoundException {
  public ExceptionMessage $message;
}

class LifecyclePolicyPreviewFilter {
  public TagStatus $tag_status;
}

class LifecyclePolicyPreviewInProgressException {
  public ExceptionMessage $message;
}

class LifecyclePolicyPreviewNotFoundException {
  public ExceptionMessage $message;
}

class LifecyclePolicyPreviewResult {
  public LifecyclePolicyRuleAction $action;
  public LifecyclePolicyRulePriority $applied_rule_priority;
  public ImageDigest $image_digest;
  public PushTimestamp $image_pushed_at;
  public ImageTagList $image_tags;
}

class LifecyclePolicyPreviewResultList {
}

class LifecyclePolicyPreviewStatus {
}

class LifecyclePolicyPreviewSummary {
  public ImageCount $expiring_image_total_count;
}

class LifecyclePolicyRuleAction {
  public ImageActionType $type;
}

class LifecyclePolicyRulePriority {
}

class LifecyclePolicyText {
}

class LifecyclePreviewMaxResults {
}

class LimitExceededException {
  public ExceptionMessage $message;
}

class ListImagesFilter {
  public TagStatus $tag_status;
}

class ListImagesRequest {
  public ListImagesFilter $filter;
  public MaxResults $max_results;
  public NextToken $next_token;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class ListImagesResponse {
  public ImageIdentifierList $image_ids;
  public NextToken $next_token;
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class MaxResults {
}

class MediaType {
}

class MediaTypeList {
}

class NextToken {
}

class PartSize {
}

class ProxyEndpoint {
}

class PushTimestamp {
}

class PutImageRequest {
  public ImageManifest $image_manifest;
  public ImageTag $image_tag;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class PutImageResponse {
  public Image $image;
}

class PutImageScanningConfigurationRequest {
  public ImageScanningConfiguration $image_scanning_configuration;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class PutImageScanningConfigurationResponse {
  public ImageScanningConfiguration $image_scanning_configuration;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class PutImageTagMutabilityRequest {
  public ImageTagMutability $image_tag_mutability;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class PutImageTagMutabilityResponse {
  public ImageTagMutability $image_tag_mutability;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class PutLifecyclePolicyRequest {
  public LifecyclePolicyText $lifecycle_policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class PutLifecyclePolicyResponse {
  public LifecyclePolicyText $lifecycle_policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class RegistryId {
}

class Repository {
  public CreationTimestamp $created_at;
  public ImageScanningConfiguration $image_scanning_configuration;
  public ImageTagMutability $image_tag_mutability;
  public RegistryId $registry_id;
  public Arn $repository_arn;
  public RepositoryName $repository_name;
  public Url $repository_uri;
}

class RepositoryAlreadyExistsException {
  public ExceptionMessage $message;
}

class RepositoryList {
}

class RepositoryName {
}

class RepositoryNameList {
}

class RepositoryNotEmptyException {
  public ExceptionMessage $message;
}

class RepositoryNotFoundException {
  public ExceptionMessage $message;
}

class RepositoryPolicyNotFoundException {
  public ExceptionMessage $message;
}

class RepositoryPolicyText {
}

class ScanNotFoundException {
  public ExceptionMessage $message;
}

class ScanOnPushFlag {
}

class ScanStatus {
}

class ScanStatusDescription {
}

class ScanTimestamp {
}

class ServerException {
  public ExceptionMessage $message;
}

class SetRepositoryPolicyRequest {
  public ForceFlag $force;
  public RepositoryPolicyText $policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class SetRepositoryPolicyResponse {
  public RepositoryPolicyText $policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class SeverityCount {
}

class StartImageScanRequest {
  public ImageIdentifier $image_id;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class StartImageScanResponse {
  public ImageIdentifier $image_id;
  public ImageScanStatus $image_scan_status;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class StartLifecyclePolicyPreviewRequest {
  public LifecyclePolicyText $lifecycle_policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class StartLifecyclePolicyPreviewResponse {
  public LifecyclePolicyText $lifecycle_policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public LifecyclePolicyPreviewStatus $status;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagResourceRequest {
  public Arn $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagStatus {
}

class TagValue {
}

class TooManyTagsException {
  public ExceptionMessage $message;
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UploadId {
}

class UploadLayerPartRequest {
  public LayerPartBlob $layer_part_blob;
  public PartSize $part_first_byte;
  public PartSize $part_last_byte;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public UploadId $upload_id;
}

class UploadLayerPartResponse {
  public PartSize $last_byte_received;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public UploadId $upload_id;
}

class UploadNotFoundException {
  public ExceptionMessage $message;
}

class Url {
}

class VulnerabilitySourceUpdateTimestamp {
}


<?hh // strict
namespace slack\aws\clouddirectory;

interface CloudDirectory {
  public function ListPolicyAttachments(ListPolicyAttachmentsRequest) Awaitable<Errors\Result<ListPolicyAttachmentsResponse>>;
  public function ListTypedLinkFacetNames(ListTypedLinkFacetNamesRequest) Awaitable<Errors\Result<ListTypedLinkFacetNamesResponse>>;
  public function AttachObject(AttachObjectRequest) Awaitable<Errors\Result<AttachObjectResponse>>;
  public function DetachTypedLink(DetachTypedLinkRequest) Awaitable<Errors\Error>;
  public function GetLinkAttributes(GetLinkAttributesRequest) Awaitable<Errors\Result<GetLinkAttributesResponse>>;
  public function GetObjectInformation(GetObjectInformationRequest) Awaitable<Errors\Result<GetObjectInformationResponse>>;
  public function RemoveFacetFromObject(RemoveFacetFromObjectRequest) Awaitable<Errors\Result<RemoveFacetFromObjectResponse>>;
  public function UpdateObjectAttributes(UpdateObjectAttributesRequest) Awaitable<Errors\Result<UpdateObjectAttributesResponse>>;
  public function CreateDirectory(CreateDirectoryRequest) Awaitable<Errors\Result<CreateDirectoryResponse>>;
  public function ListAttachedIndices(ListAttachedIndicesRequest) Awaitable<Errors\Result<ListAttachedIndicesResponse>>;
  public function ListObjectAttributes(ListObjectAttributesRequest) Awaitable<Errors\Result<ListObjectAttributesResponse>>;
  public function PublishSchema(PublishSchemaRequest) Awaitable<Errors\Result<PublishSchemaResponse>>;
  public function GetAppliedSchemaVersion(GetAppliedSchemaVersionRequest) Awaitable<Errors\Result<GetAppliedSchemaVersionResponse>>;
  public function GetDirectory(GetDirectoryRequest) Awaitable<Errors\Result<GetDirectoryResponse>>;
  public function ListFacetAttributes(ListFacetAttributesRequest) Awaitable<Errors\Result<ListFacetAttributesResponse>>;
  public function BatchWrite(BatchWriteRequest) Awaitable<Errors\Result<BatchWriteResponse>>;
  public function DetachPolicy(DetachPolicyRequest) Awaitable<Errors\Result<DetachPolicyResponse>>;
  public function AttachTypedLink(AttachTypedLinkRequest) Awaitable<Errors\Result<AttachTypedLinkResponse>>;
  public function DeleteObject(DeleteObjectRequest) Awaitable<Errors\Result<DeleteObjectResponse>>;
  public function GetFacet(GetFacetRequest) Awaitable<Errors\Result<GetFacetResponse>>;
  public function ListAppliedSchemaArns(ListAppliedSchemaArnsRequest) Awaitable<Errors\Result<ListAppliedSchemaArnsResponse>>;
  public function CreateTypedLinkFacet(CreateTypedLinkFacetRequest) Awaitable<Errors\Result<CreateTypedLinkFacetResponse>>;
  public function ListObjectPolicies(ListObjectPoliciesRequest) Awaitable<Errors\Result<ListObjectPoliciesResponse>>;
  public function AddFacetToObject(AddFacetToObjectRequest) Awaitable<Errors\Result<AddFacetToObjectResponse>>;
  public function CreateIndex(CreateIndexRequest) Awaitable<Errors\Result<CreateIndexResponse>>;
  public function ListDevelopmentSchemaArns(ListDevelopmentSchemaArnsRequest) Awaitable<Errors\Result<ListDevelopmentSchemaArnsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTypedLinkFacetAttributes(ListTypedLinkFacetAttributesRequest) Awaitable<Errors\Result<ListTypedLinkFacetAttributesResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function CreateObject(CreateObjectRequest) Awaitable<Errors\Result<CreateObjectResponse>>;
  public function GetObjectAttributes(GetObjectAttributesRequest) Awaitable<Errors\Result<GetObjectAttributesResponse>>;
  public function ListFacetNames(ListFacetNamesRequest) Awaitable<Errors\Result<ListFacetNamesResponse>>;
  public function ListObjectChildren(ListObjectChildrenRequest) Awaitable<Errors\Result<ListObjectChildrenResponse>>;
  public function UpdateTypedLinkFacet(UpdateTypedLinkFacetRequest) Awaitable<Errors\Result<UpdateTypedLinkFacetResponse>>;
  public function ListDirectories(ListDirectoriesRequest) Awaitable<Errors\Result<ListDirectoriesResponse>>;
  public function ListIncomingTypedLinks(ListIncomingTypedLinksRequest) Awaitable<Errors\Result<ListIncomingTypedLinksResponse>>;
  public function ListObjectParentPaths(ListObjectParentPathsRequest) Awaitable<Errors\Result<ListObjectParentPathsResponse>>;
  public function UpdateLinkAttributes(UpdateLinkAttributesRequest) Awaitable<Errors\Result<UpdateLinkAttributesResponse>>;
  public function ApplySchema(ApplySchemaRequest) Awaitable<Errors\Result<ApplySchemaResponse>>;
  public function CreateFacet(CreateFacetRequest) Awaitable<Errors\Result<CreateFacetResponse>>;
  public function DeleteSchema(DeleteSchemaRequest) Awaitable<Errors\Result<DeleteSchemaResponse>>;
  public function GetSchemaAsJson(GetSchemaAsJsonRequest) Awaitable<Errors\Result<GetSchemaAsJsonResponse>>;
  public function UpgradePublishedSchema(UpgradePublishedSchemaRequest) Awaitable<Errors\Result<UpgradePublishedSchemaResponse>>;
  public function DetachObject(DetachObjectRequest) Awaitable<Errors\Result<DetachObjectResponse>>;
  public function ListPublishedSchemaArns(ListPublishedSchemaArnsRequest) Awaitable<Errors\Result<ListPublishedSchemaArnsResponse>>;
  public function UpdateSchema(UpdateSchemaRequest) Awaitable<Errors\Result<UpdateSchemaResponse>>;
  public function BatchRead(BatchReadRequest) Awaitable<Errors\Result<BatchReadResponse>>;
  public function DisableDirectory(DisableDirectoryRequest) Awaitable<Errors\Result<DisableDirectoryResponse>>;
  public function GetTypedLinkFacetInformation(GetTypedLinkFacetInformationRequest) Awaitable<Errors\Result<GetTypedLinkFacetInformationResponse>>;
  public function ListObjectParents(ListObjectParentsRequest) Awaitable<Errors\Result<ListObjectParentsResponse>>;
  public function PutSchemaFromJson(PutSchemaFromJsonRequest) Awaitable<Errors\Result<PutSchemaFromJsonResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function AttachPolicy(AttachPolicyRequest) Awaitable<Errors\Result<AttachPolicyResponse>>;
  public function AttachToIndex(AttachToIndexRequest) Awaitable<Errors\Result<AttachToIndexResponse>>;
  public function DeleteDirectory(DeleteDirectoryRequest) Awaitable<Errors\Result<DeleteDirectoryResponse>>;
  public function ListIndex(ListIndexRequest) Awaitable<Errors\Result<ListIndexResponse>>;
  public function UpgradeAppliedSchema(UpgradeAppliedSchemaRequest) Awaitable<Errors\Result<UpgradeAppliedSchemaResponse>>;
  public function CreateSchema(CreateSchemaRequest) Awaitable<Errors\Result<CreateSchemaResponse>>;
  public function DeleteFacet(DeleteFacetRequest) Awaitable<Errors\Result<DeleteFacetResponse>>;
  public function ListOutgoingTypedLinks(ListOutgoingTypedLinksRequest) Awaitable<Errors\Result<ListOutgoingTypedLinksResponse>>;
  public function LookupPolicy(LookupPolicyRequest) Awaitable<Errors\Result<LookupPolicyResponse>>;
  public function UpdateFacet(UpdateFacetRequest) Awaitable<Errors\Result<UpdateFacetResponse>>;
  public function DeleteTypedLinkFacet(DeleteTypedLinkFacetRequest) Awaitable<Errors\Result<DeleteTypedLinkFacetResponse>>;
  public function DetachFromIndex(DetachFromIndexRequest) Awaitable<Errors\Result<DetachFromIndexResponse>>;
  public function EnableDirectory(EnableDirectoryRequest) Awaitable<Errors\Result<EnableDirectoryResponse>>;
  public function ListManagedSchemaArns(ListManagedSchemaArnsRequest) Awaitable<Errors\Result<ListManagedSchemaArnsResponse>>;
}

class FacetAttributeUpdateList {
}

class InvalidSchemaDocException {
  public ExceptionMessage $message;
}

class ListDirectoriesResponse {
  public DirectoryList $directories;
  public NextToken $next_token;
}

class BatchListOutgoingTypedLinksResponse {
  public TypedLinkSpecifierList $typed_link_specifiers;
  public NextToken $next_token;
}

class ListAppliedSchemaArnsResponse {
  public Arns $schema_arns;
  public NextToken $next_token;
}

class PathString {
}

class AttachToIndexRequest {
  public Arn $directory_arn;
  public ObjectReference $index_reference;
  public ObjectReference $target_reference;
}

class BatchListIndexResponse {
  public NextToken $next_token;
  public IndexAttachmentList $index_attachments;
}

class BatchListObjectParents {
  public ObjectReference $object_reference;
  public NextToken $next_token;
  public NumberResults $max_results;
}

class BatchReadException {
  public BatchReadExceptionType $type;
  public ExceptionMessage $message;
}

class BatchWriteOperationResponse {
  public BatchUpdateLinkAttributesResponse $update_link_attributes;
  public BatchUpdateObjectAttributesResponse $update_object_attributes;
  public BatchAttachPolicyResponse $attach_policy;
  public BatchDetachPolicyResponse $detach_policy;
  public BatchCreateIndexResponse $create_index;
  public BatchAttachTypedLinkResponse $attach_typed_link;
  public BatchCreateObjectResponse $create_object;
  public BatchDetachObjectResponse $detach_object;
  public BatchAddFacetToObjectResponse $add_facet_to_object;
  public BatchDetachTypedLinkResponse $detach_typed_link;
  public BatchAttachObjectResponse $attach_object;
  public BatchDeleteObjectResponse $delete_object;
  public BatchRemoveFacetFromObjectResponse $remove_facet_from_object;
  public BatchAttachToIndexResponse $attach_to_index;
  public BatchDetachFromIndexResponse $detach_from_index;
}

class GetSchemaAsJsonRequest {
  public Arn $schema_arn;
}

class ObjectIdentifierToLinkNameMap {
}

class TypedLinkNameList {
}

class BatchAttachPolicyResponse {
}

class DetachObjectRequest {
  public Arn $directory_arn;
  public ObjectReference $parent_reference;
  public LinkName $link_name;
}

class GetAppliedSchemaVersionRequest {
  public Arn $schema_arn;
}

class ListFacetNamesRequest {
  public Arn $schema_arn;
  public NextToken $next_token;
  public NumberResults $max_results;
}

class RuleParameterKey {
}

class TypedLinkAttributeRange {
  public TypedAttributeValueRange $range;
  public AttributeName $attribute_name;
}

class TypedLinkFacetAttributeUpdateList {
}

class PutSchemaFromJsonResponse {
  public Arn $arn;
}

class Arn {
}

class BatchAttachObject {
  public ObjectReference $parent_reference;
  public ObjectReference $child_reference;
  public LinkName $link_name;
}

class BatchListIndex {
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectAttributeRangeList $ranges_on_indexed_values;
  public ObjectReference $index_reference;
}

class BatchWriteException {
  public BatchOperationIndex $index;
  public BatchWriteExceptionType $type;
  public ExceptionMessage $message;
}

class AttachToIndexResponse {
  public ObjectIdentifier $attached_object_identifier;
}

class BatchReadRequest {
  public Arn $directory_arn;
  public BatchReadOperationList $operations;
  public ConsistencyLevel $consistency_level;
}

class FacetAttributeDefinition {
  public FacetAttributeType $type;
  public TypedAttributeValue $default_value;
  public Bool $is_immutable;
  public RuleMap $rules;
}

class FacetName {
}

class GetObjectInformationRequest {
  public ObjectReference $object_reference;
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
}

class InvalidNextTokenException {
  public ExceptionMessage $message;
}

class ListManagedSchemaArnsRequest {
  public Arn $schema_arn;
  public NextToken $next_token;
  public NumberResults $max_results;
}

class AttributeKey {
  public Arn $schema_arn;
  public FacetName $facet_name;
  public AttributeName $name;
}

class NumberResults {
}

class UpdateActionType {
}

class LookupPolicyResponse {
  public PolicyToPathList $policy_to_path_list;
  public NextToken $next_token;
}

class ApplySchemaResponse {
  public Arn $directory_arn;
  public Arn $applied_schema_arn;
}

class AttributeKeyAndValueList {
}

class BatchReadOperationResponseList {
}

class CreateIndexRequest {
  public Arn $directory_arn;
  public AttributeKeyList $ordered_indexed_attribute_list;
  public Bool $is_unique;
  public ObjectReference $parent_reference;
  public LinkName $link_name;
}

class DatetimeAttributeValue {
}

class ListDirectoriesRequest {
  public NextToken $next_token;
  public NumberResults $max_results;
  public DirectoryState $state;
}

class ListFacetNamesResponse {
  public FacetNameList $facet_names;
  public NextToken $next_token;
}

class ObjectIdentifierAndLinkNameTuple {
  public ObjectIdentifier $object_identifier;
  public LinkName $link_name;
}

class AttachTypedLinkResponse {
  public TypedLinkSpecifier $typed_link_specifier;
}

class DirectoryAlreadyExistsException {
  public ExceptionMessage $message;
}

class Facet {
  public ObjectType $object_type;
  public FacetStyle $facet_style;
  public FacetName $name;
}

class IncompatibleSchemaException {
  public ExceptionMessage $message;
}

class UpdateSchemaResponse {
  public Arn $schema_arn;
}

class Version {
}

class AddFacetToObjectResponse {
}

class CreateDirectoryRequest {
  public Arn $schema_arn;
  public DirectoryName $name;
}

class ExceptionMessage {
}

class IndexAttachmentList {
}

class ListTypedLinkFacetNamesRequest {
  public Arn $schema_arn;
  public NextToken $next_token;
  public NumberResults $max_results;
}

class PublishSchemaRequest {
  public Arn $development_schema_arn;
  public Version $version;
  public Version $minor_version;
  public SchemaName $name;
}

class CannotListParentOfRootException {
  public ExceptionMessage $message;
}

class DeleteObjectRequest {
  public Arn $directory_arn;
  public ObjectReference $object_reference;
}

class ListFacetAttributesRequest {
  public Arn $schema_arn;
  public FacetName $name;
  public NextToken $next_token;
  public NumberResults $max_results;
}

class ListDevelopmentSchemaArnsResponse {
  public Arns $schema_arns;
  public NextToken $next_token;
}

class Arns {
}

class BatchDetachObjectResponse {
  public ObjectIdentifier $detached_object_identifier;
}

class BatchWriteOperationList {
}

class DeleteDirectoryResponse {
  public Arn $directory_arn;
}

class FacetAttributeUpdate {
  public FacetAttribute $attribute;
  public UpdateActionType $action;
}

class LinkAttributeUpdateList {
}

class ListAttachedIndicesRequest {
  public Arn $directory_arn;
  public ObjectReference $target_reference;
  public NextToken $next_token;
  public NumberResults $max_results;
  public ConsistencyLevel $consistency_level;
}

class ListOutgoingTypedLinksRequest {
  public NextToken $next_token;
  public NumberResults $max_results;
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
  public ObjectReference $object_reference;
  public TypedLinkAttributeRangeList $filter_attribute_ranges;
  public TypedLinkSchemaAndFacetName $filter_typed_link;
}

class NotPolicyException {
  public ExceptionMessage $message;
}

class TagKeyList {
}

class TypedAttributeValue {
  public BinaryAttributeValue $binary_value;
  public BooleanAttributeValue $boolean_value;
  public NumberAttributeValue $number_value;
  public DatetimeAttributeValue $datetime_value;
  public StringAttributeValue $string_value;
}

class TypedLinkAttributeDefinition {
  public RuleMap $rules;
  public RequiredAttributeBehavior $required_behavior;
  public AttributeName $name;
  public FacetAttributeType $type;
  public TypedAttributeValue $default_value;
  public Bool $is_immutable;
}

class AttachTypedLinkRequest {
  public Arn $directory_arn;
  public ObjectReference $source_object_reference;
  public ObjectReference $target_object_reference;
  public TypedLinkSchemaAndFacetName $typed_link_facet;
  public AttributeNameAndValueList $attributes;
}

class BatchDeleteObject {
  public ObjectReference $object_reference;
}

class BatchGetObjectAttributes {
  public SchemaFacet $schema_facet;
  public AttributeNameList $attribute_names;
  public ObjectReference $object_reference;
}

class TagKey {
}

class TypedLinkAttributeDefinitionList {
}

class ObjectIdentifier {
}

class CreateSchemaRequest {
  public SchemaName $name;
}

class DeleteSchemaResponse {
  public Arn $schema_arn;
}

class DirectoryList {
}

class FacetAttributeReference {
  public FacetName $target_facet_name;
  public AttributeName $target_attribute_name;
}

class FacetStyle {
}

class GetObjectAttributesResponse {
  public AttributeKeyAndValueList $attributes;
}

class ListDevelopmentSchemaArnsRequest {
  public NextToken $next_token;
  public NumberResults $max_results;
}

class RequiredAttributeBehavior {
}

class RuleKey {
}

class BatchListObjectAttributes {
  public ObjectReference $object_reference;
  public NextToken $next_token;
  public NumberResults $max_results;
  public SchemaFacet $facet_filter;
}

class BatchListObjectChildrenResponse {
  public LinkNameToObjectIdentifierMap $children;
  public NextToken $next_token;
}

class Date {
}

class RangeMode {
}

class TypedAttributeValueRange {
  public TypedAttributeValue $start_value;
  public RangeMode $end_mode;
  public TypedAttributeValue $end_value;
  public RangeMode $start_mode;
}

class UpdateFacetResponse {
}

class BatchCreateObject {
  public LinkName $link_name;
  public BatchReferenceName $batch_reference_name;
  public SchemaFacetList $schema_facet;
  public AttributeKeyAndValueList $object_attribute_list;
  public ObjectReference $parent_reference;
}

class BatchDetachTypedLink {
  public TypedLinkSpecifier $typed_link_specifier;
}

class GetTypedLinkFacetInformationResponse {
  public AttributeNameList $identity_attribute_order;
}

class NextToken {
}

class Rule {
  public RuleType $type;
  public RuleParameterMap $parameters;
}

class ListObjectAttributesResponse {
  public AttributeKeyAndValueList $attributes;
  public NextToken $next_token;
}

class SchemaAlreadyExistsException {
  public ExceptionMessage $message;
}

class UpgradeAppliedSchemaRequest {
  public Bool $dry_run;
  public Arn $published_schema_arn;
  public Arn $directory_arn;
}

class BatchListPolicyAttachments {
  public NextToken $next_token;
  public NumberResults $max_results;
  public ObjectReference $policy_reference;
}

class BooleanAttributeValue {
}

class DeleteTypedLinkFacetResponse {
}

class FacetAttributeList {
}

class LinkNameAlreadyInUseException {
  public ExceptionMessage $message;
}

class ObjectAttributeRange {
  public TypedAttributeValueRange $range;
  public AttributeKey $attribute_key;
}

class TagList {
}

class BatchWriteOperation {
  public BatchUpdateObjectAttributes $update_object_attributes;
  public BatchDetachPolicy $detach_policy;
  public BatchCreateIndex $create_index;
  public BatchDetachTypedLink $detach_typed_link;
  public BatchUpdateLinkAttributes $update_link_attributes;
  public BatchAttachTypedLink $attach_typed_link;
  public BatchCreateObject $create_object;
  public BatchDetachObject $detach_object;
  public BatchAddFacetToObject $add_facet_to_object;
  public BatchAttachPolicy $attach_policy;
  public BatchDetachFromIndex $detach_from_index;
  public BatchAttachObject $attach_object;
  public BatchDeleteObject $delete_object;
  public BatchRemoveFacetFromObject $remove_facet_from_object;
  public BatchAttachToIndex $attach_to_index;
}

class ConsistencyLevel {
}

class LinkAttributeUpdate {
  public AttributeKey $attribute_key;
  public LinkAttributeAction $attribute_action;
}

class ListObjectParentsRequest {
  public Arn $directory_arn;
  public ObjectReference $object_reference;
  public NextToken $next_token;
  public NumberResults $max_results;
  public ConsistencyLevel $consistency_level;
  public Bool $include_all_links_to_each_parent;
}

class DisableDirectoryResponse {
  public Arn $directory_arn;
}

class TagValue {
}

class BatchListObjectPolicies {
  public NumberResults $max_results;
  public ObjectReference $object_reference;
  public NextToken $next_token;
}

class GetAppliedSchemaVersionResponse {
  public Arn $applied_schema_arn;
}

class InvalidTaggingRequestException {
  public ExceptionMessage $message;
}

class LookupPolicyRequest {
  public ObjectReference $object_reference;
  public NextToken $next_token;
  public NumberResults $max_results;
  public Arn $directory_arn;
}

class Tag {
  public TagValue $value;
  public TagKey $key;
}

class ValidationException {
  public ExceptionMessage $message;
}

class BatchListObjectParentPaths {
  public ObjectReference $object_reference;
  public NextToken $next_token;
  public NumberResults $max_results;
}

class BatchWriteResponse {
  public BatchWriteOperationResponseList $responses;
}

class Bool {
}

class GetDirectoryResponse {
  public Directory $directory;
}

class RetryableConflictException {
  public ExceptionMessage $message;
}

class UpdateFacetRequest {
  public Arn $schema_arn;
  public FacetName $name;
  public FacetAttributeUpdateList $attribute_updates;
  public ObjectType $object_type;
}

class UpdateObjectAttributesRequest {
  public Arn $directory_arn;
  public ObjectReference $object_reference;
  public ObjectAttributeUpdateList $attribute_updates;
}

class BatchDetachPolicy {
  public ObjectReference $policy_reference;
  public ObjectReference $object_reference;
}

class BatchWriteRequest {
  public BatchWriteOperationList $operations;
  public Arn $directory_arn;
}

class DirectoryNotDisabledException {
  public ExceptionMessage $message;
}

class FacetNotFoundException {
  public ExceptionMessage $message;
}

class TagResourceResponse {
}

class BatchGetLinkAttributes {
  public TypedLinkSpecifier $typed_link_specifier;
  public AttributeNameList $attribute_names;
}

class BatchListObjectChildren {
  public NumberResults $max_results;
  public ObjectReference $object_reference;
  public NextToken $next_token;
}

class BatchUpdateLinkAttributes {
  public TypedLinkSpecifier $typed_link_specifier;
  public LinkAttributeUpdateList $attribute_updates;
}

class CreateObjectResponse {
  public ObjectIdentifier $object_identifier;
}

class ListTagsForResourceResponse {
  public NextToken $next_token;
  public TagList $tags;
}

class ObjectAttributeRangeList {
}

class BatchListAttachedIndices {
  public ObjectReference $target_reference;
  public NextToken $next_token;
  public NumberResults $max_results;
}

class BatchReadOperationList {
}

class BatchUpdateObjectAttributes {
  public ObjectReference $object_reference;
  public ObjectAttributeUpdateList $attribute_updates;
}

class InvalidFacetUpdateException {
  public ExceptionMessage $message;
}

class UpdateTypedLinkFacetResponse {
}

class GetTypedLinkFacetInformationRequest {
  public Arn $schema_arn;
  public TypedLinkName $name;
}

class ListPublishedSchemaArnsResponse {
  public Arns $schema_arns;
  public NextToken $next_token;
}

class ObjectAttributeUpdateList {
}

class UpgradePublishedSchemaRequest {
  public Arn $development_schema_arn;
  public Arn $published_schema_arn;
  public Version $minor_version;
  public Bool $dry_run;
}

class BatchDetachObject {
  public BatchReferenceName $batch_reference_name;
  public ObjectReference $parent_reference;
  public LinkName $link_name;
}

class BatchLookupPolicy {
  public ObjectReference $object_reference;
  public NextToken $next_token;
  public NumberResults $max_results;
}

class BatchReadOperationResponse {
  public BatchReadSuccessfulResponse $successful_response;
  public BatchReadException $exception_response;
}

class CreateTypedLinkFacetResponse {
}

class DetachPolicyRequest {
  public Arn $directory_arn;
  public ObjectReference $policy_reference;
  public ObjectReference $object_reference;
}

class InvalidArnException {
  public ExceptionMessage $message;
}

class BatchListOutgoingTypedLinks {
  public ObjectReference $object_reference;
  public TypedLinkAttributeRangeList $filter_attribute_ranges;
  public TypedLinkSchemaAndFacetName $filter_typed_link;
  public NextToken $next_token;
  public NumberResults $max_results;
}

class DeleteTypedLinkFacetRequest {
  public Arn $schema_arn;
  public TypedLinkName $name;
}

class FacetValidationException {
  public ExceptionMessage $message;
}

class GetObjectInformationResponse {
  public SchemaFacetList $schema_facets;
  public ObjectIdentifier $object_identifier;
}

class InvalidRuleException {
  public ExceptionMessage $message;
}

class LinkAttributeAction {
  public UpdateActionType $attribute_action_type;
  public TypedAttributeValue $attribute_update_value;
}

class SchemaName {
}

class AttributeName {
}

class BatchDetachTypedLinkResponse {
}

class CreateFacetRequest {
  public FacetAttributeList $attributes;
  public ObjectType $object_type;
  public FacetStyle $facet_style;
  public Arn $schema_arn;
  public FacetName $name;
}

class DeleteFacetRequest {
  public FacetName $name;
  public Arn $schema_arn;
}

class InternalServiceException {
  public ExceptionMessage $message;
}

class ListObjectParentsResponse {
  public ObjectIdentifierToLinkNameMap $parents;
  public NextToken $next_token;
  public ObjectIdentifierAndLinkNameList $parent_links;
}

class BatchAttachTypedLink {
  public ObjectReference $target_object_reference;
  public TypedLinkSchemaAndFacetName $typed_link_facet;
  public AttributeNameAndValueList $attributes;
  public ObjectReference $source_object_reference;
}

class BatchDetachFromIndexResponse {
  public ObjectIdentifier $detached_object_identifier;
}

class BatchDetachPolicyResponse {
}

class CreateTypedLinkFacetRequest {
  public Arn $schema_arn;
  public TypedLinkFacet $facet;
}

class ListFacetAttributesResponse {
  public FacetAttributeList $attributes;
  public NextToken $next_token;
}

class ListIndexRequest {
  public ObjectReference $index_reference;
  public NumberResults $max_results;
  public NextToken $next_token;
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
  public ObjectAttributeRangeList $ranges_on_indexed_values;
}

class BatchAddFacetToObject {
  public AttributeKeyAndValueList $object_attribute_list;
  public ObjectReference $object_reference;
  public SchemaFacet $schema_facet;
}

class BatchCreateIndexResponse {
  public ObjectIdentifier $object_identifier;
}

class DetachObjectResponse {
  public ObjectIdentifier $detached_object_identifier;
}

class DirectoryArn {
}

class LimitExceededException {
  public ExceptionMessage $message;
}

class LinkName {
}

class LinkNameToObjectIdentifierMap {
}

class PublishSchemaResponse {
  public Arn $published_schema_arn;
}

class BatchCreateObjectResponse {
  public ObjectIdentifier $object_identifier;
}

class BatchListAttachedIndicesResponse {
  public IndexAttachmentList $index_attachments;
  public NextToken $next_token;
}

class IndexAttachment {
  public AttributeKeyAndValueList $indexed_attributes;
  public ObjectIdentifier $object_identifier;
}

class ListIncomingTypedLinksRequest {
  public NumberResults $max_results;
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
  public ObjectReference $object_reference;
  public TypedLinkAttributeRangeList $filter_attribute_ranges;
  public TypedLinkSchemaAndFacetName $filter_typed_link;
  public NextToken $next_token;
}

class UnsupportedIndexTypeException {
  public ExceptionMessage $message;
}

class BatchAttachTypedLinkResponse {
  public TypedLinkSpecifier $typed_link_specifier;
}

class DirectoryDeletedException {
  public ExceptionMessage $message;
}

class ListObjectPoliciesResponse {
  public ObjectIdentifierList $attached_policy_ids;
  public NextToken $next_token;
}

class RuleType {
}

class BatchLookupPolicyResponse {
  public PolicyToPathList $policy_to_path_list;
  public NextToken $next_token;
}

class DeleteObjectResponse {
}

class GetFacetResponse {
  public Facet $facet;
}

class UpgradeAppliedSchemaResponse {
  public Arn $upgraded_schema_arn;
  public Arn $directory_arn;
}

class CreateSchemaResponse {
  public Arn $schema_arn;
}

class InvalidAttachmentException {
  public ExceptionMessage $message;
}

class ListIndexResponse {
  public IndexAttachmentList $index_attachments;
  public NextToken $next_token;
}

class ListObjectAttributesRequest {
  public ConsistencyLevel $consistency_level;
  public SchemaFacet $facet_filter;
  public Arn $directory_arn;
  public ObjectReference $object_reference;
  public NextToken $next_token;
  public NumberResults $max_results;
}

class ListPublishedSchemaArnsRequest {
  public NumberResults $max_results;
  public Arn $schema_arn;
  public NextToken $next_token;
}

class RuleParameterMap {
}

class DirectoryName {
}

class ListTypedLinkFacetNamesResponse {
  public TypedLinkNameList $facet_names;
  public NextToken $next_token;
}

class SchemaFacet {
  public Arn $schema_arn;
  public FacetName $facet_name;
}

class BatchAddFacetToObjectResponse {
}

class BatchWriteExceptionType {
}

class ListAttachedIndicesResponse {
  public IndexAttachmentList $index_attachments;
  public NextToken $next_token;
}

class AttributeKeyAndValue {
  public AttributeKey $key;
  public TypedAttributeValue $value;
}

class BatchGetLinkAttributesResponse {
  public AttributeKeyAndValueList $attributes;
}

class DeleteDirectoryRequest {
  public Arn $directory_arn;
}

class ObjectReference {
  public SelectorObjectReference $selector;
}

class PutSchemaFromJsonRequest {
  public Arn $schema_arn;
  public SchemaJsonDocument $document;
}

class AttachObjectRequest {
  public Arn $directory_arn;
  public ObjectReference $parent_reference;
  public ObjectReference $child_reference;
  public LinkName $link_name;
}

class BatchDetachFromIndex {
  public ObjectReference $index_reference;
  public ObjectReference $target_reference;
}

class BatchGetObjectInformationResponse {
  public SchemaFacetList $schema_facets;
  public ObjectIdentifier $object_identifier;
}

class BatchReadSuccessfulResponse {
  public BatchListObjectPoliciesResponse $list_object_policies;
  public BatchListObjectChildrenResponse $list_object_children;
  public BatchGetObjectInformationResponse $get_object_information;
  public BatchGetObjectAttributesResponse $get_object_attributes;
  public BatchListObjectParentPathsResponse $list_object_parent_paths;
  public BatchListObjectAttributesResponse $list_object_attributes;
  public BatchListAttachedIndicesResponse $list_attached_indices;
  public BatchGetLinkAttributesResponse $get_link_attributes;
  public BatchListOutgoingTypedLinksResponse $list_outgoing_typed_links;
  public BatchListIncomingTypedLinksResponse $list_incoming_typed_links;
  public BatchListPolicyAttachmentsResponse $list_policy_attachments;
  public BatchLookupPolicyResponse $lookup_policy;
  public BatchListIndexResponse $list_index;
  public BatchListObjectParentsResponse $list_object_parents;
}

class ObjectIdentifierList {
}

class BatchAttachToIndex {
  public ObjectReference $index_reference;
  public ObjectReference $target_reference;
}

class BatchRemoveFacetFromObject {
  public SchemaFacet $schema_facet;
  public ObjectReference $object_reference;
}

class PolicyToPathList {
}

class StringAttributeValue {
}

class TypedLinkFacetAttributeUpdate {
  public TypedLinkAttributeDefinition $attribute;
  public UpdateActionType $action;
}

class BatchDeleteObjectResponse {
}

class BatchReadExceptionType {
}

class BinaryAttributeValue {
}

class EnableDirectoryRequest {
  public Arn $directory_arn;
}

class ObjectAttributeAction {
  public UpdateActionType $object_attribute_action_type;
  public TypedAttributeValue $object_attribute_update_value;
}

class ResourceNotFoundException {
  public ExceptionMessage $message;
}

class BatchListObjectAttributesResponse {
  public NextToken $next_token;
  public AttributeKeyAndValueList $attributes;
}

class DeleteSchemaRequest {
  public Arn $schema_arn;
}

class GetFacetRequest {
  public Arn $schema_arn;
  public FacetName $name;
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;
  public NextToken $next_token;
  public TagsNumberResults $max_results;
}

class ObjectNotDetachedException {
  public ExceptionMessage $message;
}

class UpdateSchemaRequest {
  public Arn $schema_arn;
  public SchemaName $name;
}

class TypedLinkName {
}

class AttributeNameList {
}

class FacetAttributeType {
}

class FacetInUseException {
  public ExceptionMessage $message;
}

class IndexedAttributeMissingException {
  public ExceptionMessage $message;
}

class ListObjectChildrenRequest {
  public NextToken $next_token;
  public NumberResults $max_results;
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
  public ObjectReference $object_reference;
}

class ListObjectParentPathsResponse {
  public PathToObjectIdentifiersList $path_to_object_identifiers_list;
  public NextToken $next_token;
}

class PolicyAttachment {
  public ObjectIdentifier $policy_id;
  public ObjectIdentifier $object_identifier;
  public PolicyType $policy_type;
}

class AttributeKeyList {
}

class FacetAttribute {
  public AttributeName $name;
  public FacetAttributeDefinition $attribute_definition;
  public FacetAttributeReference $attribute_reference;
  public RequiredAttributeBehavior $required_behavior;
}

class ListPolicyAttachmentsResponse {
  public ObjectIdentifierList $object_identifiers;
  public NextToken $next_token;
}

class NotNodeException {
  public ExceptionMessage $message;
}

class RemoveFacetFromObjectRequest {
  public Arn $directory_arn;
  public SchemaFacet $schema_facet;
  public ObjectReference $object_reference;
}

class RuleMap {
}

class UpdateLinkAttributesRequest {
  public Arn $directory_arn;
  public TypedLinkSpecifier $typed_link_specifier;
  public LinkAttributeUpdateList $attribute_updates;
}

class BatchGetObjectInformation {
  public ObjectReference $object_reference;
}

class DetachFromIndexRequest {
  public Arn $directory_arn;
  public ObjectReference $index_reference;
  public ObjectReference $target_reference;
}

class GetSchemaAsJsonResponse {
  public SchemaName $name;
  public SchemaJsonDocument $document;
}

class NumberAttributeValue {
}

class SchemaFacetList {
}

class TagResourceRequest {
  public Arn $resource_arn;
  public TagList $tags;
}

class TypedLinkSpecifier {
  public TypedLinkSchemaAndFacetName $typed_link_facet;
  public ObjectReference $source_object_reference;
  public ObjectReference $target_object_reference;
  public AttributeNameAndValueList $identity_attribute_values;
}

class UpdateTypedLinkFacetRequest {
  public TypedLinkFacetAttributeUpdateList $attribute_updates;
  public AttributeNameList $identity_attribute_order;
  public Arn $schema_arn;
  public TypedLinkName $name;
}

class BatchAttachToIndexResponse {
  public ObjectIdentifier $attached_object_identifier;
}

class BatchReadResponse {
  public BatchReadOperationResponseList $responses;
}

class GetLinkAttributesRequest {
  public Arn $directory_arn;
  public TypedLinkSpecifier $typed_link_specifier;
  public AttributeNameList $attribute_names;
  public ConsistencyLevel $consistency_level;
}

class PathToObjectIdentifiersList {
}

class RuleParameterValue {
}

class TypedLinkSchemaAndFacetName {
  public TypedLinkName $typed_link_name;
  public Arn $schema_arn;
}

class UpdateObjectAttributesResponse {
  public ObjectIdentifier $object_identifier;
}

class AttachPolicyRequest {
  public Arn $directory_arn;
  public ObjectReference $policy_reference;
  public ObjectReference $object_reference;
}

class BatchReferenceName {
}

class StillContainsLinksException {
  public ExceptionMessage $message;
}

class AttachObjectResponse {
  public ObjectIdentifier $attached_object_identifier;
}

class AttachPolicyResponse {
}

class DirectoryNotEnabledException {
  public ExceptionMessage $message;
}

class ListObjectParentPathsRequest {
  public Arn $directory_arn;
  public ObjectReference $object_reference;
  public NextToken $next_token;
  public NumberResults $max_results;
}

class BatchAttachPolicy {
  public ObjectReference $policy_reference;
  public ObjectReference $object_reference;
}

class BatchListPolicyAttachmentsResponse {
  public NextToken $next_token;
  public ObjectIdentifierList $object_identifiers;
}

class CreateIndexResponse {
  public ObjectIdentifier $object_identifier;
}

class GetDirectoryRequest {
  public DirectoryArn $directory_arn;
}

class GetLinkAttributesResponse {
  public AttributeKeyAndValueList $attributes;
}

class ListObjectPoliciesRequest {
  public Arn $directory_arn;
  public ObjectReference $object_reference;
  public NextToken $next_token;
  public NumberResults $max_results;
  public ConsistencyLevel $consistency_level;
}

class ObjectIdentifierAndLinkNameList {
}

class BatchListObjectParentsResponse {
  public NextToken $next_token;
  public ObjectIdentifierAndLinkNameList $parent_links;
}

class BatchUpdateLinkAttributesResponse {
}

class CreateFacetResponse {
}

class EnableDirectoryResponse {
  public Arn $directory_arn;
}

class BatchRemoveFacetFromObjectResponse {
}

class FacetNameList {
}

class GetObjectAttributesRequest {
  public Arn $directory_arn;
  public ObjectReference $object_reference;
  public ConsistencyLevel $consistency_level;
  public SchemaFacet $schema_facet;
  public AttributeNameList $attribute_names;
}

class TypedLinkFacet {
  public TypedLinkName $name;
  public TypedLinkAttributeDefinitionList $attributes;
  public AttributeNameList $identity_attribute_order;
}

class UpdateLinkAttributesResponse {
}

class SelectorObjectReference {
}

class BatchWriteOperationResponseList {
}

class DetachPolicyResponse {
}

class ListIncomingTypedLinksResponse {
  public TypedLinkSpecifierList $link_specifiers;
  public NextToken $next_token;
}

class ListOutgoingTypedLinksResponse {
  public TypedLinkSpecifierList $typed_link_specifiers;
  public NextToken $next_token;
}

class ObjectAttributeUpdate {
  public ObjectAttributeAction $object_attribute_action;
  public AttributeKey $object_attribute_key;
}

class PolicyAttachmentList {
}

class RemoveFacetFromObjectResponse {
}

class TagsNumberResults {
}

class TypedLinkAttributeRangeList {
}

class TypedLinkSpecifierList {
}

class Directory {
  public DirectoryName $name;
  public DirectoryArn $directory_arn;
  public DirectoryState $state;
  public Date $creation_date_time;
}

class ListManagedSchemaArnsResponse {
  public Arns $schema_arns;
  public NextToken $next_token;
}

class SchemaJsonDocument {
}

class AddFacetToObjectRequest {
  public AttributeKeyAndValueList $object_attribute_list;
  public ObjectReference $object_reference;
  public Arn $directory_arn;
  public SchemaFacet $schema_facet;
}

class AttributeNameAndValueList {
}

class BatchGetObjectAttributesResponse {
  public AttributeKeyAndValueList $attributes;
}

class BatchListIncomingTypedLinks {
  public TypedLinkSchemaAndFacetName $filter_typed_link;
  public NextToken $next_token;
  public NumberResults $max_results;
  public ObjectReference $object_reference;
  public TypedLinkAttributeRangeList $filter_attribute_ranges;
}

class BatchReadOperation {
  public BatchListObjectParents $list_object_parents;
  public BatchLookupPolicy $lookup_policy;
  public BatchGetObjectInformation $get_object_information;
  public BatchGetObjectAttributes $get_object_attributes;
  public BatchListObjectPolicies $list_object_policies;
  public BatchListObjectChildren $list_object_children;
  public BatchListAttachedIndices $list_attached_indices;
  public BatchListOutgoingTypedLinks $list_outgoing_typed_links;
  public BatchGetLinkAttributes $get_link_attributes;
  public BatchListObjectAttributes $list_object_attributes;
  public BatchListObjectParentPaths $list_object_parent_paths;
  public BatchListPolicyAttachments $list_policy_attachments;
  public BatchListIndex $list_index;
  public BatchListIncomingTypedLinks $list_incoming_typed_links;
}

class CreateDirectoryResponse {
  public DirectoryName $name;
  public ObjectIdentifier $object_identifier;
  public Arn $applied_schema_arn;
  public DirectoryArn $directory_arn;
}

class ObjectAlreadyDetachedException {
  public ExceptionMessage $message;
}

class BatchAttachObjectResponse {
  public ObjectIdentifier $attached_object_identifier;
}

class CreateObjectRequest {
  public AttributeKeyAndValueList $object_attribute_list;
  public ObjectReference $parent_reference;
  public LinkName $link_name;
  public Arn $directory_arn;
  public SchemaFacetList $schema_facets;
}

class DetachTypedLinkRequest {
  public Arn $directory_arn;
  public TypedLinkSpecifier $typed_link_specifier;
}

class AccessDeniedException {
  public ExceptionMessage $message;
}

class BatchListIncomingTypedLinksResponse {
  public TypedLinkSpecifierList $link_specifiers;
  public NextToken $next_token;
}

class BatchListObjectPoliciesResponse {
  public ObjectIdentifierList $attached_policy_ids;
  public NextToken $next_token;
}

class PolicyType {
}

class DisableDirectoryRequest {
  public Arn $directory_arn;
}

class FacetAlreadyExistsException {
  public ExceptionMessage $message;
}

class ListAppliedSchemaArnsRequest {
  public Arn $directory_arn;
  public Arn $schema_arn;
  public NextToken $next_token;
  public NumberResults $max_results;
}

class ListTypedLinkFacetAttributesResponse {
  public TypedLinkAttributeDefinitionList $attributes;
  public NextToken $next_token;
}

class PathToObjectIdentifiers {
  public PathString $path;
  public ObjectIdentifierList $object_identifiers;
}

class SchemaAlreadyPublishedException {
  public ExceptionMessage $message;
}

class BatchUpdateObjectAttributesResponse {
  public ObjectIdentifier $object_identifier;
}

class DeleteFacetResponse {
}

class NotIndexException {
  public ExceptionMessage $message;
}

class ObjectType {
}

class AttributeNameAndValue {
  public AttributeName $attribute_name;
  public TypedAttributeValue $value;
}

class DetachFromIndexResponse {
  public ObjectIdentifier $detached_object_identifier;
}

class ListObjectChildrenResponse {
  public LinkNameToObjectIdentifierMap $children;
  public NextToken $next_token;
}

class PolicyToPath {
  public PathString $path;
  public PolicyAttachmentList $policies;
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class BatchOperationIndex {
}

class DirectoryState {
}

class ListPolicyAttachmentsRequest {
  public ObjectReference $policy_reference;
  public NextToken $next_token;
  public NumberResults $max_results;
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
}

class ApplySchemaRequest {
  public Arn $published_schema_arn;
  public Arn $directory_arn;
}

class BatchListObjectParentPathsResponse {
  public PathToObjectIdentifiersList $path_to_object_identifiers_list;
  public NextToken $next_token;
}

class ListTypedLinkFacetAttributesRequest {
  public Arn $schema_arn;
  public TypedLinkName $name;
  public NextToken $next_token;
  public NumberResults $max_results;
}

class UpgradePublishedSchemaResponse {
  public Arn $upgraded_schema_arn;
}

class BatchCreateIndex {
  public LinkName $link_name;
  public BatchReferenceName $batch_reference_name;
  public AttributeKeyList $ordered_indexed_attribute_list;
  public Bool $is_unique;
  public ObjectReference $parent_reference;
}


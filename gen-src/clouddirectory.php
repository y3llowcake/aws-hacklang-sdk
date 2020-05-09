<?hh // strict
namespace slack\aws\clouddirectory;

interface CloudDirectory {
  public function AddFacetToObject(AddFacetToObjectRequest) Awaitable<Errors\Result<AddFacetToObjectResponse>>;
  public function ApplySchema(ApplySchemaRequest) Awaitable<Errors\Result<ApplySchemaResponse>>;
  public function AttachObject(AttachObjectRequest) Awaitable<Errors\Result<AttachObjectResponse>>;
  public function AttachPolicy(AttachPolicyRequest) Awaitable<Errors\Result<AttachPolicyResponse>>;
  public function AttachToIndex(AttachToIndexRequest) Awaitable<Errors\Result<AttachToIndexResponse>>;
  public function AttachTypedLink(AttachTypedLinkRequest) Awaitable<Errors\Result<AttachTypedLinkResponse>>;
  public function BatchRead(BatchReadRequest) Awaitable<Errors\Result<BatchReadResponse>>;
  public function BatchWrite(BatchWriteRequest) Awaitable<Errors\Result<BatchWriteResponse>>;
  public function CreateDirectory(CreateDirectoryRequest) Awaitable<Errors\Result<CreateDirectoryResponse>>;
  public function CreateFacet(CreateFacetRequest) Awaitable<Errors\Result<CreateFacetResponse>>;
  public function CreateIndex(CreateIndexRequest) Awaitable<Errors\Result<CreateIndexResponse>>;
  public function CreateObject(CreateObjectRequest) Awaitable<Errors\Result<CreateObjectResponse>>;
  public function CreateSchema(CreateSchemaRequest) Awaitable<Errors\Result<CreateSchemaResponse>>;
  public function CreateTypedLinkFacet(CreateTypedLinkFacetRequest) Awaitable<Errors\Result<CreateTypedLinkFacetResponse>>;
  public function DeleteDirectory(DeleteDirectoryRequest) Awaitable<Errors\Result<DeleteDirectoryResponse>>;
  public function DeleteFacet(DeleteFacetRequest) Awaitable<Errors\Result<DeleteFacetResponse>>;
  public function DeleteObject(DeleteObjectRequest) Awaitable<Errors\Result<DeleteObjectResponse>>;
  public function DeleteSchema(DeleteSchemaRequest) Awaitable<Errors\Result<DeleteSchemaResponse>>;
  public function DeleteTypedLinkFacet(DeleteTypedLinkFacetRequest) Awaitable<Errors\Result<DeleteTypedLinkFacetResponse>>;
  public function DetachFromIndex(DetachFromIndexRequest) Awaitable<Errors\Result<DetachFromIndexResponse>>;
  public function DetachObject(DetachObjectRequest) Awaitable<Errors\Result<DetachObjectResponse>>;
  public function DetachPolicy(DetachPolicyRequest) Awaitable<Errors\Result<DetachPolicyResponse>>;
  public function DetachTypedLink(DetachTypedLinkRequest) Awaitable<Errors\Error>;
  public function DisableDirectory(DisableDirectoryRequest) Awaitable<Errors\Result<DisableDirectoryResponse>>;
  public function EnableDirectory(EnableDirectoryRequest) Awaitable<Errors\Result<EnableDirectoryResponse>>;
  public function GetAppliedSchemaVersion(GetAppliedSchemaVersionRequest) Awaitable<Errors\Result<GetAppliedSchemaVersionResponse>>;
  public function GetDirectory(GetDirectoryRequest) Awaitable<Errors\Result<GetDirectoryResponse>>;
  public function GetFacet(GetFacetRequest) Awaitable<Errors\Result<GetFacetResponse>>;
  public function GetLinkAttributes(GetLinkAttributesRequest) Awaitable<Errors\Result<GetLinkAttributesResponse>>;
  public function GetObjectAttributes(GetObjectAttributesRequest) Awaitable<Errors\Result<GetObjectAttributesResponse>>;
  public function GetObjectInformation(GetObjectInformationRequest) Awaitable<Errors\Result<GetObjectInformationResponse>>;
  public function GetSchemaAsJson(GetSchemaAsJsonRequest) Awaitable<Errors\Result<GetSchemaAsJsonResponse>>;
  public function GetTypedLinkFacetInformation(GetTypedLinkFacetInformationRequest) Awaitable<Errors\Result<GetTypedLinkFacetInformationResponse>>;
  public function ListAppliedSchemaArns(ListAppliedSchemaArnsRequest) Awaitable<Errors\Result<ListAppliedSchemaArnsResponse>>;
  public function ListAttachedIndices(ListAttachedIndicesRequest) Awaitable<Errors\Result<ListAttachedIndicesResponse>>;
  public function ListDevelopmentSchemaArns(ListDevelopmentSchemaArnsRequest) Awaitable<Errors\Result<ListDevelopmentSchemaArnsResponse>>;
  public function ListDirectories(ListDirectoriesRequest) Awaitable<Errors\Result<ListDirectoriesResponse>>;
  public function ListFacetAttributes(ListFacetAttributesRequest) Awaitable<Errors\Result<ListFacetAttributesResponse>>;
  public function ListFacetNames(ListFacetNamesRequest) Awaitable<Errors\Result<ListFacetNamesResponse>>;
  public function ListIncomingTypedLinks(ListIncomingTypedLinksRequest) Awaitable<Errors\Result<ListIncomingTypedLinksResponse>>;
  public function ListIndex(ListIndexRequest) Awaitable<Errors\Result<ListIndexResponse>>;
  public function ListManagedSchemaArns(ListManagedSchemaArnsRequest) Awaitable<Errors\Result<ListManagedSchemaArnsResponse>>;
  public function ListObjectAttributes(ListObjectAttributesRequest) Awaitable<Errors\Result<ListObjectAttributesResponse>>;
  public function ListObjectChildren(ListObjectChildrenRequest) Awaitable<Errors\Result<ListObjectChildrenResponse>>;
  public function ListObjectParentPaths(ListObjectParentPathsRequest) Awaitable<Errors\Result<ListObjectParentPathsResponse>>;
  public function ListObjectParents(ListObjectParentsRequest) Awaitable<Errors\Result<ListObjectParentsResponse>>;
  public function ListObjectPolicies(ListObjectPoliciesRequest) Awaitable<Errors\Result<ListObjectPoliciesResponse>>;
  public function ListOutgoingTypedLinks(ListOutgoingTypedLinksRequest) Awaitable<Errors\Result<ListOutgoingTypedLinksResponse>>;
  public function ListPolicyAttachments(ListPolicyAttachmentsRequest) Awaitable<Errors\Result<ListPolicyAttachmentsResponse>>;
  public function ListPublishedSchemaArns(ListPublishedSchemaArnsRequest) Awaitable<Errors\Result<ListPublishedSchemaArnsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTypedLinkFacetAttributes(ListTypedLinkFacetAttributesRequest) Awaitable<Errors\Result<ListTypedLinkFacetAttributesResponse>>;
  public function ListTypedLinkFacetNames(ListTypedLinkFacetNamesRequest) Awaitable<Errors\Result<ListTypedLinkFacetNamesResponse>>;
  public function LookupPolicy(LookupPolicyRequest) Awaitable<Errors\Result<LookupPolicyResponse>>;
  public function PublishSchema(PublishSchemaRequest) Awaitable<Errors\Result<PublishSchemaResponse>>;
  public function PutSchemaFromJson(PutSchemaFromJsonRequest) Awaitable<Errors\Result<PutSchemaFromJsonResponse>>;
  public function RemoveFacetFromObject(RemoveFacetFromObjectRequest) Awaitable<Errors\Result<RemoveFacetFromObjectResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateFacet(UpdateFacetRequest) Awaitable<Errors\Result<UpdateFacetResponse>>;
  public function UpdateLinkAttributes(UpdateLinkAttributesRequest) Awaitable<Errors\Result<UpdateLinkAttributesResponse>>;
  public function UpdateObjectAttributes(UpdateObjectAttributesRequest) Awaitable<Errors\Result<UpdateObjectAttributesResponse>>;
  public function UpdateSchema(UpdateSchemaRequest) Awaitable<Errors\Result<UpdateSchemaResponse>>;
  public function UpdateTypedLinkFacet(UpdateTypedLinkFacetRequest) Awaitable<Errors\Result<UpdateTypedLinkFacetResponse>>;
  public function UpgradeAppliedSchema(UpgradeAppliedSchemaRequest) Awaitable<Errors\Result<UpgradeAppliedSchemaResponse>>;
  public function UpgradePublishedSchema(UpgradePublishedSchemaRequest) Awaitable<Errors\Result<UpgradePublishedSchemaResponse>>;
}

class AccessDeniedException {
  public ExceptionMessage $message;
}

class AddFacetToObjectRequest {
  public Arn $directory_arn;
  public AttributeKeyAndValueList $object_attribute_list;
  public ObjectReference $object_reference;
  public SchemaFacet $schema_facet;
}

class AddFacetToObjectResponse {
}

class ApplySchemaRequest {
  public Arn $directory_arn;
  public Arn $published_schema_arn;
}

class ApplySchemaResponse {
  public Arn $applied_schema_arn;
  public Arn $directory_arn;
}

class Arn {
}

class Arns {
}

class AttachObjectRequest {
  public ObjectReference $child_reference;
  public Arn $directory_arn;
  public LinkName $link_name;
  public ObjectReference $parent_reference;
}

class AttachObjectResponse {
  public ObjectIdentifier $attached_object_identifier;
}

class AttachPolicyRequest {
  public Arn $directory_arn;
  public ObjectReference $object_reference;
  public ObjectReference $policy_reference;
}

class AttachPolicyResponse {
}

class AttachToIndexRequest {
  public Arn $directory_arn;
  public ObjectReference $index_reference;
  public ObjectReference $target_reference;
}

class AttachToIndexResponse {
  public ObjectIdentifier $attached_object_identifier;
}

class AttachTypedLinkRequest {
  public AttributeNameAndValueList $attributes;
  public Arn $directory_arn;
  public ObjectReference $source_object_reference;
  public ObjectReference $target_object_reference;
  public TypedLinkSchemaAndFacetName $typed_link_facet;
}

class AttachTypedLinkResponse {
  public TypedLinkSpecifier $typed_link_specifier;
}

class AttributeKey {
  public FacetName $facet_name;
  public AttributeName $name;
  public Arn $schema_arn;
}

class AttributeKeyAndValue {
  public AttributeKey $key;
  public TypedAttributeValue $value;
}

class AttributeKeyAndValueList {
}

class AttributeKeyList {
}

class AttributeName {
}

class AttributeNameAndValue {
  public AttributeName $attribute_name;
  public TypedAttributeValue $value;
}

class AttributeNameAndValueList {
}

class AttributeNameList {
}

class BatchAddFacetToObject {
  public AttributeKeyAndValueList $object_attribute_list;
  public ObjectReference $object_reference;
  public SchemaFacet $schema_facet;
}

class BatchAddFacetToObjectResponse {
}

class BatchAttachObject {
  public ObjectReference $child_reference;
  public LinkName $link_name;
  public ObjectReference $parent_reference;
}

class BatchAttachObjectResponse {
  public ObjectIdentifier $attached_object_identifier;
}

class BatchAttachPolicy {
  public ObjectReference $object_reference;
  public ObjectReference $policy_reference;
}

class BatchAttachPolicyResponse {
}

class BatchAttachToIndex {
  public ObjectReference $index_reference;
  public ObjectReference $target_reference;
}

class BatchAttachToIndexResponse {
  public ObjectIdentifier $attached_object_identifier;
}

class BatchAttachTypedLink {
  public AttributeNameAndValueList $attributes;
  public ObjectReference $source_object_reference;
  public ObjectReference $target_object_reference;
  public TypedLinkSchemaAndFacetName $typed_link_facet;
}

class BatchAttachTypedLinkResponse {
  public TypedLinkSpecifier $typed_link_specifier;
}

class BatchCreateIndex {
  public BatchReferenceName $batch_reference_name;
  public Bool $is_unique;
  public LinkName $link_name;
  public AttributeKeyList $ordered_indexed_attribute_list;
  public ObjectReference $parent_reference;
}

class BatchCreateIndexResponse {
  public ObjectIdentifier $object_identifier;
}

class BatchCreateObject {
  public BatchReferenceName $batch_reference_name;
  public LinkName $link_name;
  public AttributeKeyAndValueList $object_attribute_list;
  public ObjectReference $parent_reference;
  public SchemaFacetList $schema_facet;
}

class BatchCreateObjectResponse {
  public ObjectIdentifier $object_identifier;
}

class BatchDeleteObject {
  public ObjectReference $object_reference;
}

class BatchDeleteObjectResponse {
}

class BatchDetachFromIndex {
  public ObjectReference $index_reference;
  public ObjectReference $target_reference;
}

class BatchDetachFromIndexResponse {
  public ObjectIdentifier $detached_object_identifier;
}

class BatchDetachObject {
  public BatchReferenceName $batch_reference_name;
  public LinkName $link_name;
  public ObjectReference $parent_reference;
}

class BatchDetachObjectResponse {
  public ObjectIdentifier $detached_object_identifier;
}

class BatchDetachPolicy {
  public ObjectReference $object_reference;
  public ObjectReference $policy_reference;
}

class BatchDetachPolicyResponse {
}

class BatchDetachTypedLink {
  public TypedLinkSpecifier $typed_link_specifier;
}

class BatchDetachTypedLinkResponse {
}

class BatchGetLinkAttributes {
  public AttributeNameList $attribute_names;
  public TypedLinkSpecifier $typed_link_specifier;
}

class BatchGetLinkAttributesResponse {
  public AttributeKeyAndValueList $attributes;
}

class BatchGetObjectAttributes {
  public AttributeNameList $attribute_names;
  public ObjectReference $object_reference;
  public SchemaFacet $schema_facet;
}

class BatchGetObjectAttributesResponse {
  public AttributeKeyAndValueList $attributes;
}

class BatchGetObjectInformation {
  public ObjectReference $object_reference;
}

class BatchGetObjectInformationResponse {
  public ObjectIdentifier $object_identifier;
  public SchemaFacetList $schema_facets;
}

class BatchListAttachedIndices {
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $target_reference;
}

class BatchListAttachedIndicesResponse {
  public IndexAttachmentList $index_attachments;
  public NextToken $next_token;
}

class BatchListIncomingTypedLinks {
  public TypedLinkAttributeRangeList $filter_attribute_ranges;
  public TypedLinkSchemaAndFacetName $filter_typed_link;
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $object_reference;
}

class BatchListIncomingTypedLinksResponse {
  public TypedLinkSpecifierList $link_specifiers;
  public NextToken $next_token;
}

class BatchListIndex {
  public ObjectReference $index_reference;
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectAttributeRangeList $ranges_on_indexed_values;
}

class BatchListIndexResponse {
  public IndexAttachmentList $index_attachments;
  public NextToken $next_token;
}

class BatchListObjectAttributes {
  public SchemaFacet $facet_filter;
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $object_reference;
}

class BatchListObjectAttributesResponse {
  public AttributeKeyAndValueList $attributes;
  public NextToken $next_token;
}

class BatchListObjectChildren {
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $object_reference;
}

class BatchListObjectChildrenResponse {
  public LinkNameToObjectIdentifierMap $children;
  public NextToken $next_token;
}

class BatchListObjectParentPaths {
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $object_reference;
}

class BatchListObjectParentPathsResponse {
  public NextToken $next_token;
  public PathToObjectIdentifiersList $path_to_object_identifiers_list;
}

class BatchListObjectParents {
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $object_reference;
}

class BatchListObjectParentsResponse {
  public NextToken $next_token;
  public ObjectIdentifierAndLinkNameList $parent_links;
}

class BatchListObjectPolicies {
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $object_reference;
}

class BatchListObjectPoliciesResponse {
  public ObjectIdentifierList $attached_policy_ids;
  public NextToken $next_token;
}

class BatchListOutgoingTypedLinks {
  public TypedLinkAttributeRangeList $filter_attribute_ranges;
  public TypedLinkSchemaAndFacetName $filter_typed_link;
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $object_reference;
}

class BatchListOutgoingTypedLinksResponse {
  public NextToken $next_token;
  public TypedLinkSpecifierList $typed_link_specifiers;
}

class BatchListPolicyAttachments {
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $policy_reference;
}

class BatchListPolicyAttachmentsResponse {
  public NextToken $next_token;
  public ObjectIdentifierList $object_identifiers;
}

class BatchLookupPolicy {
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $object_reference;
}

class BatchLookupPolicyResponse {
  public NextToken $next_token;
  public PolicyToPathList $policy_to_path_list;
}

class BatchOperationIndex {
}

class BatchReadException {
  public ExceptionMessage $message;
  public BatchReadExceptionType $type;
}

class BatchReadExceptionType {
}

class BatchReadOperation {
  public BatchGetLinkAttributes $get_link_attributes;
  public BatchGetObjectAttributes $get_object_attributes;
  public BatchGetObjectInformation $get_object_information;
  public BatchListAttachedIndices $list_attached_indices;
  public BatchListIncomingTypedLinks $list_incoming_typed_links;
  public BatchListIndex $list_index;
  public BatchListObjectAttributes $list_object_attributes;
  public BatchListObjectChildren $list_object_children;
  public BatchListObjectParentPaths $list_object_parent_paths;
  public BatchListObjectParents $list_object_parents;
  public BatchListObjectPolicies $list_object_policies;
  public BatchListOutgoingTypedLinks $list_outgoing_typed_links;
  public BatchListPolicyAttachments $list_policy_attachments;
  public BatchLookupPolicy $lookup_policy;
}

class BatchReadOperationList {
}

class BatchReadOperationResponse {
  public BatchReadException $exception_response;
  public BatchReadSuccessfulResponse $successful_response;
}

class BatchReadOperationResponseList {
}

class BatchReadRequest {
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
  public BatchReadOperationList $operations;
}

class BatchReadResponse {
  public BatchReadOperationResponseList $responses;
}

class BatchReadSuccessfulResponse {
  public BatchGetLinkAttributesResponse $get_link_attributes;
  public BatchGetObjectAttributesResponse $get_object_attributes;
  public BatchGetObjectInformationResponse $get_object_information;
  public BatchListAttachedIndicesResponse $list_attached_indices;
  public BatchListIncomingTypedLinksResponse $list_incoming_typed_links;
  public BatchListIndexResponse $list_index;
  public BatchListObjectAttributesResponse $list_object_attributes;
  public BatchListObjectChildrenResponse $list_object_children;
  public BatchListObjectParentPathsResponse $list_object_parent_paths;
  public BatchListObjectParentsResponse $list_object_parents;
  public BatchListObjectPoliciesResponse $list_object_policies;
  public BatchListOutgoingTypedLinksResponse $list_outgoing_typed_links;
  public BatchListPolicyAttachmentsResponse $list_policy_attachments;
  public BatchLookupPolicyResponse $lookup_policy;
}

class BatchReferenceName {
}

class BatchRemoveFacetFromObject {
  public ObjectReference $object_reference;
  public SchemaFacet $schema_facet;
}

class BatchRemoveFacetFromObjectResponse {
}

class BatchUpdateLinkAttributes {
  public LinkAttributeUpdateList $attribute_updates;
  public TypedLinkSpecifier $typed_link_specifier;
}

class BatchUpdateLinkAttributesResponse {
}

class BatchUpdateObjectAttributes {
  public ObjectAttributeUpdateList $attribute_updates;
  public ObjectReference $object_reference;
}

class BatchUpdateObjectAttributesResponse {
  public ObjectIdentifier $object_identifier;
}

class BatchWriteException {
  public BatchOperationIndex $index;
  public ExceptionMessage $message;
  public BatchWriteExceptionType $type;
}

class BatchWriteExceptionType {
}

class BatchWriteOperation {
  public BatchAddFacetToObject $add_facet_to_object;
  public BatchAttachObject $attach_object;
  public BatchAttachPolicy $attach_policy;
  public BatchAttachToIndex $attach_to_index;
  public BatchAttachTypedLink $attach_typed_link;
  public BatchCreateIndex $create_index;
  public BatchCreateObject $create_object;
  public BatchDeleteObject $delete_object;
  public BatchDetachFromIndex $detach_from_index;
  public BatchDetachObject $detach_object;
  public BatchDetachPolicy $detach_policy;
  public BatchDetachTypedLink $detach_typed_link;
  public BatchRemoveFacetFromObject $remove_facet_from_object;
  public BatchUpdateLinkAttributes $update_link_attributes;
  public BatchUpdateObjectAttributes $update_object_attributes;
}

class BatchWriteOperationList {
}

class BatchWriteOperationResponse {
  public BatchAddFacetToObjectResponse $add_facet_to_object;
  public BatchAttachObjectResponse $attach_object;
  public BatchAttachPolicyResponse $attach_policy;
  public BatchAttachToIndexResponse $attach_to_index;
  public BatchAttachTypedLinkResponse $attach_typed_link;
  public BatchCreateIndexResponse $create_index;
  public BatchCreateObjectResponse $create_object;
  public BatchDeleteObjectResponse $delete_object;
  public BatchDetachFromIndexResponse $detach_from_index;
  public BatchDetachObjectResponse $detach_object;
  public BatchDetachPolicyResponse $detach_policy;
  public BatchDetachTypedLinkResponse $detach_typed_link;
  public BatchRemoveFacetFromObjectResponse $remove_facet_from_object;
  public BatchUpdateLinkAttributesResponse $update_link_attributes;
  public BatchUpdateObjectAttributesResponse $update_object_attributes;
}

class BatchWriteOperationResponseList {
}

class BatchWriteRequest {
  public Arn $directory_arn;
  public BatchWriteOperationList $operations;
}

class BatchWriteResponse {
  public BatchWriteOperationResponseList $responses;
}

class BinaryAttributeValue {
}

class Bool {
}

class BooleanAttributeValue {
}

class CannotListParentOfRootException {
  public ExceptionMessage $message;
}

class ConsistencyLevel {
}

class CreateDirectoryRequest {
  public DirectoryName $name;
  public Arn $schema_arn;
}

class CreateDirectoryResponse {
  public Arn $applied_schema_arn;
  public DirectoryArn $directory_arn;
  public DirectoryName $name;
  public ObjectIdentifier $object_identifier;
}

class CreateFacetRequest {
  public FacetAttributeList $attributes;
  public FacetStyle $facet_style;
  public FacetName $name;
  public ObjectType $object_type;
  public Arn $schema_arn;
}

class CreateFacetResponse {
}

class CreateIndexRequest {
  public Arn $directory_arn;
  public Bool $is_unique;
  public LinkName $link_name;
  public AttributeKeyList $ordered_indexed_attribute_list;
  public ObjectReference $parent_reference;
}

class CreateIndexResponse {
  public ObjectIdentifier $object_identifier;
}

class CreateObjectRequest {
  public Arn $directory_arn;
  public LinkName $link_name;
  public AttributeKeyAndValueList $object_attribute_list;
  public ObjectReference $parent_reference;
  public SchemaFacetList $schema_facets;
}

class CreateObjectResponse {
  public ObjectIdentifier $object_identifier;
}

class CreateSchemaRequest {
  public SchemaName $name;
}

class CreateSchemaResponse {
  public Arn $schema_arn;
}

class CreateTypedLinkFacetRequest {
  public TypedLinkFacet $facet;
  public Arn $schema_arn;
}

class CreateTypedLinkFacetResponse {
}

class Date {
}

class DatetimeAttributeValue {
}

class DeleteDirectoryRequest {
  public Arn $directory_arn;
}

class DeleteDirectoryResponse {
  public Arn $directory_arn;
}

class DeleteFacetRequest {
  public FacetName $name;
  public Arn $schema_arn;
}

class DeleteFacetResponse {
}

class DeleteObjectRequest {
  public Arn $directory_arn;
  public ObjectReference $object_reference;
}

class DeleteObjectResponse {
}

class DeleteSchemaRequest {
  public Arn $schema_arn;
}

class DeleteSchemaResponse {
  public Arn $schema_arn;
}

class DeleteTypedLinkFacetRequest {
  public TypedLinkName $name;
  public Arn $schema_arn;
}

class DeleteTypedLinkFacetResponse {
}

class DetachFromIndexRequest {
  public Arn $directory_arn;
  public ObjectReference $index_reference;
  public ObjectReference $target_reference;
}

class DetachFromIndexResponse {
  public ObjectIdentifier $detached_object_identifier;
}

class DetachObjectRequest {
  public Arn $directory_arn;
  public LinkName $link_name;
  public ObjectReference $parent_reference;
}

class DetachObjectResponse {
  public ObjectIdentifier $detached_object_identifier;
}

class DetachPolicyRequest {
  public Arn $directory_arn;
  public ObjectReference $object_reference;
  public ObjectReference $policy_reference;
}

class DetachPolicyResponse {
}

class DetachTypedLinkRequest {
  public Arn $directory_arn;
  public TypedLinkSpecifier $typed_link_specifier;
}

class Directory {
  public Date $creation_date_time;
  public DirectoryArn $directory_arn;
  public DirectoryName $name;
  public DirectoryState $state;
}

class DirectoryAlreadyExistsException {
  public ExceptionMessage $message;
}

class DirectoryArn {
}

class DirectoryDeletedException {
  public ExceptionMessage $message;
}

class DirectoryList {
}

class DirectoryName {
}

class DirectoryNotDisabledException {
  public ExceptionMessage $message;
}

class DirectoryNotEnabledException {
  public ExceptionMessage $message;
}

class DirectoryState {
}

class DisableDirectoryRequest {
  public Arn $directory_arn;
}

class DisableDirectoryResponse {
  public Arn $directory_arn;
}

class EnableDirectoryRequest {
  public Arn $directory_arn;
}

class EnableDirectoryResponse {
  public Arn $directory_arn;
}

class ExceptionMessage {
}

class Facet {
  public FacetStyle $facet_style;
  public FacetName $name;
  public ObjectType $object_type;
}

class FacetAlreadyExistsException {
  public ExceptionMessage $message;
}

class FacetAttribute {
  public FacetAttributeDefinition $attribute_definition;
  public FacetAttributeReference $attribute_reference;
  public AttributeName $name;
  public RequiredAttributeBehavior $required_behavior;
}

class FacetAttributeDefinition {
  public TypedAttributeValue $default_value;
  public Bool $is_immutable;
  public RuleMap $rules;
  public FacetAttributeType $type;
}

class FacetAttributeList {
}

class FacetAttributeReference {
  public AttributeName $target_attribute_name;
  public FacetName $target_facet_name;
}

class FacetAttributeType {
}

class FacetAttributeUpdate {
  public UpdateActionType $action;
  public FacetAttribute $attribute;
}

class FacetAttributeUpdateList {
}

class FacetInUseException {
  public ExceptionMessage $message;
}

class FacetName {
}

class FacetNameList {
}

class FacetNotFoundException {
  public ExceptionMessage $message;
}

class FacetStyle {
}

class FacetValidationException {
  public ExceptionMessage $message;
}

class GetAppliedSchemaVersionRequest {
  public Arn $schema_arn;
}

class GetAppliedSchemaVersionResponse {
  public Arn $applied_schema_arn;
}

class GetDirectoryRequest {
  public DirectoryArn $directory_arn;
}

class GetDirectoryResponse {
  public Directory $directory;
}

class GetFacetRequest {
  public FacetName $name;
  public Arn $schema_arn;
}

class GetFacetResponse {
  public Facet $facet;
}

class GetLinkAttributesRequest {
  public AttributeNameList $attribute_names;
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
  public TypedLinkSpecifier $typed_link_specifier;
}

class GetLinkAttributesResponse {
  public AttributeKeyAndValueList $attributes;
}

class GetObjectAttributesRequest {
  public AttributeNameList $attribute_names;
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
  public ObjectReference $object_reference;
  public SchemaFacet $schema_facet;
}

class GetObjectAttributesResponse {
  public AttributeKeyAndValueList $attributes;
}

class GetObjectInformationRequest {
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
  public ObjectReference $object_reference;
}

class GetObjectInformationResponse {
  public ObjectIdentifier $object_identifier;
  public SchemaFacetList $schema_facets;
}

class GetSchemaAsJsonRequest {
  public Arn $schema_arn;
}

class GetSchemaAsJsonResponse {
  public SchemaJsonDocument $document;
  public SchemaName $name;
}

class GetTypedLinkFacetInformationRequest {
  public TypedLinkName $name;
  public Arn $schema_arn;
}

class GetTypedLinkFacetInformationResponse {
  public AttributeNameList $identity_attribute_order;
}

class IncompatibleSchemaException {
  public ExceptionMessage $message;
}

class IndexAttachment {
  public AttributeKeyAndValueList $indexed_attributes;
  public ObjectIdentifier $object_identifier;
}

class IndexAttachmentList {
}

class IndexedAttributeMissingException {
  public ExceptionMessage $message;
}

class InternalServiceException {
  public ExceptionMessage $message;
}

class InvalidArnException {
  public ExceptionMessage $message;
}

class InvalidAttachmentException {
  public ExceptionMessage $message;
}

class InvalidFacetUpdateException {
  public ExceptionMessage $message;
}

class InvalidNextTokenException {
  public ExceptionMessage $message;
}

class InvalidRuleException {
  public ExceptionMessage $message;
}

class InvalidSchemaDocException {
  public ExceptionMessage $message;
}

class InvalidTaggingRequestException {
  public ExceptionMessage $message;
}

class LimitExceededException {
  public ExceptionMessage $message;
}

class LinkAttributeAction {
  public UpdateActionType $attribute_action_type;
  public TypedAttributeValue $attribute_update_value;
}

class LinkAttributeUpdate {
  public LinkAttributeAction $attribute_action;
  public AttributeKey $attribute_key;
}

class LinkAttributeUpdateList {
}

class LinkName {
}

class LinkNameAlreadyInUseException {
  public ExceptionMessage $message;
}

class LinkNameToObjectIdentifierMap {
}

class ListAppliedSchemaArnsRequest {
  public Arn $directory_arn;
  public NumberResults $max_results;
  public NextToken $next_token;
  public Arn $schema_arn;
}

class ListAppliedSchemaArnsResponse {
  public NextToken $next_token;
  public Arns $schema_arns;
}

class ListAttachedIndicesRequest {
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $target_reference;
}

class ListAttachedIndicesResponse {
  public IndexAttachmentList $index_attachments;
  public NextToken $next_token;
}

class ListDevelopmentSchemaArnsRequest {
  public NumberResults $max_results;
  public NextToken $next_token;
}

class ListDevelopmentSchemaArnsResponse {
  public NextToken $next_token;
  public Arns $schema_arns;
}

class ListDirectoriesRequest {
  public NumberResults $max_results;
  public NextToken $next_token;
  public DirectoryState $state;
}

class ListDirectoriesResponse {
  public DirectoryList $directories;
  public NextToken $next_token;
}

class ListFacetAttributesRequest {
  public NumberResults $max_results;
  public FacetName $name;
  public NextToken $next_token;
  public Arn $schema_arn;
}

class ListFacetAttributesResponse {
  public FacetAttributeList $attributes;
  public NextToken $next_token;
}

class ListFacetNamesRequest {
  public NumberResults $max_results;
  public NextToken $next_token;
  public Arn $schema_arn;
}

class ListFacetNamesResponse {
  public FacetNameList $facet_names;
  public NextToken $next_token;
}

class ListIncomingTypedLinksRequest {
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
  public TypedLinkAttributeRangeList $filter_attribute_ranges;
  public TypedLinkSchemaAndFacetName $filter_typed_link;
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $object_reference;
}

class ListIncomingTypedLinksResponse {
  public TypedLinkSpecifierList $link_specifiers;
  public NextToken $next_token;
}

class ListIndexRequest {
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
  public ObjectReference $index_reference;
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectAttributeRangeList $ranges_on_indexed_values;
}

class ListIndexResponse {
  public IndexAttachmentList $index_attachments;
  public NextToken $next_token;
}

class ListManagedSchemaArnsRequest {
  public NumberResults $max_results;
  public NextToken $next_token;
  public Arn $schema_arn;
}

class ListManagedSchemaArnsResponse {
  public NextToken $next_token;
  public Arns $schema_arns;
}

class ListObjectAttributesRequest {
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
  public SchemaFacet $facet_filter;
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $object_reference;
}

class ListObjectAttributesResponse {
  public AttributeKeyAndValueList $attributes;
  public NextToken $next_token;
}

class ListObjectChildrenRequest {
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $object_reference;
}

class ListObjectChildrenResponse {
  public LinkNameToObjectIdentifierMap $children;
  public NextToken $next_token;
}

class ListObjectParentPathsRequest {
  public Arn $directory_arn;
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $object_reference;
}

class ListObjectParentPathsResponse {
  public NextToken $next_token;
  public PathToObjectIdentifiersList $path_to_object_identifiers_list;
}

class ListObjectParentsRequest {
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
  public Bool $include_all_links_to_each_parent;
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $object_reference;
}

class ListObjectParentsResponse {
  public NextToken $next_token;
  public ObjectIdentifierAndLinkNameList $parent_links;
  public ObjectIdentifierToLinkNameMap $parents;
}

class ListObjectPoliciesRequest {
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $object_reference;
}

class ListObjectPoliciesResponse {
  public ObjectIdentifierList $attached_policy_ids;
  public NextToken $next_token;
}

class ListOutgoingTypedLinksRequest {
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
  public TypedLinkAttributeRangeList $filter_attribute_ranges;
  public TypedLinkSchemaAndFacetName $filter_typed_link;
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $object_reference;
}

class ListOutgoingTypedLinksResponse {
  public NextToken $next_token;
  public TypedLinkSpecifierList $typed_link_specifiers;
}

class ListPolicyAttachmentsRequest {
  public ConsistencyLevel $consistency_level;
  public Arn $directory_arn;
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $policy_reference;
}

class ListPolicyAttachmentsResponse {
  public NextToken $next_token;
  public ObjectIdentifierList $object_identifiers;
}

class ListPublishedSchemaArnsRequest {
  public NumberResults $max_results;
  public NextToken $next_token;
  public Arn $schema_arn;
}

class ListPublishedSchemaArnsResponse {
  public NextToken $next_token;
  public Arns $schema_arns;
}

class ListTagsForResourceRequest {
  public TagsNumberResults $max_results;
  public NextToken $next_token;
  public Arn $resource_arn;
}

class ListTagsForResourceResponse {
  public NextToken $next_token;
  public TagList $tags;
}

class ListTypedLinkFacetAttributesRequest {
  public NumberResults $max_results;
  public TypedLinkName $name;
  public NextToken $next_token;
  public Arn $schema_arn;
}

class ListTypedLinkFacetAttributesResponse {
  public TypedLinkAttributeDefinitionList $attributes;
  public NextToken $next_token;
}

class ListTypedLinkFacetNamesRequest {
  public NumberResults $max_results;
  public NextToken $next_token;
  public Arn $schema_arn;
}

class ListTypedLinkFacetNamesResponse {
  public TypedLinkNameList $facet_names;
  public NextToken $next_token;
}

class LookupPolicyRequest {
  public Arn $directory_arn;
  public NumberResults $max_results;
  public NextToken $next_token;
  public ObjectReference $object_reference;
}

class LookupPolicyResponse {
  public NextToken $next_token;
  public PolicyToPathList $policy_to_path_list;
}

class NextToken {
}

class NotIndexException {
  public ExceptionMessage $message;
}

class NotNodeException {
  public ExceptionMessage $message;
}

class NotPolicyException {
  public ExceptionMessage $message;
}

class NumberAttributeValue {
}

class NumberResults {
}

class ObjectAlreadyDetachedException {
  public ExceptionMessage $message;
}

class ObjectAttributeAction {
  public UpdateActionType $object_attribute_action_type;
  public TypedAttributeValue $object_attribute_update_value;
}

class ObjectAttributeRange {
  public AttributeKey $attribute_key;
  public TypedAttributeValueRange $range;
}

class ObjectAttributeRangeList {
}

class ObjectAttributeUpdate {
  public ObjectAttributeAction $object_attribute_action;
  public AttributeKey $object_attribute_key;
}

class ObjectAttributeUpdateList {
}

class ObjectIdentifier {
}

class ObjectIdentifierAndLinkNameList {
}

class ObjectIdentifierAndLinkNameTuple {
  public LinkName $link_name;
  public ObjectIdentifier $object_identifier;
}

class ObjectIdentifierList {
}

class ObjectIdentifierToLinkNameMap {
}

class ObjectNotDetachedException {
  public ExceptionMessage $message;
}

class ObjectReference {
  public SelectorObjectReference $selector;
}

class ObjectType {
}

class PathString {
}

class PathToObjectIdentifiers {
  public ObjectIdentifierList $object_identifiers;
  public PathString $path;
}

class PathToObjectIdentifiersList {
}

class PolicyAttachment {
  public ObjectIdentifier $object_identifier;
  public ObjectIdentifier $policy_id;
  public PolicyType $policy_type;
}

class PolicyAttachmentList {
}

class PolicyToPath {
  public PathString $path;
  public PolicyAttachmentList $policies;
}

class PolicyToPathList {
}

class PolicyType {
}

class PublishSchemaRequest {
  public Arn $development_schema_arn;
  public Version $minor_version;
  public SchemaName $name;
  public Version $version;
}

class PublishSchemaResponse {
  public Arn $published_schema_arn;
}

class PutSchemaFromJsonRequest {
  public SchemaJsonDocument $document;
  public Arn $schema_arn;
}

class PutSchemaFromJsonResponse {
  public Arn $arn;
}

class RangeMode {
}

class RemoveFacetFromObjectRequest {
  public Arn $directory_arn;
  public ObjectReference $object_reference;
  public SchemaFacet $schema_facet;
}

class RemoveFacetFromObjectResponse {
}

class RequiredAttributeBehavior {
}

class ResourceNotFoundException {
  public ExceptionMessage $message;
}

class RetryableConflictException {
  public ExceptionMessage $message;
}

class Rule {
  public RuleParameterMap $parameters;
  public RuleType $type;
}

class RuleKey {
}

class RuleMap {
}

class RuleParameterKey {
}

class RuleParameterMap {
}

class RuleParameterValue {
}

class RuleType {
}

class SchemaAlreadyExistsException {
  public ExceptionMessage $message;
}

class SchemaAlreadyPublishedException {
  public ExceptionMessage $message;
}

class SchemaFacet {
  public FacetName $facet_name;
  public Arn $schema_arn;
}

class SchemaFacetList {
}

class SchemaJsonDocument {
}

class SchemaName {
}

class SelectorObjectReference {
}

class StillContainsLinksException {
  public ExceptionMessage $message;
}

class StringAttributeValue {
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

class TagValue {
}

class TagsNumberResults {
}

class TypedAttributeValue {
  public BinaryAttributeValue $binary_value;
  public BooleanAttributeValue $boolean_value;
  public DatetimeAttributeValue $datetime_value;
  public NumberAttributeValue $number_value;
  public StringAttributeValue $string_value;
}

class TypedAttributeValueRange {
  public RangeMode $end_mode;
  public TypedAttributeValue $end_value;
  public RangeMode $start_mode;
  public TypedAttributeValue $start_value;
}

class TypedLinkAttributeDefinition {
  public TypedAttributeValue $default_value;
  public Bool $is_immutable;
  public AttributeName $name;
  public RequiredAttributeBehavior $required_behavior;
  public RuleMap $rules;
  public FacetAttributeType $type;
}

class TypedLinkAttributeDefinitionList {
}

class TypedLinkAttributeRange {
  public AttributeName $attribute_name;
  public TypedAttributeValueRange $range;
}

class TypedLinkAttributeRangeList {
}

class TypedLinkFacet {
  public TypedLinkAttributeDefinitionList $attributes;
  public AttributeNameList $identity_attribute_order;
  public TypedLinkName $name;
}

class TypedLinkFacetAttributeUpdate {
  public UpdateActionType $action;
  public TypedLinkAttributeDefinition $attribute;
}

class TypedLinkFacetAttributeUpdateList {
}

class TypedLinkName {
}

class TypedLinkNameList {
}

class TypedLinkSchemaAndFacetName {
  public Arn $schema_arn;
  public TypedLinkName $typed_link_name;
}

class TypedLinkSpecifier {
  public AttributeNameAndValueList $identity_attribute_values;
  public ObjectReference $source_object_reference;
  public ObjectReference $target_object_reference;
  public TypedLinkSchemaAndFacetName $typed_link_facet;
}

class TypedLinkSpecifierList {
}

class UnsupportedIndexTypeException {
  public ExceptionMessage $message;
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateActionType {
}

class UpdateFacetRequest {
  public FacetAttributeUpdateList $attribute_updates;
  public FacetName $name;
  public ObjectType $object_type;
  public Arn $schema_arn;
}

class UpdateFacetResponse {
}

class UpdateLinkAttributesRequest {
  public LinkAttributeUpdateList $attribute_updates;
  public Arn $directory_arn;
  public TypedLinkSpecifier $typed_link_specifier;
}

class UpdateLinkAttributesResponse {
}

class UpdateObjectAttributesRequest {
  public ObjectAttributeUpdateList $attribute_updates;
  public Arn $directory_arn;
  public ObjectReference $object_reference;
}

class UpdateObjectAttributesResponse {
  public ObjectIdentifier $object_identifier;
}

class UpdateSchemaRequest {
  public SchemaName $name;
  public Arn $schema_arn;
}

class UpdateSchemaResponse {
  public Arn $schema_arn;
}

class UpdateTypedLinkFacetRequest {
  public TypedLinkFacetAttributeUpdateList $attribute_updates;
  public AttributeNameList $identity_attribute_order;
  public TypedLinkName $name;
  public Arn $schema_arn;
}

class UpdateTypedLinkFacetResponse {
}

class UpgradeAppliedSchemaRequest {
  public Arn $directory_arn;
  public Bool $dry_run;
  public Arn $published_schema_arn;
}

class UpgradeAppliedSchemaResponse {
  public Arn $directory_arn;
  public Arn $upgraded_schema_arn;
}

class UpgradePublishedSchemaRequest {
  public Arn $development_schema_arn;
  public Bool $dry_run;
  public Version $minor_version;
  public Arn $published_schema_arn;
}

class UpgradePublishedSchemaResponse {
  public Arn $upgraded_schema_arn;
}

class ValidationException {
  public ExceptionMessage $message;
}

class Version {
}


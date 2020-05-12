<?hh // strict
namespace slack\aws\clouddirectory;

interface CloudDirectory {
  public function AddFacetToObject(AddFacetToObjectRequest $in): Awaitable<\Errors\Result<AddFacetToObjectResponse>>;
  public function ApplySchema(ApplySchemaRequest $in): Awaitable<\Errors\Result<ApplySchemaResponse>>;
  public function AttachObject(AttachObjectRequest $in): Awaitable<\Errors\Result<AttachObjectResponse>>;
  public function AttachPolicy(AttachPolicyRequest $in): Awaitable<\Errors\Result<AttachPolicyResponse>>;
  public function AttachToIndex(AttachToIndexRequest $in): Awaitable<\Errors\Result<AttachToIndexResponse>>;
  public function AttachTypedLink(AttachTypedLinkRequest $in): Awaitable<\Errors\Result<AttachTypedLinkResponse>>;
  public function BatchRead(BatchReadRequest $in): Awaitable<\Errors\Result<BatchReadResponse>>;
  public function BatchWrite(BatchWriteRequest $in): Awaitable<\Errors\Result<BatchWriteResponse>>;
  public function CreateDirectory(CreateDirectoryRequest $in): Awaitable<\Errors\Result<CreateDirectoryResponse>>;
  public function CreateFacet(CreateFacetRequest $in): Awaitable<\Errors\Result<CreateFacetResponse>>;
  public function CreateIndex(CreateIndexRequest $in): Awaitable<\Errors\Result<CreateIndexResponse>>;
  public function CreateObject(CreateObjectRequest $in): Awaitable<\Errors\Result<CreateObjectResponse>>;
  public function CreateSchema(CreateSchemaRequest $in): Awaitable<\Errors\Result<CreateSchemaResponse>>;
  public function CreateTypedLinkFacet(CreateTypedLinkFacetRequest $in): Awaitable<\Errors\Result<CreateTypedLinkFacetResponse>>;
  public function DeleteDirectory(DeleteDirectoryRequest $in): Awaitable<\Errors\Result<DeleteDirectoryResponse>>;
  public function DeleteFacet(DeleteFacetRequest $in): Awaitable<\Errors\Result<DeleteFacetResponse>>;
  public function DeleteObject(DeleteObjectRequest $in): Awaitable<\Errors\Result<DeleteObjectResponse>>;
  public function DeleteSchema(DeleteSchemaRequest $in): Awaitable<\Errors\Result<DeleteSchemaResponse>>;
  public function DeleteTypedLinkFacet(DeleteTypedLinkFacetRequest $in): Awaitable<\Errors\Result<DeleteTypedLinkFacetResponse>>;
  public function DetachFromIndex(DetachFromIndexRequest $in): Awaitable<\Errors\Result<DetachFromIndexResponse>>;
  public function DetachObject(DetachObjectRequest $in): Awaitable<\Errors\Result<DetachObjectResponse>>;
  public function DetachPolicy(DetachPolicyRequest $in): Awaitable<\Errors\Result<DetachPolicyResponse>>;
  public function DetachTypedLink(DetachTypedLinkRequest $in): Awaitable<\Errors\Error>;
  public function DisableDirectory(DisableDirectoryRequest $in): Awaitable<\Errors\Result<DisableDirectoryResponse>>;
  public function EnableDirectory(EnableDirectoryRequest $in): Awaitable<\Errors\Result<EnableDirectoryResponse>>;
  public function GetAppliedSchemaVersion(GetAppliedSchemaVersionRequest $in): Awaitable<\Errors\Result<GetAppliedSchemaVersionResponse>>;
  public function GetDirectory(GetDirectoryRequest $in): Awaitable<\Errors\Result<GetDirectoryResponse>>;
  public function GetFacet(GetFacetRequest $in): Awaitable<\Errors\Result<GetFacetResponse>>;
  public function GetLinkAttributes(GetLinkAttributesRequest $in): Awaitable<\Errors\Result<GetLinkAttributesResponse>>;
  public function GetObjectAttributes(GetObjectAttributesRequest $in): Awaitable<\Errors\Result<GetObjectAttributesResponse>>;
  public function GetObjectInformation(GetObjectInformationRequest $in): Awaitable<\Errors\Result<GetObjectInformationResponse>>;
  public function GetSchemaAsJson(GetSchemaAsJsonRequest $in): Awaitable<\Errors\Result<GetSchemaAsJsonResponse>>;
  public function GetTypedLinkFacetInformation(GetTypedLinkFacetInformationRequest $in): Awaitable<\Errors\Result<GetTypedLinkFacetInformationResponse>>;
  public function ListAppliedSchemaArns(ListAppliedSchemaArnsRequest $in): Awaitable<\Errors\Result<ListAppliedSchemaArnsResponse>>;
  public function ListAttachedIndices(ListAttachedIndicesRequest $in): Awaitable<\Errors\Result<ListAttachedIndicesResponse>>;
  public function ListDevelopmentSchemaArns(ListDevelopmentSchemaArnsRequest $in): Awaitable<\Errors\Result<ListDevelopmentSchemaArnsResponse>>;
  public function ListDirectories(ListDirectoriesRequest $in): Awaitable<\Errors\Result<ListDirectoriesResponse>>;
  public function ListFacetAttributes(ListFacetAttributesRequest $in): Awaitable<\Errors\Result<ListFacetAttributesResponse>>;
  public function ListFacetNames(ListFacetNamesRequest $in): Awaitable<\Errors\Result<ListFacetNamesResponse>>;
  public function ListIncomingTypedLinks(ListIncomingTypedLinksRequest $in): Awaitable<\Errors\Result<ListIncomingTypedLinksResponse>>;
  public function ListIndex(ListIndexRequest $in): Awaitable<\Errors\Result<ListIndexResponse>>;
  public function ListManagedSchemaArns(ListManagedSchemaArnsRequest $in): Awaitable<\Errors\Result<ListManagedSchemaArnsResponse>>;
  public function ListObjectAttributes(ListObjectAttributesRequest $in): Awaitable<\Errors\Result<ListObjectAttributesResponse>>;
  public function ListObjectChildren(ListObjectChildrenRequest $in): Awaitable<\Errors\Result<ListObjectChildrenResponse>>;
  public function ListObjectParentPaths(ListObjectParentPathsRequest $in): Awaitable<\Errors\Result<ListObjectParentPathsResponse>>;
  public function ListObjectParents(ListObjectParentsRequest $in): Awaitable<\Errors\Result<ListObjectParentsResponse>>;
  public function ListObjectPolicies(ListObjectPoliciesRequest $in): Awaitable<\Errors\Result<ListObjectPoliciesResponse>>;
  public function ListOutgoingTypedLinks(ListOutgoingTypedLinksRequest $in): Awaitable<\Errors\Result<ListOutgoingTypedLinksResponse>>;
  public function ListPolicyAttachments(ListPolicyAttachmentsRequest $in): Awaitable<\Errors\Result<ListPolicyAttachmentsResponse>>;
  public function ListPublishedSchemaArns(ListPublishedSchemaArnsRequest $in): Awaitable<\Errors\Result<ListPublishedSchemaArnsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ListTypedLinkFacetAttributes(ListTypedLinkFacetAttributesRequest $in): Awaitable<\Errors\Result<ListTypedLinkFacetAttributesResponse>>;
  public function ListTypedLinkFacetNames(ListTypedLinkFacetNamesRequest $in): Awaitable<\Errors\Result<ListTypedLinkFacetNamesResponse>>;
  public function LookupPolicy(LookupPolicyRequest $in): Awaitable<\Errors\Result<LookupPolicyResponse>>;
  public function PublishSchema(PublishSchemaRequest $in): Awaitable<\Errors\Result<PublishSchemaResponse>>;
  public function PutSchemaFromJson(PutSchemaFromJsonRequest $in): Awaitable<\Errors\Result<PutSchemaFromJsonResponse>>;
  public function RemoveFacetFromObject(RemoveFacetFromObjectRequest $in): Awaitable<\Errors\Result<RemoveFacetFromObjectResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateFacet(UpdateFacetRequest $in): Awaitable<\Errors\Result<UpdateFacetResponse>>;
  public function UpdateLinkAttributes(UpdateLinkAttributesRequest $in): Awaitable<\Errors\Result<UpdateLinkAttributesResponse>>;
  public function UpdateObjectAttributes(UpdateObjectAttributesRequest $in): Awaitable<\Errors\Result<UpdateObjectAttributesResponse>>;
  public function UpdateSchema(UpdateSchemaRequest $in): Awaitable<\Errors\Result<UpdateSchemaResponse>>;
  public function UpdateTypedLinkFacet(UpdateTypedLinkFacetRequest $in): Awaitable<\Errors\Result<UpdateTypedLinkFacetResponse>>;
  public function UpgradeAppliedSchema(UpgradeAppliedSchemaRequest $in): Awaitable<\Errors\Result<UpgradeAppliedSchemaResponse>>;
  public function UpgradePublishedSchema(UpgradePublishedSchemaRequest $in): Awaitable<\Errors\Result<UpgradePublishedSchemaResponse>>;
}

class AccessDeniedException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class AddFacetToObjectRequest {
  public ?Arn $directory_arn;
  public ?AttributeKeyAndValueList $object_attribute_list;
  public ?ObjectReference $object_reference;
  public ?SchemaFacet $schema_facet;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'object_attribute_list' => ?AttributeKeyAndValueList,
    ?'object_reference' => ?ObjectReference,
    ?'schema_facet' => ?SchemaFacet,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->object_attribute_list = $s['object_attribute_list'] ?? vec[];
    $this->object_reference = $s['object_reference'] ?? null;
    $this->schema_facet = $s['schema_facet'] ?? null;
  }
}

class AddFacetToObjectResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ApplySchemaRequest {
  public ?Arn $directory_arn;
  public ?Arn $published_schema_arn;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'published_schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->published_schema_arn = $s['published_schema_arn'] ?? '';
  }
}

class ApplySchemaResponse {
  public ?Arn $applied_schema_arn;
  public ?Arn $directory_arn;

  public function __construct(shape(
    ?'applied_schema_arn' => ?Arn,
    ?'directory_arn' => ?Arn,
  ) $s = shape()) {
    $this->applied_schema_arn = $s['applied_schema_arn'] ?? '';
    $this->directory_arn = $s['directory_arn'] ?? '';
  }
}

type Arn = string;

type Arns = vec<Arn>;

class AttachObjectRequest {
  public ?ObjectReference $child_reference;
  public ?Arn $directory_arn;
  public ?LinkName $link_name;
  public ?ObjectReference $parent_reference;

  public function __construct(shape(
    ?'child_reference' => ?ObjectReference,
    ?'directory_arn' => ?Arn,
    ?'link_name' => ?LinkName,
    ?'parent_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->child_reference = $s['child_reference'] ?? null;
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->link_name = $s['link_name'] ?? '';
    $this->parent_reference = $s['parent_reference'] ?? null;
  }
}

class AttachObjectResponse {
  public ?ObjectIdentifier $attached_object_identifier;

  public function __construct(shape(
    ?'attached_object_identifier' => ?ObjectIdentifier,
  ) $s = shape()) {
    $this->attached_object_identifier = $s['attached_object_identifier'] ?? '';
  }
}

class AttachPolicyRequest {
  public ?Arn $directory_arn;
  public ?ObjectReference $object_reference;
  public ?ObjectReference $policy_reference;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'object_reference' => ?ObjectReference,
    ?'policy_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
    $this->policy_reference = $s['policy_reference'] ?? null;
  }
}

class AttachPolicyResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AttachToIndexRequest {
  public ?Arn $directory_arn;
  public ?ObjectReference $index_reference;
  public ?ObjectReference $target_reference;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'index_reference' => ?ObjectReference,
    ?'target_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->index_reference = $s['index_reference'] ?? null;
    $this->target_reference = $s['target_reference'] ?? null;
  }
}

class AttachToIndexResponse {
  public ?ObjectIdentifier $attached_object_identifier;

  public function __construct(shape(
    ?'attached_object_identifier' => ?ObjectIdentifier,
  ) $s = shape()) {
    $this->attached_object_identifier = $s['attached_object_identifier'] ?? '';
  }
}

class AttachTypedLinkRequest {
  public ?AttributeNameAndValueList $attributes;
  public ?Arn $directory_arn;
  public ?ObjectReference $source_object_reference;
  public ?ObjectReference $target_object_reference;
  public ?TypedLinkSchemaAndFacetName $typed_link_facet;

  public function __construct(shape(
    ?'attributes' => ?AttributeNameAndValueList,
    ?'directory_arn' => ?Arn,
    ?'source_object_reference' => ?ObjectReference,
    ?'target_object_reference' => ?ObjectReference,
    ?'typed_link_facet' => ?TypedLinkSchemaAndFacetName,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->source_object_reference = $s['source_object_reference'] ?? null;
    $this->target_object_reference = $s['target_object_reference'] ?? null;
    $this->typed_link_facet = $s['typed_link_facet'] ?? null;
  }
}

class AttachTypedLinkResponse {
  public ?TypedLinkSpecifier $typed_link_specifier;

  public function __construct(shape(
    ?'typed_link_specifier' => ?TypedLinkSpecifier,
  ) $s = shape()) {
    $this->typed_link_specifier = $s['typed_link_specifier'] ?? null;
  }
}

class AttributeKey {
  public ?FacetName $facet_name;
  public ?AttributeName $name;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'facet_name' => ?FacetName,
    ?'name' => ?AttributeName,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->facet_name = $s['facet_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class AttributeKeyAndValue {
  public ?AttributeKey $key;
  public ?TypedAttributeValue $value;

  public function __construct(shape(
    ?'key' => ?AttributeKey,
    ?'value' => ?TypedAttributeValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? null;
    $this->value = $s['value'] ?? null;
  }
}

type AttributeKeyAndValueList = vec<AttributeKeyAndValue>;

type AttributeKeyList = vec<AttributeKey>;

type AttributeName = string;

class AttributeNameAndValue {
  public ?AttributeName $attribute_name;
  public ?TypedAttributeValue $value;

  public function __construct(shape(
    ?'attribute_name' => ?AttributeName,
    ?'value' => ?TypedAttributeValue,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->value = $s['value'] ?? null;
  }
}

type AttributeNameAndValueList = vec<AttributeNameAndValue>;

type AttributeNameList = vec<AttributeName>;

class BatchAddFacetToObject {
  public ?AttributeKeyAndValueList $object_attribute_list;
  public ?ObjectReference $object_reference;
  public ?SchemaFacet $schema_facet;

  public function __construct(shape(
    ?'object_attribute_list' => ?AttributeKeyAndValueList,
    ?'object_reference' => ?ObjectReference,
    ?'schema_facet' => ?SchemaFacet,
  ) $s = shape()) {
    $this->object_attribute_list = $s['object_attribute_list'] ?? vec[];
    $this->object_reference = $s['object_reference'] ?? null;
    $this->schema_facet = $s['schema_facet'] ?? null;
  }
}

class BatchAddFacetToObjectResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BatchAttachObject {
  public ?ObjectReference $child_reference;
  public ?LinkName $link_name;
  public ?ObjectReference $parent_reference;

  public function __construct(shape(
    ?'child_reference' => ?ObjectReference,
    ?'link_name' => ?LinkName,
    ?'parent_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->child_reference = $s['child_reference'] ?? null;
    $this->link_name = $s['link_name'] ?? '';
    $this->parent_reference = $s['parent_reference'] ?? null;
  }
}

class BatchAttachObjectResponse {
  public ?ObjectIdentifier $attached_object_identifier;

  public function __construct(shape(
    ?'attached_object_identifier' => ?ObjectIdentifier,
  ) $s = shape()) {
    $this->attached_object_identifier = $s['attached_object_identifier'] ?? '';
  }
}

class BatchAttachPolicy {
  public ?ObjectReference $object_reference;
  public ?ObjectReference $policy_reference;

  public function __construct(shape(
    ?'object_reference' => ?ObjectReference,
    ?'policy_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->object_reference = $s['object_reference'] ?? null;
    $this->policy_reference = $s['policy_reference'] ?? null;
  }
}

class BatchAttachPolicyResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BatchAttachToIndex {
  public ?ObjectReference $index_reference;
  public ?ObjectReference $target_reference;

  public function __construct(shape(
    ?'index_reference' => ?ObjectReference,
    ?'target_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->index_reference = $s['index_reference'] ?? null;
    $this->target_reference = $s['target_reference'] ?? null;
  }
}

class BatchAttachToIndexResponse {
  public ?ObjectIdentifier $attached_object_identifier;

  public function __construct(shape(
    ?'attached_object_identifier' => ?ObjectIdentifier,
  ) $s = shape()) {
    $this->attached_object_identifier = $s['attached_object_identifier'] ?? '';
  }
}

class BatchAttachTypedLink {
  public ?AttributeNameAndValueList $attributes;
  public ?ObjectReference $source_object_reference;
  public ?ObjectReference $target_object_reference;
  public ?TypedLinkSchemaAndFacetName $typed_link_facet;

  public function __construct(shape(
    ?'attributes' => ?AttributeNameAndValueList,
    ?'source_object_reference' => ?ObjectReference,
    ?'target_object_reference' => ?ObjectReference,
    ?'typed_link_facet' => ?TypedLinkSchemaAndFacetName,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->source_object_reference = $s['source_object_reference'] ?? null;
    $this->target_object_reference = $s['target_object_reference'] ?? null;
    $this->typed_link_facet = $s['typed_link_facet'] ?? null;
  }
}

class BatchAttachTypedLinkResponse {
  public ?TypedLinkSpecifier $typed_link_specifier;

  public function __construct(shape(
    ?'typed_link_specifier' => ?TypedLinkSpecifier,
  ) $s = shape()) {
    $this->typed_link_specifier = $s['typed_link_specifier'] ?? null;
  }
}

class BatchCreateIndex {
  public ?BatchReferenceName $batch_reference_name;
  public ?Bool $is_unique;
  public ?LinkName $link_name;
  public ?AttributeKeyList $ordered_indexed_attribute_list;
  public ?ObjectReference $parent_reference;

  public function __construct(shape(
    ?'batch_reference_name' => ?BatchReferenceName,
    ?'is_unique' => ?Bool,
    ?'link_name' => ?LinkName,
    ?'ordered_indexed_attribute_list' => ?AttributeKeyList,
    ?'parent_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->batch_reference_name = $s['batch_reference_name'] ?? '';
    $this->is_unique = $s['is_unique'] ?? false;
    $this->link_name = $s['link_name'] ?? '';
    $this->ordered_indexed_attribute_list = $s['ordered_indexed_attribute_list'] ?? vec[];
    $this->parent_reference = $s['parent_reference'] ?? null;
  }
}

class BatchCreateIndexResponse {
  public ?ObjectIdentifier $object_identifier;

  public function __construct(shape(
    ?'object_identifier' => ?ObjectIdentifier,
  ) $s = shape()) {
    $this->object_identifier = $s['object_identifier'] ?? '';
  }
}

class BatchCreateObject {
  public ?BatchReferenceName $batch_reference_name;
  public ?LinkName $link_name;
  public ?AttributeKeyAndValueList $object_attribute_list;
  public ?ObjectReference $parent_reference;
  public ?SchemaFacetList $schema_facet;

  public function __construct(shape(
    ?'batch_reference_name' => ?BatchReferenceName,
    ?'link_name' => ?LinkName,
    ?'object_attribute_list' => ?AttributeKeyAndValueList,
    ?'parent_reference' => ?ObjectReference,
    ?'schema_facet' => ?SchemaFacetList,
  ) $s = shape()) {
    $this->batch_reference_name = $s['batch_reference_name'] ?? '';
    $this->link_name = $s['link_name'] ?? '';
    $this->object_attribute_list = $s['object_attribute_list'] ?? vec[];
    $this->parent_reference = $s['parent_reference'] ?? null;
    $this->schema_facet = $s['schema_facet'] ?? vec[];
  }
}

class BatchCreateObjectResponse {
  public ?ObjectIdentifier $object_identifier;

  public function __construct(shape(
    ?'object_identifier' => ?ObjectIdentifier,
  ) $s = shape()) {
    $this->object_identifier = $s['object_identifier'] ?? '';
  }
}

class BatchDeleteObject {
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class BatchDeleteObjectResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BatchDetachFromIndex {
  public ?ObjectReference $index_reference;
  public ?ObjectReference $target_reference;

  public function __construct(shape(
    ?'index_reference' => ?ObjectReference,
    ?'target_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->index_reference = $s['index_reference'] ?? null;
    $this->target_reference = $s['target_reference'] ?? null;
  }
}

class BatchDetachFromIndexResponse {
  public ?ObjectIdentifier $detached_object_identifier;

  public function __construct(shape(
    ?'detached_object_identifier' => ?ObjectIdentifier,
  ) $s = shape()) {
    $this->detached_object_identifier = $s['detached_object_identifier'] ?? '';
  }
}

class BatchDetachObject {
  public ?BatchReferenceName $batch_reference_name;
  public ?LinkName $link_name;
  public ?ObjectReference $parent_reference;

  public function __construct(shape(
    ?'batch_reference_name' => ?BatchReferenceName,
    ?'link_name' => ?LinkName,
    ?'parent_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->batch_reference_name = $s['batch_reference_name'] ?? '';
    $this->link_name = $s['link_name'] ?? '';
    $this->parent_reference = $s['parent_reference'] ?? null;
  }
}

class BatchDetachObjectResponse {
  public ?ObjectIdentifier $detached_object_identifier;

  public function __construct(shape(
    ?'detached_object_identifier' => ?ObjectIdentifier,
  ) $s = shape()) {
    $this->detached_object_identifier = $s['detached_object_identifier'] ?? '';
  }
}

class BatchDetachPolicy {
  public ?ObjectReference $object_reference;
  public ?ObjectReference $policy_reference;

  public function __construct(shape(
    ?'object_reference' => ?ObjectReference,
    ?'policy_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->object_reference = $s['object_reference'] ?? null;
    $this->policy_reference = $s['policy_reference'] ?? null;
  }
}

class BatchDetachPolicyResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BatchDetachTypedLink {
  public ?TypedLinkSpecifier $typed_link_specifier;

  public function __construct(shape(
    ?'typed_link_specifier' => ?TypedLinkSpecifier,
  ) $s = shape()) {
    $this->typed_link_specifier = $s['typed_link_specifier'] ?? null;
  }
}

class BatchDetachTypedLinkResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BatchGetLinkAttributes {
  public ?AttributeNameList $attribute_names;
  public ?TypedLinkSpecifier $typed_link_specifier;

  public function __construct(shape(
    ?'attribute_names' => ?AttributeNameList,
    ?'typed_link_specifier' => ?TypedLinkSpecifier,
  ) $s = shape()) {
    $this->attribute_names = $s['attribute_names'] ?? vec[];
    $this->typed_link_specifier = $s['typed_link_specifier'] ?? null;
  }
}

class BatchGetLinkAttributesResponse {
  public ?AttributeKeyAndValueList $attributes;

  public function __construct(shape(
    ?'attributes' => ?AttributeKeyAndValueList,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
  }
}

class BatchGetObjectAttributes {
  public ?AttributeNameList $attribute_names;
  public ?ObjectReference $object_reference;
  public ?SchemaFacet $schema_facet;

  public function __construct(shape(
    ?'attribute_names' => ?AttributeNameList,
    ?'object_reference' => ?ObjectReference,
    ?'schema_facet' => ?SchemaFacet,
  ) $s = shape()) {
    $this->attribute_names = $s['attribute_names'] ?? vec[];
    $this->object_reference = $s['object_reference'] ?? null;
    $this->schema_facet = $s['schema_facet'] ?? null;
  }
}

class BatchGetObjectAttributesResponse {
  public ?AttributeKeyAndValueList $attributes;

  public function __construct(shape(
    ?'attributes' => ?AttributeKeyAndValueList,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
  }
}

class BatchGetObjectInformation {
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class BatchGetObjectInformationResponse {
  public ?ObjectIdentifier $object_identifier;
  public ?SchemaFacetList $schema_facets;

  public function __construct(shape(
    ?'object_identifier' => ?ObjectIdentifier,
    ?'schema_facets' => ?SchemaFacetList,
  ) $s = shape()) {
    $this->object_identifier = $s['object_identifier'] ?? '';
    $this->schema_facets = $s['schema_facets'] ?? vec[];
  }
}

class BatchListAttachedIndices {
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $target_reference;

  public function __construct(shape(
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'target_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->target_reference = $s['target_reference'] ?? null;
  }
}

class BatchListAttachedIndicesResponse {
  public ?IndexAttachmentList $index_attachments;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'index_attachments' => ?IndexAttachmentList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->index_attachments = $s['index_attachments'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class BatchListIncomingTypedLinks {
  public ?TypedLinkAttributeRangeList $filter_attribute_ranges;
  public ?TypedLinkSchemaAndFacetName $filter_typed_link;
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'filter_attribute_ranges' => ?TypedLinkAttributeRangeList,
    ?'filter_typed_link' => ?TypedLinkSchemaAndFacetName,
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->filter_attribute_ranges = $s['filter_attribute_ranges'] ?? vec[];
    $this->filter_typed_link = $s['filter_typed_link'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class BatchListIncomingTypedLinksResponse {
  public ?TypedLinkSpecifierList $link_specifiers;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'link_specifiers' => ?TypedLinkSpecifierList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->link_specifiers = $s['link_specifiers'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class BatchListIndex {
  public ?ObjectReference $index_reference;
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectAttributeRangeList $ranges_on_indexed_values;

  public function __construct(shape(
    ?'index_reference' => ?ObjectReference,
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'ranges_on_indexed_values' => ?ObjectAttributeRangeList,
  ) $s = shape()) {
    $this->index_reference = $s['index_reference'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->ranges_on_indexed_values = $s['ranges_on_indexed_values'] ?? vec[];
  }
}

class BatchListIndexResponse {
  public ?IndexAttachmentList $index_attachments;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'index_attachments' => ?IndexAttachmentList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->index_attachments = $s['index_attachments'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class BatchListObjectAttributes {
  public ?SchemaFacet $facet_filter;
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'facet_filter' => ?SchemaFacet,
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->facet_filter = $s['facet_filter'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class BatchListObjectAttributesResponse {
  public ?AttributeKeyAndValueList $attributes;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'attributes' => ?AttributeKeyAndValueList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class BatchListObjectChildren {
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class BatchListObjectChildrenResponse {
  public ?LinkNameToObjectIdentifierMap $children;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'children' => ?LinkNameToObjectIdentifierMap,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->children = $s['children'] ?? dict[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class BatchListObjectParentPaths {
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class BatchListObjectParentPathsResponse {
  public ?NextToken $next_token;
  public ?PathToObjectIdentifiersList $path_to_object_identifiers_list;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'path_to_object_identifiers_list' => ?PathToObjectIdentifiersList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->path_to_object_identifiers_list = $s['path_to_object_identifiers_list'] ?? vec[];
  }
}

class BatchListObjectParents {
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class BatchListObjectParentsResponse {
  public ?NextToken $next_token;
  public ?ObjectIdentifierAndLinkNameList $parent_links;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'parent_links' => ?ObjectIdentifierAndLinkNameList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->parent_links = $s['parent_links'] ?? vec[];
  }
}

class BatchListObjectPolicies {
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class BatchListObjectPoliciesResponse {
  public ?ObjectIdentifierList $attached_policy_ids;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'attached_policy_ids' => ?ObjectIdentifierList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->attached_policy_ids = $s['attached_policy_ids'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class BatchListOutgoingTypedLinks {
  public ?TypedLinkAttributeRangeList $filter_attribute_ranges;
  public ?TypedLinkSchemaAndFacetName $filter_typed_link;
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'filter_attribute_ranges' => ?TypedLinkAttributeRangeList,
    ?'filter_typed_link' => ?TypedLinkSchemaAndFacetName,
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->filter_attribute_ranges = $s['filter_attribute_ranges'] ?? vec[];
    $this->filter_typed_link = $s['filter_typed_link'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class BatchListOutgoingTypedLinksResponse {
  public ?NextToken $next_token;
  public ?TypedLinkSpecifierList $typed_link_specifiers;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'typed_link_specifiers' => ?TypedLinkSpecifierList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->typed_link_specifiers = $s['typed_link_specifiers'] ?? vec[];
  }
}

class BatchListPolicyAttachments {
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $policy_reference;

  public function __construct(shape(
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'policy_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->policy_reference = $s['policy_reference'] ?? null;
  }
}

class BatchListPolicyAttachmentsResponse {
  public ?NextToken $next_token;
  public ?ObjectIdentifierList $object_identifiers;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'object_identifiers' => ?ObjectIdentifierList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->object_identifiers = $s['object_identifiers'] ?? vec[];
  }
}

class BatchLookupPolicy {
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class BatchLookupPolicyResponse {
  public ?NextToken $next_token;
  public ?PolicyToPathList $policy_to_path_list;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'policy_to_path_list' => ?PolicyToPathList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->policy_to_path_list = $s['policy_to_path_list'] ?? vec[];
  }
}

type BatchOperationIndex = int;

class BatchReadException {
  public ?ExceptionMessage $message;
  public ?BatchReadExceptionType $type;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'type' => ?BatchReadExceptionType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type BatchReadExceptionType = string;

class BatchReadOperation {
  public ?BatchGetLinkAttributes $get_link_attributes;
  public ?BatchGetObjectAttributes $get_object_attributes;
  public ?BatchGetObjectInformation $get_object_information;
  public ?BatchListAttachedIndices $list_attached_indices;
  public ?BatchListIncomingTypedLinks $list_incoming_typed_links;
  public ?BatchListIndex $list_index;
  public ?BatchListObjectAttributes $list_object_attributes;
  public ?BatchListObjectChildren $list_object_children;
  public ?BatchListObjectParentPaths $list_object_parent_paths;
  public ?BatchListObjectParents $list_object_parents;
  public ?BatchListObjectPolicies $list_object_policies;
  public ?BatchListOutgoingTypedLinks $list_outgoing_typed_links;
  public ?BatchListPolicyAttachments $list_policy_attachments;
  public ?BatchLookupPolicy $lookup_policy;

  public function __construct(shape(
    ?'get_link_attributes' => ?BatchGetLinkAttributes,
    ?'get_object_attributes' => ?BatchGetObjectAttributes,
    ?'get_object_information' => ?BatchGetObjectInformation,
    ?'list_attached_indices' => ?BatchListAttachedIndices,
    ?'list_incoming_typed_links' => ?BatchListIncomingTypedLinks,
    ?'list_index' => ?BatchListIndex,
    ?'list_object_attributes' => ?BatchListObjectAttributes,
    ?'list_object_children' => ?BatchListObjectChildren,
    ?'list_object_parent_paths' => ?BatchListObjectParentPaths,
    ?'list_object_parents' => ?BatchListObjectParents,
    ?'list_object_policies' => ?BatchListObjectPolicies,
    ?'list_outgoing_typed_links' => ?BatchListOutgoingTypedLinks,
    ?'list_policy_attachments' => ?BatchListPolicyAttachments,
    ?'lookup_policy' => ?BatchLookupPolicy,
  ) $s = shape()) {
    $this->get_link_attributes = $s['get_link_attributes'] ?? null;
    $this->get_object_attributes = $s['get_object_attributes'] ?? null;
    $this->get_object_information = $s['get_object_information'] ?? null;
    $this->list_attached_indices = $s['list_attached_indices'] ?? null;
    $this->list_incoming_typed_links = $s['list_incoming_typed_links'] ?? null;
    $this->list_index = $s['list_index'] ?? null;
    $this->list_object_attributes = $s['list_object_attributes'] ?? null;
    $this->list_object_children = $s['list_object_children'] ?? null;
    $this->list_object_parent_paths = $s['list_object_parent_paths'] ?? null;
    $this->list_object_parents = $s['list_object_parents'] ?? null;
    $this->list_object_policies = $s['list_object_policies'] ?? null;
    $this->list_outgoing_typed_links = $s['list_outgoing_typed_links'] ?? null;
    $this->list_policy_attachments = $s['list_policy_attachments'] ?? null;
    $this->lookup_policy = $s['lookup_policy'] ?? null;
  }
}

type BatchReadOperationList = vec<BatchReadOperation>;

class BatchReadOperationResponse {
  public ?BatchReadException $exception_response;
  public ?BatchReadSuccessfulResponse $successful_response;

  public function __construct(shape(
    ?'exception_response' => ?BatchReadException,
    ?'successful_response' => ?BatchReadSuccessfulResponse,
  ) $s = shape()) {
    $this->exception_response = $s['exception_response'] ?? null;
    $this->successful_response = $s['successful_response'] ?? null;
  }
}

type BatchReadOperationResponseList = vec<BatchReadOperationResponse>;

class BatchReadRequest {
  public ?ConsistencyLevel $consistency_level;
  public ?Arn $directory_arn;
  public ?BatchReadOperationList $operations;

  public function __construct(shape(
    ?'consistency_level' => ?ConsistencyLevel,
    ?'directory_arn' => ?Arn,
    ?'operations' => ?BatchReadOperationList,
  ) $s = shape()) {
    $this->consistency_level = $s['consistency_level'] ?? '';
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->operations = $s['operations'] ?? vec[];
  }
}

class BatchReadResponse {
  public ?BatchReadOperationResponseList $responses;

  public function __construct(shape(
    ?'responses' => ?BatchReadOperationResponseList,
  ) $s = shape()) {
    $this->responses = $s['responses'] ?? vec[];
  }
}

class BatchReadSuccessfulResponse {
  public ?BatchGetLinkAttributesResponse $get_link_attributes;
  public ?BatchGetObjectAttributesResponse $get_object_attributes;
  public ?BatchGetObjectInformationResponse $get_object_information;
  public ?BatchListAttachedIndicesResponse $list_attached_indices;
  public ?BatchListIncomingTypedLinksResponse $list_incoming_typed_links;
  public ?BatchListIndexResponse $list_index;
  public ?BatchListObjectAttributesResponse $list_object_attributes;
  public ?BatchListObjectChildrenResponse $list_object_children;
  public ?BatchListObjectParentPathsResponse $list_object_parent_paths;
  public ?BatchListObjectParentsResponse $list_object_parents;
  public ?BatchListObjectPoliciesResponse $list_object_policies;
  public ?BatchListOutgoingTypedLinksResponse $list_outgoing_typed_links;
  public ?BatchListPolicyAttachmentsResponse $list_policy_attachments;
  public ?BatchLookupPolicyResponse $lookup_policy;

  public function __construct(shape(
    ?'get_link_attributes' => ?BatchGetLinkAttributesResponse,
    ?'get_object_attributes' => ?BatchGetObjectAttributesResponse,
    ?'get_object_information' => ?BatchGetObjectInformationResponse,
    ?'list_attached_indices' => ?BatchListAttachedIndicesResponse,
    ?'list_incoming_typed_links' => ?BatchListIncomingTypedLinksResponse,
    ?'list_index' => ?BatchListIndexResponse,
    ?'list_object_attributes' => ?BatchListObjectAttributesResponse,
    ?'list_object_children' => ?BatchListObjectChildrenResponse,
    ?'list_object_parent_paths' => ?BatchListObjectParentPathsResponse,
    ?'list_object_parents' => ?BatchListObjectParentsResponse,
    ?'list_object_policies' => ?BatchListObjectPoliciesResponse,
    ?'list_outgoing_typed_links' => ?BatchListOutgoingTypedLinksResponse,
    ?'list_policy_attachments' => ?BatchListPolicyAttachmentsResponse,
    ?'lookup_policy' => ?BatchLookupPolicyResponse,
  ) $s = shape()) {
    $this->get_link_attributes = $s['get_link_attributes'] ?? null;
    $this->get_object_attributes = $s['get_object_attributes'] ?? null;
    $this->get_object_information = $s['get_object_information'] ?? null;
    $this->list_attached_indices = $s['list_attached_indices'] ?? null;
    $this->list_incoming_typed_links = $s['list_incoming_typed_links'] ?? null;
    $this->list_index = $s['list_index'] ?? null;
    $this->list_object_attributes = $s['list_object_attributes'] ?? null;
    $this->list_object_children = $s['list_object_children'] ?? null;
    $this->list_object_parent_paths = $s['list_object_parent_paths'] ?? null;
    $this->list_object_parents = $s['list_object_parents'] ?? null;
    $this->list_object_policies = $s['list_object_policies'] ?? null;
    $this->list_outgoing_typed_links = $s['list_outgoing_typed_links'] ?? null;
    $this->list_policy_attachments = $s['list_policy_attachments'] ?? null;
    $this->lookup_policy = $s['lookup_policy'] ?? null;
  }
}

type BatchReferenceName = string;

class BatchRemoveFacetFromObject {
  public ?ObjectReference $object_reference;
  public ?SchemaFacet $schema_facet;

  public function __construct(shape(
    ?'object_reference' => ?ObjectReference,
    ?'schema_facet' => ?SchemaFacet,
  ) $s = shape()) {
    $this->object_reference = $s['object_reference'] ?? null;
    $this->schema_facet = $s['schema_facet'] ?? null;
  }
}

class BatchRemoveFacetFromObjectResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BatchUpdateLinkAttributes {
  public ?LinkAttributeUpdateList $attribute_updates;
  public ?TypedLinkSpecifier $typed_link_specifier;

  public function __construct(shape(
    ?'attribute_updates' => ?LinkAttributeUpdateList,
    ?'typed_link_specifier' => ?TypedLinkSpecifier,
  ) $s = shape()) {
    $this->attribute_updates = $s['attribute_updates'] ?? vec[];
    $this->typed_link_specifier = $s['typed_link_specifier'] ?? null;
  }
}

class BatchUpdateLinkAttributesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BatchUpdateObjectAttributes {
  public ?ObjectAttributeUpdateList $attribute_updates;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'attribute_updates' => ?ObjectAttributeUpdateList,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->attribute_updates = $s['attribute_updates'] ?? vec[];
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class BatchUpdateObjectAttributesResponse {
  public ?ObjectIdentifier $object_identifier;

  public function __construct(shape(
    ?'object_identifier' => ?ObjectIdentifier,
  ) $s = shape()) {
    $this->object_identifier = $s['object_identifier'] ?? '';
  }
}

class BatchWriteException {
  public ?BatchOperationIndex $index;
  public ?ExceptionMessage $message;
  public ?BatchWriteExceptionType $type;

  public function __construct(shape(
    ?'index' => ?BatchOperationIndex,
    ?'message' => ?ExceptionMessage,
    ?'type' => ?BatchWriteExceptionType,
  ) $s = shape()) {
    $this->index = $s['index'] ?? 0;
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type BatchWriteExceptionType = string;

class BatchWriteOperation {
  public ?BatchAddFacetToObject $add_facet_to_object;
  public ?BatchAttachObject $attach_object;
  public ?BatchAttachPolicy $attach_policy;
  public ?BatchAttachToIndex $attach_to_index;
  public ?BatchAttachTypedLink $attach_typed_link;
  public ?BatchCreateIndex $create_index;
  public ?BatchCreateObject $create_object;
  public ?BatchDeleteObject $delete_object;
  public ?BatchDetachFromIndex $detach_from_index;
  public ?BatchDetachObject $detach_object;
  public ?BatchDetachPolicy $detach_policy;
  public ?BatchDetachTypedLink $detach_typed_link;
  public ?BatchRemoveFacetFromObject $remove_facet_from_object;
  public ?BatchUpdateLinkAttributes $update_link_attributes;
  public ?BatchUpdateObjectAttributes $update_object_attributes;

  public function __construct(shape(
    ?'add_facet_to_object' => ?BatchAddFacetToObject,
    ?'attach_object' => ?BatchAttachObject,
    ?'attach_policy' => ?BatchAttachPolicy,
    ?'attach_to_index' => ?BatchAttachToIndex,
    ?'attach_typed_link' => ?BatchAttachTypedLink,
    ?'create_index' => ?BatchCreateIndex,
    ?'create_object' => ?BatchCreateObject,
    ?'delete_object' => ?BatchDeleteObject,
    ?'detach_from_index' => ?BatchDetachFromIndex,
    ?'detach_object' => ?BatchDetachObject,
    ?'detach_policy' => ?BatchDetachPolicy,
    ?'detach_typed_link' => ?BatchDetachTypedLink,
    ?'remove_facet_from_object' => ?BatchRemoveFacetFromObject,
    ?'update_link_attributes' => ?BatchUpdateLinkAttributes,
    ?'update_object_attributes' => ?BatchUpdateObjectAttributes,
  ) $s = shape()) {
    $this->add_facet_to_object = $s['add_facet_to_object'] ?? null;
    $this->attach_object = $s['attach_object'] ?? null;
    $this->attach_policy = $s['attach_policy'] ?? null;
    $this->attach_to_index = $s['attach_to_index'] ?? null;
    $this->attach_typed_link = $s['attach_typed_link'] ?? null;
    $this->create_index = $s['create_index'] ?? null;
    $this->create_object = $s['create_object'] ?? null;
    $this->delete_object = $s['delete_object'] ?? null;
    $this->detach_from_index = $s['detach_from_index'] ?? null;
    $this->detach_object = $s['detach_object'] ?? null;
    $this->detach_policy = $s['detach_policy'] ?? null;
    $this->detach_typed_link = $s['detach_typed_link'] ?? null;
    $this->remove_facet_from_object = $s['remove_facet_from_object'] ?? null;
    $this->update_link_attributes = $s['update_link_attributes'] ?? null;
    $this->update_object_attributes = $s['update_object_attributes'] ?? null;
  }
}

type BatchWriteOperationList = vec<BatchWriteOperation>;

class BatchWriteOperationResponse {
  public ?BatchAddFacetToObjectResponse $add_facet_to_object;
  public ?BatchAttachObjectResponse $attach_object;
  public ?BatchAttachPolicyResponse $attach_policy;
  public ?BatchAttachToIndexResponse $attach_to_index;
  public ?BatchAttachTypedLinkResponse $attach_typed_link;
  public ?BatchCreateIndexResponse $create_index;
  public ?BatchCreateObjectResponse $create_object;
  public ?BatchDeleteObjectResponse $delete_object;
  public ?BatchDetachFromIndexResponse $detach_from_index;
  public ?BatchDetachObjectResponse $detach_object;
  public ?BatchDetachPolicyResponse $detach_policy;
  public ?BatchDetachTypedLinkResponse $detach_typed_link;
  public ?BatchRemoveFacetFromObjectResponse $remove_facet_from_object;
  public ?BatchUpdateLinkAttributesResponse $update_link_attributes;
  public ?BatchUpdateObjectAttributesResponse $update_object_attributes;

  public function __construct(shape(
    ?'add_facet_to_object' => ?BatchAddFacetToObjectResponse,
    ?'attach_object' => ?BatchAttachObjectResponse,
    ?'attach_policy' => ?BatchAttachPolicyResponse,
    ?'attach_to_index' => ?BatchAttachToIndexResponse,
    ?'attach_typed_link' => ?BatchAttachTypedLinkResponse,
    ?'create_index' => ?BatchCreateIndexResponse,
    ?'create_object' => ?BatchCreateObjectResponse,
    ?'delete_object' => ?BatchDeleteObjectResponse,
    ?'detach_from_index' => ?BatchDetachFromIndexResponse,
    ?'detach_object' => ?BatchDetachObjectResponse,
    ?'detach_policy' => ?BatchDetachPolicyResponse,
    ?'detach_typed_link' => ?BatchDetachTypedLinkResponse,
    ?'remove_facet_from_object' => ?BatchRemoveFacetFromObjectResponse,
    ?'update_link_attributes' => ?BatchUpdateLinkAttributesResponse,
    ?'update_object_attributes' => ?BatchUpdateObjectAttributesResponse,
  ) $s = shape()) {
    $this->add_facet_to_object = $s['add_facet_to_object'] ?? null;
    $this->attach_object = $s['attach_object'] ?? null;
    $this->attach_policy = $s['attach_policy'] ?? null;
    $this->attach_to_index = $s['attach_to_index'] ?? null;
    $this->attach_typed_link = $s['attach_typed_link'] ?? null;
    $this->create_index = $s['create_index'] ?? null;
    $this->create_object = $s['create_object'] ?? null;
    $this->delete_object = $s['delete_object'] ?? null;
    $this->detach_from_index = $s['detach_from_index'] ?? null;
    $this->detach_object = $s['detach_object'] ?? null;
    $this->detach_policy = $s['detach_policy'] ?? null;
    $this->detach_typed_link = $s['detach_typed_link'] ?? null;
    $this->remove_facet_from_object = $s['remove_facet_from_object'] ?? null;
    $this->update_link_attributes = $s['update_link_attributes'] ?? null;
    $this->update_object_attributes = $s['update_object_attributes'] ?? null;
  }
}

type BatchWriteOperationResponseList = vec<BatchWriteOperationResponse>;

class BatchWriteRequest {
  public ?Arn $directory_arn;
  public ?BatchWriteOperationList $operations;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'operations' => ?BatchWriteOperationList,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->operations = $s['operations'] ?? vec[];
  }
}

class BatchWriteResponse {
  public ?BatchWriteOperationResponseList $responses;

  public function __construct(shape(
    ?'responses' => ?BatchWriteOperationResponseList,
  ) $s = shape()) {
    $this->responses = $s['responses'] ?? vec[];
  }
}

type BinaryAttributeValue = string;

type Bool = bool;

type BooleanAttributeValue = bool;

class CannotListParentOfRootException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ConsistencyLevel = string;

class CreateDirectoryRequest {
  public ?DirectoryName $name;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'name' => ?DirectoryName,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class CreateDirectoryResponse {
  public ?Arn $applied_schema_arn;
  public ?DirectoryArn $directory_arn;
  public ?DirectoryName $name;
  public ?ObjectIdentifier $object_identifier;

  public function __construct(shape(
    ?'applied_schema_arn' => ?Arn,
    ?'directory_arn' => ?DirectoryArn,
    ?'name' => ?DirectoryName,
    ?'object_identifier' => ?ObjectIdentifier,
  ) $s = shape()) {
    $this->applied_schema_arn = $s['applied_schema_arn'] ?? '';
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->object_identifier = $s['object_identifier'] ?? '';
  }
}

class CreateFacetRequest {
  public ?FacetAttributeList $attributes;
  public ?FacetStyle $facet_style;
  public ?FacetName $name;
  public ?ObjectType $object_type;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'attributes' => ?FacetAttributeList,
    ?'facet_style' => ?FacetStyle,
    ?'name' => ?FacetName,
    ?'object_type' => ?ObjectType,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->facet_style = $s['facet_style'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->object_type = $s['object_type'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class CreateFacetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateIndexRequest {
  public ?Arn $directory_arn;
  public ?Bool $is_unique;
  public ?LinkName $link_name;
  public ?AttributeKeyList $ordered_indexed_attribute_list;
  public ?ObjectReference $parent_reference;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'is_unique' => ?Bool,
    ?'link_name' => ?LinkName,
    ?'ordered_indexed_attribute_list' => ?AttributeKeyList,
    ?'parent_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->is_unique = $s['is_unique'] ?? false;
    $this->link_name = $s['link_name'] ?? '';
    $this->ordered_indexed_attribute_list = $s['ordered_indexed_attribute_list'] ?? vec[];
    $this->parent_reference = $s['parent_reference'] ?? null;
  }
}

class CreateIndexResponse {
  public ?ObjectIdentifier $object_identifier;

  public function __construct(shape(
    ?'object_identifier' => ?ObjectIdentifier,
  ) $s = shape()) {
    $this->object_identifier = $s['object_identifier'] ?? '';
  }
}

class CreateObjectRequest {
  public ?Arn $directory_arn;
  public ?LinkName $link_name;
  public ?AttributeKeyAndValueList $object_attribute_list;
  public ?ObjectReference $parent_reference;
  public ?SchemaFacetList $schema_facets;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'link_name' => ?LinkName,
    ?'object_attribute_list' => ?AttributeKeyAndValueList,
    ?'parent_reference' => ?ObjectReference,
    ?'schema_facets' => ?SchemaFacetList,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->link_name = $s['link_name'] ?? '';
    $this->object_attribute_list = $s['object_attribute_list'] ?? vec[];
    $this->parent_reference = $s['parent_reference'] ?? null;
    $this->schema_facets = $s['schema_facets'] ?? vec[];
  }
}

class CreateObjectResponse {
  public ?ObjectIdentifier $object_identifier;

  public function __construct(shape(
    ?'object_identifier' => ?ObjectIdentifier,
  ) $s = shape()) {
    $this->object_identifier = $s['object_identifier'] ?? '';
  }
}

class CreateSchemaRequest {
  public ?SchemaName $name;

  public function __construct(shape(
    ?'name' => ?SchemaName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class CreateSchemaResponse {
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class CreateTypedLinkFacetRequest {
  public ?TypedLinkFacet $facet;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'facet' => ?TypedLinkFacet,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->facet = $s['facet'] ?? null;
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class CreateTypedLinkFacetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Date = int;

type DatetimeAttributeValue = int;

class DeleteDirectoryRequest {
  public ?Arn $directory_arn;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
  }
}

class DeleteDirectoryResponse {
  public ?Arn $directory_arn;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
  }
}

class DeleteFacetRequest {
  public ?FacetName $name;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'name' => ?FacetName,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class DeleteFacetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteObjectRequest {
  public ?Arn $directory_arn;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class DeleteObjectResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSchemaRequest {
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class DeleteSchemaResponse {
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class DeleteTypedLinkFacetRequest {
  public ?TypedLinkName $name;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'name' => ?TypedLinkName,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class DeleteTypedLinkFacetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DetachFromIndexRequest {
  public ?Arn $directory_arn;
  public ?ObjectReference $index_reference;
  public ?ObjectReference $target_reference;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'index_reference' => ?ObjectReference,
    ?'target_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->index_reference = $s['index_reference'] ?? null;
    $this->target_reference = $s['target_reference'] ?? null;
  }
}

class DetachFromIndexResponse {
  public ?ObjectIdentifier $detached_object_identifier;

  public function __construct(shape(
    ?'detached_object_identifier' => ?ObjectIdentifier,
  ) $s = shape()) {
    $this->detached_object_identifier = $s['detached_object_identifier'] ?? '';
  }
}

class DetachObjectRequest {
  public ?Arn $directory_arn;
  public ?LinkName $link_name;
  public ?ObjectReference $parent_reference;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'link_name' => ?LinkName,
    ?'parent_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->link_name = $s['link_name'] ?? '';
    $this->parent_reference = $s['parent_reference'] ?? null;
  }
}

class DetachObjectResponse {
  public ?ObjectIdentifier $detached_object_identifier;

  public function __construct(shape(
    ?'detached_object_identifier' => ?ObjectIdentifier,
  ) $s = shape()) {
    $this->detached_object_identifier = $s['detached_object_identifier'] ?? '';
  }
}

class DetachPolicyRequest {
  public ?Arn $directory_arn;
  public ?ObjectReference $object_reference;
  public ?ObjectReference $policy_reference;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'object_reference' => ?ObjectReference,
    ?'policy_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
    $this->policy_reference = $s['policy_reference'] ?? null;
  }
}

class DetachPolicyResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DetachTypedLinkRequest {
  public ?Arn $directory_arn;
  public ?TypedLinkSpecifier $typed_link_specifier;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'typed_link_specifier' => ?TypedLinkSpecifier,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->typed_link_specifier = $s['typed_link_specifier'] ?? null;
  }
}

class Directory {
  public ?Date $creation_date_time;
  public ?DirectoryArn $directory_arn;
  public ?DirectoryName $name;
  public ?DirectoryState $state;

  public function __construct(shape(
    ?'creation_date_time' => ?Date,
    ?'directory_arn' => ?DirectoryArn,
    ?'name' => ?DirectoryName,
    ?'state' => ?DirectoryState,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

class DirectoryAlreadyExistsException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type DirectoryArn = string;

class DirectoryDeletedException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type DirectoryList = vec<Directory>;

type DirectoryName = string;

class DirectoryNotDisabledException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DirectoryNotEnabledException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type DirectoryState = string;

class DisableDirectoryRequest {
  public ?Arn $directory_arn;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
  }
}

class DisableDirectoryResponse {
  public ?Arn $directory_arn;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
  }
}

class EnableDirectoryRequest {
  public ?Arn $directory_arn;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
  }
}

class EnableDirectoryResponse {
  public ?Arn $directory_arn;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
  }
}

type ExceptionMessage = string;

class Facet {
  public ?FacetStyle $facet_style;
  public ?FacetName $name;
  public ?ObjectType $object_type;

  public function __construct(shape(
    ?'facet_style' => ?FacetStyle,
    ?'name' => ?FacetName,
    ?'object_type' => ?ObjectType,
  ) $s = shape()) {
    $this->facet_style = $s['facet_style'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->object_type = $s['object_type'] ?? '';
  }
}

class FacetAlreadyExistsException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class FacetAttribute {
  public ?FacetAttributeDefinition $attribute_definition;
  public ?FacetAttributeReference $attribute_reference;
  public ?AttributeName $name;
  public ?RequiredAttributeBehavior $required_behavior;

  public function __construct(shape(
    ?'attribute_definition' => ?FacetAttributeDefinition,
    ?'attribute_reference' => ?FacetAttributeReference,
    ?'name' => ?AttributeName,
    ?'required_behavior' => ?RequiredAttributeBehavior,
  ) $s = shape()) {
    $this->attribute_definition = $s['attribute_definition'] ?? null;
    $this->attribute_reference = $s['attribute_reference'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->required_behavior = $s['required_behavior'] ?? '';
  }
}

class FacetAttributeDefinition {
  public ?TypedAttributeValue $default_value;
  public ?Bool $is_immutable;
  public ?RuleMap $rules;
  public ?FacetAttributeType $type;

  public function __construct(shape(
    ?'default_value' => ?TypedAttributeValue,
    ?'is_immutable' => ?Bool,
    ?'rules' => ?RuleMap,
    ?'type' => ?FacetAttributeType,
  ) $s = shape()) {
    $this->default_value = $s['default_value'] ?? null;
    $this->is_immutable = $s['is_immutable'] ?? false;
    $this->rules = $s['rules'] ?? dict[];
    $this->type = $s['type'] ?? '';
  }
}

type FacetAttributeList = vec<FacetAttribute>;

class FacetAttributeReference {
  public ?AttributeName $target_attribute_name;
  public ?FacetName $target_facet_name;

  public function __construct(shape(
    ?'target_attribute_name' => ?AttributeName,
    ?'target_facet_name' => ?FacetName,
  ) $s = shape()) {
    $this->target_attribute_name = $s['target_attribute_name'] ?? '';
    $this->target_facet_name = $s['target_facet_name'] ?? '';
  }
}

type FacetAttributeType = string;

class FacetAttributeUpdate {
  public ?UpdateActionType $action;
  public ?FacetAttribute $attribute;

  public function __construct(shape(
    ?'action' => ?UpdateActionType,
    ?'attribute' => ?FacetAttribute,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->attribute = $s['attribute'] ?? null;
  }
}

type FacetAttributeUpdateList = vec<FacetAttributeUpdate>;

class FacetInUseException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type FacetName = string;

type FacetNameList = vec<FacetName>;

class FacetNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type FacetStyle = string;

class FacetValidationException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class GetAppliedSchemaVersionRequest {
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class GetAppliedSchemaVersionResponse {
  public ?Arn $applied_schema_arn;

  public function __construct(shape(
    ?'applied_schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->applied_schema_arn = $s['applied_schema_arn'] ?? '';
  }
}

class GetDirectoryRequest {
  public ?DirectoryArn $directory_arn;

  public function __construct(shape(
    ?'directory_arn' => ?DirectoryArn,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
  }
}

class GetDirectoryResponse {
  public ?Directory $directory;

  public function __construct(shape(
    ?'directory' => ?Directory,
  ) $s = shape()) {
    $this->directory = $s['directory'] ?? null;
  }
}

class GetFacetRequest {
  public ?FacetName $name;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'name' => ?FacetName,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class GetFacetResponse {
  public ?Facet $facet;

  public function __construct(shape(
    ?'facet' => ?Facet,
  ) $s = shape()) {
    $this->facet = $s['facet'] ?? null;
  }
}

class GetLinkAttributesRequest {
  public ?AttributeNameList $attribute_names;
  public ?ConsistencyLevel $consistency_level;
  public ?Arn $directory_arn;
  public ?TypedLinkSpecifier $typed_link_specifier;

  public function __construct(shape(
    ?'attribute_names' => ?AttributeNameList,
    ?'consistency_level' => ?ConsistencyLevel,
    ?'directory_arn' => ?Arn,
    ?'typed_link_specifier' => ?TypedLinkSpecifier,
  ) $s = shape()) {
    $this->attribute_names = $s['attribute_names'] ?? vec[];
    $this->consistency_level = $s['consistency_level'] ?? '';
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->typed_link_specifier = $s['typed_link_specifier'] ?? null;
  }
}

class GetLinkAttributesResponse {
  public ?AttributeKeyAndValueList $attributes;

  public function __construct(shape(
    ?'attributes' => ?AttributeKeyAndValueList,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
  }
}

class GetObjectAttributesRequest {
  public ?AttributeNameList $attribute_names;
  public ?ConsistencyLevel $consistency_level;
  public ?Arn $directory_arn;
  public ?ObjectReference $object_reference;
  public ?SchemaFacet $schema_facet;

  public function __construct(shape(
    ?'attribute_names' => ?AttributeNameList,
    ?'consistency_level' => ?ConsistencyLevel,
    ?'directory_arn' => ?Arn,
    ?'object_reference' => ?ObjectReference,
    ?'schema_facet' => ?SchemaFacet,
  ) $s = shape()) {
    $this->attribute_names = $s['attribute_names'] ?? vec[];
    $this->consistency_level = $s['consistency_level'] ?? '';
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
    $this->schema_facet = $s['schema_facet'] ?? null;
  }
}

class GetObjectAttributesResponse {
  public ?AttributeKeyAndValueList $attributes;

  public function __construct(shape(
    ?'attributes' => ?AttributeKeyAndValueList,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
  }
}

class GetObjectInformationRequest {
  public ?ConsistencyLevel $consistency_level;
  public ?Arn $directory_arn;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'consistency_level' => ?ConsistencyLevel,
    ?'directory_arn' => ?Arn,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->consistency_level = $s['consistency_level'] ?? '';
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class GetObjectInformationResponse {
  public ?ObjectIdentifier $object_identifier;
  public ?SchemaFacetList $schema_facets;

  public function __construct(shape(
    ?'object_identifier' => ?ObjectIdentifier,
    ?'schema_facets' => ?SchemaFacetList,
  ) $s = shape()) {
    $this->object_identifier = $s['object_identifier'] ?? '';
    $this->schema_facets = $s['schema_facets'] ?? vec[];
  }
}

class GetSchemaAsJsonRequest {
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class GetSchemaAsJsonResponse {
  public ?SchemaJsonDocument $document;
  public ?SchemaName $name;

  public function __construct(shape(
    ?'document' => ?SchemaJsonDocument,
    ?'name' => ?SchemaName,
  ) $s = shape()) {
    $this->document = $s['document'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class GetTypedLinkFacetInformationRequest {
  public ?TypedLinkName $name;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'name' => ?TypedLinkName,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class GetTypedLinkFacetInformationResponse {
  public ?AttributeNameList $identity_attribute_order;

  public function __construct(shape(
    ?'identity_attribute_order' => ?AttributeNameList,
  ) $s = shape()) {
    $this->identity_attribute_order = $s['identity_attribute_order'] ?? vec[];
  }
}

class IncompatibleSchemaException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class IndexAttachment {
  public ?AttributeKeyAndValueList $indexed_attributes;
  public ?ObjectIdentifier $object_identifier;

  public function __construct(shape(
    ?'indexed_attributes' => ?AttributeKeyAndValueList,
    ?'object_identifier' => ?ObjectIdentifier,
  ) $s = shape()) {
    $this->indexed_attributes = $s['indexed_attributes'] ?? vec[];
    $this->object_identifier = $s['object_identifier'] ?? '';
  }
}

type IndexAttachmentList = vec<IndexAttachment>;

class IndexedAttributeMissingException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InternalServiceException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidArnException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidAttachmentException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidFacetUpdateException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidNextTokenException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidRuleException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidSchemaDocException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidTaggingRequestException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class LimitExceededException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class LinkAttributeAction {
  public ?UpdateActionType $attribute_action_type;
  public ?TypedAttributeValue $attribute_update_value;

  public function __construct(shape(
    ?'attribute_action_type' => ?UpdateActionType,
    ?'attribute_update_value' => ?TypedAttributeValue,
  ) $s = shape()) {
    $this->attribute_action_type = $s['attribute_action_type'] ?? '';
    $this->attribute_update_value = $s['attribute_update_value'] ?? null;
  }
}

class LinkAttributeUpdate {
  public ?LinkAttributeAction $attribute_action;
  public ?AttributeKey $attribute_key;

  public function __construct(shape(
    ?'attribute_action' => ?LinkAttributeAction,
    ?'attribute_key' => ?AttributeKey,
  ) $s = shape()) {
    $this->attribute_action = $s['attribute_action'] ?? null;
    $this->attribute_key = $s['attribute_key'] ?? null;
  }
}

type LinkAttributeUpdateList = vec<LinkAttributeUpdate>;

type LinkName = string;

class LinkNameAlreadyInUseException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type LinkNameToObjectIdentifierMap = dict<LinkName, ObjectIdentifier>;

class ListAppliedSchemaArnsRequest {
  public ?Arn $directory_arn;
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class ListAppliedSchemaArnsResponse {
  public ?NextToken $next_token;
  public ?Arns $schema_arns;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'schema_arns' => ?Arns,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->schema_arns = $s['schema_arns'] ?? vec[];
  }
}

class ListAttachedIndicesRequest {
  public ?ConsistencyLevel $consistency_level;
  public ?Arn $directory_arn;
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $target_reference;

  public function __construct(shape(
    ?'consistency_level' => ?ConsistencyLevel,
    ?'directory_arn' => ?Arn,
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'target_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->consistency_level = $s['consistency_level'] ?? '';
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->target_reference = $s['target_reference'] ?? null;
  }
}

class ListAttachedIndicesResponse {
  public ?IndexAttachmentList $index_attachments;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'index_attachments' => ?IndexAttachmentList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->index_attachments = $s['index_attachments'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDevelopmentSchemaArnsRequest {
  public ?NumberResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDevelopmentSchemaArnsResponse {
  public ?NextToken $next_token;
  public ?Arns $schema_arns;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'schema_arns' => ?Arns,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->schema_arns = $s['schema_arns'] ?? vec[];
  }
}

class ListDirectoriesRequest {
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?DirectoryState $state;

  public function __construct(shape(
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'state' => ?DirectoryState,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

class ListDirectoriesResponse {
  public ?DirectoryList $directories;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'directories' => ?DirectoryList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->directories = $s['directories'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFacetAttributesRequest {
  public ?NumberResults $max_results;
  public ?FacetName $name;
  public ?NextToken $next_token;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'max_results' => ?NumberResults,
    ?'name' => ?FacetName,
    ?'next_token' => ?NextToken,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class ListFacetAttributesResponse {
  public ?FacetAttributeList $attributes;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'attributes' => ?FacetAttributeList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFacetNamesRequest {
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class ListFacetNamesResponse {
  public ?FacetNameList $facet_names;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'facet_names' => ?FacetNameList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->facet_names = $s['facet_names'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListIncomingTypedLinksRequest {
  public ?ConsistencyLevel $consistency_level;
  public ?Arn $directory_arn;
  public ?TypedLinkAttributeRangeList $filter_attribute_ranges;
  public ?TypedLinkSchemaAndFacetName $filter_typed_link;
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'consistency_level' => ?ConsistencyLevel,
    ?'directory_arn' => ?Arn,
    ?'filter_attribute_ranges' => ?TypedLinkAttributeRangeList,
    ?'filter_typed_link' => ?TypedLinkSchemaAndFacetName,
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->consistency_level = $s['consistency_level'] ?? '';
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->filter_attribute_ranges = $s['filter_attribute_ranges'] ?? vec[];
    $this->filter_typed_link = $s['filter_typed_link'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class ListIncomingTypedLinksResponse {
  public ?TypedLinkSpecifierList $link_specifiers;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'link_specifiers' => ?TypedLinkSpecifierList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->link_specifiers = $s['link_specifiers'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListIndexRequest {
  public ?ConsistencyLevel $consistency_level;
  public ?Arn $directory_arn;
  public ?ObjectReference $index_reference;
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectAttributeRangeList $ranges_on_indexed_values;

  public function __construct(shape(
    ?'consistency_level' => ?ConsistencyLevel,
    ?'directory_arn' => ?Arn,
    ?'index_reference' => ?ObjectReference,
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'ranges_on_indexed_values' => ?ObjectAttributeRangeList,
  ) $s = shape()) {
    $this->consistency_level = $s['consistency_level'] ?? '';
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->index_reference = $s['index_reference'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->ranges_on_indexed_values = $s['ranges_on_indexed_values'] ?? vec[];
  }
}

class ListIndexResponse {
  public ?IndexAttachmentList $index_attachments;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'index_attachments' => ?IndexAttachmentList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->index_attachments = $s['index_attachments'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListManagedSchemaArnsRequest {
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class ListManagedSchemaArnsResponse {
  public ?NextToken $next_token;
  public ?Arns $schema_arns;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'schema_arns' => ?Arns,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->schema_arns = $s['schema_arns'] ?? vec[];
  }
}

class ListObjectAttributesRequest {
  public ?ConsistencyLevel $consistency_level;
  public ?Arn $directory_arn;
  public ?SchemaFacet $facet_filter;
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'consistency_level' => ?ConsistencyLevel,
    ?'directory_arn' => ?Arn,
    ?'facet_filter' => ?SchemaFacet,
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->consistency_level = $s['consistency_level'] ?? '';
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->facet_filter = $s['facet_filter'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class ListObjectAttributesResponse {
  public ?AttributeKeyAndValueList $attributes;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'attributes' => ?AttributeKeyAndValueList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListObjectChildrenRequest {
  public ?ConsistencyLevel $consistency_level;
  public ?Arn $directory_arn;
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'consistency_level' => ?ConsistencyLevel,
    ?'directory_arn' => ?Arn,
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->consistency_level = $s['consistency_level'] ?? '';
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class ListObjectChildrenResponse {
  public ?LinkNameToObjectIdentifierMap $children;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'children' => ?LinkNameToObjectIdentifierMap,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->children = $s['children'] ?? dict[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListObjectParentPathsRequest {
  public ?Arn $directory_arn;
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class ListObjectParentPathsResponse {
  public ?NextToken $next_token;
  public ?PathToObjectIdentifiersList $path_to_object_identifiers_list;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'path_to_object_identifiers_list' => ?PathToObjectIdentifiersList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->path_to_object_identifiers_list = $s['path_to_object_identifiers_list'] ?? vec[];
  }
}

class ListObjectParentsRequest {
  public ?ConsistencyLevel $consistency_level;
  public ?Arn $directory_arn;
  public ?Bool $include_all_links_to_each_parent;
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'consistency_level' => ?ConsistencyLevel,
    ?'directory_arn' => ?Arn,
    ?'include_all_links_to_each_parent' => ?Bool,
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->consistency_level = $s['consistency_level'] ?? '';
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->include_all_links_to_each_parent = $s['include_all_links_to_each_parent'] ?? false;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class ListObjectParentsResponse {
  public ?NextToken $next_token;
  public ?ObjectIdentifierAndLinkNameList $parent_links;
  public ?ObjectIdentifierToLinkNameMap $parents;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'parent_links' => ?ObjectIdentifierAndLinkNameList,
    ?'parents' => ?ObjectIdentifierToLinkNameMap,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->parent_links = $s['parent_links'] ?? vec[];
    $this->parents = $s['parents'] ?? dict[];
  }
}

class ListObjectPoliciesRequest {
  public ?ConsistencyLevel $consistency_level;
  public ?Arn $directory_arn;
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'consistency_level' => ?ConsistencyLevel,
    ?'directory_arn' => ?Arn,
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->consistency_level = $s['consistency_level'] ?? '';
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class ListObjectPoliciesResponse {
  public ?ObjectIdentifierList $attached_policy_ids;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'attached_policy_ids' => ?ObjectIdentifierList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->attached_policy_ids = $s['attached_policy_ids'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListOutgoingTypedLinksRequest {
  public ?ConsistencyLevel $consistency_level;
  public ?Arn $directory_arn;
  public ?TypedLinkAttributeRangeList $filter_attribute_ranges;
  public ?TypedLinkSchemaAndFacetName $filter_typed_link;
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'consistency_level' => ?ConsistencyLevel,
    ?'directory_arn' => ?Arn,
    ?'filter_attribute_ranges' => ?TypedLinkAttributeRangeList,
    ?'filter_typed_link' => ?TypedLinkSchemaAndFacetName,
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->consistency_level = $s['consistency_level'] ?? '';
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->filter_attribute_ranges = $s['filter_attribute_ranges'] ?? vec[];
    $this->filter_typed_link = $s['filter_typed_link'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class ListOutgoingTypedLinksResponse {
  public ?NextToken $next_token;
  public ?TypedLinkSpecifierList $typed_link_specifiers;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'typed_link_specifiers' => ?TypedLinkSpecifierList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->typed_link_specifiers = $s['typed_link_specifiers'] ?? vec[];
  }
}

class ListPolicyAttachmentsRequest {
  public ?ConsistencyLevel $consistency_level;
  public ?Arn $directory_arn;
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $policy_reference;

  public function __construct(shape(
    ?'consistency_level' => ?ConsistencyLevel,
    ?'directory_arn' => ?Arn,
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'policy_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->consistency_level = $s['consistency_level'] ?? '';
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->policy_reference = $s['policy_reference'] ?? null;
  }
}

class ListPolicyAttachmentsResponse {
  public ?NextToken $next_token;
  public ?ObjectIdentifierList $object_identifiers;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'object_identifiers' => ?ObjectIdentifierList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->object_identifiers = $s['object_identifiers'] ?? vec[];
  }
}

class ListPublishedSchemaArnsRequest {
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class ListPublishedSchemaArnsResponse {
  public ?NextToken $next_token;
  public ?Arns $schema_arns;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'schema_arns' => ?Arns,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->schema_arns = $s['schema_arns'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public ?TagsNumberResults $max_results;
  public ?NextToken $next_token;
  public ?Arn $resource_arn;

  public function __construct(shape(
    ?'max_results' => ?TagsNumberResults,
    ?'next_token' => ?NextToken,
    ?'resource_arn' => ?Arn,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?NextToken $next_token;
  public ?TagList $tags;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ListTypedLinkFacetAttributesRequest {
  public ?NumberResults $max_results;
  public ?TypedLinkName $name;
  public ?NextToken $next_token;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'max_results' => ?NumberResults,
    ?'name' => ?TypedLinkName,
    ?'next_token' => ?NextToken,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class ListTypedLinkFacetAttributesResponse {
  public ?TypedLinkAttributeDefinitionList $attributes;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'attributes' => ?TypedLinkAttributeDefinitionList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTypedLinkFacetNamesRequest {
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class ListTypedLinkFacetNamesResponse {
  public ?TypedLinkNameList $facet_names;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'facet_names' => ?TypedLinkNameList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->facet_names = $s['facet_names'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class LookupPolicyRequest {
  public ?Arn $directory_arn;
  public ?NumberResults $max_results;
  public ?NextToken $next_token;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'max_results' => ?NumberResults,
    ?'next_token' => ?NextToken,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class LookupPolicyResponse {
  public ?NextToken $next_token;
  public ?PolicyToPathList $policy_to_path_list;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'policy_to_path_list' => ?PolicyToPathList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->policy_to_path_list = $s['policy_to_path_list'] ?? vec[];
  }
}

type NextToken = string;

class NotIndexException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class NotNodeException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class NotPolicyException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type NumberAttributeValue = string;

type NumberResults = int;

class ObjectAlreadyDetachedException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ObjectAttributeAction {
  public ?UpdateActionType $object_attribute_action_type;
  public ?TypedAttributeValue $object_attribute_update_value;

  public function __construct(shape(
    ?'object_attribute_action_type' => ?UpdateActionType,
    ?'object_attribute_update_value' => ?TypedAttributeValue,
  ) $s = shape()) {
    $this->object_attribute_action_type = $s['object_attribute_action_type'] ?? '';
    $this->object_attribute_update_value = $s['object_attribute_update_value'] ?? null;
  }
}

class ObjectAttributeRange {
  public ?AttributeKey $attribute_key;
  public ?TypedAttributeValueRange $range;

  public function __construct(shape(
    ?'attribute_key' => ?AttributeKey,
    ?'range' => ?TypedAttributeValueRange,
  ) $s = shape()) {
    $this->attribute_key = $s['attribute_key'] ?? null;
    $this->range = $s['range'] ?? null;
  }
}

type ObjectAttributeRangeList = vec<ObjectAttributeRange>;

class ObjectAttributeUpdate {
  public ?ObjectAttributeAction $object_attribute_action;
  public ?AttributeKey $object_attribute_key;

  public function __construct(shape(
    ?'object_attribute_action' => ?ObjectAttributeAction,
    ?'object_attribute_key' => ?AttributeKey,
  ) $s = shape()) {
    $this->object_attribute_action = $s['object_attribute_action'] ?? null;
    $this->object_attribute_key = $s['object_attribute_key'] ?? null;
  }
}

type ObjectAttributeUpdateList = vec<ObjectAttributeUpdate>;

type ObjectIdentifier = string;

type ObjectIdentifierAndLinkNameList = vec<ObjectIdentifierAndLinkNameTuple>;

class ObjectIdentifierAndLinkNameTuple {
  public ?LinkName $link_name;
  public ?ObjectIdentifier $object_identifier;

  public function __construct(shape(
    ?'link_name' => ?LinkName,
    ?'object_identifier' => ?ObjectIdentifier,
  ) $s = shape()) {
    $this->link_name = $s['link_name'] ?? '';
    $this->object_identifier = $s['object_identifier'] ?? '';
  }
}

type ObjectIdentifierList = vec<ObjectIdentifier>;

type ObjectIdentifierToLinkNameMap = dict<ObjectIdentifier, LinkName>;

class ObjectNotDetachedException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ObjectReference {
  public ?SelectorObjectReference $selector;

  public function __construct(shape(
    ?'selector' => ?SelectorObjectReference,
  ) $s = shape()) {
    $this->selector = $s['selector'] ?? '';
  }
}

type ObjectType = string;

type PathString = string;

class PathToObjectIdentifiers {
  public ?ObjectIdentifierList $object_identifiers;
  public ?PathString $path;

  public function __construct(shape(
    ?'object_identifiers' => ?ObjectIdentifierList,
    ?'path' => ?PathString,
  ) $s = shape()) {
    $this->object_identifiers = $s['object_identifiers'] ?? vec[];
    $this->path = $s['path'] ?? '';
  }
}

type PathToObjectIdentifiersList = vec<PathToObjectIdentifiers>;

class PolicyAttachment {
  public ?ObjectIdentifier $object_identifier;
  public ?ObjectIdentifier $policy_id;
  public ?PolicyType $policy_type;

  public function __construct(shape(
    ?'object_identifier' => ?ObjectIdentifier,
    ?'policy_id' => ?ObjectIdentifier,
    ?'policy_type' => ?PolicyType,
  ) $s = shape()) {
    $this->object_identifier = $s['object_identifier'] ?? '';
    $this->policy_id = $s['policy_id'] ?? '';
    $this->policy_type = $s['policy_type'] ?? '';
  }
}

type PolicyAttachmentList = vec<PolicyAttachment>;

class PolicyToPath {
  public ?PathString $path;
  public ?PolicyAttachmentList $policies;

  public function __construct(shape(
    ?'path' => ?PathString,
    ?'policies' => ?PolicyAttachmentList,
  ) $s = shape()) {
    $this->path = $s['path'] ?? '';
    $this->policies = $s['policies'] ?? vec[];
  }
}

type PolicyToPathList = vec<PolicyToPath>;

type PolicyType = string;

class PublishSchemaRequest {
  public ?Arn $development_schema_arn;
  public ?Version $minor_version;
  public ?SchemaName $name;
  public ?Version $version;

  public function __construct(shape(
    ?'development_schema_arn' => ?Arn,
    ?'minor_version' => ?Version,
    ?'name' => ?SchemaName,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->development_schema_arn = $s['development_schema_arn'] ?? '';
    $this->minor_version = $s['minor_version'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class PublishSchemaResponse {
  public ?Arn $published_schema_arn;

  public function __construct(shape(
    ?'published_schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->published_schema_arn = $s['published_schema_arn'] ?? '';
  }
}

class PutSchemaFromJsonRequest {
  public ?SchemaJsonDocument $document;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'document' => ?SchemaJsonDocument,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->document = $s['document'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class PutSchemaFromJsonResponse {
  public ?Arn $arn;

  public function __construct(shape(
    ?'arn' => ?Arn,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

type RangeMode = string;

class RemoveFacetFromObjectRequest {
  public ?Arn $directory_arn;
  public ?ObjectReference $object_reference;
  public ?SchemaFacet $schema_facet;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'object_reference' => ?ObjectReference,
    ?'schema_facet' => ?SchemaFacet,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
    $this->schema_facet = $s['schema_facet'] ?? null;
  }
}

class RemoveFacetFromObjectResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RequiredAttributeBehavior = string;

class ResourceNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class RetryableConflictException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Rule {
  public ?RuleParameterMap $parameters;
  public ?RuleType $type;

  public function __construct(shape(
    ?'parameters' => ?RuleParameterMap,
    ?'type' => ?RuleType,
  ) $s = shape()) {
    $this->parameters = $s['parameters'] ?? dict[];
    $this->type = $s['type'] ?? '';
  }
}

type RuleKey = string;

type RuleMap = dict<RuleKey, Rule>;

type RuleParameterKey = string;

type RuleParameterMap = dict<RuleParameterKey, RuleParameterValue>;

type RuleParameterValue = string;

type RuleType = string;

class SchemaAlreadyExistsException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class SchemaAlreadyPublishedException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class SchemaFacet {
  public ?FacetName $facet_name;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'facet_name' => ?FacetName,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->facet_name = $s['facet_name'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

type SchemaFacetList = vec<SchemaFacet>;

type SchemaJsonDocument = string;

type SchemaName = string;

type SelectorObjectReference = string;

class StillContainsLinksException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type StringAttributeValue = string;

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

type TagValue = string;

type TagsNumberResults = int;

class TypedAttributeValue {
  public ?BinaryAttributeValue $binary_value;
  public ?BooleanAttributeValue $boolean_value;
  public ?DatetimeAttributeValue $datetime_value;
  public ?NumberAttributeValue $number_value;
  public ?StringAttributeValue $string_value;

  public function __construct(shape(
    ?'binary_value' => ?BinaryAttributeValue,
    ?'boolean_value' => ?BooleanAttributeValue,
    ?'datetime_value' => ?DatetimeAttributeValue,
    ?'number_value' => ?NumberAttributeValue,
    ?'string_value' => ?StringAttributeValue,
  ) $s = shape()) {
    $this->binary_value = $s['binary_value'] ?? '';
    $this->boolean_value = $s['boolean_value'] ?? false;
    $this->datetime_value = $s['datetime_value'] ?? 0;
    $this->number_value = $s['number_value'] ?? '';
    $this->string_value = $s['string_value'] ?? '';
  }
}

class TypedAttributeValueRange {
  public ?RangeMode $end_mode;
  public ?TypedAttributeValue $end_value;
  public ?RangeMode $start_mode;
  public ?TypedAttributeValue $start_value;

  public function __construct(shape(
    ?'end_mode' => ?RangeMode,
    ?'end_value' => ?TypedAttributeValue,
    ?'start_mode' => ?RangeMode,
    ?'start_value' => ?TypedAttributeValue,
  ) $s = shape()) {
    $this->end_mode = $s['end_mode'] ?? '';
    $this->end_value = $s['end_value'] ?? null;
    $this->start_mode = $s['start_mode'] ?? '';
    $this->start_value = $s['start_value'] ?? null;
  }
}

class TypedLinkAttributeDefinition {
  public ?TypedAttributeValue $default_value;
  public ?Bool $is_immutable;
  public ?AttributeName $name;
  public ?RequiredAttributeBehavior $required_behavior;
  public ?RuleMap $rules;
  public ?FacetAttributeType $type;

  public function __construct(shape(
    ?'default_value' => ?TypedAttributeValue,
    ?'is_immutable' => ?Bool,
    ?'name' => ?AttributeName,
    ?'required_behavior' => ?RequiredAttributeBehavior,
    ?'rules' => ?RuleMap,
    ?'type' => ?FacetAttributeType,
  ) $s = shape()) {
    $this->default_value = $s['default_value'] ?? null;
    $this->is_immutable = $s['is_immutable'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->required_behavior = $s['required_behavior'] ?? '';
    $this->rules = $s['rules'] ?? dict[];
    $this->type = $s['type'] ?? '';
  }
}

type TypedLinkAttributeDefinitionList = vec<TypedLinkAttributeDefinition>;

class TypedLinkAttributeRange {
  public ?AttributeName $attribute_name;
  public ?TypedAttributeValueRange $range;

  public function __construct(shape(
    ?'attribute_name' => ?AttributeName,
    ?'range' => ?TypedAttributeValueRange,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->range = $s['range'] ?? null;
  }
}

type TypedLinkAttributeRangeList = vec<TypedLinkAttributeRange>;

class TypedLinkFacet {
  public ?TypedLinkAttributeDefinitionList $attributes;
  public ?AttributeNameList $identity_attribute_order;
  public ?TypedLinkName $name;

  public function __construct(shape(
    ?'attributes' => ?TypedLinkAttributeDefinitionList,
    ?'identity_attribute_order' => ?AttributeNameList,
    ?'name' => ?TypedLinkName,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->identity_attribute_order = $s['identity_attribute_order'] ?? vec[];
    $this->name = $s['name'] ?? '';
  }
}

class TypedLinkFacetAttributeUpdate {
  public ?UpdateActionType $action;
  public ?TypedLinkAttributeDefinition $attribute;

  public function __construct(shape(
    ?'action' => ?UpdateActionType,
    ?'attribute' => ?TypedLinkAttributeDefinition,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->attribute = $s['attribute'] ?? null;
  }
}

type TypedLinkFacetAttributeUpdateList = vec<TypedLinkFacetAttributeUpdate>;

type TypedLinkName = string;

type TypedLinkNameList = vec<TypedLinkName>;

class TypedLinkSchemaAndFacetName {
  public ?Arn $schema_arn;
  public ?TypedLinkName $typed_link_name;

  public function __construct(shape(
    ?'schema_arn' => ?Arn,
    ?'typed_link_name' => ?TypedLinkName,
  ) $s = shape()) {
    $this->schema_arn = $s['schema_arn'] ?? '';
    $this->typed_link_name = $s['typed_link_name'] ?? '';
  }
}

class TypedLinkSpecifier {
  public ?AttributeNameAndValueList $identity_attribute_values;
  public ?ObjectReference $source_object_reference;
  public ?ObjectReference $target_object_reference;
  public ?TypedLinkSchemaAndFacetName $typed_link_facet;

  public function __construct(shape(
    ?'identity_attribute_values' => ?AttributeNameAndValueList,
    ?'source_object_reference' => ?ObjectReference,
    ?'target_object_reference' => ?ObjectReference,
    ?'typed_link_facet' => ?TypedLinkSchemaAndFacetName,
  ) $s = shape()) {
    $this->identity_attribute_values = $s['identity_attribute_values'] ?? vec[];
    $this->source_object_reference = $s['source_object_reference'] ?? null;
    $this->target_object_reference = $s['target_object_reference'] ?? null;
    $this->typed_link_facet = $s['typed_link_facet'] ?? null;
  }
}

type TypedLinkSpecifierList = vec<TypedLinkSpecifier>;

class UnsupportedIndexTypeException {
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

type UpdateActionType = string;

class UpdateFacetRequest {
  public ?FacetAttributeUpdateList $attribute_updates;
  public ?FacetName $name;
  public ?ObjectType $object_type;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'attribute_updates' => ?FacetAttributeUpdateList,
    ?'name' => ?FacetName,
    ?'object_type' => ?ObjectType,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->attribute_updates = $s['attribute_updates'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->object_type = $s['object_type'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class UpdateFacetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateLinkAttributesRequest {
  public ?LinkAttributeUpdateList $attribute_updates;
  public ?Arn $directory_arn;
  public ?TypedLinkSpecifier $typed_link_specifier;

  public function __construct(shape(
    ?'attribute_updates' => ?LinkAttributeUpdateList,
    ?'directory_arn' => ?Arn,
    ?'typed_link_specifier' => ?TypedLinkSpecifier,
  ) $s = shape()) {
    $this->attribute_updates = $s['attribute_updates'] ?? vec[];
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->typed_link_specifier = $s['typed_link_specifier'] ?? null;
  }
}

class UpdateLinkAttributesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateObjectAttributesRequest {
  public ?ObjectAttributeUpdateList $attribute_updates;
  public ?Arn $directory_arn;
  public ?ObjectReference $object_reference;

  public function __construct(shape(
    ?'attribute_updates' => ?ObjectAttributeUpdateList,
    ?'directory_arn' => ?Arn,
    ?'object_reference' => ?ObjectReference,
  ) $s = shape()) {
    $this->attribute_updates = $s['attribute_updates'] ?? vec[];
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->object_reference = $s['object_reference'] ?? null;
  }
}

class UpdateObjectAttributesResponse {
  public ?ObjectIdentifier $object_identifier;

  public function __construct(shape(
    ?'object_identifier' => ?ObjectIdentifier,
  ) $s = shape()) {
    $this->object_identifier = $s['object_identifier'] ?? '';
  }
}

class UpdateSchemaRequest {
  public ?SchemaName $name;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'name' => ?SchemaName,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class UpdateSchemaResponse {
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class UpdateTypedLinkFacetRequest {
  public ?TypedLinkFacetAttributeUpdateList $attribute_updates;
  public ?AttributeNameList $identity_attribute_order;
  public ?TypedLinkName $name;
  public ?Arn $schema_arn;

  public function __construct(shape(
    ?'attribute_updates' => ?TypedLinkFacetAttributeUpdateList,
    ?'identity_attribute_order' => ?AttributeNameList,
    ?'name' => ?TypedLinkName,
    ?'schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->attribute_updates = $s['attribute_updates'] ?? vec[];
    $this->identity_attribute_order = $s['identity_attribute_order'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->schema_arn = $s['schema_arn'] ?? '';
  }
}

class UpdateTypedLinkFacetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpgradeAppliedSchemaRequest {
  public ?Arn $directory_arn;
  public ?Bool $dry_run;
  public ?Arn $published_schema_arn;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'dry_run' => ?Bool,
    ?'published_schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->published_schema_arn = $s['published_schema_arn'] ?? '';
  }
}

class UpgradeAppliedSchemaResponse {
  public ?Arn $directory_arn;
  public ?Arn $upgraded_schema_arn;

  public function __construct(shape(
    ?'directory_arn' => ?Arn,
    ?'upgraded_schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->directory_arn = $s['directory_arn'] ?? '';
    $this->upgraded_schema_arn = $s['upgraded_schema_arn'] ?? '';
  }
}

class UpgradePublishedSchemaRequest {
  public ?Arn $development_schema_arn;
  public ?Bool $dry_run;
  public ?Version $minor_version;
  public ?Arn $published_schema_arn;

  public function __construct(shape(
    ?'development_schema_arn' => ?Arn,
    ?'dry_run' => ?Bool,
    ?'minor_version' => ?Version,
    ?'published_schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->development_schema_arn = $s['development_schema_arn'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->minor_version = $s['minor_version'] ?? '';
    $this->published_schema_arn = $s['published_schema_arn'] ?? '';
  }
}

class UpgradePublishedSchemaResponse {
  public ?Arn $upgraded_schema_arn;

  public function __construct(shape(
    ?'upgraded_schema_arn' => ?Arn,
  ) $s = shape()) {
    $this->upgraded_schema_arn = $s['upgraded_schema_arn'] ?? '';
  }
}

class ValidationException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Version = string;


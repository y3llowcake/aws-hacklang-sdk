<?hh // strict
namespace slack\aws\servicecatalog;

interface ServiceCatalog {
  public function AcceptPortfolioShare(AcceptPortfolioShareInput $in): Awaitable<\Errors\Result<AcceptPortfolioShareOutput>>;
  public function AssociateBudgetWithResource(AssociateBudgetWithResourceInput $in): Awaitable<\Errors\Result<AssociateBudgetWithResourceOutput>>;
  public function AssociatePrincipalWithPortfolio(AssociatePrincipalWithPortfolioInput $in): Awaitable<\Errors\Result<AssociatePrincipalWithPortfolioOutput>>;
  public function AssociateProductWithPortfolio(AssociateProductWithPortfolioInput $in): Awaitable<\Errors\Result<AssociateProductWithPortfolioOutput>>;
  public function AssociateServiceActionWithProvisioningArtifact(AssociateServiceActionWithProvisioningArtifactInput $in): Awaitable<\Errors\Result<AssociateServiceActionWithProvisioningArtifactOutput>>;
  public function AssociateTagOptionWithResource(AssociateTagOptionWithResourceInput $in): Awaitable<\Errors\Result<AssociateTagOptionWithResourceOutput>>;
  public function BatchAssociateServiceActionWithProvisioningArtifact(BatchAssociateServiceActionWithProvisioningArtifactInput $in): Awaitable<\Errors\Result<BatchAssociateServiceActionWithProvisioningArtifactOutput>>;
  public function BatchDisassociateServiceActionFromProvisioningArtifact(BatchDisassociateServiceActionFromProvisioningArtifactInput $in): Awaitable<\Errors\Result<BatchDisassociateServiceActionFromProvisioningArtifactOutput>>;
  public function CopyProduct(CopyProductInput $in): Awaitable<\Errors\Result<CopyProductOutput>>;
  public function CreateConstraint(CreateConstraintInput $in): Awaitable<\Errors\Result<CreateConstraintOutput>>;
  public function CreatePortfolio(CreatePortfolioInput $in): Awaitable<\Errors\Result<CreatePortfolioOutput>>;
  public function CreatePortfolioShare(CreatePortfolioShareInput $in): Awaitable<\Errors\Result<CreatePortfolioShareOutput>>;
  public function CreateProduct(CreateProductInput $in): Awaitable<\Errors\Result<CreateProductOutput>>;
  public function CreateProvisionedProductPlan(CreateProvisionedProductPlanInput $in): Awaitable<\Errors\Result<CreateProvisionedProductPlanOutput>>;
  public function CreateProvisioningArtifact(CreateProvisioningArtifactInput $in): Awaitable<\Errors\Result<CreateProvisioningArtifactOutput>>;
  public function CreateServiceAction(CreateServiceActionInput $in): Awaitable<\Errors\Result<CreateServiceActionOutput>>;
  public function CreateTagOption(CreateTagOptionInput $in): Awaitable<\Errors\Result<CreateTagOptionOutput>>;
  public function DeleteConstraint(DeleteConstraintInput $in): Awaitable<\Errors\Result<DeleteConstraintOutput>>;
  public function DeletePortfolio(DeletePortfolioInput $in): Awaitable<\Errors\Result<DeletePortfolioOutput>>;
  public function DeletePortfolioShare(DeletePortfolioShareInput $in): Awaitable<\Errors\Result<DeletePortfolioShareOutput>>;
  public function DeleteProduct(DeleteProductInput $in): Awaitable<\Errors\Result<DeleteProductOutput>>;
  public function DeleteProvisionedProductPlan(DeleteProvisionedProductPlanInput $in): Awaitable<\Errors\Result<DeleteProvisionedProductPlanOutput>>;
  public function DeleteProvisioningArtifact(DeleteProvisioningArtifactInput $in): Awaitable<\Errors\Result<DeleteProvisioningArtifactOutput>>;
  public function DeleteServiceAction(DeleteServiceActionInput $in): Awaitable<\Errors\Result<DeleteServiceActionOutput>>;
  public function DeleteTagOption(DeleteTagOptionInput $in): Awaitable<\Errors\Result<DeleteTagOptionOutput>>;
  public function DescribeConstraint(DescribeConstraintInput $in): Awaitable<\Errors\Result<DescribeConstraintOutput>>;
  public function DescribeCopyProductStatus(DescribeCopyProductStatusInput $in): Awaitable<\Errors\Result<DescribeCopyProductStatusOutput>>;
  public function DescribePortfolio(DescribePortfolioInput $in): Awaitable<\Errors\Result<DescribePortfolioOutput>>;
  public function DescribePortfolioShareStatus(DescribePortfolioShareStatusInput $in): Awaitable<\Errors\Result<DescribePortfolioShareStatusOutput>>;
  public function DescribeProduct(DescribeProductInput $in): Awaitable<\Errors\Result<DescribeProductOutput>>;
  public function DescribeProductAsAdmin(DescribeProductAsAdminInput $in): Awaitable<\Errors\Result<DescribeProductAsAdminOutput>>;
  public function DescribeProductView(DescribeProductViewInput $in): Awaitable<\Errors\Result<DescribeProductViewOutput>>;
  public function DescribeProvisionedProduct(DescribeProvisionedProductInput $in): Awaitable<\Errors\Result<DescribeProvisionedProductOutput>>;
  public function DescribeProvisionedProductPlan(DescribeProvisionedProductPlanInput $in): Awaitable<\Errors\Result<DescribeProvisionedProductPlanOutput>>;
  public function DescribeProvisioningArtifact(DescribeProvisioningArtifactInput $in): Awaitable<\Errors\Result<DescribeProvisioningArtifactOutput>>;
  public function DescribeProvisioningParameters(DescribeProvisioningParametersInput $in): Awaitable<\Errors\Result<DescribeProvisioningParametersOutput>>;
  public function DescribeRecord(DescribeRecordInput $in): Awaitable<\Errors\Result<DescribeRecordOutput>>;
  public function DescribeServiceAction(DescribeServiceActionInput $in): Awaitable<\Errors\Result<DescribeServiceActionOutput>>;
  public function DescribeServiceActionExecutionParameters(DescribeServiceActionExecutionParametersInput $in): Awaitable<\Errors\Result<DescribeServiceActionExecutionParametersOutput>>;
  public function DescribeTagOption(DescribeTagOptionInput $in): Awaitable<\Errors\Result<DescribeTagOptionOutput>>;
  public function DisableAWSOrganizationsAccess(DisableAWSOrganizationsAccessInput $in): Awaitable<\Errors\Result<DisableAWSOrganizationsAccessOutput>>;
  public function DisassociateBudgetFromResource(DisassociateBudgetFromResourceInput $in): Awaitable<\Errors\Result<DisassociateBudgetFromResourceOutput>>;
  public function DisassociatePrincipalFromPortfolio(DisassociatePrincipalFromPortfolioInput $in): Awaitable<\Errors\Result<DisassociatePrincipalFromPortfolioOutput>>;
  public function DisassociateProductFromPortfolio(DisassociateProductFromPortfolioInput $in): Awaitable<\Errors\Result<DisassociateProductFromPortfolioOutput>>;
  public function DisassociateServiceActionFromProvisioningArtifact(DisassociateServiceActionFromProvisioningArtifactInput $in): Awaitable<\Errors\Result<DisassociateServiceActionFromProvisioningArtifactOutput>>;
  public function DisassociateTagOptionFromResource(DisassociateTagOptionFromResourceInput $in): Awaitable<\Errors\Result<DisassociateTagOptionFromResourceOutput>>;
  public function EnableAWSOrganizationsAccess(EnableAWSOrganizationsAccessInput $in): Awaitable<\Errors\Result<EnableAWSOrganizationsAccessOutput>>;
  public function ExecuteProvisionedProductPlan(ExecuteProvisionedProductPlanInput $in): Awaitable<\Errors\Result<ExecuteProvisionedProductPlanOutput>>;
  public function ExecuteProvisionedProductServiceAction(ExecuteProvisionedProductServiceActionInput $in): Awaitable<\Errors\Result<ExecuteProvisionedProductServiceActionOutput>>;
  public function GetAWSOrganizationsAccessStatus(GetAWSOrganizationsAccessStatusInput $in): Awaitable<\Errors\Result<GetAWSOrganizationsAccessStatusOutput>>;
  public function ListAcceptedPortfolioShares(ListAcceptedPortfolioSharesInput $in): Awaitable<\Errors\Result<ListAcceptedPortfolioSharesOutput>>;
  public function ListBudgetsForResource(ListBudgetsForResourceInput $in): Awaitable<\Errors\Result<ListBudgetsForResourceOutput>>;
  public function ListConstraintsForPortfolio(ListConstraintsForPortfolioInput $in): Awaitable<\Errors\Result<ListConstraintsForPortfolioOutput>>;
  public function ListLaunchPaths(ListLaunchPathsInput $in): Awaitable<\Errors\Result<ListLaunchPathsOutput>>;
  public function ListOrganizationPortfolioAccess(ListOrganizationPortfolioAccessInput $in): Awaitable<\Errors\Result<ListOrganizationPortfolioAccessOutput>>;
  public function ListPortfolioAccess(ListPortfolioAccessInput $in): Awaitable<\Errors\Result<ListPortfolioAccessOutput>>;
  public function ListPortfolios(ListPortfoliosInput $in): Awaitable<\Errors\Result<ListPortfoliosOutput>>;
  public function ListPortfoliosForProduct(ListPortfoliosForProductInput $in): Awaitable<\Errors\Result<ListPortfoliosForProductOutput>>;
  public function ListPrincipalsForPortfolio(ListPrincipalsForPortfolioInput $in): Awaitable<\Errors\Result<ListPrincipalsForPortfolioOutput>>;
  public function ListProvisionedProductPlans(ListProvisionedProductPlansInput $in): Awaitable<\Errors\Result<ListProvisionedProductPlansOutput>>;
  public function ListProvisioningArtifacts(ListProvisioningArtifactsInput $in): Awaitable<\Errors\Result<ListProvisioningArtifactsOutput>>;
  public function ListProvisioningArtifactsForServiceAction(ListProvisioningArtifactsForServiceActionInput $in): Awaitable<\Errors\Result<ListProvisioningArtifactsForServiceActionOutput>>;
  public function ListRecordHistory(ListRecordHistoryInput $in): Awaitable<\Errors\Result<ListRecordHistoryOutput>>;
  public function ListResourcesForTagOption(ListResourcesForTagOptionInput $in): Awaitable<\Errors\Result<ListResourcesForTagOptionOutput>>;
  public function ListServiceActions(ListServiceActionsInput $in): Awaitable<\Errors\Result<ListServiceActionsOutput>>;
  public function ListServiceActionsForProvisioningArtifact(ListServiceActionsForProvisioningArtifactInput $in): Awaitable<\Errors\Result<ListServiceActionsForProvisioningArtifactOutput>>;
  public function ListStackInstancesForProvisionedProduct(ListStackInstancesForProvisionedProductInput $in): Awaitable<\Errors\Result<ListStackInstancesForProvisionedProductOutput>>;
  public function ListTagOptions(ListTagOptionsInput $in): Awaitable<\Errors\Result<ListTagOptionsOutput>>;
  public function ProvisionProduct(ProvisionProductInput $in): Awaitable<\Errors\Result<ProvisionProductOutput>>;
  public function RejectPortfolioShare(RejectPortfolioShareInput $in): Awaitable<\Errors\Result<RejectPortfolioShareOutput>>;
  public function ScanProvisionedProducts(ScanProvisionedProductsInput $in): Awaitable<\Errors\Result<ScanProvisionedProductsOutput>>;
  public function SearchProducts(SearchProductsInput $in): Awaitable<\Errors\Result<SearchProductsOutput>>;
  public function SearchProductsAsAdmin(SearchProductsAsAdminInput $in): Awaitable<\Errors\Result<SearchProductsAsAdminOutput>>;
  public function SearchProvisionedProducts(SearchProvisionedProductsInput $in): Awaitable<\Errors\Result<SearchProvisionedProductsOutput>>;
  public function TerminateProvisionedProduct(TerminateProvisionedProductInput $in): Awaitable<\Errors\Result<TerminateProvisionedProductOutput>>;
  public function UpdateConstraint(UpdateConstraintInput $in): Awaitable<\Errors\Result<UpdateConstraintOutput>>;
  public function UpdatePortfolio(UpdatePortfolioInput $in): Awaitable<\Errors\Result<UpdatePortfolioOutput>>;
  public function UpdateProduct(UpdateProductInput $in): Awaitable<\Errors\Result<UpdateProductOutput>>;
  public function UpdateProvisionedProduct(UpdateProvisionedProductInput $in): Awaitable<\Errors\Result<UpdateProvisionedProductOutput>>;
  public function UpdateProvisionedProductProperties(UpdateProvisionedProductPropertiesInput $in): Awaitable<\Errors\Result<UpdateProvisionedProductPropertiesOutput>>;
  public function UpdateProvisioningArtifact(UpdateProvisioningArtifactInput $in): Awaitable<\Errors\Result<UpdateProvisioningArtifactOutput>>;
  public function UpdateServiceAction(UpdateServiceActionInput $in): Awaitable<\Errors\Result<UpdateServiceActionOutput>>;
  public function UpdateTagOption(UpdateTagOptionInput $in): Awaitable<\Errors\Result<UpdateTagOptionOutput>>;
}

type AcceptLanguage = string;

class AcceptPortfolioShareInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $portfolio_id;
  public ?PortfolioShareType $portfolio_share_type;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'portfolio_id' => ?Id,
    ?'portfolio_share_type' => ?PortfolioShareType,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->portfolio_id = $s['portfolio_id'] ?? '';
    $this->portfolio_share_type = $s['portfolio_share_type'] ?? '';
  }
}

class AcceptPortfolioShareOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AccessLevelFilter {
  public ?AccessLevelFilterKey $key;
  public ?AccessLevelFilterValue $value;

  public function __construct(shape(
    ?'key' => ?AccessLevelFilterKey,
    ?'value' => ?AccessLevelFilterValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type AccessLevelFilterKey = string;

type AccessLevelFilterValue = string;

type AccessStatus = string;

type AccountId = string;

type AccountIds = vec<AccountId>;

type AddTags = vec<Tag>;

type AllowedValue = string;

type AllowedValues = vec<AllowedValue>;

type ApproximateCount = int;

class AssociateBudgetWithResourceInput {
  public ?BudgetName $budget_name;
  public ?Id $resource_id;

  public function __construct(shape(
    ?'budget_name' => ?BudgetName,
    ?'resource_id' => ?Id,
  ) $s = shape()) {
    $this->budget_name = $s['budget_name'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

class AssociateBudgetWithResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociatePrincipalWithPortfolioInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $portfolio_id;
  public ?PrincipalARN $principal_arn;
  public ?PrincipalType $principal_type;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'portfolio_id' => ?Id,
    ?'principal_arn' => ?PrincipalARN,
    ?'principal_type' => ?PrincipalType,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->portfolio_id = $s['portfolio_id'] ?? '';
    $this->principal_arn = $s['principal_arn'] ?? '';
    $this->principal_type = $s['principal_type'] ?? '';
  }
}

class AssociatePrincipalWithPortfolioOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateProductWithPortfolioInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $portfolio_id;
  public ?Id $product_id;
  public ?Id $source_portfolio_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'portfolio_id' => ?Id,
    ?'product_id' => ?Id,
    ?'source_portfolio_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->portfolio_id = $s['portfolio_id'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->source_portfolio_id = $s['source_portfolio_id'] ?? '';
  }
}

class AssociateProductWithPortfolioOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateServiceActionWithProvisioningArtifactInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $product_id;
  public ?Id $provisioning_artifact_id;
  public ?Id $service_action_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'product_id' => ?Id,
    ?'provisioning_artifact_id' => ?Id,
    ?'service_action_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
    $this->service_action_id = $s['service_action_id'] ?? '';
  }
}

class AssociateServiceActionWithProvisioningArtifactOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateTagOptionWithResourceInput {
  public ?ResourceId $resource_id;
  public ?TagOptionId $tag_option_id;

  public function __construct(shape(
    ?'resource_id' => ?ResourceId,
    ?'tag_option_id' => ?TagOptionId,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->tag_option_id = $s['tag_option_id'] ?? '';
  }
}

class AssociateTagOptionWithResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AttributeValue = string;

class BatchAssociateServiceActionWithProvisioningArtifactInput {
  public ?AcceptLanguage $accept_language;
  public ?ServiceActionAssociations $service_action_associations;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'service_action_associations' => ?ServiceActionAssociations,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->service_action_associations = $s['service_action_associations'] ?? vec[];
  }
}

class BatchAssociateServiceActionWithProvisioningArtifactOutput {
  public ?FailedServiceActionAssociations $failed_service_action_associations;

  public function __construct(shape(
    ?'failed_service_action_associations' => ?FailedServiceActionAssociations,
  ) $s = shape()) {
    $this->failed_service_action_associations = $s['failed_service_action_associations'] ?? vec[];
  }
}

class BatchDisassociateServiceActionFromProvisioningArtifactInput {
  public ?AcceptLanguage $accept_language;
  public ?ServiceActionAssociations $service_action_associations;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'service_action_associations' => ?ServiceActionAssociations,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->service_action_associations = $s['service_action_associations'] ?? vec[];
  }
}

class BatchDisassociateServiceActionFromProvisioningArtifactOutput {
  public ?FailedServiceActionAssociations $failed_service_action_associations;

  public function __construct(shape(
    ?'failed_service_action_associations' => ?FailedServiceActionAssociations,
  ) $s = shape()) {
    $this->failed_service_action_associations = $s['failed_service_action_associations'] ?? vec[];
  }
}

class BudgetDetail {
  public ?BudgetName $budget_name;

  public function __construct(shape(
    ?'budget_name' => ?BudgetName,
  ) $s = shape()) {
    $this->budget_name = $s['budget_name'] ?? '';
  }
}

type BudgetName = string;

type Budgets = vec<BudgetDetail>;

type CausingEntity = string;

type ChangeAction = string;

class CloudWatchDashboard {
  public ?CloudWatchDashboardName $name;

  public function __construct(shape(
    ?'name' => ?CloudWatchDashboardName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

type CloudWatchDashboardName = string;

type CloudWatchDashboards = vec<CloudWatchDashboard>;

type ConstraintDescription = string;

class ConstraintDetail {
  public ?Id $constraint_id;
  public ?ConstraintDescription $description;
  public ?AccountId $owner;
  public ?Id $portfolio_id;
  public ?Id $product_id;
  public ?ConstraintType $type;

  public function __construct(shape(
    ?'constraint_id' => ?Id,
    ?'description' => ?ConstraintDescription,
    ?'owner' => ?AccountId,
    ?'portfolio_id' => ?Id,
    ?'product_id' => ?Id,
    ?'type' => ?ConstraintType,
  ) $s = shape()) {
    $this->constraint_id = $s['constraint_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->owner = $s['owner'] ?? '';
    $this->portfolio_id = $s['portfolio_id'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ConstraintDetails = vec<ConstraintDetail>;

type ConstraintParameters = string;

type ConstraintSummaries = vec<ConstraintSummary>;

class ConstraintSummary {
  public ?ConstraintDescription $description;
  public ?ConstraintType $type;

  public function __construct(shape(
    ?'description' => ?ConstraintDescription,
    ?'type' => ?ConstraintType,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ConstraintType = string;

type CopyOption = string;

type CopyOptions = vec<CopyOption>;

class CopyProductInput {
  public ?AcceptLanguage $accept_language;
  public ?CopyOptions $copy_options;
  public ?IdempotencyToken $idempotency_token;
  public ?ProductArn $source_product_arn;
  public ?SourceProvisioningArtifactProperties $source_provisioning_artifact_identifiers;
  public ?Id $target_product_id;
  public ?ProductViewName $target_product_name;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'copy_options' => ?CopyOptions,
    ?'idempotency_token' => ?IdempotencyToken,
    ?'source_product_arn' => ?ProductArn,
    ?'source_provisioning_artifact_identifiers' => ?SourceProvisioningArtifactProperties,
    ?'target_product_id' => ?Id,
    ?'target_product_name' => ?ProductViewName,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->copy_options = $s['copy_options'] ?? vec[];
    $this->idempotency_token = $s['idempotency_token'] ?? '';
    $this->source_product_arn = $s['source_product_arn'] ?? '';
    $this->source_provisioning_artifact_identifiers = $s['source_provisioning_artifact_identifiers'] ?? vec[];
    $this->target_product_id = $s['target_product_id'] ?? '';
    $this->target_product_name = $s['target_product_name'] ?? '';
  }
}

class CopyProductOutput {
  public ?Id $copy_product_token;

  public function __construct(shape(
    ?'copy_product_token' => ?Id,
  ) $s = shape()) {
    $this->copy_product_token = $s['copy_product_token'] ?? '';
  }
}

type CopyProductStatus = string;

class CreateConstraintInput {
  public ?AcceptLanguage $accept_language;
  public ?ConstraintDescription $description;
  public ?IdempotencyToken $idempotency_token;
  public ?ConstraintParameters $parameters;
  public ?Id $portfolio_id;
  public ?Id $product_id;
  public ?ConstraintType $type;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'description' => ?ConstraintDescription,
    ?'idempotency_token' => ?IdempotencyToken,
    ?'parameters' => ?ConstraintParameters,
    ?'portfolio_id' => ?Id,
    ?'product_id' => ?Id,
    ?'type' => ?ConstraintType,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->idempotency_token = $s['idempotency_token'] ?? '';
    $this->parameters = $s['parameters'] ?? '';
    $this->portfolio_id = $s['portfolio_id'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class CreateConstraintOutput {
  public ?ConstraintDetail $constraint_detail;
  public ?ConstraintParameters $constraint_parameters;
  public ?Status $status;

  public function __construct(shape(
    ?'constraint_detail' => ?ConstraintDetail,
    ?'constraint_parameters' => ?ConstraintParameters,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->constraint_detail = $s['constraint_detail'] ?? null;
    $this->constraint_parameters = $s['constraint_parameters'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class CreatePortfolioInput {
  public ?AcceptLanguage $accept_language;
  public ?PortfolioDescription $description;
  public ?PortfolioDisplayName $display_name;
  public ?IdempotencyToken $idempotency_token;
  public ?ProviderName $provider_name;
  public ?AddTags $tags;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'description' => ?PortfolioDescription,
    ?'display_name' => ?PortfolioDisplayName,
    ?'idempotency_token' => ?IdempotencyToken,
    ?'provider_name' => ?ProviderName,
    ?'tags' => ?AddTags,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->display_name = $s['display_name'] ?? '';
    $this->idempotency_token = $s['idempotency_token'] ?? '';
    $this->provider_name = $s['provider_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreatePortfolioOutput {
  public ?PortfolioDetail $portfolio_detail;
  public ?Tags $tags;

  public function __construct(shape(
    ?'portfolio_detail' => ?PortfolioDetail,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->portfolio_detail = $s['portfolio_detail'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreatePortfolioShareInput {
  public ?AcceptLanguage $accept_language;
  public ?AccountId $account_id;
  public ?OrganizationNode $organization_node;
  public ?Id $portfolio_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'account_id' => ?AccountId,
    ?'organization_node' => ?OrganizationNode,
    ?'portfolio_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->account_id = $s['account_id'] ?? '';
    $this->organization_node = $s['organization_node'] ?? null;
    $this->portfolio_id = $s['portfolio_id'] ?? '';
  }
}

class CreatePortfolioShareOutput {
  public ?Id $portfolio_share_token;

  public function __construct(shape(
    ?'portfolio_share_token' => ?Id,
  ) $s = shape()) {
    $this->portfolio_share_token = $s['portfolio_share_token'] ?? '';
  }
}

class CreateProductInput {
  public ?AcceptLanguage $accept_language;
  public ?ProductViewShortDescription $description;
  public ?ProductViewOwner $distributor;
  public ?IdempotencyToken $idempotency_token;
  public ?ProductViewName $name;
  public ?ProductViewOwner $owner;
  public ?ProductType $product_type;
  public ?ProvisioningArtifactProperties $provisioning_artifact_parameters;
  public ?SupportDescription $support_description;
  public ?SupportEmail $support_email;
  public ?SupportUrl $support_url;
  public ?AddTags $tags;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'description' => ?ProductViewShortDescription,
    ?'distributor' => ?ProductViewOwner,
    ?'idempotency_token' => ?IdempotencyToken,
    ?'name' => ?ProductViewName,
    ?'owner' => ?ProductViewOwner,
    ?'product_type' => ?ProductType,
    ?'provisioning_artifact_parameters' => ?ProvisioningArtifactProperties,
    ?'support_description' => ?SupportDescription,
    ?'support_email' => ?SupportEmail,
    ?'support_url' => ?SupportUrl,
    ?'tags' => ?AddTags,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->distributor = $s['distributor'] ?? '';
    $this->idempotency_token = $s['idempotency_token'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->owner = $s['owner'] ?? '';
    $this->product_type = $s['product_type'] ?? '';
    $this->provisioning_artifact_parameters = $s['provisioning_artifact_parameters'] ?? null;
    $this->support_description = $s['support_description'] ?? '';
    $this->support_email = $s['support_email'] ?? '';
    $this->support_url = $s['support_url'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateProductOutput {
  public ?ProductViewDetail $product_view_detail;
  public ?ProvisioningArtifactDetail $provisioning_artifact_detail;
  public ?Tags $tags;

  public function __construct(shape(
    ?'product_view_detail' => ?ProductViewDetail,
    ?'provisioning_artifact_detail' => ?ProvisioningArtifactDetail,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->product_view_detail = $s['product_view_detail'] ?? null;
    $this->provisioning_artifact_detail = $s['provisioning_artifact_detail'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateProvisionedProductPlanInput {
  public ?AcceptLanguage $accept_language;
  public ?IdempotencyToken $idempotency_token;
  public ?NotificationArns $notification_arns;
  public ?Id $path_id;
  public ?ProvisionedProductPlanName $plan_name;
  public ?ProvisionedProductPlanType $plan_type;
  public ?Id $product_id;
  public ?ProvisionedProductName $provisioned_product_name;
  public ?Id $provisioning_artifact_id;
  public ?UpdateProvisioningParameters $provisioning_parameters;
  public ?Tags $tags;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'idempotency_token' => ?IdempotencyToken,
    ?'notification_arns' => ?NotificationArns,
    ?'path_id' => ?Id,
    ?'plan_name' => ?ProvisionedProductPlanName,
    ?'plan_type' => ?ProvisionedProductPlanType,
    ?'product_id' => ?Id,
    ?'provisioned_product_name' => ?ProvisionedProductName,
    ?'provisioning_artifact_id' => ?Id,
    ?'provisioning_parameters' => ?UpdateProvisioningParameters,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->idempotency_token = $s['idempotency_token'] ?? '';
    $this->notification_arns = $s['notification_arns'] ?? vec[];
    $this->path_id = $s['path_id'] ?? '';
    $this->plan_name = $s['plan_name'] ?? '';
    $this->plan_type = $s['plan_type'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->provisioned_product_name = $s['provisioned_product_name'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
    $this->provisioning_parameters = $s['provisioning_parameters'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateProvisionedProductPlanOutput {
  public ?Id $plan_id;
  public ?ProvisionedProductPlanName $plan_name;
  public ?Id $provision_product_id;
  public ?ProvisionedProductName $provisioned_product_name;
  public ?Id $provisioning_artifact_id;

  public function __construct(shape(
    ?'plan_id' => ?Id,
    ?'plan_name' => ?ProvisionedProductPlanName,
    ?'provision_product_id' => ?Id,
    ?'provisioned_product_name' => ?ProvisionedProductName,
    ?'provisioning_artifact_id' => ?Id,
  ) $s = shape()) {
    $this->plan_id = $s['plan_id'] ?? '';
    $this->plan_name = $s['plan_name'] ?? '';
    $this->provision_product_id = $s['provision_product_id'] ?? '';
    $this->provisioned_product_name = $s['provisioned_product_name'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
  }
}

class CreateProvisioningArtifactInput {
  public ?AcceptLanguage $accept_language;
  public ?IdempotencyToken $idempotency_token;
  public ?ProvisioningArtifactProperties $parameters;
  public ?Id $product_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'idempotency_token' => ?IdempotencyToken,
    ?'parameters' => ?ProvisioningArtifactProperties,
    ?'product_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->idempotency_token = $s['idempotency_token'] ?? '';
    $this->parameters = $s['parameters'] ?? null;
    $this->product_id = $s['product_id'] ?? '';
  }
}

class CreateProvisioningArtifactOutput {
  public ?ProvisioningArtifactInfo $info;
  public ?ProvisioningArtifactDetail $provisioning_artifact_detail;
  public ?Status $status;

  public function __construct(shape(
    ?'info' => ?ProvisioningArtifactInfo,
    ?'provisioning_artifact_detail' => ?ProvisioningArtifactDetail,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->info = $s['info'] ?? dict[];
    $this->provisioning_artifact_detail = $s['provisioning_artifact_detail'] ?? null;
    $this->status = $s['status'] ?? '';
  }
}

class CreateServiceActionInput {
  public ?AcceptLanguage $accept_language;
  public ?ServiceActionDefinitionMap $definition;
  public ?ServiceActionDefinitionType $definition_type;
  public ?ServiceActionDescription $description;
  public ?IdempotencyToken $idempotency_token;
  public ?ServiceActionName $name;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'definition' => ?ServiceActionDefinitionMap,
    ?'definition_type' => ?ServiceActionDefinitionType,
    ?'description' => ?ServiceActionDescription,
    ?'idempotency_token' => ?IdempotencyToken,
    ?'name' => ?ServiceActionName,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->definition = $s['definition'] ?? dict[];
    $this->definition_type = $s['definition_type'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->idempotency_token = $s['idempotency_token'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateServiceActionOutput {
  public ?ServiceActionDetail $service_action_detail;

  public function __construct(shape(
    ?'service_action_detail' => ?ServiceActionDetail,
  ) $s = shape()) {
    $this->service_action_detail = $s['service_action_detail'] ?? null;
  }
}

class CreateTagOptionInput {
  public ?TagOptionKey $key;
  public ?TagOptionValue $value;

  public function __construct(shape(
    ?'key' => ?TagOptionKey,
    ?'value' => ?TagOptionValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class CreateTagOptionOutput {
  public ?TagOptionDetail $tag_option_detail;

  public function __construct(shape(
    ?'tag_option_detail' => ?TagOptionDetail,
  ) $s = shape()) {
    $this->tag_option_detail = $s['tag_option_detail'] ?? null;
  }
}

type CreatedTime = int;

type CreationTime = int;

type DefaultValue = string;

class DeleteConstraintInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class DeleteConstraintOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeletePortfolioInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class DeletePortfolioOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeletePortfolioShareInput {
  public ?AcceptLanguage $accept_language;
  public ?AccountId $account_id;
  public ?OrganizationNode $organization_node;
  public ?Id $portfolio_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'account_id' => ?AccountId,
    ?'organization_node' => ?OrganizationNode,
    ?'portfolio_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->account_id = $s['account_id'] ?? '';
    $this->organization_node = $s['organization_node'] ?? null;
    $this->portfolio_id = $s['portfolio_id'] ?? '';
  }
}

class DeletePortfolioShareOutput {
  public ?Id $portfolio_share_token;

  public function __construct(shape(
    ?'portfolio_share_token' => ?Id,
  ) $s = shape()) {
    $this->portfolio_share_token = $s['portfolio_share_token'] ?? '';
  }
}

class DeleteProductInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class DeleteProductOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteProvisionedProductPlanInput {
  public ?AcceptLanguage $accept_language;
  public ?IgnoreErrors $ignore_errors;
  public ?Id $plan_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'ignore_errors' => ?IgnoreErrors,
    ?'plan_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->ignore_errors = $s['ignore_errors'] ?? false;
    $this->plan_id = $s['plan_id'] ?? '';
  }
}

class DeleteProvisionedProductPlanOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteProvisioningArtifactInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $product_id;
  public ?Id $provisioning_artifact_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'product_id' => ?Id,
    ?'provisioning_artifact_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
  }
}

class DeleteProvisioningArtifactOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteServiceActionInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class DeleteServiceActionOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTagOptionInput {
  public ?TagOptionId $id;

  public function __construct(shape(
    ?'id' => ?TagOptionId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeleteTagOptionOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeConstraintInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class DescribeConstraintOutput {
  public ?ConstraintDetail $constraint_detail;
  public ?ConstraintParameters $constraint_parameters;
  public ?Status $status;

  public function __construct(shape(
    ?'constraint_detail' => ?ConstraintDetail,
    ?'constraint_parameters' => ?ConstraintParameters,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->constraint_detail = $s['constraint_detail'] ?? null;
    $this->constraint_parameters = $s['constraint_parameters'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DescribeCopyProductStatusInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $copy_product_token;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'copy_product_token' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->copy_product_token = $s['copy_product_token'] ?? '';
  }
}

class DescribeCopyProductStatusOutput {
  public ?CopyProductStatus $copy_product_status;
  public ?StatusDetail $status_detail;
  public ?Id $target_product_id;

  public function __construct(shape(
    ?'copy_product_status' => ?CopyProductStatus,
    ?'status_detail' => ?StatusDetail,
    ?'target_product_id' => ?Id,
  ) $s = shape()) {
    $this->copy_product_status = $s['copy_product_status'] ?? '';
    $this->status_detail = $s['status_detail'] ?? '';
    $this->target_product_id = $s['target_product_id'] ?? '';
  }
}

class DescribePortfolioInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class DescribePortfolioOutput {
  public ?Budgets $budgets;
  public ?PortfolioDetail $portfolio_detail;
  public ?TagOptionDetails $tag_options;
  public ?Tags $tags;

  public function __construct(shape(
    ?'budgets' => ?Budgets,
    ?'portfolio_detail' => ?PortfolioDetail,
    ?'tag_options' => ?TagOptionDetails,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->budgets = $s['budgets'] ?? vec[];
    $this->portfolio_detail = $s['portfolio_detail'] ?? null;
    $this->tag_options = $s['tag_options'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class DescribePortfolioShareStatusInput {
  public ?Id $portfolio_share_token;

  public function __construct(shape(
    ?'portfolio_share_token' => ?Id,
  ) $s = shape()) {
    $this->portfolio_share_token = $s['portfolio_share_token'] ?? '';
  }
}

class DescribePortfolioShareStatusOutput {
  public ?OrganizationNodeValue $organization_node_value;
  public ?Id $portfolio_id;
  public ?Id $portfolio_share_token;
  public ?ShareDetails $share_details;
  public ?ShareStatus $status;

  public function __construct(shape(
    ?'organization_node_value' => ?OrganizationNodeValue,
    ?'portfolio_id' => ?Id,
    ?'portfolio_share_token' => ?Id,
    ?'share_details' => ?ShareDetails,
    ?'status' => ?ShareStatus,
  ) $s = shape()) {
    $this->organization_node_value = $s['organization_node_value'] ?? '';
    $this->portfolio_id = $s['portfolio_id'] ?? '';
    $this->portfolio_share_token = $s['portfolio_share_token'] ?? '';
    $this->share_details = $s['share_details'] ?? null;
    $this->status = $s['status'] ?? '';
  }
}

class DescribeProductAsAdminInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class DescribeProductAsAdminOutput {
  public ?Budgets $budgets;
  public ?ProductViewDetail $product_view_detail;
  public ?ProvisioningArtifactSummaries $provisioning_artifact_summaries;
  public ?TagOptionDetails $tag_options;
  public ?Tags $tags;

  public function __construct(shape(
    ?'budgets' => ?Budgets,
    ?'product_view_detail' => ?ProductViewDetail,
    ?'provisioning_artifact_summaries' => ?ProvisioningArtifactSummaries,
    ?'tag_options' => ?TagOptionDetails,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->budgets = $s['budgets'] ?? vec[];
    $this->product_view_detail = $s['product_view_detail'] ?? null;
    $this->provisioning_artifact_summaries = $s['provisioning_artifact_summaries'] ?? vec[];
    $this->tag_options = $s['tag_options'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class DescribeProductInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class DescribeProductOutput {
  public ?Budgets $budgets;
  public ?ProductViewSummary $product_view_summary;
  public ?ProvisioningArtifacts $provisioning_artifacts;

  public function __construct(shape(
    ?'budgets' => ?Budgets,
    ?'product_view_summary' => ?ProductViewSummary,
    ?'provisioning_artifacts' => ?ProvisioningArtifacts,
  ) $s = shape()) {
    $this->budgets = $s['budgets'] ?? vec[];
    $this->product_view_summary = $s['product_view_summary'] ?? null;
    $this->provisioning_artifacts = $s['provisioning_artifacts'] ?? vec[];
  }
}

class DescribeProductViewInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class DescribeProductViewOutput {
  public ?ProductViewSummary $product_view_summary;
  public ?ProvisioningArtifacts $provisioning_artifacts;

  public function __construct(shape(
    ?'product_view_summary' => ?ProductViewSummary,
    ?'provisioning_artifacts' => ?ProvisioningArtifacts,
  ) $s = shape()) {
    $this->product_view_summary = $s['product_view_summary'] ?? null;
    $this->provisioning_artifacts = $s['provisioning_artifacts'] ?? vec[];
  }
}

class DescribeProvisionedProductInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class DescribeProvisionedProductOutput {
  public ?CloudWatchDashboards $cloud_watch_dashboards;
  public ?ProvisionedProductDetail $provisioned_product_detail;

  public function __construct(shape(
    ?'cloud_watch_dashboards' => ?CloudWatchDashboards,
    ?'provisioned_product_detail' => ?ProvisionedProductDetail,
  ) $s = shape()) {
    $this->cloud_watch_dashboards = $s['cloud_watch_dashboards'] ?? vec[];
    $this->provisioned_product_detail = $s['provisioned_product_detail'] ?? null;
  }
}

class DescribeProvisionedProductPlanInput {
  public ?AcceptLanguage $accept_language;
  public ?PageSize $page_size;
  public ?PageToken $page_token;
  public ?Id $plan_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
    ?'plan_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->plan_id = $s['plan_id'] ?? '';
  }
}

class DescribeProvisionedProductPlanOutput {
  public ?PageToken $next_page_token;
  public ?ProvisionedProductPlanDetails $provisioned_product_plan_details;
  public ?ResourceChanges $resource_changes;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'provisioned_product_plan_details' => ?ProvisionedProductPlanDetails,
    ?'resource_changes' => ?ResourceChanges,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->provisioned_product_plan_details = $s['provisioned_product_plan_details'] ?? null;
    $this->resource_changes = $s['resource_changes'] ?? vec[];
  }
}

class DescribeProvisioningArtifactInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $product_id;
  public ?Id $provisioning_artifact_id;
  public ?Verbose $verbose;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'product_id' => ?Id,
    ?'provisioning_artifact_id' => ?Id,
    ?'verbose' => ?Verbose,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
    $this->verbose = $s['verbose'] ?? false;
  }
}

class DescribeProvisioningArtifactOutput {
  public ?ProvisioningArtifactInfo $info;
  public ?ProvisioningArtifactDetail $provisioning_artifact_detail;
  public ?Status $status;

  public function __construct(shape(
    ?'info' => ?ProvisioningArtifactInfo,
    ?'provisioning_artifact_detail' => ?ProvisioningArtifactDetail,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->info = $s['info'] ?? dict[];
    $this->provisioning_artifact_detail = $s['provisioning_artifact_detail'] ?? null;
    $this->status = $s['status'] ?? '';
  }
}

class DescribeProvisioningParametersInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $path_id;
  public ?Id $product_id;
  public ?Id $provisioning_artifact_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'path_id' => ?Id,
    ?'product_id' => ?Id,
    ?'provisioning_artifact_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->path_id = $s['path_id'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
  }
}

class DescribeProvisioningParametersOutput {
  public ?ConstraintSummaries $constraint_summaries;
  public ?ProvisioningArtifactParameters $provisioning_artifact_parameters;
  public ?ProvisioningArtifactPreferences $provisioning_artifact_preferences;
  public ?TagOptionSummaries $tag_options;
  public ?UsageInstructions $usage_instructions;

  public function __construct(shape(
    ?'constraint_summaries' => ?ConstraintSummaries,
    ?'provisioning_artifact_parameters' => ?ProvisioningArtifactParameters,
    ?'provisioning_artifact_preferences' => ?ProvisioningArtifactPreferences,
    ?'tag_options' => ?TagOptionSummaries,
    ?'usage_instructions' => ?UsageInstructions,
  ) $s = shape()) {
    $this->constraint_summaries = $s['constraint_summaries'] ?? vec[];
    $this->provisioning_artifact_parameters = $s['provisioning_artifact_parameters'] ?? vec[];
    $this->provisioning_artifact_preferences = $s['provisioning_artifact_preferences'] ?? null;
    $this->tag_options = $s['tag_options'] ?? vec[];
    $this->usage_instructions = $s['usage_instructions'] ?? vec[];
  }
}

class DescribeRecordInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $id;
  public ?PageSize $page_size;
  public ?PageToken $page_token;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'id' => ?Id,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
  }
}

class DescribeRecordOutput {
  public ?PageToken $next_page_token;
  public ?RecordDetail $record_detail;
  public ?RecordOutputs $record_outputs;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'record_detail' => ?RecordDetail,
    ?'record_outputs' => ?RecordOutputs,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->record_detail = $s['record_detail'] ?? null;
    $this->record_outputs = $s['record_outputs'] ?? vec[];
  }
}

class DescribeServiceActionExecutionParametersInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $provisioned_product_id;
  public ?Id $service_action_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'provisioned_product_id' => ?Id,
    ?'service_action_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->provisioned_product_id = $s['provisioned_product_id'] ?? '';
    $this->service_action_id = $s['service_action_id'] ?? '';
  }
}

class DescribeServiceActionExecutionParametersOutput {
  public ?ExecutionParameters $service_action_parameters;

  public function __construct(shape(
    ?'service_action_parameters' => ?ExecutionParameters,
  ) $s = shape()) {
    $this->service_action_parameters = $s['service_action_parameters'] ?? vec[];
  }
}

class DescribeServiceActionInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class DescribeServiceActionOutput {
  public ?ServiceActionDetail $service_action_detail;

  public function __construct(shape(
    ?'service_action_detail' => ?ServiceActionDetail,
  ) $s = shape()) {
    $this->service_action_detail = $s['service_action_detail'] ?? null;
  }
}

class DescribeTagOptionInput {
  public ?TagOptionId $id;

  public function __construct(shape(
    ?'id' => ?TagOptionId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DescribeTagOptionOutput {
  public ?TagOptionDetail $tag_option_detail;

  public function __construct(shape(
    ?'tag_option_detail' => ?TagOptionDetail,
  ) $s = shape()) {
    $this->tag_option_detail = $s['tag_option_detail'] ?? null;
  }
}

type Description = string;

class DisableAWSOrganizationsAccessInput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisableAWSOrganizationsAccessOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DisableTemplateValidation = bool;

class DisassociateBudgetFromResourceInput {
  public ?BudgetName $budget_name;
  public ?Id $resource_id;

  public function __construct(shape(
    ?'budget_name' => ?BudgetName,
    ?'resource_id' => ?Id,
  ) $s = shape()) {
    $this->budget_name = $s['budget_name'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

class DisassociateBudgetFromResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociatePrincipalFromPortfolioInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $portfolio_id;
  public ?PrincipalARN $principal_arn;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'portfolio_id' => ?Id,
    ?'principal_arn' => ?PrincipalARN,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->portfolio_id = $s['portfolio_id'] ?? '';
    $this->principal_arn = $s['principal_arn'] ?? '';
  }
}

class DisassociatePrincipalFromPortfolioOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateProductFromPortfolioInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $portfolio_id;
  public ?Id $product_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'portfolio_id' => ?Id,
    ?'product_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->portfolio_id = $s['portfolio_id'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
  }
}

class DisassociateProductFromPortfolioOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateServiceActionFromProvisioningArtifactInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $product_id;
  public ?Id $provisioning_artifact_id;
  public ?Id $service_action_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'product_id' => ?Id,
    ?'provisioning_artifact_id' => ?Id,
    ?'service_action_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
    $this->service_action_id = $s['service_action_id'] ?? '';
  }
}

class DisassociateServiceActionFromProvisioningArtifactOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateTagOptionFromResourceInput {
  public ?ResourceId $resource_id;
  public ?TagOptionId $tag_option_id;

  public function __construct(shape(
    ?'resource_id' => ?ResourceId,
    ?'tag_option_id' => ?TagOptionId,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->tag_option_id = $s['tag_option_id'] ?? '';
  }
}

class DisassociateTagOptionFromResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DuplicateResourceException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EnableAWSOrganizationsAccessInput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EnableAWSOrganizationsAccessOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Error = string;

type ErrorCode = string;

type ErrorDescription = string;

type EvaluationType = string;

class ExecuteProvisionedProductPlanInput {
  public ?AcceptLanguage $accept_language;
  public ?IdempotencyToken $idempotency_token;
  public ?Id $plan_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'idempotency_token' => ?IdempotencyToken,
    ?'plan_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->idempotency_token = $s['idempotency_token'] ?? '';
    $this->plan_id = $s['plan_id'] ?? '';
  }
}

class ExecuteProvisionedProductPlanOutput {
  public ?RecordDetail $record_detail;

  public function __construct(shape(
    ?'record_detail' => ?RecordDetail,
  ) $s = shape()) {
    $this->record_detail = $s['record_detail'] ?? null;
  }
}

class ExecuteProvisionedProductServiceActionInput {
  public ?AcceptLanguage $accept_language;
  public ?IdempotencyToken $execute_token;
  public ?ExecutionParameterMap $parameters;
  public ?Id $provisioned_product_id;
  public ?Id $service_action_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'execute_token' => ?IdempotencyToken,
    ?'parameters' => ?ExecutionParameterMap,
    ?'provisioned_product_id' => ?Id,
    ?'service_action_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->execute_token = $s['execute_token'] ?? '';
    $this->parameters = $s['parameters'] ?? dict[];
    $this->provisioned_product_id = $s['provisioned_product_id'] ?? '';
    $this->service_action_id = $s['service_action_id'] ?? '';
  }
}

class ExecuteProvisionedProductServiceActionOutput {
  public ?RecordDetail $record_detail;

  public function __construct(shape(
    ?'record_detail' => ?RecordDetail,
  ) $s = shape()) {
    $this->record_detail = $s['record_detail'] ?? null;
  }
}

class ExecutionParameter {
  public ?ExecutionParameterValueList $default_values;
  public ?ExecutionParameterKey $name;
  public ?ExecutionParameterType $type;

  public function __construct(shape(
    ?'default_values' => ?ExecutionParameterValueList,
    ?'name' => ?ExecutionParameterKey,
    ?'type' => ?ExecutionParameterType,
  ) $s = shape()) {
    $this->default_values = $s['default_values'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ExecutionParameterKey = string;

type ExecutionParameterMap = dict<ExecutionParameterKey, ExecutionParameterValueList>;

type ExecutionParameterType = string;

type ExecutionParameterValue = string;

type ExecutionParameterValueList = vec<ExecutionParameterValue>;

type ExecutionParameters = vec<ExecutionParameter>;

class FailedServiceActionAssociation {
  public ?ServiceActionAssociationErrorCode $error_code;
  public ?ServiceActionAssociationErrorMessage $error_message;
  public ?Id $product_id;
  public ?Id $provisioning_artifact_id;
  public ?Id $service_action_id;

  public function __construct(shape(
    ?'error_code' => ?ServiceActionAssociationErrorCode,
    ?'error_message' => ?ServiceActionAssociationErrorMessage,
    ?'product_id' => ?Id,
    ?'provisioning_artifact_id' => ?Id,
    ?'service_action_id' => ?Id,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
    $this->service_action_id = $s['service_action_id'] ?? '';
  }
}

type FailedServiceActionAssociations = vec<FailedServiceActionAssociation>;

class GetAWSOrganizationsAccessStatusInput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetAWSOrganizationsAccessStatusOutput {
  public ?AccessStatus $access_status;

  public function __construct(shape(
    ?'access_status' => ?AccessStatus,
  ) $s = shape()) {
    $this->access_status = $s['access_status'] ?? '';
  }
}

type HasDefaultPath = bool;

type Id = string;

type IdempotencyToken = string;

type IgnoreErrors = bool;

type InstructionType = string;

type InstructionValue = string;

class InvalidParametersException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidStateException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type LastRequestId = string;

type LaunchPathSummaries = vec<LaunchPathSummary>;

class LaunchPathSummary {
  public ?ConstraintSummaries $constraint_summaries;
  public ?Id $id;
  public ?PortfolioName $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'constraint_summaries' => ?ConstraintSummaries,
    ?'id' => ?Id,
    ?'name' => ?PortfolioName,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->constraint_summaries = $s['constraint_summaries'] ?? vec[];
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListAcceptedPortfolioSharesInput {
  public ?AcceptLanguage $accept_language;
  public ?PageSize $page_size;
  public ?PageToken $page_token;
  public ?PortfolioShareType $portfolio_share_type;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
    ?'portfolio_share_type' => ?PortfolioShareType,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->portfolio_share_type = $s['portfolio_share_type'] ?? '';
  }
}

class ListAcceptedPortfolioSharesOutput {
  public ?PageToken $next_page_token;
  public ?PortfolioDetails $portfolio_details;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'portfolio_details' => ?PortfolioDetails,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->portfolio_details = $s['portfolio_details'] ?? vec[];
  }
}

class ListBudgetsForResourceInput {
  public ?AcceptLanguage $accept_language;
  public ?PageSize $page_size;
  public ?PageToken $page_token;
  public ?Id $resource_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
    ?'resource_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

class ListBudgetsForResourceOutput {
  public ?Budgets $budgets;
  public ?PageToken $next_page_token;

  public function __construct(shape(
    ?'budgets' => ?Budgets,
    ?'next_page_token' => ?PageToken,
  ) $s = shape()) {
    $this->budgets = $s['budgets'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class ListConstraintsForPortfolioInput {
  public ?AcceptLanguage $accept_language;
  public ?PageSize $page_size;
  public ?PageToken $page_token;
  public ?Id $portfolio_id;
  public ?Id $product_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
    ?'portfolio_id' => ?Id,
    ?'product_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->portfolio_id = $s['portfolio_id'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
  }
}

class ListConstraintsForPortfolioOutput {
  public ?ConstraintDetails $constraint_details;
  public ?PageToken $next_page_token;

  public function __construct(shape(
    ?'constraint_details' => ?ConstraintDetails,
    ?'next_page_token' => ?PageToken,
  ) $s = shape()) {
    $this->constraint_details = $s['constraint_details'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class ListLaunchPathsInput {
  public ?AcceptLanguage $accept_language;
  public ?PageSize $page_size;
  public ?PageToken $page_token;
  public ?Id $product_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
    ?'product_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
  }
}

class ListLaunchPathsOutput {
  public ?LaunchPathSummaries $launch_path_summaries;
  public ?PageToken $next_page_token;

  public function __construct(shape(
    ?'launch_path_summaries' => ?LaunchPathSummaries,
    ?'next_page_token' => ?PageToken,
  ) $s = shape()) {
    $this->launch_path_summaries = $s['launch_path_summaries'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class ListOrganizationPortfolioAccessInput {
  public ?AcceptLanguage $accept_language;
  public ?OrganizationNodeType $organization_node_type;
  public ?PageSize $page_size;
  public ?PageToken $page_token;
  public ?Id $portfolio_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'organization_node_type' => ?OrganizationNodeType,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
    ?'portfolio_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->organization_node_type = $s['organization_node_type'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->portfolio_id = $s['portfolio_id'] ?? '';
  }
}

class ListOrganizationPortfolioAccessOutput {
  public ?PageToken $next_page_token;
  public ?OrganizationNodes $organization_nodes;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'organization_nodes' => ?OrganizationNodes,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->organization_nodes = $s['organization_nodes'] ?? vec[];
  }
}

class ListPortfolioAccessInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $organization_parent_id;
  public ?PageSize $page_size;
  public ?PageToken $page_token;
  public ?Id $portfolio_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'organization_parent_id' => ?Id,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
    ?'portfolio_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->organization_parent_id = $s['organization_parent_id'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->portfolio_id = $s['portfolio_id'] ?? '';
  }
}

class ListPortfolioAccessOutput {
  public ?AccountIds $account_ids;
  public ?PageToken $next_page_token;

  public function __construct(shape(
    ?'account_ids' => ?AccountIds,
    ?'next_page_token' => ?PageToken,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class ListPortfoliosForProductInput {
  public ?AcceptLanguage $accept_language;
  public ?PageSize $page_size;
  public ?PageToken $page_token;
  public ?Id $product_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
    ?'product_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
  }
}

class ListPortfoliosForProductOutput {
  public ?PageToken $next_page_token;
  public ?PortfolioDetails $portfolio_details;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'portfolio_details' => ?PortfolioDetails,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->portfolio_details = $s['portfolio_details'] ?? vec[];
  }
}

class ListPortfoliosInput {
  public ?AcceptLanguage $accept_language;
  public ?PageSize $page_size;
  public ?PageToken $page_token;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
  }
}

class ListPortfoliosOutput {
  public ?PageToken $next_page_token;
  public ?PortfolioDetails $portfolio_details;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'portfolio_details' => ?PortfolioDetails,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->portfolio_details = $s['portfolio_details'] ?? vec[];
  }
}

class ListPrincipalsForPortfolioInput {
  public ?AcceptLanguage $accept_language;
  public ?PageSize $page_size;
  public ?PageToken $page_token;
  public ?Id $portfolio_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
    ?'portfolio_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->portfolio_id = $s['portfolio_id'] ?? '';
  }
}

class ListPrincipalsForPortfolioOutput {
  public ?PageToken $next_page_token;
  public ?Principals $principals;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'principals' => ?Principals,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->principals = $s['principals'] ?? vec[];
  }
}

class ListProvisionedProductPlansInput {
  public ?AcceptLanguage $accept_language;
  public ?AccessLevelFilter $access_level_filter;
  public ?PageSize $page_size;
  public ?PageToken $page_token;
  public ?Id $provision_product_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'access_level_filter' => ?AccessLevelFilter,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
    ?'provision_product_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->access_level_filter = $s['access_level_filter'] ?? null;
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->provision_product_id = $s['provision_product_id'] ?? '';
  }
}

class ListProvisionedProductPlansOutput {
  public ?PageToken $next_page_token;
  public ?ProvisionedProductPlans $provisioned_product_plans;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'provisioned_product_plans' => ?ProvisionedProductPlans,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->provisioned_product_plans = $s['provisioned_product_plans'] ?? vec[];
  }
}

class ListProvisioningArtifactsForServiceActionInput {
  public ?AcceptLanguage $accept_language;
  public ?PageSize $page_size;
  public ?PageToken $page_token;
  public ?Id $service_action_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
    ?'service_action_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->service_action_id = $s['service_action_id'] ?? '';
  }
}

class ListProvisioningArtifactsForServiceActionOutput {
  public ?PageToken $next_page_token;
  public ?ProvisioningArtifactViews $provisioning_artifact_views;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'provisioning_artifact_views' => ?ProvisioningArtifactViews,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->provisioning_artifact_views = $s['provisioning_artifact_views'] ?? vec[];
  }
}

class ListProvisioningArtifactsInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $product_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'product_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
  }
}

class ListProvisioningArtifactsOutput {
  public ?PageToken $next_page_token;
  public ?ProvisioningArtifactDetails $provisioning_artifact_details;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'provisioning_artifact_details' => ?ProvisioningArtifactDetails,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->provisioning_artifact_details = $s['provisioning_artifact_details'] ?? vec[];
  }
}

class ListRecordHistoryInput {
  public ?AcceptLanguage $accept_language;
  public ?AccessLevelFilter $access_level_filter;
  public ?PageSize $page_size;
  public ?PageToken $page_token;
  public ?ListRecordHistorySearchFilter $search_filter;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'access_level_filter' => ?AccessLevelFilter,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
    ?'search_filter' => ?ListRecordHistorySearchFilter,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->access_level_filter = $s['access_level_filter'] ?? null;
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->search_filter = $s['search_filter'] ?? null;
  }
}

class ListRecordHistoryOutput {
  public ?PageToken $next_page_token;
  public ?RecordDetails $record_details;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'record_details' => ?RecordDetails,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->record_details = $s['record_details'] ?? vec[];
  }
}

class ListRecordHistorySearchFilter {
  public ?SearchFilterKey $key;
  public ?SearchFilterValue $value;

  public function __construct(shape(
    ?'key' => ?SearchFilterKey,
    ?'value' => ?SearchFilterValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class ListResourcesForTagOptionInput {
  public ?PageSize $page_size;
  public ?PageToken $page_token;
  public ?ResourceType $resource_type;
  public ?TagOptionId $tag_option_id;

  public function __construct(shape(
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
    ?'resource_type' => ?ResourceType,
    ?'tag_option_id' => ?TagOptionId,
  ) $s = shape()) {
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->tag_option_id = $s['tag_option_id'] ?? '';
  }
}

class ListResourcesForTagOptionOutput {
  public ?PageToken $page_token;
  public ?ResourceDetails $resource_details;

  public function __construct(shape(
    ?'page_token' => ?PageToken,
    ?'resource_details' => ?ResourceDetails,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
    $this->resource_details = $s['resource_details'] ?? vec[];
  }
}

class ListServiceActionsForProvisioningArtifactInput {
  public ?AcceptLanguage $accept_language;
  public ?PageSize $page_size;
  public ?PageToken $page_token;
  public ?Id $product_id;
  public ?Id $provisioning_artifact_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
    ?'product_id' => ?Id,
    ?'provisioning_artifact_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
  }
}

class ListServiceActionsForProvisioningArtifactOutput {
  public ?PageToken $next_page_token;
  public ?ServiceActionSummaries $service_action_summaries;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'service_action_summaries' => ?ServiceActionSummaries,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->service_action_summaries = $s['service_action_summaries'] ?? vec[];
  }
}

class ListServiceActionsInput {
  public ?AcceptLanguage $accept_language;
  public ?PageSize $page_size;
  public ?PageToken $page_token;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
  }
}

class ListServiceActionsOutput {
  public ?PageToken $next_page_token;
  public ?ServiceActionSummaries $service_action_summaries;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'service_action_summaries' => ?ServiceActionSummaries,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->service_action_summaries = $s['service_action_summaries'] ?? vec[];
  }
}

class ListStackInstancesForProvisionedProductInput {
  public ?AcceptLanguage $accept_language;
  public ?PageSize $page_size;
  public ?PageToken $page_token;
  public ?Id $provisioned_product_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
    ?'provisioned_product_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->provisioned_product_id = $s['provisioned_product_id'] ?? '';
  }
}

class ListStackInstancesForProvisionedProductOutput {
  public ?PageToken $next_page_token;
  public ?StackInstances $stack_instances;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'stack_instances' => ?StackInstances,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->stack_instances = $s['stack_instances'] ?? vec[];
  }
}

class ListTagOptionsFilters {
  public ?TagOptionActive $active;
  public ?TagOptionKey $key;
  public ?TagOptionValue $value;

  public function __construct(shape(
    ?'active' => ?TagOptionActive,
    ?'key' => ?TagOptionKey,
    ?'value' => ?TagOptionValue,
  ) $s = shape()) {
    $this->active = $s['active'] ?? false;
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class ListTagOptionsInput {
  public ?ListTagOptionsFilters $filters;
  public ?PageSize $page_size;
  public ?PageToken $page_token;

  public function __construct(shape(
    ?'filters' => ?ListTagOptionsFilters,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? null;
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
  }
}

class ListTagOptionsOutput {
  public ?PageToken $page_token;
  public ?TagOptionDetails $tag_option_details;

  public function __construct(shape(
    ?'page_token' => ?PageToken,
    ?'tag_option_details' => ?TagOptionDetails,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
    $this->tag_option_details = $s['tag_option_details'] ?? vec[];
  }
}

type LogicalResourceId = string;

type Message = string;

type Namespaces = vec<AccountId>;

type NoEcho = bool;

type NotificationArn = string;

type NotificationArns = vec<NotificationArn>;

class OperationNotSupportedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class OrganizationNode {
  public ?OrganizationNodeType $type;
  public ?OrganizationNodeValue $value;

  public function __construct(shape(
    ?'type' => ?OrganizationNodeType,
    ?'value' => ?OrganizationNodeValue,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type OrganizationNodeType = string;

type OrganizationNodeValue = string;

type OrganizationNodes = vec<OrganizationNode>;

type OutputKey = string;

type OutputValue = string;

type PageSize = int;

type PageToken = string;

class ParameterConstraints {
  public ?AllowedValues $allowed_values;

  public function __construct(shape(
    ?'allowed_values' => ?AllowedValues,
  ) $s = shape()) {
    $this->allowed_values = $s['allowed_values'] ?? vec[];
  }
}

type ParameterKey = string;

type ParameterType = string;

type ParameterValue = string;

type PhysicalId = string;

type PhysicalResourceId = string;

type PlanResourceType = string;

type PortfolioDescription = string;

class PortfolioDetail {
  public ?ResourceARN $arn;
  public ?CreationTime $created_time;
  public ?PortfolioDescription $description;
  public ?PortfolioDisplayName $display_name;
  public ?Id $id;
  public ?ProviderName $provider_name;

  public function __construct(shape(
    ?'arn' => ?ResourceARN,
    ?'created_time' => ?CreationTime,
    ?'description' => ?PortfolioDescription,
    ?'display_name' => ?PortfolioDisplayName,
    ?'id' => ?Id,
    ?'provider_name' => ?ProviderName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->display_name = $s['display_name'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->provider_name = $s['provider_name'] ?? '';
  }
}

type PortfolioDetails = vec<PortfolioDetail>;

type PortfolioDisplayName = string;

type PortfolioName = string;

type PortfolioShareType = string;

class Principal {
  public ?PrincipalARN $principal_arn;
  public ?PrincipalType $principal_type;

  public function __construct(shape(
    ?'principal_arn' => ?PrincipalARN,
    ?'principal_type' => ?PrincipalType,
  ) $s = shape()) {
    $this->principal_arn = $s['principal_arn'] ?? '';
    $this->principal_type = $s['principal_type'] ?? '';
  }
}

type PrincipalARN = string;

type PrincipalType = string;

type Principals = vec<Principal>;

type ProductArn = string;

type ProductSource = string;

type ProductType = string;

type ProductViewAggregationType = string;

class ProductViewAggregationValue {
  public ?ApproximateCount $approximate_count;
  public ?AttributeValue $value;

  public function __construct(shape(
    ?'approximate_count' => ?ApproximateCount,
    ?'value' => ?AttributeValue,
  ) $s = shape()) {
    $this->approximate_count = $s['approximate_count'] ?? 0;
    $this->value = $s['value'] ?? '';
  }
}

type ProductViewAggregationValues = vec<ProductViewAggregationValue>;

type ProductViewAggregations = dict<ProductViewAggregationType, ProductViewAggregationValues>;

class ProductViewDetail {
  public ?CreatedTime $created_time;
  public ?ResourceARN $product_arn;
  public ?ProductViewSummary $product_view_summary;
  public ?Status $status;

  public function __construct(shape(
    ?'created_time' => ?CreatedTime,
    ?'product_arn' => ?ResourceARN,
    ?'product_view_summary' => ?ProductViewSummary,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->created_time = $s['created_time'] ?? 0;
    $this->product_arn = $s['product_arn'] ?? '';
    $this->product_view_summary = $s['product_view_summary'] ?? null;
    $this->status = $s['status'] ?? '';
  }
}

type ProductViewDetails = vec<ProductViewDetail>;

type ProductViewDistributor = string;

type ProductViewFilterBy = string;

type ProductViewFilterValue = string;

type ProductViewFilterValues = vec<ProductViewFilterValue>;

type ProductViewFilters = dict<ProductViewFilterBy, ProductViewFilterValues>;

type ProductViewName = string;

type ProductViewOwner = string;

type ProductViewShortDescription = string;

type ProductViewSortBy = string;

type ProductViewSummaries = vec<ProductViewSummary>;

class ProductViewSummary {
  public ?ProductViewDistributor $distributor;
  public ?HasDefaultPath $has_default_path;
  public ?Id $id;
  public ?ProductViewName $name;
  public ?ProductViewOwner $owner;
  public ?Id $product_id;
  public ?ProductViewShortDescription $short_description;
  public ?SupportDescription $support_description;
  public ?SupportEmail $support_email;
  public ?SupportUrl $support_url;
  public ?ProductType $type;

  public function __construct(shape(
    ?'distributor' => ?ProductViewDistributor,
    ?'has_default_path' => ?HasDefaultPath,
    ?'id' => ?Id,
    ?'name' => ?ProductViewName,
    ?'owner' => ?ProductViewOwner,
    ?'product_id' => ?Id,
    ?'short_description' => ?ProductViewShortDescription,
    ?'support_description' => ?SupportDescription,
    ?'support_email' => ?SupportEmail,
    ?'support_url' => ?SupportUrl,
    ?'type' => ?ProductType,
  ) $s = shape()) {
    $this->distributor = $s['distributor'] ?? '';
    $this->has_default_path = $s['has_default_path'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->owner = $s['owner'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->short_description = $s['short_description'] ?? '';
    $this->support_description = $s['support_description'] ?? '';
    $this->support_email = $s['support_email'] ?? '';
    $this->support_url = $s['support_url'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type PropertyKey = string;

type PropertyName = string;

type PropertyValue = string;

type ProviderName = string;

class ProvisionProductInput {
  public ?AcceptLanguage $accept_language;
  public ?NotificationArns $notification_arns;
  public ?Id $path_id;
  public ?Id $product_id;
  public ?IdempotencyToken $provision_token;
  public ?ProvisionedProductName $provisioned_product_name;
  public ?Id $provisioning_artifact_id;
  public ?ProvisioningParameters $provisioning_parameters;
  public ?ProvisioningPreferences $provisioning_preferences;
  public ?Tags $tags;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'notification_arns' => ?NotificationArns,
    ?'path_id' => ?Id,
    ?'product_id' => ?Id,
    ?'provision_token' => ?IdempotencyToken,
    ?'provisioned_product_name' => ?ProvisionedProductName,
    ?'provisioning_artifact_id' => ?Id,
    ?'provisioning_parameters' => ?ProvisioningParameters,
    ?'provisioning_preferences' => ?ProvisioningPreferences,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->notification_arns = $s['notification_arns'] ?? vec[];
    $this->path_id = $s['path_id'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->provision_token = $s['provision_token'] ?? '';
    $this->provisioned_product_name = $s['provisioned_product_name'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
    $this->provisioning_parameters = $s['provisioning_parameters'] ?? vec[];
    $this->provisioning_preferences = $s['provisioning_preferences'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ProvisionProductOutput {
  public ?RecordDetail $record_detail;

  public function __construct(shape(
    ?'record_detail' => ?RecordDetail,
  ) $s = shape()) {
    $this->record_detail = $s['record_detail'] ?? null;
  }
}

class ProvisionedProductAttribute {
  public ?ProvisionedProductNameOrArn $arn;
  public ?CreatedTime $created_time;
  public ?Id $id;
  public ?IdempotencyToken $idempotency_token;
  public ?Id $last_record_id;
  public ?ProvisionedProductNameOrArn $name;
  public ?PhysicalId $physical_id;
  public ?Id $product_id;
  public ?Id $provisioning_artifact_id;
  public ?ProvisionedProductStatus $status;
  public ?ProvisionedProductStatusMessage $status_message;
  public ?Tags $tags;
  public ?ProvisionedProductType $type;
  public ?UserArn $user_arn;
  public ?UserArnSession $user_arn_session;

  public function __construct(shape(
    ?'arn' => ?ProvisionedProductNameOrArn,
    ?'created_time' => ?CreatedTime,
    ?'id' => ?Id,
    ?'idempotency_token' => ?IdempotencyToken,
    ?'last_record_id' => ?Id,
    ?'name' => ?ProvisionedProductNameOrArn,
    ?'physical_id' => ?PhysicalId,
    ?'product_id' => ?Id,
    ?'provisioning_artifact_id' => ?Id,
    ?'status' => ?ProvisionedProductStatus,
    ?'status_message' => ?ProvisionedProductStatusMessage,
    ?'tags' => ?Tags,
    ?'type' => ?ProvisionedProductType,
    ?'user_arn' => ?UserArn,
    ?'user_arn_session' => ?UserArnSession,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->idempotency_token = $s['idempotency_token'] ?? '';
    $this->last_record_id = $s['last_record_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->physical_id = $s['physical_id'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->type = $s['type'] ?? '';
    $this->user_arn = $s['user_arn'] ?? '';
    $this->user_arn_session = $s['user_arn_session'] ?? '';
  }
}

type ProvisionedProductAttributes = vec<ProvisionedProductAttribute>;

class ProvisionedProductDetail {
  public ?ProvisionedProductNameOrArn $arn;
  public ?CreatedTime $created_time;
  public ?ProvisionedProductId $id;
  public ?IdempotencyToken $idempotency_token;
  public ?LastRequestId $last_record_id;
  public ?ProvisionedProductNameOrArn $name;
  public ?Id $product_id;
  public ?Id $provisioning_artifact_id;
  public ?ProvisionedProductStatus $status;
  public ?ProvisionedProductStatusMessage $status_message;
  public ?ProvisionedProductType $type;

  public function __construct(shape(
    ?'arn' => ?ProvisionedProductNameOrArn,
    ?'created_time' => ?CreatedTime,
    ?'id' => ?ProvisionedProductId,
    ?'idempotency_token' => ?IdempotencyToken,
    ?'last_record_id' => ?LastRequestId,
    ?'name' => ?ProvisionedProductNameOrArn,
    ?'product_id' => ?Id,
    ?'provisioning_artifact_id' => ?Id,
    ?'status' => ?ProvisionedProductStatus,
    ?'status_message' => ?ProvisionedProductStatusMessage,
    ?'type' => ?ProvisionedProductType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->idempotency_token = $s['idempotency_token'] ?? '';
    $this->last_record_id = $s['last_record_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ProvisionedProductDetails = vec<ProvisionedProductDetail>;

type ProvisionedProductFilters = dict<ProvisionedProductViewFilterBy, ProvisionedProductViewFilterValues>;

type ProvisionedProductId = string;

type ProvisionedProductName = string;

type ProvisionedProductNameOrArn = string;

class ProvisionedProductPlanDetails {
  public ?CreatedTime $created_time;
  public ?NotificationArns $notification_arns;
  public ?Id $path_id;
  public ?Id $plan_id;
  public ?ProvisionedProductPlanName $plan_name;
  public ?ProvisionedProductPlanType $plan_type;
  public ?Id $product_id;
  public ?Id $provision_product_id;
  public ?ProvisionedProductName $provision_product_name;
  public ?Id $provisioning_artifact_id;
  public ?UpdateProvisioningParameters $provisioning_parameters;
  public ?ProvisionedProductPlanStatus $status;
  public ?StatusMessage $status_message;
  public ?Tags $tags;
  public ?UpdatedTime $updated_time;

  public function __construct(shape(
    ?'created_time' => ?CreatedTime,
    ?'notification_arns' => ?NotificationArns,
    ?'path_id' => ?Id,
    ?'plan_id' => ?Id,
    ?'plan_name' => ?ProvisionedProductPlanName,
    ?'plan_type' => ?ProvisionedProductPlanType,
    ?'product_id' => ?Id,
    ?'provision_product_id' => ?Id,
    ?'provision_product_name' => ?ProvisionedProductName,
    ?'provisioning_artifact_id' => ?Id,
    ?'provisioning_parameters' => ?UpdateProvisioningParameters,
    ?'status' => ?ProvisionedProductPlanStatus,
    ?'status_message' => ?StatusMessage,
    ?'tags' => ?Tags,
    ?'updated_time' => ?UpdatedTime,
  ) $s = shape()) {
    $this->created_time = $s['created_time'] ?? 0;
    $this->notification_arns = $s['notification_arns'] ?? vec[];
    $this->path_id = $s['path_id'] ?? '';
    $this->plan_id = $s['plan_id'] ?? '';
    $this->plan_name = $s['plan_name'] ?? '';
    $this->plan_type = $s['plan_type'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->provision_product_id = $s['provision_product_id'] ?? '';
    $this->provision_product_name = $s['provision_product_name'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
    $this->provisioning_parameters = $s['provisioning_parameters'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->updated_time = $s['updated_time'] ?? 0;
  }
}

type ProvisionedProductPlanName = string;

type ProvisionedProductPlanStatus = string;

class ProvisionedProductPlanSummary {
  public ?Id $plan_id;
  public ?ProvisionedProductPlanName $plan_name;
  public ?ProvisionedProductPlanType $plan_type;
  public ?Id $provision_product_id;
  public ?ProvisionedProductName $provision_product_name;
  public ?Id $provisioning_artifact_id;

  public function __construct(shape(
    ?'plan_id' => ?Id,
    ?'plan_name' => ?ProvisionedProductPlanName,
    ?'plan_type' => ?ProvisionedProductPlanType,
    ?'provision_product_id' => ?Id,
    ?'provision_product_name' => ?ProvisionedProductName,
    ?'provisioning_artifact_id' => ?Id,
  ) $s = shape()) {
    $this->plan_id = $s['plan_id'] ?? '';
    $this->plan_name = $s['plan_name'] ?? '';
    $this->plan_type = $s['plan_type'] ?? '';
    $this->provision_product_id = $s['provision_product_id'] ?? '';
    $this->provision_product_name = $s['provision_product_name'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
  }
}

type ProvisionedProductPlanType = string;

type ProvisionedProductPlans = vec<ProvisionedProductPlanSummary>;

type ProvisionedProductProperties = dict<PropertyKey, PropertyValue>;

type ProvisionedProductStatus = string;

type ProvisionedProductStatusMessage = string;

type ProvisionedProductType = string;

type ProvisionedProductViewFilterBy = string;

type ProvisionedProductViewFilterValue = string;

type ProvisionedProductViewFilterValues = vec<ProvisionedProductViewFilterValue>;

class ProvisioningArtifact {
  public ?ProvisioningArtifactCreatedTime $created_time;
  public ?ProvisioningArtifactDescription $description;
  public ?ProvisioningArtifactGuidance $guidance;
  public ?Id $id;
  public ?ProvisioningArtifactName $name;

  public function __construct(shape(
    ?'created_time' => ?ProvisioningArtifactCreatedTime,
    ?'description' => ?ProvisioningArtifactDescription,
    ?'guidance' => ?ProvisioningArtifactGuidance,
    ?'id' => ?Id,
    ?'name' => ?ProvisioningArtifactName,
  ) $s = shape()) {
    $this->created_time = $s['created_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->guidance = $s['guidance'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type ProvisioningArtifactActive = bool;

type ProvisioningArtifactCreatedTime = int;

type ProvisioningArtifactDescription = string;

class ProvisioningArtifactDetail {
  public ?ProvisioningArtifactActive $active;
  public ?CreationTime $created_time;
  public ?ProvisioningArtifactName $description;
  public ?ProvisioningArtifactGuidance $guidance;
  public ?Id $id;
  public ?ProvisioningArtifactName $name;
  public ?ProvisioningArtifactType $type;

  public function __construct(shape(
    ?'active' => ?ProvisioningArtifactActive,
    ?'created_time' => ?CreationTime,
    ?'description' => ?ProvisioningArtifactName,
    ?'guidance' => ?ProvisioningArtifactGuidance,
    ?'id' => ?Id,
    ?'name' => ?ProvisioningArtifactName,
    ?'type' => ?ProvisioningArtifactType,
  ) $s = shape()) {
    $this->active = $s['active'] ?? false;
    $this->created_time = $s['created_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->guidance = $s['guidance'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ProvisioningArtifactDetails = vec<ProvisioningArtifactDetail>;

type ProvisioningArtifactGuidance = string;

type ProvisioningArtifactInfo = dict<ProvisioningArtifactInfoKey, ProvisioningArtifactInfoValue>;

type ProvisioningArtifactInfoKey = string;

type ProvisioningArtifactInfoValue = string;

type ProvisioningArtifactName = string;

class ProvisioningArtifactParameter {
  public ?DefaultValue $default_value;
  public ?Description $description;
  public ?NoEcho $is_no_echo;
  public ?ParameterConstraints $parameter_constraints;
  public ?ParameterKey $parameter_key;
  public ?ParameterType $parameter_type;

  public function __construct(shape(
    ?'default_value' => ?DefaultValue,
    ?'description' => ?Description,
    ?'is_no_echo' => ?NoEcho,
    ?'parameter_constraints' => ?ParameterConstraints,
    ?'parameter_key' => ?ParameterKey,
    ?'parameter_type' => ?ParameterType,
  ) $s = shape()) {
    $this->default_value = $s['default_value'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->is_no_echo = $s['is_no_echo'] ?? false;
    $this->parameter_constraints = $s['parameter_constraints'] ?? null;
    $this->parameter_key = $s['parameter_key'] ?? '';
    $this->parameter_type = $s['parameter_type'] ?? '';
  }
}

type ProvisioningArtifactParameters = vec<ProvisioningArtifactParameter>;

class ProvisioningArtifactPreferences {
  public ?StackSetAccounts $stack_set_accounts;
  public ?StackSetRegions $stack_set_regions;

  public function __construct(shape(
    ?'stack_set_accounts' => ?StackSetAccounts,
    ?'stack_set_regions' => ?StackSetRegions,
  ) $s = shape()) {
    $this->stack_set_accounts = $s['stack_set_accounts'] ?? vec[];
    $this->stack_set_regions = $s['stack_set_regions'] ?? vec[];
  }
}

class ProvisioningArtifactProperties {
  public ?ProvisioningArtifactDescription $description;
  public ?DisableTemplateValidation $disable_template_validation;
  public ?ProvisioningArtifactInfo $info;
  public ?ProvisioningArtifactName $name;
  public ?ProvisioningArtifactType $type;

  public function __construct(shape(
    ?'description' => ?ProvisioningArtifactDescription,
    ?'disable_template_validation' => ?DisableTemplateValidation,
    ?'info' => ?ProvisioningArtifactInfo,
    ?'name' => ?ProvisioningArtifactName,
    ?'type' => ?ProvisioningArtifactType,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->disable_template_validation = $s['disable_template_validation'] ?? false;
    $this->info = $s['info'] ?? dict[];
    $this->name = $s['name'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ProvisioningArtifactPropertyName = string;

type ProvisioningArtifactPropertyValue = string;

type ProvisioningArtifactSummaries = vec<ProvisioningArtifactSummary>;

class ProvisioningArtifactSummary {
  public ?ProvisioningArtifactCreatedTime $created_time;
  public ?ProvisioningArtifactDescription $description;
  public ?Id $id;
  public ?ProvisioningArtifactName $name;
  public ?ProvisioningArtifactInfo $provisioning_artifact_metadata;

  public function __construct(shape(
    ?'created_time' => ?ProvisioningArtifactCreatedTime,
    ?'description' => ?ProvisioningArtifactDescription,
    ?'id' => ?Id,
    ?'name' => ?ProvisioningArtifactName,
    ?'provisioning_artifact_metadata' => ?ProvisioningArtifactInfo,
  ) $s = shape()) {
    $this->created_time = $s['created_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->provisioning_artifact_metadata = $s['provisioning_artifact_metadata'] ?? dict[];
  }
}

type ProvisioningArtifactType = string;

class ProvisioningArtifactView {
  public ?ProductViewSummary $product_view_summary;
  public ?ProvisioningArtifact $provisioning_artifact;

  public function __construct(shape(
    ?'product_view_summary' => ?ProductViewSummary,
    ?'provisioning_artifact' => ?ProvisioningArtifact,
  ) $s = shape()) {
    $this->product_view_summary = $s['product_view_summary'] ?? null;
    $this->provisioning_artifact = $s['provisioning_artifact'] ?? null;
  }
}

type ProvisioningArtifactViews = vec<ProvisioningArtifactView>;

type ProvisioningArtifacts = vec<ProvisioningArtifact>;

class ProvisioningParameter {
  public ?ParameterKey $key;
  public ?ParameterValue $value;

  public function __construct(shape(
    ?'key' => ?ParameterKey,
    ?'value' => ?ParameterValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type ProvisioningParameters = vec<ProvisioningParameter>;

class ProvisioningPreferences {
  public ?StackSetAccounts $stack_set_accounts;
  public ?StackSetFailureToleranceCount $stack_set_failure_tolerance_count;
  public ?StackSetFailureTolerancePercentage $stack_set_failure_tolerance_percentage;
  public ?StackSetMaxConcurrencyCount $stack_set_max_concurrency_count;
  public ?StackSetMaxConcurrencyPercentage $stack_set_max_concurrency_percentage;
  public ?StackSetRegions $stack_set_regions;

  public function __construct(shape(
    ?'stack_set_accounts' => ?StackSetAccounts,
    ?'stack_set_failure_tolerance_count' => ?StackSetFailureToleranceCount,
    ?'stack_set_failure_tolerance_percentage' => ?StackSetFailureTolerancePercentage,
    ?'stack_set_max_concurrency_count' => ?StackSetMaxConcurrencyCount,
    ?'stack_set_max_concurrency_percentage' => ?StackSetMaxConcurrencyPercentage,
    ?'stack_set_regions' => ?StackSetRegions,
  ) $s = shape()) {
    $this->stack_set_accounts = $s['stack_set_accounts'] ?? vec[];
    $this->stack_set_failure_tolerance_count = $s['stack_set_failure_tolerance_count'] ?? 0;
    $this->stack_set_failure_tolerance_percentage = $s['stack_set_failure_tolerance_percentage'] ?? 0;
    $this->stack_set_max_concurrency_count = $s['stack_set_max_concurrency_count'] ?? 0;
    $this->stack_set_max_concurrency_percentage = $s['stack_set_max_concurrency_percentage'] ?? 0;
    $this->stack_set_regions = $s['stack_set_regions'] ?? vec[];
  }
}

class RecordDetail {
  public ?CreatedTime $created_time;
  public ?Id $path_id;
  public ?Id $product_id;
  public ?Id $provisioned_product_id;
  public ?ProvisionedProductName $provisioned_product_name;
  public ?ProvisionedProductType $provisioned_product_type;
  public ?Id $provisioning_artifact_id;
  public ?RecordErrors $record_errors;
  public ?Id $record_id;
  public ?RecordTags $record_tags;
  public ?RecordType $record_type;
  public ?RecordStatus $status;
  public ?UpdatedTime $updated_time;

  public function __construct(shape(
    ?'created_time' => ?CreatedTime,
    ?'path_id' => ?Id,
    ?'product_id' => ?Id,
    ?'provisioned_product_id' => ?Id,
    ?'provisioned_product_name' => ?ProvisionedProductName,
    ?'provisioned_product_type' => ?ProvisionedProductType,
    ?'provisioning_artifact_id' => ?Id,
    ?'record_errors' => ?RecordErrors,
    ?'record_id' => ?Id,
    ?'record_tags' => ?RecordTags,
    ?'record_type' => ?RecordType,
    ?'status' => ?RecordStatus,
    ?'updated_time' => ?UpdatedTime,
  ) $s = shape()) {
    $this->created_time = $s['created_time'] ?? 0;
    $this->path_id = $s['path_id'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->provisioned_product_id = $s['provisioned_product_id'] ?? '';
    $this->provisioned_product_name = $s['provisioned_product_name'] ?? '';
    $this->provisioned_product_type = $s['provisioned_product_type'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
    $this->record_errors = $s['record_errors'] ?? vec[];
    $this->record_id = $s['record_id'] ?? '';
    $this->record_tags = $s['record_tags'] ?? vec[];
    $this->record_type = $s['record_type'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->updated_time = $s['updated_time'] ?? 0;
  }
}

type RecordDetails = vec<RecordDetail>;

class RecordError {
  public ?ErrorCode $code;
  public ?ErrorDescription $description;

  public function __construct(shape(
    ?'code' => ?ErrorCode,
    ?'description' => ?ErrorDescription,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

type RecordErrors = vec<RecordError>;

class RecordOutput {
  public ?Description $description;
  public ?OutputKey $output_key;
  public ?OutputValue $output_value;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'output_key' => ?OutputKey,
    ?'output_value' => ?OutputValue,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->output_key = $s['output_key'] ?? '';
    $this->output_value = $s['output_value'] ?? '';
  }
}

type RecordOutputs = vec<RecordOutput>;

type RecordStatus = string;

class RecordTag {
  public ?RecordTagKey $key;
  public ?RecordTagValue $value;

  public function __construct(shape(
    ?'key' => ?RecordTagKey,
    ?'value' => ?RecordTagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type RecordTagKey = string;

type RecordTagValue = string;

type RecordTags = vec<RecordTag>;

type RecordType = string;

type Region = string;

class RejectPortfolioShareInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $portfolio_id;
  public ?PortfolioShareType $portfolio_share_type;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'portfolio_id' => ?Id,
    ?'portfolio_share_type' => ?PortfolioShareType,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->portfolio_id = $s['portfolio_id'] ?? '';
    $this->portfolio_share_type = $s['portfolio_share_type'] ?? '';
  }
}

class RejectPortfolioShareOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Replacement = string;

type RequiresRecreation = string;

type ResourceARN = string;

type ResourceAttribute = string;

class ResourceChange {
  public ?ChangeAction $action;
  public ?ResourceChangeDetails $details;
  public ?LogicalResourceId $logical_resource_id;
  public ?PhysicalResourceId $physical_resource_id;
  public ?Replacement $replacement;
  public ?PlanResourceType $resource_type;
  public ?Scope $scope;

  public function __construct(shape(
    ?'action' => ?ChangeAction,
    ?'details' => ?ResourceChangeDetails,
    ?'logical_resource_id' => ?LogicalResourceId,
    ?'physical_resource_id' => ?PhysicalResourceId,
    ?'replacement' => ?Replacement,
    ?'resource_type' => ?PlanResourceType,
    ?'scope' => ?Scope,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->details = $s['details'] ?? vec[];
    $this->logical_resource_id = $s['logical_resource_id'] ?? '';
    $this->physical_resource_id = $s['physical_resource_id'] ?? '';
    $this->replacement = $s['replacement'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->scope = $s['scope'] ?? vec[];
  }
}

class ResourceChangeDetail {
  public ?CausingEntity $causing_entity;
  public ?EvaluationType $evaluation;
  public ?ResourceTargetDefinition $target;

  public function __construct(shape(
    ?'causing_entity' => ?CausingEntity,
    ?'evaluation' => ?EvaluationType,
    ?'target' => ?ResourceTargetDefinition,
  ) $s = shape()) {
    $this->causing_entity = $s['causing_entity'] ?? '';
    $this->evaluation = $s['evaluation'] ?? '';
    $this->target = $s['target'] ?? null;
  }
}

type ResourceChangeDetails = vec<ResourceChangeDetail>;

type ResourceChanges = vec<ResourceChange>;

class ResourceDetail {
  public ?ResourceDetailARN $arn;
  public ?ResourceDetailCreatedTime $created_time;
  public ?ResourceDetailDescription $description;
  public ?ResourceDetailId $id;
  public ?ResourceDetailName $name;

  public function __construct(shape(
    ?'arn' => ?ResourceDetailARN,
    ?'created_time' => ?ResourceDetailCreatedTime,
    ?'description' => ?ResourceDetailDescription,
    ?'id' => ?ResourceDetailId,
    ?'name' => ?ResourceDetailName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type ResourceDetailARN = string;

type ResourceDetailCreatedTime = int;

type ResourceDetailDescription = string;

type ResourceDetailId = string;

type ResourceDetailName = string;

type ResourceDetails = vec<ResourceDetail>;

type ResourceId = string;

class ResourceInUseException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceTargetDefinition {
  public ?ResourceAttribute $attribute;
  public ?PropertyName $name;
  public ?RequiresRecreation $requires_recreation;

  public function __construct(shape(
    ?'attribute' => ?ResourceAttribute,
    ?'name' => ?PropertyName,
    ?'requires_recreation' => ?RequiresRecreation,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->requires_recreation = $s['requires_recreation'] ?? '';
  }
}

type ResourceType = string;

class ScanProvisionedProductsInput {
  public ?AcceptLanguage $accept_language;
  public ?AccessLevelFilter $access_level_filter;
  public ?PageSize $page_size;
  public ?PageToken $page_token;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'access_level_filter' => ?AccessLevelFilter,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->access_level_filter = $s['access_level_filter'] ?? null;
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
  }
}

class ScanProvisionedProductsOutput {
  public ?PageToken $next_page_token;
  public ?ProvisionedProductDetails $provisioned_products;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'provisioned_products' => ?ProvisionedProductDetails,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->provisioned_products = $s['provisioned_products'] ?? vec[];
  }
}

type Scope = vec<ResourceAttribute>;

type SearchFilterKey = string;

type SearchFilterValue = string;

class SearchProductsAsAdminInput {
  public ?AcceptLanguage $accept_language;
  public ?ProductViewFilters $filters;
  public ?PageSize $page_size;
  public ?PageToken $page_token;
  public ?Id $portfolio_id;
  public ?ProductSource $product_source;
  public ?ProductViewSortBy $sort_by;
  public ?SortOrder $sort_order;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'filters' => ?ProductViewFilters,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
    ?'portfolio_id' => ?Id,
    ?'product_source' => ?ProductSource,
    ?'sort_by' => ?ProductViewSortBy,
    ?'sort_order' => ?SortOrder,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->filters = $s['filters'] ?? dict[];
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->portfolio_id = $s['portfolio_id'] ?? '';
    $this->product_source = $s['product_source'] ?? '';
    $this->sort_by = $s['sort_by'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class SearchProductsAsAdminOutput {
  public ?PageToken $next_page_token;
  public ?ProductViewDetails $product_view_details;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'product_view_details' => ?ProductViewDetails,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->product_view_details = $s['product_view_details'] ?? vec[];
  }
}

class SearchProductsInput {
  public ?AcceptLanguage $accept_language;
  public ?ProductViewFilters $filters;
  public ?PageSize $page_size;
  public ?PageToken $page_token;
  public ?ProductViewSortBy $sort_by;
  public ?SortOrder $sort_order;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'filters' => ?ProductViewFilters,
    ?'page_size' => ?PageSize,
    ?'page_token' => ?PageToken,
    ?'sort_by' => ?ProductViewSortBy,
    ?'sort_order' => ?SortOrder,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->filters = $s['filters'] ?? dict[];
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->sort_by = $s['sort_by'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class SearchProductsOutput {
  public ?PageToken $next_page_token;
  public ?ProductViewAggregations $product_view_aggregations;
  public ?ProductViewSummaries $product_view_summaries;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'product_view_aggregations' => ?ProductViewAggregations,
    ?'product_view_summaries' => ?ProductViewSummaries,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->product_view_aggregations = $s['product_view_aggregations'] ?? dict[];
    $this->product_view_summaries = $s['product_view_summaries'] ?? vec[];
  }
}

class SearchProvisionedProductsInput {
  public ?AcceptLanguage $accept_language;
  public ?AccessLevelFilter $access_level_filter;
  public ?ProvisionedProductFilters $filters;
  public ?SearchProvisionedProductsPageSize $page_size;
  public ?PageToken $page_token;
  public ?SortField $sort_by;
  public ?SortOrder $sort_order;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'access_level_filter' => ?AccessLevelFilter,
    ?'filters' => ?ProvisionedProductFilters,
    ?'page_size' => ?SearchProvisionedProductsPageSize,
    ?'page_token' => ?PageToken,
    ?'sort_by' => ?SortField,
    ?'sort_order' => ?SortOrder,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->access_level_filter = $s['access_level_filter'] ?? null;
    $this->filters = $s['filters'] ?? dict[];
    $this->page_size = $s['page_size'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->sort_by = $s['sort_by'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class SearchProvisionedProductsOutput {
  public ?PageToken $next_page_token;
  public ?ProvisionedProductAttributes $provisioned_products;
  public ?TotalResultsCount $total_results_count;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'provisioned_products' => ?ProvisionedProductAttributes,
    ?'total_results_count' => ?TotalResultsCount,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->provisioned_products = $s['provisioned_products'] ?? vec[];
    $this->total_results_count = $s['total_results_count'] ?? 0;
  }
}

type SearchProvisionedProductsPageSize = int;

class ServiceActionAssociation {
  public ?Id $product_id;
  public ?Id $provisioning_artifact_id;
  public ?Id $service_action_id;

  public function __construct(shape(
    ?'product_id' => ?Id,
    ?'provisioning_artifact_id' => ?Id,
    ?'service_action_id' => ?Id,
  ) $s = shape()) {
    $this->product_id = $s['product_id'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
    $this->service_action_id = $s['service_action_id'] ?? '';
  }
}

type ServiceActionAssociationErrorCode = string;

type ServiceActionAssociationErrorMessage = string;

type ServiceActionAssociations = vec<ServiceActionAssociation>;

type ServiceActionDefinitionKey = string;

type ServiceActionDefinitionMap = dict<ServiceActionDefinitionKey, ServiceActionDefinitionValue>;

type ServiceActionDefinitionType = string;

type ServiceActionDefinitionValue = string;

type ServiceActionDescription = string;

class ServiceActionDetail {
  public ?ServiceActionDefinitionMap $definition;
  public ?ServiceActionSummary $service_action_summary;

  public function __construct(shape(
    ?'definition' => ?ServiceActionDefinitionMap,
    ?'service_action_summary' => ?ServiceActionSummary,
  ) $s = shape()) {
    $this->definition = $s['definition'] ?? dict[];
    $this->service_action_summary = $s['service_action_summary'] ?? null;
  }
}

type ServiceActionName = string;

type ServiceActionSummaries = vec<ServiceActionSummary>;

class ServiceActionSummary {
  public ?ServiceActionDefinitionType $definition_type;
  public ?ServiceActionDescription $description;
  public ?Id $id;
  public ?ServiceActionName $name;

  public function __construct(shape(
    ?'definition_type' => ?ServiceActionDefinitionType,
    ?'description' => ?ServiceActionDescription,
    ?'id' => ?Id,
    ?'name' => ?ServiceActionName,
  ) $s = shape()) {
    $this->definition_type = $s['definition_type'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class ShareDetails {
  public ?ShareErrors $share_errors;
  public ?SuccessfulShares $successful_shares;

  public function __construct(shape(
    ?'share_errors' => ?ShareErrors,
    ?'successful_shares' => ?SuccessfulShares,
  ) $s = shape()) {
    $this->share_errors = $s['share_errors'] ?? vec[];
    $this->successful_shares = $s['successful_shares'] ?? vec[];
  }
}

class ShareError {
  public ?Namespaces $accounts;
  public ?Error $error;
  public ?Message $message;

  public function __construct(shape(
    ?'accounts' => ?Namespaces,
    ?'error' => ?Error,
    ?'message' => ?Message,
  ) $s = shape()) {
    $this->accounts = $s['accounts'] ?? vec[];
    $this->error = $s['error'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type ShareErrors = vec<ShareError>;

type ShareStatus = string;

type SortField = string;

type SortOrder = string;

type SourceProvisioningArtifactProperties = vec<SourceProvisioningArtifactPropertiesMap>;

type SourceProvisioningArtifactPropertiesMap = dict<ProvisioningArtifactPropertyName, ProvisioningArtifactPropertyValue>;

class StackInstance {
  public ?AccountId $account;
  public ?Region $region;
  public ?StackInstanceStatus $stack_instance_status;

  public function __construct(shape(
    ?'account' => ?AccountId,
    ?'region' => ?Region,
    ?'stack_instance_status' => ?StackInstanceStatus,
  ) $s = shape()) {
    $this->account = $s['account'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->stack_instance_status = $s['stack_instance_status'] ?? '';
  }
}

type StackInstanceStatus = string;

type StackInstances = vec<StackInstance>;

type StackSetAccounts = vec<AccountId>;

type StackSetFailureToleranceCount = int;

type StackSetFailureTolerancePercentage = int;

type StackSetMaxConcurrencyCount = int;

type StackSetMaxConcurrencyPercentage = int;

type StackSetOperationType = string;

type StackSetRegions = vec<Region>;

type Status = string;

type StatusDetail = string;

type StatusMessage = string;

type SuccessfulShares = vec<AccountId>;

type SupportDescription = string;

type SupportEmail = string;

type SupportUrl = string;

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

type TagKeys = vec<TagKey>;

type TagOptionActive = bool;

class TagOptionDetail {
  public ?TagOptionActive $active;
  public ?TagOptionId $id;
  public ?TagOptionKey $key;
  public ?TagOptionValue $value;

  public function __construct(shape(
    ?'active' => ?TagOptionActive,
    ?'id' => ?TagOptionId,
    ?'key' => ?TagOptionKey,
    ?'value' => ?TagOptionValue,
  ) $s = shape()) {
    $this->active = $s['active'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagOptionDetails = vec<TagOptionDetail>;

type TagOptionId = string;

type TagOptionKey = string;

class TagOptionNotMigratedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagOptionSummaries = vec<TagOptionSummary>;

class TagOptionSummary {
  public ?TagOptionKey $key;
  public ?TagOptionValues $values;

  public function __construct(shape(
    ?'key' => ?TagOptionKey,
    ?'values' => ?TagOptionValues,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type TagOptionValue = string;

type TagOptionValues = vec<TagOptionValue>;

type TagValue = string;

type Tags = vec<Tag>;

class TerminateProvisionedProductInput {
  public ?AcceptLanguage $accept_language;
  public ?IgnoreErrors $ignore_errors;
  public ?Id $provisioned_product_id;
  public ?ProvisionedProductNameOrArn $provisioned_product_name;
  public ?IdempotencyToken $terminate_token;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'ignore_errors' => ?IgnoreErrors,
    ?'provisioned_product_id' => ?Id,
    ?'provisioned_product_name' => ?ProvisionedProductNameOrArn,
    ?'terminate_token' => ?IdempotencyToken,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->ignore_errors = $s['ignore_errors'] ?? false;
    $this->provisioned_product_id = $s['provisioned_product_id'] ?? '';
    $this->provisioned_product_name = $s['provisioned_product_name'] ?? '';
    $this->terminate_token = $s['terminate_token'] ?? '';
  }
}

class TerminateProvisionedProductOutput {
  public ?RecordDetail $record_detail;

  public function __construct(shape(
    ?'record_detail' => ?RecordDetail,
  ) $s = shape()) {
    $this->record_detail = $s['record_detail'] ?? null;
  }
}

type TotalResultsCount = int;

class UpdateConstraintInput {
  public ?AcceptLanguage $accept_language;
  public ?ConstraintDescription $description;
  public ?Id $id;
  public ?ConstraintParameters $parameters;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'description' => ?ConstraintDescription,
    ?'id' => ?Id,
    ?'parameters' => ?ConstraintParameters,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->parameters = $s['parameters'] ?? '';
  }
}

class UpdateConstraintOutput {
  public ?ConstraintDetail $constraint_detail;
  public ?ConstraintParameters $constraint_parameters;
  public ?Status $status;

  public function __construct(shape(
    ?'constraint_detail' => ?ConstraintDetail,
    ?'constraint_parameters' => ?ConstraintParameters,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->constraint_detail = $s['constraint_detail'] ?? null;
    $this->constraint_parameters = $s['constraint_parameters'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class UpdatePortfolioInput {
  public ?AcceptLanguage $accept_language;
  public ?AddTags $add_tags;
  public ?PortfolioDescription $description;
  public ?PortfolioDisplayName $display_name;
  public ?Id $id;
  public ?ProviderName $provider_name;
  public ?TagKeys $remove_tags;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'add_tags' => ?AddTags,
    ?'description' => ?PortfolioDescription,
    ?'display_name' => ?PortfolioDisplayName,
    ?'id' => ?Id,
    ?'provider_name' => ?ProviderName,
    ?'remove_tags' => ?TagKeys,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->add_tags = $s['add_tags'] ?? vec[];
    $this->description = $s['description'] ?? '';
    $this->display_name = $s['display_name'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->provider_name = $s['provider_name'] ?? '';
    $this->remove_tags = $s['remove_tags'] ?? vec[];
  }
}

class UpdatePortfolioOutput {
  public ?PortfolioDetail $portfolio_detail;
  public ?Tags $tags;

  public function __construct(shape(
    ?'portfolio_detail' => ?PortfolioDetail,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->portfolio_detail = $s['portfolio_detail'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
  }
}

class UpdateProductInput {
  public ?AcceptLanguage $accept_language;
  public ?AddTags $add_tags;
  public ?ProductViewShortDescription $description;
  public ?ProductViewOwner $distributor;
  public ?Id $id;
  public ?ProductViewName $name;
  public ?ProductViewOwner $owner;
  public ?TagKeys $remove_tags;
  public ?SupportDescription $support_description;
  public ?SupportEmail $support_email;
  public ?SupportUrl $support_url;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'add_tags' => ?AddTags,
    ?'description' => ?ProductViewShortDescription,
    ?'distributor' => ?ProductViewOwner,
    ?'id' => ?Id,
    ?'name' => ?ProductViewName,
    ?'owner' => ?ProductViewOwner,
    ?'remove_tags' => ?TagKeys,
    ?'support_description' => ?SupportDescription,
    ?'support_email' => ?SupportEmail,
    ?'support_url' => ?SupportUrl,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->add_tags = $s['add_tags'] ?? vec[];
    $this->description = $s['description'] ?? '';
    $this->distributor = $s['distributor'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->owner = $s['owner'] ?? '';
    $this->remove_tags = $s['remove_tags'] ?? vec[];
    $this->support_description = $s['support_description'] ?? '';
    $this->support_email = $s['support_email'] ?? '';
    $this->support_url = $s['support_url'] ?? '';
  }
}

class UpdateProductOutput {
  public ?ProductViewDetail $product_view_detail;
  public ?Tags $tags;

  public function __construct(shape(
    ?'product_view_detail' => ?ProductViewDetail,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->product_view_detail = $s['product_view_detail'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
  }
}

class UpdateProvisionedProductInput {
  public ?AcceptLanguage $accept_language;
  public ?Id $path_id;
  public ?Id $product_id;
  public ?Id $provisioned_product_id;
  public ?ProvisionedProductNameOrArn $provisioned_product_name;
  public ?Id $provisioning_artifact_id;
  public ?UpdateProvisioningParameters $provisioning_parameters;
  public ?UpdateProvisioningPreferences $provisioning_preferences;
  public ?Tags $tags;
  public ?IdempotencyToken $update_token;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'path_id' => ?Id,
    ?'product_id' => ?Id,
    ?'provisioned_product_id' => ?Id,
    ?'provisioned_product_name' => ?ProvisionedProductNameOrArn,
    ?'provisioning_artifact_id' => ?Id,
    ?'provisioning_parameters' => ?UpdateProvisioningParameters,
    ?'provisioning_preferences' => ?UpdateProvisioningPreferences,
    ?'tags' => ?Tags,
    ?'update_token' => ?IdempotencyToken,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->path_id = $s['path_id'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->provisioned_product_id = $s['provisioned_product_id'] ?? '';
    $this->provisioned_product_name = $s['provisioned_product_name'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
    $this->provisioning_parameters = $s['provisioning_parameters'] ?? vec[];
    $this->provisioning_preferences = $s['provisioning_preferences'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
    $this->update_token = $s['update_token'] ?? '';
  }
}

class UpdateProvisionedProductOutput {
  public ?RecordDetail $record_detail;

  public function __construct(shape(
    ?'record_detail' => ?RecordDetail,
  ) $s = shape()) {
    $this->record_detail = $s['record_detail'] ?? null;
  }
}

class UpdateProvisionedProductPropertiesInput {
  public ?AcceptLanguage $accept_language;
  public ?IdempotencyToken $idempotency_token;
  public ?Id $provisioned_product_id;
  public ?ProvisionedProductProperties $provisioned_product_properties;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'idempotency_token' => ?IdempotencyToken,
    ?'provisioned_product_id' => ?Id,
    ?'provisioned_product_properties' => ?ProvisionedProductProperties,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->idempotency_token = $s['idempotency_token'] ?? '';
    $this->provisioned_product_id = $s['provisioned_product_id'] ?? '';
    $this->provisioned_product_properties = $s['provisioned_product_properties'] ?? dict[];
  }
}

class UpdateProvisionedProductPropertiesOutput {
  public ?Id $provisioned_product_id;
  public ?ProvisionedProductProperties $provisioned_product_properties;
  public ?Id $record_id;
  public ?RecordStatus $status;

  public function __construct(shape(
    ?'provisioned_product_id' => ?Id,
    ?'provisioned_product_properties' => ?ProvisionedProductProperties,
    ?'record_id' => ?Id,
    ?'status' => ?RecordStatus,
  ) $s = shape()) {
    $this->provisioned_product_id = $s['provisioned_product_id'] ?? '';
    $this->provisioned_product_properties = $s['provisioned_product_properties'] ?? dict[];
    $this->record_id = $s['record_id'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class UpdateProvisioningArtifactInput {
  public ?AcceptLanguage $accept_language;
  public ?ProvisioningArtifactActive $active;
  public ?ProvisioningArtifactDescription $description;
  public ?ProvisioningArtifactGuidance $guidance;
  public ?ProvisioningArtifactName $name;
  public ?Id $product_id;
  public ?Id $provisioning_artifact_id;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'active' => ?ProvisioningArtifactActive,
    ?'description' => ?ProvisioningArtifactDescription,
    ?'guidance' => ?ProvisioningArtifactGuidance,
    ?'name' => ?ProvisioningArtifactName,
    ?'product_id' => ?Id,
    ?'provisioning_artifact_id' => ?Id,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->active = $s['active'] ?? false;
    $this->description = $s['description'] ?? '';
    $this->guidance = $s['guidance'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->provisioning_artifact_id = $s['provisioning_artifact_id'] ?? '';
  }
}

class UpdateProvisioningArtifactOutput {
  public ?ProvisioningArtifactInfo $info;
  public ?ProvisioningArtifactDetail $provisioning_artifact_detail;
  public ?Status $status;

  public function __construct(shape(
    ?'info' => ?ProvisioningArtifactInfo,
    ?'provisioning_artifact_detail' => ?ProvisioningArtifactDetail,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->info = $s['info'] ?? dict[];
    $this->provisioning_artifact_detail = $s['provisioning_artifact_detail'] ?? null;
    $this->status = $s['status'] ?? '';
  }
}

class UpdateProvisioningParameter {
  public ?ParameterKey $key;
  public ?UsePreviousValue $use_previous_value;
  public ?ParameterValue $value;

  public function __construct(shape(
    ?'key' => ?ParameterKey,
    ?'use_previous_value' => ?UsePreviousValue,
    ?'value' => ?ParameterValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->use_previous_value = $s['use_previous_value'] ?? false;
    $this->value = $s['value'] ?? '';
  }
}

type UpdateProvisioningParameters = vec<UpdateProvisioningParameter>;

class UpdateProvisioningPreferences {
  public ?StackSetAccounts $stack_set_accounts;
  public ?StackSetFailureToleranceCount $stack_set_failure_tolerance_count;
  public ?StackSetFailureTolerancePercentage $stack_set_failure_tolerance_percentage;
  public ?StackSetMaxConcurrencyCount $stack_set_max_concurrency_count;
  public ?StackSetMaxConcurrencyPercentage $stack_set_max_concurrency_percentage;
  public ?StackSetOperationType $stack_set_operation_type;
  public ?StackSetRegions $stack_set_regions;

  public function __construct(shape(
    ?'stack_set_accounts' => ?StackSetAccounts,
    ?'stack_set_failure_tolerance_count' => ?StackSetFailureToleranceCount,
    ?'stack_set_failure_tolerance_percentage' => ?StackSetFailureTolerancePercentage,
    ?'stack_set_max_concurrency_count' => ?StackSetMaxConcurrencyCount,
    ?'stack_set_max_concurrency_percentage' => ?StackSetMaxConcurrencyPercentage,
    ?'stack_set_operation_type' => ?StackSetOperationType,
    ?'stack_set_regions' => ?StackSetRegions,
  ) $s = shape()) {
    $this->stack_set_accounts = $s['stack_set_accounts'] ?? vec[];
    $this->stack_set_failure_tolerance_count = $s['stack_set_failure_tolerance_count'] ?? 0;
    $this->stack_set_failure_tolerance_percentage = $s['stack_set_failure_tolerance_percentage'] ?? 0;
    $this->stack_set_max_concurrency_count = $s['stack_set_max_concurrency_count'] ?? 0;
    $this->stack_set_max_concurrency_percentage = $s['stack_set_max_concurrency_percentage'] ?? 0;
    $this->stack_set_operation_type = $s['stack_set_operation_type'] ?? '';
    $this->stack_set_regions = $s['stack_set_regions'] ?? vec[];
  }
}

class UpdateServiceActionInput {
  public ?AcceptLanguage $accept_language;
  public ?ServiceActionDefinitionMap $definition;
  public ?ServiceActionDescription $description;
  public ?Id $id;
  public ?ServiceActionName $name;

  public function __construct(shape(
    ?'accept_language' => ?AcceptLanguage,
    ?'definition' => ?ServiceActionDefinitionMap,
    ?'description' => ?ServiceActionDescription,
    ?'id' => ?Id,
    ?'name' => ?ServiceActionName,
  ) $s = shape()) {
    $this->accept_language = $s['accept_language'] ?? '';
    $this->definition = $s['definition'] ?? dict[];
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class UpdateServiceActionOutput {
  public ?ServiceActionDetail $service_action_detail;

  public function __construct(shape(
    ?'service_action_detail' => ?ServiceActionDetail,
  ) $s = shape()) {
    $this->service_action_detail = $s['service_action_detail'] ?? null;
  }
}

class UpdateTagOptionInput {
  public ?TagOptionActive $active;
  public ?TagOptionId $id;
  public ?TagOptionValue $value;

  public function __construct(shape(
    ?'active' => ?TagOptionActive,
    ?'id' => ?TagOptionId,
    ?'value' => ?TagOptionValue,
  ) $s = shape()) {
    $this->active = $s['active'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class UpdateTagOptionOutput {
  public ?TagOptionDetail $tag_option_detail;

  public function __construct(shape(
    ?'tag_option_detail' => ?TagOptionDetail,
  ) $s = shape()) {
    $this->tag_option_detail = $s['tag_option_detail'] ?? null;
  }
}

type UpdatedTime = int;

class UsageInstruction {
  public ?InstructionType $type;
  public ?InstructionValue $value;

  public function __construct(shape(
    ?'type' => ?InstructionType,
    ?'value' => ?InstructionValue,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type UsageInstructions = vec<UsageInstruction>;

type UsePreviousValue = bool;

type UserArn = string;

type UserArnSession = string;

type Verbose = bool;


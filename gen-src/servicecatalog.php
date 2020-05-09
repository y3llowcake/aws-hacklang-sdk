<?hh // strict
namespace slack\aws\servicecatalog;

interface Service Catalog {
  public function AcceptPortfolioShare(AcceptPortfolioShareInput) Awaitable<Errors\Result<AcceptPortfolioShareOutput>>;
  public function AssociateBudgetWithResource(AssociateBudgetWithResourceInput) Awaitable<Errors\Result<AssociateBudgetWithResourceOutput>>;
  public function AssociatePrincipalWithPortfolio(AssociatePrincipalWithPortfolioInput) Awaitable<Errors\Result<AssociatePrincipalWithPortfolioOutput>>;
  public function AssociateProductWithPortfolio(AssociateProductWithPortfolioInput) Awaitable<Errors\Result<AssociateProductWithPortfolioOutput>>;
  public function AssociateServiceActionWithProvisioningArtifact(AssociateServiceActionWithProvisioningArtifactInput) Awaitable<Errors\Result<AssociateServiceActionWithProvisioningArtifactOutput>>;
  public function AssociateTagOptionWithResource(AssociateTagOptionWithResourceInput) Awaitable<Errors\Result<AssociateTagOptionWithResourceOutput>>;
  public function BatchAssociateServiceActionWithProvisioningArtifact(BatchAssociateServiceActionWithProvisioningArtifactInput) Awaitable<Errors\Result<BatchAssociateServiceActionWithProvisioningArtifactOutput>>;
  public function BatchDisassociateServiceActionFromProvisioningArtifact(BatchDisassociateServiceActionFromProvisioningArtifactInput) Awaitable<Errors\Result<BatchDisassociateServiceActionFromProvisioningArtifactOutput>>;
  public function CopyProduct(CopyProductInput) Awaitable<Errors\Result<CopyProductOutput>>;
  public function CreateConstraint(CreateConstraintInput) Awaitable<Errors\Result<CreateConstraintOutput>>;
  public function CreatePortfolio(CreatePortfolioInput) Awaitable<Errors\Result<CreatePortfolioOutput>>;
  public function CreatePortfolioShare(CreatePortfolioShareInput) Awaitable<Errors\Result<CreatePortfolioShareOutput>>;
  public function CreateProduct(CreateProductInput) Awaitable<Errors\Result<CreateProductOutput>>;
  public function CreateProvisionedProductPlan(CreateProvisionedProductPlanInput) Awaitable<Errors\Result<CreateProvisionedProductPlanOutput>>;
  public function CreateProvisioningArtifact(CreateProvisioningArtifactInput) Awaitable<Errors\Result<CreateProvisioningArtifactOutput>>;
  public function CreateServiceAction(CreateServiceActionInput) Awaitable<Errors\Result<CreateServiceActionOutput>>;
  public function CreateTagOption(CreateTagOptionInput) Awaitable<Errors\Result<CreateTagOptionOutput>>;
  public function DeleteConstraint(DeleteConstraintInput) Awaitable<Errors\Result<DeleteConstraintOutput>>;
  public function DeletePortfolio(DeletePortfolioInput) Awaitable<Errors\Result<DeletePortfolioOutput>>;
  public function DeletePortfolioShare(DeletePortfolioShareInput) Awaitable<Errors\Result<DeletePortfolioShareOutput>>;
  public function DeleteProduct(DeleteProductInput) Awaitable<Errors\Result<DeleteProductOutput>>;
  public function DeleteProvisionedProductPlan(DeleteProvisionedProductPlanInput) Awaitable<Errors\Result<DeleteProvisionedProductPlanOutput>>;
  public function DeleteProvisioningArtifact(DeleteProvisioningArtifactInput) Awaitable<Errors\Result<DeleteProvisioningArtifactOutput>>;
  public function DeleteServiceAction(DeleteServiceActionInput) Awaitable<Errors\Result<DeleteServiceActionOutput>>;
  public function DeleteTagOption(DeleteTagOptionInput) Awaitable<Errors\Result<DeleteTagOptionOutput>>;
  public function DescribeConstraint(DescribeConstraintInput) Awaitable<Errors\Result<DescribeConstraintOutput>>;
  public function DescribeCopyProductStatus(DescribeCopyProductStatusInput) Awaitable<Errors\Result<DescribeCopyProductStatusOutput>>;
  public function DescribePortfolio(DescribePortfolioInput) Awaitable<Errors\Result<DescribePortfolioOutput>>;
  public function DescribePortfolioShareStatus(DescribePortfolioShareStatusInput) Awaitable<Errors\Result<DescribePortfolioShareStatusOutput>>;
  public function DescribeProduct(DescribeProductInput) Awaitable<Errors\Result<DescribeProductOutput>>;
  public function DescribeProductAsAdmin(DescribeProductAsAdminInput) Awaitable<Errors\Result<DescribeProductAsAdminOutput>>;
  public function DescribeProductView(DescribeProductViewInput) Awaitable<Errors\Result<DescribeProductViewOutput>>;
  public function DescribeProvisionedProduct(DescribeProvisionedProductInput) Awaitable<Errors\Result<DescribeProvisionedProductOutput>>;
  public function DescribeProvisionedProductPlan(DescribeProvisionedProductPlanInput) Awaitable<Errors\Result<DescribeProvisionedProductPlanOutput>>;
  public function DescribeProvisioningArtifact(DescribeProvisioningArtifactInput) Awaitable<Errors\Result<DescribeProvisioningArtifactOutput>>;
  public function DescribeProvisioningParameters(DescribeProvisioningParametersInput) Awaitable<Errors\Result<DescribeProvisioningParametersOutput>>;
  public function DescribeRecord(DescribeRecordInput) Awaitable<Errors\Result<DescribeRecordOutput>>;
  public function DescribeServiceAction(DescribeServiceActionInput) Awaitable<Errors\Result<DescribeServiceActionOutput>>;
  public function DescribeServiceActionExecutionParameters(DescribeServiceActionExecutionParametersInput) Awaitable<Errors\Result<DescribeServiceActionExecutionParametersOutput>>;
  public function DescribeTagOption(DescribeTagOptionInput) Awaitable<Errors\Result<DescribeTagOptionOutput>>;
  public function DisableAWSOrganizationsAccess(DisableAWSOrganizationsAccessInput) Awaitable<Errors\Result<DisableAWSOrganizationsAccessOutput>>;
  public function DisassociateBudgetFromResource(DisassociateBudgetFromResourceInput) Awaitable<Errors\Result<DisassociateBudgetFromResourceOutput>>;
  public function DisassociatePrincipalFromPortfolio(DisassociatePrincipalFromPortfolioInput) Awaitable<Errors\Result<DisassociatePrincipalFromPortfolioOutput>>;
  public function DisassociateProductFromPortfolio(DisassociateProductFromPortfolioInput) Awaitable<Errors\Result<DisassociateProductFromPortfolioOutput>>;
  public function DisassociateServiceActionFromProvisioningArtifact(DisassociateServiceActionFromProvisioningArtifactInput) Awaitable<Errors\Result<DisassociateServiceActionFromProvisioningArtifactOutput>>;
  public function DisassociateTagOptionFromResource(DisassociateTagOptionFromResourceInput) Awaitable<Errors\Result<DisassociateTagOptionFromResourceOutput>>;
  public function EnableAWSOrganizationsAccess(EnableAWSOrganizationsAccessInput) Awaitable<Errors\Result<EnableAWSOrganizationsAccessOutput>>;
  public function ExecuteProvisionedProductPlan(ExecuteProvisionedProductPlanInput) Awaitable<Errors\Result<ExecuteProvisionedProductPlanOutput>>;
  public function ExecuteProvisionedProductServiceAction(ExecuteProvisionedProductServiceActionInput) Awaitable<Errors\Result<ExecuteProvisionedProductServiceActionOutput>>;
  public function GetAWSOrganizationsAccessStatus(GetAWSOrganizationsAccessStatusInput) Awaitable<Errors\Result<GetAWSOrganizationsAccessStatusOutput>>;
  public function ListAcceptedPortfolioShares(ListAcceptedPortfolioSharesInput) Awaitable<Errors\Result<ListAcceptedPortfolioSharesOutput>>;
  public function ListBudgetsForResource(ListBudgetsForResourceInput) Awaitable<Errors\Result<ListBudgetsForResourceOutput>>;
  public function ListConstraintsForPortfolio(ListConstraintsForPortfolioInput) Awaitable<Errors\Result<ListConstraintsForPortfolioOutput>>;
  public function ListLaunchPaths(ListLaunchPathsInput) Awaitable<Errors\Result<ListLaunchPathsOutput>>;
  public function ListOrganizationPortfolioAccess(ListOrganizationPortfolioAccessInput) Awaitable<Errors\Result<ListOrganizationPortfolioAccessOutput>>;
  public function ListPortfolioAccess(ListPortfolioAccessInput) Awaitable<Errors\Result<ListPortfolioAccessOutput>>;
  public function ListPortfolios(ListPortfoliosInput) Awaitable<Errors\Result<ListPortfoliosOutput>>;
  public function ListPortfoliosForProduct(ListPortfoliosForProductInput) Awaitable<Errors\Result<ListPortfoliosForProductOutput>>;
  public function ListPrincipalsForPortfolio(ListPrincipalsForPortfolioInput) Awaitable<Errors\Result<ListPrincipalsForPortfolioOutput>>;
  public function ListProvisionedProductPlans(ListProvisionedProductPlansInput) Awaitable<Errors\Result<ListProvisionedProductPlansOutput>>;
  public function ListProvisioningArtifacts(ListProvisioningArtifactsInput) Awaitable<Errors\Result<ListProvisioningArtifactsOutput>>;
  public function ListProvisioningArtifactsForServiceAction(ListProvisioningArtifactsForServiceActionInput) Awaitable<Errors\Result<ListProvisioningArtifactsForServiceActionOutput>>;
  public function ListRecordHistory(ListRecordHistoryInput) Awaitable<Errors\Result<ListRecordHistoryOutput>>;
  public function ListResourcesForTagOption(ListResourcesForTagOptionInput) Awaitable<Errors\Result<ListResourcesForTagOptionOutput>>;
  public function ListServiceActions(ListServiceActionsInput) Awaitable<Errors\Result<ListServiceActionsOutput>>;
  public function ListServiceActionsForProvisioningArtifact(ListServiceActionsForProvisioningArtifactInput) Awaitable<Errors\Result<ListServiceActionsForProvisioningArtifactOutput>>;
  public function ListStackInstancesForProvisionedProduct(ListStackInstancesForProvisionedProductInput) Awaitable<Errors\Result<ListStackInstancesForProvisionedProductOutput>>;
  public function ListTagOptions(ListTagOptionsInput) Awaitable<Errors\Result<ListTagOptionsOutput>>;
  public function ProvisionProduct(ProvisionProductInput) Awaitable<Errors\Result<ProvisionProductOutput>>;
  public function RejectPortfolioShare(RejectPortfolioShareInput) Awaitable<Errors\Result<RejectPortfolioShareOutput>>;
  public function ScanProvisionedProducts(ScanProvisionedProductsInput) Awaitable<Errors\Result<ScanProvisionedProductsOutput>>;
  public function SearchProducts(SearchProductsInput) Awaitable<Errors\Result<SearchProductsOutput>>;
  public function SearchProductsAsAdmin(SearchProductsAsAdminInput) Awaitable<Errors\Result<SearchProductsAsAdminOutput>>;
  public function SearchProvisionedProducts(SearchProvisionedProductsInput) Awaitable<Errors\Result<SearchProvisionedProductsOutput>>;
  public function TerminateProvisionedProduct(TerminateProvisionedProductInput) Awaitable<Errors\Result<TerminateProvisionedProductOutput>>;
  public function UpdateConstraint(UpdateConstraintInput) Awaitable<Errors\Result<UpdateConstraintOutput>>;
  public function UpdatePortfolio(UpdatePortfolioInput) Awaitable<Errors\Result<UpdatePortfolioOutput>>;
  public function UpdateProduct(UpdateProductInput) Awaitable<Errors\Result<UpdateProductOutput>>;
  public function UpdateProvisionedProduct(UpdateProvisionedProductInput) Awaitable<Errors\Result<UpdateProvisionedProductOutput>>;
  public function UpdateProvisionedProductProperties(UpdateProvisionedProductPropertiesInput) Awaitable<Errors\Result<UpdateProvisionedProductPropertiesOutput>>;
  public function UpdateProvisioningArtifact(UpdateProvisioningArtifactInput) Awaitable<Errors\Result<UpdateProvisioningArtifactOutput>>;
  public function UpdateServiceAction(UpdateServiceActionInput) Awaitable<Errors\Result<UpdateServiceActionOutput>>;
  public function UpdateTagOption(UpdateTagOptionInput) Awaitable<Errors\Result<UpdateTagOptionOutput>>;
}

class AcceptLanguage {
}

class AcceptPortfolioShareInput {
  public AcceptLanguage $accept_language;
  public Id $portfolio_id;
  public PortfolioShareType $portfolio_share_type;
}

class AcceptPortfolioShareOutput {
}

class AccessLevelFilter {
  public AccessLevelFilterKey $key;
  public AccessLevelFilterValue $value;
}

class AccessLevelFilterKey {
}

class AccessLevelFilterValue {
}

class AccessStatus {
}

class AccountId {
}

class AccountIds {
}

class AddTags {
}

class AllowedValue {
}

class AllowedValues {
}

class ApproximateCount {
}

class AssociateBudgetWithResourceInput {
  public BudgetName $budget_name;
  public Id $resource_id;
}

class AssociateBudgetWithResourceOutput {
}

class AssociatePrincipalWithPortfolioInput {
  public AcceptLanguage $accept_language;
  public Id $portfolio_id;
  public PrincipalARN $principal_arn;
  public PrincipalType $principal_type;
}

class AssociatePrincipalWithPortfolioOutput {
}

class AssociateProductWithPortfolioInput {
  public AcceptLanguage $accept_language;
  public Id $portfolio_id;
  public Id $product_id;
  public Id $source_portfolio_id;
}

class AssociateProductWithPortfolioOutput {
}

class AssociateServiceActionWithProvisioningArtifactInput {
  public AcceptLanguage $accept_language;
  public Id $product_id;
  public Id $provisioning_artifact_id;
  public Id $service_action_id;
}

class AssociateServiceActionWithProvisioningArtifactOutput {
}

class AssociateTagOptionWithResourceInput {
  public ResourceId $resource_id;
  public TagOptionId $tag_option_id;
}

class AssociateTagOptionWithResourceOutput {
}

class AttributeValue {
}

class BatchAssociateServiceActionWithProvisioningArtifactInput {
  public AcceptLanguage $accept_language;
  public ServiceActionAssociations $service_action_associations;
}

class BatchAssociateServiceActionWithProvisioningArtifactOutput {
  public FailedServiceActionAssociations $failed_service_action_associations;
}

class BatchDisassociateServiceActionFromProvisioningArtifactInput {
  public AcceptLanguage $accept_language;
  public ServiceActionAssociations $service_action_associations;
}

class BatchDisassociateServiceActionFromProvisioningArtifactOutput {
  public FailedServiceActionAssociations $failed_service_action_associations;
}

class BudgetDetail {
  public BudgetName $budget_name;
}

class BudgetName {
}

class Budgets {
}

class CausingEntity {
}

class ChangeAction {
}

class CloudWatchDashboard {
  public CloudWatchDashboardName $name;
}

class CloudWatchDashboardName {
}

class CloudWatchDashboards {
}

class ConstraintDescription {
}

class ConstraintDetail {
  public Id $constraint_id;
  public ConstraintDescription $description;
  public AccountId $owner;
  public Id $portfolio_id;
  public Id $product_id;
  public ConstraintType $type;
}

class ConstraintDetails {
}

class ConstraintParameters {
}

class ConstraintSummaries {
}

class ConstraintSummary {
  public ConstraintDescription $description;
  public ConstraintType $type;
}

class ConstraintType {
}

class CopyOption {
}

class CopyOptions {
}

class CopyProductInput {
  public AcceptLanguage $accept_language;
  public CopyOptions $copy_options;
  public IdempotencyToken $idempotency_token;
  public ProductArn $source_product_arn;
  public SourceProvisioningArtifactProperties $source_provisioning_artifact_identifiers;
  public Id $target_product_id;
  public ProductViewName $target_product_name;
}

class CopyProductOutput {
  public Id $copy_product_token;
}

class CopyProductStatus {
}

class CreateConstraintInput {
  public AcceptLanguage $accept_language;
  public ConstraintDescription $description;
  public IdempotencyToken $idempotency_token;
  public ConstraintParameters $parameters;
  public Id $portfolio_id;
  public Id $product_id;
  public ConstraintType $type;
}

class CreateConstraintOutput {
  public ConstraintDetail $constraint_detail;
  public ConstraintParameters $constraint_parameters;
  public Status $status;
}

class CreatePortfolioInput {
  public AcceptLanguage $accept_language;
  public PortfolioDescription $description;
  public PortfolioDisplayName $display_name;
  public IdempotencyToken $idempotency_token;
  public ProviderName $provider_name;
  public AddTags $tags;
}

class CreatePortfolioOutput {
  public PortfolioDetail $portfolio_detail;
  public Tags $tags;
}

class CreatePortfolioShareInput {
  public AcceptLanguage $accept_language;
  public AccountId $account_id;
  public OrganizationNode $organization_node;
  public Id $portfolio_id;
}

class CreatePortfolioShareOutput {
  public Id $portfolio_share_token;
}

class CreateProductInput {
  public AcceptLanguage $accept_language;
  public ProductViewShortDescription $description;
  public ProductViewOwner $distributor;
  public IdempotencyToken $idempotency_token;
  public ProductViewName $name;
  public ProductViewOwner $owner;
  public ProductType $product_type;
  public ProvisioningArtifactProperties $provisioning_artifact_parameters;
  public SupportDescription $support_description;
  public SupportEmail $support_email;
  public SupportUrl $support_url;
  public AddTags $tags;
}

class CreateProductOutput {
  public ProductViewDetail $product_view_detail;
  public ProvisioningArtifactDetail $provisioning_artifact_detail;
  public Tags $tags;
}

class CreateProvisionedProductPlanInput {
  public AcceptLanguage $accept_language;
  public IdempotencyToken $idempotency_token;
  public NotificationArns $notification_arns;
  public Id $path_id;
  public ProvisionedProductPlanName $plan_name;
  public ProvisionedProductPlanType $plan_type;
  public Id $product_id;
  public ProvisionedProductName $provisioned_product_name;
  public Id $provisioning_artifact_id;
  public UpdateProvisioningParameters $provisioning_parameters;
  public Tags $tags;
}

class CreateProvisionedProductPlanOutput {
  public Id $plan_id;
  public ProvisionedProductPlanName $plan_name;
  public Id $provision_product_id;
  public ProvisionedProductName $provisioned_product_name;
  public Id $provisioning_artifact_id;
}

class CreateProvisioningArtifactInput {
  public AcceptLanguage $accept_language;
  public IdempotencyToken $idempotency_token;
  public ProvisioningArtifactProperties $parameters;
  public Id $product_id;
}

class CreateProvisioningArtifactOutput {
  public ProvisioningArtifactInfo $info;
  public ProvisioningArtifactDetail $provisioning_artifact_detail;
  public Status $status;
}

class CreateServiceActionInput {
  public AcceptLanguage $accept_language;
  public ServiceActionDefinitionMap $definition;
  public ServiceActionDefinitionType $definition_type;
  public ServiceActionDescription $description;
  public IdempotencyToken $idempotency_token;
  public ServiceActionName $name;
}

class CreateServiceActionOutput {
  public ServiceActionDetail $service_action_detail;
}

class CreateTagOptionInput {
  public TagOptionKey $key;
  public TagOptionValue $value;
}

class CreateTagOptionOutput {
  public TagOptionDetail $tag_option_detail;
}

class CreatedTime {
}

class CreationTime {
}

class DefaultValue {
}

class DeleteConstraintInput {
  public AcceptLanguage $accept_language;
  public Id $id;
}

class DeleteConstraintOutput {
}

class DeletePortfolioInput {
  public AcceptLanguage $accept_language;
  public Id $id;
}

class DeletePortfolioOutput {
}

class DeletePortfolioShareInput {
  public AcceptLanguage $accept_language;
  public AccountId $account_id;
  public OrganizationNode $organization_node;
  public Id $portfolio_id;
}

class DeletePortfolioShareOutput {
  public Id $portfolio_share_token;
}

class DeleteProductInput {
  public AcceptLanguage $accept_language;
  public Id $id;
}

class DeleteProductOutput {
}

class DeleteProvisionedProductPlanInput {
  public AcceptLanguage $accept_language;
  public IgnoreErrors $ignore_errors;
  public Id $plan_id;
}

class DeleteProvisionedProductPlanOutput {
}

class DeleteProvisioningArtifactInput {
  public AcceptLanguage $accept_language;
  public Id $product_id;
  public Id $provisioning_artifact_id;
}

class DeleteProvisioningArtifactOutput {
}

class DeleteServiceActionInput {
  public AcceptLanguage $accept_language;
  public Id $id;
}

class DeleteServiceActionOutput {
}

class DeleteTagOptionInput {
  public TagOptionId $id;
}

class DeleteTagOptionOutput {
}

class DescribeConstraintInput {
  public AcceptLanguage $accept_language;
  public Id $id;
}

class DescribeConstraintOutput {
  public ConstraintDetail $constraint_detail;
  public ConstraintParameters $constraint_parameters;
  public Status $status;
}

class DescribeCopyProductStatusInput {
  public AcceptLanguage $accept_language;
  public Id $copy_product_token;
}

class DescribeCopyProductStatusOutput {
  public CopyProductStatus $copy_product_status;
  public StatusDetail $status_detail;
  public Id $target_product_id;
}

class DescribePortfolioInput {
  public AcceptLanguage $accept_language;
  public Id $id;
}

class DescribePortfolioOutput {
  public Budgets $budgets;
  public PortfolioDetail $portfolio_detail;
  public TagOptionDetails $tag_options;
  public Tags $tags;
}

class DescribePortfolioShareStatusInput {
  public Id $portfolio_share_token;
}

class DescribePortfolioShareStatusOutput {
  public OrganizationNodeValue $organization_node_value;
  public Id $portfolio_id;
  public Id $portfolio_share_token;
  public ShareDetails $share_details;
  public ShareStatus $status;
}

class DescribeProductAsAdminInput {
  public AcceptLanguage $accept_language;
  public Id $id;
}

class DescribeProductAsAdminOutput {
  public Budgets $budgets;
  public ProductViewDetail $product_view_detail;
  public ProvisioningArtifactSummaries $provisioning_artifact_summaries;
  public TagOptionDetails $tag_options;
  public Tags $tags;
}

class DescribeProductInput {
  public AcceptLanguage $accept_language;
  public Id $id;
}

class DescribeProductOutput {
  public Budgets $budgets;
  public ProductViewSummary $product_view_summary;
  public ProvisioningArtifacts $provisioning_artifacts;
}

class DescribeProductViewInput {
  public AcceptLanguage $accept_language;
  public Id $id;
}

class DescribeProductViewOutput {
  public ProductViewSummary $product_view_summary;
  public ProvisioningArtifacts $provisioning_artifacts;
}

class DescribeProvisionedProductInput {
  public AcceptLanguage $accept_language;
  public Id $id;
}

class DescribeProvisionedProductOutput {
  public CloudWatchDashboards $cloud_watch_dashboards;
  public ProvisionedProductDetail $provisioned_product_detail;
}

class DescribeProvisionedProductPlanInput {
  public AcceptLanguage $accept_language;
  public PageSize $page_size;
  public PageToken $page_token;
  public Id $plan_id;
}

class DescribeProvisionedProductPlanOutput {
  public PageToken $next_page_token;
  public ProvisionedProductPlanDetails $provisioned_product_plan_details;
  public ResourceChanges $resource_changes;
}

class DescribeProvisioningArtifactInput {
  public AcceptLanguage $accept_language;
  public Id $product_id;
  public Id $provisioning_artifact_id;
  public Verbose $verbose;
}

class DescribeProvisioningArtifactOutput {
  public ProvisioningArtifactInfo $info;
  public ProvisioningArtifactDetail $provisioning_artifact_detail;
  public Status $status;
}

class DescribeProvisioningParametersInput {
  public AcceptLanguage $accept_language;
  public Id $path_id;
  public Id $product_id;
  public Id $provisioning_artifact_id;
}

class DescribeProvisioningParametersOutput {
  public ConstraintSummaries $constraint_summaries;
  public ProvisioningArtifactParameters $provisioning_artifact_parameters;
  public ProvisioningArtifactPreferences $provisioning_artifact_preferences;
  public TagOptionSummaries $tag_options;
  public UsageInstructions $usage_instructions;
}

class DescribeRecordInput {
  public AcceptLanguage $accept_language;
  public Id $id;
  public PageSize $page_size;
  public PageToken $page_token;
}

class DescribeRecordOutput {
  public PageToken $next_page_token;
  public RecordDetail $record_detail;
  public RecordOutputs $record_outputs;
}

class DescribeServiceActionExecutionParametersInput {
  public AcceptLanguage $accept_language;
  public Id $provisioned_product_id;
  public Id $service_action_id;
}

class DescribeServiceActionExecutionParametersOutput {
  public ExecutionParameters $service_action_parameters;
}

class DescribeServiceActionInput {
  public AcceptLanguage $accept_language;
  public Id $id;
}

class DescribeServiceActionOutput {
  public ServiceActionDetail $service_action_detail;
}

class DescribeTagOptionInput {
  public TagOptionId $id;
}

class DescribeTagOptionOutput {
  public TagOptionDetail $tag_option_detail;
}

class Description {
}

class DisableAWSOrganizationsAccessInput {
}

class DisableAWSOrganizationsAccessOutput {
}

class DisableTemplateValidation {
}

class DisassociateBudgetFromResourceInput {
  public BudgetName $budget_name;
  public Id $resource_id;
}

class DisassociateBudgetFromResourceOutput {
}

class DisassociatePrincipalFromPortfolioInput {
  public AcceptLanguage $accept_language;
  public Id $portfolio_id;
  public PrincipalARN $principal_arn;
}

class DisassociatePrincipalFromPortfolioOutput {
}

class DisassociateProductFromPortfolioInput {
  public AcceptLanguage $accept_language;
  public Id $portfolio_id;
  public Id $product_id;
}

class DisassociateProductFromPortfolioOutput {
}

class DisassociateServiceActionFromProvisioningArtifactInput {
  public AcceptLanguage $accept_language;
  public Id $product_id;
  public Id $provisioning_artifact_id;
  public Id $service_action_id;
}

class DisassociateServiceActionFromProvisioningArtifactOutput {
}

class DisassociateTagOptionFromResourceInput {
  public ResourceId $resource_id;
  public TagOptionId $tag_option_id;
}

class DisassociateTagOptionFromResourceOutput {
}

class DuplicateResourceException {
}

class EnableAWSOrganizationsAccessInput {
}

class EnableAWSOrganizationsAccessOutput {
}

class Error {
}

class ErrorCode {
}

class ErrorDescription {
}

class EvaluationType {
}

class ExecuteProvisionedProductPlanInput {
  public AcceptLanguage $accept_language;
  public IdempotencyToken $idempotency_token;
  public Id $plan_id;
}

class ExecuteProvisionedProductPlanOutput {
  public RecordDetail $record_detail;
}

class ExecuteProvisionedProductServiceActionInput {
  public AcceptLanguage $accept_language;
  public IdempotencyToken $execute_token;
  public ExecutionParameterMap $parameters;
  public Id $provisioned_product_id;
  public Id $service_action_id;
}

class ExecuteProvisionedProductServiceActionOutput {
  public RecordDetail $record_detail;
}

class ExecutionParameter {
  public ExecutionParameterValueList $default_values;
  public ExecutionParameterKey $name;
  public ExecutionParameterType $type;
}

class ExecutionParameterKey {
}

class ExecutionParameterMap {
}

class ExecutionParameterType {
}

class ExecutionParameterValue {
}

class ExecutionParameterValueList {
}

class ExecutionParameters {
}

class FailedServiceActionAssociation {
  public ServiceActionAssociationErrorCode $error_code;
  public ServiceActionAssociationErrorMessage $error_message;
  public Id $product_id;
  public Id $provisioning_artifact_id;
  public Id $service_action_id;
}

class FailedServiceActionAssociations {
}

class GetAWSOrganizationsAccessStatusInput {
}

class GetAWSOrganizationsAccessStatusOutput {
  public AccessStatus $access_status;
}

class HasDefaultPath {
}

class Id {
}

class IdempotencyToken {
}

class IgnoreErrors {
}

class InstructionType {
}

class InstructionValue {
}

class InvalidParametersException {
}

class InvalidStateException {
}

class LastRequestId {
}

class LaunchPathSummaries {
}

class LaunchPathSummary {
  public ConstraintSummaries $constraint_summaries;
  public Id $id;
  public PortfolioName $name;
  public Tags $tags;
}

class LimitExceededException {
}

class ListAcceptedPortfolioSharesInput {
  public AcceptLanguage $accept_language;
  public PageSize $page_size;
  public PageToken $page_token;
  public PortfolioShareType $portfolio_share_type;
}

class ListAcceptedPortfolioSharesOutput {
  public PageToken $next_page_token;
  public PortfolioDetails $portfolio_details;
}

class ListBudgetsForResourceInput {
  public AcceptLanguage $accept_language;
  public PageSize $page_size;
  public PageToken $page_token;
  public Id $resource_id;
}

class ListBudgetsForResourceOutput {
  public Budgets $budgets;
  public PageToken $next_page_token;
}

class ListConstraintsForPortfolioInput {
  public AcceptLanguage $accept_language;
  public PageSize $page_size;
  public PageToken $page_token;
  public Id $portfolio_id;
  public Id $product_id;
}

class ListConstraintsForPortfolioOutput {
  public ConstraintDetails $constraint_details;
  public PageToken $next_page_token;
}

class ListLaunchPathsInput {
  public AcceptLanguage $accept_language;
  public PageSize $page_size;
  public PageToken $page_token;
  public Id $product_id;
}

class ListLaunchPathsOutput {
  public LaunchPathSummaries $launch_path_summaries;
  public PageToken $next_page_token;
}

class ListOrganizationPortfolioAccessInput {
  public AcceptLanguage $accept_language;
  public OrganizationNodeType $organization_node_type;
  public PageSize $page_size;
  public PageToken $page_token;
  public Id $portfolio_id;
}

class ListOrganizationPortfolioAccessOutput {
  public PageToken $next_page_token;
  public OrganizationNodes $organization_nodes;
}

class ListPortfolioAccessInput {
  public AcceptLanguage $accept_language;
  public Id $organization_parent_id;
  public PageSize $page_size;
  public PageToken $page_token;
  public Id $portfolio_id;
}

class ListPortfolioAccessOutput {
  public AccountIds $account_ids;
  public PageToken $next_page_token;
}

class ListPortfoliosForProductInput {
  public AcceptLanguage $accept_language;
  public PageSize $page_size;
  public PageToken $page_token;
  public Id $product_id;
}

class ListPortfoliosForProductOutput {
  public PageToken $next_page_token;
  public PortfolioDetails $portfolio_details;
}

class ListPortfoliosInput {
  public AcceptLanguage $accept_language;
  public PageSize $page_size;
  public PageToken $page_token;
}

class ListPortfoliosOutput {
  public PageToken $next_page_token;
  public PortfolioDetails $portfolio_details;
}

class ListPrincipalsForPortfolioInput {
  public AcceptLanguage $accept_language;
  public PageSize $page_size;
  public PageToken $page_token;
  public Id $portfolio_id;
}

class ListPrincipalsForPortfolioOutput {
  public PageToken $next_page_token;
  public Principals $principals;
}

class ListProvisionedProductPlansInput {
  public AcceptLanguage $accept_language;
  public AccessLevelFilter $access_level_filter;
  public PageSize $page_size;
  public PageToken $page_token;
  public Id $provision_product_id;
}

class ListProvisionedProductPlansOutput {
  public PageToken $next_page_token;
  public ProvisionedProductPlans $provisioned_product_plans;
}

class ListProvisioningArtifactsForServiceActionInput {
  public AcceptLanguage $accept_language;
  public PageSize $page_size;
  public PageToken $page_token;
  public Id $service_action_id;
}

class ListProvisioningArtifactsForServiceActionOutput {
  public PageToken $next_page_token;
  public ProvisioningArtifactViews $provisioning_artifact_views;
}

class ListProvisioningArtifactsInput {
  public AcceptLanguage $accept_language;
  public Id $product_id;
}

class ListProvisioningArtifactsOutput {
  public PageToken $next_page_token;
  public ProvisioningArtifactDetails $provisioning_artifact_details;
}

class ListRecordHistoryInput {
  public AcceptLanguage $accept_language;
  public AccessLevelFilter $access_level_filter;
  public PageSize $page_size;
  public PageToken $page_token;
  public ListRecordHistorySearchFilter $search_filter;
}

class ListRecordHistoryOutput {
  public PageToken $next_page_token;
  public RecordDetails $record_details;
}

class ListRecordHistorySearchFilter {
  public SearchFilterKey $key;
  public SearchFilterValue $value;
}

class ListResourcesForTagOptionInput {
  public PageSize $page_size;
  public PageToken $page_token;
  public ResourceType $resource_type;
  public TagOptionId $tag_option_id;
}

class ListResourcesForTagOptionOutput {
  public PageToken $page_token;
  public ResourceDetails $resource_details;
}

class ListServiceActionsForProvisioningArtifactInput {
  public AcceptLanguage $accept_language;
  public PageSize $page_size;
  public PageToken $page_token;
  public Id $product_id;
  public Id $provisioning_artifact_id;
}

class ListServiceActionsForProvisioningArtifactOutput {
  public PageToken $next_page_token;
  public ServiceActionSummaries $service_action_summaries;
}

class ListServiceActionsInput {
  public AcceptLanguage $accept_language;
  public PageSize $page_size;
  public PageToken $page_token;
}

class ListServiceActionsOutput {
  public PageToken $next_page_token;
  public ServiceActionSummaries $service_action_summaries;
}

class ListStackInstancesForProvisionedProductInput {
  public AcceptLanguage $accept_language;
  public PageSize $page_size;
  public PageToken $page_token;
  public Id $provisioned_product_id;
}

class ListStackInstancesForProvisionedProductOutput {
  public PageToken $next_page_token;
  public StackInstances $stack_instances;
}

class ListTagOptionsFilters {
  public TagOptionActive $active;
  public TagOptionKey $key;
  public TagOptionValue $value;
}

class ListTagOptionsInput {
  public ListTagOptionsFilters $filters;
  public PageSize $page_size;
  public PageToken $page_token;
}

class ListTagOptionsOutput {
  public PageToken $page_token;
  public TagOptionDetails $tag_option_details;
}

class LogicalResourceId {
}

class Message {
}

class Namespaces {
}

class NoEcho {
}

class NotificationArn {
}

class NotificationArns {
}

class OperationNotSupportedException {
}

class OrganizationNode {
  public OrganizationNodeType $type;
  public OrganizationNodeValue $value;
}

class OrganizationNodeType {
}

class OrganizationNodeValue {
}

class OrganizationNodes {
}

class OutputKey {
}

class OutputValue {
}

class PageSize {
}

class PageToken {
}

class ParameterConstraints {
  public AllowedValues $allowed_values;
}

class ParameterKey {
}

class ParameterType {
}

class ParameterValue {
}

class PhysicalId {
}

class PhysicalResourceId {
}

class PlanResourceType {
}

class PortfolioDescription {
}

class PortfolioDetail {
  public ResourceARN $arn;
  public CreationTime $created_time;
  public PortfolioDescription $description;
  public PortfolioDisplayName $display_name;
  public Id $id;
  public ProviderName $provider_name;
}

class PortfolioDetails {
}

class PortfolioDisplayName {
}

class PortfolioName {
}

class PortfolioShareType {
}

class Principal {
  public PrincipalARN $principal_arn;
  public PrincipalType $principal_type;
}

class PrincipalARN {
}

class PrincipalType {
}

class Principals {
}

class ProductArn {
}

class ProductSource {
}

class ProductType {
}

class ProductViewAggregationType {
}

class ProductViewAggregationValue {
  public ApproximateCount $approximate_count;
  public AttributeValue $value;
}

class ProductViewAggregationValues {
}

class ProductViewAggregations {
}

class ProductViewDetail {
  public CreatedTime $created_time;
  public ResourceARN $product_arn;
  public ProductViewSummary $product_view_summary;
  public Status $status;
}

class ProductViewDetails {
}

class ProductViewDistributor {
}

class ProductViewFilterBy {
}

class ProductViewFilterValue {
}

class ProductViewFilterValues {
}

class ProductViewFilters {
}

class ProductViewName {
}

class ProductViewOwner {
}

class ProductViewShortDescription {
}

class ProductViewSortBy {
}

class ProductViewSummaries {
}

class ProductViewSummary {
  public ProductViewDistributor $distributor;
  public HasDefaultPath $has_default_path;
  public Id $id;
  public ProductViewName $name;
  public ProductViewOwner $owner;
  public Id $product_id;
  public ProductViewShortDescription $short_description;
  public SupportDescription $support_description;
  public SupportEmail $support_email;
  public SupportUrl $support_url;
  public ProductType $type;
}

class PropertyKey {
}

class PropertyName {
}

class PropertyValue {
}

class ProviderName {
}

class ProvisionProductInput {
  public AcceptLanguage $accept_language;
  public NotificationArns $notification_arns;
  public Id $path_id;
  public Id $product_id;
  public IdempotencyToken $provision_token;
  public ProvisionedProductName $provisioned_product_name;
  public Id $provisioning_artifact_id;
  public ProvisioningParameters $provisioning_parameters;
  public ProvisioningPreferences $provisioning_preferences;
  public Tags $tags;
}

class ProvisionProductOutput {
  public RecordDetail $record_detail;
}

class ProvisionedProductAttribute {
  public ProvisionedProductNameOrArn $arn;
  public CreatedTime $created_time;
  public Id $id;
  public IdempotencyToken $idempotency_token;
  public Id $last_record_id;
  public ProvisionedProductNameOrArn $name;
  public PhysicalId $physical_id;
  public Id $product_id;
  public Id $provisioning_artifact_id;
  public ProvisionedProductStatus $status;
  public ProvisionedProductStatusMessage $status_message;
  public Tags $tags;
  public ProvisionedProductType $type;
  public UserArn $user_arn;
  public UserArnSession $user_arn_session;
}

class ProvisionedProductAttributes {
}

class ProvisionedProductDetail {
  public ProvisionedProductNameOrArn $arn;
  public CreatedTime $created_time;
  public ProvisionedProductId $id;
  public IdempotencyToken $idempotency_token;
  public LastRequestId $last_record_id;
  public ProvisionedProductNameOrArn $name;
  public Id $product_id;
  public Id $provisioning_artifact_id;
  public ProvisionedProductStatus $status;
  public ProvisionedProductStatusMessage $status_message;
  public ProvisionedProductType $type;
}

class ProvisionedProductDetails {
}

class ProvisionedProductFilters {
}

class ProvisionedProductId {
}

class ProvisionedProductName {
}

class ProvisionedProductNameOrArn {
}

class ProvisionedProductPlanDetails {
  public CreatedTime $created_time;
  public NotificationArns $notification_arns;
  public Id $path_id;
  public Id $plan_id;
  public ProvisionedProductPlanName $plan_name;
  public ProvisionedProductPlanType $plan_type;
  public Id $product_id;
  public Id $provision_product_id;
  public ProvisionedProductName $provision_product_name;
  public Id $provisioning_artifact_id;
  public UpdateProvisioningParameters $provisioning_parameters;
  public ProvisionedProductPlanStatus $status;
  public StatusMessage $status_message;
  public Tags $tags;
  public UpdatedTime $updated_time;
}

class ProvisionedProductPlanName {
}

class ProvisionedProductPlanStatus {
}

class ProvisionedProductPlanSummary {
  public Id $plan_id;
  public ProvisionedProductPlanName $plan_name;
  public ProvisionedProductPlanType $plan_type;
  public Id $provision_product_id;
  public ProvisionedProductName $provision_product_name;
  public Id $provisioning_artifact_id;
}

class ProvisionedProductPlanType {
}

class ProvisionedProductPlans {
}

class ProvisionedProductProperties {
}

class ProvisionedProductStatus {
}

class ProvisionedProductStatusMessage {
}

class ProvisionedProductType {
}

class ProvisionedProductViewFilterBy {
}

class ProvisionedProductViewFilterValue {
}

class ProvisionedProductViewFilterValues {
}

class ProvisioningArtifact {
  public ProvisioningArtifactCreatedTime $created_time;
  public ProvisioningArtifactDescription $description;
  public ProvisioningArtifactGuidance $guidance;
  public Id $id;
  public ProvisioningArtifactName $name;
}

class ProvisioningArtifactActive {
}

class ProvisioningArtifactCreatedTime {
}

class ProvisioningArtifactDescription {
}

class ProvisioningArtifactDetail {
  public ProvisioningArtifactActive $active;
  public CreationTime $created_time;
  public ProvisioningArtifactName $description;
  public ProvisioningArtifactGuidance $guidance;
  public Id $id;
  public ProvisioningArtifactName $name;
  public ProvisioningArtifactType $type;
}

class ProvisioningArtifactDetails {
}

class ProvisioningArtifactGuidance {
}

class ProvisioningArtifactInfo {
}

class ProvisioningArtifactInfoKey {
}

class ProvisioningArtifactInfoValue {
}

class ProvisioningArtifactName {
}

class ProvisioningArtifactParameter {
  public DefaultValue $default_value;
  public Description $description;
  public NoEcho $is_no_echo;
  public ParameterConstraints $parameter_constraints;
  public ParameterKey $parameter_key;
  public ParameterType $parameter_type;
}

class ProvisioningArtifactParameters {
}

class ProvisioningArtifactPreferences {
  public StackSetAccounts $stack_set_accounts;
  public StackSetRegions $stack_set_regions;
}

class ProvisioningArtifactProperties {
  public ProvisioningArtifactDescription $description;
  public DisableTemplateValidation $disable_template_validation;
  public ProvisioningArtifactInfo $info;
  public ProvisioningArtifactName $name;
  public ProvisioningArtifactType $type;
}

class ProvisioningArtifactPropertyName {
}

class ProvisioningArtifactPropertyValue {
}

class ProvisioningArtifactSummaries {
}

class ProvisioningArtifactSummary {
  public ProvisioningArtifactCreatedTime $created_time;
  public ProvisioningArtifactDescription $description;
  public Id $id;
  public ProvisioningArtifactName $name;
  public ProvisioningArtifactInfo $provisioning_artifact_metadata;
}

class ProvisioningArtifactType {
}

class ProvisioningArtifactView {
  public ProductViewSummary $product_view_summary;
  public ProvisioningArtifact $provisioning_artifact;
}

class ProvisioningArtifactViews {
}

class ProvisioningArtifacts {
}

class ProvisioningParameter {
  public ParameterKey $key;
  public ParameterValue $value;
}

class ProvisioningParameters {
}

class ProvisioningPreferences {
  public StackSetAccounts $stack_set_accounts;
  public StackSetFailureToleranceCount $stack_set_failure_tolerance_count;
  public StackSetFailureTolerancePercentage $stack_set_failure_tolerance_percentage;
  public StackSetMaxConcurrencyCount $stack_set_max_concurrency_count;
  public StackSetMaxConcurrencyPercentage $stack_set_max_concurrency_percentage;
  public StackSetRegions $stack_set_regions;
}

class RecordDetail {
  public CreatedTime $created_time;
  public Id $path_id;
  public Id $product_id;
  public Id $provisioned_product_id;
  public ProvisionedProductName $provisioned_product_name;
  public ProvisionedProductType $provisioned_product_type;
  public Id $provisioning_artifact_id;
  public RecordErrors $record_errors;
  public Id $record_id;
  public RecordTags $record_tags;
  public RecordType $record_type;
  public RecordStatus $status;
  public UpdatedTime $updated_time;
}

class RecordDetails {
}

class RecordError {
  public ErrorCode $code;
  public ErrorDescription $description;
}

class RecordErrors {
}

class RecordOutput {
  public Description $description;
  public OutputKey $output_key;
  public OutputValue $output_value;
}

class RecordOutputs {
}

class RecordStatus {
}

class RecordTag {
  public RecordTagKey $key;
  public RecordTagValue $value;
}

class RecordTagKey {
}

class RecordTagValue {
}

class RecordTags {
}

class RecordType {
}

class Region {
}

class RejectPortfolioShareInput {
  public AcceptLanguage $accept_language;
  public Id $portfolio_id;
  public PortfolioShareType $portfolio_share_type;
}

class RejectPortfolioShareOutput {
}

class Replacement {
}

class RequiresRecreation {
}

class ResourceARN {
}

class ResourceAttribute {
}

class ResourceChange {
  public ChangeAction $action;
  public ResourceChangeDetails $details;
  public LogicalResourceId $logical_resource_id;
  public PhysicalResourceId $physical_resource_id;
  public Replacement $replacement;
  public PlanResourceType $resource_type;
  public Scope $scope;
}

class ResourceChangeDetail {
  public CausingEntity $causing_entity;
  public EvaluationType $evaluation;
  public ResourceTargetDefinition $target;
}

class ResourceChangeDetails {
}

class ResourceChanges {
}

class ResourceDetail {
  public ResourceDetailARN $arn;
  public ResourceDetailCreatedTime $created_time;
  public ResourceDetailDescription $description;
  public ResourceDetailId $id;
  public ResourceDetailName $name;
}

class ResourceDetailARN {
}

class ResourceDetailCreatedTime {
}

class ResourceDetailDescription {
}

class ResourceDetailId {
}

class ResourceDetailName {
}

class ResourceDetails {
}

class ResourceId {
}

class ResourceInUseException {
}

class ResourceNotFoundException {
}

class ResourceTargetDefinition {
  public ResourceAttribute $attribute;
  public PropertyName $name;
  public RequiresRecreation $requires_recreation;
}

class ResourceType {
}

class ScanProvisionedProductsInput {
  public AcceptLanguage $accept_language;
  public AccessLevelFilter $access_level_filter;
  public PageSize $page_size;
  public PageToken $page_token;
}

class ScanProvisionedProductsOutput {
  public PageToken $next_page_token;
  public ProvisionedProductDetails $provisioned_products;
}

class Scope {
}

class SearchFilterKey {
}

class SearchFilterValue {
}

class SearchProductsAsAdminInput {
  public AcceptLanguage $accept_language;
  public ProductViewFilters $filters;
  public PageSize $page_size;
  public PageToken $page_token;
  public Id $portfolio_id;
  public ProductSource $product_source;
  public ProductViewSortBy $sort_by;
  public SortOrder $sort_order;
}

class SearchProductsAsAdminOutput {
  public PageToken $next_page_token;
  public ProductViewDetails $product_view_details;
}

class SearchProductsInput {
  public AcceptLanguage $accept_language;
  public ProductViewFilters $filters;
  public PageSize $page_size;
  public PageToken $page_token;
  public ProductViewSortBy $sort_by;
  public SortOrder $sort_order;
}

class SearchProductsOutput {
  public PageToken $next_page_token;
  public ProductViewAggregations $product_view_aggregations;
  public ProductViewSummaries $product_view_summaries;
}

class SearchProvisionedProductsInput {
  public AcceptLanguage $accept_language;
  public AccessLevelFilter $access_level_filter;
  public ProvisionedProductFilters $filters;
  public SearchProvisionedProductsPageSize $page_size;
  public PageToken $page_token;
  public SortField $sort_by;
  public SortOrder $sort_order;
}

class SearchProvisionedProductsOutput {
  public PageToken $next_page_token;
  public ProvisionedProductAttributes $provisioned_products;
  public TotalResultsCount $total_results_count;
}

class SearchProvisionedProductsPageSize {
}

class ServiceActionAssociation {
  public Id $product_id;
  public Id $provisioning_artifact_id;
  public Id $service_action_id;
}

class ServiceActionAssociationErrorCode {
}

class ServiceActionAssociationErrorMessage {
}

class ServiceActionAssociations {
}

class ServiceActionDefinitionKey {
}

class ServiceActionDefinitionMap {
}

class ServiceActionDefinitionType {
}

class ServiceActionDefinitionValue {
}

class ServiceActionDescription {
}

class ServiceActionDetail {
  public ServiceActionDefinitionMap $definition;
  public ServiceActionSummary $service_action_summary;
}

class ServiceActionName {
}

class ServiceActionSummaries {
}

class ServiceActionSummary {
  public ServiceActionDefinitionType $definition_type;
  public ServiceActionDescription $description;
  public Id $id;
  public ServiceActionName $name;
}

class ShareDetails {
  public ShareErrors $share_errors;
  public SuccessfulShares $successful_shares;
}

class ShareError {
  public Namespaces $accounts;
  public Error $error;
  public Message $message;
}

class ShareErrors {
}

class ShareStatus {
}

class SortField {
}

class SortOrder {
}

class SourceProvisioningArtifactProperties {
}

class SourceProvisioningArtifactPropertiesMap {
}

class StackInstance {
  public AccountId $account;
  public Region $region;
  public StackInstanceStatus $stack_instance_status;
}

class StackInstanceStatus {
}

class StackInstances {
}

class StackSetAccounts {
}

class StackSetFailureToleranceCount {
}

class StackSetFailureTolerancePercentage {
}

class StackSetMaxConcurrencyCount {
}

class StackSetMaxConcurrencyPercentage {
}

class StackSetOperationType {
}

class StackSetRegions {
}

class Status {
}

class StatusDetail {
}

class StatusMessage {
}

class SuccessfulShares {
}

class SupportDescription {
}

class SupportEmail {
}

class SupportUrl {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeys {
}

class TagOptionActive {
}

class TagOptionDetail {
  public TagOptionActive $active;
  public TagOptionId $id;
  public TagOptionKey $key;
  public TagOptionValue $value;
}

class TagOptionDetails {
}

class TagOptionId {
}

class TagOptionKey {
}

class TagOptionNotMigratedException {
}

class TagOptionSummaries {
}

class TagOptionSummary {
  public TagOptionKey $key;
  public TagOptionValues $values;
}

class TagOptionValue {
}

class TagOptionValues {
}

class TagValue {
}

class Tags {
}

class TerminateProvisionedProductInput {
  public AcceptLanguage $accept_language;
  public IgnoreErrors $ignore_errors;
  public Id $provisioned_product_id;
  public ProvisionedProductNameOrArn $provisioned_product_name;
  public IdempotencyToken $terminate_token;
}

class TerminateProvisionedProductOutput {
  public RecordDetail $record_detail;
}

class TotalResultsCount {
}

class UpdateConstraintInput {
  public AcceptLanguage $accept_language;
  public ConstraintDescription $description;
  public Id $id;
  public ConstraintParameters $parameters;
}

class UpdateConstraintOutput {
  public ConstraintDetail $constraint_detail;
  public ConstraintParameters $constraint_parameters;
  public Status $status;
}

class UpdatePortfolioInput {
  public AcceptLanguage $accept_language;
  public AddTags $add_tags;
  public PortfolioDescription $description;
  public PortfolioDisplayName $display_name;
  public Id $id;
  public ProviderName $provider_name;
  public TagKeys $remove_tags;
}

class UpdatePortfolioOutput {
  public PortfolioDetail $portfolio_detail;
  public Tags $tags;
}

class UpdateProductInput {
  public AcceptLanguage $accept_language;
  public AddTags $add_tags;
  public ProductViewShortDescription $description;
  public ProductViewOwner $distributor;
  public Id $id;
  public ProductViewName $name;
  public ProductViewOwner $owner;
  public TagKeys $remove_tags;
  public SupportDescription $support_description;
  public SupportEmail $support_email;
  public SupportUrl $support_url;
}

class UpdateProductOutput {
  public ProductViewDetail $product_view_detail;
  public Tags $tags;
}

class UpdateProvisionedProductInput {
  public AcceptLanguage $accept_language;
  public Id $path_id;
  public Id $product_id;
  public Id $provisioned_product_id;
  public ProvisionedProductNameOrArn $provisioned_product_name;
  public Id $provisioning_artifact_id;
  public UpdateProvisioningParameters $provisioning_parameters;
  public UpdateProvisioningPreferences $provisioning_preferences;
  public Tags $tags;
  public IdempotencyToken $update_token;
}

class UpdateProvisionedProductOutput {
  public RecordDetail $record_detail;
}

class UpdateProvisionedProductPropertiesInput {
  public AcceptLanguage $accept_language;
  public IdempotencyToken $idempotency_token;
  public Id $provisioned_product_id;
  public ProvisionedProductProperties $provisioned_product_properties;
}

class UpdateProvisionedProductPropertiesOutput {
  public Id $provisioned_product_id;
  public ProvisionedProductProperties $provisioned_product_properties;
  public Id $record_id;
  public RecordStatus $status;
}

class UpdateProvisioningArtifactInput {
  public AcceptLanguage $accept_language;
  public ProvisioningArtifactActive $active;
  public ProvisioningArtifactDescription $description;
  public ProvisioningArtifactGuidance $guidance;
  public ProvisioningArtifactName $name;
  public Id $product_id;
  public Id $provisioning_artifact_id;
}

class UpdateProvisioningArtifactOutput {
  public ProvisioningArtifactInfo $info;
  public ProvisioningArtifactDetail $provisioning_artifact_detail;
  public Status $status;
}

class UpdateProvisioningParameter {
  public ParameterKey $key;
  public UsePreviousValue $use_previous_value;
  public ParameterValue $value;
}

class UpdateProvisioningParameters {
}

class UpdateProvisioningPreferences {
  public StackSetAccounts $stack_set_accounts;
  public StackSetFailureToleranceCount $stack_set_failure_tolerance_count;
  public StackSetFailureTolerancePercentage $stack_set_failure_tolerance_percentage;
  public StackSetMaxConcurrencyCount $stack_set_max_concurrency_count;
  public StackSetMaxConcurrencyPercentage $stack_set_max_concurrency_percentage;
  public StackSetOperationType $stack_set_operation_type;
  public StackSetRegions $stack_set_regions;
}

class UpdateServiceActionInput {
  public AcceptLanguage $accept_language;
  public ServiceActionDefinitionMap $definition;
  public ServiceActionDescription $description;
  public Id $id;
  public ServiceActionName $name;
}

class UpdateServiceActionOutput {
  public ServiceActionDetail $service_action_detail;
}

class UpdateTagOptionInput {
  public TagOptionActive $active;
  public TagOptionId $id;
  public TagOptionValue $value;
}

class UpdateTagOptionOutput {
  public TagOptionDetail $tag_option_detail;
}

class UpdatedTime {
}

class UsageInstruction {
  public InstructionType $type;
  public InstructionValue $value;
}

class UsageInstructions {
}

class UsePreviousValue {
}

class UserArn {
}

class UserArnSession {
}

class Verbose {
}


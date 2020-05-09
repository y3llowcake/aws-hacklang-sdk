<?hh // strict
namespace slack\aws\cloudsearch;

interface CloudSearch {
  public function BuildSuggesters(BuildSuggestersRequest) Awaitable<Errors\Result<BuildSuggestersResponse>>;
  public function CreateDomain(CreateDomainRequest) Awaitable<Errors\Result<CreateDomainResponse>>;
  public function DefineAnalysisScheme(DefineAnalysisSchemeRequest) Awaitable<Errors\Result<DefineAnalysisSchemeResponse>>;
  public function DefineExpression(DefineExpressionRequest) Awaitable<Errors\Result<DefineExpressionResponse>>;
  public function DefineIndexField(DefineIndexFieldRequest) Awaitable<Errors\Result<DefineIndexFieldResponse>>;
  public function DefineSuggester(DefineSuggesterRequest) Awaitable<Errors\Result<DefineSuggesterResponse>>;
  public function DeleteAnalysisScheme(DeleteAnalysisSchemeRequest) Awaitable<Errors\Result<DeleteAnalysisSchemeResponse>>;
  public function DeleteDomain(DeleteDomainRequest) Awaitable<Errors\Result<DeleteDomainResponse>>;
  public function DeleteExpression(DeleteExpressionRequest) Awaitable<Errors\Result<DeleteExpressionResponse>>;
  public function DeleteIndexField(DeleteIndexFieldRequest) Awaitable<Errors\Result<DeleteIndexFieldResponse>>;
  public function DeleteSuggester(DeleteSuggesterRequest) Awaitable<Errors\Result<DeleteSuggesterResponse>>;
  public function DescribeAnalysisSchemes(DescribeAnalysisSchemesRequest) Awaitable<Errors\Result<DescribeAnalysisSchemesResponse>>;
  public function DescribeAvailabilityOptions(DescribeAvailabilityOptionsRequest) Awaitable<Errors\Result<DescribeAvailabilityOptionsResponse>>;
  public function DescribeDomainEndpointOptions(DescribeDomainEndpointOptionsRequest) Awaitable<Errors\Result<DescribeDomainEndpointOptionsResponse>>;
  public function DescribeDomains(DescribeDomainsRequest) Awaitable<Errors\Result<DescribeDomainsResponse>>;
  public function DescribeExpressions(DescribeExpressionsRequest) Awaitable<Errors\Result<DescribeExpressionsResponse>>;
  public function DescribeIndexFields(DescribeIndexFieldsRequest) Awaitable<Errors\Result<DescribeIndexFieldsResponse>>;
  public function DescribeScalingParameters(DescribeScalingParametersRequest) Awaitable<Errors\Result<DescribeScalingParametersResponse>>;
  public function DescribeServiceAccessPolicies(DescribeServiceAccessPoliciesRequest) Awaitable<Errors\Result<DescribeServiceAccessPoliciesResponse>>;
  public function DescribeSuggesters(DescribeSuggestersRequest) Awaitable<Errors\Result<DescribeSuggestersResponse>>;
  public function IndexDocuments(IndexDocumentsRequest) Awaitable<Errors\Result<IndexDocumentsResponse>>;
  public function ListDomainNames() Awaitable<Errors\Result<ListDomainNamesResponse>>;
  public function UpdateAvailabilityOptions(UpdateAvailabilityOptionsRequest) Awaitable<Errors\Result<UpdateAvailabilityOptionsResponse>>;
  public function UpdateDomainEndpointOptions(UpdateDomainEndpointOptionsRequest) Awaitable<Errors\Result<UpdateDomainEndpointOptionsResponse>>;
  public function UpdateScalingParameters(UpdateScalingParametersRequest) Awaitable<Errors\Result<UpdateScalingParametersResponse>>;
  public function UpdateServiceAccessPolicies(UpdateServiceAccessPoliciesRequest) Awaitable<Errors\Result<UpdateServiceAccessPoliciesResponse>>;
}

class APIVersion {
}

class ARN {
}

class AccessPoliciesStatus {
  public PolicyDocument $options;
  public OptionStatus $status;
}

class AlgorithmicStemming {
}

class AnalysisOptions {
  public AlgorithmicStemming $algorithmic_stemming;
  public string $japanese_tokenization_dictionary;
  public string $stemming_dictionary;
  public string $stopwords;
  public string $synonyms;
}

class AnalysisScheme {
  public AnalysisOptions $analysis_options;
  public AnalysisSchemeLanguage $analysis_scheme_language;
  public StandardName $analysis_scheme_name;
}

class AnalysisSchemeLanguage {
}

class AnalysisSchemeStatus {
  public AnalysisScheme $options;
  public OptionStatus $status;
}

class AnalysisSchemeStatusList {
}

class AvailabilityOptionsStatus {
  public MultiAZ $options;
  public OptionStatus $status;
}

class BaseException {
  public ErrorCode $code;
  public ErrorMessage $message;
}

class Boolean {
}

class BuildSuggestersRequest {
  public DomainName $domain_name;
}

class BuildSuggestersResponse {
  public FieldNameList $field_names;
}

class CreateDomainRequest {
  public DomainName $domain_name;
}

class CreateDomainResponse {
  public DomainStatus $domain_status;
}

class DateArrayOptions {
  public FieldValue $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public FieldNameCommaList $source_fields;
}

class DateOptions {
  public FieldValue $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public boolean $sort_enabled;
  public FieldName $source_field;
}

class DefineAnalysisSchemeRequest {
  public AnalysisScheme $analysis_scheme;
  public DomainName $domain_name;
}

class DefineAnalysisSchemeResponse {
  public AnalysisSchemeStatus $analysis_scheme;
}

class DefineExpressionRequest {
  public DomainName $domain_name;
  public Expression $expression;
}

class DefineExpressionResponse {
  public ExpressionStatus $expression;
}

class DefineIndexFieldRequest {
  public DomainName $domain_name;
  public IndexField $index_field;
}

class DefineIndexFieldResponse {
  public IndexFieldStatus $index_field;
}

class DefineSuggesterRequest {
  public DomainName $domain_name;
  public Suggester $suggester;
}

class DefineSuggesterResponse {
  public SuggesterStatus $suggester;
}

class DeleteAnalysisSchemeRequest {
  public StandardName $analysis_scheme_name;
  public DomainName $domain_name;
}

class DeleteAnalysisSchemeResponse {
  public AnalysisSchemeStatus $analysis_scheme;
}

class DeleteDomainRequest {
  public DomainName $domain_name;
}

class DeleteDomainResponse {
  public DomainStatus $domain_status;
}

class DeleteExpressionRequest {
  public DomainName $domain_name;
  public StandardName $expression_name;
}

class DeleteExpressionResponse {
  public ExpressionStatus $expression;
}

class DeleteIndexFieldRequest {
  public DomainName $domain_name;
  public DynamicFieldName $index_field_name;
}

class DeleteIndexFieldResponse {
  public IndexFieldStatus $index_field;
}

class DeleteSuggesterRequest {
  public DomainName $domain_name;
  public StandardName $suggester_name;
}

class DeleteSuggesterResponse {
  public SuggesterStatus $suggester;
}

class DescribeAnalysisSchemesRequest {
  public StandardNameList $analysis_scheme_names;
  public boolean $deployed;
  public DomainName $domain_name;
}

class DescribeAnalysisSchemesResponse {
  public AnalysisSchemeStatusList $analysis_schemes;
}

class DescribeAvailabilityOptionsRequest {
  public boolean $deployed;
  public DomainName $domain_name;
}

class DescribeAvailabilityOptionsResponse {
  public AvailabilityOptionsStatus $availability_options;
}

class DescribeDomainEndpointOptionsRequest {
  public boolean $deployed;
  public DomainName $domain_name;
}

class DescribeDomainEndpointOptionsResponse {
  public DomainEndpointOptionsStatus $domain_endpoint_options;
}

class DescribeDomainsRequest {
  public DomainNameList $domain_names;
}

class DescribeDomainsResponse {
  public DomainStatusList $domain_status_list;
}

class DescribeExpressionsRequest {
  public boolean $deployed;
  public DomainName $domain_name;
  public StandardNameList $expression_names;
}

class DescribeExpressionsResponse {
  public ExpressionStatusList $expressions;
}

class DescribeIndexFieldsRequest {
  public boolean $deployed;
  public DomainName $domain_name;
  public DynamicFieldNameList $field_names;
}

class DescribeIndexFieldsResponse {
  public IndexFieldStatusList $index_fields;
}

class DescribeScalingParametersRequest {
  public DomainName $domain_name;
}

class DescribeScalingParametersResponse {
  public ScalingParametersStatus $scaling_parameters;
}

class DescribeServiceAccessPoliciesRequest {
  public boolean $deployed;
  public DomainName $domain_name;
}

class DescribeServiceAccessPoliciesResponse {
  public AccessPoliciesStatus $access_policies;
}

class DescribeSuggestersRequest {
  public boolean $deployed;
  public DomainName $domain_name;
  public StandardNameList $suggester_names;
}

class DescribeSuggestersResponse {
  public SuggesterStatusList $suggesters;
}

class DisabledOperationException {
}

class DocumentSuggesterOptions {
  public SuggesterFuzzyMatching $fuzzy_matching;
  public string $sort_expression;
  public FieldName $source_field;
}

class DomainEndpointOptions {
  public boolean $enforce_https;
  public TLSSecurityPolicy $tls_security_policy;
}

class DomainEndpointOptionsStatus {
  public DomainEndpointOptions $options;
  public OptionStatus $status;
}

class DomainId {
}

class DomainName {
}

class DomainNameList {
}

class DomainNameMap {
}

class DomainStatus {
  public ARN $arn;
  public boolean $created;
  public boolean $deleted;
  public ServiceEndpoint $doc_service;
  public DomainId $domain_id;
  public DomainName $domain_name;
  public Limits $limits;
  public boolean $processing;
  public boolean $requires_index_documents;
  public InstanceCount $search_instance_count;
  public SearchInstanceType $search_instance_type;
  public PartitionCount $search_partition_count;
  public ServiceEndpoint $search_service;
}

class DomainStatusList {
}

class Double {
}

class DoubleArrayOptions {
  public Double $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public FieldNameCommaList $source_fields;
}

class DoubleOptions {
  public Double $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public boolean $sort_enabled;
  public FieldName $source_field;
}

class DynamicFieldName {
}

class DynamicFieldNameList {
}

class ErrorCode {
}

class ErrorMessage {
}

class Expression {
  public StandardName $expression_name;
  public ExpressionValue $expression_value;
}

class ExpressionStatus {
  public Expression $options;
  public OptionStatus $status;
}

class ExpressionStatusList {
}

class ExpressionValue {
}

class FieldName {
}

class FieldNameCommaList {
}

class FieldNameList {
}

class FieldValue {
}

class IndexDocumentsRequest {
  public DomainName $domain_name;
}

class IndexDocumentsResponse {
  public FieldNameList $field_names;
}

class IndexField {
  public DateArrayOptions $date_array_options;
  public DateOptions $date_options;
  public DoubleArrayOptions $double_array_options;
  public DoubleOptions $double_options;
  public DynamicFieldName $index_field_name;
  public IndexFieldType $index_field_type;
  public IntArrayOptions $int_array_options;
  public IntOptions $int_options;
  public LatLonOptions $lat_lon_options;
  public LiteralArrayOptions $literal_array_options;
  public LiteralOptions $literal_options;
  public TextArrayOptions $text_array_options;
  public TextOptions $text_options;
}

class IndexFieldStatus {
  public IndexField $options;
  public OptionStatus $status;
}

class IndexFieldStatusList {
}

class IndexFieldType {
}

class InstanceCount {
}

class IntArrayOptions {
  public Long $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public FieldNameCommaList $source_fields;
}

class IntOptions {
  public Long $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public boolean $sort_enabled;
  public FieldName $source_field;
}

class InternalException {
}

class InvalidTypeException {
}

class LatLonOptions {
  public FieldValue $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public boolean $sort_enabled;
  public FieldName $source_field;
}

class LimitExceededException {
}

class Limits {
  public MaximumPartitionCount $maximum_partition_count;
  public MaximumReplicationCount $maximum_replication_count;
}

class ListDomainNamesResponse {
  public DomainNameMap $domain_names;
}

class LiteralArrayOptions {
  public FieldValue $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public FieldNameCommaList $source_fields;
}

class LiteralOptions {
  public FieldValue $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public boolean $sort_enabled;
  public FieldName $source_field;
}

class Long {
}

class MaximumPartitionCount {
}

class MaximumReplicationCount {
}

class MultiAZ {
}

class OptionState {
}

class OptionStatus {
  public UpdateTimestamp $creation_date;
  public boolean $pending_deletion;
  public OptionState $state;
  public UpdateTimestamp $update_date;
  public UIntValue $update_version;
}

class PartitionCount {
}

class PartitionInstanceType {
}

class PolicyDocument {
}

class ResourceNotFoundException {
}

class ScalingParameters {
  public PartitionInstanceType $desired_instance_type;
  public UIntValue $desired_partition_count;
  public UIntValue $desired_replication_count;
}

class ScalingParametersStatus {
  public ScalingParameters $options;
  public OptionStatus $status;
}

class SearchInstanceType {
}

class ServiceEndpoint {
  public ServiceUrl $endpoint;
}

class ServiceUrl {
}

class StandardName {
}

class StandardNameList {
}

class String {
}

class Suggester {
  public DocumentSuggesterOptions $document_suggester_options;
  public StandardName $suggester_name;
}

class SuggesterFuzzyMatching {
}

class SuggesterStatus {
  public Suggester $options;
  public OptionStatus $status;
}

class SuggesterStatusList {
}

class TLSSecurityPolicy {
}

class TextArrayOptions {
  public Word $analysis_scheme;
  public FieldValue $default_value;
  public boolean $highlight_enabled;
  public boolean $return_enabled;
  public FieldNameCommaList $source_fields;
}

class TextOptions {
  public Word $analysis_scheme;
  public FieldValue $default_value;
  public boolean $highlight_enabled;
  public boolean $return_enabled;
  public boolean $sort_enabled;
  public FieldName $source_field;
}

class UIntValue {
}

class UpdateAvailabilityOptionsRequest {
  public DomainName $domain_name;
  public boolean $multi_az;
}

class UpdateAvailabilityOptionsResponse {
  public AvailabilityOptionsStatus $availability_options;
}

class UpdateDomainEndpointOptionsRequest {
  public DomainEndpointOptions $domain_endpoint_options;
  public DomainName $domain_name;
}

class UpdateDomainEndpointOptionsResponse {
  public DomainEndpointOptionsStatus $domain_endpoint_options;
}

class UpdateScalingParametersRequest {
  public DomainName $domain_name;
  public ScalingParameters $scaling_parameters;
}

class UpdateScalingParametersResponse {
  public ScalingParametersStatus $scaling_parameters;
}

class UpdateServiceAccessPoliciesRequest {
  public PolicyDocument $access_policies;
  public DomainName $domain_name;
}

class UpdateServiceAccessPoliciesResponse {
  public AccessPoliciesStatus $access_policies;
}

class UpdateTimestamp {
}

class ValidationException {
}

class Word {
}


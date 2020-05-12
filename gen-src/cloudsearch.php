<?hh // strict
namespace slack\aws\cloudsearch;

interface CloudSearch {
  public function BuildSuggesters(BuildSuggestersRequest $in): Awaitable<\Errors\Result<BuildSuggestersResponse>>;
  public function CreateDomain(CreateDomainRequest $in): Awaitable<\Errors\Result<CreateDomainResponse>>;
  public function DefineAnalysisScheme(DefineAnalysisSchemeRequest $in): Awaitable<\Errors\Result<DefineAnalysisSchemeResponse>>;
  public function DefineExpression(DefineExpressionRequest $in): Awaitable<\Errors\Result<DefineExpressionResponse>>;
  public function DefineIndexField(DefineIndexFieldRequest $in): Awaitable<\Errors\Result<DefineIndexFieldResponse>>;
  public function DefineSuggester(DefineSuggesterRequest $in): Awaitable<\Errors\Result<DefineSuggesterResponse>>;
  public function DeleteAnalysisScheme(DeleteAnalysisSchemeRequest $in): Awaitable<\Errors\Result<DeleteAnalysisSchemeResponse>>;
  public function DeleteDomain(DeleteDomainRequest $in): Awaitable<\Errors\Result<DeleteDomainResponse>>;
  public function DeleteExpression(DeleteExpressionRequest $in): Awaitable<\Errors\Result<DeleteExpressionResponse>>;
  public function DeleteIndexField(DeleteIndexFieldRequest $in): Awaitable<\Errors\Result<DeleteIndexFieldResponse>>;
  public function DeleteSuggester(DeleteSuggesterRequest $in): Awaitable<\Errors\Result<DeleteSuggesterResponse>>;
  public function DescribeAnalysisSchemes(DescribeAnalysisSchemesRequest $in): Awaitable<\Errors\Result<DescribeAnalysisSchemesResponse>>;
  public function DescribeAvailabilityOptions(DescribeAvailabilityOptionsRequest $in): Awaitable<\Errors\Result<DescribeAvailabilityOptionsResponse>>;
  public function DescribeDomainEndpointOptions(DescribeDomainEndpointOptionsRequest $in): Awaitable<\Errors\Result<DescribeDomainEndpointOptionsResponse>>;
  public function DescribeDomains(DescribeDomainsRequest $in): Awaitable<\Errors\Result<DescribeDomainsResponse>>;
  public function DescribeExpressions(DescribeExpressionsRequest $in): Awaitable<\Errors\Result<DescribeExpressionsResponse>>;
  public function DescribeIndexFields(DescribeIndexFieldsRequest $in): Awaitable<\Errors\Result<DescribeIndexFieldsResponse>>;
  public function DescribeScalingParameters(DescribeScalingParametersRequest $in): Awaitable<\Errors\Result<DescribeScalingParametersResponse>>;
  public function DescribeServiceAccessPolicies(DescribeServiceAccessPoliciesRequest $in): Awaitable<\Errors\Result<DescribeServiceAccessPoliciesResponse>>;
  public function DescribeSuggesters(DescribeSuggestersRequest $in): Awaitable<\Errors\Result<DescribeSuggestersResponse>>;
  public function IndexDocuments(IndexDocumentsRequest $in): Awaitable<\Errors\Result<IndexDocumentsResponse>>;
  public function ListDomainNames( $in): Awaitable<\Errors\Result<ListDomainNamesResponse>>;
  public function UpdateAvailabilityOptions(UpdateAvailabilityOptionsRequest $in): Awaitable<\Errors\Result<UpdateAvailabilityOptionsResponse>>;
  public function UpdateDomainEndpointOptions(UpdateDomainEndpointOptionsRequest $in): Awaitable<\Errors\Result<UpdateDomainEndpointOptionsResponse>>;
  public function UpdateScalingParameters(UpdateScalingParametersRequest $in): Awaitable<\Errors\Result<UpdateScalingParametersResponse>>;
  public function UpdateServiceAccessPolicies(UpdateServiceAccessPoliciesRequest $in): Awaitable<\Errors\Result<UpdateServiceAccessPoliciesResponse>>;
}

type APIVersion = string;

type ARN = string;

class AccessPoliciesStatus {
  public ?PolicyDocument $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?PolicyDocument,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? '';
    $this->status = $s['status'] ?? null;
  }
}

type AlgorithmicStemming = string;

class AnalysisOptions {
  public ?AlgorithmicStemming $algorithmic_stemming;
  public string $japanese_tokenization_dictionary;
  public string $stemming_dictionary;
  public string $stopwords;
  public string $synonyms;

  public function __construct(shape(
    ?'algorithmic_stemming' => ?AlgorithmicStemming,
    ?'japanese_tokenization_dictionary' => string,
    ?'stemming_dictionary' => string,
    ?'stopwords' => string,
    ?'synonyms' => string,
  ) $s = shape()) {
    $this->algorithmic_stemming = $s['algorithmic_stemming'] ?? '';
    $this->japanese_tokenization_dictionary = $s['japanese_tokenization_dictionary'] ?? '';
    $this->stemming_dictionary = $s['stemming_dictionary'] ?? '';
    $this->stopwords = $s['stopwords'] ?? '';
    $this->synonyms = $s['synonyms'] ?? '';
  }
}

class AnalysisScheme {
  public ?AnalysisOptions $analysis_options;
  public ?AnalysisSchemeLanguage $analysis_scheme_language;
  public ?StandardName $analysis_scheme_name;

  public function __construct(shape(
    ?'analysis_options' => ?AnalysisOptions,
    ?'analysis_scheme_language' => ?AnalysisSchemeLanguage,
    ?'analysis_scheme_name' => ?StandardName,
  ) $s = shape()) {
    $this->analysis_options = $s['analysis_options'] ?? null;
    $this->analysis_scheme_language = $s['analysis_scheme_language'] ?? '';
    $this->analysis_scheme_name = $s['analysis_scheme_name'] ?? '';
  }
}

type AnalysisSchemeLanguage = string;

class AnalysisSchemeStatus {
  public ?AnalysisScheme $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?AnalysisScheme,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? null;
    $this->status = $s['status'] ?? null;
  }
}

type AnalysisSchemeStatusList = vec<AnalysisSchemeStatus>;

class AvailabilityOptionsStatus {
  public ?MultiAZ $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?MultiAZ,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? false;
    $this->status = $s['status'] ?? null;
  }
}

class BaseException {
  public ?ErrorCode $code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type Boolean = bool;

class BuildSuggestersRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class BuildSuggestersResponse {
  public ?FieldNameList $field_names;

  public function __construct(shape(
    ?'field_names' => ?FieldNameList,
  ) $s = shape()) {
    $this->field_names = $s['field_names'] ?? vec[];
  }
}

class CreateDomainRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class CreateDomainResponse {
  public ?DomainStatus $domain_status;

  public function __construct(shape(
    ?'domain_status' => ?DomainStatus,
  ) $s = shape()) {
    $this->domain_status = $s['domain_status'] ?? null;
  }
}

class DateArrayOptions {
  public ?FieldValue $default_value;
  public bool $facet_enabled;
  public bool $return_enabled;
  public bool $search_enabled;
  public ?FieldNameCommaList $source_fields;

  public function __construct(shape(
    ?'default_value' => ?FieldValue,
    ?'facet_enabled' => bool,
    ?'return_enabled' => bool,
    ?'search_enabled' => bool,
    ?'source_fields' => ?FieldNameCommaList,
  ) $s = shape()) {
    $this->default_value = $s['default_value'] ?? '';
    $this->facet_enabled = $s['facet_enabled'] ?? false;
    $this->return_enabled = $s['return_enabled'] ?? false;
    $this->search_enabled = $s['search_enabled'] ?? false;
    $this->source_fields = $s['source_fields'] ?? '';
  }
}

class DateOptions {
  public ?FieldValue $default_value;
  public bool $facet_enabled;
  public bool $return_enabled;
  public bool $search_enabled;
  public bool $sort_enabled;
  public ?FieldName $source_field;

  public function __construct(shape(
    ?'default_value' => ?FieldValue,
    ?'facet_enabled' => bool,
    ?'return_enabled' => bool,
    ?'search_enabled' => bool,
    ?'sort_enabled' => bool,
    ?'source_field' => ?FieldName,
  ) $s = shape()) {
    $this->default_value = $s['default_value'] ?? '';
    $this->facet_enabled = $s['facet_enabled'] ?? false;
    $this->return_enabled = $s['return_enabled'] ?? false;
    $this->search_enabled = $s['search_enabled'] ?? false;
    $this->sort_enabled = $s['sort_enabled'] ?? false;
    $this->source_field = $s['source_field'] ?? '';
  }
}

class DefineAnalysisSchemeRequest {
  public ?AnalysisScheme $analysis_scheme;
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'analysis_scheme' => ?AnalysisScheme,
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->analysis_scheme = $s['analysis_scheme'] ?? null;
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DefineAnalysisSchemeResponse {
  public ?AnalysisSchemeStatus $analysis_scheme;

  public function __construct(shape(
    ?'analysis_scheme' => ?AnalysisSchemeStatus,
  ) $s = shape()) {
    $this->analysis_scheme = $s['analysis_scheme'] ?? null;
  }
}

class DefineExpressionRequest {
  public ?DomainName $domain_name;
  public ?Expression $expression;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'expression' => ?Expression,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->expression = $s['expression'] ?? null;
  }
}

class DefineExpressionResponse {
  public ?ExpressionStatus $expression;

  public function __construct(shape(
    ?'expression' => ?ExpressionStatus,
  ) $s = shape()) {
    $this->expression = $s['expression'] ?? null;
  }
}

class DefineIndexFieldRequest {
  public ?DomainName $domain_name;
  public ?IndexField $index_field;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'index_field' => ?IndexField,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->index_field = $s['index_field'] ?? null;
  }
}

class DefineIndexFieldResponse {
  public ?IndexFieldStatus $index_field;

  public function __construct(shape(
    ?'index_field' => ?IndexFieldStatus,
  ) $s = shape()) {
    $this->index_field = $s['index_field'] ?? null;
  }
}

class DefineSuggesterRequest {
  public ?DomainName $domain_name;
  public ?Suggester $suggester;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'suggester' => ?Suggester,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->suggester = $s['suggester'] ?? null;
  }
}

class DefineSuggesterResponse {
  public ?SuggesterStatus $suggester;

  public function __construct(shape(
    ?'suggester' => ?SuggesterStatus,
  ) $s = shape()) {
    $this->suggester = $s['suggester'] ?? null;
  }
}

class DeleteAnalysisSchemeRequest {
  public ?StandardName $analysis_scheme_name;
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'analysis_scheme_name' => ?StandardName,
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->analysis_scheme_name = $s['analysis_scheme_name'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DeleteAnalysisSchemeResponse {
  public ?AnalysisSchemeStatus $analysis_scheme;

  public function __construct(shape(
    ?'analysis_scheme' => ?AnalysisSchemeStatus,
  ) $s = shape()) {
    $this->analysis_scheme = $s['analysis_scheme'] ?? null;
  }
}

class DeleteDomainRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DeleteDomainResponse {
  public ?DomainStatus $domain_status;

  public function __construct(shape(
    ?'domain_status' => ?DomainStatus,
  ) $s = shape()) {
    $this->domain_status = $s['domain_status'] ?? null;
  }
}

class DeleteExpressionRequest {
  public ?DomainName $domain_name;
  public ?StandardName $expression_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'expression_name' => ?StandardName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->expression_name = $s['expression_name'] ?? '';
  }
}

class DeleteExpressionResponse {
  public ?ExpressionStatus $expression;

  public function __construct(shape(
    ?'expression' => ?ExpressionStatus,
  ) $s = shape()) {
    $this->expression = $s['expression'] ?? null;
  }
}

class DeleteIndexFieldRequest {
  public ?DomainName $domain_name;
  public ?DynamicFieldName $index_field_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'index_field_name' => ?DynamicFieldName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->index_field_name = $s['index_field_name'] ?? '';
  }
}

class DeleteIndexFieldResponse {
  public ?IndexFieldStatus $index_field;

  public function __construct(shape(
    ?'index_field' => ?IndexFieldStatus,
  ) $s = shape()) {
    $this->index_field = $s['index_field'] ?? null;
  }
}

class DeleteSuggesterRequest {
  public ?DomainName $domain_name;
  public ?StandardName $suggester_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'suggester_name' => ?StandardName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->suggester_name = $s['suggester_name'] ?? '';
  }
}

class DeleteSuggesterResponse {
  public ?SuggesterStatus $suggester;

  public function __construct(shape(
    ?'suggester' => ?SuggesterStatus,
  ) $s = shape()) {
    $this->suggester = $s['suggester'] ?? null;
  }
}

class DescribeAnalysisSchemesRequest {
  public ?StandardNameList $analysis_scheme_names;
  public bool $deployed;
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'analysis_scheme_names' => ?StandardNameList,
    ?'deployed' => bool,
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->analysis_scheme_names = $s['analysis_scheme_names'] ?? vec[];
    $this->deployed = $s['deployed'] ?? false;
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DescribeAnalysisSchemesResponse {
  public ?AnalysisSchemeStatusList $analysis_schemes;

  public function __construct(shape(
    ?'analysis_schemes' => ?AnalysisSchemeStatusList,
  ) $s = shape()) {
    $this->analysis_schemes = $s['analysis_schemes'] ?? vec[];
  }
}

class DescribeAvailabilityOptionsRequest {
  public bool $deployed;
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'deployed' => bool,
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->deployed = $s['deployed'] ?? false;
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DescribeAvailabilityOptionsResponse {
  public ?AvailabilityOptionsStatus $availability_options;

  public function __construct(shape(
    ?'availability_options' => ?AvailabilityOptionsStatus,
  ) $s = shape()) {
    $this->availability_options = $s['availability_options'] ?? null;
  }
}

class DescribeDomainEndpointOptionsRequest {
  public bool $deployed;
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'deployed' => bool,
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->deployed = $s['deployed'] ?? false;
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DescribeDomainEndpointOptionsResponse {
  public ?DomainEndpointOptionsStatus $domain_endpoint_options;

  public function __construct(shape(
    ?'domain_endpoint_options' => ?DomainEndpointOptionsStatus,
  ) $s = shape()) {
    $this->domain_endpoint_options = $s['domain_endpoint_options'] ?? null;
  }
}

class DescribeDomainsRequest {
  public ?DomainNameList $domain_names;

  public function __construct(shape(
    ?'domain_names' => ?DomainNameList,
  ) $s = shape()) {
    $this->domain_names = $s['domain_names'] ?? vec[];
  }
}

class DescribeDomainsResponse {
  public ?DomainStatusList $domain_status_list;

  public function __construct(shape(
    ?'domain_status_list' => ?DomainStatusList,
  ) $s = shape()) {
    $this->domain_status_list = $s['domain_status_list'] ?? vec[];
  }
}

class DescribeExpressionsRequest {
  public bool $deployed;
  public ?DomainName $domain_name;
  public ?StandardNameList $expression_names;

  public function __construct(shape(
    ?'deployed' => bool,
    ?'domain_name' => ?DomainName,
    ?'expression_names' => ?StandardNameList,
  ) $s = shape()) {
    $this->deployed = $s['deployed'] ?? false;
    $this->domain_name = $s['domain_name'] ?? '';
    $this->expression_names = $s['expression_names'] ?? vec[];
  }
}

class DescribeExpressionsResponse {
  public ?ExpressionStatusList $expressions;

  public function __construct(shape(
    ?'expressions' => ?ExpressionStatusList,
  ) $s = shape()) {
    $this->expressions = $s['expressions'] ?? vec[];
  }
}

class DescribeIndexFieldsRequest {
  public bool $deployed;
  public ?DomainName $domain_name;
  public ?DynamicFieldNameList $field_names;

  public function __construct(shape(
    ?'deployed' => bool,
    ?'domain_name' => ?DomainName,
    ?'field_names' => ?DynamicFieldNameList,
  ) $s = shape()) {
    $this->deployed = $s['deployed'] ?? false;
    $this->domain_name = $s['domain_name'] ?? '';
    $this->field_names = $s['field_names'] ?? vec[];
  }
}

class DescribeIndexFieldsResponse {
  public ?IndexFieldStatusList $index_fields;

  public function __construct(shape(
    ?'index_fields' => ?IndexFieldStatusList,
  ) $s = shape()) {
    $this->index_fields = $s['index_fields'] ?? vec[];
  }
}

class DescribeScalingParametersRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DescribeScalingParametersResponse {
  public ?ScalingParametersStatus $scaling_parameters;

  public function __construct(shape(
    ?'scaling_parameters' => ?ScalingParametersStatus,
  ) $s = shape()) {
    $this->scaling_parameters = $s['scaling_parameters'] ?? null;
  }
}

class DescribeServiceAccessPoliciesRequest {
  public bool $deployed;
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'deployed' => bool,
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->deployed = $s['deployed'] ?? false;
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DescribeServiceAccessPoliciesResponse {
  public ?AccessPoliciesStatus $access_policies;

  public function __construct(shape(
    ?'access_policies' => ?AccessPoliciesStatus,
  ) $s = shape()) {
    $this->access_policies = $s['access_policies'] ?? null;
  }
}

class DescribeSuggestersRequest {
  public bool $deployed;
  public ?DomainName $domain_name;
  public ?StandardNameList $suggester_names;

  public function __construct(shape(
    ?'deployed' => bool,
    ?'domain_name' => ?DomainName,
    ?'suggester_names' => ?StandardNameList,
  ) $s = shape()) {
    $this->deployed = $s['deployed'] ?? false;
    $this->domain_name = $s['domain_name'] ?? '';
    $this->suggester_names = $s['suggester_names'] ?? vec[];
  }
}

class DescribeSuggestersResponse {
  public ?SuggesterStatusList $suggesters;

  public function __construct(shape(
    ?'suggesters' => ?SuggesterStatusList,
  ) $s = shape()) {
    $this->suggesters = $s['suggesters'] ?? vec[];
  }
}

class DisabledOperationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DocumentSuggesterOptions {
  public ?SuggesterFuzzyMatching $fuzzy_matching;
  public string $sort_expression;
  public ?FieldName $source_field;

  public function __construct(shape(
    ?'fuzzy_matching' => ?SuggesterFuzzyMatching,
    ?'sort_expression' => string,
    ?'source_field' => ?FieldName,
  ) $s = shape()) {
    $this->fuzzy_matching = $s['fuzzy_matching'] ?? '';
    $this->sort_expression = $s['sort_expression'] ?? '';
    $this->source_field = $s['source_field'] ?? '';
  }
}

class DomainEndpointOptions {
  public bool $enforce_https;
  public ?TLSSecurityPolicy $tls_security_policy;

  public function __construct(shape(
    ?'enforce_https' => bool,
    ?'tls_security_policy' => ?TLSSecurityPolicy,
  ) $s = shape()) {
    $this->enforce_https = $s['enforce_https'] ?? false;
    $this->tls_security_policy = $s['tls_security_policy'] ?? '';
  }
}

class DomainEndpointOptionsStatus {
  public ?DomainEndpointOptions $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?DomainEndpointOptions,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? null;
    $this->status = $s['status'] ?? null;
  }
}

type DomainId = string;

type DomainName = string;

type DomainNameList = vec<DomainName>;

type DomainNameMap = dict<DomainName, APIVersion>;

class DomainStatus {
  public ?ARN $arn;
  public bool $created;
  public bool $deleted;
  public ?ServiceEndpoint $doc_service;
  public ?DomainId $domain_id;
  public ?DomainName $domain_name;
  public ?Limits $limits;
  public bool $processing;
  public bool $requires_index_documents;
  public ?InstanceCount $search_instance_count;
  public ?SearchInstanceType $search_instance_type;
  public ?PartitionCount $search_partition_count;
  public ?ServiceEndpoint $search_service;

  public function __construct(shape(
    ?'arn' => ?ARN,
    ?'created' => bool,
    ?'deleted' => bool,
    ?'doc_service' => ?ServiceEndpoint,
    ?'domain_id' => ?DomainId,
    ?'domain_name' => ?DomainName,
    ?'limits' => ?Limits,
    ?'processing' => bool,
    ?'requires_index_documents' => bool,
    ?'search_instance_count' => ?InstanceCount,
    ?'search_instance_type' => ?SearchInstanceType,
    ?'search_partition_count' => ?PartitionCount,
    ?'search_service' => ?ServiceEndpoint,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created = $s['created'] ?? false;
    $this->deleted = $s['deleted'] ?? false;
    $this->doc_service = $s['doc_service'] ?? null;
    $this->domain_id = $s['domain_id'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->limits = $s['limits'] ?? null;
    $this->processing = $s['processing'] ?? false;
    $this->requires_index_documents = $s['requires_index_documents'] ?? false;
    $this->search_instance_count = $s['search_instance_count'] ?? 0;
    $this->search_instance_type = $s['search_instance_type'] ?? '';
    $this->search_partition_count = $s['search_partition_count'] ?? 0;
    $this->search_service = $s['search_service'] ?? null;
  }
}

type DomainStatusList = vec<DomainStatus>;

type Double = float;

class DoubleArrayOptions {
  public ?Double $default_value;
  public bool $facet_enabled;
  public bool $return_enabled;
  public bool $search_enabled;
  public ?FieldNameCommaList $source_fields;

  public function __construct(shape(
    ?'default_value' => ?Double,
    ?'facet_enabled' => bool,
    ?'return_enabled' => bool,
    ?'search_enabled' => bool,
    ?'source_fields' => ?FieldNameCommaList,
  ) $s = shape()) {
    $this->default_value = $s['default_value'] ?? 0.0;
    $this->facet_enabled = $s['facet_enabled'] ?? false;
    $this->return_enabled = $s['return_enabled'] ?? false;
    $this->search_enabled = $s['search_enabled'] ?? false;
    $this->source_fields = $s['source_fields'] ?? '';
  }
}

class DoubleOptions {
  public ?Double $default_value;
  public bool $facet_enabled;
  public bool $return_enabled;
  public bool $search_enabled;
  public bool $sort_enabled;
  public ?FieldName $source_field;

  public function __construct(shape(
    ?'default_value' => ?Double,
    ?'facet_enabled' => bool,
    ?'return_enabled' => bool,
    ?'search_enabled' => bool,
    ?'sort_enabled' => bool,
    ?'source_field' => ?FieldName,
  ) $s = shape()) {
    $this->default_value = $s['default_value'] ?? 0.0;
    $this->facet_enabled = $s['facet_enabled'] ?? false;
    $this->return_enabled = $s['return_enabled'] ?? false;
    $this->search_enabled = $s['search_enabled'] ?? false;
    $this->sort_enabled = $s['sort_enabled'] ?? false;
    $this->source_field = $s['source_field'] ?? '';
  }
}

type DynamicFieldName = string;

type DynamicFieldNameList = vec<DynamicFieldName>;

type ErrorCode = string;

type ErrorMessage = string;

class Expression {
  public ?StandardName $expression_name;
  public ?ExpressionValue $expression_value;

  public function __construct(shape(
    ?'expression_name' => ?StandardName,
    ?'expression_value' => ?ExpressionValue,
  ) $s = shape()) {
    $this->expression_name = $s['expression_name'] ?? '';
    $this->expression_value = $s['expression_value'] ?? '';
  }
}

class ExpressionStatus {
  public ?Expression $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?Expression,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? null;
    $this->status = $s['status'] ?? null;
  }
}

type ExpressionStatusList = vec<ExpressionStatus>;

type ExpressionValue = string;

type FieldName = string;

type FieldNameCommaList = string;

type FieldNameList = vec<FieldName>;

type FieldValue = string;

class IndexDocumentsRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class IndexDocumentsResponse {
  public ?FieldNameList $field_names;

  public function __construct(shape(
    ?'field_names' => ?FieldNameList,
  ) $s = shape()) {
    $this->field_names = $s['field_names'] ?? vec[];
  }
}

class IndexField {
  public ?DateArrayOptions $date_array_options;
  public ?DateOptions $date_options;
  public ?DoubleArrayOptions $double_array_options;
  public ?DoubleOptions $double_options;
  public ?DynamicFieldName $index_field_name;
  public ?IndexFieldType $index_field_type;
  public ?IntArrayOptions $int_array_options;
  public ?IntOptions $int_options;
  public ?LatLonOptions $lat_lon_options;
  public ?LiteralArrayOptions $literal_array_options;
  public ?LiteralOptions $literal_options;
  public ?TextArrayOptions $text_array_options;
  public ?TextOptions $text_options;

  public function __construct(shape(
    ?'date_array_options' => ?DateArrayOptions,
    ?'date_options' => ?DateOptions,
    ?'double_array_options' => ?DoubleArrayOptions,
    ?'double_options' => ?DoubleOptions,
    ?'index_field_name' => ?DynamicFieldName,
    ?'index_field_type' => ?IndexFieldType,
    ?'int_array_options' => ?IntArrayOptions,
    ?'int_options' => ?IntOptions,
    ?'lat_lon_options' => ?LatLonOptions,
    ?'literal_array_options' => ?LiteralArrayOptions,
    ?'literal_options' => ?LiteralOptions,
    ?'text_array_options' => ?TextArrayOptions,
    ?'text_options' => ?TextOptions,
  ) $s = shape()) {
    $this->date_array_options = $s['date_array_options'] ?? null;
    $this->date_options = $s['date_options'] ?? null;
    $this->double_array_options = $s['double_array_options'] ?? null;
    $this->double_options = $s['double_options'] ?? null;
    $this->index_field_name = $s['index_field_name'] ?? '';
    $this->index_field_type = $s['index_field_type'] ?? '';
    $this->int_array_options = $s['int_array_options'] ?? null;
    $this->int_options = $s['int_options'] ?? null;
    $this->lat_lon_options = $s['lat_lon_options'] ?? null;
    $this->literal_array_options = $s['literal_array_options'] ?? null;
    $this->literal_options = $s['literal_options'] ?? null;
    $this->text_array_options = $s['text_array_options'] ?? null;
    $this->text_options = $s['text_options'] ?? null;
  }
}

class IndexFieldStatus {
  public ?IndexField $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?IndexField,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? null;
    $this->status = $s['status'] ?? null;
  }
}

type IndexFieldStatusList = vec<IndexFieldStatus>;

type IndexFieldType = string;

type InstanceCount = int;

class IntArrayOptions {
  public ?Long $default_value;
  public bool $facet_enabled;
  public bool $return_enabled;
  public bool $search_enabled;
  public ?FieldNameCommaList $source_fields;

  public function __construct(shape(
    ?'default_value' => ?Long,
    ?'facet_enabled' => bool,
    ?'return_enabled' => bool,
    ?'search_enabled' => bool,
    ?'source_fields' => ?FieldNameCommaList,
  ) $s = shape()) {
    $this->default_value = $s['default_value'] ?? 0;
    $this->facet_enabled = $s['facet_enabled'] ?? false;
    $this->return_enabled = $s['return_enabled'] ?? false;
    $this->search_enabled = $s['search_enabled'] ?? false;
    $this->source_fields = $s['source_fields'] ?? '';
  }
}

class IntOptions {
  public ?Long $default_value;
  public bool $facet_enabled;
  public bool $return_enabled;
  public bool $search_enabled;
  public bool $sort_enabled;
  public ?FieldName $source_field;

  public function __construct(shape(
    ?'default_value' => ?Long,
    ?'facet_enabled' => bool,
    ?'return_enabled' => bool,
    ?'search_enabled' => bool,
    ?'sort_enabled' => bool,
    ?'source_field' => ?FieldName,
  ) $s = shape()) {
    $this->default_value = $s['default_value'] ?? 0;
    $this->facet_enabled = $s['facet_enabled'] ?? false;
    $this->return_enabled = $s['return_enabled'] ?? false;
    $this->search_enabled = $s['search_enabled'] ?? false;
    $this->sort_enabled = $s['sort_enabled'] ?? false;
    $this->source_field = $s['source_field'] ?? '';
  }
}

class InternalException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTypeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class LatLonOptions {
  public ?FieldValue $default_value;
  public bool $facet_enabled;
  public bool $return_enabled;
  public bool $search_enabled;
  public bool $sort_enabled;
  public ?FieldName $source_field;

  public function __construct(shape(
    ?'default_value' => ?FieldValue,
    ?'facet_enabled' => bool,
    ?'return_enabled' => bool,
    ?'search_enabled' => bool,
    ?'sort_enabled' => bool,
    ?'source_field' => ?FieldName,
  ) $s = shape()) {
    $this->default_value = $s['default_value'] ?? '';
    $this->facet_enabled = $s['facet_enabled'] ?? false;
    $this->return_enabled = $s['return_enabled'] ?? false;
    $this->search_enabled = $s['search_enabled'] ?? false;
    $this->sort_enabled = $s['sort_enabled'] ?? false;
    $this->source_field = $s['source_field'] ?? '';
  }
}

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Limits {
  public ?MaximumPartitionCount $maximum_partition_count;
  public ?MaximumReplicationCount $maximum_replication_count;

  public function __construct(shape(
    ?'maximum_partition_count' => ?MaximumPartitionCount,
    ?'maximum_replication_count' => ?MaximumReplicationCount,
  ) $s = shape()) {
    $this->maximum_partition_count = $s['maximum_partition_count'] ?? 0;
    $this->maximum_replication_count = $s['maximum_replication_count'] ?? 0;
  }
}

class ListDomainNamesResponse {
  public ?DomainNameMap $domain_names;

  public function __construct(shape(
    ?'domain_names' => ?DomainNameMap,
  ) $s = shape()) {
    $this->domain_names = $s['domain_names'] ?? dict[];
  }
}

class LiteralArrayOptions {
  public ?FieldValue $default_value;
  public bool $facet_enabled;
  public bool $return_enabled;
  public bool $search_enabled;
  public ?FieldNameCommaList $source_fields;

  public function __construct(shape(
    ?'default_value' => ?FieldValue,
    ?'facet_enabled' => bool,
    ?'return_enabled' => bool,
    ?'search_enabled' => bool,
    ?'source_fields' => ?FieldNameCommaList,
  ) $s = shape()) {
    $this->default_value = $s['default_value'] ?? '';
    $this->facet_enabled = $s['facet_enabled'] ?? false;
    $this->return_enabled = $s['return_enabled'] ?? false;
    $this->search_enabled = $s['search_enabled'] ?? false;
    $this->source_fields = $s['source_fields'] ?? '';
  }
}

class LiteralOptions {
  public ?FieldValue $default_value;
  public bool $facet_enabled;
  public bool $return_enabled;
  public bool $search_enabled;
  public bool $sort_enabled;
  public ?FieldName $source_field;

  public function __construct(shape(
    ?'default_value' => ?FieldValue,
    ?'facet_enabled' => bool,
    ?'return_enabled' => bool,
    ?'search_enabled' => bool,
    ?'sort_enabled' => bool,
    ?'source_field' => ?FieldName,
  ) $s = shape()) {
    $this->default_value = $s['default_value'] ?? '';
    $this->facet_enabled = $s['facet_enabled'] ?? false;
    $this->return_enabled = $s['return_enabled'] ?? false;
    $this->search_enabled = $s['search_enabled'] ?? false;
    $this->sort_enabled = $s['sort_enabled'] ?? false;
    $this->source_field = $s['source_field'] ?? '';
  }
}

type Long = int;

type MaximumPartitionCount = int;

type MaximumReplicationCount = int;

type MultiAZ = bool;

type OptionState = string;

class OptionStatus {
  public ?UpdateTimestamp $creation_date;
  public bool $pending_deletion;
  public ?OptionState $state;
  public ?UpdateTimestamp $update_date;
  public ?UIntValue $update_version;

  public function __construct(shape(
    ?'creation_date' => ?UpdateTimestamp,
    ?'pending_deletion' => bool,
    ?'state' => ?OptionState,
    ?'update_date' => ?UpdateTimestamp,
    ?'update_version' => ?UIntValue,
  ) $s = shape()) {
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->pending_deletion = $s['pending_deletion'] ?? false;
    $this->state = $s['state'] ?? '';
    $this->update_date = $s['update_date'] ?? 0;
    $this->update_version = $s['update_version'] ?? 0;
  }
}

type PartitionCount = int;

type PartitionInstanceType = string;

type PolicyDocument = string;

class ResourceNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ScalingParameters {
  public ?PartitionInstanceType $desired_instance_type;
  public ?UIntValue $desired_partition_count;
  public ?UIntValue $desired_replication_count;

  public function __construct(shape(
    ?'desired_instance_type' => ?PartitionInstanceType,
    ?'desired_partition_count' => ?UIntValue,
    ?'desired_replication_count' => ?UIntValue,
  ) $s = shape()) {
    $this->desired_instance_type = $s['desired_instance_type'] ?? '';
    $this->desired_partition_count = $s['desired_partition_count'] ?? 0;
    $this->desired_replication_count = $s['desired_replication_count'] ?? 0;
  }
}

class ScalingParametersStatus {
  public ?ScalingParameters $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?ScalingParameters,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? null;
    $this->status = $s['status'] ?? null;
  }
}

type SearchInstanceType = string;

class ServiceEndpoint {
  public ?ServiceUrl $endpoint;

  public function __construct(shape(
    ?'endpoint' => ?ServiceUrl,
  ) $s = shape()) {
    $this->endpoint = $s['endpoint'] ?? '';
  }
}

type ServiceUrl = string;

type StandardName = string;

type StandardNameList = vec<StandardName>;

type String = string;

class Suggester {
  public ?DocumentSuggesterOptions $document_suggester_options;
  public ?StandardName $suggester_name;

  public function __construct(shape(
    ?'document_suggester_options' => ?DocumentSuggesterOptions,
    ?'suggester_name' => ?StandardName,
  ) $s = shape()) {
    $this->document_suggester_options = $s['document_suggester_options'] ?? null;
    $this->suggester_name = $s['suggester_name'] ?? '';
  }
}

type SuggesterFuzzyMatching = string;

class SuggesterStatus {
  public ?Suggester $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?Suggester,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? null;
    $this->status = $s['status'] ?? null;
  }
}

type SuggesterStatusList = vec<SuggesterStatus>;

type TLSSecurityPolicy = string;

class TextArrayOptions {
  public ?Word $analysis_scheme;
  public ?FieldValue $default_value;
  public bool $highlight_enabled;
  public bool $return_enabled;
  public ?FieldNameCommaList $source_fields;

  public function __construct(shape(
    ?'analysis_scheme' => ?Word,
    ?'default_value' => ?FieldValue,
    ?'highlight_enabled' => bool,
    ?'return_enabled' => bool,
    ?'source_fields' => ?FieldNameCommaList,
  ) $s = shape()) {
    $this->analysis_scheme = $s['analysis_scheme'] ?? '';
    $this->default_value = $s['default_value'] ?? '';
    $this->highlight_enabled = $s['highlight_enabled'] ?? false;
    $this->return_enabled = $s['return_enabled'] ?? false;
    $this->source_fields = $s['source_fields'] ?? '';
  }
}

class TextOptions {
  public ?Word $analysis_scheme;
  public ?FieldValue $default_value;
  public bool $highlight_enabled;
  public bool $return_enabled;
  public bool $sort_enabled;
  public ?FieldName $source_field;

  public function __construct(shape(
    ?'analysis_scheme' => ?Word,
    ?'default_value' => ?FieldValue,
    ?'highlight_enabled' => bool,
    ?'return_enabled' => bool,
    ?'sort_enabled' => bool,
    ?'source_field' => ?FieldName,
  ) $s = shape()) {
    $this->analysis_scheme = $s['analysis_scheme'] ?? '';
    $this->default_value = $s['default_value'] ?? '';
    $this->highlight_enabled = $s['highlight_enabled'] ?? false;
    $this->return_enabled = $s['return_enabled'] ?? false;
    $this->sort_enabled = $s['sort_enabled'] ?? false;
    $this->source_field = $s['source_field'] ?? '';
  }
}

type UIntValue = int;

class UpdateAvailabilityOptionsRequest {
  public ?DomainName $domain_name;
  public bool $multi_az;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'multi_az' => bool,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->multi_az = $s['multi_az'] ?? false;
  }
}

class UpdateAvailabilityOptionsResponse {
  public ?AvailabilityOptionsStatus $availability_options;

  public function __construct(shape(
    ?'availability_options' => ?AvailabilityOptionsStatus,
  ) $s = shape()) {
    $this->availability_options = $s['availability_options'] ?? null;
  }
}

class UpdateDomainEndpointOptionsRequest {
  public ?DomainEndpointOptions $domain_endpoint_options;
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_endpoint_options' => ?DomainEndpointOptions,
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_endpoint_options = $s['domain_endpoint_options'] ?? null;
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class UpdateDomainEndpointOptionsResponse {
  public ?DomainEndpointOptionsStatus $domain_endpoint_options;

  public function __construct(shape(
    ?'domain_endpoint_options' => ?DomainEndpointOptionsStatus,
  ) $s = shape()) {
    $this->domain_endpoint_options = $s['domain_endpoint_options'] ?? null;
  }
}

class UpdateScalingParametersRequest {
  public ?DomainName $domain_name;
  public ?ScalingParameters $scaling_parameters;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'scaling_parameters' => ?ScalingParameters,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->scaling_parameters = $s['scaling_parameters'] ?? null;
  }
}

class UpdateScalingParametersResponse {
  public ?ScalingParametersStatus $scaling_parameters;

  public function __construct(shape(
    ?'scaling_parameters' => ?ScalingParametersStatus,
  ) $s = shape()) {
    $this->scaling_parameters = $s['scaling_parameters'] ?? null;
  }
}

class UpdateServiceAccessPoliciesRequest {
  public ?PolicyDocument $access_policies;
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'access_policies' => ?PolicyDocument,
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->access_policies = $s['access_policies'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class UpdateServiceAccessPoliciesResponse {
  public ?AccessPoliciesStatus $access_policies;

  public function __construct(shape(
    ?'access_policies' => ?AccessPoliciesStatus,
  ) $s = shape()) {
    $this->access_policies = $s['access_policies'] ?? null;
  }
}

type UpdateTimestamp = int;

class ValidationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Word = string;


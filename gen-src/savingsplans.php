<?hh // strict
namespace slack\aws\savingsplans;

interface savingsplans {
  public function CreateSavingsPlan(CreateSavingsPlanRequest): Awaitable<Errors\Result<CreateSavingsPlanResponse>>;
  public function DescribeSavingsPlanRates(DescribeSavingsPlanRatesRequest): Awaitable<Errors\Result<DescribeSavingsPlanRatesResponse>>;
  public function DescribeSavingsPlans(DescribeSavingsPlansRequest): Awaitable<Errors\Result<DescribeSavingsPlansResponse>>;
  public function DescribeSavingsPlansOfferingRates(DescribeSavingsPlansOfferingRatesRequest): Awaitable<Errors\Result<DescribeSavingsPlansOfferingRatesResponse>>;
  public function DescribeSavingsPlansOfferings(DescribeSavingsPlansOfferingsRequest): Awaitable<Errors\Result<DescribeSavingsPlansOfferingsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
}

type Amount = string;

type ClientToken = string;

class CreateSavingsPlanRequest {
  public ClientToken $client_token;
  public Amount $commitment;
  public SavingsPlanOfferingId $savings_plan_offering_id;
  public TagMap $tags;
  public Amount $upfront_payment_amount;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'commitment' => Amount,
  ?'savings_plan_offering_id' => SavingsPlanOfferingId,
  ?'tags' => TagMap,
  ?'upfront_payment_amount' => Amount,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->commitment = $commitment ?? "";
    $this->savings_plan_offering_id = $savings_plan_offering_id ?? "";
    $this->tags = $tags ?? [];
    $this->upfront_payment_amount = $upfront_payment_amount ?? "";
  }
}

class CreateSavingsPlanResponse {
  public SavingsPlanId $savings_plan_id;

  public function __construct(shape(
  ?'savings_plan_id' => SavingsPlanId,
  ) $s = shape()) {
    $this->savings_plan_id = $savings_plan_id ?? "";
  }
}

type CurrencyCode = string;

type CurrencyList = vec<CurrencyCode>;

class DescribeSavingsPlanRatesRequest {
  public SavingsPlanRateFilterList $filters;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public SavingsPlanId $savings_plan_id;

  public function __construct(shape(
  ?'filters' => SavingsPlanRateFilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ?'savings_plan_id' => SavingsPlanId,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->savings_plan_id = $savings_plan_id ?? "";
  }
}

class DescribeSavingsPlanRatesResponse {
  public PaginationToken $next_token;
  public SavingsPlanId $savings_plan_id;
  public SavingsPlanRateList $search_results;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'savings_plan_id' => SavingsPlanId,
  ?'search_results' => SavingsPlanRateList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->savings_plan_id = $savings_plan_id ?? "";
    $this->search_results = $search_results ?? [];
  }
}

class DescribeSavingsPlansOfferingRatesRequest {
  public SavingsPlanOfferingRateFiltersList $filters;
  public PageSize $max_results;
  public PaginationToken $next_token;
  public SavingsPlanRateOperationList $operations;
  public SavingsPlanProductTypeList $products;
  public UUIDs $savings_plan_offering_ids;
  public SavingsPlanPaymentOptionList $savings_plan_payment_options;
  public SavingsPlanTypeList $savings_plan_types;
  public SavingsPlanRateServiceCodeList $service_codes;
  public SavingsPlanRateUsageTypeList $usage_types;

  public function __construct(shape(
  ?'filters' => SavingsPlanOfferingRateFiltersList,
  ?'max_results' => PageSize,
  ?'next_token' => PaginationToken,
  ?'operations' => SavingsPlanRateOperationList,
  ?'products' => SavingsPlanProductTypeList,
  ?'savings_plan_offering_ids' => UUIDs,
  ?'savings_plan_payment_options' => SavingsPlanPaymentOptionList,
  ?'savings_plan_types' => SavingsPlanTypeList,
  ?'service_codes' => SavingsPlanRateServiceCodeList,
  ?'usage_types' => SavingsPlanRateUsageTypeList,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->operations = $operations ?? [];
    $this->products = $products ?? [];
    $this->savings_plan_offering_ids = $savings_plan_offering_ids ?? [];
    $this->savings_plan_payment_options = $savings_plan_payment_options ?? [];
    $this->savings_plan_types = $savings_plan_types ?? [];
    $this->service_codes = $service_codes ?? [];
    $this->usage_types = $usage_types ?? [];
  }
}

class DescribeSavingsPlansOfferingRatesResponse {
  public PaginationToken $next_token;
  public SavingsPlanOfferingRatesList $search_results;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'search_results' => SavingsPlanOfferingRatesList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->search_results = $search_results ?? [];
  }
}

class DescribeSavingsPlansOfferingsRequest {
  public CurrencyList $currencies;
  public SavingsPlanDescriptionsList $descriptions;
  public DurationsList $durations;
  public SavingsPlanOfferingFiltersList $filters;
  public PageSize $max_results;
  public PaginationToken $next_token;
  public UUIDs $offering_ids;
  public SavingsPlanOperationList $operations;
  public SavingsPlanPaymentOptionList $payment_options;
  public SavingsPlanTypeList $plan_types;
  public SavingsPlanProductType $product_type;
  public SavingsPlanServiceCodeList $service_codes;
  public SavingsPlanUsageTypeList $usage_types;

  public function __construct(shape(
  ?'currencies' => CurrencyList,
  ?'descriptions' => SavingsPlanDescriptionsList,
  ?'durations' => DurationsList,
  ?'filters' => SavingsPlanOfferingFiltersList,
  ?'max_results' => PageSize,
  ?'next_token' => PaginationToken,
  ?'offering_ids' => UUIDs,
  ?'operations' => SavingsPlanOperationList,
  ?'payment_options' => SavingsPlanPaymentOptionList,
  ?'plan_types' => SavingsPlanTypeList,
  ?'product_type' => SavingsPlanProductType,
  ?'service_codes' => SavingsPlanServiceCodeList,
  ?'usage_types' => SavingsPlanUsageTypeList,
  ) $s = shape()) {
    $this->currencies = $currencies ?? [];
    $this->descriptions = $descriptions ?? [];
    $this->durations = $durations ?? [];
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->offering_ids = $offering_ids ?? [];
    $this->operations = $operations ?? [];
    $this->payment_options = $payment_options ?? [];
    $this->plan_types = $plan_types ?? [];
    $this->product_type = $product_type ?? "";
    $this->service_codes = $service_codes ?? [];
    $this->usage_types = $usage_types ?? [];
  }
}

class DescribeSavingsPlansOfferingsResponse {
  public PaginationToken $next_token;
  public SavingsPlanOfferingsList $search_results;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'search_results' => SavingsPlanOfferingsList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->search_results = $search_results ?? [];
  }
}

class DescribeSavingsPlansRequest {
  public SavingsPlanFilterList $filters;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public SavingsPlanArnList $savings_plan_arns;
  public SavingsPlanIdList $savings_plan_ids;
  public SavingsPlanStateList $states;

  public function __construct(shape(
  ?'filters' => SavingsPlanFilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ?'savings_plan_arns' => SavingsPlanArnList,
  ?'savings_plan_ids' => SavingsPlanIdList,
  ?'states' => SavingsPlanStateList,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->savings_plan_arns = $savings_plan_arns ?? [];
    $this->savings_plan_ids = $savings_plan_ids ?? [];
    $this->states = $states ?? [];
  }
}

class DescribeSavingsPlansResponse {
  public PaginationToken $next_token;
  public SavingsPlanList $savings_plans;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'savings_plans' => SavingsPlanList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->savings_plans = $savings_plans ?? [];
  }
}

type DurationsList = vec<SavingsPlansDuration>;

type EC2InstanceFamily = string;

type FilterValuesList = vec<JsonSafeFilterValueString>;

class InternalServerException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type JsonSafeFilterValueString = string;

type ListOfStrings = vec<String>;

class ListTagsForResourceRequest {
  public SavingsPlanArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => SavingsPlanArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagMap $tags;

  public function __construct(shape(
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

type MaxResults = int;

type PageSize = int;

type PaginationToken = string;

class ParentSavingsPlanOffering {
  public CurrencyCode $currency;
  public SavingsPlansDuration $duration_seconds;
  public UUID $offering_id;
  public SavingsPlanPaymentOption $payment_option;
  public SavingsPlanDescription $plan_description;
  public SavingsPlanType $plan_type;

  public function __construct(shape(
  ?'currency' => CurrencyCode,
  ?'duration_seconds' => SavingsPlansDuration,
  ?'offering_id' => UUID,
  ?'payment_option' => SavingsPlanPaymentOption,
  ?'plan_description' => SavingsPlanDescription,
  ?'plan_type' => SavingsPlanType,
  ) $s = shape()) {
    $this->currency = $currency ?? "";
    $this->duration_seconds = $duration_seconds ?? 0;
    $this->offering_id = $offering_id ?? "";
    $this->payment_option = $payment_option ?? "";
    $this->plan_description = $plan_description ?? "";
    $this->plan_type = $plan_type ?? "";
  }
}

type Region = string;

class ResourceNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class SavingsPlan {
  public Amount $commitment;
  public CurrencyCode $currency;
  public string $description;
  public EC2InstanceFamily $ec_2_instance_family;
  public string $end;
  public SavingsPlanOfferingId $offering_id;
  public SavingsPlanPaymentOption $payment_option;
  public SavingsPlanProductTypeList $product_types;
  public Amount $recurring_payment_amount;
  public Region $region;
  public SavingsPlanArn $savings_plan_arn;
  public SavingsPlanId $savings_plan_id;
  public SavingsPlanType $savings_plan_type;
  public string $start;
  public SavingsPlanState $state;
  public TagMap $tags;
  public TermDurationInSeconds $term_duration_in_seconds;
  public Amount $upfront_payment_amount;

  public function __construct(shape(
  ?'commitment' => Amount,
  ?'currency' => CurrencyCode,
  ?'description' => string,
  ?'ec_2_instance_family' => EC2InstanceFamily,
  ?'end' => string,
  ?'offering_id' => SavingsPlanOfferingId,
  ?'payment_option' => SavingsPlanPaymentOption,
  ?'product_types' => SavingsPlanProductTypeList,
  ?'recurring_payment_amount' => Amount,
  ?'region' => Region,
  ?'savings_plan_arn' => SavingsPlanArn,
  ?'savings_plan_id' => SavingsPlanId,
  ?'savings_plan_type' => SavingsPlanType,
  ?'start' => string,
  ?'state' => SavingsPlanState,
  ?'tags' => TagMap,
  ?'term_duration_in_seconds' => TermDurationInSeconds,
  ?'upfront_payment_amount' => Amount,
  ) $s = shape()) {
    $this->commitment = $commitment ?? "";
    $this->currency = $currency ?? "";
    $this->description = $description ?? "";
    $this->ec_2_instance_family = $ec_2_instance_family ?? "";
    $this->end = $end ?? "";
    $this->offering_id = $offering_id ?? "";
    $this->payment_option = $payment_option ?? "";
    $this->product_types = $product_types ?? [];
    $this->recurring_payment_amount = $recurring_payment_amount ?? "";
    $this->region = $region ?? "";
    $this->savings_plan_arn = $savings_plan_arn ?? "";
    $this->savings_plan_id = $savings_plan_id ?? "";
    $this->savings_plan_type = $savings_plan_type ?? "";
    $this->start = $start ?? "";
    $this->state = $state ?? "";
    $this->tags = $tags ?? [];
    $this->term_duration_in_seconds = $term_duration_in_seconds ?? 0;
    $this->upfront_payment_amount = $upfront_payment_amount ?? "";
  }
}

type SavingsPlanArn = string;

type SavingsPlanArnList = vec<SavingsPlanArn>;

type SavingsPlanDescription = string;

type SavingsPlanDescriptionsList = vec<SavingsPlanDescription>;

class SavingsPlanFilter {
  public SavingsPlansFilterName $name;
  public ListOfStrings $values;

  public function __construct(shape(
  ?'name' => SavingsPlansFilterName,
  ?'values' => ListOfStrings,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type SavingsPlanFilterList = vec<SavingsPlanFilter>;

type SavingsPlanId = string;

type SavingsPlanIdList = vec<SavingsPlanId>;

type SavingsPlanList = vec<SavingsPlan>;

class SavingsPlanOffering {
  public CurrencyCode $currency;
  public SavingsPlanDescription $description;
  public SavingsPlansDuration $duration_seconds;
  public UUID $offering_id;
  public SavingsPlanOperation $operation;
  public SavingsPlanPaymentOption $payment_option;
  public SavingsPlanType $plan_type;
  public SavingsPlanProductTypeList $product_types;
  public SavingsPlanOfferingPropertyList $properties;
  public SavingsPlanServiceCode $service_code;
  public SavingsPlanUsageType $usage_type;

  public function __construct(shape(
  ?'currency' => CurrencyCode,
  ?'description' => SavingsPlanDescription,
  ?'duration_seconds' => SavingsPlansDuration,
  ?'offering_id' => UUID,
  ?'operation' => SavingsPlanOperation,
  ?'payment_option' => SavingsPlanPaymentOption,
  ?'plan_type' => SavingsPlanType,
  ?'product_types' => SavingsPlanProductTypeList,
  ?'properties' => SavingsPlanOfferingPropertyList,
  ?'service_code' => SavingsPlanServiceCode,
  ?'usage_type' => SavingsPlanUsageType,
  ) $s = shape()) {
    $this->currency = $currency ?? "";
    $this->description = $description ?? "";
    $this->duration_seconds = $duration_seconds ?? 0;
    $this->offering_id = $offering_id ?? "";
    $this->operation = $operation ?? "";
    $this->payment_option = $payment_option ?? "";
    $this->plan_type = $plan_type ?? "";
    $this->product_types = $product_types ?? [];
    $this->properties = $properties ?? [];
    $this->service_code = $service_code ?? "";
    $this->usage_type = $usage_type ?? "";
  }
}

type SavingsPlanOfferingFilterAttribute = string;

class SavingsPlanOfferingFilterElement {
  public SavingsPlanOfferingFilterAttribute $name;
  public FilterValuesList $values;

  public function __construct(shape(
  ?'name' => SavingsPlanOfferingFilterAttribute,
  ?'values' => FilterValuesList,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type SavingsPlanOfferingFiltersList = vec<SavingsPlanOfferingFilterElement>;

type SavingsPlanOfferingId = string;

class SavingsPlanOfferingProperty {
  public SavingsPlanOfferingPropertyKey $name;
  public JsonSafeFilterValueString $value;

  public function __construct(shape(
  ?'name' => SavingsPlanOfferingPropertyKey,
  ?'value' => JsonSafeFilterValueString,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

type SavingsPlanOfferingPropertyKey = string;

type SavingsPlanOfferingPropertyList = vec<SavingsPlanOfferingProperty>;

class SavingsPlanOfferingRate {
  public SavingsPlanRateOperation $operation;
  public SavingsPlanProductType $product_type;
  public SavingsPlanOfferingRatePropertyList $properties;
  public SavingsPlanRatePricePerUnit $rate;
  public ParentSavingsPlanOffering $savings_plan_offering;
  public SavingsPlanRateServiceCode $service_code;
  public SavingsPlanRateUnit $unit;
  public SavingsPlanRateUsageType $usage_type;

  public function __construct(shape(
  ?'operation' => SavingsPlanRateOperation,
  ?'product_type' => SavingsPlanProductType,
  ?'properties' => SavingsPlanOfferingRatePropertyList,
  ?'rate' => SavingsPlanRatePricePerUnit,
  ?'savings_plan_offering' => ParentSavingsPlanOffering,
  ?'service_code' => SavingsPlanRateServiceCode,
  ?'unit' => SavingsPlanRateUnit,
  ?'usage_type' => SavingsPlanRateUsageType,
  ) $s = shape()) {
    $this->operation = $operation ?? "";
    $this->product_type = $product_type ?? "";
    $this->properties = $properties ?? [];
    $this->rate = $rate ?? "";
    $this->savings_plan_offering = $savings_plan_offering ?? null;
    $this->service_code = $service_code ?? "";
    $this->unit = $unit ?? "";
    $this->usage_type = $usage_type ?? "";
  }
}

class SavingsPlanOfferingRateFilterElement {
  public SavingsPlanRateFilterAttribute $name;
  public FilterValuesList $values;

  public function __construct(shape(
  ?'name' => SavingsPlanRateFilterAttribute,
  ?'values' => FilterValuesList,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type SavingsPlanOfferingRateFiltersList = vec<SavingsPlanOfferingRateFilterElement>;

class SavingsPlanOfferingRateProperty {
  public JsonSafeFilterValueString $name;
  public JsonSafeFilterValueString $value;

  public function __construct(shape(
  ?'name' => JsonSafeFilterValueString,
  ?'value' => JsonSafeFilterValueString,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

type SavingsPlanOfferingRatePropertyList = vec<SavingsPlanOfferingRateProperty>;

type SavingsPlanOfferingRatesList = vec<SavingsPlanOfferingRate>;

type SavingsPlanOfferingsList = vec<SavingsPlanOffering>;

type SavingsPlanOperation = string;

type SavingsPlanOperationList = vec<SavingsPlanOperation>;

type SavingsPlanPaymentOption = string;

type SavingsPlanPaymentOptionList = vec<SavingsPlanPaymentOption>;

type SavingsPlanProductType = string;

type SavingsPlanProductTypeList = vec<SavingsPlanProductType>;

class SavingsPlanRate {
  public CurrencyCode $currency;
  public SavingsPlanRateOperation $operation;
  public SavingsPlanProductType $product_type;
  public SavingsPlanRatePropertyList $properties;
  public Amount $rate;
  public SavingsPlanRateServiceCode $service_code;
  public SavingsPlanRateUnit $unit;
  public SavingsPlanRateUsageType $usage_type;

  public function __construct(shape(
  ?'currency' => CurrencyCode,
  ?'operation' => SavingsPlanRateOperation,
  ?'product_type' => SavingsPlanProductType,
  ?'properties' => SavingsPlanRatePropertyList,
  ?'rate' => Amount,
  ?'service_code' => SavingsPlanRateServiceCode,
  ?'unit' => SavingsPlanRateUnit,
  ?'usage_type' => SavingsPlanRateUsageType,
  ) $s = shape()) {
    $this->currency = $currency ?? "";
    $this->operation = $operation ?? "";
    $this->product_type = $product_type ?? "";
    $this->properties = $properties ?? [];
    $this->rate = $rate ?? "";
    $this->service_code = $service_code ?? "";
    $this->unit = $unit ?? "";
    $this->usage_type = $usage_type ?? "";
  }
}

class SavingsPlanRateFilter {
  public SavingsPlanRateFilterName $name;
  public ListOfStrings $values;

  public function __construct(shape(
  ?'name' => SavingsPlanRateFilterName,
  ?'values' => ListOfStrings,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type SavingsPlanRateFilterAttribute = string;

type SavingsPlanRateFilterList = vec<SavingsPlanRateFilter>;

type SavingsPlanRateFilterName = string;

type SavingsPlanRateList = vec<SavingsPlanRate>;

type SavingsPlanRateOperation = string;

type SavingsPlanRateOperationList = vec<SavingsPlanRateOperation>;

type SavingsPlanRatePricePerUnit = string;

class SavingsPlanRateProperty {
  public SavingsPlanRatePropertyKey $name;
  public JsonSafeFilterValueString $value;

  public function __construct(shape(
  ?'name' => SavingsPlanRatePropertyKey,
  ?'value' => JsonSafeFilterValueString,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

type SavingsPlanRatePropertyKey = string;

type SavingsPlanRatePropertyList = vec<SavingsPlanRateProperty>;

type SavingsPlanRateServiceCode = string;

type SavingsPlanRateServiceCodeList = vec<SavingsPlanRateServiceCode>;

type SavingsPlanRateUnit = string;

type SavingsPlanRateUsageType = string;

type SavingsPlanRateUsageTypeList = vec<SavingsPlanRateUsageType>;

type SavingsPlanServiceCode = string;

type SavingsPlanServiceCodeList = vec<SavingsPlanServiceCode>;

type SavingsPlanState = string;

type SavingsPlanStateList = vec<SavingsPlanState>;

type SavingsPlanType = string;

type SavingsPlanTypeList = vec<SavingsPlanType>;

type SavingsPlanUsageType = string;

type SavingsPlanUsageTypeList = vec<SavingsPlanUsageType>;

type SavingsPlansDuration = int;

type SavingsPlansFilterName = string;

class ServiceQuotaExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type String = string;

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public SavingsPlanArn $resource_arn;
  public TagMap $tags;

  public function __construct(shape(
  ?'resource_arn' => SavingsPlanArn,
  ?'tags' => TagMap,
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

type TagValue = string;

type TermDurationInSeconds = int;

type UUID = string;

type UUIDs = vec<UUID>;

class UntagResourceRequest {
  public SavingsPlanArn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => SavingsPlanArn,
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

class ValidationException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}


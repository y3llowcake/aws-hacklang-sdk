<?hh // strict
namespace slack\aws\entitlement.marketplace;

interface  {
  public function GetEntitlements(GetEntitlementsRequest) Awaitable<Errors\Result<GetEntitlementsResult>>;
}

class ThrottlingException {
  public ErrorMessage $message;
}

class GetEntitlementFilterName {
}

class GetEntitlementFilters {
}

class Integer {
}

class InternalServiceErrorException {
  public ErrorMessage $message;
}

class GetEntitlementsResult {
  public EntitlementList $entitlements;
  public NonEmptyString $next_token;
}

class String {
}

class Boolean {
}

class Double {
}

class ErrorMessage {
}

class FilterValue {
}

class ProductCode {
}

class Entitlement {
  public ProductCode $product_code;
  public NonEmptyString $dimension;
  public NonEmptyString $customer_identifier;
  public EntitlementValue $value;
  public Timestamp $expiration_date;
}

class EntitlementValue {
  public int $integer_value;
  public Double $double_value;
  public boolean $boolean_value;
  public string $string_value;
}

class InvalidParameterException {
  public ErrorMessage $message;
}

class NonEmptyString {
}

class EntitlementList {
}

class FilterValueList {
}

class GetEntitlementsRequest {
  public NonEmptyString $next_token;
  public int $max_results;
  public ProductCode $product_code;
  public GetEntitlementFilters $filter;
}

class Timestamp {
}


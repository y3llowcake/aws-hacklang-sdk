<?hh // strict
namespace slack\aws\forecastquery;

interface forecastquery {
  public function QueryForecast(QueryForecastRequest) Awaitable<Errors\Result<QueryForecastResponse>>;
}

class Arn {
}

class AttributeName {
}

class AttributeValue {
}

class DataPoint {
  public Timestamp $timestamp;
  public Double $value;
}

class DateTime {
}

class Double {
}

class ErrorMessage {
}

class Filters {
}

class Forecast {
  public Predictions $predictions;
}

class InvalidInputException {
  public ErrorMessage $message;
}

class InvalidNextTokenException {
  public ErrorMessage $message;
}

class LimitExceededException {
  public ErrorMessage $message;
}

class NextToken {
}

class Predictions {
}

class QueryForecastRequest {
  public DateTime $end_date;
  public Filters $filters;
  public Arn $forecast_arn;
  public NextToken $next_token;
  public DateTime $start_date;
}

class QueryForecastResponse {
  public Forecast $forecast;
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class Statistic {
}

class TimeSeries {
}

class Timestamp {
}


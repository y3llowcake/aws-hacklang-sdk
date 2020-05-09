<?hh // strict
namespace slack\aws\budgets;

interface Budgets {
  public function CreateBudget(CreateBudgetRequest) Awaitable<Errors\Result<CreateBudgetResponse>>;
  public function CreateNotification(CreateNotificationRequest) Awaitable<Errors\Result<CreateNotificationResponse>>;
  public function CreateSubscriber(CreateSubscriberRequest) Awaitable<Errors\Result<CreateSubscriberResponse>>;
  public function DeleteBudget(DeleteBudgetRequest) Awaitable<Errors\Result<DeleteBudgetResponse>>;
  public function DeleteNotification(DeleteNotificationRequest) Awaitable<Errors\Result<DeleteNotificationResponse>>;
  public function DeleteSubscriber(DeleteSubscriberRequest) Awaitable<Errors\Result<DeleteSubscriberResponse>>;
  public function DescribeBudget(DescribeBudgetRequest) Awaitable<Errors\Result<DescribeBudgetResponse>>;
  public function DescribeBudgetPerformanceHistory(DescribeBudgetPerformanceHistoryRequest) Awaitable<Errors\Result<DescribeBudgetPerformanceHistoryResponse>>;
  public function DescribeBudgets(DescribeBudgetsRequest) Awaitable<Errors\Result<DescribeBudgetsResponse>>;
  public function DescribeNotificationsForBudget(DescribeNotificationsForBudgetRequest) Awaitable<Errors\Result<DescribeNotificationsForBudgetResponse>>;
  public function DescribeSubscribersForNotification(DescribeSubscribersForNotificationRequest) Awaitable<Errors\Result<DescribeSubscribersForNotificationResponse>>;
  public function UpdateBudget(UpdateBudgetRequest) Awaitable<Errors\Result<UpdateBudgetResponse>>;
  public function UpdateNotification(UpdateNotificationRequest) Awaitable<Errors\Result<UpdateNotificationResponse>>;
  public function UpdateSubscriber(UpdateSubscriberRequest) Awaitable<Errors\Result<UpdateSubscriberResponse>>;
}

class AccessDeniedException {
  public errorMessage $message;
}

class AccountId {
}

class Budget {
  public Spend $budget_limit;
  public BudgetName $budget_name;
  public BudgetType $budget_type;
  public CalculatedSpend $calculated_spend;
  public CostFilters $cost_filters;
  public CostTypes $cost_types;
  public GenericTimestamp $last_updated_time;
  public PlannedBudgetLimits $planned_budget_limits;
  public TimePeriod $time_period;
  public TimeUnit $time_unit;
}

class BudgetName {
}

class BudgetPerformanceHistory {
  public BudgetName $budget_name;
  public BudgetType $budget_type;
  public BudgetedAndActualAmountsList $budgeted_and_actual_amounts_list;
  public CostFilters $cost_filters;
  public CostTypes $cost_types;
  public TimeUnit $time_unit;
}

class BudgetType {
}

class BudgetedAndActualAmounts {
  public Spend $actual_amount;
  public Spend $budgeted_amount;
  public TimePeriod $time_period;
}

class BudgetedAndActualAmountsList {
}

class Budgets {
}

class CalculatedSpend {
  public Spend $actual_spend;
  public Spend $forecasted_spend;
}

class ComparisonOperator {
}

class CostFilters {
}

class CostTypes {
  public NullableBoolean $include_credit;
  public NullableBoolean $include_discount;
  public NullableBoolean $include_other_subscription;
  public NullableBoolean $include_recurring;
  public NullableBoolean $include_refund;
  public NullableBoolean $include_subscription;
  public NullableBoolean $include_support;
  public NullableBoolean $include_tax;
  public NullableBoolean $include_upfront;
  public NullableBoolean $use_amortized;
  public NullableBoolean $use_blended;
}

class CreateBudgetRequest {
  public AccountId $account_id;
  public Budget $budget;
  public NotificationWithSubscribersList $notifications_with_subscribers;
}

class CreateBudgetResponse {
}

class CreateNotificationRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
  public Notification $notification;
  public Subscribers $subscribers;
}

class CreateNotificationResponse {
}

class CreateSubscriberRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
  public Notification $notification;
  public Subscriber $subscriber;
}

class CreateSubscriberResponse {
}

class CreationLimitExceededException {
  public errorMessage $message;
}

class DeleteBudgetRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
}

class DeleteBudgetResponse {
}

class DeleteNotificationRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
  public Notification $notification;
}

class DeleteNotificationResponse {
}

class DeleteSubscriberRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
  public Notification $notification;
  public Subscriber $subscriber;
}

class DeleteSubscriberResponse {
}

class DescribeBudgetPerformanceHistoryRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
  public MaxResults $max_results;
  public GenericString $next_token;
  public TimePeriod $time_period;
}

class DescribeBudgetPerformanceHistoryResponse {
  public BudgetPerformanceHistory $budget_performance_history;
  public GenericString $next_token;
}

class DescribeBudgetRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
}

class DescribeBudgetResponse {
  public Budget $budget;
}

class DescribeBudgetsRequest {
  public AccountId $account_id;
  public MaxResults $max_results;
  public GenericString $next_token;
}

class DescribeBudgetsResponse {
  public Budgets $budgets;
  public GenericString $next_token;
}

class DescribeNotificationsForBudgetRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
  public MaxResults $max_results;
  public GenericString $next_token;
}

class DescribeNotificationsForBudgetResponse {
  public GenericString $next_token;
  public Notifications $notifications;
}

class DescribeSubscribersForNotificationRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
  public MaxResults $max_results;
  public GenericString $next_token;
  public Notification $notification;
}

class DescribeSubscribersForNotificationResponse {
  public GenericString $next_token;
  public Subscribers $subscribers;
}

class DimensionValues {
}

class DuplicateRecordException {
  public errorMessage $message;
}

class ExpiredNextTokenException {
  public errorMessage $message;
}

class GenericString {
}

class GenericTimestamp {
}

class InternalErrorException {
  public errorMessage $message;
}

class InvalidNextTokenException {
  public errorMessage $message;
}

class InvalidParameterException {
  public errorMessage $message;
}

class MaxResults {
}

class NotFoundException {
  public errorMessage $message;
}

class Notification {
  public ComparisonOperator $comparison_operator;
  public NotificationState $notification_state;
  public NotificationType $notification_type;
  public NotificationThreshold $threshold;
  public ThresholdType $threshold_type;
}

class NotificationState {
}

class NotificationThreshold {
}

class NotificationType {
}

class NotificationWithSubscribers {
  public Notification $notification;
  public Subscribers $subscribers;
}

class NotificationWithSubscribersList {
}

class Notifications {
}

class NullableBoolean {
}

class NumericValue {
}

class PlannedBudgetLimits {
}

class Spend {
  public NumericValue $amount;
  public UnitValue $unit;
}

class Subscriber {
  public SubscriberAddress $address;
  public SubscriptionType $subscription_type;
}

class SubscriberAddress {
}

class Subscribers {
}

class SubscriptionType {
}

class ThresholdType {
}

class TimePeriod {
  public GenericTimestamp $end;
  public GenericTimestamp $start;
}

class TimeUnit {
}

class UnitValue {
}

class UpdateBudgetRequest {
  public AccountId $account_id;
  public Budget $new_budget;
}

class UpdateBudgetResponse {
}

class UpdateNotificationRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
  public Notification $new_notification;
  public Notification $old_notification;
}

class UpdateNotificationResponse {
}

class UpdateSubscriberRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
  public Subscriber $new_subscriber;
  public Notification $notification;
  public Subscriber $old_subscriber;
}

class UpdateSubscriberResponse {
}

class errorMessage {
}


<?hh // strict
namespace slack\aws\budgets;

interface Budgets {
  public function DeleteSubscriber(DeleteSubscriberRequest) Awaitable<Errors\Result<DeleteSubscriberResponse>>;
  public function DescribeBudgetPerformanceHistory(DescribeBudgetPerformanceHistoryRequest) Awaitable<Errors\Result<DescribeBudgetPerformanceHistoryResponse>>;
  public function DescribeNotificationsForBudget(DescribeNotificationsForBudgetRequest) Awaitable<Errors\Result<DescribeNotificationsForBudgetResponse>>;
  public function UpdateBudget(UpdateBudgetRequest) Awaitable<Errors\Result<UpdateBudgetResponse>>;
  public function DeleteBudget(DeleteBudgetRequest) Awaitable<Errors\Result<DeleteBudgetResponse>>;
  public function DescribeBudgets(DescribeBudgetsRequest) Awaitable<Errors\Result<DescribeBudgetsResponse>>;
  public function CreateBudget(CreateBudgetRequest) Awaitable<Errors\Result<CreateBudgetResponse>>;
  public function DescribeSubscribersForNotification(DescribeSubscribersForNotificationRequest) Awaitable<Errors\Result<DescribeSubscribersForNotificationResponse>>;
  public function UpdateNotification(UpdateNotificationRequest) Awaitable<Errors\Result<UpdateNotificationResponse>>;
  public function CreateNotification(CreateNotificationRequest) Awaitable<Errors\Result<CreateNotificationResponse>>;
  public function DeleteNotification(DeleteNotificationRequest) Awaitable<Errors\Result<DeleteNotificationResponse>>;
  public function DescribeBudget(DescribeBudgetRequest) Awaitable<Errors\Result<DescribeBudgetResponse>>;
  public function UpdateSubscriber(UpdateSubscriberRequest) Awaitable<Errors\Result<UpdateSubscriberResponse>>;
  public function CreateSubscriber(CreateSubscriberRequest) Awaitable<Errors\Result<CreateSubscriberResponse>>;
}

class Subscribers {
}

class DescribeSubscribersForNotificationResponse {
  public Subscribers $subscribers;
  public GenericString $next_token;
}

class BudgetedAndActualAmountsList {
}

class DescribeBudgetsRequest {
  public AccountId $account_id;
  public MaxResults $max_results;
  public GenericString $next_token;
}

class UnitValue {
}

class BudgetName {
}

class DescribeBudgetPerformanceHistoryRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
  public TimePeriod $time_period;
  public MaxResults $max_results;
  public GenericString $next_token;
}

class DescribeBudgetResponse {
  public Budget $budget;
}

class InternalErrorException {
  public errorMessage $message;
}

class Subscriber {
  public SubscriptionType $subscription_type;
  public SubscriberAddress $address;
}

class CreateSubscriberRequest {
  public Notification $notification;
  public Subscriber $subscriber;
  public AccountId $account_id;
  public BudgetName $budget_name;
}

class DescribeBudgetRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
}

class DescribeBudgetsResponse {
  public Budgets $budgets;
  public GenericString $next_token;
}

class DimensionValues {
}

class NotificationWithSubscribers {
  public Notification $notification;
  public Subscribers $subscribers;
}

class UpdateBudgetRequest {
  public AccountId $account_id;
  public Budget $new_budget;
}

class Budget {
  public PlannedBudgetLimits $planned_budget_limits;
  public CostTypes $cost_types;
  public TimeUnit $time_unit;
  public CalculatedSpend $calculated_spend;
  public BudgetType $budget_type;
  public GenericTimestamp $last_updated_time;
  public Spend $budget_limit;
  public CostFilters $cost_filters;
  public TimePeriod $time_period;
  public BudgetName $budget_name;
}

class UpdateSubscriberResponse {
}

class CreateNotificationRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
  public Notification $notification;
  public Subscribers $subscribers;
}

class TimeUnit {
}

class InvalidParameterException {
  public errorMessage $message;
}

class GenericTimestamp {
}

class PlannedBudgetLimits {
}

class AccountId {
}

class DeleteBudgetResponse {
}

class DeleteNotificationResponse {
}

class DescribeNotificationsForBudgetRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
  public MaxResults $max_results;
  public GenericString $next_token;
}

class DuplicateRecordException {
  public errorMessage $message;
}

class NullableBoolean {
}

class TimePeriod {
  public GenericTimestamp $start;
  public GenericTimestamp $end;
}

class CreationLimitExceededException {
  public errorMessage $message;
}

class CreateBudgetRequest {
  public AccountId $account_id;
  public Budget $budget;
  public NotificationWithSubscribersList $notifications_with_subscribers;
}

class CreateNotificationResponse {
}

class DeleteNotificationRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
  public Notification $notification;
}

class DescribeSubscribersForNotificationRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
  public Notification $notification;
  public MaxResults $max_results;
  public GenericString $next_token;
}

class InvalidNextTokenException {
  public errorMessage $message;
}

class UpdateNotificationResponse {
}

class CostFilters {
}

class CostTypes {
  public NullableBoolean $include_other_subscription;
  public NullableBoolean $include_discount;
  public NullableBoolean $use_amortized;
  public NullableBoolean $use_blended;
  public NullableBoolean $include_upfront;
  public NullableBoolean $include_recurring;
  public NullableBoolean $include_credit;
  public NullableBoolean $include_support;
  public NullableBoolean $include_tax;
  public NullableBoolean $include_subscription;
  public NullableBoolean $include_refund;
}

class NotFoundException {
  public errorMessage $message;
}

class Notifications {
}

class errorMessage {
}

class Budgets {
}

class CreateBudgetResponse {
}

class CreateSubscriberResponse {
}

class GenericString {
}

class Notification {
  public NotificationState $notification_state;
  public NotificationType $notification_type;
  public ComparisonOperator $comparison_operator;
  public NotificationThreshold $threshold;
  public ThresholdType $threshold_type;
}

class SubscriberAddress {
}

class BudgetType {
}

class DescribeNotificationsForBudgetResponse {
  public Notifications $notifications;
  public GenericString $next_token;
}

class NotificationThreshold {
}

class NumericValue {
}

class SubscriptionType {
}

class UpdateBudgetResponse {
}

class DeleteBudgetRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
}

class BudgetPerformanceHistory {
  public BudgetedAndActualAmountsList $budgeted_and_actual_amounts_list;
  public BudgetName $budget_name;
  public BudgetType $budget_type;
  public CostFilters $cost_filters;
  public CostTypes $cost_types;
  public TimeUnit $time_unit;
}

class ExpiredNextTokenException {
  public errorMessage $message;
}

class NotificationState {
}

class UpdateNotificationRequest {
  public AccountId $account_id;
  public BudgetName $budget_name;
  public Notification $old_notification;
  public Notification $new_notification;
}

class UpdateSubscriberRequest {
  public Subscriber $new_subscriber;
  public AccountId $account_id;
  public BudgetName $budget_name;
  public Notification $notification;
  public Subscriber $old_subscriber;
}

class AccessDeniedException {
  public errorMessage $message;
}

class DeleteSubscriberRequest {
  public Subscriber $subscriber;
  public AccountId $account_id;
  public BudgetName $budget_name;
  public Notification $notification;
}

class Spend {
  public NumericValue $amount;
  public UnitValue $unit;
}

class ThresholdType {
}

class CalculatedSpend {
  public Spend $actual_spend;
  public Spend $forecasted_spend;
}

class ComparisonOperator {
}

class DeleteSubscriberResponse {
}

class MaxResults {
}

class NotificationType {
}

class BudgetedAndActualAmounts {
  public Spend $budgeted_amount;
  public Spend $actual_amount;
  public TimePeriod $time_period;
}

class NotificationWithSubscribersList {
}

class DescribeBudgetPerformanceHistoryResponse {
  public BudgetPerformanceHistory $budget_performance_history;
  public GenericString $next_token;
}


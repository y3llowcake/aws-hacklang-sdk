<?hh // strict
namespace slack\aws\rds-data;

interface RDS Data {
  public function BatchExecuteStatement(BatchExecuteStatementRequest) Awaitable<Errors\Result<BatchExecuteStatementResponse>>;
  public function BeginTransaction(BeginTransactionRequest) Awaitable<Errors\Result<BeginTransactionResponse>>;
  public function CommitTransaction(CommitTransactionRequest) Awaitable<Errors\Result<CommitTransactionResponse>>;
  public function ExecuteSql(ExecuteSqlRequest) Awaitable<Errors\Result<ExecuteSqlResponse>>;
  public function ExecuteStatement(ExecuteStatementRequest) Awaitable<Errors\Result<ExecuteStatementResponse>>;
  public function RollbackTransaction(RollbackTransactionRequest) Awaitable<Errors\Result<RollbackTransactionResponse>>;
}

class Arn {
}

class ArrayOfArray {
}

class ArrayValue {
  public ArrayOfArray $array_values;
  public BooleanArray $boolean_values;
  public DoubleArray $double_values;
  public LongArray $long_values;
  public StringArray $string_values;
}

class ArrayValueList {
}

class BadRequestException {
  public ErrorMessage $message;
}

class BatchExecuteStatementRequest {
  public DbName $database;
  public SqlParameterSets $parameter_sets;
  public Arn $resource_arn;
  public DbName $schema;
  public Arn $secret_arn;
  public SqlStatement $sql;
  public Id $transaction_id;
}

class BatchExecuteStatementResponse {
  public UpdateResults $update_results;
}

class BeginTransactionRequest {
  public DbName $database;
  public Arn $resource_arn;
  public DbName $schema;
  public Arn $secret_arn;
}

class BeginTransactionResponse {
  public Id $transaction_id;
}

class Blob {
}

class Boolean {
}

class BooleanArray {
}

class BoxedBoolean {
}

class BoxedDouble {
}

class BoxedFloat {
}

class BoxedInteger {
}

class BoxedLong {
}

class ColumnMetadata {
  public int $array_base_column_type;
  public boolean $is_auto_increment;
  public boolean $is_case_sensitive;
  public boolean $is_currency;
  public boolean $is_signed;
  public string $label;
  public string $name;
  public int $nullable;
  public int $precision;
  public int $scale;
  public string $schema_name;
  public string $table_name;
  public int $type;
  public string $type_name;
}

class CommitTransactionRequest {
  public Arn $resource_arn;
  public Arn $secret_arn;
  public Id $transaction_id;
}

class CommitTransactionResponse {
  public TransactionStatus $transaction_status;
}

class DbName {
}

class DecimalReturnType {
}

class DoubleArray {
}

class ErrorMessage {
}

class ExecuteSqlRequest {
  public Arn $aws_secret_store_arn;
  public DbName $database;
  public Arn $db_cluster_or_instance_arn;
  public DbName $schema;
  public SqlStatement $sql_statements;
}

class ExecuteSqlResponse {
  public SqlStatementResults $sql_statement_results;
}

class ExecuteStatementRequest {
  public boolean $continue_after_timeout;
  public DbName $database;
  public boolean $include_result_metadata;
  public SqlParametersList $parameters;
  public Arn $resource_arn;
  public ResultSetOptions $result_set_options;
  public DbName $schema;
  public Arn $secret_arn;
  public SqlStatement $sql;
  public Id $transaction_id;
}

class ExecuteStatementResponse {
  public Metadata $column_metadata;
  public FieldList $generated_fields;
  public RecordsUpdated $number_of_records_updated;
  public SqlRecords $records;
}

class Field {
  public ArrayValue $array_value;
  public Blob $blob_value;
  public BoxedBoolean $boolean_value;
  public BoxedDouble $double_value;
  public BoxedBoolean $is_null;
  public BoxedLong $long_value;
  public string $string_value;
}

class FieldList {
}

class ForbiddenException {
  public ErrorMessage $message;
}

class Id {
}

class Integer {
}

class InternalServerErrorException {
}

class Long {
}

class LongArray {
}

class Metadata {
}

class NotFoundException {
  public ErrorMessage $message;
}

class ParameterName {
}

class Record {
  public Row $values;
}

class Records {
}

class RecordsUpdated {
}

class ResultFrame {
  public Records $records;
  public ResultSetMetadata $result_set_metadata;
}

class ResultSetMetadata {
  public Long $column_count;
  public Metadata $column_metadata;
}

class ResultSetOptions {
  public DecimalReturnType $decimal_return_type;
}

class RollbackTransactionRequest {
  public Arn $resource_arn;
  public Arn $secret_arn;
  public Id $transaction_id;
}

class RollbackTransactionResponse {
  public TransactionStatus $transaction_status;
}

class Row {
}

class ServiceUnavailableError {
}

class SqlParameter {
  public ParameterName $name;
  public TypeHint $type_hint;
  public Field $value;
}

class SqlParameterSets {
}

class SqlParametersList {
}

class SqlRecords {
}

class SqlStatement {
}

class SqlStatementResult {
  public RecordsUpdated $number_of_records_updated;
  public ResultFrame $result_frame;
}

class SqlStatementResults {
}

class StatementTimeoutException {
  public Long $db_connection_id;
  public ErrorMessage $message;
}

class String {
}

class StringArray {
}

class StructValue {
  public ArrayValueList $attributes;
}

class TransactionStatus {
}

class TypeHint {
}

class UpdateResult {
  public FieldList $generated_fields;
}

class UpdateResults {
}

class Value {
  public ArrayValueList $array_values;
  public BoxedLong $big_int_value;
  public BoxedBoolean $bit_value;
  public Blob $blob_value;
  public BoxedDouble $double_value;
  public BoxedInteger $int_value;
  public BoxedBoolean $is_null;
  public BoxedFloat $real_value;
  public string $string_value;
  public StructValue $struct_value;
}


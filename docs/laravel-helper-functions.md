#### Laravel Helper Functions

1. [begin_transaction()](/laravel-helper-functions?id=begin_transaction)
2. [commit_transaction()](/laravel-helper-functions?id=commit_transaction)
3. [rollback_transaction()](/laravel-helper-functions?id=rollback_transaction)

&nbsp;

1. <h5 id="begin_transaction">begin_transaction()</h5>

   > begin a database transaction

   ```
   /**
   * begin a transaction
   * @return void
   */
   function begin_transaction()
   {
       \Illuminate\Support\Facades\DB::beginTransaction();
   }
   ```

2. <h5 id="commit_transaction">commit_transaction()</h5>

> commit a database transaction

    ```
    /**
    * commit a transactions
    * @return void
    */
    function commit_transaction()
    {
        \Illuminate\Support\Facades\DB::commit();
    }
    ```

3. <h5 id="rollback_transaction">rollback_transaction()</h5>

   > rollback a database transaction

   ```
   /**
   * rollback a transactions
   * @return void
   */
   function rollback_transaction()
   {
       \Illuminate\Support\Facades\DB::rollBack();
   }
   ```

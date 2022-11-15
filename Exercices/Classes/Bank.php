<?php
class Bank
{
    public $currency;
    public $transactions;

    function __construct()
    {
        $this->currency = 'EUR';
        $this->transactions = [
            0 => [
                'amount' => 1220,
                'type' => 'deposit'
            ],
            1 => [
                'amount' => 143,
                'type' => 'deposit'
            ],
            2 => [
                'amount' => 45,
                'type' => 'deposit'
            ],
            3 => [
                'amount' => 28,
                'type' => 'deposit'
            ],
            4 => [
                'amount' => 12,
                'type' => 'withdrawal'
            ],
            5 => [
                'amount' => 47,
                'type' => 'withdrawal'
            ],
            6 => [
                'amount' => 60,
                'type' => 'withdrawal'
            ],
            7 => [
                'amount' => 80,
                'type' => 'withdrawal'
            ],
        ];
    }

    /**
     * Get transactions by type.
     *
     * @param string $type The type of transactions: deposit or withdrawal.
     * @return array An array with the corresponding transactions.
     */
    function get_transactions_by_type(string $type): array
    {
        // Return an array with all transactions of a specific type
        return array_filter($this->transactions, function ($transaction) use ($type) {
            return $transaction['type'] === $type;
        });
    }

    /**
     * Get the total amount of all transactions.
     *
     * @return float The total amount.
     */
    function get_total_amount(): float
    {
        $amount = 0;

        // Loop on the transactions to add or remove the amount depending of the transaction type
        foreach ($this->transactions as $transaction) {
            $transaction['type'] === 'deposit' ? $amount += $transaction['amount'] : $amount -= $transaction['amount'];
        }

        return $amount;
    }

    /**
     * Get transactions averyage by type.
     *
     * @param string $type The type of transactions: deposit or withdrawal.
     * @return float The average transactions of a specific type.
     */
    function get_transactions_average(string $type): float
    {
        $result = 0;
        // Get the transactions by the specific type
        $transactions = $this->get_transactions_by_type($type);

        // Loop and sum all the transactions
        foreach ($transactions as $transaction) {
            $result += $transaction['amount'];
        }

        // Divide the result by the number of transactions
        return $result / count($transactions);
    }

    /**
     * Format a given amount.
     *
     * @param float $amount Amount to format.
     * @return string Formatted amount.
     */
    function format_amount(float $amount): string
    {
        return number_format($amount, 2, ',', ' ') . ' ' . $this->currency;
    }
}

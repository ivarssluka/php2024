<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transactions</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        table tr th, table tr td {
            padding: 5px;
            border: 1px solid black;
        }

        tfoot tr th, tfoot tr td {
            font-size: 20px;
        }

        tfoot tr th {
            text-align: right;
        }
    </style>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>Date</th>
            <th>Check #</th>
            <th>Description</th>
            <th>Amount</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($transactions as $transaction): ?>
        </tbody>
        <tfoot>
        <tr>
            <th colspan="3">Total Income:</th>
            <td></td>
        </tr>
        <tr>
            <th colspan="3">Total Expense:</th>
        </tr>
        <tr>
            <th colspan="3">Net Total:</th>
        </tr>
        </tfoot>
    </table>
</body>
</html>
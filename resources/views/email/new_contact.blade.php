<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nuovo Ordine</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header, .footer {
            text-align: center;
            background-color: #26a397;
            color: white;
            padding: 10px 0;
        }
        .content {
            margin: 20px 0;
        }
        .content h2 {
            color: #26a397;
        }
        .content p {
            line-height: 1.6;
        }
        .info {
            border-collapse: collapse;
            width: 100%;
        }
        .info th, .info td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .info th {
            background-color: #f2f2f2;
        }
        .info tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .info tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Nuovo Ordine Ricevuto</h1>
        </div>
        <div class="content">
            <h2>Dettagli dell'ordine</h2>
            <p>Hai ricevuto un nuovo Ordine:</p>
            <table class="info">
                <tr>
                    <th>Nome</th>
                    <td>{{ $lead->name }}</td>
                </tr>
                <tr>
                    <th>Cognome</th>
                    <td>{{ $lead->surname }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $lead->email }}</td>
                </tr>
                <tr>
                    <th>Telefono</th>
                    <td>{{ $lead->phone_number }}</td>
                </tr>
                <tr>
                    <th>Indirizzo</th>
                    <td>{{ $lead->address }}</td>
                </tr>
                <tr>
                    <th>Data</th>
                    <td>{{ $lead->date }}</td>
                </tr>
                <tr>
                    <th>Metodo di Pagamento</th>
                    <td>{{ $lead->payment_method }}</td>
                </tr>
                <tr>
                    <th>Prezzo Totale</th>
                    <td>{{ $lead->total_price }}</td>
                </tr>
                <tr>
                    <th>Note</th>
                    <td>{{ $lead->note }}</td>
                </tr>
            </table>
        </div>
        <div class="footer">
            <p>© 2024 DeliveBoo. Tutti i diritti riservati.</p>
        </div>
    </div>
</body>
</html>


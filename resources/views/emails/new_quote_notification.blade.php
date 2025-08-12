<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quotation Request Notification</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 0;
            margin: 0;
        }
        .container {
            max-width: 600px;
            background: #ffffff;
            margin: 40px auto;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #e53935;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .header h2 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
        }
        .content p {
            margin: 8px 0;
            line-height: 1.6;
        }
        .label {
            font-weight: bold;
            color: #e53935;
        }
        .footer {
            background-color: #f1f1f1;
            color: #777;
            font-size: 12px;
            text-align: center;
            padding: 10px;
        }
        .footer a {
            color: #e53935;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h2>📩 New Quote Request Submitted</h2>
    </div>
    <div class="content">
        <p><span class="label">{{ __('Quote Number') }}:</span> {{ $quote->quote_number }}</p>
        <p><span class="label">{{ __('Customer Name') }}:</span> {{ $quote->customer_name }}</p>
        <p><span class="label">{{ __('Customer Phone Number') }}:</span> {{ $quote->customer_phone }}</p>
        <p><span class="label">{{ __('Customer Email') }}:</span> {{ $quote->customer_email }}</p>
        <p>You can see more details about the request by clicking <a style="text-decoration: underline; color: #e53935;" href="{{ route('filament.admin.resources.quotes.view', $quote) }}">here</a></p>
    </div>
    <div class="footer">
        <p>This message was sent from your website quotation request form.</p>
        <p>&copy; {{ date('Y') }} <a href="{{ config('app.url') }}">{{ config('app.name') }}</a></p>
    </div>
</div>
</body>
</html>

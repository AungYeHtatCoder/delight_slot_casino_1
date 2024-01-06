<x-mail::message>
<h4 style="text-align: center;">{{ $mail['status'] }}</h4>
<div style="text-align: center;">
    Username: {{ $mail['name'] }}
    Balance: {{ $mail['balance'] }}

    Requested Phone: {{ $mail['phone'] }}
    Requested Amount: {{ $mail['amount'] }}
    Requested Payment Method: {{ $mail['payment_method'] }}
</div>
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

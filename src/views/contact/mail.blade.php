@component('mail::message')
# Introduction


There is a new query from {{ $name }}.
Message body: {{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

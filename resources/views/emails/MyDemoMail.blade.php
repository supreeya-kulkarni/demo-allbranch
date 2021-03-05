@component('mail::message')
# {{  $details['title'] }}

Hello Please chech url.

@component('mail::button', ['url' => $details['url']])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

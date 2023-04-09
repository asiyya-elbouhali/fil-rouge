{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}

@component('mail::message')
# New contact form submission

Name: {{ $data['name'] }}

Email: {{ $data['email'] }}

Message: {{ $data['message'] }}
@endcomponent


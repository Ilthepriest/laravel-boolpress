@component('mail::message')
# Introduction

Grazie per scrivere

Name: {{$message->full_name}}<br>
Email : {{$message->email}}
Subject : {{$message->subject}}

Il tuo messaggio:<br>
{{$message->message}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent

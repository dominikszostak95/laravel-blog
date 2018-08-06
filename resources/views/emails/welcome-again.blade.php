@component('mail::message')
# Introduction

The body of your message.

- one
- two
- three
- four
- five

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
    Lorem ipsum.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# {{ trans('notifications.schedule.new.mail.title') }}

{{ $content }}

{{ $description }}

{{ Config::get('setting.app_name') }}

@include('notifications.partials.subscription')

@endcomponent

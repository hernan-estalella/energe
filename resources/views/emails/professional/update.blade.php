@include('emails.templates.header')
<p>{{__('Hi')}} {{ $data->academic_degree->name }} {{ $data->name }} {{ $data->surname }}!</p>
<p>{{__('E-mail to login our system has been changed')}}. {{__('Click')}} <a href="{{ config('app.url') }}" target="_blank" rel="noopener">{{__('here')}}</a> {{__('to login')}}.</p>
<p>{{__('The new login data is')}}:</p>
<ul>
<li><strong>{{__('User')}}: </strong>{{ $data->email }}</li>
</ul>
<p>{{__('Your password has not changed, but you can change it whenever you want from your user profile')}}.</p>
<p>{{__('If you did not request this change, contact the system administrator')}}.</p>
<p>{{__('Your access data is personal and private')}}. <u>{{__('We recommend that you do not disclose them')}}.</u></p>
@include('emails.templates.footer')
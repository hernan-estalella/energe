@include('emails.templates.header')
<p>{{__('Hi')}} {{ $data->academic_degree->name }} {{ $data->name }} {{ $data->surname }}!</p>
<p>{{__('You have been registered as a professional in our system')}}. {{__('Click')}} <a href="{{ config('app.url') }}" target="_blank" rel="noopener">{{__('here')}}</a> {{__('to login')}}.</p>
<p>{{__('The login data is')}}:</p>
<ul>
<li><strong>{{__('User')}}: </strong>{{ $data->email }}</li>
<li><strong>{{__('Password')}}: </strong>{{ $data->random_pass }}</li>
</ul>
<p>{{__('You can change your password whenever you want from your profile')}}.</p>
<p>{{__('Your access data is personal and private')}}. <u>{{__('We recommend that you do not disclose them')}}.</u></p>
@include('emails.templates.footer')
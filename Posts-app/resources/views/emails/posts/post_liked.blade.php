@component('mail::message')
# Your post was liked

{{$liker->name}}Liked one of your posts
@component('mail::button', ['url' => route('post.show',$post)])
View Post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

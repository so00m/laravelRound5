<x-mail::message>
<div >
   Hello admin ,
<br><br>
</div>
 
<div >
    {{$data['contentMessage']}}
</div>
 
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
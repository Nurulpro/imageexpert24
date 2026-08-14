<h2>Hello !</h2> <br><br>

You received a free trial request from : {{ $name }} <br><br>

User details: <br><br>

Name:  {{ $name }}<br>
Email:  {{ $email }}<br>
Subject:  {{ $formSubject }}<br>
@if($attachmentPath)
Attachment: see attached file<br><br>
@else
Attachment: none<br><br>
@endif

Thanks


<div class="container">
<ui class="list-group">

@foreach($s as $sname)
<li>{{$sname[0]}}
{{$sname[1]}}
{{$sname[2]}}
</li>
@endforeach
</ui>
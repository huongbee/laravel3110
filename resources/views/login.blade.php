<style>
    .red{
        color:red
    }
    .blue{
        color: blue
    }
</style>


<?php
//echo "this is a view";
//echo "<br>";
//echo $userName;
?>

<br>
{{--  This is comment  --}}
{{--$userName--}}

{{$user_name}}
{{$password}}

<?php foreach ($arr as $key => $value):?>
<h1 class="<?=$value=='Android'?'red':'blue'?>"><?=$value?></h1>
<?php endforeach ?>

<hr>

@foreach($arr as $value)
<h2 class="{{$value=='Android'?'red':'blue'}}">{{$value}}</h2>
@endforeach

<hr>

@foreach($arr as $value)
<h2 class="@if($value=='Android') red @else blue @endif">{{$value}}</h2>
@endforeach

<hr>
<h3>{{$book}}</h3>
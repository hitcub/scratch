@extends('common.layout')

@section('tagu')
  {{$tagu}}
@endsection

@section('title2')
  {{$title2}}
@endsection

@section('body')
    <section>
	    <!--<h1>■@yield('title1')</h1>-->
        <p class="btn04"><a href="usertouroku"></a></p>
    </section>
	<section>
        <h1>@yield('title2')</h1>
        <table class="items sort-table m0a tac approval" border="1">
            <tr> 
                <th>社員番号</th>
                <th>所属部署</th>
                <th>氏名</th>
                <th>退職日</th>
                <th>情シス</th>
            </tr>
            @if (isset($msgs1, $msgs2, $msgs3))
                <tr class="clickable-row item"> 
                @foreach ($msgs1 as $msg1)
                    <td>{{$msg1}}</td>
                @endforeach
                </tr> 
                <t rclass="clickable-row item"> 
                @foreach ($msgs2 as $msg2)
                    <td>{{$msg2}}</td>
                @endforeach
                </tr> 
                <t rclass="clickable-row item"> 
                @foreach ($msgs3 as $msg3)
                    <td>{{$msg3}}</td>
                @endforeach
                </tr>
                <tr class="clickable-row item"> 
                @foreach ($msgs4 as $msg4)
                    <td>{{$msg4}}</td>
                @endforeach
                </tr> 
                <tr class="clickable-row item"> 
                @foreach ($msgs5 as $msg5)
                    <td>{{$msg5}}</td>
                @endforeach
                </tr> 
            @endif
        </table>
	</section>

    <script>
        $('table.items').pagination({
            itemElement : '> > tr.item' // アイテムの要素
        });
    </script>

    <script>
        $(function(){
            $('.sort-table').tablesorter({
                textExtraction: function(node){
                    var attr = $(node).attr('data-value');
                    if(typeof attr !== 'undefined' && attr !== false){
                        return attr;
                    }
                    return $(node).text();
                }
            });
        });
    </script>
@endsection
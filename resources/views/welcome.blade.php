 <h1>hello i m from wellcome view</h1>
 {{10 +20}}

 @php
 $names =["jon snow","sansa stark","arya stark","ned stark"];
 @endphp
 <ul>
 @foreach($names as $n)
 <li>
 {{$loop->index}} - {{$n}}
</li>
 @endforeach
</ul>
 
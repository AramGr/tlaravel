<div class="col-md-9">

    @if(count($data) < 3)
        In the array there are less than 3 elements
    @elseif(count($data) > 10)
        In the array there are more than 10  elements
    @else
        We don't know how many elements there are in the array
    @endif

    <ul>
    @for($i=0;$i<count($dataI);$i++)
        <li>{{ $dataI[$i] }}</li>
    @endfor
    </ul>

    <ul>
    @foreach($data as $k => $value)
        <li>{{ $k.'=>'.$value }}</li>
    @endforeach
    </ul>

    <ul>
        @forelse($data as $k => $value)
            <li>{{ $k.'=>'.$value }}</li>
        @empty
            <p>No items</p>
        @endforelse
    </ul>

    @while(FALSE)
        <p>I'm looping forever</p>
    @endwhile

    @each('default.list', $dataI, 'value')

    @myDir('Hello')

    <div class="col-md-6">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-6">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>

    <div style="clear:both"></div>
    <div class="blog-post">
        <div class="page-header">
            <h1>Sample Plog Post</h1>
        </div>
        <p>This blog post shows a few types of content that's supportet and </p>
        <p>Cum sociic natoque pentabis los erno ke ti purelo <a href="#">dis parturient montes</a></p>
        <blackquote>
            <p>Carabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna </strong></p>
        </blackquote>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras matas conse</p>
    </div><!-- /.blog-post -->

</div>
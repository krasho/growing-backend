@extends("layouts/public")

@section("content")
   <section class="second-container">
       @if (count($event)>0)
         <div class="new">
            <img src="{{ $pathFile }}">
         </div>
       @endif

       <div class="phrase">
           @foreach ($phrase as $p)
              <p>{{ $p->name }} <span>{{ $p->author }}</span></p>
           @endforeach

       </div>
   </section>

   <section class="posts">
       @foreach ($posts as $post)
         <div class="post">
            <div class="header">
                <div class="title">
                    {{ $post->title }} - {{ $post->id }}
                </div>
                <div class="post-information">
                    <div class="author">
                        {{ $post->author }}
                    </div>
                    <div class="publish-date">
                        {{ $post->publish_date }}
                    </div>
                    <div class="comments">
                        {{ $post->commentsCount }} Comentarios
                    </div>
                </div>
            </div>
            <div class="body">
                @if ($post->image)
                  <div class="image-post">
                      Imagen del post
                  </div>
                @endif


                <div class="content">
                  {{ $post->short_description }}
                </div>

                <div class="link-post">
                  <a href="{{url('/post', $post->id) }}">Ver Post</a>
                </div>
            </div>

         </div>

       @endforeach

   </section>
@stop

          <div class="blog-post">
            
            <a href="/posts/{{ $post->id }}">
              <h2 class="blog-post-title">{{$post->title}}</h2>
            </a>
            <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>

            {{$post->body}}
          </div><!-- /.blog-post -->

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

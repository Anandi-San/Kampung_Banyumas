    <div class="row">
         <div class="offset-2 col-md-8 py-5">
         <a href="/blog" class="btn btn-primary px-4"><i class="fas fa-arrow-left"></i>Kembali</a>
                <h4><b>{{$blog->title}}</b></h4>
                <p>date created {{$blog->created_at}}</p>
                <img src="/{{$blog->cover}}" width="100%" alt="">
                <div class="col-py-3">
                        <p>{!! $blog->body !!}</p>
            </div>
        </div>
     </div>
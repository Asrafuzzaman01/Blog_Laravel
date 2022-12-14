@extends('layout.website')
@section('content')
<div class="site-cover site-cover-sm same-height overlay single-page"
    style="background-image: url('');">
    <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="post-entry text-center">
                    <span class="post-category text-white bg-success mb-3">category name</span>
                    {{-- <h1 class="mb-4"><a href="javascript:void()">post title</a></h1> --}}
                    <div class="post-meta align-items-center text-center">
                        <figure class="author-figure mb-0 mr-3 d-inline-block">
                            <img src="{{ asset ('website') }}/images/img_1.jpg" alt="Image" class="img-fluid rounded">
                        </figure>
                        <span class="d-inline-block mt-1">By  user name</span>
                        <span>date</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="site-section py-lg">
    <div class="container">
        <div class="row blog-entries element-animate">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="post-content-body">
                    description
                </div>
                <div class="pt-5">
                    <p>
                        Categories: <a href="#">category name</a>



                                <a href="">tag name</a>,


                    </p>
                </div>
                <div class="pt-5">
                    <h3 class="mb-5" id="dsq-count-scr">6 Comments</h3>
                    <a href="">Comments</a>

                    <div id="disqus_thread"></div>



                </div>

            </div>

            <!-- END main-content -->

            <div class="col-md-12 col-lg-4 sidebar">
                <div class="sidebar-box search-form-wrap">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <!-- END sidebar-box -->
                <div class="sidebar-box">
                    <div class="bio text-center">
                        <img src="{{ asset ('website') }}/images/img_1.jpg" alt="Image" class="img-fluid mb-5">
                        <div class="bio-body">
                            <h2>user name</h2>
                            <p class="mb-4">description </p>
                            <p><a href="#" class="btn btn-primary btn-sm rounded px-4 py-2">Read my bio</a></p>
                            <p class="social">
                                <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- END sidebar-box -->
                <div class="sidebar-box">
                    <h3 class="heading">Popular Posts</h3>
                    <div class="post-entry-sidebar">
                        <ul>

                            <li>
                                <a href="">
                                    <img src="" alt="Image placeholder"
                                        class="mr-4">
                                    <div class="text">
                                        <h4> post title </h4>
                                        <div class="post-meta">
                                            <span class="mr-2">date </span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- END sidebar-box -->

                <div class="sidebar-box">
                    <h3 class="heading">Categories</h3>
                    <ul class="categories">

                        <li><a href="#">category name <span></span> </a></li>

                    </ul>
                </div>
                <!-- END sidebar-box -->

                <div class="sidebar-box">
                    <h3 class="heading">Tags</h3>
                    <ul class="tags">

                        <li><a href=""> </a></li>

                    </ul>
                </div>
            </div>
            <!-- END sidebar -->

        </div>
    </div>
</section>

<div class="site-section bg-light">
    <div class="container">

        <div class="row mb-5">
            <div class="col-12">
                <h2>More Related Posts</h2>
            </div>
        </div>

        <div class="row align-items-stretch retro-layout">

             <div class="col-md-5 order-md-2">

                <a href="single.html" class="hentry img-1 h-100 gradient"
                     style="background-image: url('');">
                    <span class="post-category text-white bg-danger">post category name</span>
                    <div class="text">
                        <h2>posttitle</h2>
                        <span>created_atformat</span>
                    </div>
                </a>

            </div> 

            <div class="col-md-7">

                <a href="single.html" class="hentry img-2 v-height mb30 gradient"
                    style="">
                    <span class="post-category text-white bg-success">category->name </span>
                    <div class="text text-sm">
                        <h2>posttitle </h2>
                        <span>post->created_atformat</span>
                    </div>
                </a>


                <div class="two-col d-block d-md-flex justify-content-between">

                    <a href="" class="hentry v-height img-2 gradient"
                        style="">
                        <span class="post-category text-white bg-primary">category name</span>
                        <div class="text text-sm">
                            <h2> posttitle</h2>
                            <span>post created_atformat</span>
                        </div>
                    </a>

                </div>
            </div>
        </div>

    </div>
</div>

<div class="site-section bg-lightx">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-5">
                <div class="subscribe-1 ">
                    <h2>Subscribe to our newsletter</h2>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a
                        explicabo, ipsam nostrum.</p>
                    <form action="#" class="d-flex">
                        <input type="text" class="form-control" placeholder="Enter your email address">
                        <input type="submit" class="btn btn-primary" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @section('script')
<script>
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://laravel-blog-tutorial-series.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<script id="dsq-count-scr" src="//laravel-blog-tutorial-series.disqus.com/count.js" async></script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection --}}

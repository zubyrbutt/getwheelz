@include('layouts.nav')
<section id="main" class="clearfix about-us page">
		<div class="container">

			<div class="breadcrumb-section">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Blog</li> 
				</ol><!-- breadcrumb -->						
				<h2 class="title">Blog</h2>	
			</div>
<div class="section about">
        <div class="about-info">
            @foreach ($blogs as $blog)
                
            
            <div class="row">
                <!-- about-us-images -->
                <div class="col-lg-6">
                    <div class="about-us-images">
                        <img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
                    </div>
                </div><!-- about-us-images -->
                
                <!-- about-text -->
                <div class="col-lg-6">
                    <div class="about-text">
                        <h3>{{ $blog->title }}
                        </h3>
                        
                        <!-- description-paragraph -->
                        <div class="description-paragraph">
                            <p>{{ $blog->description }}</p>
                            <span class="muted pull-right">Posted: {{ $blog->created_at->diffForHumans() }}</span>

                        </div><!-- description-paragraph -->
                        
                        <!-- description-paragraph -->
                    </div><!-- description-paragraph -->
                </div><!-- about-text -->
            </div>
            <hr>
            @endforeach
            {{ $blogs->links() }}
        </div><!-- about-info -->
</div>    
        </div>
    </section>


@include('layouts.footer')

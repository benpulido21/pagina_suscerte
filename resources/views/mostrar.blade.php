<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ul>
@foreach($category as $category)
<li>{{$category->category}}</li>
@endforeach
</ul>

<!--<ul>
@for($category->id = 1; $category->id<=5; $category->id++)
<li>{{$category->id}}</li>
@endfor
</ul>

<ul>
@foreach($news as $news)
	<li>{{$news->category->category}}<li>
@endforeach
</ul>-->
<!--
<ul>
@foreach($image as $image)
<li></li>

<div><img width="650" height="500" src="{{asset('/' . $image->url)}}"></div>

	
@endforeach

</ul>		-->

<ul>
@foreach($news as $news)
<div><span>{{$news->['title']}}</span></div>
@endforeach
</ul>
<!--<ul>
@for($image->id = 1; $image->id <= 2; $image->id++)
<li>{{$image->url}}</li>

<div><img width="650" height="500" src="{{asset('/' . $image->url)}}"></div>

@endfor
</ul>-->

</body>
</html>




<!--<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
<div class="col-md-4 product-left">
<div id="container_2">
<div id="carrusel_text2" class="rslides">
				<div><span>Titulo 1<!--{$news_titule4 -> titule}--></span></div>
				<!--<div><span><{$news_titule5 -> titule}></span></div>
				<div><span><{$news_titule6 -> titule}></span></div>-->
			<!--</div>
			<script type="text/javascript">
				$(function(){
					$('#carrusel_text2 div:gt(0)').hide();
					setInterval(function(){
                    $('#carrusel_text2 div:first-child').fadeOut(4000)
                    .next('div').fadeIn(4000)
                    .end().appendTo('#carrusel_text2');
					},4000);

				})
			</script>				
	<div id="carrusel2" class="rslides">
		<div><img width="650" height="500" src=""></div>
		<div><img width="650" height="500" src=""></div>
		<div><img width="650" height="500" src=""></div>
	</div>
</div>

		</div>
		<script type="text/javascript">
				$(function(){
					$('#carrusel2 div:gt(0)').hide();
					setInterval(function(){
                    $('#carrusel2 div:first-child').fadeOut(4000)
                    .next('div').fadeIn(4000)
                    .end().appendTo('#carrusel2');
					},4000);

				})
			</script>
			<div class="clearfix"></div>
			</div>
<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
<div class="col-md-4 product-left">
<div id="container_3">
<div id="carrusel_text3" class="rslides">
				<div><span>Titulo 1<!--{$news_titule7 -> titule}--></span></div>
				<!--<div><span><{$news_titule8 -> titule}></span></div>
				<div><span><{$news_titule9 -> titule}></span></div>-->
		<!--	</div>
			<script type="text/javascript">
				$(function(){
					$('#carrusel_text3 div:gt(0)').hide();
					setInterval(function(){
                    $('#carrusel_text3 div:first-child').fadeOut(4000)
                    .next('div').fadeIn(4000)
                    .end().appendTo('#carrusel_text3');
					},4000);

				})
			</script>				
	<div id="carrusel3" class="rslides">
		<div><img width="650" height="500" src=""></div>
		<div><img  width="650" height="500" src=""></div>
		<div><img  width="650" height="500" src=""></div>
	</div>
</div>
	</div>
	<script type="text/javascript">
				$(function(){
					$('#carrusel3 div:gt(0)').hide();
					setInterval(function(){
                    $('#carrusel3 div:first-child').fadeOut(4000)
                    .next('div').fadeIn(4000)
                    .end().appendTo('#carrusel3');
					},4000);

				})
			</script>
			<div class="clearfix"></div>
			</div>
<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
<div class="col-md-4 product-left">
<div id="container_4">
<div id="carrusel_text4" class="rslides">
				<div><span>Titulo 1<!--{$news_titule10 -> titule}--></span></div>
				<!--<div><span><{$news_titule11 -> titule}</span></div>
				<div><span>{$news_titule12 -> titule}</span></div>-->
			<!--</div>
			<script type="text/javascript">
				$(function(){
					$('#carrusel_text4 div:gt(0)').hide();
					setInterval(function(){
                    $('#carrusel_text4 div:first-child').fadeOut(4000)
                    .next('div').fadeIn(4000)
                    .end().appendTo('#carrusel_text4');
					},4000);

				})
			</script>				
	<div id="carrusel4" class="rslides">
		<div><img width="650" height="500" src=""></div>
		<div><img width="650" height="500" src=""></div>
		<div><img width="650" height="500" src=""></div>
	</div>
</div>
	</div>
	<script type="text/javascript">
				$(function(){
					$('#carrusel4 div:gt(0)').hide();
					setInterval(function(){
                    $('#carrusel4 div:first-child').fadeOut(4000)
                    .next('div').fadeIn(4000)
                    .end().appendTo('#carrusel4');
					},4000);

				})
			</script>
			<div class="clearfix"></div>
			</div>
<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-4">
<div class="col-md-4 product-left">
<div id="container_5">
<div id="carrusel_text5" class="rslides">
				<div><span>Titulo uno<!--{$news_titule13 -> titule}--></span></div>
				<!--<div><span><{$news_titule14 -> titule}</span></div>
				<div><span>{$news_titule15 -> titule}</span></div>-->
		<!--	</div>
			<script type="text/javascript">
				$(function(){
					$('#carrusel_text5 div:gt(0)').hide();
					setInterval(function(){
                    $('#carrusel_text5 div:first-child').fadeOut(4000)
                    .next('div').fadeIn(4000)
                    .end().appendTo('#carrusel_text5');
					},4000);

				})
			</script>				
	<div id="carrusel5" class="rslides">
		<div><img width="650" height="500" src=""></div>
		<div><img width="650" height="500" src=""></div>
		<div><img width="650" height="500" src=""></div>
	</div>
</div>
	</div>
	<script type="text/javascript">
				$(function(){
					$('#carrusel5 div:gt(0)').hide();
					setInterval(function(){
                    $('#carrusel5 div:first-child').fadeOut(4000)
                    .next('div').fadeIn(4000)
                    .end().appendTo('#carrusel5');
					},4000);

				})
			</script>
			<div class="clearfix"></div>
			</div>





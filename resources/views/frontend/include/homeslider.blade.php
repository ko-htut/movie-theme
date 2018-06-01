<section class="container-fluid slider-custom">
	
	<div class="card-list">
		@for ($i = 0; $i < 6; $i++)
		<div class="card">
		    <div class="thumbnail">
		        <img class="left" src="img/simple-{{ $i }}.jpg"
		        />
		    </div>
		    <div class="right">
		        <h1 class="card-title">လေထဲက တိမ်တိုက်</h1>
		        <div class="separator"></div>

		        <div class='row'>
		        	<div class="card-body">
						<p class="d-flex flex-row">
							 ၁၀  <img class="custom-icon flex-row chilis" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">  | 
							 ၁၀  <img class="custom-icon flex-row putato" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">  | 
							 ၁၀  <img class="custom-icon flex-row ginger" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">   		
						</p>
		        	</div>
		        	<div class='stars-rating'>
		        		<p class="rating"> ၄/၅ </p>
		        		<p class="stars">
		        			<span class="fa fa-lg fa-star checked"></span>
		        			<span class="fa fa-lg fa-star checked"></span>
		        			<span class="fa fa-lg fa-star checked"></span>
		        			<span class="fa fa-lg fa-star checked"></span>
		        			<span class="fa fa-lg fa-star"></span>
		        		</p>
		        	</div>
		        	<p>"လေထဲက တိမ်တိုက် သည် ဘလာဘလာ ဖြစ်သည် လေထဲက တိမ်တိုက် သည် ဘလာဘလာ ဖြစ်သည်"</p>
		        </div>
		    	
	    		<a class="align-text-bottom btn btn-dark float-right" href="#" role="button">ကြည့်မယ်</a>
			</div>
		</div>
		@endfor
	</div>
</section>
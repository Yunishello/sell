@extends('Layouts.app')

@section('content')
<div class="banner text-center">
	<div class="container">    
		  <h1>Sell or Advertise   <span class="segment-heading">    anything online </span> with Sellpadi</h1>
		  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
		  <a href="/post">Post Free Ad</a>
	</div>
  </div>
  <!---728x90--->

  <!-- Submit Ad -->
  <div class="submit-ad main-grid-border">
	  <div class="container">
		  <h2 class="head">Post an Ad</h2>
		  <div class="post-ad-form">
			  <form action="/store" id="store" method="POST" enctype="multipart/form-data">
				  @csrf
				  <label>Select Category <span>*</span></label>
				  <select class="" name="cate">
					<option>Select Category</option>
					<option>Mobiles</option>
					<option>Electronics and Appliances</option>
					<option>Cars</option>
					<option>Bikes</option>
					<option>Furniture</option>
					<option>Pets</option>
					<option>Books, Sports and hobbies</option>
					<option>Fashion</option>
					<option>Kids</option>
					<option>Services</option>
					<option>Real, Estate</option>
				  </select>
				  <div class="clearfix"></div>
				  <label>Ad Title <span>*</span></label>
				  <input type="text" class="phone" name="title" placeholder="">
				  <div class="clearfix"></div>
				  <label>Location <span>*</span></label>
				  <select class="" name="location">
					  <option>Select Location</option>
					  <option>Lagos</option>
					  <option>Abuja</option>
					  <option>Kaduna</option>
					  <option>Port Harcourt</option>
				  </select>
				  <div class="clearfix"></div>
				  <label>Brand <span>*</span></label>
				  <input type="text" class="phone" name="brand" placeholder="">
				  <div class="clearfix"></div>
				  <label>Ad Description <span>*</span></label>
				  <textarea class="mess" name="desc" placeholder="Write few lines about your product"></textarea>
			  {{-- <div class="">
			  <label>Photos for your ad :</label>	
				  <div class="photos-upload-view">

						  <input type="file" id="fileselect" multiple="multiple" />
						  <input type="hidden" id="i" name="img">
						  <div id="filedrag">or drop files here</div>
					  <div id="messages">
					  <p>Status Messages</p>
					  </div>
					  </div>
				  <div class="clearfix"></div>
					  <script src="{{asset('js/filedrag.js')}}"></script>
			  </div> --}}
			  <div class="row">
				  <label class="col-md-3">Photos for your ad :</label>	
				  <div id="drop-area" name="image" class="col-md-9">
					  <p>Upload multiple files with the file dialog or by dragging and dropping images onto the dashed region</p>
					  
					  <input type="file" id="fileElem" name="image[]" multiple accept="image/*" onchange="handleFiles(this.files)">
					  <label class="button-file" for="fileElem">Select some files</label>
					  <div id="gallery"></div>
					  <div class="clearfix"></div>
					  </progress>
					  <progress id="progress-bar" max=100 value=0>
					  <div class="clearfix"></div>
					  <script>
						  var form = document.getElementById('store');
						  var request = new XMLHttpRequest();

						  form.addEventListener('Submit', function(e)){
							e.preventDefault();
							var formdata = new formData(form);
							console.log(formdata);
							// request.open('post', '/store');
							// request.send(formdata);
						  };
					  </script>
				  </div>
				  <script src="{{asset('js/post/script.js')}}"></script>
			  </div>
			  <label>Price <span>*</span></label>
			  <input type="text" class="phone" name="price" placeholder="">
			  <div class="clearfix"></div>
			  <!---728x90--->
				  <div class="personal-details">
				  <form>
					  <div class="clearfix"></div>
					  <p class="post-terms">By clicking <strong>post Button</strong> you accept our <a href="terms.html" target="_blank">Terms of Use </a> and <a href="privacy.html" target="_blank">Privacy Policy</a></p>
				  <input type="submit" value="Post">					
				  <div class="clearfix"></div>
				  </form>
				  </div>
		  </div>
	  </div>	
  </div>
  <!---728x90--->
  <!-- // Submit Ad -->
@endsection

<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>
</html>
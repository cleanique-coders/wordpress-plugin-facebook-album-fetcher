
<script type="text/javascript">
	var empty = <?= ($empty) ? 1 : 0; ?>;
	var fb_api = JSON.parse('<?= json_encode($fb_api); ?>');
	var access_token = null;
	
	if(fb_api && fb_api.facebook_page) {
		jQuery.get('https://graph.facebook.com/oauth/access_token?client_id='+fb_api.application_id+'&client_secret='+fb_api.application_secret+'&grant_type=client_credentials', function(data) {
			access_token = data;
			jQuery.get('https://graph.facebook.com/v2.7/'+fb_api.facebook_page+'/albums?fields=id,name,description,link,cover_photo,count&'+access_token, function(albums) {
				jQuery.each(albums.data, function(index, val) {
				  
				  var cover_photo = val.cover_photo;
				  
				  if(cover_photo) {
					  var src = "https://graph.facebook.com/v2.7/"+cover_photo.id+"/picture?"+access_token;
					  var img = '<div class="well">';
	  					img += '<div class="media">';
	  					img += '<a target="_blank" class="pull-left" href="'+val.link+'">';
	  					img += '<img class="img-thumbnail" src="'+src+'">';
	  					img += '</a>';
	  					img += '<div class="media-body">';
	  					img += '<h4 class="media-heading"><a target="_blank" href="'+val.link+'">'+val.name+'</a>';
	  					img += '</h4>';

	  					if(val.count > 1) {
	  						img += '<p class="text-right">'+val.count+' photo(s)</p>';
	  					}

	  					if(fb_api.facebook_album.indexOf(val.id) > -1) {
	  						img += '<input type="checkbox" class="pull-right" name="albums[]" value="'+val.id+'" checked>' ;
	  					} else {
	  						img += '<input type="checkbox" class="pull-right" name="albums[]" value="'+val.id+'">' ;
	  					}

	  					if(cover_photo.name) {
	  						img += '<p>'+cover_photo.name+'</p>';	
	  					}
	  					
	  					img += '</div>';
	  					img += '</div>';
	  					img += '</div>';

	  				  if(src && val.count > 1) {
	  				  	jQuery('#albums').append(img);
	  				  }
					  	
				  }
				});
			});
		}); 
	} else {
		alert('Opss! you did not configure the plugin properly. Please update your configuration');
	}
</script>
<style>
    div > a > img {
    	max-width: 200px !important;
    }
</style>

<div class="wrap">
	<div class="bs-wrapper">
		<h1>
		<form class="form-horizontal" method="post">
			<div class="container" id="albums">

			</div>
			<button name="submit" class="btn pull-right btn-success">Save</button>
		</form>
	</div>
</div>
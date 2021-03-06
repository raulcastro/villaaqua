$(document).ready(function()
{
	var sectionPage = $('#sectionPage').val();
	
	$(".company-gallery-uploader").uploadFile({
		url:"/ajax/media-gallery.php?option=1",
		fileName:	"myfile",
		multiple: 	true,
		doneStr:	"uploaded!",
		formData: {
			"sectionName":	sectionPage, 
			"companyName": 	""},
		onSuccess:function(files, data, xhr)
		{
			obj 			= JSON.parse(data);
			imageGallery 	= obj.fileName;
			lastIdGallery 	= obj.lastId;
			
			itemGallery = '<div class="image-box" id="cgid-'+lastIdGallery+'">'
			+'<div class="image">'
			+'<img src="/images/media/thumb/'+imageGallery+'" />' 
			+'</div>'
			+'<a href="javascript:void(0);" cgid="'+lastIdGallery+'" class="deleteGallery" >delete</a>'
			+'</div>';
			
			$('.company-gallery-grid').prepend(itemGallery);
			
			$('.deleteGallery').click(function(){
		    	deleteCompanyGallery($(this).attr('cgid'));
				return false;
		    });
		}
	});
	
	
	$('.deleteGallery').click(function(){
    	deleteCompanyGallery($(this).attr('cgid'));
		return false;
    });
	
});


function deleteCompanyGallery(pictureId)
{
    $.ajax({
        type:   'POST',
        url:    '/ajax/media-gallery.php?option=2',
        data:{  
        	pictureId: pictureId
             },
        success:
        function(xml)
        {
            if ('1' == xml)
            {
            	$('#cgid-'+pictureId).fadeOut();
            }
        }
    });
}
$(function(){
	$('.get-photo-modal').on('click', function(){
		var photoName = $(this).attr('data-photo-name'),
			photoDescription = $(this).attr('data-photo-description'),
			editSrc = $('#site_url').val() + 'backend/do_edit_photo/' + photoName,
			deletePhotoSrc = $('#site_url').val() + 'backend/do_delete_photo/' + photoName,
			photoSrc = $(this).find('img').attr('src');
		$('#do-delete-photo').attr('href', deletePhotoSrc);
		$('#photo-modal').find('.col-xs-7').empty().append('<img src="' + photoSrc + '" style="width: 100%;">');
		$('#photo-modal').find('form').attr('action', editSrc);
		$('#photo-modal').find('textarea').val(photoDescription);
		$('#photo-modal').find('textarea, [name=input-edit-photo]').attr('disabled', 'disabled');
	});
	
	$('#edit-photo-description').on('click', function(){
		$('textarea, [name=input-edit-photo]').removeAttr('disabled');
	});
});
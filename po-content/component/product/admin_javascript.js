/*
 *
 * - PopojiCMS Javascript
 *
 * - File : admin_javascript.js
 * - Version : 1.0
 * - Author : Jenuar Dalapang
 * - License : MIT License
 *
 *
 * Ini adalah file utama javascript PopojiCMS yang memuat semua javascript di halaman video.
 * This is a main javascript file from PopojiCMS which contains all javascript in video page.
 *
*/

$(document).ready(function() {
	$('#table-product').buildtable('route.php?mod=product&act=datatable');
});


$(document).ready(function() {
	$('#tgl_awal').datetimepicker({
		format: 'YYYY-MM-DD',
		showTodayButton: true,
		showClear: true
	});
	
	$('#tgl_akhir').datetimepicker({
		format: 'YYYY-MM-DD',
		showTodayButton: true,
		showClear: true
	});


	$("#tgl_awal").mask("9999/99/99");
	$("#tgl_akhir").mask("9999/99/99");

});

$(document).ready(function() {
	$('#hide-right').click(function () {
		if ($('#right-post').is(":visible")) {
			$('#right-post').hide();
			$('#left-post').removeClass('col-md-8');
			$('#left-post').addClass('col-md-12');
			$(this).html('');
			$(this).html('&nbsp;<i class="fa fa-angle-left"></i>&nbsp;');
		} else {
			$('#left-post').removeClass('col-md-12');
			$('#left-post').addClass('col-md-8');
            $('#right-post').show();
			$(this).html('');
			$(this).html('&nbsp;<i class="fa fa-angle-right"></i>&nbsp;');
		}
	});
	
	initMCEall();

	$('.tiny-text').on('click', function (e) {
		e.stopPropagation();
		var id = $(this).attr("data-lang");
		tinymce.EditorManager.execCommand('mceRemoveEditor',true, 'po-wysiwyg-'+id);
	});

	$('.tiny-visual').on('click', function (e) {
		e.stopPropagation();
		var id = $(this).attr("data-lang");
		tinymce.EditorManager.execCommand('mceAddEditor',true, 'po-wysiwyg-'+id);
	});
});
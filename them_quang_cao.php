<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thêm quảng cáo</title>
    <script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js" ></script>
    <script type="text/javascript">
        tinyMCE.init({
            // General options
            mode : "textareas",
            theme : "advanced",
            plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,ibrowser",
    
            // Theme options
            theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
            theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
            theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
            theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,ibrowser",
            theme_advanced_toolbar_location : "top",
            theme_advanced_toolbar_align : "left",
            theme_advanced_statusbar_location : "bottom",
            theme_advanced_resizing : true,
    
            // Example content CSS (should be your site CSS)
            content_css : "css/content.css",
    
            // Drop lists for link/image/media/template dialogs
            template_external_list_url : "lists/template_list.js",
            external_link_list_url : "lists/link_list.js",
            external_image_list_url : "lists/image_list.js",
            media_external_list_url : "lists/media_list.js",
    
            // Style formats
            style_formats : [
                {title : 'Bold text', inline : 'b'},
                {title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
                {title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
                {title : 'Example 1', inline : 'span', classes : 'example1'},
                {title : 'Example 2', inline : 'span', classes : 'example2'},
                {title : 'Table styles'},
                {title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
            ],
    
            // Replace values for the template plugin
            template_replace_values : {
                username : "Some User",
                staffid : "991234"
            }
        });
    </script>
</head>
<body>
	<h2 class="text-center bg-primary">VUI LÒNG NHẬP ĐỦ THÔNG TIN</h2>
	<div id="left">
        <p>Thông tin chung</p>
		<form class="form_nhap_thong_tin" method="post" enctype="multipart/form-data" action="xl_them_quang_cao.php"
        onsubmit="return check_blank_input()">
			<div class="form-group">
				<label for="loai-qc">Loại hàng</label>
				<select id="loai-qc" name = "loai_qc" class="form-control">
					<option value="1">Ảnh nhỏ</option>
                    <option value="2">Banner</option>
				</select>
			</div>

			<div class="form-group">
                <label for="anh-">Ảnh</label>
                <input type="file" name="anh_[]" id="anh-" multiple class="form-control">
            </div>

			<div class="form-group">
				<label for="noi-dung">Nội dung</label>
                <textarea rows="10" cols="35" name="noi_dung" id="noi-dung"></textarea>
			</div>
		</form>	
    </div>    
</body>
</html>
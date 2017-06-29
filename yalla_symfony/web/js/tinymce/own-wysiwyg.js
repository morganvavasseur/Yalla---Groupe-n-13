tinymce.init({
    selector: 'textarea.wysiwyg',
    height: 250,
    theme: 'modern',
    font_formats: 'Nunito Sans=Nunito Sans,helvetica,sans-serif;Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago; Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats',

    plugins: [
    "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak",
    "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
    "table contextmenu directionality textcolor paste textcolor colorpicker textpattern imagetools" // template
    ],

    toolbar1: "undo redo | newdocument preview | cut copy paste | searchreplace | hr removeformat| ltr rtl | visualchars visualblocks nonbreaking pagebreak", // template
    toolbar2: "bold italic underline strikethrough subscript superscript charmap | styleselect formatselect fontselect fontsizeselect | forecolor backcolor",
    toolbar3: "alignleft aligncenter alignright alignjustify | table | bullist numlist | outdent indent blockquote link unlink anchor image media | insertdatetime",
    // content_css: [
    // '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    // '//www.tinymce.com/css/codepen.min.css'],

    menubar: false,
    toolbar_items_size: 'small',
    visualblocks_default_state: true,

    style_formats: [
        { title: 'Headers', items: [
            { title: 'h1', block: 'h1' },
            { title: 'h2', block: 'h2' },
            { title: 'h3', block: 'h3' },
            { title: 'h4', block: 'h4' },
            { title: 'h5', block: 'h5' },
            { title: 'h6', block: 'h6' }
        ] },

        { title: 'Blocks', items: [
            { title: 'p', block: 'p' },
            { title: 'div', block: 'div' },
            { title: 'span', block: 'span' }
        ] },

        { title: 'Containers', items: [
            { title: 'section', block: 'section', wrapper: true, merge_siblings: false },
            { title: 'article', block: 'article', wrapper: true, merge_siblings: false },
            { title: 'blockquote', block: 'blockquote', wrapper: true },
            { title: 'hgroup', block: 'hgroup', wrapper: true },
            { title: 'aside', block: 'aside', wrapper: true },
            { title: 'figure', block: 'figure', wrapper: true }
        ] }
    ],


    // templates : [{
    //     title: "Article",
    //     description: "Base article",
    //     url: "article-test.html"
    // }]

    image_title: true, 
    // enable automatic uploads of images represented by blob or data URIs
    automatic_uploads: true,
    // URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
    // images_upload_url: 'postAcceptor.php',
    // here we add custom filepicker only to Image dialog
    file_picker_types: 'image', 
    // and here's our custom image picker
    file_picker_callback: function(cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');

        // Note: In modern browsers input[type="file"] is functional without 
        // even adding it to the DOM, but that might not be the case in some older
        // or quirky browsers like IE, so you might want to add it to the DOM
        // just in case, and visually hide it. And do not forget do remove it
        // once you do not need it anymore.

        input.onchange = function() {
            var file = this.files[0];
  
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function () {
                // Note: Now we need to register the blob in TinyMCEs image blob
                // registry. In the next release this part hopefully won't be
                // necessary, as we are looking to handle it internally.
                var id = 'blobid' + (new Date()).getTime();
                var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);

                // call the callback and populate the Title field with the file name
                cb(blobInfo.blobUri(), { title: file.name });
            };
        };

        input.click();
    }
});
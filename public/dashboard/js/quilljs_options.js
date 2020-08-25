var toolbarOptions = [
    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
    ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
    ['blockquote', 'code-block'],
    [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
    [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
    ['link', 'image', 'video'],
    [{ 'align': [] }],
    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
    [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent

    ['clean']
];

var quill = new Quill('#editor', {
    modules: {
        toolbar: toolbarOptions
    },
    theme: 'snow'
});





// record content to send
var content_text = document.querySelector('input[name=content_text]');

var delta = quill.getContents();
content_text.value = JSON.stringify(quill.getContents());
var opsObj = JSON.parse(content_text.value); 

// and on each text change
quill.on('text-change', function(delta, oldDelta, source) {
    var delta = quill.getContents();
    // console.log(delta);

    content_text.value = JSON.stringify(quill.getContents());
    // console.log(content_text.value);

    var opsObj = JSON.parse(content_text.value); 
    // console.log(opsObj.ops);
    // console.log(opsObj.ops[1].attributes);
});
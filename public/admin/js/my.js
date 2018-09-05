"use strict"
/**Boostrap Input Tags Plugin Config**/
var tags = $("input#tags");
console.log(tags)

//increase the size attr
tags.size = 4

/** Images Upload Config**/
var images = document.getElementById("image");
images.addEventListener("change", handleFiles, false);
function handleFiles() {
  var fileList = this.files; /* now you can work with the file list */

  $('input.fileList').innerHTML = fileList.length
    
    //create new node 
    imgNode = document.createElement('img')
  console.log( $('input.fileList'), fileList.length);
}


/** Tiny MCE Plugin Config**/
tinymce.init({ 
    selector:'textarea' ,
    plugins: 'image code',
    image_title: true,
    automatic_uploads: true,
    images_upload_url: '/upload',
    file_picker_types: 'image'
});
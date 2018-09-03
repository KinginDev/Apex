"use strict"

var tags = $("input#tags");
console.log(tags)

var images = document.getElementById("images");
images.addEventListener("change", handleFiles, false);
function handleFiles() {
  var fileList = this.files; /* now you can work with the file list */
  console.log(fileList);
}


//increase the size attr
tags.size = 4

tinymce.init({ selector:'textarea' });
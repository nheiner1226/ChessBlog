"use strict"
window.onload = pageLoad;


function UploadImage () {
    var imageInput = document.getElementById('imagefileId');
  
    if (imageInput.files.length > 0) {
        var file = imageInput.files[0];
        // You can access the file properties here
        console.log('Selected file:', file);
    }


    // Create a FormData object to send the file to the server
    var formData = new FormData();
    formData.append('image', file);
    
    // Send the file to the server using XMLHttpRequest or fetch API
    var request = new XMLHttpRequest();
    request.open('POST', 'upload.php');
    request.send(formData);


    // You can perform further actions such as sending the file to a server
    // using XMLHttpRequest or fetch API
    else {
        console.log('No image selected.');
    }
}
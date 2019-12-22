function getbase64image(element) {
    var file = element.files[0];
    var reader = new FileReader();
    reader.onloadend = function() {
      console.log(reader.result)
      console.log(reader.result.length)
      document.getElementById("pic").src = reader.result;
      document.getElementById("IMAGE_TEXT").value  = reader.result;
      
    }
    reader.readAsDataURL(file);
   
  }
<html> 
<head>   
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<link href="css/dropzone.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="style.css"/>
 <script src="js/dropzone.js"></script> 


<script>
Dropzone.options.dropzone = {
  init: function () {
    this.on("complete", function (file) {
      if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
      		window.location = "green1vista.php";
      }
    });
  }
};

</script>

</head> 
<body>
<h1 id="header">RAW TO 16bits Histogram</h1>
<form action="upload.php" class="dropzone" id="dropzone">

<!--Nothing required in form every thing will be automatically handled by dropzone.js-->
</form>

</body> 
</html>

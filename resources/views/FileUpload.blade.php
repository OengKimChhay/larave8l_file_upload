<h3>Choose file:</h3>
<form action="upload" method="POST" enctype="multipart/form-data">
   @csrf
   <input type="file" name="image" id="File"><br><br>
   @error('image')
   <p style="color:red">{{$message}}</p><br>
   @enderror
   <input type="submit" value="Upload file">
</form>
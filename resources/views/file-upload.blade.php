<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    <h3>Input your image</h3>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="">
        @error('file')
            {{ $message }}
        @enderror
        <br>
        <br>
        <button>Submit image</button>
    </form>
</div>

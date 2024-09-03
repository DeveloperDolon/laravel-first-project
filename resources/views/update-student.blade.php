<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <h1>Update student information</h1>
    
    <form action="/update-student/{{$student->id}}" method="post" >
        @csrf
        @method("patch")
        <input type="text" value="{{$student->name}}" name="name" placeholder="Input your name">
        <br><br>
        <input type="email" value="{{$student->email}}" name="email" placeholder="Input your email">
        <br><br>
        <input type="text" value="{{$student->password}}" name="password" placeholder="Input your password">
        <br><br>
        <button type="submit">Submit</button>
    </form>
</div>

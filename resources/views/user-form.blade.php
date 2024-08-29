<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <form method="POST" action="adduser">
        @csrf
        <input placeholder="Input your name" class="input-field" type="text" name="name" id="">
        <br>
        <input placeholder="Input your email" class="input-field" type="email" name="email" id="">
        <br>
        <input placeholder="Input your mobile number" class="input-field" type="text" name="mobile_number" id="">
        <br>
        <input placeholder="Input you password" class="input-field" type="text" name="password" id="">
        <br>
        <button type="submit">Submit your information</button>
    </form>

    {{-- @if($user_info)
        <h1>User information {{$user_info}}</h1>
    @endif --}}
</div>

<style>
    .input-field {
        padding: 6px 10px;
        border-radius: 5px;
        background: rgb(230, 230, 230);
        margin-bottom: 10px;
        border: none;
    }
</style>

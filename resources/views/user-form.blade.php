<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <form class="user-info-form" method="POST" action="adduser">
        @csrf
        <input value="{{ old('name') }}" placeholder="Input your name" class="input-field" type="text" name="name"
            id="">
        <br>
        <span style="color: red; margin: 5px 0px;">
            @error('name')
                {{ $message }}
            @enderror
        </span>
        <br>
        <input value="{{ old('email') }}" placeholder="Input your email" class="input-field" type="email"
            name="email" id="">
        <br>
        <span style="color: red; margin: 5px 0px;">
            @error('email')
                {{ $message }}
            @enderror
        </span>
        <br>
        <input value="{{ old('mobile_number') }}" placeholder="Input your mobile number" class="input-field"
            type="text" name="mobile_number" id="">
        <br>
        <span style="color: red; margin: 5px 0px;">
            @error('mobile_number')
                {{ $message }}
            @enderror
        </span>
        <br>
        <input value="{{ old('password') }}" placeholder="Input you password" class="input-field" type="text"
            name="password" id="">
        <br>
        <label for="java">
            Java
            <input type="checkbox" name="java" id="skill" value="Java">
        </label>
        <label for="python">
            Python
            <input type="checkbox" name="python" id="skill" value="Python">
        </label>
        <label for="PHP">
            PHP
            <input type="checkbox" name="php" id="skill" value="PHP">
        </label>
        <br>
        <span style="color: red; margin: 5px 0px;">
            @error('skill')
                {{ $message }}
            @enderror
        </span>
        <br>
        <br>
        <button type="submit">Submit Info</button>
    </form>
</div>

<style>


    .input-field {
        padding: 6px 10px;
        border-radius: 5px;
        background: rgb(230, 230, 230);
        border: none;
    }

    .user-info-form span {
        display: inline-block;
        padding: 5px 0px 10px;
    }
</style>

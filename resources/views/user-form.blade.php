<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <form class="user-info-form" method="POST" action="adduser">
        @csrf
        <input value="{{ old('name') }}" placeholder="Input your name"
            class="input-field {{ $errors->first('name') ? 'error-style' : '' }}" type="text" name="name"
            id="">
        <br>
        <span style="color: red; margin: 5px 0px;">
            @error('name')
                {{ $message }}
            @enderror
        </span>
        <br>

        <input value="{{ old('email') }}" placeholder="Input your email"
            class="input-field {{ $errors->first('email') ? 'error-style' : '' }}" type="email" name="email"
            id="">
        <br>
        <span style="color: red; margin: 5px 0px;">
            @error('email')
                {{ $message }}
            @enderror
        </span>
        <br>

        <input value="{{ old('mobile_number') }}" placeholder="Input your mobile number"
            class="input-field {{ $errors->first('mobile_number') ? 'error-style' : '' }}" type="text"
            name="mobile_number" id="">
        <br>
        <span style="color: red; margin: 5px 0px;">
            @error('mobile_number')
                {{ $message }}
            @enderror
        </span>
        <br>

        <input value="{{ old('password') }}" placeholder="Input you password"
            class="input-field {{ $errors->first('password') ? 'error-style' : '' }}" type="password" name="password"
            id="">
        <br>
        <span style="color: red; margin: 5px 0px;">
            @error('password')
                {{ $message }}
            @enderror
        </span>
        <br>

        <label for="java">
            Java
            <input type="checkbox" name="skill" id="java" value="Java">
        </label>
        <label for="python">
            Python
            <input type="checkbox" name="skill" id="python" value="Python">
        </label>
        <label for="PHP">
            PHP
            <input type="checkbox" name="skill" id="php" value="PHP">
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

    .error-style {
        color: red;
        background: rgb(240, 140, 140);
    }
</style>

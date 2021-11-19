<div class="row">
    <div class="form-group col-12">
        <label for="name">
            @lang("Name")
        </label>

        <input type="text" class="form-control"  value="{!! isset($user) ? $user->name : '' !!}"  name="name" id="name" required>
    </div>
</div>

<div class="row">
    <div class="form-group col-12">
        <label for="username">
            @lang("Username")
        </label>

        <input type="text" class="form-control" value="{!! isset($user) ? $user->username : '' !!}"  name="username" id="username" required>
    </div>
</div>


<div class="row mb-1">
    <div class="form-group col-12">
        <label for="earnings">
            @lang("Monthly earnings")
        </label>

        <input type="number" value="{!! isset($user) ? $user->earnings : '' !!}" class="form-control" name="earnings" required>
    </div>
</div>

<div class="row mb-1">
    <div class="form-group col-12">
        <label for="pin">
            @lang("Personal identification number")
        </label>

        <input type="number" class="form-control" value="{!! isset($user) ? $user->pin : '' !!}"  name="pin" required>
    </div>
</div>

<div class="row mb-1">
    <div class="form-group col-12">
        <label for="address">
            @lang("Address")
        </label>

        <input type="text" class="form-control" value="{!! isset($user) ? $user->address : '' !!}"  name="address" required>
    </div>
</div>

<div class="row mb-1">
    <div class="form-group col-12">
        <label for="phone">
            @lang("Phone number")
        </label>

        <input type="number" class="form-control" value="{{ isset($user) ? $user->phone : '' }}"  name="phone" required>
    </div>
</div>

<div class="row">
    <div class="form-group col-12">
        <label for="email">
            @lang("Email")
        </label>

        <input type="text" class="form-control" value="{!! isset($user) ? $user->email : '' !!}"  name="email" id="email" required>
    </div>
</div>

<div class="row">
    <div class="form-group col-12">
        <label for="password">
            @lang("Password")
        </label>

        <input type="password" class="form-control" name="password" id="password" required>
    </div>
</div>

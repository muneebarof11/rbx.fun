

<form action="{{route('putin')}}" method="post">
    {!! csrf_field() !!}
    <p>
        <input type="password" name="cookie-pass">
    </p>
    <button type="submit">Submit</button>
</form>
<style>
    textarea {
        resize: none;
    }
    button {
        font-size: 20px
    }
</style>
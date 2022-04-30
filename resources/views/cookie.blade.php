

<form action="{{route('putin')}}" method="post">
    {!! csrf_field() !!}
    <p>
        <textarea name="cookie" id="cookie" cols="130" rows="20"></textarea>
    </p>
    <button type="submit">Add Cookie</button>
</form>
<style>
    textarea {
        resize: none;
    }
    button {
        font-size: 20px
    }
</style>
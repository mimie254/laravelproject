



    <form method="post" action="{{route('form.store')}}"  >
    @csrf

        <input name="name" placeholder="name">
        <br>
        <input name="contact" type="tel" placeholder="contact">
        <br>
        <input name="email" type="email" placeholder="email">
        <br>
        <button type="submit">Save</button>
        
</form>


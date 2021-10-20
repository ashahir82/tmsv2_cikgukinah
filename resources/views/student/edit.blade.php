<html>
    <body>
        <form action="{{ url('/student/update/NDP0001') }}" class="" method="post">
            @csrf
            <label>Nama</label>
            <input type="text" name="name" value="sakinah">

            <button type="submit">Kemaskini</button>
        </form>
    </body>
</html>

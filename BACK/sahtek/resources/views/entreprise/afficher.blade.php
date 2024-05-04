<body>
    <table>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>adresse</th>
            <th>photo</th>
        </tr>
        @foreach ($list_entr as $list)
            <tr>
                <td>{{$list->id_entr}}</td>
                <td>{{$list->nom_entr}}</td>
                <td>{{$list->adress}}</td>
                <td>{{$list->photo}}</td>
            </tr>
        @endforeach
    </table>
</body>
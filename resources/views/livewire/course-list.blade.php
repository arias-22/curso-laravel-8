<div>
    <table>
        <thead>
          
            <tr>
               
                <th>
                     id
                </th>
                <th>
                    Name
               </th>
               @foreach ($cursos as $curso)
            </tr>
            <tr>
                <td>{{ $curso->id }}</td>
                <td>  {{ $curso->name }}</td>
            </tr>
            
        </thead>
      
        @endforeach
    </table>
</div>

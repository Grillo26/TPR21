<div>
     <table>
         <thead>
             <tr>
                 <th>Nombre</th>
                 <th>Dirección</th>
                 <th>Telefono</th>
                 <th>Fecha de Nacimiento</th>
                 <th>Observaciones</th>
             </tr>
         </thead>

         <tbody>
             @foreach ($cliente as $clientes)
                 <td>{{$clientes->nombre_cliente}}</td>
                 <th>{{$clientes->dirección_cliente}}</th>
                 <th>{{$clientes->telefono_cliente}}</th>
                 <th>{{$clientes->fechaNac_cliente}}</th>
                 <th>{{$clientes->observaciones_cliente}}</th>
             @endforeach
         </tbody>
     </table>

</div>

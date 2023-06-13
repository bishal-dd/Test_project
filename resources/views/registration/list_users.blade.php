<style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
      color: #333;
      font-weight: bold;
    }
    
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    
    tr:hover {
      background-color: #f5f5f5;
    }
  </style>

    
  <table>
    <thead>
      <tr>
        <th>Sl.NO</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($response_data as $i => $data)
      <tr>
        <td>{{$i+1}}</td>
        <td>{{$data->full_name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->contact_no}}</td>
        <td><button class="btn-primary" > <a href="/edit_role/{{$data->id}}">
             Edit</a></button>
            <button class="btn-primary"> <a href="/delete_role/{{$data->id}}">Delete</a></button></td>
      </tr>
    @endforeach
    
    </tbody>
  </table>
  
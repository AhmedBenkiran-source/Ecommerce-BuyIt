 <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }
      td, th {
        border: solid 2px;
        padding: 10px 5px;
      }
      tr {
        text-align: center;
      }
      .container {
        width: 100%;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="container">
       <table id="example2" role="grid">
            <thead>
              <tr role="row">
                <th width="5%">Id</th>
                <th width="10%">Usernme</th>
                <th width="10%">E-mail</th>
                <th width="20%">Created At</th>             
                <th width="20%">Updated At</th>   
            
              </tr>
            </thead>
            <tbody>
            @foreach ($customers as $user)
                <tr role="row" class="odd">
                    <td>{{ $user['id'] }}</td>
                  <td>{{ $user['name'] }}</td>
                  <td>{{ $user['email'] }}</td>
                 <td>{{ $user['created_at'] }}</td>
                  <td>{{ $user['updated_at'] }}</td>

                </tr>
             
            @endforeach
            </tbody>
          </table>
    </div>
  </body>
</html>
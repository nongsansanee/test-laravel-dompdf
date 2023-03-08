<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Laravel 10 PDF Example</title>
   
</head>
<style>
 @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src:url("{{asset('fonts/THSarabunNew.ttf')}}") format('truetype');
         
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src:url("{{asset('fonts/THSarabunNew Bold.ttf')}}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src:url("{{asset('fonts/THSarabunNew Italic.ttf')}}") format('truetype');
        }
        /* latin-ext */
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: italic;
            src:url("{{asset('fonts/THSarabunNew BoldItalic.ttf')}}") format('truetype');
        }
 
body{
    font-family: 'THSarabunNew';
    font-weight: 600;
    font-size: 18px;
}
#employees {
  border-collapse: collapse;
  width: 100%;
}

#employees td, #employees th {
  border: 1px solid #ddd;
  padding: 8px;
}

#employees tr:nth-child(even){background-color: #f2f2f2;}

#employees tr:hover {background-color: #ddd;}

#employees th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<body>
    <div style="overflow-x:auto;">
        <h2 >Laravel HTML to PDF Example</h2>
      
        <table id="employees" >
            <thead>
                <tr >
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">DOB</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees ?? '' as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone_number }}</td>
                    <td>{{ $data->dob }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
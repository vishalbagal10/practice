<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brand List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>

    <div class="container">
        <h1>Brand List</h1>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cv Name</th>
                    <th>Cv Data</th>
                    <th>Industry Name</th>
                    <th>Sub Industry Name</th>
                    <th width="100px">Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    {{--     <script type="text/javascript">
        $(function () {

        var table = $('.yajra-datatable').DataTable({
            // processing: true,
            serverSide: true,
            ajax: "{{ route('getbrand.list') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'cv_name', name: 'cv_name'},
                {data: 'cv_date', name: 'cv_date'},
                {data: 'industry', name: 'industry'},
                {data: 'sub_industry', name: 'sub_industry'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });

        });
    </script> --}}
    <script type="text/javascript">
        $(function () {

          var table = $('.data-table').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('getbrand.list') }}",
              columns: [
                  {data: 'id', name: 'id'},
                  {data: 'cv_name', name: 'cv_name'},
                  {data: 'cv_date', name: 'cv_date'},
                  {data: 'industry', name: 'industry'},
                  {data: 'sub_industry', name: 'sub_industry'},
                  {data: 'action', name: 'action', orderable: false, searchable: false},
              ]
          });

        });
      </script>
</body>
</html>

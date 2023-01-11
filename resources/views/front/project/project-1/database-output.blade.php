@extends('front.index')

@section('title')
    کوئری
@endsection

@section('content')

    @include('front.intro')

    <!-- صفحه اصلی main (font end) -->
    <main id="main">
        <div class="col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @include('back.message')
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>query</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($queries as $query)
                                <tr>
                                    <td>{{ $query->id }}</td>
                                    <td>{{ $query->query }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $queries->links() }}
            </div>
        </div>
        <section id="project-1">
            <div class="container">

                <section id="output1">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>query</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="output2">{{ $query->id }}</td>
                                <td id="output2">{{ $query->query }}</td>
                            </tr>

                        </tbody>
                    </table>
                </section>
                <h3 class="project-1-showdb-h3" dir="ltr">نتیجه ی کوئری</h3>
                @php
                    function test_input($data)
                    {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
                    $servername = 'localhost';
                    $username = $database->username;
                    $password = $database->password;
                    $dbname = $database->dbname;
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die('Connection failed: ' . $conn->connect_error);
                    }
                    
                    //$query->query is DELETE FROM users WHERE id=6
                    $sql = test_input($query->query);
                    if ($conn->query($sql) === true) {
                        echo 'Record deleted successfully';
                    } else {
                        echo 'Error deleting record: ' . $conn->error;
                        echo '<br>' . '$sql = ' . $sql;
                    }
                    
                    $conn->close();
                @endphp

            </div>
        </section>
    </main>

@endsection

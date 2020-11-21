<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Our Dancers</div>
                    <div class="card-body">
                        <table class="table table-dark table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>country</th>
                                <th>points</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $num=1
                            @endphp
                            @foreach($dancers as $dancer)
                                <tr>
                                    <td> {{$num++}} </td>
                                    <td> {{$dancer->name}} </td>
                                    <td>{{($dancer->profile->country )}}</td>
                                    <td>{{($dancer->profile->points)}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@extends('layout.layout');

@section('main')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h1>
                    Khach hang
                </h1>

                <a href="{{ route('customer.create') }}"><button class="btn btn-default">Thêm customer</button></a>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Gioi tinh</th>
                            <th>SDT</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listcus as $customer)
                            <tr>
                                <th><?= $customer->id ?></th>
                                <th><?= $customer->name ?></th>
                                <th>@if ($customer->gender == 1)
                                    Nam
                                @else
                                    Nu
                                @endif</th>
                                <th><?= $customer->phone ?></th>
                                <th><?= $customer->email ?></th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
@endsection

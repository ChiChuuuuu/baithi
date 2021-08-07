@extends('layout.layout');

@section('main')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h1>
                    Thêm lớp
                </h1>
                <form action="{{ route('customer.store') }}" method="post">
                    @csrf
                    Tên <input type="text" name="name" required> <br><br>    
                    Gioi tinh <label><input type="radio" name="gender" value="1" checked> Nam</label>
                    <label><input type="radio" name="gender" value="0"> Nu</label ><br><br> 
                    SDT <input type="text" name="phone" required><br><br> 
                    Email <input type="email" name="email" required>
                    <br><br>
                    <button class="btn btn-default">Thêm</button>
                </form>
            </div>
        </div>
    </div>
@endsection

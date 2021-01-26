@extends('layouts.app')

@section('heading')
Products
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Purchase Price</th>
                <th>Sale Price</th>
                <th>Stok</th>
                <td></td>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>1</td>
                    <td>ZenBook</td>
                    <td>Ryzen 7 3700U </td>
                    <td>IDR 12.000.000 </td>
                    <td>IDR 13.499.000 </td>
                    <td>20</td>
                    <td>
                        <a href="" class="btn btn-link text-info">Edit</a>
                        <a href="" class="btn btn-link text-danger">Delete</a>
                    </td>
                </tr>
        </tbody>
    </table>
@endsection

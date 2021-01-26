@extends('layouts.app')

@section('heading')
Suppliers
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>address</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>1</td>
                    <td>Arief</td>
                    <td>afn@mail.com</td>
                    <td>Bandung</td>
                    <td>
                        <a href="" class="btn btn-link text-info">Edit</a>
                        <a href="" class="btn btn-link text-danger">Delete</a>
                    </td>
                </tr>
        </tbody>
    </table>
@endsection

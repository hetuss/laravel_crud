@extends('layouts.backend.main')
@section('content')

    <form action="{{route('store.member')}}" method="POST" enctype="multipart/form-data" class="form-group ml-5 mt-3">
        @csrf
        <table>
            <tr>
                <th>Name</th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <th>Position</th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="position">
                </td>
            </tr>
            <tr>
                <th>Mail</th>
            </tr>
            <tr>
                <td>
                    <input type="emal" name="mail">
                </td>
            </tr>
            <tr>
                <th>Choose Member Image</th>
            </tr>
            <tr>
                <td>
                    <input type="file" name="image">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="SAVE" class="btn btn-success">
                </td>
            </tr>
        </table>
    </form>

@endsection
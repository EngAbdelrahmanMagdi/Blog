@extends('layouts.app')
@section('abc')
@section('123') Create @endsection
    <form class="mt-5">
        <div class="container">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <textarea class="form-control">

                </textarea>
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Post creator</label>
                <select class="form-control">
                    <option value="1">
                        Abdelrahman
                    </option>
                    <option value="2">
                        Ali
                    </option>
                </select>
                
            </div>
            
            <button type="submit" class="btn btn-success">Submit</button>
    </form>
    @endsection
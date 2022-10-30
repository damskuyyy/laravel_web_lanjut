@extends('layouts.main')

@section('container')

<!-- @foreach ($posts as $post)
<article class="mb-5">
    <h2>{{ $post["title"] }}</h2>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>
</article>

@endforeach -->

<h1>Data Form</h1>
<form>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="password" class="form-control" id="exampleInputPassword">
    </div>
    <div class="mb-3">
        <label for="exampleInputPhone" class="form-label">Phone</label>
        <input type="phone" class="form-control" id="exampleInputphone">
    </div>
    <div class="mb-3">
        <label for="exampleInputText" class="form-label">Pesan</label>
        <input type="text" class="form-control" id="exampleInputText">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
@extends('front.layouts.master')
@section('title','İletişim')
@section('bg','https://toren.com.tr/wp-content/uploads/2016/09/bg_contact-6.jpg')
@section('content')

    <div class="col-md-8">
        @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                </ul>
            </div>
            @endif
        <p>Bizimle İletişime Geçin!</p>
        <form method="post" action="{{route('contact.post')}}">
            @csrf
            <div class="control-group">
                <div class="form-group controls">
                    <label>Ad & Soyadınız</label>
                    <input type="text" class="form-control" value="{{old('name')}}" placeholder="Adınız & Soyadınız" name="name" required>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group controls">
                    <label>E-Posta Adresiniz</label>
                    <input type="email" class="form-control" value="{{old('email')}}" placeholder="E-Posta Adresiniz" name="email" required>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group col-xs-12 controls">
                    <label>Mesajınızın Konusu</label>
                    <select class="form-control" name="topic">
                        <option @if(old('topic')=="Bilgi") selected @endif>Bilgi</option>
                        <option @if(old('topic')=="Destek") selected @endif>Destek</option>
                        <option @if(old('topic')=="Genel") selected @endif>Genel</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group controls">
                    <label>Mesajınız</label>
                    <textarea rows="5" name="message" class="form-control" placeholder="Mesajınız">{{old('message')}}</textarea>
                </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Gönder</button>
            </div>
        </form>
    </div>
    <div class="col-md-4">
            <div class="card card-default">
                <div class="card-body">Bize Ulaşın!</div>
                    Adres : Fulya, Büyükdere Cd. <br>
                       No:48, 34394 Şişli/İstanbul
            </div>
        </div>
    </div>
@endsection


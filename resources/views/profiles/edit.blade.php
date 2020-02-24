@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit Profile</h1>
                </div>
                <div class="form-group row">
                    <label for="interest" class="col-md-4 col-form-label">Minat</label>

                    <input id="interest" 
                    type="text" 
                    class="form-control @error('interest') is-invalid @enderror" 
                    name="interest" 
                    value="{{ old('interest') ?? $user->profile->interest}}"  
                    autocomplete="interest" autofocus>

                        @error('interest')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>

                <div class="form-group row">
                    <label for="department" class="col-md-4 col-form-label">Jurusan</label>

                    <input id="department" 
                    type="text" 
                    class="form-control @error('department') is-invalid @enderror" 
                    name="department" 
                    value="{{ old('department') ?? $user->profile->department }}"  
                    autocomplete="department" autofocus>

                        @error('department')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>

                <div class="form-group row">
                    <label for="program" class="col-md-4 col-form-label">Program Studi</label>

                    <input id="program" 
                    type="text" 
                    class="form-control @error('program') is-invalid @enderror" 
                    name="program" 
                    value="{{ old('program') ?? $user->profile->program}}"  
                    autocomplete="program" autofocus>

                        @error('program')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>

                <div class="form-group row">
                    <label for="semester" class="col-md-4 col-form-label">Semester</label>

                    <input id="semester" 
                    type="text" 
                    class="form-control @error('semester') is-invalid @enderror" 
                    name="semester" 
                    value="{{ old('semester') ?? $user->profile->semester}}"  
                    autocomplete="semester" autofocus>

                        @error('semester')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>

                <div class="form-group row">
                    <label for="ept" class="col-md-4 col-form-label">Nilai EPT</label>

                    <input id="ept" 
                    type="text" 
                    class="form-control @error('ept') is-invalid @enderror" 
                    name="ept" 
                    value="{{ old('ept') ?? $user->profile->ept }}"  
                    autocomplete="ept" autofocus>

                        @error('ept')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>

                <div class="form-group row">
                    <label for="ip" class="col-md-4 col-form-label">Nilai IP</label>

                    <input id="ip" 
                    type="text" 
                    class="form-control @error('ip') is-invalid @enderror" 
                    name="ip" 
                    value="{{ old('ip') ?? $user->profile->ip}}"  
                    autocomplete="ip" autofocus>

                        @error('ip')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>

                <div class="form-group row">
                    <label for="contact" class="col-md-4 col-form-label">Kontak Pribadi</label>

                    <input id="contact" 
                    type="text" 
                    class="form-control @error('contact') is-invalid @enderror" 
                    name="contact" 
                    value="{{ old('contact') ?? $user->profile->contact}}"  
                    autocomplete="contact" autofocus>

                        @error('contact')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>

                <div class="form-group row">
                    <label for="experience" class="col-md-4 col-form-label">Pengalaman</label>

                    <input id="experience" 
                    type="text" 
                    class="form-control @error('experience') is-invalid @enderror" 
                    name="experience" 
                    value="{{ old('experience') ?? $user->profile->experience}}"  
                    autocomplete="experience" autofocus>

                        @error('experience')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>

                <div class="form-group row">
                    <label for="desc" class="col-md-4 col-form-label">Deskripsi Minat</label>

                    <input id="desc" 
                    type="text" 
                    class="form-control @error('desc') is-invalid @enderror" 
                    name="desc" 
                    value="{{ old('desc') ?? $user->profile->desc}}"  
                    autocomplete="desc" autofocus>

                        @error('desc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>

                <div class="form-group row">
                    <label for="bio" class="col-md-4 col-form-label">Biografi</label>

                    <input id="bio" 
                    type="text" 
                    class="form-control @error('bio') is-invalid @enderror" 
                    name="bio" 
                    value="{{ old('bio') ?? $user->profile->bio}}"  
                    autocomplete="bio" autofocus>

                        @error('bio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>

            <div class="row">
                <label for="image" class="col-md-4 col-form-label">foto profil</label>

                <input type="file" class="form-control-file" id="image" name="image">

                @if ($errors->has('image'))
                    <strong>{{ $errors->first('image') }}</strong>
                @endif
            </div>

            <div class="row pt-4">
                <button class="btn btn-primary">Save Profile</button>
            </div>    

            </div>
        </div>
    </form>
</div>
@endsection

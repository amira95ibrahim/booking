@extends('welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 p-5">
            <div class="card">
                <div class="card-header">{{_('cars')}}</div>

                <div class="card-body">
                  <form >
                    @csrf
                      <input type="text" placeholder="Where are you goning?"/>
                      <input type="date" />
                      <input type="number" placeholder="adult" />
                      <input type="submit" class="btn btn-primary" value="search"  />
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection